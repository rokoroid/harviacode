$(document).ready(function(){

	var tableJadwal = null;
	if ($(".tabledosen").length > 0){
		    tableDosen = $('.tabledosen').DataTable();
	}

	if ($("#fakultas_dosen").length > 0){
		$("#fakultas_dosen").change(function(){
			var url = window.base_url + "jadwal/get_prodi?id=" + $(this).val();
			 $.getJSON(url, function(result){
        		$("#prodi_dosen").empty();
        		$.each(result, function(i, field){
            		$("#prodi_dosen").append('<option value="' + field.id_prodi + '">' + field.nama_prodi + ' (' + field.jenjang + ')' + '</option>');
        		});
    		});
		})
	}
	
	if ($("#prodi_dosen").length > 0){
		$("#prodi_dosen").change(function(){
			var url = window.base_url + "jadwal/get_data_table?id=" + $(this).val();
			$.getJSON(url, function(result){
				tableDosen.clear().draw();
				var i = 1;
        		$.each(result, function(i, field){
            		tableDosen.row.add([
            			i,
            			// field.nama_semester + " " + field.tahun_ajaran,
            			field.nama_makul,
            			field.nama_kelas,
            			field.gelar_depan + " " + field.nama_dosen + " " + field.gelar_belakang,
            			"<a href='" + window.base_url + "pengajar/update/" + field.id_kelas + "'>Edit</a> | <a href='" + window.base_url + "pengajar/delete/" + field.id_kelas + " onclick='javascript: return confirm(\"Are You Sure ?\")'>Hapus</a> "
            			]).draw(false);
            		i++;
        		});
    		});	
		});
	}
});