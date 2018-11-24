$(document).ready(function(){

	var tableJadwal = null;
	if ($(".tablejadwal").length > 0){
		    tableJadwal = $('.tablejadwal').DataTable();
	}

	if ($("#fakultas_jadwal").length > 0){
		$("#fakultas_jadwal").change(function(){
			var url = window.base_url + "jadwal/get_prodi?id=" + $(this).val();
			 $.getJSON(url, function(result){
        		$("#prodi_jadwal").empty();
        		$.each(result, function(i, field){
            		$("#prodi_jadwal").append('<option value="' + field.id_prodi + '">' + field.nama_prodi + ' (' + field.jenjang + ')' + '</option>');
        		});
    		});
		})
	}
	
	if ($("#prodi_jadwal").length > 0){
		$("#prodi_jadwal").change(function(){
			var url = window.base_url + "jadwal/get_data_table?id=" + $(this).val();
			$.getJSON(url, function(result){
				tableJadwal.clear().draw();
				var i = 1;
        		$.each(result, function(i, field){
            		tableJadwal.row.add([
            			i,
            			field.nama_semester + " " + field.tahun_ajaran,
            			field.nama_makul,
            			field.nama_kelas,
            			"<a href='" + window.base_url + "jadwal/update/" + field.id_kelas + "'>Edit</a> | <a href='" + window.base_url + "jadwal/delete/" + field.id_kelas + " onclick='javascript: return confirm(\"Are You Sure ?\")'>Hapus</a> "
            			]).draw(false);
            		i++;
        		});
    		});	
		});
	}
});