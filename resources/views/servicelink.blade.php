
     <div class="col-lg-4 col-sm-12">
                        <div class="sidebar-left sidebar-service">
                            <div class="widget widget-categories">
                                <h5 class="widget-title">All Services</h5>
                                <ul>
                                    <li><a class="{{ Request::is('3DRigging-animation*') ? 'service_active' : '' }}" href="{{ URL::to('/3DRigging-animation') }}" title="">3D Rigging & Animation</a></li>
                                        <li><a class="{{ Request::is('3Dlighting-rendering*') ? 'service_active' : '' }}" href="{{ URL::to('/3Dlighting-rendering') }}" title="">3D Lighting & Rendering</a></li>
                                          <li><a class="{{ Request::is('MotionGraphic-vfx*') ? 'service_active' : '' }}" href="{{ URL::to('/MotionGraphic-vfx') }}" title="">Motion Graphic & VFX</a></li>
                                         <li><a class="{{ Request::is('Explainervideos*') ? 'service_active' : '' }}" href="{{ URL::to('/Explainervideos') }}" title="">Explainer Videos</a></li>
                                        <li><a class="{{ Request::is('Graphicdesigning*') ? 'service_active' : '' }}" href="{{ URL::to('/Graphicdesigning') }}" title="">Graphic Designing</a></li>
                                        <li><a class="{{ Request::is('3Dmodeling*') ? 'service_active' : '' }}" href="{{ URL::to('/3Dmodeling') }}" title="">3D Modeling</a></li>
                                        <li><a class="{{ Request::is('3Darchitecture*') ? 'service_active' : '' }}" href="{{ URL::to('/3Darchitecture') }}" title="">3D Architecture</a></li>
                                        <li><a class="{{ Request::is('3Dprinting*') ? 'service_active' : '' }}" href="{{ URL::to('/3Dprinting') }}" title="">3D Printing</a></li>
                                        <li><a class="{{ Request::is('ar-vr*') ? 'service_active' : '' }}" href="{{ URL::to('/ar-vr') }}" title="">AR & VR </a></li>
                                </ul>
                            </div>

                        </div> <!-- /.sidebar -->
                    </div> <!-- /.col-md-4 -->