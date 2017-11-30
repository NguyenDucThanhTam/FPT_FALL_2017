package com.example.rabbitsoup.testassignment;

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

public class ClassDapter extends ArrayAdapter<Class> {

    public ClassDapter(@NonNull Context context, @LayoutRes int resource, @NonNull List<Class> objects) {
        super(context, resource, objects);
    }

    @NonNull
    @Override
    public View getView(int position, @Nullable View convertView, @NonNull ViewGroup parent) {
        View v=convertView ;
        if(v == null){
            //neu chua co thi khoi tao LayoutInflater
            LayoutInflater inflater = LayoutInflater.from(getContext());
            v = inflater.inflate(R.layout.activity_activtity__dong__table__class,null);
        }
        //Khoi tao doi tuong Class, lay tat ca doi tuong co trong Arr
        Class layout = getItem(position);
        if(layout!=null){
            TextView txtID = (TextView) v.findViewById(R.id.txtID_Dong_Table);
            txtID.setText(layout.getID());
            TextView txtName = (TextView) v.findViewById(R.id.txtNAME_Dong_Table);
            txtName.setText(layout.getName());
        }
        return v;
    }
}
