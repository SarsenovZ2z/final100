<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">
        <title>HOME PAGE</title>
        <style>
            .cart {
                padding: 10px 0 0 20px;
                width: 80%;
                margin: auto;
                background-color: white;
            }

            .cart h1 {
                font-weight: bold;
                text-align: center;
                padding-top: 15px;
            }
            .cart p span:first-of-type {
                text-decoration: underline;
            }
            .cart p {
                font-size: 110%;
                padding: 20px 40px;
                line-height: 2;
                color: #00305B;
            }

            @media screen and (max-width: 992px) {
                .cart {
                    width: 100%;
                }
            }

            @media screen and (min-width: 768px) {
                .cart {
                    transform: translateY(-100px);
                }
            }

        </style>
    </head>
    <body>
        <?php
            include "header.php";
        ?>
        <section>
            <div class="container">
                <div class="cart">
                    <h1>
                        General Information
                    </h1>
                    <p>
                        <span>Goal:</span> To convey the principles and approaches of  ensuring information security in the financial organizations , regulate and create methodological documents of  executive authorities , to help in mastering practical techniques for building an effective information security system based on the world wide experience of implemention  reliable the information security.
                    </p>
                </div>
            </div>
        </section>
        <?php
            include "footer.php";
        ?>
    </body>
</html>
