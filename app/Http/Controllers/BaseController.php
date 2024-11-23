<?php

namespace App\Http\Controllers;

use App\Models\Affiliation;
use App\Models\Career;
use App\Models\Post;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Sitedata;
use Carbon\Carbon;

class BaseController extends Controller
{
    public function home()
    {
        $siteData = Sitedata::first();
        $affiliations = Affiliation::all();
        $latestPosts = Post::orderBy('created_at', 'desc')->take(9)->get();

        return view('layouts.home', compact('siteData', 'latestPosts', 'affiliations'));
    }

    public function products()
    {
        $siteData = Sitedata::first();
        return view('layouts.products', compact('siteData'));
    }

    public function productDetails(string $id)
    {
        $siteData = Sitedata::first();
        $data = Product::find($id);

        $relatedProducts = Product::where('category_id', $data->category_id)
            ->where('id', '!=', $id)
            ->orderBy('created_at', 'desc')
            ->take(3)
            ->get();

        return view('layouts.productdetails', compact('siteData', 'data', 'relatedProducts'));
    }

    public function service()
    {
        $siteData = Sitedata::first();
        $featuredProduct = Product::where('status', 1)->where('featured', 1)->inRandomOrder()->first();
        return view('layouts.services', compact('siteData', 'featuredProduct'));
    }

    public function news()
    {
        $siteData = Sitedata::first();
        return view('layouts.news', compact('siteData'));
    }

    public function newsDetails(string $id)
    {
        $siteData = Sitedata::first();
        $data = Post::find($id);

        // Fetch related posts from the same category, excluding the current post, ordered by latest
        $relatedNews = Post::where('category_id', $data->category_id)
            ->where('id', '!=', $id)
            ->orderBy('created_at', 'desc')
            ->take(5)
            ->get();

        return view('layouts.newsdetails', compact('siteData', 'data', 'relatedNews'));
    }

    public function aboutUs()
    {
        $siteData = Sitedata::first();
        return view('layouts.aboutus', compact('siteData'));
    }

    public function contactUs()
    {
        $siteData = Sitedata::first();
        return view('layouts.contactus', compact('siteData'));
    }

    public function career()
    {
        $siteData = Sitedata::first();
        $careers = Career::with('category') // Eager load the category relationship
            ->where('is_active', 1) // Only retrieve active careers
            ->where('deadline', '>=', Carbon::now()) // Only careers with a valid deadline
            ->get();
        return view('layouts.career', compact('siteData', 'careers'));
    }

    public function careerDetails(string $id)
    {
        $siteData = Sitedata::first();
        $data = Career::find($id);

        // Fetch 2 latest posts for each career category
        $careerCategories = Career::with('category')
            ->select('career_category_id')
            ->distinct()
            ->get()
            ->mapWithKeys(function ($career) use ($id) {
                $categoryName = $career->category->name;
                $latestPosts = Career::where('career_category_id', $career->career_category_id)
                    ->where('id', '!=', $id) // Exclude the current job post
                    ->where('is_active', 1) // Only retrieve active posts
                    ->where('deadline', '>=', Carbon::now()) // Only careers with a valid deadline
                    ->latest()
                    ->take(2)
                    ->get();
                return [$categoryName => $latestPosts];
            });

        return view('layouts.careerdetails', compact('siteData', 'data', 'careerCategories'));
    }

    public function testModel()
    {
        $data = Post::all();
        dd($data);
    }

    public function termCondition()
    {
        $siteData = Sitedata::first();
        return view('layouts.termcondition', compact('siteData'));
    }

    public function affiliations()
    {
        $siteData = Sitedata::first();
        $affiliations = Affiliation::all();
        return view('layouts.home', compact('siteData', 'affiliations'));
    }
}
