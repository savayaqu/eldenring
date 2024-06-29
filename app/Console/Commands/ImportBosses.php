<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use GuzzleHttp\Client;
use App\Models\Boss;

class ImportBosses extends Command
{
    protected $signature = 'import:bosses';
    protected $description = 'Import bosses from external API';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $client = new Client();
        $page = 0;
        $perPage = 20;
        $totalImported = 0;

        do {
            $response = $client->request('GET', 'https://eldenring.fanapis.com/api/bosses', [
                'query' => [
                    'limit' => $perPage,
                    'page' => $page,
                ]
            ]);

            $data = json_decode($response->getBody()->getContents(), true);
            $bosses = $data['data'];
            $total = $data['total'];

            foreach ($bosses as $bossData) {
                Boss::updateOrCreate(
                    ['external_id' => $bossData['id']],
                    [
                        'name' => $bossData['name'],
                        'image' => $bossData['image'],
                        'region' => $bossData['region'],
                        'description' => $bossData['description'],
                        'location' => $bossData['location'],
                    ]
                );
                $totalImported++;
            }

            $page++;
        } while ($totalImported < $total);

        $this->info('Bosses imported successfully!');
    }
}
