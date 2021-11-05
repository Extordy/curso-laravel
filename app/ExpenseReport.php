<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExpenseReport extends Model
{
    /**espesificar que son variso expense reports */
    public function expenses(){
        return $this->hasMany(Expense::class);
    }
}
