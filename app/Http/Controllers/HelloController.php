<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
  public function index($id = 'noname', $pass = 'unknown') {
    return <<<EOF
<html>
<head>
<title>Hello/index</title>
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
  <h1>Index</h1>
  <p>Helloコントローラのindexアクションによって表示されているページです</p>
  <ul>
    <li>ID: {$id}</li>
    <li>PASS: {$pass}</li>
  </ul>
</body>
</head>
</html>
EOF;
  }
}