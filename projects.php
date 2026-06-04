<?php
include 'includes/header.php';

$my_projects = [
    [
        "name" => "Co-op Senior Presentation",
        "start_date" => "Mar 2026",
        "end_date" => "May 2026",
        "url" => "https://www.youtube.com/watch?v=benMHkwSsrk",
        "github" => "",
        "description" => "As a final grade for the CIS shop course through Tri county regional vocational technical high school, I am making a custom Minecraft mod and filming it to show what my co-op experience at salmon health is like.",
        "skills" => ["Computer Hardware Installation", "Full-Stack Development", "Medical Devices", "IT Services", "Software Development", "Remote Desktop", "IT Security Operations", "Active Directory", "Acting", "Desktop Computers", "Markup Languages", "Attention to Detail", "Windows Deployment Services (WDS)", "Computer Literacy", "Computer Technology", "Independence", "Programming"]
    ],
    [
        "name" => "DND Character Creator",
        "start_date" => "May 2025",
        "end_date" => "Sep 2025",
        "url" => "https://orangolex.github.io/DNDMaster/DnDMaster.html",
        "github" => "https://github.com/OrangOlex/DNDMaster",
        "description" => "A Dungeons and Dragons character creator web application built with HTML, CSS, and JavaScript. It allows users to create and customize their own DND characters with various attributes, skills, and equipment options.",
        "skills" => ["HTML", "CSS", "JavaScript", "Bootstrap", "attention to detail"]
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
                foreach ($project['skills'] as $skill) {
                    echo "<span class='skill-tag'>" . htmlspecialchars($skill) . "</span>";
                }
                echo "</div>";
                echo "</div>";
            }
            echo "</div>";
        }
        ?>
    </div>
</main>

<?php
include 'includes/footer.php';
?>
