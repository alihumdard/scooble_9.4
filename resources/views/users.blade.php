@extends('layouts.main')

@section('main-section')
<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper py-0">
    <!-- <div class="page-header"> -->
    <!-- <nav aria-label="breadcrumb">
        <ul class="breadcrumb">
          <li class="breadcrumb-item active" aria-current="page">
            <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
          </li>
        </ul>
      </nav> -->
    <!-- </div> -->
    <div class="card" style="border: none;">
      <div class="card-header bg-white">
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
                <button class="btn btn-sm text-white" data-toggle="modal" data-target="#adduser" style="background-color: #E45F00; border-radius: 8px;"><i class="fa fa-plus"></i> @lang('lang.add_user')</button>
              </div>
              <div class="col-lg-4 px-1">
                <select name="filter_by_sts" id="filter_by_sts" class="form-select" style="border-radius: 10px;">
                  <option value=""><i class="fa-solid fa-edit text-dark"></i> @lang('lang.filter_by_status')</option>
                </select>
              </div>
              <div class="col-lg-4 px-1">
                <select name="sort_by" id="sort_by" class="form-select" style="border-radius: 10px;">
                  <option value=""><i class="fa-solid fa-edit text-dark"></i> @lang('lang.sort_by')</option>
                </select>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="card-body px-0">
        <div class="table-responsive">
          @include("users_table")
        </div>
      </div>
    </div>
  </div>
</div>
<!-- content-wrapper ends -->

<!-- Add User Modal -->
<div class="modal fade" id="" tabindex="-1" aria-labelledby="adduserLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
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

<!-- Confirm Modal -->
<div class="modal fade" id="adduser" tabindex="-1" aria-labelledby="confirmmodalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- <div class="modal-header">
          <h5 class="modal-title" id="confirmmodalLabel"></h5>
        </div> -->
      <form action="{{'/user_store'}}" style="width: 100%;" method="post" class="dropzone mx-auto" id="my-dropzone">
        <div class="modal-body">
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
              <input type="hidden" name="_previous" value="{{url()->previous()}}">
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
              <select required name="role" id="user_role" class="form-select">
                <option selected value="" disabled>@lang('lang.select_user_role')</option>
                <option value="Admin">@lang('lang.add_admin')</option>
                <option value="Client">@lang('lang.add_client')</option>
                <option value="Deriver">@lang('lang.add_driver')</option>
              </select>
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
          <button class="btn btn-sm text-white px-5" data-toggle="modal" data-target="#add" style="background-color: #E45F00; border-radius: 8px;">@lang('lang.add')</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- Confirm Modal End -->
@endsection