<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{

    public function run(): void
    {
        DB::table('bosses')->insert([
            ['name'=> 'Commander Gaius', 'boss_image' => 'https://eldenring.wiki.fextralife.com/file/Elden-Ring/gaius.png', 'health' => 33871, 'remembrance' => 1, 'requires' => 'Shadow of the Erdree DLC', 'map' => 'https://mapgenie.io/elden-ring/maps/the-shadow-realm?locationIds=381989'],
            ['name'=> 'Messmer the Impaler', 'boss_image' => 'https://eldenring.wiki.fextralife.com/file/Elden-Ring/messmer.png', 'health' => 38981, 'remembrance' => 1, 'requires' => 'Shadow of the Erdree DLC', 'map' => 'https://mapgenie.io/elden-ring/maps/the-shadow-realm?locationIds=381741'],
            ['name'=> 'Scadutree Avatar', 'boss_image' => 'https://eldenring.wiki.fextralife.com/file/Elden-Ring/scadutree.png', 'health' => 33571, 'remembrance' => 1, 'requires' => 'Shadow of the Erdree DLC', 'map' => 'https://mapgenie.io/elden-ring/maps/the-shadow-realm?locationIds=381991'],
            ['name'=> 'Rellana, Twin Moon Knight', 'boss_image' => 'https://eldenring.wiki.fextralife.com/file/Elden-Ring/rellana_twin_moon_knight2.png', 'health' => 29723, 'remembrance' => 1, 'requires' => 'Shadow of the Erdree DLC', 'map' => 'https://mapgenie.io/elden-ring/maps/the-shadow-realm?locationIds=380245'],
            ['name'=> 'Romina, Saint of the Bud', 'boss_image' => 'https://eldenring.wiki.fextralife.com/file/Elden-Ring/romina.png', 'health' => 35798, 'remembrance' => 1, 'requires' => 'Shadow of the Erdree DLC', 'map' => 'https://mapgenie.io/elden-ring/maps/the-shadow-realm?locationIds=382040'],
            ['name'=> 'Divine Beast Dancing Lion', 'boss_image' => 'https://eldenring.wiki.fextralife.com/file/Elden-Ring/divine-doggo.png', 'health' => 22571, 'remembrance' => 1, 'requires' => 'Shadow of the Erdree DLC', 'map' => 'https://mapgenie.io/elden-ring/maps/the-shadow-realm?locationIds=380798'],
            ['name'=> 'Promised Consort Radahn', 'boss_image' => 'https://eldenring.wiki.fextralife.com/file/Elden-Ring/consort.png', 'health' => 46134, 'remembrance' => 1, 'requires' => 'Shadow of the Erdree DLC', 'map' => 'https://mapgenie.io/elden-ring/maps/the-shadow-realm?locationIds=382044'],
            ['name'=> 'Midra, Lord of Frenzied Flame', 'boss_image' => 'https://eldenring.wiki.fextralife.com/file/Elden-Ring/midra.png', 'health' => 47171, 'remembrance' => 1, 'requires' => 'Shadow of the Erdree DLC', 'map' => 'https://mapgenie.io/elden-ring/maps/the-shadow-realm?locationIds=382190'],
            ['name'=> 'Metyr, Mother of Fingers', 'boss_image' => 'https://eldenring.wiki.fextralife.com/file/Elden-Ring/1000000223.jpg', 'health' => 43296, 'remembrance' => 1, 'requires' => 'Shadow of the Erdree DLC', 'map' => 'https://mapgenie.io/elden-ring/maps/the-shadow-realm?locationIds=382002'],
            ['name'=> 'Putrescent Knight', 'boss_image' => 'https://eldenring.wiki.fextralife.com/file/Elden-Ring/1000000221.jpg', 'health' => 20612, 'remembrance' => 1, 'requires' => 'Shadow of the Erdree DLC', 'map' => 'https://mapgenie.io/elden-ring/maps/the-shadow-realm?locationIds=381961'],
            ['name'=> 'Regal Ancestor Spirit', 'boss_image' => 'https://eldenring.wiki.fextralife.com/file/Elden-Ring/regal-ancestor-spirit_map-bosses-enemies-elden-ring-wiki-guide-300px.jpg', 'health' => 6301, 'remembrance' => 1, 'requires' => 'Base game', 'map' => 'https://mapgenie.io/elden-ring/maps/the-lands-between?locationIds=167929'],
            ['name'=> 'Astel, Naturalborn of the Void', 'boss_image' => 'https://eldenring.wiki.fextralife.com/file/Elden-Ring/astel-naturalborn-of-the-void-1-elden-ring-wiki-guide.jpg', 'health' => 11170, 'remembrance' => 1, 'requires' => 'Base game', 'map' => 'https://mapgenie.io/elden-ring/maps/the-lands-between?locationIds=167488'],
            ['name'=> 'Lichdragon Fortissax', 'boss_image' => 'https://eldenring.wiki.fextralife.com/file/Elden-Ring/fortissax_bosses_elden_ring_wiki_600px1-min.jpg', 'health' => 12903, 'remembrance' => 1, 'requires' => 'Base game', 'map' => 'https://mapgenie.io/elden-ring/maps/the-lands-between?locationIds=168158'],
            ['name'=> 'Fire Giant', 'boss_image' => 'https://eldenring.wiki.fextralife.com/file/Elden-Ring/remembrance_of_the_fire_giant_elden_ring_wiki_guide_200px.png', 'health' => 42363, 'remembrance' => 1, 'requires' => 'Base game', 'map' => 'https://mapgenie.io/elden-ring/maps/the-lands-between?locationIds=167375'],
            ['name'=> 'Godrick the Grafted', 'boss_image' => 'https://eldenring.wiki.fextralife.com/file/Elden-Ring/godrick_the_grafted_bosses_elden_ring_wiki_600px1-min.jpg', 'health' => 6080, 'remembrance' => 1, 'requires' => 'Base game', 'map' => 'https://mapgenie.io/elden-ring/maps/the-lands-between?locationIds=164421'],
            ['name'=> 'Rennala, Queen of the Full Moon', 'boss_image' => 'https://eldenring.wiki.fextralife.com/file/Elden-Ring/rennala_queen_of_the_full_moon_bosses_elden_ring_wiki_600px1-min.jpg', 'health' => 7500, 'remembrance' => 1, 'requires' => 'Base game', 'map' => 'https://mapgenie.io/elden-ring/maps/the-lands-between?locationIds=164430'],
            ['name'=> 'God-Devouring Serpent and Rykard, Lord of Blasphemy', 'boss_image' => 'https://eldenring.wiki.fextralife.com/file/Elden-Ring/rykard_lord_of_blasphemy_bosses_elden_ring_wiki_600px1.jpg', 'health' => 89613, 'remembrance' => 1, 'requires' => 'Base game', 'map' => 'https://mapgenie.io/elden-ring/maps/the-lands-between?locationIds=167571'],
            ['name'=> 'Starscourge Radahn', 'boss_image' => 'https://eldenring.wiki.fextralife.com/file/Elden-Ring/radahn_enemies_elden_ring_wiki_600px1-min.jpg', 'health' => 9572, 'remembrance' => 1, 'requires' => 'Base game', 'map' => 'https://mapgenie.io/elden-ring/maps/the-lands-between?locationIds=165444'],
            ['name'=> 'Morgott, The Omen King', 'boss_image' => 'https://eldenring.wiki.fextralife.com/file/Elden-Ring/morgott-omen-king-3-elden-ring-wiki-guide.jpg', 'health' => 10399, 'remembrance' => 1, 'requires' => 'Base game', 'map' => 'https://mapgenie.io/elden-ring/maps/the-lands-between?locationIds=167374'],
            ['name'=> 'Mohg, Lord of Blood', 'boss_image' => 'https://eldenring.wiki.fextralife.com/file/Elden-Ring/mohg_the_omen_bosses_elden_ring_wiki_600px1-min.jpg', 'health' => 18389, 'remembrance' => 1, 'requires' => 'Base game', 'map' => 'https://mapgenie.io/elden-ring/maps/the-lands-between?locationIds=168412'],
            ['name'=> 'Malenia, Blade of Miquella and Malenia, Goddess of Rot', 'boss_image' => 'https://eldenring.wiki.fextralife.com/file/Elden-Ring/malenia,-blade-of-miquella1-min.jpg', 'health' => 33251, 'remembrance' => 1, 'requires' => 'Base game', 'map' => 'https://mapgenie.io/elden-ring/maps/the-lands-between?locationIds=167678'],
            ['name'=> 'Beast Clergyman and Maliketh, The Black Blade', 'boss_image' => 'https://eldenring.wiki.fextralife.com/file/Elden-Ring/maliketh-the-black-blade-4k1-min.jpg', 'health' => 10620, 'remembrance' => 1, 'requires' => 'Base game', 'map' => 'https://mapgenie.io/elden-ring/maps/the-lands-between?locationIds=167619'],
            ['name'=> 'Godfrey, First Elden Lord', 'boss_image' => 'https://eldenring.wiki.fextralife.com/file/Elden-Ring/godfrey_first_elden_lord_bosses_elden_ring_wiki_600px1-min.jpg', 'health' => 21903, 'remembrance' => 1, 'requires' => 'Base game', 'map' => 'https://mapgenie.io/elden-ring/maps/the-lands-between?locationIds=176807'],
            ['name'=> 'Dragonlord Placidusax', 'boss_image' => 'https://eldenring.wiki.fextralife.com/file/Elden-Ring/dragonlord_placidusax_bosses_elden_ring_wiki_600px1-min.jpg', 'health' => 26651, 'remembrance' => 1, 'requires' => 'Base game', 'map' => 'https://mapgenie.io/elden-ring/maps/the-lands-between?locationIds=168522'],
            ['name'=> 'Elden Beast', 'boss_image' => 'https://eldenring.wiki.fextralife.com/file/Elden-Ring/elden_beast_bosses_elden_ring_wiki_600px1-min.jpg', 'health' => 22127, 'remembrance' => 1, 'requires' => 'Base game', 'map' => 'https://mapgenie.io/elden-ring/maps/the-lands-between?locationIds=176997'],

        ]);
        DB::table('roles')->insert([
            ['name' => 'user'],
            ['name' => 'admin'],
        ]);
        DB::table('users')->insert([
           ['nickname' => 'savayaqu', 'password' => 'savayaqu', 'api_token'=> 'savayaqu', 'role_id' => 2]
        ]);
    }
}
