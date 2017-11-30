package com.example.rabbitsoup.intentps05854;

import android.app.Activity;
import android.content.Intent;
import android.os.Bundle;
import android.support.annotation.Nullable;
import android.view.MenuItem;
import android.view.View;
import android.widget.Button;
import android.widget.TextView;

/**
 * Created by Rabbit Soup on 8/8/2017.
 */

public class ResultActivity extends Activity{
    @Override
    protected void onCreate(@Nullable Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_child);

        Button btn = (Button)findViewById(R.id.btnBack);
        btn.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                finish();
            }
        });

        //Khoi tao nhan Intent

        Intent getIntent = getIntent();
        //Nhan goi Bundle

        Bundle getBundle = getIntent.getBundleExtra("data");
        //Doc du lieu a,b

        float a = getBundle.getFloat("sothunhat");
        float b = getBundle.getFloat("sothuhai");

        float sum = a + b ;

        TextView txt = (TextView) findViewById(R.id.viewResult);
        String Result = Float.toString(sum);
        txt.setText(Result);
    }


}
