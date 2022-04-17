<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" href=
"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="in_style.php">

	<script>
		function getEmails() {
			document.getElementById('dataDivID')
				.style.display = "block";
		}
	</script>
</head>

<body>
	<h2>List Emails from Gmail using PHP and IMAP</h2>

	<div id="btnContainer">
		<button class="btn active" onclick="getEmails()">
			<i class="fa fa-bars"></i>Click to get gmail mails
		</button>
	</div>
	<br>
    <div id="dataDivID" class="form-container" style="display:none;">
    <?php
    /* connect to gmail */
    $hostname = '{imap.gmail.com:993/imap/ssl}INBOX';
    $username = ' cnproject299@gmail.com';
    $password = 'Notneeded@234';

    /* try to connect */
    $inbox = imap_open($hostname,$username ,$password) or die('Cannot connect to Gmail: ' . imap_last_error());

    /* grab emails */
    $emails = imap_search($inbox,'ALL');

    /* if emails are returned, cycle through each... */
    if($emails) {

        /* begin output var */
        $output = '';

        /* put the newest emails on top */
        rsort($emails);

        /* for every email... */
        foreach($emails as $email_number) {

            /* get information specific to this email */
            $overview = imap_fetch_overview($inbox,$email_number,0);

              
            $output.= 'Name:  '.$overview[0]->from.'</br>';
            $output.= 'Date:  '.$overview[0]->date.'</br>';
            $output.= 'Subject:  '.$overview[0]->message_id.'</br>';
            $output.= 'Email:  '.$overview[0]->message_id.'</br>';
            


        }

        echo $output;
    } 

    /* close the connection */
    imap_close($inbox);
    ?>
    </div>
</body>

</html>