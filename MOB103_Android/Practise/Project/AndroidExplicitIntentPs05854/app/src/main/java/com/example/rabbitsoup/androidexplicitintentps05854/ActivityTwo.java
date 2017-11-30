package com.example.rabbitsoup.androidexplicitintentps05854;

import android.app.Activity;
import android.content.Intent;
import android.os.Bundle;
import android.support.annotation.Nullable;
import android.view.View;
import android.widget.Button;
import android.widget.TextView;
import android.widget.Toast;

/**
 * Created by Rabbit Soup on 8/9/2017.
 */

public class ActivityTwo extends Activity {
    @Override
    protected void onCreate(@Nullable Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_two);

        TextView tv = new TextView(this);
        tv.setText("Secont Activity");
        //Khai bao get Bundle
        Bundle extras = getIntent().getExtras();

        String value1 = extras.getString("value1");
        String value2 = extras.getString("value2");
        Toast.makeText(getApplicationContext(), "Values are:\n First value"+value1+"\n Second Value"+value2, Toast.LENGTH_LONG).show();

        Button btn1 = (Button)
                findViewById(R.id.btn1);
        btn1.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent i = new Integer( getApplicationContext(), MainActivity.class);
            }
        });
    }
}
