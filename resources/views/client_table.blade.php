    <table id="example" class="display" style="width:100%">
        <thead class="text-secondary" style="background-color: #E9EAEF;">
            <tr>
                <th> @lang('lang.name') </th>
                <th> @lang('lang.joining_date')  </th>
                <th> @lang('lang.address')  </th>
                <th> @lang('lang.company_name')  </th>
                <th> @lang('lang.status') </th>
                <th> @lang('lang.actions')  </th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $key => $value)
            <tr>
                <td><img src="assets/images/pic.jpg" style="width: 45px; height: 43px; border-radius: 38px;" alt="text"> {{ $value['name'] }} </td>
                <td>{{table_date($value['created_at'])}}</td>
                <td>{{ $value['address'] }}</td>
                <td><img src="assets/images/scooble.png" style="width: 49px; height: 49px;" alt="text">{{ $value['com_name'] }}  </td>
                @if($value['status'] == 1)
                <td><span class="badge" style="background-color: #31A6132E; color: #31A613;"> Active </span></td>
                @elseif($value['status'] == 2)
                <td><span class="badge" style="background-color: #4D4D4D1F; color: #8F9090;"> Pendding </span></td>
                @else
                <td><span class="badge" style="background-color: #F5222D30; color: #F5222D;"> Suspend </span></td>
                @endif
                <td>
                    <button id="btn_edit_client" class="btn p-0" data-client_id="{{$value['id']}}"  ><svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle opacity="0.1" cx="18" cy="18" r="18" fill="#233A85" />
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M16.1634 23.6195L22.3139 15.6658C22.6482 15.2368 22.767 14.741 22.6556 14.236C22.559 13.777 22.2768 13.3406 21.8534 13.0095L20.8208 12.1893C19.922 11.4744 18.8078 11.5497 18.169 12.3699L17.4782 13.2661C17.3891 13.3782 17.4114 13.5438 17.5228 13.6341C17.5228 13.6341 19.2684 15.0337 19.3055 15.0638C19.4244 15.1766 19.5135 15.3271 19.5358 15.5077C19.5729 15.8614 19.3278 16.1925 18.9638 16.2376C18.793 16.2602 18.6296 16.2075 18.5107 16.1097L16.676 14.6499C16.5868 14.5829 16.4531 14.5972 16.3788 14.6875L12.0185 20.3311C11.7363 20.6848 11.6397 21.1438 11.7363 21.5878L12.2934 24.0032C12.3231 24.1312 12.4345 24.2215 12.5682 24.2215L15.0195 24.1914C15.4652 24.1838 15.8812 23.9807 16.1634 23.6195ZM19.5955 22.8673H23.5925C23.9825 22.8673 24.2997 23.1886 24.2997 23.5837C24.2997 23.9795 23.9825 24.3 23.5925 24.3H19.5955C19.2055 24.3 18.8883 23.9795 18.8883 23.5837C18.8883 23.1886 19.2055 22.8673 19.5955 22.8673Z" fill="#233A85" />
                        </svg>
                    </button> 
                    <button id="btn_dell_client" class="btn p-0" data-id=" {{$value['id']}} " data-toggle="modal" data-target="#deleteclient"><svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle opacity="0.1" cx="18" cy="18" r="18" fill="#DF6F79" />
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M23.4909 13.743C23.7359 13.743 23.94 13.9465 23.94 14.2054V14.4448C23.94 14.6975 23.7359 14.9072 23.4909 14.9072H13.0497C12.804 14.9072 12.6 14.6975 12.6 14.4448V14.2054C12.6 13.9465 12.804 13.743 13.0497 13.743H14.8866C15.2597 13.743 15.5845 13.4778 15.6684 13.1036L15.7646 12.6739C15.9141 12.0887 16.4061 11.7 16.9692 11.7H19.5708C20.1277 11.7 20.6252 12.0887 20.7692 12.6431L20.8721 13.1029C20.9555 13.4778 21.2802 13.743 21.654 13.743H23.4909ZM22.5577 22.4943C22.7495 20.707 23.0852 16.4609 23.0852 16.418C23.0975 16.2883 23.0552 16.1654 22.9713 16.0665C22.8812 15.9739 22.7672 15.9191 22.6416 15.9191H13.9032C13.777 15.9191 13.6569 15.9739 13.5735 16.0665C13.489 16.1654 13.4473 16.2883 13.4534 16.418C13.4546 16.4259 13.4666 16.5755 13.4868 16.8255C13.5762 17.9364 13.8255 21.0303 13.9865 22.4943C14.1005 23.5729 14.8081 24.2507 15.8332 24.2753C16.6242 24.2936 17.4391 24.2999 18.2724 24.2999C19.0573 24.2999 19.8544 24.2936 20.6699 24.2753C21.7305 24.257 22.4376 23.5911 22.5577 22.4943Z" fill="#D11A2A" />
                        </svg>
                    </button>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
    <!-- Edit Client Modal -->
    <div class="modal fade" id="editclient" tabindex="-1" aria-labelledby="editclientLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- <div class="modal-header">
          <h5 class="modal-title" id="editclientLabel"></h5>
        </div> -->
                <form action="{{'/user_store'}}" style="width: 100%;" method="post" class="dropzone mx-auto" id="my-dropzone">
                    <div class="modal-body">
                        <div class="row">
                                <div class="col-md-12 mb-2">
                                        <div class="row text-center" style="color: #6C757D; font-size: 40px;">
                                            <div class="col-lg-12">
                                                <i class="fa fa-camera"></i>
                                            </div>
                                            <div class="col-lg-12">
                                                <label for="my-dropzone" id="dropzone-label">Upload Image</label>
                                            </div>
                                        </div>    
                                </div>
                                <div class="col-lg-12 mb-2">
                                    @csrf
                                    <input type="hidden" name="_previous" value="{{url()->previous()}}">
                                    <input type="hidden" id="client_id" name="id" >
                                    <input type="hidden" id="user_role" name="role" >
                                    <input type="text" class="form-control" name="client_name" id="client_name" placeholder="@lang('lang.name')">
                                </div>
                                <div class="col-lg-12 mb-2">
                                    <input type="text" class="form-control" name="email" id="email" placeholder="@lang('lang.email')">
                                </div>
                                <div class="col-lg-12 mb-2">
                                    <input type="text" class="form-control" name="phone" id="phone" placeholder="@lang('lang.phone')">
                                </div>
                                <div class="col-lg-12 mb-2">
                                    <input type="text" class="form-control" name="company_name" id="company_name" placeholder="@lang('lang.company_name')">
                                </div>
                                <div class="col-lg-12 mb-2">
                                    <label for="company_logo" class="form-control btn btn-sm center-block btn-file" style="border: 1px solid #CED4DA;">
                                        <div class="row">
                                            <div class="col-md-8 text-left" style="font-size: 15px;">
                                                <label class="pl-1" id="company_logo" style="color: #6C757D;">@lang('lang.company_logo')</label>
                                            </div>
                                            <div class="col-md-4 text-right">
                                                <i class="fa fa-upload" style="color: #6C757D;"></i>
                                            </div>
                                        </div>
                                        <input type="file" class="form-control d-none" name="company_logo" id="company_logo" placeholder="@lang('lang.company_logo')" id="file-input" onchange="handleFileSelect(event)">
                                    </label>
                                </div>
                                <div class="col-lg-12 mb-2">
                                    <textarea name="address" id="address" cols="30" rows="10" class="form-control" placeholder="@lang('lang.address')"></textarea>
                                </div>
                                <div class="col-lg-12 mb-2">
                                    <input type="datetime-local" name="joining_date" id="joining_date" class="form-control">
                                </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button  class="btn btn-sm text-white px-5"  style="background-color: #233A85; border-radius: 8px;"  > @lang('lang.save')</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Edit Client Modal End -->

    <!-- Edit Button Modal -->
    <div class="modal fade" id="edit" tabindex="-1" aria-labelledby="editLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editLabel"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="4" y="4" width="48" height="48" rx="24" fill="#D1FADF" />
                        <path d="M23.5 28L26.5 31L32.5 25M38 28C38 33.5228 33.5228 38 28 38C22.4772 38 18 33.5228 18 28C18 22.4772 22.4772 18 28 18C33.5228 18 38 22.4772 38 28Z" stroke="#039855" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <rect x="4" y="4" width="48" height="48" rx="24" stroke="#ECFDF3" stroke-width="8" />
                    </svg>

                    <h5 class="mt-3">@lang('lang.confirmation_email')</h5>
                    <p>@lang('lang.confirmation_email_sent_to_client_to_set_password')</p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-sm text-white px-5" style="background-color: #233A85; border-radius: 8px;">@lang('lang.ok')</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Edit Button Modal End -->

    <!-- Delete Client Modal -->
    <div class="modal fade" id="deleteclient" tabindex="-1" aria-labelledby="deleteclientLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- <div class="modal-header">
          <h5 class="modal-title" id="deleteclientLabel"></h5>
        </div> -->
                <div class="modal-body">
                    <span class="btn p-0" style="background-color: #FEF3F2; border-radius: 50px;">
                        <span class="btn p-0" style="background-color: #FEE4E2; color: #D11A2A; border-radius: 50px;"><i class="fa fa-trash"></i></span>
                    </span>
                    <div class="mt-3">
                        <h6>@lang('lang.really_want_to_delete_client')</h6>
                        <p>@lang('lang.client_has_assigned_drivers_trips_what_to_do_with_them')</p>
                    </div>
                    <div class="mt-3">
                        <input type="checkbox" name="delete_all_drivers" id="delete_all_drivers"> Delete all drivers
                    </div>
                    <div class="mt-3">
                        <select class="form-select" name="choose_options" id="choose_options">
                            <option value="@lang('lang.choose_additional_options')">@lang('lang.choose_additional_options')</option>
                            <option value="@lang('lang.delete_all_assigned_trips')">@lang('lang.delete_all_assigned_trips')</option>
                            <option value="@lang('lang.delete_completed_trips')">@lang('lang.delete_completed_trips')</option>
                            <option value="@lang('lang.Dont_delete_any_trips')">@lang('lang.Dont_delete_any_trips')</option>
                        </select>
                    </div>
                    <div class="row mt-3 text-center">
                        <div class="col-lg-6">
                            <button class="btn btn-sm btn-outline px-5" data-toggle="modal" data-target="#deleteclient" style="background-color: #ffffff; border: 1px solid #D0D5DD; border-radius: 8px; width: 100%;">@lang('lang.cancel')</button>
                        </div>
                        <div class="col-lg-6">
                            <button class="btn btn-sm btn-outline text-white px-5" data-toggle="modal" data-target="#deleteclient" style="background-color: #D92D20; border-radius: 8px; width: 100%;">@lang('lang.delete')</button>
                        </div>
                    </div>
                </div>
                <!-- <div class="modal-footer">
                    
                </div> -->
            </div>
        </div>
    </div>
    <!-- Delete Client Modal End -->
