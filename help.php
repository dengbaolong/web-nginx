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
        <h3>Help v1.0</h3>
	<hr/>
	<p>building ...</p>
	<p>web-nginx<?=$version?></p>
	<p>web-nginx<?=$version?>�汾�����ڹ���http����\http����</p>
        <ul>
	<li>services ģ��</li>
	<p>service ���ڹ���nginx�еķ�����web-nginx�ж�����������Ϊһ��service,�����ڲ�ͬ��nginx�����д�����ͬ��serivce�������ϱ���������ֲ�ʽ��ơ�</p>
		<ul>
		<li>���ӷ���</li>
		<li>ɾ������</li>
		<li>�ͻ�������־</li>
		</ul>
	<li>configs ģ��</li>
	<p>configs ��������nginx service�����ݡ�֧�ֲ�ͬ��ģ�嶨�壬web-nginxʹ��ר��ָ��д�������ļ���</p>
		<ul>
		<li>�޸�����</li>
		<li>ɾ������</li>
		<li>�ύ����</li>
		</ul>
	</ul>
</div>
<?php
include "abort_coltwo.php";
include "footer.php";
?>
