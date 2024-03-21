<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;

    class UserController extends RaPHPController
    {
        /**
         * Constructor method.
         *
         * Initializes the __construct object with the model class \App\Models\User.
         *
         * @return void
         */
        public function __construct()
        {
            $this->model = \App\Models\User::class;
        }

        public function user(Request $request)
        {
            return response()->json($request->user());
        }
    }
