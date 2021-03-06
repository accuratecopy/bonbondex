<?php
/**
 * This file hold all routes definitions.
 *
 * PHP version 7
 *
 * @author   WCS <contact@wildcodeschool.fr>
 *
 * @link     https://github.com/WildCodeSchool/simple-mvc
 */

$routes = [
    'Candy' => [
        ['index', '/candy', 'GET'],
        ['show','/candy/show','GET'],
        ['add','/candy/add',['GET', 'POST']],
    ],
    'Home' => [
        ['index', '/', 'GET'],
    ]
];
