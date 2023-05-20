@extends('layouts.main')

@section('main-section')

<style>
    .draggable {
      background-color: #f1f1f1;
      padding: 10px;
      margin-bottom: 10px;
      cursor: grab;
    }
</style>

<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper py-0">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2 py-2">
                    <svg width="19" height="24" viewBox="0 0 19 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.14286 0C12.9257 0 16 3.04 16 6.8C16 11.8971 9.14286 19.4286 9.14286 19.4286C9.14286 19.4286 2.28571 11.8971 2.28571 6.8C2.28571 3.04 5.36 0 9.14286 0ZM9.14286 4.57143C8.53665 4.57143 7.95527 4.81224 7.52661 5.2409C7.09796 5.66955 6.85714 6.25093 6.85714 6.85714C6.85714 7.15731 6.91626 7.45453 7.03113 7.73185C7.146 8.00916 7.31437 8.26114 7.52661 8.47339C7.95527 8.90204 8.53665 9.14286 9.14286 9.14286C9.74907 9.14286 10.3304 8.90204 10.7591 8.47339C11.1878 8.04473 11.4286 7.46335 11.4286 6.85714C11.4286 6.25093 11.1878 5.66955 10.7591 5.2409C10.3304 4.81224 9.74907 4.57143 9.14286 4.57143ZM18.2857 19.4286C18.2857 21.9543 14.1943 24 9.14286 24C4.09143 24 0 21.9543 0 19.4286C0 17.9543 1.39429 16.64 3.55429 15.8057L4.28571 16.8457C3.05143 17.36 2.28571 18.0686 2.28571 18.8571C2.28571 20.4343 5.36 21.7143 9.14286 21.7143C12.9257 21.7143 16 20.4343 16 18.8571C16 18.0686 15.2343 17.36 14 16.8457L14.7314 15.8057C16.8914 16.64 18.2857 17.9543 18.2857 19.4286Z" fill="white" />
                    </svg>
                </span> Map
            </h3>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <span style="color: #ACADAE;">Today: </span> <span>23 December, 2023</span>
                </div>
                <div class="col-lg-9 text-right">
                    <button class="btn text-white btn-sm" style="background-color: #0F771A; border-radius: 6px;">Start Trip</button>
                    <button class="btn btn-sm text-white" style="background-color: #233A85; border-radius: 6px;">End Trip</button>
                </div>
            </div>
            <div class="bg-white py-3 px-2 mt-3" style="border-radius: 20px;">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="text-center">
                            <h3>Trips / Routes</h3>
                        </div>
                        <hr>
                        <div class="mb-3 mx-3">
                            <svg width="11" height="12" viewBox="0 0 11 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect y="0.715942" width="10.4583" height="10.4583" rx="2" fill="#E45F00" />
                            </svg>
                            <span style="font-size: larger;">Trip Title</span>
                        </div>
                        <div style="overflow-y: scroll; height: 40%;">
                            <div class="px-2">
                                <div class="card bg-white mb-2 draggable" style="border-radius: 20px; border: none; box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.5);
-webkit-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.5);
-moz-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.5);">
                                    <div class="card-body p-0 py-2 px-2">
                                        <div class="d-flex justify-content-between border-bottom">
                                            <p style="color: #ACADAE; font-size: smaller;">23 December, 2023</p>
                                            <svg width="15" height="15" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8 4C8 6.20915 6.20915 8 4 8C1.79085 8 0 6.20915 0 4C0 1.79085 1.79085 0 4 0C6.20915 0 8 1.79085 8 4ZM3.53732 6.11797L6.50506 3.15023C6.60584 3.04945 6.60584 2.88605 6.50506 2.78527L6.14011 2.42032C6.03934 2.31953 5.87594 2.31953 5.77515 2.42032L3.35484 4.84061L2.22485 3.71063C2.12408 3.60985 1.96068 3.60985 1.85989 3.71063L1.49494 4.07558C1.39416 4.17635 1.39416 4.33976 1.49494 4.44053L3.17235 6.11795C3.27315 6.21874 3.43653 6.21874 3.53732 6.11797Z" fill="#0F771A" />
                                            </svg>
                                            <p style="color: #0F771A;">Completed</p>
                                        </div>
                                        <div class="px-2 py-2">
                                            <span>Waypoint Address</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card bg-white mb-2 draggable" style="border-radius: 20px; border: none; box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.5);
-webkit-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.5);
-moz-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.5);">
                                    <div class="card-body p-0 py-2 px-2">
                                        <div class="d-flex justify-content-between border-bottom">
                                            <p style="color: #ACADAE; font-size: smaller;">23 December, 2023</p>
                                            <svg width="15" height="15" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="4" cy="4" r="4" fill="#233A85" />
                                            </svg>
                                            <p style="color: #233A85;">Ongoing</p>
                                            <svg width="15" height="15" viewBox="0 0 12 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1.14076 4.76329C2.28309 -0.258295 9.72273 -0.252496 10.8593 4.76909C11.5261 7.71478 9.69373 10.2082 8.08752 11.7506C6.922 12.8755 5.07805 12.8755 3.9067 11.7506C2.30628 10.2082 0.473925 7.70898 1.14076 4.76329Z" stroke="#ACADAE" stroke-opacity="0.3" />
                                                <path d="M7.16002 7.35533L4.86377 5.05908" stroke="#ACADAE" stroke-opacity="0.3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M7.13658 5.08228L4.84033 7.3785" stroke="#ACADAE" stroke-opacity="0.3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </div>
                                        <div class="px-2 py-2">
                                            <span>Waypoint Address</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card bg-white mb-2 draggable" style="border-radius: 20px; border: none; box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.5);
-webkit-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.5);
-moz-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.5);">
                                    <div class="card-body p-0 py-2 px-2">
                                        <div class="d-flex justify-content-between border-bottom">
                                            <p style="color: #ACADAE; font-size: smaller;">23 December, 2023</p>
                                            <svg width="15" height="15" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="4" cy="4" r="3.5" stroke="#ACADAE" />
                                            </svg>
                                            <p style="color: #ACADAE;">Skipped</p>
                                            <svg width="15" height="15" viewBox="0 0 12 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1.14076 4.76329C2.28309 -0.258295 9.72273 -0.252496 10.8593 4.76909C11.5261 7.71478 9.69373 10.2082 8.08752 11.7506C6.922 12.8755 5.07805 12.8755 3.9067 11.7506C2.30628 10.2082 0.473925 7.70898 1.14076 4.76329Z" stroke="#ACADAE" stroke-opacity="0.3" />
                                                <path d="M7.16002 7.35533L4.86377 5.05908" stroke="#ACADAE" stroke-opacity="0.3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M7.13658 5.08228L4.84033 7.3785" stroke="#ACADAE" stroke-opacity="0.3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </div>
                                        <div class="px-2 py-2">
                                            <span>Waypoint Address</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card bg-white mb-2 draggable" style="border-radius: 20px; border: none; box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.5);
-webkit-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.5);
-moz-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.5);">
                                    <div class="card-body p-0 py-2 px-2">
                                        <div class="d-flex justify-content-between border-bottom">
                                            <p style="color: #ACADAE; font-size: smaller;">23 December, 2023</p>
                                            <svg width="15" height="15" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="4" cy="4" r="3.5" stroke="#ACADAE" />
                                            </svg>
                                            <p style="color: #ACADAE;">Skipped</p>
                                            <svg width="15" height="15" viewBox="0 0 12 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1.14076 4.76329C2.28309 -0.258295 9.72273 -0.252496 10.8593 4.76909C11.5261 7.71478 9.69373 10.2082 8.08752 11.7506C6.922 12.8755 5.07805 12.8755 3.9067 11.7506C2.30628 10.2082 0.473925 7.70898 1.14076 4.76329Z" stroke="#ACADAE" stroke-opacity="0.3" />
                                                <path d="M7.16002 7.35533L4.86377 5.05908" stroke="#ACADAE" stroke-opacity="0.3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M7.13658 5.08228L4.84033 7.3785" stroke="#ACADAE" stroke-opacity="0.3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </div>
                                        <div class="px-2 py-2">
                                            <span>Waypoint Address</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card bg-white mb-2 draggable" style="border-radius: 20px; border: none; box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.5);
-webkit-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.5);
-moz-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.5);">
                                    <div class="card-body p-0 py-2 px-2">
                                        <div class="d-flex justify-content-between border-bottom">
                                            <p style="color: #ACADAE; font-size: smaller;">23 December, 2023</p>
                                            <svg width="15" height="15" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8 4C8 6.20915 6.20915 8 4 8C1.79085 8 0 6.20915 0 4C0 1.79085 1.79085 0 4 0C6.20915 0 8 1.79085 8 4ZM3.53732 6.11797L6.50506 3.15023C6.60584 3.04945 6.60584 2.88605 6.50506 2.78527L6.14011 2.42032C6.03934 2.31953 5.87594 2.31953 5.77515 2.42032L3.35484 4.84061L2.22485 3.71063C2.12408 3.60985 1.96068 3.60985 1.85989 3.71063L1.49494 4.07558C1.39416 4.17635 1.39416 4.33976 1.49494 4.44053L3.17235 6.11795C3.27315 6.21874 3.43653 6.21874 3.53732 6.11797Z" fill="#0F771A" />
                                            </svg>
                                            <p style="color: #0F771A;">Completed</p>
                                        </div>
                                        <div class="px-2 py-2">
                                            <span>Waypoint Address</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-3 text-right">
                            <button class="btn btn-sm text-white" style="background-color: #233A85;">Update</button>
                            <button class="btn btn-sm text-white" style="background-color: #233A85;">Optimize</button>
                        </div>
                        <hr>
                        <div class="card" style="border-radius: 20px;">
                            <div class="card-header text-center text-white" style="background: linear-gradient(180deg, #452C88 0%, #6A53A4 100%);">
                                <h5 class="py-auto">Active Waypoint</h5>
                            </div>
                            <div class="card-body px-2 py-2">
                                <h6>Waypoint 2</h6>
                                <textarea name="" id="" class="form-control" rows="3"></textarea>
                                <div>
                                    <div>
                                        <svg width="6" height="6" viewBox="0 0 6 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5.53111 3.9191L3.93818 3L5.53111 2.0809C5.62087 2.0291 5.65158 1.91449 5.59978 1.82473L5.22454 1.17516C5.17275 1.08551 5.05802 1.05469 4.96825 1.10648L3.37532 2.02559V0.1875C3.37532 0.0839062 3.2913 0 3.18771 0H2.43724C2.33365 0 2.24962 0.0839062 2.24962 0.1875V2.0257L0.656692 1.1066C0.566926 1.0548 0.4522 1.08563 0.400403 1.17527L0.0251685 1.82473C-0.0266283 1.91438 0.00407479 2.0291 0.0938404 2.0809L1.68677 3L0.0938404 3.9191C0.00407479 3.9709 -0.0266283 4.08563 0.0251685 4.17527L0.400403 4.82484C0.4522 4.91449 0.566926 4.9452 0.656692 4.89352L2.24962 3.97441V5.8125C2.24962 5.91609 2.33365 6 2.43724 6H3.18771C3.2913 6 3.37532 5.91609 3.37532 5.8125V3.9743L4.96825 4.8934C5.05802 4.9452 5.17275 4.91449 5.22454 4.82473L5.59978 4.17516C5.65158 4.08551 5.62087 3.9709 5.53111 3.9191Z" fill="#D11A2A" />
                                        </svg>
                                        <span>Picture Required</span>
                                    </div>
                                    <div>
                                        <svg width="6" height="6" viewBox="0 0 6 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5.53111 3.9191L3.93818 3L5.53111 2.0809C5.62087 2.0291 5.65158 1.91449 5.59978 1.82473L5.22454 1.17516C5.17275 1.08551 5.05802 1.05469 4.96825 1.10648L3.37532 2.02559V0.1875C3.37532 0.0839062 3.2913 0 3.18771 0H2.43724C2.33365 0 2.24962 0.0839062 2.24962 0.1875V2.0257L0.656692 1.1066C0.566926 1.0548 0.4522 1.08563 0.400403 1.17527L0.0251685 1.82473C-0.0266283 1.91438 0.00407479 2.0291 0.0938404 2.0809L1.68677 3L0.0938404 3.9191C0.00407479 3.9709 -0.0266283 4.08563 0.0251685 4.17527L0.400403 4.82484C0.4522 4.91449 0.566926 4.9452 0.656692 4.89352L2.24962 3.97441V5.8125C2.24962 5.91609 2.33365 6 2.43724 6H3.18771C3.2913 6 3.37532 5.91609 3.37532 5.8125V3.9743L4.96825 4.8934C5.05802 4.9452 5.17275 4.91449 5.22454 4.82473L5.59978 4.17516C5.65158 4.08551 5.62087 3.9709 5.53111 3.9191Z" fill="#D11A2A" />
                                        </svg>
                                        <span>Signature Required</span>
                                    </div>
                                    <div>
                                        <svg width="6" height="6" viewBox="0 0 6 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5.53111 3.9191L3.93818 3L5.53111 2.0809C5.62087 2.0291 5.65158 1.91449 5.59978 1.82473L5.22454 1.17516C5.17275 1.08551 5.05802 1.05469 4.96825 1.10648L3.37532 2.02559V0.1875C3.37532 0.0839062 3.2913 0 3.18771 0H2.43724C2.33365 0 2.24962 0.0839062 2.24962 0.1875V2.0257L0.656692 1.1066C0.566926 1.0548 0.4522 1.08563 0.400403 1.17527L0.0251685 1.82473C-0.0266283 1.91438 0.00407479 2.0291 0.0938404 2.0809L1.68677 3L0.0938404 3.9191C0.00407479 3.9709 -0.0266283 4.08563 0.0251685 4.17527L0.400403 4.82484C0.4522 4.91449 0.566926 4.9452 0.656692 4.89352L2.24962 3.97441V5.8125C2.24962 5.91609 2.33365 6 2.43724 6H3.18771C3.2913 6 3.37532 5.91609 3.37532 5.8125V3.9743L4.96825 4.8934C5.05802 4.9452 5.17275 4.91449 5.22454 4.82473L5.59978 4.17516C5.65158 4.08551 5.62087 3.9709 5.53111 3.9191Z" fill="#D11A2A" />
                                        </svg>
                                        <span>Note Required</span>
                                    </div>
                                </div>
                                <div class="text-right mt-1">
                                    <button class="btn p-0 btn-sm">
                                        <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle opacity="0.1" cx="18" cy="18" r="18" fill="#452C88" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M17.7941 24.7919C17.7943 24.7919 17.7944 24.792 18 24.5L17.7941 24.7919ZM18.2059 24.7919L18.2071 24.7909L18.2104 24.7886L18.2217 24.7805C18.2315 24.7735 18.2455 24.7634 18.2635 24.7501C18.2995 24.7237 18.3515 24.6849 18.4172 24.6345C18.5485 24.5335 18.7347 24.3855 18.9575 24.195C19.4028 23.8143 19.9967 23.2617 20.5916 22.5735C21.7728 21.2071 23 19.257 23 17.0275C23 15.6948 22.4737 14.4162 21.5363 13.4733C20.5988 12.5302 19.3268 12 18 12C16.6733 12 15.4013 12.5302 14.4637 13.4733C13.5263 14.4162 13 15.6948 13 17.0275C13 19.257 14.2272 21.2071 15.4084 22.5735C16.0033 23.2617 16.5972 23.8143 17.0425 24.195C17.2653 24.3855 17.4515 24.5335 17.5828 24.6345C17.6485 24.6849 17.7005 24.7237 17.7365 24.7501C17.7545 24.7634 17.7685 24.7735 17.7783 24.7805L17.7896 24.7886L17.7929 24.7909L17.7941 24.7919C17.9175 24.8787 18.0825 24.8787 18.2059 24.7919ZM18 24.5L18.2059 24.7919C18.2057 24.7919 18.2056 24.792 18 24.5ZM19.7857 17C19.7857 17.9862 18.9862 18.7857 18 18.7857C17.0138 18.7857 16.2143 17.9862 16.2143 17C16.2143 16.0138 17.0138 15.2143 18 15.2143C18.9862 15.2143 19.7857 16.0138 19.7857 17Z" fill="#452C88" />
                                        </svg>
                                    </button>
                                    <button class="btn p-0 btn-sm">
                                        <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle opacity="0.1" cx="18" cy="18" r="18" fill="#DF6F79" />
                                            <path d="M22.7679 16.7143H18.9107V12.8571C18.9107 12.3838 18.5269 12 18.0536 12H17.1964C16.7231 12 16.3393 12.3838 16.3393 12.8571V16.7143H12.4821C12.0088 16.7143 11.625 17.0981 11.625 17.5714V18.4286C11.625 18.9019 12.0088 19.2857 12.4821 19.2857H16.3393V23.1429C16.3393 23.6162 16.7231 24 17.1964 24H18.0536C18.5269 24 18.9107 23.6162 18.9107 23.1429V19.2857H22.7679C23.2412 19.2857 23.625 18.9019 23.625 18.4286V17.5714C23.625 17.0981 23.2412 16.7143 22.7679 16.7143Z" fill="#E45F00" />
                                        </svg>
                                    </button>
                                    <button class="btn p-0 btn-sm">
                                        <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle opacity="0.1" cx="18" cy="18" r="18" fill="#109CF1" fill-opacity="0.3" />
                                            <path d="M18.4808 18.6373L13.3824 23.7357C13.03 24.0881 12.4602 24.0881 12.1115 23.7357L11.2643 22.8885C10.9119 22.5361 10.9119 21.9663 11.2643 21.6176L14.8782 18.0037L11.2643 14.3899C10.9119 14.0375 10.9119 13.4677 11.2643 13.119L12.1078 12.2643C12.4602 11.9119 13.03 11.9119 13.3786 12.2643L18.477 17.3627C18.8332 17.7151 18.8332 18.2849 18.4808 18.6373ZM25.6785 17.3627L20.5801 12.2643C20.2277 11.9119 19.6579 11.9119 19.3093 12.2643L18.462 13.1115C18.1097 13.4639 18.1097 14.0337 18.462 14.3824L22.0759 17.9963L18.462 21.6101C18.1097 21.9625 18.1097 22.5323 18.462 22.881L19.3093 23.7282C19.6617 24.0806 20.2315 24.0806 20.5801 23.7282L25.6785 18.6298C26.0309 18.2849 26.0309 17.7151 25.6785 17.3627Z" fill="#109CF1" fill-opacity="0.3" />
                                        </svg>
                                    </button>
                                    <button class="btn p-0 btn-sm">
                                        <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle opacity="0.1" cx="18" cy="18" r="18" fill="#31A613" fill-opacity="0.3" />
                                            <path d="M23.0507 12.2332C22.1581 11.7366 21.0338 12.0597 20.54 12.9504L17.1126 19.1183L15.1511 17.1568C14.4302 16.4359 13.2616 16.4359 12.5407 17.1568C11.8198 17.8777 11.8198 19.0463 12.5407 19.7672L16.2329 23.4595C16.5819 23.8093 17.0526 24.0013 17.5382 24.0013L17.7938 23.9829C18.3671 23.9026 18.8701 23.5583 19.1517 23.0515L23.767 14.7439C24.2627 13.8523 23.9414 12.7289 23.0507 12.2332Z" fill="#31A613" fill-opacity="0.3" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="mapouter">
                            <div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=current location&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://capcuttemplate.org/">Capcut Template</a></div>
                            <style>
                                .mapouter {
                                    position: relative;
                                    text-align: right;
                                    width: 100%;
                                    height: 100%;
                                }

                                .gmap_canvas {
                                    overflow: hidden;
                                    background: none !important;
                                    width: 100%;
                                    height: 100%;
                                }

                                .gmap_iframe {
                                    height: 100% !important;
                                }
                            </style>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
  $(".draggable").draggable({
    containment: "parent",
    scroll: false,
    cursor: "move",
    start: function(event, ui) {
      ui.helper.data("startPosition", ui.position.top);
    },
    drag: function(event, ui) {
      var startPosition = ui.helper.data("startPosition");
      var draggedPosition = ui.position.top;
      var offset = draggedPosition - startPosition;

      $(".draggable").each(function() {
        if ($(this).is(ui.helper)) return; // Skip the dragged element
        var currentTop = $(this).position().top;
        $(this).css("top", currentTop + offset);
      });
    }
  });
});

    </script>
    @endsection