<html > 
<head>
<title> Statement IF </title>
</head>
	<body>
    <form action="" method="post">
	<?php
	$nilai1 ="";
	echo  "Berapa Nilai PHPmu?
	<input name = \ "nilai1 \" value = \ "$ nilai1 \" size = \ "3 \" type = \ "text \">
	<input name = \ "cek \" type = \ "submit \" value = \ "Cek \"> </form> " ;
	if ( isset ( $ _POST [ "cek" ])) {
	    $ nilai1 = $ _POST [ "nilai1" ]; // perintah untuk meneliti tombol Cek
	    echo  "<br> <h1>" ;
	    jika ( $ nilai1 == "" ) {
	        echo  "Anda Belum Memasukkan Nilai ...!" ; }
	    elseif (! is_numeric ( $ nilai1 )) // jika nilai1 tidak bertype numerik
	    { echo  "Ini Bukan Nilai Angka ...!" ; }
	    lain
	    {
	        if ( $ nilai1 <= 30 ) // pernyataan pertama
	        { echo  "Anda mendapatkan nilai huruf <b> E </b>" ; }
	        elseif ( $ nilai1 <= 50 ) // pernyataan kedua
	        { echo  "Anda mendapatkan nilai huruf <b> D </b>" ; }
	        elseif ( $ nilai1 <= 70 ) // pernyataan ketiga
	        { echo  "Anda mendapatkan nilai huruf <b> C </b>" ; }
	        elseif ( $ nilai1 <= 85 ) // pernyataan keempat
	        { echo  "Anda mendapatkan nilai huruf <b> AB </b>" ; }
	        else  // pernyataan kelima
	        { echo  "Anda mendapatkan nilai huruf <b> A </b>" ; }
	    
	    }
	    echo "</h1>" ;
	}
	?>
	</body >
	</html >
