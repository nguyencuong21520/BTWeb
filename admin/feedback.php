<?php
    include('../loginProcess.php'); 
    if(isset($_SESSION['login_user'])){
    
    }else{
        header("location: ../login.php"); 
    }
include("header.php");
require("../config.php");
$sql = "SELECT * FROM feedback";
$result = mysqli_query($conn, $sql);
$list = mysqli_fetch_all($result);

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
                        <li class="sidebar-item borderr"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
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
                            <h3 class="box-title">Phản Hồi</h3>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0 strong-text">Tên</th>
                                            <th class="border-top-0 strong-text">Email</th>
                                            <th class="border-top-0 strong-text">Tiêu Đề</th>
                                            <th class="border-top-0 strong-text">Thời Gian</th>
                                            <th class="border-top-0 strong-text">Hành Động</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                              foreach($list as $d){
                                                
                                                  echo "
                                                  <tr>
                                                  <td>$d[2]</td>
                                                  <td>$d[3]</td>
                                                  <td>$d[4]</td>
                                                  <td>$d[1]</td>
                                                  <td><i data-toggle='modal' data-target='#exampleModal$d[0]' class='fad fa-trash-alt'></i>
                                                  <i data-toggle='modal' data-target='#exampleModalif$d[0]' class='fad fa-info-circle'></i>
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
                                                        <button type='button' class='btn btn-danger color-white'><a href='delete.php?id=$d[0]&tableName=feedback'>Xóa</a></button>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>

                                                <div class='modal fade' id='exampleModalif$d[0]' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                                                <div class='modal-dialog' role='document'>
                                                  <div class='modal-content'>
                                                    <div class='modal-header'>
                                                      <h5 class='modal-title' id='exampleModalLabel'>lời nhắn</h5>
                                                      <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                                        <span aria-hidden='true'>&times;</span>
                                                      </button>
                                                    </div>
                                                    <div class='modal-body'>
                                                      <span>$d[5]</span>
                                                    </div>
                                                    <div class='modal-footer'>
                                                      <button type='button' class='btn btn-secondary' data-dismiss='modal' aria-label='Close'>Hủy</button>
                                                      <button type='button' class='btn btn-danger color-white'><a href='delete.php?id=$d[0]&tableName=feedback'>Xóa</a></button>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>

                                                    </tr>
                                                  ";
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
  $('#form-edit').on('submit', function (e) {
            e.preventDefault()
            let currentRole = '<?php echo $currentRole ?>'

            if(currentRole == '1'){
              
              let id = $('#ided').val();
              let name = $('#nameed').val();
              let password = $('#passed').val();
              let role = $('#roleed').val();
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