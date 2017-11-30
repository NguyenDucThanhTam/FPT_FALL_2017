package com.makeappsforfun.namcu.namlhps05883_mob1032_lab7;

import android.database.Cursor;
import android.os.Bundle;
import android.provider.CallLog;
import android.support.v7.app.AppCompatActivity;
import android.view.View;
import android.widget.Toast;

public class ShowAllCallsActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_show_all_calls);
        showAllCallLogs();
    }
    public void showAllCallLogs(){
        String[] projection = new String[]{
                CallLog.Calls.DATE,
                CallLog.Calls.NUMBER,
                CallLog.Calls.DURATION
        };
        String[] a =new String[]{"a"};
        Cursor c = getContentResolver().query(
                CallLog.Calls.CONTENT_URI,
                projection,
                CallLog.Calls.DURATION+"<?",
                new String[]{"30"},
                CallLog.Calls.DATE+" Asc"
                );
        /*Cursor c = getContentResolver().query(
                CallLog.Calls.CONTENT_URI,
                projection,
                CallLog.Calls.DURATION,
                new String[]{"30"},
                CallLog.Calls.DATE+" Asc");*/
        c.moveToNext();
        String s= "";
        while (c.isAfterLast()==false){
            for (int i=0;i<c.getColumnCount();i++){
                s+=c.getString(i)+" - ";
            }
            s+="\n";
            c.moveToNext();
        }
        c.close();
        Toast.makeText(this,s,Toast.LENGTH_LONG).show();
    }
    public void back(View view){
        finish();
    }
}
