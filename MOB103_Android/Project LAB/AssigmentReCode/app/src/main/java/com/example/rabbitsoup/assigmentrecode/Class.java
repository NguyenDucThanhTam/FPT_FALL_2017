package com.example.rabbitsoup.assigmentrecode;

/**
 * Created by Rabbit Soup on 8/28/2017.
 */

public class Class {
    int id;
    String name;

    public Class(int id, String name) {
        this.id = id;
        this.name = name;
    }

    public Class(String name) {
        this.name = name;
    }

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }
}
