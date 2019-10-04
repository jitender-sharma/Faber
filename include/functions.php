<?php


function login($ref){
    if(!empty($_GET['e'])){
        $e = $_GET['e'];
    } else {
        $e = 0;
    }

    
    
    $txt = "
    <div style='height:40px; background-color:#ffffff'></div>
    <div style='height:900px; background-color:#ffffff'>
        <div id='form_login'>
            <div style='margin:0 30px; text-align:justify'>
                <div align='center'>";
                
                if($e == 0){
                    $txt .= "Login is required to access this page";
                } else if($e == 201){
                    $txt .= "<span style='color:red'>Your access is expired!</span>";
                }
                
                $txt .= " 
                </div> <br>
                <section class='container'>
                    <div class='login'>
                        <h1>LOGIN</h1> 

                        <form method='post' action='checklogin.php?p=$ref'>
                            <p><input type='text' name='login' value='' placeholder='ID'></p>
                            <p><input type='password' name='password' value='' placeholder='Password'></p>
                            <p class='remember_me'>
                                <label>
                                    <input type='checkbox' name='remember_me' id='remember_me'>
                                    Remember me on this computer
                                </label>
                            </p>
                            <p class='submit'><input type='submit' name='commit' value='Login'></p>
                        </form>
                    </div>

                    <!--
                    <div class='login-help'>
                        <p><span class='link' onclick=\"return goto_forgot();\">Forgot your password?</span> or <span class='link' onclick=\"return goto_signup();\">Request access</span></p>
                    </div>
                    -->
                </section>
            </div>
        </div>
        
        <div id='form_forgot' style='display:none'>
            <div style='margin:0 30px; text-align:justify'>
                <div align='center'>Please enter your email address</div> <br>
                <section class='container'>
                    <div class='login'>
                        <h1>Request New Password</h1> 

                        <form method='post' action='checklogin.php?p=$ref'>
                            <p><input type='text' name='login' value='' placeholder='ID'></p>
                            <p class='submit'><input type='submit' name='commit' value='Submit'></p>
                        </form>
                    </div>

                    <div class='login-help'>
                        <p><span class='link' onclick=\"return goto_login();\">Back to Login</span></p>
                        <!--
                        <p><span class='link' onclick=\"return goto_login();\">Back to Login</span> or <span class='link' onclick=\"return goto_signup();\">Request access</span></p>
                        -->
                    </div>
                </section>
            </div>
        </div>

        <div id='form_signup' style='display:none'>
            <div style='margin:0 30px; text-align:justify'>
                <div align='center'>Please enter your information</div> <br>
                <section class='container'>
                    <div class='login'>
                        <h1>SIGNUP</h1> 

                        <form method='post' action='checklogin.php?p=$ref'>
                            <p><input type='text' name='login' value='' placeholder='ID'></p>
                            <p class='submit'><input type='submit' name='commit' value='Submit'></p>
                        </form>
                    </div>

                    <div class='login-help'>
                        <p><span class='link' onclick=\"return goto_login();\">Back to Login</span></p>
                        
                        <!--
                        <p><span class='link' onclick=\"return goto_login();\">Back to Login</span> or <span class='link' onclick=\"return goto_signup();\">Request access</span></p>
                        -->
                    </div>
                </section>
            </div>
        </div>
        
    </div>    
    ";
    
    return $txt; 
}






function admin_login(){
    $txt = "
    <div style='height:40px; background-color:#ffffff'></div>
    <div style='height:900px; background-color:#ffffff'>
        <div id='form_login'>
            <div style='margin:0 30px; text-align:justify'>
                <div align='center'>
                    Login is required to access this page
                </div><br>
                <section class='container'>
                    <div class='login'>
                        <h1>LOGIN</h1> 

                        <form method='post' action='checklogin.php?p=admin'>
                            <p><input type='text' name='login' value='' placeholder='Email'></p>
                            <p><input type='password' name='password' value='' placeholder='Password'></p>
                            <p class='remember_me'>
                                <label>
                                    <input type='checkbox' name='remember_me' id='remember_me'>
                                    Remember me on this computer
                                </label>
                            </p>
                            <p class='submit'><input type='submit' name='commit' value='Login'></p>
                        </form>
                    </div>
                </section>
            </div>
        </div>
    </div>    
    ";
    
    return $txt; 
}
 

   

function admin_userlist(){ 
    $txt = "
    <div style='height:40px; background-color:#ffffff'></div>
    <div style='height:900px; background-color:#ffffff'>
        <table width='100%' id='myTable' cellspacing='0' cellpadding='3' class='tablesorter'>
            <thead width='100%' align='left'>
                <tr class='tabs'>
                    <th></th>
                    <th>NO</th>

                    <th></th>
                    <th>NAME</th>

                    <th></th>
                    <th>EMAIL</th> 

                    <th></th>
                    <th>EXPIRY</th>

                    <th></th>
                    <th>ACTION</th>
                    <th></th>
                </tr>
            </thead>
            <tbody width='100%'>
                ".userlist()."
            </tbody>
        </table>
    </div>    
    ";
    
    return $txt; 
}


function userlist(){
    
    
    $today = date('d/m/Y');
    $today_num = strtotime($today);
    
    
    include 'include/config.php';
    $sql = "SELECT user.uniq_id AS user_ui, user.*, user_login.* FROM user LEFT JOIN user_login ON user.uniq_id = user_login.uniq_id ORDER BY name ASC";
    $result = mysql_query($sql);
    
    
    $txt = "<tr>";
    $x = 0;
    while ($row = mysql_fetch_assoc($result)) {
        $x++;
        $name = $row['name'];
        $email = $row['email'];
        $doe = $row['doe']; 
        
        $nd = explode('/', $doe);
        $neu = $nd[1].'/'.$nd[0].'/'.$nd[2];
        $doe_num = strtotime($neu); 
        
        $doen = date('F jS, Y', strtotime($doe));
        
        
        if($doe_num <= $today){
            $dt = "<em style='color:#aeaeae'>expired</em>";
        } else {
            $dt = $doen;
        }
        
        $txt .= "
        <td>&nbsp;</td>
        <td class='tab_mid'>$x</td>
        <td>&nbsp;</td>
        <td class='tab_mid'>$name</td>
        <td>&nbsp;</td>
        <td class='tab_mid'>$email</td>
        <td>&nbsp;</td>
        <td class='tab_mid'>$dt</td>
        <td>&nbsp;</td>
        <td class='tab_mid'>x</td>
        <td>&nbsp;</td>";
    }
    $txt .= "</tr>";
    
    return $txt;
}

function checkExpiry($uniq_id){
    
    $today = strtotime(date('d/m/Y'));
    
    include 'include/config.php';
    $sql = "SELECT * FROM user_login WHERE uniq_id = '$uniq_id'";
    $result = mysql_query($sql);
    
    while ($row = mysql_fetch_assoc($result)) {
        $doe = $row['doe']; 
        $nd = explode('/', $doe);
        $neu = $nd[1].'/'.$nd[0].'/'.$nd[2]; 
        $doe_num = strtotime($neu);
    }
    
    if($today > $doe_num){
        $txt = 0;
    } else {
        $txt = 1;
    }
    
    return $txt;
    
}

?>