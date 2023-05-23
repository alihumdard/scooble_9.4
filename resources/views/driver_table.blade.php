 <div class="table">
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
                 <td>{{table_date($value['created_at'])}}</td>
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
                     <button id="btn_edit_client" class="btn p-0" data-client_id="{{$value['id']}}">
                         <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                             <circle opacity="0.1" cx="18" cy="18" r="18" fill="#233A85" />
                             <path fill-rule="evenodd" clip-rule="evenodd" d="M16.1634 23.6195L22.3139 15.6658C22.6482 15.2368 22.767 14.741 22.6556 14.236C22.559 13.777 22.2768 13.3406 21.8534 13.0095L20.8208 12.1893C19.922 11.4744 18.8078 11.5497 18.169 12.3699L17.4782 13.2661C17.3891 13.3782 17.4114 13.5438 17.5228 13.6341C17.5228 13.6341 19.2684 15.0337 19.3055 15.0638C19.4244 15.1766 19.5135 15.3271 19.5358 15.5077C19.5729 15.8614 19.3278 16.1925 18.9638 16.2376C18.793 16.2602 18.6296 16.2075 18.5107 16.1097L16.676 14.6499C16.5868 14.5829 16.4531 14.5972 16.3788 14.6875L12.0185 20.3311C11.7363 20.6848 11.6397 21.1438 11.7363 21.5878L12.2934 24.0032C12.3231 24.1312 12.4345 24.2215 12.5682 24.2215L15.0195 24.1914C15.4652 24.1838 15.8812 23.9807 16.1634 23.6195ZM19.5955 22.8673H23.5925C23.9825 22.8673 24.2997 23.1886 24.2997 23.5837C24.2997 23.9795 23.9825 24.3 23.5925 24.3H19.5955C19.2055 24.3 18.8883 23.9795 18.8883 23.5837C18.8883 23.1886 19.2055 22.8673 19.5955 22.8673Z" fill="#233A85" />
                         </svg>
                     </button>
                     <button id="btn_dell_client" class="btn p-0" data-id=" {{$value['id']}} " data-toggle="modal" data-target="#deleteclient">
                         <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                             <circle opacity="0.1" cx="18" cy="18" r="18" fill="#DF6F79" />
                             <path fill-rule="evenodd" clip-rule="evenodd" d="M23.4909 13.743C23.7359 13.743 23.94 13.9465 23.94 14.2054V14.4448C23.94 14.6975 23.7359 14.9072 23.4909 14.9072H13.0497C12.804 14.9072 12.6 14.6975 12.6 14.4448V14.2054C12.6 13.9465 12.804 13.743 13.0497 13.743H14.8866C15.2597 13.743 15.5845 13.4778 15.6684 13.1036L15.7646 12.6739C15.9141 12.0887 16.4061 11.7 16.9692 11.7H19.5708C20.1277 11.7 20.6252 12.0887 20.7692 12.6431L20.8721 13.1029C20.9555 13.4778 21.2802 13.743 21.654 13.743H23.4909ZM22.5577 22.4943C22.7495 20.707 23.0852 16.4609 23.0852 16.418C23.0975 16.2883 23.0552 16.1654 22.9713 16.0665C22.8812 15.9739 22.7672 15.9191 22.6416 15.9191H13.9032C13.777 15.9191 13.6569 15.9739 13.5735 16.0665C13.489 16.1654 13.4473 16.2883 13.4534 16.418C13.4546 16.4259 13.4666 16.5755 13.4868 16.8255C13.5762 17.9364 13.8255 21.0303 13.9865 22.4943C14.1005 23.5729 14.8081 24.2507 15.8332 24.2753C16.6242 24.2936 17.4391 24.2999 18.2724 24.2999C19.0573 24.2999 19.8544 24.2936 20.6699 24.2753C21.7305 24.257 22.4376 23.5911 22.5577 22.4943Z" fill="#D11A2A" />
                         </svg>
                     </button>
                 </td>
             </tr>
             @endforeach
         </tbody>
     </table>
 </div>
 <!-- Edit Client Modal -->
 <div class="modal fade" style="height: 30rem;" id="editclient" tabindex="-1" aria-labelledby="editclientLabel" aria-hidden="true">
     <div class="modal-dialog modal-lg">
         <div class="modal-content bg-white">
             <div class="modal-header">
                 <h4>
                     <svg width="30" height="30" viewBox="0 0 40 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                         <path d="M31.4294 9.97411C32.3088 9.97411 33.1139 9.53041 33.7045 8.81313C34.3312 8.05192 34.7189 6.98851 34.7189 5.80344C34.7189 4.56328 34.5953 3.45931 34.1132 2.7203C33.6749 2.04837 32.8619 1.6327 31.4294 1.6327C29.9967 1.6327 29.1837 2.04837 28.7454 2.7203C28.2634 3.45928 28.1399 4.56327 28.1399 5.80344C28.1399 6.98858 28.5275 8.05196 29.1542 8.81321C29.7448 9.53046 30.5498 9.97411 31.4294 9.97411ZM34.9609 9.84629C34.0653 10.934 32.8173 11.6068 31.4294 11.6068C30.0414 11.6068 28.7934 10.934 27.8979 9.84635C27.0386 8.8027 26.5071 7.37258 26.5071 5.80343C26.5071 4.28941 26.6854 2.89975 27.3806 1.83381C28.1196 0.700828 29.3597 0 31.4294 0C33.4989 0 34.739 0.700828 35.478 1.83381C36.1733 2.89973 36.3516 4.28942 36.3516 5.80343C36.3516 7.37257 35.8201 8.8027 34.9609 9.84629Z" fill="#452C88" />
                         <path d="M38.3622 19.5672C38.3269 17.3334 38.1782 15.9187 37.5393 15.0426C36.9554 14.2421 35.8577 13.7767 33.9257 13.3977C33.4863 13.7399 32.6659 14.2001 31.4294 14.2001C30.1927 14.2001 29.3721 13.7399 28.9328 13.3976C27.6886 13.6418 26.7904 13.9219 26.1525 14.3045C26.3657 13.6691 26.5033 13.0074 26.5655 12.3388C27.2549 12.0958 28.0701 11.8978 29.0373 11.7233L29.5127 11.6375L29.8154 12.0134C29.8167 12.015 30.2485 12.5674 31.4294 12.5674C32.6101 12.5674 33.0419 12.015 33.0431 12.0134L33.3458 11.6375L33.8212 11.7233C36.439 12.1958 37.9442 12.8397 38.8531 14.086C39.7452 15.3093 39.948 16.9773 39.9886 19.5417L39.9904 19.654C39.9952 19.9508 40 20.2447 40 20.2597L39.9043 20.6391C39.9002 20.647 38.5384 23.3776 31.4294 23.3776C31.1746 23.3776 30.928 23.3737 30.6877 23.3669C30.5748 22.7961 30.4199 22.2403 30.206 21.718C30.5888 21.7353 30.9957 21.7449 31.4294 21.7449C36.5338 21.7449 38.015 20.4502 38.367 20.0186C38.3665 19.8262 38.3653 19.7538 38.3641 19.6795L38.3622 19.5672Z" fill="#452C88" />
                         <path d="M20.0011 16.1469C21.1192 16.1469 22.1405 15.5857 22.8874 14.6784C23.6706 13.7272 24.1551 12.4014 24.1551 10.9263C24.1551 9.39622 23.9997 8.02982 23.3937 7.10081C22.8314 6.23885 21.8023 5.70567 20.0011 5.70567C18.1998 5.70567 17.1706 6.23885 16.6085 7.10081C16.0025 8.02979 15.8472 9.39619 15.8472 10.9263C15.8472 12.4014 16.3316 13.7273 17.1148 14.6785C17.8617 15.5857 18.8829 16.1469 20.0011 16.1469ZM24.1438 15.7116C23.0918 16.9893 21.6277 17.7796 20.0011 17.7796C18.3744 17.7796 16.9103 16.9893 15.8584 15.7117C14.8428 14.478 14.2145 12.7854 14.2145 10.9263C14.2145 9.12239 14.4245 7.47029 15.2437 6.21435C16.1066 4.89133 17.5627 4.073 20.0011 4.073C22.4393 4.073 23.8954 4.89133 24.7584 6.21435C25.5777 7.47026 25.7877 9.12238 25.7877 10.9263C25.7877 12.7854 25.1595 14.4779 24.1438 15.7116Z" fill="#452C88" />
                         <path d="M28.5646 27.4648C28.5212 24.726 28.3356 22.9868 27.5355 21.8897C26.7919 20.8701 25.4106 20.2868 22.979 19.8162C22.4891 20.2153 21.5143 20.7986 20.0009 20.7986C18.4874 20.7986 17.5125 20.2153 17.0227 19.8162C14.6175 20.2818 13.2396 20.8581 12.4904 21.858C11.6884 22.9285 11.4902 24.6191 11.4405 27.276L11.4386 27.3747C11.435 27.5671 11.4317 27.7407 11.4306 28.0702C11.8243 28.5803 13.612 30.2755 20.0009 30.2755C26.3899 30.2755 28.1775 28.5802 28.571 28.0701C28.5703 27.8241 28.5686 27.715 28.5668 27.6058L28.5646 27.4648L28.5646 27.4648ZM28.8493 20.933C29.9026 22.3774 30.1423 24.3699 30.1909 27.4393L30.1932 27.5804C30.1987 27.9175 30.204 28.2472 30.204 28.3058L30.1084 28.6852C30.1035 28.6944 28.5013 31.9082 20.0009 31.9082C11.5003 31.9082 9.89815 28.6944 9.8933 28.6852L9.79761 28.3058C9.79761 28.1243 9.80451 27.7619 9.81234 27.3492L9.81421 27.2505C9.87022 24.2522 10.1274 22.2998 11.1894 20.8822C12.2638 19.4482 14.0486 18.698 17.1355 18.1407L17.6099 18.0551L17.9136 18.4309C17.9152 18.433 18.4885 19.166 20.0009 19.166C21.5131 19.166 22.0864 18.433 22.088 18.4309L22.3917 18.0551L22.8661 18.1407C25.9887 18.7044 27.7792 19.4658 28.8493 20.933Z" fill="#452C88" />
                         <path d="M8.57067 9.97411C7.69121 9.97411 6.8861 9.53041 6.29555 8.81313C5.66884 8.05192 5.28112 6.98851 5.28112 5.80344C5.28112 4.56328 5.40475 3.45931 5.8868 2.7203C6.3251 2.04837 7.13813 1.6327 8.57067 1.6327C10.0033 1.6327 10.8163 2.04837 11.2546 2.7203C11.7366 3.45928 11.8602 4.56327 11.8602 5.80344C11.8602 6.98858 11.4725 8.05196 10.8458 8.81321C10.2553 9.53046 9.4502 9.97411 8.57067 9.97411ZM5.03917 9.84629C5.9347 10.934 7.18272 11.6068 8.57067 11.6068C9.95868 11.6068 11.2067 10.934 12.1022 9.84635C12.9614 8.8027 13.4929 7.37258 13.4929 5.80343C13.4929 4.28941 13.3147 2.89975 12.6194 1.83381C11.8804 0.700828 10.6404 0 8.57067 0C6.50109 0 5.26109 0.700828 4.52203 1.83381C3.82672 2.89973 3.64844 4.28942 3.64844 5.80343C3.64844 7.37257 4.17995 8.8027 5.03917 9.84629Z" fill="#452C88" />
                         <path d="M1.63775 19.5672C1.67309 17.3334 1.82178 15.9187 2.46072 15.0426C3.04455 14.2421 4.14232 13.7767 6.07432 13.3977C6.51365 13.7399 7.33412 14.2001 8.57063 14.2001C9.80729 14.2001 10.6279 13.7399 11.0672 13.3976C12.3114 13.6418 13.2096 13.9219 13.8475 14.3045C13.6343 13.6691 13.4967 13.0074 13.4345 12.3388C12.7451 12.0958 11.9299 11.8978 10.9627 11.7233L10.4873 11.6375L10.1846 12.0134C10.1833 12.015 9.75154 12.5674 8.57061 12.5674C7.38994 12.5674 6.95811 12.015 6.95684 12.0134L6.65422 11.6375L6.17876 11.7233C3.56096 12.1958 2.05578 12.8397 1.14691 14.086C0.254751 15.3093 0.0519756 16.9773 0.0114196 19.5417L0.00961147 19.654C0.00479063 19.9508 0 20.2447 0 20.2597L0.0956931 20.6391C0.0997908 20.647 1.46155 23.3776 8.57061 23.3776C8.82542 23.3776 9.072 23.3737 9.31226 23.3669C9.42519 22.7961 9.58012 22.2403 9.79402 21.718C9.41115 21.7353 9.00424 21.7449 8.57061 21.7449C3.46618 21.7449 1.98503 20.4502 1.63296 20.0186C1.63351 19.8262 1.63471 19.7538 1.63592 19.6795L1.63775 19.5672Z" fill="#452C88" />
                     </svg>
                     Add Client
                 </h4>
             </div>
             <form action="{{'/user_store'}}" style="width: 100%;" method="post">
                 @csrf
                 <input type="hidden" name="_previous" value="{{url()->previous()}}">
                 <input type="hidden" id="client_id" name="id">
                 <input type="hidden" id="user_role" name="role">
                 <div class="modal-body">
                     <div class="row">
                         <div class="col-lg-6 mb-2">
                             <div class="file-input-container" id="fileDropzone1" onclick="openFileInput()">
                                 <label class="file-input-label">Upload Image</label>
                                 <input class="file-input" name="user_pic" type="file" id="fileInput" onchange="handleFileChange(event)">
                                 <div class="file-input-icon" style="margin-left: 25rem;">
                                     <svg width="20" height="20" viewBox="0 0 42 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                         <path fill-rule="evenodd" clip-rule="evenodd" d="M11.2938 5.41268C11.4286 5.22532 11.5783 4.99595 11.7692 4.68667C11.8761 4.51336 12.2664 3.86782 12.3302 3.76348C13.9071 1.18395 15.0534 0 17.1205 0H24.7295C26.7966 0 27.9429 1.18395 29.5198 3.76348C29.5836 3.86782 29.9739 4.51336 30.0808 4.68667C30.2717 4.99595 30.4214 5.22532 30.5562 5.41268C30.645 5.53624 30.7227 5.63442 30.786 5.70682H36.1432C39.295 5.70682 41.85 8.26185 41.85 11.4136V28.5341C41.85 31.6859 39.295 34.2409 36.1432 34.2409H5.70682C2.55503 34.2409 0 31.6859 0 28.5341V11.4136C0 8.26185 2.55503 5.70682 5.70682 5.70682H11.064C11.1273 5.63442 11.205 5.53624 11.2938 5.41268ZM5.70682 9.51136C4.65622 9.51136 3.80455 10.363 3.80455 11.4136V28.5341C3.80455 29.5847 4.65622 30.4364 5.70682 30.4364H36.1432C37.1938 30.4364 38.0455 29.5847 38.0455 28.5341V11.4136C38.0455 10.363 37.1938 9.51136 36.1432 9.51136H30.4364C29.1726 9.51136 28.3203 8.81971 27.4677 7.63431C27.2715 7.36156 27.0771 7.06374 26.8432 6.68476C26.7251 6.49337 26.329 5.83823 26.2738 5.74788C25.4134 4.34046 24.8945 3.80455 24.7295 3.80455H17.1205C16.9555 3.80455 16.4366 4.34046 15.5762 5.74788C15.521 5.83823 15.1249 6.49337 15.0068 6.68476C14.7729 7.06374 14.5785 7.36156 14.3823 7.63431C13.5297 8.81971 12.6774 9.51136 11.4136 9.51136H5.70682ZM34.2409 15.2182C35.2915 15.2182 36.1432 14.3665 36.1432 13.3159C36.1432 12.2653 35.2915 11.4136 34.2409 11.4136C33.1903 11.4136 32.3386 12.2653 32.3386 13.3159C32.3386 14.3665 33.1903 15.2182 34.2409 15.2182ZM20.925 28.5341C15.672 28.5341 11.4136 24.2757 11.4136 19.0227C11.4136 13.7697 15.672 9.51136 20.925 9.51136C26.178 9.51136 30.4364 13.7697 30.4364 19.0227C30.4364 24.2757 26.178 28.5341 20.925 28.5341ZM20.925 24.7295C24.0768 24.7295 26.6318 22.1745 26.6318 19.0227C26.6318 15.8709 24.0768 13.3159 20.925 13.3159C17.7732 13.3159 15.2182 15.8709 15.2182 19.0227C15.2182 22.1745 17.7732 24.7295 20.925 24.7295Z" fill="#D9D9D9" />
                                     </svg>
                                 </div>
                             </div>
                         </div>
                         <div class="col-lg-6 mb-2">
                             <div class="file-input-container">
                                 <label class="file-input-label" for="fileInput" id="fileInput1Label1">Company Logo</label>
                                 <input class="file-input" type="file" name="com_pic" id="fileInput1" onchange="updateLabel()">
                                 <div class="file-input-icon" style="margin-left: 25rem;" onclick="document.getElementById('fileInput1').click()">
                                     <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                         <path d="M1 11.4211V17.1054C1 18.1518 1.8483 19.0001 2.89474 19.0001H16.1579C17.2044 19.0001 18.0526 18.1518 18.0526 17.1054V11.4211" stroke="#ACADAE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                         <path d="M9.52615 14.2632V1M9.52615 1L4.78931 6.15791M9.52615 1L14.263 6.15789" stroke="#ACADAE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                     </svg>
                                 </div>
                             </div>
                         </div>
                         <div class="col-lg-6 mt-2">
                             <label for="client_name">Name</label>
                             <input type="text" required name="client_name" id="client_name" class="form-control">
                         </div>
                         <div class="col-lg-6 mt-2">
                             <label for="email">E-mail</label>
                             <input type="email" required name="email" id="email" class="form-control">
                         </div>
                         <div class="col-lg-6 mt-2">
                             <label for="phone">Phone</label>
                             <input type="tel" name="phone" id="phone" class="form-control">
                         </div>
                         <div class="col-lg-6 mt-2">
                             <label for="company_name">Company Name</label>
                             <input type="text" name="company_name" id="company_name" class="form-control">
                         </div>
                         <div class="col-lg-6 mt-2">
                             <label for="address">Address</label>
                             <input type="text" name="address" id="address" class="form-control">
                         </div>
                         <div class="col-lg-6 mt-2">
                             <label for="start_date">Joining Date</label>
                             <input type="datetime-local" name="joining_date" id="joining_date" class="form-control">
                         </div>
                     </div>
                 </div>
                 <div class="modal-footer" style="border: none;">
                     <button class="btn btn-sm text-white px-5" style="background-color: #233A85; border-radius: 8px;"> @lang('lang.save')</button>
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