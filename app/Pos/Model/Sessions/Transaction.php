<?php


namespace App\Pos\Model\Sessions;


use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{

    protected $table      = "transaction";
    protected $primaryKey = "transaction_id";
}