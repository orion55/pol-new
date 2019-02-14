<?php get_header('page'); ?>
<br>
<br>
<style type="text/css">
.lc_block li a:hover, .lc_block .ui-tabs-active a {
    border-bottom: 2px solid #f25e99 !important;
    font-family: 'GeometriaMedium' !important;
    text-decoration: none !important;
}
#rcl-office {background:none !important;box-shadow: none !important;}

.text_center_align {text-align:center;}
.text_right_align {text-align:right;}
.uppercase {text-transform:uppercase;}
.heavy {font-family: 'GeometriaHeavy'; margin:0;}
.pink {color:#f25e99;}
.fz36 {font-size:36px;}
.fz20 {font-size:20px; margin: 5px 0;}
.fz40 {font-size:40px;}

.ur {max-width:840px;}
.block_notfullsize form > div {width:190px;}
.block_notfullsize form > div * {width:100%;}
.block_notfullsize form > div label {font-size:16px; font-family: 'GeometriaMedium'; margin-bottom:10px; display:inline-block; text-align: center;}
.block_notfullsize form > div input, .block_notfullsize form > div select {height:35px; border-radius:4px; border:1px solid #d9d9d9; padding: 0 10px; text-align:center;}

.block_fullsize {width:100%; }
.service_block .fullsize_container {height:900px; width:100%; padding:100px 0;}
.service_block .fullsize_container .container {width:100%; height:100%; max-width:1280px; margin:0 auto; background:rgba(255,255,255,0.9);}

.fizlica .service_block .fullsize_container {background: url(../images/bg/services_fizlica.jpg);background-size: cover;}
.yurlica .service_block .fullsize_container {background: url(../images/bg/services_yurlica.jpg);background-size: cover;}

.service_block .fullsize_container .container {padding:40px;}

</style>
<script>
    function AjaxFormRequest(result_id,lc_profile,url) {

                jQuery.ajax({
                    url:     url,
                    type:     "POST",
                    dataType: "html",
                    data: jQuery("#"+lc_profile).serialize(), 
                    success: function(response) {
					
                    document.getElementById(result_id).innerHTML = response;
                },
                error: function(response) {
                document.getElementById(result_id).innerHTML = "<p>Возникла ошибка при отправке формы. Попробуйте еще раз</p>";
                }
             });

          
    }
</script>
 <div class="block_notfullsize lc_block">
		<div id="tabs">
<?php $user_info = get_userdata($user_LK);
	$usermail = $user_info->user_email;
	$userid = $user_info->id;



$link = mysqli_connect("localhost","cp26871_pkwp","Pt3xf8FM", "cp26871_pkwp") 
    or die("Ошибка " . mysqli_error($link));    
   $query ="SELECT * FROM profile where user_id='$userid'";
   $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 

	
	?>
				<ul class="tabs flex center wrap">
					<li><a href="#tabs-1">Мои данные</a></li>
					<li><a href="#tabs-2">История моих заказов</a></li>
				</ul>

				<div class="tab_space" id="tabs-1">
			
					<form class="lc_profile" method="post" action="" id="lc_profile" name="lc_profile">
						<?  
							$row = $result->fetch_array(MYSQLI_ASSOC);
							
							?>
						<div>
							<label>Фамилия</label>
							<input name="familije" id="familije" value="<?=$row['familije'];?>" type="text">
							<input name="id" style="display:none;" value="<?=$userid?>" id="id"  type="text">
						</div>
						<div>
							<label>Имя</label>
							<input name="name" id="name" value="<?=$row['name'];?>" type="text">
						</div>
						<div>
							<label>Отчество</label>
							<input name="otcestvo" id="otcestvo" value="<?=$row['otcestvo'];?>" type="text">
						</div>
						<div>
							<label>Организация/Частное лицо</label>
							<input name="org" id="org" value="<?=$row['organizacija'];?>" type="text">
						</div>
						<div>
							<label>Телефон</label>
							<input name="tel" id="tel" value="<?=$row['telefon'];?>" type="text">
						</div>
						<div>
							<label>E-mail</label>
							<input name="email" id="email" type="text" value="<?=$row['email'];?>">
						</div>
						<div>
							<label>Адрес объекта</label>
							<input name="adress" id="adress" value="<?=$row['addres'];?>" type="text">
						</div>
						<div>
						 <input id="button" type="button" class="btn" value="Сохранить изменения" onclick="AjaxFormRequest('messegeResult', 'lc_profile', '/form.php')"/>
							
						</div>
					
					</form>
					  <div id="messegeResult">  </div>
				</div>

   <div class="tab_space" id="tabs-2">
  
	<table>
						<tbody>
							<tr>
								<td class="n17">№ п/п</td>
								<td>Дата заказа</td>
								<td class="n17">Имя</td>
								<td>Заказанные услуги</td>
								<td>Цена</td>
							
								<td>&nbsp;</td>
							</tr>
							<? $querys ="SELECT * FROM zakazi where user_id='$userid' order by time desc";
   $results = mysqli_query($link, $querys); 

	?>
	
								<?  while ($rows = mysqli_fetch_assoc($results)) {?>
								
								
						<?if ($_GET['refresh'] == $rows['id']){
							$val1 = $rows['amount'];
							$amount = $rows['m2'];
							$name = $rows['name'];
							$tel = $rows['tel'];
							$time = time();
							$user = $userid;
							$service = $rows['service'];
							$month = $rows['month'];
							$nomer = $rows['id'];

			$val2 = $val1 / 100 * 10;			
			$val3 = $val1 - $val2;	

			$val4 = $val1 / 100 * 20;	
			$ht = $val1 - $val4;
			 $how = $link->query("SELECT COUNT(user_id) FROM zakazi where user_id='$userid'");
$how = mysqli_fetch_assoc($how);
$caunt =  $how['COUNT(user_id)'];


	if (time() < $rows['month'] and $caunt>=5){
		mysqli_query($link,"INSERT INTO zakazi SET 
   `id` = null,
   `amount` = '$val1',
   `m2` = '$amount',
   `name` = '$name',
   `tel` = '$tel',
   `time` = '$time',
   `user_id` = '$user',
    `service` = '$service',
    `skidka` = '',
    `month` = '$month',
    `skidka2` = '$val4'
   ");
   
   if(!empty($row['email'])){
	  $to2 = $row['email']; 
   }
   
   
  $to = "Al@smartsolutions.today";
$from = 'Al@smartsolutions.today';
$subject = 'Заказ No.'.$nomer;
$message = 'Имя: '.$name.'<br>Телефон: '.$tel.'<br>Метраж: '.$amount.' cm2<br>Сумма: '.$ht.'руб.  <br>Услуга: '.$service.'';
$headers = "Content-type: text/html; charset=UTF-8 \r\n";
$headers .= "From: <Al@smartsolutions.today>\r\n";
  if(!empty($row['email'])){
	  $result = mail($to2, $subject, $message, $headers); 
  }
$result = mail($to, $subject, $message, $headers); 
   
	}else{
		
mysqli_query($link,"INSERT INTO zakazi SET 
   `id` = null,
   `amount` = '$val1',
   `m2` = '$amount',
   `name` = '$name',
   `tel` = '$tel',
   `time` = '$time',
   `user_id` = '$user',
    `service` = '$service',
    `skidka` = '$val2',
    `month` = '$month',
    `skidka2` = ''
   ");
  if (!empty($rows['skidka'])){$pro = $val3;}else if (empty($rows['skidka'])){$pro = $val1;}
     if(!empty($row['email'])){
	  $to2 = $row['email']; 
   }
 $to = "Al@smartsolutions.today";
$from = 'Al@smartsolutions.today';
$subject = 'Заказ No.'.$nomer;
$message = 'Имя: '.$name.'<br>Телефон: '.$tel.'<br>Метраж: '.$amount.' cm2<br>Сумма: '.$pro.'руб. <br>Услуга: '.$service.'';
$headers = "Content-type: text/html; charset=UTF-8 \r\n";
$headers .= "From: <Al@smartsolutions.today>\r\n";
$result = mail($to, $subject, $message, $headers);   
    if(!empty($row['email'])){
	  $result = mail($to2, $subject, $message, $headers); 
  }
	}
	

	
	
	
echo '<meta http-equiv="Refresh" content="0; url=/account/#tabs-2">';   
}		?>
							<tr>
								<td class="n17"><?=$rows['id'];?></td>
								<td><?=date("Y-m-d",$rows['time']);?></td>
								<td class="n17"><?=$rows['name'];?></td>
								<td><?=$rows['service'];?></td>
								<td><?if (!empty($rows['skidka'])){echo $rows['amount']-$rows['skidka'].' руб. (<font color="green">-10% '.$rows['skidka'].' руб. </font>)';}else if (!empty($rows['skidka2'])){echo $rows['amount']-$rows['skidka2'].' руб. (<font color="green">-20% '.$rows['skidka2'].' руб. </font>)';}else{echo $rows['amount'].' руб.';}?></td>
								<td><a href="?refresh=<?=$rows['id'];?>"><i class="fa fa-repeat"></i> повторить</a></td>
							</tr>
								<?}?>		
						</tbody>
					</table>
   </div>
    </div>
    </div>
    </div>

 
<?php get_footer(); ?>