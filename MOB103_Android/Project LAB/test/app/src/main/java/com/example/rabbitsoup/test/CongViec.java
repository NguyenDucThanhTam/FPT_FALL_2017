package com.example.rabbitsoup.test;

/**
 * Created by Rabbit Soup on 8/29/2017.
 */

public class CongViec {
    int id;
    String tencongviec;
     String thoigian;

    public CongViec(int id, String tencongviec, String thoigian) {
        this.id = id;
        this.tencongviec = tencongviec;
        this.thoigian = thoigian;
    }

    public CongViec(String tencongviec, String thoigian) {
        this.tencongviec = tencongviec;
        this.thoigian = thoigian;
    }

    public CongViec() {
    }

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public String getTencongviec() {
        return tencongviec;
    }

    public void setTencongviec(String tencongviec) {
        this.tencongviec = tencongviec;
    }

    public String getThoigian() {
        return thoigian;
    }

    public void setThoigian(String thoigian) {
        this.thoigian = thoigian;
    }
}
