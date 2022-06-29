<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/css/User/HomePage.css">
    <title>Sign up</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="logo-container">
                <div class="co-op-logo mr-2 ml-2"></div>
                <span class="logo"><strong>CO-OPERATIVE BANK</strong></span>
                <a href="<?php echo base_url('showSignInPage/'); ?>" class="sign-in btn btn-success btn-md btn-block">
                    Log Out </a>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-3 left-content" style="text-align: center; border-top-right-radius: 5%; margin-top:7%; display:block;">
                <div class="row">
                    <div class="col-md-2"> <i class="bi bi-wallet2"></i> </div>
                    <div class="col-md-10"> <a href="<?= base_url("user_DepWithPage/") ?>" style="text-decoration: none; color:white;">Deposits and Withdawals </a> </div>
                </div>
                <div class="row">
                    <div class="col-md-2"> <i class="bi bi-clock-history"></i> </div>
                    <div class="col-md-10"> <a href="<?= base_url("user_TransHistoryPage/") ?>" style="text-decoration: none; color:white;"> Transactions History </a> </div>
                </div>
                <div class="row">
                    <div class="col-md-2"> <i class="bi bi-arrow-counterclockwise"></i> </div>
                    <div class="col-md-10"> <a href="<?= base_url("user_ReversalsPage/") ?>" style="text-decoration: none; color:white;"> Reversals </a> </div>
                </div>
                <div class="row">
                    <div class="col-md-2"> <i class="bi bi-box-arrow-right"></i> </div>
                    <div class="col-md-10">
                        <button type="button" class="" data-bs-toggle="modal" data-bs-target="#modelId" style="text-decoration: none; background-color:#021C03; border:none; color:white;">
                          Log out
                        </button>
                        <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" style="color:black;"> Would you like to rate us?</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form action="<?= base_url("user_logout/") ?>" method="POST">
                                    <div class="modal-body">
                                        <div class="form-floating mb-3">
                                            <input type="range" class="form-control" id="rating" name="rating" min="1" max="5" style="color:white;">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                            <a href="<?= base_url("showWelcomePage/") ?>" style="text-decoration: none;color:white;"> No </a>
                                        </button>
                                        <button type="submit" class="btn btn-primary">Rate Us</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-9 right-content" style="display: inline;">
                <div class="row" style="padding: 3%;"> <span style="text-align: right; font-size:24px; color: #021C03;">☀️ Welcome, <em> <?= session()->get('userName') ?> </em></span>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="card" style="padding: 3%;">
                            <div class="card-header" style="background-color: #021C03; color:white;">Current Balance
                            </div>
                            <div class="card-body" style="margin-bottom: 3%;">
                                <h4 class="card-title" style="font-size: 5em;"> $
                                    <?= session()->get('amount') ?>
                                </h4>
                            </div>
                            <div class="card-footer" style="padding-top: 7%;">
                                Client Id :
                                <?= session()->get('userId') ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="card" style="padding: 3%;">
                            <div class="card-header" style="background-color: #021C03; color:white;">Debit Card
                            </div>
                            <div class="card-body">
                                <img src="/Images/General/debit.jpg" alt="Debit Card" height="30%" width="50%">
                            </div>
                            <div class="card-footer">
                                Card Number : <?= session()->get('cardNumber') ?>
                            </div>
                        </div>
                    </div>
                </div> <br>
                <div class="row">
                    <div class="col-sm-12 col-md-6" style="text-align: left;">
                        <div class="card" style="padding: 5%;">
                            <div class="card-header" style="background-color: #021C03; color:white;">More
                                information</div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        Number of deposits
                                    </div>
                                    <div class="col-md-6">
                                        Number of widthdrawals
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        Average number of deposits
                                    </div>
                                    <div class="col-md-6">
                                        Average number of widthdrawals
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="card" style="padding: 5%;">
                            <div class="card-header" style="background-color: #021C03; color:white;">Notifications
                            </div>
                            <div class="card-body" style="overflow-y: scroll; height:8em;">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>