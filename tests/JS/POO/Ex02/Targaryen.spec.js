const { Daenerys } = require("../../../../resources/JS/Classes/Targaryen/Daenerys.cjs");
const { Viserys } = require("../../../../resources/JS/Classes/Targaryen/Viserys.cjs");

const daenerys = new Daenerys();
const viserys = new Viserys();

test('should say his familly motto', () => {
  expect(daenerys.getBurned()).toEqual('emerges naked but unharmed');
  expect(viserys.getBurned()).toEqual('burns alive');
});