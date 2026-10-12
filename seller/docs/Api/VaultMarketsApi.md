# Crossly\VaultMarketsApi

All URIs are relative to https://crossly.net/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createVaultLend()**](VaultMarketsApi.md#createVaultLend) | **POST** /v1/vault/{id}/lend | Turn lending on or off for a unit you own in the vault, optionally with your minimum borrow rate (APR in basis points). Returns &#x60;{ lendEnabled, minAprBps }&#x60;.
[**createVaultMarketAccount()**](VaultMarketsApi.md#createVaultMarketAccount) | **POST** /v1/vault-markets/account | Open your account at the custodian partner (once). Returns &#x60;{ status }&#x60;; the custodian verifies it before it is active.
[**createVaultMarketAdminMark()**](VaultMarketsApi.md#createVaultMarketAdminMark) | **POST** /v1/vault-markets/admin-marks | Upload your fund administrator&#39;s prices (&#x60;administrator&#x60;, &#x60;marks: [{ bookKey, day, cents }]&#x60;). Shown beside Crossly&#39;s marks and labelled as yours; they never change a Crossly figure.
[**createVaultMarketAdvance()**](VaultMarketsApi.md#createVaultMarketAdvance) | **POST** /v1/vault-markets/advances | Take an advance against a vault unit that is listed for sale: paid into your custodian account, netted from the sale. Free for 60 days, then the pool rate. Needs a verified ID.
[**createVaultMarketAdvanceRelist()**](VaultMarketsApi.md#createVaultMarketAdvanceRelist) | **POST** /v1/vault-markets/advances/{id}/relist | Relist an advance&#39;s unit at a new price (never so low its sale could not repay the advance).
[**createVaultMarketAgentDraftCancel()**](VaultMarketsApi.md#createVaultMarketAgentDraftCancel) | **POST** /v1/vault-markets/agent/drafts/{id}/cancel | Throw a drafted order away (only while it is still a draft). Returns { ok, draft }.
[**createVaultMarketAgentWatch()**](VaultMarketsApi.md#createVaultMarketAgentWatch) | **POST** /v1/vault-markets/agent/watches | Watch a book key: tell me once when its best bid, lowest ask, last trade or market price crosses a price (cents). Leave out direction for \&quot;crosses\&quot; (whichever way it has to move). Never trades. At most 50 live, each for 90 days.
[**createVaultMarketAlert()**](VaultMarketsApi.md#createVaultMarketAlert) | **POST** /v1/vault-markets/alerts | Alert me when a key&#39;s market price goes above or below a price (fires once).
[**createVaultMarketAlertPrefTest()**](VaultMarketsApi.md#createVaultMarketAlertPrefTest) | **POST** /v1/vault-markets/alert-prefs/test | Send yourself one test alert of a &#x60;kind&#x60; through your own switches. Returns &#x60;{ sent, kind, plan }&#x60;, where plan says per channel: send, off, quiet (held by quiet hours) or unavailable.
[**createVaultMarketAuctionLot()**](VaultMarketsApi.md#createVaultMarketAuctionLot) | **POST** /v1/vault-markets/auctions/lots | Consign a stored, authenticated unit to the next weekly or premier event, with an optional opening price and reserve. The unit is held until the close. Returns &#x60;{ lotId, eventId, endsAt }&#x60;.
[**createVaultMarketAuctionLotBid()**](VaultMarketsApi.md#createVaultMarketAuctionLotBid) | **POST** /v1/vault-markets/auctions/lots/{id}/bids | Leave or raise your maximum on a lot; the system bids for you up to it. A bid in the last 2 minutes extends the lot by 2 minutes. The winner&#39;s saved card is charged at the close through the order book. ID needed above $10,000.
[**createVaultMarketAuctionLotWithdraw()**](VaultMarketsApi.md#createVaultMarketAuctionLotWithdraw) | **POST** /v1/vault-markets/auctions/lots/{id}/withdraw | Withdraw your lot before any bid; the unit goes back on your shelf. Returns &#x60;{ ok }&#x60;.
[**createVaultMarketBlock()**](VaultMarketsApi.md#createVaultMarketBlock) | **POST** /v1/vault-markets/blocks | Place a block buy for an entity: one order booked to the first sub-account in &#x60;plan&#x60; (it pays from its custodian account), split across every sub-account in the plan at the average price, fees included, once it is done and the custodian confirmed each payment. Each share&#39;s cash moves between the entity&#39;s own custodian accounts; its units move only after that settles. Every sub-account must be one you may trade, and its share must fit its limits.
[**createVaultMarketBlockAllocate()**](VaultMarketsApi.md#createVaultMarketBlockAllocate) | **POST** /v1/vault-markets/blocks/{orderId}/allocate | Allocate a done block now (the keeper does it too). Returns &#x60;{ outcome, block }&#x60;: allocated, waiting (a payment or transfer is not settled yet), nothing_filled or none.
[**createVaultMarketBullionFamilyPeg()**](VaultMarketsApi.md#createVaultMarketBullionFamilyPeg) | **POST** /v1/vault-markets/bullion/family-pegs | Set a family-wide spot-pegged quote: one \&quot;any 1 oz gold coin\&quot; quote resting on each product book of a bullion family at the chosen condition (DS, VNDS or Used). When any leg fills it comes off the others and goes back on only for what is left; two fills at once are settled one at a time against what is left. A bid pays from your custodian account. Replaces your live family quote on the same family, condition and side. ID required.
[**createVaultMarketBullionPeg()**](VaultMarketsApi.md#createVaultMarketBullionPeg) | **POST** /v1/vault-markets/bullion/pegs | Set a spot-pegged maker quote on a bullion book key: \&quot;spot plus or minus N cents\&quot; or \&quot;plus or minus N basis points\&quot;, with an optional floor and cap. It rests as a pro limit order re-priced every spot tick and is pulled while spot is stale. Replaces your live quote on the same key and side. ID required.
[**createVaultMarketCollectionWorthWatch()**](VaultMarketsApi.md#createVaultMarketCollectionWorthWatch) | **POST** /v1/vault-markets/collection-worth/watch | Watch every collection item that sits on a vault book key (up to the watchlist cap). Returns &#x60;{ watched, skipped }&#x60;.
[**createVaultMarketCreatorAttribution()**](VaultMarketsApi.md#createVaultMarketCreatorAttribution) | **POST** /v1/vault-markets/creators/attribution | Use a creator code: the creator earns a capped share of the fee Crossly keeps on your Vault Markets trades for a limited window (paid by Crossly, never by you). Only for people new to Vault Markets, once, and never your own code.
[**createVaultMarketCreatorCohostInviteRespond()**](VaultMarketsApi.md#createVaultMarketCreatorCohostInviteRespond) | **POST** /v1/vault-markets/creators/cohost-invites/{id}/respond | For creators: accept or decline an invite to co-host a Market Open launch show (&#x60;accept&#x60; true or false). Accepting needs your vault room verified and adds you to the show as a co-host; your room and the Commons then say you co-host it, with the creator-programme disclosure when it applies.
[**createVaultMarketCreditRepay()**](VaultMarketsApi.md#createVaultMarketCreditRepay) | **POST** /v1/vault-markets/credit/{id}/repay | Repay from your custodian account, interest first. Omit &#x60;amountCents&#x60; to repay everything; pass &#x60;requestId&#x60; to make a retry safe. Repaid in full, the items are free.
[**createVaultMarketDcmLink()**](VaultMarketsApi.md#createVaultMarketDcmLink) | **POST** /v1/vault-markets/dcm/link | Link a partner exchange account to your account (or to a firm sub-account you manage, &#x60;subaccountId&#x60;) so Crossly can show its positions: &#x60;accountRef&#x60; (the account id there) and &#x60;code&#x60; (the one-time link code it gave you). The partner must confirm the code; the code is never stored. Read-only: Crossly never trades on it.
[**createVaultMarketDcmUnlink()**](VaultMarketsApi.md#createVaultMarketDcmUnlink) | **POST** /v1/vault-markets/dcm/unlink | Unlink the partner exchange account from your account (or the firm sub-account &#x60;subaccountId&#x60;): Crossly stops reading it and its hedges leave portfolio margin.
[**createVaultMarketDealerApply()**](VaultMarketsApi.md#createVaultMarketDealerApply) | **POST** /v1/vault-markets/dealer/apply | Apply to be a dealer (ID check first). Ops review; approved dealers get raised limits and their bids show as dealer bids.
[**createVaultMarketDealerBid()**](VaultMarketsApi.md#createVaultMarketDealerBid) | **POST** /v1/vault-markets/dealer/bids | Place a standing dealer bid: a resting GTC/GTD limit buy, flagged as a dealer bid. Approved dealers only.
[**createVaultMarketDealerPool()**](VaultMarketsApi.md#createVaultMarketDealerPool) | **POST** /v1/vault-markets/dealer/pools | Open a curve pool on a key (approved dealers, ID checked): linear (delta in cents) or exponential (delta in bps), spot, fee, levels per side, units it may sell, and a buy budget from your custodian account. Its ladder goes up at once.
[**createVaultMarketDealerPoolClose()**](VaultMarketsApi.md#createVaultMarketDealerPoolClose) | **POST** /v1/vault-markets/dealer/pools/{id}/close | Close a curve pool: its legs come off the book; what filled stays filled.
[**createVaultMarketDealerPoolPreview()**](VaultMarketsApi.md#createVaultMarketDealerPoolPreview) | **POST** /v1/vault-markets/dealer/pools/preview | The bids and asks a set of curve settings would show, and why each side stops where it does. Places nothing.
[**createVaultMarketDeposit()**](VaultMarketsApi.md#createVaultMarketDeposit) | **POST** /v1/vault-markets/deposits | Open a ship-in deposit for an ungraded catalogue item (&#x60;skuId&#x60;, &#x60;variantId&#x60;, &#x60;condition&#x60; DS / VNDS / Used). It is inbound until the vault receives and checks it, then stored in your name. Returns &#x60;{ vaultItem: { id, status } }&#x60;.
[**createVaultMarketDonation()**](VaultMarketsApi.md#createVaultMarketDonation) | **POST** /v1/vault-markets/donations | Give a unit to Crossly Cares (once the charity can receive; otherwise its gate message). Returns &#x60;{ id, markCents }&#x60;.
[**createVaultMarketEntity()**](VaultMarketsApi.md#createVaultMarketEntity) | **POST** /v1/vault-markets/entities | Open an entity account: you become its admin and the custodian partner starts KYB (its own flow; Crossly keeps only its reference). Needs a verified ID and the custodian (503 names what is missing).
[**createVaultMarketEntityEcp()**](VaultMarketsApi.md#createVaultMarketEntityEcp) | **POST** /v1/vault-markets/entities/{id}/ecp | Admin: record the entity&#39;s attestation that it is an eligible contract participant. Raising its caps is still an ops decision.
[**createVaultMarketEntityHalt()**](VaultMarketsApi.md#createVaultMarketEntityHalt) | **POST** /v1/vault-markets/entities/{id}/halts | Admin or risk: the firm kill switch. Halts the entity (no &#x60;subaccountId&#x60;) or one sub-account: open orders on it are cancelled and no new ones are placed until cleared.
[**createVaultMarketEntityHaltClear()**](VaultMarketsApi.md#createVaultMarketEntityHaltClear) | **POST** /v1/vault-markets/entities/{id}/halts/{haltId}/clear | Admin or risk: lift a firm halt.
[**createVaultMarketEntityInvitation()**](VaultMarketsApi.md#createVaultMarketEntityInvitation) | **POST** /v1/vault-markets/entities/{id}/invitation | Accept or decline an invitation (&#x60;accept&#x60;). Trading, admin and risk roles need a verified ID to accept.
[**createVaultMarketEntityKyb()**](VaultMarketsApi.md#createVaultMarketEntityKyb) | **POST** /v1/vault-markets/entities/{id}/kyb | Refresh the entity&#39;s KYB status from the custodian (and its onboarding link while KYB is open).
[**createVaultMarketEntityMember()**](VaultMarketsApi.md#createVaultMarketEntityMember) | **POST** /v1/vault-markets/entities/{id}/members | Admin: invite a Crossly user by email as admin, trader, risk, ops or viewer (a viewer can never place an order), with optional limits and sub-accounts.
[**createVaultMarketEntitySubaccount()**](VaultMarketsApi.md#createVaultMarketEntitySubaccount) | **POST** /v1/vault-markets/entities/{id}/subaccounts | Admin: open a sub-account once the custodian approved the entity; its limits are held to the entity&#39;s caps.
[**createVaultMarketEntitySubaccountClose()**](VaultMarketsApi.md#createVaultMarketEntitySubaccountClose) | **POST** /v1/vault-markets/entities/{id}/subaccounts/{subId}/close | Admin: close a sub-account that holds nothing and has no open orders.
[**createVaultMarketFollowCopyWatchAlertRead()**](VaultMarketsApi.md#createVaultMarketFollowCopyWatchAlertRead) | **POST** /v1/vault-markets/follows/copy-watch/alerts/read | Mark every copy-watch alert read. Returns &#x60;{ marked }&#x60;.
[**createVaultMarketGift()**](VaultMarketsApi.md#createVaultMarketGift) | **POST** /v1/vault-markets/gifts | Give a unit in your vault to another Crossly user (by @username or email). It stays on its shelf; they have 7 days to accept. ID needed above $1,000 at the mark. Returns &#x60;{ id, expiresAt }&#x60;.
[**createVaultMarketGiftAccept()**](VaultMarketsApi.md#createVaultMarketGiftAccept) | **POST** /v1/vault-markets/gifts/{id}/accept | Accept a gift: the unit becomes yours in place. Returns &#x60;{ status }&#x60;.
[**createVaultMarketGiftCancel()**](VaultMarketsApi.md#createVaultMarketGiftCancel) | **POST** /v1/vault-markets/gifts/{id}/cancel | Cancel a gift you sent before it is accepted. Returns &#x60;{ status }&#x60;.
[**createVaultMarketGiftDecline()**](VaultMarketsApi.md#createVaultMarketGiftDecline) | **POST** /v1/vault-markets/gifts/{id}/decline | Decline a gift: the unit stays with the giver. Returns &#x60;{ status }&#x60;.
[**createVaultMarketGradeToVault()**](VaultMarketsApi.md#createVaultMarketGradeToVault) | **POST** /v1/vault-markets/grade-to-vault | Start Grade to Vault on one item (&#x60;source&#x60; inventory or vault_unit). With &#x60;runId&#x60; the grading slot is booked at once (free; your saved card is charged only if the run locks). Nothing is listed until you confirm a price after the grade.
[**createVaultMarketGradeToVaultBook()**](VaultMarketsApi.md#createVaultMarketGradeToVaultBook) | **POST** /v1/vault-markets/grade-to-vault/{id}/book | Book (or re-book) the grading slot of a flow still at \&quot;picked\&quot;. Answers 503 naming GRADING_HUB_ADDRESS when runs are not open.
[**createVaultMarketGradeToVaultCancel()**](VaultMarketsApi.md#createVaultMarketGradeToVaultCancel) | **POST** /v1/vault-markets/grade-to-vault/{id}/cancel | Stop the flow before the card goes to the grader (still picked, or its slot only reserved: nothing was charged).
[**createVaultMarketGradeToVaultKeep()**](VaultMarketsApi.md#createVaultMarketGradeToVaultKeep) | **POST** /v1/vault-markets/grade-to-vault/{id}/keep | Keep the graded unit in your vault without listing it. The flow ends; list it any time from the vault.
[**createVaultMarketGradeToVaultList()**](VaultMarketsApi.md#createVaultMarketGradeToVaultList) | **POST** /v1/vault-markets/grade-to-vault/{id}/list | Confirm the price for the grade the unit came back with (&#x60;confirm: true&#x60;, &#x60;gradeKey&#x60; must match the unit). Pre-trade risk, the price band and the ID line apply, then one shelf ask is placed on the Crossly order book.
[**createVaultMarketGradeToVaultShipped()**](VaultMarketsApi.md#createVaultMarketGradeToVaultShipped) | **POST** /v1/vault-markets/grade-to-vault/{id}/shipped | You mailed the card to the grading hub (an inventory card, once its run locked).
[**createVaultMarketGrading()**](VaultMarketsApi.md#createVaultMarketGrading) | **POST** /v1/vault-markets/grading | Send a raw vault unit on the grading hub&#39;s shelf to a Grading Run (&#x60;runId&#x60;). It is held until it comes back, graded, to the same vault item. The slot is free; your saved card is charged only if the run locks.
[**createVaultMarketGradingPull()**](VaultMarketsApi.md#createVaultMarketGradingPull) | **POST** /v1/vault-markets/grading/{submissionId}/pull | Pull a vault unit out of its run before the run locks (nothing was charged). It goes back on the shelf.
[**createVaultMarketHallLoan()**](VaultMarketsApi.md#createVaultMarketHallLoan) | **POST** /v1/vault-markets/hall/loans | Lend a unit in your Crossly vault to the Hall of Grails: { vaultItemId, credit: &#39;name&#39; | &#39;anonymous&#39; }. A standing loan of display rights only: the unit goes on a plinth, under a plate naming you (or \&quot;a collector\&quot;), in every weekly exhibition whose category it fits. It never moves and stays yours to list, sell or withdraw. Earns reputation per exhibition shown; no cash. Resumes a loan you opted out of while it still shows.
[**createVaultMarketHallLoanCredit()**](VaultMarketsApi.md#createVaultMarketHallLoanCredit) | **POST** /v1/vault-markets/hall/loans/{id}/credit | Change how the plate on a lent unit&#39;s plinth names you, from now: { credit: &#39;name&#39; } (your display name) or { credit: &#39;anonymous&#39; } (\&quot;a collector\&quot;).
[**createVaultMarketHallLoanOptOut()**](VaultMarketsApi.md#createVaultMarketHallLoanOptOut) | **POST** /v1/vault-markets/hall/loans/{id}/opt-out | Opt a Hall of Grails loan out, at any time. A unit on a plinth this week finishes this exhibition (status ending, showingUntil); otherwise the loan ends now (status ended).
[**createVaultMarketIdentityStart()**](VaultMarketsApi.md#createVaultMarketIdentityStart) | **POST** /v1/vault-markets/identity/start | Start (or resume) the one-time ID check the money features and larger orders need. Returns &#x60;{ url }&#x60; to open, or &#x60;{ alreadyVerified: true }&#x60;.
[**createVaultMarketIndex()**](VaultMarketsApi.md#createVaultMarketIndex) | **POST** /v1/vault-markets/indexes | Make an index of your own: 1 to 50 book keys, weighted by mark or equally. Up to 10 per account.
[**createVaultMarketIndexBuy()**](VaultMarketsApi.md#createVaultMarketIndexBuy) | **POST** /v1/vault-markets/indexes/{slug}/buy | Buy the basket: one limit buy per key in the index for 1-5 whole units each, at most &#x60;maxBpsOverMark&#x60; over each key&#39;s mark, IOC or GTC. Every unit is a real item that lands in your vault. Idempotent on &#x60;clientBasketId&#x60;; returns a result per key.
[**createVaultMarketIndexComplaint()**](VaultMarketsApi.md#createVaultMarketIndexComplaint) | **POST** /v1/vault-markets/index-complaints | File a complaint about an index or the method (&#x60;slug&#x60; optional). Every complaint is answered. Returns &#x60;{ id, status, createdAt }&#x60;.
[**createVaultMarketIndexConsultationComment()**](VaultMarketsApi.md#createVaultMarketIndexConsultationComment) | **POST** /v1/vault-markets/index-consultations/{id}/comments | Comment on an open consultation (5 to 5,000 characters; up to 5 per person). Comments are published without your name. Returns &#x60;{ ok }&#x60;.
[**createVaultMarketInstantExit()**](VaultMarketsApi.md#createVaultMarketInstantExit) | **POST** /v1/vault-markets/instant-exit | Sell a unit now at the quoted price: a sell IOC at &#x60;priceCents&#x60; through the pro engine. Refused, with the new quote, if the best bid dropped below it. Crossly never buys or funds it.
[**createVaultMarketJoint()**](VaultMarketsApi.md#createVaultMarketJoint) | **POST** /v1/vault-markets/joint | Open a joint vault (ID first): you hold full rights and accept the current joint terms. &#x60;invite&#x60; sends invitations (@username or email, each with view, trade or full rights). Returns &#x60;{ id, status, invited }&#x60;.
[**createVaultMarketJointClose()**](VaultMarketsApi.md#createVaultMarketJointClose) | **POST** /v1/vault-markets/joint/{id}/close | Close the joint vault (full rights): open joint orders are cancelled and every unit goes back to its owner. Returns &#x60;{ status, unitsReturned }&#x60;.
[**createVaultMarketJointInvite()**](VaultMarketsApi.md#createVaultMarketJointInvite) | **POST** /v1/vault-markets/joint/{id}/invite | Invite a Crossly user (full rights only). They have 14 days and show ID to join. Returns &#x60;{ userId, rights, expiresAt }&#x60;.
[**createVaultMarketJointMemberRemove()**](VaultMarketsApi.md#createVaultMarketJointMemberRemove) | **POST** /v1/vault-markets/joint/{id}/members/{userId}/remove | Remove a member (full rights), or leave when userId is you. Their units go back to their own account and their joint orders are cancelled. Returns &#x60;{ userId, status, unitsReturned, jointStatus }&#x60;.
[**createVaultMarketJointMemberRight()**](VaultMarketsApi.md#createVaultMarketJointMemberRight) | **POST** /v1/vault-markets/joint/{id}/members/{userId}/rights | Set a member rights to view, trade or full (full rights only; the vault always keeps a full member). Returns &#x60;{ userId, rights }&#x60;.
[**createVaultMarketJointRespond()**](VaultMarketsApi.md#createVaultMarketJointRespond) | **POST** /v1/vault-markets/joint/{id}/respond | Accept (ID first; accepts the current joint terms) or decline an invitation. Returns &#x60;{ status }&#x60;.
[**createVaultMarketJointTerm()**](VaultMarketsApi.md#createVaultMarketJointTerm) | **POST** /v1/vault-markets/joint/{id}/terms | Accept the current joint terms (needed to trade after the terms version changes). Returns &#x60;{ termsVersion }&#x60;.
[**createVaultMarketJointTrade()**](VaultMarketsApi.md#createVaultMarketJointTrade) | **POST** /v1/vault-markets/joint/{id}/trades | Place a limit order for the joint vault (trade or full rights, ID shown). A buy (bookKey) is placed on you, paid from your own Vault Markets account, and what it buys is booked to the joint vault. A sell (vaultItemId of a unit in it) is placed on the unit owner of record, who gets the proceeds; pre-trade checks run against you too. Returns &#x60;{ tradeId, side, bookKey, ownerUserId, order }&#x60;.
[**createVaultMarketJointTradeCancel()**](VaultMarketsApi.md#createVaultMarketJointTradeCancel) | **POST** /v1/vault-markets/joint/{id}/trades/{tradeId}/cancel | Cancel a working joint order (trade or full rights); what filled stays filled. Returns &#x60;{ tradeId, order }&#x60;.
[**createVaultMarketJointUnit()**](VaultMarketsApi.md#createVaultMarketJointUnit) | **POST** /v1/vault-markets/joint/{id}/units | Put units you own into the joint vault (each stored and free). They keep you as owner of record and stay on the shelf. Returns &#x60;{ added, vaultItemIds }&#x60;.
[**createVaultMarketJointUnitRemove()**](VaultMarketsApi.md#createVaultMarketJointUnitRemove) | **POST** /v1/vault-markets/joint/{id}/units/remove | Take units out of the joint vault, back to their owner own account (yours at any rights; anyone else with full rights). Returns &#x60;{ removed, vaultItemIds }&#x60;.
[**createVaultMarketLargeTraderReportFile()**](VaultMarketsApi.md#createVaultMarketLargeTraderReportFile) | **POST** /v1/vault-markets/large-trader-reports/{id}/file | File (or amend, or refile) a large-trader report: why you hold it (purpose), who you act for, other accounts you control, whether you plan to add, and a statement of 20+ characters. Returns the report.
[**createVaultMarketLearnQuiz()**](VaultMarketsApi.md#createVaultMarketLearnQuiz) | **POST** /v1/vault-markets/learn/{concept}/quiz | Answer a concept&#39;s quiz (&#x60;answers&#x60;: the chosen choice index per question). Graded on the server; 5 tries an hour.
[**createVaultMarketLiveStreamFeaturedLot()**](VaultMarketsApi.md#createVaultMarketLiveStreamFeaturedLot) | **POST** /v1/vault-markets/live-streams/{id}/featured-lot | Feature an open lot on your live show (or &#x60;lotId: null&#x60; to take it off). Viewers hear LIVE_PIN_CHANGED. Returns &#x60;{ ok }&#x60;.
[**createVaultMarketLoan()**](VaultMarketsApi.md#createVaultMarketLoan) | **POST** /v1/vault-markets/loans | Borrow against stored vault units: they are pledged (no listing, lending or withdrawal) and the market pool lends &#x60;amountCents&#x60; into your custodian account. Needs a verified ID.
[**createVaultMarketLoanRecall()**](VaultMarketsApi.md#createVaultMarketLoanRecall) | **POST** /v1/vault-markets/loans/{id}/recall | Recall a lent unit: the short has 3 days to return one. Returns &#x60;{ recallDueAt }&#x60;.
[**createVaultMarketLoanUnit()**](VaultMarketsApi.md#createVaultMarketLoanUnit) | **POST** /v1/vault-markets/loans/{id}/units | Pledge more stored units to a loan (answers a loan call, or makes room).
[**createVaultMarketLoanUnitRelease()**](VaultMarketsApi.md#createVaultMarketLoanUnitRelease) | **POST** /v1/vault-markets/loans/{id}/units/{vaultItemId}/release | Free one pledged unit, if what is owed still fits inside the other units&#39; limit.
[**createVaultMarketLoanUnitSell()**](VaultMarketsApi.md#createVaultMarketLoanUnitSell) | **POST** /v1/vault-markets/loans/{id}/units/{vaultItemId}/sell | Sell a pledged unit to repay its loan: it is listed at &#x60;priceCents&#x60; (at least the sale floor) and stays pledged until it sells; the proceeds repay the loan first and the rest is yours. Calling it again re-prices it.
[**createVaultMarketLocate()**](VaultMarketsApi.md#createVaultMarketLocate) | **POST** /v1/vault-markets/locates | Hold up to &#x60;qty&#x60; lendable units of &#x60;bookKey&#x60; for 15 minutes so a short can open against them (&#x60;termDays&#x60; 30/90 for a term loan). Needs lending (VAULT_LENDING_TERMS_VERSION) and the ID check. Returns the locate with how many units it holds.
[**createVaultMarketLong()**](VaultMarketsApi.md#createVaultMarketLong) | **POST** /v1/vault-markets/longs | Buy &#x60;units&#x60; units (default 1; at most 25/10/3/1 by liquidity tier A/B/C/D) into your vault with leverage (up to 2x) from the market staking pool, paying up to &#x60;maxCents&#x60; each. A partial fill opens with the units bought and the rest is cancelled. Returns &#x60;{ positionId, matched, units }&#x60;.
[**createVaultMarketMidpoint()**](VaultMarketsApi.md#createVaultMarketMidpoint) | **POST** /v1/vault-markets/midpoint | A hidden block order that trades only at the firm-book midpoint, with another midpoint order of at least your minimum size.
[**createVaultMarketMidpointCancel()**](VaultMarketsApi.md#createVaultMarketMidpointCancel) | **POST** /v1/vault-markets/midpoint/{id}/cancel | Cancel a midpoint order.
[**createVaultMarketMmDmm()**](VaultMarketsApi.md#createVaultMarketMmDmm) | **POST** /v1/vault-markets/mm/dmm | Apply to be the designated market maker on a tier B or C key. Ops approves; one per key.
[**createVaultMarketMmLeave()**](VaultMarketsApi.md#createVaultMarketMmLeave) | **POST** /v1/vault-markets/mm/{id}/leave | Leave a market-maker programme.
[**createVaultMarketMmLp()**](VaultMarketsApi.md#createVaultMarketMmLp) | **POST** /v1/vault-markets/mm/lp | Join a key as a Registered Liquidity Provider (ID needed). Meeting coverage earns the LP rates.
[**createVaultMarketMmMassCancel()**](VaultMarketsApi.md#createVaultMarketMmMassCancel) | **POST** /v1/vault-markets/mm/mass-cancel | Cancel every open order (one key, or only quotes) and every resting leg in one statement: nothing fills between the first cancel and the last.
[**createVaultMarketMmMmpReset()**](VaultMarketsApi.md#createVaultMarketMmMmpReset) | **POST** /v1/vault-markets/mm/mmp/reset | End a market-maker protection freeze early.
[**createVaultMarketOpeningWaitlist()**](VaultMarketsApi.md#createVaultMarketOpeningWaitlist) | **POST** /v1/vault-markets/opening/{slug}/waitlist | Join a key&#39;s waitlist, optionally with a friend&#39;s invite code (&#x60;ref&#x60;). Inviting moves you up the queue; nobody is paid. Returns your place and your own code.
[**createVaultMarketP2pLoanCall()**](VaultMarketsApi.md#createVaultMarketP2pLoanCall) | **POST** /v1/vault-markets/p2p/loans/{id}/call | Lender: call the loan (once it is a day old). A refinancing auction runs for about 30 hours, the rate a new lender gets climbing to the ceiling; repaid or refinanced, you are paid in full; neither by the end, the unit moves to your vault.
[**createVaultMarketP2pLoanCancelCall()**](VaultMarketsApi.md#createVaultMarketP2pLoanCancelCall) | **POST** /v1/vault-markets/p2p/loans/{id}/cancel-call | Lender: take back your call before any other lender has taken the loan over. The refinancing auction stops and the loan carries on as before on its terms.
[**createVaultMarketP2pLoanRefiAuction()**](VaultMarketsApi.md#createVaultMarketP2pLoanRefiAuction) | **POST** /v1/vault-markets/p2p/loans/{id}/refi-auction | Borrower: look for a cheaper lender. A refinancing auction runs for &#x60;hours&#x60; (1-72, default 24); the rate a new lender gets climbs from &#x60;startAprBps&#x60; (default half the loan rate) to just under the loan rate now. The first lender to take it pays your lender off and the loan carries on at that lower rate. Nobody by the end: nothing changes.
[**createVaultMarketP2pLoanRefiAuctionCancel()**](VaultMarketsApi.md#createVaultMarketP2pLoanRefiAuctionCancel) | **POST** /v1/vault-markets/p2p/loans/{id}/refi-auction/cancel | Borrower: stop looking for a cheaper lender before anyone has taken the loan over. The loan carries on unchanged.
[**createVaultMarketP2pLoanRefinance()**](VaultMarketsApi.md#createVaultMarketP2pLoanRefinance) | **POST** /v1/vault-markets/p2p/loans/{id}/refinance | Take over a loan in a refinancing auction (a lender call or a borrower search for a cheaper lender): you pay the old lender everything owed now (refused above &#x60;maxPayoffCents&#x60;), which becomes your loan to the same borrower at the auction rate now. Needs a verified ID, an active account and the current lending terms. Pass &#x60;requestId&#x60; to make a retry safe.
[**createVaultMarketP2pLoanRepay()**](VaultMarketsApi.md#createVaultMarketP2pLoanRepay) | **POST** /v1/vault-markets/p2p/loans/{id}/repay | Borrower: repay from your custodian account to the lender. Without &#x60;amountCents&#x60;, in full (principal plus interest to the second; the unit is free once the custodian has it). With &#x60;amountCents&#x60; below what is owed, a part payment: interest first, then principal, at least the interest owed now and at least $1; the loan stays open on the principal left. Pass &#x60;requestId&#x60; to make a retry safe.
[**createVaultMarketP2pOffer()**](VaultMarketsApi.md#createVaultMarketP2pOffer) | **POST** /v1/vault-markets/p2p/offers | Offer to lend: &#x60;principalCents&#x60; per loan at &#x60;aprBps&#x60; a year against an item (&#x60;bookKey&#x60;) or one unit (&#x60;vaultItemId&#x60;), for up to &#x60;maxLoans&#x60; loans, lasting &#x60;expiresInDays&#x60; (default 90). Nothing is held: the custodian pays from your own account when a borrower takes it. Needs a verified ID, an active account and the current lending terms.
[**createVaultMarketP2pOfferCancel()**](VaultMarketsApi.md#createVaultMarketP2pOfferCancel) | **POST** /v1/vault-markets/p2p/offers/{id}/cancel | Withdraw one of your open offers. Loans already taken from it carry on.
[**createVaultMarketP2pOfferTake()**](VaultMarketsApi.md#createVaultMarketP2pOfferTake) | **POST** /v1/vault-markets/p2p/offers/{id}/take | Borrow: take an offer against one of your stored vault units (&#x60;vaultItemId&#x60;). The unit is pledged (no listing, lending or withdrawal) and the principal is paid into your custodian account. Interest accrues by the second; repay any time. Pass &#x60;requestId&#x60; to make a retry safe.
[**createVaultMarketPaperMissionMarkCheck()**](VaultMarketsApi.md#createVaultMarketPaperMissionMarkCheck) | **POST** /v1/vault-markets/paper/missions/mark-check | Answer the \&quot;Read the mark\&quot; mission: the quality letter (A, B or C) you read on a market page, checked against the stored mark. One answer per market, 10 a day. Returns &#x60;{ bookKey, answer, correct, quality, mission, next }&#x60;.
[**createVaultMarketPaperOrder()**](VaultMarketsApi.md#createVaultMarketPaperOrder) | **POST** /v1/vault-markets/paper/orders | Place a paper order (play money only). It takes visible real liquidity now at book prices with the taker fee simulated; a GTC limit rests the rest with a queue-position estimate, filled later as the real tape reaches it. Sells only paper units you hold (no paper shorts). Never touches the real book. Returns &#x60;{ order, fills }&#x60;.
[**createVaultMarketPaperOrderCancel()**](VaultMarketsApi.md#createVaultMarketPaperOrderCancel) | **POST** /v1/vault-markets/paper/orders/{id}/cancel | Cancel a working paper order: the play cash or paper units it held come back. Returns &#x60;{ order }&#x60;.
[**createVaultMarketPaperReset()**](VaultMarketsApi.md#createVaultMarketPaperReset) | **POST** /v1/vault-markets/paper/reset | Reset your paper account to $10,000 of play money: working paper orders are cancelled, paper positions cleared, and your leaderboard week starts again. Once a day.
[**createVaultMarketPartnerApply()**](VaultMarketsApi.md#createVaultMarketPartnerApply) | **POST** /v1/vault-markets/partners/apply | Apply as a Vault Drop-off Partner (a card shop that takes walk-ins for the vault). Needs the one-time ID check; ops approve.
[**createVaultMarketPartnerBatch()**](VaultMarketsApi.md#createVaultMarketPartnerBatch) | **POST** /v1/vault-markets/partners/batches | An approved partner sends walk-ins in under its code: each item (catalogue variant, condition, grade, photos) becomes an inbound vault unit; the box gets one prepaid label. The partner earns a capped share of Crossly&#39;s fee on each unit&#39;s first sale.
[**createVaultMarketPoolStake()**](VaultMarketsApi.md#createVaultMarketPoolStake) | **POST** /v1/vault-markets/pool/stakes | Stake CBX you hold at the custodian into the market pool (base units, as a string). Returns &#x60;{ stakeId, shares }&#x60;.
[**createVaultMarketPoolStakeUnstake()**](VaultMarketsApi.md#createVaultMarketPoolStakeUnstake) | **POST** /v1/vault-markets/pool/stakes/{id}/unstake | Unstake: paid out after the 7-day cooldown. Returns &#x60;{ cooldownUntil }&#x60;.
[**createVaultMarketPortfolioMarginEnroll()**](VaultMarketsApi.md#createVaultMarketPortfolioMarginEnroll) | **POST** /v1/vault-markets/portfolio-margin/enroll | Admin: put a firm sub-account under portfolio margin. Needs VAULT_LEVERAGE_VENUE, your ID, an ECP-attested entity that passed KYB, and the minimum equity. Its positions are then margined on the whole account, recalculated every 5 minutes; calls and auctions are unchanged. Audited.
[**createVaultMarketPortfolioMarginLeave()**](VaultMarketsApi.md#createVaultMarketPortfolioMarginLeave) | **POST** /v1/vault-markets/portfolio-margin/leave | Admin: take a firm sub-account off portfolio margin. Each position is then held to its own tier floors again and may be called at once. Audited.
[**createVaultMarketPortfolioMarginWhatIf()**](VaultMarketsApi.md#createVaultMarketPortfolioMarginWhatIf) | **POST** /v1/vault-markets/portfolio-margin/what-if | The portfolio margin requirement of a firm sub-account before and after a trade (&#x60;bookKey&#x60;, &#x60;side&#x60; buy or sell, &#x60;units&#x60;), at the Crossly mark with fees left out. Changes nothing.
[**createVaultMarketPositionCancel()**](VaultMarketsApi.md#createVaultMarketPositionCancel) | **POST** /v1/vault-markets/positions/{id}/cancel | Cancel the working order: an unfilled opening order cancels the position; an unfilled cover or close leaves it open. Returns &#x60;{ ok }&#x60;.
[**createVaultMarketPositionClose()**](VaultMarketsApi.md#createVaultMarketPositionClose) | **POST** /v1/vault-markets/positions/{id}/close | Close a leveraged long: all its units, or &#x60;units&#x60; of them, each sold for at least &#x60;minCents&#x60;; each sale repays the pool first.
[**createVaultMarketPositionCollateral()**](VaultMarketsApi.md#createVaultMarketPositionCollateral) | **POST** /v1/vault-markets/positions/{id}/collateral | Answer a margin call: a short posts more collateral (USD, or CBX at half value); a leveraged long pays down its pool loan. Returns the position.
[**createVaultMarketPositionCover()**](VaultMarketsApi.md#createVaultMarketPositionCover) | **POST** /v1/vault-markets/positions/{id}/cover | Cover a short: all its units, or &#x60;units&#x60; of them, each buying any unit of the key into the vault for up to &#x60;maxCents&#x60;; each goes back to its lender.
[**createVaultMarketPriceWidget()**](VaultMarketsApi.md#createVaultMarketPriceWidget) | **POST** /v1/vault-markets/price-widgets | Make a price widget for one vault market (&#x60;kind&#x60; mark + &#x60;bookKey&#x60;) or one public index (&#x60;kind&#x60; index + &#x60;indexSlug&#x60;): range, layout (compact or chart), theme (auto, light, dark), optionally your own affiliate code for the link back and the sites allowed to show it (empty &#x3D; any). Returns the widget with its snippets.
[**createVaultMarketPriceWidgetPreview()**](VaultMarketsApi.md#createVaultMarketPriceWidgetPreview) | **POST** /v1/vault-markets/price-widgets/preview | What a widget would show before you save it: &#x60;view&#x60; (value, move, quality, n, as-of, link back) and &#x60;html&#x60;, the exact page the iframe serves. Nothing is stored.
[**createVaultMarketProBracket()**](VaultMarketsApi.md#createVaultMarketProBracket) | **POST** /v1/vault-markets/pro/brackets | A buy order with a take-profit and/or stop-loss attached; the exits arm as an OCO pair for what the entry fills.
[**createVaultMarketProLinkCancel()**](VaultMarketsApi.md#createVaultMarketProLinkCancel) | **POST** /v1/vault-markets/pro/links/{id}/cancel | Cancel a linked order: its open child orders come off; a bracket&#39;s entry stays.
[**createVaultMarketProOco()**](VaultMarketsApi.md#createVaultMarketProOco) | **POST** /v1/vault-markets/pro/oco | Two orders on one key, one cancels the other: when one fills or its stop triggers, the other is cancelled (a partial fill shrinks it).
[**createVaultMarketProOrder()**](VaultMarketsApi.md#createVaultMarketProOrder) | **POST** /v1/vault-markets/pro/orders | Place an order on a vault book: limit, market (protected, IOC), stop or stop-limit; GTC, GTD, IOC or FOK; post-only; an iceberg &#x60;displayQuantity&#x60;; a TWAP or VWAP algo over a window. Idempotent on &#x60;clientOrderId&#x60;. &#x60;subaccountId&#x60; trades for a firm sub-account you may trade (your role, its KYB, its limits, no firm halt; buys pay from its custodian account and land in it).
[**createVaultMarketProOrderCancel()**](VaultMarketsApi.md#createVaultMarketProOrderCancel) | **POST** /v1/vault-markets/pro/orders/{id}/cancel | Cancel an order; what filled stays filled.
[**createVaultMarketProOrderCancelAll()**](VaultMarketsApi.md#createVaultMarketProOrderCancelAll) | **POST** /v1/vault-markets/pro/orders/cancel-all | Cancel every open order, or every one on a book key. Returns &#x60;{ cancelled }&#x60;.
[**createVaultMarketProOrderReplace()**](VaultMarketsApi.md#createVaultMarketProOrderReplace) | **POST** /v1/vault-markets/pro/orders/{id}/replace | Amend an order&#39;s price, stop or quantity (cancel-replace: it re-queues at its new price).
[**createVaultMarketProQuote()**](VaultMarketsApi.md#createVaultMarketProQuote) | **POST** /v1/vault-markets/pro/quotes | Market makers: set a two-sided post-only quote on a book key (replaces the last). With cancel-on-disconnect (default) heartbeat every 30 s or it is pulled.
[**createVaultMarketProQuoteHeartbeat()**](VaultMarketsApi.md#createVaultMarketProQuoteHeartbeat) | **POST** /v1/vault-markets/pro/quotes/heartbeat | Keep your quotes alive (cancel-on-disconnect). Returns &#x60;{ quotes, at }&#x60;.
[**createVaultMarketProTrailingStop()**](VaultMarketsApi.md#createVaultMarketProTrailingStop) | **POST** /v1/vault-markets/pro/trailing-stops | A trailing stop: its stop follows the best price since it was placed, &#x60;trailBps&#x60; or &#x60;trailCents&#x60; behind (under the high for a sell, over the low for a buy).
[**createVaultMarketProfileFollow()**](VaultMarketsApi.md#createVaultMarketProfileFollow) | **POST** /v1/vault-markets/profiles/{handle}/follow | Follow someone with a public vault: their new vault buys appear in your feed. No copy trading.
[**createVaultMarketRecurring()**](VaultMarketsApi.md#createVaultMarketRecurring) | **POST** /v1/vault-markets/recurring | Start a recurring buy: one whole unit of a key every week, two weeks or month, at no more than &#x60;maxPriceCents&#x60; and/or the mark plus &#x60;capBpsOverMark&#x60;; card (with an optional backup) or custodian; optional auto-lend.
[**createVaultMarketRfq()**](VaultMarketsApi.md#createVaultMarketRfq) | **POST** /v1/vault-markets/rfq | Ask for a quote on a block: dealers, the key&#39;s DMM and LPs, and holders are told, anonymously. Answers are firm for 60 s. Your limit is never shown.
[**createVaultMarketRfqAccept()**](VaultMarketsApi.md#createVaultMarketRfqAccept) | **POST** /v1/vault-markets/rfq/{id}/accept | Take one answer: it fills as a block through the normal fill path (fees by role, self-trade prevention, halts, LULD).
[**createVaultMarketRfqCancel()**](VaultMarketsApi.md#createVaultMarketRfqCancel) | **POST** /v1/vault-markets/rfq/{id}/cancel | Cancel your open quote request.
[**createVaultMarketRfqRespond()**](VaultMarketsApi.md#createVaultMarketRfqRespond) | **POST** /v1/vault-markets/rfq/{id}/respond | Answer a quote request for the full quantity with a firm price, good for 60 s. Selling needs the units free in your vault; buying pays from your Vault Markets custodian account.
[**createVaultMarketRfqResponseWithdraw()**](VaultMarketsApi.md#createVaultMarketRfqResponseWithdraw) | **POST** /v1/vault-markets/rfq/responses/{id}/withdraw | Withdraw your live answer to a quote request.
[**createVaultMarketSetGoal()**](VaultMarketsApi.md#createVaultMarketSetGoal) | **POST** /v1/vault-markets/set-goals | Start a goal on a catalogue set (category, brandSlug, modelSlug from the set search), optionally with a target: one condition, and any grade, ungraded, or one exact grade. One live goal per set.
[**createVaultMarketSetGoalBasket()**](VaultMarketsApi.md#createVaultMarketSetGoalBasket) | **POST** /v1/vault-markets/set-goals/{id}/basket | Place the \&quot;complete my set\&quot; basket bid: one GTC limit buy per missing piece, under a hard budget, paid by one of your saved cards or your custodian account. Every leg passes pre-trade risk and the ID line like any order. Idempotent on clientBasketId. One working basket per goal; its legs are cancelled once the set is complete.
[**createVaultMarketSetGoalBasketCancel()**](VaultMarketsApi.md#createVaultMarketSetGoalBasketCancel) | **POST** /v1/vault-markets/set-goals/{id}/basket/cancel | Cancel the goal working basket bid: every working leg comes off the book; what already filled stays in your vault.
[**createVaultMarketShareCard()**](VaultMarketsApi.md#createVaultMarketShareCard) | **POST** /v1/vault-markets/share-cards | Make a verified share card of a position, a vault unit, a public index or your portfolio (&#x60;kind&#x60;, &#x60;refId&#x60;). The % on it is the price move since your real fill; amounts stay hidden unless &#x60;showAmounts&#x60;.
[**createVaultMarketShort()**](VaultMarketsApi.md#createVaultMarketShort) | **POST** /v1/vault-markets/shorts | Short a book key: borrow &#x60;units&#x60; lent units (default 1; at most 25/10/3/1 by liquidity tier A/B/C/D) and sell each at &#x60;limitCents&#x60; or better, posting collateral for all of them (50% of the mark each; CBX counts at half, up to 30%). All units are borrowed or none unless &#x60;allowPartial&#x60;. A partial sale opens with the units sold. Returns &#x60;{ positionId, matched, units }&#x60;.
[**createVaultMarketSupplyBatchLabel()**](VaultMarketsApi.md#createVaultMarketSupplyBatchLabel) | **POST** /v1/vault-markets/supply/batches/{id}/label | Buy a box&#39;s prepaid label again after it failed (for example once a ship-from address is saved). A box that has a label keeps it.
[**createVaultMarketSupplyInvite()**](VaultMarketsApi.md#createVaultMarketSupplyInvite) | **POST** /v1/vault-markets/supply/invites/{id} | Accept or decline a Market Open invite (&#x60;accept&#x60;).
[**createVaultMarketSupplySend()**](VaultMarketsApi.md#createVaultMarketSupplySend) | **POST** /v1/vault-markets/supply/send | Send inventory items matched to a catalogue variant to the vault as one box: each becomes an inbound vault unit, and the box gets one prepaid inbound label (a PDF to print). Optional: auto-list each unit in the vault book at a share of the mark once stored, and lend when idle. Items that cannot go say why. Crosslisted listings stay live.
[**createVaultMarketTerm()**](VaultMarketsApi.md#createVaultMarketTerm) | **POST** /v1/vault-markets/terms | Accept the current lending terms (needed to lend or short). Returns &#x60;{ termsVersion }&#x60;.
[**createVaultMarketTodClaimObject()**](VaultMarketsApi.md#createVaultMarketTodClaimObject) | **POST** /v1/vault-markets/tod/claims/{id}/object | Stop a transfer-on-death claim made on your own account. Returns &#x60;{ id, status, estateUnlocked }&#x60;.
[**createVaultMarketTodMyClaim()**](VaultMarketsApi.md#createVaultMarketTodMyClaim) | **POST** /v1/vault-markets/tod/my-claims | Start a claim as a named beneficiary (ID first), naming the account holder by @username or email. It stays a draft until you add documents and submit. Returns &#x60;{ id, status, existing }&#x60;.
[**createVaultMarketTodMyClaimDocument()**](VaultMarketsApi.md#createVaultMarketTodMyClaimDocument) | **POST** /v1/vault-markets/tod/my-claims/{id}/documents | Add one document to a draft claim (or one ops asked more of): kind, filename and the file as base64 (PDF, JPEG or PNG, up to 8 MB). Kept privately for ops review. Returns &#x60;{ id, kind, label, filename, bytes }&#x60;.
[**createVaultMarketTodMyClaimSubmit()**](VaultMarketsApi.md#createVaultMarketTodMyClaimSubmit) | **POST** /v1/vault-markets/tod/my-claims/{id}/submit | Send a claim for ops review (it needs a death certificate). The account holder is told and can stop it. Returns &#x60;{ id, status }&#x60;.
[**createVaultMarketTodMyClaimWithdraw()**](VaultMarketsApi.md#createVaultMarketTodMyClaimWithdraw) | **POST** /v1/vault-markets/tod/my-claims/{id}/withdraw | Withdraw a claim before it is released. Returns &#x60;{ id, status }&#x60;.
[**createVaultMarketTodTerm()**](VaultMarketsApi.md#createVaultMarketTodTerm) | **POST** /v1/vault-markets/tod/terms | Accept the current transfer-on-death terms. Returns &#x60;{ termsVersion }&#x60;.
[**createVaultMarketUnitEvidenceScan()**](VaultMarketsApi.md#createVaultMarketUnitEvidenceScan) | **POST** /v1/vault-markets/units/{id}/evidence/scans | Add a finished scan of your own (&#x60;captureId&#x60;, of the same catalogue item) to your vault unit. Shown as added by the owner, not as intake evidence.
[**createVaultMarketUnitSellNow()**](VaultMarketsApi.md#createVaultMarketUnitSellNow) | **POST** /v1/vault-markets/units/{id}/sell-now | Sell one unit of this item now into the best bid (Instant Exit: an immediate-or-cancel pro order), never below &#x60;minCents&#x60;. Returns &#x60;{ status: filled | missed, filledCents, quote, order }&#x60;.
[**createVaultMarketValuationStatement()**](VaultMarketsApi.md#createVaultMarketValuationStatement) | **POST** /v1/vault-markets/valuation-statements | Issue an insurance or appraisal statement for a day: frozen with the sha256 of its record, sealed in the Crossly audit chain, with a public verify link. preparedFor and policyRef are printed on it and never shown on verify. Moves no money.
[**createVaultMarketWatchlist()**](VaultMarketsApi.md#createVaultMarketWatchlist) | **POST** /v1/vault-markets/watchlist | Watch a book key. Returns &#x60;{ bookKey, watching }&#x60;.
[**createVaultMarketWidgetToken()**](VaultMarketsApi.md#createVaultMarketWidgetToken) | **POST** /v1/vault-markets/widget/tokens | Mint a widget token for one phone (&#x60;deviceName&#x60;, &#x60;installId&#x60;); minting again with the same pair replaces that phone token. The token reads the widget summary and nothing else, and is returned once. At most five phones.
[**createVaultReceiptTokenConfirm()**](VaultMarketsApi.md#createVaultReceiptTokenConfirm) | **POST** /v1/vault/receipt-tokens/{id}/confirm | After your wallet sent the export: read the chain and mark the token live once its one token exists. Pass the &#x60;signature&#x60; your wallet returned to record it (kept only if it landed).
[**createVaultReceiptTokenExport()**](VaultMarketsApi.md#createVaultReceiptTokenExport) | **POST** /v1/vault/receipt-tokens/export | Send one unit (&#x60;vaultItemId&#x60;) warehouse receipt to one of your verified Solana wallets (&#x60;wallet&#x60;) as a token, accepting the current terms (&#x60;acceptTerms&#x60;). Returns a base64 transaction already signed by the new mint and the receipts authority: your wallet pays the rent and must sign and send it within about two minutes, then call confirm. Nothing is minted until it does. Needs a verified ID; the unit must be stored, unpledged, not lent and not for sale.
[**createVaultReceiptTokenRedeem()**](VaultMarketsApi.md#createVaultReceiptTokenRedeem) | **POST** /v1/vault/receipt-tokens/{id}/redeem | Redeem a receipt token held in one of your verified Solana wallets (&#x60;wallet&#x60;): returns an unsigned base64 burn your wallet signs and sends (it also closes the token account and returns its rent to you). Once it lands, call redeem/confirm and the unit is yours in the vault. Refused while the token is frozen.
[**createVaultReceiptTokenRedeemConfirm()**](VaultMarketsApi.md#createVaultReceiptTokenRedeemConfirm) | **POST** /v1/vault/receipt-tokens/{id}/redeem/confirm | After your wallet sent the redeem: read the chain; once the token is burned the unit moves into your vault (if it was not yours already). Pass the &#x60;signature&#x60; to record it.
[**createVaultReceiptTokenWalletAllow()**](VaultMarketsApi.md#createVaultReceiptTokenWalletAllow) | **POST** /v1/vault/receipt-tokens/wallets/allow | Put one of your verified Solana wallets (&#x60;wallet&#x60;) on the receipt-token allow-list so it can hold and receive receipt tokens. Returns a base64 transaction already signed by the receipts authority: the wallet pays the small rent (about 0.001 SOL) and must sign and send it within about two minutes. Needs a verified ID and a wallet that passes the sanctions screen.
[**deleteVaultMarketAgentWatch()**](VaultMarketsApi.md#deleteVaultMarketAgentWatch) | **DELETE** /v1/vault-markets/agent/watches/{id} | Cancel a live price watch. Returns the watch.
[**deleteVaultMarketAlert()**](VaultMarketsApi.md#deleteVaultMarketAlert) | **DELETE** /v1/vault-markets/alerts/{id} | Delete a price alert. Returns &#x60;{ ok }&#x60;.
[**deleteVaultMarketBullionFamilyPeg()**](VaultMarketsApi.md#deleteVaultMarketBullionFamilyPeg) | **DELETE** /v1/vault-markets/bullion/family-pegs/{id} | Stop a family-wide quote: every leg order comes off the book; what filled stays filled.
[**deleteVaultMarketBullionPeg()**](VaultMarketsApi.md#deleteVaultMarketBullionPeg) | **DELETE** /v1/vault-markets/bullion/pegs/{id} | Stop a spot-pegged quote: its resting order comes off the book; what filled stays filled.
[**deleteVaultMarketDealerBand()**](VaultMarketsApi.md#deleteVaultMarketDealerBand) | **DELETE** /v1/vault-markets/dealer/bands | Stop a band on a key; its standing bid comes off.
[**deleteVaultMarketEntityMember()**](VaultMarketsApi.md#deleteVaultMarketEntityMember) | **DELETE** /v1/vault-markets/entities/{id}/members/{memberId} | Admin: remove a member (or leave, yourself). An entity always keeps one admin.
[**deleteVaultMarketFollowCopyWatch()**](VaultMarketsApi.md#deleteVaultMarketFollowCopyWatch) | **DELETE** /v1/vault-markets/follows/copy-watch/{handle} | Stop copy-watching a collector.
[**deleteVaultMarketIndex()**](VaultMarketsApi.md#deleteVaultMarketIndex) | **DELETE** /v1/vault-markets/indexes/{slug} | Delete an index of your own. Returns &#x60;{ ok }&#x60;.
[**deleteVaultMarketLocate()**](VaultMarketsApi.md#deleteVaultMarketLocate) | **DELETE** /v1/vault-markets/locates/{id} | Release a live locate before it lapses.
[**deleteVaultMarketOpeningWaitlist()**](VaultMarketsApi.md#deleteVaultMarketOpeningWaitlist) | **DELETE** /v1/vault-markets/opening/{slug}/waitlist | Leave a key&#39;s waitlist.
[**deleteVaultMarketPriceWidget()**](VaultMarketsApi.md#deleteVaultMarketPriceWidget) | **DELETE** /v1/vault-markets/price-widgets/{id} | Delete a widget. Pages that still paste it show that it is no longer available. Returns &#x60;{ id, archived }&#x60;.
[**deleteVaultMarketProQuote()**](VaultMarketsApi.md#deleteVaultMarketProQuote) | **DELETE** /v1/vault-markets/pro/quotes | Pull your quote on a book key, or every quote. Returns &#x60;{ pulled }&#x60;.
[**deleteVaultMarketProfileFollow()**](VaultMarketsApi.md#deleteVaultMarketProfileFollow) | **DELETE** /v1/vault-markets/profiles/{handle}/follow | Stop following someone.
[**deleteVaultMarketRecurring()**](VaultMarketsApi.md#deleteVaultMarketRecurring) | **DELETE** /v1/vault-markets/recurring/{id} | Stop a recurring buy for good; its history stays.
[**deleteVaultMarketSetGoal()**](VaultMarketsApi.md#deleteVaultMarketSetGoal) | **DELETE** /v1/vault-markets/set-goals/{id} | Remove a set goal. A working basket bid is cancelled first; what filled stays in your vault.
[**deleteVaultMarketShareCard()**](VaultMarketsApi.md#deleteVaultMarketShareCard) | **DELETE** /v1/vault-markets/share-cards/{id} | Take a share card down: its link and image stop working. Returns &#x60;{ ok }&#x60;.
[**deleteVaultMarketSupplyRoundUp()**](VaultMarketsApi.md#deleteVaultMarketSupplyRoundUp) | **DELETE** /v1/vault-markets/supply/round-up | Stop the round-up (its history stays; an armed buy is cancelled).
[**deleteVaultMarketUnitEvidence()**](VaultMarketsApi.md#deleteVaultMarketUnitEvidence) | **DELETE** /v1/vault-markets/units/{id}/evidence/{evidenceId} | Take back a scan you added to your vault unit (intake evidence stays).
[**deleteVaultMarketWatchlist()**](VaultMarketsApi.md#deleteVaultMarketWatchlist) | **DELETE** /v1/vault-markets/watchlist | Stop watching a book key (&#x60;?bookKey&#x3D;&#x60;). Returns &#x60;{ bookKey, watching }&#x60;.
[**deleteVaultMarketWidgetToken()**](VaultMarketsApi.md#deleteVaultMarketWidgetToken) | **DELETE** /v1/vault-markets/widget/tokens | Turn the widget off on every phone: revokes all your widget tokens. Returns &#x60;{ revoked }&#x60;, how many.
[**deleteVaultMarketWidgetTokenById()**](VaultMarketsApi.md#deleteVaultMarketWidgetTokenById) | **DELETE** /v1/vault-markets/widget/tokens/{id} | Turn the widget off on one phone: revokes that widget token at once. Only a widget token can be revoked here.
[**getVaultAttestation()**](VaultMarketsApi.md#getVaultAttestation) | **GET** /v1/vault/attestations | Vault attestations: independent physical counts, the insurance certificate (with a warning when insured value in the vault exceeds its aggregate or per-occurrence limit), SOC 1 Type II and SOC 2 reports. Each carries its signed document.
[**getVaultMarketAccount()**](VaultMarketsApi.md#getVaultMarketAccount) | **GET** /v1/vault-markets/account | Which Vault Markets registrations are live (and the env each waits on), your custodian account, limits and balances.
[**getVaultMarketAdl()**](VaultMarketsApi.md#getVaultMarketAdl) | **GET** /v1/vault-markets/adl | The insurance fund (booked and free to draw), the most one event may draw before auto-deleveraging (ADL) starts, the loss waterfall in order, and the latest ADL events (no user or position ids). Money in cents.
[**getVaultMarketAdlPosition()**](VaultMarketsApi.md#getVaultMarketAdlPosition) | **GET** /v1/vault-markets/adl/positions/{id} | One of your positions with its ADL lights (0 once it has ended).
[**getVaultMarketAdvanceQuote()**](VaultMarketsApi.md#getVaultMarketAdvanceQuote) | **GET** /v1/vault-markets/advances/quote | What an advance on a vault unit for sale could be: up to half of the lower of its mark and asking price, free for 60 days.
[**getVaultMarketAgentDraft()**](VaultMarketsApi.md#getVaultMarketAgentDraft) | **GET** /v1/vault-markets/agent/drafts/{id} | One drafted order: item, side, units, limit (cents), the book when drafted, status, and the orderBody that places it.
[**getVaultMarketAlertPref()**](VaultMarketsApi.md#getVaultMarketAlertPref) | **GET** /v1/vault-markets/alert-prefs | Your vault alert settings: every kind (price, fill, margin_call, adl, p2p_loan, auction, market_open, receipt_token, set_goal, follow, account), every channel (push, telegram, terminal, email, webhook) with whether it is set up, the full on/off grid, the locked switches (a critical kind always pushes) and quiet hours.
[**getVaultMarketAuctionLot()**](VaultMarketsApi.md#getVaultMarketAuctionLot) | **GET** /v1/vault-markets/auctions/lots/{id} | One lot: the price showing, the next minimum bid, whether a reserve exists and is met, the end (extended by late bids), the bid history and your standing.
[**getVaultMarketAuctionMine()**](VaultMarketsApi.md#getVaultMarketAuctionMine) | **GET** /v1/vault-markets/auctions/mine | Lots you consigned (with your reserve) and lots you bid on (with your maximum and whether you lead).
[**getVaultMarketBlock()**](VaultMarketsApi.md#getVaultMarketBlock) | **GET** /v1/vault-markets/blocks/{orderId} | One block order: its order, plan lines (planned and allocated units, average price, cash share, status).
[**getVaultMarketBullionFor()**](VaultMarketsApi.md#getVaultMarketBullionFor) | **GET** /v1/vault-markets/bullion/for | The bullion key families one book key belongs to, with spot for its metal as a labelled reference and its melt value at that spot. Empty families when the item is not keyed bullion.
[**getVaultMarketBullionKey()**](VaultMarketsApi.md#getVaultMarketBullionKey) | **GET** /v1/vault-markets/bullion/keys/{slug} | One bullion key family: its catalogue products, every live book key with best bid, best ask, vault units and its mark (from the book only), live pegged quote counts, and spot as a labelled reference.
[**getVaultMarketBullionPegPreview()**](VaultMarketsApi.md#getVaultMarketBullionPegPreview) | **GET** /v1/vault-markets/bullion/pegs/preview | The price a spot-pegged quote would rest at now (spot plus a premium in cents or basis points, clamped to floor and cap). No price when spot is stale or missing: such a quote waits off the book.
[**getVaultMarketCall()**](VaultMarketsApi.md#getVaultMarketCall) | **GET** /v1/vault-markets/calls/{bookKey} | Recent call-auction uncrosses on a book key: kind (open, reopen, periodic, daily, buy-in, sell-off), clearing price in cents and units.
[**getVaultMarketCapacity()**](VaultMarketsApi.md#getVaultMarketCapacity) | **GET** /v1/vault-markets/capacity | Capacity from the book: &#x60;bookKey&#x60; (+ &#x60;units&#x60;) gives ADV, depth within ±5% of the mark, vault stock, lendable units and days to liquidate at 20% of ADV; &#x60;index&#x60; + &#x60;notional&#x60; (cents) gives how much of the basket the asks fill now and the days the rest needs.
[**getVaultMarketChannel()**](VaultMarketsApi.md#getVaultMarketChannel) | **GET** /v1/vault-markets/channels | Your Vault Markets channel switches: Telegram alerts and digest, the daily cap on vault nudges by push (default 5), whether a Telegram chat is linked, and how many nudges went out today.
[**getVaultMarketCompare()**](VaultMarketsApi.md#getVaultMarketCompare) | **GET** /v1/vault-markets/compare | Up to 5 book keys and/or index slugs (&#x60;items&#x60;, comma-separated) as daily series on the same days, each rebased to 100.
[**getVaultMarketConfirmation()**](VaultMarketsApi.md#getVaultMarketConfirmation) | **GET** /v1/vault-markets/confirmations/{tradeId} | One trade confirmation.
[**getVaultMarketConfirmationPdf()**](VaultMarketsApi.md#getVaultMarketConfirmationPdf) | **GET** /v1/vault-markets/confirmations/{tradeId}/pdf | One trade confirmation as a PDF.
[**getVaultMarketCorrelation()**](VaultMarketsApi.md#getVaultMarketCorrelation) | **GET** /v1/vault-markets/correlations | The correlation matrix of the sector indexes&#39; weekly returns over &#x60;weeks&#x60; (default 52), pairwise-complete, with n per pair; a pair under 26 shared weeks has no number.
[**getVaultMarketCreatorAttribution()**](VaultMarketsApi.md#getVaultMarketCreatorAttribution) | **GET** /v1/vault-markets/creators/attribution | The creator who brought you to Vault Markets, when one did: when it started and ends, whether it still earns, and the disclosure. Your prices and fees are the same either way.
[**getVaultMarketCreatorDashboard()**](VaultMarketsApi.md#getVaultMarketCreatorDashboard) | **GET** /v1/vault-markets/creators/dashboard | For creators: whether you joined the programme, each of your codes with traders attributed and still earning (counts only), shares accrued, paid and voided (cents) and the latest shares.
[**getVaultMarketCreatorProgramme()**](VaultMarketsApi.md#getVaultMarketCreatorProgramme) | **GET** /v1/vault-markets/creators/programme | The Vault Markets creator programme: the share of the fee Crossly keeps that a creator earns, the per-fill and lifetime caps (cents), the attribution window in days, the 2% net floor it sits under, and the disclosure words.
[**getVaultMarketCreatorRoom()**](VaultMarketsApi.md#getVaultMarketCreatorRoom) | **GET** /v1/vault-markets/creators/room | For creators: your vault shelf room (applied, verified, rejected or paused) and whether your public vault profile is on, which the room needs.
[**getVaultMarketCredit()**](VaultMarketsApi.md#getVaultMarketCredit) | **GET** /v1/vault-markets/credit/{id} | One loan or advance with its pledged units and its money log (draws, interest, repayments, sale proceeds).
[**getVaultMarketDcm()**](VaultMarketsApi.md#getVaultMarketDcm) | **GET** /v1/vault-markets/dcm | The partner exchange (DCM) that lists and clears futures and options on Crossly indexes (needs VAULT_INDEX_DCM + VAULT_INDEX_DCM_API_URL + VAULT_INDEX_DCM_API_KEY), and its contracts as last read: perps, futures and options with the index each settles on, multiplier, tick, expiry and strike. Read-only: Crossly is the licensor and data provider, never the venue.
[**getVaultMarketDcmContract()**](VaultMarketsApi.md#getVaultMarketDcmContract) | **GET** /v1/vault-markets/dcm/contracts/{symbol} | One partner contract: its spec, its funding prints (newest first; the partner computes and settles funding), annualised funding over the last 21 prints, and the Crossly index level it settles on.
[**getVaultMarketDcmContractBook()**](VaultMarketsApi.md#getVaultMarketDcmContractBook) | **GET** /v1/vault-markets/dcm/contracts/{symbol}/book | The partner exchange live order book for a contract (cached 5 seconds), with mark, index, last, open interest, 24 h volume, spread in bps and the basis of its mark over the Crossly index in bps. Prices are index points.
[**getVaultMarketDcmOptionsInput()**](VaultMarketsApi.md#getVaultMarketDcmOptionsInput) | **GET** /v1/vault-markets/dcm/options-inputs/{slug} | Options inputs for an index (indexes only, never a single item): Crossly realised volatility (raw and Geltner-desmoothed, from weekly returns), the forward (the partner future mark, else the Crossly close), Black-76 greeks on a strike x expiry grid and on every option the partner lists on the index. Model inputs, not quotes.
[**getVaultMarketDcmPosition()**](VaultMarketsApi.md#getVaultMarketDcmPosition) | **GET** /v1/vault-markets/dcm/positions | The partner exchange account linked to your account (or to the firm sub-account &#x60;subaccountId&#x60;) and its positions, read-only (cached 15 seconds); index futures on category indexes count as portfolio-margin hedges for that account: contracts, side, entry and mark price, unrealised P&amp;L and margin in cents, liquidation price and notional in cents. Not linked: &#x60;linked: false&#x60;.
[**getVaultMarketDealer()**](VaultMarketsApi.md#getVaultMarketDealer) | **GET** /v1/vault-markets/dealer | Your dealer status (applied, approved, revoked) and your Instant Exit bands.
[**getVaultMarketDealerPool()**](VaultMarketsApi.md#getVaultMarketDealerPool) | **GET** /v1/vault-markets/dealer/pools/{id} | One of your curve pools, with its ladder and live legs.
[**getVaultMarketDigestPreview()**](VaultMarketsApi.md#getVaultMarketDigestPreview) | **GET** /v1/vault-markets/digest/preview | This week&#39;s vault digest as it would go out: units at the display marks (unmarked units counted, not valued), the like-for-like change from a week ago, offers on your units, watched keys that got a first mark, and one Learn card.
[**getVaultMarketEntity()**](VaultMarketsApi.md#getVaultMarketEntity) | **GET** /v1/vault-markets/entities | The entities (funds, LLCs, trusts, SPVs) you belong to, and invitations waiting for you.
[**getVaultMarketEntityById()**](VaultMarketsApi.md#getVaultMarketEntityById) | **GET** /v1/vault-markets/entities/{id} | One entity: members and roles, sub-accounts with their limits, firm halts, caps.
[**getVaultMarketEstimate()**](VaultMarketsApi.md#getVaultMarketEstimate) | **GET** /v1/vault-markets/estimates/{bookKey} | The Crossly Estimate for a book key — a model, not a price. Method (own trades, index-adjusted last trade, grade ratio), cents with 68% and 95% bands, High/Medium/Low from the walk-forward backtest&#39;s FSD, and n. Hidden (&#x60;available: false&#x60;) under 50 backtested trades or when FSD &gt; 0.30. Never used for margin, loans or settlement.
[**getVaultMarketExecutionQuality()**](VaultMarketsApi.md#getVaultMarketExecutionQuality) | **GET** /v1/vault-markets/execution-quality | The quarterly execution-quality report (Rule 605 style): fill rates, speed, effective vs quoted spread and shortfall by order type and size, and the busiest keys. &#x60;quarter&#x60; like 2026-Q4; the current quarter is provisional.
[**getVaultMarketFeeQuote()**](VaultMarketsApi.md#getVaultMarketFeeQuote) | **GET** /v1/vault-markets/fees/quote | Your fee for an order at a price: as maker (the order rests) and as taker (it fills at once), with the programme that sets your rate and any Crossly One trim. A buyer&#39;s fee is added to the price; a seller&#39;s comes out of the proceeds.
[**getVaultMarketFeeSchedule()**](VaultMarketsApi.md#getVaultMarketFeeSchedule) | **GET** /v1/vault-markets/fees/schedule | The fee schedule by role: maker and taker rates for retail, 30-day volume, Registered LPs and DMMs, the CBX discount, the referral share and the 2% net floor Crossly always keeps.
[**getVaultMarketFollowSharing()**](VaultMarketsApi.md#getVaultMarketFollowSharing) | **GET** /v1/vault-markets/follows/sharing | Your sharing switches: the public vault profile, new buys, units sent in, sales, Hall loans, bids and asks for copy-watchers, and the leaderboards. All off until you turn them on.
[**getVaultMarketGemRate()**](VaultMarketsApi.md#getVaultMarketGemRate) | **GET** /v1/vault-markets/gem-rate/{bookKey} | The Crossly gem rate: of cards graded through Crossly, the share that came back at each grader&#39;s gem grade, for this item and its category, with a Wilson 95% band. 10 returns per grader or no number. Not a grader population report.
[**getVaultMarketGradeToVault()**](VaultMarketsApi.md#getVaultMarketGradeToVault) | **GET** /v1/vault-markets/grade-to-vault/{id} | One Grade to Vault flow, brought up to date with its submission and unit.
[**getVaultMarketGradeToVaultCandidate()**](VaultMarketsApi.md#getVaultMarketGradeToVaultCandidate) | **GET** /v1/vault-markets/grade-to-vault/candidates | What you can start Grade to Vault on: raw inventory matched to a catalogue item, and raw vault units on the grading hub shelf; plus whether Grading Runs are open.
[**getVaultMarketGradingSignal()**](VaultMarketsApi.md#getVaultMarketGradingSignal) | **GET** /v1/vault-markets/grading-signal | For a raw book key: the marks of the same item&#39;s graded keys, the spread over raw, grading cost per grader, the margin tier grading lifts it to, your raw vault units it pays to grade, and where to act.
[**getVaultMarketHallLoan()**](VaultMarketsApi.md#getVaultMarketHallLoan) | **GET** /v1/vault-markets/hall/loans | Your Hall of Grails desk: this week&#39;s exhibition, the rules (maxLive loans, shownPerHolder per exhibition, repPoints per exhibition shown), reputation (exhibitions finished), your loans (status active, ending or ended; onShowNow, showingUntil, exhibitions, the next exhibition it fits, the Lent to the Hall badge) and the vault units you could lend (canLend, or the blocker in words, and the next exhibition each fits). Display only.
[**getVaultMarketHealth()**](VaultMarketsApi.md#getVaultMarketHealth) | **GET** /v1/vault-markets/health | Portfolio health of your vault holdings at Crossly marks: concentration by single item, category, grade and grader (shares, HHI on 0 to 10000, its band and effective number of holdings), value by liquidity tier, the stress grid (each category and everything down 10, 20 and 30 percent), value by mark quality, plain observations, and the held items a what-if can run on. Information only, not advice.
[**getVaultMarketHealthWhatIf()**](VaultMarketsApi.md#getVaultMarketHealthWhatIf) | **GET** /v1/vault-markets/health/what-if | What if one held item moved by moveBps (-10000 to 10000 basis points of its mark): the item, your vault total, the item and its category share of the vault, and the single-item HHI, before and after. A scenario on the mark, not a price you could sell at.
[**getVaultMarketHomeUnit()**](VaultMarketsApi.md#getVaultMarketHomeUnit) | **GET** /v1/vault-markets/home/units | \&quot;Show my vault\&quot;: the vault units you hold, the ones standing in your Crossly World home first. Each: vaultItemId, title, grade, imageUrl, bookKey (its market), inHome, visitors (visitors to your home see it). Also your home (slug, privacy, path), max units one home shows, shown, visitorsSee and a note on who sees what. Your home is made on first read. No prices.
[**getVaultMarketIndex()**](VaultMarketsApi.md#getVaultMarketIndex) | **GET** /v1/vault-markets/indexes/{slug} | One index with its daily closes (oldest first) and its level now.
[**getVaultMarketIndexCalendar()**](VaultMarketsApi.md#getVaultMarketIndexCalendar) | **GET** /v1/vault-markets/index-calendar | The next four quarterly reviews: reference day (2nd Friday of Mar/Jun/Sep/Dec), announcement day, last close under the old membership and the effective day; June and December also review the Blue-chip 50.
[**getVaultMarketIndexConsultation()**](VaultMarketsApi.md#getVaultMarketIndexConsultation) | **GET** /v1/vault-markets/index-consultations/{id} | One consultation with its proposal, versions, dates, outcome and the public comments.
[**getVaultMarketIndexFeed()**](VaultMarketsApi.md#getVaultMarketIndexFeed) | **GET** /v1/vault-markets/index-feed/{slug} | The licensed index feed for one built-in index (needs VAULT_INDEX_DCM + VAULT_INDEX_FEED_SECRET): the level now (intraday from A/B marks, or the last close below 50% constituent coverage), the last close, the frozen 7-day TWAP settlement value and every constituent with its mark source, quality and trade count. Signed: &#x60;x-crossly-signature: t&#x3D;&lt;ms&gt;,v1&#x3D;&lt;hex HMAC-SHA256(secret, t + \&quot;.\&quot; + body)&gt;&#x60;. Every read is logged for the licence. Crossly is the licensor and data feed only.
[**getVaultMarketIndexFeedFunding()**](VaultMarketsApi.md#getVaultMarketIndexFeedFunding) | **GET** /v1/vault-markets/index-feed/{slug}/funding | Reference funding for a perpetual-style future on the index: your premium &#x60;premiumBps&#x60; (TWAP of (impact mid - index)/index) through F &#x3D; P + clamp(I - P, ±0.05%) per 8 h, |F| capped at 0.5%/day, with the index level it is relative to. The partner DCM computes and settles funding; this is the reference math.
[**getVaultMarketIndexFeedSettlement()**](VaultMarketsApi.md#getVaultMarketIndexFeedSettlement) | **GET** /v1/vault-markets/index-feed/{slug}/settlement | The frozen 7-day TWAP settlement series for a licensed index (written once a day, never restated), with the closes behind each value. Signed like the feed.
[**getVaultMarketIndexLevel()**](VaultMarketsApi.md#getVaultMarketIndexLevel) | **GET** /v1/vault-markets/indexes/{slug}/levels | An index&#39;s daily closes (up to 5 years), oldest first.
[**getVaultMarketIndexLicenceUsage()**](VaultMarketsApi.md#getVaultMarketIndexLicenceUsage) | **GET** /v1/vault-markets/index-licence/usage | Your licensed index feed reads over &#x60;days&#x60;, per index and endpoint (licence-usage report).
[**getVaultMarketIndexMethodology()**](VaultMarketsApi.md#getVaultMarketIndexMethodology) | **GET** /v1/vault-markets/index-methodology | The index method in machine-readable form: version (semver), inputs, weightings and caps, the family and its screens, the engines and their publication gate, revisions and the settlement series, the calendar, governance and limitations.
[**getVaultMarketInstantExit()**](VaultMarketsApi.md#getVaultMarketInstantExit) | **GET** /v1/vault-markets/instant-exit | The Instant Exit quote for one vault unit you hold: the best resting bid on its book key (anyone&#39;s, dealers&#39; included), its share of the mark, the bid depth, and whether it can be taken now.
[**getVaultMarketJoint()**](VaultMarketsApi.md#getVaultMarketJoint) | **GET** /v1/vault-markets/joint | Your joint vaults and the invitations waiting for you, with the gate (open, missing env), the joint terms in words and what each right allows. A JointVaultsHome object, not a collection.
[**getVaultMarketJointById()**](VaultMarketsApi.md#getVaultMarketJointById) | **GET** /v1/vault-markets/joint/{id} | One joint vault (active members only): members and rights, the units in it at the mark with each owner of record, totals, recent joint trades, and the activity from the audit trail.
[**getVaultMarketKeyStat()**](VaultMarketsApi.md#getVaultMarketKeyStat) | **GET** /v1/vault-markets/key-stats/{bookKey} | Everything derived about one book key in one read: the Crossly Estimate, the liquidity score, risk statistics and the gem rate. A part that cannot be read is &#x60;{ error }&#x60;.
[**getVaultMarketLearn()**](VaultMarketsApi.md#getVaultMarketLearn) | **GET** /v1/vault-markets/learn | The Learn hub: each concept with whether you passed its quiz. Passing earns cosmetic pins only.
[**getVaultMarketLearnByConcept()**](VaultMarketsApi.md#getVaultMarketLearnByConcept) | **GET** /v1/vault-markets/learn/{concept} | One Learn concept: its sections and quiz questions (no answers).
[**getVaultMarketLendingElection()**](VaultMarketsApi.md#getVaultMarketLendingElection) | **GET** /v1/vault-markets/lending/election | Your lender election: &#x60;returnInKind&#x60; (shorts post 175% collateral, a 14-day buy-in, never cash-settled) and &#x60;allowTerm&#x60; (your units may go out on 30/90-day fixed-rate term loans, not recallable before term).
[**getVaultMarketLendingProgramme()**](VaultMarketsApi.md#getVaultMarketLendingProgramme) | **GET** /v1/vault-markets/lending/programme | Your lender programme report: lendable units, units out, utilisation, fee revenue (accrued / paid), term loans and return-in-kind loans in force, and each loan&#39;s rate against the key&#39;s rate today.
[**getVaultMarketLendingStatement()**](VaultMarketsApi.md#getVaultMarketLendingStatement) | **GET** /v1/vault-markets/lending/statement | Your daily collateral statement as a lender (today live, or &#x60;day&#x60;): per open loan the mark and its quality, fees owed to you, the short&#39;s collateral share at the custodian and its coverage against 105% of mark + fees. A unit without a mark usable for risk shows no coverage number.
[**getVaultMarketLiquidity()**](VaultMarketsApi.md#getVaultMarketLiquidity) | **GET** /v1/vault-markets/liquidity/{bookKey} | The liquidity score (0-100) of a book key and every component behind it: trades in 30/90 days, distinct counterparties, median days between trades, time-weighted quoted spread, two-sided share and depth within 5% (hourly book snapshots), Amihud and Roll. Each component is a percentile within the category. No score under the data threshold.
[**getVaultMarketLoanQuote()**](VaultMarketsApi.md#getVaultMarketLoanQuote) | **GET** /v1/vault-markets/loans/quote | How much you can borrow against vault units (&#x60;vaultItemIds&#x60;, comma-separated; none &#x3D; every stored unit you hold): each unit&#39;s tier, mark and limit, the pool&#39;s rate and yours.
[**getVaultMarketLoanUnitSaleFloor()**](VaultMarketsApi.md#getVaultMarketLoanUnitSaleFloor) | **GET** /v1/vault-markets/loans/{id}/units/{vaultItemId}/sale-floor | The lowest price a pledged unit can be sold at to repay its loan: after the sale (less the vault fee and storage) what is still owed must fit inside the other units&#39; limit.
[**getVaultMarketLocate()**](VaultMarketsApi.md#getVaultMarketLocate) | **GET** /v1/vault-markets/locates | A locate quote: how many units of &#x60;key&#x60; (a book key) you could borrow now (up to &#x60;qty&#x60;), the indicative rate (APR bps; &#x60;termDays&#x60; 30 or 90 for a fixed-rate term loan), and the collateral they need (150%, or 175% for units whose lenders elected return in kind only). Holds nothing; POST to hold.
[**getVaultMarketMark()**](VaultMarketsApi.md#getVaultMarketMark) | **GET** /v1/vault-markets/marks/{bookKey} | One book key mark with everything behind it: the price in cents, its quality (A trade-anchored, B firm two-sided, C indicative, none), its confidence in bps and the band in cents, when it was computed, whether risk may act on it (judged for margin), the related key it was implied from (impliedFrom: a grade, the model median of the other sizes, or an index; null when none), every stored input, and the learned relations it may be implied from.
[**getVaultMarketMarket()**](VaultMarketsApi.md#getVaultMarketMarket) | **GET** /v1/vault-markets/market | One book key (variantId:condition:gradeKey): its mark and history, lending depth and borrow rate, open interest and live auctions.
[**getVaultMarketMarketModel()**](VaultMarketsApi.md#getVaultMarketMarketModel) | **GET** /v1/vault-markets/market-model/{bookKey} | How a book key trades: its liquidity tier (A continuous, B call auction every 15 minutes, C daily call, D listings only), the call collecting now with its indicative price and volume and nominal close, the next call, the LULD band and any limit state, pause or halt.
[**getVaultMarketMm()**](VaultMarketsApi.md#getVaultMarketMm) | **GET** /v1/vault-markets/mm | Your market-maker programmes, the last 30 days of obligations, rebates earned (paid only from fees already taken), and the rules.
[**getVaultMarketMmKey()**](VaultMarketsApi.md#getVaultMarketMmKey) | **GET** /v1/vault-markets/mm/key | A key&#39;s designated market maker (by the name it chose) and how many LPs quote it.
[**getVaultMarketMmMmp()**](VaultMarketsApi.md#getVaultMarketMmMmp) | **GET** /v1/vault-markets/mm/mmp | Your market-maker protection: the fill trigger, the freeze, and whether you are frozen now.
[**getVaultMarketMode()**](VaultMarketsApi.md#getVaultMarketMode) | **GET** /v1/vault-markets/mode | Your Vault Markets mode: simple (buy, sell and what it is worth) or pro (the full terminal), whether you chose it or it was set for you (new people start in simple; people already trading start in pro), and when.
[**getVaultMarketNav()**](VaultMarketsApi.md#getVaultMarketNav) | **GET** /v1/vault-markets/nav | Mark NAV, bid NAV (the resting bids) and liquidation NAV (the bids at 20% of ADV for 10 days), holding by holding, each with its ASC 820 level, mark quality and source, and your administrator&#39;s price when uploaded.
[**getVaultMarketNavFile()**](VaultMarketsApi.md#getVaultMarketNavFile) | **GET** /v1/vault-markets/nav/file/{format} | The NAV as a csv, pdf or json file.
[**getVaultMarketOpening()**](VaultMarketsApi.md#getVaultMarketOpening) | **GET** /v1/vault-markets/opening/{slug} | One opening key.
[**getVaultMarketOracle()**](VaultMarketsApi.md#getVaultMarketOracle) | **GET** /v1/vault-markets/oracle | Crossly as an oracle publisher (needs CROSSLY_ORACLE_PUBLISHER_KEY + CROSSLY_ORACLE_NETWORK): the network (pyth or switchboard), the ed25519 key every value is signed with, each published index feed with its latest attempt, and 24 h counts of published, skipped and failed. Only built-in indexes priced from A/B marks are published; Crossly never reads its own feed back.
[**getVaultMarketOracleBySlug()**](VaultMarketsApi.md#getVaultMarketOracleBySlug) | **GET** /v1/vault-markets/oracle/{slug} | The latest published oracle value for an index: level, fixed-point price and confidence at the feed exponent, confidence in bps, staleness in seconds, coverage, the exact signed message and its ed25519 signature with the signer key, and whether it is fresh.
[**getVaultMarketOrderHandling()**](VaultMarketsApi.md#getVaultMarketOrderHandling) | **GET** /v1/vault-markets/order-handling | How orders are handled (the 606/607-style disclosure): one book, self-trade prevention, protected market orders, liquidations by auction, halts, dealers and fees.
[**getVaultMarketP2pDashboard()**](VaultMarketsApi.md#getVaultMarketP2pDashboard) | **GET** /v1/vault-markets/p2p/dashboard | Peer-to-peer vault loans at a glance: what you owe as a borrower and are owed as a lender (principal + interest to the second), daily interest, called loans, your open offers, the gates and the rules (auction hours, rate ceiling, size bounds, call grace).
[**getVaultMarketP2pLoan()**](VaultMarketsApi.md#getVaultMarketP2pLoan) | **GET** /v1/vault-markets/p2p/loans/{id} | One P2P loan with its money log (fund, repay, refinance). A loan in a running refinancing auction can be read by any lender, without the log.
[**getVaultMarketPaper()**](VaultMarketsApi.md#getVaultMarketPaper) | **GET** /v1/vault-markets/paper | Your paper trading account (play money only, never real or convertible; opened at $10,000 the first time): play cash, buying power, paper positions at the real marks, P&amp;L, working paper orders, recent paper fills and this week on the leaderboard.
[**getVaultMarketPaperQuote()**](VaultMarketsApi.md#getVaultMarketPaperQuote) | **GET** /v1/vault-markets/paper/quote | What a paper order would fill against the real book now, without placing it: units fillable inside the limit (a market order uses the 5% protection band around the mark), average price, simulated fee, and the queue ahead of any rest.
[**getVaultMarketPartnerMe()**](VaultMarketsApi.md#getVaultMarketPartnerMe) | **GET** /v1/vault-markets/partners/me | Your Vault Drop-off Partnership (null when you never applied): status, partner code, fee share and cap, totals and batches.
[**getVaultMarketPool()**](VaultMarketsApi.md#getVaultMarketPool) | **GET** /v1/vault-markets/pool | The CBX market staking pool: size, value, what it lends, utilisation, rate, insurance fund.
[**getVaultMarketPopReport()**](VaultMarketsApi.md#getVaultMarketPopReport) | **GET** /v1/vault-markets/pop-reports | Grading population report for one market (&#x60;bookKey&#x60;): focus (on a graded market: its grade, pop &#x3D; copies graded at exactly that grade, higher &#x3D; copies graded better by the same grader, total, asOf and source), graders (each grader ladder for the card, best grade first, from one report: the newest, the population feed over a hand entry on the same date), provider.connected, and status (ok, not_synced, no_report or no_source) with explain, which says in plain words what is missing. source is provider (the population feed) or ops (entered by Crossly from the grader published report). Counts only, never a price.
[**getVaultMarketPortfolio()**](VaultMarketsApi.md#getVaultMarketPortfolio) | **GET** /v1/vault-markets/portfolio | Your vault holdings at the market price, with cost and P&amp;L, and units you have out on loan.
[**getVaultMarketPortfolioHistory()**](VaultMarketsApi.md#getVaultMarketPortfolioHistory) | **GET** /v1/vault-markets/portfolio/history | Your Vault Markets value by day at the marks (vault units, units on loan, positions) and today&#39;s return against yesterday&#39;s close.
[**getVaultMarketPortfolioMargin()**](VaultMarketsApi.md#getVaultMarketPortfolioMargin) | **GET** /v1/vault-markets/portfolio-margin | Portfolio margin for a firm sub-account (&#x60;subaccountId&#x60;): eligibility with every reason (ECP, KYB, minimum equity $500k or $100k with evidenced intraday monitoring), whether it is enrolled, the latest requirement, equity, excess and state (healthy, call or buy_in), the breakdown by category and item, the partner index futures counted, and the policy. Before enrolling, a live preview.
[**getVaultMarketPosition()**](VaultMarketsApi.md#getVaultMarketPosition) | **GET** /v1/vault-markets/positions/{id} | One position with its loans, auctions and custodian instruction log.
[**getVaultMarketPositionExit()**](VaultMarketsApi.md#getVaultMarketPositionExit) | **GET** /v1/vault-markets/positions/{id}/exits | A position&#39;s take-profit / stop-loss, if set.
[**getVaultMarketPositionRisk()**](VaultMarketsApi.md#getVaultMarketPositionRisk) | **GET** /v1/vault-markets/positions/{id}/risk | One position&#39;s call and liquidation marks.
[**getVaultMarketPress()**](VaultMarketsApi.md#getVaultMarketPress) | **GET** /v1/vault-markets/press | The press kit: each built-in index with level, quality, n, CSV link and a \&quot;cite as\&quot; line, plus the methodology links.
[**getVaultMarketPriceWidget()**](VaultMarketsApi.md#getVaultMarketPriceWidget) | **GET** /v1/vault-markets/price-widgets/{id} | One of your price widgets, with its iframe and script-tag snippets and URLs.
[**getVaultMarketProDepth()**](VaultMarketsApi.md#getVaultMarketProDepth) | **GET** /v1/vault-markets/pro/depth | The L2 depth ladder: price levels and units per side, best first; asks show how many units are authenticated vault stock.
[**getVaultMarketProOrder()**](VaultMarketsApi.md#getVaultMarketProOrder) | **GET** /v1/vault-markets/pro/orders/{id} | One order with its full event log.
[**getVaultMarketProSnapshot()**](VaultMarketsApi.md#getVaultMarketProSnapshot) | **GET** /v1/vault-markets/pro/snapshot | A book key&#39;s depth (20 levels a side), last 50 trades, 24 h stats, mark and any halt, in one call.
[**getVaultMarketProStat()**](VaultMarketsApi.md#getVaultMarketProStat) | **GET** /v1/vault-markets/pro/stats | 24 h open, high, low, last, volume and change on a book key.
[**getVaultMarketProStream()**](VaultMarketsApi.md#getVaultMarketProStream) | **GET** /v1/vault-markets/pro/stream | A long-lived text/event-stream for a book key: &#x60;snapshot&#x60; first, then &#x60;depth&#x60;, &#x60;trades&#x60;, &#x60;mark&#x60; and &#x60;halt&#x60; events as they change.
[**getVaultMarketProfile()**](VaultMarketsApi.md#getVaultMarketProfile) | **GET** /v1/vault-markets/profile | Your public vault profile switch: on or off, whether followers see new buys, your profile URL and follower count.
[**getVaultMarketProfileByHandle()**](VaultMarketsApi.md#getVaultMarketProfileByHandle) | **GET** /v1/vault-markets/profiles/{handle} | Someone&#39;s public vault: each market&#39;s weight (bps of the marked value), followers, whether you follow, their recent buys (no prices).
[**getVaultMarketProofOfReserve()**](VaultMarketsApi.md#getVaultMarketProofOfReserve) | **GET** /v1/vault-markets/proof-of-reserves | Proof of reserves: the latest daily Merkle root over every unit in custody (leaf count, stored / listed / grading / withdrawing, pledged, on loan, open loans, receipts, insured value), its Solana memo anchor when VAULT_POR_ANCHOR_KEY is set, the last &#x60;days&#x60; roots, and the exact hashing method.
[**getVaultMarketProofOfReserveByDay()**](VaultMarketsApi.md#getVaultMarketProofOfReserveByDay) | **GET** /v1/vault-markets/proof-of-reserves/{day} | One day&#39;s proof-of-reserves snapshot (root, counts, anchor).
[**getVaultMarketProofOfReserveMe()**](VaultMarketsApi.md#getVaultMarketProofOfReserveMe) | **GET** /v1/vault-markets/proof-of-reserves/me | Your inclusion proofs for a day (latest by default): each of your units&#39; leaf fields, salt, owner commitment, leaf hash and sibling path. Verify with your OWN user id: commitment &#x3D; SHA-256(JSON[\&quot;crossly-por-owner-v1\&quot;, userId, salt]); then the leaf; then climb the path to the published root.
[**getVaultMarketRate()**](VaultMarketsApi.md#getVaultMarketRate) | **GET** /v1/vault-markets/rates | Daily borrow APR (lent units) and pool APR on a book key, with the pool as a whole, oldest first.
[**getVaultMarketReport()**](VaultMarketsApi.md#getVaultMarketReport) | **GET** /v1/vault-markets/report | The quarterly Crossly Vault Report (&#x60;quarter&#x60; like 2026-q3; default the latest): index levels, top movers, most-lent markets, grade premiums. Book data only.
[**getVaultMarketRfq()**](VaultMarketsApi.md#getVaultMarketRfq) | **GET** /v1/vault-markets/rfq/{id} | One quote request: the requester sees every answer (anonymous); a responder sees the request and their own answer.
[**getVaultMarketRiskReport()**](VaultMarketsApi.md#getVaultMarketRiskReport) | **GET** /v1/vault-markets/risk-report | Historical VaR 95/99 1d/10d and Bangia LVaR (model figures: labelled, with n and a band, null below the data threshold), stress scenarios (category −30%, CBX −50%, books thin to 25%, index drawdowns), concentration and counterparty exposure.
[**getVaultMarketRiskStat()**](VaultMarketsApi.md#getVaultMarketRiskStat) | **GET** /v1/vault-markets/risk-stats/{bookKey} | Risk statistics for a book key (weekly returns from A-quality marks only) or an index slug (its closes): annualised volatility raw and Geltner-desmoothed (labelled), max drawdown and beta to the Composite. Needs 26 weekly returns, else no numbers.
[**getVaultMarketSetGoal()**](VaultMarketsApi.md#getVaultMarketSetGoal) | **GET** /v1/vault-markets/set-goals/{id} | One set goal: every piece in the set order, held (with the vault unit) or missing (with the cheapest marked book key that meets the target and its mark), the conditions and grades seen, and the working basket bid with its legs.
[**getVaultMarketSetGoalBasketPlan()**](VaultMarketsApi.md#getVaultMarketSetGoalBasketPlan) | **GET** /v1/vault-markets/set-goals/{id}/basket-plan | What a basket bid would place now, without placing it: one leg per missing piece (cheapest first, the mark plus maxBpsOverMark as the limit), the pieces skipped and why, and the most it can cost (limits plus the worst-case buyer fee), never more than budgetCents.
[**getVaultMarketShareCard()**](VaultMarketsApi.md#getVaultMarketShareCard) | **GET** /v1/vault-markets/share-cards/{id} | One share card as the public sees it, with its image and link paths.
[**getVaultMarketStatement()**](VaultMarketsApi.md#getVaultMarketStatement) | **GET** /v1/vault-markets/statements | The last 24 months with whether each statement is issued (frozen, with its sha256).
[**getVaultMarketStatementByMonth()**](VaultMarketsApi.md#getVaultMarketStatementByMonth) | **GET** /v1/vault-markets/statements/{month} | A monthly statement (&#x60;month&#x60; like 2026-10): units held at month end, loans, pledges, positions, fills, fees, storage, and cash quoted from the custodian and labelled as its record. Issued (frozen) once the month ends.
[**getVaultMarketStatementFile()**](VaultMarketsApi.md#getVaultMarketStatementFile) | **GET** /v1/vault-markets/statements/{month}/file/{format} | A monthly statement as a csv, pdf or json file.
[**getVaultMarketSupply()**](VaultMarketsApi.md#getVaultMarketSupply) | **GET** /v1/vault-markets/supply | A book key&#39;s units in the vault and authentications passed, by day (oldest first, today live).
[**getVaultMarketSupplyBatch()**](VaultMarketsApi.md#getVaultMarketSupplyBatch) | **GET** /v1/vault-markets/supply/batches/{id} | A box sent to the vault: its prepaid label and tracking, or why it has no label.
[**getVaultMarketSupplyRoundUp()**](VaultMarketsApi.md#getVaultMarketSupplyRoundUp) | **GET** /v1/vault-markets/supply/round-up | Your seller round-up: the share of each payout that sets a vault buy&#39;s budget, the budget so far and what it is doing. &#x60;roundUp&#x60; is null when none is set.
[**getVaultMarketTax()**](VaultMarketsApi.md#getVaultMarketTax) | **GET** /v1/vault-markets/tax | Your tax year on the vault markets: units bought and sold with cost, proceeds, gain and term; lending fees, staking interest (estimate), market-maker rewards; closed positions. Links to the CSV and PDF.
[**getVaultMarketTaxCsv()**](VaultMarketsApi.md#getVaultMarketTaxCsv) | **GET** /v1/vault-markets/tax.csv | The tax year as a CSV: one row per sale, purchase, gift, income line and closed position.
[**getVaultMarketTaxLossSuggestion()**](VaultMarketsApi.md#getVaultMarketTaxLossSuggestion) | **GET** /v1/vault-markets/tax/loss-suggestions | Tax-loss suggestions: the units you hold whose mark is below your cost, each with its lot (acquired when and how, cost in cents), short or long term if sold today and the day a short lot turns long, the estimated loss at the mark before selling fees, mark quality, what stops a sale, and a link to the ordinary sell ticket. With totals by term, the gains realised so far this year, and a not-tax-advice disclosure. Never sells.
[**getVaultMarketTaxPdf()**](VaultMarketsApi.md#getVaultMarketTaxPdf) | **GET** /v1/vault-markets/tax.pdf | The tax year as a PDF summary.
[**getVaultMarketTca()**](VaultMarketsApi.md#getVaultMarketTca) | **GET** /v1/vault-markets/tca | Your pro orders in a window (&#x60;from&#x60;, &#x60;to&#x60;; default 90 days) with arrival mark and mid, average fill, implementation shortfall, slippage, fill rate and time to fill.
[**getVaultMarketTcaByOrderId()**](VaultMarketsApi.md#getVaultMarketTcaByOrderId) | **GET** /v1/vault-markets/tca/{orderId} | One order&#39;s TCA, including slippage against the VWAP of eligible trades while it worked.
[**getVaultMarketTod()**](VaultMarketsApi.md#getVaultMarketTod) | **GET** /v1/vault-markets/tod | Your transfer-on-death setup: the gate and terms, whether you accepted them, your beneficiaries and shares, units with their designations and who the plan gives them to today, and open claims on your account (which you can stop). A TodOverview object, not a collection.
[**getVaultMarketTodMyClaim()**](VaultMarketsApi.md#getVaultMarketTodMyClaim) | **GET** /v1/vault-markets/tod/my-claims | Claims you filed as a beneficiary: status in words, documents sent (names only), the waiting period, and units moved or held. A TodMyClaims object, not a collection.
[**getVaultMarketUnitAr()**](VaultMarketsApi.md#getVaultMarketUnitAr) | **GET** /v1/vault-markets/units/{id}/ar | A vault unit as an AR model, for \&quot;See it in your room\&quot; (the web&#39;s /ar/vault-&lt;id&gt; page hands it to Scene Viewer, WebXR or Quick Look): title, model (a path under /models, without .glb, at real size), scanUrl (the unit&#39;s own captured mesh, when it has one), imageUrl, art, tint, scale, bookKey, backPath and mine. Your own units always; somebody else&#39;s only while they show it to visitors in a home you may enter (else 404).
[**getVaultMarketUnitEvidence()**](VaultMarketsApi.md#getVaultMarketUnitEvidence) | **GET** /v1/vault-markets/units/{id}/evidence | Evidence on a vault unit:its 3D scans (model, texture, listing photos) and its grade report (grader, grade, cert, verified against the grader record, hub intake photos). No owner identity.
[**getVaultMarketUnitQuote()**](VaultMarketsApi.md#getVaultMarketUnitQuote) | **GET** /v1/vault-markets/units/{id}/quote | The market around a vault unit: its mark and source, the best bid that could take it, the Instant Exit price (the best bid) and a pack pull&#39;s own sell-back credit.
[**getVaultMarketUnitStory()**](VaultMarketsApi.md#getVaultMarketUnitStory) | **GET** /v1/vault-markets/units/{id}/story | One vault unit&#39;s story, oldest first: intake (with scan and grade evidence when it has some), grades, owners, sales at their prices, loans, pledges, Hall of Grails exhibitions, receipt-token exports and redemptions, and each warehouse-receipt hash-chain step (re-verified on read: chain.ok). People are named only while their public vault profile is on; others are &#39;A collector&#39;.
[**getVaultMarketValuationStatement()**](VaultMarketsApi.md#getVaultMarketValuationStatement) | **GET** /v1/vault-markets/valuation-statements/{id} | One statement you issued: every unit, the totals by mark quality, the methodology, its sha256, its audit-chain seal and the verify link.
[**getVaultMarketValuationStatementPdf()**](VaultMarketsApi.md#getVaultMarketValuationStatementPdf) | **GET** /v1/vault-markets/valuation-statements/{id}/pdf | One statement you issued as a PDF.
[**getVaultMarketValuationStatementPreview()**](VaultMarketsApi.md#getVaultMarketValuationStatementPreview) | **GET** /v1/vault-markets/valuation-statements/preview | An insurance or appraisal statement for a day (purpose, asOf YYYY-MM-DD, default today), built but not issued: every unit you held that day at its mark, with quality, last trade, grade and cert, and the total. No id, no hash.
[**getVaultMarketValuationStatementVerify()**](VaultMarketsApi.md#getVaultMarketValuationStatementVerify) | **GET** /v1/vault-markets/valuation-statements/{id}/verify | Check any issued statement by its id, as an insurer would: purpose, date, totals by mark quality and the sha256; intact (the stored record still hashes to it), seal.ok (its audit-chain entry still carries it) and, with ?hash&#x3D;, whether yours matches. Never the holder or the units.
[**getVaultMarketValue()**](VaultMarketsApi.md#getVaultMarketValue) | **GET** /v1/vault-markets/value | A catalogue item&#39;s vault book keys (&#x60;?skuId&#x3D;&#x60;, optional &#x60;variantId&#x60;): each key&#39;s display mark with quality and n, units in the vault, the Instant Exit price a holder would get now, and whether it can be shipped in (ungraded keys).
[**getVaultMarketVaultSuggestionItem()**](VaultMarketsApi.md#getVaultMarketVaultSuggestionItem) | **GET** /v1/vault-markets/vault-suggestions/items/{id} | One inventory item: its vault suggestion, or in plain words why there is none (&#x60;status&#x60;: suggested, not_found, no_stock, not_matched, in_vault or no_market).
[**getVaultMarketWidgetIndex()**](VaultMarketsApi.md#getVaultMarketWidgetIndex) | **GET** /v1/vault-markets/widgets/index/{slug} | What the &lt;crossly-index&gt; widget shows: level, closes, quality, n, as-of, or &#x60;insufficient&#x60;.
[**getVaultMarketWidgetMark()**](VaultMarketsApi.md#getVaultMarketWidgetMark) | **GET** /v1/vault-markets/widgets/mark | What the &lt;crossly-mark&gt; widget shows for &#x60;bookKey&#x60;: mark, quality, trades over 30 days, as-of, sparkline, or &#x60;insufficient&#x60;.
[**getVaultMarketWidgetSummary()**](VaultMarketsApi.md#getVaultMarketWidgetSummary) | **GET** /v1/vault-markets/widget/summary | The home-screen widget summary: portfolio value at the mark with its move since the previous marks (cents and bps) and the share resting on reliable A/B marks, the three biggest movers among what you hold (the market movers when you hold nothing; &#x60;movers.source&#x60; says which), and one watchlist key (&#x60;?key&#x3D;&#x60; a book key on your watchlist; else your newest watch) with a 14-day sparkline. Every price is from the Crossly order book and carries its mark quality (A, B, C or none). Cached for five minutes.
[**getVaultMarketWorldFloor()**](VaultMarketsApi.md#getVaultMarketWorldFloor) | **GET** /v1/vault-markets/world/floor | The Trading Floor in Crossly World: trades (the newest trades on every vault book in the last day, at most 40, newest first: bookKey, name, priceCents, priceText, side -- buy when a buyer took an ask, sell when a seller hit a bid, cross for an auction -- and ageS), tickers (the big board: the most-traded markets, each with its last trade price, the change from the last trade before today in basis points, trades today and the display mark with its quality), bell (Market Open: ringing for ten minutes after a new key opens, with the key and its market link, and what opens next) and trades24h. Every price is a trade on the Crossly order book; it never shows who traded. Nothing can be traded in the room.
[**getVaultMarketWorldLounge()**](VaultMarketsApi.md#getVaultMarketWorldLounge) | **GET** /v1/vault-markets/world/lounge | The Vault Holders Lounge: the rule to join (held value at reliable marks, or a unit count), whether you may join now and what you hold toward it. Anyone may look in; only holders are seen there. No perks, nothing to trade.
[**getVaultMarketWorldPlaceVaultGate()**](VaultMarketsApi.md#getVaultMarketWorldPlaceVaultGate) | **GET** /v1/vault-markets/world/places/{place}/vault-gate | The vault-holder door on a Crossly World room or Space, by its presence slug (a room share slug, or space-&lt;slug&gt;): the rule (minValueCents held at reliable A/B marks and/or minUnits units, mode any or all, optionally one product, bullion family or category), the rule in words, and whether you may join now with what you hold toward it. gate is null when the place has no vault door. Anyone may look in; only holders join.
[**getVaultMarketWorth()**](VaultMarketsApi.md#getVaultMarketWorth) | **GET** /v1/vault-markets/worth | What one book key (variantId:condition:gradeKey, &#x60;bookKey&#x60;) is worth: the mark in cents with its quality (A from trades, B from firm quotes, C indicative, none) and band, what Instant Exit would pay for one unit now from the best resting bid (yours left out), and your units: how many you hold, how many are free to sell, their value at the mark and what selling every free one now would fetch from today’s bids. Plain-words &#x60;headline&#x60; and &#x60;lines&#x60;. Read only.
[**getVaultMarketWorthVault()**](VaultMarketsApi.md#getVaultMarketWorthVault) | **GET** /v1/vault-markets/worth/vault | What your whole vault is worth now: value at the marks split into reliable and indicative marks, cost and P&amp;L, today’s change, and an estimate of what the units free to sell would fetch from the bids resting on the book now. Read only.
[**getVaultReceipt()**](VaultMarketsApi.md#getVaultReceipt) | **GET** /v1/vault/receipts/{receiptNo} | One of your receipts with its full hash chain (issued, transferred, pledged, released, surrendered), re-verified on read: &#x60;chain.ok&#x60; is false if any event was altered.
[**getVaultReceiptToken()**](VaultMarketsApi.md#getVaultReceiptToken) | **GET** /v1/vault/receipt-tokens/{id} | One receipt token (yours, or on a unit you own now) with its chain log: built, minted, frozen, thawed, new holder seen, redeem built, burned, with explorer links.
[**getVaultReceiptTokenByMint()**](VaultMarketsApi.md#getVaultReceiptTokenByMint) | **GET** /v1/vault/receipt-tokens/by-mint/{mint} | What a Solana mint is: the warehouse receipt number and item it stands for, and whether the token is live, frozen (unit pledged or lent) or burned, and whether the unit is still on a vault shelf. Names no person and no wallet.
[**listVaultMarketAccounts()**](VaultMarketsApi.md#listVaultMarketAccounts) | **GET** /v1/vault-markets/accounts | Every account you can act on: your own, and each sub-account your entity memberships reach, with your role.
[**listVaultMarketAdlEvents()**](VaultMarketsApi.md#listVaultMarketAdlEvents) | **GET** /v1/vault-markets/adl/events | The ADL events your positions were part of, newest first: role bankrupt (yours went under water) or counterparty (yours was first in line), the price both closed at and the transfer status.
[**listVaultMarketAdlPositions()**](VaultMarketsApi.md#listVaultMarketAdlPositions) | **GET** /v1/vault-markets/adl/positions | Your live positions, each with its place in its item ADL queue: lights 5 (first in line) to 1 (last), 0 when not in the queue (only profitable positions are), ranked by P&amp;L% x effective leverage.
[**listVaultMarketAgentDrafts()**](VaultMarketsApi.md#listVaultMarketAgentDrafts) | **GET** /v1/vault-markets/agent/drafts | Limit orders the shopping agent drafted for you, newest first. A draft places nothing: send its orderBody to POST /api/v1/vault-markets/pro/orders to place it.
[**listVaultMarketAgentWatches()**](VaultMarketsApi.md#listVaultMarketAgentWatches) | **GET** /v1/vault-markets/agent/watches | Your price watches on book keys (best bid, lowest ask, last trade or market price, in cents), live ones first. &#x60;?live&#x3D;true&#x60; for live only.
[**listVaultMarketAlertLog()**](VaultMarketsApi.md#listVaultMarketAlertLog) | **GET** /v1/vault-markets/alert-log | What the alerts hub did with your recent vault alerts (&#x60;?limit&#x3D;&#x60; 1 to 200, default 50): kind, title, the channels it went to, what was held (channel:reason) and the email digest state.
[**listVaultMarketAlerts()**](VaultMarketsApi.md#listVaultMarketAlerts) | **GET** /v1/vault-markets/alerts | Your price alerts on book keys.
[**listVaultMarketAuctions()**](VaultMarketsApi.md#listVaultMarketAuctions) | **GET** /v1/vault-markets/auctions | Open vault auction events (weekly, ending Sunday; premier, units marked $10,000+) and their lots, soonest ending first.
[**listVaultMarketBlocks()**](VaultMarketsApi.md#listVaultMarketBlocks) | **GET** /v1/vault-markets/blocks | An entity&#39;s block orders, newest first, each with its plan and how it was allocated.
[**listVaultMarketBullionFamilyPegs()**](VaultMarketsApi.md#listVaultMarketBullionFamilyPegs) | **GET** /v1/vault-markets/bullion/family-pegs | Your family-wide spot-pegged quotes (live, or all with status&#x3D;all): one quote resting across a bullion family books at one condition, with units left, the peg, its status and every leg (the pegged quote on each book).
[**listVaultMarketBullionKeys()**](VaultMarketsApi.md#listVaultMarketBullionKeys) | **GET** /v1/vault-markets/bullion/keys | Bullion key families (metal, form, size, mint or any mint): members, vault units, best resting bid and ask across their books, and spot as a labelled reference with what one unit of metal is worth at it. Spot is never a Crossly price.
[**listVaultMarketBullionPegs()**](VaultMarketsApi.md#listVaultMarketBullionPegs) | **GET** /v1/vault-markets/bullion/pegs | Your spot-pegged quotes (live, or all with status&#x3D;all): side, units, the peg, the order it rests as, the last price and spot it was priced from, and why it is pulled when it is.
[**listVaultMarketCollectionWorth()**](VaultMarketsApi.md#listVaultMarketCollectionWorth) | **GET** /v1/vault-markets/collection-worth | Your collection valued at the display marks: rows on a vault book key with a mark are summed; rows with no mark or no key are counted, never valued.
[**listVaultMarketConfirmations()**](VaultMarketsApi.md#listVaultMarketConfirmations) | **GET** /v1/vault-markets/confirmations | Trade confirmations for your fills in a window (default 31 days): price, sale fee, maker or taker, order, vault unit and warehouse receipt.
[**listVaultMarketCreatorCohostInvites()**](VaultMarketsApi.md#listVaultMarketCreatorCohostInvites) | **GET** /v1/vault-markets/creators/cohost-invites | For creators: your invites from Crossly to co-host a Market Open launch show (invited, accepted, declined or withdrawn), each with the key, its show and the guidance for co-hosts.
[**listVaultMarketCredit()**](VaultMarketsApi.md#listVaultMarketCredit) | **GET** /v1/vault-markets/credit | Your vault loans and advances (live by default): what is owed, interest accrued, loan-to-value, the liquidation line and the collateral value it is called at.
[**listVaultMarketDealerBands()**](VaultMarketsApi.md#listVaultMarketDealerBands) | **GET** /v1/vault-markets/dealer/bands | Your Instant Exit bands and whether each is being kept now.
[**listVaultMarketDealerBids()**](VaultMarketsApi.md#listVaultMarketDealerBids) | **GET** /v1/vault-markets/dealer/bids | Your standing dealer bids: open (default) or all.
[**listVaultMarketDealerPoolFills()**](VaultMarketsApi.md#listVaultMarketDealerPoolFills) | **GET** /v1/vault-markets/dealer/pools/{id}/fills | A curve pool&#39;s fills, newest first: side, price and spot after.
[**listVaultMarketDealerPools()**](VaultMarketsApi.md#listVaultMarketDealerPools) | **GET** /v1/vault-markets/dealer/pools | Your curve pools: open (default) or all, each with its curve, spot, units, buy budget, running totals, the ladder it shows and its live legs.
[**listVaultMarketDigestHistory()**](VaultMarketsApi.md#listVaultMarketDigestHistory) | **GET** /v1/vault-markets/digest/history | Past weekly digests: week, status (sent / skipped / failed), the channels used and a summary.
[**listVaultMarketEntityAudit()**](VaultMarketsApi.md#listVaultMarketEntityAudit) | **GET** /v1/vault-markets/entities/{id}/audit | The entity&#39;s audit trail, newest first: hash-chained rows with actor, account, API key, IP, session and source.
[**listVaultMarketEntityConversions()**](VaultMarketsApi.md#listVaultMarketEntityConversions) | **GET** /v1/vault-markets/entities/{id}/conversions | The custodian&#39;s CBX-to-USD reward conversions for an entity that elected USD, newest first, with their status.
[**listVaultMarketEstimatesAccuracy()**](VaultMarketsApi.md#listVaultMarketEstimatesAccuracy) | **GET** /v1/vault-markets/estimates-accuracy | The Crossly Estimate&#39;s track record: walk-forward backtest n, FSD and bias per method, category and liquidity bucket, and whether estimates in that cell are shown.
[**listVaultMarketFeed()**](VaultMarketsApi.md#listVaultMarketFeed) | **GET** /v1/vault-markets/feed | New vault buys by the people you follow who share them, newest first (no prices). Page with &#x60;before&#x60; (the last item&#39;s &#x60;at&#x60;).
[**listVaultMarketFollowCopyWatch()**](VaultMarketsApi.md#listVaultMarketFollowCopyWatch) | **GET** /v1/vault-markets/follows/copy-watch | The collectors you copy-watch and whether each still shares bids and asks.
[**listVaultMarketFollowCopyWatchAlerts()**](VaultMarketsApi.md#listVaultMarketFollowCopyWatchAlerts) | **GET** /v1/vault-markets/follows/copy-watch/alerts | Your copy-watch alerts, newest first: who, bid or ask, quantity, limit price, market, and whether it still rests. Page with &#x60;before&#x60;.
[**listVaultMarketFollowFeed()**](VaultMarketsApi.md#listVaultMarketFollowFeed) | **GET** /v1/vault-markets/follows/feed | Public vault activity of the collectors you follow (buys, units sent in, sales, Hall loans), newest first, never a price. Filter with &#x60;kinds&#x60;; page with &#x60;before&#x60;.
[**listVaultMarketFollowFollowing()**](VaultMarketsApi.md#listVaultMarketFollowFollowing) | **GET** /v1/vault-markets/follows/following | The collectors you follow who have a public vault: what each shares and whether you copy-watch them.
[**listVaultMarketFollowLeaderboards()**](VaultMarketsApi.md#listVaultMarketFollowLeaderboards) | **GET** /v1/vault-markets/follows/leaderboards | An opt-in return leaderboard (&#x60;period&#x60; 30d, 90d or 365d; &#x60;category&#x60; all or a category slug), ranked by risk-adjusted return from the book A/B marks. Percent and risk only: no dollars, no volume.
[**listVaultMarketFollowProfileActivity()**](VaultMarketsApi.md#listVaultMarketFollowProfileActivity) | **GET** /v1/vault-markets/follows/profiles/{handle}/activity | One collector public vault activity, newest first, never a price. 404 when their vault is not public.
[**listVaultMarketGifts()**](VaultMarketsApi.md#listVaultMarketGifts) | **GET** /v1/vault-markets/gifts | Gifts you sent and received, newest first, with their status.
[**listVaultMarketGradeToVault()**](VaultMarketsApi.md#listVaultMarketGradeToVault) | **GET** /v1/vault-markets/grade-to-vault | Your Grade to Vault flows, newest first, each brought up to date: its step, the grading submission, the unit, the grade, the market for it, and the ask once listed. &#x60;live&#x3D;1&#x60; for those still going.
[**listVaultMarketGrading()**](VaultMarketsApi.md#listVaultMarketGrading) | **GET** /v1/vault-markets/grading | Your vault units sent to grading: where each card is in its run, and the grade once it is back.
[**listVaultMarketHallLenders()**](VaultMarketsApi.md#listVaultMarketHallLenders) | **GET** /v1/vault-markets/hall/lenders | The vault units lent to this week&#39;s Hall of Grails exhibition and on show now, in plinth order: the item (skuId, name, imageUrl, grade), the lender as the plate names them (a display name, or \&quot;a collector\&quot;), the plate lines and how many exhibitions the unit has stood in. meta.exhibition is the week (key, title, endsAt). Names no ids and no amounts.
[**listVaultMarketIndexCommitteeMinutes()**](VaultMarketsApi.md#listVaultMarketIndexCommitteeMinutes) | **GET** /v1/vault-markets/index-committee/minutes | Published Index Committee minutes, newest first: attendees (names and roles), quorum, agenda, minutes and decisions.
[**listVaultMarketIndexComplaints()**](VaultMarketsApi.md#listVaultMarketIndexComplaints) | **GET** /v1/vault-markets/index-complaints | Your complaints and their answers, newest first.
[**listVaultMarketIndexConstituents()**](VaultMarketsApi.md#listVaultMarketIndexConstituents) | **GET** /v1/vault-markets/indexes/{slug}/constituents | The book keys in an index with their weight, move since the last close and contribution to the index&#39;s move (basis points).
[**listVaultMarketIndexConsultations()**](VaultMarketsApi.md#listVaultMarketIndexConsultations) | **GET** /v1/vault-markets/index-consultations | Consultations on index method changes (open for at least 30 days), newest first. Filter by &#x60;status&#x60;.
[**listVaultMarketIndexEvents()**](VaultMarketsApi.md#listVaultMarketIndexEvents) | **GET** /v1/vault-markets/index-events | Every index event, newest first: add, delete, rebalance, method, correction, halt; each with when it was announced, when it takes effect, the detail and the reason. Filter by &#x60;kind&#x60;.
[**listVaultMarketIndexEventsBySlug()**](VaultMarketsApi.md#listVaultMarketIndexEventsBySlug) | **GET** /v1/vault-markets/indexes/{slug}/events | One index&#39;s events, newest first.
[**listVaultMarketIndexJudgments()**](VaultMarketsApi.md#listVaultMarketIndexJudgments) | **GET** /v1/vault-markets/index-judgments | The expert-judgment log: every Index Committee action (halt, resume, exclude a key, void a trade, restate, retire) with its written reason.
[**listVaultMarketIndexLevelSeries()**](VaultMarketsApi.md#listVaultMarketIndexLevelSeries) | **GET** /v1/vault-markets/indexes/{slug}/level-series | An index&#39;s published levels. &#x60;engine&#x3D;chain&#x60; (default): daily closes. &#x60;engine&#x3D;tpd|repeat_sales&#x60;: weekly (else monthly) model estimates with a 95% band and n; labelled, never a price. &#x60;series&#x3D;settlement&#x60; returns each value as first published (never restated). Below the data gate &#x60;data&#x60; is empty and &#x60;notice&#x60; explains.
[**listVaultMarketIndexLicenceMine()**](VaultMarketsApi.md#listVaultMarketIndexLicenceMine) | **GET** /v1/vault-markets/index-licence/mine | Your index feed licences (the indexes each covers, or all), as ops recorded them. No licence: the feed answers 403 not_a_licensee.
[**listVaultMarketIndexMembers()**](VaultMarketsApi.md#listVaultMarketIndexMembers) | **GET** /v1/vault-markets/indexes/{slug}/members | The members of an index on a day (&#x60;asOf&#x60;, default today) with their weights, shares, moves and contributions; for a past day, the inputs stored with that day&#39;s close and each member&#39;s effective dates.
[**listVaultMarketIndexMovers()**](VaultMarketsApi.md#listVaultMarketIndexMovers) | **GET** /v1/vault-markets/indexes/movers | The built-in indexes that moved most since their last daily close.
[**listVaultMarketIndexes()**](VaultMarketsApi.md#listVaultMarketIndexes) | **GET** /v1/vault-markets/indexes | Indexes over book keys: per category, per top brand, the Crossly 50 and your own. Each with its level now (base 1000 at inception) and change since the last daily close.
[**listVaultMarketInstantExitHistory()**](VaultMarketsApi.md#listVaultMarketInstantExitHistory) | **GET** /v1/vault-markets/instant-exit/history | Your Instant Exits, newest first: quoted price, mark, and whether it filled.
[**listVaultMarketInstantExitHoldings()**](VaultMarketsApi.md#listVaultMarketInstantExitHoldings) | **GET** /v1/vault-markets/instant-exit/holdings | Instant Exit quotes for everything you hold in the vault, one per book key, with units held and which are free to sell.
[**listVaultMarketJointTrades()**](VaultMarketsApi.md#listVaultMarketJointTrades) | **GET** /v1/vault-markets/joint/{id}/trades | The joint vault trades, newest first: side, book key, limit, who started it, whose account the order sits on, and the order standing on the book.
[**listVaultMarketLargeTraderReports()**](VaultMarketsApi.md#listVaultMarketLargeTraderReports) | **GET** /v1/vault-markets/large-trader-reports | Your large-trader reports (with any linked accounts, as one party): due first, then filed, then cleared in the last 90 days. Each has &#x60;action&#x60;: file | amend | refile | none.
[**listVaultMarketLendingStatements()**](VaultMarketsApi.md#listVaultMarketLendingStatements) | **GET** /v1/vault-markets/lending/statements | The days you have stored collateral statements for, newest first, with their summary.
[**listVaultMarketLoans()**](VaultMarketsApi.md#listVaultMarketLoans) | **GET** /v1/vault-markets/loans | Units you lent: rate, fees earned, recall due.
[**listVaultMarketLocateMine()**](VaultMarketsApi.md#listVaultMarketLocateMine) | **GET** /v1/vault-markets/locates/mine | Your locates, newest first (held / used / released / expired).
[**listVaultMarketMidpoint()**](VaultMarketsApi.md#listVaultMarketMidpoint) | **GET** /v1/vault-markets/midpoint | Your midpoint block orders.
[**listVaultMarketMovers()**](VaultMarketsApi.md#listVaultMarketMovers) | **GET** /v1/vault-markets/movers | Vault items with the biggest 24 h moves in their market price (from the order book), with units in the vault.
[**listVaultMarketNavHistory()**](VaultMarketsApi.md#listVaultMarketNavHistory) | **GET** /v1/vault-markets/nav/history | Daily NAV snapshots (mark, bid, liquidation, Level 2 / Level 3).
[**listVaultMarketOffers()**](VaultMarketsApi.md#listVaultMarketOffers) | **GET** /v1/vault-markets/offers | The offers inbox: for each book key you hold, the best bid from someone else, units at it, the top bid levels, the mark, and your alert.
[**listVaultMarketOpening()**](VaultMarketsApi.md#listVaultMarketOpening) | **GET** /v1/vault-markets/opening | Keys opening soon on the vault book (and just opened): units on the shelf, dealers quoting, the waitlist, the mark when the book has one, and your place.
[**listVaultMarketOracleHistory()**](VaultMarketsApi.md#listVaultMarketOracleHistory) | **GET** /v1/vault-markets/oracle/{slug}/history | Recent publish attempts for an index over 30 days, newest first: published, skipped (with the reason: too few items priced, stale marks, confidence too wide...) or failed (with the error). Filter with &#x60;status&#x60;, cap with &#x60;limit&#x60; (default 100).
[**listVaultMarketP2pAuctions()**](VaultMarketsApi.md#listVaultMarketP2pAuctions) | **GET** /v1/vault-markets/p2p/auctions | Running refinancing auctions, soonest to end first: lenders calls (&#x60;auction&#x60;) and borrowers looking for a cheaper lender (&#x60;refiAuction&#x60;). The payoff now, the rate a new lender gets now, when it ends, and the item.
[**listVaultMarketP2pLoans()**](VaultMarketsApi.md#listVaultMarketP2pLoans) | **GET** /v1/vault-markets/p2p/loans | Your P2P loans as borrower and/or lender (&#x60;role&#x60;), live by default (&#x60;status&#x60;): what is owed now, daily interest, the refinancing auction when called, and the item mark for information only (it never triggers anything).
[**listVaultMarketP2pOfferMine()**](VaultMarketsApi.md#listVaultMarketP2pOfferMine) | **GET** /v1/vault-markets/p2p/offers/mine | Your P2P loan offers, newest first, with how many loans each has funded.
[**listVaultMarketP2pOffers()**](VaultMarketsApi.md#listVaultMarketP2pOffers) | **GET** /v1/vault-markets/p2p/offers | The open P2P loan offers book, lowest rate first: cents offered per loan, APR (bps), loans left, and the item (book key) or unit each lends against. &#x60;bookKey&#x60; narrows to one item. Lender identities are never shown.
[**listVaultMarketP2pUnits()**](VaultMarketsApi.md#listVaultMarketP2pUnits) | **GET** /v1/vault-markets/p2p/units | Your vault units for P2P borrowing: whether each can be pledged now (and why not), the best offers covering it, and its loan when it has one.
[**listVaultMarketPaperFills()**](VaultMarketsApi.md#listVaultMarketPaperFills) | **GET** /v1/vault-markets/paper/fills | Your paper fills since your last reset, newest first: price, simulated fee, taker or maker, and whether a visible real order (book) or a real trade (tape) filled it. Play money only.
[**listVaultMarketPaperLeaderboard()**](VaultMarketsApi.md#listVaultMarketPaperLeaderboard) | **GET** /v1/vault-markets/paper/leaderboard | The weekly paper trading leaderboard (opt-in, display names only): best return on play equity this week (or a past &#x60;week&#x60;, its Monday as YYYY-MM-DD), with your own line. Nothing is won or paid.
[**listVaultMarketPaperMissions()**](VaultMarketsApi.md#listVaultMarketPaperMissions) | **GET** /v1/vault-markets/paper/missions | Your paper-trading missions (play money only): each mission with what to do, your count toward its target, whether it is done and when, plus a suggested market for the \&quot;Read the mark\&quot; mission. Progress is observed by the server from your paper orders and fills, price watches, set goals and graded mark checks. Missions earn world quest progress and cosmetic pins, never money.
[**listVaultMarketPaperOrders()**](VaultMarketsApi.md#listVaultMarketPaperOrders) | **GET** /v1/vault-markets/paper/orders | Your paper orders since your last reset, newest first: working, done (filled, cancelled, expired) or all. Play money only.
[**listVaultMarketPartnerAccruals()**](VaultMarketsApi.md#listVaultMarketPartnerAccruals) | **GET** /v1/vault-markets/partners/accruals | Your partner fee shares, newest first: accrued on a unit&#39;s first sale, paid in Bucks once the sale is final, void if it was refunded.
[**listVaultMarketPoolStakes()**](VaultMarketsApi.md#listVaultMarketPoolStakes) | **GET** /v1/vault-markets/pool/stakes | Your stakes in the market pool and what each redeems for now.
[**listVaultMarketPortfolioMarginHistory()**](VaultMarketsApi.md#listVaultMarketPortfolioMarginHistory) | **GET** /v1/vault-markets/portfolio-margin/history | The 5-minute portfolio margin recalculations for a firm sub-account over the last &#x60;hours&#x60; (default 24, at most 720), newest first: equity, requirement, excess, scenario and floor figures, gross and state.
[**listVaultMarketPositionUnits()**](VaultMarketsApi.md#listVaultMarketPositionUnits) | **GET** /v1/vault-markets/positions/{id}/units | The vault units of one of your positions that you hold (a leveraged long&#39;s collateral), each with its story link.
[**listVaultMarketPositions()**](VaultMarketsApi.md#listVaultMarketPositions) | **GET** /v1/vault-markets/positions | Your positions, live (default) or closed.
[**listVaultMarketPositionsRisk()**](VaultMarketsApi.md#listVaultMarketPositionsRisk) | **GET** /v1/vault-markets/positions-risk | For each live position: its tier, health, margin state, the mark at which it is called and the mark at which it is liquidated, and the distance to it.
[**listVaultMarketPriceWidgets()**](VaultMarketsApi.md#listVaultMarketPriceWidgets) | **GET** /v1/vault-markets/price-widgets | Your price widgets, newest first, each with its iframe and script-tag snippets. &#x60;meta.codes&#x60; lists your affiliate codes a widget can link through; &#x60;meta.max&#x60; is the cap on live widgets.
[**listVaultMarketProCandles()**](VaultMarketsApi.md#listVaultMarketProCandles) | **GET** /v1/vault-markets/pro/candles | OHLCV candles (1m, 5m, 15m, 1h, 4h, 1d) from the trades on a book key.
[**listVaultMarketProEvents()**](VaultMarketsApi.md#listVaultMarketProEvents) | **GET** /v1/vault-markets/pro/events | Your order event log after a sequence number (new, leg, fill, replaced, cancelled, expired, done): a replayable drop copy.
[**listVaultMarketProLinks()**](VaultMarketsApi.md#listVaultMarketProLinks) | **GET** /v1/vault-markets/pro/links | Your linked orders (brackets, OCO pairs, trailing stops, position exits): live (default) or done.
[**listVaultMarketProOrders()**](VaultMarketsApi.md#listVaultMarketProOrders) | **GET** /v1/vault-markets/pro/orders | Your orders: open (default) or done, optionally on one book key, or only those booked to one sub-account (&#x60;subaccountId&#x60;).
[**listVaultMarketProQuotes()**](VaultMarketsApi.md#listVaultMarketProQuotes) | **GET** /v1/vault-markets/pro/quotes | Your live quotes.
[**listVaultMarketProRewards()**](VaultMarketsApi.md#listVaultMarketProRewards) | **GET** /v1/vault-markets/pro/rewards | Your daily market-maker liquidity rewards (paid in CBX).
[**listVaultMarketProTape()**](VaultMarketsApi.md#listVaultMarketProTape) | **GET** /v1/vault-markets/pro/tape | The latest trades on a book key, newest first, with which side made and which took.
[**listVaultMarketProofOfReserveLeaves()**](VaultMarketsApi.md#listVaultMarketProofOfReserveLeaves) | **GET** /v1/vault-markets/proof-of-reserves/{day}/leaves | One day&#39;s leaf hashes in tree order, a page at a time: enough to recount the units and rebuild the root yourself. Leaves are salted, so they name no owner.
[**listVaultMarketRecurring()**](VaultMarketsApi.md#listVaultMarketRecurring) | **GET** /v1/vault-markets/recurring | Your recurring buys: key, schedule, price cap, payment, auto-lend, next run.
[**listVaultMarketRecurringRuns()**](VaultMarketsApi.md#listVaultMarketRecurringRuns) | **GET** /v1/vault-markets/recurring/{id}/runs | One recurring buy&#39;s runs: filled, skipped (with the reason, e.g. the price was over the cap) or failed.
[**listVaultMarketRecurringRuns2()**](VaultMarketsApi.md#listVaultMarketRecurringRuns2) | **GET** /v1/vault-markets/recurring-runs | Every run of all your recurring buys, newest first.
[**listVaultMarketRfq()**](VaultMarketsApi.md#listVaultMarketRfq) | **GET** /v1/vault-markets/rfq | Your quote requests, newest first.
[**listVaultMarketRfqInbox()**](VaultMarketsApi.md#listVaultMarketRfqInbox) | **GET** /v1/vault-markets/rfq/inbox | Open quote requests you were sent (as a dealer, DMM, LP or holder), with your live answer.
[**listVaultMarketRfqOpen()**](VaultMarketsApi.md#listVaultMarketRfqOpen) | **GET** /v1/vault-markets/rfq/open | Open quote requests on one key (all-to-all: anyone with ID may answer). Anonymous.
[**listVaultMarketSetGoalBaskets()**](VaultMarketsApi.md#listVaultMarketSetGoalBaskets) | **GET** /v1/vault-markets/set-goals/{id}/baskets | A set goal basket bids, newest first, each with its budget, what it committed and spent, and every leg (piece, book key, limit, pro order id, status).
[**listVaultMarketSetGoalSets()**](VaultMarketsApi.md#listVaultMarketSetGoalSets) | **GET** /v1/vault-markets/set-goals/sets | Sets to start a goal on. With q (2+ characters): a word-start search of every catalogue set. Without: the sets you hold pieces of in the vault, then the collections you are building. Each with your live goal on it, if any.
[**listVaultMarketSetGoals()**](VaultMarketsApi.md#listVaultMarketSetGoals) | **GET** /v1/vault-markets/set-goals | Your set goals: the set, the target a piece must meet, pieces held of the total (from your vault), and the working basket bid.
[**listVaultMarketShareCards()**](VaultMarketsApi.md#listVaultMarketShareCards) | **GET** /v1/vault-markets/share-cards | Your share cards (not taken down), each as the public sees it.
[**listVaultMarketSupplyDeposits()**](VaultMarketsApi.md#listVaultMarketSupplyDeposits) | **GET** /v1/vault-markets/supply/deposits | Your units sent to the vault, newest first, each with its state and its key&#39;s Instant Exit line (\&quot;Instant Exit now: $X (N% of mark)\&quot; or \&quot;No market yet\&quot;). Filter with &#x60;inventoryItemIds&#x60; (comma-separated).
[**listVaultMarketSupplyInvites()**](VaultMarketsApi.md#listVaultMarketSupplyInvites) | **GET** /v1/vault-markets/supply/invites | Market Open invites to you as a dealer: keys Crossly is opening and asks you to quote.
[**listVaultMarketValuationStatements()**](VaultMarketsApi.md#listVaultMarketValuationStatements) | **GET** /v1/vault-markets/valuation-statements | The insurance and appraisal statements you issued, newest first: purpose, date, units, total at the marks, hash and verify link.
[**listVaultMarketVaultSuggestions()**](VaultMarketsApi.md#listVaultMarketVaultSuggestions) | **GET** /v1/vault-markets/vault-suggestions | What to send to the vault: your inventory items whose book key has a liquid vault market (tier A, B or C), best first. Each has a score (0 to 100) and its reasons, the market (tier, mark and its quality, best bid, best vault ask, spread), Instant Exit now, your list price, days listed without selling, and the vault fee. &#x60;meta.summary&#x60; counts what was left out and why. Inform only; send with POST /api/v1/vault-markets/supply/send.
[**listVaultMarketWatchlist()**](VaultMarketsApi.md#listVaultMarketWatchlist) | **GET** /v1/vault-markets/watchlist | Your watched book keys with mark, 24 h and 7 d change, and the last 30 daily marks (sparkline).
[**listVaultMarketWidgetTokens()**](VaultMarketsApi.md#listVaultMarketWidgetTokens) | **GET** /v1/vault-markets/widget/tokens | Your live home-screen widget tokens, one per phone: id, name (the phone), public prefix, created and last used. The secret is never returned again.
[**listVaultMarketWorldCohosts()**](VaultMarketsApi.md#listVaultMarketWorldCohosts) | **GET** /v1/vault-markets/world/cohosts | Market Open launch shows a verified creator co-hosts that are on now or opening soon: the key, its phase, the show, the creator (named only while their vault profile is public), their room link and, when the creator is in the creator programme, the disclosure that they may earn a share of the fee Crossly keeps. Never a prompt to trade.
[**listVaultMarketWorldCreatorRooms()**](VaultMarketsApi.md#listVaultMarketWorldCreatorRooms) | **GET** /v1/vault-markets/world/creator-rooms | Verified creators whose public vault shelf is a world room: title, the creator, the room link and the disclosure. Rooms show each market share of the shelf, never amounts.
[**listVaultMarketWorldMarketOpen()**](VaultMarketsApi.md#listVaultMarketWorldMarketOpen) | **GET** /v1/vault-markets/world/market-open | Market Open events in the Crossly World Commons: keys opening soon and those that opened in the last few hours, live first then soonest, each with its board line, units on the shelf, dealers quoting and the launch show when there is one. Never a prompt to trade.
[**listVaultReceiptTokenWallets()**](VaultMarketsApi.md#listVaultReceiptTokenWallets) | **GET** /v1/vault/receipt-tokens/wallets | Your verified Solana wallets and whether each is on the receipt-token allow-list (receipt tokens move only between allow-listed wallets). meta.state is the gate.
[**listVaultReceiptTokens()**](VaultMarketsApi.md#listVaultReceiptTokens) | **GET** /v1/vault/receipt-tokens | Your vault units with their warehouse receipt and receipt-token state (not exported, waiting for a signature, in a wallet, frozen, redeemed), whether each can be exported now and why not. meta.state is the gate (open, missing envs, program id, authority, terms version, cluster); meta.history is your last 50 exports.
[**listVaultReceipts()**](VaultMarketsApi.md#listVaultReceipts) | **GET** /v1/vault/receipts | Your warehouse receipts (documents of title for your vault units), live first. meta.receipts says whether receipts are registered (VAULT_WAREHOUSE_ISSUER) and their terms version.
[**listVaultUnitList()**](VaultMarketsApi.md#listVaultUnitList) | **GET** /v1/vault/unit-list | The published unit list (bar-list equivalent): every unit on a vault shelf with its warehouse receipt number (when receipts are registered), book key, shelf location code, insured value, status, pledged / on-loan flags and a per-receipt hashed holder (never a name or id). Filter with &#x60;bookKey&#x60;; pages with &#x60;page&#x60; / &#x60;limit&#x60;.
[**updateVaultMarketAlertPref()**](VaultMarketsApi.md#updateVaultMarketAlertPref) | **PUT** /v1/vault-markets/alert-prefs | Change vault alert settings: &#x60;matrix&#x60; ({ kind: { channel: true|false } }, merged onto what is set), &#x60;quietHours&#x60; ({ start: \&quot;HH:MM\&quot;, end: \&quot;HH:MM\&quot;, tz } or null to clear) and &#x60;telegram&#x60; (the Telegram master switch). Locked switches are ignored. Returns the new settings.
[**updateVaultMarketBlockAllocation()**](VaultMarketsApi.md#updateVaultMarketBlockAllocation) | **PUT** /v1/vault-markets/blocks/{orderId}/allocation | Post-trade allocation: set or replace the plan for a buy you placed for one of the entity&#39;s sub-accounts (that sub-account leads). Refused once any share has moved.
[**updateVaultMarketChannel()**](VaultMarketsApi.md#updateVaultMarketChannel) | **PUT** /v1/vault-markets/channels | Change the switches: &#x60;telegramAlerts&#x60;, &#x60;telegramDigest&#x60;, &#x60;pushCapPerDay&#x60; (0 to 20). Margin calls and recalls are never capped. Returns the new view.
[**updateVaultMarketDealerBand()**](VaultMarketsApi.md#updateVaultMarketDealerBand) | **PUT** /v1/vault-markets/dealer/bands | Commit to an Instant Exit band on a key: a standing bid for &#x60;units&#x60; kept at &#x60;bandBps&#x60; of the mark, never above &#x60;maxPriceCents&#x60;, re-quoted as the mark moves.
[**updateVaultMarketDealerPool()**](VaultMarketsApi.md#updateVaultMarketDealerPool) | **PATCH** /v1/vault-markets/dealer/pools/{id} | Change a curve pool: spot, step, fee, levels, units, buy budget, floor, ceiling, or pause / resume. Re-quoted at once.
[**updateVaultMarketEntityMember()**](VaultMarketsApi.md#updateVaultMarketEntityMember) | **PATCH** /v1/vault-markets/entities/{id}/members/{memberId} | Admin: change a member&#39;s role, limits or sub-accounts. The last admin cannot be demoted.
[**updateVaultMarketEntitySubaccountLimit()**](VaultMarketsApi.md#updateVaultMarketEntitySubaccountLimit) | **PUT** /v1/vault-markets/entities/{id}/subaccounts/{subId}/limits | Admin: set a sub-account&#39;s limits (per-order notional, units per key, gross, net, leverage), held to the entity&#39;s caps. &#x60;limits: null&#x60; clears them.
[**updateVaultMarketEntityUsdElection()**](VaultMarketsApi.md#updateVaultMarketEntityUsdElection) | **PUT** /v1/vault-markets/entities/{id}/usd-election | Admin: elect USD for the entity (&#x60;usdOnly&#x60;). Its sub-accounts then post collateral in USD only and pay every fee in USD, and any CBX reward paid to one of them is converted to USD by the custodian in that account. Audited; it can be turned off again.
[**updateVaultMarketFollowCopyWatch()**](VaultMarketsApi.md#updateVaultMarketFollowCopyWatch) | **PUT** /v1/vault-markets/follows/copy-watch/{handle} | Copy-watch a collector who shares bids and asks: you get an alert when they rest a new one. It never places an order for you.
[**updateVaultMarketFollowSharing()**](VaultMarketsApi.md#updateVaultMarketFollowSharing) | **PUT** /v1/vault-markets/follows/sharing | Turn sharing switches on or off (&#x60;isPublic&#x60;, &#x60;showBuys&#x60;, &#x60;deposits&#x60;, &#x60;sales&#x60;, &#x60;hallLoans&#x60;, &#x60;orders&#x60;, &#x60;leaderboard&#x60;). A switch shows only what happens after it goes on; all but the profile itself need the profile public.
[**updateVaultMarketHomeUnit()**](VaultMarketsApi.md#updateVaultMarketHomeUnit) | **PUT** /v1/vault-markets/home/units | Show exactly these vault units in your Crossly World home: { units: [{ vaultItemId, visitors }] }. Units left out come out of their cases; units already standing stay where they are; new ones go into a free display-case or shelf slot, else a glass case of their own along a wall. visitors: true lets people who may enter your home see that unit (default false: only you). Returns placed, unplaced (no free case: the home is full), refused (with why) and the desk. Display only: nothing moves.
[**updateVaultMarketIndex()**](VaultMarketsApi.md#updateVaultMarketIndex) | **PATCH** /v1/vault-markets/indexes/{slug} | Rename, re-weight, share or change the keys of an index of your own; its level carries on.
[**updateVaultMarketLendingElection()**](VaultMarketsApi.md#updateVaultMarketLendingElection) | **PUT** /v1/vault-markets/lending/election | Change your lender election (applies to loans opened after the change). Needs lending.
[**updateVaultMarketMmMmp()**](VaultMarketsApi.md#updateVaultMarketMmMmp) | **PUT** /v1/vault-markets/mm/mmp | Set market-maker protection: N units or $X filled on your quotes within T seconds pulls every quote and freezes quoting for a set time.
[**updateVaultMarketMode()**](VaultMarketsApi.md#updateVaultMarketMode) | **PUT** /v1/vault-markets/mode | Choose your Vault Markets mode: &#x60;mode&#x60; simple or pro. Remembered for you on the web and in the app. A display preference only: it places nothing and moves no money.
[**updateVaultMarketOfferAlert()**](VaultMarketsApi.md#updateVaultMarketOfferAlert) | **PUT** /v1/vault-markets/offers/alert | Set (or clear with null) the bid price that should always notify you on a key you hold, and mute or unmute offer notices on it.
[**updateVaultMarketPaperLeaderboard()**](VaultMarketsApi.md#updateVaultMarketPaperLeaderboard) | **PUT** /v1/vault-markets/paper/leaderboard | Join or leave the weekly paper leaderboard. Joining needs a display name (2 to 24 letters, numbers, spaces, dots, dashes or underscores), never your real name. Returns &#x60;{ optIn, displayName }&#x60;.
[**updateVaultMarketPositionExit()**](VaultMarketsApi.md#updateVaultMarketPositionExit) | **PUT** /v1/vault-markets/positions/{id}/exits | Set a position&#39;s take-profit / stop-loss: a long is closed, a short covered, when the last trade reaches one. Both null clears them.
[**updateVaultMarketPriceWidget()**](VaultMarketsApi.md#updateVaultMarketPriceWidget) | **PATCH** /v1/vault-markets/price-widgets/{id} | Change a widget: name, range, layout, theme, affiliate code (null for none) or allowed sites. The market or index it shows never changes: make a new widget for another.
[**updateVaultMarketProfile()**](VaultMarketsApi.md#updateVaultMarketProfile) | **PUT** /v1/vault-markets/profile | Turn your public vault profile on or off (&#x60;isPublic&#x60;) and whether followers see your new buys (&#x60;showBuys&#x60;). It shows weights by market, never dollars.
[**updateVaultMarketRecurring()**](VaultMarketsApi.md#updateVaultMarketRecurring) | **PATCH** /v1/vault-markets/recurring/{id} | Change a recurring buy&#39;s schedule, caps, cards or auto-lend, or pause / resume it.
[**updateVaultMarketSetGoal()**](VaultMarketsApi.md#updateVaultMarketSetGoal) | **PATCH** /v1/vault-markets/set-goals/{id} | Change what a piece must be to count (condition, grade mode, grade). Refused while a basket bid works: cancel it first.
[**updateVaultMarketShareCard()**](VaultMarketsApi.md#updateVaultMarketShareCard) | **PATCH** /v1/vault-markets/share-cards/{id} | Show or hide the dollar amounts on one of your share cards (&#x60;showAmounts&#x60;).
[**updateVaultMarketSupplyDeposit()**](VaultMarketsApi.md#updateVaultMarketSupplyDeposit) | **PATCH** /v1/vault-markets/supply/deposits/{id} | Change a deposit&#39;s toggles: &#x60;autoListBps&#x60; (list at that share of the mark once stored; null &#x3D; do not) and &#x60;lendWhenIdle&#x60;.
[**updateVaultMarketSupplyRoundUp()**](VaultMarketsApi.md#updateVaultMarketSupplyRoundUp) | **PUT** /v1/vault-markets/supply/round-up | Set the round-up: &#x60;shareBps&#x60; (1%-50%) of each payout released to you adds to a budget; when it covers the cheapest vault unit on &#x60;bookKey&#x60;, one unit is bought with your saved card, never above the budget.
[**updateVaultMarketTodBeneficiary()**](VaultMarketsApi.md#updateVaultMarketTodBeneficiary) | **PUT** /v1/vault-markets/tod/beneficiaries | Replace your beneficiary list (keep an id to edit one): full name, contact (email or @username), relationship, and share in basis points; shares add up to 10000. Returns &#x60;{ beneficiaries, removed }&#x60;.
[**updateVaultMarketTodDesignation()**](VaultMarketsApi.md#updateVaultMarketTodDesignation) | **PUT** /v1/vault-markets/tod/designations | Leave one of your units to one beneficiary (beneficiaryId null clears it; the unit then follows the shares). Returns &#x60;{ vaultItemId, beneficiaryId }&#x60;.
[**updateVaultMarketWorldRoomVaultGate()**](VaultMarketsApi.md#updateVaultMarketWorldRoomVaultGate) | **PUT** /v1/vault-markets/world/rooms/{id}/vault-gate | Set the vault-holder door on your own room (its collection rooms follow): visitors must hold minValueCents (cents, at reliable A/B marks) and/or minUnits units in the Crossly vault, mode any (either) or all (both), optionally only one product (scope kind product, ref the catalogue product id), bullion family (bullion, the family slug) or category (category, the slug). Send null to open it again. Returns &#x60;{ gate }&#x60;. Moves no money.
[**updateVaultMarketWorldSpaceVaultGate()**](VaultMarketsApi.md#updateVaultMarketWorldSpaceVaultGate) | **PUT** /v1/vault-markets/world/spaces/{slug}/vault-gate | Set the vault-holder door on a Space you host: the same rule as a room (minValueCents at reliable marks and/or minUnits, mode, optional scope). Send null to open it again. Returns &#x60;{ gate }&#x60;. Moves no money.


## `createVaultLend()`

```php
createVaultLend($id): \Crossly\Model\Vault\CreateVaultLendResponse
```

Turn lending on or off for a unit you own in the vault, optionally with your minimum borrow rate (APR in basis points). Returns `{ lendEnabled, minAprBps }`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createVaultLend($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultLend: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Vault\CreateVaultLendResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketAccount()`

```php
createVaultMarketAccount(): \Crossly\Model\Common\StatusResponse
```

Open your account at the custodian partner (once). Returns `{ status }`; the custodian verifies it before it is active.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createVaultMarketAccount();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Common\StatusResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketAdminMark()`

```php
createVaultMarketAdminMark(): \Crossly\Model\Vault\CreateVaultMarketAdminMarkResponse
```

Upload your fund administrator's prices (`administrator`, `marks: [{ bookKey, day, cents }]`). Shown beside Crossly's marks and labelled as yours; they never change a Crossly figure.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createVaultMarketAdminMark();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketAdminMark: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\CreateVaultMarketAdminMarkResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketAdvance()`

```php
createVaultMarketAdvance(): \Crossly\Model\Vault\GetVaultMarketCreditResponse
```

Take an advance against a vault unit that is listed for sale: paid into your custodian account, netted from the sale. Free for 60 days, then the pool rate. Needs a verified ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createVaultMarketAdvance();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketAdvance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\GetVaultMarketCreditResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketAdvanceRelist()`

```php
createVaultMarketAdvanceRelist($id): \Crossly\Model\Vault\CreateVaultMarketAdvanceRelistResponse
```

Relist an advance's unit at a new price (never so low its sale could not repay the advance).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createVaultMarketAdvanceRelist($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketAdvanceRelist: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Vault\CreateVaultMarketAdvanceRelistResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketAgentDraftCancel()`

```php
createVaultMarketAgentDraftCancel($id): \Crossly\Model\Vault\CreateVaultMarketAgentDraftCancelResponse
```

Throw a drafted order away (only while it is still a draft). Returns { ok, draft }.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createVaultMarketAgentDraftCancel($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketAgentDraftCancel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Vault\CreateVaultMarketAgentDraftCancelResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketAgentWatch()`

```php
createVaultMarketAgentWatch(): \Crossly\Model\Vault\CreateVaultMarketAgentWatchResponse
```

Watch a book key: tell me once when its best bid, lowest ask, last trade or market price crosses a price (cents). Leave out direction for \"crosses\" (whichever way it has to move). Never trades. At most 50 live, each for 90 days.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createVaultMarketAgentWatch();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketAgentWatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\CreateVaultMarketAgentWatchResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketAlert()`

```php
createVaultMarketAlert(): \Crossly\Model\Vault\ListVaultMarketAlertsItem
```

Alert me when a key's market price goes above or below a price (fires once).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createVaultMarketAlert();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketAlert: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\ListVaultMarketAlertsItem**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketAlertPrefTest()`

```php
createVaultMarketAlertPrefTest(): \Crossly\Model\Vault\CreateVaultMarketAlertPrefTestResponse
```

Send yourself one test alert of a `kind` through your own switches. Returns `{ sent, kind, plan }`, where plan says per channel: send, off, quiet (held by quiet hours) or unavailable.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createVaultMarketAlertPrefTest();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketAlertPrefTest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\CreateVaultMarketAlertPrefTestResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketAuctionLot()`

```php
createVaultMarketAuctionLot(): \Crossly\Model\Vault\CreateVaultMarketAuctionLotResponse
```

Consign a stored, authenticated unit to the next weekly or premier event, with an optional opening price and reserve. The unit is held until the close. Returns `{ lotId, eventId, endsAt }`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createVaultMarketAuctionLot();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketAuctionLot: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\CreateVaultMarketAuctionLotResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketAuctionLotBid()`

```php
createVaultMarketAuctionLotBid($id): \Crossly\Model\Vault\CreateVaultMarketAuctionLotBidResponse
```

Leave or raise your maximum on a lot; the system bids for you up to it. A bid in the last 2 minutes extends the lot by 2 minutes. The winner's saved card is charged at the close through the order book. ID needed above $10,000.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createVaultMarketAuctionLotBid($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketAuctionLotBid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Vault\CreateVaultMarketAuctionLotBidResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketAuctionLotWithdraw()`

```php
createVaultMarketAuctionLotWithdraw($id): \Crossly\Model\Common\OkResponse
```

Withdraw your lot before any bid; the unit goes back on your shelf. Returns `{ ok }`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createVaultMarketAuctionLotWithdraw($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketAuctionLotWithdraw: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Common\OkResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketBlock()`

```php
createVaultMarketBlock(): \Crossly\Model\Vault\ListVaultMarketBlocksItem
```

Place a block buy for an entity: one order booked to the first sub-account in `plan` (it pays from its custodian account), split across every sub-account in the plan at the average price, fees included, once it is done and the custodian confirmed each payment. Each share's cash moves between the entity's own custodian accounts; its units move only after that settles. Every sub-account must be one you may trade, and its share must fit its limits.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createVaultMarketBlock();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketBlock: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\ListVaultMarketBlocksItem**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketBlockAllocate()`

```php
createVaultMarketBlockAllocate($order_id): \Crossly\Model\Vault\CreateVaultMarketBlockAllocateResponse
```

Allocate a done block now (the keeper does it too). Returns `{ outcome, block }`: allocated, waiting (a payment or transfer is not settled yet), nothing_filled or none.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string

try {
    $result = $apiInstance->createVaultMarketBlockAllocate($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketBlockAllocate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**|  |

### Return type

**\Crossly\Model\Vault\CreateVaultMarketBlockAllocateResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketBullionFamilyPeg()`

```php
createVaultMarketBullionFamilyPeg(): \Crossly\Model\Vault\ListVaultMarketBullionFamilyPegsItem
```

Set a family-wide spot-pegged quote: one \"any 1 oz gold coin\" quote resting on each product book of a bullion family at the chosen condition (DS, VNDS or Used). When any leg fills it comes off the others and goes back on only for what is left; two fills at once are settled one at a time against what is left. A bid pays from your custodian account. Replaces your live family quote on the same family, condition and side. ID required.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createVaultMarketBullionFamilyPeg();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketBullionFamilyPeg: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\ListVaultMarketBullionFamilyPegsItem**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketBullionPeg()`

```php
createVaultMarketBullionPeg(): \Crossly\Model\Vault\ListVaultMarketBullionPegsItem
```

Set a spot-pegged maker quote on a bullion book key: \"spot plus or minus N cents\" or \"plus or minus N basis points\", with an optional floor and cap. It rests as a pro limit order re-priced every spot tick and is pulled while spot is stale. Replaces your live quote on the same key and side. ID required.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createVaultMarketBullionPeg();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketBullionPeg: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\ListVaultMarketBullionPegsItem**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketCollectionWorthWatch()`

```php
createVaultMarketCollectionWorthWatch(): \Crossly\Model\Vault\CreateVaultMarketCollectionWorthWatchResponse
```

Watch every collection item that sits on a vault book key (up to the watchlist cap). Returns `{ watched, skipped }`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createVaultMarketCollectionWorthWatch();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketCollectionWorthWatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\CreateVaultMarketCollectionWorthWatchResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketCreatorAttribution()`

```php
createVaultMarketCreatorAttribution(): \Crossly\Model\Vault\CreateVaultMarketCreatorAttributionResponse
```

Use a creator code: the creator earns a capped share of the fee Crossly keeps on your Vault Markets trades for a limited window (paid by Crossly, never by you). Only for people new to Vault Markets, once, and never your own code.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createVaultMarketCreatorAttribution();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketCreatorAttribution: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\CreateVaultMarketCreatorAttributionResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketCreatorCohostInviteRespond()`

```php
createVaultMarketCreatorCohostInviteRespond($id): \Crossly\Model\Vault\CreateVaultMarketCreatorCohostInviteRespondResponse
```

For creators: accept or decline an invite to co-host a Market Open launch show (`accept` true or false). Accepting needs your vault room verified and adds you to the show as a co-host; your room and the Commons then say you co-host it, with the creator-programme disclosure when it applies.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createVaultMarketCreatorCohostInviteRespond($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketCreatorCohostInviteRespond: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Vault\CreateVaultMarketCreatorCohostInviteRespondResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketCreditRepay()`

```php
createVaultMarketCreditRepay($id): \Crossly\Model\Vault\CreateVaultMarketCreditRepayResponse
```

Repay from your custodian account, interest first. Omit `amountCents` to repay everything; pass `requestId` to make a retry safe. Repaid in full, the items are free.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createVaultMarketCreditRepay($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketCreditRepay: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Vault\CreateVaultMarketCreditRepayResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketDcmLink()`

```php
createVaultMarketDcmLink(): \Crossly\Model\Vault\CreateVaultMarketDcmLinkResponse
```

Link a partner exchange account to your account (or to a firm sub-account you manage, `subaccountId`) so Crossly can show its positions: `accountRef` (the account id there) and `code` (the one-time link code it gave you). The partner must confirm the code; the code is never stored. Read-only: Crossly never trades on it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createVaultMarketDcmLink();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketDcmLink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\CreateVaultMarketDcmLinkResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketDcmUnlink()`

```php
createVaultMarketDcmUnlink(): \Crossly\Model\Vault\CreateVaultMarketDcmUnlinkResponse
```

Unlink the partner exchange account from your account (or the firm sub-account `subaccountId`): Crossly stops reading it and its hedges leave portfolio margin.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createVaultMarketDcmUnlink();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketDcmUnlink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\CreateVaultMarketDcmUnlinkResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketDealerApply()`

```php
createVaultMarketDealerApply(): \Crossly\Model\Vault\CreateVaultMarketDealerApplyResponse
```

Apply to be a dealer (ID check first). Ops review; approved dealers get raised limits and their bids show as dealer bids.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createVaultMarketDealerApply();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketDealerApply: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\CreateVaultMarketDealerApplyResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketDealerBid()`

```php
createVaultMarketDealerBid(): \Crossly\Model\Vault\CreateVaultMarketProOrderResponse
```

Place a standing dealer bid: a resting GTC/GTD limit buy, flagged as a dealer bid. Approved dealers only.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createVaultMarketDealerBid();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketDealerBid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\CreateVaultMarketProOrderResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketDealerPool()`

```php
createVaultMarketDealerPool(): \Crossly\Model\Vault\ListVaultMarketDealerPoolsItem
```

Open a curve pool on a key (approved dealers, ID checked): linear (delta in cents) or exponential (delta in bps), spot, fee, levels per side, units it may sell, and a buy budget from your custodian account. Its ladder goes up at once.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createVaultMarketDealerPool();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketDealerPool: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\ListVaultMarketDealerPoolsItem**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketDealerPoolClose()`

```php
createVaultMarketDealerPoolClose($id): \Crossly\Model\Vault\ListVaultMarketDealerPoolsItem
```

Close a curve pool: its legs come off the book; what filled stays filled.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createVaultMarketDealerPoolClose($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketDealerPoolClose: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Vault\ListVaultMarketDealerPoolsItem**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketDealerPoolPreview()`

```php
createVaultMarketDealerPoolPreview(): \Crossly\Model\Vault\CreateVaultMarketDealerPoolPreviewResponse
```

The bids and asks a set of curve settings would show, and why each side stops where it does. Places nothing.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createVaultMarketDealerPoolPreview();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketDealerPoolPreview: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\CreateVaultMarketDealerPoolPreviewResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketDeposit()`

```php
createVaultMarketDeposit(): \Crossly\Model\Vault\CreateVaultMarketDepositResponse
```

Open a ship-in deposit for an ungraded catalogue item (`skuId`, `variantId`, `condition` DS / VNDS / Used). It is inbound until the vault receives and checks it, then stored in your name. Returns `{ vaultItem: { id, status } }`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createVaultMarketDeposit();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketDeposit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\CreateVaultMarketDepositResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketDonation()`

```php
createVaultMarketDonation(): \Crossly\Model\Vault\CreateVaultMarketDonationResponse
```

Give a unit to Crossly Cares (once the charity can receive; otherwise its gate message). Returns `{ id, markCents }`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createVaultMarketDonation();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketDonation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\CreateVaultMarketDonationResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketEntity()`

```php
createVaultMarketEntity(): \Crossly\Model\Vault\CreateVaultMarketEntityResponse
```

Open an entity account: you become its admin and the custodian partner starts KYB (its own flow; Crossly keeps only its reference). Needs a verified ID and the custodian (503 names what is missing).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createVaultMarketEntity();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketEntity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\CreateVaultMarketEntityResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketEntityEcp()`

```php
createVaultMarketEntityEcp($id): \Crossly\Model\Vault\GetVaultMarketEntityByIdResponse
```

Admin: record the entity's attestation that it is an eligible contract participant. Raising its caps is still an ops decision.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createVaultMarketEntityEcp($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketEntityEcp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Vault\GetVaultMarketEntityByIdResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketEntityHalt()`

```php
createVaultMarketEntityHalt($id): \Crossly\Model\Vault\CreateVaultMarketEntityHaltResponse
```

Admin or risk: the firm kill switch. Halts the entity (no `subaccountId`) or one sub-account: open orders on it are cancelled and no new ones are placed until cleared.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createVaultMarketEntityHalt($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketEntityHalt: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Vault\CreateVaultMarketEntityHaltResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketEntityHaltClear()`

```php
createVaultMarketEntityHaltClear($id, $halt_id): \Crossly\Model\Vault\GetVaultMarketEntityByIdResponse
```

Admin or risk: lift a firm halt.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$halt_id = 'halt_id_example'; // string

try {
    $result = $apiInstance->createVaultMarketEntityHaltClear($id, $halt_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketEntityHaltClear: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **halt_id** | **string**|  |

### Return type

**\Crossly\Model\Vault\GetVaultMarketEntityByIdResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketEntityInvitation()`

```php
createVaultMarketEntityInvitation($id): \Crossly\Model\Vault\GetVaultMarketEntityResponse
```

Accept or decline an invitation (`accept`). Trading, admin and risk roles need a verified ID to accept.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createVaultMarketEntityInvitation($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketEntityInvitation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Vault\GetVaultMarketEntityResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketEntityKyb()`

```php
createVaultMarketEntityKyb($id): \Crossly\Model\Vault\CreateVaultMarketEntityKybResponse
```

Refresh the entity's KYB status from the custodian (and its onboarding link while KYB is open).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createVaultMarketEntityKyb($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketEntityKyb: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Vault\CreateVaultMarketEntityKybResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketEntityMember()`

```php
createVaultMarketEntityMember($id): \Crossly\Model\Vault\GetVaultMarketEntityByIdResponse
```

Admin: invite a Crossly user by email as admin, trader, risk, ops or viewer (a viewer can never place an order), with optional limits and sub-accounts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createVaultMarketEntityMember($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketEntityMember: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Vault\GetVaultMarketEntityByIdResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketEntitySubaccount()`

```php
createVaultMarketEntitySubaccount($id): \Crossly\Model\Vault\GetVaultMarketEntityByIdResponse
```

Admin: open a sub-account once the custodian approved the entity; its limits are held to the entity's caps.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createVaultMarketEntitySubaccount($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketEntitySubaccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Vault\GetVaultMarketEntityByIdResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketEntitySubaccountClose()`

```php
createVaultMarketEntitySubaccountClose($id, $sub_id): \Crossly\Model\Vault\GetVaultMarketEntityByIdResponse
```

Admin: close a sub-account that holds nothing and has no open orders.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$sub_id = 'sub_id_example'; // string

try {
    $result = $apiInstance->createVaultMarketEntitySubaccountClose($id, $sub_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketEntitySubaccountClose: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **sub_id** | **string**|  |

### Return type

**\Crossly\Model\Vault\GetVaultMarketEntityByIdResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketFollowCopyWatchAlertRead()`

```php
createVaultMarketFollowCopyWatchAlertRead(): \Crossly\Model\Vault\CreateVaultMarketFollowCopyWatchAlertReadResponse
```

Mark every copy-watch alert read. Returns `{ marked }`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createVaultMarketFollowCopyWatchAlertRead();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketFollowCopyWatchAlertRead: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\CreateVaultMarketFollowCopyWatchAlertReadResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketGift()`

```php
createVaultMarketGift(): \Crossly\Model\Vault\CreateVaultMarketGiftResponse
```

Give a unit in your vault to another Crossly user (by @username or email). It stays on its shelf; they have 7 days to accept. ID needed above $1,000 at the mark. Returns `{ id, expiresAt }`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createVaultMarketGift();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketGift: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\CreateVaultMarketGiftResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketGiftAccept()`

```php
createVaultMarketGiftAccept($id): \Crossly\Model\Common\StatusResponse
```

Accept a gift: the unit becomes yours in place. Returns `{ status }`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createVaultMarketGiftAccept($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketGiftAccept: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Common\StatusResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketGiftCancel()`

```php
createVaultMarketGiftCancel($id): \Crossly\Model\Common\StatusResponse
```

Cancel a gift you sent before it is accepted. Returns `{ status }`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createVaultMarketGiftCancel($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketGiftCancel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Common\StatusResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketGiftDecline()`

```php
createVaultMarketGiftDecline($id): \Crossly\Model\Common\StatusResponse
```

Decline a gift: the unit stays with the giver. Returns `{ status }`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createVaultMarketGiftDecline($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketGiftDecline: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Common\StatusResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketGradeToVault()`

```php
createVaultMarketGradeToVault(): \Crossly\Model\Vault\ListVaultMarketGradeToVaultItem
```

Start Grade to Vault on one item (`source` inventory or vault_unit). With `runId` the grading slot is booked at once (free; your saved card is charged only if the run locks). Nothing is listed until you confirm a price after the grade.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createVaultMarketGradeToVault();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketGradeToVault: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\ListVaultMarketGradeToVaultItem**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketGradeToVaultBook()`

```php
createVaultMarketGradeToVaultBook($id): \Crossly\Model\Vault\ListVaultMarketGradeToVaultItem
```

Book (or re-book) the grading slot of a flow still at \"picked\". Answers 503 naming GRADING_HUB_ADDRESS when runs are not open.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createVaultMarketGradeToVaultBook($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketGradeToVaultBook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Vault\ListVaultMarketGradeToVaultItem**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketGradeToVaultCancel()`

```php
createVaultMarketGradeToVaultCancel($id): \Crossly\Model\Vault\ListVaultMarketGradeToVaultItem
```

Stop the flow before the card goes to the grader (still picked, or its slot only reserved: nothing was charged).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createVaultMarketGradeToVaultCancel($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketGradeToVaultCancel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Vault\ListVaultMarketGradeToVaultItem**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketGradeToVaultKeep()`

```php
createVaultMarketGradeToVaultKeep($id): \Crossly\Model\Vault\ListVaultMarketGradeToVaultItem
```

Keep the graded unit in your vault without listing it. The flow ends; list it any time from the vault.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createVaultMarketGradeToVaultKeep($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketGradeToVaultKeep: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Vault\ListVaultMarketGradeToVaultItem**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketGradeToVaultList()`

```php
createVaultMarketGradeToVaultList($id): \Crossly\Model\Vault\ListVaultMarketGradeToVaultItem
```

Confirm the price for the grade the unit came back with (`confirm: true`, `gradeKey` must match the unit). Pre-trade risk, the price band and the ID line apply, then one shelf ask is placed on the Crossly order book.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createVaultMarketGradeToVaultList($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketGradeToVaultList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Vault\ListVaultMarketGradeToVaultItem**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketGradeToVaultShipped()`

```php
createVaultMarketGradeToVaultShipped($id): \Crossly\Model\Vault\ListVaultMarketGradeToVaultItem
```

You mailed the card to the grading hub (an inventory card, once its run locked).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createVaultMarketGradeToVaultShipped($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketGradeToVaultShipped: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Vault\ListVaultMarketGradeToVaultItem**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketGrading()`

```php
createVaultMarketGrading(): \Crossly\Model\Vault\CreateVaultMarketGradingResponse
```

Send a raw vault unit on the grading hub's shelf to a Grading Run (`runId`). It is held until it comes back, graded, to the same vault item. The slot is free; your saved card is charged only if the run locks.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createVaultMarketGrading();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketGrading: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\CreateVaultMarketGradingResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketGradingPull()`

```php
createVaultMarketGradingPull($submission_id): \Crossly\Model\Common\StatusResponse
```

Pull a vault unit out of its run before the run locks (nothing was charged). It goes back on the shelf.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$submission_id = 'submission_id_example'; // string

try {
    $result = $apiInstance->createVaultMarketGradingPull($submission_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketGradingPull: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **submission_id** | **string**|  |

### Return type

**\Crossly\Model\Common\StatusResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketHallLoan()`

```php
createVaultMarketHallLoan(): \Crossly\Model\Vault\CreateVaultMarketHallLoanResponse
```

Lend a unit in your Crossly vault to the Hall of Grails: { vaultItemId, credit: 'name' | 'anonymous' }. A standing loan of display rights only: the unit goes on a plinth, under a plate naming you (or \"a collector\"), in every weekly exhibition whose category it fits. It never moves and stays yours to list, sell or withdraw. Earns reputation per exhibition shown; no cash. Resumes a loan you opted out of while it still shows.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createVaultMarketHallLoan();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketHallLoan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\CreateVaultMarketHallLoanResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketHallLoanCredit()`

```php
createVaultMarketHallLoanCredit($id): \Crossly\Model\Vault\CreateVaultMarketHallLoanCreditResponse
```

Change how the plate on a lent unit's plinth names you, from now: { credit: 'name' } (your display name) or { credit: 'anonymous' } (\"a collector\").

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createVaultMarketHallLoanCredit($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketHallLoanCredit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Vault\CreateVaultMarketHallLoanCreditResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketHallLoanOptOut()`

```php
createVaultMarketHallLoanOptOut($id): \Crossly\Model\Vault\CreateVaultMarketHallLoanOptOutResponse
```

Opt a Hall of Grails loan out, at any time. A unit on a plinth this week finishes this exhibition (status ending, showingUntil); otherwise the loan ends now (status ended).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createVaultMarketHallLoanOptOut($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketHallLoanOptOut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Vault\CreateVaultMarketHallLoanOptOutResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketIdentityStart()`

```php
createVaultMarketIdentityStart(): \Crossly\Model\Vault\CreateVaultMarketIdentityStartResponse
```

Start (or resume) the one-time ID check the money features and larger orders need. Returns `{ url }` to open, or `{ alreadyVerified: true }`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createVaultMarketIdentityStart();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketIdentityStart: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\CreateVaultMarketIdentityStartResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketIndex()`

```php
createVaultMarketIndex(): \Crossly\Model\Vault\GetVaultMarketIndexResponse
```

Make an index of your own: 1 to 50 book keys, weighted by mark or equally. Up to 10 per account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createVaultMarketIndex();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketIndex: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\GetVaultMarketIndexResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketIndexBuy()`

```php
createVaultMarketIndexBuy($slug): \Crossly\Model\Vault\CreateVaultMarketIndexBuyResponse
```

Buy the basket: one limit buy per key in the index for 1-5 whole units each, at most `maxBpsOverMark` over each key's mark, IOC or GTC. Every unit is a real item that lands in your vault. Idempotent on `clientBasketId`; returns a result per key.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string

try {
    $result = $apiInstance->createVaultMarketIndexBuy($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketIndexBuy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **slug** | **string**|  |

### Return type

**\Crossly\Model\Vault\CreateVaultMarketIndexBuyResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketIndexComplaint()`

```php
createVaultMarketIndexComplaint(): \Crossly\Model\Vault\CreateVaultMarketIndexComplaintResponse
```

File a complaint about an index or the method (`slug` optional). Every complaint is answered. Returns `{ id, status, createdAt }`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createVaultMarketIndexComplaint();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketIndexComplaint: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\CreateVaultMarketIndexComplaintResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketIndexConsultationComment()`

```php
createVaultMarketIndexConsultationComment($id): \Crossly\Model\Common\OkResponse
```

Comment on an open consultation (5 to 5,000 characters; up to 5 per person). Comments are published without your name. Returns `{ ok }`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createVaultMarketIndexConsultationComment($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketIndexConsultationComment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Common\OkResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketInstantExit()`

```php
createVaultMarketInstantExit(): \Crossly\Model\Vault\CreateVaultMarketInstantExitResponse
```

Sell a unit now at the quoted price: a sell IOC at `priceCents` through the pro engine. Refused, with the new quote, if the best bid dropped below it. Crossly never buys or funds it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createVaultMarketInstantExit();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketInstantExit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\CreateVaultMarketInstantExitResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketJoint()`

```php
createVaultMarketJoint(): \Crossly\Model\Vault\CreateVaultMarketJointResponse
```

Open a joint vault (ID first): you hold full rights and accept the current joint terms. `invite` sends invitations (@username or email, each with view, trade or full rights). Returns `{ id, status, invited }`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createVaultMarketJoint();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketJoint: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\CreateVaultMarketJointResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketJointClose()`

```php
createVaultMarketJointClose($id): \Crossly\Model\Vault\CreateVaultMarketJointCloseResponse
```

Close the joint vault (full rights): open joint orders are cancelled and every unit goes back to its owner. Returns `{ status, unitsReturned }`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createVaultMarketJointClose($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketJointClose: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Vault\CreateVaultMarketJointCloseResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketJointInvite()`

```php
createVaultMarketJointInvite($id): \Crossly\Model\Vault\CreateVaultMarketJointInviteResponse
```

Invite a Crossly user (full rights only). They have 14 days and show ID to join. Returns `{ userId, rights, expiresAt }`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createVaultMarketJointInvite($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketJointInvite: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Vault\CreateVaultMarketJointInviteResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketJointMemberRemove()`

```php
createVaultMarketJointMemberRemove($id, $user_id): \Crossly\Model\Vault\CreateVaultMarketJointMemberRemoveResponse
```

Remove a member (full rights), or leave when userId is you. Their units go back to their own account and their joint orders are cancelled. Returns `{ userId, status, unitsReturned, jointStatus }`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$user_id = 'user_id_example'; // string

try {
    $result = $apiInstance->createVaultMarketJointMemberRemove($id, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketJointMemberRemove: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **user_id** | **string**|  |

### Return type

**\Crossly\Model\Vault\CreateVaultMarketJointMemberRemoveResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketJointMemberRight()`

```php
createVaultMarketJointMemberRight($id, $user_id): \Crossly\Model\Vault\CreateVaultMarketJointMemberRightResponse
```

Set a member rights to view, trade or full (full rights only; the vault always keeps a full member). Returns `{ userId, rights }`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$user_id = 'user_id_example'; // string

try {
    $result = $apiInstance->createVaultMarketJointMemberRight($id, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketJointMemberRight: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **user_id** | **string**|  |

### Return type

**\Crossly\Model\Vault\CreateVaultMarketJointMemberRightResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketJointRespond()`

```php
createVaultMarketJointRespond($id): \Crossly\Model\Vault\CreateVaultMarketJointRespondResponse
```

Accept (ID first; accepts the current joint terms) or decline an invitation. Returns `{ status }`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createVaultMarketJointRespond($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketJointRespond: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Vault\CreateVaultMarketJointRespondResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketJointTerm()`

```php
createVaultMarketJointTerm($id): \Crossly\Model\Common\TermsVersionResponse
```

Accept the current joint terms (needed to trade after the terms version changes). Returns `{ termsVersion }`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createVaultMarketJointTerm($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketJointTerm: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Common\TermsVersionResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketJointTrade()`

```php
createVaultMarketJointTrade($id): \Crossly\Model\Vault\CreateVaultMarketJointTradeResponse
```

Place a limit order for the joint vault (trade or full rights, ID shown). A buy (bookKey) is placed on you, paid from your own Vault Markets account, and what it buys is booked to the joint vault. A sell (vaultItemId of a unit in it) is placed on the unit owner of record, who gets the proceeds; pre-trade checks run against you too. Returns `{ tradeId, side, bookKey, ownerUserId, order }`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createVaultMarketJointTrade($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketJointTrade: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Vault\CreateVaultMarketJointTradeResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketJointTradeCancel()`

```php
createVaultMarketJointTradeCancel($id, $trade_id): \Crossly\Model\Vault\CreateVaultMarketJointTradeCancelResponse
```

Cancel a working joint order (trade or full rights); what filled stays filled. Returns `{ tradeId, order }`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$trade_id = 'trade_id_example'; // string

try {
    $result = $apiInstance->createVaultMarketJointTradeCancel($id, $trade_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketJointTradeCancel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **trade_id** | **string**|  |

### Return type

**\Crossly\Model\Vault\CreateVaultMarketJointTradeCancelResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketJointUnit()`

```php
createVaultMarketJointUnit($id): \Crossly\Model\Vault\CreateVaultMarketJointUnitResponse
```

Put units you own into the joint vault (each stored and free). They keep you as owner of record and stay on the shelf. Returns `{ added, vaultItemIds }`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createVaultMarketJointUnit($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketJointUnit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Vault\CreateVaultMarketJointUnitResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketJointUnitRemove()`

```php
createVaultMarketJointUnitRemove($id): \Crossly\Model\Vault\CreateVaultMarketJointUnitRemoveResponse
```

Take units out of the joint vault, back to their owner own account (yours at any rights; anyone else with full rights). Returns `{ removed, vaultItemIds }`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createVaultMarketJointUnitRemove($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketJointUnitRemove: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Vault\CreateVaultMarketJointUnitRemoveResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketLargeTraderReportFile()`

```php
createVaultMarketLargeTraderReportFile($id): \Crossly\Model\Vault\ListVaultMarketLargeTraderReportsItem
```

File (or amend, or refile) a large-trader report: why you hold it (purpose), who you act for, other accounts you control, whether you plan to add, and a statement of 20+ characters. Returns the report.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createVaultMarketLargeTraderReportFile($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketLargeTraderReportFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Vault\ListVaultMarketLargeTraderReportsItem**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketLearnQuiz()`

```php
createVaultMarketLearnQuiz($concept): \Crossly\Model\Vault\CreateVaultMarketLearnQuizResponse
```

Answer a concept's quiz (`answers`: the chosen choice index per question). Graded on the server; 5 tries an hour.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$concept = 'concept_example'; // string

try {
    $result = $apiInstance->createVaultMarketLearnQuiz($concept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketLearnQuiz: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **concept** | **string**|  |

### Return type

**\Crossly\Model\Vault\CreateVaultMarketLearnQuizResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketLiveStreamFeaturedLot()`

```php
createVaultMarketLiveStreamFeaturedLot($id): \Crossly\Model\Common\OkResponse
```

Feature an open lot on your live show (or `lotId: null` to take it off). Viewers hear LIVE_PIN_CHANGED. Returns `{ ok }`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createVaultMarketLiveStreamFeaturedLot($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketLiveStreamFeaturedLot: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Common\OkResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketLoan()`

```php
createVaultMarketLoan(): \Crossly\Model\Vault\GetVaultMarketCreditResponse
```

Borrow against stored vault units: they are pledged (no listing, lending or withdrawal) and the market pool lends `amountCents` into your custodian account. Needs a verified ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createVaultMarketLoan();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketLoan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\GetVaultMarketCreditResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketLoanRecall()`

```php
createVaultMarketLoanRecall($id): \Crossly\Model\Vault\CreateVaultMarketLoanRecallResponse
```

Recall a lent unit: the short has 3 days to return one. Returns `{ recallDueAt }`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createVaultMarketLoanRecall($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketLoanRecall: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Vault\CreateVaultMarketLoanRecallResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketLoanUnit()`

```php
createVaultMarketLoanUnit($id): \Crossly\Model\Vault\GetVaultMarketCreditResponse
```

Pledge more stored units to a loan (answers a loan call, or makes room).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createVaultMarketLoanUnit($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketLoanUnit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Vault\GetVaultMarketCreditResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketLoanUnitRelease()`

```php
createVaultMarketLoanUnitRelease($id, $vault_item_id): \Crossly\Model\Vault\GetVaultMarketCreditResponse
```

Free one pledged unit, if what is owed still fits inside the other units' limit.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$vault_item_id = 'vault_item_id_example'; // string

try {
    $result = $apiInstance->createVaultMarketLoanUnitRelease($id, $vault_item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketLoanUnitRelease: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **vault_item_id** | **string**|  |

### Return type

**\Crossly\Model\Vault\GetVaultMarketCreditResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketLoanUnitSell()`

```php
createVaultMarketLoanUnitSell($id, $vault_item_id): \Crossly\Model\Vault\CreateVaultMarketLoanUnitSellResponse
```

Sell a pledged unit to repay its loan: it is listed at `priceCents` (at least the sale floor) and stays pledged until it sells; the proceeds repay the loan first and the rest is yours. Calling it again re-prices it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$vault_item_id = 'vault_item_id_example'; // string

try {
    $result = $apiInstance->createVaultMarketLoanUnitSell($id, $vault_item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketLoanUnitSell: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **vault_item_id** | **string**|  |

### Return type

**\Crossly\Model\Vault\CreateVaultMarketLoanUnitSellResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketLocate()`

```php
createVaultMarketLocate(): \Crossly\Model\Vault\ListVaultMarketLocateMineItem
```

Hold up to `qty` lendable units of `bookKey` for 15 minutes so a short can open against them (`termDays` 30/90 for a term loan). Needs lending (VAULT_LENDING_TERMS_VERSION) and the ID check. Returns the locate with how many units it holds.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createVaultMarketLocate();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketLocate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\ListVaultMarketLocateMineItem**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketLong()`

```php
createVaultMarketLong(): \Crossly\Model\Vault\CreateVaultMarketLongResponse
```

Buy `units` units (default 1; at most 25/10/3/1 by liquidity tier A/B/C/D) into your vault with leverage (up to 2x) from the market staking pool, paying up to `maxCents` each. A partial fill opens with the units bought and the rest is cancelled. Returns `{ positionId, matched, units }`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createVaultMarketLong();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketLong: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\CreateVaultMarketLongResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketMidpoint()`

```php
createVaultMarketMidpoint(): \Crossly\Model\Vault\ListVaultMarketMidpointItem
```

A hidden block order that trades only at the firm-book midpoint, with another midpoint order of at least your minimum size.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createVaultMarketMidpoint();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketMidpoint: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\ListVaultMarketMidpointItem**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketMidpointCancel()`

```php
createVaultMarketMidpointCancel($id): \Crossly\Model\Vault\ListVaultMarketMidpointItem
```

Cancel a midpoint order.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createVaultMarketMidpointCancel($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketMidpointCancel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Vault\ListVaultMarketMidpointItem**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketMmDmm()`

```php
createVaultMarketMmDmm(): \Crossly\Model\Vault\CreateVaultMarketMmLpResponse
```

Apply to be the designated market maker on a tier B or C key. Ops approves; one per key.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createVaultMarketMmDmm();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketMmDmm: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\CreateVaultMarketMmLpResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketMmLeave()`

```php
createVaultMarketMmLeave($id): \Crossly\Model\Vault\CreateVaultMarketMmLpResponse
```

Leave a market-maker programme.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createVaultMarketMmLeave($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketMmLeave: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Vault\CreateVaultMarketMmLpResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketMmLp()`

```php
createVaultMarketMmLp(): \Crossly\Model\Vault\CreateVaultMarketMmLpResponse
```

Join a key as a Registered Liquidity Provider (ID needed). Meeting coverage earns the LP rates.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createVaultMarketMmLp();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketMmLp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\CreateVaultMarketMmLpResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketMmMassCancel()`

```php
createVaultMarketMmMassCancel(): \Crossly\Model\Vault\CreateVaultMarketMmMassCancelResponse
```

Cancel every open order (one key, or only quotes) and every resting leg in one statement: nothing fills between the first cancel and the last.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createVaultMarketMmMassCancel();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketMmMassCancel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\CreateVaultMarketMmMassCancelResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketMmMmpReset()`

```php
createVaultMarketMmMmpReset(): \Crossly\Model\Vault\GetVaultMarketMmMmpResponse
```

End a market-maker protection freeze early.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createVaultMarketMmMmpReset();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketMmMmpReset: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\GetVaultMarketMmMmpResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketOpeningWaitlist()`

```php
createVaultMarketOpeningWaitlist($slug): \Crossly\Model\Vault\CreateVaultMarketOpeningWaitlistResponse
```

Join a key's waitlist, optionally with a friend's invite code (`ref`). Inviting moves you up the queue; nobody is paid. Returns your place and your own code.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string

try {
    $result = $apiInstance->createVaultMarketOpeningWaitlist($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketOpeningWaitlist: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **slug** | **string**|  |

### Return type

**\Crossly\Model\Vault\CreateVaultMarketOpeningWaitlistResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketP2pLoanCall()`

```php
createVaultMarketP2pLoanCall($id): \Crossly\Model\Vault\GetVaultMarketP2pLoanResponse
```

Lender: call the loan (once it is a day old). A refinancing auction runs for about 30 hours, the rate a new lender gets climbing to the ceiling; repaid or refinanced, you are paid in full; neither by the end, the unit moves to your vault.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createVaultMarketP2pLoanCall($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketP2pLoanCall: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Vault\GetVaultMarketP2pLoanResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketP2pLoanCancelCall()`

```php
createVaultMarketP2pLoanCancelCall($id): \Crossly\Model\Vault\GetVaultMarketP2pLoanResponse
```

Lender: take back your call before any other lender has taken the loan over. The refinancing auction stops and the loan carries on as before on its terms.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createVaultMarketP2pLoanCancelCall($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketP2pLoanCancelCall: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Vault\GetVaultMarketP2pLoanResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketP2pLoanRefiAuction()`

```php
createVaultMarketP2pLoanRefiAuction($id): \Crossly\Model\Vault\GetVaultMarketP2pLoanResponse
```

Borrower: look for a cheaper lender. A refinancing auction runs for `hours` (1-72, default 24); the rate a new lender gets climbs from `startAprBps` (default half the loan rate) to just under the loan rate now. The first lender to take it pays your lender off and the loan carries on at that lower rate. Nobody by the end: nothing changes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createVaultMarketP2pLoanRefiAuction($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketP2pLoanRefiAuction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Vault\GetVaultMarketP2pLoanResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketP2pLoanRefiAuctionCancel()`

```php
createVaultMarketP2pLoanRefiAuctionCancel($id): \Crossly\Model\Vault\GetVaultMarketP2pLoanResponse
```

Borrower: stop looking for a cheaper lender before anyone has taken the loan over. The loan carries on unchanged.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createVaultMarketP2pLoanRefiAuctionCancel($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketP2pLoanRefiAuctionCancel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Vault\GetVaultMarketP2pLoanResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketP2pLoanRefinance()`

```php
createVaultMarketP2pLoanRefinance($id): \Crossly\Model\Vault\GetVaultMarketP2pLoanResponse
```

Take over a loan in a refinancing auction (a lender call or a borrower search for a cheaper lender): you pay the old lender everything owed now (refused above `maxPayoffCents`), which becomes your loan to the same borrower at the auction rate now. Needs a verified ID, an active account and the current lending terms. Pass `requestId` to make a retry safe.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createVaultMarketP2pLoanRefinance($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketP2pLoanRefinance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Vault\GetVaultMarketP2pLoanResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketP2pLoanRepay()`

```php
createVaultMarketP2pLoanRepay($id): \Crossly\Model\Vault\GetVaultMarketP2pLoanResponse
```

Borrower: repay from your custodian account to the lender. Without `amountCents`, in full (principal plus interest to the second; the unit is free once the custodian has it). With `amountCents` below what is owed, a part payment: interest first, then principal, at least the interest owed now and at least $1; the loan stays open on the principal left. Pass `requestId` to make a retry safe.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createVaultMarketP2pLoanRepay($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketP2pLoanRepay: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Vault\GetVaultMarketP2pLoanResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketP2pOffer()`

```php
createVaultMarketP2pOffer(): \Crossly\Model\Vault\ListVaultMarketP2pOffersItem
```

Offer to lend: `principalCents` per loan at `aprBps` a year against an item (`bookKey`) or one unit (`vaultItemId`), for up to `maxLoans` loans, lasting `expiresInDays` (default 90). Nothing is held: the custodian pays from your own account when a borrower takes it. Needs a verified ID, an active account and the current lending terms.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createVaultMarketP2pOffer();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketP2pOffer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\ListVaultMarketP2pOffersItem**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketP2pOfferCancel()`

```php
createVaultMarketP2pOfferCancel($id): \Crossly\Model\Vault\ListVaultMarketP2pOffersItem
```

Withdraw one of your open offers. Loans already taken from it carry on.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createVaultMarketP2pOfferCancel($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketP2pOfferCancel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Vault\ListVaultMarketP2pOffersItem**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketP2pOfferTake()`

```php
createVaultMarketP2pOfferTake($id): \Crossly\Model\Vault\GetVaultMarketP2pLoanResponse
```

Borrow: take an offer against one of your stored vault units (`vaultItemId`). The unit is pledged (no listing, lending or withdrawal) and the principal is paid into your custodian account. Interest accrues by the second; repay any time. Pass `requestId` to make a retry safe.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createVaultMarketP2pOfferTake($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketP2pOfferTake: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Vault\GetVaultMarketP2pLoanResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketPaperMissionMarkCheck()`

```php
createVaultMarketPaperMissionMarkCheck(): \Crossly\Model\Vault\CreateVaultMarketPaperMissionMarkCheckResponse
```

Answer the \"Read the mark\" mission: the quality letter (A, B or C) you read on a market page, checked against the stored mark. One answer per market, 10 a day. Returns `{ bookKey, answer, correct, quality, mission, next }`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createVaultMarketPaperMissionMarkCheck();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketPaperMissionMarkCheck: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\CreateVaultMarketPaperMissionMarkCheckResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketPaperOrder()`

```php
createVaultMarketPaperOrder(): \Crossly\Model\Vault\CreateVaultMarketPaperOrderResponse
```

Place a paper order (play money only). It takes visible real liquidity now at book prices with the taker fee simulated; a GTC limit rests the rest with a queue-position estimate, filled later as the real tape reaches it. Sells only paper units you hold (no paper shorts). Never touches the real book. Returns `{ order, fills }`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createVaultMarketPaperOrder();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketPaperOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\CreateVaultMarketPaperOrderResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketPaperOrderCancel()`

```php
createVaultMarketPaperOrderCancel($id): \Crossly\Model\Vault\CreateVaultMarketPaperOrderCancelResponse
```

Cancel a working paper order: the play cash or paper units it held come back. Returns `{ order }`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createVaultMarketPaperOrderCancel($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketPaperOrderCancel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Vault\CreateVaultMarketPaperOrderCancelResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketPaperReset()`

```php
createVaultMarketPaperReset(): \Crossly\Model\Vault\CreateVaultMarketPaperResetResponse
```

Reset your paper account to $10,000 of play money: working paper orders are cancelled, paper positions cleared, and your leaderboard week starts again. Once a day.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createVaultMarketPaperReset();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketPaperReset: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\CreateVaultMarketPaperResetResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketPartnerApply()`

```php
createVaultMarketPartnerApply(): \Crossly\Model\Vault\CreateVaultMarketPartnerApplyResponse
```

Apply as a Vault Drop-off Partner (a card shop that takes walk-ins for the vault). Needs the one-time ID check; ops approve.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createVaultMarketPartnerApply();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketPartnerApply: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\CreateVaultMarketPartnerApplyResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketPartnerBatch()`

```php
createVaultMarketPartnerBatch(): \Crossly\Model\Vault\CreateVaultMarketPartnerBatchResponse
```

An approved partner sends walk-ins in under its code: each item (catalogue variant, condition, grade, photos) becomes an inbound vault unit; the box gets one prepaid label. The partner earns a capped share of Crossly's fee on each unit's first sale.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createVaultMarketPartnerBatch();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketPartnerBatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\CreateVaultMarketPartnerBatchResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketPoolStake()`

```php
createVaultMarketPoolStake(): \Crossly\Model\Vault\CreateVaultMarketPoolStakeResponse
```

Stake CBX you hold at the custodian into the market pool (base units, as a string). Returns `{ stakeId, shares }`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createVaultMarketPoolStake();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketPoolStake: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\CreateVaultMarketPoolStakeResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketPoolStakeUnstake()`

```php
createVaultMarketPoolStakeUnstake($id): \Crossly\Model\Vault\CreateVaultMarketPoolStakeUnstakeResponse
```

Unstake: paid out after the 7-day cooldown. Returns `{ cooldownUntil }`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createVaultMarketPoolStakeUnstake($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketPoolStakeUnstake: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Vault\CreateVaultMarketPoolStakeUnstakeResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketPortfolioMarginEnroll()`

```php
createVaultMarketPortfolioMarginEnroll(): \Crossly\Model\Vault\CreateVaultMarketPortfolioMarginEnrollResponse
```

Admin: put a firm sub-account under portfolio margin. Needs VAULT_LEVERAGE_VENUE, your ID, an ECP-attested entity that passed KYB, and the minimum equity. Its positions are then margined on the whole account, recalculated every 5 minutes; calls and auctions are unchanged. Audited.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createVaultMarketPortfolioMarginEnroll();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketPortfolioMarginEnroll: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\CreateVaultMarketPortfolioMarginEnrollResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketPortfolioMarginLeave()`

```php
createVaultMarketPortfolioMarginLeave(): \Crossly\Model\Vault\CreateVaultMarketPortfolioMarginLeaveResponse
```

Admin: take a firm sub-account off portfolio margin. Each position is then held to its own tier floors again and may be called at once. Audited.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createVaultMarketPortfolioMarginLeave();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketPortfolioMarginLeave: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\CreateVaultMarketPortfolioMarginLeaveResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketPortfolioMarginWhatIf()`

```php
createVaultMarketPortfolioMarginWhatIf(): \Crossly\Model\Vault\CreateVaultMarketPortfolioMarginWhatIfResponse
```

The portfolio margin requirement of a firm sub-account before and after a trade (`bookKey`, `side` buy or sell, `units`), at the Crossly mark with fees left out. Changes nothing.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createVaultMarketPortfolioMarginWhatIf();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketPortfolioMarginWhatIf: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\CreateVaultMarketPortfolioMarginWhatIfResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketPositionCancel()`

```php
createVaultMarketPositionCancel($id): \Crossly\Model\Common\OkResponse
```

Cancel the working order: an unfilled opening order cancels the position; an unfilled cover or close leaves it open. Returns `{ ok }`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createVaultMarketPositionCancel($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketPositionCancel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Common\OkResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketPositionClose()`

```php
createVaultMarketPositionClose($id): \Crossly\Model\Vault\CreateVaultMarketPositionCloseResponse
```

Close a leveraged long: all its units, or `units` of them, each sold for at least `minCents`; each sale repays the pool first.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createVaultMarketPositionClose($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketPositionClose: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Vault\CreateVaultMarketPositionCloseResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketPositionCollateral()`

```php
createVaultMarketPositionCollateral($id): \Crossly\Model\Vault\CreateVaultMarketPositionCollateralResponse
```

Answer a margin call: a short posts more collateral (USD, or CBX at half value); a leveraged long pays down its pool loan. Returns the position.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createVaultMarketPositionCollateral($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketPositionCollateral: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Vault\CreateVaultMarketPositionCollateralResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketPositionCover()`

```php
createVaultMarketPositionCover($id): \Crossly\Model\Vault\CreateVaultMarketPositionCloseResponse
```

Cover a short: all its units, or `units` of them, each buying any unit of the key into the vault for up to `maxCents`; each goes back to its lender.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createVaultMarketPositionCover($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketPositionCover: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Vault\CreateVaultMarketPositionCloseResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketPriceWidget()`

```php
createVaultMarketPriceWidget(): \Crossly\Model\Vault\ListVaultMarketPriceWidgetsItem
```

Make a price widget for one vault market (`kind` mark + `bookKey`) or one public index (`kind` index + `indexSlug`): range, layout (compact or chart), theme (auto, light, dark), optionally your own affiliate code for the link back and the sites allowed to show it (empty = any). Returns the widget with its snippets.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createVaultMarketPriceWidget();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketPriceWidget: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\ListVaultMarketPriceWidgetsItem**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketPriceWidgetPreview()`

```php
createVaultMarketPriceWidgetPreview(): \Crossly\Model\Vault\CreateVaultMarketPriceWidgetPreviewResponse
```

What a widget would show before you save it: `view` (value, move, quality, n, as-of, link back) and `html`, the exact page the iframe serves. Nothing is stored.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createVaultMarketPriceWidgetPreview();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketPriceWidgetPreview: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\CreateVaultMarketPriceWidgetPreviewResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketProBracket()`

```php
createVaultMarketProBracket(): \Crossly\Model\Vault\CreateVaultMarketProBracketResponse
```

A buy order with a take-profit and/or stop-loss attached; the exits arm as an OCO pair for what the entry fills.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createVaultMarketProBracket();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketProBracket: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\CreateVaultMarketProBracketResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketProLinkCancel()`

```php
createVaultMarketProLinkCancel($id): \Crossly\Model\Vault\ListVaultMarketProLinksItem
```

Cancel a linked order: its open child orders come off; a bracket's entry stays.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createVaultMarketProLinkCancel($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketProLinkCancel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Vault\ListVaultMarketProLinksItem**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketProOco()`

```php
createVaultMarketProOco(): \Crossly\Model\Vault\CreateVaultMarketProOcoResponse
```

Two orders on one key, one cancels the other: when one fills or its stop triggers, the other is cancelled (a partial fill shrinks it).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createVaultMarketProOco();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketProOco: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\CreateVaultMarketProOcoResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketProOrder()`

```php
createVaultMarketProOrder(): \Crossly\Model\Vault\CreateVaultMarketProOrderResponse
```

Place an order on a vault book: limit, market (protected, IOC), stop or stop-limit; GTC, GTD, IOC or FOK; post-only; an iceberg `displayQuantity`; a TWAP or VWAP algo over a window. Idempotent on `clientOrderId`. `subaccountId` trades for a firm sub-account you may trade (your role, its KYB, its limits, no firm halt; buys pay from its custodian account and land in it).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createVaultMarketProOrder();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketProOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\CreateVaultMarketProOrderResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketProOrderCancel()`

```php
createVaultMarketProOrderCancel($id): \Crossly\Model\Vault\CreateVaultMarketProOrderResponse
```

Cancel an order; what filled stays filled.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createVaultMarketProOrderCancel($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketProOrderCancel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Vault\CreateVaultMarketProOrderResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketProOrderCancelAll()`

```php
createVaultMarketProOrderCancelAll(): \Crossly\Model\Vault\CreateVaultMarketProOrderCancelAllResponse
```

Cancel every open order, or every one on a book key. Returns `{ cancelled }`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createVaultMarketProOrderCancelAll();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketProOrderCancelAll: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\CreateVaultMarketProOrderCancelAllResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketProOrderReplace()`

```php
createVaultMarketProOrderReplace($id): \Crossly\Model\Vault\CreateVaultMarketProOrderResponse
```

Amend an order's price, stop or quantity (cancel-replace: it re-queues at its new price).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createVaultMarketProOrderReplace($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketProOrderReplace: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Vault\CreateVaultMarketProOrderResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketProQuote()`

```php
createVaultMarketProQuote(): \Crossly\Model\Vault\CreateVaultMarketProQuoteResponse
```

Market makers: set a two-sided post-only quote on a book key (replaces the last). With cancel-on-disconnect (default) heartbeat every 30 s or it is pulled.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createVaultMarketProQuote();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketProQuote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\CreateVaultMarketProQuoteResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketProQuoteHeartbeat()`

```php
createVaultMarketProQuoteHeartbeat(): \Crossly\Model\Vault\CreateVaultMarketProQuoteHeartbeatResponse
```

Keep your quotes alive (cancel-on-disconnect). Returns `{ quotes, at }`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createVaultMarketProQuoteHeartbeat();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketProQuoteHeartbeat: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\CreateVaultMarketProQuoteHeartbeatResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketProTrailingStop()`

```php
createVaultMarketProTrailingStop(): \Crossly\Model\Vault\CreateVaultMarketProTrailingStopResponse
```

A trailing stop: its stop follows the best price since it was placed, `trailBps` or `trailCents` behind (under the high for a sell, over the low for a buy).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createVaultMarketProTrailingStop();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketProTrailingStop: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\CreateVaultMarketProTrailingStopResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketProfileFollow()`

```php
createVaultMarketProfileFollow($handle): \Crossly\Model\Vault\CreateVaultMarketProfileFollowResponse
```

Follow someone with a public vault: their new vault buys appear in your feed. No copy trading.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$handle = 'handle_example'; // string

try {
    $result = $apiInstance->createVaultMarketProfileFollow($handle);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketProfileFollow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**|  |

### Return type

**\Crossly\Model\Vault\CreateVaultMarketProfileFollowResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketRecurring()`

```php
createVaultMarketRecurring(): \Crossly\Model\Vault\ListVaultMarketRecurringItem
```

Start a recurring buy: one whole unit of a key every week, two weeks or month, at no more than `maxPriceCents` and/or the mark plus `capBpsOverMark`; card (with an optional backup) or custodian; optional auto-lend.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createVaultMarketRecurring();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketRecurring: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\ListVaultMarketRecurringItem**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketRfq()`

```php
createVaultMarketRfq(): \Crossly\Model\Vault\CreateVaultMarketRfqResponse
```

Ask for a quote on a block: dealers, the key's DMM and LPs, and holders are told, anonymously. Answers are firm for 60 s. Your limit is never shown.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createVaultMarketRfq();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketRfq: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\CreateVaultMarketRfqResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketRfqAccept()`

```php
createVaultMarketRfqAccept($id): \Crossly\Model\Vault\CreateVaultMarketRfqAcceptResponse
```

Take one answer: it fills as a block through the normal fill path (fees by role, self-trade prevention, halts, LULD).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createVaultMarketRfqAccept($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketRfqAccept: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Vault\CreateVaultMarketRfqAcceptResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketRfqCancel()`

```php
createVaultMarketRfqCancel($id): \Crossly\Model\Vault\ListVaultMarketRfqItem
```

Cancel your open quote request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createVaultMarketRfqCancel($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketRfqCancel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Vault\ListVaultMarketRfqItem**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketRfqRespond()`

```php
createVaultMarketRfqRespond($id): \Crossly\Model\Vault\CreateVaultMarketRfqRespondResponse
```

Answer a quote request for the full quantity with a firm price, good for 60 s. Selling needs the units free in your vault; buying pays from your Vault Markets custodian account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createVaultMarketRfqRespond($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketRfqRespond: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Vault\CreateVaultMarketRfqRespondResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketRfqResponseWithdraw()`

```php
createVaultMarketRfqResponseWithdraw($id): \Crossly\Model\Vault\CreateVaultMarketRfqRespondResponse
```

Withdraw your live answer to a quote request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createVaultMarketRfqResponseWithdraw($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketRfqResponseWithdraw: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Vault\CreateVaultMarketRfqRespondResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketSetGoal()`

```php
createVaultMarketSetGoal(): \Crossly\Model\Vault\GetVaultMarketSetGoalResponse
```

Start a goal on a catalogue set (category, brandSlug, modelSlug from the set search), optionally with a target: one condition, and any grade, ungraded, or one exact grade. One live goal per set.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createVaultMarketSetGoal();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketSetGoal: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\GetVaultMarketSetGoalResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketSetGoalBasket()`

```php
createVaultMarketSetGoalBasket($id): \Crossly\Model\Vault\ListVaultMarketSetGoalBasketsItem
```

Place the \"complete my set\" basket bid: one GTC limit buy per missing piece, under a hard budget, paid by one of your saved cards or your custodian account. Every leg passes pre-trade risk and the ID line like any order. Idempotent on clientBasketId. One working basket per goal; its legs are cancelled once the set is complete.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createVaultMarketSetGoalBasket($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketSetGoalBasket: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Vault\ListVaultMarketSetGoalBasketsItem**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketSetGoalBasketCancel()`

```php
createVaultMarketSetGoalBasketCancel($id): \Crossly\Model\Vault\ListVaultMarketSetGoalBasketsItem
```

Cancel the goal working basket bid: every working leg comes off the book; what already filled stays in your vault.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createVaultMarketSetGoalBasketCancel($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketSetGoalBasketCancel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Vault\ListVaultMarketSetGoalBasketsItem**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketShareCard()`

```php
createVaultMarketShareCard(): \Crossly\Model\Vault\ListVaultMarketShareCardsItem
```

Make a verified share card of a position, a vault unit, a public index or your portfolio (`kind`, `refId`). The % on it is the price move since your real fill; amounts stay hidden unless `showAmounts`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createVaultMarketShareCard();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketShareCard: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\ListVaultMarketShareCardsItem**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketShort()`

```php
createVaultMarketShort(): \Crossly\Model\Vault\CreateVaultMarketLongResponse
```

Short a book key: borrow `units` lent units (default 1; at most 25/10/3/1 by liquidity tier A/B/C/D) and sell each at `limitCents` or better, posting collateral for all of them (50% of the mark each; CBX counts at half, up to 30%). All units are borrowed or none unless `allowPartial`. A partial sale opens with the units sold. Returns `{ positionId, matched, units }`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createVaultMarketShort();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketShort: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\CreateVaultMarketLongResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketSupplyBatchLabel()`

```php
createVaultMarketSupplyBatchLabel($id): \Crossly\Model\Vault\GetVaultMarketSupplyBatchResponse
```

Buy a box's prepaid label again after it failed (for example once a ship-from address is saved). A box that has a label keeps it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createVaultMarketSupplyBatchLabel($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketSupplyBatchLabel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Vault\GetVaultMarketSupplyBatchResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketSupplyInvite()`

```php
createVaultMarketSupplyInvite($id): \Crossly\Model\Common\IdStatusResponse
```

Accept or decline a Market Open invite (`accept`).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createVaultMarketSupplyInvite($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketSupplyInvite: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Common\IdStatusResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketSupplySend()`

```php
createVaultMarketSupplySend(): \Crossly\Model\Vault\CreateVaultMarketSupplySendResponse
```

Send inventory items matched to a catalogue variant to the vault as one box: each becomes an inbound vault unit, and the box gets one prepaid inbound label (a PDF to print). Optional: auto-list each unit in the vault book at a share of the mark once stored, and lend when idle. Items that cannot go say why. Crosslisted listings stay live.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createVaultMarketSupplySend();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketSupplySend: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\CreateVaultMarketSupplySendResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketTerm()`

```php
createVaultMarketTerm(): \Crossly\Model\Common\TermsVersionResponse
```

Accept the current lending terms (needed to lend or short). Returns `{ termsVersion }`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createVaultMarketTerm();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketTerm: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Common\TermsVersionResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketTodClaimObject()`

```php
createVaultMarketTodClaimObject($id): \Crossly\Model\Vault\CreateVaultMarketTodClaimObjectResponse
```

Stop a transfer-on-death claim made on your own account. Returns `{ id, status, estateUnlocked }`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createVaultMarketTodClaimObject($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketTodClaimObject: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Vault\CreateVaultMarketTodClaimObjectResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketTodMyClaim()`

```php
createVaultMarketTodMyClaim(): \Crossly\Model\Vault\CreateVaultMarketTodMyClaimResponse
```

Start a claim as a named beneficiary (ID first), naming the account holder by @username or email. It stays a draft until you add documents and submit. Returns `{ id, status, existing }`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createVaultMarketTodMyClaim();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketTodMyClaim: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\CreateVaultMarketTodMyClaimResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketTodMyClaimDocument()`

```php
createVaultMarketTodMyClaimDocument($id): \Crossly\Model\Vault\CreateVaultMarketTodMyClaimDocumentResponse
```

Add one document to a draft claim (or one ops asked more of): kind, filename and the file as base64 (PDF, JPEG or PNG, up to 8 MB). Kept privately for ops review. Returns `{ id, kind, label, filename, bytes }`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createVaultMarketTodMyClaimDocument($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketTodMyClaimDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Vault\CreateVaultMarketTodMyClaimDocumentResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketTodMyClaimSubmit()`

```php
createVaultMarketTodMyClaimSubmit($id): \Crossly\Model\Common\IdStatusResponse
```

Send a claim for ops review (it needs a death certificate). The account holder is told and can stop it. Returns `{ id, status }`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createVaultMarketTodMyClaimSubmit($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketTodMyClaimSubmit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Common\IdStatusResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketTodMyClaimWithdraw()`

```php
createVaultMarketTodMyClaimWithdraw($id): \Crossly\Model\Common\IdStatusResponse
```

Withdraw a claim before it is released. Returns `{ id, status }`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createVaultMarketTodMyClaimWithdraw($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketTodMyClaimWithdraw: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Common\IdStatusResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketTodTerm()`

```php
createVaultMarketTodTerm(): \Crossly\Model\Common\TermsVersionResponse
```

Accept the current transfer-on-death terms. Returns `{ termsVersion }`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createVaultMarketTodTerm();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketTodTerm: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Common\TermsVersionResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketUnitEvidenceScan()`

```php
createVaultMarketUnitEvidenceScan($id): \Crossly\Model\Vault\GetVaultMarketUnitEvidenceResponse
```

Add a finished scan of your own (`captureId`, of the same catalogue item) to your vault unit. Shown as added by the owner, not as intake evidence.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createVaultMarketUnitEvidenceScan($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketUnitEvidenceScan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Vault\GetVaultMarketUnitEvidenceResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketUnitSellNow()`

```php
createVaultMarketUnitSellNow($id): \Crossly\Model\Vault\CreateVaultMarketInstantExitResponse
```

Sell one unit of this item now into the best bid (Instant Exit: an immediate-or-cancel pro order), never below `minCents`. Returns `{ status: filled | missed, filledCents, quote, order }`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createVaultMarketUnitSellNow($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketUnitSellNow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Vault\CreateVaultMarketInstantExitResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketValuationStatement()`

```php
createVaultMarketValuationStatement(): \Crossly\Model\Vault\CreateVaultMarketValuationStatementResponse
```

Issue an insurance or appraisal statement for a day: frozen with the sha256 of its record, sealed in the Crossly audit chain, with a public verify link. preparedFor and policyRef are printed on it and never shown on verify. Moves no money.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createVaultMarketValuationStatement();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketValuationStatement: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\CreateVaultMarketValuationStatementResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketWatchlist()`

```php
createVaultMarketWatchlist(): \Crossly\Model\Vault\CreateVaultMarketWatchlistResponse
```

Watch a book key. Returns `{ bookKey, watching }`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createVaultMarketWatchlist();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketWatchlist: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\CreateVaultMarketWatchlistResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultMarketWidgetToken()`

```php
createVaultMarketWidgetToken(): \Crossly\Model\Vault\CreateVaultMarketWidgetTokenResponse
```

Mint a widget token for one phone (`deviceName`, `installId`); minting again with the same pair replaces that phone token. The token reads the widget summary and nothing else, and is returned once. At most five phones.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createVaultMarketWidgetToken();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultMarketWidgetToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\CreateVaultMarketWidgetTokenResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultReceiptTokenConfirm()`

```php
createVaultReceiptTokenConfirm($id): \Crossly\Model\Vault\CreateVaultReceiptTokenConfirmResponse
```

After your wallet sent the export: read the chain and mark the token live once its one token exists. Pass the `signature` your wallet returned to record it (kept only if it landed).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createVaultReceiptTokenConfirm($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultReceiptTokenConfirm: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Vault\CreateVaultReceiptTokenConfirmResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultReceiptTokenExport()`

```php
createVaultReceiptTokenExport(): \Crossly\Model\Vault\CreateVaultReceiptTokenExportResponse
```

Send one unit (`vaultItemId`) warehouse receipt to one of your verified Solana wallets (`wallet`) as a token, accepting the current terms (`acceptTerms`). Returns a base64 transaction already signed by the new mint and the receipts authority: your wallet pays the rent and must sign and send it within about two minutes, then call confirm. Nothing is minted until it does. Needs a verified ID; the unit must be stored, unpledged, not lent and not for sale.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createVaultReceiptTokenExport();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultReceiptTokenExport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\CreateVaultReceiptTokenExportResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultReceiptTokenRedeem()`

```php
createVaultReceiptTokenRedeem($id): \Crossly\Model\Vault\CreateVaultReceiptTokenRedeemResponse
```

Redeem a receipt token held in one of your verified Solana wallets (`wallet`): returns an unsigned base64 burn your wallet signs and sends (it also closes the token account and returns its rent to you). Once it lands, call redeem/confirm and the unit is yours in the vault. Refused while the token is frozen.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createVaultReceiptTokenRedeem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultReceiptTokenRedeem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Vault\CreateVaultReceiptTokenRedeemResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultReceiptTokenRedeemConfirm()`

```php
createVaultReceiptTokenRedeemConfirm($id): \Crossly\Model\Vault\CreateVaultReceiptTokenRedeemConfirmResponse
```

After your wallet sent the redeem: read the chain; once the token is burned the unit moves into your vault (if it was not yours already). Pass the `signature` to record it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->createVaultReceiptTokenRedeemConfirm($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultReceiptTokenRedeemConfirm: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Vault\CreateVaultReceiptTokenRedeemConfirmResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createVaultReceiptTokenWalletAllow()`

```php
createVaultReceiptTokenWalletAllow(): \Crossly\Model\Vault\CreateVaultReceiptTokenWalletAllowResponse
```

Put one of your verified Solana wallets (`wallet`) on the receipt-token allow-list so it can hold and receive receipt tokens. Returns a base64 transaction already signed by the receipts authority: the wallet pays the small rent (about 0.001 SOL) and must sign and send it within about two minutes. Needs a verified ID and a wallet that passes the sanctions screen.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createVaultReceiptTokenWalletAllow();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->createVaultReceiptTokenWalletAllow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\CreateVaultReceiptTokenWalletAllowResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteVaultMarketAgentWatch()`

```php
deleteVaultMarketAgentWatch($id): \Crossly\Model\Vault\ListVaultMarketAgentWatchesItem
```

Cancel a live price watch. Returns the watch.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->deleteVaultMarketAgentWatch($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->deleteVaultMarketAgentWatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Vault\ListVaultMarketAgentWatchesItem**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteVaultMarketAlert()`

```php
deleteVaultMarketAlert($id): \Crossly\Model\Common\OkResponse
```

Delete a price alert. Returns `{ ok }`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->deleteVaultMarketAlert($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->deleteVaultMarketAlert: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Common\OkResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteVaultMarketBullionFamilyPeg()`

```php
deleteVaultMarketBullionFamilyPeg($id): \Crossly\Model\Vault\ListVaultMarketBullionFamilyPegsItem
```

Stop a family-wide quote: every leg order comes off the book; what filled stays filled.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->deleteVaultMarketBullionFamilyPeg($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->deleteVaultMarketBullionFamilyPeg: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Vault\ListVaultMarketBullionFamilyPegsItem**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteVaultMarketBullionPeg()`

```php
deleteVaultMarketBullionPeg($id): \Crossly\Model\Vault\ListVaultMarketBullionPegsItem
```

Stop a spot-pegged quote: its resting order comes off the book; what filled stays filled.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->deleteVaultMarketBullionPeg($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->deleteVaultMarketBullionPeg: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Vault\ListVaultMarketBullionPegsItem**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteVaultMarketDealerBand()`

```php
deleteVaultMarketDealerBand(): \Crossly\Model\Vault\ListVaultMarketDealerBandsItem
```

Stop a band on a key; its standing bid comes off.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->deleteVaultMarketDealerBand();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->deleteVaultMarketDealerBand: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\ListVaultMarketDealerBandsItem**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteVaultMarketEntityMember()`

```php
deleteVaultMarketEntityMember($id, $member_id): \Crossly\Model\Common\OkResponse
```

Admin: remove a member (or leave, yourself). An entity always keeps one admin.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$member_id = 'member_id_example'; // string

try {
    $result = $apiInstance->deleteVaultMarketEntityMember($id, $member_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->deleteVaultMarketEntityMember: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **member_id** | **string**|  |

### Return type

**\Crossly\Model\Common\OkResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteVaultMarketFollowCopyWatch()`

```php
deleteVaultMarketFollowCopyWatch($handle): \Crossly\Model\Vault\DeleteVaultMarketFollowCopyWatchResponse
```

Stop copy-watching a collector.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$handle = 'handle_example'; // string

try {
    $result = $apiInstance->deleteVaultMarketFollowCopyWatch($handle);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->deleteVaultMarketFollowCopyWatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**|  |

### Return type

**\Crossly\Model\Vault\DeleteVaultMarketFollowCopyWatchResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteVaultMarketIndex()`

```php
deleteVaultMarketIndex($slug): \Crossly\Model\Common\OkResponse
```

Delete an index of your own. Returns `{ ok }`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string

try {
    $result = $apiInstance->deleteVaultMarketIndex($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->deleteVaultMarketIndex: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **slug** | **string**|  |

### Return type

**\Crossly\Model\Common\OkResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteVaultMarketLocate()`

```php
deleteVaultMarketLocate($id): \Crossly\Model\Vault\ListVaultMarketLocateMineItem
```

Release a live locate before it lapses.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->deleteVaultMarketLocate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->deleteVaultMarketLocate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Vault\ListVaultMarketLocateMineItem**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteVaultMarketOpeningWaitlist()`

```php
deleteVaultMarketOpeningWaitlist($slug): \Crossly\Model\Vault\DeleteVaultMarketOpeningWaitlistResponse
```

Leave a key's waitlist.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string

try {
    $result = $apiInstance->deleteVaultMarketOpeningWaitlist($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->deleteVaultMarketOpeningWaitlist: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **slug** | **string**|  |

### Return type

**\Crossly\Model\Vault\DeleteVaultMarketOpeningWaitlistResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteVaultMarketPriceWidget()`

```php
deleteVaultMarketPriceWidget($id): \Crossly\Model\Vault\DeleteVaultMarketPriceWidgetResponse
```

Delete a widget. Pages that still paste it show that it is no longer available. Returns `{ id, archived }`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->deleteVaultMarketPriceWidget($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->deleteVaultMarketPriceWidget: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Vault\DeleteVaultMarketPriceWidgetResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteVaultMarketProQuote()`

```php
deleteVaultMarketProQuote(): \Crossly\Model\Vault\DeleteVaultMarketProQuoteResponse
```

Pull your quote on a book key, or every quote. Returns `{ pulled }`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->deleteVaultMarketProQuote();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->deleteVaultMarketProQuote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\DeleteVaultMarketProQuoteResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteVaultMarketProfileFollow()`

```php
deleteVaultMarketProfileFollow($handle): \Crossly\Model\Vault\CreateVaultMarketProfileFollowResponse
```

Stop following someone.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$handle = 'handle_example'; // string

try {
    $result = $apiInstance->deleteVaultMarketProfileFollow($handle);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->deleteVaultMarketProfileFollow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**|  |

### Return type

**\Crossly\Model\Vault\CreateVaultMarketProfileFollowResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteVaultMarketRecurring()`

```php
deleteVaultMarketRecurring($id): \Crossly\Model\Vault\ListVaultMarketRecurringItem
```

Stop a recurring buy for good; its history stays.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->deleteVaultMarketRecurring($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->deleteVaultMarketRecurring: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Vault\ListVaultMarketRecurringItem**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteVaultMarketSetGoal()`

```php
deleteVaultMarketSetGoal($id): \Crossly\Model\Vault\DeleteVaultMarketSetGoalResponse
```

Remove a set goal. A working basket bid is cancelled first; what filled stays in your vault.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->deleteVaultMarketSetGoal($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->deleteVaultMarketSetGoal: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Vault\DeleteVaultMarketSetGoalResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteVaultMarketShareCard()`

```php
deleteVaultMarketShareCard($id): \Crossly\Model\Common\OkResponse
```

Take a share card down: its link and image stop working. Returns `{ ok }`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->deleteVaultMarketShareCard($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->deleteVaultMarketShareCard: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Common\OkResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteVaultMarketSupplyRoundUp()`

```php
deleteVaultMarketSupplyRoundUp(): \Crossly\Model\Vault\GetVaultMarketSupplyRoundUpResponse
```

Stop the round-up (its history stays; an armed buy is cancelled).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->deleteVaultMarketSupplyRoundUp();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->deleteVaultMarketSupplyRoundUp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\GetVaultMarketSupplyRoundUpResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteVaultMarketUnitEvidence()`

```php
deleteVaultMarketUnitEvidence($id, $evidence_id): \Crossly\Model\Vault\GetVaultMarketUnitEvidenceResponse
```

Take back a scan you added to your vault unit (intake evidence stays).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$evidence_id = 'evidence_id_example'; // string

try {
    $result = $apiInstance->deleteVaultMarketUnitEvidence($id, $evidence_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->deleteVaultMarketUnitEvidence: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **evidence_id** | **string**|  |

### Return type

**\Crossly\Model\Vault\GetVaultMarketUnitEvidenceResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteVaultMarketWatchlist()`

```php
deleteVaultMarketWatchlist(): \Crossly\Model\Vault\CreateVaultMarketWatchlistResponse
```

Stop watching a book key (`?bookKey=`). Returns `{ bookKey, watching }`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->deleteVaultMarketWatchlist();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->deleteVaultMarketWatchlist: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\CreateVaultMarketWatchlistResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteVaultMarketWidgetToken()`

```php
deleteVaultMarketWidgetToken(): \Crossly\Model\Vault\DeleteVaultMarketWidgetTokenResponse
```

Turn the widget off on every phone: revokes all your widget tokens. Returns `{ revoked }`, how many.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->deleteVaultMarketWidgetToken();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->deleteVaultMarketWidgetToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\DeleteVaultMarketWidgetTokenResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteVaultMarketWidgetTokenById()`

```php
deleteVaultMarketWidgetTokenById($id): \Crossly\Model\Vault\DeleteVaultMarketWidgetTokenByIdResponse
```

Turn the widget off on one phone: revokes that widget token at once. Only a widget token can be revoked here.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->deleteVaultMarketWidgetTokenById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->deleteVaultMarketWidgetTokenById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Vault\DeleteVaultMarketWidgetTokenByIdResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultAttestation()`

```php
getVaultAttestation(): \Crossly\Model\Vault\GetVaultAttestationResponse
```

Vault attestations: independent physical counts, the insurance certificate (with a warning when insured value in the vault exceeds its aggregate or per-occurrence limit), SOC 1 Type II and SOC 2 reports. Each carries its signed document.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getVaultAttestation();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultAttestation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\GetVaultAttestationResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketAccount()`

```php
getVaultMarketAccount(): \Crossly\Model\Vault\GetVaultMarketAccountResponse
```

Which Vault Markets registrations are live (and the env each waits on), your custodian account, limits and balances.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getVaultMarketAccount();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\GetVaultMarketAccountResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketAdl()`

```php
getVaultMarketAdl(): \Crossly\Model\Vault\GetVaultMarketAdlResponse
```

The insurance fund (booked and free to draw), the most one event may draw before auto-deleveraging (ADL) starts, the loss waterfall in order, and the latest ADL events (no user or position ids). Money in cents.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getVaultMarketAdl();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketAdl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\GetVaultMarketAdlResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketAdlPosition()`

```php
getVaultMarketAdlPosition($id): \Crossly\Model\Vault\ListVaultMarketAdlPositionsItem
```

One of your positions with its ADL lights (0 once it has ended).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getVaultMarketAdlPosition($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketAdlPosition: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Vault\ListVaultMarketAdlPositionsItem**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketAdvanceQuote()`

```php
getVaultMarketAdvanceQuote(): \Crossly\Model\Vault\GetVaultMarketAdvanceQuoteResponse
```

What an advance on a vault unit for sale could be: up to half of the lower of its mark and asking price, free for 60 days.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getVaultMarketAdvanceQuote();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketAdvanceQuote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\GetVaultMarketAdvanceQuoteResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketAgentDraft()`

```php
getVaultMarketAgentDraft($id): \Crossly\Model\Vault\ListVaultMarketAgentDraftsItem
```

One drafted order: item, side, units, limit (cents), the book when drafted, status, and the orderBody that places it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getVaultMarketAgentDraft($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketAgentDraft: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Vault\ListVaultMarketAgentDraftsItem**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketAlertPref()`

```php
getVaultMarketAlertPref(): \Crossly\Model\Vault\GetVaultMarketAlertPrefResponse
```

Your vault alert settings: every kind (price, fill, margin_call, adl, p2p_loan, auction, market_open, receipt_token, set_goal, follow, account), every channel (push, telegram, terminal, email, webhook) with whether it is set up, the full on/off grid, the locked switches (a critical kind always pushes) and quiet hours.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getVaultMarketAlertPref();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketAlertPref: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\GetVaultMarketAlertPrefResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketAuctionLot()`

```php
getVaultMarketAuctionLot($id): \Crossly\Model\Vault\GetVaultMarketAuctionLotResponse
```

One lot: the price showing, the next minimum bid, whether a reserve exists and is met, the end (extended by late bids), the bid history and your standing.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getVaultMarketAuctionLot($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketAuctionLot: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Vault\GetVaultMarketAuctionLotResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketAuctionMine()`

```php
getVaultMarketAuctionMine(): \Crossly\Model\Vault\GetVaultMarketAuctionMineResponse
```

Lots you consigned (with your reserve) and lots you bid on (with your maximum and whether you lead).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getVaultMarketAuctionMine();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketAuctionMine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\GetVaultMarketAuctionMineResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketBlock()`

```php
getVaultMarketBlock($order_id): \Crossly\Model\Vault\ListVaultMarketBlocksItem
```

One block order: its order, plan lines (planned and allocated units, average price, cash share, status).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string

try {
    $result = $apiInstance->getVaultMarketBlock($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketBlock: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**|  |

### Return type

**\Crossly\Model\Vault\ListVaultMarketBlocksItem**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketBullionFor()`

```php
getVaultMarketBullionFor(): \Crossly\Model\Vault\GetVaultMarketBullionForResponse
```

The bullion key families one book key belongs to, with spot for its metal as a labelled reference and its melt value at that spot. Empty families when the item is not keyed bullion.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getVaultMarketBullionFor();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketBullionFor: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\GetVaultMarketBullionForResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketBullionKey()`

```php
getVaultMarketBullionKey($slug): \Crossly\Model\Vault\GetVaultMarketBullionKeyResponse
```

One bullion key family: its catalogue products, every live book key with best bid, best ask, vault units and its mark (from the book only), live pegged quote counts, and spot as a labelled reference.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string

try {
    $result = $apiInstance->getVaultMarketBullionKey($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketBullionKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **slug** | **string**|  |

### Return type

**\Crossly\Model\Vault\GetVaultMarketBullionKeyResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketBullionPegPreview()`

```php
getVaultMarketBullionPegPreview(): \Crossly\Model\Vault\GetVaultMarketBullionPegPreviewResponse
```

The price a spot-pegged quote would rest at now (spot plus a premium in cents or basis points, clamped to floor and cap). No price when spot is stale or missing: such a quote waits off the book.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getVaultMarketBullionPegPreview();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketBullionPegPreview: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\GetVaultMarketBullionPegPreviewResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketCall()`

```php
getVaultMarketCall($book_key): \Crossly\Model\Vault\GetVaultMarketCallResponse
```

Recent call-auction uncrosses on a book key: kind (open, reopen, periodic, daily, buy-in, sell-off), clearing price in cents and units.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$book_key = 'book_key_example'; // string

try {
    $result = $apiInstance->getVaultMarketCall($book_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketCall: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **book_key** | **string**|  |

### Return type

**\Crossly\Model\Vault\GetVaultMarketCallResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketCapacity()`

```php
getVaultMarketCapacity(): \Crossly\Model\Vault\GetVaultMarketCapacityResponse
```

Capacity from the book: `bookKey` (+ `units`) gives ADV, depth within ±5% of the mark, vault stock, lendable units and days to liquidate at 20% of ADV; `index` + `notional` (cents) gives how much of the basket the asks fill now and the days the rest needs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getVaultMarketCapacity();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketCapacity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\GetVaultMarketCapacityResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketChannel()`

```php
getVaultMarketChannel(): \Crossly\Model\Vault\GetVaultMarketChannelResponse
```

Your Vault Markets channel switches: Telegram alerts and digest, the daily cap on vault nudges by push (default 5), whether a Telegram chat is linked, and how many nudges went out today.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getVaultMarketChannel();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketChannel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\GetVaultMarketChannelResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketCompare()`

```php
getVaultMarketCompare(): \Crossly\Model\Vault\GetVaultMarketCompareResponse
```

Up to 5 book keys and/or index slugs (`items`, comma-separated) as daily series on the same days, each rebased to 100.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getVaultMarketCompare();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketCompare: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\GetVaultMarketCompareResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketConfirmation()`

```php
getVaultMarketConfirmation($trade_id): \Crossly\Model\Vault\GetVaultMarketConfirmationResponse
```

One trade confirmation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$trade_id = 'trade_id_example'; // string

try {
    $result = $apiInstance->getVaultMarketConfirmation($trade_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketConfirmation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **trade_id** | **string**|  |

### Return type

**\Crossly\Model\Vault\GetVaultMarketConfirmationResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketConfirmationPdf()`

```php
getVaultMarketConfirmationPdf($trade_id): \SplFileObject
```

One trade confirmation as a PDF.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$trade_id = 'trade_id_example'; // string

try {
    $result = $apiInstance->getVaultMarketConfirmationPdf($trade_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketConfirmationPdf: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **trade_id** | **string**|  |

### Return type

**\SplFileObject**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/pdf`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketCorrelation()`

```php
getVaultMarketCorrelation(): \Crossly\Model\Vault\GetVaultMarketCorrelationResponse
```

The correlation matrix of the sector indexes' weekly returns over `weeks` (default 52), pairwise-complete, with n per pair; a pair under 26 shared weeks has no number.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getVaultMarketCorrelation();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketCorrelation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\GetVaultMarketCorrelationResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketCreatorAttribution()`

```php
getVaultMarketCreatorAttribution(): \Crossly\Model\Vault\GetVaultMarketCreatorAttributionResponse
```

The creator who brought you to Vault Markets, when one did: when it started and ends, whether it still earns, and the disclosure. Your prices and fees are the same either way.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getVaultMarketCreatorAttribution();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketCreatorAttribution: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\GetVaultMarketCreatorAttributionResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketCreatorDashboard()`

```php
getVaultMarketCreatorDashboard(): \Crossly\Model\Vault\GetVaultMarketCreatorDashboardResponse
```

For creators: whether you joined the programme, each of your codes with traders attributed and still earning (counts only), shares accrued, paid and voided (cents) and the latest shares.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getVaultMarketCreatorDashboard();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketCreatorDashboard: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\GetVaultMarketCreatorDashboardResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketCreatorProgramme()`

```php
getVaultMarketCreatorProgramme(): \Crossly\Model\Vault\GetVaultMarketCreatorProgrammeResponse
```

The Vault Markets creator programme: the share of the fee Crossly keeps that a creator earns, the per-fill and lifetime caps (cents), the attribution window in days, the 2% net floor it sits under, and the disclosure words.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getVaultMarketCreatorProgramme();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketCreatorProgramme: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\GetVaultMarketCreatorProgrammeResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketCreatorRoom()`

```php
getVaultMarketCreatorRoom(): \Crossly\Model\Vault\GetVaultMarketCreatorRoomResponse
```

For creators: your vault shelf room (applied, verified, rejected or paused) and whether your public vault profile is on, which the room needs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getVaultMarketCreatorRoom();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketCreatorRoom: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\GetVaultMarketCreatorRoomResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketCredit()`

```php
getVaultMarketCredit($id): \Crossly\Model\Vault\GetVaultMarketCreditResponse
```

One loan or advance with its pledged units and its money log (draws, interest, repayments, sale proceeds).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getVaultMarketCredit($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketCredit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Vault\GetVaultMarketCreditResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketDcm()`

```php
getVaultMarketDcm(): \Crossly\Model\Vault\GetVaultMarketDcmResponse
```

The partner exchange (DCM) that lists and clears futures and options on Crossly indexes (needs VAULT_INDEX_DCM + VAULT_INDEX_DCM_API_URL + VAULT_INDEX_DCM_API_KEY), and its contracts as last read: perps, futures and options with the index each settles on, multiplier, tick, expiry and strike. Read-only: Crossly is the licensor and data provider, never the venue.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getVaultMarketDcm();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketDcm: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\GetVaultMarketDcmResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketDcmContract()`

```php
getVaultMarketDcmContract($symbol): \Crossly\Model\Vault\GetVaultMarketDcmContractResponse
```

One partner contract: its spec, its funding prints (newest first; the partner computes and settles funding), annualised funding over the last 21 prints, and the Crossly index level it settles on.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$symbol = 'symbol_example'; // string

try {
    $result = $apiInstance->getVaultMarketDcmContract($symbol);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketDcmContract: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **symbol** | **string**|  |

### Return type

**\Crossly\Model\Vault\GetVaultMarketDcmContractResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketDcmContractBook()`

```php
getVaultMarketDcmContractBook($symbol): \Crossly\Model\Vault\GetVaultMarketDcmContractBookResponse
```

The partner exchange live order book for a contract (cached 5 seconds), with mark, index, last, open interest, 24 h volume, spread in bps and the basis of its mark over the Crossly index in bps. Prices are index points.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$symbol = 'symbol_example'; // string

try {
    $result = $apiInstance->getVaultMarketDcmContractBook($symbol);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketDcmContractBook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **symbol** | **string**|  |

### Return type

**\Crossly\Model\Vault\GetVaultMarketDcmContractBookResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketDcmOptionsInput()`

```php
getVaultMarketDcmOptionsInput($slug): \Crossly\Model\Vault\GetVaultMarketDcmOptionsInputResponse
```

Options inputs for an index (indexes only, never a single item): Crossly realised volatility (raw and Geltner-desmoothed, from weekly returns), the forward (the partner future mark, else the Crossly close), Black-76 greeks on a strike x expiry grid and on every option the partner lists on the index. Model inputs, not quotes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string

try {
    $result = $apiInstance->getVaultMarketDcmOptionsInput($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketDcmOptionsInput: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **slug** | **string**|  |

### Return type

**\Crossly\Model\Vault\GetVaultMarketDcmOptionsInputResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketDcmPosition()`

```php
getVaultMarketDcmPosition(): \Crossly\Model\Vault\GetVaultMarketDcmPositionResponse
```

The partner exchange account linked to your account (or to the firm sub-account `subaccountId`) and its positions, read-only (cached 15 seconds); index futures on category indexes count as portfolio-margin hedges for that account: contracts, side, entry and mark price, unrealised P&L and margin in cents, liquidation price and notional in cents. Not linked: `linked: false`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getVaultMarketDcmPosition();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketDcmPosition: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\GetVaultMarketDcmPositionResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketDealer()`

```php
getVaultMarketDealer(): \Crossly\Model\Vault\GetVaultMarketDealerResponse
```

Your dealer status (applied, approved, revoked) and your Instant Exit bands.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getVaultMarketDealer();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketDealer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\GetVaultMarketDealerResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketDealerPool()`

```php
getVaultMarketDealerPool($id): \Crossly\Model\Vault\ListVaultMarketDealerPoolsItem
```

One of your curve pools, with its ladder and live legs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getVaultMarketDealerPool($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketDealerPool: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Vault\ListVaultMarketDealerPoolsItem**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketDigestPreview()`

```php
getVaultMarketDigestPreview(): \Crossly\Model\Vault\GetVaultMarketDigestPreviewResponse
```

This week's vault digest as it would go out: units at the display marks (unmarked units counted, not valued), the like-for-like change from a week ago, offers on your units, watched keys that got a first mark, and one Learn card.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getVaultMarketDigestPreview();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketDigestPreview: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\GetVaultMarketDigestPreviewResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketEntity()`

```php
getVaultMarketEntity(): \Crossly\Model\Vault\GetVaultMarketEntityResponse
```

The entities (funds, LLCs, trusts, SPVs) you belong to, and invitations waiting for you.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getVaultMarketEntity();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketEntity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\GetVaultMarketEntityResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketEntityById()`

```php
getVaultMarketEntityById($id): \Crossly\Model\Vault\GetVaultMarketEntityByIdResponse
```

One entity: members and roles, sub-accounts with their limits, firm halts, caps.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getVaultMarketEntityById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketEntityById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Vault\GetVaultMarketEntityByIdResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketEstimate()`

```php
getVaultMarketEstimate($book_key): \Crossly\Model\Vault\GetVaultMarketEstimateResponse
```

The Crossly Estimate for a book key — a model, not a price. Method (own trades, index-adjusted last trade, grade ratio), cents with 68% and 95% bands, High/Medium/Low from the walk-forward backtest's FSD, and n. Hidden (`available: false`) under 50 backtested trades or when FSD > 0.30. Never used for margin, loans or settlement.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$book_key = 'book_key_example'; // string

try {
    $result = $apiInstance->getVaultMarketEstimate($book_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketEstimate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **book_key** | **string**|  |

### Return type

**\Crossly\Model\Vault\GetVaultMarketEstimateResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketExecutionQuality()`

```php
getVaultMarketExecutionQuality(): \Crossly\Model\Vault\GetVaultMarketExecutionQualityResponse
```

The quarterly execution-quality report (Rule 605 style): fill rates, speed, effective vs quoted spread and shortfall by order type and size, and the busiest keys. `quarter` like 2026-Q4; the current quarter is provisional.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getVaultMarketExecutionQuality();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketExecutionQuality: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\GetVaultMarketExecutionQualityResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketFeeQuote()`

```php
getVaultMarketFeeQuote(): \Crossly\Model\Vault\GetVaultMarketFeeQuoteResponse
```

Your fee for an order at a price: as maker (the order rests) and as taker (it fills at once), with the programme that sets your rate and any Crossly One trim. A buyer's fee is added to the price; a seller's comes out of the proceeds.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getVaultMarketFeeQuote();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketFeeQuote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\GetVaultMarketFeeQuoteResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketFeeSchedule()`

```php
getVaultMarketFeeSchedule(): \Crossly\Model\Vault\GetVaultMarketFeeScheduleResponse
```

The fee schedule by role: maker and taker rates for retail, 30-day volume, Registered LPs and DMMs, the CBX discount, the referral share and the 2% net floor Crossly always keeps.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getVaultMarketFeeSchedule();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketFeeSchedule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\GetVaultMarketFeeScheduleResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketFollowSharing()`

```php
getVaultMarketFollowSharing(): \Crossly\Model\Vault\GetVaultMarketFollowSharingResponse
```

Your sharing switches: the public vault profile, new buys, units sent in, sales, Hall loans, bids and asks for copy-watchers, and the leaderboards. All off until you turn them on.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getVaultMarketFollowSharing();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketFollowSharing: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\GetVaultMarketFollowSharingResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketGemRate()`

```php
getVaultMarketGemRate($book_key): \Crossly\Model\Vault\GetVaultMarketGemRateResponse
```

The Crossly gem rate: of cards graded through Crossly, the share that came back at each grader's gem grade, for this item and its category, with a Wilson 95% band. 10 returns per grader or no number. Not a grader population report.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$book_key = 'book_key_example'; // string

try {
    $result = $apiInstance->getVaultMarketGemRate($book_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketGemRate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **book_key** | **string**|  |

### Return type

**\Crossly\Model\Vault\GetVaultMarketGemRateResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketGradeToVault()`

```php
getVaultMarketGradeToVault($id): \Crossly\Model\Vault\ListVaultMarketGradeToVaultItem
```

One Grade to Vault flow, brought up to date with its submission and unit.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getVaultMarketGradeToVault($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketGradeToVault: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Vault\ListVaultMarketGradeToVaultItem**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketGradeToVaultCandidate()`

```php
getVaultMarketGradeToVaultCandidate(): \Crossly\Model\Vault\GetVaultMarketGradeToVaultCandidateResponse
```

What you can start Grade to Vault on: raw inventory matched to a catalogue item, and raw vault units on the grading hub shelf; plus whether Grading Runs are open.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getVaultMarketGradeToVaultCandidate();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketGradeToVaultCandidate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\GetVaultMarketGradeToVaultCandidateResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketGradingSignal()`

```php
getVaultMarketGradingSignal(): \Crossly\Model\Vault\GetVaultMarketGradingSignalResponse
```

For a raw book key: the marks of the same item's graded keys, the spread over raw, grading cost per grader, the margin tier grading lifts it to, your raw vault units it pays to grade, and where to act.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getVaultMarketGradingSignal();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketGradingSignal: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\GetVaultMarketGradingSignalResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketHallLoan()`

```php
getVaultMarketHallLoan(): \Crossly\Model\Vault\GetVaultMarketHallLoanResponse
```

Your Hall of Grails desk: this week's exhibition, the rules (maxLive loans, shownPerHolder per exhibition, repPoints per exhibition shown), reputation (exhibitions finished), your loans (status active, ending or ended; onShowNow, showingUntil, exhibitions, the next exhibition it fits, the Lent to the Hall badge) and the vault units you could lend (canLend, or the blocker in words, and the next exhibition each fits). Display only.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getVaultMarketHallLoan();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketHallLoan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\GetVaultMarketHallLoanResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketHealth()`

```php
getVaultMarketHealth(): \Crossly\Model\Vault\GetVaultMarketHealthResponse
```

Portfolio health of your vault holdings at Crossly marks: concentration by single item, category, grade and grader (shares, HHI on 0 to 10000, its band and effective number of holdings), value by liquidity tier, the stress grid (each category and everything down 10, 20 and 30 percent), value by mark quality, plain observations, and the held items a what-if can run on. Information only, not advice.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getVaultMarketHealth();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketHealth: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\GetVaultMarketHealthResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketHealthWhatIf()`

```php
getVaultMarketHealthWhatIf($book_key, $move_bps): \Crossly\Model\Vault\GetVaultMarketHealthWhatIfResponse
```

What if one held item moved by moveBps (-10000 to 10000 basis points of its mark): the item, your vault total, the item and its category share of the vault, and the single-item HHI, before and after. A scenario on the mark, not a price you could sell at.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$book_key = 'book_key_example'; // string
$move_bps = 56; // int

try {
    $result = $apiInstance->getVaultMarketHealthWhatIf($book_key, $move_bps);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketHealthWhatIf: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **book_key** | **string**|  |
 **move_bps** | **int**|  |

### Return type

**\Crossly\Model\Vault\GetVaultMarketHealthWhatIfResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketHomeUnit()`

```php
getVaultMarketHomeUnit(): \Crossly\Model\Vault\GetVaultMarketHomeUnitResponse
```

\"Show my vault\": the vault units you hold, the ones standing in your Crossly World home first. Each: vaultItemId, title, grade, imageUrl, bookKey (its market), inHome, visitors (visitors to your home see it). Also your home (slug, privacy, path), max units one home shows, shown, visitorsSee and a note on who sees what. Your home is made on first read. No prices.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getVaultMarketHomeUnit();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketHomeUnit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\GetVaultMarketHomeUnitResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketIndex()`

```php
getVaultMarketIndex($slug): \Crossly\Model\Vault\GetVaultMarketIndexResponse
```

One index with its daily closes (oldest first) and its level now.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string

try {
    $result = $apiInstance->getVaultMarketIndex($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketIndex: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **slug** | **string**|  |

### Return type

**\Crossly\Model\Vault\GetVaultMarketIndexResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketIndexCalendar()`

```php
getVaultMarketIndexCalendar(): \Crossly\Model\Vault\GetVaultMarketIndexCalendarResponse
```

The next four quarterly reviews: reference day (2nd Friday of Mar/Jun/Sep/Dec), announcement day, last close under the old membership and the effective day; June and December also review the Blue-chip 50.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getVaultMarketIndexCalendar();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketIndexCalendar: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\GetVaultMarketIndexCalendarResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketIndexConsultation()`

```php
getVaultMarketIndexConsultation($id): \Crossly\Model\Vault\ListVaultMarketIndexConsultationsItem
```

One consultation with its proposal, versions, dates, outcome and the public comments.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getVaultMarketIndexConsultation($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketIndexConsultation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Vault\ListVaultMarketIndexConsultationsItem**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketIndexFeed()`

```php
getVaultMarketIndexFeed($slug): \Crossly\Model\Vault\GetVaultMarketIndexFeedResponse
```

The licensed index feed for one built-in index (needs VAULT_INDEX_DCM + VAULT_INDEX_FEED_SECRET): the level now (intraday from A/B marks, or the last close below 50% constituent coverage), the last close, the frozen 7-day TWAP settlement value and every constituent with its mark source, quality and trade count. Signed: `x-crossly-signature: t=<ms>,v1=<hex HMAC-SHA256(secret, t + \".\" + body)>`. Every read is logged for the licence. Crossly is the licensor and data feed only.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string

try {
    $result = $apiInstance->getVaultMarketIndexFeed($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketIndexFeed: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **slug** | **string**|  |

### Return type

**\Crossly\Model\Vault\GetVaultMarketIndexFeedResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketIndexFeedFunding()`

```php
getVaultMarketIndexFeedFunding($slug): \Crossly\Model\Vault\GetVaultMarketIndexFeedFundingResponse
```

Reference funding for a perpetual-style future on the index: your premium `premiumBps` (TWAP of (impact mid - index)/index) through F = P + clamp(I - P, ±0.05%) per 8 h, |F| capped at 0.5%/day, with the index level it is relative to. The partner DCM computes and settles funding; this is the reference math.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string

try {
    $result = $apiInstance->getVaultMarketIndexFeedFunding($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketIndexFeedFunding: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **slug** | **string**|  |

### Return type

**\Crossly\Model\Vault\GetVaultMarketIndexFeedFundingResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketIndexFeedSettlement()`

```php
getVaultMarketIndexFeedSettlement($slug): \Crossly\Model\Vault\GetVaultMarketIndexFeedSettlementResponse
```

The frozen 7-day TWAP settlement series for a licensed index (written once a day, never restated), with the closes behind each value. Signed like the feed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string

try {
    $result = $apiInstance->getVaultMarketIndexFeedSettlement($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketIndexFeedSettlement: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **slug** | **string**|  |

### Return type

**\Crossly\Model\Vault\GetVaultMarketIndexFeedSettlementResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketIndexLevel()`

```php
getVaultMarketIndexLevel($slug): \Crossly\Model\Vault\GetVaultMarketIndexLevelResponse
```

An index's daily closes (up to 5 years), oldest first.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string

try {
    $result = $apiInstance->getVaultMarketIndexLevel($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketIndexLevel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **slug** | **string**|  |

### Return type

**\Crossly\Model\Vault\GetVaultMarketIndexLevelResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketIndexLicenceUsage()`

```php
getVaultMarketIndexLicenceUsage(): \Crossly\Model\Vault\GetVaultMarketIndexLicenceUsageResponse
```

Your licensed index feed reads over `days`, per index and endpoint (licence-usage report).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getVaultMarketIndexLicenceUsage();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketIndexLicenceUsage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\GetVaultMarketIndexLicenceUsageResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketIndexMethodology()`

```php
getVaultMarketIndexMethodology(): \Crossly\Model\Vault\GetVaultMarketIndexMethodologyResponse
```

The index method in machine-readable form: version (semver), inputs, weightings and caps, the family and its screens, the engines and their publication gate, revisions and the settlement series, the calendar, governance and limitations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getVaultMarketIndexMethodology();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketIndexMethodology: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\GetVaultMarketIndexMethodologyResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketInstantExit()`

```php
getVaultMarketInstantExit(): \Crossly\Model\Vault\GetVaultMarketInstantExitResponse
```

The Instant Exit quote for one vault unit you hold: the best resting bid on its book key (anyone's, dealers' included), its share of the mark, the bid depth, and whether it can be taken now.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getVaultMarketInstantExit();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketInstantExit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\GetVaultMarketInstantExitResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketJoint()`

```php
getVaultMarketJoint(): \Crossly\Model\Vault\GetVaultMarketJointResponse
```

Your joint vaults and the invitations waiting for you, with the gate (open, missing env), the joint terms in words and what each right allows. A JointVaultsHome object, not a collection.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getVaultMarketJoint();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketJoint: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\GetVaultMarketJointResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketJointById()`

```php
getVaultMarketJointById($id): \Crossly\Model\Vault\GetVaultMarketJointByIdResponse
```

One joint vault (active members only): members and rights, the units in it at the mark with each owner of record, totals, recent joint trades, and the activity from the audit trail.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getVaultMarketJointById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketJointById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Vault\GetVaultMarketJointByIdResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketKeyStat()`

```php
getVaultMarketKeyStat($book_key): \Crossly\Model\Vault\GetVaultMarketKeyStatResponse
```

Everything derived about one book key in one read: the Crossly Estimate, the liquidity score, risk statistics and the gem rate. A part that cannot be read is `{ error }`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$book_key = 'book_key_example'; // string

try {
    $result = $apiInstance->getVaultMarketKeyStat($book_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketKeyStat: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **book_key** | **string**|  |

### Return type

**\Crossly\Model\Vault\GetVaultMarketKeyStatResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketLearn()`

```php
getVaultMarketLearn(): \Crossly\Model\Vault\GetVaultMarketLearnResponse
```

The Learn hub: each concept with whether you passed its quiz. Passing earns cosmetic pins only.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getVaultMarketLearn();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketLearn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\GetVaultMarketLearnResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketLearnByConcept()`

```php
getVaultMarketLearnByConcept($concept): \Crossly\Model\Vault\GetVaultMarketLearnByConceptResponse
```

One Learn concept: its sections and quiz questions (no answers).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$concept = 'concept_example'; // string

try {
    $result = $apiInstance->getVaultMarketLearnByConcept($concept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketLearnByConcept: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **concept** | **string**|  |

### Return type

**\Crossly\Model\Vault\GetVaultMarketLearnByConceptResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketLendingElection()`

```php
getVaultMarketLendingElection(): \Crossly\Model\Vault\GetVaultMarketLendingElectionResponse
```

Your lender election: `returnInKind` (shorts post 175% collateral, a 14-day buy-in, never cash-settled) and `allowTerm` (your units may go out on 30/90-day fixed-rate term loans, not recallable before term).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getVaultMarketLendingElection();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketLendingElection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\GetVaultMarketLendingElectionResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketLendingProgramme()`

```php
getVaultMarketLendingProgramme(): \Crossly\Model\Vault\GetVaultMarketLendingProgrammeResponse
```

Your lender programme report: lendable units, units out, utilisation, fee revenue (accrued / paid), term loans and return-in-kind loans in force, and each loan's rate against the key's rate today.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getVaultMarketLendingProgramme();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketLendingProgramme: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\GetVaultMarketLendingProgrammeResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketLendingStatement()`

```php
getVaultMarketLendingStatement(): \Crossly\Model\Vault\GetVaultMarketLendingStatementResponse
```

Your daily collateral statement as a lender (today live, or `day`): per open loan the mark and its quality, fees owed to you, the short's collateral share at the custodian and its coverage against 105% of mark + fees. A unit without a mark usable for risk shows no coverage number.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getVaultMarketLendingStatement();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketLendingStatement: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\GetVaultMarketLendingStatementResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketLiquidity()`

```php
getVaultMarketLiquidity($book_key): \Crossly\Model\Vault\GetVaultMarketLiquidityResponse
```

The liquidity score (0-100) of a book key and every component behind it: trades in 30/90 days, distinct counterparties, median days between trades, time-weighted quoted spread, two-sided share and depth within 5% (hourly book snapshots), Amihud and Roll. Each component is a percentile within the category. No score under the data threshold.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$book_key = 'book_key_example'; // string

try {
    $result = $apiInstance->getVaultMarketLiquidity($book_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketLiquidity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **book_key** | **string**|  |

### Return type

**\Crossly\Model\Vault\GetVaultMarketLiquidityResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketLoanQuote()`

```php
getVaultMarketLoanQuote(): \Crossly\Model\Vault\GetVaultMarketLoanQuoteResponse
```

How much you can borrow against vault units (`vaultItemIds`, comma-separated; none = every stored unit you hold): each unit's tier, mark and limit, the pool's rate and yours.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getVaultMarketLoanQuote();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketLoanQuote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\GetVaultMarketLoanQuoteResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketLoanUnitSaleFloor()`

```php
getVaultMarketLoanUnitSaleFloor($id, $vault_item_id): \Crossly\Model\Vault\GetVaultMarketLoanUnitSaleFloorResponse
```

The lowest price a pledged unit can be sold at to repay its loan: after the sale (less the vault fee and storage) what is still owed must fit inside the other units' limit.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$vault_item_id = 'vault_item_id_example'; // string

try {
    $result = $apiInstance->getVaultMarketLoanUnitSaleFloor($id, $vault_item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketLoanUnitSaleFloor: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **vault_item_id** | **string**|  |

### Return type

**\Crossly\Model\Vault\GetVaultMarketLoanUnitSaleFloorResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketLocate()`

```php
getVaultMarketLocate(): \Crossly\Model\Vault\GetVaultMarketLocateResponse
```

A locate quote: how many units of `key` (a book key) you could borrow now (up to `qty`), the indicative rate (APR bps; `termDays` 30 or 90 for a fixed-rate term loan), and the collateral they need (150%, or 175% for units whose lenders elected return in kind only). Holds nothing; POST to hold.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getVaultMarketLocate();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketLocate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\GetVaultMarketLocateResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketMark()`

```php
getVaultMarketMark($book_key): \Crossly\Model\Vault\GetVaultMarketMarkResponse
```

One book key mark with everything behind it: the price in cents, its quality (A trade-anchored, B firm two-sided, C indicative, none), its confidence in bps and the band in cents, when it was computed, whether risk may act on it (judged for margin), the related key it was implied from (impliedFrom: a grade, the model median of the other sizes, or an index; null when none), every stored input, and the learned relations it may be implied from.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$book_key = 'book_key_example'; // string

try {
    $result = $apiInstance->getVaultMarketMark($book_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketMark: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **book_key** | **string**|  |

### Return type

**\Crossly\Model\Vault\GetVaultMarketMarkResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketMarket()`

```php
getVaultMarketMarket(): \Crossly\Model\Vault\GetVaultMarketMarketResponse
```

One book key (variantId:condition:gradeKey): its mark and history, lending depth and borrow rate, open interest and live auctions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getVaultMarketMarket();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketMarket: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\GetVaultMarketMarketResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketMarketModel()`

```php
getVaultMarketMarketModel($book_key): \Crossly\Model\Vault\GetVaultMarketMarketModelResponse
```

How a book key trades: its liquidity tier (A continuous, B call auction every 15 minutes, C daily call, D listings only), the call collecting now with its indicative price and volume and nominal close, the next call, the LULD band and any limit state, pause or halt.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$book_key = 'book_key_example'; // string

try {
    $result = $apiInstance->getVaultMarketMarketModel($book_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketMarketModel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **book_key** | **string**|  |

### Return type

**\Crossly\Model\Vault\GetVaultMarketMarketModelResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketMm()`

```php
getVaultMarketMm(): \Crossly\Model\Vault\GetVaultMarketMmResponse
```

Your market-maker programmes, the last 30 days of obligations, rebates earned (paid only from fees already taken), and the rules.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getVaultMarketMm();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketMm: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\GetVaultMarketMmResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketMmKey()`

```php
getVaultMarketMmKey(): \Crossly\Model\Vault\GetVaultMarketMmKeyResponse
```

A key's designated market maker (by the name it chose) and how many LPs quote it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getVaultMarketMmKey();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketMmKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\GetVaultMarketMmKeyResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketMmMmp()`

```php
getVaultMarketMmMmp(): \Crossly\Model\Vault\GetVaultMarketMmMmpResponse
```

Your market-maker protection: the fill trigger, the freeze, and whether you are frozen now.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getVaultMarketMmMmp();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketMmMmp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\GetVaultMarketMmMmpResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketMode()`

```php
getVaultMarketMode(): \Crossly\Model\Vault\GetVaultMarketModeResponse
```

Your Vault Markets mode: simple (buy, sell and what it is worth) or pro (the full terminal), whether you chose it or it was set for you (new people start in simple; people already trading start in pro), and when.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getVaultMarketMode();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketMode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\GetVaultMarketModeResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketNav()`

```php
getVaultMarketNav(): \Crossly\Model\Vault\GetVaultMarketNavResponse
```

Mark NAV, bid NAV (the resting bids) and liquidation NAV (the bids at 20% of ADV for 10 days), holding by holding, each with its ASC 820 level, mark quality and source, and your administrator's price when uploaded.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getVaultMarketNav();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketNav: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\GetVaultMarketNavResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketNavFile()`

```php
getVaultMarketNavFile($format): string
```

The NAV as a csv, pdf or json file.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$format = 'format_example'; // string

try {
    $result = $apiInstance->getVaultMarketNavFile($format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketNavFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **format** | **string**|  |

### Return type

**string**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/csv`, `application/pdf`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketOpening()`

```php
getVaultMarketOpening($slug): \Crossly\Model\Vault\ListVaultMarketOpeningItem
```

One opening key.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string

try {
    $result = $apiInstance->getVaultMarketOpening($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketOpening: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **slug** | **string**|  |

### Return type

**\Crossly\Model\Vault\ListVaultMarketOpeningItem**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketOracle()`

```php
getVaultMarketOracle(): \Crossly\Model\Vault\GetVaultMarketOracleResponse
```

Crossly as an oracle publisher (needs CROSSLY_ORACLE_PUBLISHER_KEY + CROSSLY_ORACLE_NETWORK): the network (pyth or switchboard), the ed25519 key every value is signed with, each published index feed with its latest attempt, and 24 h counts of published, skipped and failed. Only built-in indexes priced from A/B marks are published; Crossly never reads its own feed back.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getVaultMarketOracle();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketOracle: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\GetVaultMarketOracleResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketOracleBySlug()`

```php
getVaultMarketOracleBySlug($slug): \Crossly\Model\Vault\GetVaultMarketOracleBySlugResponse
```

The latest published oracle value for an index: level, fixed-point price and confidence at the feed exponent, confidence in bps, staleness in seconds, coverage, the exact signed message and its ed25519 signature with the signer key, and whether it is fresh.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string

try {
    $result = $apiInstance->getVaultMarketOracleBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketOracleBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **slug** | **string**|  |

### Return type

**\Crossly\Model\Vault\GetVaultMarketOracleBySlugResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketOrderHandling()`

```php
getVaultMarketOrderHandling(): \Crossly\Model\Vault\GetVaultMarketOrderHandlingResponse
```

How orders are handled (the 606/607-style disclosure): one book, self-trade prevention, protected market orders, liquidations by auction, halts, dealers and fees.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getVaultMarketOrderHandling();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketOrderHandling: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\GetVaultMarketOrderHandlingResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketP2pDashboard()`

```php
getVaultMarketP2pDashboard(): \Crossly\Model\Vault\GetVaultMarketP2pDashboardResponse
```

Peer-to-peer vault loans at a glance: what you owe as a borrower and are owed as a lender (principal + interest to the second), daily interest, called loans, your open offers, the gates and the rules (auction hours, rate ceiling, size bounds, call grace).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getVaultMarketP2pDashboard();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketP2pDashboard: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\GetVaultMarketP2pDashboardResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketP2pLoan()`

```php
getVaultMarketP2pLoan($id): \Crossly\Model\Vault\GetVaultMarketP2pLoanResponse
```

One P2P loan with its money log (fund, repay, refinance). A loan in a running refinancing auction can be read by any lender, without the log.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getVaultMarketP2pLoan($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketP2pLoan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Vault\GetVaultMarketP2pLoanResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketPaper()`

```php
getVaultMarketPaper(): \Crossly\Model\Vault\GetVaultMarketPaperResponse
```

Your paper trading account (play money only, never real or convertible; opened at $10,000 the first time): play cash, buying power, paper positions at the real marks, P&L, working paper orders, recent paper fills and this week on the leaderboard.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getVaultMarketPaper();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketPaper: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\GetVaultMarketPaperResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketPaperQuote()`

```php
getVaultMarketPaperQuote(): \Crossly\Model\Vault\GetVaultMarketPaperQuoteResponse
```

What a paper order would fill against the real book now, without placing it: units fillable inside the limit (a market order uses the 5% protection band around the mark), average price, simulated fee, and the queue ahead of any rest.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getVaultMarketPaperQuote();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketPaperQuote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\GetVaultMarketPaperQuoteResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketPartnerMe()`

```php
getVaultMarketPartnerMe(): \Crossly\Model\Vault\GetVaultMarketPartnerMeResponse
```

Your Vault Drop-off Partnership (null when you never applied): status, partner code, fee share and cap, totals and batches.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getVaultMarketPartnerMe();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketPartnerMe: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\GetVaultMarketPartnerMeResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketPool()`

```php
getVaultMarketPool(): \Crossly\Model\Vault\GetVaultMarketPoolResponse
```

The CBX market staking pool: size, value, what it lends, utilisation, rate, insurance fund.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getVaultMarketPool();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketPool: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\GetVaultMarketPoolResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketPopReport()`

```php
getVaultMarketPopReport($book_key): \Crossly\Model\Vault\GetVaultMarketPopReportResponse
```

Grading population report for one market (`bookKey`): focus (on a graded market: its grade, pop = copies graded at exactly that grade, higher = copies graded better by the same grader, total, asOf and source), graders (each grader ladder for the card, best grade first, from one report: the newest, the population feed over a hand entry on the same date), provider.connected, and status (ok, not_synced, no_report or no_source) with explain, which says in plain words what is missing. source is provider (the population feed) or ops (entered by Crossly from the grader published report). Counts only, never a price.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$book_key = 'book_key_example'; // string | variantId:condition:gradeKey, grade \"-\" when ungraded.

try {
    $result = $apiInstance->getVaultMarketPopReport($book_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketPopReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **book_key** | **string**| variantId:condition:gradeKey, grade \&quot;-\&quot; when ungraded. |

### Return type

**\Crossly\Model\Vault\GetVaultMarketPopReportResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketPortfolio()`

```php
getVaultMarketPortfolio(): \Crossly\Model\Vault\GetVaultMarketPortfolioResponse
```

Your vault holdings at the market price, with cost and P&L, and units you have out on loan.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getVaultMarketPortfolio();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketPortfolio: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\GetVaultMarketPortfolioResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketPortfolioHistory()`

```php
getVaultMarketPortfolioHistory(): \Crossly\Model\Vault\GetVaultMarketPortfolioHistoryResponse
```

Your Vault Markets value by day at the marks (vault units, units on loan, positions) and today's return against yesterday's close.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getVaultMarketPortfolioHistory();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketPortfolioHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\GetVaultMarketPortfolioHistoryResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketPortfolioMargin()`

```php
getVaultMarketPortfolioMargin(): \Crossly\Model\Vault\GetVaultMarketPortfolioMarginResponse
```

Portfolio margin for a firm sub-account (`subaccountId`): eligibility with every reason (ECP, KYB, minimum equity $500k or $100k with evidenced intraday monitoring), whether it is enrolled, the latest requirement, equity, excess and state (healthy, call or buy_in), the breakdown by category and item, the partner index futures counted, and the policy. Before enrolling, a live preview.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getVaultMarketPortfolioMargin();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketPortfolioMargin: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\GetVaultMarketPortfolioMarginResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketPosition()`

```php
getVaultMarketPosition($id): \Crossly\Model\Vault\GetVaultMarketPositionResponse
```

One position with its loans, auctions and custodian instruction log.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getVaultMarketPosition($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketPosition: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Vault\GetVaultMarketPositionResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketPositionExit()`

```php
getVaultMarketPositionExit($id): \Crossly\Model\Vault\GetVaultMarketPositionExitResponse
```

A position's take-profit / stop-loss, if set.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getVaultMarketPositionExit($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketPositionExit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Vault\GetVaultMarketPositionExitResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketPositionRisk()`

```php
getVaultMarketPositionRisk($id): \Crossly\Model\Vault\ListVaultMarketPositionsRiskItem
```

One position's call and liquidation marks.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getVaultMarketPositionRisk($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketPositionRisk: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Vault\ListVaultMarketPositionsRiskItem**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketPress()`

```php
getVaultMarketPress(): \Crossly\Model\Vault\GetVaultMarketPressResponse
```

The press kit: each built-in index with level, quality, n, CSV link and a \"cite as\" line, plus the methodology links.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getVaultMarketPress();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketPress: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\GetVaultMarketPressResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketPriceWidget()`

```php
getVaultMarketPriceWidget($id): \Crossly\Model\Vault\ListVaultMarketPriceWidgetsItem
```

One of your price widgets, with its iframe and script-tag snippets and URLs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getVaultMarketPriceWidget($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketPriceWidget: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Vault\ListVaultMarketPriceWidgetsItem**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketProDepth()`

```php
getVaultMarketProDepth(): \Crossly\Model\Vault\GetVaultMarketProDepthResponse
```

The L2 depth ladder: price levels and units per side, best first; asks show how many units are authenticated vault stock.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getVaultMarketProDepth();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketProDepth: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\GetVaultMarketProDepthResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketProOrder()`

```php
getVaultMarketProOrder($id): \Crossly\Model\Vault\GetVaultMarketProOrderResponse
```

One order with its full event log.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getVaultMarketProOrder($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketProOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Vault\GetVaultMarketProOrderResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketProSnapshot()`

```php
getVaultMarketProSnapshot(): \Crossly\Model\Vault\GetVaultMarketProSnapshotResponse
```

A book key's depth (20 levels a side), last 50 trades, 24 h stats, mark and any halt, in one call.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getVaultMarketProSnapshot();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketProSnapshot: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\GetVaultMarketProSnapshotResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketProStat()`

```php
getVaultMarketProStat(): \Crossly\Model\Vault\GetVaultMarketProStatResponse
```

24 h open, high, low, last, volume and change on a book key.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getVaultMarketProStat();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketProStat: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\GetVaultMarketProStatResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketProStream()`

```php
getVaultMarketProStream(): string
```

A long-lived text/event-stream for a book key: `snapshot` first, then `depth`, `trades`, `mark` and `halt` events as they change.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getVaultMarketProStream();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketProStream: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**string**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/event-stream`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketProfile()`

```php
getVaultMarketProfile(): \Crossly\Model\Vault\GetVaultMarketProfileResponse
```

Your public vault profile switch: on or off, whether followers see new buys, your profile URL and follower count.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getVaultMarketProfile();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\GetVaultMarketProfileResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketProfileByHandle()`

```php
getVaultMarketProfileByHandle($handle): \Crossly\Model\Vault\GetVaultMarketProfileByHandleResponse
```

Someone's public vault: each market's weight (bps of the marked value), followers, whether you follow, their recent buys (no prices).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$handle = 'handle_example'; // string

try {
    $result = $apiInstance->getVaultMarketProfileByHandle($handle);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketProfileByHandle: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**|  |

### Return type

**\Crossly\Model\Vault\GetVaultMarketProfileByHandleResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketProofOfReserve()`

```php
getVaultMarketProofOfReserve(): \Crossly\Model\Vault\GetVaultMarketProofOfReserveResponse
```

Proof of reserves: the latest daily Merkle root over every unit in custody (leaf count, stored / listed / grading / withdrawing, pledged, on loan, open loans, receipts, insured value), its Solana memo anchor when VAULT_POR_ANCHOR_KEY is set, the last `days` roots, and the exact hashing method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getVaultMarketProofOfReserve();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketProofOfReserve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\GetVaultMarketProofOfReserveResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketProofOfReserveByDay()`

```php
getVaultMarketProofOfReserveByDay($day): \Crossly\Model\Vault\GetVaultMarketProofOfReserveByDayResponse
```

One day's proof-of-reserves snapshot (root, counts, anchor).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$day = 'day_example'; // string

try {
    $result = $apiInstance->getVaultMarketProofOfReserveByDay($day);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketProofOfReserveByDay: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **day** | **string**|  |

### Return type

**\Crossly\Model\Vault\GetVaultMarketProofOfReserveByDayResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketProofOfReserveMe()`

```php
getVaultMarketProofOfReserveMe(): \Crossly\Model\Vault\GetVaultMarketProofOfReserveMeResponse
```

Your inclusion proofs for a day (latest by default): each of your units' leaf fields, salt, owner commitment, leaf hash and sibling path. Verify with your OWN user id: commitment = SHA-256(JSON[\"crossly-por-owner-v1\", userId, salt]); then the leaf; then climb the path to the published root.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getVaultMarketProofOfReserveMe();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketProofOfReserveMe: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\GetVaultMarketProofOfReserveMeResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketRate()`

```php
getVaultMarketRate(): \Crossly\Model\Vault\GetVaultMarketRateResponse
```

Daily borrow APR (lent units) and pool APR on a book key, with the pool as a whole, oldest first.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getVaultMarketRate();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketRate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\GetVaultMarketRateResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketReport()`

```php
getVaultMarketReport(): \Crossly\Model\Vault\GetVaultMarketReportResponse
```

The quarterly Crossly Vault Report (`quarter` like 2026-q3; default the latest): index levels, top movers, most-lent markets, grade premiums. Book data only.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getVaultMarketReport();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\GetVaultMarketReportResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketRfq()`

```php
getVaultMarketRfq($id): \Crossly\Model\Vault\GetVaultMarketRfqResponse
```

One quote request: the requester sees every answer (anonymous); a responder sees the request and their own answer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getVaultMarketRfq($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketRfq: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Vault\GetVaultMarketRfqResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketRiskReport()`

```php
getVaultMarketRiskReport(): \Crossly\Model\Vault\GetVaultMarketRiskReportResponse
```

Historical VaR 95/99 1d/10d and Bangia LVaR (model figures: labelled, with n and a band, null below the data threshold), stress scenarios (category −30%, CBX −50%, books thin to 25%, index drawdowns), concentration and counterparty exposure.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getVaultMarketRiskReport();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketRiskReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\GetVaultMarketRiskReportResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketRiskStat()`

```php
getVaultMarketRiskStat($book_key): \Crossly\Model\Vault\GetVaultMarketRiskStatResponse
```

Risk statistics for a book key (weekly returns from A-quality marks only) or an index slug (its closes): annualised volatility raw and Geltner-desmoothed (labelled), max drawdown and beta to the Composite. Needs 26 weekly returns, else no numbers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$book_key = 'book_key_example'; // string

try {
    $result = $apiInstance->getVaultMarketRiskStat($book_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketRiskStat: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **book_key** | **string**|  |

### Return type

**\Crossly\Model\Vault\GetVaultMarketRiskStatResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketSetGoal()`

```php
getVaultMarketSetGoal($id): \Crossly\Model\Vault\GetVaultMarketSetGoalResponse
```

One set goal: every piece in the set order, held (with the vault unit) or missing (with the cheapest marked book key that meets the target and its mark), the conditions and grades seen, and the working basket bid with its legs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getVaultMarketSetGoal($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketSetGoal: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Vault\GetVaultMarketSetGoalResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketSetGoalBasketPlan()`

```php
getVaultMarketSetGoalBasketPlan($id): \Crossly\Model\Vault\GetVaultMarketSetGoalBasketPlanResponse
```

What a basket bid would place now, without placing it: one leg per missing piece (cheapest first, the mark plus maxBpsOverMark as the limit), the pieces skipped and why, and the most it can cost (limits plus the worst-case buyer fee), never more than budgetCents.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getVaultMarketSetGoalBasketPlan($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketSetGoalBasketPlan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Vault\GetVaultMarketSetGoalBasketPlanResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketShareCard()`

```php
getVaultMarketShareCard($id): \Crossly\Model\Vault\ListVaultMarketShareCardsItem
```

One share card as the public sees it, with its image and link paths.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getVaultMarketShareCard($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketShareCard: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Vault\ListVaultMarketShareCardsItem**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketStatement()`

```php
getVaultMarketStatement(): \Crossly\Model\Vault\GetVaultMarketStatementResponse
```

The last 24 months with whether each statement is issued (frozen, with its sha256).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getVaultMarketStatement();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketStatement: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\GetVaultMarketStatementResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketStatementByMonth()`

```php
getVaultMarketStatementByMonth($month): \Crossly\Model\Vault\GetVaultMarketStatementByMonthResponse
```

A monthly statement (`month` like 2026-10): units held at month end, loans, pledges, positions, fills, fees, storage, and cash quoted from the custodian and labelled as its record. Issued (frozen) once the month ends.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$month = 'month_example'; // string

try {
    $result = $apiInstance->getVaultMarketStatementByMonth($month);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketStatementByMonth: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **month** | **string**|  |

### Return type

**\Crossly\Model\Vault\GetVaultMarketStatementByMonthResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketStatementFile()`

```php
getVaultMarketStatementFile($month, $format): string
```

A monthly statement as a csv, pdf or json file.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$month = 'month_example'; // string
$format = 'format_example'; // string

try {
    $result = $apiInstance->getVaultMarketStatementFile($month, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketStatementFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **month** | **string**|  |
 **format** | **string**|  |

### Return type

**string**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/csv`, `application/pdf`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketSupply()`

```php
getVaultMarketSupply(): \Crossly\Model\Vault\GetVaultMarketSupplyResponse
```

A book key's units in the vault and authentications passed, by day (oldest first, today live).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getVaultMarketSupply();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketSupply: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\GetVaultMarketSupplyResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketSupplyBatch()`

```php
getVaultMarketSupplyBatch($id): \Crossly\Model\Vault\GetVaultMarketSupplyBatchResponse
```

A box sent to the vault: its prepaid label and tracking, or why it has no label.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getVaultMarketSupplyBatch($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketSupplyBatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Vault\GetVaultMarketSupplyBatchResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketSupplyRoundUp()`

```php
getVaultMarketSupplyRoundUp(): \Crossly\Model\Vault\GetVaultMarketSupplyRoundUpResponse
```

Your seller round-up: the share of each payout that sets a vault buy's budget, the budget so far and what it is doing. `roundUp` is null when none is set.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getVaultMarketSupplyRoundUp();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketSupplyRoundUp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\GetVaultMarketSupplyRoundUpResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketTax()`

```php
getVaultMarketTax(): \Crossly\Model\Vault\GetVaultMarketTaxResponse
```

Your tax year on the vault markets: units bought and sold with cost, proceeds, gain and term; lending fees, staking interest (estimate), market-maker rewards; closed positions. Links to the CSV and PDF.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getVaultMarketTax();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketTax: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\GetVaultMarketTaxResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketTaxCsv()`

```php
getVaultMarketTaxCsv(): string
```

The tax year as a CSV: one row per sale, purchase, gift, income line and closed position.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getVaultMarketTaxCsv();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketTaxCsv: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**string**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/csv`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketTaxLossSuggestion()`

```php
getVaultMarketTaxLossSuggestion(): \Crossly\Model\Vault\GetVaultMarketTaxLossSuggestionResponse
```

Tax-loss suggestions: the units you hold whose mark is below your cost, each with its lot (acquired when and how, cost in cents), short or long term if sold today and the day a short lot turns long, the estimated loss at the mark before selling fees, mark quality, what stops a sale, and a link to the ordinary sell ticket. With totals by term, the gains realised so far this year, and a not-tax-advice disclosure. Never sells.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getVaultMarketTaxLossSuggestion();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketTaxLossSuggestion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\GetVaultMarketTaxLossSuggestionResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketTaxPdf()`

```php
getVaultMarketTaxPdf(): \SplFileObject
```

The tax year as a PDF summary.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getVaultMarketTaxPdf();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketTaxPdf: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\SplFileObject**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/pdf`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketTca()`

```php
getVaultMarketTca(): \Crossly\Model\Vault\GetVaultMarketTcaResponse
```

Your pro orders in a window (`from`, `to`; default 90 days) with arrival mark and mid, average fill, implementation shortfall, slippage, fill rate and time to fill.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getVaultMarketTca();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketTca: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\GetVaultMarketTcaResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketTcaByOrderId()`

```php
getVaultMarketTcaByOrderId($order_id): \Crossly\Model\Vault\GetVaultMarketTcaByOrderIdResponse
```

One order's TCA, including slippage against the VWAP of eligible trades while it worked.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string

try {
    $result = $apiInstance->getVaultMarketTcaByOrderId($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketTcaByOrderId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**|  |

### Return type

**\Crossly\Model\Vault\GetVaultMarketTcaByOrderIdResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketTod()`

```php
getVaultMarketTod(): \Crossly\Model\Vault\GetVaultMarketTodResponse
```

Your transfer-on-death setup: the gate and terms, whether you accepted them, your beneficiaries and shares, units with their designations and who the plan gives them to today, and open claims on your account (which you can stop). A TodOverview object, not a collection.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getVaultMarketTod();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketTod: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\GetVaultMarketTodResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketTodMyClaim()`

```php
getVaultMarketTodMyClaim(): \Crossly\Model\Vault\GetVaultMarketTodMyClaimResponse
```

Claims you filed as a beneficiary: status in words, documents sent (names only), the waiting period, and units moved or held. A TodMyClaims object, not a collection.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getVaultMarketTodMyClaim();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketTodMyClaim: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\GetVaultMarketTodMyClaimResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketUnitAr()`

```php
getVaultMarketUnitAr($id): \Crossly\Model\Vault\GetVaultMarketUnitArResponse
```

A vault unit as an AR model, for \"See it in your room\" (the web's /ar/vault-<id> page hands it to Scene Viewer, WebXR or Quick Look): title, model (a path under /models, without .glb, at real size), scanUrl (the unit's own captured mesh, when it has one), imageUrl, art, tint, scale, bookKey, backPath and mine. Your own units always; somebody else's only while they show it to visitors in a home you may enter (else 404).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getVaultMarketUnitAr($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketUnitAr: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Vault\GetVaultMarketUnitArResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketUnitEvidence()`

```php
getVaultMarketUnitEvidence($id): \Crossly\Model\Vault\GetVaultMarketUnitEvidenceResponse
```

Evidence on a vault unit:its 3D scans (model, texture, listing photos) and its grade report (grader, grade, cert, verified against the grader record, hub intake photos). No owner identity.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getVaultMarketUnitEvidence($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketUnitEvidence: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Vault\GetVaultMarketUnitEvidenceResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketUnitQuote()`

```php
getVaultMarketUnitQuote($id): \Crossly\Model\Vault\GetVaultMarketUnitQuoteResponse
```

The market around a vault unit: its mark and source, the best bid that could take it, the Instant Exit price (the best bid) and a pack pull's own sell-back credit.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getVaultMarketUnitQuote($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketUnitQuote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Vault\GetVaultMarketUnitQuoteResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketUnitStory()`

```php
getVaultMarketUnitStory($id): \Crossly\Model\Vault\GetVaultMarketUnitStoryResponse
```

One vault unit's story, oldest first: intake (with scan and grade evidence when it has some), grades, owners, sales at their prices, loans, pledges, Hall of Grails exhibitions, receipt-token exports and redemptions, and each warehouse-receipt hash-chain step (re-verified on read: chain.ok). People are named only while their public vault profile is on; others are 'A collector'.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getVaultMarketUnitStory($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketUnitStory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Vault\GetVaultMarketUnitStoryResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketValuationStatement()`

```php
getVaultMarketValuationStatement($id): \Crossly\Model\Vault\GetVaultMarketValuationStatementResponse
```

One statement you issued: every unit, the totals by mark quality, the methodology, its sha256, its audit-chain seal and the verify link.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getVaultMarketValuationStatement($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketValuationStatement: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Vault\GetVaultMarketValuationStatementResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketValuationStatementPdf()`

```php
getVaultMarketValuationStatementPdf($id): \SplFileObject
```

One statement you issued as a PDF.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getVaultMarketValuationStatementPdf($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketValuationStatementPdf: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\SplFileObject**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/pdf`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketValuationStatementPreview()`

```php
getVaultMarketValuationStatementPreview(): \Crossly\Model\Vault\GetVaultMarketValuationStatementPreviewResponse
```

An insurance or appraisal statement for a day (purpose, asOf YYYY-MM-DD, default today), built but not issued: every unit you held that day at its mark, with quality, last trade, grade and cert, and the total. No id, no hash.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getVaultMarketValuationStatementPreview();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketValuationStatementPreview: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\GetVaultMarketValuationStatementPreviewResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketValuationStatementVerify()`

```php
getVaultMarketValuationStatementVerify($id): \Crossly\Model\Vault\GetVaultMarketValuationStatementVerifyResponse
```

Check any issued statement by its id, as an insurer would: purpose, date, totals by mark quality and the sha256; intact (the stored record still hashes to it), seal.ok (its audit-chain entry still carries it) and, with ?hash=, whether yours matches. Never the holder or the units.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getVaultMarketValuationStatementVerify($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketValuationStatementVerify: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Vault\GetVaultMarketValuationStatementVerifyResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketValue()`

```php
getVaultMarketValue(): \Crossly\Model\Vault\GetVaultMarketValueResponse
```

A catalogue item's vault book keys (`?skuId=`, optional `variantId`): each key's display mark with quality and n, units in the vault, the Instant Exit price a holder would get now, and whether it can be shipped in (ungraded keys).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getVaultMarketValue();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketValue: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\GetVaultMarketValueResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketVaultSuggestionItem()`

```php
getVaultMarketVaultSuggestionItem($id): \Crossly\Model\Vault\GetVaultMarketVaultSuggestionItemResponse
```

One inventory item: its vault suggestion, or in plain words why there is none (`status`: suggested, not_found, no_stock, not_matched, in_vault or no_market).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getVaultMarketVaultSuggestionItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketVaultSuggestionItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Vault\GetVaultMarketVaultSuggestionItemResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketWidgetIndex()`

```php
getVaultMarketWidgetIndex($slug): \Crossly\Model\Vault\GetVaultMarketWidgetIndexResponse
```

What the <crossly-index> widget shows: level, closes, quality, n, as-of, or `insufficient`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string

try {
    $result = $apiInstance->getVaultMarketWidgetIndex($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketWidgetIndex: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **slug** | **string**|  |

### Return type

**\Crossly\Model\Vault\GetVaultMarketWidgetIndexResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketWidgetMark()`

```php
getVaultMarketWidgetMark(): \Crossly\Model\Vault\GetVaultMarketWidgetMarkResponse
```

What the <crossly-mark> widget shows for `bookKey`: mark, quality, trades over 30 days, as-of, sparkline, or `insufficient`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getVaultMarketWidgetMark();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketWidgetMark: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\GetVaultMarketWidgetMarkResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketWidgetSummary()`

```php
getVaultMarketWidgetSummary(): \Crossly\Model\Vault\GetVaultMarketWidgetSummaryResponse
```

The home-screen widget summary: portfolio value at the mark with its move since the previous marks (cents and bps) and the share resting on reliable A/B marks, the three biggest movers among what you hold (the market movers when you hold nothing; `movers.source` says which), and one watchlist key (`?key=` a book key on your watchlist; else your newest watch) with a 14-day sparkline. Every price is from the Crossly order book and carries its mark quality (A, B, C or none). Cached for five minutes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getVaultMarketWidgetSummary();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketWidgetSummary: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\GetVaultMarketWidgetSummaryResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketWorldFloor()`

```php
getVaultMarketWorldFloor(): \Crossly\Model\Vault\GetVaultMarketWorldFloorResponse
```

The Trading Floor in Crossly World: trades (the newest trades on every vault book in the last day, at most 40, newest first: bookKey, name, priceCents, priceText, side -- buy when a buyer took an ask, sell when a seller hit a bid, cross for an auction -- and ageS), tickers (the big board: the most-traded markets, each with its last trade price, the change from the last trade before today in basis points, trades today and the display mark with its quality), bell (Market Open: ringing for ten minutes after a new key opens, with the key and its market link, and what opens next) and trades24h. Every price is a trade on the Crossly order book; it never shows who traded. Nothing can be traded in the room.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getVaultMarketWorldFloor();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketWorldFloor: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\GetVaultMarketWorldFloorResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketWorldLounge()`

```php
getVaultMarketWorldLounge(): \Crossly\Model\Vault\GetVaultMarketWorldLoungeResponse
```

The Vault Holders Lounge: the rule to join (held value at reliable marks, or a unit count), whether you may join now and what you hold toward it. Anyone may look in; only holders are seen there. No perks, nothing to trade.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getVaultMarketWorldLounge();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketWorldLounge: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\GetVaultMarketWorldLoungeResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketWorldPlaceVaultGate()`

```php
getVaultMarketWorldPlaceVaultGate($place): \Crossly\Model\Vault\GetVaultMarketWorldPlaceVaultGateResponse
```

The vault-holder door on a Crossly World room or Space, by its presence slug (a room share slug, or space-<slug>): the rule (minValueCents held at reliable A/B marks and/or minUnits units, mode any or all, optionally one product, bullion family or category), the rule in words, and whether you may join now with what you hold toward it. gate is null when the place has no vault door. Anyone may look in; only holders join.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$place = 'place_example'; // string

try {
    $result = $apiInstance->getVaultMarketWorldPlaceVaultGate($place);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketWorldPlaceVaultGate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **place** | **string**|  |

### Return type

**\Crossly\Model\Vault\GetVaultMarketWorldPlaceVaultGateResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketWorth()`

```php
getVaultMarketWorth(): \Crossly\Model\Vault\GetVaultMarketWorthResponse
```

What one book key (variantId:condition:gradeKey, `bookKey`) is worth: the mark in cents with its quality (A from trades, B from firm quotes, C indicative, none) and band, what Instant Exit would pay for one unit now from the best resting bid (yours left out), and your units: how many you hold, how many are free to sell, their value at the mark and what selling every free one now would fetch from today’s bids. Plain-words `headline` and `lines`. Read only.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getVaultMarketWorth();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketWorth: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\GetVaultMarketWorthResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultMarketWorthVault()`

```php
getVaultMarketWorthVault(): \Crossly\Model\Vault\GetVaultMarketWorthVaultResponse
```

What your whole vault is worth now: value at the marks split into reliable and indicative marks, cost and P&L, today’s change, and an estimate of what the units free to sell would fetch from the bids resting on the book now. Read only.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getVaultMarketWorthVault();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultMarketWorthVault: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\GetVaultMarketWorthVaultResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultReceipt()`

```php
getVaultReceipt($receipt_no): \Crossly\Model\Vault\GetVaultReceiptResponse
```

One of your receipts with its full hash chain (issued, transferred, pledged, released, surrendered), re-verified on read: `chain.ok` is false if any event was altered.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$receipt_no = 'receipt_no_example'; // string

try {
    $result = $apiInstance->getVaultReceipt($receipt_no);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultReceipt: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **receipt_no** | **string**|  |

### Return type

**\Crossly\Model\Vault\GetVaultReceiptResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultReceiptToken()`

```php
getVaultReceiptToken($id): \Crossly\Model\Vault\GetVaultReceiptTokenResponse
```

One receipt token (yours, or on a unit you own now) with its chain log: built, minted, frozen, thawed, new holder seen, redeem built, burned, with explorer links.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getVaultReceiptToken($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultReceiptToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Vault\GetVaultReceiptTokenResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getVaultReceiptTokenByMint()`

```php
getVaultReceiptTokenByMint($mint): \Crossly\Model\Vault\GetVaultReceiptTokenByMintResponse
```

What a Solana mint is: the warehouse receipt number and item it stands for, and whether the token is live, frozen (unit pledged or lent) or burned, and whether the unit is still on a vault shelf. Names no person and no wallet.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mint = 'mint_example'; // string

try {
    $result = $apiInstance->getVaultReceiptTokenByMint($mint);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->getVaultReceiptTokenByMint: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **mint** | **string**|  |

### Return type

**\Crossly\Model\Vault\GetVaultReceiptTokenByMintResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listVaultMarketAccounts()`

```php
listVaultMarketAccounts(): \Crossly\Model\Vault\ListVaultMarketAccountsResponse
```

Every account you can act on: your own, and each sub-account your entity memberships reach, with your role.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listVaultMarketAccounts();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->listVaultMarketAccounts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\ListVaultMarketAccountsResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listVaultMarketAdlEvents()`

```php
listVaultMarketAdlEvents(): \Crossly\Model\Vault\ListVaultMarketAdlEventsResponse
```

The ADL events your positions were part of, newest first: role bankrupt (yours went under water) or counterparty (yours was first in line), the price both closed at and the transfer status.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listVaultMarketAdlEvents();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->listVaultMarketAdlEvents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\ListVaultMarketAdlEventsResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listVaultMarketAdlPositions()`

```php
listVaultMarketAdlPositions(): \Crossly\Model\Vault\ListVaultMarketAdlPositionsResponse
```

Your live positions, each with its place in its item ADL queue: lights 5 (first in line) to 1 (last), 0 when not in the queue (only profitable positions are), ranked by P&L% x effective leverage.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listVaultMarketAdlPositions();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->listVaultMarketAdlPositions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\ListVaultMarketAdlPositionsResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listVaultMarketAgentDrafts()`

```php
listVaultMarketAgentDrafts(): \Crossly\Model\Vault\ListVaultMarketAgentDraftsResponse
```

Limit orders the shopping agent drafted for you, newest first. A draft places nothing: send its orderBody to POST /api/v1/vault-markets/pro/orders to place it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listVaultMarketAgentDrafts();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->listVaultMarketAgentDrafts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\ListVaultMarketAgentDraftsResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listVaultMarketAgentWatches()`

```php
listVaultMarketAgentWatches(): \Crossly\Model\Vault\ListVaultMarketAgentWatchesResponse
```

Your price watches on book keys (best bid, lowest ask, last trade or market price, in cents), live ones first. `?live=true` for live only.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listVaultMarketAgentWatches();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->listVaultMarketAgentWatches: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\ListVaultMarketAgentWatchesResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listVaultMarketAlertLog()`

```php
listVaultMarketAlertLog(): \Crossly\Model\Vault\ListVaultMarketAlertLogResponse
```

What the alerts hub did with your recent vault alerts (`?limit=` 1 to 200, default 50): kind, title, the channels it went to, what was held (channel:reason) and the email digest state.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listVaultMarketAlertLog();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->listVaultMarketAlertLog: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\ListVaultMarketAlertLogResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listVaultMarketAlerts()`

```php
listVaultMarketAlerts(): \Crossly\Model\Vault\ListVaultMarketAlertsResponse
```

Your price alerts on book keys.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listVaultMarketAlerts();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->listVaultMarketAlerts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\ListVaultMarketAlertsResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listVaultMarketAuctions()`

```php
listVaultMarketAuctions(): \Crossly\Model\Vault\ListVaultMarketAuctionsResponse
```

Open vault auction events (weekly, ending Sunday; premier, units marked $10,000+) and their lots, soonest ending first.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listVaultMarketAuctions();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->listVaultMarketAuctions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\ListVaultMarketAuctionsResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listVaultMarketBlocks()`

```php
listVaultMarketBlocks(): \Crossly\Model\Vault\ListVaultMarketBlocksResponse
```

An entity's block orders, newest first, each with its plan and how it was allocated.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listVaultMarketBlocks();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->listVaultMarketBlocks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\ListVaultMarketBlocksResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listVaultMarketBullionFamilyPegs()`

```php
listVaultMarketBullionFamilyPegs(): \Crossly\Model\Vault\ListVaultMarketBullionFamilyPegsResponse
```

Your family-wide spot-pegged quotes (live, or all with status=all): one quote resting across a bullion family books at one condition, with units left, the peg, its status and every leg (the pegged quote on each book).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listVaultMarketBullionFamilyPegs();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->listVaultMarketBullionFamilyPegs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\ListVaultMarketBullionFamilyPegsResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listVaultMarketBullionKeys()`

```php
listVaultMarketBullionKeys(): \Crossly\Model\Vault\ListVaultMarketBullionKeysResponse
```

Bullion key families (metal, form, size, mint or any mint): members, vault units, best resting bid and ask across their books, and spot as a labelled reference with what one unit of metal is worth at it. Spot is never a Crossly price.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listVaultMarketBullionKeys();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->listVaultMarketBullionKeys: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\ListVaultMarketBullionKeysResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listVaultMarketBullionPegs()`

```php
listVaultMarketBullionPegs(): \Crossly\Model\Vault\ListVaultMarketBullionPegsResponse
```

Your spot-pegged quotes (live, or all with status=all): side, units, the peg, the order it rests as, the last price and spot it was priced from, and why it is pulled when it is.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listVaultMarketBullionPegs();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->listVaultMarketBullionPegs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\ListVaultMarketBullionPegsResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listVaultMarketCollectionWorth()`

```php
listVaultMarketCollectionWorth(): \Crossly\Model\Vault\ListVaultMarketCollectionWorthResponse
```

Your collection valued at the display marks: rows on a vault book key with a mark are summed; rows with no mark or no key are counted, never valued.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listVaultMarketCollectionWorth();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->listVaultMarketCollectionWorth: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\ListVaultMarketCollectionWorthResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listVaultMarketConfirmations()`

```php
listVaultMarketConfirmations(): \Crossly\Model\Vault\ListVaultMarketConfirmationsResponse
```

Trade confirmations for your fills in a window (default 31 days): price, sale fee, maker or taker, order, vault unit and warehouse receipt.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listVaultMarketConfirmations();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->listVaultMarketConfirmations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\ListVaultMarketConfirmationsResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listVaultMarketCreatorCohostInvites()`

```php
listVaultMarketCreatorCohostInvites(): \Crossly\Model\Vault\ListVaultMarketCreatorCohostInvitesResponse
```

For creators: your invites from Crossly to co-host a Market Open launch show (invited, accepted, declined or withdrawn), each with the key, its show and the guidance for co-hosts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listVaultMarketCreatorCohostInvites();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->listVaultMarketCreatorCohostInvites: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\ListVaultMarketCreatorCohostInvitesResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listVaultMarketCredit()`

```php
listVaultMarketCredit(): \Crossly\Model\Vault\ListVaultMarketCreditResponse
```

Your vault loans and advances (live by default): what is owed, interest accrued, loan-to-value, the liquidation line and the collateral value it is called at.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listVaultMarketCredit();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->listVaultMarketCredit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\ListVaultMarketCreditResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listVaultMarketDealerBands()`

```php
listVaultMarketDealerBands(): \Crossly\Model\Vault\ListVaultMarketDealerBandsResponse
```

Your Instant Exit bands and whether each is being kept now.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listVaultMarketDealerBands();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->listVaultMarketDealerBands: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\ListVaultMarketDealerBandsResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listVaultMarketDealerBids()`

```php
listVaultMarketDealerBids(): \Crossly\Model\Vault\ListVaultMarketDealerBidsResponse
```

Your standing dealer bids: open (default) or all.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listVaultMarketDealerBids();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->listVaultMarketDealerBids: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\ListVaultMarketDealerBidsResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listVaultMarketDealerPoolFills()`

```php
listVaultMarketDealerPoolFills($id): \Crossly\Model\Vault\ListVaultMarketDealerPoolFillsResponse
```

A curve pool's fills, newest first: side, price and spot after.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->listVaultMarketDealerPoolFills($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->listVaultMarketDealerPoolFills: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Vault\ListVaultMarketDealerPoolFillsResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listVaultMarketDealerPools()`

```php
listVaultMarketDealerPools(): \Crossly\Model\Vault\ListVaultMarketDealerPoolsResponse
```

Your curve pools: open (default) or all, each with its curve, spot, units, buy budget, running totals, the ladder it shows and its live legs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listVaultMarketDealerPools();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->listVaultMarketDealerPools: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\ListVaultMarketDealerPoolsResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listVaultMarketDigestHistory()`

```php
listVaultMarketDigestHistory(): \Crossly\Model\Vault\ListVaultMarketDigestHistoryResponse
```

Past weekly digests: week, status (sent / skipped / failed), the channels used and a summary.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listVaultMarketDigestHistory();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->listVaultMarketDigestHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\ListVaultMarketDigestHistoryResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listVaultMarketEntityAudit()`

```php
listVaultMarketEntityAudit($id): \Crossly\Model\Vault\ListVaultMarketEntityAuditResponse
```

The entity's audit trail, newest first: hash-chained rows with actor, account, API key, IP, session and source.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->listVaultMarketEntityAudit($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->listVaultMarketEntityAudit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Vault\ListVaultMarketEntityAuditResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listVaultMarketEntityConversions()`

```php
listVaultMarketEntityConversions($id): \Crossly\Model\Vault\ListVaultMarketEntityConversionsResponse
```

The custodian's CBX-to-USD reward conversions for an entity that elected USD, newest first, with their status.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->listVaultMarketEntityConversions($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->listVaultMarketEntityConversions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Vault\ListVaultMarketEntityConversionsResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listVaultMarketEstimatesAccuracy()`

```php
listVaultMarketEstimatesAccuracy(): \Crossly\Model\Vault\ListVaultMarketEstimatesAccuracyResponse
```

The Crossly Estimate's track record: walk-forward backtest n, FSD and bias per method, category and liquidity bucket, and whether estimates in that cell are shown.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listVaultMarketEstimatesAccuracy();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->listVaultMarketEstimatesAccuracy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\ListVaultMarketEstimatesAccuracyResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listVaultMarketFeed()`

```php
listVaultMarketFeed(): \Crossly\Model\Vault\ListVaultMarketFeedResponse
```

New vault buys by the people you follow who share them, newest first (no prices). Page with `before` (the last item's `at`).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listVaultMarketFeed();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->listVaultMarketFeed: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\ListVaultMarketFeedResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listVaultMarketFollowCopyWatch()`

```php
listVaultMarketFollowCopyWatch(): \Crossly\Model\Vault\ListVaultMarketFollowCopyWatchResponse
```

The collectors you copy-watch and whether each still shares bids and asks.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listVaultMarketFollowCopyWatch();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->listVaultMarketFollowCopyWatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\ListVaultMarketFollowCopyWatchResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listVaultMarketFollowCopyWatchAlerts()`

```php
listVaultMarketFollowCopyWatchAlerts(): \Crossly\Model\Vault\ListVaultMarketFollowCopyWatchAlertsResponse
```

Your copy-watch alerts, newest first: who, bid or ask, quantity, limit price, market, and whether it still rests. Page with `before`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listVaultMarketFollowCopyWatchAlerts();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->listVaultMarketFollowCopyWatchAlerts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\ListVaultMarketFollowCopyWatchAlertsResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listVaultMarketFollowFeed()`

```php
listVaultMarketFollowFeed(): \Crossly\Model\Vault\ListVaultMarketFollowFeedResponse
```

Public vault activity of the collectors you follow (buys, units sent in, sales, Hall loans), newest first, never a price. Filter with `kinds`; page with `before`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listVaultMarketFollowFeed();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->listVaultMarketFollowFeed: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\ListVaultMarketFollowFeedResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listVaultMarketFollowFollowing()`

```php
listVaultMarketFollowFollowing(): \Crossly\Model\Vault\ListVaultMarketFollowFollowingResponse
```

The collectors you follow who have a public vault: what each shares and whether you copy-watch them.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listVaultMarketFollowFollowing();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->listVaultMarketFollowFollowing: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\ListVaultMarketFollowFollowingResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listVaultMarketFollowLeaderboards()`

```php
listVaultMarketFollowLeaderboards(): \Crossly\Model\Vault\ListVaultMarketFollowLeaderboardsResponse
```

An opt-in return leaderboard (`period` 30d, 90d or 365d; `category` all or a category slug), ranked by risk-adjusted return from the book A/B marks. Percent and risk only: no dollars, no volume.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listVaultMarketFollowLeaderboards();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->listVaultMarketFollowLeaderboards: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\ListVaultMarketFollowLeaderboardsResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listVaultMarketFollowProfileActivity()`

```php
listVaultMarketFollowProfileActivity($handle): \Crossly\Model\Vault\ListVaultMarketFollowFeedResponse
```

One collector public vault activity, newest first, never a price. 404 when their vault is not public.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$handle = 'handle_example'; // string

try {
    $result = $apiInstance->listVaultMarketFollowProfileActivity($handle);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->listVaultMarketFollowProfileActivity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**|  |

### Return type

**\Crossly\Model\Vault\ListVaultMarketFollowFeedResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listVaultMarketGifts()`

```php
listVaultMarketGifts(): \Crossly\Model\Vault\ListVaultMarketGiftsResponse
```

Gifts you sent and received, newest first, with their status.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listVaultMarketGifts();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->listVaultMarketGifts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\ListVaultMarketGiftsResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listVaultMarketGradeToVault()`

```php
listVaultMarketGradeToVault(): \Crossly\Model\Vault\ListVaultMarketGradeToVaultResponse
```

Your Grade to Vault flows, newest first, each brought up to date: its step, the grading submission, the unit, the grade, the market for it, and the ask once listed. `live=1` for those still going.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listVaultMarketGradeToVault();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->listVaultMarketGradeToVault: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\ListVaultMarketGradeToVaultResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listVaultMarketGrading()`

```php
listVaultMarketGrading(): \Crossly\Model\Vault\ListVaultMarketGradingResponse
```

Your vault units sent to grading: where each card is in its run, and the grade once it is back.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listVaultMarketGrading();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->listVaultMarketGrading: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\ListVaultMarketGradingResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listVaultMarketHallLenders()`

```php
listVaultMarketHallLenders(): \Crossly\Model\Vault\ListVaultMarketHallLendersResponse
```

The vault units lent to this week's Hall of Grails exhibition and on show now, in plinth order: the item (skuId, name, imageUrl, grade), the lender as the plate names them (a display name, or \"a collector\"), the plate lines and how many exhibitions the unit has stood in. meta.exhibition is the week (key, title, endsAt). Names no ids and no amounts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listVaultMarketHallLenders();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->listVaultMarketHallLenders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\ListVaultMarketHallLendersResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listVaultMarketIndexCommitteeMinutes()`

```php
listVaultMarketIndexCommitteeMinutes(): \Crossly\Model\Vault\ListVaultMarketIndexCommitteeMinutesResponse
```

Published Index Committee minutes, newest first: attendees (names and roles), quorum, agenda, minutes and decisions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listVaultMarketIndexCommitteeMinutes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->listVaultMarketIndexCommitteeMinutes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\ListVaultMarketIndexCommitteeMinutesResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listVaultMarketIndexComplaints()`

```php
listVaultMarketIndexComplaints(): \Crossly\Model\Vault\ListVaultMarketIndexComplaintsResponse
```

Your complaints and their answers, newest first.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listVaultMarketIndexComplaints();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->listVaultMarketIndexComplaints: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\ListVaultMarketIndexComplaintsResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listVaultMarketIndexConstituents()`

```php
listVaultMarketIndexConstituents($slug): \Crossly\Model\Vault\ListVaultMarketIndexMembersResponse
```

The book keys in an index with their weight, move since the last close and contribution to the index's move (basis points).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string

try {
    $result = $apiInstance->listVaultMarketIndexConstituents($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->listVaultMarketIndexConstituents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **slug** | **string**|  |

### Return type

**\Crossly\Model\Vault\ListVaultMarketIndexMembersResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listVaultMarketIndexConsultations()`

```php
listVaultMarketIndexConsultations(): \Crossly\Model\Vault\ListVaultMarketIndexConsultationsResponse
```

Consultations on index method changes (open for at least 30 days), newest first. Filter by `status`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listVaultMarketIndexConsultations();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->listVaultMarketIndexConsultations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\ListVaultMarketIndexConsultationsResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listVaultMarketIndexEvents()`

```php
listVaultMarketIndexEvents(): \Crossly\Model\Vault\ListVaultMarketIndexEventsResponse
```

Every index event, newest first: add, delete, rebalance, method, correction, halt; each with when it was announced, when it takes effect, the detail and the reason. Filter by `kind`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listVaultMarketIndexEvents();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->listVaultMarketIndexEvents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\ListVaultMarketIndexEventsResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listVaultMarketIndexEventsBySlug()`

```php
listVaultMarketIndexEventsBySlug($slug): \Crossly\Model\Vault\ListVaultMarketIndexEventsResponse
```

One index's events, newest first.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string

try {
    $result = $apiInstance->listVaultMarketIndexEventsBySlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->listVaultMarketIndexEventsBySlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **slug** | **string**|  |

### Return type

**\Crossly\Model\Vault\ListVaultMarketIndexEventsResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listVaultMarketIndexJudgments()`

```php
listVaultMarketIndexJudgments(): \Crossly\Model\Vault\ListVaultMarketIndexJudgmentsResponse
```

The expert-judgment log: every Index Committee action (halt, resume, exclude a key, void a trade, restate, retire) with its written reason.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listVaultMarketIndexJudgments();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->listVaultMarketIndexJudgments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\ListVaultMarketIndexJudgmentsResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listVaultMarketIndexLevelSeries()`

```php
listVaultMarketIndexLevelSeries($slug): \Crossly\Model\Vault\ListVaultMarketIndexLevelSeriesResponse
```

An index's published levels. `engine=chain` (default): daily closes. `engine=tpd|repeat_sales`: weekly (else monthly) model estimates with a 95% band and n; labelled, never a price. `series=settlement` returns each value as first published (never restated). Below the data gate `data` is empty and `notice` explains.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string

try {
    $result = $apiInstance->listVaultMarketIndexLevelSeries($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->listVaultMarketIndexLevelSeries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **slug** | **string**|  |

### Return type

**\Crossly\Model\Vault\ListVaultMarketIndexLevelSeriesResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listVaultMarketIndexLicenceMine()`

```php
listVaultMarketIndexLicenceMine(): \Crossly\Model\Vault\ListVaultMarketIndexLicenceMineResponse
```

Your index feed licences (the indexes each covers, or all), as ops recorded them. No licence: the feed answers 403 not_a_licensee.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listVaultMarketIndexLicenceMine();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->listVaultMarketIndexLicenceMine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\ListVaultMarketIndexLicenceMineResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listVaultMarketIndexMembers()`

```php
listVaultMarketIndexMembers($slug): \Crossly\Model\Vault\ListVaultMarketIndexMembersResponse
```

The members of an index on a day (`asOf`, default today) with their weights, shares, moves and contributions; for a past day, the inputs stored with that day's close and each member's effective dates.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string

try {
    $result = $apiInstance->listVaultMarketIndexMembers($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->listVaultMarketIndexMembers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **slug** | **string**|  |

### Return type

**\Crossly\Model\Vault\ListVaultMarketIndexMembersResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listVaultMarketIndexMovers()`

```php
listVaultMarketIndexMovers(): \Crossly\Model\Vault\ListVaultMarketIndexesResponse
```

The built-in indexes that moved most since their last daily close.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listVaultMarketIndexMovers();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->listVaultMarketIndexMovers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\ListVaultMarketIndexesResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listVaultMarketIndexes()`

```php
listVaultMarketIndexes(): \Crossly\Model\Vault\ListVaultMarketIndexesResponse
```

Indexes over book keys: per category, per top brand, the Crossly 50 and your own. Each with its level now (base 1000 at inception) and change since the last daily close.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listVaultMarketIndexes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->listVaultMarketIndexes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\ListVaultMarketIndexesResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listVaultMarketInstantExitHistory()`

```php
listVaultMarketInstantExitHistory(): \Crossly\Model\Vault\ListVaultMarketInstantExitHistoryResponse
```

Your Instant Exits, newest first: quoted price, mark, and whether it filled.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listVaultMarketInstantExitHistory();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->listVaultMarketInstantExitHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\ListVaultMarketInstantExitHistoryResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listVaultMarketInstantExitHoldings()`

```php
listVaultMarketInstantExitHoldings(): \Crossly\Model\Vault\ListVaultMarketInstantExitHoldingsResponse
```

Instant Exit quotes for everything you hold in the vault, one per book key, with units held and which are free to sell.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listVaultMarketInstantExitHoldings();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->listVaultMarketInstantExitHoldings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\ListVaultMarketInstantExitHoldingsResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listVaultMarketJointTrades()`

```php
listVaultMarketJointTrades($id): \Crossly\Model\Vault\ListVaultMarketJointTradesResponse
```

The joint vault trades, newest first: side, book key, limit, who started it, whose account the order sits on, and the order standing on the book.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->listVaultMarketJointTrades($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->listVaultMarketJointTrades: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Vault\ListVaultMarketJointTradesResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listVaultMarketLargeTraderReports()`

```php
listVaultMarketLargeTraderReports(): \Crossly\Model\Vault\ListVaultMarketLargeTraderReportsResponse
```

Your large-trader reports (with any linked accounts, as one party): due first, then filed, then cleared in the last 90 days. Each has `action`: file | amend | refile | none.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listVaultMarketLargeTraderReports();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->listVaultMarketLargeTraderReports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\ListVaultMarketLargeTraderReportsResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listVaultMarketLendingStatements()`

```php
listVaultMarketLendingStatements(): \Crossly\Model\Vault\ListVaultMarketLendingStatementsResponse
```

The days you have stored collateral statements for, newest first, with their summary.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listVaultMarketLendingStatements();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->listVaultMarketLendingStatements: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\ListVaultMarketLendingStatementsResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listVaultMarketLoans()`

```php
listVaultMarketLoans(): \Crossly\Model\Vault\ListVaultMarketLoansResponse
```

Units you lent: rate, fees earned, recall due.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listVaultMarketLoans();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->listVaultMarketLoans: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\ListVaultMarketLoansResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listVaultMarketLocateMine()`

```php
listVaultMarketLocateMine(): \Crossly\Model\Vault\ListVaultMarketLocateMineResponse
```

Your locates, newest first (held / used / released / expired).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listVaultMarketLocateMine();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->listVaultMarketLocateMine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\ListVaultMarketLocateMineResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listVaultMarketMidpoint()`

```php
listVaultMarketMidpoint(): \Crossly\Model\Vault\ListVaultMarketMidpointResponse
```

Your midpoint block orders.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listVaultMarketMidpoint();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->listVaultMarketMidpoint: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\ListVaultMarketMidpointResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listVaultMarketMovers()`

```php
listVaultMarketMovers(): \Crossly\Model\Vault\ListVaultMarketMoversResponse
```

Vault items with the biggest 24 h moves in their market price (from the order book), with units in the vault.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listVaultMarketMovers();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->listVaultMarketMovers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\ListVaultMarketMoversResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listVaultMarketNavHistory()`

```php
listVaultMarketNavHistory(): \Crossly\Model\Vault\ListVaultMarketNavHistoryResponse
```

Daily NAV snapshots (mark, bid, liquidation, Level 2 / Level 3).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listVaultMarketNavHistory();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->listVaultMarketNavHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\ListVaultMarketNavHistoryResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listVaultMarketOffers()`

```php
listVaultMarketOffers(): \Crossly\Model\Vault\ListVaultMarketOffersResponse
```

The offers inbox: for each book key you hold, the best bid from someone else, units at it, the top bid levels, the mark, and your alert.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listVaultMarketOffers();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->listVaultMarketOffers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\ListVaultMarketOffersResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listVaultMarketOpening()`

```php
listVaultMarketOpening(): \Crossly\Model\Vault\ListVaultMarketOpeningResponse
```

Keys opening soon on the vault book (and just opened): units on the shelf, dealers quoting, the waitlist, the mark when the book has one, and your place.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listVaultMarketOpening();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->listVaultMarketOpening: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\ListVaultMarketOpeningResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listVaultMarketOracleHistory()`

```php
listVaultMarketOracleHistory($slug): \Crossly\Model\Vault\ListVaultMarketOracleHistoryResponse
```

Recent publish attempts for an index over 30 days, newest first: published, skipped (with the reason: too few items priced, stale marks, confidence too wide...) or failed (with the error). Filter with `status`, cap with `limit` (default 100).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string

try {
    $result = $apiInstance->listVaultMarketOracleHistory($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->listVaultMarketOracleHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **slug** | **string**|  |

### Return type

**\Crossly\Model\Vault\ListVaultMarketOracleHistoryResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listVaultMarketP2pAuctions()`

```php
listVaultMarketP2pAuctions(): \Crossly\Model\Vault\ListVaultMarketP2pLoansResponse
```

Running refinancing auctions, soonest to end first: lenders calls (`auction`) and borrowers looking for a cheaper lender (`refiAuction`). The payoff now, the rate a new lender gets now, when it ends, and the item.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listVaultMarketP2pAuctions();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->listVaultMarketP2pAuctions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\ListVaultMarketP2pLoansResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listVaultMarketP2pLoans()`

```php
listVaultMarketP2pLoans(): \Crossly\Model\Vault\ListVaultMarketP2pLoansResponse
```

Your P2P loans as borrower and/or lender (`role`), live by default (`status`): what is owed now, daily interest, the refinancing auction when called, and the item mark for information only (it never triggers anything).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listVaultMarketP2pLoans();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->listVaultMarketP2pLoans: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\ListVaultMarketP2pLoansResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listVaultMarketP2pOfferMine()`

```php
listVaultMarketP2pOfferMine(): \Crossly\Model\Vault\ListVaultMarketP2pOffersResponse
```

Your P2P loan offers, newest first, with how many loans each has funded.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listVaultMarketP2pOfferMine();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->listVaultMarketP2pOfferMine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\ListVaultMarketP2pOffersResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listVaultMarketP2pOffers()`

```php
listVaultMarketP2pOffers(): \Crossly\Model\Vault\ListVaultMarketP2pOffersResponse
```

The open P2P loan offers book, lowest rate first: cents offered per loan, APR (bps), loans left, and the item (book key) or unit each lends against. `bookKey` narrows to one item. Lender identities are never shown.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listVaultMarketP2pOffers();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->listVaultMarketP2pOffers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\ListVaultMarketP2pOffersResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listVaultMarketP2pUnits()`

```php
listVaultMarketP2pUnits(): \Crossly\Model\Vault\ListVaultMarketP2pUnitsResponse
```

Your vault units for P2P borrowing: whether each can be pledged now (and why not), the best offers covering it, and its loan when it has one.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listVaultMarketP2pUnits();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->listVaultMarketP2pUnits: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\ListVaultMarketP2pUnitsResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listVaultMarketPaperFills()`

```php
listVaultMarketPaperFills(): \Crossly\Model\Vault\ListVaultMarketPaperFillsResponse
```

Your paper fills since your last reset, newest first: price, simulated fee, taker or maker, and whether a visible real order (book) or a real trade (tape) filled it. Play money only.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listVaultMarketPaperFills();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->listVaultMarketPaperFills: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\ListVaultMarketPaperFillsResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listVaultMarketPaperLeaderboard()`

```php
listVaultMarketPaperLeaderboard(): \Crossly\Model\Vault\ListVaultMarketPaperLeaderboardResponse
```

The weekly paper trading leaderboard (opt-in, display names only): best return on play equity this week (or a past `week`, its Monday as YYYY-MM-DD), with your own line. Nothing is won or paid.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listVaultMarketPaperLeaderboard();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->listVaultMarketPaperLeaderboard: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\ListVaultMarketPaperLeaderboardResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listVaultMarketPaperMissions()`

```php
listVaultMarketPaperMissions(): \Crossly\Model\Vault\ListVaultMarketPaperMissionsResponse
```

Your paper-trading missions (play money only): each mission with what to do, your count toward its target, whether it is done and when, plus a suggested market for the \"Read the mark\" mission. Progress is observed by the server from your paper orders and fills, price watches, set goals and graded mark checks. Missions earn world quest progress and cosmetic pins, never money.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listVaultMarketPaperMissions();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->listVaultMarketPaperMissions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\ListVaultMarketPaperMissionsResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listVaultMarketPaperOrders()`

```php
listVaultMarketPaperOrders(): \Crossly\Model\Vault\ListVaultMarketPaperOrdersResponse
```

Your paper orders since your last reset, newest first: working, done (filled, cancelled, expired) or all. Play money only.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listVaultMarketPaperOrders();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->listVaultMarketPaperOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\ListVaultMarketPaperOrdersResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listVaultMarketPartnerAccruals()`

```php
listVaultMarketPartnerAccruals(): \Crossly\Model\Vault\ListVaultMarketPartnerAccrualsResponse
```

Your partner fee shares, newest first: accrued on a unit's first sale, paid in Bucks once the sale is final, void if it was refunded.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listVaultMarketPartnerAccruals();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->listVaultMarketPartnerAccruals: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\ListVaultMarketPartnerAccrualsResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listVaultMarketPoolStakes()`

```php
listVaultMarketPoolStakes(): \Crossly\Model\Vault\ListVaultMarketPoolStakesResponse
```

Your stakes in the market pool and what each redeems for now.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listVaultMarketPoolStakes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->listVaultMarketPoolStakes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\ListVaultMarketPoolStakesResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listVaultMarketPortfolioMarginHistory()`

```php
listVaultMarketPortfolioMarginHistory(): \Crossly\Model\Vault\ListVaultMarketPortfolioMarginHistoryResponse
```

The 5-minute portfolio margin recalculations for a firm sub-account over the last `hours` (default 24, at most 720), newest first: equity, requirement, excess, scenario and floor figures, gross and state.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listVaultMarketPortfolioMarginHistory();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->listVaultMarketPortfolioMarginHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\ListVaultMarketPortfolioMarginHistoryResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listVaultMarketPositionUnits()`

```php
listVaultMarketPositionUnits($id): \Crossly\Model\Vault\ListVaultMarketPositionUnitsResponse
```

The vault units of one of your positions that you hold (a leveraged long's collateral), each with its story link.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->listVaultMarketPositionUnits($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->listVaultMarketPositionUnits: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Vault\ListVaultMarketPositionUnitsResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listVaultMarketPositions()`

```php
listVaultMarketPositions(): \Crossly\Model\Vault\ListVaultMarketPositionsResponse
```

Your positions, live (default) or closed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listVaultMarketPositions();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->listVaultMarketPositions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\ListVaultMarketPositionsResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listVaultMarketPositionsRisk()`

```php
listVaultMarketPositionsRisk(): \Crossly\Model\Vault\ListVaultMarketPositionsRiskResponse
```

For each live position: its tier, health, margin state, the mark at which it is called and the mark at which it is liquidated, and the distance to it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listVaultMarketPositionsRisk();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->listVaultMarketPositionsRisk: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\ListVaultMarketPositionsRiskResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listVaultMarketPriceWidgets()`

```php
listVaultMarketPriceWidgets(): \Crossly\Model\Vault\ListVaultMarketPriceWidgetsResponse
```

Your price widgets, newest first, each with its iframe and script-tag snippets. `meta.codes` lists your affiliate codes a widget can link through; `meta.max` is the cap on live widgets.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listVaultMarketPriceWidgets();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->listVaultMarketPriceWidgets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\ListVaultMarketPriceWidgetsResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listVaultMarketProCandles()`

```php
listVaultMarketProCandles(): \Crossly\Model\Vault\ListVaultMarketProCandlesResponse
```

OHLCV candles (1m, 5m, 15m, 1h, 4h, 1d) from the trades on a book key.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listVaultMarketProCandles();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->listVaultMarketProCandles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\ListVaultMarketProCandlesResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listVaultMarketProEvents()`

```php
listVaultMarketProEvents(): \Crossly\Model\Vault\ListVaultMarketProEventsResponse
```

Your order event log after a sequence number (new, leg, fill, replaced, cancelled, expired, done): a replayable drop copy.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listVaultMarketProEvents();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->listVaultMarketProEvents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\ListVaultMarketProEventsResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listVaultMarketProLinks()`

```php
listVaultMarketProLinks(): \Crossly\Model\Vault\ListVaultMarketProLinksResponse
```

Your linked orders (brackets, OCO pairs, trailing stops, position exits): live (default) or done.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listVaultMarketProLinks();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->listVaultMarketProLinks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\ListVaultMarketProLinksResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listVaultMarketProOrders()`

```php
listVaultMarketProOrders(): \Crossly\Model\Vault\ListVaultMarketProOrdersResponse
```

Your orders: open (default) or done, optionally on one book key, or only those booked to one sub-account (`subaccountId`).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listVaultMarketProOrders();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->listVaultMarketProOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\ListVaultMarketProOrdersResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listVaultMarketProQuotes()`

```php
listVaultMarketProQuotes(): \Crossly\Model\Vault\ListVaultMarketProQuotesResponse
```

Your live quotes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listVaultMarketProQuotes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->listVaultMarketProQuotes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\ListVaultMarketProQuotesResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listVaultMarketProRewards()`

```php
listVaultMarketProRewards(): \Crossly\Model\Vault\ListVaultMarketProRewardsResponse
```

Your daily market-maker liquidity rewards (paid in CBX).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listVaultMarketProRewards();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->listVaultMarketProRewards: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\ListVaultMarketProRewardsResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listVaultMarketProTape()`

```php
listVaultMarketProTape(): \Crossly\Model\Vault\ListVaultMarketProTapeResponse
```

The latest trades on a book key, newest first, with which side made and which took.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listVaultMarketProTape();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->listVaultMarketProTape: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\ListVaultMarketProTapeResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listVaultMarketProofOfReserveLeaves()`

```php
listVaultMarketProofOfReserveLeaves($day): \Crossly\Model\Vault\ListVaultMarketProofOfReserveLeavesResponse
```

One day's leaf hashes in tree order, a page at a time: enough to recount the units and rebuild the root yourself. Leaves are salted, so they name no owner.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$day = 'day_example'; // string

try {
    $result = $apiInstance->listVaultMarketProofOfReserveLeaves($day);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->listVaultMarketProofOfReserveLeaves: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **day** | **string**|  |

### Return type

**\Crossly\Model\Vault\ListVaultMarketProofOfReserveLeavesResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listVaultMarketRecurring()`

```php
listVaultMarketRecurring(): \Crossly\Model\Vault\ListVaultMarketRecurringResponse
```

Your recurring buys: key, schedule, price cap, payment, auto-lend, next run.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listVaultMarketRecurring();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->listVaultMarketRecurring: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\ListVaultMarketRecurringResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listVaultMarketRecurringRuns()`

```php
listVaultMarketRecurringRuns($id): \Crossly\Model\Vault\ListVaultMarketRecurringRunsResponse
```

One recurring buy's runs: filled, skipped (with the reason, e.g. the price was over the cap) or failed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->listVaultMarketRecurringRuns($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->listVaultMarketRecurringRuns: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Vault\ListVaultMarketRecurringRunsResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listVaultMarketRecurringRuns2()`

```php
listVaultMarketRecurringRuns2(): \Crossly\Model\Vault\ListVaultMarketRecurringRunsResponse
```

Every run of all your recurring buys, newest first.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listVaultMarketRecurringRuns2();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->listVaultMarketRecurringRuns2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\ListVaultMarketRecurringRunsResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listVaultMarketRfq()`

```php
listVaultMarketRfq(): \Crossly\Model\Vault\ListVaultMarketRfqResponse
```

Your quote requests, newest first.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listVaultMarketRfq();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->listVaultMarketRfq: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\ListVaultMarketRfqResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listVaultMarketRfqInbox()`

```php
listVaultMarketRfqInbox(): \Crossly\Model\Vault\ListVaultMarketRfqInboxResponse
```

Open quote requests you were sent (as a dealer, DMM, LP or holder), with your live answer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listVaultMarketRfqInbox();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->listVaultMarketRfqInbox: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\ListVaultMarketRfqInboxResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listVaultMarketRfqOpen()`

```php
listVaultMarketRfqOpen(): \Crossly\Model\Vault\ListVaultMarketRfqResponse
```

Open quote requests on one key (all-to-all: anyone with ID may answer). Anonymous.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listVaultMarketRfqOpen();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->listVaultMarketRfqOpen: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\ListVaultMarketRfqResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listVaultMarketSetGoalBaskets()`

```php
listVaultMarketSetGoalBaskets($id): \Crossly\Model\Vault\ListVaultMarketSetGoalBasketsResponse
```

A set goal basket bids, newest first, each with its budget, what it committed and spent, and every leg (piece, book key, limit, pro order id, status).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->listVaultMarketSetGoalBaskets($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->listVaultMarketSetGoalBaskets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Vault\ListVaultMarketSetGoalBasketsResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listVaultMarketSetGoalSets()`

```php
listVaultMarketSetGoalSets(): \Crossly\Model\Vault\ListVaultMarketSetGoalSetsResponse
```

Sets to start a goal on. With q (2+ characters): a word-start search of every catalogue set. Without: the sets you hold pieces of in the vault, then the collections you are building. Each with your live goal on it, if any.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listVaultMarketSetGoalSets();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->listVaultMarketSetGoalSets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\ListVaultMarketSetGoalSetsResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listVaultMarketSetGoals()`

```php
listVaultMarketSetGoals(): \Crossly\Model\Vault\ListVaultMarketSetGoalsResponse
```

Your set goals: the set, the target a piece must meet, pieces held of the total (from your vault), and the working basket bid.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listVaultMarketSetGoals();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->listVaultMarketSetGoals: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\ListVaultMarketSetGoalsResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listVaultMarketShareCards()`

```php
listVaultMarketShareCards(): \Crossly\Model\Vault\ListVaultMarketShareCardsResponse
```

Your share cards (not taken down), each as the public sees it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listVaultMarketShareCards();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->listVaultMarketShareCards: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\ListVaultMarketShareCardsResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listVaultMarketSupplyDeposits()`

```php
listVaultMarketSupplyDeposits(): \Crossly\Model\Vault\ListVaultMarketSupplyDepositsResponse
```

Your units sent to the vault, newest first, each with its state and its key's Instant Exit line (\"Instant Exit now: $X (N% of mark)\" or \"No market yet\"). Filter with `inventoryItemIds` (comma-separated).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listVaultMarketSupplyDeposits();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->listVaultMarketSupplyDeposits: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\ListVaultMarketSupplyDepositsResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listVaultMarketSupplyInvites()`

```php
listVaultMarketSupplyInvites(): \Crossly\Model\Vault\ListVaultMarketSupplyInvitesResponse
```

Market Open invites to you as a dealer: keys Crossly is opening and asks you to quote.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listVaultMarketSupplyInvites();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->listVaultMarketSupplyInvites: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\ListVaultMarketSupplyInvitesResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listVaultMarketValuationStatements()`

```php
listVaultMarketValuationStatements(): \Crossly\Model\Vault\ListVaultMarketValuationStatementsResponse
```

The insurance and appraisal statements you issued, newest first: purpose, date, units, total at the marks, hash and verify link.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listVaultMarketValuationStatements();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->listVaultMarketValuationStatements: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\ListVaultMarketValuationStatementsResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listVaultMarketVaultSuggestions()`

```php
listVaultMarketVaultSuggestions(): \Crossly\Model\Vault\ListVaultMarketVaultSuggestionsResponse
```

What to send to the vault: your inventory items whose book key has a liquid vault market (tier A, B or C), best first. Each has a score (0 to 100) and its reasons, the market (tier, mark and its quality, best bid, best vault ask, spread), Instant Exit now, your list price, days listed without selling, and the vault fee. `meta.summary` counts what was left out and why. Inform only; send with POST /api/v1/vault-markets/supply/send.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listVaultMarketVaultSuggestions();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->listVaultMarketVaultSuggestions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\ListVaultMarketVaultSuggestionsResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listVaultMarketWatchlist()`

```php
listVaultMarketWatchlist(): \Crossly\Model\Vault\ListVaultMarketWatchlistResponse
```

Your watched book keys with mark, 24 h and 7 d change, and the last 30 daily marks (sparkline).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listVaultMarketWatchlist();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->listVaultMarketWatchlist: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\ListVaultMarketWatchlistResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listVaultMarketWidgetTokens()`

```php
listVaultMarketWidgetTokens(): \Crossly\Model\Vault\ListVaultMarketWidgetTokensResponse
```

Your live home-screen widget tokens, one per phone: id, name (the phone), public prefix, created and last used. The secret is never returned again.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listVaultMarketWidgetTokens();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->listVaultMarketWidgetTokens: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\ListVaultMarketWidgetTokensResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listVaultMarketWorldCohosts()`

```php
listVaultMarketWorldCohosts(): \Crossly\Model\Vault\ListVaultMarketWorldCohostsResponse
```

Market Open launch shows a verified creator co-hosts that are on now or opening soon: the key, its phase, the show, the creator (named only while their vault profile is public), their room link and, when the creator is in the creator programme, the disclosure that they may earn a share of the fee Crossly keeps. Never a prompt to trade.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listVaultMarketWorldCohosts();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->listVaultMarketWorldCohosts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\ListVaultMarketWorldCohostsResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listVaultMarketWorldCreatorRooms()`

```php
listVaultMarketWorldCreatorRooms(): \Crossly\Model\Vault\ListVaultMarketWorldCreatorRoomsResponse
```

Verified creators whose public vault shelf is a world room: title, the creator, the room link and the disclosure. Rooms show each market share of the shelf, never amounts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listVaultMarketWorldCreatorRooms();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->listVaultMarketWorldCreatorRooms: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\ListVaultMarketWorldCreatorRoomsResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listVaultMarketWorldMarketOpen()`

```php
listVaultMarketWorldMarketOpen(): \Crossly\Model\Vault\ListVaultMarketWorldMarketOpenResponse
```

Market Open events in the Crossly World Commons: keys opening soon and those that opened in the last few hours, live first then soonest, each with its board line, units on the shelf, dealers quoting and the launch show when there is one. Never a prompt to trade.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listVaultMarketWorldMarketOpen();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->listVaultMarketWorldMarketOpen: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\ListVaultMarketWorldMarketOpenResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listVaultReceiptTokenWallets()`

```php
listVaultReceiptTokenWallets(): \Crossly\Model\Vault\ListVaultReceiptTokenWalletsResponse
```

Your verified Solana wallets and whether each is on the receipt-token allow-list (receipt tokens move only between allow-listed wallets). meta.state is the gate.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listVaultReceiptTokenWallets();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->listVaultReceiptTokenWallets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\ListVaultReceiptTokenWalletsResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listVaultReceiptTokens()`

```php
listVaultReceiptTokens(): \Crossly\Model\Vault\ListVaultReceiptTokensResponse
```

Your vault units with their warehouse receipt and receipt-token state (not exported, waiting for a signature, in a wallet, frozen, redeemed), whether each can be exported now and why not. meta.state is the gate (open, missing envs, program id, authority, terms version, cluster); meta.history is your last 50 exports.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listVaultReceiptTokens();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->listVaultReceiptTokens: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\ListVaultReceiptTokensResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listVaultReceipts()`

```php
listVaultReceipts(): \Crossly\Model\Vault\ListVaultReceiptsResponse
```

Your warehouse receipts (documents of title for your vault units), live first. meta.receipts says whether receipts are registered (VAULT_WAREHOUSE_ISSUER) and their terms version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listVaultReceipts();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->listVaultReceipts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\ListVaultReceiptsResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listVaultUnitList()`

```php
listVaultUnitList(): \Crossly\Model\Vault\ListVaultUnitListResponse
```

The published unit list (bar-list equivalent): every unit on a vault shelf with its warehouse receipt number (when receipts are registered), book key, shelf location code, insured value, status, pledged / on-loan flags and a per-receipt hashed holder (never a name or id). Filter with `bookKey`; pages with `page` / `limit`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listVaultUnitList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->listVaultUnitList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\ListVaultUnitListResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateVaultMarketAlertPref()`

```php
updateVaultMarketAlertPref(): \Crossly\Model\Vault\GetVaultMarketAlertPrefResponse
```

Change vault alert settings: `matrix` ({ kind: { channel: true|false } }, merged onto what is set), `quietHours` ({ start: \"HH:MM\", end: \"HH:MM\", tz } or null to clear) and `telegram` (the Telegram master switch). Locked switches are ignored. Returns the new settings.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->updateVaultMarketAlertPref();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->updateVaultMarketAlertPref: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\GetVaultMarketAlertPrefResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateVaultMarketBlockAllocation()`

```php
updateVaultMarketBlockAllocation($order_id): \Crossly\Model\Vault\ListVaultMarketBlocksItem
```

Post-trade allocation: set or replace the plan for a buy you placed for one of the entity's sub-accounts (that sub-account leads). Refused once any share has moved.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string

try {
    $result = $apiInstance->updateVaultMarketBlockAllocation($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->updateVaultMarketBlockAllocation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**|  |

### Return type

**\Crossly\Model\Vault\ListVaultMarketBlocksItem**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateVaultMarketChannel()`

```php
updateVaultMarketChannel(): \Crossly\Model\Vault\GetVaultMarketChannelResponse
```

Change the switches: `telegramAlerts`, `telegramDigest`, `pushCapPerDay` (0 to 20). Margin calls and recalls are never capped. Returns the new view.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->updateVaultMarketChannel();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->updateVaultMarketChannel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\GetVaultMarketChannelResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateVaultMarketDealerBand()`

```php
updateVaultMarketDealerBand(): \Crossly\Model\Vault\ListVaultMarketDealerBandsItem
```

Commit to an Instant Exit band on a key: a standing bid for `units` kept at `bandBps` of the mark, never above `maxPriceCents`, re-quoted as the mark moves.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->updateVaultMarketDealerBand();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->updateVaultMarketDealerBand: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\ListVaultMarketDealerBandsItem**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateVaultMarketDealerPool()`

```php
updateVaultMarketDealerPool($id): \Crossly\Model\Vault\ListVaultMarketDealerPoolsItem
```

Change a curve pool: spot, step, fee, levels, units, buy budget, floor, ceiling, or pause / resume. Re-quoted at once.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->updateVaultMarketDealerPool($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->updateVaultMarketDealerPool: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Vault\ListVaultMarketDealerPoolsItem**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateVaultMarketEntityMember()`

```php
updateVaultMarketEntityMember($id, $member_id): \Crossly\Model\Vault\GetVaultMarketEntityByIdResponse
```

Admin: change a member's role, limits or sub-accounts. The last admin cannot be demoted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$member_id = 'member_id_example'; // string

try {
    $result = $apiInstance->updateVaultMarketEntityMember($id, $member_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->updateVaultMarketEntityMember: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **member_id** | **string**|  |

### Return type

**\Crossly\Model\Vault\GetVaultMarketEntityByIdResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateVaultMarketEntitySubaccountLimit()`

```php
updateVaultMarketEntitySubaccountLimit($id, $sub_id): \Crossly\Model\Vault\GetVaultMarketEntityByIdResponse
```

Admin: set a sub-account's limits (per-order notional, units per key, gross, net, leverage), held to the entity's caps. `limits: null` clears them.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$sub_id = 'sub_id_example'; // string

try {
    $result = $apiInstance->updateVaultMarketEntitySubaccountLimit($id, $sub_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->updateVaultMarketEntitySubaccountLimit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **sub_id** | **string**|  |

### Return type

**\Crossly\Model\Vault\GetVaultMarketEntityByIdResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateVaultMarketEntityUsdElection()`

```php
updateVaultMarketEntityUsdElection($id): \Crossly\Model\Vault\GetVaultMarketEntityByIdResponse
```

Admin: elect USD for the entity (`usdOnly`). Its sub-accounts then post collateral in USD only and pay every fee in USD, and any CBX reward paid to one of them is converted to USD by the custodian in that account. Audited; it can be turned off again.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->updateVaultMarketEntityUsdElection($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->updateVaultMarketEntityUsdElection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Vault\GetVaultMarketEntityByIdResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateVaultMarketFollowCopyWatch()`

```php
updateVaultMarketFollowCopyWatch($handle): \Crossly\Model\Vault\DeleteVaultMarketFollowCopyWatchResponse
```

Copy-watch a collector who shares bids and asks: you get an alert when they rest a new one. It never places an order for you.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$handle = 'handle_example'; // string

try {
    $result = $apiInstance->updateVaultMarketFollowCopyWatch($handle);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->updateVaultMarketFollowCopyWatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**|  |

### Return type

**\Crossly\Model\Vault\DeleteVaultMarketFollowCopyWatchResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateVaultMarketFollowSharing()`

```php
updateVaultMarketFollowSharing(): \Crossly\Model\Vault\GetVaultMarketFollowSharingResponse
```

Turn sharing switches on or off (`isPublic`, `showBuys`, `deposits`, `sales`, `hallLoans`, `orders`, `leaderboard`). A switch shows only what happens after it goes on; all but the profile itself need the profile public.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->updateVaultMarketFollowSharing();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->updateVaultMarketFollowSharing: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\GetVaultMarketFollowSharingResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateVaultMarketHomeUnit()`

```php
updateVaultMarketHomeUnit(): \Crossly\Model\Vault\UpdateVaultMarketHomeUnitResponse
```

Show exactly these vault units in your Crossly World home: { units: [{ vaultItemId, visitors }] }. Units left out come out of their cases; units already standing stay where they are; new ones go into a free display-case or shelf slot, else a glass case of their own along a wall. visitors: true lets people who may enter your home see that unit (default false: only you). Returns placed, unplaced (no free case: the home is full), refused (with why) and the desk. Display only: nothing moves.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->updateVaultMarketHomeUnit();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->updateVaultMarketHomeUnit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\UpdateVaultMarketHomeUnitResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateVaultMarketIndex()`

```php
updateVaultMarketIndex($slug): \Crossly\Model\Vault\GetVaultMarketIndexResponse
```

Rename, re-weight, share or change the keys of an index of your own; its level carries on.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string

try {
    $result = $apiInstance->updateVaultMarketIndex($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->updateVaultMarketIndex: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **slug** | **string**|  |

### Return type

**\Crossly\Model\Vault\GetVaultMarketIndexResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateVaultMarketLendingElection()`

```php
updateVaultMarketLendingElection(): \Crossly\Model\Vault\GetVaultMarketLendingElectionResponse
```

Change your lender election (applies to loans opened after the change). Needs lending.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->updateVaultMarketLendingElection();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->updateVaultMarketLendingElection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\GetVaultMarketLendingElectionResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateVaultMarketMmMmp()`

```php
updateVaultMarketMmMmp(): \Crossly\Model\Vault\GetVaultMarketMmMmpResponse
```

Set market-maker protection: N units or $X filled on your quotes within T seconds pulls every quote and freezes quoting for a set time.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->updateVaultMarketMmMmp();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->updateVaultMarketMmMmp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\GetVaultMarketMmMmpResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateVaultMarketMode()`

```php
updateVaultMarketMode(): \Crossly\Model\Vault\GetVaultMarketModeResponse
```

Choose your Vault Markets mode: `mode` simple or pro. Remembered for you on the web and in the app. A display preference only: it places nothing and moves no money.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->updateVaultMarketMode();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->updateVaultMarketMode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\GetVaultMarketModeResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateVaultMarketOfferAlert()`

```php
updateVaultMarketOfferAlert(): \Crossly\Model\Vault\UpdateVaultMarketOfferAlertResponse
```

Set (or clear with null) the bid price that should always notify you on a key you hold, and mute or unmute offer notices on it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->updateVaultMarketOfferAlert();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->updateVaultMarketOfferAlert: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\UpdateVaultMarketOfferAlertResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateVaultMarketPaperLeaderboard()`

```php
updateVaultMarketPaperLeaderboard(): \Crossly\Model\Vault\UpdateVaultMarketPaperLeaderboardResponse
```

Join or leave the weekly paper leaderboard. Joining needs a display name (2 to 24 letters, numbers, spaces, dots, dashes or underscores), never your real name. Returns `{ optIn, displayName }`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->updateVaultMarketPaperLeaderboard();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->updateVaultMarketPaperLeaderboard: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\UpdateVaultMarketPaperLeaderboardResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateVaultMarketPositionExit()`

```php
updateVaultMarketPositionExit($id): \Crossly\Model\Vault\UpdateVaultMarketPositionExitResponse
```

Set a position's take-profit / stop-loss: a long is closed, a short covered, when the last trade reaches one. Both null clears them.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->updateVaultMarketPositionExit($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->updateVaultMarketPositionExit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Vault\UpdateVaultMarketPositionExitResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateVaultMarketPriceWidget()`

```php
updateVaultMarketPriceWidget($id): \Crossly\Model\Vault\ListVaultMarketPriceWidgetsItem
```

Change a widget: name, range, layout, theme, affiliate code (null for none) or allowed sites. The market or index it shows never changes: make a new widget for another.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->updateVaultMarketPriceWidget($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->updateVaultMarketPriceWidget: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Vault\ListVaultMarketPriceWidgetsItem**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateVaultMarketProfile()`

```php
updateVaultMarketProfile(): \Crossly\Model\Vault\GetVaultMarketProfileResponse
```

Turn your public vault profile on or off (`isPublic`) and whether followers see your new buys (`showBuys`). It shows weights by market, never dollars.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->updateVaultMarketProfile();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->updateVaultMarketProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\GetVaultMarketProfileResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateVaultMarketRecurring()`

```php
updateVaultMarketRecurring($id): \Crossly\Model\Vault\ListVaultMarketRecurringItem
```

Change a recurring buy's schedule, caps, cards or auto-lend, or pause / resume it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->updateVaultMarketRecurring($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->updateVaultMarketRecurring: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Vault\ListVaultMarketRecurringItem**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateVaultMarketSetGoal()`

```php
updateVaultMarketSetGoal($id): \Crossly\Model\Vault\GetVaultMarketSetGoalResponse
```

Change what a piece must be to count (condition, grade mode, grade). Refused while a basket bid works: cancel it first.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->updateVaultMarketSetGoal($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->updateVaultMarketSetGoal: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Vault\GetVaultMarketSetGoalResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateVaultMarketShareCard()`

```php
updateVaultMarketShareCard($id): \Crossly\Model\Vault\ListVaultMarketShareCardsItem
```

Show or hide the dollar amounts on one of your share cards (`showAmounts`).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->updateVaultMarketShareCard($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->updateVaultMarketShareCard: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Vault\ListVaultMarketShareCardsItem**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateVaultMarketSupplyDeposit()`

```php
updateVaultMarketSupplyDeposit($id): \Crossly\Model\Vault\UpdateVaultMarketSupplyDepositResponse
```

Change a deposit's toggles: `autoListBps` (list at that share of the mark once stored; null = do not) and `lendWhenIdle`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->updateVaultMarketSupplyDeposit($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->updateVaultMarketSupplyDeposit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Vault\UpdateVaultMarketSupplyDepositResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateVaultMarketSupplyRoundUp()`

```php
updateVaultMarketSupplyRoundUp(): \Crossly\Model\Vault\GetVaultMarketSupplyRoundUpResponse
```

Set the round-up: `shareBps` (1%-50%) of each payout released to you adds to a budget; when it covers the cheapest vault unit on `bookKey`, one unit is bought with your saved card, never above the budget.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->updateVaultMarketSupplyRoundUp();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->updateVaultMarketSupplyRoundUp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\GetVaultMarketSupplyRoundUpResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateVaultMarketTodBeneficiary()`

```php
updateVaultMarketTodBeneficiary(): \Crossly\Model\Vault\UpdateVaultMarketTodBeneficiaryResponse
```

Replace your beneficiary list (keep an id to edit one): full name, contact (email or @username), relationship, and share in basis points; shares add up to 10000. Returns `{ beneficiaries, removed }`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->updateVaultMarketTodBeneficiary();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->updateVaultMarketTodBeneficiary: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\UpdateVaultMarketTodBeneficiaryResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateVaultMarketTodDesignation()`

```php
updateVaultMarketTodDesignation(): \Crossly\Model\Vault\UpdateVaultMarketTodDesignationResponse
```

Leave one of your units to one beneficiary (beneficiaryId null clears it; the unit then follows the shares). Returns `{ vaultItemId, beneficiaryId }`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->updateVaultMarketTodDesignation();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->updateVaultMarketTodDesignation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Crossly\Model\Vault\UpdateVaultMarketTodDesignationResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateVaultMarketWorldRoomVaultGate()`

```php
updateVaultMarketWorldRoomVaultGate($id): \Crossly\Model\Vault\UpdateVaultMarketWorldRoomVaultGateResponse
```

Set the vault-holder door on your own room (its collection rooms follow): visitors must hold minValueCents (cents, at reliable A/B marks) and/or minUnits units in the Crossly vault, mode any (either) or all (both), optionally only one product (scope kind product, ref the catalogue product id), bullion family (bullion, the family slug) or category (category, the slug). Send null to open it again. Returns `{ gate }`. Moves no money.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->updateVaultMarketWorldRoomVaultGate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->updateVaultMarketWorldRoomVaultGate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\Crossly\Model\Vault\UpdateVaultMarketWorldRoomVaultGateResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateVaultMarketWorldSpaceVaultGate()`

```php
updateVaultMarketWorldSpaceVaultGate($slug): \Crossly\Model\Vault\UpdateVaultMarketWorldRoomVaultGateResponse
```

Set the vault-holder door on a Space you host: the same rule as a room (minValueCents at reliable marks and/or minUnits, mode, optional scope). Send null to open it again. Returns `{ gate }`. Moves no money.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\VaultMarketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string

try {
    $result = $apiInstance->updateVaultMarketWorldSpaceVaultGate($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultMarketsApi->updateVaultMarketWorldSpaceVaultGate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **slug** | **string**|  |

### Return type

**\Crossly\Model\Vault\UpdateVaultMarketWorldRoomVaultGateResponse**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
