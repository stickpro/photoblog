<?php

namespace Photo\Http\Controllers;
use Photo\Menu;
use Photo\Portfolio;
use Photo\Repositories\MenusRepository;
use Photo\Repositories\PortfoliosRepository;
use Photo\Repositories\FiltersRepository;
use Illuminate\Http\Request;

class PortfolioController extends SiteController
{
    public function __construct(PortfoliosRepository $p_rep,  FiltersRepository $f_rep)
    {
        parent::__construct(new MenusRepository(new Menu()));

        $this->p_rep = $p_rep;
        $this->f_rep = $f_rep;
        $this->template = env('THEME') . '.portfolios';

    }
    public function index()
    {
        $this->titles = 'Портфолио';
        $this->keywords = 'ключи';
        $this->meta_desc = 'описание';

        $filters = $this->getFilters();
        $portfolios = $this->getPortfolios();
        $content = view(env('THEME') . '.portfolios_content')->with(compact('portfolios', $portfolios, 'filters', $filters))->render();
        $this->vars = array_add($this->vars, 'content', $content);


        return $this->renderOutput();

    }
    public function getPortfolios($take = FALSE) {
        $portfolios = $this->p_rep->get('*', FALSE);
        if ($portfolios) {
            $portfolios->load('filter');
        }
        return $portfolios;
    }
    public function show($alias)
    {
        $portfolio = $this->p_rep->one($alias);
        if ($portfolio) {
            $portfolio->gallery = json_decode($portfolio->gallery,  true);
        }
        $previous = Portfolio::where('id', '<', $portfolio->id)->orderBy('id')->first();
        $next = Portfolio::where('id', '>', $portfolio->id)->orderBy('id')->first();
        $content = view(env('THEME') . '.portfolio_content')->with(['portfolio'=>$portfolio, 'previous'=>$previous, 'next'=>$next])->render();
        $this->vars = array_add($this->vars, 'content', $content);

        return $this->renderOutput();

    }
    public function getFilters() {
        $filters = $this->f_rep->get('*', FALSE);

        return $filters;
    }
}
