<?php

namespace App\Services;

use App\Services\ServiceAbstract;

class Libraries extends ServiceAbstract
{
  public function get()
  {
    $response = $this->client->request('GET', 'https://api.cdnjs.com/libraries');

    $libraries = json_decode($response->getBody());

    return $libraries;
  }
}
