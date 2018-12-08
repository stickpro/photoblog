<?php

namespace Photo\Http\Controllers;

use Photo\Category;
use Photo\Repositories\CommentsRepository;
use Illuminate\Http\Request;
use Photo\Repositories\MenusRepository;
use Photo\Menu;
use Photo\Http\Requests;
use Photo\Repositories\PortfoliosRepository;
use Photo\Repositories\ArticlesRepository;
use Jenssegers\Date\Date;

class ArticlesController extends SiteController
{
    public function __construct(PortfoliosRepository $p_rep, ArticlesRepository $a_rep, CommentsRepository $c_rep)
    {
        parent::__construct(new MenusRepository(new Menu()));
        $this->a_rep = $a_rep;
        $this->p_rep = $p_rep;
        $this->c_rep = $c_rep;
        $this->bar = 'right';
        $this->template = env('THEME') . '.articles';
    }

    public function index()
    {

        $articles = $this->getArticles();

        $content = view(env('THEME') . '.articles_content')->with('articles', $articles)->render();

        $this->vars = array_add($this->vars, 'content', $content);
        $comments = $this->getComments(config('setting.recent_comments'));
        $portfolios = $this->getPortfolios(config('settings.recent_portfolios'));

        $this->contentRightBar = view(env('THEME') . '.articlesBar')->with(['comments' => $comments, 'portfolios' => $portfolios]);
        return $this->renderOutput();

    }
    protected function getComments($take)
    {
        $comments = $this->c_rep->get(['text', 'name', 'email', 'site', 'article_id', 'user_id'], $take);

        return $comments;
    }

    protected function getPortfolios($take)
    {
        $portfolios = $this->p_rep->get(['title', 'alias','customer','img','filter_alias', 'created_at'], $take);

        return $portfolios;
    }

    public function getArticles($alias = FALSE)
    {
        $articles = $this->a_rep->get(['title', 'description', 'alias', 'img', 'created_at', 'category_id'], FALSE, TRUE);

        if($articles) {
            $articles->load('user','category','comments');
        }
        return $articles;
    }


}
