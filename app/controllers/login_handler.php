<?php
function loginAdmin($user, $password)
{
    $sql ="select * from public.admin";
    $ret = pg_query(getConn(), $sql);
    if (pg_num_rows($ret)===0) {
        echo pg_last_error($db);
        exit;
    } else {
        $cont = md5('controller');
        $dsh = md5('dashboard');
        while ($row = pg_fetch_array($ret)) {
            $pass = $row['password'];
            if ($user === $row['username']) {
                if ($password === $pass) {
                    $_SESSION['id']=$row['id'];
                  //  header("Location: index.php?".md5("controller")."=".md5('dashboard'));
                    echo("<script>location.href = 'index.php?$cont=$dsh';</script>");
                    exit();
                }
                else{
                   
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