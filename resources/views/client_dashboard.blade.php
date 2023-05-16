@extends('layouts.main')

@section('main-section')
<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper py-0">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2 py-2">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M2.54 0H5.92C7.33 0 8.46 1.15 8.46 2.561V5.97C8.46 7.39 7.33 8.53 5.92 8.53H2.54C1.14 8.53 0 7.39 0 5.97V2.561C0 1.15 1.14 0 2.54 0ZM2.54 11.4697H5.92C7.33 11.4697 8.46 12.6107 8.46 14.0307V17.4397C8.46 18.8497 7.33 19.9997 5.92 19.9997H2.54C1.14 19.9997 0 18.8497 0 17.4397V14.0307C0 12.6107 1.14 11.4697 2.54 11.4697ZM17.4601 0H14.0801C12.6701 0 11.5401 1.15 11.5401 2.561V5.97C11.5401 7.39 12.6701 8.53 14.0801 8.53H17.4601C18.8601 8.53 20.0001 7.39 20.0001 5.97V2.561C20.0001 1.15 18.8601 0 17.4601 0ZM14.0801 11.4697H17.4601C18.8601 11.4697 20.0001 12.6107 20.0001 14.0307V17.4397C20.0001 18.8497 18.8601 19.9997 17.4601 19.9997H14.0801C12.6701 19.9997 11.5401 18.8497 11.5401 17.4397V14.0307C11.5401 12.6107 12.6701 11.4697 14.0801 11.4697Z" fill="white" />
                    </svg>
                </span> Dashboard
            </h3>
        </div>
        <div class="container-fluid">
            <div class="row mt-4">
                <div class="col-lg-4 col-md-4">
                    <div class="row">
                        <div class="col-lg-8">
                            <form action="" method="#">
                                <select name="" class="form-select" id="">
                                    <option disabled selected value="null">Filter by clients</option>
                                    <option value=""><i class="fa fa-edit"></i> Earth</option>
                                    <option value="">B</option>
                                    <option value="">C</option>
                                    <option value="">D</option>
                                </select>
                            </form>
                        </div>
                        <div class="col-lg-4">
                            <span class="">
                                <a class="text-muted font-weight-semibold" href="#">Show more..</a>
                            </span>
                        </div>
                        <h4>Ongoing Trips</h4>
                        @include('aside')
                    </div>
                </div>
                <div class="col-lg-8 col-md-8">
                    <div class="row justify-content-around">
                        <div class="col-4 top_bagdes">
                            <div class="circle-tile ">
                                <a href="#">
                                    <div class="circle-tile-heading dark-blue">
                                        <div class="py-1">
                                            <svg width="31" height="46" viewBox="0 0 31 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M5.92537 39.046H14.4246V30.5467C9.96207 31.0401 6.41874 34.5834 5.92537 39.046ZM16.5641 30.5467V39.046H25.0634C24.57 34.5834 21.0267 31.0401 16.5641 30.5467ZM25.0635 41.1855C24.9141 42.5384 24.4847 43.8054 23.8348 44.9289L25.6868 46.0001C26.6886 44.2683 27.2616 42.2573 27.2616 40.1158C27.2616 33.6169 21.9932 28.3485 15.4944 28.3485C8.99555 28.3485 3.72714 33.6169 3.72714 40.1158C3.72714 42.2573 4.30021 44.2683 5.30203 46.0001L7.15398 44.9289C6.50411 43.8054 6.07471 42.5384 5.92526 41.1855H25.0635Z" fill="#452C88" />
                                                <path d="M18.7037 40.1156C18.7037 41.8881 17.2669 43.3249 15.4944 43.3249C13.722 43.3249 12.2852 41.8881 12.2852 40.1156C12.2852 38.3432 13.722 36.9064 15.4944 36.9064C17.2669 36.9064 18.7037 38.3432 18.7037 40.1156Z" fill="#452C88" />
                                                <path d="M23.6078 36.7405C23.302 35.5992 23.9794 34.426 25.1207 34.1202L27.1873 33.5665C28.3287 33.2606 29.5018 33.938 29.8077 35.0793L30.9152 39.2125C31.2209 40.3539 30.5437 41.527 29.4024 41.8329L27.3357 42.3867C26.1944 42.6924 25.0212 42.0152 24.7154 40.8737L23.6078 36.7405Z" fill="#452C88" />
                                                <path d="M1.1809 35.0783C1.48674 33.937 2.65994 33.2597 3.80126 33.5655L5.86791 34.1193C7.00922 34.425 7.68659 35.5982 7.38075 36.7396L6.27323 40.8728C5.96739 42.0142 4.7942 42.6914 3.65288 42.3857L1.58634 41.8319C0.444938 41.526 -0.232396 40.353 0.0734349 39.2115L1.1809 35.0783Z" fill="#452C88" />
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M5.86665 15.5113V12.302H8.00615V15.5113C8.00615 19.6469 11.3587 22.9995 15.4944 22.9995C19.6301 22.9995 22.9827 19.6469 22.9827 15.5113V12.302H25.1222V15.5113C25.1222 20.8286 20.8117 25.139 15.4944 25.139C10.1771 25.139 5.86665 20.8286 5.86665 15.5113Z" fill="#452C88" />
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M4.57684 9.09287H26.4587C26.5356 8.89658 26.6186 8.66519 26.7013 8.40032L26.7142 8.35892C27.0028 7.43541 27.2616 6.60673 27.2616 4.91739C27.2616 4.06074 26.705 3.3394 25.9683 2.76903C25.2218 2.19116 24.2024 1.6964 23.0668 1.29311C20.7928 0.485485 17.9248 0 15.4944 0C13.064 0 10.196 0.485485 7.92195 1.29311C6.78641 1.6964 5.76694 2.19116 5.02047 2.76903C4.28373 3.3394 3.72714 4.06074 3.72714 4.91739C3.72714 6.48571 3.98944 7.31227 4.25891 8.16166C4.28405 8.24082 4.30919 8.32009 4.33423 8.40021C4.41692 8.66508 4.49993 8.89647 4.57684 9.09287ZM11.2154 5.88362C11.2154 5.29282 11.6943 4.81387 12.2851 4.81387H18.7036C19.2945 4.81387 19.7734 5.29282 19.7734 5.88362C19.7734 6.47443 19.2945 6.95337 18.7036 6.95337H12.2851C11.6943 6.95337 11.2154 6.47443 11.2154 5.88362Z" fill="#452C88" />
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M4.81979 11.6715C4.86835 11.4172 5.10124 11.2323 5.37306 11.2323H25.6157C25.8875 11.2323 26.1204 11.4172 26.169 11.6715L26.1692 11.6728L26.1695 11.6741L26.1701 11.6772L26.1714 11.6845L26.1745 11.704C26.1767 11.719 26.1793 11.7384 26.1817 11.7616C26.1867 11.8081 26.1911 11.8706 26.1918 11.9467C26.1931 12.0989 26.1791 12.3072 26.1214 12.5525C26.0048 13.0483 25.714 13.6786 25.0481 14.2911C23.7279 15.5055 21.0156 16.581 15.4944 16.581C9.9732 16.581 7.26085 15.5055 5.94067 14.2911C5.27475 13.6786 4.98399 13.0483 4.86739 12.5525C4.80973 12.3072 4.79572 12.0989 4.797 11.9467C4.79764 11.8706 4.80213 11.8081 4.80705 11.7616C4.80952 11.7384 4.81208 11.719 4.81433 11.704L4.81743 11.6845L4.81872 11.6772L4.81925 11.6741L4.81957 11.6728L4.81979 11.6715Z" fill="#452C88" />
                                            </svg>
                                        </div>
                                    </div>
                                </a>
                                <div class="circle-tile-content dark-blue">
                                    <div class="circle-tile-description text-faded"> Drivers</div>
                                    <div class="circle-tile-number text-faded ">20</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 top_bagdes">
                            <div class="circle-tile ">
                                <a href="#">
                                    <div class="circle-tile-heading dark-blue">
                                        <div class="py-1">
                                            <svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M29.5412 41.4H10.35C7.1783 41.4 4.6 38.8217 4.6 35.65C4.6 32.4783 7.1783 29.9 10.35 29.9H26.45C30.889 29.9 34.5 26.289 34.5 21.85C34.5 17.411 30.889 13.8 26.45 13.8H15.2697C14.3704 15.5733 13.2733 17.1189 12.1555 18.4H26.45C28.3521 18.4 29.9 19.9479 29.9 21.85C29.9 23.7521 28.3521 25.3 26.45 25.3H10.35C4.6437 25.3 0 29.9437 0 35.65C0 41.3563 4.6437 46 10.35 46H32.4139C31.3628 44.6706 30.36 43.1319 29.5412 41.4ZM6.9 0C3.0958 0 0 3.0958 0 6.9C0 14.2324 6.9 18.4 6.9 18.4C6.9 18.4 13.8 14.2301 13.8 6.9C13.8 3.0958 10.7042 0 6.9 0ZM6.9 10.35C4.9956 10.35 3.45 8.8044 3.45 6.9C3.45 4.9956 4.9956 3.45 6.9 3.45C8.8044 3.45 10.35 4.9956 10.35 6.9C10.35 8.8044 8.8044 10.35 6.9 10.35Z" fill="#452C88" />
                                                <path d="M39.1 27.6C35.2958 27.6 32.2 30.6958 32.2 34.5C32.2 41.8324 39.1 46 39.1 46C39.1 46 46 41.8301 46 34.5C46 30.6958 42.9042 27.6 39.1 27.6ZM39.1 37.95C37.1956 37.95 35.65 36.4044 35.65 34.5C35.65 32.5956 37.1956 31.05 39.1 31.05C41.0044 31.05 42.55 32.5956 42.55 34.5C42.55 36.4044 41.0044 37.95 39.1 37.95Z" fill="#452C88" />
                                            </svg>
                                        </div>
                                    </div>
                                </a>
                                <div class="circle-tile-content dark-blue">
                                    <div class="circle-tile-description text-faded"> Total Routes</div>
                                    <div class="circle-tile-number text-faded ">100</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 top_bagdes">
                            <div class="circle-tile ">
                                <a href="#">
                                    <div class="circle-tile-heading dark-blue">
                                        <div class="py-2">
                                            <svg width="46" height="34" viewBox="0 0 46 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M35.5455 30.3182C37.2809 30.3182 38.6818 28.9173 38.6818 27.1818C38.6818 25.4464 37.2809 24.0455 35.5455 24.0455C33.81 24.0455 32.4091 25.4464 32.4091 27.1818C32.4091 28.9173 33.81 30.3182 35.5455 30.3182ZM38.6818 11.5H33.4545V16.7273H42.78L38.6818 11.5ZM10.4545 30.3182C12.19 30.3182 13.5909 28.9173 13.5909 27.1818C13.5909 25.4464 12.19 24.0455 10.4545 24.0455C8.71909 24.0455 7.31818 25.4464 7.31818 27.1818C7.31818 28.9173 8.71909 30.3182 10.4545 30.3182ZM39.7273 8.36364L46 16.7273V27.1818H41.8182C41.8182 30.6527 39.0164 33.4545 35.5455 33.4545C32.0745 33.4545 29.2727 30.6527 29.2727 27.1818H16.7273C16.7273 30.6527 13.9255 33.4545 10.4545 33.4545C6.98364 33.4545 4.18182 30.6527 4.18182 27.1818H0V4.18182C0 1.86091 1.86091 0 4.18182 0H33.4545V8.36364H39.7273ZM4.18182 4.18182V23H5.77091C6.92091 21.7245 8.59364 20.9091 10.4545 20.9091C12.3155 20.9091 13.9882 21.7245 15.1382 23H29.2727V4.18182H4.18182ZM8.36364 13.5909L11.5 10.4545L14.6364 13.5909L21.9545 6.27273L25.0909 9.40909L14.6364 19.8636L8.36364 13.5909Z" fill="#452C88" />
                                            </svg>
                                        </div>
                                    </div>
                                </a>
                                <div class="circle-tile-content dark-blue">
                                    <div class="circle-tile-description text-faded"> Completed Trips</div>
                                    <div class="circle-tile-number text-faded ">60</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-5 col-md-5">
                            <div>
                                <span class="text-muted font-weight-semibold">Show:</span>
                                <b>03-09, December 2023</b>
                                <span style="border: 1px solid #ACADAE; cursor: pointer ;padding: 0px 6px;">
                                    <i class="fa fa-caret-down"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-between" style="margin-top: 30px !important;">
                        <div class="col-lg-4 col-md-4 prgrss-chart">
                            <p class="progress_para">Active Trips </p>
                        </div>
                        <div class="col-lg-4 col-md-4 prgrss-chart">
                            <p class="progress_para">Completed Trips </p>
                        </div>
                        <div class="col-lg-4 col-md-4 prgrss-chart">
                            <p class="progress_para">Pending Trips </p>
                        </div>
                    </div>
                    <div class="my-3">
                        <h4>Today Progress</h4>
                    </div>
                    <div class="row justify-content-between" style="margin-top: 30px !important;">
                        <div class="col-lg-4 col-md-4 prgrss-chart">
                            <p class="progress_para">Driver Name </p>
                        </div>
                        <div class="col-lg-4 col-md-4 prgrss-chart">
                            <p class="progress_para">Driver Name </p>
                        </div>
                        <div class="col-lg-4 col-md-4 prgrss-chart">
                            <p class="progress_para">Driver Name </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- content-wrapper ends -->
@endsection