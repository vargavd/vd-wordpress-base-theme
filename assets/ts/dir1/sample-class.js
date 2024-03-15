"use strict";
var SampleClass1 = (function () {
    function SampleClass1(var1, var2) {
        this.privVar1 = var1;
        this.privVar2 = var2;
    }
    SampleClass1.prototype.printToConsole = function () {
        console.log('privVar1: ' + this.privVar1);
        console.log('privVar2: ' + this.privVar2);
    };
    return SampleClass1;
}());
var sampleObject1 = new SampleClass1("1st class 1st value 1", "1st class 2nd value");
sampleObject1.printToConsole();
TWG_TS.HelperClass.printMessageToConsole("Helper message from 1st class file");
//# sourceMappingURL=sample-class.js.map