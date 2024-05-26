<?php

namespace Database\Seeders;

use App\Models\Daftarmitrarumahmakann;
use App\Models\Tentangkami;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Tentangkami::factory()->create([
            'nama_perusahaan' => 'PT. HaiuCare Bangun Indonesia',
            'deskripsi' => '
            HaiuCare Bangun Indonesia adalah sebuah perusahaan yang berfokus pada bidang kemanusiaan dengan misi utama untuk meningkatkan kesejahteraan masyarakat Indonesia. Melalui berbagai program dan inisiatif, HaiuCare berkomitmen untuk memberikan bantuan kepada mereka yang membutuhkan, baik dalam bentuk dukungan kesehatan, pendidikan, pemberdayaan ekonomi, serta pembangunan infrastruktur. Dengan pendekatan yang holistik, perusahaan ini berupaya menciptakan dampak positif yang berkelanjutan bagi komunitas-komunitas yang dilayani.
            
            Dalam upaya mencapai tujuannya, HaiuCare Bangun Indonesia bekerja sama dengan berbagai organisasi non-profit, pemerintah, dan sektor swasta. Program-program unggulan yang dijalankan mencakup layanan kesehatan gratis, program makan gratis untuk masyarakat kurang mampu, beasiswa pendidikan untuk anak-anak, serta pembangunan dan perbaikan infrastruktur dasar. Dengan dedikasi tinggi dan semangat kemanusiaan, HaiuCare terus berinovasi dan berkontribusi secara signifikan dalam membangun masa depan yang lebih baik bagi Indonesia.

            ',
            'berdiri' => '22 Januari 2024',
            'founder' => '',
            'alamat' => 'Jln. Puspa Kencana No 28 Bumi Panyawangan, RT.002 RW. 004 Cileunyi Kulon, Kecamatan Cileunyi, Kabupaten Bandung, Jawa Barat 40266',
            'email' => 'hbi@haiucare.com',
            'nomor_telepon' => '6282129208716',
            'website' => 'www.haiucares.com',
            'industri' => 'Layanan Sosial',

            'created_at' => now(),
            'updated_at' => now(),
        ]);

         Daftarmitrarumahmakann::factory(7)->create();
    
    }
}
