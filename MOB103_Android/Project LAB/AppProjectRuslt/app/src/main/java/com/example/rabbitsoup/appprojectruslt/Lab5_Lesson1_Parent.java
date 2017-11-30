package com.example.rabbitsoup.appprojectruslt;

import android.content.Intent;
import android.os.Bundle;
import android.support.annotation.Nullable;
import android.support.v7.app.AppCompatActivity;
import android.view.View;
import android.widget.Button;

/**
 * Created by Rabbit Soup on 8/25/2017.
 */

public class Lab5_Lesson1_Parent extends AppCompatActivity {
    @Override
    protected void onCreate(@Nullable Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.lab5_lesson1_parent);

        Button btnOpen = (Button) findViewById(R.id.btnOpenChildActivity);
        btnOpen.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent intent = new Intent(Lab5_Lesson1_Parent.this, Lab5_Lesson1_Child.class);
                startActivity(intent);
            }
        });
    }
}
