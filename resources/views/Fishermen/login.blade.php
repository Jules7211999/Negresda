@extends('fishermen.layout')

@section('content')

        <authentication-component>
            
            <form action="{{route('FL')}}" method="post">
            @csrf
               <ul>
                    <li>
                     <label for="username">Username</label>
                    </li>
                    <li>
                        <input type="text" name="username" value="{{old('Name')}}">
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
                        <div class="error"> {{$message}}</div>
                    @enderror
                    <li>
                        <input type="checkbox">
                        <label for="">Remember Me</label>
                    </li>
                    <li class="submitbutton">
                         <button type="submit" class="btn btn-dark">Login</button>
                    </li>

                  

                    
               </ul>  
            </form>
        </authentication-component>
@endsection