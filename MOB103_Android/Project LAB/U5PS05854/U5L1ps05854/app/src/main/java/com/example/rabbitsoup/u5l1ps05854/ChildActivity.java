package com.example.rabbitsoup.u5l1ps05854;

import android.app.Activity;
import android.os.Bundle;
import android.view.Menu;
import android.view.View;
import android.widget.Button;

/**
 * Created by Rabbit Soup on 8/7/2017.
 */

public class ChildActivity extends Activity {
    @Override
    protected void onCreate( Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.acitivity_child);

        //
        Button btnBack = (Button)
                findViewById(R.id.btnBackToMainActivity);
        btnBack.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                finish();
            }
        });
    }

    @Override
    public boolean onCreateOptionsMenu(Menu menu) {
        getMenuInflater().inflate(R.menu.child, menu);
        return true;
    }
}
