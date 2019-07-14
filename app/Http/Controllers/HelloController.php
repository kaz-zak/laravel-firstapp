<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
  public function index() {
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
    text-align: center:
    color: #eee;
  }

  p {
    text-align: center;
  }
</style>
<body>
  <h1>Index</h1>
  <p>Helloコントローラのindexアクションのテスト</p>
</body>
</head>
</html>
EOF;
  }
}