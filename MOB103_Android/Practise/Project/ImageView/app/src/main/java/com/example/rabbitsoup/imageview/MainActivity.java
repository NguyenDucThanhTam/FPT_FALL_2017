package com.example.rabbitsoup.imageview;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.widget.ImageView;

public class MainActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
    }
    // Theem đối tượng ImageView
    ImageView simpleImageView = (ImageView) findViewById(R.id.simpleImageView);
simpleImageView.setImageResource(R.drawable.lion);
}
