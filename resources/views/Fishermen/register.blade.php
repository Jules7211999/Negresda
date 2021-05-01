@extends('fishermen.layout')

@section('content')

<authentication-component> 
            <form action="{{route('FR')}}" method="post">
            @csrf
               <ul>
               <li>
                     <label for="Name">Name</label>
                    </li>
                    <li>
                        <input type="text" name="Name" value="{{old('Name')}}">
                    </li>
                    <li>
                     <label for="username">Username</label>
                    </li>
                    <li>
                        <input type="text" name="Username" value="{{old('Username')}}">
                    </li>
                    <li>
                        <label for="password">Password</label>
                    </li>
                    <li>
                        <input type="text" name="Password">
                    </li>
                    <li >
                        <label for="confirmpassword">Confirm Password</label>
                    </li>
                    <li>
                        <input type="text" name="password_confirmation">
                    </li>
                    <li>
                        <label for="email">Email (optional)</label>
                    </li>
                    <li>
                        <input type="text" name="Email" value="{{old('Email')}}">
                    </li>
                    <li class="submitbutton">
                         <button type="submit">Login</button>
                    </li>      
               </ul>  
            </form>
        </authentication-component>




@endsection