@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>{{ config('app.name', 'Usage Survey') }}</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('surveys.index') }}" title="Create a survey"> <i class="fas fa-plus-circle"></i>
                    </a>
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
@endsection
