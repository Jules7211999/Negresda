@extends('fishermen.layout')


@section('content')
    <authentication-component>
    <div id="index-button-wrapper">
        <a href="{{route('FL')}}"><button>Login</button></a>
        <br>
        <a href="{{route('FR')}}"><button >Sign Up</button></a>
    </div>
 
    </authentication-component>
@endsection