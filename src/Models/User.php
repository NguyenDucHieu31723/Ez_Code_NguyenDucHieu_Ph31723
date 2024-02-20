<?php
namespace Nguye\EzCode\Models;

use Nguye\EzCode\Commons\Model;

class User extends Model
{
    public function getAll()
    {
        try {
            $sql = "SELECT * FROM users ORDER BY id DESC";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (\Exception $e) {
            echo "ERROR!" . $e->getMessage();
            die;
        }
    }
    public function getById($id)
    {
        try {
            $sql = "SELECT * FROM users WHERE id = :id";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            return $stmt->fetch();
        } catch (\Exception $e) {
            echo "ERROR!" . $e->getMessage();
            die;
        }
    }
    public function insert($username, $fullname, $email, $password, $avatar, $tel, $address)
    {
        try {
            $sql = "INSERT INTO users(username,fullname,email,password,avatar,tel,address)
            VALUES (:username,:fullname,:email,:password,:avatar,:tel,:address)";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':fullname', $fullname);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $password);
            $stmt->bindParam(':avatar', $avatar);
            $stmt->bindParam(':tel', $tel);
            $stmt->bindParam(':address', $address);
            $stmt->execute();
        } catch (\Exception $e) {
            echo "ERROR!" . $e->getMessage();
            die;
        }
    }
    public function delete($id)
    {
        try {
            $sql = "DELETE FROM users WHERE id = :id";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
        } catch (\Exception $e) {
            echo "ERROR!" . $e->getMessage();
            die;
        }
    }
    public function getByEmailPassword($email, $password)
    {
        try {
            $sql = "SELECT * FROM users WHERE email = :email AND password = :password";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $password);
            $stmt->execute();
            return $stmt->fetch();
        } catch (\Exception $e) {
            echo "ERROR!" . $e->getMessage();
            die;
        }
    }
}