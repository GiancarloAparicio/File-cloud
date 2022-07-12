const { Builder, By, Key, until } = require("selenium-webdriver");
const assert = require("assert");

describe("Subir un recurso correctamente", function () {
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
    it("Subir un recurso correctamente", async function () {
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
        await driver
            .findElement(By.css("#upload-button > .material-icons"))
            .click();
        await driver
            .findElement(
                By.css(".card-action > .action:nth-child(1) > .material-icons")
            )
            .click();
        await driver.findElement(By.id("logout")).click();
        await driver.close();
    });
});
