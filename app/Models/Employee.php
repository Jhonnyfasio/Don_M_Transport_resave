<?php

namespace App\Models;

//use Illuminate\Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
  //use UserFactoryH;
  protected $table = 'Employees';
  protected $fillable = [
    'name','firstname','lastname','worker_code','email',
  ];
}
