<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PiGLy</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
</head>
<body>
    @include('components.header')
    <main>
        <div class="goal-data">
            <div class="goal-data--item">
                <span class="goal-data-label">目標体重</span>
                <p class="goal-data-figure"><span>50</span>kg</p>
            </div>
            <div class="goal-data--item">
                <span class="goal-data-label">目標まで</span>
                <p class="goal-data-figure"><span>-5</span>kg</p>
            </div>
            <div class="goal-data--item">
                <span class="goal-data-label">最新体重</span>
                <p class="goal-data-figure"><span>55</span>kg</p>
            </div>
        </div>
        <div class="daily-data-content">
            <div class="daily-data-search">
                <form class="search-form" action="/weight_logs/search" method="get">
                    @csrf
                    <input type="date" name="keyword" class="keyword" placeholder="年/月/日" value="{{ old('keyword') }}"> ~
                    <input type="date" name="keyword" class="keyword" placeholder="年/月/日" value="{{ old('keyword') }}">
                    <button class="search-button" type="submit">検索</button>
                </form>
                <form class="add-button" action="">
                    <button class="add-button-submit" type="submit">データ追加</button>
                </form>
            </div>
            <div class="data-table">
                <table class="data-table-inner">
                    <tr class="data-table-row">
                        <th class="data-table-header">日付</th>
                        <th class="data-table-header">体重</th>
                        <th class="data-table-header">食事摂取カロリー</th>
                        <th class="data-table-header">運動時間</th>
                    </tr>
                    @foreach ($logs as $log)
                    <tr class="data-table-row">
                        <td class="data-table-item">
                            <form class="update-form">
                                <div class="update-form-item">
                                    <p class="update-form--item-input">{{ $log['date'] }}</p>
                                </div>
                            </form>
                        </td>
                        <td class="data-table-item">
                            <form class="update-form">
                                <div class="update-form-item">
                                    <p class="update-form--item-input">{{ $log['weight'] }}</p>
                                </div>
                            </form>
                        </td>
                        <td class="data-table-item">
                            <form class="update-form">
                                <div class="update-form-item">
                                    <p class="update-form--item-input">{{ $log['calories'] }}</p>
                                </div>
                            </form>
                        </td>
                        <td class="data-table-item">
                            <form class="update-form">
                                <div class="update-form-item">
                                    <p class="update-form--item-input">{{ $log['exercise_time'] }}</p>
                                </div>
                            </form>
                        </td>
                        <td class="data-table-item">
                            <div class="update-form-button">
                                <a class="update-form-button-submit" href="/weight_logs/{:weightLogId}">a</a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </main>
</body>
</html>