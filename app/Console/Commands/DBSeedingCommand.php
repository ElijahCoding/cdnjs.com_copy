<?php

namespace App\Console\Commands;

use Artisan;
use App\Library;
use GuzzleHttp\Client;
use App\Services\Libraries;
use Illuminate\Console\Command;

class DBSeedingCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'db:api-seeding';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Pull data into db.';

    /**
     * Create a new command instance.
     *
     * @return void
     */

    protected $client;

    public function __construct(Client $client)
    {
        parent::__construct();
        $this->client = $client;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
      Artisan::call('migrate:refresh');

      $libraries = (new Libraries($this->client))->get();

      $bar = $this->output->createProgressBar(count($libraries));

      foreach ($libraries as $library) {
        Library::create([
          'name' => $library->name,
          'latest' => $library->latest
        ]);
        $bar->advance();
      }
      $bar->finish();

      $this->info('Done !');
    }
}
