package com.example.rabbitsoup.databasesql;

import android.content.Context;
import android.database.Cursor;
import android.database.sqlite.SQLiteDatabase;
import android.database.sqlite.SQLiteOpenHelper;

/**
 * Created by Rabbit Soup on 8/18/2017.
 */

public class Database extends SQLiteOpenHelper {

    public Database(Context context, String name, SQLiteDatabase.CursorFactory factory, int version) {
        super(context, name, factory, version);
    }
    //Truy van tra ve
    //Su dung cho cac thao tac nhu INSERT , UPDATE, UPGRADE,DELETE,ETC.
    public void QueryData(String sql){
        SQLiteDatabase database = getWritableDatabase();
        database.execSQL(sql);

    }
    //Truy van co tra ket qua SELECT

    public Cursor GetData(String sql){
        SQLiteDatabase database = getWritableDatabase();
        //tra ve tat ca gia tri . Co 2 tham so  String va selection
        return database.rawQuery(sql,null);
    }

    @Override
    public void onCreate(SQLiteDatabase sqLiteDatabase) {

    }

    @Override
    public void onUpgrade(SQLiteDatabase sqLiteDatabase, int i, int i1) {

    }
}
