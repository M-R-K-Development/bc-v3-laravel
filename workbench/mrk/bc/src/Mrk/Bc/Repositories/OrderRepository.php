<?php namespace Mrk\Bc\Repositories;

use Mrk\Bc\Models\Order;
use Validator;

/**
 *
 */
class OrderRepository implements RepositoryInterface
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
        $rules           = Order::$rules;

        $exists = Order::where('id', $input['id'])
                        ->count();

        // if order already exists (in case of last update date retriggering order)
        if ($exists) {
            return $this->updateWithIdAndInput($input['id'], $input);
        }

        $this->validator = Validator::make($input, $rules);

        if ($this->validator->fails()) {
            return false;
        } else {
            return Order::create($input);
        }
    }

    public function find($id, $columns = array('*'))
    {
    }

    public function updateWithIdAndInput($id, array $input)
    {
        $rules     = Order::$rules;

        $order = Order::find($id);

        if (!$order) {
            throw new \Exception("Order Not Found", 1);
        }

        $this->validator = Validator::make($input, $rules);

        if ($this->validator->fails()) {
            return false;
        } else {
            $order->fill($input);
            $order->save();

            return $order;
        }
    }

    public function destroy($id)
    {
    }
}
