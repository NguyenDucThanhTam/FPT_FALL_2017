package com.example.rabbitsoup.sqlitesimpleps05854;

import android.os.Bundle;
import android.support.v7.app.AppCompatActivity;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.ListView;

import java.util.ArrayList;
import java.util.List;

public class MainActivity extends AppCompatActivity {
    EditText edtId, edtName, edtEmail;
    Button btnAdd, btnUpdate, btnDelete;
    ListView lstPerson;
    List<Person>  data = new ArrayList();
    DataBaseHelper db ;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        db = new DataBaseHelper(this);
        btnAdd = (Button)
                findViewById(R.id.btnAdd);
        btnUpdate = (Button)
                findViewById(R.id.btnUpdate);
        btnDelete = (Button) findViewById(R.id.btnDelete);
        lstPerson = (ListView)findViewById(R.id.list);

        edtId = (EditText) findViewById(R.id.txtRowId);
        edtName = (EditText) findViewById(R.id.txtRowName);
        edtEmail = (EditText) findViewById(R.id.txtRowEmail);
        //Load data
        refreshData();
        // Set event

        btnAdd.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Person person = new Person
                        (Integer.parseInt(edtId.getText().toString()),edtName.getText().toString(),edtEmail.getText().toString());
                db.addPerson(person);

                refreshData();
            }
        });

        btnUpdate.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Person person = new Person
                        (Integer.parseInt(edtId.getText().toString()),edtName.getText().toString(),edtEmail.getText().toString());
                db.updatePerson(person);
                refreshData();
            }
        });

        btnDelete.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Person person = new Person
                        (Integer.parseInt(edtId.getText().toString()),edtName.getText().toString(),edtEmail.getText().toString());
                db.deletePerson(person);
                refreshData();
            }
        });
    }

    public void refreshData(){
        data = db.getAllPersonList();
        PersonAdapter adapter = new PersonAdapter(MainActivity.this,data,edtId,edtName,edtEmail);
        lstPerson.setAdapter(adapter);
    }
}
