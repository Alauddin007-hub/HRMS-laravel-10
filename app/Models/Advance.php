<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advance extends Model
{
    use HasFactory;

    protected $table = 'salary_sheets';

    protected $fillable = [
        'employee_id','month_of_advance','apply_amount','approved_amount', 'status', 
    ];
    

    public function employee(){
        return $this->belongsTo(Employee::class, 'employee_id');
    }

    
	// id 	employee_id 	month_of_advance 	apply_amount 	approved_amount 	status 	created_at 	updated_at
}
