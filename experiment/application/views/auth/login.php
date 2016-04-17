<div id="content">
<ul>
	<li>
	<div id="login" >
		<form id="form_login" name="form_login" action="<?php echo base_url()."/auth/verify"; ?>" method="post" >
				<label><?php echo lang('nom_utilisateur') ; ?></label>
				<input type="text" id = "input_login" name="input_login">
				<input type="hidden" id = "login" name="login">
				<label id="input_login-error" class="error" for="input_login"></label>
				<label><?php echo lang('password') ; ?></label>
				<input type="password" id = "input_password"  name="input_password">
				<input type="hidden" id = "password" name="password">
				<label id="input_password-error" class="error" for="input_password"></label>
				<input type="submit" value="<?php echo lang('validate');?>">
		</form>
	</div>
	</li>
</ul>
	
	<div id ="forgot">
		<a id ="forgotlnk" href="<?php echo base_url()."auth/forgot"; ?>" title="forgot_password" > <?php echo lang('forgot'); ?></a>
	</div>
	
	<div id ="message">
	</div>
</div>


<script type="text/javascript">
$(document).ready(function() {
	//test();

// 	$('#input_password').on('change', function () {
// 		var pass = $('#input_password').val();
// 		pass = $.sha1(String(pass));
// 		var hidden = $('#password').val(pass);
// 		console.log(pass);
// 		});
	
});



// function test() {
	
// 	 alert("document ready occurred!");
// }

// $.validator.addMethod(
//         "authentification",
//         function(value, element) {

//             var valid = false;
            
//          	req = {'s' : borNum};
//      	   $.ajax({
//             	'type': 'POST',
     //           'url': "<?php // echo $baseurl.'bordereau/completeData/' ?>", 
//                 'data': req,
//                 'dataType' : 'json', 
//                 'success': function(result) {
//                         if (result.hasData){
//                  	   		init_data(result);
//                         }
//                  	   valid = true;
// 						},
//                 'async': false,
//             });
//      	return valid;
//         },
        "<?php ?>"
//         );





jQuery.validator.setDefaults({
    success: "valid"
});

$("#form_login").validate({
    rules: {
    	input_login: {
            required: true,
            authentification: true,
        },
        input_password: {
           	required: true,
        },
    }

});



</script>
