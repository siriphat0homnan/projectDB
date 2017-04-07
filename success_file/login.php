<?php
/**
 * @Author: sahapap
 * @Date:   2017-02-01 15:54:18
 * @Last Modified by:   Lock-On
 * @Last Modified time: 2017-03-26 20:42:50
 */

/*if ($_POST['username'] == "root" && $_POST['pass'] == "123") {
    # code...
    echo "Complete";
}else{
    echo "error!!!";
}*/

session_start();

$user = $_POST['username'];
$pass = $_POST['pass'];



/*if ( strcmp($user, "admin") == 0 || strcmp($pass, "1234")==0 ) {
    header("Location:HostAdmin.php");
}else if ( strcmp($user, "hospital") == 0 || strcmp($pass, "5555")==0 ) {
    header("Location:admin.php");
}
*/

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blood";

$conn = new mysqli($servername,$username,$password,$dbname);

if ($conn->connect_error) {
    die ("Connection failed: ".$conn->connect_error);
}

$sql = "select * from user";

$result = $conn->query($sql);

$sw=0;

while ($row = $result->fetch_assoc()) {
    $username = $row['username'];
    $password = $row['password'];

    if ( strcmp($user,$username)==0 && strcmp($pass,$password)==0 ){
        $sw = 1;
        $conn->close();
        $_SESSION['U'] = $user;
        $_SESSION['P'] = $pass;
        break;
    }
}
$conn->close();

if ($sw==1){
    header("Location:HostAdmin.php");    
}

if ($sw==0){
    
echo "ไม่ถูกต้อง";
sleep(2);
header("Location:login_page.php");

}






//echo $x; 
    


?>