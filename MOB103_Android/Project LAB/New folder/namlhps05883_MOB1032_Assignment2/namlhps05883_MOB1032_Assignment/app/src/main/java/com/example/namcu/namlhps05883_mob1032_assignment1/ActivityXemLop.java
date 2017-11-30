package com.example.namcu.namlhps05883_mob1032_assignment1;

import android.content.DialogInterface;
import android.database.Cursor;
import android.os.Bundle;
import android.support.v7.app.AlertDialog;
import android.support.v7.app.AppCompatActivity;
import android.view.View;
import android.widget.AdapterView;
import android.widget.ListView;
import android.widget.Toast;

import java.util.ArrayList;

public class ActivityXemLop extends AppCompatActivity {
    Database database;
    LopHocAdapter lopHocAdapter;
    ListView listView;
    int position;
    ArrayList<LopHoc> lopHocArrayList = new ArrayList<LopHoc>();

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.danhsachlop);
        database = new Database(this, "databaseLop", null, 1);

        listView = (ListView) findViewById(R.id.lvLopHoc);
        lopHocAdapter = new LopHocAdapter(this, R.layout.custom_listview_lophoc, lopHocArrayList);
        listView.setAdapter(lopHocAdapter);
        listView.setOnItemLongClickListener(new AdapterView.OnItemLongClickListener() {
            @Override
            public boolean onItemLongClick(AdapterView<?> adapterView, View view, int i, long l) {
                position = i;
                xoaLopHoc();
                return false;
            }
        });
        getDuLieuLopHoc();
    }


    public void getDuLieuLopHoc() { //lấy dữ liệu toàn bộ lớp học từ database truyền vào arraylist lớp học
        lopHocArrayList.clear();
        Cursor dataLop = database.GetData("SELECT * FROM LopHoc");
        while (dataLop.moveToNext()) {
            LopHoc lopHoc = new LopHoc();
            String maLop = dataLop.getString(0);
            String tenLop = dataLop.getString(1);
            lopHoc.setMaLop(maLop);
            lopHoc.setTenLop(tenLop);
            lopHocArrayList.add(lopHoc);
            //tb("số thứ tự: "+stt+"\n"+"Mã lớp: "+maLop+"\n" +"Tên lớp: "+ tenLop);

        }
        lopHocAdapter.notifyDataSetChanged();   //cập nhật adapter listview lớp học
    }

    public void xoaLopHoc() {
        LopHoc lopHoc = lopHocArrayList.get(position);
        AlertDialog.Builder b = new AlertDialog.Builder(this);
        b.setTitle("Question?");
        b.setMessage("Bạn có muốn xóa lớp ["+lopHoc.getMaLop()+"-"+lopHoc.getTenLop()+"]"+" (Bao gồm cả sinh viên trong lớp) không?");
        b.setPositiveButton("Yes", new DialogInterface.OnClickListener() {
            @Override
            public void onClick(DialogInterface dialog, int which) {
                LopHoc lopHoc = lopHocArrayList.get(position);
                String maLop = lopHoc.getMaLop();
                database.QuerryData("DELETE FROM LopHoc WHERE MaLop='"+maLop+"'");
                try {
                    database.QuerryData("DELETE FROM SinhVien WHERE MaLop='"+maLop+"'");
                    tb("Đã xóa lớp và sinh viên trong lớp");
                }catch (Exception e){
                    tb(e+"");
                }

                getDuLieuLopHoc();

            }
        });
        b.setNegativeButton("No", new DialogInterface.OnClickListener() {
            @Override

            public void onClick(DialogInterface dialog, int which)

            {

                dialog.cancel();

            }

        });

        b.create().show();
    }

    public void tb(String e) {
        Toast.makeText(this, e, Toast.LENGTH_SHORT).show();
    }
}
