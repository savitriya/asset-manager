<?php
/**
 * Created by PhpStorm.
 * User: HARSH
 * Date: 30-Dec-14
 * Time: 4:54 PM
 */

    class SessionsController extends BaseController
    {
        public function create()
        {
            if(Auth::check()) return Redirect::to('contact');

            return View::make('Sessions.create');
        }

        public function store()
        {

            if(Auth::attempt(Input::only('email','password')))
            {
                return Redirect::to('contact');
            }
            return 'Failed.....';
        }
        public function destroy()
        {
            Session::flush();
            Auth::logout();
            return Redirect::route('sessions.create');
        }
    }


?>