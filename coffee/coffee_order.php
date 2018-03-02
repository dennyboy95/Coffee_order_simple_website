<?php include("header.php"); ?>



		<div class="container">
  		<div class="columns">
   		<div class="col-4 col-mx-auto">
   			<span class="h1">Welcome to cafe...!</span></br>
   		
   		
        <img src="http://africavoip.co/wp-content/uploads/2017/11/cafe-logo-design-logo-design-inspiration100-fresh-new-logo-designs-logos-ideas.jpg" height="300px" width="500px">
      </div>
    </div>
  </div>
  
          <!-- <label>Kindly type in your name</label>-->
      <div class="form-group">
      <div class="container">
      <div class="columns">
      <div class="col-4 col-mx-auto">
        <input type="text" name="customer_name" action="message.php" method = "post" placeholder="Enter your name">
        <input type="number" name="customer_number" action="message.php" method = "post" placeholder="Enter your number"></br>

     <label>Quantity of Sugar </label> </br>
    	<button class="btn btn-action" onclick="increment_sugar()"><i class="icon icon-plus"></i></button>
		  <input type="number" name="quantity_of_coffee" maxlength="5" id ="sugar_count" size="5" value="0">
		  <button class="btn btn-action" onclick="decrement_sugar()"><i class="icon icon-minus"></i></button></br>
    	<label>Quantity of Cream </label></br>
    	<button class="btn btn-action" onclick="increment_cream()"><i class="icon icon-plus"></i></button>
		  <input type="number" id="cream_count" name="quantity_of_coffee" maxlength="5" size="5" value="0">
		  <button class="btn btn-action" onclick="decrement_cream()"><i class="icon icon-minus"></i></button></br>
      <label>Quantity of coffee </label></br>
      <button class="btn btn-action" onclick="increment_coffee()"><i class="icon icon-plus"></i></button>
		  <input type="number" id="coffee_count" name="quantity_of_coffee" maxlength="5" size="5" value="0">
		  <button class="btn btn-action" onclick="decrement_coffee()"><i class="icon icon-minus"></i></button></br>
      <a class="btn btn-primary" onclick="total()">Check Total</a>
		<a class="btn btn-primary" href="confirmation.php">Place Order</a></br>

    <label>Hi your total is </label> 
    <input type="number" id="total_count" name="quantity_of_coffee" maxlength="5" size="5" value="0">

	</div>
  </div>
  </div>
  </div>

<script type="text/javascript">

function increment_sugar()
{
    var value = parseInt(document.getElementById('sugar_count').value, 10);
    value = isNaN(value) ? 0 : value;
    if(value<10){
        value++;
            document.getElementById('sugar_count').value = value;
    }
}
function decrement_sugar()
{
    var value = parseInt(document.getElementById('sugar_count').value, 10);
    value = isNaN(value) ? 0 : value;
    if(value>0){
        value--;
            document.getElementById('sugar_count').value = value;
    }

}

function increment_cream()
{
    var value = parseInt(document.getElementById('cream_count').value, 10);
    value = isNaN(value) ? 0 : value;
    if(value<10){
        value++;
            document.getElementById('cream_count').value = value;
    }
}
function decrement_cream()
{
    var value = parseInt(document.getElementById('cream_count').value, 10);
    value = isNaN(value) ? 0 : value;
    if(value>0){
        value--;
            document.getElementById('cream_count').value = value;
    }

}

function increment_coffee()
{
    var value = parseInt(document.getElementById('coffee_count').value, 10);
    value = isNaN(value) ? 0 : value;
    if(value<10){
        value++;
            document.getElementById('coffee_count').value = value;
    }
}
function decrement_coffee()
{
    var value = parseInt(document.getElementById('coffee_count').value, 10);
    value = isNaN(value) ? 0 : value;
    if(value>0){
        value--;
            document.getElementById('coffee_count').value = value;
    }
}


function total(){
  var coffee_price = 4
  var sugar_price = 2
  var cream_price = 1
var cream =parseInt(document.getElementById('cream_count').value);
var sugar =parseInt(document.getElementById('sugar_count').value);
var coffee =parseInt(document.getElementById('coffee_count').value);
var total= cream*cream_price + sugar*sugar_price + coffee*coffee_price;

console.log(total);


document.getElementById('total_count').value
 = total
}
</script>



