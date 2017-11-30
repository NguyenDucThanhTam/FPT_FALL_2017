package com.example.rabbitsoup.lab3_b3;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Adapter;
import android.widget.AdapterView;
import android.widget.ArrayAdapter;
import android.widget.ListView;
import android.widget.Toast;

import java.util.ArrayList;

public class MainActivity extends AppCompatActivity implements AdapterView.OnItemClickListener {
    private ListView lv;
    ArrayList<String> list=new ArrayList<String>();
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        lv = (ListView) findViewById(R.id.idlistview);
        // thêm dữ liệu

        list.add("Android cơ bản");
        list.add("Android nâng cao");
        list.add("Thiết kế giao diện Android");

        list.add("Test và triển khai ứng dụng Android");

        list.add("NodeJS");

        list.add("Game2D");

        ArrayAdapter<String> adapter = new ArrayAdapter<>(this,
                android.R.layout.simple_list_item_1,list);
        //Set adapter cho ListView

        lv.setAdapter(adapter);
        lv.setOnItemClickListener(this);
    }

    @Override
    public void onItemClick(AdapterView<?> arg0, View arg1, int arg2, long arg3) {
        Toast.makeText(this, list.get(arg2), Toast.LENGTH_SHORT).show();
    }
}
