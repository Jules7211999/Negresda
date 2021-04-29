@extends('fishermen.layout')


@section('content')
    <authentication-component>
    <div id="index-button-wrapper">
        <a href="{{route('FLI')}}"><button>Login</button></a>
        <br>
        <a href="{{route('FRI')}}"><button >Sign Up</button></a>
    </div>
 
    </authentication-component>
@endsection