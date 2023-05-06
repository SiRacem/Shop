
<!DOCTYPE html>
<html lang="en"
    dir="ltr">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no"/>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="2LXi5gVVzpWrmvEo2UY02lbDstSQOzqKrUZjqxF6">

    <title>Orders</title>

    <!-- [Icons] -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css"/>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/solid.css"/>
    <!-- [Google Fonts] -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Cairo&display=swap" rel="stylesheet"/>
    <!-- [Bootstrap Css] -->
    <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- [Favicon] -->
    <link rel="shortcut icon" href=" {{ asset('dashassets/img/favicons/favicon.png') }}" type="image/x-icon"/>
    <!-- [Main Css] -->
    <link rel="stylesheet" href="{{ asset('css/style.css')}}"/>
    <link href="{{ asset('css/ltr.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('toastr/toastr.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/main.css')}}">
    <link rel="stylesheet" href="{{ asset('table/table.css')}}">
    <link rel="stylesheet" href="{{ asset('css/dataTables.bootstrap4.min.css') }}">

    <script src="{{ asset('js/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js')}}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('js/datatables-demo.js') }}"></script>

</head>

<body>

    @include('client.nav')

    <main class="page wallet-page">
        <div class="content p-5 pe-5 ps-3">
            <div class="row">
                <div class="col-xl-8 cols-12">
                    <!-- Start of the actions -->
                    <div class="actions row d-flex align-items-center mb-4 overflow-hidden ">
                        <!-- Start of the deposit -->
                        <div class="col-md-3 col-6">
                            <a href="/client/deposit/create" class="action mb-4 p-3">
                                    <i class="uil uil-import"></i>
                                    <span class="fs-5 fw-bold">Deposit</span>
                                </a>

                        </div>
                        <!-- End of the deposit -->

                        <!-- Start of the withdraw -->
                        <div class="col-md-3 col-6">
                            <a href="/client/withdraw/create" class="action mb-4 p-3">
                                    <i class="uil uil-export"></i>
                                    <span class="fs-5 fw-bold">Withdraw</span>
                                </a>
                                                    </div>
                        <!-- End of the withdraw -->

                        <!-- Start of the sending -->
                        <div class="col-md-3 col-6">
                            <a href="/client/conversion/create" class="action mb-4 p-3">
                                    <i class="uil uil-arrow-up-right"></i>
                                    <span class="fs-5 fw-bold">Send</span>
                                </a>
                                                    </div>
                        <!-- End of the sending -->

                        <!-- Start of the recieving -->
                        <div class="col-md-3 col-6">

                                                            <div class="action mb-4 p-3" data-bs-toggle="modal" data-bs-target="#recieveModal">
                                    <i class="uil uil-arrow-down-left"></i>
                                    <span class="fs-5 fw-bold">Receive</span>
                                </div>
                                                    </div>
                        <!-- End of the recieving -->
                    </div>
                    <!-- End of the actions -->

                    <!-- Start of the transactions row -->
                    <div class="row">
                        <div class="transactions">
                            <div class="transactions">
    <div class="last-transactions d-flex justify-content-between flex-wrap align-items-center ">
        <span class="fs-4 fw-bold">Recent Transactions</span>
        <div class="d-flex align-items-center justify-content-center">
            <!-- Show all link -->
            <a href="#" class="text-black text-decoration-none fs-6 ms-3 mb-0">
                View
                0
                From
                0
            </a>


        </div>
    </div>
                <div class="alert alert-light" role="alert">
            There is No Data
        </div>
    </div>
                        </div>
                    </div>
                    <!-- End of the transactions row -->
                </div>

                <div class="col-xl-4 cols-12">
                    <!-- Start of the funds -->
                    <div class="wallet mb-3">
                        <div class="ecard">
                            <img class="icon" src="{{ asset('dashassets/img/favicons/favicon.png') }}" alt="" />
                            <div class="details">
                                <span class="card-title d-block">Available Balance</span>
                                <div class="balance">
                                    $0.000
                                </div>
                            </div>
                            <span class="card-name">{{ auth()->user()->name }}</span>
                        </div>
                    </div>
                    <!-- End of the funds -->

                    <!-- Start of the balances -->
                    <div class="balances w-100 mx-auto">
                        <div class="p-4">
                            <h6 class="text-white opacity-75">Base Balance</h6>
                            <p class="text-white fs-3 mb-0 mb-2">
                                $0.000</p>

                            <h6 class="text-white opacity-75">In Progress Balance</h6>
                            <p class="text-white fs-3 mb-0 mb-5">
                                $0.000</p>

                            <h6 class="text-white opacity-75">On Hold Balance</h6>
                            <p class="text-white fs-3 mb-0 mb-2">
                                $0.000</p>

                            <h6 class="text-white opacity-75">Profit Balance</h6>
                            <p class="text-white fs-3 mb-0">$0.000</p>

                                                    </div>
                    </div>
                    <!-- End of the balances -->
                </div>
            </div>
        </div>
    </main>

    <!-- Start of the recieve modal -->
    <div class="modal" tabindex="-1" id="recieveModal" aria-labelledby="recieveModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="mb-0 fs-5 fw-bold text-center w-100">
                        Reception Information
                    </h5>
                </div>
                <div class="modal-body">
                    <h5 class="mb-3 text-muted fs-6">E-mail</h5>
                    <div class="d-flex w-100 justify-content-between align-items-center">
                        <input id="recievedEmail" type="text" value="{{ auth()->user()->email }}" style="outline: none"
                            class="w-75 bg-white fs-5 border-0" readonly />
                        <button id="copyEmail" class="btn btn-secondary">Copy</button>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" onclick="$('#recieveModal').modal('hide');"
                        class="btn btn-primary mx-auto px-3 fs-5 w-100">
                        Close
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- End of the recieve modal -->


    <div class="modal" tabindex="-1" id="notAllowedModal" aria-labelledby="rnotAllowedModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="mb-0 fs-5 fw-bold text-center w-100">
                        Verify your identity first
                    </h5>
                </div>
                <div class="modal-body">
                    <h5 class="mb-1 text-muted fs-6 text-center">
                        To use the features of the site, you must verify your identity first
                    </h5>
                </div>
                <div class="modal-footer">
                    <a href="https://tftwallet.com/en/user/verify-identity/create" type="button"
                        class="btn btn-primary mx-auto px-3 fs-5 w-100">
                        Verify identity
                    </a>
                </div>
            </div>
        </div>
    </div>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
<script src="https://tftwallet.com/vendor/toastr/toastr.min.js"></script>

<script>
        // toastr.options.positionClass = "toast-top-right";
    </script>

<script type="text/javascript">toastr.options = {"closeButton":true,"closeClass":"toast-close-button","closeDuration":300,"closeEasing":"swing","closeHtml":"<button><i class=\"icon-off\"><\/i><\/button>","closeMethod":"fadeOut","closeOnHover":true,"containerId":"toast-container","debug":false,"escapeHtml":false,"extendedTimeOut":10000,"hideDuration":1000,"hideEasing":"linear","hideMethod":"fadeOut","iconClass":"toast-info","iconClasses":{"error":"toast-error","info":"toast-info","success":"toast-success","warning":"toast-warning"},"messageClass":"toast-message","newestOnTop":false,"onHidden":null,"onShown":null,"positionClass":"toast-top-left","preventDuplicates":true,"progressBar":true,"progressClass":"toast-progress","rtl":false,"showDuration":300,"showEasing":"swing","showMethod":"fadeIn","tapToDismiss":true,"target":"body","timeOut":5000,"titleClass":"toast-title","toastClass":"toast"};</script>

    <script>
        $('#li_wallet').addClass('active');
        // Declaring valiables in the reciebe modal box
        var recieveModal = document.getElementById("recieveModal"),
            email = document.getElementById("recievedEmail"),
            copyBtn = document.getElementById("copyEmail");

        // Functio that copy the email text to the clipboard
        copyBtn.onclick = function() {
            email.select();
            document.execCommand("copy");
        };
    </script>

</body>
</html>
