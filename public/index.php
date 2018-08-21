<!DOCTYPE html>

<html>

    <head>
        <title>Home</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="assets/stylesheets/main.css">
    </head>

    <body>

        <!-- Header -->

        <?php
            require('header.php');
        ?>

        <!-- Hero -->

        <section class="hero container">

          <h2>Learn => Code => Master</h2>

          <p>Code is not something which you write on paper! <br>
              It is to be run on a machine!</p>

        <?php
              if(!isset($_SESSION['user']))
              {
                  echo "<a class='btn btn-alt' href='register_form.php'>Register Now</a>";
              }
        ?>

        </section>

        <!-- Teasers -->

        <section class="row">
          <div class="grid">

            <!-- Register -->

            <section class="teaser col-1-3">

              <a href="rankings.html">
                <h2>Leaderboard</h2>
                <p>See where you stand among your friends.
                    After all competition is good for your brain!</p>
                <a class="btn btn-default" href="rankings.html">Rankings</a>
              </a>

            </section><!--

            Practice

            --><section class="teaser col-1-3">

              <a href="practice.php">
                <h2>Workout for your brain</h2>
                <p>Everyone starts with a brute force solution.
                    But with practice you will rise above arrays!</p>
                <a class="btn btn-default" href="practice.php">Practice</a>
              </a>

            </section><!--

            About Us

            --><section class="teaser col-1-3">

              <a href="about.html">
                <h2>Know more about us</h2>
                <p>More about our mission and what we stand for. And how to reach us!</p>
                <a class="btn btn-default" href="about.html">About Us</a>
              </a>

            </section>

          </div>
        </section>

        <?php
            require('footer.php');
        ?>

    </body>

</html>