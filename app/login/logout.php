<?php

	//logout.php
	session_start();
	session_destroy();
	session_start();
	$_SESSION['msg_log'] = "<script>	Swal.fire({
						 title: 'Sessão Encerrada!',
										 type: 'info',
										 timer: 5000});</script>";
	header('location:../../index.php');

?>
