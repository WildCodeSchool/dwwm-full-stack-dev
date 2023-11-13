const {Lannister} = require("../../../../resources/JS/Classes/Lannister/Lannister.cjs")

class Tyrion extends Lannister {
   SIZE = "Short"
   sayHello() {
    return "My name is Tyrion"
   }
   
   announceBirth() {
    super.announceBirth()
    console.log(this.sayHello())
}
}


exports.Tyrion = Tyrion