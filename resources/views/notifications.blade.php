@extends('layouts.main')

@section('main-section')
<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper py-0">
    <div class="page-header">
      <h3 class="page-title">
        <span class="page-title-icon bg-gradient-primary text-white me-2 py-1">
          <svg width="24" height="28" viewBox="0 0 24 28" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M23.8251 19.1312L21.186 14.2589V9.18582C21.186 4.12075 17.0652 0 12.0002 0C6.93509 0 2.81435 4.12075 2.81435 9.18582V14.2589L0.175114 19.1312C0.0554271 19.3521 -0.00481165 19.6003 0.000300254 19.8515C0.00541215 20.1028 0.0756993 20.3483 0.204274 20.5642C0.33285 20.7801 0.515302 20.9589 0.733755 21.083C0.952207 21.2072 1.19917 21.2724 1.45043 21.2724H6.70418C6.6898 21.4317 6.682 21.5927 6.682 21.7559C6.682 23.1663 7.2423 24.519 8.23964 25.5164C9.23697 26.5137 10.5897 27.074 12.0001 27.074C13.4106 27.074 14.7632 26.5137 15.7606 25.5164C16.7579 24.519 17.3182 23.1663 17.3182 21.7559C17.3182 21.5927 17.3104 21.4317 17.296 21.2724H22.5498C22.801 21.2724 23.0479 21.2071 23.2664 21.0829C23.4848 20.9588 23.6672 20.78 23.7958 20.5642C23.9243 20.3483 23.9946 20.1027 23.9997 19.8515C24.0048 19.6004 23.9446 19.3521 23.8249 19.1312H23.8251ZM15.3844 21.7559C15.3848 22.221 15.2893 22.6811 15.1039 23.1077C14.9185 23.5342 14.6472 23.9179 14.3069 24.2349C13.9666 24.552 13.5646 24.7954 13.126 24.9501C12.6875 25.1049 12.2217 25.1675 11.7578 25.1342C11.2939 25.1009 10.8419 24.9723 10.4299 24.7565C10.0179 24.5408 9.65482 24.2424 9.3633 23.88C9.07178 23.5176 8.85807 23.0991 8.73552 22.6504C8.61297 22.2018 8.58421 21.7327 8.65103 21.2724H15.3492C15.3725 21.4325 15.3842 21.5941 15.3844 21.7559ZM2.26211 19.3386L4.7482 14.749V9.18582C4.7482 7.26248 5.51225 5.41792 6.87225 4.05791C8.23226 2.6979 10.0768 1.93386 12.0002 1.93386C13.9235 1.93386 15.7681 2.6979 17.1281 4.05791C18.4881 5.41792 19.2521 7.26248 19.2521 9.18582V14.749L21.7381 19.3386H2.26211Z" fill="white" />
          </svg>
        </span> Notifications
      </h3>
      <!-- <nav aria-label="breadcrumb">
        <ul class="breadcrumb">
          <li class="breadcrumb-item active" aria-current="page">
            <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
          </li>
        </ul>
      </nav> -->
    </div>
    <div class="row mb-4">
      <div class="col-lg-2">
        <input type="checkbox" name="select_all" id="select_all">
        <span class="mx-3">
          <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M2.74118 20H16.5344C18.3589 20 19.2755 19.0921 19.2755 17.2938V8.60758C19.2755 7.35049 19.0136 6.79178 18.1842 6.13705L11.4448 0.829311C10.8075 0.322971 10.2838 0 9.63773 0C9.00047 0 8.46795 0.322971 7.8394 0.829311L1.09995 6.13705C0.270639 6.79178 0 7.35049 0 8.60758V17.2938C0 19.1009 0.925371 20 2.74118 20ZM11.471 11.6281C10.8599 11.017 10.2663 10.7726 9.6552 10.7726C9.03537 10.7726 8.45048 11.017 7.8394 11.6281L7.27197 12.1868L2.04279 7.01877L8.59015 1.91183C9.0179 1.58007 9.26236 1.39677 9.63773 1.39677C10.0219 1.39677 10.2576 1.58007 10.6853 1.91183L17.2502 7.03623L12.0384 12.1868L11.471 11.6281ZM1.33569 17.2938V8.37189C1.33569 8.28458 1.3444 8.20602 1.3444 8.13618L6.35532 13.086L1.44043 17.9136C1.37059 17.739 1.33569 17.5295 1.33569 17.2938ZM17.9398 8.37189V17.2938C17.9398 17.5207 17.9135 17.7215 17.8526 17.8961L12.9551 13.086L17.9311 8.16237C17.9398 8.22349 17.9398 8.29333 17.9398 8.37189ZM2.69752 18.6644C2.63644 18.6644 2.57531 18.6644 2.51419 18.6556L8.59891 12.6582C8.97428 12.2828 9.30601 12.117 9.6552 12.117C10.0044 12.117 10.3361 12.2828 10.7115 12.6582L16.7961 18.6556C16.7264 18.6644 16.6565 18.6644 16.5868 18.6644H2.69752Z" fill="#ACADAE" />
          </svg>
          &nbsp; | &nbsp;<svg width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M10.4688 16.25H11.4062C11.5306 16.25 11.6498 16.2006 11.7377 16.1127C11.8256 16.0248 11.875 15.9056 11.875 15.7812V7.34375C11.875 7.21943 11.8256 7.1002 11.7377 7.01229C11.6498 6.92439 11.5306 6.875 11.4062 6.875H10.4688C10.3444 6.875 10.2252 6.92439 10.1373 7.01229C10.0494 7.1002 10 7.21943 10 7.34375V15.7812C10 15.9056 10.0494 16.0248 10.1373 16.1127C10.2252 16.2006 10.3444 16.25 10.4688 16.25ZM16.875 3.125H13.6559L12.3277 0.910156C12.1611 0.632428 11.9253 0.402614 11.6434 0.243108C11.3615 0.0836025 11.043 -0.000154039 10.7191 2.12674e-07H6.78086C6.45709 -1.90925e-05 6.13883 0.0838016 5.85707 0.243301C5.57531 0.4028 5.33965 0.632542 5.17305 0.910156L3.84414 3.125H0.625C0.45924 3.125 0.300269 3.19085 0.183058 3.30806C0.065848 3.42527 0 3.58424 0 3.75L0 4.375C0 4.54076 0.065848 4.69973 0.183058 4.81694C0.300269 4.93415 0.45924 5 0.625 5H1.25V18.125C1.25 18.6223 1.44754 19.0992 1.79917 19.4508C2.15081 19.8025 2.62772 20 3.125 20H14.375C14.8723 20 15.3492 19.8025 15.7008 19.4508C16.0525 19.0992 16.25 18.6223 16.25 18.125V5H16.875C17.0408 5 17.1997 4.93415 17.3169 4.81694C17.4342 4.69973 17.5 4.54076 17.5 4.375V3.75C17.5 3.58424 17.4342 3.42527 17.3169 3.30806C17.1997 3.19085 17.0408 3.125 16.875 3.125ZM6.7125 1.98867C6.73339 1.9539 6.76294 1.92515 6.79827 1.90523C6.8336 1.8853 6.8735 1.87489 6.91406 1.875H10.5859C10.6264 1.87495 10.6662 1.8854 10.7015 1.90532C10.7368 1.92524 10.7663 1.95396 10.7871 1.98867L11.4691 3.125H6.03086L6.7125 1.98867ZM14.375 18.125H3.125V5H14.375V18.125ZM6.09375 16.25H7.03125C7.15557 16.25 7.2748 16.2006 7.36271 16.1127C7.45061 16.0248 7.5 15.9056 7.5 15.7812V7.34375C7.5 7.21943 7.45061 7.1002 7.36271 7.01229C7.2748 6.92439 7.15557 6.875 7.03125 6.875H6.09375C5.96943 6.875 5.8502 6.92439 5.76229 7.01229C5.67439 7.1002 5.625 7.21943 5.625 7.34375V15.7812C5.625 15.9056 5.67439 16.0248 5.76229 16.1127C5.8502 16.2006 5.96943 16.25 6.09375 16.25Z" fill="#ACADAE" />
          </svg>

        </span>
      </div>
    </div>
    <div class="row bg-white mb-3">
      <div class="col-lg-1 col-1 my-auto">
        <input type="checkbox" name="select" id="select">
      </div>
      <div class="col-lg-8 col-8 px-3" style="border-left: 5px solid #452C88;">
        <h6>New user has registered by Client Name</h6>
        <p>In a laoreet purus. Integer turpis quam, laoreet In a laoreet purus. Integer turpis quam, laoreet In a laoreet purus. Integer turpis quam, laoreet.</p>
      </div>
      <div class="col-lg-2 col-2 text-center my-auto">
        <p>15 May 2023</p>
      </div>
    </div>
    <div class="row bg-white mb-3">
      <div class="col-lg-1 col-1 my-auto">
        <input type="checkbox" name="select" id="select">
      </div>
      <div class="col-lg-8 col-8 px-3" style="border-left: 5px solid #452C88;">
        <h6>New user has registered by Client Name</h6>
        <p>In a laoreet purus. Integer turpis quam, laoreet In a laoreet purus. Integer turpis quam, laoreet In a laoreet purus. Integer turpis quam, laoreet.</p>
      </div>
      <div class="col-lg-2 col-2 text-center my-auto">
        <p>15 May 2023</p>
      </div>
    </div>
    <div class="row bg-white mb-3">
      <div class="col-lg-1 col-1 my-auto">
        <input type="checkbox" name="select" id="select">
      </div>
      <div class="col-lg-8 col-8 px-3" style="border-left: 5px solid #452C88;">
        <h6>New user has registered by Client Name</h6>
        <p>In a laoreet purus. Integer turpis quam, laoreet In a laoreet purus. Integer turpis quam, laoreet In a laoreet purus. Integer turpis quam, laoreet.</p>
      </div>
      <div class="col-lg-2 col-2 text-center my-auto">
        <p>15 May 2023</p>
      </div>
    </div>
    <div class="row bg-white mb-3">
      <div class="col-lg-1 col-1 my-auto">
        <input type="checkbox" name="select" id="select">
      </div>
      <div class="col-lg-8 col-8 px-3" style="border-left: 5px solid #452C88;">
        <h6>New user has registered by Client Name</h6>
        <p>In a laoreet purus. Integer turpis quam, laoreet In a laoreet purus. Integer turpis quam, laoreet In a laoreet purus. Integer turpis quam, laoreet.</p>
      </div>
      <div class="col-lg-2 col-2 text-center my-auto">
        <p>15 May 2023</p>
      </div>
    </div>
  </div>
</div>
<!-- content-wrapper ends -->
@endsection