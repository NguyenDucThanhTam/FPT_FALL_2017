package com.example.rabbitsoup.listview;

import android.content.Context;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.BaseAdapter;
import android.widget.ImageView;
import android.widget.TextView;

/**
 * Created by Rabbit Soup on 8/1/2017.
 */

public class CustomAdapter extends BaseAdapter {
    Context context;

    String countryList[];

    int flags[];

    LayoutInflater inflter;

    public CustomAdapter(Context applicationContext, String[] countryList, int[] flags){
        this.context = context;
        this.countryList = countryList;
        inflter = (LayoutInflater.from(applicationContext));

    }
    @Override
    public int getCount(){
        return countryList.length;

    }

    @Override
    public Object getItem(int i) {
        return null;
    }

    @Override
    public long getItemId(int i) {
        return 0;
    }

    public View getView(int i, View view, ViewGroup viewGroup){
        TextView country = (TextView) view.findViewById(R.id.textView);

        ImageView icon =  (ImageView) view.findViewById(R.id.icon);

        country.setText(countryList[i]);

        icon.setImageResource(flags[i]);

        return  view;

    }
}