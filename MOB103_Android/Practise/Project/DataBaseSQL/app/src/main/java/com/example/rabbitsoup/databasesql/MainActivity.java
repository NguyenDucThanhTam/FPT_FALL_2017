package com.example.rabbitsoup.databasesql;

import android.database.Cursor;
import android.os.Bundle;
import android.support.v7.app.AppCompatActivity;
import android.widget.ListView;

import java.util.ArrayList;

public class MainActivity extends AppCompatActivity {
    Database database;
    ListView lvSinhVien;
    ArrayList<SinhVien> arraySinhVien;
    SinhVienAdapter adapter;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        lvSinhVien = (ListView) findViewById(R.id.listViewSinhVien);
        arraySinhVien = new ArrayList<SinhVien>();

        adapter= new SinhVienAdapter(this,R.layout.dong_sinh_vien,arraySinhVien);

        lvSinhVien.setAdapter(adapter);

//Khoi tao database
        database =new Database(this,"sinhvien.sqlite",null,1);
        //Tao bang
        database.QueryData("CREATE TABLE IF NOT EXISTS sinhvien" +
                "(Id INTEGER PRIMARY KEY AUTOINCREMENT, TenSV VARCHAR(50)) ");
        //insert Data
//        database.QueryData("INSERT INTO sinhvien VALUES(null,'Duc')");
        // Lay du lieu
        Cursor cursor = database.GetData("SELECT * FROM sinhvien");

        while(cursor.moveToNext()){//Kiem tra con du lieu
            String ten = cursor.getString(1);
            int id = cursor.getInt(0);
            arraySinhVien.add(new SinhVien(id,ten));
        }
        adapter.notifyDataSetChanged();
    }
}
