<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\GalleryImage;

class GalleryImagesTableSeeder extends Seeder
{
    public function run()
    {
        // Tambahkan beberapa data contoh
        GalleryImage::create(['url' => 'user/images/gallery/galeri.png', 'caption' => 'Galeri Wayang Purwakarta']);
        GalleryImage::create(['url' => 'user/images/gallery/wisata3.png', 'caption' => 'Taman Batu ']);
        GalleryImage::create(['url' => 'user/images/gallery/wisata5.png', 'caption' => 'Castle Lampion']);
        GalleryImage::create(['url' => 'user/images/gallery/wisata7.png', 'caption' => 'Urban Farming']);
        GalleryImage::create(['url' => 'user/images/gallery/wisata8.png', 'caption' => 'Saung Manglid']);
        // Tambahkan lebih banyak data jika diperlukan
    }
}
