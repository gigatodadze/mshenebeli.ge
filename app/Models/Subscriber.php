<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Subscriber extends Model
{
    /**
     * @var string[]
     */
//    protected $fillable = [
//        'email'
//    ];

    public $email;



    public function setEmail ($email){
        $this->email = $email;
    }


    public function addSubscriber (){
        DB::table('subscribers')->insert([
            'email' => $this->email,
        ]);
    }

}
