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
                    header("Location: index.php?".md5("controller")."=".md5('map'));
                }


                else{
                    echo
                    '
                    <script>
                        demo.showNotification("top","right","Login Failed");
                        
                    </script>
                    qweqweqwe
                ';
                   exit();
                }//inner else end



                
                } //end inner if
                else {
                    echo
                    '
                    <script>
                        demo.showNotification("top","right","Login Failed");
                        
                    </script>
                    asdasdasdasdasd
                ';
                   exit();
                }//end outer else
            
            
        }//end while
    }//end else
}
