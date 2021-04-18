<!DOCTYPE html>
<html lang="en">

<head>
 <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="landing page, website design" />


<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="bootstrap.min.css">
<script src="jquery.min.js"></script>
<script src="bootstrap.min.js"></script>



<style>


.section_padding {
padding: 60px 40px;
}

.imagelogo_li_remove {
list-style-type: none;
margin: 0;
 padding: 0;
}

.imagelogo_data{
 width:120px;
 height:80px;
}



  .navbar {
    letter-spacing: 1px;
    font-size: 14px;
    border-radius: 0;
    margin-bottom: 0;
   background-color:#800000;

    z-index: 9999;
    border: 0;
    font-family: comic sans ms;
//color:white;
  }



  
.navbar-toggle {
background-color:orange;
  }

.navgate {
padding:16px;color:white;

}



.navgate:hover{
 color: black;
 background-color: orange;

}


.navbar-header{
height:60px;
}

.navbar-header-collapse-color {
background:white;
}

.navgate101:hover{
background:#800000;
color:black;

}







.category_post{
background-color: #800000;
padding: 16px;
color:white;
font-size:14px;
border-radius: 15%;
border: none;
cursor: pointer;
text-align: center;
width:100%;
z-index: -999;
}
.category_post:hover {
background: black;
color:white;
}	

.access2{
border-style: dashed; border-width:4px; border-color:orange;color:white;font-size:14px;
}

.access{
border-style: solid; border-width:4px; border-color:white;color:white;font-size:14px;
}

.access:hover{
color:black;

}


</style>



 
</head>
<body>


<!-- start column nav-->


<div class="text-center">
<nav class="navbar navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
    
     

<li class="navbar-brand home_click imagelogo_li_remove" ><img class="img-rounded imagelogo_data" src="logo.png"></li>

    </div>
    <div class="collapse navbar-collapse" id="navgator">

      <ul class="nav navbar-nav navbar-right">


      </ul>

    </div>
  </div>



</nav>


    </div><br /><br /><br />

<!-- end column nav-->




<div class="right-column-all_no">


<div  class="" style=''>

<br>


<center><p class="" style='font-size:26px;color:#800000;font-family:comic sans ms;'>Balanced Meal AI (For Healthy Growth) <br></p>

<span style="font-size:20px;"><b>Powered by Clarifai Food Recognition AI</b></span></center><br>

<b> Clarifai Food Recognition AI <a target="_blank" href="https://www.clarifai.com/blog/what-food-is-this-food-recognition-technology-can-tell-you">(https://www.clarifai.com)</a></b><br>

According to Dieticians and Medical Experts, 

<b>Source</b>: <a href="https://www.takingcharge.csh.umn.edu/how-does-food-impact-health">https://www.takingcharge.csh.umn.edu/how-does-food-impact-health</a><br>
Eating the right foods will make someone healthier, look Good and will also help to prevents certain diseases like <b>Diabetes, Kwashiokor, Scuvry, Heart Diseases</b> etc.<br><br>

Consequenlty, eating the wrong food will send wrong metabolic messages to the body system thereby making someone uncomfortable and Sick.<br>
By default, Some students in my school has health challenges and their are place on diets by their Medical Doctors. This students with 
health issues needs to be careful with the kind of foods they eat to prevent their health from further deteroriation.<br><br>

In some situations, foods are served randomly in boarding schools and knowing the right food suitable for someones health becomes a problem.
To this effects, <b>Balanced Meal AI</b> powered  by <b>Clarifai Food Recognition AI</b> to the rescue.<br><br>

<b>Balanced Meal AI</b> is an Artificial Intelligence that uses analyzes the foods pictures/photos and then display all the foods products
and foods nutrients used in making that meal. From there, the students who is on Diets can then check the displayed foods nutrients and then
know if the food is good for his health or not based on the diets prescribed by his doctors.<br>




<h3>How to Run the Applications:</h3>
Just Take the picture of the Meal or Enter image URl link of the Food Photos and our app will leverage
<b>Clarifai Food Recognition AI</b> to show  all the food nutrients used in making the meals via analysis of the foody Photos.




<br><br>

<div class='col-sm-12'>
<center>




<!-- start pForm  -->


<div style=''>



<!--start form1-->

<script>

$(document).ready(function(){
$('#post_btn').click(function(){
		
var image_url = $("#image_url").val();




if(image_url==""){
alert('image_url cannot be Empty');
//return false;
}



else{

$('#loader_l2').fadeIn(400).html('<br><div style="color:white;background:navy;padding:10px;"><img src="ajax-loader.gif">&nbsp;Please Wait, Foody Image is being Analyzed...</div>');
var datasend = { image_url:image_url};	
		$.ajax({
			
			type:'POST',
			url:'food_processed.php',
			data:datasend,
                        crossDomain: true,
			cache:false,
			success:function(msg){			
$('#loader_l2').hide();
$('#result_l2').html(msg);
//setTimeout(function(){ $('#result_l2').html(''); }, 5000);				
				
			}
			
		});
		
		}
		
	})
					
});




</script>

 <div class="form-group">
              <label style="" for="">
<span class="fa fa-photo">Enter Foody Photo URL<br><br>

<b>

You Can Test the Following free Foody Image from pixabay.com or better get your own: <br>
<b style='color:green'>https://cdn.pixabay.com/photo/2018/04/13/17/12/vegetable-skewer-3317055__340.jpg<br>
https://cdn.pixabay.com/photo/2017/12/10/14/47/pizza-3010062__340.jpg <br>
</b>


</b>

</span>
</label>
              <input type="text" class="col-sm-6 form-control" id="image_url" name="image_url" ="Enter Foody Image URL ">
            </div><br>






<br>





<div class="col-sm-12 form-group">
                        <div id="loader_l2"></div>
                        <div id="result_l2"></div>
</div>


<button type="button" id="post_btn" class="post_btn category_post">Process The Foody Photos</button>
</div>







<!--end form1-->


<br><br>
</div>




</div>



<!--   end pForm  -->



</center>
</div>

</div>





</div>











<div>
  <!--end right column all-->    

   
</body>
</html>

























