@php use App\Models\Menu; @endphp
@php use App\Models\article; @endphp
@extends('main')

@section('content')
    <link rel='stylesheet' id='classic-theme-styles-css' href='{{asset('gardening/style.css')}}' type='text/css'
          media='all'/>
    <section class="about_section mt-60" style="margin-top: 80px;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <figure>
                        <div class="about_thumb">
                            <img src="{{asset('gardening/images/1.jpeg')}}" alt="">
                        </div>
                        <figcaption class="about_content">
                            <h1>SƠ LƯỢC VỀ CHÚNG TÔI VÀ TẦM NHÌN </h1>
                            <p>Cửa hàng chúng tôi được thành lập vào ngày 10 tháng 10 năm 2015, với sứ mệnh mang đến không gian xanh cho mọi người, chia sẻ kinh nghiệm và kiến thức chăm sóc cây cảnh. Đến với Web Gardeners không đơn giản chỉ là mua cây, mà chúng tôi còn hướng dẫn quý khách hàng cách chăm sóc, cách khắc phục khi cây gặp phải vấn đề không tốt, cây cảnh mua tại cửa hàng đều được bảo hành 7 ngày đến 30 ngày tùy vào cây to hay nhỏ, để đảm bảo sản phẩm hoàn toàn là chất lượng không bị ủ bệnh trước khi mua.</p>
                            <p>Ngoài ra nếu quý khách không mua cây tại cửa hàng, mà mua ở bất kỳ đâu khi gặp vấn đề hãy cứ liên hệ với chúng tôi, chúng tôi sẵn sàng tư vấn miễn phí và nhiệt tình, để cây có thể tốt trở lại.</p>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </section>
    <!--about section end-->

    <!--services img area-->
    <div class="about_gallery_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <article class="single_gallery_section">
                        <figure>
                            <div class="gallery_thumb">
                                <img src="{{asset('gardening/images/2.jpeg')}}" alt="">
                            </div>
                            <figcaption class="about_gallery_content">
                                <h3>CHÚNG TÔI LÀM GÌ?</h3>
                                <p>Cửa hàng chúng tôi làm 3 hạng mục chính:</p>
                                <p>- Bán các sản phẩm, công cụ liên quan đến nhà vườn.</p>
                                <p>- Chăm sóc cây cho văn phòng, tòa nhà, tại nhà.</p>
                                <p>- Làm nơi chia sẻ kiến thức nông nghiệp cũng như nhà vườn.</p>
                            </figcaption>
                        </figure>
                    </article>
                </div>
                <div class="col-lg-6 col-md-6">
                    <article class="single_gallery_section">
                        <figure>
                            <div class="gallery_thumb">
                                <img src="{{asset('gardening/images/3.jpeg')}}" alt="">
                            </div>
                            <figcaption class="about_gallery_content">
                                <h3>VỀ WEBSITE CHÚNG TÔI</h3>
                                <p>- Đứng đầu lĩnh vực Online về thị trường cây cảnh.</p>
                                <p>- Bảo hành sau khi mua cây.</p>
                                <p>- Tư vấn chuyên nghiệp.</p>
                                <p>- Hỗ trợ giải đáp thắc mắc, chăm sóc trọn đời.</p>
                            </figcaption>
                        </figure>
                    </article>
                </div>
            </div>
        </div>
    </div>
    <!--services img end-->


    <!--team area start-->
    <div class="team_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <article class="team_member">
                        <figure>
                            <div class="team_thumb">
                                <img src="{{asset('gardening/images/Anh1.png')}}" alt="">
                            </div>
                            <figcaption class="team_content">
                                <h3>Son</h3>
                                <h5>Director</h5>
                                <p>Phone: 0123456789 <br> Email: Sondeptrai@example.com</p>
                            </figcaption>
                        </figure>
                    </article>
                </div>
                <div class="col-lg-3 col-md-6">
                    <article class="team_member">
                        <figure>
                            <div class="team_thumb">
                                <img src="{{asset('gardening/images/Anh5.png')}}" alt="">
                            </div>
                            <figcaption class="team_content">
                                <h3>Chien</h3>
                                <h5>Designer</h5>
                                <p>Phone: 0123456789 <br> Email: Chiendeptrai@example.com</p>
                            </figcaption>
                        </figure>
                    </article>
                </div>
                <div class="col-lg-3 col-md-6">
                    <article class="team_member">
                        <figure>
                            <div class="team_thumb">
                                <img src="{{asset('gardening/images/Anh2.png')}}" alt="">
                            </div>
                            <figcaption class="team_content">
                                <h3>Cam</h3>
                                <h5>Designer</h5>
                                <p>Phone: 0123456789 <br> Email: Camdeptrai@example.com</p>
                            </figcaption>
                        </figure>
                    </article>
                </div>
                <div class="col-lg-3 col-md-6">
                    <article class="team_member">
                        <figure>
                            <div class="team_thumb">
                                <img src="{{asset('gardening/images/Anh4.png')}}" alt="">
                            </div>
                            <figcaption class="team_content">
                                <h3>Duy</h3>
                                <h5>Designer</h5>
                                <p>Phone: 0123456789 <br> Email: Duydeptrai@example.com</p>
                            </figcaption>
                        </figure>
                    </article>
                </div>
                <div class="col-lg-3 col-md-6">
                    <article class="team_member">
                        <figure>
                        </figure>
                    </article>
                </div>
                <div class="col-lg-3 col-md-6">
                    <article class="team_member">
                        <figure>
                            <div class="team_thumb">
                                <img src="{{asset('gardening/images/Anh3.png')}}" alt="">
                            </div>
                            <figcaption class="team_content">
                                <h3>Kien</h3>
                                <h5>Developer</h5>
                                <p>Phone: 0123456789 <br> Email: Kiendeptrai@example.com</p>
                            </figcaption>
                        </figure>
                    </article>
                </div>
                <div class="col-lg-3 col-md-6">
                    <article class="team_member">
                        <figure>
                            <div class="team_thumb">
                                <img src="{{asset('gardening/images/Avata.png')}}" alt="">
                            </div>
                            <figcaption class="team_content">
                                <h3>Hung</h3>
                                <h5>Coder</h5>
                                <p>Phone: 0123456789 <br> Email: Hungdeptrai@example.com</p>
                            </figcaption>
                        </figure>
                    </article>
                </div>
            </div>
        </div>
    </div>
@endsection
