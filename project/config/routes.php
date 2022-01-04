<?php
use core\Route;
return [
    new Route('/test/', 'test', 'test'),
    new Route ('/', 'page', 'index'),
    new Route('/product/all/', 'product', 'all'),
    new Route( '/product/:id/', 'product', 'one'),
    new Route('/parser/training/', 'parser', 'training'),
    new Route('/parser/curl/', 'parser', 'curl'),
    new Route('/calendar/', 'calendar', 'calendar'),
    new Route('/file/all/','file', 'all'),
    new Route('/file/', 'file', 'upload'),
    new Route('/file/:name/','file', 'getfile'),


];

