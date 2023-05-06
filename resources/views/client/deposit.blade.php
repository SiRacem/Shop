
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

    <title>Deposit</title>

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

    <main class="page deposit-page">
        <div class=" content h-100 w-100 pt-4 pe-5 ps-3 mb-5 d-flex align-items-center justify-content-center flex-column ">
            <!-- Start of the deposit forms -->
            <form method="POST" action="/client/deposit" onsubmit="return checkBeforeSubmit()"
                class="deposit-forms d-flex align-items-start justify-content-center w-100 bg-white ">
                <input type="hidden" name="_token" value="IxkrUpBDx0KSD8brnGoIExhpmnbCEAuFQlp605yH">                <div class="container pay-ways-box active-form p-5 w-100">
                    <!-- Start of the title -->
                    <h4 class="fs-4 fw-bold mb-3 text-center">Deposit</h4>
                    <!-- End of the title -->

                    <!-- Start of the steps box -->
                    <div class=" steps w-100 d-flex align-items-center justify-content-center mb-5 ">
                        <!-- First step -->
                        <div class=" step-icon first-step-icon d-flex align-items-center justify-content-center ms-2 ">
                            <i class="uil uil-angle-left fs-3 text-white next"></i>
                            <i class="uil uil-check fs-3 text-white correct"></i>
                        </div>
                        <!-- End of the first step -->

                        <!-- Line to the second step -->
                        <h1 class="line second-step-line mb-0 position-relative">
                            <span class="position-absolute h-100 w-0"></span>
                        </h1>

                        <!-- Second step -->
                        <div class=" step-icon second-step-icon d-flex align-items-center justify-content-center mx-2 ">
                            <i class="uil uil-angle-left fs-3 text-white next"></i>
                            <i class="uil uil-check fs-3 text-white correct"></i>
                        </div>
                        <!-- End of the second step -->

                        <!-- Line to the last step -->
                        <h1 class="line last-step-line mb-0 position-relative">
                            <span class="position-absolute h-100 w-0"></span>
                        </h1>

                        <!-- Last step -->
                        <div class=" step-icon last-step-icon d-flex align-items-center justify-content-center me-2 ">
                            <i class="uil uil-angle-left fs-3 text-white next"></i>
                            <i class="uil uil-check fs-3 text-white correct"></i>
                        </div>
                        <!-- End of the lst step -->
                    </div>
                    <!-- End of the steps box -->

                    <!-- Start of the deposit steps -->
                    <div class="deposit-steps d-flex flex-wrap px-2 overflow-hidden">
                        <!-- Start of the first step -->
                        <div id="firstStep" class="step first-step w-100 position-relative">
                            <div class="row m-0">
                                <!-- Pay ways title -->
                                <h5 class="col-lg-2 p-0 mb-3 fs-5 fw-bold">Payment Type</h5>
                                <!-- Pay ways container -->
                                <div class="col-lg-10 pay-ways p-0 d-flex align-items-center flex-wrap mb-3 ">
                                                                            <div class="pay-way">
                                            <input type="radio" checked name="payWay"
                                                data-percent="33"
                                                data-fixed="0"
                                                data-min_deposit="5" value="1"
                                                data-max_deposit="8328" value="1"
                                                id="payment_type_1" class="d-none" />
                                            <label for="payment_type_1"
                                                class="d-flex align-items-center p-2 ms-3 mb-3 border border-2 ">
                                                <!-- Pay way img -->
                                                <img src="{{ asset('images/payment_types/vodafone.png') }}" class="d-block ms-3" />
                                                <!-- Pay way details -->
                                                <div class="pay-way-details">
                                                    <h6 class="fs-6 fw-bold text-capitalize mb-2">
                                                        Vodafone Cash
                                                    </h6>
                                                    <span class="fs-6 text-muted">1.00 $ =>
                                                        0.67 $</span>
                                                </div>
                                            </label>
                                        </div>
                                                                            <div class="pay-way">
                                            <input type="radio"  name="payWay"
                                                data-percent="23"
                                                data-fixed="0"
                                                data-min_deposit="10" value="8"
                                                data-max_deposit="4260" value="8"
                                                id="payment_type_8" class="d-none" />
                                            <label for="payment_type_8"
                                                class="d-flex align-items-center p-2 ms-3 mb-3 border border-2 ">
                                                <!-- Pay way img -->
                                                <img src="{{ asset('images/payment_types/webmoney.png') }}" class="d-block ms-3" />
                                                <!-- Pay way details -->
                                                <div class="pay-way-details">
                                                    <h6 class="fs-6 fw-bold text-capitalize mb-2">
                                                        WebMoney
                                                    </h6>
                                                    <span class="fs-6 text-muted">1.00 $ =>
                                                        0.77 $</span>
                                                </div>
                                            </label>
                                        </div>
                                                                            <div class="pay-way">
                                            <input type="radio"  name="payWay"
                                                data-percent="8"
                                                data-fixed="0"
                                                data-min_deposit="5" value="9"
                                                data-max_deposit="3236" value="9"
                                                id="payment_type_9" class="d-none" />
                                            <label for="payment_type_9"
                                                class="d-flex align-items-center p-2 ms-3 mb-3 border border-2 ">
                                                <!-- Pay way img -->
                                                <img src="{{ asset('images/payment_types/payeer.png') }}" class="d-block ms-3" />
                                                <!-- Pay way details -->
                                                <div class="pay-way-details">
                                                    <h6 class="fs-6 fw-bold text-capitalize mb-2">
                                                        Payeer
                                                    </h6>
                                                    <span class="fs-6 text-muted">1.00 $ =>
                                                        0.92 $</span>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="pay-way">
                                            <input type="radio"  name="payWay"
                                                data-percent="8"
                                                data-fixed="0"
                                                data-min_deposit="5" value="10"
                                                data-max_deposit="8645" value="10"
                                                id="payment_type_10" class="d-none" />
                                            <label for="payment_type_10"
                                                class="d-flex align-items-center p-2 ms-3 mb-3 border border-2 ">
                                                <!-- Pay way img -->
                                                <img src="{{ asset('images/payment_types/perfectmoney.png') }}" class="d-block ms-3" />
                                                <!-- Pay way details -->
                                                <div class="pay-way-details">
                                                    <h6 class="fs-6 fw-bold text-capitalize mb-2">
                                                        Perfect Money
                                                    </h6>
                                                    <span class="fs-6 text-muted">1.00 $ =>
                                                        0.92 $</span>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="pay-way">
                                            <input type="radio"  name="payWay"
                                                data-percent="0"
                                                data-fixed="0"
                                                data-min_deposit="20" value="14"
                                                data-max_deposit="4780" value="14"
                                                id="payment_type_14" class="d-none" />
                                            <label for="payment_type_14"
                                                class="d-flex align-items-center p-2 ms-3 mb-3 border border-2 ">
                                                <!-- Pay way img -->
                                                <img src="{{ asset('images/payment_types/dogecoin.png') }}" class="d-block ms-3" />
                                                <!-- Pay way details -->
                                                <div class="pay-way-details">
                                                    <h6 class="fs-6 fw-bold text-capitalize mb-2">
                                                        Dogecoin
                                                    </h6>
                                                    <span class="fs-6 text-muted">1.00 $ =>
                                                        1 $</span>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="pay-way">
                                            <input type="radio"  name="payWay"
                                                data-percent="1"
                                                data-fixed="0"
                                                data-min_deposit="10" value="15"
                                                data-max_deposit="50000" value="15"
                                                id="payment_type_15" class="d-none" />
                                            <label for="payment_type_15"
                                                class="d-flex align-items-center p-2 ms-3 mb-3 border border-2 ">
                                                <!-- Pay way img -->
                                                <img src="{{ asset('images/payment_types/usdt.png') }}" class="d-block ms-3" />
                                                <!-- Pay way details -->
                                                <div class="pay-way-details">
                                                    <h6 class="fs-6 fw-bold text-capitalize mb-2">
                                                        Tether (USDT)
                                                    </h6>
                                                    <span class="fs-6 text-muted">1.00 $ =>
                                                        0.99 $</span>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="pay-way">
                                            <input type="radio"  name="payWay"
                                                data-percent="2"
                                                data-fixed="0"
                                                data-min_deposit="5" value="16"
                                                data-max_deposit="4355" value="16"
                                                id="payment_type_16" class="d-none" />
                                            <label for="payment_type_16"
                                                class="d-flex align-items-center p-2 ms-3 mb-3 border border-2 ">
                                                <!-- Pay way img -->
                                                <img src="{{ asset('images/payment_types/advcash.png') }}" class="d-block ms-3" />
                                                <!-- Pay way details -->
                                                <div class="pay-way-details">
                                                    <h6 class="fs-6 fw-bold text-capitalize mb-2">
                                                        Advcash
                                                    </h6>
                                                    <span class="fs-6 text-muted">1.00 $ =>
                                                        0.98 $</span>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="pay-way">
                                            <input type="radio"  name="payWay"
                                                data-percent="2"
                                                data-fixed="0"
                                                data-min_deposit="20" value="17"
                                                data-max_deposit="9348" value="17"
                                                id="payment_type_17" class="d-none" />
                                            <label for="payment_type_17"
                                                class="d-flex align-items-center p-2 ms-3 mb-3 border border-2 ">
                                                <!-- Pay way img -->
                                                <img src="{{ asset('images/payment_types/binance.png') }}" class="d-block ms-3" />
                                                <!-- Pay way details -->
                                                <div class="pay-way-details">
                                                    <h6 class="fs-6 fw-bold text-capitalize mb-2">
                                                        Binance
                                                    </h6>
                                                    <span class="fs-6 text-muted">1.00 $ =>
                                                        0.98 $</span>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="pay-way">
                                            <input type="radio"  name="payWay"
                                                data-percent="33"
                                                data-fixed="0"
                                                data-min_deposit="5" value="18"
                                                data-max_deposit="7002" value="18"
                                                id="payment_type_18" class="d-none" />
                                            <label for="payment_type_18"
                                                class="d-flex align-items-center p-2 ms-3 mb-3 border border-2 ">
                                                <!-- Pay way img -->
                                                <img src="{{ asset('images/payment_types/instapay.png') }}" class="d-block ms-3" />
                                                <!-- Pay way details -->
                                                <div class="pay-way-details">
                                                    <h6 class="fs-6 fw-bold text-capitalize mb-2">
                                                        InstaPay
                                                    </h6>
                                                    <span class="fs-6 text-muted">1.00 $ =>
                                                        0.67 $</span>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="pay-way">
                                            <input type="radio"  name="payWay"
                                                data-percent="29"
                                                data-fixed="0"
                                                data-min_deposit="100" value="19"
                                                data-max_deposit="3558" value="19"
                                                id="payment_type_19" class="d-none" />
                                            <label for="payment_type_19"
                                                class="d-flex align-items-center p-2 ms-3 mb-3 border border-2 ">
                                                <!-- Pay way img -->
                                                <img src="{{ asset('images/payment_types/banktransfer.png') }}" class="d-block ms-3" />
                                                <!-- Pay way details -->
                                                <div class="pay-way-details">
                                                    <h6 class="fs-6 fw-bold text-capitalize mb-2">
                                                        Bank Transfer
                                                    </h6>
                                                    <span class="fs-6 text-muted">1.00 $ =>
                                                        0.71 $</span>
                                                </div>
                                            </label>
                                        </div>
                                    </div>

                                <!-- Start of the amount box -->
                                <div class="amount row p-0 mx-0 align-items-center mb-4">
                                    <!-- Amount title -->
                                    <h5 class="col-xl-2 col-12 fs-5 fw-bold mb-3 mb-xl-0 px-0">
                                        Amount
                                    </h5>
                                    <div class="col-xl-8 col-12 row mx-0 px-0">
                                        <div class="col-xl-5 cols-12 mb-3 pe-0 mb-xl-0">
                                            <!-- Amount input -->
                                            <input type="number" min="1" name="currency_amount" id="amountInput"
                                                class="form-control fs-5" step="any"
                                                placeholder="Enter Amount" />
                                        </div>
                                        <!-- Coin select -->
                                        <div class="col-xl-5 cols-12 px-0">
                                            <!-- Coin select -->
                                            <select name="currency_id" id="select_currency" required
                                                class="form-select cion-select fs-5">
                                                <option selected id="option_default_currency" disabled>
                                                    Currency Type</option>
                                                                                                    <option value="1" data-code="USD">
                                                        USD</option>
                                                                                                    <option value="2" data-code="EGP">
                                                        EGP</option>
                                                                                                    <option value="3" data-code="EUR">
                                                        EUR</option>
                                                                                                    <option value="4" data-code="SAR">
                                                        SAR</option>
                                                                                                    <option value="5" data-code="AED">
                                                        AED</option>
                                                                                                    <option value="6" data-code="DZD">
                                                        DZD</option>
                                                                                                    <option value="7" data-code="MAD">
                                                        MAD</option>
                                                                                                    <option value="8" data-code="KWD">
                                                        KWD</option>
                                                                                                    <option value="9" data-code="GBP">
                                                        GBP</option>
                                                                                                    <option value="10" data-code="QAR">
                                                        QAR</option>
                                                                                            </select>
                                        </div>
                                        <label id="label_currency_usd" data-usd=""></label>
                                        <label id="alert_min_deposit_usd" data-status="search"></label>
                                        <label id="alert_max_deposit_usd" data-status="search"></label>
                                    </div>
                                    <!-- End of the cion select -->
                                </div>
                                <!-- End of the amount box -->

                                <!-- Start of the commission box -->
                                <div class="commission mb-3 row align-items-center">
                                    <!-- Commission title -->
                                    <h5 class="col-xl-2 col-12 fs-5 fw-bold mb-0 px-0"> Rate</h5>
                                    <h5 class="col-xl-8 col-12 fs-5 mb-0 px-0 commission-value">
                                        <label id="total_fees" dir="ltr">--</label>
                                    </h5>
                                </div>
                                <!-- End of the comission box -->

                                <!-- Start of the total commission box -->
                                <div class="commission mb-2 mt-3 row align-items-center">
                                    <!-- Total commission title -->
                                    <h5 class="col-xl-2 col-12 fs-5 fw-bold px-0">
                                        Total Amount
                                    </h5>
                                    <div class="col-xl-8 col-12 fs-5 mb-0 px-0">

                                        <div class="d-flex align-items-center commission-value">
                                            <input type="number" class="form-control w-75 fs-5 d-inline-block"
                                                step="any" placeholder="Total Amount To Be Send"
                                                value="" min="0" id="total_amount">
                                            <p class="mx-2 mb-0">USD</p>
                                            <p class="d-inline-block mb-0" id="total_amount_currency22"></p>
                                        </div>
                                        <div class="mx-0 p-0 mt-2 fs-6 text-muted">
                                            <i class="uil uil-info-circle"></i>
                                            Total Amount To Be Send
                                        </div>
                                    </div>
                                </div>
                                <!-- End of the total comission box -->

                                <div class="d-flex align-items-center justify-content-end">
                                    <!-- Second step btn -->
                                    <button id="secondStepBtn" type="button"
                                        class="btn btn-primary fs-5 lh-lg fw-bold p-1 px-5">
                                        Next &raquo;
                                    </button>
                                    <!-- End of the second step btn -->
                                </div>

                                <!-- End of the epay container -->
                            </div>
                        </div>
                        <!-- End of the first step -->

                        <!-- Start of the second step -->
                        <div id="secondStep" class="step second-step w-100 position-relative d-none">
                            <div class="row p-0 mx-0">
                                <!-- Instructions title -->
                                <h5 class="col-lg-2 col-12 mb-3 mb-lg-0 mb-0 fs-5 fw-bold">
                                    Instructions
                                </h5>
                                <!-- End of the instructions title -->

                                <!-- Start of the instructions -->
                                <div class="col-lg-10 col-12 instructions ps-0 mb-3">
                                    <p class="text-end mb-2 lh-base" id="container_instructions"></p>
                                </div>
                                <!-- End of the instructions -->
                            </div>

                            <div class="row p-0 mx-0 mb-3">
                                <h5 class="col-lg-2 col-12mb-3 mb-lg-0 fs-5 fw-bold">
                                    Account
                                </h5>
                                <p class="col-lg-4 col-12 mb-0 fs-5" id="container_account"></p>
                                <input type="hidden" name="site_payment_account_id" id="input_site_payment_account_id">
                            </div>

                            <div class="row p-0 mx-0 mb-3">
                                <h5 class="col-lg-2 col-12mb-3 mb-lg-0 fs-5 fw-bold">
                                    Alternative Account
                                </h5>
                                <p class="col-lg-4 col-12 mb-0 fs-5" id="container_account_alt"></p>
                            </div>

                            <div class="row p-0 mx-0 mb-3">
                                <h5 class="col-lg-2 col-12 mb-3 mb-lg-0 fs-5 fw-bold">
                                    Total Amount
                                </h5>
                                <div class="col-lg-4 col-12 mb-0 fs-5">
                                    <p class="d-inline-block" id="total_amount2"></p>
                                    <p class="d-inline-block" id="total_amount_currency"></p>
                                </div>
                            </div>

                            <div class="d-flex align-items-center justify-content-center">
                                <!-- Second step btn -->
                                <button id="lastStepBtn" class="btn btn-primary fs-5 lh-lg fw-bold p-1 px-5">
                                    Next &raquo;
                                </button>
                                <!-- End of the second step btn -->
                            </div>
                        </div>
                        <!-- End of the second step -->

                        <!-- Start of the last step -->
                        <div id="lastStep" class="step last-step w-100 position-relative d-none">
                            <!-- Transfer title -->
                            <h5 class="fs-5 fw-bold mb-3">Transfer Number</h5>
                            <!-- End of the transfer title -->

                            <div class="mb-4">
                                <!-- Transfer input -->
                                <input type="text" required class="form-control p-2 fs-5" min="0"
                                    name="transaction_number"
                                    placeholder="Enter Transfer Number" />
                                <!-- End of the transfer input -->
                            </div>

                            <div class="d-flex align-items-center justify-content-end">
                                <!-- Confirm form btn -->
                                <input type="submit" class="btn btn-primary fs-5 lh-lg fw-bold p-1 px-5"
                                    name="deposit-submit" value="Confirm" />
                                <!-- End of the confirm form btn -->
                            </div>
                        </div>
                        <!-- End of the lat step -->
                    </div>
                    <!-- End of the deposit steps -->
                </div>
            </form>
            <!-- End of the deposit forms -->
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
        var wasSubmitted = false;

        let currency_percent = 1;

        function checkBeforeSubmit() {
            if (!wasSubmitted) {
                wasSubmitted = true;
                return wasSubmitted;
            }
            return false;
        }
        $('#amountInput').val('');
        $('#option_default_currency').prop('selected', true);

        const get_min_max_deposit = () => {
            let min_deposit = $('input[name="payWay"]:checked').data('min_deposit') * 1;
            let max_deposit = $('input[name="payWay"]:checked').data('max_deposit') * 1;
            $('#alert_min_deposit_usd').addClass('d-none');
            $('#alert_min_deposit_usd').attr('data-status', 'search');
            $('#alert_max_deposit_usd').addClass('d-none');
            $('#alert_max_deposit_usd').attr('data-status', 'search');
            if (min_deposit != 0 && $('#select_currency').val() != null) {
                if ($('#select_currency option:selected').val() == 1) {
                    $('#alert_min_deposit_usd').html('Minimum Amount: ' +
                        min_deposit + ' USD');
                    $('#amountInput').attr('min', min_deposit.toFixed(3));
                    $('#alert_min_deposit_usd').removeClass('d-none');
                    $('#alert_min_deposit_usd').attr('data-status', 'finish');
                } else {
                    $('#alert_min_deposit_usd').html(
                        'Minimum Amount: ' +
                        (min_deposit * currency_percent).toFixed(3) + ' ' + $('#select_currency option:selected')
                        .text() +
                        ' | ' +
                        min_deposit + ' USD');
                    $('#amountInput').attr('min', (min_deposit * currency_percent * 1).toFixed(3));
                    $('#alert_min_deposit_usd').removeClass('d-none');
                    $('#alert_min_deposit_usd').attr('data-status', 'finish');
                }
            }
            if (max_deposit != 0 && $('#select_currency').val() != null) {
                if ($('#select_currency option:selected').val() == 1) {
                    $('#alert_max_deposit_usd').html('Maximum Amount: ' +
                        max_deposit + ' USD');
                    $('#amountInput').attr('max', max_deposit.toFixed(3));
                    $('#alert_max_deposit_usd').removeClass('d-none');
                    $('#alert_max_deposit_usd').attr('data-status', 'finish');
                } else {
                    $('#alert_max_deposit_usd').html(
                        'Maximum Amount: ' +
                        (max_deposit * currency_percent).toFixed(3) + ' ' + $('#select_currency option:selected')
                        .text() +
                        ' | ' +
                        max_deposit + ' USD');
                    $('#amountInput').attr('max', (max_deposit * currency_percent * 1).toFixed(3));
                    $('#alert_max_deposit_usd').removeClass('d-none');
                    $('#alert_max_deposit_usd').attr('data-status', 'finish');
                }
            }
            if (min_deposit == 0) {
                $('#alert_min_deposit_usd').attr('data-status', 'finish');
            }
            if (max_deposit == 0) {
                $('#alert_max_deposit_usd').attr('data-status', 'finish');
            }
        }


        const getCurrencyPercent = async () => {
            $('#label_currency_usd').html('');
            let to_currency = $('#select_currency').val();
            if (to_currency == null)
                return;
            let amount = $('#amountInput').val();
            await $.ajax({
                url: "/client/convert_currency",
                method: 'post',
                data: {
                    from_currency: 1,
                    to_currency: to_currency,
                    amount: 1
                },
                // dataType: 'JSON',
                success: function(response) {
                    currency_percent = response;
                    calcFromAmount();
                },
                error: function(e) {
                    alert('error');
                    console.log(e);
                }
            })
        }


        $('#amountInput').change(function() {
            calcFromAmount();
        });

        $('#total_amount').change(function() {
            calcFromTotal();
        });

        $('#select_currency').change(async function() {
            await getCurrencyPercent();
            get_min_max_deposit();
        });

        $('input[name="payWay"]').change(function() {
            calcFromAmount();
            get_min_max_deposit();
        });

        const calcFromAmount = () => {
            let from_currency = $('#select_currency').val();
            if (from_currency == null)
                return
            let amount = $('#amountInput').val();
            let amount_usd = amount / currency_percent;
            let fees_percent = $('input[name="payWay"]:checked').data('percent') * 1;
            let fees_fixed = $('input[name="payWay"]:checked').data('fixed') * 1;
            $('#total_amount').attr('data-amount', '0');
            if (isNaN(fees_fixed) || isNaN(fees_percent) || isNaN(amount_usd) || amount_usd < 1) {
                $('#total_fees,#total_amount,#total_amount2').html('__');
                return;
            }
            //remove percent from total
            // let fees_value = amount_usd * ( 1 - (fees_percent / 100));
            let total_amount = amount_usd / (1 - (fees_percent / 100));
            let rate = Number(currency_percent * (1 + fees_percent / 100)).toFixed(3)
            // $('#total_fees').html(Number(fees_value).toFixed(3) + ' $');
            if (from_currency != 1) {
                $('#total_fees').html(rate + ' ' + $(
                    '#select_currency option:selected').data('code') + ' => 1.00 USD');
            } else {
                $('#total_fees').html('1 USD => ' + Number(1 - fees_percent / 100).toFixed(3) + ' USD');
            }
            $('#total_amount2').html(Number(total_amount).toFixed(3) + ' USD');
            $('#total_amount').val(Number(total_amount).toFixed(3));
            $('#total_amount').attr('data-amount', total_amount);
            // convert_to_selected_currency
            if (from_currency == null || total_amount == '0') {

                return
            } else if (from_currency != 1) {

                $('#total_amount_currency,#total_amount_currency22').html(' = ' + (total_amount * currency_percent)
                    .toFixed(
                        3) + ' ' + $(
                        '#select_currency option:selected').html());
            } else {

                $('#total_amount_currency,#total_amount_currency22').html('');
            }

            // update amount label
            if (from_currency != 1) {
                $('#label_currency_usd').html(amount_usd.toFixed(3) + ' USD');
            } else {

                $('#label_currency_usd').data('usd', amount_usd.toFixed(3));
            }

        }

        const calcFromTotal = () => {
            let from_currency = $('#select_currency').val();
            if (from_currency == null)
                return

            let fees_percent = $('input[name="payWay"]:checked').data('percent') * 1;
            let rate = Number(currency_percent * (1 + (fees_percent / 100))).toFixed(3);

            let prev_amount = $('#amountInput').val();

            let total_amount = $('#total_amount').val() * 1;

            let amount_usd = total_amount * (1 - (fees_percent / 100));
            let amount_currency = amount_usd * currency_percent;
            let total_amount_currency = total_amount * currency_percent;

            $('#total_amount').attr('data-amount', '0');

            if (from_currency != 1) {
                $('#total_fees').html(rate + ' ' + $(
                    '#select_currency option:selected').data('code') + ' => 1.00 USD');
            } else {
                $('#total_fees').html('1 USD => ' + Number(1 - fees_percent / 100).toFixed(3) + ' USD');
            }
            $('#total_amount2').html(Number(total_amount).toFixed(3) + ' USD');
            $('#total_amount').val(Number(total_amount).toFixed(3));
            $('#amountInput').val(Number(amount_currency).toFixed(3));
            $('#total_amount').attr('data-amount', total_amount);
            // convert_to_selected_currency
            if (from_currency == null || total_amount == '0') {

                return
            } else if (from_currency != 1) {

                $('#total_amount_currency,#total_amount_currency22').html(' = ' + (total_amount_currency)
                    .toFixed(
                        3) + ' ' + $(
                        '#select_currency option:selected').html());
            } else {

                $('#total_amount_currency,#total_amount_currency22').html('');
            }

            // update amount label
            if (from_currency != 1) {
                $('#label_currency_usd').html(amount_usd.toFixed(3) + ' USD');
            } else {

                $('#label_currency_usd').data('usd', amount_usd.toFixed(3));
            }

        }




        //get payment type
        const get_payment_type = (id) => {
            $.ajax({
                url: ("/client/payment_type/#id").replace('#id', id),
                method: 'get',
                dataType: 'JSON',
                success: function(response) {
                    $('#container_instructions').html(response['deposit_steps']['en'])
                    $('#container_account').html(response['site_accounts'][0]['account']);
                    $('#container_account_alt').html(response['site_accounts'][1] ? response[
                        'site_accounts'][1]['account'] : '--');
                    $('#input_site_payment_account_id').val(response['site_accounts'][0]['id']);
                },
                error: function(e) {
                    alert('error');
                    console.log(e);
                }
            })
        }
        $('#secondStepBtn').click(function() {
            get_payment_type($('input[name="payWay"]:checked').val());
        });


        // Declaration of the required variables
        let firstStepIcon = document.querySelector(".first-step-icon"),
            secondStepIcon = document.querySelector(".second-step-icon"),
            lastStepIcon = document.querySelector(".last-step-icon"),
            firstStep = document.getElementById("firstStep"),
            secondStepBtn = document.getElementById("secondStepBtn"),
            secondStep = document.getElementById("secondStep"),
            lastStepBtn = document.getElementById("lastStepBtn"),
            lastStep = document.getElementById("lastStep");

        // Function that occurs on clicking on the button in the first step
        secondStepBtn.onclick = function(e) {
            // Preventing the button in the first step default
            e.preventDefault();
            $('#amountInput').val(($('#amountInput').val() * 1).toFixed(3))
            //validate all required completed
            if ($('#select_currency').val() == null || $('#amountInput').val() * 1 <= 0 ||
                $('#amountInput').val() * 1 < $('#amountInput').attr('min') * 1 ||
                $('#amountInput').val() * 1 > $('#amountInput').attr('max') * 1 ||
                $('#alert_min_deposit_usd').attr('data-status') == 'search' ||
                $('#alert_max_deposit_usd').attr('data-status') == 'search'
            ) {
                toastr.error('Please check the data');
                return;
            }
            // Adding left style property with value = 105% to the first step box
            firstStep.style.left = "-105%";
            firstStepIcon.classList.add("completed");
            document
                .querySelector(".second-step-line span")
                .classList.remove("w-0");
            document.querySelector(".second-step-line span").style.width = "100%";
            setTimeout(() => {
                firstStep.classList.add("d-none");
                secondStep.classList.remove("d-none");
                // Adding right style property with value = 0% to the second step step box
                secondStep.style.right = "0%";
            }, 500);
        };

        // Function that occurs on clicking on the button in the second step
        lastStepBtn.onclick = function(e) {
            // Preventing the button in the second step default
            e.preventDefault();
            // Adding left style property with value = auto to the second step box
            secondStep.style.right = "auto";
            // Adding left style property with value = 105% to the second step box
            secondStep.style.left = "-105%";
            secondStepIcon.classList.add("completed");
            document.querySelector(".last-step-line span").classList.remove("w-0");
            document.querySelector(".last-step-line span").style.width = "100%";
            setTimeout(() => {
                secondStep.classList.add("d-none");
                lastStep.classList.remove("d-none");
                // Adding left style property with value = auto to the second step box
                lastStep.style.right = "0%";
            }, 500);
        };

        $('#li_wallet').addClass('active');
    </script>


    <script src="{{ asset('js/cookie.js') }} "></script>

</body>
</html>
