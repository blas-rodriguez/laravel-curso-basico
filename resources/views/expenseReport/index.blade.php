@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col">
            <h1>Report</h1>
        </div>
    </div>
        <div class="row">
            <div class="col">
                <a class="btn btn-primary" href="/expense_reports/create">create a new report</a>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <table class="table">
                    @foreach ($expenseReports as $sxpenseReport)
                    <tr>
                    {{-- <td>{{$sxpenseReport->title }}</td> --}}
                    <td><a href="/expense_reports/{{ $sxpenseReport->id }}">{{$sxpenseReport->title }}</a> </td>
                    <td><a href="/expense_reports/{{ $sxpenseReport->id }}/edit">Edit</a> </td>
                    <td><a href="/expense_reports/{{ $sxpenseReport->id }}/confirmDelete">Delete</a></td>
                    </tr>
                    @endforeach
                </table>   
            </div>
        </div>         
    
@endsection