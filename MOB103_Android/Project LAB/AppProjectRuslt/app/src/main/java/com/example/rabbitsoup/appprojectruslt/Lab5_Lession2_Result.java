package com.example.rabbitsoup.appprojectruslt;

import android.content.Intent;
import android.os.Bundle;
import android.support.annotation.Nullable;
import android.support.v7.app.AppCompatActivity;
import android.widget.Button;
import android.widget.TextView;
import android.widget.Toast;

/**
 * Created by Rabbit Soup on 8/25/2017.
 */

public class Lab5_Lession2_Result extends AppCompatActivity {
    TextView txtResult;
    Button btnBack;

    @Override
    protected void onCreate(@Nullable Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.lab5_lesson2_result);

        txtResult = (TextView) findViewById(R.id.textView_Lab5_Leson2_Result);

        //Lấy Intent và Bundle
        Intent getIntent = getIntent();
        Bundle getBundle = getIntent.getBundleExtra("data");
        //
        int num1 = getBundle.getInt("so1");
        
        int num2 = getBundle.getInt("so2");
        //
        Toast.makeText(this, num1, Toast.LENGTH_SHORT).show();
        Toast.makeText(this, num2, Toast.LENGTH_SHORT).show();

    }

}
