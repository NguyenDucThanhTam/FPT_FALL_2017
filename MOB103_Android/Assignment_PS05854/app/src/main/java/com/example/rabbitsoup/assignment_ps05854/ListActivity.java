package com.example.rabbitsoup.assignment_ps05854;

import android.app.Dialog;
import android.content.Intent;
import android.database.Cursor;
import android.os.Bundle;
import android.support.annotation.Nullable;
import android.view.Menu;
import android.view.MenuItem;
import android.view.View;
import android.widget.AdapterView;
import android.widget.EditText;
import android.widget.ListView;
import android.widget.TextView;
import android.widget.Toast;

import java.util.ArrayList;

/**
 * Created by Rabbit Soup on 8/14/2017.
 */

public class ListActivity extends ManagerStudentActivity  {
    DataBaseSQLiteClass databaseClass;
    ArrayList<ClassClass> arrClass;
    ClassAdapter adapter;
    TextView txtStt,txtID,txtNAME;
    ListView lvClass;
    int position;
    @Override
    protected void onCreate(@Nullable Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.list);

        databaseClass = new DataBaseSQLiteClass(this, "databaseLop.sqlite", null, 1);

        lvClass = (ListView) findViewById(R.id.lvClass);
        adapter = new ClassAdapter(this, R.layout.donglop, arrClass);
        lvClass.setAdapter(adapter);
        lvClass.setOnItemLongClickListener(new AdapterView.OnItemLongClickListener() {
            @Override
            public boolean onItemLongClick(AdapterView<?> adapterView, View view, int i, long l) {
                position = i;
                xoaLopHoc();
                return false;
            }
        });
//        getAllData();
        //Lay Intent
//        Intent getIntent=getIntent();
        //Lay Bundle
//        Bundle getBundle = getIntent.getBundleExtra("data");
        //Lay du lieu cua bundle
//        String txtGetId = getBundle.getString("Id");
//        String txtGetTen = getBundle.getString("Name");
//        Toast.makeText(this, txtGetId+txtGetTen, Toast.LENGTH_SHORT).show();
        //Tao bang

        //Cursor
//        Cursor cursor = database.getData("SELECT * FROM lop");
        //Vong lap lay du lieu
//        while(cursor.moveToNext()){
//            int stt = cursor.getInt(0);
//            String id = cursor.getString(1);
//            String name = cursor.getString(2);
//            ClassClass classList = new ClassClass(stt, id, name);
//            arrClass.add(classList);
//        }
//        adapter.notifyDataSetChanged();

    }

    private void xoaLopHoc() {
    }

    public void getAllData() { //lấy dữ liệu toàn bộ lớp học từ database truyền vào arraylist lớp học
        arrClass.clear();
        try{
            Cursor dataLop = databaseClass.getData("SELECT * FROM lop");
            while (dataLop.moveToNext()) {
                ClassClass lopHoc = new ClassClass();
                int stt = dataLop.getInt(0);
                String maLop = dataLop.getString(1);
                String tenLop = dataLop.getString(2);
                lopHoc.setId(maLop);
                lopHoc.setName(tenLop);
                arrClass.add(lopHoc);
                //tb("số thứ tự: "+stt+"\n"+"Mã lớp: "+maLop+"\n" +"Tên lớp: "+ tenLop);

            }
        }
        catch (Exception ex){
            Toast.makeText(this, ex+"", Toast.LENGTH_LONG).show();
        }

        adapter.notifyDataSetChanged();   //cập nhật adapter listview lớp học
    }

    //Show Manager Activity
    private void showMangerStudent() {
        Intent intent = new Intent(this,ManagerStudentActivity.class);
        startActivity(intent);
    }

    private void showClassList() {
        //Khoi tao intent
        Intent intent = new Intent(this,ListActivity.class);
        //
        startActivity(intent);
    }

    //Hiển thị activity add class ở dạng Dialog
    private void showDialogAddClass() {
        //Khoi tao dialog
        Dialog dialog = new Dialog(ListActivity.this);
        dialog.setTitle("Thêm lớp");
        dialog.setContentView(R.layout.addclass);
        dialog.show();
        //Xử lý sự kiện trong Dialog
        EditText classId,className;

        classId = (EditText)
                findViewById(R.id.edtClassId);
        className = (EditText)
                findViewById(R.id.edtClassName);
    }
    //Menu
    @Override
    public boolean onCreateOptionsMenu (Menu menu) {
        getMenuInflater().inflate(R.menu.main, menu);
        return true;
    }

    @Override
    public boolean onOptionsItemSelected(MenuItem item) {
        switch (item.getItemId()){
            case R.id.addclass:
                showDialogAddClass();
                break;
            case R.id.listclass:
                showClassList();
                break;
            case R.id.sinhvien:
                showMangerStudent();
                break;
            case R.id.exit://option exit clicked
                Toast.makeText(getBaseContext(),"Asm Ps05854",Toast.LENGTH_LONG).show();
                finish();
                break;
        }
        //Tra ve gia tri
        return super.onOptionsItemSelected(item);
    }
}
