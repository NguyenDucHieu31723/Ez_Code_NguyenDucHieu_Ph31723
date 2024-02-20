<?php
namespace Nguye\EzCode\Controllers\Client;

use Nguye\EzCode\Commons\Controller;
use Nguye\EzCode\Models\Course;

class CourseController extends Controller
{
    private Course $course;
    public function __construct()
    {
        $this->course = new Course;
    }
    public function index()
    {

        $listCourse = $this->course->getAll();
        return $this->renderViewClient(
            'course',
            [
                'listCourse' => $listCourse
            ]

        );
    }
    public function show($id)
    {
        $showCourse = $this->course->getByID($id);
        $courseLike = $this->course->getCourseLike();
        return $this->renderViewClient('showCourse', [
            'showCourse' => $showCourse,
            'courseLike' => $courseLike
        ]);
    }
}