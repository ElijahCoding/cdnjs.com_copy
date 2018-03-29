<?php

namespace App\Console\Commands;

use Cache;
use GuzzleHttp\Client;
use App\Services\Libraries;
use Illuminate\Console\Command;
use App\Services\Cache\RedisAdapter;

class LibrariesCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'libraries:fetch';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Fetch libraries api and cache it.';

    /**
     * Create a new command instance.
     *
     * @return void
     */

     protected $client;
     protected $cache;

    public function __construct(Client $client, RedisAdapter $cache)
    {
        parent::__construct();

        $this->client = $client;
        $this->cache = $cache;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
      $data = $this->cache->remember('libraries', 10,  function() {
         return json_encode((new Libraries($this->client))->get());
      });

      $this->info('Success !');
    }
}
