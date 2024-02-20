<?php
namespace Nguye\EzCode\Controllers\Admin;

use Nguye\EzCode\Commons\Controller;
use Nguye\EzCode\Models\User;

class UsersAdminController extends Controller
{
    private User $user;
    private string $folder = "users.";
    const PATH_UPLOAD = "/uploads/users/";
    public function __construct()
    {
        $this->user = new User;
    }
    public function index()
    {
        $data['users'] = $this->user->getAll();
        return $this->renderViewAdmin($this->folder . __FUNCTION__, $data);
    }
    public function show($id)
    {
        $data['users'] = $this->user->getById($id);
        return $this->renderViewAdmin($this->folder . __FUNCTION__, $data);
    }
    public function create()
    {
        if (!empty($_POST)) {
            $username = $_POST['username'];
            $fullname = $_POST['fullname'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $tel = $_POST['tel'];
            $address = $_POST['address'];
            $avatar = $_FILES['avatar'];
            $avatarPath = null;
            if (!empty($avatar)) {
                $avatarPath = self::PATH_UPLOAD . time() . $avatar['name'];
                if (!move_uploaded_file($avatar['tmp_name'], PATH_ROOT . $avatarPath)) {
                    $avatarPath = null;
                }
            }
            $this->user->insert($username, $fullname, $email, $password, $avatarPath, $tel, $address);
            header("Location: /admin/users");
            exit();
        }
        return $this->renderViewAdmin($this->folder . __FUNCTION__);
    }
    public function update($id)
    {
        $data['users'] = $this->user->getById($id);
        if (!empty($_POST)) {
            $username = $_POST['username'];
            $fullname = $_POST['fullname'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $tel = $_POST['tel'];
            $address = $_POST['address'];
            $avatar = $_FILES['avatar'];
            $avatarPath = null;
            if (!empty($avatar)) {
                $avatarPath = self::PATH_UPLOAD . time() . $avatar['name'];
                if (!move_uploaded_file($avatar['tmp_name'], PATH_ROOT . $avatarPath)) {
                    $avatarPath = null;
                }
            }
            $this->user->insert($username, $fullname, $email, $password, $avatarPath, $tel, $address);
            header("Location: /admin/users");
            exit();
        }
        return $this->renderViewAdmin($this->folder . __FUNCTION__, $data);
    }
    public function delete($id)
    {
        $this->user->delete($id);
        header("Location: /admin/users");
        exit();
    }

}