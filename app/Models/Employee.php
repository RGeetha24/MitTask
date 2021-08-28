<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $table ='employee';
    protected $fillable =['name','desc_id','dept_id','salary'];

    public function designation()
    {
        return $this->belongsTo(Designation::class,'desc_id','id');
    }
    public function department()
    {
        return $this->belongsTo(Department::class,'dept_id','id');
    }
}
