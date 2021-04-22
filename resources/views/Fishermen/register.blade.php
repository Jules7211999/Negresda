@extends('fishermen.layout')

@section('content')

<authentication-component> 
            <form action="" method="post">
               <ul>
               <li>
                     <label for="Name">Name</label>
                    </li>
                    <li>
                        <input type="text">
                    </li>
                    <li>
                     <label for="username">Username</label>
                    </li>
                    <li>
                        <input type="text">
                    </li>
                    <li>
                        <label for="password">Password</label>
                    </li>
                    <li>
                        <input type="text">
                    </li>
                    <li >
                        <label for="confirmpassword">Confirm Password</label>
                    </li>
                    <li>
                        <input type="text">
                    </li>
                    <li>
                        <label for="email">Email (optional)</label>
                    </li>
                    <li>
                        <input type="text">
                    </li>
                    <li class="submitbutton">
                         <button type="submit">Login</button>
                    </li>      
               </ul>  
            </form>
        </authentication-component>




@endsection