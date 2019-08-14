@extends('layouts.helloapp')

@section('title', 'Show')

@section('menubar')
  @parent
  詳細ページ
@endsection

@section('content')
  <table>
    <tr><th>ID: </th><td>{{ $item->id }}</td></tr>
    <tr><th>Name: </th><td>{{ $item->name }}</td></tr>
    <tr><th>Mail: </th><td>{{ $item->mail }}</td></tr>
    <tr><th>Age: </th><td>{{ $item->age }}</td></tr>
  </table>
@endsection

@section('footer')
  ©️Sample Site
@endsection
