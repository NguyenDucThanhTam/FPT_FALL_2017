package com.example.rabbitsoup.lab7bai2ps05854nguyendttam;

import android.database.Cursor;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.AdapterView;
import android.widget.ArrayAdapter;
import android.widget.Button;
import android.widget.EditText;
import android.widget.ListView;
import android.widget.Toast;

import java.util.ArrayList;

public class MainActivity extends AppCompatActivity {
    Database database;
    ListView lvStudent;
    Button btnThem;
    EditText edtTen,edtTuoi;
    ArrayList<Student> studentArrayList= new ArrayList<Student>();
    ArrayList<String> listSV = new ArrayList<String>();
    ArrayAdapter<String> studentArrayAdapter;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        edtTen=(EditText)findViewById(R.id.edtTen);
        edtTuoi=(EditText)findViewById(R.id.edtTuoi);
        btnThem=(Button)findViewById(R.id.btnThem);
        lvStudent=(ListView)findViewById(R.id.lvStudent);
        database = new Database(this, "databaseSinhVien", null, 1);


        btnThem.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                themSv();
                getDuLieuSinhVien();
            }
        });
        studentArrayAdapter= new ArrayAdapter<String>(this,android.R.layout.simple_list_item_1,listSV);
        lvStudent.setAdapter(studentArrayAdapter);
        lvStudent.setOnItemLongClickListener(new AdapterView.OnItemLongClickListener() {
            @Override
            public boolean onItemLongClick(AdapterView<?> adapterView, View view, int i, long l) {
                int id = studentArrayList.get(i).getId();
                database.QuerryData("DELETE FROM SinhVien WHERE Id="+id);
                getDuLieuSinhVien();
                tb("Đã xóa");
                return false;
            }
        });
        getDuLieuSinhVien();
    }
    public void themSv(){

        try {
            String name = edtTen.getText().toString();
            int tuoi = Integer.parseInt(edtTuoi.getText().toString());
            database.QuerryData("INSERT INTO SinhVien VALUES(null, '"+name+"', "+tuoi+")");
        }catch (Exception e){
            tb("Ko hợp lệ");
        }

    }
    public void getDuLieuSinhVien(){
        listSV.clear();
        studentArrayList.clear();
        Cursor data=database.GetData("SELECT * FROM SinhVien");
        while (data.moveToNext()){

            int id=data.getInt(0);
            String ten=data.getString(1);
            int tuoi=data.getInt(2);
            String infoStudent = "Tên: "+ten+"\t Tuổi"+tuoi;
            Student student = new Student(id,ten,tuoi);
            studentArrayList.add(student);
            listSV.add(infoStudent);
        }
        studentArrayAdapter.notifyDataSetChanged();
    }
    public void tb(String s){
        Toast.makeText(this,s,Toast.LENGTH_LONG).show();
    }
}
