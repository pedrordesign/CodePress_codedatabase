<?php

namespace CodePress\CodeDatabase\Contracts;

interface CriteriaInterface
{
    public function apply($model, RepositoryInterface $repository);
}