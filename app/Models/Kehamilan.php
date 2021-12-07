<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Kehamilan extends Model
{
    use HasFactory;
    protected $table = 'kehamilan';
    protected $primaryKey = 'id';
    protected $guarded = [];

    static function getKehamilan()
    {
        $return = DB::table('kehamilan')
                ->join('ortus', 'kehamilan.id_bumil', '=', 'ortus.id')
                ->select('ortus.nama_ibu', 'kehamilan.*');

        return $return;
    }
}
