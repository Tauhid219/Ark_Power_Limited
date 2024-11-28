<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Post;
use App\Models\BlogCategory;

class NewsAndEvents extends Component
{
    use WithPagination;

    public $filter = 'all';
    public $categories;
    public $totalPosts;

    public function mount()
    {
        // Fetch all categories dynamically
        $this->categories = BlogCategory::all();
    }

    public function setFilter($filter)
    {
        $this->filter = $filter;
        $this->resetPage(); // Reset to the first page when changing filters
    }

    public function getPostsProperty()
    {
        // Build query based on the selected filter
        $query = Post::query();

        if ($this->filter !== 'all') {
            $query->whereHas('category', function ($q) {
                $q->where('slug', $this->filter); // Filter by category slug
            });
        }

        $this->totalPosts = $query->count(); // Count total posts
        return $query->paginate(12); // Paginate with 12 items per page
    }

    public function render()
    {
        return view('livewire.news-and-events', [
            'posts' => $this->posts,
        ]);
    }
}
