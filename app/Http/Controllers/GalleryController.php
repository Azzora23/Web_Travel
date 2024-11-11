<?php

namespace App\Http\Controllers;

use App\Models\GalleryImage; // Import model
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function showGallery()
{
    $galleryImages = GalleryImage::all(); // Ambil semua gambar dari database
    return view('user.gallery', compact('galleryImages'));
}

}
