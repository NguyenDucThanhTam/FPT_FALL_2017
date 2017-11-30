package com.example.rabbitsoup.assigmentrecode;

import android.content.Intent;
import android.os.Bundle;
import android.support.v7.app.AppCompatActivity;
import android.view.View;
import android.widget.Button;

public class MainActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        Button btnAddClass= (Button) findViewById(R.id.btnMain_AddClass);
        btnAddClass.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                addclass();

            }
        });

        Button btnViewClass= (Button) findViewById(R.id.btnMain_ViewClass);
        btnViewClass.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                viewClass();
            }
        });

        Button btnManagerStudent  = (Button) findViewById(R.id.btnMain_Manager_Student);
        btnManagerStudent.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                managerStudent();
            }
        });
    }

    private void managerStudent() {
    }

    private void viewClass() {
    }

    private void addclass() {
        Intent intent = new Intent(MainActivity.this, AlertDialog_Activity.class);
        startActivity(intent);
    }
}
