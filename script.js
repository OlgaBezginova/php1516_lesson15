let x = Math.floor(Math.random() * 100) + 1;
let y = Math.floor(Math.random() * 100) + 1;
let z = Math.floor(Math.random() * 100) + 1;
let a = Math.floor(Math.random()*899+100);

let sum  = x + y;
let mult = x * y;
let avg  = (x + y + z) / 3;
let res1 = (x + 1) - 2 * (z - 2 * x + y);
let mod3 = x % 3;
let mod5 = x % 5;
let p30  = x + x * 0.3;
let p120 = x + x * 1.2;
let res2 = 0.4 * x + 0.84 * y;
let res3 = parseInt(a/100) + parseInt(a/10) % 10 + a % 10;
let res4 = a - a % 100 + a % 10;
let res5 = 100 * (a % 10) + 10 * (parseInt(a/10) % 10) + parseInt(a/100);
let res6 = a % 2 ? 'odd' : 'even';

console.log(x + ' + ' + y + ' = ' + sum);
console.log(x + ' * ' + y + ' = ' + mult);
console.log(x + ', ' + y + ', ' + z + ' average: ' + avg);
console.log('(' + x + ' + 1) - 2*(' + z + ' - 2*' + x + ' + ' + y + ') = ' + res1);
console.log(x + ' % 3 = ' + mod3);
console.log(x + ' % 5 = ' + mod5);
console.log(x + ' + 30% = ' + p30);
console.log(x + ' + 120% = ' + p120);
console.log('40% ' + x + ' + 84% ' + y + ' = ' + res2);
console.log(a + ' sum = ' + res3);
console.log(a + ' => ' + res4);
console.log(a + ' => ' + res5);
console.log(a + ' is ' + res6);
