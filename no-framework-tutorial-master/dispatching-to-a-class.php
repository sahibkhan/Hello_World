<?php

namespace Example\Controllers;

class Homepage
{
    public function show()
    {
        echo 'Hello World';
    }
}

return [
    ['GET', '/', ['Example\Controllers\Homepage', 'show']],
];

case \FastRoute\Dispatcher::FOUND:
    $className = $routeInfo[1][0];
    $method = $routeInfo[1][1];
    $vars = $routeInfo[2];
    
    $class = new $className;
    $class->$method($vars);
    break;
