<?php

/**
 * This file is part of the miniCMS package.
 * (c) 2005-2012 BATMUNKH Moltov <contact@batmunkh.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

$router->respond('GET', '/', function () {
    echo  '<h3>Home page</h3>Hello World!<hr />';
//    return 'Hello World!';
});