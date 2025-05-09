<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient_Chart extends Model
{
    use HasFactory;
    protected $table = "patient_chart";
    protected $fillable = ["first_name", "last_name", "age", "dob", "gender", "address", "spouse", "diagnosis", "procedure", "history", "prescription", "doctor_id"];
 
    public function doctor(){
        return $this->BelongsTo(Doctor::class, 'doctor_id');
    }


    }

    

