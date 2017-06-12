/**
 * Created by gogl92 on 12/06/17.
 */

var client = ShopifyBuy.buildClient({
    accessToken: "token",
    domain: "subdomain.myshopify.com",
    appId: "6"
});

client.fetchProduct('9751912018').then(function (product) {

    var html =
        "<img class='product__image' src='" + product.selectedVariantImage.src + "' >" +
        "<h2 class='product__title'>" + product.title + "</h2>" +
        "<a class='product__buy' href='" +
        product.selectedVariant.checkoutUrl(1) +
        "'>Buy Now!</a>";

    $('#product-1').html(html);

});