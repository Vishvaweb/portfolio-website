<?php
$skills = ["HTML", "Python", "Java", "C++"];
include "projects.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Vishva Portfolio</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<header>
<h1>Vishva</h1>
<p>Aspiring Web Developer</p>
<a class="resume-btn" href="#">Download Resume</a>
</header>

<nav>
<a href="#about">About</a>
<a href="#skills">Skills</a>
<a href="#projects">Projects</a>
<a href="#contact">Contact</a>
</nav>

<!-- ABOUT -->

<section id="about">
<h2>About Me</h2>
<p>Hello! I am Vishva. I am a college student and aspiring web developer. I enjoy building websites and learning new technologies.</p>
</section>

<!-- SKILLS -->

<section id="skills">
<h2>Skills</h2>

<div class="skills-container">

<?php foreach($skills as $skill): ?>

<div class="skill"><?php echo $skill; ?></div>

<?php endforeach; ?>

</div>

</section>

<!-- PROJECTS -->

<section id="projects">
<h2>Projects</h2>

<div class="projects-container">

<?php foreach($projects as $project): ?>

<div class="project-card">
<h3><?php echo $project['title']; ?></h3>
<p><?php echo $project['description']; ?></p>

<a class="project-btn" href="<?php echo $project['link']; ?>" target="_blank">
View Code
</a>

</div>

<?php endforeach; ?>

</div>

</section>
<section id="contact">
<h2>Contact</h2>

<p>Email: vishvamvishva572@gmail.com</p>
<p>Phone: +91 9003857969</p>

<p>
GitHub:
<a href="https://github.com/Vishvaweb" target="_blank">
github.com/Vishvaweb
</a>
</p>

</section>
<footer>
<p>© 2026 Vishva Portfolio</p>
</footer>

</body>
</html>