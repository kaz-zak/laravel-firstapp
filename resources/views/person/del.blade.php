@extends('layouts.helloapp')

@section('title', 'Person.Delete')

@section('menubar')
    @parent
    削除ページ
@endsection

@section('content')
    <table>
        <form action="/person/del" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $form->id }}">
            <tr><th>Name: </th><td>{{ $form->name }}</td></tr>
            <tr><th>Mail: </th><td>{{ $form->mail }}</td></tr>
            <tr><th>Age: </th><td>{{ $form->age }}</td></tr>
            <tr><th></th><td><input type="submit" value="削除"></td></tr>
        </form>
    </table>
@endsection

@section('footer')
    ©︎Sample Site
@endsection
