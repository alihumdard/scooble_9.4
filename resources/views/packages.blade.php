@extends('layouts.main')

@section('main-section')
<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper py-0 px-3">
    <div style="border: none;">
      <div class="bg-white" style="border-radius: 20px;">
        <div class="p-3">
          <h3 class="page-title pb-3">
            <span class="page-title-icon bg-gradient-primary text-white me-2 py-2">
              <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M23.1783 16.5241L19.5521 3.01716C19.1579 1.54862 17.353 1.00759 16.2133 2.01629L13.9278 4.039C11.3845 6.28991 8.35111 7.91891 5.06775 8.79698C2.31938 9.53199 0.690561 12.3597 1.42698 15.1028C2.16341 17.8459 4.99058 19.4819 7.73896 18.7469C11.0223 17.8688 14.4654 17.7657 17.7956 18.4459L20.7882 19.0571C22.2806 19.3619 23.5725 17.9926 23.1783 16.5241Z" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M7.53931 8.09998L11.7001 23.5" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </span> @lang('lang.packages')
          </h3>
          <form action="packageStore" id="formData" method="post">
            <div class="row">
                <div class="col-lg-12 col-lg-offset-2 ">
                    <label for="title">@lang('lang.title'):</label>
                    <input type="hidden" name="id" id="id"  value="{{ $package['id'] ?? '' }}" >
                    <input type="text" required name="title" id="title" class="form-control" value="{{ $package['title'] ?? '' }}" placeholder="@lang('lang.title')">
                </div>
                <div class="row">
                  <div class="col-lg-3">
                      <label for="price"> @lang('lang.enter_price'):</label>
                      <input type="number" required name="price" id="price" value="{{ $package['price'] ?? '' }}" class="form-control" placeholder="@lang('lang.enter_price')">
                  </div>
                  <div class="col-lg-3">
                      <label for="users"> @lang('lang.users'):</label>
                      <input type="number" required name="users" id="users" value="{{ $package['users'] ?? '' }}" class="form-control" placeholder="@lang('lang.enter_users')">
                  </div>
                  <div class="col-lg-3">
                      <label for="drivers"> @lang('lang.drivers'):</label>
                      <input type="number" required name="drivers" id="drivers" value="{{ $package['drivers'] ?? '' }}" class="form-control" placeholder="@lang('lang.enter_drivers')">
                  </div>
                  <div class="col-lg-3">
                      <label for="map_api_call"> @lang('lang.map_api_call'):</label>
                      <input type="number" required name="map_api_call" id="map_api_call" value="{{ $package['map_api_call'] ?? '' }}" class="form-control" placeholder="@lang('lang.map_api_call')">
                  </div>
                </div>               

                <div class="col-lg-12 mt-2">
                    <label for="desc"> @lang('lang.description'):</label>
                    <textarea name="desc" required id="desc" cols="30" rows="10" class="form-control" placeholder="@lang('lang.message')...">{{ $package['desc'] ?? '' }}</textarea>
                </div>
                <div class="col-lg-2 mt-4 text-center">
                    <input type="radio" required name="type" id="type" value="Advance" {{ ($package['type'] ?? '') === 'Advance' ? 'checked' : '' }}> @lang('lang.advance')
                </div>
                <div class="col-lg-2 mt-4 text-center">
                    <input type="radio" required  name="type" id="type" value="Medium" {{ ($package['type'] ?? '') === 'Medium' ? 'checked' : '' }}> @lang('lang.medium')
                </div>
                <div class="col-lg-2 mt-4 text-center">
                    <input type="radio" required name="type" id="type" value="Basic" {{ ($package['type'] ?? '') === 'Basic' ? 'checked' : '' }}> @lang('lang.basic')
                </div>
                <div class="col-lg-2 mt-4 text-center">
                    <button class="btn px-5 text-white" name="submit" style="background-color: #E45F00; border-radius: 8px;">@lang('lang.add')</button>
                </div>
            </div>
        </form>


          <hr>
          <div class="px-2">
            <div class="table-responsive">
              <table id="users-table" class="display" style="width:100%">
                <thead class="text-secondary" style="background-color: #E9EAEF;">
                  <tr style="font-size: small;">
                    <th>@lang('lang.sr').</th>
                    <th> @lang('lang.title') </th>
                    <th> @lang('lang.description') </th>
                    <th> @lang('lang.price') </th>
                    <th> @lang('lang.users') </th>
                    <th> @lang('lang.drivers') </th>
                    <th> @lang('lang.map_api_call') </th>
                    <th> @lang('lang.pack_category') </th>
                    <th> @lang('lang.created_date') </th>
                    <th>@lang('lang.actions')</th>
                  </tr>
                </thead>
                <tbody id="tableData">

                  @foreach($data as $key => $value)
                  <tr style="font-size: small;">
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $value['title'] }}</td>
                    <td>{{ $value['desc'] }}</td>
                    <td>{{ $value['price'] }}</td>
                    <td>{{ $value['users'] }}</td>
                    <td>{{ $value['drivers'] }}</td>
                    <td>{{ $value['map_api_call'] }}</td>
                    <td>{{ $value['type'] }}</td>
                    <td>{{ table_date($value['created_at'])}}</td>
                    <td style="width: 80px;">
                    <form method="POST" action="/packages" >
                      @csrf
                      <input type="hidden" name="id" value="{{$value['id']}}">
                      <button id="btn_edit_package" class="btn p-0" >
                        <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <circle opacity="0.1" cx="18" cy="18" r="18" fill="#233A85" />
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M16.1634 23.6195L22.3139 15.6658C22.6482 15.2368 22.767 14.741 22.6556 14.236C22.559 13.777 22.2768 13.3406 21.8534 13.0095L20.8208 12.1893C19.922 11.4744 18.8078 11.5497 18.169 12.3699L17.4782 13.2661C17.3891 13.3782 17.4114 13.5438 17.5228 13.6341C17.5228 13.6341 19.2684 15.0337 19.3055 15.0638C19.4244 15.1766 19.5135 15.3271 19.5358 15.5077C19.5729 15.8614 19.3278 16.1925 18.9638 16.2376C18.793 16.2602 18.6296 16.2075 18.5107 16.1097L16.676 14.6499C16.5868 14.5829 16.4531 14.5972 16.3788 14.6875L12.0185 20.3311C11.7363 20.6848 11.6397 21.1438 11.7363 21.5878L12.2934 24.0032C12.3231 24.1312 12.4345 24.2215 12.5682 24.2215L15.0195 24.1914C15.4652 24.1838 15.8812 23.9807 16.1634 23.6195ZM19.5955 22.8673H23.5925C23.9825 22.8673 24.2997 23.1886 24.2997 23.5837C24.2997 23.9795 23.9825 24.3 23.5925 24.3H19.5955C19.2055 24.3 18.8883 23.9795 18.8883 23.5837C18.8883 23.1886 19.2055 22.8673 19.5955 22.8673Z" fill="#233A85" />
                        </svg>
                      </button>
                      </form>
                      <button id="btn_dell_package" class="btn p-0" data-id=" {{$value['id']}} " data-toggle="modal" data-target="#deleteclient">
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
          </div>
        </div>
      </div>
    </div>
    <!-- content-wrapper ends -->

    <script>
      // Function to scroll to the form
      function scrollToForm() {
        const formElement = document.getElementById('formData');
        formElement.scrollIntoView({
          behavior: 'smooth',
          top: 0
        });
      }
    </script>

    @endsection