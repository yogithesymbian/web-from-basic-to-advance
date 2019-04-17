<html>

<head>
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <?php
	$con = mysqli_connect("localhost", "root", "", "ti_4a_2019") or die(mysqli_connect_error());
	/**
 * sebaiknya script connection atau script di atas ini
 * dipisahan wi
 * buat file baru dengan nama conn.php
 * yang berisi
 * ---------------file_name_conn_dewi.php-------------
 * <?php
 * $HOST = 'localhost'; #database address
 * $USER = 'root'; #user database
 * $PASS = ''; #password
 * $DB = 'ti_4a_2019'; #database
 * $CONN = mysqli_connect($HOST, $USER, $PASS, $DB);
 * ----------------------------------------------------
 *
 * lalu di panggil dengan cara include
 * include_once("location/folder/connection.php");

 */
	?>
    <table border=1 align=center width=80%>
        <h1 align=center>Daftar Mahasiswa</h1>
        <caption>
            <form method="POST" action=view_mhs.php>
                <!-- <input type=Text name='kata' size=25> -->
                <input type="text" name="kata" id="id_kata" size=25 value="">
                <input type=Submit value="Search!">
            </form>
        </caption>
        <th width=10%>Nim</th>
        <th width=15%>Nama</th>
        <th width=10%>Tgl Lahir</th>
        <th width=15%>Agama</th>
        <th width=30%>Alamat</th>
        <th width=40%>Prody</th>
        <?php
		$kata = "__yogi__";
		$kata = isset($_POST['kata']) ? $_POST['kata'] : '';
		// $kata = $_POST['kata'];
		// session_start();
		// ini_set('display_errors', 1);
		// error_reporting(~0);
		// error_reporting(error_reporting() & ~E_NOTICE);
		/**
		 * ISSET checks the variable to see
		 * if it has been set. In other words,
		 * it checks to see if the variable is any value
		 * except NULL or not assigned a value.
		 * ISSET returns TRUE if the variable exists
		 * and has a value other than NULL.
		 * That means variables
		 * assigned a "", 0, "0", or FALSE are set,
		 * and therefore are TRUE for ISSET.
		 *
		 *
		 * EMPTY checks to see if a variable is empty.
		 * Empty is interpreted
		 * as: "" (an empty string), 0 (integer), 0.0 (float)`, "0" (string), NULL, FALSE, array() (an empty array),
		 * and "$var;" (a variable declared, but without a value in a class.
		 * For more information, see this article <
		 * 3
		 */

		if (empty($kata)) {
			// 	$query = "select a.nim, a.nama, a.tgl_lahir, a.agama, a.alamat, b.nm_prody
			// from mhs a, prody b
			// where a.kd_prody=b.kd_prody and (a.nama like '%kata%' or
			// a.alamat like '%kata%')";
			/**
			 * Tadi kamu tidak menaruh koma
			 * di antara a.name dan a.tgl_lahir
			 * dan inner join yang di cari table JURUSAN dan MAHASISWA
			 * bukan JURUSAN dan PRODY
			 */
			$query = "SELECT a.nim, a.nama, a.tgl_lahir, a.agama, a.alamat, y.nm_jur
			FROM
				mhs a, prody b, jurusan y
			WHERE
				y.kd_jur = b.kd_jur AND
				b.kd_prody = a.kd_prody";
		} else {
			// 	$query = "select a.nim, a.nama a.tgl_lahir, a.agama, a.alamat, b.nm_prody
			// from mhs a, prody b
			// where a.kd_prody=b.kd_prody";

			/**
		 * Disini KITA ingin menampilkan data mahasiswa dan jurusan
		 * karena databasenya urutan(saling terhubung) FK ini JURUSAN -> PRODY -> MAHASISWA
		 * maka dia harus melewati table prody
		 * jadi jurusan di join ke prody , lalu prody join jurusan
		 */
			$query = "SELECT a.nim, a.nama, a.tgl_lahir, a.agama, a.alamat, y.nm_jur
			FROM
				mhs a, prody b, jurusan y
			WHERE
				y.kd_jur = b.kd_jur AND
				b.kd_prody = a.kd_prody AND
				(a.nama LIKE '%$kata%' OR a.alamat LIKE '%$kata%')";
		}
		$hasil = mysqli_query($con, $query);
		/**
		 * script debug check an error saat debug untuk check error di mana
		 * 		if (!$check1_res) {
		 * printf("Error: %s\n", mysqli_error($con));
		 * exit();
		 * }
		 *
		 * klw sudah kasih komen scriptnya dengan cara CTRL + /
		 * saat production/deploy/completed
		 */
		while ($row = mysqli_fetch_array($hasil)) {
			echo "<tr>
      <td>$row[0]</td>
	  <td>$row[1]</td>
	  <td>$row[2]</td>
	  <td>$row[3]</td>
	  <td>$row[4]</td>
	  <td>$row[5]</td>
	  </tr>";
		}
		?>
    </table>
</body>

</h tml> 