<?php
require_once('../admin/db_connect.php');


if(isset($_POST['id'])){
$id=$_POST['id'];
$query='select * from partner_verify where ID="'.$id.'"';
$execute=mysqli_query($conn,$query);

$result=mysqli_fetch_assoc($execute);
$id=$result['ID'];
$compname=$result['company_name'];
$comp_em=$result['company_email'];
$comp_no=$result['company_no'];
$permNum=$result['permit_no'];
$id_number=$result['id_no'];
$permit_no=$result['permit_no'];
$idtype=$result['uplidtype'];
$picpath=$result['picpath'];



$response='<form>
                <div class="form-group">
                    <label>ID Number:<b> '.$id_number.' </b></label> <br>
                     <label>ID Type:<b> '.$idtype.' </b></label> <br>
                    <label>Company Name:<b> '.$compname.' </b></label> <br>
                     <label>Company Email:<b> '.$comp_em.' </b></label> <br>
                      <label>Contact Number:<b> '.$comp_no.' </b></label> <br>
                      <label>Business Permit Number:<b> '.$permNum.' </b></label> <br>
                      
                       
                       
                         <label><img src="../partners/uploads/'.$picpath.'"width="600", height="200"  ></label>

                    </div>




            </form>';

echo $response;
}

/*if(isset($_POST['acpt'])){
$accepted=$_POST['acpt'];
//$query='select * from orders where ac_dc_stat="'.$accepted.'"';
$query='update orders set ac_dc_stat="accepted" where order_number="'.$accepted.'"';
//$execute=mysqli_query($conn,$query);

if (mysqli_query($conn, $query)){
    echo '<script>alert("success")</script>';
$response="<script>location.reload();</script>";
echo $response;
}else{

    echo '<script>alert("error");';
    $response="<script>location.reload();</script>";
echo $response;
}

$response="<script>location.reload();</script>";
//$response="<script>alert($accepted);</script>";
echo $response;
}

if(isset($_POST['decc'])){
$accepted=$_POST['decc'];
//$query='select * from orders where ac_dc_stat="'.$accepted.'"';
$query='update orders set ac_dc_stat="declined" where order_number="'.$accepted.'"';
//$execute=mysqli_query($conn,$query);
//echo'<script>alert(1);</script>';
if (mysqli_query($conn, $query)){
    echo '<script>alert("success")</script>';
$response="<script>location.reload();</script>";
echo $response;
}else{

    echo '<script>alert("error");';
    $response="<script>location.reload();</script>";
echo $response;
}

$response="<script>location.reload();</script>";
//$response="<script>alert($accepted);</script>";
echo $response;
}*/

?>