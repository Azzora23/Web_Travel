<?php
namespace App\Models;

use Illuminate\Support\Collection;

class Article
{
    // Array statis yang menyimpan artikel
    private static $blog_articles = [
        [
            'title' => 'Galeri Wayang Purwakarta: Menjaga Seni, Menghormati Tradisi',
            'slug' => 'Galeri-Wayang-Purwakaarta',
            'content' => 'Di tengah modernisasi yang kian melaju, Galeri Wayang Purwakarta hadir sebagai oase yang menyejukkan, mengingatkan kita akan pentingnya menjaga seni dan tradisi yang telah diwariskan turun-temurun. Wayang bukan sekadar media hiburan, melainkan juga cerminan kebijaksanaan leluhur, sarat dengan nilai-nilai filosofis dan ajaran moral yang relevan sepanjang masa. Galeri Wayang Purwakarta tidak hanya berfungsi sebagai tempat untuk menyimpan artefak seni, tetapi juga sebagai ruang pelestarian budaya. Di sini, pengunjung dapat belajar mengenai proses pembuatan wayang, mulai dari ukiran kayu yang halus hingga pewarnaan yang detail.'
        ],
        [
            'title' => 'Menikmati Keindahan Alam di Taman Batu Purwakarta: Destinasi Eksotis di Tengah Kota',
            'slug' => 'menikmati-keindahan-taman-batu-purwakarta',
            'content' => 'Taman Batu Purwakarta adalah salah satu destinasi wisata alam yang menawarkan pemandangan eksotis berupa formasi batuan alami yang menakjubkan. Terletak tidak jauh dari pusat kota Purwakarta, taman ini menjadi tempat favorit bagi para wisatawan yang ingin menikmati ketenangan alam dengan nuansa yang asri.
            Dengan hamparan batu-batu besar yang seolah dipahat oleh alam, Taman Batu juga dikelilingi oleh pepohonan rindang yang menambah kesejukan. Tempat ini sangat cocok untuk dikunjungi bersama keluarga atau teman-teman untuk bersantai, berfoto, atau sekadar menikmati udara segar di tengah hiruk pikuk kota.
            Jika Anda mencari destinasi liburan yang menyuguhkan keindahan alam tanpa harus jauh dari kota, Taman Batu Purwakarta adalah pilihan yang tepat.'
        ],
        [
            'title' => 'Castle Lampion Purwakarta: Keajaiban Cahaya di Tengah Wisata Malam',
            'slug' => 'castle-lampion-purwakarta-keajaiban-cahaya',
            'content' => 'Castle Lampion Purwakarta adalah salah satu destinasi wisata malam yang penuh keajaiban di Purwakarta. Berlokasi di dalam area taman yang luas, kastil ini dihiasi oleh ribuan lampion berwarna-warni yang menciptakan suasana magis saat malam tiba. Keindahan pancaran cahaya lampion yang membentuk berbagai bentuk dan motif menarik, menjadikannya tempat yang sangat Instagramable untuk para pengunjung.
            Dengan latar belakang kastil megah yang menyala, pengunjung akan merasa seolah-olah berada di negeri dongeng. Castle Lampion juga sering digunakan sebagai tempat untuk acara spesial seperti pertunjukan seni, festival lampion, atau sekadar menjadi spot terbaik untuk menikmati suasana malam yang memukau di Purwakarta.'
        ],
        [
            'title' => 'Urban Farming Purwakarta: Solusi Cerdas Bertani di Tengah Kota',
            'slug' => 'urban-farming-purwakarta-solusi-bertani-di-kota',
            'content' => 'Urban Farming Purwakarta adalah inisiatif menarik yang membawa konsep pertanian ke lingkungan perkotaan. Di tengah perkembangan kota yang pesat, Urban Farming hadir sebagai solusi cerdas untuk memanfaatkan lahan terbatas dengan bercocok tanam secara efektif. Program ini tidak hanya meningkatkan ketahanan pangan lokal, tetapi juga memberikan edukasi kepada masyarakat tentang pentingnya bertani secara mandiri.
            Dengan berbagai teknik modern seperti hidroponik, vertikultur, dan aquaponik, Urban Farming Purwakarta memungkinkan warga untuk menanam sayuran segar dan buah-buahan di pekarangan, balkon, atau atap rumah mereka. Selain itu, tempat ini juga menjadi destinasi wisata edukatif, di mana pengunjung dapat belajar cara bercocok tanam secara praktis, meski di lingkungan perkotaan.'
        ],
        [
            'title' => 'Saung Manglid Purwakarta: Menikmati Kuliner Tradisional di Tengah Alam Asri',
            'slug' => 'saung-manglid-purwakarta-kuliner-tradisional',
            'content' => 'Saung Manglid adalah destinasi kuliner unik di Purwakarta yang menggabungkan sajian khas tradisional dengan suasana pedesaan yang tenang dan alami. Terletak di tengah hamparan sawah dan pepohonan hijau, Saung Manglid menawarkan pengalaman makan yang berbeda, di mana pengunjung bisa menikmati hidangan lezat sambil merasakan kesejukan alam terbuka. Menu yang disajikan di Saung Manglid beragam, mulai dari ikan bakar, ayam goreng kampung, hingga sambal pedas khas Sunda yang menggugah selera. Dengan tempat makan berbentuk saung-saung tradisional yang terbuat dari bambu, pengunjung akan merasakan sensasi makan di tengah desa yang damai.'
        ],
    ];

    // Method untuk mengambil semua artikel
    public static function all()
    {
        // Mengembalikan array sebagai collection Laravel
        return collect(self::$blog_articles);
    }

    // Method untuk mencari artikel berdasarkan slug
    public static function findBySlug($slug)
    {
        // Mengambil artikel berdasarkan slug
        return collect(self::$blog_articles)->firstWhere('slug', $slug);
    }
}
