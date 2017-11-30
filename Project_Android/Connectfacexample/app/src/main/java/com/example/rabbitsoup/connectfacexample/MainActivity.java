package com.example.rabbitsoup.connectfacexample;

import android.content.SharedPreferences;
import android.os.Bundle;
import android.support.v7.app.AppCompatActivity;

public class MainActivity extends AppCompatActivity {
    private CallbackManager callbackManager;
    private AccessTokenTracker accessTokenTracker;
    private ProfileTracker profileTracker;

    // Your Facebook APP ID
    private static String APP_ID = "308180782571605"; // Replace your App ID here

    // Instance of Facebook Class
    private Facebook facebook;
    private AsyncFacebookRunner mAsyncRunner;
    String FILENAME = "AndroidSSO_data";
    private SharedPreferences mPrefs;

    @Override
    public void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        mapped();
        innitEvent();

        facebook = new Facebook(APP_ID);
        mAsyncRunner = new AsyncFacebookRunner(facebook);
}

    private void innitEvent() {
        btnFbLogin.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                loginToFacebook();
            }
        });
    }
    }

    private void mapped() {
        btnFbLogin = ()
    }
