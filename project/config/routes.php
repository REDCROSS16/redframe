<?php
use core\Route;
return [
    new Route('/test/', 'test', 'test'),
    new Route ('/', 'page', 'index'),
    new Route('/product/all/', 'product', 'all'),
    new Route( '/product/:id/', 'product', 'one')

];

