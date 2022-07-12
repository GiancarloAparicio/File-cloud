const { Builder, By, Key, until } = require("selenium-webdriver");
const assert = require("assert");

describe("Cierra session exitosamente", function () {
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
    it("Cierra session exitosamente", async function () {
        await driver.get("http://localhost:4006//");
        await driver.findElement(By.css(".input:nth-child(3)")).click();
        await driver
            .findElement(By.css(".input:nth-child(3)"))
            .sendKeys("admin");
        await driver
            .findElement(By.css(".input:nth-child(4)"))
            .sendKeys("123456");
        await driver
            .findElement(By.css(".input:nth-child(4)"))
            .sendKeys(Key.ENTER);
        await driver.findElement(By.id("logout")).click();
        {
            const elements = await driver.findElements(By.css(".button"));
            assert(elements.length);
        }
        await driver.close();
    });
});
