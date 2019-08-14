@extends('layouts.helloapp')

@section('title', 'Show')

@section('menubar')
  @parent
  詳細ページ
@endsection

@section('content')
  @if ($items != null)
    @foreach ($items as $item)
      <table width="500px">
        <tr>
          <th width="30px">ID: </th><td width="60px">{{ $item->id }}</td>
          <th width="30px">Name: </th><td width="60px">{{ $item->name }}</td>
          <th width="30px">Age: </th><td width="60px">{{ $item->age }}</td>
        </tr>
      </table>
    @endforeach
  @endif
@endsection

@section('footer')
  ©️Sample Site
@endsection
