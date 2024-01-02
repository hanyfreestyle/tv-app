<?php
namespace App\Http\Controllers;

use App\Models\admin\Post;
use App\Models\admin\shop\Order;

class HomeController extends WebMainController
{

    public function __construct()
    {
        $this->middleware('auth');
    }




    public function index()
    {

    }



}
