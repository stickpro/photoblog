<?php
namespace Photo\Repositories;
use Photo\Categories;

class CategoriesRepository extends Repository {
    public function __construct(Categories $categories) {

        $this->model = $categories;
    }
}
