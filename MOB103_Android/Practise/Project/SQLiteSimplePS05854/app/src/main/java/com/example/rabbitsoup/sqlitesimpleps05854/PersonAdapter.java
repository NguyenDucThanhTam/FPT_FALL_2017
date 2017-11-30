package com.example.rabbitsoup.sqlitesimpleps05854;

import android.app.Activity;
import android.content.Context;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.BaseAdapter;
import android.widget.EditText;
import android.widget.TextView;

import java.util.List;

/**
 * Created by Rabbit Soup on 8/13/2017.
 */

public class PersonAdapter extends BaseAdapter {
    Activity activity;
    //khoi tao mang theo kieu cua class person
    List<Person> lstPreson;

    LayoutInflater layoutInflater;

    EditText edtId, edtName, edtMail;

    public PersonAdapter(Activity activity, List<Person> lstPreson,  EditText edtId, EditText edtName, EditText edtMail) {
        this.activity = activity;
        this.lstPreson = lstPreson;
        layoutInflater = (LayoutInflater)activity.getSystemService(Context.LAYOUT_INFLATER_SERVICE);
        this.edtId = edtId;
        this.edtName = edtName;
        this.edtMail = edtMail;
    }
    //Pt dem
    @Override
    public int getCount() {
        return lstPreson.size();
    }
    //Pt lay doi tuong
    @Override
    public Object getItem(int i) {
        return lstPreson.get(i);
    }

    @Override
    public long getItemId(int i) {
        return lstPreson.get(i).getId();
    }
    //Xem doi tuong
    @Override
    public View getView(int i, View view, ViewGroup viewGroup) {
        View rowView;

        rowView = layoutInflater.inflate(R.layout.row,null);

        final TextView txtRowId, txtRowName, txtRowEmail;

        txtRowId = (EditText) rowView.findViewById(R.id.txtRowId);
        txtRowName =(EditText) rowView.findViewById(R.id.txtRowName);
        txtRowEmail = (EditText) rowView.findViewById(R.id.txtRowId);
        //Thiet lap gia tri
        txtRowId.setText(""+lstPreson.get(i).getId());
        txtRowName.setText(""+lstPreson.get(i).getName());
        txtRowEmail.setText(""+lstPreson.get(i).getEmail());

        rowView.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                edtId.setText(""+txtRowId.getText());
                edtName.setText(""+txtRowName.getText());
                edtMail.setText(""+txtRowEmail.getText());
            }
        });
        return rowView;
    }
}
