<?php
namespace Nguye\EzCode\Models;

use Nguye\EzCode\Commons\Model;

class Comment extends Model
{
    public function getAll()
    {
        try {
            $sql = "SELECT 
            co.name                 co_name,
            u.fullname              u_fullname,
            c.id                    c_id,
            c.content               c_content,
            c.image                 c_image
            FROM comments c
            INNER JOIN courses co
            ON c.course_id = co.id 
            INNER JOIN users u
            ON c.user_id = u.id ";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (\Exception $e) {
            echo "ERROR!" . $e->getMessage();
            die;
        }
    }
}