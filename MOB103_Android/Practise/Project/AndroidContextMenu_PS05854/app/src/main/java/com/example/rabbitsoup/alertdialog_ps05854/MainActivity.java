package com.example.rabbitsoup.alertdialog_ps05854;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.ContextMenu;
import android.view.MenuItem;
import android.view.View;
import android.widget.ArrayAdapter;
import android.widget.ListView;
import android.widget.Toast;

public class MainActivity extends AppCompatActivity {
    // Khai bao
    ListView listView1;
    //Khoi tao chuoi
    String contacts[] ={"Ajay","Sachin","Submit","Tarun","Yogesh"};
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        listView1 = (ListView) findViewById(R.id.listView1);

        ArrayAdapter<String> adapter = new ArrayAdapter<String>(this,android.R.layout.simple_list_item_1,contacts);

        listView1.setAdapter(adapter);
        //Dang ky listview voi context
        registerForContextMenu(listView1);
    }

    @Override
    public void onCreateContextMenu(ContextMenu menu, View v, ContextMenu.ContextMenuInfo menuInfo) {
        super.onCreateContextMenu(menu, v, menuInfo);

        menu.setHeaderTitle("Select The Action");

        menu.add(0,v.getId(),0,"Call");
        menu.add(0,v.getId(),0,"SMS");
    }

    @Override
    public boolean onContextItemSelected(MenuItem item) {
        if (item.getTitle()=="Call"){
            Toast.makeText(getApplicationContext(),"calling code",Toast.LENGTH_LONG).show();
        }else if(item.getTitle()=="SMS"){
            Toast.makeText(getApplicationContext(),"sending sms code",Toast.LENGTH_LONG).show();
        }else {return false;}

        return true;
    }
}
