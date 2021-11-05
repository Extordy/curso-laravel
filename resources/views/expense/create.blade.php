@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col">
            <h1>New Expense</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <!--se crea la seccion donde se mostrara la alertas -->
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <a class="btn btn-secondary" href="/expense_reports/{{ $report->id }}">Back</a>
        </div>
    </div>
            <div class="row">
                <div class="col">
                        <!--se crea la seccion donde se mostrara la alertas -->
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                    <form action="/expense_reports/{{ $report->id }}/expenses" method="POST">
                        @csrf
                        <div class="form-grup">
                            <label for="title">Description:</label>
                            <input type="text" class="from-control" id="description" name="description" placeholder="Type a description" value="{{ old('title') }}">
                        </div>
                        <div class="form-grup">
                            <label for="title">Amount:</label>
                            <input type="text" class="from-control" id="amount" name="amount" placeholder="Type a amount" value="{{ old('title') }}">
                        </div>
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </form>
                </div>
            </div>
@endsection
