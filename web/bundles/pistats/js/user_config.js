$(function() {

	$mymodal = $('header').find('#user-config-modal');
	$emailNotifyInput = $mymodal.find(".email-notify :checkbox");
	$emailInput = $mymodal.find(".email input[type=email]");
	$currentPassInput = $mymodal.find(".current-pass :password");
	$newPassInput =  $mymodal.find(".new-pass :password");
	$repeatPassInput =  $mymodal.find(".repeat-new-pass :password");
	
	populateForm();	

	function populateForm (argument) {
	   //  $.ajax({
	   //      response: "json",
	   //      url: 'user/get-user-data',
	   //      success: function(response) {
				// console.log(response);
				// $emailNotifyInput.prop('checked', true);
				// $emailInput.val("");
	   //      }
	   //  });

	}

	function getData() {
	    $.ajax({
	        response: "json",
	        url: 'get-temperatures',
	        success: onGetData
	    });
	}

	function onGetData(response) {
	    var tempsArray = getTempsArray(response.data);
	}

});