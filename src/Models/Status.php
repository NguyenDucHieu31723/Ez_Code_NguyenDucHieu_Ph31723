<?php
namespace Nguye\EzCode\Models;

use Nguye\EzCode\Commons\Model;

class Status extends Model
{
    public function getAll()
    {
        try {
            $sql = "SELECT * FROM status ORDER BY id DESC";
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
            $sql = "SELECT * FROM status WHERE id = :id";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            return $stmt->fetch();
        } catch (\Exception $e) {
            echo "ERROR!" . $e->getMessage();
            die;
        }
    }
    public function insert($name)
    {
        try {
            $sql = "INSERT INTO status (name) VALUES (:name)";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':name', $name);
            $stmt->execute();
        } catch (\Exception $e) {
            echo "ERROR!" . $e->getMessage();
            die;
        }
    }
    public function update($id, $name)
    {
        try {
            $sql = "UPDATE status SET name = :name WHERE id = :id";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':name', $name);
            $stmt->execute();
        } catch (\Exception $e) {
            echo "ERROR!" . $e->getMessage();
            die;
        }
    }
    public function delete($id)
    {
        try {
            $sql = "DELETE FROM status WHERE id = :id";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
        } catch (\Exception $e) {
            echo "ERROR!" . $e->getMessage();
            die;
        }
    }
}