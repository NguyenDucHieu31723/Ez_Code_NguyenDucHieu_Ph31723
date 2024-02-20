<?php
namespace Nguye\EzCode\Controllers\Admin;

use Nguye\EzCode\Commons\Controller;
use Nguye\EzCode\Models\Status;

class StatusAdminController extends Controller
{
    private Status $status;
    private string $folder = 'status.';
    public function __construct()
    {
        $this->status = new Status;
    }
    public function index()
    {
        $data['status'] = $this->status->getAll();
        return $this->renderViewAdmin($this->folder . __FUNCTION__, $data);
    }
    public function show($id)
    {
        $data['status'] = $this->status->getByID($id);
        return $this->renderViewAdmin($this->folder . __FUNCTION__, $data);
    }
    public function create()
    {
        if (!empty($_POST)) {
            $name = $_POST['status'];
            $this->status->insert($name);
            header('Location: /admin/status');
            exit();
        }
        return $this->renderViewAdmin($this->folder . __FUNCTION__);
    }
    public function update($id)
    {
        $data['status'] = $this->status->getByID($id);

        if (!empty($_POST)) {
            $this->status->update(
                $id,
                $_POST['status']
            );
            header("Location: /admin/status");
            exit();
        }
        return $this->renderViewAdmin($this->folder . __FUNCTION__, $data);
    }
    public function delete($id)
    {
        $this->status->delete($id);
        header("Location: /admin/status");
    }
}