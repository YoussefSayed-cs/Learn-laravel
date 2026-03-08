<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{
    use HasUuids; //use the HasUuids trait to enable UUID primary keys for this model
    use HasFactory; //use the HasFactory trait to enable factory methods for this model



    protected $keyType = 'string'; //specify the primary key type if it is not an integer

    protected $primaryKey = 'id'; //specify the primary key field if it is not 'id'

    protected $public = false; //specify that the primary key is not auto-incrementing
    

    protected $table = 'comments'; //specify the table name if it is different from the model name in plural form
    protected $fillable = [
        'post_id',
        'author',
        'content',
    ];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
