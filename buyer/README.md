# OpenAPIClient-php

The buyer-facing Crossly API — cart, orders, wishlists, offers, cashback. A DIFFERENT principal from the seller API: authenticated by a buyer OAuth token scoped `buyer:*` and resolved by `resolveBuyer`. A seller Personal Access Token will NOT authenticate these endpoints.


## Installation & Usage

### Requirements

PHP 7.3 and later.
Should also work with PHP 8.0 but has not been tested.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure Bearer authorization: BuyerOAuth
$config = Crossly\Buyer\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Buyer\Api\BuyerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_buyer_activity_request = new \Crossly\Buyer\Model\Activity\CreateBuyerActivityRequest(); // \Crossly\Buyer\Model\Activity\CreateBuyerActivityRequest

try {
    $result = $apiInstance->createBuyerActivity($create_buyer_activity_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->createBuyerActivity: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://crossly.net/api*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*BuyerApi* | [**createBuyerActivity**](docs/Api/BuyerApi.md#createbuyeractivity) | **POST** /v1/buyer/activity | Report an item your user is looking at, and get our answer.
*BuyerApi* | [**createBuyerAuctionBid**](docs/Api/BuyerApi.md#createbuyerauctionbid) | **POST** /v1/buyer/auctions/{slug}/bids | Place a bid, optionally with a proxy maximum. A WINNING BID IS CHARGED AUTOMATICALLY.
*BuyerApi* | [**createBuyerAuctionPay**](docs/Api/BuyerApi.md#createbuyerauctionpay) | **POST** /v1/buyer/auctions/{slug}/pay | Pay for an auction you won whose automatic charge did not go through.
*BuyerApi* | [**createBuyerAuctionRetract**](docs/Api/BuyerApi.md#createbuyerauctionretract) | **POST** /v1/buyer/auctions/{slug}/retract | Retract your bids under eBay’s rules — a typo, a changed listing, or an unreachable seller.
*BuyerApi* | [**createBuyerBoard**](docs/Api/BuyerApi.md#createbuyerboard) | **POST** /v1/buyer/boards | Create an outfit board.
*BuyerApi* | [**createBuyerBoardItem**](docs/Api/BuyerApi.md#createbuyerboarditem) | **POST** /v1/buyer/boards/{id}/items | Add a listing (by slug) to a board, at the next free spot.
*BuyerApi* | [**createBuyerBreakSpotHold**](docs/Api/BuyerApi.md#createbuyerbreakspothold) | **POST** /v1/buyer/breaks/{id}/spots/{spotId}/hold | Hold a spot in a pick-your-spot break, then buy it through checkout before the hold lapses.
*BuyerApi* | [**createBuyerBuybackRequest**](docs/Api/BuyerApi.md#createbuyerbuybackrequest) | **POST** /v1/buyer/buybacks/{id}/request | Ask Crossly to buy an item back under its buyback guarantee.
*BuyerApi* | [**createBuyerCartItem**](docs/Api/BuyerApi.md#createbuyercartitem) | **POST** /v1/buyer/cart/items | Add a listing to your cart.
*BuyerApi* | [**createBuyerCartItemSaveForLater**](docs/Api/BuyerApi.md#createbuyercartitemsaveforlater) | **POST** /v1/buyer/cart/items/{id}/save-for-later | Move a cart line to saved-for-later.
*BuyerApi* | [**createBuyerCartOptimizer**](docs/Api/BuyerApi.md#createbuyercartoptimizer) | **POST** /v1/buyer/cart-optimizer | Cart optimizer: send a shopping list (one item per line, \&quot;2 Charizard Base Set\&quot;) and get the cheapest delivered basket across sellers — one pick per line, items + each seller’s shipping with free-shipping thresholds applied. fewestPackages prefers fewer sellers. Nothing is added to the cart.
*BuyerApi* | [**createBuyerCartQuote**](docs/Api/BuyerApi.md#createbuyercartquote) | **POST** /v1/buyer/cart/quote | Price the cart, delivered — item, shipping, tax, total.
*BuyerApi* | [**createBuyerCartSavedMoveToCart**](docs/Api/BuyerApi.md#createbuyercartsavedmovetocart) | **POST** /v1/buyer/cart/saved/{id}/move-to-cart | Move a saved item back into your cart, at today’s price.
*BuyerApi* | [**createBuyerCaseCounter**](docs/Api/BuyerApi.md#createbuyercasecounter) | **POST** /v1/buyer/cases/{id}/counter | Propose your own refund figure on a case.
*BuyerApi* | [**createBuyerCaseEscalate**](docs/Api/BuyerApi.md#createbuyercaseescalate) | **POST** /v1/buyer/cases/{id}/escalate | Ask Crossly to step in on a case.
*BuyerApi* | [**createBuyerCaseMessage**](docs/Api/BuyerApi.md#createbuyercasemessage) | **POST** /v1/buyer/cases/{id}/messages | Post a message on a case thread.
*BuyerApi* | [**createBuyerCaseRespond**](docs/Api/BuyerApi.md#createbuyercaserespond) | **POST** /v1/buyer/cases/{id}/respond | Accept or reject the seller’s partial-refund offer on a case.
*BuyerApi* | [**createBuyerCaseWithdraw**](docs/Api/BuyerApi.md#createbuyercasewithdraw) | **POST** /v1/buyer/cases/{id}/withdraw | Withdraw a case you opened.
*BuyerApi* | [**createBuyerCatalogListingRental**](docs/Api/BuyerApi.md#createbuyercataloglistingrental) | **POST** /v1/buyer/catalog/listings/{slug}/rental | Book a rental. Returns a Stripe PaymentIntent client secret for rent + shipping both ways + deposit; the dates are held 30 minutes for payment. Crossly buys both labels; the deposit comes back after the item does.
*BuyerApi* | [**createBuyerCatalogListingRentalQuote**](docs/Api/BuyerApi.md#createbuyercataloglistingrentalquote) | **POST** /v1/buyer/catalog/listings/{slug}/rental/quote | Price a rental: rent (the cheaper of by-the-day and by-the-week), both shipping legs once a ship-to is given, and the deposit. &#x60;problem&#x60; says why the dates can’t be booked.
*BuyerApi* | [**createBuyerCatalogListingVideoRequest**](docs/Api/BuyerApi.md#createbuyercataloglistingvideorequest) | **POST** /v1/buyer/catalog/listings/{slug}/video-requests | Ask the seller for a video of an item (one open request per item). The seller is notified; their answer appears on the listing for every buyer.
*BuyerApi* | [**createBuyerCompany**](docs/Api/BuyerApi.md#createbuyercompany) | **POST** /v1/buyer/company | Create a buyer company: name, taxId?, website?. You become its owner; a user is in at most one company.
*BuyerApi* | [**createBuyerCompanyApproval**](docs/Api/BuyerApi.md#createbuyercompanyapproval) | **POST** /v1/buyer/company/approvals | Ask for approval of a trade order above your limit: sellerUserId, amountCents, note?, poReference?. Good for 7 days, used once at checkout.
*BuyerApi* | [**createBuyerCompanyApprovalDecide**](docs/Api/BuyerApi.md#createbuyercompanyapprovaldecide) | **POST** /v1/buyer/company/approvals/{id}/decide | Approve or decline a pending request (owner, accounts payable): decision approved | declined, note?.
*BuyerApi* | [**createBuyerCompanyMember**](docs/Api/BuyerApi.md#createbuyercompanymember) | **POST** /v1/buyer/company/members | Invite a teammate by email (owner): role owner | buyer | accounts_payable | viewer, approvalLimitCents for a buyer (orders above it need an approval).
*BuyerApi* | [**createBuyerConversationInvite**](docs/Api/BuyerApi.md#createbuyerconversationinvite) | **POST** /v1/buyer/conversations/{id}/invite | Invite a friend into a chat with a seller: a single-use link (7 days) that makes whoever opens it a guest who can read and post. Only the thread’s buyer can invite; at most 5 guests.
*BuyerApi* | [**createBuyerConversationJoin**](docs/Api/BuyerApi.md#createbuyerconversationjoin) | **POST** /v1/buyer/conversations/join/{token} | Join a chat you were invited into, as a guest.
*BuyerApi* | [**createBuyerEventRsvp**](docs/Api/BuyerApi.md#createbuyereventrsvp) | **POST** /v1/buyer/events/{slug}/rsvp | RSVP to an event: going (counts against its capacity) or interested.
*BuyerApi* | [**createBuyerFeedback**](docs/Api/BuyerApi.md#createbuyerfeedback) | **POST** /v1/buyer/feedback | Leave feedback on up to 25 orders at once, with optional detailed seller ratings.
*BuyerApi* | [**createBuyerFitRef**](docs/Api/BuyerApi.md#createbuyerfitref) | **POST** /v1/buyer/fit/refs | Save a reference garment (flat measurements, inches) to compare listings against.
*BuyerApi* | [**createBuyerFollowingSellerSeen**](docs/Api/BuyerApi.md#createbuyerfollowingsellerseen) | **POST** /v1/buyer/following/sellers/seen | Clear the \&quot;new listings\&quot; count on a followed seller, or on all of them.
*BuyerApi* | [**createBuyerGiftCard**](docs/Api/BuyerApi.md#createbuyergiftcard) | **POST** /v1/buyer/gift-cards | Start a gift card purchase.
*BuyerApi* | [**createBuyerGiftCardRedeem**](docs/Api/BuyerApi.md#createbuyergiftcardredeem) | **POST** /v1/buyer/gift-cards/redeem | Redeem a gift card code into your own balance.
*BuyerApi* | [**createBuyerGroupBuyJoin**](docs/Api/BuyerApi.md#createbuyergroupbuyjoin) | **POST** /v1/buyer/group-buys/{id}/join | Join a group buy with a quantity (up to its per-buyer max): a hold (or, for pay-now pools, a charge refunded the difference) at the starting price, settled at the price the group reaches. &#x60;linkToken&#x60; opens a link-only pool. Checked against this key’s spending controls; send an Idempotency-Key.
*BuyerApi* | [**createBuyerGroupBuyLeave**](docs/Api/BuyerApi.md#createbuyergroupbuyleave) | **POST** /v1/buyer/group-buys/{id}/leave | Leave a group buy and release your hold.
*BuyerApi* | [**createBuyerHunt**](docs/Api/BuyerApi.md#createbuyerhunt) | **POST** /v1/buyer/hunts | Start a buyer-agent hunt — over a search (filters), or auto-buy on one listing (listingSlug: buy it once its price, sale applied, is within maxPriceCents). &#x60;offer&#x60; and &#x60;buy&#x60; modes also need buyer:checkout:write, and the budget is checked against this key’s spending controls.
*BuyerApi* | [**createBuyerInstantOfferAccept**](docs/Api/BuyerApi.md#createbuyerinstantofferaccept) | **POST** /v1/buyer/instant-offers/{id}/accept | Accept Crossly’s instant offer on a collection item. Ops then send a prepaid label; the store credit is paid once the item arrives and checks out.
*BuyerApi* | [**createBuyerLayawayCancel**](docs/Api/BuyerApi.md#createbuyerlayawaycancel) | **POST** /v1/buyer/layaways/{id}/cancel | Cancel a layaway: everything paid comes back except the layaway fee (10% of the price, at most $15).
*BuyerApi* | [**createBuyerLayawayPay**](docs/Api/BuyerApi.md#createbuyerlayawaypay) | **POST** /v1/buyer/layaways/{id}/pay | Pay some (at least $1) or all of what is left now, on the saved card. Paid in full, it ships.
*BuyerApi* | [**createBuyerListingAudioSummary**](docs/Api/BuyerApi.md#createbuyerlistingaudiosummary) | **POST** /v1/buyer/listings/{slug}/audio-summary | Record the spoken summary of a listing (cached per listing version). 503 naming TTS_API_KEY when no speech provider is configured.
*BuyerApi* | [**createBuyerListingSplit**](docs/Api/BuyerApi.md#createbuyerlistingsplit) | **POST** /v1/buyer/listings/{slug}/split | Split a purchase: one pay link per person; nobody is charged until all have paid.
*BuyerApi* | [**createBuyerListingSubscribe**](docs/Api/BuyerApi.md#createbuyerlistingsubscribe) | **POST** /v1/buyer/listings/{slug}/subscribe | Subscribe &amp; save: a standing order charged to your saved card every interval. Checked against this key’s spending controls; send an Idempotency-Key.
*BuyerApi* | [**createBuyerListingTryOn**](docs/Api/BuyerApi.md#createbuyerlistingtryon) | **POST** /v1/buyer/listings/{slug}/try-on | Render an AI try-on of this listing on the buyer’s own photo (base64 &#x60;photo&#x60;, or &#x60;reuseLastPhoto&#x60;). &#x60;confirmSelfAdult&#x60; must be true: the photo is of the buyer and they are 18+. Wearables only; capped per day; 503 naming TRYON_API_KEY when no image model is configured.
*BuyerApi* | [**createBuyerMarketBid**](docs/Api/BuyerApi.md#createbuyermarketbid) | **POST** /v1/buyer/market/bids | Place a fixed-price market bid. SPENDS MONEY: it fills against the lowest ask at or under your price and charges your saved card (plus the fast-ship premium when fastShip is set and it fills from vault stock). deliverTo vault keeps it in your Crossly vault; gradeWith sends a raw card to a Grading run first. Checked against this key’s spending controls; send an Idempotency-Key.
*BuyerApi* | [**createBuyerMarketWatch**](docs/Api/BuyerApi.md#createbuyermarketwatch) | **POST** /v1/buyer/market/watches | Watch a market variant: alert at or below a price, or on any drop.
*BuyerApi* | [**createBuyerOffer**](docs/Api/BuyerApi.md#createbuyeroffer) | **POST** /v1/buyer/offers | Offer a price on a listing.
*BuyerApi* | [**createBuyerOfferRespond**](docs/Api/BuyerApi.md#createbuyerofferrespond) | **POST** /v1/buyer/offers/{id}/respond | Answer a seller’s counteroffer — accept, decline, or counter back.
*BuyerApi* | [**createBuyerOrderCancel**](docs/Api/BuyerApi.md#createbuyerordercancel) | **POST** /v1/buyer/orders/{id}/cancel | Cancel an order before it ships — refunds it in full.
*BuyerApi* | [**createBuyerOrderInr**](docs/Api/BuyerApi.md#createbuyerorderinr) | **POST** /v1/buyer/orders/{id}/inr | Open an item-not-received case.
*BuyerApi* | [**createBuyerOrderReceived**](docs/Api/BuyerApi.md#createbuyerorderreceived) | **POST** /v1/buyer/orders/{id}/received | Confirm you received an order.
*BuyerApi* | [**createBuyerOrderTip**](docs/Api/BuyerApi.md#createbuyerordertip) | **POST** /v1/buyer/orders/{id}/tip | Tip the seller on one of your shipped orders, charged to your saved card. One tip per order; $1–$500; checked against this key’s spending controls.
*BuyerApi* | [**createBuyerPackFairnessRotate**](docs/Api/BuyerApi.md#createbuyerpackfairnessrotate) | **POST** /v1/buyer/packs/fairness/rotate | Reveal your current server seed and start a new one (optionally with your own client seed). Refused while an opening is awaiting payment.
*BuyerApi* | [**createBuyerPackOpen**](docs/Api/BuyerApi.md#createbuyerpackopen) | **POST** /v1/buyer/packs/{slug}/open | Open a pack. SPENDS MONEY: charges the pack price to your saved card, then pulls one real item by the published odds (provably fair: see /buyer/packs/fairness) into your Crossly vault. confirmAdult must be true. Checked against this key’s spending controls; send an Idempotency-Key.
*BuyerApi* | [**createBuyerPackOpeningSellBack**](docs/Api/BuyerApi.md#createbuyerpackopeningsellback) | **POST** /v1/buyer/pack-openings/{id}/sell-back | Sell a pull straight back for Crossly credit at the pack’s buyback rate, within its window, while it is still in your vault.
*BuyerApi* | [**createBuyerPassportClaim**](docs/Api/BuyerApi.md#createbuyerpassportclaim) | **POST** /v1/buyer/passports/{code}/claim | Claim a passport as the item’s current owner — the buyer of its latest Crossly sale, or (after a sale on another marketplace) with the transfer code from the card in the box — shown as “in its owner’s hands” until it sells again.
*BuyerApi* | [**createBuyerProtectionPlanCancel**](docs/Api/BuyerApi.md#createbuyerprotectionplancancel) | **POST** /v1/buyer/protection-plans/{id}/cancel | Cancel a protection plan. The insurer decides what is refundable (pro-rata after the free-look window); that amount goes back to the card.
*BuyerApi* | [**createBuyerPurchaseFit**](docs/Api/BuyerApi.md#createbuyerpurchasefit) | **POST** /v1/buyer/purchases/{id}/fit | Say how a delivered purchase fit: true_to_size, small or large. It teaches your size memory and, pooled with other buyers, how the brand runs.
*BuyerApi* | [**createBuyerPurchaseReturn**](docs/Api/BuyerApi.md#createbuyerpurchasereturn) | **POST** /v1/buyer/purchases/{id}/return | Return a purchase under the seller’s policy, or send back a try-at-home item. With reason doesnt_fit, &#x60;fit&#x60; (small | large) says which way, and it feeds your size memory.
*BuyerApi* | [**createBuyerRegistry**](docs/Api/BuyerApi.md#createbuyerregistry) | **POST** /v1/buyer/registries | Start a gift registry (wedding, baby, birthday, housewarming, graduation, other). Items are added like any wishlist item; set shipAddressId to one of your saved addresses so guests can buy — they never see it.
*BuyerApi* | [**createBuyerRegistryGiftThanked**](docs/Api/BuyerApi.md#createbuyerregistrygiftthanked) | **POST** /v1/buyer/registries/{id}/gifts/{giftId}/thanked | Tick a gift as thanked (or untick it).
*BuyerApi* | [**createBuyerRentalArrivalPhoto**](docs/Api/BuyerApi.md#createbuyerrentalarrivalphoto) | **POST** /v1/buyer/rentals/{id}/arrival-photos | Photograph a rental on arrival (URLs you uploaded): your side of the condition record.
*BuyerApi* | [**createBuyerRentalBuyout**](docs/Api/BuyerApi.md#createbuyerrentalbuyout) | **POST** /v1/buyer/rentals/{id}/buyout | Buy the item you are renting: the price less the rent-to-own credit → clientSecret.
*BuyerApi* | [**createBuyerRentalCancel**](docs/Api/BuyerApi.md#createbuyerrentalcancel) | **POST** /v1/buyer/rentals/{id}/cancel | Cancel a rental that has not shipped: everything is refunded.
*BuyerApi* | [**createBuyerRentalClaimResponse**](docs/Api/BuyerApi.md#createbuyerrentalclaimresponse) | **POST** /v1/buyer/rentals/{id}/claim-response | Answer a deposit claim: accept (the claim is paid, the rest refunded) or dispute (Crossly decides).
*BuyerApi* | [**createBuyerRentalDelivered**](docs/Api/BuyerApi.md#createbuyerrentaldelivered) | **POST** /v1/buyer/rentals/{id}/delivered | Confirm your rental arrived.
*BuyerApi* | [**createBuyerRentalExtension**](docs/Api/BuyerApi.md#createbuyerrentalextension) | **POST** /v1/buyer/rentals/{id}/extensions | Ask for more days. Auto-approved extensions return a clientSecret to pay with Stripe.
*BuyerApi* | [**createBuyerRentalExtensionPay**](docs/Api/BuyerApi.md#createbuyerrentalextensionpay) | **POST** /v1/buyer/rentals/{id}/extensions/{extensionId}/pay | Pay for an extension the seller approved → clientSecret.
*BuyerApi* | [**createBuyerRentalIdentityStart**](docs/Api/BuyerApi.md#createbuyerrentalidentitystart) | **POST** /v1/buyer/rentals/identity/start | Start the ID check renting needs (Stripe Identity: photo ID + selfie). Open &#x60;url&#x60; (hosted) or use &#x60;clientSecret&#x60; with Stripe.js.
*BuyerApi* | [**createBuyerRentalReturnShipped**](docs/Api/BuyerApi.md#createbuyerrentalreturnshipped) | **POST** /v1/buyer/rentals/{id}/return-shipped | Say you sent your rental back (optionally with photos).
*BuyerApi* | [**createBuyerReturnCancel**](docs/Api/BuyerApi.md#createbuyerreturncancel) | **POST** /v1/buyer/returns/{id}/cancel | Cancel a return before it ships.
*BuyerApi* | [**createBuyerReturnTracking**](docs/Api/BuyerApi.md#createbuyerreturntracking) | **POST** /v1/buyer/returns/{id}/tracking | Add tracking to a return you shipped on your own label.
*BuyerApi* | [**createBuyerSellerClubJoin**](docs/Api/BuyerApi.md#createbuyersellerclubjoin) | **POST** /v1/buyer/sellers/{sellerUserId}/club/join | Join a seller’s loyalty club (free). Your tier’s discount then applies to their items — the best of it and any other rate you have with them, never stacked.
*BuyerApi* | [**createBuyerSellerLoyaltyJoin**](docs/Api/BuyerApi.md#createbuyersellerloyaltyjoin) | **POST** /v1/buyer/sellers/{sellerUserId}/loyalty/join | Join a seller’s loyalty club. Invite-only clubs take only invited buyers. Your tier and its perks are granted at once.
*BuyerApi* | [**createBuyerSellerReport**](docs/Api/BuyerApi.md#createbuyersellerreport) | **POST** /v1/buyer/sellers/{username}/report | Report a seller to Crossly’s trust team.
*BuyerApi* | [**createBuyerSplitCancel**](docs/Api/BuyerApi.md#createbuyersplitcancel) | **POST** /v1/buyer/splits/{id}/cancel | Cancel a split you organised; every held share is released.
*BuyerApi* | [**createBuyerStoreReport**](docs/Api/BuyerApi.md#createbuyerstorereport) | **POST** /v1/buyer/stores/{slug}/report | Report a store to Crossly’s trust team.
*BuyerApi* | [**createBuyerTogether**](docs/Api/BuyerApi.md#createbuyertogether) | **POST** /v1/buyer/together | Start a shop-together room.
*BuyerApi* | [**createBuyerTogetherItem**](docs/Api/BuyerApi.md#createbuyertogetheritem) | **POST** /v1/buyer/together/{code}/items | Add a listing to a shop-together board.
*BuyerApi* | [**createBuyerTogetherItemVote**](docs/Api/BuyerApi.md#createbuyertogetheritemvote) | **POST** /v1/buyer/together/{code}/items/{id}/vote | Vote an item on a room’s board up (1), down (-1) or clear (0).
*BuyerApi* | [**createBuyerTogetherJoin**](docs/Api/BuyerApi.md#createbuyertogetherjoin) | **POST** /v1/buyer/together/{code}/join | Join a shop-together room by its code.
*BuyerApi* | [**createBuyerTogetherLeave**](docs/Api/BuyerApi.md#createbuyertogetherleave) | **POST** /v1/buyer/together/{code}/leave | Leave a shop-together room.
*BuyerApi* | [**createBuyerTogetherMessage**](docs/Api/BuyerApi.md#createbuyertogethermessage) | **POST** /v1/buyer/together/{code}/messages | Say something in a shop-together room.
*BuyerApi* | [**createBuyerTotalRequest**](docs/Api/BuyerApi.md#createbuyertotalrequest) | **POST** /v1/buyer/total-requests | Ask a seller for one combined shipping total on everything of theirs in your cart.
*BuyerApi* | [**createBuyerVaultList**](docs/Api/BuyerApi.md#createbuyervaultlist) | **POST** /v1/buyer/vault/{id}/list | Sell a vault item on the market at your price. It is already authenticated, so when it sells nothing ships in: the buyer keeps it vaulted or it ships straight to them.
*BuyerApi* | [**createBuyerVaultUnlist**](docs/Api/BuyerApi.md#createbuyervaultunlist) | **POST** /v1/buyer/vault/{id}/unlist | Take a vault item off the market; it stays stored.
*BuyerApi* | [**createBuyerVaultWithdraw**](docs/Api/BuyerApi.md#createbuyervaultwithdraw) | **POST** /v1/buyer/vault/{id}/withdraw | Ship a vault item home, standard or expedited. The shipping, any storage it owes and the early-withdrawal fee (within 90 days of arriving) are charged to your saved card now, all checked against this key’s spending controls; send an Idempotency-Key.
*BuyerApi* | [**createBuyerWholesaleCatalogApply**](docs/Api/BuyerApi.md#createbuyerwholesalecatalogapply) | **POST** /v1/buyer/wholesale/catalogs/{storeSlug}/{catalogSlug}/apply | Apply to a store&#39;s wholesale catalog: { message?, answers [{ id, value }], resaleCertUrl?, resaleCertState?, taxId?, businessInfo? }. The seller&#39;s requirements are enforced (400 trade_apply_requirements names the first one missing); the seller reviews the request.
*BuyerApi* | [**createBuyerWholesaleFreightRequest**](docs/Api/BuyerApi.md#createbuyerwholesalefreightrequest) | **POST** /v1/buyer/wholesale/freight-requests | Ask a seller to quote freight for their lines in your cart (an order over their pallet threshold): { sellerUserId, weightLbs?, shipTo? { postalCode, country, city?, region?, liftgate?, dock? }, note? }. One open request per seller.
*BuyerApi* | [**createBuyerWholesaleInvoicePayLink**](docs/Api/BuyerApi.md#createbuyerwholesaleinvoicepaylink) | **POST** /v1/buyer/wholesale/invoices/{id}/pay-link | A hosted payment page for an on-account invoice: amountCents? (part of the balance, at least $1), method? card | ach. Nothing is charged until the buyer completes the page.
*BuyerApi* | [**createBuyerWholesaleOrderSheet**](docs/Api/BuyerApi.md#createbuyerwholesaleordersheet) | **POST** /v1/buyer/wholesale/order-sheets | Save an order sheet: name, lines [{ platformListingId, listingVariantId?, catalogId?, quantity }] from one seller, optional catalogId, poReference, note.
*BuyerApi* | [**createBuyerWholesaleQuote**](docs/Api/BuyerApi.md#createbuyerwholesalequote) | **POST** /v1/buyer/wholesale/quotes | Ask one seller for a quote: items [{ platformListingId, listingVariantId?, quantity, targetUnitPriceCents? }] (one seller per quote), optional catalogId, note, poReference.
*BuyerApi* | [**createBuyerWholesaleQuoteAccept**](docs/Api/BuyerApi.md#createbuyerwholesalequoteaccept) | **POST** /v1/buyer/wholesale/quotes/{id}/accept | Accept an answered quote: its priced items go into your cart at the quoted quantities, locked at the quoted prices until the quote expires (changing a line&#39;s quantity drops the lock). Paying happens at checkout on Crossly.
*BuyerApi* | [**createBuyerWholesaleQuoteWithdraw**](docs/Api/BuyerApi.md#createbuyerwholesalequotewithdraw) | **POST** /v1/buyer/wholesale/quotes/{id}/withdraw | Withdraw a quote request that is still requested or answered.
*BuyerApi* | [**createBuyerWholesaleUploadValidate**](docs/Api/BuyerApi.md#createbuyerwholesaleuploadvalidate) | **POST** /v1/buyer/wholesale/upload/validate | Validate a CSV / PO against one catalog: rows [{ line, sku, quantity }] are matched by SKU (item or option SKU, or listing slug), merged per item and priced today; unmatched rows come back by line.
*BuyerApi* | [**createBuyerWishlist**](docs/Api/BuyerApi.md#createbuyerwishlist) | **POST** /v1/buyer/wishlists | Create a wishlist.
*BuyerApi* | [**createBuyerWishlistInvite**](docs/Api/BuyerApi.md#createbuyerwishlistinvite) | **POST** /v1/buyer/wishlists/{id}/invite | Share a wishlist with a co-editor: a single-use link (14 days). Members add and remove items; only the owner renames, deletes or removes members. At most 20.
*BuyerApi* | [**createBuyerWishlistItem**](docs/Api/BuyerApi.md#createbuyerwishlistitem) | **POST** /v1/buyer/wishlists/{id}/items | Add a listing to a wishlist.
*BuyerApi* | [**createBuyerWishlistJoin**](docs/Api/BuyerApi.md#createbuyerwishlistjoin) | **POST** /v1/buyer/wishlists/join/{token} | Join a wishlist you were invited to edit.
*BuyerApi* | [**createBuyerWishlistShare**](docs/Api/BuyerApi.md#createbuyerwishlistshare) | **POST** /v1/buyer/wishlists/{id}/share | Share a wishlist — makes it public and returns its link.
*BuyerApi* | [**deleteBuyerBoard**](docs/Api/BuyerApi.md#deletebuyerboard) | **DELETE** /v1/buyer/boards/{id} | Delete a board.
*BuyerApi* | [**deleteBuyerBoardItem**](docs/Api/BuyerApi.md#deletebuyerboarditem) | **DELETE** /v1/buyer/boards/{id}/items/{platformListingId} | Take a listing off a board.
*BuyerApi* | [**deleteBuyerBreakSpotHold**](docs/Api/BuyerApi.md#deletebuyerbreakspothold) | **DELETE** /v1/buyer/breaks/{id}/spots/{spotId}/hold | Release a break spot you hold.
*BuyerApi* | [**deleteBuyerCartItem**](docs/Api/BuyerApi.md#deletebuyercartitem) | **DELETE** /v1/buyer/cart/items/{id} | Remove a line from your cart.
*BuyerApi* | [**deleteBuyerCartSaved**](docs/Api/BuyerApi.md#deletebuyercartsaved) | **DELETE** /v1/buyer/cart/saved/{id} | Remove an item from saved-for-later. Returns the remaining list.
*BuyerApi* | [**deleteBuyerCompanyMember**](docs/Api/BuyerApi.md#deletebuyercompanymember) | **DELETE** /v1/buyer/company/members/{id} | Remove a member or cancel an invite (owner), or leave the company (your own member id).
*BuyerApi* | [**deleteBuyerConversationGuest**](docs/Api/BuyerApi.md#deletebuyerconversationguest) | **DELETE** /v1/buyer/conversations/{id}/guests/{userId} | Remove a guest (the thread’s buyer), or leave (a guest, with your own user id).
*BuyerApi* | [**deleteBuyerCreationReview**](docs/Api/BuyerApi.md#deletebuyercreationreview) | **DELETE** /v1/buyer/creations/{format}/{id}/review | Remove your review of a creation (its vote leaves the rating with it).
*BuyerApi* | [**deleteBuyerEventRsvp**](docs/Api/BuyerApi.md#deletebuyereventrsvp) | **DELETE** /v1/buyer/events/{slug}/rsvp | Take back your RSVP.
*BuyerApi* | [**deleteBuyerFitRef**](docs/Api/BuyerApi.md#deletebuyerfitref) | **DELETE** /v1/buyer/fit/refs/{id} | Delete a reference garment.
*BuyerApi* | [**deleteBuyerHomeGuestbook**](docs/Api/BuyerApi.md#deletebuyerhomeguestbook) | **DELETE** /v1/buyer/home/guestbook/{id} | Hide a line from your home’s guestbook.
*BuyerApi* | [**deleteBuyerMarketBid**](docs/Api/BuyerApi.md#deletebuyermarketbid) | **DELETE** /v1/buyer/market/bids/{id} | Cancel a resting market bid.
*BuyerApi* | [**deleteBuyerMarketWatch**](docs/Api/BuyerApi.md#deletebuyermarketwatch) | **DELETE** /v1/buyer/market/watches/{id} | Stop watching a market variant.
*BuyerApi* | [**deleteBuyerOffer**](docs/Api/BuyerApi.md#deletebuyeroffer) | **DELETE** /v1/buyer/offers/{id} | Withdraw an offer you made that the seller has not answered.
*BuyerApi* | [**deleteBuyerRecentlyViewed**](docs/Api/BuyerApi.md#deletebuyerrecentlyviewed) | **DELETE** /v1/buyer/recently-viewed/{slug} | Remove one listing from your recently viewed.
*BuyerApi* | [**deleteBuyerRecentlyViewed2**](docs/Api/BuyerApi.md#deletebuyerrecentlyviewed2) | **DELETE** /v1/buyer/recently-viewed | Clear your recently viewed list.
*BuyerApi* | [**deleteBuyerRegistry**](docs/Api/BuyerApi.md#deletebuyerregistry) | **DELETE** /v1/buyer/registries/{id} | Delete a registry (and the wishlist behind it).
*BuyerApi* | [**deleteBuyerSellerClubJoin**](docs/Api/BuyerApi.md#deletebuyersellerclubjoin) | **DELETE** /v1/buyer/sellers/{sellerUserId}/club/join | Leave a seller’s loyalty club.
*BuyerApi* | [**deleteBuyerSellerLoyaltyJoin**](docs/Api/BuyerApi.md#deletebuyersellerloyaltyjoin) | **DELETE** /v1/buyer/sellers/{sellerUserId}/loyalty/join | Leave a seller’s loyalty club.
*BuyerApi* | [**deleteBuyerTogetherItem**](docs/Api/BuyerApi.md#deletebuyertogetheritem) | **DELETE** /v1/buyer/together/{code}/items/{id} | Take an item you added off a room’s board.
*BuyerApi* | [**deleteBuyerTotalRequest**](docs/Api/BuyerApi.md#deletebuyertotalrequest) | **DELETE** /v1/buyer/total-requests/{id} | Cancel a total request you made.
*BuyerApi* | [**deleteBuyerTryOn**](docs/Api/BuyerApi.md#deletebuyertryon) | **DELETE** /v1/buyer/try-ons/{id} | Delete a try-on and its images — or pass &#x60;all&#x60; to delete every photo and result.
*BuyerApi* | [**deleteBuyerWholesaleOrderSheet**](docs/Api/BuyerApi.md#deletebuyerwholesaleordersheet) | **DELETE** /v1/buyer/wholesale/order-sheets/{id} | Delete an order sheet.
*BuyerApi* | [**deleteBuyerWishlist**](docs/Api/BuyerApi.md#deletebuyerwishlist) | **DELETE** /v1/buyer/wishlists/{id} | Delete a wishlist and everything on it.
*BuyerApi* | [**deleteBuyerWishlistItem**](docs/Api/BuyerApi.md#deletebuyerwishlistitem) | **DELETE** /v1/buyer/wishlists/{id}/items/{slug} | Take a listing off a wishlist.
*BuyerApi* | [**deleteBuyerWishlistMember**](docs/Api/BuyerApi.md#deletebuyerwishlistmember) | **DELETE** /v1/buyer/wishlists/{id}/members/{userId} | Remove a co-editor (the owner), or leave a list shared with you (your own user id).
*BuyerApi* | [**getBuyerAuctionMe**](docs/Api/BuyerApi.md#getbuyerauctionme) | **GET** /v1/buyer/auctions/{slug}/me | Where you stand in one auction — your max, leading, won, must you pay.
*BuyerApi* | [**getBuyerBadge**](docs/Api/BuyerApi.md#getbuyerbadge) | **GET** /v1/buyer/badges | The counts behind the account badge — unread messages, offers waiting, orders to review.
*BuyerApi* | [**getBuyerBoard**](docs/Api/BuyerApi.md#getbuyerboard) | **GET** /v1/buyer/boards/{id} | One of your boards with its layout: each item’s x, y and width as fractions of the board, and stacking order.
*BuyerApi* | [**getBuyerBoardShared**](docs/Api/BuyerApi.md#getbuyerboardshared) | **GET** /v1/buyer/boards/shared/{token} | A shared outfit board, by its link token.
*BuyerApi* | [**getBuyerBreak**](docs/Api/BuyerApi.md#getbuyerbreak) | **GET** /v1/buyer/breaks/{id} | A card break’s board: spots, holders, and the seed after the draw.
*BuyerApi* | [**getBuyerCase**](docs/Api/BuyerApi.md#getbuyercase) | **GET** /v1/buyer/cases/{id} | One case — its state, the message thread, and the return parcel if there is one.
*BuyerApi* | [**getBuyerCatalogListingMySize**](docs/Api/BuyerApi.md#getbuyercataloglistingmysize) | **GET** /v1/buyer/catalog/listings/{slug}/my-size | This item against your size: the size you keep in this kind of item (and in this brand), whether this one is your size, smaller or larger, a warning if this brand and size ran small or large on you before, and how other buyers say the brand runs. null for an unsized item.
*BuyerApi* | [**getBuyerCatalogListingPrice**](docs/Api/BuyerApi.md#getbuyercataloglistingprice) | **GET** /v1/buyer/catalog/listings/{slug}/price | The price today. When the seller has the same item live on another marketplace for less, this IS that price (&#x60;priceMatch&#x60; says where from), and &#x60;lowestAnywhere&#x60; lists the marketplaces it is guaranteed not to be cheaper on. &#x60;priceCheck&#x60; rates it against real sales of the same catalog item in the same condition over the last 180 days (great / good / fair / high, with the median and middle-half range in cents); null until there are 3+ sales from 2+ sellers.
*BuyerApi* | [**getBuyerCatalogListingRental**](docs/Api/BuyerApi.md#getbuyercataloglistingrental) | **GET** /v1/buyer/catalog/listings/{slug}/rental | Whether a listing is for rent: day and week rates, the refundable deposit, length limits, the turnaround buffer, and the dates already booked. null when it is not for rent.
*BuyerApi* | [**getBuyerCheckoutUsdc**](docs/Api/BuyerApi.md#getbuyercheckoutusdc) | **GET** /v1/buyer/checkout/usdc | Whether Crossly takes USDC (Stripe stablecoin payments: Solana, Ethereum, Base, Polygon), and its per-order limit. Paying needs the buyer’s wallet, so it happens in the browser checkout, never unattended.
*BuyerApi* | [**getBuyerCollectionOffer**](docs/Api/BuyerApi.md#getbuyercollectionoffer) | **GET** /v1/buyer/collection/{id}/offer | What an item in your collection would fetch now: the top open bid on the market for the same variant, condition and grade, and Crossly’s instant offer in store credit when that is switched on (a quote valid for a limited time).
*BuyerApi* | [**getBuyerCollectionSet**](docs/Api/BuyerApi.md#getbuyercollectionset) | **GET** /v1/buyer/collection/sets/{category}/{brand}/{model} | One set: every piece (owned or missing, with its lowest ask on the market), what completing it would cost now, and the leaderboard of collectors who opted in, with your rank.
*BuyerApi* | [**getBuyerCompany**](docs/Api/BuyerApi.md#getbuyercompany) | **GET** /v1/buyer/company | Your buyer company (members, roles, approval limits, shared addresses), or null when you are in none.
*BuyerApi* | [**getBuyerCreation**](docs/Api/BuyerApi.md#getbuyercreation) | **GET** /v1/buyer/creations/{format}/{id} | A live creation&#39;s public page: its rating breakdown, recent reviews and whether you can review it.
*BuyerApi* | [**getBuyerCreator**](docs/Api/BuyerApi.md#getbuyercreator) | **GET** /v1/buyer/creators/{handle} | A creator storefront: profile, affiliate code, and shelves of live picks.
*BuyerApi* | [**getBuyerEvent**](docs/Api/BuyerApi.md#getbuyerevent) | **GET** /v1/buyer/events/{slug} | A seller event: schedule, location, host, linked listings, live show, promo code, RSVP counts and your own RSVP.
*BuyerApi* | [**getBuyerFitVocabulary**](docs/Api/BuyerApi.md#getbuyerfitvocabulary) | **GET** /v1/buyer/fit/vocabulary | Garment kinds and the measurements each takes.
*BuyerApi* | [**getBuyerGiftFinderOption**](docs/Api/BuyerApi.md#getbuyergiftfinderoption) | **GET** /v1/buyer/gift-finder/options | The gift finder’s questions: recipients, interests, budgets.
*BuyerApi* | [**getBuyerHome**](docs/Api/BuyerApi.md#getbuyerhome) | **GET** /v1/buyer/home | Your home in Crossly World (made on first read).
*BuyerApi* | [**getBuyerHomePlaceable**](docs/Api/BuyerApi.md#getbuyerhomeplaceable) | **GET** /v1/buyer/home/placeable | What you could place in your home: your items and delivered furniture.
*BuyerApi* | [**getBuyerImpact**](docs/Api/BuyerApi.md#getbuyerimpact) | **GET** /v1/buyer/impact | The sourced footprint your secondhand purchases avoided.
*BuyerApi* | [**getBuyerLayaway**](docs/Api/BuyerApi.md#getbuyerlayaway) | **GET** /v1/buyer/layaways/{id} | One layaway and its schedule.
*BuyerApi* | [**getBuyerListingAudioSummary**](docs/Api/BuyerApi.md#getbuyerlistingaudiosummary) | **GET** /v1/buyer/listings/{slug}/audio-summary | A spoken summary of a listing (accessibility): the text, built only from the listing’s own fields and the seller’s description, and the recording of it when one exists.
*BuyerApi* | [**getBuyerListingBoughtTogether**](docs/Api/BuyerApi.md#getbuyerlistingboughttogether) | **GET** /v1/buyer/listings/{slug}/bought-together | Frequently bought together / complete the look.
*BuyerApi* | [**getBuyerListingBreak**](docs/Api/BuyerApi.md#getbuyerlistingbreak) | **GET** /v1/buyer/listings/{slug}/break | The card break this listing sells spots in, if any; the seed is revealed after the draw.
*BuyerApi* | [**getBuyerListingCert**](docs/Api/BuyerApi.md#getbuyerlistingcert) | **GET** /v1/buyer/listings/{slug}/cert | A graded listing’s cert, checked with the grader: the seller’s claim (grader, grade, cert number), status (verified, mismatch, not_found, or unchecked where the grader has no lookup), population and how many graded higher where the grader publishes them, and the grader’s own cert page.
*BuyerApi* | [**getBuyerListingFit**](docs/Api/BuyerApi.md#getbuyerlistingfit) | **GET** /v1/buyer/listings/{slug}/fit | A listing’s flat measurements, compared with your saved reference garments.
*BuyerApi* | [**getBuyerListingGroupBuy**](docs/Api/BuyerApi.md#getbuyerlistinggroupbuy) | **GET** /v1/buyer/listings/{slug}/group-buy | The group buy open on this listing, if any.
*BuyerApi* | [**getBuyerListingImpact**](docs/Api/BuyerApi.md#getbuyerlistingimpact) | **GET** /v1/buyer/listings/{slug}/impact | The sourced footprint of making a new equivalent; null when no published figure applies.
*BuyerApi* | [**getBuyerListingResaleValue**](docs/Api/BuyerApi.md#getbuyerlistingresalevalue) | **GET** /v1/buyer/listings/{slug}/resale-value | What the same brand and category resold for on Crossly, and the buyback offer when enabled.
*BuyerApi* | [**getBuyerListingSubscribeOffer**](docs/Api/BuyerApi.md#getbuyerlistingsubscribeoffer) | **GET** /v1/buyer/listings/{slug}/subscribe-offer | The subscribe &amp; save discount and intervals on a listing; null when the seller has none.
*BuyerApi* | [**getBuyerListingTryOn**](docs/Api/BuyerApi.md#getbuyerlistingtryon) | **GET** /v1/buyer/listings/{slug}/try-on | Whether an AI try-on is offered for this listing (a wearable with a photo) and whether the image model is configured.
*BuyerApi* | [**getBuyerLiveStreamAuction**](docs/Api/BuyerApi.md#getbuyerlivestreamauction) | **GET** /v1/buyer/live-streams/{id}/auction | The auction running on a live stream right now, if any. Bid on it by its &#x60;slug&#x60; at POST /v1/buyer/auctions/:slug/bids.
*BuyerApi* | [**getBuyerMarketPurchaseOption**](docs/Api/BuyerApi.md#getbuyermarketpurchaseoption) | **GET** /v1/buyer/market/purchase-options | Before you bid or buy: whether the lowest ask is vault stock (keep it vaulted, or pay fastShipCents to rush it), and the grading runs a raw card can go straight to (pass gradeWith on the bid).
*BuyerApi* | [**getBuyerOrderEligibility**](docs/Api/BuyerApi.md#getbuyerordereligibility) | **GET** /v1/buyer/orders/{id}/eligibility | What you can do with one order right now — cancel, confirm receipt, report not received, leave feedback.
*BuyerApi* | [**getBuyerOrderExport**](docs/Api/BuyerApi.md#getbuyerorderexport) | **GET** /v1/buyer/orders/export | Your order history as CSV text (up to 5,000 orders).
*BuyerApi* | [**getBuyerOrderPriceProtection**](docs/Api/BuyerApi.md#getbuyerorderpriceprotection) | **GET** /v1/buyer/orders/{id}/price-protection | Price protection on one order: if the item gets cheaper before &#x60;until&#x60;, the difference is credited to your Bucks automatically. &#x60;creditedCents&#x60; is what it has paid so far.
*BuyerApi* | [**getBuyerPack**](docs/Api/BuyerApi.md#getbuyerpack) | **GET** /v1/buyer/packs/{slug} | One pack: tiers and odds, items left, expected value, the chase items still in it.
*BuyerApi* | [**getBuyerPackFairness**](docs/Api/BuyerApi.md#getbuyerpackfairness) | **GET** /v1/buyer/packs/fairness | Your provably-fair seeds: the active server-seed commitment (sha256), your client seed and nonce, and every retired seed in full so past openings can be re-run.
*BuyerApi* | [**getBuyerParty**](docs/Api/BuyerApi.md#getbuyerparty) | **GET** /v1/buyer/parties/{slug} | One shopping party.
*BuyerApi* | [**getBuyerPassport**](docs/Api/BuyerApi.md#getbuyerpassport) | **GET** /v1/buyer/passports/{code} | What a product passport tag opens: the item, the verify verdict (registered, tag bound, tag matches with ?uid&#x3D;, authenticated, graded, in its owner’s hands), how many owners and since when — never who or for how much.
*BuyerApi* | [**getBuyerPreference**](docs/Api/BuyerApi.md#getbuyerpreference) | **GET** /v1/buyer/preferences | The shopping profile derived from that activity.
*BuyerApi* | [**getBuyerPriceGuide**](docs/Api/BuyerApi.md#getbuyerpriceguide) | **GET** /v1/buyer/price-guide | What matching items actually sold for on Crossly: median, quartiles, by month, and recent sales. Needs q, brand or category.
*BuyerApi* | [**getBuyerProfile**](docs/Api/BuyerApi.md#getbuyerprofile) | **GET** /v1/buyer/profile | Your Crossly shopping profile — name, email, saved address, Bucks balance.
*BuyerApi* | [**getBuyerPurchaseDelivery**](docs/Api/BuyerApi.md#getbuyerpurchasedelivery) | **GET** /v1/buyer/purchases/{id}/delivery | Where a purchase is going when not to your door: the pickup point (with its release code) or its ship-together consolidation.
*BuyerApi* | [**getBuyerPurchaseLiveMoment**](docs/Api/BuyerApi.md#getbuyerpurchaselivemoment) | **GET** /v1/buyer/purchases/{id}/live-moment | The live show a purchase was bought in, with the offset (seconds) into its replay where it sold. null when it was not bought in a show.
*BuyerApi* | [**getBuyerPurchaseReturn**](docs/Api/BuyerApi.md#getbuyerpurchasereturn) | **GET** /v1/buyer/purchases/{id}/return | What a return would refund for each reason, by when, and any return already open.
*BuyerApi* | [**getBuyerPurchaseStory**](docs/Api/BuyerApi.md#getbuyerpurchasestory) | **GET** /v1/buyer/purchases/{id}/story | Your owner story on a purchase, passed on to the next owner if you resell it.
*BuyerApi* | [**getBuyerRegistry**](docs/Api/BuyerApi.md#getbuyerregistry) | **GET** /v1/buyer/registries/{id} | One of your registries: items with how many are wanted and bought.
*BuyerApi* | [**getBuyerRegistryByToken**](docs/Api/BuyerApi.md#getbuyerregistrybytoken) | **GET** /v1/buyer/registry/{token} | A registry as a guest sees it: items, how many are still wanted, and whether it can ship. Never the address.
*BuyerApi* | [**getBuyerRental**](docs/Api/BuyerApi.md#getbuyerrental) | **GET** /v1/buyer/rentals/{id} | One of your rentals: timeline, payments, the return label, extension and buy-out terms.
*BuyerApi* | [**getBuyerRentalEligibility**](docs/Api/BuyerApi.md#getbuyerrentaleligibility) | **GET** /v1/buyer/rentals/eligibility | Can you rent right now: ID-verified (a photo ID and a matching selfie, once), the verified name rentals ship to, and your standing (one rental at a time until your first comes back; none after one that never did).
*BuyerApi* | [**getBuyerSellerClub**](docs/Api/BuyerApi.md#getbuyersellerclub) | **GET** /v1/buyer/sellers/{sellerUserId}/club | A seller’s loyalty club: its tiers (spend threshold, discount, perks) and your standing. null when the seller has none.
*BuyerApi* | [**getBuyerSellerLoyalty**](docs/Api/BuyerApi.md#getbuyersellerloyalty) | **GET** /v1/buyer/sellers/{sellerUserId}/loyalty | A seller’s loyalty club with its typed perks per tier, its join mode (automatic, opt-in, invite-only) and your standing. null when they run none.
*BuyerApi* | [**getBuyerSellerTrust**](docs/Api/BuyerApi.md#getbuyersellertrust) | **GET** /v1/buyer/sellers/{username}/trust | Seller at a glance: member since, completed sales, independent rating, typical handling time, dispute rate, trust tier, badges — and the plain sentences the profile shows.
*BuyerApi* | [**getBuyerTogether**](docs/Api/BuyerApi.md#getbuyertogether) | **GET** /v1/buyer/together/{code} | A shop-together room: members, the board with votes, and chat.
*BuyerApi* | [**getBuyerVaultMarketHistory**](docs/Api/BuyerApi.md#getbuyervaultmarkethistory) | **GET** /v1/buyer/vault-markets/history | Your Vault Markets value by day at the marks (oldest first, today live) over &#x60;days&#x60; (default 90), and today’s change against yesterday’s close.
*BuyerApi* | [**getBuyerVaultMarketIndex**](docs/Api/BuyerApi.md#getbuyervaultmarketindex) | **GET** /v1/buyer/vault-markets/indexes/{slug} | One index with its published daily closes (oldest first, &#x60;days&#x60; default 365) and its level now.
*BuyerApi* | [**getBuyerVaultMarketInstantExit**](docs/Api/BuyerApi.md#getbuyervaultmarketinstantexit) | **GET** /v1/buyer/vault-markets/instant-exit/{id} | The Instant Exit quote for one vault unit you hold, and whether it can be sold now.
*BuyerApi* | [**getBuyerVaultMarketOptionAnalytic**](docs/Api/BuyerApi.md#getbuyervaultmarketoptionanalytic) | **GET** /v1/buyer/vault-markets/options/analytics/{underlying} | Options analytics on an underlying: vol surface and smile, IV rank and percentile, open interest and volume by strike and expiry, put/call ratios, expected move and historical vol. Derived, display only. Read only.
*BuyerApi* | [**getBuyerVaultMarketOptionChain**](docs/Api/BuyerApi.md#getbuyervaultmarketoptionchain) | **GET** /v1/buyer/vault-markets/options/chain/{underlying} | The option chain for an underlying (index slug or book key): expiries, and for one expiry each strike’s call and put with bid / ask, last, open interest, theoretical price, implied vol (display only) and Greeks. Prices are cents per contract.
*BuyerApi* | [**getBuyerVaultMarketOptionIv**](docs/Api/BuyerApi.md#getbuyervaultmarketoptioniv) | **GET** /v1/buyer/vault-markets/options/iv/{underlying} | The at-the-money implied vol on an underlying’s nearest expiry, for display: derived from the options book, quality C, never a mark.
*BuyerApi* | [**getBuyerVaultMarketOptionPosition**](docs/Api/BuyerApi.md#getbuyervaultmarketoptionposition) | **GET** /v1/buyer/vault-markets/options/positions | Your fractional options positions with their marks, P&amp;L and Greeks (open by default; &#x60;status&#x60; all for closed and settled too). Read only.
*BuyerApi* | [**getBuyerVaultMarketOptionRisk**](docs/Api/BuyerApi.md#getbuyervaultmarketoptionrisk) | **GET** /v1/buyer/vault-markets/options/risk | Your options portfolio Greeks, a scenario&#39;s P&amp;L (&#x60;priceShift&#x60;, &#x60;volShift&#x60;, &#x60;daysForward&#x60;) and the beta-weighted delta against an index. Read only.
*BuyerApi* | [**getBuyerVaultMarketPredictionBoard**](docs/Api/BuyerApi.md#getbuyervaultmarketpredictionboard) | **GET** /v1/buyer/vault-markets/predictions/board | The busiest open prediction markets and their odds (the Trading Floor board). Anonymous.
*BuyerApi* | [**getBuyerVaultMarketPredictionEvent**](docs/Api/BuyerApi.md#getbuyervaultmarketpredictionevent) | **GET** /v1/buyer/vault-markets/predictions/events/{id} | One expiry’s markets with your holdings in each and their real worst and best case across them.
*BuyerApi* | [**getBuyerVaultMarketPredictionLeaderboard**](docs/Api/BuyerApi.md#getbuyervaultmarketpredictionleaderboard) | **GET** /v1/buyer/vault-markets/predictions/leaderboard | Opt-in forecaster leaderboards (&#x60;period&#x60; week | month | all; &#x60;metric&#x60; pnl | accuracy | brier; &#x60;venue&#x60; live | paper).
*BuyerApi* | [**getBuyerVaultMarketPredictionMarket**](docs/Api/BuyerApi.md#getbuyervaultmarketpredictionmarket) | **GET** /v1/buyer/vault-markets/predictions/markets/{id} | One prediction market: terms, the Yes ladder (live and practice), recent trades, settlement history and the series rules with their hash.
*BuyerApi* | [**getBuyerVaultMarketPredictionMarketHistory**](docs/Api/BuyerApi.md#getbuyervaultmarketpredictionmarkethistory) | **GET** /v1/buyer/vault-markets/predictions/markets/{id}/history | A prediction market’s probability over time (display only, never a mark), candles on the Yes price, volume and open interest (&#x60;range&#x60; 1d, 1w, 1m, all; &#x60;venue&#x60; live or paper).
*BuyerApi* | [**getBuyerVaultMarketShare**](docs/Api/BuyerApi.md#getbuyervaultmarketshare) | **GET** /v1/buyer/vault-markets/shares | Your Vault Shares: shares and percent of each item, cost, implied value at the last share price (display only, never a mark), subscriptions and payouts.
*BuyerApi* | [**getBuyerVaultMarketShareBasket**](docs/Api/BuyerApi.md#getbuyervaultmarketsharebasket) | **GET** /v1/buyer/vault-markets/shares/baskets/{id} | One theme basket: its series, weights and prices, and your holdings against them.
*BuyerApi* | [**getBuyerVaultMarketShareSery**](docs/Api/BuyerApi.md#getbuyervaultmarketsharesery) | **GET** /v1/buyer/vault-markets/shares/series/{id} | One Vault Shares series: the offering, the share book, the latest fills, holders as percentages (nobody named) and buyouts.
*BuyerApi* | [**getBuyerVaultMarketShareSeryHistory**](docs/Api/BuyerApi.md#getbuyervaultmarketshareseryhistory) | **GET** /v1/buyer/vault-markets/shares/series/{id}/history | A Vault Shares series’ full price history (candles), the offering price and the appraisal history. Display only, never a mark.
*BuyerApi* | [**getBuyerVaultMarketShareSeryPerk**](docs/Api/BuyerApi.md#getbuyervaultmarketshareseryperk) | **GET** /v1/buyer/vault-markets/shares/series/{id}/perks | Your holder perks on a series: badge, visit links, viewing days and your bookings.
*BuyerApi* | [**getBuyerVaultMarketWorth**](docs/Api/BuyerApi.md#getbuyervaultmarketworth) | **GET** /v1/buyer/vault-markets/worth | What your vault is worth now: value at the market prices (marks come only from trades) split into reliable and indicative marks, cost and P&amp;L, today’s change, and an estimate of what the units free to sell would fetch from the bids resting on the book now. Read only.
*BuyerApi* | [**getBuyerWholesaleCart**](docs/Api/BuyerApi.md#getbuyerwholesalecart) | **GET** /v1/buyer/wholesale/cart | Your cart grouped per seller: trade terms, the order-minimum progress, every rule the cart breaks (the messages checkout would refuse with), PO reference, quote-locked lines, and the checkout methods, deposit and freight threshold for each group.
*BuyerApi* | [**getBuyerWholesaleCatalogApply**](docs/Api/BuyerApi.md#getbuyerwholesalecatalogapply) | **GET** /v1/buyer/wholesale/catalogs/{storeSlug}/{catalogSlug}/apply | The application form for a store&#39;s wholesale catalog: the seller&#39;s requirements (resale certificate and accepted states, tax id, their custom questions) and your business info pre-filled. applicable&#x3D;false for a catalog you cannot apply to.
*BuyerApi* | [**getBuyerWholesaleDrop**](docs/Api/BuyerApi.md#getbuyerwholesaledrop) | **GET** /v1/buyer/wholesale/drops/{id} | One trade drop open to you: its listings once live (add one to your cart to reserve or buy it), and your reservations in it. 404 for a drop not open to you.
*BuyerApi* | [**getBuyerWholesaleInvoicePayQuote**](docs/Api/BuyerApi.md#getbuyerwholesaleinvoicepayquote) | **GET** /v1/buyer/wholesale/invoices/{id}/pay-quote | What paying an on-account invoice costs now: balance due, the early-pay discount if still open, the minimum part payment and the methods (card, ach).
*BuyerApi* | [**getBuyerWholesaleOrderSheet**](docs/Api/BuyerApi.md#getbuyerwholesaleordersheet) | **GET** /v1/buyer/wholesale/order-sheets/{id} | One order sheet priced TODAY at its quantities, with stock, trade terms and flags (unavailable, out_of_stock, short_stock, price_hidden, needs_option).
*BuyerApi* | [**getBuyerWholesaleQuote**](docs/Api/BuyerApi.md#getbuyerwholesalequote) | **GET** /v1/buyer/wholesale/quotes/{id} | One of your quotes with its items, the seller&#39;s prices and expiry.
*BuyerApi* | [**getBuyerWholesaleReorder**](docs/Api/BuyerApi.md#getbuyerwholesalereorder) | **GET** /v1/buyer/wholesale/reorder/{id} | Buy again: a past wholesale order (purchase or order id) as order-sheet lines at the same quantities, priced today, out-of-stock flagged.
*BuyerApi* | [**listBuyerActivity**](docs/Api/BuyerApi.md#listbuyeractivity) | **GET** /v1/buyer/activity | What this buyer has compared lately.
*BuyerApi* | [**listBuyerAuctionBids**](docs/Api/BuyerApi.md#listbuyerauctionbids) | **GET** /v1/buyer/auctions/{slug}/bids | An auction’s bid history, highest first, bidders anonymised.
*BuyerApi* | [**listBuyerAuctions**](docs/Api/BuyerApi.md#listbuyerauctions) | **GET** /v1/buyer/auctions | Auctions you have bid in — bidding, won or lost (last 100).
*BuyerApi* | [**listBuyerBoards**](docs/Api/BuyerApi.md#listbuyerboards) | **GET** /v1/buyer/boards | Your outfit boards: collages of listings, each with a share link.
*BuyerApi* | [**listBuyerBreaks**](docs/Api/BuyerApi.md#listbuyerbreaks) | **GET** /v1/buyer/breaks | Card-break spots you hold or bought, with what each pulled.
*BuyerApi* | [**listBuyerBuybacks**](docs/Api/BuyerApi.md#listbuyerbuybacks) | **GET** /v1/buyer/buybacks | Your buyback guarantees and requests.
*BuyerApi* | [**listBuyerCart**](docs/Api/BuyerApi.md#listbuyercart) | **GET** /v1/buyer/cart | What is in your Crossly cart.
*BuyerApi* | [**listBuyerCartSaved**](docs/Api/BuyerApi.md#listbuyercartsaved) | **GET** /v1/buyer/cart/saved | Items you saved for later out of your cart (last 200).
*BuyerApi* | [**listBuyerCases**](docs/Api/BuyerApi.md#listbuyercases) | **GET** /v1/buyer/cases | Resolution center — every case you opened (returns, not received, problems).
*BuyerApi* | [**listBuyerCashback**](docs/Api/BuyerApi.md#listbuyercashback) | **GET** /v1/buyer/cashback | Your Scout cashback — pending, confirmed, paid.
*BuyerApi* | [**listBuyerCatalogListingVideos**](docs/Api/BuyerApi.md#listbuyercataloglistingvideos) | **GET** /v1/buyer/catalog/listings/{slug}/videos | Videos the seller recorded for this item on request, newest first, with the question each one answers.
*BuyerApi* | [**listBuyerClubs**](docs/Api/BuyerApi.md#listbuyerclubs) | **GET** /v1/buyer/clubs | Sellers’ loyalty clubs you belong to: your spend with each, your tier and its discount, and the next tier.
*BuyerApi* | [**listBuyerCollectionSets**](docs/Api/BuyerApi.md#listbuyercollectionsets) | **GET** /v1/buyer/collection/sets | Sets you are collecting — a catalogue brand + model you own at least two pieces of — with owned / total and percent complete, most complete first; and whether you show on set leaderboards.
*BuyerApi* | [**listBuyerCompanyApprovals**](docs/Api/BuyerApi.md#listbuyercompanyapprovals) | **GET** /v1/buyer/company/approvals | Spend approval requests (owners and accounts payable see all; others their own). ?status&#x3D;pending|approved|declined|used|expired.
*BuyerApi* | [**listBuyerConsolidations**](docs/Api/BuyerApi.md#listbuyerconsolidations) | **GET** /v1/buyer/consolidations | Your ship-together orders: parcels at the hub, and the one box out.
*BuyerApi* | [**listBuyerConversationGuests**](docs/Api/BuyerApi.md#listbuyerconversationguests) | **GET** /v1/buyer/conversations/{id}/guests | Guests in a chat.
*BuyerApi* | [**listBuyerCreationReviewable**](docs/Api/BuyerApi.md#listbuyercreationreviewable) | **GET** /v1/buyer/creations/reviewable | Creations you bought (decor, wearables, interactive objects, cards from packs) and your review of each.
*BuyerApi* | [**listBuyerEvents**](docs/Api/BuyerApi.md#listbuyerevents) | **GET** /v1/buyer/events | Upcoming and live seller events across Crossly, soonest first.
*BuyerApi* | [**listBuyerFeedback**](docs/Api/BuyerApi.md#listbuyerfeedback) | **GET** /v1/buyer/feedback | Feedback you have left sellers, newest first — with the ids you revise by.
*BuyerApi* | [**listBuyerFeedbackPending**](docs/Api/BuyerApi.md#listbuyerfeedbackpending) | **GET** /v1/buyer/feedback/pending | Orders from the last 60 days that are on their way or arrived and still need your feedback.
*BuyerApi* | [**listBuyerFitRefs**](docs/Api/BuyerApi.md#listbuyerfitrefs) | **GET** /v1/buyer/fit/refs | Your saved reference garments for fit comparison.
*BuyerApi* | [**listBuyerFollowingSellers**](docs/Api/BuyerApi.md#listbuyerfollowingsellers) | **GET** /v1/buyer/following/sellers | Sellers you follow, with how many new listings each has since you last looked.
*BuyerApi* | [**listBuyerGiftCardCredit**](docs/Api/BuyerApi.md#listbuyergiftcardcredit) | **GET** /v1/buyer/gift-cards/credit | Gift card credit on your account, and when it expires.
*BuyerApi* | [**listBuyerGiftCards**](docs/Api/BuyerApi.md#listbuyergiftcards) | **GET** /v1/buyer/gift-cards | Gift cards you bought, newest first.
*BuyerApi* | [**listBuyerGiftFinder**](docs/Api/BuyerApi.md#listbuyergiftfinder) | **GET** /v1/buyer/gift-finder | Live listings for a recipient, interest and budget.
*BuyerApi* | [**listBuyerGiftSent**](docs/Api/BuyerApi.md#listbuyergiftsent) | **GET** /v1/buyer/gifts/sent | Items you sent as gifts: whether the teaser went out, whether it arrived and was opened, and any thank-you. Send one with &#x60;gift&#x60; on checkout.
*BuyerApi* | [**listBuyerHomeBuilders**](docs/Api/BuyerApi.md#listbuyerhomebuilders) | **GET** /v1/buyer/home/builders | Your co-builders: friends who may arrange your home with you.
*BuyerApi* | [**listBuyerHomeBuilding**](docs/Api/BuyerApi.md#listbuyerhomebuilding) | **GET** /v1/buyer/homes/building | The homes you co-build, to visit and arrange.
*BuyerApi* | [**listBuyerHotspots**](docs/Api/BuyerApi.md#listbuyerhotspots) | **GET** /v1/buyer/hotspots | Shop-the-look tags on a story or lookbook photo: each tagged listing and where it sits on the image (x, y as fractions).
*BuyerApi* | [**listBuyerHunts**](docs/Api/BuyerApi.md#listbuyerhunts) | **GET** /v1/buyer/hunts | Your buyer-agent hunts and what they did.
*BuyerApi* | [**listBuyerInstantOffers**](docs/Api/BuyerApi.md#listbuyerinstantoffers) | **GET** /v1/buyer/instant-offers | Your instant offers: live quotes, accepted ones awaiting a label, approved ones (with the prepaid label) and paid ones.
*BuyerApi* | [**listBuyerLayaways**](docs/Api/BuyerApi.md#listbuyerlayaways) | **GET** /v1/buyer/layaways | Your layaways: price, paid so far, what is left, and the installment schedule. Put an item on layaway at checkout with layawayItemIds.
*BuyerApi* | [**listBuyerListingQuickQuestions**](docs/Api/BuyerApi.md#listbuyerlistingquickquestions) | **GET** /v1/buyer/listings/{slug}/quick-questions | One-tap questions this listing supports; send one as &#x60;quick&#x60; on a message.
*BuyerApi* | [**listBuyerListingSellerReviews**](docs/Api/BuyerApi.md#listbuyerlistingsellerreviews) | **GET** /v1/buyer/listings/{slug}/seller-reviews | The seller’s public reviews: summary, text, photos, replies.
*BuyerApi* | [**listBuyerLiveShipments**](docs/Api/BuyerApi.md#listbuyerliveshipments) | **GET** /v1/buyer/live-shipments | Your one-box-per-show shipments: every order won in a show ships together, and postage is charged once (the rest refunded when it ships).
*BuyerApi* | [**listBuyerLiveStreamLineup**](docs/Api/BuyerApi.md#listbuyerlivestreamlineup) | **GET** /v1/buyer/live-streams/{id}/lineup | What a live show will sell, in order: each item, its price, and whether it is still available.
*BuyerApi* | [**listBuyerLoyalty**](docs/Api/BuyerApi.md#listbuyerloyalty) | **GET** /v1/buyer/loyalty | Your loyalty clubs: the tier you hold, progress and how to reach the next tier, the typed perks you hold now, and your history.
*BuyerApi* | [**listBuyerMarketBids**](docs/Api/BuyerApi.md#listbuyermarketbids) | **GET** /v1/buyer/market/bids | Your resting market bids.
*BuyerApi* | [**listBuyerMarketWatches**](docs/Api/BuyerApi.md#listbuyermarketwatches) | **GET** /v1/buyer/market/watches | Market variants you watch, with the price you are waiting for.
*BuyerApi* | [**listBuyerOffers**](docs/Api/BuyerApi.md#listbuyeroffers) | **GET** /v1/buyer/offers | Offers you have made, newest first (last 100).
*BuyerApi* | [**listBuyerOrders**](docs/Api/BuyerApi.md#listbuyerorders) | **GET** /v1/buyer/orders | What you have bought on Crossly, newest first.
*BuyerApi* | [**listBuyerPackOpenings**](docs/Api/BuyerApi.md#listbuyerpackopenings) | **GET** /v1/buyer/pack-openings | Your pulls: what you got, its value, sell-back status, and the fairness proof for each (the server seed once rotated).
*BuyerApi* | [**listBuyerPacks**](docs/Api/BuyerApi.md#listbuyerpacks) | **GET** /v1/buyer/packs | Packs you can open: price, every tier with its published odds, what is left in it and its value range, and the expected value of one opening.
*BuyerApi* | [**listBuyerParties**](docs/Api/BuyerApi.md#listbuyerparties) | **GET** /v1/buyer/parties | Themed shopping parties, live and upcoming.
*BuyerApi* | [**listBuyerPartyListings**](docs/Api/BuyerApi.md#listbuyerpartylistings) | **GET** /v1/buyer/parties/{slug}/listings | Listings shared to a party, featured first.
*BuyerApi* | [**listBuyerPaymentMethods**](docs/Api/BuyerApi.md#listbuyerpaymentmethods) | **GET** /v1/buyer/payment-methods | Your saved cards, the default first.
*BuyerApi* | [**listBuyerPickupPoints**](docs/Api/BuyerApi.md#listbuyerpickuppoints) | **GET** /v1/buyer/pickup-points | Carrier pickup points (UPS Access Point / FedEx Hold at Location) near an address; pass one as &#x60;pickupPoint&#x60; to POST /v1/buyer/checkout.
*BuyerApi* | [**listBuyerProtectionPlans**](docs/Api/BuyerApi.md#listbuyerprotectionplans) | **GET** /v1/buyer/protection-plans | Your protection plans (bought at checkout with &#x60;protection&#x60;): status, term, coverage, contract id, and any refund.
*BuyerApi* | [**listBuyerRegistries**](docs/Api/BuyerApi.md#listbuyerregistries) | **GET** /v1/buyer/registries | Your gift registries.
*BuyerApi* | [**listBuyerRegistryGifts**](docs/Api/BuyerApi.md#listbuyerregistrygifts) | **GET** /v1/buyer/registries/{id}/gifts | Your thank-you list: who bought what off the registry, and whether you have thanked them.
*BuyerApi* | [**listBuyerRegistrySearch**](docs/Api/BuyerApi.md#listbuyerregistrysearch) | **GET** /v1/buyer/registries/search | Find a registry by its name or the registrant’s name. Current and recent registries only.
*BuyerApi* | [**listBuyerRentals**](docs/Api/BuyerApi.md#listbuyerrentals) | **GET** /v1/buyer/rentals | Your rentals: dates, status (reserved, out, returned, claimed, closed, cancelled), the return label, and what happened to the deposit.
*BuyerApi* | [**listBuyerSizeMemoryPrompts**](docs/Api/BuyerApi.md#listbuyersizememoryprompts) | **GET** /v1/buyer/size-memory/prompts | Delivered orders with a size that you haven’t said how they fit (the last 60 days).
*BuyerApi* | [**listBuyerSizeMemorySizes**](docs/Api/BuyerApi.md#listbuyersizememorysizes) | **GET** /v1/buyer/size-memory/sizes | The sizes learned from what you bought and kept, by kind of item (shoes, tops, bottoms, dresses, outerwear) and department.
*BuyerApi* | [**listBuyerSplits**](docs/Api/BuyerApi.md#listbuyersplits) | **GET** /v1/buyer/splits | Purchases you split, with each share’s status.
*BuyerApi* | [**listBuyerStoreListings**](docs/Api/BuyerApi.md#listbuyerstorelistings) | **GET** /v1/buyer/stores/{slug}/listings | A store&#39;s live listings, filtered by tag, category, text and program chips (f: on_sale, discount_eligible, code_eligible, group_buy_active, rentable, wholesale_available…; all must hold), sorted; each card carries its program badges.
*BuyerApi* | [**listBuyerSubscriptions**](docs/Api/BuyerApi.md#listbuyersubscriptions) | **GET** /v1/buyer/subscriptions | Your subscribe &amp; save standing orders.
*BuyerApi* | [**listBuyerTogether**](docs/Api/BuyerApi.md#listbuyertogether) | **GET** /v1/buyer/together | Shop-together rooms you are in.
*BuyerApi* | [**listBuyerTotalRequests**](docs/Api/BuyerApi.md#listbuyertotalrequests) | **GET** /v1/buyer/total-requests | Your combined-shipping total requests, newest per seller.
*BuyerApi* | [**listBuyerTryOns**](docs/Api/BuyerApi.md#listbuyertryons) | **GET** /v1/buyer/try-ons | Your AI try-ons: the rendered images (labelled AI-generated wherever shown).
*BuyerApi* | [**listBuyerVault**](docs/Api/BuyerApi.md#listbuyervault) | **GET** /v1/buyer/vault | What you own in the Crossly vault: stored (authenticated, on a shelf), listed for sale, or on its way home — with the price to ship one home.
*BuyerApi* | [**listBuyerVaultMarketHoldings**](docs/Api/BuyerApi.md#listbuyervaultmarketholdings) | **GET** /v1/buyer/vault-markets/holdings | Each unit you hold in the vault at its market price, with the mark’s quality (A or B reliable, C indicative, none), cost, P&amp;L and where it stands (stored, listed, lent, pledged, at the grader); &#x60;meta&#x60; carries the totals and the units you have out on loan.
*BuyerApi* | [**listBuyerVaultMarketIndexes**](docs/Api/BuyerApi.md#listbuyervaultmarketindexes) | **GET** /v1/buyer/vault-markets/indexes | Crossly indexes over vault book keys (category, brand, curated, composite, segment, and your own), each with its level now and change since the last daily close. Index levels are valued only from the book’s marks.
*BuyerApi* | [**listBuyerVaultMarketInstantExit**](docs/Api/BuyerApi.md#listbuyervaultmarketinstantexit) | **GET** /v1/buyer/vault-markets/instant-exit | Instant Exit quotes for what you hold, one per book key: the best resting bid (yours left out), its share of the mark, the bid levels, units held and which are free to sell, and why a key cannot be sold instantly. A quote, not an order.
*BuyerApi* | [**listBuyerVaultMarketOptionCombos**](docs/Api/BuyerApi.md#listbuyervaultmarketoptioncombos) | **GET** /v1/buyer/vault-markets/options/combos | Your options strategies (working by default) with their legs, net price per unit and fills. Read only.
*BuyerApi* | [**listBuyerVaultMarketOptionNotices**](docs/Api/BuyerApi.md#listbuyervaultmarketoptionnotices) | **GET** /v1/buyer/vault-markets/options/notices | Your options notices: expiry warnings, auto-closes, exercises, assignments, expiries worthless and rolls. Read only.
*BuyerApi* | [**listBuyerVaultMarketOptionSeries**](docs/Api/BuyerApi.md#listbuyervaultmarketoptionseries) | **GET** /v1/buyer/vault-markets/options/series | Fractional options series on Crossly prices (indexes, and tier A item keys with 90 days of reliable marks): underlying, status and eligibility. Read only.
*BuyerApi* | [**listBuyerVaultMarketOptionStrategies**](docs/Api/BuyerApi.md#listbuyervaultmarketoptionstrategies) | **GET** /v1/buyer/vault-markets/options/strategies | The options strategies the picker builds (vertical, calendar, diagonal, straddle, strangle, butterfly, iron condor, collar) and what each does. Read only.
*BuyerApi* | [**listBuyerVaultMarketPredictionComments**](docs/Api/BuyerApi.md#listbuyervaultmarketpredictioncomments) | **GET** /v1/buyer/vault-markets/predictions/comments | A prediction market’s (or series’) discussion thread. Read only.
*BuyerApi* | [**listBuyerVaultMarketPredictionMarkets**](docs/Api/BuyerApi.md#listbuyervaultmarketpredictionmarkets) | **GET** /v1/buyer/vault-markets/predictions/markets | \&quot;Will it hit?\&quot; prediction markets on Crossly prices (filter by book key, index slug, kind, status, expiry or text): strike, expiry, best Yes bid and ask, last price and the probability (the market&#39;s own price, display only).
*BuyerApi* | [**listBuyerVaultMarketPredictionPositions**](docs/Api/BuyerApi.md#listbuyervaultmarketpredictionpositions) | **GET** /v1/buyer/vault-markets/predictions/positions | Your prediction positions (practice and live): side, contracts, cost, value at the last price, payout or refund once settled.
*BuyerApi* | [**listBuyerVaultMarketShareAutoInvest**](docs/Api/BuyerApi.md#listbuyervaultmarketshareautoinvest) | **GET** /v1/buyer/vault-markets/shares/auto-invest | Your recurring Vault Shares auto-invest plans.
*BuyerApi* | [**listBuyerVaultMarketShareBaskets**](docs/Api/BuyerApi.md#listbuyervaultmarketsharebaskets) | **GET** /v1/buyer/vault-markets/shares/baskets | Theme baskets: model portfolios of Vault Shares series you would own directly, never a fund.
*BuyerApi* | [**listBuyerVaultMarketShareDrops**](docs/Api/BuyerApi.md#listbuyervaultmarketsharedrops) | **GET** /v1/buyer/vault-markets/shares/drops | Upcoming and open Vault Shares drops: phase, countdown, allocation (first come, pro-rata or lottery), your Crossly One early-access time (never a better price).
*BuyerApi* | [**listBuyerVaultMarketShareGifts**](docs/Api/BuyerApi.md#listbuyervaultmarketsharegifts) | **GET** /v1/buyer/vault-markets/shares/gifts | Vault Shares gifts you sent or were offered.
*BuyerApi* | [**listBuyerVaultMarketShareSeries**](docs/Api/BuyerApi.md#listbuyervaultmarketshareseries) | **GET** /v1/buyer/vault-markets/shares/series | Vault Shares series: open offerings first, then trading. Terms, progress, last share price and implied item value, and your holding.
*BuyerApi* | [**listBuyerVaultMarketWatchlist**](docs/Api/BuyerApi.md#listbuyervaultmarketwatchlist) | **GET** /v1/buyer/vault-markets/watchlist | The book keys you watch, with mark and its quality, 24 h and 7 d change, and the last 30 daily marks.
*BuyerApi* | [**listBuyerVideoRequests**](docs/Api/BuyerApi.md#listbuyervideorequests) | **GET** /v1/buyer/video-requests | Your video requests and their answers.
*BuyerApi* | [**listBuyerWalletPerks**](docs/Api/BuyerApi.md#listbuyerwalletperks) | **GET** /v1/buyer/wallet/perks | The perks your wallets unlock: each Collection holders deal (a shop’s percent off for holders of a collection) and creator shop perk on a collection a linked wallet or your Crossly wallet holds, best first. Checkout applies the best one; perks never stack with each other.
*BuyerApi* | [**listBuyerWholesaleDrops**](docs/Api/BuyerApi.md#listbuyerwholesaledrops) | **GET** /v1/buyer/wholesale/drops | Upcoming and live trade drops open to you: drops sellers release only to their approved trade buyers or to a catalog audience. kind prebook &#x3D; reserve quantity now with a deposit (depositBps) at checkout; the balance is invoiced when the seller releases the stock.
*BuyerApi* | [**listBuyerWholesaleFreightRequests**](docs/Api/BuyerApi.md#listbuyerwholesalefreightrequests) | **GET** /v1/buyer/wholesale/freight-requests | Your freight (LTL) quote requests to sellers, with the seller&#39;s figure in cents once quoted.
*BuyerApi* | [**listBuyerWholesaleOrderSheets**](docs/Api/BuyerApi.md#listbuyerwholesaleordersheets) | **GET** /v1/buyer/wholesale/order-sheets | Your saved wholesale order sheets (one seller each), newest first.
*BuyerApi* | [**listBuyerWholesaleOrders**](docs/Api/BuyerApi.md#listbuyerwholesaleorders) | **GET** /v1/buyer/wholesale/orders | Your past wholesale orders (trade-priced or on account), newest first — the starting point for reorder.
*BuyerApi* | [**listBuyerWholesalePrebooks**](docs/Api/BuyerApi.md#listbuyerwholesaleprebooks) | **GET** /v1/buyer/wholesale/prebooks | Your pre-books: the drop, item, quantity, deposit paid, balance, status (awaiting_release, invoiced, paid, cancelled, failed) and the balance invoice once the seller released the stock.
*BuyerApi* | [**listBuyerWholesaleQuotes**](docs/Api/BuyerApi.md#listbuyerwholesalequotes) | **GET** /v1/buyer/wholesale/quotes | Your requests for a quote (RFQ) to wholesale sellers. ?status&#x3D;open|all|requested|answered|accepted|declined|withdrawn|expired. An answered or accepted quote past expiresAt reads expired.
*BuyerApi* | [**listBuyerWholesaleStatement**](docs/Api/BuyerApi.md#listbuyerwholesalestatement) | **GET** /v1/buyer/wholesale/statement | Your open trade balances per seller in aging buckets (current, 1-30, 31-60, 61-90, 90+ days past due), with the invoices behind them.
*BuyerApi* | [**listBuyerWholesaleSuppliers**](docs/Api/BuyerApi.md#listbuyerwholesalesuppliers) | **GET** /v1/buyer/wholesale/suppliers | The sellers you trade with: catalogs you can open, your terms (net days, credit limit, discount), customer groups, and what you owe each.
*BuyerApi* | [**listBuyerWishlistItems**](docs/Api/BuyerApi.md#listbuyerwishlistitems) | **GET** /v1/buyer/wishlists/{id}/items | What is on one wishlist.
*BuyerApi* | [**listBuyerWishlistMembers**](docs/Api/BuyerApi.md#listbuyerwishlistmembers) | **GET** /v1/buyer/wishlists/{id}/members | Co-editors of a shared wishlist.
*BuyerApi* | [**listBuyerWishlists**](docs/Api/BuyerApi.md#listbuyerwishlists) | **GET** /v1/buyer/wishlists | Your wishlists.
*BuyerApi* | [**updateBuyerBoard**](docs/Api/BuyerApi.md#updatebuyerboard) | **PATCH** /v1/buyer/boards/{id} | Rename a board, change its description, or make it public / private.
*BuyerApi* | [**updateBuyerBoardLayout**](docs/Api/BuyerApi.md#updatebuyerboardlayout) | **PUT** /v1/buyer/boards/{id}/layout | Replace a board’s layout: items by platform listing id or slug, with x, y, w (0–1) and z. At most 40.
*BuyerApi* | [**updateBuyerCollectionSetLeaderboard**](docs/Api/BuyerApi.md#updatebuyercollectionsetleaderboard) | **PUT** /v1/buyer/collection/sets/leaderboard | Show or hide yourself (by your public handle) on set leaderboards.
*BuyerApi* | [**updateBuyerCompany**](docs/Api/BuyerApi.md#updatebuyercompany) | **PATCH** /v1/buyer/company | Rename the company or change its tax id / website (owner).
*BuyerApi* | [**updateBuyerCompanyAddress**](docs/Api/BuyerApi.md#updatebuyercompanyaddress) | **PUT** /v1/buyer/company/addresses | Replace the shared address book (owner): addresses [{ id, label, name, line1, line2?, city, region, postalCode, country, phone?, isDefault? }], at most 20.
*BuyerApi* | [**updateBuyerCompanyMember**](docs/Api/BuyerApi.md#updatebuyercompanymember) | **PATCH** /v1/buyer/company/members/{id} | Change a member&#39;s role or approval limit (owner). The last owner stays an owner.
*BuyerApi* | [**updateBuyerCreationReview**](docs/Api/BuyerApi.md#updatebuyercreationreview) | **PUT** /v1/buyer/creations/{format}/{id}/review | Review a creation you bought (or change your review): 1-5 stars and an optional comment.
*BuyerApi* | [**updateBuyerFeedback**](docs/Api/BuyerApi.md#updatebuyerfeedback) | **PATCH** /v1/buyer/feedback/{id} | Revise feedback you left, within 60 days.
*BuyerApi* | [**updateBuyerHome**](docs/Api/BuyerApi.md#updatebuyerhome) | **PATCH** /v1/buyer/home | Who may walk in (privacy), the lighting (theme), wallpaper/floor/mood decor and whether visitors see your vault wall values.
*BuyerApi* | [**updateBuyerHomeBuilder**](docs/Api/BuyerApi.md#updatebuyerhomebuilder) | **PUT** /v1/buyer/home/builders | Set your co-builders (friends only, at most 4).
*BuyerApi* | [**updateBuyerHomeLayout**](docs/Api/BuyerApi.md#updatebuyerhomelayout) | **PUT** /v1/buyer/home/layout | Arrange your home: the whole layout, checked against what you own.
*BuyerApi* | [**updateBuyerHunt**](docs/Api/BuyerApi.md#updatebuyerhunt) | **PATCH** /v1/buyer/hunts/{id} | Pause, resume or stop a hunt.
*BuyerApi* | [**updateBuyerPaymentMethodDefault**](docs/Api/BuyerApi.md#updatebuyerpaymentmethoddefault) | **PUT** /v1/buyer/payment-methods/{id}/default | Make one of your saved cards the default.
*BuyerApi* | [**updateBuyerPurchaseStory**](docs/Api/BuyerApi.md#updatebuyerpurchasestory) | **PUT** /v1/buyer/purchases/{id}/story | Write your owner story (280 characters); it travels with the item if you resell it.
*BuyerApi* | [**updateBuyerRegistry**](docs/Api/BuyerApi.md#updatebuyerregistry) | **PATCH** /v1/buyer/registries/{id} | Edit a registry: title, kind, date, message, ship-to address.
*BuyerApi* | [**updateBuyerRegistryItem**](docs/Api/BuyerApi.md#updatebuyerregistryitem) | **PUT** /v1/buyer/registries/{id}/items/{platformListingId} | How many of an item you want (1–50).
*BuyerApi* | [**updateBuyerSubscription**](docs/Api/BuyerApi.md#updatebuyersubscription) | **PATCH** /v1/buyer/subscriptions/{id} | Pause, resume, skip the next delivery, change the interval, or cancel.
*BuyerApi* | [**updateBuyerWholesaleCartPo**](docs/Api/BuyerApi.md#updatebuyerwholesalecartpo) | **PUT** /v1/buyer/wholesale/cart/po | Set the PO reference for one seller&#39;s group of your cart: { sellerUserId, poReference } (empty clears it).
*BuyerApi* | [**updateBuyerWholesaleOrderSheet**](docs/Api/BuyerApi.md#updatebuyerwholesaleordersheet) | **PATCH** /v1/buyer/wholesale/order-sheets/{id} | Rename an order sheet, change its PO reference or note, or replace its lines.
*BuyerApi* | [**updateBuyerWishlist**](docs/Api/BuyerApi.md#updatebuyerwishlist) | **PATCH** /v1/buyer/wishlists/{id} | Rename a wishlist, or make it public / private.
*BuyerAgentApi* | [**createBuyerAgentSession**](docs/Api/BuyerAgentApi.md#createbuyeragentsession) | **POST** /v1/buyer/agent/sessions | Start a shopping agent conversation.
*BuyerAgentApi* | [**createBuyerAgentSessionAct**](docs/Api/BuyerAgentApi.md#createbuyeragentsessionact) | **POST** /v1/buyer/agent/sessions/{id}/act | Act on an option: save, cart, alert, registry, price (real-sales check), offer (prepare / confirm), or buy (quote — complete with POST /api/v1/buyer/checkout). Needs the action’s own scope too.
*BuyerAgentApi* | [**createBuyerAgentSessionReact**](docs/Api/BuyerAgentApi.md#createbuyeragentsessionreact) | **POST** /v1/buyer/agent/sessions/{id}/react | Like or dislike an option; the next search leans toward likes and drops dislikes.
*BuyerAgentApi* | [**createBuyerAgentSessionTurn**](docs/Api/BuyerAgentApi.md#createbuyeragentsessionturn) | **POST** /v1/buyer/agent/sessions/{id}/turns | Say something to the agent: what you want, a critique of the options (\&quot;cheaper\&quot;, \&quot;more like #2\&quot;), or send a photo (imageBase64) to find things like it. Returns its reply and the new numbered options.
*BuyerAgentApi* | [**deleteBuyerAgentSession**](docs/Api/BuyerAgentApi.md#deletebuyeragentsession) | **DELETE** /v1/buyer/agent/sessions/{id} | Delete a conversation.
*BuyerAgentApi* | [**getBuyerAgentSession**](docs/Api/BuyerAgentApi.md#getbuyeragentsession) | **GET** /v1/buyer/agent/sessions/{id} | A conversation: its brief and turns, with each turn’s options re-read live.
*BuyerAgentApi* | [**listBuyerAgentSessions**](docs/Api/BuyerAgentApi.md#listbuyeragentsessions) | **GET** /v1/buyer/agent/sessions | Your shopping agent conversations, newest first.
*BuyerCatalogApi* | [**createBuyerIdentify**](docs/Api/BuyerCatalogApi.md#createbuyeridentify) | **POST** /v1/buyer/identify | Identify a held object and return a HUD-ready answer.
*BuyerCatalogApi* | [**createBuyerLockon**](docs/Api/BuyerCatalogApi.md#createbuyerlockon) | **POST** /v1/buyer/lockons | Lock on to an object the buyer is holding.
*BuyerCatalogApi* | [**createBuyerLockonConfirm**](docs/Api/BuyerCatalogApi.md#createbuyerlockonconfirm) | **POST** /v1/buyer/lockons/{id}/confirm | The buyer picked one of the candidates.
*BuyerCatalogApi* | [**createBuyerLockonObserve**](docs/Api/BuyerCatalogApi.md#createbuyerlockonobserve) | **POST** /v1/buyer/lockons/{id}/observe | Add what this frame revealed, and get the current best answer.
*BuyerCatalogApi* | [**createBuyerScan**](docs/Api/BuyerCatalogApi.md#createbuyerscan) | **POST** /v1/buyer/scan | Identify a physical item and find the cheapest place to buy it.
*BuyerCatalogApi* | [**createBuyerScanSession**](docs/Api/BuyerCatalogApi.md#createbuyerscansession) | **POST** /v1/buyer/scan/sessions | Open a Live Shop session.
*BuyerCatalogApi* | [**createBuyerScanSessionEnd**](docs/Api/BuyerCatalogApi.md#createbuyerscansessionend) | **POST** /v1/buyer/scan/sessions/{id}/end | Close a Live Shop session.
*BuyerCatalogApi* | [**getBuyerAnywhere**](docs/Api/BuyerCatalogApi.md#getbuyeranywhere) | **GET** /v1/buyer/anywhere | Cheapest source for an item — Crossly first, then other retailers.
*BuyerCatalogApi* | [**getBuyerCatalogFacet**](docs/Api/BuyerCatalogApi.md#getbuyercatalogfacet) | **GET** /v1/buyer/catalog/facets | Brands, categories and conditions that currently have stock.
*BuyerCatalogApi* | [**getBuyerCatalogFx**](docs/Api/BuyerCatalogApi.md#getbuyercatalogfx) | **GET** /v1/buyer/catalog/fx | Display-only exchange rates (units per 1 USD).
*BuyerCatalogApi* | [**getBuyerCatalogListing**](docs/Api/BuyerCatalogApi.md#getbuyercataloglisting) | **GET** /v1/buyer/catalog/listings/{slug} | One listing, in full.
*BuyerCatalogApi* | [**getBuyerCatalogListingAvailability**](docs/Api/BuyerCatalogApi.md#getbuyercataloglistingavailability) | **GET** /v1/buyer/catalog/listings/{slug}/availability | Is it still buyable, and at what price.
*BuyerCatalogApi* | [**getBuyerCatalogListingShipping**](docs/Api/BuyerCatalogApi.md#getbuyercataloglistingshipping) | **GET** /v1/buyer/catalog/listings/{slug}/shipping | Shipping services and prices to a destination.
*BuyerCatalogApi* | [**getBuyerListingLandedCost**](docs/Api/BuyerCatalogApi.md#getbuyerlistinglandedcost) | **GET** /v1/buyer/listings/{slug}/landed-cost | Import duties, taxes and fees to a country (landed cost).
*BuyerCatalogApi* | [**getBuyerScanSession**](docs/Api/BuyerCatalogApi.md#getbuyerscansession) | **GET** /v1/buyer/scan/sessions/{id} | One trip and everything it found.
*BuyerCatalogApi* | [**listBuyerCatalogBrowse**](docs/Api/BuyerCatalogApi.md#listbuyercatalogbrowse) | **GET** /v1/buyer/catalog/browse | Browse the way the shop does — buying format, returns, size, color, sold items, Best Match.
*BuyerCatalogApi* | [**listBuyerCatalogListingSoldHistory**](docs/Api/BuyerCatalogApi.md#listbuyercataloglistingsoldhistory) | **GET** /v1/buyer/catalog/listings/{slug}/sold-history | What THIS listing has sold for, newest first (last 50), with the median.
*BuyerCatalogApi* | [**listBuyerCatalogSearch**](docs/Api/BuyerCatalogApi.md#listbuyercatalogsearch) | **GET** /v1/buyer/catalog/search | Search the Crossly catalogue.
*BuyerCatalogApi* | [**listBuyerCatalogSellers**](docs/Api/BuyerCatalogApi.md#listbuyercatalogsellers) | **GET** /v1/buyer/catalog/sellers | Find a seller by shop handle or shop name.
*BuyerCatalogApi* | [**listBuyerScanSessions**](docs/Api/BuyerCatalogApi.md#listbuyerscansessions) | **GET** /v1/buyer/scan/sessions | Your scanning trips, newest first.
*BuyerCheckoutApi* | [**createBuyerCheckout**](docs/Api/BuyerCheckoutApi.md#createbuyercheckout) | **POST** /v1/buyer/checkout | Buy a listing without being present.
*BuyerCheckoutApi* | [**getBuyerCheckoutControl**](docs/Api/BuyerCheckoutApi.md#getbuyercheckoutcontrol) | **GET** /v1/buyer/checkout/controls | What this key is allowed to spend.
*BuyerCheckoutApi* | [**updateBuyerCheckoutControl**](docs/Api/BuyerCheckoutApi.md#updatebuyercheckoutcontrol) | **PUT** /v1/buyer/checkout/controls | Switch this key on for spending, and set its limits.
*BuyerMonitorsApi* | [**createBuyerMonitor**](docs/Api/BuyerMonitorsApi.md#createbuyermonitor) | **POST** /v1/buyer/monitors | Watch a search, and be told when it matches.
*BuyerMonitorsApi* | [**deleteBuyerMonitor**](docs/Api/BuyerMonitorsApi.md#deletebuyermonitor) | **DELETE** /v1/buyer/monitors/{id} | Delete a monitor.
*BuyerMonitorsApi* | [**listBuyerMonitorMatches**](docs/Api/BuyerMonitorsApi.md#listbuyermonitormatches) | **GET** /v1/buyer/monitors/{id}/matches | What this monitor has matched.
*BuyerMonitorsApi* | [**listBuyerMonitors**](docs/Api/BuyerMonitorsApi.md#listbuyermonitors) | **GET** /v1/buyer/monitors | Your monitors.
*BuyerMonitorsApi* | [**updateBuyerMonitor**](docs/Api/BuyerMonitorsApi.md#updatebuyermonitor) | **PATCH** /v1/buyer/monitors/{id} | Pause, resume or rename a monitor.
*DropsApi* | [**createBuyerDropJoin**](docs/Api/DropsApi.md#createbuyerdropjoin) | **POST** /v1/buyer/drops/{id}/join | Join a drop&#39;s line while it is open: one entry per account, the same odds as joining in the world. Repeating it returns the same entry.
*DropsApi* | [**deleteBuyerDropJoin**](docs/Api/DropsApi.md#deletebuyerdropjoin) | **DELETE** /v1/buyer/drops/{id}/join | Leave a drop&#39;s line before the draw.
*DropsApi* | [**getBuyerDropMe**](docs/Api/DropsApi.md#getbuyerdropme) | **GET** /v1/buyer/drops/{id}/me | Your entry in a drop: in line or not, your draw rank and outcome, and the checkout path while your 15-minute hold is live.

## Models

- BuyerBoardResponse
- BuyerBoardResponseData
- BuyerBoardResponseDataItems
- BuyerCartResponse
- BuyerCompanyResponse
- BuyerCompanyResponseData
- BuyerCompanyResponseDataAddresses
- BuyerCompanyResponseDataMembers
- BuyerCompanyResponseDataYou
- BuyerHomeResponse
- BuyerHomeResponseData
- BuyerHomeResponseDataDecor
- BuyerHomeResponseDataGiftShelf
- BuyerHomeResponseDataGiftShelfItems
- BuyerHomeResponseDataGuestbook
- BuyerHomeResponseDataGuestbookAuthor
- BuyerHomeResponseDataLayout
- BuyerHomeResponseDataLayoutItem
- BuyerHomeResponseDataLayoutRef
- BuyerHomeResponseDataOwner
- BuyerHomeResponseDataPinCase
- BuyerHomeResponseDataPullsShelf
- BuyerHomeResponseDataPullsShelfItems
- BuyerHomeResponseDataRoom
- BuyerHomeResponseDataRoomFloor
- BuyerHomeResponseDataSetWall
- BuyerHomeResponseDataSetWallChoices
- BuyerHomeResponseDataSetWallPieces
- BuyerHomeResponseDataVaultWall
- BuyerHomeResponseDataVaultWallUnits
- BuyerLayawayResponse
- BuyerRegistryResponse
- BuyerRegistryResponseData
- BuyerRegistryResponseDataItems
- BuyerRentalResponse
- BuyerRentalResponseData
- BuyerRentalResponseDataInspection
- BuyerResponse
- BuyerResponse2
- BuyerResponse2Data
- BuyerResponse3
- BuyerWholesaleOrderSheetResponse
- BuyerWholesaleOrderSheetResponseData
- BuyerWholesaleOrderSheetResponseDataLines
- BuyerWholesaleOrderSheetResponseDataLinesFlagsItem
- BuyerWholesaleOrderSheetResponseDataLinesTerms
- BuyerWholesaleQuoteResponse
- BuyerWholesaleQuoteResponseData
- BuyerWholesaleQuoteResponseDataItems
- CreateBuyerActivityRequest
- CreateBuyerActivityResponse
- CreateBuyerActivityResponseData
- CreateBuyerActivityResponseDataMatch
- CreateBuyerActivityResponseDataMatchCatalog
- CreateBuyerActivityResponseDataMatchOffer
- CreateBuyerAgentSessionActResponse
- CreateBuyerAgentSessionActResponseLinks
- CreateBuyerAgentSessionActResponseNavigate
- CreateBuyerAgentSessionActResponsePayment
- CreateBuyerAgentSessionActResponseQuote
- CreateBuyerAgentSessionActResponseQuoteLayaway
- CreateBuyerAgentSessionActResponseQuotePriceCheck
- CreateBuyerAgentSessionActResponseQuoteProtectionPlans
- CreateBuyerAgentSessionResponse
- CreateBuyerAgentSessionResponseBrief
- CreateBuyerAgentSessionResponseBriefPending
- CreateBuyerAgentSessionTurnResponse
- CreateBuyerAgentSessionTurnResponseAction
- CreateBuyerAgentSessionTurnResponseActionQuote
- CreateBuyerAgentSessionTurnResponseBrief
- CreateBuyerAgentSessionTurnResponseOptions
- CreateBuyerAuctionBidRequest
- CreateBuyerAuctionBidResponse
- CreateBuyerAuctionBidResponseData
- CreateBuyerAuctionPayResponse
- CreateBuyerAuctionPayResponseData
- CreateBuyerAuctionRetractRequest
- CreateBuyerAuctionRetractResponse
- CreateBuyerAuctionRetractResponseData
- CreateBuyerBoardResponse
- CreateBuyerBoardResponseData
- CreateBuyerBreakSpotHoldResponse
- CreateBuyerBreakSpotHoldResponseData
- CreateBuyerCartItemRequest
- CreateBuyerCartItemResponse
- CreateBuyerCartItemResponseData
- CreateBuyerCartOptimizerResponse
- CreateBuyerCartOptimizerResponseData
- CreateBuyerCartOptimizerResponseDataLines
- CreateBuyerCartOptimizerResponseDataLinesLine
- CreateBuyerCartOptimizerResponseDataLinesPick
- CreateBuyerCartQuoteResponse
- CreateBuyerCartQuoteResponseData
- CreateBuyerCartQuoteResponseMeta
- CreateBuyerCaseCounterRequest
- CreateBuyerCaseMessageRequest
- CreateBuyerCaseRespondRequest
- CreateBuyerCatalogListingRentalQuoteResponse
- CreateBuyerCatalogListingRentalQuoteResponseData
- CreateBuyerCatalogListingRentalQuoteResponseDataBuyout
- CreateBuyerCatalogListingRentalQuoteResponseDataCancellation
- CreateBuyerCatalogListingRentalQuoteResponseDataCancellationTiers
- CreateBuyerCatalogListingRentalQuoteResponseDataLines
- CreateBuyerCatalogListingRentalResponse
- CreateBuyerCatalogListingRentalResponseData
- CreateBuyerCatalogListingRentalResponseDataQuote
- CreateBuyerCatalogListingVideoRequestResponse
- CreateBuyerCatalogListingVideoRequestResponseData
- CreateBuyerCheckoutResponse
- CreateBuyerCompanyApprovalResponse
- CreateBuyerCompanyApprovalResponseData
- CreateBuyerConversationJoinResponse
- CreateBuyerConversationJoinResponseData
- CreateBuyerDropJoinResponse
- CreateBuyerDropJoinResponseMe
- CreateBuyerEventRsvpResponse
- CreateBuyerEventRsvpResponseData
- CreateBuyerFeedbackItem
- CreateBuyerFeedbackRequest
- CreateBuyerFeedbackRequestReviews
- CreateBuyerFeedbackResponse
- CreateBuyerFollowingSellerSeenRequest
- CreateBuyerFollowingSellerSeenResponse
- CreateBuyerFollowingSellerSeenResponseData
- CreateBuyerGiftCardRedeemRequest
- CreateBuyerGiftCardRedeemResponse
- CreateBuyerGiftCardRedeemResponseData
- CreateBuyerGiftCardRequest
- CreateBuyerGiftCardResponse
- CreateBuyerGiftCardResponseData
- CreateBuyerGroupBuyJoinResponse
- CreateBuyerGroupBuyJoinResponseData
- CreateBuyerIdentifyResponse
- CreateBuyerIdentifyResponseVisualMatches
- CreateBuyerListingSplitResponse
- CreateBuyerListingSplitResponseData
- CreateBuyerListingSplitResponseDataShares
- CreateBuyerListingTryOnResponse
- CreateBuyerLockonConfirmResponse
- CreateBuyerLockonConfirmResponseAlternates
- CreateBuyerLockonConfirmResponseCandidates
- CreateBuyerLockonConfirmResponseCoupon
- CreateBuyerLockonConfirmResponseCrossly
- CreateBuyerLockonConfirmResponseHud
- CreateBuyerLockonConfirmResponseHudAction
- CreateBuyerLockonConfirmResponseHudConfirm
- CreateBuyerLockonConfirmResponseHudCoupon
- CreateBuyerLockonConfirmResponseHudFacts
- CreateBuyerLockonConfirmResponseIdentifier
- CreateBuyerLockonConfirmResponseOffsite
- CreateBuyerLockonResponse
- CreateBuyerMarketBidResponse
- CreateBuyerMarketBidResponseData
- CreateBuyerOfferRequest
- CreateBuyerOfferRespondRequest
- CreateBuyerOfferRespondResponse
- CreateBuyerOfferRespondResponseData
- CreateBuyerOfferResponse
- CreateBuyerOfferResponseData
- CreateBuyerOfferResponseDataOffer
- CreateBuyerOrderCancelResponse
- CreateBuyerOrderCancelResponseData
- CreateBuyerOrderInrRequest
- CreateBuyerOrderInrResponse
- CreateBuyerOrderInrResponseData
- CreateBuyerOrderReceivedResponse
- CreateBuyerOrderReceivedResponseData
- CreateBuyerOrderTipResponse
- CreateBuyerOrderTipResponseData
- CreateBuyerPackOpenResponse
- CreateBuyerPackOpenResponseData
- CreateBuyerPackOpeningSellBackResponse
- CreateBuyerPackOpeningSellBackResponseData
- CreateBuyerProtectionPlanCancelResponse
- CreateBuyerProtectionPlanCancelResponseData
- CreateBuyerRegistryGiftThankedResponse
- CreateBuyerRegistryGiftThankedResponseData
- CreateBuyerRegistryResponse
- CreateBuyerRegistryResponseData
- CreateBuyerRentalBuyoutResponse
- CreateBuyerRentalBuyoutResponseData
- CreateBuyerRentalExtensionPayResponse
- CreateBuyerRentalExtensionPayResponseData
- CreateBuyerRentalExtensionResponse
- CreateBuyerRentalExtensionResponseData
- CreateBuyerRentalIdentityStartResponse
- CreateBuyerRentalIdentityStartResponseData
- CreateBuyerScanResponse
- CreateBuyerScanResponseIdentifier
- CreateBuyerScanSessionEndResponse
- CreateBuyerScanSessionResponse
- CreateBuyerSellerClubJoinResponse
- CreateBuyerSellerClubJoinResponseData
- CreateBuyerSellerClubJoinResponseDataMember
- CreateBuyerSellerClubJoinResponseDataMemberNext
- CreateBuyerSellerClubJoinResponseDataTiers
- CreateBuyerSellerReportRequest
- CreateBuyerStoreReportResponse
- CreateBuyerStoreReportResponseData
- CreateBuyerTogetherResponse
- CreateBuyerTogetherResponseData
- CreateBuyerTotalRequestRequest
- CreateBuyerTotalRequestResponse
- CreateBuyerTotalRequestResponseData
- CreateBuyerVaultListResponse
- CreateBuyerVaultListResponseData
- CreateBuyerVaultWithdrawResponse
- CreateBuyerVaultWithdrawResponseData
- CreateBuyerWholesaleCatalogApplyResponse
- CreateBuyerWholesaleCatalogApplyResponseData
- CreateBuyerWholesaleFreightRequestResponse
- CreateBuyerWholesaleFreightRequestResponseData
- CreateBuyerWholesaleFreightRequestResponseDataLines
- CreateBuyerWholesaleInvoicePayLinkResponse
- CreateBuyerWholesaleInvoicePayLinkResponseData
- CreateBuyerWholesaleQuoteAcceptResponse
- CreateBuyerWholesaleQuoteAcceptResponseData
- CreateBuyerWholesaleUploadValidateResponse
- CreateBuyerWholesaleUploadValidateResponseData
- CreateBuyerWholesaleUploadValidateResponseDataLines
- CreateBuyerWholesaleUploadValidateResponseDataLinesFlagsItem
- CreateBuyerWholesaleUploadValidateResponseDataUnmatched
- CreateBuyerWishlistInviteResponse
- CreateBuyerWishlistInviteResponseData
- CreateBuyerWishlistItemRequest
- CreateBuyerWishlistJoinResponse
- CreateBuyerWishlistJoinResponseData
- CreateBuyerWishlistRequest
- CreateBuyerWishlistResponse
- CreateBuyerWishlistResponseData
- CreateBuyerWishlistShareRequest
- CreateBuyerWishlistShareResponse
- CreateBuyerWishlistShareResponseData
- DeleteBuyerAgentSessionResponse
- DeleteBuyerDropJoinResponse
- DeleteBuyerTryOnResponse
- DeleteBuyerTryOnResponseData
- DeleteBuyerWholesaleOrderSheetResponse
- DeleteBuyerWholesaleOrderSheetResponseData
- DeleteBuyerWishlistItemResponse
- DeleteBuyerWishlistItemResponseData
- Error
- ErrorError
- ForOccasion
- GetBuyerAgentSessionResponse
- GetBuyerAgentSessionResponseTurns
- GetBuyerAnywhereResponse
- GetBuyerAuctionMeResponse
- GetBuyerAuctionMeResponseData
- GetBuyerBadgeResponse
- GetBuyerBadgeResponseData
- GetBuyerBreakResponse
- GetBuyerBreakResponseData
- GetBuyerBreakResponseDataDraw
- GetBuyerBreakResponseDataSeller
- GetBuyerBreakResponseDataSpots
- GetBuyerCaseResponse
- GetBuyerCaseResponseData
- GetBuyerCaseResponseDataCase
- GetBuyerCaseResponseDataMessages
- GetBuyerCaseResponseDataPurchase
- GetBuyerCaseResponseDataReturnShipment
- GetBuyerCatalogFacetResponse
- GetBuyerCatalogFxResponse
- GetBuyerCatalogListingAvailabilityResponse
- GetBuyerCatalogListingMySizeResponse
- GetBuyerCatalogListingMySizeResponseData
- GetBuyerCatalogListingMySizeResponseDataOneOfBrandRuns
- GetBuyerCatalogListingPriceResponse
- GetBuyerCatalogListingPriceResponseData
- GetBuyerCatalogListingPriceResponseDataLowestAnywhere
- GetBuyerCatalogListingPriceResponseDataPriceCheck
- GetBuyerCatalogListingPriceResponseDataPriceMatch
- GetBuyerCatalogListingRentalResponse
- GetBuyerCatalogListingRentalResponseData
- GetBuyerCatalogListingRentalResponseDataBooked
- GetBuyerCatalogListingRentalResponseDataOptions
- GetBuyerCatalogListingRentalResponseDataOptionsCancellation
- GetBuyerCatalogListingRentalResponseDataOptionsDamageWaiver
- GetBuyerCatalogListingRentalResponseDataOptionsDeposit
- GetBuyerCatalogListingRentalResponseDataOptionsExtensions
- GetBuyerCatalogListingRentalResponseDataOptionsLastMinute
- GetBuyerCatalogListingRentalResponseDataOptionsLateEscalation
- GetBuyerCatalogListingRentalResponseDataOptionsLengthDiscounts
- GetBuyerCatalogListingRentalResponseDataOptionsPhotosOut
- GetBuyerCatalogListingRentalResponseDataOptionsPickup
- GetBuyerCatalogListingRentalResponseDataOptionsSeasonal
- GetBuyerCatalogListingResponse
- GetBuyerCatalogListingResponseDescriptionBlocksItem
- GetBuyerCatalogListingResponseTokenGate
- GetBuyerCatalogListingResponseVariants
- GetBuyerCatalogListingShippingResponse
- GetBuyerCatalogListingShippingResponseInternational
- GetBuyerCatalogListingShippingResponseServices
- GetBuyerCheckoutControlResponse
- GetBuyerCheckoutUsdcResponse
- GetBuyerCheckoutUsdcResponseData
- GetBuyerCollectionOfferResponse
- GetBuyerCollectionOfferResponseData
- GetBuyerCollectionOfferResponseDataOffer
- GetBuyerCollectionOfferResponseDataPending
- GetBuyerCollectionSetResponse
- GetBuyerCollectionSetResponseData
- GetBuyerCollectionSetResponseDataGroup
- GetBuyerCollectionSetResponseDataLeaderboard
- GetBuyerCollectionSetResponseDataPieces
- GetBuyerCreationResponse
- GetBuyerCreationResponseData
- GetBuyerCreationResponseDataReviews
- GetBuyerCreationResponseDataSummary
- GetBuyerCreationResponseDataViewer
- GetBuyerCreationResponseDataViewerReview
- GetBuyerCreatorResponse
- GetBuyerCreatorResponseData
- GetBuyerCreatorResponseDataCreator
- GetBuyerDropMeResponse
- GetBuyerEventResponse
- GetBuyerEventResponseData
- GetBuyerEventResponseDataDropRef
- GetBuyerEventResponseDataHost
- GetBuyerEventResponseDataHostStore
- GetBuyerEventResponseDataListings
- GetBuyerEventResponseDataLiveShow
- GetBuyerEventResponseDataPromo
- GetBuyerFitVocabularyResponse
- GetBuyerFitVocabularyResponseData
- GetBuyerFitVocabularyResponseDataKinds
- GetBuyerGiftFinderOptionResponse
- GetBuyerGiftFinderOptionResponseData
- GetBuyerGiftFinderOptionResponseDataBudgets
- GetBuyerGiftFinderOptionResponseDataRecipients
- GetBuyerHomePlaceableResponse
- GetBuyerHomePlaceableResponseData
- GetBuyerHomePlaceableResponseDataItems
- GetBuyerHomePlaceableResponseDataItemsRef
- GetBuyerImpactResponse
- GetBuyerImpactResponseData
- GetBuyerListingAudioSummaryResponse
- GetBuyerListingAudioSummaryResponseData
- GetBuyerListingBoughtTogetherResponse
- GetBuyerListingBoughtTogetherResponseData
- GetBuyerListingBoughtTogetherResponseDataItems
- GetBuyerListingBreakResponse
- GetBuyerListingBreakResponseData
- GetBuyerListingCertResponse
- GetBuyerListingCertResponseData
- GetBuyerListingFitResponse
- GetBuyerListingFitResponseData
- GetBuyerListingFitResponseDataChart
- GetBuyerListingFitResponseDataChartRows
- GetBuyerListingFitResponseDataComparisons
- GetBuyerListingFitResponseDataComparisonsResult
- GetBuyerListingGroupBuyResponse
- GetBuyerListingGroupBuyResponseData
- GetBuyerListingImpactResponse
- GetBuyerListingImpactResponseData
- GetBuyerListingLandedCostResponse
- GetBuyerListingResaleValueResponse
- GetBuyerListingResaleValueResponseData
- GetBuyerListingSubscribeOfferResponse
- GetBuyerListingSubscribeOfferResponseData
- GetBuyerListingTryOnResponse
- GetBuyerListingTryOnResponseData
- GetBuyerLiveStreamAuctionResponse
- GetBuyerLiveStreamAuctionResponseData
- GetBuyerMarketPurchaseOptionResponse
- GetBuyerMarketPurchaseOptionResponseData
- GetBuyerMarketPurchaseOptionResponseDataGradingRuns
- GetBuyerOrderEligibilityResponse
- GetBuyerOrderEligibilityResponseData
- GetBuyerOrderEligibilityResponseDataInr
- GetBuyerOrderExportResponse
- GetBuyerOrderExportResponseData
- GetBuyerOrderPriceProtectionResponse
- GetBuyerOrderPriceProtectionResponseData
- GetBuyerPackFairnessResponse
- GetBuyerPackFairnessResponseData
- GetBuyerPackFairnessResponseDataRevealed
- GetBuyerPackResponse
- GetBuyerPartyResponse
- GetBuyerPassportResponse
- GetBuyerPassportResponseData
- GetBuyerPassportResponseDataAuthenticated
- GetBuyerPassportResponseDataDetails
- GetBuyerPassportResponseDataGrading
- GetBuyerPassportResponseDataHistory
- GetBuyerPassportResponseDataHolder
- GetBuyerPassportResponseDataItem
- GetBuyerPassportResponseDataTimeline
- GetBuyerPassportResponseDataVerdict
- GetBuyerPassportResponseDataVerdictChecks
- GetBuyerPreferenceResponse
- GetBuyerPreferenceResponseData
- GetBuyerPreferenceResponseDataBrands
- GetBuyerPreferenceResponseDataPriceBand
- GetBuyerPreferenceResponseDataRetailers
- GetBuyerPriceGuideResponse
- GetBuyerPriceGuideResponseData
- GetBuyerProfileResponse
- GetBuyerProfileResponseData
- GetBuyerPurchaseDeliveryResponse
- GetBuyerPurchaseDeliveryResponseData
- GetBuyerPurchaseLiveMomentResponse
- GetBuyerPurchaseLiveMomentResponseData
- GetBuyerPurchaseReturnResponse
- GetBuyerPurchaseReturnResponseData
- GetBuyerPurchaseReturnResponseDataReasons
- GetBuyerPurchaseStoryResponse
- GetBuyerPurchaseStoryResponseData
- GetBuyerRentalEligibilityResponse
- GetBuyerRentalEligibilityResponseData
- GetBuyerRentalResponse
- GetBuyerRentalResponseData
- GetBuyerRentalResponseDataBuyout
- GetBuyerRentalResponseDataEvents
- GetBuyerRentalResponseDataExtension
- GetBuyerRentalResponseDataExtensions
- GetBuyerRentalResponseDataPayments
- GetBuyerRentalResponseDataShipping
- GetBuyerRentalResponseDataTimeline
- GetBuyerScanSessionResponse
- GetBuyerScanSessionResponseCaptures
- GetBuyerScanSessionResponseCapturesIdentifier
- GetBuyerSellerClubResponse
- GetBuyerSellerClubResponseData
- GetBuyerSellerLoyaltyResponse
- GetBuyerSellerLoyaltyResponseData
- GetBuyerSellerLoyaltyResponseDataMember
- GetBuyerSellerLoyaltyResponseDataMemberHistory
- GetBuyerSellerLoyaltyResponseDataMemberNext
- GetBuyerSellerLoyaltyResponseDataMemberNextTier
- GetBuyerSellerLoyaltyResponseDataMemberPerks
- GetBuyerSellerLoyaltyResponseDataMemberStanding
- GetBuyerSellerLoyaltyResponseDataMemberTier
- GetBuyerSellerTrustResponse
- GetBuyerSellerTrustResponseData
- GetBuyerSellerTrustResponseDataRating
- GetBuyerTogetherResponse
- GetBuyerTogetherResponseData
- GetBuyerTogetherResponseDataItems
- GetBuyerTogetherResponseDataMembers
- GetBuyerTogetherResponseDataMessages
- GetBuyerVaultMarketHistoryResponse
- GetBuyerVaultMarketHistoryResponseNow
- GetBuyerVaultMarketHistoryResponseNowMarks
- GetBuyerVaultMarketHistoryResponseSeries
- GetBuyerVaultMarketHistoryResponseToday
- GetBuyerVaultMarketIndexResponse
- GetBuyerVaultMarketIndexResponseHistory
- GetBuyerVaultMarketIndexResponseLastClose
- GetBuyerVaultMarketIndexResponseNow
- GetBuyerVaultMarketInstantExitResponse
- GetBuyerVaultMarketInstantExitResponseLevels
- GetBuyerVaultMarketOptionAnalyticResponse
- GetBuyerVaultMarketOptionAnalyticResponseExpiries
- GetBuyerVaultMarketOptionAnalyticResponseExpiriesExpectedMove
- GetBuyerVaultMarketOptionAnalyticResponseExpiriesOpenInterest
- GetBuyerVaultMarketOptionAnalyticResponseHistoricalVol
- GetBuyerVaultMarketOptionAnalyticResponseHistoricalVolSeries
- GetBuyerVaultMarketOptionAnalyticResponseHistoricalVolWindows
- GetBuyerVaultMarketOptionAnalyticResponseIv
- GetBuyerVaultMarketOptionAnalyticResponseIvHistory
- GetBuyerVaultMarketOptionAnalyticResponsePutCall
- GetBuyerVaultMarketOptionAnalyticResponsePutCallTotals
- GetBuyerVaultMarketOptionAnalyticResponseSmile
- GetBuyerVaultMarketOptionAnalyticResponseSmileByStrike
- GetBuyerVaultMarketOptionAnalyticResponseSmileFitted
- GetBuyerVaultMarketOptionAnalyticResponseSmilePoints
- GetBuyerVaultMarketOptionAnalyticResponseSurface
- GetBuyerVaultMarketOptionAnalyticResponseSurfaceRows
- GetBuyerVaultMarketOptionAnalyticResponseUnderlying
- GetBuyerVaultMarketOptionChainResponse
- GetBuyerVaultMarketOptionChainResponseExpiries
- GetBuyerVaultMarketOptionChainResponseRows
- GetBuyerVaultMarketOptionChainResponseRowsCall
- GetBuyerVaultMarketOptionChainResponseSeries
- GetBuyerVaultMarketOptionChainResponseUnderlying
- GetBuyerVaultMarketOptionChainResponseVenue
- GetBuyerVaultMarketOptionIvResponse
- GetBuyerVaultMarketOptionPositionResponse
- GetBuyerVaultMarketOptionPositionResponseAccount
- GetBuyerVaultMarketOptionPositionResponsePositions
- GetBuyerVaultMarketOptionPositionResponsePositionsContract
- GetBuyerVaultMarketOptionPositionResponsePositionsGreeks
- GetBuyerVaultMarketOptionRiskResponse
- GetBuyerVaultMarketOptionRiskResponseBetaWeighted
- GetBuyerVaultMarketOptionRiskResponseBetaWeightedIndex
- GetBuyerVaultMarketOptionRiskResponseByUnderlying
- GetBuyerVaultMarketOptionRiskResponseScenario
- GetBuyerVaultMarketOptionRiskResponseScenarioGrid
- GetBuyerVaultMarketOptionRiskResponseScenarioRanges
- GetBuyerVaultMarketOptionRiskResponseTotal
- GetBuyerVaultMarketPredictionBoardResponse
- GetBuyerVaultMarketPredictionBoardResponseRows
- GetBuyerVaultMarketPredictionEventResponse
- GetBuyerVaultMarketPredictionEventResponseConversions
- GetBuyerVaultMarketPredictionEventResponseMarkets
- GetBuyerVaultMarketPredictionEventResponseRisk
- GetBuyerVaultMarketPredictionLeaderboardResponse
- GetBuyerVaultMarketPredictionLeaderboardResponseRows
- GetBuyerVaultMarketPredictionMarketHistoryResponse
- GetBuyerVaultMarketPredictionMarketHistoryResponseCandles
- GetBuyerVaultMarketPredictionMarketHistoryResponseNow
- GetBuyerVaultMarketPredictionMarketHistoryResponsePoints
- GetBuyerVaultMarketPredictionMarketResponse
- GetBuyerVaultMarketPredictionMarketResponseBook
- GetBuyerVaultMarketPredictionMarketResponseBookBids
- GetBuyerVaultMarketPredictionMarketResponsePracticeBook
- GetBuyerVaultMarketPredictionMarketResponseRules
- GetBuyerVaultMarketPredictionMarketResponseSettlements
- GetBuyerVaultMarketPredictionMarketResponseTrades
- GetBuyerVaultMarketPredictionMarketResponseVenue
- GetBuyerVaultMarketPredictionMarketResponseVenueMissing
- GetBuyerVaultMarketShareBasketResponse
- GetBuyerVaultMarketShareBasketResponseMembers
- GetBuyerVaultMarketShareBasketResponseMine
- GetBuyerVaultMarketShareBasketResponseMineMembers
- GetBuyerVaultMarketShareResponse
- GetBuyerVaultMarketShareResponseAutoInvest
- GetBuyerVaultMarketShareResponseDistributions
- GetBuyerVaultMarketShareResponseHoldings
- GetBuyerVaultMarketShareResponseHoldingsSeries
- GetBuyerVaultMarketShareResponseSubscriptions
- GetBuyerVaultMarketShareResponseTotals
- GetBuyerVaultMarketShareResponseVenue
- GetBuyerVaultMarketShareSeryHistoryResponse
- GetBuyerVaultMarketShareSeryHistoryResponseAppraisals
- GetBuyerVaultMarketShareSeryHistoryResponseCandles
- GetBuyerVaultMarketShareSeryPerkResponse
- GetBuyerVaultMarketShareSeryPerkResponseBadge
- GetBuyerVaultMarketShareSeryPerkResponseViewingDays
- GetBuyerVaultMarketShareSeryPerkResponseViewingDaysMyBooking
- GetBuyerVaultMarketShareSeryPerkResponseVisit
- GetBuyerVaultMarketShareSeryResponse
- GetBuyerVaultMarketShareSeryResponseBuyouts
- GetBuyerVaultMarketShareSeryResponseBuyoutsMyVote
- GetBuyerVaultMarketShareSeryResponseDepth
- GetBuyerVaultMarketShareSeryResponseDepthBids
- GetBuyerVaultMarketShareSeryResponseDrop
- GetBuyerVaultMarketShareSeryResponseHolders
- GetBuyerVaultMarketShareSeryResponseHoldersDistribution
- GetBuyerVaultMarketShareSeryResponseMarket
- GetBuyerVaultMarketShareSeryResponseMarketIndicative
- GetBuyerVaultMarketShareSeryResponseMarketTrading
- GetBuyerVaultMarketShareSeryResponseMy
- GetBuyerVaultMarketShareSeryResponseMyOrders
- GetBuyerVaultMarketShareSeryResponseMySubscriptions
- GetBuyerVaultMarketShareSeryResponsePerks
- GetBuyerVaultMarketShareSeryResponsePerksViewingDays
- GetBuyerVaultMarketShareSeryResponseTape
- GetBuyerVaultMarketShareSeryResponseUpdates
- GetBuyerVaultMarketWorthResponse
- GetBuyerVaultMarketWorthResponseSellNow
- GetBuyerVaultMarketWorthResponseSellNowBlocked
- GetBuyerVaultMarketWorthResponseToday
- GetBuyerWholesaleCartResponse
- GetBuyerWholesaleCartResponseData
- GetBuyerWholesaleCartResponseDataGroups
- GetBuyerWholesaleCartResponseDataGroupsCheckout
- GetBuyerWholesaleCartResponseDataGroupsCheckoutMethodsItem
- GetBuyerWholesaleCartResponseDataGroupsMinimum
- GetBuyerWholesaleCartResponseDataTaxExempt
- GetBuyerWholesaleCartResponseDataViolations
- GetBuyerWholesaleCatalogApplyResponse
- GetBuyerWholesaleCatalogApplyResponseData
- GetBuyerWholesaleCatalogApplyResponseDataCatalog
- GetBuyerWholesaleCatalogApplyResponseDataPrefill
- GetBuyerWholesaleCatalogApplyResponseDataRequirements
- GetBuyerWholesaleCatalogApplyResponseDataRequirementsQuestions
- GetBuyerWholesaleDropResponse
- GetBuyerWholesaleDropResponseData
- GetBuyerWholesaleDropResponseDataListings
- GetBuyerWholesaleDropResponseDataReservations
- GetBuyerWholesaleInvoicePayQuoteResponse
- GetBuyerWholesaleInvoicePayQuoteResponseData
- GetBuyerWholesaleInvoicePayQuoteResponseDataMethodsItem
- GetBuyerWholesaleReorderResponse
- GetBuyerWholesaleReorderResponseData
- ListBuyerActivityItem
- ListBuyerActivityResponse
- ListBuyerAgentSessionsItem
- ListBuyerAgentSessionsResponse
- ListBuyerAuctionBidsItem
- ListBuyerAuctionBidsResponse
- ListBuyerAuctionsItem
- ListBuyerAuctionsResponse
- ListBuyerBoardsItem
- ListBuyerBoardsResponse
- ListBuyerCartItem
- ListBuyerCartResponse
- ListBuyerCartSavedItem
- ListBuyerCasesItem
- ListBuyerCasesResponse
- ListBuyerCashbackItem
- ListBuyerCashbackResponse
- ListBuyerCatalogBrowseItem
- ListBuyerCatalogBrowseResponse
- ListBuyerCatalogListingSoldHistoryItem
- ListBuyerCatalogListingSoldHistoryResponse
- ListBuyerCatalogListingVideosItem
- ListBuyerCatalogListingVideosResponse
- ListBuyerCatalogSearchItem
- ListBuyerCatalogSearchResponse
- ListBuyerCatalogSellersItem
- ListBuyerCatalogSellersResponse
- ListBuyerClubsItem
- ListBuyerClubsResponse
- ListBuyerCreationReviewableItem
- ListBuyerCreationReviewableItemReview
- ListBuyerCreationReviewableResponse
- ListBuyerEventsItem
- ListBuyerEventsResponse
- ListBuyerFeedbackItem
- ListBuyerFeedbackPendingItem
- ListBuyerFeedbackPendingResponse
- ListBuyerFeedbackResponse
- ListBuyerFollowingSellersItem
- ListBuyerFollowingSellersResponse
- ListBuyerGiftCardCreditItem
- ListBuyerGiftCardCreditResponse
- ListBuyerGiftCardsItem
- ListBuyerGiftCardsResponse
- ListBuyerGiftFinderItem
- ListBuyerGiftFinderResponse
- ListBuyerGiftSentItem
- ListBuyerGiftSentResponse
- ListBuyerHomeBuildersItem
- ListBuyerHomeBuildersResponse
- ListBuyerHomeBuildingItem
- ListBuyerHomeBuildingResponse
- ListBuyerHotspotsItem
- ListBuyerHotspotsResponse
- ListBuyerHuntsItem
- ListBuyerHuntsResponse
- ListBuyerLayawaysItem
- ListBuyerLayawaysItemSchedule
- ListBuyerLayawaysResponse
- ListBuyerListingQuickQuestionsItem
- ListBuyerListingQuickQuestionsResponse
- ListBuyerListingSellerReviewsItem
- ListBuyerListingSellerReviewsItemItem
- ListBuyerListingSellerReviewsItemMedia
- ListBuyerListingSellerReviewsResponse
- ListBuyerLiveShipmentsItem
- ListBuyerLiveShipmentsItemOrders
- ListBuyerLiveShipmentsResponse
- ListBuyerLiveStreamLineupItem
- ListBuyerLiveStreamLineupResponse
- ListBuyerLoyaltyItem
- ListBuyerLoyaltyResponse
- ListBuyerMonitorMatchesItem
- ListBuyerMonitorMatchesResponse
- ListBuyerMonitorsItem
- ListBuyerMonitorsResponse
- ListBuyerOffersItem
- ListBuyerOffersItemItems
- ListBuyerOffersResponse
- ListBuyerOrdersItem
- ListBuyerOrdersResponse
- ListBuyerPackOpeningsItem
- ListBuyerPackOpeningsItemProof
- ListBuyerPackOpeningsItemProofTierWeights
- ListBuyerPackOpeningsResponse
- ListBuyerPacksItem
- ListBuyerPacksItemChase
- ListBuyerPacksItemTiers
- ListBuyerPacksResponse
- ListBuyerPartiesItem
- ListBuyerPartiesResponse
- ListBuyerPaymentMethodsItem
- ListBuyerPaymentMethodsResponse
- ListBuyerProtectionPlansItem
- ListBuyerProtectionPlansResponse
- ListBuyerRegistriesItem
- ListBuyerRegistriesResponse
- ListBuyerRegistryGiftsItem
- ListBuyerRegistryGiftsResponse
- ListBuyerRegistrySearchItem
- ListBuyerRegistrySearchResponse
- ListBuyerRentalsItem
- ListBuyerRentalsResponse
- ListBuyerScanSessionsItem
- ListBuyerScanSessionsResponse
- ListBuyerSizeMemoryPromptsItem
- ListBuyerSizeMemoryPromptsResponse
- ListBuyerSizeMemorySizesItem
- ListBuyerSizeMemorySizesResponse
- ListBuyerStoreListingsItem
- ListBuyerStoreListingsResponse
- ListBuyerSubscriptionsItem
- ListBuyerSubscriptionsResponse
- ListBuyerTogetherItem
- ListBuyerTogetherResponse
- ListBuyerTotalRequestsItem
- ListBuyerTotalRequestsItemLines
- ListBuyerTotalRequestsResponse
- ListBuyerTryOnsItem
- ListBuyerTryOnsResponse
- ListBuyerVaultItem
- ListBuyerVaultMarketHoldingsItem
- ListBuyerVaultMarketHoldingsResponse
- ListBuyerVaultMarketIndexesItem
- ListBuyerVaultMarketIndexesResponse
- ListBuyerVaultMarketInstantExitItem
- ListBuyerVaultMarketInstantExitResponse
- ListBuyerVaultMarketOptionCombosItem
- ListBuyerVaultMarketOptionCombosItemLegs
- ListBuyerVaultMarketOptionCombosResponse
- ListBuyerVaultMarketOptionNoticesItem
- ListBuyerVaultMarketOptionNoticesResponse
- ListBuyerVaultMarketOptionSeriesItem
- ListBuyerVaultMarketOptionSeriesResponse
- ListBuyerVaultMarketOptionStrategiesItem
- ListBuyerVaultMarketOptionStrategiesResponse
- ListBuyerVaultMarketPredictionCommentsItem
- ListBuyerVaultMarketPredictionCommentsItemReplies
- ListBuyerVaultMarketPredictionCommentsItemRepliesAuthor
- ListBuyerVaultMarketPredictionCommentsResponse
- ListBuyerVaultMarketPredictionMarketsItem
- ListBuyerVaultMarketPredictionMarketsItemProbability
- ListBuyerVaultMarketPredictionMarketsResponse
- ListBuyerVaultMarketPredictionPositionsItem
- ListBuyerVaultMarketPredictionPositionsResponse
- ListBuyerVaultMarketShareAutoInvestItem
- ListBuyerVaultMarketShareAutoInvestItemTargets
- ListBuyerVaultMarketShareAutoInvestResponse
- ListBuyerVaultMarketShareBasketsItem
- ListBuyerVaultMarketShareBasketsResponse
- ListBuyerVaultMarketShareDropsItem
- ListBuyerVaultMarketShareDropsResponse
- ListBuyerVaultMarketShareGiftsItem
- ListBuyerVaultMarketShareGiftsResponse
- ListBuyerVaultMarketShareSeriesItem
- ListBuyerVaultMarketShareSeriesItemMine
- ListBuyerVaultMarketShareSeriesItemRights
- ListBuyerVaultMarketShareSeriesResponse
- ListBuyerVaultMarketWatchlistItem
- ListBuyerVaultMarketWatchlistItemSparkline
- ListBuyerVaultMarketWatchlistResponse
- ListBuyerVaultResponse
- ListBuyerVideoRequestsItem
- ListBuyerVideoRequestsResponse
- ListBuyerWalletPerksItem
- ListBuyerWalletPerksResponse
- ListBuyerWholesaleDropsItem
- ListBuyerWholesaleDropsResponse
- ListBuyerWholesalePrebooksItem
- ListBuyerWholesalePrebooksResponse
- ListBuyerWishlistItemsItem
- ListBuyerWishlistItemsResponse
- ListBuyerWishlistMembersItem
- ListBuyerWishlistMembersResponse
- ListBuyerWishlistsItem
- ListBuyerWishlistsResponse
- Pagination
- UpdateBuyerCollectionSetLeaderboardResponse
- UpdateBuyerCollectionSetLeaderboardResponseData
- UpdateBuyerCreationReviewRequest
- UpdateBuyerCreationReviewResponse
- UpdateBuyerFeedbackRequest
- UpdateBuyerPaymentMethodDefaultResponse
- UpdateBuyerPaymentMethodDefaultResponseData
- UpdateBuyerRegistryItemResponse
- UpdateBuyerRegistryItemResponseData
- UpdateBuyerWholesaleCartPoResponse
- UpdateBuyerWholesaleCartPoResponseData
- UpdateBuyerWishlistRequest
- UpdateBuyerWishlistResponse
- UpdateBuyerWishlistResponseData
- ValueCount

## Authorization

### BuyerOAuth

- **Type**: Bearer authentication

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0.0`
    - Package version: `0.2.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`

## Where things are

| what | where |
|---|---|
| one class per API group (`OrdersApi`, `ListingsApi`, …) | `lib/Api/` |
| one model per response/request type, grouped by product area | `lib/Model/<Area>/` |
| a reference page per API group, every method with an example | `docs/Api/` |

The area is the word after the verb in the model name: `GetVaultLendResponse`
is under `vault`, `ListOrdersItem` under `order`. Areas with only a handful of
models, and small shared shapes, are under `common`.

Models are named after where they appear: `GetOrderResponse` is what `getOrder`
returns, `GetOrderResponseDataLines` the type of its `data.lines`, `ListOrdersItem`
one row of `listOrders`. A type several endpoints share appears ONCE, under the
first name it was given — or, for small shared shapes like `{ ok }`, a name from
its fields (`OkResponse`). There is no per-model doc page: the model source file
is the reference, and your editor will jump to it.

