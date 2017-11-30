package com.example.rabbitsoup.u5l3ps05854;

import android.content.Intent;
import android.net.Uri;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.Menu;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;

public class MainActivity extends AppCompatActivity {
    EditText txtNum;
    Button btn;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        btn = (Button) findViewById(R.id.btnCall);
        btn.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                thuchiencuocgoi();
            }
        });
    }

    private void thuchiencuocgoi() {
        txtNum = (EditText) findViewById(R.id.editText1);
        String number = txtNum.getText().toString();

        Intent intent = new Intent(Intent.ACTION_DIAL, Uri.fromParts("tel", number, null));
        startActivity(intent);
    }

    @Override
    public boolean onCreateOptionsMenu(Menu menu) {
        getMenuInflater().inflate(R.menu.main, menu);
        return true;
    }


}
