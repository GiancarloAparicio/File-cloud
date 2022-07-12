const { Builder, By, Key, until } = require("selenium-webdriver");
const assert = require("assert");

describe("Estudiante no puede subir un recurso", function () {
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
    it("Estudiante no puede subir un recurso", async function () {
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
        {
            const elements = await driver.findElements(
                By.css("#upload-button > .material-icons")
            );
            assert(!elements.length);
        }
        await driver.findElement(By.id("logout")).click();
        await driver.close();
    });
});
