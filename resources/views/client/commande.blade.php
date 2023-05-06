
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

    <main class="page">
        <div class="content pt-4 pe-5 ps-3 mb-5">
            <div class="deposit-forms d-flex align-items-start justify-content-center w-100 bg-white">
                <div class="container pay-ways-box active-form p-5 w-100">
                    <h2 class="text-center mb-5">You Orders</h2>
                    <div style="min-height: 100vh">
                        <div class="row mb-4">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Numero Commandes</th>
                                            <th>Etat</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach (auth()->user()->commandes as $index => $c)
                                        <tr>
                                            <td> Commandes N {{ $index+1 }}</td>
                                            <td>
                                                @if ( $c->etat == "Pending")
                                                    <span class="badge bg-warning">{{ $c->etat }}</span>
                                                @else
                                                    <span class="badge bg-success">{{ $c->etat }}</span>
                                                @endif
                                            </td>
                                            <td> {{ $c->created_at }} </td>

                                        </tr>

                                        @endforeach
                                    </tbody>
                                </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>


    <script src="{{ asset('js/cookie.js') }} "></script>

</body>
</html>
