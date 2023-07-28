// JavaScript Document
const txtCedula = document.querySelector('#txtCedula');
const txtNombre = document.querySelector('#txtNombre');

const btnInsertar = document.querySelector('#btnInsertar');
const btnActualizar = document.querySelector('#btnActualizar');
const btnEliminar = document.querySelector('#btnEliminar');

txtCedula.addEventListener('keydown', function (e){
        if (e.keyCode === 13) {
                var cedula = txtCedula.value;
                $.post('./codes/buscar.php', {cedula: cedula}, function (response){
                        console.log(response);
                        var datos = JSON.parse(response);
                        txtNombre.value = datos.nombre;
                });
                txtNombre.focus();
        }
});

btnInsertar.addEventListener('click', function (){
        var cedula = txtCedula.value;
        var nombre = txtNombre.value;
        $.post('./codes/insertar.php', {cedula: cedula, nombre: nombre}, function (response){
                console.log(response);
                var datos = JSON.parse(response);
                if(datos.estado === '1'){
                        txtCedula.value = '';
                        txtNombre.value = '';
                }
                alert(response);
        });
        txtCedula.focus();
});

btnActualizar.addEventListener('click', function (){
        var cedula = txtCedula.value;
        var nombre = txtNombre.value;
        $.post('./codes/modificar.php', {cedula: cedula, nombre: nombre}, function (response){
                console.log(response);
                var datos = JSON.parse(response);
                if(datos.estado === '1'){
                        txtCedula.value = '';
                        txtNombre.value = '';
                }
                alert(datos.mensaje);
        });
        txtCedula.focus();
});

btnEliminar.addEventListener('click', function (){
        var cedula = txtCedula.value;
        $.post('./codes/borrar.php', {cedula: cedula}, function (response){
                console.log(response);
                var datos = JSON.parse(response);
                if(datos.estado === '1'){
                        txtCedula.value = '';
                        txtNombre.value = '';
                }
                alert(datos.mensaje);
        });
        txtCedula.focus();
})
