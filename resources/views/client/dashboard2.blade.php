
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

    <title>User Dashboard</title>

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


    <!-- Facebook Pixel Code -->
    <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '902887043950707');
    fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=902887043950707&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Facebook Pixel Code -->

    <meta name="facebook-domain-verification" content="oxcwys51eknua36c85td86vxslsdwv" />
    <script>
        !function (w, d, t) {
            w.TiktokAnalyticsObject=t;var ttq=w[t]=w[t]||[];ttq.methods=["page","track","identify","instances","debug","on","off","once","ready","alias","group","enableCookie","disableCookie"],ttq.setAndDefer=function(t,e){t[e]=function(){t.push([e].concat(Array.prototype.slice.call(arguments,0)))}};for(var i=0;i<ttq.methods.length;i++)ttq.setAndDefer(ttq,ttq.methods[i]);ttq.instance=function(t){for(var e=ttq._i[t]||[],n=0;n<ttq.methods.length;n++
            )ttq.setAndDefer(e,ttq.methods[n]);return e},ttq.load=function(e,n){var i="https://analytics.tiktok.com/i18n/pixel/events.js";ttq._i=ttq._i||{},ttq._i[e]=[],ttq._i[e]._u=i,ttq._t=ttq._t||{},ttq._t[e]=+new Date,ttq._o=ttq._o||{},ttq._o[e]=n||{};n=document.createElement("script");n.type="text/javascript",n.async=!0,n.src=i+"?sdkid="+e+"&lib="+t;e=document.getElementsByTagName("script")[0];e.parentNode.insertBefore(n,e)};

            ttq.load('C7HD4HQSLUCN3VE6FB7G');
            ttq.page();
        }(window, document, 'ttq');
    </script>
</head>
<body>

    @include('client.nav')

    <main class="page">
        <div class="content pt-4 pe-5 ps-3 mb-5">
                            <div class="alert alert-success">
                    Our team is now available, your requests will be processed quickly!
                </div>
                        <div class="row pt-xl-2 pt-1">
                <div class="col-xl-4 col-lg-5 col-md-12 mb-4">
                    <div class="wallet">
                        <div class="ecard">
                            <img class="icon" src="{{ asset('dashassets/img/favicons/favicon.png') }}" alt="" />
                            <div class="details">
                                <span class="card-title d-block">Available Balance</span>
                                <div class="balance">$0</div>
                            </div>
                            <span class="card-name">{{ auth()->user()->name }}</span>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-7 col-md-12 mb-4">
                    <div class="balances w-100 row mx-auto pb-2">
                        <div class="col-md-6 p-4">
                            <h6 class="text-white opacity-75">Base Balance</h6>
                            <p class="text-white fs-3">$0</p>

                            <h6 class="text-white opacity-75">In Progress Balance</h6>
                            <p class="text-white fs-3">$0</p>
                        </div>
                        <div class="col-md-6 p-4">
                            <h6 class="text-white opacity-75">On Hold Balance</h6>
                            <p class="text-white fs-3">$0</p>

                            <h6 class="text-white opacity-75">Available Balance</h6>
                            <p class="text-white fs-3">$0</p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-2 col-lg-12 col-sm-12 mb-4">
                    <div class="row p-3 w-100 mx-auto notifications">
                        <div class="col-xl-12 col-6 notification active"
                            data-bs-toggle="offcanvas" id="icon_notification" data-bs-target="#offcanvasWithBothOptions"
                            aria-controls="offcanvasWithBothOptions">
                            <i class="uil uil-bell"></i>
                            <span>Notifications</span>
                        </div>

                        <div class="col-xl-12 col-6 notification "
                            data-bs-toggle="offcanvas" id="icon_messages" data-bs-target="#msg-offcanvas"
                            aria-controls="msg-offcanvas">
                            <i class="uil uil-envelope-alt"></i>
                            <span>Messages</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-10 mb-4">
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
                <div class="col-xl-2 col-lg-12 col-sm-12 mb-4">
                    <div class="fs-4 fw-bold text-center">Options</div>
                    <div class="row p-3 w-100 mx-auto actions mt-3" style="height: 380px">
                        <div class="col-xl-12 action" data-bs-toggle="offcanvas" data-bs-target="#languageOffcanvas"
                            aria-controls="languageOffcanvas">
                            <i class="uil uil-english-to-chinese"></i>
                            <span>Language</span>
                        </div>

                        <a href="/client/news" class="col-xl-12 action">
                            <i class="uil uil-newspaper"></i>
                            <span>
                                Latest News.
                            </span>
                        </a>

                        <a href="/client/support-ticket" class="col-xl-12 action">
                            <i class="uil uil-headphones-alt"></i>
                            <span class="text-center">Technical support</span>
                        </a>

                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();" class="col-xl-12 action">
                            <i class="uil uil-signout"></i>
                            <span>Logout</span>
                        </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Start of the notifications offcanvas -->
    <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions"
        aria-labelledby="offcanvasWithBothOptionsLabel">
        <div class="offcanvas-header pb-0">
            <h5 class="offcanvas-title fs-5 fw-bold" id="offcanvasWithBothOptionsLabel">
                Notifications
            </h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body pt-0" id="container_notification">


                            <div class="clear-float">
                    <a class="btn btn-link mx-auto text-center float-right"
                        href="/client/notification?type=notification">View Notification</a>
                    <a class="btn btn-link mx-auto text-center float-left" id="make_all_read"
                        href="/client/notification/make_all_notification_read?type=notification">Make All As Read</a>
                </div>
                    {{-- <a href="/client/dashboard2" data-id="6813"
                        class="2023-04-04 21:30:23 fs-6 fw-bold text-muted  d-flex 1  border border-2 p-2 rounded-3">
                        <div>
                            <p class="mb-1 fs-6 text-muted">
                                Congratulations! Your Identity Verification Request Has Been Approved.
                                <label>

                                </label>
                            </p>
                            <h6 class="fs-6 text-muted">
                                <i class="uil uil-clock"></i>
                                <span>2 weeks ago</span>
                            </h6>
                        </div>
                        <span class="not-show"></span>
                    </a> --}}

                    </div>
    </div>
    <!-- End of the notifcations offcanvaces -->

    <!-- Start of the messages offcanvas -->
    <div class="offcanvas offcanvas-start" tabindex="-1" id="msg-offcanvas" aria-labelledby="languageOffcanvas">
        <div class="offcanvas-header pb-0">
            <h5 id="msg-offcanvasLabel" class="fs-5 fw-bold">Messages</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body pt-0" id="container_messages">
            <div class="fs-6 fw-bold text-muted">
                                                                    <div class="alert alert-light" role="alert">
                        There is No Data
                    </div>
                            </div>
        </div>
    </div>
    <!-- End of the messages offcanvaces -->

    <!-- Start of the languages offcanvaces -->
    <div class="offcanvas offcanvas-start" tabindex="-1" id="languageOffcanvas" aria-labelledby="languageOffcanvasLabel">
        <div class="offcanvas-header">
            <h5 id="msg-offcanvasLabel">Language</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="language-btns">
                <a href="/client/dashboard2" class="d-block mb-3 fs-5 text-decoration-none btn btn-primary">
                    اللغة العربية
                </a>
                <a class="active d-block fs-5 text-decoration-none btn btn-primary">
                    English
                </a>
            </div>
        </div>
    </div>
    <!-- End of the languages offcanvaces -->


<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
<script src="{{ asset('toastr/toastr.min.js')}} "></script>

<script>
        // toastr.options.positionClass = "toast-top-right";
    </script>

<script type="text/javascript">toastr.options = {"closeButton":true,"closeClass":"toast-close-button","closeDuration":300,"closeEasing":"swing","closeHtml":"<button><i class=\"icon-off\"><\/i><\/button>","closeMethod":"fadeOut","closeOnHover":true,"containerId":"toast-container","debug":false,"escapeHtml":false,"extendedTimeOut":10000,"hideDuration":1000,"hideEasing":"linear","hideMethod":"fadeOut","iconClass":"toast-info","iconClasses":{"error":"toast-error","info":"toast-info","success":"toast-success","warning":"toast-warning"},"messageClass":"toast-message","newestOnTop":false,"onHidden":null,"onShown":null,"positionClass":"toast-top-left","preventDuplicates":true,"progressBar":true,"progressClass":"toast-progress","rtl":false,"showDuration":300,"showEasing":"swing","showMethod":"fadeIn","tapToDismiss":true,"target":"body","timeOut":5000,"titleClass":"toast-title","toastClass":"toast"};</script>

    <script>
        $('#li_dashboard').addClass('active');


        $('#container_notification,#container_messages').on('click', 'a.clicked', function(e) {
            e.preventDefault();
        });
        $('#container_notification a,#container_messages a').removeClass('clicked');
        $('#container_notification a.not-read,#container_messages a.not-read').one('click', function(e) {
            e.preventDefault();
            $(this).addClass('clicked');
            $(this).removeClass('not-read');
            let target_href = $(this).attr('href');
            $.ajax({
                url: ('/client/notification/#id').replace('#id', $(this).data(
                    'id')),
                method: 'post',
                success: function(response) {
                    window.location = target_href;
                    // console.log(response);
                },
                error: function(e) {
                    // alert('error');
                    // console.log(e);
                }
            });
        });

        //remove activ link
        if ($('#container_notification a.not-read').length == 0) {
            $('#icon_notification').removeClass('active');
            $('#make_all_read').addClass('d-none');
        }
        if ($('#container_messages a.not-read').length == 0) {
            $('#icon_messages').removeClass('active');
            $('#make_all_read_messages').addClass('d-none');
        }
    </script>
    <script src="{{ asset('js/cookie.js') }} "></script>

</body>
</html>
