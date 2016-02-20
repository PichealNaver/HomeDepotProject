<html>
<head>
<title>HomeDepot</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
 $(document).ready(function()
 {
		$("#regular").hide();
		$("#pro1").hide();
    $("#pro2").hide();

		$("input[name='type']").change(function(){

		var radioValue = $("input[name='type']:checked").val();
      if(radioValue == "regular" && radioValue != "pro")
			{
					$("#regular").show();
					$("#pro1").hide();
          $("#pro2").hide();
			}
			else if(radioValue == "pro" && radioValue != "regular")
			{
					$("#pro1").show();
          $("#pro2").show();
					$("#regular").hide();
			}

		});
    });



</script>
</head>
<body>
  <div id="tab">
    <h1>HOMEDEPOT</h1>
    <h2>REGISTRATION</h2>
    <div id="container">

    <form action="form_processing.php" method="post" id="myform">
      <table>
        <tr>
          <td>UserID :</td>
          <td><input type="text" name="username" size="15"/></td>
        </tr>
        <tr>
          <td>Password :</td>
          <td><input type="password" name="password" size="15"/></td>
        </tr>

        <tr>
          <td>ReEnter Password: </td>
          <td><input type="password" name="passwordRe" size="15"/></td>
        </tr>
        <tr>
            <td><input type="radio" name="type" value="regular"/>Regular</td>
            <td><input type="radio" name="type" value="pro"/>Pro </td>
        </tr>
        <tr>
            <td>
            <p id="regular">

            </p>
            </td>
            <td></td>
        </tr>
        <tr>
          <td><p id="pro1">Jobs Category:</p></td>
            <td>
            <p id="pro2">
              <input type="checkbox" name="job1" value="101"/>PIPES
              <input type="checkbox" name="job2" value="102"/>BATHROOM
              <input type="checkbox" name="job3" value="103"/>KITCHEN
              <input type="checkbox" name="job4" value="104"/>PAINT
              <input type="checkbox" name="job4" value="105"/>ELECTRICAL
              <input type="checkbox" name="job4" value="106"/>APPLIANCES
            </p>
            </td>

        </tr>
        <tr>
          <td></td>
            <td><input type="submit" name="submit" value="Submit"/></td>
        </tr>
      </table>

      </form>
    </div>
  </div>
</body>
</html>
