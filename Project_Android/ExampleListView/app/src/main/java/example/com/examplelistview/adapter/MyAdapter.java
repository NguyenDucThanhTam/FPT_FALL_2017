package example.com.examplelistview.adapter;

import android.content.Context;
import android.content.Intent;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.BaseAdapter;
import android.widget.Button;
import android.widget.TextView;
import android.widget.Toast;

import java.util.List;

import example.com.examplelistview.R;
import example.com.examplelistview.activity.DetailsActivity;
import example.com.examplelistview.uimodel.MyData;

/**
 * Created by giang on 10/2/17.
 */

public class MyAdapter extends BaseAdapter {


    private List<MyData> myDataList;
    private Context mContext;
    private View.OnClickListener clickNe;

    public MyAdapter(Context mContext, List<MyData> myDataList, View.OnClickListener clickNe) {
        this.mContext = mContext;
        this.myDataList = myDataList;
        this.clickNe = clickNe;
    }

    @Override
    public int getCount() {
        // How many item?
        System.out.println("GETCOUNT");
        return myDataList.size();
    }

    @Override
    public MyData getItem(int position) {
        // What is the data?
        System.out.println("GET ITEM ");
        return myDataList.get(position);
    }

    @Override
    public long getItemId(int position) {
        // identify?
        System.out.println("GET ITEM ID");
        return getItem(position).getId();
    }



    @Override
    public View getView(int position, View convertView, ViewGroup parent) {
        View rowView = convertView;
        // reuse views
        if (rowView == null) {
            LayoutInflater inflater = (LayoutInflater) mContext
                    .getSystemService(Context.LAYOUT_INFLATER_SERVICE);
            rowView = inflater.inflate(R.layout.list_item, null);
            // configure view holder
            ViewHolder viewHolder = new ViewHolder();
            viewHolder.title = (TextView) rowView.findViewById(R.id.list_item_title);
            viewHolder.subTitle = (TextView) rowView.findViewById(R.id.list_item_sub_title);
            viewHolder.button = (Button) rowView.findViewById(R.id.list_item_button);
            rowView.setTag(viewHolder);
        }
        ViewHolder holder = (ViewHolder) rowView.getTag();
        final MyData data = myDataList.get(position);
        holder.title.setText(data.getTitle());
        holder.subTitle.setText(data.getSubTitle());
        holder.button.setText(String.valueOf(data.getId()));
        holder.button.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                view.setTag(data);
                clickNe.onClick(view);
            }
        });
        return rowView;
    }

    static class ViewHolder {
        public TextView title;
        public TextView subTitle;
        public Button button;
    }



    public View getView1(int postion, View view, ViewGroup viewGroup) {
        System.out.println("GET VIEW NE`");
        // Get LayoutInflater Service
        LayoutInflater inflater = (LayoutInflater) mContext
                .getSystemService(Context.LAYOUT_INFLATER_SERVICE);
        // Load Detail UI components
        View rowView = inflater.inflate(R.layout.list_item, viewGroup, false);
        TextView text_title = (TextView) rowView.findViewById(R.id.list_item_title);
        TextView text_sub_title = (TextView) rowView.findViewById(R.id.list_item_sub_title);
        // Render data display
        MyData myData = myDataList.get(postion);
        text_title.setText(myData.getTitle());
        text_sub_title.setText(myData.getSubTitle());

        return rowView;
    }
}
