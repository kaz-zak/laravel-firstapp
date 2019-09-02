<table>
    <form action="/rest" method="post">
        {{ csrf_field() }}
        <tr>Message: <th></th><td><input type="text" name="message" value="{{ old('message') }}"></td></tr>
        <tr>URL: <th></th><td><input type="text" name="url" value="{{ old('url') }}"></td></tr>
        <tr><th></th><td><input type="submit" value="送信"></td></tr>
    </form>
</table>
