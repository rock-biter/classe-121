<?php

namespace App\Models;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'content',
        'category_id',
        'user_id',
        'cover_image'
    ];

    protected $appends = ['cover_fullpath'];

    protected function coverFullpath(): Attribute
    {
        return new Attribute(
            get: fn () =>
            $this->cover_image ? asset('storage/' . $this->cover_image) : null,
        );
    }

    protected function serializeDate(DateTimeInterface $date): string
    {
        return $date->format('d M Y');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
