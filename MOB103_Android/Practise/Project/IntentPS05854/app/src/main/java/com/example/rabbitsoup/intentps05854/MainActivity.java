package com.example.rabbitsoup.intentps05854;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;

public class MainActivity extends AppCompatActivity {
Button btnR;
    EditText txt1, txt2;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        btnR = (Button) findViewById(R.id.btnResult);
        btnR.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {

                //Tao Intent
                //Intent tenIntent = new Intent(this, TenActivityNhanDuLieu.class);
                Intent myIntent = new Intent(MainActivity.this, ResultActivity.class);

                //Gan du lieu EditText

                txt1 = (EditText)findViewById(R.id.editText1);
                txt2 = (EditText) findViewById(R.id.editText2);

                float num1 = Float.parseFloat(txt1.getText().toString());
                float num2 = Float.parseFloat(txt2.getText().toString());

                //Tao Bundle

                Bundle bundle = new Bundle();

                bundle.putFloat("sothunhat",num1);
                bundle.putFloat("sothuhai",num2);
                myIntent.putExtra("data",bundle);
                //Khoi chay Activity 2
                startActivity(myIntent);

            }
        });






    }
}
