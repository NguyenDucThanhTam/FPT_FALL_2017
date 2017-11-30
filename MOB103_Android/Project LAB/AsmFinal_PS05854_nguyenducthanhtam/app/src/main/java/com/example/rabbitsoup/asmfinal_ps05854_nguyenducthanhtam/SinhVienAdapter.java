package com.example.rabbitsoup.asmfinal_ps05854_nguyenducthanhtam;

import android.content.Context;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.BaseAdapter;
import android.widget.TextView;

import java.util.ArrayList;

/**
 * Created by namcu on 13/8/2017.
 */

public class SinhVienAdapter extends BaseAdapter {
    private Context context;
    private int layout;
    private ArrayList<SinhVien> sinhVienArrayList;

    public SinhVienAdapter(Context context, int layout, ArrayList<SinhVien> sinhVienArrayList) {
        this.context = context;
        this.layout = layout;
        this.sinhVienArrayList = sinhVienArrayList;
    }

    @Override
    public int getCount() {
        return sinhVienArrayList.size();
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
        LayoutInflater inflater = (LayoutInflater) context.getSystemService(Context.LAYOUT_INFLATER_SERVICE);
        view=inflater.inflate(layout,null);

        TextView txtSTT = (TextView) view.findViewById(R.id.txtSTTHocSinh);
        TextView txtTenSV = (TextView)view.findViewById(R.id.txtTenHocSinh);
        TextView txtNgaySinh = (TextView) view.findViewById(R.id.txtNgaySinh);

        SinhVien sinhVien = sinhVienArrayList.get(i);

        txtSTT.setText(String.valueOf(i+1));
        txtTenSV.setText(sinhVien.getName());
        txtNgaySinh.setText(sinhVien.getNgaySinh());
        return view;
    }
}
