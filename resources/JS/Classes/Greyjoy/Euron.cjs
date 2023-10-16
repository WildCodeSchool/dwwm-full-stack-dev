/* eslint-disable no-console */
/* eslint-disable no-underscore-dangle */
const { Greyjoy } = require('../../../../src/JS/POO/Ex01/Greyjoy.cjs');

class Euron extends Greyjoy {
  announceMotto() {
    console.log(this._familyMotto);
  }
}

exports.Euron = Euron;
