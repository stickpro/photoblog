<?php
namespace Photo\Repositories;
use Photo\Article;

class ArticlesRepository extends Repository {
    public function __construct(Article $articles) {

        $this->model = $articles;
    }
}
