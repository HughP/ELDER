<script type='text/javascript'>
function searchWordValidator(){
	return true;
}
</script>

<?php
//A page for searching of words
require_once ('formdisplayhelperfunctions.php');
$link = connectToDB();
echo "<h1>Search for a word</h1>";
require_once ('navheader.php');


//###########################MAIN LOGIC###################
if ($_REQUEST['_submit_check']){
	//We now validate server-side that the submission is correct before processing; if it is not, we show the user the form again with an error message
	if(true){
		//process the submitted data
		process_searchWord_form();
	}
	else{
		$_REQUEST['_submit_check'] = 0;
		$errorMessage = "A problem has occurred due to the data in your submission.  Please recheck and resubmit.";
		show_searchWord_form($errorMessage);
	}
		
}
else{
	// The form wasn't submitted, so display
	show_searchWord_form("");
}
//###################################END MAIN LOGIC####################################


//cleanup
// Closing connection
mysql_close($link);
?>
