<?php

function loginAdmin($user, $password)
{
    $sql ="select * from public.admin";
    $ret = pg_query(getConn(), $sql);
    if (pg_num_rows($ret)===0) {
        echo pg_last_error($db);
        exit;
    } else {
        while ($row = pg_fetch_array($ret)) {
            $pass = $row['password'];
            if ($user === $row['username']) {
                if ($password === $pass) {
                    $_SESSION['id']=$row['id'];
                    echo
                    '
                    <script>demo.showNotification("top","right",'.$_SESSION['id'].');</script>
                ';
                header("Location: index.php?".md5("controller")."=".md5('map')); 
                   
                  
                } //end if
                else {
                       echo
                       '
                       <script>demo.showNotification("top","right","Login Failed");</script>
                   ';
                  
                }//end inner else
            } //end inner if

            else {
                echo
                '
                <script>
                    demo.showNotification("top","right","Login Failed");
                    
                </script>
            ';
            
            }//end outer else
        }//end while
    }//end else
}
