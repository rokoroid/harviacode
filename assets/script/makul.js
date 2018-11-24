$(document).ready(function(){

	var tableMakul = null;
	if ($(".tablemakul").length > 0){
		    tableMakul = $('.tablemakul').DataTable();
	}

	if ($("#fakultas").length > 0){
		$("#fakultas").change(function(){
			var url = window.base_url + "/matakuliah/get_prodi?id=" + $(this).val();
			 $.getJSON(url, function(result){
        		$("#prodi").empty();
        		$.each(result, function(i, field){
            		$("#prodi").append('<option value="' + field.id_prodi + '">' + field.nama_prodi + ' (' + field.jenjang + ')' + '</option>');
        		});
    		});
		})
	}
	if ($("#prodi").length > 0){
		$("#prodi").change(function(){
			var url = window.base_url + "/matakuliah/get_data_table?id=" + $(this).val();
			$.getJSON(url, function(result){
				tableMakul.clear().draw();
				var i = 1;
        		$.each(result, function(i, field){
            		tableMakul.row.add([
            			i,
            			field.nama_prodi,
            			field.kode_makul,
            			field.nama_makul,
            			field.sks,
            			field.semester,
            			field.jenis_makul,
                        field.angkatan,
            			"<a href='" + window.base_url + "matakuliah/update/" + field.id_makul + "'>Edit</a> | <a href='" + window.base_url + "matakuliah/delete/" + field.id_makul + " onclick='javascript: return confirm(\"Are You Sure ?\")'>Hapus</a> "
            			]).draw(false);
            		i++;
        		});
    		});	
		});
	}
});