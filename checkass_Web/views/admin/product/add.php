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
    <link rel="stylesheet" href="/checkass_Web/public/css/admin/product/add.css" />
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
                <a class="main-header-link" href="/checkass_Web/admin/user/index">Users</a>
                <a class="main-header-link is-active" href="/checkass_Web/admin/product/index">Products</a>
                <a class="main-header-link" href="/checkass_Web/admin/news/index">News</a>
                <a class="main-header-link" href="/checkass_Web/admin/company/index">Company</a>
            </div>
        </div>

        <div style="display: flex; flex-wrap: wrap;" class="content-wrapper">
            <div class="main-information">
                <div class="item-detail">
                    <div class="detail-header">
                        ADD NEW PRODUCT
                    </div>
                </div>

                <form action="/checkass_Web/admin/product/addProduct" method="POST" enctype="multipart/form-data">
                    <div style="display: flex;" class="item-detail">
                            <div class="user-profile-pic">
                                <img src="<?php echo "/checkass_Web" . "/" . $uploaded_image; ?>" alt="" id="show_img" class="pic-display">
                                <div class="signin-button">
                                    <input id="upload" type="file" name="img" class="form-control-file" id="exampleFormControlFile1">
                                </div>
                            </div>
                            <div class="user-information">
                                <div class="signin-part-name" id="error" style="color: red; font-size: 11px; text-align: center; font-weight: bold;"></div>
                                <div class="signin-part-name" id="ok" style="color: green; font-size: 11px; text-align: center; font-weight: bold;"><?php if (isset($success)) echo $success; ?></div>
                                <div class="input-item">
                                    <label for="productname">Name</label>
                                    <input type="text" name="name" id="name" value="<?php if(isset($name)) echo $name; ?>">
                                </div>
                                <div class="input-item">
                                    <label for="quantity">Quantity</label>
                                    <input type="text" name="quantity" id="quantity" value="<?php if(isset($quantity)) echo $quantity; ?>">
                                </div>
                                <div class="input-item">
                                    <label for="quantity">Price</label>
                                    <input type="text" name="price" id="price" value="<?php if(isset($price)) echo $price.'$'; ?>">
                                </div>
                                <div class="input-item">
                                    <label for="descript">Description</label>
                                    <input type="text" name="content" id="content" value="<?php if(isset($content)) echo $content; ?>">
                                </div>
                                <div class="input-item">
                                    <label for="quantity">Category</label>
                                    <br>
                                    <select name="category" id="category" value=<?php if(isset($category)) echo $category; ?>>
                                        <option value="1">Mobile Phone</option>
                                        <option value="2">Laptop</option>
                                    </select>
                                </div>
                                <button type="button" id="add-btn" name="btn-submit" class="signin-button">Add new product</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
    </div>
    </div>
    <?php include_once('views/main/footer.php');   ?>

    </div>
    <!-- partial -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/js/swiper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.1.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="/checkass_Web/public/js/admin/product/edit.js"></script>
    <script src="/checkass_Web/public/js/admin/product/add.js"></script>
        <script src="/checkass_Web/public/js/script.js"></script>

</body>

</html>