
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
            <form method="POST" id="form_store" action="/client/withdraw"
                onsubmit="return checkBeforeSubmit()"
                class=" deposit-forms d-flex align-items-start justify-content-center w-100 bg-white ">
                <input type="hidden" name="_token" value="IxkrUpBDx0KSD8brnGoIExhpmnbCEAuFQlp605yH">                <div class="container pay-ways-box active-form p-5 w-100">
                    <!-- Start of the title -->
                    <h4 class="fs-4 fw-bold mb-5 text-center">Withdraw</h4>
                    <!-- End of the title -->

                    <div class="deposit-steps d-flex flex-wrap px-2 overflow-hidden">
                        <!-- Start of the first step -->
                        <div id="firstStep" class="step first-step w-100 position-relative">
                            <div class="row m-0">
                                <!-- Pay ways title -->
                                <h5 class="col-lg-2 p-0 mb-3 fs-5 fw-bold">Wallet Balance</h5>
                                <!-- Pay ways container -->
                                <div class=" col-lg-10 pay-ways p-0 d-flex align-items-center flex-wrap mb-3 ">
                                    <!-- Paypal pay way -->
                                    <div class="pay-way paypal">
                                        <input type="radio" name="balance" value="available" id="main2" class="d-none"
                                            checked />
                                        <label for="main2"
                                            class=" d-flex align-items-center p-2 ms-3 mb-3 border border-2 "
                                            <!-- Pay way details -->
                                            <div class="pay-way-details">
                                                <h6 class="fs-6 fw-bold text-capitalize mb-2">
                                                    Base Balance
                                                </h6>
                                                <span class="fs-6 text-muted">$0</span>
                                            </div>
                                        </label>
                                    </div>
                                    <!-- End of paypal pay way -->

                                    <!-- Vodafone-cash pay way -->

                                    <!-- End of paypal pay way -->
                                </div>

                                <!-- Pay ways title -->
                                <h5 class="col-lg-2 p-0 mb-3 fs-5 fw-bold">Payment Type</h5>
                                <!-- Pay ways container -->
                                <div class=" col-lg-10 pay-ways p-0 d-flex align-items-center flex-wrap mb-3 "
                                    id="container_methods">
                                                                            <div class="pay-way">
                                            <input type="radio" checked name="payWay"
                                                data-available_percent="-15"
                                                data-percent="-15"
                                                data-available_fixed="0"
                                                data-fixed="0"
                                                data-min="5" data-max="9308"
                                                value="1" id="payment_type_1"
                                                class="d-none" />
                                            <label for="payment_type_1"
                                                class="d-flex align-items-center p-2 ms-3 mb-3 border border-2 ">
                                                <!-- Pay way img -->
                                                <img src="{{ asset('images/payment_types/vodafone.png') }}" class="d-block ms-3" />
                                                <!-- Pay way details -->
                                                <div class="pay-way-details">
                                                    <h6 class="fs-6 fw-bold text-capitalize mb-2">
                                                        Vodafone Cash
                                                    </h6>
                                                    <span class="fs-6 text-muted" data-span_percent>1 $ =>
                                                        1.15 $</span>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="pay-way">
                                            <input type="radio"  name="payWay"
                                                data-available_percent="3"
                                                data-percent="3"
                                                data-available_fixed="0"
                                                data-fixed="0"
                                                data-min="50" data-max="2317"
                                                value="3" id="payment_type_3"
                                                class="d-none" />
                                            <label for="payment_type_3"
                                                class="d-flex align-items-center p-2 ms-3 mb-3 border border-2 ">
                                                <!-- Pay way img -->
                                                <img src="{{ asset('images/payment_types/skrill.png') }}" class="d-block ms-3" />
                                                <!-- Pay way details -->
                                                <div class="pay-way-details">
                                                    <h6 class="fs-6 fw-bold text-capitalize mb-2">
                                                        Skrill
                                                    </h6>
                                                    <span class="fs-6 text-muted" data-span_percent>1 $ =>
                                                        0.97 $</span>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="pay-way">
                                            <input type="radio"  name="payWay"
                                                data-available_percent="3"
                                                data-percent="3"
                                                data-available_fixed="0"
                                                data-fixed="0"
                                                data-min="50" data-max="5000"
                                                value="6" id="payment_type_6"
                                                class="d-none" />
                                            <label for="payment_type_6"
                                                class="d-flex align-items-center p-2 ms-3 mb-3 border border-2 ">
                                                <!-- Pay way img -->
                                                <img src="{{ asset('images/payment_types/neteller.png') }}" class="d-block ms-3" />
                                                <!-- Pay way details -->
                                                <div class="pay-way-details">
                                                    <h6 class="fs-6 fw-bold text-capitalize mb-2">
                                                        Neteller
                                                    </h6>
                                                    <span class="fs-6 text-muted" data-span_percent>1 $ =>
                                                        0.97 $</span>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="pay-way">
                                            <input type="radio"  name="payWay"
                                                data-available_percent="2"
                                                data-percent="2"
                                                data-available_fixed="0"
                                                data-fixed="0"
                                                data-min="10" data-max="5000"
                                                value="8" id="payment_type_8"
                                                class="d-none" />
                                            <label for="payment_type_8"
                                                class="d-flex align-items-center p-2 ms-3 mb-3 border border-2 ">
                                                <!-- Pay way img -->
                                                <img src="{{ asset('images/payment_types/webmoney.png') }}" class="d-block ms-3" />
                                                <!-- Pay way details -->
                                                <div class="pay-way-details">
                                                    <h6 class="fs-6 fw-bold text-capitalize mb-2">
                                                        WebMoney
                                                    </h6>
                                                    <span class="fs-6 text-muted" data-span_percent>1 $ =>
                                                        0.98 $</span>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="pay-way">
                                            <input type="radio"  name="payWay"
                                                data-available_percent="-0.1"
                                                data-percent="-0.1"
                                                data-available_fixed="0"
                                                data-fixed="0"
                                                data-min="5" data-max="3672"
                                                value="9" id="payment_type_9"
                                                class="d-none" />
                                            <label for="payment_type_9"
                                                class="d-flex align-items-center p-2 ms-3 mb-3 border border-2 ">
                                                <!-- Pay way img -->
                                                <img src="{{ asset('images/payment_types/payeer.png') }}" class="d-block ms-3" />
                                                <!-- Pay way details -->
                                                <div class="pay-way-details">
                                                    <h6 class="fs-6 fw-bold text-capitalize mb-2">
                                                        Payeer
                                                    </h6>
                                                    <span class="fs-6 text-muted" data-span_percent>1 $ =>
                                                        1.001 $</span>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="pay-way">
                                            <input type="radio"  name="payWay"
                                                data-available_percent="-1.5"
                                                data-percent="-1.5"
                                                data-available_fixed="0"
                                                data-fixed="0"
                                                data-min="5" data-max="8757"
                                                value="10" id="payment_type_10"
                                                class="d-none" />
                                            <label for="payment_type_10"
                                                class="d-flex align-items-center p-2 ms-3 mb-3 border border-2 ">
                                                <!-- Pay way img -->
                                                <img src="{{ asset('images/payment_types/perfectmoney.png') }}" class="d-block ms-3" />
                                                <!-- Pay way details -->
                                                <div class="pay-way-details">
                                                    <h6 class="fs-6 fw-bold text-capitalize mb-2">
                                                        Perfect Money
                                                    </h6>
                                                    <span class="fs-6 text-muted" data-span_percent>1 $ =>
                                                        1.015 $</span>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="pay-way">
                                            <input type="radio"  name="payWay"
                                                data-available_percent="0"
                                                data-percent="0"
                                                data-available_fixed="0"
                                                data-fixed="0"
                                                data-min="20" data-max="4885"
                                                value="14" id="payment_type_14"
                                                class="d-none" />
                                            <label for="payment_type_14"
                                                class="d-flex align-items-center p-2 ms-3 mb-3 border border-2 ">
                                                <!-- Pay way img -->
                                                <img src="{{ asset('images/payment_types/dogecoin.png') }}" class="d-block ms-3" />
                                                <!-- Pay way details -->
                                                <div class="pay-way-details">
                                                    <h6 class="fs-6 fw-bold text-capitalize mb-2">
                                                        Dogecoin
                                                    </h6>
                                                    <span class="fs-6 text-muted" data-span_percent>1 $ =>
                                                        1 $</span>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="pay-way">
                                            <input type="radio"  name="payWay"
                                                data-available_percent="0"
                                                data-percent="0"
                                                data-available_fixed="0"
                                                data-fixed="0"
                                                data-min="15" data-max="25000"
                                                value="15" id="payment_type_15"
                                                class="d-none" />
                                            <label for="payment_type_15"
                                                class="d-flex align-items-center p-2 ms-3 mb-3 border border-2 ">
                                                <!-- Pay way img -->
                                                <img src="{{ asset('images/payment_types/usdt.png') }}" class="d-block ms-3" />
                                                <!-- Pay way details -->
                                                <div class="pay-way-details">
                                                    <h6 class="fs-6 fw-bold text-capitalize mb-2">
                                                        Tether (USDT)
                                                    </h6>
                                                    <span class="fs-6 text-muted" data-span_percent>1 $ =>
                                                        1 $</span>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="pay-way">
                                            <input type="radio"  name="payWay"
                                                data-available_percent="-0.1"
                                                data-percent="-0.1"
                                                data-available_fixed="0"
                                                data-fixed="0"
                                                data-min="0" data-max="2663"
                                                value="16" id="payment_type_16"
                                                class="d-none" />
                                            <label for="payment_type_16"
                                                class="d-flex align-items-center p-2 ms-3 mb-3 border border-2 ">
                                                <!-- Pay way img -->
                                                <img src="{{ asset('images/payment_types/advcash.png') }}" class="d-block ms-3" />
                                                <!-- Pay way details -->
                                                <div class="pay-way-details">
                                                    <h6 class="fs-6 fw-bold text-capitalize mb-2">
                                                        Advcash
                                                    </h6>
                                                    <span class="fs-6 text-muted" data-span_percent>1 $ =>
                                                        1.001 $</span>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="pay-way">
                                            <input type="radio"  name="payWay"
                                                data-available_percent="0"
                                                data-percent="0"
                                                data-available_fixed="0"
                                                data-fixed="0"
                                                data-min="20" data-max="9980"
                                                value="17" id="payment_type_17"
                                                class="d-none" />
                                            <label for="payment_type_17"
                                                class="d-flex align-items-center p-2 ms-3 mb-3 border border-2 ">
                                                <!-- Pay way img -->
                                                <img src="{{ asset('images/payment_types/binance.png') }}" class="d-block ms-3" />
                                                <!-- Pay way details -->
                                                <div class="pay-way-details">
                                                    <h6 class="fs-6 fw-bold text-capitalize mb-2">
                                                        Binance
                                                    </h6>
                                                    <span class="fs-6 text-muted" data-span_percent>1 $ =>
                                                        1 $</span>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="pay-way">
                                            <input type="radio"  name="payWay"
                                                data-available_percent="-15"
                                                data-percent="-15"
                                                data-available_fixed="0"
                                                data-fixed="0"
                                                data-min="25" data-max="10000"
                                                value="18" id="payment_type_18"
                                                class="d-none" />
                                            <label for="payment_type_18"
                                                class="d-flex align-items-center p-2 ms-3 mb-3 border border-2 ">
                                                <!-- Pay way img -->
                                                <img src="{{ asset('images/payment_types/instapay.png') }}" class="d-block ms-3" />
                                                <!-- Pay way details -->
                                                <div class="pay-way-details">
                                                    <h6 class="fs-6 fw-bold text-capitalize mb-2">
                                                        InstaPay
                                                    </h6>
                                                    <span class="fs-6 text-muted" data-span_percent>1 $ =>
                                                        1.15 $</span>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="pay-way">
                                            <input type="radio"  name="payWay"
                                                data-available_percent="13"
                                                data-percent="13"
                                                data-available_fixed="0"
                                                data-fixed="0"
                                                data-min="10" data-max="4990"
                                                value="20" id="payment_type_20"
                                                class="d-none" />
                                            <label for="payment_type_20"
                                                class="d-flex align-items-center p-2 ms-3 mb-3 border border-2 ">
                                                <!-- Pay way img -->
                                                <img src="{{ asset('images/payment_types/wise.png') }}" class="d-block ms-3" />
                                                <!-- Pay way details -->
                                                <div class="pay-way-details">
                                                    <h6 class="fs-6 fw-bold text-capitalize mb-2">
                                                        Wise
                                                    </h6>
                                                    <span class="fs-6 text-muted" data-span_percent>1 $ =>
                                                        0.87 $</span>
                                                </div>
                                            </label>
                                        </div>
                                    <!-- End of paypal pay way -->
                                </div>


                                <!-- Start of the amount box -->
                                <div class="amount row p-0 mx-0 align-items-center mb-2">
                                    <!-- Amount title -->
                                    <h5 class="col-xl-2 col-12 fs-5 fw-bold mb-3 mb-xl-0 pe-0">
                                        Amount
                                    </h5>
                                    <div class="col-xl-5 cols-12 mb-3 pe-0 mb-xl-0 pe-0">
                                        <!-- Amount input -->
                                        <input type="number" min="1" name="value_before_fees" id="amountInput"
                                            class="form-control fs-5" step="0.001"
                                            placeholder="Amount Value" />
                                    </div>
                                    <!-- Coin select -->
                                    <div class="col-xl-5 cols-12 pe-0">
                                        <p class="mb-0 fs-5 pay-currency">USD</p>
                                    </div>
                                    <!-- End of the cion select -->
                                </div>
                                <!-- Start of the amount box -->
                                <div class="amount row p-0 mx-0 align-items-center mb-4">
                                    <!-- Amount title -->
                                    <h5 class="col-xl-2 col-12 fs-5 fw-bold mb-3 mb-xl-0 pe-0">
                                    </h5>
                                    <div class="col-xl-5 cols-12 mb-3 pe-0 mb-xl-0 pe-0">
                                        <label id="alert_min_value"></label>
                                        <br>
                                        <label id="alert_max_value"></label>
                                    </div>
                                    <!-- End of the cion select -->
                                </div>
                                <!-- End of the amount box -->

                                <!-- Start of the commission box -->
                                <div class="commission mb-3 row mx-0 px-0 align-items-center">
                                    <!-- Commission title -->
                                    <h5 class="col-xl-2 col-7 fs-5 fw-bold mb-0 px-0"> Rate</h5>
                                    <h5 class="col-xl-3 col-5 fs-5 mb-0 commission-value">
                                        <label dir="ltr" id="total_fees">__</label>
                                    </h5>
                                </div>
                                <!-- End of the comission box -->

                                <!-- Start of the total commission box -->
                                <div class="commission mb-2 mt-4 row mx-0 px-0 align-items-center">
                                    <!-- Total commission title -->
                                    <h5 class="col-xl-2 col-7 fs-5 fw-bold mb-0 px-0">
                                        Total Amount
                                    </h5>
                                    <h5 class="col-xl-3 col-5 fs-5 mb-0 commission-value">
                                        <label id="total_amount" data-total="0">__</label>
                                    </h5>
                                </div>
                                <div class="mx-0 p-0 fs-6 text-muted">
                                    <i class="uil uil-info-circle"></i>
                                    Total Amount Will Be Recieved
                                </div>
                                <!-- End of the total comission box -->

                                <!-- Start of the account sent to -->
                                <div class="row mx-0 px-0 mb-4 mt-4 align-items-center ps-0">
                                    <h5 class="col-xl-2 col-12 fs-5 fw-bold mb-xl-0 mb-3 pe-0">
                                        The Account Sent To
                                    </h5>
                                    <h5 class="col-xl-10 col-12 mb-0 ps-0 pe-0">
                                        <input type="text" name="user_withdraw_account" required
                                            class="form-control fs-5" style="padding: 10px;"
                                            placeholder="The Account To Be Withdrawn">
                                    </h5>
                                </div>
                                <!-- End of the account sent to -->
                                <div class="row mx-0 px-0 mb-4 align-items-center ps-0" id="container_notes">
                                    <h5 class="col-xl-2 col-12 fs-5 fw-bold mb-xl-0 mb-3 pe-0">
                                        Notes
                                    </h5>
                                    <h5 class="col-xl-10 col-12 mb-0 ps-0 pe-0">
                                        <p class="text-end mb-2 lh-base" id="container_instructions"></p>
                                    </h5>
                                </div>
                                <div class="d-flex align-items-center justify-content-end mx-0 px-0">
                                    <!-- Second step btn -->
                                    <button id="secondStepBtn" class="btn btn-primary fs-5 lh-lg fw-bold p-1 px-5">
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
        var wasSubmitted = false;

        function checkBeforeSubmit() {
            if (!wasSubmitted) {
                wasSubmitted = true;
                return wasSubmitted;
            }
            return false;
        }
        $('#li_wallet').addClass('active');

        const get_payment_type = (id) => {
            $('#container_notes').addClass('d-none');
            let available = 0 * 1;
            let profit = 0 * 1;
            let selected_balance_amount = $('input[name="balance"]:checked').val() == 'profit' ? profit : available;
            $.ajax({
                url: ("/client/payment_type/#id").replace('#id', id),
                method: 'get',
                dataType: 'JSON',
                success: function(response) {
                    if (response['withdraw_steps']['en'] == undefined) {
                        $('#container_notes').addClass('d-none');
                    } else {
                        $('#container_notes').removeClass('d-none');
                    }
                    $('#container_instructions').html(response['withdraw_steps'][
                        'en']);
                    $('#amountInput').attr('min', response['min_withdraw']);
                    $('#amountInput').attr('max', response['max_withdraw']);
                    if (response['min_withdraw'] == 0)
                        $('#alert_min_value').addClass('d-none');
                    else
                        $('#alert_min_value').removeClass('d-none');
                    $('#alert_min_value').html(
                        'Minimum Amount: ' + response[
                            'min_withdraw'] + ' $');
                    $('#alert_max_value').html(
                        'Maximum Amount: ' + (response[
                                'max_withdraw'] * 1 > selected_balance_amount ?
                            selected_balance_amount : response['max_withdraw']) + ' $');
                },
                error: function(e) {
                    alert('error');
                    console.log(e);
                }
            })
        }

        const change_balance_fees = () => {
            let profit_fixed_fees = 0 * 1;
            let profit_percent_fees = 2 * 1;
            let is_profit = $('input[name=balance]:checked').val() == 'available' ? false : true;
            $('#container_methods div.pay-way').each(function() {
                //change input data
                let input = $(this).find('input:radio');
                let data_percent = is_profit ? profit_percent_fees : input.attr('data-available_percent');
                input.attr('data-percent', data_percent);
                let data_fixed = is_profit ? profit_fixed_fees : input.attr('data-available_fixed');
                input.attr('data-fixed', data_fixed);
                // $(this).find('span[data-span_percent]').html(data_percent+'% + '+data_fixed+'$');
            });
            get_fees();
        }

        const get_fees = () => {
            let amount_usd = $('#amountInput').val() * 1;
            let fees_percent = $('input[name="payWay"]:checked').attr('data-percent') * 1;
            let fees_fixed = $('input[name="payWay"]:checked').attr('data-fixed') * 1;
            if (isNaN(fees_fixed) || isNaN(fees_percent) || isNaN(amount_usd) || amount_usd < 1) {
                $('#total_fees,#total_amount').html('__');
                $('#total_amount').attr('data-total', '0');
                return;
            }

            let fees_value = 0;
            //remove percent from total
            fees_value = Number((amount_usd * fees_percent / 100)).toFixed(3);

            $('#total_fees').html('1 USD => ' + (1 - 1 * fees_percent / 100) + ' USD');
            $('#total_amount').html((amount_usd - fees_value).toFixed(3) + ' $');
            $('#total_amount').attr('data-total', amount_usd - fees_value);

        }
        change_balance_fees();

        $('input[name="payWay"],input[name=balance],#amountInput').change(function() {
            change_balance_fees();
        });

        $('#secondStepBtn').click(function() {

            let available = 0 * 1;
            let profit = 0 * 1;
            let selected_balance_amount = $('input[name="balance"]:checked').val() == 'profit' ? profit : available;
            let amount_usd = $('#amountInput').val() * 1;
            let fees_percent = $('input[name="payWay"]:checked').attr('data-percent') * 1;
            let fees_fixed = $('input[name="payWay"]:checked').attr('data-fixed') * 1;
            let min = $('input[name="payWay"]:checked').attr('data-min') * 1;
            let max = $('input[name="payWay"]:checked').attr('data-max') * 1;
            if (isNaN(fees_fixed) || isNaN(fees_percent) || isNaN(amount_usd) || amount_usd < 1) {
                $('#total_fees,#total_amount').html('__');
                $('#total_amount').attr('data-total', '0');
                return;
            }
            //check if amount exist in selected balance
            if (amount_usd < min) {
                toastr.error('Minimum Amount:  ' + min);
                $('#total_fees,#total_amount').html('__');
                $('#total_amount').attr('data-total', '0');
                return;
            }
            if (amount_usd > max && amount_usd < selected_balance_amount) {
                toastr.error('Maximum Amount:  ' + max);
                $('#total_fees,#total_amount').html('__');
                $('#total_amount').attr('data-total', '0');
                return;
            }
            if (selected_balance_amount < amount_usd) {
                toastr.error('Please Right Balance Less Than ' + selected_balance_amount);
                $('#total_fees,#total_amount').html('__');
                $('#total_amount').attr('data-total', '0');
                return;
            }
        })

        $('#form_store').submit(function(e) {
            if ($('#total_amount').attr('data-total') * 1 < 1) {
                e.preventDefault();
                toastr.error('Please Right Balance Less Than ' + selected_balance_amount);
                return;
            }
        });


        //get instructions
        get_payment_type($('input[name="payWay"]:checked').val());
        $('input[name="payWay"]').change(function() {
            get_payment_type($('input[name="payWay"]:checked').val());
        })
    </script>


    <script src="{{ asset('js/cookie.js') }} "></script>

</body>
</html>
