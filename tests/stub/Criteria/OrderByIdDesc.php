<?php

namespace CodePress\CodeDatabase\Criteria;


use CodePress\CodeDatabase\Contracts\CriteriaInterface;
use CodePress\CodeDatabase\Contracts\RepositoryInterface;

class OrderByIdDesc implements CriteriaInterface{

    public function apply($model, RepositoryInterface $repository)
    {
        return $model->orderBy('id', 'desc');
    }

}