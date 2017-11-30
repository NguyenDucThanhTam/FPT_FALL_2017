package example.com.zalopolyne;

import android.content.Context;
import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;

public class MainActivity extends BaseAcitivity implements View.OnClickListener{

    Button btn_login_main_activity;
    Context context;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        initControl();
        initDisplay();
        initEvent();
    }


    @Override
    public void onClick(View view) {
        int clickedID = view.getId();
        switch (clickedID){
//            case R.id.btn_login_main_activity:
//                Intent intent = new Intent(context, Login.class);
//                startActivity(intent);
//                break;
        }
    }

    private void initControl(){
        context = getApplicationContext();
//        btn_login_main_activity = (Button) findViewById(R.id.btn_login_main_activity);
    }

    private void initDisplay(){
        getSupportActionBar().hide();
    }
    private void initEvent(){
//        btn_login_main_activity.setOnClickListener(this);
    }
}
