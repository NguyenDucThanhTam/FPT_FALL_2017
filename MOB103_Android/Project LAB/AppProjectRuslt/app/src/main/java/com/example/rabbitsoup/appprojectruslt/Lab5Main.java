package com.example.rabbitsoup.appprojectruslt;

import android.content.Intent;
import android.os.Bundle;
import android.support.annotation.Nullable;
import android.support.v7.app.AppCompatActivity;
import android.view.View;
import android.widget.Button;
import android.widget.Toast;

/**
 * Created by Rabbit Soup on 8/25/2017.
 */

public class Lab5Main extends AppCompatActivity {
    @Override
    protected void onCreate(@Nullable Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.lab5_main);

        Button btnOpenLesson1 = (Button) findViewById(R.id.btnLab5OpenLesson1);
        Button btnOpenLesson2 = (Button) findViewById(R.id.btnLab5OpenLesson2);

        btnOpenLesson1.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent intent = new Intent(Lab5Main.this, Lab5_Lesson1_Parent.class);
                startActivity(intent);
            }
        });

        btnOpenLesson2.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent intent = new Intent(Lab5Main.this, Lab5_Lesson2_Main.class);
                startActivity(intent);
            }
        });
    }
}
