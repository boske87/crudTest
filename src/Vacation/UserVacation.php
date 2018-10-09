<?php
namespace Src\User;

use Src\Traits\OperationTrait;
use \Exception;


/**
 * Class UserVacation
 * @package Src\User
 */
class UserVacation
{

    use OperationTrait;

    /**
     * @var User
     */
    private $user;
    /**
     * @var int
     */
    private $requestVacation;
    /**
     * @var
     */
    private $requestStatus;


    /**
     * UserVacation constructor.
     * @param User $user
     * @param int $requestVacation days
     */
    public function __construct(User $user, int $requestVacation)
    {
        $this->user = $user;
        $this->requestVacation = $requestVacation;

    }


    /**
     * @throws Exception
     */
    public function makeVacationRequest() : void
    {
        if($this->validateRequest() === false){
            $this->requestStatus = false;
            throw new Exception("You have only ".$this->user->getRemainingVacation());
        }

    }

    /**
     * @return int - remaining vacation days
     */
    public function acceptRequest() : int
    {
        $this->requestStatus = true;
        return $this->calculateVacation($this->requestVacation, $this->user->getRemainingVacation());
    }


    /**
     *
     */
    public function deniedRequest() : void
    {
        $this->requestStatus = false;
    }


    /**
     * validate request
     * @return bool
     */
    private function validateRequest() : bool
    {
        if($this->user->getRemainingVacation() >= $this->requestVacation)
            return true;
        else
            return false;
    }


    /**
     * @return bool
     */
    public function getRequestStatus() : bool
    {
        return $this->requestStatus;
    }


}