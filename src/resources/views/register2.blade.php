<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新規会員登録</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/register2.css') }}">
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
                <p>STEP2 体重データの入力</p>
            </div>
            <form class="form" action="/weight_logs" method="post">
                @csrf
                <div class="form-group">
                    <div class="form-group-title">
                        <span class="form-label--item">現在の体重</span>
                    </div>
                    <div class="form-group-content">
                        <div class="form-input--text">
                            <input type="text" name="weight" placeholder="現在の体重を入力">
                        </div>
                        <div class="form-error"></div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-group-title">
                        <span class="form-label--item">目標の体重</span>
                    </div>
                    <div class="form-group-content">
                        <div class="form-input--text">
                            <input type="text" name="target_weight" placeholder="目標の体重を入力">
                        </div>
                        <div class="form-error"></div>
                    </div>
                </div>
                <div class="form-button">
                    <button class="form-button-submit" type="submit">アカウント作成</button>
                </div>
            </form>
        </div>
    </main>
</body>
</html>