//modal inicial
$("#myBtn").click(function(){
    $("#myModal").addClass("is-active");
});
$(".delete").click(function(){
    $("#myModal").removeClass("is-active");
});


// modal agregar inventario
$("#launchModal-add").click(function(){
    $("#add-modal").addClass("is-active");
});

$(".delete").click(function(){
    $("#add-modal").removeClass("is-active");
});
$(".cancel-btn").click(function(){
    $("#add-modal").removeClass("is-active");
});


// modal borrar inventario
$("#launchModal-del").click(function(){
    $("#del-modal").addClass("is-active");
});

$(".delete").click(function(){
    $("#del-modal").removeClass("is-active");
});
$(".cancel-btn").click(function(){
    $("#del-modal").removeClass("is-active");
});

// modal agregar venta
$("#launchModal-add-sale").click(function(){
    $("#sale-modal").addClass("is-active");
});

$(".delete").click(function(){
    $("#sale-modal").removeClass("is-active");
});
$(".cancel-btn").click(function(){
    $("#sale-modal").removeClass("is-active");
});

// agregar rh
$("#launchModal-add-rh").click(function(){
    $("#add-rh-modal").addClass("is-active");
});

$(".delete").click(function(){
    $("#add-rh-modal").removeClass("is-active");
});
$(".cancel-btn").click(function(){
    $("#add-rh-modal").removeClass("is-active");
});

// borrar rh
$("#launchModal-del-rh").click(function(){
    $("#del-rh-modal").addClass("is-active");
});

$(".delete").click(function(){
    $("#del-rh-modal").removeClass("is-active");
});
$(".cancel-btn").click(function(){
    $("#del-rh-modal").removeClass("is-active");
});
