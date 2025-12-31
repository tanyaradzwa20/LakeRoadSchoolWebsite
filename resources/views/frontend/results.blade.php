<x-app>
    <x-breadcrumb class="breadcrumb-height breadcumb-bg" image="breadcrumb.jpg" title="Academic Results" page="Results" />

    <!-- results section -->
    <div class="semister-fee pb--120 pb__md--80 pt--120 pt__md--80">
        <div class="container">
            <div class="row">
                <div class="semister-fee__content">
                    <h3 class="rts-section-title">Grade 7 National Examination Results</h3>

                    <div class="mb--50">
                        <h5 class="title">The School's ECZ Ranking Position</h5>
                        <p class="desc">
                            The Examination Council of Zambia (ECZ) ranks Lake Road PTA School among the BEST Top Schools in Lusaka that produce excellent RESULTS for the academic year.
                        </p>
                    </div>

                    <div class="mb--50">
                        <h5 class="title">National Results</h5>
                        <p class="desc">
                            Lake Road PTA School produces exceptional good results for the Examination Council of Zambia National Exams.
                        </p>
                    </div>

                    <div class="mb--30">
                        <h5 class="title">Grade 7 Comparative Analysis from 2011 - 2022</h5>
                        <p class="desc">
                            All the Pupils at Lake Road PTA School who sit for the Grade 7 Exams obtains full certificates and qualify to Grade 8.
                        </p>
                    </div>

                    <div class="rts-fee-chart">
                        <div class="rts-fee-chart__content">
                            <table class="table">
                                <thead class="table-theme">
                                    <tr>
                                        <th>Year</th>
                                        <th>Number of Candidates</th>
                                        <th>Highest Score</th>
                                        <th>Lowest Score</th>
                                        <th>Average Score</th>
                                        <th>Progression %</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data as $result)
                                        <tr>
                                            <td><strong>{{ $result['year'] }}</strong></td>
                                            <td>{{ $result['candidates'] }}</td>
                                            <td>{{ $result['highest_score'] }}</td>
                                            <td>{{ $result['lowest_score'] }}</td>
                                            <td>{{ $result['average_score'] }}</td>
                                            <td>{{ $result['progression_percentage'] }}%</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="mt--50">
                        <p class="rt-regular">Note: The scores represent the total aggregate marks obtained by candidates in the National Examinations.</p>
                    </div>

                    <div class="mt--50">
                        <h6 class="title">Notes</h6>
                        <ul class="list-unstyled">
                            <li class="mb--10"><strong>(i)</strong> The total number of Leaners who sat for the 2023 examination was 80 (girls 23 & boys 57)</li>
                            <li class="mb--10"><strong>(ii)</strong> The School attained an average score of 766/900 for the year 2023.</li>
                            <li class="mb--10"><strong>(iii)</strong> All subject average scores were above 117/150</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- results section end -->

</x-app>
