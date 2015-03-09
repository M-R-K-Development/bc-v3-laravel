<?php namespace Mrk\Bc\Repositories;

interface RepositoryInterface
{
    public function all($columns = array('*'));

    public function newInstance(array $attributes = array());

    public function paginate($perPage = 15, $columns = array('*'));

    public function create(array $attributes);

    public function find($id, $columns = array('*'));

    public function updateWithIdAndInput($id, array $input);

    public function destroy($id);
}
