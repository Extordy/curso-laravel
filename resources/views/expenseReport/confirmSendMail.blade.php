@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col">
            <h1>Send Reports</h1>
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
            <a class="btn btn-secondary" href="/expense_reports">Back</a>
        </div>
    </div>
            <div class="row">
                <div class="col">
                    <form action="/expense_reports/{{ $report->id }}/sendMail" method="POST">
                        @csrf
                        <div class="form-grup">
                            <label for="email">Email:</label>
                            <input type="text" class="from-control" id="email" name="email" placeholder="Type a email" value="{{ old('email') }}">
                        </div>
                        <button class="btn btn-primary" type="submit">Send mail</button>
                    </form>
                </div>
            </div>
@endsection
