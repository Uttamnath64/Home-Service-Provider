<?php
require 'conn.php';
   $sql = "SELECT * FROM complain WHERE id='$_GET[id]'";
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_assoc($result);
    $sql = "SELECT * FROM provider_data WHERE id='$data[Provider_id]' ";
    $result = mysqli_query($conn, $sql);
    $data1 = mysqli_fetch_assoc($result);
    define('RAZOR_KEY_ID', $data1['key_id']);
define('RAZOR_KEY_SECRET', $data1['key_secret']);


    if (isset($_GET['delete'])) {
      delete($conn);
    }
    function delete($conn)
    {
        $sql = "DELETE FROM complain WHERE id = '$_GET[id]'";
        $result = mysqli_query($conn, $sql);
        header('location: home.php');
    }

?>

<!DOCTYPE html>
<html>
<head>
  <title>Booking | Home Service Provide</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
  <?php
  session_start();
  $nav = 3;
    include 'header.php';
  ?>
  <section style="margin-top: -50px;" class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div  class="text-center mb-20">
      <h1 class="sm:text-3xl text-2xl font-medium text-center title-font text-gray-900 mb-4">Service Status</h1>
    </div>
    <div class="flex flex-wrap lg:w-4/5 sm:mx-auto sm:mb-2 -mx-2">
      <div class="p-2 sm:w-1/2 w-full">
        <div class="bg-gray-100 rounded flex p-4 h-full items-center">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-yellow-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
            <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
            <path d="M22 4L12 14.01l-3-3"></path>
          </svg>
          <span class="title-font font-medium">Id - <?=$data['id']?></span>
        </div>
      </div>
      <div class="p-2 sm:w-1/2 w-full">
        <div class="bg-gray-100 rounded flex p-4 h-full items-center">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-yellow-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
            <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
            <path d="M22 4L12 14.01l-3-3"></path>
          </svg>
          <span class="title-font font-medium">Name - <?=$data['Name']?></span>
        </div>
      </div>
      <div class="p-2 sm:w-1/2 w-full">
        <div class="bg-gray-100 rounded flex p-4 h-full items-center">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-yellow-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
            <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
            <path d="M22 4L12 14.01l-3-3"></path>
          </svg>
          <span class="title-font font-medium">Mobile No. - <?=$data['Mobile_Number']?></span>
        </div>
      </div>
      <div class="p-2 sm:w-1/2 w-full">
        <div class="bg-gray-100 rounded flex p-4 h-full items-center">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-yellow-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
            <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
            <path d="M22 4L12 14.01l-3-3"></path>
          </svg>
          <span class="title-font font-medium">Email - <?=$data['Email']?></span>
        </div>
      </div>
      <div class="p-2 sm:w-1/2 w-full">
        <div class="bg-gray-100 rounded flex p-4 h-full items-center">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-yellow-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
            <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
            <path d="M22 4L12 14.01l-3-3"></path>
          </svg>
          <span class="title-font font-medium">Provider Name - <?=$data1['Name']?></span>
        </div>
      </div>
      <div class="p-2 sm:w-1/2 w-full">
        <div class="bg-gray-100 rounded flex p-4 h-full items-center">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-yellow-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
            <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
            <path d="M22 4L12 14.01l-3-3"></path>
          </svg>
          <span class="title-font font-medium">Service - <?=$data['Service']?></span>
        </div>
      </div>
      <div class="p-2 sm:w-1/2 w-full">
        <div class="bg-gray-100 rounded flex p-4 h-full items-center">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-yellow-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
            <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
            <path d="M22 4L12 14.01l-3-3"></path>
          </svg>
          <span class="title-font font-medium">Sub-Service - <?=$data['Sub_Service']?></span>
        </div>
      </div><div class="p-2 sm:w-1/2 w-full">
        <div class="bg-gray-100 rounded flex p-4 h-full items-center">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-yellow-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
            <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
            <path d="M22 4L12 14.01l-3-3"></path>
          </svg>
          <span class="title-font font-medium">Address - <?=$data['Address']?></span>
        </div>
      </div><div class="p-2 sm:w-1/2 w-full">
        <div class="bg-gray-100 rounded flex p-4 h-full items-center">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-yellow-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
            <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
            <path d="M22 4L12 14.01l-3-3"></path>
          </svg>
          <span class="title-font font-medium">Date - <?=$data['Date_Service']?></span>
        </div>
      </div>
      <div class="p-2 sm:w-1/2 w-full">
        <div class="bg-gray-100 rounded flex p-4 h-full items-center">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-yellow-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
            <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
            <path d="M22 4L12 14.01l-3-3"></path>
          </svg>
          <span class="title-font font-medium"><?php
if ($data['Status']==1) {
  ?> Description - <?=$data['Discription']?>

<?php } elseif ( $data['Status']==2 ) {?>
  <?php
 if ($data['price']==0) {
            ?> Description - <?=$data['Discription']?><?php }else{ ?> Price - <?=$data['price']; ?><?php }?>
  <?php } elseif ($data['Status']==3) {
    ?>Status - Complate <?php
  } else{
    ?>Status - Cancel <?php
  }
?></span>
        </div>
      </div>
    </div>
    <?php 
    if ($data['Status'] == 1 || $data['Status'] == 2) {
    if ($data['price']==0) { ?> 
<form action="#" method="get">
      <input type="text" name="id" style="display: none;" value="<?=$_GET['id']?>">
    <input type="submit" name="delete" value="Service Cancel" class="flex mx-auto mt-16 text-white bg-yellow-500 border-0 py-2 px-8 focus:outline-none hover:bg-yellow-600 rounded text-lg">
    </form>
          <?php } else { ?> 
            <button type="button" class="flex mx-auto mt-16 text-white bg-yellow-500 border-0 py-2 px-8 focus:outli ne-none hover:bg-yellow-600 rounded text-lg" onclick="$('#razor-pay-now').click()">Pay</button>

          <?php } 
        } else { ?>
          <a style="width: 100px;" href="history.php" class="flex mx-auto mt-16 text-white bg-yellow-500 border-0 py-2 px-8 focus:outline-none hover:bg-yellow-600 rounded text-lg" >Back</a>
          <?php  } ?>
    

</section>
<?php
include 'bottom.php';
?>
</body>
</html>

<form style="display: none;" name="razorpay_frm_payment" class="razorpay-frm-payment" id="razorpay-frm-payment" method="post">
<input type="hidden" name="merchant_order_id" id="merchant_order_id" value="12345"> 
<input type="hidden" name="language" value="EN"> 
<input type="hidden" name="currency" id="currency" value="INR"> 
<input type="hidden" name="surl" id="surl" value="http://localhost/hsp_web/payment-success.php?id=<?=$_GET['id']?>"> 
<input type="hidden" name="furl" id="furl" value="http://localhost/hsp_web/payment-fail.php?id=<?=$_GET['id']?>"> 
<section class="showcase">
  <div class="container">
    <div class="pb-2 mt-4 mb-2 border-bottom">
      <h2>Razorpay Payment Gateway Integration using PHP with cURL</h2>
    </div>
    <div class="row align-items-center">
       <div class="form-group col-md-6">
        <label for="inputEmail4">Amount</label>
        <input type="text" class="form-control" id="amount" name="amount" placeholder="amount" value="<?=$data['price']?>" readonly="readonly">
      </div>
      <div class="form-group col-md-6">
        <label for="inputEmail4">Full Name</label>
        <input type="text" name="billing_name" class="form-control" id="billing-name"  Placeholder="Name" value="<?=$data['Name']?>" required> 
      </div>
  </div>
    <div class="row align-items-center">
       <div class="form-group col-md-6">
        <label for="inputEmail4">Email</label>
        <input type="email" name="billing_email"class="form-control" id="billing-email" Placeholder="Email" value="<?=$data['Email']?>" required>
      </div>
      <div class="form-group col-md-6">
        <label for="inputEmail4">Phone</label>
        <input type="text" name="billing_phone" class="form-control" id="billing-phone" Placeholder="Phone" value="<?=$data['Mobile_Number']?>" required>
      </div>
  </div>
    <div class="row align-items-center">  
      <div class="form-group col-md-6">
        <label for="inputEmail4">Address</label>
         <input type="text" name="billing_address" class="form-control" Placeholder="Address" value="<?=$data['Address']?>">
      </div>
       <div class="form-group col-md-6">
        <label for="inputEmail4">Country</label>
        <input type="text" name="billing_country" class="form-control" Placeholder="Country" value="IN">
      </div>
    </div>

    <div class="row align-items-center">  
      <div class="form-group col-md-6">
        <label for="inputEmail4">State</label>
         <input type="text" name="billing_state" class="form-control" Placeholder="State" value="Gujrat"> 
      </div>
       <div class="form-group col-md-6">
        <label for="inputEmail4">Zipcode</label>
        <input type="text" name="billing_zip" class="form-control" Placeholder="Zipcode" value="123456">
      </div>
    </div>

    <div class="row">
      <div class="col">
        <button type="button" class="btn btn-success mt-4 float-right" id="razor-pay-now"><i class="fa fa-credit-card" aria-hidden="true"></i> Pay</button>
      </div>
    </div>
</div>
</section>
</form>


<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script type="text/javascript">
  jQuery(document).on('click', '#razor-pay-now', function (e) { 
    var total = (jQuery('form#razorpay-frm-payment').find('input#amount').val() * 100);
    var merchant_order_id = jQuery('form#razorpay-frm-payment').find('input#merchant_order_id').val();
    var merchant_surl_id = jQuery('form#razorpay-frm-payment').find('input#surl').val();
    var merchant_furl_id = jQuery('form#razorpay-frm-payment').find('input#furl').val();
    var card_holder_name_id = jQuery('form#razorpay-frm-payment').find('input#billing-name').val();
    var merchant_total = total;
    var merchant_amount = jQuery('form#razorpay-frm-payment').find('input#amount').val();
    var currency_code_id = jQuery('form#razorpay-frm-payment').find('input#currency').val();
    var key_id = "<?php echo RAZOR_KEY_ID; ?>";
    var store_name = 'Home Service Provider';
    var store_description = 'Payment';
    var store_logo = 'https://webhaunt.com/wp-content/uploads/2016/11/webhaunt.png';
    var email = jQuery('form#razorpay-frm-payment').find('input#billing-email').val();
    var phone = jQuery('form#razorpay-frm-payment').find('input#billing-phone').val();
    
    jQuery('.text-danger').remove();

    if(card_holder_name_id=="") {
      jQuery('input#billing-name').after('<small class="text-danger">Please enter full mame.</small>');
      return false;
    }
    if(email=="") {
      jQuery('input#billing-email').after('<small class="text-danger">Please enter valid email.</small>');
      return false;
    }
    if(phone=="") {
      jQuery('input#billing-phone').after('<small class="text-danger">Please enter valid phone.</small>');
      return false;
    }
    
    var razorpay_options = {
        key: key_id,
        amount: merchant_total,
        name: store_name,
        description: store_description,
        image: store_logo,
        netbanking: true,
        currency: currency_code_id,
        prefill: {
            name: card_holder_name_id,
            email: email,
            contact: phone
        },
        notes: {
            soolegal_order_id: merchant_order_id,
        },
        handler: function (transaction) {
            jQuery.ajax({
                url:'callback.php?id1=<?=$data1['key_id']?>&id2=<?=$data1['key_secret']?>',
                type: 'post',
                data: {razorpay_payment_id: transaction.razorpay_payment_id, merchant_order_id: merchant_order_id, merchant_surl_id: merchant_surl_id, merchant_furl_id: merchant_furl_id, card_holder_name_id: card_holder_name_id, merchant_total: merchant_total, merchant_amount: merchant_amount, currency_code_id: currency_code_id}, 
                dataType: 'json',
                success: function (res) {
                    if(res.msg){
                        alert(res.msg);
                        return false;
                    } 
                    window.location = res.redirectURL;
                }
            });
        },
        "modal": {
            "ondismiss": function () {
                // code here
            }
        }
    };
    // obj        
    var objrzpv1 = new Razorpay(razorpay_options);
    objrzpv1.open();
        e.preventDefault();
            
});
</script>


