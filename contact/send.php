<?php

if (isset($_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['message']))
	{
		$to = 'jph33600@gmail.com';
		$subject = $_POST['sujet'];
		$headers = 'From: ' . $_POST['prenom'] . ' ' . $_POST['nom'] . "\r\n" . 
				'Reply-To: ' . $_POST['email'];
		$sent_success = mail($to, $subject, $_POST['message'], $headers);
		if ($sent_success)
			{
				echo "Message envoyé avec succès :-)";
			}
		else
			{
				echo "Une erreur est survenue, veuillez essayer à nouveau... :-(";
			}

	}