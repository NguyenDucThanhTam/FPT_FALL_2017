package com.example.rabbitsoup.imageviewexample;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.graphics.Color;
import android.os.Bundle;
import android.view.View;
import android.view.Menu;
import android.view.MenuItem;
import android.widget.ImageView;
import android.widget.Toast;

public class MainActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        // Ánh xạ đối tượng Image View vào layout
        ImageView simpleImageViewLion = (ImageView) findViewById(R.id.simpleImageViewLion);

        ImageView simpleImageViewMonkey = (ImageView) findViewById(R.id.simpleImageViewMonkey);

        simpleImageViewLion.setOnClickListener(new View.OnClickListener()
        {
            @Override
            public void onClick(View view) {
                Toast.makeText(getApplicationContext(),"Lion", Toast.LENGTH_SHORT).show();
            }
        });

        simpleImageViewMonkey.setOnClickListener(new View.OnClickListener()
        {
            @Override
            public void onClick(View view) {
                Toast.makeText(getApplicationContext(),"Monkey",Toast.LENGTH_SHORT).show();
            }
        });
    }

}
