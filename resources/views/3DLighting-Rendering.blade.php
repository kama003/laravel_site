@extends('layouts.main')
@section('title', '3D Lighting & Rendering')
@section('content')
    <div class="page-title parallax parallax1 ">
            <div class="overlay"></div>
            <div class="container">
                <div class="page-title-content text-center">
                    <div class="page-title-heading ">
                        <h3 class="title breadcrumb_heading">3D Lighting & Rendering</h3>
                    </div>
                    <div class="breadcrumbs">
                       <ul>
                            <li class=""><a href="/">Home</a></li>
                            <li class="text-white">Services</li>
                            <li class="text-white">3D Lighting & Rendering</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> <!-- /.page-title -->

        <div class="content-wrap main-service-detail">
            <div class="container">
                <div class="row">
                    @yield('content', View::make('servicelink'))
                    
                    <div class="col-lg-8 col-sm-12">
                        <div class="wrap-service-detail pd-top-80"> 
                           
                             <img src="https://essitops.sirv.com/supremesite%20images/9209017a-5f53-4cf4-be11-d4f6cdddca47_realtime.png" width="100%" alt="3d light" class="mb-4">
                            <div class="textbox textbox-service-detail">
                                <h5 class="textbox-heading"><a href="#">Project Management</a></h5>
                                <div class="textbox-content">
                                    <p>
                                        In dignissim lorem metus, a cursus quam pulvinar id. In hac habitasse platea dictumst. Nullam faucibus, dui ut cursus auctor, odio ante maximus urna, vitae accumsan dui diam vel orci. Pellentesque dignissim molestie dolor at placerat. Donec eu cursus diam. Sed nec augue quis lorem congue maximus. Cras vehicula et lacus sit amet convallis. Vestibulum varius sapien eget ullamcorper volutpat. Mauris accumsan nunc sit amet turpis semper, at porta augue varius. In volutpat erat sapien, sed porta odio dignissim nec. Praesent et lorem est. Pellentesque eget neque nec turpis fringilla fringilla. Sed euismod consequat leo, at auctor dui vulputate id. Suspendisse eget ultricies urna.
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="textbox textbox-service-detail">
                                        <h5 class="textbox-heading"><a href="#">Benefit And Progress</a></h5>
                                        <div class="textbox-content">
                                            <p>
                                             In vel suscipit nisi diam at risus. Sed sed purus tempor, vestibulum tortor quis, laoreet quamosdo. Suspendisse commodo, nibh eusalem ullamcorper fringilla, est neque dapibus ligula, sed iaculis massa id sapien. Vestibum vitae faucibus erat. Proin sapien felis, suscipit bibendum tortor vel, tincidunt mollis ipsum. Quisque ultricies lacus sed aliquet iaculis. Morbi lacinia lorem id odio interdum, nec ultricies leo scelerisque. Etiam odio mi, cursus dolo
                                             interdum venenatis quis, maximus a arcu.
                                         </p>
                                     </div>
                                 </div>
                             </div>
                             <div class="col-md-6">
                                <div class="textbox textbox-service-detail">
                                    <h5 class="textbox-heading"><a href="#">High Quality Service</a></h5>
                                    <div class="textbox-content">
                                        <p>
                                            In  Praesent lorem mauris, pellentesque sit amet duisala gravida commodo massa. Suspendisse a consequat odio, ut vehicula massa. Pellentesque mauris tortor, finibus et pellentesque ullamcorper, lobortis sed purus. Ut vitamin velit eu ligula varius hendrerit. Vivamus porttitor docomo
                                            consequat tristique. In ac neque ac urna lobortis porttitor vitae at orci. Suspendisse a congue tellus. Aenean vitae 
                                            bibendum massa. Cras viverra tellus vitae consectetur 
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div> <!-- /.wrap-project-detail -->
                </div> <!-- /.col-md-8 -->
            </div>
        </div>
    </div> <!-- /.content-wrap -->
@endsection