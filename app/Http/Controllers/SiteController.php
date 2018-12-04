<?php

namespace Photo\Http\Controllers;

use Illuminate\Http\Request;
use Photo\Repositories\MenusRepository;

class SiteController extends Controller
{
    //
    protected $p_rep;
    protected $s_rep;
    protected $a_rep;
    protected $m_rep;

    protected $template;

    protected $vars = array();

    protected $contentRightBar = FALSE;
    protected $contentLeftBar = FALSE;

    protected $bar = FALSE;

    public function __construct(MenusRepository $m_rep) {
        $this->m_rep = $m_rep;
    }

    protected function renderOutput() {

        $menu= $this->getMenu();

        $navigation = view(env('THEME') . '.navigation')->render();
        $this->vars = array_add($this->vars,'navigation',$navigation);
        return view($this->template)->with($this->vars);

    }
    public function getMenu(){

        $menu = $this->m_rep->get();

        return $menu;
    }

}
