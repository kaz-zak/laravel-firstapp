@extends('layouts.helloapp')

@section('title', 'ユーザー認証')

@section('menuber')
    @parent
    ユーザー認証ページ
@endsection

@section('content')
    <p>{{ $message }}</p>
    {{ csrf_field() }}
    <form action="/hello/auth" method="post">
        <tr><th>Mail: </th><td><input type="text" name="email"></td></tr>
        <tr><th>Password: </th><td><input type="password" name="password"></td></tr>
        <tr><th></th><td><input type="submit" value="送信"></td></tr>
    </form>
@endsection

@section('footer')
    ©︎Sample Site
@endsection
