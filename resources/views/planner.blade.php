@extends('layouts.main')
@section('title', 'CONTACT US')
@section('content')
      <div class="page-title parallax parallax1 ">
            <div class="overlay"></div>
            <div class="container">
                <div class="page-title-content text-center">
                    <div class="page-title-heading ">
                        <h3 class="title  breadcrumb_heading">CONTACT US</h3>
                    </div>
                    <div class="breadcrumbs">
                        <ul>
                             <li class=""><a href="/">Home</a></li>
                            <li class="text-white">CONTACT US</li>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div> <!-- /.page-title -->

        <div class="content-wrap main-contact-page pd-top-80 pd-bottom-80">
            <div class="container">
                <div class="wrap-contact-page pd-top-80 ">
                    <div class="container">
                         <div class="row">
                            <div class="col-md-9 col-sm-12">
                                <div class=" flat-form-contact-us"> 
                                    <div class="flat-title">
                                        <h3 class="title">Leave Your Message</h3>
                                    </div>

                                    <form action="./contact/contact-process.php" class="form-contact-us page-contact" id="contact-form">
                                        <div class="row-input-wrap">
                                            <div class="input-wrap-name wrap-input">
                                                <input type="text" class="name" name="name" required="" placeholder="Your Name">
                                            </div>
                                            <div class="input-wrap-mail wrap-input">
                                                <input type="email" name="email" class="mail" required="" placeholder="Your Email">
                                            </div>
                                        </div>
                                         <div class="row-input-wrap">
                                            <div class="input-wrap-name wrap-input">
                                                <input type="text" class="name" name="subject" required="" placeholder="Your Subject">
                                            </div>
                                            <div class="input-wrap-mail wrap-input">
                                                <input type="tel" name="email" class="contact" required="" placeholder="Your Contact">
                                            </div>
                                        </div>
                                        <div class="input-wrap-message wrap-input">
                                            <textarea name="message" class="messages" required="" placeholder="Your Messager"></textarea>
                                        </div>

                                        <div class="">
                                            <button type="submit" id="btn-comment" class="btn-effect" name="btn-comment">
                                                SEND COMMENT
                                            </button>
                                        </div>
                                    </form>  
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-12">
                                <div class="sidebar-right">
                                    <div class="widget widget-logo-info widget-text sidebar-right">
                                        <div class="flat-title">
                                            <h3 class="title">Our Offices</h3>
                                        </div>
                                        <ul class="info">
                                            <li class="phone"><a href="#" class="data-hover">+91 7837722888</a></li> 
                                            <li class="phone"><a href="#" class="data-hover"> +1 (804) 292-0055</a></li> 
                                           
                                            <li class="mail"><a href="#" class="data-hover">info@supremeanimation.com
                                           </a></li>
                                            <li class="address"><a href="#" class="data-hover">Supreme Animation Sector-33, Chandigarh</a></li>   
                                             <li class="address"><a href="#" class="data-hover"> 5501 National Rd E,Richmond Indiana , USA</a></li>  
                                        </ul>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- /.content-wrap -->

@endsection