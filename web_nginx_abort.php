<?php
$actionid="abort";
include "head.php";
include "functionapi.php";
if ($_SESSION['user_class'] == null){
die("place relogin<a href ='login.php'>login page</a>");
}
?>
<div id="content">
        <div id="colOne">
        <h2>Nginx Services manager</h2>
        <h3>Abort</h3>
        <hr/>
	<p>web-nginx <?=$version?></p> 
	<p>web-nginx ���ù������</p>
	���������ڹ���nginx �����������ù���������nginx��http����������ú�http�������á�
	����Ϊ��߶�̨nginx ���������л�����������ļ�ͳһ������ơ�
	��Ա������иĽ����⣬��ӭ������ϵ��
</div>
<?php
include "abort_coltwo.php";
include "footer.php";
?>

