import $ from 'jquery';

$(document).on('click', '.button--show-video', function(){

    var $this = $(this);
    var videoLink = $this.data('video-link');
    var iframeEmbed = 'https://www.youtube.com/embed/' + videoLink + '?autoplay=1&controls=1&playlist=' + videoLink + '&rel=0&modestbranding=1&showinfo=0&autohide=1';
    
    $('.video--youtube').attr('src', iframeEmbed);
    $('.dimmer--media.js').dimmer({
        closable: false
    }).dimmer('show');

    $('.videos__frame iframe').each(function(){
        
        var thisVideoCurrent = $(this).attr('data-video');
        var iframeEmbed_current = 'https://www.youtube.com/embed/' + thisVideoCurrent + '?autoplay=0&controls=1&playlist=' + thisVideoCurrent + '&rel=0&modestbranding=1&showinfo=0&autohide=1?enablejsapi=1';

        $(this).attr('src', iframeEmbed_current);
    });
});

$(document).on('click', '.dimmer__close', function() {
    var $this = $(this);
    $this.parents('.ui.dimmer').dimmer('hide').dimmer({
        onHide: function() {
        }
    });
    $('.video--youtube').removeAttr('src');
});
  