@extends('layouts.app')

@section('content')

@if(isset($companies))
    <div class="container mt-3">
        <h2>Bordered Table</h2>
        <p>The .table-bordered class adds borders on all sides of the table and the cells:</p>            
        <table class="table table-bordered">
        <thead>
            <tr>
            <th>#</th>
            <th>id</th>
            <th>Company name</th>
            <th>Company type</th>
            <th>Level</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($companies as $c_one)
                 <br>   
                <tr>
                    <td>#</td>
                    <td>{{ $c_one->id }}</td>
                    <td>{{ $c_one->name }}</td>
                    <td>{{ $c_one->type }}</td>
                    <td>{{ $c_one->level }}</td>
                </tr>            
            @endforeach
            
        </tbody>
        </table>
    </div>    
@endif
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<i class="bi-alarm"></i>
<i class="material-icons">cloud</i>
<i class="glyphicon glyphicon-envelope"></i>


@endsection