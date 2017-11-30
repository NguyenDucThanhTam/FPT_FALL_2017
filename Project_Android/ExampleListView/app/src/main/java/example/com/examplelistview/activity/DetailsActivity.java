package example.com.examplelistview.activity;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.widget.TextView;

import example.com.examplelistview.R;
import example.com.examplelistview.Setup;
import example.com.examplelistview.uimodel.MyData;

public class DetailsActivity extends AppCompatActivity {
    TextView activity_detail_list_item_title;
    TextView activity_detail_list_item_sub_title;
    MyData data;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_details);
        initData();
        initControl();
        initDisplay();
    }

    private void initDisplay() {
        if(data!=null){
            activity_detail_list_item_sub_title.setText(data.getSubTitle());
            activity_detail_list_item_title.setText(data.getTitle());
        }
    }

    private void initControl() {
        activity_detail_list_item_title = (TextView) findViewById(R.id.activity_detail_list_item_title);
        activity_detail_list_item_sub_title = (TextView) findViewById(R.id.activity_detail_list_item_sub_title);
    }

    private void initData() {
        Bundle b = this.getIntent().getExtras();
        if (b != null){
             data = (MyData) b.getSerializable(Setup.MYDATA_BUNDLE_NAME);
        }
    }
}
