<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		//setInterval memberikan delay pada saat data akan di tampilkan
		setInterval(function(){
                //Metode load digunakan untuk menampilkan data
			$('#live_data').load("data.php")
		}, 500);
	});
</script>
<script> 						
						 $(document).ready(function(){	
							  //Ajax modal menampilkan data
							  $('.add').click(function(){								  
								  $.ajax({
									url: "data.php",
									method: "GET",
									//data: {id_kelas:id_kelas,chkbox:chkbox},
									 //data: "label="+label,
									dataType: "html",
									success: function(data){
                                    //alert(100);
									  $('#live_data').html(data);
									}
								  });
							   });
							  });
					</script> 
<button class='add'>Submit</button>
<div id='tabel_add'></div>