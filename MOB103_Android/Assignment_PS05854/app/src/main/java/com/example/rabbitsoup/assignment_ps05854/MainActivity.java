package com.example.rabbitsoup.assignment_ps05854;

import android.app.Dialog;
import android.content.Intent;
import android.database.sqlite.SQLiteDatabase;
import android.os.Bundle;
import android.support.v7.app.AppCompatActivity;
import android.view.Menu;
import android.view.MenuItem;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Toast;

public class MainActivity extends AppCompatActivity {
    //Khai bao thanh phan
    Button btnCreateDataBase=null;
    Button btnCreateClass=null;//
    Button btnInsertClass=null;
    Button btnSaveClass=null;
    Button btnViewClass=null;
    Button btnViewClass2=null;
    Button btnMangerStudent=null;
    Button btnInsertStudent=null;
    View view;
/*
*
//Xử lý sự kiện khi click vào btn Create Class

* */


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        btnCreateClass = (Button)
                findViewById(R.id.btnAdd);
//        LayoutInflater inflater = getLayoutInflater();
//        view = inflater.inflate(R.layout.addclass,(ViewGroup) findViewById(R.id.addclass));
        btnCreateClass.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                showDialogAddClass();
            }
        });

        btnViewClass = (Button)findViewById(R.id.btnView);
        btnViewClass.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                showClassList();
            }
        });

        btnMangerStudent = (Button) findViewById(R.id.btnE);
        btnMangerStudent.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                showMangerStudent();
            }
        });

    }
    SQLiteDatabase db;
    //HAM Tao CSDL
    public void createDaTaBase(){
        //Khoi tao SQL
        db = openOrCreateDatabase("quanlysinhvien.db",MODE_PRIVATE,null);
    }

    //Ham Tao bang Trong CSDL
    public void createTable(){
        String tableStudent = "CREATE TABLE tableStudent ("+
                "studentId INT primary key,"+"studentName TEXT,"+
                "className TEXT)";
        db.execSQL(tableStudent);
    }

    //Show Manager Activity
    private void showMangerStudent() {
        Intent intent = new Intent(this,ManagerStudentActivity.class);
        startActivity(intent);
    }

    private void showClassList() {
        try{
            //Khoi tao intent
            Intent intent = new Intent(this,ListActivity.class);
            //
            startActivity(intent);
        }
        catch(Exception ex){
            Toast.makeText(this, "Fail", Toast.LENGTH_SHORT).show();
        }
    }

    //Hiển thị activity add class ở dạng Dialog
    private void showDialogAddClass() {
        //Toast
//        Toast toast1 = Toast.makeText(this,"Toast:Gravity.TOP",Toast.LENGTH_SHORT);
//        toast1.setGravity(Gravity.CENTER,0,0);
//        toast1.setView(view);
//        toast1.show();
        //Khoi tao dialog
        final Dialog dialog = new Dialog(MainActivity.this);
        dialog.setTitle("Thêm lớp");
        dialog.setContentView(R.layout.addclass);
        dialog.show();
        //su ly trong Dialog
        final EditText edtId = (EditText) dialog.findViewById(R.id.edtClassId);
        final EditText edtName = (EditText) dialog.findViewById(R.id.edtClassName);

        final Button btnReset = (Button) dialog.findViewById(R.id.btnResetId);
        btnReset.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                edtId.setText("");
                edtName.setText("");
            }
        });
        final Button btnAdd = (Button) dialog.findViewById(R.id.btnSaveClass);

        btnAdd.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                    //Tao intent
                    Intent intent = new Intent(MainActivity.this,ListActivity.class);
                    //bundle
                    Bundle bundle= new Bundle();
                    //Dua gia tri vao bundle
                    String txtId= edtId.getText().toString();
                    String txtName =edtName.getText().toString();
                    bundle.putString("Id", String.valueOf(txtId));
                    bundle.putString("Name",String.valueOf(txtName));
                    //Dua bundle vao Intent
                    intent.putExtra("data",bundle);
                    startActivity(intent);
                    Toast.makeText(MainActivity.this, "Da tao bundle", Toast.LENGTH_SHORT).show();
            }
        });

    }

    //Menu
    @Override
    public boolean onCreateOptionsMenu (Menu menu) {
        getMenuInflater().inflate(R.menu.main, menu);
        return true;
    }

    @Override
    public boolean onOptionsItemSelected(MenuItem item) {
        switch (item.getItemId()){
            case R.id.addclass:
                showDialogAddClass();
                break;
            case R.id.listclass:
                showClassList();
                break;
            case R.id.sinhvien:
                showMangerStudent();
                break;
            case R.id.exit://option exit clicked
                Toast.makeText(getBaseContext(),"Asm Ps05854",Toast.LENGTH_LONG).show();
                finish();
                break;
        }
        //Tra ve gia tri
        return super.onOptionsItemSelected(item);
    }
}
