<?php

namespace App\Livewire;

use App\Models\Product;
use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;

class Products extends Component
{
    use WithPagination;

    public $selectedCategory = null; // Selected category ID for filtering

    // protected $paginationTheme = 'bootstrap';

    public function filterByCategory($categoryId = null)
    {
        $this->selectedCategory = $categoryId;
        $this->resetPage(); // Reset pagination when category changes
    }

    public function render()
    {
        // Fetch all categories
        $categories = Category::all();

        // Filter products based on selected category
        $products = Product::when($this->selectedCategory, function ($query) {
            $query->where('category_id', $this->selectedCategory);
        })->where('status', 1) // Include only active products
            ->paginate(8);

        return view('livewire.products', [
            'products' => $products,
            'categories' => $categories,
        ]);
    }
}
