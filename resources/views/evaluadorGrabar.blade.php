@extends('layouts.layout')

@section('title','Evaluadores registrados')








<form novalidate method="POST" >


    <h1>HOLAA</h1>


    <div class="row">
        <div class="col">
           <label for="tipo_evaluador_id">Tipo evaluador</label>
           <select  class="form-control"  id="tipo_evaluador_id" name="tipo_evaluador_id">
               @foreach ($tipoevaluadores as $tipoevaluadores)
           <option value="{{ $tipoevaluadores->id}}">{{ $tipoevaluadores->nombre}}</option>
               @endforeach

           </select>
            </div>
           </div>

        </form>















<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
      'use strict';
      window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
          form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add('was-validated');
          }, false);
        });
      }, false);
    })();
    </script>
