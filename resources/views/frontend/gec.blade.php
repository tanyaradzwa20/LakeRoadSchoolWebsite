<x-app>
    <x-breadcrumb class="breadcrumb-height breadcumb-bg" image="breadcrumb.jpg" title="GCE Fees" page="GCE Fees" />

    <!-- GCE fees section -->
    <div class="semister-fee pb--120 pb__md--80 pt--120 pt__md--80">
        <div class="container">
            <div class="row">
                <div class="semister-fee__content">
                    <h3 class="rts-section-title">GCE Examination Fees</h3>
                    <p class="desc mb--50">
                        Lake Road PTA School provides detailed information regarding GCE Examination fees. The fees are categorized into ECZ charges and School charges, with a sample breakdown for candidates.
                    </p>

                    <!-- tab item -->
                    <div class="rts-fee-chart">
                        <div class="rts-fee-chart__tab">
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="ecz-charges-tab" data-bs-toggle="tab" data-bs-target="#ecz-charges" type="button" role="tab" aria-controls="ecz-charges" aria-selected="true">
                                        ECZ Charges
                                    </button>
                                    <button class="nav-link" id="school-charges-tab" data-bs-toggle="tab" data-bs-target="#school-charges" type="button" role="tab" aria-controls="school-charges" aria-selected="false">
                                        School Charges
                                    </button>
                                    <button class="nav-link" id="candidate-fees-tab" data-bs-toggle="tab" data-bs-target="#candidate-fees" type="button" role="tab" aria-controls="candidate-fees" aria-selected="false">
                                        Sample Candidate Fees
                                    </button>
                                </div>
                            </nav>
                        </div>
                        <div class="rts-fee-chart__content" id="nav-tabContent">
                            <!-- ECZ Charges Tab -->
                            <div class="tab-pane fade show active" id="ecz-charges" role="tabpanel" aria-labelledby="ecz-charges-tab">
                                <div class="mb--30">
                                    <h5 class="title">ECZ Charges (Code {{ $data['eczCharges']['code'] }})</h5>
                                    <p class="desc">Fees payable to the Examination Council of Zambia ({{ $data['eczCharges']['board'] }}).</p>
                                </div>
                                <table class="table">
                                    <thead class="table-theme">
                                        <tr>
                                            <th>Description</th>
                                            <th>Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data['eczCharges']['charges'] as $charge)
                                            <tr>
                                                <td>{{ $charge['description'] }}</td>
                                                <td>{{ $charge['currency'] }} {{ number_format($charge['amount'], 2) }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                            <!-- School Charges Tab -->
                            <div class="tab-pane fade" id="school-charges" role="tabpanel" aria-labelledby="school-charges-tab">
                                <div class="mb--30">
                                    <h5 class="title">School Charges (Code {{ $data['schoolCharges']['code'] }})</h5>
                                    <p class="desc">Fees payable to the {{ $data['schoolCharges']['source'] }}.</p>
                                </div>
                                <table class="table">
                                    <thead class="table-theme">
                                        <tr>
                                            <th>Description</th>
                                            <th>Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data['schoolCharges']['charges'] as $charge)
                                            <tr>
                                                <td>{{ $charge['description'] }}</td>
                                                <td>{{ $charge['currency'] }} {{ number_format($charge['amount'], 2) }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                            <!-- Candidate Fees Tab -->
                            <div class="tab-pane fade" id="candidate-fees" role="tabpanel" aria-labelledby="candidate-fees-tab">
                                <div class="mb--30">
                                    <h5 class="title">Sample Candidate Fees Breakdown</h5>
                                    <p class="desc">Based on a candidate taking {{ $data['candidateFees']['subjects_count'] }} subjects.</p>
                                </div>
                                <div style="overflow-x: auto;">
                                    <table class="table">
                                        <thead class="table-theme">
                                            <tr>
                                                <th>Item</th>
                                                <th>Description</th>
                                                <th>Entry Fee</th>
                                                <th>Centre Fee</th>
                                                <th>Subject Fee</th>
                                                <th>Practical Fee</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($data['candidateFees']['items'] as $item)
                                                <tr>
                                                    <td>{{ $item['item'] }}</td>
                                                    <td>{{ $item['description'] }}</td>
                                                    <td>{{ number_format($item['entry_fee'], 2) }}</td>
                                                    <td>{{ number_format($item['centre_fee'], 2) }}</td>
                                                    <td>{{ number_format($item['subject_fee'], 2) }}</td>
                                                    <td>{{ number_format($item['practical_fee'], 2) }}</td>
                                                    <td><strong>{{ number_format($item['total'], 2) }}</strong></td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr class="table-light">
                                                <td colspan="6" class="text-end"><strong>Grand Total ({{ $data['candidateFees']['currency'] }})</strong></td>
                                                <td><strong>{{ number_format($data['candidateFees']['grand_total'], 2) }}</strong></td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- GCE fees section end -->

</x-app>
