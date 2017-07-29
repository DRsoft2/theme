<?php
/**
 * Created by PhpStorm.
 * User: rabie
 * Date: 29/07/2017
 * Time: 12:32
 */

namespace Drsoft\Theme\Controllers;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ThemesController extends Controller
{

    public function index(){

        return view('theme::index');
    }
}
