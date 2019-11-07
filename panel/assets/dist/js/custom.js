$(document).ready(function () {

        $('.toggle_event').change(function () {

                var isActive = $ (this).prop("checked");
                var base_url = $(".base_url").text();
                var id       = $(this).attr("dataID");
                $.post(base_url + "product/isActiveSetter",
                    {id: id, isActive: isActive},
                    function (response) {});
        });

        $('.toggle_event').change(function () {

                var isActive = $ (this).prop("checked");
                var base_url = $(".base_url").text();
                var id       = $(this).attr("dataID");
                $.post(base_url + "news/isActiveSetter",
                    {id: id, isActive: isActive},
                    function (response) {});
        });

        $('.toggle_event').change(function () {

                var isActive = $ (this).prop("checked");
                var base_url = $(".base_url").text();
                var id       = $(this).attr("dataID");
                $.post(base_url + "users/isActiveSetter",
                    {id: id, isActive: isActive},
                    function (response) {});
        });

        $('.toggle_event').change(function () {

                var isActive = $ (this).prop("checked");
                var base_url = $(".base_url").text();
                var id       = $(this).attr("dataID");
                $.post(base_url + "slides/isActiveSetter",
                    {id: id, isActive: isActive},
                    function (response) {});
        });

        $('.toggle_event').change(function () {

                var isActive = $ (this).prop("checked");
                var base_url = $(".base_url").text();
                var id       = $(this).attr("dataID");
                $.post(base_url + "categories/isActiveSetter",
                    {id: id, isActive: isActive},
                    function (response) {});
        });

        $('.toggle_event').change(function () {

                var isActive = $ (this).prop("checked");
                var base_url = $(".base_url").text();
                var id       = $(this).attr("dataID");
                $.post(base_url + "catalogs/isActiveSetter",
                    {id: id, isActive: isActive},
                    function (response) {});
        });

        $('.toggle_event').change(function () {

                var isActive = $ (this).prop("checked");
                var base_url = $(".base_url").text();
                var id       = $(this).attr("dataID");
                $.post(base_url + "popups/isActiveSetter",
                    {id: id, isActive: isActive},
                    function (response) {});
        });

        $(".remove-btn").click(function () {

                var  $data_url = $(this).data("url");

                Swal.fire({
                        title: 'Emin Misiniz?',
                        text: "Bu Silme İşlemi Geri Alınamaz!",
                        type: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Evet Sil!',
                        cancelButtonText: "Hayır"
                }).then((result) => {
                        if (result.value) {
                                window.location.href = $data_url;
                        }
                });
        });

        var uploadSection = Dropzone.forElement("#dropzone");
        
        uploadSection.on("complete",function () {
                //console.log(file);

                var $data_url = $("#dropzone").data("url");

                $.post($data_url,{},function (response){
                       $(".image_list_container").html(response);
                });
        });

})