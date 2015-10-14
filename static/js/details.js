(function () {
    $(document).ready(function () {
        $(".tab").click(function () {
            $(".tab").removeClass("activeTab");
            $(this).addClass("activeTab");
            $(".tabDiv").css("display", "none");
            $("."+$(this).data("tab")).css("display", "block");
        });
    });
})();
