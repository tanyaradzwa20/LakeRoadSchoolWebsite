<x-app>
    <x-breadcrumb class="breadcrumb-height breadcumb-bg" image="breadcrumb.jpg" title="School Fees" page="Fees" />

    <!-- fees section -->
    <div class="semister-fee pb--120 pb__md--80 pt--120 pt__md--80">
        <div class="container">
            <div class="row">
                <div class="semister-fee__content">
                    <h3 class="rts-section-title">Primary School Fees</h3>
                    <p class="desc mb--50">
                        Lake Road PTA School offers competitive fees for our high-quality educational programs. Fees are structured to ensure the sustainability of our school while providing the best possible environment for our learners.
                    </p>

                    <!-- tab item -->
                    <div class="rts-fee-chart">
                        <div class="rts-fee-chart__tab">
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    @foreach($data as $key => $feeGroup)
                                        <button class="nav-link {{ $loop->first ? 'active' : '' }}" id="{{ $key }}-tab" data-bs-toggle="tab" data-bs-target="#{{ $key }}" type="button" role="tab" aria-controls="{{ $key }}" aria-selected="{{ $loop->first ? 'true' : 'false' }}">
                                            {{ $feeGroup['title'] }}
                                        </button>
                                    @endforeach
                                </div>
                            </nav>
                        </div>
                        <div class="rts-fee-chart__content" id="nav-tabContent">
                            @foreach($data as $key => $feeGroup)
                                <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }}" id="{{ $key }}" role="tabpanel" aria-labelledby="{{ $key }}-tab">
                                    <div class="mb--30">
                                        <h5 class="title">{{ $feeGroup['title'] }}</h5>
                                        <p class="desc">{{ $feeGroup['description'] }}</p>
                                    </div>

                                    @foreach($feeGroup['data'] as $subKey => $subGroup)
                                        <div class="mb--50">
                                            <h6 class="title">{{ $subGroup['title'] }}</h6>
                                            <table class="table">
                                                <thead class="table-theme">
                                                    <tr>
                                                        <th>Fee Description</th>
                                                        <th>Amount</th>
                                                        <th>Type</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @php $total = 0; @endphp
                                                    @foreach($subGroup['fees'] as $fee)
                                                        <tr>
                                                            <td>{{ $fee['name'] }}</td>
                                                            <td>{{ $fee['currency'] }} {{ number_format($fee['amount'], 2) }}</td>
                                                            <td>{{ ucfirst(str_replace('_', ' ', $fee['type'])) }}</td>
                                                        </tr>
                                                        @php $total += $fee['amount']; @endphp
                                                    @endforeach
                                                    <tr class="table-theme">
                                                        <td><strong>Total</strong></td>
                                                        <td colspan="2"><strong>{{ $subGroup['fees'][0]['currency'] }} {{ number_format($total, 2) }}</strong></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            @if(!empty($subGroup['notes']))
                                                <div class="mt--20">
                                                    <h6>Notes:</h6>
                                                    <ul class="list-unstyled">
                                                        @foreach($subGroup['notes'] as $note)
                                                            <li><i class="far fa-dot-circle me-2"></i> {{ $note }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif
                                        </div>
                                    @endforeach
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="mt--80">
                        <div class="mb--50">
                            <h6>NOTE:</h6>
                            <ul class="list-unstyled">
                                <li class="mb--10"><strong>(I)</strong> All New pupils shall only be admitted in School upon payment of 100% of the school fees for the term.</li>
                                <li class="mb--10"><strong>(II)</strong> The 5% Discount incentive (Early Bird) will ONLY be applicable when Paying Next Term's School fees during the current Term.</li>
                                <li class="mb--10"><strong>(III)</strong> PTA Fund is a General Purpose Fund charged per child per year for running the Association's prioritised programs.</li>
                            </ul>
                        </div>

                        <div class="mb--50">
                            <p class="desc">SEN Fee is charged in addition to the standard school fee for the term to every child registered for learning support:</p>
                            <h6>SEN Fees</h6>
                            <table class="table">
                                <thead class="table-theme">
                                    <tr>
                                        <th>Level</th>
                                        <th>Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1) Nursery</td>
                                        <td>K2,500/Learner</td>
                                    </tr>
                                    <tr>
                                        <td>2) Reception</td>
                                        <td>K2,500/Learner</td>
                                    </tr>
                                    <tr>
                                        <td>3) Grade 1 - 7</td>
                                        <td>K2,500/Learner</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="mb--50">
                            <p class="desc">All School fees MUST be paid ONLY in the following School Bank Accounts in accordance with the School Fees Policy:</p>
                            <h6>Tuition Fees, PTA Fund and Educational Trips Fees School Bank Accounts</h6>
                            <div class="row">
                                <div class="col-lg-6">
                                    <table class="table table-bordered">
                                        <tbody>
                                            <tr>
                                                <td><strong>Bank Name</strong></td>
                                                <td>ZANACO</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Account Name</strong></td>
                                                <td>Lake Road PTA School-Revenue</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Account Number</strong></td>
                                                <td>5697472300236</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Branch Name</strong></td>
                                                <td>Woodlands</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Bank Code</strong></td>
                                                <td>085</td>
                                            </tr>
                                            <tr>
                                                <td><strong>SORT Code</strong></td>
                                                <td>010085</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Swift Code</strong></td>
                                                <td>ZNCOZMLU</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-lg-6">
                                    <table class="table table-bordered">
                                        <tbody>
                                            <tr>
                                                <td><strong>Bank Name</strong></td>
                                                <td>INDO-Zambia</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Account Name</strong></td>
                                                <td>Lake Road PTA School</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Account Number</strong></td>
                                                <td>0232020000067</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Branch Name</strong></td>
                                                <td>Crossroads</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Bank Code</strong></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td><strong>SORT Code</strong></td>
                                                <td>090023</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Swift Code</strong></td>
                                                <td>INZAZMLX</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- fees section end -->

{{--    <x-campus-tour/>--}}

</x-app>
