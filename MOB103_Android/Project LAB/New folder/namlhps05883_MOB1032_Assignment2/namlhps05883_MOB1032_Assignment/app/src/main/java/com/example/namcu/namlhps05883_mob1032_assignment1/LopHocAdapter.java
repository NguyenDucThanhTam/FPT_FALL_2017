package com.example.namcu.namlhps05883_mob1032_assignment1;

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

public class LopHocAdapter extends BaseAdapter {
    private Context context;
    private int layout;
    private ArrayList<LopHoc> lopHocList;
    @Override
    public int getCount() {
        return lopHocList.size();
    }

    public LopHocAdapter(Context context, int layout, ArrayList<LopHoc> lopHocList) {
        this.context = context;
        this.layout = layout;
        this.lopHocList = lopHocList;
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

        TextView txtSTT = (TextView) view.findViewById(R.id.txtSTT);
        TextView txtMaLop = (TextView)view.findViewById(R.id.txtMaLop);
        TextView txtTenLop = (TextView) view.findViewById(R.id.txtTenLop);

        LopHoc lopHoc = lopHocList.get(i);

        txtSTT.setText(String.valueOf(i+1));
        txtMaLop.setText(lopHoc.getMaLop());
        txtTenLop.setText(lopHoc.getTenLop());
        return view;
    }
}
