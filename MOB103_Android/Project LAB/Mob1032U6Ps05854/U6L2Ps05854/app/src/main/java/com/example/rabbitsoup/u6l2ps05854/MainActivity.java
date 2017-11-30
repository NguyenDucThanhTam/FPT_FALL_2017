package com.example.rabbitsoup.u6l2ps05854;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.util.Log;
import android.view.Menu;
import android.view.MenuItem;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;
import android.widget.Toast;

import java.io.BufferedReader;
import java.io.FileInputStream;
import java.io.FileNotFoundException;
import java.io.FileOutputStream;
import java.io.IOException;
import java.io.InputStream;
import java.io.InputStreamReader;


public class MainActivity extends AppCompatActivity {

    private Button saveButton;
    private Button readButton;

    private TextView textView;
    private EditText editText;

    // Là một tên file đơn giản.
    // Chú ý!! Không cho phép đường dẫn.
    private String simpleFileName = "myfile.txt";

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        this.saveButton = (Button) this.findViewById(R.id.button_save);
        this.readButton = (Button) this.findViewById(R.id.button_read);
        this.textView = (TextView) this.findViewById(R.id.textView);
        this.editText = (EditText) this.findViewById(R.id.editText);

        this.saveButton.setOnClickListener(new Button.OnClickListener() {

            @Override
            public void onClick(View v) {
                saveData();
            }
        });

        this.readButton.setOnClickListener(new Button.OnClickListener() {

            @Override
            public void onClick(View v) {
                readData();
            }
        });
    }


    private void saveData() {
        String data = this.editText.getText().toString();
        try {

            // Mở một luồng ghi file.
            FileOutputStream out = this.openFileOutput(simpleFileName, MODE_PRIVATE);
            // Ghi dữ liệu.
            out.write(data.getBytes());
            out.close();
            Toast.makeText(this,"File saved!",Toast.LENGTH_SHORT).show();
        } catch (Exception e) {
            Toast.makeText(this,"Error:"+ e.getMessage(),Toast.LENGTH_SHORT).show();
        }
    }

    private void readData() {
        try {

            // Mở một luồng đọc file.
            FileInputStream in = this.openFileInput(simpleFileName);

            BufferedReader br= new BufferedReader(new InputStreamReader(in));

            StringBuilder sb= new StringBuilder();
            String s= null;
            while((s= br.readLine())!= null)  {
                sb.append(s).append("\n");
            }
            this.textView.setText(sb.toString());

        } catch (Exception e) {
            Toast.makeText(this,"Error:"+ e.getMessage(),Toast.LENGTH_SHORT).show();
        }
    }

}
