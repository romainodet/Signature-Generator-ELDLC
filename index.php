<!doctype html><html lang="fr"><head>	<meta charset="utf-8">	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">	<meta name="description" content="Génerateur de signature l'École LDLC">	<meta name="author" content="Romain ODET">	<meta name="generator" content="PHPSTORM">	<title>Generateur de signatures l'École ldlc</title>	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"	      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">	<link rel="apple-touch-icon-precomposed" sizes="57x57"	      href="https://www.lecole-ldlc.com/wp-content/themes/ldlc/images/apple-touch-icon-57x57.png"/>	<link rel="apple-touch-icon-precomposed" sizes="114x114"	      href="https://www.lecole-ldlc.com/wp-content/themes/ldlc/images/apple-touch-icon-114x114.png"/>	<link rel="apple-touch-icon-precomposed" sizes="72x72"	      href="https://www.lecole-ldlc.com/wp-content/themes/ldlc/images/apple-touch-icon-72x72.png"/>	<link rel="apple-touch-icon-precomposed" sizes="144x144"	      href="https://www.lecole-ldlc.com/wp-content/themes/ldlc/images/apple-touch-icon-144x144.png"/>	<link rel="apple-touch-icon-precomposed" sizes="120x120"	      href="https://www.lecole-ldlc.com/wp-content/themes/ldlc/images/apple-touch-icon-120x120.png"/>	<link rel="apple-touch-icon-precomposed" sizes="152x152"	      href="https://www.lecole-ldlc.com/wp-content/themes/ldlc/images/apple-touch-icon-152x152.png"/>	<link rel="icon" type="image/png" href="https://www.lecole-ldlc.com/wp-content/themes/ldlc/images/favicon-32x32.png"	      sizes="32x32"/>	<link rel="icon" type="image/png" href="https://www.lecole-ldlc.com/wp-content/themes/ldlc/images/favicon-16x16.png"	      sizes="16x16"/>	<meta name="application-name" content="L'École LDLC | La révolution numérique est en marche !"/>	<meta name="msapplication-TileColor" content="#FFFFFF"/>	<meta name="msapplication-TileImage" content="/mstile-144x144.png"/>	<style>		.bd-placeholder-img {			font-size: 1.125rem;			text-anchor: middle;			-webkit-user-select: none;			-moz-user-select: none;			-ms-user-select: none;			user-select: none;		}		@media (min-width: 768px) {			.bd-placeholder-img-lg {				font-size: 3.5rem;			}		}	</style>	<!-- Custom styles for this template -->	<link href="cover.css" rel="stylesheet">	<script>        function copyToClipboard(element) {            var $temp = $("<input>");            $("body").append($temp);            $temp.val($(element).text()).select();            document.execCommand("copy");            $temp.remove();        }        function displayBlock(element) {            if (document.getElementById(element).style.display == "none") {                document.getElementById(element).style.display = "block";            } else {                document.getElementById(element).style.display = "none";            }        }	</script></head><body class="text-center"><div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">	<header class="masthead mb-auto">		<div class="inner">			<h3 class="masthead-brand">Signatures l'École LDLC</h3>			<nav class="nav nav-masthead justify-content-center">				<a class="nav-link active" href="#">Accueil</a>				<a class="nav-link" href="https://intranet.lecole-ldlc.com" target="_blank">Intra</a>				<a class="nav-link" href="https://mail.lecole-ldlc.com" target="_blank">Mail</a>			</nav>		</div>	</header>	<main role="main" class="inner cover" style="margin-top: 1em;">		Les champs indiqués par <span class="red">*</span> sont obligatoires.		<form method="POST">			<div class="form-group">				<label for="prenom">Prénom <span class="red"><span class="red">*</span></span></label>				<input required type="text" class="form-control" id="prenom" name="prenom"				       placeholder="Votre prénom...">			</div>			<div class="form-group">				<label for="nom">Nom <span class="red">*</span></label>				<input required type="text" class="form-control" id="nom" name="nom" placeholder="Votre nom...">			</div>			<div class="form-group">				<label for="fonction">Fonction <span class="red">*</span></label>				<select required class="form-control" id="fonction" name="formrole">					<option>ÉTUDIANTE EN PREMIÈRE ANNÉE</option>					<option>ÉTUDIANTE EN DEUXIÈME ANNÉE</option>					<option>ÉTUDIANTE EN TROISIÈME ANNÉE</option>					<option disabled>-------------------------</option>					<option>ÉTUDIANT EN PREMIÈRE ANNÉE</option>					<option>ÉTUDIANT EN DEUXIÈME ANNÉE</option>					<option>ÉTUDIANT EN TROISIÈME ANNÉE</option>					<option disabled>-------------------------</option>					<option>RESPONSABLE PÉDAGOGIQUE</option>				</select>			</div>			<div class="form-group">				<label for="email">Adresse mail <span class="red">*</span></label>				<input required type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp"				       placeholder="Votre email @lecole-ldlc.com">			</div>			<div class="form-group">				<label for="tel-bureau">Téléphone Bureau</label>				<input type="tel" class="form-control" id="tel-bureau" name="tel-bureau"				       aria-describedby="Téléphone bureau"				       placeholder="04274660??">			</div>			<div class="form-group">				<label for="tel-mobile">Téléphone Mobile <span class="red">*</span></label>				<input required type="tel" class="form-control" id="tel-mobile" name="tel-mobile"				       aria-describedby="Téléphone mobile"				       placeholder="06274660??">			</div>			<button type="submit" class="btn btn-primary" name="submit">C'est parti !</button>		</form>		<!-- The button used to copy the text -->		<?php			$error = "";			if (isset($_POST["submit"])) {				echo('<br><br>		<a href="tuto.html" target="_blank"><h2>Le tuto pour installer est ici</h2></a>		<button onclick="copyToClipboard(\'#masignature\')" class="btn btn-success">Copier ma signature</button>		<button onclick="displayBlock(\'masignature\')" class="btn btn-info">Voir le code</button>		<br><br><br>');				$prenom = ucfirst($_POST["prenom"]);				$nom = strtoupper($_POST["nom"]);				$email = $_POST["email"];				$role = $_POST["formrole"];				if (empty($_POST["tel-bureau"]) == false) {					$telbureau = chunk_split($_POST["tel-bureau"], 2, ' ');				} else {					$telbureau = "";				}				if (empty($_POST["tel-mobile"]) == false) {					$telmobile = chunk_split($_POST["tel-mobile"], 2, ' ');				} else {					$telmobile = "";				}				if ($telbureau == "" || $telbureau == " " || $telbureau == '	') {					$tel = '					<tr>					<td><span style="font-size:8pt; font-family:Arial,sans-serif; color: #9b9b9b;">Mobile: <span style="font-size:8pt; font-family:Arial,sans-serif; color:#005a95;">' . $telmobile . '</span></span></td>				</tr>					';				} elseif ($telmobile == "" || $telmobile == " " || $telmobile == '	') {					$tel = '					<tr>					<td><span style="font-size:8pt; font-family:Arial,sans-serif; color: #9b9b9b;">Tél: <span style="font-size:8pt; font-family:Arial,sans-serif; color: #005a95;">' . $telbureau . '</span></span></td>				</tr>';				} elseif ($telmobile == "" || $telmobile == " " && $telbureau == "" || $telbureau == " ") {					$tel = '				<tr>					<td><span style="font-size:8pt; font-family:Arial,sans-serif; color: #9b9b9b;">Tél: <span style="font-size:8pt; font-family:Arial,sans-serif; color: #005a95;">' . $telbureau . '</span></span></td>				</tr>				<tr>					<td><span style="font-size:8pt; font-family:Arial,sans-serif; color: #9b9b9b;">Mobile: <span style="font-size:8pt; font-family:Arial,sans-serif; color:#005a95;">' . $telmobile . '</span></span></td>				</tr>';				} else {					$tel = "";				}				$signature_html =					'<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN"><html><head><title>Email Signature</title>	<meta content="text/html; charset=utf-8"http-equiv="Content-Type"></head><body><table style="width: 480px; font-size:8pt; font-family:Arial,sans-serif; line-height:normal;" cellpadding="0" cellspacing="0">	<tbody>	<tr>		<td style="padding-top:10px; padding-bottom:12px; width:205px; vertical-align:top"valign="top">			<img border="0"alt="Logo"width="184"style="width:184px; height:auto; border:0;"src="https://mail.lecole-ldlc.com/home/audrey.leuk@lecole-ldlc.com/Public/fc5be4b1-9284-4a9d-878a-2ee76cea0cc2.jpg">		</td>		<td style="padding-top:10px; padding-bottom:12px;  width:310px; ">			<table style="line-height:normal;" cellpadding="0" cellspacing="0">				<tbody>				<tr>					<td><span style="font-size:10pt; font-family:Arial,sans-serif; font-weight: bold; color: #3d3c3f;">'. $prenom .' '. $nom .'</span>					</td>				</tr>				<tr>					<td style="padding-bottom:10px; font-size:9pt; font-family:Arial,sans-serif; color: #3d3c3f;">---------</td>				</tr>				<tr>					<td style="padding-bottom:10px; font-size:9pt; font-family:Arial,sans-serif; color: #3d3c3f;">'. $role .'</td>				</tr>				' . $tel . '				<tr>					<td>						<span style="font-size:8pt; font-family:Arial,sans-serif; color: #9b9b9b;">E-mail: </span><span style="font-size:8pt; font-family:Arial,sans-serif; color:#005a95;">{email}</span>					</td>				</tr>				<tr>					<td style=";"><span style="font-size:8pt; font-family:Arial,sans-serif; color: #9b9b9b;">GROUPE LDLC  |  2 rue des Erables - 69760 Limonest</span></td>				</tr>				</tbody>			</table>		</td>	</tr>	<tr>		<td colspan="2"style="border-top:1px solid; border-top-color:#339966; width: 480px; padding-top:12px;  font-family:Arial,sans-serif; color:#9b9b9b; text-align:justify;">🌍 : N\'imprimer cet e-mail que si n&eacute;cessaire.</td>	</tr>	</tbody></table></body></html>';				echo('<textarea rows="127" id="masignature" style="display:none;" class="form-control">');				echo(htmlspecialchars($signature_html));				echo('</textarea>');			}		?>	</main></div></body><script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"        crossorigin="anonymous"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"        crossorigin="anonymous"></script><script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"        crossorigin="anonymous"></script></html>