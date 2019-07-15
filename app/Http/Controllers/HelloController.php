<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
  public function __invoke() {
    return <<<EOF
<html>
<head>
<title>Hello</title>
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
  <h1>Single Action</h1>
  <p>シングルコントローラのアクションを実行しています。</p>
</body>
</html>
EOF;
  }
}
