<?php
  include 'ParentClass.php';
  include 'ChildClass.php';

  $cat = new ParentClass("Cat", "small", 4);
  $human = new ParentClass("Human", "medium", 2);
  $whale = new ChildClass("Whale", "large", 0, false);
  $seaOtter = new ChildClass("Sea otter", "small", 4, true);

  $mammals = array($cat, $human, $whale, $seaOtter);
?>

<!doctype html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <title>Assignment 3</title>

      <link rel="stylesheet" href="assignment3.css">
  </head>
  <body>
    <h1>Imagine your are the creator of this world...</h1>
    <p class="narrator">One day you are looking at some of your creatures: <br><p>
    <p class="info">
      <?php foreach($mammals as $m) { ?>
        <?= $m; ?><br>
      <?php } ?>
    </p>
    <p class="narrator">Then you realize that you just really love cats, how dare human pet cats?<br>
      Therefore, you made cats larger than human.<br>
      <?php
        $cat->setSize("large");
      ?>
      Now you look at them:
    </p>
    <p class="info">
      <?php foreach($mammals as $m) { ?>
        <?= $m; ?><br>
      <?php } ?>
    </p>
    <p class = "narrator">
      As human population growth has became a problem, you decide to make them become marine mammals, so they have less
      pressure about their living space as well as making this change a compensate for not being able to pet cats any more.
      <br>You look at these mammals again:
    </p>
    <?php
      $human = new ChildClass("Human", "medium", 2, true);
      $mammals = array($cat, $human, $whale, $seaOtter);
    ?>
    <p class="info">
      <?php foreach($mammals as $m) { ?>
        <?= $m; ?><br>
      <?php } ?>
    </p>
    <p class = "narrator">
      After losing cats, humans feel so lonely. You as the creator cannot watch them living in the days missing the cats.
      You figured sea otters are as cute as cats when they are standing like humans with two foot and they are marine mammals
      like new humans, so you make them have two legs instead of four.<br>
      Finally, you look at these mammals:
    </p>
    <?php
      $seaOtter->setNumOfLegs(2);
    ?>
    <p class="info">
      <?php foreach($mammals as $m) { ?>
        <?= $m; ?><br>
      <?php } ?>
    </p>
  <p class = "narrator">
    Thanks to their kind-hearted creator, they are all living happily now.
  </p>
  </body>
</html>