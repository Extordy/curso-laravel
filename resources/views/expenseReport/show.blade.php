@extends('layouts.base')

@section('content')

    <div class="row">
        @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        <div class="col">
            <h1>Report: {{ $report->title }}</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a class="btn btn-secondary" href="/expense_reports">Back</a>
        </div>
    </div>
        <div class="row">
            <div class="col">
                <a class="btn btn-primary" href="/expense_reports/{{ $report->id }}/confirmSendMail">Send Email</a>
            </div>
    </div>
            <div class="row">
                <!--crear la seccion donde se mostrara los detalles de cadea reporte  -->
                <div class="col">
                    <h3>Details</h3>
                    <table class="table">
                        @foreach ($report->expenses as $expense )
                            <tr>
                                <td>{{ $expense->description }}</td>
                                <td>{{ $expense->created_at }}</td>
                                <td>{{ $expense->amount }}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <a class="btn btn-primary" href="/expense_reports/{{ $report->id }}/expenses/create">New expense</a>
                </div>
            </div
@endsection
