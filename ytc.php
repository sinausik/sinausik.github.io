<!DOCTYPE html>
<html>
	<head>
		<?php include 'atasan.php' ?>
    <style>
    .slideshow {display:none;}
    </style>
	</head>
	<body>
	<div id="main">
		<div class="row">
      <div class="col-12">
        <h2>YOUTUBE CREATOR</h2>

        <div class="col-9">
          <img class="slideshow" src="img/yt-sobatjogja.png" alt="YouTube Channel Sobat Jogja" title="YouTube Channel Sobat Jogja">
          <img class="slideshow" src="img/yt-madcameron.png" alt="YouTube Channel Mad Cameron" title="YouTube Channel Mad Cameron">
        </div>

        <div class="col-3 formulir">
          <form action="index.php">
            <input type="submit" value="KEMBALI">
          </form>
					<p>Merupakan beberapa YouTube Channel yang sudah ditonton ratusan ribu kali dalam sebulan.</p>
        </div>

				<div class="col-3 kolom">
					<?php include 'portofolio.php' ?>
				</div>
      </div>
    </div>
		<div class="bawahan">
			<?php include 'bawahan.php';?>
		</div>
	</div>
  <script>
    var myIndex = 0;
    carousel();

    function carousel() {
        var i;
        var x = document.getElementsByClassName("slideshow");
        for (i = 0; i < x.length; i++) {
           x[i].style.display = "none";
        }
        myIndex++;
        if (myIndex > x.length) {myIndex = 1}
        x[myIndex-1].style.display = "block";
        setTimeout(carousel, 4000);
    }
  </script>
	</body>
</html>
