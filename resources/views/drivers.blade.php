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
            <svg width="17" height="24" viewBox="0 0 17 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M3.09148 20.3718H7.52588V15.9374C5.19759 16.1948 3.34889 18.0435 3.09148 20.3718ZM8.64214 15.9374V20.3718H13.0765C12.8191 18.0435 10.9704 16.1948 8.64214 15.9374ZM13.0766 21.4881C12.9986 22.194 12.7746 22.855 12.4355 23.4412L13.4018 24.0001C13.9245 23.0965 14.2234 22.0473 14.2234 20.93C14.2234 17.5393 11.4747 14.7905 8.08401 14.7905C4.69332 14.7905 1.94458 17.5393 1.94458 20.93C1.94458 22.0473 2.24357 23.0965 2.76626 24.0001L3.73249 23.4412C3.39343 22.855 3.1694 22.194 3.09143 21.4881H13.0766Z" fill="white" />
              <path d="M9.75845 20.9299C9.75845 21.8547 9.00883 22.6043 8.08406 22.6043C7.15929 22.6043 6.40967 21.8547 6.40967 20.9299C6.40967 20.0051 7.15929 19.2555 8.08406 19.2555C9.00883 19.2555 9.75845 20.0051 9.75845 20.9299Z" fill="white" />
              <path d="M12.3171 19.169C12.1576 18.5735 12.511 17.9614 13.1064 17.8018L14.1847 17.5129C14.7802 17.3534 15.3923 17.7068 15.5518 18.3022L16.1297 20.4587C16.2892 21.0542 15.9358 21.6663 15.3403 21.8258L14.2621 22.1148C13.6666 22.2743 13.0545 21.9209 12.895 21.3254L12.3171 19.169Z" fill="white" />
              <path d="M0.616123 18.3017C0.775693 17.7063 1.38779 17.3529 1.98326 17.5124L3.06152 17.8014C3.65699 17.9609 4.01039 18.573 3.85082 19.1685L3.27299 21.3249C3.11342 21.9204 2.50132 22.2738 1.90585 22.1143L0.827655 21.8253C0.232141 21.6658 -0.12125 21.0537 0.0383139 20.4582L0.616123 18.3017Z" fill="white" />
              <path fill-rule="evenodd" clip-rule="evenodd" d="M3.06085 8.09285V6.41846H4.17711V8.09285C4.17711 10.2506 5.92629 11.9998 8.08403 11.9998C10.2418 11.9998 11.9909 10.2506 11.9909 8.09285V6.41846H13.1072V8.09285C13.1072 10.8671 10.8583 13.116 8.08403 13.116C5.30978 13.116 3.06085 10.8671 3.06085 8.09285Z" fill="white" />
              <path fill-rule="evenodd" clip-rule="evenodd" d="M2.3879 4.74411H13.8045C13.8446 4.64169 13.888 4.52097 13.9311 4.38278L13.9379 4.36118C14.0884 3.87935 14.2234 3.44699 14.2234 2.5656C14.2234 2.11865 13.9331 1.74229 13.5487 1.44471C13.1592 1.14321 12.6273 0.885078 12.0349 0.674668C10.8484 0.253296 9.35203 0 8.08401 0C6.816 0 5.31965 0.253296 4.13318 0.674668C3.54072 0.885078 3.00882 1.14321 2.61936 1.44471C2.23498 1.74229 1.94458 2.11865 1.94458 2.5656C1.94458 3.38385 2.08143 3.8151 2.22203 4.25826C2.23514 4.29956 2.24826 4.34092 2.26132 4.38272C2.30446 4.52091 2.34777 4.64164 2.3879 4.74411ZM5.85149 3.06972C5.85149 2.76147 6.10137 2.51159 6.40962 2.51159H9.7584C10.0667 2.51159 10.3165 2.76147 10.3165 3.06972C10.3165 3.37796 10.0667 3.62785 9.7584 3.62785H6.40962C6.10137 3.62785 5.85149 3.37796 5.85149 3.06972Z" fill="white" />
              <path fill-rule="evenodd" clip-rule="evenodd" d="M2.51468 6.08952C2.54002 5.9568 2.66152 5.86035 2.80334 5.86035H13.3647C13.5066 5.86035 13.6281 5.9568 13.6534 6.08952L13.6535 6.09019L13.6537 6.09086L13.654 6.09248L13.6546 6.09627L13.6562 6.10643C13.6574 6.1143 13.6588 6.1244 13.66 6.13651C13.6626 6.16079 13.6649 6.19339 13.6653 6.23307C13.666 6.31249 13.6586 6.42116 13.6286 6.54914C13.5677 6.80783 13.416 7.13668 13.0686 7.45627C12.3798 8.08986 10.9647 8.651 8.08404 8.651C5.20341 8.651 3.78827 8.08986 3.09948 7.45627C2.75205 7.13668 2.60035 6.80783 2.53951 6.54914C2.50943 6.42116 2.50212 6.31249 2.50279 6.23307C2.50312 6.19339 2.50547 6.16079 2.50803 6.13651C2.50932 6.1244 2.51066 6.1143 2.51183 6.10643L2.51345 6.09627L2.51412 6.09248L2.5144 6.09086L2.51456 6.09019L2.51468 6.08952Z" fill="white" />
            </svg>
          </span> @lang('lang.drivers')
        </h3>
        <div class="row">
          <div class="col-lg-4"></div>
          <div class="col-lg-8">
            <div class="row mx-1">
              <div class="col-lg-4 px-1" style="text-align: right;">
                <button class="btn btn-sm text-white" data-toggle="modal" data-target="#adddriver" style="background-color: #E45F00; border-radius: 8px;"><i class="fa fa-plus"></i> @lang('lang.add_driver')</button>
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
          @include('driver_table')
        </div>
      </div>
    </div>
  </div>

  <!-- content-wrapper ends -->
  <!-- Add Client Modal -->
  <div class="modal fade" id="adddriver" tabindex="-1" aria-labelledby="adddriverLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <!-- <div class="modal-header">
          <h5 class="modal-title" id="adddriverLabel"></h5>
        </div> -->
        <form action="{{'/user_store'}}" style="width: 100%;" method="post">
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
                <input type="hidden" name="role" value="Deriver">
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
            <button class="btn btn-sm text-white px-5" style="background-color: #E45F00; border-radius: 8px;">@lang('lang.add')</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- Add Client Modal End -->
  @endsection