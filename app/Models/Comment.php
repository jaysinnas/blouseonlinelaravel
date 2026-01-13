<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
      use HasFactory;
    //"$fillable" matches the migration fields.This allows to use "Comment::create($request->all())" safely in controller.
    //"producted $fillable", which is the standard way to protect against mass-assignment vulnerabilities.
    protected $fillable = ['name', 'email', 'comment', 'product_id'];

    public function product()
    {
      //"belongsTo" relationship allows to call "$comment->product->name" to get the name of the product the comment belongs to.
      return $this->belongsTo(Product::class);
    }
    public function comments()
    {
      return $this->hasMany(Comment::class);
    }
  }
