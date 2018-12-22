<?php
namespace Photo\Repositories;
use Photo\Filter;

class FiltersRepository extends Repository {
    public function __construct(Filter $filters) {

        $this->model = $filters;
    }
}
