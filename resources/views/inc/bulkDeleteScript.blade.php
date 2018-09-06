<?php

$currentRoute = Route::currentRouteName();

if ($currentRoute == "categories.index") {
    $url = route("categories.bulk.destroy");
} else if ($currentRoute == "brands.index") {
    $url = route("brands.bulk.destroy");
} else if ($currentRoute == "conditions.index") {
    $url = route("conditions.bulk.destroy");
} else if ($currentRoute == "photos.index") {
    $url = route("photos.bulk.destroy");
} else if (
    $currentRoute == "comments.index" ||
    $currentRoute == "users.comments" ||
    $currentRoute == "categories.comments" ||
    $currentRoute == "brands.comments" ||
    $currentRoute == "conditions.comments" ||
    $currentRoute == "products.comments"
) {
    $url = route("comments.bulk.destroy");
}

?>


<script>

    $(document).ready(function () {

        var token = $("meta[name='csrf-token']").attr("content");


        // Activating delete modal
        $("body").on("click", "#bulkDeleteButton", function () {

            $("#confirmDelete").off().on("click", function () {

                var ids = [];
                $(".checkbox:checked").each(function () {
                    ids.push($(this).val());
                });

                $.ajax({
                    type: "DELETE",
                    url: "{{ $url }}",
                    data: {
                        _token: token,
                        ids: ids
                    },
                    success: function () {
                        location.reload();
                    }
                });

            });

        });


        // Selecting or deselecting all items
        $("body").on("click", "#checkAll", function () {

            if ($(this).prop("checked")) {
                $(".checkbox").each(function () {
                    $(this).prop("checked", true);
                });
            } else {
                $(".checkbox").each(function () {
                    $(this).prop("checked", false);
                });
            }

        });


    });

</script>
