package com.example.rabbitsoup.asmfinal_ps05854_nguyenducthanhtam;

import android.app.Dialog;
import android.content.Intent;
import android.database.sqlite.SQLiteConstraintException;
import android.os.Bundle;
import android.support.v7.app.AppCompatActivity;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Toast;

import static com.example.rabbitsoup.asmfinal_ps05854_nguyenducthanhtam.R.layout.activity_main;


public class MainActivity extends AppCompatActivity {
    Button btnthemlop, btnLuuLop, btnReset, btnXemLop, btnQlSinhVien;
    EditText edtMaLop, edtTenLop;
    Database database;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(activity_main);
        database = new Database(this, "databaseLop", null, 1);
        //database.QuerryData("CREATE TABLE IF NOT EXISTS LopHoc(MaLop VARCHAR(20) PRIMARY KEY, TenLop VARCHAR(50))");
        btnthemlop = (Button) findViewById(R.id.btnthemlop);
        btnXemLop = (Button) findViewById(R.id.btnXemDanhSach);
        btnQlSinhVien = (Button) findViewById(R.id.btnquanly);
        btnthemlop.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                DialogThemLop();
            }
        });
        btnXemLop.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent intent = new Intent(MainActivity.this, ActivityXemLop.class);
                startActivity(intent);
            }
        });
        btnQlSinhVien.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent intent = new Intent(MainActivity.this, ActivityQuanLySinhVien.class);
                startActivity(intent);
            }
        });
    }

    public void DialogThemLop() {
        final Dialog dialogThemLop = new Dialog(this);
        dialogThemLop.setTitle("Thêm mới lớp");
        //dialogThemLop_themlop.requestWindowFeature(Window.FEATURE_NO_TITLE);
        dialogThemLop.setContentView(R.layout.dialog_themlop);

        btnLuuLop = (Button) dialogThemLop.findViewById(R.id.btnConfirm);
        btnReset = (Button) dialogThemLop.findViewById(R.id.btnReset);
        edtMaLop = (EditText) dialogThemLop.findViewById(R.id.editTextMaLop);
        edtTenLop = (EditText) dialogThemLop.findViewById(R.id.editTextTenLop);
        btnLuuLop.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                String maLop = edtMaLop.getText().toString();
                String tenLop = edtTenLop.getText().toString();
                try {
                    if ((maLop.length() != 0 && tenLop.length() != 0)) {
                        database.QuerryData("INSERT INTO LopHoc VALUES('" + maLop + "'" + ", '" + tenLop + "'" + ")");
                        tb("Đã Insert");
                    } else {
                        tb("Không hợp lệ, nhâp lại!");
                    }
                } catch (SQLiteConstraintException e) {
                    tb("Mã lớp đã tồn tại, nhâp lại!");
                } catch (Exception e) {
                    tb(e + "");
                }
            }
        });
        btnReset.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                edtTenLop.setText("");
                edtMaLop.setText("");
            }
        });
        dialogThemLop.show();
    }


    public void tb(String e) {
        Toast.makeText(this, e, Toast.LENGTH_SHORT).show();
    }
}
