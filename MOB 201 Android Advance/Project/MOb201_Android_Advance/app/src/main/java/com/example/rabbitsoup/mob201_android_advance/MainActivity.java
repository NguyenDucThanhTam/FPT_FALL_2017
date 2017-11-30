package com.example.rabbitsoup.mob201_android_advance;

import android.content.Intent;
import android.os.Bundle;
import android.support.v7.app.AppCompatActivity;
import android.view.View;
import android.view.Window;
import android.widget.Button;
import android.widget.Toast;

import com.example.rabbitsoup.mob201_android_advance.Lab1.Activity_Lab1_Main;

public class MainActivity extends AppCompatActivity implements View.OnClickListener{
    Button
            btnOpenLab1,
            btnOpenLab2,
            btnOpenLab3,
            btnOpenLab4,
            btnOpenLab5,
            btnOpenLab6,
            btnOpenLab7,
            btnOpenLab8;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        hideActionBar();
        setContentView(R.layout.activity_main);
        mapped();
        initControl();
        initEvent();
    }

        private void initEvent() {
            btnOpenLab1.setOnClickListener(this);
            btnOpenLab2.setOnClickListener(this);
            btnOpenLab3.setOnClickListener(this);
            btnOpenLab4.setOnClickListener(this);
            btnOpenLab5.setOnClickListener(this);
            btnOpenLab6.setOnClickListener(this);
            btnOpenLab7.setOnClickListener(this);
            btnOpenLab8.setOnClickListener(this);
        }

    private void initControl() {

    }

    private void mapped() {
        btnOpenLab1 = (Button) findViewById(R.id.btn_open_lab1_activity);
        btnOpenLab2 = (Button) findViewById(R.id.btn_open_lab2_activity);
        btnOpenLab3 = (Button) findViewById(R.id.btn_open_lab3_activity);
        btnOpenLab4 = (Button) findViewById(R.id.btn_open_lab4_activity);
        btnOpenLab5 = (Button) findViewById(R.id.btn_open_lab5_activity);
        btnOpenLab6 = (Button) findViewById(R.id.btn_open_lab6_activity);
        btnOpenLab7 = (Button) findViewById(R.id.btn_open_lab7_activity);
        btnOpenLab8 = (Button) findViewById(R.id.btn_open_lab8_activity);
    }

    private void hideActionBar() {
        getWindow().requestFeature(Window.FEATURE_ACTION_BAR);
        getSupportActionBar().hide();
    }

    @Override
    public void onClick(View view) {
        switch (view.getId()){
            case R.id.btn_open_lab1_activity:
                try {
                    Intent intent = new Intent(MainActivity.this, Activity_Lab1_Main.class);
                    startActivity(intent);
                }
                catch (Exception ex){
                    ex.printStackTrace();
                    Toast.makeText(this, ex+"", Toast.LENGTH_SHORT).show();
                }
                break;
            default:
                Toast.makeText(this, "The feature development", Toast.LENGTH_SHORT).show();
                break;
        }
    }
}
