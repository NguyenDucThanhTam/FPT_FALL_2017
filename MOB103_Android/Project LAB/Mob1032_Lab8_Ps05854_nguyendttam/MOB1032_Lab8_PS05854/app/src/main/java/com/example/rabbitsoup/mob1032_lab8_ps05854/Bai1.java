package com.example.rabbitsoup.mob1032_lab8_ps05854;

import android.os.Bundle;
import android.os.StrictMode;
import android.support.v7.app.AppCompatActivity;
import android.util.Log;
import android.view.View;
import android.widget.Button;
import android.widget.Toast;

import java.io.ByteArrayOutputStream;
import java.io.IOException;
import java.io.InputStream;
import java.net.HttpURLConnection;
import java.net.URL;

public class Bai1 extends AppCompatActivity {
    Button btnSend;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        btnSend = (Button)findViewById(R.id.btnSend);
        StrictMode.ThreadPolicy policy = new StrictMode.ThreadPolicy.Builder().permitAll().build();
        StrictMode.setThreadPolicy(policy);
        btnSend.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                try {
                    URL url = new URL("http://www.google.com");
                    HttpURLConnection con = (HttpURLConnection) url.openConnection();
                    readStream(con.getInputStream());
                }catch (Exception e){
                    e.printStackTrace();
                    Toast.makeText(Bai1.this,e+"",Toast.LENGTH_LONG).show();
                }
            }
        });
    }
    private void readStream(InputStream is) {
        try {
            ByteArrayOutputStream bo = new ByteArrayOutputStream();
            int i = is.read();
            while(i != -1) {
                bo.write(i);
                i = is.read();
            }
            bo.toString();
            Log.d("Trang web",bo.toString());
            Toast.makeText(this,bo.toString(),Toast.LENGTH_LONG).show();
        } catch (IOException e) {
            Toast.makeText(this,e+"",Toast.LENGTH_LONG).show();
        }
    }



}
