<?php
$actionid = "login";
include "head.php";
?>
 <div id="content">
                <div id="colOne">
			<h2>Nginx Services manager</h2>
			<hr\>
			<p>login</p>
                        <table name="listnginxserver">
                        <tr>
                        <th>username</th>
                        <th>password</th>
                        </tr>
			<form name="login" action="services.php" method="post">
                        <tr>
                        <td><input type="text" name="username" size="20"</td>
                        <td><input type="password" name="password" size="20"></td>
                        </tr>
                        </table>
			<center><input type="submit" value="login"></center>
                </div>
                <div id="colTwo">
                        <h2>Nginx Services</h2>
                        <h3>Help Information</h3>
			<p>nginx 配置管理程序</p>
			<p>请使用您的用户名登录</p>
                </div>
                <div style="clear: both;">&nbsp;</div>
        </div>
<?php
include "footer.php";
?>

