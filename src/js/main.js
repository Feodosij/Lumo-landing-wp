document.addEventListener("DOMContentLoaded", function () {
	const burger = document.getElementById("burger");
	const menu = document.getElementById("menu");
	const menuLinks = document.querySelectorAll(".site-menu__list a");
    const body = document.body;

	burger.addEventListener("click", function () {
		this.classList.toggle("active");
		menu.classList.toggle("active");
        body.classList.toggle("lock");
	});

	menuLinks.forEach((link) => {
		link.addEventListener("click", function () {
			burger.classList.remove("active");
			menu.classList.remove("active");
            body.classList.remove("lock");
		});
	});

	const scrollToTop = document.getElementById("scrollToTop");

	window.addEventListener("scroll", function () {
		if(window.scrollY > 300) {
			scrollToTop.classList.add("visible");
		} else {
			scrollToTop.classList.remove("visible");
		}
	});

	scrollToTop.addEventListener("click", function () {
		window.scrollTo({
			top: 0
		});
	});

});