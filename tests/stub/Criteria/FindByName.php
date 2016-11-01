<?php

namespace CodePress\CodeDatabase\Criteria;


use CodePress\CodeDatabase\Contracts\CriteriaInterface;
use CodePress\CodeDatabase\Contracts\RepositoryInterface;

class FindByName implements CriteriaInterface{

    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function apply($model, RepositoryInterface $repository)
    {
        return $model->where('name', $this->name);
    }
}