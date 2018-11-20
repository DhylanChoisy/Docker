<?php

namespace App\tests\Entity;

use App\Entity\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
  public function testGetId()
    {
      $user = new User();
      $user->setNom("Dhylan");
      $this->assertEquals($user->getNom(),"Dhylan");
    }

}
