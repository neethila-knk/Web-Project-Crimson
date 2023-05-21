<!Doctype html>
<html>
    <head>
        <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
        <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
        </head>
        <body>
<?php

	if(isset($_POST['submit'])){
 
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
        $people=$_POST['people'];
        $date=$_POST['date'];
        $package=$_POST['package'];
		$msg=$_POST['msg'];

		$to='crimsonblisshotel@gmail.com';
        $from=$_POST['email'];
		$subject='Form Submission';
		$message=

        "Name :".$name."\n"
        ."Phone :".$phone."\n" 
        ."No: of Persons :".$people."\n" 
        ."Date :".$date ."\n" 
        ."Package:".$package."\n"
        ."Special Requests:"."\n".$msg;

		$headers="From: ".$email;

        $subject2="Your reservation submitted successfully! | Crimson Bliss Hotel (Kandy)";
        $message2="Dear ".$name.",\n\n". "We'll let you know about the reservation soon." ."\n\n"."Please stay in touch! Thank you!" ."\n"."Crimson Bliss Hotel | All right reserved!";
        $headers2="From: ".$to;


        $result1=mail($to, $subject, $message, $headers);
        $result2=mail($from, $subject2, $message2, $headers2);

		if($result1){
        ?>

    	<script>
        
        swal({
            title: "Successfully submitted!",
            text: "We will contact you via email shortly\n\nRedirecting in 2 seconds.",
            type: "success",
            timer: 2000,
            showConfirmButton: false
        }, function(){
        window.location.href = "https://crimsonblisshotel.tk";
        
        });
        
    	</script>
    	
    	<?php
    	
		}
		
		else{
		    ?>

    	<script>
        
        swal({
            title: "Something went wrong!",
            text: "Redirecting in 2 seconds.",
            type: "warning",
            timer: 2000,
            showConfirmButton: false
        }, function(){
        window.location.href = "https://crimsonblisshotel.tk";
        });
        
    	</script>
    	
    	<?php
 
        }
   
	}
	   
?>
</body>
</html>