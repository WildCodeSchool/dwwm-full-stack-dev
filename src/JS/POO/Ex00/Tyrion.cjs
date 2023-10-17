const {
    Lannister,
  } = require("../../../../resources/JS/Classes/Lannister/Lannister.cjs");
  
class Tyrion extends Lannister { 

    SIZE = 'SHORT';
    
    SayHello() {
        return "My name is Tayrion";
    }

    announceBirth() {
        super.announceBirth();
        console.log(this.SayHello());
        }
}

exports.Tyrion = Tyrion;