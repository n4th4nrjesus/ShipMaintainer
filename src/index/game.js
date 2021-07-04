function preload() {
  const imgPath = "./assets/img/menu/";

  this.load.image("background", imgPath + "background.png");
}

function create() {
  this.add
    .image(0, 0, "background")
    .setOrigin(0, 0)
    .setDisplaySize($(window).width(), $(window).height());
}

function update() {}

$(window).on("load", () => {
  const gameConfig = {
    type: Phaser.AUTO,
    width: "100%",
    height: "100%",
    scene: {
      preload: preload,
      create: create,
      update: update,
    },
  };
  var game = new Phaser.Game(gameConfig);
});
