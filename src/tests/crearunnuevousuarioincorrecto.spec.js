const { Builder, By, Key, until } = require("selenium-webdriver");
const assert = require("assert");

describe("Crear un nuevo usuario incorrecto", function () {
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
    it("Crear un nuevo usuario incorrecto", async function () {
        await driver.get("http://localhost:4006//");
        await driver.findElement(By.css("p")).click();
        await driver.findElement(By.css(".input:nth-child(3)")).click();
        await driver
            .findElement(By.css(".input:nth-child(3)"))
            .sendKeys("estudiante10");
        await driver.findElement(By.css(".input:nth-child(4)")).click();
        await driver
            .findElement(By.css(".input:nth-child(4)"))
            .sendKeys("sfag");
        await driver.findElement(By.css(".input:nth-child(5)")).click();
        await driver
            .findElement(By.css(".input:nth-child(5)"))
            .sendKeys("yqbdfh");
        await driver.findElement(By.css(".button")).click();
        assert(
            (await driver.findElement(By.css(".wrong")).getText()) ==
                "Las contraseñas no coinciden"
        );
        await driver.close();
    });
});
