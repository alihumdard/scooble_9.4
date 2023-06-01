<table id="users-table" class="display" style="width:100%">
    <thead class="text-secondary" style="background-color: #E9EAEF;">
        <tr style="font-size: small;">
            <th>@lang('lang.trip_title')</th>
            <th>@lang('lang.trip_date')</th>
            <th>@lang('lang.start_point')</th>
            <th>@lang('lang.end_point')</th>
            <th>Client Name</th>
            <th>Driver Name</th>
            <th>@lang('lang.status')</th>
            <th>@lang('lang.actions')</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $key => $value)
        <tr style="font-size: small;">
            <td>{{ $value['title'] }}</td>
            <td>{{table_date($value['created_at'])}}</td>
            <td>{{ $value['start_point'] }}</td>
            <td>{{ $value['end_point'] }}</td>
            <td></td>
            <td><img src="{{ asset('storage/' . $value['user_pic']) }}" style="width: 45px; height: 43px; border-radius: 38px;" alt="text"> {{ $value['name'] }} </td>
            @if($value['status'] == 'on')
            <td>
                <button class="btn btn_status">
                    <span class="badge" data-client_id="{{$value['id']}}" style="background-color: #31A6132E; color: #31A613;"> Active </span>
                </button>
            </td>
            @else
            <td>
                <button class="btn btn_status">
                    <span class="badge" data-client_id="{{$value['id']}}" style="background-color: #F5222D30; color: #F5222D;"> Suspend </span>
                </button>
            </td>
            @endif
            <td>
                <form method="POST" action="/create_trip">
                    @csrf
                    <input type="hidden" name="id" value="{{$value['id']}}">
                    <button id="btn_edit_announcement" class="btn p-0">
                        <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle opacity="0.1" cx="18" cy="18" r="18" fill="#233A85" />
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M16.1634 23.6195L22.3139 15.6658C22.6482 15.2368 22.767 14.741 22.6556 14.236C22.559 13.777 22.2768 13.3406 21.8534 13.0095L20.8208 12.1893C19.922 11.4744 18.8078 11.5497 18.169 12.3699L17.4782 13.2661C17.3891 13.3782 17.4114 13.5438 17.5228 13.6341C17.5228 13.6341 19.2684 15.0337 19.3055 15.0638C19.4244 15.1766 19.5135 15.3271 19.5358 15.5077C19.5729 15.8614 19.3278 16.1925 18.9638 16.2376C18.793 16.2602 18.6296 16.2075 18.5107 16.1097L16.676 14.6499C16.5868 14.5829 16.4531 14.5972 16.3788 14.6875L12.0185 20.3311C11.7363 20.6848 11.6397 21.1438 11.7363 21.5878L12.2934 24.0032C12.3231 24.1312 12.4345 24.2215 12.5682 24.2215L15.0195 24.1914C15.4652 24.1838 15.8812 23.9807 16.1634 23.6195ZM19.5955 22.8673H23.5925C23.9825 22.8673 24.2997 23.1886 24.2997 23.5837C24.2997 23.9795 23.9825 24.3 23.5925 24.3H19.5955C19.2055 24.3 18.8883 23.9795 18.8883 23.5837C18.8883 23.1886 19.2055 22.8673 19.5955 22.8673Z" fill="#233A85" />
                        </svg>
                    </button>
                </form>
                <button class="btn p-0" data-toggle="modal" data-target="#deleteroute">
                    <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle opacity="0.1" cx="18" cy="18" r="18" fill="#DF6F79" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M23.4909 13.743C23.7359 13.743 23.94 13.9465 23.94 14.2054V14.4448C23.94 14.6975 23.7359 14.9072 23.4909 14.9072H13.0497C12.804 14.9072 12.6 14.6975 12.6 14.4448V14.2054C12.6 13.9465 12.804 13.743 13.0497 13.743H14.8866C15.2597 13.743 15.5845 13.4778 15.6684 13.1036L15.7646 12.6739C15.9141 12.0887 16.4061 11.7 16.9692 11.7H19.5708C20.1277 11.7 20.6252 12.0887 20.7692 12.6431L20.8721 13.1029C20.9555 13.4778 21.2802 13.743 21.654 13.743H23.4909ZM22.5577 22.4943C22.7495 20.707 23.0852 16.4609 23.0852 16.418C23.0975 16.2883 23.0552 16.1654 22.9713 16.0665C22.8812 15.9739 22.7672 15.9191 22.6416 15.9191H13.9032C13.777 15.9191 13.6569 15.9739 13.5735 16.0665C13.489 16.1654 13.4473 16.2883 13.4534 16.418C13.4546 16.4259 13.4666 16.5755 13.4868 16.8255C13.5762 17.9364 13.8255 21.0303 13.9865 22.4943C14.1005 23.5729 14.8081 24.2507 15.8332 24.2753C16.6242 24.2936 17.4391 24.2999 18.2724 24.2999C19.0573 24.2999 19.8544 24.2936 20.6699 24.2753C21.7305 24.257 22.4376 23.5911 22.5577 22.4943Z" fill="#D11A2A" />
                    </svg>
                </button>
                <button class="btn p-0">
                    <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle opacity="0.1" cx="18" cy="18" r="18" fill="#452C88" />
                        <path d="M23.2857 12.8571V12H20.7143V16.2857H21.5714V14.5714H22.8572V13.7143H21.5714V12.8571H23.2857Z" fill="#452C88" />
                        <path d="M21.5715 21.4285V23.1428H14.7143V21.4285H13.8571V23.1428C13.8571 23.3701 13.9475 23.5881 14.1082 23.7489C14.2689 23.9096 14.487 23.9999 14.7143 23.9999H21.5715C21.7988 23.9999 22.0168 23.9096 22.1776 23.7489C22.3383 23.5881 22.4286 23.3701 22.4286 23.1428V21.4285H21.5715Z" fill="#452C88" />
                        <path d="M20.2857 20.1428L19.6797 19.5368L18.5714 20.6451V17.1428H17.7143V20.6451L16.606 19.5368L16 20.1428L18.1429 22.2857L20.2857 20.1428Z" fill="#452C88" />
                        <path d="M18.5715 16.2857H16.8572V12H18.5715C18.9123 12.0004 19.2392 12.136 19.4802 12.377C19.7212 12.618 19.8568 12.9448 19.8572 13.2857V15C19.8568 15.3409 19.7212 15.6677 19.4802 15.9087C19.2392 16.1498 18.9123 16.2854 18.5715 16.2857ZM17.7143 15.4286H18.5715C18.6851 15.4285 18.794 15.3833 18.8744 15.3029C18.9547 15.2226 18.9999 15.1136 19 15V13.2857C18.9999 13.1721 18.9547 13.0632 18.8744 12.9828C18.794 12.9025 18.6851 12.8573 18.5715 12.8571H17.7143V15.4286Z" fill="#452C88" />
                        <path d="M15.1429 12H13V16.2857H13.8571V15H15.1429C15.3701 14.9997 15.5879 14.9093 15.7486 14.7486C15.9093 14.5879 15.9997 14.3701 16 14.1429V12.8571C15.9998 12.6299 15.9094 12.412 15.7487 12.2513C15.588 12.0907 15.3701 12.0003 15.1429 12ZM13.8571 14.1429V12.8571H15.1429L15.1433 14.1429H13.8571Z" fill="#452C88" />
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

        @endforeach

        <!-- <tr style="font-size: small;">
            <td>Lorem Ipsum</td>
            <td>Sep 23, 2023</td>
            <td>Town, City, Country</td>
            <td>Town, City, Country</td>
            <td><img src="assets/images/scooble.png" style="width: 49px; height: 49px;" alt="text"> @lang('lang.company_name')</td>
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
                        <path d="M23.2857 12.8571V12H20.7143V16.2857H21.5714V14.5714H22.8572V13.7143H21.5714V12.8571H23.2857Z" fill="#452C88" />
                        <path d="M21.5715 21.4285V23.1428H14.7143V21.4285H13.8571V23.1428C13.8571 23.3701 13.9475 23.5881 14.1082 23.7489C14.2689 23.9096 14.487 23.9999 14.7143 23.9999H21.5715C21.7988 23.9999 22.0168 23.9096 22.1776 23.7489C22.3383 23.5881 22.4286 23.3701 22.4286 23.1428V21.4285H21.5715Z" fill="#452C88" />
                        <path d="M20.2857 20.1428L19.6797 19.5368L18.5714 20.6451V17.1428H17.7143V20.6451L16.606 19.5368L16 20.1428L18.1429 22.2857L20.2857 20.1428Z" fill="#452C88" />
                        <path d="M18.5715 16.2857H16.8572V12H18.5715C18.9123 12.0004 19.2392 12.136 19.4802 12.377C19.7212 12.618 19.8568 12.9448 19.8572 13.2857V15C19.8568 15.3409 19.7212 15.6677 19.4802 15.9087C19.2392 16.1498 18.9123 16.2854 18.5715 16.2857ZM17.7143 15.4286H18.5715C18.6851 15.4285 18.794 15.3833 18.8744 15.3029C18.9547 15.2226 18.9999 15.1136 19 15V13.2857C18.9999 13.1721 18.9547 13.0632 18.8744 12.9828C18.794 12.9025 18.6851 12.8573 18.5715 12.8571H17.7143V15.4286Z" fill="#452C88" />
                        <path d="M15.1429 12H13V16.2857H13.8571V15H15.1429C15.3701 14.9997 15.5879 14.9093 15.7486 14.7486C15.9093 14.5879 15.9997 14.3701 16 14.1429V12.8571C15.9998 12.6299 15.9094 12.412 15.7487 12.2513C15.588 12.0907 15.3701 12.0003 15.1429 12ZM13.8571 14.1429V12.8571H15.1429L15.1433 14.1429H13.8571Z" fill="#452C88" />
                    </svg>

                </button>
                <button class="btn p-0">
                    <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle opacity="0.1" cx="18" cy="18" r="18" fill="#ACADAE" />
                        <path d="M17.7167 13C13.5 13 11 18 11 18C11 18 13.5 23 17.7167 23C21.8333 23 24.3333 18 24.3333 18C24.3333 18 21.8333 13 17.7167 13ZM17.6667 14.6667C19.5167 14.6667 21 16.1667 21 18C21 19.85 19.5167 21.3333 17.6667 21.3333C15.8333 21.3333 14.3333 19.85 14.3333 18C14.3333 16.1667 15.8333 14.6667 17.6667 14.6667ZM17.6667 16.3333C16.75 16.3333 16 17.0833 16 18C16 18.9167 16.75 19.6667 17.6667 19.6667C18.5833 19.6667 19.3333 18.9167 19.3333 18C19.3333 17.8333 19.2667 17.6833 19.2333 17.5333C19.1 17.8 18.8333 18 18.5 18C18.0333 18 17.6667 17.6333 17.6667 17.1667C17.6667 16.8333 17.8667 16.5667 18.1333 16.4333C17.9833 16.3833 17.8333 16.3333 17.6667 16.3333Z" fill="black" />
                    </svg>

                </button>
            </td>
        </tr> -->
       
    
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
                    <h6>@lang('lang.really_want_to_delete_route')</h6>
                </div>
                <div class="row mt-3 text-center">
                    <div class="col-lg-6">
                        <button class="btn btn-sm btn-outline px-5" data-toggle="modal" data-target="#deleteroute" style="background-color: #ffffff; border: 1px solid #D0D5DD; border-radius: 8px; width: 100%;">@lang('lang.cancel')</button>
                    </div>
                    <div class="col-lg-6">
                        <button class="btn btn-sm btn-outline text-white px-5" data-toggle="modal" data-target="#deleteroute" style="background-color: #D92D20; border-radius: 8px; width: 100%;">@lang('lang.delete')</button>
                    </div>
                </div>
            </div>
            <!-- <div class="modal-footer">
                    
                </div> -->
        </div>
    </div>
</div>
<!-- Delete Client Modal End -->