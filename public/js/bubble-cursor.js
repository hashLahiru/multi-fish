(function bubblesCursor() {
    var width = window.innerWidth;
    var height = window.innerHeight;
    var cursor = {
        x: width / 2,
        y: height / 2,
    };
    var lastCursor = {
        x: width / 2,
        y: height / 2,
    };
    var particles = [];

    function init() {
        bindEvents();
        loop();
    }

    // Bind events
    function bindEvents() {
        document.addEventListener("mousemove", onMouseMove);
        window.addEventListener("resize", onWindowResize);
    }

    function onWindowResize() {
        width = window.innerWidth;
        height = window.innerHeight;
    }

    function onMouseMove(e) {
        cursor.x =
            e.clientX + (window.scrollX || document.documentElement.scrollLeft);
        cursor.y =
            e.clientY + (window.scrollY || document.documentElement.scrollTop);

        if (lastCursor.x > cursor.x + 10 || lastCursor.x < cursor.x - 10) {
            lastCursor.x = e.clientX;
            lastCursor.y = e.clientY;
            addParticle(cursor.x, cursor.y);
        }
    }

    function addParticle(x, y) {
        var particle = new Particle();
        particle.init(x, y);
        particles.push(particle);
    }

    function updateParticles() {
        for (var i = 0; i < particles.length; i++) {
            particles[i].update();
        }

        for (var i = particles.length - 1; i >= 0; i--) {
            if (particles[i].lifeSpan < 0) {
                particles[i].die();
                particles.splice(i, 1);
            }
        }
    }

    function loop() {
        requestAnimationFrame(loop);
        updateParticles();
    }

    function Particle() {
        this.lifeSpan = 300; // ms
        this.initialStyles = {
            position: "absolute",
            display: "block",
            pointerEvents: "none",
            zIndex: "10000000",
            width: "80px", // Increased size
            height: "80px",
            willChange: "transform",
            borderRadius: "50%", // Circular
            background:
                "radial-gradient(circle, rgba(29, 203, 228,0) 0%, rgba(29, 203, 228, 0.5) 100%)",
            opacity: 0.75, // Transparent effect
        };

        this.init = function (x, y) {
            this.velocity = {
                x: (Math.random() < 0.5 ? -1 : 1) * (Math.random() / 10),
                y: -0.4 + Math.random() * -0.8,
            };

            this.position = {
                x: x - 40,
                y: y - 40,
            }; // Centering the bubble

            this.element = document.createElement("span");
            applyProperties(this.element, this.initialStyles);
            this.update();

            document.body.appendChild(this.element);
        };

        this.update = function () {
            this.position.x += this.velocity.x;
            this.position.y += this.velocity.y;

            this.velocity.x += ((Math.random() < 0.5 ? -1 : 1) * 2) / 75;
            this.velocity.y -= Math.random() / 600;
            this.lifeSpan--;

            this.element.style.transform =
                "translate3d(" +
                this.position.x +
                "px, " +
                this.position.y +
                "px, 0) scale(" +
                (0.5 + (300 - this.lifeSpan) / 300) +
                ")";
        };

        this.die = function () {
            if (this.element && this.element.parentNode) {
                this.element.parentNode.removeChild(this.element);
            }
        };
    }

    /**
     * Utility to apply CSS properties
     */
    function applyProperties(target, properties) {
        for (var key in properties) {
            target.style[key] = properties[key];
        }
    }

    init();
})();
