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
            @if ($resource = Session::get('url'))
                <a class="btn btn-primary" href="{{ $resource }}" role="button">Proceed to resource</a>
                <script>
                    // let resourceRedirect = setTimeout(function resRed() {
                    //     window.location.href = "{!! $resource !!}";
                    // }, 3000);
                </script>
            @endif
            </p>
        </div>
    @endif
@endsection
