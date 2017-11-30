package com.example.rabbitsoup.databasesql;

import android.content.Context;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.BaseAdapter;
import android.widget.Button;
import android.widget.TextView;

import java.util.List;

/**
 * Created by Rabbit Soup on 8/19/2017.
 */

public class SinhVienAdapter extends BaseAdapter {
    private Context context;
    private int layout;
    private List<SinhVien> sinhVienList;

    public SinhVienAdapter(Context context, int layout, List<SinhVien> sinhVienList) {
        this.context = context;
        this.layout = layout;
        this.sinhVienList = sinhVienList;
    }

    @Override
    public int getCount() {
        return sinhVienList.size();
    }

    @Override
    public Object getItem(int i) {
        return null;
    }
    //View
    private class ViewHolder{
        TextView txtten;
        Button btnDelete,btnEdit;

    }
    @Override
    public long getItemId(int i) {
        return 0;
    }

    @Override
    public View getView(int i, View view, ViewGroup viewGroup) {
        ViewHolder holder;
        if(view==null){
            holder = new ViewHolder();
            LayoutInflater inflater = (LayoutInflater)
                    context.getSystemService(Context.LAYOUT_INFLATER_SERVICE);
            view = inflater.inflate(layout,null);
            holder.txtten =(TextView) view.findViewById(R.id.textViewTen);
            holder.btnDelete = (Button) view.findViewById(R.id.btnDel);
            holder.btnEdit = (Button) view.findViewById(R.id.btnEdit);
            view.setTag(holder);
        }else{
            holder  = (ViewHolder) view.getTag();
        }
        SinhVien sinhVien = sinhVienList.get(i);

        holder.txtten.setText(sinhVien.getName());
        return view;
    }
}
