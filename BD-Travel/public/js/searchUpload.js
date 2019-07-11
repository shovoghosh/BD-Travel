$(document).ready(function() {

    $("#searchBtn").click(function () {

        //alert('asd');

        if ($('#desSearch').val() !== "") {
            $.ajax({
                url: "/searchUploadAjax",
                method: "get",
                data: {
                    search: $('#desSearch').val()
                },
                success: function (res) {
                    //var name = jQuery.parseJSON(res);

                }
            });
        }

    });
});


