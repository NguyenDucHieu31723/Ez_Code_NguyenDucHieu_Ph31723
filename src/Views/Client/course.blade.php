@extends('layouts.master')
@section('title')
    Danh sách khóa học
@endsection

@section('content')
    <section id="team" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                        <h2>Các khóa học</h2>
                        <h4>Xem &amp; đăng kí</h4>

                    </div>
                </div>
                @foreach ($listCourse as $course)
                    <div class="col-md-4 col-sm-4">
                        <div class="team-thumb wow fadeInUp" data-wow-delay="0.2s">
                            <img src="{{ $course['c_thumbnail'] }}" class="img-responsive" alt="">
                            <div class="team-hover">
                                <div class="team-item">
                                    <a href="/course/{{ $course['c_id'] }}/show" class="section-btn">Xem khóa học</a>
                                </div>
                            </div>
                        </div>
                        <div class="team-info">
                            <h3>{{ $course['c_name'] }}</h3>
                            <strong style="color: #ce3232">{{ number_format($course['c_price'], 0, '.', '.') }}đ</strong>
                            <p>Xem &amp; đăng kí</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    <!-- MENU-->



    <!-- TESTIMONIAL -->
    <section id="testimonial" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-sm-12">
                    <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                        <h2>Học lập trình để đi làm</h2>
                    </div>
                </div>

                <div class="col-md-offset-2 col-md-8 col-sm-12">
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <p>Khẩu hiệu cổ điển, thường được sử dụng trong các chương trình học lập trình đầu
                                tiên để in ra màn hình chuỗi "Hello, World!".</p>
                            <div class="tst-author">
                                <h4>Hello World!</h4>
                                <span>Nguyễn Đức Hiếu</span>
                            </div>
                        </div>

                        <div class="item">
                            <p>Tự tin và mạnh mẽ trong việc viết code.</p>
                            <div class="tst-author">
                                <h4>Code like a boss</h4>
                                <span>Nguyễn Đức Hiếu</span>
                            </div>
                        </div>

                        <div class="item">
                            <p>Thể hiện tầm quan trọng của việc học lập trình trong cuộc sống hàng ngày.</p>
                            <div class="tst-author">
                                <h4>Coding is my cardio</h4>
                                <span>Nguyễn Đức Hiếu</span>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- CONTACT -->
    <section id="contact" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">
                <!-- How to change your own map point
                                                                                                                                                                1. Go to Google Maps
                                                                                                                                                                2. Click on your location point
                                                                                                                                                                3. Click "Share" and choose "Embed map" tab
                                                                                                                                                                4. Copy only URL and paste it within the src="" field below -->
                <div class="wow fadeInUp col-md-6 col-sm-12" data-wow-delay="0.4s">
                    <iframe id="google-map"
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d29793.75250477423!2d105.836436!3d21.023919!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab9bd9861ca1%3A0xe7887f7b72ca17a9!2sHanoi%2C%20Vietnam!5e0!3m2!1sen!2sus!4v1706026401172!5m2!1sen!2sus"
                        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

                <div class="col-md-6 col-sm-12">

                    <div class="col-md-12 col-sm-12">
                        <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                            <h2>Liên hệ</h2>
                        </div>
                    </div>

                    <!-- CONTACT FORM -->
                    <form action="#" method="post" class="wow fadeInUp" id="contact-form" role="form"
                        data-wow-delay="0.8s">

                        <!-- IF MAIL SENT SUCCESSFUL  // connect this with custom JS -->
                        <h6 class="text-success">Your message has been sent successfully.</h6>

                        <!-- IF MAIL NOT SENT -->
                        <h6 class="text-danger">E-mail must be valid and message must be longer than 1 character.
                        </h6>

                        <div class="col-md-6 col-sm-6">
                            <input type="text" class="form-control" id="cf-name" name="name"
                                placeholder="Họ và tên">
                        </div>

                        <div class="col-md-6 col-sm-6">
                            <input type="email" class="form-control" id="cf-email" name="email"
                                placeholder="Địa chỉ Email">
                        </div>

                        <div class="col-md-12 col-sm-12">
                            <input type="text" class="form-control" id="cf-subject" name="subject"
                                placeholder="Điện thoại liên hệ">

                            <textarea class="form-control" rows="6" id="cf-message" name="message" placeholder="Nội dung"></textarea>

                            <button type="submit" class="form-control" id="cf-submit" name="submit">Gửi thông tin
                                liên hệ</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>
@endsection
