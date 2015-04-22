<?php namespace App\Http\Controllers;

class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

    /**
     * Create a new controller instance.
     *
     * @param ViewController $viewController
     */
	public function __construct(ViewController $viewController)
	{
		$this->middleware('guest');
        $this->view = $viewController;
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
        $this->view->trigger();
		return view('welcome');
	}

    public function menu()
    {
        return view('menu');
    }

}
