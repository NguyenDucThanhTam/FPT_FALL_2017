package com.example.rabbitsoup.assignment_ps05854;

import android.content.Context;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.BaseAdapter;
import android.widget.EditText;

import java.util.List;

/**
 * Created by Rabbit Soup on 8/20/2017.
 */

public class ClassAdapter extends BaseAdapter{
    private Context layout;
    private int context;
    private List<ClassClass> listClass;

    public ClassAdapter(Context layout, int context, List<ClassClass> listClass) {
        this.layout = layout;
        this.context = context;
        this.listClass = listClass;
    }

    @Override
    public int getCount() {
        return listClass.size();
    }

    @Override
    public Object getItem(int i) {
        return null;
    }
    class ViewHolder{
        EditText edtStt, edtIdClass, edtNameClass;

    }
    @Override
    public long getItemId(int i) {
        return 0;
    }

    @Override
    public View getView(int i, View view, ViewGroup viewGroup) {
        ViewHolder holder ;
        if(view == null){
            holder = new ClassAdapter.ViewHolder();
            LayoutInflater inflater = (LayoutInflater) layout.getSystemService(Context.LAYOUT_INFLATER_SERVICE);
            view =inflater.inflate(context,null);
            holder.edtStt = (EditText) view.findViewById(R.id.txtSTTClass);
            holder.edtIdClass = (EditText)view.findViewById(R.id.edtClassId);
            holder.edtNameClass = (EditText) view.findViewById(R.id.edtClassName);

            view.setTag(holder);
        }else
        {
            holder = (ViewHolder) view.getTag();
        }
        ClassClass classClass = listClass.get(i);
        //Set noi dung
        holder.edtStt.setText(String.valueOf(i+1));
        holder.edtIdClass.setText(String.valueOf(classClass.getId()));
        holder.edtNameClass.setText(String.valueOf(classClass.getName()));
        return view;
    }
}
