@extends('layouts.default')

@section('content')

        <div class="section">
        	    	<div class="container">
        				<div class="col-md-4 col-sm-6"></div>
        				<div class="col-md-4 col-sm-6 row">
        					<div class="">
        						<div class="basic-login">
        							{{Form::open(['route'=>'sessions.store'])}}
        								<div class="form-group">
        					                {{Form::label('email','Email:')}}
                                            {{Form::password('email',array('class' => 'form-control'))}}
                                    	</div>
        								<div class="form-group">
        								     {{Form::label('password','Password:')}}
                                             {{Form::password('password',array('class' => 'form-control'))}}
        		        				</div>
        									<a href="page-password-reset.html" class="forgot-password">Forgot password?</a>
        									{{Form::submit('login',array('class' => 'btn pull-right')) }}
        									<div class="clearfix"></div>
        								</div>
        							{{Form::close()}}
        						</div>
        					</div>
        					<div class="social-login">
        						<div class="clearfix"></div>
        						<div class="not-member">
        							<p>Not a member? <a href="page-register.html">Register here</a></p>
        						</div>
        					</div>
        				</div>
        			</div>
        		</div>

        <div>
        </div>
        <div>

        </div>
        <div>

        </div>
        {{Form::close()}}

@stop