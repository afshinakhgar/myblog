<?php

namespace App\Blog;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

final class ListAction
{
    public function __invoke(Request $request, Response $response): Response
    {
        $response->getBody()->write('List of blog');

        return $response;
    }
}