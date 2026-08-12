<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Novel;
use App\Models\Chapter;

class NovelChroniclesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $novel = Novel::create([
            'user_id' => 1,
            'world_id' => 1,
            'title' => 'Chronicles of the Fallen Throne: Requiem of Eldoria',
            'genre' => 'dark_fantasy',
            'status' => 'ongoing',
            'view_count' => 15800,
            'synopsis' => <<<EOT
Di benua Eldoria yang luas dan dulunya megah, tahta kerajaan Luminara telah berdiri kokoh selama berabad-abad, menjadi simbol perdamaian, kemakmuran, dan keadilan bagi seluruh ras yang bernaung di bawahnya. Namun, segalanya berubah dalam satu malam berdarah ketika Raja Aldric, penguasa yang paling bijaksana, tewas dibunuh secara keji. Pengkhianatan itu tidak datang dari musuh luar, melainkan dari orang kepercayaannya sendiri—Panglima Vareth. Dengan bantuan sihir hitam dan ambisi tak berujung, Vareth merebut tahta.

Sang putra mahkota, Elric Aldaren, adalah satu-satunya yang selamat dari pembantaian keluarga kerajaan. Berkat pengorbanan heroik para pengawal setianya, Elric berhasil melarikan diri ke pinggiran benua. Kini, dengan luka yang mendalam dan identitas yang disembunyikan, ia bersumpah untuk merebut kembali tahtanya.

Namun perjalanan itu tidak akan mudah. Eldoria kini dikuasai oleh tirani Vareth, dipenuhi oleh monster buas, korupsi sihir yang merusak alam, dan faksi-faksi yang saling berperang. Bersama sekelompok pejuang, Elric memulai perjalanan berbahaya untuk memulihkan cahaya Luminara, atau Eldoria akan selamanya tenggelam dalam kegelapan.
EOT
        ]);

        $chapters = [
            [
                'title' => 'Malam Berdarah di Luminara',
                'content' => <<<EOT
Angin malam berhembus dingin melintasi menara-menara tinggi Istana Luminara, membawa serta aroma besi dan anyir darah yang tak lazim. Di dalam aula tahta yang biasanya terang benderang oleh sihir kristal, kini hanya ada keremangan yang mencekam. Lilin-lilin raksasa yang mengelilingi ruangan padam satu per satu, seolah nyala mereka ditekan oleh kehadiran sesuatu yang jahat. Raja Aldric duduk di singgasananya, wajahnya yang biasanya tenang kini menegang. Pedang pusakanya, Sunbreaker, tergeletak di sisinya, belum sempat dihunus.

Pintu ganda aula yang terbuat dari kayu oak berukir emas hancur berkeping-keping. Dari balik debu dan serpihan kayu, melangkah masuk Panglima Vareth, bayangannya memanjang di lantai marmer yang mengilap. Mata Vareth yang dulunya memancarkan kesetiaan, kini menyala dengan warna merah menyala, tanda nyata dari korupsi sihir hitam yang menguasainya. Di belakangnya, puluhan prajurit elit kerajaan yang telah dicuci otaknya berdiri kaku, ujung tombak mereka berkilat kejam di bawah cahaya bulan yang menembus jendela kaca patri.

"Apa artinya ini, Vareth?" suara Raja Aldric menggema, penuh otoritas dan kekecewaan yang mendalam. "Kau, yang telah kuanggap seperti saudaraku sendiri, berani menodai aula suci ini dengan darah dan pengkhianatan?"

Vareth tertawa, suaranya parau dan menggema, seolah ada dua entitas yang berbicara bersamaan. "Persaudaraan adalah ilusi bagi mereka yang lemah, Yang Mulia. Eldoria membutuhkan penguasa yang berani mengambil langkah dalam bayang-bayang, bukan raja yang terlalu sibuk bermimpi tentang kedamaian yang semu."

Di sayap timur istana, Pangeran Elric terbangun oleh suara dentang baja dan jeritan memilukan. Pengawalnya, Kaelen, mendobrak pintu kamar sang pangeran dengan zirah berlumuran darah. "Pangeran! Kita harus pergi sekarang! Panglima Vareth telah mengkhianati kita. Baginda Raja..." Kaelen tidak bisa menyelesaikan kalimatnya, suaranya tercekat.

Elric, dengan jantung berdebar kencang, meraih jubah dan pedang latihannya. Matanya membelalak tak percaya. "Ayah? Tidak, aku tidak akan meninggalkannya!"

"Ini adalah perintah terakhir ayahmu!" Kaelen mencengkeram bahu Elric kuat-kuat. "Jika kau mati, harapan Luminara hancur. Kau adalah darah terakhir garis keturunan Aldaren. Berlarilah, Pangeran!"

Malam itu, di tengah hujan panah dan benturan logam, Elric ditarik paksa melewati lorong-lorong rahasia istana. Ia bisa mendengar suara tawa iblis Vareth yang menggelegar saat pedang sang pengkhianat menembus dada Raja Aldric. Tangisan Elric tertahan di tenggorokannya. Api mulai melahap pilar-pilar istana, menandai runtuhnya era keemasan Luminara. Dengan setiap langkah pelariannya ke dalam malam yang pekat, Elric bersumpah di atas darah keluarganya, ia akan kembali. Ia akan menebas kepala Vareth dan mengembalikan cahaya ke tanah kelahirannya, tak peduli berapa lama waktu yang dibutuhkan atau seberapa gelap jalan yang harus ia tempuh.
EOT
            ],
            [
                'title' => 'Pelarian Sang Putra Mahkota',
                'content' => <<<EOT
Hutan Whisperwood, yang dulunya menjadi tempat perburuan favorit para bangsawan, kini terasa seperti labirin kematian. Pepohonan raksasa yang cabangnya saling merajut menutupi cahaya rembulan, menciptakan bayangan-bayangan menakutkan yang seolah hidup dan mengintai dari segala arah. Elric berlari terengah-engah, paru-parunya terbakar, kakinya tersandung akar-akar yang menonjol. Di kejauhan, suara lolongan anjing pelacak bercampur dengan teriakan kasar pasukan Vareth yang tak kenal lelah mengejarnya.

Kaelen telah gugur di gerbang selatan, mengorbankan nyawanya demi menahan sepasukan penuh prajurit korup agar Elric bisa lolos. Rasa bersalah menghimpit dada sang pangeran muda. Ia, pewaris takhta, kini luntang-lantung seperti seorang buronan hina, pakaiannya koyak dan kotor oleh lumpur.

Tiba-tiba, dari kegelapan di depannya, sesosok bayangan berkelebat cepat. Elric menghunus pedangnya, bersiap menghadapi serangan. Namun, alih-alih prajurit Vareth, seorang wanita muda melompat turun dari dahan rendah. Ia mengenakan jubah hijau lumut yang membuatnya membaur sempurna dengan lingkungan hutan. Busur panjang yang elegan berada dalam genggamannya, dan sebatang anak panah telah terpasang, diarahkan tepat ke arah pepohonan di belakang Elric.

"Menunduk!" perintahnya dengan nada tajam.

Secara refleks, Elric menjatuhkan diri ke tanah. Suara desingan anak panah membelah udara, diikuti oleh jeritan kesakitan dari salah satu prajurit pengejar yang baru saja muncul dari semak-semak. Anak panah itu menembus celah zirah di leher prajurit tersebut. Dalam hitungan detik, wanita itu melepaskan tiga anak panah lagi, menjatuhkan tiga pengejar lainnya dengan akurasi yang mematikan.

"Siapa kau?" tanya Elric, napasnya masih memburu, saat ia perlahan bangkit.

Wanita itu menurunkan busurnya dan menatap Elric dengan sepasang mata sebiru es, dingin namun penuh perhitungan. "Namaku Lyra. Dan kau, Putra Mahkota Elric, membuat terlalu banyak suara. Jika kau ingin hidup untuk melihat fajar, kau harus belajar bergerak seperti hantu di hutan ini."

"Kau tahu siapa aku?" Elric terkejut.

"Seluruh benua akan segera tahu. Vareth telah menyebarkan berita bahwa raja telah mati dan kau dituduh sebagai pembunuhnya yang melarikan diri," Lyra menjelaskan dengan tenang. "Sekarang, ikut denganku. Hutan ini tidak ramah pada pendatang baru, dan anjing-anjing itu tidak akan berhenti sampai mereka mencicipi darah kerajaan."

Tanpa pilihan lain, Elric mengikuti langkah sunyi Lyra yang lincah menavigasi bagian hutan yang paling berbahaya. Dalam keheningan pelarian mereka, Elric menyadari bahwa dunia yang ia kenal telah lenyap. Tidak ada lagi rasa hormat, tidak ada lagi kenyamanan. Yang tersisa hanyalah naluri untuk bertahan hidup, dan dendam yang membara perlahan di dalam dadanya.
EOT
            ],
            [
                'title' => 'Desa yang Terlupakan',
                'content' => <<<EOT
Setelah tiga hari berjalan tanpa henti, bertahan dengan sedikit makanan yang dibawa Lyra dan air dari sungai-sungai kecil, mereka akhirnya tiba di tepi Hutan Whisperwood. Di balik kabut tipis pagi hari, tersembunyi di lembah kecil yang dikelilingi tebing-tebing terjal, terdapat sebuah desa yang tampak kumuh namun penuh kehidupan yang sepi. Tidak ada bendera berlambang kerajaan Luminara di sini; desa ini seolah lepas dari peta dan ingatan.

"Selamat datang di Oakhaven," kata Lyra, menurunkan tudungnya saat mereka melangkah melewati gerbang kayu yang reyot. "Tempat di mana mereka yang tidak ingin ditemukan, bersembunyi."

Mata penduduk desa yang tajam namun penuh kehati-hatian mengawasi setiap langkah Elric. Mereka mengenakan pakaian usang, wajah mereka diselimuti debu dan penderitaan. Namun, Elric bisa melihat kilat keberanian di mata beberapa orang tua, mengingatkannya pada para prajurit veteran yang sering ia lihat di aula latihan istana dulu.

Lyra membawa Elric ke sebuah pondok batu di ujung desa. Suara dentingan palu bertalu-talu menghantam besi panas terdengar jelas, menciptakan irama yang konstan. Di dalam, di depan tungku perapian raksasa, berdiri seorang pria tua berlengan kekar dengan banyak bekas luka. Rambut dan janggutnya yang memutih tak menutupi aura kekuatannya.

"Gareth," panggil Lyra. Pria tua itu menghentikan ayunan palunya, menoleh perlahan. Matanya yang tajam langsung terpaku pada Elric. Suasana menjadi hening seketika.

Palu di tangan Gareth tergelincir, jatuh menghantam lantai tanah dengan bunyi keras. Pria yang tampak tegar itu tiba-tiba jatuh berlutut di hadapan Elric.

"Pangeran Elric..." suara Gareth bergetar, penuh emosi yang tertahan. "Demi para dewa yang tersisa, kau masih hidup."

Elric mundur selangkah, terkejut. "Kau mengenalku? Siapa kau?"

Gareth mendongak, matanya berkaca-kaca. "Saya adalah mantan Jenderal Pasukan Garda Barat, Yang Mulia. Saya mengabdi pada mendiang kakek Anda, dan ayah Anda. Ketika Vareth mulai meracuni pikiran para pejabat tinggi istana lima tahun lalu, saya diasingkan karena menentangnya. Saya telah menunggu hari ini... hari di mana darah Aldaren yang sah kembali untuk menuntut apa yang menjadi haknya."

Desa Oakhaven, yang tampaknya hanyalah tempat para buangan, ternyata adalah tempat berkumpulnya loyalis-loyalis tua yang tersingkirkan oleh intrik politik Vareth. Di tempat inilah, untuk pertama kalinya sejak malam berdarah itu, Elric merasakan secercah harapan. Ia tidak sendirian.
EOT
            ],
            [
                'title' => 'Pedang dari Abu',
                'content' => <<<EOT
Di bawah langit kelabu Oakhaven, latihan Elric dimulai. Gareth, meski usianya tak lagi muda, adalah seorang instruktur yang tanpa ampun. Setiap fajar sebelum matahari terbit, Elric sudah berada di lapangan berlumpur, mengayunkan pedang kayu berat yang dirancang khusus untuk memperkuat lengannya.

"Posisi kakimu terlalu lebar, Pangeran!" bentak Gareth seraya menyapu kaki Elric dengan tongkat kayunya, menjatuhkan sang pangeran ke tanah liat yang kotor. "Musuh tidak akan memberimu waktu untuk mencari keseimbangan. Vareth bergerak secepat bayangan dan memukul sekeras badai."

Elric meludah kotoran dari mulutnya, bangkit dengan gigi terkatup, dan kembali memasang kuda-kuda. Lyra sering memperhatikan dari kejauhan sambil membersihkan panah-panahnya, kadang tersenyum tipis melihat kejatuhan sang pangeran, tapi ada sorot simpati di matanya.

Suatu malam, Gareth memanggil Elric ke tempat penempaannya. Tungku menyala lebih panas dari biasanya, mengubah ruangan menjadi merah membara. Di atas landasan tempa, terletak pecahan-pecahan logam kebiruan yang memancarkan aura magis yang redup.

"Ini adalah pecahan dari *Aetherium*, material yang sama yang digunakan untuk menempa pedang leluhurmu, Sunbreaker," jelas Gareth, tangannya yang kapalan membelai logam itu. "Logam ini saya temukan di reruntuhan kuil lama. Saya akan menempanya menjadi senjata untukmu. Tapi ketahuilah, pedang ini hanya akan sekuat tekad penggunanya."

Selama tiga hari tiga malam, Gareth bekerja tanpa henti. Suara palu yang menghantam baja bernyanyi di seluruh desa. Ketika akhirnya selesai, pedang itu memiliki bilah hitam legam dengan guratan biru yang berpendar pelan saat cahaya mengenainya. Bentuknya lebih ramping dari Sunbreaker, dirancang untuk kecepatan dan presisi mematikan.

Ketika Elric meraih gagangnya, aliran energi yang kuat menjalar ke seluruh lengannya, seolah pedang itu hidup dan mengenali darah kerajaannya. "Aku menamainya *Nightfall*," gumam Elric, matanya memantulkan cahaya biru pedang itu. "Karena ia akan membawa malam panjang bagi masa pemerintahan Vareth."

"Senjata yang bagus," kata Lyra yang tiba-tiba muncul di ambang pintu. "Tapi pedang saja tak akan cukup untuk melintasi Pegunungan Frostbite, apalagi mengalahkan pasukan Vareth."

"Maka kita akan menemukan sekutu," jawab Elric, mengangkat Nightfall. "Kita menuju utara, ke Kuil Cahaya Pertama."
EOT
            ],
            [
                'title' => 'Bayangan di Pegunungan Frostbite',
                'content' => <<<EOT
Angin sedingin es menyayat wajah mereka saat rombongan kecil itu mulai mendaki Pegunungan Frostbite. Pegunungan ini adalah penghalang alam yang memisahkan bagian selatan Eldoria yang subur dengan dataran tinggi utara yang misterius. Salju abadi menutupi lanskap, dan badai bisa datang tiba-tiba, membutakan siapa pun yang kurang waspada.

Elric, Lyra, dan Gareth berjalan beriringan, mengenakan jubah bulu beruang yang tebal. Napas mereka membeku di udara.

"Kita harus terus bergerak," teriak Lyra, suaranya hampir tenggelam oleh deru angin. "Jika kita berhenti lebih dari lima belas menit, darah kita akan membeku."

Tantangan alam bukanlah satu-satunya ancaman di sini. Saat senja mulai turun, bayangan di antara puncak-puncak es tampak bergerak. Geraman parau terdengar menggema dari lembah bersalju di bawah mereka.

"Frostwolves," bisik Gareth, menarik kapak perang berukuran besar dari punggungnya. Serigala es adalah makhluk buas berbulu putih dengan cakar es yang bisa merobek baju zirah. Mereka memburu dalam kawanan yang dikendalikan oleh insting membunuh.

Dalam sekejap, belasan Frostwolves melompat keluar dari balik tumpukan salju. Elric menghunus Nightfall. Pedang hitam itu memancarkan panas samar, sihir dalam logamnya merespons suhu beku di sekitarnya.

Pertarungan berlangsung cepat dan brutal. Lyra melepaskan panah-panah berujung api yang ia persiapkan, masing-masing tembakan tepat menembus mata serigala-serigala buas itu. Gareth mengayunkan kapaknya, membelah tubuh serigala yang menerjangnya dengan kekuatan mengerikan.

Elric bertarung dengan kelincahan yang baru ia pelajari, menebas dan menangkis. Saat seekor serigala raksasa—pemimpin kawanan—menerjangnya, Elric memusatkan pikirannya. Aliran panas dari pedangnya tiba-tiba membesar, dan dengan tebasan kuat, gelombang energi kebiruan melesat dari bilah pedangnya, membelah serigala raksasa itu menjadi dua dan melelehkan salju di sekitarnya.

Gareth dan Lyra menatap Elric dengan takjub. Pangeran itu telah membangkitkan bakat sihir kuno keturunan Aldaren, sihir elemen murni yang lama dianggap mitos.

"Gua rahasianya tidak jauh dari sini," kata Lyra setelah memulihkan diri. "Kita berlindung di sana."
Di dalam gua yang dihiasi stalaktit es, mereka menemukan lebih dari sekadar tempat berlindung. Di dinding gua, terukir peta kuno bersinar yang menunjukkan jalan rahasia menuju Kuil Cahaya Pertama. Perjalanan sejati baru saja dimulai.
EOT
            ],
            [
                'title' => 'Kuil Cahaya Pertama',
                'content' => <<<EOT
Pintu masuk Kuil Cahaya Pertama tersembunyi di balik tirai air terjun beku raksasa. Pilar-pilar marmer putih yang menjulang tinggi, meski sebagian telah hancur termakan usia, masih memancarkan kemegahan yang membuat siapa pun merasa kecil. Ini adalah tempat di mana pendiri kerajaan Luminara, Raja Aldaren yang Pertama, dikatakan menerima anugerah dari dewa cahaya.

Suasana di dalam kuil sangat sunyi, hanya terdengar gema langkah kaki mereka di atas ubin batu. Altar raksasa di ujung ruangan terbuat dari emas murni yang tak ternoda.

"Ini adalah tempat suci, Pangeran. Hanya garis keturunan langsung yang bisa mengaktifkan mekanisme utamanya," kata Gareth dengan hormat.

Elric melangkah maju perlahan. Saat tangannya menyentuh permukaan altar, ukiran kuno di lantai tiba-tiba bercahaya keemasan. Ruangan itu bergetar halus. Seketika, pikiran Elric tertarik dari tubuhnya, membawanya ke dalam dimensi penglihatan spiritual.

Ia melihat sejarah yang disembunyikan. Ia melihat ayahnya, Raja Aldric muda, berdiri di altar yang sama bertahun-tahun lalu, berdebat dengan seorang pria berjubah gelap—Panglima Vareth muda. Mereka menemukan sebuah artefak terlarang di kedalaman kuil ini: *Jantung Kehampaan*, sumber kekuatan magis tanpa batas, namun juga sumber kejahatan absolut. Ayahnya memerintahkan artefak itu dikunci selamanya, namun Vareth secara diam-diam menginginkan kekuatannya.

Visi itu berubah, menunjukkan Vareth yang perlahan dirusak oleh artefak tersebut, ambisinya berubah menjadi kegilaan megalomania yang akhirnya berujung pada malam pengkhianatan itu.

"Ayah... kau mencoba melindunginya," bisik Elric dalam visinya. Tiba-tiba, suara agung bergema di pikirannya.

*Kekuatan tanpa kebijaksanaan adalah kehancuran. Cahaya hanya bisa bersinar paling terang di tengah kegelapan terdalam. Ambillah warisanmu, Pewaris Tahta.*

Elric tersadar dengan napas memburu. Di atas altar, sebuah bola kristal bercahaya cemerlang kini melayang. *The Lumina Core*. Elric mengambilnya perlahan, dan cahaya hangat langsung meresap ke dalam nadinya, memperkuat kemampuan sihir yang baru saja ia temukan.

"Kita sudah mendapatkan apa yang kita cari," kata Elric, tatapannya kini jauh lebih dewasa dan tajam. "Sekarang, saatnya mencari pasukan. Kita menuju ke timur, ke Stepa Timur."
EOT
            ],
            [
                'title' => 'Aliansi yang Rapuh',
                'content' => <<<EOT
Stepa Timur adalah daratan luas berumput kering yang membentang hingga ke cakrawala. Angin kencang bertiup membawa debu dan aroma tanah. Di sinilah Klan Nomad berkuasa—para penunggang kuda tangguh yang tak pernah tunduk pada hukum Istana Luminara secara penuh, meski mereka memiliki perjanjian damai.

Perkemahan utama klan tampak seperti lautan tenda kulit hewan besar, dipimpin oleh Kepala Suku Kael'thas yang ditakuti. Mereka segera dikepung oleh puluhan penunggang kuda bersenjata tombak saat mendekati perkemahan.

"Pangeran Luminara di tanahku? Ini adalah kejutan, mengingat rajamu sudah mati dan kau dikabarkan sebagai pembunuhnya," suara berat Kael'thas menggema saat ia melangkah keluar dari tenda utamanya. Ia adalah pria raksasa dengan tato perang menutupi separuh wajahnya.

"Itu adalah kebohongan Vareth," jawab Elric dengan suara lantang, berusaha menutupi rasa gugupnya. "Aku datang untuk menagih Sumpah Darah kuno antara Klan Nomad dan keluargaku. Kami butuh prajuritmu untuk merebut kembali ibu kota."

Kael'thas tertawa meremehkan. "Sumpah Darah itu mengikat pada raja yang kuat, bukan bocah pelarian. Kenapa aku harus mengorbankan prajuritku untuk perang yang bukan milik kami?"

"Karena Vareth tidak akan berhenti di Luminara," Lyra melangkah maju. "Sihir gelapnya meluas. Sebentar lagi, monster-monsternya akan mencapai stepa ini, dan kudamu tidak akan bisa berlari lebih cepat dari kegelapan."

Kepala suku itu terdiam sejenak, merenungkan perkataan Lyra. "Kata-kata manis tidak membuktikan apa-apa. Di klan kami, kekuatan adalah satu-satunya hukum. Jika kau menginginkan pasukanku, Pangeran, buktikan kelayakanmu di Arena Lingkaran Darah."

Malam itu, di bawah cahaya obor dan sorakan liar para nomad, Elric berdiri di tengah arena melingkar yang dibatasi tombak. Lawannya adalah juara klan, seorang petarung berbadan tegap dengan dua pedang melengkung.

Pertarungan itu brutal. Elric harus mengandalkan kecepatan *Nightfall* dan ketangkasan hasil latihannya dengan Lyra dan Gareth. Sang juara sangat agresif, menyudutkan Elric beberapa kali hingga lengannya tergores dalam. Namun, saat juara itu melompat untuk pukulan mematikan, Elric menggunakan sihir barunya—aliran panas berpadu dengan cahaya *Lumina Core* membuat pandangan lawannya silau sesaat, memberikan Elric celah untuk menjatuhkannya tanpa membunuh.

Elric menodongkan pedangnya ke leher juara yang terjatuh, lalu menyarungkan *Nightfall*. "Aku datang mencari sekutu, bukan musuh."

Sorakan yang hening sedetik berubah menjadi gemuruh tepuk tangan. Kael'thas tersenyum lebar. "Bocah ini punya tulang baja. Klan Nomad akan berkendara bersamamu, Elric Aldaren."
EOT
            ],
            [
                'title' => 'Pengkhianatan Pertama',
                'content' => <<<EOT
Kemenangan di Stepa Timur membawa semangat baru bagi kelompok itu. Pasukan Nomad bersiap untuk mobilisasi. Namun, euforia itu tidak bertahan lama. Elric telah menerima kabar buruk: rute suplai rahasia menuju pasukan sekutu mereka di selatan tiba-tiba disergap oleh pasukan Vareth. Rute itu hanya diketahui oleh segelintir orang.

Ada mata-mata di antara mereka.

Di tenda komando, Elric memandang peta wilayah, ekspresinya suram. Gareth, Lyra, dan beberapa jenderal klan hadir. "Seseorang telah membocorkan informasi pergerakan kita," kata Elric dingin.

Kecurigaan mulai meracuni kelompok itu. Para jenderal klan menatap tajam ke arah Gareth, mencurigai veteran istana itu. Sementara Gareth mencurigai beberapa pembelot baru yang baru bergabung minggu lalu.

Ketegangan memuncak malam harinya. Saat Elric berjalan sendirian di pinggiran perkemahan untuk menenangkan pikiran, ia mendengar suara bisikan pelan dari balik pepohonan kering. Ia mengendap-endap dan mengintip. Jantungnya serasa berhenti berdetak.

Itu adalah salah satu kapten Gareth, pria bernama Rokan yang telah mendampingi Gareth selama masa pengasingan. Rokan sedang berkomunikasi melalui batu kristal gelap—benda sihir yang sering digunakan oleh agen bayangan Vareth.

"Posisi mereka ada di Stepa Timur. Mereka telah merekrut para Nomad," lapor Rokan pada bayangan di kristal itu.

"Kerja bagus," balas suara desis di kristal itu. "Hadiahmu menanti di ibu kota."

Elric melangkah keluar, amarah mendidih dalam darahnya. "Rokan!"

Pria itu berbalik kaget, menjatuhkan batu kristal itu. Ia segera menghunus pisau belatinya dengan putus asa. "Kau tidak mengerti, Pangeran! Vareth menyandera keluargaku di ruang bawah tanah istana! Aku tak punya pilihan!"

"Pengkhianatan tetaplah pengkhianatan, tak peduli alasannya," suara berat Gareth terdengar dari belakang Elric. Veteran itu melangkah maju, wajahnya memerah karena malu dan marah anak buahnya sendiri berkhianat. 

Dengan berat hati, Gareth mengayunkan kapaknya, mengeksekusi Rokan di tempat. Eksekusi ini meninggalkan luka psikologis yang dalam. Kelompok mereka selamat dari jebakan musuh, tetapi kepercayaan di antara mereka telah retak. Elric menyadari betapa panjangnya jangkauan Vareth, dan bahwa dalam perang ini, musuh terbesar mungkin ada di sisinya sendiri.
EOT
            ],
            [
                'title' => 'Kota Bebas Ravenport',
                'content' => <<<EOT
Perjalanan berlanjut ke barat daya menuju pesisir. Ravenport adalah kota pelabuhan yang megah, pusat perdagangan utama benua Eldoria yang menyatakan diri merdeka dari yurisdiksi Luminara. Jalanannya sempit, berliku, dan dipenuhi oleh pedagang rempah, tentara bayaran, dan pencuri.

Elric dan kelompok intinya datang menyamar sebagai pedagang tentara bayaran. Tujuan mereka adalah mencari dukungan finansial dan senjata siege—katapel raksasa dan balista yang hanya diproduksi di bengkel-bengkel bawah tanah Ravenport.

"Jangan pernah mempercayai senyuman di kota ini," Lyra memperingatkan saat mereka berjalan melewati pasar ikan yang ramai. "Di sini, setiap rahasia ada harganya."

Mereka menuju sebuah kedai remang-remang bernama "The Black Anchor" untuk menemui kontak rahasia—seorang pemimpin serikat pencuri bernama Sylas. Sylas adalah pria kurus licik dengan senyum sinis yang selalu menghiasi wajahnya.

"Ah, pewaris tahta yang hilang," Sylas menyeringai, bersandar di kursinya. "Desas-desus mengatakan kau sudah mati dimakan anjing di hutan. Senang melihatmu utuh."

"Aku butuh senjata siege dan akses ke jaringan penyelundupmu untuk menyelusup ke wilayah Vareth," kata Elric, meletakkan kantong berisi emas yang diberikan oleh Klan Nomad ke atas meja.

Sylas menimbang kantong itu dengan tangannya. "Ini cukup untuk membeli sepasukan tentara bayaran biasa, Nak. Tapi untuk melawan Vareth? Pria itu menggunakan sihir hitam yang membuat senjataku terlihat seperti mainan anak-anak. Namun... jika kau bisa membantuku membereskan masalah kecil dengan penguasa pelabuhan yang korup, kita bisa membuat kesepakatan."

Masalah kecil itu ternyata adalah operasi pembunuhan yang rumit. Elric harus menyusup ke pesta topeng bangsawan di vila penguasa pelabuhan untuk mencuri dokumen penting yang akan memeras penguasa tersebut agar mendukung mereka. Di pesta yang penuh dengan kemewahan palsu dan intrik tingkat tinggi itu, Elric belajar bahwa pedang tidak selalu menjadi senjata paling mematikan. Kata-kata, diplomasi, dan intrik politik terbukti sama tajamnya.

Dengan dokumen di tangan setelah melarikan diri secara dramatis melintasi atap-atap kota bersama Lyra, Elric mendapatkan akses penuh ke gudang persenjataan Ravenport. Pasukannya kini mulai terlihat seperti ancaman nyata bagi rezim Vareth.
EOT
            ],
            [
                'title' => 'Sayap Naga Merah',
                'content' => <<<EOT
Sebelum melancarkan serangan pertama mereka, Sylas memberi mereka sebuah petunjuk berharga tentang penemuan aneh di sebuah reruntuhan kuil vulkanik di luar batas kota Ravenport. Menurut desas-desus, para penambang liar menemukan sebuah batu raksasa bersisik yang memancarkan hawa panas luar biasa.

Mengingat legenda lama tentang hubungan kuno antara keluarga kerajaan Aldaren dan ras naga yang telah punah ratusan tahun lalu, Elric memutuskan untuk memeriksanya. Reruntuhan itu dipenuhi oleh abu vulkanik dan sungai-sungai kecil lahar pijar.

Di pusat reruntuhan, di atas altar batu obsidian, terletak sebuah telur besar bersisik merah tua. Urat-urat bersinar seperti lava berdenyut di permukaannya. Sejenak, Elric merasakan tarikan aneh, resonansi ajaib antara *Lumina Core* di dalam dirinya dan kehidupan yang tertidur di dalam telur tersebut.

Saat Elric mendekat dan meletakkan tangannya yang berlapis zirah ringan di atas telur, cangkang itu mulai retak. Suara gemeretak yang memekakkan telinga bergema di dalam gua. Retakan melebar, memancarkan cahaya merah yang membutakan, hingga akhirnya cangkang itu pecah sepenuhnya.

Seekor anak naga merah dengan sayap berselaput tebal dan mata emas menyala merangkak keluar. Ukurannya hanya sebesar anjing penjaga, namun aura kekuatannya membuat Gareth dan Lyra mundur beberapa langkah. Naga kecil itu mengendus udara, menatap Elric, dan mengeluarkan dengkuran pelan sebelum menggesekkan kepalanya yang bersisik ke tangan Elric.

Ikatan magis terbentuk saat itu juga. Elric bisa merasakan emosi naga itu, sebuah ikatan jiwa yang langka dan kuat.

"Ignis," bisik Elric, memberikan nama pada sahabat barunya. "Itu namamu."

Penemuan naga ini bukan hanya sekadar menambah sekutu yang kuat. Dalam legenda, naga adalah simbol sejati kekuasaan sah di Eldoria. Berita tentang Elric yang berhasil menetaskan naga merah dengan cepat menyebar seperti api liar ke seluruh benua. Harapan mekar di hati rakyat jelata yang tertindas. Simbol perlawanan telah lahir sepenuhnya, dan pasukan Elric yang tadinya hanya pemberontak, kini dilihat sebagai pasukan pembebasan yang dipimpin oleh raja yang ditakdirkan.
EOT
            ],
            [
                'title' => 'Perang Pertama: Benteng Ironhold',
                'content' => <<<EOT
Benteng Ironhold adalah kunci untuk memasuki dataran tengah menuju ibu kota. Benteng ini dibangun menempel di sisi tebing jurang yang dalam, tak tertembus, dan dijaga oleh dua ribu prajurit korup serta monster *gargoyle* bayangan ciptaan Vareth.

Pasukan aliansi Elric, yang terdiri dari kavaleri Nomad, infantri dari Oakhaven, dan mesin kepung dari Ravenport, bersiap di padang rumput di bawah benteng. Udara terasa berat oleh ketegangan. Genderang perang ditabuh bertalu-talu.

Elric memimpin di garis depan, menunggangi kuda perang berbaju zirah, dengan Ignis yang kini tumbuh seukuran kuda kecil terbang berputar-putar di atasnya, menyemburkan api ke udara sebagai tantangan.

"Untuk Luminara! Untuk Eldoria yang bebas!" teriak Elric, mengangkat *Nightfall* tinggi-tinggi. Sorakan pasukannya menggelegar mengalahkan suara guntur.

Pertempuran pecah. Batu-batu raksasa berlapis api ditembakkan dari katapel mereka, menghantam dinding kokoh Ironhold hingga hancur berhamburan. Namun balasan musuh sangat mematikan. Hujan panah hitam yang dilumuri racun magis menghujani pasukan Elric, menelan korban di pihak klan Nomad.

Gareth memimpin pasukan perintis mendobrak gerbang utama menggunakan pendobrak bermoncong besi. Di saat yang sama, Lyra dan pemanahnya menembak jatuh gargoyle yang menukik dari langit, menyelamatkan infantri dari cengkeraman maut.

Elric melompat dari kudanya, merangsek masuk melalui celah gerbang yang hancur. Ia bertarung seperti dewa perang, pedangnya menari menebas baju besi hitam prajurit musuh. Sihir cahayanya membakar energi gelap yang mengendalikan mereka. Ignis menyapu dinding pertahanan musuh dengan semburan api naga yang meluluhlantakkan deretan pemanah.

Setelah berjam-jam pertumpahan darah dan benturan besi yang memekakkan telinga, komandan Ironhold yang tangguh akhirnya tewas di ujung pedang Elric. Panji Vareth yang robek ditarik turun, dan diganti dengan lambang elang emas Luminara yang telah lama hilang.

Mereka memenangkan pertempuran besar pertama, namun dengan harga yang sangat mahal. Ratusan prajurit aliansi tergeletak tanpa nyawa di medan perang, tanah berubah warna menjadi merah pekat. Kemenangan ini terasa pahit dan menyisakan duka mendalam.
EOT
            ],
            [
                'title' => 'Luka yang Tak Terlihat',
                'content' => <<<EOT
Malam setelah jatuhnya Ironhold diwarnai dengan keheningan yang suram. Api unggun perkemahan menyala redup, menerangi wajah-wajah kelelahan para prajurit yang sedang merawat luka-luka mereka. Suara rintihan kesakitan menggantikan sorak sorai kemenangan.

Elric duduk menyendiri di salah satu menara benteng yang hancur sebagian, memandang lautan mayat di bawah sana yang sedang dibakar dalam kremasi massal. Beban mahkota yang belum ia kenakan terasa sangat menyiksa. Darah yang tumpah hari ini, meskipun untuk tujuan yang benar, membebaninya dengan rasa bersalah yang mencekik.

Lyra menemukannya di sana. Ia melangkah tanpa suara, duduk di sebelahnya, menyodorkan kantung kulit berisi anggur pahit.

"Kau tidak bisa menyelamatkan mereka semua, Elric," kata Lyra lembut, matanya menatap api kremasi di kejauhan. "Mereka memilih untuk berjuang bersamamu. Mereka tahu risikonya."

"Aku yang memimpin mereka ke kematian itu, Lyra," Elric membalas, suaranya serak menahan tangis. "Berapa banyak lagi ayah, putra, dan saudara yang harus mati sebelum Vareth tumbang? Terkadang, aku berpikir apakah semua ini sepadan."

Lyra menoleh menatap Elric tepat di matanya. "Jika kau berhenti sekarang, kematian mereka akan sia-sia. Pengorbanan mereka adalah fondasi dari masa depan Eldoria yang lebih baik. Seorang raja sejati tidak menghindari rasa sakit akibat perang, ia memikulnya dan memastikan masa damai kelak layak untuk rasa sakit itu."

Percakapan malam itu menjadi titik balik bagi Elric. Ia menyadari bahwa ia tidak lagi hanya seorang anak yang mencari balas dendam untuk ayahnya. Ia adalah seorang pemimpin yang bertanggung jawab atas nasib puluhan ribu nyawa. Ia belajar menerima luka psikologis itu sebagai bagian dari dirinya, mengubah keraguan menjadi determinasi baja.

Esok paginya, Elric berpidato di hadapan pasukannya yang tersisa. Kata-katanya tidak mengobral janji palsu tentang kemenangan tanpa darah, melainkan penghargaan tulus atas pengorbanan mereka dan tekad mutlak untuk mengakhiri tirani Vareth. Semangat pasukan yang sempat runtuh kembali membara, kali ini lebih terang dari sebelumnya.
EOT
            ],
            [
                'title' => 'Rahasia Vareth',
                'content' => <<<EOT
Saat pasukan Elric bersiap untuk pergerakan terakhir menuju ibukota Luminara, agen-agen mata-mata Sylas membawa informasi mengejutkan dari ruang bawah tanah istana musuh. Seorang mantan penyihir istana yang berhasil diselamatkan mengungkap rahasia kelam di balik kekuatan luar biasa Vareth.

"Vareth bukan sekadar manusia tamak, Yang Mulia," lapor sang penyihir tua yang gemetar ketakutan di depan meja komando. "Ia telah mengikat jiwanya dengan *Entitas Malakor*, iblis kuno yang dikurung di dimensi bayangan sejak zaman pertama. Itulah mengapa ia membunuh raja lama—untuk menguasai singgasana yang berfungsi sebagai kunci penjara dimensi tersebut."

Kenyataan ini mengubah seluruh strategi perang. Vareth tidak bisa dibunuh dengan senjata biasa. Selama Entitas Malakor terus memberinya energi gelap, luka apa pun di tubuh Vareth akan segera sembuh, dan ia bisa membangkitkan pasukan mayat hidup tanpa batas.

Satu-satunya cara untuk memutus ikatan itu adalah dengan menggunakan sihir murni dari *Lumina Core* untuk menghancurkan artefak pengikat jiwa yang dikenakan Vareth—sebuah kalung berhiaskan zamrud hitam—sebelum memberikan pukulan mematikan.

"Itu berarti aku harus berhadapan langsung dengannya dalam pertarungan jarak dekat," renung Elric, menyadari bahaya mutlak dari misi ini. "Satu kesalahan kecil, dan jiwaku sendiri bisa tersedot oleh Malakor."

Gareth menentang ide itu dengan keras. "Itu bunuh diri, Pangeran! Biarkan kami, para jenderalku, menumbangkannya bersama-sama."

"Tidak," Elric menggeleng tegas. "Hanya keturunan garis darah Aldaren yang memegang Core yang bisa mematahkan perlindungan sihirnya. Kalian bertugas menahan pasukan utamanya dan membersihkan jalan menuju aula takhta untukku. Vareth adalah milikku."

Persiapan terakhir dilakukan. Senjata diasah, panah disiapkan, dan doa-doa terakhir dipanjatkan kepada dewa-dewa cahaya. Takdir seluruh benua kini bertumpu pada satu pedang dan satu pemuda yang menolak untuk tunduk pada kegelapan.
EOT
            ],
            [
                'title' => 'Koalisi Terakhir',
                'content' => <<<EOT
Pagi menjelang Pertempuran Luminara diwarnai kabut tebal yang menyelimuti seluruh daratan. Namun, dari balik kabut itu, puluhan ribu prajurit dari berbagai ras dan faksi berbaris dengan satu tujuan seragam. Ini adalah koalisi terhebat yang pernah dilihat Eldoria dalam satu abad terakhir.

Di sayap kiri, kavaleri Klan Nomad Stepa Timur di bawah pimpinan Kael'thas siap menerjang seperti badai dengan tombak-tombak mereka yang mengerikan. Di sayap kanan, pasukan elit Ravenport yang dibawa oleh Sylas telah mendirikan mesin-mesin kepung raksasa. Di bagian tengah, barisan infantri tangguh Oakhaven yang dipimpin oleh Jenderal Gareth berdiri tegak bagai tembok besi. Di atas mereka semua, Ignis, naga merah yang kini tumbuh semakin besar dan menakutkan, terbang melingkar mengawasi medan perang.

Ibukota Luminara, yang dulunya memancarkan cahaya putih keemasan, kini tampak seperti benteng neraka. Langit di atas kota itu berwarna ungu pekat, dipenuhi awan badai sihir hitam yang berputar-putar. Pasukan Vareth yang berbaris di luar tembok kota bukan lagi sepenuhnya manusia; mereka adalah hibrida bayangan bersenjata berat, dengan mata merah tak berjiwa.

"Ingat rencana kita!" teriak Elric dari atas kudanya, suaranya diperkuat dengan sihir agar terdengar ke seluruh barisan pasukan koalisi. "Tahan garis depan mereka! Jangan biarkan mereka mengepung kita! Begitu gerbang terbuka, beri aku jalan menuju aula takhta!"

Terompet perang ditiup serentak. Suara gemuruh langkah puluhan ribu prajurit menggetarkan bumi. Mesin-mesin kepung melemparkan proyektil api yang merobek awan kelabu.

Pertempuran pun pecah dengan brutalitas yang tak terbayangkan. Baja beradu dengan sihir, teriakan perang bercampur dengan jeritan kematian. Pasukan Vareth bertarung tanpa rasa sakit atau takut, membuat mereka menjadi musuh yang mematikan. Namun tekad pasukan koalisi yang memperjuangkan tanah air dan kebebasan mereka terbukti mampu menahan laju pasukan bayangan tersebut.

Kael'thas dengan kapaknya yang memutar menghancurkan barisan pertahanan musuh, menciptakan celah besar. Gareth memimpin serbuan infantri langsung ke celah tersebut, menembus masuk menuju gerbang istana. Ignis menukik turun, menyemburkan api naga yang meluluhlantakkan sihir pelindung gerbang.

Gerbang ibukota terbuka, dan Elric memacu kudanya masuk ke dalam kekacauan, berlomba dengan waktu menuju konfrontasi pamungkas yang telah ditakdirkan.
EOT
            ],
            [
                'title' => 'Requiem of Eldoria',
                'content' => <<<EOT
Aula takhta Luminara hancur berantakan. Pilar-pilar runtuh dan langit-langit berlubang menampakkan badai ungu di langit. Di atas singgasana yang kini ternoda darah dan sihir hitam, duduk Vareth, menantikan kedatangan Elric. Aura kegelapan begitu pekat mengelilinginya, menyedot cahaya apa pun di dalam ruangan.

"Kau datang untuk mati, Anak Kecil," suara Vareth menggema, bukan suara manusia, melainkan suara berat entitas Malakor yang merasukinya.

"Aku datang untuk mengambil kembali apa yang kau curi," jawab Elric tenang, menghunus pedang hitam *Nightfall* yang kini memancarkan cahaya putih terang berkat kekuatan *Lumina Core* di dadanya.

Pertarungan epik dimulai. Vareth bergerak lebih cepat dari kilat, mengayunkan pedang raksasa beraura bayangan yang menghancurkan marmer setiap kali meleset. Elric menggunakan kelincahan dan instingnya untuk menghindar, sambil melancarkan serangan balasan yang cepat. Setiap kali pedang mereka beradu, gelombang kejut sihir meledak, melemparkan debu dan puing-puing ke udara.

Vareth melepaskan mantra mematikan, menembakkan jarum-jarum bayangan hitam pekat ke arah Elric. Sang pangeran memusatkan sihirnya, menciptakan perisai cahaya yang menahan sebagian besar jarum, meski beberapa menembus bahu dan pahanya. Rasa sakit yang luar biasa menjalar, namun Elric menolak jatuh.

Di tengah pertarungan yang sengit, Elric melihat kalung zamrud hitam di leher Vareth yang berdenyut selaras dengan kekuatan iblisnya. Mengingat nasihat sang penyihir tua, Elric mengubah taktiknya. Ia membiarkan pertahanannya terbuka, sebuah jebakan berbahaya.

Vareth, tertipu oleh ambisi dan arogansinya, menerjang untuk pukulan mematikan ke dada Elric. Elric menghindar di detik terakhir dengan manuver akrobatik, mengayunkan *Nightfall* dengan kekuatan penuh ke arah leher Vareth, memotong rantai kalung zamrud itu.

Zamrud itu jatuh dan pecah berkeping-keping di lantai. Seketika, jeritan memilukan, bukan dari Vareth, melainkan dari iblis di dalamnya, menggelegar ke seluruh penjuru istana. Aura gelap yang menyelimuti Vareth lenyap sekejap.

Tanpa perlindungan sihir iblisnya, Vareth hanyalah seorang pria fana yang kebingungan. Elric tidak ragu. Dengan satu dorongan cepat, pedang *Nightfall* menembus dada Vareth, tepat di mana pedang sang pengkhianat pernah merenggut nyawa Raja Aldric.

"Ini untuk ayahku. Dan untuk seluruh Eldoria," bisik Elric dingin.

Vareth runtuh, tubuhnya perlahan menjadi abu seiring musnahnya sisa-sisa sihir gelap.

Di luar istana, badai hitam di langit memudar seketika, digantikan oleh cahaya mentari pagi yang hangat, menyinari tanah Eldoria yang menangis darah namun akhirnya bebas. Elric berjalan gontai keluar menuju balkon, melihat pasukannya bersorak kemenangan. Ia mengangkat pedangnya yang berlumuran darah ke udara.

Perang telah usai. Tirani telah runtuh. Namun Elric tahu, membangun kembali apa yang hancur akan membutuhkan waktu seumur hidup. Sang raja sejati telah kembali, membawa fajar baru setelah malam yang panjang. Requiem usai, dan simfoni kehidupan Eldoria baru saja dimulai.
EOT
            ]
        ];

        foreach ($chapters as $index => $chapter) {
            Chapter::create([
                'novel_id' => $novel->id,
                'title' => $chapter['title'],
                'content' => $chapter['content'],
                'status' => 'published',
                'order' => $index + 1,
            ]);
        }
    }
}
