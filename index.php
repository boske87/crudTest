<?php
require_once __DIR__ . '/vendor/autoload.php';

use Src\User\User;
use Src\User\UserVacation;

//init user class
$user = new User('goran', 20);

//init user vacation class
$vacation = new UserVacation($user, 10);


//check if you enough days
$vacation->makeVacationRequest();

//return remaining vacation days
$vacation->acceptRequest();
