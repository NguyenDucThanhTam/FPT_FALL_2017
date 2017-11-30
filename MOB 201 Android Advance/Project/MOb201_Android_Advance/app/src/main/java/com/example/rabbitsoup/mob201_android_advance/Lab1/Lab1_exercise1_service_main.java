package com.example.rabbitsoup.mob201_android_advance.Lab1;

import android.content.Intent;
import android.os.Bundle;
import android.support.v7.app.AppCompatActivity;
import android.view.View;
import android.widget.Button;
import android.widget.Toast;

import com.example.rabbitsoup.mob201_android_advance.Lab1.service.MyPolyService;
import com.example.rabbitsoup.mob201_android_advance.R;

public class Lab1_exercise1_service_main extends AppCompatActivity implements View.OnClickListener {
    Button
            btnCreateService,
            btnStopService;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_lab1_exercise1_service_main);
//        createService();
//        pauseService();
        mapped();
        initEvent();
    }

    private void initEvent() {
        btnCreateService.setOnClickListener(this);
        btnStopService.setOnClickListener(this);
    }

    private void mapped() {
        btnCreateService = (Button) findViewById(R.id.btn_lab1_createService_exercise1_main);
        btnStopService = (Button) findViewById(R.id.btn_lab1_stopService_exercise1_main);
    }

    private void pauseService() {

    }

    @Override
    public boolean stopService(Intent name) {
        return super.stopService(name);
    }

    private void createService() {
        Intent intent = new Intent(Lab1_exercise1_service_main.this, MyPolyService.class);
        startService(intent);
    }

    @Override
    public void onClick(View view) {
        switch(view.getId()){
            case R.id.btn_lab1_createService_exercise1_main:
                try {
                    createService();
                }
                catch (Exception ex){
                    ex.printStackTrace();
                    Toast.makeText(this, ex+"", Toast.LENGTH_LONG).show();
                }
                break;
            case R.id.btn_lab1_stopService_exercise1_main:
                try {


                }
                catch (Exception ex){
                    ex.printStackTrace();
                    Toast.makeText(this, ex+"", Toast.LENGTH_SHORT).show();
                }
                break;
            default:
                Toast.makeText(this, "Feature is developing", Toast.LENGTH_SHORT).show();
                break;
        }
    }
}
