# Crossly\Buyer\BuyerApi

All URIs are relative to https://crossly.net/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createBuyerActivity()**](BuyerApi.md#createBuyerActivity) | **POST** /v1/buyer/activity | Report an item your user is looking at, and get our answer.
[**createBuyerAuctionBid()**](BuyerApi.md#createBuyerAuctionBid) | **POST** /v1/buyer/auctions/{slug}/bids | Place a bid, optionally with a proxy maximum. A WINNING BID IS CHARGED AUTOMATICALLY.
[**createBuyerAuctionPay()**](BuyerApi.md#createBuyerAuctionPay) | **POST** /v1/buyer/auctions/{slug}/pay | Pay for an auction you won whose automatic charge did not go through.
[**createBuyerAuctionRetract()**](BuyerApi.md#createBuyerAuctionRetract) | **POST** /v1/buyer/auctions/{slug}/retract | Retract your bids under eBay’s rules — a typo, a changed listing, or an unreachable seller.
[**createBuyerBoard()**](BuyerApi.md#createBuyerBoard) | **POST** /v1/buyer/boards | Create an outfit board.
[**createBuyerBoardItem()**](BuyerApi.md#createBuyerBoardItem) | **POST** /v1/buyer/boards/{id}/items | Add a listing (by slug) to a board, at the next free spot.
[**createBuyerBreakSpotHold()**](BuyerApi.md#createBuyerBreakSpotHold) | **POST** /v1/buyer/breaks/{id}/spots/{spotId}/hold | Hold a spot in a pick-your-spot break, then buy it through checkout before the hold lapses.
[**createBuyerBuybackRequest()**](BuyerApi.md#createBuyerBuybackRequest) | **POST** /v1/buyer/buybacks/{id}/request | Ask Crossly to buy an item back under its buyback guarantee.
[**createBuyerCartItem()**](BuyerApi.md#createBuyerCartItem) | **POST** /v1/buyer/cart/items | Add a listing to your cart.
[**createBuyerCartItemSaveForLater()**](BuyerApi.md#createBuyerCartItemSaveForLater) | **POST** /v1/buyer/cart/items/{id}/save-for-later | Move a cart line to saved-for-later.
[**createBuyerCartOptimizer()**](BuyerApi.md#createBuyerCartOptimizer) | **POST** /v1/buyer/cart-optimizer | Cart optimizer: send a shopping list (one item per line, \&quot;2 Charizard Base Set\&quot;) and get the cheapest delivered basket across sellers — one pick per line, items + each seller’s shipping with free-shipping thresholds applied. fewestPackages prefers fewer sellers. Nothing is added to the cart.
[**createBuyerCartQuote()**](BuyerApi.md#createBuyerCartQuote) | **POST** /v1/buyer/cart/quote | Price the cart, delivered — item, shipping, tax, total.
[**createBuyerCartSavedMoveToCart()**](BuyerApi.md#createBuyerCartSavedMoveToCart) | **POST** /v1/buyer/cart/saved/{id}/move-to-cart | Move a saved item back into your cart, at today’s price.
[**createBuyerCaseCounter()**](BuyerApi.md#createBuyerCaseCounter) | **POST** /v1/buyer/cases/{id}/counter | Propose your own refund figure on a case.
[**createBuyerCaseEscalate()**](BuyerApi.md#createBuyerCaseEscalate) | **POST** /v1/buyer/cases/{id}/escalate | Ask Crossly to step in on a case.
[**createBuyerCaseMessage()**](BuyerApi.md#createBuyerCaseMessage) | **POST** /v1/buyer/cases/{id}/messages | Post a message on a case thread.
[**createBuyerCaseRespond()**](BuyerApi.md#createBuyerCaseRespond) | **POST** /v1/buyer/cases/{id}/respond | Accept or reject the seller’s partial-refund offer on a case.
[**createBuyerCaseWithdraw()**](BuyerApi.md#createBuyerCaseWithdraw) | **POST** /v1/buyer/cases/{id}/withdraw | Withdraw a case you opened.
[**createBuyerCatalogListingRental()**](BuyerApi.md#createBuyerCatalogListingRental) | **POST** /v1/buyer/catalog/listings/{slug}/rental | Book a rental. Returns a Stripe PaymentIntent client secret for rent + shipping both ways + deposit; the dates are held 30 minutes for payment. Crossly buys both labels; the deposit comes back after the item does.
[**createBuyerCatalogListingRentalQuote()**](BuyerApi.md#createBuyerCatalogListingRentalQuote) | **POST** /v1/buyer/catalog/listings/{slug}/rental/quote | Price a rental: rent (the cheaper of by-the-day and by-the-week), both shipping legs once a ship-to is given, and the deposit. &#x60;problem&#x60; says why the dates can’t be booked.
[**createBuyerCatalogListingVideoRequest()**](BuyerApi.md#createBuyerCatalogListingVideoRequest) | **POST** /v1/buyer/catalog/listings/{slug}/video-requests | Ask the seller for a video of an item (one open request per item). The seller is notified; their answer appears on the listing for every buyer.
[**createBuyerConversationInvite()**](BuyerApi.md#createBuyerConversationInvite) | **POST** /v1/buyer/conversations/{id}/invite | Invite a friend into a chat with a seller: a single-use link (7 days) that makes whoever opens it a guest who can read and post. Only the thread’s buyer can invite; at most 5 guests.
[**createBuyerConversationJoin()**](BuyerApi.md#createBuyerConversationJoin) | **POST** /v1/buyer/conversations/join/{token} | Join a chat you were invited into, as a guest.
[**createBuyerFeedback()**](BuyerApi.md#createBuyerFeedback) | **POST** /v1/buyer/feedback | Leave feedback on up to 25 orders at once, with optional detailed seller ratings.
[**createBuyerFitRef()**](BuyerApi.md#createBuyerFitRef) | **POST** /v1/buyer/fit/refs | Save a reference garment (flat measurements, inches) to compare listings against.
[**createBuyerFollowingSellerSeen()**](BuyerApi.md#createBuyerFollowingSellerSeen) | **POST** /v1/buyer/following/sellers/seen | Clear the \&quot;new listings\&quot; count on a followed seller, or on all of them.
[**createBuyerGiftCard()**](BuyerApi.md#createBuyerGiftCard) | **POST** /v1/buyer/gift-cards | Start a gift card purchase.
[**createBuyerGiftCardRedeem()**](BuyerApi.md#createBuyerGiftCardRedeem) | **POST** /v1/buyer/gift-cards/redeem | Redeem a gift card code into your own balance.
[**createBuyerGroupBuyJoin()**](BuyerApi.md#createBuyerGroupBuyJoin) | **POST** /v1/buyer/group-buys/{id}/join | Join a group buy: a hold at the starting price, captured at the price the group reaches. Checked against this key’s spending controls; send an Idempotency-Key.
[**createBuyerGroupBuyLeave()**](BuyerApi.md#createBuyerGroupBuyLeave) | **POST** /v1/buyer/group-buys/{id}/leave | Leave a group buy and release your hold.
[**createBuyerHunt()**](BuyerApi.md#createBuyerHunt) | **POST** /v1/buyer/hunts | Start a buyer-agent hunt — over a search (filters), or auto-buy on one listing (listingSlug: buy it once its price, sale applied, is within maxPriceCents). &#x60;offer&#x60; and &#x60;buy&#x60; modes also need buyer:checkout:write, and the budget is checked against this key’s spending controls.
[**createBuyerInstantOfferAccept()**](BuyerApi.md#createBuyerInstantOfferAccept) | **POST** /v1/buyer/instant-offers/{id}/accept | Accept Crossly’s instant offer on a collection item. Ops then send a prepaid label; the store credit is paid once the item arrives and checks out.
[**createBuyerLayawayCancel()**](BuyerApi.md#createBuyerLayawayCancel) | **POST** /v1/buyer/layaways/{id}/cancel | Cancel a layaway: everything paid comes back except the layaway fee (10% of the price, at most $15).
[**createBuyerLayawayPay()**](BuyerApi.md#createBuyerLayawayPay) | **POST** /v1/buyer/layaways/{id}/pay | Pay some (at least $1) or all of what is left now, on the saved card. Paid in full, it ships.
[**createBuyerListingAudioSummary()**](BuyerApi.md#createBuyerListingAudioSummary) | **POST** /v1/buyer/listings/{slug}/audio-summary | Record the spoken summary of a listing (cached per listing version). 503 naming TTS_API_KEY when no speech provider is configured.
[**createBuyerListingSplit()**](BuyerApi.md#createBuyerListingSplit) | **POST** /v1/buyer/listings/{slug}/split | Split a purchase: one pay link per person; nobody is charged until all have paid.
[**createBuyerListingSubscribe()**](BuyerApi.md#createBuyerListingSubscribe) | **POST** /v1/buyer/listings/{slug}/subscribe | Subscribe &amp; save: a standing order charged to your saved card every interval. Checked against this key’s spending controls; send an Idempotency-Key.
[**createBuyerListingTryOn()**](BuyerApi.md#createBuyerListingTryOn) | **POST** /v1/buyer/listings/{slug}/try-on | Render an AI try-on of this listing on the buyer’s own photo (base64 &#x60;photo&#x60;, or &#x60;reuseLastPhoto&#x60;). &#x60;confirmSelfAdult&#x60; must be true: the photo is of the buyer and they are 18+. Wearables only; capped per day; 503 naming TRYON_API_KEY when no image model is configured.
[**createBuyerMarketBid()**](BuyerApi.md#createBuyerMarketBid) | **POST** /v1/buyer/market/bids | Place a fixed-price market bid. SPENDS MONEY: it fills against the lowest ask at or under your price and charges your saved card (plus the fast-ship premium when fastShip is set and it fills from vault stock). deliverTo vault keeps it in your Crossly vault; gradeWith sends a raw card to a Grading run first. Checked against this key’s spending controls; send an Idempotency-Key.
[**createBuyerMarketWatch()**](BuyerApi.md#createBuyerMarketWatch) | **POST** /v1/buyer/market/watches | Watch a market variant: alert at or below a price, or on any drop.
[**createBuyerOffer()**](BuyerApi.md#createBuyerOffer) | **POST** /v1/buyer/offers | Offer a price on a listing.
[**createBuyerOfferRespond()**](BuyerApi.md#createBuyerOfferRespond) | **POST** /v1/buyer/offers/{id}/respond | Answer a seller’s counteroffer — accept, decline, or counter back.
[**createBuyerOrderCancel()**](BuyerApi.md#createBuyerOrderCancel) | **POST** /v1/buyer/orders/{id}/cancel | Cancel an order before it ships — refunds it in full.
[**createBuyerOrderInr()**](BuyerApi.md#createBuyerOrderInr) | **POST** /v1/buyer/orders/{id}/inr | Open an item-not-received case.
[**createBuyerOrderReceived()**](BuyerApi.md#createBuyerOrderReceived) | **POST** /v1/buyer/orders/{id}/received | Confirm you received an order.
[**createBuyerOrderTip()**](BuyerApi.md#createBuyerOrderTip) | **POST** /v1/buyer/orders/{id}/tip | Tip the seller on one of your shipped orders, charged to your saved card. One tip per order; $1–$500; checked against this key’s spending controls.
[**createBuyerPackFairnessRotate()**](BuyerApi.md#createBuyerPackFairnessRotate) | **POST** /v1/buyer/packs/fairness/rotate | Reveal your current server seed and start a new one (optionally with your own client seed). Refused while an opening is awaiting payment.
[**createBuyerPackOpen()**](BuyerApi.md#createBuyerPackOpen) | **POST** /v1/buyer/packs/{slug}/open | Open a pack. SPENDS MONEY: charges the pack price to your saved card, then pulls one real item by the published odds (provably fair: see /buyer/packs/fairness) into your Crossly vault. confirmAdult must be true. Checked against this key’s spending controls; send an Idempotency-Key.
[**createBuyerPackOpeningSellBack()**](BuyerApi.md#createBuyerPackOpeningSellBack) | **POST** /v1/buyer/pack-openings/{id}/sell-back | Sell a pull straight back for Crossly credit at the pack’s buyback rate, within its window, while it is still in your vault.
[**createBuyerPassportClaim()**](BuyerApi.md#createBuyerPassportClaim) | **POST** /v1/buyer/passports/{code}/claim | Claim a passport as the item’s current owner (the buyer of its latest sale) — shown as “in its owner’s hands” until it sells again.
[**createBuyerProtectionPlanCancel()**](BuyerApi.md#createBuyerProtectionPlanCancel) | **POST** /v1/buyer/protection-plans/{id}/cancel | Cancel a protection plan. The insurer decides what is refundable (pro-rata after the free-look window); that amount goes back to the card.
[**createBuyerPurchaseDownload()**](BuyerApi.md#createBuyerPurchaseDownload) | **POST** /v1/buyer/purchases/{id}/download | A ten-minute link to a digital purchase’s file; each call uses one of its downloads.
[**createBuyerPurchaseFit()**](BuyerApi.md#createBuyerPurchaseFit) | **POST** /v1/buyer/purchases/{id}/fit | Say how a delivered purchase fit: true_to_size, small or large. It teaches your size memory and, pooled with other buyers, how the brand runs.
[**createBuyerPurchaseReturn()**](BuyerApi.md#createBuyerPurchaseReturn) | **POST** /v1/buyer/purchases/{id}/return | Return a purchase under the seller’s policy, or send back a try-at-home item. With reason doesnt_fit, &#x60;fit&#x60; (small | large) says which way, and it feeds your size memory.
[**createBuyerRegistry()**](BuyerApi.md#createBuyerRegistry) | **POST** /v1/buyer/registries | Start a gift registry (wedding, baby, birthday, housewarming, graduation, other). Items are added like any wishlist item; set shipAddressId to one of your saved addresses so guests can buy — they never see it.
[**createBuyerRegistryGiftThanked()**](BuyerApi.md#createBuyerRegistryGiftThanked) | **POST** /v1/buyer/registries/{id}/gifts/{giftId}/thanked | Tick a gift as thanked (or untick it).
[**createBuyerRentalArrivalPhoto()**](BuyerApi.md#createBuyerRentalArrivalPhoto) | **POST** /v1/buyer/rentals/{id}/arrival-photos | Photograph a rental on arrival (URLs you uploaded): your side of the condition record.
[**createBuyerRentalCancel()**](BuyerApi.md#createBuyerRentalCancel) | **POST** /v1/buyer/rentals/{id}/cancel | Cancel a rental that has not shipped: everything is refunded.
[**createBuyerRentalClaimResponse()**](BuyerApi.md#createBuyerRentalClaimResponse) | **POST** /v1/buyer/rentals/{id}/claim-response | Answer a deposit claim: accept (the claim is paid, the rest refunded) or dispute (Crossly decides).
[**createBuyerRentalIdentityStart()**](BuyerApi.md#createBuyerRentalIdentityStart) | **POST** /v1/buyer/rentals/identity/start | Start the ID check renting needs (Stripe Identity: photo ID + selfie). Open &#x60;url&#x60; (hosted) or use &#x60;clientSecret&#x60; with Stripe.js.
[**createBuyerReturnCancel()**](BuyerApi.md#createBuyerReturnCancel) | **POST** /v1/buyer/returns/{id}/cancel | Cancel a return before it ships.
[**createBuyerReturnTracking()**](BuyerApi.md#createBuyerReturnTracking) | **POST** /v1/buyer/returns/{id}/tracking | Add tracking to a return you shipped on your own label.
[**createBuyerSellerClubJoin()**](BuyerApi.md#createBuyerSellerClubJoin) | **POST** /v1/buyer/sellers/{sellerUserId}/club/join | Join a seller’s loyalty club (free). Your tier’s discount then applies to their items — the best of it and any other rate you have with them, never stacked.
[**createBuyerSellerReport()**](BuyerApi.md#createBuyerSellerReport) | **POST** /v1/buyer/sellers/{username}/report | Report a seller to Crossly’s trust team.
[**createBuyerSplitCancel()**](BuyerApi.md#createBuyerSplitCancel) | **POST** /v1/buyer/splits/{id}/cancel | Cancel a split you organised; every held share is released.
[**createBuyerTogether()**](BuyerApi.md#createBuyerTogether) | **POST** /v1/buyer/together | Start a shop-together room.
[**createBuyerTogetherItem()**](BuyerApi.md#createBuyerTogetherItem) | **POST** /v1/buyer/together/{code}/items | Add a listing to a shop-together board.
[**createBuyerTogetherItemVote()**](BuyerApi.md#createBuyerTogetherItemVote) | **POST** /v1/buyer/together/{code}/items/{id}/vote | Vote an item on a room’s board up (1), down (-1) or clear (0).
[**createBuyerTogetherJoin()**](BuyerApi.md#createBuyerTogetherJoin) | **POST** /v1/buyer/together/{code}/join | Join a shop-together room by its code.
[**createBuyerTogetherLeave()**](BuyerApi.md#createBuyerTogetherLeave) | **POST** /v1/buyer/together/{code}/leave | Leave a shop-together room.
[**createBuyerTogetherMessage()**](BuyerApi.md#createBuyerTogetherMessage) | **POST** /v1/buyer/together/{code}/messages | Say something in a shop-together room.
[**createBuyerTotalRequest()**](BuyerApi.md#createBuyerTotalRequest) | **POST** /v1/buyer/total-requests | Ask a seller for one combined shipping total on everything of theirs in your cart.
[**createBuyerVaultList()**](BuyerApi.md#createBuyerVaultList) | **POST** /v1/buyer/vault/{id}/list | Sell a vault item on the market at your price. It is already authenticated, so when it sells nothing ships in: the buyer keeps it vaulted or it ships straight to them.
[**createBuyerVaultUnlist()**](BuyerApi.md#createBuyerVaultUnlist) | **POST** /v1/buyer/vault/{id}/unlist | Take a vault item off the market; it stays stored.
[**createBuyerVaultWithdraw()**](BuyerApi.md#createBuyerVaultWithdraw) | **POST** /v1/buyer/vault/{id}/withdraw | Ship a vault item home, standard or expedited. The shipping, any storage it owes and the early-withdrawal fee (within 90 days of arriving) are charged to your saved card now, all checked against this key’s spending controls; send an Idempotency-Key.
[**createBuyerWishlist()**](BuyerApi.md#createBuyerWishlist) | **POST** /v1/buyer/wishlists | Create a wishlist.
[**createBuyerWishlistInvite()**](BuyerApi.md#createBuyerWishlistInvite) | **POST** /v1/buyer/wishlists/{id}/invite | Share a wishlist with a co-editor: a single-use link (14 days). Members add and remove items; only the owner renames, deletes or removes members. At most 20.
[**createBuyerWishlistItem()**](BuyerApi.md#createBuyerWishlistItem) | **POST** /v1/buyer/wishlists/{id}/items | Add a listing to a wishlist.
[**createBuyerWishlistJoin()**](BuyerApi.md#createBuyerWishlistJoin) | **POST** /v1/buyer/wishlists/join/{token} | Join a wishlist you were invited to edit.
[**createBuyerWishlistShare()**](BuyerApi.md#createBuyerWishlistShare) | **POST** /v1/buyer/wishlists/{id}/share | Share a wishlist — makes it public and returns its link.
[**deleteBuyerBoard()**](BuyerApi.md#deleteBuyerBoard) | **DELETE** /v1/buyer/boards/{id} | Delete a board.
[**deleteBuyerBoardItem()**](BuyerApi.md#deleteBuyerBoardItem) | **DELETE** /v1/buyer/boards/{id}/items/{platformListingId} | Take a listing off a board.
[**deleteBuyerBreakSpotHold()**](BuyerApi.md#deleteBuyerBreakSpotHold) | **DELETE** /v1/buyer/breaks/{id}/spots/{spotId}/hold | Release a break spot you hold.
[**deleteBuyerCartItem()**](BuyerApi.md#deleteBuyerCartItem) | **DELETE** /v1/buyer/cart/items/{id} | Remove a line from your cart.
[**deleteBuyerCartSaved()**](BuyerApi.md#deleteBuyerCartSaved) | **DELETE** /v1/buyer/cart/saved/{id} | Remove an item from saved-for-later. Returns the remaining list.
[**deleteBuyerConversationGuest()**](BuyerApi.md#deleteBuyerConversationGuest) | **DELETE** /v1/buyer/conversations/{id}/guests/{userId} | Remove a guest (the thread’s buyer), or leave (a guest, with your own user id).
[**deleteBuyerFitRef()**](BuyerApi.md#deleteBuyerFitRef) | **DELETE** /v1/buyer/fit/refs/{id} | Delete a reference garment.
[**deleteBuyerMarketBid()**](BuyerApi.md#deleteBuyerMarketBid) | **DELETE** /v1/buyer/market/bids/{id} | Cancel a resting market bid.
[**deleteBuyerMarketWatch()**](BuyerApi.md#deleteBuyerMarketWatch) | **DELETE** /v1/buyer/market/watches/{id} | Stop watching a market variant.
[**deleteBuyerOffer()**](BuyerApi.md#deleteBuyerOffer) | **DELETE** /v1/buyer/offers/{id} | Withdraw an offer you made that the seller has not answered.
[**deleteBuyerRecentlyViewed()**](BuyerApi.md#deleteBuyerRecentlyViewed) | **DELETE** /v1/buyer/recently-viewed/{slug} | Remove one listing from your recently viewed.
[**deleteBuyerRecentlyViewed2()**](BuyerApi.md#deleteBuyerRecentlyViewed2) | **DELETE** /v1/buyer/recently-viewed | Clear your recently viewed list.
[**deleteBuyerRegistry()**](BuyerApi.md#deleteBuyerRegistry) | **DELETE** /v1/buyer/registries/{id} | Delete a registry (and the wishlist behind it).
[**deleteBuyerSellerClubJoin()**](BuyerApi.md#deleteBuyerSellerClubJoin) | **DELETE** /v1/buyer/sellers/{sellerUserId}/club/join | Leave a seller’s loyalty club.
[**deleteBuyerTogetherItem()**](BuyerApi.md#deleteBuyerTogetherItem) | **DELETE** /v1/buyer/together/{code}/items/{id} | Take an item you added off a room’s board.
[**deleteBuyerTotalRequest()**](BuyerApi.md#deleteBuyerTotalRequest) | **DELETE** /v1/buyer/total-requests/{id} | Cancel a total request you made.
[**deleteBuyerTryOn()**](BuyerApi.md#deleteBuyerTryOn) | **DELETE** /v1/buyer/try-ons/{id} | Delete a try-on and its images — or pass &#x60;all&#x60; to delete every photo and result.
[**deleteBuyerWishlist()**](BuyerApi.md#deleteBuyerWishlist) | **DELETE** /v1/buyer/wishlists/{id} | Delete a wishlist and everything on it.
[**deleteBuyerWishlistItem()**](BuyerApi.md#deleteBuyerWishlistItem) | **DELETE** /v1/buyer/wishlists/{id}/items/{slug} | Take a listing off a wishlist.
[**deleteBuyerWishlistMember()**](BuyerApi.md#deleteBuyerWishlistMember) | **DELETE** /v1/buyer/wishlists/{id}/members/{userId} | Remove a co-editor (the owner), or leave a list shared with you (your own user id).
[**getBuyerAuctionMe()**](BuyerApi.md#getBuyerAuctionMe) | **GET** /v1/buyer/auctions/{slug}/me | Where you stand in one auction — your max, leading, won, must you pay.
[**getBuyerBadge()**](BuyerApi.md#getBuyerBadge) | **GET** /v1/buyer/badges | The counts behind the account badge — unread messages, offers waiting, orders to review.
[**getBuyerBoard()**](BuyerApi.md#getBuyerBoard) | **GET** /v1/buyer/boards/{id} | One of your boards with its layout: each item’s x, y and width as fractions of the board, and stacking order.
[**getBuyerBoardShared()**](BuyerApi.md#getBuyerBoardShared) | **GET** /v1/buyer/boards/shared/{token} | A shared outfit board, by its link token.
[**getBuyerBreak()**](BuyerApi.md#getBuyerBreak) | **GET** /v1/buyer/breaks/{id} | A card break’s board: spots, holders, and the seed after the draw.
[**getBuyerCase()**](BuyerApi.md#getBuyerCase) | **GET** /v1/buyer/cases/{id} | One case — its state, the message thread, and the return parcel if there is one.
[**getBuyerCatalogListingMySize()**](BuyerApi.md#getBuyerCatalogListingMySize) | **GET** /v1/buyer/catalog/listings/{slug}/my-size | This item against your size: the size you keep in this kind of item (and in this brand), whether this one is your size, smaller or larger, a warning if this brand and size ran small or large on you before, and how other buyers say the brand runs. null for an unsized item.
[**getBuyerCatalogListingPrice()**](BuyerApi.md#getBuyerCatalogListingPrice) | **GET** /v1/buyer/catalog/listings/{slug}/price | The price today. When the seller has the same item live on another marketplace for less, this IS that price (&#x60;priceMatch&#x60; says where from), and &#x60;lowestAnywhere&#x60; lists the marketplaces it is guaranteed not to be cheaper on. &#x60;priceCheck&#x60; rates it against real sales of the same catalog item in the same condition over the last 180 days (great / good / fair / high, with the median and middle-half range in cents); null until there are 3+ sales from 2+ sellers.
[**getBuyerCatalogListingRental()**](BuyerApi.md#getBuyerCatalogListingRental) | **GET** /v1/buyer/catalog/listings/{slug}/rental | Whether a listing is for rent: day and week rates, the refundable deposit, length limits, the turnaround buffer, and the dates already booked. null when it is not for rent.
[**getBuyerCheckoutUsdc()**](BuyerApi.md#getBuyerCheckoutUsdc) | **GET** /v1/buyer/checkout/usdc | Whether Crossly takes USDC (Stripe stablecoin payments: Solana, Ethereum, Base, Polygon), and its per-order limit. Paying needs the buyer’s wallet, so it happens in the browser checkout, never unattended.
[**getBuyerCollectionOffer()**](BuyerApi.md#getBuyerCollectionOffer) | **GET** /v1/buyer/collection/{id}/offer | What an item in your collection would fetch now: the top open bid on the market for the same variant, condition and grade, and Crossly’s instant offer in store credit when that is switched on (a quote valid for a limited time).
[**getBuyerCollectionSet()**](BuyerApi.md#getBuyerCollectionSet) | **GET** /v1/buyer/collection/sets/{category}/{brand}/{model} | One set: every piece (owned or missing, with its lowest ask on the market), what completing it would cost now, and the leaderboard of collectors who opted in, with your rank.
[**getBuyerCreator()**](BuyerApi.md#getBuyerCreator) | **GET** /v1/buyer/creators/{handle} | A creator storefront: profile, affiliate code, and shelves of live picks.
[**getBuyerFitVocabulary()**](BuyerApi.md#getBuyerFitVocabulary) | **GET** /v1/buyer/fit/vocabulary | Garment kinds and the measurements each takes.
[**getBuyerGiftFinderOption()**](BuyerApi.md#getBuyerGiftFinderOption) | **GET** /v1/buyer/gift-finder/options | The gift finder’s questions: recipients, interests, budgets.
[**getBuyerImpact()**](BuyerApi.md#getBuyerImpact) | **GET** /v1/buyer/impact | The sourced footprint your secondhand purchases avoided.
[**getBuyerLayaway()**](BuyerApi.md#getBuyerLayaway) | **GET** /v1/buyer/layaways/{id} | One layaway and its schedule.
[**getBuyerListingAudioSummary()**](BuyerApi.md#getBuyerListingAudioSummary) | **GET** /v1/buyer/listings/{slug}/audio-summary | A spoken summary of a listing (accessibility): the text, built only from the listing’s own fields and the seller’s description, and the recording of it when one exists.
[**getBuyerListingBoughtTogether()**](BuyerApi.md#getBuyerListingBoughtTogether) | **GET** /v1/buyer/listings/{slug}/bought-together | Frequently bought together / complete the look.
[**getBuyerListingBreak()**](BuyerApi.md#getBuyerListingBreak) | **GET** /v1/buyer/listings/{slug}/break | The card break this listing sells spots in, if any; the seed is revealed after the draw.
[**getBuyerListingCert()**](BuyerApi.md#getBuyerListingCert) | **GET** /v1/buyer/listings/{slug}/cert | A graded listing’s cert, checked with the grader: the seller’s claim (grader, grade, cert number), status (verified, mismatch, not_found, or unchecked where the grader has no lookup), population and how many graded higher where the grader publishes them, and the grader’s own cert page.
[**getBuyerListingFit()**](BuyerApi.md#getBuyerListingFit) | **GET** /v1/buyer/listings/{slug}/fit | A listing’s flat measurements, compared with your saved reference garments.
[**getBuyerListingGroupBuy()**](BuyerApi.md#getBuyerListingGroupBuy) | **GET** /v1/buyer/listings/{slug}/group-buy | The group buy open on this listing, if any.
[**getBuyerListingImpact()**](BuyerApi.md#getBuyerListingImpact) | **GET** /v1/buyer/listings/{slug}/impact | The sourced footprint of making a new equivalent; null when no published figure applies.
[**getBuyerListingResaleValue()**](BuyerApi.md#getBuyerListingResaleValue) | **GET** /v1/buyer/listings/{slug}/resale-value | What the same brand and category resold for on Crossly, and the buyback offer when enabled.
[**getBuyerListingSubscribeOffer()**](BuyerApi.md#getBuyerListingSubscribeOffer) | **GET** /v1/buyer/listings/{slug}/subscribe-offer | The subscribe &amp; save discount and intervals on a listing; null when the seller has none.
[**getBuyerListingTryOn()**](BuyerApi.md#getBuyerListingTryOn) | **GET** /v1/buyer/listings/{slug}/try-on | Whether an AI try-on is offered for this listing (a wearable with a photo) and whether the image model is configured.
[**getBuyerLiveStreamAuction()**](BuyerApi.md#getBuyerLiveStreamAuction) | **GET** /v1/buyer/live-streams/{id}/auction | The auction running on a live stream right now, if any. Bid on it by its &#x60;slug&#x60; at POST /v1/buyer/auctions/:slug/bids.
[**getBuyerMarketPurchaseOption()**](BuyerApi.md#getBuyerMarketPurchaseOption) | **GET** /v1/buyer/market/purchase-options | Before you bid or buy: whether the lowest ask is vault stock (keep it vaulted, or pay fastShipCents to rush it), and the grading runs a raw card can go straight to (pass gradeWith on the bid).
[**getBuyerOrderEligibility()**](BuyerApi.md#getBuyerOrderEligibility) | **GET** /v1/buyer/orders/{id}/eligibility | What you can do with one order right now — cancel, confirm receipt, report not received, leave feedback.
[**getBuyerOrderExport()**](BuyerApi.md#getBuyerOrderExport) | **GET** /v1/buyer/orders/export | Your order history as CSV text (up to 5,000 orders).
[**getBuyerOrderPriceProtection()**](BuyerApi.md#getBuyerOrderPriceProtection) | **GET** /v1/buyer/orders/{id}/price-protection | Price protection on one order: if the item gets cheaper before &#x60;until&#x60;, the difference is credited to your Bucks automatically. &#x60;creditedCents&#x60; is what it has paid so far.
[**getBuyerPack()**](BuyerApi.md#getBuyerPack) | **GET** /v1/buyer/packs/{slug} | One pack: tiers and odds, items left, expected value, the chase items still in it.
[**getBuyerPackFairness()**](BuyerApi.md#getBuyerPackFairness) | **GET** /v1/buyer/packs/fairness | Your provably-fair seeds: the active server-seed commitment (sha256), your client seed and nonce, and every retired seed in full so past openings can be re-run.
[**getBuyerParty()**](BuyerApi.md#getBuyerParty) | **GET** /v1/buyer/parties/{slug} | One shopping party.
[**getBuyerPassport()**](BuyerApi.md#getBuyerPassport) | **GET** /v1/buyer/passports/{code} | What a product passport tag opens: the item, whether it was authenticated, how many owners on Crossly and since when — never who or for how much.
[**getBuyerPreference()**](BuyerApi.md#getBuyerPreference) | **GET** /v1/buyer/preferences | The shopping profile derived from that activity.
[**getBuyerPriceGuide()**](BuyerApi.md#getBuyerPriceGuide) | **GET** /v1/buyer/price-guide | What matching items actually sold for on Crossly: median, quartiles, by month, and recent sales. Needs q, brand or category.
[**getBuyerProfile()**](BuyerApi.md#getBuyerProfile) | **GET** /v1/buyer/profile | Your Crossly shopping profile — name, email, saved address, Bucks balance.
[**getBuyerPurchaseDelivery()**](BuyerApi.md#getBuyerPurchaseDelivery) | **GET** /v1/buyer/purchases/{id}/delivery | Where a purchase is going when not to your door: the pickup point (with its release code) or its ship-together consolidation.
[**getBuyerPurchaseLiveMoment()**](BuyerApi.md#getBuyerPurchaseLiveMoment) | **GET** /v1/buyer/purchases/{id}/live-moment | The live show a purchase was bought in, with the offset (seconds) into its replay where it sold. null when it was not bought in a show.
[**getBuyerPurchaseReturn()**](BuyerApi.md#getBuyerPurchaseReturn) | **GET** /v1/buyer/purchases/{id}/return | What a return would refund for each reason, by when, and any return already open.
[**getBuyerPurchaseStory()**](BuyerApi.md#getBuyerPurchaseStory) | **GET** /v1/buyer/purchases/{id}/story | Your owner story on a purchase, passed on to the next owner if you resell it.
[**getBuyerRegistry()**](BuyerApi.md#getBuyerRegistry) | **GET** /v1/buyer/registries/{id} | One of your registries: items with how many are wanted and bought.
[**getBuyerRegistryByToken()**](BuyerApi.md#getBuyerRegistryByToken) | **GET** /v1/buyer/registry/{token} | A registry as a guest sees it: items, how many are still wanted, and whether it can ship. Never the address.
[**getBuyerRentalEligibility()**](BuyerApi.md#getBuyerRentalEligibility) | **GET** /v1/buyer/rentals/eligibility | Can you rent right now: ID-verified (a photo ID and a matching selfie, once), the verified name rentals ship to, and your standing (one rental at a time until your first comes back; none after one that never did).
[**getBuyerSellerClub()**](BuyerApi.md#getBuyerSellerClub) | **GET** /v1/buyer/sellers/{sellerUserId}/club | A seller’s loyalty club: its tiers (spend threshold, discount, perks) and your standing. null when the seller has none.
[**getBuyerSellerTrust()**](BuyerApi.md#getBuyerSellerTrust) | **GET** /v1/buyer/sellers/{username}/trust | Seller at a glance: member since, completed sales, independent rating, typical handling time, dispute rate, trust tier, badges — and the plain sentences the profile shows.
[**getBuyerTogether()**](BuyerApi.md#getBuyerTogether) | **GET** /v1/buyer/together/{code} | A shop-together room: members, the board with votes, and chat.
[**getBuyerVaultMarketHistory()**](BuyerApi.md#getBuyerVaultMarketHistory) | **GET** /v1/buyer/vault-markets/history | Your Vault Markets value by day at the marks (oldest first, today live) over &#x60;days&#x60; (default 90), and today’s change against yesterday’s close.
[**getBuyerVaultMarketIndex()**](BuyerApi.md#getBuyerVaultMarketIndex) | **GET** /v1/buyer/vault-markets/indexes/{slug} | One index with its published daily closes (oldest first, &#x60;days&#x60; default 365) and its level now.
[**getBuyerVaultMarketInstantExit()**](BuyerApi.md#getBuyerVaultMarketInstantExit) | **GET** /v1/buyer/vault-markets/instant-exit/{id} | The Instant Exit quote for one vault unit you hold, and whether it can be sold now.
[**getBuyerVaultMarketWorth()**](BuyerApi.md#getBuyerVaultMarketWorth) | **GET** /v1/buyer/vault-markets/worth | What your vault is worth now: value at the market prices (marks come only from trades) split into reliable and indicative marks, cost and P&amp;L, today’s change, and an estimate of what the units free to sell would fetch from the bids resting on the book now. Read only.
[**listBuyerActivity()**](BuyerApi.md#listBuyerActivity) | **GET** /v1/buyer/activity | What this buyer has compared lately.
[**listBuyerAuctionBids()**](BuyerApi.md#listBuyerAuctionBids) | **GET** /v1/buyer/auctions/{slug}/bids | An auction’s bid history, highest first, bidders anonymised.
[**listBuyerAuctions()**](BuyerApi.md#listBuyerAuctions) | **GET** /v1/buyer/auctions | Auctions you have bid in — bidding, won or lost (last 100).
[**listBuyerBoards()**](BuyerApi.md#listBuyerBoards) | **GET** /v1/buyer/boards | Your outfit boards: collages of listings, each with a share link.
[**listBuyerBreaks()**](BuyerApi.md#listBuyerBreaks) | **GET** /v1/buyer/breaks | Card-break spots you hold or bought, with what each pulled.
[**listBuyerBuybacks()**](BuyerApi.md#listBuyerBuybacks) | **GET** /v1/buyer/buybacks | Your buyback guarantees and requests.
[**listBuyerCart()**](BuyerApi.md#listBuyerCart) | **GET** /v1/buyer/cart | What is in your Crossly cart.
[**listBuyerCartSaved()**](BuyerApi.md#listBuyerCartSaved) | **GET** /v1/buyer/cart/saved | Items you saved for later out of your cart (last 200).
[**listBuyerCases()**](BuyerApi.md#listBuyerCases) | **GET** /v1/buyer/cases | Resolution center — every case you opened (returns, not received, problems).
[**listBuyerCashback()**](BuyerApi.md#listBuyerCashback) | **GET** /v1/buyer/cashback | Your Scout cashback — pending, confirmed, paid.
[**listBuyerCatalogListingVideos()**](BuyerApi.md#listBuyerCatalogListingVideos) | **GET** /v1/buyer/catalog/listings/{slug}/videos | Videos the seller recorded for this item on request, newest first, with the question each one answers.
[**listBuyerClubs()**](BuyerApi.md#listBuyerClubs) | **GET** /v1/buyer/clubs | Sellers’ loyalty clubs you belong to: your spend with each, your tier and its discount, and the next tier.
[**listBuyerCollectionSets()**](BuyerApi.md#listBuyerCollectionSets) | **GET** /v1/buyer/collection/sets | Sets you are collecting — a catalogue brand + model you own at least two pieces of — with owned / total and percent complete, most complete first; and whether you show on set leaderboards.
[**listBuyerConsolidations()**](BuyerApi.md#listBuyerConsolidations) | **GET** /v1/buyer/consolidations | Your ship-together orders: parcels at the hub, and the one box out.
[**listBuyerConversationGuests()**](BuyerApi.md#listBuyerConversationGuests) | **GET** /v1/buyer/conversations/{id}/guests | Guests in a chat.
[**listBuyerFeedback()**](BuyerApi.md#listBuyerFeedback) | **GET** /v1/buyer/feedback | Feedback you have left sellers, newest first — with the ids you revise by.
[**listBuyerFeedbackPending()**](BuyerApi.md#listBuyerFeedbackPending) | **GET** /v1/buyer/feedback/pending | Orders from the last 60 days that are on their way or arrived and still need your feedback.
[**listBuyerFitRefs()**](BuyerApi.md#listBuyerFitRefs) | **GET** /v1/buyer/fit/refs | Your saved reference garments for fit comparison.
[**listBuyerFollowingSellers()**](BuyerApi.md#listBuyerFollowingSellers) | **GET** /v1/buyer/following/sellers | Sellers you follow, with how many new listings each has since you last looked.
[**listBuyerGiftCardCredit()**](BuyerApi.md#listBuyerGiftCardCredit) | **GET** /v1/buyer/gift-cards/credit | Gift card credit on your account, and when it expires.
[**listBuyerGiftCards()**](BuyerApi.md#listBuyerGiftCards) | **GET** /v1/buyer/gift-cards | Gift cards you bought, newest first.
[**listBuyerGiftFinder()**](BuyerApi.md#listBuyerGiftFinder) | **GET** /v1/buyer/gift-finder | Live listings for a recipient, interest and budget.
[**listBuyerGiftSent()**](BuyerApi.md#listBuyerGiftSent) | **GET** /v1/buyer/gifts/sent | Items you sent as gifts: whether the teaser went out, whether it arrived and was opened, and any thank-you. Send one with &#x60;gift&#x60; on checkout.
[**listBuyerHotspots()**](BuyerApi.md#listBuyerHotspots) | **GET** /v1/buyer/hotspots | Shop-the-look tags on a story or lookbook photo: each tagged listing and where it sits on the image (x, y as fractions).
[**listBuyerHunts()**](BuyerApi.md#listBuyerHunts) | **GET** /v1/buyer/hunts | Your buyer-agent hunts and what they did.
[**listBuyerInstantOffers()**](BuyerApi.md#listBuyerInstantOffers) | **GET** /v1/buyer/instant-offers | Your instant offers: live quotes, accepted ones awaiting a label, approved ones (with the prepaid label) and paid ones.
[**listBuyerLayaways()**](BuyerApi.md#listBuyerLayaways) | **GET** /v1/buyer/layaways | Your layaways: price, paid so far, what is left, and the installment schedule. Put an item on layaway at checkout with layawayItemIds.
[**listBuyerListingQuickQuestions()**](BuyerApi.md#listBuyerListingQuickQuestions) | **GET** /v1/buyer/listings/{slug}/quick-questions | One-tap questions this listing supports; send one as &#x60;quick&#x60; on a message.
[**listBuyerListingSellerReviews()**](BuyerApi.md#listBuyerListingSellerReviews) | **GET** /v1/buyer/listings/{slug}/seller-reviews | The seller’s public reviews: summary, text, photos, replies.
[**listBuyerLiveShipments()**](BuyerApi.md#listBuyerLiveShipments) | **GET** /v1/buyer/live-shipments | Your one-box-per-show shipments: every order won in a show ships together, and postage is charged once (the rest refunded when it ships).
[**listBuyerLiveStreamLineup()**](BuyerApi.md#listBuyerLiveStreamLineup) | **GET** /v1/buyer/live-streams/{id}/lineup | What a live show will sell, in order: each item, its price, and whether it is still available.
[**listBuyerMarketBids()**](BuyerApi.md#listBuyerMarketBids) | **GET** /v1/buyer/market/bids | Your resting market bids.
[**listBuyerMarketWatches()**](BuyerApi.md#listBuyerMarketWatches) | **GET** /v1/buyer/market/watches | Market variants you watch, with the price you are waiting for.
[**listBuyerOffers()**](BuyerApi.md#listBuyerOffers) | **GET** /v1/buyer/offers | Offers you have made, newest first (last 100).
[**listBuyerOrders()**](BuyerApi.md#listBuyerOrders) | **GET** /v1/buyer/orders | What you have bought on Crossly, newest first.
[**listBuyerPackOpenings()**](BuyerApi.md#listBuyerPackOpenings) | **GET** /v1/buyer/pack-openings | Your pulls: what you got, its value, sell-back status, and the fairness proof for each (the server seed once rotated).
[**listBuyerPacks()**](BuyerApi.md#listBuyerPacks) | **GET** /v1/buyer/packs | Packs you can open: price, every tier with its published odds, what is left in it and its value range, and the expected value of one opening.
[**listBuyerParties()**](BuyerApi.md#listBuyerParties) | **GET** /v1/buyer/parties | Themed shopping parties, live and upcoming.
[**listBuyerPartyListings()**](BuyerApi.md#listBuyerPartyListings) | **GET** /v1/buyer/parties/{slug}/listings | Listings shared to a party, featured first.
[**listBuyerPickupPoints()**](BuyerApi.md#listBuyerPickupPoints) | **GET** /v1/buyer/pickup-points | Carrier pickup points (UPS Access Point / FedEx Hold at Location) near an address; pass one as &#x60;pickupPoint&#x60; to POST /v1/buyer/checkout.
[**listBuyerProtectionPlans()**](BuyerApi.md#listBuyerProtectionPlans) | **GET** /v1/buyer/protection-plans | Your protection plans (bought at checkout with &#x60;protection&#x60;): status, term, coverage, contract id, and any refund.
[**listBuyerRegistries()**](BuyerApi.md#listBuyerRegistries) | **GET** /v1/buyer/registries | Your gift registries.
[**listBuyerRegistryGifts()**](BuyerApi.md#listBuyerRegistryGifts) | **GET** /v1/buyer/registries/{id}/gifts | Your thank-you list: who bought what off the registry, and whether you have thanked them.
[**listBuyerRegistrySearch()**](BuyerApi.md#listBuyerRegistrySearch) | **GET** /v1/buyer/registries/search | Find a registry by its name or the registrant’s name. Current and recent registries only.
[**listBuyerRentals()**](BuyerApi.md#listBuyerRentals) | **GET** /v1/buyer/rentals | Your rentals: dates, status (reserved, out, returned, claimed, closed, cancelled), the return label, and what happened to the deposit.
[**listBuyerSizeMemoryPrompts()**](BuyerApi.md#listBuyerSizeMemoryPrompts) | **GET** /v1/buyer/size-memory/prompts | Delivered orders with a size that you haven’t said how they fit (the last 60 days).
[**listBuyerSizeMemorySizes()**](BuyerApi.md#listBuyerSizeMemorySizes) | **GET** /v1/buyer/size-memory/sizes | The sizes learned from what you bought and kept, by kind of item (shoes, tops, bottoms, dresses, outerwear) and department.
[**listBuyerSplits()**](BuyerApi.md#listBuyerSplits) | **GET** /v1/buyer/splits | Purchases you split, with each share’s status.
[**listBuyerSubscriptions()**](BuyerApi.md#listBuyerSubscriptions) | **GET** /v1/buyer/subscriptions | Your subscribe &amp; save standing orders.
[**listBuyerTogether()**](BuyerApi.md#listBuyerTogether) | **GET** /v1/buyer/together | Shop-together rooms you are in.
[**listBuyerTotalRequests()**](BuyerApi.md#listBuyerTotalRequests) | **GET** /v1/buyer/total-requests | Your combined-shipping total requests, newest per seller.
[**listBuyerTryOns()**](BuyerApi.md#listBuyerTryOns) | **GET** /v1/buyer/try-ons | Your AI try-ons: the rendered images (labelled AI-generated wherever shown).
[**listBuyerVault()**](BuyerApi.md#listBuyerVault) | **GET** /v1/buyer/vault | What you own in the Crossly vault: stored (authenticated, on a shelf), listed for sale, or on its way home — with the price to ship one home.
[**listBuyerVaultMarketHoldings()**](BuyerApi.md#listBuyerVaultMarketHoldings) | **GET** /v1/buyer/vault-markets/holdings | Each unit you hold in the vault at its market price, with the mark’s quality (A or B reliable, C indicative, none), cost, P&amp;L and where it stands (stored, listed, lent, pledged, at the grader); &#x60;meta&#x60; carries the totals and the units you have out on loan.
[**listBuyerVaultMarketIndexes()**](BuyerApi.md#listBuyerVaultMarketIndexes) | **GET** /v1/buyer/vault-markets/indexes | Crossly indexes over vault book keys (category, brand, curated, composite, segment, and your own), each with its level now and change since the last daily close. Index levels are valued only from the book’s marks.
[**listBuyerVaultMarketInstantExit()**](BuyerApi.md#listBuyerVaultMarketInstantExit) | **GET** /v1/buyer/vault-markets/instant-exit | Instant Exit quotes for what you hold, one per book key: the best resting bid (yours left out), its share of the mark, the bid levels, units held and which are free to sell, and why a key cannot be sold instantly. A quote, not an order.
[**listBuyerVaultMarketWatchlist()**](BuyerApi.md#listBuyerVaultMarketWatchlist) | **GET** /v1/buyer/vault-markets/watchlist | The book keys you watch, with mark and its quality, 24 h and 7 d change, and the last 30 daily marks.
[**listBuyerVideoRequests()**](BuyerApi.md#listBuyerVideoRequests) | **GET** /v1/buyer/video-requests | Your video requests and their answers.
[**listBuyerWishlistItems()**](BuyerApi.md#listBuyerWishlistItems) | **GET** /v1/buyer/wishlists/{id}/items | What is on one wishlist.
[**listBuyerWishlistMembers()**](BuyerApi.md#listBuyerWishlistMembers) | **GET** /v1/buyer/wishlists/{id}/members | Co-editors of a shared wishlist.
[**listBuyerWishlists()**](BuyerApi.md#listBuyerWishlists) | **GET** /v1/buyer/wishlists | Your wishlists.
[**updateBuyerBoard()**](BuyerApi.md#updateBuyerBoard) | **PATCH** /v1/buyer/boards/{id} | Rename a board, change its description, or make it public / private.
[**updateBuyerBoardLayout()**](BuyerApi.md#updateBuyerBoardLayout) | **PUT** /v1/buyer/boards/{id}/layout | Replace a board’s layout: items by platform listing id or slug, with x, y, w (0–1) and z. At most 40.
[**updateBuyerCollectionSetLeaderboard()**](BuyerApi.md#updateBuyerCollectionSetLeaderboard) | **PUT** /v1/buyer/collection/sets/leaderboard | Show or hide yourself (by your public handle) on set leaderboards.
[**updateBuyerFeedback()**](BuyerApi.md#updateBuyerFeedback) | **PATCH** /v1/buyer/feedback/{id} | Revise feedback you left, within 60 days.
[**updateBuyerHunt()**](BuyerApi.md#updateBuyerHunt) | **PATCH** /v1/buyer/hunts/{id} | Pause, resume or stop a hunt.
[**updateBuyerPurchaseStory()**](BuyerApi.md#updateBuyerPurchaseStory) | **PUT** /v1/buyer/purchases/{id}/story | Write your owner story (280 characters); it travels with the item if you resell it.
[**updateBuyerRegistry()**](BuyerApi.md#updateBuyerRegistry) | **PATCH** /v1/buyer/registries/{id} | Edit a registry: title, kind, date, message, ship-to address.
[**updateBuyerRegistryItem()**](BuyerApi.md#updateBuyerRegistryItem) | **PUT** /v1/buyer/registries/{id}/items/{platformListingId} | How many of an item you want (1–50).
[**updateBuyerSubscription()**](BuyerApi.md#updateBuyerSubscription) | **PATCH** /v1/buyer/subscriptions/{id} | Pause, resume, skip the next delivery, change the interval, or cancel.
[**updateBuyerWishlist()**](BuyerApi.md#updateBuyerWishlist) | **PATCH** /v1/buyer/wishlists/{id} | Rename a wishlist, or make it public / private.


## `createBuyerActivity()`

```php
createBuyerActivity($create_buyer_activity_request): \Crossly\Buyer\Model\Activity\CreateBuyerActivityResponse
```

Report an item your user is looking at, and get our answer.

Records the look and returns whether Crossly has the item and at what price. Send an identifier and a store DOMAIN — a full URL is refused. Nothing about the page itself is stored.

### Example

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

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_buyer_activity_request** | **\Crossly\Buyer\Model\Activity\CreateBuyerActivityRequest**|  |

### Return type

**\Crossly\Buyer\Model\Activity\CreateBuyerActivityResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createBuyerAuctionBid()`

```php
createBuyerAuctionBid($slug, $create_buyer_auction_bid_request): \Crossly\Buyer\Model\Auction\CreateBuyerAuctionBidResponse
```

Place a bid, optionally with a proxy maximum. A WINNING BID IS CHARGED AUTOMATICALLY.

Spends money: if you win, your saved card is charged when the auction closes, with nobody present. Requires buyer:checkout:write AND this key switched on at PUT /v1/buyer/checkout/controls; the bid’s maximum (or amount) is checked against the key’s per-order and daily ceilings. Amounts are integer cents. `leading: false` means a standing proxy bid outbid you at once. Send an Idempotency-Key: a retried bid is a second bid.

### Example

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
$slug = 'slug_example'; // string | The auction listing slug.
$create_buyer_auction_bid_request = new \Crossly\Buyer\Model\Auction\CreateBuyerAuctionBidRequest(); // \Crossly\Buyer\Model\Auction\CreateBuyerAuctionBidRequest

try {
    $result = $apiInstance->createBuyerAuctionBid($slug, $create_buyer_auction_bid_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->createBuyerAuctionBid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **slug** | **string**| The auction listing slug. |
 **create_buyer_auction_bid_request** | **\Crossly\Buyer\Model\Auction\CreateBuyerAuctionBidRequest**|  |

### Return type

**\Crossly\Buyer\Model\Auction\CreateBuyerAuctionBidResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createBuyerAuctionPay()`

```php
createBuyerAuctionPay($slug): \Crossly\Buyer\Model\Auction\CreateBuyerAuctionPayResponse
```

Pay for an auction you won whose automatic charge did not go through.

Returns a Stripe client secret to confirm on the buyer’s device (3-D Secure, a new card). Charges nothing by itself. `paid: true` means there is nothing left to pay.

### Example

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
$slug = 'slug_example'; // string | The auction listing slug.

try {
    $result = $apiInstance->createBuyerAuctionPay($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->createBuyerAuctionPay: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **slug** | **string**| The auction listing slug. |

### Return type

**\Crossly\Buyer\Model\Auction\CreateBuyerAuctionPayResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createBuyerAuctionRetract()`

```php
createBuyerAuctionRetract($slug, $create_buyer_auction_retract_request): \Crossly\Buyer\Model\Auction\CreateBuyerAuctionRetractResponse
```

Retract your bids under eBay’s rules — a typo, a changed listing, or an unreachable seller.

With 12 hours or more left every bid of yours is withdrawn; inside 12 hours only bids placed in the last hour. Proxy answers your bid triggered are withdrawn with it.

### Example

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
$slug = 'slug_example'; // string | The auction listing slug.
$create_buyer_auction_retract_request = new \Crossly\Buyer\Model\Auction\CreateBuyerAuctionRetractRequest(); // \Crossly\Buyer\Model\Auction\CreateBuyerAuctionRetractRequest

try {
    $result = $apiInstance->createBuyerAuctionRetract($slug, $create_buyer_auction_retract_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->createBuyerAuctionRetract: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **slug** | **string**| The auction listing slug. |
 **create_buyer_auction_retract_request** | **\Crossly\Buyer\Model\Auction\CreateBuyerAuctionRetractRequest**|  |

### Return type

**\Crossly\Buyer\Model\Auction\CreateBuyerAuctionRetractResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createBuyerBoard()`

```php
createBuyerBoard(): \Crossly\Buyer\Model\Common\CreateBuyerBoardResponse
```

Create an outfit board.

### Example

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

try {
    $result = $apiInstance->createBuyerBoard();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->createBuyerBoard: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Buyer\Model\Common\CreateBuyerBoardResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createBuyerBoardItem()`

```php
createBuyerBoardItem($id): \Crossly\Buyer\Model\Common\BuyerResponse
```

Add a listing (by slug) to a board, at the next free spot.

### Example

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
$id = 'id_example'; // string

try {
    $result = $apiInstance->createBuyerBoardItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->createBuyerBoardItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Buyer\Model\Common\BuyerResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createBuyerBreakSpotHold()`

```php
createBuyerBreakSpotHold($id, $spot_id): \Crossly\Buyer\Model\Breaks\CreateBuyerBreakSpotHoldResponse
```

Hold a spot in a pick-your-spot break, then buy it through checkout before the hold lapses.

### Example

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
$id = 'id_example'; // string
$spot_id = 'spot_id_example'; // string

try {
    $result = $apiInstance->createBuyerBreakSpotHold($id, $spot_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->createBuyerBreakSpotHold: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **spot_id** | **string**|  |

### Return type

**\Crossly\Buyer\Model\Breaks\CreateBuyerBreakSpotHoldResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createBuyerBuybackRequest()`

```php
createBuyerBuybackRequest($id): \Crossly\Buyer\Model\Common\BuyerResponse
```

Ask Crossly to buy an item back under its buyback guarantee.

### Example

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
$id = 'id_example'; // string

try {
    $result = $apiInstance->createBuyerBuybackRequest($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->createBuyerBuybackRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Buyer\Model\Common\BuyerResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createBuyerCartItem()`

```php
createBuyerCartItem($create_buyer_cart_item_request): \Crossly\Buyer\Model\Cart\CreateBuyerCartItemResponse
```

Add a listing to your cart.

### Example

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
$create_buyer_cart_item_request = new \Crossly\Buyer\Model\Cart\CreateBuyerCartItemRequest(); // \Crossly\Buyer\Model\Cart\CreateBuyerCartItemRequest

try {
    $result = $apiInstance->createBuyerCartItem($create_buyer_cart_item_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->createBuyerCartItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_buyer_cart_item_request** | **\Crossly\Buyer\Model\Cart\CreateBuyerCartItemRequest**|  |

### Return type

**\Crossly\Buyer\Model\Cart\CreateBuyerCartItemResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createBuyerCartItemSaveForLater()`

```php
createBuyerCartItemSaveForLater($id): \Crossly\Buyer\Model\Common\BuyerCartResponse
```

Move a cart line to saved-for-later.

Returns the whole saved list. A line from an accepted offer cannot be saved — its price only holds in the cart.

### Example

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
$id = 'id_example'; // string | The id.

try {
    $result = $apiInstance->createBuyerCartItemSaveForLater($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->createBuyerCartItemSaveForLater: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id. |

### Return type

**\Crossly\Buyer\Model\Common\BuyerCartResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createBuyerCartOptimizer()`

```php
createBuyerCartOptimizer(): \Crossly\Buyer\Model\Cart\CreateBuyerCartOptimizerResponse
```

Cart optimizer: send a shopping list (one item per line, \"2 Charizard Base Set\") and get the cheapest delivered basket across sellers — one pick per line, items + each seller’s shipping with free-shipping thresholds applied. fewestPackages prefers fewer sellers. Nothing is added to the cart.

### Example

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

try {
    $result = $apiInstance->createBuyerCartOptimizer();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->createBuyerCartOptimizer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Buyer\Model\Cart\CreateBuyerCartOptimizerResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createBuyerCartQuote()`

```php
createBuyerCartQuote(): \Crossly\Buyer\Model\Cart\CreateBuyerCartQuoteResponse
```

Price the cart, delivered — item, shipping, tax, total.

Runs the real checkout cascade and returns the totals instead of charging. Nothing is purchased. `taxComplete: false` means there is no saved delivery address, so the total is a floor rather than a final figure. `shippingOptions` lists each seller’s shipping services; send `shippingServiceBySeller` to price a different speed (an id the seller does not offer to the destination is a 400). Optional body: `{ \"shippingServiceBySeller\": { \"<sellerUserId>\": \"<serviceId>\" } }` — omitted sellers get the cheapest service; `registryToken` prices it as a gift shipped to that registry. (No body JSON schema: existing callers POST with none.)

### Example

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

try {
    $result = $apiInstance->createBuyerCartQuote();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->createBuyerCartQuote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Buyer\Model\Cart\CreateBuyerCartQuoteResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createBuyerCartSavedMoveToCart()`

```php
createBuyerCartSavedMoveToCart($id): \Crossly\Buyer\Model\Common\BuyerCartResponse
```

Move a saved item back into your cart, at today’s price.

Refused when the item has sold or delisted. Returns the remaining saved list.

### Example

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
$id = 'id_example'; // string | The id.

try {
    $result = $apiInstance->createBuyerCartSavedMoveToCart($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->createBuyerCartSavedMoveToCart: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id. |

### Return type

**\Crossly\Buyer\Model\Common\BuyerCartResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createBuyerCaseCounter()`

```php
createBuyerCaseCounter($id, $create_buyer_case_counter_request): \Crossly\Buyer\Model\Common\BuyerResponse
```

Propose your own refund figure on a case.

In cents, at most what you paid. The case goes back to the seller for 72 hours.

### Example

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
$id = 'id_example'; // string | The id.
$create_buyer_case_counter_request = new \Crossly\Buyer\Model\Cases\CreateBuyerCaseCounterRequest(); // \Crossly\Buyer\Model\Cases\CreateBuyerCaseCounterRequest

try {
    $result = $apiInstance->createBuyerCaseCounter($id, $create_buyer_case_counter_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->createBuyerCaseCounter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id. |
 **create_buyer_case_counter_request** | **\Crossly\Buyer\Model\Cases\CreateBuyerCaseCounterRequest**|  |

### Return type

**\Crossly\Buyer\Model\Common\BuyerResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createBuyerCaseEscalate()`

```php
createBuyerCaseEscalate($id): \Crossly\Buyer\Model\Common\BuyerResponse
```

Ask Crossly to step in on a case.

Hands the case to Crossly’s reviewers. Refused once it is closed or already escalated.

### Example

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
$id = 'id_example'; // string | The id.

try {
    $result = $apiInstance->createBuyerCaseEscalate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->createBuyerCaseEscalate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id. |

### Return type

**\Crossly\Buyer\Model\Common\BuyerResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createBuyerCaseMessage()`

```php
createBuyerCaseMessage($id, $create_buyer_case_message_request): \Crossly\Buyer\Model\Common\BuyerResponse
```

Post a message on a case thread.

### Example

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
$id = 'id_example'; // string | The id.
$create_buyer_case_message_request = new \Crossly\Buyer\Model\Cases\CreateBuyerCaseMessageRequest(); // \Crossly\Buyer\Model\Cases\CreateBuyerCaseMessageRequest

try {
    $result = $apiInstance->createBuyerCaseMessage($id, $create_buyer_case_message_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->createBuyerCaseMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id. |
 **create_buyer_case_message_request** | **\Crossly\Buyer\Model\Cases\CreateBuyerCaseMessageRequest**|  |

### Return type

**\Crossly\Buyer\Model\Common\BuyerResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createBuyerCaseRespond()`

```php
createBuyerCaseRespond($id, $create_buyer_case_respond_request): \Crossly\Buyer\Model\Common\BuyerResponse
```

Accept or reject the seller’s partial-refund offer on a case.

Accepting refunds the offered amount and closes the case. Rejecting hands it back to the seller for 72 hours. To propose your own figure instead, use the counter endpoint.

### Example

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
$id = 'id_example'; // string | The id.
$create_buyer_case_respond_request = new \Crossly\Buyer\Model\Cases\CreateBuyerCaseRespondRequest(); // \Crossly\Buyer\Model\Cases\CreateBuyerCaseRespondRequest

try {
    $result = $apiInstance->createBuyerCaseRespond($id, $create_buyer_case_respond_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->createBuyerCaseRespond: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id. |
 **create_buyer_case_respond_request** | **\Crossly\Buyer\Model\Cases\CreateBuyerCaseRespondRequest**|  |

### Return type

**\Crossly\Buyer\Model\Common\BuyerResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createBuyerCaseWithdraw()`

```php
createBuyerCaseWithdraw($id): \Crossly\Buyer\Model\Common\BuyerResponse
```

Withdraw a case you opened.

Closes it with no refund and lets the order complete normally. Cannot be reopened — one case per order.

### Example

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
$id = 'id_example'; // string | The id.

try {
    $result = $apiInstance->createBuyerCaseWithdraw($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->createBuyerCaseWithdraw: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id. |

### Return type

**\Crossly\Buyer\Model\Common\BuyerResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createBuyerCatalogListingRental()`

```php
createBuyerCatalogListingRental($slug): \Crossly\Buyer\Model\Catalog\CreateBuyerCatalogListingRentalResponse
```

Book a rental. Returns a Stripe PaymentIntent client secret for rent + shipping both ways + deposit; the dates are held 30 minutes for payment. Crossly buys both labels; the deposit comes back after the item does.

### Example

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
$slug = 'slug_example'; // string

try {
    $result = $apiInstance->createBuyerCatalogListingRental($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->createBuyerCatalogListingRental: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **slug** | **string**|  |

### Return type

**\Crossly\Buyer\Model\Catalog\CreateBuyerCatalogListingRentalResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createBuyerCatalogListingRentalQuote()`

```php
createBuyerCatalogListingRentalQuote($slug): \Crossly\Buyer\Model\Catalog\CreateBuyerCatalogListingRentalQuoteResponse
```

Price a rental: rent (the cheaper of by-the-day and by-the-week), both shipping legs once a ship-to is given, and the deposit. `problem` says why the dates can’t be booked.

### Example

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
$slug = 'slug_example'; // string

try {
    $result = $apiInstance->createBuyerCatalogListingRentalQuote($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->createBuyerCatalogListingRentalQuote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **slug** | **string**|  |

### Return type

**\Crossly\Buyer\Model\Catalog\CreateBuyerCatalogListingRentalQuoteResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createBuyerCatalogListingVideoRequest()`

```php
createBuyerCatalogListingVideoRequest($slug): \Crossly\Buyer\Model\Catalog\CreateBuyerCatalogListingVideoRequestResponse
```

Ask the seller for a video of an item (one open request per item). The seller is notified; their answer appears on the listing for every buyer.

### Example

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
$slug = 'slug_example'; // string

try {
    $result = $apiInstance->createBuyerCatalogListingVideoRequest($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->createBuyerCatalogListingVideoRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **slug** | **string**|  |

### Return type

**\Crossly\Buyer\Model\Catalog\CreateBuyerCatalogListingVideoRequestResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createBuyerConversationInvite()`

```php
createBuyerConversationInvite($id): \Crossly\Buyer\Model\Wishlist\CreateBuyerWishlistInviteResponse
```

Invite a friend into a chat with a seller: a single-use link (7 days) that makes whoever opens it a guest who can read and post. Only the thread’s buyer can invite; at most 5 guests.

### Example

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
$id = 'id_example'; // string

try {
    $result = $apiInstance->createBuyerConversationInvite($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->createBuyerConversationInvite: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Buyer\Model\Wishlist\CreateBuyerWishlistInviteResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createBuyerConversationJoin()`

```php
createBuyerConversationJoin($token): \Crossly\Buyer\Model\Common\CreateBuyerConversationJoinResponse
```

Join a chat you were invited into, as a guest.

### Example

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
$token = 'token_example'; // string

try {
    $result = $apiInstance->createBuyerConversationJoin($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->createBuyerConversationJoin: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**|  |

### Return type

**\Crossly\Buyer\Model\Common\CreateBuyerConversationJoinResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createBuyerFeedback()`

```php
createBuyerFeedback($create_buyer_feedback_request): \Crossly\Buyer\Model\Feedback\CreateBuyerFeedbackResponse
```

Leave feedback on up to 25 orders at once, with optional detailed seller ratings.

Each entry is checked on its own — one refused comment never sinks the others; read `data[].ok`. Orders to review come from GET /v1/buyer/feedback/pending.

### Example

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
$create_buyer_feedback_request = new \Crossly\Buyer\Model\Feedback\CreateBuyerFeedbackRequest(); // \Crossly\Buyer\Model\Feedback\CreateBuyerFeedbackRequest

try {
    $result = $apiInstance->createBuyerFeedback($create_buyer_feedback_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->createBuyerFeedback: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_buyer_feedback_request** | **\Crossly\Buyer\Model\Feedback\CreateBuyerFeedbackRequest**|  |

### Return type

**\Crossly\Buyer\Model\Feedback\CreateBuyerFeedbackResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createBuyerFitRef()`

```php
createBuyerFitRef(): \Crossly\Buyer\Model\Common\BuyerResponse2
```

Save a reference garment (flat measurements, inches) to compare listings against.

### Example

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

try {
    $result = $apiInstance->createBuyerFitRef();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->createBuyerFitRef: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Buyer\Model\Common\BuyerResponse2**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createBuyerFollowingSellerSeen()`

```php
createBuyerFollowingSellerSeen($create_buyer_following_seller_seen_request): \Crossly\Buyer\Model\Common\CreateBuyerFollowingSellerSeenResponse
```

Clear the \"new listings\" count on a followed seller, or on all of them.

### Example

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
$create_buyer_following_seller_seen_request = new \Crossly\Buyer\Model\Common\CreateBuyerFollowingSellerSeenRequest(); // \Crossly\Buyer\Model\Common\CreateBuyerFollowingSellerSeenRequest

try {
    $result = $apiInstance->createBuyerFollowingSellerSeen($create_buyer_following_seller_seen_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->createBuyerFollowingSellerSeen: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_buyer_following_seller_seen_request** | **\Crossly\Buyer\Model\Common\CreateBuyerFollowingSellerSeenRequest**|  |

### Return type

**\Crossly\Buyer\Model\Common\CreateBuyerFollowingSellerSeenResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createBuyerGiftCard()`

```php
createBuyerGiftCard($create_buyer_gift_card_request): \Crossly\Buyer\Model\Gift\CreateBuyerGiftCardResponse
```

Start a gift card purchase.

Creates an unpaid card and a Stripe PaymentIntent, and returns its client secret. Nothing is charged until the PaymentIntent is confirmed; the code is emailed to the recipient once payment clears (at deliverAt, if given) and is never returned here. $10–$500. Cards and their credit expire 5 years after purchase. Idempotency-Key required.

### Example

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
$create_buyer_gift_card_request = new \Crossly\Buyer\Model\Gift\CreateBuyerGiftCardRequest(); // \Crossly\Buyer\Model\Gift\CreateBuyerGiftCardRequest

try {
    $result = $apiInstance->createBuyerGiftCard($create_buyer_gift_card_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->createBuyerGiftCard: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_buyer_gift_card_request** | **\Crossly\Buyer\Model\Gift\CreateBuyerGiftCardRequest**|  |

### Return type

**\Crossly\Buyer\Model\Gift\CreateBuyerGiftCardResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createBuyerGiftCardRedeem()`

```php
createBuyerGiftCardRedeem($create_buyer_gift_card_redeem_request): \Crossly\Buyer\Model\Gift\CreateBuyerGiftCardRedeemResponse
```

Redeem a gift card code into your own balance.

Adds the card’s value to the token owner’s Crossly balance (Crossly Bucks today; CBX granted balance when Crossly issues CBX), spendable at checkout. One redemption per card. The credit keeps the card’s expiry date. Refusals: 404 invalid_code, 409 already_redeemed / not_paid / void / expired.

### Example

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
$create_buyer_gift_card_redeem_request = new \Crossly\Buyer\Model\Gift\CreateBuyerGiftCardRedeemRequest(); // \Crossly\Buyer\Model\Gift\CreateBuyerGiftCardRedeemRequest

try {
    $result = $apiInstance->createBuyerGiftCardRedeem($create_buyer_gift_card_redeem_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->createBuyerGiftCardRedeem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_buyer_gift_card_redeem_request** | **\Crossly\Buyer\Model\Gift\CreateBuyerGiftCardRedeemRequest**|  |

### Return type

**\Crossly\Buyer\Model\Gift\CreateBuyerGiftCardRedeemResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createBuyerGroupBuyJoin()`

```php
createBuyerGroupBuyJoin($id): \Crossly\Buyer\Model\Common\CreateBuyerGroupBuyJoinResponse
```

Join a group buy: a hold at the starting price, captured at the price the group reaches. Checked against this key’s spending controls; send an Idempotency-Key.

### Example

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
$id = 'id_example'; // string

try {
    $result = $apiInstance->createBuyerGroupBuyJoin($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->createBuyerGroupBuyJoin: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Buyer\Model\Common\CreateBuyerGroupBuyJoinResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createBuyerGroupBuyLeave()`

```php
createBuyerGroupBuyLeave($id): \Crossly\Buyer\Model\Common\BuyerResponse
```

Leave a group buy and release your hold.

### Example

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
$id = 'id_example'; // string

try {
    $result = $apiInstance->createBuyerGroupBuyLeave($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->createBuyerGroupBuyLeave: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Buyer\Model\Common\BuyerResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createBuyerHunt()`

```php
createBuyerHunt(): \Crossly\Buyer\Model\Common\BuyerResponse2
```

Start a buyer-agent hunt — over a search (filters), or auto-buy on one listing (listingSlug: buy it once its price, sale applied, is within maxPriceCents). `offer` and `buy` modes also need buyer:checkout:write, and the budget is checked against this key’s spending controls.

### Example

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

try {
    $result = $apiInstance->createBuyerHunt();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->createBuyerHunt: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Buyer\Model\Common\BuyerResponse2**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createBuyerInstantOfferAccept()`

```php
createBuyerInstantOfferAccept($id): \Crossly\Buyer\Model\Common\BuyerResponse
```

Accept Crossly’s instant offer on a collection item. Ops then send a prepaid label; the store credit is paid once the item arrives and checks out.

### Example

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
$id = 'id_example'; // string

try {
    $result = $apiInstance->createBuyerInstantOfferAccept($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->createBuyerInstantOfferAccept: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Buyer\Model\Common\BuyerResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createBuyerLayawayCancel()`

```php
createBuyerLayawayCancel($id): \Crossly\Buyer\Model\Common\BuyerLayawayResponse
```

Cancel a layaway: everything paid comes back except the layaway fee (10% of the price, at most $15).

### Example

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
$id = 'id_example'; // string

try {
    $result = $apiInstance->createBuyerLayawayCancel($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->createBuyerLayawayCancel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Buyer\Model\Common\BuyerLayawayResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createBuyerLayawayPay()`

```php
createBuyerLayawayPay($id): \Crossly\Buyer\Model\Common\BuyerLayawayResponse
```

Pay some (at least $1) or all of what is left now, on the saved card. Paid in full, it ships.

### Example

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
$id = 'id_example'; // string

try {
    $result = $apiInstance->createBuyerLayawayPay($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->createBuyerLayawayPay: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Buyer\Model\Common\BuyerLayawayResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createBuyerListingAudioSummary()`

```php
createBuyerListingAudioSummary($slug): \Crossly\Buyer\Model\Listing\GetBuyerListingAudioSummaryResponse
```

Record the spoken summary of a listing (cached per listing version). 503 naming TTS_API_KEY when no speech provider is configured.

### Example

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
$slug = 'slug_example'; // string

try {
    $result = $apiInstance->createBuyerListingAudioSummary($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->createBuyerListingAudioSummary: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **slug** | **string**|  |

### Return type

**\Crossly\Buyer\Model\Listing\GetBuyerListingAudioSummaryResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createBuyerListingSplit()`

```php
createBuyerListingSplit($slug): \Crossly\Buyer\Model\Listing\CreateBuyerListingSplitResponse
```

Split a purchase: one pay link per person; nobody is charged until all have paid.

### Example

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
$slug = 'slug_example'; // string

try {
    $result = $apiInstance->createBuyerListingSplit($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->createBuyerListingSplit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **slug** | **string**|  |

### Return type

**\Crossly\Buyer\Model\Listing\CreateBuyerListingSplitResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createBuyerListingSubscribe()`

```php
createBuyerListingSubscribe($slug): \Crossly\Buyer\Model\Common\BuyerResponse2
```

Subscribe & save: a standing order charged to your saved card every interval. Checked against this key’s spending controls; send an Idempotency-Key.

### Example

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
$slug = 'slug_example'; // string

try {
    $result = $apiInstance->createBuyerListingSubscribe($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->createBuyerListingSubscribe: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **slug** | **string**|  |

### Return type

**\Crossly\Buyer\Model\Common\BuyerResponse2**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createBuyerListingTryOn()`

```php
createBuyerListingTryOn($slug): \Crossly\Buyer\Model\Listing\CreateBuyerListingTryOnResponse
```

Render an AI try-on of this listing on the buyer’s own photo (base64 `photo`, or `reuseLastPhoto`). `confirmSelfAdult` must be true: the photo is of the buyer and they are 18+. Wearables only; capped per day; 503 naming TRYON_API_KEY when no image model is configured.

### Example

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
$slug = 'slug_example'; // string

try {
    $result = $apiInstance->createBuyerListingTryOn($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->createBuyerListingTryOn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **slug** | **string**|  |

### Return type

**\Crossly\Buyer\Model\Listing\CreateBuyerListingTryOnResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createBuyerMarketBid()`

```php
createBuyerMarketBid(): \Crossly\Buyer\Model\Common\CreateBuyerMarketBidResponse
```

Place a fixed-price market bid. SPENDS MONEY: it fills against the lowest ask at or under your price and charges your saved card (plus the fast-ship premium when fastShip is set and it fills from vault stock). deliverTo vault keeps it in your Crossly vault; gradeWith sends a raw card to a Grading run first. Checked against this key’s spending controls; send an Idempotency-Key.

### Example

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

try {
    $result = $apiInstance->createBuyerMarketBid();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->createBuyerMarketBid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Buyer\Model\Common\CreateBuyerMarketBidResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createBuyerMarketWatch()`

```php
createBuyerMarketWatch(): \Crossly\Buyer\Model\Common\BuyerResponse
```

Watch a market variant: alert at or below a price, or on any drop.

### Example

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

try {
    $result = $apiInstance->createBuyerMarketWatch();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->createBuyerMarketWatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Buyer\Model\Common\BuyerResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createBuyerOffer()`

```php
createBuyerOffer($create_buyer_offer_request): \Crossly\Buyer\Model\Offer\CreateBuyerOfferResponse
```

Offer a price on a listing.

Sends an offer to the seller. Spends nothing — a seller accepting still leaves you to complete checkout. Offers at or above the asking price are refused; buy it instead.

### Example

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
$create_buyer_offer_request = new \Crossly\Buyer\Model\Offer\CreateBuyerOfferRequest(); // \Crossly\Buyer\Model\Offer\CreateBuyerOfferRequest

try {
    $result = $apiInstance->createBuyerOffer($create_buyer_offer_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->createBuyerOffer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_buyer_offer_request** | **\Crossly\Buyer\Model\Offer\CreateBuyerOfferRequest**|  |

### Return type

**\Crossly\Buyer\Model\Offer\CreateBuyerOfferResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createBuyerOfferRespond()`

```php
createBuyerOfferRespond($id, $create_buyer_offer_respond_request): \Crossly\Buyer\Model\Offer\CreateBuyerOfferRespondResponse
```

Answer a seller’s counteroffer — accept, decline, or counter back.

Only an offer with `awaitingBuyer: true` can be answered. Accepting opens a 48-hour window to pay on Crossly; it charges nothing. A counter must be below the seller’s price (in cents) and becomes a new offer waiting on the seller.

### Example

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
$id = 'id_example'; // string | The offer id.
$create_buyer_offer_respond_request = new \Crossly\Buyer\Model\Offer\CreateBuyerOfferRespondRequest(); // \Crossly\Buyer\Model\Offer\CreateBuyerOfferRespondRequest

try {
    $result = $apiInstance->createBuyerOfferRespond($id, $create_buyer_offer_respond_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->createBuyerOfferRespond: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The offer id. |
 **create_buyer_offer_respond_request** | **\Crossly\Buyer\Model\Offer\CreateBuyerOfferRespondRequest**|  |

### Return type

**\Crossly\Buyer\Model\Offer\CreateBuyerOfferRespondResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createBuyerOrderCancel()`

```php
createBuyerOrderCancel($id): \Crossly\Buyer\Model\Order\CreateBuyerOrderCancelResponse
```

Cancel an order before it ships — refunds it in full.

Instant while the seller has not bought a label or shipped. Refused with 409 once they have (`details.shopCode`: already_shipped, label_purchased, disputed, already_refunded). Check GET /v1/buyer/orders/{id}/eligibility first.

### Example

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
$id = 'id_example'; // string | The id.

try {
    $result = $apiInstance->createBuyerOrderCancel($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->createBuyerOrderCancel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id. |

### Return type

**\Crossly\Buyer\Model\Order\CreateBuyerOrderCancelResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createBuyerOrderInr()`

```php
createBuyerOrderInr($id, $create_buyer_order_inr_request): \Crossly\Buyer\Model\Order\CreateBuyerOrderInrResponse
```

Open an item-not-received case.

Only after the expected delivery window — a 409 carries `details.reason` and `details.opensAt` when it is too early. The seller then has 72 hours to respond. One case per order, ever.

### Example

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
$id = 'id_example'; // string | The id.
$create_buyer_order_inr_request = new \Crossly\Buyer\Model\Order\CreateBuyerOrderInrRequest(); // \Crossly\Buyer\Model\Order\CreateBuyerOrderInrRequest

try {
    $result = $apiInstance->createBuyerOrderInr($id, $create_buyer_order_inr_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->createBuyerOrderInr: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id. |
 **create_buyer_order_inr_request** | **\Crossly\Buyer\Model\Order\CreateBuyerOrderInrRequest**|  |

### Return type

**\Crossly\Buyer\Model\Order\CreateBuyerOrderInrResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createBuyerOrderReceived()`

```php
createBuyerOrderReceived($id): \Crossly\Buyer\Model\Order\CreateBuyerOrderReceivedResponse
```

Confirm you received an order.

Records receipt and opens feedback. It does NOT release the seller’s money sooner or shorten your buyer protection. Closes the item-not-received entry point.

### Example

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
$id = 'id_example'; // string | The id.

try {
    $result = $apiInstance->createBuyerOrderReceived($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->createBuyerOrderReceived: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id. |

### Return type

**\Crossly\Buyer\Model\Order\CreateBuyerOrderReceivedResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createBuyerOrderTip()`

```php
createBuyerOrderTip($id): \Crossly\Buyer\Model\Order\CreateBuyerOrderTipResponse
```

Tip the seller on one of your shipped orders, charged to your saved card. One tip per order; $1–$500; checked against this key’s spending controls.

### Example

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
$id = 'id_example'; // string

try {
    $result = $apiInstance->createBuyerOrderTip($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->createBuyerOrderTip: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Buyer\Model\Order\CreateBuyerOrderTipResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createBuyerPackFairnessRotate()`

```php
createBuyerPackFairnessRotate(): \Crossly\Buyer\Model\Pack\GetBuyerPackFairnessResponse
```

Reveal your current server seed and start a new one (optionally with your own client seed). Refused while an opening is awaiting payment.

### Example

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

try {
    $result = $apiInstance->createBuyerPackFairnessRotate();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->createBuyerPackFairnessRotate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Buyer\Model\Pack\GetBuyerPackFairnessResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createBuyerPackOpen()`

```php
createBuyerPackOpen($slug): \Crossly\Buyer\Model\Pack\CreateBuyerPackOpenResponse
```

Open a pack. SPENDS MONEY: charges the pack price to your saved card, then pulls one real item by the published odds (provably fair: see /buyer/packs/fairness) into your Crossly vault. confirmAdult must be true. Checked against this key’s spending controls; send an Idempotency-Key.

### Example

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
$slug = 'slug_example'; // string

try {
    $result = $apiInstance->createBuyerPackOpen($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->createBuyerPackOpen: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **slug** | **string**|  |

### Return type

**\Crossly\Buyer\Model\Pack\CreateBuyerPackOpenResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createBuyerPackOpeningSellBack()`

```php
createBuyerPackOpeningSellBack($id): \Crossly\Buyer\Model\Pack\CreateBuyerPackOpeningSellBackResponse
```

Sell a pull straight back for Crossly credit at the pack’s buyback rate, within its window, while it is still in your vault.

### Example

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
$id = 'id_example'; // string

try {
    $result = $apiInstance->createBuyerPackOpeningSellBack($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->createBuyerPackOpeningSellBack: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Buyer\Model\Pack\CreateBuyerPackOpeningSellBackResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createBuyerPassportClaim()`

```php
createBuyerPassportClaim($code): \Crossly\Buyer\Model\Common\GetBuyerPassportResponse
```

Claim a passport as the item’s current owner (the buyer of its latest sale) — shown as “in its owner’s hands” until it sells again.

### Example

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
$code = 'code_example'; // string

try {
    $result = $apiInstance->createBuyerPassportClaim($code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->createBuyerPassportClaim: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **code** | **string**|  |

### Return type

**\Crossly\Buyer\Model\Common\GetBuyerPassportResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createBuyerProtectionPlanCancel()`

```php
createBuyerProtectionPlanCancel($id): \Crossly\Buyer\Model\Common\CreateBuyerProtectionPlanCancelResponse
```

Cancel a protection plan. The insurer decides what is refundable (pro-rata after the free-look window); that amount goes back to the card.

### Example

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
$id = 'id_example'; // string

try {
    $result = $apiInstance->createBuyerProtectionPlanCancel($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->createBuyerProtectionPlanCancel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Buyer\Model\Common\CreateBuyerProtectionPlanCancelResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createBuyerPurchaseDownload()`

```php
createBuyerPurchaseDownload($id): \Crossly\Buyer\Model\Purchase\CreateBuyerPurchaseDownloadResponse
```

A ten-minute link to a digital purchase’s file; each call uses one of its downloads.

### Example

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
$id = 'id_example'; // string

try {
    $result = $apiInstance->createBuyerPurchaseDownload($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->createBuyerPurchaseDownload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Buyer\Model\Purchase\CreateBuyerPurchaseDownloadResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createBuyerPurchaseFit()`

```php
createBuyerPurchaseFit($id): \Crossly\Buyer\Model\Common\BuyerResponse
```

Say how a delivered purchase fit: true_to_size, small or large. It teaches your size memory and, pooled with other buyers, how the brand runs.

### Example

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
$id = 'id_example'; // string

try {
    $result = $apiInstance->createBuyerPurchaseFit($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->createBuyerPurchaseFit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Buyer\Model\Common\BuyerResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createBuyerPurchaseReturn()`

```php
createBuyerPurchaseReturn($id): \Crossly\Buyer\Model\Common\BuyerResponse2
```

Return a purchase under the seller’s policy, or send back a try-at-home item. With reason doesnt_fit, `fit` (small | large) says which way, and it feeds your size memory.

### Example

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
$id = 'id_example'; // string

try {
    $result = $apiInstance->createBuyerPurchaseReturn($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->createBuyerPurchaseReturn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Buyer\Model\Common\BuyerResponse2**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createBuyerRegistry()`

```php
createBuyerRegistry(): \Crossly\Buyer\Model\Registry\CreateBuyerRegistryResponse
```

Start a gift registry (wedding, baby, birthday, housewarming, graduation, other). Items are added like any wishlist item; set shipAddressId to one of your saved addresses so guests can buy — they never see it.

### Example

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

try {
    $result = $apiInstance->createBuyerRegistry();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->createBuyerRegistry: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Buyer\Model\Registry\CreateBuyerRegistryResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createBuyerRegistryGiftThanked()`

```php
createBuyerRegistryGiftThanked($id, $gift_id): \Crossly\Buyer\Model\Registry\CreateBuyerRegistryGiftThankedResponse
```

Tick a gift as thanked (or untick it).

### Example

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
$id = 'id_example'; // string
$gift_id = 'gift_id_example'; // string

try {
    $result = $apiInstance->createBuyerRegistryGiftThanked($id, $gift_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->createBuyerRegistryGiftThanked: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **gift_id** | **string**|  |

### Return type

**\Crossly\Buyer\Model\Registry\CreateBuyerRegistryGiftThankedResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createBuyerRentalArrivalPhoto()`

```php
createBuyerRentalArrivalPhoto($id): \Crossly\Buyer\Model\Rental\CreateBuyerRentalArrivalPhotoResponse
```

Photograph a rental on arrival (URLs you uploaded): your side of the condition record.

### Example

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
$id = 'id_example'; // string

try {
    $result = $apiInstance->createBuyerRentalArrivalPhoto($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->createBuyerRentalArrivalPhoto: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Buyer\Model\Rental\CreateBuyerRentalArrivalPhotoResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createBuyerRentalCancel()`

```php
createBuyerRentalCancel($id): \Crossly\Buyer\Model\Common\BuyerResponse
```

Cancel a rental that has not shipped: everything is refunded.

### Example

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
$id = 'id_example'; // string

try {
    $result = $apiInstance->createBuyerRentalCancel($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->createBuyerRentalCancel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Buyer\Model\Common\BuyerResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createBuyerRentalClaimResponse()`

```php
createBuyerRentalClaimResponse($id): \Crossly\Buyer\Model\Common\BuyerResponse
```

Answer a deposit claim: accept (the claim is paid, the rest refunded) or dispute (Crossly decides).

### Example

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
$id = 'id_example'; // string

try {
    $result = $apiInstance->createBuyerRentalClaimResponse($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->createBuyerRentalClaimResponse: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Buyer\Model\Common\BuyerResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createBuyerRentalIdentityStart()`

```php
createBuyerRentalIdentityStart(): \Crossly\Buyer\Model\Rental\CreateBuyerRentalIdentityStartResponse
```

Start the ID check renting needs (Stripe Identity: photo ID + selfie). Open `url` (hosted) or use `clientSecret` with Stripe.js.

### Example

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

try {
    $result = $apiInstance->createBuyerRentalIdentityStart();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->createBuyerRentalIdentityStart: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Buyer\Model\Rental\CreateBuyerRentalIdentityStartResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createBuyerReturnCancel()`

```php
createBuyerReturnCancel($id): \Crossly\Buyer\Model\Common\BuyerResponse
```

Cancel a return before it ships.

### Example

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
$id = 'id_example'; // string

try {
    $result = $apiInstance->createBuyerReturnCancel($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->createBuyerReturnCancel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Buyer\Model\Common\BuyerResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createBuyerReturnTracking()`

```php
createBuyerReturnTracking($id): \Crossly\Buyer\Model\Common\BuyerResponse
```

Add tracking to a return you shipped on your own label.

### Example

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
$id = 'id_example'; // string

try {
    $result = $apiInstance->createBuyerReturnTracking($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->createBuyerReturnTracking: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Buyer\Model\Common\BuyerResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createBuyerSellerClubJoin()`

```php
createBuyerSellerClubJoin($seller_user_id): \Crossly\Buyer\Model\Seller\CreateBuyerSellerClubJoinResponse
```

Join a seller’s loyalty club (free). Your tier’s discount then applies to their items — the best of it and any other rate you have with them, never stacked.

### Example

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
$seller_user_id = 'seller_user_id_example'; // string

try {
    $result = $apiInstance->createBuyerSellerClubJoin($seller_user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->createBuyerSellerClubJoin: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **seller_user_id** | **string**|  |

### Return type

**\Crossly\Buyer\Model\Seller\CreateBuyerSellerClubJoinResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createBuyerSellerReport()`

```php
createBuyerSellerReport($username, $create_buyer_seller_report_request): \Crossly\Buyer\Model\Seller\CreateBuyerSellerReportResponse
```

Report a seller to Crossly’s trust team.

A second report while your first is still under review updates that report instead of filing another. `purchaseId` is attached only if it is your order from this seller.

### Example

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
$username = 'username_example'; // string | The seller’s shop handle.
$create_buyer_seller_report_request = new \Crossly\Buyer\Model\Seller\CreateBuyerSellerReportRequest(); // \Crossly\Buyer\Model\Seller\CreateBuyerSellerReportRequest

try {
    $result = $apiInstance->createBuyerSellerReport($username, $create_buyer_seller_report_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->createBuyerSellerReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **username** | **string**| The seller’s shop handle. |
 **create_buyer_seller_report_request** | **\Crossly\Buyer\Model\Seller\CreateBuyerSellerReportRequest**|  |

### Return type

**\Crossly\Buyer\Model\Seller\CreateBuyerSellerReportResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createBuyerSplitCancel()`

```php
createBuyerSplitCancel($id): \Crossly\Buyer\Model\Common\BuyerResponse
```

Cancel a split you organised; every held share is released.

### Example

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
$id = 'id_example'; // string

try {
    $result = $apiInstance->createBuyerSplitCancel($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->createBuyerSplitCancel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Buyer\Model\Common\BuyerResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createBuyerTogether()`

```php
createBuyerTogether(): \Crossly\Buyer\Model\Together\CreateBuyerTogetherResponse
```

Start a shop-together room.

### Example

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

try {
    $result = $apiInstance->createBuyerTogether();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->createBuyerTogether: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Buyer\Model\Together\CreateBuyerTogetherResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createBuyerTogetherItem()`

```php
createBuyerTogetherItem($code): \Crossly\Buyer\Model\Common\BuyerResponse
```

Add a listing to a shop-together board.

### Example

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
$code = 'code_example'; // string

try {
    $result = $apiInstance->createBuyerTogetherItem($code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->createBuyerTogetherItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **code** | **string**|  |

### Return type

**\Crossly\Buyer\Model\Common\BuyerResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createBuyerTogetherItemVote()`

```php
createBuyerTogetherItemVote($code, $id): \Crossly\Buyer\Model\Common\BuyerResponse
```

Vote an item on a room’s board up (1), down (-1) or clear (0).

### Example

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
$code = 'code_example'; // string
$id = 'id_example'; // string

try {
    $result = $apiInstance->createBuyerTogetherItemVote($code, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->createBuyerTogetherItemVote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **code** | **string**|  |
 **id** | **string**|  |

### Return type

**\Crossly\Buyer\Model\Common\BuyerResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createBuyerTogetherJoin()`

```php
createBuyerTogetherJoin($code): \Crossly\Buyer\Model\Together\CreateBuyerTogetherResponse
```

Join a shop-together room by its code.

### Example

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
$code = 'code_example'; // string

try {
    $result = $apiInstance->createBuyerTogetherJoin($code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->createBuyerTogetherJoin: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **code** | **string**|  |

### Return type

**\Crossly\Buyer\Model\Together\CreateBuyerTogetherResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createBuyerTogetherLeave()`

```php
createBuyerTogetherLeave($code): \Crossly\Buyer\Model\Common\BuyerResponse
```

Leave a shop-together room.

### Example

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
$code = 'code_example'; // string

try {
    $result = $apiInstance->createBuyerTogetherLeave($code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->createBuyerTogetherLeave: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **code** | **string**|  |

### Return type

**\Crossly\Buyer\Model\Common\BuyerResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createBuyerTogetherMessage()`

```php
createBuyerTogetherMessage($code): \Crossly\Buyer\Model\Common\BuyerResponse
```

Say something in a shop-together room.

### Example

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
$code = 'code_example'; // string

try {
    $result = $apiInstance->createBuyerTogetherMessage($code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->createBuyerTogetherMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **code** | **string**|  |

### Return type

**\Crossly\Buyer\Model\Common\BuyerResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createBuyerTotalRequest()`

```php
createBuyerTotalRequest($create_buyer_total_request_request): \Crossly\Buyer\Model\Total\CreateBuyerTotalRequestResponse
```

Ask a seller for one combined shipping total on everything of theirs in your cart.

Needs two or more of the seller’s items in your cart. Spends nothing; the quote applies at checkout on Crossly.

### Example

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
$create_buyer_total_request_request = new \Crossly\Buyer\Model\Total\CreateBuyerTotalRequestRequest(); // \Crossly\Buyer\Model\Total\CreateBuyerTotalRequestRequest

try {
    $result = $apiInstance->createBuyerTotalRequest($create_buyer_total_request_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->createBuyerTotalRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_buyer_total_request_request** | **\Crossly\Buyer\Model\Total\CreateBuyerTotalRequestRequest**|  |

### Return type

**\Crossly\Buyer\Model\Total\CreateBuyerTotalRequestResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createBuyerVaultList()`

```php
createBuyerVaultList($id): \Crossly\Buyer\Model\Vault\CreateBuyerVaultListResponse
```

Sell a vault item on the market at your price. It is already authenticated, so when it sells nothing ships in: the buyer keeps it vaulted or it ships straight to them.

### Example

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
$id = 'id_example'; // string

try {
    $result = $apiInstance->createBuyerVaultList($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->createBuyerVaultList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Buyer\Model\Vault\CreateBuyerVaultListResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createBuyerVaultUnlist()`

```php
createBuyerVaultUnlist($id): \Crossly\Buyer\Model\Common\BuyerResponse
```

Take a vault item off the market; it stays stored.

### Example

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
$id = 'id_example'; // string

try {
    $result = $apiInstance->createBuyerVaultUnlist($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->createBuyerVaultUnlist: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Buyer\Model\Common\BuyerResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createBuyerVaultWithdraw()`

```php
createBuyerVaultWithdraw($id): \Crossly\Buyer\Model\Vault\CreateBuyerVaultWithdrawResponse
```

Ship a vault item home, standard or expedited. The shipping, any storage it owes and the early-withdrawal fee (within 90 days of arriving) are charged to your saved card now, all checked against this key’s spending controls; send an Idempotency-Key.

### Example

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
$id = 'id_example'; // string

try {
    $result = $apiInstance->createBuyerVaultWithdraw($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->createBuyerVaultWithdraw: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Buyer\Model\Vault\CreateBuyerVaultWithdrawResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createBuyerWishlist()`

```php
createBuyerWishlist($create_buyer_wishlist_request): \Crossly\Buyer\Model\Wishlist\CreateBuyerWishlistResponse
```

Create a wishlist.

### Example

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
$create_buyer_wishlist_request = new \Crossly\Buyer\Model\Wishlist\CreateBuyerWishlistRequest(); // \Crossly\Buyer\Model\Wishlist\CreateBuyerWishlistRequest

try {
    $result = $apiInstance->createBuyerWishlist($create_buyer_wishlist_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->createBuyerWishlist: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_buyer_wishlist_request** | **\Crossly\Buyer\Model\Wishlist\CreateBuyerWishlistRequest**|  |

### Return type

**\Crossly\Buyer\Model\Wishlist\CreateBuyerWishlistResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createBuyerWishlistInvite()`

```php
createBuyerWishlistInvite($id): \Crossly\Buyer\Model\Wishlist\CreateBuyerWishlistInviteResponse
```

Share a wishlist with a co-editor: a single-use link (14 days). Members add and remove items; only the owner renames, deletes or removes members. At most 20.

### Example

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
$id = 'id_example'; // string

try {
    $result = $apiInstance->createBuyerWishlistInvite($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->createBuyerWishlistInvite: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Buyer\Model\Wishlist\CreateBuyerWishlistInviteResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createBuyerWishlistItem()`

```php
createBuyerWishlistItem($id, $create_buyer_wishlist_item_request): \Crossly\Buyer\Model\Common\BuyerResponse2
```

Add a listing to a wishlist.

### Example

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
$id = 'id_example'; // string
$create_buyer_wishlist_item_request = new \Crossly\Buyer\Model\Wishlist\CreateBuyerWishlistItemRequest(); // \Crossly\Buyer\Model\Wishlist\CreateBuyerWishlistItemRequest

try {
    $result = $apiInstance->createBuyerWishlistItem($id, $create_buyer_wishlist_item_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->createBuyerWishlistItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **create_buyer_wishlist_item_request** | **\Crossly\Buyer\Model\Wishlist\CreateBuyerWishlistItemRequest**|  |

### Return type

**\Crossly\Buyer\Model\Common\BuyerResponse2**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createBuyerWishlistJoin()`

```php
createBuyerWishlistJoin($token): \Crossly\Buyer\Model\Wishlist\CreateBuyerWishlistJoinResponse
```

Join a wishlist you were invited to edit.

### Example

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
$token = 'token_example'; // string

try {
    $result = $apiInstance->createBuyerWishlistJoin($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->createBuyerWishlistJoin: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**|  |

### Return type

**\Crossly\Buyer\Model\Wishlist\CreateBuyerWishlistJoinResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createBuyerWishlistShare()`

```php
createBuyerWishlistShare($id, $create_buyer_wishlist_share_request): \Crossly\Buyer\Model\Wishlist\CreateBuyerWishlistShareResponse
```

Share a wishlist — makes it public and returns its link.

`resetLink: true` issues a new link and kills the old one, for a link that went further than intended. To stop sharing, PATCH the list with isPublic: false.

### Example

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
$id = 'id_example'; // string | The id.
$create_buyer_wishlist_share_request = new \Crossly\Buyer\Model\Wishlist\CreateBuyerWishlistShareRequest(); // \Crossly\Buyer\Model\Wishlist\CreateBuyerWishlistShareRequest

try {
    $result = $apiInstance->createBuyerWishlistShare($id, $create_buyer_wishlist_share_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->createBuyerWishlistShare: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id. |
 **create_buyer_wishlist_share_request** | **\Crossly\Buyer\Model\Wishlist\CreateBuyerWishlistShareRequest**|  |

### Return type

**\Crossly\Buyer\Model\Wishlist\CreateBuyerWishlistShareResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteBuyerBoard()`

```php
deleteBuyerBoard($id): \Crossly\Buyer\Model\Common\BuyerResponse
```

Delete a board.

### Example

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
$id = 'id_example'; // string

try {
    $result = $apiInstance->deleteBuyerBoard($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->deleteBuyerBoard: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Buyer\Model\Common\BuyerResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteBuyerBoardItem()`

```php
deleteBuyerBoardItem($id, $platform_listing_id): \Crossly\Buyer\Model\Common\BuyerResponse
```

Take a listing off a board.

### Example

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
$id = 'id_example'; // string
$platform_listing_id = 'platform_listing_id_example'; // string

try {
    $result = $apiInstance->deleteBuyerBoardItem($id, $platform_listing_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->deleteBuyerBoardItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **platform_listing_id** | **string**|  |

### Return type

**\Crossly\Buyer\Model\Common\BuyerResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteBuyerBreakSpotHold()`

```php
deleteBuyerBreakSpotHold($id, $spot_id): \Crossly\Buyer\Model\Common\BuyerResponse
```

Release a break spot you hold.

### Example

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
$id = 'id_example'; // string
$spot_id = 'spot_id_example'; // string

try {
    $result = $apiInstance->deleteBuyerBreakSpotHold($id, $spot_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->deleteBuyerBreakSpotHold: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **spot_id** | **string**|  |

### Return type

**\Crossly\Buyer\Model\Common\BuyerResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteBuyerCartItem()`

```php
deleteBuyerCartItem($id)
```

Remove a line from your cart.

### Example

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
$id = 'id_example'; // string

try {
    $apiInstance->deleteBuyerCartItem($id);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->deleteBuyerCartItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteBuyerCartSaved()`

```php
deleteBuyerCartSaved($id): \Crossly\Buyer\Model\Common\BuyerCartResponse
```

Remove an item from saved-for-later. Returns the remaining list.

### Example

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
$id = 'id_example'; // string | The id.

try {
    $result = $apiInstance->deleteBuyerCartSaved($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->deleteBuyerCartSaved: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id. |

### Return type

**\Crossly\Buyer\Model\Common\BuyerCartResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteBuyerConversationGuest()`

```php
deleteBuyerConversationGuest($id, $user_id): \Crossly\Buyer\Model\Common\BuyerResponse
```

Remove a guest (the thread’s buyer), or leave (a guest, with your own user id).

### Example

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
$id = 'id_example'; // string
$user_id = 'user_id_example'; // string

try {
    $result = $apiInstance->deleteBuyerConversationGuest($id, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->deleteBuyerConversationGuest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **user_id** | **string**|  |

### Return type

**\Crossly\Buyer\Model\Common\BuyerResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteBuyerFitRef()`

```php
deleteBuyerFitRef($id): \Crossly\Buyer\Model\Common\BuyerResponse
```

Delete a reference garment.

### Example

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
$id = 'id_example'; // string

try {
    $result = $apiInstance->deleteBuyerFitRef($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->deleteBuyerFitRef: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Buyer\Model\Common\BuyerResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteBuyerMarketBid()`

```php
deleteBuyerMarketBid($id): \Crossly\Buyer\Model\Common\BuyerResponse
```

Cancel a resting market bid.

### Example

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
$id = 'id_example'; // string

try {
    $result = $apiInstance->deleteBuyerMarketBid($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->deleteBuyerMarketBid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Buyer\Model\Common\BuyerResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteBuyerMarketWatch()`

```php
deleteBuyerMarketWatch($id): \Crossly\Buyer\Model\Common\BuyerResponse
```

Stop watching a market variant.

### Example

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
$id = 'id_example'; // string

try {
    $result = $apiInstance->deleteBuyerMarketWatch($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->deleteBuyerMarketWatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Buyer\Model\Common\BuyerResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteBuyerOffer()`

```php
deleteBuyerOffer($id): \Crossly\Buyer\Model\Common\BuyerResponse
```

Withdraw an offer you made that the seller has not answered.

Only a pending offer can be withdrawn — an accepted price the seller agreed to cannot be taken back here.

### Example

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
$id = 'id_example'; // string | The offer id.

try {
    $result = $apiInstance->deleteBuyerOffer($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->deleteBuyerOffer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The offer id. |

### Return type

**\Crossly\Buyer\Model\Common\BuyerResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteBuyerRecentlyViewed()`

```php
deleteBuyerRecentlyViewed($slug): \Crossly\Buyer\Model\Common\BuyerResponse
```

Remove one listing from your recently viewed.

Viewing it again brings it back. Sellers’ view counts are unaffected.

### Example

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
$slug = 'slug_example'; // string | The listing slug.

try {
    $result = $apiInstance->deleteBuyerRecentlyViewed($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->deleteBuyerRecentlyViewed: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **slug** | **string**| The listing slug. |

### Return type

**\Crossly\Buyer\Model\Common\BuyerResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteBuyerRecentlyViewed2()`

```php
deleteBuyerRecentlyViewed2(): \Crossly\Buyer\Model\Common\BuyerResponse
```

Clear your recently viewed list.

### Example

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

try {
    $result = $apiInstance->deleteBuyerRecentlyViewed2();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->deleteBuyerRecentlyViewed2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Buyer\Model\Common\BuyerResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteBuyerRegistry()`

```php
deleteBuyerRegistry($id): \Crossly\Buyer\Model\Common\BuyerResponse
```

Delete a registry (and the wishlist behind it).

### Example

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
$id = 'id_example'; // string

try {
    $result = $apiInstance->deleteBuyerRegistry($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->deleteBuyerRegistry: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Buyer\Model\Common\BuyerResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteBuyerSellerClubJoin()`

```php
deleteBuyerSellerClubJoin($seller_user_id): \Crossly\Buyer\Model\Common\BuyerResponse
```

Leave a seller’s loyalty club.

### Example

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
$seller_user_id = 'seller_user_id_example'; // string

try {
    $result = $apiInstance->deleteBuyerSellerClubJoin($seller_user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->deleteBuyerSellerClubJoin: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **seller_user_id** | **string**|  |

### Return type

**\Crossly\Buyer\Model\Common\BuyerResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteBuyerTogetherItem()`

```php
deleteBuyerTogetherItem($code, $id): \Crossly\Buyer\Model\Common\BuyerResponse
```

Take an item you added off a room’s board.

### Example

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
$code = 'code_example'; // string
$id = 'id_example'; // string

try {
    $result = $apiInstance->deleteBuyerTogetherItem($code, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->deleteBuyerTogetherItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **code** | **string**|  |
 **id** | **string**|  |

### Return type

**\Crossly\Buyer\Model\Common\BuyerResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteBuyerTotalRequest()`

```php
deleteBuyerTotalRequest($id): \Crossly\Buyer\Model\Common\BuyerResponse
```

Cancel a total request you made.

### Example

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
$id = 'id_example'; // string | The id.

try {
    $result = $apiInstance->deleteBuyerTotalRequest($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->deleteBuyerTotalRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id. |

### Return type

**\Crossly\Buyer\Model\Common\BuyerResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteBuyerTryOn()`

```php
deleteBuyerTryOn($id): \Crossly\Buyer\Model\Common\DeleteBuyerTryOnResponse
```

Delete a try-on and its images — or pass `all` to delete every photo and result.

### Example

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
$id = 'id_example'; // string

try {
    $result = $apiInstance->deleteBuyerTryOn($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->deleteBuyerTryOn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Buyer\Model\Common\DeleteBuyerTryOnResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteBuyerWishlist()`

```php
deleteBuyerWishlist($id): \Crossly\Buyer\Model\Common\BuyerResponse
```

Delete a wishlist and everything on it.

### Example

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
$id = 'id_example'; // string | The id.

try {
    $result = $apiInstance->deleteBuyerWishlist($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->deleteBuyerWishlist: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id. |

### Return type

**\Crossly\Buyer\Model\Common\BuyerResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteBuyerWishlistItem()`

```php
deleteBuyerWishlistItem($id, $slug): \Crossly\Buyer\Model\Wishlist\DeleteBuyerWishlistItemResponse
```

Take a listing off a wishlist.

### Example

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
$id = 'id_example'; // string | The wishlist id.
$slug = 'slug_example'; // string | The listing slug.

try {
    $result = $apiInstance->deleteBuyerWishlistItem($id, $slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->deleteBuyerWishlistItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The wishlist id. |
 **slug** | **string**| The listing slug. |

### Return type

**\Crossly\Buyer\Model\Wishlist\DeleteBuyerWishlistItemResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteBuyerWishlistMember()`

```php
deleteBuyerWishlistMember($id, $user_id): \Crossly\Buyer\Model\Common\BuyerResponse
```

Remove a co-editor (the owner), or leave a list shared with you (your own user id).

### Example

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
$id = 'id_example'; // string
$user_id = 'user_id_example'; // string

try {
    $result = $apiInstance->deleteBuyerWishlistMember($id, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->deleteBuyerWishlistMember: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **user_id** | **string**|  |

### Return type

**\Crossly\Buyer\Model\Common\BuyerResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getBuyerAuctionMe()`

```php
getBuyerAuctionMe($slug): \Crossly\Buyer\Model\Auction\GetBuyerAuctionMeResponse
```

Where you stand in one auction — your max, leading, won, must you pay.

### Example

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
$slug = 'slug_example'; // string | The auction listing slug.

try {
    $result = $apiInstance->getBuyerAuctionMe($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->getBuyerAuctionMe: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **slug** | **string**| The auction listing slug. |

### Return type

**\Crossly\Buyer\Model\Auction\GetBuyerAuctionMeResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getBuyerBadge()`

```php
getBuyerBadge(): \Crossly\Buyer\Model\Common\GetBuyerBadgeResponse
```

The counts behind the account badge — unread messages, offers waiting, orders to review.

### Example

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

try {
    $result = $apiInstance->getBuyerBadge();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->getBuyerBadge: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Buyer\Model\Common\GetBuyerBadgeResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getBuyerBoard()`

```php
getBuyerBoard($id): \Crossly\Buyer\Model\Common\BuyerBoardResponse
```

One of your boards with its layout: each item’s x, y and width as fractions of the board, and stacking order.

### Example

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
$id = 'id_example'; // string

try {
    $result = $apiInstance->getBuyerBoard($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->getBuyerBoard: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Buyer\Model\Common\BuyerBoardResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getBuyerBoardShared()`

```php
getBuyerBoardShared($token): \Crossly\Buyer\Model\Common\BuyerBoardResponse
```

A shared outfit board, by its link token.

### Example

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
$token = 'token_example'; // string

try {
    $result = $apiInstance->getBuyerBoardShared($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->getBuyerBoardShared: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**|  |

### Return type

**\Crossly\Buyer\Model\Common\BuyerBoardResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getBuyerBreak()`

```php
getBuyerBreak($id): \Crossly\Buyer\Model\Breaks\GetBuyerBreakResponse
```

A card break’s board: spots, holders, and the seed after the draw.

### Example

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
$id = 'id_example'; // string

try {
    $result = $apiInstance->getBuyerBreak($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->getBuyerBreak: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Buyer\Model\Breaks\GetBuyerBreakResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getBuyerCase()`

```php
getBuyerCase($id): \Crossly\Buyer\Model\Cases\GetBuyerCaseResponse
```

One case — its state, the message thread, and the return parcel if there is one.

### Example

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
$id = 'id_example'; // string | The id.

try {
    $result = $apiInstance->getBuyerCase($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->getBuyerCase: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id. |

### Return type

**\Crossly\Buyer\Model\Cases\GetBuyerCaseResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getBuyerCatalogListingMySize()`

```php
getBuyerCatalogListingMySize($slug): \Crossly\Buyer\Model\Catalog\GetBuyerCatalogListingMySizeResponse
```

This item against your size: the size you keep in this kind of item (and in this brand), whether this one is your size, smaller or larger, a warning if this brand and size ran small or large on you before, and how other buyers say the brand runs. null for an unsized item.

### Example

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
$slug = 'slug_example'; // string

try {
    $result = $apiInstance->getBuyerCatalogListingMySize($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->getBuyerCatalogListingMySize: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **slug** | **string**|  |

### Return type

**\Crossly\Buyer\Model\Catalog\GetBuyerCatalogListingMySizeResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getBuyerCatalogListingPrice()`

```php
getBuyerCatalogListingPrice($slug): \Crossly\Buyer\Model\Catalog\GetBuyerCatalogListingPriceResponse
```

The price today. When the seller has the same item live on another marketplace for less, this IS that price (`priceMatch` says where from), and `lowestAnywhere` lists the marketplaces it is guaranteed not to be cheaper on. `priceCheck` rates it against real sales of the same catalog item in the same condition over the last 180 days (great / good / fair / high, with the median and middle-half range in cents); null until there are 3+ sales from 2+ sellers.

### Example

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
$slug = 'slug_example'; // string

try {
    $result = $apiInstance->getBuyerCatalogListingPrice($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->getBuyerCatalogListingPrice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **slug** | **string**|  |

### Return type

**\Crossly\Buyer\Model\Catalog\GetBuyerCatalogListingPriceResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getBuyerCatalogListingRental()`

```php
getBuyerCatalogListingRental($slug): \Crossly\Buyer\Model\Catalog\GetBuyerCatalogListingRentalResponse
```

Whether a listing is for rent: day and week rates, the refundable deposit, length limits, the turnaround buffer, and the dates already booked. null when it is not for rent.

### Example

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
$slug = 'slug_example'; // string

try {
    $result = $apiInstance->getBuyerCatalogListingRental($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->getBuyerCatalogListingRental: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **slug** | **string**|  |

### Return type

**\Crossly\Buyer\Model\Catalog\GetBuyerCatalogListingRentalResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getBuyerCheckoutUsdc()`

```php
getBuyerCheckoutUsdc(): \Crossly\Buyer\Model\Common\GetBuyerCheckoutUsdcResponse
```

Whether Crossly takes USDC (Stripe stablecoin payments: Solana, Ethereum, Base, Polygon), and its per-order limit. Paying needs the buyer’s wallet, so it happens in the browser checkout, never unattended.

### Example

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

try {
    $result = $apiInstance->getBuyerCheckoutUsdc();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->getBuyerCheckoutUsdc: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Buyer\Model\Common\GetBuyerCheckoutUsdcResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getBuyerCollectionOffer()`

```php
getBuyerCollectionOffer($id): \Crossly\Buyer\Model\Collection\GetBuyerCollectionOfferResponse
```

What an item in your collection would fetch now: the top open bid on the market for the same variant, condition and grade, and Crossly’s instant offer in store credit when that is switched on (a quote valid for a limited time).

### Example

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
$id = 'id_example'; // string

try {
    $result = $apiInstance->getBuyerCollectionOffer($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->getBuyerCollectionOffer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Buyer\Model\Collection\GetBuyerCollectionOfferResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getBuyerCollectionSet()`

```php
getBuyerCollectionSet($category, $brand, $model): \Crossly\Buyer\Model\Collection\GetBuyerCollectionSetResponse
```

One set: every piece (owned or missing, with its lowest ask on the market), what completing it would cost now, and the leaderboard of collectors who opted in, with your rank.

### Example

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
$category = 'category_example'; // string
$brand = 'brand_example'; // string
$model = 'model_example'; // string

try {
    $result = $apiInstance->getBuyerCollectionSet($category, $brand, $model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->getBuyerCollectionSet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **category** | **string**|  |
 **brand** | **string**|  |
 **model** | **string**|  |

### Return type

**\Crossly\Buyer\Model\Collection\GetBuyerCollectionSetResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getBuyerCreator()`

```php
getBuyerCreator($handle): \Crossly\Buyer\Model\Common\GetBuyerCreatorResponse
```

A creator storefront: profile, affiliate code, and shelves of live picks.

### Example

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
$handle = 'handle_example'; // string

try {
    $result = $apiInstance->getBuyerCreator($handle);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->getBuyerCreator: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**|  |

### Return type

**\Crossly\Buyer\Model\Common\GetBuyerCreatorResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getBuyerFitVocabulary()`

```php
getBuyerFitVocabulary(): \Crossly\Buyer\Model\Common\GetBuyerFitVocabularyResponse
```

Garment kinds and the measurements each takes.

### Example

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

try {
    $result = $apiInstance->getBuyerFitVocabulary();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->getBuyerFitVocabulary: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Buyer\Model\Common\GetBuyerFitVocabularyResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getBuyerGiftFinderOption()`

```php
getBuyerGiftFinderOption(): \Crossly\Buyer\Model\Gift\GetBuyerGiftFinderOptionResponse
```

The gift finder’s questions: recipients, interests, budgets.

### Example

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

try {
    $result = $apiInstance->getBuyerGiftFinderOption();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->getBuyerGiftFinderOption: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Buyer\Model\Gift\GetBuyerGiftFinderOptionResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getBuyerImpact()`

```php
getBuyerImpact(): \Crossly\Buyer\Model\Common\GetBuyerImpactResponse
```

The sourced footprint your secondhand purchases avoided.

### Example

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

try {
    $result = $apiInstance->getBuyerImpact();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->getBuyerImpact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Buyer\Model\Common\GetBuyerImpactResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getBuyerLayaway()`

```php
getBuyerLayaway($id): \Crossly\Buyer\Model\Common\BuyerLayawayResponse
```

One layaway and its schedule.

### Example

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
$id = 'id_example'; // string

try {
    $result = $apiInstance->getBuyerLayaway($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->getBuyerLayaway: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Buyer\Model\Common\BuyerLayawayResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getBuyerListingAudioSummary()`

```php
getBuyerListingAudioSummary($slug): \Crossly\Buyer\Model\Listing\GetBuyerListingAudioSummaryResponse
```

A spoken summary of a listing (accessibility): the text, built only from the listing’s own fields and the seller’s description, and the recording of it when one exists.

### Example

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
$slug = 'slug_example'; // string

try {
    $result = $apiInstance->getBuyerListingAudioSummary($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->getBuyerListingAudioSummary: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **slug** | **string**|  |

### Return type

**\Crossly\Buyer\Model\Listing\GetBuyerListingAudioSummaryResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getBuyerListingBoughtTogether()`

```php
getBuyerListingBoughtTogether($slug): \Crossly\Buyer\Model\Listing\GetBuyerListingBoughtTogetherResponse
```

Frequently bought together / complete the look.

### Example

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
$slug = 'slug_example'; // string

try {
    $result = $apiInstance->getBuyerListingBoughtTogether($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->getBuyerListingBoughtTogether: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **slug** | **string**|  |

### Return type

**\Crossly\Buyer\Model\Listing\GetBuyerListingBoughtTogetherResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getBuyerListingBreak()`

```php
getBuyerListingBreak($slug): \Crossly\Buyer\Model\Listing\GetBuyerListingBreakResponse
```

The card break this listing sells spots in, if any; the seed is revealed after the draw.

### Example

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
$slug = 'slug_example'; // string

try {
    $result = $apiInstance->getBuyerListingBreak($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->getBuyerListingBreak: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **slug** | **string**|  |

### Return type

**\Crossly\Buyer\Model\Listing\GetBuyerListingBreakResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getBuyerListingCert()`

```php
getBuyerListingCert($slug): \Crossly\Buyer\Model\Listing\GetBuyerListingCertResponse
```

A graded listing’s cert, checked with the grader: the seller’s claim (grader, grade, cert number), status (verified, mismatch, not_found, or unchecked where the grader has no lookup), population and how many graded higher where the grader publishes them, and the grader’s own cert page.

### Example

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
$slug = 'slug_example'; // string

try {
    $result = $apiInstance->getBuyerListingCert($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->getBuyerListingCert: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **slug** | **string**|  |

### Return type

**\Crossly\Buyer\Model\Listing\GetBuyerListingCertResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getBuyerListingFit()`

```php
getBuyerListingFit($slug): \Crossly\Buyer\Model\Listing\GetBuyerListingFitResponse
```

A listing’s flat measurements, compared with your saved reference garments.

### Example

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
$slug = 'slug_example'; // string

try {
    $result = $apiInstance->getBuyerListingFit($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->getBuyerListingFit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **slug** | **string**|  |

### Return type

**\Crossly\Buyer\Model\Listing\GetBuyerListingFitResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getBuyerListingGroupBuy()`

```php
getBuyerListingGroupBuy($slug): \Crossly\Buyer\Model\Listing\GetBuyerListingGroupBuyResponse
```

The group buy open on this listing, if any.

### Example

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
$slug = 'slug_example'; // string

try {
    $result = $apiInstance->getBuyerListingGroupBuy($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->getBuyerListingGroupBuy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **slug** | **string**|  |

### Return type

**\Crossly\Buyer\Model\Listing\GetBuyerListingGroupBuyResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getBuyerListingImpact()`

```php
getBuyerListingImpact($slug): \Crossly\Buyer\Model\Listing\GetBuyerListingImpactResponse
```

The sourced footprint of making a new equivalent; null when no published figure applies.

### Example

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
$slug = 'slug_example'; // string

try {
    $result = $apiInstance->getBuyerListingImpact($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->getBuyerListingImpact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **slug** | **string**|  |

### Return type

**\Crossly\Buyer\Model\Listing\GetBuyerListingImpactResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getBuyerListingResaleValue()`

```php
getBuyerListingResaleValue($slug): \Crossly\Buyer\Model\Listing\GetBuyerListingResaleValueResponse
```

What the same brand and category resold for on Crossly, and the buyback offer when enabled.

### Example

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
$slug = 'slug_example'; // string

try {
    $result = $apiInstance->getBuyerListingResaleValue($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->getBuyerListingResaleValue: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **slug** | **string**|  |

### Return type

**\Crossly\Buyer\Model\Listing\GetBuyerListingResaleValueResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getBuyerListingSubscribeOffer()`

```php
getBuyerListingSubscribeOffer($slug): \Crossly\Buyer\Model\Listing\GetBuyerListingSubscribeOfferResponse
```

The subscribe & save discount and intervals on a listing; null when the seller has none.

### Example

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
$slug = 'slug_example'; // string

try {
    $result = $apiInstance->getBuyerListingSubscribeOffer($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->getBuyerListingSubscribeOffer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **slug** | **string**|  |

### Return type

**\Crossly\Buyer\Model\Listing\GetBuyerListingSubscribeOfferResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getBuyerListingTryOn()`

```php
getBuyerListingTryOn($slug): \Crossly\Buyer\Model\Listing\GetBuyerListingTryOnResponse
```

Whether an AI try-on is offered for this listing (a wearable with a photo) and whether the image model is configured.

### Example

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
$slug = 'slug_example'; // string

try {
    $result = $apiInstance->getBuyerListingTryOn($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->getBuyerListingTryOn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **slug** | **string**|  |

### Return type

**\Crossly\Buyer\Model\Listing\GetBuyerListingTryOnResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getBuyerLiveStreamAuction()`

```php
getBuyerLiveStreamAuction($id): \Crossly\Buyer\Model\Live\GetBuyerLiveStreamAuctionResponse
```

The auction running on a live stream right now, if any. Bid on it by its `slug` at POST /v1/buyer/auctions/:slug/bids.

### Example

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
$id = 'id_example'; // string

try {
    $result = $apiInstance->getBuyerLiveStreamAuction($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->getBuyerLiveStreamAuction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Buyer\Model\Live\GetBuyerLiveStreamAuctionResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getBuyerMarketPurchaseOption()`

```php
getBuyerMarketPurchaseOption(): \Crossly\Buyer\Model\Common\GetBuyerMarketPurchaseOptionResponse
```

Before you bid or buy: whether the lowest ask is vault stock (keep it vaulted, or pay fastShipCents to rush it), and the grading runs a raw card can go straight to (pass gradeWith on the bid).

### Example

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

try {
    $result = $apiInstance->getBuyerMarketPurchaseOption();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->getBuyerMarketPurchaseOption: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Buyer\Model\Common\GetBuyerMarketPurchaseOptionResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getBuyerOrderEligibility()`

```php
getBuyerOrderEligibility($id): \Crossly\Buyer\Model\Order\GetBuyerOrderEligibilityResponse
```

What you can do with one order right now — cancel, confirm receipt, report not received, leave feedback.

`inr.eligible` says whether an item-not-received case can be opened; when it cannot, `inr.reason` says why and `inr.opensAt` when it will. The same rules the order page and the action routes enforce.

### Example

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
$id = 'id_example'; // string | The id.

try {
    $result = $apiInstance->getBuyerOrderEligibility($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->getBuyerOrderEligibility: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id. |

### Return type

**\Crossly\Buyer\Model\Order\GetBuyerOrderEligibilityResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getBuyerOrderExport()`

```php
getBuyerOrderExport($from, $to): \Crossly\Buyer\Model\Order\GetBuyerOrderExportResponse
```

Your order history as CSV text (up to 5,000 orders).

The same CSV the shop downloads, returned as a string in `data.csv` so a program or agent can read it without a file download. Money columns are dollars, as a spreadsheet expects.

### Example

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
$from = 'from_example'; // string | First day to include, YYYY-MM-DD.
$to = 'to_example'; // string | Last day to include, YYYY-MM-DD (inclusive).

try {
    $result = $apiInstance->getBuyerOrderExport($from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->getBuyerOrderExport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | **string**| First day to include, YYYY-MM-DD. | [optional]
 **to** | **string**| Last day to include, YYYY-MM-DD (inclusive). | [optional]

### Return type

**\Crossly\Buyer\Model\Order\GetBuyerOrderExportResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getBuyerOrderPriceProtection()`

```php
getBuyerOrderPriceProtection($id): \Crossly\Buyer\Model\Order\GetBuyerOrderPriceProtectionResponse
```

Price protection on one order: if the item gets cheaper before `until`, the difference is credited to your Bucks automatically. `creditedCents` is what it has paid so far.

### Example

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
$id = 'id_example'; // string

try {
    $result = $apiInstance->getBuyerOrderPriceProtection($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->getBuyerOrderPriceProtection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Buyer\Model\Order\GetBuyerOrderPriceProtectionResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getBuyerPack()`

```php
getBuyerPack($slug): \Crossly\Buyer\Model\Pack\GetBuyerPackResponse
```

One pack: tiers and odds, items left, expected value, the chase items still in it.

### Example

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
$slug = 'slug_example'; // string

try {
    $result = $apiInstance->getBuyerPack($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->getBuyerPack: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **slug** | **string**|  |

### Return type

**\Crossly\Buyer\Model\Pack\GetBuyerPackResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getBuyerPackFairness()`

```php
getBuyerPackFairness(): \Crossly\Buyer\Model\Pack\GetBuyerPackFairnessResponse
```

Your provably-fair seeds: the active server-seed commitment (sha256), your client seed and nonce, and every retired seed in full so past openings can be re-run.

### Example

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

try {
    $result = $apiInstance->getBuyerPackFairness();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->getBuyerPackFairness: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Buyer\Model\Pack\GetBuyerPackFairnessResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getBuyerParty()`

```php
getBuyerParty($slug): \Crossly\Buyer\Model\Common\GetBuyerPartyResponse
```

One shopping party.

### Example

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
$slug = 'slug_example'; // string

try {
    $result = $apiInstance->getBuyerParty($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->getBuyerParty: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **slug** | **string**|  |

### Return type

**\Crossly\Buyer\Model\Common\GetBuyerPartyResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getBuyerPassport()`

```php
getBuyerPassport($code): \Crossly\Buyer\Model\Common\GetBuyerPassportResponse
```

What a product passport tag opens: the item, whether it was authenticated, how many owners on Crossly and since when — never who or for how much.

### Example

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
$code = 'code_example'; // string

try {
    $result = $apiInstance->getBuyerPassport($code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->getBuyerPassport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **code** | **string**|  |

### Return type

**\Crossly\Buyer\Model\Common\GetBuyerPassportResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getBuyerPreference()`

```php
getBuyerPreference(): \Crossly\Buyer\Model\Common\GetBuyerPreferenceResponse
```

The shopping profile derived from that activity.

Derived, never declared — there is no preferences form anywhere. `matchRate` is the share of this person's searches Crossly could answer; a low number is an inventory problem, not a personalisation one, which is why it is here.

### Example

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

try {
    $result = $apiInstance->getBuyerPreference();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->getBuyerPreference: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Buyer\Model\Common\GetBuyerPreferenceResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getBuyerPriceGuide()`

```php
getBuyerPriceGuide(): \Crossly\Buyer\Model\Common\GetBuyerPriceGuideResponse
```

What matching items actually sold for on Crossly: median, quartiles, by month, and recent sales. Needs q, brand or category.

### Example

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

try {
    $result = $apiInstance->getBuyerPriceGuide();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->getBuyerPriceGuide: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Buyer\Model\Common\GetBuyerPriceGuideResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getBuyerProfile()`

```php
getBuyerProfile(): \Crossly\Buyer\Model\Common\GetBuyerProfileResponse
```

Your Crossly shopping profile — name, email, saved address, Bucks balance.

### Example

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

try {
    $result = $apiInstance->getBuyerProfile();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->getBuyerProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Buyer\Model\Common\GetBuyerProfileResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getBuyerPurchaseDelivery()`

```php
getBuyerPurchaseDelivery($id): \Crossly\Buyer\Model\Purchase\GetBuyerPurchaseDeliveryResponse
```

Where a purchase is going when not to your door: the pickup point (with its release code) or its ship-together consolidation.

### Example

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
$id = 'id_example'; // string

try {
    $result = $apiInstance->getBuyerPurchaseDelivery($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->getBuyerPurchaseDelivery: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Buyer\Model\Purchase\GetBuyerPurchaseDeliveryResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getBuyerPurchaseLiveMoment()`

```php
getBuyerPurchaseLiveMoment($id): \Crossly\Buyer\Model\Purchase\GetBuyerPurchaseLiveMomentResponse
```

The live show a purchase was bought in, with the offset (seconds) into its replay where it sold. null when it was not bought in a show.

### Example

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
$id = 'id_example'; // string

try {
    $result = $apiInstance->getBuyerPurchaseLiveMoment($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->getBuyerPurchaseLiveMoment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Buyer\Model\Purchase\GetBuyerPurchaseLiveMomentResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getBuyerPurchaseReturn()`

```php
getBuyerPurchaseReturn($id): \Crossly\Buyer\Model\Purchase\GetBuyerPurchaseReturnResponse
```

What a return would refund for each reason, by when, and any return already open.

### Example

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
$id = 'id_example'; // string

try {
    $result = $apiInstance->getBuyerPurchaseReturn($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->getBuyerPurchaseReturn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Buyer\Model\Purchase\GetBuyerPurchaseReturnResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getBuyerPurchaseStory()`

```php
getBuyerPurchaseStory($id): \Crossly\Buyer\Model\Purchase\GetBuyerPurchaseStoryResponse
```

Your owner story on a purchase, passed on to the next owner if you resell it.

### Example

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
$id = 'id_example'; // string

try {
    $result = $apiInstance->getBuyerPurchaseStory($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->getBuyerPurchaseStory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Buyer\Model\Purchase\GetBuyerPurchaseStoryResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getBuyerRegistry()`

```php
getBuyerRegistry($id): \Crossly\Buyer\Model\Common\BuyerRegistryResponse
```

One of your registries: items with how many are wanted and bought.

### Example

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
$id = 'id_example'; // string

try {
    $result = $apiInstance->getBuyerRegistry($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->getBuyerRegistry: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Buyer\Model\Common\BuyerRegistryResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getBuyerRegistryByToken()`

```php
getBuyerRegistryByToken($token): \Crossly\Buyer\Model\Common\BuyerRegistryResponse
```

A registry as a guest sees it: items, how many are still wanted, and whether it can ship. Never the address.

### Example

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
$token = 'token_example'; // string

try {
    $result = $apiInstance->getBuyerRegistryByToken($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->getBuyerRegistryByToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**|  |

### Return type

**\Crossly\Buyer\Model\Common\BuyerRegistryResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getBuyerRentalEligibility()`

```php
getBuyerRentalEligibility(): \Crossly\Buyer\Model\Rental\GetBuyerRentalEligibilityResponse
```

Can you rent right now: ID-verified (a photo ID and a matching selfie, once), the verified name rentals ship to, and your standing (one rental at a time until your first comes back; none after one that never did).

### Example

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

try {
    $result = $apiInstance->getBuyerRentalEligibility();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->getBuyerRentalEligibility: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Buyer\Model\Rental\GetBuyerRentalEligibilityResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getBuyerSellerClub()`

```php
getBuyerSellerClub($seller_user_id): \Crossly\Buyer\Model\Seller\GetBuyerSellerClubResponse
```

A seller’s loyalty club: its tiers (spend threshold, discount, perks) and your standing. null when the seller has none.

### Example

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
$seller_user_id = 'seller_user_id_example'; // string

try {
    $result = $apiInstance->getBuyerSellerClub($seller_user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->getBuyerSellerClub: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **seller_user_id** | **string**|  |

### Return type

**\Crossly\Buyer\Model\Seller\GetBuyerSellerClubResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getBuyerSellerTrust()`

```php
getBuyerSellerTrust($username): \Crossly\Buyer\Model\Seller\GetBuyerSellerTrustResponse
```

Seller at a glance: member since, completed sales, independent rating, typical handling time, dispute rate, trust tier, badges — and the plain sentences the profile shows.

### Example

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
$username = 'username_example'; // string

try {
    $result = $apiInstance->getBuyerSellerTrust($username);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->getBuyerSellerTrust: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **username** | **string**|  |

### Return type

**\Crossly\Buyer\Model\Seller\GetBuyerSellerTrustResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getBuyerTogether()`

```php
getBuyerTogether($code): \Crossly\Buyer\Model\Together\GetBuyerTogetherResponse
```

A shop-together room: members, the board with votes, and chat.

### Example

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
$code = 'code_example'; // string

try {
    $result = $apiInstance->getBuyerTogether($code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->getBuyerTogether: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **code** | **string**|  |

### Return type

**\Crossly\Buyer\Model\Together\GetBuyerTogetherResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getBuyerVaultMarketHistory()`

```php
getBuyerVaultMarketHistory(): \Crossly\Buyer\Model\Vault\GetBuyerVaultMarketHistoryResponse
```

Your Vault Markets value by day at the marks (oldest first, today live) over `days` (default 90), and today’s change against yesterday’s close.

### Example

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

try {
    $result = $apiInstance->getBuyerVaultMarketHistory();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->getBuyerVaultMarketHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Buyer\Model\Vault\GetBuyerVaultMarketHistoryResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getBuyerVaultMarketIndex()`

```php
getBuyerVaultMarketIndex($slug): \Crossly\Buyer\Model\Vault\GetBuyerVaultMarketIndexResponse
```

One index with its published daily closes (oldest first, `days` default 365) and its level now.

### Example

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
$slug = 'slug_example'; // string

try {
    $result = $apiInstance->getBuyerVaultMarketIndex($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->getBuyerVaultMarketIndex: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **slug** | **string**|  |

### Return type

**\Crossly\Buyer\Model\Vault\GetBuyerVaultMarketIndexResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getBuyerVaultMarketInstantExit()`

```php
getBuyerVaultMarketInstantExit($id): \Crossly\Buyer\Model\Vault\GetBuyerVaultMarketInstantExitResponse
```

The Instant Exit quote for one vault unit you hold, and whether it can be sold now.

### Example

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
$id = 'id_example'; // string

try {
    $result = $apiInstance->getBuyerVaultMarketInstantExit($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->getBuyerVaultMarketInstantExit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Buyer\Model\Vault\GetBuyerVaultMarketInstantExitResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getBuyerVaultMarketWorth()`

```php
getBuyerVaultMarketWorth(): \Crossly\Buyer\Model\Vault\GetBuyerVaultMarketWorthResponse
```

What your vault is worth now: value at the market prices (marks come only from trades) split into reliable and indicative marks, cost and P&L, today’s change, and an estimate of what the units free to sell would fetch from the bids resting on the book now. Read only.

### Example

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

try {
    $result = $apiInstance->getBuyerVaultMarketWorth();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->getBuyerVaultMarketWorth: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Buyer\Model\Vault\GetBuyerVaultMarketWorthResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listBuyerActivity()`

```php
listBuyerActivity(): \Crossly\Buyer\Model\Activity\ListBuyerActivityResponse
```

What this buyer has compared lately.

Newest first, and only as far back as the retention window — the link between a person and a comparison is dropped after 180 days, so this thins out rather than growing forever.

### Example

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

try {
    $result = $apiInstance->listBuyerActivity();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->listBuyerActivity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Buyer\Model\Activity\ListBuyerActivityResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listBuyerAuctionBids()`

```php
listBuyerAuctionBids($slug): \Crossly\Buyer\Model\Auction\ListBuyerAuctionBidsResponse
```

An auction’s bid history, highest first, bidders anonymised.

### Example

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
$slug = 'slug_example'; // string | The auction listing slug.

try {
    $result = $apiInstance->listBuyerAuctionBids($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->listBuyerAuctionBids: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **slug** | **string**| The auction listing slug. |

### Return type

**\Crossly\Buyer\Model\Auction\ListBuyerAuctionBidsResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listBuyerAuctions()`

```php
listBuyerAuctions($tab): \Crossly\Buyer\Model\Auction\ListBuyerAuctionsResponse
```

Auctions you have bid in — bidding, won or lost (last 100).

### Example

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
$tab = 'bidding'; // string | bidding = still running; won = you are the winner; lost = ended, someone else won.

try {
    $result = $apiInstance->listBuyerAuctions($tab);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->listBuyerAuctions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tab** | **string**| bidding &#x3D; still running; won &#x3D; you are the winner; lost &#x3D; ended, someone else won. | [optional] [default to &#39;bidding&#39;]

### Return type

**\Crossly\Buyer\Model\Auction\ListBuyerAuctionsResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listBuyerBoards()`

```php
listBuyerBoards(): \Crossly\Buyer\Model\Common\ListBuyerBoardsResponse
```

Your outfit boards: collages of listings, each with a share link.

### Example

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

try {
    $result = $apiInstance->listBuyerBoards();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->listBuyerBoards: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Buyer\Model\Common\ListBuyerBoardsResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listBuyerBreaks()`

```php
listBuyerBreaks(): \Crossly\Buyer\Model\Common\BuyerResponse3
```

Card-break spots you hold or bought, with what each pulled.

### Example

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

try {
    $result = $apiInstance->listBuyerBreaks();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->listBuyerBreaks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Buyer\Model\Common\BuyerResponse3**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listBuyerBuybacks()`

```php
listBuyerBuybacks(): \Crossly\Buyer\Model\Common\BuyerResponse3
```

Your buyback guarantees and requests.

### Example

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

try {
    $result = $apiInstance->listBuyerBuybacks();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->listBuyerBuybacks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Buyer\Model\Common\BuyerResponse3**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listBuyerCart()`

```php
listBuyerCart(): \Crossly\Buyer\Model\Cart\ListBuyerCartResponse
```

What is in your Crossly cart.

Line items with the price captured when each was added. This is NOT a quote — shipping, tax and any discounts are computed at checkout against a delivery address, and the sum of these lines is not what you will be charged.

### Example

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

try {
    $result = $apiInstance->listBuyerCart();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->listBuyerCart: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Buyer\Model\Cart\ListBuyerCartResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listBuyerCartSaved()`

```php
listBuyerCartSaved(): \Crossly\Buyer\Model\Common\BuyerCartResponse
```

Items you saved for later out of your cart (last 200).

### Example

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

try {
    $result = $apiInstance->listBuyerCartSaved();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->listBuyerCartSaved: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Buyer\Model\Common\BuyerCartResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listBuyerCases()`

```php
listBuyerCases($status): \Crossly\Buyer\Model\Cases\ListBuyerCasesResponse
```

Resolution center — every case you opened (returns, not received, problems).

`yourTurn: true` means the case is waiting on you. `meta.counts` covers every case, not just this status.

### Example

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
$status = 'open'; // string | open = still being worked; closed = resolved or withdrawn; all = both.

try {
    $result = $apiInstance->listBuyerCases($status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->listBuyerCases: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **status** | **string**| open &#x3D; still being worked; closed &#x3D; resolved or withdrawn; all &#x3D; both. | [optional] [default to &#39;open&#39;]

### Return type

**\Crossly\Buyer\Model\Cases\ListBuyerCasesResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listBuyerCashback()`

```php
listBuyerCashback($status, $page, $limit): \Crossly\Buyer\Model\Common\ListBuyerCashbackResponse
```

Your Scout cashback — pending, confirmed, paid.

Newest first. `pending` means an order was reported and the retailer's return window has not closed; nothing is paid until it does. `expired` means a click was never reported as converting, which is the ordinary outcome for most clicks.

### Example

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
$status = 'status_example'; // string
$page = 1; // int
$limit = 25; // int

try {
    $result = $apiInstance->listBuyerCashback($status, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->listBuyerCashback: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **status** | **string**|  | [optional]
 **page** | **int**|  | [optional] [default to 1]
 **limit** | **int**|  | [optional] [default to 25]

### Return type

**\Crossly\Buyer\Model\Common\ListBuyerCashbackResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listBuyerCatalogListingVideos()`

```php
listBuyerCatalogListingVideos($slug): \Crossly\Buyer\Model\Catalog\ListBuyerCatalogListingVideosResponse
```

Videos the seller recorded for this item on request, newest first, with the question each one answers.

### Example

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
$slug = 'slug_example'; // string

try {
    $result = $apiInstance->listBuyerCatalogListingVideos($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->listBuyerCatalogListingVideos: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **slug** | **string**|  |

### Return type

**\Crossly\Buyer\Model\Catalog\ListBuyerCatalogListingVideosResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listBuyerClubs()`

```php
listBuyerClubs(): \Crossly\Buyer\Model\Common\ListBuyerClubsResponse
```

Sellers’ loyalty clubs you belong to: your spend with each, your tier and its discount, and the next tier.

### Example

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

try {
    $result = $apiInstance->listBuyerClubs();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->listBuyerClubs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Buyer\Model\Common\ListBuyerClubsResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listBuyerCollectionSets()`

```php
listBuyerCollectionSets(): \Crossly\Buyer\Model\Common\BuyerResponse3
```

Sets you are collecting — a catalogue brand + model you own at least two pieces of — with owned / total and percent complete, most complete first; and whether you show on set leaderboards.

### Example

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

try {
    $result = $apiInstance->listBuyerCollectionSets();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->listBuyerCollectionSets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Buyer\Model\Common\BuyerResponse3**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listBuyerConsolidations()`

```php
listBuyerConsolidations(): \Crossly\Buyer\Model\Common\BuyerResponse3
```

Your ship-together orders: parcels at the hub, and the one box out.

### Example

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

try {
    $result = $apiInstance->listBuyerConsolidations();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->listBuyerConsolidations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Buyer\Model\Common\BuyerResponse3**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listBuyerConversationGuests()`

```php
listBuyerConversationGuests($id): \Crossly\Buyer\Model\Wishlist\ListBuyerWishlistMembersResponse
```

Guests in a chat.

### Example

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
$id = 'id_example'; // string

try {
    $result = $apiInstance->listBuyerConversationGuests($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->listBuyerConversationGuests: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Buyer\Model\Wishlist\ListBuyerWishlistMembersResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listBuyerFeedback()`

```php
listBuyerFeedback(): \Crossly\Buyer\Model\Feedback\ListBuyerFeedbackResponse
```

Feedback you have left sellers, newest first — with the ids you revise by.

### Example

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

try {
    $result = $apiInstance->listBuyerFeedback();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->listBuyerFeedback: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Buyer\Model\Feedback\ListBuyerFeedbackResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listBuyerFeedbackPending()`

```php
listBuyerFeedbackPending(): \Crossly\Buyer\Model\Feedback\ListBuyerFeedbackPendingResponse
```

Orders from the last 60 days that are on their way or arrived and still need your feedback.

### Example

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

try {
    $result = $apiInstance->listBuyerFeedbackPending();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->listBuyerFeedbackPending: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Buyer\Model\Feedback\ListBuyerFeedbackPendingResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listBuyerFitRefs()`

```php
listBuyerFitRefs(): \Crossly\Buyer\Model\Common\BuyerResponse3
```

Your saved reference garments for fit comparison.

### Example

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

try {
    $result = $apiInstance->listBuyerFitRefs();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->listBuyerFitRefs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Buyer\Model\Common\BuyerResponse3**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listBuyerFollowingSellers()`

```php
listBuyerFollowingSellers(): \Crossly\Buyer\Model\Common\ListBuyerFollowingSellersResponse
```

Sellers you follow, with how many new listings each has since you last looked.

### Example

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

try {
    $result = $apiInstance->listBuyerFollowingSellers();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->listBuyerFollowingSellers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Buyer\Model\Common\ListBuyerFollowingSellersResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listBuyerGiftCardCredit()`

```php
listBuyerGiftCardCredit(): \Crossly\Buyer\Model\Gift\ListBuyerGiftCardCreditResponse
```

Gift card credit on your account, and when it expires.

One row per gift card you redeemed. `meta.giftCreditCents` is the unspent, unexpired gift credit in your Crossly Bucks balance; `meta.nextExpiresAt` is the soonest date any of it lapses. Spending at checkout uses gift credit first.

### Example

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

try {
    $result = $apiInstance->listBuyerGiftCardCredit();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->listBuyerGiftCardCredit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Buyer\Model\Gift\ListBuyerGiftCardCreditResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listBuyerGiftCards()`

```php
listBuyerGiftCards(): \Crossly\Buyer\Model\Gift\ListBuyerGiftCardsResponse
```

Gift cards you bought, newest first.

Status, recipient and delivery for each card you paid for. The code is masked unless you sent the card to your own email address. Abandoned (unpaid) checkouts are omitted.

### Example

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

try {
    $result = $apiInstance->listBuyerGiftCards();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->listBuyerGiftCards: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Buyer\Model\Gift\ListBuyerGiftCardsResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listBuyerGiftFinder()`

```php
listBuyerGiftFinder(): \Crossly\Buyer\Model\Gift\ListBuyerGiftFinderResponse
```

Live listings for a recipient, interest and budget.

### Example

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

try {
    $result = $apiInstance->listBuyerGiftFinder();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->listBuyerGiftFinder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Buyer\Model\Gift\ListBuyerGiftFinderResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listBuyerGiftSent()`

```php
listBuyerGiftSent(): \Crossly\Buyer\Model\Gift\ListBuyerGiftSentResponse
```

Items you sent as gifts: whether the teaser went out, whether it arrived and was opened, and any thank-you. Send one with `gift` on checkout.

### Example

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

try {
    $result = $apiInstance->listBuyerGiftSent();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->listBuyerGiftSent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Buyer\Model\Gift\ListBuyerGiftSentResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listBuyerHotspots()`

```php
listBuyerHotspots(): \Crossly\Buyer\Model\Common\ListBuyerHotspotsResponse
```

Shop-the-look tags on a story or lookbook photo: each tagged listing and where it sits on the image (x, y as fractions).

### Example

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

try {
    $result = $apiInstance->listBuyerHotspots();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->listBuyerHotspots: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Buyer\Model\Common\ListBuyerHotspotsResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listBuyerHunts()`

```php
listBuyerHunts(): \Crossly\Buyer\Model\Common\ListBuyerHuntsResponse
```

Your buyer-agent hunts and what they did.

### Example

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

try {
    $result = $apiInstance->listBuyerHunts();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->listBuyerHunts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Buyer\Model\Common\ListBuyerHuntsResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listBuyerInstantOffers()`

```php
listBuyerInstantOffers(): \Crossly\Buyer\Model\Common\BuyerResponse3
```

Your instant offers: live quotes, accepted ones awaiting a label, approved ones (with the prepaid label) and paid ones.

### Example

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

try {
    $result = $apiInstance->listBuyerInstantOffers();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->listBuyerInstantOffers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Buyer\Model\Common\BuyerResponse3**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listBuyerLayaways()`

```php
listBuyerLayaways(): \Crossly\Buyer\Model\Common\ListBuyerLayawaysResponse
```

Your layaways: price, paid so far, what is left, and the installment schedule. Put an item on layaway at checkout with layawayItemIds.

### Example

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

try {
    $result = $apiInstance->listBuyerLayaways();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->listBuyerLayaways: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Buyer\Model\Common\ListBuyerLayawaysResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listBuyerListingQuickQuestions()`

```php
listBuyerListingQuickQuestions($slug): \Crossly\Buyer\Model\Listing\ListBuyerListingQuickQuestionsResponse
```

One-tap questions this listing supports; send one as `quick` on a message.

### Example

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
$slug = 'slug_example'; // string

try {
    $result = $apiInstance->listBuyerListingQuickQuestions($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->listBuyerListingQuickQuestions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **slug** | **string**|  |

### Return type

**\Crossly\Buyer\Model\Listing\ListBuyerListingQuickQuestionsResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listBuyerListingSellerReviews()`

```php
listBuyerListingSellerReviews($slug): \Crossly\Buyer\Model\Listing\ListBuyerListingSellerReviewsResponse
```

The seller’s public reviews: summary, text, photos, replies.

### Example

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
$slug = 'slug_example'; // string

try {
    $result = $apiInstance->listBuyerListingSellerReviews($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->listBuyerListingSellerReviews: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **slug** | **string**|  |

### Return type

**\Crossly\Buyer\Model\Listing\ListBuyerListingSellerReviewsResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listBuyerLiveShipments()`

```php
listBuyerLiveShipments(): \Crossly\Buyer\Model\Live\ListBuyerLiveShipmentsResponse
```

Your one-box-per-show shipments: every order won in a show ships together, and postage is charged once (the rest refunded when it ships).

### Example

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

try {
    $result = $apiInstance->listBuyerLiveShipments();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->listBuyerLiveShipments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Buyer\Model\Live\ListBuyerLiveShipmentsResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listBuyerLiveStreamLineup()`

```php
listBuyerLiveStreamLineup($id): \Crossly\Buyer\Model\Live\ListBuyerLiveStreamLineupResponse
```

What a live show will sell, in order: each item, its price, and whether it is still available.

### Example

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
$id = 'id_example'; // string

try {
    $result = $apiInstance->listBuyerLiveStreamLineup($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->listBuyerLiveStreamLineup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Buyer\Model\Live\ListBuyerLiveStreamLineupResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listBuyerMarketBids()`

```php
listBuyerMarketBids(): \Crossly\Buyer\Model\Common\BuyerResponse3
```

Your resting market bids.

### Example

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

try {
    $result = $apiInstance->listBuyerMarketBids();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->listBuyerMarketBids: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Buyer\Model\Common\BuyerResponse3**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listBuyerMarketWatches()`

```php
listBuyerMarketWatches(): \Crossly\Buyer\Model\Common\BuyerResponse3
```

Market variants you watch, with the price you are waiting for.

### Example

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

try {
    $result = $apiInstance->listBuyerMarketWatches();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->listBuyerMarketWatches: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Buyer\Model\Common\BuyerResponse3**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listBuyerOffers()`

```php
listBuyerOffers($awaiting_buyer): \Crossly\Buyer\Model\Offer\ListBuyerOffersResponse
```

Offers you have made, newest first (last 100).

`awaitingBuyer: true` is a seller counter waiting on you — answer it with POST /v1/buyer/offers/{id}/respond. `redeemable: true` is an accepted offer you can pay for on Crossly. Amounts are integer cents.

### Example

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
$awaiting_buyer = 'awaiting_buyer_example'; // string | true returns only seller counters waiting on you.

try {
    $result = $apiInstance->listBuyerOffers($awaiting_buyer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->listBuyerOffers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **awaiting_buyer** | **string**| true returns only seller counters waiting on you. | [optional]

### Return type

**\Crossly\Buyer\Model\Offer\ListBuyerOffersResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listBuyerOrders()`

```php
listBuyerOrders($page, $limit): \Crossly\Buyer\Model\Order\ListBuyerOrdersResponse
```

What you have bought on Crossly, newest first.

### Example

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
$page = 1; // int
$limit = 25; // int

try {
    $result = $apiInstance->listBuyerOrders($page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->listBuyerOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**|  | [optional] [default to 1]
 **limit** | **int**|  | [optional] [default to 25]

### Return type

**\Crossly\Buyer\Model\Order\ListBuyerOrdersResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listBuyerPackOpenings()`

```php
listBuyerPackOpenings(): \Crossly\Buyer\Model\Pack\ListBuyerPackOpeningsResponse
```

Your pulls: what you got, its value, sell-back status, and the fairness proof for each (the server seed once rotated).

### Example

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

try {
    $result = $apiInstance->listBuyerPackOpenings();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->listBuyerPackOpenings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Buyer\Model\Pack\ListBuyerPackOpeningsResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listBuyerPacks()`

```php
listBuyerPacks(): \Crossly\Buyer\Model\Pack\ListBuyerPacksResponse
```

Packs you can open: price, every tier with its published odds, what is left in it and its value range, and the expected value of one opening.

### Example

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

try {
    $result = $apiInstance->listBuyerPacks();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->listBuyerPacks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Buyer\Model\Pack\ListBuyerPacksResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listBuyerParties()`

```php
listBuyerParties(): \Crossly\Buyer\Model\Common\ListBuyerPartiesResponse
```

Themed shopping parties, live and upcoming.

### Example

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

try {
    $result = $apiInstance->listBuyerParties();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->listBuyerParties: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Buyer\Model\Common\ListBuyerPartiesResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listBuyerPartyListings()`

```php
listBuyerPartyListings($slug): \Crossly\Buyer\Model\Common\BuyerResponse3
```

Listings shared to a party, featured first.

### Example

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
$slug = 'slug_example'; // string

try {
    $result = $apiInstance->listBuyerPartyListings($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->listBuyerPartyListings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **slug** | **string**|  |

### Return type

**\Crossly\Buyer\Model\Common\BuyerResponse3**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listBuyerPickupPoints()`

```php
listBuyerPickupPoints(): \Crossly\Buyer\Model\Common\BuyerResponse3
```

Carrier pickup points (UPS Access Point / FedEx Hold at Location) near an address; pass one as `pickupPoint` to POST /v1/buyer/checkout.

### Example

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

try {
    $result = $apiInstance->listBuyerPickupPoints();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->listBuyerPickupPoints: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Buyer\Model\Common\BuyerResponse3**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listBuyerProtectionPlans()`

```php
listBuyerProtectionPlans(): \Crossly\Buyer\Model\Common\ListBuyerProtectionPlansResponse
```

Your protection plans (bought at checkout with `protection`): status, term, coverage, contract id, and any refund.

### Example

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

try {
    $result = $apiInstance->listBuyerProtectionPlans();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->listBuyerProtectionPlans: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Buyer\Model\Common\ListBuyerProtectionPlansResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listBuyerRegistries()`

```php
listBuyerRegistries(): \Crossly\Buyer\Model\Common\ListBuyerRegistriesResponse
```

Your gift registries.

### Example

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

try {
    $result = $apiInstance->listBuyerRegistries();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->listBuyerRegistries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Buyer\Model\Common\ListBuyerRegistriesResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listBuyerRegistryGifts()`

```php
listBuyerRegistryGifts($id): \Crossly\Buyer\Model\Registry\ListBuyerRegistryGiftsResponse
```

Your thank-you list: who bought what off the registry, and whether you have thanked them.

### Example

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
$id = 'id_example'; // string

try {
    $result = $apiInstance->listBuyerRegistryGifts($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->listBuyerRegistryGifts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Buyer\Model\Registry\ListBuyerRegistryGiftsResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listBuyerRegistrySearch()`

```php
listBuyerRegistrySearch(): \Crossly\Buyer\Model\Registry\ListBuyerRegistrySearchResponse
```

Find a registry by its name or the registrant’s name. Current and recent registries only.

### Example

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

try {
    $result = $apiInstance->listBuyerRegistrySearch();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->listBuyerRegistrySearch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Buyer\Model\Registry\ListBuyerRegistrySearchResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listBuyerRentals()`

```php
listBuyerRentals(): \Crossly\Buyer\Model\Rental\ListBuyerRentalsResponse
```

Your rentals: dates, status (reserved, out, returned, claimed, closed, cancelled), the return label, and what happened to the deposit.

### Example

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

try {
    $result = $apiInstance->listBuyerRentals();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->listBuyerRentals: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Buyer\Model\Rental\ListBuyerRentalsResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listBuyerSizeMemoryPrompts()`

```php
listBuyerSizeMemoryPrompts(): \Crossly\Buyer\Model\Common\ListBuyerSizeMemoryPromptsResponse
```

Delivered orders with a size that you haven’t said how they fit (the last 60 days).

### Example

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

try {
    $result = $apiInstance->listBuyerSizeMemoryPrompts();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->listBuyerSizeMemoryPrompts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Buyer\Model\Common\ListBuyerSizeMemoryPromptsResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listBuyerSizeMemorySizes()`

```php
listBuyerSizeMemorySizes(): \Crossly\Buyer\Model\Common\ListBuyerSizeMemorySizesResponse
```

The sizes learned from what you bought and kept, by kind of item (shoes, tops, bottoms, dresses, outerwear) and department.

### Example

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

try {
    $result = $apiInstance->listBuyerSizeMemorySizes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->listBuyerSizeMemorySizes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Buyer\Model\Common\ListBuyerSizeMemorySizesResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listBuyerSplits()`

```php
listBuyerSplits(): \Crossly\Buyer\Model\Common\BuyerResponse3
```

Purchases you split, with each share’s status.

### Example

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

try {
    $result = $apiInstance->listBuyerSplits();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->listBuyerSplits: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Buyer\Model\Common\BuyerResponse3**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listBuyerSubscriptions()`

```php
listBuyerSubscriptions(): \Crossly\Buyer\Model\Common\ListBuyerSubscriptionsResponse
```

Your subscribe & save standing orders.

### Example

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

try {
    $result = $apiInstance->listBuyerSubscriptions();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->listBuyerSubscriptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Buyer\Model\Common\ListBuyerSubscriptionsResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listBuyerTogether()`

```php
listBuyerTogether(): \Crossly\Buyer\Model\Together\ListBuyerTogetherResponse
```

Shop-together rooms you are in.

### Example

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

try {
    $result = $apiInstance->listBuyerTogether();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->listBuyerTogether: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Buyer\Model\Together\ListBuyerTogetherResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listBuyerTotalRequests()`

```php
listBuyerTotalRequests(): \Crossly\Buyer\Model\Total\ListBuyerTotalRequestsResponse
```

Your combined-shipping total requests, newest per seller.

A seller answers a request by quoting one shipping figure for every item of theirs in your cart. `matchesCart: false` means the cart changed since, so the quote will not apply at checkout.

### Example

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

try {
    $result = $apiInstance->listBuyerTotalRequests();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->listBuyerTotalRequests: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Buyer\Model\Total\ListBuyerTotalRequestsResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listBuyerTryOns()`

```php
listBuyerTryOns(): \Crossly\Buyer\Model\Common\ListBuyerTryOnsResponse
```

Your AI try-ons: the rendered images (labelled AI-generated wherever shown).

### Example

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

try {
    $result = $apiInstance->listBuyerTryOns();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->listBuyerTryOns: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Buyer\Model\Common\ListBuyerTryOnsResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listBuyerVault()`

```php
listBuyerVault(): \Crossly\Buyer\Model\Vault\ListBuyerVaultResponse
```

What you own in the Crossly vault: stored (authenticated, on a shelf), listed for sale, or on its way home — with the price to ship one home.

### Example

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

try {
    $result = $apiInstance->listBuyerVault();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->listBuyerVault: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Buyer\Model\Vault\ListBuyerVaultResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listBuyerVaultMarketHoldings()`

```php
listBuyerVaultMarketHoldings(): \Crossly\Buyer\Model\Vault\ListBuyerVaultMarketHoldingsResponse
```

Each unit you hold in the vault at its market price, with the mark’s quality (A or B reliable, C indicative, none), cost, P&L and where it stands (stored, listed, lent, pledged, at the grader); `meta` carries the totals and the units you have out on loan.

### Example

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

try {
    $result = $apiInstance->listBuyerVaultMarketHoldings();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->listBuyerVaultMarketHoldings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Buyer\Model\Vault\ListBuyerVaultMarketHoldingsResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listBuyerVaultMarketIndexes()`

```php
listBuyerVaultMarketIndexes(): \Crossly\Buyer\Model\Vault\ListBuyerVaultMarketIndexesResponse
```

Crossly indexes over vault book keys (category, brand, curated, composite, segment, and your own), each with its level now and change since the last daily close. Index levels are valued only from the book’s marks.

### Example

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

try {
    $result = $apiInstance->listBuyerVaultMarketIndexes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->listBuyerVaultMarketIndexes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Buyer\Model\Vault\ListBuyerVaultMarketIndexesResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listBuyerVaultMarketInstantExit()`

```php
listBuyerVaultMarketInstantExit(): \Crossly\Buyer\Model\Vault\ListBuyerVaultMarketInstantExitResponse
```

Instant Exit quotes for what you hold, one per book key: the best resting bid (yours left out), its share of the mark, the bid levels, units held and which are free to sell, and why a key cannot be sold instantly. A quote, not an order.

### Example

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

try {
    $result = $apiInstance->listBuyerVaultMarketInstantExit();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->listBuyerVaultMarketInstantExit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Buyer\Model\Vault\ListBuyerVaultMarketInstantExitResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listBuyerVaultMarketWatchlist()`

```php
listBuyerVaultMarketWatchlist(): \Crossly\Buyer\Model\Vault\ListBuyerVaultMarketWatchlistResponse
```

The book keys you watch, with mark and its quality, 24 h and 7 d change, and the last 30 daily marks.

### Example

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

try {
    $result = $apiInstance->listBuyerVaultMarketWatchlist();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->listBuyerVaultMarketWatchlist: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Buyer\Model\Vault\ListBuyerVaultMarketWatchlistResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listBuyerVideoRequests()`

```php
listBuyerVideoRequests(): \Crossly\Buyer\Model\Common\ListBuyerVideoRequestsResponse
```

Your video requests and their answers.

### Example

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

try {
    $result = $apiInstance->listBuyerVideoRequests();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->listBuyerVideoRequests: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Buyer\Model\Common\ListBuyerVideoRequestsResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listBuyerWishlistItems()`

```php
listBuyerWishlistItems($id): \Crossly\Buyer\Model\Wishlist\ListBuyerWishlistItemsResponse
```

What is on one wishlist.

### Example

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
$id = 'id_example'; // string

try {
    $result = $apiInstance->listBuyerWishlistItems($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->listBuyerWishlistItems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Buyer\Model\Wishlist\ListBuyerWishlistItemsResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listBuyerWishlistMembers()`

```php
listBuyerWishlistMembers($id): \Crossly\Buyer\Model\Wishlist\ListBuyerWishlistMembersResponse
```

Co-editors of a shared wishlist.

### Example

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
$id = 'id_example'; // string

try {
    $result = $apiInstance->listBuyerWishlistMembers($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->listBuyerWishlistMembers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Buyer\Model\Wishlist\ListBuyerWishlistMembersResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listBuyerWishlists()`

```php
listBuyerWishlists(): \Crossly\Buyer\Model\Wishlist\ListBuyerWishlistsResponse
```

Your wishlists.

### Example

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

try {
    $result = $apiInstance->listBuyerWishlists();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->listBuyerWishlists: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Buyer\Model\Wishlist\ListBuyerWishlistsResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateBuyerBoard()`

```php
updateBuyerBoard($id): \Crossly\Buyer\Model\Common\BuyerResponse
```

Rename a board, change its description, or make it public / private.

### Example

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
$id = 'id_example'; // string

try {
    $result = $apiInstance->updateBuyerBoard($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->updateBuyerBoard: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Buyer\Model\Common\BuyerResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateBuyerBoardLayout()`

```php
updateBuyerBoardLayout($id): \Crossly\Buyer\Model\Common\BuyerBoardResponse
```

Replace a board’s layout: items by platform listing id or slug, with x, y, w (0–1) and z. At most 40.

### Example

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
$id = 'id_example'; // string

try {
    $result = $apiInstance->updateBuyerBoardLayout($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->updateBuyerBoardLayout: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Buyer\Model\Common\BuyerBoardResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateBuyerCollectionSetLeaderboard()`

```php
updateBuyerCollectionSetLeaderboard(): \Crossly\Buyer\Model\Collection\UpdateBuyerCollectionSetLeaderboardResponse
```

Show or hide yourself (by your public handle) on set leaderboards.

### Example

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

try {
    $result = $apiInstance->updateBuyerCollectionSetLeaderboard();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->updateBuyerCollectionSetLeaderboard: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Buyer\Model\Collection\UpdateBuyerCollectionSetLeaderboardResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateBuyerFeedback()`

```php
updateBuyerFeedback($id, $update_buyer_feedback_request): \Crossly\Buyer\Model\Common\BuyerResponse
```

Revise feedback you left, within 60 days.

Replaces the stars and comment; detailed ratings you omit stay as they were.

### Example

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
$id = 'id_example'; // string | The id.
$update_buyer_feedback_request = new \Crossly\Buyer\Model\Feedback\UpdateBuyerFeedbackRequest(); // \Crossly\Buyer\Model\Feedback\UpdateBuyerFeedbackRequest

try {
    $result = $apiInstance->updateBuyerFeedback($id, $update_buyer_feedback_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->updateBuyerFeedback: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id. |
 **update_buyer_feedback_request** | **\Crossly\Buyer\Model\Feedback\UpdateBuyerFeedbackRequest**|  |

### Return type

**\Crossly\Buyer\Model\Common\BuyerResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateBuyerHunt()`

```php
updateBuyerHunt($id): \Crossly\Buyer\Model\Common\BuyerResponse
```

Pause, resume or stop a hunt.

### Example

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
$id = 'id_example'; // string

try {
    $result = $apiInstance->updateBuyerHunt($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->updateBuyerHunt: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Buyer\Model\Common\BuyerResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateBuyerPurchaseStory()`

```php
updateBuyerPurchaseStory($id): \Crossly\Buyer\Model\Common\BuyerResponse
```

Write your owner story (280 characters); it travels with the item if you resell it.

### Example

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
$id = 'id_example'; // string

try {
    $result = $apiInstance->updateBuyerPurchaseStory($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->updateBuyerPurchaseStory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Buyer\Model\Common\BuyerResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateBuyerRegistry()`

```php
updateBuyerRegistry($id): \Crossly\Buyer\Model\Common\BuyerRegistryResponse
```

Edit a registry: title, kind, date, message, ship-to address.

### Example

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
$id = 'id_example'; // string

try {
    $result = $apiInstance->updateBuyerRegistry($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->updateBuyerRegistry: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Buyer\Model\Common\BuyerRegistryResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateBuyerRegistryItem()`

```php
updateBuyerRegistryItem($id, $platform_listing_id): \Crossly\Buyer\Model\Registry\UpdateBuyerRegistryItemResponse
```

How many of an item you want (1–50).

### Example

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
$id = 'id_example'; // string
$platform_listing_id = 'platform_listing_id_example'; // string

try {
    $result = $apiInstance->updateBuyerRegistryItem($id, $platform_listing_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->updateBuyerRegistryItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **platform_listing_id** | **string**|  |

### Return type

**\Crossly\Buyer\Model\Registry\UpdateBuyerRegistryItemResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateBuyerSubscription()`

```php
updateBuyerSubscription($id): \Crossly\Buyer\Model\Common\BuyerResponse
```

Pause, resume, skip the next delivery, change the interval, or cancel.

### Example

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
$id = 'id_example'; // string

try {
    $result = $apiInstance->updateBuyerSubscription($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->updateBuyerSubscription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Buyer\Model\Common\BuyerResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateBuyerWishlist()`

```php
updateBuyerWishlist($id, $update_buyer_wishlist_request): \Crossly\Buyer\Model\Wishlist\UpdateBuyerWishlistResponse
```

Rename a wishlist, or make it public / private.

A public list can be opened by anyone holding its share link; making it private again stops that link working.

### Example

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
$id = 'id_example'; // string | The id.
$update_buyer_wishlist_request = new \Crossly\Buyer\Model\Wishlist\UpdateBuyerWishlistRequest(); // \Crossly\Buyer\Model\Wishlist\UpdateBuyerWishlistRequest

try {
    $result = $apiInstance->updateBuyerWishlist($id, $update_buyer_wishlist_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->updateBuyerWishlist: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id. |
 **update_buyer_wishlist_request** | **\Crossly\Buyer\Model\Wishlist\UpdateBuyerWishlistRequest**|  |

### Return type

**\Crossly\Buyer\Model\Wishlist\UpdateBuyerWishlistResponse**

### Authorization

[BuyerOAuth](../../README.md#BuyerOAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
