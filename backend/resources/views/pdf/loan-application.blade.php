<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Staff Loan Application Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
            line-height: 1.3;
            color: #333;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .logo {
            width: 150px;
            margin-bottom: 10px;
        }
        .title {
            font-size: 18px;
            font-weight: bold;
            text-transform: uppercase;
            margin-bottom: 5px;
        }
        .subtitle {
            font-size: 14px;
            margin-bottom: 5px;
        }
        .section {
            margin-bottom: 15px;
        }
        .section-title {
            font-size: 14px;
            font-weight: bold;
            margin-bottom: 8px;
            text-transform: uppercase;
            border-bottom: 1px solid #333;
            padding-bottom: 3px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 15px;
        }
        table td, table th {
            padding: 5px;
            border: 1px solid #ddd;
            vertical-align: top;
        }
        table th {
            font-weight: bold;
            background-color: #f2f2f2;
            text-align: left;
        }
        .label {
            font-weight: bold;
            width: 40%;
        }
        .footer {
            margin-top: 20px;
            text-align: center;
            font-size: 10px;
            color: #777;
        }
        .page-break {
            page-break-after: always;
        }
        .signature-box {
            border: 1px solid #333;
            height: 70px;
            margin-top: 10px;
            position: relative;
        }
        .signature-line {
            border-bottom: 1px solid #333;
            position: absolute;
            bottom: 15px;
            left: 5px;
            right: 5px;
        }
        .signature-label {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            text-align: center;
            font-style: italic;
            font-size: 10px;
        }
        .checkbox {
            width: 15px;
            height: 15px;
            border: 1px solid #333;
            display: inline-block;
            margin-right: 5px;
        }
        .checkbox.checked:after {
            content: "✓";
            position: relative;
            top: -5px;
            font-weight: bold;
        }
        .declaration {
            border: 1px solid #333;
            padding: 10px;
            margin-top: 15px;
            font-style: italic;
        }
    </style>
</head>
<body>
    <div class="header">
        <img src="{{ public_path('images/zwmb_logo.png') }}" class="logo" alt="ZWMB Bank Logo">
        <div class="title">Zimbabwe Women's Microfinance Bank</div>
        <div class="subtitle">Staff Loan Application Form</div>
        <div class="subtitle">Application Ref: #{{ $loan->loan_id ?? 'DRAFT' }}</div>
    </div>

    <div class="section">
        <div class="section-title">1. Applicant's Personal Information</div>
        <table>
            <tr>
                <td class="label">Title</td>
                <td>{{ $employee->title ?? '' }}</td>
            </tr>
            <tr>
                <td class="label">Name in Full</td>
                <td>{{ $employee->full_name ?? '' }}</td>
            </tr>
            <tr>
                <td class="label">ID/Passport/Driver's License No.</td>
                <td>{{ $employee->national_id ?? '' }}</td>
            </tr>
            <tr>
                <td class="label">Date of Birth</td>
                <td>{{ $employee->date_of_birth ? date('d/m/Y', strtotime($employee->date_of_birth)) : '' }}</td>
            </tr>
            <tr>
                <td class="label">Gender</td>
                <td>{{ $employee->gender ?? '' }}</td>
            </tr>
            <tr>
                <td class="label">Marital Status</td>
                <td>{{ $employee->marital_status ?? '' }}</td>
            </tr>
            <tr>
                <td class="label">Number of Dependents</td>
                <td>{{ $employee->dependents ?? '0' }}</td>
            </tr>
            <tr>
                <td class="label">Physical Home Address</td>
                <td>{{ $employee->physical_address ?? '' }}</td>
            </tr>
            <tr>
                <td class="label">Length of Stay at Address</td>
                <td>{{ $employee->length_of_stay ?? '' }}</td>
            </tr>
            <tr>
                <td class="label">Accommodation Type</td>
                <td>{{ $employee->accommodation_type ?? '' }}</td>
            </tr>
            <tr>
                <td class="label">Postal Address</td>
                <td>{{ $employee->postal_address ?? '' }}</td>
            </tr>
            <tr>
                <td class="label">Telephone Numbers</td>
                <td>
                    Tel: {{ $employee->telephone ?? '' }}<br>
                    Cell: {{ $employee->cell_phone ?? '' }}
                </td>
            </tr>
            <tr>
                <td class="label">Email</td>
                <td>{{ $employee->email ?? '' }}</td>
            </tr>
        </table>
    </div>

    <div class="section">
        <div class="section-title">2. Next of Kin Details</div>
        <table>
            <tr>
                <td class="label">Next of Kin</td>
                <td>{{ $employee->next_of_kin ?? '' }}</td>
            </tr>
            <tr>
                <td class="label">Next of Kin Address</td>
                <td>{{ $employee->next_of_kin_address ?? '' }}</td>
            </tr>
            <tr>
                <td class="label">Next of Kin Telephone Numbers</td>
                <td>
                    Tel: {{ $employee->next_of_kin_tel ?? '' }}<br>
                    Cell: {{ $employee->next_of_kin_cell ?? '' }}
                </td>
            </tr>
        </table>
    </div>

    <div class="section">
        <div class="section-title">3. Employment/Business Details</div>
        <table>
            <tr>
                <td class="label">Period with Employer</td>
                <td>{{ $employee->employment_period ?? '' }}</td>
            </tr>
            <tr>
                <td class="label">Designation</td>
                <td>
                    Post: {{ $employee->position ?? '' }}<br>
                    Department: {{ $employee->department ?? '' }}
                </td>
            </tr>
            <tr>
                <td class="label">Monthly Salary</td>
                <td>
                    Gross($): {{ number_format($employee->salary_gross ?? 0, 2) }}<br>
                    Net($): {{ number_format($employee->salary_net ?? 0, 2) }}
                </td>
            </tr>
        </table>
    </div>

    <div class="page-break"></div>

    <div class="section">
        <div class="section-title">4. Banking Details</div>
        <table>
            <tr>
                <td class="label">Account with ZWMB Bank?</td>
                <td>
                    @if(isset($bankingDetails) && $bankingDetails->has_zwmb_account)
                        Yes, {{ $bankingDetails->years_with_zwmb ?? '' }} years with ZWMB
                    @else
                        No
                    @endif
                </td>
            </tr>
            <tr>
                <td class="label">Branch</td>
                <td>{{ $bankingDetails->branch ?? '' }}</td>
            </tr>
            <tr>
                <td class="label">Account Number</td>
                <td>{{ $bankingDetails->account_number ?? '' }}</td>
            </tr>
            <tr>
                <td class="label">Previous loan with ZWMB?</td>
                <td>
                    @if(isset($bankingDetails) && $bankingDetails->had_previous_loan)
                        Yes, ${{ number_format($bankingDetails->previous_loan_amount ?? 0, 2) }}
                    @else
                        No
                    @endif
                </td>
            </tr>
            @if(isset($bankingDetails) && $bankingDetails->had_previous_loan)
            <tr>
                <td class="label">Current balance</td>
                <td>${{ number_format($bankingDetails->current_balance ?? 0, 2) }}</td>
            </tr>
            <tr>
                <td class="label">Taken on</td>
                <td>{{ $bankingDetails->loan_date ? date('d/m/Y', strtotime($bankingDetails->loan_date)) : '' }}</td>
            </tr>
            <tr>
                <td class="label">Maturity Date</td>
                <td>{{ $bankingDetails->maturity_date ? date('d/m/Y', strtotime($bankingDetails->maturity_date)) : '' }}</td>
            </tr>
            <tr>
                <td class="label">Monthly Repayment</td>
                <td>${{ number_format($bankingDetails->monthly_repayment ?? 0, 2) }}</td>
            </tr>
            @endif
            <tr>
                <td class="label">Other Banking Details</td>
                <td>
                    Bank & Branch: {{ $bankingDetails->other_bank ?? '' }}<br>
                    Account Type: {{ $bankingDetails->other_account_type ?? '' }}
                </td>
            </tr>
        </table>
    </div>

    <div class="section">
        <div class="section-title">5. Loan Request</div>
        <table>
            <tr>
                <td class="label">Loan Type</td>
                <td>{{ $loan->loanType->name ?? '' }} ({{ number_format($loan->loanType->interest_rate ?? 0, 2) }}% interest)</td>
            </tr>
            <tr>
                <td class="label">Loan Amount</td>
                <td>
                    ${{ number_format($loan->amount ?? 0, 2) }}<br>
                    <em>{{ $loan->amount_in_words ?? '' }}</em>
                </td>
            </tr>
            <tr>
                <td class="label">Loan Period</td>
                <td>
                    @php
                        $years = floor(($loan->term_months ?? 0) / 12);
                        $months = ($loan->term_months ?? 0) % 12;
                        $period = [];
                        if ($years > 0) $period[] = $years . ' year' . ($years > 1 ? 's' : '');
                        if ($months > 0) $period[] = $months . ' month' . ($months > 1 ? 's' : '');
                        echo implode(' and ', $period);
                    @endphp
                </td>
            </tr>
            <tr>
                <td class="label">Purpose of Loan</td>
                <td>{{ $loan->purpose ?? '' }}</td>
            </tr>
            <tr>
                <td class="label">Loan Purpose Category</td>
                <td>{{ $loan->specific_purpose ?? '' }}</td>
            </tr>
        </table>
    </div>

    <div class="section">
        <div class="section-title">6. Collateral Security</div>
        <table>
            <tr>
                <th>Security Type</th>
                <th>Description</th>
                <th>Value ($)</th>
            </tr>
            @if(isset($collaterals) && count($collaterals) > 0)
                @foreach($collaterals as $collateral)
                <tr>
                    <td>{{ $collateral->security_type ?? '' }}</td>
                    <td>{{ $collateral->asset_description ?? '' }}</td>
                    <td>{{ number_format($collateral->estimated_value ?? 0, 2) }}</td>
                </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="3" style="text-align: center;">No collateral security provided.</td>
                </tr>
            @endif
        </table>
    </div>

    <div class="declaration">
        <p><strong>DECLARATION BY APPLICANT:</strong> I hereby declare that the information provided is true and accurate. I understand that providing false information may lead to rejection of my application and/or legal consequences.</p>
        <p>I authorize ZWMB Bank Limited to verify information provided in this application and to obtain any additional information required for the assessment of this loan application.</p>
    </div>

    <table style="border: none; margin-top: 20px;">
        <tr style="border: none;">
            <td style="border: none; width: 50%;">
                <div style="margin-top: 15px;">
                    <div>Applicant's Signature:</div>
                    <div class="signature-box">
                        <div class="signature-line"></div>
                        <div class="signature-label">Signature</div>
                    </div>
                </div>
            </td>
            <td style="border: none; width: 50%;">
                <div style="margin-top: 15px;">
                    <div>Date:</div>
                    <div class="signature-box">
                        <div class="signature-line"></div>
                        <div class="signature-label">Date</div>
                    </div>
                </div>
            </td>
        </tr>
    </table>

    <div class="page-break"></div>

    <div class="section">
        <div class="section-title">For Official Use Only</div>
        <table>
            <tr>
                <td class="label">Application Received By</td>
                <td></td>
            </tr>
            <tr>
                <td class="label">Date Received</td>
                <td></td>
            </tr>
            <tr>
                <td class="label">Application Status</td>
                <td>
                    <div class="checkbox"></div> Approved
                    <div class="checkbox"></div> Declined
                    <div class="checkbox"></div> Pending Further Information
                </td>
            </tr>
            <tr>
                <td class="label">Approved Amount</td>
                <td>$</td>
            </tr>
            <tr>
                <td class="label">Interest Rate</td>
                <td>%</td>
            </tr>
            <tr>
                <td class="label">Repayment Period</td>
                <td></td>
            </tr>
            <tr>
                <td class="label">Monthly Installment</td>
                <td>$</td>
            </tr>
            <tr>
                <td class="label">Comments/Conditions</td>
                <td style="height: 80px;"></td>
            </tr>
        </table>

        <table style="border: none; margin-top: 30px;">
            <tr style="border: none;">
                <td style="border: none; width: 50%;">
                    <div>Approved By:</div>
                    <div class="signature-box">
                        <div class="signature-line"></div>
                        <div class="signature-label">Credit Officer</div>
                    </div>
                </td>
                <td style="border: none; width: 50%;">
                    <div>Date:</div>
                    <div class="signature-box">
                        <div class="signature-line"></div>
                        <div class="signature-label">Date</div>
                    </div>
                </td>
            </tr>
            <tr style="border: none;">
                <td style="border: none; width: 50%;" colspan="2">
                    <div style="margin-top: 20px;">Final Approval By:</div>
                    <div class="signature-box">
                        <div class="signature-line"></div>
                        <div class="signature-label">Credit Manager/Director</div>
                    </div>
                </td>
            </tr>
        </table>
    </div>

    <div class="footer">
        <p>ZWMB Bank Limited | Loan Application Form | Page 2 of 2</p>
    </div>
</body>
</html>