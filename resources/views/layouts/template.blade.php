<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>

    <!-- Bootstrap CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Bootstrap CSS iconos-->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">

</head>

<body>
 
    <div class="container py-4">
        <div class="row justify-content-md-center">
            <div class="col-md-8">
                <header>
                    <h1 class="text-center text-success">Contactanos</h1><br>
                </header>

                 @yield('contenido')

                <footer>
                    <h5 class="fst-italic">Gracias por visitar mi página web. </h5>
                    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
                    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

                    <script>
                        document.getElementById("toastbtn").onclick = function() {
                          var toastElList = [].slice.call(document.querySelectorAll('.toast'))
                          var toastList = toastElList.map(function(toastEl) {
                          // Creates an array of toasts (it only initializes them)
                            return new bootstrap.Toast(toastEl) // No need for options; use the default options
                          });
                         toastList.forEach(toast => toast.show()); // This show them
                     
                          console.log(toastList); // Testing to see if it works
                        };
                      </script>
                </footer>
           </div>
        </div>
    </div>

</body>
</html>