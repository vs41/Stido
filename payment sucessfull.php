<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Information</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</head>
<body>
    <section class="vh-100" style="background-color: #35558a;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100 text-center">
                <div class="col">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-light btn-lg" data-mdb-toggle="modal" data-mdb-target="#exampleModal">
                        <i class="fas fa-info me-2"></i> Get information
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header border-bottom-0">
                                    <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body text-start text-black p-4">
                                    <h5 class="modal-title text-uppercase mb-5" id="exampleModalLabel">Johnatan Miller</h5>
                                    <h4 class="mb-5" style="color: #35558a;">Thanks for your order</h4>
                                    <p class="mb-0" style="color: #35558a;">Payment summary</p>
                                    <hr class="mt-2 mb-4"
                                        style="height: 0; background-color: transparent; opacity: .75; border-top: 2px dashed #9e9e9e;">

                                    <div class="d-flex justify-content-between">
                                        <p class="fw-bold mb-0">Ether Chair(Qty:1)</p>
                                        <p class="text-muted mb-0">$1750.00</p>
                                    </div>

                                    <div class="d-flex justify-content-between">
                                        <p class="small mb-0">Shipping</p>
                                        <p class="small mb-0">$175.00</p>
                                    </div>

                                    <div class="d-flex justify-content-between pb-1">
                                        <p class="small">Tax</p>
                                        <p class="small">$200.00</p>
                                    </div>

                                    <div class="d-flex justify-content-between">
                                        <p class="fw-bold">Total</p>
                                        <p class="fw-bold" style="color: #35558a;">$2125.00</p>
                                    </div>

                                </div>
                                <div class="modal-footer d-flex justify-content-center border-top-0 py-4">
                                    <button type="button" class="btn btn-primary btn-lg mb-1" style="background-color: #35558a;">
                                        Track your order
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
