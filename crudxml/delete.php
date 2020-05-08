<?php
	session_start();
	$nim = $_GET['nim'];

	$MhsSI18A = simplexml_load_file('files/members.xml');

	//we're are going to create iterator to assign to each user
	$index = 0;
	$i = 0;

	foreach($MhsSI18A->mahasiswa as $mahasiswa){
		if($mahasiswa->nim == $nim){
			$index = $i;
			break;
		}
		$i++;
	}

	unset($MhsSI18A->mahasiswa[$index]);
	file_put_contents('files/members.xml', $MhsSI18A->asXML());

	$_SESSION['message'] = 'Data mahasiswa berhasil dihapus.';
	header('location: index.php');

?>