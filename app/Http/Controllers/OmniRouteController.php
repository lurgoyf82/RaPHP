<?php

    namespace App\Http\Controllers;

    use Ably\Http;
    use Illuminate\Http\Request;
    use ReflectionClass;
    use ReflectionMethod;

    ;

    class OmniRouteController extends Controller {
        public function index() {
            $links = [];
            foreach (static::getAllRoutes() as $route) {
                foreach ($route->methods as $method) {
                    $links[strtoupper($method)][] = url('/') . '/' . $route->uri;
                }
            }
            $lastMethod = false;
            foreach ($links as $method => $link) {
                if ($lastMethod) {
                    echo '</ul>';
                }
                echo '<h2>' . $method . '</h2>';
                echo '<ul>';
                foreach ($link as $l) {
                    //if($method=='GET'||$method=='HEAD') {
                    //    echo '<li><b>' . $method . '</b> - <a href=\'' . $l . '\' target="_blank">' . $l . '</a></li>' . "\n";
                    //} else {
                    //    echo '<li><b>' . $method . '</b> - ' . $l . '</li>' . "\n";
                    //}

                    echo '<li><b>' . $method . '</b> - <a href=\'forminator?routehash=' . md5($l . $method) . '\' target="_blank">' . $l . '</a></li>' . "\n";

                }
                $lastMethod = $method;
            }
        }

        // In a controller file

        /**
         * Generates an autoform view with information about registered routes.
         *
         * @return Illuminate\View\View The autoform view.
         */
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


        /**
         * Generates a form for a given model.
         *
         * @param Request $request The request object.
         *
         * @return string The HTML form as a string.
         */
        public function forminator(Request $request) {
            $routeMethod = self::getRouteFromHash($request->input('routehash'));
            if ($routeMethod == false) {
                return 'Invalid route hash.';
            }

            extract(self::getRouteFromHash($request->input('routehash')));
            $controller = new(resolve($controller));
            $model = new($controller->getModel());

            return(static::buildForm($model,$method));
    }


        private static function getRouteFromHash($routeHash) {
            //checks routes for hashes
            foreach (static::getAllRoutes() as $route) {
                foreach ($route->methods as $method) {
                    $link = url('/') . '/' . $route->uri;
                    $hash = md5($link . $method);

                    if ($hash == $routeHash) {
                        $controller = ($route->getAction())['controller'];
                        $controller = substr($controller, 0, strpos($controller, '@'));
                        return compact('link', 'method', 'controller');
                    }
                }
            }
            return false;
        }


        private static function getAllRoutes() {
            return \Illuminate\Support\Facades\Route::getRoutes()->get();
        }

        /**
         * Builds the HTML form for a given model.
         *
         * @param Model $model The model instance for which to build the form.
         *
         * @return string The HTML form as a string.
         */
        private static function buildForm($model, $method = 'POST') {


            //$form = '<form action="' . route($model->getTable() . '.store') . '" method="'.$method.'">';
            $form = '<form action="' . $model->getTable() . '" method="'.$method.'">';
            $form .= self::buildFields($model);
            $form .= '<input type="submit" value="Submit">';
            $form .= '</form>';
            return $form;
        }


        /**
         * Builds the HTML fields for a given model.
         *
         * @param Model $model The model instance for which to build the fields.
         *
         * @return string The HTML fields as a string.
         */
        private static function buildFields($model) {
            $casts = $model->getCasts();
            $fields = '';

            foreach ($model->getFillable() as $field) {
                $fields .= "\n".'<br>'.'<label for="' . $field . '">' . $field . '</label>'.
                            "\n".'<input type="';

                if (array_key_exists($field, $casts)) {
                    switch ($casts[$field]) {
                        case 'integer':
                            $fields .= 'number';
                            break;
                        case 'float':
                            $fields .= 'number';
                            break;
                        default:
                            $fields .= 'text';
                    }
                } else {
                    $fields .= 'text';
                }

                $fields.='" name="' . $field . '">';
            }
            return $fields;
        }


    }
