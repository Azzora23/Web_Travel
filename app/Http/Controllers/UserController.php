<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\GalleryImage;
use App\Models\User; // Pastikan Anda mengimpor model User
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash; // Untuk hashing password
use Illuminate\Support\Facades\Validator; // Untuk validasi

class UserController extends Controller
{
    public function __construct()
    {
        // Middleware bisa ditambahkan di sini jika diperlukan
    }

    public function home()
    {
        return view('user.home');
    }

    public function blog() {
        // Ambil semua artikel dari database
        $articles = Article::all();
        
        // Kirim data artikel ke view
        return view('user.blog', compact('articles'));
    }

    public function showArticle($slug)
    {
        $article = Article::findBySlug($slug); // Cari artikel berdasarkan slug
        if (!$article) {
            return abort(404); // Jika artikel tidak ditemukan, bisa mengarahkan ke 404
        }
        return view('user.article', compact('article'));
    }

    public function gallery()
    {
        $galleryImages = GalleryImage::all();
        return view('user.gallery', compact('galleryImages'));
    }

    public function contact() {
        return view('user.contact');
    }

    // Menampilkan halaman login
    public function showLogin()
    {
        return view('auth.login'); // Ganti dengan view login Anda
    }

    // Proses login
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect()->route('dashboard'); // Redirect ke dashboard setelah login
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    // Menampilkan halaman dashboard
    public function index()
{
    return view('admin.dashboard', compact('data'));
}


    // Menampilkan halaman pendaftaran
    public function showRegistrationForm()
    {
        return view('auth.register'); // Ganti dengan view pendaftaran Anda
    }

    // Proses pendaftaran
    public function register(Request $request)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Buat pengguna baru
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password), // Hash password
        ]);

        // Login pengguna setelah pendaftaran
        Auth::attempt($request->only('email', 'password'));

        return redirect()->route('dashboard'); // Redirect ke dashboard setelah berhasil daftar
    }

    // Logout
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('home');
    }
}
