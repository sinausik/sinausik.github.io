<?php echo '
  <h2 id="contact">CONTACT</h2>
  <div>
  <form action="#">
    <label for="fname">Nama</label> <input type="text" id="fname" name="firstname" />
    <label for="website">Website</label> <input type="url" name="website" placeholder="www.domain.com" />
    <label for="tel">Telepon</label> (<a href="tel:0271223334">0271 22 333 4</a>) click <input type="tel" name="tel" placeholder="Nomor telepon Anda" />
    <label for="email">Email</label> <input type="email" name="email" placeholder="anda@domain.com" />
    <label for="time">Jam</label> <input type="time" name="time" placeholder="9:00 AM" />
    <label for="date">Tanggal</label> <input type="date" name="date" placeholder="DD/MM/YYYY" />
    <textarea placeholder="Tulis, pesan Anda!" cols="30" rows="5" name="textarea"></textarea>
    <input type="submit" value="KIRIM">
  </form>
</div>
'; ?>
