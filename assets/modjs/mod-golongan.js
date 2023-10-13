function addGolongan() {
	$('#addNewGolongan').modal('show');
}

function editGolongan(e) {
	$.ajax({
		url: base_url + "golongan/detail/" + e,
		type: "post",
		dataType: "json",
		success: function (data) {
			$('#nama_golongan').val(data.nama_golongan);
			$('#id_golongan').val(data.id);
			$('#editGolongan').modal('show');
		}
	});
}

function hapusGolongan(e) {
	$.ajax({
		url: base_url + "golongan/cek_delete/" + e,
		type: "post",
		success: function (data) {
			var obj = JSON.parse(data);
			if (obj.num == 1) {
				Swal.fire({
					title: "Cannot Delete This Data!",
					text: "Please check your data relation!",
					icon: "error",
				});
			} else {
				Swal.fire({
					title: "Are you sure ?",
					text: "Deleted data can not be restored!",
					icon: "warning",
					showCancelButton: true,
					confirmButtonColor: "#3085d6",
					cancelButtonColor: "#d33",
					confirmButtonText: "Yes, delete it!"
				}).then((result) => {
					if (result.value) {
						$.ajax({
							url: base_url + "golongan/delete/" + e,
							type: "post",
							success: function (data) {
								window.location.reload();
							}
						})
					}
				})
			}
		}
	});
};
