package com.example.rabbitsoup.bai1l4_ps05854;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.Menu;
import android.view.MenuItem;
import android.widget.Toast;

public class MainActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
    }

    @Override
    public boolean onOptionsItemSelected(MenuItem item) {
        switch (item.getItemId()){
            case R.id.Lab1 :
                Toast.makeText(getApplicationContext(),"Bạn đã chọn xem điểm Lab 1",Toast.LENGTH_SHORT).show();
                break;
            case R.id.Lab2:
                Toast.makeText(getApplicationContext(),"Bạn đã chọn xem điểm Lab 2",Toast.LENGTH_SHORT).show();
                break;
            case R.id.Lab3:
                Toast.makeText(getApplicationContext(),"Bạn đã chọn xem điểm Lab 3",Toast.LENGTH_SHORT).show();
                break;
            case R.id.Lab4:
                Toast.makeText(getApplicationContext(),"Bạn đã chọn xem điểm Lab 4",Toast.LENGTH_SHORT).show();
                break;
            case R.id.q1 :
                Toast.makeText(getApplicationContext(),"Bạn đã chọn xem điểm Quiz 1",Toast.LENGTH_SHORT).show();
                break;
            case R.id.q2:
                Toast.makeText(getApplicationContext(),"Bạn đã chọn xem điểm Quiz 2",Toast.LENGTH_SHORT).show();
                break;
            case R.id.q3:
                Toast.makeText(getApplicationContext(),"Bạn đã chọn xem điểm Quiz 3",Toast.LENGTH_SHORT).show();
                break;
            case R.id.q4:
                Toast.makeText(getApplicationContext(),"Bạn đã chọn xem điểm Quiz 4",Toast.LENGTH_SHORT).show();
                break;

        }
        return super.onOptionsItemSelected(item);
    }

    @Override
    public boolean onCreateOptionsMenu(Menu menu) {
        getMenuInflater().inflate(R.menu.lab04menu, menu);
        return true;
    }
    
}
