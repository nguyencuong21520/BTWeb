<?php
    include('../loginProcess.php'); 
    if(isset($_SESSION['login_user'])){
    
    }else{
        header("location: ../login.php"); 
    }
include("header.php");
require("../config.php");
$sql = "SELECT * FROM aboutme";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

if (isset($_POST['submitt'])) {
    $name = $_POST['name'];
    $shortInfo = $_POST['shortDes'];
    $description = $_POST['des'];
    $image = $_FILES['image']['name'];
    $cv = $_FILES['cv']['name'];
    if(empty($image)){
        $image = 'bg_test.png';
    }
    if(empty($cv)){
        $cv = 'cuongcv.pdf';
    }

    


        $target = "../img/".basename($image);
        $targetcv = "../cv/".basename($cv);
        $sql = "UPDATE aboutme SET name='$name',img='$image',description='$description',shortInfo='$shortInfo',cv='$cv' where id=1 ";
        mysqli_query($conn, $sql);
        move_uploaded_file($_FILES['cv']['tmp_name'], $targetcv);
        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
            $msg = "success";
        }else{
            $msg = "error";
        }
}
?>

<aside class="left-sidebar" data-sidebarbg="skin6">
            <div class="scroll-sidebar">
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                    <li class="sidebar-item "> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="users.php" >
                                <i class="fa fa-user" aria-hidden="true"></i><span class="hide-menu">Admin</span></a>
                        </li>
                        <li class="sidebar-item borderr"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="aboutme.php" >
                                <i class="fa fa-info" aria-hidden="true"></i><span class="hide-menu">Giới Thiệu</span></a>
                        </li>
                        <li class="sidebar-item "> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="social.php" >
                                <i class="fa fa-globe" aria-hidden="true"></i><span class="hide-menu">Mạng Xã Hội</span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="skill.php" >
                                <i class="fa fa-code" aria-hidden="true"></i><span class="hide-menu">Kỹ Năng</span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="education.php" >
                                <i class="fa fa-graduation-cap" aria-hidden="true"></i><span class="hide-menu">Giáo Dục</span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="experience.php" >
                                <i class="fa fa-file-user" aria-hidden="true"></i><span class="hide-menu">Kinh Nghiệm </span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="petproject.php" >
                                <i class="fa fa-browser" aria-hidden="true"></i><span class="hide-menu">Sản Phẩm</span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="feedback.php" >
                                <i class="fa fa-comments-alt" aria-hidden="true"></i><span class="hide-menu">Phản Hồi</span></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Giới Thiệu</h3>
                            <div class='container'>
    <form id='about-me' action="" method="post" enctype="multipart/form-data">
      <div class='form-row'>
        <div class='col-md-4'>
          <div class='form-group'>
            <img class='img-av' src='../img/<?php echo $row['img'] ?>' alt="">
            <label for='anh'>Chọn Ảnh</label>
            <input type='file' name='image' class='form-control-file' id='anh' value= '<?php echo $row['img'] ?>'>
          </div>
          <div class='form-group'>
            <label for='ten'>Họ và Tên</label>
            <input type='text' name='name' class='form-control' id='ten' value= '<?php echo $row['name'] ?>' >
          </div>
          <div class='form-group'>
            <label for='sdes'>Miêu tả ngắn gọn</label>
            <input type='text' name='shortDes' class='form-control' id='sdes' value= '<?php echo $row['shortInfo'] ?>'>
          </div>

        </div>
        <div class='col-md-8'>
          <div class='form-group'>
            <label for='cv'>Chọn file CV</label>
            <input type='file' name='cv' class='form-control-file' id='cv'>
          </div>
          <div class='form-group'>
            <label for='des'>Miêu tả về bản thân</label>
            <textarea name='des' class='form-control' id='des' rows='3'><?php echo $row['description'] ?></textarea>
          </div>
        <input type='submit' name='submitt' class='btn btn-primary' value='Lưu'></input>
        </div>
      </div>

    </form>

  </div>
                        </div>
                    </div>
                </div>
     
     
     
     
     
            </div>





<?php
include("footer.php");
?>
<script>
    let status = "<?php echo $msg; ?>";
if(status == 'success'){
    sweetAlert('success','Cập nhập thành công')
}else if(status != ''){
    sweetAlert('warning','Không có gì thay đổi')
}
</script>
</body>

</html>