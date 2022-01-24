<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" >

    <title>Testing API</title>
  </head>
  <body>
      
    <h1>Testing API</h1>
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" ></script>
<script>
    
    function login(){
        var get_property_list="get_property_list";
        var email="divekarhemant007@gmail.com";
        var password="123";
        var mobile="";
        var customer_id="7";
        var property_id="1";
        var status=true;
        $.ajax({
		url:"api.php",
		type:"POST",
		data:{
			get_property_list:get_property_list,
			email:email,
			password:password,
			mobile:mobile,
			customer_id:customer_id,
			property_id:property_id,
			status:status,
		},
		success: function(data,status){
			console.log(data);
		}
	});
    }
login();    
</script>
  </body>
</html>