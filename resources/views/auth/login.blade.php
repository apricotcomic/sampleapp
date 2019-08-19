<html>
<head>
    <meta charset='utf-8'>
</head>
<body>
<h1>ログイン</h1>
<!--- エラーメッセージをここに表示します -->
@isset($message)
    <p style="color:red">{{$message}}</p>
@endisset
<!-- フォーム -->
<form name="loginform" action="/auth/login" method="post">
    <!--- csrf対応 -->
    {{ csrf_field }}
    ユーザーID:<input type="text" name="id" size="10" value="{{ old('id') }}"><br />
    パスワード:<input type="password" name="password" size="30"><br />
    <button type='submit' name='action' value='send'>ログイン</button>
</form>
</body>
</html>
