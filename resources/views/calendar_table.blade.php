<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
</head>

<body>

    <table id="example" class="display" style="width:100%">
        <thead class="text-secondary" style="background-color: #E9EAEF;">
            <tr>
                <th>@lang('lang.trip_title')</th>
                <th>@lang('lang.trip_date')</th>
                <th>@lang('lang.start_point')</th>
                <th>@lang('lang.end_point')</th>
                <th>@lang('lang.name')</th>
                <th>@lang('lang.status')</th>
                <th>@lang('lang.action')</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Lorem Ipsum</td>
                <td>Sep 23, 2023</td>
                <td>Town, City, Country</td>
                <td>Town, City, Country</td>
                <td><img src="assets/images/scooble.png" style="width: 49px; height: 49px;" alt="text"> @lang('lang.driver_name')</td>
                <td><span class="badge" style="background-color: #31A6132E; color: #31A613;">@lang('lang.active')</span></td>
                <td>
                    <button class="btn p-0">
                        <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle opacity="0.1" cx="18" cy="18" r="18" fill="#233A85" />
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M16.1634 23.6195L22.3139 15.6658C22.6482 15.2368 22.767 14.741 22.6556 14.236C22.559 13.777 22.2768 13.3406 21.8534 13.0095L20.8208 12.1893C19.922 11.4744 18.8078 11.5497 18.169 12.3699L17.4782 13.2661C17.3891 13.3782 17.4114 13.5438 17.5228 13.6341C17.5228 13.6341 19.2684 15.0337 19.3055 15.0638C19.4244 15.1766 19.5135 15.3271 19.5358 15.5077C19.5729 15.8614 19.3278 16.1925 18.9638 16.2376C18.793 16.2602 18.6296 16.2075 18.5107 16.1097L16.676 14.6499C16.5868 14.5829 16.4531 14.5972 16.3788 14.6875L12.0185 20.3311C11.7363 20.6848 11.6397 21.1438 11.7363 21.5878L12.2934 24.0032C12.3231 24.1312 12.4345 24.2215 12.5682 24.2215L15.0195 24.1914C15.4652 24.1838 15.8812 23.9807 16.1634 23.6195ZM19.5955 22.8673H23.5925C23.9825 22.8673 24.2997 23.1886 24.2997 23.5837C24.2997 23.9795 23.9825 24.3 23.5925 24.3H19.5955C19.2055 24.3 18.8883 23.9795 18.8883 23.5837C18.8883 23.1886 19.2055 22.8673 19.5955 22.8673Z" fill="#233A85" />
                        </svg>
                    </button>
                    <button class="btn p-0" data-toggle="modal" data-target="#deleteroute">
                        <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle opacity="0.1" cx="18" cy="18" r="18" fill="#DF6F79" />
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M23.4909 13.743C23.7359 13.743 23.94 13.9465 23.94 14.2054V14.4448C23.94 14.6975 23.7359 14.9072 23.4909 14.9072H13.0497C12.804 14.9072 12.6 14.6975 12.6 14.4448V14.2054C12.6 13.9465 12.804 13.743 13.0497 13.743H14.8866C15.2597 13.743 15.5845 13.4778 15.6684 13.1036L15.7646 12.6739C15.9141 12.0887 16.4061 11.7 16.9692 11.7H19.5708C20.1277 11.7 20.6252 12.0887 20.7692 12.6431L20.8721 13.1029C20.9555 13.4778 21.2802 13.743 21.654 13.743H23.4909ZM22.5577 22.4943C22.7495 20.707 23.0852 16.4609 23.0852 16.418C23.0975 16.2883 23.0552 16.1654 22.9713 16.0665C22.8812 15.9739 22.7672 15.9191 22.6416 15.9191H13.9032C13.777 15.9191 13.6569 15.9739 13.5735 16.0665C13.489 16.1654 13.4473 16.2883 13.4534 16.418C13.4546 16.4259 13.4666 16.5755 13.4868 16.8255C13.5762 17.9364 13.8255 21.0303 13.9865 22.4943C14.1005 23.5729 14.8081 24.2507 15.8332 24.2753C16.6242 24.2936 17.4391 24.2999 18.2724 24.2999C19.0573 24.2999 19.8544 24.2936 20.6699 24.2753C21.7305 24.257 22.4376 23.5911 22.5577 22.4943Z" fill="#D11A2A" />
                        </svg>
                    </button>
                    <button class="btn p-0">
                        <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle opacity="0.1" cx="18" cy="18" r="18" fill="#452C88" />
                            <path d="M23.6234 12.7663L22.2337 11.3766C21.9926 11.1355 21.6656 11 21.3246 11H16.7143C16.0042 11 15.4286 11.5756 15.4286 12.2857V13.5714H13.2857C12.5756 13.5714 12 14.1471 12 14.8571V23.4286C12 24.1387 12.5756 24.7143 13.2857 24.7143H19.2857C19.9958 24.7143 20.5714 24.1387 20.5714 23.4286V22.1429H22.7143C23.4244 22.1429 24 21.5672 24 20.8571V13.6754C24 13.3344 23.8645 13.0074 23.6234 12.7663ZM19.125 23.4286H13.4464C13.4038 23.4286 13.3629 23.4116 13.3328 23.3815C13.3026 23.3514 13.2857 23.3105 13.2857 23.2679V15.0179C13.2857 14.9752 13.3026 14.9344 13.3328 14.9042C13.3629 14.8741 13.4038 14.8571 13.4464 14.8571H15.4286V20.8571C15.4286 21.5672 16.0042 22.1429 16.7143 22.1429H19.2857V23.2679C19.2857 23.3105 19.2688 23.3514 19.2386 23.3815C19.2085 23.4116 19.1676 23.4286 19.125 23.4286ZM22.5536 20.8571H16.875C16.8324 20.8571 16.7915 20.8402 16.7614 20.8101C16.7312 20.7799 16.7143 20.7391 16.7143 20.6964V12.4464C16.7143 12.4038 16.7312 12.3629 16.7614 12.3328C16.7915 12.3026 16.8324 12.2857 16.875 12.2857H19.7143V14.6429C19.7143 14.9979 20.0021 15.2857 20.3571 15.2857H22.7143V20.6964C22.7143 20.7391 22.6974 20.7799 22.6672 20.8101C22.6371 20.8402 22.5962 20.8571 22.5536 20.8571ZM22.7143 14H21V12.2857H21.258C21.3006 12.2857 21.3415 12.3026 21.3717 12.3328L22.6672 13.6283C22.6821 13.6433 22.694 13.661 22.7021 13.6805C22.7101 13.7 22.7143 13.7209 22.7143 13.742V14Z" fill="#452C88" />
                        </svg>


                    </button>
                    <button class="btn p-0">
                        <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle opacity="0.1" cx="18" cy="18" r="18" fill="#ACADAE" />
                            <path d="M17.7167 13C13.5 13 11 18 11 18C11 18 13.5 23 17.7167 23C21.8333 23 24.3333 18 24.3333 18C24.3333 18 21.8333 13 17.7167 13ZM17.6667 14.6667C19.5167 14.6667 21 16.1667 21 18C21 19.85 19.5167 21.3333 17.6667 21.3333C15.8333 21.3333 14.3333 19.85 14.3333 18C14.3333 16.1667 15.8333 14.6667 17.6667 14.6667ZM17.6667 16.3333C16.75 16.3333 16 17.0833 16 18C16 18.9167 16.75 19.6667 17.6667 19.6667C18.5833 19.6667 19.3333 18.9167 19.3333 18C19.3333 17.8333 19.2667 17.6833 19.2333 17.5333C19.1 17.8 18.8333 18 18.5 18C18.0333 18 17.6667 17.6333 17.6667 17.1667C17.6667 16.8333 17.8667 16.5667 18.1333 16.4333C17.9833 16.3833 17.8333 16.3333 17.6667 16.3333Z" fill="black" />
                        </svg>

                    </button>
                </td>
            </tr>
            <tr>
                <td>Lorem Ipsum</td>
                <td>Sep 23, 2023</td>
                <td>Town, City, Country</td>
                <td>Town, City, Country</td>
                <td><img src="assets/images/scooble.png" style="width: 49px; height: 49px;" alt="text"> Company Name</td>
                <td><span class="badge" style="background-color: #F5222D30; color: #F5222D;">@lang('lang.suspend')</span></td>
                <td>
                    <button class="btn p-0">
                        <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle opacity="0.1" cx="18" cy="18" r="18" fill="#233A85" />
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M16.1634 23.6195L22.3139 15.6658C22.6482 15.2368 22.767 14.741 22.6556 14.236C22.559 13.777 22.2768 13.3406 21.8534 13.0095L20.8208 12.1893C19.922 11.4744 18.8078 11.5497 18.169 12.3699L17.4782 13.2661C17.3891 13.3782 17.4114 13.5438 17.5228 13.6341C17.5228 13.6341 19.2684 15.0337 19.3055 15.0638C19.4244 15.1766 19.5135 15.3271 19.5358 15.5077C19.5729 15.8614 19.3278 16.1925 18.9638 16.2376C18.793 16.2602 18.6296 16.2075 18.5107 16.1097L16.676 14.6499C16.5868 14.5829 16.4531 14.5972 16.3788 14.6875L12.0185 20.3311C11.7363 20.6848 11.6397 21.1438 11.7363 21.5878L12.2934 24.0032C12.3231 24.1312 12.4345 24.2215 12.5682 24.2215L15.0195 24.1914C15.4652 24.1838 15.8812 23.9807 16.1634 23.6195ZM19.5955 22.8673H23.5925C23.9825 22.8673 24.2997 23.1886 24.2997 23.5837C24.2997 23.9795 23.9825 24.3 23.5925 24.3H19.5955C19.2055 24.3 18.8883 23.9795 18.8883 23.5837C18.8883 23.1886 19.2055 22.8673 19.5955 22.8673Z" fill="#233A85" />
                        </svg>
                    </button>
                    <button class="btn p-0" data-toggle="modal" data-target="#deleteroute">
                        <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle opacity="0.1" cx="18" cy="18" r="18" fill="#DF6F79" />
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M23.4909 13.743C23.7359 13.743 23.94 13.9465 23.94 14.2054V14.4448C23.94 14.6975 23.7359 14.9072 23.4909 14.9072H13.0497C12.804 14.9072 12.6 14.6975 12.6 14.4448V14.2054C12.6 13.9465 12.804 13.743 13.0497 13.743H14.8866C15.2597 13.743 15.5845 13.4778 15.6684 13.1036L15.7646 12.6739C15.9141 12.0887 16.4061 11.7 16.9692 11.7H19.5708C20.1277 11.7 20.6252 12.0887 20.7692 12.6431L20.8721 13.1029C20.9555 13.4778 21.2802 13.743 21.654 13.743H23.4909ZM22.5577 22.4943C22.7495 20.707 23.0852 16.4609 23.0852 16.418C23.0975 16.2883 23.0552 16.1654 22.9713 16.0665C22.8812 15.9739 22.7672 15.9191 22.6416 15.9191H13.9032C13.777 15.9191 13.6569 15.9739 13.5735 16.0665C13.489 16.1654 13.4473 16.2883 13.4534 16.418C13.4546 16.4259 13.4666 16.5755 13.4868 16.8255C13.5762 17.9364 13.8255 21.0303 13.9865 22.4943C14.1005 23.5729 14.8081 24.2507 15.8332 24.2753C16.6242 24.2936 17.4391 24.2999 18.2724 24.2999C19.0573 24.2999 19.8544 24.2936 20.6699 24.2753C21.7305 24.257 22.4376 23.5911 22.5577 22.4943Z" fill="#D11A2A" />
                        </svg>
                    </button>
                    <button class="btn p-0">
                        <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle opacity="0.1" cx="18" cy="18" r="18" fill="#452C88" />
                            <path d="M23.6234 12.7663L22.2337 11.3766C21.9926 11.1355 21.6656 11 21.3246 11H16.7143C16.0042 11 15.4286 11.5756 15.4286 12.2857V13.5714H13.2857C12.5756 13.5714 12 14.1471 12 14.8571V23.4286C12 24.1387 12.5756 24.7143 13.2857 24.7143H19.2857C19.9958 24.7143 20.5714 24.1387 20.5714 23.4286V22.1429H22.7143C23.4244 22.1429 24 21.5672 24 20.8571V13.6754C24 13.3344 23.8645 13.0074 23.6234 12.7663ZM19.125 23.4286H13.4464C13.4038 23.4286 13.3629 23.4116 13.3328 23.3815C13.3026 23.3514 13.2857 23.3105 13.2857 23.2679V15.0179C13.2857 14.9752 13.3026 14.9344 13.3328 14.9042C13.3629 14.8741 13.4038 14.8571 13.4464 14.8571H15.4286V20.8571C15.4286 21.5672 16.0042 22.1429 16.7143 22.1429H19.2857V23.2679C19.2857 23.3105 19.2688 23.3514 19.2386 23.3815C19.2085 23.4116 19.1676 23.4286 19.125 23.4286ZM22.5536 20.8571H16.875C16.8324 20.8571 16.7915 20.8402 16.7614 20.8101C16.7312 20.7799 16.7143 20.7391 16.7143 20.6964V12.4464C16.7143 12.4038 16.7312 12.3629 16.7614 12.3328C16.7915 12.3026 16.8324 12.2857 16.875 12.2857H19.7143V14.6429C19.7143 14.9979 20.0021 15.2857 20.3571 15.2857H22.7143V20.6964C22.7143 20.7391 22.6974 20.7799 22.6672 20.8101C22.6371 20.8402 22.5962 20.8571 22.5536 20.8571ZM22.7143 14H21V12.2857H21.258C21.3006 12.2857 21.3415 12.3026 21.3717 12.3328L22.6672 13.6283C22.6821 13.6433 22.694 13.661 22.7021 13.6805C22.7101 13.7 22.7143 13.7209 22.7143 13.742V14Z" fill="#452C88" />
                        </svg>


                    </button>
                    <button class="btn p-0">
                        <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle opacity="0.1" cx="18" cy="18" r="18" fill="#ACADAE" />
                            <path d="M17.7167 13C13.5 13 11 18 11 18C11 18 13.5 23 17.7167 23C21.8333 23 24.3333 18 24.3333 18C24.3333 18 21.8333 13 17.7167 13ZM17.6667 14.6667C19.5167 14.6667 21 16.1667 21 18C21 19.85 19.5167 21.3333 17.6667 21.3333C15.8333 21.3333 14.3333 19.85 14.3333 18C14.3333 16.1667 15.8333 14.6667 17.6667 14.6667ZM17.6667 16.3333C16.75 16.3333 16 17.0833 16 18C16 18.9167 16.75 19.6667 17.6667 19.6667C18.5833 19.6667 19.3333 18.9167 19.3333 18C19.3333 17.8333 19.2667 17.6833 19.2333 17.5333C19.1 17.8 18.8333 18 18.5 18C18.0333 18 17.6667 17.6333 17.6667 17.1667C17.6667 16.8333 17.8667 16.5667 18.1333 16.4333C17.9833 16.3833 17.8333 16.3333 17.6667 16.3333Z" fill="black" />
                        </svg>

                    </button>
                </td>
            </tr>
            <tr>
                <td>Lorem Ipsum</td>
                <td>Sep 23, 2023</td>
                <td>Town, City, Country</td>
                <td>Town, City, Country</td>
                <td><img src="assets/images/scooble.png" style="width: 49px; height: 49px;" alt="text"> Company Name</td>
                <td><span class="badge" style="background-color: #4D4D4D1F; color: #8F9090;">Pending</span></td>
                <td>
                    <button class="btn p-0">
                        <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle opacity="0.1" cx="18" cy="18" r="18" fill="#233A85" />
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M16.1634 23.6195L22.3139 15.6658C22.6482 15.2368 22.767 14.741 22.6556 14.236C22.559 13.777 22.2768 13.3406 21.8534 13.0095L20.8208 12.1893C19.922 11.4744 18.8078 11.5497 18.169 12.3699L17.4782 13.2661C17.3891 13.3782 17.4114 13.5438 17.5228 13.6341C17.5228 13.6341 19.2684 15.0337 19.3055 15.0638C19.4244 15.1766 19.5135 15.3271 19.5358 15.5077C19.5729 15.8614 19.3278 16.1925 18.9638 16.2376C18.793 16.2602 18.6296 16.2075 18.5107 16.1097L16.676 14.6499C16.5868 14.5829 16.4531 14.5972 16.3788 14.6875L12.0185 20.3311C11.7363 20.6848 11.6397 21.1438 11.7363 21.5878L12.2934 24.0032C12.3231 24.1312 12.4345 24.2215 12.5682 24.2215L15.0195 24.1914C15.4652 24.1838 15.8812 23.9807 16.1634 23.6195ZM19.5955 22.8673H23.5925C23.9825 22.8673 24.2997 23.1886 24.2997 23.5837C24.2997 23.9795 23.9825 24.3 23.5925 24.3H19.5955C19.2055 24.3 18.8883 23.9795 18.8883 23.5837C18.8883 23.1886 19.2055 22.8673 19.5955 22.8673Z" fill="#233A85" />
                        </svg>
                    </button>
                    <button class="btn p-0" data-toggle="modal" data-target="#deleteroute">
                        <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle opacity="0.1" cx="18" cy="18" r="18" fill="#DF6F79" />
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M23.4909 13.743C23.7359 13.743 23.94 13.9465 23.94 14.2054V14.4448C23.94 14.6975 23.7359 14.9072 23.4909 14.9072H13.0497C12.804 14.9072 12.6 14.6975 12.6 14.4448V14.2054C12.6 13.9465 12.804 13.743 13.0497 13.743H14.8866C15.2597 13.743 15.5845 13.4778 15.6684 13.1036L15.7646 12.6739C15.9141 12.0887 16.4061 11.7 16.9692 11.7H19.5708C20.1277 11.7 20.6252 12.0887 20.7692 12.6431L20.8721 13.1029C20.9555 13.4778 21.2802 13.743 21.654 13.743H23.4909ZM22.5577 22.4943C22.7495 20.707 23.0852 16.4609 23.0852 16.418C23.0975 16.2883 23.0552 16.1654 22.9713 16.0665C22.8812 15.9739 22.7672 15.9191 22.6416 15.9191H13.9032C13.777 15.9191 13.6569 15.9739 13.5735 16.0665C13.489 16.1654 13.4473 16.2883 13.4534 16.418C13.4546 16.4259 13.4666 16.5755 13.4868 16.8255C13.5762 17.9364 13.8255 21.0303 13.9865 22.4943C14.1005 23.5729 14.8081 24.2507 15.8332 24.2753C16.6242 24.2936 17.4391 24.2999 18.2724 24.2999C19.0573 24.2999 19.8544 24.2936 20.6699 24.2753C21.7305 24.257 22.4376 23.5911 22.5577 22.4943Z" fill="#D11A2A" />
                        </svg>
                    </button>
                    <button class="btn p-0">
                        <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle opacity="0.1" cx="18" cy="18" r="18" fill="#452C88" />
                            <path d="M23.6234 12.7663L22.2337 11.3766C21.9926 11.1355 21.6656 11 21.3246 11H16.7143C16.0042 11 15.4286 11.5756 15.4286 12.2857V13.5714H13.2857C12.5756 13.5714 12 14.1471 12 14.8571V23.4286C12 24.1387 12.5756 24.7143 13.2857 24.7143H19.2857C19.9958 24.7143 20.5714 24.1387 20.5714 23.4286V22.1429H22.7143C23.4244 22.1429 24 21.5672 24 20.8571V13.6754C24 13.3344 23.8645 13.0074 23.6234 12.7663ZM19.125 23.4286H13.4464C13.4038 23.4286 13.3629 23.4116 13.3328 23.3815C13.3026 23.3514 13.2857 23.3105 13.2857 23.2679V15.0179C13.2857 14.9752 13.3026 14.9344 13.3328 14.9042C13.3629 14.8741 13.4038 14.8571 13.4464 14.8571H15.4286V20.8571C15.4286 21.5672 16.0042 22.1429 16.7143 22.1429H19.2857V23.2679C19.2857 23.3105 19.2688 23.3514 19.2386 23.3815C19.2085 23.4116 19.1676 23.4286 19.125 23.4286ZM22.5536 20.8571H16.875C16.8324 20.8571 16.7915 20.8402 16.7614 20.8101C16.7312 20.7799 16.7143 20.7391 16.7143 20.6964V12.4464C16.7143 12.4038 16.7312 12.3629 16.7614 12.3328C16.7915 12.3026 16.8324 12.2857 16.875 12.2857H19.7143V14.6429C19.7143 14.9979 20.0021 15.2857 20.3571 15.2857H22.7143V20.6964C22.7143 20.7391 22.6974 20.7799 22.6672 20.8101C22.6371 20.8402 22.5962 20.8571 22.5536 20.8571ZM22.7143 14H21V12.2857H21.258C21.3006 12.2857 21.3415 12.3026 21.3717 12.3328L22.6672 13.6283C22.6821 13.6433 22.694 13.661 22.7021 13.6805C22.7101 13.7 22.7143 13.7209 22.7143 13.742V14Z" fill="#452C88" />
                        </svg>


                    </button>
                    <button class="btn p-0">
                        <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle opacity="0.1" cx="18" cy="18" r="18" fill="#ACADAE" />
                            <path d="M17.7167 13C13.5 13 11 18 11 18C11 18 13.5 23 17.7167 23C21.8333 23 24.3333 18 24.3333 18C24.3333 18 21.8333 13 17.7167 13ZM17.6667 14.6667C19.5167 14.6667 21 16.1667 21 18C21 19.85 19.5167 21.3333 17.6667 21.3333C15.8333 21.3333 14.3333 19.85 14.3333 18C14.3333 16.1667 15.8333 14.6667 17.6667 14.6667ZM17.6667 16.3333C16.75 16.3333 16 17.0833 16 18C16 18.9167 16.75 19.6667 17.6667 19.6667C18.5833 19.6667 19.3333 18.9167 19.3333 18C19.3333 17.8333 19.2667 17.6833 19.2333 17.5333C19.1 17.8 18.8333 18 18.5 18C18.0333 18 17.6667 17.6333 17.6667 17.1667C17.6667 16.8333 17.8667 16.5667 18.1333 16.4333C17.9833 16.3833 17.8333 16.3333 17.6667 16.3333Z" fill="black" />
                        </svg>

                    </button>
                </td>
            </tr>
            <tr>
                <td>Lorem Ipsum</td>
                <td>Sep 23, 2023</td>
                <td>Town, City, Country</td>
                <td>Town, City, Country</td>
                <td><img src="assets/images/scooble.png" style="width: 49px; height: 49px;" alt="text"> Company Name</td>
                <td><span class="badge" style="background-color: #F5222D30; color: #F5222D;">@lang('lang.suspend')</span></td>
                <td>
                    <button class="btn p-0">
                        <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle opacity="0.1" cx="18" cy="18" r="18" fill="#233A85" />
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M16.1634 23.6195L22.3139 15.6658C22.6482 15.2368 22.767 14.741 22.6556 14.236C22.559 13.777 22.2768 13.3406 21.8534 13.0095L20.8208 12.1893C19.922 11.4744 18.8078 11.5497 18.169 12.3699L17.4782 13.2661C17.3891 13.3782 17.4114 13.5438 17.5228 13.6341C17.5228 13.6341 19.2684 15.0337 19.3055 15.0638C19.4244 15.1766 19.5135 15.3271 19.5358 15.5077C19.5729 15.8614 19.3278 16.1925 18.9638 16.2376C18.793 16.2602 18.6296 16.2075 18.5107 16.1097L16.676 14.6499C16.5868 14.5829 16.4531 14.5972 16.3788 14.6875L12.0185 20.3311C11.7363 20.6848 11.6397 21.1438 11.7363 21.5878L12.2934 24.0032C12.3231 24.1312 12.4345 24.2215 12.5682 24.2215L15.0195 24.1914C15.4652 24.1838 15.8812 23.9807 16.1634 23.6195ZM19.5955 22.8673H23.5925C23.9825 22.8673 24.2997 23.1886 24.2997 23.5837C24.2997 23.9795 23.9825 24.3 23.5925 24.3H19.5955C19.2055 24.3 18.8883 23.9795 18.8883 23.5837C18.8883 23.1886 19.2055 22.8673 19.5955 22.8673Z" fill="#233A85" />
                        </svg>
                    </button>
                    <button class="btn p-0" data-toggle="modal" data-target="#deleteroute">
                        <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle opacity="0.1" cx="18" cy="18" r="18" fill="#DF6F79" />
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M23.4909 13.743C23.7359 13.743 23.94 13.9465 23.94 14.2054V14.4448C23.94 14.6975 23.7359 14.9072 23.4909 14.9072H13.0497C12.804 14.9072 12.6 14.6975 12.6 14.4448V14.2054C12.6 13.9465 12.804 13.743 13.0497 13.743H14.8866C15.2597 13.743 15.5845 13.4778 15.6684 13.1036L15.7646 12.6739C15.9141 12.0887 16.4061 11.7 16.9692 11.7H19.5708C20.1277 11.7 20.6252 12.0887 20.7692 12.6431L20.8721 13.1029C20.9555 13.4778 21.2802 13.743 21.654 13.743H23.4909ZM22.5577 22.4943C22.7495 20.707 23.0852 16.4609 23.0852 16.418C23.0975 16.2883 23.0552 16.1654 22.9713 16.0665C22.8812 15.9739 22.7672 15.9191 22.6416 15.9191H13.9032C13.777 15.9191 13.6569 15.9739 13.5735 16.0665C13.489 16.1654 13.4473 16.2883 13.4534 16.418C13.4546 16.4259 13.4666 16.5755 13.4868 16.8255C13.5762 17.9364 13.8255 21.0303 13.9865 22.4943C14.1005 23.5729 14.8081 24.2507 15.8332 24.2753C16.6242 24.2936 17.4391 24.2999 18.2724 24.2999C19.0573 24.2999 19.8544 24.2936 20.6699 24.2753C21.7305 24.257 22.4376 23.5911 22.5577 22.4943Z" fill="#D11A2A" />
                        </svg>
                    </button>
                    <button class="btn p-0">
                        <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle opacity="0.1" cx="18" cy="18" r="18" fill="#452C88" />
                            <path d="M23.6234 12.7663L22.2337 11.3766C21.9926 11.1355 21.6656 11 21.3246 11H16.7143C16.0042 11 15.4286 11.5756 15.4286 12.2857V13.5714H13.2857C12.5756 13.5714 12 14.1471 12 14.8571V23.4286C12 24.1387 12.5756 24.7143 13.2857 24.7143H19.2857C19.9958 24.7143 20.5714 24.1387 20.5714 23.4286V22.1429H22.7143C23.4244 22.1429 24 21.5672 24 20.8571V13.6754C24 13.3344 23.8645 13.0074 23.6234 12.7663ZM19.125 23.4286H13.4464C13.4038 23.4286 13.3629 23.4116 13.3328 23.3815C13.3026 23.3514 13.2857 23.3105 13.2857 23.2679V15.0179C13.2857 14.9752 13.3026 14.9344 13.3328 14.9042C13.3629 14.8741 13.4038 14.8571 13.4464 14.8571H15.4286V20.8571C15.4286 21.5672 16.0042 22.1429 16.7143 22.1429H19.2857V23.2679C19.2857 23.3105 19.2688 23.3514 19.2386 23.3815C19.2085 23.4116 19.1676 23.4286 19.125 23.4286ZM22.5536 20.8571H16.875C16.8324 20.8571 16.7915 20.8402 16.7614 20.8101C16.7312 20.7799 16.7143 20.7391 16.7143 20.6964V12.4464C16.7143 12.4038 16.7312 12.3629 16.7614 12.3328C16.7915 12.3026 16.8324 12.2857 16.875 12.2857H19.7143V14.6429C19.7143 14.9979 20.0021 15.2857 20.3571 15.2857H22.7143V20.6964C22.7143 20.7391 22.6974 20.7799 22.6672 20.8101C22.6371 20.8402 22.5962 20.8571 22.5536 20.8571ZM22.7143 14H21V12.2857H21.258C21.3006 12.2857 21.3415 12.3026 21.3717 12.3328L22.6672 13.6283C22.6821 13.6433 22.694 13.661 22.7021 13.6805C22.7101 13.7 22.7143 13.7209 22.7143 13.742V14Z" fill="#452C88" />
                        </svg>


                    </button>
                    <button class="btn p-0">
                        <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle opacity="0.1" cx="18" cy="18" r="18" fill="#ACADAE" />
                            <path d="M17.7167 13C13.5 13 11 18 11 18C11 18 13.5 23 17.7167 23C21.8333 23 24.3333 18 24.3333 18C24.3333 18 21.8333 13 17.7167 13ZM17.6667 14.6667C19.5167 14.6667 21 16.1667 21 18C21 19.85 19.5167 21.3333 17.6667 21.3333C15.8333 21.3333 14.3333 19.85 14.3333 18C14.3333 16.1667 15.8333 14.6667 17.6667 14.6667ZM17.6667 16.3333C16.75 16.3333 16 17.0833 16 18C16 18.9167 16.75 19.6667 17.6667 19.6667C18.5833 19.6667 19.3333 18.9167 19.3333 18C19.3333 17.8333 19.2667 17.6833 19.2333 17.5333C19.1 17.8 18.8333 18 18.5 18C18.0333 18 17.6667 17.6333 17.6667 17.1667C17.6667 16.8333 17.8667 16.5667 18.1333 16.4333C17.9833 16.3833 17.8333 16.3333 17.6667 16.3333Z" fill="black" />
                        </svg>

                    </button>
                </td>
            </tr>
            <tr>
                <td>Lorem Ipsum</td>
                <td>Sep 23, 2023</td>
                <td>Town, City, Country</td>
                <td>Town, City, Country</td>
                <td><img src="assets/images/scooble.png" style="width: 49px; height: 49px;" alt="text"> Company Name</td>
                <td><span class="badge" style="background-color: #4D4D4D1F; color: #8F9090;">Pending</span></td>
                <td>
                    <button class="btn p-0">
                        <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle opacity="0.1" cx="18" cy="18" r="18" fill="#233A85" />
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M16.1634 23.6195L22.3139 15.6658C22.6482 15.2368 22.767 14.741 22.6556 14.236C22.559 13.777 22.2768 13.3406 21.8534 13.0095L20.8208 12.1893C19.922 11.4744 18.8078 11.5497 18.169 12.3699L17.4782 13.2661C17.3891 13.3782 17.4114 13.5438 17.5228 13.6341C17.5228 13.6341 19.2684 15.0337 19.3055 15.0638C19.4244 15.1766 19.5135 15.3271 19.5358 15.5077C19.5729 15.8614 19.3278 16.1925 18.9638 16.2376C18.793 16.2602 18.6296 16.2075 18.5107 16.1097L16.676 14.6499C16.5868 14.5829 16.4531 14.5972 16.3788 14.6875L12.0185 20.3311C11.7363 20.6848 11.6397 21.1438 11.7363 21.5878L12.2934 24.0032C12.3231 24.1312 12.4345 24.2215 12.5682 24.2215L15.0195 24.1914C15.4652 24.1838 15.8812 23.9807 16.1634 23.6195ZM19.5955 22.8673H23.5925C23.9825 22.8673 24.2997 23.1886 24.2997 23.5837C24.2997 23.9795 23.9825 24.3 23.5925 24.3H19.5955C19.2055 24.3 18.8883 23.9795 18.8883 23.5837C18.8883 23.1886 19.2055 22.8673 19.5955 22.8673Z" fill="#233A85" />
                        </svg>
                    </button>
                    <button class="btn p-0" data-toggle="modal" data-target="#deleteroute">
                        <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle opacity="0.1" cx="18" cy="18" r="18" fill="#DF6F79" />
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M23.4909 13.743C23.7359 13.743 23.94 13.9465 23.94 14.2054V14.4448C23.94 14.6975 23.7359 14.9072 23.4909 14.9072H13.0497C12.804 14.9072 12.6 14.6975 12.6 14.4448V14.2054C12.6 13.9465 12.804 13.743 13.0497 13.743H14.8866C15.2597 13.743 15.5845 13.4778 15.6684 13.1036L15.7646 12.6739C15.9141 12.0887 16.4061 11.7 16.9692 11.7H19.5708C20.1277 11.7 20.6252 12.0887 20.7692 12.6431L20.8721 13.1029C20.9555 13.4778 21.2802 13.743 21.654 13.743H23.4909ZM22.5577 22.4943C22.7495 20.707 23.0852 16.4609 23.0852 16.418C23.0975 16.2883 23.0552 16.1654 22.9713 16.0665C22.8812 15.9739 22.7672 15.9191 22.6416 15.9191H13.9032C13.777 15.9191 13.6569 15.9739 13.5735 16.0665C13.489 16.1654 13.4473 16.2883 13.4534 16.418C13.4546 16.4259 13.4666 16.5755 13.4868 16.8255C13.5762 17.9364 13.8255 21.0303 13.9865 22.4943C14.1005 23.5729 14.8081 24.2507 15.8332 24.2753C16.6242 24.2936 17.4391 24.2999 18.2724 24.2999C19.0573 24.2999 19.8544 24.2936 20.6699 24.2753C21.7305 24.257 22.4376 23.5911 22.5577 22.4943Z" fill="#D11A2A" />
                        </svg>
                    </button>
                    <button class="btn p-0">
                        <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle opacity="0.1" cx="18" cy="18" r="18" fill="#452C88" />
                            <path d="M23.6234 12.7663L22.2337 11.3766C21.9926 11.1355 21.6656 11 21.3246 11H16.7143C16.0042 11 15.4286 11.5756 15.4286 12.2857V13.5714H13.2857C12.5756 13.5714 12 14.1471 12 14.8571V23.4286C12 24.1387 12.5756 24.7143 13.2857 24.7143H19.2857C19.9958 24.7143 20.5714 24.1387 20.5714 23.4286V22.1429H22.7143C23.4244 22.1429 24 21.5672 24 20.8571V13.6754C24 13.3344 23.8645 13.0074 23.6234 12.7663ZM19.125 23.4286H13.4464C13.4038 23.4286 13.3629 23.4116 13.3328 23.3815C13.3026 23.3514 13.2857 23.3105 13.2857 23.2679V15.0179C13.2857 14.9752 13.3026 14.9344 13.3328 14.9042C13.3629 14.8741 13.4038 14.8571 13.4464 14.8571H15.4286V20.8571C15.4286 21.5672 16.0042 22.1429 16.7143 22.1429H19.2857V23.2679C19.2857 23.3105 19.2688 23.3514 19.2386 23.3815C19.2085 23.4116 19.1676 23.4286 19.125 23.4286ZM22.5536 20.8571H16.875C16.8324 20.8571 16.7915 20.8402 16.7614 20.8101C16.7312 20.7799 16.7143 20.7391 16.7143 20.6964V12.4464C16.7143 12.4038 16.7312 12.3629 16.7614 12.3328C16.7915 12.3026 16.8324 12.2857 16.875 12.2857H19.7143V14.6429C19.7143 14.9979 20.0021 15.2857 20.3571 15.2857H22.7143V20.6964C22.7143 20.7391 22.6974 20.7799 22.6672 20.8101C22.6371 20.8402 22.5962 20.8571 22.5536 20.8571ZM22.7143 14H21V12.2857H21.258C21.3006 12.2857 21.3415 12.3026 21.3717 12.3328L22.6672 13.6283C22.6821 13.6433 22.694 13.661 22.7021 13.6805C22.7101 13.7 22.7143 13.7209 22.7143 13.742V14Z" fill="#452C88" />
                        </svg>


                    </button>
                    <button class="btn p-0">
                        <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle opacity="0.1" cx="18" cy="18" r="18" fill="#ACADAE" />
                            <path d="M17.7167 13C13.5 13 11 18 11 18C11 18 13.5 23 17.7167 23C21.8333 23 24.3333 18 24.3333 18C24.3333 18 21.8333 13 17.7167 13ZM17.6667 14.6667C19.5167 14.6667 21 16.1667 21 18C21 19.85 19.5167 21.3333 17.6667 21.3333C15.8333 21.3333 14.3333 19.85 14.3333 18C14.3333 16.1667 15.8333 14.6667 17.6667 14.6667ZM17.6667 16.3333C16.75 16.3333 16 17.0833 16 18C16 18.9167 16.75 19.6667 17.6667 19.6667C18.5833 19.6667 19.3333 18.9167 19.3333 18C19.3333 17.8333 19.2667 17.6833 19.2333 17.5333C19.1 17.8 18.8333 18 18.5 18C18.0333 18 17.6667 17.6333 17.6667 17.1667C17.6667 16.8333 17.8667 16.5667 18.1333 16.4333C17.9833 16.3833 17.8333 16.3333 17.6667 16.3333Z" fill="black" />
                        </svg>

                    </button>
                </td>
            </tr>
        </tbody>
    </table>
    <!-- Delete Client Modal -->
    <div class="modal fade" id="deleteroute" tabindex="-1" aria-labelledby="deleterouteLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- <div class="modal-header">
          <h5 class="modal-title" id="deleterouteLabel"></h5>
        </div> -->
                <div class="modal-body">
                    <span class="btn" style="background-color: #FEF3F2; border-radius: 50px;">
                        <span class="btn" style="background-color: #FEE4E2; color: #D11A2A; border-radius: 50px;"><i class="fa fa-trash"></i></span>
                    </span>
                    <div class="mt-3">
                        <h6>Really want to delete Route</h6>
                    </div>
                    <div class="row mt-3 text-center">
                        <div class="col-lg-6">
                            <button class="btn btn-sm btn-outline px-5" data-toggle="modal" data-target="#deleteroute" style="background-color: #ffffff; border: 1px solid #D0D5DD; border-radius: 8px; width: 100%;">Cancel</button>
                        </div>
                        <div class="col-lg-6">
                            <button class="btn btn-sm btn-outline text-white px-5" data-toggle="modal" data-target="#deleteroute" style="background-color: #D92D20; border-radius: 8px; width: 100%;">Delete</button>
                        </div>
                    </div>
                </div>
                <!-- <div class="modal-footer">
                </div> -->
            </div>
        </div>
    </div>
    <!-- Delete Client Modal End -->
</body>

</html>