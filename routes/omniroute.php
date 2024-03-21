<?php
    use Illuminate\Support\Facades\Route;

    Route::get('/omniroute', function () {


        foreach(Route::getRoutes()->get() as $route) {
            if(!in_array('GET', $route->methods)) continue;
            echo '<li><a href=\''.$route->uri.'\' target="_blank">http://dev.backend.torental.bentraining.it/'.$route->uri.'</a></li>';
        }


    });
