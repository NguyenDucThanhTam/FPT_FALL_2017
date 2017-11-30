package com.example.rabbitsoup.sqlitesimpleps05854;

import android.content.ContentValues;
import android.content.Context;
import android.database.Cursor;
import android.database.sqlite.SQLiteDatabase;
import android.database.sqlite.SQLiteOpenHelper;

import java.util.ArrayList;
import java.util.List;

/**
 * Created by Rabbit Soup on 8/13/2017.
 */

public class DataBaseHelper extends SQLiteOpenHelper {


    //DataBase

    private  static final int DATABASE_VER = 1;
    private static final String DATABASE_NAME="SQLiteDataBase";
    //Table
    private static final String TABLE_NAME="Person";
    private static final String KEY_ID="Id";
    private static final String KEY_NAME="Name";
    private static final String KEY_MAIL="Mail";

    public DataBaseHelper(Context context) {
        super(context, DATABASE_NAME, null, DATABASE_VER);
    }

    @Override
    public void onCreate(SQLiteDatabase sqLiteDatabase) {
    //Khoi tao Table

        String CREATE_TABLE ="CREATE_TABLE"+TABLE_NAME+"("
                +KEY_ID+" INTEGER PRIMARY KEY,"+KEY_NAME+" TEXT,"+KEY_MAIL+" TEXT"+")";
        sqLiteDatabase.execSQL(CREATE_TABLE);
    }

    @Override
    public void onUpgrade(SQLiteDatabase sqLiteDatabase, int i, int i1) {
sqLiteDatabase.execSQL("DROP TABLE IF EXISTS"+TABLE_NAME);
        onCreate(sqLiteDatabase);
    }

    //CRUD Person (Create,

    public void addPerson(Person person){
        //Khoi tao ghi vao DataBase
        SQLiteDatabase db = this.getWritableDatabase();
        ContentValues content = new ContentValues();
        content.put(KEY_NAME,person.getName());
        content.put(KEY_ID,person.getId());
        content.put(KEY_MAIL,person.getEmail());

        db.insert(TABLE_NAME,null,content);
        db.close();
    }

    public int updatePerson(Person person){
        SQLiteDatabase db = this.getWritableDatabase();
        ContentValues content = new ContentValues();
        content.put(KEY_NAME,person.getId());
        content.put(KEY_MAIL,person.getEmail());

        return  db.update(TABLE_NAME,content,KEY_ID+" =?",new String[]{String.valueOf(person.getId())});
    }

    public void deletePerson(Person person){
        SQLiteDatabase db = this.getWritableDatabase();
        db.delete(TABLE_NAME,KEY_ID+" =?",new String[]{String.valueOf(person.getId())});
    }

    public Person getPerson(int id){
        SQLiteDatabase db = this.getWritableDatabase();
        Cursor cursor = db.query(TABLE_NAME,new String[]
                {KEY_ID,KEY_NAME,KEY_MAIL},KEY_ID + "=?",
                new String[]{String.valueOf(id)},null ,null, null, null);

        if(cursor != null){
            cursor.moveToFirst();
        }
        return new Person(cursor.getInt(0),cursor.getString(1),cursor.getString(2));
    }

    public List<Person> getAllPersonList(){
        List<Person> lstPerson = new ArrayList<>();
        String selecQuery = "SELECT * FROM "+TABLE_NAME;
        SQLiteDatabase db = this.getWritableDatabase();
        Cursor cursor = db.rawQuery(selecQuery,null);
        if (cursor.moveToFirst()){
            do {
                Person person = new Person();
                person.setId(cursor.getInt(0));
                person.setName(cursor.getString(1));
                person.setEmail(cursor.getString(2));

                lstPerson.add(person);
            }while (cursor.moveToNext());

        }
        return lstPerson;
    }

}
