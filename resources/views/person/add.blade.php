@extends('layouts.helloapp')

@section('title', 'Person.Add')

@section('menubar')
    @parent
    新規作成ページ
@endsection

@section('content')
    @if (count($errors) > 0)
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <table>
        <form action="/person/add" method="post">
            {{ csrf_field() }}
            <tr><th>Name: </th><td><input type="text" name="name"></td></tr>
            <tr><th>Mail: </th><td><input type="text" name="mail"></td></tr>
            <tr><th>Age: </th><td><input type="number" name="age"></td></tr>
            <tr><th></th><td><input type="submit" value="送信"></td></tr>
        </form>
    </table>
@endsection

@section('footer')
    ©︎Sample Site
@endsection
