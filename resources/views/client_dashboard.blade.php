@extends('layouts.main')

@section('main-section')

<style>
    .position-absolute {
        position: absolute;
        display: flex;
        z-index: 100;
        align-items: center;
        justify-content: center;
        height: 100%;
        width: 100%;
        bottom: 5.5rem;
    }
    .dismiss-btn {
        background-color: #233A85;
        color: #FFFFFF;
        border-radius: 10px;
        box-shadow: 3px 4px 12px -2px rgba(35, 58, 133, 0.5);
        -webkit-box-shadow: 3px 4px 12px -2px rgba(35, 58, 133, 0.5);
        -moz-box-shadow: 3px 4px 12px -2px rgba(35, 58, 133, 0.5);
        }

    .dismiss-btn:hover {
        background-color: #233A85;
        color: #FFFFFF;
        border-radius: 10px;
    }

</style>

@foreach($announcements as $key => $val)
@if($val['type'] == "Promotion")

<!-- Promotion Modal -->
<div class="modal fade" id="promotionmodal" tabindex="-1" role="dialog" aria-labelledby="promotionmodalLabel" aria-hidden="true">
    <div class="modal-dialog mt-5 pt-5" role="document">
        <div class="modal-content bg-white p-5">
            <div class="modal-body mt-5">
                <div class="alert-div text-center mt-5">
                    <div class="alert-icon">
                        <svg width="148" height="148" viewBox="0 0 148 148" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="74" cy="74" r="74" fill="white" />
                            <circle cx="74" cy="74" r="74" fill="white" />
                            <circle cx="74" cy="74" r="66" fill="#5251FA" />
                            <path d="M39.375 66.6731L109.375 39.75L98.6058 98.9808L61.075 78.5085L103.99 45.1346L54.4196 74.8738L39.375 66.6731ZM60.9135 109.75V84.2592L77.0673 93.5962L60.9135 109.75Z" fill="white" />
                        </svg>
                    </div>
                    <h4> {!! $val['title'] !!} </h4>
                    <p>
                        {!! $val['desc'] !!}
                    </p>
                    <button class="btn dismiss-btn dismiss-btn_pro px-5 mt-5" >@lang('lang.dismiss')</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Promotion Modal End -->
<script>

    $(document).ready(function() {
        var announcementId = '{{$val['id']}}';
        var previousTitle = localStorage.getItem('previousTitle_' + announcementId);
        var previousDescription = localStorage.getItem('previousDescription_' + announcementId);

        var currentTitle = '{{ addslashes($val['title']) }}';
        var currentDescription = `{!! addslashes($val['desc']) !!}`;

        var shouldShowModal = previousTitle !== currentTitle || previousDescription !== currentDescription;

        if (shouldShowModal) {
            $('#promotionmodal').modal('show');
        }

        function dismissModal() {
            $('#promotionmodal').modal('hide');

            localStorage.setItem('previousTitle_' + announcementId, currentTitle);
            localStorage.setItem('previousDescription_' + announcementId, currentDescription);
        }

        $('.dismiss-btn_pro').on('click', dismissModal);
    });
</script>

@endif


@if($val['type'] == "News")
<!-- News Modal -->
<div class="modal fade" id="newsmodal" tabindex="-1" role="dialog" aria-labelledby="newsmodalLabel" aria-hidden="true">
    <div class="modal-dialog mt-5 pt-5" role="document">
        <div class="modal-content bg-white p-5">
            <div class="modal-body mt-5">
                <div class="alert-div text-center mt-5">
                    <div class="alert-icon">
                        <svg width="148" height="148" viewBox="0 0 148 148" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="74" cy="74" r="74" fill="white" />
                            <circle cx="74" cy="74" r="74" fill="white" />
                            <circle cx="74" cy="74" r="66" fill="#FBBC05" />
                            <path d="M84.875 98.0625C84.875 104.093 79.9684 109 73.9375 109C67.9066 109 63 104.093 63 98.0625C63 92.0316 67.9066 87.125 73.9375 87.125C79.9684 87.125 84.875 92.0316 84.875 98.0625ZM64.266 42.4452L66.1254 79.6327C66.2128 81.379 67.654 82.75 69.4025 82.75H78.4725C80.221 82.75 81.6622 81.379 81.7496 79.6327L83.609 42.4452C83.7026 40.5709 82.2084 39 80.3318 39H67.5432C65.6666 39 64.1724 40.5709 64.266 42.4452Z" fill="white" />
                        </svg>
                    </div>
                    <h4>{!! $val['title'] !!}</h4>
                    <p>
                    {!! $val['desc'] !!}
                    </p>
                    <button class="btn dismiss-btn dismiss-btn_news px-5 mt-5"  onclick="dismissModal()">@lang('lang.dismiss')</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- News Modal End -->
<script>
    $(document).ready(function() {
        var announcementId = '{{$val['id']}}';
        var previousTitle = localStorage.getItem('previousTitle_' + announcementId);
        var previousDescription = localStorage.getItem('previousDescription_' + announcementId);

        var currentTitle = '{{ addslashes($val['title']) }}';
        var currentDescription = `{!! addslashes($val['desc']) !!}`;

        var shouldShowModal = previousTitle !== currentTitle || previousDescription !== currentDescription;

        if (shouldShowModal) {
            $('#newsmodal').modal('show');
        }

        function dismissModal() {
            $('#newsmodal').modal('hide');

            localStorage.setItem('previousTitle_' + announcementId, currentTitle);
            localStorage.setItem('previousDescription_' + announcementId, currentDescription);
        }

        $('.dismiss-btn_news').on('click', dismissModal);
    });
</script>
@endif

@if($val['type'] == "Mandatory") 

<!-- Mandatory Modal -->
<div class="modal fade" id="mandatorymodal" tabindex="-1" role="dialog" aria-labelledby="mandatorymodalLabel" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog mt-5 pt-5" role="document">
        <div class="modal-content bg-white p-5">
            <div class="modal-body mt-5">
                <div class="alert-div text-center mt-5">
                    <div class="alert-icon">
                        <svg width="148" height="148" viewBox="0 0 148 148" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="74" cy="74" r="74" fill="white" />
                            <circle cx="74" cy="74" r="74" fill="white" />
                            <circle cx="74" cy="74" r="66" fill="#D11A2A" />
                            <path d="M109 77.8889H83.3333L101.611 96.1667L96.1667 101.611L77.8889 83.3333V109H70.1111V82.9444L51.8333 101.222L46.3889 95.7778L63.8889 77.8889H39V70.1111H64.6667L46.3889 51.8333L51.8333 46.3889L70.1111 64.6667V39H77.8889V63.8889L95.7778 46L101.222 51.8333L82.9444 70.1111H109V77.8889Z" fill="white" />
                        </svg>
                    </div>
                    <h4>{{$val['title']}}</h4>
                    <p>
                    {!! $val['desc'] !!}
                    </p>
                    <button class="btn dismiss-btn dismiss-btn_mond px-5 mt-5"  onclick="dismissModal()">@lang('lang.dismiss')</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Mandatory Modal End -->

<script>
$(document).ready(function() {
    $('#mandatorymodal').modal({
        backdrop: 'static',
        keyboard: false
    });

    var announcementId = '{{ $val['id'] }}';
    var previousTitle = localStorage.getItem('previousTitle_' + announcementId);
    var previousDescription = localStorage.getItem('previousDescription_' + announcementId);

    var currentTitle = '{{ addslashes($val['title']) }}';
    var currentDescription = `{!! addslashes($val['desc']) !!}`;

    var shouldShowModal = previousTitle !== currentTitle || previousDescription !== currentDescription;

    if (shouldShowModal) {
        $('#mandatorymodal').modal('show');
    }

    function dismissModal() {
        $('#mandatorymodal').modal('hide');

        localStorage.setItem('previousTitle_' + announcementId, currentTitle);
        localStorage.setItem('previousDescription_' + announcementId, currentDescription);
    }

    $('.dismiss-btn_mond').on('click', dismissModal);
});

</script>


@endif

@if($val['type'] == "Maintenance")

<!-- Maintenance Modal -->
<div class="modal fade" id="maintenancemodal" tabindex="-1" role="dialog" aria-labelledby="maintenancemodalLabel" aria-hidden="true">
    <div class="modal-dialog mt-5 pt-5" role="document">
        <div class="modal-content bg-white p-5">
            <div class="modal-body mt-5">
                <div class="alert-div text-center mt-5">
                    <div class="alert-icon">
                        <svg width="148" height="148" viewBox="0 0 148 148" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="74" cy="74" r="74" fill="white" />
                            <circle cx="74" cy="74" r="74" fill="white" />
                            <circle cx="74" cy="74" r="66" fill="#81D4FE" />
                            <path d="M42.535 39L39 42.535L45.2273 53.3042L49.2658 52.7119L73.9165 77.3654L71.8138 79.3846C70.7369 80.4615 70.7369 82.0931 71.8138 83.17L72.9069 84.2658C73.9838 85.3427 75.6315 85.3427 76.4392 84.2658L79.6377 87.4615C79.3685 89.0769 79.6377 90.9965 80.9838 92.3427L95.5385 106.814C98.5 109.775 103.346 109.775 106.308 106.814C109.808 103.583 109.775 98.7531 106.814 95.7915L92.3427 81.2342C90.9965 79.8881 89.0769 79.3496 87.4615 79.8881L83.9265 76.6923C84.7342 75.6154 84.7342 73.9677 83.9265 73.1573L82.9169 72.1504C82.6722 71.8952 82.3783 71.6921 82.0531 71.5533C81.7278 71.4146 81.3778 71.3431 81.0242 71.3431C80.6706 71.3431 80.3207 71.4146 79.9954 71.5533C79.6701 71.6921 79.3763 71.8952 79.1315 72.1504L77.3654 73.9165L52.7146 49.2658L53.3015 45.2273L42.535 39ZM95.035 39.0835C89.7231 38.6419 82.68 42.1635 79.3846 45.2246C75.33 49.2792 75.9923 54.5804 79.215 59.6985L73.4965 65.4196L77.535 69.9615C79.6888 68.0769 82.8658 68.0769 85.0196 69.9615L86.1154 71.0546L86.3685 71.3077L88.7242 68.9519C93.5919 71.8138 98.6588 72.2258 102.522 68.3623C106.292 64.8623 110.378 56.2308 108.494 51.1154L100.923 58.9392C99.8462 60.0162 98.2146 60.0162 97.1377 58.9392L89.3112 51.1154C89.0559 50.8706 88.8528 50.5768 88.7141 50.2515C88.5754 49.9263 88.5038 49.5763 88.5038 49.2227C88.5038 48.8691 88.5754 48.5191 88.7141 48.1939C88.8528 47.8686 89.0559 47.5748 89.3112 47.33L97.1404 39.5062C96.4673 39.2692 95.7942 39.1481 95.035 39.0835ZM65.4196 72.6538L55.6573 82.4135C54.6083 82.1804 53.5361 82.0675 52.4615 82.0769C44.9231 82.0769 39 88 39 95.5385C39 103.077 44.9231 109 52.4615 109C60 109 65.9231 103.077 65.9231 95.5385C65.9231 94.1573 65.705 92.83 65.3335 91.5835L71.0546 85.8623L70.2146 84.7692C68.0608 82.6154 68.0769 79.3523 69.9615 77.1958L65.4196 72.6538ZM86.285 84.9388C86.6215 84.9388 86.9392 85.0035 87.2085 85.2754L103.112 101.176C103.65 101.715 103.65 102.571 103.112 103.109C102.573 103.648 101.712 103.648 101.173 103.109L85.2754 87.2085C84.7369 86.67 84.7369 85.8138 85.2754 85.2754C85.5446 85.0062 85.9485 84.9388 86.285 84.9388ZM54.3138 88.5519L59.4454 93.6862L57.5931 100.667L50.6119 102.52L45.4777 97.3854L47.33 90.4042L54.3138 88.5519Z" fill="white" />
                        </svg>
                    </div>
                    <h4> {{$val['title']}} </h4>
                    <p>
                    {!! $val['desc'] !!}
                    </p>
                    <button class="btn dismiss-btn dismiss-btn_maint px-5 mt-5"  onclick="dismissModal()">@lang('lang.dismiss')</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Maintenance Modal End -->

<script>
    $(document).ready(function() {
        var announcementId = '{{$val['id']}}';
        var previousTitle = localStorage.getItem('previousTitle_' + announcementId);
        var previousDescription = localStorage.getItem('previousDescription_' + announcementId);

        var currentTitle = '{{ addslashes($val['title']) }}';
        var currentDescription = `{!! addslashes($val['desc']) !!}`;

        var shouldShowModal = previousTitle !== currentTitle || previousDescription !== currentDescription;

        if (shouldShowModal) {
            $('#maintenancemodal').modal('show');
        }

        function dismissModal() {
            $('#maintenancemodal').modal('hide');

            localStorage.setItem('previousTitle_' + announcementId, currentTitle);
            localStorage.setItem('previousDescription_' + announcementId, currentDescription);
        }

        $('.dismiss-btn_maint').on('click', dismissModal);
    });

</script>
@endif

@if($val['type'] == "Warning")

<!-- Warning Modal -->
<div class="modal fade" id="warningmodal" tabindex="-1" role="dialog" aria-labelledby="warningmodalLabel" aria-hidden="true">
    <div class="modal-dialog mt-5 pt-5" role="document">
        <div class="modal-content bg-white p-5">
            <div class="modal-body mt-5">
                <div class="alert-div text-center mt-5">
                    <div class="alert-icon">
                        <svg width="148" viewBox="0 0 148 148" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="74" cy="74" r="74" fill="white" />
                            <circle cx="74" cy="74" r="74" fill="white" />
                            <circle cx="74" cy="74" r="66" fill="#D11A2A" />
                            <path d="M102.021 105.669H45.9783C40.6198 105.669 37.2667 99.8733 39.9377 95.2281L67.9594 46.4947C70.6386 41.8351 77.3613 41.8351 80.0405 46.4946L108.062 95.2281C110.733 99.8733 107.38 105.669 102.021 105.669Z" stroke="white" stroke-width="6" stroke-linecap="round" />
                            <path d="M74 63.8616V77.7976" stroke="white" stroke-width="6" stroke-linecap="round" />
                            <path d="M74 91.7679L74.0348 91.7292" stroke="white" stroke-width="6" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <h4>{{$val['title']}}</h4>
                    <p>
                    {!! $val['desc'] !!}
                    </p>
                    <button class="btn dismiss-btn dismiss-btn_warn px-5 mt-5"  onclick="dismissModal()">@lang('lang.dismiss')</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Warning Modal End -->
<script>
    $(document).ready(function() {
        var announcementId = '{{$val['id']}}';
        var previousTitle = localStorage.getItem('previousTitle_' + announcementId);
        var previousDescription = localStorage.getItem('previousDescription_' + announcementId);

        var currentTitle = '{{ addslashes($val['title']) }}';
        var currentDescription = `{!! addslashes($val['desc']) !!}`;

        var shouldShowModal = previousTitle !== currentTitle || previousDescription !== currentDescription;

        if (shouldShowModal) {
            $('#warningmodal').modal('show');
        }

        function dismissModal() {
            $('#warningmodal').modal('hide');

            localStorage.setItem('previousTitle_' + announcementId, currentTitle);
            localStorage.setItem('previousDescription_' + announcementId, currentDescription);
        }

        $('.dismiss-btn_warn').on('click', dismissModal);
    });

</script>

@endif
@endforeach
<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper py-0 px-3">
        <div class="bg-white p-3 mb-3" style="border-radius: 20px;">
            <div class="page-header">
                <h3 class="page-title">
                    <span class="page-title-icon bg-gradient-primary text-white me-2 py-2">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M2.54 0H5.92C7.33 0 8.46 1.15 8.46 2.561V5.97C8.46 7.39 7.33 8.53 5.92 8.53H2.54C1.14 8.53 0 7.39 0 5.97V2.561C0 1.15 1.14 0 2.54 0ZM2.54 11.4697H5.92C7.33 11.4697 8.46 12.6107 8.46 14.0307V17.4397C8.46 18.8497 7.33 19.9997 5.92 19.9997H2.54C1.14 19.9997 0 18.8497 0 17.4397V14.0307C0 12.6107 1.14 11.4697 2.54 11.4697ZM17.4601 0H14.0801C12.6701 0 11.5401 1.15 11.5401 2.561V5.97C11.5401 7.39 12.6701 8.53 14.0801 8.53H17.4601C18.8601 8.53 20.0001 7.39 20.0001 5.97V2.561C20.0001 1.15 18.8601 0 17.4601 0ZM14.0801 11.4697H17.4601C18.8601 11.4697 20.0001 12.6107 20.0001 14.0307V17.4397C20.0001 18.8497 18.8601 19.9997 17.4601 19.9997H14.0801C12.6701 19.9997 11.5401 18.8497 11.5401 17.4397V14.0307C11.5401 12.6107 12.6701 11.4697 14.0801 11.4697Z" fill="white" />
                        </svg>
                    </span> @lang('dashboard')
                </h3>
            </div>
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-lg-3">
                        <div class=" bg-white p-3" style="border-radius: 20px; box-shadow: 0px 0px 4px 1px rgba(0,0,0,0.3);
-webkit-box-shadow: 0px 0px 4px 1px rgba(0,0,0,0.3);
-moz-box-shadow: 0px 0px 4px 1px rgba(0,0,0,0.3);">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h6 style="color: #452C88;">@lang('lang.active_drivers')</h6>
                                    <h5 style="color: #E45F00;">20</h5>
                                </div>
                                <div>
                                    <svg width="70" height="71" viewBox="0 0 70 71" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="35" cy="35.6432" r="35" fill="#452C88" fill-opacity="0.3" />
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M27.7707 48.0805H34.6138V41.2375C31.0208 41.6347 28.168 44.4875 27.7707 48.0805ZM36.3364 41.2375V48.0805H43.1794C42.7822 44.4875 39.9293 41.6347 36.3364 41.2375ZM43.1795 49.8031C43.0592 50.8924 42.7135 51.9125 42.1902 52.817L43.6813 53.6795C44.4879 52.2852 44.9493 50.666 44.9493 48.9418C44.9493 43.7094 40.7075 39.4676 35.4751 39.4676C30.2426 39.4676 26.0009 43.7094 26.0009 48.9418C26.0009 50.666 26.4622 52.2852 27.2688 53.6795L28.7599 52.817C28.2367 51.9125 27.891 50.8924 27.7706 49.8031H43.1795Z" fill="#452C88" />
                                        <path d="M38.059 48.9417C38.059 50.3687 36.9022 51.5255 35.4751 51.5255C34.048 51.5255 32.8912 50.3687 32.8912 48.9417C32.8912 47.5146 34.048 46.3578 35.4751 46.3578C36.9022 46.3578 38.059 47.5146 38.059 48.9417Z" fill="#452C88" />
                                        <path d="M42.0075 46.2243C41.7612 45.3054 42.3066 44.3609 43.2255 44.1146L44.8895 43.6688C45.8084 43.4226 46.753 43.9679 46.9992 44.8868L47.8909 48.2146C48.1371 49.1336 47.5918 50.0781 46.6729 50.3244L45.0089 50.7703C44.09 51.0164 43.1454 50.4711 42.8992 49.5521L42.0075 46.2243Z" fill="#452C88" />
                                        <path d="M23.9508 44.8861C24.197 43.9671 25.1416 43.4218 26.0605 43.668L27.7245 44.1139C28.6434 44.3601 29.1887 45.3046 28.9425 46.2236L28.0508 49.5513C27.8046 50.4703 26.86 51.0156 25.9411 50.7695L24.2772 50.3236C23.3582 50.0773 22.8129 49.1328 23.0591 48.2138L23.9508 44.8861Z" fill="#452C88" />
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M27.7234 29.1319V26.548H29.446V29.1319C29.446 32.4617 32.1453 35.161 35.475 35.161C38.8048 35.161 41.5041 32.4617 41.5041 29.1319V26.548H43.2267V29.1319C43.2267 33.4131 39.7562 36.8835 35.475 36.8835C31.1939 36.8835 27.7234 33.4131 27.7234 29.1319Z" fill="#452C88" />
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M26.685 23.9642H44.3028C44.3647 23.8062 44.4316 23.6199 44.4981 23.4066L44.5086 23.3733C44.7409 22.6298 44.9493 21.9626 44.9493 20.6024C44.9493 19.9127 44.5012 19.3319 43.908 18.8727C43.307 18.4074 42.4862 18.0091 41.5719 17.6844C39.741 17.0341 37.4318 16.6432 35.4751 16.6432C33.5183 16.6432 31.2092 17.0341 29.3782 17.6844C28.464 18.0091 27.6432 18.4074 27.0422 18.8727C26.449 19.3319 26.0009 19.9127 26.0009 20.6024C26.0009 21.8651 26.212 22.5306 26.429 23.2145C26.4492 23.2782 26.4695 23.342 26.4896 23.4065C26.5562 23.6198 26.6231 23.8061 26.685 23.9642ZM32.0299 21.3804C32.0299 20.9047 32.4155 20.5191 32.8912 20.5191H38.059C38.5346 20.5191 38.9202 20.9047 38.9202 21.3804C38.9202 21.856 38.5346 22.2417 38.059 22.2417H32.8912C32.4155 22.2417 32.0299 21.856 32.0299 21.3804Z" fill="#452C88" />
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M26.8806 26.0404C26.9197 25.8356 27.1072 25.6868 27.3261 25.6868H43.6241C43.843 25.6868 44.0305 25.8356 44.0696 26.0404L44.0698 26.0414L44.07 26.0425L44.0704 26.045L44.0715 26.0508L44.074 26.0665C44.0758 26.0787 44.0779 26.0942 44.0798 26.1129C44.0838 26.1504 44.0874 26.2007 44.0879 26.2619C44.089 26.3845 44.0777 26.5522 44.0313 26.7497C43.9374 27.1489 43.7033 27.6564 43.1671 28.1495C42.1042 29.1273 39.9204 29.9932 35.4751 29.9932C31.0298 29.9932 28.846 29.1273 27.7831 28.1495C27.2469 27.6564 27.0128 27.1489 26.9189 26.7497C26.8725 26.5522 26.8612 26.3845 26.8622 26.2619C26.8628 26.2007 26.8664 26.1504 26.8703 26.1129C26.8723 26.0942 26.8744 26.0787 26.8762 26.0665L26.8787 26.0508L26.8797 26.045L26.8802 26.0425L26.8804 26.0414L26.8806 26.0404Z" fill="#452C88" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class=" bg-white p-3" style="border-radius: 20px; box-shadow: 0px 0px 4px 1px rgba(0,0,0,0.3);
-webkit-box-shadow: 0px 0px 4px 1px rgba(0,0,0,0.3);
-moz-box-shadow: 0px 0px 4px 1px rgba(0,0,0,0.3);">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h6 class="mb-0" style="color: #452C88;">@lang('lang.active_routes')</h6>
                                    <h5 class="mb-0" style="color: #E45F00;">10</h5>
                                </div>
                                <div>
                                    <svg width="70" height="70" viewBox="0 0 70 70" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="35" cy="35" r="35" fill="#452C88" fill-opacity="0.3" />
                                        <path d="M40.4768 49.4998H25.8749C23.4617 49.4998 21.5 47.538 21.5 45.1248C21.5 42.7116 23.4617 40.7498 25.8749 40.7498H38.1249C41.5023 40.7498 44.2498 38.0024 44.2498 34.6249C44.2498 31.2474 41.5023 28.4999 38.1249 28.4999H29.6182C28.9339 29.8492 28.0992 31.0252 27.2487 31.9999H38.1249C39.5721 31.9999 40.7498 33.1776 40.7498 34.6249C40.7498 36.0721 39.5721 37.2499 38.1249 37.2499H25.8749C21.5332 37.2499 18 40.7831 18 45.1248C18 49.4665 21.5332 52.9997 25.8749 52.9997H42.6626C41.8628 51.9882 41.0998 50.8175 40.4768 49.4998ZM23.25 18C20.3555 18 18 20.3555 18 23.25C18 28.8289 23.25 31.9999 23.25 31.9999C23.25 31.9999 28.4999 28.8272 28.4999 23.25C28.4999 20.3555 26.1444 18 23.25 18ZM23.25 25.8749C21.801 25.8749 20.625 24.699 20.625 23.25C20.625 21.801 21.801 20.625 23.25 20.625C24.699 20.625 25.8749 21.801 25.8749 23.25C25.8749 24.699 24.699 25.8749 23.25 25.8749Z" fill="#452C88" />
                                        <path d="M47.7502 39.0001C44.8557 39.0001 42.5002 41.3555 42.5002 44.25C42.5002 49.829 47.7502 53 47.7502 53C47.7502 53 53.0002 49.8272 53.0002 44.25C53.0002 41.3555 50.6447 39.0001 47.7502 39.0001ZM47.7502 46.875C46.3012 46.875 45.1252 45.699 45.1252 44.25C45.1252 42.801 46.3012 41.625 47.7502 41.625C49.1992 41.625 50.3752 42.801 50.3752 44.25C50.3752 45.699 49.1992 46.875 47.7502 46.875Z" fill="#452C88" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class=" bg-white p-3" style="border-radius: 20px; box-shadow: 0px 0px 4px 1px rgba(0,0,0,0.3);
-webkit-box-shadow: 0px 0px 4px 1px rgba(0,0,0,0.3);
-moz-box-shadow: 0px 0px 4px 1px rgba(0,0,0,0.3);">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h6 class="mb-0" style="color: #452C88;">@lang('lang.completed_trips')</h6>
                                    <h5 class="mb-0" style="color: #E45F00;">500</h5>
                                </div>
                                <div>
                                    <svg width="70" height="70" viewBox="0 0 70 70" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="35" cy="35" r="35" fill="#452C88" fill-opacity="0.3" />
                                        <path d="M45.3636 46.0455C46.7973 46.0455 47.9545 44.8882 47.9545 43.4546C47.9545 42.0209 46.7973 40.8636 45.3636 40.8636C43.93 40.8636 42.7727 42.0209 42.7727 43.4546C42.7727 44.8882 43.93 46.0455 45.3636 46.0455ZM47.9545 30.5H43.6364V34.8182H51.34L47.9545 30.5ZM24.6364 46.0455C26.07 46.0455 27.2273 44.8882 27.2273 43.4546C27.2273 42.0209 26.07 40.8636 24.6364 40.8636C23.2027 40.8636 22.0455 42.0209 22.0455 43.4546C22.0455 44.8882 23.2027 46.0455 24.6364 46.0455ZM48.8182 27.9091L54 34.8182V43.4546H50.5455C50.5455 46.3218 48.2309 48.6364 45.3636 48.6364C42.4964 48.6364 40.1818 46.3218 40.1818 43.4546H29.8182C29.8182 46.3218 27.5036 48.6364 24.6364 48.6364C21.7691 48.6364 19.4545 46.3218 19.4545 43.4546H16V24.4545C16 22.5373 17.5373 21 19.4545 21H43.6364V27.9091H48.8182ZM19.4545 24.4545V40H20.7673C21.7173 38.9464 23.0991 38.2727 24.6364 38.2727C26.1736 38.2727 27.5555 38.9464 28.5055 40H40.1818V24.4545H19.4545ZM22.9091 32.2273L25.5 29.6364L28.0909 32.2273L34.1364 26.1818L36.7273 28.7727L28.0909 37.4091L22.9091 32.2273Z" fill="#452C88" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class=" bg-white p-3" style="border-radius: 20px; box-shadow: 0px 0px 4px 1px rgba(0,0,0,0.3);
-webkit-box-shadow: 0px 0px 4px 1px rgba(0,0,0,0.3);
-moz-box-shadow: 0px 0px 4px 1px rgba(0,0,0,0.3);">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h6 class="mb-0" style="color: #452C88;">@lang('lang.days_left')</h6>
                                    <h5 class="mb-0" style="color: #E45F00;">500</h5>
                                    <p class="mb-0" style="font-size: 12px;">@lang('lnag.expiry_date'): <span style="color: #452C88;">5/15/2023</span></p>
                                </div>
                                <div>
                                    <svg width="70" height="70" viewBox="0 0 70 70" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="35" cy="35" r="35" fill="#452C88" fill-opacity="0.3" />
                                        <path d="M35.5 18C32.0388 18 28.6554 19.0264 25.7775 20.9493C22.8997 22.8722 20.6566 25.6053 19.3321 28.803C18.0076 32.0007 17.661 35.5194 18.3363 38.9141C19.0115 42.3087 20.6782 45.4269 23.1256 47.8744C25.5731 50.3218 28.6913 51.9885 32.0859 52.6637C35.4806 53.339 38.9993 52.9924 42.197 51.6679C45.3947 50.3434 48.1278 48.1003 50.0507 45.2225C51.9736 42.3446 53 38.9612 53 35.5C53 33.2019 52.5474 30.9262 51.6679 28.803C50.7884 26.6798 49.4994 24.7507 47.8744 23.1256C46.2493 21.5006 44.3202 20.2116 42.197 19.3321C40.0738 18.4527 37.7981 18 35.5 18ZM35.5 49.5C32.7311 49.5 30.0243 48.6789 27.722 47.1406C25.4197 45.6022 23.6253 43.4157 22.5657 40.8576C21.5061 38.2994 21.2288 35.4845 21.769 32.7687C22.3092 30.053 23.6426 27.5584 25.6005 25.6005C27.5584 23.6426 30.053 22.3092 32.7687 21.769C35.4845 21.2288 38.2994 21.5061 40.8576 22.5657C43.4157 23.6253 45.6022 25.4197 47.1406 27.722C48.6789 30.0243 49.5 32.7311 49.5 35.5C49.5 39.213 48.025 42.774 45.3995 45.3995C42.774 48.025 39.213 49.5 35.5 49.5Z" fill="#452C88" />
                                        <path d="M42.5 33.75H37.25V28.5C37.25 28.0359 37.0656 27.5908 36.7374 27.2626C36.4092 26.9344 35.9641 26.75 35.5 26.75C35.0359 26.75 34.5908 26.9344 34.2626 27.2626C33.9344 27.5908 33.75 28.0359 33.75 28.5V35.5C33.75 35.9641 33.9344 36.4092 34.2626 36.7374C34.5908 37.0656 35.0359 37.25 35.5 37.25H42.5C42.9641 37.25 43.4092 37.0656 43.7374 36.7374C44.0656 36.4092 44.25 35.9641 44.25 35.5C44.25 35.0359 44.0656 34.5908 43.7374 34.2626C43.4092 33.9344 42.9641 33.75 42.5 33.75Z" fill="#452C88" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-lg-8 col-md-8">
                        <div class="row">
                            <div class="col-lg-5 col-md-5">
                                <div>
                                    <span class="text-muted font-weight-semibold">@lang('lang.show'):</span>
                                    <b>03-09, December 2023</b>
                                    <span style="border: 1px solid #ACADAE; cursor: pointer ;padding: 0px 6px;">
                                        <i class="fa fa-caret-down"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-evenly" style="margin-top: 30px !important;">
                            <div class="col-lg-4 col-md-4">
                                <div class="prgrss-chart" style="box-shadow: 0px 0px 3px 0.75px rgba(0,0,0,0.25); 
            -webkit-box-shadow: 0px 0px 3px 0.75px rgba(0,0,0,0.25);
            -moz-box-shadow: 0px 0px 3px 0.75px rgba(0,0,0,0.25);">
                                    <p class="progress_para pt-2">@lang('lang.active_trips') </p>
                                    <canvas id="myChart2" style="height: auto !important;"></canvas>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="prgrss-chart" style="box-shadow: 0px 0px 3px 0.75px rgba(0,0,0,0.25); 
            -webkit-box-shadow: 0px 0px 3px 0.75px rgba(0,0,0,0.25);
            -moz-box-shadow: 0px 0px 3px 0.75px rgba(0,0,0,0.25);">
                                    <p class="progress_para pt-2">@lang('lang.completed_trips') </p>
                                    <canvas id="myChart" style="height: auto !important;"></canvas>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="prgrss-chart" style="box-shadow: 0px 0px 3px 0.75px rgba(0,0,0,0.25); 
            -webkit-box-shadow: 0px 0px 3px 0.75px rgba(0,0,0,0.25);
            -moz-box-shadow: 0px 0px 3px 0.75px rgba(0,0,0,0.25);">
                                    <p class="progress_para pt-2">@lang('lang.pending_trips') </p>
                                    <canvas id="myChart3" style="height: auto !important;"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4 text-right">
                            <div class="offset-lg-7 col-lg-5 col-md-5">
                                <div>
                                    <span class="text-muted font-weight-semibold">@lang('lang.previous_month'):</span>
                                    <b>Feburary,2023</b>
                                    <span style="border: 1px solid #ACADAE; cursor: pointer ;padding: 0px 6px;">
                                        <i class="fa fa-caret-down"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4 justify-content-center">
                            <div class="col-lg-12">
                                <canvas id="Chart-Line" width="800" height="400"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="row">
                            <div class="col-lg-8">
                                <form action="" method="#">
                                    <select name="" class="form-select" id="">
                                        <option disabled selected value="null">@lang('lang.filter_by_clients')</option>
                                        <option value=""><i class="fa fa-edit"></i> Earth</option>
                                        <option value="">B</option>
                                        <option value="">C</option>
                                        <option value="">D</option>
                                    </select>
                                </form>
                            </div>
                            <div class="col-lg-4">
                                <span class="">
                                    <a class="text-muted font-weight-semibold" href="#">@lang('lang.show_more')..</a>
                                </span>
                            </div>
                        </div>
                        @include('aside')
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- content-wrapper ends -->

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="assets/js/top_divs_chart.js"></script>

    @endsection