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
        <h2>WEB DEVELOPMENT</h2>

        <div class="col-9">
          <img class="slideshow" src="img/sobatjogja.png" alt="sobatjogja.com" title="sobatjogja.com">
          <img class="slideshow" src="img/sobatbali.png" alt="sobatbali.com" title="sobatbali.com">
					<img class="slideshow" src="img/piesgor.png" alt="piesgor.com" title="piesgor.com">
        </div>

        <div class="col-3 formulir">
          <form action="index.php">
            <input type="submit" value="KEMBALI">
          </form>
					<p>Merupkan beberapa website yang sudah dibangun dan berjalan dengan traffic visitor ribuan/bulan.</p>
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
