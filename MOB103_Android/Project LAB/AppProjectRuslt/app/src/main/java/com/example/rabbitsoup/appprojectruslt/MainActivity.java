package com.example.rabbitsoup.appprojectruslt;

import android.content.Intent;
import android.os.Bundle;
import android.support.v7.app.AppCompatActivity;
import android.view.View;
import android.widget.Button;
import android.widget.Toast;

public class MainActivity extends AppCompatActivity {
    Button btnl1,btnl2,btnl3,btnl4,btnl5,btnl6,btnl7,btnl8;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        btnl3 = (Button) findViewById(R.id.btnLab3);
        btnl3.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent intent = new Intent(MainActivity.this, Lab3Main.class);
                startActivity(intent);
            }
        });
        btnl4 = (Button) findViewById(R.id.btnLab4);
        try{
            btnl4.setOnClickListener(new View.OnClickListener() {
                @Override
                public void onClick(View view) {
                    Intent intent = new Intent(MainActivity.this,Lab4Main.class);
                    startActivity(intent);
                }
            });
        }
        catch (Exception ex){
            Toast.makeText(this, ex+"", Toast.LENGTH_SHORT).show();
        }

        btnl5 = (Button) findViewById(R.id.btnLab5);
        try{
            btnl5.setOnClickListener(new View.OnClickListener() {
                @Override
                public void onClick(View view) {
                    Intent intent = new Intent(MainActivity.this,Lab5Main.class);
                    startActivity(intent);
                }
            });
        }
        catch (Exception ex){
            Toast.makeText(this, ex+"", Toast.LENGTH_SHORT).show();
        }

        btnl6= (Button) findViewById(R.id.btnLab6);
        btnl6.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent intent = new Intent(MainActivity.this,Lab6Main.class);
                startActivity(intent);
            }
        });
    }
}
