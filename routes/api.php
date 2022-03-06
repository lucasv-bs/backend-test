<?php

use App\Http\Response;
use App\Controller\Api\Investment;


$router->get(
    '/api/v1/investments',
    [
        function($request) 
        {
            return new Response(200, Investment::getInvestmentList($request));
        }
    ]
);
