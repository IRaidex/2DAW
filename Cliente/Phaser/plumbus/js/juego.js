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
var scoreText = '';
var levelText;
var nivel = 1;
var end = '';
var puntuaciones = [];

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
    this.physics.add.collider(plataforms, portalgun);
    this.physics.add.collider(plataforms, portal);

    this.physics.add.overlap(player,portalgun,hitPistola,null,this);
    this.physics.add.overlap(player,portal,hitPortal,null,this);

    timecops = this.physics.add.group();

    this.physics.add.collider(plataforms, timecops);

    this.physics.add.overlap(player,timecops,hitTimecops,null,this);

    scoreText = this.add.text(16, 54, 'Score: 0', { fontSize: '32px', fill: '#000'});
    levelText = this.add.text(16, 25, 'Level: 1', { fontSize: '32px', fill: '#000'});
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

    if (gameOver){

        return;

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

function hitPistola (player, portalgun){

    portalgun.disableBody(true,true);
    portal.enableBody(true, Phaser.Math.Between(10, 790), posicionesY[Phaser.Math.Between(0, 2)],true, true);

}

function hitPortal (player, portal){

    nivel++;

    portal.disableBody(true,true);
    player.disableBody(true,true);

    plumbus.children.iterate(function (child){
        child.enableBody(true, child.x, 0, true, true);
        createPlumbus(child);
    });

    player.enableBody(true, Phaser.Math.Between(10, 790), posicionesY[Phaser.Math.Between(0, 2)],true, true);
    portalgun.enableBody(true, Phaser.Math.Between(10, 790), posicionesY[Phaser.Math.Between(0, 2)],true, true);
    levelText.setText('Level: '+ nivel);

    if(nivel % 2 == 0){

        var x = (player.x < 400) ? Phaser.Math.Between(400, 800) : Phaser.Math.Between(0, 400);
        var timecop = timecops.create(x, 16, 'enemigo');
        timecop.setBounce(1);
        timecop.setCollideWorldBounds(true);
        timecop.setVelocity(Phaser.Math.Between(-200, 200), 50);
        timecop.allowGravity = false;

    }

}

function hitTimecops (player, timecops){

    this.physics.pause();
    player.setTint(0xff0000);
    player.anims.play('turn');
    gameOver = true;
    this.add.image(400,300 ,'fondoNegro');
    end = this.add.text(200, 100, 'GAME OVER', { fontSize: '75px', fill: 'red'});

    if(localStorage.getItem('topScore') != null){

        puntuaciones = localStorage.getItem('topScore');
        puntuaciones = JSON.parse(puntuaciones);
        if(puntuaciones.length == 5){
            if( puntuaciones[4] < score){
                puntuaciones[4] = score;
            }
        }else{
            console.log(1);
            puntuaciones.push(score);
        }
        console.log(puntuaciones);

        for(var i=0 ; i<puntuaciones.length ; i++){
            if(puntuaciones[4] < score){
                puntuaciones[4] = score;
            }
        }

        puntuaciones.sort(function(a,b){return a - b;});
        puntuaciones.reverse();
        localStorage.setItem('topScore', JSON.stringify(puntuaciones));

    }else{
        puntuaciones.push(score);
        localStorage.setItem('topScore', JSON.stringify(puntuaciones));
    }

    var x = 150;
    for(var i=0 ; i<puntuaciones.length ; i++){
        x += 50;
        end = this.add.text(295, x, i+1+' => '+puntuaciones[i], { fontSize: '50px', fill: 'red'});
    }
    
    scoreText = this.add.text(20, 510, 'Score: '+score, { fontSize: '40px', fill: 'white'});
    levelText = this.add.text(20, 550, 'Level: '+nivel, { fontSize: '40px', fill: 'white'});



}