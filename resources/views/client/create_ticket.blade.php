
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

    <main class="page add-new-deal-page">
        <div class="content pt-4 pe-5 ps-3 mb-5">
            <form action="/client/support-ticket" class="bg-white add-new-deal-form" method="get"
                enctype="multipart/form-data" onsubmit="return checkBeforeSubmit()">
                <input type="hidden" name="_token" value="ghTJqr0hhry2HOhcfjxgeHbzuOBsjm2HoStSBEYV">

                <div class="container p-5 w-100">
                    <!-- Title -->
                    <h4 class="fs-4 fw-bold mb-5 text-center">Created Ticket About</h4>
                    <!-- End of the title -->

                    <div class="alert alert-info">
                        For faster communication in urgent support cases, you can contact via WhatsApp:
                        <a href="http://wa.me/+201068082819" target="_blank">+201068082819</a>
                    </div>

                    <!-- Deal title row -->
                    <div class="row px-0 mx-0 mb-4 align-items-center">
                        <div class="col-xl-2 col-12 fs-5 fw-bold pe-0">
                            <h5 class="fs-5 fw-bold mb-xl-0 mb-3">Ticket Title</h5>
                        </div>
                        <div class="col-xl-10 col-12 px-0">
                            <input type="text" required name="about" class="form-control fs-5"
                                placeholder="Ticket Title" />
                        </div>
                    </div>
                    <!-- End of deal title row -->

                    <!-- Deal details row -->
                    <div class="row px-0 mx-0 mb-4">
                        <div class="col-xl-2 col-12 fs-5 fw-bold mb-xl-0 px-0">
                            <h5 class="fs-5 fw-bold mb-xl-0 mb-3">Inquire</h5>
                        </div>
                        <div class="col-xl-10 col-12 px-0">
                            <textarea name="message" required class="form-control fs-5" style="min-height: 175px"
                                placeholder="Right Message Here"></textarea>
                        </div>
                    </div>
                    <!-- End of deal details row -->

                    <div class="row px-0 mx-0 mb-4">
                        <h5 class="col-xl-2 col-12 fs-5 fw-bold mb-xl-0 px-0">
                            Image
                        </h5>
                        <div class="col-xl-10 col-12 px-0">
                            <input class="form-control" type="file" accept="image/*"  name="image" style="padding: 5px !important" />
                        </div>
                    </div>

                    <!-- Add Button -->
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="add-new-deal-btn btn btn-primary px-4 p-2 fs-5">
                            Create
                        </button>
                    </div>
                    <!-- End of the add button -->
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
<script src="{{'toastr/toastr.min.js'}}"></script>

<script>
        // toastr.options.positionClass = "toast-top-right";
    </script>

<script type="text/javascript">toastr.options = {"closeButton":true,"closeClass":"toast-close-button","closeDuration":300,"closeEasing":"swing","closeHtml":"<button><i class=\"icon-off\"><\/i><\/button>","closeMethod":"fadeOut","closeOnHover":true,"containerId":"toast-container","debug":false,"escapeHtml":false,"extendedTimeOut":10000,"hideDuration":1000,"hideEasing":"linear","hideMethod":"fadeOut","iconClass":"toast-info","iconClasses":{"error":"toast-error","info":"toast-info","success":"toast-success","warning":"toast-warning"},"messageClass":"toast-message","newestOnTop":false,"onHidden":null,"onShown":null,"positionClass":"toast-top-left","preventDuplicates":true,"progressBar":true,"progressClass":"toast-progress","rtl":false,"showDuration":300,"showEasing":"swing","showMethod":"fadeIn","tapToDismiss":true,"target":"body","timeOut":5000,"titleClass":"toast-title","toastClass":"toast"};</script>

    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>



    <script src="{{ asset('js/cookie.js') }} "></script>

</head>
  <script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss',
      toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
      mergetags_list: [
        { value: 'First.Name', title: 'First Name' },
        { value: 'Email', title: 'Email' },
      ]
    });
  </script>
</body>
</html>
