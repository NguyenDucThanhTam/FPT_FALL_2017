package com.example.rabbitsoup.assigmentrecode;

import android.database.Cursor;
import android.os.Bundle;
import android.support.annotation.Nullable;
import android.support.v7.app.AppCompatActivity;
import android.view.View;
import android.widget.AdapterView;
import android.widget.Button;
import android.widget.EditText;
import android.widget.ListView;
import android.widget.Toast;

import java.util.ArrayList;

/**
 * Created by Rabbit Soup on 8/28/2017.
 */

public class AlertDialog_Activity extends AppCompatActivity {
    SQLiteStudent database;
    EditText edtId, edtName;
    String ID, Name;

    ListView classListView;

    ArrayList<Class> arrClass;
    ListAdapter adapter;

    @Override
    protected void onCreate(@Nullable Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.dialog_add_class);

        classListView = (ListView) findViewById(R.id.listView_Class);

        arrClass = new ArrayList<Class>();

        adapter = new ListAdapter(
                AlertDialog_Activity.this,
                R.layout.dong_table,
                arrClass
        );

        //Khoi tao doi tuong trong class SQLiteStudent
        database = new SQLiteStudent(AlertDialog_Activity.this, "sinhvien.sqlite",null,1);
        //Khoi tao bang
        database.QueryData("CREATE TABLE IF NOT EXISTS classSinhVien( ID INTEGER PRIMARY KEY AUTOINCREMENT, NAME VARCHAR(30))");
        //Anh xa
        edtId = (EditText) findViewById(R.id.editText_AlertDialog_ClassID);
        edtName = (EditText) findViewById(R.id.editText_AlertDialog_ClassName);

        //Lay gia tri


        Button btnAdd = (Button) findViewById(R.id.btn_Alert_AddClass);
        try{
            btnAdd.setOnClickListener(new View.OnClickListener() {
                @Override
                public void onClick(View view) {
                    try{
                        ID = edtId.getText().toString();
                        Name = edtName.getText().toString();
                        database.QueryData("INSERT INTO classSinhVien VALUES(null, '"+Name+"')");

                        Cursor dataClass = database.GetData("SELECT * FROM classSinhVien");



                        while(dataClass.moveToNext()){
                            String name = dataClass.getString(1);
                            int id=dataClass.getInt(0);
                            arrClass.add(new Class(id, name));
                            Toast.makeText(AlertDialog_Activity.this, name+"", Toast.LENGTH_SHORT).show();

                        }
                        adapter.notifyDataSetChanged();
                        classListView.setOnItemLongClickListener(new AdapterView.OnItemLongClickListener() {
                            @Override
                            public boolean onItemLongClick(AdapterView<?> adapterView, View view, int i, long l) {
                                position = i;
                                xoaLopHoc();
                                return false;
                            }
                        });
                    }
                    catch (Exception ex){
                        Toast.makeText(AlertDialog_Activity.this, ex+"", Toast.LENGTH_SHORT).show();
                    }


                }
            });
        }
        catch (Exception ex){
            Toast.makeText(this, ex+"", Toast.LENGTH_SHORT).show();
        }classListView.setAdapter(adapter);
        Button btnReset = (Button) findViewById(R.id.btn_Alert_Reset);
        btnReset.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                reset();
            }
        });

    }

    private void reset() {
        //Anh xa
        edtId = (EditText) findViewById(R.id.editText_AlertDialog_ClassID);
        edtName = (EditText) findViewById(R.id.editText_AlertDialog_ClassName);

        edtId.setText("");
        edtName.setText("");
        Toast.makeText(this, "Reset data", Toast.LENGTH_SHORT).show();
    }

    private void addClass() {

    }
}
