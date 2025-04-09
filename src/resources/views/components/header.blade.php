
<div class="header-utilities">
    <a class="header-logo" href="/weight_logs">PiGLy</a>
    <nav class="header-nav">
        <ul class="header-nav-list">
            <li class="header-nav--item">
                <a class="header-nav--button" href="/weight_logs/goal_setting">目標体重設定</a>
            </li>
            @if (Auth::check())
            <li class="header-nav--item">
                <form class="header-form" action="/logout" method="post">
                    @csrf
                    <button class="header-nav--button-submit" type="submit">ログアウト</button>
                </form>
            </li>
            @endif
        </ul>
    </nav>
</div>
