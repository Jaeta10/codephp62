    <?php
    require_once 'connectdb.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = "";
        if(isset($_GET["id"]))(
        $id = $_GET["id"];
        echo $id;
        if ($frmUsername && $frmPassword) {
            $strSQL = "INSERT INTO users(username,password_hash,status) ";
            $strSQL .= "VALUES ('" . $frmUsername . "','" . $frmPassword . "',0)";
            $result = $myconn->query($strSQL);
            if ($result) {
            echo "เพิ่มข้อมูลสำเร็จ";
            } else {
            echo "ไม่สามารถเพิ่มข้อมูลได้";   
        }
        }else{
            echo "id is null";
        }

      //  $frmUsername = $frmPassword = "";
      //  $frmUsername = $_POST["username"];
      //  $frmPassword = $_POST["password"];
      //  if ($frmUsername && $frmPassword) {
      //      $strSQL = "INSERT INTO users(username,password_hash,status) ";
      //      $strSQL .= "VALUES ('" . $frmUsername . "','" . $frmPassword . "',0)";
      //      $result = $myconn->query($strSQL);
      //      if ($result) {
      //          echo "เพิ่มข้อมูลสำเร็จ";
      //      } else {
      //          echo "ไม่สามารถเพิ่มข้อมูลได้";
      //     }
      //  }
   // }DELETE FROM `user` WHERE 0
   ?>
