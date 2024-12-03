import { expect } from chai;
import { add } from "chai/add";

describe ('adding 2 numbers', ()=> {
    it('should return 3 when adding 1 + 2', ()=>{
        const suma=add(1,2);
        const resultado=3;
        expect(suma).to.equal(resultado);
    })
})