
<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rein's Portfolio</title>
    <link rel="stylesheet" href="css.php">
</head>
<body>
    <header>
        <div class="logo">
            <img src="barbie.png" alt="Logo">
            <div>Rein's Portfolio</div>
        </div>
        <nav>
            
            <a href="#about">About</a>
            <a href="#skills">Skills</a>
            <a href="#projects">Projects</a>
            <a href="#contact">Contact</a>


            <?php if (isset($_SESSION['username'])): ?>
    <span style="margin-left:20px;font-weight:bold;">
        Hi, <?php echo htmlspecialchars($_SESSION['username']); ?>
    </span>
    <a href="logout.php" class="logout">Logout</a>
    <?php endif; ?>

        </nav>
    </header>

    <section id="home" class="hero">
        <div class="animate-fade">
            <div class="badge">Open to new opportunities</div>
            <h1>Hello, I am Your Barbie girl</h1>
            <p class="lead">
            Barbie Nurse delivering compassionate care, clinical excellence, and patient-first solutions.
            </p>
            <div class="cta delay-1 animate-fade">
                <a class="btn btn-primary" href="#projects">View Projects</a>
                <a class="btn btn-secondary" href="#contact">Contact Me</a>
            </div>
        </div>
        <div class="avatar-card float-card delay-2">
            <div class="avatar">YN</div>
            <div>
                <div style="font-weight:700;">Rein Abad</div>
                <div class="muted">Registered Nurse · Quezon City, Philippines</div>
                <div class="chip-row">
                    <span class="chip">Available for freelance</span>
                    <span class="chip">Remote friendly</span>
                </div>
            </div>
        </div>
    </section>

    

    <section id="about" class="section">
        <h2>About</h2>
        <div class="card">
            <p class="muted" style="margin:0 0 12px;">
            Hi! I’m a Barbie Nurse based in Quezon City, Philippines 💕
I’m passionate about providing compassionate, patient-centered care with a touch of kindness, warmth, and confidence. I believe that great nursing is not just about skills—it’s about making patients feel safe, seen, and supported.

With a caring heart and strong clinical foundation, I focus on creating positive healthcare experiences through empathy, clear communication, and attention to detail. My signature approach is combining professionalism with a friendly, uplifting presence—because healing feels better when delivered with care and compassion.

I’m excited to grow, learn, and take on new opportunities where I can make a meaningful difference while spreading positivity—one patient at a time ✨            </p>
            <ul class="muted" style="padding-left:18px; margin:0;">
             
            </ul>
        </div>
    </section>

    <section id="skills" class="section">
        <h2>Skills</h2>
        <div class="grid">
            <div class="card">
                <h3>Core</h3>
                <div class="chip-row">
                    <span class="chip">Patient Assessment & Monitoring</span>
                    <span class="chip">Patient-Centered Care</span>
                    <span class="chip">Vital Signs & Clinical Documentation</span>
                    <span class="chip">Time Management & Multitasking</span>
                </div>
            </div>
            <div class="card">
                <h3>Tooling</h3>
                <div class="chip-row">
                    <span class="chip">Vital Signs Monitor</span>
                    <span class="chip">Nursing Care Plans</span>
                    <span class="chip">PPE & Infection Control Tools</span>
                </div>
            </div>
            <div class="card">
                <h3>Highlights</h3>
                <ul class="muted" style="padding-left:18px; margin: 8px 0 0;">
                    <li>Delivered compassionate, patient-first care resulting in high patient satisfaction</li>
                    <li>Recognized for calm, friendly, and professional bedside manner</li>
                    <li>Consistently maintained accurate documentation and safe medication practices</li>
                </ul>
            </div>
        </div>
    </section>

    <section id="projects" class="section">
        <h2>Projects</h2>
        <div class="grid">
            <div class="card">
                <h3>Project Title</h3>
                <p class="muted">Short description of the project, the problem, and your impact.</p>
                <div class="chip-row">
                    <span class="chip">Tech 1</span>
                    <span class="chip">Tech 2</span>
                    <span class="chip">Tech 3</span>
                </div>
                <div class="chip-row" style="margin-top:12px;">
                    <a class="btn btn-secondary" href="#" target="_blank" rel="noreferrer">Live</a>
                    <a class="btn btn-secondary" href="#" target="_blank" rel="noreferrer">Code</a>
                </div>
            </div>
            <div class="card">
                <h3>Project Title</h3>
                <p class="muted">Short description of the project, the problem, and your impact.</p>
                <div class="chip-row">
                    <span class="chip">Tech 1</span>
                    <span class="chip">Tech 2</span>
                    <span class="chip">Tech 3</span>
                </div>
                <div class="chip-row" style="margin-top:12px;">
                    <a class="btn btn-secondary" href="#" target="_blank" rel="noreferrer">Live</a>
                    <a class="btn btn-secondary" href="#" target="_blank" rel="noreferrer">Code</a>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <h2>Experience</h2>
        <div class="timeline">
            <div class="timeline-item">
                <div class="muted">2023 – Present</div>
                <div>
                    <strong>Role · Company</strong>
                    <p class="muted" style="margin:6px 0 0;">
                        One to two lines about your scope, team, and the results you delivered.
                    </p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="muted">2021 – 2023</div>
                <div>
                    <strong>Role · Company</strong>
                    <p class="muted" style="margin:6px 0 0;">
                        One to two lines about your scope, team, and the results you delivered.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="section">
        <h2>Contact</h2>
        <div class="contact">
            <p class="muted" style="margin:0;">Ready to collaborate? Drop a line:</p>
            <form action="mailto:you@example.com" method="post" enctype="text/plain">
                <input type="text" name="name" placeholder="Your name" required>
                <input type="email" name="email" placeholder="Your email" required>
                <textarea name="message" placeholder="What would you like to build together?" required></textarea>
                <button class="btn btn-primary" type="submit" style="width:max-content;">Send</button>
            </form>
        </div>
    </section>

    <footer>
        © <span id="year"></span> Your Name · Crafted with care.
    </footer>

    <script>
        document.getElementById("year").textContent = new Date().getFullYear();
    </script>
</body>
</html>
