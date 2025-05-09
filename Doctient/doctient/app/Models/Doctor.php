<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    protected $table = "doctor";
    protected $fillable = ["procedure", "history", "diganosis", "admin_id"];

    public function admin(){
        return $this->belongsTo(Admin::class, 'admin_id');
    }

    public function patient_chart(){
        return $this->hasmany(Patient_Chart::class);
    }
}