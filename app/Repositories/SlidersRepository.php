<?php
namespace Photo\Repositories;
use Photo\Slider;

class SlidersRepository extends Repository {
    public function __construct(Slider $slider) {

        $this->model = $slider;
    }
}
