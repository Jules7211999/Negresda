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
                        @error('Name')
                                <div class="error">{{$message}}</div>
                        @enderror
                    <li>
                     <label for="username">Username</label>
                    </li>
                    <li>
                        <input type="text" name="Username" value="{{old('Username')}}">
                    </li>
                        @error('Username')
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
                        <label for="email">Email (optional)</label>
                    </li>
                    <li>
                        <input type="text" name="email" value="{{old('Email')}}">
                    </li>
                        @error('email')
                            <div class="error">{{$message}}</div>
                        @enderror
                    <li class="submitbutton">
                         <button type="submit">Sign Up</button>
                    </li>      
               </ul>  
            </form>
        </authentication-component>




@endsection