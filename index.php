<?php 
#2
$page = !empty($_GET['page'])?$_GET['page']:"home"; 
if($page == "page19" || $page== "page20" || $page == "page21" || $page== "page22" || $page== "page23"){
    include 'layoutV2/header.php';
}else{
    include "./header.php";
}
?>

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
<?php 
    if($page == "page19" || $page== "page20" || $page== "page21" || $page== "page22" || $page== "page23"){
        include 'components/version2/contact-us/index.php';
        include 'components/version2/model/model1.php';
        include 'components/version2/model/model2.php';
        include 'components/version2/model/model3.php';
        include 'components/version2/model/model4.php';
        include 'layoutV2/footer.php' ;
    }else{
        include 'components/contact-us/index.php';
        include 'components/model/model1.php';
        include 'components/model/model2.php';
        include 'components/model/model3.php';
        include 'components/model/model4.php';
        include './footer.php' ;
    }
?>