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
                  <div style="border-radius: 20px; text-align: center; background-color: var(--box-color);">
                    <h1><?php echo $info_news['title'];?></h1>
                    <p>Xuất bản: <?php echo $info_news['date'];?></p>
                  </div>
                  <div style="border-radius: 20px; text-indent: 15px; background-color: var(--box-color);">
                    <figure class="article-img">
                      <img src="https://images.unsplash.com/photo-1484807352052-23338990c6c6?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" />
                    </figure>
                    <p><?php echo $info_news['content']; ?></p>
                  </div>          
                  <div class="comments-container">
                  <p style=" margin-bottom: 8px;">COMMENTS</p>
                        <ul id="comments-list" class="comments-list">
                    <?php 
                        foreach($all as $value) {
                            echo '                            
                                <li>
                                    <div class="comment-main-level">
                                        <!-- Avatar -->
                                        <div class="comment-avatar"><img class="profile-img" src="' . '/' . 'checkass_Web' . '/' . $value['comment_out']['img'] . '"' .'alt=""></div>
                                        <div class="comment-box">
                                            <div class="comment-head">
                                                <h6 class="comment-name by-author"><a>' . $value['comment_out']['name'] . '</a></h6>
                                                <span>' . $value['comment_out']['date'] . '</span>';
                                                if(isset($_SESSION['id'])) { 
                                                    if($value['comment_out']['user_id'] == $_SESSION['id']) {
                                                        echo '<a onclick="return confirm('; echo "'" . 'Bạn có muốn xóa sản phẩm?' . "'";   echo ')" href="/checkass_Web/main/product/delete_comment/' . $value['comment_out']['id'] . '/'. $info_news['id']. '" style="text-decoration:none;">' . '<i class="fa fa-times"></i></a>';
                                                    }
                                                }
                                            echo '
                                            </div>
                                            <div class="star-rating">
                                                <i class="fa fa-star checked"></i>
                                                <i class="fa fa-star checked"></i>
                                                <i class="fa fa-star checked"></i>
                                                <i class="fa fa-star checked"></i>
                                                <i class="fa fa-star-o not-checked"></i>
        
                                            </div>
                                            <div class="comment-content">
                                            ' . $value['comment_out']['content'] . '
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="comments-list reply-list">';
                                    //reply_comment
                                    while($reply = $value['reply'] -> fetch_assoc()) {
                                        echo '
                                        <li>
                                            <!-- Avatar -->
                                            <div class="comment-avatar"><img src="' . '/' . 'checkass_Web' . '/' . $reply['img'] . '"' .'alt=""></div>
                                            <!-- Contenedor del Comentario -->
                                            <div class="comment-box">
                                                <div class="comment-head">
                                                    <h6 class="comment-name"><a>' . $reply['name'] . '</a></h6>
                                                    <span>' . $reply['date'] . '</span>';
                                                    if(isset($_SESSION['id'])) { 
                                                        if($reply['user_id'] == $_SESSION['id']) {
                                                            echo '<i class="fa fa-times"></i>';
                                                        }
                                                    }
                                                echo '
                                                </div>
                                                <div class="comment-content">
                                                    ' . $reply['content'] . ' 
                                               </div>
                                            </div>
                                        </li>';
                                    }
                            echo '
                                        <div id="reply_p_' . $value['comment_out']['id']. '"' .' class = "reply_box">
                                            <textarea id="content_p_' . $value['comment_out']['id']. '"' . ' class="form-control" placeholder="Reply a comment..." rows="3"></textarea>
                                            <br>
                                            <button type="button" class="btn btn-info pull-right reply-btn" data-pid='. $info_news['id'] . ' data-uid=';
                                                if(isset($_SESSION['id'])){ echo $_SESSION['id'];} else {echo -1;};
                                                echo ' data-parent_comment= ' . $value['comment_out']['id'] . ' data-user_name = "';
                                                if(isset($_SESSION['name'])){ echo $_SESSION['name'];} else {echo 'none';}
                                                echo '"' . ' data-user_img = "';
                                                if(isset($_SESSION['img'])){ echo $_SESSION['img'];} else {echo 'none';}
                                                echo '"' . '>Post</button>
                                        </div>
                                    </ul>
                                </li><br>';
                        }
                    ?>
                            <div id="write-p" class="write-box">
                                <textarea id="content_p_write" class="form-control" placeholder="Write a comment..." rows="3"></textarea>
                                <br>
                                <button id = "btn-write" type="button" class="btn btn-info pull-right" 
                                data-pid="<?php echo $info_news['id'];?>" 
                                data-uid="<?php if(isset($_SESSION['id'])){ echo $_SESSION['id'];} else {echo -1;};?>" 
                                data-user_name="<?php if(isset($_SESSION['name'])){ echo $_SESSION['name'];} else {echo 'none';};?>" 
                                data-user_img="<?php if(isset($_SESSION['img'])){ echo $_SESSION['img'];} else {echo 'none';};?>"    
                                >Post</button>
                            </div>
                        </ul>
                    </div>


                <!-- News -->
                <div style="color: var(--theme-color); margin-top: 50px;">
                  <p style=" margin-bottom: 3px;">TIN TỨC KHÁC</p>                          
                  <div style="justify-content: space-between;display: flex; flex-wrap: wrap;">
                        <?php 
                          while($result_all = $all_news -> fetch_assoc()) { 
                            if($result_all['id'] != $id) {
                              echo '<a href="/checkass_Web/main/news/info/' . $result_all['id'] . '"' . ' style="color: var(--theme-color); border-radius: 10px; width:23%; background-color: var(--box-color);">
                              <img src="https://images.unsplash.com/photo-1484807352052-23338990c6c6?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="">
                              <div style="text-align: center; padding-bottom: 10px;">' . $result_all['title'] . '</div>
                            </a>';
                            }
                          }
                        ?>
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
        <script src="/checkass_Web/public/js/main/news/nav.js"></script>
        <script src="/checkass_Web/public/js/script.js"></script>
        <script src="/checkass_Web/public/js/main/news/comment.js"></script>
    </body>
</html>