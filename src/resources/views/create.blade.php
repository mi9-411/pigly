<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PiGLy</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/create.css') }}">
</head>
<body>
    <div class="create-content">
        <div class="create-heading">
            <h3>Weight Logを追加</h3>
        </div>
        <form class="form" action="">
            <div class="form-group">
                <div class="form-group-title">
                    <span class="form-label--item">日付</span>
                    <span class="form-label--required">必須</span>
                </div>
                <div class="form-group-content">
                    <div class="form-input--text">
                        <input type="date" name="date" placeholder="年/月/日">
                    </div>
                    <div class="form-error"></div>
                </div>
            </div>
            <div class="form-group">
                <div class="form-group-title">
                    <span class="form-label--item">体重</span>
                    <span class="form-label--required">必須</span>
                </div>
                <div class="form-group-content">
                    <div class="form-input--text">
                        <input type="text" name="weight" placeholder="50.0"> kg
                    </div>
                    <div class="form-error"></div>
                </div>
            </div>
            <div class="form-group">
                <div class="form-group-title">
                    <span class="form-label--item">摂取カロリー</span>
                    <span class="form-label--required">必須</span>
                </div>
                <div class="form-group-content">
                    <div class="form-input--text">
                        <input type="text" name="calories" placeholder="1200"> cal
                    </div>
                    <div class="form-error"></div>
                </div>
            </div>
            <div class="form-group">
                <div class="form-group-title">
                    <span class="form-label--item">運動時間</span>
                    <span class="form-label--required">必須</span>
                </div>
                <div class="form-group-content">
                    <div class="form-input--text">
                        <input type="time" name="exercise_time" placeholder="00:00">
                    </div>
                    <div class="form-error"></div>
                </div>
            </div>
            <div class="form-group">
                <div class="form-group-title">
                    <span class="form-label--item">運動内容</span>
                    <span class="form-label--required">必須</span>
                </div>
                <div class="form-group-content">
                    <div class="form-input--text">
                        <textarea name="exercise_content" placeholder="運動内容を追加"></textarea>
                    </div>
                    <div class="form-error"></div>
                </div>
            </div>
            <div create-button>
                <a class="redirect-button" href="">戻る</a>
                <button class="create-button-submit" type="submit">登録</button>
            </div>
        </form>
    </div>
</body>
</html>