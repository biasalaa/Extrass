<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;
use App\Models\Biodata;
use App\Models\UserExtra;
use App\Models\Extrakulikuler;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            "nama_category" => "Olahraga"
        ]);

        Category::create([
            "nama_category" => "Organisasi"
        ]);

        Category::create([
            "nama_category" => "Seni"
        ]);

        Biodata::create([
            "nama" => "Admin",
            "nohp" => "nope",
            "alamat" => "nope"
        ]);

        Biodata::create([
            "nama" => "Anindya Jinan Risky",
            "nohp" => "086258798034",
            "alamat" => "Jalan Kaiurang Km 5 Gang Mijil Catur Tunggal, Kec. Depok, Kab. Bondowoso, Jawa Timur"
        ]);

        Biodata::create([
            "nama" => "Abdul Wahid Shomdany",
            "nohp" => "085938479098",
            "alamat" => "Jalan Kaiurang Km 5 Gang Mijil Catur Tunggal, Kec. Depok, Kab. Bondowoso, Jawa Timur"
        ]);

        Biodata::create([
            "nama" => "Afin Diyanti",
            "nohp" => "083093748918",
            "alamat" => "Jalan Kaiurang Km 5 Gang Mijil Catur Tunggal, Kec. Depok, Kab. Bondowoso, Jawa Timur"
        ]);

        User::create([
            "biodata_id" => 1,
            "username" => "admin",
            "password" => bcrypt("admin"),
            "role" => "admin"
        ]);

        User::create([
            "biodata_id" => 2,
            "username" => "anindya123",
            "password" => bcrypt("anindya")
        ]);

        User::create([
            "biodata_id" => 3,
            "username" => "abdulwahid123",
            "password" => bcrypt("abdulwahid")
        ]);

        User::create([
            "biodata_id" => 4,
            "username" => "afindiyanti123",
            "password" => bcrypt("afindiyanti")
        ]);


        Extrakulikuler::create([
            "nama_extra" => "Pramuka",
            "deskripsi" => " Ekstrakurikuler pramuka merupakan suatu kegiatan kepramukaan yang dilaksanakan diluar jam pembelajaran di sekolah dan di luar lingkungan keluarga yang bertujuan mewadahi bakat, minat, dan potensi anak untuk dikembangkan secara terus-menerus.",
            "foto" => "pramuka.jpg",
            "penanggung_jawab" => "Ghandy Yuda",
            "category_id" => 2
        ]);

        Extrakulikuler::create([
            "nama_extra" => "Paskibra",
            "deskripsi" => "Ekskul PASKIBRA mempunyai manfaat sangat banyak diantaranya bisa meningkatkan kedisiplinan siswa, membangkitkan jiwa nasionalisme pada anggotanya, sebagai wahana penyaluran bakat, memupuk rasa tanggung jawab dan membekali anggotanya dengan berbagai keterampilan untuk menyongsong masa depan.",
            "foto" => "paskibra.jpeg",
            "penanggung_jawab" => "Danang Sutyanto",
            "category_id" => 2
        ]);

        Extrakulikuler::create([
            "nama_extra" => "PMR",
            "deskripsi" => "Palang merah remaja bertujuan untuk melatih dan membentuk jiwa kemanusiaan para anggotanya agar mereka bisa memiliki kepedulian yang tinggi terhadap kemanusiaan sejak usia dini.",
            "foto" => "pmr.jpeg",
            "penanggung_jawab" => "Nanang Tress",
            "category_id" => 2
        ]);

        Extrakulikuler::create([
            "nama_extra" => "Basket",
            "deskripsi" => "Kegiatan ekstrakurikuler bola basket merupakan salah satu kegiatan di luar jam pelajaran sekolah dan sebagai wahana untuk menampung, menyalurkan dan membina minat, bakat serta kegemaran peserta didik dalam mengikuti kegiatan ekstrakurikuler.",
            "foto" => "basket.jpg",
            "penanggung_jawab" => "Alif Ramadhan",
            "category_id" => 1
        ]);
        
        Extrakulikuler::create([
            "nama_extra" => "Paduan Suara",
            "deskripsi" => "Kegiatan ekstrakurikuler paduan suara adalah salah satu kegiatan di luar jam pelajaran sekolah untuk mengembangkan bakat, minat dan kreatifitas siswa di bidang olah vokal.",
            "foto" => "padus.jpg",
            "penanggung_jawab" => "Elinda Cyntia",
            "category_id" => 3
        ]);

        Extrakulikuler::create([
            "nama_extra" => "Sepak Bola",
            "deskripsi" => "Kegiatan ekstrakurikuler sepakbola merupakan kegiatan sekolah yang dilakukan di luar jam pelajaran dengan tujuan untuk memperdalam dan memperluas pengetahuan, meningkatkan prestasi, menyalurkan minat, dan bakat serta melengkapi upaya pembinaan manusia seutuhnya.",
            "foto" => "sepakBola.jpg",
            "penanggung_jawab" => "Didik Cahyono",
            "category_id" => 1
        ]);

        Extrakulikuler::create([
            "nama_extra" => "Futsal",
            "deskripsi" => "Ekstrakurikuler futsal merupakan salah satu kegiatan ekstrakurikuler SD BM Gunung Sahari. Setiap siswa yang mengikuti ekstrakurikuler futsal dilatih dan didik tentang metode permainan futsal. Peserta didik diajarkan bagaimana menendang, menahan, menggiring dan teknik mengoper bola.",
            "foto" => "futsal.jpg",
            "penanggung_jawab" => "Didik Cahyono",
            "category_id" => 1
        ]);

        Extrakulikuler::create([
            "nama_extra" => "Voli",
            "deskripsi" => "Ekstrakurikuler bola voli merupakan media untuk mendorong prestasi non akademik, pertumbuhan fisik dan perkembangan psikis, meningkatkan kemampuan dan keterampilan dalam bermain bola voli supaya lebih baik, serta pembiasaan pola hidup sehat dengan berolahraga.",
            "foto" => "volly.jpg",
            "penanggung_jawab" => "Dwi Satya Dharma",
            "category_id" => 1
        ]);

        Extrakulikuler::create([
            "nama_extra" => "Teater Dan Kesenian",
            "deskripsi" => "Teater sekolah atau lebih lazim disebut ekskul teater merupakan wadah yang sengaja dibentuk oleh pihak sekolah. Tujuannya untuk menjadi ajang pengembangan diri para siswanya melalui kegiatan seni pertunjukan drama.",
            "foto" => "teater.jpg",
            "penanggung_jawab" => "Arsy Dwi Riski",
            "category_id" => 3
        ]);

         Extrakulikuler::create([
            "nama_extra" => "Remaja Masjid",
            "deskripsi" => "Ekstrakulikuler remas merupakan ekskul yang dapat meningkatkan jiwa rohani. Selain itu ekstrakulikuler remas juga mengajarkan baca Al-Qur’an,dan juga di ajarkan permainan alat musik dan tarian khas Islami.",
            "foto" => "hadra.png",
            "penanggung_jawab" => "Udin Abidin",
            "category_id" => 2
        ]);

        UserExtra::create([
            "biodata_id" => 2,
            "extrakulikuler_id" => 1,
        ]);

        UserExtra::create([
            "biodata_id" => 2,
            "extrakulikuler_id" => 2,
        ]);

        UserExtra::create([
            "biodata_id" => 2,
            "extrakulikuler_id" => 3,
        ]);

        UserExtra::create([
            "biodata_id" => 2,
            "extrakulikuler_id" => 4,
        ]);

        UserExtra::create([
            "biodata_id" => 3,
            "extrakulikuler_id" => 1,
        ]);

        UserExtra::create([
            "biodata_id" => 3,
            "extrakulikuler_id" => 5,
        ]);

        UserExtra::create([
            "biodata_id" => 3,
            "extrakulikuler_id" => 8,
        ]);

        UserExtra::create([
            "biodata_id" => 4,
            "extrakulikuler_id" => 1,
        ]);

    }
}
