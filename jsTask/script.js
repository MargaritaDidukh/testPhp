let a = 7;
let b = 20;
let c = 213;

function taskFirst() {
	console.log('a + b = ' + (a + b) + ' a * b = ' + (a * b));
}

function taskSecond() {
	console.log(Math.pow(a, 2) + Math.pow(b, 2));
}

function taskThird() {
	console.log((a + b + c) / 3);
}

function taskFourth() {
	console.log((a + 1) - 2 * (c - 2 * a + b));
}

function taskFifth() {
	console.log('Дано натуральное число ' + a + ' Найдите остатки от деления этих чисел на 3 => ' + a % 3 + ", на 5 => " + a % 5);
	console.log('Дано число ' + a + ' Увеличьте его на 30% => ' + (a + (a * 0.3)) + ", на 120% => " + (a + (a * 1.2)));
}

function taskSixth() {
	console.log('Найдите сумму 40% от первого числа (a) и 84% от второго числа (b) = ' + (a * 0.4 + b * 0.84));
	let arr = ('' + c).split('');
	let sum = 0;
	arr.forEach((element) => {
		sum += +element;
	});
	console.log('Дано трехзначное числo ' + c + ' Найдите сумму его цифр => ' + sum);
}

function taskSeventh() {
	let arr = ('' + c).split('');
	arr[1] = 0;
	console.log('Дано трехзначное числo ' + c + ' Поменяйте среднюю цифру на ноль => ' + arr.join(''));
	let reversed = arr.reverse();
	console.log('Найдите число, полученное выписыванием в обратном порядке цифр данного трехзначного натурального числа => ' + reversed.join(''));
}

function taskEighth() {
	console.log("a => " + (a % 2 == 0 ? 'четное' : 'не четное'));
	console.log("b => " + (b % 2 == 0 ? 'четное' : 'не четное'));
}