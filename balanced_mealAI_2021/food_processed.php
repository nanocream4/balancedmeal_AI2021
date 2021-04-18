<?php


ini_set('max_execution_time', 300); //300 seconds = 5 minutes
// temporarly extend time limit
set_time_limit(300);

error_reporting(0);
$image_url= strip_tags($_POST['image_url']);



// Make API Call to Clarifai AI



//$image_url ='';
$image_url1 =$image_url;

$api_key = 'your-clarifai-api-key-goes-here';

$payload='
    {
      "inputs": [
  
      {
      
    "data": {
  
          "image": {
   
           "url": "'.$image_url1.'"
 
           }
  
        }
     
   }
  
    ]
 
   }';


$url1 = 'https://api.clarifai.com/v2/models/aaa03c23b3724a16a56b629203edc62c/outputs';
$ch1 = curl_init($url1);
curl_setopt($ch1, CURLOPT_POSTFIELDS, $payload);
curl_setopt($ch1, CURLOPT_HTTPHEADER, array("Authorization: Bearer $api_key", 'Content-Type:application/json'));
curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true);
$output = curl_exec($ch1);
$result=$output;
$http_status = curl_getinfo($ch1, CURLINFO_HTTP_CODE);

// catch error message before closing
if (curl_errno($ch1)) {
   // echo $error_msg = curl_error($ch1);
}

curl_close($ch1);



echo "<br><br>";

if($http_status==200){

echo "<div style='color:white;background:green;padding:10px;'>Food Analysis Successful</div>";

}
else {
echo "<div style='color:white;background:red;padding:10px;'>There is an Issue Making API Call to clarifaiAI. Please Check Internet Connections</div>";
exit();

}   

  

$json = json_decode($result, true);
$description = $json['status']['description'];
$id =   $json['outputs'][0]['id'];
$code =   $json['status']['code'];


$food_name0 =   $json['outputs'][0]['data']['concepts'][0]['name'];
$food_name1 =   $json['outputs'][0]['data']['concepts'][1]['name'];
$food_name2 =   $json['outputs'][0]['data']['concepts'][2]['name'];
$food_name3 =   $json['outputs'][0]['data']['concepts'][3]['name'];
$food_name4 =   $json['outputs'][0]['data']['concepts'][4]['name'];
$food_name5 =   $json['outputs'][0]['data']['concepts'][5]['name'];
$food_name6 =   $json['outputs'][0]['data']['concepts'][6]['name'];
$food_name7 =   $json['outputs'][0]['data']['concepts'][7]['name'];
$food_name8 =   $json['outputs'][0]['data']['concepts'][8]['name'];
$food_name9 =   $json['outputs'][0]['data']['concepts'][9]['name'];
$food_name10 =   $json['outputs'][0]['data']['concepts'][10]['name'];
$food_name11 =   $json['outputs'][0]['data']['concepts'][11]['name'];
$food_name12 =   $json['outputs'][0]['data']['concepts'][12]['name'];
$food_name13 =   $json['outputs'][0]['data']['concepts'][13]['name'];
$food_name14 =   $json['outputs'][0]['data']['concepts'][14]['name'];
$food_name15 =   $json['outputs'][0]['data']['concepts'][15]['name'];
$food_name16 =   $json['outputs'][0]['data']['concepts'][16]['name'];
$food_name17 =   $json['outputs'][0]['data']['concepts'][17]['name'];
$food_name18 =   $json['outputs'][0]['data']['concepts'][18]['name'];
$food_name19 =   $json['outputs'][0]['data']['concepts'][19]['name'];
$food_name20 =   $json['outputs'][0]['data']['concepts'][20]['name'];
$food_tags ="$food_name0, $food_name1, $food_name2, $food_name3, $food_name4, $food_name5, $food_name6, $food_name7, $food_name8, $food_name9, $food_name10, $food_name11, $food_name12, $food_name13, $food_name14, $food_name15, $food_name16, $food_name17, $food_name18, $food_name19, $food_name20";
$food_captions ='';

echo 
  "<div style='background:#c1c1c1;color:black;'>
<div>
<img class='img-rounded' src='$image_url'style='width:500px;max-width:500px;height:500px;max-height:500px;border-style: solid; border-width:3px; border-color: navy;'>
</div>

<br>



</div>

<div style='width:100%;' class='col-sm-12'></div><br>";










 echo "<br><br><div class='title_css1'><b style='color:navy;font-size:20px;'>List of Foods Nutrients in the Meals</b><br>";


$data_content="$food_tags";
$word = "tomatoes";
$mystring = $data_content;
if(strpos($mystring, $word) !== false){
echo "<b>Tomatoes</b><br>";


} 

$data_content="$food_tags";
$word = "tomato";
$mystring = $data_content;
if(strpos($mystring, $word) !== false){
echo "<b>Tomatoes</b><br>";


} 


$data_content="$food_tags";
$word = "pepper";
$mystring = $data_content;
if(strpos($mystring, $word) !== false){
echo "<b>Pepper</b><br>";


} 


$data_content="$food_captions $food_tags";
$word = "cheese";
$mystring = $data_content;
if(strpos($mystring, $word) !== false){
echo "<b>Cheese</b><br>";

} 


$data_content="$food_captions $food_tags";
$word = "meat";
$mystring = $data_content;
if(strpos($mystring, $word) !== false){
echo "<b>Meat</b><br>";

} 



$data_content="$food_captions $food_tags";
$word = "barbecue";
$mystring = $data_content;
if(strpos($mystring, $word) !== false){
echo "<b>Barbecue</b><br>";
} 




$data_content="$food_captions $food_tags";
$word = "oranges";
$mystring = $data_content;
if(strpos($mystring, $word) !== false){
echo "<b>Orange/Citrus</b>";

} 


$data_content="$food_captions $food_tags";
$word = "bananas";
$mystring = $data_content;
if(strpos($mystring, $word) !== false){
echo "<b>Banana</b><br>";
} 



$data_content="$food_captions $food_tags";
$word = "coffee";
$mystring = $data_content;
if(strpos($mystring, $word) !== false){
echo "<b>Coffee</b><br>";
} 




$data_content="$food_captions $food_tags";
$word = "caffeine";
$mystring = $data_content;
if(strpos($mystring, $word) !== false){
echo "<b>caffeine</b><br>";
} 


$data_content="$food_captions $food_tags";
$word = "vegetable";
$mystring = $data_content;
if(strpos($mystring, $word) !== false){
echo "<b>Vegetables</b><br>";

} 


$data_content="$food_captions $food_tags";
$word = "prawn";
$mystring = $data_content;
if(strpos($mystring, $word) !== false){
echo "<b>Prawn</b> <br>";

} 



$data_content="$food_captions $food_tags";
$word = "shrimp";
$mystring = $data_content;
if(strpos($mystring, $word) !== false){
echo "<b>Shrimps</b><br>";

} 





$data_content="$food_captions $food_tags";
$word = "fish";
$mystring = $data_content;
if(strpos($mystring, $word) !== false){
echo "<b>Fish</b><br>";
} 


$data_content="$food_captions $food_tags";
$word = "fruit";
$mystring = $data_content;
if(strpos($mystring, $word) !== false){
echo "<b>Fruits</b><br>";

} 



$data_content="$food_captions $food_tags";
$word = "nut";
$mystring = $data_content;
if(strpos($mystring, $word) !== false){
echo "<b>Nuts</b><br>";

} 


$data_content="$food_captions $food_tags";
$word = "pea";
$mystring = $data_content;
if(strpos($mystring, $word) !== false){
echo "<b>Peas</b><br>";

} 



$data_content="$food_captions $food_tags";
$word = "pizza";
$mystring = $data_content;
if(strpos($mystring, $word) !== false){
echo "<b>Pizza</b>";

} 



$data_content="$food_captions $food_tags";
$word = "beans";
$mystring = $data_content;
if(strpos($mystring, $word) !== false){
echo "<b>Beans/Tofu</b><br>";
} 


$data_content="$food_captions $food_tags";
$word = "bean";
$mystring = $data_content;
if(strpos($mystring, $word) !== false){
echo "<b>Beans/Tofu</b><br>";

} 


$data_content="$food_captions $food_tags";
$word = "legume";
$mystring = $data_content;
if(strpos($mystring, $word) !== false){
echo "<b>Legume</b><br>";

}


$data_content="$food_captions $food_tags";
$word = "bread";
$mystring = $data_content;
if(strpos($mystring, $word) !== false){
echo "<b>Bread</b><br>";

}


$data_content="$food_captions $food_tags";
$word = "noodles";
$mystring = $data_content;
if(strpos($mystring, $word) !== false){
echo "<b>Noodles</b><br>";

}


$data_content="$food_captions $food_tags";
$word = "chicken";
$mystring = $data_content;
if(strpos($mystring, $word) !== false){
echo "<b>Chicken</b><br>";

}



$data_content="$food_captions $food_tags";
$word = "beef";
$mystring = $data_content;
if(strpos($mystring, $word) !== false){
echo "<b>Beef</b><br>";

}


$data_content="$food_captions $food_tags";
$word = "burger";
$mystring = $data_content;
if(strpos($mystring, $word) !== false){
echo "<b>Burger</b><br>";
}



$data_content="$food_captions $food_tags";
$word = "chocolate";
$mystring = $data_content;
if(strpos($mystring, $word) !== false){
echo "<b>chocolate</b><br>";

}



$data_content="$food_captions $food_tags";
$word = "palm oil";
$mystring = $data_content;
if(strpos($mystring, $word) !== false){
echo "<b>palm oil</b><br>";

}



$data_content="$food_captions $food_tags";
$word = "olive oil";
$mystring = $data_content;
if(strpos($mystring, $word) !== false){
echo "<b>olive oil</b><br>";

}



$data_content="$food_captions $food_tags";
$word = "egg";
$mystring = $data_content;
if(strpos($mystring, $word) !== false){
echo "<b>Eggs</b><br>";

}



$data_content="$food_captions $food_tags";
$word = "eggs";
$mystring = $data_content;
if(strpos($mystring, $word) !== false){
echo "<b>Eggs</b><br>";

}



$data_content="$food_captions $food_tags";
$word = "rice";
$mystring = $data_content;
if(strpos($mystring, $word) !== false){
echo "<b>Rice</b><br>";

}



$data_content="$food_captions $food_tags";
$word = "milk";
$mystring = $data_content;
if(strpos($mystring, $word) !== false){
echo "<b>Milk</b><br>";

}



$data_content="$food_captions $food_tags";
$word = "cane sugar";
$mystring = $data_content;
if(strpos($mystring, $word) !== false){
echo "<b>Sugar Cane</b><br>";

}




$data_content="$food_captions $food_tags";
$word = "groundnut";
$mystring = $data_content;
if(strpos($mystring, $word) !== false){
echo "<b>groundnuts</b><br>";

}


$data_content="$food_captions $food_tags";
$word = "groundnuts";
$mystring = $data_content;
if(strpos($mystring, $word) !== false){
echo "<b>groundnuts</b><br>";

}



$data_content="$food_captions $food_tags";
$word = "maize";
$mystring = $data_content;
if(strpos($mystring, $word) !== false){
echo "<b>Maize</b><br>";

}



$data_content="$food_captions $food_tags";
$word = "corn";
$mystring = $data_content;
if(strpos($mystring, $word) !== false){
echo "<b>Corn</b><br>";

}


$data_content="$food_captions $food_tags";
$word = "wheat";
$mystring = $data_content;
if(strpos($mystring, $word) !== false){
echo "<b>wheat</b><br>";

}


$data_content="$food_captions $food_tags";
$word = "cassava";
$mystring = $data_content;
if(strpos($mystring, $word) !== false){
echo "<b>cassava</b><br>";

}



$data_content="$food_captions $food_tags";
$word = "soyamilk";
$mystring = $data_content;
if(strpos($mystring, $word) !== false){
echo "<b>soyamilk</b><br>";

}


$data_content="$food_captions $food_tags";
$word = "soymilk";
$mystring = $data_content;
if(strpos($mystring, $word) !== false){
echo "<b>soyamilk</b><br>";

}



$data_content="$food_captions $food_tags";
$word = "apple";
$mystring = $data_content;
if(strpos($mystring, $word) !== false){
echo "<b>Apples</b><br>";

}



$data_content="$food_captions $food_tags";
$word = "apples";
$mystring = $data_content;
if(strpos($mystring, $word) !== false){
echo "<b>Apples</b><br>";

}

$data_content="$food_captions $food_tags";
$word = "onion";
$mystring = $data_content;
if(strpos($mystring, $word) !== false){
echo "<b>Onion</b><br>";

}

$data_content="$food_captions $food_tags";
$word = "onions";
$mystring = $data_content;
if(strpos($mystring, $word) !== false){
echo "<b>Onion</b><br>";

}


$data_content="$food_captions $food_tags";
$word = "potato";
$mystring = $data_content;
if(strpos($mystring, $word) !== false){
echo "<b>potatoes</b><br>";

}



$data_content="$food_captions $food_tags";
$word = "potatoes";
$mystring = $data_content;
if(strpos($mystring, $word) !== false){
echo "<b>potatoes</b><br>";

}



$data_content="$food_captions $food_tags";
$word = "carrot";
$mystring = $data_content;
if(strpos($mystring, $word) !== false){
echo "<b>Carrots</b><br>";

}

$data_content="$food_captions $food_tags";
$word = "carrots";
$mystring = $data_content;
if(strpos($mystring, $word) !== false){
echo "<b>Carrots</b><br>";

}






echo "</div>";












?>