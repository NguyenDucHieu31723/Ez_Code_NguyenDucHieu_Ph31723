<?php
namespace Nguye\EzCode\Controllers\Admin;

use Nguye\EzCode\Commons\Controller;
use Nguye\EzCode\Models\Comment;

class CommentsAdminController extends Controller
{
    private Comment $comment;
    private string $folder = "comments.";
    const PATH_UPLOAD = "/uploads/comments/";
    public function __construct()
    {
        $this->comment = new Comment;
    }
    public function index()
    {
        $data['comments'] = $this->comment->getAll();
        return $this->renderViewAdmin($this->folder . __FUNCTION__, $data);
    }
}