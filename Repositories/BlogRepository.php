<?php

namespace App\Modules\Blog\Repositories;

use App\Modules\Blog\Models\Blog;
use App\Repositories\BaseRepository;

class BlogRepository extends BaseRepository
{
    public function __construct(Blog $model)
    {
        parent::__construct($model);
    }

    protected function getSearchableFields(): array
    {
        return ['summary', 'meta_description', 'og_image'];
    }

    protected function getSortableFields(): array
    {
        return ['blog_category_id', 'created_by', 'title', 'slug', 'featured_image', 'summary', 'content', 'views', 'is_featured', 'published_at', 'status', 'meta_title', 'meta_description', 'meta_keywords', 'og_image'];
    }
}

