const { Builder, By, Key, until } = require("selenium-webdriver");
const assert = require("assert");

describe("Credenciales invalidas", function () {
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
    it("Credenciales invalidas", async function () {
        await driver.get("http://localhost:4006//");
        await driver.findElement(By.css(".input:nth-child(3)")).click();
        await driver
            .findElement(By.css(".input:nth-child(3)"))
            .sendKeys("admin");
        await driver
            .findElement(By.css(".input:nth-child(4)"))
            .sendKeys("fail");
        await driver.findElement(By.css(".button")).click();
        assert(
            (await driver.findElement(By.css(".wrong")).getText()) ==
                "Usuario y/o contraseña incorrectos"
        );
        await driver.close();
    });
});
