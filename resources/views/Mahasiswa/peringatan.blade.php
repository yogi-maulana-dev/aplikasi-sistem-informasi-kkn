@extends('tampilan_mhs.index')
@section('peringatan')
    <div class="content-inner container-fluid pb-0" id="page_layout">
        <div class="row">

            <div class="col-lg-12">
                <div class="profile-content tab-content iq-tab-fade-up">

                    <div id="profile-activity" class="tab-pane fade active show">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="card-title text-warning">Peringatann !!!
                                    </h4>
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="alert alert-danger mt-4">
                               <h4 class="card-title text-danger">Yang dapat input tugas hanya ketua, jika anda belum menjadi ketua silakan hubungi admin !!
                                            </h4>
                                </div>
                      
                                
                            </div>
                        </div>

                    

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
