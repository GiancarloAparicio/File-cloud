import AOS from "aos"; //https://github.com/michalsnik/aos
import "aos/dist/aos.css";

require("./bootstrap");

require("alpinejs");

AOS.init({
    duration: 1000,
    initClassName: "aos-init",
});
