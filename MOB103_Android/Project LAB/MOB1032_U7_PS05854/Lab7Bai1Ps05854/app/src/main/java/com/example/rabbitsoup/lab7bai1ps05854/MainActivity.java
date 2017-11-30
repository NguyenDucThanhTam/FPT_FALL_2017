package com.example.rabbitsoup.lab7bai1ps05854;

import android.content.Intent;
import android.os.Bundle;
import android.support.v7.app.AppCompatActivity;
import android.view.View;
import android.widget.Button;

public class MainActivity extends AppCompatActivity {
    Button btnShowAllContacts, btnShowListCall;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        btnShowAllContacts = (Button) findViewById(R.id.btnShowContacts);
        btnShowListCall = (Button) findViewById(R.id.btnShowCalls);

        btnShowAllContacts.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent intent  = new Intent(MainActivity.this,ShowAllContactsActivity.class);
                startActivity(intent);
            }
        });

        btnShowListCall.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent intent  = new Intent(MainActivity.this,ShowAllContactsActivity.class);
                startActivity(intent);
            }
        });
    }
}
