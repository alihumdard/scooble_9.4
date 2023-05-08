@extends('layouts.main')

@section('main-section')
<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
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
                  <option selected value="" disabled >@lang('lang.select_user_role')</option>
                  <option value="Admin">@lang('lang.add_admin')</option>
                  <option value="Client">@lang('lang.add_client')</option>
                  <option value="Deriver">@lang('lang.add_driver')</option>
          </select>
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
              <input type="file" class="form-control d-none" name="company_logo" id="company_logo" placeholder="Company Logo" id="file-input" onchange="handleFileSelect(event)">
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
        <button class="btn btn-sm text-white px-5" data-toggle="modal" data-target="#add" style="background-color: #E45F00; border-radius: 8px;">@lang('lang.add')</button>
      </div>
    </form>
    </div>
  </div>
</div>
<!-- Confirm Modal End -->
@endsection