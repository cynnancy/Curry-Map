<?php
if (isset($_POST["Insert"])) {
   $author = $_POST["author"];
   $store_names = $_POST["store_names"];
   $comment = $_POST["comment"];
   $writing_time = date("Y-m-d H:i:s");
   // 開啟MySQL的資料庫連接
   $link = @mysqli_connect("localhost","root","") 
         or die("無法開啟MySQL資料庫連接!<br/>");
   mysqli_select_db($link, "curry");  // 選擇資料庫

   // 建立新增記錄的SQL指令字串
   $sql ="INSERT INTO dining_brief (author, store_names, comment, ";
   $sql.="writing_time) VALUES ('";
   $sql.=$_POST["author"]."','".$_POST["store_names"]."','";
   $sql.=$_POST["comment"]."','".$writing_time."')";
   echo "<b>SQL指令: $sql</b><br/>";
   //送出UTF8編碼的MySQL指令
   mysqli_query($link, 'SET NAMES utf8'); 
   if ( mysqli_query($link, $sql) ) // 執行SQL指令
      echo "新增成功！". 
           mysqli_affected_rows($link) . "<br/>";
    
   else
      die("新增失敗<br/>");
   mysqli_close($link);      // 關閉資料庫連接
}
    header("Location: board.php");
?>

</body>
</html>