package com.example.rabbitsoup.assignment_ps05854;

/**
 * Created by Rabbit Soup on 8/20/2017.
 */

public class ClassClass {
    private int stt;
    private String id;
    private String name;

    public ClassClass(int stt, String id, String name) {
        this.stt = stt;
        this.id = id;
        this.name = name;
    }

    public ClassClass() {

    }

    public String getId() {
        return id;
    }

    public void setId(String id) {
        this.id = id;
    }

    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }
}
