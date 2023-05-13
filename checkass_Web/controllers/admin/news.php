<?php
    require_once "render.php";
    require_once "models/connection.php";
    require_once "models/news.php";


    class news {

        function index(){
            $all_news = news_db::getAll();
            $data = array("all_news" => $all_news);
            render("news", "index", $data);
        }

        function add() {
            render("news", "add");
        }

        function edit($id) {
            $result = news_db::get_news_id($id)->fetch_assoc();
            $data = array("title" => $result['title'], "content" => $result['content'], "id" => $id);
            render("news", "edit", $data);
        }

        function add_news() {
            $title = $_POST["title"];
            $content = $_POST["content"];
            news_db::insert($title, $content);
            $success = "Thêm bài viết thành công";
            $data = array("success" => $success, "title" => $title, "content" => $content);
            render("news", "add", $data);
        }

        function edit_news($id) {
            $title = $_POST["title"];
            $content = $_POST["content"];
            news_db::update($id, $title, $content);
            $success = "Cập nhật bài viết thành công";
            $data = array("success" => $success, "title" => $title, "content" => $content, "id" => $id);
            render("news", "edit", $data);
        }

        function delete($id) {
            news_db::delete($id);
            header("Location: /checkass_Web/admin/news/index");
        }
    }

?>