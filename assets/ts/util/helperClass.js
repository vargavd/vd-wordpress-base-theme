"use strict";
var TWG_TS;
(function (TWG_TS) {
    var HelperClass = (function () {
        function HelperClass() {
        }
        HelperClass.printMessageToConsole = function (message) {
            console.info("From Helper Class: " + message);
        };
        return HelperClass;
    }());
    TWG_TS.HelperClass = HelperClass;
})(TWG_TS || (TWG_TS = {}));
//# sourceMappingURL=helperClass.js.map