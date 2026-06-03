<?php
include 'includes/header.php';

// This is where my skills are defined
$my_skills = ["HTML", "CSS", "JavaScript", "PHP"];

$my_experience = [
    [
        "year" => "2025 - Present",
        "title" => "IT Assistant",
        "desc" => "IT Assistant Intern at Salmon Health, where I support networking systems and assist residents with their devices, gaining hands-on experience in technical support, face-to-face customer service, and professional workplace etiquette."

    ],
    
];
?>

<main class="about-container">
    <section class="about-hero">
        <h1>About Me</h1>
        <p class="bio">I am currently enrolled as a senior at Tri-County Regional Vocational Technical High School graduating class of 2026 studying Computer Information Systems (CIS), with strong interests in web development, artificial intelligence, IT Support and game design.

I am currently working as an IT Assistant Intern at Salmon Health, where I support networking systems and assist residents with their devices, gaining hands-on experience in technical support, face-to-face customer service, and professional workplace etiquette.

My long-term goal is to become an AI programmer and contribute to the responsible and positive use of artificial intelligence to help people and create meaningful impacts on the world.</p>
    </section>

    <section class="skills-section">
        <h2>My Skills</h2>
        <div class="skills-grid">
            <?php
            foreach ($my_skills as $skill) {
                echo "<span class='skill-pill'>" . htmlspecialchars($skill) . "</span>";
            }
            ?>
        </div>
    </section>

    <section class="timeline-section">
        <h2>Experiences and Milestones</h2>
        <div class="timeline">
            <?php
            foreach ($my_experience as $job) {
                echo "<div class='timeline-card'>";
                echo "<span class='date'>" . htmlspecialchars($job['year']) . "</span>";
                echo "<h3>" . htmlspecialchars($job['title']) . "</h3>";
                echo "<p>" . htmlspecialchars($job['desc']) . "</p>";
                echo "</div>";
            }
            ?>
        </div>
    </section>
</main>

<?php
include 'includes/footer.php';
?>