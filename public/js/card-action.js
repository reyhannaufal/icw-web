function showRejectModal(eventId, userId, userName) {
    swal({
        type: 'warning',
        title: "Apakah anda yakin?",
        text: 'Tolak bukti pembayaran milik ' + userName + ' ?',
        showCancelButton: true,
        cancelButtonClass: '#DD6B55',
        confirmButtonColor: '#dc3545',
        confirmButtonText: 'Tolak!',
        cancelButtonText: 'Batalkan!',
        dangerMode: true,
    }, function(result) {
        console.log(result);
    });
}


// JQuery
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

function doAction(eventId, userId, action) {
    $.ajax({
        type: 'POST',
        url: window.location.pathname,
        data: {eventId: eventId, userId: userId, action: action},
        success:function(data) {
            alert(data.success);
        },
        error:function(jqXHR, textStatus, errorThrown) {
            if (errorThrown === 'Forbidden') {
                alert('Error 403 (Forbidden).\n' + 'Anda tidak memiliki akses untuk melakukan tindakan tersebut.');
            } else {
                alert(errorThrown);
            }
        }
    });
}
