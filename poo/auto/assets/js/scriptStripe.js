$(function(){
    const stripe = Stripe("pk_test_51IM8YvEO2Yrc49j4ES8x4WrwY2Q7mPILVwcVz4gJTUb0Be8rzBmpQH0TmIFZ9AfhQmPeNkxgsRtrnJmF92Q9toiV0000XKjzvk");
    const checkoutButton = $('#checkout-button');
    checkoutButton.on('click', function(e){
        e.preventDefault();
        console.log($('#nb').val());
        $.ajax({
            url:'index.php?action=pay',
            method:'post',
            data:{
                id: $('#ref').val(),
                marque: $('#marque').val(),
                modele: $('#modele').val(),
                prix: $('#prix').val(),
                email: $('#email').val(),
                quantite: $('#quant').val(),
                nb: $('#nb').val()
            },
            datatype: 'json',
            success:function(session){
                console.log(session);
                return stripe.redirectToCheckout({ sessionId: session.id });
            },
            error: function(){
                console.error("fail to send!");
            }
        });
    })
});