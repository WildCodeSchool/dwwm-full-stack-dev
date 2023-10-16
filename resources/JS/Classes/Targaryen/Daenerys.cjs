const { Targaryen } = require("../../../../src/JS/POO/Ex02/Targaryen.cjs");

class Daenerys extends Targaryen {
  resistsFire() {
    return true;
  }
}

exports.Daenerys = Daenerys;
