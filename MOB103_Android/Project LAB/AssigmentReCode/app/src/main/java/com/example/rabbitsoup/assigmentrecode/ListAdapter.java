package com.example.rabbitsoup.assigmentrecode;

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

public class ListAdapter extends ArrayAdapter<Class> {

    public ListAdapter(@NonNull Context context, @LayoutRes int resource, @NonNull List<Class> arr) {
        super(context, resource, arr);
    }

    @NonNull
    @Override
    public View getView(int position, @Nullable View convertView, @NonNull ViewGroup parent) {
        View v = convertView;
        if(v == null){
            LayoutInflater inflater ;
            inflater = LayoutInflater.from(getContext());

            v = inflater.inflate(R.layout.dong_table,null);
        }
        //Co bao nhieu doi tuong chay bay nhieu lan
        Class arrClass = getItem(position);
        if(arrClass!=null){
            TextView id = (TextView) v.findViewById(R.id.textView_dongTable_ID);
            id.setText(String.valueOf(arrClass.id));
            TextView name = (TextView) v.findViewById(R.id.textView_dongTable_Name);
            name.setText(arrClass.name);
        }
        return v;

    }
}
