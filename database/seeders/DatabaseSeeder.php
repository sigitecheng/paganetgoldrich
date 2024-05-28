<?php

namespace Database\Seeders;

use App\Models\Daftarmenu;
use App\Models\Daftarmitrarumahmakann;
use App\Models\Tentangkami;
use App\Models\Lokasimakangratis;
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
            
        Daftarmitrarumahmakann::factory()->create([
            'gambar' => 'assets/css/fe_css/images/daftarmitrarumahmakan/warteg1.jpeg',
        ]);
        Daftarmitrarumahmakann::factory()->create([
            'gambar' => 'assets/css/fe_css/images/daftarmitrarumahmakan/warteg2.jpeg',
        ]);
        Daftarmitrarumahmakann::factory()->create([
            'gambar' => 'assets/css/fe_css/images/daftarmitrarumahmakan/warteg3.jpeg',
        ]);
        Daftarmitrarumahmakann::factory()->create([
            'gambar' => 'assets/css/fe_css/images/daftarmitrarumahmakan/warteg4.jpg',
        ]);
        Daftarmitrarumahmakann::factory()->create([
            'gambar' => 'assets/css/fe_css/images/daftarmitrarumahmakan/warteg5.jpeg',
        ]);
        Daftarmitrarumahmakann::factory()->create([
            'gambar' => 'assets/css/fe_css/images/daftarmitrarumahmakan/warteg6.jpeg',
        ]);
        Daftarmitrarumahmakann::factory()->create([
            'gambar' => 'assets/css/fe_css/images/daftarmitrarumahmakan/warteg7.jpg',
        ]);
        Daftarmitrarumahmakann::factory()->create([
            'gambar' => 'assets/css/fe_css/images/daftarmitrarumahmakan/warteg8.jpg',
        ]);
        Daftarmitrarumahmakann::factory()->create([
            'gambar' => 'assets/css/fe_css/images/daftarmitrarumahmakan/warteg9.jpg',
        ]);
        Daftarmitrarumahmakann::factory()->create([
            'gambar' => 'assets/css/fe_css/images/daftarmitrarumahmakan/warteg10.jpg',
        ]);
        Daftarmitrarumahmakann::factory()->create([
            'gambar' => 'assets/css/fe_css/images/daftarmitrarumahmakan/warteg11.jpg',
        ]);
        Daftarmitrarumahmakann::factory()->create([
            'gambar' => 'assets/css/fe_css/images/daftarmitrarumahmakan/warteg12.jpg',
        ]);
        Daftarmitrarumahmakann::factory()->create([
            'gambar' => 'assets/css/fe_css/images/daftarmitrarumahmakan/warteg13.jpg',
        ]);
     // ===================================================================
        
     
     Daftarmenu::factory()->create([
            'menu' => 'Nasi Pedas Ayam Goreng',
            'gambar' => 'assets/css/fe_css/images/daftarmenu/0nasiayamgoreng.jpg',
            'keteranganmenu' => 'Nasi pedas ayam goreng adalah hidangan yang menggugah selera dengan perpaduan sempurna antara nasi yang lezat dan ayam goreng yang renyah. Nasi yang diolah dengan rempah-rempah khas memberikan cita rasa pedas yang menggelora namun tetap menyegarkan, sementara ayam goreng yang digoreng hingga kecokelatan memberikan tekstur yang renyah di luar dan lembut di dalam. Keduanya bersatu sempurna dalam satu hidangan yang memanjakan lidah dan memuaskan selera.
            ',
        ]);

     Daftarmenu::factory()->create([
            'menu' => 'Nasi Campur Sayur Bihun',
            'gambar' => 'assets/css/fe_css/images/daftarmenu/1nasicampur.jpg',
            'keteranganmenu' => 'Nasi campur sayur bihun adalah sajian yang menggugah selera dengan paduan yang seimbang antara nasi, sayuran, dan bihun. Nasi yang pulen dan harum dipadukan dengan beragam sayuran segar seperti wortel, kacang panjang, dan sawi, memberikan tekstur yang renyah dan cita rasa yang segar. Ditambah dengan bihun yang lembut dan berpadu dengan bumbu-bumbu rempah yang khas, menjadikan hidangan ini pilihan yang sempurna untuk menyajikan kelezatan dan kesehatan dalam satu sajian.',
        ]);
     Daftarmenu::factory()->create([
            'menu' => 'Nasi Goreng Ayam Special',
            'gambar' => 'assets/css/fe_css/images/daftarmenu/2nasigoreng.jpg',
            'keteranganmenu' => 'Nasi goreng ayam special adalah hidangan yang menggoda dengan cita rasa yang kaya dan tekstur yang menggigit. Nasi yang dimasak dengan sempurna dan dicampur dengan ayam potong-potong yang diolah dengan bumbu rempah khas, memberikan kelezatan yang tiada tara. Ditambah dengan tambahan bahan seperti telur dadar, irisan sayuran segar, dan taburan bawang goreng, menjadikan hidangan ini istimewa dan memikat selera.',
        ]);
     Daftarmenu::factory()->create([
            'menu' => 'Mie Goreng Ayam Istimewa',
            'gambar' => 'assets/css/fe_css/images/daftarmenu/3miegoreng.jpg',
            'keteranganmenu' => 'Mie goreng ayam spesial adalah sajian yang menggoda dengan citarasa yang melimpah dan tekstur yang mengundang selera. Mie yang digoreng dengan sempurna dan dicampur dengan potongan ayam yang diolah dengan rempah-rempah pilihan, memberikan kenikmatan yang tak tertandingi. Tambahkan telur mata sapi, irisan sayuran segar, serta taburan bawang goreng, membuat hidangan ini menjadi istimewa dan memukau lidah.',
        ]);
     Daftarmenu::factory()->create([
            'menu' => 'Nasi Capcay Special',
            'gambar' => 'assets/css/fe_css/images/daftarmenu/4capcay.jpg',
            'keteranganmenu' => 'Nasi capcay special adalah hidangan yang memikat dengan kelezatan yang unik dan beragam. Nasi yang dihiasi dengan aneka macam sayuran segar seperti wortel, kembang kol, buncis, dan jamur, memberikan tekstur yang renyah dan cita rasa yang segar. Ditambah dengan potongan daging ayam, udang, atau daging sapi yang dimasak dengan bumbu-bumbu spesial, menjadikan hidangan ini istimewa dan memuaskan selera.',
        ]);
     Daftarmenu::factory()->create([
            'menu' => 'Nasi Soto Bandung',
            'gambar' => 'assets/css/fe_css/images/daftarmenu/5sotoayam.jpg',
            'keteranganmenu' => 'Nasi Soto Bandung adalah hidangan khas dari kota Bandung, Indonesia, yang terkenal dengan kuah sotonya yang kaya rasa dan beraroma. Hidangan ini terdiri dari nasi yang disajikan bersama potongan daging sapi, tauge, daun bawang, dan emping, disiram dengan kuah soto yang gurih. Kuah sotonya yang hangat dan bumbu rempahnya yang khas membuat hidangan ini menjadi favorit di kalangan penduduk lokal maupun wisatawan yang berkunjung ke kota Bandung.',
        ]);
     Daftarmenu::factory()->create([
            'menu' => 'Nasi Sayur Asem Pedas Manis',
            'gambar' => 'assets/css/fe_css/images/daftarmenu/6sayurasem.jpg',
            'keteranganmenu' => 'Nasi soto Bandung adalah hidangan yang menggoda dengan citarasa yang khas dan aroma rempah yang menggugah selera. Nasi yang disajikan bersama kuah soto yang kaya akan rempah-rempah tradisional, ditambah potongan daging sapi yang empuk serta tambahan telur rebus dan kentang, menciptakan kombinasi yang mengenyangkan dan lezat. Taburan bawang goreng dan seledri segar sebagai garnis menambahkan aroma yang meriah dan memperkaya cita rasa hidangan ini, menjadikannya pilihan yang sempurna untuk dinikmati kapan pun.',
        ]);
     Daftarmenu::factory()->create([
            'menu' => 'Nasi Tahu Gejrot Pedas Asin',
            'gambar' => 'assets/css/fe_css/images/daftarmenu/7nasitahugejrot.jpg',
            'keteranganmenu' => 'Nasi tahu gejrot pedas asin adalah hidangan yang memukau dengan sentuhan cita rasa yang unik dan memanjakan lidah. Potongan tahu yang digoreng hingga renyah disajikan di atas nasi, kemudian disiram dengan saus gejrot yang pedas dan asin, memberikan perpaduan rasa yang menggugah selera. Ditambah dengan taburan bawang goreng dan daun seledri segar sebagai hiasan, hidangan ini menawarkan sensasi yang memikat dan kenikmatan yang tiada tara bagi pencinta kuliner yang doyan pedas.',
        ]);
     Daftarmenu::factory()->create([
            'menu' => 'Nasi Telur Ceplok Gejrot Kecap Manis',
            'gambar' => 'assets/css/fe_css/images/daftarmenu/8nasitelurgejrot.jpg',
            'keteranganmenu' => 'Nasi Telur Ceplok Gejrot Kecap Manis hidangan yang menggabungkan nasi dengan telur ceplok yang dimasak hingga kuning telur setengah matang atau matang sesuai selera. Kemudian, hidangan ini disiram dengan saus gejrot yang khas dan manis, yang terbuat dari campuran kecap manis, air, bawang merah, cabai, dan bumbu-bumbu lainnya. Kombinasi rasa manis, asam, dan pedas dari saus gejrot memberikan sentuhan unik pada hidangan ini, menciptakan pengalaman kuliner yang memikat bagi para penikmatnya.',
        ]);
     Daftarmenu::factory()->create([
            'menu' => 'Nasi Uduk Betawi',
            'gambar' => 'assets/css/fe_css/images/daftarmenu/9nasiuduk.jpg',
            'keteranganmenu' => 'Nasi uduk Betawi adalah hidangan khas Jakarta yang menggugah selera dengan paduan sempurna antara nasi yang dimasak dalam santan kelapa dan rempah-rempah, menciptakan aroma harum yang menggoda dan cita rasa yang kaya. Disajikan dengan pelengkap seperti ayam goreng yang gurih dan renyah serta telur dadar yang lembut, nasi uduk Betawi menjadi pilihan sarapan atau makanan sehari-hari yang tak pernah mengecewakan, memukau lidah dan memberikan pengalaman kuliner yang tak terlupakan.',
        ]);



    
        Lokasimakangratis::factory()->create([
            'kota' => 'Cileunyi',
            'daftarmitrarumahmakann_id' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        Lokasimakangratis::factory()->create([
            'kota' => 'Lembang',
            'daftarmitrarumahmakann_id' => '2',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        Lokasimakangratis::factory()->create([
            'kota' => 'Kopo',
            'daftarmitrarumahmakann_id' => '3',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        Lokasimakangratis::factory()->create([
            'kota' => 'Stasiun Bandung',
            'daftarmitrarumahmakann_id' => '4',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        

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

        //  Daftarmitrarumahmakann::factory(7)->create();
    
    }
}
