<?php
	ob_start();
		session_start();
		$username	=$_POST['username'];
		$password	=$_POST['password'];
		$_SESSION['username']= $username;
			$Open = mysql_connect("localhost","root","");
			if(!$Open){
				die("Koneksi ke engine MySQL Gagal!");
			}
		$Koneksi=mysql_select_db("azbil");
			if(!$Koneksi){
				die("Koneksi ke Database Gagal !");
			}
		$sql="SELECT*FROM tb_login where username='$username'";
		$sql=mysql_query($sql);
		$num=mysql_num_rows($sql);
		$row=mysql_fetch_array($sql);
		
		if($num==0 OR $password!=$row['password']){
?>	
		<script language="="JavaScript">
		alert('Username atau Password tidak sesuai!');
		document.location='index.php';
		</script>
		
		<?php
			$_SESSION['ERROR']='Username atau Password tidak sesuai!';
			header('Location:index.php?error=1');
			?>
			
<?php
		}
		else{
			
		$_SESSION['login']=1;
		header("Location:admin/index.php");
		}
		
		mysql_close($Open); //tutup koneksi engine MySQL//
?>
	