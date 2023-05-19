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
                <button class="btn btn-md text-white" data-toggle="modal" data-target="#adddriver" style="background-color: #E45F00;"><i class="fa fa-plus"></i> @lang('lang.add_driver')</button>
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
      <div class="card-body px-0">
        <div class="table-responsive">
          @include('driver_table')
        </div>
      </div>
    </div>
  </div>

  <!-- content-wrapper ends -->
  <!-- Add Client Modal -->
  <div class="modal fade" style="height: 30rem;" id="adddriver" tabindex="-1" aria-labelledby="adddriverLabel" aria-hidden="true">
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
        <form action="{{'/user_store'}}" method="post">
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
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control">
              </div>
              <div class="col-lg-6 mt-2">
                <label for="email">E-mail</label>
                <input type="email" name="email" id="email" class="form-control">
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
            <button class="btn btn-sm text-white px-5" data-toggle="modal" data-target="#add" style="background-color: #E45F00; border-radius: 8px;">@lang('lang.add')</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- Add Client Modal End -->
  @endsection