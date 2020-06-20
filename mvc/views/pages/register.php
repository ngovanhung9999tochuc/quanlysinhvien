<h1 style="font:normal normal Verdana,Arial,Sans-Serif;
  color:#666;"><center>Quản Lý Bài Viết</center></h1>
   	  <table width="1020" border="1" cellspacing="1">
    	  <tr style="background-color:#C66">
    		<th width="90" scope="col">Mã Bài Viết</th>
    		<th width="101" scope="col">Tiêu Đề</th>
			<th width="90" scope="col">Danh Mục</th>
			<th width="90" scope="col">Công Khai Bài Đăng</th>
            <th width="101" scope="col">Nội Dung</th>
        	<th width="79" scope="col">Hình Ảnh</th>
            <th width="95" scope="col">Ngày Đăng</th>
        	<th width="86" scope="col">Hoạt Động</th>
  	  	</tr>
            <?php
            
            $arr=array();
            while ($row = mysqli_fetch_assoc($data["SV"])) {
                $arr[]=$row;
            } 
            ?>
            <?php
                for ($i=0; $i <count($arr) ; $i++) { 
            ?>
            <tr align="center">	      
 	            <td><?php echo $arr[$i]["id_bv"]?></td>
                <td><?php echo substr($arr[$i]["tieude"], 0, 40)."..."?></td>
		        <td><?php echo $arr[$i]["danhmuc"]?></td>
		        <td><?php echo $arr[$i]["public"]?></td>
                <td><?php echo substr($arr[$i]["noidung"], 0, 40)."..."?></td>
                <td><?php echo "<img src='".$arr[$i]["hinh"]."'height='40px' width='40px'>";?></td>
                <td><?php echo $arr[$i]["ngaydang"]?></td>
                <td><?php echo "<a style='text-decoration: none;'href=xoabv.php?id_bv=".$arr[$i]["id_bv"].">Xóa</a> ||
		         <a style='text-decoration: none;'href=suabv.php?id_bv=".$arr[$i]["id_bv"].">Sửa</a> || <a style='text-decoration: none;'href=thembv.php>Thêm</a>"?></td  
             ></tr>
      <?php } ?>
        </table>