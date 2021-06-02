<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="shortcut icon" href="d1.jpg" type="image/png" sizes="100x100">
  <title>Dave|Biography</title>

</head>

<style>
  table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 80%;
  }

  td,
  th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
  }

  tr:nth-child(even) {
    background-color: #dddddd;
  }
</style>

<body>


  <center>


    <div style="margin-top:20px;" id="korean">
      <h1>---나의 자서전---</h1>
      <button style="size:10px;"  id="translate" class="btn btn-outline-danger btn-sm">tranlate</button>
    </div>


  <hr>
    <br><br>
    <script>
      $("#translate").click(function () {
        $.ajax({
          url: "ajax.txt", success: function (result) {
            $("#korean").html(result);
          }
        });
      });

    </script>


    <img style="height: 12%; width: 25%;" id="profilePic" src="1.jpg"><br>
    <p style="display: none;" id="profileDescribe"> This is my Profile Picture.</p>





    <p style="margin-right:100px; margin-left: 100px; "> By the way, I am Dave Lyndrex Millan, 19 years of existence.
      All the way from Dalaguete, province of Cebu.
      I am a Passerelles Numeriques scholar and currently studying at University of San Carlos Talamban Campus.
      I also currently living in Nasipit Talamban, Cebu City. I love sports specially volleyball, basketball, and
      badminton.
      I also oftenly play esports/games either mobile games like mobile legends or computer games like DOTA and
      Crossfire. I love pets, I have fishes, hamsters, cat, and birds there in my home town. I am also a nature
      lover, I value the beauty of nature. And lastly, I am always believe in the essence of the Law of
      Attraction.
      SKL!</p>




    <div id="dave">
      <h2>Show more pictures of me?</h2>
      <button type="button" id="pictures" class="btn btn-primary">Click Here</button>
    </div>




    <script>
      $("#pictures").click(function () {
        $.ajax({
          url: "ajax.html", success: function (result) {
            $("#dave").html(result);
          }
        });
      });

    </script>

    <br><br><br><br>
    <div class="container">
      <h2>- - MY FRIENDS - -</h2> <br>
      <div class="onmouseClick">
        <img style="width: 25%; height: 22%;" class="socialMedia"
          data-link="https://www.linkedin.com/in/guian-carlo-8042081a2/" src="guian.png">

        <p>One of my friend says that I am a sporty person.</p>
        <h3>-Guian victor Amancio</h3>

        <p>Doubleclick the photo to see more info about him.</p>
      </div>
      <div class="onmouseClick">
        <img style="width: 25%; height: 22%;" class="socialMedia"
          data-link="https://www.linkedin.com/in/jepoy-obiedo-7535481a1/" src="justine.jpg">

        <p>Another friend of mine says that I am a shy type.</p>
        <h3>-Justine Ambrad</h3>

        <p>Doubleclick the photo to see more info about him.</p>

      </div>
    </div>

    <br><br><br>
    <script>

      $("#profilePic").mouseenter(function () {
        $("#profileDescribe").fadeToggle();

      })
      $("#profilePic").mouseleave(function () {
        $("#profileDescribe").fadeToggle();

      })
      $("#profilePic").click(function () {
        $(".onmouseClick").toggle();
      })
      $(".socialMedia").dblclick(function () {
        window.location.href = $(this).data("link");
      })
      $(".btn").click(function () {
        $(".socialMedia").animate({
          height: '10%',
          width: '10%'

        })
      })
    </script>

    <h3>See more comments of my friends?</h3>
    <table id="body">
      <button type="button" id="commentBtn" class="btn btn-primary"> Click here </button>
      <br><br>
      <tr>
        <th>--- MY FRIENDS ---</th>
        <th>--- Comments on me ---</th>
      </tr>
    </table>

    <script>
      $(document).ready(function () {
        $("#commentBtn").click(function () {

          $.getJSON("https://testapi.io/api/dave08/updated", function (data) {
            console.log(data)
            $.each(data, function (index) {
              $("#body").append('<tr><th>' + data[index].name + '</th><th>' + data[index].comment + '</th></tr>');
            });
            $("#commentBtn").attr("disabled", "disabled");
          });

        });

      });

    </script>

    <br><br><br><br>
    <footer>
      © Copyright 2021, All Rights Reserved
    </footer>
  </center>

</body>

</html>