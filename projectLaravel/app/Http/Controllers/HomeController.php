<?php
// create a controller to route initial page

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

//class HomeController to use method __invoke and send initial page
class HomeController extends Controller
{
    //method to call home page
    public function __invoke()
    {
        return view('home');
    }
}
