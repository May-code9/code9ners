<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class WebsiteCategory extends Model
{
  use SoftDeletes;

  protected $fillable = [
    'user_id', 'website_category', 'dynamic', 'website_cost'
  ];

  public function setDynamicAttribute($value) {
    $this->attributes['dynamic'] = (boolean)($value);
  }
  public function getDynamicAttribute($value) {
    if($value == 1) {
      $display = 'Yes';
    } elseif ($value == 0) {
      $display = 'No';
    }
    return $display;
  }
}
