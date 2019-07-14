<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('hello/{msg}', function ($msg) {
  $html = <<<EOF
<html>
<head>
<title>Hello, Laravel</title>
<style>
body {
  font-size: 16px;
  color: #999;
}
h1 {
  font-size: 100px;
  text-align: center;
  color: #eee;
}
p {
  text-align: center;
}
</style>
</head>

<body>
  <h1>Hello, Laravel</h1>
  <p>This is a sample site.</p>
  <p>サンプルページです。</p>
  <p>{$msg}</p>
</body>
</html>
EOF;
  

  return $html;
});
