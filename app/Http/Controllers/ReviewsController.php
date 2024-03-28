<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReviewsController extends Controller
{
   public function index(Review $review){
       $reviews = Review::query()->orderBy('created_at')->paginate(3);
       return view('reviews', compact('reviews'));
   }

   public function create(Request $request){
       $request->validate([
           'message'=>['required', 'min:15', 'string']
       ]);
       $newReview = [
           'user_id' => auth()->user()->id,
           'massage' => $request->message
       ];
       Review::create($newReview);
       return redirect(route('reviews'))->withErrors('Вы оставили коментарий');
   }
}
