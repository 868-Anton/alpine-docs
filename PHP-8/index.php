<?php

//Nullsafe Operator 
class User
{
  public function profile()
  {
    return null; 
  }
}

class Profile
{
  public function employment()
  {
    return 'Web Developer';
  }
}

$user = new User;

//Nullsafe Operator ? checks if value is null and if null wont proceed 
//if user has no profile then ?? will run 
var_dump($user->profile()?->employment()?? 'does not have any'); 


//Match Expressions