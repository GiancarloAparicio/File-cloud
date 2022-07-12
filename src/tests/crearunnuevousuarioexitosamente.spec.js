const { Builder, By, Key, until } = require("selenium-webdriver");
const assert = require("assert");

describe("Crear un nuevo usuario exitosamente", function () {
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
    it("Crear un nuevo usuario exitosamente", async function () {
        await driver.get("http://localhost:4005/login?redirect=%2Ffiles%2F");
        await driver.manage().window().setRect({ width: 1564, height: 869 });
        await driver.findElement(By.css("p")).click();
        await driver.findElement(By.css(".input:nth-child(3)")).click();
        await driver
            .findElement(By.css(".input:nth-child(3)"))
            .sendKeys("estudiante4");
        await driver.findElement(By.css(".input:nth-child(4)")).click();
        await driver
            .findElement(By.css(".input:nth-child(4)"))
            .sendKeys("123456");
        await driver
            .findElement(By.css(".input:nth-child(5)"))
            .sendKeys("123456");
        await driver
            .findElement(By.css(".input:nth-child(5)"))
            .sendKeys(Key.ENTER);
        await driver
            .findElement(
                By.css("#dropdown > .action:nth-child(1) > .material-icons")
            )
            .click();
        await driver.findElement(By.css("#logout > span")).click();
        await driver.close();
    });
});
