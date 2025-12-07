<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookLet Printing</title>
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
                        <img class="img-fluid" src="../images/booklet.png" alt="img">
                    </div>
                </div>
                <div class="col-12 col-md-6 detail">
                    <h2 class="h2">BookLet Printing</h2>
                    <ul>
                        <li>High-Quality Printing for Educational & Corporate Prospectuses</li>
                        <li>Choose from standard A4, A5, or request a custom size to meet your institutional branding needs.</li>
                        <li>Perfect Binding – Ideal for thick, formal prospectuses</li>
                        <li>Saddle Stitch – Great for lightweight, cost-effective documents</li>
                        <li>Wire-O Binding – Sleek and durable for frequent use</li>
                        <li>Options to suit both rich visual presentations and budget-conscious printing.</li>
                        <li>Whether you need 50 copies or 5,000, we cater to all print runs efficiently.</li>
                        <li>Timely printing with reliable doorstep delivery to schools, colleges, offices, or exhibitions.</li>
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