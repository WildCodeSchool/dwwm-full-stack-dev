const { Lannister } = require('../../../../resources/JS/Classes/Lannister/Lannister.cjs');
const { Tyrion } = require('../../../../src/JS/POO/Ex00/Tyrion.cjs');

test('should announce his birth', () => {
  console.log = jest.fn();
  const tyrion = new Tyrion();
  expect(console.log).toHaveBeenNthCalledWith(1, Lannister.BIRTH_ANNOUNCEMENT);
  expect(console.log).toHaveBeenNthCalledWith(2, Tyrion.BIRTH_ANNOUNCEMENT);
  expect(tyrion.getSize()).toEqual(tyrion.SIZE);
  expect(tyrion.getHouseMotto()).toEqual(Lannister.HOUSE_MOTTO);
});
