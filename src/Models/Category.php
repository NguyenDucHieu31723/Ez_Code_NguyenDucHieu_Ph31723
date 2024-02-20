<?php
namespace Nguye\EzCode\Models;

use Nguye\EzCode\Commons\Model;

class Category extends Model
{
    public function getNameBasic()
    {
        try {
            $sql = "SELECT * FROM categories ORDER BY id DESC LIMIT 1 ";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (\Exception $e) {
            echo "ERROR!" . $e->getMessage();
            die;
        }
    }
    public function getNamePro()
    {
        try {
            $sql = "SELECT * FROM categories ORDER BY id ASC LIMIT 1 ";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (\Exception $e) {
            echo "ERROR!" . $e->getMessage();
            die;
        }
    }
    public function getAll()
    {
        try {
            $sql = "SELECT     
                    s.name             s_name,
                    c.id               c_id,
                    c.name             c_name,
                    c.description      c_description,
                    c.thumbnail        c_thumbnail
                    FROM categories c
                    INNER JOIN status s
                    ON c.status_id=s.id ";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (\Exception $e) {
            echo "ERROR: " . $e->getMessage();
            die;
        }
    }
    public function getById($id)
    {
        try {
            $sql = " SELECT 
                    s.name             s_name,
                    c.id               c_id,
                    c.name             c_name,
                    c.status_id        c_status_id,
                    c.description      c_description,
                    c.thumbnail        c_thumbnail
                    FROM categories c
                    INNER JOIN status s
                    ON c.status_id = s.id
                    WHERE c.id = :id ";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            return $stmt->fetch();
        } catch (\Exception $e) {
            echo "ERROR!" . $e->getMessage();
            die;
        }
    }
    public function insert($name, $description, $status_id, $thumbnail)
    {
        try {
            $sql = "INSERT INTO categories (name,description,thumbnail,status_id) 
            VALUES (:name,:description,:thumbnail,:status_id)";
            $stmt = $this->conn->prepare($sql);

            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':description', $description);
            $stmt->bindParam(':thumbnail', $thumbnail);
            $stmt->bindParam(':status_id', $status_id);

            $stmt->execute();
        } catch (\Exception $e) {
            echo "ERROR!" . $e->getMessage();
            die;
        }
    }
    public function update($id, $name, $description, $thumbnail, $status_id)
    {
        try {
            $sql = "UPDATE categories SET 
                name = :name,
                description = :description,
                thumbnail = :thumbnail,
                status_id = :status_id
                WHERE id = :id ";

            $stmt = $this->conn->prepare($sql);

            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':description', $description);
            $stmt->bindParam(':thumbnail', $thumbnail);
            $stmt->bindParam(':status_id', $status_id);

            $stmt->execute();
        } catch (\Exception $e) {
            echo "ERROR!" . $e->getMessage();
            die;
        }
    }
    public function delete($id)
    {
        try {
            $sql = "DELETE FROM categories WHERE id = :id";
            $stmt = $this->conn->prepare($sql);

            $stmt->bindParam(':id', $id);

            $stmt->execute();
        } catch (\Exception $e) {
            echo "ERROR!" . $e->getMessage();
            die;
        }
    }
}