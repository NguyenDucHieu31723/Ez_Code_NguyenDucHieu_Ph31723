<?php
namespace Nguye\EzCode\Controllers\Admin;

use Nguye\EzCode\Commons\Controller;
use Nguye\EzCode\Models\Course;
use Nguye\EzCode\Models\Status;

class CoursesAdminController extends Controller
{
    private Course $course;
    private Status $status;
    private string $folder = 'courses.';
    const PATH_UPLOAD = '/uploads/courses/';
    public function __construct()
    {
        $this->course = new Course;
        $this->status = new Status;
    }
    public function index()
    {
        $data['courses'] = $this->course->getAll();
        return $this->renderViewAdmin($this->folder . __FUNCTION__, $data);
    }
    public function show($id)
    {
        $data['courses'] = $this->course->getByID($id);
        return $this->renderViewAdmin($this->folder . __FUNCTION__, $data);
    }
    public function create()
    {
        $data['status'] = $this->status->getAll();

        if (!empty($_POST)) {
            $name = $_POST['name'];
            $description = $_POST['description'];
            $price = $_POST['price'];
            $status_id = $_POST['status_id'];
            $total_register = $_POST['total_register'];

            $thumbnail = $_FILES['thumbnail'];
            $thumbnailPath = null;
            if (!empty($thumbnail)) {
                $thumbnailPath = self::PATH_UPLOAD . time() . $thumbnail['name'];
                if (!move_uploaded_file($thumbnail['tmp_name'], PATH_ROOT . $thumbnailPath)) {
                    $thumbnailPath = null;
                }
            }
            $this->course->insert($name, $description, $price, $status_id, $thumbnailPath, $total_register);
            header('Location: /admin/courses');
            exit();
        }
        return $this->renderViewAdmin($this->folder . __FUNCTION__, $data);
    }
    public function update($id)
    {
        $data['courses'] = $this->course->getByID($id);

        if (!empty($_POST)) {
            $name = $_POST['name'];
            $description = $_POST['description'];
            $price = $_POST['price'];
            $status_id = $_POST['status_id'];
            $thumbnail = $_FILES['thumbnail'];
            $thumbnailPath = $data['course']['c_thumbnail'];
            $total_register = $_POST['total_register'];
            if (!empty($thumbnail)) {
                $thumbnailPath = self::PATH_UPLOAD . time() . $thumbnail['name'];
                if (!move_uploaded_file($thumbnail['tmp_name'], PATH_ROOT . $thumbnailPath)) {
                    $thumbnailPath = $data['course']['c_thumbnail'];
                }
            }
            $this->course->update($id, $name, $description, $price, $status_id, $total_register, $thumbnailPath);
            header("Location: /admin/courses");
            exit();
        }
        $data['status'] = $this->status->getAll();
        return $this->renderViewAdmin($this->folder . __FUNCTION__, $data);
    }
    public function delete($id)
    {
        $this->course->delete($id);
        header("Location: /admin/courses");
        exit();
    }
}
