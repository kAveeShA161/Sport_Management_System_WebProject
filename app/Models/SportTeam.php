<?php
    namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SportTeam extends Model
{
    use HasFactory;

    protected $fillable = ['sport_name', 'coach_id', 'student_id', 'student_role'];

    public function coach()
    {
        return $this->belongsTo(Coach::class);
    }

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}

?>