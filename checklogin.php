<?php
error_reporting(E_ALL);
date_default_timezone_set('Asia/Jakarta');

$username = mysql_real_escape_string($_POST['login']);
$password = mysql_real_escape_string($_POST['password']);


$page = $_GET['p'];
$today = strtotime(date('d/m/Y'));
include 'include/config.php';


$sql = "SELECT user.uniq_id AS user_ui, user.*, user_login.* FROM user LEFT JOIN user_login ON user.uniq_id = user_login.uniq_id WHERE user.email = '$username' and user_login.password = '$password'";
$result = mysql_query($sql);


while ($row = mysql_fetch_assoc($result)) {
    $uniq_id = $row['user_ui'];
    
    if($row['cl'] == 'y' and $row['s1'] == '' and $row['s2'] == '' and $row['s3'] == ''){
        setcookie("client", $uniq_id, strtotime( '+1 year' ));
        setcookie("sec1", "", time() - 3600);
        setcookie("sec2", "", time() - 3600);
        setcookie("sec3", "", time() - 3600);
    }
    if($row['s1'] == 'y' and $row['cl'] == '' and $row['s2'] == '' and $row['s3'] == ''){
        setcookie("sec1", $uniq_id, strtotime( '+1 year' ));
        setcookie("client", "", time() - 3600);
        setcookie("sec2", "", time() - 3600);
        setcookie("sec3", "", time() - 3600);
    }
    if($row['s2'] == 'y' and $row['cl'] == '' and $row['s1'] == '' and $row['s3'] == ''){
        setcookie("sec2", $uniq_id, strtotime( '+1 year' ));
        setcookie("client", "", time() - 3600);
        setcookie("sec1", "", time() - 3600);
        setcookie("sec3", "", time() - 3600);
    }
    if($row['s3'] == 'y' and $row['cl'] == '' and $row['s1'] == '' and $row['s2'] == ''){
        setcookie("sec3", $uniq_id, strtotime( '+1 year' ));
        setcookie("client", "", time() - 3600);
        setcookie("sec1", "", time() - 3600);
        setcookie("sec2", "", time() - 3600);  
    }
    if($row['cl'] == '' and $row['s1'] == 'y' and $row['s2'] == 'y' and $row['s3'] == 'y'){
        setcookie("client", "", time() - 3600);
        setcookie("sec1", $uniq_id, strtotime( '+1 year' ));
        setcookie("sec2", $uniq_id, strtotime( '+1 year' ));
        setcookie("sec3", $uniq_id, strtotime( '+1 year' ));
    }
    if($row['cl'] == 'y' and $row['s1'] == 'y' and $row['s2'] == 'y' and $row['s3'] == 'y'){
        setcookie("client", $uniq_id, strtotime( '+1 year' ));
        setcookie("sec1", $uniq_id, strtotime( '+1 year' ));
        setcookie("sec2", $uniq_id, strtotime( '+1 year' ));
        setcookie("sec3", $uniq_id, strtotime( '+1 year' ));
    }
    
    
//    $uniq_id = $row['user_ui'];
//    $doe = $row['doe']; 
//    $nd = explode('/', $doe);
//    $neu = $nd[1].'/'.$nd[0].'/'.$nd[2];
//    $doe_num = strtotime($neu); 
    
    
    
    $admin = $row['admin'];
    
    if($admin == 1){
        setcookie("admin", $uniq_id, strtotime( '+1 year' ));
    } else {
        setcookie("admin", "", time() - 3600);
    }
}
 

if($page == 'admin'){
    header("location:admin.php");
} else if($page == 'sectors1'){
    header("location:sectors1.php");
} else if($page == 'sectors2'){
    header("location:sectors2.php");
} else if($page == 'sectors3'){
    header("location:sectors3.php");
} else if($page == 'clients'){
    header("location:clients.php");
}


//if(mysql_num_rows($result) > 0){
//    if($page == 'admin'){
//        header("location:admin.php");
//    } else if($page == 'sectors1'){
//        header("location:sectors1.php");
//    } else if($page == 'sectors2'){
//        header("location:sectors2.php");
//    } else if($page == 'sectors3'){
//        header("location:sectors3.php");
//    } else if($page == 'clients'){
//        header("location:clients.php");
//    }
//    
//} else {
//    if($page == 'admin'){
//        header("location:admin.php");
//    } else if($page == 'clients'){
//        header("location:clients.php");
//    } else {
//        header("location:credentials.php");
//    }
//}
//    



   
?> 