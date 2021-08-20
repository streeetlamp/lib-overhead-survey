@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>{{ config('app.name', 'Usage Survey') }}</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('surveys.create') }}" title="Create a survey"> <i class="fas fa-plus-circle"></i>
                    </a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Introduction</th>
            <th>Location</th>
            <th>Cost</th>
            <th>Date Created</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($surveys as $survey)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $survey->name }}</td>
                <td>{{ $survey->introduction }}</td>
                <td>{{ $survey->location }}</td>
                <td>{{ $survey->cost }}</td>
                <td>{{ date_format($survey->created_at, 'jS M Y') }}</td>
                <td>
                    <form action="{{ route('surveys.destroy', $survey->id) }}" method="POST">

                        <a href="{{ route('surveys.show', $survey->id) }}" title="show">
                            <i class="fas fa-eye text-success  fa-lg"></i>
                        </a>

                        <a href="{{ route('surveys.edit', $survey->id) }}">
                            <i class="fas fa-edit  fa-lg"></i>

                        </a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" title="delete" style="border: none; background-color:transparent;">
                            <i class="fas fa-trash fa-lg text-danger"></i>

                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {{-- {!! $surveys->links() !!} --}}

@endsection
