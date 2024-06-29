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
            ['name'=> 'Commander Gaius', 'boss_image' => 'https://eldenring.wiki.fextralife.com/file/Elden-Ring/gaius.png', 'health' => 33871, 'remembrance' => 1, 'requires' => 'Shadow of the Erdree DLC', 'map' => 'https://eldenring.wiki.fextralife.com/Interactive+Map?id=655366&code=mapD'],
            ['name'=> 'Messmer the Impaler', 'boss_image' => 'https://eldenring.wiki.fextralife.com/file/Elden-Ring/messmer.png', 'health' => 38981, 'remembrance' => 1, 'requires' => 'Shadow of the Erdree DLC', 'map' => 'https://eldenring.wiki.fextralife.com/Interactive+Map?id=655484&code=mapD'],
            ['name'=> 'Scadutree Avatar', 'boss_image' => 'https://eldenring.wiki.fextralife.com/file/Elden-Ring/scadutree.png', 'health' => 33571, 'remembrance' => 1, 'requires' => 'Shadow of the Erdree DLC', 'map' => 'https://eldenring.wiki.fextralife.com/Interactive+Map?id=655367&code=mapD'],
            ['name'=> 'Rellana, Twin Moon Knight', 'boss_image' => 'https://eldenring.wiki.fextralife.com/file/Elden-Ring/rellana_twin_moon_knight2.png', 'health' => 29723, 'remembrance' => 1, 'requires' => 'Shadow of the Erdree DLC', 'map' => 'https://eldenring.wiki.fextralife.com/Interactive+Map?id=655153&code=mapD'],
            ['name'=> 'Romina, Saint of the Bud', 'boss_image' => 'https://eldenring.wiki.fextralife.com/file/Elden-Ring/romina.png', 'health' => 35798, 'remembrance' => 1, 'requires' => 'Shadow of the Erdree DLC', 'map' => 'https://eldenring.wiki.fextralife.com/Interactive+Map?id=655463&code=mapD'],
            ['name'=> 'Divine Beast Dancing Lion', 'boss_image' => 'https://eldenring.wiki.fextralife.com/file/Elden-Ring/divine-doggo.png', 'health' => 22571, 'remembrance' => 1, 'requires' => 'Shadow of the Erdree DLC', 'map' => 'https://eldenring.wiki.fextralife.com/Interactive+Map?id=654965&code=mapD'],
            ['name'=> 'Promised Consort Radahn', 'boss_image' => 'https://eldenring.wiki.fextralife.com/file/Elden-Ring/consort.png', 'health' => 46134, 'remembrance' => 1, 'requires' => 'Shadow of the Erdree DLC', 'map' => 'https://eldenring.wiki.fextralife.com/Interactive+Map?id=655561&code=mapD'],
            ['name'=> 'Midra, Lord of Frenzied Flame', 'boss_image' => 'https://eldenring.wiki.fextralife.com/file/Elden-Ring/midra.png', 'health' => 47171, 'remembrance' => 1, 'requires' => 'Shadow of the Erdree DLC', 'map' => 'https://eldenring.wiki.fextralife.com/Interactive+Map?id=655461&code=mapD'],
            ['name'=> 'Metyr, Mother of Fingers', 'boss_image' => 'https://eldenring.wiki.fextralife.com/file/Elden-Ring/1000000223.jpg', 'health' => 43296, 'remembrance' => 1, 'requires' => 'Shadow of the Erdree DLC', 'map' => 'https://eldenring.wiki.fextralife.com/Interactive+Map?id=655728&code=mapD'],
            ['name'=> 'Putrescent Knight', 'boss_image' => 'https://eldenring.wiki.fextralife.com/file/Elden-Ring/1000000221.jpg', 'health' => 20612, 'remembrance' => 1, 'requires' => 'Shadow of the Erdree DLC', 'map' => 'https://eldenring.wiki.fextralife.com/Interactive+Map?id=655538&code=mapD'],
            ['name'=> 'Regal Ancestor Spirit', 'boss_image' => 'https://eldenring.wiki.fextralife.com/file/Elden-Ring/regal-ancestor-spirit_map-bosses-enemies-elden-ring-wiki-guide-300px.jpg', 'health' => 6301, 'remembrance' => 1, 'requires' => 'Base game',                'map' => ''],
            ['name'=> 'Astel, Naturalborn of the Void', 'boss_image' => 'https://eldenring.wiki.fextralife.com/file/Elden-Ring/astel-naturalborn-of-the-void-1-elden-ring-wiki-guide.jpg', 'health' => 11170, 'remembrance' => 1, 'requires' => 'Base game',                'map' => 'https://eldenring.wiki.fextralife.com/Interactive+Map?id=3006&lat=-165.67187&lng=47.64713&code=mapB'],
            ['name'=> 'Lichdragon Fortissax', 'boss_image' => 'https://eldenring.wiki.fextralife.com/file/Elden-Ring/fortissax_bosses_elden_ring_wiki_600px1-min.jpg', 'health' => 12903, 'remembrance' => 1, 'requires' => 'Base game', 'map' => 'https://eldenring.wiki.fextralife.com/Interactive+Map?id=6425&lat=-93&lng=118&code=mapB'],
            ['name'=> 'Fire Giant', 'boss_image' => 'https://eldenring.wiki.fextralife.com/file/Elden-Ring/remembrance_of_the_fire_giant_elden_ring_wiki_guide_200px.png', 'health' => 42363, 'remembrance' => 1, 'requires' => 'Base game', 'map' => 'https://eldenring.wiki.fextralife.com/Interactive+Map?id=3552&lat=-91.82&lng=164.49&code=mapA'],
            ['name'=> 'Godrick the Grafted', 'boss_image' => 'https://eldenring.wiki.fextralife.com/file/Elden-Ring/godrick_the_grafted_bosses_elden_ring_wiki_600px1-min.jpg', 'health' => 6080, 'remembrance' => 1, 'requires' => 'Base game', 'map' => 'https://eldenring.wiki.fextralife.com/Interactive+Map?id=1128&code=mapA'],
            ['name'=> 'Rennala, Queen of the Full Moon', 'boss_image' => 'https://eldenring.wiki.fextralife.com/file/Elden-Ring/rennala_queen_of_the_full_moon_bosses_elden_ring_wiki_600px1-min.jpg', 'health' => 7500, 'remembrance' => 1, 'requires' => 'Base game', 'map' => 'https://eldenring.wiki.fextralife.com/Interactive+Map?id=793&code=mapA'],
            ['name'=> 'God-Devouring Serpent and Rykard, Lord of Blasphemy', 'boss_image' => 'https://eldenring.wiki.fextralife.com/file/Elden-Ring/rykard_lord_of_blasphemy_bosses_elden_ring_wiki_600px1.jpg', 'health' => 89613, 'remembrance' => 1, 'requires' => 'Base game', 'map' => 'https://eldenring.wiki.fextralife.com/Interactive+Map?id=4104&code=mapA'],
            ['name'=> 'Starscourge Radahn', 'boss_image' => 'https://eldenring.wiki.fextralife.com/file/Elden-Ring/radahn_enemies_elden_ring_wiki_600px1-min.jpg', 'health' => 9572, 'remembrance' => 1, 'requires' => 'Base game', 'map' => 'https://eldenring.wiki.fextralife.com/Interactive+Map?id=2362&code=mapA'],
            ['name'=> 'Morgott, The Omen King', 'boss_image' => 'https://eldenring.wiki.fextralife.com/file/Elden-Ring/morgott-omen-king-3-elden-ring-wiki-guide.jpg', 'health' => 10399, 'remembrance' => 1, 'requires' => 'Base game', 'map' => 'https://eldenring.wiki.fextralife.com/Interactive+Map?id=3232&code=mapA'],
            ['name'=> 'Mohg, Lord of Blood', 'boss_image' => 'https://eldenring.wiki.fextralife.com/file/Elden-Ring/mohg_the_omen_bosses_elden_ring_wiki_600px1-min.jpg', 'health' => 18389, 'remembrance' => 1, 'requires' => 'Base game', 'map' => 'https://eldenring.wiki.fextralife.com/Interactive+Map?id=4677&lat=-182.053125&lng=146.246868&code=mapB'],
            ['name'=> 'Malenia, Blade of Miquella and Malenia, Goddess of Rot', 'boss_image' => 'https://eldenring.wiki.fextralife.com/file/Elden-Ring/malenia,-blade-of-miquella1-min.jpg', 'health' => 33251, 'remembrance' => 1, 'requires' => 'Base game', 'map' => 'https://eldenring.wiki.fextralife.com/Interactive+Map?id=4457&lat=-37.1&lng=149.13&code=mapA'],
            ['name'=> 'Beast Clergyman and Maliketh, The Black Blade', 'boss_image' => 'https://eldenring.wiki.fextralife.com/file/Elden-Ring/maliketh-the-black-blade-4k1-min.jpg', 'health' => 10620, 'remembrance' => 1, 'requires' => 'Base game', 'map' => 'https://eldenring.wiki.fextralife.com/Interactive+Map?id=4660&lat=-125.085937&lng=221.027742&code=mapA'],
            ['name'=> 'Godfrey, First Elden Lord', 'boss_image' => 'https://eldenring.wiki.fextralife.com/file/Elden-Ring/godfrey_first_elden_lord_bosses_elden_ring_wiki_600px1-min.jpg', 'health' => 21903, 'remembrance' => 1, 'requires' => 'Base game', 'map' => 'https://eldenring.wiki.fextralife.com/Interactive+Map?id=6059&lat=-106&lng=118&code=mapC'],
            ['name'=> 'Dragonlord Placidusax', 'boss_image' => 'https://eldenring.wiki.fextralife.com/file/Elden-Ring/dragonlord_placidusax_bosses_elden_ring_wiki_600px1-min.jpg', 'health' => 26651, 'remembrance' => 1, 'requires' => 'Base game', 'map' => 'https://eldenring.wiki.fextralife.com/Interactive+Map?id=5711&lat=-125.98&lng=216.68&code=mapA'],
            ['name'=> 'Elden Beast', 'boss_image' => 'https://eldenring.wiki.fextralife.com/file/Elden-Ring/elden_beast_bosses_elden_ring_wiki_600px1-min.jpg', 'health' => 22127, 'remembrance' => 1, 'requires' => 'Base game', 'map' => ''],

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
