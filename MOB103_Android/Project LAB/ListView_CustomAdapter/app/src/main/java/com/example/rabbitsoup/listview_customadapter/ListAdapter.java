package com.example.rabbitsoup.listview_customadapter;

import android.content.Context;
import android.support.annotation.NonNull;
import android.support.annotation.Nullable;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.ArrayAdapter;
import android.widget.TextView;

import java.util.List;

/**
 * Created by Rabbit Soup on 8/29/2017.
 */

public class ListAdapter extends ArrayAdapter<SinhVien> {

    public ListAdapter(Context context, int resource, List<SinhVien> arrayList) {
        super(context, resource, arrayList);
    }

    @NonNull
    @Override
    public View getView(int position, @Nullable View view, @NonNull ViewGroup parent) {
        //Giao dien tung dong trong ListView
        View v = view;
        if(v ==null){
            LayoutInflater layout;
            layout = LayoutInflater.from(getContext());
            v =layout.inflate(R.layout.activity_dong_sinh_vien,null);
        }
            //Co bao nhieu sinh vien chay bay nhieu lan
        SinhVien arr = getItem(position);//

        if(arr!=null){
            TextView tt1= (TextView)v.findViewById(R.id.txtName);
            tt1.setText(arr.Name);
            TextView tt2 = (TextView)v.findViewById(R.id.txtAge);
            tt2.setText(String.valueOf(arr.NamSinh));
        }
        return v;
    }
}
