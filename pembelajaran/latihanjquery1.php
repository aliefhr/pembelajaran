<!-- <!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
function jstampil (){
    
    var npm = $(".txtnpm").val();
    var nama = $("#txtnama").val();
    var nohp = $("#txtnohp").val();
    var email = $("#txtemail").val();
    var jenjang = $("#txtjenjang").val();
    var jurusan = $("#txtjurusan").val();
    $("#hasil").css("background-color", "pink");
    $("#hasil").html("npm : "+npm +",nama : "+nama+",nohp : "+nohp+",email : "+email+"jenjang : "+jenjang +",jurusan : "+jurusan);
}
function jsjurusan (){
    var jenjang = $("#txtjenjang").val();
    if(jenjang=='S1'){
       $("#txtjurusan").html("<option>Teknik Informatika</option><option>Sistem Informasi</option>"); 
    }
    if(jenjang=='D3'){
       $("#txtjurusan").html("<option>Komputerisasi Akuntansi</option><option>Teknik Komputer</option>"); 
    }
}
</script>
</head>
<body>

form mahasiswa <br>
Npm : <br>
<input type="text" name="txtnpm" id="txtnpm" class="txtnpm" size="20"> <br> <br>
Nama : <br>
<input type="text" name="txtnama" id="txtnama" size="20"> <br> <br>
No Hp : <br>
<input type="text" name="txtnohp" id="txtnohp" size="20"> <br> <br>
Email : <br>
<input type="text" name="txtemail" id="txtemail" size="20"> <br> <br>
Jenjang : <br>
<select name="txtjenjang" id="txtjenjang" onchange="jsjurusan()">
    <option value="">Pilih jenjang</option>   
    <option value="S1">Strata 1</option>
    <option value="D3">Diploma 3</option>
</select> <br> <br>
Jurusan : <br>
<select name="txtjurusan" id="txtjurusan">
    <option value="">Pilih jurusan</option>
    <option value="TI">Teknik Informatika</option>
    <option value="SI">Sistem Informasi</option>  
    
</select> <br> <br>
<input type="button" onclick="jstampil()" name="btntampil" id="btntampil" value="tampil"> <br> <br>
<div id="hasil">

</div>
</body>
</html> -->
<!DOCTYPE html>
<html>
<head>
<title>Mahasiswa Form</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
function jstampil() {
  // Use consistent selector (either by class or ID)
  var npm = $(".txtnpm").val();
  var nama = $("#txtnama").val();
  var nohp = $("#txtnohp").val();
  var email = $("#txtemail").val();
  var jenjang = $("#txtjenjang").val();
  var jurusan = $("#txtjurusan").val();

  $("#hasil").css("background-color", "pink");
  $("#hasil").html("<b>Npm:</b> " + npm + "<br>" +
                   "<b>Nama:</b> " + nama + "<br>" +
                   "<b>No HP:</b> " + nohp + "<br>" +
                   "<b>Email:</b> " + email + "<br>" +
                   "<b>Jenjang:</b> " + jenjang + "<br>" +
                   "<b>Jurusan:</b> " + jurusan);
}

function jsjurusan() {
  var jenjang = $("#txtjenjang").val();

  if (jenjang === "S1") {
    $("#txtjurusan").html("<option value=''>Pilih Jurusan</option>" +
                           "<option value='TI'>Teknik Informatika</option>" +
                           "<option value='SI'>Sistem Informasi</option>");
  } else if (jenjang === "D3") {
    $("#txtjurusan").html("<option value=''>Pilih Jurusan</option>" +
                           "<option value='KA'>Komputerisasi Akuntansi</option>" +
                           "<option value='TK'>Teknik Komputer</option>");
  } else {
    $("#txtjurusan").html("<option value=''>Pilih Jenjang Dulu</option>");
  }
}
</script>
</head>
<body>

<h1>Mahasiswa Form</h1>

<form id="mahasiswaForm">
  <label for="txtnpm">Npm:</label>
  <input type="text" name="txtnpm" id="txtnpm" class="txtnpm" size="20"> <br> <br>

  <label for="txtnama">Nama:</label>
  <input type="text" name="txtnama" id="txtnama" size="20"> <br> <br>

  <label for="txtnohp">No Hp:</label>
  <input type="tel" name="txtnohp" id="txtnohp" size="20"> <br> <br>  <label for="txtemail">Email:</label>
  <input type="email" name="txtemail" id="txtemail" size="20"> <br> <br>

  <label for="txtjenjang">Jenjang:</label>
  <select name="txtjenjang" id="txtjenjang" onchange="jsjurusan()">
    <option value="">Pilih Jenjang</option>
    <option value="S1">Strata 1</option>
    <option value="D3">Diploma 3</option>
  </select> <br> <br>

  <label for="txtjurusan">Jurusan:</label>
  <select name="txtjurusan" id="txtjurusan" disabled>
    <option value="">Pilih Jurusan</option>
  </select> <br> <br>

  <input type="button" value="Tampilkan" onclick="jstampil()" name="btntampil" id="btntampil"> <br> <br>
</form>

<div id="hasil">

</div>

</body>
</html>