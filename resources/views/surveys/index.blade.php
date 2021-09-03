@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 mt-3">
            <div class="pull-left">
                <h2>{{ config('app.name') }}</h2>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('surveys.store') }}" method="POST">
        @csrf
        <hr>
        <div class="form-row">
            <div class="col-xs-10 col-sm-10 col-md-10 mt-3">
                <label for="status"><strong>Are you a:</strong></label>
                <select required name="status" class="form-control" id="status" placeholder="status">
                    <option placeholder="Readonly input here…" readonly value="">Please choose an option</option>
                    <option>VCU Undergraduate Student</option>
                    <option>VCU Graduate/Professional Student</option>
                    <option>VCU Faculty</option>
                    <option>VCU Post-Doc Fellow, Research Associate, or Lecturer</option>
                    <option>VCU Staff</option>
                    <option>Other VCU (Please specify)</option>
                    <option>Non-VCU (Please specify)</option>
                </select>
            </div>
            <div class="col-xs-10 col-sm-10 col-md-10 mt-3">
                <label for="affiliation"><strong>Are you affiliated with:</strong></label>
                <select name="affiliation" class="form-control" id="affiliation">
                    <option>Humanities & Science</option>
                    <option>Arts</option>
                    <option>Business</option>
                    <option>Engineering</option>
                    <option>Government & Public Affairs</option>
                    <option>Mass Communications</option>
                    <option>Life Sciences</option>
                    <option>Social Work</option>
                    <option>World Studies</option>
                    <option>Medicine</option>
                    <option>Allied Health Professions</option>
                    <option>Nursing</option>
                    <option>Pharmacy</option>
                    <option>Dentistry</option>
                    <option>VCU Health System</option>
                    <option>Undeclared</option>
                </select>
            </div>
            <div class="col-xs-10 col-sm-10 col-md-10 mt-3">
                <label for="location"><strong>Your location is:</strong></label>
                <select name="location" class="form-control" id="location">
                    <option>In Cabell Library</option>
                    <option>In Health Sciences Library</option>
                    <option>Off-campus</option>
                    <option>On-campus</option>
                    <option>VCUarts Qatar campus</option>
                </select>
            </div>
            <div class="col-xs-10 col-sm-10 col-md-10 mt-3">
                <label for="purpose"><strong>Purpose for using online resource:</strong></label>
                <select name="purpose" class="form-control" id="purpose">
                    <option>Sponsored (Funded) Research</option>
                </select>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 mt-4">
                <button type="submit" class="btn btn-lg btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection
