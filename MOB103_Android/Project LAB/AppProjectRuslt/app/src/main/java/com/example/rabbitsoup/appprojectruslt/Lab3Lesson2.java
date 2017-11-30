package com.example.rabbitsoup.appprojectruslt;

import android.os.Bundle;
import android.support.annotation.Nullable;
import android.support.v7.app.AppCompatActivity;
import android.view.View;
import android.widget.Button;
import android.widget.Toast;

/**
 * Created by Rabbit Soup on 8/22/2017.
 */

public class Lab3Lesson2 extends AppCompatActivity {
//EditText edtName, edtPass;
    Button btnLogin;

    @Override
    protected void onCreate(@Nullable Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.lab3_lesson2);

//        edtName= (EditText) findViewById(R.id.edtLab3_L2_Name);
//        edtPass =(EditText) findViewById(R.id.edtLab3_L2_Pass);
//
//        String txtName= edtName.getText().toString();
//        String txtPass = edtPass.getText().toString();
//
        btnLogin = (Button) findViewById(R.id.btnLab3_L2_LogIn);
        btnLogin.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Toast.makeText(Lab3Lesson2.this, "Clicked Button Login", Toast.LENGTH_SHORT).show();
                }
        });
    }
}
