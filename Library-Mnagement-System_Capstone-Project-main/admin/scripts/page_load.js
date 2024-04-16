$(document).ready(function () {
    
    $(".dash").click(function () {
        window.location.reload();
    });




    $(".add_b").click(function () {
        $(".main-content").empty();
        $(".main-content").load("book/add_book.html");
    });

    $(".del_b").click(function () {
        $(".main-content").empty();
        $(".main-content").load("book/del_book.html");
    });

    $(".issue_b").click(function () {
        $(".main-content").empty();
        $(".main-content").load("book/issue_book.html");
    });

    $(".return_b").click(function () {
        $(".main-content").empty();
        $(".main-content").load("book/return_book.html");
    });




    $(".add_u").click(function () {
        $(".main-content").empty();
        $(".main-content").load("user/add_user.html");
    });

    $(".del_u").click(function () {
        $(".main-content").empty();
        $(".main-content").load("user/del_user.html");
    });

    $(".user_detail").click(function () {
        $(".main-content").empty();
        $(".main-content").load("user/modify_user.html");
    });





    $(".request").click(function () {
        
        $(".main-content").empty();
        $(".main-content").load("request_book.html");
    });

    $(".msg").click(function () {
        $(".main-content").empty();
        $(".main-content").load("auto-message.html");
    });
});
