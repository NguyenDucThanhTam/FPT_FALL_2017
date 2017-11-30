package com.example.rabbitsoup.listview_customadapter;

import android.os.Bundle;
import android.support.v7.app.AppCompatActivity;
import android.widget.ListView;

import java.util.ArrayList;

public class MainActivity extends AppCompatActivity {
    ListView lv;
    //Mang sinh vien co kieu SinhVien
    ArrayList<SinhVien> arrSinhVien;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        arrSinhVien = new ArrayList<SinhVien>();
        lv = (ListView) findViewById(R.id.listView);

        arrSinhVien.add(new SinhVien("Nguyen Tam",1998));
        arrSinhVien.add(new SinhVien("Nguyen 1",1993));
        arrSinhVien.add(new SinhVien("Nguyen 2",1990));
        arrSinhVien.add(new SinhVien("Nguyen 3",1999));

        //Gan adapter cho listview
        ListAdapter adapter = new ListAdapter(
                MainActivity.this,
                R.layout.activity_dong_sinh_vien,
                arrSinhVien
        );

        lv.setAdapter(adapter);
    }
}
