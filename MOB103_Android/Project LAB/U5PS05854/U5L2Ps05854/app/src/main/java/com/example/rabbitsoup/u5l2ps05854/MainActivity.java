package com.example.rabbitsoup.u5l2ps05854;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.Menu;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;

public class MainActivity extends AppCompatActivity {
    EditText txt1, txt2;
    Button btn;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        btn = (Button) findViewById(R.id.btnSub);
        btn.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                tinhtrungbinhcong();
            }
        });

    }



    public void tinhtrungbinhcong(){

        txt1 = (EditText) findViewById(R.id.number1);
        txt2 = (EditText) findViewById(R.id.number2);

        //Khoi tao Intent
        Intent myIntent = new Intent(this,ChildActivity.class);
        //Khoi tao Bundle

        Bundle myBundle = new Bundle();

        int a = Integer.parseInt(txt1.getText().toString());
        int b = Integer.parseInt(txt2.getText().toString());

        //Truyen du lieu va bundle
        myBundle.putInt("sothunhat",a);
        myBundle.putInt("sothuhai",b);
        //Chuyen Bundle vao Intent
        myIntent.putExtra("mypkg",myBundle);
        //Mo Activity
        startActivity(myIntent);
    }

    @Override
    public boolean onCreateOptionsMenu(Menu menu) {
        getMenuInflater().inflate(R.menu.main,menu);
        return true;
    }
}
