package com.example.rabbitsoup.testassignment;

/**
 * Created by Rabbit Soup on 8/29/2017.
 */

public class Class {
    private int ID;
    private String Name;

    public Class() {
    }

    public Class(String name) {
        Name = name;
    }

    public Class(int ID, String name) {
        this.ID = ID;
        Name = name;
    }

    public int getID() {
        return ID;
    }

    public void setID(int ID) {
        this.ID = ID;
    }

    public String getName() {
        return Name;
    }

    public void setName(String name) {
        Name = name;
    }
}
