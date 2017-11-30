package com.example.rabbitsoup.assigmentrecode;

/**
 * Created by Rabbit Soup on 8/28/2017.
 */

public class Student {
    int Id;
    String Name;
    int Age;

    public Student(int id, String name, int age) {
        Id = id;
        Name = name;
        Age = age;
    }

    public Student(String name, int age) {
        Name = name;
        Age = age;
    }

    public Student() {
    }

    public int getId() {
        return Id;
    }

    public void setId(int id) {
        Id = id;
    }

    public String getName() {
        return Name;
    }

    public void setName(String name) {
        Name = name;
    }

    public int getAge() {
        return Age;
    }

    public void setAge(int age) {
        Age = age;
    }

    @Override
    public String toString() {
        return "ID: "+getId()+"/t"+"Name: "+getName()+"/tAge: "+getAge()+"/n";
    }
}
