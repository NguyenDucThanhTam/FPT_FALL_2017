package com.example.rabbitsoup.mob201_android_advance.Lab1;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.Toast;

import com.example.rabbitsoup.mob201_android_advance.R;

public class Activity_Lab1_Main extends AppCompatActivity implements View.OnClickListener{
    Button
            openExercise1,
            openExercise2,
            openExercise3,
            openExercise4;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity__lab1__main);

        mapped();
        initControl();
        initEvent();
    }

    private void mapped() {
        openExercise1 = (Button)
                findViewById(R.id.btn_open_exercise1_Lab1_Main);
        openExercise2 = (Button)
                findViewById(R.id.btn_open_exercise2_Lab1_Main);
        openExercise3 = (Button)
                findViewById(R.id.btn_open_exercise3_Lab1_Main);
        openExercise4 = (Button)
                findViewById(R.id.btn_open_exercise4_Lab1_Main);

    }

    private void initControl() {

    }

    private void initEvent() {
        openExercise1.setOnClickListener(this);
        openExercise2.setOnClickListener(this);
        openExercise3.setOnClickListener(this);
        openExercise4.setOnClickListener(this);

    }

    @Override
    public void onClick(View view) {
        switch (view.getId()){
            case R.id.btn_open_exercise1_Lab1_Main:
                try {
                    Intent intent = new Intent(Activity_Lab1_Main.this,Lab1_exercise1_service_main.class);
                    startActivity(intent);
                }
                catch (Exception ex){
                    Toast.makeText(this, ex+"", Toast.LENGTH_SHORT).show();
                }
                break;
            case R.id.btn_open_exercise2_Lab1_Main:
                try {

                }
                catch (Exception ex){
                    Toast.makeText(this, ex+"", Toast.LENGTH_SHORT).show();
                }
                break;
            case R.id.btn_open_exercise3_Lab1_Main:
                try {

                }
                catch (Exception ex){
                    Toast.makeText(this, ex+"", Toast.LENGTH_SHORT).show();
                }
                break;
            case R.id.btn_open_exercise4_Lab1_Main:
                try {

                }
                catch (Exception ex){
                    Toast.makeText(this, ex+"", Toast.LENGTH_SHORT).show();
                }
                break;
            default:
                break;
        }
    }
}
