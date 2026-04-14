@extends('client.layout.layout')
@section('title')
    Liên hệ
@endsection

@section('body')
    <!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade"
        style="background-image: url({{ asset('/img/page-title-bg.jpg') }});">
        <div class="container position-relative">
            <h1>Liên hệ</h1>
            <p>Bạn cần dọn dẹp nhà ở hoặc văn phòng? Hãy liên hệ với chúng tôi để được tư vấn chi tiết và nhận báo giá phù hợp. Chúng tôi luôn sẵn sàng hỗ trợ nhanh chóng, chuyên nghiệp và tận tâm.</p>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="{{ route('index') }}">Trang chủ</a></li>
                    <li class="{{ route('about') }}">Liên hệ</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="mb-4" data-aos="fade-up" data-aos-delay="200">
                <iframe style="border:0; width: 100%; height: 270px;"
                    src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d489.7852899751175!2d106.79964158453933!3d10.866118499999992!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1zOS8zNyBLaHUgcGjhu5EgMjQgIHBoxrDhu51uZyBMaW5oIFh1w6JuICBUaMOgbmggcGjhu5EgSOG7kyBDaMOtIE1pbmg!5e0!3m2!1sen!2s!4v1776172129545!5m2!1sen!2s"
                    frameborder="0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div><!-- End Google Maps -->

            <div class="row gy-4">

                <div class="col-lg-4">
                    <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                        <i class="bi bi-geo-alt flex-shrink-0"></i>
                        <div>
                            <h3>Địa chỉ</h3>
                            <p>9/37 Khu phố 24

phường Linh Xuân

Thành phố Hồ Chí Minh</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                        <i class="bi bi-telephone flex-shrink-0"></i>
                        <div>
                            <h3>Số điện thoại</h3>
                            <p>0911258142</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
                        <i class="bi bi-envelope flex-shrink-0"></i>
                        <div>
                            <h3>Email</h3>
                            <p>ngockhuyen2k2@gmail.com</p>
                        </div>
                    </div><!-- End Info Item -->

                </div>

                <div class="col-lg-8">
                    <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up"
                        data-aos-delay="200">
                        <div class="row gy-4">

                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control" placeholder="Họ và tên"
                                    required="">
                            </div>

                            <div class="col-md-6 ">
                                <input type="email" class="form-control" name="email" placeholder="Email"
                                    required="">
                            </div>

                            <div class="col-md-12">
                                <input type="text" class="form-control" name="subject" placeholder="Tiêu đề"
                                    required="">
                            </div>

                            <div class="col-md-12">
                                <textarea class="form-control" name="message" rows="6" placeholder="Nội dung" required=""></textarea>
                            </div>

                            <div class="col-md-12 text-center">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>

                                <button type="submit">Gửi tin nhắn</button>
                            </div>

                        </div>
                    </form>
                </div><!-- End Contact Form -->

            </div>

        </div>

    </section><!-- /Contact Section -->
@endsection
