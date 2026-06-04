<?php
include 'includes/header.php';

$my_projects = [
    [
        "name" => "E-Commerce Website",
        "start_date" => "2023-01-15",
        "end_date" => "2023-04-30",
        "url" => "https://example.com/ecommerce",
        "github" => "https://github.com/example/ecommerce",
        "description" => "Developed a full-stack e-commerce website using React for the frontend",
        "skills" => ["React", "Node.js", "Express", "MongoDB", "Stripe API"]
    ],
    [
        "name" => "Personal Portfolio",
        "start_date" => "2022-10-01",
        "end_date" => "2022-12-15",
        "url" => "https://example.com/portfolio",
        "github" => "",
        "description" => "Created a personal portfolio website to showcase projects and skills",
        "skills" => ["HTML", "CSS", "JavaScript", "Bootstrap"]
    ]
];
?>

<main class="timeline-projects-container">
    <div class="projects-section-header">
        <h2>Featured Projects</h2>
</div>

<div class="projects-list">
    <?php
    $total_projects = count($my_projects);
    for ($i = 0; $i < $total_projects; $i++) {
        $project = $my_projects[$i];
        echo "<div class='timeline-project-item'>";

        echo "<h3>" . htmlspecialchars($project['name']) . "</h3>";

        if (!empty($project['start_date'])) {
            echo "<p class='project-timeline'>";
            echo htmlspecialchars($project['start_date']);
            if (!empty($project['end_date'])) {
                echo " &ndash; " . htmlspecialchars($project['end_date']);
            }
            echo "</p>";
        }

        if (!empty($project['url']) || !empty($project['github'])) {
            echo "<div class='project-links-row'>";
            if (!empty($project['url'])) {
                echo "<a href='" . htmlspecialchars($project['url']) . "' target='_blank' class='lnk-btn live-btn'>See Project</a>";
            }
            if (!empty($project['github'])) {
                echo "<a href='" . htmlspecialchars($project['github']) . "' target='_blank' class='lnk-btn github-btn'>View on GitHub</a>";
            }
            echo "</div>";
        }

        if (!empty($project['description'])) {
            echo "<p class='project-description'>" . htmlspecialchars($project['description']) . "</p>";
        }

        if (!empty($project['skills']) && is_array($project['skills'])) {
            echo "<div class='project-skills-footer'>";
            echo "<span class='skills-label'>Skills used:</span>";
            echo "<div class='skills-tags-wrap'>";
            foreach ($project['skills'] as $skill_tag) {
                echo "<span class='project-skill-tag'>" . htmlspecialchars($skill_tag) . "</span>";
            }
            echo "</div>";
            echo "</div>";
        }
        echo "</div>";
        if ($i < $total_projects - 1) {
            echo "<hr class='project-divider'>";
        }
    }
    ?>
</div>
<?php
include 'includes/footer.php';
?>
