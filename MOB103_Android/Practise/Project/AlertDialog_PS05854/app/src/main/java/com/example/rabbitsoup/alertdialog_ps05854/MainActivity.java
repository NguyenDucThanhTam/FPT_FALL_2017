package com.example.rabbitsoup.alertdialog_ps05854;

import android.content.DialogInterface;
import android.preference.DialogPreference;
import android.support.v7.app.AlertDialog;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.widget.Toast;

public class MainActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
    }
    //PT exit

    public void exit(){
        AlertDialog.Builder alertDialog = new AlertDialog.Builder(this);
        alertDialog.setTitle("Confirm Exit ...!!!");

        //Set Icon for Diallog

        alertDialog.setIcon(R.drawable.question);

        //Set Message

        alertDialog.setMessage("Are you sure, You want to exit");
        //Set CancelAble
        alertDialog.setCancelable(false);

        //YES
        alertDialog.setPositiveButton("Yes", new DialogInterface.OnClickListener() {
            @Override
            public void onClick(DialogInterface dialogInterface, int i) {
                finish();
            }
        });

        //NO
        alertDialog.setPositiveButton("No", new DialogInterface.OnClickListener() {
            @Override
            public void onClick(DialogInterface dialogInterface, int i) {
                Toast.makeText(MainActivity.this, "You clicked over No", Toast.LENGTH_LONG).show();

            }
        });

        //Cancel

        alertDialog.setPositiveButton("Cancel", new DialogInterface.OnClickListener() {
            @Override
            public void onClick(DialogInterface dialogInterface, int i) {
                Toast.makeText(getApplicationContext(), "You clicked on Cancel", Toast.LENGTH_SHORT).show();
            }
        });

        AlertDialog alertDialog2 = alertDialog.create();
        alertDialog2.show();

    }
}
