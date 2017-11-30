package example.com.zalopolyne;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;

public class Login extends BaseAcitivity {



    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_login);

        initDisplay();
    }

    private void initDisplay(){
        changeStatusBarColor(R.color.colorStatusDark);

    }
}
