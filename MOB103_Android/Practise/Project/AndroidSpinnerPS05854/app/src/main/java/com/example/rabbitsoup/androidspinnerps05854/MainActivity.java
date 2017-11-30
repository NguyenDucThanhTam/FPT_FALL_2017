package com.example.rabbitsoup.androidspinnerps05854;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.Menu;
import android.view.View;
import android.widget.AdapterView;
import android.widget.ArrayAdapter;
import android.widget.Spinner;
import android.widget.Toast;

public class MainActivity extends AppCompatActivity implements AdapterView.OnItemSelectedListener {

        //Khoi tao mang country
        String[] country = {"India","USA","China","Japan","Other",};

        //Khi de phuong thuc onCreate

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
    //Khai bao Spinner
        Spinner spin = (Spinner)
                findViewById(R.id.spinner1);

        spin.setOnItemSelectedListener(this);

        //Tao mang cua Spinner

        ArrayAdapter aa = new ArrayAdapter(this,android.R.layout.simple_spinner_item,country);

        aa.setDropDownViewResource(android.R.layout.simple_spinner_dropdown_item);

        //Set spinner

        spin.setAdapter(aa);
    }

    @Override
    public void onItemSelected(AdapterView<?> adapterView, View view, int i, long l) {

        Toast.makeText(getApplicationContext(),country[i],Toast.LENGTH_LONG).show();
    }

    @Override
    public void onNothingSelected(AdapterView<?> adapterView) {

    }

    @Override
    public boolean onCreateOptionsMenu(Menu menu) {
        getMenuInflater().inflate(R.menu.activity_main,menu);
        return true;
    }
}
