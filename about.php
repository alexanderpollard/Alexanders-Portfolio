<?php
include 'includes/header.php';

// This is where my skills are defined
$my_skills = ["HTML", "CSS", "JavaScript", "PHP"];

$my_experience = [
    [
        "year" => "Aug 2025 - Present",
        "title" => "IT Assistant",
        "desc" => "IT Assistant Intern at Salmon Health, where I support networking systems and assist residents with their devices, gaining hands-on experience in technical support, face-to-face customer service, and professional workplace etiquette."

    ],    
    [
        "year" => "Jun 2022 - Aug 2025",
        "title" => "Actor",
        "desc" => "A small professional stage production for young actors."

    ]
];

$my_certifications = [
    [
        "title" => "IT Specialist - Cybersecurity",
        "issuer" => "Certiport - A Pearson VUE Business",
        "date" => "May 2025",
        "image" => "assets/images/Copy of CybersecurityCert.jpg", //Left blank triggers the image to be filled as a place holder image
        "skills_learned" => ["Troubleshooting", "Cybersecurity", "Information Security Awareness", "Network Security", "Risk Management", "Ethical Hacking", "Incident Response", "Security Policies", "Access Control", "Cryptography"]
    ],
    
    [
        "title" => "Computer Hardware Basics",
        "issuer" => "Cisco Networking Academy",
        "date" => "Jun 2024",
        "image" => "",
        "skills_learned" => ["Help Desk Support", "Computer Hardware Installation", "Computer Technology", "Attention to Detail", "Computer Literacy", "Computer Repair", "Active Directory Experience", "Command Prompt", "Computer Science Education", "Remote Desktop", "Markup Languages", "IT Services", "Microsoft 365", "Desktop Computers"]
    ],
    
    [
        "title" => "IT Specialist - HTML and CSS",
        "issuer" => "Certiport - A Pearson VUE Business",
        "date" => "Jun 2023",
        "image" => "assets/images/Cert1408370148.jpg", //Left blank triggers the image to be filled as a place holder image
        "skills_learned" => ["Pixel Art", "Computer Technology", "Responsive Web Design", "Attention to Detail", "Web Pages", "Cascading Style Sheets (CSS)", "Programming Languages", "Web Development", "Software Development", "Data Analysis", "HTML", "IT Services", "Document Coding", "Programming", "Independence", "Web Design"]
    ],

    [
        "title" => "IT Specialist - Device Configuration and Management",
        "issuer" => "Certiport - A Pearson VUE Business",
        "date" => "Feb 2024",
        "image" => "assets/images/Cert25412727332.jpg", //Left blank triggers the image to be filled as a place holder image
        "skills_learned" => ["Help Desk Support", "Computer Technology", "Attention to Detail", "Windows 10", "Computer Literacy", "Computer Repair", "IT Management", "Active Directory Experience", "Command Prompt", "Computer Science Education", "Remote Desktop", "Active Directory", "Markup Languages", "IT Services", "Microsoft 365", "Windows 11", "Account Management"]
    ],
    
    [
        "title" => "CS 121 - OSHA 10-Hour General Industry",
        "issuer" => "CareerSafe",
        "date" => "May 2023",
        "image" => "", //Left blank triggers the image to be filled as a place holder image
        "skills_learned" => ["Attention to Detail", "Workplace Saftey", "Communication", "OSHA Regulations", "Hazard Identification", "Personal Protective Equipment (PPE)", "Emergency Response", "Workplace Hazards", "Safety Training", "General Industry Safety", "Teamwork"]
    ]
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

    <section class="certifications-section">
        <h2>Certifications</h2>
        <div class="certs-container">
            <?php
            foreach ($my_certifications as $cert) {
                echo "<div class='cert-card'>";

                // Media / image area
                if (!empty($cert['image']) && file_exists($cert['image'])) {
                    echo "<div class='cert-media'><img src='" . htmlspecialchars($cert['image']) . "' alt='" . htmlspecialchars($cert['title']) . " Certificate'></div>";
                } else {
                    echo "<div class='cert-media'>
                        <div class='cert-placeholder'>
                            <svg viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='1.5'>
                                <path d='M12 15l-2 3.5H14L12 15z' fill='currentColor'/>
                                <path d='M9 12l2 2 4-4M3 7V5a2 2 0 012-2h14a2 2 0 012 2v14a2 2 0 01-2 2H5a2 2 0 01-2-2v-2' stroke-linecap='round' stroke-linejoin='round'/>
                                <path d='M12 15a3 3 0 100-6 3 3 0 000 6z' stroke-linecap='round' stroke-linejoin='round'/>
                            </svg>
                            <span>Certificate</span>
                        </div>
                    </div>";
                }

                // Info area
                echo "<div class='cert-info'>";
                echo "<h3>" . htmlspecialchars($cert['title']) . "</h3>";
                echo "<p class='cert-meta'>" . htmlspecialchars($cert['issuer']) . " &bull; " . htmlspecialchars($cert['date']) . "</p>";

                echo "<div class='cert-skills-box'>";
                echo "<h4>Skills Acquired:</h4>";
                echo "<div class='cert-skills-tags'>";
                foreach ($cert['skills_learned'] as $mini_skill) {
                    echo "<span class='mini-tag'>" . htmlspecialchars($mini_skill) . "</span>";
                }
                echo "</div>"; // .cert-skills-tags
                echo "</div>"; // .cert-skills-box

                echo "</div>"; // .cert-info
                echo "</div>"; // .cert-card
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