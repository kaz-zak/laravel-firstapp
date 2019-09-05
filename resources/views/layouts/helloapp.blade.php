<html>
<head>
  <title>@yield('title')</title>
  <style>
    body { font-size: 16px; color: #999; margin: 5px; }
    h1 { font-size: 50px; text-align: right; color: #f6f6f6; }
    ul { font-size: 12px; }
    hr { margin: 25px 100px; border-top: 1px dashed #ddd;  }
    .menutitle { font-size: 14px; font-weight: bold; margin: 0; }
    .content { margin: 10px; }
    .footer { text-align: right; font-size: 10px; margin: 10px; border-bottom: 1px solid #ccc; color: #ccc; }
    th { background-color: #999; color: #fff; padding: 5px 10px; }
    td { border: solid 1px #aaa; color: #999; padding: 5px 10px; }
  </style>
  <link rel="stylesheet" href="/css/app.css">
</head>

  <body>
    <h1>@yield('title')</h1>
    @section('menubar')
    <ul>
      <p class="menutitle">※メニュー</p>
      <li>@show</li>
    </ul>

    <hr size="1">

    <div class="content">
    @yield('content')
    </div>

    <footer class="footer">
    @yield('footer')
    </footer>
  </body>
</html>
