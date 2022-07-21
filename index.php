<?php 
#2
$page = !empty($_GET['page'])?$_GET['page']:"home";
include './header.php' ?>
<?php 

//CheckList
/*
1.Đẩy dữ liệu truy cập lên url (vd: thẻ a có href = '?page=product)
2.Lấy dữ liệu page từ url ($page = !empty($_GET['page'])?$_GET['page']:"home")
3.Tạo đường dẫn ($path = "pages/{$page}.php";)
4.Gọi file xử lý hiện tại 
*/



// if(!empty($_GET['page'])){
//     $page = $_GET['page'];
// }else{
//     $page = 'home';
// }
#3
$path = "pages/{$page}.php";
#4
if(file_exists($path))
{
    require $path;
}else{
    require "pages/home.php";
}
?>

<!-- end content  -->

<?php include 'components/contact-us/index.php' ?>
<?php include 'components/model/model1.php' ?>
<?php include 'components/model/model2.php' ?>
<?php include 'components/model/model3.php' ?>
<?php include 'components/model/model4.php' ?>
<?php include './footer.php' ?>