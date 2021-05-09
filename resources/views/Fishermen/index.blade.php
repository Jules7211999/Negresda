@extends('fishermen.layout')


@section('content')
    <authentication-component>
    <div id="index-button-wrapper">
        <a href="{{route('FLI')}}" ><button class="btn btn-dark">Login</button></a>
        <br>
        <a href="{{route('FRI')}}"><button class="btn btn-dark">Sign Up</button></a>
    </div>
 
    </authentication-component>
@endsection