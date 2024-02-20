<?php
namespace Nguye\EzCode\Controllers\Admin;

use Nguye\EzCode\Commons\Controller;
use Nguye\EzCode\Models\User;

class ProfileController extends Controller
{
    private User $user;

    private string $folder = "users.";
    public function __construct()
    {
        $this->user = new User;
    }
    public function profile($id)
    {
        $data['users'] = $this->user->getById($id);
        return $this->renderViewAdmin($this->folder . __FUNCTION__, $data);
    }
}