@extends('layouts.main')

@section('main-section')
<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper py-0">
    <div class="card" style="border: none;">
      <div class="card-header bg-white">
        <h3 class="page-title">
          <span class="page-title-icon bg-gradient-primary text-white me-2 py-2">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M5.46997 9C7.40297 9 8.96997 7.433 8.96997 5.5C8.96997 3.567 7.40297 2 5.46997 2C3.53697 2 1.96997 3.567 1.96997 5.5C1.96997 7.433 3.53697 9 5.46997 9Z" stroke="white" stroke-width="1.5" />
              <path d="M16.97 15H19.97C21.07 15 21.97 15.9 21.97 17V20C21.97 21.1 21.07 22 19.97 22H16.97C15.87 22 14.97 21.1 14.97 20V17C14.97 15.9 15.87 15 16.97 15Z" stroke="white" stroke-width="1.5" />
              <path d="M11.9999 5H14.6799C16.5299 5 17.3899 7.29 15.9999 8.51L8.00995 15.5C6.61995 16.71 7.47994 19 9.31994 19H11.9999" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
              <path d="M5.48622 5.5H5.49777" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
              <path d="M18.4862 18.5H18.4978" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          </span> @lang('lang.routes')
        </h3>
        <div class="row">
          <div class="col-lg-4"></div>
          <div class="col-lg-8">
            <div class="row mx-1">
              <div class="col-lg-4 px-1" style="text-align: right;">
                <a href="/create_trip">
                  <button class="btn btn-md text-white" style="background-color: #E45F00;"><i class="fa fa-plus"></i> @lang('lang.create_trip')</button>
                </a>
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
      </div>
      <div class="card-body px-4">
        <div class="table-responsive">
          @include('routes_table')
        </div>
      </div>
    </div>
  </div>
</div>
<!-- content-wrapper ends -->

<!-- edittrip Modal -->
<div class="modal fade" id="edittrip" tabindex="-1" aria-labelledby="edittripLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #452C88;">
        <h5 class="modal-title text-white" id="edittripLabel">Trip Detail</h5>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row mt-3">
          <div class="col-lg-6 mb-3">
            <div class="row">
              <div class="col-lg-4 p-0 text-right">
                <img src="assets/images/pic.jpg" style="width: 100px; height: 100px; border-radius: 30px;" alt="text">
              </div>
              <div class="col-lg-8 mb-3">
                <label for="client_name" style="color: #452C88;">Client Name</label>
                <input type="text" name="client_name" class="form-control" id="client_name">
              </div>
            </div>
          </div>
          <div class="col-lg-6 mb-3">
            <div class="row">
              <div class="col-lg-4 p-0 text-right">
                <img src="assets/images/pic.jpg" style="width: 100px; height: 100px; border-radius: 30px;" alt="text">
              </div>
              <div class="col-lg-8 mb-3">
                <label for="client_name" style="color: #452C88;">Client Name</label>
                <input type="text" name="client_name" class="form-control" id="client_name">
              </div>
            </div>
          </div>
          <hr>
          <div class="col-lg-8 mb-3">
            <label for="trip_itle" style="color: #452C88;">Trip Title</label>
            <input type="text" class="form-control" name="trip_title" id="trip_title">
          </div>
          <div class="col-lg-4 mb-3">
            <label for="trip_date" style="color: #452C88;">Trip Date</label>
            <input type="datetime-local" class="form-control" name="trip_date" id="trip_date">
          </div>
          <div class="col-lg-12 mb-3">
            <label for="trip_description" style="color: #452C88;">Trip Description</label>
            <textarea name="trip_description" id="trip_description" cols="30" rows="1" class="form-control"></textarea>
          </div>
          <div class="col-lg-6 mb-3">
            <label for="start_point" style="color: #452C88;">Start Date</label>
            <input type="text" class="form-control" name="start_point" id="start_point">
          </div>
          <div class="col-lg-6 mb-3">
            <label for="end_point" style="color: #452C88;">End Date</label>
            <input type="text" class="form-control" name="end_point" id="end_point">
          </div>
        </div>
        <div style="background-color: #452C88;" class="py-2 text-center px-0">
          <h5 class="text-white">Address</h5>
        </div>
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th>Address</th>
                <th>Description</th>
                <th>Picture</th>
                <th>Signature</th>
                <th>Note</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Lorem, ipsum dolor.</td>
                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, itaque eveniet ea tempore vitae corporis in ipsa aut, est nihil blanditiis cupiditate ipsam illo fuga mollitia reprehenderit, earum dicta beatae?</td>
                <td>
                  <svg width="24" height="18" viewBox="0 0 24 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M22 0C21.44 0 20.94 0.22 20.58 0.58L8 13.18L3.42 8.58C3.06 8.22 2.56 8 2 8C0.9 8 0 8.9 0 10C0 10.56 0.22 11.06 0.58 11.42L6.58 17.42C6.94 17.78 7.44 18 8 18C8.56 18 9.06 17.78 9.42 17.42L23.42 3.42C23.78 3.06 24 2.56 24 2C24 0.9 23.1 0 22 0Z" fill="#452C88" />
                  </svg>
                </td>
                <td>
                  <svg width="24" height="18" viewBox="0 0 24 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M22 0C21.44 0 20.94 0.22 20.58 0.58L8 13.18L3.42 8.58C3.06 8.22 2.56 8 2 8C0.9 8 0 8.9 0 10C0 10.56 0.22 11.06 0.58 11.42L6.58 17.42C6.94 17.78 7.44 18 8 18C8.56 18 9.06 17.78 9.42 17.42L23.42 3.42C23.78 3.06 24 2.56 24 2C24 0.9 23.1 0 22 0Z" fill="#452C88" />
                  </svg>
                </td>
                <td>
                  <svg width="24" height="18" viewBox="0 0 24 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M22 0C21.44 0 20.94 0.22 20.58 0.58L8 13.18L3.42 8.58C3.06 8.22 2.56 8 2 8C0.9 8 0 8.9 0 10C0 10.56 0.22 11.06 0.58 11.42L6.58 17.42C6.94 17.78 7.44 18 8 18C8.56 18 9.06 17.78 9.42 17.42L23.42 3.42C23.78 3.06 24 2.56 24 2C24 0.9 23.1 0 22 0Z" fill="#452C88" />
                  </svg>
                </td>
              </tr>
              <tr>
                <td>Lorem, ipsum dolor.</td>
                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, itaque eveniet ea tempore vitae corporis in ipsa aut, est nihil blanditiis cupiditate ipsam illo fuga mollitia reprehenderit, earum dicta beatae?</td>
                <td>
                  <svg width="24" height="18" viewBox="0 0 24 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M22 0C21.44 0 20.94 0.22 20.58 0.58L8 13.18L3.42 8.58C3.06 8.22 2.56 8 2 8C0.9 8 0 8.9 0 10C0 10.56 0.22 11.06 0.58 11.42L6.58 17.42C6.94 17.78 7.44 18 8 18C8.56 18 9.06 17.78 9.42 17.42L23.42 3.42C23.78 3.06 24 2.56 24 2C24 0.9 23.1 0 22 0Z" fill="#452C88" />
                  </svg>
                </td>
                <td>
                </td>
                <td>
                  <svg width="24" height="18" viewBox="0 0 24 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M22 0C21.44 0 20.94 0.22 20.58 0.58L8 13.18L3.42 8.58C3.06 8.22 2.56 8 2 8C0.9 8 0 8.9 0 10C0 10.56 0.22 11.06 0.58 11.42L6.58 17.42C6.94 17.78 7.44 18 8 18C8.56 18 9.06 17.78 9.42 17.42L23.42 3.42C23.78 3.06 24 2.56 24 2C24 0.9 23.1 0 22 0Z" fill="#452C88" />
                  </svg>
                </td>
              </tr>
              <tr>
                <td>Lorem, ipsum dolor.</td>
                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, itaque eveniet ea tempore vitae corporis in ipsa aut, est nihil blanditiis cupiditate ipsam illo fuga mollitia reprehenderit, earum dicta beatae?</td>
                <td>
                </td>
                <td>
                </td>
                <td>
                  <svg width="24" height="18" viewBox="0 0 24 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M22 0C21.44 0 20.94 0.22 20.58 0.58L8 13.18L3.42 8.58C3.06 8.22 2.56 8 2 8C0.9 8 0 8.9 0 10C0 10.56 0.22 11.06 0.58 11.42L6.58 17.42C6.94 17.78 7.44 18 8 18C8.56 18 9.06 17.78 9.42 17.42L23.42 3.42C23.78 3.06 24 2.56 24 2C24 0.9 23.1 0 22 0Z" fill="#452C88" />
                  </svg>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- edittrip Modal End -->

@endsection