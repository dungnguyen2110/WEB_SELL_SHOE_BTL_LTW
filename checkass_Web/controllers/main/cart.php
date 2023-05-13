<?php
    require_once "render.php";
    require_once "models/connection.php";
    require_once "models/cart.php";
    require_once "models/product.php";

    class cart {

        function check(){
            echo "<h1>FUCK U</h1>";
        }

        function index(){
            $product_user = cart_db::get_cart_id($_SESSION['id']);
            $data = array("product" => $product_user);
            render("cart","index", $data);
        }

        function update() {
            $cart_id = $_POST['cart_id'];
            $number = $_POST['number'];
            cart_db::update($cart_id, $number);
            echo 'success';
        }

        function insert() {
            $user_id = $_POST['user_id'];
            $product_id = $_POST['product_id'];
            cart_db::insert($product_id, $user_id);
            echo 'success';
        }

        function get_cart_id_del() {
            $product_id = $_POST['product_id'];
            $user_id = $_POST['user_id'];
            $result = product_db::get_addcart($user_id, $product_id);
            echo $result;

        }

        function get_number_back() {
            $product_id = $_POST['product_id'];
            $user_id = $_POST['user_id'];
            $result = product_db::get_addcart($user_id, $product_id);
            $get_cart = cart_db::get_cart_cid($result);
            $num_return = $get_cart->fetch_assoc()['number'];
            $get_product = product_db::get_product_id($product_id);
            $num_current = $get_product->fetch_assoc()['quantity'];
            $num_update = $num_current + $num_return;
            product_db::update_quantity($product_id, $num_update);
            echo $num_update;
        }

        function delete() {
            $cart_id = $_POST['cart_id'];
            cart_db::delete($cart_id);
            echo 'success';
        }
    }

?>