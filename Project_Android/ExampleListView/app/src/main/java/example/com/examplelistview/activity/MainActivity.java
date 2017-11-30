package example.com.examplelistview.activity;

import android.content.Context;
import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.AdapterView;
import android.widget.ListView;
import android.widget.Toast;

import java.util.ArrayList;
import java.util.List;

import example.com.examplelistview.R;
import example.com.examplelistview.Setup;
import example.com.examplelistview.adapter.MyAdapter;
import example.com.examplelistview.uimodel.MyData;

public class MainActivity extends AppCompatActivity {

    private ListView my_listview;
    private List<MyData> myDataList;
    private MyAdapter adapter;

    private Context mContext;

    private View.OnClickListener clickNe;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        initData();
        initControl();
        initDisplay();
        initEvent();
    }

    private void initEvent() {
        my_listview.setOnItemClickListener(new AdapterView.OnItemClickListener() {
            @Override
            public void onItemClick(AdapterView<?> adapterView, View view, int position,
                                    long itemID) {
                MyData data = (MyData) adapterView.getItemAtPosition(position);
                Toast.makeText(mContext,"DATA: "+data.getId() + " - " + data.getTitle(),Toast.LENGTH_SHORT).show();
            }
        });

    }

    private void initDisplay() {
        // pass the Model from View to Controller

        clickNe = new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                MyData data = (MyData)view.getTag();
                Intent intent = new Intent(mContext,
                        DetailsActivity.class);
                Bundle bundle = new Bundle();
                bundle.putSerializable(Setup.MYDATA_BUNDLE_NAME, data);
                intent.putExtras(bundle);
                startActivity(intent);
            }
        };
        adapter = new MyAdapter(mContext, myDataList, clickNe);
        my_listview.setAdapter(adapter);
    }

    private void initData() {
        // prepare fake data
        // load data from DB / Intenet / FB / ....
        // MODEL
        myDataList = new ArrayList<MyData>();
        for(int i = 0; i < 100; i++){
            MyData data = new MyData(i, "TITLE "+ i, "SUB TITLE "+i);
            myDataList.add(data);
        }
        mContext = getApplicationContext();

    }

    private void initControl() {
        my_listview = (ListView) findViewById(R.id.my_listview);
    }
}
