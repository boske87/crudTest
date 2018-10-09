<?php
namespace Src\Repository;

use Src\User\User;

/**
 * Class UserVacationRepository
 * @package Src\Repository
 */
class UserVacationRepository implements UserVacationInterface

{
    /**
     * @var Database
     */
    private $database;

    //allow to implement different type database

    /**
     * UserVacationRepository constructor.
     * @param Database $database
     */
    public function __construct(Database $database)
    {
        $this->database = $database;

    }

    /**
     * @param User $user
     * @return mixed|void
     */
    public function create(User $user)
    {
        $this->db->create();
    }


    /**
     * @param $id
     * @param array $attributes
     * @return array
     */
    public function update($id, array $attributes): array
    {
        $this->db->update();
    }


    /**
     * @return array
     */
    public function read(): array
    {

    }


    /**
     * @param $id
     * @return array
     */
    public function delete($id): array
    {

    }


}