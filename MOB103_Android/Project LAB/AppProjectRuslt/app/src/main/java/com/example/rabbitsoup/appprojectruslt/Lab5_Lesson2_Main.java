package com.example.rabbitsoup.appprojectruslt;

import android.app.Activity;
import android.content.Intent;
import android.os.Bundle;
import android.support.annotation.Nullable;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Toast;

/**
 * Created by Rabbit Soup on 8/25/2017.
 */

public class Lab5_Lesson2_Main extends Activity {
    EditText edtNum1;
    EditText edtNum2;
    Button btnResult;
//    String num1;
//    String num2;
    @Override
    protected void onCreate(@Nullable Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.lab5_lesson2_main);
        


        btnResult = (Button) findViewById(R.id.btnLab5_Lesson2_Result);
        btnResult.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
//
                edtNum1 = (EditText) findViewById(R.id.edtLab5_Lesson2_Num1);
                edtNum2 = (EditText) findViewById(R.id.edtLab5_Lesson2_Num2);

                String num1 = (String) edtNum1.getText().toString();
                String num2 = (String) edtNum2.getText().toString();

                Toast.makeText(Lab5_Lesson2_Main.this, "Số thứ 1: "+num1, Toast.LENGTH_SHORT).show();
                Toast.makeText(Lab5_Lesson2_Main.this, "Số thứ 2: "+num2, Toast.LENGTH_SHORT).show();

                Intent intent = new Intent(Lab5_Lesson2_Main.this, Lab5_Lession2_Result.class);
                Bundle bundle = new Bundle();

                //Gan gia tri cho Bundle
                bundle.putString("so1", num1);
                bundle.putString("so2", num2);
//
                //Truyen Bundle vao Intent
                intent.putExtra("data",bundle);

                startActivity(intent);
            }
        });

    }
}
