<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログイン</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lusitana&family=Shippori+Mincho+B1&display=swap" rel="stylesheet">
</head>
<body>
    <main>
        <div class="login-content">
            <div class="content-title">
                <h1>PiGly</h1>
                <h3>ログイン</h3>
            </div>
            <form class="form" action="/login" method="post">
                @csrf
                <div class="form-group">
                    <div class="form-group-title">
                        <span class="form-label--item">メールアドレス</span>
                    </div>
                    <div class="form-content">
                        <div class="form-input--text">
                            <input type="email" name="email" placeholder="メールアドレスを入力">
                        </div>
                        <div class="form-error"></div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-group-title">
                        <span class="form-label--item">パスワード</span>
                    </div>
                    <div class="form-content">
                        <div class="form-input--text">
                            <input type="password" name="password" placeholder="パスワードを入力">
                        </div>
                        <div class="form-error"></div>
                    </div>
                </div>
                <div class="form-button">
                    <button class="form-button-submit" type="submit">ログイン</button>
                </div>
            </form>
            <div class="register-link">
                <a class="register-button-submit" href="/register">アカウント作成はこちら</a>
            </div>
        </div>
    </main>
</body>
</html>