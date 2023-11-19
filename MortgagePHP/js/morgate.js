function calcularCuota(e){

    e.preventDefault();
    
    
    let valortotal = document.forms["formularioCuota"]["fvalor"].value;
    let vinmueble=0;
    vinmueble = valortotal;


    let cuotainicial = document.forms["formularioCuota"]["fcuota"].value;
    let vcuota =0;
    vcuota = cuotainicial;

    let montoprestamo = vinmueble - vcuota;


    //alert(montoprestamo);


  




    let tasa = document.forms["formularioCuota"]["finteres"].value;
    let vtasa =0;
    vtasa = tasa;



    let totalinteres = montoprestamo * vtasa/100;


    


    let plazos = document.forms["formularioCuota"]["fplazo"].value;
    let vplazo =0;
    vplazo = plazos;




    let couta = (montoprestamo + totalinteres) / (vplazo*12);

    

    
    
    let montototal = document.getElementById("montoprestamo");
    montototal.innerHTML = valorEuro(montoprestamo + totalinteres);
    
    


    let totalcouta = document.getElementById("valormensual");
    totalcouta.innerHTML = valorEuro(couta);





    let porcentaje =0;
    let totalprestamo =montoprestamo+totalinteres;
    porcentaje = totalprestamo * 100 / vinmueble;



    if(porcentaje > 90 ){

        document.getElementById("montoprestamo").className += " alertaPorcentaje";
        

    
    }else{

        document.getElementById("montoprestamo").className = " form-control";

    }

}


function resertform(){

    document.forms["formularioCuota"].reset();

}

function valorEuro(value){

    const euroV = new Intl.NumberFormat("es-ES",{style:"currency",currency:"EUR",minimumFractionDigits:2});

   

    return euroV.format(value);

}