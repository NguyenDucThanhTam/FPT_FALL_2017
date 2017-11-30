package com.example.rabbitsoup.assignment_ps05854;

import android.content.Context;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.BaseAdapter;
import android.widget.ListView;
import android.widget.TextView;

import java.util.List;

/**
 * Created by Rabbit Soup on 8/20/2017.
 */

public class StudentAdapter extends BaseAdapter {
    private Context context;
    private int layout;
    private List<StudentClass> sinhvienList;

    public StudentAdapter(Context context, int layout, List<StudentClass> sinhvienList) {
        this.context = context;
        this.layout = layout;
        this.sinhvienList = sinhvienList;
    }

    class ViewHolder{
        ListView lvsinhvien;
        TextView txtId, txtName, txtAge;
    }
    @Override
    public int getCount() {
        return sinhvienList.size();
    }

    @Override
    public Object getItem(int i) {
        return null;
    }

    @Override
    public long getItemId(int i) {
        return 0;
    }

    @Override
    public View getView(int i, View view, ViewGroup viewGroup) {
        ViewHolder holder;
        if(view == null ){
            holder = new ViewHolder();
            LayoutInflater inflater = (LayoutInflater) context.getSystemService(Context.LAYOUT_INFLATER_SERVICE);
            view =inflater.inflate(layout,null);
            holder.txtId = (TextView) view.findViewById(R.id.textViewId3);
            holder.txtName = (TextView) view.findViewById(R.id.textViewName3);
            holder.txtAge = (TextView) view.findViewById(R.id.textViewAge3);
            view.setTag(holder);
        }else{
            holder = (ViewHolder) view.getTag();
        }
        StudentClass student = sinhvienList.get(i);

        holder.txtId.setText(String.valueOf(student.getSvId()));
        holder.txtName.setText(student.getSvName());
        holder.txtAge.setText(String.valueOf(student.getSvAge()));
        return view ;
    }
}
