<?php
namespace Nguye\EzCode\Controllers\Admin;

use Nguye\EzCode\Commons\Controller;
use Nguye\EzCode\Models\Category;
use Nguye\EzCode\Models\Status;

class CategoriesAdminController extends Controller
{
    private Category $category;
    private Status $status;
    private string $folder = 'categories.';
    const PATH_UPLOAD = '/uploads/category/';
    public function __construct()
    {
        $this->category = new Category;
        $this->status = new Status;
    }
    // Danh sach
    public function index()
    {
        $data['categories'] = $this->category->getAll();
        return $this->renderViewAdmin(
            $this->folder . __FUNCTION__,
            $data
        );
    }
    public function show($id)
    {
        $data['categories'] = $this->category->getById($id);
        return $this->renderViewAdmin($this->folder . __FUNCTION__, $data);
    }
    public function create()
    {
        $data['status'] = $this->status->getAll();
        if (!empty($_POST)) {
            $name = $_POST['name'];
            $description = $_POST['description'];
            $status_id = $_POST['status'];

            $thumbnail = $_FILES['thumbnail'];
            $thumbnailPath = null;
            if (!empty($thumbnail)) {
                $thumbnailPath = self::PATH_UPLOAD . time() . $thumbnail['name'];
                if (!move_uploaded_file($thumbnail['tmp_name'], PATH_ROOT . $thumbnailPath)) {
                    $thumbnailPath = null;
                }
            }
            $this->category->insert($name, $description, $status_id, $thumbnailPath);
            header('Location: /admin/categories');
            exit();
        }
        return $this->renderViewAdmin($this->folder . __FUNCTION__, $data);
    }
    public function update($id)
    {
        $data['categories'] = $this->category->getById($id);
        if (!empty($_POST)) {
            $name = $_POST['name'];
            $description = $_POST['description'];
            $status_id = $_POST['status'];
            $thumbnail = $_FILES['thumbnail'];
            $thumbnailPath = $data['categories']['c_thumbnail'];
            if (!empty($thumbnail)) {
                $thumbnailPath = self::PATH_UPLOAD . time() . $thumbnail['name'];
                if (!move_uploaded_file($thumbnail['tmp_name'], PATH_ROOT . $thumbnailPath)) {
                    $thumbnailPath = $data['categories']['c_thumbnail'];

                }
            }
            $this->category->update($id, $name, $description, $thumbnailPath, $status_id);
            header("Location: /admin/categories");
            exit();
        }
        $data['status'] = $this->status->getAll();
        return $this->renderViewAdmin($this->folder . __FUNCTION__, $data);
    }
    public function delete($id)
    {
        $this->category->delete($id);
        // if (!empty($category['thumbnail']) && file_exists(PATH_ROOT . $category['thumbnail'])) {
        //     unlink(PATH_ROOT . $category['thumbnail']);
        // }
        header("Location: /admin/categories");
        exit();
    }
}