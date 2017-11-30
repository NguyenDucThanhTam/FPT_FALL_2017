package com.example.rabbitsoup.test;

import android.content.Context;
import android.support.annotation.LayoutRes;
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

public class CongViecAdapter extends ArrayAdapter {
    public CongViecAdapter(@NonNull Context context, @LayoutRes int resource, @NonNull List<CongViec> arr) {
        super(context, resource, arr);
    }

    @NonNull
    @Override
    public View getView(int position, @Nullable View convertView, @NonNull ViewGroup parent) {
        View v = convertView;
        if(v == null){
            LayoutInflater inflater ;
            inflater = LayoutInflater.from(getContext());

            v = inflater.inflate(R.layout.activity_dong_cong_viec,null);
        }
        //Co bao nhieu doi tuong chay bay nhieu lan
        CongViec congviec = new CongViec();

        if(congviec!=null){
            TextView id = (TextView) v.findViewById(R.id.textView_DongCV_ID);
            id.setText(String.valueOf(congviec.getId()));
            TextView name = (TextView) v.findViewById(R.id.textView_DongCV_Name);
            name.setText(congviec.tencongviec);
            TextView times = (TextView) v.findViewById(R.id.textView_DongCV_ThoiGian);
            times.setText(congviec.thoigian);
        }
        return v;
    }
}
