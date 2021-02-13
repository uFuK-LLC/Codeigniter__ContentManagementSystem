$(document).ready(function () {

    $(".sortable").sortable();

    $(".remove-btn").click(function () {

        var $data_url = $(this).data("url");

        Swal.fire({
            title: 'Emin misiniz?',
            text: "Bu işlemi geri alamayacaksınız!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Evet, sil!',
            cancelButtonText: 'İptal'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = $data_url;
            }
        })
    });

    $(".isActive").change(function () {
        var $data = $(this).prop("checked");
        var $data_url = $(this).data("url");

        if (typeof $data != "undefined" && typeof $data_url != "undefined")
        {
            $.post($data_url, {data : $data}, function (response) { });
        }
    });

    $(".content-container, .image_list_container").on("sortupdate", '.sortable',  function(event, ui){

        var $data = $(this).sortable("serialize");
        var $data_url = $(this).data("url");

        $.post($data_url, {data : $data}, function(response){})

    });
})