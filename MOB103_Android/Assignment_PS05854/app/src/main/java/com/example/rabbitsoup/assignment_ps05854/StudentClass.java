package com.example.rabbitsoup.assignment_ps05854;

/**
 * Created by Rabbit Soup on 8/15/2017.
 */

public class StudentClass  {
   public Integer svId;
   public  String svName;
   public  Integer svAge;

    public StudentClass(Integer svId, String svName, Integer svAge) {
        this.svId = svId;
        this.svName = svName;
        this.svAge = svAge;
    }

    public StudentClass() {

    }

    public StudentClass(String ten, int age) {

    }

    public Integer getSvId() {
        return svId;
    }

    public void setSvId(Integer svId) {
        this.svId = svId;
    }

    public String getSvName() {
        return svName;
    }

    public void setSvName(String svName) {
        this.svName = svName;
    }

    public Integer getSvAge() {
        return svAge;
    }

    public void setSvAge(Integer svAge) {
        this.svAge = svAge;
    }
}
