package com.example.rabbitsoup.lab7bai1ps05854;

import android.database.Cursor;
import android.net.Uri;
import android.os.Bundle;
import android.provider.ContactsContract;
import android.support.v4.content.CursorLoader;
import android.support.v7.app.AppCompatActivity;
import android.view.View;
import android.widget.ArrayAdapter;
import android.widget.ListView;
import android.widget.Toast;

import java.util.ArrayList;

/**
 * Created by Rabbit Soup on 8/16/2017.
 */

public class ShowAllContactsActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_show_all_contacts);
        showAllContacts();
    }
    public void back(View view){
        finish();
    }
    public void showAllContacts(){
        try {
            Uri uri = Uri.parse("content://contacts/people");
            ArrayList<String> list = new ArrayList<String>();
            CursorLoader loader = new CursorLoader(this,uri,null,null,null,null);
            Cursor c1 = loader.loadInBackground();
            c1.moveToNext();
            while (c1.isAfterLast()==false){
                String s="";
                String idCollumnName = ContactsContract.Contacts._ID;
                int idIndex =c1.getColumnIndex(idCollumnName);
                s=c1.getString(idIndex)+" - ";
                String nameColumnName=ContactsContract.Contacts.DISPLAY_NAME;
                int nameIndex = c1.getColumnIndex(nameColumnName);
                s+=c1.getString(nameIndex);
                c1.moveToNext();
                list.add(s);
            }
            c1.close();
            ListView lv = (ListView) findViewById(R.id.listviewcontact);
            ArrayAdapter<String> adapter= new ArrayAdapter<String>(this,android.R.layout.simple_list_item_1,list);
            lv.setAdapter(adapter);
        }catch (Exception e){
            Toast.makeText(this,e+"",Toast.LENGTH_LONG).show();
        }

    }
}
