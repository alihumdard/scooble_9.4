@extends('layouts.main')

@section('main-section')
<style>
    tbody tr {
        cursor: move;
    }

    tbody tr td:first-child {
        cursor: grab;
    }

    .modal-backdrop.show {
        opacity: 0 !important;
    }

    .draggable-modal .modal-dialog {
        pointer-events: none;
    }

    .draggable-modal .modal-content {
        pointer-events: auto;
    }

    .form-group .form-check {
        margin-bottom: 5px;
    }


    .form-group input:focus,
    .form-group textarea:focus {
        outline: none;
    }

    #map {
        height: 400px;
        width: 100%;
    }
</style>

<div class="main-panel">
    <div class="content-wrapper py-0 px-3">
        <div style="border: none;">
            <div class="bg-white" style="border-radius: 20px;">
                <div class="p-3">
                    <h3 class="page-title">
                        <span class="page-title-icon bg-gradient-primary text-white me-2 py-2">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16.6667 0H3.33333C2.44928 0 1.60143 0.35119 0.976311 0.976311C0.35119 1.60143 0 2.44928 0 3.33333V16.6667C0 17.5507 0.35119 18.3986 0.976311 19.0237C1.60143 19.6488 2.44928 20 3.33333 20H16.6667C17.5507 20 18.3986 19.6488 19.0237 19.0237C19.6488 18.3986 20 17.5507 20 16.6667V3.33333C20 2.44928 19.6488 1.60143 19.0237 0.976311C18.3986 0.35119 17.5507 0 16.6667 0ZM17.7778 16.6667C17.7778 16.9614 17.6607 17.244 17.4523 17.4523C17.244 17.6607 16.9614 17.7778 16.6667 17.7778H3.33333C3.03865 17.7778 2.75603 17.6607 2.54766 17.4523C2.33929 17.244 2.22222 16.9614 2.22222 16.6667V3.33333C2.22222 3.03865 2.33929 2.75603 2.54766 2.54766C2.75603 2.33929 3.03865 2.22222 3.33333 2.22222H16.6667C16.9614 2.22222 17.244 2.33929 17.4523 2.54766C17.6607 2.75603 17.7778 3.03865 17.7778 3.33333V16.6667Z" fill="white" />
                                <path d="M13.3333 8.88888H11.1111V6.66665C11.1111 6.37197 10.994 6.08935 10.7857 5.88098C10.5773 5.67261 10.2947 5.55554 9.99999 5.55554C9.7053 5.55554 9.42269 5.67261 9.21431 5.88098C9.00594 6.08935 8.88888 6.37197 8.88888 6.66665V8.88888H6.66665C6.37197 8.88888 6.08935 9.00594 5.88098 9.21431C5.67261 9.42269 5.55554 9.7053 5.55554 9.99999C5.55554 10.2947 5.67261 10.5773 5.88098 10.7857C6.08935 10.994 6.37197 11.1111 6.66665 11.1111H8.88888V13.3333C8.88888 13.628 9.00594 13.9106 9.21431 14.119C9.42269 14.3274 9.7053 14.4444 9.99999 14.4444C10.2947 14.4444 10.5773 14.3274 10.7857 14.119C10.994 13.9106 11.1111 13.628 11.1111 13.3333V11.1111H13.3333C13.628 11.1111 13.9106 10.994 14.119 10.7857C14.3274 10.5773 14.4444 10.2947 14.4444 9.99999C14.4444 9.7053 14.3274 9.42269 14.119 9.21431C13.9106 9.00594 13.628 8.88888 13.3333 8.88888Z" fill="white" />
                            </svg>
                        </span> @lang('lang.create_trip')
                    </h3>
                </div>

                <!-- Nav tabs -->
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#home"> @lang('lang.add_address')</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#menu1"> @lang('lang.import_addresses')</a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">

                <!-- address address with google maap -->
                    <div class="tab-pane container active" id="home">
                        <form action="storeTrip" id ="saveTrip" method="post" id="">
                            <div class="row">

                                <div class="col-lg-6 my-2">
                                    <label for="title">Title:</label>
                                    <input type="text" name="title" id="title" placeholder="@lang('lang.title')" class="form-control">
                                </div>

                                <div class="col-lg-3 my-2">
                                    <label for="trip_date">Date:</label>
                                    <input type="datetime-local" name="trip_date" id="trip_date" class="form-control">
                                </div>

                                <div class="col-lg-3 my-2">
                                    <label for="driver_id">Drivers:</label>
                                    <select name="driver_id" id="driver_id" class="form-select">
                                        <option disabled selected>@lang('lang.select_driver')</option>
                                        @foreach($driver_list as $value)
                                        <option value="{{$value['id']}}">{{$value['name']}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-lg-12 mb-2">
                                    <label for="trip_desc">Trip Description:</label>
                                    <textarea name="desc" id="trip_desc" class="form-control" placeholder="@lang('lang.trip_description')"></textarea>
                                </div>

                                <div class="col-lg-4">
                                    <label for="start_address">Start Point:</label>
                                    <select name="start_point" id="start_address" class="form-select">
                                        
                                    </select>
                                </div>

                                <div class="col-lg-4">
                                    <label for="end_address">End Point:</label>
                                    <select name="end_point" id="end_address" class="form-select">
                                      
                                    </select>
                                </div>

                                <div class="col-lg-4 mt-4">
                                    <button type="button" data-toggle="modal" data-target="#addAddressModal" class="btn text-white" style="background-color: #E45F00; width: 100%; border-radius: 8px;">@lang('lang.add_new_address')</button>
                                </div>
                            </div>

                            <!-- table of address -->
                            <div class="table-responsive py-2">
                                <table id="table_address" class="table text-center">
                                    <thead style="background-color: #E9EAEF;">
                                        <tr>
                                            <th></th>
                                            <th>@lang('lang.address')</th>
                                            <th>@lang('lang.description')</th>
                                            <th>@lang('lang.picture')</th>
                                            <th>@lang('lang.signature')</th>
                                            <th>@lang('lang.note')</th>
                                            <th>@lang('lang.validation')</th>
                                            <th>@lang('lang.actions')</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                                <div class="col-lg-4 float-right text-right">
                                    <button type="submit" id="btn_save_trip" class="btn text-white" style="background-color: rgb(35, 58, 133); width: 100%; border-radius: 8px;">Save Trip</button>
                                </div>
                            </div>
                        </form>
                    </div>



                <!-- import address from file -->
                    <div class="tab-pane container fade" id="menu1">
                        <form action="storeTrip" method="post">
                            <div class="row">
                                <div class="col-lg-6 my-2">
                                    <label for="title">Title:</label>
                                    <input type="text" name="address_title" id="address_title" placeholder="@lang('lang.title')" class="form-control">
                                </div>
                                <div class="col-lg-3 my-2">
                                    <label for="date">Date:</label>
                                    <input type="datetime-local" name="date" id="date" class="form-control">
                                </div>
                                <div class="col-lg-3 my-2">
                                    <label for="drivers">Drivers:</label>
                                    <select name="drivers" id="drivers" class="form-select">
                                        <option disabled selected>@lang('lang.select_driver')</option>
                                        @foreach($driver_list as $value)
                                        <option value="{{$value['id']}}">{{$value['name']}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-lg-12 mb-2">
                                    <label for="trip_description">Trip Description:</label>
                                    <textarea name="trip_description" id="trip_description" class="form-control" placeholder="@lang('lang.trip_description')"></textarea>
                                </div>
                                <div class="col-lg-4">
                                    <label for="start_point">Start Point:</label>
                                    <select name="start_point" id="start_point" class="form-select">
                                        <option value="">@lang('lang.start_point')</option>
                                    </select>
                                </div>
                                <div class="col-lg-4">
                                    <label for="end_point">End Point:</label>
                                    <select name="end_point" id="end_point" class="form-select">
                                        <option value="">@lang('lang.end_point')</option>
                                    </select>
                                </div>
                                <div class="col-lg-4 mt-4">
                                    <button type="button" class="btn text-white" style="background-color: #233A85; width: 100%; border-radius: 8px;">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M22.8 14.4C22.4817 14.4 22.1765 14.5264 21.9515 14.7515C21.7264 14.9765 21.6 15.2817 21.6 15.6V20.4C21.6 20.7183 21.4736 21.0235 21.2485 21.2485C21.0235 21.4736 20.7183 21.6 20.4 21.6H3.6C3.28174 21.6 2.97652 21.4736 2.75147 21.2485C2.52643 21.0235 2.4 20.7183 2.4 20.4V15.6C2.4 15.2817 2.27357 14.9765 2.04853 14.7515C1.82348 14.5264 1.51826 14.4 1.2 14.4C0.88174 14.4 0.576515 14.5264 0.351472 14.7515C0.126428 14.9765 0 15.2817 0 15.6V20.4C0 21.3548 0.379285 22.2705 1.05442 22.9456C1.72955 23.6207 2.64522 24 3.6 24H20.4C21.3548 24 22.2705 23.6207 22.9456 22.9456C23.6207 22.2705 24 21.3548 24 20.4V15.6C24 15.2817 23.8736 14.9765 23.6485 14.7515C23.4235 14.5264 23.1183 14.4 22.8 14.4ZM11.148 16.452C11.2621 16.5612 11.3967 16.6469 11.544 16.704C11.6876 16.7675 11.843 16.8003 12 16.8003C12.157 16.8003 12.3124 16.7675 12.456 16.704C12.6033 16.6469 12.7379 16.5612 12.852 16.452L17.652 11.652C17.878 11.426 18.0049 11.1196 18.0049 10.8C18.0049 10.4804 17.878 10.174 17.652 9.948C17.426 9.72204 17.1196 9.59509 16.8 9.59509C16.4804 9.59509 16.174 9.72204 15.948 9.948L13.2 12.708V1.2C13.2 0.88174 13.0736 0.576515 12.8485 0.351472C12.6235 0.126428 12.3183 0 12 0C11.6817 0 11.3765 0.126428 11.1515 0.351472C10.9264 0.576515 10.8 0.88174 10.8 1.2V12.708L8.052 9.948C7.94011 9.83611 7.80729 9.74736 7.6611 9.68681C7.51491 9.62626 7.35823 9.59509 7.2 9.59509C7.04177 9.59509 6.88509 9.62626 6.7389 9.68681C6.59271 9.74736 6.45989 9.83611 6.348 9.948C6.23611 10.0599 6.14736 10.1927 6.08681 10.3389C6.02626 10.4851 5.99509 10.6418 5.99509 10.8C5.99509 10.9582 6.02626 11.1149 6.08681 11.2611C6.14736 11.4073 6.23611 11.5401 6.348 11.652L11.148 16.452Z" fill="white" />
                                        </svg>
                                        @lang('lang.import_addresses')
                                    </button>
                                    <span class="float-right pr-3">Download sample file <a href="">Here!</a></span>
                                </div>
                            </div>
                        </form>
                        <div class="table-responsive py-2">
                            <table id="table_address" class="table text-center">
                                <thead style="background-color: #E9EAEF;">
                                    <tr>
                                        <th></th>
                                        <th>@lang('lang.address')</th>
                                        <th>@lang('lang.description')</th>
                                        <th>@lang('lang.picture')</th>
                                        <th>@lang('lang.signature')</th>
                                        <th>@lang('lang.note')</th>
                                        <th>@lang('lang.validation')</th>
                                        <th>@lang('lang.actions')</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                            <div class="col-lg-4 float-right text-right">
                                <button type="button" class="btn text-white" style="background-color: rgb(35, 58, 133); width: 100%; border-radius: 8px;">Save Trip</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--add address Modal -->
        <div class="modal fade" style="height: 30rem;" id="addAddressModal" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content bg-white">
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="text" id="addressTile" class="form-control" placeholder="Enter Address Name" style="border-right: none;">
                                    <div class="input-group-append">
                                        <button type="button" id="map_button" data-toggle="modal" data-target="#viewlocation" onclick="initMap()" class="input-group-text bg-white p-2" style="border: 1px solid #CED4DA; border-left: none;">
                                            <svg width="15" height="20" viewBox="0 0 15 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M7.5 0C3.35 0 0 3.35 0 7.5C0 12.5 7.5 20 7.5 20C7.5 20 15 12.5 15 7.5C15 3.35 11.65 0 7.5 0ZM7.5 2.5C10.275 2.5 12.5 4.75 12.5 7.5C12.5 10.275 10.275 12.5 7.5 12.5C4.75 12.5 2.5 10.275 2.5 7.5C2.5 4.75 4.75 2.5 7.5 2.5Z" fill="#ACADAE" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" id="addressDesc" placeholder="Enter Address Description"></textarea>
                            </div>
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" id="addressPicture" type="checkbox" />
                                    <label class="form-check-label" for="pictureCheckbox">Picture</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" id="addressSignature" type="checkbox">
                                    <label class="form-check-label" for="signatureCheckbox">Signature</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" id="addressNote" type="checkbox">
                                    <label class="form-check-label" for="noteCheckbox">Note</label>
                                </div>
                            </div>
                        </form>
                    </div>
                    <button type="button" id="btn_address_detail" class="btn btn-primary mr-3 ml-auto px-4 mb-3" style="background-color: #E45F00; border-radius: 5px;">Add</button>
                </div>
            </div>
        </div>
    </div>
    <!-- viewlocation Modal -->
    <div class="modal fade" id="viewlocation" tabindex="-1" aria-labelledby="viewlocationLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="viewlocationLabel"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="map"></div>
                    <div class="mt-3">
                        <h6>@lang('lang.your_location')</h6>
                    </div>
                    <div class="row mt-3 text-center">
                        <div class="col-lg-12">
                            <button type="button" id="address_confirm" data-dismiss="modal" class="btn text-white" style="background-color: #233A85; width: 70%;">Confirm Location</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- viewlocation Modal End -->

    <script>
        $("#map_button").on("click", function initMap() {
            // Set the initial location
            var initialLocation = {
                lat: 0,
                lng: 0
            };

            // Create the map
            var map = new google.maps.Map(document.getElementById('map'), {
                center: initialLocation,
                zoom: 12
            });

            // Initialize the marker variable
            var marker = null;

            // Add a click event listener to the map
            map.addListener('click', function(event) {
                // Retrieve the clicked coordinates
                var clickedLocation = event.latLng;

                // Perform geocoding to get the value of the location
                geocodeLatLng(clickedLocation);

                // Remove previous marker, if any
                if (marker) {
                    marker.setMap(null);
                }

                // Create a new marker at the clicked location
                marker = new google.maps.Marker({
                    position: clickedLocation,
                    map: map,
                    title: 'Selected Location'
                });
            });

            // Get the user's current location
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function(position) {
                    var userLocation = {
                        lat: position.coords.latitude,
                        lng: position.coords.longitude
                    };

                    // Center the map on the user's location
                    map.setCenter(userLocation);

                    // Create a marker at the user's location
                    var marker = new google.maps.Marker({
                        position: userLocation,
                        map: map,
                        title: 'Your Location'
                    });
                }, function() {
                    console.log('Error: The Geolocation service failed.');
                });
            } else {
                console.log('Error: Your browser doesn\'t support geolocation.');
            }

            function geocodeLatLng(location) {
                var geocoder = new google.maps.Geocoder();

                geocoder.geocode({
                    'location': location
                }, function(results, status) {
                    if (status === 'OK') {
                        if (results[0]) {
                            var address = results[0].formatted_address;
                            $(document).on('click', '#address_confirm', function() {
                                $('#addressTile').val(address);
                                // $('#viewlocation').prop('checked', false);
                                // $('#viewlocation').removeClass('show');
                            });
                            console.log('Selected location:', address);
                            // Do something with the address value
                        } else {
                            console.log('No results found');
                        }
                    } else {
                        console.log('Geocoder failed due to: ' + status);
                    }
                });
            }
        });
    </script>




    @endsection