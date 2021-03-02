$(".grade").blur(function(e) {
    let $input = $(this);
    let user_id = parseInt($input.attr('id').split('_')[1]);
    let grade = parseFloat($input.val())

    $.ajax({
        url: '/admin/paper/grade',
        type: 'POST',
        data: {user_id: user_id, grade: grade},
        error:function(jqXHR, textStatus, errorThrown) {
            displayErrorAlert(jqXHR.status);
        },
        success:function() {
            swal({
                type: 'success',
                title: "Nilai berhasil diubah!",
                text: "Reload laman ini untuk menggunakan fitur pengurutan berdasarkan nilai.",
                icon: "success",
                buttons: true,
            });
            let badgets = document.getElementsByClassName("papers-badget");
            for (let i = 0; i < badgets.length; i++) {
                badgets[0].innerText--;
            }
        }
    });
});
