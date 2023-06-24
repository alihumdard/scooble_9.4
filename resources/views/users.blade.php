@extends('layouts.main')

@section('main-section')
<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper py-0 px-3">
    <div style="border: none;">
      <div class="bg-white" style="border-radius: 20px;">
        <div class="p-3">
          <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white me-2 py-2">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M18.14 21.62C17.26 21.88 16.22 22 15 22H8.99998C7.77998 22 6.73999 21.88 5.85999 21.62C6.07999 19.02 8.74998 16.97 12 16.97C15.25 16.97 17.92 19.02 18.14 21.62Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M15 2H9C4 2 2 4 2 9V15C2 18.78 3.14 20.85 5.86 21.62C6.08 19.02 8.75 16.97 12 16.97C15.25 16.97 17.92 19.02 18.14 21.62C20.86 20.85 22 18.78 22 15V9C22 4 20 2 15 2ZM12 14.17C10.02 14.17 8.42 12.56 8.42 10.58C8.42 8.60002 10.02 7 12 7C13.98 7 15.58 8.60002 15.58 10.58C15.58 12.56 13.98 14.17 12 14.17Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M15.58 10.58C15.58 12.56 13.98 14.17 12 14.17C10.02 14.17 8.41998 12.56 8.41998 10.58C8.41998 8.60002 10.02 7 12 7C13.98 7 15.58 8.60002 15.58 10.58Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </span> @lang('lang.users')
          </h3>
          <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-8">
              <div class="row mx-1">
                <div class="col-lg-4 px-1" style="text-align: right;">
                  <button class="btn btn-md text-white" data-toggle="modal" data-target="#addclient" style="background-color: #E45F00;"><i class="fa fa-plus"></i> @lang('lang.add_user')</button>
                </div>
                <div class="col-lg-4 px-1">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text bg-white" style="border-right: none; border: 1px solid #DDDDDD;">
                        <svg width="11" height="15" viewBox="0 0 11 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M7.56221 14.0648C7.58971 14.3147 7.52097 14.5814 7.36287 14.7563C7.29927 14.8336 7.22373 14.8949 7.14058 14.9367C7.05742 14.9785 6.96827 15 6.87825 15C6.78822 15 6.69907 14.9785 6.61592 14.9367C6.53276 14.8949 6.45722 14.8336 6.39363 14.7563L3.63713 11.4151C3.56216 11.3263 3.50516 11.2176 3.47057 11.0977C3.43599 10.9777 3.42477 10.8496 3.43779 10.7235V6.45746L0.145116 1.34982C0.0334875 1.17612 -0.0168817 0.955919 0.005015 0.737342C0.0269117 0.518764 0.119294 0.319579 0.261975 0.183308C0.392582 0.0666576 0.536937 0 0.688166 0H10.3118C10.4631 0 10.6074 0.0666576 10.738 0.183308C10.8807 0.319579 10.9731 0.518764 10.995 0.737342C11.0169 0.955919 10.9665 1.17612 10.8549 1.34982L7.56221 6.45746V14.0648ZM2.09047 1.66644L4.81259 5.88254V10.4819L6.1874 12.1484V5.8742L8.90953 1.66644H2.09047Z" fill="#323C47" />
                        </svg>
                      </div>
                    </div>
                    <select name="filter_by_sts" id="filter_by_sts" class="form-select" style="border-left: none;">
                      <option value="">
                        @lang('lang.filter_by_status')
                      </option>
                    </select>
                  </div>
                </div>
                <div class="col-lg-4 px-1">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text bg-white" style="border-right: none; border: 1px solid #DDDDDD;">
                        <svg width="18" height="15" viewBox="0 0 18 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M13.6752 0.558058C13.4311 0.313981 13.0354 0.313981 12.7913 0.558058L8.81386 4.53553C8.56978 4.77961 8.56978 5.17534 8.81386 5.41942C9.05794 5.6635 9.45366 5.6635 9.69774 5.41942L13.2333 1.88388L16.7688 5.41942C17.0129 5.6635 17.4086 5.6635 17.6527 5.41942C17.8968 5.17534 17.8968 4.77961 17.6527 4.53553L13.6752 0.558058ZM12.6083 14C12.6083 14.3452 12.8881 14.625 13.2333 14.625C13.5785 14.625 13.8583 14.3452 13.8583 14H12.6083ZM12.6083 1V14H13.8583V1H12.6083Z" fill="#323C47" />
                          <path d="M5.625 1C5.625 0.654822 5.34518 0.375 5 0.375C4.65482 0.375 4.375 0.654822 4.375 1H5.625ZM4.55806 14.4419C4.80214 14.686 5.19786 14.686 5.44194 14.4419L9.41942 10.4645C9.6635 10.2204 9.6635 9.82466 9.41942 9.58058C9.17534 9.3365 8.77961 9.3365 8.53553 9.58058L5 13.1161L1.46447 9.58058C1.22039 9.3365 0.82466 9.3365 0.580583 9.58058C0.336505 9.82466 0.336505 10.2204 0.580583 10.4645L4.55806 14.4419ZM4.375 1V14H5.625V1H4.375Z" fill="#323C47" />
                        </svg>
                      </div>
                    </div>
                    <select name="sort_by" id="sort_by" class="form-select" style="border-left: none;">
                      <option value="">
                        @lang('lang.sort_by')
                      </option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <hr>
          <div class="px-2">
            <div class="table-responsive">
              <div id="table_reload" class="table">
                <table id="users-table" class="display" style="width:100%">
                  <thead class="text-secondary" style="background-color: #E9EAEF;">
                    <tr style="font-size: small;">
                      <th>#</th>
                      <th>@lang('lang.name')</th>
                      <th>@lang('lang.joining_date')</th>
                      <th>@lang('lang.address')</th>
                      <th>@lang('lang.role')</th>
                      <th>@lang('lang.email')</th>
                      <th>@lang('lang.status')</th>
                      <th>@lang('lang.actions')</th>
                    </tr>
                  </thead>
                  <tbody>

                    @foreach($data as $key => $value)
                    <tr style="font-size: small;">
                      <td>{{$value['id']}}</td>
                      <td><img src="{{ asset('storage/' . $value['user_pic']) }}" style="width: 45px; height: 43px; border-radius: 38px;" alt="text"> {{ $value['name'] }} </td>
                      <td>{{table_date($value['created_at'])}}</td>
                      <td>{{ $value['address'] }}</td>
                      <td>{{ $value['role'] }}</td>
                      <td>{{ $value['email'] }}</td>
                      @if($value['status'] == 1)
                      <td>
                        <button class="btn btn_status">
                          <span class="badge" data-client_id="{{$value['id']}}" style="background-color: #31A6132E; color: #31A613;"> @lang('lang.active') </span>
                        </button>
                      </td>
                      @elseif($value['status'] == 2)
                      <td>
                        <button class="btn btn_status">
                          <span class="badge" data-client_id="{{$value['id']}}" style="background-color: #4D4D4D1F; color: #8F9090;"> @lang('lang.pending') </span>
                        </button>
                      </td>
                      @else
                      <td>
                        <button class="btn btn_status">
                          <span class="badge" data-client_id="{{$value['id']}}" style="background-color: #F5222D30; color: #F5222D;"> @lang('lang.suspend') </span>
                        </button>
                      </td>
                      @endif

                      <td>
                        <button id="btn_edit_client" class="btn p-0" data-client_id="{{$value['id']}}" data-api_name ="{{'users'}}"><svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
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
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- content-wrapper ends -->

  <!-- Add User Modal -->
  <div class="modal fade" id="adduser" tabindex="-1" aria-labelledby="adduserLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content bg-white">
        <div class="modal-header">
          <h5 class="modal-title" id="editLabel"></h5>
          <h5>@lang('lang.what_type_of_user_you_want_to_create')</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <select name="select_user_role" id="select_user_role" class="form-select">
            <option value="">@lang('lang.select_user_role')</option>
            <option value="">@lang('lang.add_admin')</option>
            <option value="">@lang('lang.add_client')</option>
            <option value="">@lang('lang.add_driver')</option>
          </select>
        </div>
        <div class="row my-3 mx-1">
          <div class="col-lg-6">
            <button class="btn btn-sm btn-outline px-5" data-toggle="modal" data-target="#cancel" style="background-color: #ffffff; border: 1px solid #D0D5DD; border-radius: 8px; width: 100%;">@lang('lang.no_cancel')</button>
          </div>
          <div class="col-lg-6">
            <button class="btn btn-sm btn-outline text-white px-5" data-toggle="modal" data-target="#confirmmodal" style="background-color: #233A85; border-radius: 8px; width: 100%;">@lang('lang.yes_confirm')</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Add User Modal End -->
  @php
  $user_role_static = 'Admin';
  @endphp

  @include('usermodal')

  <!-- <div class="modal fade" style="height: 30rem;" id="addclient" tabindex="-1" aria-labelledby="addclientLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content bg-white">
        <div class="modal-header pb-0" style="border-bottom: none;">
          <h4>
            <svg width="30" height="30" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M25.4542 30.5292C24.1709 30.9084 22.6542 31.0834 20.8751 31.0834H12.1251C10.3459 31.0834 8.8292 30.9084 7.5459 30.5292C7.8667 26.7375 11.7605 23.7479 16.5001 23.7479C21.2396 23.7479 25.1334 26.7375 25.4542 30.5292Z" stroke="#452C88" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
              <path d="M20.8751 1.9167H12.1251C4.8334 1.9167 1.9167 4.8334 1.9167 12.1251V20.8751C1.9167 26.3876 3.5792 29.4063 7.5459 30.5292C7.8667 26.7376 11.7605 23.748 16.5001 23.748C21.2397 23.748 25.1334 26.7376 25.4542 30.5292C29.4209 29.4063 31.0834 26.3876 31.0834 20.8751V12.1251C31.0834 4.8334 28.1667 1.9167 20.8751 1.9167ZM16.5001 19.6646C13.6126 19.6646 11.2792 17.3168 11.2792 14.4293C11.2792 11.5418 13.6126 9.2084 16.5001 9.2084C19.3876 9.2084 21.7209 11.5418 21.7209 14.4293C21.7209 17.3168 19.3876 19.6646 16.5001 19.6646Z" stroke="#452C88" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
              <path d="M21.7207 14.4292C21.7207 17.3167 19.3874 19.6646 16.4999 19.6646C13.6124 19.6646 11.2791 17.3167 11.2791 14.4292C11.2791 11.5417 13.6124 9.2084 16.4999 9.2084C19.3874 9.2084 21.7207 11.5417 21.7207 14.4292Z" stroke="#452C88" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            Add User
          </h4>
          <button type="button" class="close" data-dismiss="modal" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="userStore" id="formData" method="post" enctype="multipart/form-data">
          @csrf
          <input type="hidden" id="role" name="role" value="Admin">
          <input type="hidden" id="client_id" name="id">
          <div class="modal-body pt-0">
            <div class="row">
              <div class="col-lg-6 mb-2">
                <label for="user_pic">Upload Image</label>
                <input type="file" name="user_pic" id="user_pic" class="form-control">
              </div>
              <div class="col-lg-6 mb-2">
                <label for="com_pic">Company Logo</label>
                <input type="file" name="com_pic" id="com_pic" class="form-control">
              </div>
              <div class="col-lg-6 mt-2">
                <label for="name">Name</label>
                <input type="text" required name="name" id="name" class="form-control">
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
                <label for="com_name">Company Name</label>
                <input type="text" name="com_name" id="com_name" class="form-control">
              </div>
              <div class="col-lg-6 mt-2">
                <label for="address">Address</label>
                <input type="text" name="address" id="address" class="form-control">
              </div>
              <div class="col-lg-6 mt-3">
                <div class="row py-4">
                  <div class="col-lg-6">
                    <button data-bs-dismiss="modal" data-dismiss="modal" type="button" class="btn btn-sm btn-outline px-5" style="background-color: #ffffff; border: 1px solid #D0D5DD; border-radius: 8px; width: 100%;">@lang('lang.cancel')</button>

                  </div>

                  <div class="col-lg-6">
                    <button type="submit" id="btn_save" class="btn btn-sm text-white px-5" data-target="#add" style="background-color: #E45F00; border-radius: 8px; width: 100%;">@lang('lang.add')</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div> -->

  <!-- Delete Client Modal -->
  <div class="modal fade" id="deleteclient" tabindex="-1" aria-labelledby="deleteclientLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content bg-white">
        <div class="modal-body">
          <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle opacity="0.1" cx="18" cy="18" r="18" fill="#DF6F79" />
            <path fill-rule="evenodd" clip-rule="evenodd" d="M23.4909 13.743C23.7359 13.743 23.94 13.9465 23.94 14.2054V14.4448C23.94 14.6975 23.7359 14.9072 23.4909 14.9072H13.0497C12.804 14.9072 12.6 14.6975 12.6 14.4448V14.2054C12.6 13.9465 12.804 13.743 13.0497 13.743H14.8866C15.2597 13.743 15.5845 13.4778 15.6684 13.1036L15.7646 12.6739C15.9141 12.0887 16.4061 11.7 16.9692 11.7H19.5708C20.1277 11.7 20.6252 12.0887 20.7692 12.6431L20.8721 13.1029C20.9555 13.4778 21.2802 13.743 21.654 13.743H23.4909ZM22.5577 22.4943C22.7495 20.707 23.0852 16.4609 23.0852 16.418C23.0975 16.2883 23.0552 16.1654 22.9713 16.0665C22.8812 15.9739 22.7672 15.9191 22.6416 15.9191H13.9032C13.777 15.9191 13.6569 15.9739 13.5735 16.0665C13.489 16.1654 13.4473 16.2883 13.4534 16.418C13.4546 16.4259 13.4666 16.5755 13.4868 16.8255C13.5762 17.9364 13.8255 21.0303 13.9865 22.4943C14.1005 23.5729 14.8081 24.2507 15.8332 24.2753C16.6242 24.2936 17.4391 24.2999 18.2724 24.2999C19.0573 24.2999 19.8544 24.2936 20.6699 24.2753C21.7305 24.257 22.4376 23.5911 22.5577 22.4943Z" fill="#D11A2A" />
          </svg>
          <div class="mt-3">
            <h6>@lang('lang.really_want_to_delete_user')</h6>
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
      </div>
    </div>
  </div>
  <!-- Delete Client Modal End -->

  <!-- User Status Modal -->
  <div class="modal fade" id="user_sts" tabindex="-1" aria-labelledby="user_stsLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content bg-white">
        <div class="modal-header">
          <h5 class="modal-title" id="user_stsLabel"></h5>
          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form method="post" id="user_sts">
          @csrf
          <input type="hidden" name="_previous" value="{{url()->previous()}}">
          <input type="hidden" id="client_id" name="id">
          <div class="modal-body">
            <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect x="4" y="4" width="48" height="48" rx="24" fill="#D1FADF" />
              <path d="M23.5 28L26.5 31L32.5 25M38 28C38 33.5228 33.5228 38 28 38C22.4772 38 18 33.5228 18 28C18 22.4772 22.4772 18 28 18C33.5228 18 38 22.4772 38 28Z" stroke="#039855" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
              <rect x="4" y="4" width="48" height="48" rx="24" stroke="#ECFDF3" stroke-width="8" />
            </svg>
            <select name="status" id="status" class="form-select mt-3">
              <option value="1">@lang('lang.activate')</option>
              <option value="3">@lang('lang.suspend')</option>
            </select>
          </div>
          <div class="modal-footer">
            <button class="btn btn-sm text-white px-5" id="change_sts" name="change_sts" type="submit" style="background-color: #233A85; border-radius: 8px;">@lang('lang.ok')</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- User Status Modal End -->

  @endsection