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
                margin-bottom: 50px!important;
                transform: translateY(-50px);
                width: 80%;
                margin: auto;
                background-color: #e8e8e8;
            }
            .cart-text {
                padding: 10px 0 0 20px;
            }
            .blue-title {
                font-size: 160%;
                color: #2a12a5;
            }
            .cart img {
                width: 100%;
                height: 130px;
            }
            .description {
                font-size: 90%;
                color: #00305B;
            }
            .view-more {
                text-align: center;
            }
            .view-more a {
                display: block;
                background-color: rgba(204, 136, 59, 1);
                width: 100%;
                padding: 10px;
                text-decoration: none;
                transition: 0.25s ease;
                color: #365576;
            }
            .view-more a:hover {
                background-color: white;
            }
            @media screen and (max-width: 992px) {
                .cart {
                    width: 100%;
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
                    <div class="row">
                        <div class="blue-title col-xs-4 cart-text">
                            INFORMATION SECURITY OF FINANCIAL ORGANIZATIONS
                        </div>
                        <div class="description col-xs-3 cart-text">
                            <p>
                                To convey the principles and approaches to ensuring information security in the financial organizations of the Republic of Kazakhstan
                            </p>
                        </div>
                        <div class="col-xs-5">
                            <img src="images/services_1.png"/>
                        </div>
                        <div class="view-more col-xs-12">
                            <a href="/information_security_of_banks.php">View More About This</a>
                        </div>
                    </div>
                </div>
                <div class="cart">
                    <div class="row">
                        <div class="blue-title col-xs-4 cart-text">
                            AUTOMATED SYSTEM IMPLEMENTATION
                        </div>
                        <div class="description col-xs-3 cart-text">
                            <p>
                                The proposed control system allows to reduce the level of complexity and risks of the project due to the simplicity and flexibility of modern automation technology.
                            </p>
                        </div>
                        <div class="col-xs-5">
                            <img src="images/services_2.png"/>
                        </div>
                        <div class="view-more col-xs-12">
                            <a href="/automated_system_implementation.php">View More About This</a>
                        </div>
                    </div>
                </div>
                <div class="cart">
                    <div class="row">
                        <div class="blue-title col-xs-4 cart-text">
                            INDUSTRIAL TRAINING SCHOOL
                        </div>
                        <div class="description col-xs-3 cart-text">
                            <p>
                                To raise the professional level of employees
                            </p>
                        </div>
                        <div class="col-xs-5">
                            <img src="images/services_3.png"/>
                        </div>
                        <div class="view-more col-xs-12">
                            <a href="/industrial_training_school.php">View More About This</a>
                        </div>
                    </div>
                </div>
                <div class="cart">
                    <div class="row">
                        <div class="blue-title col-xs-4 cart-text">
                            MATHEMATICAL MODEL OF TECHNOLOGICAL PROCESSES
                        </div>
                        <div class="description col-xs-3 cart-text">
                            <p>
                                To make the manufacturing and operation systems more efficient and productive
                            </p>
                        </div>
                        <div class="col-xs-5">
                            <img src="images/services_4.png"/>
                        </div>
                        <div class="view-more col-xs-12">
                            <a href="/mathematical_models.php">View More About This</a>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <?php
            include "footer.php";
        ?>
    </body>
</html>
