@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <h1>New expense</h1>
        </div>
    </div>
        <div class="row">
            <div class="col">
            <a class="btn btn-secondary" href="/expense_reports/{{ $report->id}}">Back</a>
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
                <form action="/expense_reports/{{ $report->id}}/expenses" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="title">description:</label>
                        <input type="text" placeholder="description" name="description" value="{{ old('description')}}" id="description" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="title">amount:</label>
                        <input type="text" placeholder="amount" name="amount" value="{{ old('amount')}}" id="amount" class="form-control">
                    </div>
                    <button class="btn btn-primary" type="submit">Enviar</button>
                  </form>
            </div>
        </div>         
    </div>    
@endsection