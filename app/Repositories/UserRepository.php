<?php


namespace App\Repositories;


use App\User;

class UserRepository extends BaseRepository
{
    const RELATIONS = [
        'cars.tickets'
    ];

    /**
     * UserRepository constructor.
     * @param $model
     */
    public function __construct(User $user)
    {
        parent::__construct($user, self::RELATIONS);
    }

    public function getWithSameFirstAndLastName(string $name)
    {
        $first = $this->model->where('first_name', $name);

        return $this->model->where('last_name', $name)
            ->union($first)
            ->get();
    }


}
