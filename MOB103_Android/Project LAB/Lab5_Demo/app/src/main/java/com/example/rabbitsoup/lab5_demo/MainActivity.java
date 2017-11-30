package com.example.rabbitsoup.lab5_demo;

import android.support.annotation.Nullable;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Toast;

public class MainActivity extends AppCompatActivity {

    EditText edtNum1;
    EditText edtNum2;
    Button btnResult;
    //    String num1;
//    String num2;
    @Override
    protected void onCreate(@Nullable Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);



//        Toast.makeText(this, num1, Toast.LENGTH_SHORT).show();
//        Toast.makeText(this, num2, Toast.LENGTH_SHORT).show();

        btnResult = (Button) findViewById(R.id.btnLab5_Lesson2_Result);
        btnResult.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                edtNum1 = (EditText) findViewById(R.id.edtLab5_Lesson2_Num1);
                edtNum2 = (EditText) findViewById(R.id.edtLab5_Lesson2_Num2);

                final String num1 = (String) edtNum1.getText().toString();
                final String num2 = (String) edtNum2.getText().toString();

                Toast.makeText(MainActivity.this, "Số thứ 1: "+num1, Toast.LENGTH_SHORT).show();
                Toast.makeText(MainActivity.this, "Số thứ 2: "+num2, Toast.LENGTH_SHORT).show();

//                Intent intent = new Intent(Lab5_Lesson2_Main.this, Lab5_Lession2_Result.class);
//                Bundle bundle = new Bundle();

                //Gan gia tri cho Bundle
//                bundle.putString("num1", num1);
//                bundle.putString("num2", num2);

                //Truyen Bundle vao Intent
//                intent.putExtra("mydata",bundle);

//                startActivity(intent);
            }
        });

    }
}
