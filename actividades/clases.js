class Vehiculo {
    marca;
    modelo;
    año;
    constructor(marca,modelo,año){
        this.marca = marca;
        this.modelo = modelo;
        this.año = año;
    }

    obtenerDetalles(){
        let detalles = [this.marca,this.modelo,this.año];
        return detalles;
    }
}

class Automovil extends Vehiculo{
    numPuertas;
    tipoCombustible;
    constructor(marca,modelo,año,numPuertas,tipoCombustible){
        super(marca,modelo,año);
        this.numPuertas = numPuertas;
        this.tipoCombustible = tipoCombustible;
    }

    obtenerDetalles(){
        let detalles = super.obtenerDetalles();
        detalles.push(this.numPuertas);
        detalles.push(this.tipoCombustible);
        return detalles;
    }
}

class Moto extends Vehiculo{
    cilindraje
    constructor(marca,modelo,año,cilindraje){
        super(marca,modelo,año);
        this.cilindraje = cilindraje;
    }

    obtenerDetalles(){
        let detalles = super.obtenerDetalles();
        detalles.push(this.cilindraje);
        return detalles;
    }
}

class Flota{
    vehiculos = [];

    añadirVehiculo(vehiculo){
        this.vehiculos.push(vehiculo);
    }

    obtenerDetalles(){
        let detalles = [];
        for(let vehiculo of this.vehiculos){
           detalles.push(vehiculo.obtenerDetalles());
        }
        return detalles;
    }
}

let div = document.getElementById("flota");
let lista = document.getElementById("lista");
// Crear instàncies de diferents tipus de vehicles
const vehicle1 = new Vehiculo("Toyota", "Camry", 2022);
const automobil1 = new Automovil("Honda", "Civic", 2020, 4, "Gasolina");
const motocicleta1 = new Moto("Harley-Davidson", "Sportster", 2021, 1200);

// Crear una flota i afegir-hi els vehicles
const flota = new Flota();
flota.añadirVehiculo(vehicle1);
flota.añadirVehiculo(automobil1);
flota.añadirVehiculo(motocicleta1);

let detalles = flota.obtenerDetalles();

for(let vehiculo of detalles){
    let newDiv = document.createElement('li');
    newDiv.innerHTML = vehiculo;
    lista.appendChild(newDiv);
}