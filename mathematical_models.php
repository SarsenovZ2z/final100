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
            }
            .cart ul li {
                line-height: 2;
                font-size: 120%;
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
                        <ul>
                            <li>Shock waves in severe blasts</li>
                            <li>Heat exchange in the active core of nuclear reactors</li>
                            <li>Conditions of chemical blasts appearance</li>
                            <li>Chemical reactions management in electric breakdown conditions</li>
                            <li>Nuclear fission reaction energy  transformation in light emission</li>
                            <li>Structural elements strength assessment in supersonic aircraft motions</li>
                            <li>Structural nuclear elements  prelimenary technical design</li>
                        </ul>
                    </p>
                </div>
            </div>
        </section>
        <?php
            include "footer.php";
        ?>
    </body>
</html>
