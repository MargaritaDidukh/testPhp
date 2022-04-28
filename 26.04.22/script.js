let user = {};

user = {
   name: "John",
};

user = {
   name: "John",
   surname: "Smith",
};

user.name = "Pete";

user = {
   name: "John",
   surname: "Smith",
   isEmpty(property) {
      return property in user;
   }
};
console.log(user.isEmpty("name"));

let salaries = {
   Ivan: 1000,
   Dmitriy: 1600,
   Anton: 1300,
}


function sumSalaries() {
   let sum = 0;
   if (salaries) {
      for (key in salaries) {
         sum += salaries[key];
      }
   }

   return sum;
}
console.log(sumSalaries());

let multNum = {
   num: 2.20,
   name: "Margo",
   age: 18,
   surname: "Di",
   city: "Kharkiv",
   year: 1500,

}


// multiplyNumeric with typeof
function multiplyNumeric(obj) {
   for (key in obj) {
      if (typeof (obj[key]) == "number") {
         obj[key] *= 2;
      }
   }
}

multiplyNumeric(multNum);
console.log(multNum);

class transport {
   constructor(type, maxSpeed, brand, year) {
      this.maxSpeed = maxSpeed;
      this.brand = brand;
      this.year = year;
      this.type = type;
   }

   ride() {
      console.log(this.type + ' ride with max speed ' + this.maxSpeed);
   }
   howOldCar() {
      let nowYear = new Date();
      let oldOfCar = nowYear.getFullYear() - this.year;
      console.log(oldOfCar === 0 ? "new" : oldOfCar);
   }
   get speed() {
      return this.maxSpeed;
   }
   set speed(speed) {
      this.maxSpeed = speed;
   }
}

class Car extends transport {
   constructor(type, maxSpeed, brand, year) {
      super(type, maxSpeed, brand, year);
      this.maxSpeed = maxSpeed <= 500 ? maxSpeed : 0;
      this.brand = brand;
      this.year = year;
      this.type = type;
   }

}
class Motorbike extends transport {
   constructor(type, maxSpeed, brand, year) {
      super(type, maxSpeed, brand, year);
      this.maxSpeed = maxSpeed <= 300 ? maxSpeed : 0;
      this.brand = brand;
      this.year = year;
      this.type = type;
   }
}
class Bicycle extends transport {
   constructor(type, kind, maxSpeed, brand, year) {
      super(type, maxSpeed, brand, year);
      this.maxSpeed = maxSpeed;
      this.brand = brand;
      this.year = year;
      this.type = type;
      this.kind = kind;
   }
   getKind() {
      console.log("It is a " + this.kind + " kind of bicycle");
   }

}

let carFromTransport = new transport('car', 300, 'audi', 2016);
carFromTransport.howOldCar();

let carFromCar = new Car('car', 270, 'audi', 2016);
carFromCar.ride();

let motorbike = new Motorbike('motorbike', 170, 'BMW', 2010);
motorbike.ride();

let bicycle = new Bicycle('bicycle', 'sports', 30, 'BMW', 2022);
bicycle.getKind();


let motorbike2 = new Motorbike('motorbike', 290, 'MV Agusta', 2008);
let car2 = new Car('car', 430, 'Bugatti', 2014);

const transports = [carFromTransport, bicycle, motorbike, carFromCar, motorbike2, car2];
const sortTransports = [];
let max = 0;

function bubbleSort(transports) {
   for (let j = transports.length - 1; j > 0; j--) {
      for (let i = 0; i < j; i++) {
         if (transports[i].speed < transports[i + 1].speed) {
            let temp = transports[i].speed;
            transports[i].speed = transports[i + 1].speed;
            transports[i + 1].speed = temp;
         }
      }
   }
}
bubbleSort(transports);
console.log(transports);

if (!Object.prototype.doubleSpeed) {
   Object.prototype.doubleSpeed = function (value) {
      return value * 2;
   };
}
let bicycle2 = new Bicycle('bicycle', 'childrens', 540, 'BMW', 2020);
console.log(bicycle2.doubleSpeed(bicycle2.speed));