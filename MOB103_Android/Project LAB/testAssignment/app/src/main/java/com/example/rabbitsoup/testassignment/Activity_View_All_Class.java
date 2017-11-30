package com.example.rabbitsoup.testassignment;

import android.content.Intent;
import android.os.Bundle;
import android.support.v7.app.AppCompatActivity;
import android.widget.ListView;
import android.widget.Toast;

import java.util.ArrayList;

public class Activity_View_All_Class extends AppCompatActivity {
    ListView lv;
    ClassDapter adapter;
    ArrayList<Class> arrClass;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity__view__all__class);
        //khoi tao lay gia tri intent
        Intent getIntent = getIntent();
        //Lay gia tri Bundle
        Bundle getBundle = getIntent.getBundleExtra("dataClass");

        //truyen tham so tu gia tri nhan duoc
        int id = getBundle.getInt("id");
        String name = getBundle.getString("name");

        Toast.makeText(this, id+"   "+name, Toast.LENGTH_SHORT).show();
    }
}
