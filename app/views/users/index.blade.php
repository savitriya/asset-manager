@extends('layouts.default')

@section('content')
		@if($users->count()==0)

                    <h1>no user found</h1>
        		@else
        			@foreach($users as $user)

        		   		 <li>{{link_to("/users/{$user->username}",$user->username) }}</li>

        			@endforeach

        		@endif
@stop