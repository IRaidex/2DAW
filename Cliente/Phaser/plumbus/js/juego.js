var config = {
    type: Phaser.AUTO,
    width: 800,
    height: 600,
    physics: {
        default: 'arcade' ,
        arcade: {
            gravity: { y: 300},
            debug: false
        }
    },
    scene: {
        preload: preload,
        create: create,
        update: update
    }
};

var game = new Phaser.Game(config);

var player;
var plumbus;
var timecops;
var portalgun;
var portal;
var plataforms;
var cursors;
var score=0;
var gameOver = false;
var scoreText;
var levelText;
var nivel = 1;

var posicionesY = [400, 250, 200];

function preload ()
{
    this.load.image('fondo','/assets/fondo.png');
    this.load.image('fondoNegro','/assets/fondonegro.png');
    this.load.image('plataforma','/assets/platform.png');
    this.load.image('plumbus','/assets/plumbus.png');
    this.load.image('portal','/assets/portal.png');
    this.load.image('portalgun','/assets/portalgun.png');
    this.load.image('enemigo','/assets/timecop.png');
    this.load.spritesheet('morty','/assets/morty.png', { frameWidth: 32, frameHeight: 40 });
}

function create ()
{   

    this.add.image(400,300 ,'fondo');
    plataforms = this.physics.add.staticGroup();

    plataforms.create(400, 575, 'plataforma').setScale(1.1).refreshBody();

    plataforms.create(600,400, 'plataforma').setScale(0.5).refreshBody();
    plataforms.create(50,250, 'plataforma').setScale(0.5).refreshBody();
    plataforms.create(750,220, 'plataforma').setScale(0.5).refreshBody();

    player = this.physics.add.sprite(100, 450, 'morty');

    player.setBounce(0);
    player.setCollideWorldBounds(true);

    this.anims.create({
        key: 'derecha',
        frames: this.anims.generateFrameNumbers('morty', {start: 5, end: 8}),
        frameRate: 10,
        repeat: -1
    });

    this.anims.create({
        key: 'izquierda',
        frames: this.anims.generateFrameNumbers('morty', {start: 3, end: 0}),
        frameRate: 10,
        repeat: -1
    });

    this.anims.create({
        key: 'parado',
        frames: [ { key: 'morty', frame: 4} ],
        frameRate: 10,
        repeat: -1
    });

    this.physics.add.collider(player, plataforms);

    cursors= this.input.keyboard.createCursorKeys();

    plumbus = this.physics.add.group({
        key: 'plumbus',
        repeat: 3
    });

    this.physics.add.collider(plataforms, plumbus);

    plumbus.children.iterate(function (child){
        createPlumbus(child);
    });

    this.physics.add.overlap(player,plumbus,collectPlumbus,null,this);
    
    portalgun = this.physics.add.image(Phaser.Math.Between(10, 790), posicionesY[Phaser.Math.Between(0, 2)], 'portalgun');
    portal = this.physics.add.image(400, 400, 'portal');
    portal.disableBody(true, true);
    
    this.physics.add.collider(plataforms, plumbus);
    
    scoreText = this.add.text(16, 54, 'Score: 0', { fontSize: '32px', fill: '#000'});
}

function update ()
{
    if (cursors.left.isDown){

        player.anims.play('izquierda', true);
        player.setVelocityX(-130);

    }else if(cursors.right.isDown){

        player.anims.play('derecha', true);
        player.setVelocityX(130);

    }else{

        player.anims.play('parado', false);
        player.setVelocityX(0);

    }

    if (cursors.up.isDown && player.body.touching.down){
        player.setVelocityY(-350);
    }

}

function createPlumbus (plumbus){

    plumbus.setBounceY(Phaser.Math.FloatBetween(0.4, 0.8));
    plumbus.x = Phaser.Math.Between(10, 790);
    plumbus.y = posicionesY[Phaser.Math.Between(0, 2)];
}

function collectPlumbus (player, plumbus){

    plumbus.disableBody(true, true);

    score += 10 * nivel;
    scoreText.setText('Score: '+ score);

}