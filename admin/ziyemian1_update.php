<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
  <title>子页面信息</title>
</head>
<body style="width:1024px; text-align:center; background:#F96;margin:0px 0px 0px 0px;">  
<form action="action/ziyemian1_update_do.php" method="post"  enctype="multipart/form-data">
<?   
 if($_GET["P_ID"] != "" )
 {
   require_once("../conn/Conn_DB.php");  //包含数据库链接文件  
   $pid= $_GET["P_ID"];    //获取传递的图片编号 
   $str = "select * from ziyemian_Info where P_ID=".$pid; //查询语句
   $arr = mysql_query($str);  //执行SQL语句
   $result = mysql_fetch_array($arr);  //获取查询结果 
   $parentid2 = $result['PT_Id'];  //将类别编号赋值给变量$parentid2,用于定位所属类别下拉框的选中项
?>
<div style="text-align:center;width:500px; margin-left:350px;">
<div border="1" width="100%">
  <div style=" width:500px;  height:40px;"><div  style=" font-size:26px; margin-top:20px; color:#C33;">编辑图片信息  </div></div>
  <div style=" width:500px;  height:25px;">
     <div style="float:left;"><font color="red">*</font>所属类别</div>
       <div style ="float:left; margin-left:112px;"><?php include 'select_producttype3.php';?></div>
  </div>
  <div style=" width:500px;  height:25px;">
     <div style ="float:left;"><font color="red">*</font>子页面名称：</div>
     <div style ="float:left; margin-left:100px;"><input type="text" name="txt_name"/></div>
  </div>
    <div style=" width:500px;  height:25px;">
     <div style ="float:left;"><font color="red">*</font>子页面内容：</div>
     <div style ="float:left; margin-left:100px;"><input type="text" name="txt_name1"/></div>
  </div>
  
  <div style=" width:500px;  height:25px;">
     <div style ="float:left;"><font color="red">*</font>头标签：</div>
     <div style ="float:left; margin-left:156px;"><input type="text" name="txt_name3"/></div>
  </div>
   <div style=" width:500px;  height:25px;">
     <div style ="float:left;"><font color="red">*</font>精彩看点文字1：</div>
     <div style ="float:left; margin-left:100px;"><input type="text" name="txt_name4"/></div>
  </div>   
  <div style=" width:500px;  height:25px;">
     <div style ="float:left;"><font color="red">*</font>精彩看点文字2：</div>
     <div style ="float:left; margin-left:100px;"><input type="text" name="txt_name5"/></div>
  </div>
     <div style=" width:500px;  height:25px;">

     <div style ="float:left;"><font color="red">*</font>精彩看点文字3：</div>
     <div style ="float:left; margin-left:100px;"><input type="text" name="txt_name6"/></div>
  </div>
  
    <div style=" width:500px;  height:25px;">
 
     <div style ="float:left;"><font color="red">*</font>精彩看点文字4：</div>
     <div style ="float:left; margin-left:100px;"><input type="text" name="txt_name7"/></div>
  </div>
  
   <div style=" width:500px;  height:25px;">
  
     <div style ="float:left;"><font color="red">*</font>精彩看点文字5：</div>
     <div style ="float:left; margin-left:100px;"><input type="text" name="txt_name8"/></div>
  </div>
  
   <div style=" width:500px;  height:25px;">  
     <div style ="float:left;"><font color="red">*</font>精彩看点文字6：</div>
     <div style ="float:left; margin-left:100px;"><input type="text" name="txt_name9"/></div>
  </div>
  
     <div style=" width:500px;  height:25px;">
     <div style ="float:left;"><font color="red">*</font>精彩看点文字7：</div>
     <div style ="float:left; margin-left:100px;"><input type="text" name="txt_name10"/></div>
  </div>
  
     <div style=" width:500px;  height:25px;">
     <div style ="float:left;"><font color="red">*</font>精彩看点文字8：</div>
     <div style ="float:left; margin-left:100px;"><input type="text" name="txt_name11"/></div>
  </div>
  
     <div style=" width:500px;  height:25px;">
     <div style ="float:left;"><font color="red">*</font>精彩看点文字9：</div>
     <div style ="float:left; margin-left:100px;"><input type="text" name="txt_name12"/></div>
  </div>
  
     <div style=" width:500px;  height:25px;">
     <div style ="float:left;"><font color="red">*</font>精彩看点文字10：</div>
     <div style ="float:left; margin-left:100px;"><input type="text" name="txt_name13"/></div>
  </div>
  
     <div style=" width:500px;  height:25px;">
     <div style ="float:left;"><font color="red">*</font>精彩看点文字11：</div>
     <div style ="float:left; margin-left:100px;"><input type="text" name="txt_name14"/></div>
  </div>
  
     <div style=" width:500px;  height:25px;">
     <div style ="float:left;"><font color="red">*</font>精彩看点文字12：</div>
     <div style ="float:left; margin-left:100px;"><input type="text" name="txt_name15"/></div>
  </div>
  
     <div style=" width:500px;  height:25px;">
     <div style ="float:left;"><font color="red">*</font>精彩看点文字13：</div>
     <div style ="float:left; margin-left:100px;"><input type="text" name="txt_name16"/></div>
  </div>
  
     <div style=" width:500px;  height:25px;">
     <div style ="float:left;"><font color="red">*</font>精彩看点文字14：</div>
     <div style ="float:left; margin-left:100px;"><input type="text" name="txt_name17"/></div>
  </div>
  
     <div style=" width:500px;  height:25px;">
     <div style ="float:left;"><font color="red">*</font>精彩看点文字15：</div>
     <div style ="float:left; margin-left:100px;"><input type="text" name="txt_name18"/></div>
  </div>
  
     <div style=" width:500px;  height:25px;">
     <div style ="float:left;"><font color="red">*</font>精彩看点文字16：</div>
     <div style ="float:left; margin-left:100px;"><input type="text" name="txt_name19"/></div>
  </div>
  
     <div style=" width:500px;  height:25px;">
     <div style ="float:left;"><font color="red">*</font>精彩看点文字17：</div>
     <div style ="float:left; margin-left:100px;"><input type="text" name="txt_name20"/></div>
  </div>
  
     <div style=" width:500px;  height:25px;">
     <div style ="float:left;"><font color="red">*</font>精彩看点文字18：</div>
     <div style ="float:left; margin-left:100px;"><input type="text" name="txt_name21"/></div>
  </div>
  
     <div style=" width:500px;  height:25px;">
     <div style ="float:left;"><font color="red">*</font>精彩看点文字19：</div>
     <div style ="float:left; margin-left:100px;"><input type="text" name="txt_name22"/></div>
  </div>
     <div style=" width:500px;  height:25px;">
       <div style ="float:left;"><font color="red">*</font>精彩看点文字20：</div>
     <div style ="float:left; margin-left:100px;"><input type="text" name="txt_name23"/></div>
  </div>
     <div style=" width:500px;  height:25px;">
       <div style ="float:left;"><font color="red">*</font>精彩看点文字21：</div>
     <div style ="float:left; margin-left:100px;"><input type="text" name="txt_name24"/></div>
  </div>
  
     <div style=" width:500px;  height:25px;">
       <div style ="float:left;"><font color="red">*</font>精彩看点文字22：</div>
     <div style ="float:left; margin-left:100px;"><input type="text" name="txt_name25"/></div>
  </div>
  
     <div style=" width:500px;  height:25px;">
       <div style ="float:left;"><font color="red">*</font>精彩看点文字23：</div>
     <div style ="float:left; margin-left:100px;"><input type="text" name="txt_name26"/></div>
  </div>
  
     <div style=" width:500px;  height:25px;">
       <div style ="float:left;"><font color="red">*</font>精彩看点文字24：</div>
     <div style ="float:left; margin-left:100px;"><input type="text" name="txt_name27"/></div>
  </div>
  
     <div style=" width:500px;  height:25px;">
       <div style ="float:left;"><font color="red">*</font>精彩看点文字25：</div>
     <div style ="float:left; margin-left:100px;"><input type="text" name="txt_name28"/></div>
  </div>
  
     <div style=" width:500px;  height:25px;">
       <div style ="float:left;"><font color="red">*</font>精彩看点文字26：</div>
     <div style ="float:left; margin-left:100px;"><input type="text" name="txt_name29"/></div>
  </div>
  
     <div style=" width:500px;  height:25px;">
       <div style ="float:left;"><font color="red">*</font>精彩看点文字27：</div>
     <div style ="float:left; margin-left:100px;"><input type="text" name="txt_name30"/></div>
  </div>
  
     <div style=" width:500px;  height:25px;">
       <div style ="float:left;"><font color="red">*</font>精彩看点文字28：</div>
     <div style ="float:left; margin-left:100px;"><input type="text" name="txt_name31"/></div>
  </div>
  
     <div style=" width:500px;  height:25px;">
       <div style ="float:left;"><font color="red">*</font>精彩看点文字29：</div>
     <div style ="float:left; margin-left:100px;"><input type="text" name="txt_name32"/></div>
  </div>
     <div style=" width:500px;  height:25px;">
         <div style ="float:left;"><font color="red">*</font>精彩看点文字30：</div>
     <div style ="float:left; margin-left:100px;"><input type="text" name="txt_name33"/></div>
  </div>
  
     <div style=" width:500px;  height:25px;">
       <div style ="float:left;"><font color="red">*</font>精彩看点文字31：</div>
     <div style ="float:left; margin-left:100px;"><input type="text" name="txt_name34"/></div>
  </div>
     <div style=" width:500px;  height:25px;">
         <div style ="float:left;"><font color="red">*</font>精彩看点文字32：</div>
     <div style ="float:left; margin-left:100px;"><input type="text" name="txt_name35"/></div>
  </div>
     <div style=" width:500px;  height:25px;">
           <div style ="float:left;"><font color="red">*</font>精彩看点文字33：</div>
     <div style ="float:left; margin-left:100px;"><input type="text" name="txt_name36"/></div>
  </div>
  
  

  
     <div style=" width:500px;  height:25px;">
       <div style ="float:left;"><font color="red">*</font>精彩看点文字34：</div>
     <div style ="float:left; margin-left:100px;"><input type="text" name="txt_name37"/></div>
  </div>
     <div style=" width:500px;  height:25px;">
           <div style ="float:left;"><font color="red">*</font>精彩看点文字35：</div>
     <div style ="float:left; margin-left:100px;"><input type="text" name="txt_name38"/></div>
  </div>
     <div style=" width:500px;  height:25px;">
  
         <div style ="float:left;"><font color="red">*</font>精彩看点文字36：</div>
     <div style ="float:left; margin-left:100px;"><input type="text" name="txt_name39"/></div>
  </div>
  
     <div style=" width:500px;  height:25px;">
         <div style ="float:left;"><font color="red">*</font>精彩看点文字37：</div>
     <div style ="float:left; margin-left:100px;"><input type="text" name="txt_name40"/></div>
  </div>
  
     <div style=" width:500px;  height:25px;">
         <div style ="float:left;"><font color="red">*</font>精彩看点文字38：</div>
     <div style ="float:left; margin-left:100px;"><input type="text" name="txt_name41"/></div>
  </div>
  
     <div style=" width:500px;  height:25px;">
         <div style ="float:left;"><font color="red">*</font>精彩看点文字39：</div>
     <div style ="float:left; margin-left:100px;"><input type="text" name="txt_name42"/></div>
  </div>
     <div style=" width:500px;  height:25px;">
           <div style ="float:left;"><font color="red">*</font>精彩看点文字40：</div>
     <div style ="float:left; margin-left:100px;"><input type="text" name="txt_name43"/></div>
  </div>
     <div style=" width:500px;  height:25px;">
           <div style ="float:left;"><font color="red">*</font>精彩看点文字41：</div>
     <div style ="float:left; margin-left:100px;"><input type="text" name="txt_name44"/></div>
  </div>
     <div style=" width:500px;  height:25px;">
           <div style ="float:left;"><font color="red">*</font>精彩看点文字42：</div>
     <div style ="float:left; margin-left:100px;"><input type="text" name="txt_name45"/></div>
  </div>
     <div style=" width:500px;  height:25px;">
           <div style ="float:left;"><font color="red">*</font>精彩看点文字43：</div>
     <div style ="float:left; margin-left:100px;"><input type="text" name="txt_name46"/></div>
  </div>
     <div style=" width:500px;  height:25px;">
           <div style ="float:left;"><font color="red">*</font>精彩看点文字44：</div>
     <div style ="float:left; margin-left:100px;"><input type="text" name="txt_name47"/></div>
  </div>
     <div style=" width:500px;  height:25px;">
           <div style ="float:left;"><font color="red">*</font>精彩看点文字45：</div>
     <div style ="float:left; margin-left:100px;"><input type="text" name="txt_name48"/></div>
  </div>
     <div style=" width:500px;  height:25px;">
           <div style ="float:left;"><font color="red">*</font>精彩看点文字46：</div>
     <div style ="float:left; margin-left:100px;"><input type="text" name="txt_name49"/></div>
  </div>
     <div style=" width:500px;  height:25px;">
           <div style ="float:left;"><font color="red">*</font>精彩看点文字47：</div>
     <div style ="float:left; margin-left:100px;"><input type="text" name="txt_name50"/></div>
  </div>
     <div style=" width:500px;  height:25px;">
           <div style ="float:left;"><font color="red">*</font>精彩看点文字48：</div>
     <div style ="float:left; margin-left:100px;"><input type="text" name="txt_name51"/></div>
  </div>
     <div style=" width:500px;  height:25px;">
           <div style ="float:left;"><font color="red">*</font>精彩看点文字49：</div>
     <div style ="float:left; margin-left:100px;"><input type="text" name="txt_name52"/></div>
  </div>
     <div style=" width:500px;  height:25px;">
           <div style ="float:left;"><font color="red">*</font>精彩看点文字50：</div>
     <div style ="float:left; margin-left:100px;"><input type="text" name="txt_name53"/></div>
  </div>
     <div style=" width:500px;  height:25px;">
           <div style ="float:left;"><font color="red">*</font>精彩看点文字51：</div>
     <div style ="float:left; margin-left:100px;"><input type="text" name="txt_name54"/></div>
  </div>
     <div style=" width:500px;  height:25px;">
           <div style ="float:left;"><font color="red">*</font>精彩看点文字52：</div>
     <div style ="float:left; margin-left:100px;"><input type="text" name="txt_name55"/></div>
  </div>
     <div style=" width:500px;  height:25px;">
           <div style ="float:left;"><font color="red">*</font>精彩看点文字53：</div>
     <div style ="float:left; margin-left:100px;"><input type="text" name="txt_name56"/></div>
  </div>
     <div style=" width:500px;  height:25px;">
           <div style ="float:left;"><font color="red">*</font>精彩看点文字54：</div>
     <div style ="float:left; margin-left:100px;"><input type="text" name="txt_name57"/></div>
  </div>
     <div style=" width:500px;  height:25px;">
           <div style ="float:left;"><font color="red">*</font>精彩看点文字55：</div>
     <div style ="float:left; margin-left:100px;"><input type="text" name="txt_name58"/></div>
  </div>
     <div style=" width:500px;  height:25px;">
           <div style ="float:left;"><font color="red">*</font>精彩看点文字56：</div>
     <div style ="float:left; margin-left:100px;"><input type="text" name="txt_name59"/></div>
  </div>
     <div style=" width:500px;  height:25px;">
           <div style ="float:left;"><font color="red">*</font>精彩看点文字57：</div>
     <div style ="float:left; margin-left:100px;"><input type="text" name="txt_name60"/></div>
  </div>
     <div style=" width:500px;  height:25px;">
           <div style ="float:left;"><font color="red">*</font>精彩看点文字58：</div>
     <div style ="float:left; margin-left:100px;"><input type="text" name="txt_name61"/></div>
  </div>
     <div style=" width:500px;  height:25px;">
           <div style ="float:left;"><font color="red">*</font>精彩看点文字59：</div>
     <div style ="float:left; margin-left:100px;"><input type="text" name="txt_name62"/></div>
  </div>
     <div style=" width:500px;  height:25px;">
           <div style ="float:left;"><font color="red">*</font>精彩看点文字60：</div>
     <div style ="float:left; margin-left:100px;"><input type="text" name="txt_name63"/></div>
  </div>
     <div style=" width:500px;  height:25px;">
           <div style ="float:left;"><font color="red">*</font>精彩看点文字61：</div>
     <div style ="float:left; margin-left:100px;"><input type="text" name="txt_name64"/></div>
  </div>
     <div style=" width:500px;  height:25px;">
           <div style ="float:left;"><font color="red">*</font>精彩看点文字62：</div>
     <div style ="float:left; margin-left:100px;"><input type="text" name="txt_name65"/></div>
  </div>
     <div style=" width:500px;  height:25px;">
           <div style ="float:left;"><font color="red">*</font>精彩看点文字63：</div>
     <div style ="float:left; margin-left:100px;"><input type="text" name="txt_name66"/></div>
  </div>
     <div style=" width:500px;  height:25px;">
           <div style ="float:left;"><font color="red">*</font>精彩看点文字64：</div>
     <div style ="float:left; margin-left:100px;"><input type="text" name="txt_name67"/></div>
  </div>
     <div style=" width:500px;  height:25px;">
  
           <div style ="float:left;"><font color="red">*</font>推荐阅读1：</div>
     <div style ="float:left; margin-left:100px;"><input type="text" name="txt_name68"/></div>
  </div>
     <div style=" width:500px;  height:25px;">
           <div style ="float:left;"><font color="red">*</font>推荐阅读2：</div>
     <div style ="float:left; margin-left:100px;"><input type="text" name="txt_name69"/></div>
  </div>
     <div style=" width:500px;  height:25px;">
           <div style ="float:left;"><font color="red">*</font>推荐阅读3：</div>
     <div style ="float:left; margin-left:100px;"><input type="text" name="txt_name70"/></div>
  </div>
     <div style=" width:500px;  height:25px;">
           <div style ="float:left;"><font color="red">*</font>推荐阅读4：</div>
     <div style ="float:left; margin-left:100px;"><input type="text" name="txt_name71"/></div>
  </div>
     <div style=" width:500px;  height:25px;">
           <div style ="float:left;"><font color="red">*</font>推荐阅读5：</div>
     <div style ="float:left; margin-left:100px;"><input type="text" name="txt_name72"/></div>
  </div>
     <div style=" width:500px;  height:25px;">
           <div style ="float:left;"><font color="red">*</font>推荐阅读6：</div>
     <div style ="float:left; margin-left:100px;"><input type="text" name="txt_name73"/></div>
  </div>
  
     <div style=" width:500px;  height:25px;">
           <div style ="float:left;"><font color="red">*</font>最新文章1：</div>
     <div style ="float:left; margin-left:100px;"><input type="text" name="txt_name74"/></div>
  </div>
       <div style=" width:500px;  height:25px;">
           <div style ="float:left;"><font color="red">*</font>最新文章2：</div>
     <div style ="float:left; margin-left:100px;"><input type="text" name="txt_name75"/></div>
  </div>
     <div style=" width:500px;  height:25px;">
           <div style ="float:left;"><font color="red">*</font>最新文章3：</div>
     <div style ="float:left; margin-left:100px;"><input type="text" name="txt_name76"/></div>
  </div>
     <div style=" width:500px;  height:25px;">
           <div style ="float:left;"><font color="red">*</font>最新文章4：</div>
     <div style ="float:left; margin-left:100px;"><input type="text" name="txt_name77"/></div>
  </div>
     <div style=" width:500px;  height:25px;">
           <div style ="float:left;"><font color="red">*</font>最新文章5：</div>
     <div style ="float:left; margin-left:100px;"><input type="text" name="txt_name78"/></div>
  </div>
     <div style=" width:500px;  height:25px;">
           <div style ="float:left;"><font color="red">*</font>最新文章6：</div>
     <div style ="float:left; margin-left:100px;"><input type="text" name="txt_name79"/></div>
  </div>
  
     <div style=" width:500px;  height:25px;">
     <div style ="float:left;"><font color="red">*</font>文章标题：</div>
     <div style ="float:left; margin-left:100px;"><input type="text" name="txt_name2"/></div>
  </div>
  <div  style=" width:500px;  height:25px;">
     <div style ="float:left;"><font color="red">*</font>图像图片：</div>
     <div style ="float:left; margin-left:100px;"><input type="file" name="txt_image"/></div>
  </div>
  <div style=" width:500px;  height:100px;">
     <div style="float:left; margin-top:50px;">简介：</div>
     <div style="float:left; margin-left:60px;"">
      <textarea name="txt_intro" rows="8" cols="30"><? echo $result['P_Intro'] ?></textarea>
      <img src='../<? echo $result["P_Image"];?>' width="130" height="130"/>
      <input type="hidden" name="txt_image2"  value='<? echo $result["P_Image"];?>'/>
     </div>
  </div>
  <div style=" width:500px;  height:30px;">
     <div colspan="2" align="center">
       <input type="hidden" name="txt_id" value="<? echo $result['P_ID'] ?>"/>
       <input type="submit" value="保存"/>
     </div>
  </div>
</div>
</div>
<?php 
 }
 else 
 {
   echo "<script>alert('请选择要编辑的图片信息！');window.location.href='ziyemian1_manager.php'</script>";     
 }
 ?>
</form>
</body>
</html>