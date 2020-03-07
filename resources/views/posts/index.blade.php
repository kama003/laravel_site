@extends('layouts.main')
@section('title', 'Blog')
@section('content')
    <div class="page-title parallax parallax1 ">
            <div class="overlay"></div>
            <div class="container">
                <div class="page-title-content text-center">
                    <div class="page-title-heading ">
                        <h3 class="title breadcrumb_heading">BLOG</h3>
                    </div>
                    <div class="breadcrumbs">
                        <ul>
                             <li class=""><a href="/">Home</a></li>
                            <li class="text-white">BLOG</li>
                        </ul>
                        
                    </div>
                </div>
            </div>
        </div> <!-- /.page-title -->


           <div class="flat-row main-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="content-wrap fix-float-box">
                            
                            
                           @foreach ($posts as $post)
                                <article class="post">
                                <div class="post-border">
                                    <div class="featured-post">
                                    <a href="{{ route('posts.show', $post->slug) }}"><img src="{{ $post->featured_image }}" style="height:275px;"  alt=""></a>
                                    </div>
                                    <div class="content-post">
                                        <h5 class="post-title">
                                        <a href="{{ route('posts.show', $post->slug) }}">{{ $post->title }}</a>
                                        </h5>
                                        <div class="post-meta">
                                            <ul>
                                                <li class="time"><a href="#">{{ $post->created_at }}</a></li>

                                            </ul>
                                        </div>
                                        
                                        <div class="post-content mt-4">
                                        <p>{{ $post->summary }}</p>
                                        </div>
                                    </div>
                                </div>
                            </article>
                       
                           @endforeach
                           
                          
                          
                           
                            
                        </div>
                    </div>
                    <!--<div class="pagination-wrap blog-pagination ">-->
                    <!--    <ul class="flat-pagination">-->
                    <!--        <li><a href="#" title="" class="active">1</a></li>-->
                    <!--        <li><a href="#" title="">2</a></li>-->
                    <!--        <li><a href="#" title="">></a></li>-->
                    <!--    </ul><!-- /.flat-pagination -->
                    <!--</div>-->
                </div>
            </div>
        </div> <!-- /.main-content -->


@endsection