<?php


namespace App\Pos\Model\Sessions;


use Illuminate\Database\Eloquent\Model;

class Sessions extends Model
{

    protected $table      = "session";
    protected $primaryKey = "session_id";
}