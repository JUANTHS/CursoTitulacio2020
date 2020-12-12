/*comentarios en Script para varias lineas */
// para una linea
alert("Mi primer codigo de JS");
var a = 5; // Asignar el valor 5 a la variable a
var b = 3;
console.log("La suma de a + b = "+(a+b));
console.log("La resta de a - b ="+(a-b));
console.log("La multiplicacion de a * b ="+(a*b));
console.log("La division de a / b ="+(a/b));
//declarar variables
var nombreAlumno ="Pedro";
var Nombre ="Juan";
var _nombreCompleto = "Juan ..."
// Mostrar en conola los valores de las variables
console.log(nombreAlumno);
console.log(_nombreCompleto);
//Funciones
function suma(){
    let a = Number(document.forms["formulario"]["num1"].value);
    let b = Number(document.forms["formulario"]["num2"].value);
    alert("la suma de los valores es: "+(a + b));
    //document.getElementById(Resultado).innerHTML=a;
    //alert(a);
    //console.log(a+b);
}
function calculadora(){
    var x = document.getElementById("valor1").value;
    var y = document.getElementById("valor2").value;
    var x = Number(x);
    var y =Number(y);

    var op = document.getElementById("operacion").value;
    var resultado = document.getElementById("resultado");
    resultado.style.color="red";
    resultado.style.fontSize="24px"

    var calc = document.getElementById("calculadora");
    calc.style.backgroundColor="lightblue";
    switch(op){
        case "sum":
            resultado.innerHTML=(x+y);
            break;
        case "res":
            resultado.innerHTML=(x-y);
            break;
        case "mul":
            resultado.innerHTML=(x*y);
            break;
        case "div":
            resultado.innerHTML=(x/y);
            break;
        default:
            resultado.innerHTML="Opcion no valida";
    }
}
