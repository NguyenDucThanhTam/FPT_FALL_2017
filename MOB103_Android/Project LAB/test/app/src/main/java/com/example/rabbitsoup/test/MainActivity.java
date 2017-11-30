package com.example.rabbitsoup.test;

import android.database.Cursor;
import android.os.Bundle;
import android.support.v7.app.AppCompatActivity;
import android.widget.ListView;
import android.widget.Toast;

import java.util.ArrayList;

public class MainActivity extends AppCompatActivity {
    DataBase dataBase;
    ArrayList<CongViec> arrCongViec;
    CongViecAdapter adapter;
    ListView lv;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        //Tao mang
        arrCongViec = new ArrayList<CongViec>();
        //Anh xa listview
        lv = (ListView) findViewById(R.id.listView);
        //Khoi tao Adapter
        adapter = new CongViecAdapter(
                MainActivity.this,
                R.layout.activity_dong_cong_viec,
                arrCongViec
        );

//        //khoi Tao co so du lie
            dataBase = new DataBase(MainActivity.this,"congviec.sqlite",null,1);
//        //Tao bang
       try{
           dataBase.QueryData("CREATE TABLE IF NOT EXISTS congviec(ID INTEGER PRIMARY KEY AUTOINCREMENT, Name VARCHAR(40), Times VARCHAR(40))");
       }catch (Exception ex){
           Toast.makeText(this, ex+"", Toast.LENGTH_LONG).show();
       }
       //Add du lieu vao mang
//        arrCongViec.add(new CongViec(1,"Làm Test Android","15h15"));
//        arrCongViec.add(new CongViec(2,"Check Arduino","Check Arduino"));
//        arrCongViec.add(new CongViec(3,"Đi ngủ","23h"));
        //insert Du lieu vao dataBase
        dataBase.QueryData("INSERT INTO congviec VALUES(null, 'Làm Test Android', '15h15')");
        dataBase.QueryData("INSERT INTO congviec VALUES(null, 'Check Arduino', 'Check Arduino')");
        dataBase.QueryData("INSERT INTO congviec VALUES(null, 'Đi ngủ', 'Đi ngủ')");
        //setAdapter

        lv.setAdapter(adapter);

        //Cont roaf
        Cursor dataClass = dataBase.getData("SELECT * FROM congviec");


        while(dataClass.moveToNext()){
            int id = dataClass.getInt(0);
            String name = dataClass.getString(1);
            String thoigian = dataClass.getString(2);
            arrCongViec.add(new CongViec(id, name,thoigian));


            Toast.makeText(MainActivity.this, name+"", Toast.LENGTH_SHORT).show();
        }
        adapter.notifyDataSetChanged();

    }
}
