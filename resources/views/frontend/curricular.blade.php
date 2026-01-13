<x-app>
    <x-breadcrumb class="breadcrumb-height breadcumb-bg" image="breadcrumb.jpg" title="Extra Curricular Activities" page="Extra Curricular Activities" />

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
        <title>Co-Curricular Activities | School Programs</title>

        <style>
            :root {
                --theme: #ab0101;
                --theme-bg: #fbeaea;
                --text: #333;
                --heading: #ab0101;
            }
            body {
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 0;
                background: #fafafa;
                color: var(--text);
            }
            header {
                background: var(--theme);
                color: #fff;
                padding: 30px;
                text-align: center;
                font-size: 30px;
            }
            .tabs {
                display: flex;
                flex-wrap: wrap;
                border-bottom: 3px solid var(--theme);
                background: #fff;
            }
            .tab {
                padding: 12px 18px;
                cursor: pointer;
                color: var(--theme);
                font-weight: bold;
                margin-right: 10px;
            }
            .tab.active {
                background: var(--theme);
                color: #fff;
            }
            .content {
                display: none;
                padding: 20px 30px;
                background: #fff;
                border: 1px solid #ddd;
                border-top: none;
            }
            .content.active {
                display: block;
            }
            h2 {
                color: var(--heading);
                border-left: 6px solid var(--theme);
                padding-left: 8px;
                margin-top: 0;
            }
            .intro {
                background: var(--theme-bg);
                padding: 15px;
                margin-bottom: 20px;
                border-radius: 6px;
            }
            .list-grid {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
                gap: 10px;
                padding: 0;
                list-style: none;
            }
            .list-grid li {
                background: #fff;
                border-left: 4px solid var(--theme);
                padding: 10px;
                font-size: 16px;
            }
            .subsection {
                margin-bottom: 25px;
            }
            a.more-info {
                color: var(--theme);
                font-weight: bold;
                text-decoration: none;
            }
            a.more-info:hover {
                text-decoration: underline;
            }
        </style>
    </head>

    <body>

    <header class="mt-5">Co-Curricular Activities & Programs</header>

    <div class="tabs">
        <div class="tab active" data-tab="overview">Overview</div>
        <div class="tab" data-tab="elementary">Elementary</div>
        <div class="tab" data-tab="secondary">Secondary / CAS</div>
        <div class="tab" data-tab="extended">Extended CAS</div>
        <div class="tab" data-tab="arts">Performing Arts</div>
        <div class="tab" data-tab="activities">Activities & Service</div>
    </div>

    <!-- Overview Tab -->
    <div id="overview" class="content active">
        <div class="intro">
            <p>
                Our Co-Curricular Activities program supports the school mission by inspiring curiosity, embracing challenges, and nurturing personal growth. These activities give students opportunities for personal development through exploration of interests and new skills in a safe, inclusive environment. :contentReference[oaicite:1]{index=1}
            </p>
        </div>
        <p>
            This program enhances growth outside the classroom and encourages students to discover new interests, learn teamwork, and build confidence.
        </p>
    </div>

    <!-- Elementary Tab -->
    <div id="elementary" class="content">
        <h2>Elementary School Activities</h2>
        <p class="subsection">
            Elementary students explore fun, interest-based activities that help them learn new skills and build confidence. :contentReference[oaicite:2]{index=2}
        </p>
        <ul class="list-grid">
            <li>Dance Club</li>
            <li>Swimming</li>
            <li>Book Club</li>
            <li>Basketball</li>
            <li>Art</li>
            <li>Track & Field</li>
            <li>Guided Learning</li>
            <li>Soccer</li>
            <li>Public Speaking</li>
            <li>Percussion Club</li>
            <li>Photography</li>
            <li>Science Club</li>
        </ul>
    </div>

    <!-- Secondary / CAS Tab -->
    <div id="secondary" class="content">
        <h2>Secondary School & MYP CAS</h2>
        <p>
            Middle Years Program (MYP) Creativity, Activity & Service (CAS) is an energetic part of the curriculum, engaging students in creative, active, and service activities designed to balance academics and personal life. :contentReference[oaicite:3]{index=3}
        </p>
        <div class="subsection">
            <h3>Program Goals</h3>
            <ul>
                <li>Encourage balanced academic and social life</li>
                <li>Promote student-led involvement and independent learning</li>
                <li>Contribute to school mission and personal growth</li>
                <li>Foster collaboration and school spirit</li>
            </ul>
        </div>
    </div>

    <!-- Extended CAS Tab -->
    <div id="extended" class="content">
        <h2>Extended CAS Activities</h2>
        <p>
            Lakeroad offers extended CAS opportunities that allow students to explore advanced interests and develop deeper skills. :contentReference[oaicite:4]{index=4}
        </p>
        <ul class="list-grid">
            <li>Model United Nations (MUN)</li>
            <li>STEM Clubs</li>
            <li>Debate Team</li>
            <li>Service Projects</li>
        </ul>
    </div>

    <!-- Performing Arts Tab -->
    <div id="arts" class="content">
        <h2>Performing Arts</h2>
        <p>
            The Performing Arts program is designed to develop creativity, critical thinking, and artistic skills across drama, music, visual arts, and film. Lakeroad emphasizes inquiry-based learning and showcases student work through exhibitions, performances, and festivals. :contentReference[oaicite:5]{index=5}
        </p>
        <p>
            Students are encouraged to explore self-expression, refine performance techniques, and build confidence through artistic collaboration.
        </p>
    </div>

    <!-- Activities & Service Tab -->
    <div id="activities" class="content">
        <h2>Activities & Service Schedule</h2>
        <p>
            Lakeroad Activities & Service events include competitive teams and social activities that enhance physical education, teamwork, and community engagement. :contentReference[oaicite:6]{index=6}
        </p>
        <ul>
            <li>Jan 10 2026 — Pre-ISSEA Basketball @ Lakeroad (Boys & Girls U20)</li>
            <li>Jan 13 2026 — Basketball @ St John's College (U14/U16/U20)</li>
            <li>Jan 16 2026 — Basketball @ Arundel — Girls U20</li>
            <li>Jan 18 2026 — Swimming — HAS 5th Junior League Gala @ Lakeroad</li>
            <li>Jan 21 2026 — Badminton vs Ellis Robins/MGHS</li>
            <li>Jan 21 2026 — Basketball vs Samuel Centenary (U14/U16/U20)</li>
        </ul>
    </div>

    <script>
        const tabs = document.querySelectorAll('.tab');
        const contents = document.querySelectorAll('.content');

        tabs.forEach(tab => {
            tab.addEventListener('click', () => {
                tabs.forEach(t => t.classList.remove('active'));
                tab.classList.add('active');

                contents.forEach(c => c.classList.remove('active'));
                document.getElementById(tab.dataset.tab).classList.add('active');
            });
        });
    </script>

    </body>
    </html>


</x-app>
