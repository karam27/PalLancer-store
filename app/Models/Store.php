<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Store extends Model
{
    use HasFactory;
    protected $connection = 'mysql';
    protected $table = 'stores';
    protected $primaryKey = 'id';
    protected $keyType = 'int';
    public $incremnting = true;
    public $timestamps = true;
    const CREATED_AT = 'create_at';
    const UPDATED_AT = 'update_at';
}
DB::table('stores')->where('status', 'action')->get();
Store::where('status', 'action')->get();
DB::table('stores0')->insert([]);
Store::insert([]);
