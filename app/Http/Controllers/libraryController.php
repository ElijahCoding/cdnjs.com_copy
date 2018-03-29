<?php

namespace App\Http\Controllers;

use Cache;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use App\Services\Libraries;
use App\Transformers\LibraryTransformer;

class libraryController extends Controller
{
    protected $client;

    public function __construct(Client $client)
    {
      $this->client = $client;
    }

    public function index()
    {
      $data = (new Libraries($this->client))->get();

      return $data;
    }
}
