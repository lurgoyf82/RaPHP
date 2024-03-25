<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;;

class OmniRouteController extends Controller
{
    //
    public function index()
    {
        $links=[];
        foreach(\Illuminate\Support\Facades\Route::getRoutes()->get() as $route) {
            foreach($route->methods as $method) {
                $links[strtoupper($method)][]=url('/').'/'.$route->uri;
            }
        }
        $lastMethod=false;
        foreach($links as $method=>$link) {
            if($lastMethod) {
                echo '</ul>';
            }
            echo '<h2>'.$method.'</h2>';
            echo '<ul>';
            foreach($link as $l) {
                if($method=='GET'||$method=='HEAD') {
                    echo '<li><b>' . $method . '</b> - <a href=\'' . $l . '\' target="_blank">' . $l . '</a></li>' . "\n";
                } else {
                    echo '<li><b>' . $method . '</b> - ' . $l . '</li>' . "\n";
                }
            }
            $lastMethod=$method;
        }
    }

    // In a controller file

    public function autoform() {
        $routes = collect(\Illuminate\Support\Facades\Route::getRoutes())->map(function ($route) {
            return [
                'uri' => $route->uri(),
                'methods' => implode(', ', $route->methods()),
                'name' => $route->getName(), // Optional: Include if you use named routes
            ];
        });

        return view('autoform', compact('routes'));
    }

}
