<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Home</title>

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

/* NAVBAR */
.navbar {
    max-width: 1200px;
    margin: auto;
    padding: 16px 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.navbar h2 {
    margin: 0;
    font-weight: 700;
}

.nav-links {
    display: flex;
    gap: 12px;
    align-items: center;
}

.nav-links a {
    padding: 8px 14px;
    border-radius: 10px;
    font-size: 14px;
    color: var(--text);
    text-decoration: none;
    background: rgba(255,255,255,0.08);
    transition: background .2s, transform .2s;
}

.nav-links a:hover {
    background: rgba(255,255,255,0.15);
    transform: translateY(-1px);
}

.nav-user {
    padding: 8px 14px;
    border-radius: 10px;
    font-size: 14px;
    color: var(--muted);
    background: rgba(255,255,255,0.08);
    display: flex;
    align-items: center;
}

.logout {
    background: linear-gradient(135deg, #ff5a5a, #ff2d2d);
}

/* HERO */
.hero {
    min-height: calc(100vh - 80px);
    display: grid;
    place-items: center;
    padding: 20px;
}

.hero-box {
    max-width: 520px;
    background: rgba(244,114,182,.08);
    border: 1px solid rgba(244,114,182,.2);
    border-radius: 18px;
    padding: 50px;
    text-align: center;
    box-shadow: 0 20px 50px rgba(0,0,0,.35);
    animation: fadeUp .9s ease-out forwards;
}

.hero-box h1 {
    font-size: 42px;
    margin: 0 0 10px;
}

.hero-box p {
    color: var(--muted);
    font-size: 18px;
}

.hero-box a {
    display: inline-block;
    margin-top: 22px;
    padding: 14px 32px;
    border-radius: 14px;
    font-weight: 600;
    text-decoration: none;
    color: #0b1021;
    background: linear-gradient(135deg, var(--accent), var(--accent-2));
    box-shadow: 0 12px 30px rgba(236,72,153,.35);
    transition: transform .2s;
}

.hero-box a:hover {
    transform: translateY(-2px);
}

/* ANIMATION */
@keyframes fadeUp {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
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

<!-- HERO -->
<div class="hero">
    <div class="hero-box">
        <h1>Welcome to my Portfolio</h1>
        <p>Your modern pink-themed PHP website</p>

        <?php if (!isset($_SESSION['username'])): ?>
            <a href="signup.php">Get Started</a>
        <?php else: ?>
            <a href="dashboard.php">Go to Dashboard</a>
        <?php endif; ?>
    </div>
</div>

</body>
</html>
