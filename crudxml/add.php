<?php
	session_start();
	if(isset($_POST['add'])){
		//open xml file
		$MhsSI18A = simplexml_load_file('files/members.xml');
		$mahasiswa = $MhsSI18A->addChild('mahasiswa');
		$mahasiswa->addChild('nim', $_POST['nim']);
		$mahasiswa->addChild('nama', $_POST['nama']);
		$mahasiswa->addChild('alamat', $_POST['alamat']);
		$mahasiswa->addChild('email', $_POST['email']);
		$mahasiswa->addChild('situs', $_POST['situs']);
		file_put_contents('files/members.xml', $MhsSI18A->asXML());
		$_SESSION['message'] = 'Data mahasiswa berhasil ditambahkan';
		header('location: index.php');
	}
	else{
		$_SESSION['message'] = 'Fill up add form first';
		header('location: index.php');
	}

?>