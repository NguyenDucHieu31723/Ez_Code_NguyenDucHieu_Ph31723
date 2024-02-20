@extends('layouts.master')
@section('title')
    Chi tiết khóa học
@endsection
@section('content')
    <section id="about" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">

                <div class="col-md-6 col-sm-12">
                    <div class="about-info">
                        <div class="section-title wow fadeInUp" data-wow-delay="0.2s">
                            <h4>Chi tiết khóa học</h4>
                            <h2>{{ $showCourse['c_name'] }}</h2>
                        </div>

                        <div class="wow fadeInUp" data-wow-delay="0.4s">
                            <p> {{ $showCourse['c_description'] }}</p><br>
                            <!-- <p>Sed elementum vel felis sed scelerisque. In arcu diam, sollicitudin eu nibh ac, posuere tristique magna. You can use this template for your cafe or restaurant website. Please tell your friends about <a href="https://plus.google.com/+templatemo" target="_parent">templatemo</a>. Thank you.</p> -->

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="wow fadeInUp about-image" data-wow-delay="0.6s">
                        <img src="{{ $showCourse['c_thumbnail'] }}" class="img-responsive" alt=""><br><br>
                        <a href="giohang.html" class="section-btn">Đăng kí khóa học</a>

                    </div>
                </div>



            </div>

        </div>
    </section>
    <section id="team" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-sm-12">
                    <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                        <h2>Bạn có thể thích</h2>
                        <h4>Xem &amp; đăng kí</h4>
                    </div>
                </div>
                @foreach ($courseLike as $item)
                    <div class="col-md-4 col-sm-4">
                        <div class="team-thumb wow fadeInUp" data-wow-delay="0.2s">
                            <img src="{{ $item['c_thumbnail'] }}" class="img-responsive" alt="">
                            <div class="team-hover">
                                <div class="team-item">
                                    <a href="/course/{{ $item['c_id'] }}/show" class="section-btn">Xem khóa học</a>

                                </div>
                            </div>
                        </div>
                        <div class="team-info">
                            <h3>{{ $item['c_name'] }}</h3>
                            <p>Xem &amp; đăng kí</p>
                        </div>
                    </div>
                @endforeach



            </div>
        </div>
    </section>
@endsection
