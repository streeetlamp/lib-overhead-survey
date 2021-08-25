@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 mt-3 mb-2">
                <h2>{{ config('app.name', 'Usage Survey') }}</h2>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
@endsection
