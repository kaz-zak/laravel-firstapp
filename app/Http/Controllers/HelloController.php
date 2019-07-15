<?php
namespace App\Http\Controllers;

global $head, $style, $body, $end;
$head = '<html><head>';
$style = <<<EOF
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
EOF;
$body = '</head><body>';
$end = '</body></head>';

function tag($tag, $text) {
  return "<{$tag}>" . $text . "</{$tag}>";
}

use Illuminate\Http\Request;

class HelloController extends Controller
{
  public function index() {
    global $head, $style, $body, $end;

    $html = $head . tag('title', 'Hello/Index') . 
            $style . 
            $body .
            tag('h1', 'Index') .
            tag('p', 'This is index page!') .
            '<a href="/hello/other">Go to other page.</a>' .
            $end;

    return $html;
  }

  public function other() {
    global $head, $style, $body, $end;

    $html = $head . tag('title', 'Hello/Other') . 
            $style .
            $body .
            tag('h1', 'Other') .
            tag('p', 'This is other page.') .
            $end;

    return $html;
  }
}
