@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 mt-3 mb-3">
            <h2>{{ config('app.name', 'Usage Survey') }}</h2>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="col-lg-12 mt-1 alert alert-success text-center">
            <p>
            <h5>{{ $message }}</h5>
            </p>
        </div>
    @endif
    @if ($resource = Session::get('url'))
        <script>
            let seshRed = "{{ $resource }}";
            let resourceRedirect = setTimeout(function resRed() {
                window.location.replace(seshRed);
            }, 20000);
        </script>
    @endif
@endsection
