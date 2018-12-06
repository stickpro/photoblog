<?php
namespace Photo\Repositories;
use Photo\Portfolio;

class PortfoliosRepository extends Repository {
    public function __construct(Portfolio $portfolio) {
        $this->model = $portfolio;
    }
}
?>