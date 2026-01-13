<x-app>
    <x-breadcrumb class="breadcrumb-height breadcumb-bg" image="breadcrumb.jpg" title="School Calender" page="School Calender" />


        <style>
            :root {
                --theme: #ab0101;
                --light: #fbeaea;
                --border: #ddd;
            }

            body {
                font-family: Arial, sans-serif;
                margin: 0;
                background: #fafafa;
            }

            h1 {
                text-align: center;
                padding: 20px 0;
                color: var(--theme);
            }

            /* Tabs */
            .tabs {
                display: flex;
                border-bottom: 3px solid var(--theme);
                background: #fff;
                padding: 0 20px;
                flex-wrap: wrap;
            }

            .tab {
                padding: 12px 18px;
                cursor: pointer;
                margin-right: 10px;
                font-weight: bold;
                color: var(--theme);
                border-top-left-radius: 4px;
                border-top-right-radius: 4px;
            }

            .tab.active {
                background: var(--theme);
                color: #fff;
            }

            /* Content */
            .content {
                padding: 20px;
                border: 1px solid var(--border);
                background: white;
                margin: 0 20px 20px;
                border-top: none;
            }

            /* Calendar Grid */
            .calendar-grid {
                display: grid;
                grid-template-columns: repeat(7, 1fr);
                gap: 4px;
                text-align: center;
            }

            .calendar-grid div {
                padding: 10px;
                border: 1px solid var(--border);
                background: #fff;
                font-size: 14px;
            }

            .calendar-grid .header {
                background: var(--light);
                font-weight: bold;
                color: var(--theme);
            }

            .event {
                background: var(--light);
                border-left: 4px solid var(--theme);
                padding: 10px;
                margin-bottom: 8px;
            }

            a {
                color: var(--theme);
                text-decoration: none;
                font-weight: bold;
            }

            a:hover {
                text-decoration: underline;
            }
        </style>
    </head>

    <body>

    <h1>School Calendar</h1>

    <!-- Tabs -->
    <div class="tabs">
        <div class="tab active" data-target="monthView">Month View</div>
        <div class="tab" data-target="year2526">2025-2026 Year</div>
        <div class="tab" data-target="year2627">2026-2027 Year</div>
        <div class="tab" data-target="athletics">Athletics & Activities</div>
        <div class="tab" data-target="performing">Performing Arts</div>
    </div>

    <!-- Month View -->
    <div id="monthView" class="content">
        <h2>January 2026</h2>
        <div class="calendar-grid">
            <div class="header">Sun</div>
            <div class="header">Mon</div>
            <div class="header">Tue</div>
            <div class="header">Wed</div>
            <div class="header">Thu</div>
            <div class="header">Fri</div>
            <div class="header">Sat</div>

            <div></div><div></div><div></div><div></div>
            <div>1</div><div>2</div><div>3</div>
            <div>4</div><div>5</div><div>6</div><div>7</div><div>8</div><div>9</div><div>10</div>
            <div>11</div><div>12</div><div>13</div><div>14</div><div>15</div><div>16</div><div>17</div>
            <div>18</div><div>19</div><div>20</div><div>21</div><div>22</div><div>23</div><div>24</div>
            <div>25</div><div>26</div><div>27</div><div>28</div><div>29</div><div>30</div><div>31</div>
        </div>
    </div>

    <!-- 2025-2026 -->
    <div id="year2526" class="content" style="display:none;">
        <h2>2025-2026 School Year</h2>
        <p><a href="#">Download 2025-2026 Calendar (PDF)</a></p>
    </div>

    <!-- 2026-2027 -->
    <div id="year2627" class="content" style="display:none;">
        <h2>2026-2027 School Year</h2>
        <p><a href="#">Download 2026-2027 Calendar (PDF)</a></p>
    </div>

    <!-- Athletics -->
    <div id="athletics" class="content" style="display:none;">
        <h2>Athletics & Activities</h2>
        <div class="event">Jan 10 – Basketball vs St John’s (U20)</div>
        <div class="event">Jan 18 – Swimming Gala</div>
    </div>

    <!-- Performing Arts -->
    <div id="performing" class="content" style="display:none;">
        <h2>Performing Arts</h2>
        <div class="event">Jan 8 – Drama Rehearsals</div>
        <div class="event">Jan 22 – Music Concert</div>
    </div>

    <script>
        const tabs = document.querySelectorAll('.tab');

        tabs.forEach(tab => {
            tab.addEventListener('click', () => {
                tabs.forEach(t => t.classList.remove('active'));
                tab.classList.add('active');

                document.querySelectorAll('.content')
                    .forEach(c => c.style.display = 'none');

                document.getElementById(tab.dataset.target)
                    .style.display = 'block';
            });
        });
    </script>





</x-app>
