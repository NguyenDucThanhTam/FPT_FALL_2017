package com.example.rabbitsoup.u6l1ps05854;

import android.content.Intent;
import android.content.SharedPreferences;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.Menu;
import android.view.MenuItem;
import android.view.View;
import android.widget.Button;
import android.widget.CheckBox;
import android.widget.EditText;

public class MainActivity extends AppCompatActivity {
    EditText user, passUser;
    CheckBox checkStt;
    String filename = "mydata";
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        user = (EditText)
                findViewById(R.id.editText1);
        passUser =(EditText)
                findViewById(R.id.editText2);
        checkStt = (CheckBox) findViewById(R.id.checkBoxStt);
        Intent myIntent = new Intent();

        Button btn = (Button) findViewById(R.id.btnSub);
        btn.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                GoToNextActivity();


            }
        });
    }
    public void GoToNextActivity(){

        finish();
        //Khoi tao Intent voi cu phap
        // Intent tenIntent = new Intent(this, tenActivityMuonGui.class);
        Intent intent = new Intent(this,LoginActivity.class);
        intent.putExtra("username",user.getText().toString());
        startActivity(intent);
    }

    @Override
    protected void onPause() {
        super.onPause();
        //Save status
        savingPrefenrences();
    }

    @Override
    protected void onResume() {
        super.onResume();
        //Read page
        restoringPreferences();
    }



    private void savingPrefenrences() {
        // tao doi tuong getSharedPreferences
        SharedPreferences s = getSharedPreferences(filename,MODE_PRIVATE);
        //Tao doi tuong editor luu thay doi
        SharedPreferences.Editor editor = s.edit();
        //Lay gia tri
        String userget = user.getText().toString();

        String passu= passUser.getText().toString();
        boolean chk = checkStt.isChecked();
        if(!chk){
            // Xoa moi luu tru truosc do
            editor.clear();

        }
        else{
            //Luu vao Editor
            editor.putString("username",userget);
            editor.putString("password",passu);
            editor.putBoolean("saveStt",chk);
        }

    }
    private void restoringPreferences() {
        SharedPreferences pref = getSharedPreferences(filename,MODE_PRIVATE);
        boolean chk = pref.getBoolean("savestatus",false);
        if(chk){
            //get user, pass, if no data = null
            String userget = pref.getString("user","");

            String pass = pref.getString("passUser","");
            user.setText(userget);
            passUser.setText(pass);
        }
        checkStt.setChecked(chk);
    }

    @Override
    public boolean onCreateOptionsMenu(Menu menu) {
        getMenuInflater().inflate(R.menu.main,menu);
        return  true;
    }

    @Override
    public boolean onOptionsItemSelected(MenuItem item) {
        int id = item.getItemId();
        if(id == R.id.action_setting){
            return true;
        }
        return  super.onOptionsItemSelected(item);
    }
}
