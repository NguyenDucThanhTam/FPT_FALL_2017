package com.example.rabbitsoup.lab5_demo;

import android.annotation.TargetApi;
import android.content.Intent;
import android.icu.text.DecimalFormat;
import android.os.Build;
import android.os.Bundle;
import android.support.annotation.Nullable;
import android.support.v7.app.AppCompatActivity;
import android.widget.Button;
import android.widget.TextView;

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
        Bundle getBundle = getIntent.getBundleExtra("mydata");

        int num1 = getBundle.getInt(String.valueOf(("num1")));
        int num2 = getBundle.getInt(String.valueOf(("num2")));

        tinhTongTrungBinh(num1, num2);
    }

    @TargetApi(Build.VERSION_CODES.N)
    private void tinhTongTrungBinh(int a, int b) {
        String ketqua ="";

        DecimalFormat format = new DecimalFormat("0.##");
        ketqua =  format.format((a+b)/2);
        txtResult.setText(ketqua);

    }
}
