const { Builder, By, Key, until } = require("selenium-webdriver");
const assert = require("assert");

describe("Usuario puede ver los metadatos del recurso", function () {
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
    it("Usuario puede ver los metadatos del recurso", async function () {
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
        await driver.findElement(By.css(".item:nth-child(5) .name")).click();
        await driver
            .findElement(By.css(".action:nth-child(3) > .material-icons"))
            .click();
        assert(
            (await driver.findElement(By.css("h2:nth-child(1)")).getText()) ==
                "Información del archivo"
        );
        await driver.findElement(By.css(".card-title")).click();
        await driver.findElement(By.css(".button")).click();
        await driver.findElement(By.id("logout")).click();
        await driver.close();
    });
});
