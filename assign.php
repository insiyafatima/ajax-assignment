<html>
<head>
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript">
$("document").ready(function(){
$(".js-ajax-php-json").submit(function(r){
	r.preventDefault();
var data = {
	"action": "test"
};
var abcd = $(this).serialize() + "&" + $.param(data);
console.log(abcd, $(this).serialize());
$.ajax({
type: "POST",
url: "response.php", 
data: abcd,
success: function(data) {
	//console.log(data);
$(".the-return").html(
  data
);
alert("Form submitted successfully. " );
}
});
return false;
});
});
</script>
</head>
<body>
<form  class="js-ajax-php-json" action='response.php'method="post" accept-charset="utf-8">
<input type="text" name="username" value="" placeholder="Name" />
<input type="text" name="email" value="" placeholder="Email" />
<input type="text" name="age" value="" placeholder="Age" />
<input type="submit" name="submit" value="Submit form" />
</form>
<div class="the-return">
[HTML is replaced when successful.]
</div>
</body>
</html>