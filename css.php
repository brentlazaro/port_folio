<?php
header('Content-Type: text/css; charset=UTF-8');
?>




:root {
    --bg: #150510;
    --card: #1d0a17;
    --text: #fdf2f8;
    --muted: #f9a8d4;
    --accent: #ec4899;
    --accent-2: #f472b6;
}

* { box-sizing: border-box; }

@keyframes fadeUp {
    0% { opacity: 0; transform: translateY(18px); }
    100% { opacity: 1; transform: translateY(0); }
}

@keyframes floatCard {
    0% { transform: translateY(0); }
    50% { transform: translateY(-6px); }
    100% { transform: translateY(0); }
}

@keyframes glowPulse {
    0% { box-shadow: 0 0 0 rgba(236, 72, 153, 0.22); }
    50% { box-shadow: 0 0 28px rgba(244, 114, 182, 0.28); }
    100% { box-shadow: 0 0 0 rgba(236, 72, 153, 0.22); }
}

body {
    margin: 0;
    font-family: "Inter", "Segoe UI", system-ui, -apple-system, sans-serif;
    background:
        radial-gradient(circle at 20% 20%, rgba(236, 72, 153, 0.12), transparent 25%),
        radial-gradient(circle at 80% 10%, rgba(244, 114, 182, 0.12), transparent 25%),
        linear-gradient(135deg, rgba(236, 72, 153, 0.25), rgba(244, 114, 182, 0.25)),
        var(--bg);
    background-size: 420px 420px, 520px 520px, cover, auto;
    background-repeat: no-repeat, no-repeat, no-repeat, repeat;
    background-position: 0% 0%, 100% 0%, center, center;
    background-blend-mode: screen, screen, overlay, normal;
    color: var(--text);
    line-height: 1.6;
    position: relative;
    overflow: hidden;
}

body::before {
    content: "";
    position: fixed;
    inset: 0;
    background:
        linear-gradient(135deg, rgba(21, 5, 16, 0.65), rgba(21, 5, 16, 0.85)),
        url("barbie1.png") center/cover no-repeat;
    filter: blur(4px);
    opacity: 0.9;
    z-index: -1;
}

html {
    scroll-behavior: smooth;
}

body {
    overflow-x: hidden;
}

a { color: inherit; text-decoration: none; }

header {
    max-width: 1200px;
    margin: 0 auto;
    padding: 16px 20px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    position: sticky;
    top: 0;
    z-index: 1000;
    background: transparent;
}

.logo {
    display: flex;
    align-items: center;
    gap: 10px;
    font-weight: 700;
    letter-spacing: 0.5px;
}

.logo img {
    width: 40px;
    height: 40px;
    border-radius: 12px;
    object-fit: cover;
    box-shadow: 0 0 0 rgba(236, 72, 153, 0.22);
    animation: glowPulse 4s ease-in-out infinite;
}

nav {
    display: flex;
    gap: 18px;
    font-size: 14px;
    color: var(--muted);
}

nav a { padding: 6px 10px; border-radius: 8px; transition: background 0.2s, color 0.2s; }
nav a:hover { background: rgba(255, 255, 255, 0.08); color: #fff; }

.hero {
    max-width: 1200px;
    margin: 0 auto;
    padding: 60px 20px 40px;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
    gap: 30px;
    align-items: center;
}

.animate-fade {
    opacity: 0;
    animation: fadeUp 0.9s ease-out forwards;
}

.delay-1 { animation-delay: 0.12s; }
.delay-2 { animation-delay: 0.24s; }
.float-card {
    animation: fadeUp 1s ease-out forwards, floatCard 5s ease-in-out 1s infinite;
}

.badge {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 6px 12px;
    border-radius: 999px;
    background: rgba(236, 72, 153, 0.12);
    color: #f9a8d4;
    font-size: 13px;
}

h1 {
    margin: 12px 0 14px;
    font-size: 44px;
    line-height: 1.1;
}

p.lead { color: var(--muted); margin: 0 0 16px; max-width: 640px; }

.cta {
    display: flex;
    flex-wrap: wrap;
    gap: 12px;
    margin-top: 14px;
}

.btn {
    padding: 12px 16px;
    border-radius: 12px;
    font-weight: 600;
    border: 1px solid rgba(255, 255, 255, 0.08);
    transition: transform 0.15s, box-shadow 0.15s, background 0.15s;
    cursor: pointer;
}

.btn-primary {
    background: linear-gradient(135deg, var(--accent), var(--accent-2));
    color: #0b1021;
    box-shadow: 0 10px 30px rgba(236, 72, 153, 0.25);
}

.btn-secondary {
    background: rgba(244, 114, 182, 0.08);
    color: var(--text);
}

.btn:hover { transform: translateY(-1px); }

.avatar-card {
    background: rgba(244, 114, 182, 0.06);
    border: 1px solid rgba(244, 114, 182, 0.16);
    border-radius: 18px;
    padding: 18px;
    display: flex;
    align-items: center;
    gap: 14px;
    box-shadow: 0 18px 40px rgba(0, 0, 0, 0.35);
}

.avatar {
    width: 72px;
    height: 72px;
    border-radius: 16px;
    background: linear-gradient(135deg, rgba(236, 72, 153, 0.45), rgba(244, 114, 182, 0.45));
    display: grid;
    place-items: center;
    font-size: 28px;
    font-weight: 800;
    color: #0b1021;
}

.section {
    max-width: 1200px;
    margin: 0 auto;
    padding: 32px 20px 10px;
}

.section h2 {
    margin-bottom: 12px;
    font-size: 26px;
}

.muted { color: var(--muted); }

.grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
    gap: 16px;
}

.card {
    background: var(--card);
    border: 1px solid rgba(244, 114, 182, 0.16);
    border-radius: 14px;
    padding: 16px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.25);
}

.card h3 { margin: 4px 0 8px; }
.chip-row { display: flex; flex-wrap: wrap; gap: 8px; margin-top: 10px; }
.chip { padding: 6px 10px; border-radius: 999px; background: rgba(244, 114, 182, 0.12); font-size: 12px; color: var(--muted); }

.auth-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 16px;
}

.auth-actions {
    display: flex;
    justify-content: flex-end;
    margin-top: 8px;
}

.timeline { display: grid; gap: 12px; margin-top: 8px; }
.timeline-item {
    display: grid;
    grid-template-columns: 120px 1fr;
    gap: 14px;
    padding: 12px 14px;
    border-radius: 12px;
    background: rgba(244, 114, 182, 0.06);
    border: 1px solid rgba(244, 114, 182, 0.12);
}

.contact {
    margin-top: 16px;
    padding: 16px;
    border-radius: 14px;
    background: rgba(244, 114, 182, 0.08);
    border: 1px solid rgba(244, 114, 182, 0.2);
}

form {
    display: grid;
    gap: 10px;
    margin-top: 10px;
}

input, textarea {
    width: 100%;
    padding: 10px 12px;
    border-radius: 10px;
    border: 1px solid rgba(255, 255, 255, 0.08);
    background: rgba(255, 255, 255, 0.05);
    color: var(--text);
    font: inherit;
}

input:focus, textarea:focus { outline: 1px solid var(--accent-2); }
textarea { resize: vertical; min-height: 120px; }

footer {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
    color: var(--muted);
    font-size: 14px;
    text-align: center;
}

@media (max-width: 640px) {
    header { flex-direction: column; align-items: flex-start; gap: 10px; }
    nav { flex-wrap: wrap; }
    .timeline-item { grid-template-columns: 1fr; }
}
