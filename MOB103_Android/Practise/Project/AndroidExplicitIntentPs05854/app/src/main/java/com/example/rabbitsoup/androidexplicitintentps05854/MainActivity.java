package com.example.rabbitsoup.androidexplicitintentps05854;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;

public class MainActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        Button btn = (Button)
                findViewById(R.id.btn1);

        btn.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent i = new Intent(getApplicationContext(),ActivityTwo.class);

                i.putExtra("Value1","Android By Javapoint");
                i.putExtra("Value2","Simple Tutorial");

                startActivity(i);
            }
        });
    }
}
