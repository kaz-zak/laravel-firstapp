
@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
  @parent
  インデックスページ
@endsection

@section('content')
  <p>{{ $msg }}</p>

  @if (count($errors) > 0)
  <p>入力内容に不備があります。再入力をお願いします。</p>
  @endif

  <table>
    <form action="/hello" method="post">
      {{ csrf_field() }}
      @if ($errors->has('msg'))
        <tr><th>Error: </th><td>{{ $errors->first('msg') }}</td></tr>
      @endif
      <tr><th>Message: </th><td><input type="text" name="msg" value="{{ old('msg') }}"></td></tr>
      <tr><th></th><td><input type="submit" value="送信"></td></tr>
    </form>
  </table>

@endsection

@section('footer')
  ©️sample site
@endsection
