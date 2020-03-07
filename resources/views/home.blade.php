@extends('layouts.app')

@section('content')

<style>
    
@media (min-width: 576px) {
  .rounded-nav {
    border-radius: 50rem !important;
  }
}

@media (min-width: 576px) {
  .rounded-nav .nav-link {
    border-radius: 50rem !important;
  }
}

/* With arrow tabs */

.with-arrow .nav-link.active {
  position: relative;
}

.with-arrow .nav-link.active::after {
  content: "";
  border-left: 6px solid transparent;
  border-right: 6px solid transparent;
  border-top: 6px solid #2b90d9;
  position: absolute;
  bottom: -6px;
  left: 50%;
  transform: translateX(-50%);
  display: block;
}

/* lined tabs */

.lined .nav-link {
  border: none;
  border-bottom: 3px solid transparent;
}

.lined .nav-link:hover {
  border: none;
  border-bottom: 3px solid transparent;
}

.lined .nav-link.active {
  background: none;
  color: #555;
  border-color: #2b90d9;
}

</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-uppercase font-weight-bold">Dashboard</div>
            </div>
        </div>
    </div>
      <div class="p-5 bg-white rounded shadow mb-5">
    <!-- Lined tabs-->
     @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
    <ul id="myTab2" role="tablist" class="nav nav-tabs nav-pills with-arrow lined flex-column flex-sm-row text-center">
      <li class="nav-item flex-sm-fill">
        <a id="home2-tab" data-toggle="tab" href="#home2" role="tab" aria-controls="home2" aria-selected="true"
          class="nav-link text-uppercase font-weight-bold mr-sm-3 rounded-0 active">Blog</a>
      </li>
      <li class="nav-item flex-sm-fill">
        <a id="profile2-tab" data-toggle="tab" href="#profile2" role="tab" aria-controls="profile2"
          aria-selected="false" class="nav-link text-uppercase font-weight-bold mr-sm-3 rounded-0">Experiment</a>
      </li>
     
    </ul>
    <div id="myTab2Content" class="tab-content">
      <div id="home2" role="tabpanel" aria-labelledby="home-tab" class="tab-pane fade px-4 py-5 show active">
       
      </div>
      <div id="profile2" role="tabpanel" aria-labelledby="profile-tab" class="tab-pane fade px-4 py-5">
       
      </div>
     
    </div>
    <!-- End lined tabs -->
  </div>
</div>
@endsection
