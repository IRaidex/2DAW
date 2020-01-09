var config = {
	type: Phaser.AUTO,
	width: 1000,
	height: 750,
	physics: {
		default: 'arcade',
		arcade: {
			gravity: { x: 50, y: -100 }
		}
	},
	scene: {
		preload: preload,
		create: create
	}
};

var game = new Phaser.Game(config);

function preload () {
	
	this.load.image('rick', 'http://localhost.Phaser/img/rick.png');
	this.load.image('nave', 'http://localhost.Phaser/img/nave.png');
	this.load.image('fondo', 'http://localhost.Phaser/img/fondo.png');
	
	// http://labs.phaser.io/assets/
	this.load.setBaseURL('http://labs.phaser.io');
	//this.load.image('sky', 'assets/skies/space3.png');
	//this.load.image('logo', 'assets/sprites/phaser3-logo.png');
	this.load.image('red', 'assets/particles/blue.png');
}

function create () {
	this.add.image(500, 375, 'fondo');

	var particles = this.add.particles('red');

	var emitter = particles.createEmitter({
		speed: 100,
		scale: { start: .2, end: 0 },
		blendMode: 'ADD'
	});

	var nave = this.physics.add.image(10, 400, 'nave');

	nave.setVelocity(400, 600);
	nave.setBounce(1, 1);
	nave.setCollideWorldBounds(true);

	emitter.startFollow(nave);
}