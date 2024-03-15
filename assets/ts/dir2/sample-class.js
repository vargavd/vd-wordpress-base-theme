"use strict";
var SampleClass2 = (function () {
    function SampleClass2(var1, var2) {
        this.privVar1 = var1;
        this.privVar2 = var2;
    }
    SampleClass2.prototype.printToConsole = function () {
        console.log('privVar1: ' + this.privVar1);
        console.log('privVar2: ' + this.privVar2);
    };
    return SampleClass2;
}());
var sampleObject2 = new SampleClass2("2nd Class 1st value", "2nd Class 2nd value");
sampleObject2.printToConsole();
TWG_TS.HelperClass.printMessageToConsole("Helper message from 2nd Class file");
//# sourceMappingURL=sample-class.js.map