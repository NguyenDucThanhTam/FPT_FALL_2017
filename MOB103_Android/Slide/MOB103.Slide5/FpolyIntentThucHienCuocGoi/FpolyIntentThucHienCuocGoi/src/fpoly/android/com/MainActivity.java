package fpoly.android.com;

import android.app.Activity;
import android.content.Intent;
import android.net.Uri;
import android.os.Bundle;
import android.view.Menu;
import android.view.View;
import android.widget.EditText;

public class MainActivity extends Activity {
	EditText txtPhoneNumber;
	@Override
	protected void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		setContentView(R.layout.activity_main);
	}

	@Override
	public boolean onCreateOptionsMenu(Menu menu) {
		// Inflate the menu; this adds items to the action bar if it is present.
		getMenuInflater().inflate(R.menu.main, menu);
		return true;
	}
	public void thucHienCuocGoi(View v)
	{
		txtPhoneNumber = (EditText)findViewById(R.id.txtNumber);
		String number = txtPhoneNumber.getText().toString();
		Intent activityPhoneCall  = new Intent(Intent.ACTION_CALL, Uri.parse(number));
		startActivity(activityPhoneCall);		
	}
}
