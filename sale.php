<?php
if(!$_POST){
    // echo "Error 404 NOT Found";die;
    header('location: sale.html');die;
}
#User => enter his name 
#User => enter his phone 
#$product = ['laptop' => 15000 , 'mobile' => 12000 , 'tv' => 10000 , 't-shirt'=> 250];
#$discount = ['laptop' => 0.2 , 'mobile' => 0.1 , 'tv' => 0.05 , 't-shirt'=> 0];
switch ($_POST['product']) {
    case 'Laptop':
        $price = 15000;
        $discount = 0.2;
    break;
    case 'TV':
        $price = 10000;
        $discount = 0.1;
    break;
    case 'Mobile':
        $price = 12000;
        $discount = 0.05;
    break;
    default:
        $price = 250;
        $discount = 0;
}

#$cities = ['cairo' => 0 , 'alex' => 50 , 'others' => 200];
switch ($_POST['city']) {
    case 'Cairo':
        $delivery = 0;
    break;
    case 'Alex':
        $delivery = 50;
    break;
    default:
        $delivery = 200;

}
#vat = 14%
$vat = $price * 0.14;
$vat_price = $price + $vat;


#Value_of_Discount
$discount_value = $vat_price * $discount;

#After_Of_Discount
$discount_after = $vat_price - $discount_value;

#total_price
$total_price = $discount_after + $delivery;

#Another sulotion

// switch ($_POST['product']) {
//     case 'Laptop':
//         $price1 = 15000;
//         $price_vat = 15000*14/100;
//         $total_price = $price1 + $price_vat;
//     break;
//     case 'TV':
//         $price1 = 10000;
//         $price_vat = 10000*14/100;
//         $total_price = $price1 + $price_vat;
//     break;
//     case 'Mobile':
//         $price1 = 12000;
//         $price_vat = 12000*14/100;
//         $total_price = $price1 + $price_vat;
//     break;
//     default:
//     $price1 = 250;
//         $price_vat = 250*14/100;
//         $total_price = $price1 + $price_vat;
//     break;
// }
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container">
        <div class="row">
            <div class="col-12 mt-5">
                <h1 class="text-success text-center"> Invoice</h1>
            </div>
            <div class="col-4 offset-4">
                <ul class="alert alert-success">
                    <li>Name: <?= $_POST['name']; ?></li>
                    <li>Phone: <?= $_POST['phone']; ?></li>
                    <li>City: <?= $_POST['city'] ?></li>
                    <li>Delivery Tax: <?= $delivery; ?><b> EGP</b></li>
                    <li>Product: <?= $_POST['product']; ?></li>
                    <li>Price: <?= $price; ?><b> EGP</b></li>
                    <li>Vat: <?= $vat; ?><b> EGP</b></li>
                    <li>Price After Vat: <?= $vat_price; ?><b> EGB</b></li>
                    <li>Discount percentage: <?= $discount * 100; ?><b> %</b></li>
                    <li>Discount Value: <?= $discount_value; ?><b> EGB</b></li>
                    <li>Price After Discount: <?= $discount_after ?><b> EGB</b></li>
                    <li>Total Price: <?= $total_price ?><b> EGB</b></li>
                </ul>
            </div>
        </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
