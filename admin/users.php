<?php
    include('../loginProcess.php'); 
    if(isset($_SESSION['login_user'])){
    
    }else{
        header("location: ../login.php"); 
    }
include("header.php");
require("../config.php");
$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);
$list = mysqli_fetch_all($result);
$numm = 0;
?>

        <aside class="left-sidebar" data-sidebarbg="skin6">
            <div class="scroll-sidebar">
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                    <li class="sidebar-item borderr"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="users.php" >
                                <i class="fa fa-user" aria-hidden="true"></i><span class="hide-menu">Admin</span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="aboutme.php" >
                                <i class="fa fa-info" aria-hidden="true"></i><span class="hide-menu">Giới Thiệu</span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
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
                            <h3 class="box-title">Tài Khoản</h3>
                            <div class="add">
                                <a href=""class="btn btn-block btn-danger text-white" target="_blank">Thêm</a>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0 strong-text">ID</th>
                                            <th class="border-top-0 strong-text">Tên</th>
                                            <th class="border-top-0 strong-text">Email</th>
                                            <th class="border-top-0 strong-text">Mật Khẩu</th>
                                            <th class="border-top-0 strong-text">Vai Trò</th>
                                            <th class="border-top-0 strong-text">Hành Động</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                              foreach($list as $d){
                                                  if($d[4] == 1){
                                                      $role = "Admin";
                                                  }else if($d[4] == 0){
                                                    $role = "Member";
                                                  }
                                                
                                                  echo "
                                                  <tr>
                                                  <td>$d[0]</td>
                                                  <td>$d[1]</td>
                                                  <td>$d[2]</td>
                                                  <td>$d[3]</td>
                                                  <td>$role</td>
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
                                                        <button type='button' class='btn btn-danger color-white'><a href='delete.php?id=$d[0]&tableName=users'>Xóa</a></button>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>

                                                <div class='modal fade' id='edit$d[0]' tabindex='-1' role='dialog' aria-labelledby='exampleModalCenterTitle' aria-hidden='true'>
                                                <div class='modal-dialog modal-dialog-centered' role='document'>
                                                  <div class='modal-content'>
                                                    <div class='modal-header'>
                                                      <h5 class='modal-title' id='exampleModalLongTitle'>Sửa tài khoản</h5>
                                                      <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                                        <span aria-hidden='true'>&times;</span>
                                                      </button>
                                                    </div>
                                                    <div class='modal-body'>
                                                    <form id='form-edit'>
                                                    <div class='form-group'>
                                                            <label for='ided'>ID</label>
                                                            <input  class='form-control' id='ided$numm' name='id' value = '$d[0]'disabled >
                                                          </div>
                                                        <div class='form-group'>
                                                            <label for='nameed'>Tên</label>
                                                            <input  class='form-control' id='nameed$numm' name='name' value = '$d[1]' >
                                                          </div>
                                                          <div class='form-group'>
                                                            <label for='passed'>Mật khẩu</label>
                                                            <input  class='form-control' id='passed$numm' name='id' value = '$d[3]' >
                                                          </div>
                                                          <div class='form-group'>
                                                            <label for='roleed'>Vai Trò</label>
                                                            <div class='name-container'>
                                                                <select id='roleed$numm' name='role' class='custom-select'>
                                                                <option value=0>Mentor</option>
                                                                    <option value=1>Admin</option>
                                                                    
                                                                </select>
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

  for(let i = 0; i<numArr;i++){

      $(`#save${i}`).click(()=>{
        let currentRole = '<?php echo $currentRole ?>'

if(currentRole == '1'){
  
  let id = $(`#ided${i}`).val();
  let name = $(`#nameed${i}`).val();
  let password = $(`#passed${i}`).val();
  let role = $(`#roleed${i}`).val();
$.ajax({
    url: './editUsers.php',
    method: 'POST',
    dataType: 'json',
    data: {
        name: name,
        id: id,
        pass: password,
        role: role,
    },
    success: function (data) {
        sweetAlert(data.status,data.response);

        setTimeout(function(){ window.location.href = 'users.php'; }, 3000);
        
    }
});
return false;

}else{
  alert("Bạn cần quyền admin để thực hiện")
}


     })
            
  }

    
</script>
</body>

</html>