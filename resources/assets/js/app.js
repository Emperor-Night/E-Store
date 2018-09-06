require('./bootstrap');


$(document).ready(function () {

    $("#customSuccess,#customInfo,#customError").delay(4000).fadeToggle(2500);


    $("#sort,#price").change(displayAjaxResults);
    $("#search").keyup(displayAjaxResults);
    $(".brandFilter,.androidFilter,.conditionFilter,.threeDFilter").click(displayAjaxResults);

    function displayAjaxResults() {

        var token = $("meta[name='csrf-token']").attr("content");

        var sortValue = $("#sort").val();
        var priceValue = $("#price").val();
        var searchValue = $("#search").val();

        var brandsValue = [];
        var checkedBrandFields = $(".brandFilter:checked");
        checkedBrandFields.each(function () {
            brandsValue.push($(this).val());
        });

        var androidValue = [];
        var checkedAndroidFields = $(".androidFilter:checked");
        checkedAndroidFields.each(function () {
            androidValue.push($(this).val());
        });

        var threeDValue = [];
        var checkedThreeDFields = $(".threeDFilter:checked");
        checkedThreeDFields.each(function () {
            threeDValue.push($(this).val());
        });

        var conditionsValue = [];
        var checkedConditionFields = $(".conditionFilter:checked");
        checkedConditionFields.each(function () {
            conditionsValue.push($(this).val());
        });


        var mainContent = $("#mainContent");

        $.ajax({
            type: "POST",
            data: {
                _token: token,
                sort: sortValue,
                price: priceValue,
                search: searchValue,
                brands: brandsValue,
                android: androidValue,
                threeD: threeDValue,
                conditions: conditionsValue
            },
            success: function (serverResults) {

                mainContent.empty();

                if (!serverResults.data.length) {
                    mainContent.append("<div class='col-md-12'><h3 class='text-center'>No results found</h3></div>");
                    return;
                }

                $.each(serverResults.data, function (index, object) {
                    mainContent.append(`

                        <div class="col-md-4 text-center mt-4">
    
                            <a href="/product/${object.slug}">
                                <img src="${object.imagePath}" alt="${object.slug}" style="max-height: 150px;"
                                     class="img-thumbnail">
                            </a>
                            
                            <div class="mt-2"></div>
    
                            <h5>
                                <a href="/product/${object.slug}">
                                    ${object.name.substring(0, 45) + "..."}
                                </a>
                            </h5>
                
                            <div class="my-1">
                                <i class="far fa-comment"></i> ${object.commentsCount}
                            </div>
                
                            <p class="lead">${object.price} &euro;</p>
                            
                            <form action="/cart/add/${object.slug}" method="POST">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success cartButton">
                                        Add to cart <i class='fas fa-shopping-cart'></i>
                                    </button>
                                </div>
                            </form>
                            
                        </div>
                    `);
                });

            }

        });
    }


    $("#searchForm").on("submit", function (event) {
        event.preventDefault();
    });

    $("body").on("click", ".deleteButton", function (event) {
        event.preventDefault();

        var form = $(this).parent();
        $("#confirmDelete").off().on("click", function () {
            form.submit();
        });

    });




});