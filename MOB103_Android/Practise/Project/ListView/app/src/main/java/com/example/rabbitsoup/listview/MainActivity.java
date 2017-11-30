package com.example.rabbitsoup.listview;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.widget.ArrayAdapter;
import android.widget.ListView;
import android.app.Activity;

public class MainActivity extends AppCompatActivity {
    ListView simleList;

    String countryList[] = {"India","China","Australia","Portugle","America","NewZealand"};

    int flags[] = {R.drawable.india,R.drawable.china,R.drawable.australia,R.drawable.portugle, R.drawable.america,R.drawable.newzealand};

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        simleList = (ListView) findViewById(R.id.simpleListView);

        CustomAdapter customAdapter = new CustomAdapter(getApplicationContext(),countryList,flags);

        simleList.setAdapter(customAdapter);
    }
}
