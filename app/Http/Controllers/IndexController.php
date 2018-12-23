<?php

namespace Photo\Http\Controllers;

use Photo\Article;
use Photo\Menu;
use Photo\Repositories\ArticlesRepository;
use Photo\Repositories\CategoriesRepository;
use Photo\Repositories\MenusRepository;
use Photo\Repositories\PortfoliosRepository;
use Photo\Repositories\SlidersRepository;
use Photo\Repositories\FiltersRepository;
use Config;
use Illuminate\Http\Request;
use Jenssegers\Date\Date;
use Photo\Http\Requests;

class IndexController extends SiteController
{
    public function __construct(SlidersRepository $s_rep, PortfoliosRepository $p_rep, ArticlesRepository $a_rep, CategoriesRepository $c_rep, FiltersRepository $f_rep) {

        parent::__construct(new \Photo\Repositories\MenusRepository(new \Photo\Menu));

        $this->s_rep = $s_rep;
        $this->p_rep = $p_rep;
        $this->a_rep = $a_rep;
        $this->c_rep = $c_rep;
        $this->f_rep = $f_rep;
        $this->bar = 'right';

        $this->template = env('THEME').'.index';
    }

    public function index()
    {
        //
        $portfolios = $this->getPortfolio();
        //dd($portfolio);
        $articles = $this->getArticles();

        $sliderItems = $this->getSliders();
        $sliders = view(env('THEME') . '.slider')->with('sliders', $sliderItems)->render();
        $this->vars = array_add($this->vars, 'sliders', $sliders);



        $this->keywords = 'Множество keywords';
        $this->meta_desc = 'Описание';
        $this->titles  = 'Главная';

        return $this->renderOutput();

    }
    protected function getArticles()
    {
        $articles = $this->a_rep->get(['title', 'created_at', 'img', 'alias', 'id'], Config::get('settings.home_articles_count'));
        return $articles;
    }
    protected function getCategory()
    {
        $category = $this->cat_rep->get('*');

        return $category;
    }


    protected function getPortfolio() {

        $portfolio = $this->p_rep->get('*', Config::get('settings.home_port_count'));
        return $portfolio;
    }
    protected function getFilter() {

        $filters = $this->f_rep->get('*');
        return $filters;
    }

    public function getSliders()
    {
        $sliders = $this->s_rep->get();
        if ($sliders->isEmpty()) {
            return FALSE;
        }
        $sliders->transform(function ($item, $key) {
            $item->img = Config::get('settings.slider_path') . '/' . $item->img;
            return $item;
        });
        //dd($sliders);
        return $sliders;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
