@extends('layouts.helloapp')

@section('title', 'Board.Index')

@section('menubar')
    @parent
    掲示板ページ
@endsection

@section('content')
    <table>
        <tr><th>Data</th></tr>
        @foreach ($items as $item)
            <tr><td>{{ $item->getData() }}</td></tr>
        @endforeach
    </table>
@endsection

@section('footer')
    ©︎Sample Site
@endsection
