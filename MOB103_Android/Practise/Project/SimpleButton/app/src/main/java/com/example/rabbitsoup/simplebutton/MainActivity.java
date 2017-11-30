package com.example.rabbitsoup.simplebutton;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.Toast;

public class MainActivity extends AppCompatActivity {
// Khai bao 2 Button

    Button btn1, btn2;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        //Ánh xạ Button
        btn1 = (Button)findViewById(R.id.simpleButton);

        btn2 = (Button) findViewById(R.id.simpleButton1);
        //Set su kien

        btn1.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Toast.makeText(getApplicationContext(),"Simple Button 1",Toast.LENGTH_LONG).show();
            }
        });

        btn2.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Toast.makeText(getApplicationContext(),"Simple Button 2",Toast.LENGTH_LONG).show();

            }
        });
    }
}
