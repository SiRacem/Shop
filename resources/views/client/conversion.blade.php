
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

    <main class="page transfer-page">
        <div class="content pt-4 pe-5 ps-3 mb-5">
            <!-- Start of the deposit forms -->
            <form
                method="POST" id="form_store"
                action="/client/conversion"
                class=" deposit-forms d-flex align-items-start justify-content-center w-100 bg-white ">
                <input type="hidden" name="_token" value="Z4bQcKSVNx0IELB5LZUscIUOSRKUohTWWocCBLZb">
                <div class="container pay-ways-box active-form p-5 w-100">
                    <!-- Start of the title -->
                    <h4 class="fs-4 fw-bold mb-5 text-center">Send</h4>
                    <!-- End of the title -->

                    <div class="deposit-steps d-flex flex-wrap px-2 overflow-hidden">
                        <!-- Start of the first step -->
                        <div id="firstStep" class="step first-step w-100 position-relative">
                            <div class="row m-0">
                                <!-- Start of the amount box -->
                                <div class="amount row pt-2 mx-0 align-items-center mb-4">
                                    <!-- Amount title -->
                                    <h5 class="col-xl-2 col-12 fs-5 fw-bold mb-3 mb-xl-0 pe-0">
                                        Amount
                                    </h5>
                                    <div class="col-xl-5 cols-12 mb-3 pe-0 mb-xl-0 pe-0">
                                        <!-- Amount input -->
                                        <input type="number" min="1" required name="value_before_fees"
                                               max="0" id="amountInput"
                                               class="form-control fs-5"
                                               placeholder="Enter Amount"/>
                                    </div>
                                    <!-- Coin select -->
                                    <div class="col-xl-5 cols-12 pe-0">
                                        <p class="mb-0 fs-5 pay-currency">USD</p>
                                    </div>
                                    <!-- End of the cion select -->
                                </div>
                                <!-- End of the amount box -->


                                <!-- Start of the account sent to -->
                                <div class="row mb-4 align-items-center">
                                    <h5 class="col-xl-2 col-12 fs-5 fw-bold mb-xl-0 mb-3">
                                        The Account Sent To
                                    </h5>
                                    <h5 class="col-xl-10 col-12 mb-0">
                                        <input type="email" required id="email" name="email" class="form-control fs-5"
                                               style="padding: 10px;"
                                               placeholder="Enter E-mail">
                                        <label id="email_name" class="text-success small"></label>
                                    </h5>
                                </div>
                                <!-- End of the account sent to -->

                                <!-- Start of the notes -->
                                <div class="row mb-4">
                                    <h5 class="col-xl-2 col-7 fs-5 fw-bold mb-xl-0 mb-3">
                                        Note
                                    </h5>
                                    <div class="col-xl-10 col-12 mb-0">
                                        <textarea name="note" class="fs-5 form-control p-3" placeholder="Enter Note"></textarea>
                                    </div>
                                </div>
                                <!-- End of the notes -->

                                <div class="d-flex align-items-center pb-2 justify-content-end">
                                    <!-- Second step btn -->
                                    <button id="secondStepBtn" class="btn btn-primary fs-5 lh-lg fw-bold p-1 px-5 mx-4">
                                        Confirm
                                    </button>
                                    <!-- End of the second step btn -->
                                </div>

                                <!-- End of the epay container -->
                            </div>
                        </div>
                        <!-- End of the first step -->
                    </div>
                </div>
            </form>
        </div>
    </main>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
<script src="{{ asset('toastr/toastr.min.js')}}"></script>

<script>
        // toastr.options.positionClass = "toast-top-right";
    </script>

<script type="text/javascript">toastr.options = {"closeButton":true,"closeClass":"toast-close-button","closeDuration":300,"closeEasing":"swing","closeHtml":"<button><i class=\"icon-off\"><\/i><\/button>","closeMethod":"fadeOut","closeOnHover":true,"containerId":"toast-container","debug":false,"escapeHtml":false,"extendedTimeOut":10000,"hideDuration":1000,"hideEasing":"linear","hideMethod":"fadeOut","iconClass":"toast-info","iconClasses":{"error":"toast-error","info":"toast-info","success":"toast-success","warning":"toast-warning"},"messageClass":"toast-message","newestOnTop":false,"onHidden":null,"onShown":null,"positionClass":"toast-top-left","preventDuplicates":true,"progressBar":true,"progressClass":"toast-progress","rtl":false,"showDuration":300,"showEasing":"swing","showMethod":"fadeIn","tapToDismiss":true,"target":"body","timeOut":5000,"titleClass":"toast-title","toastClass":"toast"};</script>

    <script>
        $('#li_wallet').addClass('active');
        const search_email = () => {
            let email = $('#email').val();
            if (email == '')
                return;
            $('#email_name').html('');
            $.ajax({
                url: "/client/find_email",
                method: 'post',
                data: {
                    email: email,
                },
                dataType: 'JSON',
                success: function (response) {
                    if (response.length!=0 && response['email'] != 'racemelleuch12@gmail.com') {
                        $('#email_name').html(response['name']);
                    } else {
                        toastr.error('Email Not Exist');
                        $('#email_name').html('');
                    }
                    console.log(response);
                },
                error: function (e) {
                    alert('error');
                    console.log(e);
                }
            })
        }

        $('#email').change(function () {
            search_email();
        });


        $('#form_store').submit(function (e) {
            if ($('#email_name').html() == '') {
                e.preventDefault();
                toastr.error('Email Not Exist ');
                return;
            }
        })

    </script>


    <script src="{{ asset('js/cookie.js') }} "></script>

</body>
</html>
