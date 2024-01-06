<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Factories\HasFactory;

class Activity extends Model{
    use HasFactory;
    protected $table = 'activitys';
    public function user(){
        return $this->belongsTo(User::class);
    }
}

