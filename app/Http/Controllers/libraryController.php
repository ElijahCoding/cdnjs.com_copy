<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use App\Services\Libraries;

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
