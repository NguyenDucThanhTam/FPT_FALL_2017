package com.example.rabbitsoup.mob1032_lab8_ps05854;

import android.os.Bundle;
import android.support.v7.app.AppCompatActivity;
import android.view.View;
import android.webkit.WebView;
import android.webkit.WebViewClient;
import android.widget.Button;
import android.widget.EditText;

public class Bai2 extends AppCompatActivity {
    Button btnView;
    WebView webView;
    EditText edtURL;
    String url;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_bai2);
        btnView=(Button)findViewById(R.id.btnView);;
        webView=(WebView)findViewById(R.id.webView);
        edtURL =(EditText)findViewById(R.id.tvWeb);
        edtURL.setText("http://google.com.vn");
        this.url = edtURL.getText().toString();
        btnView.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                open();
            }
        });



    }

    public void open(){
        webView.getSettings().setJavaScriptEnabled(true);
        webView.loadUrl(url);
        webView.setWebViewClient(new MyBrowser());
    }

    private class MyBrowser extends WebViewClient{
        @Override
        public boolean shouldOverrideUrlLoading(WebView view, String url) {
            view.loadUrl(url);
            return true;
        }
    }
}
