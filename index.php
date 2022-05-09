<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <h1>Hola</h1>
    <button type="button" class="btn btn-success" id="btnTest">Success</button>
</body>
</html>

<script src="index.js"></script>
<script>
   
    $(document).ready(function() {
        $("#btnTest").click(function(){
            var content="<form><div class='form-group'><h3>Formulario</h3><label for='exampleInputEmail1'>correo address</label><input type='email' class='form-control' id='exampleInputEmail1' aria-describedby='emailHelp' placeholder='Enter email'></div><div class='form-group'><label for='exampleInputPassword1'>Password</label><input type='password' class='form-control' id='exampleInputPassword1' placeholder='Password'></div><div class='form-check'><input type='checkbox' class='form-check-input' id='exampleCheck1'><label class='form-check-label' for='exampleCheck1'>Check me out</label></div><button type='button' id='enviar' class='btn btn-primary'>Submit</button></form>";
            hello(content);

            $("#enviar").click(function(e){
               e.preventDefault();
            }); 
        }); 
    });

</script>