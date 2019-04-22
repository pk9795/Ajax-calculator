<!DOCTYPE html>
<html>
<head>
	<title>Simple :Calculator</title>
	<link rel="stylesheet" type="text/css" href="css/calculator.css">
</head>
<body>


	<h1 class="result"></h1>
	<form role="form" method="post" action="" class="form-data">
		<div class="input-data">
			<h1>Calculator</h1>
			<label>No.1</label>
			<input type="text" name="n1" class="n1" value="">
			<label>No.2</label>
			<input type="text" name="n2" class="n2" value="">

			<select name="operation" class="operation">

				<option value="">--Select Operation--</option>
				<option value="add">ADD</option>
				<option value="sub">SUBTRACT</option>
				<option value="mul">MULTIPLY</option>
				<option value="div">DIVIDE</option>

			</select>

			<input type="submit" value="Submit" id="submit" class="submitbutton">
		</div>
		
	</form>

</body>

<!-- jquery common files -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.validate.min.js"></script>


<script>

	$(function () {

		 // jquery validation with ajax start

		 $(".form-data").validate({
		 	rules:{

		 		n1:{
		 			required:true,
		 			number:true,

		 		},
		 		n2:{
		 			required:true,
		 			number:true,
		 		},
		 		operation:"required",

		 	},
		 	messages:{
		 		n1:{
		 			required:"Please enter a valid number not text",
		 			number:"Please enter valid number"

		 		},
		 		n2:{
		 			required:"Please enter a valid number not text",
		 			number:"Please enter valid number"
		 		},
		 		operation:"Please select at least one",
		 	},
		 	submitHandler: function(form) {
		 		$.ajax({
		 			type: 'post',
		 			url: 'ajax-calc.php',
		 			data: $(".form-data").serialize(),
		 			success: function (data) {
		 				// console.log(data);
		 				$(".result").html(data);

		 			},
		 		});
		 		

		 	}

		 });


		});

			// });


		</script>

		</html>