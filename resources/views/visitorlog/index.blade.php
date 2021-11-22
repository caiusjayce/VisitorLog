@extends('base')

@section('content')

@if ($info = Session::get('info'))
<div class="card-body bg-success text-white" style="margin-bottom: 5px">
    {{$info}}
</div>
@endif
<div class="float-right">
<a style="background: rgb(84, 62, 28);
background: linear-gradient(90deg, rgba(84, 62, 28, 1) 3%;" href="{{url('/visitorlog/create')}}" class="btn btn-primary">
    Add New Visitor</a>
</div>

<h1>List of Visitor</h1>
<table class="table table-bordered table-striped table-sm">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Purpose</th>
            <th>Time</th>
        </tr>
    </thead>
    <tbody>
        @foreach($visitorlog as $v)

        <tr>
            <td>{$v->id}}</td>
            <td>{{$v->name}}</td>
            <td>{{$v->phone}}</td>
            <td>{{$v->purpose}}</td>
            <td>{{$v->time}}</td>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@stop
