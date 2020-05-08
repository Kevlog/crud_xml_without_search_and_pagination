<?php
	session_start();
	if(isset($_POST['edit'])){
		$MhsSI18A = simplexml_load_file('files/members.xml');
		foreach($MhsSI18A->mahasiswa as $mahasiswa){
			if($mahasiswa->nim == $_POST['nim']){
				$mahasiswa->nama = $_POST['nama'];
				$mahasiswa->alamat = $_POST['alamat'];
				$mahasiswa->email = $_POST['email'];
				$mahasiswa->situs = $_POST['situs'];
				break;
			}
		}

		file_put_contents('files/members.xml', $MhsSI18A->asXML());
		$_SESSION['message'] = 'Data mahasiswa berhasil diubah';
		header('location: index.php');
	}
	else{
		$_SESSION['message'] = 'Select member to edit first';
		header('location: index.php');
	}
?>