<?php 

require('db.php');


$query = 'Select * from ESP';

$result = mysqli_query($conn,$query);

$post = mysqli_fetch_all($result,MYSQLI_ASSOC);

$image_location =['icons/eye-slash.svg','icons/eye.svg'];
$Status =['OFF','ON'];
$image_location_array =[];
$Status_array=[];
$Inverted_values_array=[];
$Button_array=['BUTTON1','BUTTON2','BUTTON3','BUTTON4'];

//This will decide what will be displayed on the screen when site is fired for the first time
foreach($post as $post)
{   
  #For Button 1
    if ($post['BUTTON1'] == 1)
    {
       $image_location_array[0] = $image_location[1];
       $Status_array[0]=$Status[1];
    }#ON
    else 
    {
        $image_location_array[0] = $image_location[0];
       $Status_array[0]=$Status[0];
    }
   #For Button 2 

    if($post['BUTTON2'] == 1)
    {
        $image_location_array[1] = $image_location[1];
       $Status_array[1]=$Status[1];
    }#ON

    else 
    {
        $image_location_array[1] = $image_location[0];
       $Status_array[1]=$Status[0];
    }
   #For Button 3

     if($post['BUTTON3'] == 1)
    {
        $image_location_array[2] = $image_location[1];
       $Status_array[2]=$Status[1];
    }#ON

    else
    {
        $image_location_array[2] = $image_location[0];
       $Status_array[2]=$Status[0];
    }
   #For Button 4
 
    if($post['BUTTON4'] == 1)
    {
        $image_location_array[3] = $image_location[1];
       $Status_array[3]=$Status[1];
    }#ON
   
    else
    {
        $image_location_array[3] = $image_location[0];
        $Status_array[3]=$Status[0];
    }

}

for($i=0;$i<4;$i++)
{
    if($Status_array[$i] == 'OFF')
      {
        $Inverted_values_array[] = 1;
      }

    else
      {
        $Inverted_values_array[] = 0;
      }  
}




