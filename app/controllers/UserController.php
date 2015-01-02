<?php

class UserController extends \BaseController {

	protected $user;

	public  function __construct(User $user)
	{
		$this->user=$user;
	}

	public function index()
	{

			$users = $this->user->all();

			return View::make('users.index', ['users' => $users]);

	}

	public function  show($username)
	{
		$user = $this->user->whereUsername($username)->first();

		return View :: make('users.show',['user'=>$user]);
	}

	public function create()
	{
		//return 'show form to create users..';
		return View::make('users.create');
	}

	public function store()
	{
		//return 'Create the new user, given the post data..';
		//return Input::all();
		//return Input::get('username');
		$input=Input::all();

		$this->user->fill(Input::all());

		if(!$this->user->fill($input)->isValid())
		{
			return Redirect::back()->withInput()->withErrors($this->user->errors);
		}


		$this->user->save();

		//return Redirect::to('/users');
		return Redirect::route('users.index');

	}
}
?>