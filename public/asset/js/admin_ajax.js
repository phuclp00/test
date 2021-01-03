(function($) {
    $('.option').confirm({
        title: ' Are you sure want to continues ?',
        content: 'This dialog will automatically trigger \'cancel\' in 6 seconds if you don\'t respond.',
        autoClose: 'cancelAction|8000',
        buttons: {
            OK: {
                text: 'OK',
                action: function() {
                    location.href = this.$target.attr('href');
                }
            },
            cancelAction: function() {
                $.alert('Canceled');
            }
        }
    });

})(jQuery);