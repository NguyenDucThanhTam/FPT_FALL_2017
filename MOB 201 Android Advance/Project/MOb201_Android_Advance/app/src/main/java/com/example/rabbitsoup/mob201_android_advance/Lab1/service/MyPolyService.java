
package com.example.rabbitsoup.mob201_android_advance.Lab1.service;

import android.app.Service;
import android.content.Intent;
import android.os.IBinder;
import android.support.annotation.Nullable;
import android.widget.Toast;

/**
 * Created by Rabbit Soup on 10/2/2017.
 */

public class MyPolyService extends Service {

    @Override
    public void onCreate() {
        Toast.makeText(this, "Service Created", Toast.LENGTH_SHORT).show();
        super.onCreate();
    }

    @Nullable
    @Override
    public IBinder onBind(Intent intent) {
        Toast.makeText(this, "onBind Running", Toast.LENGTH_SHORT).show();
        return null;
    }

    @Override
    public void onDestroy() {
        Toast.makeText(this, "Destroyed Service", Toast.LENGTH_SHORT).show();

        super.onDestroy();
    }
}
