@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <form role="search" action="{{ route('search.result') }}" method="post">
              {{ csrf_field() }}
              <div class="input-group mb-3">
                <input type="text" class="form-control" name="query" value="{{ $query }}" placeholder="Search a library">
                <div class="input-group-append">
                  <button class="btn btn-outline-secondary" type="submit">Search</button>
                </div>
              </div>

            </form>

            {{ $query }}
        </div>
    </div>
</div>
@endsection
