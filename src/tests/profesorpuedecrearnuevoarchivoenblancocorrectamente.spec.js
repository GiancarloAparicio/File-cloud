const { Builder, By, Key, until } = require("selenium-webdriver");
const assert = require("assert");

describe("Profesor puede crear nuevo archivo en blanco correctamente", function () {
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
    it("Profesor puede crear nuevo archivo en blanco correctamente", async function () {
        await driver.get("http://localhost:4006//");
        await driver.findElement(By.css(".input:nth-child(3)")).click();
        await driver
            .findElement(By.css(".input:nth-child(3)"))
            .sendKeys("profesor1");
        await driver
            .findElement(By.css(".input:nth-child(4)"))
            .sendKeys("profesor");
        await driver
            .findElement(By.css(".input:nth-child(4)"))
            .sendKeys(Key.ENTER);
        await driver
            .findElement(
                By.css("div:nth-child(2) > .action:nth-child(2) > span")
            )
            .click();
        await driver.findElement(By.css(".input")).sendKeys("notas2.txt");
        await driver.findElement(By.css(".button:nth-child(2)")).click();
        assert(
            (await driver
                .findElement(By.css("span:nth-child(2) > span:nth-child(2)"))
                .getText()) == "notas2.txt"
        );
        await driver
            .findElement(By.css("#save-button > .material-icons"))
            .click();
        await driver
            .findElement(
                By.css("header > .action:nth-child(1) > .material-icons")
            )
            .click();
        await driver.findElement(By.css("#logout > span")).click();
        await driver.close();
    });
});
