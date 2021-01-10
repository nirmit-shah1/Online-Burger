
<?php
/*session_start();
$login= explode(' ', $login_details); 
$email=$login[1];
$password=$login[2];
$user = DB::table('user')->where('mail', $email)->where('password',$password)->get();

if($user->isEmpty())
{
    $_SESSION["login_email"]=$data[1];
}
else
{
    $user_details= explode(',', $user);
    $data=$user_details[0];
    $email_confirm=(string)$data;
    $main_email=ltrim($email_confirm,'[{"mail"');
    $data=(string)$main_email;
    $final=preg_replace('":"',"",$data);
    $final1=str_replace('"', '', $final);
    echo $final1;
    if($final1== "admin@gmail.com")
    {
        $_SESSION["adminlogin"]=1;        
        //windows.location.href='http://localhost/ibraslaravel/resources/views/pages/admin.blade.php'
    
        
        
    }
    else
     {
        echo "Common User";
    }    
}
*/
?>