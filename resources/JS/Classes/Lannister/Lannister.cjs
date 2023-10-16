/* eslint-disable class-methods-use-this */
class Lannister {
  static BIRTH_ANNOUNCEMENT = 'A Lannister is born !';

  static HOUSE_MOTTO = 'Hear me roar!';

  SIZE = 'Average';

  needBirthAnnouncement = true;

  constructor(needBirthAnnouncement = true) {
    this.needBirthAnnouncement = needBirthAnnouncement;
    this.announceBirth();
  }

  getSize() {
    return this.SIZE;
  }

  getHouseMotto() {
    return Lannister.HOUSE_MOTTO;
  }

  announceBirth() {
    if (this.needBirthAnnouncement) {
      // eslint-disable-next-line no-console
      console.log(Lannister.BIRTH_ANNOUNCEMENT);
    }
  }
}

exports.Lannister = Lannister;
