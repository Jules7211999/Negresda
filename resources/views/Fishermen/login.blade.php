@extends('fishermen.layout')

@section('content')

        <authentication-component>
            
            <form action="" method="post">
               <ul>
                    <li>
                     <label for="username">Username</label>
                    </li>
                    <li>
                        <input type="text" name="Name" value="{{old('Name')}}">
                    </li>
                    <li>
                        <label for="password">Password</label>
                    </li>
                    <li>
                        <input type="text">
                    </li>
                    <li>
                        <input type="checkbox">
                        <label for="">Remember Me</label>
                    </li>
                    <li class="submitbutton">
                         <button type="submit" >Login</button>
                    </li>

                  

                    
               </ul>  
            </form>
        </authentication-component>
@endsection