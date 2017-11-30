package com.example.rabbitsoup.androidsharedpreferencesps05854;

import android.app.Activity;
import android.os.Bundle;
import android.view.Menu;
import android.widget.PopupMenu;
import android.widget.TextView;



/**
 * Created by Rabbit Soup on 8/11/2017.
 */

public class SecondActivity extends Activity {

    // UI References
    private TextView textTxt;

    private String text;

    private SharedPreference sharedPreference;

    SecondActivity context = this;
    private  contentView;
    private  contentView;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        context.onCreate();
        setContentView(R.layout.activity_second);

        sharedPreference = new SharedPreference();

        findViewsById();

        //Retrieve a value from SharedPreference
        text = sharedPreference.getValue(context);
        textTxt.setText(text);

    }

    private void findViewsById() {
        textTxt = (TextView) findViewById(R.id.txt_text);
    }

    @Override
    public boolean onCreateOptionsMenu(Menu menu) {
        getMenuInflater().inflate(R.menu.main, menu);
        return true;
    }

    public void setContentView(int contentView) {
        this.contentView = contentView;
    }

    public PopupMenu getSupportMenuInflater() {


        return supportMenuInflater;
    }
}

