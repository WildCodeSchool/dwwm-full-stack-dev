const { Euron } = require('../../../../resources/JS/Classes/Greyjoy/Euron.cjs');

test('should say his familly motto', () => {
  console.log = jest.fn();
  new Euron().announceMotto();
  expect(console.log).toHaveBeenNthCalledWith(1, 'We do not sow');
});
