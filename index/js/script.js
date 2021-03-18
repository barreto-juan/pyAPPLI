$(function(){
    $(".slide-carousel .out:eq(0)").addClass("ativo").show()

    setInterval(slide, 4000)

    function slide() {
        if($(".ativo").next().length){
            $(".ativo").fadeOut().removeClass("ativo").next().fadeIn().addClass("ativo");
        }else{
            $(".ativo").fadeOut().removeClass("ativo");
            $(".slide-carousel .out:eq(0)").fadeIn().addClass("ativo");
        }
    }

    
})