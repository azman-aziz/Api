//menggunakan ajax

// let xhr = new XMLHttpRequest();
// xhr.onreadystatechange = function(){
// 	if (xhr.readyState == 4 & xhr.status == 200) {
// 		//di parsing agar mengembalikan objek
// 		let mahasiswa = JSON.parse(this.responseText);
// 		console.log(mahasiswa);
// 	}
// }
// xhr.open('GET','coba.json',true);
// xhr.send();

//menggunakan jquery
// ' ' = nama file yang menjadi sumbernya
//param adalah hasil sudah berbentuk objek
$.getJSON('coba.json', function(ok){
	console.log(ok)
});