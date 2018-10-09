<?php
namespace Src\Repository;
use Src\User\User;

/**
 * all user classes must implement.
 */

interface UserVacationInterface
{
    /**
     * @return mixed
     */
    public function create(User $user);

    /**
     * @return mixed
     */
    public function read() : array;

    /**
     * @return mixed
     */
    public function update($id, array $attributes) : array;

    /**
     * @return mixed
     */
    public function delete($id);




}