//display the price of the gift
$(document).ready( function() {
    $('.displayPrice').click( function (e) {
        e.preventDefault();
        var selectGift = $('.selectGift').val();
        var quantityOfGifts = $('.quantityOfGifts').val();
        $.ajax({
            method: 'post',
            url: "gifts.php",
            data: { selectionID: selectGift, quantity: quantityOfGifts }
        })
    });
});