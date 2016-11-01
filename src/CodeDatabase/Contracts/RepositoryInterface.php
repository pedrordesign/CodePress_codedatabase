<?php

namespace CodePress\CodeDatabase\Contracts;

interface RepositoryInterface{

    public function all($columns = array('*'));

    public function create(array $data);

    public function update(array $data, $id);

    public function delete($id);

    public function find($id);

    public function findBy($field, $value, $columns = array('*'));

}