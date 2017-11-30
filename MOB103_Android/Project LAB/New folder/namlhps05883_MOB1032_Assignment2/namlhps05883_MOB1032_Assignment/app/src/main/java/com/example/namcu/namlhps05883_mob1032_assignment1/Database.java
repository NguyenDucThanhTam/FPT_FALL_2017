package com.example.namcu.namlhps05883_mob1032_assignment1;

import android.content.Context;
import android.database.Cursor;
import android.database.sqlite.SQLiteDatabase;
import android.database.sqlite.SQLiteOpenHelper;

/**
 * Created by namcu on 13/8/2017.
 */

public class Database extends SQLiteOpenHelper{


    public Database(Context context, String name, SQLiteDatabase.CursorFactory factory, int version) {
        super(context, name, factory, version);
    }
    //CREATE,INSERT,UPDATE,DELETE
    public  void QuerryData(String sql){
        SQLiteDatabase database = getWritableDatabase();
        database.execSQL(sql);
    }
    //SELECT
    public Cursor GetData(String sql){
        SQLiteDatabase database = getReadableDatabase();
        return database.rawQuery(sql,null);
    }


    @Override
    public void onCreate(SQLiteDatabase sqLiteDatabase) {
        sqLiteDatabase.execSQL("CREATE TABLE IF NOT EXISTS LopHoc(MaLop VARCHAR(20) PRIMARY KEY, TenLop VARCHAR(50))");
        sqLiteDatabase.execSQL("CREATE TABLE IF NOT EXISTS SinhVien(Id INTEGER PRIMARY KEY AUTOINCREMENT, MaLop VARCHAR(20), TenSV VARCHAR(40), NgaySinh VARCHAR(50))");
    }

    @Override
    public void onUpgrade(SQLiteDatabase sqLiteDatabase, int i, int i1) {

    }
}
