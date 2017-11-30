package com.example.rabbitsoup.androidintenalstorageps05854;

import android.os.Bundle;
import android.support.v7.app.AppCompatActivity;
import android.view.View;
import android.widget.EditText;
import android.widget.Toast;

import java.io.FileInputStream;
import java.io.FileOutputStream;
import java.io.IOException;
import java.io.InputStreamReader;
import java.io.OutputStreamWriter;

public class MainActivity extends AppCompatActivity {
    EditText textmsg;
    static final int READ_BLOCK_SIZE=100;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        textmsg=(EditText)
                findViewById(R.id.editText1);




    }
    //Write to file
    public void WriteBtn(View v){
        try {
            FileOutputStream fos = openFileOutput("mytextfile.txt",MODE_PRIVATE);
            OutputStreamWriter osw = new OutputStreamWriter(fos);
            osw.write(textmsg.getText().toString());
            osw.close();

            Toast.makeText(getBaseContext(), "File saved successfully", Toast.LENGTH_SHORT).show();
        }
        catch (IOException ex){
            ex.printStackTrace();
        }
    }

    public void ReadBtn(View v){
        try {
            FileInputStream fis = openFileInput("mytextfile");
            InputStreamReader isr = new InputStreamReader(fis);

            char[] inputBuffer = new char[READ_BLOCK_SIZE];

            String s = "";
            int charRead;
            while((charRead = isr.read(inputBuffer))>0){//String no null
                String readstring = String.copyValueOf(inputBuffer,0,charRead);
                s+=readstring;
            }
            isr.close();
            Toast.makeText(getBaseContext(),s,Toast.LENGTH_SHORT).show();

        }
        catch (IOException ex){
            ex.printStackTrace();
        }
    }
}
