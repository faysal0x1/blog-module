<?php

namespace App\Modules\Blog\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BlogLike extends Model
{
	protected $table = 'blog_likes';

	protected $fillable = [
		'blog_id',
		'user_id'
	];

	/**
	 * Get the blog that was liked
	 */
	public function blog(): BelongsTo {
		return $this->belongsTo(Blog::class);
	}

	/**
	 * Get the user who liked the blog
	 */
	public function user(): BelongsTo {
		return $this->belongsTo(\App\Models\User::class);
	}
}

