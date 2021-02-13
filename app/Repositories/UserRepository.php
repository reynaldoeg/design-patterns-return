<?php


namespace App\Repositories;


use App\User;

class UserRepository
{
    private $model;

    /**
     * UserRepository constructor.
     * @param $model
     */
    public function __construct()
    {
        $this->model = new User();
    }

    public function all()
    {
        return $this->model->with([cars.tickets])->get();
    }

    public function get(int $id)
    {
        return $this->model->with([cars.tickets])->find($id);
    }

    public function save(User $user)
    {
        $user->save();
        return $user;
    }

    public function delete(User $user)
    {
        $user->delete();
        return $user;
    }

    public function getWithSameFirstAndLastName(string $name)
    {
        $first = $this->model->where('first_name', $name);

        return $this->model->where('last_name', $name)
            ->union($first)
            ->get();
    }


}
