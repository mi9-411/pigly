<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新規会員登録</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/register1.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lusitana&family=Shippori+Mincho+B1&display=swap" rel="stylesheet">
</head>
<body>
    <main>
        <div class="register-content">
            <div class="content-title">
                <h1>PiGLy</h1>
                <h3>新規会員登録</h3>
                <p>STEP1 アカウント情報の登録</p>
            </div>
            <form class="form" action="/register" method="post">
                @csrf
                <div class="form-group">
                    <div class="form-group-title">
                        <span class="form-label--item">お名前</span>
                    </div>
                    <div class="form-group-content">
                        <div class="form-input--text">
                            <input type="text" name="name" placeholder="名前を入力" />
                        </div>
                        <div class="form-error"></div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-group-title">
                        <span class="form-label--item">メールアドレス</span>
                    </div>
                    <div class="form-group-content">
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
                    <div class="form-group-content">
                        <div class="form-input--text">
                            <input type="password" name="password" placeholder="パスワードを入力">
                        </div>
                        <div class="form-error"></div>
                    </div>
                </div>
                <div class="form-button">
                    <button class="form-button-submit" type="submit">次に進む</button>
                </div>
            </form>
            <div class="login-link">
                <a class="login-button-submit" href="/login">ログインはこちら</a>
            </div>
        </div>
    </main>
</body>
</html>