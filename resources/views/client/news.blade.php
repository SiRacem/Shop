
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

    <title>Latest News</title>

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

    <main class="page">
        <div class="content pt-5 pb-5 pe-5 ps-3">
            <!-- Start of the container -->
            <div class="container px-0 mx-0">
                <div
                    class=" d-flex align-items-center flex-xl-row flex-column justify-content-between mb-4 ">
                    <!-- Page title -->
                    <h4 class="fs-5 fw-bold">
                        <div class="d-flex align-items-center mt-3">
                            <a class=" mb-xl-0 active-tab text-white fw-light ms-xl-2 mx-0 ms-xl-0 ms-3 bg-white p-3 px-4 rounded-3">Latest News.</a>
                        </div>
                    </h4>
                    <!-- End of the page title -->
                </div>

                <!-- Start of the content of the deals -->
                <div class="row px-0 mx-0">
                    <!-- Start of the available deals -->
                    <div id="container_ads" class="available-deals col-xl-8 cols-12 mx-0">
                        <div class="alert alert-light" id="container_no_data" role="alert">
                            There is No Data
                        </div>

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
                    <!-- End of the available deals -->

                    <!-- Start of the deals categories -->
                    <div class="deals-categories col-xl-4 cols-12 mx-0 px-0">
                        <!-- Content of the categories -->
                        <div class="categories-content bg-white me-3 p-3">
                            <!-- Title -->
                            <h5 class="fa-5 mb-3">Total News : 0</h5>
                            <h5 class="fa-5 mb-3">Total New News : 0</h5>
                            <!-- End of the title -->
                            <div>
                                                            </div>
                        </div>
                        <!-- End of the content of the categories -->
                    </div>
                    <!-- End of the deals categories -->
                </div>
                <!-- End of the content of the deals -->
            </div>
            <!-- End of the contaniner -->
        </div>
    </main>

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    <script src="{{ asset('toastr/toastr.min.js') }} "></script>

    <script>
            // toastr.options.positionClass = "toast-top-right";
    </script>

    <script type="text/javascript">toastr.options = {"closeButton":true,"closeClass":"toast-close-button","closeDuration":300,"closeEasing":"swing","closeHtml":"<button><i class=\"icon-off\"><\/i><\/button>","closeMethod":"fadeOut","closeOnHover":true,"containerId":"toast-container","debug":false,"escapeHtml":false,"extendedTimeOut":10000,"hideDuration":1000,"hideEasing":"linear","hideMethod":"fadeOut","iconClass":"toast-info","iconClasses":{"error":"toast-error","info":"toast-info","success":"toast-success","warning":"toast-warning"},"messageClass":"toast-message","newestOnTop":false,"onHidden":null,"onShown":null,"positionClass":"toast-top-left","preventDuplicates":true,"progressBar":true,"progressClass":"toast-progress","rtl":false,"showDuration":300,"showEasing":"swing","showMethod":"fadeIn","tapToDismiss":true,"target":"body","timeOut":5000,"titleClass":"toast-title","toastClass":"toast"};</script>

    <script src="{{ asset('js/cookie.js') }} "></script>

</body>
</html>
