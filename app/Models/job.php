<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class job extends Model
{
    use HasFactory;
    public static array $experience = ['Entry','Intermiedate','Senior'];
    public static array $category = ['IT','finance','Digital Marketing','Sales'];
}
