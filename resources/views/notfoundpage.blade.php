<?php
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>404 — Page Not Found</title>
    <style>
        html,body{height:100%;margin:0;font-family:system-ui,Segoe UI,Roboto,Arial;color:#0f172a}
        body{display:flex;align-items:center;justify-content:center;background:#f8fafc}
        .card{max-width:820px;width:100%;padding:36px;border-radius:12px;background:#fff;box-shadow:0 6px 24px rgba(2,6,23,0.08);text-align:center}
        h1{font-size:72px;margin:0 0 8px;color:#0b1220}
        p{margin:0 0 18px;color:#334155}
        .actions{display:flex;gap:12px;justify-content:center;flex-wrap:wrap;margin-top:18px}
        a.btn{padding:10px 18px;border-radius:8px;text-decoration:none;font-weight:600}
        .primary{background:#06b6d4;color:#fff}
        .ghost{background:transparent;border:1px solid #e2e8f0;color:#334155}
        small{display:block;margin-top:14px;color:#64748b}
        @media(max-width:560px){h1{font-size:48px}}
    </style>
</head>
<body>
    <div class="card" role="main" aria-labelledby="title">
        <h1 id="title">404</h1>
        <p>Sorry — the page you are looking for could not be found.</p>

        <div class="actions">
            <a class="btn primary" href="{{ url('/') }}">Go to Home</a>
            <a class="btn ghost" href="{{ url()->previous() }}">Go Back</a>
        </div>

        <small>If you think this is an error, contact support or check the URL.</small>
    </div>
</body>
</html>