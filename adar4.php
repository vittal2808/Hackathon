<?php
$con=mysqli_connect('localhost','root','');
if(!$con)
{
  echo 'Not Connected';

}

if(isset($_POST['submit']))
{

    $address11=$_POST['address1'];
    echo "Guardian/Parent/Spouse Name :  ".$address11."<br/>";
     
    $address22=$_POST['address2'];
    echo "House/Bidg./Apt.  :  ".$address22."</br>";

    $address33=$_POST['address3'];
    echo "Street/Road/Lane  :   " . $address33."<br/>";

    $address44=$_POST['address4'];
    echo " Landmark   :   " .$address44."<br/>";
  
    $address55=$_POST['address5'];
    echo "Area/Locality/Sector    :  ".$address55."<br/>";

    $address66=$_POST['address6'];
    echo " Villages/Town/City    :  ".$address66."<br/>";

    $address77=$_POST['address7'];
    echo "Post Office      :  ".$address77."(PO) <br/>";

    $address88=$_POST['address8'];
    echo "District       :  ".$address88. "(DT)  <br/>";

    $address99=$_POST['address9'];
    echo "  State     :  ".$address99."<br/>";

    $address100=$_POST['address10'];
    echo "PIN CODE   :   ".$address100. "<br/>";
  }
  if(!mysqli_select_db($con,'aadhar'))
{
  echo 'DB not selected';}
  $sql="INSERT INTO  aadhar values  ('$address11','$address22','$address33','$address44','$address55','$address66','$address77','$address88','$address99','$address100')";


if(! mysqli_query($con,$sql))
{
echo 'not inserted';
}
else{
echo 'inserted';
}

echo "-----------------------------------------------------------------------------------------------------------------------------------<br/>";


echo "Guardian/Parent/Spouse Name :  ".$address11."<br/>";
echo "House/Bidg./Apt.  :  ".$address22."</br>";
echo "   Street/Road/Lane   :".$address33."<br/>"; 

function address444(string $address44, string $address55,string $address66,string $address77, string $address88){
if(strtoupper($address44) === strtoupper($address55) && strtoupper($address44) === strtoupper($address66)  && strtoupper($address44) === strtoupper($address77) && strtoupper($address44) === strtoupper($address88)){
    echo "Landmark & Area/Locality/Sector & Villages/Town/City & Post Office & District:  ".$address44."<br/>";
  }
  else if(strtoupper($address44) === strtoupper($address55) && strtoupper($address44) === strtoupper($address66) && strtoupper($address44) === strtoupper($address77)){
    echo "Landmark & Area/Locality/Sector & Villages/Town/City & Post Office:  ".$address44."<br/>";
  }
  else if(strtoupper($address44) === strtoupper($address66) && strtoupper($address44) === strtoupper($address77) && strtoupper($address44) === strtoupper($address88)){
    echo "Landmark  & Villages/Town/City & Post Office & District: ".$address44."<br/>";
  }
  else if(strtoupper($address44) === strtoupper($address55) && strtoupper($address44) === strtoupper($address77) && strtoupper($address44) === strtoupper($address88)){
    echo "Landmark  & Area/Locality/Sector & Post Office & District: ".$address44."<br/>";
  }
  else if(strtoupper($address44) === strtoupper($address55) && strtoupper($address44) === strtoupper($address66) && strtoupper($address44) === strtoupper($address88)){
    echo "Landmark  & Area/Locality/Sector & Villages/Town/City & District: ".$address44."<br/>";
  }
  else if(strtoupper($address44) === strtoupper($address55) && strtoupper($address44) === strtoupper($address66)){
    echo "Landmark  & Villages/Town/City & Post Office & District: ".$address44."<br/>";
  }
  else if(strtoupper($address44) === strtoupper($address66) && strtoupper($address44) === strtoupper($address77)){
    echo "Landmark  & Villages/Town/City & Post Office : ".$address44."<br/>";
  }
  else if(strtoupper($address44) === strtoupper($address55) && strtoupper($address44) === strtoupper($address77)){
    echo "Landmark  & Area/Locality/Sector & Post Office: ".$address44."<br/>";
  }
  else if(strtoupper($address44) === strtoupper($address77) && strtoupper($address44) === strtoupper($address88)){
    echo "Landmark  & Post Office & District: ".$address44."<br/>";
  }
  else if(strtoupper($address44) === strtoupper($address66) && strtoupper($address44) === strtoupper($address88)){
    echo "Landmark  & Villages/Town/City  & District: ".$address44."<br/>";
  }
  else if(strtoupper($address44) === strtoupper($address55) && strtoupper($address44) === strtoupper($address88)){
    echo "Landmark  & Area/Locality/Sector & Post Office : ".$address44."<br/>";
  }
  else if(strtoupper($address44) === strtoupper($address55)){
    echo "Landmark & Area/Locality/Sector :  ".$address44."<br/>";
  }
  else if(strtoupper($address44) === strtoupper($address66)){
    echo "Landmark & Villages/Town/City :  ".$address44."<br/>";
  }
  else if(strtoupper($address44) === strtoupper($address77)){
    echo "Landmark & Post Office :  ".$address44."<br/>";
  }
  else if(strtoupper($address44) === strtoupper($address88)){
    echo "Landmark & District :  ".$address44."<br/>";
  }
  else{
    echo " Landmark   :   " .$address44."<br/>";  
  }
}

function address555( string $address55,string $address66,string $address77, string $address88){
  if(strtoupper($address55) === strtoupper($address66) && strtoupper($address55) === strtoupper($address77)  && strtoupper($address55) === strtoupper($address88)){
    echo "Area/Locality/Sector & Villages/Town/City & Post Office & District:  ".$address55."<br/>";
  }
  else if(strtoupper($address55) === strtoupper($address66) && strtoupper($address55) === strtoupper($address77)){
    echo " Area/Locality/Sector & Villages/Town/City & Post Office: ".$address55."<br/>";
  }
  else if(strtoupper($address55) === strtoupper($address66) && strtoupper($address55) === strtoupper($address88)){
    echo " Area/Locality/Sector & Villages/Town/City & District: ".$address55."<br/>";
  }
  else if(strtoupper($address55) === strtoupper($address77) && strtoupper($address55) === strtoupper($address88)){
    echo " Area/Locality/Sector & Post Office & District: ".$address55."<br/>";
  }
  else if(strtoupper($address55) === strtoupper($address66)){
    echo "Area/Locality/Sector & Villages/Town/City:  ".$address55."<br/>";
  }
  else if(strtoupper($address55) === strtoupper($address77)){
    echo "Villages/Town/City & Post Office:  ".$address55."<br/>";
  }
  else if(strtoupper($address55) === strtoupper($address88)){
    echo "Post Office  & District :  ".$address55."<br/>";
  }
  else{
    echo " Area/Locality/Sector :   " .$address55."<br/>";  
  }

}

function address666(string $address66,string $address77, string $address88){
  if(strtoupper($address66) === strtoupper($address77) && strtoupper($address66) === strtoupper($address88)){
    echo "Villages/Town/City & Post Office & District: ".$address66."<br/>";
  }
  else if(strtoupper($address66) === strtoupper($address77)){
    echo "Villages/Town/City & Post Office:  ".$address66."<br/>";
  }
  else if(strtoupper($address66) === strtoupper($address88)){
    echo "Villages/Town/City  & District :  ".$address66."<br/>";
  }
  else{
    echo " Villages/Town/City:   " .$address66."<br/>";  
  }
}


function address777(string $address77, string $address88){
  if(strtoupper($address77) === strtoupper($address88)){
    echo "Post Office & District :  ".$address77."<br/>";
  }
  else{
    echo "Post Office:   " .$address77."<br/>";  
  }
}
address444($address44,$address55,$address66,$address77,$address88);

if($address44 !==$address55)
{
  address555($address55,$address66,$address77,$address88);    
}
if($address44 !==$address66 && $address55!==$address66){
  address666($address66,$address77,$address88);
}
if($address44 !==$address77 && $address55!==$address77 && $address66!==$address77){
  address777($address77,$address88);
}

if($address44 !==$address88 && $address55!==$address88 && $address66!==$address88 && $address77!==$address88){
  echo "District:   " .$address88."<br/>";
}

  echo "  State     :  ".$address99."<br/>";
  echo "PIN CODE   :   ".$address100. "<br/>";
  ?>