<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use App\Models\Konten;
use App\Models\Kupon;
use App\Models\Artikel;
use App\Models\Category;
use App\Models\JumlahPoin;
use App\Models\JenisSampah;
use App\Models\RiwayatKupon;
use App\Models\StatusVoucher;
use App\Models\Kolega;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * 2return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        Artikel::factory(50)->create();
        RiwayatKupon::factory(50)->create();

        // category ---------------------
            Category::create([
                'name' => 'Fun Fact',
                'slug' => 'fun-fact'
            ]);

            Category::create([
                'name' => 'Tips',
                'slug' => 'tips'
            ]);

            Category::create([
                'name' => 'Inovasi',
                'slug' => 'inovasi'
            ]);

            Category::create([
                'name' => 'Aksi',
                'slug' => 'aksi'
            ]);
            
            Category::create([
                'name' => 'Kategori E',
                'slug' => 'kategori-e'
            ]);
        // akhir category ---------------

        // role --------------------------
            Role::create(['role_name' => 'penyetor']);

            Role::create(['role_name' => 'admin']);
        // akhir role --------------------

        // kupon -------------------------
            Kupon::create([
                'name' => "Kupon Diskon 10%",
                'diskon' => "10%",
                'poin' => 100 
            ]);
        // akhir kupon -------------------

        // status voucher ----------------
            StatusVoucher::create([
                'status' => 'Belum Digunakan'
            ]);

            StatusVoucher::create([
                'status' => 'Sudah Digunakan'
            ]);
        // akhir status voucher ----------

        // Jenis Sampah ------------------
            JenisSampah::create([
                'jenis_sampah' => 'Kardus',
                'slug' => 'kardus',
                'gambar' => 'kardus.png'
            ]);

            JenisSampah::create([
                'jenis_sampah' => 'Kaca',
                'slug' => 'kaca',
                'gambar' => 'kaca.png'
            ]);

            JenisSampah::create([
                'jenis_sampah' => 'Kertas',
                'slug' => 'kertas',
                'gambar' => 'kertas.png'
            ]);

            JenisSampah::create([
                'jenis_sampah' => 'Botol Plastik',
                'slug' => 'botol-plastik',
                'gambar' => 'botol-plastik.png'
            ]);

            JenisSampah::create([
                'jenis_sampah' => 'Kemasan',
                'slug' => 'kemasan',
                'gambar' => 'kemasan.png'
            ]);
            
            JenisSampah::create([
                'jenis_sampah' => 'Kain',
                'slug' => 'kain',
                'gambar' => 'kain.png'
            ]);

            JenisSampah::create([
                'jenis_sampah' => 'Kaleng',
                'slug' => 'kaleng',
                'gambar' => 'kaleng.png'
            ]);
        // akhir jenis sampah ------------

        // kolega ------------------------
            // 1
            Kolega::create([
                'jenis_sampah_id' => 1,
                'nama_kolega' => 'Tajinan Shop',
                'slug' => 'tajinan_shop',
                'deskripsi' => 'Tajinan shop adalah toko daur ulang yang khusus memproduksi mainan anak',
                'alamat' => $faker->address(),
                'no_hp' => '08' . $faker->numerify('##-####-####'),
                'sosial_media' => 'tajinan_shop',
                'gambar' => '/img/kolega/toko1.png'
            ]);

            // 2
            Kolega::create([
                'jenis_sampah_id' => 2,
                'nama_kolega' => 'Saikuru',
                'slug' => 'saikuru',
                'deskripsi' => $faker->sentence(7),
                'alamat' => $faker->address(),
                'no_hp' => '08' . $faker->numerify('##-####-####'),
                'sosial_media' => 'saikuru',
                'gambar' => '/img/kolega/toko2.png'
            ]);
            
            // 3
            Kolega::create([
                'jenis_sampah_id' => 3,
                'nama_kolega' => 'AntHill',
                'slug' => 'ant-hill',
                'deskripsi' => $faker->sentence(7),
                'alamat' => $faker->address(),
                'no_hp' => '08' . $faker->numerify('##-####-####'),
                'sosial_media' => 'ant_hill.id',
                'gambar' => '/img/kolega/toko3.png'
            ]);
            
            // 4
            Kolega::create([
                'jenis_sampah_id' => 4,
                'nama_kolega' => 'Daur.Ajalah',
                'slug' => 'daur-ajalah',
                'deskripsi' => $faker->sentence(7),
                'alamat' => $faker->address(),
                'no_hp' => '08' . $faker->numerify('##-####-####'),
                'sosial_media' => 'daur.ajalah',
                'gambar' => '/img/kolega/toko4.png'
            ]);
            
            // 5
            Kolega::create([
                'jenis_sampah_id' => 6,
                'nama_kolega' => 'bersih.in',
                'slug' => 'bersih-in',
                'deskripsi' => $faker->sentence(7),
                'alamat' => $faker->address(),
                'no_hp' => '08' . $faker->numerify('##-####-####'),
                'sosial_media' => 'bersih.in',
                'gambar' => '/img/kolega/toko5.png'
            ]);
            
            // 6
            Kolega::create([
                'jenis_sampah_id' => 5,
                'nama_kolega' => 'agreenoind',
                'slug' => 'agreenoind',
                'deskripsi' => $faker->sentence(7),
                'alamat' => $faker->address(),
                'no_hp' => '08' . $faker->numerify('##-####-####'),
                'sosial_media' => 'agreenoind',
                'gambar' => '/img/kolega/toko6.png'
            ]);
            
            // 7
            Kolega::create([
                'jenis_sampah_id' => 7,
                'nama_kolega' => 'Toko Segitiga',
                'slug' => 'toko-segitiga',
                'deskripsi' => $faker->sentence(7),
                'alamat' => $faker->address(),
                'no_hp' => '08' . $faker->numerify('##-####-####'),
                'sosial_media' => 'toko_segi_tiga',
                'gambar' => '/img/kolega/toko7.png'
            ]);

        // akhir jenis sampah ------------

        // konten ------------------------
            Konten::create([
                'konten' => 'Tentang Saga',
                'link' => '/tentang/saga'
            ]);

            Konten::create([
                'konten' => 'Tentang Tim',
                'link' => '/tentang/tim'
            ]);
            
            Konten::create([
                'konten' => 'Layanan Mitra',
                'link' => '/layanan/kolega'
            ]);

            Konten::create([
                'konten' => 'Layanan Kurir',
                'link' => '/layanan/kurir'
            ]);

            Konten::create([
                'konten' => 'Layanan setor',
                'link' => '/layanan/setor'
            ]);

            Konten::create([
                'konten' => 'Artikel',
                'link' => '/artikel'
            ]);

            Konten::create([
                'konten' => 'FAQ',
                'link' => '/faq'
            ]);

        // akhir konten ------------------
    }
}
