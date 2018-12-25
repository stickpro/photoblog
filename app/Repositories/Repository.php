<?php
namespace Photo\Repositories;
use Illuminate\Support\Facades\Config;
abstract class Repository
{
    protected $model = FALSE;
    public function get($select = '*', $take = FALSE, $pagination = FALSE, $where = FALSE)
    {
        $builder = $this->model->select($select);
        if ($take) {
            $builder->take($take);
        }
        if ($where){
            $builder->where($where[0],$where[1]);
        }
        if ($pagination) {
            return $this->check($builder->paginate(Config::get('settings.paginate')));
        }
        return $this->check($builder->get());
    }
    protected function check($result)
    {
        if ($result->isEmpty()) {
            return FALSE;
        }
        $result->transform(function ($item,$key) {
            if(is_string($item->img) && is_object(json_decode($item->img)) && (json_last_error() == JSON_ERROR_NONE)) {
                $item->img = json_decode($item->img);
            }
            if(is_string($item->gallery) && is_object(json_decode($item->gallery)) && (json_last_error() == JSON_ERROR_NONE)) {
                $item->gallery = json_decode($item->gallery);
            }
            return $item;
        });
        return $result;
    }
    public function one($alias, $atr = array()) {
        $result = $this->model->where('alias',$alias)->firstOrFail();
        return $result;
    }
}