@extends('layouts.main')

@section('main-section')
<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper py-0">
    <div class="page-header">
      <h3 class="page-title">
        <span class="page-title-icon bg-gradient-primary text-white me-2 py-2">
        <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M23.1783 16.5241L19.5521 3.01716C19.1579 1.54862 17.353 1.00759 16.2133 2.01629L13.9278 4.039C11.3845 6.28991 8.35111 7.91891 5.06775 8.79698C2.31938 9.53199 0.690561 12.3597 1.42698 15.1028C2.16341 17.8459 4.99058 19.4819 7.73896 18.7469C11.0223 17.8688 14.4654 17.7657 17.7956 18.4459L20.7882 19.0571C22.2806 19.3619 23.5725 17.9926 23.1783 16.5241Z" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M7.53931 8.09998L11.7001 23.5" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
        </span> @lang('lang.announcments')
      </h3>
      <!-- <nav aria-label="breadcrumb"> 
        <ul class="breadcrumb">
          <li class="breadcrumb-item active" aria-current="page">
            <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
          </li>
        </ul>
      </nav> -->
    </div>
    <div class="card" style="border: none;">
      <div class="card-header bg-white">
        <form action="">
          <div class="row">
            <div class="col-lg-8">
              <input type="text" name="title" id="title" class="form-control" placeholder="@lang('lang.title')">
            </div>
            <div class="col-lg-2">
              <input type="datetime-local" name="start_date" id="start_date" class="form-control" placeholder="@lang('lang.start_date')">
            </div>
            <div class="col-lg-2">
              <input type="datetime-local" name="end_date" id="end_date" class="form-control">
            </div>
            <div class="col-lg-12 mt-2">
              <textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="@lang('lang.message')..."></textarea>
            </div>
            <div class="col-lg-2 mt-4 text-center">
              <input type="radio" name="type" id="type" value="@lang('lang.mandatory')"> @lang('lang.mandatory')
            </div>
            <div class="col-lg-2 mt-4 text-center">
              <input type="radio" name="type" id="type" value="@lang('lang.warning')"> @lang('lang.warning')
            </div>
            <div class="col-lg-2 mt-4 text-center">
              <input type="radio" name="type" id="type" value="@lang('lang.promotion')"> @lang('lang.promotion')
            </div>
            <div class="col-lg-2 mt-4 text-center">
              <input type="radio" name="type" id="type" value="@lang('lang.maintenance')"> @lang('lang.maintenance')
            </div>
            <div class="col-lg-2 mt-4 text-center">
              <input type="radio" name="type" id="type" value="@lang('lang.news')"> @lang('lang.news')
            </div>
            <div class="col-lg-2 mt-4 text-center">
            <button class="btn px-5 text-white" style="background-color: #E45F00; border-radius: 8px;">@lang('lang.add')</button>
            </div>
          </div>
        </form>
      </div>
      <div class="card-body px-0">
        <div class="table-responsive">
          include("announcment_table")
        </div>
      </div>
    </div>
  </div>
</div>
<!-- content-wrapper ends -->
@endsection