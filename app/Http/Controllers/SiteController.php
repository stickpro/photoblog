<?php

namespace Photo\Http\Controllers;

use Illuminate\Http\Request;
use Photo\Repositories\MenusRepository;
use Jenssegers\Date\Date;
use Menu;

class SiteController extends Controller
{
    //
    protected $p_rep;
    protected $s_rep;
    protected $a_rep;
    protected $m_rep;
    protected $c_rep;

    protected $keywords;
    protected $meta_desc;
    protected $titles;

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
        $header = view(env('THEME') . '.header')->render();
        $this->vars = array_add($this->vars,'header',$header);
        $navigation = view(env('THEME') . '.navigation')->with('menu', $menu)->render();
        $this->vars = array_add($this->vars,'navigation',$navigation);
        $footer = view(env('THEME') . '.footer')->render();
        $this->vars = array_add($this->vars, 'footer',$footer);
        $this->vars = array_add($this->vars, 'keywords', $this->keywords);
        $this->vars = array_add($this->vars, 'meta_desc', $this->meta_desc);
        $this->vars = array_add($this->vars, 'titles', $this->titles);
        if ($this->contentRightBar) {
            $rightBar = view(env('THEME') . '.rightBar')->with('content_rightBar', $this->contentRightBar)->render();
            $this->vars = array_add($this->vars, 'rightBar',$rightBar);
        }
        $this->vars = array_add($this->vars, 'bar', $this->bar);
        return view($this->template)->with($this->vars);



    }
    public function getMenu()
    {

        $menu = $this->m_rep->get();

        $mBuilder = Menu::make('MyNav', function ($m) use ($menu) {

            foreach ($menu as $item) {

                if ($item->parent == 0) {
                    $m->add($item->title, $item->path)->id($item->id);
                } else {
                    if ($m->find($item->parent)) {
                        $m->find($item->parent)->add($item->title, $item->path)->id($item->id);
                    }
                }
            }

        });
        return $mBuilder;
    }

}
