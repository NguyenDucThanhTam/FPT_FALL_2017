package com.example.rabbitsoup.listview_customadapter;

/**
 * Created by Rabbit Soup on 8/29/2017.
 */

public class SinhVien {
    public String Name;
    public Integer NamSinh;

    public SinhVien(String name, Integer namSinh) {
        Name = name;
        NamSinh = namSinh;
    }

    public SinhVien() {
    }

    public String getName() {
        return Name;
    }

    public void setName(String name) {
        Name = name;
    }

    public Integer getNamSinh() {
        return NamSinh;
    }

    public void setNamSinh(Integer namSinh) {
        NamSinh = namSinh;
    }
}
