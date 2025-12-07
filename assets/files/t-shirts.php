<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T-Shirts</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/panaflex-print.css">
</head>
<body>
    <?php include "./header.php" ?>
    <section class="sect-1">
        <div class="container">
            <div class="row content">
                <div class="col-12 col-md-6 ">
                    <div class="imag">
                        <img class="img-fluid" src="../images/t-shirts.png" alt="img">
                    </div>
                </div>
                <div class="col-12 col-md-6 detail">
                    <h2 class="h2">T-Shirts</h2>
                    <ul>
                        <li>Design Assistance Available</li>
                        <li>Choose from 100% cotton, dry-fit polyester, blends, and more based on comfort and budget.</li>
                        <li>Our in-house team helps with logo placement, color matching, and design creation.</li>
                        <li>Low Minimum Order Quantities</li>
                        <li>We cater to both small and bulk orders with competitive pricing.</li>
                        <li>Quick Turnaround</li>
                        <li>Fast production and delivery timelines to meet your event or campaign schedule.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="sect-2">
        <div class="container">
            <div class="row content">
                <div class="col-12 col-md-6">
                    <form action="" method="post" class="form">
                        <div class="row content">

                            <div class="col-12 col-sm-6">
                                <input type="text" name="name" id="name" class="name" placeholder="Your Name">
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="email" name="email" id="email" class="email" placeholder="google@gmail.com">
                            </div>
                            <div class="col-12">
                                <input type="text" name="phone" id="phone" class="phone" placeholder="+92 300 000000 0">
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="text" name="quantity" id="quantity" class="quantity" placeholder="Quantity">
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="text" name="size" id="size" class="size" placeholder="Size">
                            </div>
                            <div class="col-12">
                                <textarea name="desription" id="desription" class="desription w-100 h-100" placeholder="Product Description"></textarea>
                            </div>
                        </div>
                        <div class="col-12">
                            <input type="button" value="Get Quotation" class="quotation-btn" id="quotation-btn">
                        </div>
                    </form>                    
                </div>
            </div>
        </div>
    </section>
    <section class="rights">
        <hr>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h4>
                        ® All Rights  Reserved. <a href="https://wa.me/+923176477078">Amir Developer</a>™.
                    </h4>
                </div>
            </div>
        </div>
    </section>
</body>
</html>