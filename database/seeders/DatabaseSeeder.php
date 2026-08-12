<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\World;
use App\Models\Faction;
use App\Models\Character;
use App\Models\LoreEntry;
use App\Models\Novel;
use App\Models\Chapter;
use App\Models\Tag;
use App\Models\Comment;
use App\Models\Review;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Seed Users
        $admin = User::create([
            'name' => 'Admin Danu',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
            'bio' => 'Administrator Utama Platform Arkana.',
            'avatar' => null
        ]);

        $writer = User::create([
            'name' => 'Firsmine Writer',
            'email' => 'writer@example.com',
            'password' => Hash::make('password'),
            'role' => 'writer',
            'bio' => 'Penulis spesialisasi novel dark fantasy dan isekai.',
            'avatar' => null
        ]);

        $reader = User::create([
            'name' => 'Gerry Reader',
            'email' => 'reader@example.com',
            'password' => Hash::make('password'),
            'role' => 'reader',
            'bio' => 'Pembaca setia yang suka me-review novel.',
            'avatar' => null
        ]);

        // 2. Seed Tags
        $tagFantasy = Tag::create(['name' => 'Fantasy']);
        $tagDark = Tag::create(['name' => 'Dark Fantasy']);
        $tagIsekai = Tag::create(['name' => 'Isekai']);
        $tagAdventure = Tag::create(['name' => 'Adventure']);
        $tagRomance = Tag::create(['name' => 'Romance']);

        // 3. Seed Worlds
        $worldEldoria = World::create([
            'user_id' => $writer->id,
            'name' => 'Dunia Eldoria',
            'description' => 'Dunia abad pertengahan fantasi tinggi yang terbagi oleh perang faksi magis dan naga.',
            'map_image' => null
        ]);

        $worldAetheria = World::create([
            'user_id' => $writer->id,
            'name' => 'Reruntuhan Aetheria',
            'description' => 'Kepulauan melayang di angkasa yang dipenuhi teknologi sihir kuno (mana-tech).',
            'map_image' => null
        ]);

        // 4. Seed Factions
        $factionEmpire = Faction::create([
            'world_id' => $worldEldoria->id,
            'name' => 'Kekaisaran Holy Luminous',
            'emblem' => null,
            'description' => 'Kekaisaran manusia penyembah dewa cahaya yang menguasai benua barat.'
        ]);

        $factionGuild = Faction::create([
            'world_id' => $worldEldoria->id,
            'name' => 'Serikat Bayang (Shadow Guild)',
            'emblem' => null,
            'description' => 'Aliansi pembunuh bayaran dan ras demon yang beroperasi dari bawah tanah.'
        ]);

        // 5. Seed Characters
        $charArthur = Character::create([
            'world_id' => $worldEldoria->id,
            'faction_id' => $factionEmpire->id,
            'name' => 'Sir Arthur Pendragon',
            'avatar' => null,
            'race' => 'Human',
            'power' => 'Holy Light Sword (Excalibur)',
            'backstory' => 'Arthur adalah ksatria pelindung Holy Luminous yang ditugaskan memburu klan demon.'
        ]);

        $charKaelen = Character::create([
            'world_id' => $worldEldoria->id,
            'faction_id' => $factionGuild->id,
            'name' => 'Kaelen Shadowweaver',
            'avatar' => null,
            'race' => 'Half-Elf / Demon',
            'power' => 'Void Manipulation & Shadow Daggers',
            'backstory' => 'Kaelen lahir dari ras campuran yang dibuang, kini menjadi pembunuh berdarah dingin di Serikat Bayang.'
        ]);

        // 6. Seed Lore Entries
        LoreEntry::create([
            'world_id' => $worldEldoria->id,
            'title' => 'Asal Usul Sihir Luminous',
            'content' => 'Sihir cahaya murni diturunkan langsung oleh Dewa Solaria pada perang besar seribu tahun lalu.',
            'category' => 'Magic System'
        ]);

        LoreEntry::create([
            'world_id' => $worldEldoria->id,
            'title' => 'Geografi Benua Barat',
            'content' => 'Benua barat didominasi oleh Pegunungan Frostbite dan Lembah Naga Merah.',
            'category' => 'Geography'
        ]);

        // 7. Seed Novels
        $novel1 = Novel::create([
            'user_id' => $writer->id,
            'world_id' => $worldEldoria->id,
            'title' => 'The Legend of Eldoria: Light and Shadow',
            'synopsis' => 'Dalam kegelapan benua Eldoria, seorang ksatria suci harus memilih antara sumpahnya pada raja atau kedamaian dunia saat bertemu dengan takdir pembunuh bayaran Serikat Bayang.',
            'cover_image' => null,
            'genre' => 'fantasy',
            'status' => 'ongoing',
            'view_count' => 1250
        ]);
        $novel1->tags()->sync([$tagFantasy->id, $tagDark->id, $tagAdventure->id]);

        $novel2 = Novel::create([
            'user_id' => $writer->id,
            'world_id' => $worldAetheria->id,
            'title' => 'Reincarnated as a Mana-Tech Engineer',
            'synopsis' => 'Seorang programmer jenius meninggal karena kelelahan kerja dan terlahir kembali di dunia Aetheria sebagai insinyur mesin sihir terapung.',
            'cover_image' => null,
            'genre' => 'isekai',
            'status' => 'ongoing',
            'view_count' => 840
        ]);
        $novel2->tags()->sync([$tagIsekai->id, $tagAdventure->id]);

        $novel3 = Novel::create([
            'user_id' => $admin->id,
            'world_id' => null,
            'title' => 'Cinta di Batas Dimensi',
            'synopsis' => 'Kisah romantis lintas dimensi antara dua penyihir dari benua yang berbeda.',
            'cover_image' => null,
            'genre' => 'romance_fantasy',
            'status' => 'completed',
            'view_count' => 310
        ]);
        $novel3->tags()->sync([$tagRomance->id, $tagFantasy->id]);

        // 8. Seed Chapters
        $ch1 = Chapter::create([
            'novel_id' => $novel1->id,
            'title' => 'Chapter 1: Hutan Kabut Hitam',
            'content' => 'Hujan mengguyur Hutan Kabut Hitam dengan deras. Sir Arthur memacu kudanya menembus kegelapan, laras pedang Luminous-nya bersinar lembut menahan hawa jahat di sekitarnya. "Sesuatu sedang mengintai," bisiknya lirih sembari menarik pedangnya.',
            'order' => 1,
            'status' => 'published'
        ]);

        $ch2 = Chapter::create([
            'novel_id' => $novel1->id,
            'title' => 'Chapter 2: Bilah Belati Bayangan',
            'content' => 'Kaelen tersenyum sinis di atas dahan pohon ek tua. Matanya yang merah menyala menatap ksatria berbaju besi di bawahnya. Dengan sekali lompat, dia meluncur tanpa suara, membawa dua bilah belati hitam pekat siap menebas mangsanya.',
            'order' => 2,
            'status' => 'published'
        ]);

        $ch3 = Chapter::create([
            'novel_id' => $novel1->id,
            'title' => 'Chapter 3: Negosiasi Darurat (Draft)',
            'content' => 'Ini adalah draft bab ketiga di mana Arthur dan Kaelen terpaksa bekerja sama demi melawan monster raksasa.',
            'order' => 3,
            'status' => 'draft'
        ]);

        // 9. Seed Comments
        Comment::create([
            'user_id' => $reader->id,
            'chapter_id' => $ch1->id,
            'content' => 'Keren banget pendahuluannya! Deskripsi suasananya kerasa banget misteriusnya.'
        ]);

        Comment::create([
            'user_id' => $admin->id,
            'chapter_id' => $ch1->id,
            'content' => 'Sistem sihir pedangnya kreatif sekali, lanjutkan author!'
        ]);

        Comment::create([
            'user_id' => $reader->id,
            'chapter_id' => $ch2->id,
            'content' => 'Pertarungannya pasti bakal seru nih di chapter depan!'
        ]);

        // 10. Seed Reviews
        Review::create([
            'user_id' => $reader->id,
            'novel_id' => $novel1->id,
            'rating' => 5,
            'body' => 'Sangat suka dengan worldbuilding Eldoria yang detail dan kontras karakter Arthur & Kaelen yang ditulis rapi!'
        ]);

        Review::create([
            'user_id' => $admin->id,
            'novel_id' => $novel1->id,
            'rating' => 4,
            'body' => 'Alurnya sedikit lambat di awal, tapi penulisan aksi pertarungannya sangat solid.'
        ]);
    }
}
