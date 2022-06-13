@extends('layouts/template')
@section('titulo', 'Contactanos')

@section('contenido')
<div class="card border-success mb-3">
    <div class="card-header border-success text-center text-success"><b>Dejanos tu mensaje:</b></div>
    <div class="card-body"> 

        <form action="{{route('contactanos.store')}}" method="POST" class="needs-validation" novalidate>
        @csrf
            <div class="mb-3">
              <label for="asunto" class="form-label fw-bold text-success">Asunto:</label>
              <input class="form-control" type="text" name="asunto"id="asunto" placeholder="Ingrese el Asunto" required>
              <div class="invalid-feedback">
                Porfavor ingrese el asunto.
              </div>
            </div>

            <div class="mb-3">
                <label for="name" class="form-label fw-bold text-success">Nombre:</label>
                <input class="form-control" type="text" name="name"id="name" placeholder="Ingrese su nombre" required>
                <div class="invalid-feedback">
                   Porfavor ingrese su nombre.
                </div>
            </div>

            @error('name')
                <p><strong>{{$message}}</strong></p>
            @enderror

            <div class="mb-3">
                <label for="correo" class="form-label fw-bold text-success">Correo:</label>
                <input class="form-control" type="email" name="correo"id="correo" placeholder="Ingrese su correo" required>
                <div class="invalid-feedback">
                    Porfavor ingrese su correo.
                 </div>
            </div>

            @error('correo')
                <p><strong>{{$message}}</strong></p>
            @enderror

            <div class="mb-3">
                <label for="mensaje" class="form-label fw-bold text-success">Mensaje:</label>
                <textarea class="form-control" id="mensaje" type="text" name="mensaje" placeholder="Ingrese su Mensaje."rows="3" required></textarea>
                {{-- <div class="invalid-feedback"> --}}
                <div class="invalid-feedback">
                    Introduzca un mensaje en el área de texto.
                </div>
            </div>

            @error('mensaje')
                <p><strong>{{$message}}</strong></p>
            @enderror
            <div class="d-grid gap-2 col-6 mx-auto">
                <button class="btn btn-success" onclick="" type="submit">Enviar Mensaje</button>
              </div>
        </form>

            {{-- @if (session('info'))
                <script type="text/javascript">
                    // alert("{{session('info')}}");
                </script>
            @endif --}}

            @if (Session::has('info'))
                <div class="alert alert-success my-3 mb-2 alert-dismissible fade show" role="alert">
                    <strong><i class="fa-solid fa-envelope-circle-check"></i> Enviado!</strong> {{Session::get('info')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
            @endif

        </div><!--card-body-->
    </div><!--card-->

   {{-- <button type="button" class="btn btn-primary" id="toastbtn">Show live toast</button>

   <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
     <div id="toast" class="toast hide" data-autohide="false" role="alert" aria-live="assertive" aria-atomic="true">
       <div class="toast-header">
         <strong class="me-auto"> <i class="bi bi-envelope-check"></i> Mensaje enviado</strong>
         <small>11 mins ago</small>
         <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
       </div>
       <div class="toast-body">
         Tu mensaje ha sido enviado correctamente.
       </div>
     </div>
   </div> --}}

<script>

 // Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'
  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')
  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()


</script>
@endsection