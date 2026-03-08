<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{

   protected $keyType = 'string'; //specify the primary key type if it is not an integer

    protected $primaryKey = 'id'; //specify the primary key field if it is not 'id'

    protected $public = false; //specify that the primary key is not auto-incrementing
    
    public static function getAllJobs()
    {

        return [[
            'title' => 'Software Engineer',
            'company' => 'Tech Corp',
            'location' => 'New York, NY',
            'description' => 'Develop and maintain web applications.'
        ], [
            'title' => 'Data Analyst',
            'company' => 'Data Inc.',
            'location' => 'San Francisco, CA',
            'description' => 'Analyze data to provide business insights.'
        ]];

    }

}
