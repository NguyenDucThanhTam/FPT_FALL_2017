package com.example.rabbitsoup.u5l1ps05854;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.Menu;
import android.view.View;
import android.widget.Button;

public class MainActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);


        //anh xa button

        Button btnOpen = (Button)
                findViewById(R.id.btnOpenChildActivity);

        btnOpen.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                doOpenChildActivity();
            }
        });
    }

    private void doOpenChildActivity() {
        Intent myIntent = new Intent(this, ChildActivity.class);
        startActivity(myIntent);
    }

    @Override
    public boolean onCreateOptionsMenu(Menu menu) {
        getMenuInflater().inflate(R.menu.main, menu);
        return true;
    }
}
