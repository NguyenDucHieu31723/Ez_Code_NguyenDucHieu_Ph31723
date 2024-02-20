<?php
namespace Nguye\EzCode\Models;

use Nguye\EzCode\Commons\Model;

class Course extends Model
{
    public function getFirstLatest()
    {
        try {
            $sql = "SELECT 
                    s.name            s_name,
                    c.name            c_name,
                    c.id              c_id,
                    c.status_id       c_status_id,
                    c.description     c_description,
                    c.price           c_price,
                    c.thumbnail       c_thumbnail,
                    c.total_register  c_total_register
                    FROM  courses c 
                    INNER JOIN status s
                    ON c.status_id = s.id
                    ORDER BY c.id
                    LIMIT 1";

            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            return $stmt->fetch();
        } catch (\Exception $e) {
            echo "ERROR!" . $e->getMessage();
            die;
        }
    }
    public function getTop3()
    {
        try {
            $sql = "SELECT 
                    s.name            s_name,
                    c.name            c_name,
                    c.id              c_id,
                    c.status_id       c_status_id,
                    c.description     c_description,
                    c.price           c_price,
                    c.thumbnail       c_thumbnail,
                    c.total_register  c_total_register
                    FROM  courses c 
                    INNER JOIN status s
                    ON c.status_id = s.id
                    ORDER BY c.id
                    LIMIT 3 ";

            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (\Exception $e) {
            echo "ERROR!" . $e->getMessage();
            die;
        }
    }
    public function getTop6()
    {
        try {
            $sql = "SELECT 
                    s.name            s_name,
                    c.name            c_name,
                    c.id              c_id,
                    c.status_id       c_status_id,
                    c.description     c_description,
                    c.price           c_price,
                    c.thumbnail       c_thumbnail,
                    c.total_register  c_total_register
                    FROM  courses c 
                    INNER JOIN status s
                    ON c.status_id = s.id
                    ORDER BY c.id
                    LIMIT 6 ";

            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (\Exception $e) {
            echo "ERROR!" . $e->getMessage();
            die;
        }
    }
    public function getCourseLike()
    {
        try {
            $sql = "SELECT 
                    s.name            s_name,
                    c.name            c_name,
                    c.id              c_id,
                    c.status_id       c_status_id,
                    c.description     c_description,
                    c.price           c_price,
                    c.thumbnail       c_thumbnail,
                    c.total_register  c_total_register
                    FROM  courses c 
                    INNER JOIN status s
                    ON c.status_id = s.id
                    WHERE total_register >= 100 
                    LIMIT 3";

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
            s.name              s_name,
            c.id                c_id,
            c.name              c_name,
            c.description       c_description,
            c.price             c_price,
            c.thumbnail         c_thumbnail,
            c.total_register    c_total_register
            FROM courses c
            INNER JOIN status s
            ON c.status_id = s.id ";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (\Exception $e) {
            echo "ERROR!" . $e->getMessage();
            die;
        }
    }
    public function getByID($id)
    {
        try {
            $sql = "SELECT 
                    s.name            s_name,
                    c.name            c_name,
                    c.id              c_id,
                    c.status_id       c_status_id,
                    c.description     c_description,
                    c.price           c_price,
                    c.thumbnail       c_thumbnail,
                    c.total_register  c_total_register
                    FROM  courses c 
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
    public function insert($name, $description, $price, $status_id, $thumbnail, $total_register)
    {
        try {
            $sql = "INSERT INTO courses (name,description,price,status_id,thumbnail,total_register)
                    VALUES (:name,:description,:price,:status_id,:thumbnail,:total_register)";

            $stmt = $this->conn->prepare($sql);

            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':description', $description);
            $stmt->bindParam(':price', $price);
            $stmt->bindParam(':status_id', $status_id);
            $stmt->bindParam(':total_register', $total_register);
            $stmt->bindParam(':thumbnail', $thumbnail);

            $stmt->execute();

        } catch (\Exception $e) {
            echo "ERROR!" . $e->getMessage();
            die;
        }
    }
    public function update($id, $name, $description, $price, $status_id, $total_register, $thumbnail)
    {
        try {
            $sql = "UPDATE courses
        SET name = :name,
        description = :description,
        price = :price,
        status_id = :status_id,
        total_register = :total_register,
        thumbnail = :thumbnail 
        WHERE id = :id";

            $stmt = $this->conn->prepare($sql);

            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':description', $description);
            $stmt->bindParam(':price', $price);
            $stmt->bindParam(':status_id', $status_id);
            $stmt->bindParam(':total_register', $total_register);
            $stmt->bindParam(':thumbnail', $thumbnail);

            $stmt->execute();
        } catch (\Exception $e) {
            echo "ERROR!" . $e->getMessage();
            die;
        }
    }
    public function delete($id)
    {
        try {
            $sql = "DELETE FROM courses WHERE id = :id";

            $stmt = $this->conn->prepare($sql);

            $stmt->bindParam(':id', $id);

            $stmt->execute();
        } catch (\Exception $e) {
            echo "ERROR!" . $e->getMessage();
            die;
        }
    }
}