<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Prunable;
use Illuminate\Database\Eloquent\SoftDeletes;

class DailyPlan extends Model
{
    use HasFactory;
    use SoftDeletes;
    use Prunable;

    protected $table = 'daily_plans';
    protected $guarded = false;

    public function prunable()
    {
        return static::where('deleted_at', '<=', now()->subDay());
    }
}
