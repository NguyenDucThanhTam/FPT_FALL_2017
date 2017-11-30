package com.example.rabbitsoup.appprojectruslt;

import android.content.Intent;
import android.os.Bundle;
import android.support.v7.app.AppCompatActivity;
import android.view.View;
import android.widget.Button;

public class Lab6Main extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_lab6_main);
        Button btnOpenLesson1 = (Button) findViewById(R.id.btnLab6OpenLesson1);
        Button btnOpenLesson2 = (Button) findViewById(R.id.btnLab6OpenLesson2);
        btnOpenLesson1.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent intent = new Intent(Lab6Main.this,Lab6_Lesson1_Main.class);
                startActivity(intent);
            }
        });
        btnOpenLesson2.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent intent = new Intent(Lab6Main.this,Lab6_Lesson1_Child.class);
                startActivity(intent);
            }
        });

    }
}
