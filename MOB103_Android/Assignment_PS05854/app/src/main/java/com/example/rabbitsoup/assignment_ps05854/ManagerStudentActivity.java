package com.example.rabbitsoup.assignment_ps05854;

import android.database.Cursor;
import android.os.Bundle;
import android.support.annotation.Nullable;
import android.support.v7.app.AppCompatActivity;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.ListView;
import android.widget.Toast;

import java.util.ArrayList;

/**
 * Created by Rabbit Soup on 8/14/2017.
 */

public class ManagerStudentActivity extends AppCompatActivity {
    DataBaseSQLite database;
    EditText edtName,edtAge;
    Button btnAddSinhVien;
    ListView lvSinhVien;
    ArrayList<StudentClass> arraySinhVien ;
    StudentAdapter adapter ;
//    StudentAdapter adapter;
    @Override
    protected void onCreate(@Nullable Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.addlist);
        lvSinhVien = (ListView)findViewById(R.id.listViewSinhVien);
        database =  new DataBaseSQLite(ManagerStudentActivity.this,database.DATABASE_NAME,null,1);
        arraySinhVien = new ArrayList<>();
        lvSinhVien.setAdapter(adapter);
        edtName = (EditText) findViewById(R.id.edtName);
        edtAge = (EditText) findViewById(R.id.edtAge);

        adapter = new StudentAdapter(this,R.layout.dongsinhvien,arraySinhVien);
        lvSinhVien.setAdapter(adapter);



        btnAddSinhVien = (Button) findViewById(R.id.btnAddStudent);
        btnAddSinhVien.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                //Loi o dong nay
                try {


                    final String txtName = edtName.getText().toString();
                    final String txtAge = edtAge.getText().toString();




                    //Gan du lieu vao listView

                    database.QueryData("INSERT INTO sinhvien VALUES(null, '"+txtName+"', '"+txtAge+"' )");
                    Cursor dataSinhVien = database.getData("SELECT * FROM sinhvien");
                    while(dataSinhVien.moveToNext()){
                        int id = dataSinhVien.getInt(0);
                        String ten = dataSinhVien.getString(1);
                        int age = dataSinhVien.getInt(2);
                        StudentClass studentClass = new StudentClass(id,ten,age);
                        arraySinhVien.add(studentClass);

                    }
//                    Toast.makeText(ManagerStudentActivity.this, ten+age+"", Toast.LENGTH_SHORT).show();
                    adapter.notifyDataSetChanged();
                }catch (Exception e){
                    Toast.makeText(ManagerStudentActivity.this,e+"",Toast.LENGTH_LONG).show();
                }

                //insert Du lieu


            }
        });


    }
}
