<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Nova\Actions\Actionable;
use laravel\Nova\fields\Text;

class Post extends Model
{
    use HasFactory ,Actionable;
    protected $fillable = [
        'title',
        'body',
        'publish_at',
        'publish_until',
        'status',
        'category',

    ];
    protected $casts = [
        'publish_at' => 'datetime',
        'publish_until' => 'datetime',
    ];
    public function user()
    {
        # code...
        return $this->belongsTo(User::class);
    }
}
