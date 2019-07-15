<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{
  public function index(Request $request, Response $response) {
    $html = <<<EOF
<html>
<head>
<title>Hello/Index</title>
</head>
<style>
body {
  font-size: 16px;
  color: #999;
}

h1 {
  font-size: 100px;
  color: #eee;
}

p {
  text-align: center;
}

ul {
  text-align: center;
  list-style-type: none;
}
</style>
<body>
  <h1>Hello</h1>
  <h2>Request</h2>
  <pre>{$request}</pre>
  <h2>Response</h2>
  <pre>{$response}</pre>
</body>
</html>
EOF;

  $response->setContent($html);
  return $response;
  }
}
