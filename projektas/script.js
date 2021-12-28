function burgerMenu() {
    var x = document.getElementById("mMenu");
    var y = document.querySelector("i.burger");
    var z = document.querySelector("i.active");
    if (x.style.opacity === "1") {
        x.style.opacity = "0";
        y.style.display = "block";
        z.style.display = "none";
    } else {
        x.style.opacity = "1";
        y.style.display = "none";
        z.style.display = "block";
    }
}

Fancybox.bind('[data-fancybox="gallery"]', {
    dragToClose: false,

    Toolbar: false,
    closeButton: "top",

    Image: {
        zoom: false,
    },

    on: {
        initCarousel: (fancybox) => {
            const slide = fancybox.Carousel.slides[fancybox.Carousel.page];

            fancybox.$container.style.setProperty(
                "--bg-image",
                `url("${slide.$thumb.src}")`
            );
        },
        "Carousel.change": (fancybox, carousel, to, from) => {
            const slide = carousel.slides[to];

            fancybox.$container.style.setProperty(
                "--bg-image",
                `url("${slide.$thumb.src}")`
            );
        },
    },
});

