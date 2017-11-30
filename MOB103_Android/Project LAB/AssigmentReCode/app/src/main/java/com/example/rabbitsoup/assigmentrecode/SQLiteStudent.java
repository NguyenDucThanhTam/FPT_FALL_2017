package com.example.rabbitsoup.assigmentrecode;

import android.content.Context;
import android.database.Cursor;
import android.database.DatabaseErrorHandler;
import android.database.sqlite.SQLiteDatabase;
import android.database.sqlite.SQLiteOpenHelper;

/**
 * Created by Rabbit Soup on 8/28/2017.
 */

public class SQLiteStudent extends SQLiteOpenHelper {


    //Xay dung 2 phuong thuc mac dinh de sudung

    //function Truy Vấn Không có dữ liệu trả về CREATE, DEL, Update, INSERT , etc
    //Nhan tham so chuoi de xu ly
    public void QueryData(String sql){
        //Khoi tao data
        SQLiteDatabase database = getWritableDatabase();
        //Truyen chuoi vao execSQL
        database.execSQL(sql);
    }

    //function tra ve du lieu SELECT
    //Co chua chuoi lenh sql
    public Cursor GetData(String sql){
        SQLiteDatabase database = getWritableDatabase();
        //Tra ve tat ca du lieu get duoc tu DataBase
        // Cu phap : database.rawQuery(thamso1 , thamso2);
        //Tham so 1: Du lieu duowc tra ve
        //Tham so 2: Context
        return database.rawQuery(sql,null);
    }
    public SQLiteStudent(Context context, String name, SQLiteDatabase.CursorFactory factory, int version) {
        super(context, name, factory, version);
    }

    public SQLiteStudent(Context context, String name, SQLiteDatabase.CursorFactory factory, int version, DatabaseErrorHandler errorHandler) {
        super(context, name, factory, version, errorHandler);
    }

    @Override
    public void onCreate(SQLiteDatabase sqLiteDatabase) {
//        sqLiteDatabase.execSQL("CREATE TABLE IF NOT EXISTS sinhvien VALUES ");
            }

    @Override
    public void onUpgrade(SQLiteDatabase sqLiteDatabase, int i, int i1) {

    }
}
