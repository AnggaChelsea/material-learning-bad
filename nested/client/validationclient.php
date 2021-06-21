<form action="../server/validateserver.php" method="post">
<?php $error ?>
<table align="center" width="50%" border="0">
<?php
if(isset($error))
{
 ?>
    <tr>
    <td id="error"><?php echo $error; ?></td>
    </tr>
    <?php
}
?>
<tr>
<td><input type="text" name="uname" placeholder="User Name" value="<?php if(isset($uname)){echo $uname;} ?>"  <?php if(isset($code) && $code == 1){ echo "autofocus"; }  ?> /></td>
</tr>
<tr>
<td><input type="text" name="email" placeholder="Your Email"  value="<?php if(isset($email)){echo $email;} ?>" <?php if(isset($code) && $code == 2){ echo "autofocus"; }  ?> /></td>
</tr>
<tr>
<td><input type="text" name="mno" placeholder="Mobile No" value="<?php if(isset($mno)){echo $mno;} ?>" <?php if(isset($code) && $code == 3){ echo "autofocus"; }  ?> /></td>
</tr>
<tr>
<td><input type="password" name="pass" placeholder="Your Password" <?php if(isset($code) && $code == 4){ echo "autofocus"; }  ?> /></td>
</tr>
<tr>
<td><button type="submit" name="btn-signup">Sign Me Up</button></td>
</tr>
</table>