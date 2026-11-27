# Crossly\WorldApi

All URIs are relative to https://crossly.net/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createGamePackBreak()**](WorldApi.md#createGamePackBreak) | **POST** /v1/games/pack-break | Pack Break: your open pack of five real market pieces, or a fresh one. No prices until you pick.
[**createGamePackBreakPick()**](WorldApi.md#createGamePackBreakPick) | **POST** /v1/games/pack-break/{id}/pick | Pick the pull you think is worth the most: every lowest open ask is revealed, and a win earns a fee-back coupon.
[**createShowroom()**](WorldApi.md#createShowroom) | **POST** /v1/showrooms | Add a showroom. The first is included; an extra one has a monthly fee and is added in the dashboard (402 world_payment_failed here).
[**createShowroomPlacement()**](WorldApi.md#createShowroomPlacement) | **POST** /v1/showrooms/{id}/placement | Stand a showroom on a plot your store owns or rents (403 when it does not; 409 when another showroom stands there).
[**createSpatialInviteAccept()**](WorldApi.md#createSpatialInviteAccept) | **POST** /v1/spatial/invites/accept | Redeem an invite code (dashes optional); returns the room it opens.
[**createSpatialPropertyLeaseWithdraw()**](WorldApi.md#createSpatialPropertyLeaseWithdraw) | **POST** /v1/spatial/property/leases/{id}/withdraw | Withdraw a lease offer nobody has accepted yet.
[**createSpatialScene()**](WorldApi.md#createSpatialScene) | **POST** /v1/spatial/scenes | Start a 3D room: a collection (your items on shelves) or a warehouse (racks you arrange). Private until you make it public.
[**createSpatialSceneGrant()**](WorldApi.md#createSpatialSceneGrant) | **POST** /v1/spatial/scenes/{id}/grants | Let a specific user into one of your rooms (visitor or staff), no code needed.
[**createSpatialSceneInvite()**](WorldApi.md#createSpatialSceneInvite) | **POST** /v1/spatial/scenes/{id}/invites | Mint an invite code to one of your rooms (visitor or staff, optional expiry in hours). The code is in this response only: just its hash is stored.
[**createSpatialSceneNode()**](WorldApi.md#createSpatialSceneNode) | **POST** /v1/spatial/scenes/{id}/nodes | Add a unit (rack, shelf, bin) to one of your warehouse rooms.
[**createSpatialScenePlace()**](WorldApi.md#createSpatialScenePlace) | **POST** /v1/spatial/scenes/{id}/place | Pin an inventory item to a slot in one of your rooms: by warehouse nodeId, or by a collection container key and index.
[**createSpatialSceneRename()**](WorldApi.md#createSpatialSceneRename) | **POST** /v1/spatial/scenes/{id}/rename | Rename one of your rooms.
[**createSpatialSceneShopPlace()**](WorldApi.md#createSpatialSceneShopPlace) | **POST** /v1/spatial/scenes/{id}/shop/place | Place an inventory item in a section and display of your shop room.
[**createSpatialSceneUnpin()**](WorldApi.md#createSpatialSceneUnpin) | **POST** /v1/spatial/scenes/{id}/unpin | Clear every pin in one of your rooms, so it arranges itself again.
[**createSpatialSceneVisibility()**](WorldApi.md#createSpatialSceneVisibility) | **POST** /v1/spatial/scenes/{id}/visibility | Make one of your rooms private, unlisted (anyone with the link) or public (in the lobby and searchable).
[**createSpatialSceneWarehouseStock()**](WorldApi.md#createSpatialSceneWarehouseStock) | **POST** /v1/spatial/scenes/{id}/warehouse/stock | Put an inventory item (or unit) on a rack in one of your warehouse rooms.
[**createSpatialStreetApply()**](WorldApi.md#createSpatialStreetApply) | **POST** /v1/spatial/streets/{slug}/apply | Ask to open your shop on a street whose owner reviews applications.
[**createSpatialStreetInvite()**](WorldApi.md#createSpatialStreetInvite) | **POST** /v1/spatial/streets/{slug}/invite | Invite a shop (by its slug) to open on a street you own.
[**createWorldAttendantTestChat()**](WorldApi.md#createWorldAttendantTestChat) | **POST** /v1/world/attendant/test-chat | One test answer from your AI attendant, on your own AI key (409 ai_key_required without one).
[**createWorldAvatarEquip()**](WorldApi.md#createWorldAvatarEquip) | **POST** /v1/world/avatar/equip | Wear something you already own -- exactly ONE of { cosmeticId } (a cosmetic you hold), { receiptId } (a Crossly purchase from your closet) or { inventoryItemId } (your own stock). The slot comes from the thing itself; slot is only a fallback for an item with no catalog shape. Replaces whatever was in that slot. Moves no money. Answers the slot and your loadout after the change.
[**createWorldAvatarUnequip()**](WorldApi.md#createWorldAvatarUnequip) | **POST** /v1/world/avatar/unequip | Take off whatever is in one slot. Idempotent: an empty slot answers removed:false. Answers your loadout after the change.
[**createWorldAvatarWearable()**](WorldApi.md#createWorldAvatarWearable) | **POST** /v1/world/avatar/wearables | Author a wearable for a body slot (a mesh profile and params, an asking price in COSM base units as a string). A submission: inactive until an operator approves it.
[**createWorldContest()**](WorldApi.md#createWorldContest) | **POST** /v1/world/contests | Set up a skill contest on a game placed in your place: title, game (its instance id), entry { mode, feeCents? }, prizes by place, funder, window, attempts. Paid entry needs the operator to allow it where it runs.
[**createWorldContestEntrySettlePayment()**](WorldApi.md#createWorldContestEntrySettlePayment) | **POST** /v1/world/contests/entries/{id}/settle-payment | Read the fee of a paid entry back from Stripe and settle it (safe to repeat).
[**createWorldContestJoin()**](WorldApi.md#createWorldContestJoin) | **POST** /v1/world/contests/{id}/join | Enter a contest. Free and sponsored contests take you in at once; a paid one answers a client secret to pay the entry fee.
[**createWorldConvention()**](WorldApi.md#createWorldConvention) | **POST** /v1/world/conventions | Host a convention in one of your rooms: title, dates, tables and how sellers get one (invite, free, a fee in cents, or a revenue share in basis points).
[**createWorldConventionAccept()**](WorldApi.md#createWorldConventionAccept) | **POST** /v1/world/conventions/{id}/accept | Accept: your own invitation (no body), or, as host, an application (username).
[**createWorldConventionApply()**](WorldApi.md#createWorldConventionApply) | **POST** /v1/world/conventions/{id}/apply | Ask for a table at a convention.
[**createWorldConventionBoothApply()**](WorldApi.md#createWorldConventionBoothApply) | **POST** /v1/world/conventions/{id}/booths/apply | Apply for a booth tier (or book it at once in open mode): { tierId, note?, categories? }.
[**createWorldConventionBoothFee()**](WorldApi.md#createWorldConventionBoothFee) | **POST** /v1/world/conventions/{id}/booth-fee | Pay your booth fee to the organiser on a Worlds rail: { rail: \&quot;cash\&quot; | \&quot;cbx\&quot; }. Once per booth. Full-access token and Idempotency-Key required.
[**createWorldConventionCheckIn()**](WorldApi.md#createWorldConventionCheckIn) | **POST** /v1/world/conventions/{id}/check-in | Check in: the organiser names { exhibitorId }; an exhibitor checks themselves in with {}.
[**createWorldConventionFull()**](WorldApi.md#createWorldConventionFull) | **POST** /v1/world/conventions/full | Create a convention in full: venue + days (rented and paid now on the rail), hours, theme, booth tiers and prices, application or open booking, seller limits, promotion. Full-access token and Idempotency-Key required.
[**createWorldConventionInvite()**](WorldApi.md#createWorldConventionInvite) | **POST** /v1/world/conventions/{id}/invite | Invite a seller (by shop handle) to a convention you host.
[**createWorldConventionMessage()**](WorldApi.md#createWorldConventionMessage) | **POST** /v1/world/conventions/{id}/messages | Send a convention message: { body, toUserId? }. The organiser writes to one seller or every seller; an exhibitor writes to the organiser.
[**createWorldConventionPaid()**](WorldApi.md#createWorldConventionPaid) | **POST** /v1/world/conventions/{id}/paid | As host, record that a seller (username) paid their table fee off-platform. Moves no money.
[**createWorldConventionSellerAssign()**](WorldApi.md#createWorldConventionSellerAssign) | **POST** /v1/world/conventions/{id}/sellers/assign | Move an accepted seller to another booth of their tier (swaps with whoever is there): { exhibitorId, boothKey }.
[**createWorldConventionSellerDecide()**](WorldApi.md#createWorldConventionSellerDecide) | **POST** /v1/world/conventions/{id}/sellers/decide | Approve (terms frozen, a booth assigned) or decline an application: { exhibitorId, decision }.
[**createWorldConventionWithdraw()**](WorldApi.md#createWorldConventionWithdraw) | **POST** /v1/world/conventions/{id}/withdraw | Withdraw your table or decline your invitation; as host, decline someone (username).
[**createWorldCrew()**](WorldApi.md#createWorldCrew) | **POST** /v1/world/crews | Start a crew you own: { name (2-32 chars), tag (2-5 letters or digits, shown on members&#39; nameplates) }. Answers its id and join code. 409 when you are already in a crew.
[**createWorldCrewChat()**](WorldApi.md#createWorldCrewChat) | **POST** /v1/world/crew/chat | Say a line to your crew (body: text, up to 400 characters). Returns data.messages, the crew chat ring (the last 50 lines, kept in memory only), and data.said when your line went out; a blocked or too-quick line is dropped silently. 404 when you are in no crew.
[**createWorldCrewJoin()**](WorldApi.md#createWorldCrewJoin) | **POST** /v1/world/crews/join | Join a crew by the code a member gave you. 404 for an unknown code, 409 when you are already in a crew or it is full (30).
[**createWorldCrewLeave()**](WorldApi.md#createWorldCrewLeave) | **POST** /v1/world/crews/leave | Leave your crew. If you own it, the crew is disbanded. Idempotent: leaving when in none succeeds.
[**createWorldDecorDesign()**](WorldApi.md#createWorldDecorDesign) | **POST** /v1/world/decor/designs | Author a decor design (what it unlocks, a mesh profile and params, an asking price in COSM base units as a string). Inactive until an operator approves it.
[**createWorldDecorDesignSubmit()**](WorldApi.md#createWorldDecorDesignSubmit) | **POST** /v1/world/decor/designs/{id}/submit | Send one of your decor designs to the review queue.
[**createWorldDecorRetract()**](WorldApi.md#createWorldDecorRetract) | **POST** /v1/world/decor/retract | Take a placed decor piece back into your inventory; answers the inventory after.
[**createWorldDm()**](WorldApi.md#createWorldDm) | **POST** /v1/world/dms/{userId} | Send a direct message to a friend (a mutual follow; never across a block), up to 400 characters, through the world chat guard. 403 when they are not a friend, 429 when sent too quickly.
[**createWorldFollow()**](WorldApi.md#createWorldFollow) | **POST** /v1/world/follows/{userId} | Follow somebody. When they follow you back you are friends (friends-here, invites, messages). Idempotent.
[**createWorldFriendInvite()**](WorldApi.md#createWorldFriendInvite) | **POST** /v1/world/friends/{userId}/invite | \&quot;Join me\&quot;: send one friend (a mutual follow) a notification with a link to the PUBLIC room you name by slug. 404 when they are not a friend or the room is not public; 429 when you invited them in the last minute.
[**createWorldGamePackage()**](WorldApi.md#createWorldGamePackage) | **POST** /v1/world/games/packages | Submit a game package version for review: files as { path, base64 } (game.json, thumb.png, logic/, scene/, audio/, images/). Checked like the CLI, assets quarantined, the entry document dry-run, then reviewed by a person.
[**createWorldGamePackageCheck()**](WorldApi.md#createWorldGamePackageCheck) | **POST** /v1/world/games/packages/check | Validate a game package exactly as a submission is checked (the shared intake report, your version still free) without storing, uploading or queuing anything: world-kit validate for an agent. Same files body as submit.
[**createWorldGamePackagePublish()**](WorldApi.md#createWorldGamePackagePublish) | **POST** /v1/world/games/packages/{id}/publish | Make an approved version the one every placed copy runs (rollback or roll-forward; running copies restart on it) and list the game again if it was unpublished. Body { version }. Starter seller plan or higher.
[**createWorldGamePackageRestore()**](WorldApi.md#createWorldGamePackageRestore) | **POST** /v1/world/games/packages/{id}/restore | Restore a deleted Classic game within 30 days (it comes back unpublished).
[**createWorldGamePackageUnpublish()**](WorldApi.md#createWorldGamePackageUnpublish) | **POST** /v1/world/games/packages/{id}/unpublish | Take a Classic game off the Game Directory and the Carnival Plaza launcher, its store off sale. Copies people already placed keep running. Needs no plan: a lapsed creator can always take a game down.
[**createWorldGamePackageVersionSubmit()**](WorldApi.md#createWorldGamePackageVersionSubmit) | **POST** /v1/world/games/packages/{id}/versions/{semver}/submit | Send a draft version (uploaded with submit: false) to review: the same static check, sandbox dry run and human review as an upload. Starter seller plan or higher.
[**createWorldGameRating()**](WorldApi.md#createWorldGameRating) | **POST** /v1/world/games/{id}/rating | Rate a game you played, 1 to 5 stars (rating again replaces it). Only players the runner recorded in that game can rate it.
[**createWorldGameReport()**](WorldApi.md#createWorldGameReport) | **POST** /v1/world/games/{id}/report | Report a game: reason broken | unfair | offensive | scam | other, optional detail. Staff review it; the creator is told the reason, never who.
[**createWorldGameStoreCheckout()**](WorldApi.md#createWorldGameStoreCheckout) | **POST** /v1/world/games/{id}/store/{item}/checkout | Buy an item or pass from a game store: answers a client secret for the payment; the item is yours once it succeeds.
[**createWorldGrailMatch()**](WorldApi.md#createWorldGrailMatch) | **POST** /v1/world/grails/match | Grail glints: send the ids on show somewhere (listingIds -- listings.id, inventoryIds, skuIds -- catalogue market SKUs; up to 400 each) and get back data.listingIds / data.inventoryIds / data.skuIds: the ones that are things you already want -- an open bid, a watched or wishlisted listing (or one selling the same SKU), a market watch, or a card your deck is missing. Read-only.
[**createWorldHallLoan()**](WorldApi.md#createWorldHallLoan) | **POST** /v1/world/hall/loans | Lend a piece from your vault to this week&#39;s Hall of Grails exhibition: { vaultItemId, credit: &#39;name&#39; | &#39;anonymous&#39; }. It shows under your plaque until the exhibition ends; it stays in your vault (still listable and withdrawable), and stops showing if it leaves.
[**createWorldHomeAsk()**](WorldApi.md#createWorldHomeAsk) | **POST** /v1/world/homes/{slug}/ask | Ask a home owner whether they would sell a piece you saw there (an item or a decor piece).
[**createWorldHomeGuestbook()**](WorldApi.md#createWorldHomeGuestbook) | **POST** /v1/world/homes/{slug}/guestbook | Sign a home guestbook (one short line).
[**createWorldHomeGuestbookReport()**](WorldApi.md#createWorldHomeGuestbookReport) | **POST** /v1/world/homes/{slug}/guestbook/{id}/report | Report a guestbook entry to moderation.
[**createWorldHuntStart()**](WorldApi.md#createWorldHuntStart) | **POST** /v1/world/hunt/start | Start the Great Hunt this season by reading its first riddle (the Copper key&#39;s). Idempotent: starting again answers your progress unchanged. Answers the same shape as GET /v1/world/hunt. 409 when no season is running.
[**createWorldInteractiveAsset()**](WorldApi.md#createWorldInteractiveAsset) | **POST** /v1/world/interactive/assets | Upload one asset: kind glb (4 MB), wav (4 MB) or png (1 MB), the file as base64; purpose product (your designs, the default) or game (Carnival Studio files such as badge icons). Answers its sha256 and the path to reference from MML.
[**createWorldInteractiveDesign()**](WorldApi.md#createWorldInteractiveDesign) | **POST** /v1/world/interactive/designs | Create an interactive design: name, footprint (s, m, l or f), optional tint and description, an asking price in COSM base units (a string, six decimals) and optional max supply. Inactive until ops approve a submitted version.
[**createWorldInteractiveDesignCheck()**](WorldApi.md#createWorldInteractiveDesignCheck) | **POST** /v1/world/interactive/designs/{id}/check | Check the draft: static rules, that every referenced upload exists, and a sandboxed dry run. Budgeted per person.
[**createWorldInteractiveDesignPreview()**](WorldApi.md#createWorldInteractiveDesignPreview) | **POST** /v1/world/interactive/designs/{id}/preview | A private preview token for the draft (author only) and the socket path that runs it. Budgeted per person.
[**createWorldInteractiveDesignSubmit()**](WorldApi.md#createWorldInteractiveDesignSubmit) | **POST** /v1/world/interactive/designs/{id}/submit | Freeze the draft as a new version and send it to ops review. Up to 10 a day.
[**createWorldInteractiveReset()**](WorldApi.md#createWorldInteractiveReset) | **POST** /v1/world/interactive/reset | Wipe the stored state of an interactive piece standing in a place you own (a home or your boutique).
[**createWorldJobAppraisalAnswer()**](WorldApi.md#createWorldJobAppraisalAnswer) | **POST** /v1/world/jobs/appraisals/{id}/answers | Answer a price check: your estimate of the item value in CENTS and an optional note. Moves no money; the asker may accept it.
[**createWorldJobShiftClaim()**](WorldApi.md#createWorldJobShiftClaim) | **POST** /v1/world/jobs/shifts/{id}/claim | Claim an open shift. You work it by being in the place while it runs.
[**createWorldJobShiftRelease()**](WorldApi.md#createWorldJobShiftRelease) | **POST** /v1/world/jobs/shifts/{id}/release | Give a shift you claimed back to the board.
[**createWorldMarketBuy()**](WorldApi.md#createWorldMarketBuy) | **POST** /v1/world/market/{kind}/{id}/buy | Buy a plot or a street.
[**createWorldMarketListing()**](WorldApi.md#createWorldMarketListing) | **POST** /v1/world/market/listings | List a plot for sale or rent, or a street for sale.
[**createWorldMarketPlotRent()**](WorldApi.md#createWorldMarketPlotRent) | **POST** /v1/world/market/plot/{id}/rent | Rent a plot offered for lease.
[**createWorldOutfit()**](WorldApi.md#createWorldOutfit) | **POST** /v1/world/outfits | Save what you are wearing now as a named look: { name (1-32 chars), appearance? (skin, hair, hairColour, eyes, build -- unknown keys fall back to the default) }. Each worn thing is recorded as the door it goes back on by; one that no longer traces to something you own is listed in skipped and not saved. 409 when you already keep 6.
[**createWorldOutfitApply()**](WorldApi.md#createWorldOutfitApply) | **POST** /v1/world/outfits/{id}/apply | Put a saved look on. Every item goes through the same equip as POST /v1/world/avatar/equip, so ownership still holds: something you no longer own is listed in skipped with the reason and not worn. Slots the look left empty are emptied (cleared). Answers the appearance of the look (for your character -- appearance lives on your device), applied, skipped and cleared. Moves no money.
[**createWorldParty()**](WorldApi.md#createWorldParty) | **POST** /v1/world/parties | Start a party with you as leader (up to 8 members).
[**createWorldPartyChat()**](WorldApi.md#createWorldPartyChat) | **POST** /v1/world/parties/{id}/chat | Say something in your party chat (up to 2000 characters).
[**createWorldPartyInvite()**](WorldApi.md#createWorldPartyInvite) | **POST** /v1/world/parties/{id}/invite | Invite a friend (userId) to your party.
[**createWorldPartyInviteAccept()**](WorldApi.md#createWorldPartyInviteAccept) | **POST** /v1/world/parties/invites/{inviteId}/accept | Accept a party invite.
[**createWorldPartyInviteDecline()**](WorldApi.md#createWorldPartyInviteDecline) | **POST** /v1/world/parties/invites/{inviteId}/decline | Decline a party invite.
[**createWorldPartyKick()**](WorldApi.md#createWorldPartyKick) | **POST** /v1/world/parties/{id}/kick | As leader, remove a member (userId).
[**createWorldPartyLeader()**](WorldApi.md#createWorldPartyLeader) | **POST** /v1/world/parties/{id}/leader | As leader, pass the lead to a member (userId).
[**createWorldPartyLeave()**](WorldApi.md#createWorldPartyLeave) | **POST** /v1/world/parties/{id}/leave | Leave your party (the lead passes on if you led it).
[**createWorldPartyWishlist()**](WorldApi.md#createWorldPartyWishlist) | **POST** /v1/world/parties/{id}/wishlist | Add a listing (listingId, or its shop slug) to the party wishlist; answers the wishlist.
[**createWorldPartyWishlistVote()**](WorldApi.md#createWorldPartyWishlistVote) | **POST** /v1/world/parties/{id}/wishlist/{listingId}/vote | Thumb a wishlist listing up or down (null clears your vote); answers the wishlist.
[**createWorldPlaceItemWant()**](WorldApi.md#createWorldPlaceItemWant) | **POST** /v1/world/places/{slug}/items/{itemId}/want | Tell a room owner you would buy one of their items (once per person per item; they see the count). Moves no money.
[**createWorldPropertyPlotPhotoUploadUrl()**](WorldApi.md#createWorldPropertyPlotPhotoUploadUrl) | **POST** /v1/world/property/plots/{plotId}/photo/upload-url | A presigned upload for a plot&#39;s photo (WebP/PNG/JPEG, up to 4 MB): PUT the image to uploadUrl with the same Content-Type and exact Content-Length, then store publicUrl with PUT .../photo.
[**createWorldPropertyPlotShowroom()**](WorldApi.md#createWorldPropertyPlotShowroom) | **POST** /v1/world/property/plots/{plotId}/showroom | Stand one of your showrooms on a plot you own or rent.
[**createWorldPropertyTrespassed()**](WorldApi.md#createWorldPropertyTrespassed) | **POST** /v1/world/property/trespassed | Ban someone owner-wide or from one showroom.
[**createWorldSpace()**](WorldApi.md#createWorldSpace) | **POST** /v1/world/spaces | Open a Space (sellers only, at most two): slug, name, venue, optional membership and about.
[**createWorldSpaceEvent()**](WorldApi.md#createWorldSpaceEvent) | **POST** /v1/world/spaces/{slug}/events | As host or co-host, put an event on: title, kind, optional about, ISO start and end with offset.
[**createWorldSpaceEventRsvp()**](WorldApi.md#createWorldSpaceEventRsvp) | **POST** /v1/world/spaces/{slug}/events/{id}/rsvp | Say whether you are going to an event.
[**createWorldSpaceInvite()**](WorldApi.md#createWorldSpaceInvite) | **POST** /v1/world/spaces/{slug}/invite | Invite somebody (userId) to a Space.
[**createWorldSpaceJoin()**](WorldApi.md#createWorldSpaceJoin) | **POST** /v1/world/spaces/{slug}/join | Join a Space, or ask to when it is request-only.
[**createWorldSpaceLeave()**](WorldApi.md#createWorldSpaceLeave) | **POST** /v1/world/spaces/{slug}/leave | Leave a Space.
[**createWorldSpaceRequestByUserId()**](WorldApi.md#createWorldSpaceRequestByUserId) | **POST** /v1/world/spaces/{slug}/requests/{userId} | As host or co-host, accept or turn down a request to join.
[**createWorldSpaceRole()**](WorldApi.md#createWorldSpaceRole) | **POST** /v1/world/spaces/{slug}/role | As host, make a member a co-host or back to a member.
[**createWorldStaffApplicationDecide()**](WorldApi.md#createWorldStaffApplicationDecide) | **POST** /v1/world/staff/applications/{id}/decide | Accept or decline an application.
[**createWorldStaffAssignmentRateWorker()**](WorldApi.md#createWorldStaffAssignmentRateWorker) | **POST** /v1/world/staff/assignments/{id}/rate-worker | Rate the worker of one of your seats.
[**createWorldStaffPosting()**](WorldApi.md#createWorldStaffPosting) | **POST** /v1/world/staff/postings | Post a job: a showroom, stall or convention, pay, recurrence and rules.
[**createWorldStaffPostingStatus()**](WorldApi.md#createWorldStaffPostingStatus) | **POST** /v1/world/staff/postings/{id}/status | Open, pause or close a posting.
[**createWorldStreetOwnedUpkeepPay()**](WorldApi.md#createWorldStreetOwnedUpkeepPay) | **POST** /v1/world/streets/owned/{id}/upkeep/pay | Pay your street&#39;s upkeep forward.
[**createWorldVenueBookingCancel()**](WorldApi.md#createWorldVenueBookingCancel) | **POST** /v1/world/venue-bookings/{id}/cancel | Cancel a hall rental: the whole rent back until 7 days before the first day, nothing after.
[**createWorldWorkAssignmentRateEmployer()**](WorldApi.md#createWorldWorkAssignmentRateEmployer) | **POST** /v1/world/work/assignments/{id}/rate-employer | Rate the employer of a public-job shift you worked: paid on time, job as described, conduct.
[**createWorldWorkPostingApply()**](WorldApi.md#createWorldWorkPostingApply) | **POST** /v1/world/work/postings/{id}/apply | Apply for a job.
[**deleteShowroom()**](WorldApi.md#deleteShowroom) | **DELETE** /v1/showrooms/{id} | Archive a showroom: private, off its plots, billing stopped. Never deletes; the primary cannot be archived (409 showroom_primary).
[**deleteShowroomPlacement()**](WorldApi.md#deleteShowroomPlacement) | **DELETE** /v1/showrooms/{id}/placement/{plotId} | Take a showroom off a plot (the plot stays yours).
[**deleteSpatialSceneGrant()**](WorldApi.md#deleteSpatialSceneGrant) | **DELETE** /v1/spatial/scenes/{id}/grants/{grantId} | Take somebody&#39;s access to your room away, or kill an invite nobody has used yet.
[**deleteSpatialSceneNode()**](WorldApi.md#deleteSpatialSceneNode) | **DELETE** /v1/spatial/scenes/{id}/nodes | Remove units (by id, up to 500) from one of your warehouse rooms.
[**deleteSpatialSceneWarehouseStock()**](WorldApi.md#deleteSpatialSceneWarehouseStock) | **DELETE** /v1/spatial/scenes/{id}/warehouse/stock | Take an inventory item (or unit) off its rack.
[**deleteSpatialStreetRequest()**](WorldApi.md#deleteSpatialStreetRequest) | **DELETE** /v1/spatial/streets/requests/{id} | Withdraw a street request you made that has not been founded yet.
[**deleteWorldBlock()**](WorldApi.md#deleteWorldBlock) | **DELETE** /v1/world/blocks/{id} | Unblock somebody (by the block id from GET /v1/world/blocks).
[**deleteWorldCollectionCapability()**](WorldApi.md#deleteWorldCollectionCapability) | **DELETE** /v1/world/collections/{chain}/{contract}/capabilities | Withdraw your declaration for a collection.
[**deleteWorldFollow()**](WorldApi.md#deleteWorldFollow) | **DELETE** /v1/world/follows/{userId} | Unfollow somebody. Idempotent.
[**deleteWorldGamePackage()**](WorldApi.md#deleteWorldGamePackage) | **DELETE** /v1/world/games/packages/{id} | Delete a Classic game: unpublished, then a tombstone restorable for 30 days.
[**deleteWorldHallLoan()**](WorldApi.md#deleteWorldHallLoan) | **DELETE** /v1/world/hall/loans/{id} | Take one of your loans off show in the Hall of Grails.
[**deleteWorldHomeGuestbook()**](WorldApi.md#deleteWorldHomeGuestbook) | **DELETE** /v1/world/homes/{slug}/guestbook/{id} | As the home owner, hide a guestbook entry.
[**deleteWorldInteractiveDesign()**](WorldApi.md#deleteWorldInteractiveDesign) | **DELETE** /v1/world/interactive/designs/{id} | Delete a draft design, or archive a submitted one (off sale; owned copies keep working).
[**deleteWorldJobShift()**](WorldApi.md#deleteWorldJobShift) | **DELETE** /v1/world/jobs/shifts/{id} | Cancel a shift you posted that nobody has worked yet.
[**deleteWorldMarketListing()**](WorldApi.md#deleteWorldMarketListing) | **DELETE** /v1/world/market/listings/{kind}/{id}/{mode} | Withdraw a plot or street from the Market.
[**deleteWorldOutfit()**](WorldApi.md#deleteWorldOutfit) | **DELETE** /v1/world/outfits/{id} | Delete a saved look. 404 when it is not yours.
[**deleteWorldPartyWishlist()**](WorldApi.md#deleteWorldPartyWishlist) | **DELETE** /v1/world/parties/{id}/wishlist/{listingId} | Take a listing you added off the party wishlist; answers the wishlist.
[**deleteWorldPlaceBan()**](WorldApi.md#deleteWorldPlaceBan) | **DELETE** /v1/world/places/{slug}/bans/{userId} | Lift a ban from a place you own; they can walk in again right away.
[**deleteWorldPropertyPlotShowroom()**](WorldApi.md#deleteWorldPropertyPlotShowroom) | **DELETE** /v1/world/property/plots/{plotId}/showroom | Take the showroom off a plot.
[**deleteWorldPropertyTrespassed()**](WorldApi.md#deleteWorldPropertyTrespassed) | **DELETE** /v1/world/property/trespassed/{userId} | Lift a ban.
[**deleteWorldSpace()**](WorldApi.md#deleteWorldSpace) | **DELETE** /v1/world/spaces/{slug} | As host, close a Space.
[**deleteWorldSpaceEvent()**](WorldApi.md#deleteWorldSpaceEvent) | **DELETE** /v1/world/spaces/{slug}/events/{id} | As host or co-host, cancel an event.
[**deleteWorldStaffAssignment()**](WorldApi.md#deleteWorldStaffAssignment) | **DELETE** /v1/world/staff/assignments/{id} | Take a worker off a seat that has not started.
[**getShowroom()**](WorldApi.md#getShowroom) | **GET** /v1/showroom | Your store&#39;s showroom in Crossly World: the room and its look, fixtures with their slot grids, where every item stands (pinned by a person or placed automatically), sharing settings and the stock that can stand there. The ETag is the version.
[**getShowroomBilling()**](WorldApi.md#getShowroomBilling) | **GET** /v1/showrooms/{id}/billing | A showroom&#39;s billing: included, active (paid through), past due or cancelled, and the rails a payment can use.
[**getShowroomById()**](WorldApi.md#getShowroomById) | **GET** /v1/showrooms/{id} | One showroom: room and look, fixtures (with holders), placements, settings (hours, auto-include) and stock. The ETag is the version.
[**getShowroomCatalog()**](WorldApi.md#getShowroomCatalog) | **GET** /v1/showroom/catalog | Everything a showroom can be made of: fixture displays (kind, slots per unit), room sizes, themes, surfaces, shopfronts, facades, sign styles and fonts, window moods, and &#x60;holders&#x60;: every fixture holder with &#x60;owned&#x60; (free, or a premium one you bought in the in-world cosmetics market; an unowned premium holder is refused with holder_not_owned).
[**getShowroomPlacement()**](WorldApi.md#getShowroomPlacement) | **GET** /v1/showrooms/{id}/placement | The plots a showroom stands on, and the plots your store owns or rents that it could stand on.
[**getSpatialSceneAttention()**](WorldApi.md#getSpatialSceneAttention) | **GET** /v1/spatial/scenes/{sceneId}/attention | What visitors looked at in one of your rooms: viewers, looks, inspects and dwell per item over the last days (1-35, default 30).
[**getSpatialSceneWindow()**](WorldApi.md#getSpatialSceneWindow) | **GET** /v1/spatial/scenes/{id}/window | The listings you chose for the street window of your shop, in slot order (left, middle, right; empty &#x3D; newest first), and &#x60;choices&#x60;: your listings that can go in it, newest first.
[**getSpatialShopNeighbourhood()**](WorldApi.md#getSpatialShopNeighbourhood) | **GET** /v1/spatial/shop/neighbourhood | Where your shop stands, and the district theme your stock fits.
[**getSpatialSpace()**](WorldApi.md#getSpatialSpace) | **GET** /v1/spatial/spaces | The room catalogue: every space profile (what it holds, how it is sorted, its containers) and the warehouse units.
[**getSpatialStreetAdmission()**](WorldApi.md#getSpatialStreetAdmission) | **GET** /v1/spatial/streets/admissions | Street applications and invitations: yours, and those waiting on streets you own.
[**getSpatialStreetDecor()**](WorldApi.md#getSpatialStreetDecor) | **GET** /v1/spatial/streets/{slug}/decor | The decor on a street you may dress, and what you can place.
[**getWorldArcade()**](WorldApi.md#getWorldArcade) | **GET** /v1/world/arcade | The Arcade in Crossly World: data.cabinets (slot, where it stands, host -- piece, price_guess or empty --, game, title, blurb, the piece it hosts and where, record, packageId and thumbnail for a creator game from the Game Directory, players) and data.scores (the High Score wall: per game a title, kind -- leaderboard, record or top -- and up to five ASCII lines; a name shows only for somebody who chose to be seen by name, everyone else is \&quot;A player\&quot;), plus creatorGames (creator games with a cabinet now). Games are played in the world.
[**getWorldAttendant()**](WorldApi.md#getWorldAttendant) | **GET** /v1/world/attendant | Your AI attendant and whether your AI key is connected.
[**getWorldAurora()**](WorldApi.md#getWorldAurora) | **GET** /v1/world/aurora | The Sales Aurora over the Commons in Crossly World: every real sale on Crossly in the last data.windowDays (30) days. data.total (sales in the window), data.families (key, label, colour, count per colour family: cards, coins, jewellery, electronics, media, fashion, toys, other) and data.sales (newest first, at most 48: family, ageHours, fresh -- sold in the last ten minutes, which shimmers). Aggregate only: no item, price, seller or platform. data.updatedAt is when it was read.
[**getWorldAvatarBasic()**](WorldApi.md#getWorldAvatarBasic) | **GET** /v1/world/avatar/basics | The free basic wardrobe every account owns: 25 garments (tees, hoodie, overshirt, polo, jacket, vest, jeans, shorts, skirt, sneakers, boots, loafers, caps...) by slot, each with its colourways. Wear one by saving appearance.outfit &#x3D; { top, outer, bottom, shoes, hat } as \&quot;garment:colour\&quot; (outer and hat may be \&quot;none\&quot;) with PUT /v1/world/avatar/look.
[**getWorldAvatarIdentity()**](WorldApi.md#getWorldAvatarIdentity) | **GET** /v1/world/avatar/identity | Whether others see your name in the world (named), or not (anonymous); null if you have never chosen.
[**getWorldAvatarLoadout()**](WorldApi.md#getWorldAvatarLoadout) | **GET** /v1/world/avatar/loadout | What you are wearing: the rig, its slots (avatar_head, avatar_body, avatar_outer -- a jacket over the top, avatar_legs, avatar_feet, avatar_back) and each worn entry -- a cosmetic or a real item -- with its verified-purchase mark. Carries no price, receipt id, seller or order.
[**getWorldAvatarLoadoutByUserId()**](WorldApi.md#getWorldAvatarLoadoutByUserId) | **GET** /v1/world/avatar/loadout/{userId} | What somebody else is wearing, with the verified-purchase mark on each real item -- public on purpose, since a check only its owner can see is not a check. No price, receipt id, seller or order.
[**getWorldAvatarLook()**](WorldApi.md#getWorldAvatarLook) | **GET** /v1/world/avatar/look | Your world look on the account: the handle you chose (null if anonymous) and your appearance; null if you never made one.
[**getWorldAvatarNftBadge()**](WorldApi.md#getWorldAvatarNftBadge) | **GET** /v1/world/avatar/nft-badge | The NFT you wear on your nameplate in the world, or null.
[**getWorldBillingRail()**](WorldApi.md#getWorldBillingRail) | **GET** /v1/world/billing/rails | Which rails (card, CBX) can pay in the world right now.
[**getWorldCapability()**](WorldApi.md#getWorldCapability) | **GET** /v1/world/capabilities | What your held NFTs unlock in Crossly World: each token with the capabilities its collection declared (wear, display, emote, gate, ...). Holding is your verified wallets (their synced tokens); the capabilities of a transferred token go within five minutes.
[**getWorldCapabilityCatalogue()**](WorldApi.md#getWorldCapabilityCatalogue) | **GET** /v1/world/capabilities/catalogue | The capability kinds of spec crossly.nft-capabilities/1: what each does, whether only the creator of the collection may declare it, whether it needs review, and which clients honour it.
[**getWorldCapabilityWear()**](WorldApi.md#getWorldCapabilityWear) | **GET** /v1/world/capabilities/wear | What you wear from your NFTs and COSM copies: your pick per avatar slot (head, body, legs, feet, back) and what the room sees.
[**getWorldChest()**](WorldApi.md#getWorldChest) | **GET** /v1/world/chests | The Commons chest: data.window (this 20-minute window, UTC), spot ([x, z] on the plaza), endsAt (when the next chest comes) and mine (openedThis, and opened -- how many windows you have opened one in; the Chest opener pin comes at 10). A chest is opened by walking up to it in Crossly World, never over the API.
[**getWorldCollectionCapability()**](WorldApi.md#getWorldCollectionCapability) | **GET** /v1/world/collections/{chain}/{contract}/capabilities | The live capability declaration of a collection (404 when it has none).
[**getWorldContestMine()**](WorldApi.md#getWorldContestMine) | **GET** /v1/world/contests/mine | Your contest entries (best score, attempts used, payment state) and prizes (granted, or owed until their gate opens).
[**getWorldControl()**](WorldApi.md#getWorldControl) | **GET** /v1/world/controls | Your world controls settings (look sensitivity, invert look, stick size, left-handed, camera distance, reduced camera motion, tap-to-walk, haptics) and whether you have seen the controls tutorial.
[**getWorldConvention()**](WorldApi.md#getWorldConvention) | **GET** /v1/world/conventions/{id} | One convention. 404 for an unknown or malformed id alike.
[**getWorldConventionExhibit()**](WorldApi.md#getWorldConventionExhibit) | **GET** /v1/world/conventions/{id}/exhibit | A convention from the exhibitor side: tiers with price, size, capacity and booths left, the rails that pay now, and your own booth (status, fee, paid, checked in, listings).
[**getWorldConventionHall()**](WorldApi.md#getWorldConventionHall) | **GET** /v1/world/conventions/{id}/hall | The hall design (booths, stage, signs, entrance, kiosk), its version and any problems.
[**getWorldConventionManage()**](WorldApi.md#getWorldConventionManage) | **GET** /v1/world/conventions/{id}/manage | A convention you organise: its settings, booth tiers, every seller (status, booth, fee, paid, checked in) and the venue.
[**getWorldConventionStatusPage()**](WorldApi.md#getWorldConventionStatusPage) | **GET** /v1/world/conventions/{id}/status-page | The status page: sellers, booths filled per tier, walk-ins, sales of brought listings, booth fees paid and owed.
[**getWorldCosmBalance()**](WorldApi.md#getWorldCosmBalance) | **GET** /v1/world/cosm/balance | Your COSM balance: baseUnits (a STRING -- COSM has 6 decimals and overflows a JSON number), decimals, available (false &#x3D; COSM is not provisioned on this deployment, not a zero balance).
[**getWorldCrew()**](WorldApi.md#getWorldCrew) | **GET** /v1/world/crew | Your crew: data.crew is null when you are in none, else its name, tag, join code and whether you own it; data.members lists up to 30 members, each with the public room they are in right now when they chose to be seen by name (else null).
[**getWorldCrewChat()**](WorldApi.md#getWorldCrewChat) | **GET** /v1/world/crew/chat | Your crew chat: data.messages is the last 50 lines (from, name, text, at), kept in memory only, so it starts empty after a restart. 404 when you are in no crew.
[**getWorldCrewLeaderboard()**](WorldApi.md#getWorldCrewLeaderboard) | **GET** /v1/world/crew/leaderboards | The game leaderboards (Price Guess, hunts, speed trades; this week and all time) ranked among your crew only, each member by the name the crew sees. 404 when you are in no crew.
[**getWorldDm()**](WorldApi.md#getWorldDm) | **GET** /v1/world/dms/{userId} | Your direct-message thread with one friend, oldest first (the last 100 lines: id, from, text, at, mine). Reading it marks their lines read.
[**getWorldEmoteShowable()**](WorldApi.md#getWorldEmoteShowable) | **GET** /v1/world/emotes/showable | The things you own that a show-off emote can hold up.
[**getWorldFirefly()**](WorldApi.md#getWorldFirefly) | **GET** /v1/world/fireflies | Fireflies on the Commons lawn: data.day (today, UTC), today (fireflies everyone has caught today) and mine (today -- your catches today, up to perDay -- total, all your catches; the Firefly Catcher pin comes at 30 -- and perDay). Fireflies are caught by walking up to a lit one in Crossly World after dark, never over the API, and nothing is spent.
[**getWorldFitStat()**](WorldApi.md#getWorldFitStat) | **GET** /v1/world/fits/stats | Your walking storefront, last 7 days: distinct people who tapped \&quot;Shop this\&quot; or \&quot;Offer\&quot; on what you wore, and how many of each. Counts only; nobody is identified.
[**getWorldFitValue()**](WorldApi.md#getWorldFitValue) | **GET** /v1/world/fit-value | What your outfit is worth on the market: cents (sum of each catalogued piece&#39;s order-book price -- last sale, else lowest ask), pieces worn, how many were priced, and share (whether you show it on your card).
[**getWorldGame()**](WorldApi.md#getWorldGame) | **GET** /v1/world/games/{id} | One live game: its manifest, its store items and which you own.
[**getWorldGameLeaderboard()**](WorldApi.md#getWorldGameLeaderboard) | **GET** /v1/world/games/{id}/leaderboard | A live game leaderboard, this week and all time, by its manifest scoring (wins, best points, or best time). Only people who chose to be named show by name. scoring is null for a game that keeps no board.
[**getWorldGamePackage()**](WorldApi.md#getWorldGamePackage) | **GET** /v1/world/games/packages/{id} | One of your game packages with every version, its review state and decision note.
[**getWorldGamePackageStat()**](WorldApi.md#getWorldGamePackageStat) | **GET** /v1/world/games/packages/{id}/stats | Play stats for one of your Classic games: 30-day totals, the daily series the launcher ranks on (uniques, sessions, playtime, first-play bounces, D1/D7/D28), its ranking score, test impressions and players right now. ?days&#x3D;1-90.
[**getWorldGamePackageVersion()**](WorldApi.md#getWorldGamePackageVersion) | **GET** /v1/world/games/packages/{id}/versions | Every version of one of your Classic games: draft, pending, approved, rejected, withdrawn or cancelled, which one is live, its documents and report.
[**getWorldGameTemplate()**](WorldApi.md#getWorldGameTemplate) | **GET** /v1/world/games/templates/{kind} | A fresh game package from a template (table, arena, object; collection is an NFT capability declaration), as { path, base64 } files: the world-kit init, for an agent with no local kit. ?id&#x3D;my-game&amp;name&#x3D;My Game.
[**getWorldHall()**](WorldApi.md#getWorldHall) | **GET** /v1/world/hall | The Hall of Grails in Crossly World: data.exhibition (key, title, blurb, endsAt -- a new one every Monday UTC -- and next, the coming one&#39;s title) and data.exhibits, up to twelve real catalogue items in slot order (skuId, name, brand, imageUrl, thumbUrl, retailCents, lowestAskCents, lastSaleCents: the live order book, null when the market has none). The first stands on the centre plinth. Buy, bid or watch an exhibit through the market endpoints with its skuId.
[**getWorldHallLoan()**](WorldApi.md#getWorldHallLoan) | **GET** /v1/world/hall/loans | Lend to the Hall: this week&#39;s exhibition (key, title, categorySlug, endsAt), your loans on show (id, vaultItemId, skuId, name, credit, since) and the vault pieces you can lend (eligible: vaultItemId, skuId, name, imageUrl, grade) -- held in your Crossly vault, not pledged, in the exhibition&#39;s category. perMember is how many you may lend each week.
[**getWorldHomePlaceable()**](WorldApi.md#getWorldHomePlaceable) | **GET** /v1/world/home/placeable | What you can place in your home: your items and your furniture.
[**getWorldHunt()**](WorldApi.md#getWorldHunt) | **GET** /v1/world/hunt | Your Great Hunt: data.season (id, name, startsAt, endsAt, the title and how many earn it, live), started (you read the first clue), held (keys held, 0-3, always in the order copper, jade, crystal), keys (each with its name, colour, its riddle once it is yours to read, and when you picked it up), and cleared (your rank through the Gate this season, when, and whether you earned the title) or null. Keys are picked up by walking to them in Crossly World; nothing here takes one.
[**getWorldHuntScoreboard()**](WorldApi.md#getWorldHuntScoreboard) | **GET** /v1/world/hunt/scoreboard | The Great Hunt Scoreboard, as the monolith in the Commons shows it: data.season (the running season, or the last one between seasons), finishers (the first ten through the Gate in order: rank, name, short, named, at, titled -- a name shows only for somebody who chose to be seen by name in the world, everyone else is \&quot;A player\&quot;) and total (everybody through the Gate this season).
[**getWorldInteractiveDesign()**](WorldApi.md#getWorldInteractiveDesign) | **GET** /v1/world/interactive/designs/{id} | One of your interactive designs: its draft source, the last static check, and every submitted version with its review state.
[**getWorldJob()**](WorldApi.md#getWorldJob) | **GET** /v1/world/jobs | The jobs board: open staff shifts you could claim, your claimed shifts and open price checks (appraisals), as the world shows them.
[**getWorldKite()**](WorldApi.md#getWorldKite) | **GET** /v1/world/kites | Kites flown on the Commons lawn: data.day (today, UTC), today (kites everyone has flown today) and mine (today -- yours today, up to perDay -- perDay, and days -- the days you have flown one on; the Kite flyer pin comes at 5). Kites are flown by standing out on the lawn in Crossly World by day, never over the API, and nothing is spent.
[**getWorldLantern()**](WorldApi.md#getWorldLantern) | **GET** /v1/world/lanterns | Sky lanterns in the Commons: data.day (today, UTC), today (lanterns everyone has released today) and mine (today -- yours today, up to perDay -- perDay, and days -- the days you have released one on; the Lantern lighter pin comes at 5). Lanterns are released at the lantern stand in Crossly World, never over the API, and nothing is spent.
[**getWorldLauncher()**](WorldApi.md#getWorldLauncher) | **GET** /v1/worlds/launcher | The Carnival Plaza launcher: portals for Classic games, Crossly&#39;s own card games and the Commons card tables, each with players right now, your friends inside, its ranking score (published weights, retention-weighted, first-play bounce negative) and where Play goes. Twelve ring slots: friends&#39; pick, new &amp; rising (guaranteed test impressions), then the top, first-party capped at 25%.
[**getWorldManageLedger()**](WorldApi.md#getWorldManageLedger) | **GET** /v1/world/manage/ledger | World money over 7, 30 or 90 days: plot purchases, maintenance, rent, deed sales, staff wages, shifts and stalls, in and out.
[**getWorldManageOverview()**](WorldApi.md#getWorldManageOverview) | **GET** /v1/world/manage/overview | Your Crossly World at a glance: shop and addresses, property, staff and shifts, conventions, stalls, 30-day visitors and money.
[**getWorldManageVisitor()**](WorldApi.md#getWorldManageVisitor) | **GET** /v1/world/manage/visitors | Who came to your world shop over 7, 30 or 90 days: the funnel, attention by day, most-looked and most-wanted items.
[**getWorldMarket()**](WorldApi.md#getWorldMarket) | **GET** /v1/world/market/{kind}/{id} | One plot or street in the Market: price, renders, neighbours, foot traffic, history.
[**getWorldNeighbourhoodClaim()**](WorldApi.md#getWorldNeighbourhoodClaim) | **GET** /v1/world/neighbourhoods/{slug}/claim | Whether you may claim a plot on a neighbourhood street (its top sellers by recent sales), and why not.
[**getWorldPartyChat()**](WorldApi.md#getWorldPartyChat) | **GET** /v1/world/parties/{id}/chat | Your party chat: the recent lines. 404 when this is not your party.
[**getWorldPlaceBoard()**](WorldApi.md#getWorldPlaceBoard) | **GET** /v1/world/places/{slug}/boards | The Trade Floor&#39;s wall of wants, its authentication desk and its Vault Markets ticker (vaultMovers: bookKey, name, label, units, markCents, change24hBps; only the trade-floor place has them).
[**getWorldPlaceCollection()**](WorldApi.md#getWorldPlaceCollection) | **GET** /v1/world/places/{slug}/collections/{category}/{brand}/{model} | One collection room: every piece of the set, owned or missing. 404 for an unknown room or set.
[**getWorldPlaceDrop()**](WorldApi.md#getWorldPlaceDrop) | **GET** /v1/world/places/{slug}/drop | The owner&#39;s next drop (name, cover, time, live) and how many people are waiting in the room.
[**getWorldPlaceItemInterest()**](WorldApi.md#getWorldPlaceItemInterest) | **GET** /v1/world/places/{slug}/items/{itemId}/interest | How many people looked at one item in this room today.
[**getWorldPlaceLive()**](WorldApi.md#getWorldPlaceLive) | **GET** /v1/world/places/{slug}/live | The owner&#39;s live sale: their stream and the lot on the block, or null.
[**getWorldPlaceSeller()**](WorldApi.md#getWorldPlaceSeller) | **GET** /v1/world/places/{slug}/seller | The shop whose public room this is (username and name), or null.
[**getWorldPlaceShopPet()**](WorldApi.md#getWorldPlaceShopPet) | **GET** /v1/world/places/{slug}/shop-pet | The shop&#39;s pet kind, or null.
[**getWorldPropertyPlot()**](WorldApi.md#getWorldPropertyPlot) | **GET** /v1/world/property/plots/{plotId} | One plot of yours: showroom, rental, value, upkeep.
[**getWorldPropertyRental()**](WorldApi.md#getWorldPropertyRental) | **GET** /v1/world/property/rentals/{leaseId} | One plot you rent out, with its payments.
[**getWorldPropertyRenting()**](WorldApi.md#getWorldPropertyRenting) | **GET** /v1/world/property/renting/{leaseId} | One plot you rent, with its payments.
[**getWorldRail()**](WorldApi.md#getWorldRail) | **GET** /v1/world/rails | Which Worlds payment rails are on now: cash (card), CBX, or both.
[**getWorldSpace()**](WorldApi.md#getWorldSpace) | **GET** /v1/world/spaces/{slug} | One Space: its layout, host, events and your place in it.
[**getWorldSpaceCanHost()**](WorldApi.md#getWorldSpaceCanHost) | **GET** /v1/world/spaces/can-host | Whether you may open a Space: sellers only, at most two active.
[**getWorldStaffPosting()**](WorldApi.md#getWorldStaffPosting) | **GET** /v1/world/staff/postings/{id} | One of your postings, with its shifts.
[**getWorldStaffReputation()**](WorldApi.md#getWorldStaffReputation) | **GET** /v1/world/staff/reputation | Your employer reputation, rated by the people who worked your public jobs.
[**getWorldStreetFund()**](WorldApi.md#getWorldStreetFund) | **GET** /v1/world/streets/{slug}/fund | A street&#39;s fund: the CBX property payments on its plots over the last four weeks, and the street events it unlocked.
[**getWorldStreetOwned()**](WorldApi.md#getWorldStreetOwned) | **GET** /v1/world/streets/owned/{id} | A street you own: tenants, applications, upkeep, look, fund.
[**getWorldStreetTrespassBarrier()**](WorldApi.md#getWorldStreetTrespassBarrier) | **GET** /v1/world/streets/{slug}/trespass-barriers | Plot numbers on the street you are trespassed from.
[**getWorldTrialLeaderboard()**](WorldApi.md#getWorldTrialLeaderboard) | **GET** /v1/world/trials/{course}/leaderboard | A Time Trials course&#39;s boards, as the board beside it in the Commons shows them: data.course, week, weekly (this week&#39;s ten fastest: rank, name, short, named, ms, at) and allTime (the ten fastest ever, each person once). A name shows only for somebody who chose to be seen by name in the world; everyone else is \&quot;A player\&quot;. 404 for an unknown course; course 1 is commons-loop.
[**getWorldTrialMine()**](WorldApi.md#getWorldTrialMine) | **GET** /v1/world/trials/mine | Your Hoverboard Time Trials bests: data.week (its Monday, YYYY-MM-DD, UTC) and courses, each with course (id, name, parMs, rings, lengthM), week (your best lap this week in ms, your place on the weekly board, laps finished, and the split at each ring) or null, and allTime (your best ever in ms, your place on the all-time board, when) or null. Laps are timed by Crossly from where it saw you ride in the world; nothing here writes one.
[**getWorldVenueQuote()**](WorldApi.md#getWorldVenueQuote) | **GET** /v1/world/venues/{id}/quote | What a hall costs for those days (startsOn, endsOn), the full-refund date, and whether it is free.
[**getWorldWallet()**](WorldApi.md#getWorldWallet) | **GET** /v1/world/wallet | Every balance you hold in Crossly World, read-only: bucksCents (Crossly Bucks, cents); cbx (available, decimals, and the three CBX balances kept apart as base-unit STRINGS -- granted (spend here only), earned (withdrawable once matured), connected (a delegation ceiling on your own wallet, not cash on hand) -- plus pendingCents of cashback not yet matured); cosm (available, decimals, baseUnits string). available:false means that currency is not provisioned on this deployment, not that you hold none.
[**getWorldWish()**](WorldApi.md#getWorldWish) | **GET** /v1/world/wishes | The Wishing Fountain in the Commons: data.day (today, UTC), today (wishes everyone has made today) and mine (madeToday, days -- how many days you have wished on, the Wishmaker pin comes at 7 -- and nextAt, when tomorrow&#39;s wish opens). One wish a day; a wish is made by tossing a coin at the fountain in Crossly World, never over the API, and nothing is spent.
[**getWorldWorkEarning()**](WorldApi.md#getWorldWorkEarning) | **GET** /v1/world/work/earnings | What your shifts paid, by rail.
[**getWorldWorkMine()**](WorldApi.md#getWorldWorkMine) | **GET** /v1/world/work/mine | Where you work: your seats, applications and your teams’ open jobs.
[**listGameCoupons()**](WorldApi.md#listGameCoupons) | **GET** /v1/games/coupons | Your fee-back coupons from house-game wins: Bucks paid out of the fee on your next market purchase.
[**listShowroomItemSearch()**](WorldApi.md#listShowroomItemSearch) | **GET** /v1/showrooms/{id}/item-search | Search this store&#39;s in-stock items (title, brand, SKU) to put on a fixture or in a window slot; each with listed / passport / multi_unit badges.
[**listShowrooms()**](WorldApi.md#listShowrooms) | **GET** /v1/showrooms | Your store&#39;s showrooms, primary first: name, visibility, auto-include, pinned items, fixtures, billing and the plots each stands on.
[**listSpatialLeases()**](WorldApi.md#listSpatialLeases) | **GET** /v1/spatial/leases | Plots offered for lease on every street, cheapest first: address, weekly rent and maintenance in CENTS.
[**listSpatialSceneGrants()**](WorldApi.md#listSpatialSceneGrants) | **GET** /v1/spatial/scenes/{id}/grants | Everyone who can currently walk into one of your rooms, and unused invites. Never returns codes.
[**listSpatialSceneWarehouseUnplaced()**](WorldApi.md#listSpatialSceneWarehouseUnplaced) | **GET** /v1/spatial/scenes/{id}/warehouse/unplaced | Stock not yet on a shelf in a warehouse room you can arrange (q filters by title).
[**listSpatialSharedWithMe()**](WorldApi.md#listSpatialSharedWithMe) | **GET** /v1/spatial/shared-with-me | Rooms other people let you into.
[**listSpatialStreetLeases()**](WorldApi.md#listSpatialStreetLeases) | **GET** /v1/spatial/streets/{slug}/leases | Plots on a street offered for lease: weekly rent in CENTS and terms.
[**listWorldAttendantUsage()**](WorldApi.md#listWorldAttendantUsage) | **GET** /v1/world/attendant/usage | Your AI attendant’s usage log.
[**listWorldAvatarCloset()**](WorldApi.md#listWorldAvatarCloset) | **GET** /v1/world/avatar/closet | Everything you can verifiably wear (your Crossly purchase receipts), newest first: receiptId, item title, brand, size, image, catalog sku/variant, quantity, purchasedAt. Pass a receiptId to POST /v1/world/avatar/equip to put one on. limit 1-200, offset for paging.
[**listWorldAvatarStock()**](WorldApi.md#listWorldAvatarStock) | **GET** /v1/world/avatar/stock | Items of your OWN inventory you could wear into a room as a walking storefront: inventoryItemId, title, image and the slot it would go on. Pass an inventoryItemId to POST /v1/world/avatar/equip.
[**listWorldAvatarWearables()**](WorldApi.md#listWorldAvatarWearables) | **GET** /v1/world/avatar/wearables | Wearables you have authored as a designer: id, sku, name, slot, priceBaseUnits (COSM base units, a string), maxSupply, mintedCount, active (false until reviewed). meta.available is false when COSM is not provisioned here.
[**listWorldBestDressed()**](WorldApi.md#listWorldBestDressed) | **GET** /v1/world/best-dressed | This week&#39;s best-dressed board (Monday-based), top ten: name, profile username and loves. Only people still choosing to be seen by name.
[**listWorldCapabilityDeclarations()**](WorldApi.md#listWorldCapabilityDeclarations) | **GET** /v1/world/capabilities/declarations | Your capability declarations, in every review state (pending, live, rejected with the note from the reviewer).
[**listWorldContestStandings()**](WorldApi.md#listWorldContestStandings) | **GET** /v1/world/contests/{id}/standings | The standings of a contest now: best score first (or lowest, for a time game), ties to whoever got there first.
[**listWorldContests()**](WorldApi.md#listWorldContests) | **GET** /v1/world/contests | Open skill contests on Crossly World games, soonest ending first: entry mode (free, sponsored, paid) and prizes.
[**listWorldConventionExhibitors()**](WorldApi.md#listWorldConventionExhibitors) | **GET** /v1/world/conventions/{id}/exhibitors | The host roster: who applied, who was invited, who is coming (by shop handle). Host only; 404 otherwise.
[**listWorldConventionMessages()**](WorldApi.md#listWorldConventionMessages) | **GET** /v1/world/conventions/{id}/messages | Convention messages you may read: the organiser all of them (?with&#x3D;&lt;userId&gt; for one seller), an exhibitor theirs and the broadcasts.
[**listWorldConventionMine()**](WorldApi.md#listWorldConventionMine) | **GET** /v1/world/conventions/mine | Conventions you host and conventions you are exhibiting at.
[**listWorldConventions()**](WorldApi.md#listWorldConventions) | **GET** /v1/world/conventions | Conventions open to sellers now or soon: title, room, dates, and how to get a table (invite, free, fee or revenue share).
[**listWorldCosmCosmetics()**](WorldApi.md#listWorldCosmCosmetics) | **GET** /v1/world/cosm/cosmetics | The active cosmetics catalogue, optionally by tier (premium | earned | stake_exclusive) or slot: sku, name, slot, tier, priceCents (premium only), priceBaseUnits (earned only, COSM base units string), supply, fusable, preview and what it unlocks. Read-only: cosmetics are bought on crossly.net. meta.available / meta.decimals.
[**listWorldCosmDesigns()**](WorldApi.md#listWorldCosmDesigns) | **GET** /v1/world/cosm/designs | Your COSM designs in the world: popularity toward the free chain unlock a popular limited design earns, whether it is on chain, and your opt-out. Declare what a design does with chain cosm and the design id as the contract.
[**listWorldCosmInventory()**](WorldApi.md#listWorldCosmInventory) | **GET** /v1/world/cosm/inventory | Cosmetics you hold, newest first: ownershipId, cosmeticId, sku, name, slot, tier, how it was acquired, bound, edition number, acquiredAt and what it unlocks. Pass a cosmeticId to POST /v1/world/avatar/equip to wear one. meta.available.
[**listWorldDecorCatalogue()**](WorldApi.md#listWorldDecorCatalogue) | **GET** /v1/world/decor/catalogue | The Decor Shop: every active cosmetic grouped by surface (avatar | home | shop | stall | street) and slot -- name, tier, priceCents (premium: the dollar price, paid in CBX at spot) or priceBaseUnits (earned: COSM, base-unit string), edition supply and remaining, tint swatch, preview, what it unlocks, owned + your edition number, and buyWith. Read-only: buying and minting happen on crossly.net/shop/decor. meta.available, meta.mint {open, reason}, meta.cbx {open, reason} (CBX opens at mint), meta.balances (your COSM and CBX, base-unit strings), meta.surfaces. Never sold by card.
[**listWorldDecorDesigns()**](WorldApi.md#listWorldDecorDesigns) | **GET** /v1/world/decor/designs | Your decor designs and their review state. available is false until COSM is provisioned.
[**listWorldDecorInventory()**](WorldApi.md#listWorldDecorInventory) | **GET** /v1/world/decor/inventory | Your decor as an INVENTORY. Decor is a quantity: every copy is one unit -- a placed prop (home_prop, prop) uses one per placement, a finish (wallpaper, floor, theme, shopfront, facade, sign style, street lamp/banner/paving/arch, booth canopy/pattern/lights/counter) one per space it dresses; free values are unlimited. Per item: key, value, pair (key:value), name, sku, surface, placeable, tint, owned, placed, available, placements [{ space { kind: home | shop | stall | street, id, name }, count }], copies [{ ownershipId, editionNumber }]. meta.available, meta.spaces (every space you dress). Read-only: placing and retracting happen in the app or on crossly.net.
[**listWorldDecorMarket()**](WorldApi.md#listWorldDecorMarket) | **GET** /v1/world/decor/market | Decor copies other people are reselling (asks in COSM); optional pair filter. Read only: listing and buying stay on crossly.net.
[**listWorldDecorMine()**](WorldApi.md#listWorldDecorMine) | **GET** /v1/world/decor/mine | Decor you hold AND decor you have minted to your wallet, newest first: ownershipId, cosmeticId, sku, name, surface, slot, tier, acquiredVia, bound, editionNumber of maxSupply, mintState (held | minting | minted), mintAddress, mintable, and what it unlocks. meta.available, meta.mint.
[**listWorldDecorStalls()**](WorldApi.md#listWorldDecorStalls) | **GET** /v1/world/decor/stalls | Your stall bookings, to dress their booths.
[**listWorldDecorStreets()**](WorldApi.md#listWorldDecorStreets) | **GET** /v1/world/decor/streets | Streets you may dress.
[**listWorldDms()**](WorldApi.md#listWorldDms) | **GET** /v1/world/dms | Your friends (mutual follows) for direct messages: each with userId, name, the last line between you (text, at, mine) or null, and how many of theirs you have not read; most recent first.
[**listWorldFollowingRooms()**](WorldApi.md#listWorldFollowingRooms) | **GET** /v1/world/following/rooms | The public rooms of people you follow, to walk into.
[**listWorldFollows()**](WorldApi.md#listWorldFollows) | **GET** /v1/world/follows | Everybody you follow in Crossly World, newest first, each with mutual: true when they follow you back (a friend).
[**listWorldFriendHere()**](WorldApi.md#listWorldFriendHere) | **GET** /v1/world/friends/here | Your friends in Crossly World right now, and where (when they share it).
[**listWorldFriends()**](WorldApi.md#listWorldFriends) | **GET** /v1/world/friends | Your friends (mutual follows), each with the PUBLIC room they are in right now when they chose to be seen by name there (else null), and their home address slug when they let friends visit. Invisible and anonymous friends are never located.
[**listWorldGamePackageReceipts()**](WorldApi.md#listWorldGamePackageReceipts) | **GET** /v1/world/games/packages/{id}/receipts | Store sales of one of your game packages, newest first: item, price paid, edition, when. Never who bought. Cursor-paged: pass pagination.nextCursor back as ?cursor&#x3D;.
[**listWorldGamePackages()**](WorldApi.md#listWorldGamePackages) | **GET** /v1/world/games/packages | Your game packages, each with its latest version and review state.
[**listWorldGameRewards()**](WorldApi.md#listWorldGameRewards) | **GET** /v1/world/games/rewards | Rewards you won in games: granted, or recorded as unfunded for COSM and CBX (a game prints no value).
[**listWorldGames()**](WorldApi.md#listWorldGames) | **GET** /v1/world/games | The Game Directory: every live, reviewed game package with its players, places, rewards, contests and the piece people place.
[**listWorldHomeBuilding()**](WorldApi.md#listWorldHomeBuilding) | **GET** /v1/world/home/building | Homes whose owner made you a co-builder.
[**listWorldInteractiveCatalogue()**](WorldApi.md#listWorldInteractiveCatalogue) | **GET** /v1/world/interactive/catalogue | Interactive objects: every piece that runs a shared script in a room (first-party and approved creator designs). Per item: model (the piece key a home layout or boutique prop stores), decorValue (the home_prop value its SKU claims), source (first_party | creator), name, blurb, size [x, z] metres, fallbackMesh, cosmeticId (the SKU on the Decor Shop, null when not on sale) and version (a creator design: the approved version every copy runs). Read-only: buying is on crossly.net/shop/decor.
[**listWorldInteractiveDesigns()**](WorldApi.md#listWorldInteractiveDesigns) | **GET** /v1/world/interactive/designs | Your interactive-object designs (MML documents you wrote), newest first: id, handle, name, footprint (s | m | l | f), tint, priceBaseUnits (COSM, base-unit string), maxSupply, model, decorValue, cosmeticId, liveVersion (the approved version every copy runs; null &#x3D; none), withdrawnReason, archivedAt (you archived it: off sale, owned copies keep running; null &#x3D; not archived), latestVersion { version, state: pending | approved | rejected | withdrawn | cancelled, decisionNote }, inReview. &#x60;archived&#x60;: exclude (default), include or only archived designs. Read-only: writing, previewing, submitting and archiving happen in the Creator Studio on crossly.net (/studio/creator/creations/interactive/new/edit).
[**listWorldJobBoard()**](WorldApi.md#listWorldJobBoard) | **GET** /v1/world/jobs/board | The public Job Board, filterable.
[**listWorldJobPosted()**](WorldApi.md#listWorldJobPosted) | **GET** /v1/world/jobs/posted | Shifts you posted for your rooms, with who claimed each and how it went.
[**listWorldMarket()**](WorldApi.md#listWorldMarket) | **GET** /v1/world/market | Plots and streets for sale or rent in the Worlds Market.
[**listWorldMarketStreetSigns()**](WorldApi.md#listWorldMarketStreetSigns) | **GET** /v1/world/market/streets/{slug}/signs | The street&#39;s for-sale and for-rent boards.
[**listWorldOutfits()**](WorldApi.md#listWorldOutfits) | **GET** /v1/world/outfits | Your saved outfits (up to 6, oldest first): id, name, appearance (skin, hair, hairColour, eyes, build) and items -- each worn thing as the door it goes back on by (slot, door: cosmetic | receipt | stock, id, label). Put one on with POST /v1/world/outfits/:id/apply.
[**listWorldPlaceBans()**](WorldApi.md#listWorldPlaceBans) | **GET** /v1/world/places/{slug}/bans | Who is banned from a place you own (your boutique or home).
[**listWorldPlaceBundles()**](WorldApi.md#listWorldPlaceBundles) | **GET** /v1/world/places/{slug}/bundles | The owner&#39;s bundle deals mapped onto this room&#39;s items (itemIds null &#x3D; any N from the shop). The discount is decided at checkout.
[**listWorldPlaceCollections()**](WorldApi.md#listWorldPlaceCollections) | **GET** /v1/world/places/{slug}/collections | The owner&#39;s collection rooms: one per category, brand and model they collect.
[**listWorldPlaceOffers()**](WorldApi.md#listWorldPlaceOffers) | **GET** /v1/world/places/{slug}/offers | What is for sale in a public room: price, condition and stock, with market references. 404 when no such room is shared.
[**listWorldPlaceRadar()**](WorldApi.md#listWorldPlaceRadar) | **GET** /v1/world/places/{slug}/radar | What you have that someone here wants, and what is here that you want: matched on catalog ids.
[**listWorldPlaceTradeTables()**](WorldApi.md#listWorldPlaceTradeTables) | **GET** /v1/world/places/{slug}/trade-tables | The open trade tables in a place: who is sitting and what is laid on the mat.
[**listWorldPlaceTrades()**](WorldApi.md#listWorldPlaceTrades) | **GET** /v1/world/places/{slug}/trades | Items in this room open to trades, each with its trade post path.
[**listWorldPromoted()**](WorldApi.md#listWorldPromoted) | **GET** /v1/world/promoted | Promoted places in Crossly World: boosted showrooms and conventions (Sponsored, labelled \&quot;Promoted\&quot;), with the token to send when one is opened.
[**listWorldPropertyPlots()**](WorldApi.md#listWorldPropertyPlots) | **GET** /v1/world/property/plots | Plots your store owns or rents.
[**listWorldPropertyRentals()**](WorldApi.md#listWorldPropertyRentals) | **GET** /v1/world/property/rentals | Plots you rent out.
[**listWorldPropertyRenting()**](WorldApi.md#listWorldPropertyRenting) | **GET** /v1/world/property/renting | Plots you rent.
[**listWorldPropertyTrespassed()**](WorldApi.md#listWorldPropertyTrespassed) | **GET** /v1/world/property/trespassed | People your store has banned, owner-wide or from one showroom.
[**listWorldProvenance()**](WorldApi.md#listWorldProvenance) | **GET** /v1/world/provenance | Provenance trails: where in Crossly World your purchases were found, newest first (optionally ?listingIds&#x3D;a,b -- platform listing ids). data: [{ platformListingId, slug (the listing public slug), kind (room | window | stall | space | drop | auction | worn | agent), place (its name, or null when gone), at, line -- e.g. \&quot;Found at The Sneaker Vault, Oct 2026\&quot; }]. Yours only.
[**listWorldQuests()**](WorldApi.md#listWorldQuests) | **GET** /v1/world/quests | Every world quest with your progress: key, the pin it earns, goal, target, count, done, colour. meta.wearing is the pin on your nameplate (or null); meta.streak your current and best daily visit streak. Progress only comes from what the server saw -- there is no write of it.
[**listWorldSpaceMine()**](WorldApi.md#listWorldSpaceMine) | **GET** /v1/world/spaces/mine | Spaces you belong to.
[**listWorldSpaceRequests()**](WorldApi.md#listWorldSpaceRequests) | **GET** /v1/world/spaces/{slug}/requests | As host or co-host, who asked to join.
[**listWorldSpaceWhatsOn()**](WorldApi.md#listWorldSpaceWhatsOn) | **GET** /v1/world/spaces/whats-on | Live and upcoming events across Spaces (streets&#x3D;1 and stage&#x3D;1 add street and Main Stage events).
[**listWorldSpaces()**](WorldApi.md#listWorldSpaces) | **GET** /v1/world/spaces | The Spaces directory: seller-hosted clubs with a venue, members and events (optional venue filter).
[**listWorldStaffApplicants()**](WorldApi.md#listWorldStaffApplicants) | **GET** /v1/world/staff/applicants | Who applied to your postings, with their worker reputation.
[**listWorldStaffPeople()**](WorldApi.md#listWorldStaffPeople) | **GET** /v1/world/staff/people | Everyone working for you: your Settings team and public workers, with their seats.
[**listWorldStaffPlaces()**](WorldApi.md#listWorldStaffPlaces) | **GET** /v1/world/staff/places | The showrooms, stalls and conventions a job can be posted at, and the pay rails that are live.
[**listWorldStaffPostings()**](WorldApi.md#listWorldStaffPostings) | **GET** /v1/world/staff/postings | Your job postings, with their upcoming shifts.
[**listWorldStaffShifts()**](WorldApi.md#listWorldStaffShifts) | **GET** /v1/world/staff/shifts | Your scheduled seats and who is on them.
[**listWorldStreaks()**](WorldApi.md#listWorldStreaks) | **GET** /v1/world/streaks | The longest current daily visit streaks (2+ days), top ten: name and days. Only people still choosing to be seen by name.
[**listWorldTradeMine()**](WorldApi.md#listWorldTradeMine) | **GET** /v1/world/trades/mine | Your trades and each item progress through the authentication gate (verified or failed).
[**listWorldTradeTableBinder()**](WorldApi.md#listWorldTradeTableBinder) | **GET** /v1/world/trade-tables/binder | Your binder: unsold collection rows that are catalog items and may be laid on a trade mat -- key, variantId, condition, grade, portfolioId, name, image and valueCents (market value, cents).
[**listWorldTradeTableListings()**](WorldApi.md#listWorldTradeTableListings) | **GET** /v1/world/trade-tables/listings | Your open Trade Block trade listings a trade table can be opened on in the world, each with its items&#39; names.
[**listWorldVenues()**](WorldApi.md#listWorldVenues) | **GET** /v1/world/venues | The Convention Center halls for rent: size, floor, booths, price per day, and the days already taken (from, to).
[**updateShowroom()**](WorldApi.md#updateShowroom) | **PUT** /v1/showroom | Replace the whole showroom layout (room, fixtures, placements, settings). Validated as a whole: every item must be this store&#39;s, every pin must fit its fixture, no two pins share a slot. Send If-Match (or expectedVersion) to refuse with 409 version_conflict if it changed meanwhile.
[**updateShowroom2()**](WorldApi.md#updateShowroom2) | **PATCH** /v1/showroom | Apply showroom ops in order, all or nothing: place, move, remove, fill (from a category / tag / brand / collection / search, in price, age, value or title order), sort, clear, add_fixture, update_fixture, remove_fixture, set_room, set_settings. Idempotent; refusals name the op (details.opIndex) with codes slot_occupied, item_not_in_store, fixture_capacity, unknown_fixture, unknown_display, version_conflict.
[**updateShowroom3()**](WorldApi.md#updateShowroom3) | **PATCH** /v1/showrooms/{id} | Apply ops to one showroom in order, all or nothing (the same ops as PATCH /api/v1/showroom).
[**updateShowroomById()**](WorldApi.md#updateShowroomById) | **PUT** /v1/showrooms/{id} | Replace one showroom&#39;s whole layout. If-Match (or expectedVersion) refuses with 409 version_conflict on a concurrent edit.
[**updateSpatialSceneCosmetic()**](WorldApi.md#updateSpatialSceneCosmetic) | **PATCH** /v1/spatial/scenes/{id}/cosmetics | Redecorate one of your rooms (wall, floor, lighting, trim...). Unknown keys are dropped; the response is what survived. &#x60;clear&#x60; lists keys to reset.
[**updateSpatialSceneNode()**](WorldApi.md#updateSpatialSceneNode) | **PATCH** /v1/spatial/scenes/{id}/nodes/{nodeId} | Move a rack in one of your warehouse rooms (position in metres).
[**updateSpatialSceneSetting()**](WorldApi.md#updateSpatialSceneSetting) | **PATCH** /v1/spatial/scenes/{id}/settings | How one of your rooms is laid out and lit: grouping and sort keys, theme, overlay and the arrival camera. Cosmetics and the shop layout have their own writers.
[**updateSpatialSceneShopLayout()**](WorldApi.md#updateSpatialSceneShopLayout) | **PUT** /v1/spatial/scenes/{id}/shop/layout | Save your shop room&#39;s sections and displays (validated server-side; the response is the stored layout).
[**updateSpatialSceneWindow()**](WorldApi.md#updateSpatialSceneWindow) | **PUT** /v1/spatial/scenes/{id}/window | Choose up to three of your live Crossly listings for the street window of your shop, in slot order. Picks that sell drop out and the newest fill in; an empty list goes back to newest first.
[**updateSpatialStreetDecor()**](WorldApi.md#updateSpatialStreetDecor) | **PUT** /v1/spatial/streets/{slug}/decor | Dress a street you own with decor you hold (validated against your inventory).
[**updateSpatialStreetOwned()**](WorldApi.md#updateSpatialStreetOwned) | **PATCH** /v1/spatial/streets/owned/{id} | Who may open a shop on a street you own (open, apply or invite).
[**updateWorldAttendant()**](WorldApi.md#updateWorldAttendant) | **PUT** /v1/world/attendant | Create or replace your AI attendant (BYOK: switching it on needs your AI key).
[**updateWorldAvatarIdentity()**](WorldApi.md#updateWorldAvatarIdentity) | **PUT** /v1/world/avatar/identity | Choose named or anonymous. Rooms you are already in keep the old answer until you rejoin.
[**updateWorldAvatarLook()**](WorldApi.md#updateWorldAvatarLook) | **PUT** /v1/world/avatar/look | Save your world look to the account, so every device starts from it. look: null stays anonymous. appearance.outfit &#x3D; { top, outer, bottom, shoes, hat } picks the basic outfit (GET /v1/world/avatar/basics).
[**updateWorldAvatarNftBadge()**](WorldApi.md#updateWorldAvatarNftBadge) | **PUT** /v1/world/avatar/nft-badge | Wear an NFT you hold on your nameplate (null to take it off). Checked again each time you join a room.
[**updateWorldCapabilityWear()**](WorldApi.md#updateWorldCapabilityWear) | **PUT** /v1/world/capabilities/wear | Wear a held token on an avatar slot (refId from GET /v1/world/capabilities), or pass refId null to take it off. Its collection must declare a wear capability for that slot.
[**updateWorldCollectionCapability()**](WorldApi.md#updateWorldCollectionCapability) | **PUT** /v1/world/collections/{chain}/{contract}/capabilities | Declare what the tokens of a collection can do (the whole declaration, spec crossly.nft-capabilities/1). As its creator (launched on Crossly or claimed) any kind; as a holder, cosmetic kinds only. Replaces your previous declaration; pending if it names an uploaded asset or an always-reviewed kind.
[**updateWorldControl()**](WorldApi.md#updateWorldControl) | **PUT** /v1/world/controls | Save your world controls settings to the account (any subset of prefs; out-of-range values take the default) and/or mark the controls tutorial seen.
[**updateWorldConventionHall()**](WorldApi.md#updateWorldConventionHall) | **PUT** /v1/world/conventions/{id}/hall | Save the hall design: { doc, expectedVersion }. Refused on overlaps, narrow aisles, too many booths or a booth with a seller removed.
[**updateWorldConventionMyBooth()**](WorldApi.md#updateWorldConventionMyBooth) | **PUT** /v1/world/conventions/{id}/my-booth | Pick what your booth shows: { listingIds } — any of your live listings, up to the tier’s capacity.
[**updateWorldConventionStatus()**](WorldApi.md#updateWorldConventionStatus) | **PUT** /v1/world/conventions/{id}/status | Open, start, end or cancel a convention you host.
[**updateWorldCosmDesignChainAutoUnlock()**](WorldApi.md#updateWorldCosmDesignChainAutoUnlock) | **PUT** /v1/world/cosm/designs/{id}/chain-auto-unlock | Opt one of your COSM designs in or out of the free chain unlock it earns when popular (on by default). Answers its popularity.
[**updateWorldEmoteWheel()**](WorldApi.md#updateWorldEmoteWheel) | **PUT** /v1/world/emotes/wheel | Arrange your emote wheel: up to 8 slots, each an emote id, a moment slot or null. Returns the saved wheel (locked or unknown ids are dropped).
[**updateWorldFitValueShare()**](WorldApi.md#updateWorldFitValueShare) | **PUT** /v1/world/fit-value/share | Whether people in a room can see what your outfit is worth.
[**updateWorldHome()**](WorldApi.md#updateWorldHome) | **PATCH** /v1/world/home | Your home: privacy (open, friends, private), theme, and wall, floor and mood decor you hold.
[**updateWorldHomeBuilder()**](WorldApi.md#updateWorldHomeBuilder) | **PUT** /v1/world/home/builders | Set the co-builders of your home: { userIds } -- friends (mutual follows) only, at most 4, replacing the list ([] clears it). They may rearrange your home in the world with your things and add free furniture, never your bought pieces. New co-builders get a world notice.
[**updateWorldHomeLayout()**](WorldApi.md#updateWorldHomeLayout) | **PUT** /v1/world/home/layout | Arrange your home: the full layout (up to 200 pieces you own), validated server-side.
[**updateWorldHomeLayoutBySlug()**](WorldApi.md#updateWorldHomeLayoutBySlug) | **PUT** /v1/world/homes/{slug}/layout | Rearrange a home you co-build (never adding the owner bought pieces).
[**updateWorldInteractiveDesignDraft()**](WorldApi.md#updateWorldInteractiveDesignDraft) | **PUT** /v1/world/interactive/designs/{id}/draft | Save the draft MML source (up to 64 KB); the response carries its static check.
[**updateWorldListingHoldersOnly()**](WorldApi.md#updateWorldListingHoldersOnly) | **PUT** /v1/world/listings/{id}/holders-only | Reserve one of your listings for holders of a collection you declared a holders_only perk for (or release it). Checkout refuses anybody else.
[**updateWorldOutfit()**](WorldApi.md#updateWorldOutfit) | **PATCH** /v1/world/outfits/{id} | Rename a saved look: { name (1-32 chars) }. 404 when it is not yours.
[**updateWorldPetActive()**](WorldApi.md#updateWorldPetActive) | **PUT** /v1/world/pets/active | Walk one of your pets with you in the world, or none (kind: null).
[**updateWorldPropertyPlotPhoto()**](WorldApi.md#updateWorldPropertyPlotPhoto) | **PUT** /v1/world/property/plots/{plotId}/photo | Store a plot&#39;s photo: an image of its frontage you uploaded through POST .../photo/upload-url, a render (buildKey must be the plot&#39;s current one) or an in-world capture.
[**updateWorldPropertyRenting()**](WorldApi.md#updateWorldPropertyRenting) | **PATCH** /v1/world/property/renting/{leaseId} | Turn weekly autopay on or off (card leases).
[**updateWorldQuestPin()**](WorldApi.md#updateWorldQuestPin) | **PUT** /v1/world/quests/pin | Wear a pin you EARNED from a quest on your nameplate, or { pin: null } to wear none. 403 for a pin you have not earned. Shows from the next room you walk into.
[**updateWorldRoomHolderGate()**](WorldApi.md#updateWorldRoomHolderGate) | **PUT** /v1/world/rooms/{id}/holder-gate | Make your room holders-only (its collection rooms follow). Send null to open it again. Returns &#x60;{ gate }&#x60;.
[**updateWorldSpace()**](WorldApi.md#updateWorldSpace) | **PATCH** /v1/world/spaces/{slug} | As host, change a Space name, about or membership.
[**updateWorldSpaceHolderGate()**](WorldApi.md#updateWorldSpaceHolderGate) | **PUT** /v1/world/spaces/{slug}/holder-gate | Make your Space holders-only: only holders of an NFT collection join it (others can look in). Send null to open it again. Returns &#x60;{ gate }&#x60;.
[**updateWorldStaffPosting()**](WorldApi.md#updateWorldStaffPosting) | **PUT** /v1/world/staff/postings/{id} | Replace a posting; its future unstaffed shifts are re-made.
[**updateWorldStallBookingBooth()**](WorldApi.md#updateWorldStallBookingBooth) | **PUT** /v1/world/stalls/bookings/{id}/booth | Dress the booth of a stall you booked (decor you hold).
[**updateWorldStreetOwnedTheme()**](WorldApi.md#updateWorldStreetOwnedTheme) | **PUT** /v1/world/streets/owned/{id}/theme | Set your street&#39;s theme.


## `createGamePackBreak()`

```php
createGamePackBreak(): \Crossly\Model\Game\CreateGamePackBreakResponse
```

Pack Break: your open pack of five real market pieces, or a fresh one. No prices until you pick.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createGamePackBreak();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->createGamePackBreak: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Game\CreateGamePackBreakResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createGamePackBreakPick()`

```php
createGamePackBreakPick($id): \Crossly\Model\Game\CreateGamePackBreakPickResponse
```

Pick the pull you think is worth the most: every lowest open ask is revealed, and a win earns a fee-back coupon.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createGamePackBreakPick($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->createGamePackBreakPick: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Game\CreateGamePackBreakPickResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createShowroom()`

```php
createShowroom($storefront_id): \Crossly\Model\Showroom\CreateShowroomResponse
```

Add a showroom. The first is included; an extra one has a monthly fee and is added in the dashboard (402 world_payment_failed here).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$storefront_id = 'storefront_id_example'; // string | Which store (else X-Storefront-Id, else your default store).

try {
    $result = $apiInstance->createShowroom($storefront_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->createShowroom: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_id** | **string**| Which store (else X-Storefront-Id, else your default store). | [optional]

### Return type

**\Crossly\Model\Showroom\CreateShowroomResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createShowroomPlacement()`

```php
createShowroomPlacement($id, $storefront_id): \Crossly\Model\Showroom\CreateShowroomPlacementResponse
```

Stand a showroom on a plot your store owns or rents (403 when it does not; 409 when another showroom stands there).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$storefront_id = 'storefront_id_example'; // string | Which store (else X-Storefront-Id, else your default store).

try {
    $result = $apiInstance->createShowroomPlacement($id, $storefront_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->createShowroomPlacement: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **storefront_id** | **string**| Which store (else X-Storefront-Id, else your default store). | [optional]

### Return type

**\Crossly\Model\Showroom\CreateShowroomPlacementResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createSpatialInviteAccept()`

```php
createSpatialInviteAccept(): \Crossly\Model\Spatial\CreateSpatialInviteAcceptResponse
```

Redeem an invite code (dashes optional); returns the room it opens.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createSpatialInviteAccept();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->createSpatialInviteAccept: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Spatial\CreateSpatialInviteAcceptResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createSpatialPropertyLeaseWithdraw()`

```php
createSpatialPropertyLeaseWithdraw($id): \Crossly\Model\Dao\DeleteDaoProposalResponse
```

Withdraw a lease offer nobody has accepted yet.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createSpatialPropertyLeaseWithdraw($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->createSpatialPropertyLeaseWithdraw: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Dao\DeleteDaoProposalResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createSpatialScene()`

```php
createSpatialScene($create_spatial_scene_request): \Crossly\Model\Common\SpatialSceneResponse
```

Start a 3D room: a collection (your items on shelves) or a warehouse (racks you arrange). Private until you make it public.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_spatial_scene_request = new \Crossly\Model\Spatial\CreateSpatialSceneRequest(); // \Crossly\Model\Spatial\CreateSpatialSceneRequest

try {
    $result = $apiInstance->createSpatialScene($create_spatial_scene_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->createSpatialScene: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_spatial_scene_request** | **\Crossly\Model\Spatial\CreateSpatialSceneRequest**|  |

### Return type

**\Crossly\Model\Common\SpatialSceneResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createSpatialSceneGrant()`

```php
createSpatialSceneGrant($id): \Crossly\Model\Spatial\CreateSpatialSceneGrantResponse
```

Let a specific user into one of your rooms (visitor or staff), no code needed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createSpatialSceneGrant($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->createSpatialSceneGrant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Spatial\CreateSpatialSceneGrantResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createSpatialSceneInvite()`

```php
createSpatialSceneInvite($id): \Crossly\Model\Spatial\CreateSpatialSceneInviteResponse
```

Mint an invite code to one of your rooms (visitor or staff, optional expiry in hours). The code is in this response only: just its hash is stored.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createSpatialSceneInvite($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->createSpatialSceneInvite: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Spatial\CreateSpatialSceneInviteResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createSpatialSceneNode()`

```php
createSpatialSceneNode($id): \Crossly\Model\Spatial\CreateSpatialSceneNodeResponse
```

Add a unit (rack, shelf, bin) to one of your warehouse rooms.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createSpatialSceneNode($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->createSpatialSceneNode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Spatial\CreateSpatialSceneNodeResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createSpatialScenePlace()`

```php
createSpatialScenePlace($id): \Crossly\Model\Spatial\CreateSpatialScenePlaceResponse
```

Pin an inventory item to a slot in one of your rooms: by warehouse nodeId, or by a collection container key and index.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createSpatialScenePlace($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->createSpatialScenePlace: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Spatial\CreateSpatialScenePlaceResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createSpatialSceneRename()`

```php
createSpatialSceneRename($id, $create_spatial_scene_rename_request): \Crossly\Model\Common\SpatialSceneResponse
```

Rename one of your rooms.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$create_spatial_scene_rename_request = new \Crossly\Model\Spatial\CreateSpatialSceneRenameRequest(); // \Crossly\Model\Spatial\CreateSpatialSceneRenameRequest

try {
    $result = $apiInstance->createSpatialSceneRename($id, $create_spatial_scene_rename_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->createSpatialSceneRename: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **create_spatial_scene_rename_request** | **\Crossly\Model\Spatial\CreateSpatialSceneRenameRequest**|  |

### Return type

**\Crossly\Model\Common\SpatialSceneResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createSpatialSceneShopPlace()`

```php
createSpatialSceneShopPlace($id): \Crossly\Model\Spatial\CreateSpatialSceneShopPlaceResponse
```

Place an inventory item in a section and display of your shop room.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createSpatialSceneShopPlace($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->createSpatialSceneShopPlace: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Spatial\CreateSpatialSceneShopPlaceResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createSpatialSceneUnpin()`

```php
createSpatialSceneUnpin($id): \Crossly\Model\Spatial\DeleteSpatialSceneNodeResponse
```

Clear every pin in one of your rooms, so it arranges itself again.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createSpatialSceneUnpin($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->createSpatialSceneUnpin: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Spatial\DeleteSpatialSceneNodeResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createSpatialSceneVisibility()`

```php
createSpatialSceneVisibility($id, $create_spatial_scene_visibility_request): \Crossly\Model\Common\SpatialSceneResponse
```

Make one of your rooms private, unlisted (anyone with the link) or public (in the lobby and searchable).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$create_spatial_scene_visibility_request = new \Crossly\Model\Spatial\CreateSpatialSceneVisibilityRequest(); // \Crossly\Model\Spatial\CreateSpatialSceneVisibilityRequest

try {
    $result = $apiInstance->createSpatialSceneVisibility($id, $create_spatial_scene_visibility_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->createSpatialSceneVisibility: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **create_spatial_scene_visibility_request** | **\Crossly\Model\Spatial\CreateSpatialSceneVisibilityRequest**|  |

### Return type

**\Crossly\Model\Common\SpatialSceneResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createSpatialSceneWarehouseStock()`

```php
createSpatialSceneWarehouseStock($id): \Crossly\Model\Spatial\CreateSpatialScenePlaceResponse
```

Put an inventory item (or unit) on a rack in one of your warehouse rooms.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createSpatialSceneWarehouseStock($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->createSpatialSceneWarehouseStock: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Spatial\CreateSpatialScenePlaceResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createSpatialStreetApply()`

```php
createSpatialStreetApply($slug): \Crossly\Model\Spatial\CreateSpatialStreetApplyResponse
```

Ask to open your shop on a street whose owner reviews applications.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string

try {
    $result = $apiInstance->createSpatialStreetApply($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->createSpatialStreetApply: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **slug** | **string**|  |

### Return type

**\Crossly\Model\Spatial\CreateSpatialStreetApplyResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createSpatialStreetInvite()`

```php
createSpatialStreetInvite($slug): \Crossly\Model\Spatial\CreateSpatialStreetApplyResponse
```

Invite a shop (by its slug) to open on a street you own.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string

try {
    $result = $apiInstance->createSpatialStreetInvite($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->createSpatialStreetInvite: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **slug** | **string**|  |

### Return type

**\Crossly\Model\Spatial\CreateSpatialStreetApplyResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorldAttendantTestChat()`

```php
createWorldAttendantTestChat(): \Crossly\Model\World\CreateWorldAttendantTestChatResponse
```

One test answer from your AI attendant, on your own AI key (409 ai_key_required without one).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createWorldAttendantTestChat();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->createWorldAttendantTestChat: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\World\CreateWorldAttendantTestChatResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorldAvatarEquip()`

```php
createWorldAvatarEquip($create_world_avatar_equip_request): \Crossly\Model\World\CreateWorldAvatarEquipResponse
```

Wear something you already own -- exactly ONE of { cosmeticId } (a cosmetic you hold), { receiptId } (a Crossly purchase from your closet) or { inventoryItemId } (your own stock). The slot comes from the thing itself; slot is only a fallback for an item with no catalog shape. Replaces whatever was in that slot. Moves no money. Answers the slot and your loadout after the change.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_world_avatar_equip_request = new \Crossly\Model\World\CreateWorldAvatarEquipRequest(); // \Crossly\Model\World\CreateWorldAvatarEquipRequest

try {
    $result = $apiInstance->createWorldAvatarEquip($create_world_avatar_equip_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->createWorldAvatarEquip: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_world_avatar_equip_request** | **\Crossly\Model\World\CreateWorldAvatarEquipRequest**|  |

### Return type

**\Crossly\Model\World\CreateWorldAvatarEquipResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorldAvatarUnequip()`

```php
createWorldAvatarUnequip($create_world_avatar_unequip_request): \Crossly\Model\World\CreateWorldAvatarUnequipResponse
```

Take off whatever is in one slot. Idempotent: an empty slot answers removed:false. Answers your loadout after the change.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_world_avatar_unequip_request = new \Crossly\Model\World\CreateWorldAvatarUnequipRequest(); // \Crossly\Model\World\CreateWorldAvatarUnequipRequest

try {
    $result = $apiInstance->createWorldAvatarUnequip($create_world_avatar_unequip_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->createWorldAvatarUnequip: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_world_avatar_unequip_request** | **\Crossly\Model\World\CreateWorldAvatarUnequipRequest**|  |

### Return type

**\Crossly\Model\World\CreateWorldAvatarUnequipResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorldAvatarWearable()`

```php
createWorldAvatarWearable(): \Crossly\Model\World\CreateWorldAvatarWearableResponse
```

Author a wearable for a body slot (a mesh profile and params, an asking price in COSM base units as a string). A submission: inactive until an operator approves it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createWorldAvatarWearable();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->createWorldAvatarWearable: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\World\CreateWorldAvatarWearableResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorldContest()`

```php
createWorldContest(): \Crossly\Model\World\CreateWorldContestResponse
```

Set up a skill contest on a game placed in your place: title, game (its instance id), entry { mode, feeCents? }, prizes by place, funder, window, attempts. Paid entry needs the operator to allow it where it runs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createWorldContest();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->createWorldContest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\World\CreateWorldContestResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorldContestEntrySettlePayment()`

```php
createWorldContestEntrySettlePayment($id): \Crossly\Model\World\CreateWorldContestEntrySettlePaymentResponse
```

Read the fee of a paid entry back from Stripe and settle it (safe to repeat).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createWorldContestEntrySettlePayment($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->createWorldContestEntrySettlePayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\World\CreateWorldContestEntrySettlePaymentResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorldContestJoin()`

```php
createWorldContestJoin($id): \Crossly\Model\World\CreateWorldContestJoinResponse
```

Enter a contest. Free and sponsored contests take you in at once; a paid one answers a client secret to pay the entry fee.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createWorldContestJoin($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->createWorldContestJoin: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\World\CreateWorldContestJoinResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorldConvention()`

```php
createWorldConvention(): \Crossly\Model\World\CreateWorldConventionResponse
```

Host a convention in one of your rooms: title, dates, tables and how sellers get one (invite, free, a fee in cents, or a revenue share in basis points).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createWorldConvention();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->createWorldConvention: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\World\CreateWorldConventionResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorldConventionAccept()`

```php
createWorldConventionAccept($id): \Crossly\Model\World\CreateWorldConventionAcceptResponse
```

Accept: your own invitation (no body), or, as host, an application (username).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createWorldConventionAccept($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->createWorldConventionAccept: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\World\CreateWorldConventionAcceptResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorldConventionApply()`

```php
createWorldConventionApply($id): \Crossly\Model\World\CreateWorldConventionApplyResponse
```

Ask for a table at a convention.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createWorldConventionApply($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->createWorldConventionApply: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\World\CreateWorldConventionApplyResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorldConventionBoothApply()`

```php
createWorldConventionBoothApply($id): \Crossly\Model\World\CreateWorldConventionBoothApplyResponse
```

Apply for a booth tier (or book it at once in open mode): { tierId, note?, categories? }.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createWorldConventionBoothApply($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->createWorldConventionBoothApply: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\World\CreateWorldConventionBoothApplyResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorldConventionBoothFee()`

```php
createWorldConventionBoothFee($id): \Crossly\Model\World\CreateWorldConventionBoothFeeResponse
```

Pay your booth fee to the organiser on a Worlds rail: { rail: \"cash\" | \"cbx\" }. Once per booth. Full-access token and Idempotency-Key required.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createWorldConventionBoothFee($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->createWorldConventionBoothFee: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\World\CreateWorldConventionBoothFeeResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorldConventionCheckIn()`

```php
createWorldConventionCheckIn($id): \Crossly\Model\World\CreateWorldConventionCheckInResponse
```

Check in: the organiser names { exhibitorId }; an exhibitor checks themselves in with {}.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createWorldConventionCheckIn($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->createWorldConventionCheckIn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\World\CreateWorldConventionCheckInResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorldConventionFull()`

```php
createWorldConventionFull(): \Crossly\Model\World\GetWorldConventionManageResponse
```

Create a convention in full: venue + days (rented and paid now on the rail), hours, theme, booth tiers and prices, application or open booking, seller limits, promotion. Full-access token and Idempotency-Key required.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createWorldConventionFull();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->createWorldConventionFull: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\World\GetWorldConventionManageResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorldConventionInvite()`

```php
createWorldConventionInvite($id): \Crossly\Model\World\CreateWorldSpaceInviteResponse
```

Invite a seller (by shop handle) to a convention you host.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createWorldConventionInvite($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->createWorldConventionInvite: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\World\CreateWorldSpaceInviteResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorldConventionMessage()`

```php
createWorldConventionMessage($id): \Crossly\Model\World\CreateWorldConventionMessageResponse
```

Send a convention message: { body, toUserId? }. The organiser writes to one seller or every seller; an exhibitor writes to the organiser.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createWorldConventionMessage($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->createWorldConventionMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\World\CreateWorldConventionMessageResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorldConventionPaid()`

```php
createWorldConventionPaid($id): \Crossly\Model\Group\UpdateGroupBuyResponse
```

As host, record that a seller (username) paid their table fee off-platform. Moves no money.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createWorldConventionPaid($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->createWorldConventionPaid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Group\UpdateGroupBuyResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorldConventionSellerAssign()`

```php
createWorldConventionSellerAssign($id): \Crossly\Model\World\CreateWorldConventionSellerAssignResponse
```

Move an accepted seller to another booth of their tier (swaps with whoever is there): { exhibitorId, boothKey }.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createWorldConventionSellerAssign($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->createWorldConventionSellerAssign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\World\CreateWorldConventionSellerAssignResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorldConventionSellerDecide()`

```php
createWorldConventionSellerDecide($id): \Crossly\Model\World\CreateWorldConventionBoothApplyResponse
```

Approve (terms frozen, a booth assigned) or decline an application: { exhibitorId, decision }.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createWorldConventionSellerDecide($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->createWorldConventionSellerDecide: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\World\CreateWorldConventionBoothApplyResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorldConventionWithdraw()`

```php
createWorldConventionWithdraw($id): \Crossly\Model\Group\UpdateGroupBuyResponse
```

Withdraw your table or decline your invitation; as host, decline someone (username).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createWorldConventionWithdraw($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->createWorldConventionWithdraw: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Group\UpdateGroupBuyResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorldCrew()`

```php
createWorldCrew($create_world_crew_request): \Crossly\Model\World\CreateWorldCrewResponse
```

Start a crew you own: { name (2-32 chars), tag (2-5 letters or digits, shown on members' nameplates) }. Answers its id and join code. 409 when you are already in a crew.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_world_crew_request = new \Crossly\Model\World\CreateWorldCrewRequest(); // \Crossly\Model\World\CreateWorldCrewRequest

try {
    $result = $apiInstance->createWorldCrew($create_world_crew_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->createWorldCrew: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_world_crew_request** | **\Crossly\Model\World\CreateWorldCrewRequest**|  |

### Return type

**\Crossly\Model\World\CreateWorldCrewResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorldCrewChat()`

```php
createWorldCrewChat($create_world_crew_chat_request): \Crossly\Model\Common\WorldResponse
```

Say a line to your crew (body: text, up to 400 characters). Returns data.messages, the crew chat ring (the last 50 lines, kept in memory only), and data.said when your line went out; a blocked or too-quick line is dropped silently. 404 when you are in no crew.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_world_crew_chat_request = new \Crossly\Model\World\CreateWorldCrewChatRequest(); // \Crossly\Model\World\CreateWorldCrewChatRequest

try {
    $result = $apiInstance->createWorldCrewChat($create_world_crew_chat_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->createWorldCrewChat: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_world_crew_chat_request** | **\Crossly\Model\World\CreateWorldCrewChatRequest**|  |

### Return type

**\Crossly\Model\Common\WorldResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorldCrewJoin()`

```php
createWorldCrewJoin($create_world_crew_join_request): \Crossly\Model\World\CreateWorldCrewJoinResponse
```

Join a crew by the code a member gave you. 404 for an unknown code, 409 when you are already in a crew or it is full (30).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_world_crew_join_request = new \Crossly\Model\World\CreateWorldCrewJoinRequest(); // \Crossly\Model\World\CreateWorldCrewJoinRequest

try {
    $result = $apiInstance->createWorldCrewJoin($create_world_crew_join_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->createWorldCrewJoin: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_world_crew_join_request** | **\Crossly\Model\World\CreateWorldCrewJoinRequest**|  |

### Return type

**\Crossly\Model\World\CreateWorldCrewJoinResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorldCrewLeave()`

```php
createWorldCrewLeave(): \Crossly\Model\World\CreateWorldCrewLeaveResponse
```

Leave your crew. If you own it, the crew is disbanded. Idempotent: leaving when in none succeeds.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createWorldCrewLeave();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->createWorldCrewLeave: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\World\CreateWorldCrewLeaveResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorldDecorDesign()`

```php
createWorldDecorDesign(): \Crossly\Model\World\CreateWorldDecorDesignResponse
```

Author a decor design (what it unlocks, a mesh profile and params, an asking price in COSM base units as a string). Inactive until an operator approves it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createWorldDecorDesign();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->createWorldDecorDesign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\World\CreateWorldDecorDesignResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorldDecorDesignSubmit()`

```php
createWorldDecorDesignSubmit($id): \Crossly\Model\World\CreateWorldDecorDesignSubmitResponse
```

Send one of your decor designs to the review queue.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createWorldDecorDesignSubmit($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->createWorldDecorDesignSubmit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\World\CreateWorldDecorDesignSubmitResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorldDecorRetract()`

```php
createWorldDecorRetract(): \Crossly\Model\World\CreateWorldDecorRetractResponse
```

Take a placed decor piece back into your inventory; answers the inventory after.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createWorldDecorRetract();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->createWorldDecorRetract: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\World\CreateWorldDecorRetractResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorldDm()`

```php
createWorldDm($user_id, $create_world_crew_chat_request): \Crossly\Model\World\CreateWorldDmResponse
```

Send a direct message to a friend (a mutual follow; never across a block), up to 400 characters, through the world chat guard. 403 when they are not a friend, 429 when sent too quickly.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 'user_id_example'; // string
$create_world_crew_chat_request = new \Crossly\Model\World\CreateWorldCrewChatRequest(); // \Crossly\Model\World\CreateWorldCrewChatRequest

try {
    $result = $apiInstance->createWorldDm($user_id, $create_world_crew_chat_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->createWorldDm: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**|  |
 **create_world_crew_chat_request** | **\Crossly\Model\World\CreateWorldCrewChatRequest**|  |

### Return type

**\Crossly\Model\World\CreateWorldDmResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorldFollow()`

```php
createWorldFollow($user_id): \Crossly\Model\World\CreateWorldFollowResponse
```

Follow somebody. When they follow you back you are friends (friends-here, invites, messages). Idempotent.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 'user_id_example'; // string

try {
    $result = $apiInstance->createWorldFollow($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->createWorldFollow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**|  |

### Return type

**\Crossly\Model\World\CreateWorldFollowResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorldFriendInvite()`

```php
createWorldFriendInvite($user_id, $create_world_friend_invite_request): \Crossly\Model\World\CreateWorldFriendInviteResponse
```

\"Join me\": send one friend (a mutual follow) a notification with a link to the PUBLIC room you name by slug. 404 when they are not a friend or the room is not public; 429 when you invited them in the last minute.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 'user_id_example'; // string
$create_world_friend_invite_request = new \Crossly\Model\World\CreateWorldFriendInviteRequest(); // \Crossly\Model\World\CreateWorldFriendInviteRequest

try {
    $result = $apiInstance->createWorldFriendInvite($user_id, $create_world_friend_invite_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->createWorldFriendInvite: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**|  |
 **create_world_friend_invite_request** | **\Crossly\Model\World\CreateWorldFriendInviteRequest**|  |

### Return type

**\Crossly\Model\World\CreateWorldFriendInviteResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorldGamePackage()`

```php
createWorldGamePackage(): \Crossly\Model\World\CreateWorldGamePackageResponse
```

Submit a game package version for review: files as { path, base64 } (game.json, thumb.png, logic/, scene/, audio/, images/). Checked like the CLI, assets quarantined, the entry document dry-run, then reviewed by a person.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createWorldGamePackage();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->createWorldGamePackage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\World\CreateWorldGamePackageResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorldGamePackageCheck()`

```php
createWorldGamePackageCheck(): \Crossly\Model\World\CreateWorldGamePackageCheckResponse
```

Validate a game package exactly as a submission is checked (the shared intake report, your version still free) without storing, uploading or queuing anything: world-kit validate for an agent. Same files body as submit.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createWorldGamePackageCheck();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->createWorldGamePackageCheck: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\World\CreateWorldGamePackageCheckResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorldGamePackagePublish()`

```php
createWorldGamePackagePublish($id): \Crossly\Model\World\CreateWorldGamePackagePublishResponse
```

Make an approved version the one every placed copy runs (rollback or roll-forward; running copies restart on it) and list the game again if it was unpublished. Body { version }. Starter seller plan or higher.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createWorldGamePackagePublish($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->createWorldGamePackagePublish: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\World\CreateWorldGamePackagePublishResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorldGamePackageRestore()`

```php
createWorldGamePackageRestore($id): \Crossly\Model\World\CreateWorldGamePackageRestoreResponse
```

Restore a deleted Classic game within 30 days (it comes back unpublished).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createWorldGamePackageRestore($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->createWorldGamePackageRestore: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\World\CreateWorldGamePackageRestoreResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorldGamePackageUnpublish()`

```php
createWorldGamePackageUnpublish($id): \Crossly\Model\World\CreateWorldGamePackageUnpublishResponse
```

Take a Classic game off the Game Directory and the Carnival Plaza launcher, its store off sale. Copies people already placed keep running. Needs no plan: a lapsed creator can always take a game down.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createWorldGamePackageUnpublish($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->createWorldGamePackageUnpublish: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\World\CreateWorldGamePackageUnpublishResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorldGamePackageVersionSubmit()`

```php
createWorldGamePackageVersionSubmit($id, $semver): \Crossly\Model\World\CreateWorldGamePackageVersionSubmitResponse
```

Send a draft version (uploaded with submit: false) to review: the same static check, sandbox dry run and human review as an upload. Starter seller plan or higher.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$semver = 'semver_example'; // string

try {
    $result = $apiInstance->createWorldGamePackageVersionSubmit($id, $semver);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->createWorldGamePackageVersionSubmit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **semver** | **string**|  |

### Return type

**\Crossly\Model\World\CreateWorldGamePackageVersionSubmitResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorldGameRating()`

```php
createWorldGameRating($id): \Crossly\Model\World\CreateWorldGameRatingResponse
```

Rate a game you played, 1 to 5 stars (rating again replaces it). Only players the runner recorded in that game can rate it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createWorldGameRating($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->createWorldGameRating: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\World\CreateWorldGameRatingResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorldGameReport()`

```php
createWorldGameReport($id): \Crossly\Model\World\CreateWorldGameReportResponse
```

Report a game: reason broken | unfair | offensive | scam | other, optional detail. Staff review it; the creator is told the reason, never who.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createWorldGameReport($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->createWorldGameReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\World\CreateWorldGameReportResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorldGameStoreCheckout()`

```php
createWorldGameStoreCheckout($id, $item): \Crossly\Model\World\CreateWorldGameStoreCheckoutResponse
```

Buy an item or pass from a game store: answers a client secret for the payment; the item is yours once it succeeds.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$item = 'item_example'; // string

try {
    $result = $apiInstance->createWorldGameStoreCheckout($id, $item);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->createWorldGameStoreCheckout: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **item** | **string**|  |

### Return type

**\Crossly\Model\World\CreateWorldGameStoreCheckoutResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorldGrailMatch()`

```php
createWorldGrailMatch(): \Crossly\Model\World\CreateWorldGrailMatchResponse
```

Grail glints: send the ids on show somewhere (listingIds -- listings.id, inventoryIds, skuIds -- catalogue market SKUs; up to 400 each) and get back data.listingIds / data.inventoryIds / data.skuIds: the ones that are things you already want -- an open bid, a watched or wishlisted listing (or one selling the same SKU), a market watch, or a card your deck is missing. Read-only.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createWorldGrailMatch();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->createWorldGrailMatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\World\CreateWorldGrailMatchResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorldHallLoan()`

```php
createWorldHallLoan(): \Crossly\Model\World\CreateWorldHallLoanResponse
```

Lend a piece from your vault to this week's Hall of Grails exhibition: { vaultItemId, credit: 'name' | 'anonymous' }. It shows under your plaque until the exhibition ends; it stays in your vault (still listable and withdrawable), and stops showing if it leaves.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createWorldHallLoan();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->createWorldHallLoan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\World\CreateWorldHallLoanResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorldHomeAsk()`

```php
createWorldHomeAsk($slug): \Crossly\Model\World\CreateWorldHomeAskResponse
```

Ask a home owner whether they would sell a piece you saw there (an item or a decor piece).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string

try {
    $result = $apiInstance->createWorldHomeAsk($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->createWorldHomeAsk: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **slug** | **string**|  |

### Return type

**\Crossly\Model\World\CreateWorldHomeAskResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorldHomeGuestbook()`

```php
createWorldHomeGuestbook($slug): \Crossly\Model\World\CreateWorldHomeGuestbookResponse
```

Sign a home guestbook (one short line).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string

try {
    $result = $apiInstance->createWorldHomeGuestbook($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->createWorldHomeGuestbook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **slug** | **string**|  |

### Return type

**\Crossly\Model\World\CreateWorldHomeGuestbookResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorldHomeGuestbookReport()`

```php
createWorldHomeGuestbookReport($slug, $id): \Crossly\Model\World\CreateWorldGameReportResponse
```

Report a guestbook entry to moderation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string
$id = 'id_example'; // string

try {
    $result = $apiInstance->createWorldHomeGuestbookReport($slug, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->createWorldHomeGuestbookReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **slug** | **string**|  |
 **id** | **string**|  |

### Return type

**\Crossly\Model\World\CreateWorldGameReportResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorldHuntStart()`

```php
createWorldHuntStart(): \Crossly\Model\World\GetWorldHuntResponse
```

Start the Great Hunt this season by reading its first riddle (the Copper key's). Idempotent: starting again answers your progress unchanged. Answers the same shape as GET /v1/world/hunt. 409 when no season is running.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createWorldHuntStart();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->createWorldHuntStart: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\World\GetWorldHuntResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorldInteractiveAsset()`

```php
createWorldInteractiveAsset(): \Crossly\Model\World\CreateWorldInteractiveAssetResponse
```

Upload one asset: kind glb (4 MB), wav (4 MB) or png (1 MB), the file as base64; purpose product (your designs, the default) or game (Carnival Studio files such as badge icons). Answers its sha256 and the path to reference from MML.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createWorldInteractiveAsset();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->createWorldInteractiveAsset: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\World\CreateWorldInteractiveAssetResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorldInteractiveDesign()`

```php
createWorldInteractiveDesign(): \Crossly\Model\World\GetWorldInteractiveDesignResponse
```

Create an interactive design: name, footprint (s, m, l or f), optional tint and description, an asking price in COSM base units (a string, six decimals) and optional max supply. Inactive until ops approve a submitted version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createWorldInteractiveDesign();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->createWorldInteractiveDesign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\World\GetWorldInteractiveDesignResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorldInteractiveDesignCheck()`

```php
createWorldInteractiveDesignCheck($id): \Crossly\Model\World\CreateWorldInteractiveDesignCheckResponse
```

Check the draft: static rules, that every referenced upload exists, and a sandboxed dry run. Budgeted per person.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createWorldInteractiveDesignCheck($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->createWorldInteractiveDesignCheck: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\World\CreateWorldInteractiveDesignCheckResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorldInteractiveDesignPreview()`

```php
createWorldInteractiveDesignPreview($id): \Crossly\Model\World\CreateWorldInteractiveDesignPreviewResponse
```

A private preview token for the draft (author only) and the socket path that runs it. Budgeted per person.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createWorldInteractiveDesignPreview($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->createWorldInteractiveDesignPreview: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\World\CreateWorldInteractiveDesignPreviewResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorldInteractiveDesignSubmit()`

```php
createWorldInteractiveDesignSubmit($id): \Crossly\Model\World\CreateWorldInteractiveDesignSubmitResponse
```

Freeze the draft as a new version and send it to ops review. Up to 10 a day.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createWorldInteractiveDesignSubmit($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->createWorldInteractiveDesignSubmit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\World\CreateWorldInteractiveDesignSubmitResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorldInteractiveReset()`

```php
createWorldInteractiveReset(): \Crossly\Model\World\CreateWorldInteractiveResetResponse
```

Wipe the stored state of an interactive piece standing in a place you own (a home or your boutique).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createWorldInteractiveReset();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->createWorldInteractiveReset: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\World\CreateWorldInteractiveResetResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorldJobAppraisalAnswer()`

```php
createWorldJobAppraisalAnswer($id): \Crossly\Model\World\CreateWorldJobAppraisalAnswerResponse
```

Answer a price check: your estimate of the item value in CENTS and an optional note. Moves no money; the asker may accept it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createWorldJobAppraisalAnswer($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->createWorldJobAppraisalAnswer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\World\CreateWorldJobAppraisalAnswerResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorldJobShiftClaim()`

```php
createWorldJobShiftClaim($id): \Crossly\Model\World\CreateWorldJobShiftClaimResponse
```

Claim an open shift. You work it by being in the place while it runs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createWorldJobShiftClaim($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->createWorldJobShiftClaim: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\World\CreateWorldJobShiftClaimResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorldJobShiftRelease()`

```php
createWorldJobShiftRelease($id): \Crossly\Model\World\CreateWorldJobShiftReleaseResponse
```

Give a shift you claimed back to the board.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createWorldJobShiftRelease($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->createWorldJobShiftRelease: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\World\CreateWorldJobShiftReleaseResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorldMarketBuy()`

```php
createWorldMarketBuy($kind, $id): \Crossly\Model\World\CreateWorldMarketBuyResponse
```

Buy a plot or a street.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$kind = 'kind_example'; // string
$id = 'id_example'; // string

try {
    $result = $apiInstance->createWorldMarketBuy($kind, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->createWorldMarketBuy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **kind** | **string**|  |
 **id** | **string**|  |

### Return type

**\Crossly\Model\World\CreateWorldMarketBuyResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorldMarketListing()`

```php
createWorldMarketListing(): \Crossly\Model\World\CreateWorldMarketListingResponse
```

List a plot for sale or rent, or a street for sale.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createWorldMarketListing();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->createWorldMarketListing: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\World\CreateWorldMarketListingResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorldMarketPlotRent()`

```php
createWorldMarketPlotRent($id): \Crossly\Model\World\CreateWorldMarketPlotRentResponse
```

Rent a plot offered for lease.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createWorldMarketPlotRent($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->createWorldMarketPlotRent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\World\CreateWorldMarketPlotRentResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorldOutfit()`

```php
createWorldOutfit($create_world_outfit_request): \Crossly\Model\World\CreateWorldOutfitResponse
```

Save what you are wearing now as a named look: { name (1-32 chars), appearance? (skin, hair, hairColour, eyes, build -- unknown keys fall back to the default) }. Each worn thing is recorded as the door it goes back on by; one that no longer traces to something you own is listed in skipped and not saved. 409 when you already keep 6.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_world_outfit_request = new \Crossly\Model\World\CreateWorldOutfitRequest(); // \Crossly\Model\World\CreateWorldOutfitRequest

try {
    $result = $apiInstance->createWorldOutfit($create_world_outfit_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->createWorldOutfit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_world_outfit_request** | **\Crossly\Model\World\CreateWorldOutfitRequest**|  |

### Return type

**\Crossly\Model\World\CreateWorldOutfitResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorldOutfitApply()`

```php
createWorldOutfitApply($id): \Crossly\Model\World\CreateWorldOutfitApplyResponse
```

Put a saved look on. Every item goes through the same equip as POST /v1/world/avatar/equip, so ownership still holds: something you no longer own is listed in skipped with the reason and not worn. Slots the look left empty are emptied (cleared). Answers the appearance of the look (for your character -- appearance lives on your device), applied, skipped and cleared. Moves no money.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createWorldOutfitApply($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->createWorldOutfitApply: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\World\CreateWorldOutfitApplyResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorldParty()`

```php
createWorldParty(): \Crossly\Model\Breaks\CreateBreakResponse
```

Start a party with you as leader (up to 8 members).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createWorldParty();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->createWorldParty: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Breaks\CreateBreakResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorldPartyChat()`

```php
createWorldPartyChat($id): \Crossly\Model\Common\WorldResponse
```

Say something in your party chat (up to 2000 characters).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createWorldPartyChat($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->createWorldPartyChat: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Common\WorldResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorldPartyInvite()`

```php
createWorldPartyInvite($id): \Crossly\Model\World\CreateWorldPartyInviteResponse
```

Invite a friend (userId) to your party.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createWorldPartyInvite($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->createWorldPartyInvite: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\World\CreateWorldPartyInviteResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorldPartyInviteAccept()`

```php
createWorldPartyInviteAccept($invite_id): \Crossly\Model\World\CreateWorldPartyInviteAcceptResponse
```

Accept a party invite.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invite_id = 'invite_id_example'; // string

try {
    $result = $apiInstance->createWorldPartyInviteAccept($invite_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->createWorldPartyInviteAccept: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invite_id** | **string**|  |

### Return type

**\Crossly\Model\World\CreateWorldPartyInviteAcceptResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorldPartyInviteDecline()`

```php
createWorldPartyInviteDecline($invite_id): \Crossly\Model\World\CreateWorldPartyInviteAcceptResponse
```

Decline a party invite.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invite_id = 'invite_id_example'; // string

try {
    $result = $apiInstance->createWorldPartyInviteDecline($invite_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->createWorldPartyInviteDecline: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invite_id** | **string**|  |

### Return type

**\Crossly\Model\World\CreateWorldPartyInviteAcceptResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorldPartyKick()`

```php
createWorldPartyKick($id): \Crossly\Model\World\CreateWorldPartyKickResponse
```

As leader, remove a member (userId).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createWorldPartyKick($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->createWorldPartyKick: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\World\CreateWorldPartyKickResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorldPartyLeader()`

```php
createWorldPartyLeader($id): \Crossly\Model\World\CreateWorldPartyLeaderResponse
```

As leader, pass the lead to a member (userId).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createWorldPartyLeader($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->createWorldPartyLeader: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\World\CreateWorldPartyLeaderResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorldPartyLeave()`

```php
createWorldPartyLeave($id): \Crossly\Model\World\CreateWorldPartyLeaveResponse
```

Leave your party (the lead passes on if you led it).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createWorldPartyLeave($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->createWorldPartyLeave: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\World\CreateWorldPartyLeaveResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorldPartyWishlist()`

```php
createWorldPartyWishlist($id): \Crossly\Model\World\CreateWorldPartyWishlistResponse
```

Add a listing (listingId, or its shop slug) to the party wishlist; answers the wishlist.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createWorldPartyWishlist($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->createWorldPartyWishlist: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\World\CreateWorldPartyWishlistResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorldPartyWishlistVote()`

```php
createWorldPartyWishlistVote($id, $listing_id): \Crossly\Model\World\CreateWorldPartyWishlistResponse
```

Thumb a wishlist listing up or down (null clears your vote); answers the wishlist.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$listing_id = 'listing_id_example'; // string

try {
    $result = $apiInstance->createWorldPartyWishlistVote($id, $listing_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->createWorldPartyWishlistVote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **listing_id** | **string**|  |

### Return type

**\Crossly\Model\World\CreateWorldPartyWishlistResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorldPlaceItemWant()`

```php
createWorldPlaceItemWant($slug, $item_id): \Crossly\Model\World\CreateWorldPlaceItemWantResponse
```

Tell a room owner you would buy one of their items (once per person per item; they see the count). Moves no money.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string
$item_id = 'item_id_example'; // string

try {
    $result = $apiInstance->createWorldPlaceItemWant($slug, $item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->createWorldPlaceItemWant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **slug** | **string**|  |
 **item_id** | **string**|  |

### Return type

**\Crossly\Model\World\CreateWorldPlaceItemWantResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorldPropertyPlotPhotoUploadUrl()`

```php
createWorldPropertyPlotPhotoUploadUrl($plot_id): \Crossly\Model\World\CreateWorldPropertyPlotPhotoUploadUrlResponse
```

A presigned upload for a plot's photo (WebP/PNG/JPEG, up to 4 MB): PUT the image to uploadUrl with the same Content-Type and exact Content-Length, then store publicUrl with PUT .../photo.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$plot_id = 'plot_id_example'; // string

try {
    $result = $apiInstance->createWorldPropertyPlotPhotoUploadUrl($plot_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->createWorldPropertyPlotPhotoUploadUrl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **plot_id** | **string**|  |

### Return type

**\Crossly\Model\World\CreateWorldPropertyPlotPhotoUploadUrlResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorldPropertyPlotShowroom()`

```php
createWorldPropertyPlotShowroom($plot_id): \Crossly\Model\World\CreateWorldPropertyPlotShowroomResponse
```

Stand one of your showrooms on a plot you own or rent.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$plot_id = 'plot_id_example'; // string

try {
    $result = $apiInstance->createWorldPropertyPlotShowroom($plot_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->createWorldPropertyPlotShowroom: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **plot_id** | **string**|  |

### Return type

**\Crossly\Model\World\CreateWorldPropertyPlotShowroomResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorldPropertyTrespassed()`

```php
createWorldPropertyTrespassed(): \Crossly\Model\World\ListWorldPropertyTrespassedResponse
```

Ban someone owner-wide or from one showroom.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createWorldPropertyTrespassed();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->createWorldPropertyTrespassed: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\World\ListWorldPropertyTrespassedResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorldSpace()`

```php
createWorldSpace(): \Crossly\Model\World\CreateWorldSpaceResponse
```

Open a Space (sellers only, at most two): slug, name, venue, optional membership and about.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createWorldSpace();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->createWorldSpace: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\World\CreateWorldSpaceResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorldSpaceEvent()`

```php
createWorldSpaceEvent($slug): \Crossly\Model\World\CreateWorldSpaceEventResponse
```

As host or co-host, put an event on: title, kind, optional about, ISO start and end with offset.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string

try {
    $result = $apiInstance->createWorldSpaceEvent($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->createWorldSpaceEvent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **slug** | **string**|  |

### Return type

**\Crossly\Model\World\CreateWorldSpaceEventResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorldSpaceEventRsvp()`

```php
createWorldSpaceEventRsvp($slug, $id): \Crossly\Model\World\CreateWorldSpaceEventRsvpResponse
```

Say whether you are going to an event.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string
$id = 'id_example'; // string

try {
    $result = $apiInstance->createWorldSpaceEventRsvp($slug, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->createWorldSpaceEventRsvp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **slug** | **string**|  |
 **id** | **string**|  |

### Return type

**\Crossly\Model\World\CreateWorldSpaceEventRsvpResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorldSpaceInvite()`

```php
createWorldSpaceInvite($slug): \Crossly\Model\World\CreateWorldSpaceInviteResponse
```

Invite somebody (userId) to a Space.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string

try {
    $result = $apiInstance->createWorldSpaceInvite($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->createWorldSpaceInvite: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **slug** | **string**|  |

### Return type

**\Crossly\Model\World\CreateWorldSpaceInviteResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorldSpaceJoin()`

```php
createWorldSpaceJoin($slug): \Crossly\Model\World\CreateWorldSpaceJoinResponse
```

Join a Space, or ask to when it is request-only.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string

try {
    $result = $apiInstance->createWorldSpaceJoin($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->createWorldSpaceJoin: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **slug** | **string**|  |

### Return type

**\Crossly\Model\World\CreateWorldSpaceJoinResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorldSpaceLeave()`

```php
createWorldSpaceLeave($slug): \Crossly\Model\World\CreateWorldCrewLeaveResponse
```

Leave a Space.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string

try {
    $result = $apiInstance->createWorldSpaceLeave($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->createWorldSpaceLeave: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **slug** | **string**|  |

### Return type

**\Crossly\Model\World\CreateWorldCrewLeaveResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorldSpaceRequestByUserId()`

```php
createWorldSpaceRequestByUserId($slug, $user_id): \Crossly\Model\World\CreateWorldSpaceRequestByUserIdResponse
```

As host or co-host, accept or turn down a request to join.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string
$user_id = 'user_id_example'; // string

try {
    $result = $apiInstance->createWorldSpaceRequestByUserId($slug, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->createWorldSpaceRequestByUserId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **slug** | **string**|  |
 **user_id** | **string**|  |

### Return type

**\Crossly\Model\World\CreateWorldSpaceRequestByUserIdResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorldSpaceRole()`

```php
createWorldSpaceRole($slug): \Crossly\Model\World\CreateWorldSpaceRoleResponse
```

As host, make a member a co-host or back to a member.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string

try {
    $result = $apiInstance->createWorldSpaceRole($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->createWorldSpaceRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **slug** | **string**|  |

### Return type

**\Crossly\Model\World\CreateWorldSpaceRoleResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorldStaffApplicationDecide()`

```php
createWorldStaffApplicationDecide($id): \Crossly\Model\World\CreateWorldStaffApplicationDecideResponse
```

Accept or decline an application.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createWorldStaffApplicationDecide($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->createWorldStaffApplicationDecide: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\World\CreateWorldStaffApplicationDecideResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorldStaffAssignmentRateWorker()`

```php
createWorldStaffAssignmentRateWorker($id): \Crossly\Model\World\CreateWorldStaffAssignmentRateWorkerResponse
```

Rate the worker of one of your seats.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createWorldStaffAssignmentRateWorker($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->createWorldStaffAssignmentRateWorker: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\World\CreateWorldStaffAssignmentRateWorkerResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorldStaffPosting()`

```php
createWorldStaffPosting(): \Crossly\Model\Common\WorldStaffPostingResponse
```

Post a job: a showroom, stall or convention, pay, recurrence and rules.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createWorldStaffPosting();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->createWorldStaffPosting: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Common\WorldStaffPostingResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorldStaffPostingStatus()`

```php
createWorldStaffPostingStatus($id): \Crossly\Model\Common\WorldStaffPostingResponse
```

Open, pause or close a posting.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createWorldStaffPostingStatus($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->createWorldStaffPostingStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Common\WorldStaffPostingResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorldStreetOwnedUpkeepPay()`

```php
createWorldStreetOwnedUpkeepPay($id): \Crossly\Model\World\CreateWorldStreetOwnedUpkeepPayResponse
```

Pay your street's upkeep forward.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createWorldStreetOwnedUpkeepPay($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->createWorldStreetOwnedUpkeepPay: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\World\CreateWorldStreetOwnedUpkeepPayResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorldVenueBookingCancel()`

```php
createWorldVenueBookingCancel($id): \Crossly\Model\World\CreateWorldVenueBookingCancelResponse
```

Cancel a hall rental: the whole rent back until 7 days before the first day, nothing after.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createWorldVenueBookingCancel($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->createWorldVenueBookingCancel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\World\CreateWorldVenueBookingCancelResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorldWorkAssignmentRateEmployer()`

```php
createWorldWorkAssignmentRateEmployer($id): \Crossly\Model\World\CreateWorldStaffAssignmentRateWorkerResponse
```

Rate the employer of a public-job shift you worked: paid on time, job as described, conduct.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createWorldWorkAssignmentRateEmployer($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->createWorldWorkAssignmentRateEmployer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\World\CreateWorldStaffAssignmentRateWorkerResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWorldWorkPostingApply()`

```php
createWorldWorkPostingApply($id): \Crossly\Model\World\CreateWorldWorkPostingApplyResponse
```

Apply for a job.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createWorldWorkPostingApply($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->createWorldWorkPostingApply: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\World\CreateWorldWorkPostingApplyResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteShowroom()`

```php
deleteShowroom($id, $storefront_id): \Crossly\Model\Showroom\DeleteShowroomResponse
```

Archive a showroom: private, off its plots, billing stopped. Never deletes; the primary cannot be archived (409 showroom_primary).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$storefront_id = 'storefront_id_example'; // string | Which store (else X-Storefront-Id, else your default store).

try {
    $result = $apiInstance->deleteShowroom($id, $storefront_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->deleteShowroom: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **storefront_id** | **string**| Which store (else X-Storefront-Id, else your default store). | [optional]

### Return type

**\Crossly\Model\Showroom\DeleteShowroomResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteShowroomPlacement()`

```php
deleteShowroomPlacement($id, $plot_id, $storefront_id): \Crossly\Model\Showroom\CreateShowroomPlacementResponse
```

Take a showroom off a plot (the plot stays yours).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$plot_id = 'plot_id_example'; // string
$storefront_id = 'storefront_id_example'; // string | Which store (else X-Storefront-Id, else your default store).

try {
    $result = $apiInstance->deleteShowroomPlacement($id, $plot_id, $storefront_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->deleteShowroomPlacement: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **plot_id** | **string**|  |
 **storefront_id** | **string**| Which store (else X-Storefront-Id, else your default store). | [optional]

### Return type

**\Crossly\Model\Showroom\CreateShowroomPlacementResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteSpatialSceneGrant()`

```php
deleteSpatialSceneGrant($id, $grant_id): \Crossly\Model\Spatial\DeleteSpatialSceneGrantResponse
```

Take somebody's access to your room away, or kill an invite nobody has used yet.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$grant_id = 'grant_id_example'; // string

try {
    $result = $apiInstance->deleteSpatialSceneGrant($id, $grant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->deleteSpatialSceneGrant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **grant_id** | **string**|  |

### Return type

**\Crossly\Model\Spatial\DeleteSpatialSceneGrantResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteSpatialSceneNode()`

```php
deleteSpatialSceneNode($id): \Crossly\Model\Spatial\DeleteSpatialSceneNodeResponse
```

Remove units (by id, up to 500) from one of your warehouse rooms.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->deleteSpatialSceneNode($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->deleteSpatialSceneNode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Spatial\DeleteSpatialSceneNodeResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteSpatialSceneWarehouseStock()`

```php
deleteSpatialSceneWarehouseStock($id): \Crossly\Model\Spatial\DeleteSpatialSceneGrantResponse
```

Take an inventory item (or unit) off its rack.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->deleteSpatialSceneWarehouseStock($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->deleteSpatialSceneWarehouseStock: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Spatial\DeleteSpatialSceneGrantResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteSpatialStreetRequest()`

```php
deleteSpatialStreetRequest($id): \Crossly\Model\Dao\DeleteDaoProposalResponse
```

Withdraw a street request you made that has not been founded yet.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->deleteSpatialStreetRequest($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->deleteSpatialStreetRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Dao\DeleteDaoProposalResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteWorldBlock()`

```php
deleteWorldBlock($id): \Crossly\Model\World\DeleteWorldBlockResponse
```

Unblock somebody (by the block id from GET /v1/world/blocks).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->deleteWorldBlock($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->deleteWorldBlock: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\World\DeleteWorldBlockResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteWorldCollectionCapability()`

```php
deleteWorldCollectionCapability($chain, $contract)
```

Withdraw your declaration for a collection.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chain = 'chain_example'; // string
$contract = 'contract_example'; // string

try {
    $apiInstance->deleteWorldCollectionCapability($chain, $contract);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->deleteWorldCollectionCapability: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **chain** | **string**|  |
 **contract** | **string**|  |

### Return type

void (empty response body)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteWorldFollow()`

```php
deleteWorldFollow($user_id): \Crossly\Model\World\CreateWorldFollowResponse
```

Unfollow somebody. Idempotent.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 'user_id_example'; // string

try {
    $result = $apiInstance->deleteWorldFollow($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->deleteWorldFollow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**|  |

### Return type

**\Crossly\Model\World\CreateWorldFollowResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteWorldGamePackage()`

```php
deleteWorldGamePackage($id): \Crossly\Model\World\DeleteWorldGamePackageResponse
```

Delete a Classic game: unpublished, then a tombstone restorable for 30 days.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->deleteWorldGamePackage($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->deleteWorldGamePackage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\World\DeleteWorldGamePackageResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteWorldHallLoan()`

```php
deleteWorldHallLoan($id): \Crossly\Model\Breaks\CreateBreakResponse
```

Take one of your loans off show in the Hall of Grails.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->deleteWorldHallLoan($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->deleteWorldHallLoan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Breaks\CreateBreakResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteWorldHomeGuestbook()`

```php
deleteWorldHomeGuestbook($slug, $id): \Crossly\Model\World\DeleteWorldHomeGuestbookResponse
```

As the home owner, hide a guestbook entry.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string
$id = 'id_example'; // string

try {
    $result = $apiInstance->deleteWorldHomeGuestbook($slug, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->deleteWorldHomeGuestbook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **slug** | **string**|  |
 **id** | **string**|  |

### Return type

**\Crossly\Model\World\DeleteWorldHomeGuestbookResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteWorldInteractiveDesign()`

```php
deleteWorldInteractiveDesign($id): \Crossly\Model\World\DeleteWorldInteractiveDesignResponse
```

Delete a draft design, or archive a submitted one (off sale; owned copies keep working).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->deleteWorldInteractiveDesign($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->deleteWorldInteractiveDesign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\World\DeleteWorldInteractiveDesignResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteWorldJobShift()`

```php
deleteWorldJobShift($id): \Crossly\Model\World\DeleteWorldJobShiftResponse
```

Cancel a shift you posted that nobody has worked yet.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->deleteWorldJobShift($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->deleteWorldJobShift: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\World\DeleteWorldJobShiftResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteWorldMarketListing()`

```php
deleteWorldMarketListing($kind, $id, $mode): \Crossly\Model\World\DeleteWorldMarketListingResponse
```

Withdraw a plot or street from the Market.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$kind = 'kind_example'; // string
$id = 'id_example'; // string
$mode = 'mode_example'; // string

try {
    $result = $apiInstance->deleteWorldMarketListing($kind, $id, $mode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->deleteWorldMarketListing: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **kind** | **string**|  |
 **id** | **string**|  |
 **mode** | **string**|  |

### Return type

**\Crossly\Model\World\DeleteWorldMarketListingResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteWorldOutfit()`

```php
deleteWorldOutfit($id): \Crossly\Model\World\DeleteWorldOutfitResponse
```

Delete a saved look. 404 when it is not yours.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->deleteWorldOutfit($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->deleteWorldOutfit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\World\DeleteWorldOutfitResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteWorldPartyWishlist()`

```php
deleteWorldPartyWishlist($id, $listing_id): \Crossly\Model\World\CreateWorldPartyWishlistResponse
```

Take a listing you added off the party wishlist; answers the wishlist.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$listing_id = 'listing_id_example'; // string

try {
    $result = $apiInstance->deleteWorldPartyWishlist($id, $listing_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->deleteWorldPartyWishlist: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **listing_id** | **string**|  |

### Return type

**\Crossly\Model\World\CreateWorldPartyWishlistResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteWorldPlaceBan()`

```php
deleteWorldPlaceBan($slug, $user_id): \Crossly\Model\World\DeleteWorldPlaceBanResponse
```

Lift a ban from a place you own; they can walk in again right away.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string
$user_id = 'user_id_example'; // string

try {
    $result = $apiInstance->deleteWorldPlaceBan($slug, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->deleteWorldPlaceBan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **slug** | **string**|  |
 **user_id** | **string**|  |

### Return type

**\Crossly\Model\World\DeleteWorldPlaceBanResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteWorldPropertyPlotShowroom()`

```php
deleteWorldPropertyPlotShowroom($plot_id): \Crossly\Model\World\DeleteWorldPropertyPlotShowroomResponse
```

Take the showroom off a plot.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$plot_id = 'plot_id_example'; // string

try {
    $result = $apiInstance->deleteWorldPropertyPlotShowroom($plot_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->deleteWorldPropertyPlotShowroom: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **plot_id** | **string**|  |

### Return type

**\Crossly\Model\World\DeleteWorldPropertyPlotShowroomResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteWorldPropertyTrespassed()`

```php
deleteWorldPropertyTrespassed($user_id): \Crossly\Model\Spatial\DeleteSpatialSceneGrantResponse
```

Lift a ban.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 'user_id_example'; // string

try {
    $result = $apiInstance->deleteWorldPropertyTrespassed($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->deleteWorldPropertyTrespassed: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**|  |

### Return type

**\Crossly\Model\Spatial\DeleteSpatialSceneGrantResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteWorldSpace()`

```php
deleteWorldSpace($slug): \Crossly\Model\World\DeleteWorldSpaceResponse
```

As host, close a Space.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string

try {
    $result = $apiInstance->deleteWorldSpace($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->deleteWorldSpace: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **slug** | **string**|  |

### Return type

**\Crossly\Model\World\DeleteWorldSpaceResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteWorldSpaceEvent()`

```php
deleteWorldSpaceEvent($slug, $id): \Crossly\Model\World\DeleteWorldJobShiftResponse
```

As host or co-host, cancel an event.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string
$id = 'id_example'; // string

try {
    $result = $apiInstance->deleteWorldSpaceEvent($slug, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->deleteWorldSpaceEvent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **slug** | **string**|  |
 **id** | **string**|  |

### Return type

**\Crossly\Model\World\DeleteWorldJobShiftResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteWorldStaffAssignment()`

```php
deleteWorldStaffAssignment($id): \Crossly\Model\Spatial\DeleteSpatialSceneGrantResponse
```

Take a worker off a seat that has not started.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->deleteWorldStaffAssignment($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->deleteWorldStaffAssignment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Spatial\DeleteSpatialSceneGrantResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getShowroom()`

```php
getShowroom($storefront_id): \Crossly\Model\Showroom\GetShowroomResponse
```

Your store's showroom in Crossly World: the room and its look, fixtures with their slot grids, where every item stands (pinned by a person or placed automatically), sharing settings and the stock that can stand there. The ETag is the version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$storefront_id = 'storefront_id_example'; // string | Which store (else X-Storefront-Id, else your default store).

try {
    $result = $apiInstance->getShowroom($storefront_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->getShowroom: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_id** | **string**| Which store (else X-Storefront-Id, else your default store). | [optional]

### Return type

**\Crossly\Model\Showroom\GetShowroomResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getShowroomBilling()`

```php
getShowroomBilling($id, $storefront_id): \Crossly\Model\Showroom\GetShowroomBillingResponse
```

A showroom's billing: included, active (paid through), past due or cancelled, and the rails a payment can use.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$storefront_id = 'storefront_id_example'; // string | Which store (else X-Storefront-Id, else your default store).

try {
    $result = $apiInstance->getShowroomBilling($id, $storefront_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->getShowroomBilling: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **storefront_id** | **string**| Which store (else X-Storefront-Id, else your default store). | [optional]

### Return type

**\Crossly\Model\Showroom\GetShowroomBillingResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getShowroomById()`

```php
getShowroomById($id, $storefront_id): \Crossly\Model\Showroom\GetShowroomResponse
```

One showroom: room and look, fixtures (with holders), placements, settings (hours, auto-include) and stock. The ETag is the version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$storefront_id = 'storefront_id_example'; // string | Which store (else X-Storefront-Id, else your default store).

try {
    $result = $apiInstance->getShowroomById($id, $storefront_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->getShowroomById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **storefront_id** | **string**| Which store (else X-Storefront-Id, else your default store). | [optional]

### Return type

**\Crossly\Model\Showroom\GetShowroomResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getShowroomCatalog()`

```php
getShowroomCatalog(): \Crossly\Model\Showroom\GetShowroomCatalogResponse
```

Everything a showroom can be made of: fixture displays (kind, slots per unit), room sizes, themes, surfaces, shopfronts, facades, sign styles and fonts, window moods, and `holders`: every fixture holder with `owned` (free, or a premium one you bought in the in-world cosmetics market; an unowned premium holder is refused with holder_not_owned).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getShowroomCatalog();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->getShowroomCatalog: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Showroom\GetShowroomCatalogResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getShowroomPlacement()`

```php
getShowroomPlacement($id, $storefront_id): \Crossly\Model\Showroom\GetShowroomPlacementResponse
```

The plots a showroom stands on, and the plots your store owns or rents that it could stand on.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$storefront_id = 'storefront_id_example'; // string | Which store (else X-Storefront-Id, else your default store).

try {
    $result = $apiInstance->getShowroomPlacement($id, $storefront_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->getShowroomPlacement: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **storefront_id** | **string**| Which store (else X-Storefront-Id, else your default store). | [optional]

### Return type

**\Crossly\Model\Showroom\GetShowroomPlacementResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getSpatialSceneAttention()`

```php
getSpatialSceneAttention($scene_id): \Crossly\Model\Spatial\GetSpatialSceneAttentionResponse
```

What visitors looked at in one of your rooms: viewers, looks, inspects and dwell per item over the last days (1-35, default 30).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$scene_id = 'scene_id_example'; // string

try {
    $result = $apiInstance->getSpatialSceneAttention($scene_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->getSpatialSceneAttention: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **scene_id** | **string**|  |

### Return type

**\Crossly\Model\Spatial\GetSpatialSceneAttentionResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getSpatialSceneWindow()`

```php
getSpatialSceneWindow($id): \Crossly\Model\Spatial\GetSpatialSceneWindowResponse
```

The listings you chose for the street window of your shop, in slot order (left, middle, right; empty = newest first), and `choices`: your listings that can go in it, newest first.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getSpatialSceneWindow($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->getSpatialSceneWindow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Spatial\GetSpatialSceneWindowResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getSpatialShopNeighbourhood()`

```php
getSpatialShopNeighbourhood(): \Crossly\Model\Spatial\GetSpatialShopNeighbourhoodResponse
```

Where your shop stands, and the district theme your stock fits.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getSpatialShopNeighbourhood();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->getSpatialShopNeighbourhood: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Spatial\GetSpatialShopNeighbourhoodResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getSpatialSpace()`

```php
getSpatialSpace(): \Crossly\Model\Spatial\GetSpatialSpaceResponse
```

The room catalogue: every space profile (what it holds, how it is sorted, its containers) and the warehouse units.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getSpatialSpace();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->getSpatialSpace: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Spatial\GetSpatialSpaceResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getSpatialStreetAdmission()`

```php
getSpatialStreetAdmission(): \Crossly\Model\Spatial\GetSpatialStreetAdmissionResponse
```

Street applications and invitations: yours, and those waiting on streets you own.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getSpatialStreetAdmission();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->getSpatialStreetAdmission: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Spatial\GetSpatialStreetAdmissionResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getSpatialStreetDecor()`

```php
getSpatialStreetDecor($slug): \Crossly\Model\Spatial\GetSpatialStreetDecorResponse
```

The decor on a street you may dress, and what you can place.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string

try {
    $result = $apiInstance->getSpatialStreetDecor($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->getSpatialStreetDecor: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **slug** | **string**|  |

### Return type

**\Crossly\Model\Spatial\GetSpatialStreetDecorResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getWorldArcade()`

```php
getWorldArcade(): \Crossly\Model\World\GetWorldArcadeResponse
```

The Arcade in Crossly World: data.cabinets (slot, where it stands, host -- piece, price_guess or empty --, game, title, blurb, the piece it hosts and where, record, packageId and thumbnail for a creator game from the Game Directory, players) and data.scores (the High Score wall: per game a title, kind -- leaderboard, record or top -- and up to five ASCII lines; a name shows only for somebody who chose to be seen by name, everyone else is \"A player\"), plus creatorGames (creator games with a cabinet now). Games are played in the world.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getWorldArcade();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->getWorldArcade: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\World\GetWorldArcadeResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getWorldAttendant()`

```php
getWorldAttendant(): \Crossly\Model\World\GetWorldAttendantResponse
```

Your AI attendant and whether your AI key is connected.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getWorldAttendant();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->getWorldAttendant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\World\GetWorldAttendantResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getWorldAurora()`

```php
getWorldAurora(): \Crossly\Model\World\GetWorldAuroraResponse
```

The Sales Aurora over the Commons in Crossly World: every real sale on Crossly in the last data.windowDays (30) days. data.total (sales in the window), data.families (key, label, colour, count per colour family: cards, coins, jewellery, electronics, media, fashion, toys, other) and data.sales (newest first, at most 48: family, ageHours, fresh -- sold in the last ten minutes, which shimmers). Aggregate only: no item, price, seller or platform. data.updatedAt is when it was read.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getWorldAurora();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->getWorldAurora: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\World\GetWorldAuroraResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getWorldAvatarBasic()`

```php
getWorldAvatarBasic(): \Crossly\Model\World\GetWorldAvatarBasicResponse
```

The free basic wardrobe every account owns: 25 garments (tees, hoodie, overshirt, polo, jacket, vest, jeans, shorts, skirt, sneakers, boots, loafers, caps...) by slot, each with its colourways. Wear one by saving appearance.outfit = { top, outer, bottom, shoes, hat } as \"garment:colour\" (outer and hat may be \"none\") with PUT /v1/world/avatar/look.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getWorldAvatarBasic();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->getWorldAvatarBasic: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\World\GetWorldAvatarBasicResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getWorldAvatarIdentity()`

```php
getWorldAvatarIdentity(): \Crossly\Model\World\GetWorldAvatarIdentityResponse
```

Whether others see your name in the world (named), or not (anonymous); null if you have never chosen.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getWorldAvatarIdentity();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->getWorldAvatarIdentity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\World\GetWorldAvatarIdentityResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getWorldAvatarLoadout()`

```php
getWorldAvatarLoadout(): \Crossly\Model\World\GetWorldAvatarLoadoutResponse
```

What you are wearing: the rig, its slots (avatar_head, avatar_body, avatar_outer -- a jacket over the top, avatar_legs, avatar_feet, avatar_back) and each worn entry -- a cosmetic or a real item -- with its verified-purchase mark. Carries no price, receipt id, seller or order.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getWorldAvatarLoadout();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->getWorldAvatarLoadout: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\World\GetWorldAvatarLoadoutResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getWorldAvatarLoadoutByUserId()`

```php
getWorldAvatarLoadoutByUserId($user_id): \Crossly\Model\World\GetWorldAvatarLoadoutResponse
```

What somebody else is wearing, with the verified-purchase mark on each real item -- public on purpose, since a check only its owner can see is not a check. No price, receipt id, seller or order.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 'user_id_example'; // string

try {
    $result = $apiInstance->getWorldAvatarLoadoutByUserId($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->getWorldAvatarLoadoutByUserId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**|  |

### Return type

**\Crossly\Model\World\GetWorldAvatarLoadoutResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getWorldAvatarLook()`

```php
getWorldAvatarLook(): \Crossly\Model\World\GetWorldAvatarLookResponse
```

Your world look on the account: the handle you chose (null if anonymous) and your appearance; null if you never made one.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getWorldAvatarLook();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->getWorldAvatarLook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\World\GetWorldAvatarLookResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getWorldAvatarNftBadge()`

```php
getWorldAvatarNftBadge(): \Crossly\Model\World\GetWorldAvatarNftBadgeResponse
```

The NFT you wear on your nameplate in the world, or null.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getWorldAvatarNftBadge();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->getWorldAvatarNftBadge: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\World\GetWorldAvatarNftBadgeResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getWorldBillingRail()`

```php
getWorldBillingRail(): \Crossly\Model\World\GetWorldBillingRailResponse
```

Which rails (card, CBX) can pay in the world right now.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getWorldBillingRail();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->getWorldBillingRail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\World\GetWorldBillingRailResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getWorldCapability()`

```php
getWorldCapability(): \Crossly\Model\World\GetWorldCapabilityResponse
```

What your held NFTs unlock in Crossly World: each token with the capabilities its collection declared (wear, display, emote, gate, ...). Holding is your verified wallets (their synced tokens); the capabilities of a transferred token go within five minutes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getWorldCapability();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->getWorldCapability: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\World\GetWorldCapabilityResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getWorldCapabilityCatalogue()`

```php
getWorldCapabilityCatalogue(): \Crossly\Model\World\GetWorldCapabilityCatalogueResponse
```

The capability kinds of spec crossly.nft-capabilities/1: what each does, whether only the creator of the collection may declare it, whether it needs review, and which clients honour it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getWorldCapabilityCatalogue();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->getWorldCapabilityCatalogue: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\World\GetWorldCapabilityCatalogueResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getWorldCapabilityWear()`

```php
getWorldCapabilityWear(): \Crossly\Model\World\GetWorldCapabilityWearResponse
```

What you wear from your NFTs and COSM copies: your pick per avatar slot (head, body, legs, feet, back) and what the room sees.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getWorldCapabilityWear();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->getWorldCapabilityWear: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\World\GetWorldCapabilityWearResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getWorldChest()`

```php
getWorldChest(): \Crossly\Model\World\GetWorldChestResponse
```

The Commons chest: data.window (this 20-minute window, UTC), spot ([x, z] on the plaza), endsAt (when the next chest comes) and mine (openedThis, and opened -- how many windows you have opened one in; the Chest opener pin comes at 10). A chest is opened by walking up to it in Crossly World, never over the API.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getWorldChest();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->getWorldChest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\World\GetWorldChestResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getWorldCollectionCapability()`

```php
getWorldCollectionCapability($chain, $contract): \Crossly\Model\World\GetWorldCollectionCapabilityResponse
```

The live capability declaration of a collection (404 when it has none).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chain = 'chain_example'; // string
$contract = 'contract_example'; // string

try {
    $result = $apiInstance->getWorldCollectionCapability($chain, $contract);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->getWorldCollectionCapability: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **chain** | **string**|  |
 **contract** | **string**|  |

### Return type

**\Crossly\Model\World\GetWorldCollectionCapabilityResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getWorldContestMine()`

```php
getWorldContestMine(): \Crossly\Model\World\GetWorldContestMineResponse
```

Your contest entries (best score, attempts used, payment state) and prizes (granted, or owed until their gate opens).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getWorldContestMine();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->getWorldContestMine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\World\GetWorldContestMineResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getWorldControl()`

```php
getWorldControl(): \Crossly\Model\World\GetWorldControlResponse
```

Your world controls settings (look sensitivity, invert look, stick size, left-handed, camera distance, reduced camera motion, tap-to-walk, haptics) and whether you have seen the controls tutorial.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getWorldControl();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->getWorldControl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\World\GetWorldControlResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getWorldConvention()`

```php
getWorldConvention($id): \Crossly\Model\World\GetWorldConventionResponse
```

One convention. 404 for an unknown or malformed id alike.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getWorldConvention($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->getWorldConvention: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\World\GetWorldConventionResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getWorldConventionExhibit()`

```php
getWorldConventionExhibit($id): \Crossly\Model\World\GetWorldConventionExhibitResponse
```

A convention from the exhibitor side: tiers with price, size, capacity and booths left, the rails that pay now, and your own booth (status, fee, paid, checked in, listings).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getWorldConventionExhibit($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->getWorldConventionExhibit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\World\GetWorldConventionExhibitResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getWorldConventionHall()`

```php
getWorldConventionHall($id): \Crossly\Model\World\GetWorldConventionHallResponse
```

The hall design (booths, stage, signs, entrance, kiosk), its version and any problems.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getWorldConventionHall($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->getWorldConventionHall: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\World\GetWorldConventionHallResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getWorldConventionManage()`

```php
getWorldConventionManage($id): \Crossly\Model\World\GetWorldConventionManageResponse
```

A convention you organise: its settings, booth tiers, every seller (status, booth, fee, paid, checked in) and the venue.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getWorldConventionManage($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->getWorldConventionManage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\World\GetWorldConventionManageResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getWorldConventionStatusPage()`

```php
getWorldConventionStatusPage($id): \Crossly\Model\World\GetWorldConventionStatusPageResponse
```

The status page: sellers, booths filled per tier, walk-ins, sales of brought listings, booth fees paid and owed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getWorldConventionStatusPage($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->getWorldConventionStatusPage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\World\GetWorldConventionStatusPageResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getWorldCosmBalance()`

```php
getWorldCosmBalance(): \Crossly\Model\World\GetWorldCosmBalanceResponse
```

Your COSM balance: baseUnits (a STRING -- COSM has 6 decimals and overflows a JSON number), decimals, available (false = COSM is not provisioned on this deployment, not a zero balance).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getWorldCosmBalance();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->getWorldCosmBalance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\World\GetWorldCosmBalanceResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getWorldCrew()`

```php
getWorldCrew(): \Crossly\Model\World\GetWorldCrewResponse
```

Your crew: data.crew is null when you are in none, else its name, tag, join code and whether you own it; data.members lists up to 30 members, each with the public room they are in right now when they chose to be seen by name (else null).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getWorldCrew();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->getWorldCrew: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\World\GetWorldCrewResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getWorldCrewChat()`

```php
getWorldCrewChat(): \Crossly\Model\Common\WorldResponse
```

Your crew chat: data.messages is the last 50 lines (from, name, text, at), kept in memory only, so it starts empty after a restart. 404 when you are in no crew.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getWorldCrewChat();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->getWorldCrewChat: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Common\WorldResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getWorldCrewLeaderboard()`

```php
getWorldCrewLeaderboard(): \Crossly\Model\Game\GetGameLeaderboardResponse
```

The game leaderboards (Price Guess, hunts, speed trades; this week and all time) ranked among your crew only, each member by the name the crew sees. 404 when you are in no crew.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getWorldCrewLeaderboard();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->getWorldCrewLeaderboard: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Game\GetGameLeaderboardResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getWorldDm()`

```php
getWorldDm($user_id): \Crossly\Model\World\GetWorldDmResponse
```

Your direct-message thread with one friend, oldest first (the last 100 lines: id, from, text, at, mine). Reading it marks their lines read.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 'user_id_example'; // string

try {
    $result = $apiInstance->getWorldDm($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->getWorldDm: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**|  |

### Return type

**\Crossly\Model\World\GetWorldDmResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getWorldEmoteShowable()`

```php
getWorldEmoteShowable(): \Crossly\Model\World\GetWorldEmoteShowableResponse
```

The things you own that a show-off emote can hold up.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getWorldEmoteShowable();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->getWorldEmoteShowable: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\World\GetWorldEmoteShowableResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getWorldFirefly()`

```php
getWorldFirefly(): \Crossly\Model\World\GetWorldFireflyResponse
```

Fireflies on the Commons lawn: data.day (today, UTC), today (fireflies everyone has caught today) and mine (today -- your catches today, up to perDay -- total, all your catches; the Firefly Catcher pin comes at 30 -- and perDay). Fireflies are caught by walking up to a lit one in Crossly World after dark, never over the API, and nothing is spent.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getWorldFirefly();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->getWorldFirefly: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\World\GetWorldFireflyResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getWorldFitStat()`

```php
getWorldFitStat(): \Crossly\Model\World\GetWorldFitStatResponse
```

Your walking storefront, last 7 days: distinct people who tapped \"Shop this\" or \"Offer\" on what you wore, and how many of each. Counts only; nobody is identified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getWorldFitStat();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->getWorldFitStat: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\World\GetWorldFitStatResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getWorldFitValue()`

```php
getWorldFitValue(): \Crossly\Model\World\GetWorldFitValueResponse
```

What your outfit is worth on the market: cents (sum of each catalogued piece's order-book price -- last sale, else lowest ask), pieces worn, how many were priced, and share (whether you show it on your card).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getWorldFitValue();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->getWorldFitValue: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\World\GetWorldFitValueResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getWorldGame()`

```php
getWorldGame($id): \Crossly\Model\World\GetWorldGameResponse
```

One live game: its manifest, its store items and which you own.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getWorldGame($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->getWorldGame: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\World\GetWorldGameResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getWorldGameLeaderboard()`

```php
getWorldGameLeaderboard($id): \Crossly\Model\World\GetWorldGameLeaderboardResponse
```

A live game leaderboard, this week and all time, by its manifest scoring (wins, best points, or best time). Only people who chose to be named show by name. scoring is null for a game that keeps no board.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getWorldGameLeaderboard($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->getWorldGameLeaderboard: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\World\GetWorldGameLeaderboardResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getWorldGamePackage()`

```php
getWorldGamePackage($id): \Crossly\Model\World\GetWorldGamePackageResponse
```

One of your game packages with every version, its review state and decision note.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getWorldGamePackage($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->getWorldGamePackage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\World\GetWorldGamePackageResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getWorldGamePackageStat()`

```php
getWorldGamePackageStat($id): \Crossly\Model\World\GetWorldGamePackageStatResponse
```

Play stats for one of your Classic games: 30-day totals, the daily series the launcher ranks on (uniques, sessions, playtime, first-play bounces, D1/D7/D28), its ranking score, test impressions and players right now. ?days=1-90.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getWorldGamePackageStat($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->getWorldGamePackageStat: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\World\GetWorldGamePackageStatResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getWorldGamePackageVersion()`

```php
getWorldGamePackageVersion($id): \Crossly\Model\World\GetWorldGamePackageVersionResponse
```

Every version of one of your Classic games: draft, pending, approved, rejected, withdrawn or cancelled, which one is live, its documents and report.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getWorldGamePackageVersion($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->getWorldGamePackageVersion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\World\GetWorldGamePackageVersionResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getWorldGameTemplate()`

```php
getWorldGameTemplate($kind): \Crossly\Model\World\GetWorldGameTemplateResponse
```

A fresh game package from a template (table, arena, object; collection is an NFT capability declaration), as { path, base64 } files: the world-kit init, for an agent with no local kit. ?id=my-game&name=My Game.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$kind = 'kind_example'; // string

try {
    $result = $apiInstance->getWorldGameTemplate($kind);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->getWorldGameTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **kind** | **string**|  |

### Return type

**\Crossly\Model\World\GetWorldGameTemplateResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getWorldHall()`

```php
getWorldHall(): \Crossly\Model\World\GetWorldHallResponse
```

The Hall of Grails in Crossly World: data.exhibition (key, title, blurb, endsAt -- a new one every Monday UTC -- and next, the coming one's title) and data.exhibits, up to twelve real catalogue items in slot order (skuId, name, brand, imageUrl, thumbUrl, retailCents, lowestAskCents, lastSaleCents: the live order book, null when the market has none). The first stands on the centre plinth. Buy, bid or watch an exhibit through the market endpoints with its skuId.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getWorldHall();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->getWorldHall: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\World\GetWorldHallResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getWorldHallLoan()`

```php
getWorldHallLoan(): \Crossly\Model\World\GetWorldHallLoanResponse
```

Lend to the Hall: this week's exhibition (key, title, categorySlug, endsAt), your loans on show (id, vaultItemId, skuId, name, credit, since) and the vault pieces you can lend (eligible: vaultItemId, skuId, name, imageUrl, grade) -- held in your Crossly vault, not pledged, in the exhibition's category. perMember is how many you may lend each week.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getWorldHallLoan();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->getWorldHallLoan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\World\GetWorldHallLoanResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getWorldHomePlaceable()`

```php
getWorldHomePlaceable(): \Crossly\Model\World\GetWorldHomePlaceableResponse
```

What you can place in your home: your items and your furniture.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getWorldHomePlaceable();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->getWorldHomePlaceable: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\World\GetWorldHomePlaceableResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getWorldHunt()`

```php
getWorldHunt(): \Crossly\Model\World\GetWorldHuntResponse
```

Your Great Hunt: data.season (id, name, startsAt, endsAt, the title and how many earn it, live), started (you read the first clue), held (keys held, 0-3, always in the order copper, jade, crystal), keys (each with its name, colour, its riddle once it is yours to read, and when you picked it up), and cleared (your rank through the Gate this season, when, and whether you earned the title) or null. Keys are picked up by walking to them in Crossly World; nothing here takes one.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getWorldHunt();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->getWorldHunt: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\World\GetWorldHuntResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getWorldHuntScoreboard()`

```php
getWorldHuntScoreboard(): \Crossly\Model\World\GetWorldHuntScoreboardResponse
```

The Great Hunt Scoreboard, as the monolith in the Commons shows it: data.season (the running season, or the last one between seasons), finishers (the first ten through the Gate in order: rank, name, short, named, at, titled -- a name shows only for somebody who chose to be seen by name in the world, everyone else is \"A player\") and total (everybody through the Gate this season).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getWorldHuntScoreboard();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->getWorldHuntScoreboard: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\World\GetWorldHuntScoreboardResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getWorldInteractiveDesign()`

```php
getWorldInteractiveDesign($id): \Crossly\Model\World\GetWorldInteractiveDesignResponse
```

One of your interactive designs: its draft source, the last static check, and every submitted version with its review state.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getWorldInteractiveDesign($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->getWorldInteractiveDesign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\World\GetWorldInteractiveDesignResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getWorldJob()`

```php
getWorldJob(): \Crossly\Model\World\GetWorldJobResponse
```

The jobs board: open staff shifts you could claim, your claimed shifts and open price checks (appraisals), as the world shows them.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getWorldJob();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->getWorldJob: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\World\GetWorldJobResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getWorldKite()`

```php
getWorldKite(): \Crossly\Model\World\GetWorldKiteResponse
```

Kites flown on the Commons lawn: data.day (today, UTC), today (kites everyone has flown today) and mine (today -- yours today, up to perDay -- perDay, and days -- the days you have flown one on; the Kite flyer pin comes at 5). Kites are flown by standing out on the lawn in Crossly World by day, never over the API, and nothing is spent.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getWorldKite();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->getWorldKite: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\World\GetWorldKiteResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getWorldLantern()`

```php
getWorldLantern(): \Crossly\Model\World\GetWorldKiteResponse
```

Sky lanterns in the Commons: data.day (today, UTC), today (lanterns everyone has released today) and mine (today -- yours today, up to perDay -- perDay, and days -- the days you have released one on; the Lantern lighter pin comes at 5). Lanterns are released at the lantern stand in Crossly World, never over the API, and nothing is spent.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getWorldLantern();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->getWorldLantern: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\World\GetWorldKiteResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getWorldLauncher()`

```php
getWorldLauncher(): \Crossly\Model\World\GetWorldLauncherResponse
```

The Carnival Plaza launcher: portals for Classic games, Crossly's own card games and the Commons card tables, each with players right now, your friends inside, its ranking score (published weights, retention-weighted, first-play bounce negative) and where Play goes. Twelve ring slots: friends' pick, new & rising (guaranteed test impressions), then the top, first-party capped at 25%.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getWorldLauncher();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->getWorldLauncher: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\World\GetWorldLauncherResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getWorldManageLedger()`

```php
getWorldManageLedger(): \Crossly\Model\World\GetWorldManageLedgerResponse
```

World money over 7, 30 or 90 days: plot purchases, maintenance, rent, deed sales, staff wages, shifts and stalls, in and out.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getWorldManageLedger();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->getWorldManageLedger: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\World\GetWorldManageLedgerResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getWorldManageOverview()`

```php
getWorldManageOverview(): \Crossly\Model\World\GetWorldManageOverviewResponse
```

Your Crossly World at a glance: shop and addresses, property, staff and shifts, conventions, stalls, 30-day visitors and money.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getWorldManageOverview();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->getWorldManageOverview: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\World\GetWorldManageOverviewResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getWorldManageVisitor()`

```php
getWorldManageVisitor(): \Crossly\Model\World\GetWorldManageVisitorResponse
```

Who came to your world shop over 7, 30 or 90 days: the funnel, attention by day, most-looked and most-wanted items.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getWorldManageVisitor();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->getWorldManageVisitor: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\World\GetWorldManageVisitorResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getWorldMarket()`

```php
getWorldMarket($kind, $id): \Crossly\Model\World\GetWorldMarketResponse
```

One plot or street in the Market: price, renders, neighbours, foot traffic, history.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$kind = 'kind_example'; // string
$id = 'id_example'; // string

try {
    $result = $apiInstance->getWorldMarket($kind, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->getWorldMarket: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **kind** | **string**|  |
 **id** | **string**|  |

### Return type

**\Crossly\Model\World\GetWorldMarketResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getWorldNeighbourhoodClaim()`

```php
getWorldNeighbourhoodClaim($slug): \Crossly\Model\World\GetWorldNeighbourhoodClaimResponse
```

Whether you may claim a plot on a neighbourhood street (its top sellers by recent sales), and why not.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string

try {
    $result = $apiInstance->getWorldNeighbourhoodClaim($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->getWorldNeighbourhoodClaim: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **slug** | **string**|  |

### Return type

**\Crossly\Model\World\GetWorldNeighbourhoodClaimResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getWorldPartyChat()`

```php
getWorldPartyChat($id): \Crossly\Model\Common\WorldResponse
```

Your party chat: the recent lines. 404 when this is not your party.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getWorldPartyChat($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->getWorldPartyChat: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Common\WorldResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getWorldPlaceBoard()`

```php
getWorldPlaceBoard($slug): \Crossly\Model\World\GetWorldPlaceBoardResponse
```

The Trade Floor's wall of wants, its authentication desk and its Vault Markets ticker (vaultMovers: bookKey, name, label, units, markCents, change24hBps; only the trade-floor place has them).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string

try {
    $result = $apiInstance->getWorldPlaceBoard($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->getWorldPlaceBoard: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **slug** | **string**|  |

### Return type

**\Crossly\Model\World\GetWorldPlaceBoardResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getWorldPlaceCollection()`

```php
getWorldPlaceCollection($slug, $category, $brand, $model): \Crossly\Model\World\GetWorldPlaceCollectionResponse
```

One collection room: every piece of the set, owned or missing. 404 for an unknown room or set.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string
$category = 'category_example'; // string
$brand = 'brand_example'; // string
$model = 'model_example'; // string

try {
    $result = $apiInstance->getWorldPlaceCollection($slug, $category, $brand, $model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->getWorldPlaceCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **slug** | **string**|  |
 **category** | **string**|  |
 **brand** | **string**|  |
 **model** | **string**|  |

### Return type

**\Crossly\Model\World\GetWorldPlaceCollectionResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getWorldPlaceDrop()`

```php
getWorldPlaceDrop($slug): \Crossly\Model\World\GetWorldPlaceDropResponse
```

The owner's next drop (name, cover, time, live) and how many people are waiting in the room.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string

try {
    $result = $apiInstance->getWorldPlaceDrop($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->getWorldPlaceDrop: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **slug** | **string**|  |

### Return type

**\Crossly\Model\World\GetWorldPlaceDropResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getWorldPlaceItemInterest()`

```php
getWorldPlaceItemInterest($slug, $item_id): \Crossly\Model\World\GetWorldPlaceItemInterestResponse
```

How many people looked at one item in this room today.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string
$item_id = 'item_id_example'; // string

try {
    $result = $apiInstance->getWorldPlaceItemInterest($slug, $item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->getWorldPlaceItemInterest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **slug** | **string**|  |
 **item_id** | **string**|  |

### Return type

**\Crossly\Model\World\GetWorldPlaceItemInterestResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getWorldPlaceLive()`

```php
getWorldPlaceLive($slug): \Crossly\Model\World\GetWorldPlaceLiveResponse
```

The owner's live sale: their stream and the lot on the block, or null.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string

try {
    $result = $apiInstance->getWorldPlaceLive($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->getWorldPlaceLive: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **slug** | **string**|  |

### Return type

**\Crossly\Model\World\GetWorldPlaceLiveResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getWorldPlaceSeller()`

```php
getWorldPlaceSeller($slug): \Crossly\Model\World\GetWorldPlaceSellerResponse
```

The shop whose public room this is (username and name), or null.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string

try {
    $result = $apiInstance->getWorldPlaceSeller($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->getWorldPlaceSeller: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **slug** | **string**|  |

### Return type

**\Crossly\Model\World\GetWorldPlaceSellerResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getWorldPlaceShopPet()`

```php
getWorldPlaceShopPet($slug): \Crossly\Model\World\GetWorldPlaceShopPetResponse
```

The shop's pet kind, or null.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string

try {
    $result = $apiInstance->getWorldPlaceShopPet($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->getWorldPlaceShopPet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **slug** | **string**|  |

### Return type

**\Crossly\Model\World\GetWorldPlaceShopPetResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getWorldPropertyPlot()`

```php
getWorldPropertyPlot($plot_id): \Crossly\Model\World\GetWorldPropertyPlotResponse
```

One plot of yours: showroom, rental, value, upkeep.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$plot_id = 'plot_id_example'; // string

try {
    $result = $apiInstance->getWorldPropertyPlot($plot_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->getWorldPropertyPlot: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **plot_id** | **string**|  |

### Return type

**\Crossly\Model\World\GetWorldPropertyPlotResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getWorldPropertyRental()`

```php
getWorldPropertyRental($lease_id): \Crossly\Model\World\GetWorldPropertyRentalResponse
```

One plot you rent out, with its payments.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lease_id = 'lease_id_example'; // string

try {
    $result = $apiInstance->getWorldPropertyRental($lease_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->getWorldPropertyRental: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lease_id** | **string**|  |

### Return type

**\Crossly\Model\World\GetWorldPropertyRentalResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getWorldPropertyRenting()`

```php
getWorldPropertyRenting($lease_id): \Crossly\Model\World\GetWorldPropertyRentalResponse
```

One plot you rent, with its payments.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lease_id = 'lease_id_example'; // string

try {
    $result = $apiInstance->getWorldPropertyRenting($lease_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->getWorldPropertyRenting: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lease_id** | **string**|  |

### Return type

**\Crossly\Model\World\GetWorldPropertyRentalResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getWorldRail()`

```php
getWorldRail(): \Crossly\Model\World\GetWorldRailResponse
```

Which Worlds payment rails are on now: cash (card), CBX, or both.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getWorldRail();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->getWorldRail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\World\GetWorldRailResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getWorldSpace()`

```php
getWorldSpace($slug): \Crossly\Model\World\GetWorldSpaceResponse
```

One Space: its layout, host, events and your place in it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string

try {
    $result = $apiInstance->getWorldSpace($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->getWorldSpace: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **slug** | **string**|  |

### Return type

**\Crossly\Model\World\GetWorldSpaceResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getWorldSpaceCanHost()`

```php
getWorldSpaceCanHost(): \Crossly\Model\World\GetWorldSpaceCanHostResponse
```

Whether you may open a Space: sellers only, at most two active.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getWorldSpaceCanHost();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->getWorldSpaceCanHost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\World\GetWorldSpaceCanHostResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getWorldStaffPosting()`

```php
getWorldStaffPosting($id): \Crossly\Model\World\GetWorldStaffPostingResponse
```

One of your postings, with its shifts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getWorldStaffPosting($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->getWorldStaffPosting: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\World\GetWorldStaffPostingResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getWorldStaffReputation()`

```php
getWorldStaffReputation(): \Crossly\Model\World\GetWorldStaffReputationResponse
```

Your employer reputation, rated by the people who worked your public jobs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getWorldStaffReputation();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->getWorldStaffReputation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\World\GetWorldStaffReputationResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getWorldStreetFund()`

```php
getWorldStreetFund($slug): \Crossly\Model\World\GetWorldStreetFundResponse
```

A street's fund: the CBX property payments on its plots over the last four weeks, and the street events it unlocked.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string

try {
    $result = $apiInstance->getWorldStreetFund($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->getWorldStreetFund: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **slug** | **string**|  |

### Return type

**\Crossly\Model\World\GetWorldStreetFundResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getWorldStreetOwned()`

```php
getWorldStreetOwned($id): \Crossly\Model\World\GetWorldStreetOwnedResponse
```

A street you own: tenants, applications, upkeep, look, fund.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getWorldStreetOwned($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->getWorldStreetOwned: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\World\GetWorldStreetOwnedResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getWorldStreetTrespassBarrier()`

```php
getWorldStreetTrespassBarrier($slug): \Crossly\Model\World\GetWorldStreetTrespassBarrierResponse
```

Plot numbers on the street you are trespassed from.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string

try {
    $result = $apiInstance->getWorldStreetTrespassBarrier($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->getWorldStreetTrespassBarrier: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **slug** | **string**|  |

### Return type

**\Crossly\Model\World\GetWorldStreetTrespassBarrierResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getWorldTrialLeaderboard()`

```php
getWorldTrialLeaderboard($course): \Crossly\Model\World\GetWorldTrialLeaderboardResponse
```

A Time Trials course's boards, as the board beside it in the Commons shows them: data.course, week, weekly (this week's ten fastest: rank, name, short, named, ms, at) and allTime (the ten fastest ever, each person once). A name shows only for somebody who chose to be seen by name in the world; everyone else is \"A player\". 404 for an unknown course; course 1 is commons-loop.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$course = 'course_example'; // string

try {
    $result = $apiInstance->getWorldTrialLeaderboard($course);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->getWorldTrialLeaderboard: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **course** | **string**|  |

### Return type

**\Crossly\Model\World\GetWorldTrialLeaderboardResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getWorldTrialMine()`

```php
getWorldTrialMine(): \Crossly\Model\World\GetWorldTrialMineResponse
```

Your Hoverboard Time Trials bests: data.week (its Monday, YYYY-MM-DD, UTC) and courses, each with course (id, name, parMs, rings, lengthM), week (your best lap this week in ms, your place on the weekly board, laps finished, and the split at each ring) or null, and allTime (your best ever in ms, your place on the all-time board, when) or null. Laps are timed by Crossly from where it saw you ride in the world; nothing here writes one.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getWorldTrialMine();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->getWorldTrialMine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\World\GetWorldTrialMineResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getWorldVenueQuote()`

```php
getWorldVenueQuote($id): \Crossly\Model\World\GetWorldVenueQuoteResponse
```

What a hall costs for those days (startsOn, endsOn), the full-refund date, and whether it is free.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getWorldVenueQuote($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->getWorldVenueQuote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\World\GetWorldVenueQuoteResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getWorldWallet()`

```php
getWorldWallet(): \Crossly\Model\World\GetWorldWalletResponse
```

Every balance you hold in Crossly World, read-only: bucksCents (Crossly Bucks, cents); cbx (available, decimals, and the three CBX balances kept apart as base-unit STRINGS -- granted (spend here only), earned (withdrawable once matured), connected (a delegation ceiling on your own wallet, not cash on hand) -- plus pendingCents of cashback not yet matured); cosm (available, decimals, baseUnits string). available:false means that currency is not provisioned on this deployment, not that you hold none.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getWorldWallet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->getWorldWallet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\World\GetWorldWalletResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getWorldWish()`

```php
getWorldWish(): \Crossly\Model\World\GetWorldWishResponse
```

The Wishing Fountain in the Commons: data.day (today, UTC), today (wishes everyone has made today) and mine (madeToday, days -- how many days you have wished on, the Wishmaker pin comes at 7 -- and nextAt, when tomorrow's wish opens). One wish a day; a wish is made by tossing a coin at the fountain in Crossly World, never over the API, and nothing is spent.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getWorldWish();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->getWorldWish: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\World\GetWorldWishResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getWorldWorkEarning()`

```php
getWorldWorkEarning(): \Crossly\Model\World\GetWorldWorkEarningResponse
```

What your shifts paid, by rail.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getWorldWorkEarning();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->getWorldWorkEarning: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\World\GetWorldWorkEarningResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getWorldWorkMine()`

```php
getWorldWorkMine(): \Crossly\Model\World\GetWorldWorkMineResponse
```

Where you work: your seats, applications and your teams’ open jobs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getWorldWorkMine();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->getWorldWorkMine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\World\GetWorldWorkMineResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listGameCoupons()`

```php
listGameCoupons(): \Crossly\Model\Game\ListGameCouponsResponse
```

Your fee-back coupons from house-game wins: Bucks paid out of the fee on your next market purchase.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listGameCoupons();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->listGameCoupons: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Game\ListGameCouponsResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listShowroomItemSearch()`

```php
listShowroomItemSearch($id, $storefront_id): \Crossly\Model\Showroom\ListShowroomItemSearchResponse
```

Search this store's in-stock items (title, brand, SKU) to put on a fixture or in a window slot; each with listed / passport / multi_unit badges.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$storefront_id = 'storefront_id_example'; // string | Which store (else X-Storefront-Id, else your default store).

try {
    $result = $apiInstance->listShowroomItemSearch($id, $storefront_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->listShowroomItemSearch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **storefront_id** | **string**| Which store (else X-Storefront-Id, else your default store). | [optional]

### Return type

**\Crossly\Model\Showroom\ListShowroomItemSearchResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listShowrooms()`

```php
listShowrooms($storefront_id): \Crossly\Model\Showroom\ListShowroomsResponse
```

Your store's showrooms, primary first: name, visibility, auto-include, pinned items, fixtures, billing and the plots each stands on.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$storefront_id = 'storefront_id_example'; // string | Which store (else X-Storefront-Id, else your default store).

try {
    $result = $apiInstance->listShowrooms($storefront_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->listShowrooms: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_id** | **string**| Which store (else X-Storefront-Id, else your default store). | [optional]

### Return type

**\Crossly\Model\Showroom\ListShowroomsResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listSpatialLeases()`

```php
listSpatialLeases(): \Crossly\Model\Spatial\ListSpatialLeasesResponse
```

Plots offered for lease on every street, cheapest first: address, weekly rent and maintenance in CENTS.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listSpatialLeases();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->listSpatialLeases: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Spatial\ListSpatialLeasesResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listSpatialSceneGrants()`

```php
listSpatialSceneGrants($id): \Crossly\Model\Spatial\ListSpatialSceneGrantsResponse
```

Everyone who can currently walk into one of your rooms, and unused invites. Never returns codes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->listSpatialSceneGrants($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->listSpatialSceneGrants: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Spatial\ListSpatialSceneGrantsResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listSpatialSceneWarehouseUnplaced()`

```php
listSpatialSceneWarehouseUnplaced($id): \Crossly\Model\Spatial\ListSpatialSceneWarehouseUnplacedResponse
```

Stock not yet on a shelf in a warehouse room you can arrange (q filters by title).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->listSpatialSceneWarehouseUnplaced($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->listSpatialSceneWarehouseUnplaced: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Spatial\ListSpatialSceneWarehouseUnplacedResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listSpatialSharedWithMe()`

```php
listSpatialSharedWithMe(): \Crossly\Model\Spatial\ListSpatialSharedWithMeResponse
```

Rooms other people let you into.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listSpatialSharedWithMe();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->listSpatialSharedWithMe: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Spatial\ListSpatialSharedWithMeResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listSpatialStreetLeases()`

```php
listSpatialStreetLeases($slug): \Crossly\Model\Spatial\ListSpatialLeasesResponse
```

Plots on a street offered for lease: weekly rent in CENTS and terms.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string

try {
    $result = $apiInstance->listSpatialStreetLeases($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->listSpatialStreetLeases: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **slug** | **string**|  |

### Return type

**\Crossly\Model\Spatial\ListSpatialLeasesResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listWorldAttendantUsage()`

```php
listWorldAttendantUsage(): \Crossly\Model\World\ListWorldAttendantUsageResponse
```

Your AI attendant’s usage log.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listWorldAttendantUsage();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->listWorldAttendantUsage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\World\ListWorldAttendantUsageResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listWorldAvatarCloset()`

```php
listWorldAvatarCloset($limit, $offset): \Crossly\Model\World\ListWorldAvatarClosetResponse
```

Everything you can verifiably wear (your Crossly purchase receipts), newest first: receiptId, item title, brand, size, image, catalog sku/variant, quantity, purchasedAt. Pass a receiptId to POST /v1/world/avatar/equip to put one on. limit 1-200, offset for paging.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int
$offset = 56; // int

try {
    $result = $apiInstance->listWorldAvatarCloset($limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->listWorldAvatarCloset: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**|  | [optional]
 **offset** | **int**|  | [optional]

### Return type

**\Crossly\Model\World\ListWorldAvatarClosetResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listWorldAvatarStock()`

```php
listWorldAvatarStock(): \Crossly\Model\World\ListWorldAvatarStockResponse
```

Items of your OWN inventory you could wear into a room as a walking storefront: inventoryItemId, title, image and the slot it would go on. Pass an inventoryItemId to POST /v1/world/avatar/equip.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listWorldAvatarStock();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->listWorldAvatarStock: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\World\ListWorldAvatarStockResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listWorldAvatarWearables()`

```php
listWorldAvatarWearables(): \Crossly\Model\World\ListWorldAvatarWearablesResponse
```

Wearables you have authored as a designer: id, sku, name, slot, priceBaseUnits (COSM base units, a string), maxSupply, mintedCount, active (false until reviewed). meta.available is false when COSM is not provisioned here.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listWorldAvatarWearables();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->listWorldAvatarWearables: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\World\ListWorldAvatarWearablesResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listWorldBestDressed()`

```php
listWorldBestDressed(): \Crossly\Model\World\ListWorldBestDressedResponse
```

This week's best-dressed board (Monday-based), top ten: name, profile username and loves. Only people still choosing to be seen by name.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listWorldBestDressed();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->listWorldBestDressed: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\World\ListWorldBestDressedResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listWorldCapabilityDeclarations()`

```php
listWorldCapabilityDeclarations(): \Crossly\Model\World\ListWorldCapabilityDeclarationsResponse
```

Your capability declarations, in every review state (pending, live, rejected with the note from the reviewer).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listWorldCapabilityDeclarations();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->listWorldCapabilityDeclarations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\World\ListWorldCapabilityDeclarationsResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listWorldContestStandings()`

```php
listWorldContestStandings($id): \Crossly\Model\World\ListWorldContestStandingsResponse
```

The standings of a contest now: best score first (or lowest, for a time game), ties to whoever got there first.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->listWorldContestStandings($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->listWorldContestStandings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\World\ListWorldContestStandingsResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listWorldContests()`

```php
listWorldContests(): \Crossly\Model\World\ListWorldContestsResponse
```

Open skill contests on Crossly World games, soonest ending first: entry mode (free, sponsored, paid) and prizes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listWorldContests();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->listWorldContests: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\World\ListWorldContestsResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listWorldConventionExhibitors()`

```php
listWorldConventionExhibitors($id): \Crossly\Model\World\ListWorldConventionExhibitorsResponse
```

The host roster: who applied, who was invited, who is coming (by shop handle). Host only; 404 otherwise.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->listWorldConventionExhibitors($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->listWorldConventionExhibitors: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\World\ListWorldConventionExhibitorsResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listWorldConventionMessages()`

```php
listWorldConventionMessages($id): \Crossly\Model\World\ListWorldConventionMessagesResponse
```

Convention messages you may read: the organiser all of them (?with=<userId> for one seller), an exhibitor theirs and the broadcasts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->listWorldConventionMessages($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->listWorldConventionMessages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\World\ListWorldConventionMessagesResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listWorldConventionMine()`

```php
listWorldConventionMine(): \Crossly\Model\World\ListWorldConventionMineResponse
```

Conventions you host and conventions you are exhibiting at.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listWorldConventionMine();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->listWorldConventionMine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\World\ListWorldConventionMineResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listWorldConventions()`

```php
listWorldConventions(): \Crossly\Model\World\ListWorldConventionsResponse
```

Conventions open to sellers now or soon: title, room, dates, and how to get a table (invite, free, fee or revenue share).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listWorldConventions();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->listWorldConventions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\World\ListWorldConventionsResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listWorldCosmCosmetics()`

```php
listWorldCosmCosmetics($tier, $slot): \Crossly\Model\Cosm\ListCosmCosmeticsResponse
```

The active cosmetics catalogue, optionally by tier (premium | earned | stake_exclusive) or slot: sku, name, slot, tier, priceCents (premium only), priceBaseUnits (earned only, COSM base units string), supply, fusable, preview and what it unlocks. Read-only: cosmetics are bought on crossly.net. meta.available / meta.decimals.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tier = 'tier_example'; // string
$slot = 'slot_example'; // string

try {
    $result = $apiInstance->listWorldCosmCosmetics($tier, $slot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->listWorldCosmCosmetics: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tier** | **string**|  | [optional]
 **slot** | **string**|  | [optional]

### Return type

**\Crossly\Model\Cosm\ListCosmCosmeticsResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listWorldCosmDesigns()`

```php
listWorldCosmDesigns(): \Crossly\Model\World\ListWorldCosmDesignsResponse
```

Your COSM designs in the world: popularity toward the free chain unlock a popular limited design earns, whether it is on chain, and your opt-out. Declare what a design does with chain cosm and the design id as the contract.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listWorldCosmDesigns();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->listWorldCosmDesigns: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\World\ListWorldCosmDesignsResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listWorldCosmInventory()`

```php
listWorldCosmInventory(): \Crossly\Model\World\ListWorldCosmInventoryResponse
```

Cosmetics you hold, newest first: ownershipId, cosmeticId, sku, name, slot, tier, how it was acquired, bound, edition number, acquiredAt and what it unlocks. Pass a cosmeticId to POST /v1/world/avatar/equip to wear one. meta.available.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listWorldCosmInventory();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->listWorldCosmInventory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\World\ListWorldCosmInventoryResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listWorldDecorCatalogue()`

```php
listWorldDecorCatalogue($surface): \Crossly\Model\World\ListWorldDecorCatalogueResponse
```

The Decor Shop: every active cosmetic grouped by surface (avatar | home | shop | stall | street) and slot -- name, tier, priceCents (premium: the dollar price, paid in CBX at spot) or priceBaseUnits (earned: COSM, base-unit string), edition supply and remaining, tint swatch, preview, what it unlocks, owned + your edition number, and buyWith. Read-only: buying and minting happen on crossly.net/shop/decor. meta.available, meta.mint {open, reason}, meta.cbx {open, reason} (CBX opens at mint), meta.balances (your COSM and CBX, base-unit strings), meta.surfaces. Never sold by card.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$surface = 'surface_example'; // string

try {
    $result = $apiInstance->listWorldDecorCatalogue($surface);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->listWorldDecorCatalogue: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **surface** | **string**|  | [optional]

### Return type

**\Crossly\Model\World\ListWorldDecorCatalogueResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listWorldDecorDesigns()`

```php
listWorldDecorDesigns(): \Crossly\Model\World\ListWorldDecorDesignsResponse
```

Your decor designs and their review state. available is false until COSM is provisioned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listWorldDecorDesigns();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->listWorldDecorDesigns: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\World\ListWorldDecorDesignsResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listWorldDecorInventory()`

```php
listWorldDecorInventory(): \Crossly\Model\World\ListWorldDecorInventoryResponse
```

Your decor as an INVENTORY. Decor is a quantity: every copy is one unit -- a placed prop (home_prop, prop) uses one per placement, a finish (wallpaper, floor, theme, shopfront, facade, sign style, street lamp/banner/paving/arch, booth canopy/pattern/lights/counter) one per space it dresses; free values are unlimited. Per item: key, value, pair (key:value), name, sku, surface, placeable, tint, owned, placed, available, placements [{ space { kind: home | shop | stall | street, id, name }, count }], copies [{ ownershipId, editionNumber }]. meta.available, meta.spaces (every space you dress). Read-only: placing and retracting happen in the app or on crossly.net.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listWorldDecorInventory();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->listWorldDecorInventory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\World\ListWorldDecorInventoryResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listWorldDecorMarket()`

```php
listWorldDecorMarket(): \Crossly\Model\World\ListWorldDecorMarketResponse
```

Decor copies other people are reselling (asks in COSM); optional pair filter. Read only: listing and buying stay on crossly.net.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listWorldDecorMarket();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->listWorldDecorMarket: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\World\ListWorldDecorMarketResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listWorldDecorMine()`

```php
listWorldDecorMine(): \Crossly\Model\World\ListWorldDecorMineResponse
```

Decor you hold AND decor you have minted to your wallet, newest first: ownershipId, cosmeticId, sku, name, surface, slot, tier, acquiredVia, bound, editionNumber of maxSupply, mintState (held | minting | minted), mintAddress, mintable, and what it unlocks. meta.available, meta.mint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listWorldDecorMine();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->listWorldDecorMine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\World\ListWorldDecorMineResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listWorldDecorStalls()`

```php
listWorldDecorStalls(): \Crossly\Model\Stall\ListStallMineResponse
```

Your stall bookings, to dress their booths.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listWorldDecorStalls();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->listWorldDecorStalls: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Stall\ListStallMineResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listWorldDecorStreets()`

```php
listWorldDecorStreets(): \Crossly\Model\World\ListWorldDecorStreetsResponse
```

Streets you may dress.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listWorldDecorStreets();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->listWorldDecorStreets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\World\ListWorldDecorStreetsResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listWorldDms()`

```php
listWorldDms(): \Crossly\Model\World\ListWorldDmsResponse
```

Your friends (mutual follows) for direct messages: each with userId, name, the last line between you (text, at, mine) or null, and how many of theirs you have not read; most recent first.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listWorldDms();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->listWorldDms: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\World\ListWorldDmsResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listWorldFollowingRooms()`

```php
listWorldFollowingRooms(): \Crossly\Model\World\ListWorldFollowingRoomsResponse
```

The public rooms of people you follow, to walk into.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listWorldFollowingRooms();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->listWorldFollowingRooms: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\World\ListWorldFollowingRoomsResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listWorldFollows()`

```php
listWorldFollows(): \Crossly\Model\World\ListWorldFollowsResponse
```

Everybody you follow in Crossly World, newest first, each with mutual: true when they follow you back (a friend).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listWorldFollows();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->listWorldFollows: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\World\ListWorldFollowsResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listWorldFriendHere()`

```php
listWorldFriendHere(): \Crossly\Model\World\ListWorldFriendsResponse
```

Your friends in Crossly World right now, and where (when they share it).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listWorldFriendHere();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->listWorldFriendHere: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\World\ListWorldFriendsResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listWorldFriends()`

```php
listWorldFriends(): \Crossly\Model\World\ListWorldFriendsResponse
```

Your friends (mutual follows), each with the PUBLIC room they are in right now when they chose to be seen by name there (else null), and their home address slug when they let friends visit. Invisible and anonymous friends are never located.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listWorldFriends();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->listWorldFriends: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\World\ListWorldFriendsResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listWorldGamePackageReceipts()`

```php
listWorldGamePackageReceipts($id): \Crossly\Model\World\ListWorldGamePackageReceiptsResponse
```

Store sales of one of your game packages, newest first: item, price paid, edition, when. Never who bought. Cursor-paged: pass pagination.nextCursor back as ?cursor=.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->listWorldGamePackageReceipts($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->listWorldGamePackageReceipts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\World\ListWorldGamePackageReceiptsResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listWorldGamePackages()`

```php
listWorldGamePackages(): \Crossly\Model\World\ListWorldGamePackagesResponse
```

Your game packages, each with its latest version and review state.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listWorldGamePackages();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->listWorldGamePackages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\World\ListWorldGamePackagesResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listWorldGameRewards()`

```php
listWorldGameRewards(): \Crossly\Model\World\ListWorldGameRewardsResponse
```

Rewards you won in games: granted, or recorded as unfunded for COSM and CBX (a game prints no value).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listWorldGameRewards();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->listWorldGameRewards: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\World\ListWorldGameRewardsResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listWorldGames()`

```php
listWorldGames(): \Crossly\Model\World\ListWorldGamesResponse
```

The Game Directory: every live, reviewed game package with its players, places, rewards, contests and the piece people place.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listWorldGames();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->listWorldGames: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\World\ListWorldGamesResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listWorldHomeBuilding()`

```php
listWorldHomeBuilding(): \Crossly\Model\World\ListWorldHomeBuildingResponse
```

Homes whose owner made you a co-builder.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listWorldHomeBuilding();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->listWorldHomeBuilding: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\World\ListWorldHomeBuildingResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listWorldInteractiveCatalogue()`

```php
listWorldInteractiveCatalogue(): \Crossly\Model\World\ListWorldInteractiveCatalogueResponse
```

Interactive objects: every piece that runs a shared script in a room (first-party and approved creator designs). Per item: model (the piece key a home layout or boutique prop stores), decorValue (the home_prop value its SKU claims), source (first_party | creator), name, blurb, size [x, z] metres, fallbackMesh, cosmeticId (the SKU on the Decor Shop, null when not on sale) and version (a creator design: the approved version every copy runs). Read-only: buying is on crossly.net/shop/decor.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listWorldInteractiveCatalogue();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->listWorldInteractiveCatalogue: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\World\ListWorldInteractiveCatalogueResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listWorldInteractiveDesigns()`

```php
listWorldInteractiveDesigns($archived): \Crossly\Model\World\ListWorldInteractiveDesignsResponse
```

Your interactive-object designs (MML documents you wrote), newest first: id, handle, name, footprint (s | m | l | f), tint, priceBaseUnits (COSM, base-unit string), maxSupply, model, decorValue, cosmeticId, liveVersion (the approved version every copy runs; null = none), withdrawnReason, archivedAt (you archived it: off sale, owned copies keep running; null = not archived), latestVersion { version, state: pending | approved | rejected | withdrawn | cancelled, decisionNote }, inReview. `archived`: exclude (default), include or only archived designs. Read-only: writing, previewing, submitting and archiving happen in the Creator Studio on crossly.net (/studio/creator/creations/interactive/new/edit).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$archived = 'archived_example'; // string

try {
    $result = $apiInstance->listWorldInteractiveDesigns($archived);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->listWorldInteractiveDesigns: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **archived** | **string**|  | [optional]

### Return type

**\Crossly\Model\World\ListWorldInteractiveDesignsResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listWorldJobBoard()`

```php
listWorldJobBoard(): \Crossly\Model\World\ListWorldJobBoardResponse
```

The public Job Board, filterable.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listWorldJobBoard();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->listWorldJobBoard: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\World\ListWorldJobBoardResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listWorldJobPosted()`

```php
listWorldJobPosted(): \Crossly\Model\Common\ListJobShiftsResponse
```

Shifts you posted for your rooms, with who claimed each and how it went.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listWorldJobPosted();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->listWorldJobPosted: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Common\ListJobShiftsResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listWorldMarket()`

```php
listWorldMarket(): \Crossly\Model\World\ListWorldMarketResponse
```

Plots and streets for sale or rent in the Worlds Market.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listWorldMarket();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->listWorldMarket: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\World\ListWorldMarketResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listWorldMarketStreetSigns()`

```php
listWorldMarketStreetSigns($slug): \Crossly\Model\World\ListWorldMarketStreetSignsResponse
```

The street's for-sale and for-rent boards.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string

try {
    $result = $apiInstance->listWorldMarketStreetSigns($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->listWorldMarketStreetSigns: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **slug** | **string**|  |

### Return type

**\Crossly\Model\World\ListWorldMarketStreetSignsResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listWorldOutfits()`

```php
listWorldOutfits(): \Crossly\Model\World\ListWorldOutfitsResponse
```

Your saved outfits (up to 6, oldest first): id, name, appearance (skin, hair, hairColour, eyes, build) and items -- each worn thing as the door it goes back on by (slot, door: cosmetic | receipt | stock, id, label). Put one on with POST /v1/world/outfits/:id/apply.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listWorldOutfits();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->listWorldOutfits: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\World\ListWorldOutfitsResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listWorldPlaceBans()`

```php
listWorldPlaceBans($slug): \Crossly\Model\World\ListWorldPlaceBansResponse
```

Who is banned from a place you own (your boutique or home).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string

try {
    $result = $apiInstance->listWorldPlaceBans($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->listWorldPlaceBans: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **slug** | **string**|  |

### Return type

**\Crossly\Model\World\ListWorldPlaceBansResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listWorldPlaceBundles()`

```php
listWorldPlaceBundles($slug): \Crossly\Model\World\ListWorldPlaceBundlesResponse
```

The owner's bundle deals mapped onto this room's items (itemIds null = any N from the shop). The discount is decided at checkout.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string

try {
    $result = $apiInstance->listWorldPlaceBundles($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->listWorldPlaceBundles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **slug** | **string**|  |

### Return type

**\Crossly\Model\World\ListWorldPlaceBundlesResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listWorldPlaceCollections()`

```php
listWorldPlaceCollections($slug): \Crossly\Model\World\ListWorldPlaceCollectionsResponse
```

The owner's collection rooms: one per category, brand and model they collect.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string

try {
    $result = $apiInstance->listWorldPlaceCollections($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->listWorldPlaceCollections: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **slug** | **string**|  |

### Return type

**\Crossly\Model\World\ListWorldPlaceCollectionsResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listWorldPlaceOffers()`

```php
listWorldPlaceOffers($slug): \Crossly\Model\World\ListWorldPlaceOffersResponse
```

What is for sale in a public room: price, condition and stock, with market references. 404 when no such room is shared.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string

try {
    $result = $apiInstance->listWorldPlaceOffers($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->listWorldPlaceOffers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **slug** | **string**|  |

### Return type

**\Crossly\Model\World\ListWorldPlaceOffersResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listWorldPlaceRadar()`

```php
listWorldPlaceRadar($slug): \Crossly\Model\World\ListWorldPlaceRadarResponse
```

What you have that someone here wants, and what is here that you want: matched on catalog ids.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string

try {
    $result = $apiInstance->listWorldPlaceRadar($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->listWorldPlaceRadar: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **slug** | **string**|  |

### Return type

**\Crossly\Model\World\ListWorldPlaceRadarResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listWorldPlaceTradeTables()`

```php
listWorldPlaceTradeTables($slug): \Crossly\Model\World\ListWorldPlaceTradeTablesResponse
```

The open trade tables in a place: who is sitting and what is laid on the mat.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string

try {
    $result = $apiInstance->listWorldPlaceTradeTables($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->listWorldPlaceTradeTables: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **slug** | **string**|  |

### Return type

**\Crossly\Model\World\ListWorldPlaceTradeTablesResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listWorldPlaceTrades()`

```php
listWorldPlaceTrades($slug): \Crossly\Model\World\ListWorldPlaceTradesResponse
```

Items in this room open to trades, each with its trade post path.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string

try {
    $result = $apiInstance->listWorldPlaceTrades($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->listWorldPlaceTrades: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **slug** | **string**|  |

### Return type

**\Crossly\Model\World\ListWorldPlaceTradesResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listWorldPromoted()`

```php
listWorldPromoted(): \Crossly\Model\World\ListWorldPromotedResponse
```

Promoted places in Crossly World: boosted showrooms and conventions (Sponsored, labelled \"Promoted\"), with the token to send when one is opened.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listWorldPromoted();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->listWorldPromoted: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\World\ListWorldPromotedResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listWorldPropertyPlots()`

```php
listWorldPropertyPlots(): \Crossly\Model\World\ListWorldPropertyPlotsResponse
```

Plots your store owns or rents.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listWorldPropertyPlots();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->listWorldPropertyPlots: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\World\ListWorldPropertyPlotsResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listWorldPropertyRentals()`

```php
listWorldPropertyRentals(): \Crossly\Model\World\ListWorldPropertyRentalsResponse
```

Plots you rent out.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listWorldPropertyRentals();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->listWorldPropertyRentals: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\World\ListWorldPropertyRentalsResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listWorldPropertyRenting()`

```php
listWorldPropertyRenting(): \Crossly\Model\World\ListWorldPropertyRentalsResponse
```

Plots you rent.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listWorldPropertyRenting();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->listWorldPropertyRenting: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\World\ListWorldPropertyRentalsResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listWorldPropertyTrespassed()`

```php
listWorldPropertyTrespassed(): \Crossly\Model\World\ListWorldPropertyTrespassedResponse
```

People your store has banned, owner-wide or from one showroom.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listWorldPropertyTrespassed();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->listWorldPropertyTrespassed: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\World\ListWorldPropertyTrespassedResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listWorldProvenance()`

```php
listWorldProvenance(): \Crossly\Model\World\ListWorldProvenanceResponse
```

Provenance trails: where in Crossly World your purchases were found, newest first (optionally ?listingIds=a,b -- platform listing ids). data: [{ platformListingId, slug (the listing public slug), kind (room | window | stall | space | drop | auction | worn | agent), place (its name, or null when gone), at, line -- e.g. \"Found at The Sneaker Vault, Oct 2026\" }]. Yours only.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listWorldProvenance();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->listWorldProvenance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\World\ListWorldProvenanceResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listWorldQuests()`

```php
listWorldQuests(): \Crossly\Model\World\ListWorldQuestsResponse
```

Every world quest with your progress: key, the pin it earns, goal, target, count, done, colour. meta.wearing is the pin on your nameplate (or null); meta.streak your current and best daily visit streak. Progress only comes from what the server saw -- there is no write of it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listWorldQuests();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->listWorldQuests: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\World\ListWorldQuestsResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listWorldSpaceMine()`

```php
listWorldSpaceMine(): \Crossly\Model\World\ListWorldSpacesResponse
```

Spaces you belong to.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listWorldSpaceMine();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->listWorldSpaceMine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\World\ListWorldSpacesResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listWorldSpaceRequests()`

```php
listWorldSpaceRequests($slug): \Crossly\Model\World\ListWorldSpaceRequestsResponse
```

As host or co-host, who asked to join.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string

try {
    $result = $apiInstance->listWorldSpaceRequests($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->listWorldSpaceRequests: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **slug** | **string**|  |

### Return type

**\Crossly\Model\World\ListWorldSpaceRequestsResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listWorldSpaceWhatsOn()`

```php
listWorldSpaceWhatsOn(): \Crossly\Model\World\ListWorldSpaceWhatsOnResponse
```

Live and upcoming events across Spaces (streets=1 and stage=1 add street and Main Stage events).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listWorldSpaceWhatsOn();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->listWorldSpaceWhatsOn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\World\ListWorldSpaceWhatsOnResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listWorldSpaces()`

```php
listWorldSpaces(): \Crossly\Model\World\ListWorldSpacesResponse
```

The Spaces directory: seller-hosted clubs with a venue, members and events (optional venue filter).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listWorldSpaces();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->listWorldSpaces: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\World\ListWorldSpacesResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listWorldStaffApplicants()`

```php
listWorldStaffApplicants(): \Crossly\Model\World\ListWorldStaffApplicantsResponse
```

Who applied to your postings, with their worker reputation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listWorldStaffApplicants();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->listWorldStaffApplicants: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\World\ListWorldStaffApplicantsResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listWorldStaffPeople()`

```php
listWorldStaffPeople(): \Crossly\Model\World\ListWorldStaffPeopleResponse
```

Everyone working for you: your Settings team and public workers, with their seats.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listWorldStaffPeople();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->listWorldStaffPeople: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\World\ListWorldStaffPeopleResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listWorldStaffPlaces()`

```php
listWorldStaffPlaces(): \Crossly\Model\World\ListWorldStaffPlacesResponse
```

The showrooms, stalls and conventions a job can be posted at, and the pay rails that are live.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listWorldStaffPlaces();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->listWorldStaffPlaces: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\World\ListWorldStaffPlacesResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listWorldStaffPostings()`

```php
listWorldStaffPostings(): \Crossly\Model\World\ListWorldStaffPostingsResponse
```

Your job postings, with their upcoming shifts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listWorldStaffPostings();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->listWorldStaffPostings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\World\ListWorldStaffPostingsResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listWorldStaffShifts()`

```php
listWorldStaffShifts(): \Crossly\Model\World\ListWorldStaffShiftsResponse
```

Your scheduled seats and who is on them.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listWorldStaffShifts();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->listWorldStaffShifts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\World\ListWorldStaffShiftsResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listWorldStreaks()`

```php
listWorldStreaks(): \Crossly\Model\World\ListWorldStreaksResponse
```

The longest current daily visit streaks (2+ days), top ten: name and days. Only people still choosing to be seen by name.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listWorldStreaks();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->listWorldStreaks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\World\ListWorldStreaksResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listWorldTradeMine()`

```php
listWorldTradeMine(): \Crossly\Model\World\ListWorldTradeMineResponse
```

Your trades and each item progress through the authentication gate (verified or failed).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listWorldTradeMine();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->listWorldTradeMine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\World\ListWorldTradeMineResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listWorldTradeTableBinder()`

```php
listWorldTradeTableBinder(): \Crossly\Model\World\ListWorldTradeTableBinderResponse
```

Your binder: unsold collection rows that are catalog items and may be laid on a trade mat -- key, variantId, condition, grade, portfolioId, name, image and valueCents (market value, cents).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listWorldTradeTableBinder();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->listWorldTradeTableBinder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\World\ListWorldTradeTableBinderResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listWorldTradeTableListings()`

```php
listWorldTradeTableListings(): \Crossly\Model\World\ListWorldTradeTableListingsResponse
```

Your open Trade Block trade listings a trade table can be opened on in the world, each with its items' names.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listWorldTradeTableListings();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->listWorldTradeTableListings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\World\ListWorldTradeTableListingsResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listWorldVenues()`

```php
listWorldVenues(): \Crossly\Model\World\ListWorldVenuesResponse
```

The Convention Center halls for rent: size, floor, booths, price per day, and the days already taken (from, to).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listWorldVenues();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->listWorldVenues: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\World\ListWorldVenuesResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateShowroom()`

```php
updateShowroom($storefront_id): \Crossly\Model\Showroom\UpdateShowroomResponse
```

Replace the whole showroom layout (room, fixtures, placements, settings). Validated as a whole: every item must be this store's, every pin must fit its fixture, no two pins share a slot. Send If-Match (or expectedVersion) to refuse with 409 version_conflict if it changed meanwhile.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$storefront_id = 'storefront_id_example'; // string | Which store (else X-Storefront-Id, else your default store).

try {
    $result = $apiInstance->updateShowroom($storefront_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->updateShowroom: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_id** | **string**| Which store (else X-Storefront-Id, else your default store). | [optional]

### Return type

**\Crossly\Model\Showroom\UpdateShowroomResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateShowroom2()`

```php
updateShowroom2($storefront_id): \Crossly\Model\Showroom2\UpdateShowroom2Response
```

Apply showroom ops in order, all or nothing: place, move, remove, fill (from a category / tag / brand / collection / search, in price, age, value or title order), sort, clear, add_fixture, update_fixture, remove_fixture, set_room, set_settings. Idempotent; refusals name the op (details.opIndex) with codes slot_occupied, item_not_in_store, fixture_capacity, unknown_fixture, unknown_display, version_conflict.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$storefront_id = 'storefront_id_example'; // string | Which store (else X-Storefront-Id, else your default store).

try {
    $result = $apiInstance->updateShowroom2($storefront_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->updateShowroom2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_id** | **string**| Which store (else X-Storefront-Id, else your default store). | [optional]

### Return type

**\Crossly\Model\Showroom2\UpdateShowroom2Response**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateShowroom3()`

```php
updateShowroom3($id, $storefront_id): \Crossly\Model\Showroom2\UpdateShowroom2Response
```

Apply ops to one showroom in order, all or nothing (the same ops as PATCH /api/v1/showroom).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$storefront_id = 'storefront_id_example'; // string | Which store (else X-Storefront-Id, else your default store).

try {
    $result = $apiInstance->updateShowroom3($id, $storefront_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->updateShowroom3: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **storefront_id** | **string**| Which store (else X-Storefront-Id, else your default store). | [optional]

### Return type

**\Crossly\Model\Showroom2\UpdateShowroom2Response**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateShowroomById()`

```php
updateShowroomById($id, $storefront_id): \Crossly\Model\Showroom\UpdateShowroomResponse
```

Replace one showroom's whole layout. If-Match (or expectedVersion) refuses with 409 version_conflict on a concurrent edit.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$storefront_id = 'storefront_id_example'; // string | Which store (else X-Storefront-Id, else your default store).

try {
    $result = $apiInstance->updateShowroomById($id, $storefront_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->updateShowroomById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **storefront_id** | **string**| Which store (else X-Storefront-Id, else your default store). | [optional]

### Return type

**\Crossly\Model\Showroom\UpdateShowroomResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateSpatialSceneCosmetic()`

```php
updateSpatialSceneCosmetic($id): \Crossly\Model\Spatial\UpdateSpatialSceneCosmeticResponse
```

Redecorate one of your rooms (wall, floor, lighting, trim...). Unknown keys are dropped; the response is what survived. `clear` lists keys to reset.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->updateSpatialSceneCosmetic($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->updateSpatialSceneCosmetic: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Spatial\UpdateSpatialSceneCosmeticResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateSpatialSceneNode()`

```php
updateSpatialSceneNode($id, $node_id): \Crossly\Model\Spatial\UpdateSpatialSceneNodeResponse
```

Move a rack in one of your warehouse rooms (position in metres).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$node_id = 'node_id_example'; // string

try {
    $result = $apiInstance->updateSpatialSceneNode($id, $node_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->updateSpatialSceneNode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **node_id** | **string**|  |

### Return type

**\Crossly\Model\Spatial\UpdateSpatialSceneNodeResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateSpatialSceneSetting()`

```php
updateSpatialSceneSetting($id): \Crossly\Model\Common\SpatialSceneResponse
```

How one of your rooms is laid out and lit: grouping and sort keys, theme, overlay and the arrival camera. Cosmetics and the shop layout have their own writers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->updateSpatialSceneSetting($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->updateSpatialSceneSetting: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Common\SpatialSceneResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateSpatialSceneShopLayout()`

```php
updateSpatialSceneShopLayout($id): \Crossly\Model\Spatial\UpdateSpatialSceneShopLayoutResponse
```

Save your shop room's sections and displays (validated server-side; the response is the stored layout).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->updateSpatialSceneShopLayout($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->updateSpatialSceneShopLayout: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Spatial\UpdateSpatialSceneShopLayoutResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateSpatialSceneWindow()`

```php
updateSpatialSceneWindow($id): \Crossly\Model\Spatial\UpdateSpatialSceneWindowResponse
```

Choose up to three of your live Crossly listings for the street window of your shop, in slot order. Picks that sell drop out and the newest fill in; an empty list goes back to newest first.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->updateSpatialSceneWindow($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->updateSpatialSceneWindow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Spatial\UpdateSpatialSceneWindowResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateSpatialStreetDecor()`

```php
updateSpatialStreetDecor($slug): \Crossly\Model\Spatial\GetSpatialStreetDecorResponse
```

Dress a street you own with decor you hold (validated against your inventory).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string

try {
    $result = $apiInstance->updateSpatialStreetDecor($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->updateSpatialStreetDecor: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **slug** | **string**|  |

### Return type

**\Crossly\Model\Spatial\GetSpatialStreetDecorResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateSpatialStreetOwned()`

```php
updateSpatialStreetOwned($id): \Crossly\Model\Common\SpatialStreetResponse
```

Who may open a shop on a street you own (open, apply or invite).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->updateSpatialStreetOwned($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->updateSpatialStreetOwned: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Common\SpatialStreetResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateWorldAttendant()`

```php
updateWorldAttendant(): \Crossly\Model\World\UpdateWorldAttendantResponse
```

Create or replace your AI attendant (BYOK: switching it on needs your AI key).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->updateWorldAttendant();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->updateWorldAttendant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\World\UpdateWorldAttendantResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateWorldAvatarIdentity()`

```php
updateWorldAvatarIdentity(): \Crossly\Model\World\UpdateWorldAvatarIdentityResponse
```

Choose named or anonymous. Rooms you are already in keep the old answer until you rejoin.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->updateWorldAvatarIdentity();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->updateWorldAvatarIdentity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\World\UpdateWorldAvatarIdentityResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateWorldAvatarLook()`

```php
updateWorldAvatarLook(): \Crossly\Model\World\UpdateWorldAvatarLookResponse
```

Save your world look to the account, so every device starts from it. look: null stays anonymous. appearance.outfit = { top, outer, bottom, shoes, hat } picks the basic outfit (GET /v1/world/avatar/basics).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->updateWorldAvatarLook();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->updateWorldAvatarLook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\World\UpdateWorldAvatarLookResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateWorldAvatarNftBadge()`

```php
updateWorldAvatarNftBadge(): \Crossly\Model\World\GetWorldAvatarNftBadgeResponse
```

Wear an NFT you hold on your nameplate (null to take it off). Checked again each time you join a room.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->updateWorldAvatarNftBadge();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->updateWorldAvatarNftBadge: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\World\GetWorldAvatarNftBadgeResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateWorldCapabilityWear()`

```php
updateWorldCapabilityWear(): \Crossly\Model\World\GetWorldCapabilityWearResponse
```

Wear a held token on an avatar slot (refId from GET /v1/world/capabilities), or pass refId null to take it off. Its collection must declare a wear capability for that slot.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->updateWorldCapabilityWear();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->updateWorldCapabilityWear: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\World\GetWorldCapabilityWearResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateWorldCollectionCapability()`

```php
updateWorldCollectionCapability($chain, $contract): \Crossly\Model\World\GetWorldCollectionCapabilityResponse
```

Declare what the tokens of a collection can do (the whole declaration, spec crossly.nft-capabilities/1). As its creator (launched on Crossly or claimed) any kind; as a holder, cosmetic kinds only. Replaces your previous declaration; pending if it names an uploaded asset or an always-reviewed kind.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chain = 'chain_example'; // string
$contract = 'contract_example'; // string

try {
    $result = $apiInstance->updateWorldCollectionCapability($chain, $contract);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->updateWorldCollectionCapability: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **chain** | **string**|  |
 **contract** | **string**|  |

### Return type

**\Crossly\Model\World\GetWorldCollectionCapabilityResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateWorldControl()`

```php
updateWorldControl(): \Crossly\Model\World\GetWorldControlResponse
```

Save your world controls settings to the account (any subset of prefs; out-of-range values take the default) and/or mark the controls tutorial seen.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->updateWorldControl();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->updateWorldControl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\World\GetWorldControlResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateWorldConventionHall()`

```php
updateWorldConventionHall($id): \Crossly\Model\World\UpdateWorldConventionHallResponse
```

Save the hall design: { doc, expectedVersion }. Refused on overlaps, narrow aisles, too many booths or a booth with a seller removed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->updateWorldConventionHall($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->updateWorldConventionHall: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\World\UpdateWorldConventionHallResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateWorldConventionMyBooth()`

```php
updateWorldConventionMyBooth($id): \Crossly\Model\World\UpdateWorldConventionMyBoothResponse
```

Pick what your booth shows: { listingIds } — any of your live listings, up to the tier’s capacity.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->updateWorldConventionMyBooth($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->updateWorldConventionMyBooth: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\World\UpdateWorldConventionMyBoothResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateWorldConventionStatus()`

```php
updateWorldConventionStatus($id): \Crossly\Model\World\UpdateWorldConventionStatusResponse
```

Open, start, end or cancel a convention you host.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->updateWorldConventionStatus($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->updateWorldConventionStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\World\UpdateWorldConventionStatusResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateWorldCosmDesignChainAutoUnlock()`

```php
updateWorldCosmDesignChainAutoUnlock($id): \Crossly\Model\Cosm\CreateCosmDesignerChainAutoUnlockResponse
```

Opt one of your COSM designs in or out of the free chain unlock it earns when popular (on by default). Answers its popularity.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->updateWorldCosmDesignChainAutoUnlock($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->updateWorldCosmDesignChainAutoUnlock: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Cosm\CreateCosmDesignerChainAutoUnlockResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateWorldEmoteWheel()`

```php
updateWorldEmoteWheel($update_world_emote_wheel_request): \Crossly\Model\World\UpdateWorldEmoteWheelResponse
```

Arrange your emote wheel: up to 8 slots, each an emote id, a moment slot or null. Returns the saved wheel (locked or unknown ids are dropped).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$update_world_emote_wheel_request = new \Crossly\Model\World\UpdateWorldEmoteWheelRequest(); // \Crossly\Model\World\UpdateWorldEmoteWheelRequest

try {
    $result = $apiInstance->updateWorldEmoteWheel($update_world_emote_wheel_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->updateWorldEmoteWheel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **update_world_emote_wheel_request** | **\Crossly\Model\World\UpdateWorldEmoteWheelRequest**|  |

### Return type

**\Crossly\Model\World\UpdateWorldEmoteWheelResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateWorldFitValueShare()`

```php
updateWorldFitValueShare(): \Crossly\Model\World\UpdateWorldFitValueShareResponse
```

Whether people in a room can see what your outfit is worth.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->updateWorldFitValueShare();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->updateWorldFitValueShare: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\World\UpdateWorldFitValueShareResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateWorldHome()`

```php
updateWorldHome(): \Crossly\Model\Common\WorldHomeResponse
```

Your home: privacy (open, friends, private), theme, and wall, floor and mood decor you hold.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->updateWorldHome();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->updateWorldHome: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Common\WorldHomeResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateWorldHomeBuilder()`

```php
updateWorldHomeBuilder($update_world_home_builder_request): \Crossly\Model\World\UpdateWorldHomeBuilderResponse
```

Set the co-builders of your home: { userIds } -- friends (mutual follows) only, at most 4, replacing the list ([] clears it). They may rearrange your home in the world with your things and add free furniture, never your bought pieces. New co-builders get a world notice.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$update_world_home_builder_request = new \Crossly\Model\World\UpdateWorldHomeBuilderRequest(); // \Crossly\Model\World\UpdateWorldHomeBuilderRequest

try {
    $result = $apiInstance->updateWorldHomeBuilder($update_world_home_builder_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->updateWorldHomeBuilder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **update_world_home_builder_request** | **\Crossly\Model\World\UpdateWorldHomeBuilderRequest**|  |

### Return type

**\Crossly\Model\World\UpdateWorldHomeBuilderResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateWorldHomeLayout()`

```php
updateWorldHomeLayout(): \Crossly\Model\Common\WorldHomeResponse
```

Arrange your home: the full layout (up to 200 pieces you own), validated server-side.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->updateWorldHomeLayout();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->updateWorldHomeLayout: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Common\WorldHomeResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateWorldHomeLayoutBySlug()`

```php
updateWorldHomeLayoutBySlug($slug): \Crossly\Model\Common\WorldHomeResponse
```

Rearrange a home you co-build (never adding the owner bought pieces).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string

try {
    $result = $apiInstance->updateWorldHomeLayoutBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->updateWorldHomeLayoutBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **slug** | **string**|  |

### Return type

**\Crossly\Model\Common\WorldHomeResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateWorldInteractiveDesignDraft()`

```php
updateWorldInteractiveDesignDraft($id): \Crossly\Model\World\UpdateWorldInteractiveDesignDraftResponse
```

Save the draft MML source (up to 64 KB); the response carries its static check.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->updateWorldInteractiveDesignDraft($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->updateWorldInteractiveDesignDraft: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\World\UpdateWorldInteractiveDesignDraftResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateWorldListingHoldersOnly()`

```php
updateWorldListingHoldersOnly($id): \Crossly\Model\World\UpdateWorldListingHoldersOnlyResponse
```

Reserve one of your listings for holders of a collection you declared a holders_only perk for (or release it). Checkout refuses anybody else.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->updateWorldListingHoldersOnly($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->updateWorldListingHoldersOnly: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\World\UpdateWorldListingHoldersOnlyResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateWorldOutfit()`

```php
updateWorldOutfit($id, $update_world_outfit_request): \Crossly\Model\World\UpdateWorldOutfitResponse
```

Rename a saved look: { name (1-32 chars) }. 404 when it is not yours.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$update_world_outfit_request = new \Crossly\Model\World\UpdateWorldOutfitRequest(); // \Crossly\Model\World\UpdateWorldOutfitRequest

try {
    $result = $apiInstance->updateWorldOutfit($id, $update_world_outfit_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->updateWorldOutfit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **update_world_outfit_request** | **\Crossly\Model\World\UpdateWorldOutfitRequest**|  |

### Return type

**\Crossly\Model\World\UpdateWorldOutfitResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateWorldPetActive()`

```php
updateWorldPetActive($update_world_pet_active_request): \Crossly\Model\World\UpdateWorldPetActiveResponse
```

Walk one of your pets with you in the world, or none (kind: null).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$update_world_pet_active_request = new \Crossly\Model\World\UpdateWorldPetActiveRequest(); // \Crossly\Model\World\UpdateWorldPetActiveRequest

try {
    $result = $apiInstance->updateWorldPetActive($update_world_pet_active_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->updateWorldPetActive: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **update_world_pet_active_request** | **\Crossly\Model\World\UpdateWorldPetActiveRequest**|  |

### Return type

**\Crossly\Model\World\UpdateWorldPetActiveResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateWorldPropertyPlotPhoto()`

```php
updateWorldPropertyPlotPhoto($plot_id): \Crossly\Model\World\UpdateWorldPropertyPlotPhotoResponse
```

Store a plot's photo: an image of its frontage you uploaded through POST .../photo/upload-url, a render (buildKey must be the plot's current one) or an in-world capture.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$plot_id = 'plot_id_example'; // string

try {
    $result = $apiInstance->updateWorldPropertyPlotPhoto($plot_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->updateWorldPropertyPlotPhoto: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **plot_id** | **string**|  |

### Return type

**\Crossly\Model\World\UpdateWorldPropertyPlotPhotoResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateWorldPropertyRenting()`

```php
updateWorldPropertyRenting($lease_id): \Crossly\Model\World\UpdateWorldPropertyRentingResponse
```

Turn weekly autopay on or off (card leases).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lease_id = 'lease_id_example'; // string

try {
    $result = $apiInstance->updateWorldPropertyRenting($lease_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->updateWorldPropertyRenting: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lease_id** | **string**|  |

### Return type

**\Crossly\Model\World\UpdateWorldPropertyRentingResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateWorldQuestPin()`

```php
updateWorldQuestPin($update_world_quest_pin_request): \Crossly\Model\World\UpdateWorldQuestPinResponse
```

Wear a pin you EARNED from a quest on your nameplate, or { pin: null } to wear none. 403 for a pin you have not earned. Shows from the next room you walk into.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$update_world_quest_pin_request = new \Crossly\Model\World\UpdateWorldQuestPinRequest(); // \Crossly\Model\World\UpdateWorldQuestPinRequest

try {
    $result = $apiInstance->updateWorldQuestPin($update_world_quest_pin_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->updateWorldQuestPin: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **update_world_quest_pin_request** | **\Crossly\Model\World\UpdateWorldQuestPinRequest**|  |

### Return type

**\Crossly\Model\World\UpdateWorldQuestPinResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateWorldRoomHolderGate()`

```php
updateWorldRoomHolderGate($id): \Crossly\Model\World\UpdateWorldRoomHolderGateResponse
```

Make your room holders-only (its collection rooms follow). Send null to open it again. Returns `{ gate }`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->updateWorldRoomHolderGate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->updateWorldRoomHolderGate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\World\UpdateWorldRoomHolderGateResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateWorldSpace()`

```php
updateWorldSpace($slug): \Crossly\Model\World\UpdateWorldSpaceResponse
```

As host, change a Space name, about or membership.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string

try {
    $result = $apiInstance->updateWorldSpace($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->updateWorldSpace: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **slug** | **string**|  |

### Return type

**\Crossly\Model\World\UpdateWorldSpaceResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateWorldSpaceHolderGate()`

```php
updateWorldSpaceHolderGate($slug): \Crossly\Model\World\UpdateWorldRoomHolderGateResponse
```

Make your Space holders-only: only holders of an NFT collection join it (others can look in). Send null to open it again. Returns `{ gate }`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string

try {
    $result = $apiInstance->updateWorldSpaceHolderGate($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->updateWorldSpaceHolderGate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **slug** | **string**|  |

### Return type

**\Crossly\Model\World\UpdateWorldRoomHolderGateResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateWorldStaffPosting()`

```php
updateWorldStaffPosting($id): \Crossly\Model\Common\WorldStaffPostingResponse
```

Replace a posting; its future unstaffed shifts are re-made.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->updateWorldStaffPosting($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->updateWorldStaffPosting: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Common\WorldStaffPostingResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateWorldStallBookingBooth()`

```php
updateWorldStallBookingBooth($id): \Crossly\Model\World\UpdateWorldStallBookingBoothResponse
```

Dress the booth of a stall you booked (decor you hold).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->updateWorldStallBookingBooth($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->updateWorldStallBookingBooth: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\World\UpdateWorldStallBookingBoothResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateWorldStreetOwnedTheme()`

```php
updateWorldStreetOwnedTheme($id): \Crossly\Model\World\UpdateWorldStreetOwnedThemeResponse
```

Set your street's theme.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\WorldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->updateWorldStreetOwnedTheme($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldApi->updateWorldStreetOwnedTheme: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\World\UpdateWorldStreetOwnedThemeResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
