<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class libraryController extends Controller
{
    protected $client;

    public function __construct(Client $client)
    {
      $this->client = $client;
    }

    public function index()
    {
      
    }
}
