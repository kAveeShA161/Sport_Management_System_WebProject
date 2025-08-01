<?php
    
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coach extends Model
{
    use HasFactory;

    protected $fillable = ['coach_name', 'sport', 'telephone_number', 'email', 'photo'];

    public function sportTeams()
    {
        return $this->hasMany(SportTeam::class);
    }
}

?>