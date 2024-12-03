<?php

class CategoryModel extends Database
{
    public function fetch_all_category(): mysqli_result|bool
    {
        $sql = "SELECT * FROM category";
        return mysqli_query($this->con, $sql);
    }

    public function get_category($id): mysqli_result|bool
    {
        $raw_sql = "SELECT name FROM category WHERE id = ?";
        $stmt = $this->con->prepare($raw_sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result();
    }

    public function add_category($name): bool
    {
        $raw_sql = "INSERT INTO category (name) VALUES (?)";
        $stmt = $this->con->prepare($raw_sql);
        $stmt->bind_param("s", $name);
        $stmt->execute();
        return $stmt->affected_rows > 0;
    }

    public function update_category($id, $name): bool
    {
        $raw_sql = "UPDATE category SET name = ? WHERE id = ?";
        $stmt = $this->con->prepare($raw_sql);
        $stmt->bind_param("si", $name, $id);
        $stmt->execute();
        return $stmt->affected_rows > 0;
    }

    public function remove_category($id): bool
    {
        $raw_sql = "DELETE FROM category WHERE id = ?";
        $stmt = $this->con->prepare($raw_sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->affected_rows > 0;
    }
}
