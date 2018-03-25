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
                            <li>Automated systems of management in gas and oil industry</li>
                            <li>Automated systems of managements in nuclear reactor plants</li>
                            <li>Solar and wind alternative sources of electric energy</li>
                            <li>Assessment of data centers quality services</li>
                            <li>General information systems security in industrial enterprises</li>
                            <li>Information security for financial companies</li>
                            <li>General Physics and Mathematics for gifted secondary schools childs</li>
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
