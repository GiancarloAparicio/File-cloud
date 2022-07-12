const { Builder, By, Key, until } = require("selenium-webdriver");
const assert = require("assert");

describe("Descargar un recurso correctamente", function () {
    this.timeout(30000);
    let driver;
    let vars;
    beforeEach(async function () {
        driver = await new Builder().forBrowser("chrome").build();
        vars = {};
    });
    afterEach(async function () {
        await driver.quit();
    });
    async function waitForWindow(timeout = 2) {
        await driver.sleep(timeout);
        const handlesThen = vars["windowHandles"];
        const handlesNow = await driver.getAllWindowHandles();
        if (handlesNow.length > handlesThen.length) {
            return handlesNow.find((handle) => !handlesThen.includes(handle));
        }
        throw new Error("New window did not appear before timeout");
    }
    it("Descargar un recurso correctamente", async function () {
        await driver.get("http://localhost:4006//");
        await driver.findElement(By.css(".input:nth-child(3)")).click();
        await driver
            .findElement(By.css(".input:nth-child(3)"))
            .sendKeys("estudiante");
        await driver
            .findElement(By.css(".input:nth-child(4)"))
            .sendKeys("123456");
        await driver
            .findElement(By.css(".input:nth-child(4)"))
            .sendKeys(Key.ENTER);
        await driver.findElement(By.css(".item:nth-child(8) .name")).click();
        vars["windowHandles"] = await driver.getAllWindowHandles();
        await driver
            .findElement(
                By.css("#dropdown > .action:nth-child(2) > .material-icons")
            )
            .click();
        vars["win1436"] = await waitForWindow(2000);
        vars["root"] = await driver.getWindowHandle();
        await driver.switchTo().window(vars["win1436"]);
        await driver.close();
        await driver.switchTo().window(vars["root"]);
        await driver.findElement(By.css("#logout > span")).click();
        await driver.close();
    });
});
