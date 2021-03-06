@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col">
            <h1>Edit Reports {{ $report->id }}</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <a class="btn btn-secondary" href="/expense_reports">Back</a>
        </div>
    </div>
            <div class="row">
                <div class="col">
                    <form action="/expense_reports/{{ $report->id }}" method="POST">
                        @csrf
                        @method('put')
                        <div class="form-grup">
                            <label for="title">Title:</label>
                            <input type="text" class="from-control" id="title" name="title" placeholder="Type a title" value="{{ old('title') }}">
                        </div>
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </form>
                </div>
            </div>
@endsection
