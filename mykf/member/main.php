<?php
if(!defined('IN_EQMK') || !defined('IN_MEMBER')) {
	exit('Access Denied');
}
include("header.php");?>
<script type="text/javascript">
function ToServer(){
  window.open("<?=$homepage?>service","Dialog","toolbar=no,location=no,status=no,menubar=no,scrollbars=no,resizable=no,width=700,height=472");
}
</script>
<table border="0" cellspacing="1" align="center" class="list">
<tr>
<th align="left" colspan=2>&nbsp;������ʾ</th>
</tr>
<tr>
<td height="20" colspan="2" style="line-height:20px">
<?if(is_dir('../service')){?><div style="float:right;margin:20px;cursor:pointer"><img src="../images/membercp/right_toserver.gif" onclick="ToServer()"></div><?}?>
  <a href="?action=help#skin1" title="<img src='../images/membercp/help_demo1.jpg' width='300'>" style="color:blue;text-decoration:none">�Ի������ͼʾ</a> ��
  <a href="?action=help#skin2" title="<img src='../images/membercp/help_demo2.jpg' width='300'>" style="color:blue;text-decoration:none">��������ͼʾ</a> ��
  <a href="?action=pay&type=pay" style="color:blue;text-decoration:none">�˻���ֵ</a><?if(!CheckGrade('allworker') && MyGrade('buy')){?> ��
  <a href="?action=pay&type=buysort" style="color:blue;text-decoration:none">����ϯλ��</a> ��
  <a href="?action=pay&type=buyworker" style="color:blue;text-decoration:none">���ӿͷ���</a><?}?>
  <?=$tips?>
</td>
</tr>
</table>
<br />
<table border="0" cellspacing="1" align="center" class="list">
<tr>
<th align="left" colspan=2>&nbsp;��½��Ϣ</th>
</tr>
<tr>
<td height="20" colspan="2">������,<span style="font-weight:bold;color:#ff0000"><?=$username?></span>����MQ:<span style="font-weight:bold;color:#0000ff;text-decoration:underline"><?=$MQ?></span> <?=ToHelp('MQ')?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;����������
<select id="adminstyle"><?=$style_options?></select>
<?=setinput("button","button","Ӧ��","onclick=\"location.href='save.php?action=setstyle&curstyle='+$('adminstyle').options.value\"")?></td>
</tr>
<tr>
<td height="20" colspan="2">����������<font color=red><?=$logincount?></font>�ε�½��ϵͳ</td>
</tr>
<tr>
<td height="20">���ϴε�½ʱ��:<font color=009933><?=$lasttime?></font></td>
<td width="1" rowspan="4"></td>
</tr>
<tr>
<td height="20">���ϴ�IP��ַ:<font color=009933><?=$lastip?></font> <?=$lastaddress?></td>
</tr>
<tr>
<td height="20">�����ε�½ʱ��:<font color=009933><?=$thistime?></font></td>
</tr>
<tr>
<td height="20">������IP��ַ:<font color=009933><?=$thisip?></font> <?=$thisaddress?></td>
</tr>
<tr>
<th align="left" colspan=2>&nbsp;���ݸſ�</th>
</tr>
<tr>
<td height="20" colspan="2">��
������:<font color="#ff0000"><?=$ag?></font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</td>
</tr>
<tr>
<td height="20" colspan="2">��
��ͨʱ��:<font color=gray><?=$infotime?></font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
����ʱ��:<font color=gray><?=$exptime?></font> <?if(MyGrade('exptimes')){?>-><a href="?action=pay&type=exptimes" style="color:blue">չ��</a><?}?>
</td>
</tr>
<tr>
<td height="20" colspan="2">��
���:<font color=red><?=$money?></font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
���Ѷ�:<font color=red><?=$paymoney?></font>
</td>
</tr>
<tr>
<td height="20" colspan="2">��<?if(CheckGrade('allworker')){?>
<font color=red>���ѿ�ͨ���޿ͷ����ܣ���ϯ�������ƣ���ѯ����������</font>
<?}else{?>
���ϯλ��:<font color=red><?=$sortcount?></font> <?if(MyGrade('buy')){?><a href="?action=pay&type=buysort" style="color:blue">����</a><?}?>&nbsp;&nbsp;&nbsp;&nbsp;
���ͷ���:<font color=red><?=$workercount?></font> <?if(MyGrade('buy')){?><a href="?action=pay&type=buyworker" style="color:blue">����</a><?}?>
<?}?>
</td>
</tr>
<tr>
<td height="20" colspan="2">��
����ϯλ��:<font color=red><?=$count1?></font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
���ÿͷ���:<font color=red><?=$count2?></font>
</td>
</tr>
<tr>
<td height="20" colspan="2">��
���߿ͷ�:<font color=red><?=$count3?></font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
���߷ÿ�:<font color=red><?=$count4?></font>
</td>
</tr>
<!--
<tr>
<th align="left" colspan=2>&nbsp;ҵ���ƹ�</th>
</tr>
<tr>
<td height="20" colspan="2">��
�ƹ���:<font color="#ff0000"><?=$cid?></font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</td>
</tr>
<tr>
<td height="20" colspan="2">��
�ƹ�ͻ���:<font color="#ff0000"><?=$usercount1?></font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
��Ч�ͻ���:<font color="#ff0000"><?=$usercount2?></font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
������:<font color="#ff0000"><?=$usermoney?></font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</td>
</tr>
-->
</table>
<?include("footer.php");?>