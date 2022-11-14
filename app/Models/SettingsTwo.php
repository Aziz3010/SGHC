<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SettingsTwo extends Model
{
    use HasFactory;
    protected $table = "settings_two";
    protected $fillable = [
        "sectionName",
        "arrange",
        "display",
    ];
}
