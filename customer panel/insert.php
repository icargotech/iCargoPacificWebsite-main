<?php 
require_once 'config.php';

if(isset($_POST['insert']))
{
$sadd=$_POST['sadd'];
$sname=$_POST['sname'];
$snum=$_POST['snum'];
$radd=$_POST['radd'];
$rname = $_POST['rname'];
$rnum = $_POST['rnum'];
$bname = $_POST['bname'];
$bzip = $_POST['bzip'];
$btown = $_POST['btown'];
$badd = $_POST['badd'];
$bvat = $_POST['bvat'];
$bnum = $_POST['bnum'];

 $pallet = $_POST['pallet'];
 $gweight = $_POST['gweight'];
 $length = $_POST['length'];
 $width = $_POST['width'];
 $height = $_POST['height'];
 $weight = $_POST['weight'];
 $details = $_POST['details'];
 $value = $_POST['value'];
  $cargo = $_POST['cargo'];
  $services = $_POST['services'];
  $details = $_POST['details'];
$image = $_POST['image'];
$vehicle = $_POST['vehicle'];

 $oras = $_POST['oras'];
 $cname = $_POST['cname'];
  $cemail = $_POST['cemail'];
   $cnum = $_POST['cnum'];
 $cnote = $_POST['cnote'];
  $vehicle = $_POST['vehicle'];
// echo $sname.$sadd;


$sql = "INSERT INTO billing1 set sender = '$sname', sender_address='$sadd', sender_no='$snum', recipient='$rname', recipient_address= '$radd', recipient_no = '$rnum',  payer= '$bname', payer_zip = '$bzip', payer_town = '$btown', payer_address = '$badd', payer_vat = '$bvat', payer_number = '$bnum'";

 $sqll = "INSERT INTO cargo_info set pallet = '$pallet', g_weight= '$gweight', length='$length', width='$width', height='$height', weight='$weight',value='$value',cargo_type='$cargo',service = '$services', details = '$details',image = '$image', vehicle = '$vehicle' ";
 // details='$details', value='$value'

 $sqlll = "INSERT INTO pickup set date_time = '$oras', name='$cname', email='$cemail', notes='$cnote' ";
 // details='$details', value='$value'

$result = mysqli_query($con,$sql);
$result1 = mysqli_query($con,$sqll);
$result2 = mysqli_query($con,$sqlll);


if($result&&$result1&&$result2)
{
    header("Location: Details.php?success= Updated successfully");
}

else
{
    header("Location: Details.php?error= Error Occur");
}
}

else
{
    echo "May mali talaga";
}




 ?>