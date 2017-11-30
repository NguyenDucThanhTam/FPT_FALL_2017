package com.example.rabbitsoup.u6l1ps05854;

import android.app.Activity;
import android.content.Intent;
import android.os.Bundle;
import android.support.annotation.Nullable;
import android.support.v7.app.ActionBarActivity;
import android.view.Menu;
import android.view.MenuItem;
import android.view.View;
import android.widget.Button;
import android.widget.TextView;

/**
 * Created by Rabbit Soup on 8/9/2017.
 */

public class LoginActivity extends ActionBarActivity
{
    TextView msg;

    @Override
    protected void onCreate(@Nullable Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_login);

        msg = (TextView)
                findViewById(R.id.textViewMember);
        Intent i= getIntent();
        msg.setText("Hello"+" "+i.getStringExtra("username"));

        Button btn = (Button)
                findViewById(R.id.btnBack);
        btn.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                finish();
            }
        });
    }
    public void Close(View v){
        finish();
    }

    @Override
    public boolean onCreateOptionsMenu(Menu menu) {
        getMenuInflater().inflate(R.menu.login,menu);
        return true;
    }

    @Override
    public boolean onOptionsItemSelected(MenuItem item) {
        int id = item.getItemId();
        if(id == R.id.action_setting){
            return true;
        }
        return super.onOptionsItemSelected(item);
    }
}
