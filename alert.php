<head>
  <script src="js/jquery.min.js"></script>
  <script src="alertifyjs/alertify.js"></script>
  <link rel="stylesheet" type="text/css" href="alertifyjs/css/alertify.css">
  <link rel="stylesheet" type="text/css" href="alertifyjs/css/themes/default.css">

</head>

<body>
  
</body>

  <script type="text/javascript">

        alertify.confirm('Eliminar datos', '¿Seguro que deseas eliminar?', function(){ alertify.success('Ok') }
                , function(){ alertify.error('Cancel')});
        alertify.alert("te hace falta llenar mas campos, por favor");
        alertify.error("fallo el servidor :(");
        alertify.success("este es un mensaje de exito ");
  
  </script>