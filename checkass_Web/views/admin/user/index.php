<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <title>Products</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/css/swiper.min.css" />
        <link rel="stylesheet" href="/checkass_Web/public/css/grid.css" />
        <link rel="stylesheet" href="/checkass_Web/public/css/style.css" />
        <link rel="stylesheet" href="/checkass_Web/public/css/responsive.css" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body class="light-mode">
        <!-- partial:index.partial.html -->
        <?php require_once 'views/admin/layout.php'; ?>
              <div class="main-content">
                <div class="main-header">
                  <div class="header-menu">
                     <a class="main-header-link" href="/checkass_Web/admin/home/index">Admin</a>
                     <a class="main-header-link is-active" href="/checkass_Web/admin/user/index">Users</a>
                     <a class="main-header-link" href="/checkass_Web/admin/product/index">Products</a>
                     <a class="main-header-link" href="/checkass_Web/admin/news/index">News</a>
                     <a class="main-header-link" href="/checkass_Web/admin/company/index">Company</a>
                  </div>
               </div>
               <div style="display: flex; flex-wrap: wrap;" class="content-wrapper">
                  <div class="search-side">
                     <div class="content-section-title">
                        USERS
                     </div>
                     <div class="search-bar second">
                        <input type="text" placeholder="Search">
                     </div>
                     <div class="search-results">
                        <?php 
                          while($result_user = $all ->fetch_assoc()){
                            echo'
                            <button class="search-result-item" data-email = "' . $result_user['email'] . '"' .' 
                            data-name = "' . $result_user['name'] . '"' .' data-img = "' . $result_user['img'] . '"' .' 
                            data-phone = "' . $result_user['phone'] . '"' .' data-location = "' . $result_user['location'] . '"' .' 
                            data-uid = "' . $result_user['id'] . '"' .'>
                               <div class="result-information">
                                  <img src="/checkass_Web/' . $result_user['img'] . '"' . 'alt="" class="profile-pic">' .
                                  $result_user['name'] . '
                               </div>
                               <div class="additional-information">
                                  <div class="first-addition">' . 
                                     $result_user['email'] . '
                                  </div>
                               </div>
                            </button>';
                          }
                        ?>
                     </div>
                  </div>
                  <div  id="information-user" class="main-information">
                     <div class="item-information">
                        <div class="item-name">
                           <img id="show-img" src="/checkass_Web/public/uploads/user/client.jpg" alt="" class="profile-pic">
                           <span id="show_name"></span>
                        </div>
                        <div class="item-options">
                           <a id="info" href="#" class="item-option is-active">Information</a>
                           <a id="trans" href="#" class="item-option">Transactions</a>
                           <a id="comm" href="#" class="item-option">Comments</a>
                        </div>
                     </div>
                     <div class="item-detail row">
                        <div style="margin: 0 !important;" class="user-profile-pic col l-3 m-3 c-12">
                           <img id= "img" src="/checkass_Web/public/uploads/user/client.jpg" alt="" class="pic-display">
               
                        </div>
                        <div class="user-information col l-9 m-9 c-12">
                           <div class="input-item">
                              <label for="email">Email:</label>
                              <input id = "email" style="background-color: var(--box-color); color: var(--theme-color);" value="">
                           </div>
                           <div class="input-item">
                              <label for="username">Name:</label>
                              <input id="name" style="background-color: var(--box-color); color: var(--theme-color);" value="">
                           </div>
                           <div class="input-item">
                              <label for="phone">Phone Number:</label>
                              <input id="phone" style="background-color: var(--box-color); color: var(--theme-color);" value="">
                           </div>
                           <div class="input-item">
                              <label for="location">Location</label>
                              <input id= "location" style="background-color: var(--box-color); color: var(--theme-color);" value="">
                           </div>
                           <a href="#" id="delete-user" style="text-decoration: none;"><button style="display: inline;" class="signin-button">Xóa thành viên</button></a>

                        </div>
                     </div>
                     <div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
    <?php include_once('views/main/footer.php');   ?>

      </div>
        <!-- partial -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/js/swiper.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.1.1/gsap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script src="/checkass_Web/public/js/admin/user/click.js"></script>
        <script src="/checkass_Web/public/js/script.js"></script>
    </body>
</html>