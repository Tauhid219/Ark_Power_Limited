<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Post;

class NewsAndEvents extends Component
{
    use WithPagination;

    public $filter = 'all';
    public $totalPosts;

    public function setFilter($filter)
    {
        $this->filter = $filter;
        $this->resetPage(); // Reset to the first page when changing filters
    }

    public function getPostsProperty()
    {
        // return match ($this->filter) {
        //     'news' => Post::where('category_id', 1)->paginate(12),  // Assuming '1' is the ID for News
        //     'events' => Post::where('category_id', 2)->paginate(12), // Assuming '2' is the ID for Events
        //     default => Post::paginate(12),
        // };

        $query = match ($this->filter) {
            'news' => Post::where('category_id', 1),
            'events' => Post::where('category_id', 2),
            default => Post::query(),
        };

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
