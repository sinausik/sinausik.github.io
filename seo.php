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
        <h2>SEARCH ENGINE OPTIMIZATION</h2>

        <div class="col-9">
          <img class="slideshow" src="img/burjo-jogja.png" alt="Burjo Jogja" title="Burjo Jogja">
          <img class="slideshow" src="img/sejarah.png" alt="Sejarah Sungai Bengawan Solo" title="Sejarah Sungai Bengawan Solo">
					<img class="slideshow" src="img/sompil.png" alt="Sompil" title="Sompil">
					<img class="slideshow" src="img/peluang-usaha.png" alt="Peluang Usaha" title="Peluang Usaha">
        </div>

        <div class="col-3 formulir">
          <form action="index.php">
            <input type="submit" value="KEMBALI">
          </form>
					<p>Merupakan beberapa <i>screen-shoot</i> bukti dari optimasi SEO yang berhasil menduduki peringkat 1 (satu) pencarian Google.</p>
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
        setTimeout(carousel, 5000);
    }
  </script>
	</body>
</html>
