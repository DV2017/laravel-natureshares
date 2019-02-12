<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
  protected $fillable = [
    'title',
    'image',
    'description',
    'start_date',
    'end_date',
    'address',
    'postcode',
    'city',
    'state',
    'country',
    'telephone',
    'website_url',
    'company_id'
  ];

  public function companies()
  {
    return $this->belongsTo(Company::class);
  }

  public function values()
  {
    return $this->belongsToMany(Value::class);
  }

  public function users()
  {
    return $this->belongsToMany(User::class);
  }
}
