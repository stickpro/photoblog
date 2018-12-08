<?php
namespace Photo\Repositories;
use Photo\Comment;

class CommentsRepository extends Repository {
    public function __construct(Comment $Comment) {

        $this->model = $Comment;
    }
}
