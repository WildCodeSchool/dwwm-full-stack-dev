const { Lannister } = require('../../../../resources/JS/Classes/Lannister/Lannister.cjs');

class Tyrion extends Lannister {
  static BIRTH_ANNOUNCEMENT = 'My name is Tyrion';

  SIZE = 'Short';

  static sleepWith(spleeper) {
    const answer = spleeper instanceof Lannister ? "Not even if I'm drunk !" : "Let's do this.";

    // eslint-disable-next-line no-console
    console.log(answer);

    return answer;
  }

  announceBirth() {
    if (!this.needBirthAnnouncement) {
      return;
    }

    super.announceBirth();
    // eslint-disable-next-line no-console
    console.log(Tyrion.BIRTH_ANNOUNCEMENT);
  }
}

exports.Tyrion = Tyrion;
