<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PiGLy</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/goal.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
</head>
<body>
    @include('components.header')
    <main>
        <div class="goal-content">
            <div class="goal-title">
                <h3>目標体重設定</h3>
            </div>
            <form class="form" action="/weight_logs" method="post">
                @csrf
                <div class="form-input-text">
                    <input type="text" name="target_weight"> kg
                </div>
                <div class="form-button">
                    <a class="redirect-button" href="/weight_logs">戻る</a>
                    <button class="form-button-submit">更新</button>
                </div>
            </form>
        </div>
    </main>
</body>
</html>