<?php

namespace App\Http\Livewire\Traits;

trait MapCategories
{
    /**
     * Map collections so they're ready to be used.
     *
     * @param  \Illuminate\Support\Collection  $categories
     * @return array<mixed>
     */
    public function mapCategories($categories)
    {
        return $categories->map(function ($category) {
            return [
                'id' => $category->id,
                'parent_id' => $category->parent_id,
                'name' => $category->name,
                'full_slug' => route('category', [$category->parent ?? $category, $category->parent ? $category : null], false),
                'sort_order' => $category->sort_order,
                'thumbnail' => $category->getThumbnailUrl('small'),
                'children' => [],
                'children_count' => $category->children_count,
            ];
        })->toArray();
    }
}
