@extends('layouts.main')

@section('main-section')
<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper py-0">
    <div class="page-header">
      <h3 class="page-title">
        <span class="page-title-icon bg-gradient-primary text-white me-2 py-2">
          <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M2.54 0H5.92C7.33 0 8.46 1.15 8.46 2.561V5.97C8.46 7.39 7.33 8.53 5.92 8.53H2.54C1.14 8.53 0 7.39 0 5.97V2.561C0 1.15 1.14 0 2.54 0ZM2.54 11.4697H5.92C7.33 11.4697 8.46 12.6107 8.46 14.0307V17.4397C8.46 18.8497 7.33 19.9997 5.92 19.9997H2.54C1.14 19.9997 0 18.8497 0 17.4397V14.0307C0 12.6107 1.14 11.4697 2.54 11.4697ZM17.4601 0H14.0801C12.6701 0 11.5401 1.15 11.5401 2.561V5.97C11.5401 7.39 12.6701 8.53 14.0801 8.53H17.4601C18.8601 8.53 20.0001 7.39 20.0001 5.97V2.561C20.0001 1.15 18.8601 0 17.4601 0ZM14.0801 11.4697H17.4601C18.8601 11.4697 20.0001 12.6107 20.0001 14.0307V17.4397C20.0001 18.8497 18.8601 19.9997 17.4601 19.9997H14.0801C12.6701 19.9997 11.5401 18.8497 11.5401 17.4397V14.0307C11.5401 12.6107 12.6701 11.4697 14.0801 11.4697Z" fill="white" />
          </svg>
        </span> Dashboard
      </h3>
    </div>
    <div class="container-fluid">
      <div class="row justify-content-between">
        <div class="col-2 top_bagdes">
          <div class="circle-tile ">
            <a href="#">
              <div class="circle-tile-heading dark-blue">
                <i style="color: #452C88 !important;" class="fa fa-users  fa-2x"></i>
              </div>
            </a>
            <div class="circle-tile-content dark-blue">
              <div class="circle-tile-description text-faded"> Clients</div>
              <div class="circle-tile-number text-faded ">20</div>
            </div>
          </div>
        </div>
        <div class="col-2 top_bagdes">
          <div class="circle-tile ">
            <a href="#">
              <div class="circle-tile-heading dark-blue">
                <i style="color: #452C88 !important;" class="fa fa-users  fa-2x"></i>
              </div>
            </a>
            <div class="circle-tile-content dark-blue">
              <div class="circle-tile-description text-faded"> Drivers</div>
              <div class="circle-tile-number text-faded ">20</div>
            </div>
          </div>
        </div>
        <div class="col-2 top_bagdes">
          <div class="circle-tile ">
            <a href="#">
              <div class="circle-tile-heading dark-blue">
                <i style="color: #452C88 !important;" class="fa fa-users  fa-2x"></i>
              </div>
            </a>
            <div class="circle-tile-content dark-blue">
              <div class="circle-tile-description text-faded"> Users</div>
              <div class="circle-tile-number text-faded ">20</div>
            </div>
          </div>
        </div>
        <div class="col-2 top_bagdes">
          <div class="circle-tile ">
            <a href="#">
              <div class="circle-tile-heading dark-blue">
                <i style="color: #452C88 !important;" class="fa fa-users  fa-2x"></i>
              </div>
            </a>
            <div class="circle-tile-content dark-blue">
              <div class="circle-tile-description text-faded"> Total Routes</div>
              <div class="circle-tile-number text-faded ">100</div>
            </div>
          </div>
        </div>
        <div class="col-2 top_bagdes">
          <div class="circle-tile ">
            <a href="#">
              <div class="circle-tile-heading dark-blue">
                <i style="color: #452C88 !important;" class="fa fa-users  fa-2x"></i>
              </div>
            </a>
            <div class="circle-tile-content dark-blue">
              <div class="circle-tile-description text-faded"> Completed Trips</div>
              <div class="circle-tile-number text-faded ">60</div>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col-lg-8 col-md-8">
          <div class="row">
            <div class="col-lg-5 col-md-5">
              <div>
                <span class="text-muted font-weight-semibold">Show:</span>
                <b>03-09, December 2023</b>
                <span style="border: 1px solid #ACADAE; cursor: pointer ;padding: 0px 6px;">
                  <i class="fa fa-caret-down"></i>
                </span>
              </div>
            </div>
          </div>
          <div class="row justify-content-between" style="margin-top: 30px !important;">
            <div class="col-lg-4 col-md-4 prgrss-chart">
              <p class="progress_para">Active Trips </p>
            </div>
            <div class="col-lg-4 col-md-4 prgrss-chart">
              <p class="progress_para">Completed Trips </p>
            </div>
            <div class="col-lg-4 col-md-4 prgrss-chart">
              <p class="progress_para">Pending Trips </p>
            </div>
          </div>
          <div class="row mt-4 text-right">
            <div class="offset-lg-7 col-lg-5 col-md-5">
              <div>
                <span class="text-muted font-weight-semibold">Previous Month:</span>
                <b>Feburary,2023</b>
                <span style="border: 1px solid #ACADAE; cursor: pointer ;padding: 0px 6px;">
                  <i class="fa fa-caret-down"></i>
                </span>
              </div>
            </div>
          </div>
          <div class="row mt-4 justify-content-center">
            <div class="col-lg-12">
              <canvas id="Chart-Line" width="800" height="400"></canvas>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4">
          <div class="row">
            <div class="col-lg-8">
              <form action="" method="#">
                <select name="" class="form-select" id="">
                  <option disabled selected value="null">Filter by clients</option>
                  <option value=""><i class="fa fa-edit"></i> Earth</option>
                  <option value="">B</option>
                  <option value="">C</option>
                  <option value="">D</option>
                </select>
              </form>
            </div>
            <div class="col-lg-4">
              <span class="">
                <a class="text-muted font-weight-semibold" href="#">Show more..</a>
              </span>
            </div>
          </div>
          @include('aside')
        </div>
      </div>
    </div>
  </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.4/Chart.min.js"></script>
<script>
  var ourLineChart = document.getElementById('Chart-Line').getContext('2d');
  var myChart = new Chart(ourLineChart, {
    type: 'line', //
    data: {
      labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun'],
      datasets: [{
        data: [50, 10, 30, 15, 25, 24],
        label: 'our datasheet',
        fill: true,
        backgroundColor: "rgba(54, 162, 235, 0.2)",
        borderWidth: 1,
        borderColor: "blue"
      }]
    },
    options: {
      responsive: false,
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: true
          }
        }]
      }
    }
  });
</script>
<!-- content-wrapper ends -->
@endsection