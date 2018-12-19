<?php

namespace Photo\Http\Controllers;

use Photo\Article;
use Photo\Categories;
use Photo\Category;
use Photo\Repositories\CategoriesRepository;
use Illuminate\Http\Request;
use Photo\Repositories\MenusRepository;
use Photo\Menu;
use Photo\Http\Requests;
use Photo\Repositories\PortfoliosRepository;
use Photo\Repositories\ArticlesRepository;
use Jenssegers\Date\Date;

class ArticlesController extends SiteController
{
    public function __construct(PortfoliosRepository $p_rep, ArticlesRepository $a_rep, CategoriesRepository $c_rep)
    {
        parent::__construct(new MenusRepository(new Menu()));
        $this->a_rep = $a_rep;
        $this->p_rep = $p_rep;
        $this->c_rep = $c_rep;
        $this->bar = 'right';
        $this->template = env('THEME') . '.articles';

    }

    public function index($cat_alias =  FALSE)
    {

        $articles = $this->getArticles($cat_alias);

        $content = view(env('THEME') . '.articles_content')->with('articles', $articles)->render();
        $this->vars = array_add($this->vars, 'content', $content);
        $categories = $this->getCategories(config('settings.recent_comments'));
        $portfolios = $this->getPortfolios(config('settings.recent_portfolios'));

        $this->contentRightBar = view(env('THEME') . '.articlesBar')->with(['categories' => $categories, 'portfolios' => $portfolios]);
        return $this->renderOutput();

    }
    protected function getCategories($take)
    {
        $categories = $this->c_rep->get(['title', 'alias'], $take);
        return $categories;
    }

    protected function getPortfolios($take)
    {
        $portfolios = $this->p_rep->get(['title', 'alias','customer','img','filter_alias', 'created_at'], $take);

        return $portfolios;
    }


    public function getArticles($alias = FALSE) {
        $where = FALSE;
        if ($alias) {
            $id = Category::select('id')->where('alias', $alias)->first()->id;
            $where = ['category_id', $id];

        }
        $articles = $this->a_rep->get(['title', 'description', 'alias', 'img', 'created_at', 'category_id','id'], FALSE, TRUE, $where);


        return $articles;
    }
    public function show($alias =  FALSE)
    {
        $article = $this->a_rep->one($alias, ['alias'=> TRUE]);
        if ($article) {
            $article->img = json_decode($article->img);
        }

        $previous = Article::where('id', '<', $article->id)->orderBy('id')->first();
        $next = Article::where('id', '>', $article->id)->orderBy('id')->first();

        $content = view(env('THEME').'.article_content')->with(compact('article', $article, 'previous', $previous, $next, 'next'))->render();
        $this->vars = array_add($this->vars, 'content', $content);

        $categories = $this->getCategories(config('settings.recent_comments'));
        $portfolios = $this->getPortfolios(config('settings.recent_portfolios'));

        $this->contentRightBar = view(env('THEME') . '.articlesBar')->with(['categories' => $categories, 'portfolios' => $portfolios]);

        return $this->renderOutput();
    }


}
