package com.example.rabbitsoup.assignment_ps05854;

import java.util.ArrayList;

/**
 * Created by Rabbit Soup on 8/15/2017.
 */

public class StudentList extends StudentClass {
    private ArrayList listStudent = null;

    public StudentList(Integer svId, String svName, Integer svAge) {
        super(svId, svName, svAge);
        this.listStudent = new ArrayList();
    }

    public StudentList() {
        super();
        this.listStudent = new ArrayList();
    }
    //Kiem tra sinh vien da ton tai


}
