@extends('teachers.includes.masterLayout')

@section('content')
<div class="dash-header">
    <div class="dash-title position-relative ">
        <h3>TEACHER lIST OF RECIEVED TIPS</h3>
        <img src="{{asset('frontend/img/Rectangle 93.svg')}}" class="position-absolute yell-shape0" alt="dashboard">
        <img src="{{asset('frontend/img/Rectangle 95.png')}}" class="position-absolute yell-shape1" alt="dashboard">
    </div>
    <div class="dash-owner d-flex align-items-center">
        <div class="owner-pic"><img src="{{asset('frontend/img/dash.svg')}}" alt="dashboard-pic"></div>
        <div class="owner-info">
            <h5>Esthera Jackson</h5>
            <p>esthera@simmmple.com</p>
        </div>
    </div>
</div>
<h5 class="sayhi"><img src="{{asset('frontend/img/waving-hand-sign_1f44b 1.png')}}" alt="waving-hand-sign">Hey Esthera!</h5>
                        <div class="earnings d-flex align-items-center">
                            <h3>You earned  $3 ,000 Tips this month</h3>
                            <svg class="progres" width="100" height="100">
                                <circle class="progress-circle" cx="40" cy="40" r="30" fill="#E2FBD7" stroke="#34B53A" stroke-width="3"></circle>
                                <text class="loading" fill="#282B29" x="40" y="45" text-anchor="middle" align-baseline="middle" data-prog="96"></text>
                            </svg>
                            <span>above than last month</span>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-12 col-xxl-8 mb-3 ">
                                    <div class="chart">
                                        <ul class="chart-numbers">
                                            <li><span>200,000</span></li>
                                            <li><span>150,000</span></li>
                                            <li><span>100,000</span></li>
                                            <li><span>50,000</span></li>
                                            <li><span>0</span></li>
                                        </ul>
                                        <ul class="chart-dates">
                                            <li><div class="bar" data-percentage="25"></div><span>Mar 1 - 7</span></li>
                                            <li><div class="bar" data-percentage="50"></div><span>Mar 8 - 14</span></li>
                                            <li><div class="bar" data-percentage="66"></div><span>Mar 15 - 21</span></li>
                                            <li><div class="bar" data-percentage="76"></div><span>Mar 22 - 28</span></li>
                                            <li><div class="bar" data-percentage="100"></div><span>Final wk</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-12 col-xxl-4 dash-cards">
                                    <div class="balance mb-3 position-relative text-center ">
                                        <div class="d-flex align-items-center justify-content-between balance-header">
                                            <div>
                                                <span class="icon"><img src="{{asset('frontend/img/vaadin_wallet.svg')}}" alt="vaadin_wallet"></span>
                                                <span>Total Balance</span></div>
                                                <div class="dropdown">
                                                    <button class="dropdown-toggle balance-drop-btn border-0 " type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <span></span>
                                                    <span></span>
                                                    <span></span>
                                                    </button>
                                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                    </ul>
                                                </div>
                                        </div>
                                        <h3>$3140.74</h3>
                                        <a href="#" id="widthdraw-tech-popup-btn">Withdraw Now</a>
                                        <img src="{{asset('frontend/img/Rectangle 93 (1).svg')}}" class="position-absolute balance-img" alt="balance">
                                    </div>
                                    <div class="tips-recieved mb-3">
                                        <div class="tip-rec-header mb-3">
                                            <img src="{{asset('frontend/img/fluent_wallet-credit-card-16-filled.svg')}}" alt="wallet-credit-card">
                                            <span>Tips Recieved</span>
                                        </div>
                                        <ul class="tips-lists">
                                            <li class="tips-list-header d-flex align-items-center justify-content-between mb-2">
                                                <span>Last 30 days <img src="{{asset('frontend/img/Frame 2.svg')}}" alt="frame"></span>
                                                <a href="#">See All</a>
                                            </li>
                                            <li class="d-flex align-items-center justify-content-between mb-2">
                                                <span class="tip-amount">$30000</span>
                                                <span class="tip-date">Jan 12,2022</span>
                                            </li>
                                            <li class="d-flex align-items-center justify-content-between mb-2">
                                                <span class="tip-amount">$200</span>
                                                <span class="tip-date">Jan 12,2022</span>
                                            </li>
                                            <li class="d-flex align-items-center justify-content-between mb-2">
                                                <span class="tip-amount">$100</span>
                                                <span class="tip-date">Jan 12,2022</span>
                                            </li>
                                            <li class="d-flex align-items-center justify-content-between mb-2">
                                                <span class="tip-amount">$100</span>
                                                <span class="tip-date">Jan 12,2022</span>
                                            </li>
                                            <li class="d-flex align-items-center justify-content-between mb-2">
                                                <span class="tip-amount">$300</span>
                                                <span class="tip-date">Jan 12,2022</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dash-icon position-absolute d-block d-lg-none">
                            <img src="{{asset('frontend/img/menu (1).svg')}}" class="img-fluid " alt="dash-icon">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection    
    