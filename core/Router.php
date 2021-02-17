<?php


namespace app\core;


/**
 * Class Router
 *
 * This is where we call controllers and methods.
 *
 * @package app\core
 */
class Router
{
    /**
     * This will hold all routes.
     *
     * routes[
     *  ['get']=>[
     *      ['/'=>function return,],
     *      ['/about'=>function return,]
     *  ],
     *  ['post']=>[
     *      ['/'=>function return,],
     *      ['/about'=>function return,]
     *  ],
     *
     * ];
     *
     * @var array
     */
    protected array $routes = [];
    /**
     * @var Request
     */
    public Request $request;


    public function __construct($request)
    {
        $this->request = $request;
//        echo "This is Router constructor" . PHP_EOL;
    }


    /**
     * @param $path
     * @param $callback
     */
    public function get($path, $callback)
    {
        $this->routes['get'][$path] = $callback;
    }


    public function resolve()
    {
        $path = $this->request->getPath();
        $method = $this->request->getMethod();

        var_dump($this->routes);
        var_dump($path);
        var_dump($method);

        //trying to run a route from routes array
        $callback = $this->routes[$method][$path] ?? false;
        //if there is no such route added, we say not exist

        if ($callback === false):
            echo "Page doesnt exists";
            die();
        endif;

        // page does exist we call user function

        echo call_user_func($callback);
    }

}