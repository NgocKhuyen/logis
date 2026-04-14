@extends('client.layout.layout')
@section('title')
    Giới thiệu
@endsection

@section('body')
    <!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade" style="background-image: url(assets/img/page-title-bg.jpg);">
        <div class="container position-relative">
            <h1>Giới thiệu</h1>
            <p>Dịch vụ dọn dẹp chuyên nghiệp, giá rẻ, an toàn và trọn gói. Đội ngũ nhân viên thân thiện, nhiệt tình, phục vụ
                nhanh chóng và tận tâm.</p>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="{{ route('index') }}">Trang chủ</a></li>
                    <li class="current">Giới thiệu</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->

    <!-- About Section -->
    <section id="about" class="about section">

        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-6 position-relative align-self-start order-lg-last order-first" data-aos="fade-up"
                    data-aos-delay="200">
                    <img src="assets/img/about.jpg" class="img-fluid" alt="">
                    <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox pulsating-play-btn"></a>
                </div>

                <div class="col-lg-6 content order-last  order-lg-first" data-aos="fade-up" data-aos-delay="100">
                    <h3>Về chúng tôi</h3>
                    <p>
                        Chúng tôi chuyên cung cấp dịch vụ dọn dẹp nhà ở, văn phòng với tiêu chí nhanh chóng – sạch sẽ – tiết
                        kiệm.
                        Với đội ngũ nhân viên được đào tạo bài bản, thân thiện và nhiệt tình, chúng tôi cam kết mang lại
                        không gian sống gọn gàng, thoải mái cho khách hàng.
                    </p>
                    <ul>
                        <li>
                            <i class="bi bi-diagram-3"></i>
                            <div>

                                <h5>Dịch vụ trọn gói – giá cả hợp lý</h5>
                                <p>Cung cấp đầy đủ dụng cụ, không phát sinh chi phí, phù hợp mọi nhu cầu.</p>
                            </div>
                        </li>
                        <li>
                            <i class="bi bi-fullscreen-exit"></i>
                            <div>
                                <h5>Nhanh chóng – đúng giờ – chuyên nghiệp</h5>
                                <p>Đội ngũ làm việc đúng hẹn, đảm bảo tiến độ và chất lượng.
                                </p>
                            </div>
                        </li>
                        <li>
                            <i class="bi bi-broadcast"></i>
                            <div>
                                <h5>Nhân viên thân thiện – nhiệt tình/h5>
                                    <p>Luôn hỗ trợ khách hàng tận tâm, đảm bảo an toàn tài sản và sự hài lòng.
                                    </p>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>

        </div>

    </section><!-- /About Section -->

    <!-- Stats Section -->
    <section id="stats" class="stats section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4">

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Khách hàng</p>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Dự án</p>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Giờ phục vụ</p>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Nhân viên</p>
                    </div>
                </div><!-- End Stats Item -->

            </div>

        </div>

    </section><!-- /Stats Section -->

    <!-- Team Section -->
    <section id="team" class="team section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <span>Đội ngũ Nhân viên<br></span>
            <h2>Đội ngũ Nhân viên</h2>
            <p>Đội ngũ nhân viên chuyên nghiệp, thân thiện và nhiệt tình, luôn sẵn sàng phục vụ khách hàng với chất lượng
                tốt nhất.</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row">

                <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="member">
                        <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
                        <div class="member-content">
                            <h4>Nguyễn Văn A</h4>
                            <span>Nhân viên Khảo sát
                            </span>
                            <p>
                                Quản lý và kiểm tra chất lượng công việc, đảm bảo mọi dịch vụ đều đạt tiêu chuẩn và đúng
                                tiến độ. </p>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter-x"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!-- End Team Member -->

                <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
                    <div class="member">
                        <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
                        <div class="member-content">
                            <h4>Lê Văn Chí</h4>
                            <span>Nhân viên kỹ thuật</span>
                            <p>Chuyên xử lý các công việc vệ sinh chuyên sâu, sử dụng thiết bị và hóa chất an toàn, đảm bảo
                                hiệu quả và chất lượng dịch vụ.
                            </p>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter-x"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!-- End Team Member -->

                <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
                    <div class="member">
                        <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
                        <div class="member-content">
                            <h4>Trần Văn Nam</h4>
                            <span>Nhân viên dọn dẹp</span>
                            <p>
                                Thân thiện, nhiệt tình, luôn hỗ trợ khách hàng tận tâm, đảm bảo mang lại sự hài lòng trong
                                từng dịch vụ.
                            </p>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter-x"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!-- End Team Member -->

            </div>

        </div>

    </section><!-- /Team Section -->

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section dark-background">

        <img src="assets/img/testimonials-bg.jpg" class="testimonials-bg" alt="">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="swiper init-swiper">
                <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              }
            }
          </script>
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                            <h3>Nguyễn Minh Tuấn</h3>
                            <h4>Nhân viên văn phòng
                            </h4>
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                <span>Dịch vụ rất nhanh và chuyên nghiệp. Nhân viên đến đúng giờ, làm việc sạch sẽ và cẩn
                                    thận. Tôi rất hài lòng và sẽ sử dụng lại.</span>
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                            <h3>Trần Thị Lan</h3>
                            <h4>Designer</h4>
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                <span>Mình cần dọn gấp cửa hàng, bên này hỗ trợ rất nhanh. Giá hợp lý, làm sạch kỹ từng chi
                                    tiết. Nhân viên thân thiện, dễ thương.</span>
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                            <h3>Lê Hoàng Nam
                            </h3>
                            <h4>Kỹ sư xây dựng
                            </h4>
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                <span>Tôi thuê dịch vụ vệ sinh sau xây dựng và kết quả vượt mong đợi. Sạch sẽ, không làm hư
                                    hại đồ đạc. Làm việc rất chuyên nghiệp.</span>
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                            <h3>Phạm Thu Hà</h3>
                            <h4>Giáo viên
                            </h4>
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                <span>Dịch vụ dọn nhà theo giờ rất tiện lợi. Nhân viên nhiệt tình, làm việc có trách nhiệm.
                                    Nhà cửa gọn gàng hẳn sau khi dọn.</span>
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                            <h3>Võ Thanh Hùng
                            </h3>
                            <h4>Chủ quán cà phê
                            </h4>
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                <span>Quán mình đông khách nên cần dọn dẹp thường xuyên, bên này làm rất sạch và nhanh. Nhân
                                    viên làm việc chuyên nghiệp, thái độ tốt, giá cả hợp lý.</span>
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>

    </section><!-- /Testimonials Section -->

    <!-- Faq Section -->
    <section id="faq" class="faq section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <span>Câu hỏi thường gặp</span>
            <h2>Câu hỏi thường gặp</h2>
            <p>Giải đáp những thắc mắc phổ biến của khách hàng về dịch vụ dọn dẹp, giúp bạn hiểu rõ hơn trước khi sử dụng.
            </p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row justify-content-center">

                <div class="col-lg-10">

                    <div class="faq-container">

                        <div class="faq-item faq-active" data-aos="fade-up" data-aos-delay="200">
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>Dịch vụ dọn nhà bao gồm những gì?</h3>
                            <div class="faq-content">
                                <p>Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non
                                    curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus
                                    non.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item" data-aos="fade-up" data-aos-delay="300">
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>Chi phí dịch vụ được tính như thế nào?</h3>
                            <div class="faq-content">
                                <p>Chi phí phụ thuộc vào diện tích, tình trạng nhà và loại dịch vụ bạn chọn. Chúng tôi luôn
                                    báo giá rõ ràng trước khi thực hiện, không phát sinh chi phí.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item" data-aos="fade-up" data-aos-delay="400">
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>Tôi có cần chuẩn bị dụng cụ không?</h3>
                            <div class="faq-content">
                                <p>Không cần. Chúng tôi cung cấp đầy đủ dụng cụ và hóa chất vệ sinh chuyên dụng, đảm bảo an
                                    toàn và hiệu quả.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item" data-aos="fade-up" data-aos-delay="500">
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>Nhân viên có đảm bảo an toàn tài sản không?
                            </h3>
                            <div class="faq-content">
                                <p>Đội ngũ nhân viên được đào tạo bài bản, làm việc có trách nhiệm và luôn đảm bảo an toàn
                                    tài sản cho khách hàng.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item" data-aos="fade-up" data-aos-delay="600">
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>Tempus quam pellentesque nec nam aliquam sem et tortor consequat?</h3>
                            <div class="faq-content">
                                <p>Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est
                                    ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit
                                    adipiscing bibendum est. Purus gravida quis blandit turpis cursus in</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                    </div>

                </div>

            </div>

        </div>

    </section><!-- /Faq Section -->
@endsection
