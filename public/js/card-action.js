function showRejectModal(eventId, userId, userName, userMail) {
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
            changePStatus(eventId, userId, userName, userMail,'failed')
        }
    });
}

window.onload = function() {
    document.getElementById("loading-screen").style = "display: none !important";

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

function changePStatus(eventId, userId, userName, userMail, status) {
    $.ajax({
        type: 'POST',
        url: window.location.pathname,
        data: {eventId: eventId, userId: userId, status: status, username: userName, usermail:userMail},
        beforeSend: function(){
            $('#loading-screen').show();
            disableScroll();
        },
        complete: function(){
            $('#loading-screen').hide();
            enableScroll();
        },
        success:function(data) {
            location.reload();
            sessionStorage.alertAfterPageLoad = 'true';
            sessionStorage._status = 'success';
            sessionStorage.text = 'Bukti pembayaran ' + userName + ((status === 'success') ? ' diterima !' : ' ditolak !');
        },
        error:function(jqXHR, textStatus, errorThrown) {
            document.getElementById("loading-screen").style = "display: none !important";
            enableScroll();
            displayErrorAlert(jqXHR.status);
        }
    });
}

function displayErrorAlert(status) {
    window.location.href = '/errors/' + status;
}

function disableScroll() {
    // Get the current page scroll position
    scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    (scrollLeft = window.pageXOffset || document.documentElement.scrollLeft),
        // if any scroll is attempted, set this to the previous value
        (window.onscroll = function () {
            window.scrollTo(scrollLeft, scrollTop);
        });
}

function enableScroll() {
    window.onscroll = function () {};
}
