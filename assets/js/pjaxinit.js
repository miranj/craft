// Init Pjax
//
// uses:
// - https://github.com/MoOx/pjax
// - http://buunguyen.github.io/topbar/
//
(function (window) {
    var pjax = new Pjax({
        elements: 'a[href]:not(.no-pjax)',
        selectors: [
            '[data-pjax-track]',
            'title',
            '#pjax-page',
        ],
        switches: {
            '[data-pjax-track]': function (oldEl, newEl, options) {
                if (oldEl.outerHTML == newEl.outerHTML) {
                    // nothing has changed, continue as usual
                    this.onSwitch();
                } else {
                    // something has changed. Abort.
                    window.location.href = options.request.responseURL;
                }
            },
        },
        cacheBust: false,
    });


    // Fire app's main() function on a new page load
    if (window.main) {
        document.addEventListener('pjax:success', main);
    }


    // Loading progress indicator
    topbar.config({
        barThickness: 1,
        barColors: {
            '0': '#000000',
            '1': '#000000',
        },
        shadowBlur: 3,
    });
    document.addEventListener('pjax:send', topbar.show);
    document.addEventListener('pjax:complete', topbar.hide);
}(this));
