<?php
header('X-Frame-Options: SAMEORIGIN');
header('X-Content-Type-Options: nosniff');
header('Strict-Transport-Security: max-age=2592000');
header('X-XSS-Protection: 1; mode=block');
header("Content-Security-Policy: default-src 'self'; img-src 'self' data:; script-src 'self' 'unsafe-inline' 'unsafe-eval' https://www.google-analytics.com http://ajax.googleapis.com data:; style-src 'self' 'unsafe-inline';");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dušan Kasan, Software Developer</title>
    <link href="styles/style.css" rel="stylesheet"/>
    <script src="scripts/script.js" type="application/javascript" async></script>
</head>

<body>
<ul class="navigation">
    <li class="nav-item"><a href="https://medium.com/@DusanKasan">Medium</a></li>
    <li class="nav-item"><a href="https://github.com/DusanKasan">Github</a></li>
    <li class="nav-item"><a href="https://twitter.com/@DusanKasan">Twitter</a></li>
    <li class="nav-item"><a href="https://www.linkedin.com/in/dušan-kasan-9ab54673">LinkedIn</a></li>
    <li class="nav-item"><a href="mailto:me@dusankasan.com">Email</a></li>
</ul>

<input type="checkbox" id="nav-trigger" class="nav-trigger"/>
<label for="nav-trigger"></label>

<div class="site-wrap">
    <div id="content">
        <img class="profile-picture" src="images/dusankasan.jpg" alt="My face">
        <div class="contact-info">
            <h1>Dušan Kasan</h1>
            <h2>Software Developer</h2>
            <a href="https://twitter.com/@DusanKasan">@DusanKasan</a>
            <a href="mailto:me@dusankasan.com">me@dusankasan.com</a>
            <p>
                I'm a software developer based in Bratislava, Slovakia who creates web applications, mostly in PHP.
            </p>
        </div>
    </div>
</div>
</body>
</html>
