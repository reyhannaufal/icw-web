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
        if (result) {
            changePStatus(eventId, userId, userName, 'failed')
        }
    });
}

window.onload = function() {
    // Initialize sessionStorage
    if (typeof sessionStorage.alertAfterPageLoad === 'undefined') {
        sessionStorage.alertAfterPageLoad = 'false';
        sessionStorage._status = null;
        sessionStorage.text = null;
    }
    // show alert
    if (sessionStorage.alertAfterPageLoad === 'true') {
        swal("Aksi berhasil !", sessionStorage.text, sessionStorage._status);
        sessionStorage.alertAfterPageLoad = 'false';
    }
};

// JQuery
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

function changePStatus(eventId, userId, userName, status) {
    $.ajax({
        type: 'POST',
        url: window.location.pathname,
        data: {eventId: eventId, userId: userId, status: status},
        success:function(data) {
            sessionStorage.alertAfterPageLoad = 'true';
            sessionStorage._status = (status === 'success') ? 'success' : 'warning';
            sessionStorage.text = 'Bukti pembayaran ' + userName + ((status === 'success') ? ' diterima !' : ' ditolak !');
            location.reload();
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
