  <style>
    .form-image {
      object-fit: contain;
    }
  </style>

  <!-- Add Client Modal -->
  <div class="modal fade" id="addclient" tabindex="-1" aria-labelledby="addclientLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content bg-white">
        <div class="modal-header pb-0" style="border-bottom: none;">
          <h4>
            <svg width="30" height="30" viewBox="0 0 40 32" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M31.4294 9.97411C32.3088 9.97411 33.1139 9.53041 33.7045 8.81313C34.3312 8.05192 34.7189 6.98851 34.7189 5.80344C34.7189 4.56328 34.5953 3.45931 34.1132 2.7203C33.6749 2.04837 32.8619 1.6327 31.4294 1.6327C29.9967 1.6327 29.1837 2.04837 28.7454 2.7203C28.2634 3.45928 28.1399 4.56327 28.1399 5.80344C28.1399 6.98858 28.5275 8.05196 29.1542 8.81321C29.7448 9.53046 30.5498 9.97411 31.4294 9.97411ZM34.9609 9.84629C34.0653 10.934 32.8173 11.6068 31.4294 11.6068C30.0414 11.6068 28.7934 10.934 27.8979 9.84635C27.0386 8.8027 26.5071 7.37258 26.5071 5.80343C26.5071 4.28941 26.6854 2.89975 27.3806 1.83381C28.1196 0.700828 29.3597 0 31.4294 0C33.4989 0 34.739 0.700828 35.478 1.83381C36.1733 2.89973 36.3516 4.28942 36.3516 5.80343C36.3516 7.37257 35.8201 8.8027 34.9609 9.84629Z" fill="#452C88" />
              <path d="M38.3622 19.5672C38.3269 17.3334 38.1782 15.9187 37.5393 15.0426C36.9554 14.2421 35.8577 13.7767 33.9257 13.3977C33.4863 13.7399 32.6659 14.2001 31.4294 14.2001C30.1927 14.2001 29.3721 13.7399 28.9328 13.3976C27.6886 13.6418 26.7904 13.9219 26.1525 14.3045C26.3657 13.6691 26.5033 13.0074 26.5655 12.3388C27.2549 12.0958 28.0701 11.8978 29.0373 11.7233L29.5127 11.6375L29.8154 12.0134C29.8167 12.015 30.2485 12.5674 31.4294 12.5674C32.6101 12.5674 33.0419 12.015 33.0431 12.0134L33.3458 11.6375L33.8212 11.7233C36.439 12.1958 37.9442 12.8397 38.8531 14.086C39.7452 15.3093 39.948 16.9773 39.9886 19.5417L39.9904 19.654C39.9952 19.9508 40 20.2447 40 20.2597L39.9043 20.6391C39.9002 20.647 38.5384 23.3776 31.4294 23.3776C31.1746 23.3776 30.928 23.3737 30.6877 23.3669C30.5748 22.7961 30.4199 22.2403 30.206 21.718C30.5888 21.7353 30.9957 21.7449 31.4294 21.7449C36.5338 21.7449 38.015 20.4502 38.367 20.0186C38.3665 19.8262 38.3653 19.7538 38.3641 19.6795L38.3622 19.5672Z" fill="#452C88" />
              <path d="M20.0011 16.1469C21.1192 16.1469 22.1405 15.5857 22.8874 14.6784C23.6706 13.7272 24.1551 12.4014 24.1551 10.9263C24.1551 9.39622 23.9997 8.02982 23.3937 7.10081C22.8314 6.23885 21.8023 5.70567 20.0011 5.70567C18.1998 5.70567 17.1706 6.23885 16.6085 7.10081C16.0025 8.02979 15.8472 9.39619 15.8472 10.9263C15.8472 12.4014 16.3316 13.7273 17.1148 14.6785C17.8617 15.5857 18.8829 16.1469 20.0011 16.1469ZM24.1438 15.7116C23.0918 16.9893 21.6277 17.7796 20.0011 17.7796C18.3744 17.7796 16.9103 16.9893 15.8584 15.7117C14.8428 14.478 14.2145 12.7854 14.2145 10.9263C14.2145 9.12239 14.4245 7.47029 15.2437 6.21435C16.1066 4.89133 17.5627 4.073 20.0011 4.073C22.4393 4.073 23.8954 4.89133 24.7584 6.21435C25.5777 7.47026 25.7877 9.12238 25.7877 10.9263C25.7877 12.7854 25.1595 14.4779 24.1438 15.7116Z" fill="#452C88" />
              <path d="M28.5646 27.4648C28.5212 24.726 28.3356 22.9868 27.5355 21.8897C26.7919 20.8701 25.4106 20.2868 22.979 19.8162C22.4891 20.2153 21.5143 20.7986 20.0009 20.7986C18.4874 20.7986 17.5125 20.2153 17.0227 19.8162C14.6175 20.2818 13.2396 20.8581 12.4904 21.858C11.6884 22.9285 11.4902 24.6191 11.4405 27.276L11.4386 27.3747C11.435 27.5671 11.4317 27.7407 11.4306 28.0702C11.8243 28.5803 13.612 30.2755 20.0009 30.2755C26.3899 30.2755 28.1775 28.5802 28.571 28.0701C28.5703 27.8241 28.5686 27.715 28.5668 27.6058L28.5646 27.4648L28.5646 27.4648ZM28.8493 20.933C29.9026 22.3774 30.1423 24.3699 30.1909 27.4393L30.1932 27.5804C30.1987 27.9175 30.204 28.2472 30.204 28.3058L30.1084 28.6852C30.1035 28.6944 28.5013 31.9082 20.0009 31.9082C11.5003 31.9082 9.89815 28.6944 9.8933 28.6852L9.79761 28.3058C9.79761 28.1243 9.80451 27.7619 9.81234 27.3492L9.81421 27.2505C9.87022 24.2522 10.1274 22.2998 11.1894 20.8822C12.2638 19.4482 14.0486 18.698 17.1355 18.1407L17.6099 18.0551L17.9136 18.4309C17.9152 18.433 18.4885 19.166 20.0009 19.166C21.5131 19.166 22.0864 18.433 22.088 18.4309L22.3917 18.0551L22.8661 18.1407C25.9887 18.7044 27.7792 19.4658 28.8493 20.933Z" fill="#452C88" />
              <path d="M8.57067 9.97411C7.69121 9.97411 6.8861 9.53041 6.29555 8.81313C5.66884 8.05192 5.28112 6.98851 5.28112 5.80344C5.28112 4.56328 5.40475 3.45931 5.8868 2.7203C6.3251 2.04837 7.13813 1.6327 8.57067 1.6327C10.0033 1.6327 10.8163 2.04837 11.2546 2.7203C11.7366 3.45928 11.8602 4.56327 11.8602 5.80344C11.8602 6.98858 11.4725 8.05196 10.8458 8.81321C10.2553 9.53046 9.4502 9.97411 8.57067 9.97411ZM5.03917 9.84629C5.9347 10.934 7.18272 11.6068 8.57067 11.6068C9.95868 11.6068 11.2067 10.934 12.1022 9.84635C12.9614 8.8027 13.4929 7.37258 13.4929 5.80343C13.4929 4.28941 13.3147 2.89975 12.6194 1.83381C11.8804 0.700828 10.6404 0 8.57067 0C6.50109 0 5.26109 0.700828 4.52203 1.83381C3.82672 2.89973 3.64844 4.28942 3.64844 5.80343C3.64844 7.37257 4.17995 8.8027 5.03917 9.84629Z" fill="#452C88" />
              <path d="M1.63775 19.5672C1.67309 17.3334 1.82178 15.9187 2.46072 15.0426C3.04455 14.2421 4.14232 13.7767 6.07432 13.3977C6.51365 13.7399 7.33412 14.2001 8.57063 14.2001C9.80729 14.2001 10.6279 13.7399 11.0672 13.3976C12.3114 13.6418 13.2096 13.9219 13.8475 14.3045C13.6343 13.6691 13.4967 13.0074 13.4345 12.3388C12.7451 12.0958 11.9299 11.8978 10.9627 11.7233L10.4873 11.6375L10.1846 12.0134C10.1833 12.015 9.75154 12.5674 8.57061 12.5674C7.38994 12.5674 6.95811 12.015 6.95684 12.0134L6.65422 11.6375L6.17876 11.7233C3.56096 12.1958 2.05578 12.8397 1.14691 14.086C0.254751 15.3093 0.0519756 16.9773 0.0114196 19.5417L0.00961147 19.654C0.00479063 19.9508 0 20.2447 0 20.2597L0.0956931 20.6391C0.0997908 20.647 1.46155 23.3776 8.57061 23.3776C8.82542 23.3776 9.072 23.3737 9.31226 23.3669C9.42519 22.7961 9.58012 22.2403 9.79402 21.718C9.41115 21.7353 9.00424 21.7449 8.57061 21.7449C3.46618 21.7449 1.98503 20.4502 1.63296 20.0186C1.63351 19.8262 1.63471 19.7538 1.63592 19.6795L1.63775 19.5672Z" fill="#452C88" />
            </svg>
            Add {{$add_as_user}}
          </h4>
          <button type="button" class="close" data-dismiss="modal" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="userStore" id="formData" method="post" enctype="multipart/form-data">
          @csrf
          <input type="hidden" id="role" name="role" value="{{isset($add_as_user) ? $add_as_user : ''}}">
          <input type="hidden" id="id" name="id">
          @php
          if(isset($add_as_user) && $add_as_user != user_roles('3')){
              $user->id = '';
          }
          @endphp
          @if($add_as_user == user_roles('3') && $user->role != user_roles('1'))
          <input type="hidden" id="client_id" name="client_id" value="{{isset($user->id) ? $user->id : ''}}">
          @endif
          <div class="modal-body pt-0">
            <div class="row">
              <div class="col-lg-6 mb-2">
                <label for="user_pic">@lang('lang.upload_image')</label>
                <div class="row">
                  <div class="col-lg-10">
                    <input type="file" name="user_pic" id="user_pic" class="form-control" require>
                  </div>
                  <div class="col-lg-2">
                    <img src="abc.png" width="100%" height="100%" style="border-radius: 50%;" id="user_pic" class="d-none" alt="No image selected">
                  </div>
                </div>
              </div>
              @if($add_as_user == user_roles('3') && $user->role == user_roles('1'))
              <div class="col-lg-6 mb-2">
                <label for="com_pic">@lang('lang.client')</label>
                <select required name="client_id" id="client_id" class="form-select">
                  <option disabled selected>select_client </option>
                       @foreach($client_list as $value)
                      <option value="{{ $value['id'] }}" {{ isset($data['client_id']) && $data['client_id'] == $value['id'] ? 'selected' : '' }}>
                          {{ $value['name'] }}
                      </option>
                  @endforeach
                </select>
              </div>
              @else
              @if($add_as_user !== user_roles('3'))
              <div class="col-lg-6 mb-2">
                <label for="com_pic">@lang('lang.company_logo')</label>
                <div class="row">
                  <div class="col-lg-10">
                    <input type="file" name="com_pic" id="com_pic" class="form-control" require>
                  </div>
                  <div class="col-lg-2">
                    <img src="abc.png" width="100%" height="  100%" style="border-radius: 50%;" id="com_pic" class="d-none" alt="No image selected">
                  </div>
                </div>
              </div>
              @endif
              @endif
              <div class="col-lg-6 mt-2">
                <label for="name">@lang('lang.name')</label>
                <input type="text"  name="name" id="name" class="form-control" require>
              </div>
              <div class="col-lg-6 mt-2">
                <label for="email">@lang('lang.email')</label>
                <input type="email"  name="email" id="email" class="form-control" require>
              </div>
              <div class="col-lg-6 mt-2">
                <label for="phone">@lang('lang.phone')</label>
                <input type="tel" name="phone" id="phone" class="form-control" require>
              </div>
              @if($add_as_user !== user_roles('3'))
              <div class="col-lg-6 mt-2">
                <label for="com_name">@lang('lang.company_name')</label>
                <input type="text" name="com_name" id="com_name" class="form-control" require>
              </div>
              @endif
              <div class="col-lg-6 mt-2">
                <label for="address">@lang('lang.address')</label>
                <input type="text" name="address" id="address" class="form-control" require>
              </div>
              @if($add_as_user == user_roles('3'))
              <div class="col-lg-6 mt-2">
                <!-- <label for="note">@lang('lang.note')</label> -->
                <!-- <input type="text" name="note" id="note" class="form-control" require> -->
              </div>
              @endif
              <div class="col-lg-6"></div>
              <div class="col-lg-6 mt-3">
                <div class="row py-4">
                  <div class="col-lg-6">
                    <button type="button" class="btn btn-sm btn-outline px-5" data-dismiss="modal" data-bs-dismiss="modal" style="background-color: #ffffff; border: 1px solid #D0D5DD; border-radius: 8px; width: 100%;">@lang('lang.cancel')</button>
                  </div>
                  <div class="col-lg-6">
                    <button type="submit" id="btn_save" class="btn btn-sm text-white px-5" data-target="#add" style="background-color: #E45F00; border-radius: 8px; width: 100%;">
                      <div class="spinner-border spinner-border-sm text-white d-none" id="spinner"></div>
                      <span id="add_btn">@lang('lang.add')</span>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- Add Client Modal End -->