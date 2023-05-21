 <table id="users-table" class="display" style="width:100%">
     <thead class="text-secondary" style="background-color: #E9EAEF;">
         <tr>
             <th>@lang('lang.drivers')</th>
             <th>@lang('lang.joining_date')</th>
             <th>@lang('lang.address')</th>
             <th>@lang('lang.drivers')client</th>
             <th>@lang('lang.status')</th>
             <th>@lang('lang.note')</th>
             <th>@lang('lang.actions')</th>
         </tr>
     </thead>
     <tbody>

         @foreach($data as $key => $value)
         <tr>
             <td><img src="assets/images/pic.jpg" style="width: 45px; height: 43px; border-radius: 38px;" alt="text"> {{ $value['name'] }} </td>
             <td>{{table_date($value['created_at'])}}}</td>
             <td>{{ $value['address'] }}</td>
             <td><img src="assets/images/pic.jpg" style="width: 45px; height: 43px; border-radius: 38px;" alt="text"> @lang('lang.client_name')</td>
             @if($value['status'] == 1)
             <td><span class="badge" style="background-color: #31A6132E; color: #31A613;"> Active </span></td>
             @elseif($value['status'] == 2)
             <td><span class="badge" style="background-color: #4D4D4D1F; color: #8F9090;"> Pendding </span></td>
             @else
             <td><span class="badge" style="background-color: #F5222D30; color: #F5222D;"> Suspend </span></td>
             @endif
             <td>Write Here......</td>
             <td>
                 <button id="btn_edit_client" class="btn p-0" data-client_id="{{$value['id']}}"><svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
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
 <div class="modal fade" id="editclient" tabindex="-1" aria-labelledby="editdriverLabel" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <!-- <div class="modal-header">
          <h5 class="modal-title" id="editdriverLabel"></h5>
        </div> -->
             <div class="modal-body">
                 <form action="{{'/user_store'}}" style="width: 100%;" method="post" class="dropzone mx-auto" id="my-dropzone">
                     <div class="row">
                         <div class="col-md-12 mb-2">
                             <div class="file-dropzone" id="fileDropzone1" onclick="openFileInput()">
                                 <svg width="42" height="35" viewBox="0 0 42 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                     <path fill-rule="evenodd" clip-rule="evenodd" d="M11.2938 5.41268C11.4286 5.22532 11.5783 4.99595 11.7692 4.68667C11.8761 4.51336 12.2664 3.86782 12.3302 3.76348C13.9071 1.18395 15.0534 0 17.1205 0H24.7295C26.7966 0 27.9429 1.18395 29.5198 3.76348C29.5836 3.86782 29.9739 4.51336 30.0808 4.68667C30.2717 4.99595 30.4214 5.22532 30.5562 5.41268C30.645 5.53624 30.7227 5.63442 30.786 5.70682H36.1432C39.295 5.70682 41.85 8.26185 41.85 11.4136V28.5341C41.85 31.6859 39.295 34.2409 36.1432 34.2409H5.70682C2.55503 34.2409 0 31.6859 0 28.5341V11.4136C0 8.26185 2.55503 5.70682 5.70682 5.70682H11.064C11.1273 5.63442 11.205 5.53624 11.2938 5.41268ZM5.70682 9.51136C4.65622 9.51136 3.80455 10.363 3.80455 11.4136V28.5341C3.80455 29.5847 4.65622 30.4364 5.70682 30.4364H36.1432C37.1938 30.4364 38.0455 29.5847 38.0455 28.5341V11.4136C38.0455 10.363 37.1938 9.51136 36.1432 9.51136H30.4364C29.1726 9.51136 28.3203 8.81971 27.4677 7.63431C27.2715 7.36156 27.0771 7.06374 26.8432 6.68476C26.7251 6.49337 26.329 5.83823 26.2738 5.74788C25.4134 4.34046 24.8945 3.80455 24.7295 3.80455H17.1205C16.9555 3.80455 16.4366 4.34046 15.5762 5.74788C15.521 5.83823 15.1249 6.49337 15.0068 6.68476C14.7729 7.06374 14.5785 7.36156 14.3823 7.63431C13.5297 8.81971 12.6774 9.51136 11.4136 9.51136H5.70682ZM34.2409 15.2182C35.2915 15.2182 36.1432 14.3665 36.1432 13.3159C36.1432 12.2653 35.2915 11.4136 34.2409 11.4136C33.1903 11.4136 32.3386 12.2653 32.3386 13.3159C32.3386 14.3665 33.1903 15.2182 34.2409 15.2182ZM20.925 28.5341C15.672 28.5341 11.4136 24.2757 11.4136 19.0227C11.4136 13.7697 15.672 9.51136 20.925 9.51136C26.178 9.51136 30.4364 13.7697 30.4364 19.0227C30.4364 24.2757 26.178 28.5341 20.925 28.5341ZM20.925 24.7295C24.0768 24.7295 26.6318 22.1745 26.6318 19.0227C26.6318 15.8709 24.0768 13.3159 20.925 13.3159C17.7732 13.3159 15.2182 15.8709 15.2182 19.0227C15.2182 22.1745 17.7732 24.7295 20.925 24.7295Z" fill="#D9D9D9" />
                                 </svg>
                                 <span class="file-dropzone-text">Upload Image</span>
                                 <input class="file-input" name="user_pic" type="file" id="fileInput" onchange="handleFileChange(event)">
                             </div>
                         </div>
                         <div class="col-lg-12 mb-2">
                             @csrf
                             <input type="hidden" name="_previous" value="{{ url()->previous() }}">
                             <input type="hidden" id="client_id" name="id">
                             <input type="hidden" id="user_role" name="role">
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
                             <div class="file-input-container">
                                 <label class="file-input-label" for="fileInput" id="fileInput1Label1">Company Logo</label>
                                 <input class="file-input" type="file" name="com_pic" id="fileInput1" onchange="updateLabel()">
                                 <div class="file-input-icon" onclick="document.getElementById('fileInput1').click()"></div>
                             </div>
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
                 <button class="btn btn-sm text-white px-5" data-toggle="modal" data-target="#editdriver" style="background-color: #233A85; border-radius: 8px;">@lang('lang.save')</button>
             </div>
             </form>
         </div>
     </div>
 </div>
 <!-- Edit Client Modal End -->

 <!-- Delete Client Modal -->
 <div class="modal fade" id="deletedriver" tabindex="-1" aria-labelledby="deletedriverLabel" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <!-- <div class="modal-header">
          <h5 class="modal-title" id="deletedriverLabel"></h5>
        </div> -->
             <div class="modal-body">
                 <span class="btn p-0" style="background-color: #FEF3F2; border-radius: 50px;">
                     <span class="btn p-0" style="background-color: #FEE4E2; color: #D11A2A; border-radius: 50px;"><i class="fa fa-trash"></i></span>
                 </span>
                 <div class="mt-3">
                     <h6>@lang('lang.really_want_to_delete_driver')</h6>
                     <p>@lang('lang.driver_has_assigned_trips_what_to_do_with_them')</p>
                 </div>
                 <div class="mt-3">
                     <input type="checkbox" name="delete_all_drivers" id="delete_all_drivers"> @lang('lang.delete_all_drivers')
                 </div>
                 <div class="mt-3">
                     <select class="form-select" name="choose_options" id="choose_options">
                         <option value="">@lang('lang.choose_additional_options')</option>
                         <option value="">@lang('lang.delete_all_assigned_trips')</option>
                         <option value="">@lang('lang.delete_completed_trips')</option>
                         <option value="">@lang('lang.dont_delete_any_trips')</option>
                     </select>
                 </div>
                 <div class="row mt-3 text-center">
                     <div class="col-lg-6">
                         <button class="btn btn-sm btn-outline px-5" data-toggle="modal" data-target="#deletedriver" style="background-color: #ffffff; border: 1px solid #D0D5DD; border-radius: 8px; width: 100%;">@lang('lang.cancel')</button>
                     </div>
                     <div class="col-lg-6">
                         <button class="btn btn-sm btn-outline text-white px-5" data-toggle="modal" data-target="#deletedriver" style="background-color: #D92D20; border-radius: 8px; width: 100%;">@lang('lang.delete')</button>
                     </div>
                 </div>
             </div>
             <!-- <div class="modal-footer">
                    
                </div> -->
         </div>
     </div>
 </div>
 <!-- Delete Client Modal End -->