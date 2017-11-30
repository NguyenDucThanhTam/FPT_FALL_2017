package com.example.rabbitsoup.testassignment;

import android.app.Dialog;
import android.content.Intent;
import android.os.Bundle;
import android.support.v7.app.AppCompatActivity;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;

public class MainActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        Button btnAddClass = (Button) findViewById(R.id.btnMain_AddClass);
        Button btnViewAllClass = (Button) findViewById(R.id.btnMain_ViewClass);
        Button btnManagerStudent = (Button) findViewById(R.id.btnMain_Manager_Student);

        //Set
        btnAddClass.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                //Khoi tao Dialog
                Dialog dialog = new Dialog(MainActivity.this);
                //Set View cho Dialog
                dialog.setContentView(R.layout.activity__add_class__dialog);
                //Xu ly su kien trong dialog

                final EditText txtId = (EditText) dialog.findViewById(R.id.edt_AddClass_AlertDialog_ID);
                final EditText txtName = (EditText) dialog.findViewById(R.id.edt_AddClass_AlertDialog_Name);
                Button btnReset = (Button) dialog.findViewById(R.id.btn_AddClass_AlertDialog_RESET);
                Button btnAdd = (Button) dialog.findViewById(R.id.btn_AddClass_AlertDialog_ADD);
                //btn RESET
                btnReset.setOnClickListener(new View.OnClickListener() {
                    @Override
                    public void onClick(View view) {
                        txtId.setText("");
                        txtName.setText("");
                    }
                });
                //btn ADD
                btnAdd.setOnClickListener(new View.OnClickListener() {
                    @Override
                    public void onClick(View view) {
                        String id = txtId.getText().toString();
                        String name = txtName.getText().toString();
                        //Khoi tao intent
                        Intent intent = new Intent(MainActivity.this,Activity_View_All_Class.class);
                        //Khoi tao Bundle
                        Bundle bundle = new Bundle();

                        //Gan gtri cho bundle
                        bundle.putInt("id", Integer.parseInt(id));
                        bundle.putString("name",name);
                        //Gan bundle cho intent
                        intent.putExtra("dataClass",bundle);
                        //S

                        startActivity(intent);
                    }
                });

                //hien thi Dialog
                dialog.show();

            }
        });
    }
}
