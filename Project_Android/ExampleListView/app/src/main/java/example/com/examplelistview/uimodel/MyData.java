package example.com.examplelistview.uimodel;

import java.io.Serializable;
import java.util.Objects;

/**
 * Created by giang on 10/2/17.
 */

public class MyData implements Serializable{
    private int id;
    private String title;
    private String subTitle;

    public MyData() {
    }

    public MyData(int id, String title, String subTitle) {
        this.id = id;
        this.title = title;
        this.subTitle = subTitle;
    }

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public String getTitle() {
        return title;
    }

    public void setTitle(String title) {
        this.title = title;
    }

    public String getSubTitle() {
        return subTitle;
    }

    public void setSubTitle(String subTitle) {
        this.subTitle = subTitle;
    }

    @Override
    public boolean equals(Object o) {
        if (this == o) return true;
        if (o == null || getClass() != o.getClass()) return false;
        MyData myData = (MyData) o;
        return id == myData.id;
    }

    @Override
    public int hashCode() {
        return Objects.hash(id);
    }
}
