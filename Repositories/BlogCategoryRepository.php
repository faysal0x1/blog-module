<?php

namespace App\Modules\Blog\Repositories;

use App\Modules\Blog\Models\BlogCategory;
use App\Repositories\BaseRepository;

class BlogCategoryRepository extends BaseRepository
{
    public function __construct(BlogCategory $model)
    {
        parent::__construct($model);
    }

    protected function getSearchableFields(): array
    {
        return ['name', 'created_at'];
    }

    protected function getSortableFields(): array
    {
        return ['name', 'slug', 'description', 'status', 'order'];
    }
}

