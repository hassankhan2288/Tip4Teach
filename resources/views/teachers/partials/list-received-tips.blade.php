{{-- @extends('frontend.teachers.teacher') --}}
@extends('teachers.includes.masterLayout')

@section('content')
<div class="dash-header">
    <div class="dash-title position-relative ">
        <h3>TEACHER lIST OF RECIEVED TIPS</h3>
        <img src="{{ asset('frontend/img/Rectangle 93.svg') }}" class="position-absolute yell-shape0" alt="dashboard">
        <img src="{{ asset('frontend/img/Rectangle 95.png') }}" class="position-absolute yell-shape1" alt="dashboard">
    </div>
    <div class="dash-owner d-flex align-items-center">
        <div class="owner-pic"><img src="{{ asset('frontend/img/dash.svg') }}" alt="dashboard-pic"></div>
        <div class="owner-info">
            <h5>Esthera Jackson</h5>
            <p>esthera@simmmple.com</p>
        </div>
    </div>
</div>
    <h3>list of Recieved Tips</h3>
    <section class="table-section">
        <table>
            <thead>
                <tr>
                    <th>Tip ID</th>
                    <th>Name</th>
                    <th>Date</th>
                    <th>Message</th>
                    <th>Payment Status</th>
                    <th>Amount</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="tip-id">#141281</td>
                    <td>David</td>
                    <td>Jan 2,2022</td>
                    <td>Thank you</td>
                    <td class="tip-freq"><span class="inprogress"></span><span>Pending</span></td>
                    <td class="tip-his-amount">$783.22</td>
                </tr>
                <tr>
                    <td class="tip-id">#141281</td>
                    <td>Kevin Martin</td>
                    <td>Jan 2,2022</td>
                    <td>Thank you</td>
                    <td class="tip-freq"><span class="success"></span><span>Paid</span></td>
                    <td class="tip-his-amount">$783.22</td>
                </tr>
                <tr>
                    <td class="tip-id">#141281</td>
                    <td>Anonymous</td>
                    <td>Jan 2,2022</td>
                    <td>-</td>
                    <td class="tip-freq"><span class="processing"></span><span>Processing</span></td>
                    <td class="tip-his-amount">$783.22</td>
                </tr>
                <tr>
                    <td class="tip-id">#141281</td>
                    <td>Alesia jake</td>
                    <td>Jan 2,2022</td>
                    <td>-</td>
                    <td class="tip-freq"><span class="success"></span><span>Paid</span></td>
                    <td class="tip-his-amount">$783.22</td>
                </tr>
                <tr>
                    <td class="tip-id">#141281</td>
                    <td>Anonymous</td>
                    <td>Jan 2,2022</td>
                    <td>Thank you</td>
                    <td class="tip-freq"><span class="success"></span><span>Paid</span></td>
                    <td class="tip-his-amount">$783.22</td>
                </tr>
                <tr>
                    <td class="tip-id">#141281</td>
                    <td>Alesia jake</td>
                    <td>Jan 2,2022</td>
                    <td>-</td>
                    <td class="tip-freq"><span class="inprogress"></span><span>Pending</span></td>
                    <td class="tip-his-amount">$783.22</td>
                </tr>
            </tbody>
        </table>
    </section>

    <div class="dash-icon position-absolute d-block d-lg-none">
        <img src="img/menu (1).svg" class="img-fluid " alt="dash-icon">
    </div>
@endsection
