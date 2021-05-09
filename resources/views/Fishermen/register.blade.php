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
                        <input type="text" name="name" value="{{old('name')}}">
                    </li>
                        @error('name')
                                <div class="error">{{$message}}</div>
                        @enderror
                    <li>
                     <label for="username">Username</label>
                    </li>
                    <li>
                        <input type="text" name="username" value="{{old('username')}}">
                    </li>
                        @error('username')
                            <div class="error">{{$message}}</div>
                        @enderror
                    <li>
                        <label for="password">Password</label>
                    </li>
                    <li>
                        <input type="text" name="password">
                    </li>
                        @error('password')
                            <div class="error">{{$message}}</div>
                        @enderror
                    <li >
                        <label for="confirmpassword">Confirm Password</label>
                    </li>
                    <li>
                        <input type="text" name="password_confirmation">
                    </li>
                        @error('password_confirmation')
                            <div class="error">{{$message}}</div>
                        @enderror
                    <li>
                        <label for="email">Email</label>
                    </li>
                    <li>
                        <input type="text" name="email" value="{{old('Email')}}">
                    </li>
                        @error('email')
                            <div class="error">{{$message}}</div>
                        @enderror
                    <li class="submitbutton">
                         <button type="submit" class="btn btn-dark">Sign Up</button>
                    </li>      
               </ul>  
            </form>
        </authentication-component>




@endsection