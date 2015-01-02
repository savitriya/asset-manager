@extends('layouts.default')

@section('content')

		<h1>Create new User</h1>
		<script type="text/javascript">
        		  document.getElementById('created_at').value = Date();
        		  document.getElementById('updated_at').value = Date();
        		</script>

		{{Form::open(['route' => 'users.store'])}}
            <div>
                {{Form::label('username','Username:') }}
                {{Form::text('username')}}
                {{$errors->first('username','<span class=error>:message</span>')}}
            </div>

            <div>
                {{Form::label('Email','Email:') }}
                {{Form::email('email')}}
                {{$errors->first('email','<span class=error>:message</span>')}}
            </div>

            <div>
                {{Form::label('password','Password:') }}
                {{Form::password('password')}}
                {{$errors->first('password','<span class=error>:message</span>')}}
            </div>

            <div>
                {{Form::submit('Create User')}}
            </div>
		{{Form::close()}}

@stop