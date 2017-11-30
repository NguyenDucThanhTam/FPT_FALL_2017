package com.example.rabbitsoup.mob201_ps05854;

import android.content.Intent;
import android.os.Bundle;
import android.support.v7.app.AppCompatActivity;
import android.view.View;
import android.widget.Button;

public class MainActivity extends AppCompatActivity implements View.OnClickListener {
    private Button btn_lab1_Main_Activity,
            btn_lab2_Main_Activity,
            btn_lab3_Main_Activity,
            btn_lab4_Main_Activity,
            btn_lab5_Main_Activity,
            btn_lab6_Main_Activity,
            btn_lab7_Main_Activity,
            btn_lab8_Main_Activity;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
    }

    public void mapped(){
        btn_lab1_Main_Activity = (Button) findViewById(R.id.btn_lab1_Main_Activity);
        btn_lab2_Main_Activity = (Button) findViewById(R.id.btn_lab2_Main_Activity);
        btn_lab3_Main_Activity = (Button) findViewById(R.id.btn_lab3_Main_Activity);
        btn_lab4_Main_Activity = (Button) findViewById(R.id.btn_lab4_Main_Activity);
        btn_lab5_Main_Activity = (Button) findViewById(R.id.btn_lab5_Main_Activity);
        btn_lab6_Main_Activity = (Button) findViewById(R.id.btn_lab6_Main_Activity);
        btn_lab7_Main_Activity = (Button) findViewById(R.id.btn_lab7_Main_Activity);
        btn_lab8_Main_Activity = (Button) findViewById(R.id.btn_lab8_Main_Activity);

    }

    public void initEvent(){
        btn_lab1_Main_Activity.setOnClickListener(this);
        btn_lab2_Main_Activity.setOnClickListener(this);
        btn_lab3_Main_Activity.setOnClickListener(this);
        btn_lab4_Main_Activity.setOnClickListener(this);
        btn_lab5_Main_Activity.setOnClickListener(this);
        btn_lab6_Main_Activity.setOnClickListener(this);
        btn_lab7_Main_Activity.setOnClickListener(this);
        btn_lab8_Main_Activity.setOnClickListener(this);
    }

    @Override
    public void onClick(View view) {
        switch (view.getId()){
            case R.id.btn_lab1_Main_Activity:
//                Intent intent = new Intent(MainActivity.this,);
                startActivity(intent);
                break;
        }
    }
}
