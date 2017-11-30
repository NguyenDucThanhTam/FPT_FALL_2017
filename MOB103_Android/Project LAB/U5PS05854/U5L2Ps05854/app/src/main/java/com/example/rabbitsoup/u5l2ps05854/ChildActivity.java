package com.example.rabbitsoup.u5l2ps05854;

import android.annotation.TargetApi;
import android.app.Activity;
import android.content.Intent;
import android.icu.text.DecimalFormat;
import android.os.Build;
import android.os.Bundle;
import android.support.annotation.Nullable;
import android.support.annotation.RequiresApi;
import android.view.Menu;
import android.view.View;
import android.widget.Button;
import android.widget.TextView;

/**
 * Created by Rabbit Soup on 8/7/2017.
 */

public class ChildActivity extends Activity{
    TextView txtKQ;
    Button btn;

    @Override
    protected void onCreate(@Nullable Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_child);
        txtKQ = (TextView)findViewById(R.id.textViewResult);

        // Lay Intent da gui tu Activity truoc

        Intent getIntent = getIntent();
        //Lay Bundle da gui tu Activity Truoc

        Bundle getBundle = getIntent.getBundleExtra("mypkg");

        //Lay thong tin 2 so

        int a = getBundle.getInt("sothunhat");
        int b = getBundle.getInt("sothuhai");

        //goi ham tinh trung binh cong va truyen tham so

        TinhTrungBinhCong(a,b);

        btn = (Button) findViewById(R.id.btnBack);
        btn.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                finish();
            }
        });
    }

    @TargetApi(Build.VERSION_CODES.N)
    private void TinhTrungBinhCong(int a, int b) {
        String kq ="";
        DecimalFormat dcfomat = new DecimalFormat("0.##");
        kq = dcfomat.format((a+b)/2.0);
        txtKQ.setText(kq);
    }

    @Override
    public boolean onCreateOptionsMenu(Menu menu) {
        getMenuInflater().inflate(R.menu.child,menu);
        return true;
    }
    public void goBack(View v){
        finish();
    }
}
