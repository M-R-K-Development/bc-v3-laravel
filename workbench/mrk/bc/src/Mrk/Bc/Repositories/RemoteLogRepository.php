<?php namespace Mrk\Bc\Repositories;

use Mrk\Bc\Models\RemoteLog;
use Validator;

/**
 *
 */
class RemoteLogRepository implements RepositoryInterface
{
    public $validator;

    public function all($columns = array('*'))
    {
    }

    public function newInstance(array $attributes = array())
    {
    }

    public function paginate($perPage = 15, $columns = array('*'))
    {
    }

    /**
     * [create description]
     *
     * @param array $input [description]
     *
     * @return [type] [description]
     */
    public function create(array $input)
    {
        $rules           = RemoteLog::$rules;
        $rules['action'] = 'required|unique:bc_remote_logs,action';

        $this->validator = Validator::make($input, $rules);

        if ($this->validator->fails()) {
            return false;
        } else {
            return RemoteLog::create($input);
        }
    }

    /**
     * Remote a remote log entry
     *
     * @param [type] $id      [description]
     * @param array  $columns [description]
     *
     * @return [type] [description]
     */
    public function find($action, $columns = array('*'))
    {
        return RemoteLog::where('action', $action)
                        ->select($columns)
                        ->first();
    }

    public function updateWithIdAndInput($id, array $input)
    {
    }

    public function destroy($id)
    {
    }
}
