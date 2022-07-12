const { Builder, By, Key, until } = require("selenium-webdriver");
const assert = require("assert");

describe("Estudiante no puede crear una nueva carpeta", function () {
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
    it("Estudiante no puede crear una nueva carpeta", async function () {
        await driver.get("http://localhost:4006//");
        await driver
            .findElement(By.css(".input:nth-child(3)"))
            .sendKeys("estudiante");
        await driver
            .findElement(By.css(".input:nth-child(4)"))
            .sendKeys("123456");
        await driver.findElement(By.css(".button")).click();
        {
            const text = await driver
                .findElement(By.css("div:nth-child(2) > .action:nth-child(1)"))
                .getText();
            assert(text !== "Nueva carpeta");
        }
        await driver.findElement(By.css("#logout > span")).click();
        await driver.close();
    });
});
