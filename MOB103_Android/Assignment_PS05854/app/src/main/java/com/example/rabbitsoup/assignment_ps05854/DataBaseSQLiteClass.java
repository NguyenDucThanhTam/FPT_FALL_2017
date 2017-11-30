package com.example.rabbitsoup.assignment_ps05854;

import android.content.Context;
import android.database.Cursor;
import android.database.DatabaseErrorHandler;
import android.database.sqlite.SQLiteDatabase;
import android.database.sqlite.SQLiteOpenHelper;

/**
 * Created by Rabbit Soup on 8/20/2017.
 */

public class DataBaseSQLiteClass extends SQLiteOpenHelper {
    //Khai bao thanh phan
    public static final String DATABASE_NAME = "Student.db";
    public static final String TABLE_NAME ="studentTable";
    public static final String COL_1 = "STT";
    public static final String COL_2 = "ID";
    public static final String COL_3 ="AGE";

//    public DataBaseSQLite(ManagerStudentActivity managerStudentActivity, String databaseName, Context context, int i)
//    {
//        super(context,databaseName,null,1);
//    }

    public DataBaseSQLiteClass(Context context, String name, SQLiteDatabase.CursorFactory factory, int version) {
        super(context, name, factory, version);
    }


    //Truy van khong tra ve u lieu INSERT, UPDATE, DELETE, etc
    public  void QueryData(String sql){
        SQLiteDatabase database = getWritableDatabase();
        database.execSQL(sql);
    }

    //Truy van tra ve Cursor SELECT
    public Cursor getData(String sql){
        SQLiteDatabase database = getWritableDatabase();
        return  database.rawQuery(sql,null);
    }

    public DataBaseSQLiteClass(Context context, String name, SQLiteDatabase.CursorFactory factory, int version, DatabaseErrorHandler errorHandler) {
        super(context, name, factory, version, errorHandler);
    }

    @Override
    public void onCreate(SQLiteDatabase sqLiteDatabase) {

        sqLiteDatabase.execSQL("CREATE TABLE IF NOT EXISTS lop('ID' INTEGER AUTOINCREMENT, '"+COL_2+"' VARCHAR PRIMARY KEY, '"+COL_3+"' VARCHAR)");
    }

    @Override
    public void onUpgrade(SQLiteDatabase sqLiteDatabase, int i, int i1) {

    }
}
