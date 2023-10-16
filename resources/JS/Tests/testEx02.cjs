const { Daenerys } = require("../Classes/Targaryen/Daenerys.cjs");
const { Viserys } = require("../Classes/Targaryen/Viserys.cjs");

const viserys = new Viserys();
const daenerys = new Daenerys();

console.log(`Viserys ${viserys.getBurned()}`);
console.log(`Daenerys ${daenerys.getBurned()}`);
