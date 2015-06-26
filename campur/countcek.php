<script>
	function cekone(nomer){
		if(document.getElementById('cek'+nomer).checked==true){
			pengurangan = (document.getElementById('jumlah').value * (1) - (1));
			document.getElementById('jumlah').value = pengurangan;
		}else{
			pertambahan = (document.getElementById('jumlah').value * (1) + (1));
			document.getElementById('jumlah').value = pertambahan;		
		}
	}
</script>

<input type="text" value="5" id="jumlah">
<?php
for($i=1;$i<=10;$i++){
?>
<input type="checkbox" value="<?php echo $i?>" id="cek<?php echo $i?>" onClick="cekone(<?php echo $i?>)">
<?php
}
?>