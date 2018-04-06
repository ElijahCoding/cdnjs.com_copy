<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdvanceSearchController extends Controller
{
    public function index(Request $request)
    {
      return view('search.index');
    }

    public function getResult(Request $request)
    {
      $query = $request->input('query');

      if ($query === null) {
        return response(null, 404);
      }

      return view('search.result', compact('query'));
    }
}
