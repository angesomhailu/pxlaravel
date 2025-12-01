<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Ange Bingo</title>
    <style>
        html,body{height:100%}
        body {
            margin:0;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial;
            background: linear-gradient(135deg,#0f172a 0%, #0ea5a4 100%);
            color:#eef2f7;
            display:flex;
            align-items:center;
            justify-content:center;
        }
        .container{
            text-align:center;
            max-width:900px;
            padding:48px;
            background: rgba(255,255,255,0.03);
            border-radius:12px;
            box-shadow: 0 8px 30px rgba(2,6,23,0.6);
        }
        .auth-nav {
            display: flex;
            justify-content: flex-end;
            gap: 12px;
            margin-bottom: 20px;
        }
        .auth-link {
            color: #cfece9;
            text-decoration: none;
            font-size: 14px;
            padding: 6px 12px;
            border-radius: 6px;
            border: 1px solid rgba(255,255,255,0.12);
        }
        .auth-link:hover {
            background: rgba(255,255,255,0.1);
        }
        .logo {
            font-size:48px;
            font-weight:700;
            letter-spacing:1px;
            margin-bottom:8px;
        }
        .tagline {
            color:#cfece9;
            margin-bottom:24px;
            font-size:18px;
        }
        .actions {
            margin-top:28px;
            display:flex;
            gap:12px;
            justify-content:center;
            flex-wrap:wrap;
        }
        .btn {
            padding:12px 22px;
            border-radius:8px;
            text-decoration:none;
            font-weight:600;
            color:#042027;
        }
        .btn-primary {
            background: #7af6d8;
        }
        .btn-outline {
            background:transparent;
            border:1px solid rgba(255,255,255,0.12);
            color:#e6fffb;
        }
        .features {
            margin-top:28px;
            display:flex;
            gap:18px;
            justify-content:center;
            flex-wrap:wrap;
            color:#d7f8f0;
        }
        .feature {
            background: rgba(255,255,255,0.02);
            padding:12px 16px;
            border-radius:8px;
            min-width:160px;
        }
        footer { margin-top:28px; color:#9bd8d0; font-size:13px; }
        @media (max-width:540px){ .logo{font-size:34px} .container{padding:20px} }
    </style>
</head>
<body>
    <div class="container">

        {{-- Auth navigation --}}
        @if (Route::has('login'))
            <nav class="auth-nav">
                @auth
                    <a href="{{ url('/dashboard') }}" class="auth-link">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="auth-link">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="auth-link">Register</a>
                    @endif
                @endauth
            </nav>
        @endif
        <div class="logo">Ange Bingo</div>
        <div class="tagline">Fast, fun, and fair offline bingo — play alone or with friends.</div>

        <div class="actions">
            <a class="btn btn-primary" href="{{ url('/bingo/play') }}">Play Now</a>
            <a class="btn btn-outline" href="{{ url('/bingo/rules') }}">How to Play</a>
            <a class="btn btn-outline" href="{{ url('/bingo/leaderboard') }}">Leaderboard</a>
        </div>

        <div class="features" aria-hidden="true">
            <div class="feature">
                <strong>Quick Games</strong>
                <div>Rounds start in seconds.</div>
            </div>
            <div class="feature">
                <strong>Secure</strong>
                <div>Fair draws and encrypted accounts.</div>
            </div>
            <div class="feature">
                <strong>Mobile Friendly</strong>
                <div>Play from any device.</div>
            </div>
        </div>

        <footer>
            Built with Laravel — Ange Bingo home page. &nbsp;|&nbsp;
            <a style="color:#aef0e6" href="{{ url('/') }}">Main site</a>
        </footer>
    </div>
</body>
</html>
