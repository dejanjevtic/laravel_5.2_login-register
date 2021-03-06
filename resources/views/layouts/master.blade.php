<!DOCTYPE html>
<html>
    <head>
		<meta charset="utf-8">
        <title>Laravel</title>

        <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet prefetch" >
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    </head>
       
    
    <body>
	
        <div class="container">
           
			<ul class="nav nav-pills">
			
			@if(\Auth::check())
				<li>
				{{ link_to_route('logout','Logout')}}
			</li>
			@else
				<li>
				{{ link_to_route('login','Login')}}
			</li>
			@endif
			<li>
				{{ link_to_route('users.create','New User')}}
			</li>
			</ul>
			 @yield('content')
        </div>
    </body>
	
</html>
