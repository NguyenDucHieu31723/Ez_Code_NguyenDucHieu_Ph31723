<?php
namespace Nguye\EzCode\Controllers\Client;

use Nguye\EzCode\Commons\Controller;
use Nguye\EzCode\Models\Category;
use Nguye\EzCode\Models\Course;

class HomeController extends Controller
{
    private Course $course;
    private Category $category;
    public function __construct()
    {
        $this->course = new Course;
        $this->category = new Category;
    }
    public function index()
    {
        $courseFirstLatest = $this->course->getFirstLatest();
        $coursetop3 = $this->course->getTop3();
        $categoryPro = $this->category->getNamePro();
        $categoryBasic = $this->category->getNameBasic();
        return $this->renderViewClient(
            'home',
            [
                'courseFirstLatest' => $courseFirstLatest,
                'coursetop3' => $coursetop3,
                'categoryPro' => $categoryPro,
                'categoryBasic' => $categoryBasic
            ]
        );
    }
}