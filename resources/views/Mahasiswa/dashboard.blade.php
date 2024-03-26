@extends('tampilan_mhs.index')
@section('dashboard')
   
        
        <div class="content-inner container-fluid pb-0" id="page_layout">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-wrap align-items-center justify-content-between">
                                <div class="d-flex flex-wrap align-items-center">
                                    <div
                                        class="profile-img position-relative me-3 mb-3 mb-lg-0 profile-logo profile-logo1">
                                        <img src="/admin/images/avatars/01.png" alt="User-Profile"
                                            class="theme-color-default-img img-fluid rounded-pill avatar-100"
                                            loading="lazy" />
                                        <img src="/admin/images/avatars/avtar_1.png" alt="User-Profile"
                                            class="theme-color-purple-img img-fluid rounded-pill avatar-100"
                                            loading="lazy" />
                                        <img src="/admin/images/avatars/avtar_2.png" alt="User-Profile"
                                            class="theme-color-blue-img img-fluid rounded-pill avatar-100"
                                            loading="lazy" />
                                        <img src="/admin/images/avatars/avtar_4.png" alt="User-Profile"
                                            class="theme-color-green-img img-fluid rounded-pill avatar-100"
                                            loading="lazy" />
                                        <img src="/admin/images/avatars/avtar_5.png" alt="User-Profile"
                                            class="theme-color-yellow-img img-fluid rounded-pill avatar-100"
                                            loading="lazy" />
                                        <img src="/admin/images/avatars/avtar_3.png" alt="User-Profile"
                                            class="theme-color-pink-img img-fluid rounded-pill avatar-100"
                                            loading="lazy" />
                                    </div>
                                    <div class="d-flex flex-wrap align-items-center mb-3 mb-sm-0">
                                        <h4 class="me-2 h4">{{ Auth::guard('web')->user()->namalengkap }}</h4>
                                 
                                    </div>
                                </div>
                                <ul class="d-flex nav nav-pills mb-0 text-center profile-tab" data-toggle="slider-tab"
                                    id="profile-pills-tab" role="tablist">
                                    {{-- <li class="nav-item">
                                        <a class="nav-link active show" data-bs-toggle="tab" href="#profile-feed"
                                            role="tab" aria-selected="false">Feed</a>
                                    </li> --}}
                                    <li class="nav-item">
                                        <a class="nav-link active show" data-bs-toggle="tab" href="#profile-activity"
                                            role="tab" aria-selected="false">Activity</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#profile-profile"
                                            role="tab" aria-selected="false">Profile</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            
                <div class="col-lg-12">
                    <div class="profile-content tab-content iq-tab-fade-up">
                        
                        <div id="profile-activity" class="tab-pane fade active show">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between">
                                    <div class="header-title">
                                        <h4 class="card-title">Pengumuman</h4>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div
                                        class="iq-timeline0 m-0 d-flex align-items-center justify-content-between position-relative">
                                        <ul class="list-inline p-0 m-0">
                                            {{-- <li>
                                                <div class="timeline-dots timeline-dot1 border-primary text-primary">
                                                </div>
                                                <h6 class="float-left mb-1">Client Login</h6>
                                                <small class="float-right mt-1">24 November 2019</small>
                                                <div class="d-inline-block w-100">
                                                    <p>Bonbon macaroon jelly beans gummi bears jelly lollipop apple</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="timeline-dots timeline-dot1 border-success text-success">
                                                </div>
                                                <h6 class="float-left mb-1">Scheduled Maintenance</h6>
                                                <small class="float-right mt-1">23 November 2019</small>
                                                <div class="d-inline-block w-100">
                                                    <p>Bonbon macaroon jelly beans gummi bears jelly lollipop apple</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="timeline-dots timeline-dot1 border-danger text-danger"></div>
                                                <h6 class="float-left mb-1">Dev Meetup</h6>
                                                <small class="float-right mt-1">20 November 2019</small>
                                                <div class="d-inline-block w-100">
                                                    <p>Bonbon macaroon jelly beans <a href="#">gummi bears</a>gummi
                                                        bears jelly lollipop apple</p>
                                                    <div class="iq-media-group iq-media-group-1">
                                                        <a href="#" class="iq-media-1">
                                                            <div class="icon iq-icon-box-3 rounded-pill">SP</div>
                                                        </a>
                                                        <a href="#" class="iq-media-1">
                                                            <div class="icon iq-icon-box-3 rounded-pill">PP</div>
                                                        </a>
                                                        <a href="#" class="iq-media-1">
                                                            <div class="icon iq-icon-box-3 rounded-pill">MM</div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="timeline-dots timeline-dot1 border-primary text-primary">
                                                </div>
                                                <h6 class="float-left mb-1">Client Call</h6>
                                                <small class="float-right mt-1">19 November 2019</small>
                                                <div class="d-inline-block w-100">
                                                    <p>Bonbon macaroon jelly beans gummi bears jelly lollipop apple</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="timeline-dots timeline-dot1 border-warning text-warning">
                                                </div>
                                                <h6 class="float-left mb-1">Mega event</h6>
                                                <small class="float-right mt-1">15 November 2019</small>
                                                <div class="d-inline-block w-100">
                                                    <p>Bonbon macaroon jelly beans gummi bears jelly lollipop apple</p>
                                                </div>
                                            </li> --}}
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div id="profile-profile" class="tab-pane fade">
                            <div class="card">
                                <div class="card-header">
                                    <div class="header-title">
                                        <h4 class="card-title">Pengumuman</h4>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="text-left">
                                   
                                        <div class="mt-3">
                                            
                                            <p class="d-inline-block pl-3"> - Perhatikan untuk ketua kelompok akan dipilih dengan mengisi form data  diri lalu diberikan kepada admin, membawa bukti pembayaran.</p>
                                          
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <div class="header-title">
                                        <h4 class="card-title">KKN KELOMPOK ? TAHUN ?</h4>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="user-bio">
                                        <p>Tart I love sugar plum I love oat cake. Sweet roll caramels I love jujubes.
                                            Topping cake wafer.</p>
                                    </div>
                                    <div class="mt-2">
                                        <h6 class="mb-1">Joined:</h6>
                                        <p>Feb 15, 2021</p>
                                    </div>
                                    <div class="mt-2">
                                        <h6 class="mb-1">Lives:</h6>
                                        <p>United States of America</p>
                                    </div>
                                    <div class="mt-2">
                                        <h6 class="mb-1">Email:</h6>
                                        <p><a href="#" class="text-body"> austin@gmail.com</a></p>
                                    </div>
                                    <div class="mt-2">
                                        <h6 class="mb-1">Url:</h6>
                                        <p><a href="#" class="text-body" target="_blank"> www.bootstrap.com </a>
                                        </p>
                                    </div>
                                    <div class="mt-2">
                                        <h6 class="mb-1">Contact:</h6>
                                        <p><a href="#" class="text-body">(001) 4544 565 456</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="offcanvas offcanvas-bottom share-offcanvas" tabindex="-1" id="share-btn"
                aria-labelledby="shareBottomLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="shareBottomLabel">Share</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body small">
                    <div class="d-flex flex-wrap align-items-center">
                        <div class="text-center me-3 mb-3">
                            <img src="/admin/images/brands/08.png" class="img-fluid rounded mb-2" alt=""
                                loading="lazy">
                            <h6>Facebook</h6>
                        </div>
                        <div class="text-center me-3 mb-3">
                            <img src="/admin/images/brands/09.png" class="img-fluid rounded mb-2" alt=""
                                loading="lazy">
                            <h6>Twitter</h6>
                        </div>
                        <div class="text-center me-3 mb-3">
                            <img src="/admin/images/brands/10.png" class="img-fluid rounded mb-2" alt=""
                                loading="lazy">
                            <h6>Instagram</h6>
                        </div>
                        <div class="text-center me-3 mb-3">
                            <img src="/admin/images/brands/11.png" class="img-fluid rounded mb-2" alt=""
                                loading="lazy">
                            <h6>Google Plus</h6>
                        </div>
                        <div class="text-center me-3 mb-3">
                            <img src="/admin/images/brands/13.png" class="img-fluid rounded mb-2" alt=""
                                loading="lazy">
                            <h6>In</h6>
                        </div>
                        <div class="text-center me-3 mb-3">
                            <img src="/admin/images/brands/12.png" class="img-fluid rounded mb-2" alt=""
                                loading="lazy">
                            <h6>YouTube</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Section Start -->
  @include('tampilan_mhs.javascript')
        <!-- Footer Section End -->
    </main>
 @endsection
