

alert(123123)
alert(22222)




class Human {
    constructor (firstName, lastName) {
        this.firstName = firstName
        this.lastName = lastName
    }
    sayHello () {
        console.log(`Hello m Im ${this.firstName}`)
    }
}
class Back extends Human {
    codeBackend (thing) {
        console.log(`${this.firstName} code backend ${thing}`)
    }
}
class Front extends Human {
    codeFrontend (thing) {
        console.log(`${this.firstName} code front ${thing}`)
    }
}
let aaa = new Front('Alex', 'Zabara')
console.log(aaa)

const skills = {
    codeBackend (thing) {
        console.log(`${this.firstName} code backend ${thing}`)
    },
    codeFrontend (thing) {
        console.log(`${this.firstName} code front ${thing}`)
    },
    sayHello () {
        console.log(`Hello m Im ${this.firstName}`)
    }
}

class FullDev {
    constructor (firstName, lastName) {
        this.firstName = firstName
        this.lastName = lastName

        Object.assign(this, {
            codeBackend: skills.codeBackend,
            codeFrontend: skills.codeFrontend,
            sayHello: skills.sayHello,
        })
    }
}

const aaaa = new FullDev('alex', 'zabara')
console.log(aaaa.codeBackend())



// class Dev {
//     constructor (firstName, lastName) {
//         this.firstName = firstName
//         this.lastName = lastName
//     }
//
//     hello () {
//         return `Hi ${this.firstName} ${this.lastName}`
//     }
// }
//
// class FrontDev extends Dev {
//     // hello () {
//     //     return `Hi  ${this.lastName}`
//     // }
//     constructor () {
//         super();
//     }
//
//     test () {
//       return super.hello()
//     }
// }
//
//
// let fd = new FrontDev('Alex', 'Zabar')
//
// console.log(fd.test())


class FrontendDev {
    #salary = 250
    constructor (firstName, lastName, skil) {
        this.firstName = firstName
        this.lastName = lastName
        this.#salary = 250
        this.skil = skil
    }

    get salary () {
        return this.#salary
    }

    set salary (value) {
        this.#salary = this.skil > 3
    }
}

let fd = new FrontendDev('Alex', 'Zabar', 4)
fd.salary = 400
console.log(fd.salary)






// class Human {
//     constructor (firstName, lastName) {
//         this.firstName = firstName
//         this.lastName = lastName
//         // console.log('constructor!')
//     }
//     test () {
//         console.log('test Method')
//     }
// }
//
// let human = new Human('Alex', 'Zabara')
//
// console.log(human)

// function Human(firstName1, lastName1) {
//     return {firstName1, lastName1}
// }
//
// const p = new Human('Alex', 'Zabara')
// console.log(p)

function Human(firstName, lastName) {
    this.firstName = firstName
    this.lastName = lastName
}

const p = new Human('Alex', 'Zabara')

console.log(p)


// let test2 = 123123
// let person = {
//     name: 'Alex',
//     age: 32,
//     msgHi: function () {
//         return `Hi ${this.name}, old ${this.age}`
//     }
// }
//
//
// console.log(person.msgHi())


// let array = [111,222,333,444,555]

// let user = {
//     name: 'alex',
//     age: 32
// }
// console.log(user)


//5
// for (let val in user) {
//     console.log(val)
// }

// 4
// for (let val in array ) {
//     console.log(array[val])
// }
//1
// while () {
//
// }
//
// //2
// do {
//
// } while ()
//
// //3
// for () {
//
// }


// let user = {
//     name: 'alex',
//     age: 32
// }
// console.log('age' in user)
// console.log('age123' in user)

const person = {
    name: {
        first: 'Bob',
        last: 'Smith'
    }
}

// const person = {
//     name: ['Alex', 'Smith'],
//     age: 32,
//     gender: 'male',
//     interests: ['car', 'music'],
//     bio: function () {
//         alert(this.name[0] + ' ' + this.name[1] + ' is ' + this.age + ' years old. ' + 'He likes ' + this.interests[0] + ' and ' + this.interests[1] + '.')
//     },
//     greeting: function () {
//         alert('Hi! I am' + this.name[0] + '.')
//     }
// }
//
// console.log(person.name)
// console.log(person.name[0])
// console.log(person.age)
// console.log(person.interests[1])
// console.log(person.bio())
// console.log(person.greeting())
//
// person['name']
// person['name'][0]
// person['age']
// person['interests']
// console.log(user.firstName)
// console.log(user.age)
// // console.log(user.myFunc())
//
// user.age = 30
// console.log(user)
