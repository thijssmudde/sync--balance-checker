<?php

/** function updateDB
*
*
*
updateDB();
*/

updateDB();

function updateDB() {
	include('database_connection.php');
	$query_addresses = "SELECT (`Syncaddress`) FROM `members`";
	$result_addresses = mysqli_query($dbc, $query_addresses);

	$i = 1;

	while (($fetch_addresses = mysqli_fetch_array($result_addresses)) != false) {
		$syncaddress = $fetch_addresses['0'];
		
		$balance = checkBalance($syncaddress);

		if ($balance < 3) {
			//remove from db. deleteMember()
			$destroy = destroyMember($syncaddress);
			//send mail to team && user
			break 1;
		}
		
		$totalcoins = getTotalSync();		
		$share = round(($balance/$totalcoins),4)*100;
		
		var_dump($syncaddress, $balance, $totalcoins, $share);

		$stmt_update_members = $dbc->stmt_init();
		$stmt_update_members->prepare("UPDATE `members` SET `Syncamount`='$balance',`Share`='$share' WHERE `Syncaddress`='$syncaddress'");
		$stmt_update_members->execute();
		$stmt_update_members->close();
		$i++;
	}
}

/** function getDB()
*
*
*
$test = getDB();
*/
function getDB() {
	include('database_connection.php');
	$query_info = "SELECT `Email`, `Syncaddress`, `Btcaddress`, `Signature`, `Enrolled`, `Syncamount`, `Share` FROM `members` ORDER BY `Syncamount` DESC";
	$result_info = mysqli_query($dbc, $query_info);

	$table = '<table class="table table-striped" align="center">
			<thead>
				<tr>
					<th>#</th>
					<th>Email</th>
					<th>Sync Address</th>
					<th>Bitcoin Address</th>
					<th>Signature</th>
					<th>Date Enrolled</th>
					<th>Sync Amount</th>
					<th>Share</th>
				</tr>
			</thead>
			<tbody>';
	$i = 1;
	$totalsync = 0;
	$api = 'https://chainz.cryptoid.info/sync/address.dws?';
	while (($fetch_info = mysqli_fetch_array($result_info)) != false) {
		$table .= '<tr>';
		$table .= "<td>".$i."</td>";
		$table .= "<td>".$fetch_info['Email']."</td>";
		$table .= "<a href='".$api.$fetch_info['Syncaddress']."' target='_blank'><td>".$fetch_info['Syncaddress']."</td></a>";
		$table .= "<td>".$fetch_info['Btcaddress']."</td>";
		$table .= "<td>".$fetch_info['Signature']."</td>";
		$table .= "<td>".$fetch_info['Enrolled']."</td>";
		$table .= "<td>".$fetch_info['Syncamount']."</td>";
		$table .= "<td>".$fetch_info['Share'].' %'."</td>";
		$table .= '</tr>';
		
		$totalsync += $fetch_info['Syncamount'];
		
		$i++;
	}

	$table .= '</tbody></table>';

	$array = array('Table' => $table, 'Users' => ($i - 1), 'Totalsync' => $totalsync);
	$summary = json_encode($array);
	return $table;
	//return $array;
}

/** function createMember()
createMember('tsmudde@hotmail.com','SX8CEmF4SajYU6fHktFzvq9rJnJUbrakHj','177LBzmJ7Rz99bYRgrEWSUA11eGbCfqZCU', 'signatures', date('Y-m-d H:i:s'));
*/

function createMember($email, $syncaddress, $btcaddress, $signature, $date) {
	include('database_connection.php');
	
	$resultsync = validateSyncAddress($syncaddress);
	$resultbtc = validateBitcoinAddress($btcaddress);

	$amountsync = checkBalance($syncaddress);
	$share = calculateShare($syncaddress);
	
	if ($resultsync = true && $resultbtc = true) {
		//Insert into database
		$stmt_insert = $dbc->stmt_init();
		$stmt_insert->prepare("INSERT INTO `members`(`Email`, `Syncaddress`, `Btcaddress`, `Signature`, `Enrolled`, `Syncamount`, `Share`) VALUES ('$email','$syncaddress','$btcaddress','$signature','$date','$amountsync','$share')");
		$stmt_insert->execute();
		$stmt_insert->close();
	}	
}

/* Function calculateShare()
** @param
* $address -> public key of sync
* $round -> number of decimals (2 is usual)

** @result
* ratio between sync in address and total sync in circulation

** @call
calculateShare('SX8CEmF4SajYU6fHktFzvq9rJnJUbrakHj');
*/
function calculateShare($address, $round = '2') {
	$amountsync = checkBalance($address);
	$totalsync = getTotalSync();
	$result = round(($amountsync / $totalsync),2);
	return $result.' %';
}

/* Function validateSyncAddress()
** @param
* $syncaddress -> public key of sync

** @result
* boolean. Either a correct public key (true) or not(false)

** @call
validateSyncAddress('SX8CEmF4SajYU6fHktFzvq9rJnJUbrakHj');
*/

function validateSyncAddress($syncaddress) {
	if (substr($syncaddress,0,1) == 'S' && strlen($syncaddress) == 34) {
		return true;
	} else {
		return false;
	}
}

/* Function validateSyncAddress()
** @param
* $btcaddress -> public key of bitcoin

** @result
* boolean. Either a correct public key (true) or not(false)

** @call
validateBitcoinAddress('177LBzmJ7Rz99bYRgrEWSUA11eGbCfqZCU');
*/

function validateBitcoinAddress($btcaddress) {
	if ((substr($btcaddress,0,1) == '1' || substr($btcaddress,0,1) == '3') && strlen($btcaddress) > 25 && strlen($btcaddress) < 35) {
		return true;
	} else {
		return false;
	}
}

/** function destroyMember()
*Destroy entry based on syncaddress.
*/
function destroyMember($syncaddress) {
	include('database_connection.php');
	$stmt_delete = $dbc->stmt_init();
	$stmt_delete->prepare("DELETE FROM `members` WHERE `Syncaddress` = '$syncaddress'");
	$stmt_delete->execute();
	$stmt_delete->close();
	return true;
}

/* Function getTotalSync()
** @param
* $round -> number of decimals (8 is usual)

** @result
* float value of the total amount of coins in circulation
* visit http://chainz.cryptoid.info/sync/api.dws for json API details

** @call
getTotalSync(4);
*/

function getTotalSync($round = 8) {
	$url = 'http://chainz.cryptoid.info/sync/api.dws?q=totalcoins';
	$json = file_get_contents($url);
	$data = json_decode($json, true);
	
	return round($data,$round);
}

/* Function checkBalance()
** @param
* $address -> string of 34 characters representing the public key
* $round -> number of decimals (8 is usual)

** @result
* float value of the current amount of coins held in the address
* visit http://chainz.cryptoid.info/sync/api.dws for json API details

** @call
checkBalance('SX8CEmF4SajYU6fHktFzvq9rJnJUbrakHj');
*/

function checkBalance($address, $round = 8) {
	$url = 'http://chainz.cryptoid.info/sync/api.dws?q=getbalance&a='.$address;
	$json = file_get_contents($url);
	$data = json_decode($json, true);
	
	return round($data,$round);
}

/* Function exportCSV:
** @param
* $list -> array with all data, columns and rows.
* $filename -> desired name of the csv file.

** @result
* csv file with $filename as name. Extension is nicely formatted.

** @call
exportCSV(array(array('aaa', 'bbb', 'ccc', 'dddd'),array('123', '456', '789'),array('"aaa"', '"bbb"')), 'test.csv');
*/

function exportCSV($list, $filename) {
	if (substr($filename, -4) == '.csv' ) {
		$file = $filename;
	} else {
		$file = $filename.'.csv';
	}
	
	$fp = fopen($file, 'w');

	foreach ($list as $fields) {
		fputcsv($fp, $fields);
	}

	fclose($fp);
	return $file.' is generated successfully.';
}

/* Function playLottery:
** @param
* $players -> array with list of players

** @result
* random players gets chosen.

** @call
playLottery(array('player1','player2','player3','player4','player5'));
*/

function playLottery($players) {
	$result = mt_rand(0, count($players) - 1);
	return $players[$result];
	
	//insert in db who won.
	//
}

/* Function generateQR:
** @param
* $qrsize -> chs: the size of the QR image you want to generate,
* $qrtext -> chl is the url-encoded string you want to change into a QR code
* $qrencoding -> choe is the (optional) encoding.

generateQR("500","www.alsikinjedot.com");
*/

function generateQR($qrsize, $qrtext, $qrencoding = "UTF-8") {
	return '<img src="https://chart.googleapis.com/chart?chs='.$qrsize.'x'.$qrsize.'&cht=qr&chl='.$qrtext.'&choe='.$qrencoding.'"/>';
}

/* Function sendMail:
** @param
* $user: name of the user to be printed on the mail,
* $email: emailaddress of the user. Mail will be send to this address
* $option: registration, forgot password (newpassword), false password (falsepassword)

** @result

** @call
sendMail('Fullhdpixel', 'tsmudde@hotmail.com', 'falsepassword');
*/

function sendMail($user, $email, $option) {
	$from = 'contact@smartcontracts.com';
	
	$headers = "From: " . strip_tags($from) . "\r\n";
	$headers .= "Reply-To: ". strip_tags($from) . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
	
	// Tackle different options
	if ($option == 'registration') {
		include ('./mail/mail_one.php');
		$subject = 'Welcome '.$user.' to smartcontracts!';

		$message = buildRegistrationMail($user);
		
	} elseif ($option == 'newpassword') {
		include ('./mail/mail_two.php');
		$subject = 'Dear '.$user.'. You requested a new password.';

		$message = buildMail($user);
		
	} elseif ($option == 'falsepassword') {
		include ('./mail/mail_three.php');
		$subject = 'Dear '.$user.'. Three login attempts failed.';

		$message = buildMail($user);
		
	} else {
		echo 'No valid option selected.';
	}
	
	if(mail($email, $subject, $message, $headers)) {
		echo "Mail sent successfully";
	} else {
		echo "Mail not sent";
	}
}