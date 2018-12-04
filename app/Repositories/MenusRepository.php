<?php
namespace Photo\Repositories;
use Photo\Menu;

class MenusRepository extends Repository {
        public function __construct(Menu $menu) {

            $this->model = $menu;
        }
}
