$(document).ready(function(){

	if ($("#makul").length > 0){
		$("#makul").change(function(){
			var url = window.base_url + "pengajar/get_kelas?id=" + $(this).val();
			 $.getJSON(url, function(result){
        		$("#id_kelas").empty();
        		$.each(result, function(i, field){
            		$("#id_kelas").append('<option value="' + field.id_kelas + '">' + field.nama_kelas +'</option>');
        		});
    		});
		})
	}
	
});