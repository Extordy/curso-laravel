@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col">
            <h1>New Reports</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a class="btn btn-secondary" href="/expense_reports">Back</a>
        </div>
    </div>
            <div class="row">
                <div class="col">
                    <form action="/expense_reports" method="POST">
                        @csrf
                        <div class="form-grup">
                            <label for="title">Title:</label>
                            <input type="text" class="from-control" id="title" name="title" placeholder="Type a title">
                        </div>
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </form>
                </div>
            </div>
@endsection
