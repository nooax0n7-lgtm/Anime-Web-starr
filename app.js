document.addEventListener("DOMContentLoaded", function () {

    const elements = document.querySelectorAll(".reveal");

    const observer = new IntersectionObserver(
        function (entries) {

            entries.forEach(function (entry) {

                if (entry.isIntersecting) {

                    entry.target.classList.add("show");

                    observer.unobserve(entry.target);

                }

            });

        },
        {
            threshold: 0.15
        }
    );

    elements.forEach(function (element) {

        observer.observe(element);

    });

});
