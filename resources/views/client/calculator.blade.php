
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
            <div class="deposit-forms d-flex align-items-start justify-content-center w-100 bg-white">
                <div class="container pay-ways-box active-form p-5 w-100">
                    <h2 class="text-center mb-5"> Calculator</h2>
                    <div style="min-height: 100vh">
    <div class="row mb-4">
        <div class="col-lg-3 fs-5 fw-bold">Deposit Method</div>
        <div class="col-lg-9">
            <div class="dropdown">
                <button class="btn btn-light dropdown-toggle d-flex align-items-center gap-2" type="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="{{ asset('images/payment_types/vodafone.png') }}" id="dpimg" class="d-inline-block w-30-px" />
                    <span id="dpname">Vodafone Cash</span>
                </button>
                <ul class="dropdown-menu">
                                            <li>
                            <button class="dropdown-item d-flex align-items-center gap-2 dm"
                                data-min="5" data-max="8684"
                                data-name="Vodafone Cash" data-img="{{ asset('images/payment_types/vodafone.png') }}"
                                data-percent="27">
                                <img src="{{ asset('images/payment_types/vodafone.png') }}" class="d-inline-block w-30-px" />
                                Vodafone Cash
                            </button>
                        </li>
                                            <li>
                            <button class="dropdown-item d-flex align-items-center gap-2 dm"
                                data-min="10" data-max="4323"
                                data-name="WebMoney" data-img="{{ asset('images/payment_types/webmoney.png') }}"
                                data-percent="23">
                                <img src="{{ asset('images/payment_types/webmoney.png') }}" class="d-inline-block w-30-px" />
                                WebMoney
                            </button>
                        </li>
                                            <li>
                            <button class="dropdown-item d-flex align-items-center gap-2 dm"
                                data-min="5" data-max="3236"
                                data-name="Payeer" data-img="{{ asset('images/payment_types/payeer.png') }}"
                                data-percent="8">
                                <img src="{{ asset('images/payment_types/payeer.png') }}" class="d-inline-block w-30-px" />
                                Payeer
                            </button>
                        </li>
                                            <li>
                            <button class="dropdown-item d-flex align-items-center gap-2 dm"
                                data-min="5" data-max="9167"
                                data-name="Perfect Money" data-img="{{ asset('images/payment_types/perfectmoney.png') }}"
                                data-percent="8">
                                <img src="{{ asset('images/payment_types/perfectmoney.png') }}" class="d-inline-block w-30-px" />
                                Perfect Money
                            </button>
                        </li>
                                            <li>
                            <button class="dropdown-item d-flex align-items-center gap-2 dm"
                                data-min="20" data-max="4780"
                                data-name="Dogecoin" data-img="{{ asset('images/payment_types/dogecoin.png') }}"
                                data-percent="0">
                                <img src="{{ asset('images/payment_types/dogecoin.png') }}" class="d-inline-block w-30-px" />
                                Dogecoin
                            </button>
                        </li>
                                            <li>
                            <button class="dropdown-item d-flex align-items-center gap-2 dm"
                                data-min="10" data-max="3757"
                                data-name="Tether (USDT)" data-img="{{ asset('images/payment_types/usdt.png') }}"
                                data-percent="1">
                                <img src="{{ asset('images/payment_types/usdt.png') }}" class="d-inline-block w-30-px" />
                                Tether (USDT)
                            </button>
                        </li>
                                            <li>
                            <button class="dropdown-item d-flex align-items-center gap-2 dm"
                                data-min="5" data-max="4355"
                                data-name="Advcash" data-img="{{ asset('images/payment_types/advcash-logo.png') }}"
                                data-percent="2">
                                <img src="{{ asset('images/payment_types/advcash.png') }}" class="d-inline-block w-30-px" />
                                Advcash
                            </button>
                        </li>
                                            <li>
                            <button class="dropdown-item d-flex align-items-center gap-2 dm"
                                data-min="20" data-max="9348"
                                data-name="Binance" data-img="{{ asset('images/payment_types/binance.png') }}"
                                data-percent="2">
                                <img src="{{ asset('images/payment_types/binance.png') }}" class="d-inline-block w-30-px" />
                                Binance
                            </button>
                        </li>
                                            <li>
                            <button class="dropdown-item d-flex align-items-center gap-2 dm"
                                data-min="5" data-max="7892"
                                data-name="InstaPay" data-img="{{ asset('images/payment_types/instapay.png') }}"
                                data-percent="27">
                                <img src="{{ asset('images/payment_types/instapay.png') }}" class="d-inline-block w-30-px" />
                                InstaPay
                            </button>
                        </li>
                                            <li>
                            <button class="dropdown-item d-flex align-items-center gap-2 dm"
                                data-min="100" data-max="3558"
                                data-name="Bank Transfer" data-img="{{ asset('images/payment_types/banktransfer.png') }}"
                                data-percent="29">
                                <img src="{{ asset('images/payment_types/banktransfer.png') }}" class="d-inline-block w-30-px" />
                                Bank Transfer
                            </button>
                        </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="row mb-4">
        <div class="col-lg-3 fs-5 fw-bold col-12">Deposit Amount</div>
        <div class="col-lg-5 col-md-6 col-12">
            <div class="d-flex align-items-center">
                <input type="number" class="form-control" id="damount" placeholder="Deposit Amount">
                <div class="dropdown">
                    <button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <span id="dcurrency">USD</span>
                    </button>
                    <ul class="dropdown-menu">
                            <li>
                                <button class="dropdown-item dc" data-code="USD"
                                    data-name="USD" data-rate="1">
                                    USD
                                </button>
                            </li>
                            <li>
                                <button class="dropdown-item dc" data-code="EGP"
                                    data-name="EGP" data-rate="30.900105">
                                    EGP
                                </button>
                            </li>
                            <li>
                                <button class="dropdown-item dc" data-code="EUR"
                                    data-name="EUR" data-rate="0.90535">
                                    EUR
                                </button>
                            </li>
                            <li>
                                <button class="dropdown-item dc" data-code="SAR"
                                    data-name="SAR" data-rate="3.7506">
                                    SAR
                                </button>
                            </li>
                            <li>
                                <button class="dropdown-item dc" data-code="AED"
                                    data-name="AED" data-rate="3.672201">
                                    AED
                                </button>
                            </li>
                            <li>
                                <button class="dropdown-item dc" data-code="DZD"
                                    data-name="DZD" data-rate="135.463008">
                                    DZD
                                </button>
                            </li>
                            <li>
                                <button class="dropdown-item dc" data-code="MAD"
                                    data-name="MAD" data-rate="10.122953">
                                    MAD
                                </button>
                            </li>
                            <li>
                                <button class="dropdown-item dc" data-code="KWD"
                                    data-name="KWD" data-rate="0.30634">
                                    KWD
                                </button>
                            </li>
                            <li>
                                <button class="dropdown-item dc" data-code="GBP"
                                    data-name="GBP" data-rate="0.80096">
                                    GBP
                                </button>
                            </li>
                            <li>
                                <button class="dropdown-item dc" data-code="QAR"
                                    data-name="QAR" data-rate="3.640979">
                                    QAR
                                </button>
                            </li>
                    </ul>
                </div>
            </div>
            <p class="text-muted mb-0 mt-2">Min : <span id="dmin">3 USD </span>
                | Max :  <span id="dmax">100 USD</span>
            </p>

        </div>
    </div>

    <hr class="w-50 text-secondary opacity-25">

    <div class="row mb-4">
        <div class="col-lg-3 fs-5 fw-bold">Fees</div>
        <div class="col-lg-9">
            <span id="erate">__</span> <span id="dcurrencycode">USD</span>
        </div>
    </div>

    <hr class="w-50 text-secondary opacity-25">

    <div class="row mb-4">
        <div class="col-lg-3 fs-5 fw-bold">Withdraw Method</div>
        <div class="col-lg-9">
            <div class="dropdown">
                <button class="btn btn-light dropdown-toggle d-flex align-items-center gap-2" type="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="{{ asset('images/payment_types/vodafone.png') }}" id="wpimg" class="d-inline-block w-30-px" />
                    <span id="wpname">Vodafone Cash</span>
                </button>
                <ul class="dropdown-menu">
                                            <li>
                            <button class="dropdown-item d-flex align-items-center gap-2 wm"
                                data-min="5" data-max="2625"
                                data-name="Vodafone Cash" data-img="{{ asset('images/payment_types/vodafone.png') }}"
                                data-percent="-13">
                                <img src="{{ asset('images/payment_types/vodafone.png') }}" class="d-inline-block w-30-px" />
                                Vodafone Cash
                            </button>
                        </li>
                                            <li>
                            <button class="dropdown-item d-flex align-items-center gap-2 wm"
                                data-min="50" data-max="2317"
                                data-name="Skrill" data-img="{{ asset('images/payment_types/skrill.png') }}"
                                data-percent="3">
                                <img src="{{ asset('images/payment_types/skrill.png') }}" class="d-inline-block w-30-px" />
                                Skrill
                            </button>
                        </li>
                        <li>
                            <button class="dropdown-item d-flex align-items-center gap-2 wm"
                                data-min="50" data-max="5000"
                                data-name="Neteller" data-img="{{ asset('images/payment_types/neteller.png') }}"
                                data-percent="3">
                                <img src="{{ asset('images/payment_types/neteller.png') }}" class="d-inline-block w-30-px" />
                                Neteller
                            </button>
                        </li>
                        <li>
                            <button class="dropdown-item d-flex align-items-center gap-2 wm"
                                data-min="10" data-max="5000"
                                data-name="WebMoney" data-img="{{ asset('images/payment_types/webmoney.png') }}"
                                data-percent="2">
                                <img src="{{ asset('images/payment_types/webmoney.png') }}" class="d-inline-block w-30-px" />
                                WebMoney
                            </button>
                        </li>
                        <li>
                            <button class="dropdown-item d-flex align-items-center gap-2 wm"
                                data-min="5" data-max="3680"
                                data-name="Payeer" data-img="{{ asset('images/payment_types/payeer.png') }}"
                                data-percent="-0.1">
                                <img src="{{ asset('images/payment_types/payeer.png') }}" class="d-inline-block w-30-px" />
                                Payeer
                            </button>
                        </li>
                        <li>
                            <button class="dropdown-item d-flex align-items-center gap-2 wm"
                                data-min="5" data-max="9025"
                                data-name="Perfect Money" data-img="{{ asset('images/payment_types/perfectmoney.png') }}"
                                data-percent="-1.5">
                                <img src="{{ asset('images/payment_types/perfectmoney.png') }}" class="d-inline-block w-30-px" />
                                Perfect Money
                            </button>
                        </li>
                        <li>
                            <button class="dropdown-item d-flex align-items-center gap-2 wm"
                                data-min="20" data-max="4885"
                                data-name="Dogecoin" data-img="{{ asset('images/payment_types/dogecoin.png') }}"
                                data-percent="0">
                                <img src="{{ asset('images/payment_types/dogecoin.png') }}" class="d-inline-block w-30-px" />
                                Dogecoin
                            </button>
                        </li>
                        <li>
                            <button class="dropdown-item d-flex align-items-center gap-2 wm"
                                data-min="15" data-max="8496"
                                data-name="Tether (USDT)" data-img="{{ asset('images/payment_types/usdt.png') }}"
                                data-percent="0">
                                <img src="{{ asset('images/payment_types/usdt.png') }}" class="d-inline-block w-30-px" />
                                Tether (USDT)
                            </button>
                        </li>
                        <li>
                            <button class="dropdown-item d-flex align-items-center gap-2 wm"
                                data-min="0" data-max="2663"
                                data-name="Advcash" data-img="{{ asset('images/payment_types/advcash.png') }}"
                                data-percent="-0.1">
                                <img src="{{ asset('images/payment_types/advcash-logo.png') }}" class="d-inline-block w-30-px" />
                                Advcash
                            </button>
                        </li>
                        <li>
                            <button class="dropdown-item d-flex align-items-center gap-2 wm"
                                data-min="20" data-max="9980"
                                data-name="Binance" data-img="{{ asset('images/payment_types/binance.png') }}"
                                data-percent="0">
                                <img src="{{ asset('images/payment_types/binance.png') }}" class="d-inline-block w-30-px" />
                                Binance
                            </button>
                        </li>
                        <li>
                            <button class="dropdown-item d-flex align-items-center gap-2 wm"
                                data-min="25" data-max="10000"
                                data-name="InstaPay" data-img="{{ asset('images/payment_types/instapay.png') }}"
                                data-percent="-13">
                                <img src="{{ asset('images/payment_types/instapay.png') }}" class="d-inline-block w-30-px" />
                                InstaPay
                            </button>
                        </li>
                        <li>
                            <button class="dropdown-item d-flex align-items-center gap-2 wm"
                                data-min="10" data-max="4990"
                                data-name="Wise" data-img="{{ asset('images/payment_types/wise.png') }}"
                                data-percent="13">
                                <img src="{{ asset('images/payment_types/wise.png') }}" class="d-inline-block w-30-px" />
                                Wise
                            </button>
                        </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col-lg-3 fs-5 fw-bold col-12">Withdraw Amount</div>
        <div class="col-lg-5 col-md-6 col-12">
            <div class="d-flex align-items-center">
                <input type="number" class="form-control" id="wamount" placeholder="Withdraw Amount">
                <div class="dropdown">
                    <button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <span id="wcurrency">USD</span>
                    </button>
                    <ul class="dropdown-menu">
                                                    <li>
                                <button class="dropdown-item wc" data-code="USD"
                                    data-name="USD" data-rate="1">
                                    USD
                                </button>
                            </li>
                                                    <li>
                                <button class="dropdown-item wc" data-code="EGP"
                                    data-name="EGP" data-rate="30.900105">
                                    EGP
                                </button>
                            </li>
                                                    <li>
                                <button class="dropdown-item wc" data-code="EUR"
                                    data-name="EUR" data-rate="0.90535">
                                    EUR
                                </button>
                            </li>
                                                    <li>
                                <button class="dropdown-item wc" data-code="SAR"
                                    data-name="SAR" data-rate="3.7506">
                                    SAR
                                </button>
                            </li>
                                                    <li>
                                <button class="dropdown-item wc" data-code="AED"
                                    data-name="AED" data-rate="3.672201">
                                    AED
                                </button>
                            </li>
                                                    <li>
                                <button class="dropdown-item wc" data-code="DZD"
                                    data-name="DZD" data-rate="135.463008">
                                    DZD
                                </button>
                            </li>
                                                    <li>
                                <button class="dropdown-item wc" data-code="MAD"
                                    data-name="MAD" data-rate="10.122953">
                                    MAD
                                </button>
                            </li>
                                                    <li>
                                <button class="dropdown-item wc" data-code="KWD"
                                    data-name="KWD" data-rate="0.30634">
                                    KWD
                                </button>
                            </li>
                                                    <li>
                                <button class="dropdown-item wc" data-code="GBP"
                                    data-name="GBP" data-rate="0.80096">
                                    GBP
                                </button>
                            </li>
                                                    <li>
                                <button class="dropdown-item wc" data-code="QAR"
                                    data-name="QAR" data-rate="3.640979">
                                    QAR
                                </button>
                            </li>
                                            </ul>
                </div>
            </div>
            <p class="text-muted mb-0 mt-2">Min : <span id="wmin">__ USD</span> |
                Max : <span id="wmax">__ USD</span>
            </p>
        </div>
    </div>
</div>




<script>
    let dmin = 5
    let dmax = 8684

    let dpname = ''
    let dpimg = ''

    let damount = 1
    let dpercent = 27

    let dcurrencyrate = 1
    let dcurrency = 'USD'
    let dcurrencycode = 'USD'

    let erate = 1

    let wmin = 5
    let wmax = 2625

    let wpname = ''
    let wpimg = ''

    let wamount = 1
    let wpercent = -13

    let wcurrencyrate = 1
    let wcurrency = 'USD'

    calcWAmount()

    function rebuild() {
        if (dpname != '') {
            $('#dpname').html(dpname)
        }
        if (dpimg != '') {
            $('#dpimg').attr('src', dpimg)
        }
        $('#damount').val(damount)
        $('#dmin').html(`${(dmin * dcurrencyrate).toFixed(3)} ${dcurrency}`)
        $('#dmax').html(`${(dmax * dcurrencyrate).toFixed(3)} ${dcurrency}`)
        $('#dcurrency').html(dcurrency)

        $('#erate').html(erate)
        $('#dcurrencycode').html(dcurrencycode)

        if (wpname != '') {
            $('#wpname').html(wpname)
        }
        if (wpimg != '') {
            $('#wpimg').attr('src', wpimg)
        }
        $('#wamount').val(wamount)
        $('#wmin').html(`${(wmin * wcurrencyrate).toFixed(3)} ${wcurrency}`)
        $('#wmax').html(`${(wmax * wcurrencyrate).toFixed(3)} ${wcurrency}`)
        $('#wcurrency').html(wcurrency)
    }

    $('.dm').click(function(e) {
        dmin = e.target.dataset.min
        dmax = e.target.dataset.max
        dpname = e.target.dataset.name
        dpimg = e.target.dataset.img
        dpercent = e.target.dataset.percent
        calcWAmount()
    })

    $('.dc').click(function(e) {
        dcurrencyrate = e.target.dataset.rate
        dcurrency = e.target.dataset.name
        dcurrencycode = e.target.dataset.code
        calcWAmount()

    })

    $('.wm').click(function(e) {
        wmin = e.target.dataset.min
        wmax = e.target.dataset.max
        wpname = e.target.dataset.name
        wpimg = e.target.dataset.img
        wpercent = e.target.dataset.percent
        calcWAmount()
    })

    $('.wc').click(function(e) {
        wcurrencyrate = e.target.dataset.rate
        wcurrency = e.target.dataset.name
        calcWAmount()
    })

    $('#damount').change(function(e) {
        damount = e.target.value
        calcWAmount()
    })

    $('#wamount').change(function(e) {
        wamount = e.target.value
        calcDAmount()
    })

    function calcWAmount() {
        let damountusd = damount / dcurrencyrate
        let bamountusd = (damountusd * (1 - (dpercent / 100)))
        let wamountusd = (bamountusd * (1 - (wpercent / 100)))
        erate = ((damountusd - wamountusd) * dcurrencyrate).toFixed(3)
        wamount = (wamountusd * wcurrencyrate).toFixed(3)
        rebuild()
    }

    function calcDAmount() {
        // 95 = 100 * (1 - (5 / 100))
        // value = amount * (1 - (percent / 100))
        // amount = value / (1 - (percent / 100))
        let wamountusd = wamount / wcurrencyrate
        let bamountusd = (wamountusd / (1 - (wpercent / 100)))
        let damountusd = (bamountusd / (1 - (dpercent / 100)))
        erate = ((damountusd - wamountusd) * dcurrencyrate).toFixed(3)
        damount = (damountusd * dcurrencyrate).toFixed(3)
        rebuild()
    }
</script>
                </div>
            </div>

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

</body>
</html>
