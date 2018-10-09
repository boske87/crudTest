<?php
namespace Src\User;


/**
 * Class User
 * @package Src\User
 */
class User
{
    /**
     * @var string
     */
    private $userName;
    /**
     * @var int
     */
    private $remainingVacation;


    /**
     * User constructor.
     * @param string $userName
     * @param int $remainingVacation
     */
    public function __construct(string $userName , int $remainingVacation)
    {
        $this->userName = $userName;
        $this->remainingVacation = $remainingVacation;

    }

    /**
     * @return mixed
     */
    public function getRemainingVacation(): int
    {
        return $this->remainingVacation;
    }

    /**
     * @param mixed $remainingVacation
     */
    public function setRemainingVacation($newRemainingVacation): void
    {
        $this->remainingVacation = $newRemainingVacation;
    }


}