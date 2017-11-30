package com.example.rabbitsoup.appprojectruslt;

import android.app.Activity;
import android.content.Intent;
import android.os.Bundle;
import android.support.annotation.Nullable;
import android.view.View;
import android.widget.Button;

/**
 * Created by Rabbit Soup on 8/22/2017.
 */

public class Lab3Main extends Activity {
    @Override
    protected void onCreate(@Nullable Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.lab3_acitivity_main);
        Button btnL1 = (Button) findViewById(R.id.btnLab3L1);
        btnL1.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent intent = new Intent(Lab3Main.this, Lab3Lesson1.class);
                startActivity(intent);
            }
        });
        Button btnL2 = (Button) findViewById(R.id.btnLab3L2);
        btnL2.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent intent = new Intent(Lab3Main.this, Lab3Lesson2.class);
                startActivity(intent);

            }
        });
    }
}
