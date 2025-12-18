<?php
session_start();

// If user is not logged in, send them to login page
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <style>
        :root {
            --bg: #150510;
            --card: #1d0a17;
            --text: #fdf2f8;
            --muted: #f9a8d4;
            --accent: #ec4899;
            --accent-2: #f472b6;
        }
        * { box-sizing: border-box; }
        body {
            margin: 0;
            font-family: "Inter", "Segoe UI", system-ui, sans-serif;
            min-height: 100vh;
            display: grid;
            place-items: center;
            background:
                radial-gradient(circle at 20% 20%, rgba(236,72,153,.12), transparent 25%),
                radial-gradient(circle at 80% 10%, rgba(244,114,182,.12), transparent 25%),
                linear-gradient(135deg, rgba(236,72,153,.25), rgba(244,114,182,.25)),
                var(--bg);
            background-blend-mode: screen, screen, overlay, normal;
            color: var(--text);
            position: relative;
            overflow: hidden;
        }
        .card {
            max-width: 520px;
            width: 90%;
            background: rgba(244,114,182,.08);
            border: 1px solid rgba(244,114,182,.2);
            border-radius: 18px;
            padding: 40px;
            text-align: center;
            box-shadow: 0 20px 50px rgba(0,0,0,.35);
        }
        h1 {
            margin: 0 0 10px;
            font-size: 36px;
        }
        p {
            margin: 0 0 18px;
            color: var(--muted);
            font-size: 18px;
        }
        a.button {
            display: inline-block;
            margin-top: 10px;
            padding: 12px 28px;
            border-radius: 14px;
            font-weight: 600;
            text-decoration: none;
            color: #0b1021;
            background: linear-gradient(135deg, var(--accent), var(--accent-2));
            box-shadow: 0 12px 30px rgba(236,72,153,.35);
        }

        body::before {
            content: "";
            position: fixed;
            inset: 0;
            background:
                linear-gradient(135deg, rgba(21,5,16,0.65), rgba(21,5,16,0.85)),
                url("barbie1.png") center/cover no-repeat;
            filter: blur(4px);
            opacity: 0.9;
            z-index: -1;
        }
    </style>
</head>
<body>
    <header style="position:fixed;top:16px;left:16px;display:flex;align-items:center;gap:8px;z-index:10;">
        <img src="barbie.png" alt="Logo" style="width:40px;height:40px;border-radius:50%;object-fit:cover;">
        <div style="font-weight:700;color:#fdf2f8;">Rein's Portfolio</div>
    </header>
    <div class="card">
        <h1>Welcome to Barbie World.</h1>
        <p>Hi, <?php echo htmlspecialchars($_SESSION['username']); ?>! This is your dashboard.</p>
        <a class="button" href="index.php">Home</a>
    </div>
</body>
</html>
