@extends('layouts.helloapp')

@section('title', 'Board.Index')

@section('menubar')
    @parent
    掲示板ページ
@endsection

@section('content')
    <table>
        <tr><th>Message</th><th>Name</th></tr>
        @foreach ($items as $item)
            @if (isset($item->person))
                <tr><td>{{ $item->message }}</td><td>{{ $item->person->name }}</td></tr>
            @endif
        @endforeach
    </table>
@endsection

@section('footer')
    ©︎Sample Site
@endsection
