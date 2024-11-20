<?php
	echo "Funkcii vo PHP<br>";
	// deklariranje na funkii se pisuvaat so prefiks function po sto sledi ime na funkcijata, vo ovoj slucaj zdravo
	// vakov definiran tip na funkcija uste se narekuva i staticna funkcija, funkcija koja nema paramentri, i ne vrakja nisto. Vo drugi programski jazici kako C++ e void funkcija.
	function zdravo(){
		echo "Ovaa poruka e prikazana preku funckija zdravo()<br>";
	}
	// povikuvanje na funkcii se vrsi bez prefix
	zdravo();

	// Funkcii koi primaat argumenti t.e paramentri bez vrakjanje na vrednost
	function proverkaNaPodatoci($korisnickoIme,$lozinka){
		$korisnickoIme=trim(strtolower($korisnickoIme));
		if($korisnickoIme=="admin"&&$lozinka=="admin123"){
			echo "Ovaa poruka se odnesuvaa za uspesna proverka na podatoci preku funckijata proverkaNaPodatoci();<br>";
		}
		else{
			echo "Ovaa poruka e greska. Proverka na vneseni podatoci za korisnickoIme i lozinka se netocni.<br>";
		}
	}
	proverkaNaPodatoci("admIn","admin123");
	proverkaNaPodatoci("admin21","admin521");
	proverkaNaPodatoci("admin");