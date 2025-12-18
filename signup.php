<?php
include 'db.php';
session_start();

if (isset($_POST['signup'])) {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    
    if (mysqli_query($conn, $sql)) {
        $_SESSION['username'] = $username;
        header("Location: index1.php");
        exit();
    } else {
        $error = "Username already exists";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Sign Up</title>

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
    font-family: "Inter","Segoe UI",system-ui,sans-serif;
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

/* CARD */
.signup-box {
    width: 100%;
    max-width: 380px;
    padding: 36px;
    border-radius: 18px;
    background: rgba(244,114,182,.08);
    border: 1px solid rgba(244,114,182,.18);
    box-shadow: 0 20px 50px rgba(0,0,0,.35);
    animation: fadeUp .9s ease-out forwards;
}

.signup-box h2 {
    margin: 0 0 6px;
    font-size: 28px;
}

.signup-box p {
    margin: 0 0 20px;
    color: var(--muted);
    font-size: 14px;
}

/* FORM */
form {
    display: grid;
    gap: 12px;
}

input {
    padding: 12px 14px;
    border-radius: 12px;
    border: 1px solid rgba(255,255,255,.1);
    background: rgba(255,255,255,.05);
    color: var(--text);
    font: inherit;
}

input:focus {
    outline: 1px solid var(--accent-2);
}

button {
    margin-top: 6px;
    padding: 14px;
    border-radius: 14px;
    font-weight: 600;
    border: none;
    cursor: pointer;
    background: linear-gradient(135deg, var(--accent), var(--accent-2));
    color: #0b1021;
    box-shadow: 0 12px 30px rgba(236,72,153,.35);
    transition: transform .15s;
}

button:hover {
    transform: translateY(-1px);
}

/* LINKS */
.signup-box a {
    color: var(--accent-2);
    text-decoration: none;
    font-size: 14px;
}

.signup-box a:hover {
    text-decoration: underline;
}

/* ERROR */
.error {
    background: rgba(255,90,90,.15);
    border: 1px solid rgba(255,90,90,.35);
    padding: 10px 12px;
    border-radius: 10px;
    font-size: 14px;
    margin-bottom: 10px;
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

<div class="signup-box">
    <h2>Create Account ✨</h2>
    <p>Join our pink themed system</p>

    <?php if (!empty($error)): ?>
        <div class="error"><?php echo $error; ?></div>
    <?php endif; ?>

    <form method="POST">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button name="signup">Sign Up</button>
    </form>

    <p style="margin-top:14px;font-size:14px;">
        Already have an account?
        <a href="login.php">Login</a>
    </p>
</div>

</body>
</html>
