//Encriptação com SHA
console.log("Encriptação com SHA");

var sha256 = require('js-sha256').sha256;
var hash = 'Seguranca Informatica';

console.log("Antes de encriptação: ", hash);

hash = sha256(hash);
console.log("Depois da encriptação: ", hash);

//Encriptação com base64
console.log("Encriptação com base64");

var Base64 = require('js-base64').Base64;
var hash = 'Seguranca Informatica';

console.log("Antes da encriptação: ", hash);

hash = Base64.encode(hash);
console.log("Depois da encriptação: ", hash);

hash = Base64.decode(hash);
console.log("Depois da desencriptação: ", hash);