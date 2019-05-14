<?php
function loginAdmin($user, $password) {
    session_start();
    $sql ="select * from crime_db.accounts";
    $ret = pg_query(getConn(), $sql);
    if (pg_num_rows($ret)===0) {
        echo pg_last_error($db);
        exit;
    } else {
        $cont = md5('controller');
        $dsh = md5('dashboard');
        $dsh_supp = md5('dashboard_support');
        while ($row = pg_fetch_array($ret)) {
            $pass = $row['password'];
            
            if ($user === $row['username'] && $password === $pass) {
              
                
                if($row['role_id']==='0'){
                    echo("<script>location.href = 'index.php?$cont=$dsh';</script>");
                    echo $row['username'];
                    exit();
                }
                elseif($row['role_id']==='1'){
                    echo("<script>location.href = 'index.php?$cont=$dsh_supp';</script>");
                }  
            } //end inner if


            else {
                echo $row['password'];
                echo $row['username'];
                echo'di ka login chuy';
                
            }//end outer else
        }//end while
    }//end else
   
}


function loginSupport($user, $password) {
    session_start();
    $sql ="select * from crime_db.accounts";
    $ret = pg_query(getConn(), $sql);
    if (pg_num_rows($ret)===0) {
        echo pg_last_error($db);
        exit;
    } else {
        $cont = md5('controller');
        $dsh = md5('dashboard_support');
        while ($row = pg_fetch_array($ret)) {
            $pass = $row['password'];
            
            if ($user === $row['username'] && $password === $pass) {
              
                if($row['role_id']==='0'){
                    echo("<script>location.href = 'index.php?$cont=$dsh';</script>");
                    echo $row['username'];
                    exit();
                }
                elseif($row['role_id']==='0'){
                    echo("<script>location.href = 'index.php?$cont=$dsh';</script>");
                }  
                
                
                //inner else end
                echo $row['username'];
            } //end inner if


            else {
                echo $row['password'];
                echo $row['username'];
                echo'di ka login chuy';
                
            }//end outer else
        }//end while
    }//end else
   
}
?>
