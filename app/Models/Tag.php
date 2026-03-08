<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tag extends Model
{
    use HasUuids; //use the HasUuids trait to enable UUID primary keys for this model
    use HasFactory; //use the HasFactory trait to enable factory methods for this model

    protected $keyType = 'string'; //specify the primary key type if it is not an integer

    protected $primaryKey = 'id'; //specify the primary key field if it is not 'id'

    protected $public = false; //specify that the primary key is not auto-incrementing
    
    protected $table = 'tags';

    protected $fillable = ['title'];

    protected $garded = ['id']; 


    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }   

    
}

