package com.makeappsforfun.namcu.namlhps05883_mob1032_lab7;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;

public class Bai1 extends AppCompatActivity {
    Button btnShowContacts, btnShowCalls;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.bai1_main);
        btnShowContacts=(Button)findViewById(R.id.btnShowContacts);
        btnShowCalls=(Button)findViewById(R.id.btnShowCalls);
        btnShowContacts.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent intent = new Intent(Bai1.this,ShowAllContactsActivity.class);
                startActivity(intent);
            }
        });
        btnShowCalls.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent intent = new Intent(Bai1.this,ShowAllCallsActivity.class);
                startActivity(intent);
            }
        });
    }
}
