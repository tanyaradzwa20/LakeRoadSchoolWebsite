<x-app>
    <x-breadcrumb class="breadcrumb-height breadcumb-bg" image="breadcrumb.jpg" title="School Curriculum" page="curriculum" />

    <!-- curriculum section -->
    <div class="semister-fee pb--120 pb__md--80 pt--120 pt__md--80">
        <div class="container">
            <div class="row">
                <div class="semister-fee__content">
                    <h3 class="rts-section-title">Primary School Curriculum</h3>
                    <p class="desc mb--50">
                        Lake Road PTA School provides a World Class and Holistic Education where all pupils of different national backgrounds fit in and are warmly embraced. Our curriculum is designed to foster academic excellence, innovation, and diversity.
                    </p>

                    <!-- tab item -->
                    <div class="rts-fee-chart">
                        <div class="rts-fee-chart__tab">
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    @foreach($data as $key => $curriculum)
                                        <button class="nav-link {{ $loop->first ? 'active' : '' }}" id="{{ $key }}-tab" data-bs-toggle="tab" data-bs-target="#{{ $key }}" type="button" role="tab" aria-controls="{{ $key }}" aria-selected="{{ $loop->first ? 'true' : 'false' }}">
                                            {{ $curriculum['title'] }}
                                        </button>
                                    @endforeach
                                </div>
                            </nav>
                        </div>
                        <div class="rts-fee-chart__content" id="nav-tabContent">
                            @foreach($data as $key => $curriculum)
                                <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }}" id="{{ $key }}" role="tabpanel" aria-labelledby="{{ $key }}-tab">
                                    <div class="mb--30">
                                        <h5 class="title">{{ $curriculum['title'] }}</h5>
                                        <p class="desc">{{ $curriculum['description'] }}</p>
                                    </div>
                                    <table class="table">
                                        <thead class="table-theme">
                                            <tr>
                                                <th>Subject</th>
                                                <th>Topics / Activities</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($curriculum['data'] as $item)
                                                @if(isset($item['subject']))
                                                    <tr>
                                                        <td>{{ $item['subject'] }}</td>
                                                        <td>
                                                            @if(!empty($item['topics']))
                                                                <ul class="list-unstyled mb-0">
                                                                    @foreach($item['topics'] as $topic)
                                                                        <li><i class="far fa-check-circle me-2"></i>{{ $topic }}</li>
                                                                    @endforeach
                                                                </ul>
                                                            @else
                                                                <span class="text-muted">No specific topics listed</span>
                                                            @endif
                                                        </td>
                                                    </tr>
                                                @endif
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- curriculum section end -->

</x-app>
