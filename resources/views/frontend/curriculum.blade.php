<x-app>
    <x-breadcrumb class="breadcrumb-height breadcumb-bg" image="breadcrumb.jpg" title="School Curriculum" page="curriculum" />

    <!-- curriculum section -->
    <div class="semister-fee pb--120 pb__md--80 pt--120 pt__md--80">
        <div class="container">
            <div class="row">
                <div class="semister-fee__content">
                    <h3 class="rts-section-title">{{ ucfirst($type) }} School Curriculum</h3>
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
                                            {{ isset($curriculum['title']) ? $curriculum['title'] : ucwords(str_replace('_', ' ', $key)) }}
                                        </button>
                                    @endforeach
                                </div>
                            </nav>
                        </div>
                        <div class="rts-fee-chart__content" id="nav-tabContent">
                            @foreach($data as $key => $curriculum)
                                <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }}" id="{{ $key }}" role="tabpanel" aria-labelledby="{{ $key }}-tab">
                                    <div class="mb--30">
                                        <h5 class="title">{{ isset($curriculum['title']) ? $curriculum['title'] : ucwords(str_replace('_', ' ', $key)) }}</h5>
                                        <p class="desc">{{ $curriculum['description'] ?? '' }}</p>
                                    </div>
                                    @if(isset($curriculum['data']))
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
                                    @elseif(isset($curriculum['compulsory_subjects']))
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h6 class="title">Compulsory Subjects</h6>
                                                <ul class="list-unstyled">
                                                    @foreach($curriculum['compulsory_subjects'] as $subject)
                                                        <li><i class="far fa-check-circle me-2"></i>
                                                            @if(is_array($subject))
                                                                @if(isset($subject['name']))
                                                                    {{ $subject['name'] }}
                                                                @elseif(isset($subject['choice']))
                                                                    {{ implode(' / ', $subject['choice']) }}
                                                                @else
                                                                    {{-- Fallback for other array structures --}}
                                                                    {{ collect($subject)->first() }}
                                                                @endif
                                                            @else
                                                                {{ $subject }}
                                                            @endif
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                            @if(isset($curriculum['optional_subjects']) || isset($curriculum['options']))
                                            <div class="col-md-6">
                                                <h6 class="title">Optional Subjects</h6>
                                                <ul class="list-unstyled">
                                                    @php
                                                        $options = $curriculum['optional_subjects'] ?? $curriculum['options'] ?? [];
                                                    @endphp
                                                    @foreach($options as $optKey => $option)
                                                        @if(is_array($option))
                                                            @if(isset($option['name']))
                                                                <li><i class="far fa-circle me-2"></i> {{ $option['name'] }}</li>
                                                            @elseif(isset($option['choice']))
                                                                <li><i class="far fa-circle me-2"></i> {{ implode(' / ', $option['choice']) }}</li>
                                                            @elseif(isset($option['code'])) {{-- Handle case with code but maybe no name? --}}
                                                                <li><i class="far fa-circle me-2"></i> {{ $option['code'] }}</li>
                                                            @elseif(!empty($option) && !isset($option[0])) {{-- Associative array like option_a, option_b --}}
                                                                <li><strong>{{ ucwords(str_replace('_', ' ', $optKey)) }}:</strong></li>
                                                                @foreach($option as $subOpt)
                                                                    <li class="ms-4"><i class="far fa-circle me-2"></i>
                                                                        @if(is_array($subOpt))
                                                                            @if(isset($subOpt['name']))
                                                                                {{ $subOpt['name'] }}
                                                                            @elseif(isset($subOpt['choice']))
                                                                                {{ implode(' / ', $subOpt['choice']) }}
                                                                            @else
                                                                                {{ collect($subOpt)->first() }}
                                                                            @endif
                                                                        @else
                                                                            {{ $subOpt }}
                                                                        @endif
                                                                    </li>
                                                                @endforeach
                                                            @else {{-- Indexed array --}}
                                                                @foreach($option as $subOpt)
                                                                     <li><i class="far fa-circle me-2"></i>
                                                                        @if(is_array($subOpt))
                                                                            {{ $subOpt['name'] ?? collect($subOpt)->first() }}
                                                                        @else
                                                                            {{ $subOpt }}
                                                                        @endif
                                                                    </li>
                                                                @endforeach
                                                            @endif
                                                        @else
                                                            <li><i class="far fa-circle me-2"></i> {{ $option }}</li>
                                                        @endif
                                                    @endforeach
                                                </ul>
                                            </div>
                                            @endif
                                        </div>
                                    @endif
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
