const { Builder, By, Key, until } = require("selenium-webdriver");
const assert = require("assert");

describe("Mostrar dashboard de recursos", function () {
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
    it("Mostrar dashboard de recursos", async function () {
        await driver.get("http://localhost:4005/login?redirect=%2Ffiles%2F");
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
        await driver.findElement(By.css("html")).click();
        await driver.findElement(By.css(".breadcrumbs")).click();
        await driver
            .findElement(
                By.css("#dropdown > .action:nth-child(2) > .material-icons")
            )
            .click();
        await driver.findElement(By.css("#logout > span")).click();
        await driver.close();
    });
});
