package com.example.rabbitsoup.datepicker;

import android.content.Context;
import android.graphics.Color;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.DatePicker;
import android.widget.Toast;

public class MainActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);


        final DatePicker simpleDatePicker = (DatePicker) findViewById(R.id.simpleDatePicker);
        simpleDatePicker.setSpinnersShown(false);
        //Button add submit
        Button submit = (Button) findViewById(R.id.submitButton);
        // Event click button
        submit.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                String day = "Day = "+ simpleDatePicker.getDayOfMonth();

                String month = "Month ="+simpleDatePicker.getMonth();

                String year = "Year = "+simpleDatePicker.getYear();
                //
                Toast.makeText(getApplicationContext(),day+ "\n" + month +"\n"+year,Toast.LENGTH_SHORT).show();
            }
        });

        //Method getDayofMonth
         int day= simpleDatePicker.getDayOfMonth();

        int month = simpleDatePicker.getMonth();

        int year = simpleDatePicker.getYear();

        int firstDay = simpleDatePicker.getFirstDayOfWeek();

        simpleDatePicker.setBackgroundColor(Color.RED);
    }


}
