@extends('layouts.main')

@section('main-section')

<style>
    .position-absolute {
        position: absolute;
        display: flex;
        z-index: 100;
        align-items: center;
        justify-content: center;
        height: 100%;
        width: 100%;
        bottom: 5.5rem;
    }
</style>

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
            <div class="row mb-2">
                <div class="col-lg-4">
                    <div class=" bg-white p-3" style="border-radius: 20px; box-shadow: 0px 0px 4px 1px rgba(0,0,0,0.3);
-webkit-box-shadow: 0px 0px 4px 1px rgba(0,0,0,0.3);
-moz-box-shadow: 0px 0px 4px 1px rgba(0,0,0,0.3);">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h5 style="color: #452C88;">Total Routes</h5>
                                <h3 style="color: #E45F00;">10</h3>
                            </div>
                            <div>
                                <svg width="70" height="70" viewBox="0 0 70 70" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="35" cy="35" r="35" fill="#452C88" fill-opacity="0.3" />
                                    <path d="M40.4768 49.4998H25.8749C23.4617 49.4998 21.5 47.538 21.5 45.1248C21.5 42.7116 23.4617 40.7498 25.8749 40.7498H38.1249C41.5023 40.7498 44.2498 38.0024 44.2498 34.6249C44.2498 31.2474 41.5023 28.4999 38.1249 28.4999H29.6182C28.9339 29.8492 28.0992 31.0252 27.2487 31.9999H38.1249C39.5721 31.9999 40.7498 33.1776 40.7498 34.6249C40.7498 36.0721 39.5721 37.2499 38.1249 37.2499H25.8749C21.5332 37.2499 18 40.7831 18 45.1248C18 49.4665 21.5332 52.9997 25.8749 52.9997H42.6626C41.8628 51.9882 41.0998 50.8175 40.4768 49.4998ZM23.25 18C20.3555 18 18 20.3555 18 23.25C18 28.8289 23.25 31.9999 23.25 31.9999C23.25 31.9999 28.4999 28.8272 28.4999 23.25C28.4999 20.3555 26.1444 18 23.25 18ZM23.25 25.8749C21.801 25.8749 20.625 24.699 20.625 23.25C20.625 21.801 21.801 20.625 23.25 20.625C24.699 20.625 25.8749 21.801 25.8749 23.25C25.8749 24.699 24.699 25.8749 23.25 25.8749Z" fill="#452C88" />
                                    <path d="M47.7502 39.0001C44.8557 39.0001 42.5002 41.3555 42.5002 44.25C42.5002 49.829 47.7502 53 47.7502 53C47.7502 53 53.0002 49.8272 53.0002 44.25C53.0002 41.3555 50.6447 39.0001 47.7502 39.0001ZM47.7502 46.875C46.3012 46.875 45.1252 45.699 45.1252 44.25C45.1252 42.801 46.3012 41.625 47.7502 41.625C49.1992 41.625 50.3752 42.801 50.3752 44.25C50.3752 45.699 49.1992 46.875 47.7502 46.875Z" fill="#452C88" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class=" bg-white p-3" style="border-radius: 20px; box-shadow: 0px 0px 4px 1px rgba(0,0,0,0.3);
-webkit-box-shadow: 0px 0px 4px 1px rgba(0,0,0,0.3);
-moz-box-shadow: 0px 0px 4px 1px rgba(0,0,0,0.3);">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h5 style="color: #452C88;">Pending Routes</h5>
                                <h3 style="color: #E45F00;">10</h3>
                            </div>
                            <div>
                                <svg width="70" height="70" viewBox="0 0 70 70" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="35" cy="35" r="35" fill="#452C88" fill-opacity="0.3" />
                                    <path d="M40.4768 49.4998H25.8749C23.4617 49.4998 21.5 47.538 21.5 45.1248C21.5 42.7116 23.4617 40.7498 25.8749 40.7498H38.1249C41.5023 40.7498 44.2498 38.0024 44.2498 34.6249C44.2498 31.2474 41.5023 28.4999 38.1249 28.4999H29.6182C28.9339 29.8492 28.0992 31.0252 27.2487 31.9999H38.1249C39.5721 31.9999 40.7498 33.1776 40.7498 34.6249C40.7498 36.0721 39.5721 37.2499 38.1249 37.2499H25.8749C21.5332 37.2499 18 40.7831 18 45.1248C18 49.4665 21.5332 52.9997 25.8749 52.9997H42.6626C41.8628 51.9882 41.0998 50.8175 40.4768 49.4998ZM23.25 18C20.3555 18 18 20.3555 18 23.25C18 28.8289 23.25 31.9999 23.25 31.9999C23.25 31.9999 28.4999 28.8272 28.4999 23.25C28.4999 20.3555 26.1444 18 23.25 18ZM23.25 25.8749C21.801 25.8749 20.625 24.699 20.625 23.25C20.625 21.801 21.801 20.625 23.25 20.625C24.699 20.625 25.8749 21.801 25.8749 23.25C25.8749 24.699 24.699 25.8749 23.25 25.8749Z" fill="#452C88" />
                                    <path d="M47.7502 39.0001C44.8557 39.0001 42.5002 41.3555 42.5002 44.25C42.5002 49.829 47.7502 53 47.7502 53C47.7502 53 53.0002 49.8272 53.0002 44.25C53.0002 41.3555 50.6447 39.0001 47.7502 39.0001ZM47.7502 46.875C46.3012 46.875 45.1252 45.699 45.1252 44.25C45.1252 42.801 46.3012 41.625 47.7502 41.625C49.1992 41.625 50.3752 42.801 50.3752 44.25C50.3752 45.699 49.1992 46.875 47.7502 46.875Z" fill="#452C88" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class=" bg-white p-3" style="border-radius: 20px; box-shadow: 0px 0px 4px 1px rgba(0,0,0,0.3);
-webkit-box-shadow: 0px 0px 4px 1px rgba(0,0,0,0.3);
-moz-box-shadow: 0px 0px 4px 1px rgba(0,0,0,0.3);">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h5 style="color: #452C88;">Completed Trips</h5>
                                <h3 style="color: #E45F00;">500</h3>
                            </div>
                            <div>
                                <svg width="70" height="70" viewBox="0 0 70 70" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="35" cy="35" r="35" fill="#452C88" fill-opacity="0.3" />
                                    <path d="M45.3636 46.0455C46.7973 46.0455 47.9545 44.8882 47.9545 43.4546C47.9545 42.0209 46.7973 40.8636 45.3636 40.8636C43.93 40.8636 42.7727 42.0209 42.7727 43.4546C42.7727 44.8882 43.93 46.0455 45.3636 46.0455ZM47.9545 30.5H43.6364V34.8182H51.34L47.9545 30.5ZM24.6364 46.0455C26.07 46.0455 27.2273 44.8882 27.2273 43.4546C27.2273 42.0209 26.07 40.8636 24.6364 40.8636C23.2027 40.8636 22.0455 42.0209 22.0455 43.4546C22.0455 44.8882 23.2027 46.0455 24.6364 46.0455ZM48.8182 27.9091L54 34.8182V43.4546H50.5455C50.5455 46.3218 48.2309 48.6364 45.3636 48.6364C42.4964 48.6364 40.1818 46.3218 40.1818 43.4546H29.8182C29.8182 46.3218 27.5036 48.6364 24.6364 48.6364C21.7691 48.6364 19.4545 46.3218 19.4545 43.4546H16V24.4545C16 22.5373 17.5373 21 19.4545 21H43.6364V27.9091H48.8182ZM19.4545 24.4545V40H20.7673C21.7173 38.9464 23.0991 38.2727 24.6364 38.2727C26.1736 38.2727 27.5555 38.9464 28.5055 40H40.1818V24.4545H19.4545ZM22.9091 32.2273L25.5 29.6364L28.0909 32.2273L34.1364 26.1818L36.7273 28.7727L28.0909 37.4091L22.9091 32.2273Z" fill="#452C88" />
                                </svg>
                            </div>
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
                    <div class="table-responsive bg-white mt-2" style="border-radius: 15px;">
                        <table class="table">
                            <thead style="background-color: #E9EAEF;">
                                <tr>
                                    <th>Trip Title</th>
                                    <th>Trip Date</th>
                                    <th>Start Point</th>
                                    <th>End Point</th>
                                    <th>Status</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Lorem Ipsum</td>
                                    <td>Sep 23, 2023</td>
                                    <td>Town, City, Country</td>
                                    <td>Town, City, Country</td>
                                    <td>
                                        <span class="badge p-2" style="background-color: #31A6132E; color: #31A613;">Completed</span>
                                    </td>
                                    <td>
                                        <button class="btn p-0">
                                            <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle opacity="0.1" cx="18" cy="18" r="18" fill="#ACADAE" />
                                                <path d="M17.7167 13C13.5 13 11 18 11 18C11 18 13.5 23 17.7167 23C21.8333 23 24.3333 18 24.3333 18C24.3333 18 21.8333 13 17.7167 13ZM17.6667 14.6667C19.5167 14.6667 21 16.1667 21 18C21 19.85 19.5167 21.3333 17.6667 21.3333C15.8333 21.3333 14.3333 19.85 14.3333 18C14.3333 16.1667 15.8333 14.6667 17.6667 14.6667ZM17.6667 16.3333C16.75 16.3333 16 17.0833 16 18C16 18.9167 16.75 19.6667 17.6667 19.6667C18.5833 19.6667 19.3333 18.9167 19.3333 18C19.3333 17.8333 19.2667 17.6833 19.2333 17.5333C19.1 17.8 18.8333 18 18.5 18C18.0333 18 17.6667 17.6333 17.6667 17.1667C17.6667 16.8333 17.8667 16.5667 18.1333 16.4333C17.9833 16.3833 17.8333 16.3333 17.6667 16.3333Z" fill="black" />
                                            </svg>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Lorem Ipsum</td>
                                    <td>Sep 23, 2023</td>
                                    <td>Town, City, Country</td>
                                    <td>Town, City, Country</td>
                                    <td>
                                        <span class="badge p-2" style="background-color: #31A6132E; color: #31A613;">Completed</span>
                                    </td>
                                    <td>
                                        <button class="btn p-0">
                                            <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle opacity="0.1" cx="18" cy="18" r="18" fill="#ACADAE" />
                                                <path d="M17.7167 13C13.5 13 11 18 11 18C11 18 13.5 23 17.7167 23C21.8333 23 24.3333 18 24.3333 18C24.3333 18 21.8333 13 17.7167 13ZM17.6667 14.6667C19.5167 14.6667 21 16.1667 21 18C21 19.85 19.5167 21.3333 17.6667 21.3333C15.8333 21.3333 14.3333 19.85 14.3333 18C14.3333 16.1667 15.8333 14.6667 17.6667 14.6667ZM17.6667 16.3333C16.75 16.3333 16 17.0833 16 18C16 18.9167 16.75 19.6667 17.6667 19.6667C18.5833 19.6667 19.3333 18.9167 19.3333 18C19.3333 17.8333 19.2667 17.6833 19.2333 17.5333C19.1 17.8 18.8333 18 18.5 18C18.0333 18 17.6667 17.6333 17.6667 17.1667C17.6667 16.8333 17.8667 16.5667 18.1333 16.4333C17.9833 16.3833 17.8333 16.3333 17.6667 16.3333Z" fill="black" />
                                            </svg>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Lorem Ipsum</td>
                                    <td>Sep 23, 2023</td>
                                    <td>Town, City, Country</td>
                                    <td>Town, City, Country</td>
                                    <td>
                                        <span class="badge p-2" style="background-color: #31A6132E; color: #31A613;">Completed</span>
                                    </td>
                                    <td>
                                        <button class="btn p-0">
                                            <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle opacity="0.1" cx="18" cy="18" r="18" fill="#ACADAE" />
                                                <path d="M17.7167 13C13.5 13 11 18 11 18C11 18 13.5 23 17.7167 23C21.8333 23 24.3333 18 24.3333 18C24.3333 18 21.8333 13 17.7167 13ZM17.6667 14.6667C19.5167 14.6667 21 16.1667 21 18C21 19.85 19.5167 21.3333 17.6667 21.3333C15.8333 21.3333 14.3333 19.85 14.3333 18C14.3333 16.1667 15.8333 14.6667 17.6667 14.6667ZM17.6667 16.3333C16.75 16.3333 16 17.0833 16 18C16 18.9167 16.75 19.6667 17.6667 19.6667C18.5833 19.6667 19.3333 18.9167 19.3333 18C19.3333 17.8333 19.2667 17.6833 19.2333 17.5333C19.1 17.8 18.8333 18 18.5 18C18.0333 18 17.6667 17.6333 17.6667 17.1667C17.6667 16.8333 17.8667 16.5667 18.1333 16.4333C17.9833 16.3833 17.8333 16.3333 17.6667 16.3333Z" fill="black" />
                                            </svg>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Lorem Ipsum</td>
                                    <td>Sep 23, 2023</td>
                                    <td>Town, City, Country</td>
                                    <td>Town, City, Country</td>
                                    <td>
                                        <span class="badge p-2" style="background-color: #31A6132E; color: #31A613;">Completed</span>
                                    </td>
                                    <td>
                                        <button class="btn p-0">
                                            <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle opacity="0.1" cx="18" cy="18" r="18" fill="#ACADAE" />
                                                <path d="M17.7167 13C13.5 13 11 18 11 18C11 18 13.5 23 17.7167 23C21.8333 23 24.3333 18 24.3333 18C24.3333 18 21.8333 13 17.7167 13ZM17.6667 14.6667C19.5167 14.6667 21 16.1667 21 18C21 19.85 19.5167 21.3333 17.6667 21.3333C15.8333 21.3333 14.3333 19.85 14.3333 18C14.3333 16.1667 15.8333 14.6667 17.6667 14.6667ZM17.6667 16.3333C16.75 16.3333 16 17.0833 16 18C16 18.9167 16.75 19.6667 17.6667 19.6667C18.5833 19.6667 19.3333 18.9167 19.3333 18C19.3333 17.8333 19.2667 17.6833 19.2333 17.5333C19.1 17.8 18.8333 18 18.5 18C18.0333 18 17.6667 17.6333 17.6667 17.1667C17.6667 16.8333 17.8667 16.5667 18.1333 16.4333C17.9833 16.3833 17.8333 16.3333 17.6667 16.3333Z" fill="black" />
                                            </svg>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
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
<!-- content-wrapper ends -->
@endsection