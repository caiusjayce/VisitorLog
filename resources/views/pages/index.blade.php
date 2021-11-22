@extends('base')

@section('content')

<style>
    img {
        width: 1150px;
        padding: 5px;
    }
</style>

<body>

    <div class="welcome">
        <img src="{{ asset('visitor.png') }}" alt="visitor-image">
    </div>

</body>

@stop
