<?php

namespace App\Http\Controllers;

use Cache;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use App\Services\Libraries;
use App\Services\Cache\RedisAdapter;
use App\Transformers\LibraryTransformer;

class libraryController extends Controller
{
    protected $client;
    protected $cache;

    public function __construct(Client $client, RedisAdapter $cache)
    {
      $this->client = $client;
      $this->cache = $cache;
    }

    public function index()
    {
      $data = $this->cache->remember('libraries', 10,  function() {
        return json_encode((new Libraries($this->client))->get());
      });

      return json_decode($data);

    }
}
