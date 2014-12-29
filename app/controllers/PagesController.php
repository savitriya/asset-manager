<?php

    class PagesController extends BaseController
    {

        public function home()
        {
            $name='Harsh';

            return View::make('hello')->with('name',$name);
        }

        public function about()
        {
            return View::make('about');
        }

        public function contact()
        {
            $name='Harsh';

            return View::make('contact')->with('name',$name);
        }
    }

?>