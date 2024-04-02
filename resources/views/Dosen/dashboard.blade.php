@extends('tampilan_dosen.index')
@section('dashboard')
<div class="content-inner container-fluid pb-0" id="page_layout">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">
                            {{ $judul }}
                        </h4>
                    </div>
                </div>
                <div class="card-body">
                    <p class="mb-3">
                     Dasboard Admin
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
        
        <!-- Footer Section Start -->
        @include('tampilan_dosen.javascript')
        <!-- Footer Section End -->
    </main>
 @endsection
