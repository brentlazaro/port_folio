<?php
session_start();

// Redirect to login if not logged in
if(!isset($_SESSION['username'])){
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>My Portfolio</title>
</head>
<body style="margin:0;font-family: 'Inter','Segoe UI',system-ui,sans-serif;position:relative;overflow:hidden;">
    <style>
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
    <header style="position:fixed;top:16px;left:16px;display:flex;align-items:center;gap:8px;z-index:10;">
        <img src="barbie.png" alt="Logo" style="width:40px;height:40px;border-radius:50%;object-fit:cover;">
        <div style="font-weight:700;">Rein's Portfolio</div>
    </header>

    <h1 style="margin-top:80px;">Welcome to my Portfolio, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
    <a href="logout.php">Logout</a>
</body>
</html>
