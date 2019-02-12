<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
  protected $fillable = [
    'title',
    'image',
    'description',
    'address',
    'postcode',
    'city',
    'state',
    'country',
    'telephone',
    'website_url',
  ];

  public function projects()
  {
    return $this->hasMany(Project::class);
  }
}
