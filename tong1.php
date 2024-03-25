  <?php 
     if (isset($_GET['quanly'])){
        $tam = $_GET['quanly'];
     }else{
        $tam = '';
     }
     if ($tam=='sanpham'){
        include_once 'sanpham.php';
     }elseif($tam=='giohang'){
        include_once 'giohang.php';
     }elseif($tam=='tintuc'){
        include_once 'tintuc.php';
     }elseif($tam=='lienhe'){
        include_once 'lienhe.php';
     }else {
        include_once 'index.php';
     }
  ?>