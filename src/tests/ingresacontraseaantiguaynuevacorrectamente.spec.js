const { Builder, By, Key, until } = require("selenium-webdriver");
const assert = require("assert");

describe("Ingresa contraseña antigua y nueva correctamente", function () {
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
    it("Ingresa contraseña antigua y nueva correctamente", async function () {
        await driver.get("http://localhost:4005/login?redirect=%2Ffiles%2F");
        await driver
            .findElement(By.css(".input:nth-child(3)"))
            .sendKeys("admin");
        await driver
            .findElement(By.css(".input:nth-child(4)"))
            .sendKeys("123456");
        await driver.findElement(By.css(".button")).click();
        await driver
            .findElement(
                By.css("div:nth-child(3) > .action:nth-child(1) > span")
            )
            .click();
        await driver.findElement(By.name("password")).click();
        await driver.findElement(By.name("password")).sendKeys("123456");
        await driver
            .findElement(By.css(".input:nth-child(2)"))
            .sendKeys("123456");
        await driver
            .findElement(By.css(".column:nth-child(2) .button"))
            .click();
        assert(
            (await driver.findElement(By.css(".noty_body")).getText()) ==
                "¡Contraseña actualizada!"
        );
        await driver.findElement(By.css("#logout > span")).click();
        await driver.close();
    });
});
