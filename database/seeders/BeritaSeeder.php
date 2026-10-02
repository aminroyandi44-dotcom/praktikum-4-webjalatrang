<?php

namespace Database\Seeders;

use App\Models\Berita;
use Illuminate\Database\Seeder;

class BeritaSeeder extends Seeder
{
    public function run(): void
    {
        // Kosongkan dulu supaya seeder bisa dijalankan berulang tanpa data dobel.
        Berita::truncate();

        foreach ($this->daftarBerita() as $berita) {
            Berita::create($berita);
        }
    }

    /**
     * Berita dari jalatrang.id/berita, urut dari yang paling lama supaya
     * berita terbaru mendapat id terbesar dan tampil paling atas.
     *
     * @return list<array<string, mixed>>
     */
    private function daftarBerita(): array
    {
        return [
            [
                'judul' => 'Dukung Pengembangan Desa Wisata, Mahasiswa KKN UPI Serap Ilmu Kewisataan dalam Pelatihan Resmi Dinas Pariwisata Ciamis',
                'slug' => 'dukung-pengembangan-desa-wisata-mahasiswa-kkn-upi-serap-ilmu-kewisataan-dalam-pelatihan-resmi-dinas-pariwisata-ciamis',
                'kategori' => 'Pendidikan',
                'gambar' => 'dukung-pengembangan-desa-wisata-mahasiswa-kkn.jpeg',
                'tanggal' => '2026-06-30',
                'penulis' => 'Imam Purnama',
                'dilihat' => 237,
                'tags' => 'kknupiberdampak,jalatrang',
                'isi' => <<<'HTML'
<p><br></p><p>Mahasiswa KKN Berdampak UPI Kelompok 04 mendapatkan kesempatan emas untuk memperluas cakrawala keilmuan mereka di bidang manajemen destinasi pada Selasa (30/6). Dinas Pariwisata Kabupaten Ciamis menggelar agenda pelatihan intensif berskala daerah yang dipusatkan di Desa Jalatrang, dengan melibatkan 30 Kepala Desa Wisata dari seluruh penjuru Kabupaten Ciamis. Pelatihan ini mengusung dua tema krusial, yaitu “Pelatihan Pemandu Desa Wisata” dan “Pelatihan Tiketing &amp; Manajemen Retribusi”.</p><p>Pada sesi pematerian pertama mengenai kepemanduan desa wisata, materi disampaikan langsung oleh Ketua Himpunan Pramuwisata Indonesia (HPI) Cabang Ciamis, Bapak Iwan Wahyudi. Dalam paparannya, beliau membedah secara mendalam mengenai konsep pelayanan prima (<em>Excellent Service</em>). Bapak Iwan menegaskan bahwa pemandu wisata (<em>tour guide</em>) merupakan ujung tombak utama dalam industri pariwisata karena berhadapan langsung dengan wisatawan. Oleh sebab itu, seorang pemandu dituntut memiliki sikap rendah hati yang dicontohkan melalui tindakan nyata, seperti tidak mengenakan pakaian atau aksesori yang mencolok dan lebih mewah daripada tamu yang dilayani. Konsep ini bukan untuk merendahkan profesi, melainkan sebagai bentuk penghormatan dan profesionalisme. Pemandu juga wajib menguasai karakteristik wilayah, gestur tubuh yang baik, serta keilmuan pariwisata yang matang.</p><p>Tidak hanya duduk sebagai peserta untuk menyerap ilmu, mahasiswa KKN UPI juga dipercaya untuk mengambil peran strategis sebagai tim kepanitiaan yang memfasilitasi kelancaran acara. Pada sesi pematerian kedua yang berfokus pada sistem tiketing dan tata kelola retribusi keuangan, mahasiswa KKN UPI mengambil alih tanggung jawab penuh secara operasional sebagai panitia pelaksana. Keterlibatan ini memberikan pengalaman manajerial yang berharga bagi mahasiswa dalam mendukung keberlanjutan pariwisata daerah.</p>
HTML,
            ],
            [
                'judul' => 'Tingkatkan SDM Petani, Pemdes Jalatrang Gelar Sekolah Lapang untuk KWT Cemerlang',
                'slug' => 'tingkatkan-sdm-petani-pemdes-jalatrang-gelar-sekolah-lapang-untuk-kwt-cemerlang',
                'kategori' => 'Pendidikan',
                'gambar' => 'tingkatkan-sdm-petani-pemdes-jalatrang-gelar-.jpeg',
                'tanggal' => '2026-07-23',
                'penulis' => 'Dadi Haryadi',
                'dilihat' => 177,
                'tags' => 'desa,secara,2026,pertanian,dusun,masyarakat,sekolah,lahan,cidoyang,cemerlang',
                'isi' => <<<'HTML'
<p><em>JalatrangNews;</em> Dalam upaya memperkuat ketahanan pangan desa dan meningkatkan kapasitas Sumber Daya Manusia (SDM) di sektor pertanian, Pemerintah Desa Jalatrang resmi membuka program <strong>Sekolah Lapang Pertanian</strong>. Kegiatan yang bersumber dari alokasi Dana Desa Tahun Anggaran 2026 ini secara khusus menargetkan Kelompok Wanita Tani (KWT) Cemerlang yang berdomisili di Dusun Cidoyang RW 021.</p><p>Program pemberdayaan masyarakat yang bersumber dari alokasi <strong>Dana Desa Tahun Anggaran 2026</strong> ini secara resmi dibuka pada Rabu, 22 Juli 2026. Kegiatan ini dirancang sebagai wadah edukasi aplikatif guna meningkatkan kualitas Sumber Daya Manusia (SDM) para petani lokal, khususnya kaum perempuan yang bergerak di sektor pertanian.</p><p>Pelaksanaan Sekolah Lapang Pertanian ini tidak hanya diisi dengan penyampaian teori, melainkan juga praktik lapangan secara langsung. Program ini dijadwalkan berlangsung selama kurang lebih satu bulan, mulai dari 22 Juli 2026 hingga 19 Agustus 2026, dengan total 8 kali pertemuan.</p><p>Selama delapan sesi tersebut, para anggota KWT Cemerlang akan dibekali berbagai materi krusial. Materi pelatihan mencakup pengelolaan lahan yang efektif, teknik budidaya tanaman ramah lingkungan, pemeliharaan dan pengendalian hama terpadu, hingga pengelolaan hasil panen agar memiliki nilai jual yang lebih tinggi.</p><p>Acara pembukaan kegiatan berlangsung secara khidmat dan mendapat apresiasi penuh dari berbagai pihak. Sinergi antara pemerintah desa, aparat keamanan, lembaga desa, hingga pendamping masyarakat terlihat jelas dari jajaran tamu undangan yang hadir.</p><p>Turut hadir dalam acara pembukaan tersebut:</p><ul><li>Kepala Desa Jalatrang</li><li>Bhabinkamtibmas dan Babinsa Desa Jalatrang</li><li>Ketua Badan Permusyawaratan Desa (BPD) Jalatrang</li><li>Penyuluh Pertanian Lapangan (PPL) Desa Jalatrang</li><li>Pendamping Desa dan Pendamping Lokal Desa (PLD)</li><li>Tokoh Masyarakat serta Kepala Dusun Cidoyang</li></ul><p></p><p>Kehadiran unsur pemangku kepentingan tingkat desa ini menjadi bentuk dukungan nyata terhadap optimalisasi penggunaan Dana Desa agar benar-benar menyentuh kebutuhan masyarakat bawah.</p><p>Melalui penyelenggaraan Sekolah Lapang ini, Pemerintah Desa Jalatrang berharap KWT Cemerlang Dusun Cidoyang dapat bertransformasi menjadi kelompok tani wanita yang mandiri, inovatif, dan produktif.</p><p>Pemanfaatan lahan pekarangan maupun lahan pertanian kelompok yang dikelola secara modern diharapkan mampu menopang ketahanan pangan keluarga sekaligus meningkatkan perekonomian warga Dusun Cidoyang secara berkelanjutan.</p><p><br></p><p><em>Team_Media; Nurhalim</em></p>
HTML,
            ],
            [
                'judul' => 'Perluas Jangkauan Bank Sampah Jalatrang Berseka, Mahasiswa KKN UPI Gelar Sosialisasi di SDN 02 Jalatrang',
                'slug' => 'perluas-jangkauan-bank-sampah-jalatrang-berseka-mahasiswa-kkn-upi-gelar-sosialisasi-di-sdn-02-jalatrang',
                'kategori' => 'Pendidikan',
                'gambar' => 'perluas-jangkauan-bank-sampah-jalatrang-berse.jpeg',
                'tanggal' => '2026-07-23',
                'penulis' => 'Imam Purnama',
                'dilihat' => 232,
                'tags' => 'kknupiberdampak,jalatrang',
                'isi' => <<<'HTML'
<p></p><p><br></p><p><em>JalatrangNews; </em>Desa Jalatrang, Kecamatan Cipaku, Kabupaten Ciamis, Provinsi Jawa Barat terus berkomitmen menjaga kelestarian lingkungan melalui program berkelanjutan Bank Sampah "Jalatrang Berseka". Program unggulan ini dirancang untuk menjawab dan menanggulangi permasalahan sampah domestik yang selama ini menjadi tantangan di tingkat desa.</p><p>Sebelum hadirnya program Bank Sampah, kebiasaan masyarakat setempat dalam mengelola sampah rumah tangga cenderung masih tradisional, yaitu dengan cara dibakar. Kebiasaan tersebut tak jarang memicu tingginya polusi udara hingga meningkatkan risiko kebakaran lingkungan. Melalui kehadiran Bank Sampah Jalatrang Berseka, sampah yang dihasilkan warga kini justru bernilai guna dan memberikan manfaat ekonomi kembali bagi masyarakat melalui sistem tabungan sampah.</p><p>Meski demikian, efektivitas sistem tabungan sampah ini sebelumnya baru terealisasi di tiga wilayah dusun, yakni Dusun Cimanggu, Dusun Babakan, dan Dusun Cidoyang.</p><p>Melihat potensi pengembangan yang masih sangat besar, Mahasiswa KKN Berdampak Universitas Pendidikan Indonesia (UPI) Kelompok 04 dari Program Studi Survei Pemetaan dan Informasi Geografis (SPIG) mengambil langkah konkret dengan menggelar program kerja Sosialisasi Bank Sampah pada Kamis (21/7/2026).</p><p></p><p>Bertempat di SDN 02 Jalatrang yang berlokasi di Dusun Desa, mahasiswa KKN UPI hadir memfasilitasi jalannya sosialisasi guna memperluas jangkauan dan dampak dari program tabungan sampah tersebut. Kegiatan ini difokuskan untuk mengedukasi warga serta jajaran di Dusun Desa yang sebelumnya belum terintegrasi ke dalam sistem Bank Sampah Jalatrang Berseka.</p><p>Melalui program kerja sosialisasi ini, diharapkan tumbuh kesadaran baru yang menjadi pemantik awal bagi masyarakat Dusun Desa untuk ikut serta secara aktif. Sinergi ini ditargetkan mampu memperluas cakupan pengelolaan sampah desa yang ramah lingkungan, sekaligus mewujudkan Desa Jalatrang yang lebih bersih, sehat, dan mandiri secara ekologis.</p>
HTML,
            ],
            [
                'judul' => 'Tingkatkan Kualitas Layanan Publik, FISIP Unpas dan Universitas Galuh Gelar Seminar Lokakarya Tata Kelola Pemerintahan Berbasis Digital di Ciamis',
                'slug' => 'tingkatkan-kualitas-layanan-publik-fisip-unpas-dan-universitas-galuh-gelar-seminar-lokakarya-tata-kelola-pemerintahan-berbasis-digital-di-ciamis',
                'kategori' => 'Pendidikan',
                'gambar' => 'tingkatkan-kualitas-layanan-publik-fisip-unpa.jpeg',
                'tanggal' => '2026-08-04',
                'penulis' => 'Dadi Haryadi',
                'dilihat' => 270,
                'tags' => 'Seminar Lokakarya,Unpas,Unigal,Jalatrang,Jalatrang Cerdas,Ciamis,Digitalisasi,Desa Digital',
                'isi' => <<<'HTML'
<p><em>JalatrangNews;</em> Dalam upaya mendorong akselerasi transformasi digital di tingkat daerah hingga desa, Program Studi (Prodi) Administrasi Publik FISIP Universitas Pasundan (Unpas) bekerja sama dengan Universitas Galuh Ciamis menyelenggarakan <strong>Seminar Lokakarya</strong> bertajuk <em>"Pengembangan Tata Kelola Pemerintahan dan Pelayanan Publik Berbasis Digital di Kabupaten Ciamis"</em>.</p><p>Kegiatan yang berlangsung di Aula Sekretariat Daerah (Setda) Kabupaten Ciamis pada Selasa (04/08/2026) ini dihadiri oleh unsur Pimpinan kedua Perguruan Tinggi, dari FISIP Universitas Pasundan dari dari Fisip Universitas Galuh Ciamis , akademisi, dan mahasiswa/i Prodi Administrasi Publik Fisip dari kedua Perguruan Tinggi tersebut. Kolaborasi lintas perguruan tinggi ini bertujuan untuk merumuskan strategi konkrit dalam menghadirkan pelayanan publik yang efisien, transparan, dan responsif melalui pemanfaatan teknologi digital.</p><p>Hadir sebagai narasumber utama dalam kegiatan ini:</p><ol><li><strong>Dr. H. Andang Firman Triyadi, M.T.</strong> – Sekretaris Daerah Kabupaten Ciamis</li><li><strong>Prof. Dr. H. Thomas Bustomi, M.Si.</strong> – Guru Besar Administrasi Publik FISIP Universitas Pasundan</li><li><strong>Dadi Haryadi</strong> – Kepala Desa Jalatrang, Kecamatan Cipaku</li></ol><p></p><p><br></p><p>Dalam paparan pertamanya, Sekda Kabupaten Ciamis, <strong>Dr. H. Andang Firman Triyadi, M.T.</strong>, menekankan pentingnya komitmen pemerintah daerah dalam memodernisasi infrastruktur birokrasi. Ia menyampaikan bahwa digitalisasi bukan sekadar mengadopsi aplikasi, melainkan mengubah budaya kerja agar lebih berorientasi pada kepuasan masyarakat.</p><blockquote><em>"Penerapan Sistem Pemerintahan Berbasis Elektronik (SPBE) di Kabupaten Ciamis terus kita dorong hingga ke tingkat tapak. Tantangan terbesar bukan hanya pada penyediaan infrastruktur IT, tetapi juga kesiapan sumber daya manusia (SDM) dan integrasi data agar pelayanan publik dapat diakses dengan cepat, mudah, dan akuntabel,"</em> ujar Sekda Ciamis.</blockquote><p>Pandangan akademis disampaikan oleh Guru Besar Administrasi Publik FISIP Unpas, <strong>Prof. Dr. H. Thomas Bustomi, M.Si.</strong>. Beliau menggarisbawahi pentingnya sinergi <em>pentahelix</em> (pemerintah, akademisi, bisnis, komunitas, dan media) dalam membangun tata kelola digital. Menurutnya, perguruan tinggi memiliki tanggung jawab moral untuk mengawal inovasi kebijakan agar tepat sasaran dan berkeadilan sosial.</p><p>Sementara itu, dari sudut pandang praktisi pemerintahan desa, Kepala Desa Jalatrang, <strong>Dadi Haryadi</strong>, membagikan pengalaman sukses dan tantangan nyata dalam menerapkan pelayanan berbasis digital di tingkat desa. Ia menyoroti pentingnya literasi digital bagi warga desa agar inovasi layanan yang diciptakan benar-benar memberikan manfaat nyata.</p><p>Melalui seminar lokakarya ini, diharapkan tercipta rekomendasi kebijakan serta kerangka kerja sama berkelanjutan antara akademisi (Unpas &amp; Unigal) dan Pemerintah Kabupaten Ciamis untuk mempercepat terwujudnya <em>smart governance</em> yang inklusif di Tatar Galuh Ciamis.</p><p><br></p><p><em>Team_Media : Nurhalim</em></p>
HTML,
            ],
            [
                'judul' => 'Pertahankan Gelar Juara, Jalatrang Muda FC Sabet Gelar Juara 1 Buniseuri Championship 2026',
                'slug' => 'pertahankan-gelar-juara-jalatrang-muda-fc-sabet-gelar-juara-1-buniseuri-championship-2026',
                'kategori' => 'Olahraga',
                'gambar' => 'pertahankan-gelar-juara-jalatrang-muda-fc-sab.png',
                'tanggal' => '2026-08-04',
                'penulis' => 'danny',
                'dilihat' => 1131,
                'tags' => 'desa,jalatrang,muda,sepak,berhasil,juara,diraih,buniseuri,2026,final',
                'isi' => <<<'HTML'
<p>JalatrangNews; Tim sepak bola Jalatrang Muda FC sukses mempertahankan takhta dan mengamankan gelar Juara 1 dalam ajang bergengsi Buniseuri Championship 2026. Laga pamungkas (final) yang berlangsung sengit tersebut digelar pada Selasa, 4 Agustus 2026, bertempat di Lapangan Sepak Bola Nerangbaya, Desa Buniseuri. Pada partai puncak ini, Jalatrang Muda FC berhadapan dengan tim tuan rumah, PSM Desa Buniseuri.</p><p><br></p><p>Jalatrang Muda FC tampil dominan sepanjang pertandingan dan berhasil menyapu bersih laga dengan skor akhir 3-0. Kemenangan gemilang ini sekaligus mengukuhkan dominasi Jalatrang Muda FC yang berhasil mempertahankan gelar juara untuk kedua kalinya secara berturut-turut dalam kompetisi tersebut.</p><p><br></p><p>Tidak hanya memboyong trofi utama, Jalatrang Muda FC juga menorehkan prestasi individu yang membanggakan melalui para pemainnya. Penghargaan Kiper Terbaik (Best Goalkeeper) diraih oleh Sdr. Ujang Rusmana berkat aksi penyelamatan impresifnya di sepanjang turnamen. Sementara itu, penghargaan Pencetak Gol Terbanyak (Top Scorer) diraih oleh Sdr. Haisyam dengan torehan 6 gol selama ajang Buniseuri Championship 2026 berlangsung.</p><p><br></p><p>Laga final yang berlangsung meriah ini turut dihadiri oleh jajaran Forkopimcam atau Muspika serta pemerintah desa setempat, di antaranya Camat Cipaku, Danramil Cipaku, Kapolsek Cipaku, Kepala Desa Buniseuri, Kepala Desa Jalatrang, serta Bhabinkamtibmas dan Babinsa dari Desa Jalatrang dan Desa Buniseuri.</p><p><br></p><p>Dalam kesempatan tersebut, Kepala Desa Jalatrang, Dadi Haryadi, menyampaikan apresiasi setinggi-tingginya atas pencapaian luar biasa yang diraih oleh tim kebanggaan desanya. Ia menyampaikan ucapan selamat dan sukses kepada seluruh jajaran tim Jalatrang Muda FC serta menyatakan kebanggaannya terhadap generasi muda yang berprestasi dan mampu mengharumkan nama Desa Jalatrang di tingkat kecamatan.</p><p><br></p><p>Kemenangan ini diharapkan dapat terus menjadi pemantik semangat bagi generasi muda di Desa Jalatrang untuk terus mengukir prestasi, khususnya di bidang olahraga sepak bola.</p><p><br></p><p>Team Media; Nurhalim</p>
HTML,
            ],
            [
                'judul' => 'Dorong Ketahanan Pangan, Tim PKM Universitas Galuh Terapkan Smart Eco-Agribusiness di Desa Jalatrang',
                'slug' => 'dorong-ketahanan-pangan-tim-pkm-universitas-galuh-terapkan-smart-eco-agribusiness-di-desa-jalatrang',
                'kategori' => 'potensi',
                'gambar' => 'dorong-ketahanan-pangan-tim-pkm-universitas-g.jpg',
                'tanggal' => '2026-08-10',
                'penulis' => 'Dadi Haryadi',
                'dilihat' => 216,
                'tags' => 'desa,pertanian,ketua,jalatrang,pengabdian,galuh,universitas,masyarakat,para,berbasis',
                'isi' => <<<'HTML'
<p><strong><em>JalatrangNews;</em></strong> Tim Pengabdian kepada Masyarakat (PKM) dari Universitas Galuh resmi memulai rangkaian kegiatan pengabdian di Desa Jalatrang, Kecamatan Cipaku, Kabupaten Ciamis. Program ini mengusung tema “Pemberdayaan Berbasis Smart Eco-Agribusiness: Strategi Memperkuat Kemandirian Pangan dan Resiliensi Petani Lokal Melalui Integrasi Mekanisasi Presisi Adaptif.”</p><p>Kegiatan ini dipimpin oleh Saepul Aziz, S.P., M.P., bersama anggota tim Benidzar M. Adrie, S.P., M.P. dan Ir. Zenal Abidin, S.T., M.T. Dalam pelaksanaannya, program pemberdayaan ini merangkul Kelompok Wanita Tani (KWT) Berlian Desa Jalatrang sebagai mitra utama serta melibatkan secara aktif para mahasiswa dari Fakultas Pertanian dan Fakultas Teknik Universitas Galuh sebagai wujud kolaborasi lintas disiplin ilmu.</p><p>Acara yang berlangsung dihadiri oleh: Kepala Desa Jalatrang, Ketua BPD, Ketua KDMP, Babinsa, Bhabinkamtibmas, Kepala UPTD PPKP Wilayah Kawali, Koordinator BPP Cipaku, Ketua Tim Penggerak PKK Desa, Ketua Desa Wisata, Petugas Penyuluh Lapangan (PPL) Kecamatan Cipaku, dan Kelompok Wanita Tani di Desa Jalatrang sebanyak 25 orang.</p><p>Para peserta tampak sangat antusias mengikuti seluruh rangkaian acara dari awal hingga akhir. Semangat tinggi dan keaktifan para anggota KWT Berlian serta jajaran tamu undangan terlihat jelas dalam sesi diskusi interaktif dan pengenalan inovasi teknologi pertanian yang disampaikan oleh tim pengabdian.</p><p>Melalui pendekatan berbasis smart eco-agribusiness dan penerapan mekanisasi pertanian presisi yang adaptif, kegiatan ini dirancang untuk meningkatkan produktivitas serta memperkuat daya tahan (resiliensi) para petani lokal dalam menghadapi tantangan sektor pertanian modern.</p><p>Ketua Tim PKM Universitas Galuh, Saepul Aziz, S.P., M.P., menyampaikan bahwa program ini dapat terlaksana berkat dukungan pendanaan hibah pengabdian masyarakat dari pemerintah.</p><p>"Kami mengucapkan terima kasih yang sebesar-besarnya kepada Direktorat Penelitian dan Pengabdian kepada Masyarakat, Direktorat Jenderal Riset dan Pengembangan, Kementerian Pendidikan Tinggi, Sains, dan Teknologi Republik Indonesia atas kepercayaan dan pendanaan hibah yang diberikan melalui Kontrak No. 207/C3/DT.05.00/PM/2026 || 1446/LL4/PG/2026 || 0872/4123/SP/AK/R/V/2026 Tahun Anggaran 2026," ungkapnya.</p><p>Dukungan pendanaan tersebut menjadi pendorong utama bagi sivitas akademika Universitas Galuh untuk terus menghadirkan inovasi dan solusi nyata berbasis ilmu pengetahuan dan teknologi bagi masyarakat, khususnya sektor pertanian di Kabupaten Ciamis.</p>
HTML,
            ],
            [
                'judul' => 'Desa Jalatrang Gelar Sosialisasi Penyadaran Lingkungan Hidup dan Kehutanan: Hutan Lestari, Sampah Terkendali, Desa Jalatrang Menjadi Asri',
                'slug' => 'desa-jalatrang-gelar-sosialisasi-penyadaran-lingkungan-hidup-dan-kehutanan-hutan-lestari-sampah-terkendali-desa-jalatrang-menjadi-asri',
                'kategori' => 'potensi',
                'gambar' => 'desa-jalatrang-gelar-sosialisasi-penyadaran-l.jpg',
                'tanggal' => '2026-09-09',
                'penulis' => 'system',
                'dilihat' => 250,
                'tags' => 'desa,jalatrang,sampah,masyarakat,lingkungan,kegiatan,hutan,bank,menjaga,materi',
                'isi' => <<<'HTML'
<p><strong><em>JALATRANGNEWS;&nbsp;</em></strong>Pemerintah Desa Jalatrang, Kecamatan Cipaku, Kabupaten Ciamis, melaksanakan kegiatan <strong>Sosialisasi Penyadaran tentang Lingkungan Hidup dan Kehutanan</strong> dengan mengusung tema <strong>&ldquo;Hutan Lestari, Sampah Terkendali, Desa Jalatrang Menjadi Asri.&rdquo;</strong></p>
<p>Kegiatan yang bersumber dari <strong>Dana Desa Tahap 2 Tahun Anggaran 2026</strong> ini dilaksanakan sebagai bagian dari upaya meningkatkan kesadaran dan kepedulian masyarakat terhadap kelestarian lingkungan, khususnya dalam menjaga hutan serta mengelola sampah secara bijak dan berkelanjutan.</p>
<p>Kegiatan tersebut dihadiri oleh <strong>Kepala Desa Jalatrang, Ketua TP PKK Desa Jalatrang, Bhabinkamtibmas Desa Jalatrang, Babinsa Desa Jalatrang, Ketua BPD Desa Jalatrang, Pendamping Desa Jalatrang, serta para Ketua RT se-Desa Jalatrang.</strong></p>
<p></p>
<p><em>Pelaksanaan Sosialisasi Penyadaran tentang Lingkungan Hidup dan Kehutanan Pemerintah Desa Jalatrang, Kecamatan Cipaku, Kabupaten Ciamis.</em></p>
<p>Kegiatan diawali dengan sambutan <strong>Kepala Desa Jalatrang</strong>. Dalam sambutannya, Kepala Desa menyampaikan pentingnya keterlibatan seluruh masyarakat dalam menjaga lingkungan.</p>
<blockquote>
<p>&ldquo;Lingkungan yang bersih, sehat dan lestari tidak dapat terwujud hanya melalui pemerintah desa, tetapi membutuhkan peran serta seluruh masyarakat. Melalui kegiatan ini, kami berharap pengetahuan dan kesadaran masyarakat semakin meningkat, khususnya dalam menjaga kelestarian hutan dan mengelola sampah dari sumbernya.&rdquo; <strong>ujar Dadi Haryadi, Kepala Desa Jalatrang.</strong></p>
</blockquote>
<p>Kepala Desa juga menekankan bahwa pengelolaan sampah bukan hanya persoalan kebersihan, tetapi merupakan bagian dari upaya menciptakan lingkungan desa yang sehat, nyaman dan memiliki nilai manfaat bagi masyarakat.</p>
<p><em>Pemateri dari CDK-VII Penyuluhu Kehutanan, Bank Sampah Induk Ciamis, dan Bank Sampah Unit Jalatrang Berseka</em></p>
<p>Materi pertama disampaikan oleh <strong>Diki Irawan, S.P., Penyuluh Kehutanan CDK-VII</strong>, dengan materi <strong>&ldquo;Hutan dan Kehidupan Kita.&rdquo;</strong></p>
<p>Dalam penyampaiannya, dijelaskan bahwa hutan memiliki peran yang sangat penting dalam kehidupan manusia. Selain sebagai habitat berbagai flora dan fauna, hutan juga berfungsi menjaga keseimbangan ekosistem, menyimpan air, mencegah erosi dan longsor, serta membantu menjaga kualitas udara.</p>
<p>Karena itu, kelestarian hutan perlu dijaga bersama melalui pemanfaatan sumber daya alam secara bijaksana dan tidak melakukan kegiatan yang dapat merusak ekosistem hutan.</p>
<p>Materi kedua disampaikan oleh <strong>Sri Devi Mulyati, S.Pd., dari Bank Sampah Induk Ciamis (BSC)</strong> dengan materi <strong>&ldquo;Klasifikasi Jenis Sampah.&rdquo;</strong></p>
<p>Peserta diberikan pemahaman mengenai pentingnya mengenali dan memilah sampah berdasarkan jenisnya. Pemilahan sejak dari sumber menjadi langkah awal dalam pengelolaan sampah yang efektif karena sampah yang masih memiliki nilai ekonomi dapat dikumpulkan dan dimanfaatkan kembali.</p>
<p>Masyarakat juga didorong untuk membiasakan diri melakukan pemilahan sampah di rumah maupun lingkungan sekitar sehingga sampah tidak seluruhnya berakhir di tempat pembuangan.</p>
<p>Selanjutnya, materi ketiga disampaikan oleh <strong>Abdul Fatah dari Bank Sampah Unit (BSU) Jalatrang Berseka</strong> mengenai <strong>Teknis dan Mekanisme Operasional Bank Sampah Jalatrang Berseka.</strong></p>
<p>Dalam materi tersebut dijelaskan bagaimana mekanisme bank sampah dapat menjadi salah satu solusi dalam pengelolaan sampah berbasis masyarakat. Sampah yang telah dipilah dapat dikumpulkan, ditimbang, dicatat dan memiliki nilai ekonomi bagi masyarakat.</p>
<p>Melalui <strong>Bank Sampah Jalatrang Berseka</strong>, masyarakat diharapkan tidak lagi memandang sampah hanya sebagai barang yang harus dibuang, tetapi sebagai sesuatu yang dapat dikelola dan memberikan manfaat apabila dilakukan dengan sistem yang tepat.</p>
<p><em>Peserta dan narasumber berfoto bersama setelah mengikuti kegiatan sosialisasi lingkungan hidup dan kehutanan Desa Jalatrang.</em></p>
<p>Melalui kegiatan sosialisasi ini, Pemerintah Desa Jalatrang berharap pengetahuan yang diperoleh para peserta dapat diteruskan kepada masyarakat di masing-masing wilayah RT.</p>
<p>Sinergi antara pemerintah desa, lembaga kemasyarakatan, unsur keamanan, pendamping desa dan masyarakat menjadi bagian penting dalam mewujudkan lingkungan yang bersih, sehat dan berkelanjutan.</p>
<p>Dengan semangat <strong>&ldquo;Hutan Lestari, Sampah Terkendali, Desa Jalatrang Menjadi Asri,&rdquo;</strong> Pemerintah Desa Jalatrang terus mendorong lahirnya kesadaran bersama bahwa menjaga lingkungan merupakan tanggung jawab seluruh masyarakat.</p>
<p><strong>Dari hutan yang lestari, sampah yang terkendali, lahirlah Desa Jalatrang yang bersih, sehat, nyaman dan asri.</strong></p>
<p>&nbsp;</p>
HTML,
            ],
            [
                'judul' => 'Jejak Inspiratif Elsa Nuari Hardiana: Srikandi Multitalenta di Balik Pemberdayaan dan Kemajuan Desa Jalatrang',
                'slug' => 'jejak-inspiratif-elsa-nuari-hardiana-srikandi-multitalenta-di-balik-pemberdayaan-dan-kemajuan-desa-jalatrang',
                'kategori' => 'Pendidikan',
                'gambar' => 'jejak-inspiratif-elsa-nuari-hardiana-srikandi.jpeg',
                'tanggal' => '2026-09-24',
                'penulis' => 'Dadi Haryadi',
                'dilihat' => 113,
                'tags' => 'desa,elsa,jalatrang,keluarga,literasi,perempuan,masyarakat,potensi,bagi,multitalenta',
                'isi' => <<<'HTML'
<p><em><strong>JalatrangNews</strong></em>&mdash; Ada perempuan yang memilih bekerja dalam diam, namun jejak pengabdiannya terasa di berbagai lini kehidupan masyarakat. Salah satunya adalah <strong>Elsa Nuari Hardiana, A.Md.AK.</strong>, perempuan inspiratif asal Desa Jalatrang, Kecamatan Cipaku, Kabupaten Ciamis.</p>
<p>Istri dari Kepala Desa Jalatrang, Dadi Haryadi (Asdad), ini dikenal sebagai figur multitalenta yang konsisten menggerakkan roda pemberdayaan masyarakat, mulai dari lingkup keluarga, pariwisata desa, hingga gerakan literasi.</p>
<h2>Dari PKK hingga Penggerak Akar Rumput</h2>
<p>Perjalanan pengabdian Elsa tidak lahir dalam sekejap. Semua bermula dari keterlibatannya secara aktif di dalam Tim Penggerak Pemberdayaan dan Kesejahteraan Keluarga (TP PKK) Desa Jalatrang.</p>
<p>Dari ruang lingkup PKK inilah ia belajar bahwa perubahan besar tidak selalu harus dimulai dari hal yang megah. Sebaliknya, transformasi sosial justru tumbuh paling subur dari unit terkecil, yakni keluarga, serta kepekaan terhadap persoalan nyata di tengah warga.</p>
<h2>Mengangkat Potensi Desa Wisata dan Budaya Lokal</h2>
<p>Konsistensi dan dedikasinya kemudian membawa Elsa melangkah ke ruang yang lebih luas, yakni pengembangan desa wisata. Ia melihat bahwa Desa Jalatrang menyimpan potensi luar biasa, tidak hanya dari keindahan alamnya, tetapi juga dari kreativitas warga dan kekuatan budaya lokal.</p>
<p>Elsa aktif mendorong agar potensi tersebut tidak hanya berhenti sebagai kekayaan lokal yang tersembunyi. Di tangannya, potensi desa dikemas dan diperkenalkan lebih luas agar mampu mendongkrak perekonomian masyarakat sekaligus memperkuat identitas kultural Desa Jalatrang.</p>
<h2>Menebar Manfaat Lewat Gerakan Literasi</h2>
<p>Tak berhenti di situ, langkah perempuan multitalenta ini juga merambah dunia literasi. Bagi Elsa, literasi memiliki makna yang jauh lebih luas daripada sekadar kemampuan membaca dan menulis.</p>
<p>Ia memandang literasi sebagai gerbang utama untuk membuka wawasan, menumbuhkan kepercayaan diri, dan membentuk masyarakat yang peka terhadap berbagai peluang di sekeliling mereka. Baginya, setiap pengalaman baru adalah bekal berharga untuk terus melangkah ke bidang pengabdian berikutnya.</p>
<h2>Membangun Peran Mandiri Tanpa Melupakan Keluarga</h2>
<p>Di balik kesibukannya mendampingi sang suami memimpin desa, Elsa berhasil membangun ruang kontribusinya sendiri. Ia membuktikan bahwa peran seorang pendamping pemimpin daerah dapat diisi dengan aksi nyata yang lahir dari minat dan kapasitas pribadi.</p>
<p>Bagi Elsa, label "multitalenta" bukanlah sekadar sebutan, melainkan sebuah proses tiada henti untuk belajar, beradaptasi, dan berani mengambil tantangan baru. Tentu saja, semua pencapaian ini tidak lepas dari dukungan penuh keluarga tercinta di tengah padatnya jadwal kegiatan sosial.</p>
<p>Kini, nama Elsa Nuari Hardiana telah melekat sebagai bagian dari cerita sukses perempuan desa yang tak lelah bergerak. Bagi sosok yang sering dijuluki sebagai <strong>Srikandi Jalatrang</strong> ini, arti sejati dari sebuah pengabdian bukanlah tentang seberapa banyak penghargaan yang dikumpulkan, melainkan seberapa besar manfaat yang bisa dihadirkan bagi sesama.</p>
<p>Artikel ini sudah dimuat dihalaman :<em>https://lintasmedia.id/berita-ciamis/srikandi-jalatrang-elsa-nuari-hardiana-perempuan-multitalenta-penggerak-desa/</em></p>
<p><em>Team_Media; Nurhalim</em></p>
HTML,
            ],
            [
                'judul' => 'WAHANA JALATRANG MUDA Sabet Juara 1 Domba Cup 2026 Usai Taklukkan Perpu SDR Ciamis',
                'slug' => 'wahana-jalatrang-muda-sabet-juara-1-domba-cup-2026-usai-taklukkan-perpu-sdr-ciamis',
                'kategori' => 'Olahraga',
                'gambar' => 'wahana-jalatrang-muda-sabet-juara-1-domba-cup.jpeg',
                'tanggal' => '2026-09-26',
                'penulis' => 'Dadi Haryadi',
                'dilihat' => 219,
                'tags' => 'voli,bola,turnamen,ciamis,wahana,jalatrang,muda,2026,domba,september',
                'isi' => <<<'HTML'
<p><em>JalatrangNews;</em>&nbsp;Ikatan Volley Ball Cakrabuana Dusun Cidoyang sukses menutup rangkaian turnamen bola voli antar-tim se-Kabupaten Ciamis dengan meriah. Tim <strong>Wahana Jalatrang Muda</strong> keluar sebagai juara pertama dalam ajang <strong>Domba Cup 2026</strong> setelah melalui pertarungan sengit di partai puncak.</p>
<p>Babak final yang dihelat di <strong>Lapangan Bola Voli Putra Galuh Arena, Dusun Cidoyang</strong>, pada <strong>Jumat, 25 September 2026</strong>, mempertemukan dua tim tangguh, yakni <strong>Perpu SDR Ciamis</strong> melawan <strong>Wahana Jalatrang Muda</strong>.</p>
<p>Pertandingan puncak tersebut berlangsung sangat dramatis dan ketat sejak set pertama. Kedua tim saling jual beli serangan demi memperebutkan gelar juara. Namun, lewat perjuangan dan kerja sama tim yang solid, Wahana Jalatrang Muda akhirnya memastikan kemenangan dramatis dengan skor akhir <strong>3-2</strong>.</p>
<p>Atas hasil gemilang ini, Wahana Jalatrang Muda berhak membawa pulang hadiah unik berupa satu ekor domba yang menjadi simbol khas turnamen tersebut.</p>
<p>Selama pertandingan, dipandu langsung oleh announcer atau pemandu acara handal Desa Jalatrang yaitu ALI JAWA yang mewarnai selama Pertandingan menjadi meriah.</p>
<p>Open Turnamen Bola Voli Putra antar-tim se-Kabupaten Ciamis ini sendiri telah diselenggarakan sejak <strong>19 September hingga 25 September 2026</strong>. Ajang ini tidak hanya menjadi wadah kompetisi olahraga untuk menguji kemampuan para atlet voli lokal, tetapi juga menjadi sarana mempererat tali silaturahmi antar-klub bola voli di Kabupaten Ciamis.</p>
<p>Panitia berharap turnamen seperti Domba Cup 2026 ini dapat terus digelar secara rutin setiap tahunnya guna melahirkan bibit-bibit atlet bola voli potensial yang mampu mengharumkan nama daerah di kancah yang lebih tinggi.</p>
<p><em>Team_Media; Nurhalim</em></p>
HTML,
            ],
            [
                'judul' => 'Pemerintah Desa Jalatrang Kukuhkan Desa Siaga TB, Perkuat Kolaborasi Lintas Sektor Basmi Tuberkulosis',
                'slug' => 'pemerintah-desa-jalatrang-kukuhkan-desa-siaga-tb-perkuat-kolaborasi-lintas-sektor-basmi-tuberkulosis',
                'kategori' => 'Pendidikan',
                'gambar' => 'desa-siaga-tb.jpeg',
                'tanggal' => '2026-09-28',
                'penulis' => 'Dadi Haryadi',
                'dilihat' => 109,
                'tags' => 'desa,jalatrang,siaga,serta,pemerintah,kesehatan,masyarakat,pembentukan,dihadiri,tingkat',
                'isi' => <<<'HTML'
<p><em>JalatrangNews;</em> Pemerintah Desa Jalatrang, Kecamatan Cipaku, Kabupaten Ciamis, menunjukkan komitmen nyata dalam meningkatkan kesehatan masyarakat dengan menggelar <strong>Sosialisasi Pencegahan Penyakit Menular (TBC) sekaligus Pembentukan Desa Siaga Tuberkulosis (TB)</strong>. Kegiatan strategis ini diselenggarakan pada Senin, 28 September 2026, di aula desa Jalatrang.</p>
<p>Acara yang dihadiri oleh puluhan pemangku kepentingan tingkat desa ini bertujuan untuk membangun kesadaran kolektif serta memperkuat jejaring deteksi dini penularan TBC langsung dari tingkat akar rumput.</p>
<p>Kepala Desa Jalatrang dalam sambutannya menekankan pentingnya peran aktif seluruh elemen masyarakat dalam memutus mata rantai penyebaran TBC. Pembentukan "Desa Siaga TB" diharapkan mampu menjadi garda terdepan dalam penemuan kasus baru secara cepat dan tepat sehingga penanganan medis dapat segera dilakukan.</p>
<h3>Sinergi Lintas Sektor dan Kehadiran Narasumber Ahli</h3>
<p>Untuk memberikan pemahaman mendalam secara komprehensif, Pemerintah Desa Jalatrang menghadirkan narasumber ahli dari tingkat kecamatan (Sekmat Cipaku) serta tenaga kesehatan profesional Tingkat Kabupaten Ciamis dari <strong>Puskesmas Cipaku</strong>. Materi yang disampaikan meliputi:</p>
<ul>
<li><p>Pengenalan gejala klinis dan metode penularan TBC.</p></li>
<li><p>Langkah-langkah pencegahan serta pentingnya kepatuhan minum obat bagi pasien.</p></li>
<li><p>Mekanisme kerja dan fungsi strategis pembentukan Desa Siaga TB.</p></li>
</ul>
<h3>Dihadiri Unsur Pimpinan dan Kelembagaan Desa</h3>
<p>Kegiatan ini mendapat sambutan antusias dan dihadiri oleh jajaran lengkap Forum Koordinasi Pimpinan Desa serta lembaga kemasyarakatan, di antaranya: Bhabinkamtibmas, Babinsa, Ketua Badan Permusyawaratan Desa (BPD), Ketua KDMP, Pendamping Desa beserta PLD, Direktur Bank Sampah Jalatrang Berseka, Ketua TP PKK Desa Jalatrang, Bidan Desa, TPK Desa dan Seluruh pengurus Posyandu se-Desa Jalatrang</p>
<h3>Transparansi Anggaran dan Komitmen Berkelanjutan</h3>
<p>Pelaksanaan program kesehatan masyarakat ini dibiayai penuh melalui alokasi <strong>Dana Desa (DD) Tahap 2 Tahun Anggaran 2026</strong>. Pemanfaatan Dana Desa ini dinilai sangat tepat sasaran guna mendukung visi pembangunan manusia yang sehat, produktif, dan berdaya saing di Desa Jalatrang.</p>
<p>Melalui pengukuhan Desa Siaga TB ini, Pemerintah Desa Jalatrang optimis dapat menciptakan lingkungan desa yang tanggap, responsif, dan bebas dari stigma negatif terhadap penderita tuberkulosis.</p>
<p>&nbsp;</p>
<p><em>Team_Media; Nurhalim</em></p>
HTML,
            ],
            [
                'judul' => 'Malam Penuh Gengsi Dimulai! 16 Tim Berebut Mahkota Juara di Ajang CVC Cup 2026 Desa Jalatrang',
                'slug' => 'malam-penuh-gengsi-dimulai-16-tim-berebut-mahkota-juara-di-ajang-cvc-cup-2026-desa-jalatrang',
                'kategori' => 'Olahraga',
                'gambar' => 'cvc-cup-2026.jpeg',
                'tanggal' => '2026-09-26',
                'penulis' => 'Dadi Haryadi',
                'dilihat' => 279,
                'tags' => 'cikandung,dusun,2026,voli,desa,jalatrang,cipaku,hingga,kecamatan,malam',
                'isi' => <<<'HTML'
<p><em>JalatrangNews;</em> Himpunan Pemuda-Pemudi Dusun Cikandung yang tergabung dalam <em>Cikandung Voli Ball Club</em> (CVC) resmi menyelenggarakan ajang olahraga bertajuk <strong>CVC Cup 2026</strong>. Turnamen bola voli putra antar-dusun se-Kecamatan Cipaku ini resmi dibuka pada Sabtu, 26 September 2026, dan dijadwalkan berlangsung hingga 10 Oktober 2026.</p>
<p>Pembukaan turnamen yang dipusatkan di Lapangan Bola Voli CVC, Dusun Cikandung, Desa Jalatrang, ini dibuka secara langsung oleh Kepala Desa Jalatrang, Dadi Haryadi.</p>
<p>Dalam sambutannya, Dadi Haryadi mengapresiasi tinggi inisiatif para pemuda Dusun Cikandung yang sukses menggerakkan kegiatan positif berskala kecamatan ini. "Ajang ini bukan hanya sekadar mencari siapa yang menang atau kalah, tetapi menjadi momentum penting untuk mempererat silaturahmi, sportivitas, dan menggali bibit-bibit atlet bola voli potensial di wilayah Kecamatan Cipaku," ujar Dadi.</p>
<h3>Panggung Pembuktian 16 Tim Terbaik</h3>
<p>Sebanyak <strong>16 tim terbaik</strong> dari berbagai dusun di Kecamatan Cipaku dipastikan siap saling sikut demi memperebutkan mahkota juara. Atmosfer kompetisi dijamin bakal membara setiap malam mulai pukul 19.30 WIB hingga partai puncak pada <strong>10 Oktober 2026</strong>.</p>
<p>Tak tanggung-tanggung, jalannya pertandingan tiap malam dijamin makin hidup dan bergemuruh berkat kehadiran reporter andalan Desa Jalatrang, Ali Jawa, yang memandu jalannya laga dengan gaya komentarnya yang khas dan memompa adrenalin penonton.</p>
<h3>Dihadiri Tokoh Penting hingga Pengusaha Lokal</h3>
<p>Malam pembukaan CVC Cup 2026 kian terasa istimewa dengan hadirnya jajaran penting pemangku wilayah. Tampak memadati arena: Bhabinkamtibmas Desa Jalatrang, tokoh masyarakat, tokoh agama, tokoh pemuda, Kepala Dusun Cikandung, para pengusaha lokal Dusun Cikandung yang turut mendukung penuh acara, Ketua BPD Desa Jalatrang, hingga jajaran ketua RT dan RW se-Dusun Cikandung yang bahu-membahu menyukseskan acara.</p>
<p>Ajang CVC Cup 2026 kini resmi menabuh genderang perang sportivitas. Siapakah tim yang akan keluar sebagai penguasa voli baru di Kecamatan Cipaku? Saksikan keseruannya langsung setiap malam di Lapangan CVC Dusun Cikandung!</p>
<p>&nbsp;</p>
<p><em>Team_Media; Nurhalim</em></p>
HTML,
            ],
        ];
    }
}
