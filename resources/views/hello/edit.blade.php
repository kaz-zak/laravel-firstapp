@extends('layouts.helloapp')

@section('title', 'Edit')

@section('member')
  @parent
  更新ページ
@endsection

@section('content')
  <table>
  <form action="post" action="/hello/edit">
    {{ csrf_field() }}
    <input type="hidden" name="id" value="{{ $form->id }}">
    <tr><th>Name: </th><td><input type="text" name="name" value="{{ $form->name }}"></td></tr>
    <tr><th>Mail: </th><td><input type="text" name="mail" value="{{ $form->mail }}"></td></tr>
    <tr><th>Age: </th><td><input type="text" name="age" value="{{ $form->age }}"></td></tr>
    <tr><th></th><td><input type="submit" value="送信"></td></tr>
  </form>
  </table>
@endsection

@section('footer')
  ©️Sample Site
@endsection