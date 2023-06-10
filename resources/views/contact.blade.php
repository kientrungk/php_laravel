@php use App\Models\Menu; @endphp
@php use App\Models\article; @endphp
@extends('main')

@section('content')
    <link rel='stylesheet' id='classic-theme-styles-css' href='{{asset('gardening/style.css')}}' type='text/css'
          media='all'/>
    <div class="main_header" style="margin-top: 80px;">
        <!--contact map start-->
        <div class="contact_map mt-60">
            <div class="map-area">
                <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d1862.045531473631!2d105.7806615582495!3d21.02904204649961!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e0!4m0!4m5!1s0x313454b3285df81f%3A0x97be82a66bbe646b!2zRGV0ZWNoIEJ1aWxkaW5nLCA4IFTDtG4gVGjhuqV0IFRodXnhur90LCBN4bu5IMSQw6xuaCwgTmFtIFThu6sgTGnDqm0sIEjDoCBO4buZaSwgVmnhu4d0IE5hbQ!3m2!1d21.028703099999998!2d105.7817798!5e0!3m2!1svi!2s!4v1678821180714!5m2!1svi!2s"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <!--contact map end-->

        <!--contact area start-->
        <div class="contact_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="contact_message content">
                            <h3>liên hệ với chúng tôi</h3>
                            <p>Bạn có thắc mắc hoặc cần liên hệ với chúng tôi. Hãy liên hệ với chúng tôi qua địa chỉ:</p>
                            <ul>
                                <li><i class="fa fa-fax"></i> Địa chỉ : Số 08 Tôn Thất Thuyết. Cầu Giấy. Hà Nội.</li>
                                <li><i class="fa fa-envelope-o"> </i> Email: <a
                                        href="mailto:demo@example.com">baitapnhom2@gmail.com.com </a>
                                </li>
                                <li><i class="fa fa-phone"></i> Điện thoại:<a href="tel: 0123456789"> 0123456789 </a></li>
                            </ul>
                            >
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="contact_message form">
                            <h3>Liên hệ</h3>
                            @include('admin.alert')
                            <form id="contact-form" method="POST">
                                @csrf
                                <p>
                                    <label> Tên (*)</label>
                                    <input name="name" required placeholder="Tên *" type="text">
                                </p>
                                <p>
                                    <label> Email (*)</label>
                                    <input name="email" required placeholder="Email *" type="email">
                                </p>
                                <p>
                                    <label> Số điện thoại (*)</label>
                                    <input name="phone" required placeholder="Số điện thoại" type="text">
                                </p>
                                <div class="contact_textarea">
                                    <label> Nội dung (*)</label>
                                    <textarea required placeholder="Nội dung" name="message" class="form-control2"></textarea>
                                </div>
                                <button type="submit"> Gửi</button>
                                <p class="form-messege"></p>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
