<?php
$field_firstname = $_POST['first-name'];
$field_lastname = $_POST['last-name'];
$field_email = $_POST['email'];
$field_phone = $_POST['phone'];
$field_picked_therapy = $_POST['flexRadioDefault'];
$field_tellmoreabout = $_POST['test-choose'];
$field_trip_start = $_POST['trip-start'];
$field_slot_picked = $_POST['slot'];

$mail_to = 'your-mail@gmail.com';
$subject = 'Message from a site visitor '.$field_name;

$body_message = 'From: '.$field_firstname.' '.$field_lastname."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Phone: '.$field_phone."\n";
$body_message .= 'Therapy Picked '.$field_picked_therapy."\n";
$body_message .= 'More about your concern: '.$field_tellmoreabout."\n";
$body_message .= 'Choosen Tripy Date: '.$field_trip_start."\n";
$body_message .= 'Slot Picked: '.$field_slot_picked."\n";

$headers = 'From: '.$field_email."\r\n";
$headers .= 'Reply-To: '.$field_email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) { ?>
    <script language="javascript" type="text/javascript">
        alert('Thank you for the message. We will contact you shortly.');
        window.location = 'thank-you.html';
    </script>
<?php
}
else { ?>
    <script language="javascript" type="text/javascript">
        alert('Message failed.');
        window.location = 'index.html';
    </script>
<?php
}
?>

