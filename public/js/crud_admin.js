$("#guardar_equipo").click(function(){
  alert('hola mundo');
  var equipo = $("#nom_equipo").val();
  var path = document.getElementsByName('path');
  var route = "http://localhost:8000/admin";
  var token =$("#token").val();
  alert(path);

  $.ajax({
    url : route,
    headers: {'X-CSRF-TOKEN':token},
    type : "POST",
    dataType : 'json',
    data : {equipo:equipo, path:path}
  })
});
