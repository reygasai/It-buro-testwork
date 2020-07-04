function pow(x, n) {
    var result = x;
    for(let i = 1; i < n; i++) {
        result *= x; 
    }

    return result;
}

var xValue = prompt("Введите значение x", 1);
var nValue = prompt("Введите значение n", 1);

console.log(pow(xValue, nValue));