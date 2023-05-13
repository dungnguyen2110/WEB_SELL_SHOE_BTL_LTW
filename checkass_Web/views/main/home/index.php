<?php $dir = dirname(__FILE__); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <title>Products</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/css/swiper.min.css" />
        <link rel="stylesheet" href="/checkass_Web/public/css/style.css" />
        <link rel="stylesheet" href="/checkass_Web/public/css/grid.css" />
        <link rel="stylesheet" href="/checkass_Web/public/css/responsive.css" />

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body class="light-mode">
        <!-- partial:index.partial.html -->
        <?php require_once 'views/main/layout.php'; ?>
        <div class="main-content">                
            <div class="content-wrapper">                  
                <div class="ad-cont">
                    <div class="ad-slider animation" style="transform: translate3d(0%, 0px, 0px);">
                       <div data-target="1" class="slide slide--1">
                          <div class="slide__darkbg slide--1__darkbg" style="transform: translate3d(0%, 0px, 0px);">
                            <div style="padding:2px 80px; text-indent: 15px; background: rgba(4, 4, 4, 0.7);">
                              <h2 style="color : #fff;">Chào mừng đến với LTW </h2>
                              <div style="color : #fff;">Được thành lập ngày 30/5/2022, công ty LTW là công ty bán máy tính và điện thoại lớn nhất Châu Á với doanh thu hàng triệu đồng hàng năm </div>
                            </div>
                          </div> 
                       </div>
                       <div data-target="2" class="slide slide--2">
                          <div class="slide__darkbg slide--2__darkbg" style="transform: translate3d(0%, 0px, 0px);">
                            <div style="padding:2px 80px; text-indent: 15px; background: rgba(4, 4, 4, 0.7);">
                              <h2 style="color : #fff;">Nhân sự của LTW </h2>
                              <div style="color : #fff;">Với đội ngũ nhân sự hùng hậu, với 10.000 nhân viên năng động và có năng lực ở mọi vị trí. Hàng năm, chúng tôi đã có nhiều chiến lược phát triển đạt hiệu quả cao. Chúng tôi rất sẵn lòng tiếp nhận các nhân viên có hoài bão.</div>
                            </div>
                          </div>                        
                        </div>
                       <div data-target="3" class="slide slide--3">
                          <div class="slide__darkbg slide--3__darkbg" style="transform: translate3d(0%, 0px, 0px);">
                            <div style="padding:2px 80px; text-indent: 15px; background: rgba(4, 4, 4, 0.7);">
                              <h2 style="color : #fff;">Sản phẩm được cập nhật nhanh chóng </h2>
                              <div style="color : #fff;">Chúng tôi đã ký kết các bản hợp đồng với các công ty công nghệ lớn như Apple,.. giúp các dòng máy tính, điện thoại được cập nhật nhanh nhất và mới nhất về kho hàngy  </div>  
                            </div>
                          </div>
                       </div>
                       <div data-target="4" class="slide slide--4">
                          <div class="slide__darkbg slide--4__darkbg" style="transform: translate3d(0%, 0px, 0px);">
                            <div style="padding:2px 80px; text-indent: 15px; background: rgba(4, 4, 4, 0.7);">
                              <h2 style="color : #fff;">Giảỉ trí </h2>
                              <div style="color : #fff;">Bên trong công ty còn có khu tập gym, để các nhân viên giải trí sau những giờ làm việc căng thẳng </div>  
                            </div>
                          </div>
                       </div>
                       <div data-target="5" class="slide slide--5">
                          <div class="slide__darkbg slide--5__darkbg" style="transform: translate3d(0%, 0px, 0px);">
                            <div style="padding:2px 80px; text-indent: 15px; background: rgba(4, 4, 4, 0.7);">
                              <h2 style="color : #fff;">Chính sách </h2>
                              <div style="color : #fff;">Với các chính sách ưu đãi khi mua hàng, chế độ bảo hành tiêu chuẩn 5*. Chúng tôi đảm bảo hài lòng nhất khi bạn trở thành khách hàng của chúng tôi</div> 
                            </div>
                          </div>
                       </div>                      
                        </div>
                        <ul class="nav">
                       <li data-target="1" class="nav__slide nav__slide--1 nav-active"></li>
                       <li data-target="2" class="nav__slide nav__slide--2"></li>
                       <li data-target="3" class="nav__slide nav__slide--3"></li>
                       <li data-target="4" class="nav__slide nav__slide--4"></li>
                       <li data-target="5" class="nav__slide nav__slide--5"></li>
                        </ul>
                        <div data-target="right" class="side-nav side-nav--right"></div>
                        <div data-target="left" class="side-nav side-nav--left"></div>
                  </div>
                                 
                    <div class="content-section">
                        <!-- Home -->
                        <h2 style="color: var(--theme-color);">CÔNG TY LTW</h2>
                        <div style="margin-top: 20px; text-indent: 25px; color: var(--theme-color); background-color: var(--box-color); display: flex;" class="row">
                          <div class="col l-6 m-6 c-12">
                            <p>LTW được thành lập năm 2020 tại Việt Nam. Là một công ty công nghệ phát triển trong thời đại công nghệ. Trải quy rất nhiều khó khăn, công ty đã vphát triển thành công ty lớn, doanh thu triệu đô ở Việt Nam</p>
                            <p>Thế mạnh của công ty chình là con người và văn hóa doanh nghiệp. Dựa vào kim chỉ nam là 3 giá trị cốt lõi, các thành viên ở LTW luôn có tinh thần cống hiến vì sự phát triển chung của LTW và cộng đồng. Giá trị cốt lõi mà LTW hướng tới là:</p>
                          </div>

                          <div class="col l-6 m-6 c-12">
                            <ul>
                              <li> Đón Nhận Thách Thức</li>
                              <li> Phát triển đối tác</li>
                              <li> Giữ gìn chính trực</li>
                            </ul>
                            <p>
                              Với mong muốn đem đến cho thị trường những sản phẩm - dịch vụ theo tiêu chuẩn quốc tế. Công ty đã tiếp cận và hợp tác với nhiều công ty lớn nước ngoài như Apple, Samsung,... 
                            </p>
                          </div>
                        </div>  

                        <!-- Products -->
                        <div style="margin-top: 50px; text-indent: 25px; color: var(--theme-color);">
                          <div>
                            <h2>SẢN PHẨM</h2>
                            <p style="text-align: center; background-color: var(--box-color);">Các lĩnh vực hoạt động của LTW tập trung vào 2 nhóm sản phẩm chủ lực</p>
                          </div> 
                          <div class="row">
                            <div class="col l-6 m-6 c-12" style="background-color: var(--box-color); text-align: center;  height: 400px; padding-right: 2px; padding-bottom: 2px; background-clip: content-box;">
                              <a style="color: var(--theme-color);" href="#">
                                <img style="height: 50%; margin: 0 auto;" src="https://www.freepnglogos.com/uploads/laptop-png/laptop-computer-business-vector-graphic-pixabay-14.png" alt="">
                                <h3 style="height: 20%; text-align: center;">Laptop</h3>
                                <p>LTW liên tục cập nhật những mẫu Laptop mới nhất và tốt nhất trên thị trường</p>
                              </a>
                            </div>
                            <div class="col l-6 m-6 c-12" style="background-color: var(--box-color); text-align: center;  height: 400px; padding-left: 2px; padding-bottom: 2px; background-clip: content-box;">
                              <a style="z-index: 1000; color: var(--theme-color);" href="#">
                                <img style="height: 50%; margin: 0 auto;" src="https://motorolaus.vtexassets.com/arquivos/ids/161821/2021_Tonga-Smooth_Basic-Pack_Dark-Grove_PDP-Hero.png?v=637825300799200000" alt="">
                                <h3 style="height: 20%; text-align: center;">Mobile phone</h3>
                                <p>Những mẫu điện thoại đa dạng và chất lượng</p>
                              </a>
                            </div>
                          </div>
                        </div>

                
                        <!-- News -->
                        <div style="color: var(--theme-color); margin-top: 50px;">
                          <div>
                            <h2>TIN TỨC</h2>                          
                          </div>  
                          <div class="row">
                            <a href="#" style="background-clip: content-box; color: var(--theme-color);background-color: var(--box-color); padding-right: 2px; padding-bottom: 2px;" class="col l-3 m-6 c-12">
                              <img src="https://tmdpc.vn/media/category/cb_6e2b536170bf9a6c49ec4025bc626094.png" alt="">
                              <div style="text-align: center; padding-bottom: 2px;">Tình hình phát triển của công ty 2020</div>
                            </a>
                            <a href="#" style="background-clip: content-box; color: var(--theme-color); background-color: var(--box-color); padding-left: 1px; padding-right: 1px; padding-bottom: 2px;" class="col l-3 m-6 c-12">
                              <img src="https://tmdpc.vn/media/category/cb_6e2b536170bf9a6c49ec4025bc626094.png" alt="">
                              <div style="text-align: center; padding-bottom: 2px;">Tình hình phát triển của công ty 2020</div>
                            </a>
                            <a href="#" style="background-clip: content-box; color: var(--theme-color); background-color: var(--box-color); padding-left: 1px; padding-right: 1px; padding-bottom: 2px;" class="col l-3 m-6 c-12">
                              <img src="https://tmdpc.vn/media/category/cb_6e2b536170bf9a6c49ec4025bc626094.png" alt="">
                              <div style="text-align: center; padding-bottom: 2px;">Tình hình phát triển của công ty 2020</div>
                            </a>
                            <a href="#" style="background-clip: content-box; color: var(--theme-color); background-color: var(--box-color); padding-left: 1px; padding-right: 1px; padding-bottom: 2px;" class="col l-3 m-6 c-12">
                              <img src="https://tmdpc.vn/media/category/cb_6e2b536170bf9a6c49ec4025bc626094.png" alt="">
                              <div style="text-align: center; padding-bottom: 2px;">Tình hình phát triển của công ty 2020</div>
                            </a>
                          </div>
                        </div> 
                        
                      
                    </div>                 
                </div>

            </div>                    
            <div style="display: none" class="img__btn"></div>     
            
          </div>
          <?php include_once('views/main/footer.php');   ?>
</div>
        <!-- partial -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/js/swiper.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.1.1/gsap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script src="/checkass_Web/public/js/script.js"></script>
        <script src="/checkass_Web/public/js/main/home/nav.js"></script>
    </body>
</html>