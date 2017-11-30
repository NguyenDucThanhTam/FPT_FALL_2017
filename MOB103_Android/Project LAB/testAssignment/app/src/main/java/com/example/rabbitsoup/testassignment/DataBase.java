package com.example.rabbitsoup.testassignment;

import android.content.Context;
import android.database.Cursor;
import android.database.sqlite.SQLiteDatabase;
import android.database.sqlite.SQLiteOpenHelper;

/**
 * Created by Rabbit Soup on 8/29/2017.
 */

public class DataBase extends SQLiteOpenHelper {
    public DataBase(Context context, String name, SQLiteDatabase.CursorFactory factory, int version) {
        super(context, name, factory, version);
    }
    //Truy Van Khong tra Ve Update, INSERT, DEL,..
    //Truyen chuoi de xu ly
    public void QueryData(String sql){
        //Khoi Tao DataBase cho pheps ghi dub lieu vao database
        SQLiteDatabase database = getWritableDatabase();
        //
        database.execSQL(sql);
    }
    //TruyVan Tra ve
    public Cursor getData(String sql){
        SQLiteDatabase database = getWritableDatabase();
        //Tra ve tat ca gia tri duyet ducc
        return database.rawQuery(sql,null);
    }
    @Override
    public void onCreate(SQLiteDatabase sqLiteDatabase) {

    }

    @Override
    public void onUpgrade(SQLiteDatabase sqLiteDatabase, int i, int i1) {

    }
}
