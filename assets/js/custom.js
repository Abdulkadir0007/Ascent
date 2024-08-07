(function($){

    $(document).ready(function(){
        $(".media img").addClass('');
        $('.contt .er-masseg a').click(function(){
            $('.contt .er-masseg').slideUp();
            return false;
        });
        $('.contt .rt-masseg a').click(function(){
            $('.contt .rt-masseg').slideUp();
            return false;
        });
        $('.carousel-inner .carousel-item:first-child').addClass('active');
        $('.carousel-indicators button:first-child').addClass('active');

        $('.project-filter').categoryFilter();

        $('a.project-filter').click(function(){
            return false;
        });

    });
})(jQuery)
