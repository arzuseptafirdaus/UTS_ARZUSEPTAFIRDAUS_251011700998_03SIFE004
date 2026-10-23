<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Sport;

class SportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sports = [
            [
                'name' => 'League Champion | Football 2026',
                'category' => 'Tim',
                'equipment' => 'Bola Kaki, Sepatu Bola, Gawang, Jersey',
                'rules' => json_encode([
                    'Dimainkan oleh 11 pemain utama dalam setiap tim di lapangan.',
                    'Durasi pertandingan normal adalah 2x45 menit.',
                    'Pemain dilarang sengaja menyentuh bola dengan tangan kecuali penjaga gawang.'
                ]),
                'origin_country' => 'Inggris',
                'image' => 'league-champion.webp',
                'description' => 'Kejuaraan sepak bola antar klub profesional untuk menguji taktik tim dan stamina pemain di lapangan hijau.',
            ],
            [
                'name' => 'World Badminton Open 2026',
                'category' => 'Raket',
                'equipment' => 'Raket, Shuttlecock, Net, Lapangan',
                'rules' => json_encode([
                    'Pemain memukul shuttlecock melewati net ke area lawan.',
                    'Pertandingan biasanya menggunakan sistem reli hingga 21 poin.',
                    'Servis harus dilakukan secara diagonal ke area lawan.'
                ]),
                'origin_country' => 'Indonesia',
                'image' => 'world-badminton.jpg',
                'description' => 'Turnamen bulu tangkis tingkat internasional yang mempertemukan atlet ganda dan tunggal terbaik.',
            ],
            [
                'name' => 'International Basketball Series 2026',
                'category' => 'Tim',
                'equipment' => 'Bola Basket, Ring Basket, Papan Pantul',
                'rules' => json_encode([
                    'Setiap tim terdiri dari 5 pemain di lapangan.',
                    'Pemain wajib memantulkan bola (dribble) saat berjalan atau berlari.',
                    'Mencetak poin dengan memasukkan bola ke ring lawan.'
                ]),
                'origin_country' => 'Amerika',
                'image' => 'international-basketball.avif',
                'description' => 'Kompetisi bola basket paling bergengsi dengan aturan durasi ketat dan ketepatan tembakan ring.',
            ],
            [
                'name' => 'Aquatic Sprint Championship 2026',
                'category' => 'Akuatik',
                'equipment' => 'Pakaian Renang, Kacamata Renang, Kolam Renang',
                'rules' => json_encode([
                    'Perenang harus menyelesaikan jarak lintasan dengan gaya yang ditentukan.',
                    'Dilarang keluar dari jalur lintasan masing-masing selama perlombaan.',
                    'Start dilakukan setelah aba-aba atau bunyi peluit/alarm resmi.'
                ]),
                'origin_country' => 'Australia',
                'image' => 'aquatic-sprint.avif',
                'description' => 'Ajang balap renang akuatik kecepatan tinggi untuk nomor gaya bebas, dada, punggung, dan kupu-kupu.',
            ],
            [
                'name' => 'National Baseball Tournament 2026',
                'category' => 'Tim',
                'equipment' => 'Tongkat Pemukul, Bola Baseball, Sarung Tangan, Base',
                'rules' => json_encode([
                    'Permainan dibagi menjadi beberapa inning (biasanya 9 inning).',
                    'Pemukul harus mencoba memukul bola dari pitcher lalu berlari mengelilingi base.',
                    'Tim bertahan berupaya mematikan langkah pemain penyerang.'
                ]),
                'origin_country' => 'Amerika',
                'image' => 'national-baseball.jpg',
                'description' => 'Kejuaraan baseball nasional yang menguji ketepatan pukulan bat dan strategi lari mengelilingi base.',
            ],
            [
                'name' => 'Volleyball Inter-City Cup 2026',
                'category' => 'Tim',
                'equipment' => 'Bola Voli, Net, Lapangan',
                'rules' => json_encode([
                    'Setiap tim terdiri dari 6 pemain di dalam lapangan.',
                    'Maksimal 3 kali sentuhan bola per tim sebelum dikembalikan melewati net.',
                    'Pertandingan dimenangkan oleh tim yang lebih dulu mencapai set poin tertentu.'
                ]),
                'origin_country' => 'Jerman',
                'image' => 'volleyball-inter-city.webp',
                'description' => 'Piala bola voli antar kota dengan sistem reli ketat dan kerja sama smash di atas net.',
            ],
            [
                'name' => 'National Marathon & Running Series',
                'category' => 'Individu',
                'equipment' => 'Sepatu Lari, Pakaian Olahraga, Nomor Dada',
                'rules' => json_encode([
                    'Pelari wajib berlari di jalur atau lintasan yang telah ditentukan.',
                    'Tidak boleh menghalangi atau mendorong pelari lain secara sengaja.',
                    'Pemenang ditentukan berdasarkan catatan waktu tercepat sampai garis finish.'
                ]),
                'origin_country' => 'Rusia',
                'image' => 'national-marathon.webp',
                'description' => 'Ajang lari maraton nasional yang menguji batas daya tahan, waktu tempuh, dan ketahanan fisik atlet.',
            ],
            [
                'name' => 'Grand Slam Tennis Open 2026',
                'category' => 'Raket',
                'equipment' => 'Raket Tennis, Bola Tennis, Net, Lapangan Tennis',
                'rules' => json_encode([
                    'Poin dihitung mulai dari 15, 30, 40, hingga game dan set.',
                    'Bola harus memantul satu kali di area lapangan lawan setelah dipukul.',
                    'Servis dilakukan secara bergantian di setiap game.'
                ]),
                'origin_country' => 'Paris',
                'image' => 'grand-slam-tennis.webp',
                'description' => 'Turnamen tenis lapangan terbuka dengan persaingan ketat di kategori tunggal dan ganda.',
            ],
            [
                'name' => 'Pro Boxing Fight Night 2026',
                'category' => 'Bela Diri',
                'equipment' => 'Sarung Tinju, Pelindung Gigi, Celana Tinju, Ring Tinju',
                'rules' => json_encode([
                    'Petinju hanya diperbolehkan memukul menggunakan kepalan tangan bersarung ke bagian depan atau samping tubuh lawan.',
                    'Dilarang keras memukul bagian bawah sabuk (low blow), bagian belakang kepala, atau menendang.',
                    'Pemenang ditentukan melalui keputusan juri (points) atau jika lawan knock out (KO).'
                ]),
                'origin_country' => 'Inggris',
                'image' => 'pro-boxing.jpg',
                'description' => 'Malam pertarungan tinju profesional untuk memperebutkan sabuk juara kelas tanding resmi.',
            ],
            [
                'name' => 'Master Golf Championship 2026',
                'category' => 'Individu',
                'equipment' => 'Stik Golf (Club), Bola Golf, Tee, Tas Golf',
                'rules' => json_encode([
                    'Pemain harus memasukkan bola ke dalam lubang (hole) dengan jumlah pukulan (stroke) sesedikit mungkin.',
                    'Setiap pemain wajib mengikuti urutan giliran pukul berdasarkan posisi bola terjauh dari lubang.',
                    'Dilarang memindahkan bola secara sengaja kecuali dalam aturan penalti tertentu.'
                ]),
                'origin_country' => 'Skotlandia',
                'image' => 'master-golf.jfif',
                'description' => 'Kejuaraan golf internasional di lapangan 18 hole dengan penilaian akurasi pukulan stik.',
            ],
            [
                'name' => 'National Archery Masters 2026',
                'category' => 'Ketepatan',
                'equipment' => 'Busur (Bow), Anak Panah (Arrow), Target Sasaran, Pelindung Lengan',
                'rules' => json_encode([
                    'Pemanah harus melepaskan anak panah ke arah papan target dari jarak yang telah ditentukan sesuai kategori.',
                    'Setiap pemanah diberi batas waktu tertentu untuk menyelesaikan serangkaian tembakan.',
                    'Poin dihitung berdasarkan seberapa dekat anak panah mengenai pusat lingkaran target (bullseye).'
                ]),
                'origin_country' => 'Inggris',
                'image' => 'national-archery.webp',
                'description' => 'Ajang kompetisi panahan ketepatan tinggi untuk menguji fokus tembakan ke titik pusat target.',
            ],
            [
                'name' => 'Table Tennis World Cup 2026',
                'category' => 'Raket',
                'equipment' => 'Bet, Bola Tenis Meja, Meja Khusus, Net',
                'rules' => json_encode([
                    'Servis harus memantul sekali di area sendiri sebelum melewati net ke area meja lawan.',
                    'Poin diperoleh jika lawan gagal mengembalikan bola atau bola keluar dari meja.',
                    'Permainan menggunakan sistem reli dengan batas kemenangan mencapai 11 poin per game.'
                ]),
                'origin_country' => 'China',
                'image' => 'table-tennis.jpg',
                'description' => 'Piala dunia tenis meja cepat yang menampilkan refleks cepat pukulan bet di atas meja pertandingan.',
            ],
            [
                'name' => 'Karate Open Tournament 2026',
                'category' => 'Bela Diri',
                'equipment' => 'Gi (Seragam Karate), Sabuk, Pelindung Tangan & Kaki',
                'rules' => json_encode([
                    'Penilaian didasarkan pada teknik pukulan, tendangan, dan tangkisan yang terarah dengan kontrol penuh.',
                    'Kontak fisik berlebihan yang mencederai lawan secara sengaja berakibat diskualifikasi.',
                    'Pertandingan dipimpin oleh wasit utama dan dinilai oleh beberapa juri di sudut lapangan.'
                ]),
                'origin_country' => 'Jepang',
                'image' => 'karate-open.jpg',
                'description' => 'Turnamen terbuka seni bela diri karate untuk kategori Kata dan Kumite resmi.',
            ],
            [
                'name' => 'Pro Surfing Wave Series 2026',
                'category' => 'Akuatik',
                'equipment' => 'Papan Selancar (Surfboard), Leash (Tali Pengaman), Pakaian Selancar',
                'rules' => json_encode([
                    'Peselancar harus menangkap ombak dan berdiri di atas papan selancar sejauh mungkin.',
                    'Aturan prioritas (right of way) berlaku bagi peselancar yang posisinya paling dekat dengan puncak ombak.',
                    'Aksi manuver, kecepatan, dan tingkat kesulitan ombak menjadi penilai utama dalam kompetisi.'
                ]),
                'origin_country' => 'Australia',
                'image' => 'pro-surfing.webp',
                'description' => 'Kompetisi selancar ombak laut ekstrem yang menguji manuver dan keseimbangan peselancar di atas papan.',
            ],
            [
                'name' => 'Urban Skateboarding Cup 2026',
                'category' => 'Ekstrem',
                'equipment' => 'Papan Skateboard, Helm, Pelindung Lutut & Siku',
                'rules' => json_encode([
                    'Peserta harus menampilkan berbagai trik lompatan dan keseimbangan di atas area lintasan (skatepark).',
                    'Penilaian dilihat dari tingkat kesulitan trik, gaya, kelancaran, dan pemanfaatan rintangan.',
                    'Setiap peserta diberikan batas waktu giliran (run) atau kesempatan percobaan (attempts).'
                ]),
                'origin_country' => 'Amerika',
                'image' => 'urban-skateboarding.png',
                'description' => 'Kejuaraan skateboard perkotaan di skatepark dengan penilaian kreativitas trik dan akrobatik.',
            ],
            [
                'name' => 'Rock Climbing Summit 2026',
                'category' => 'Ekstrem',
                'equipment' => 'Tali Pengaman, Harness, Sepatu Panjat, Kapur Magnesium',
                'rules' => json_encode([
                    'Pemanjat harus mencapai puncak atau batas jalur dinding tebing/panjat dengan aman.',
                    'Sistem pengaman tali wajib terpasang dan dikontrol dengan benar oleh rekan tim (belayer).',
                    'Peserta dinyatakan gagal jika jatuh atau menggunakan bantuan tali untuk bertumpu.'
                ]),
                'origin_country' => 'Prancis',
                'image' => 'rock-climbing.jpg',
                'description' => 'Tantangan panjat tebing buatan dan alam untuk kategori kecepatan (speed) dan kesulitan (lead).',
            ],
        ];

        foreach ($sports as $sport) {
            Sport::create($sport);
        }
    }
}