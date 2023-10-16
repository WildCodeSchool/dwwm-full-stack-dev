class Lannister {
  BIRTH_ANNOUNCEMENT = 'A Lannister is born !';

  HOUSE_MOTTO = 'Hear me roar!';

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
    return this.HOUSE_MOTTO;
  }

  announceBirth() {
    if (this.needBirthAnnouncement) {
      // eslint-disable-next-line no-console
      console.log(this.BIRTH_ANNOUNCEMENT);
    }
  }
}

exports.Lannister = Lannister;
