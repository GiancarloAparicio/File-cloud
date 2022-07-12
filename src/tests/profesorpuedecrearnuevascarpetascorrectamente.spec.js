const { Builder, By, Key, until } = require("selenium-webdriver");
const assert = require("assert");

describe("Profesor puede crear nuevas carpetas correctamente", function () {
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
    it("Profesor puede crear nuevas carpetas correctamente", async function () {
        await driver.get("http://localhost:4006//");
        await driver
            .findElement(By.css(".input:nth-child(3)"))
            .sendKeys("profesor1");
        await driver
            .findElement(By.css(".input:nth-child(4)"))
            .sendKeys("profesor");
        await driver.findElement(By.css(".button")).click();
        await driver
            .findElement(
                By.css("div:nth-child(2) > .action:nth-child(1) > span")
            )
            .click();
        await driver.findElement(By.css(".input")).click();
        await driver.findElement(By.css(".input")).sendKeys("nuevo curso");
        await driver.findElement(By.css(".button:nth-child(2)")).click();
        assert(
            (await driver.findElement(By.linkText("nuevo curso")).getText()) ==
                "nuevo curso"
        );
        await driver.findElement(By.css("#logout > span")).click();
        await driver.close();
    });
});
