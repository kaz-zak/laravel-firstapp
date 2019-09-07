@extends('layouts.helloapp')

@section('title', 'ユーザー認証')

@section('menubar')
    @parent
    ユーザー認証ページ
@endsection

@section('content')
    <table>
        <p>{{ $message }}</p>
        <form action="/hello/auth" method="post">
            {{ csrf_field() }}
            <tr><th>Mail: </th><td><input type="text" name="email"></td></tr>
            <tr><th>Password: </th><td><input type="password" name="password"></td></tr>
            <tr><th></th><td><input type="submit" value="送信"></td></tr>
        </form>
    </table>
@endsection

@section('footer')
    ©︎Sample Site
@endsection
