<?php

namespace App\Http\Controllers;

use App\Models\GalleryPhoto;
use Illuminate\Http\Request;

class GalleryPhotoController extends Controller
{
    public function index(){
        $galleryPhoto = GalleryPhoto::all();
        $paginateGalleryPhoto = GalleryPhoto::query()->paginate(9);
        return view('gallery', compact('galleryPhoto','paginateGalleryPhoto'));
    }
}
