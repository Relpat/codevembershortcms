function doPixiMagic() {
    // Variables
    var window = [];
    window.width = $(window).width(),
        window.height = $(window).height(),
        size = [1920, 1080],
        ratio = size[0] / size[1];

    // Load the Pixi Stage
    var options = {
        transparent: true,
        width: size[0],
        height: size[1]
    };

    var app = new PIXI.Application(options);
    document.body.appendChild(app.view);

    var sprites = new PIXI.Container();
    app.stage.addChild(sprites);

    // create an array to store all the sprites
    var raindrops = [];

    // var totalSprites = app.renderer instanceof PIXI.WebGLRenderer ? 10000 : 100;
    var totalSprites = 500;

    function addTotoro() {
        var totoro = PIXI.Sprite.fromImage('assets/totoro_by_badbird29-d8ee8i5.png');
        sprites.addChild(totoro);
    }

    function addRaindrops(numberOfRaindrops) {
        for (var i = 0; i < numberOfRaindrops; i++) {

            // create a new Sprite
            // var raindrop = PIXI.Sprite.fromImage('assets/totoro_by_badbird29-d8ee8i5.png');

            var raindrop = new PIXI.Graphics();

            // set a fill and line style
            raindrop.beginFill(0xFF3300);
            // raindrop.lineStyle(4, 0xffd900, 1);

            raindrop.moveTo(50, 50);
            raindrop.lineTo(250, 50);
            raindrop.endFill();

            // raindrop.tint = Math.random() * 0xE8D4CD;

            // scatter them all
            raindrop.x = Math.random() * app.renderer.width;
            raindrop.y = 0 * app.renderer.height;

            // raindrop.tint = Math.random() * 0x808080;

            // create a random direction in radians
            // raindrop.direction = Math.PI * 2;

            // this number will be used to modify the direction of the sprite over time
            raindrop.turningSpeed = 1;

            // create a random speed between 0 - 2, and these maggots are slooww
            raindrop.speed = (2 + Math.random() * 2) * 0.2;

            raindrop.offset = Math.random() * 100;

            // finally we push the dude into the maggots array so it it can be easily accessed later
            raindrops.push(raindrop);

            sprites.addChild(raindrop);
        }
    }

    app.ticker.add(function () {
        // iterate through the sprites and update their position
        for (var i = 0; i < raindrops.length; i++) {
            raindrop = raindrops[i];
            raindrop.x += Math.sin(raindrop.direction) * (raindrop.speed * raindrop.scale.y);
            raindrop.y += Math.cos(raindrop.direction) * (raindrop.speed * raindrop.scale.y);
        }
    });

    function initApplication() {
        addTotoro();
        addRaindrops(totalSprites);
    }


    // some magic resize-action
    resize();
    function resize() {
        if (window.innerWidth / window.innerHeight >= ratio) {
            var w = window.innerHeight * ratio;
            var h = window.innerHeight;
        } else {
            var w = window.innerWidth;
            var h = window.innerWidth / ratio;
        }
        app.view.style.width = w + 'px';
        app.view.style.height = h + 'px';
    }
    window.onresize = resize;


    // start the application
    initApplication();
}

$(document).ready(function (index, data) {
    // start it
    doPixiMagic();
});
