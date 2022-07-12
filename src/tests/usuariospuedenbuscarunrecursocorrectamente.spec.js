const { Builder, By, Key, until } = require("selenium-webdriver");
const assert = require("assert");

describe("Usuarios pueden buscar un recurso correctamente", function () {
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
    it("Usuarios pueden buscar un recurso correctamente", async function () {
        await driver.get("http://localhost:4006//");
        await driver
            .findElement(By.css(".input:nth-child(3)"))
            .sendKeys("estudiante");
        await driver
            .findElement(By.css(".input:nth-child(4)"))
            .sendKeys("123456");
        await driver
            .findElement(By.css(".input:nth-child(4)"))
            .sendKeys(Key.ENTER);
        await driver.findElement(By.css("input:nth-child(2)")).click();
        await driver
            .findElement(By.css("div:nth-child(4) > .material-icons"))
            .click();
        await driver.findElement(By.css("input:nth-child(2)")).click();
        await driver
            .findElement(By.css("input:nth-child(2)"))
            .sendKeys("type:pdf");
        await driver
            .findElement(By.css("input:nth-child(2)"))
            .sendKeys(Key.ENTER);
        {
            const element = await driver.findElement(By.css("a > span"));
            await driver
                .actions({ bridge: true })
                .moveToElement(element)
                .perform();
        }
        await driver.findElement(By.css("a > span")).click();
        {
            const element = await driver.findElement(
                By.linkText("Organigrama junio 2022.pdf")
            );
            await driver
                .actions({ bridge: true })
                .moveToElement(element)
                .perform();
        }
        await driver
            .findElement(
                By.css("#dropdown > .action:nth-child(2) > .material-icons")
            )
            .click();
        assert(
            (await driver.findElement(By.css("h2")).getText()) ==
                "Información del archivo"
        );
        await driver.findElement(By.css(".button")).click();
        await driver
            .findElement(
                By.css("header > .action:nth-child(1) > .material-icons")
            )
            .click();
        await driver.findElement(By.css("#logout > span")).click();
        await driver.close();
    });
});
