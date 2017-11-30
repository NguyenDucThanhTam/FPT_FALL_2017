package com.example.namcu.namlhps05883_mob1032_assignment1;

import android.app.DatePickerDialog;
import android.database.Cursor;
import android.os.Bundle;
import android.support.v7.app.AppCompatActivity;
import android.view.View;
import android.widget.AdapterView;
import android.widget.ArrayAdapter;
import android.widget.Button;
import android.widget.DatePicker;
import android.widget.EditText;
import android.widget.ListView;
import android.widget.Spinner;
import android.widget.Toast;

import java.text.SimpleDateFormat;
import java.util.ArrayList;
import java.util.Calendar;

public class ActivityQuanLySinhVien extends AppCompatActivity {
    Spinner spinnerLopHoc;
    EditText edtName, edtNgay;
    Button btnPickDate, btnThemSinhVien;
    Database database;
    SinhVienAdapter sinhVienAdapter;
    ArrayList<LopHoc> lopHocArrayList = new ArrayList<LopHoc>();
    ArrayList<SinhVien> sinhVienArrayList = new ArrayList<SinhVien>();
    ListView lvSinhVien;
    private int position = 0;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.managersv);

        spinnerLopHoc = (Spinner) findViewById(R.id.spinnerLopHoc);
        edtName = (EditText) findViewById(R.id.txtTenSV);
        edtNgay = (EditText) findViewById(R.id.txtNgaySinh);
        btnPickDate = (Button) findViewById(R.id.btnPickDate);
        btnThemSinhVien = (Button) findViewById(R.id.btnThemSV);
        lvSinhVien = (ListView) findViewById(R.id.lvSinhVien);
        btnPickDate.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                chonNgay();
            }
        });
        btnThemSinhVien.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                themSV();
            }
        });
        database = new Database(this, "databaseLop", null, 1);


        //database.QuerryData("CREATE TABLE IF NOT EXISTS SinhVien(Id INTEGER PRIMARY KEY AUTOINCREMENT, MaLop VARCHAR(20), TenSV VARCHAR(40), NgaySinh VARCHAR(50))");

        getDuLieuLopHoc();
        if (lopHocArrayList.size() == 0) {

            edtNgay.setEnabled(false);
            edtName.setEnabled(false);
            btnPickDate.setEnabled(false);
            btnThemSinhVien.setEnabled(false);
            tb("Không có lớp,mời bạn thêm lớp!");

        }
        setSpinnerLopHoc();

        sinhVienAdapter = new SinhVienAdapter(this, R.layout.custom_listview_hocsinh, sinhVienArrayList);
        lvSinhVien.setAdapter(sinhVienAdapter);
        lvSinhVien.setOnItemLongClickListener(new AdapterView.OnItemLongClickListener() {
            @Override
            public boolean onItemLongClick(AdapterView<?> adapterView, View view, int i, long l) {
                tb("id: " + sinhVienArrayList.get(i).getId() + "\n" + "Name: " + sinhVienArrayList.get(i).getName() + "\n" + "Ngày sinh: " + sinhVienArrayList.get(i).getNgaySinh());
                return false;
            }
        });
    }

    public void chonNgay() {
        final Calendar calendar = Calendar.getInstance();

        DatePickerDialog datePickerDialog = new DatePickerDialog(this, new DatePickerDialog.OnDateSetListener() {
            @Override
            public void onDateSet(DatePicker datePicker, int i, int i1, int i2) {
                calendar.set(i, i1, i2);
                SimpleDateFormat simpleDateFormat = new SimpleDateFormat("dd/MM/yyyy");
                String ngayThangNam = simpleDateFormat.format(calendar.getTime());
                edtNgay.setText(ngayThangNam);
            }
        }, 2000, 01, 01);
        datePickerDialog.show();
    }

    public void getDuLieuLopHoc() {
        sinhVienArrayList.clear();
        Cursor dataLop = database.GetData("SELECT * FROM LopHoc");
        while (dataLop.moveToNext()) {
            LopHoc lopHoc = new LopHoc();
            String maLop = dataLop.getString(0);
            String tenLop = dataLop.getString(1);
            lopHoc.setMaLop(maLop);
            lopHoc.setTenLop(tenLop);
            lopHocArrayList.add(lopHoc);
            //tb("số thứ tự: "+stt+"\n"+"Mã lớp: "+maLop+"\n" +"Tên lớp: "+ tenLop);
        }

    }

    public void getDuLieuSinhVien(int position) {  //lấy dữ liệu sinh viên từ database theo mã lóp truyền vào arraylist sinhvien
        sinhVienArrayList.clear();
        String maLop = "'" + lopHocArrayList.get(position).getMaLop() + "'";

        Cursor dataSV = database.GetData("SELECT * FROM SinhVien WHERE MaLop=" + maLop);
        while (dataSV.moveToNext()) {
            SinhVien sinhVien = new SinhVien();
            int id = dataSV.getInt(0);
            //String maLop = dataSV.getString(1);
            String tenSV = dataSV.getString(2);
            String ngaySinh = dataSV.getString(3);
            sinhVien.setId(id);
            sinhVien.setMaLop(maLop);
            sinhVien.setName(tenSV);
            sinhVien.setNgaySinh(ngaySinh);
            sinhVienArrayList.add(sinhVien);
        }
        sinhVienAdapter.notifyDataSetChanged(); //cập nhât adapter listview sinhvien

    }

    public void setSpinnerLopHoc() {
        ArrayList<String> listLopHoc = new ArrayList<String>(); //tạo list lớp học
        int soLop = lopHocArrayList.size();
        String lopHoc;
        for (int i = 0; i < soLop; i++) {  //đổ danh sách lớp từ LopHocArrayList vào listLopHoc
            lopHoc = lopHocArrayList.get(i).getMaLop() + "--" + lopHocArrayList.get(i).getTenLop();
            listLopHoc.add(lopHoc);
        }
        ArrayAdapter arrayAdapter = new ArrayAdapter(this, android.R.layout.simple_spinner_dropdown_item, listLopHoc); // đổ list lớp học vào adapter
        spinnerLopHoc.setAdapter(arrayAdapter);
        spinnerLopHoc.setOnItemSelectedListener(new AdapterView.OnItemSelectedListener() {

            @Override
            public void onItemSelected(AdapterView<?> adapterView, View view, int i, long l) {
                position = i;
                getDuLieuSinhVien(i);
                //sinhVienAdapter.notifyDataSetChanged();
            }

            @Override
            public void onNothingSelected(AdapterView<?> adapterView) {

            }
        });
    }

    public void themSV() {
        String maLop = lopHocArrayList.get(position).getMaLop();
        String tenSV = edtName.getText().toString();
        String ngaySinh =edtNgay.getText().toString();
        if(isNgayThangNam(ngaySinh) && tenSV.trim().length()>=0){
            database.QuerryData("INSERT INTO SinhVien VALUES(null, '" + maLop + "', '" + tenSV + "', '" + ngaySinh + "')");
            tb("Đã Insert");
        }else {
            tb("Ko hợp lệ. Nhâp lại!");
        }


        getDuLieuSinhVien(position);

    }

    //// TODO: 15/8/2017 validation dd/MM/yyyy
    public static boolean isNgayThangNam(String a) {
        String s=a.trim();
        if(s.length()==10) {
            String daugach = String.valueOf(s.charAt(2))+String.valueOf(s.charAt(5));
            try {
                int ngay = Integer.parseInt(s.substring(0,2));
                int thang = Integer.parseInt(s.substring(3,5));
                int nam = Integer.parseInt(s.substring(6,10));
                if(ngay>0 && ngay<=31 && thang<=12 && thang>0 && nam>1900 && nam<=2017 && daugach.equals("//")) {
                    return true;
                }else {
                    return false;
                }
            }catch (NumberFormatException e) {
                return false;
            }
        }

        return false;
    }
    void tb(String e) {
        Toast.makeText(this, e, Toast.LENGTH_SHORT).show();
    }
}
