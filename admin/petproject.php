<?php
    include('../loginProcess.php'); 
    if(isset($_SESSION['login_user'])){
    
    }else{
        header("location: ../login.php"); 
    }
include("header.php");
require("../config.php");
$sql = "SELECT * FROM petproject";
$result = mysqli_query($conn, $sql);
$list = mysqli_fetch_all($result);
$numm = 0;
?>

        <aside class="left-sidebar" data-sidebarbg="skin6">
            <div class="scroll-sidebar">
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="sidebar-item "> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="users.php" >
                                <i class="fa fa-user" aria-hidden="true"></i><span class="hide-menu">Admin</span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="aboutme.php" >
                                <i class="fa fa-info" aria-hidden="true"></i><span class="hide-menu">Giới Thiệu</span></a>
                        </li>
                        <li class="sidebar-item "> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="social.php" >
                                <i class="fa fa-globe" aria-hidden="true"></i><span class="hide-menu">Mạng Xã Hội</span></a>
                        </li>
                        <li class="sidebar-item "> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="skill.php" >
                                <i class="fa fa-code" aria-hidden="true"></i><span class="hide-menu">Kỹ Năng</span></a>
                        </li>
                        <li class="sidebar-item "> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="education.php" >
                                <i class="fa fa-graduation-cap" aria-hidden="true"></i><span class="hide-menu">Giáo Dục</span></a>
                        </li>
                        <li class="sidebar-item "> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="experience.php" >
                                <i class="fa fa-file-user" aria-hidden="true"></i><span class="hide-menu">Kinh Nghiệm </span></a>
                        </li>
                        <li class="sidebar-item borderr"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
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
                            <h3 class="box-title">Sản Phẩm</h3>
                            <div class="add">
                                <a href=""class="btn btn-block btn-danger text-white" data-toggle='modal' data-target='#editx' target="_blank">Thêm</a>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0 strong-text">ID</th>
                                            <th class="border-top-0 strong-text">Tên</th>
                                            <th class="border-top-0 strong-text">Thể Loại</th>
                                            <th class="border-top-0 strong-text">Mô Tải Ngắn</th>
                                            <th class="border-top-0 strong-text">Liên Kết</th>
                                            <th class="border-top-0 strong-text">Hành Động</th>
                                    </thead>
                                    <tbody>
                                        <?php
                                              foreach($list as $d){ 
                                                  echo "
                                                  <tr>
                                                  <td>$d[0]</td>
                                                  <td>$d[3]</td>
                                                  <td>$d[2]</td>
                                                  <td>$d[4]</td>
                                                  <td>$d[6]</td>
                                                  <td><i data-toggle='modal' data-target='#exampleModal$d[0]' class='fad fa-trash-alt'></i>
                                                  <i data-toggle='modal' data-target='#edit$d[0]' class='fal fa-pencil'></i>
                                                  </td>
        
                                                  <div class='modal fade' id='exampleModal$d[0]' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                                                  <div class='modal-dialog' role='document'>
                                                    <div class='modal-content'>
                                                      <div class='modal-header'>
                                                        <h5 class='modal-title' id='exampleModalLabel'>Bạn đang xóa</h5>
                                                        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                                          <span aria-hidden='true'>&times;</span>
                                                        </button>
                                                      </div>
                                                      <div class='modal-body'>
                                                        Bạn có Thực Sự Muốn Xóa?
                                                      </div>
                                                      <div class='modal-footer'>
                                                        <button type='button' class='btn btn-secondary' data-dismiss='modal' aria-label='Close'>Hủy</button>
                                                        <button type='button' class='btn btn-danger color-white'><a href='delete.php?id=$d[0]&tableName=petproject'>Xóa</a></button>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>

                                                <div class='modal fade' id='edit$d[0]' tabindex='-1' role='dialog' aria-labelledby='exampleModalCenterTitle' aria-hidden='true'>
                                                <div class='modal-dialog modal-dialog-centered' role='document'>
                                                  <div class='modal-content'>
                                                    <div class='modal-header'>
                                                      <h5 class='modal-title' id='exampleModalLongTitle'>Sửa Sản Phẩm</h5>
                                                      <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                                        <span aria-hidden='true'>&times;</span>
                                                      </button>
                                                    </div>
                                                    <div class='modal-body'>
                                                    <form id='about-me' enctype='multipart/form-data'>
                                                    <div class='align-items-center'>
                                                      <div class='form-row'>
                                                      <div class='md-col-6'>
                                                        <div class='form-group '>
                                                          <img class='img-av' src='../img/$d[1]'>
                                                          <label for='anh'>Chọn Ảnh</label>
                                                          <input type='file' name='pic' class='form-control-file' id='anh$numm'>
                                                        </div>
                                                        </div>
                                                        <div class='md-col-6'>
                                                        <div class='form-group'>
                                                        <label for='ten'>ID</label>
                                                        <input  type='text' name='name' value='$d[0]' class='form-control' id='ided$numm' disabled>
                                                      </div>
                                                        <div class='form-group'>
                                                          <label for='ten'>Tên</label>
                                                          <input type='text' name='name' value='$d[3]' class='form-control' id='ten$numm'>
                                                        </div>
                                                        <div class='form-group'>
                                                          <label for='ten'>Thể Loại</label>
                                                          <input type='text' name='name' value='$d[2]' class='form-control' id='type$numm'>
                                                        </div>
                                                        
                                                        </div>
                                                        </div>
                                                        <div class='form-group'>
                                                          <label for='sdes'>Miêu tả ngắn gọn</label>
                                                          <input type='text' name='shortDes' value='$d[4]' class='form-control' id='sdes$numm'>
                                                        </div>
                                              
                                                        <div class='form-group'>
                                                          <label for='des'>Miêu tả về sản phẩm</label>
                                                          <textarea name='des' class='form-control' id='des$numm' rows='3'>$d[5]</textarea>
                                                        </div>
                                                        <div class='form-group'>
                                                          <label for='sdes'>Liên Kết</label>
                                                          <input type='text' value='$d[6]' name='shortDes' class='form-control' id='link$numm'>
                                                        </div>
                                                    </div>
                                                    <div class='modal-footer'>
                                                    <button type='button' class='btn btn-secondary' data-dismiss='modal' aria-label='Close'>Hủy</button>
                                                    <button type='submit' id='save$numm' class='btn btn-danger color-white'><a>Lưu</a></button>
                                                  </div>
                                                  </form>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                                    </tr>
                                                  ";
                                                  $numm ++;
                                              }
                                              echo "
                                              <div class='modal fade' id='editx' tabindex='-1' role='dialog' aria-labelledby='exampleModalCenterTitle' aria-hidden='true'>
                                                <div class='modal-dialog modal-dialog-centered' role='document'>
                                                  <div class='modal-content'>
                                                    <div class='modal-header'>
                                                      <h5 class='modal-title' id='exampleModalLongTitle'>Thêm Kinh Nghiệm</h5>
                                                      <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                                        <span aria-hidden='true'>&times;</span>
                                                      </button>
                                                    </div>
                                                    <div class='modal-body'>
                                                    <form id='form-edit'>
                                                    <div class='form-group'>
                                                    <label for='nameed'>Tên</label>
                                                    <input  class='form-control' id='name' name='name'  >
                                                  </div>
                                                  <div class='form-group'>
                                                    <label for='nameed'>Miêu tả</label>
                                                    <input  class='form-control' id='des' name='name'  >
                                                  </div>
                                                  <div class='form-group'>
                                                    <label for='nameed'>Khoảng thời gian</label>
                                                    <input  class='form-control' id='time' name='name' >
                                                  </div>
                                                      </div>
                                                          <div class='modal-footer'>
                                                        <button type='button' class='btn btn-secondary' data-dismiss='modal' aria-label='Close'>Hủy</button>
                                                        <button type='submit' id='savex' class='btn btn-danger color-white'><a>Lưu</a></button>
                                                      </div>
                                                      </form>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>";
                                        ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
     
     
     
     
     
            </div>





<?php
include("footer.php");
?>
<script>
  let lengthArr = '<?php echo sizeof($list)?>';
  let numArr = parseInt(lengthArr);
  let currentRole = '<?php echo $currentRole ?>'

  for(let i = 0; i<numArr;i++){

      $(`#save${i}`).click(()=>{

if(currentRole == '1'){
  
  let id = $(`#ided${i}`).val();
  let name = $(`#ten${i}`).val();
  let type = $(`#type${i}`).val();
  let img = $(`#anh${i}`).val();
    let sdes = $(`#sdes${i}`).val();
    let des = $(`#des${i}`).val();
  let link = $(`#link${i}`).val();
  
$.ajax({
    url: './editPetproject.php',
    method: 'POST',
    dataType: 'json',
    data: {
        id: id,
        name: name,
        des: des,
        sdes: sdes,
        img:img,
        type: type,
        link:link,
    },
    success: function (data) {
        sweetAlert(data.status,data.response);

        setTimeout(function(){ window.location.href = 'petproject.php'; }, 3000);
        
    }
});
return false;

}else{
  alert("Bạn cần quyền admin để thực hiện")
}


     })
            
  }



  $('#savex').click(()=>{
        

if(currentRole == '1'){
  let name = $(`#name`).val();
  let des = $(`#des`).val();
  let time = $(`#time`).val();
$.ajax({
    url: './saveExperience.php',
    method: 'POST',
    dataType: 'json',
    data: {
        name: name,
        des: des,
        time:time
    },
    success: function (data) {
        sweetAlert(data.status,data.response);

        setTimeout(function(){ window.location.href = 'petproject.php'; }, 3000);
        
    }
});
return false;

}else{
  alert("Bạn cần quyền admin để thực hiện")
}


     })

    
</script>
</body>

</html>