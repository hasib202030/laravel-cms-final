<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'name', 'image', 'category_id', 'family_govt_job', 'email', 'blood_group', 'date_of_birth', 'profession', 'designation', 'permanent_address', 'present_address', 'fb_link', 'mobile'
    ];

    public function category(){
      return $this->belongsTo('App\Category');
    }

    public function tags(){
      return $this->belongsToMany('App\Tag');
    }




}
