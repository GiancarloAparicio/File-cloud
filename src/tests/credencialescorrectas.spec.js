const { Builder, By, Key, until } = require("selenium-webdriver");
const assert = require("assert");

describe("Credenciales correctas", function () {
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
    it("Credenciales correctas", async function () {
        await driver.get("http://localhost:4006//");
        await driver
            .findElement(By.css(".input:nth-child(3)"))
            .sendKeys("admin");
        await driver
            .findElement(By.css(".input:nth-child(4)"))
            .sendKeys("123456");
        await driver.findElement(By.css(".button")).click();
        await driver.findElement(By.css("input:nth-child(2)")).click();
        await driver.findElement(By.css("input:nth-child(2)")).click();
        await driver.findElement(By.css("#logout > span")).click();
        await driver.close();
    });
});
