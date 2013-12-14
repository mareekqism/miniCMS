<?php

/**
 * This file is part of the miniCMS package.
 * (c) 2005-2012 BATMUNKH Moltov <contact@batmunkh.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

$router->respond('GET', '/', function () {
    echo  '<h2>Router is working</h2>Homepage. Hello World!<hr />';
    
    set_module(DEFAULT_APP);
    set_module(DEFAULT_MODULE);
    set_action(DEFAULT_ACTION);
//    return 'Hello World!';
});