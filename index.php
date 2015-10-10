<?php
/**
 * A simple one page contact form php script
 *
 * @version rdv contact-form 1.0
 * @author rdvaghela <rdvaghela.developer@gmail.com>
 * @link http://www.rdvaghela.com/ This is all about Rich Internet Technologies.
 * @link https://github.com/rdvaghela/rdv-contact-form/
 * @license http://opensource.org/licenses/MIT MIT License
 */
	if(isset($_REQUEST['Name']) || isset($_REQUEST['Email']) || isset($_REQUEST['Subject']) || isset($_REQUEST['Message'])) {
	   $to = "receiver@mail.com";
	   $subject = $_REQUEST['Subject'];
	   $message = 
                    "Name : ". $_REQUEST['Name']. "\n" . 
                    "Email : " . $_REQUEST['Email']. "\n".
                    "Phone : " . $_REQUEST['Phone']. "\n".
                    "Email : " . $_REQUEST['Subject']. "\n". 
                    "Message : ". $_REQUEST['Message'];
				
	   $header = "From: senderr@mail.com";
	   $retval = mail ($to,$subject,$message, $header);
	   
	   if($retval == TRUE) {
			echo 'Your message has been ';
	   }
            else {
                   echo 'Whoops something went wrong!';
            }
	}
?>
   <form method="post" action="contact.php">
        <input value="" placeholder="Name" name="Name"  type="text">
        <input value="" placeholder="Email"  name="Email"  type="text">
        <input value="" placeholder="Phone"  name="Phone"   type="text">
        <input value="" placeholder="Subject" class="" name="Subject"  type="text">
        <textarea placeholder="Message" class="" name="Message" ></textarea>
        <button  name="submit">Send</button>
    </form>

