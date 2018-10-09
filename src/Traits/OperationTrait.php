<?php
namespace Src\Traits;


/**
 * Trait OperationTrait
 * @package Src\Traits
 */
trait OperationTrait
{

    /**
     * @param int $requestVacation
     * @param int $remainingVacation
     * @return int
     */
    public function calculateVacation(int $requestVacation, int $remainingVacation) : int
    {
        return $remainingVacation - $requestVacation;
    }



}