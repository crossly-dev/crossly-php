# OpenAPIClient-php

The seller-facing Crossly API — listings, crossposting, orders, analytics. Authenticate with a Personal Access Token (`Authorization: Bearer crossly_pat_…`) or a seller OAuth token (`crossly_oat_…`), scoped `<domain>:<read|write>`. Buyer endpoints are a SEPARATE API with a separate principal — see the Crossly Buyer API.


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



// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\AIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createAiCategorize();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AIApi->createAiCategorize: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://crossly.net/api*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AIApi* | [**createAiCategorize**](docs/Api/AIApi.md#createaicategorize) | **POST** /v1/ai/categorize | Taxonomy guess from a single image URL.
*AIApi* | [**createAiCategorizeFromImage**](docs/Api/AIApi.md#createaicategorizefromimage) | **POST** /v1/ai/categorize-from-image | Taxonomy guess from a single base64 image.
*AIApi* | [**createAiEnhanceDescription**](docs/Api/AIApi.md#createaienhancedescription) | **POST** /v1/ai/enhance-description | SEO-rewrite a listing description.
*AIApi* | [**createAiEnhanceListing**](docs/Api/AIApi.md#createaienhancelisting) | **POST** /v1/ai/enhance-listing | Rewrite title + description + tags in one call.
*AIApi* | [**createAiEnhanceTitle**](docs/Api/AIApi.md#createaienhancetitle) | **POST** /v1/ai/enhance-title | SEO-rewrite a listing title.
*AIApi* | [**createAiExtractReceipt**](docs/Api/AIApi.md#createaiextractreceipt) | **POST** /v1/ai/extract-receipt | Structured data extraction from a receipt photo.
*AIApi* | [**createAiGenerateListing**](docs/Api/AIApi.md#createaigeneratelisting) | **POST** /v1/ai/generate-listing | Generate full listing fields from up to 4 image URLs.
*AIApi* | [**createAiHelp**](docs/Api/AIApi.md#createaihelp) | **POST** /v1/ai/help | In-app help Q&amp;A grounded in supplied docs.
*AIApi* | [**createAiMagicListing**](docs/Api/AIApi.md#createaimagiclisting) | **POST** /v1/ai/magic-listing | Generate full listing fields from base64 photos.
*AIApi* | [**createAiTestKey**](docs/Api/AIApi.md#createaitestkey) | **POST** /v1/ai/test-key | Live-ping a candidate BYO-key.
*AIApi* | [**createListingAiImage**](docs/Api/AIApi.md#createlistingaiimage) | **POST** /v1/listings/ai-image | Generate a listing photo with the caller&#39;s own image-provider key; the result is marked AI-generated.
*AIApi* | [**createListingAiImagePrompt**](docs/Api/AIApi.md#createlistingaiimageprompt) | **POST** /v1/listings/ai-image/prompt | Build the AI product-photo prompt for a listing (no image is generated).
*AIApi* | [**deleteAiKey**](docs/Api/AIApi.md#deleteaikey) | **DELETE** /v1/ai/key | Remove the BYO-key for a provider.
*AIApi* | [**getAiProvider**](docs/Api/AIApi.md#getaiprovider) | **GET** /v1/ai/providers | Static catalog of supported AI providers.
*AIApi* | [**getAiStatus**](docs/Api/AIApi.md#getaistatus) | **GET** /v1/ai/status | BYO-key state for the calling user.
*AIApi* | [**updateAiImageConfig**](docs/Api/AIApi.md#updateaiimageconfig) | **PUT** /v1/ai/image-config | Choose the AI image provider/model, independently of the text provider.
*AIApi* | [**updateAiKey**](docs/Api/AIApi.md#updateaikey) | **PUT** /v1/ai/key | Save an encrypted BYO-key for an AI provider.
*AccountApi* | [**createAccountCancelDeletion**](docs/Api/AccountApi.md#createaccountcanceldeletion) | **POST** /v1/account/cancel-deletion | Cancel a pending account deletion.
*AccountApi* | [**createAccountLogoutAll**](docs/Api/AccountApi.md#createaccountlogoutall) | **POST** /v1/account/logout-all | Revoke every browser auth session for this user.
*AccountApi* | [**createAccountRequestDeletion**](docs/Api/AccountApi.md#createaccountrequestdeletion) | **POST** /v1/account/request-deletion | Schedule account deletion after a grace period.
*AccountApi* | [**deleteAuthSession**](docs/Api/AccountApi.md#deleteauthsession) | **DELETE** /v1/auth/sessions | Revoke all active browser sessions.
*AccountApi* | [**deleteAuthSessionBySessionId**](docs/Api/AccountApi.md#deleteauthsessionbysessionid) | **DELETE** /v1/auth/sessions/{sessionId} | Revoke a single browser session by id.
*AccountApi* | [**deleteConnectedApp**](docs/Api/AccountApi.md#deleteconnectedapp) | **DELETE** /v1/connected-apps/{grantId} | Disconnect a third-party app. Its tokens stop working immediately.
*AccountApi* | [**getAccountDeletionStatus**](docs/Api/AccountApi.md#getaccountdeletionstatus) | **GET** /v1/account/deletion-status | Get the currently-pending deletion request, if any.
*AccountApi* | [**getMe**](docs/Api/AccountApi.md#getme) | **GET** /v1/me | Identity check — authenticated user + PAT scopes + account state.
*AccountApi* | [**getMembership**](docs/Api/AccountApi.md#getmembership) | **GET** /v1/membership | The caller&#39;s Crossly One membership status and benefits.
*AccountApi* | [**listAuthSessions**](docs/Api/AccountApi.md#listauthsessions) | **GET** /v1/auth/sessions | List active browser auth sessions.
*AccountApi* | [**listConnectedApps**](docs/Api/AccountApi.md#listconnectedapps) | **GET** /v1/connected-apps | List third-party OAuth apps with access to this account.
*AccountsApi* | [**createAccount**](docs/Api/AccountsApi.md#createaccount) | **POST** /v1/accounts | Connect a new platform account (kicks off OAuth or extension handshake).
*AccountsApi* | [**createConnectionEmailImap**](docs/Api/AccountsApi.md#createconnectionemailimap) | **POST** /v1/connections/email/imap | Add an IMAP mailbox connection.
*AccountsApi* | [**createConnectionEmailImapTest**](docs/Api/AccountsApi.md#createconnectionemailimaptest) | **POST** /v1/connections/email/imap/test | Validate IMAP credentials without persisting.
*AccountsApi* | [**createConnectionRequest**](docs/Api/AccountsApi.md#createconnectionrequest) | **POST** /v1/connections/{platform}/request | Express interest in a request_only platform.
*AccountsApi* | [**createPlatformAccountConnect**](docs/Api/AccountsApi.md#createplatformaccountconnect) | **POST** /v1/platform-accounts/{platform}/connect | Revive or initiate connection for a cookie platform.
*AccountsApi* | [**createPlatformAccountDisconnect**](docs/Api/AccountsApi.md#createplatformaccountdisconnect) | **POST** /v1/platform-accounts/{platform}/disconnect | Archive every active account row for a platform.
*AccountsApi* | [**createPlatformAccountHistoryImport**](docs/Api/AccountsApi.md#createplatformaccounthistoryimport) | **POST** /v1/platform-accounts/{platform}/history-import | Set how far back to backfill order history + active listings for a platform, and run it now.
*AccountsApi* | [**createPlatformAccountRefreshStatus**](docs/Api/AccountsApi.md#createplatformaccountrefreshstatus) | **POST** /v1/platform-accounts/refresh-status | Run on-demand healthchecks across cookie accounts.
*AccountsApi* | [**deleteAccount**](docs/Api/AccountsApi.md#deleteaccount) | **DELETE** /v1/accounts/{id} | Disconnect a platform account.
*AccountsApi* | [**deleteConnectionById**](docs/Api/AccountsApi.md#deleteconnectionbyid) | **DELETE** /v1/connections/by-id/{id} | Disconnect a specific OAuth connection by id.
*AccountsApi* | [**deleteConnectionEmailImap**](docs/Api/AccountsApi.md#deleteconnectionemailimap) | **DELETE** /v1/connections/email/imap/{id} | Remove an IMAP mailbox connection.
*AccountsApi* | [**getConnectionEmail**](docs/Api/AccountsApi.md#getconnectionemail) | **GET** /v1/connections/email | List IMAP and email-OAuth connections.
*AccountsApi* | [**getConnectionExtensionOnline**](docs/Api/AccountsApi.md#getconnectionextensiononline) | **GET** /v1/connections/extension-online | Check if the browser extension is online.
*AccountsApi* | [**getOauthInit**](docs/Api/AccountsApi.md#getoauthinit) | **GET** /v1/oauth/{platform}/init | Return the OAuth authorize URL for an API-track platform.
*AccountsApi* | [**getPlatformLimit**](docs/Api/AccountsApi.md#getplatformlimit) | **GET** /v1/platforms/limits | eBay free-tier + Etsy fees aggregate.
*AccountsApi* | [**listAccounts**](docs/Api/AccountsApi.md#listaccounts) | **GET** /v1/accounts | List your connected platform accounts.
*AccountsApi* | [**listConnections**](docs/Api/AccountsApi.md#listconnections) | **GET** /v1/connections | List OAuth-connected API platforms.
*AccountsApi* | [**updateConnectionEmailImap**](docs/Api/AccountsApi.md#updateconnectionemailimap) | **PATCH** /v1/connections/email/imap/{id} | Edit an IMAP mailbox connection.
*AccountsApi* | [**updatePlatformPreference**](docs/Api/AccountsApi.md#updateplatformpreference) | **PATCH** /v1/platforms/{platform}/preferences | Update per-platform connection preferences.
*ActivityApi* | [**getActionLog**](docs/Api/ActivityApi.md#getactionlog) | **GET** /v1/action-log/{id} | Get one action-log event by id (ownership-checked).
*ActivityApi* | [**getActionLogFacet**](docs/Api/ActivityApi.md#getactionlogfacet) | **GET** /v1/action-log/facets | Distinct platforms / actions / categories present in the caller&#39;s action log (last 90 days) — powers filter dropdowns before you query.
*ActivityApi* | [**listActionLog**](docs/Api/ActivityApi.md#listactionlog) | **GET** /v1/action-log | List action-log events — the semantic \&quot;what happened\&quot; record of every user + platform action. Filter by platform / action / category / status / source / target, and a since/until created_at window.
*ActivityApi* | [**listActionLogCalls**](docs/Api/ActivityApi.md#listactionlogcalls) | **GET** /v1/action-log/{id}/calls | The outbound platform HTTP calls under an event (oldest first) — url, method, status, latency, redacted request/response bodies, proxy + recipe/hash. Answers \&quot;what was sent / what went wrong\&quot;.
*AdsApi* | [**createAdOffsiteCampaign**](docs/Api/AdsApi.md#createadoffsitecampaign) | **POST** /v1/ads/offsite/campaigns | Launch an offsite campaign for an item.
*AdsApi* | [**createAdOffsiteResume**](docs/Api/AdsApi.md#createadoffsiteresume) | **POST** /v1/ads/offsite/resume | Clear an auto-pause and resume offsite spend.
*AdsApi* | [**getAdOffsite**](docs/Api/AdsApi.md#getadoffsite) | **GET** /v1/ads/offsite | Your offsite-ads opt-in and its terms.
*AdsApi* | [**getAdOffsiteEligibility**](docs/Api/AdsApi.md#getadoffsiteeligibility) | **GET** /v1/ads/offsite/eligibility | Whether an item can run offsite, and why not.
*AdsApi* | [**getAdOffsiteReport**](docs/Api/AdsApi.md#getadoffsitereport) | **GET** /v1/ads/offsite/report | What your offsite budget bought — including the misses.
*AdsApi* | [**updateAdOffsite**](docs/Api/AdsApi.md#updateadoffsite) | **PUT** /v1/ads/offsite | Turn offsite ads on or off. Yours alone to set.
*AnalyticsApi* | [**getAnalyticBookkeeping**](docs/Api/AnalyticsApi.md#getanalyticbookkeeping) | **GET** /v1/analytics/bookkeeping | Monthly P&amp;L + per-platform breakdown for a calendar year.
*AnalyticsApi* | [**getAnalyticByPlatform**](docs/Api/AnalyticsApi.md#getanalyticbyplatform) | **GET** /v1/analytics/by-platform | Sales + revenue grouped by platform for the last N days.
*AnalyticsApi* | [**getAnalyticDashboard**](docs/Api/AnalyticsApi.md#getanalyticdashboard) | **GET** /v1/analytics/dashboard | Composite dashboard: KPIs + breakdowns + recent activity.
*AnalyticsApi* | [**getAnalyticItem**](docs/Api/AnalyticsApi.md#getanalyticitem) | **GET** /v1/analytics/items | Per-item P&amp;L for sold inventory.
*AnalyticsApi* | [**getAnalyticSummary**](docs/Api/AnalyticsApi.md#getanalyticsummary) | **GET** /v1/analytics/summary | Headline KPIs for the last N days.
*AnalyticsApi* | [**getAnalyticTimesery**](docs/Api/AnalyticsApi.md#getanalytictimesery) | **GET** /v1/analytics/timeseries | Daily sales + revenue series for the last N days.
*AnalyticsApi* | [**getAnalyticToday**](docs/Api/AnalyticsApi.md#getanalytictoday) | **GET** /v1/analytics/today | Today&#39;s checklist + 14-day activity streak.
*AnalyticsApi* | [**listInsightByPlatform**](docs/Api/AnalyticsApi.md#listinsightbyplatform) | **GET** /v1/insights/by-platform | Platform velocity + margin insight (90-day window).
*AutomationApi* | [**createAutomationRule**](docs/Api/AutomationApi.md#createautomationrule) | **POST** /v1/automation/rules | Create an automation rule.
*AutomationApi* | [**createAutomationRuleImport**](docs/Api/AutomationApi.md#createautomationruleimport) | **POST** /v1/automation/rules/import | Import one or more rules from recipe JSON (single or bundle).
*AutomationApi* | [**createAutomationRuleRunNow**](docs/Api/AutomationApi.md#createautomationrulerunnow) | **POST** /v1/automation/rules/{id}/run-now | Fire an automation rule immediately.
*AutomationApi* | [**createAutomationRuleToggle**](docs/Api/AutomationApi.md#createautomationruletoggle) | **POST** /v1/automation/rules/{id}/toggle | Flip an automation rule between active and inactive.
*AutomationApi* | [**createAutomationRuleValidateRecipe**](docs/Api/AutomationApi.md#createautomationrulevalidaterecipe) | **POST** /v1/automation/rules/validate-recipe | Dry-run validate one or more recipes against the live catalog.
*AutomationApi* | [**createRepriceEventApprove**](docs/Api/AutomationApi.md#createrepriceeventapprove) | **POST** /v1/reprice-events/{id}/approve | Apply a pending reprice proposal: the recorded price goes to the recorded platform listing. Proposals older than three days expire instead.
*AutomationApi* | [**createRepriceEventSkip**](docs/Api/AutomationApi.md#createrepriceeventskip) | **POST** /v1/reprice-events/{id}/skip | Skip a pending reprice proposal; the price stays as it is.
*AutomationApi* | [**deleteAutomationRule**](docs/Api/AutomationApi.md#deleteautomationrule) | **DELETE** /v1/automation/rules/{id} | Delete an automation rule.
*AutomationApi* | [**getAutomationCatalog**](docs/Api/AutomationApi.md#getautomationcatalog) | **GET** /v1/automation/catalog | Supported triggerType / actionType / conditionType values for automation rules.
*AutomationApi* | [**getAutomationRule**](docs/Api/AutomationApi.md#getautomationrule) | **GET** /v1/automation/rules/{id} | Get a single automation rule.
*AutomationApi* | [**getAutomationRuleExport**](docs/Api/AutomationApi.md#getautomationruleexport) | **GET** /v1/automation/rules/export | Export the user&#39;s full rule library as a portable recipe bundle.
*AutomationApi* | [**getAutomationRuleExportById**](docs/Api/AutomationApi.md#getautomationruleexportbyid) | **GET** /v1/automation/rules/{id}/export | Export a single automation rule as a portable recipe.
*AutomationApi* | [**listAutomationRules**](docs/Api/AutomationApi.md#listautomationrules) | **GET** /v1/automation/rules | List automation rules.
*AutomationApi* | [**listAutomationRuns**](docs/Api/AutomationApi.md#listautomationruns) | **GET** /v1/automation/runs | Per-fire history for automation rules and workflow chain runs.
*AutomationApi* | [**listRepriceEvents**](docs/Api/AutomationApi.md#listrepriceevents) | **GET** /v1/reprice-events | Reprice decisions, newest first: applied, held at a floor, or pending approval (pending&#x3D;true for only those waiting).
*AutomationApi* | [**updateAutomationRule**](docs/Api/AutomationApi.md#updateautomationrule) | **PUT** /v1/automation/rules/{id} | Update an automation rule (full replace).
*BillingApi* | [**createBillingUpgrade**](docs/Api/BillingApi.md#createbillingupgrade) | **POST** /v1/billing/upgrade | Start an upgrade to a higher plan.
*BrandDropsApi* | [**createBrandDrop**](docs/Api/BrandDropsApi.md#createbranddrop) | **POST** /v1/brand-drops | Create a brand drop as a draft (name, dropAt in the future, optional description, cover image and Crossly platform-listing ids). Approved partners only (403 drop_partner_required); counts against your monthly allowance (403 drop_quota_exhausted).
*BrandDropsApi* | [**getBrandDrop**](docs/Api/BrandDropsApi.md#getbranddrop) | **GET** /v1/brand-drops/{id} | One of your brand drops, with its status and any note from Crossly’s review.
*BrandDropsApi* | [**getBrandDropPartner**](docs/Api/BrandDropsApi.md#getbranddroppartner) | **GET** /v1/brand-drops/partner | Your drop-partner terms (fee, promotion tier, monthly allowance, whether you may schedule without review) and how many drops you have created this month. partner is null when you are not an approved partner — apply at crossly.net/drops/apply.
*BrandDropsApi* | [**listBrandDropListings**](docs/Api/BrandDropsApi.md#listbranddroplistings) | **GET** /v1/brand-drops/{id}/listings | The listings a brand drop releases when it goes live.
*BrandDropsApi* | [**listBrandDrops**](docs/Api/BrandDropsApi.md#listbranddrops) | **GET** /v1/brand-drops | Your brand drops, newest start time first. Filter with ?status&#x3D;draft|pending_review|scheduled|live|sold_out|ended|cancelled. Empty when you are not a partner.
*BrandDropsApi* | [**updateBrandDrop**](docs/Api/BrandDropsApi.md#updatebranddrop) | **PATCH** /v1/brand-drops/{id} | Edit a brand drop and/or change its status: draft (withdraw / unschedule), pending_review (submit for review), scheduled (only with canSelfPublish — 403 drop_review_required otherwise), cancelled. Editing name, time or description of a reviewed drop sends it back to review. Live and finished drops cannot be changed.
*BrandDropsApi* | [**updateBrandDropListing**](docs/Api/BrandDropsApi.md#updatebranddroplisting) | **PUT** /v1/brand-drops/{id}/listings | Replace the listings a brand drop releases, by master listing id (up to 100). Each must already be listed on Crossly — otherwise 400 listing_not_on_crossly naming them. Not allowed once the drop is live or finished.
*BreaksApi* | [**createBreak**](docs/Api/BreaksApi.md#createbreak) | **POST** /v1/breaks | Start a break on one of your listings: pick (buyers choose a spot) or random (drawn). The seed is committed now and revealed at the draw.
*BreaksApi* | [**createBreakCancel**](docs/Api/BreaksApi.md#createbreakcancel) | **POST** /v1/breaks/{id}/cancel | Cancel a break before any spot is paid for; after that, refund those orders instead (409).
*BreaksApi* | [**createBreakDraw**](docs/Api/BreaksApi.md#createbreakdraw) | **POST** /v1/breaks/{id}/draw | Draw a sold-out random break: assigns spots from the committed seed and reveals it.
*BreaksApi* | [**createBreakOpened**](docs/Api/BreaksApi.md#createbreakopened) | **POST** /v1/breaks/{id}/opened | Mark the product opened on stream.
*BreaksApi* | [**createBreakSpotHit**](docs/Api/BreaksApi.md#createbreakspothit) | **POST** /v1/breaks/{id}/spots/{spotId}/hits | Record what a spot pulled.
*BreaksApi* | [**getBreak**](docs/Api/BreaksApi.md#getbreak) | **GET** /v1/breaks/{id} | A break’s board with every spot, its buyer and its hits.
*BreaksApi* | [**listBreaks**](docs/Api/BreaksApi.md#listbreaks) | **GET** /v1/breaks | Your card breaks, newest first.
*BuyerApi* | [**createSpatialAuctionRoomBid**](docs/Api/BuyerApi.md#createspatialauctionroombid) | **POST** /v1/spatial/auction/rooms/{sceneId}/bid | Bid on the lot currently up in a room.
*CBXApi* | [**createCbxAccrual**](docs/Api/CBXApi.md#createcbxaccrual) | **POST** /v1/cbx/accruals | Record cashback a user earned, in cents.
*CBXApi* | [**createCbxAccrualPurchase**](docs/Api/CBXApi.md#createcbxaccrualpurchase) | **POST** /v1/cbx/accruals/purchase | Accrue cashback for an order at the resolved rate.
*CBXApi* | [**createCbxAccrualReverse**](docs/Api/CBXApi.md#createcbxaccrualreverse) | **POST** /v1/cbx/accruals/{accrualId}/reverse | Claw back a pending accrual — a refund, a cancellation, fraud.
*CBXApi* | [**createCbxAdCreditPurchase**](docs/Api/CBXApi.md#createcbxadcreditpurchase) | **POST** /v1/cbx/ad-credit/purchase | Claim ad credit against a CBX transfer you sent.
*CBXApi* | [**createCbxAdCreditQuote**](docs/Api/CBXApi.md#createcbxadcreditquote) | **POST** /v1/cbx/ad-credit/quote | What a given number of tokens buys in ad credit.
*CBXApi* | [**createCbxAdCreditSpend**](docs/Api/CBXApi.md#createcbxadcreditspend) | **POST** /v1/cbx/ad-credit/spend | Consume credit for a billing period.
*CBXApi* | [**createCbxBoost**](docs/Api/CBXApi.md#createcbxboost) | **POST** /v1/cbx/boosts | Fund elevated cashback on matching items.
*CBXApi* | [**createCbxBoostPause**](docs/Api/CBXApi.md#createcbxboostpause) | **POST** /v1/cbx/boosts/{boostId}/pause | Stop a boost from matching further orders.
*CBXApi* | [**createCbxCampaign**](docs/Api/CBXApi.md#createcbxcampaign) | **POST** /v1/cbx/campaigns | Create a campaign in draft.
*CBXApi* | [**createCbxCampaignApprove**](docs/Api/CBXApi.md#createcbxcampaignapprove) | **POST** /v1/cbx/campaigns/{campaignId}/approve | Approve the previewed recipient list.
*CBXApi* | [**createCbxCampaignExecuteByCampaignId**](docs/Api/CBXApi.md#createcbxcampaignexecutebycampaignid) | **POST** /v1/cbx/campaigns/{campaignId}/execute | Pay an approved campaign.
*CBXApi* | [**createCbxCampaignPreview**](docs/Api/CBXApi.md#createcbxcampaignpreview) | **POST** /v1/cbx/campaigns/{campaignId}/preview | Compute the recipient list without paying it.
*CBXApi* | [**createCbxClaim**](docs/Api/CBXApi.md#createcbxclaim) | **POST** /v1/cbx/claims | Reserve a claim. Debits the balance and queues the transfer.
*CBXApi* | [**createCbxClaimQuote**](docs/Api/CBXApi.md#createcbxclaimquote) | **POST** /v1/cbx/claims/quote | What a claim would cost, without committing to it.
*CBXApi* | [**createCbxClaimSend**](docs/Api/CBXApi.md#createcbxclaimsend) | **POST** /v1/cbx/claims/{claimId}/send | Send a reserved claim on chain.
*CBXApi* | [**createCbxCreditDraw**](docs/Api/CBXApi.md#createcbxcreditdraw) | **POST** /v1/cbx/credit/draw | Draw against a line, receiving grant credit.
*CBXApi* | [**createCbxCreditFreeze**](docs/Api/CBXApi.md#createcbxcreditfreeze) | **POST** /v1/cbx/credit/freeze | Stop new draws. Leaves the drawn balance on its terms.
*CBXApi* | [**createCbxCreditRefresh**](docs/Api/CBXApi.md#createcbxcreditrefresh) | **POST** /v1/cbx/credit/refresh | Recompute a limit from trading history and stake.
*CBXApi* | [**createCbxCreditRepay**](docs/Api/CBXApi.md#createcbxcreditrepay) | **POST** /v1/cbx/credit/repay | Apply a repayment to a line.
*CBXApi* | [**createCbxDisbursementRule**](docs/Api/CBXApi.md#createcbxdisbursementrule) | **POST** /v1/cbx/disbursement-rules | Fire a distribution when the events pool crosses a threshold.
*CBXApi* | [**createCbxDisbursementRuleActive**](docs/Api/CBXApi.md#createcbxdisbursementruleactive) | **POST** /v1/cbx/disbursement-rules/{ruleId}/active | Enable or disable a rule.
*CBXApi* | [**createCbxDisbursementRuleCheck**](docs/Api/CBXApi.md#createcbxdisbursementrulecheck) | **POST** /v1/cbx/disbursement-rules/{ruleId}/check | Evaluate a rule now. Fires it if every gate passes.
*CBXApi* | [**createCbxEarnTier**](docs/Api/CBXApi.md#createcbxearntier) | **POST** /v1/cbx/earn-tiers | Define an earn term.
*CBXApi* | [**createCbxRateQuote**](docs/Api/CBXApi.md#createcbxratequote) | **POST** /v1/cbx/rates/quote | What would this order earn, and why.
*CBXApi* | [**createCbxRedemption**](docs/Api/CBXApi.md#createcbxredemption) | **POST** /v1/cbx/redemptions | Pay for a service in CBX.
*CBXApi* | [**createCbxRedemptionQuote**](docs/Api/CBXApi.md#createcbxredemptionquote) | **POST** /v1/cbx/redemptions/quote | What a service costs in tokens right now.
*CBXApi* | [**createCbxReserve**](docs/Api/CBXApi.md#createcbxreserve) | **POST** /v1/cbx/reserve | Register your reserve after granting the payout allowance. Verified on chain: mint, delegate and allowance are read from the token account.
*CBXApi* | [**createCbxRevenueSweep**](docs/Api/CBXApi.md#createcbxrevenuesweep) | **POST** /v1/cbx/revenue/sweep | Move accrued revenue from the reserve to your revenue wallet.
*CBXApi* | [**createCbxSpend**](docs/Api/CBXApi.md#createcbxspend) | **POST** /v1/cbx/spends | Redeem a user&#39;s CBX against an order.
*CBXApi* | [**createCbxSpendReverse**](docs/Api/CBXApi.md#createcbxspendreverse) | **POST** /v1/cbx/spends/{externalId}/reverse | Refund a spend — give the tokens back and claw the skim back.
*CBXApi* | [**createCbxStakeTier**](docs/Api/CBXApi.md#createcbxstaketier) | **POST** /v1/cbx/stake-tiers | Define a staking tier.
*CBXApi* | [**createCbxSubject**](docs/Api/CBXApi.md#createcbxsubject) | **POST** /v1/cbx/subjects | Map one of your user ids to a CBX subject.
*CBXApi* | [**createCbxSubjectGrant**](docs/Api/CBXApi.md#createcbxsubjectgrant) | **POST** /v1/cbx/subjects/{subjectId}/grants | Issue grant credit — in-platform, non-withdrawable.
*CBXApi* | [**createCbxSubjectSpendPlan**](docs/Api/CBXApi.md#createcbxsubjectspendplan) | **POST** /v1/cbx/subjects/{subjectId}/spend-plan | Which balances would pay for a spend, and in what order.
*CBXApi* | [**createCbxSubjectStake**](docs/Api/CBXApi.md#createcbxsubjectstake) | **POST** /v1/cbx/subjects/{subjectId}/stake | Lock a subject&#39;s tokens for a tier.
*CBXApi* | [**createCbxSubjectStakeUnstake**](docs/Api/CBXApi.md#createcbxsubjectstakeunstake) | **POST** /v1/cbx/subjects/{subjectId}/stake/unstake | Start the cooldown. Tokens unlock when it elapses.
*CBXApi* | [**createCbxWalletChallenge**](docs/Api/CBXApi.md#createcbxwalletchallenge) | **POST** /v1/cbx/wallets/challenge | Start wallet verification. Returns a message for the user to sign.
*CBXApi* | [**createCbxWalletPaymentConfirm**](docs/Api/CBXApi.md#createcbxwalletpaymentconfirm) | **POST** /v1/cbx/wallet-payments/confirm | Present the signature. Returns a ship / do-not-ship decision.
*CBXApi* | [**createCbxWalletPaymentQuote**](docs/Api/CBXApi.md#createcbxwalletpaymentquote) | **POST** /v1/cbx/wallet-payments/quote | Build a transfer for the buyer to sign themselves.
*CBXApi* | [**createCbxWalletPaymentResolve**](docs/Api/CBXApi.md#createcbxwalletpaymentresolve) | **POST** /v1/cbx/wallet-payments/{paymentId}/resolve | A human decides on a held payment.
*CBXApi* | [**createCbxWalletVerify**](docs/Api/CBXApi.md#createcbxwalletverify) | **POST** /v1/cbx/wallets/verify | Complete wallet verification with the user&#39;s signature.
*CBXApi* | [**getCbxAdCredit**](docs/Api/CBXApi.md#getcbxadcredit) | **GET** /v1/cbx/ad-credit | Unspent advertising credit, in cents.
*CBXApi* | [**getCbxClaim**](docs/Api/CBXApi.md#getcbxclaim) | **GET** /v1/cbx/claims/{claimId} | A claim&#39;s current state.
*CBXApi* | [**getCbxCredit**](docs/Api/CBXApi.md#getcbxcredit) | **GET** /v1/cbx/credit | A seller&#39;s wholesale credit line.
*CBXApi* | [**getCbxMe**](docs/Api/CBXApi.md#getcbxme) | **GET** /v1/cbx/me | Identity check — which merchant this key belongs to, and its terms.
*CBXApi* | [**getCbxPool**](docs/Api/CBXApi.md#getcbxpool) | **GET** /v1/cbx/pool | Your events-pool balance.
*CBXApi* | [**getCbxRevenue**](docs/Api/CBXApi.md#getcbxrevenue) | **GET** /v1/cbx/revenue | Operator revenue accrued and not yet withdrawn.
*CBXApi* | [**getCbxSubjectBalance**](docs/Api/CBXApi.md#getcbxsubjectbalance) | **GET** /v1/cbx/subjects/{subjectId}/balance | What a subject holds: pending cents and available CBX.
*CBXApi* | [**getCbxSubjectBalanceBySubjectId**](docs/Api/CBXApi.md#getcbxsubjectbalancebysubjectid) | **GET** /v1/cbx/subjects/{subjectId}/balances | All three balances a subject holds.
*CBXApi* | [**getCbxSubjectSpent**](docs/Api/CBXApi.md#getcbxsubjectspent) | **GET** /v1/cbx/subjects/{subjectId}/spent | Total CBX a subject has spent in your marketplace.
*CBXApi* | [**getCbxSubjectStake**](docs/Api/CBXApi.md#getcbxsubjectstake) | **GET** /v1/cbx/subjects/{subjectId}/stake | A subject&#39;s staking state and spendable balance.
*CBXApi* | [**getCbxSubjectWallet**](docs/Api/CBXApi.md#getcbxsubjectwallet) | **GET** /v1/cbx/subjects/{subjectId}/wallet | The verified payout address for a subject, if any.
*CBXApi* | [**getCbxTreasury**](docs/Api/CBXApi.md#getcbxtreasury) | **GET** /v1/cbx/treasury | Your most recent reserve reconciliation.
*CBXApi* | [**listCbxAdCreditLedger**](docs/Api/CBXApi.md#listcbxadcreditledger) | **GET** /v1/cbx/ad-credit/ledger | Ad-credit movements, newest first.
*CBXApi* | [**listCbxBoosts**](docs/Api/CBXApi.md#listcbxboosts) | **GET** /v1/cbx/boosts | Your funded cashback boosts, newest first.
*CBXApi* | [**listCbxCampaignPayouts**](docs/Api/CBXApi.md#listcbxcampaignpayouts) | **GET** /v1/cbx/campaigns/{campaignId}/payouts | What a campaign actually paid, with the weight behind each amount.
*CBXApi* | [**listCbxCampaigns**](docs/Api/CBXApi.md#listcbxcampaigns) | **GET** /v1/cbx/campaigns | Your campaigns, newest first.
*CBXApi* | [**listCbxDisbursementProgress**](docs/Api/CBXApi.md#listcbxdisbursementprogress) | **GET** /v1/cbx/disbursement-progress | How close each rule is to firing — the public counter.
*CBXApi* | [**listCbxDisbursementRules**](docs/Api/CBXApi.md#listcbxdisbursementrules) | **GET** /v1/cbx/disbursement-rules | Threshold rules that fire community distributions.
*CBXApi* | [**listCbxEarnTiers**](docs/Api/CBXApi.md#listcbxearntiers) | **GET** /v1/cbx/earn-tiers | Earn terms on offer — longer maturation, higher rate.
*CBXApi* | [**listCbxRedemptionServices**](docs/Api/CBXApi.md#listcbxredemptionservices) | **GET** /v1/cbx/redemptions/services | Services payable in CBX, and the discount each carries.
*CBXApi* | [**listCbxStakeTiers**](docs/Api/CBXApi.md#listcbxstaketiers) | **GET** /v1/cbx/stake-tiers | Staking tiers — what locking tokens buys.
*CBXApi* | [**listCbxSubjectGrants**](docs/Api/CBXApi.md#listcbxsubjectgrants) | **GET** /v1/cbx/subjects/{subjectId}/grants | Live grants, soonest-expiring first.
*CBXApi* | [**listCbxSubjectLedger**](docs/Api/CBXApi.md#listcbxsubjectledger) | **GET** /v1/cbx/subjects/{subjectId}/ledger | A subject&#39;s CBX ledger, newest first.
*CBXApi* | [**listCbxWalletPaymentReview**](docs/Api/CBXApi.md#listcbxwalletpaymentreview) | **GET** /v1/cbx/wallet-payments/review | Payments held for a human — the ops queue.
*COSMApi* | [**createCosmAttestationAnchor**](docs/Api/COSMApi.md#createcosmattestationanchor) | **POST** /v1/cosm/attestations/{id}/anchor | Record a signature for a commitment anchored BY HAND.
*COSMApi* | [**createCosmAuction**](docs/Api/COSMApi.md#createcosmauction) | **POST** /v1/cosm/auction | List an owned cosmetic for COSM.
*COSMApi* | [**createCosmAuctionBuy**](docs/Api/COSMApi.md#createcosmauctionbuy) | **POST** /v1/cosm/auction/{id}/buy | Buy an open listing.
*COSMApi* | [**createCosmCosmeticBuy**](docs/Api/COSMApi.md#createcosmcosmeticbuy) | **POST** /v1/cosm/cosmetics/{id}/buy | Buy an earned-tier cosmetic. The COSM is DESTROYED.
*COSMApi* | [**createCosmCosmeticBuyCbx**](docs/Api/COSMApi.md#createcosmcosmeticbuycbx) | **POST** /v1/cosm/cosmetics/{id}/buy-cbx | Buy a dollar-priced cosmetic, paying in CBX.
*COSMApi* | [**createCosmCosmeticClaim**](docs/Api/COSMApi.md#createcosmcosmeticclaim) | **POST** /v1/cosm/cosmetics/{id}/claim | Claim a stake-exclusive cosmetic once tenure qualifies.
*COSMApi* | [**createCosmFusion**](docs/Api/COSMApi.md#createcosmfusion) | **POST** /v1/cosm/fusion/{recipeId} | Fuse two cosmetics plus COSM into a rarer one.
*COSMApi* | [**createCosmHandle**](docs/Api/COSMApi.md#createcosmhandle) | **POST** /v1/cosm/handles | Claim a vanity handle, burning COSM.
*COSMApi* | [**createCosmWithdrawal**](docs/Api/COSMApi.md#createcosmwithdrawal) | **POST** /v1/cosm/withdrawals | Request a withdrawal to your own proven wallet. REFUSES today.
*COSMApi* | [**deleteCosmHandle**](docs/Api/COSMApi.md#deletecosmhandle) | **DELETE** /v1/cosm/handles | Release a handle. NOTHING IS REFUNDED.
*COSMApi* | [**deleteCosmPeg**](docs/Api/COSMApi.md#deletecosmpeg) | **DELETE** /v1/cosm/pegs/{listingId} | Stop repricing. The current ask stays where it is.
*COSMApi* | [**getCosmAttestationProof**](docs/Api/COSMApi.md#getcosmattestationproof) | **GET** /v1/cosm/attestations/{id}/proof | A Merkle inclusion proof for one subject, against a published root.
*COSMApi* | [**getCosmAuctionQuote**](docs/Api/COSMApi.md#getcosmauctionquote) | **GET** /v1/cosm/auction/quote | What an auction listing would cost in fees.
*COSMApi* | [**getCosmBalance**](docs/Api/COSMApi.md#getcosmbalance) | **GET** /v1/cosm/balance | A subject&#39;s COSM balance and the earn rate in force.
*COSMApi* | [**getCosmEmployeeFeeQuote**](docs/Api/COSMApi.md#getcosmemployeefeequote) | **GET** /v1/cosm/employee/fee-quote | What one shop-employee conversation will cost, in COSM.
*COSMApi* | [**getCosmHandle**](docs/Api/COSMApi.md#getcosmhandle) | **GET** /v1/cosm/handles/{handle} | Is this handle available, and what does it cost?
*COSMApi* | [**getCosmStakeTenure**](docs/Api/COSMApi.md#getcosmstaketenure) | **GET** /v1/cosm/stake-tenure | How long a subject has held a stake continuously, in days.
*COSMApi* | [**getCosmSupply**](docs/Api/COSMApi.md#getcosmsupply) | **GET** /v1/cosm/supply | Total supply — minted, burned, circulating.
*COSMApi* | [**listCosmAttestations**](docs/Api/COSMApi.md#listcosmattestations) | **GET** /v1/cosm/attestations | Published Merkle commitments. What you can check instead of trusting us.
*COSMApi* | [**listCosmAuction**](docs/Api/COSMApi.md#listcosmauction) | **GET** /v1/cosm/auction | Open auction listings, priced in COSM.
*COSMApi* | [**listCosmCosmetics**](docs/Api/COSMApi.md#listcosmcosmetics) | **GET** /v1/cosm/cosmetics | The cosmetics catalogue.
*COSMApi* | [**listCosmGoals**](docs/Api/COSMApi.md#listcosmgoals) | **GET** /v1/cosm/goals | Community burn goal progress.
*COSMApi* | [**listCosmInventory**](docs/Api/COSMApi.md#listcosminventory) | **GET** /v1/cosm/inventory | Cosmetics a subject holds.
*COSMApi* | [**listCosmPegs**](docs/Api/COSMApi.md#listcosmpegs) | **GET** /v1/cosm/pegs | CBX-pegged listings and why each last moved.
*COSMApi* | [**listCosmSupplyEpochs**](docs/Api/COSMApi.md#listcosmsupplyepochs) | **GET** /v1/cosm/supply/epochs | Per-epoch emission against the backstop.
*COSMApi* | [**listCosmSupplySchedule**](docs/Api/COSMApi.md#listcosmsupplyschedule) | **GET** /v1/cosm/supply/schedule | The published emission taper. Fixed years ahead.
*COSMApi* | [**listCosmUnlocks**](docs/Api/COSMApi.md#listcosmunlocks) | **GET** /v1/cosm/unlocks | Which spatial cosmetic values this subject may apply.
*COSMApi* | [**listCosmWithdrawals**](docs/Api/COSMApi.md#listcosmwithdrawals) | **GET** /v1/cosm/withdrawals | Withdrawal history, and whether withdrawals are open at all.
*COSMApi* | [**updateCosmCosmeticUnlock**](docs/Api/COSMApi.md#updatecosmcosmeticunlock) | **PUT** /v1/cosm/cosmetics/{id}/unlock | Set (or clear) what a cosmetic unlocks spatially.
*COSMApi* | [**updateCosmPeg**](docs/Api/COSMApi.md#updatecosmpeg) | **PUT** /v1/cosm/pegs | Set or update a CBX price peg. OFF unless you turn it on.
*CatalogApi* | [**getCatalogLookup**](docs/Api/CatalogApi.md#getcataloglookup) | **GET** /v1/catalog/lookup | Live Crossly offers for a product identifier (barcode, style code, LEGO set…).
*CompWatchlistsApi* | [**createCompWatchlist**](docs/Api/CompWatchlistsApi.md#createcompwatchlist) | **POST** /v1/comp-watchlists | Create a sold-comp watchlist.
*CompWatchlistsApi* | [**createCompWatchlistScrape**](docs/Api/CompWatchlistsApi.md#createcompwatchlistscrape) | **POST** /v1/comp-watchlists/{id}/scrape | Manually trigger a watchlist scrape.
*CompWatchlistsApi* | [**deleteCompWatchlist**](docs/Api/CompWatchlistsApi.md#deletecompwatchlist) | **DELETE** /v1/comp-watchlists/{id} | Delete a sold-comp watchlist.
*CompWatchlistsApi* | [**listCompWatchlistRecent**](docs/Api/CompWatchlistsApi.md#listcompwatchlistrecent) | **GET** /v1/comp-watchlists/{id}/recent | Recent external sold comps matching this watchlist.
*CompWatchlistsApi* | [**listCompWatchlists**](docs/Api/CompWatchlistsApi.md#listcompwatchlists) | **GET** /v1/comp-watchlists | List the seller&#39;s sold-comp watchlists.
*ConnectionsApi* | [**getConnectionHealth**](docs/Api/ConnectionsApi.md#getconnectionhealth) | **GET** /v1/connection-health | Health of each connected marketplace account, with a plain-English diagnosis.
*ConnectionsApi* | [**listDevices**](docs/Api/ConnectionsApi.md#listdevices) | **GET** /v1/devices | Machines paired to this account, and what each can do.
*CustomersApi* | [**createCustomerBulkDelete**](docs/Api/CustomersApi.md#createcustomerbulkdelete) | **POST** /v1/customers/bulk-delete | Bulk blocklist customer handles.
*CustomersApi* | [**createCustomerBulkExport**](docs/Api/CustomersApi.md#createcustomerbulkexport) | **POST** /v1/customers/bulk-export | Bulk export aggregated customers as CSV.
*CustomersApi* | [**createCustomerRefreshProfile**](docs/Api/CustomersApi.md#createcustomerrefreshprofile) | **POST** /v1/customers/{handle}/refresh-profile | Queue a fresh read of a customer&#39;s buyer profiles on every platform they ordered on.
*CustomersApi* | [**getCustomer**](docs/Api/CustomersApi.md#getcustomer) | **GET** /v1/customers/{handle} | Get one customer: recent 50 orders, buyer profiles per platform, and stats over all of their orders.
*CustomersApi* | [**getLoyaltyClub**](docs/Api/CustomersApi.md#getloyaltyclub) | **GET** /v1/loyalty/club | Your loyalty club: tiers and how many members are in each.
*CustomersApi* | [**listCustomers**](docs/Api/CustomersApi.md#listcustomers) | **GET** /v1/customers | List aggregated customers (group-by lower(buyer_username)), each with its best avatar, display name and star rating.
*CustomersApi* | [**listLoyaltyMembers**](docs/Api/CustomersApi.md#listloyaltymembers) | **GET** /v1/loyalty/members | Your loyalty club’s members, by spend with you.
*CustomersApi* | [**updateLoyaltyClub**](docs/Api/CustomersApi.md#updateloyaltyclub) | **PUT** /v1/loyalty/club | Create or update your loyalty club: name, on/off, and up to 6 spend tiers each with a discount (≤ 30%) and perks.
*DAOApi* | [**createDaoProposal**](docs/Api/DAOApi.md#createdaoproposal) | **POST** /v1/dao/proposals | Raise a proposal. Starts as a draft.
*DAOApi* | [**createDaoProposalFinalise**](docs/Api/DAOApi.md#createdaoproposalfinalise) | **POST** /v1/dao/proposals/{id}/finalise | Close a proposal whose window has passed and record the outcome.
*DAOApi* | [**createDaoProposalOpen**](docs/Api/DAOApi.md#createdaoproposalopen) | **POST** /v1/dao/proposals/{id}/open | Put your draft to a vote. Snapshots voting power.
*DAOApi* | [**createDaoProposalVeto**](docs/Api/DAOApi.md#createdaoproposalveto) | **POST** /v1/dao/proposals/{id}/veto | Operator block. There is no matching power to PASS.
*DAOApi* | [**createDaoProposalVote**](docs/Api/DAOApi.md#createdaoproposalvote) | **POST** /v1/dao/proposals/{id}/vote | Cast or change a vote while the window is open.
*DAOApi* | [**deleteDaoProposal**](docs/Api/DAOApi.md#deletedaoproposal) | **DELETE** /v1/dao/proposals/{id} | Withdraw your own DRAFT.
*DAOApi* | [**getDaoProposalTally**](docs/Api/DAOApi.md#getdaoproposaltally) | **GET** /v1/dao/proposals/{id}/tally | The live count.
*DAOApi* | [**listDaoProposals**](docs/Api/DAOApi.md#listdaoproposals) | **GET** /v1/dao/proposals | The proposal queue.
*DefaultApi* | [**createCosmDesignerChainAutoUnlock**](docs/Api/DefaultApi.md#createcosmdesignerchainautounlock) | **POST** /v1/cosm/designer/chain-auto-unlock | 
*DefaultApi* | [**createCosmDesignerChainUnlock**](docs/Api/DefaultApi.md#createcosmdesignerchainunlock) | **POST** /v1/cosm/designer/chain-unlock | 
*DefaultApi* | [**createCosmDesignerMaterialise**](docs/Api/DefaultApi.md#createcosmdesignermaterialise) | **POST** /v1/cosm/designer/materialise | 
*DefaultApi* | [**createCosmDesignerMaterialiseConfirm**](docs/Api/DefaultApi.md#createcosmdesignermaterialiseconfirm) | **POST** /v1/cosm/designer/materialise/confirm | 
*DefaultApi* | [**createCosmDesignerMaterialiseRelease**](docs/Api/DefaultApi.md#createcosmdesignermaterialiserelease) | **POST** /v1/cosm/designer/materialise/release | 
*DefaultApi* | [**createCosmDesignerSubmitForReview**](docs/Api/DefaultApi.md#createcosmdesignersubmitforreview) | **POST** /v1/cosm/designer/submit-for-review | 
*DefaultApi* | [**createCosmDesignerTerm**](docs/Api/DefaultApi.md#createcosmdesignerterm) | **POST** /v1/cosm/designer/terms | 
*DefaultApi* | [**getCosmDesignerCopyState**](docs/Api/DefaultApi.md#getcosmdesignercopystate) | **GET** /v1/cosm/designer/copy-state | 
*DefaultApi* | [**getCosmDesignerEarning**](docs/Api/DefaultApi.md#getcosmdesignerearning) | **GET** /v1/cosm/designer/earnings | 
*DefaultApi* | [**getCosmDesignerTerm**](docs/Api/DefaultApi.md#getcosmdesignerterm) | **GET** /v1/cosm/designer/terms | 
*DefaultApi* | [**getListingVariationGroup**](docs/Api/DefaultApi.md#getlistingvariationgroup) | **GET** /v1/listings/{id}/variation-group | 
*DefaultApi* | [**getMarketMetalSpotHistory**](docs/Api/DefaultApi.md#getmarketmetalspothistory) | **GET** /v1/market/metals/spot/history | 
*DefaultApi* | [**getMarketProduct**](docs/Api/DefaultApi.md#getmarketproduct) | **GET** /v1/market/products/{id} | 
*DefaultApi* | [**getMarketProductRelated**](docs/Api/DefaultApi.md#getmarketproductrelated) | **GET** /v1/market/products/{id}/related | 
*DefaultApi* | [**getMarketScrapQuote**](docs/Api/DefaultApi.md#getmarketscrapquote) | **GET** /v1/market/scrap/quote | 
*DefaultApi* | [**getMarketVariantBook**](docs/Api/DefaultApi.md#getmarketvariantbook) | **GET** /v1/market/variants/{id}/book | 
*DefaultApi* | [**getVariationGroup**](docs/Api/DefaultApi.md#getvariationgroup) | **GET** /v1/variation-groups/{id} | 
*DefaultApi* | [**getVariationGroupPublishPlan**](docs/Api/DefaultApi.md#getvariationgrouppublishplan) | **GET** /v1/variation-groups/{id}/publish-plan | 
*DefaultApi* | [**listMarketBullion**](docs/Api/DefaultApi.md#listmarketbullion) | **GET** /v1/market/bullion | 
*DefaultApi* | [**listMarketGraders**](docs/Api/DefaultApi.md#listmarketgraders) | **GET** /v1/market/graders | 
*DefaultApi* | [**listMarketMetalSpot**](docs/Api/DefaultApi.md#listmarketmetalspot) | **GET** /v1/market/metals/spot | 
*DefaultApi* | [**listMarketProducts**](docs/Api/DefaultApi.md#listmarketproducts) | **GET** /v1/market/products | 
*DefaultApi* | [**listMarketVariantTiers**](docs/Api/DefaultApi.md#listmarketvarianttiers) | **GET** /v1/market/variants/{id}/tiers | 
*DefaultApi* | [**listVariationGroups**](docs/Api/DefaultApi.md#listvariationgroups) | **GET** /v1/variation-groups | 
*DropsApi* | [**createDrop**](docs/Api/DropsApi.md#createdrop) | **POST** /v1/drops | Set up a drop: { title, listingIds (1-10 of your live Crossly listings), units (at most their stock), opensLineAt, releaseAt (ISO), eligibility: \&quot;signed_in\&quot; | \&quot;verified\&quot; }. The line opens at opensLineAt with a published seed commitment; the draw runs at releaseAt.
*DropsApi* | [**deleteDrop**](docs/Api/DropsApi.md#deletedrop) | **DELETE** /v1/drops/{id} | Call a drop off before its line opens.
*DropsApi* | [**getDrop**](docs/Api/DropsApi.md#getdrop) | **GET** /v1/drops/{id} | A drop: its listings, units, times, eligibility, the sha256 seed commitment and the entry count. After release also the revealed seed, the sorted entry ids and the draw order (recompute it with drawWinners(seed, dropId, entryIds, units)).
*DropsApi* | [**listDropMine**](docs/Api/DropsApi.md#listdropmine) | **GET** /v1/drops/mine | Your drops, latest release first, with entries, winners, claims, the waitlist and expired holds.
*DropsApi* | [**listStreetDrops**](docs/Api/DropsApi.md#liststreetdrops) | **GET** /v1/streets/{slug}/drops | Upcoming, open and just-released drops on a Crossly World street, one per shop, soonest first, with the plot (or live stall spot) each line forms at.
*DropsApi* | [**updateDrop**](docs/Api/DropsApi.md#updatedrop) | **PATCH** /v1/drops/{id} | Change a drop before its line opens (any of the set-up fields).
*EmbedsApi* | [**createEmbedKey**](docs/Api/EmbedsApi.md#createembedkey) | **POST** /v1/embeds/keys | Mint a publishable key for a site.
*EmbedsApi* | [**deleteEmbedKey**](docs/Api/EmbedsApi.md#deleteembedkey) | **DELETE** /v1/embeds/keys/{id} | Revoke a publishable key.
*EmbedsApi* | [**listEmbedKeys**](docs/Api/EmbedsApi.md#listembedkeys) | **GET** /v1/embeds/keys | Your publishable keys.
*GradingApi* | [**createGradingDirect**](docs/Api/GradingApi.md#creategradingdirect) | **POST** /v1/grading/direct | Track a card you sent on your own grader account (Direct). Crossly takes no money; it verifies the cert when it comes back.
*GradingApi* | [**createGradingRunReserve**](docs/Api/GradingApi.md#creategradingrunreserve) | **POST** /v1/grading/runs/{id}/reserve | Hold a slot in a Grading Run. Free now; charged on your saved card only if the run locks. Full-access token and Idempotency-Key required.
*GradingApi* | [**createGradingSubmissionCancel**](docs/Api/GradingApi.md#creategradingsubmissioncancel) | **POST** /v1/grading/submissions/{id}/cancel | Pull a reserved card out of its run. Only while it is reserved; nothing was charged.
*GradingApi* | [**createGradingSubmissionResult**](docs/Api/GradingApi.md#creategradingsubmissionresult) | **POST** /v1/grading/submissions/{id}/result | Direct only: enter the grade that came back. Writes it to the item and its listings, verified when the cert agrees.
*GradingApi* | [**createGradingSubmissionShipped**](docs/Api/GradingApi.md#creategradingsubmissionshipped) | **POST** /v1/grading/submissions/{id}/shipped | Say you mailed a charged card to the hub, with optional tracking.
*GradingApi* | [**createGradingVerifyCert**](docs/Api/GradingApi.md#creategradingverifycert) | **POST** /v1/grading/verify-cert | Look a cert number up with its grader. found&#x3D;false when the grader has no record.
*GradingApi* | [**getGradingWorth**](docs/Api/GradingApi.md#getgradingworth) | **GET** /v1/grading/worth/{inventoryItemId} | Worth grading? Raw value vs what each grade is worth at each grader, against the cost. Never predicts the grade.
*GradingApi* | [**listGradingRateCard**](docs/Api/GradingApi.md#listgradingratecard) | **GET** /v1/grading/rate-card | Every grader and tier Crossly can send to, with the per-card price in cents (null &#x3D; paused at the grader).
*GradingApi* | [**listGradingRuns**](docs/Api/GradingApi.md#listgradingruns) | **GET** /v1/grading/runs | Grading Runs taking reservations now, soonest cutoff first. meta.open is false while runs are switched off.
*GradingApi* | [**listGradingSubmissions**](docs/Api/GradingApi.md#listgradingsubmissions) | **GET** /v1/grading/submissions | Your cards out for grading (runs and Direct), newest first. active&#x3D;1 keeps only the ones still in flight.
*GroupBuysApi* | [**createGroupBuy**](docs/Api/GroupBuysApi.md#creategroupbuy) | **POST** /v1/group-buys | Run a group buy on a listing with stock: price tiers by buyer count, a minimum, up to 6 days. Below the minimum nobody pays.
*ImportsApi* | [**createImport**](docs/Api/ImportsApi.md#createimport) | **POST** /v1/imports | Start a bulk-import job for an existing platform connection.
*ImportsApi* | [**getImport**](docs/Api/ImportsApi.md#getimport) | **GET** /v1/imports/{id} | Get one import job.
*ImportsApi* | [**getImportSite**](docs/Api/ImportsApi.md#getimportsite) | **GET** /v1/imports/sites | Which sites (eBay marketplaces) an account&#39;s listings are on, with counts — to choose what an import brings in.
*ImportsApi* | [**listImports**](docs/Api/ImportsApi.md#listimports) | **GET** /v1/imports | List bulk-import jobs.
*InboxApi* | [**createInboxAiSuggest**](docs/Api/InboxApi.md#createinboxaisuggest) | **POST** /v1/inbox/ai-suggest | AI reply suggestion for a conversation.
*InboxApi* | [**createInboxCannedResponse**](docs/Api/InboxApi.md#createinboxcannedresponse) | **POST** /v1/inbox/canned-responses | Create a canned response.
*InboxApi* | [**createInboxConversationBulk**](docs/Api/InboxApi.md#createinboxconversationbulk) | **POST** /v1/inbox/conversations/bulk | Bulk mark read / mark unread / soft-delete conversations.
*InboxApi* | [**createInboxConversationBulkAiRespond**](docs/Api/InboxApi.md#createinboxconversationbulkairespond) | **POST** /v1/inbox/conversations/bulk-ai-respond | AI reply suggestion for multiple conversations — draft or send.
*InboxApi* | [**createInboxConversationOfferAction**](docs/Api/InboxApi.md#createinboxconversationofferaction) | **POST** /v1/inbox/conversations/{id}/offer-action | Accept / counter / decline an active offer on a conversation.
*InboxApi* | [**createInboxMessageTriage**](docs/Api/InboxApi.md#createinboxmessagetriage) | **POST** /v1/inbox/messages/{id}/triage | Manually re-triage a buyer message.
*InboxApi* | [**createInboxOffer**](docs/Api/InboxApi.md#createinboxoffer) | **POST** /v1/inbox/{id}/offer | Accept, counter, or decline an offer on a conversation.
*InboxApi* | [**createInboxReply**](docs/Api/InboxApi.md#createinboxreply) | **POST** /v1/inbox/{id}/reply | Send a reply to a conversation thread.
*InboxApi* | [**createVideoRequestAnswer**](docs/Api/InboxApi.md#createvideorequestanswer) | **POST** /v1/video-requests/{id}/answer | Answer a video request with a clip you uploaded (POST /v1/video-requests/upload-url, then PUT the file to uploadUrl). The buyer is notified and the clip shows on the listing.
*InboxApi* | [**createVideoRequestDecline**](docs/Api/InboxApi.md#createvideorequestdecline) | **POST** /v1/video-requests/{id}/decline | Decline a video request, with an optional note to the buyer.
*InboxApi* | [**createVideoRequestUploadUrl**](docs/Api/InboxApi.md#createvideorequestuploadurl) | **POST** /v1/video-requests/upload-url | A presigned upload for a video answer: PUT the file to uploadUrl with the same Content-Type and exact Content-Length, then answer with publicUrl.
*InboxApi* | [**deleteInboxCannedResponse**](docs/Api/InboxApi.md#deleteinboxcannedresponse) | **DELETE** /v1/inbox/canned-responses/{id} | Delete a canned response.
*InboxApi* | [**getInbox**](docs/Api/InboxApi.md#getinbox) | **GET** /v1/inbox/{id} | Get one conversation with its messages.
*InboxApi* | [**getInboxCannedResponse**](docs/Api/InboxApi.md#getinboxcannedresponse) | **GET** /v1/inbox/canned-responses | List canned responses.
*InboxApi* | [**getInboxConversationMessage**](docs/Api/InboxApi.md#getinboxconversationmessage) | **GET** /v1/inbox/conversations/{id}/messages | Paginated messages for a conversation.
*InboxApi* | [**getInboxConversationUnreadCount**](docs/Api/InboxApi.md#getinboxconversationunreadcount) | **GET** /v1/inbox/conversations/unread-count | Sidebar badge: unread conversation count.
*InboxApi* | [**listInbox**](docs/Api/InboxApi.md#listinbox) | **GET** /v1/inbox | List conversations.
*InboxApi* | [**listVideoRequests**](docs/Api/InboxApi.md#listvideorequests) | **GET** /v1/video-requests | Buyers asking for a video of your items. status: open (default), answered, declined or all.
*InboxApi* | [**updateInboxCannedResponse**](docs/Api/InboxApi.md#updateinboxcannedresponse) | **PUT** /v1/inbox/canned-responses/{id} | Update a canned response.
*InboxApi* | [**updateInboxConversation**](docs/Api/InboxApi.md#updateinboxconversation) | **PATCH** /v1/inbox/conversations/{id} | Mark read / change status / close conversation.
*IntegrationsApi* | [**createNotificationIntegration**](docs/Api/IntegrationsApi.md#createnotificationintegration) | **POST** /v1/notification-integrations | Add a Slack/Discord/Webhook destination.
*IntegrationsApi* | [**createNotificationIntegrationTest**](docs/Api/IntegrationsApi.md#createnotificationintegrationtest) | **POST** /v1/notification-integrations/{id}/test | Fire a canned test message to a notification destination.
*IntegrationsApi* | [**deleteNotificationIntegration**](docs/Api/IntegrationsApi.md#deletenotificationintegration) | **DELETE** /v1/notification-integrations/{id} | Delete a notification destination.
*IntegrationsApi* | [**listNotificationIntegrations**](docs/Api/IntegrationsApi.md#listnotificationintegrations) | **GET** /v1/notification-integrations | List Slack/Discord/Webhook destinations for notify.* automation actions.
*IntegrationsApi* | [**updateNotificationIntegration**](docs/Api/IntegrationsApi.md#updatenotificationintegration) | **PATCH** /v1/notification-integrations/{id} | Edit a notification destination.
*InventoryApi* | [**createCatalogMatchConfirm**](docs/Api/InventoryApi.md#createcatalogmatchconfirm) | **POST** /v1/catalog-matches/{id}/confirm | Confirm a catalog-match suggestion: links the item to the catalog product (sets its market_sku_id), so sold comps and market pricing apply to it.
*InventoryApi* | [**createCatalogMatchDismiss**](docs/Api/InventoryApi.md#createcatalogmatchdismiss) | **POST** /v1/catalog-matches/{id}/dismiss | Dismiss a catalog-match suggestion. That product is never suggested for this item again.
*InventoryApi* | [**createInventory**](docs/Api/InventoryApi.md#createinventory) | **POST** /v1/inventory | Create a new inventory item.
*InventoryApi* | [**createInventoryBulkArchive**](docs/Api/InventoryApi.md#createinventorybulkarchive) | **POST** /v1/inventory/bulk-archive | Bulk archive inventory items (soft).
*InventoryApi* | [**createInventoryBulkDelete**](docs/Api/InventoryApi.md#createinventorybulkdelete) | **POST** /v1/inventory/bulk-delete | Bulk delete inventory items (delinks listings).
*InventoryApi* | [**createInventoryBulkLabel**](docs/Api/InventoryApi.md#createinventorybulklabel) | **POST** /v1/inventory/bulk-labels | Bulk add/remove labels on inventory items.
*InventoryApi* | [**createInventoryBulkQuantity**](docs/Api/InventoryApi.md#createinventorybulkquantity) | **POST** /v1/inventory/bulk-quantity | Set / add / subtract stock across many items, syncing live listings.
*InventoryApi* | [**createInventoryCatalogMatchRefresh**](docs/Api/InventoryApi.md#createinventorycatalogmatchrefresh) | **POST** /v1/inventory/{id}/catalog-matches/refresh | Run catalog matching for one item now. An identifier (UPC, style code, catalogue number) that resolves to exactly one product links it; otherwise likely products are returned as suggestions to confirm.
*InventoryApi* | [**createInventoryCsvExport**](docs/Api/InventoryApi.md#createinventorycsvexport) | **POST** /v1/inventory/csv/export | Export inventory as CSV. Round-trips back through csv/import.
*InventoryApi* | [**createInventoryCsvImport**](docs/Api/InventoryApi.md#createinventorycsvimport) | **POST** /v1/inventory/csv/import | Import a CSV. Rows whose sku matches an existing item update it; others are added. Pass dryRun to preview.
*InventoryApi* | [**createInventoryLabelRename**](docs/Api/InventoryApi.md#createinventorylabelrename) | **POST** /v1/inventory/labels/rename | Rename a label across every inventory item.
*InventoryApi* | [**createInventoryMerge**](docs/Api/InventoryApi.md#createinventorymerge) | **POST** /v1/inventory/merge | Merge inventory items that are the same physical item into one (stock is not summed).
*InventoryApi* | [**createInventoryUnitIdentifier**](docs/Api/InventoryApi.md#createinventoryunitidentifier) | **POST** /v1/inventory/{id}/units/identifiers | Record a serial, IMEI, or licence key against an inventory item.
*InventoryApi* | [**createInventoryUnitLookup**](docs/Api/InventoryApi.md#createinventoryunitlookup) | **POST** /v1/inventory/units/lookup | Find a unit by identifier.
*InventoryApi* | [**createSpatialPropertyDeedLease**](docs/Api/InventoryApi.md#createspatialpropertydeedlease) | **POST** /v1/spatial/property/deeds/{id}/lease | Offer your plot for lease.
*InventoryApi* | [**createSpatialPropertyDeedList**](docs/Api/InventoryApi.md#createspatialpropertydeedlist) | **POST** /v1/spatial/property/deeds/{id}/list | List your plot for resale.
*InventoryApi* | [**createSpatialPropertyDeedMaintenance**](docs/Api/InventoryApi.md#createspatialpropertydeedmaintenance) | **POST** /v1/spatial/property/deeds/{id}/maintenance | Pay a plot&#39;s maintenance forward.
*InventoryApi* | [**createSpatialPropertyLeaseAccept**](docs/Api/InventoryApi.md#createspatialpropertyleaseaccept) | **POST** /v1/spatial/property/leases/{id}/accept | Take a plot on lease.
*InventoryApi* | [**createSpatialPropertyLeaseEnd**](docs/Api/InventoryApi.md#createspatialpropertyleaseend) | **POST** /v1/spatial/property/leases/{id}/end | End a lease (owner or tenant).
*InventoryApi* | [**createSpatialPropertyLeaseRent**](docs/Api/InventoryApi.md#createspatialpropertyleaserent) | **POST** /v1/spatial/property/leases/{id}/rent | Pay rent forward.
*InventoryApi* | [**createSpatialPropertyListingBuy**](docs/Api/InventoryApi.md#createspatialpropertylistingbuy) | **POST** /v1/spatial/property/listings/{id}/buy | Buy a plot on the resale market, in CBX.
*InventoryApi* | [**createSpatialPropertyListingCancel**](docs/Api/InventoryApi.md#createspatialpropertylistingcancel) | **POST** /v1/spatial/property/listings/{id}/cancel | Take your plot off the market.
*InventoryApi* | [**createSpatialShopStaffPay**](docs/Api/InventoryApi.md#createspatialshopstaffpay) | **POST** /v1/spatial/shop/staff/{grantId}/pay | Pay a staff member&#39;s wage forward.
*InventoryApi* | [**createSpatialStreetClaim**](docs/Api/InventoryApi.md#createspatialstreetclaim) | **POST** /v1/spatial/streets/{slug}/claim | Put your shop on a street.
*InventoryApi* | [**createSpatialStreetOwnedUpkeep**](docs/Api/InventoryApi.md#createspatialstreetownedupkeep) | **POST** /v1/spatial/streets/owned/{id}/upkeep | Pay a street&#39;s upkeep forward.
*InventoryApi* | [**createSpatialStreetPlotBuy**](docs/Api/InventoryApi.md#createspatialstreetplotbuy) | **POST** /v1/spatial/streets/{slug}/plots/{number}/buy | Buy a vacant plot from Crossly, in CBX.
*InventoryApi* | [**createSpatialStreetRequest**](docs/Api/InventoryApi.md#createspatialstreetrequest) | **POST** /v1/spatial/streets/requests | Ask to found a street.
*InventoryApi* | [**createSpatialStreetRequestFound**](docs/Api/InventoryApi.md#createspatialstreetrequestfound) | **POST** /v1/spatial/streets/requests/{id}/found | Found an approved street, in CBX.
*InventoryApi* | [**deleteInventory**](docs/Api/InventoryApi.md#deleteinventory) | **DELETE** /v1/inventory/{id} | Soft-archive an inventory item.
*InventoryApi* | [**deleteSpatialStreetPlot**](docs/Api/InventoryApi.md#deletespatialstreetplot) | **DELETE** /v1/spatial/streets/{slug}/plot | Take your shop off a street.
*InventoryApi* | [**getGameLeaderboard**](docs/Api/InventoryApi.md#getgameleaderboard) | **GET** /v1/games/leaderboards | Game leaderboards: for each of Price Guess (wins, then points), scavenger hunts (finished) and speed trades (won), the top ten this week (Monday 00:00 UTC on) under week and of all time under all -- rank, name, named, value and, for Price Guess, score. A name appears only for somebody who chose to be seen by name in Crossly World; everyone else is \&quot;A player\&quot; in their place.
*InventoryApi* | [**getHome**](docs/Api/InventoryApi.md#gethome) | **GET** /v1/homes/{slug} | A home by its address, as you may see it: open homes to anybody, friends-only homes to mutual follows, locked homes to their owner. 404 when you may not enter.
*InventoryApi* | [**getHomeMine**](docs/Api/InventoryApi.md#gethomemine) | **GET** /v1/homes/mine | Your Crossly World home: its address, privacy (open / friends / locked), theme, the room, the layout (each piece with what it shows -- things you no longer own are left out at read time) and the guestbook. Made on first read.
*InventoryApi* | [**getInventory**](docs/Api/InventoryApi.md#getinventory) | **GET** /v1/inventory/{id} | Get one inventory item with platform listings.
*InventoryApi* | [**getInventoryAging**](docs/Api/InventoryApi.md#getinventoryaging) | **GET** /v1/inventory/aging | Unsold stock by age (0-7, 7-30, 30-90, 90+ days, unlisted), each bucket with a recommendation.
*InventoryApi* | [**getInventoryCatalogMatch**](docs/Api/InventoryApi.md#getinventorycatalogmatch) | **GET** /v1/inventory/{id}/catalog-matches | One inventory item&#39;s catalog binding (if confirmed) and its pending match suggestions.
*InventoryApi* | [**getInventoryFacet**](docs/Api/InventoryApi.md#getinventoryfacet) | **GET** /v1/inventory/facets | Distinct brands + categories across this user&#39;s inventory.
*InventoryApi* | [**getInventoryLabel**](docs/Api/InventoryApi.md#getinventorylabel) | **GET** /v1/inventory/labels | List every distinct label across this user&#39;s inventory.
*InventoryApi* | [**getInventoryLabelStat**](docs/Api/InventoryApi.md#getinventorylabelstat) | **GET** /v1/inventory/labels/stats | List distinct labels with usage counts + colors.
*InventoryApi* | [**getInventorySellThrough**](docs/Api/InventoryApi.md#getinventorysellthrough) | **GET** /v1/inventory/sell-through | Cohort sell-through for a window (default: the 30 days ending 30 days ago) against the previous window of the same length.
*InventoryApi* | [**getInventorySkuExist**](docs/Api/InventoryApi.md#getinventoryskuexist) | **GET** /v1/inventory/sku-exists | Check whether a SKU is already in use on this user&#39;s inventory.
*InventoryApi* | [**getInventoryValueHistory**](docs/Api/InventoryApi.md#getinventoryvaluehistory) | **GET** /v1/inventory/value-history | Portfolio value of unsold stock over time, oldest first (one point per nightly snapshot).
*InventoryApi* | [**getMainStage**](docs/Api/InventoryApi.md#getmainstage) | **GET** /v1/main-stage | The Crossly World Main Stage right now: the live show (title, kind, host lineup), the stream on its big screen while a lineup host is on air, how many people are there (it holds 64 per copy and opens copies as it fills) and what is on next.
*InventoryApi* | [**getPetMine**](docs/Api/InventoryApi.md#getpetmine) | **GET** /v1/pets/mine | Your Crossly World pets: every kind (cat, dog, slab bot) with whether you own it, when it was earned and the ways to earn it (a quest or a reputation level -- pets are never sold), plus the pet walking beside you and the one greeting visitors at your shop door.
*InventoryApi* | [**getReputation**](docs/Api/InventoryApi.md#getreputation) | **GET** /v1/reputation/{profile} | Somebody&#39;s public reputation levels by their storefront handle: the level on each track and their nameplate badge. 404 for an unknown handle.
*InventoryApi* | [**getReputationMine**](docs/Api/InventoryApi.md#getreputationmine) | **GET** /v1/reputation/mine | Your Crossly World reputation: four tracks (trader, collector, seller, host) with points, level, what each level has unlocked and the next unlock, and how the points were earned (recency-weighted; a lost dispute or a failed authentication costs points). Earned from real activity only; nothing buys a level.
*InventoryApi* | [**getSpatialAddress**](docs/Api/InventoryApi.md#getspatialaddress) | **GET** /v1/spatial/address/{street}/{number} | The shop at an address.
*InventoryApi* | [**getSpatialAuctionPublic**](docs/Api/InventoryApi.md#getspatialauctionpublic) | **GET** /v1/spatial/auction/public/{slug} | A shared saleroom, opened by its public share handle.
*InventoryApi* | [**getSpatialAuctionRoom**](docs/Api/InventoryApi.md#getspatialauctionroom) | **GET** /v1/spatial/auction/rooms/{sceneId} | What the rostrum says in this room, right now.
*InventoryApi* | [**getSpatialEmote**](docs/Api/InventoryApi.md#getspatialemote) | **GET** /v1/spatial/emotes | Your Crossly World emotes: every emote pack (unlocked or not, with the quest that unlocks it), your 8-slot emote wheel as stored and as it shows (labels, locks, ready dots), and the moments earned and not yet played.
*InventoryApi* | [**getSpatialEmployeeConfig**](docs/Api/InventoryApi.md#getspatialemployeeconfig) | **GET** /v1/spatial/employee/config | How the shop employee in one of your rooms is configured.
*InventoryApi* | [**getSpatialParty**](docs/Api/InventoryApi.md#getspatialparty) | **GET** /v1/spatial/party | Your Crossly World party: party is null when you are in none, else its id, leader and up to 8 members (each with the place and copy they are in right now, or null), plus the invites it has out. invites lists the invites waiting for you.
*InventoryApi* | [**getSpatialProperty**](docs/Api/InventoryApi.md#getspatialproperty) | **GET** /v1/spatial/property | Your plots and tenancies.
*InventoryApi* | [**getSpatialPublic**](docs/Api/InventoryApi.md#getspatialpublic) | **GET** /v1/spatial/public/{slug} | A shared room, as a visitor sees it.
*InventoryApi* | [**getSpatialScene**](docs/Api/InventoryApi.md#getspatialscene) | **GET** /v1/spatial/scenes/{id} | A solved room: every item, where it sits, and why.
*InventoryApi* | [**getSpatialSceneWarehouse**](docs/Api/InventoryApi.md#getspatialscenewarehouse) | **GET** /v1/spatial/scenes/{id}/warehouse | A warehouse room: your racks, where they stand, and what is on each.
*InventoryApi* | [**getSpatialShopStaff**](docs/Api/InventoryApi.md#getspatialshopstaff) | **GET** /v1/spatial/shop/staff | Your shop&#39;s staff and their wages.
*InventoryApi* | [**getSpatialStreet**](docs/Api/InventoryApi.md#getspatialstreet) | **GET** /v1/spatial/streets/{slug} | A street: every plot and the shop open on each.
*InventoryApi* | [**getSpatialStreetFounding**](docs/Api/InventoryApi.md#getspatialstreetfounding) | **GET** /v1/spatial/streets/founding | What founding a street costs.
*InventoryApi* | [**getSpatialStreetPlotQuote**](docs/Api/InventoryApi.md#getspatialstreetplotquote) | **GET** /v1/spatial/streets/{slug}/plots/{number}/quote | What a plot costs.
*InventoryApi* | [**getWorldRoomFunnel**](docs/Api/InventoryApi.md#getworldroomfunnel) | **GET** /v1/world/rooms/{sceneId}/funnel | Your room&#39;s funnel over the last &#x60;days&#x60; (1-35, default 30): visitors (people, once a day), looks, items opened, checkouts started from the room, paid sales and revenueCents. Sales count only lines the room itself put in a cart.
*InventoryApi* | [**getWorldShelf**](docs/Api/InventoryApi.md#getworldshelf) | **GET** /v1/world/shelf/{listingSlug} | Where a Crossly listing sits on a shelf in a public room right now (roomSlug, roomName, itemId), or data:null when it is in no room.
*InventoryApi* | [**getWorldSkusCheapest**](docs/Api/InventoryApi.md#getworldskuscheapest) | **GET** /v1/world/skus/{skuId}/cheapest | The cheapest copy of a catalogue piece for sale on Crossly now, matched by the catalogue id (listingSlug, priceCents, and the room and item when it stands on a shelf), or data:null.
*InventoryApi* | [**listCatalogMatches**](docs/Api/InventoryApi.md#listcatalogmatches) | **GET** /v1/catalog-matches | Pending catalog-match suggestions: inventory items that look like a catalog product, awaiting your confirm.
*InventoryApi* | [**listFestivals**](docs/Api/InventoryApi.md#listfestivals) | **GET** /v1/festivals | Live and upcoming Crossly World festivals, soonest first: a weekend when every street wears one decor and the festival quest line (limited pins) counts. meta.live is the festival on now, if any.
*InventoryApi* | [**listGameBreakUpcoming**](docs/Api/InventoryApi.md#listgamebreakupcoming) | **GET** /v1/games/breaks/upcoming | Pack breaks staged on shop stages in Crossly World, live first then soonest: the break, its shop, start time, spots (taken or not, buyer masked), hits revealed so far, and buyUrl -- the break&#39;s page on crossly.net, the only place a spot is bought (null once every spot has sold).
*InventoryApi* | [**listGameHunts**](docs/Api/InventoryApi.md#listgamehunts) | **GET** /v1/games/hunts | Scavenger hunts running now in Crossly World shops and pop-up stalls, ending soonest first: title, shop (name and slug -- for a hunt at a stall, the street slug, with stall.bookingId set), how many tokens, what finishing unlocks (\&quot;10% off\&quot; -- never the code), when it ends and how many people have finished. Optional place filters to one shop or street slug.
*InventoryApi* | [**listGameResultMine**](docs/Api/InventoryApi.md#listgameresultmine) | **GET** /v1/games/results/mine | Your market-game results, newest first: game (price_guess, price_guess_solo, hunt, speed_trade, break_host), the round/hunt/trade/break id, score, whether you won, Bucks prize in cents (0 while prizes are pins only) and detail. meta.unlocks lists the hunt coupons you earned (with their codes); meta.hits the break hits pulled for spots you bought, with the order each ships with.
*InventoryApi* | [**listHomeMineBuilders**](docs/Api/InventoryApi.md#listhomeminebuilders) | **GET** /v1/homes/mine/builders | Your co-builders: friends you let rearrange your home in the world (move, turn, take out your things, add free furniture; never your bought pieces). Each: userId, name, friends (false once the friendship ended: listed but powerless).
*InventoryApi* | [**listHomeOfTheWeek**](docs/Api/InventoryApi.md#listhomeoftheweek) | **GET** /v1/homes/of-the-week | Home of the week: open homes by how many different people signed their guestbook in the last 7 days, most first.
*InventoryApi* | [**listInventory**](docs/Api/InventoryApi.md#listinventory) | **GET** /v1/inventory | List inventory items.
*InventoryApi* | [**listInventoryActivity**](docs/Api/InventoryApi.md#listinventoryactivity) | **GET** /v1/inventory/{id}/activity | Activity log for an inventory item (created/sold/edited/etc.).
*InventoryApi* | [**listInventoryIds**](docs/Api/InventoryApi.md#listinventoryids) | **GET** /v1/inventory/ids | Filter inventory → return matching id list.
*InventoryApi* | [**listInventoryUnits**](docs/Api/InventoryApi.md#listinventoryunits) | **GET** /v1/inventory/{id}/units | List the individually identified units of an inventory item.
*InventoryApi* | [**listJobAppraisals**](docs/Api/InventoryApi.md#listjobappraisals) | **GET** /v1/jobs/appraisals | Open price checks appraisers can answer (Collector level 3+ holding 3+ pieces in the category), newest first, optionally one market category. Each has its bounty; meta.payOn says whether bounties are paid yet.
*InventoryApi* | [**listJobShifts**](docs/Api/InventoryApi.md#listjobshifts) | **GET** /v1/jobs/shifts | Open shifts on the Crossly World Jobs board, soonest first: shop staff shifts in boutiques and grading-desk helper shifts, each with its window, place and pay. meta.payOn says whether Crossly is paying jobs yet.
*InventoryApi* | [**listMainStageEvents**](docs/Api/InventoryApi.md#listmainstageevents) | **GET** /v1/main-stage/events | Live and upcoming Main Stage events, soonest first: brand launches, creator meetups, talks, live sales and festival shows, each with its window and host lineup.
*InventoryApi* | [**listSpatialAuctionRoomLots**](docs/Api/InventoryApi.md#listspatialauctionroomlots) | **GET** /v1/spatial/auction/rooms/{sceneId}/lots | The catalogue: every lot in the session this room is hosting.
*InventoryApi* | [**listSpatialAuctionRooms**](docs/Api/InventoryApi.md#listspatialauctionrooms) | **GET** /v1/spatial/auction/rooms | Rooms of yours that are hosting an auction.
*InventoryApi* | [**listSpatialDeedListings**](docs/Api/InventoryApi.md#listspatialdeedlistings) | **GET** /v1/spatial/deeds/listings | Plots for resale.
*InventoryApi* | [**listSpatialEmployeeSessions**](docs/Api/InventoryApi.md#listspatialemployeesessions) | **GET** /v1/spatial/employee/sessions | The itemised bill: one row per customer-conversation.
*InventoryApi* | [**listSpatialEmployeeUsage**](docs/Api/InventoryApi.md#listspatialemployeeusage) | **GET** /v1/spatial/employee/usage | What your shop employees cost over a period, per room.
*InventoryApi* | [**listSpatialMoments**](docs/Api/InventoryApi.md#listspatialmoments) | **GET** /v1/spatial/moments | Your moment emotes, newest first: unbox (a Crossly purchase delivered), slab_flip (a card graded through Crossly Grading), handshake (a trade-table shake settled). Each plays once in a room; playedAt is null until then. ready&#x3D;true lists only the unplayed ones.
*InventoryApi* | [**listSpatialPartyWishlist**](docs/Api/InventoryApi.md#listspatialpartywishlist) | **GET** /v1/spatial/party/wishlist | Your party&#39;s shared wishlist, newest first: each listing (title, price in cents, image, shop slug while it is live), who added it, and every member&#39;s thumb up or down with the totals. Empty when you are in no party.
*InventoryApi* | [**listSpatialPublic**](docs/Api/InventoryApi.md#listspatialpublic) | **GET** /v1/spatial/public | Public rooms anyone can walk into.
*InventoryApi* | [**listSpatialPublicOffers**](docs/Api/InventoryApi.md#listspatialpublicoffers) | **GET** /v1/spatial/public/{slug}/offers | What is for sale in a shared room.
*InventoryApi* | [**listSpatialSceneMovements**](docs/Api/InventoryApi.md#listspatialscenemovements) | **GET** /v1/spatial/scenes/{id}/movements | Stock movements in a room over a time window.
*InventoryApi* | [**listSpatialScenes**](docs/Api/InventoryApi.md#listspatialscenes) | **GET** /v1/spatial/scenes | The rooms this account has.
*InventoryApi* | [**listSpatialShopAddresses**](docs/Api/InventoryApi.md#listspatialshopaddresses) | **GET** /v1/spatial/shop/addresses | Your shop&#39;s addresses.
*InventoryApi* | [**listSpatialStaffing**](docs/Api/InventoryApi.md#listspatialstaffing) | **GET** /v1/spatial/staffing | Shops you work in.
*InventoryApi* | [**listSpatialStreetMine**](docs/Api/InventoryApi.md#listspatialstreetmine) | **GET** /v1/spatial/streets/mine | Your streets.
*InventoryApi* | [**listSpatialStreets**](docs/Api/InventoryApi.md#listspatialstreets) | **GET** /v1/spatial/streets | Every street in the world.
*InventoryApi* | [**listWorldBlocks**](docs/Api/InventoryApi.md#listworldblocks) | **GET** /v1/world/blocks | The people you blocked in Crossly World, as you saw them (label, never the account behind a pseudonym), oldest first. Blocks are made in a room, on the person.
*InventoryApi* | [**listWorldItemSearch**](docs/Api/InventoryApi.md#listworlditemsearch) | **GET** /v1/world/items/search | Find an item on a shelf anywhere in Crossly World: what public rooms have for sale now, by title or catalogue name (q, 2+ characters). Each hit names the room (roomSlug) and the item (itemId); /c/&lt;roomSlug&gt;?item&#x3D;&lt;itemId&gt; opens it there.
*InventoryApi* | [**listWorldRoomWants**](docs/Api/InventoryApi.md#listworldroomwants) | **GET** /v1/world/rooms/{sceneId}/wants | Items your room shows but does not sell that visitors said they would buy (\&quot;I&#39;d buy this\&quot;), most wanted first: itemId and how many people.
*InventoryApi* | [**updateInventory**](docs/Api/InventoryApi.md#updateinventory) | **PATCH** /v1/inventory/{id} | Update an inventory item (partial).
*InventoryApi* | [**updateSpatialEmployeeConfig**](docs/Api/InventoryApi.md#updatespatialemployeeconfig) | **PUT** /v1/spatial/employee/config | Create or replace the shop employee in one of your rooms.
*InventoryApi* | [**updateSpatialShopStaffWage**](docs/Api/InventoryApi.md#updatespatialshopstaffwage) | **PUT** /v1/spatial/shop/staff/{grantId}/wage | Set a staff member&#39;s weekly wage.
*ListingsApi* | [**createAiDetectionDispute**](docs/Api/ListingsApi.md#createaidetectiondispute) | **POST** /v1/ai-detections/{id}/dispute | Dispute an AI-image detection on your photo (sends it to Crossly review).
*ListingsApi* | [**createListing**](docs/Api/ListingsApi.md#createlisting) | **POST** /v1/listings | Create a listing and fan out crosspost jobs across platforms.
*ListingsApi* | [**createListingBulkCheckStatus**](docs/Api/ListingsApi.md#createlistingbulkcheckstatus) | **POST** /v1/listings/bulk-check-status | Check listing status on platforms
*ListingsApi* | [**createListingBulkCrosspost**](docs/Api/ListingsApi.md#createlistingbulkcrosspost) | **POST** /v1/listings/bulk-crosspost | Bulk crosspost (no delist phase)
*ListingsApi* | [**createListingBulkDelete**](docs/Api/ListingsApi.md#createlistingbulkdelete) | **POST** /v1/listings/bulk-delete | Bulk archive + delist
*ListingsApi* | [**createListingBulkDelist**](docs/Api/ListingsApi.md#createlistingbulkdelist) | **POST** /v1/listings/bulk-delist | Bulk delist from platforms
*ListingsApi* | [**createListingBulkDelistPreview**](docs/Api/ListingsApi.md#createlistingbulkdelistpreview) | **POST** /v1/listings/bulk-delist-preview | Preview which marketplaces a delist would touch
*ListingsApi* | [**createListingBulkHardDelete**](docs/Api/ListingsApi.md#createlistingbulkharddelete) | **POST** /v1/listings/bulk-hard-delete | Permanently delete listings (live ones need allowLive)
*ListingsApi* | [**createListingBulkRelist**](docs/Api/ListingsApi.md#createlistingbulkrelist) | **POST** /v1/listings/bulk-relist | Bulk relist across platforms
*ListingsApi* | [**createListingBulkUpdate**](docs/Api/ListingsApi.md#createlistingbulkupdate) | **POST** /v1/listings/bulk-update | Bulk update listing fields
*ListingsApi* | [**createListingById**](docs/Api/ListingsApi.md#createlistingbyid) | **POST** /v1/listings/by-ids | Fetch hydrated listings by ID
*ListingsApi* | [**createListingCheckDuplicate**](docs/Api/ListingsApi.md#createlistingcheckduplicate) | **POST** /v1/listings/check-duplicates | Check whether the seller already owns something matching this title/photo, and what to do about it.
*ListingsApi* | [**createListingCombine**](docs/Api/ListingsApi.md#createlistingcombine) | **POST** /v1/listings/combine | Combine duplicate listings into one: sums their stock, delists and archives the rest.
*ListingsApi* | [**createListingDiscrepancyResolve**](docs/Api/ListingsApi.md#createlistingdiscrepancyresolve) | **POST** /v1/listings/{id}/discrepancies/{discrepancyId}/resolve | Resolve a detected marketplace-drift discrepancy: accept the platform value, push ours back, relist to apply it, or dismiss.
*ListingsApi* | [**createListingImportByUrl**](docs/Api/ListingsApi.md#createlistingimportbyurl) | **POST** /v1/listings/{id}/import-by-url | Attach a real platform listing to this listing by pasting its live URL.
*ListingsApi* | [**createListingMagicFill**](docs/Api/ListingsApi.md#createlistingmagicfill) | **POST** /v1/listings/{id}/magic-fill | Auto-fill empty fields on one platform tab from the master listing + AI/deterministic taxonomy resolution.
*ListingsApi* | [**createListingMerge**](docs/Api/ListingsApi.md#createlistingmerge) | **POST** /v1/listings/merge | Merge the same item listed on different marketplaces into one listing; all stay live.
*ListingsApi* | [**createLiveStreamPinLaunch**](docs/Api/ListingsApi.md#createlivestreampinlaunch) | **POST** /v1/live-streams/{id}/pin-launch | Pin one of your live NFT launches on your live show; viewers mint it from the stream. Returns &#x60;{ ok }&#x60;.
*ListingsApi* | [**createPassport**](docs/Api/ListingsApi.md#createpassport) | **POST** /v1/passports | Register a product passport for a Crossly listing you sell, optionally bound to an NFC tag UID (hex). Returns the URL to write to the NFC tag or print as a QR; ownership then follows the item’s paid sales.
*ListingsApi* | [**createPassportRevoke**](docs/Api/ListingsApi.md#createpassportrevoke) | **POST** /v1/passports/{id}/revoke | Revoke a passport (a lost or misprinted tag). Refused once the item has sold — the passport is then part of its history.
*ListingsApi* | [**createPassportTag**](docs/Api/ListingsApi.md#createpassporttag) | **POST** /v1/passports/{id}/tag | Bind (or re-bind) a passport to the NFC tag you wrote its nfcUrl to: the tag UID (hex), and whether you locked the tag read-only. Refused once the item has sold, for a locked tag, or a tag already on another item.
*ListingsApi* | [**createVariationGroup**](docs/Api/ListingsApi.md#createvariationgroup) | **POST** /v1/variation-groups | Group listings you already have: a variation (one product, an axis such as Size) or a purchase-rule group (\&quot;buy any 3\&quot;).
*ListingsApi* | [**createVariationGroupGenerate**](docs/Api/ListingsApi.md#createvariationgroupgenerate) | **POST** /v1/variation-groups/generate | Turn one listing into a variation group: each new value becomes its own listing (a copy, with its own price, quantity and SKU) and all of them one group.
*ListingsApi* | [**createVariationGroupPublish**](docs/Api/ListingsApi.md#createvariationgrouppublish) | **POST** /v1/variation-groups/{id}/publish | Publish a variation group per platform: one listing with a variation picker where the platform supports it (eBay, Shopify, Etsy), one per option elsewhere. Each platform reports its own outcome.
*ListingsApi* | [**deleteListing**](docs/Api/ListingsApi.md#deletelisting) | **DELETE** /v1/listings/{id} | Delist a listing (optionally narrowed to specific platforms via ?platforms&#x3D;).
*ListingsApi* | [**deleteLiveStreamPinLaunch**](docs/Api/ListingsApi.md#deletelivestreampinlaunch) | **DELETE** /v1/live-streams/{id}/pin-launch | Unpin the launch from your live show. Returns &#x60;{ ok }&#x60;.
*ListingsApi* | [**deleteRentalOffer**](docs/Api/ListingsApi.md#deleterentaloffer) | **DELETE** /v1/rentals/offers/{platformListingId} | Stop offering a listing for rent (existing bookings stand).
*ListingsApi* | [**deleteVariationGroup**](docs/Api/ListingsApi.md#deletevariationgroup) | **DELETE** /v1/variation-groups/{id} | Dissolve a group. Its options stay as ordinary listings.
*ListingsApi* | [**getListing**](docs/Api/ListingsApi.md#getlisting) | **GET** /v1/listings/{id} | Get one listing with its platform rows.
*ListingsApi* | [**getListingFacet**](docs/Api/ListingsApi.md#getlistingfacet) | **GET** /v1/listings/facets | Distinct brands + categories across listings + inventory.
*ListingsApi* | [**getListingSkuExist**](docs/Api/ListingsApi.md#getlistingskuexist) | **GET** /v1/listings/sku-exists | Check whether a SKU is already used by one of this user&#39;s items.
*ListingsApi* | [**getPricingSetting**](docs/Api/ListingsApi.md#getpricingsetting) | **GET** /v1/pricing/settings | Selling options: own-price match (Crossly sells your items at your own lower price for the same item on another marketplace; dollar-priced copies only) and layaway (buyers may put items on layaway). Both on by default.
*ListingsApi* | [**getPricingSoldComp**](docs/Api/ListingsApi.md#getpricingsoldcomp) | **GET** /v1/pricing/sold-comps | What one catalog product (market_sku_id, in one condition) actually sold for across Crossly in the last 180 days: median, p25/p75, p10/p90 (null under 10 sales), sale count, last sold, and days from listing to sale (median, p25, p75). Pass marketSkuId (+ optional condition) or one of your listingIds. comps is null until there are 3+ sales from 2+ sellers; holdCode says why there is nothing (no_market_sku, mixed_inventory, below_privacy_floor) — the same reasons a sold_median reprice rule holds.
*ListingsApi* | [**listListingAiDetections**](docs/Api/ListingsApi.md#listlistingaidetections) | **GET** /v1/listings/{id}/ai-detections | Crossly&#39;s AI-image detections for a listing&#39;s photos.
*ListingsApi* | [**listListingDiscrepancies**](docs/Api/ListingsApi.md#listlistingdiscrepancies) | **GET** /v1/listings/{id}/discrepancies | List detected marketplace-drift discrepancies for a listing.
*ListingsApi* | [**listListingIds**](docs/Api/ListingsApi.md#listlistingids) | **GET** /v1/listings/ids | Filter listings → return matching id list (no pagination).
*ListingsApi* | [**listListings**](docs/Api/ListingsApi.md#listlistings) | **GET** /v1/listings | List active platform listings.
*ListingsApi* | [**listPassports**](docs/Api/ListingsApi.md#listpassports) | **GET** /v1/passports | Product passports you registered (optionally for one Crossly listing): the code and URL each tag carries.
*ListingsApi* | [**listRentalOffers**](docs/Api/ListingsApi.md#listrentaloffers) | **GET** /v1/rentals/offers | What you offer for rent.
*ListingsApi* | [**updateHotspot**](docs/Api/ListingsApi.md#updatehotspot) | **PUT** /v1/hotspots | Tag your listings at points on a story or lookbook photo (shop the look). Replaces that photo’s tags; at most 12.
*ListingsApi* | [**updateListing**](docs/Api/ListingsApi.md#updatelisting) | **PATCH** /v1/listings/{id} | Edit a listing and fan out update jobs to existing platform listings.
*ListingsApi* | [**updateListingCustom**](docs/Api/ListingsApi.md#updatelistingcustom) | **PUT** /v1/listings/{id}/customs | Set a listing’s customs: HS code (6–10 digits), country of origin, and countries this item must not ship to on Crossly. Omitted fields are left alone; null (or [] for restrictedCountries) clears.
*ListingsApi* | [**updateListingPlatformListing**](docs/Api/ListingsApi.md#updatelistingplatformlisting) | **PATCH** /v1/listings/{id}/platform-listings/{plId} | Set one marketplace copy&#39;s price (e.g. the ebay.com copy of a listing also live on ebay.co.uk), in that copy&#39;s own currency.
*ListingsApi* | [**updateLiveStreamLineup**](docs/Api/ListingsApi.md#updatelivestreamlineup) | **PUT** /v1/live-streams/{id}/lineup | Set a live show’s lineup: your Crossly listings, in the order you will sell them. Buyers see it before they join; a sale of a lineup item while the show is live is recorded at its replay moment.
*ListingsApi* | [**updatePricingSetting**](docs/Api/ListingsApi.md#updatepricingsetting) | **PUT** /v1/pricing/settings | Turn own-price match and/or layaway on or off.
*ListingsApi* | [**updateRentalOffer**](docs/Api/ListingsApi.md#updaterentaloffer) | **PUT** /v1/rentals/offers/{platformListingId} | Offer a Crossly listing for rent: day rate, optional week rate, deposit, min/max days, turnaround buffer, and rent-only (off sale while offered). Needs a ship-from address.
*ListingsApi* | [**updateVariationGroup**](docs/Api/ListingsApi.md#updatevariationgroup) | **PATCH** /v1/variation-groups/{id} | Retitle a group, rename its axis, or change a group&#39;s purchase rule (written into every member&#39;s description).
*MagicApi* | [**createMagicScan**](docs/Api/MagicApi.md#createmagicscan) | **POST** /v1/magic/scan | Run a Magic List image scan.
*MagicApi* | [**createMagicScanSynthesize**](docs/Api/MagicApi.md#createmagicscansynthesize) | **POST** /v1/magic/scan/{runId}/synthesize | Synthesize a draft from confirmed matches.
*MagicApi* | [**getMagicDraft**](docs/Api/MagicApi.md#getmagicdraft) | **GET** /v1/magic/drafts/{draftId} | Get a synthesized Magic List draft.
*MagicApi* | [**listMagicRecent**](docs/Api/MagicApi.md#listmagicrecent) | **GET** /v1/magic/recent | Recent Magic List scans for this seller.
*MobileApi* | [**createMobilePushTest**](docs/Api/MobileApi.md#createmobilepushtest) | **POST** /v1/mobile/push-test | Fire a no-op test push to this user&#39;s devices.
*MobileApi* | [**createMobilePushToken**](docs/Api/MobileApi.md#createmobilepushtoken) | **POST** /v1/mobile/push-token | Register an Expo push token for this user.
*MobileApi* | [**deleteMobilePushToken**](docs/Api/MobileApi.md#deletemobilepushtoken) | **DELETE** /v1/mobile/push-tokens | Clear ALL registered push tokens for this user.
*MobileApi* | [**listMobilePushTokens**](docs/Api/MobileApi.md#listmobilepushtokens) | **GET** /v1/mobile/push-tokens | List registered Expo push tokens (masked).
*NFTMarketApi* | [**createNftMarketExternalResale**](docs/Api/NFTMarketApi.md#createnftmarketexternalresale) | **POST** /v1/nft-market/external-resale | Ops: record a Crossly NFT resold on ANY marketplace — maps mint → design and funds the pot. Admin PAT only.
*NFTMarketApi* | [**createNftMarketListing**](docs/Api/NFTMarketApi.md#createnftmarketlisting) | **POST** /v1/nft-market/listings | List an NFT you own for resale on the Crossly marketplace.
*NFTMarketApi* | [**createNftMarketListingCancel**](docs/Api/NFTMarketApi.md#createnftmarketlistingcancel) | **POST** /v1/nft-market/listings/{id}/cancel | Cancel one of your open NFT listings.
*NFTMarketApi* | [**createNftMarketListingConfirmSale**](docs/Api/NFTMarketApi.md#createnftmarketlistingconfirmsale) | **POST** /v1/nft-market/listings/{id}/confirm-sale | Ops: record a finalized on-Crossly NFT sale (verifies the royalty landed, funds the pot). Admin PAT only.
*NFTMarketApi* | [**getNftMarketListing**](docs/Api/NFTMarketApi.md#getnftmarketlisting) | **GET** /v1/nft-market/listings | Browse open on-platform NFT listings (Crossly cosmetics for resale in CBX/SOL).
*NeighbourhoodsApi* | [**getNeighbourhood**](docs/Api/NeighbourhoodsApi.md#getneighbourhood) | **GET** /v1/neighbourhoods/{slug} | One neighbourhood street by slug.
*NeighbourhoodsApi* | [**listNeighbourhoods**](docs/Api/NeighbourhoodsApi.md#listneighbourhoods) | **GET** /v1/neighbourhoods | Every neighbourhood street (Sneaker Row, Card District, Vintage Alley, Vinyl Lane): open or \&quot;opening soon\&quot; (6 shops + open stalls, or a live street event), shops, stalls today, the next street event and its /c/&lt;slug&gt; URL.
*NetworkApi* | [**createNetworkPool**](docs/Api/NetworkApi.md#createnetworkpool) | **POST** /v1/network/pool | Join the Crossly Network reciprocal engagement pool.
*NetworkApi* | [**deleteNetworkPool**](docs/Api/NetworkApi.md#deletenetworkpool) | **DELETE** /v1/network/pool | Leave the Crossly Network pool.
*NetworkApi* | [**getNetworkPool**](docs/Api/NetworkApi.md#getnetworkpool) | **GET** /v1/network/pool | The seller&#39;s Crossly Network pool membership row.
*NetworkApi* | [**getNetworkPoolSize**](docs/Api/NetworkApi.md#getnetworkpoolsize) | **GET** /v1/network/pool/size | Total members in the Crossly Network pool.
*NetworkApi* | [**listNetworkPoolLog**](docs/Api/NetworkApi.md#listnetworkpoollog) | **GET** /v1/network/pool/log | Recent engagement history — both sent and received.
*NetworkApi* | [**updateNetworkPool**](docs/Api/NetworkApi.md#updatenetworkpool) | **PATCH** /v1/network/pool | Update per-action toggles + platforms on pool membership.
*OffersApi* | [**createOfferRespond**](docs/Api/OffersApi.md#createofferrespond) | **POST** /v1/offers/{id}/respond | Accept, decline, or counter a buyer offer on a Crossly marketplace listing.
*OffersApi* | [**getOffer**](docs/Api/OffersApi.md#getoffer) | **GET** /v1/offers | List buyer offers on your Crossly marketplace listings, including bundles.
*OrdersApi* | [**createLiveShipmentLabel**](docs/Api/OrdersApi.md#createliveshipmentlabel) | **POST** /v1/live-shipments/{id}/label | Buy ONE label for a show box, rated for all its orders packed together; every order takes its tracking and the buyer’s extra postage is refunded.
*OrdersApi* | [**createLiveShipmentShip**](docs/Api/OrdersApi.md#createliveshipmentship) | **POST** /v1/live-shipments/{id}/ship | Ship a show box with your own label: every order is marked shipped with this tracking and the buyer’s extra postage is refunded.
*OrdersApi* | [**createOrderBulkDelete**](docs/Api/OrdersApi.md#createorderbulkdelete) | **POST** /v1/orders/bulk-delete | Bulk soft- or hard-delete orders by id.
*OrdersApi* | [**createOrderBulkExport**](docs/Api/OrdersApi.md#createorderbulkexport) | **POST** /v1/orders/bulk-export | Bulk export selected orders as CSV.
*OrdersApi* | [**createOrderBulkMarkDisputed**](docs/Api/OrdersApi.md#createorderbulkmarkdisputed) | **POST** /v1/orders/bulk-mark-disputed | Bulk mark orders as disputed with a shared reason.
*OrdersApi* | [**createOrderBulkMarkShipped**](docs/Api/OrdersApi.md#createorderbulkmarkshipped) | **POST** /v1/orders/bulk-mark-shipped | Bulk flip status&#x3D;shipped, clear the reserved-stock marker, and notify each platform.
*OrdersApi* | [**createOrderBulkPackingSlip**](docs/Api/OrdersApi.md#createorderbulkpackingslip) | **POST** /v1/orders/bulk-packing-slips | Bulk packing slips PDF.
*OrdersApi* | [**createOrderCancel**](docs/Api/OrdersApi.md#createordercancel) | **POST** /v1/orders/{id}/cancel | Cancel an order on its marketplace.
*OrdersApi* | [**createOrderDispute**](docs/Api/OrdersApi.md#createorderdispute) | **POST** /v1/orders/{id}/dispute | Flag an order as disputed.
*OrdersApi* | [**createOrderImport**](docs/Api/OrdersApi.md#createorderimport) | **POST** /v1/orders/import | Manually (re-)pull one or more connected platforms&#39; order history for a day-window.
*OrdersApi* | [**createOrderLabel**](docs/Api/OrdersApi.md#createorderlabel) | **POST** /v1/orders/{id}/label | Purchase EasyPost shipping label.
*OrdersApi* | [**createOrderMessage**](docs/Api/OrdersApi.md#createordermessage) | **POST** /v1/orders/{id}/message | Message the order&#39;s buyer on the marketplace.
*OrdersApi* | [**createOrderPickup**](docs/Api/OrdersApi.md#createorderpickup) | **POST** /v1/orders/pickups | Book a carrier pickup for labelled orders (one carrier per pickup; window at least an hour, up to 14 days ahead).
*OrdersApi* | [**createOrderPickupLabel**](docs/Api/OrdersApi.md#createorderpickuplabel) | **POST** /v1/orders/{id}/pickup-label | Buy the carrier label for a Crossly order the buyer collects from a pickup point (debits your shipping wallet). 402 when the wallet is short.
*OrdersApi* | [**createOrderPullPlatformLabel**](docs/Api/OrdersApi.md#createorderpullplatformlabel) | **POST** /v1/orders/{id}/pull-platform-label | Pull a pre-paid label from cookie platforms (Poshmark/Mercari).
*OrdersApi* | [**createOrderRate**](docs/Api/OrdersApi.md#createorderrate) | **POST** /v1/orders/{id}/rates | EasyPost rate quote for an order.
*OrdersApi* | [**createOrderRefund**](docs/Api/OrdersApi.md#createorderrefund) | **POST** /v1/orders/{id}/refund | Issue a full or partial refund on the platform.
*OrdersApi* | [**createOrderScanForm**](docs/Api/OrdersApi.md#createorderscanform) | **POST** /v1/orders/scan-forms | Create SCAN forms (one per carrier account and ship-from address) for labels the carrier has not scanned yet.
*OrdersApi* | [**createOrderTracking**](docs/Api/OrdersApi.md#createordertracking) | **POST** /v1/orders/{id}/tracking | Submit tracking number + carrier and notify the platform.
*OrdersApi* | [**createOrderWhatnotLabel**](docs/Api/OrdersApi.md#createorderwhatnotlabel) | **POST** /v1/orders/{id}/whatnot/label | Generate the Whatnot shipping label and record it on the order.
*OrdersApi* | [**createOrderWhatnotPackage**](docs/Api/OrdersApi.md#createorderwhatnotpackage) | **POST** /v1/orders/{id}/whatnot/package | Save a Whatnot shipment package (weight oz, box inches).
*OrdersApi* | [**createOrderWhatnotPackageQuote**](docs/Api/OrdersApi.md#createorderwhatnotpackagequote) | **POST** /v1/orders/{id}/whatnot/package/quote | Quote what a Whatnot package change costs (cents).
*OrdersApi* | [**createRentalApprove**](docs/Api/OrdersApi.md#createrentalapprove) | **POST** /v1/rentals/{id}/approve | Approve a requested rental (offers with requireApproval): the renter’s held card is charged.
*OrdersApi* | [**createRentalCancel**](docs/Api/OrdersApi.md#createrentalcancel) | **POST** /v1/rentals/{id}/cancel | Cancel a booked rental that has not shipped: the renter is refunded in full.
*OrdersApi* | [**createRentalClaim**](docs/Api/OrdersApi.md#createrentalclaim) | **POST** /v1/rentals/{id}/claim | Claim part or all of the deposit (cents, a note, photo URLs): within 3 days of the return, or 14 days after the end if it never came back.
*OrdersApi* | [**createRentalDecline**](docs/Api/OrdersApi.md#createrentaldecline) | **POST** /v1/rentals/{id}/decline | Decline a requested rental: the hold on the renter’s card is released.
*OrdersApi* | [**createRentalLabel**](docs/Api/OrdersApi.md#createrentallabel) | **POST** /v1/rentals/{id}/labels | Buy both labels for a booked rental: outbound to the renter, and the return label they use.
*OrdersApi* | [**createRentalReturned**](docs/Api/OrdersApi.md#createrentalreturned) | **POST** /v1/rentals/{id}/returned | Mark a rental back with you. You then have 3 days to claim damage before the deposit goes back.
*OrdersApi* | [**createRentalShipped**](docs/Api/OrdersApi.md#createrentalshipped) | **POST** /v1/rentals/{id}/shipped | Mark a booked rental shipped, with at least 2 photos of its condition as it leaves (URLs you uploaded) — the evidence any later claim is judged against.
*OrdersApi* | [**getOrder**](docs/Api/OrdersApi.md#getorder) | **GET** /v1/orders/{id} | Get one order.
*OrdersApi* | [**getOrderCancelEligibility**](docs/Api/OrdersApi.md#getordercanceleligibility) | **GET** /v1/orders/{id}/cancel-eligibility | Whether this order can be cancelled, and which reason codes the marketplace accepts.
*OrdersApi* | [**getOrderCount**](docs/Api/OrdersApi.md#getordercount) | **GET** /v1/orders/counts | Tab badge counts by status.
*OrdersApi* | [**getOrderEvidence**](docs/Api/OrdersApi.md#getorderevidence) | **GET** /v1/orders/{id}/evidence | Everything recorded about how this order was packed and how it arrived.
*OrdersApi* | [**getOrderLabelPrint**](docs/Api/OrdersApi.md#getorderlabelprint) | **GET** /v1/orders/{id}/label/print | The order&#39;s shipping label as a PDF sized for printing (cropped, upright, fitted).
*OrdersApi* | [**getOrderPackingSlip**](docs/Api/OrdersApi.md#getorderpackingslip) | **GET** /v1/orders/{id}/packing-slip | Single-order packing slip PDF.
*OrdersApi* | [**getOrderProofOfDelivery**](docs/Api/OrdersApi.md#getorderproofofdelivery) | **GET** /v1/orders/{id}/proof-of-delivery | Proof-of-delivery evidence from the carrier&#39;s scan record (PDF, or JSON).
*OrdersApi* | [**getOrderScanForm**](docs/Api/OrdersApi.md#getorderscanform) | **GET** /v1/orders/scan-forms/{id} | One SCAN form; a queued form is re-read from the carrier and its PDF appears once built.
*OrdersApi* | [**getOrderShipment**](docs/Api/OrdersApi.md#getordershipment) | **GET** /v1/orders/{id}/shipments | List the parcels an order shipped in.
*OrdersApi* | [**getOrderWhatnotPackingSlip**](docs/Api/OrdersApi.md#getorderwhatnotpackingslip) | **GET** /v1/orders/{id}/whatnot/packing-slip | A fresh link to Whatnot&#39;s packing slip PDF.
*OrdersApi* | [**getOrderWhatnotShipment**](docs/Api/OrdersApi.md#getorderwhatnotshipment) | **GET** /v1/orders/{id}/whatnot/shipment | Whatnot shipment for an order (package, label, tracking). Records a label found on it.
*OrdersApi* | [**listLayaways**](docs/Api/OrdersApi.md#listlayaways) | **GET** /v1/layaways | Your items on layaway (active and paid off). Do not ship an active one: its order moves to needs_fulfillment when paid in full.
*OrdersApi* | [**listLiveShipments**](docs/Api/OrdersApi.md#listliveshipments) | **GET** /v1/live-shipments | Your show boxes: every buyer’s orders from one live show, to ship together.
*OrdersApi* | [**listOrderPickupReady**](docs/Api/OrdersApi.md#listorderpickupready) | **GET** /v1/orders/pickup-ready | Orders with a purchased Shippo label a courier can collect or a SCAN form can cover, grouped by carrier.
*OrdersApi* | [**listOrderPickups**](docs/Api/OrdersApi.md#listorderpickups) | **GET** /v1/orders/pickups | Booked carrier pickups, newest first.
*OrdersApi* | [**listOrderScanForms**](docs/Api/OrdersApi.md#listorderscanforms) | **GET** /v1/orders/scan-forms | SCAN forms, newest first.
*OrdersApi* | [**listOrderUnits**](docs/Api/OrdersApi.md#listorderunits) | **GET** /v1/orders/{id}/units | List the identified units that shipped on an order.
*OrdersApi* | [**listOrders**](docs/Api/OrdersApi.md#listorders) | **GET** /v1/orders | List orders.
*OrdersApi* | [**listRentals**](docs/Api/OrdersApi.md#listrentals) | **GET** /v1/rentals | Rentals of your items, with the ship-to and the outbound label.
*OrdersApi* | [**updateOrder**](docs/Api/OrdersApi.md#updateorder) | **PATCH** /v1/orders/{id} | Update order (status, notes, tracking).
*PATApi* | [**createPat**](docs/Api/PATApi.md#createpat) | **POST** /v1/pat | Mint a new PAT. Full token returned ONCE — store it on the client.
*PATApi* | [**deletePat**](docs/Api/PATApi.md#deletepat) | **DELETE** /v1/pat/{id} | Revoke a PAT by id.
*PATApi* | [**getPatScope**](docs/Api/PATApi.md#getpatscope) | **GET** /v1/pat/scopes | List the canonical scope catalog.
*PATApi* | [**listPat**](docs/Api/PATApi.md#listpat) | **GET** /v1/pat | List the caller&#39;s PATs (preview only).
*PayoutApi* | [**createPayoutConnectOnboard**](docs/Api/PayoutApi.md#createpayoutconnectonboard) | **POST** /v1/payout/connect/onboard | Start or resume payout-account onboarding; returns a Stripe-hosted URL.
*PayoutApi* | [**getPayoutConnect**](docs/Api/PayoutApi.md#getpayoutconnect) | **GET** /v1/payout/connect | Your Stripe payout account: status, country, agreement and payout currency.
*PayoutApi* | [**getPayoutEstimate**](docs/Api/PayoutApi.md#getpayoutestimate) | **GET** /v1/payout/estimate | What one platform nets at a given price, after fees and shipping.
*PayoutApi* | [**getPayoutGrossForNet**](docs/Api/PayoutApi.md#getpayoutgrossfornet) | **GET** /v1/payout/gross-for-net | The gross price needed to clear a target net on one platform.
*PayoutApi* | [**listPayoutCompare**](docs/Api/PayoutApi.md#listpayoutcompare) | **GET** /v1/payout/compare | Rank platforms by what they net at a given price. Defaults to connected ones.
*PolicyPresetsApi* | [**createPolicyPreset**](docs/Api/PolicyPresetsApi.md#createpolicypreset) | **POST** /v1/policy-presets | Create a return / shipping / payment policy preset.
*PolicyPresetsApi* | [**deletePolicyPreset**](docs/Api/PolicyPresetsApi.md#deletepolicypreset) | **DELETE** /v1/policy-presets/{id} | Delete a policy preset.
*PolicyPresetsApi* | [**listPolicyPresets**](docs/Api/PolicyPresetsApi.md#listpolicypresets) | **GET** /v1/policy-presets | List the seller&#39;s return / shipping / payment policy presets.
*PolicyPresetsApi* | [**updatePolicyPreset**](docs/Api/PolicyPresetsApi.md#updatepolicypreset) | **PATCH** /v1/policy-presets/{id} | Update a policy preset.
*ProductionApi* | [**createProductionCandidateAccept**](docs/Api/ProductionApi.md#createproductioncandidateaccept) | **POST** /v1/production/candidates/{id}/accept | Accept a graduated design&#39;s production terms (edition size, cost, holder access).
*ProductionApi* | [**createProductionCandidatePo**](docs/Api/ProductionApi.md#createproductioncandidatepo) | **POST** /v1/production/candidates/{id}/po | Ops: open a purchase order for a candidate. Admin PAT only.
*ProductionApi* | [**createProductionCandidateVote**](docs/Api/ProductionApi.md#createproductioncandidatevote) | **POST** /v1/production/candidates/{id}/vote | Back (support: true) or un-back a design on the production ballot. One vote per person per design; voters must have bought on Crossly.
*ProductionApi* | [**createProductionDesignBrief**](docs/Api/ProductionApi.md#createproductiondesignbrief) | **POST** /v1/production/designs/{cosmeticId}/brief | Set a design&#39;s production brief (materials, finish, box, reference images).
*ProductionApi* | [**createProductionDesignConsent**](docs/Api/ProductionApi.md#createproductiondesignconsent) | **POST** /v1/production/designs/{cosmeticId}/consent | Opt a design in or out of physical production.
*ProductionApi* | [**createProductionDesignSpec**](docs/Api/ProductionApi.md#createproductiondesignspec) | **POST** /v1/production/designs/{cosmeticId}/spec | Set a design&#39;s production spec (category, materials, complexity, packaging).
*ProductionApi* | [**createProductionEstimate**](docs/Api/ProductionApi.md#createproductionestimate) | **POST** /v1/production/estimate | Estimate a run&#39;s landed cost from a spec + edition size (overshoots for safety).
*ProductionApi* | [**createProductionRunPurchase**](docs/Api/ProductionApi.md#createproductionrunpurchase) | **POST** /v1/production/runs/{id}/purchase | Buy a limited-edition unit of a physical run (holder pricing applies).
*ProductionApi* | [**createReceiptRelist**](docs/Api/ProductionApi.md#createreceiptrelist) | **POST** /v1/receipts/{id}/relist | Sell it again: a draft listing of something you bought on Crossly, carrying its purchase receipt so the next buyer inherits its provenance.
*ProductionApi* | [**getProductionBallot**](docs/Api/ProductionApi.md#getproductionballot) | **GET** /v1/production/ballot | The ballot: designs waiting for a physical run, most backed first, and whether you may vote.
*ProductionApi* | [**getProductionCandidate**](docs/Api/ProductionApi.md#getproductioncandidate) | **GET** /v1/production/candidates | Your designs that have graduated toward a physical run.
*ProductionApi* | [**getProductionDesignPref**](docs/Api/ProductionApi.md#getproductiondesignpref) | **GET** /v1/production/designs/{cosmeticId}/prefs | Read a design&#39;s production preferences (spec, brief, opt-out).
*ProductionApi* | [**getProductionDrop**](docs/Api/ProductionApi.md#getproductiondrop) | **GET** /v1/production/drops | Limited-edition units you own, with fulfillment status.
*ProductionApi* | [**getProductionEarning**](docs/Api/ProductionApi.md#getproductionearning) | **GET** /v1/production/earnings | Your CBX earnings from physical production (royalties + balance + lines).
*ProductionApi* | [**getProductionLine**](docs/Api/ProductionApi.md#getproductionline) | **GET** /v1/production/lines | Your production lines dashboard (candidate + run + inventory).
*ProductionApi* | [**getProductionPo**](docs/Api/ProductionApi.md#getproductionpo) | **GET** /v1/production/pos | Ops: list purchase orders (optionally for one candidate). Admin PAT only.
*ProductionApi* | [**getProductionPoReconcile**](docs/Api/ProductionApi.md#getproductionporeconcile) | **GET** /v1/production/pos/{poId}/reconcile | Ops: reconcile a PO&#39;s actuals against the estimate. Admin PAT only.
*ProductionApi* | [**getProductionRun**](docs/Api/ProductionApi.md#getproductionrun) | **GET** /v1/production/runs | Browse open limited-edition physical runs (graduated designs).
*ProductionApi* | [**getShopListingProvenance**](docs/Api/ProductionApi.md#getshoplistingprovenance) | **GET** /v1/shop/listings/{slug}/provenance | Crossly provenance behind a shop listing: owners on Crossly and since when (never who or for how much). Null when not bought here.
*ProductionApi* | [**updateProductionPo**](docs/Api/ProductionApi.md#updateproductionpo) | **PATCH** /v1/production/pos/{poId} | Ops: update a PO (supplier, freight, actuals, QC, status). Admin PAT only.
*ProfileApi* | [**updateMe**](docs/Api/ProfileApi.md#updateme) | **PATCH** /v1/me | Update the authenticated user&#39;s profile (display name, etc).
*ReferenceApi* | [**getBrand**](docs/Api/ReferenceApi.md#getbrand) | **GET** /v1/brands | Search the Crossly brand index. Returns up to 50 matches.
*ReferenceApi* | [**getCategory**](docs/Api/ReferenceApi.md#getcategory) | **GET** /v1/categories | List Crossly&#39;s canonical category tree.
*ReferenceApi* | [**getDepartment**](docs/Api/ReferenceApi.md#getdepartment) | **GET** /v1/departments | Search the eBay-sourced \&quot;Department\&quot; item-specific values.
*ReferenceApi* | [**getGender**](docs/Api/ReferenceApi.md#getgender) | **GET** /v1/genders | Search the eBay-sourced \&quot;Gender\&quot; item-specific values.
*ReferenceApi* | [**getPattern**](docs/Api/ReferenceApi.md#getpattern) | **GET** /v1/patterns | Search the eBay-sourced \&quot;Pattern\&quot; item-specific values.
*ReferenceApi* | [**getSizeSystem**](docs/Api/ReferenceApi.md#getsizesystem) | **GET** /v1/size-systems | Search the Poshmark + Vestiaire size-system union (US/UK/EU/AU/FR/KR).
*ReferenceApi* | [**getStyle**](docs/Api/ReferenceApi.md#getstyle) | **GET** /v1/styles | Search the eBay-sourced \&quot;Style\&quot; item-specific values.
*ReferenceApi* | [**getType**](docs/Api/ReferenceApi.md#gettype) | **GET** /v1/types | Search the eBay-sourced \&quot;Type\&quot; item-specific values.
*ReferenceApi* | [**listReferenceCountries**](docs/Api/ReferenceApi.md#listreferencecountries) | **GET** /v1/reference/countries | Every country with its delivery-address rules.
*RestockPromptsApi* | [**createRestockPromptDismiss**](docs/Api/RestockPromptsApi.md#createrestockpromptdismiss) | **POST** /v1/restock-prompts/{id}/dismiss | Dismiss a pending restock prompt.
*RestockPromptsApi* | [**createRestockPromptRepublish**](docs/Api/RestockPromptsApi.md#createrestockpromptrepublish) | **POST** /v1/restock-prompts/{id}/republish | Republish a restock prompt to platforms.
*RestockPromptsApi* | [**listRestockPrompts**](docs/Api/RestockPromptsApi.md#listrestockprompts) | **GET** /v1/restock-prompts | List pending restock prompts.
*ReturnsApi* | [**createPolicyReturnReceived**](docs/Api/ReturnsApi.md#createpolicyreturnreceived) | **POST** /v1/policy-returns/{id}/received | Mark a return received: refunds the buyer, less the restocking or try fee you keep.
*ReturnsApi* | [**createReturn**](docs/Api/ReturnsApi.md#createreturn) | **POST** /v1/returns | Open a return record on an order (rejects if another open return exists).
*ReturnsApi* | [**getReturn**](docs/Api/ReturnsApi.md#getreturn) | **GET** /v1/returns/{id} | Get one return record.
*ReturnsApi* | [**listPolicyReturns**](docs/Api/ReturnsApi.md#listpolicyreturns) | **GET** /v1/policy-returns | Returns Crossly buyers opened under your return policy or try at home; filter by orderId.
*ReturnsApi* | [**listReturns**](docs/Api/ReturnsApi.md#listreturns) | **GET** /v1/returns | List returns (physical-return workflow). status&#x3D;open|closed|&lt;exact&gt;.
*ReturnsApi* | [**updateReturn**](docs/Api/ReturnsApi.md#updatereturn) | **PATCH** /v1/returns/{id} | Transition return status (received/inspected/restocked) and bump inventory on restock.
*SalesApi* | [**createSaleBulkDelete**](docs/Api/SalesApi.md#createsalebulkdelete) | **POST** /v1/sales/bulk-delete | Bulk soft-delete sales rows.
*SalesApi* | [**listSales**](docs/Api/SalesApi.md#listsales) | **GET** /v1/sales | List sales (each unique sale event).
*SavedViewsApi* | [**createSavedView**](docs/Api/SavedViewsApi.md#createsavedview) | **POST** /v1/saved-views | Create a saved view preset.
*SavedViewsApi* | [**deleteSavedView**](docs/Api/SavedViewsApi.md#deletesavedview) | **DELETE** /v1/saved-views/{id} | Delete a saved view preset.
*SavedViewsApi* | [**listSavedViews**](docs/Api/SavedViewsApi.md#listsavedviews) | **GET** /v1/saved-views | List the seller&#39;s saved view presets.
*SavedViewsApi* | [**updateSavedView**](docs/Api/SavedViewsApi.md#updatesavedview) | **PATCH** /v1/saved-views/{id} | Update a saved view preset.
*ScanApi* | [**listScanCaptures**](docs/Api/ScanApi.md#listscancaptures) | **GET** /v1/scan/captures | Your capture sessions and what they produced.
*ScanApi* | [**listScanModels**](docs/Api/ScanApi.md#listscanmodels) | **GET** /v1/scan/models | Which items already have a 3D model.
*SourcingApi* | [**createSourcingReceipt**](docs/Api/SourcingApi.md#createsourcingreceipt) | **POST** /v1/sourcing/receipts | Append a parsed receipt to the sourcing ledger.
*SourcingApi* | [**getSourcingReceipt**](docs/Api/SourcingApi.md#getsourcingreceipt) | **GET** /v1/sourcing/receipts | List parsed sourcing receipts in this user&#39;s ledger.
*SourcingApi* | [**listSourcingDemand**](docs/Api/SourcingApi.md#listsourcingdemand) | **GET** /v1/sourcing/demand | Items buyers looked for on other sites that Crossly did not have.
*SourcingApi* | [**listSourcingDemandMine**](docs/Api/SourcingApi.md#listsourcingdemandmine) | **GET** /v1/sourcing/demand/mine | Unmet buyer demand for items you hold or have sold before.
*StallsApi* | [**createStallBook**](docs/Api/StallsApi.md#createstallbook) | **POST** /v1/stalls/book | Book and pay for a pop-up stall: { street, spotIndex, rail, unit: \&quot;day\&quot;, startDate, days } or { ..., unit: \&quot;event\&quot;, eventIds }, optional booth { canopy, pattern, lights, counter, piece } (premium values need holding; checked before paying). Paid up front; full-access token and Idempotency-Key required.
*StallsApi* | [**createStallBookingCancel**](docs/Api/StallsApi.md#createstallbookingcancel) | **POST** /v1/stalls/bookings/{id}/cancel | Cancel a stall before it opens: a full refund on the rail it was paid on. Final once it has opened.
*StallsApi* | [**getStallQuote**](docs/Api/StallsApi.md#getstallquote) | **GET** /v1/stalls/quote | Quote a stall: street, spot, and either unit&#x3D;day with start (YYYY-MM-DD) and days, or unit&#x3D;event with events (comma-separated event ids). Returns the line items in cents, the rails the spot accepts and whether it is bookable.
*StallsApi* | [**listStallMine**](docs/Api/StallsApi.md#liststallmine) | **GET** /v1/stalls/mine | Your stall bookings, newest first, with visits, offers and sales while the stall was up.
*StallsApi* | [**listStreetEvents**](docs/Api/StallsApi.md#liststreetevents) | **GET** /v1/streets/{slug}/events | Current and upcoming street events (Night Market, Swap Meet) on a street, soonest first.
*StallsApi* | [**listStreetStalls**](docs/Api/StallsApi.md#liststreetstalls) | **GET** /v1/streets/{slug}/stalls | Today&#39;s pop-up stalls on a street (each with its live listings, awning, sign and seller), plus the spots still free today. meta carries the street, the phase (day / night_market / swap_meet) and the free spots.
*StallsApi* | [**updateStallBooking**](docs/Api/StallsApi.md#updatestallbooking) | **PATCH** /v1/stalls/bookings/{id} | Change a booked stall before or while it is up: listingIds (up to 6 of your live listings), awning { colour, pattern }, booth { canopy, pattern, lights, counter, piece } (premium values need holding), sign, attendant.
*StorefrontApi* | [**getStorefrontShipping**](docs/Api/StorefrontApi.md#getstorefrontshipping) | **GET** /v1/storefront/shipping | Your Crossly shipping policy (domestic and international services, which countries you ship to) and your default ship-from address.
*StorefrontApi* | [**updateStorefrontShipping**](docs/Api/StorefrontApi.md#updatestorefrontshipping) | **PUT** /v1/storefront/shipping | Set your shipping policy (international.enabled, shipsTo worldwide or ISO codes, excludes) and/or your default ship-from address (any country; 422 for a sanctioned origin).
*TaxApi* | [**createMileage**](docs/Api/TaxApi.md#createmileage) | **POST** /v1/mileage | Create a mileage entry.
*TaxApi* | [**deleteMileage**](docs/Api/TaxApi.md#deletemileage) | **DELETE** /v1/mileage/{id} | Delete a mileage entry.
*TaxApi* | [**getMileageSummary**](docs/Api/TaxApi.md#getmileagesummary) | **GET** /v1/mileage/summary | Annual mileage totals + IRS deduction.
*TaxApi* | [**getTaxScheduleC**](docs/Api/TaxApi.md#gettaxschedulec) | **GET** /v1/tax/schedule-c | Schedule C JSON for a tax year.
*TaxApi* | [**listMileage**](docs/Api/TaxApi.md#listmileage) | **GET** /v1/mileage | List mileage entries.
*TaxApi* | [**updateMileage**](docs/Api/TaxApi.md#updatemileage) | **PATCH** /v1/mileage/{id} | Update a mileage entry.
*TaxonomyApi* | [**getTaxonomyCategory**](docs/Api/TaxonomyApi.md#gettaxonomycategory) | **GET** /v1/taxonomy/{platform}/categories | Categories for a platform. Default is top-level; pass &#x60;?parent&#x3D;&lt;categoryId&gt;&#x60; to drill down one level (supported on cookie platforms whose recipe returns flat parent_id-linked rows).
*TaxonomyApi* | [**getTaxonomyCategoryAspect**](docs/Api/TaxonomyApi.md#gettaxonomycategoryaspect) | **GET** /v1/taxonomy/{platform}/categories/{id}/aspects | Item-specific aspects (eBay) / properties (Etsy) / hard-coded enums (cookie platforms) for a category.
*TaxonomyApi* | [**getTaxonomyCategoryChildren**](docs/Api/TaxonomyApi.md#gettaxonomycategorychildren) | **GET** /v1/taxonomy/{platform}/categories/{id}/children | Direct children of a category node.
*TaxonomyApi* | [**getTaxonomyRequiredField**](docs/Api/TaxonomyApi.md#gettaxonomyrequiredfield) | **GET** /v1/taxonomy/{platform}/required-fields | Normalized field schema the seller needs to fill before crossposting to this platform. Combines master fields (title/description/price/condition) with platform-specific overrides.
*TaxonomyApi* | [**listTaxonomySuggest**](docs/Api/TaxonomyApi.md#listtaxonomysuggest) | **GET** /v1/taxonomy/{platform}/suggest | Reverse lookup — suggest categories matching a search phrase: eBay live; Poshmark, Mercari, Depop, Grailed, Vinted, Whatnot, Vestiaire, OfferUp, Facebook and Curtsy over their harvested trees. Etsy answers an empty list (browse its tree instead).
*TeamApi* | [**createTeamAccept**](docs/Api/TeamApi.md#createteamaccept) | **POST** /v1/team/accept | Accept a pending team invitation by raw token.
*TeamApi* | [**createTeamInvite**](docs/Api/TeamApi.md#createteaminvite) | **POST** /v1/team/invite | Mint a team invitation; returns the one-time accept URL.
*TeamApi* | [**createTeamLeave**](docs/Api/TeamApi.md#createteamleave) | **POST** /v1/team/leave | Leave every team this user is currently a member of.
*TeamApi* | [**createTeamRevoke**](docs/Api/TeamApi.md#createteamrevoke) | **POST** /v1/team/revoke | Revoke a pending invite OR an active team member.
*TeamApi* | [**getTeam**](docs/Api/TeamApi.md#getteam) | **GET** /v1/team | List pending team invitations + active members.
*TeamApi* | [**updateTeam**](docs/Api/TeamApi.md#updateteam) | **PATCH** /v1/team/{memberId} | Update a team member&#39;s scopes (owner only).
*TemplatesApi* | [**createMeTemplate**](docs/Api/TemplatesApi.md#createmetemplate) | **POST** /v1/me/templates | Create a template.
*TemplatesApi* | [**createMeTemplateImport**](docs/Api/TemplatesApi.md#createmetemplateimport) | **POST** /v1/me/templates/import | Bulk-create templates from an exported payload.
*TemplatesApi* | [**createMeTemplateRender**](docs/Api/TemplatesApi.md#createmetemplaterender) | **POST** /v1/me/templates/{id}/render | Render a template&#39;s title + description against a context.
*TemplatesApi* | [**createMeTemplateShare**](docs/Api/TemplatesApi.md#createmetemplateshare) | **POST** /v1/me/templates/{id}/share | Mint or return an existing share token for a template.
*TemplatesApi* | [**deleteMeTemplate**](docs/Api/TemplatesApi.md#deletemetemplate) | **DELETE** /v1/me/templates/{id} | Delete a template.
*TemplatesApi* | [**deleteMeTemplateShare**](docs/Api/TemplatesApi.md#deletemetemplateshare) | **DELETE** /v1/me/templates/{id}/share | Revoke a template share link.
*TemplatesApi* | [**getMeTemplate**](docs/Api/TemplatesApi.md#getmetemplate) | **GET** /v1/me/templates/{id} | Fetch one template in full.
*TemplatesApi* | [**getMeTemplateSuggest**](docs/Api/TemplatesApi.md#getmetemplatesuggest) | **GET** /v1/me/templates/suggest | The seller&#39;s default template for a category.
*TemplatesApi* | [**listMeTemplates**](docs/Api/TemplatesApi.md#listmetemplates) | **GET** /v1/me/templates | List the seller&#39;s templates.
*TemplatesApi* | [**updateMeTemplate**](docs/Api/TemplatesApi.md#updatemetemplate) | **PATCH** /v1/me/templates/{id} | Patch a template.
*TradeBlockApi* | [**createTradeBlockEvolutionClaim**](docs/Api/TradeBlockApi.md#createtradeblockevolutionclaim) | **POST** /v1/trade-block/evolutions/{id}/claim | Burn COSM and mint the evolved (or set-master) NFT for one of your unlocks.
*TradeBlockApi* | [**createTradeBlockEvolutionRecipe**](docs/Api/TradeBlockApi.md#createtradeblockevolutionrecipe) | **POST** /v1/trade-block/evolution-recipes | Author a Trade Evolution recipe (a graded item or pair that, when swapped, unlocks a cosmetic you designed). Born unreviewed until ops approves.
*TradeBlockApi* | [**createTradeBlockOfferRespond**](docs/Api/TradeBlockApi.md#createtradeblockofferrespond) | **POST** /v1/trade-block/offers/{id}/respond | Accept, decline, counter, or withdraw a Trade Block offer.
*TradeBlockApi* | [**createTradeBlockPostClose**](docs/Api/TradeBlockApi.md#createtradeblockpostclose) | **POST** /v1/trade-block/posts/{id}/close | Close one of your posts so it stops taking offers.
*TradeBlockApi* | [**createTradeBlockPostOffer**](docs/Api/TradeBlockApi.md#createtradeblockpostoffer) | **POST** /v1/trade-block/posts/{id}/offers | Respond to a post with a concrete swap: items on each side (0..N), optional cash.
*TradeBlockApi* | [**createTradeBlockSetRecipe**](docs/Api/TradeBlockApi.md#createtradeblocksetrecipe) | **POST** /v1/trade-block/set-recipes | Author a set-completion recipe (a set of items that, once assembled through trading, unlocks a set-master cosmetic you designed). Born unreviewed until ops approves.
*TradeBlockApi* | [**getTradeBlockEvolution**](docs/Api/TradeBlockApi.md#gettradeblockevolution) | **GET** /v1/trade-block/evolutions | List your Trade Evolution unlocks — completed swaps that unlocked an evolved or set-master NFT you can mint by burning COSM.
*TradeBlockApi* | [**getTradeBlockPost**](docs/Api/TradeBlockApi.md#gettradeblockpost) | **GET** /v1/trade-block/posts | Browse open Trade Block posts (wants + offers) on the Crossly Market.
*TradeBlockApi* | [**getTradeBlockPostById**](docs/Api/TradeBlockApi.md#gettradeblockpostbyid) | **GET** /v1/trade-block/posts/{id} | Get one Trade Block post with its items and open-offer count.
*TradeBlockApi* | [**getTradeBlockTrade**](docs/Api/TradeBlockApi.md#gettradeblocktrade) | **GET** /v1/trade-block/trades | List the trades you are a party to, newest first.
*VaultMarketsApi* | [**createVaultLend**](docs/Api/VaultMarketsApi.md#createvaultlend) | **POST** /v1/vault/{id}/lend | Turn lending on or off for a unit you own in the vault, optionally with your minimum borrow rate (APR in basis points). Returns &#x60;{ lendEnabled, minAprBps }&#x60;.
*VaultMarketsApi* | [**createVaultMarketAccount**](docs/Api/VaultMarketsApi.md#createvaultmarketaccount) | **POST** /v1/vault-markets/account | Open your account at the custodian partner (once). Returns &#x60;{ status }&#x60;; the custodian verifies it before it is active.
*VaultMarketsApi* | [**createVaultMarketAdminMark**](docs/Api/VaultMarketsApi.md#createvaultmarketadminmark) | **POST** /v1/vault-markets/admin-marks | Upload your fund administrator&#39;s prices (&#x60;administrator&#x60;, &#x60;marks: [{ bookKey, day, cents }]&#x60;). Shown beside Crossly&#39;s marks and labelled as yours; they never change a Crossly figure.
*VaultMarketsApi* | [**createVaultMarketAdvance**](docs/Api/VaultMarketsApi.md#createvaultmarketadvance) | **POST** /v1/vault-markets/advances | Take an advance against a vault unit that is listed for sale: paid into your custodian account, netted from the sale. Free for 60 days, then the pool rate. Needs a verified ID.
*VaultMarketsApi* | [**createVaultMarketAdvanceRelist**](docs/Api/VaultMarketsApi.md#createvaultmarketadvancerelist) | **POST** /v1/vault-markets/advances/{id}/relist | Relist an advance&#39;s unit at a new price (never so low its sale could not repay the advance).
*VaultMarketsApi* | [**createVaultMarketAgentDraftCancel**](docs/Api/VaultMarketsApi.md#createvaultmarketagentdraftcancel) | **POST** /v1/vault-markets/agent/drafts/{id}/cancel | Throw a drafted order away (only while it is still a draft). Returns { ok, draft }.
*VaultMarketsApi* | [**createVaultMarketAgentWatch**](docs/Api/VaultMarketsApi.md#createvaultmarketagentwatch) | **POST** /v1/vault-markets/agent/watches | Watch a book key: tell me once when its best bid, lowest ask, last trade or market price crosses a price (cents). Leave out direction for \&quot;crosses\&quot; (whichever way it has to move). Never trades. At most 50 live, each for 90 days.
*VaultMarketsApi* | [**createVaultMarketAlert**](docs/Api/VaultMarketsApi.md#createvaultmarketalert) | **POST** /v1/vault-markets/alerts | Alert me when a key&#39;s market price goes above or below a price (fires once).
*VaultMarketsApi* | [**createVaultMarketAlertPrefTest**](docs/Api/VaultMarketsApi.md#createvaultmarketalertpreftest) | **POST** /v1/vault-markets/alert-prefs/test | Send yourself one test alert of a &#x60;kind&#x60; through your own switches. Returns &#x60;{ sent, kind, plan }&#x60;, where plan says per channel: send, off, quiet (held by quiet hours) or unavailable.
*VaultMarketsApi* | [**createVaultMarketAuctionLot**](docs/Api/VaultMarketsApi.md#createvaultmarketauctionlot) | **POST** /v1/vault-markets/auctions/lots | Consign a stored, authenticated unit to the next weekly or premier event, with an optional opening price and reserve. The unit is held until the close. Returns &#x60;{ lotId, eventId, endsAt }&#x60;.
*VaultMarketsApi* | [**createVaultMarketAuctionLotBid**](docs/Api/VaultMarketsApi.md#createvaultmarketauctionlotbid) | **POST** /v1/vault-markets/auctions/lots/{id}/bids | Leave or raise your maximum on a lot; the system bids for you up to it. A bid in the last 2 minutes extends the lot by 2 minutes. The winner&#39;s saved card is charged at the close through the order book. ID needed above $10,000.
*VaultMarketsApi* | [**createVaultMarketAuctionLotWithdraw**](docs/Api/VaultMarketsApi.md#createvaultmarketauctionlotwithdraw) | **POST** /v1/vault-markets/auctions/lots/{id}/withdraw | Withdraw your lot before any bid; the unit goes back on your shelf. Returns &#x60;{ ok }&#x60;.
*VaultMarketsApi* | [**createVaultMarketBlock**](docs/Api/VaultMarketsApi.md#createvaultmarketblock) | **POST** /v1/vault-markets/blocks | Place a block buy for an entity: one order booked to the first sub-account in &#x60;plan&#x60; (it pays from its custodian account), split across every sub-account in the plan at the average price, fees included, once it is done and the custodian confirmed each payment. Each share&#39;s cash moves between the entity&#39;s own custodian accounts; its units move only after that settles. Every sub-account must be one you may trade, and its share must fit its limits.
*VaultMarketsApi* | [**createVaultMarketBlockAllocate**](docs/Api/VaultMarketsApi.md#createvaultmarketblockallocate) | **POST** /v1/vault-markets/blocks/{orderId}/allocate | Allocate a done block now (the keeper does it too). Returns &#x60;{ outcome, block }&#x60;: allocated, waiting (a payment or transfer is not settled yet), nothing_filled or none.
*VaultMarketsApi* | [**createVaultMarketBullionFamilyPeg**](docs/Api/VaultMarketsApi.md#createvaultmarketbullionfamilypeg) | **POST** /v1/vault-markets/bullion/family-pegs | Set a family-wide spot-pegged quote: one \&quot;any 1 oz gold coin\&quot; quote resting on each product book of a bullion family at the chosen condition (DS, VNDS or Used). When any leg fills it comes off the others and goes back on only for what is left; two fills at once are settled one at a time against what is left. A bid pays from your custodian account. Replaces your live family quote on the same family, condition and side. ID required.
*VaultMarketsApi* | [**createVaultMarketBullionPeg**](docs/Api/VaultMarketsApi.md#createvaultmarketbullionpeg) | **POST** /v1/vault-markets/bullion/pegs | Set a spot-pegged maker quote on a bullion book key: \&quot;spot plus or minus N cents\&quot; or \&quot;plus or minus N basis points\&quot;, with an optional floor and cap. It rests as a pro limit order re-priced every spot tick and is pulled while spot is stale. Replaces your live quote on the same key and side. ID required.
*VaultMarketsApi* | [**createVaultMarketCollectionWorthWatch**](docs/Api/VaultMarketsApi.md#createvaultmarketcollectionworthwatch) | **POST** /v1/vault-markets/collection-worth/watch | Watch every collection item that sits on a vault book key (up to the watchlist cap). Returns &#x60;{ watched, skipped }&#x60;.
*VaultMarketsApi* | [**createVaultMarketCreatorAttribution**](docs/Api/VaultMarketsApi.md#createvaultmarketcreatorattribution) | **POST** /v1/vault-markets/creators/attribution | Use a creator code: the creator earns a capped share of the fee Crossly keeps on your Vault Markets trades for a limited window (paid by Crossly, never by you). Only for people new to Vault Markets, once, and never your own code.
*VaultMarketsApi* | [**createVaultMarketCreatorCohostInviteRespond**](docs/Api/VaultMarketsApi.md#createvaultmarketcreatorcohostinviterespond) | **POST** /v1/vault-markets/creators/cohost-invites/{id}/respond | For creators: accept or decline an invite to co-host a Market Open launch show (&#x60;accept&#x60; true or false). Accepting needs your vault room verified and adds you to the show as a co-host; your room and the Commons then say you co-host it, with the creator-programme disclosure when it applies.
*VaultMarketsApi* | [**createVaultMarketCreditRepay**](docs/Api/VaultMarketsApi.md#createvaultmarketcreditrepay) | **POST** /v1/vault-markets/credit/{id}/repay | Repay from your custodian account, interest first. Omit &#x60;amountCents&#x60; to repay everything; pass &#x60;requestId&#x60; to make a retry safe. Repaid in full, the items are free.
*VaultMarketsApi* | [**createVaultMarketDcmLink**](docs/Api/VaultMarketsApi.md#createvaultmarketdcmlink) | **POST** /v1/vault-markets/dcm/link | Link a partner exchange account to your account (or to a firm sub-account you manage, &#x60;subaccountId&#x60;) so Crossly can show its positions: &#x60;accountRef&#x60; (the account id there) and &#x60;code&#x60; (the one-time link code it gave you). The partner must confirm the code; the code is never stored. Read-only: Crossly never trades on it.
*VaultMarketsApi* | [**createVaultMarketDcmUnlink**](docs/Api/VaultMarketsApi.md#createvaultmarketdcmunlink) | **POST** /v1/vault-markets/dcm/unlink | Unlink the partner exchange account from your account (or the firm sub-account &#x60;subaccountId&#x60;): Crossly stops reading it and its hedges leave portfolio margin.
*VaultMarketsApi* | [**createVaultMarketDealerApply**](docs/Api/VaultMarketsApi.md#createvaultmarketdealerapply) | **POST** /v1/vault-markets/dealer/apply | Apply to be a dealer (ID check first). Ops review; approved dealers get raised limits and their bids show as dealer bids.
*VaultMarketsApi* | [**createVaultMarketDealerBid**](docs/Api/VaultMarketsApi.md#createvaultmarketdealerbid) | **POST** /v1/vault-markets/dealer/bids | Place a standing dealer bid: a resting GTC/GTD limit buy, flagged as a dealer bid. Approved dealers only.
*VaultMarketsApi* | [**createVaultMarketDealerPool**](docs/Api/VaultMarketsApi.md#createvaultmarketdealerpool) | **POST** /v1/vault-markets/dealer/pools | Open a curve pool on a key (approved dealers, ID checked): linear (delta in cents) or exponential (delta in bps), spot, fee, levels per side, units it may sell, and a buy budget from your custodian account. Its ladder goes up at once.
*VaultMarketsApi* | [**createVaultMarketDealerPoolClose**](docs/Api/VaultMarketsApi.md#createvaultmarketdealerpoolclose) | **POST** /v1/vault-markets/dealer/pools/{id}/close | Close a curve pool: its legs come off the book; what filled stays filled.
*VaultMarketsApi* | [**createVaultMarketDealerPoolPreview**](docs/Api/VaultMarketsApi.md#createvaultmarketdealerpoolpreview) | **POST** /v1/vault-markets/dealer/pools/preview | The bids and asks a set of curve settings would show, and why each side stops where it does. Places nothing.
*VaultMarketsApi* | [**createVaultMarketDeposit**](docs/Api/VaultMarketsApi.md#createvaultmarketdeposit) | **POST** /v1/vault-markets/deposits | Open a ship-in deposit for an ungraded catalogue item (&#x60;skuId&#x60;, &#x60;variantId&#x60;, &#x60;condition&#x60; DS / VNDS / Used). It is inbound until the vault receives and checks it, then stored in your name. Returns &#x60;{ vaultItem: { id, status } }&#x60;.
*VaultMarketsApi* | [**createVaultMarketDonation**](docs/Api/VaultMarketsApi.md#createvaultmarketdonation) | **POST** /v1/vault-markets/donations | Give a unit to Crossly Cares (once the charity can receive; otherwise its gate message). Returns &#x60;{ id, markCents }&#x60;.
*VaultMarketsApi* | [**createVaultMarketEntity**](docs/Api/VaultMarketsApi.md#createvaultmarketentity) | **POST** /v1/vault-markets/entities | Open an entity account: you become its admin and the custodian partner starts KYB (its own flow; Crossly keeps only its reference). Needs a verified ID and the custodian (503 names what is missing).
*VaultMarketsApi* | [**createVaultMarketEntityEcp**](docs/Api/VaultMarketsApi.md#createvaultmarketentityecp) | **POST** /v1/vault-markets/entities/{id}/ecp | Admin: record the entity&#39;s attestation that it is an eligible contract participant. Raising its caps is still an ops decision.
*VaultMarketsApi* | [**createVaultMarketEntityHalt**](docs/Api/VaultMarketsApi.md#createvaultmarketentityhalt) | **POST** /v1/vault-markets/entities/{id}/halts | Admin or risk: the firm kill switch. Halts the entity (no &#x60;subaccountId&#x60;) or one sub-account: open orders on it are cancelled and no new ones are placed until cleared.
*VaultMarketsApi* | [**createVaultMarketEntityHaltClear**](docs/Api/VaultMarketsApi.md#createvaultmarketentityhaltclear) | **POST** /v1/vault-markets/entities/{id}/halts/{haltId}/clear | Admin or risk: lift a firm halt.
*VaultMarketsApi* | [**createVaultMarketEntityInvitation**](docs/Api/VaultMarketsApi.md#createvaultmarketentityinvitation) | **POST** /v1/vault-markets/entities/{id}/invitation | Accept or decline an invitation (&#x60;accept&#x60;). Trading, admin and risk roles need a verified ID to accept.
*VaultMarketsApi* | [**createVaultMarketEntityKyb**](docs/Api/VaultMarketsApi.md#createvaultmarketentitykyb) | **POST** /v1/vault-markets/entities/{id}/kyb | Refresh the entity&#39;s KYB status from the custodian (and its onboarding link while KYB is open).
*VaultMarketsApi* | [**createVaultMarketEntityMember**](docs/Api/VaultMarketsApi.md#createvaultmarketentitymember) | **POST** /v1/vault-markets/entities/{id}/members | Admin: invite a Crossly user by email as admin, trader, risk, ops or viewer (a viewer can never place an order), with optional limits and sub-accounts.
*VaultMarketsApi* | [**createVaultMarketEntitySubaccount**](docs/Api/VaultMarketsApi.md#createvaultmarketentitysubaccount) | **POST** /v1/vault-markets/entities/{id}/subaccounts | Admin: open a sub-account once the custodian approved the entity; its limits are held to the entity&#39;s caps.
*VaultMarketsApi* | [**createVaultMarketEntitySubaccountClose**](docs/Api/VaultMarketsApi.md#createvaultmarketentitysubaccountclose) | **POST** /v1/vault-markets/entities/{id}/subaccounts/{subId}/close | Admin: close a sub-account that holds nothing and has no open orders.
*VaultMarketsApi* | [**createVaultMarketFollowCopyWatchAlertRead**](docs/Api/VaultMarketsApi.md#createvaultmarketfollowcopywatchalertread) | **POST** /v1/vault-markets/follows/copy-watch/alerts/read | Mark every copy-watch alert read. Returns &#x60;{ marked }&#x60;.
*VaultMarketsApi* | [**createVaultMarketGift**](docs/Api/VaultMarketsApi.md#createvaultmarketgift) | **POST** /v1/vault-markets/gifts | Give a unit in your vault to another Crossly user (by @username or email). It stays on its shelf; they have 7 days to accept. ID needed above $1,000 at the mark. Returns &#x60;{ id, expiresAt }&#x60;.
*VaultMarketsApi* | [**createVaultMarketGiftAccept**](docs/Api/VaultMarketsApi.md#createvaultmarketgiftaccept) | **POST** /v1/vault-markets/gifts/{id}/accept | Accept a gift: the unit becomes yours in place. Returns &#x60;{ status }&#x60;.
*VaultMarketsApi* | [**createVaultMarketGiftCancel**](docs/Api/VaultMarketsApi.md#createvaultmarketgiftcancel) | **POST** /v1/vault-markets/gifts/{id}/cancel | Cancel a gift you sent before it is accepted. Returns &#x60;{ status }&#x60;.
*VaultMarketsApi* | [**createVaultMarketGiftDecline**](docs/Api/VaultMarketsApi.md#createvaultmarketgiftdecline) | **POST** /v1/vault-markets/gifts/{id}/decline | Decline a gift: the unit stays with the giver. Returns &#x60;{ status }&#x60;.
*VaultMarketsApi* | [**createVaultMarketGradeToVault**](docs/Api/VaultMarketsApi.md#createvaultmarketgradetovault) | **POST** /v1/vault-markets/grade-to-vault | Start Grade to Vault on one item (&#x60;source&#x60; inventory or vault_unit). With &#x60;runId&#x60; the grading slot is booked at once (free; your saved card is charged only if the run locks). Nothing is listed until you confirm a price after the grade.
*VaultMarketsApi* | [**createVaultMarketGradeToVaultBook**](docs/Api/VaultMarketsApi.md#createvaultmarketgradetovaultbook) | **POST** /v1/vault-markets/grade-to-vault/{id}/book | Book (or re-book) the grading slot of a flow still at \&quot;picked\&quot;. Answers 503 naming GRADING_HUB_ADDRESS when runs are not open.
*VaultMarketsApi* | [**createVaultMarketGradeToVaultCancel**](docs/Api/VaultMarketsApi.md#createvaultmarketgradetovaultcancel) | **POST** /v1/vault-markets/grade-to-vault/{id}/cancel | Stop the flow before the card goes to the grader (still picked, or its slot only reserved: nothing was charged).
*VaultMarketsApi* | [**createVaultMarketGradeToVaultKeep**](docs/Api/VaultMarketsApi.md#createvaultmarketgradetovaultkeep) | **POST** /v1/vault-markets/grade-to-vault/{id}/keep | Keep the graded unit in your vault without listing it. The flow ends; list it any time from the vault.
*VaultMarketsApi* | [**createVaultMarketGradeToVaultList**](docs/Api/VaultMarketsApi.md#createvaultmarketgradetovaultlist) | **POST** /v1/vault-markets/grade-to-vault/{id}/list | Confirm the price for the grade the unit came back with (&#x60;confirm: true&#x60;, &#x60;gradeKey&#x60; must match the unit). Pre-trade risk, the price band and the ID line apply, then one shelf ask is placed on the Crossly order book.
*VaultMarketsApi* | [**createVaultMarketGradeToVaultShipped**](docs/Api/VaultMarketsApi.md#createvaultmarketgradetovaultshipped) | **POST** /v1/vault-markets/grade-to-vault/{id}/shipped | You mailed the card to the grading hub (an inventory card, once its run locked).
*VaultMarketsApi* | [**createVaultMarketGrading**](docs/Api/VaultMarketsApi.md#createvaultmarketgrading) | **POST** /v1/vault-markets/grading | Send a raw vault unit on the grading hub&#39;s shelf to a Grading Run (&#x60;runId&#x60;). It is held until it comes back, graded, to the same vault item. The slot is free; your saved card is charged only if the run locks.
*VaultMarketsApi* | [**createVaultMarketGradingPull**](docs/Api/VaultMarketsApi.md#createvaultmarketgradingpull) | **POST** /v1/vault-markets/grading/{submissionId}/pull | Pull a vault unit out of its run before the run locks (nothing was charged). It goes back on the shelf.
*VaultMarketsApi* | [**createVaultMarketHallLoan**](docs/Api/VaultMarketsApi.md#createvaultmarkethallloan) | **POST** /v1/vault-markets/hall/loans | Lend a unit in your Crossly vault to the Hall of Grails: { vaultItemId, credit: &#39;name&#39; | &#39;anonymous&#39; }. A standing loan of display rights only: the unit goes on a plinth, under a plate naming you (or \&quot;a collector\&quot;), in every weekly exhibition whose category it fits. It never moves and stays yours to list, sell or withdraw. Earns reputation per exhibition shown; no cash. Resumes a loan you opted out of while it still shows.
*VaultMarketsApi* | [**createVaultMarketHallLoanCredit**](docs/Api/VaultMarketsApi.md#createvaultmarkethallloancredit) | **POST** /v1/vault-markets/hall/loans/{id}/credit | Change how the plate on a lent unit&#39;s plinth names you, from now: { credit: &#39;name&#39; } (your display name) or { credit: &#39;anonymous&#39; } (\&quot;a collector\&quot;).
*VaultMarketsApi* | [**createVaultMarketHallLoanOptOut**](docs/Api/VaultMarketsApi.md#createvaultmarkethallloanoptout) | **POST** /v1/vault-markets/hall/loans/{id}/opt-out | Opt a Hall of Grails loan out, at any time. A unit on a plinth this week finishes this exhibition (status ending, showingUntil); otherwise the loan ends now (status ended).
*VaultMarketsApi* | [**createVaultMarketIdentityStart**](docs/Api/VaultMarketsApi.md#createvaultmarketidentitystart) | **POST** /v1/vault-markets/identity/start | Start (or resume) the one-time ID check the money features and larger orders need. Returns &#x60;{ url }&#x60; to open, or &#x60;{ alreadyVerified: true }&#x60;.
*VaultMarketsApi* | [**createVaultMarketIndex**](docs/Api/VaultMarketsApi.md#createvaultmarketindex) | **POST** /v1/vault-markets/indexes | Make an index of your own: 1 to 50 book keys, weighted by mark or equally. Up to 10 per account.
*VaultMarketsApi* | [**createVaultMarketIndexBuy**](docs/Api/VaultMarketsApi.md#createvaultmarketindexbuy) | **POST** /v1/vault-markets/indexes/{slug}/buy | Buy the basket: one limit buy per key in the index for 1-5 whole units each, at most &#x60;maxBpsOverMark&#x60; over each key&#39;s mark, IOC or GTC. Every unit is a real item that lands in your vault. Idempotent on &#x60;clientBasketId&#x60;; returns a result per key.
*VaultMarketsApi* | [**createVaultMarketIndexComplaint**](docs/Api/VaultMarketsApi.md#createvaultmarketindexcomplaint) | **POST** /v1/vault-markets/index-complaints | File a complaint about an index or the method (&#x60;slug&#x60; optional). Every complaint is answered. Returns &#x60;{ id, status, createdAt }&#x60;.
*VaultMarketsApi* | [**createVaultMarketIndexConsultationComment**](docs/Api/VaultMarketsApi.md#createvaultmarketindexconsultationcomment) | **POST** /v1/vault-markets/index-consultations/{id}/comments | Comment on an open consultation (5 to 5,000 characters; up to 5 per person). Comments are published without your name. Returns &#x60;{ ok }&#x60;.
*VaultMarketsApi* | [**createVaultMarketInstantExit**](docs/Api/VaultMarketsApi.md#createvaultmarketinstantexit) | **POST** /v1/vault-markets/instant-exit | Sell a unit now at the quoted price: a sell IOC at &#x60;priceCents&#x60; through the pro engine. Refused, with the new quote, if the best bid dropped below it. Crossly never buys or funds it.
*VaultMarketsApi* | [**createVaultMarketJoint**](docs/Api/VaultMarketsApi.md#createvaultmarketjoint) | **POST** /v1/vault-markets/joint | Open a joint vault (ID first): you hold full rights and accept the current joint terms. &#x60;invite&#x60; sends invitations (@username or email, each with view, trade or full rights). Returns &#x60;{ id, status, invited }&#x60;.
*VaultMarketsApi* | [**createVaultMarketJointClose**](docs/Api/VaultMarketsApi.md#createvaultmarketjointclose) | **POST** /v1/vault-markets/joint/{id}/close | Close the joint vault (full rights): open joint orders are cancelled and every unit goes back to its owner. Returns &#x60;{ status, unitsReturned }&#x60;.
*VaultMarketsApi* | [**createVaultMarketJointInvite**](docs/Api/VaultMarketsApi.md#createvaultmarketjointinvite) | **POST** /v1/vault-markets/joint/{id}/invite | Invite a Crossly user (full rights only). They have 14 days and show ID to join. Returns &#x60;{ userId, rights, expiresAt }&#x60;.
*VaultMarketsApi* | [**createVaultMarketJointMemberRemove**](docs/Api/VaultMarketsApi.md#createvaultmarketjointmemberremove) | **POST** /v1/vault-markets/joint/{id}/members/{userId}/remove | Remove a member (full rights), or leave when userId is you. Their units go back to their own account and their joint orders are cancelled. Returns &#x60;{ userId, status, unitsReturned, jointStatus }&#x60;.
*VaultMarketsApi* | [**createVaultMarketJointMemberRight**](docs/Api/VaultMarketsApi.md#createvaultmarketjointmemberright) | **POST** /v1/vault-markets/joint/{id}/members/{userId}/rights | Set a member rights to view, trade or full (full rights only; the vault always keeps a full member). Returns &#x60;{ userId, rights }&#x60;.
*VaultMarketsApi* | [**createVaultMarketJointRespond**](docs/Api/VaultMarketsApi.md#createvaultmarketjointrespond) | **POST** /v1/vault-markets/joint/{id}/respond | Accept (ID first; accepts the current joint terms) or decline an invitation. Returns &#x60;{ status }&#x60;.
*VaultMarketsApi* | [**createVaultMarketJointTerm**](docs/Api/VaultMarketsApi.md#createvaultmarketjointterm) | **POST** /v1/vault-markets/joint/{id}/terms | Accept the current joint terms (needed to trade after the terms version changes). Returns &#x60;{ termsVersion }&#x60;.
*VaultMarketsApi* | [**createVaultMarketJointTrade**](docs/Api/VaultMarketsApi.md#createvaultmarketjointtrade) | **POST** /v1/vault-markets/joint/{id}/trades | Place a limit order for the joint vault (trade or full rights, ID shown). A buy (bookKey) is placed on you, paid from your own Vault Markets account, and what it buys is booked to the joint vault. A sell (vaultItemId of a unit in it) is placed on the unit owner of record, who gets the proceeds; pre-trade checks run against you too. Returns &#x60;{ tradeId, side, bookKey, ownerUserId, order }&#x60;.
*VaultMarketsApi* | [**createVaultMarketJointTradeCancel**](docs/Api/VaultMarketsApi.md#createvaultmarketjointtradecancel) | **POST** /v1/vault-markets/joint/{id}/trades/{tradeId}/cancel | Cancel a working joint order (trade or full rights); what filled stays filled. Returns &#x60;{ tradeId, order }&#x60;.
*VaultMarketsApi* | [**createVaultMarketJointUnit**](docs/Api/VaultMarketsApi.md#createvaultmarketjointunit) | **POST** /v1/vault-markets/joint/{id}/units | Put units you own into the joint vault (each stored and free). They keep you as owner of record and stay on the shelf. Returns &#x60;{ added, vaultItemIds }&#x60;.
*VaultMarketsApi* | [**createVaultMarketJointUnitRemove**](docs/Api/VaultMarketsApi.md#createvaultmarketjointunitremove) | **POST** /v1/vault-markets/joint/{id}/units/remove | Take units out of the joint vault, back to their owner own account (yours at any rights; anyone else with full rights). Returns &#x60;{ removed, vaultItemIds }&#x60;.
*VaultMarketsApi* | [**createVaultMarketLargeTraderReportFile**](docs/Api/VaultMarketsApi.md#createvaultmarketlargetraderreportfile) | **POST** /v1/vault-markets/large-trader-reports/{id}/file | File (or amend, or refile) a large-trader report: why you hold it (purpose), who you act for, other accounts you control, whether you plan to add, and a statement of 20+ characters. Returns the report.
*VaultMarketsApi* | [**createVaultMarketLearnQuiz**](docs/Api/VaultMarketsApi.md#createvaultmarketlearnquiz) | **POST** /v1/vault-markets/learn/{concept}/quiz | Answer a concept&#39;s quiz (&#x60;answers&#x60;: the chosen choice index per question). Graded on the server; 5 tries an hour.
*VaultMarketsApi* | [**createVaultMarketLiveStreamFeaturedLot**](docs/Api/VaultMarketsApi.md#createvaultmarketlivestreamfeaturedlot) | **POST** /v1/vault-markets/live-streams/{id}/featured-lot | Feature an open lot on your live show (or &#x60;lotId: null&#x60; to take it off). Viewers hear LIVE_PIN_CHANGED. Returns &#x60;{ ok }&#x60;.
*VaultMarketsApi* | [**createVaultMarketLoan**](docs/Api/VaultMarketsApi.md#createvaultmarketloan) | **POST** /v1/vault-markets/loans | Borrow against stored vault units: they are pledged (no listing, lending or withdrawal) and the market pool lends &#x60;amountCents&#x60; into your custodian account. Needs a verified ID.
*VaultMarketsApi* | [**createVaultMarketLoanRecall**](docs/Api/VaultMarketsApi.md#createvaultmarketloanrecall) | **POST** /v1/vault-markets/loans/{id}/recall | Recall a lent unit: the short has 3 days to return one. Returns &#x60;{ recallDueAt }&#x60;.
*VaultMarketsApi* | [**createVaultMarketLoanUnit**](docs/Api/VaultMarketsApi.md#createvaultmarketloanunit) | **POST** /v1/vault-markets/loans/{id}/units | Pledge more stored units to a loan (answers a loan call, or makes room).
*VaultMarketsApi* | [**createVaultMarketLoanUnitRelease**](docs/Api/VaultMarketsApi.md#createvaultmarketloanunitrelease) | **POST** /v1/vault-markets/loans/{id}/units/{vaultItemId}/release | Free one pledged unit, if what is owed still fits inside the other units&#39; limit.
*VaultMarketsApi* | [**createVaultMarketLoanUnitSell**](docs/Api/VaultMarketsApi.md#createvaultmarketloanunitsell) | **POST** /v1/vault-markets/loans/{id}/units/{vaultItemId}/sell | Sell a pledged unit to repay its loan: it is listed at &#x60;priceCents&#x60; (at least the sale floor) and stays pledged until it sells; the proceeds repay the loan first and the rest is yours. Calling it again re-prices it.
*VaultMarketsApi* | [**createVaultMarketLocate**](docs/Api/VaultMarketsApi.md#createvaultmarketlocate) | **POST** /v1/vault-markets/locates | Hold up to &#x60;qty&#x60; lendable units of &#x60;bookKey&#x60; for 15 minutes so a short can open against them (&#x60;termDays&#x60; 30/90 for a term loan). Needs lending (VAULT_LENDING_TERMS_VERSION) and the ID check. Returns the locate with how many units it holds.
*VaultMarketsApi* | [**createVaultMarketLong**](docs/Api/VaultMarketsApi.md#createvaultmarketlong) | **POST** /v1/vault-markets/longs | Buy &#x60;units&#x60; units (default 1; at most 25/10/3/1 by liquidity tier A/B/C/D) into your vault with leverage (up to 2x) from the market staking pool, paying up to &#x60;maxCents&#x60; each. A partial fill opens with the units bought and the rest is cancelled. Returns &#x60;{ positionId, matched, units }&#x60;.
*VaultMarketsApi* | [**createVaultMarketMidpoint**](docs/Api/VaultMarketsApi.md#createvaultmarketmidpoint) | **POST** /v1/vault-markets/midpoint | A hidden block order that trades only at the firm-book midpoint, with another midpoint order of at least your minimum size.
*VaultMarketsApi* | [**createVaultMarketMidpointCancel**](docs/Api/VaultMarketsApi.md#createvaultmarketmidpointcancel) | **POST** /v1/vault-markets/midpoint/{id}/cancel | Cancel a midpoint order.
*VaultMarketsApi* | [**createVaultMarketMmDmm**](docs/Api/VaultMarketsApi.md#createvaultmarketmmdmm) | **POST** /v1/vault-markets/mm/dmm | Apply to be the designated market maker on a tier B or C key. Ops approves; one per key.
*VaultMarketsApi* | [**createVaultMarketMmLeave**](docs/Api/VaultMarketsApi.md#createvaultmarketmmleave) | **POST** /v1/vault-markets/mm/{id}/leave | Leave a market-maker programme.
*VaultMarketsApi* | [**createVaultMarketMmLp**](docs/Api/VaultMarketsApi.md#createvaultmarketmmlp) | **POST** /v1/vault-markets/mm/lp | Join a key as a Registered Liquidity Provider (ID needed). Meeting coverage earns the LP rates.
*VaultMarketsApi* | [**createVaultMarketMmMassCancel**](docs/Api/VaultMarketsApi.md#createvaultmarketmmmasscancel) | **POST** /v1/vault-markets/mm/mass-cancel | Cancel every open order (one key, or only quotes) and every resting leg in one statement: nothing fills between the first cancel and the last.
*VaultMarketsApi* | [**createVaultMarketMmMmpReset**](docs/Api/VaultMarketsApi.md#createvaultmarketmmmmpreset) | **POST** /v1/vault-markets/mm/mmp/reset | End a market-maker protection freeze early.
*VaultMarketsApi* | [**createVaultMarketOpeningWaitlist**](docs/Api/VaultMarketsApi.md#createvaultmarketopeningwaitlist) | **POST** /v1/vault-markets/opening/{slug}/waitlist | Join a key&#39;s waitlist, optionally with a friend&#39;s invite code (&#x60;ref&#x60;). Inviting moves you up the queue; nobody is paid. Returns your place and your own code.
*VaultMarketsApi* | [**createVaultMarketP2pLoanCall**](docs/Api/VaultMarketsApi.md#createvaultmarketp2ploancall) | **POST** /v1/vault-markets/p2p/loans/{id}/call | Lender: call the loan (once it is a day old). A refinancing auction runs for about 30 hours, the rate a new lender gets climbing to the ceiling; repaid or refinanced, you are paid in full; neither by the end, the unit moves to your vault.
*VaultMarketsApi* | [**createVaultMarketP2pLoanCancelCall**](docs/Api/VaultMarketsApi.md#createvaultmarketp2ploancancelcall) | **POST** /v1/vault-markets/p2p/loans/{id}/cancel-call | Lender: take back your call before any other lender has taken the loan over. The refinancing auction stops and the loan carries on as before on its terms.
*VaultMarketsApi* | [**createVaultMarketP2pLoanRefiAuction**](docs/Api/VaultMarketsApi.md#createvaultmarketp2ploanrefiauction) | **POST** /v1/vault-markets/p2p/loans/{id}/refi-auction | Borrower: look for a cheaper lender. A refinancing auction runs for &#x60;hours&#x60; (1-72, default 24); the rate a new lender gets climbs from &#x60;startAprBps&#x60; (default half the loan rate) to just under the loan rate now. The first lender to take it pays your lender off and the loan carries on at that lower rate. Nobody by the end: nothing changes.
*VaultMarketsApi* | [**createVaultMarketP2pLoanRefiAuctionCancel**](docs/Api/VaultMarketsApi.md#createvaultmarketp2ploanrefiauctioncancel) | **POST** /v1/vault-markets/p2p/loans/{id}/refi-auction/cancel | Borrower: stop looking for a cheaper lender before anyone has taken the loan over. The loan carries on unchanged.
*VaultMarketsApi* | [**createVaultMarketP2pLoanRefinance**](docs/Api/VaultMarketsApi.md#createvaultmarketp2ploanrefinance) | **POST** /v1/vault-markets/p2p/loans/{id}/refinance | Take over a loan in a refinancing auction (a lender call or a borrower search for a cheaper lender): you pay the old lender everything owed now (refused above &#x60;maxPayoffCents&#x60;), which becomes your loan to the same borrower at the auction rate now. Needs a verified ID, an active account and the current lending terms. Pass &#x60;requestId&#x60; to make a retry safe.
*VaultMarketsApi* | [**createVaultMarketP2pLoanRepay**](docs/Api/VaultMarketsApi.md#createvaultmarketp2ploanrepay) | **POST** /v1/vault-markets/p2p/loans/{id}/repay | Borrower: repay from your custodian account to the lender. Without &#x60;amountCents&#x60;, in full (principal plus interest to the second; the unit is free once the custodian has it). With &#x60;amountCents&#x60; below what is owed, a part payment: interest first, then principal, at least the interest owed now and at least $1; the loan stays open on the principal left. Pass &#x60;requestId&#x60; to make a retry safe.
*VaultMarketsApi* | [**createVaultMarketP2pOffer**](docs/Api/VaultMarketsApi.md#createvaultmarketp2poffer) | **POST** /v1/vault-markets/p2p/offers | Offer to lend: &#x60;principalCents&#x60; per loan at &#x60;aprBps&#x60; a year against an item (&#x60;bookKey&#x60;) or one unit (&#x60;vaultItemId&#x60;), for up to &#x60;maxLoans&#x60; loans, lasting &#x60;expiresInDays&#x60; (default 90). Nothing is held: the custodian pays from your own account when a borrower takes it. Needs a verified ID, an active account and the current lending terms.
*VaultMarketsApi* | [**createVaultMarketP2pOfferCancel**](docs/Api/VaultMarketsApi.md#createvaultmarketp2poffercancel) | **POST** /v1/vault-markets/p2p/offers/{id}/cancel | Withdraw one of your open offers. Loans already taken from it carry on.
*VaultMarketsApi* | [**createVaultMarketP2pOfferTake**](docs/Api/VaultMarketsApi.md#createvaultmarketp2poffertake) | **POST** /v1/vault-markets/p2p/offers/{id}/take | Borrow: take an offer against one of your stored vault units (&#x60;vaultItemId&#x60;). The unit is pledged (no listing, lending or withdrawal) and the principal is paid into your custodian account. Interest accrues by the second; repay any time. Pass &#x60;requestId&#x60; to make a retry safe.
*VaultMarketsApi* | [**createVaultMarketPaperMissionMarkCheck**](docs/Api/VaultMarketsApi.md#createvaultmarketpapermissionmarkcheck) | **POST** /v1/vault-markets/paper/missions/mark-check | Answer the \&quot;Read the mark\&quot; mission: the quality letter (A, B or C) you read on a market page, checked against the stored mark. One answer per market, 10 a day. Returns &#x60;{ bookKey, answer, correct, quality, mission, next }&#x60;.
*VaultMarketsApi* | [**createVaultMarketPaperOrder**](docs/Api/VaultMarketsApi.md#createvaultmarketpaperorder) | **POST** /v1/vault-markets/paper/orders | Place a paper order (play money only). It takes visible real liquidity now at book prices with the taker fee simulated; a GTC limit rests the rest with a queue-position estimate, filled later as the real tape reaches it. Sells only paper units you hold (no paper shorts). Never touches the real book. Returns &#x60;{ order, fills }&#x60;.
*VaultMarketsApi* | [**createVaultMarketPaperOrderCancel**](docs/Api/VaultMarketsApi.md#createvaultmarketpaperordercancel) | **POST** /v1/vault-markets/paper/orders/{id}/cancel | Cancel a working paper order: the play cash or paper units it held come back. Returns &#x60;{ order }&#x60;.
*VaultMarketsApi* | [**createVaultMarketPaperReset**](docs/Api/VaultMarketsApi.md#createvaultmarketpaperreset) | **POST** /v1/vault-markets/paper/reset | Reset your paper account to $10,000 of play money: working paper orders are cancelled, paper positions cleared, and your leaderboard week starts again. Once a day.
*VaultMarketsApi* | [**createVaultMarketPartnerApply**](docs/Api/VaultMarketsApi.md#createvaultmarketpartnerapply) | **POST** /v1/vault-markets/partners/apply | Apply as a Vault Drop-off Partner (a card shop that takes walk-ins for the vault). Needs the one-time ID check; ops approve.
*VaultMarketsApi* | [**createVaultMarketPartnerBatch**](docs/Api/VaultMarketsApi.md#createvaultmarketpartnerbatch) | **POST** /v1/vault-markets/partners/batches | An approved partner sends walk-ins in under its code: each item (catalogue variant, condition, grade, photos) becomes an inbound vault unit; the box gets one prepaid label. The partner earns a capped share of Crossly&#39;s fee on each unit&#39;s first sale.
*VaultMarketsApi* | [**createVaultMarketPoolStake**](docs/Api/VaultMarketsApi.md#createvaultmarketpoolstake) | **POST** /v1/vault-markets/pool/stakes | Stake CBX you hold at the custodian into the market pool (base units, as a string). Returns &#x60;{ stakeId, shares }&#x60;.
*VaultMarketsApi* | [**createVaultMarketPoolStakeUnstake**](docs/Api/VaultMarketsApi.md#createvaultmarketpoolstakeunstake) | **POST** /v1/vault-markets/pool/stakes/{id}/unstake | Unstake: paid out after the 7-day cooldown. Returns &#x60;{ cooldownUntil }&#x60;.
*VaultMarketsApi* | [**createVaultMarketPortfolioMarginEnroll**](docs/Api/VaultMarketsApi.md#createvaultmarketportfoliomarginenroll) | **POST** /v1/vault-markets/portfolio-margin/enroll | Admin: put a firm sub-account under portfolio margin. Needs VAULT_LEVERAGE_VENUE, your ID, an ECP-attested entity that passed KYB, and the minimum equity. Its positions are then margined on the whole account, recalculated every 5 minutes; calls and auctions are unchanged. Audited.
*VaultMarketsApi* | [**createVaultMarketPortfolioMarginLeave**](docs/Api/VaultMarketsApi.md#createvaultmarketportfoliomarginleave) | **POST** /v1/vault-markets/portfolio-margin/leave | Admin: take a firm sub-account off portfolio margin. Each position is then held to its own tier floors again and may be called at once. Audited.
*VaultMarketsApi* | [**createVaultMarketPortfolioMarginWhatIf**](docs/Api/VaultMarketsApi.md#createvaultmarketportfoliomarginwhatif) | **POST** /v1/vault-markets/portfolio-margin/what-if | The portfolio margin requirement of a firm sub-account before and after a trade (&#x60;bookKey&#x60;, &#x60;side&#x60; buy or sell, &#x60;units&#x60;), at the Crossly mark with fees left out. Changes nothing.
*VaultMarketsApi* | [**createVaultMarketPositionCancel**](docs/Api/VaultMarketsApi.md#createvaultmarketpositioncancel) | **POST** /v1/vault-markets/positions/{id}/cancel | Cancel the working order: an unfilled opening order cancels the position; an unfilled cover or close leaves it open. Returns &#x60;{ ok }&#x60;.
*VaultMarketsApi* | [**createVaultMarketPositionClose**](docs/Api/VaultMarketsApi.md#createvaultmarketpositionclose) | **POST** /v1/vault-markets/positions/{id}/close | Close a leveraged long: all its units, or &#x60;units&#x60; of them, each sold for at least &#x60;minCents&#x60;; each sale repays the pool first.
*VaultMarketsApi* | [**createVaultMarketPositionCollateral**](docs/Api/VaultMarketsApi.md#createvaultmarketpositioncollateral) | **POST** /v1/vault-markets/positions/{id}/collateral | Answer a margin call: a short posts more collateral (USD, or CBX at half value); a leveraged long pays down its pool loan. Returns the position.
*VaultMarketsApi* | [**createVaultMarketPositionCover**](docs/Api/VaultMarketsApi.md#createvaultmarketpositioncover) | **POST** /v1/vault-markets/positions/{id}/cover | Cover a short: all its units, or &#x60;units&#x60; of them, each buying any unit of the key into the vault for up to &#x60;maxCents&#x60;; each goes back to its lender.
*VaultMarketsApi* | [**createVaultMarketPriceWidget**](docs/Api/VaultMarketsApi.md#createvaultmarketpricewidget) | **POST** /v1/vault-markets/price-widgets | Make a price widget for one vault market (&#x60;kind&#x60; mark + &#x60;bookKey&#x60;) or one public index (&#x60;kind&#x60; index + &#x60;indexSlug&#x60;): range, layout (compact or chart), theme (auto, light, dark), optionally your own affiliate code for the link back and the sites allowed to show it (empty &#x3D; any). Returns the widget with its snippets.
*VaultMarketsApi* | [**createVaultMarketPriceWidgetPreview**](docs/Api/VaultMarketsApi.md#createvaultmarketpricewidgetpreview) | **POST** /v1/vault-markets/price-widgets/preview | What a widget would show before you save it: &#x60;view&#x60; (value, move, quality, n, as-of, link back) and &#x60;html&#x60;, the exact page the iframe serves. Nothing is stored.
*VaultMarketsApi* | [**createVaultMarketProBracket**](docs/Api/VaultMarketsApi.md#createvaultmarketprobracket) | **POST** /v1/vault-markets/pro/brackets | A buy order with a take-profit and/or stop-loss attached; the exits arm as an OCO pair for what the entry fills.
*VaultMarketsApi* | [**createVaultMarketProLinkCancel**](docs/Api/VaultMarketsApi.md#createvaultmarketprolinkcancel) | **POST** /v1/vault-markets/pro/links/{id}/cancel | Cancel a linked order: its open child orders come off; a bracket&#39;s entry stays.
*VaultMarketsApi* | [**createVaultMarketProOco**](docs/Api/VaultMarketsApi.md#createvaultmarketprooco) | **POST** /v1/vault-markets/pro/oco | Two orders on one key, one cancels the other: when one fills or its stop triggers, the other is cancelled (a partial fill shrinks it).
*VaultMarketsApi* | [**createVaultMarketProOrder**](docs/Api/VaultMarketsApi.md#createvaultmarketproorder) | **POST** /v1/vault-markets/pro/orders | Place an order on a vault book: limit, market (protected, IOC), stop or stop-limit; GTC, GTD, IOC or FOK; post-only; an iceberg &#x60;displayQuantity&#x60;; a TWAP or VWAP algo over a window. Idempotent on &#x60;clientOrderId&#x60;. &#x60;subaccountId&#x60; trades for a firm sub-account you may trade (your role, its KYB, its limits, no firm halt; buys pay from its custodian account and land in it).
*VaultMarketsApi* | [**createVaultMarketProOrderCancel**](docs/Api/VaultMarketsApi.md#createvaultmarketproordercancel) | **POST** /v1/vault-markets/pro/orders/{id}/cancel | Cancel an order; what filled stays filled.
*VaultMarketsApi* | [**createVaultMarketProOrderCancelAll**](docs/Api/VaultMarketsApi.md#createvaultmarketproordercancelall) | **POST** /v1/vault-markets/pro/orders/cancel-all | Cancel every open order, or every one on a book key. Returns &#x60;{ cancelled }&#x60;.
*VaultMarketsApi* | [**createVaultMarketProOrderReplace**](docs/Api/VaultMarketsApi.md#createvaultmarketproorderreplace) | **POST** /v1/vault-markets/pro/orders/{id}/replace | Amend an order&#39;s price, stop or quantity (cancel-replace: it re-queues at its new price).
*VaultMarketsApi* | [**createVaultMarketProQuote**](docs/Api/VaultMarketsApi.md#createvaultmarketproquote) | **POST** /v1/vault-markets/pro/quotes | Market makers: set a two-sided post-only quote on a book key (replaces the last). With cancel-on-disconnect (default) heartbeat every 30 s or it is pulled.
*VaultMarketsApi* | [**createVaultMarketProQuoteHeartbeat**](docs/Api/VaultMarketsApi.md#createvaultmarketproquoteheartbeat) | **POST** /v1/vault-markets/pro/quotes/heartbeat | Keep your quotes alive (cancel-on-disconnect). Returns &#x60;{ quotes, at }&#x60;.
*VaultMarketsApi* | [**createVaultMarketProTrailingStop**](docs/Api/VaultMarketsApi.md#createvaultmarketprotrailingstop) | **POST** /v1/vault-markets/pro/trailing-stops | A trailing stop: its stop follows the best price since it was placed, &#x60;trailBps&#x60; or &#x60;trailCents&#x60; behind (under the high for a sell, over the low for a buy).
*VaultMarketsApi* | [**createVaultMarketProfileFollow**](docs/Api/VaultMarketsApi.md#createvaultmarketprofilefollow) | **POST** /v1/vault-markets/profiles/{handle}/follow | Follow someone with a public vault: their new vault buys appear in your feed. No copy trading.
*VaultMarketsApi* | [**createVaultMarketRecurring**](docs/Api/VaultMarketsApi.md#createvaultmarketrecurring) | **POST** /v1/vault-markets/recurring | Start a recurring buy: one whole unit of a key every week, two weeks or month, at no more than &#x60;maxPriceCents&#x60; and/or the mark plus &#x60;capBpsOverMark&#x60;; card (with an optional backup) or custodian; optional auto-lend.
*VaultMarketsApi* | [**createVaultMarketRfq**](docs/Api/VaultMarketsApi.md#createvaultmarketrfq) | **POST** /v1/vault-markets/rfq | Ask for a quote on a block: dealers, the key&#39;s DMM and LPs, and holders are told, anonymously. Answers are firm for 60 s. Your limit is never shown.
*VaultMarketsApi* | [**createVaultMarketRfqAccept**](docs/Api/VaultMarketsApi.md#createvaultmarketrfqaccept) | **POST** /v1/vault-markets/rfq/{id}/accept | Take one answer: it fills as a block through the normal fill path (fees by role, self-trade prevention, halts, LULD).
*VaultMarketsApi* | [**createVaultMarketRfqCancel**](docs/Api/VaultMarketsApi.md#createvaultmarketrfqcancel) | **POST** /v1/vault-markets/rfq/{id}/cancel | Cancel your open quote request.
*VaultMarketsApi* | [**createVaultMarketRfqRespond**](docs/Api/VaultMarketsApi.md#createvaultmarketrfqrespond) | **POST** /v1/vault-markets/rfq/{id}/respond | Answer a quote request for the full quantity with a firm price, good for 60 s. Selling needs the units free in your vault; buying pays from your Vault Markets custodian account.
*VaultMarketsApi* | [**createVaultMarketRfqResponseWithdraw**](docs/Api/VaultMarketsApi.md#createvaultmarketrfqresponsewithdraw) | **POST** /v1/vault-markets/rfq/responses/{id}/withdraw | Withdraw your live answer to a quote request.
*VaultMarketsApi* | [**createVaultMarketSetGoal**](docs/Api/VaultMarketsApi.md#createvaultmarketsetgoal) | **POST** /v1/vault-markets/set-goals | Start a goal on a catalogue set (category, brandSlug, modelSlug from the set search), optionally with a target: one condition, and any grade, ungraded, or one exact grade. One live goal per set.
*VaultMarketsApi* | [**createVaultMarketSetGoalBasket**](docs/Api/VaultMarketsApi.md#createvaultmarketsetgoalbasket) | **POST** /v1/vault-markets/set-goals/{id}/basket | Place the \&quot;complete my set\&quot; basket bid: one GTC limit buy per missing piece, under a hard budget, paid by one of your saved cards or your custodian account. Every leg passes pre-trade risk and the ID line like any order. Idempotent on clientBasketId. One working basket per goal; its legs are cancelled once the set is complete.
*VaultMarketsApi* | [**createVaultMarketSetGoalBasketCancel**](docs/Api/VaultMarketsApi.md#createvaultmarketsetgoalbasketcancel) | **POST** /v1/vault-markets/set-goals/{id}/basket/cancel | Cancel the goal working basket bid: every working leg comes off the book; what already filled stays in your vault.
*VaultMarketsApi* | [**createVaultMarketShareCard**](docs/Api/VaultMarketsApi.md#createvaultmarketsharecard) | **POST** /v1/vault-markets/share-cards | Make a verified share card of a position, a vault unit, a public index or your portfolio (&#x60;kind&#x60;, &#x60;refId&#x60;). The % on it is the price move since your real fill; amounts stay hidden unless &#x60;showAmounts&#x60;.
*VaultMarketsApi* | [**createVaultMarketShort**](docs/Api/VaultMarketsApi.md#createvaultmarketshort) | **POST** /v1/vault-markets/shorts | Short a book key: borrow &#x60;units&#x60; lent units (default 1; at most 25/10/3/1 by liquidity tier A/B/C/D) and sell each at &#x60;limitCents&#x60; or better, posting collateral for all of them (50% of the mark each; CBX counts at half, up to 30%). All units are borrowed or none unless &#x60;allowPartial&#x60;. A partial sale opens with the units sold. Returns &#x60;{ positionId, matched, units }&#x60;.
*VaultMarketsApi* | [**createVaultMarketSupplyBatchLabel**](docs/Api/VaultMarketsApi.md#createvaultmarketsupplybatchlabel) | **POST** /v1/vault-markets/supply/batches/{id}/label | Buy a box&#39;s prepaid label again after it failed (for example once a ship-from address is saved). A box that has a label keeps it.
*VaultMarketsApi* | [**createVaultMarketSupplyInvite**](docs/Api/VaultMarketsApi.md#createvaultmarketsupplyinvite) | **POST** /v1/vault-markets/supply/invites/{id} | Accept or decline a Market Open invite (&#x60;accept&#x60;).
*VaultMarketsApi* | [**createVaultMarketSupplySend**](docs/Api/VaultMarketsApi.md#createvaultmarketsupplysend) | **POST** /v1/vault-markets/supply/send | Send inventory items matched to a catalogue variant to the vault as one box: each becomes an inbound vault unit, and the box gets one prepaid inbound label (a PDF to print). Optional: auto-list each unit in the vault book at a share of the mark once stored, and lend when idle. Items that cannot go say why. Crosslisted listings stay live.
*VaultMarketsApi* | [**createVaultMarketTerm**](docs/Api/VaultMarketsApi.md#createvaultmarketterm) | **POST** /v1/vault-markets/terms | Accept the current lending terms (needed to lend or short). Returns &#x60;{ termsVersion }&#x60;.
*VaultMarketsApi* | [**createVaultMarketTodClaimObject**](docs/Api/VaultMarketsApi.md#createvaultmarkettodclaimobject) | **POST** /v1/vault-markets/tod/claims/{id}/object | Stop a transfer-on-death claim made on your own account. Returns &#x60;{ id, status, estateUnlocked }&#x60;.
*VaultMarketsApi* | [**createVaultMarketTodMyClaim**](docs/Api/VaultMarketsApi.md#createvaultmarkettodmyclaim) | **POST** /v1/vault-markets/tod/my-claims | Start a claim as a named beneficiary (ID first), naming the account holder by @username or email. It stays a draft until you add documents and submit. Returns &#x60;{ id, status, existing }&#x60;.
*VaultMarketsApi* | [**createVaultMarketTodMyClaimDocument**](docs/Api/VaultMarketsApi.md#createvaultmarkettodmyclaimdocument) | **POST** /v1/vault-markets/tod/my-claims/{id}/documents | Add one document to a draft claim (or one ops asked more of): kind, filename and the file as base64 (PDF, JPEG or PNG, up to 8 MB). Kept privately for ops review. Returns &#x60;{ id, kind, label, filename, bytes }&#x60;.
*VaultMarketsApi* | [**createVaultMarketTodMyClaimSubmit**](docs/Api/VaultMarketsApi.md#createvaultmarkettodmyclaimsubmit) | **POST** /v1/vault-markets/tod/my-claims/{id}/submit | Send a claim for ops review (it needs a death certificate). The account holder is told and can stop it. Returns &#x60;{ id, status }&#x60;.
*VaultMarketsApi* | [**createVaultMarketTodMyClaimWithdraw**](docs/Api/VaultMarketsApi.md#createvaultmarkettodmyclaimwithdraw) | **POST** /v1/vault-markets/tod/my-claims/{id}/withdraw | Withdraw a claim before it is released. Returns &#x60;{ id, status }&#x60;.
*VaultMarketsApi* | [**createVaultMarketTodTerm**](docs/Api/VaultMarketsApi.md#createvaultmarkettodterm) | **POST** /v1/vault-markets/tod/terms | Accept the current transfer-on-death terms. Returns &#x60;{ termsVersion }&#x60;.
*VaultMarketsApi* | [**createVaultMarketUnitEvidenceScan**](docs/Api/VaultMarketsApi.md#createvaultmarketunitevidencescan) | **POST** /v1/vault-markets/units/{id}/evidence/scans | Add a finished scan of your own (&#x60;captureId&#x60;, of the same catalogue item) to your vault unit. Shown as added by the owner, not as intake evidence.
*VaultMarketsApi* | [**createVaultMarketUnitSellNow**](docs/Api/VaultMarketsApi.md#createvaultmarketunitsellnow) | **POST** /v1/vault-markets/units/{id}/sell-now | Sell one unit of this item now into the best bid (Instant Exit: an immediate-or-cancel pro order), never below &#x60;minCents&#x60;. Returns &#x60;{ status: filled | missed, filledCents, quote, order }&#x60;.
*VaultMarketsApi* | [**createVaultMarketValuationStatement**](docs/Api/VaultMarketsApi.md#createvaultmarketvaluationstatement) | **POST** /v1/vault-markets/valuation-statements | Issue an insurance or appraisal statement for a day: frozen with the sha256 of its record, sealed in the Crossly audit chain, with a public verify link. preparedFor and policyRef are printed on it and never shown on verify. Moves no money.
*VaultMarketsApi* | [**createVaultMarketWatchlist**](docs/Api/VaultMarketsApi.md#createvaultmarketwatchlist) | **POST** /v1/vault-markets/watchlist | Watch a book key. Returns &#x60;{ bookKey, watching }&#x60;.
*VaultMarketsApi* | [**createVaultMarketWidgetToken**](docs/Api/VaultMarketsApi.md#createvaultmarketwidgettoken) | **POST** /v1/vault-markets/widget/tokens | Mint a widget token for one phone (&#x60;deviceName&#x60;, &#x60;installId&#x60;); minting again with the same pair replaces that phone token. The token reads the widget summary and nothing else, and is returned once. At most five phones.
*VaultMarketsApi* | [**createVaultReceiptTokenConfirm**](docs/Api/VaultMarketsApi.md#createvaultreceipttokenconfirm) | **POST** /v1/vault/receipt-tokens/{id}/confirm | After your wallet sent the export: read the chain and mark the token live once its one token exists. Pass the &#x60;signature&#x60; your wallet returned to record it (kept only if it landed).
*VaultMarketsApi* | [**createVaultReceiptTokenExport**](docs/Api/VaultMarketsApi.md#createvaultreceipttokenexport) | **POST** /v1/vault/receipt-tokens/export | Send one unit (&#x60;vaultItemId&#x60;) warehouse receipt to one of your verified Solana wallets (&#x60;wallet&#x60;) as a token, accepting the current terms (&#x60;acceptTerms&#x60;). Returns a base64 transaction already signed by the new mint and the receipts authority: your wallet pays the rent and must sign and send it within about two minutes, then call confirm. Nothing is minted until it does. Needs a verified ID; the unit must be stored, unpledged, not lent and not for sale.
*VaultMarketsApi* | [**createVaultReceiptTokenRedeem**](docs/Api/VaultMarketsApi.md#createvaultreceipttokenredeem) | **POST** /v1/vault/receipt-tokens/{id}/redeem | Redeem a receipt token held in one of your verified Solana wallets (&#x60;wallet&#x60;): returns an unsigned base64 burn your wallet signs and sends (it also closes the token account and returns its rent to you). Once it lands, call redeem/confirm and the unit is yours in the vault. Refused while the token is frozen.
*VaultMarketsApi* | [**createVaultReceiptTokenRedeemConfirm**](docs/Api/VaultMarketsApi.md#createvaultreceipttokenredeemconfirm) | **POST** /v1/vault/receipt-tokens/{id}/redeem/confirm | After your wallet sent the redeem: read the chain; once the token is burned the unit moves into your vault (if it was not yours already). Pass the &#x60;signature&#x60; to record it.
*VaultMarketsApi* | [**createVaultReceiptTokenWalletAllow**](docs/Api/VaultMarketsApi.md#createvaultreceipttokenwalletallow) | **POST** /v1/vault/receipt-tokens/wallets/allow | Put one of your verified Solana wallets (&#x60;wallet&#x60;) on the receipt-token allow-list so it can hold and receive receipt tokens. Returns a base64 transaction already signed by the receipts authority: the wallet pays the small rent (about 0.001 SOL) and must sign and send it within about two minutes. Needs a verified ID and a wallet that passes the sanctions screen.
*VaultMarketsApi* | [**deleteVaultMarketAgentWatch**](docs/Api/VaultMarketsApi.md#deletevaultmarketagentwatch) | **DELETE** /v1/vault-markets/agent/watches/{id} | Cancel a live price watch. Returns the watch.
*VaultMarketsApi* | [**deleteVaultMarketAlert**](docs/Api/VaultMarketsApi.md#deletevaultmarketalert) | **DELETE** /v1/vault-markets/alerts/{id} | Delete a price alert. Returns &#x60;{ ok }&#x60;.
*VaultMarketsApi* | [**deleteVaultMarketBullionFamilyPeg**](docs/Api/VaultMarketsApi.md#deletevaultmarketbullionfamilypeg) | **DELETE** /v1/vault-markets/bullion/family-pegs/{id} | Stop a family-wide quote: every leg order comes off the book; what filled stays filled.
*VaultMarketsApi* | [**deleteVaultMarketBullionPeg**](docs/Api/VaultMarketsApi.md#deletevaultmarketbullionpeg) | **DELETE** /v1/vault-markets/bullion/pegs/{id} | Stop a spot-pegged quote: its resting order comes off the book; what filled stays filled.
*VaultMarketsApi* | [**deleteVaultMarketDealerBand**](docs/Api/VaultMarketsApi.md#deletevaultmarketdealerband) | **DELETE** /v1/vault-markets/dealer/bands | Stop a band on a key; its standing bid comes off.
*VaultMarketsApi* | [**deleteVaultMarketEntityMember**](docs/Api/VaultMarketsApi.md#deletevaultmarketentitymember) | **DELETE** /v1/vault-markets/entities/{id}/members/{memberId} | Admin: remove a member (or leave, yourself). An entity always keeps one admin.
*VaultMarketsApi* | [**deleteVaultMarketFollowCopyWatch**](docs/Api/VaultMarketsApi.md#deletevaultmarketfollowcopywatch) | **DELETE** /v1/vault-markets/follows/copy-watch/{handle} | Stop copy-watching a collector.
*VaultMarketsApi* | [**deleteVaultMarketIndex**](docs/Api/VaultMarketsApi.md#deletevaultmarketindex) | **DELETE** /v1/vault-markets/indexes/{slug} | Delete an index of your own. Returns &#x60;{ ok }&#x60;.
*VaultMarketsApi* | [**deleteVaultMarketLocate**](docs/Api/VaultMarketsApi.md#deletevaultmarketlocate) | **DELETE** /v1/vault-markets/locates/{id} | Release a live locate before it lapses.
*VaultMarketsApi* | [**deleteVaultMarketOpeningWaitlist**](docs/Api/VaultMarketsApi.md#deletevaultmarketopeningwaitlist) | **DELETE** /v1/vault-markets/opening/{slug}/waitlist | Leave a key&#39;s waitlist.
*VaultMarketsApi* | [**deleteVaultMarketPriceWidget**](docs/Api/VaultMarketsApi.md#deletevaultmarketpricewidget) | **DELETE** /v1/vault-markets/price-widgets/{id} | Delete a widget. Pages that still paste it show that it is no longer available. Returns &#x60;{ id, archived }&#x60;.
*VaultMarketsApi* | [**deleteVaultMarketProQuote**](docs/Api/VaultMarketsApi.md#deletevaultmarketproquote) | **DELETE** /v1/vault-markets/pro/quotes | Pull your quote on a book key, or every quote. Returns &#x60;{ pulled }&#x60;.
*VaultMarketsApi* | [**deleteVaultMarketProfileFollow**](docs/Api/VaultMarketsApi.md#deletevaultmarketprofilefollow) | **DELETE** /v1/vault-markets/profiles/{handle}/follow | Stop following someone.
*VaultMarketsApi* | [**deleteVaultMarketRecurring**](docs/Api/VaultMarketsApi.md#deletevaultmarketrecurring) | **DELETE** /v1/vault-markets/recurring/{id} | Stop a recurring buy for good; its history stays.
*VaultMarketsApi* | [**deleteVaultMarketSetGoal**](docs/Api/VaultMarketsApi.md#deletevaultmarketsetgoal) | **DELETE** /v1/vault-markets/set-goals/{id} | Remove a set goal. A working basket bid is cancelled first; what filled stays in your vault.
*VaultMarketsApi* | [**deleteVaultMarketShareCard**](docs/Api/VaultMarketsApi.md#deletevaultmarketsharecard) | **DELETE** /v1/vault-markets/share-cards/{id} | Take a share card down: its link and image stop working. Returns &#x60;{ ok }&#x60;.
*VaultMarketsApi* | [**deleteVaultMarketSupplyRoundUp**](docs/Api/VaultMarketsApi.md#deletevaultmarketsupplyroundup) | **DELETE** /v1/vault-markets/supply/round-up | Stop the round-up (its history stays; an armed buy is cancelled).
*VaultMarketsApi* | [**deleteVaultMarketUnitEvidence**](docs/Api/VaultMarketsApi.md#deletevaultmarketunitevidence) | **DELETE** /v1/vault-markets/units/{id}/evidence/{evidenceId} | Take back a scan you added to your vault unit (intake evidence stays).
*VaultMarketsApi* | [**deleteVaultMarketWatchlist**](docs/Api/VaultMarketsApi.md#deletevaultmarketwatchlist) | **DELETE** /v1/vault-markets/watchlist | Stop watching a book key (&#x60;?bookKey&#x3D;&#x60;). Returns &#x60;{ bookKey, watching }&#x60;.
*VaultMarketsApi* | [**deleteVaultMarketWidgetToken**](docs/Api/VaultMarketsApi.md#deletevaultmarketwidgettoken) | **DELETE** /v1/vault-markets/widget/tokens | Turn the widget off on every phone: revokes all your widget tokens. Returns &#x60;{ revoked }&#x60;, how many.
*VaultMarketsApi* | [**deleteVaultMarketWidgetTokenById**](docs/Api/VaultMarketsApi.md#deletevaultmarketwidgettokenbyid) | **DELETE** /v1/vault-markets/widget/tokens/{id} | Turn the widget off on one phone: revokes that widget token at once. Only a widget token can be revoked here.
*VaultMarketsApi* | [**getVaultAttestation**](docs/Api/VaultMarketsApi.md#getvaultattestation) | **GET** /v1/vault/attestations | Vault attestations: independent physical counts, the insurance certificate (with a warning when insured value in the vault exceeds its aggregate or per-occurrence limit), SOC 1 Type II and SOC 2 reports. Each carries its signed document.
*VaultMarketsApi* | [**getVaultMarketAccount**](docs/Api/VaultMarketsApi.md#getvaultmarketaccount) | **GET** /v1/vault-markets/account | Which Vault Markets registrations are live (and the env each waits on), your custodian account, limits and balances.
*VaultMarketsApi* | [**getVaultMarketAdl**](docs/Api/VaultMarketsApi.md#getvaultmarketadl) | **GET** /v1/vault-markets/adl | The insurance fund (booked and free to draw), the most one event may draw before auto-deleveraging (ADL) starts, the loss waterfall in order, and the latest ADL events (no user or position ids). Money in cents.
*VaultMarketsApi* | [**getVaultMarketAdlPosition**](docs/Api/VaultMarketsApi.md#getvaultmarketadlposition) | **GET** /v1/vault-markets/adl/positions/{id} | One of your positions with its ADL lights (0 once it has ended).
*VaultMarketsApi* | [**getVaultMarketAdvanceQuote**](docs/Api/VaultMarketsApi.md#getvaultmarketadvancequote) | **GET** /v1/vault-markets/advances/quote | What an advance on a vault unit for sale could be: up to half of the lower of its mark and asking price, free for 60 days.
*VaultMarketsApi* | [**getVaultMarketAgentDraft**](docs/Api/VaultMarketsApi.md#getvaultmarketagentdraft) | **GET** /v1/vault-markets/agent/drafts/{id} | One drafted order: item, side, units, limit (cents), the book when drafted, status, and the orderBody that places it.
*VaultMarketsApi* | [**getVaultMarketAlertPref**](docs/Api/VaultMarketsApi.md#getvaultmarketalertpref) | **GET** /v1/vault-markets/alert-prefs | Your vault alert settings: every kind (price, fill, margin_call, adl, p2p_loan, auction, market_open, receipt_token, set_goal, follow, account), every channel (push, telegram, terminal, email, webhook) with whether it is set up, the full on/off grid, the locked switches (a critical kind always pushes) and quiet hours.
*VaultMarketsApi* | [**getVaultMarketAuctionLot**](docs/Api/VaultMarketsApi.md#getvaultmarketauctionlot) | **GET** /v1/vault-markets/auctions/lots/{id} | One lot: the price showing, the next minimum bid, whether a reserve exists and is met, the end (extended by late bids), the bid history and your standing.
*VaultMarketsApi* | [**getVaultMarketAuctionMine**](docs/Api/VaultMarketsApi.md#getvaultmarketauctionmine) | **GET** /v1/vault-markets/auctions/mine | Lots you consigned (with your reserve) and lots you bid on (with your maximum and whether you lead).
*VaultMarketsApi* | [**getVaultMarketBlock**](docs/Api/VaultMarketsApi.md#getvaultmarketblock) | **GET** /v1/vault-markets/blocks/{orderId} | One block order: its order, plan lines (planned and allocated units, average price, cash share, status).
*VaultMarketsApi* | [**getVaultMarketBullionFor**](docs/Api/VaultMarketsApi.md#getvaultmarketbullionfor) | **GET** /v1/vault-markets/bullion/for | The bullion key families one book key belongs to, with spot for its metal as a labelled reference and its melt value at that spot. Empty families when the item is not keyed bullion.
*VaultMarketsApi* | [**getVaultMarketBullionKey**](docs/Api/VaultMarketsApi.md#getvaultmarketbullionkey) | **GET** /v1/vault-markets/bullion/keys/{slug} | One bullion key family: its catalogue products, every live book key with best bid, best ask, vault units and its mark (from the book only), live pegged quote counts, and spot as a labelled reference.
*VaultMarketsApi* | [**getVaultMarketBullionPegPreview**](docs/Api/VaultMarketsApi.md#getvaultmarketbullionpegpreview) | **GET** /v1/vault-markets/bullion/pegs/preview | The price a spot-pegged quote would rest at now (spot plus a premium in cents or basis points, clamped to floor and cap). No price when spot is stale or missing: such a quote waits off the book.
*VaultMarketsApi* | [**getVaultMarketCall**](docs/Api/VaultMarketsApi.md#getvaultmarketcall) | **GET** /v1/vault-markets/calls/{bookKey} | Recent call-auction uncrosses on a book key: kind (open, reopen, periodic, daily, buy-in, sell-off), clearing price in cents and units.
*VaultMarketsApi* | [**getVaultMarketCapacity**](docs/Api/VaultMarketsApi.md#getvaultmarketcapacity) | **GET** /v1/vault-markets/capacity | Capacity from the book: &#x60;bookKey&#x60; (+ &#x60;units&#x60;) gives ADV, depth within ±5% of the mark, vault stock, lendable units and days to liquidate at 20% of ADV; &#x60;index&#x60; + &#x60;notional&#x60; (cents) gives how much of the basket the asks fill now and the days the rest needs.
*VaultMarketsApi* | [**getVaultMarketChannel**](docs/Api/VaultMarketsApi.md#getvaultmarketchannel) | **GET** /v1/vault-markets/channels | Your Vault Markets channel switches: Telegram alerts and digest, the daily cap on vault nudges by push (default 5), whether a Telegram chat is linked, and how many nudges went out today.
*VaultMarketsApi* | [**getVaultMarketCompare**](docs/Api/VaultMarketsApi.md#getvaultmarketcompare) | **GET** /v1/vault-markets/compare | Up to 5 book keys and/or index slugs (&#x60;items&#x60;, comma-separated) as daily series on the same days, each rebased to 100.
*VaultMarketsApi* | [**getVaultMarketConfirmation**](docs/Api/VaultMarketsApi.md#getvaultmarketconfirmation) | **GET** /v1/vault-markets/confirmations/{tradeId} | One trade confirmation.
*VaultMarketsApi* | [**getVaultMarketConfirmationPdf**](docs/Api/VaultMarketsApi.md#getvaultmarketconfirmationpdf) | **GET** /v1/vault-markets/confirmations/{tradeId}/pdf | One trade confirmation as a PDF.
*VaultMarketsApi* | [**getVaultMarketCorrelation**](docs/Api/VaultMarketsApi.md#getvaultmarketcorrelation) | **GET** /v1/vault-markets/correlations | The correlation matrix of the sector indexes&#39; weekly returns over &#x60;weeks&#x60; (default 52), pairwise-complete, with n per pair; a pair under 26 shared weeks has no number.
*VaultMarketsApi* | [**getVaultMarketCreatorAttribution**](docs/Api/VaultMarketsApi.md#getvaultmarketcreatorattribution) | **GET** /v1/vault-markets/creators/attribution | The creator who brought you to Vault Markets, when one did: when it started and ends, whether it still earns, and the disclosure. Your prices and fees are the same either way.
*VaultMarketsApi* | [**getVaultMarketCreatorDashboard**](docs/Api/VaultMarketsApi.md#getvaultmarketcreatordashboard) | **GET** /v1/vault-markets/creators/dashboard | For creators: whether you joined the programme, each of your codes with traders attributed and still earning (counts only), shares accrued, paid and voided (cents) and the latest shares.
*VaultMarketsApi* | [**getVaultMarketCreatorProgramme**](docs/Api/VaultMarketsApi.md#getvaultmarketcreatorprogramme) | **GET** /v1/vault-markets/creators/programme | The Vault Markets creator programme: the share of the fee Crossly keeps that a creator earns, the per-fill and lifetime caps (cents), the attribution window in days, the 2% net floor it sits under, and the disclosure words.
*VaultMarketsApi* | [**getVaultMarketCreatorRoom**](docs/Api/VaultMarketsApi.md#getvaultmarketcreatorroom) | **GET** /v1/vault-markets/creators/room | For creators: your vault shelf room (applied, verified, rejected or paused) and whether your public vault profile is on, which the room needs.
*VaultMarketsApi* | [**getVaultMarketCredit**](docs/Api/VaultMarketsApi.md#getvaultmarketcredit) | **GET** /v1/vault-markets/credit/{id} | One loan or advance with its pledged units and its money log (draws, interest, repayments, sale proceeds).
*VaultMarketsApi* | [**getVaultMarketDcm**](docs/Api/VaultMarketsApi.md#getvaultmarketdcm) | **GET** /v1/vault-markets/dcm | The partner exchange (DCM) that lists and clears futures and options on Crossly indexes (needs VAULT_INDEX_DCM + VAULT_INDEX_DCM_API_URL + VAULT_INDEX_DCM_API_KEY), and its contracts as last read: perps, futures and options with the index each settles on, multiplier, tick, expiry and strike. Read-only: Crossly is the licensor and data provider, never the venue.
*VaultMarketsApi* | [**getVaultMarketDcmContract**](docs/Api/VaultMarketsApi.md#getvaultmarketdcmcontract) | **GET** /v1/vault-markets/dcm/contracts/{symbol} | One partner contract: its spec, its funding prints (newest first; the partner computes and settles funding), annualised funding over the last 21 prints, and the Crossly index level it settles on.
*VaultMarketsApi* | [**getVaultMarketDcmContractBook**](docs/Api/VaultMarketsApi.md#getvaultmarketdcmcontractbook) | **GET** /v1/vault-markets/dcm/contracts/{symbol}/book | The partner exchange live order book for a contract (cached 5 seconds), with mark, index, last, open interest, 24 h volume, spread in bps and the basis of its mark over the Crossly index in bps. Prices are index points.
*VaultMarketsApi* | [**getVaultMarketDcmOptionsInput**](docs/Api/VaultMarketsApi.md#getvaultmarketdcmoptionsinput) | **GET** /v1/vault-markets/dcm/options-inputs/{slug} | Options inputs for an index (indexes only, never a single item): Crossly realised volatility (raw and Geltner-desmoothed, from weekly returns), the forward (the partner future mark, else the Crossly close), Black-76 greeks on a strike x expiry grid and on every option the partner lists on the index. Model inputs, not quotes.
*VaultMarketsApi* | [**getVaultMarketDcmPosition**](docs/Api/VaultMarketsApi.md#getvaultmarketdcmposition) | **GET** /v1/vault-markets/dcm/positions | The partner exchange account linked to your account (or to the firm sub-account &#x60;subaccountId&#x60;) and its positions, read-only (cached 15 seconds); index futures on category indexes count as portfolio-margin hedges for that account: contracts, side, entry and mark price, unrealised P&amp;L and margin in cents, liquidation price and notional in cents. Not linked: &#x60;linked: false&#x60;.
*VaultMarketsApi* | [**getVaultMarketDealer**](docs/Api/VaultMarketsApi.md#getvaultmarketdealer) | **GET** /v1/vault-markets/dealer | Your dealer status (applied, approved, revoked) and your Instant Exit bands.
*VaultMarketsApi* | [**getVaultMarketDealerPool**](docs/Api/VaultMarketsApi.md#getvaultmarketdealerpool) | **GET** /v1/vault-markets/dealer/pools/{id} | One of your curve pools, with its ladder and live legs.
*VaultMarketsApi* | [**getVaultMarketDigestPreview**](docs/Api/VaultMarketsApi.md#getvaultmarketdigestpreview) | **GET** /v1/vault-markets/digest/preview | This week&#39;s vault digest as it would go out: units at the display marks (unmarked units counted, not valued), the like-for-like change from a week ago, offers on your units, watched keys that got a first mark, and one Learn card.
*VaultMarketsApi* | [**getVaultMarketEntity**](docs/Api/VaultMarketsApi.md#getvaultmarketentity) | **GET** /v1/vault-markets/entities | The entities (funds, LLCs, trusts, SPVs) you belong to, and invitations waiting for you.
*VaultMarketsApi* | [**getVaultMarketEntityById**](docs/Api/VaultMarketsApi.md#getvaultmarketentitybyid) | **GET** /v1/vault-markets/entities/{id} | One entity: members and roles, sub-accounts with their limits, firm halts, caps.
*VaultMarketsApi* | [**getVaultMarketEstimate**](docs/Api/VaultMarketsApi.md#getvaultmarketestimate) | **GET** /v1/vault-markets/estimates/{bookKey} | The Crossly Estimate for a book key — a model, not a price. Method (own trades, index-adjusted last trade, grade ratio), cents with 68% and 95% bands, High/Medium/Low from the walk-forward backtest&#39;s FSD, and n. Hidden (&#x60;available: false&#x60;) under 50 backtested trades or when FSD &gt; 0.30. Never used for margin, loans or settlement.
*VaultMarketsApi* | [**getVaultMarketExecutionQuality**](docs/Api/VaultMarketsApi.md#getvaultmarketexecutionquality) | **GET** /v1/vault-markets/execution-quality | The quarterly execution-quality report (Rule 605 style): fill rates, speed, effective vs quoted spread and shortfall by order type and size, and the busiest keys. &#x60;quarter&#x60; like 2026-Q4; the current quarter is provisional.
*VaultMarketsApi* | [**getVaultMarketFeeQuote**](docs/Api/VaultMarketsApi.md#getvaultmarketfeequote) | **GET** /v1/vault-markets/fees/quote | Your fee for an order at a price: as maker (the order rests) and as taker (it fills at once), with the programme that sets your rate and any Crossly One trim. A buyer&#39;s fee is added to the price; a seller&#39;s comes out of the proceeds.
*VaultMarketsApi* | [**getVaultMarketFeeSchedule**](docs/Api/VaultMarketsApi.md#getvaultmarketfeeschedule) | **GET** /v1/vault-markets/fees/schedule | The fee schedule by role: maker and taker rates for retail, 30-day volume, Registered LPs and DMMs, the CBX discount, the referral share and the 2% net floor Crossly always keeps.
*VaultMarketsApi* | [**getVaultMarketFollowSharing**](docs/Api/VaultMarketsApi.md#getvaultmarketfollowsharing) | **GET** /v1/vault-markets/follows/sharing | Your sharing switches: the public vault profile, new buys, units sent in, sales, Hall loans, bids and asks for copy-watchers, and the leaderboards. All off until you turn them on.
*VaultMarketsApi* | [**getVaultMarketGemRate**](docs/Api/VaultMarketsApi.md#getvaultmarketgemrate) | **GET** /v1/vault-markets/gem-rate/{bookKey} | The Crossly gem rate: of cards graded through Crossly, the share that came back at each grader&#39;s gem grade, for this item and its category, with a Wilson 95% band. 10 returns per grader or no number. Not a grader population report.
*VaultMarketsApi* | [**getVaultMarketGradeToVault**](docs/Api/VaultMarketsApi.md#getvaultmarketgradetovault) | **GET** /v1/vault-markets/grade-to-vault/{id} | One Grade to Vault flow, brought up to date with its submission and unit.
*VaultMarketsApi* | [**getVaultMarketGradeToVaultCandidate**](docs/Api/VaultMarketsApi.md#getvaultmarketgradetovaultcandidate) | **GET** /v1/vault-markets/grade-to-vault/candidates | What you can start Grade to Vault on: raw inventory matched to a catalogue item, and raw vault units on the grading hub shelf; plus whether Grading Runs are open.
*VaultMarketsApi* | [**getVaultMarketGradingSignal**](docs/Api/VaultMarketsApi.md#getvaultmarketgradingsignal) | **GET** /v1/vault-markets/grading-signal | For a raw book key: the marks of the same item&#39;s graded keys, the spread over raw, grading cost per grader, the margin tier grading lifts it to, your raw vault units it pays to grade, and where to act.
*VaultMarketsApi* | [**getVaultMarketHallLoan**](docs/Api/VaultMarketsApi.md#getvaultmarkethallloan) | **GET** /v1/vault-markets/hall/loans | Your Hall of Grails desk: this week&#39;s exhibition, the rules (maxLive loans, shownPerHolder per exhibition, repPoints per exhibition shown), reputation (exhibitions finished), your loans (status active, ending or ended; onShowNow, showingUntil, exhibitions, the next exhibition it fits, the Lent to the Hall badge) and the vault units you could lend (canLend, or the blocker in words, and the next exhibition each fits). Display only.
*VaultMarketsApi* | [**getVaultMarketHealth**](docs/Api/VaultMarketsApi.md#getvaultmarkethealth) | **GET** /v1/vault-markets/health | Portfolio health of your vault holdings at Crossly marks: concentration by single item, category, grade and grader (shares, HHI on 0 to 10000, its band and effective number of holdings), value by liquidity tier, the stress grid (each category and everything down 10, 20 and 30 percent), value by mark quality, plain observations, and the held items a what-if can run on. Information only, not advice.
*VaultMarketsApi* | [**getVaultMarketHealthWhatIf**](docs/Api/VaultMarketsApi.md#getvaultmarkethealthwhatif) | **GET** /v1/vault-markets/health/what-if | What if one held item moved by moveBps (-10000 to 10000 basis points of its mark): the item, your vault total, the item and its category share of the vault, and the single-item HHI, before and after. A scenario on the mark, not a price you could sell at.
*VaultMarketsApi* | [**getVaultMarketHomeUnit**](docs/Api/VaultMarketsApi.md#getvaultmarkethomeunit) | **GET** /v1/vault-markets/home/units | \&quot;Show my vault\&quot;: the vault units you hold, the ones standing in your Crossly World home first. Each: vaultItemId, title, grade, imageUrl, bookKey (its market), inHome, visitors (visitors to your home see it). Also your home (slug, privacy, path), max units one home shows, shown, visitorsSee and a note on who sees what. Your home is made on first read. No prices.
*VaultMarketsApi* | [**getVaultMarketIndex**](docs/Api/VaultMarketsApi.md#getvaultmarketindex) | **GET** /v1/vault-markets/indexes/{slug} | One index with its daily closes (oldest first) and its level now.
*VaultMarketsApi* | [**getVaultMarketIndexCalendar**](docs/Api/VaultMarketsApi.md#getvaultmarketindexcalendar) | **GET** /v1/vault-markets/index-calendar | The next four quarterly reviews: reference day (2nd Friday of Mar/Jun/Sep/Dec), announcement day, last close under the old membership and the effective day; June and December also review the Blue-chip 50.
*VaultMarketsApi* | [**getVaultMarketIndexConsultation**](docs/Api/VaultMarketsApi.md#getvaultmarketindexconsultation) | **GET** /v1/vault-markets/index-consultations/{id} | One consultation with its proposal, versions, dates, outcome and the public comments.
*VaultMarketsApi* | [**getVaultMarketIndexFeed**](docs/Api/VaultMarketsApi.md#getvaultmarketindexfeed) | **GET** /v1/vault-markets/index-feed/{slug} | The licensed index feed for one built-in index (needs VAULT_INDEX_DCM + VAULT_INDEX_FEED_SECRET): the level now (intraday from A/B marks, or the last close below 50% constituent coverage), the last close, the frozen 7-day TWAP settlement value and every constituent with its mark source, quality and trade count. Signed: &#x60;x-crossly-signature: t&#x3D;&lt;ms&gt;,v1&#x3D;&lt;hex HMAC-SHA256(secret, t + \&quot;.\&quot; + body)&gt;&#x60;. Every read is logged for the licence. Crossly is the licensor and data feed only.
*VaultMarketsApi* | [**getVaultMarketIndexFeedFunding**](docs/Api/VaultMarketsApi.md#getvaultmarketindexfeedfunding) | **GET** /v1/vault-markets/index-feed/{slug}/funding | Reference funding for a perpetual-style future on the index: your premium &#x60;premiumBps&#x60; (TWAP of (impact mid - index)/index) through F &#x3D; P + clamp(I - P, ±0.05%) per 8 h, |F| capped at 0.5%/day, with the index level it is relative to. The partner DCM computes and settles funding; this is the reference math.
*VaultMarketsApi* | [**getVaultMarketIndexFeedSettlement**](docs/Api/VaultMarketsApi.md#getvaultmarketindexfeedsettlement) | **GET** /v1/vault-markets/index-feed/{slug}/settlement | The frozen 7-day TWAP settlement series for a licensed index (written once a day, never restated), with the closes behind each value. Signed like the feed.
*VaultMarketsApi* | [**getVaultMarketIndexLevel**](docs/Api/VaultMarketsApi.md#getvaultmarketindexlevel) | **GET** /v1/vault-markets/indexes/{slug}/levels | An index&#39;s daily closes (up to 5 years), oldest first.
*VaultMarketsApi* | [**getVaultMarketIndexLicenceUsage**](docs/Api/VaultMarketsApi.md#getvaultmarketindexlicenceusage) | **GET** /v1/vault-markets/index-licence/usage | Your licensed index feed reads over &#x60;days&#x60;, per index and endpoint (licence-usage report).
*VaultMarketsApi* | [**getVaultMarketIndexMethodology**](docs/Api/VaultMarketsApi.md#getvaultmarketindexmethodology) | **GET** /v1/vault-markets/index-methodology | The index method in machine-readable form: version (semver), inputs, weightings and caps, the family and its screens, the engines and their publication gate, revisions and the settlement series, the calendar, governance and limitations.
*VaultMarketsApi* | [**getVaultMarketInstantExit**](docs/Api/VaultMarketsApi.md#getvaultmarketinstantexit) | **GET** /v1/vault-markets/instant-exit | The Instant Exit quote for one vault unit you hold: the best resting bid on its book key (anyone&#39;s, dealers&#39; included), its share of the mark, the bid depth, and whether it can be taken now.
*VaultMarketsApi* | [**getVaultMarketJoint**](docs/Api/VaultMarketsApi.md#getvaultmarketjoint) | **GET** /v1/vault-markets/joint | Your joint vaults and the invitations waiting for you, with the gate (open, missing env), the joint terms in words and what each right allows. A JointVaultsHome object, not a collection.
*VaultMarketsApi* | [**getVaultMarketJointById**](docs/Api/VaultMarketsApi.md#getvaultmarketjointbyid) | **GET** /v1/vault-markets/joint/{id} | One joint vault (active members only): members and rights, the units in it at the mark with each owner of record, totals, recent joint trades, and the activity from the audit trail.
*VaultMarketsApi* | [**getVaultMarketKeyStat**](docs/Api/VaultMarketsApi.md#getvaultmarketkeystat) | **GET** /v1/vault-markets/key-stats/{bookKey} | Everything derived about one book key in one read: the Crossly Estimate, the liquidity score, risk statistics and the gem rate. A part that cannot be read is &#x60;{ error }&#x60;.
*VaultMarketsApi* | [**getVaultMarketLearn**](docs/Api/VaultMarketsApi.md#getvaultmarketlearn) | **GET** /v1/vault-markets/learn | The Learn hub: each concept with whether you passed its quiz. Passing earns cosmetic pins only.
*VaultMarketsApi* | [**getVaultMarketLearnByConcept**](docs/Api/VaultMarketsApi.md#getvaultmarketlearnbyconcept) | **GET** /v1/vault-markets/learn/{concept} | One Learn concept: its sections and quiz questions (no answers).
*VaultMarketsApi* | [**getVaultMarketLendingElection**](docs/Api/VaultMarketsApi.md#getvaultmarketlendingelection) | **GET** /v1/vault-markets/lending/election | Your lender election: &#x60;returnInKind&#x60; (shorts post 175% collateral, a 14-day buy-in, never cash-settled) and &#x60;allowTerm&#x60; (your units may go out on 30/90-day fixed-rate term loans, not recallable before term).
*VaultMarketsApi* | [**getVaultMarketLendingProgramme**](docs/Api/VaultMarketsApi.md#getvaultmarketlendingprogramme) | **GET** /v1/vault-markets/lending/programme | Your lender programme report: lendable units, units out, utilisation, fee revenue (accrued / paid), term loans and return-in-kind loans in force, and each loan&#39;s rate against the key&#39;s rate today.
*VaultMarketsApi* | [**getVaultMarketLendingStatement**](docs/Api/VaultMarketsApi.md#getvaultmarketlendingstatement) | **GET** /v1/vault-markets/lending/statement | Your daily collateral statement as a lender (today live, or &#x60;day&#x60;): per open loan the mark and its quality, fees owed to you, the short&#39;s collateral share at the custodian and its coverage against 105% of mark + fees. A unit without a mark usable for risk shows no coverage number.
*VaultMarketsApi* | [**getVaultMarketLiquidity**](docs/Api/VaultMarketsApi.md#getvaultmarketliquidity) | **GET** /v1/vault-markets/liquidity/{bookKey} | The liquidity score (0-100) of a book key and every component behind it: trades in 30/90 days, distinct counterparties, median days between trades, time-weighted quoted spread, two-sided share and depth within 5% (hourly book snapshots), Amihud and Roll. Each component is a percentile within the category. No score under the data threshold.
*VaultMarketsApi* | [**getVaultMarketLoanQuote**](docs/Api/VaultMarketsApi.md#getvaultmarketloanquote) | **GET** /v1/vault-markets/loans/quote | How much you can borrow against vault units (&#x60;vaultItemIds&#x60;, comma-separated; none &#x3D; every stored unit you hold): each unit&#39;s tier, mark and limit, the pool&#39;s rate and yours.
*VaultMarketsApi* | [**getVaultMarketLoanUnitSaleFloor**](docs/Api/VaultMarketsApi.md#getvaultmarketloanunitsalefloor) | **GET** /v1/vault-markets/loans/{id}/units/{vaultItemId}/sale-floor | The lowest price a pledged unit can be sold at to repay its loan: after the sale (less the vault fee and storage) what is still owed must fit inside the other units&#39; limit.
*VaultMarketsApi* | [**getVaultMarketLocate**](docs/Api/VaultMarketsApi.md#getvaultmarketlocate) | **GET** /v1/vault-markets/locates | A locate quote: how many units of &#x60;key&#x60; (a book key) you could borrow now (up to &#x60;qty&#x60;), the indicative rate (APR bps; &#x60;termDays&#x60; 30 or 90 for a fixed-rate term loan), and the collateral they need (150%, or 175% for units whose lenders elected return in kind only). Holds nothing; POST to hold.
*VaultMarketsApi* | [**getVaultMarketMark**](docs/Api/VaultMarketsApi.md#getvaultmarketmark) | **GET** /v1/vault-markets/marks/{bookKey} | One book key mark with everything behind it: the price in cents, its quality (A trade-anchored, B firm two-sided, C indicative, none), its confidence in bps and the band in cents, when it was computed, whether risk may act on it (judged for margin), the related key it was implied from (impliedFrom: a grade, the model median of the other sizes, or an index; null when none), every stored input, and the learned relations it may be implied from.
*VaultMarketsApi* | [**getVaultMarketMarket**](docs/Api/VaultMarketsApi.md#getvaultmarketmarket) | **GET** /v1/vault-markets/market | One book key (variantId:condition:gradeKey): its mark and history, lending depth and borrow rate, open interest and live auctions.
*VaultMarketsApi* | [**getVaultMarketMarketModel**](docs/Api/VaultMarketsApi.md#getvaultmarketmarketmodel) | **GET** /v1/vault-markets/market-model/{bookKey} | How a book key trades: its liquidity tier (A continuous, B call auction every 15 minutes, C daily call, D listings only), the call collecting now with its indicative price and volume and nominal close, the next call, the LULD band and any limit state, pause or halt.
*VaultMarketsApi* | [**getVaultMarketMm**](docs/Api/VaultMarketsApi.md#getvaultmarketmm) | **GET** /v1/vault-markets/mm | Your market-maker programmes, the last 30 days of obligations, rebates earned (paid only from fees already taken), and the rules.
*VaultMarketsApi* | [**getVaultMarketMmKey**](docs/Api/VaultMarketsApi.md#getvaultmarketmmkey) | **GET** /v1/vault-markets/mm/key | A key&#39;s designated market maker (by the name it chose) and how many LPs quote it.
*VaultMarketsApi* | [**getVaultMarketMmMmp**](docs/Api/VaultMarketsApi.md#getvaultmarketmmmmp) | **GET** /v1/vault-markets/mm/mmp | Your market-maker protection: the fill trigger, the freeze, and whether you are frozen now.
*VaultMarketsApi* | [**getVaultMarketMode**](docs/Api/VaultMarketsApi.md#getvaultmarketmode) | **GET** /v1/vault-markets/mode | Your Vault Markets mode: simple (buy, sell and what it is worth) or pro (the full terminal), whether you chose it or it was set for you (new people start in simple; people already trading start in pro), and when.
*VaultMarketsApi* | [**getVaultMarketNav**](docs/Api/VaultMarketsApi.md#getvaultmarketnav) | **GET** /v1/vault-markets/nav | Mark NAV, bid NAV (the resting bids) and liquidation NAV (the bids at 20% of ADV for 10 days), holding by holding, each with its ASC 820 level, mark quality and source, and your administrator&#39;s price when uploaded.
*VaultMarketsApi* | [**getVaultMarketNavFile**](docs/Api/VaultMarketsApi.md#getvaultmarketnavfile) | **GET** /v1/vault-markets/nav/file/{format} | The NAV as a csv, pdf or json file.
*VaultMarketsApi* | [**getVaultMarketOpening**](docs/Api/VaultMarketsApi.md#getvaultmarketopening) | **GET** /v1/vault-markets/opening/{slug} | One opening key.
*VaultMarketsApi* | [**getVaultMarketOracle**](docs/Api/VaultMarketsApi.md#getvaultmarketoracle) | **GET** /v1/vault-markets/oracle | Crossly as an oracle publisher (needs CROSSLY_ORACLE_PUBLISHER_KEY + CROSSLY_ORACLE_NETWORK): the network (pyth or switchboard), the ed25519 key every value is signed with, each published index feed with its latest attempt, and 24 h counts of published, skipped and failed. Only built-in indexes priced from A/B marks are published; Crossly never reads its own feed back.
*VaultMarketsApi* | [**getVaultMarketOracleBySlug**](docs/Api/VaultMarketsApi.md#getvaultmarketoraclebyslug) | **GET** /v1/vault-markets/oracle/{slug} | The latest published oracle value for an index: level, fixed-point price and confidence at the feed exponent, confidence in bps, staleness in seconds, coverage, the exact signed message and its ed25519 signature with the signer key, and whether it is fresh.
*VaultMarketsApi* | [**getVaultMarketOrderHandling**](docs/Api/VaultMarketsApi.md#getvaultmarketorderhandling) | **GET** /v1/vault-markets/order-handling | How orders are handled (the 606/607-style disclosure): one book, self-trade prevention, protected market orders, liquidations by auction, halts, dealers and fees.
*VaultMarketsApi* | [**getVaultMarketP2pDashboard**](docs/Api/VaultMarketsApi.md#getvaultmarketp2pdashboard) | **GET** /v1/vault-markets/p2p/dashboard | Peer-to-peer vault loans at a glance: what you owe as a borrower and are owed as a lender (principal + interest to the second), daily interest, called loans, your open offers, the gates and the rules (auction hours, rate ceiling, size bounds, call grace).
*VaultMarketsApi* | [**getVaultMarketP2pLoan**](docs/Api/VaultMarketsApi.md#getvaultmarketp2ploan) | **GET** /v1/vault-markets/p2p/loans/{id} | One P2P loan with its money log (fund, repay, refinance). A loan in a running refinancing auction can be read by any lender, without the log.
*VaultMarketsApi* | [**getVaultMarketPaper**](docs/Api/VaultMarketsApi.md#getvaultmarketpaper) | **GET** /v1/vault-markets/paper | Your paper trading account (play money only, never real or convertible; opened at $10,000 the first time): play cash, buying power, paper positions at the real marks, P&amp;L, working paper orders, recent paper fills and this week on the leaderboard.
*VaultMarketsApi* | [**getVaultMarketPaperQuote**](docs/Api/VaultMarketsApi.md#getvaultmarketpaperquote) | **GET** /v1/vault-markets/paper/quote | What a paper order would fill against the real book now, without placing it: units fillable inside the limit (a market order uses the 5% protection band around the mark), average price, simulated fee, and the queue ahead of any rest.
*VaultMarketsApi* | [**getVaultMarketPartnerMe**](docs/Api/VaultMarketsApi.md#getvaultmarketpartnerme) | **GET** /v1/vault-markets/partners/me | Your Vault Drop-off Partnership (null when you never applied): status, partner code, fee share and cap, totals and batches.
*VaultMarketsApi* | [**getVaultMarketPool**](docs/Api/VaultMarketsApi.md#getvaultmarketpool) | **GET** /v1/vault-markets/pool | The CBX market staking pool: size, value, what it lends, utilisation, rate, insurance fund.
*VaultMarketsApi* | [**getVaultMarketPopReport**](docs/Api/VaultMarketsApi.md#getvaultmarketpopreport) | **GET** /v1/vault-markets/pop-reports | Grading population report for one market (&#x60;bookKey&#x60;): focus (on a graded market: its grade, pop &#x3D; copies graded at exactly that grade, higher &#x3D; copies graded better by the same grader, total, asOf and source), graders (each grader ladder for the card, best grade first, from one report: the newest, the population feed over a hand entry on the same date), provider.connected, and status (ok, not_synced, no_report or no_source) with explain, which says in plain words what is missing. source is provider (the population feed) or ops (entered by Crossly from the grader published report). Counts only, never a price.
*VaultMarketsApi* | [**getVaultMarketPortfolio**](docs/Api/VaultMarketsApi.md#getvaultmarketportfolio) | **GET** /v1/vault-markets/portfolio | Your vault holdings at the market price, with cost and P&amp;L, and units you have out on loan.
*VaultMarketsApi* | [**getVaultMarketPortfolioHistory**](docs/Api/VaultMarketsApi.md#getvaultmarketportfoliohistory) | **GET** /v1/vault-markets/portfolio/history | Your Vault Markets value by day at the marks (vault units, units on loan, positions) and today&#39;s return against yesterday&#39;s close.
*VaultMarketsApi* | [**getVaultMarketPortfolioMargin**](docs/Api/VaultMarketsApi.md#getvaultmarketportfoliomargin) | **GET** /v1/vault-markets/portfolio-margin | Portfolio margin for a firm sub-account (&#x60;subaccountId&#x60;): eligibility with every reason (ECP, KYB, minimum equity $500k or $100k with evidenced intraday monitoring), whether it is enrolled, the latest requirement, equity, excess and state (healthy, call or buy_in), the breakdown by category and item, the partner index futures counted, and the policy. Before enrolling, a live preview.
*VaultMarketsApi* | [**getVaultMarketPosition**](docs/Api/VaultMarketsApi.md#getvaultmarketposition) | **GET** /v1/vault-markets/positions/{id} | One position with its loans, auctions and custodian instruction log.
*VaultMarketsApi* | [**getVaultMarketPositionExit**](docs/Api/VaultMarketsApi.md#getvaultmarketpositionexit) | **GET** /v1/vault-markets/positions/{id}/exits | A position&#39;s take-profit / stop-loss, if set.
*VaultMarketsApi* | [**getVaultMarketPositionRisk**](docs/Api/VaultMarketsApi.md#getvaultmarketpositionrisk) | **GET** /v1/vault-markets/positions/{id}/risk | One position&#39;s call and liquidation marks.
*VaultMarketsApi* | [**getVaultMarketPress**](docs/Api/VaultMarketsApi.md#getvaultmarketpress) | **GET** /v1/vault-markets/press | The press kit: each built-in index with level, quality, n, CSV link and a \&quot;cite as\&quot; line, plus the methodology links.
*VaultMarketsApi* | [**getVaultMarketPriceWidget**](docs/Api/VaultMarketsApi.md#getvaultmarketpricewidget) | **GET** /v1/vault-markets/price-widgets/{id} | One of your price widgets, with its iframe and script-tag snippets and URLs.
*VaultMarketsApi* | [**getVaultMarketProDepth**](docs/Api/VaultMarketsApi.md#getvaultmarketprodepth) | **GET** /v1/vault-markets/pro/depth | The L2 depth ladder: price levels and units per side, best first; asks show how many units are authenticated vault stock.
*VaultMarketsApi* | [**getVaultMarketProOrder**](docs/Api/VaultMarketsApi.md#getvaultmarketproorder) | **GET** /v1/vault-markets/pro/orders/{id} | One order with its full event log.
*VaultMarketsApi* | [**getVaultMarketProSnapshot**](docs/Api/VaultMarketsApi.md#getvaultmarketprosnapshot) | **GET** /v1/vault-markets/pro/snapshot | A book key&#39;s depth (20 levels a side), last 50 trades, 24 h stats, mark and any halt, in one call.
*VaultMarketsApi* | [**getVaultMarketProStat**](docs/Api/VaultMarketsApi.md#getvaultmarketprostat) | **GET** /v1/vault-markets/pro/stats | 24 h open, high, low, last, volume and change on a book key.
*VaultMarketsApi* | [**getVaultMarketProStream**](docs/Api/VaultMarketsApi.md#getvaultmarketprostream) | **GET** /v1/vault-markets/pro/stream | A long-lived text/event-stream for a book key: &#x60;snapshot&#x60; first, then &#x60;depth&#x60;, &#x60;trades&#x60;, &#x60;mark&#x60; and &#x60;halt&#x60; events as they change.
*VaultMarketsApi* | [**getVaultMarketProfile**](docs/Api/VaultMarketsApi.md#getvaultmarketprofile) | **GET** /v1/vault-markets/profile | Your public vault profile switch: on or off, whether followers see new buys, your profile URL and follower count.
*VaultMarketsApi* | [**getVaultMarketProfileByHandle**](docs/Api/VaultMarketsApi.md#getvaultmarketprofilebyhandle) | **GET** /v1/vault-markets/profiles/{handle} | Someone&#39;s public vault: each market&#39;s weight (bps of the marked value), followers, whether you follow, their recent buys (no prices).
*VaultMarketsApi* | [**getVaultMarketProofOfReserve**](docs/Api/VaultMarketsApi.md#getvaultmarketproofofreserve) | **GET** /v1/vault-markets/proof-of-reserves | Proof of reserves: the latest daily Merkle root over every unit in custody (leaf count, stored / listed / grading / withdrawing, pledged, on loan, open loans, receipts, insured value), its Solana memo anchor when VAULT_POR_ANCHOR_KEY is set, the last &#x60;days&#x60; roots, and the exact hashing method.
*VaultMarketsApi* | [**getVaultMarketProofOfReserveByDay**](docs/Api/VaultMarketsApi.md#getvaultmarketproofofreservebyday) | **GET** /v1/vault-markets/proof-of-reserves/{day} | One day&#39;s proof-of-reserves snapshot (root, counts, anchor).
*VaultMarketsApi* | [**getVaultMarketProofOfReserveMe**](docs/Api/VaultMarketsApi.md#getvaultmarketproofofreserveme) | **GET** /v1/vault-markets/proof-of-reserves/me | Your inclusion proofs for a day (latest by default): each of your units&#39; leaf fields, salt, owner commitment, leaf hash and sibling path. Verify with your OWN user id: commitment &#x3D; SHA-256(JSON[\&quot;crossly-por-owner-v1\&quot;, userId, salt]); then the leaf; then climb the path to the published root.
*VaultMarketsApi* | [**getVaultMarketRate**](docs/Api/VaultMarketsApi.md#getvaultmarketrate) | **GET** /v1/vault-markets/rates | Daily borrow APR (lent units) and pool APR on a book key, with the pool as a whole, oldest first.
*VaultMarketsApi* | [**getVaultMarketReport**](docs/Api/VaultMarketsApi.md#getvaultmarketreport) | **GET** /v1/vault-markets/report | The quarterly Crossly Vault Report (&#x60;quarter&#x60; like 2026-q3; default the latest): index levels, top movers, most-lent markets, grade premiums. Book data only.
*VaultMarketsApi* | [**getVaultMarketRfq**](docs/Api/VaultMarketsApi.md#getvaultmarketrfq) | **GET** /v1/vault-markets/rfq/{id} | One quote request: the requester sees every answer (anonymous); a responder sees the request and their own answer.
*VaultMarketsApi* | [**getVaultMarketRiskReport**](docs/Api/VaultMarketsApi.md#getvaultmarketriskreport) | **GET** /v1/vault-markets/risk-report | Historical VaR 95/99 1d/10d and Bangia LVaR (model figures: labelled, with n and a band, null below the data threshold), stress scenarios (category −30%, CBX −50%, books thin to 25%, index drawdowns), concentration and counterparty exposure.
*VaultMarketsApi* | [**getVaultMarketRiskStat**](docs/Api/VaultMarketsApi.md#getvaultmarketriskstat) | **GET** /v1/vault-markets/risk-stats/{bookKey} | Risk statistics for a book key (weekly returns from A-quality marks only) or an index slug (its closes): annualised volatility raw and Geltner-desmoothed (labelled), max drawdown and beta to the Composite. Needs 26 weekly returns, else no numbers.
*VaultMarketsApi* | [**getVaultMarketSetGoal**](docs/Api/VaultMarketsApi.md#getvaultmarketsetgoal) | **GET** /v1/vault-markets/set-goals/{id} | One set goal: every piece in the set order, held (with the vault unit) or missing (with the cheapest marked book key that meets the target and its mark), the conditions and grades seen, and the working basket bid with its legs.
*VaultMarketsApi* | [**getVaultMarketSetGoalBasketPlan**](docs/Api/VaultMarketsApi.md#getvaultmarketsetgoalbasketplan) | **GET** /v1/vault-markets/set-goals/{id}/basket-plan | What a basket bid would place now, without placing it: one leg per missing piece (cheapest first, the mark plus maxBpsOverMark as the limit), the pieces skipped and why, and the most it can cost (limits plus the worst-case buyer fee), never more than budgetCents.
*VaultMarketsApi* | [**getVaultMarketShareCard**](docs/Api/VaultMarketsApi.md#getvaultmarketsharecard) | **GET** /v1/vault-markets/share-cards/{id} | One share card as the public sees it, with its image and link paths.
*VaultMarketsApi* | [**getVaultMarketStatement**](docs/Api/VaultMarketsApi.md#getvaultmarketstatement) | **GET** /v1/vault-markets/statements | The last 24 months with whether each statement is issued (frozen, with its sha256).
*VaultMarketsApi* | [**getVaultMarketStatementByMonth**](docs/Api/VaultMarketsApi.md#getvaultmarketstatementbymonth) | **GET** /v1/vault-markets/statements/{month} | A monthly statement (&#x60;month&#x60; like 2026-10): units held at month end, loans, pledges, positions, fills, fees, storage, and cash quoted from the custodian and labelled as its record. Issued (frozen) once the month ends.
*VaultMarketsApi* | [**getVaultMarketStatementFile**](docs/Api/VaultMarketsApi.md#getvaultmarketstatementfile) | **GET** /v1/vault-markets/statements/{month}/file/{format} | A monthly statement as a csv, pdf or json file.
*VaultMarketsApi* | [**getVaultMarketSupply**](docs/Api/VaultMarketsApi.md#getvaultmarketsupply) | **GET** /v1/vault-markets/supply | A book key&#39;s units in the vault and authentications passed, by day (oldest first, today live).
*VaultMarketsApi* | [**getVaultMarketSupplyBatch**](docs/Api/VaultMarketsApi.md#getvaultmarketsupplybatch) | **GET** /v1/vault-markets/supply/batches/{id} | A box sent to the vault: its prepaid label and tracking, or why it has no label.
*VaultMarketsApi* | [**getVaultMarketSupplyRoundUp**](docs/Api/VaultMarketsApi.md#getvaultmarketsupplyroundup) | **GET** /v1/vault-markets/supply/round-up | Your seller round-up: the share of each payout that sets a vault buy&#39;s budget, the budget so far and what it is doing. &#x60;roundUp&#x60; is null when none is set.
*VaultMarketsApi* | [**getVaultMarketTax**](docs/Api/VaultMarketsApi.md#getvaultmarkettax) | **GET** /v1/vault-markets/tax | Your tax year on the vault markets: units bought and sold with cost, proceeds, gain and term; lending fees, staking interest (estimate), market-maker rewards; closed positions. Links to the CSV and PDF.
*VaultMarketsApi* | [**getVaultMarketTaxCsv**](docs/Api/VaultMarketsApi.md#getvaultmarkettaxcsv) | **GET** /v1/vault-markets/tax.csv | The tax year as a CSV: one row per sale, purchase, gift, income line and closed position.
*VaultMarketsApi* | [**getVaultMarketTaxLossSuggestion**](docs/Api/VaultMarketsApi.md#getvaultmarkettaxlosssuggestion) | **GET** /v1/vault-markets/tax/loss-suggestions | Tax-loss suggestions: the units you hold whose mark is below your cost, each with its lot (acquired when and how, cost in cents), short or long term if sold today and the day a short lot turns long, the estimated loss at the mark before selling fees, mark quality, what stops a sale, and a link to the ordinary sell ticket. With totals by term, the gains realised so far this year, and a not-tax-advice disclosure. Never sells.
*VaultMarketsApi* | [**getVaultMarketTaxPdf**](docs/Api/VaultMarketsApi.md#getvaultmarkettaxpdf) | **GET** /v1/vault-markets/tax.pdf | The tax year as a PDF summary.
*VaultMarketsApi* | [**getVaultMarketTca**](docs/Api/VaultMarketsApi.md#getvaultmarkettca) | **GET** /v1/vault-markets/tca | Your pro orders in a window (&#x60;from&#x60;, &#x60;to&#x60;; default 90 days) with arrival mark and mid, average fill, implementation shortfall, slippage, fill rate and time to fill.
*VaultMarketsApi* | [**getVaultMarketTcaByOrderId**](docs/Api/VaultMarketsApi.md#getvaultmarkettcabyorderid) | **GET** /v1/vault-markets/tca/{orderId} | One order&#39;s TCA, including slippage against the VWAP of eligible trades while it worked.
*VaultMarketsApi* | [**getVaultMarketTod**](docs/Api/VaultMarketsApi.md#getvaultmarkettod) | **GET** /v1/vault-markets/tod | Your transfer-on-death setup: the gate and terms, whether you accepted them, your beneficiaries and shares, units with their designations and who the plan gives them to today, and open claims on your account (which you can stop). A TodOverview object, not a collection.
*VaultMarketsApi* | [**getVaultMarketTodMyClaim**](docs/Api/VaultMarketsApi.md#getvaultmarkettodmyclaim) | **GET** /v1/vault-markets/tod/my-claims | Claims you filed as a beneficiary: status in words, documents sent (names only), the waiting period, and units moved or held. A TodMyClaims object, not a collection.
*VaultMarketsApi* | [**getVaultMarketUnitAr**](docs/Api/VaultMarketsApi.md#getvaultmarketunitar) | **GET** /v1/vault-markets/units/{id}/ar | A vault unit as an AR model, for \&quot;See it in your room\&quot; (the web&#39;s /ar/vault-&lt;id&gt; page hands it to Scene Viewer, WebXR or Quick Look): title, model (a path under /models, without .glb, at real size), scanUrl (the unit&#39;s own captured mesh, when it has one), imageUrl, art, tint, scale, bookKey, backPath and mine. Your own units always; somebody else&#39;s only while they show it to visitors in a home you may enter (else 404).
*VaultMarketsApi* | [**getVaultMarketUnitEvidence**](docs/Api/VaultMarketsApi.md#getvaultmarketunitevidence) | **GET** /v1/vault-markets/units/{id}/evidence | Evidence on a vault unit:its 3D scans (model, texture, listing photos) and its grade report (grader, grade, cert, verified against the grader record, hub intake photos). No owner identity.
*VaultMarketsApi* | [**getVaultMarketUnitQuote**](docs/Api/VaultMarketsApi.md#getvaultmarketunitquote) | **GET** /v1/vault-markets/units/{id}/quote | The market around a vault unit: its mark and source, the best bid that could take it, the Instant Exit price (the best bid) and a pack pull&#39;s own sell-back credit.
*VaultMarketsApi* | [**getVaultMarketUnitStory**](docs/Api/VaultMarketsApi.md#getvaultmarketunitstory) | **GET** /v1/vault-markets/units/{id}/story | One vault unit&#39;s story, oldest first: intake (with scan and grade evidence when it has some), grades, owners, sales at their prices, loans, pledges, Hall of Grails exhibitions, receipt-token exports and redemptions, and each warehouse-receipt hash-chain step (re-verified on read: chain.ok). People are named only while their public vault profile is on; others are &#39;A collector&#39;.
*VaultMarketsApi* | [**getVaultMarketValuationStatement**](docs/Api/VaultMarketsApi.md#getvaultmarketvaluationstatement) | **GET** /v1/vault-markets/valuation-statements/{id} | One statement you issued: every unit, the totals by mark quality, the methodology, its sha256, its audit-chain seal and the verify link.
*VaultMarketsApi* | [**getVaultMarketValuationStatementPdf**](docs/Api/VaultMarketsApi.md#getvaultmarketvaluationstatementpdf) | **GET** /v1/vault-markets/valuation-statements/{id}/pdf | One statement you issued as a PDF.
*VaultMarketsApi* | [**getVaultMarketValuationStatementPreview**](docs/Api/VaultMarketsApi.md#getvaultmarketvaluationstatementpreview) | **GET** /v1/vault-markets/valuation-statements/preview | An insurance or appraisal statement for a day (purpose, asOf YYYY-MM-DD, default today), built but not issued: every unit you held that day at its mark, with quality, last trade, grade and cert, and the total. No id, no hash.
*VaultMarketsApi* | [**getVaultMarketValuationStatementVerify**](docs/Api/VaultMarketsApi.md#getvaultmarketvaluationstatementverify) | **GET** /v1/vault-markets/valuation-statements/{id}/verify | Check any issued statement by its id, as an insurer would: purpose, date, totals by mark quality and the sha256; intact (the stored record still hashes to it), seal.ok (its audit-chain entry still carries it) and, with ?hash&#x3D;, whether yours matches. Never the holder or the units.
*VaultMarketsApi* | [**getVaultMarketValue**](docs/Api/VaultMarketsApi.md#getvaultmarketvalue) | **GET** /v1/vault-markets/value | A catalogue item&#39;s vault book keys (&#x60;?skuId&#x3D;&#x60;, optional &#x60;variantId&#x60;): each key&#39;s display mark with quality and n, units in the vault, the Instant Exit price a holder would get now, and whether it can be shipped in (ungraded keys).
*VaultMarketsApi* | [**getVaultMarketVaultSuggestionItem**](docs/Api/VaultMarketsApi.md#getvaultmarketvaultsuggestionitem) | **GET** /v1/vault-markets/vault-suggestions/items/{id} | One inventory item: its vault suggestion, or in plain words why there is none (&#x60;status&#x60;: suggested, not_found, no_stock, not_matched, in_vault or no_market).
*VaultMarketsApi* | [**getVaultMarketWidgetIndex**](docs/Api/VaultMarketsApi.md#getvaultmarketwidgetindex) | **GET** /v1/vault-markets/widgets/index/{slug} | What the &lt;crossly-index&gt; widget shows: level, closes, quality, n, as-of, or &#x60;insufficient&#x60;.
*VaultMarketsApi* | [**getVaultMarketWidgetMark**](docs/Api/VaultMarketsApi.md#getvaultmarketwidgetmark) | **GET** /v1/vault-markets/widgets/mark | What the &lt;crossly-mark&gt; widget shows for &#x60;bookKey&#x60;: mark, quality, trades over 30 days, as-of, sparkline, or &#x60;insufficient&#x60;.
*VaultMarketsApi* | [**getVaultMarketWidgetSummary**](docs/Api/VaultMarketsApi.md#getvaultmarketwidgetsummary) | **GET** /v1/vault-markets/widget/summary | The home-screen widget summary: portfolio value at the mark with its move since the previous marks (cents and bps) and the share resting on reliable A/B marks, the three biggest movers among what you hold (the market movers when you hold nothing; &#x60;movers.source&#x60; says which), and one watchlist key (&#x60;?key&#x3D;&#x60; a book key on your watchlist; else your newest watch) with a 14-day sparkline. Every price is from the Crossly order book and carries its mark quality (A, B, C or none). Cached for five minutes.
*VaultMarketsApi* | [**getVaultMarketWorldFloor**](docs/Api/VaultMarketsApi.md#getvaultmarketworldfloor) | **GET** /v1/vault-markets/world/floor | The Trading Floor in Crossly World: trades (the newest trades on every vault book in the last day, at most 40, newest first: bookKey, name, priceCents, priceText, side -- buy when a buyer took an ask, sell when a seller hit a bid, cross for an auction -- and ageS), tickers (the big board: the most-traded markets, each with its last trade price, the change from the last trade before today in basis points, trades today and the display mark with its quality), bell (Market Open: ringing for ten minutes after a new key opens, with the key and its market link, and what opens next) and trades24h. Every price is a trade on the Crossly order book; it never shows who traded. Nothing can be traded in the room.
*VaultMarketsApi* | [**getVaultMarketWorldLounge**](docs/Api/VaultMarketsApi.md#getvaultmarketworldlounge) | **GET** /v1/vault-markets/world/lounge | The Vault Holders Lounge: the rule to join (held value at reliable marks, or a unit count), whether you may join now and what you hold toward it. Anyone may look in; only holders are seen there. No perks, nothing to trade.
*VaultMarketsApi* | [**getVaultMarketWorldPlaceVaultGate**](docs/Api/VaultMarketsApi.md#getvaultmarketworldplacevaultgate) | **GET** /v1/vault-markets/world/places/{place}/vault-gate | The vault-holder door on a Crossly World room or Space, by its presence slug (a room share slug, or space-&lt;slug&gt;): the rule (minValueCents held at reliable A/B marks and/or minUnits units, mode any or all, optionally one product, bullion family or category), the rule in words, and whether you may join now with what you hold toward it. gate is null when the place has no vault door. Anyone may look in; only holders join.
*VaultMarketsApi* | [**getVaultMarketWorth**](docs/Api/VaultMarketsApi.md#getvaultmarketworth) | **GET** /v1/vault-markets/worth | What one book key (variantId:condition:gradeKey, &#x60;bookKey&#x60;) is worth: the mark in cents with its quality (A from trades, B from firm quotes, C indicative, none) and band, what Instant Exit would pay for one unit now from the best resting bid (yours left out), and your units: how many you hold, how many are free to sell, their value at the mark and what selling every free one now would fetch from today’s bids. Plain-words &#x60;headline&#x60; and &#x60;lines&#x60;. Read only.
*VaultMarketsApi* | [**getVaultMarketWorthVault**](docs/Api/VaultMarketsApi.md#getvaultmarketworthvault) | **GET** /v1/vault-markets/worth/vault | What your whole vault is worth now: value at the marks split into reliable and indicative marks, cost and P&amp;L, today’s change, and an estimate of what the units free to sell would fetch from the bids resting on the book now. Read only.
*VaultMarketsApi* | [**getVaultReceipt**](docs/Api/VaultMarketsApi.md#getvaultreceipt) | **GET** /v1/vault/receipts/{receiptNo} | One of your receipts with its full hash chain (issued, transferred, pledged, released, surrendered), re-verified on read: &#x60;chain.ok&#x60; is false if any event was altered.
*VaultMarketsApi* | [**getVaultReceiptToken**](docs/Api/VaultMarketsApi.md#getvaultreceipttoken) | **GET** /v1/vault/receipt-tokens/{id} | One receipt token (yours, or on a unit you own now) with its chain log: built, minted, frozen, thawed, new holder seen, redeem built, burned, with explorer links.
*VaultMarketsApi* | [**getVaultReceiptTokenByMint**](docs/Api/VaultMarketsApi.md#getvaultreceipttokenbymint) | **GET** /v1/vault/receipt-tokens/by-mint/{mint} | What a Solana mint is: the warehouse receipt number and item it stands for, and whether the token is live, frozen (unit pledged or lent) or burned, and whether the unit is still on a vault shelf. Names no person and no wallet.
*VaultMarketsApi* | [**listVaultMarketAccounts**](docs/Api/VaultMarketsApi.md#listvaultmarketaccounts) | **GET** /v1/vault-markets/accounts | Every account you can act on: your own, and each sub-account your entity memberships reach, with your role.
*VaultMarketsApi* | [**listVaultMarketAdlEvents**](docs/Api/VaultMarketsApi.md#listvaultmarketadlevents) | **GET** /v1/vault-markets/adl/events | The ADL events your positions were part of, newest first: role bankrupt (yours went under water) or counterparty (yours was first in line), the price both closed at and the transfer status.
*VaultMarketsApi* | [**listVaultMarketAdlPositions**](docs/Api/VaultMarketsApi.md#listvaultmarketadlpositions) | **GET** /v1/vault-markets/adl/positions | Your live positions, each with its place in its item ADL queue: lights 5 (first in line) to 1 (last), 0 when not in the queue (only profitable positions are), ranked by P&amp;L% x effective leverage.
*VaultMarketsApi* | [**listVaultMarketAgentDrafts**](docs/Api/VaultMarketsApi.md#listvaultmarketagentdrafts) | **GET** /v1/vault-markets/agent/drafts | Limit orders the shopping agent drafted for you, newest first. A draft places nothing: send its orderBody to POST /api/v1/vault-markets/pro/orders to place it.
*VaultMarketsApi* | [**listVaultMarketAgentWatches**](docs/Api/VaultMarketsApi.md#listvaultmarketagentwatches) | **GET** /v1/vault-markets/agent/watches | Your price watches on book keys (best bid, lowest ask, last trade or market price, in cents), live ones first. &#x60;?live&#x3D;true&#x60; for live only.
*VaultMarketsApi* | [**listVaultMarketAlertLog**](docs/Api/VaultMarketsApi.md#listvaultmarketalertlog) | **GET** /v1/vault-markets/alert-log | What the alerts hub did with your recent vault alerts (&#x60;?limit&#x3D;&#x60; 1 to 200, default 50): kind, title, the channels it went to, what was held (channel:reason) and the email digest state.
*VaultMarketsApi* | [**listVaultMarketAlerts**](docs/Api/VaultMarketsApi.md#listvaultmarketalerts) | **GET** /v1/vault-markets/alerts | Your price alerts on book keys.
*VaultMarketsApi* | [**listVaultMarketAuctions**](docs/Api/VaultMarketsApi.md#listvaultmarketauctions) | **GET** /v1/vault-markets/auctions | Open vault auction events (weekly, ending Sunday; premier, units marked $10,000+) and their lots, soonest ending first.
*VaultMarketsApi* | [**listVaultMarketBlocks**](docs/Api/VaultMarketsApi.md#listvaultmarketblocks) | **GET** /v1/vault-markets/blocks | An entity&#39;s block orders, newest first, each with its plan and how it was allocated.
*VaultMarketsApi* | [**listVaultMarketBullionFamilyPegs**](docs/Api/VaultMarketsApi.md#listvaultmarketbullionfamilypegs) | **GET** /v1/vault-markets/bullion/family-pegs | Your family-wide spot-pegged quotes (live, or all with status&#x3D;all): one quote resting across a bullion family books at one condition, with units left, the peg, its status and every leg (the pegged quote on each book).
*VaultMarketsApi* | [**listVaultMarketBullionKeys**](docs/Api/VaultMarketsApi.md#listvaultmarketbullionkeys) | **GET** /v1/vault-markets/bullion/keys | Bullion key families (metal, form, size, mint or any mint): members, vault units, best resting bid and ask across their books, and spot as a labelled reference with what one unit of metal is worth at it. Spot is never a Crossly price.
*VaultMarketsApi* | [**listVaultMarketBullionPegs**](docs/Api/VaultMarketsApi.md#listvaultmarketbullionpegs) | **GET** /v1/vault-markets/bullion/pegs | Your spot-pegged quotes (live, or all with status&#x3D;all): side, units, the peg, the order it rests as, the last price and spot it was priced from, and why it is pulled when it is.
*VaultMarketsApi* | [**listVaultMarketCollectionWorth**](docs/Api/VaultMarketsApi.md#listvaultmarketcollectionworth) | **GET** /v1/vault-markets/collection-worth | Your collection valued at the display marks: rows on a vault book key with a mark are summed; rows with no mark or no key are counted, never valued.
*VaultMarketsApi* | [**listVaultMarketConfirmations**](docs/Api/VaultMarketsApi.md#listvaultmarketconfirmations) | **GET** /v1/vault-markets/confirmations | Trade confirmations for your fills in a window (default 31 days): price, sale fee, maker or taker, order, vault unit and warehouse receipt.
*VaultMarketsApi* | [**listVaultMarketCreatorCohostInvites**](docs/Api/VaultMarketsApi.md#listvaultmarketcreatorcohostinvites) | **GET** /v1/vault-markets/creators/cohost-invites | For creators: your invites from Crossly to co-host a Market Open launch show (invited, accepted, declined or withdrawn), each with the key, its show and the guidance for co-hosts.
*VaultMarketsApi* | [**listVaultMarketCredit**](docs/Api/VaultMarketsApi.md#listvaultmarketcredit) | **GET** /v1/vault-markets/credit | Your vault loans and advances (live by default): what is owed, interest accrued, loan-to-value, the liquidation line and the collateral value it is called at.
*VaultMarketsApi* | [**listVaultMarketDealerBands**](docs/Api/VaultMarketsApi.md#listvaultmarketdealerbands) | **GET** /v1/vault-markets/dealer/bands | Your Instant Exit bands and whether each is being kept now.
*VaultMarketsApi* | [**listVaultMarketDealerBids**](docs/Api/VaultMarketsApi.md#listvaultmarketdealerbids) | **GET** /v1/vault-markets/dealer/bids | Your standing dealer bids: open (default) or all.
*VaultMarketsApi* | [**listVaultMarketDealerPoolFills**](docs/Api/VaultMarketsApi.md#listvaultmarketdealerpoolfills) | **GET** /v1/vault-markets/dealer/pools/{id}/fills | A curve pool&#39;s fills, newest first: side, price and spot after.
*VaultMarketsApi* | [**listVaultMarketDealerPools**](docs/Api/VaultMarketsApi.md#listvaultmarketdealerpools) | **GET** /v1/vault-markets/dealer/pools | Your curve pools: open (default) or all, each with its curve, spot, units, buy budget, running totals, the ladder it shows and its live legs.
*VaultMarketsApi* | [**listVaultMarketDigestHistory**](docs/Api/VaultMarketsApi.md#listvaultmarketdigesthistory) | **GET** /v1/vault-markets/digest/history | Past weekly digests: week, status (sent / skipped / failed), the channels used and a summary.
*VaultMarketsApi* | [**listVaultMarketEntityAudit**](docs/Api/VaultMarketsApi.md#listvaultmarketentityaudit) | **GET** /v1/vault-markets/entities/{id}/audit | The entity&#39;s audit trail, newest first: hash-chained rows with actor, account, API key, IP, session and source.
*VaultMarketsApi* | [**listVaultMarketEntityConversions**](docs/Api/VaultMarketsApi.md#listvaultmarketentityconversions) | **GET** /v1/vault-markets/entities/{id}/conversions | The custodian&#39;s CBX-to-USD reward conversions for an entity that elected USD, newest first, with their status.
*VaultMarketsApi* | [**listVaultMarketEstimatesAccuracy**](docs/Api/VaultMarketsApi.md#listvaultmarketestimatesaccuracy) | **GET** /v1/vault-markets/estimates-accuracy | The Crossly Estimate&#39;s track record: walk-forward backtest n, FSD and bias per method, category and liquidity bucket, and whether estimates in that cell are shown.
*VaultMarketsApi* | [**listVaultMarketFeed**](docs/Api/VaultMarketsApi.md#listvaultmarketfeed) | **GET** /v1/vault-markets/feed | New vault buys by the people you follow who share them, newest first (no prices). Page with &#x60;before&#x60; (the last item&#39;s &#x60;at&#x60;).
*VaultMarketsApi* | [**listVaultMarketFollowCopyWatch**](docs/Api/VaultMarketsApi.md#listvaultmarketfollowcopywatch) | **GET** /v1/vault-markets/follows/copy-watch | The collectors you copy-watch and whether each still shares bids and asks.
*VaultMarketsApi* | [**listVaultMarketFollowCopyWatchAlerts**](docs/Api/VaultMarketsApi.md#listvaultmarketfollowcopywatchalerts) | **GET** /v1/vault-markets/follows/copy-watch/alerts | Your copy-watch alerts, newest first: who, bid or ask, quantity, limit price, market, and whether it still rests. Page with &#x60;before&#x60;.
*VaultMarketsApi* | [**listVaultMarketFollowFeed**](docs/Api/VaultMarketsApi.md#listvaultmarketfollowfeed) | **GET** /v1/vault-markets/follows/feed | Public vault activity of the collectors you follow (buys, units sent in, sales, Hall loans), newest first, never a price. Filter with &#x60;kinds&#x60;; page with &#x60;before&#x60;.
*VaultMarketsApi* | [**listVaultMarketFollowFollowing**](docs/Api/VaultMarketsApi.md#listvaultmarketfollowfollowing) | **GET** /v1/vault-markets/follows/following | The collectors you follow who have a public vault: what each shares and whether you copy-watch them.
*VaultMarketsApi* | [**listVaultMarketFollowLeaderboards**](docs/Api/VaultMarketsApi.md#listvaultmarketfollowleaderboards) | **GET** /v1/vault-markets/follows/leaderboards | An opt-in return leaderboard (&#x60;period&#x60; 30d, 90d or 365d; &#x60;category&#x60; all or a category slug), ranked by risk-adjusted return from the book A/B marks. Percent and risk only: no dollars, no volume.
*VaultMarketsApi* | [**listVaultMarketFollowProfileActivity**](docs/Api/VaultMarketsApi.md#listvaultmarketfollowprofileactivity) | **GET** /v1/vault-markets/follows/profiles/{handle}/activity | One collector public vault activity, newest first, never a price. 404 when their vault is not public.
*VaultMarketsApi* | [**listVaultMarketGifts**](docs/Api/VaultMarketsApi.md#listvaultmarketgifts) | **GET** /v1/vault-markets/gifts | Gifts you sent and received, newest first, with their status.
*VaultMarketsApi* | [**listVaultMarketGradeToVault**](docs/Api/VaultMarketsApi.md#listvaultmarketgradetovault) | **GET** /v1/vault-markets/grade-to-vault | Your Grade to Vault flows, newest first, each brought up to date: its step, the grading submission, the unit, the grade, the market for it, and the ask once listed. &#x60;live&#x3D;1&#x60; for those still going.
*VaultMarketsApi* | [**listVaultMarketGrading**](docs/Api/VaultMarketsApi.md#listvaultmarketgrading) | **GET** /v1/vault-markets/grading | Your vault units sent to grading: where each card is in its run, and the grade once it is back.
*VaultMarketsApi* | [**listVaultMarketHallLenders**](docs/Api/VaultMarketsApi.md#listvaultmarkethalllenders) | **GET** /v1/vault-markets/hall/lenders | The vault units lent to this week&#39;s Hall of Grails exhibition and on show now, in plinth order: the item (skuId, name, imageUrl, grade), the lender as the plate names them (a display name, or \&quot;a collector\&quot;), the plate lines and how many exhibitions the unit has stood in. meta.exhibition is the week (key, title, endsAt). Names no ids and no amounts.
*VaultMarketsApi* | [**listVaultMarketIndexCommitteeMinutes**](docs/Api/VaultMarketsApi.md#listvaultmarketindexcommitteeminutes) | **GET** /v1/vault-markets/index-committee/minutes | Published Index Committee minutes, newest first: attendees (names and roles), quorum, agenda, minutes and decisions.
*VaultMarketsApi* | [**listVaultMarketIndexComplaints**](docs/Api/VaultMarketsApi.md#listvaultmarketindexcomplaints) | **GET** /v1/vault-markets/index-complaints | Your complaints and their answers, newest first.
*VaultMarketsApi* | [**listVaultMarketIndexConstituents**](docs/Api/VaultMarketsApi.md#listvaultmarketindexconstituents) | **GET** /v1/vault-markets/indexes/{slug}/constituents | The book keys in an index with their weight, move since the last close and contribution to the index&#39;s move (basis points).
*VaultMarketsApi* | [**listVaultMarketIndexConsultations**](docs/Api/VaultMarketsApi.md#listvaultmarketindexconsultations) | **GET** /v1/vault-markets/index-consultations | Consultations on index method changes (open for at least 30 days), newest first. Filter by &#x60;status&#x60;.
*VaultMarketsApi* | [**listVaultMarketIndexEvents**](docs/Api/VaultMarketsApi.md#listvaultmarketindexevents) | **GET** /v1/vault-markets/index-events | Every index event, newest first: add, delete, rebalance, method, correction, halt; each with when it was announced, when it takes effect, the detail and the reason. Filter by &#x60;kind&#x60;.
*VaultMarketsApi* | [**listVaultMarketIndexEventsBySlug**](docs/Api/VaultMarketsApi.md#listvaultmarketindexeventsbyslug) | **GET** /v1/vault-markets/indexes/{slug}/events | One index&#39;s events, newest first.
*VaultMarketsApi* | [**listVaultMarketIndexJudgments**](docs/Api/VaultMarketsApi.md#listvaultmarketindexjudgments) | **GET** /v1/vault-markets/index-judgments | The expert-judgment log: every Index Committee action (halt, resume, exclude a key, void a trade, restate, retire) with its written reason.
*VaultMarketsApi* | [**listVaultMarketIndexLevelSeries**](docs/Api/VaultMarketsApi.md#listvaultmarketindexlevelseries) | **GET** /v1/vault-markets/indexes/{slug}/level-series | An index&#39;s published levels. &#x60;engine&#x3D;chain&#x60; (default): daily closes. &#x60;engine&#x3D;tpd|repeat_sales&#x60;: weekly (else monthly) model estimates with a 95% band and n; labelled, never a price. &#x60;series&#x3D;settlement&#x60; returns each value as first published (never restated). Below the data gate &#x60;data&#x60; is empty and &#x60;notice&#x60; explains.
*VaultMarketsApi* | [**listVaultMarketIndexLicenceMine**](docs/Api/VaultMarketsApi.md#listvaultmarketindexlicencemine) | **GET** /v1/vault-markets/index-licence/mine | Your index feed licences (the indexes each covers, or all), as ops recorded them. No licence: the feed answers 403 not_a_licensee.
*VaultMarketsApi* | [**listVaultMarketIndexMembers**](docs/Api/VaultMarketsApi.md#listvaultmarketindexmembers) | **GET** /v1/vault-markets/indexes/{slug}/members | The members of an index on a day (&#x60;asOf&#x60;, default today) with their weights, shares, moves and contributions; for a past day, the inputs stored with that day&#39;s close and each member&#39;s effective dates.
*VaultMarketsApi* | [**listVaultMarketIndexMovers**](docs/Api/VaultMarketsApi.md#listvaultmarketindexmovers) | **GET** /v1/vault-markets/indexes/movers | The built-in indexes that moved most since their last daily close.
*VaultMarketsApi* | [**listVaultMarketIndexes**](docs/Api/VaultMarketsApi.md#listvaultmarketindexes) | **GET** /v1/vault-markets/indexes | Indexes over book keys: per category, per top brand, the Crossly 50 and your own. Each with its level now (base 1000 at inception) and change since the last daily close.
*VaultMarketsApi* | [**listVaultMarketInstantExitHistory**](docs/Api/VaultMarketsApi.md#listvaultmarketinstantexithistory) | **GET** /v1/vault-markets/instant-exit/history | Your Instant Exits, newest first: quoted price, mark, and whether it filled.
*VaultMarketsApi* | [**listVaultMarketInstantExitHoldings**](docs/Api/VaultMarketsApi.md#listvaultmarketinstantexitholdings) | **GET** /v1/vault-markets/instant-exit/holdings | Instant Exit quotes for everything you hold in the vault, one per book key, with units held and which are free to sell.
*VaultMarketsApi* | [**listVaultMarketJointTrades**](docs/Api/VaultMarketsApi.md#listvaultmarketjointtrades) | **GET** /v1/vault-markets/joint/{id}/trades | The joint vault trades, newest first: side, book key, limit, who started it, whose account the order sits on, and the order standing on the book.
*VaultMarketsApi* | [**listVaultMarketLargeTraderReports**](docs/Api/VaultMarketsApi.md#listvaultmarketlargetraderreports) | **GET** /v1/vault-markets/large-trader-reports | Your large-trader reports (with any linked accounts, as one party): due first, then filed, then cleared in the last 90 days. Each has &#x60;action&#x60;: file | amend | refile | none.
*VaultMarketsApi* | [**listVaultMarketLendingStatements**](docs/Api/VaultMarketsApi.md#listvaultmarketlendingstatements) | **GET** /v1/vault-markets/lending/statements | The days you have stored collateral statements for, newest first, with their summary.
*VaultMarketsApi* | [**listVaultMarketLoans**](docs/Api/VaultMarketsApi.md#listvaultmarketloans) | **GET** /v1/vault-markets/loans | Units you lent: rate, fees earned, recall due.
*VaultMarketsApi* | [**listVaultMarketLocateMine**](docs/Api/VaultMarketsApi.md#listvaultmarketlocatemine) | **GET** /v1/vault-markets/locates/mine | Your locates, newest first (held / used / released / expired).
*VaultMarketsApi* | [**listVaultMarketMidpoint**](docs/Api/VaultMarketsApi.md#listvaultmarketmidpoint) | **GET** /v1/vault-markets/midpoint | Your midpoint block orders.
*VaultMarketsApi* | [**listVaultMarketMovers**](docs/Api/VaultMarketsApi.md#listvaultmarketmovers) | **GET** /v1/vault-markets/movers | Vault items with the biggest 24 h moves in their market price (from the order book), with units in the vault.
*VaultMarketsApi* | [**listVaultMarketNavHistory**](docs/Api/VaultMarketsApi.md#listvaultmarketnavhistory) | **GET** /v1/vault-markets/nav/history | Daily NAV snapshots (mark, bid, liquidation, Level 2 / Level 3).
*VaultMarketsApi* | [**listVaultMarketOffers**](docs/Api/VaultMarketsApi.md#listvaultmarketoffers) | **GET** /v1/vault-markets/offers | The offers inbox: for each book key you hold, the best bid from someone else, units at it, the top bid levels, the mark, and your alert.
*VaultMarketsApi* | [**listVaultMarketOpening**](docs/Api/VaultMarketsApi.md#listvaultmarketopening) | **GET** /v1/vault-markets/opening | Keys opening soon on the vault book (and just opened): units on the shelf, dealers quoting, the waitlist, the mark when the book has one, and your place.
*VaultMarketsApi* | [**listVaultMarketOracleHistory**](docs/Api/VaultMarketsApi.md#listvaultmarketoraclehistory) | **GET** /v1/vault-markets/oracle/{slug}/history | Recent publish attempts for an index over 30 days, newest first: published, skipped (with the reason: too few items priced, stale marks, confidence too wide...) or failed (with the error). Filter with &#x60;status&#x60;, cap with &#x60;limit&#x60; (default 100).
*VaultMarketsApi* | [**listVaultMarketP2pAuctions**](docs/Api/VaultMarketsApi.md#listvaultmarketp2pauctions) | **GET** /v1/vault-markets/p2p/auctions | Running refinancing auctions, soonest to end first: lenders calls (&#x60;auction&#x60;) and borrowers looking for a cheaper lender (&#x60;refiAuction&#x60;). The payoff now, the rate a new lender gets now, when it ends, and the item.
*VaultMarketsApi* | [**listVaultMarketP2pLoans**](docs/Api/VaultMarketsApi.md#listvaultmarketp2ploans) | **GET** /v1/vault-markets/p2p/loans | Your P2P loans as borrower and/or lender (&#x60;role&#x60;), live by default (&#x60;status&#x60;): what is owed now, daily interest, the refinancing auction when called, and the item mark for information only (it never triggers anything).
*VaultMarketsApi* | [**listVaultMarketP2pOfferMine**](docs/Api/VaultMarketsApi.md#listvaultmarketp2poffermine) | **GET** /v1/vault-markets/p2p/offers/mine | Your P2P loan offers, newest first, with how many loans each has funded.
*VaultMarketsApi* | [**listVaultMarketP2pOffers**](docs/Api/VaultMarketsApi.md#listvaultmarketp2poffers) | **GET** /v1/vault-markets/p2p/offers | The open P2P loan offers book, lowest rate first: cents offered per loan, APR (bps), loans left, and the item (book key) or unit each lends against. &#x60;bookKey&#x60; narrows to one item. Lender identities are never shown.
*VaultMarketsApi* | [**listVaultMarketP2pUnits**](docs/Api/VaultMarketsApi.md#listvaultmarketp2punits) | **GET** /v1/vault-markets/p2p/units | Your vault units for P2P borrowing: whether each can be pledged now (and why not), the best offers covering it, and its loan when it has one.
*VaultMarketsApi* | [**listVaultMarketPaperFills**](docs/Api/VaultMarketsApi.md#listvaultmarketpaperfills) | **GET** /v1/vault-markets/paper/fills | Your paper fills since your last reset, newest first: price, simulated fee, taker or maker, and whether a visible real order (book) or a real trade (tape) filled it. Play money only.
*VaultMarketsApi* | [**listVaultMarketPaperLeaderboard**](docs/Api/VaultMarketsApi.md#listvaultmarketpaperleaderboard) | **GET** /v1/vault-markets/paper/leaderboard | The weekly paper trading leaderboard (opt-in, display names only): best return on play equity this week (or a past &#x60;week&#x60;, its Monday as YYYY-MM-DD), with your own line. Nothing is won or paid.
*VaultMarketsApi* | [**listVaultMarketPaperMissions**](docs/Api/VaultMarketsApi.md#listvaultmarketpapermissions) | **GET** /v1/vault-markets/paper/missions | Your paper-trading missions (play money only): each mission with what to do, your count toward its target, whether it is done and when, plus a suggested market for the \&quot;Read the mark\&quot; mission. Progress is observed by the server from your paper orders and fills, price watches, set goals and graded mark checks. Missions earn world quest progress and cosmetic pins, never money.
*VaultMarketsApi* | [**listVaultMarketPaperOrders**](docs/Api/VaultMarketsApi.md#listvaultmarketpaperorders) | **GET** /v1/vault-markets/paper/orders | Your paper orders since your last reset, newest first: working, done (filled, cancelled, expired) or all. Play money only.
*VaultMarketsApi* | [**listVaultMarketPartnerAccruals**](docs/Api/VaultMarketsApi.md#listvaultmarketpartneraccruals) | **GET** /v1/vault-markets/partners/accruals | Your partner fee shares, newest first: accrued on a unit&#39;s first sale, paid in Bucks once the sale is final, void if it was refunded.
*VaultMarketsApi* | [**listVaultMarketPoolStakes**](docs/Api/VaultMarketsApi.md#listvaultmarketpoolstakes) | **GET** /v1/vault-markets/pool/stakes | Your stakes in the market pool and what each redeems for now.
*VaultMarketsApi* | [**listVaultMarketPortfolioMarginHistory**](docs/Api/VaultMarketsApi.md#listvaultmarketportfoliomarginhistory) | **GET** /v1/vault-markets/portfolio-margin/history | The 5-minute portfolio margin recalculations for a firm sub-account over the last &#x60;hours&#x60; (default 24, at most 720), newest first: equity, requirement, excess, scenario and floor figures, gross and state.
*VaultMarketsApi* | [**listVaultMarketPositionUnits**](docs/Api/VaultMarketsApi.md#listvaultmarketpositionunits) | **GET** /v1/vault-markets/positions/{id}/units | The vault units of one of your positions that you hold (a leveraged long&#39;s collateral), each with its story link.
*VaultMarketsApi* | [**listVaultMarketPositions**](docs/Api/VaultMarketsApi.md#listvaultmarketpositions) | **GET** /v1/vault-markets/positions | Your positions, live (default) or closed.
*VaultMarketsApi* | [**listVaultMarketPositionsRisk**](docs/Api/VaultMarketsApi.md#listvaultmarketpositionsrisk) | **GET** /v1/vault-markets/positions-risk | For each live position: its tier, health, margin state, the mark at which it is called and the mark at which it is liquidated, and the distance to it.
*VaultMarketsApi* | [**listVaultMarketPriceWidgets**](docs/Api/VaultMarketsApi.md#listvaultmarketpricewidgets) | **GET** /v1/vault-markets/price-widgets | Your price widgets, newest first, each with its iframe and script-tag snippets. &#x60;meta.codes&#x60; lists your affiliate codes a widget can link through; &#x60;meta.max&#x60; is the cap on live widgets.
*VaultMarketsApi* | [**listVaultMarketProCandles**](docs/Api/VaultMarketsApi.md#listvaultmarketprocandles) | **GET** /v1/vault-markets/pro/candles | OHLCV candles (1m, 5m, 15m, 1h, 4h, 1d) from the trades on a book key.
*VaultMarketsApi* | [**listVaultMarketProEvents**](docs/Api/VaultMarketsApi.md#listvaultmarketproevents) | **GET** /v1/vault-markets/pro/events | Your order event log after a sequence number (new, leg, fill, replaced, cancelled, expired, done): a replayable drop copy.
*VaultMarketsApi* | [**listVaultMarketProLinks**](docs/Api/VaultMarketsApi.md#listvaultmarketprolinks) | **GET** /v1/vault-markets/pro/links | Your linked orders (brackets, OCO pairs, trailing stops, position exits): live (default) or done.
*VaultMarketsApi* | [**listVaultMarketProOrders**](docs/Api/VaultMarketsApi.md#listvaultmarketproorders) | **GET** /v1/vault-markets/pro/orders | Your orders: open (default) or done, optionally on one book key, or only those booked to one sub-account (&#x60;subaccountId&#x60;).
*VaultMarketsApi* | [**listVaultMarketProQuotes**](docs/Api/VaultMarketsApi.md#listvaultmarketproquotes) | **GET** /v1/vault-markets/pro/quotes | Your live quotes.
*VaultMarketsApi* | [**listVaultMarketProRewards**](docs/Api/VaultMarketsApi.md#listvaultmarketprorewards) | **GET** /v1/vault-markets/pro/rewards | Your daily market-maker liquidity rewards (paid in CBX).
*VaultMarketsApi* | [**listVaultMarketProTape**](docs/Api/VaultMarketsApi.md#listvaultmarketprotape) | **GET** /v1/vault-markets/pro/tape | The latest trades on a book key, newest first, with which side made and which took.
*VaultMarketsApi* | [**listVaultMarketProofOfReserveLeaves**](docs/Api/VaultMarketsApi.md#listvaultmarketproofofreserveleaves) | **GET** /v1/vault-markets/proof-of-reserves/{day}/leaves | One day&#39;s leaf hashes in tree order, a page at a time: enough to recount the units and rebuild the root yourself. Leaves are salted, so they name no owner.
*VaultMarketsApi* | [**listVaultMarketRecurring**](docs/Api/VaultMarketsApi.md#listvaultmarketrecurring) | **GET** /v1/vault-markets/recurring | Your recurring buys: key, schedule, price cap, payment, auto-lend, next run.
*VaultMarketsApi* | [**listVaultMarketRecurringRuns**](docs/Api/VaultMarketsApi.md#listvaultmarketrecurringruns) | **GET** /v1/vault-markets/recurring/{id}/runs | One recurring buy&#39;s runs: filled, skipped (with the reason, e.g. the price was over the cap) or failed.
*VaultMarketsApi* | [**listVaultMarketRecurringRuns2**](docs/Api/VaultMarketsApi.md#listvaultmarketrecurringruns2) | **GET** /v1/vault-markets/recurring-runs | Every run of all your recurring buys, newest first.
*VaultMarketsApi* | [**listVaultMarketRfq**](docs/Api/VaultMarketsApi.md#listvaultmarketrfq) | **GET** /v1/vault-markets/rfq | Your quote requests, newest first.
*VaultMarketsApi* | [**listVaultMarketRfqInbox**](docs/Api/VaultMarketsApi.md#listvaultmarketrfqinbox) | **GET** /v1/vault-markets/rfq/inbox | Open quote requests you were sent (as a dealer, DMM, LP or holder), with your live answer.
*VaultMarketsApi* | [**listVaultMarketRfqOpen**](docs/Api/VaultMarketsApi.md#listvaultmarketrfqopen) | **GET** /v1/vault-markets/rfq/open | Open quote requests on one key (all-to-all: anyone with ID may answer). Anonymous.
*VaultMarketsApi* | [**listVaultMarketSetGoalBaskets**](docs/Api/VaultMarketsApi.md#listvaultmarketsetgoalbaskets) | **GET** /v1/vault-markets/set-goals/{id}/baskets | A set goal basket bids, newest first, each with its budget, what it committed and spent, and every leg (piece, book key, limit, pro order id, status).
*VaultMarketsApi* | [**listVaultMarketSetGoalSets**](docs/Api/VaultMarketsApi.md#listvaultmarketsetgoalsets) | **GET** /v1/vault-markets/set-goals/sets | Sets to start a goal on. With q (2+ characters): a word-start search of every catalogue set. Without: the sets you hold pieces of in the vault, then the collections you are building. Each with your live goal on it, if any.
*VaultMarketsApi* | [**listVaultMarketSetGoals**](docs/Api/VaultMarketsApi.md#listvaultmarketsetgoals) | **GET** /v1/vault-markets/set-goals | Your set goals: the set, the target a piece must meet, pieces held of the total (from your vault), and the working basket bid.
*VaultMarketsApi* | [**listVaultMarketShareCards**](docs/Api/VaultMarketsApi.md#listvaultmarketsharecards) | **GET** /v1/vault-markets/share-cards | Your share cards (not taken down), each as the public sees it.
*VaultMarketsApi* | [**listVaultMarketSupplyDeposits**](docs/Api/VaultMarketsApi.md#listvaultmarketsupplydeposits) | **GET** /v1/vault-markets/supply/deposits | Your units sent to the vault, newest first, each with its state and its key&#39;s Instant Exit line (\&quot;Instant Exit now: $X (N% of mark)\&quot; or \&quot;No market yet\&quot;). Filter with &#x60;inventoryItemIds&#x60; (comma-separated).
*VaultMarketsApi* | [**listVaultMarketSupplyInvites**](docs/Api/VaultMarketsApi.md#listvaultmarketsupplyinvites) | **GET** /v1/vault-markets/supply/invites | Market Open invites to you as a dealer: keys Crossly is opening and asks you to quote.
*VaultMarketsApi* | [**listVaultMarketValuationStatements**](docs/Api/VaultMarketsApi.md#listvaultmarketvaluationstatements) | **GET** /v1/vault-markets/valuation-statements | The insurance and appraisal statements you issued, newest first: purpose, date, units, total at the marks, hash and verify link.
*VaultMarketsApi* | [**listVaultMarketVaultSuggestions**](docs/Api/VaultMarketsApi.md#listvaultmarketvaultsuggestions) | **GET** /v1/vault-markets/vault-suggestions | What to send to the vault: your inventory items whose book key has a liquid vault market (tier A, B or C), best first. Each has a score (0 to 100) and its reasons, the market (tier, mark and its quality, best bid, best vault ask, spread), Instant Exit now, your list price, days listed without selling, and the vault fee. &#x60;meta.summary&#x60; counts what was left out and why. Inform only; send with POST /api/v1/vault-markets/supply/send.
*VaultMarketsApi* | [**listVaultMarketWatchlist**](docs/Api/VaultMarketsApi.md#listvaultmarketwatchlist) | **GET** /v1/vault-markets/watchlist | Your watched book keys with mark, 24 h and 7 d change, and the last 30 daily marks (sparkline).
*VaultMarketsApi* | [**listVaultMarketWidgetTokens**](docs/Api/VaultMarketsApi.md#listvaultmarketwidgettokens) | **GET** /v1/vault-markets/widget/tokens | Your live home-screen widget tokens, one per phone: id, name (the phone), public prefix, created and last used. The secret is never returned again.
*VaultMarketsApi* | [**listVaultMarketWorldCohosts**](docs/Api/VaultMarketsApi.md#listvaultmarketworldcohosts) | **GET** /v1/vault-markets/world/cohosts | Market Open launch shows a verified creator co-hosts that are on now or opening soon: the key, its phase, the show, the creator (named only while their vault profile is public), their room link and, when the creator is in the creator programme, the disclosure that they may earn a share of the fee Crossly keeps. Never a prompt to trade.
*VaultMarketsApi* | [**listVaultMarketWorldCreatorRooms**](docs/Api/VaultMarketsApi.md#listvaultmarketworldcreatorrooms) | **GET** /v1/vault-markets/world/creator-rooms | Verified creators whose public vault shelf is a world room: title, the creator, the room link and the disclosure. Rooms show each market share of the shelf, never amounts.
*VaultMarketsApi* | [**listVaultMarketWorldMarketOpen**](docs/Api/VaultMarketsApi.md#listvaultmarketworldmarketopen) | **GET** /v1/vault-markets/world/market-open | Market Open events in the Crossly World Commons: keys opening soon and those that opened in the last few hours, live first then soonest, each with its board line, units on the shelf, dealers quoting and the launch show when there is one. Never a prompt to trade.
*VaultMarketsApi* | [**listVaultReceiptTokenWallets**](docs/Api/VaultMarketsApi.md#listvaultreceipttokenwallets) | **GET** /v1/vault/receipt-tokens/wallets | Your verified Solana wallets and whether each is on the receipt-token allow-list (receipt tokens move only between allow-listed wallets). meta.state is the gate.
*VaultMarketsApi* | [**listVaultReceiptTokens**](docs/Api/VaultMarketsApi.md#listvaultreceipttokens) | **GET** /v1/vault/receipt-tokens | Your vault units with their warehouse receipt and receipt-token state (not exported, waiting for a signature, in a wallet, frozen, redeemed), whether each can be exported now and why not. meta.state is the gate (open, missing envs, program id, authority, terms version, cluster); meta.history is your last 50 exports.
*VaultMarketsApi* | [**listVaultReceipts**](docs/Api/VaultMarketsApi.md#listvaultreceipts) | **GET** /v1/vault/receipts | Your warehouse receipts (documents of title for your vault units), live first. meta.receipts says whether receipts are registered (VAULT_WAREHOUSE_ISSUER) and their terms version.
*VaultMarketsApi* | [**listVaultUnitList**](docs/Api/VaultMarketsApi.md#listvaultunitlist) | **GET** /v1/vault/unit-list | The published unit list (bar-list equivalent): every unit on a vault shelf with its warehouse receipt number (when receipts are registered), book key, shelf location code, insured value, status, pledged / on-loan flags and a per-receipt hashed holder (never a name or id). Filter with &#x60;bookKey&#x60;; pages with &#x60;page&#x60; / &#x60;limit&#x60;.
*VaultMarketsApi* | [**updateVaultMarketAlertPref**](docs/Api/VaultMarketsApi.md#updatevaultmarketalertpref) | **PUT** /v1/vault-markets/alert-prefs | Change vault alert settings: &#x60;matrix&#x60; ({ kind: { channel: true|false } }, merged onto what is set), &#x60;quietHours&#x60; ({ start: \&quot;HH:MM\&quot;, end: \&quot;HH:MM\&quot;, tz } or null to clear) and &#x60;telegram&#x60; (the Telegram master switch). Locked switches are ignored. Returns the new settings.
*VaultMarketsApi* | [**updateVaultMarketBlockAllocation**](docs/Api/VaultMarketsApi.md#updatevaultmarketblockallocation) | **PUT** /v1/vault-markets/blocks/{orderId}/allocation | Post-trade allocation: set or replace the plan for a buy you placed for one of the entity&#39;s sub-accounts (that sub-account leads). Refused once any share has moved.
*VaultMarketsApi* | [**updateVaultMarketChannel**](docs/Api/VaultMarketsApi.md#updatevaultmarketchannel) | **PUT** /v1/vault-markets/channels | Change the switches: &#x60;telegramAlerts&#x60;, &#x60;telegramDigest&#x60;, &#x60;pushCapPerDay&#x60; (0 to 20). Margin calls and recalls are never capped. Returns the new view.
*VaultMarketsApi* | [**updateVaultMarketDealerBand**](docs/Api/VaultMarketsApi.md#updatevaultmarketdealerband) | **PUT** /v1/vault-markets/dealer/bands | Commit to an Instant Exit band on a key: a standing bid for &#x60;units&#x60; kept at &#x60;bandBps&#x60; of the mark, never above &#x60;maxPriceCents&#x60;, re-quoted as the mark moves.
*VaultMarketsApi* | [**updateVaultMarketDealerPool**](docs/Api/VaultMarketsApi.md#updatevaultmarketdealerpool) | **PATCH** /v1/vault-markets/dealer/pools/{id} | Change a curve pool: spot, step, fee, levels, units, buy budget, floor, ceiling, or pause / resume. Re-quoted at once.
*VaultMarketsApi* | [**updateVaultMarketEntityMember**](docs/Api/VaultMarketsApi.md#updatevaultmarketentitymember) | **PATCH** /v1/vault-markets/entities/{id}/members/{memberId} | Admin: change a member&#39;s role, limits or sub-accounts. The last admin cannot be demoted.
*VaultMarketsApi* | [**updateVaultMarketEntitySubaccountLimit**](docs/Api/VaultMarketsApi.md#updatevaultmarketentitysubaccountlimit) | **PUT** /v1/vault-markets/entities/{id}/subaccounts/{subId}/limits | Admin: set a sub-account&#39;s limits (per-order notional, units per key, gross, net, leverage), held to the entity&#39;s caps. &#x60;limits: null&#x60; clears them.
*VaultMarketsApi* | [**updateVaultMarketEntityUsdElection**](docs/Api/VaultMarketsApi.md#updatevaultmarketentityusdelection) | **PUT** /v1/vault-markets/entities/{id}/usd-election | Admin: elect USD for the entity (&#x60;usdOnly&#x60;). Its sub-accounts then post collateral in USD only and pay every fee in USD, and any CBX reward paid to one of them is converted to USD by the custodian in that account. Audited; it can be turned off again.
*VaultMarketsApi* | [**updateVaultMarketFollowCopyWatch**](docs/Api/VaultMarketsApi.md#updatevaultmarketfollowcopywatch) | **PUT** /v1/vault-markets/follows/copy-watch/{handle} | Copy-watch a collector who shares bids and asks: you get an alert when they rest a new one. It never places an order for you.
*VaultMarketsApi* | [**updateVaultMarketFollowSharing**](docs/Api/VaultMarketsApi.md#updatevaultmarketfollowsharing) | **PUT** /v1/vault-markets/follows/sharing | Turn sharing switches on or off (&#x60;isPublic&#x60;, &#x60;showBuys&#x60;, &#x60;deposits&#x60;, &#x60;sales&#x60;, &#x60;hallLoans&#x60;, &#x60;orders&#x60;, &#x60;leaderboard&#x60;). A switch shows only what happens after it goes on; all but the profile itself need the profile public.
*VaultMarketsApi* | [**updateVaultMarketHomeUnit**](docs/Api/VaultMarketsApi.md#updatevaultmarkethomeunit) | **PUT** /v1/vault-markets/home/units | Show exactly these vault units in your Crossly World home: { units: [{ vaultItemId, visitors }] }. Units left out come out of their cases; units already standing stay where they are; new ones go into a free display-case or shelf slot, else a glass case of their own along a wall. visitors: true lets people who may enter your home see that unit (default false: only you). Returns placed, unplaced (no free case: the home is full), refused (with why) and the desk. Display only: nothing moves.
*VaultMarketsApi* | [**updateVaultMarketIndex**](docs/Api/VaultMarketsApi.md#updatevaultmarketindex) | **PATCH** /v1/vault-markets/indexes/{slug} | Rename, re-weight, share or change the keys of an index of your own; its level carries on.
*VaultMarketsApi* | [**updateVaultMarketLendingElection**](docs/Api/VaultMarketsApi.md#updatevaultmarketlendingelection) | **PUT** /v1/vault-markets/lending/election | Change your lender election (applies to loans opened after the change). Needs lending.
*VaultMarketsApi* | [**updateVaultMarketMmMmp**](docs/Api/VaultMarketsApi.md#updatevaultmarketmmmmp) | **PUT** /v1/vault-markets/mm/mmp | Set market-maker protection: N units or $X filled on your quotes within T seconds pulls every quote and freezes quoting for a set time.
*VaultMarketsApi* | [**updateVaultMarketMode**](docs/Api/VaultMarketsApi.md#updatevaultmarketmode) | **PUT** /v1/vault-markets/mode | Choose your Vault Markets mode: &#x60;mode&#x60; simple or pro. Remembered for you on the web and in the app. A display preference only: it places nothing and moves no money.
*VaultMarketsApi* | [**updateVaultMarketOfferAlert**](docs/Api/VaultMarketsApi.md#updatevaultmarketofferalert) | **PUT** /v1/vault-markets/offers/alert | Set (or clear with null) the bid price that should always notify you on a key you hold, and mute or unmute offer notices on it.
*VaultMarketsApi* | [**updateVaultMarketPaperLeaderboard**](docs/Api/VaultMarketsApi.md#updatevaultmarketpaperleaderboard) | **PUT** /v1/vault-markets/paper/leaderboard | Join or leave the weekly paper leaderboard. Joining needs a display name (2 to 24 letters, numbers, spaces, dots, dashes or underscores), never your real name. Returns &#x60;{ optIn, displayName }&#x60;.
*VaultMarketsApi* | [**updateVaultMarketPositionExit**](docs/Api/VaultMarketsApi.md#updatevaultmarketpositionexit) | **PUT** /v1/vault-markets/positions/{id}/exits | Set a position&#39;s take-profit / stop-loss: a long is closed, a short covered, when the last trade reaches one. Both null clears them.
*VaultMarketsApi* | [**updateVaultMarketPriceWidget**](docs/Api/VaultMarketsApi.md#updatevaultmarketpricewidget) | **PATCH** /v1/vault-markets/price-widgets/{id} | Change a widget: name, range, layout, theme, affiliate code (null for none) or allowed sites. The market or index it shows never changes: make a new widget for another.
*VaultMarketsApi* | [**updateVaultMarketProfile**](docs/Api/VaultMarketsApi.md#updatevaultmarketprofile) | **PUT** /v1/vault-markets/profile | Turn your public vault profile on or off (&#x60;isPublic&#x60;) and whether followers see your new buys (&#x60;showBuys&#x60;). It shows weights by market, never dollars.
*VaultMarketsApi* | [**updateVaultMarketRecurring**](docs/Api/VaultMarketsApi.md#updatevaultmarketrecurring) | **PATCH** /v1/vault-markets/recurring/{id} | Change a recurring buy&#39;s schedule, caps, cards or auto-lend, or pause / resume it.
*VaultMarketsApi* | [**updateVaultMarketSetGoal**](docs/Api/VaultMarketsApi.md#updatevaultmarketsetgoal) | **PATCH** /v1/vault-markets/set-goals/{id} | Change what a piece must be to count (condition, grade mode, grade). Refused while a basket bid works: cancel it first.
*VaultMarketsApi* | [**updateVaultMarketShareCard**](docs/Api/VaultMarketsApi.md#updatevaultmarketsharecard) | **PATCH** /v1/vault-markets/share-cards/{id} | Show or hide the dollar amounts on one of your share cards (&#x60;showAmounts&#x60;).
*VaultMarketsApi* | [**updateVaultMarketSupplyDeposit**](docs/Api/VaultMarketsApi.md#updatevaultmarketsupplydeposit) | **PATCH** /v1/vault-markets/supply/deposits/{id} | Change a deposit&#39;s toggles: &#x60;autoListBps&#x60; (list at that share of the mark once stored; null &#x3D; do not) and &#x60;lendWhenIdle&#x60;.
*VaultMarketsApi* | [**updateVaultMarketSupplyRoundUp**](docs/Api/VaultMarketsApi.md#updatevaultmarketsupplyroundup) | **PUT** /v1/vault-markets/supply/round-up | Set the round-up: &#x60;shareBps&#x60; (1%-50%) of each payout released to you adds to a budget; when it covers the cheapest vault unit on &#x60;bookKey&#x60;, one unit is bought with your saved card, never above the budget.
*VaultMarketsApi* | [**updateVaultMarketTodBeneficiary**](docs/Api/VaultMarketsApi.md#updatevaultmarkettodbeneficiary) | **PUT** /v1/vault-markets/tod/beneficiaries | Replace your beneficiary list (keep an id to edit one): full name, contact (email or @username), relationship, and share in basis points; shares add up to 10000. Returns &#x60;{ beneficiaries, removed }&#x60;.
*VaultMarketsApi* | [**updateVaultMarketTodDesignation**](docs/Api/VaultMarketsApi.md#updatevaultmarkettoddesignation) | **PUT** /v1/vault-markets/tod/designations | Leave one of your units to one beneficiary (beneficiaryId null clears it; the unit then follows the shares). Returns &#x60;{ vaultItemId, beneficiaryId }&#x60;.
*VaultMarketsApi* | [**updateVaultMarketWorldRoomVaultGate**](docs/Api/VaultMarketsApi.md#updatevaultmarketworldroomvaultgate) | **PUT** /v1/vault-markets/world/rooms/{id}/vault-gate | Set the vault-holder door on your own room (its collection rooms follow): visitors must hold minValueCents (cents, at reliable A/B marks) and/or minUnits units in the Crossly vault, mode any (either) or all (both), optionally only one product (scope kind product, ref the catalogue product id), bullion family (bullion, the family slug) or category (category, the slug). Send null to open it again. Returns &#x60;{ gate }&#x60;. Moves no money.
*VaultMarketsApi* | [**updateVaultMarketWorldSpaceVaultGate**](docs/Api/VaultMarketsApi.md#updatevaultmarketworldspacevaultgate) | **PUT** /v1/vault-markets/world/spaces/{slug}/vault-gate | Set the vault-holder door on a Space you host: the same rule as a room (minValueCents at reliable marks and/or minUnits, mode, optional scope). Send null to open it again. Returns &#x60;{ gate }&#x60;. Moves no money.
*Web3Api* | [**createWeb3Alert**](docs/Api/Web3Api.md#createweb3alert) | **POST** /v1/web3/alerts | Set a price alert on a token, or on a whole collection without tokenId: you are notified when one is listed at or below &#x60;price&#x60; (the chain&#39;s native coin). Setting it again moves the price.
*Web3Api* | [**createWeb3Auction**](docs/Api/Web3Api.md#createweb3auction) | **POST** /v1/web3/auctions | Start an English auction on a token in your linked wallet: &#x60;reserve&#x60; is the opening bid in the chain&#39;s native coin, &#x60;hours&#x60; its length (1–720). Bids must rise 5%; a late bid extends the end by 10 minutes.
*Web3Api* | [**createWeb3AuctionCancel**](docs/Api/Web3Api.md#createweb3auctioncancel) | **POST** /v1/web3/auctions/{id}/cancel | Call off your auction while it has no bids.
*Web3Api* | [**createWeb3CreatorClaim**](docs/Api/Web3Api.md#createweb3creatorclaim) | **POST** /v1/web3/creator/claims | Claim an EVM collection as its creator: its owner() must be one of your verified wallets. Returns &#x60;{ chain, contract }&#x60;.
*Web3Api* | [**createWeb3Crosslist**](docs/Api/Web3Api.md#createweb3crosslist) | **POST** /v1/web3/crosslist | Submit signed Seaport listings for several marketplaces at once (crossly, opensea); results per marketplace.
*Web3Api* | [**createWeb3DropRemind**](docs/Api/Web3Api.md#createweb3dropremind) | **POST** /v1/web3/drops/{id}/remind | Turn the 15-minute reminder for a drop on, or off if it already is. Returns &#x60;{ remindMe }&#x60;.
*Web3Api* | [**createWeb3Favorite**](docs/Api/Web3Api.md#createweb3favorite) | **POST** /v1/web3/favorites | Favourite an NFT, or unfavourite it if it already is. Returns &#x60;{ favorited }&#x60;.
*Web3Api* | [**createWeb3Launch**](docs/Api/Web3Api.md#createweb3launch) | **POST** /v1/web3/launches | Draft a launchpad collection: name, symbol, supply, mint price (wei of the chain’s native currency), schedule, optional holder phase and royalty. Crossly takes 5% of each mint inside the contract.
*Web3Api* | [**createWeb3LaunchAirdrop**](docs/Api/Web3Api.md#createweb3launchairdrop) | **POST** /v1/web3/launches/{id}/airdrop | Plan an airdrop (one free NFT each, up to 500) to &#x60;addresses&#x60; and/or the holders of &#x60;holdersOf&#x60;. Returns the transactions for the owner wallet; no payment moves.
*Web3Api* | [**createWeb3LaunchArt**](docs/Api/Web3Api.md#createweb3launchart) | **POST** /v1/web3/launches/{id}/art | Append per-token art (image URL, name, traits), up to the supply, before the reveal. Returns &#x60;{ count }&#x60;.
*Web3Api* | [**createWeb3LaunchConfirmDeploy**](docs/Api/Web3Api.md#createweb3launchconfirmdeploy) | **POST** /v1/web3/launches/{id}/confirm-deploy | Confirm a sent deploy transaction: the contract must be the Crossly launch contract with this draft’s settings; it then goes live.
*Web3Api* | [**createWeb3LaunchFollowCreator**](docs/Api/Web3Api.md#createweb3launchfollowcreator) | **POST** /v1/web3/launches/{id}/follow-creator | Follow the creator of a launch: their launches are announced to you, and again when each opens. Returns &#x60;{ following }&#x60;.
*Web3Api* | [**createWeb3LaunchReveal**](docs/Api/Web3Api.md#createweb3launchreveal) | **POST** /v1/web3/launches/{id}/reveal | Reveal the art: one random offset maps every token to its asset for good. Returns &#x60;{ revealedAt }&#x60;.
*Web3Api* | [**createWeb3Order**](docs/Api/Web3Api.md#createweb3order) | **POST** /v1/web3/orders | Place a signed Seaport 1.6 order (listing, offer or collection offer) in the Crossly book.
*Web3Api* | [**createWeb3OrderCancel**](docs/Api/Web3Api.md#createweb3ordercancel) | **POST** /v1/web3/orders/{chain}/{hash}/cancel | Take one of your orders out of the Crossly book.
*Web3Api* | [**createWeb3OrderFulfillmentBatch**](docs/Api/Web3Api.md#createweb3orderfulfillmentbatch) | **POST** /v1/web3/orders/fulfillment-batch | Fulfilments for sweeping several listings in one Seaport transaction; unfillable ones are skipped with a reason.
*Web3Api* | [**createWeb3Phygital**](docs/Api/Web3Api.md#createweb3phygital) | **POST** /v1/web3/phygitals | Make an NFT you hold redeemable for one of your physical inventory items.
*Web3Api* | [**createWeb3PhygitalRedeem**](docs/Api/Web3Api.md#createweb3phygitalredeem) | **POST** /v1/web3/phygitals/{id}/redeem | Redeem a phygital you hold (checked on-chain) for its physical item, with a shipping address. Once per phygital.
*Web3Api* | [**createWeb3PhygitalRedemptionShip**](docs/Api/Web3Api.md#createweb3phygitalredemptionship) | **POST** /v1/web3/phygitals/redemptions/{id}/ship | Mark a redemption shipped with its carrier and tracking number; the redeemer is notified.
*Web3Api* | [**createWeb3RaribleDraft**](docs/Api/Web3Api.md#createweb3raribledraft) | **POST** /v1/web3/rarible/draft | Draft a Rarible V2 listing for an NFT in your linked wallet: the EIP-712 order to sign and whether Rarible&#39;s transfer proxy is approved.
*Web3Api* | [**createWeb3RaribleListing**](docs/Api/Web3Api.md#createweb3rariblelisting) | **POST** /v1/web3/rarible/listings | Submit a signed Rarible V2 listing: the signature is verified, then the order is posted to Rarible and recorded.
*Web3Api* | [**createWeb3SolanaListTx**](docs/Api/Web3Api.md#createweb3solanalisttx) | **POST** /v1/web3/solana/{marketplace}/list-tx | Build an unsigned listing transaction on the Crossly book, Tensor or Magic Eden for a Solana NFT in your linked wallet.
*Web3Api* | [**createWeb3SolanaListing**](docs/Api/Web3Api.md#createweb3solanalisting) | **POST** /v1/web3/solana/{marketplace}/listings | Record a Crossly-book, Tensor or Magic Eden listing your wallet sent (read back from the chain first).
*Web3Api* | [**createWeb3SolanaOffer**](docs/Api/Web3Api.md#createweb3solanaoffer) | **POST** /v1/web3/solana/offers | Record a sent bid; it is recorded only once its trade state exists on chain.
*Web3Api* | [**createWeb3SolanaOfferAcceptTx**](docs/Api/Web3Api.md#createweb3solanaofferaccepttx) | **POST** /v1/web3/solana/offers/{hash}/accept-tx | Build the sale into a bid from your linked wallet that holds the NFT (sell + execute_sale, one transaction).
*Web3Api* | [**createWeb3SolanaOfferCancelTx**](docs/Api/Web3Api.md#createweb3solanaoffercanceltx) | **POST** /v1/web3/solana/offers/{hash}/cancel-tx | Build the cancel of your bid: the SOL your other bids do not need comes back.
*Web3Api* | [**createWeb3SolanaOfferConfirm**](docs/Api/Web3Api.md#createweb3solanaofferconfirm) | **POST** /v1/web3/solana/offers/{hash}/confirm | Apply a sent accept or cancel once the chain shows the bid closed.
*Web3Api* | [**createWeb3SolanaOfferTx**](docs/Api/Web3Api.md#createweb3solanaoffertx) | **POST** /v1/web3/solana/offers/tx | Build a bid on a Solana NFT on Crossly&#39;s book for your linked wallet to sign; the SOL goes into your Auction House escrow.
*Web3Api* | [**createWeb3SolanaOrderBuyTx**](docs/Api/Web3Api.md#createweb3solanaorderbuytx) | **POST** /v1/web3/solana/orders/{hash}/buy-tx | Build the unsigned transaction that buys a Solana listing (price capped at the listed price).
*Web3Api* | [**createWeb3SolanaOrderConfirm**](docs/Api/Web3Api.md#createweb3solanaorderconfirm) | **POST** /v1/web3/solana/orders/{hash}/confirm | Apply a sent Solana buy or delist to the book (the transaction is read back from the chain).
*Web3Api* | [**createWeb3SolanaOrderDelistTx**](docs/Api/Web3Api.md#createweb3solanaorderdelisttx) | **POST** /v1/web3/solana/orders/{hash}/delist-tx | Build the unsigned transaction that takes your Solana listing down.
*Web3Api* | [**createWeb3SolanaTensorBidAcceptTx**](docs/Api/Web3Api.md#createweb3solanatensorbidaccepttx) | **POST** /v1/web3/solana/tensor-bids/accept-tx | Build the transaction that sells your NFT into a Tensor bid, never below &#x60;minLamports&#x60;.
*Web3Api* | [**createWeb3SolanaTensorBidCancelTx**](docs/Api/Web3Api.md#createweb3solanatensorbidcanceltx) | **POST** /v1/web3/solana/tensor-bids/cancel-tx | Build the transaction that cancels your Tensor bid.
*Web3Api* | [**createWeb3SolanaTensorBidPlaceTx**](docs/Api/Web3Api.md#createweb3solanatensorbidplacetx) | **POST** /v1/web3/solana/tensor-bids/place-tx | Build a Tensor collection bid (or trait bid with &#x60;trait&#x60;) for your Solana wallet to sign. Price in lamports.
*Web3Api* | [**createWeb3TokenRefresh**](docs/Api/Web3Api.md#createweb3tokenrefresh) | **POST** /v1/web3/tokens/{chain}/{contract}/{tokenId}/refresh | Re-read a token&#39;s metadata from the chain&#39;s provider (name, traits, image — a new image is copied to Crossly&#39;s CDN). Once per token per 10 minutes.
*Web3Api* | [**createWeb3Transaction**](docs/Api/Web3Api.md#createweb3transaction) | **POST** /v1/web3/transactions | Apply a Seaport transaction&#39;s fills and cancels to the Crossly book (read from the receipt).
*Web3Api* | [**createWeb3WalletChallenge**](docs/Api/Web3Api.md#createweb3walletchallenge) | **POST** /v1/web3/wallets/challenge | Start linking a wallet: returns the message the wallet must sign.
*Web3Api* | [**createWeb3WalletSync**](docs/Api/Web3Api.md#createweb3walletsync) | **POST** /v1/web3/wallets/{id}/sync | Import a linked wallet&#39;s NFTs into inventory; archives ones that have left the wallet.
*Web3Api* | [**createWeb3WalletVerify**](docs/Api/Web3Api.md#createweb3walletverify) | **POST** /v1/web3/wallets/verify | Finish linking a wallet with its signature over the challenge message.
*Web3Api* | [**deleteWeb3Alert**](docs/Api/Web3Api.md#deleteweb3alert) | **DELETE** /v1/web3/alerts/{id} | Delete a price alert.
*Web3Api* | [**deleteWeb3HolderPerk**](docs/Api/Web3Api.md#deleteweb3holderperk) | **DELETE** /v1/web3/holder-perks/{id} | Remove a holder perk. Returns &#x60;{ ok }&#x60;.
*Web3Api* | [**deleteWeb3Launch**](docs/Api/Web3Api.md#deleteweb3launch) | **DELETE** /v1/web3/launches/{id} | Delete a launch draft that never went live. Returns &#x60;{ ok }&#x60;.
*Web3Api* | [**deleteWeb3LaunchFollowCreator**](docs/Api/Web3Api.md#deleteweb3launchfollowcreator) | **DELETE** /v1/web3/launches/{id}/follow-creator | Stop following the creator of a launch. Returns &#x60;{ following }&#x60;.
*Web3Api* | [**deleteWeb3MarketplaceKey**](docs/Api/Web3Api.md#deleteweb3marketplacekey) | **DELETE** /v1/web3/marketplace-keys/{marketplace} | Remove your own key for a marketplace; Crossly&#39;s key is used again.
*Web3Api* | [**deleteWeb3Wallet**](docs/Api/Web3Api.md#deleteweb3wallet) | **DELETE** /v1/web3/wallets/{id} | Unlink a wallet. Its NFTs stay in inventory but stop syncing.
*Web3Api* | [**getWeb3Auction**](docs/Api/Web3Api.md#getweb3auction) | **GET** /v1/web3/auctions/{chain}/{contract}/{tokenId} | A token&#39;s live (or latest) auction: reserve, end, top bid, bid count and the minimum next bid.
*Web3Api* | [**getWeb3Browse**](docs/Api/Web3Api.md#getweb3browse) | **GET** /v1/web3/browse | The Web3 directory&#39;s categories and chains, with how many collections each holds.
*Web3Api* | [**getWeb3Collection**](docs/Api/Web3Api.md#getweb3collection) | **GET** /v1/web3/collections/{chain}/{contract} | A collection: metadata and Crossly stats (floor, listed, volume, best collection offer).
*Web3Api* | [**getWeb3CollectionDepth**](docs/Api/Web3Api.md#getweb3collectiondepth) | **GET** /v1/web3/collections/{chain}/{contract}/depth | A collection&#39;s Crossly order book by price level — asks cheapest first, bids dearest first, with running totals — and the floor of every trait value.
*Web3Api* | [**getWeb3CollectionInsight**](docs/Api/Web3Api.md#getweb3collectioninsight) | **GET** /v1/web3/collections/{chain}/{contract}/insights | On-chain insights for a collection: holders, trait counts across the whole collection, recent transfers and a 30-day activity series.
*Web3Api* | [**getWeb3CollectionItem**](docs/Api/Web3Api.md#getweb3collectionitem) | **GET** /v1/web3/collections/{chain}/{contract}/items | A collection&#39;s NFTs: filter by traits (repeat trait&#x3D;Type:Value; OR within a type, AND across), search by name or token id, sort by id, rarity or Crossly price. Whole-collection once indexed.
*Web3Api* | [**getWeb3CollectionTrait**](docs/Api/Web3Api.md#getweb3collectiontrait) | **GET** /v1/web3/collections/{chain}/{contract}/traits | Every trait type and value in a collection, with how many tokens have each.
*Web3Api* | [**getWeb3CollectionTraitToken**](docs/Api/Web3Api.md#getweb3collectiontraittoken) | **GET** /v1/web3/collections/{chain}/{contract}/trait-tokens | Token ids in a collection with one trait — what a trait offer commits to.
*Web3Api* | [**getWeb3Collector**](docs/Api/Web3Api.md#getweb3collector) | **GET** /v1/web3/collector | Your collector perks: how many different NFTs you bought through Crossly, your Collector pin tier, relist rewards paid, and each NFT you still hold with the Bought on Crossly mark.
*Web3Api* | [**getWeb3Creator**](docs/Api/Web3Api.md#getweb3creator) | **GET** /v1/web3/creator/{chain}/{contract} | A collection’s creator dashboard: sales by marketplace and day, estimated royalties, holders, and for a launch the mint revenue and what is waiting to be withdrawn (wei of the chain’s native currency).
*Web3Api* | [**getWeb3CrosslistQuote**](docs/Api/Web3Api.md#getweb3crosslistquote) | **GET** /v1/web3/crosslist/quote | Each marketplace&#39;s terms for listing a token: Crossly fee, OpenSea required fees and zone, Tensor availability.
*Web3Api* | [**getWeb3Featured**](docs/Api/Web3Api.md#getweb3featured) | **GET** /v1/web3/featured | The NFT home&#39;s featured collections: chosen by Crossly, else the hottest.
*Web3Api* | [**getWeb3Inventory**](docs/Api/Web3Api.md#getweb3inventory) | **GET** /v1/web3/inventory/{itemId} | The NFT behind an inventory item: its token, wallet, and open listings on every marketplace (null if it is not an NFT).
*Web3Api* | [**getWeb3LaunchAllowlistRootTx**](docs/Api/Web3Api.md#getweb3launchallowlistroottx) | **GET** /v1/web3/launches/{id}/allowlist/root-tx | The setAllowlistRoot transaction for the allowlist Crossly holds (EVM, live): &#x60;{ chain, from, to, data }&#x60;.
*Web3Api* | [**getWeb3LaunchDeployTx**](docs/Api/Web3Api.md#getweb3launchdeploytx) | **GET** /v1/web3/launches/{id}/deploy-tx | The contract-creation transaction for the draft: send it from the owner wallet, then confirm it. Returns &#x60;{ chain, from, data }&#x60;.
*Web3Api* | [**getWeb3LaunchTool**](docs/Api/Web3Api.md#getweb3launchtool) | **GET** /v1/web3/launches/{id}/tools | A launch’s creator tools: allowlist size and root (and whether the contract has it yet), uploaded art and reveal, supply minted.
*Web3Api* | [**getWeb3OrderFulfillment**](docs/Api/Web3Api.md#getweb3orderfulfillment) | **GET** /v1/web3/orders/{chain}/{hash}/fulfillment | The signed order a taker passes to Seaport, after re-checking it can still fill.
*Web3Api* | [**getWeb3Phygital**](docs/Api/Web3Api.md#getweb3phygital) | **GET** /v1/web3/phygitals/{chain}/{contract}/{tokenId} | A token&#39;s phygital: the physical item it can be redeemed for, and whether it has been.
*Web3Api* | [**getWeb3Phygital2**](docs/Api/Web3Api.md#getweb3phygital2) | **GET** /v1/web3/phygitals | Phygitals you linked (with each redemption and its shipping address) and ones you redeemed.
*Web3Api* | [**getWeb3Portfolio**](docs/Api/Web3Api.md#getweb3portfolio) | **GET** /v1/web3/portfolio | Your NFTs with value (Crossly floor, else recent sales) and cost (what a linked wallet paid), realised sales, and USD totals at each day’s coin price.
*Web3Api* | [**getWeb3PortfolioTax**](docs/Api/Web3Api.md#getweb3portfoliotax) | **GET** /v1/web3/portfolio/tax | One calendar year of NFT disposals from your linked wallets as CSV text: acquired, sold, proceeds, cost basis, gain (coin and USD).
*Web3Api* | [**getWeb3Profile**](docs/Api/Web3Api.md#getweb3profile) | **GET** /v1/web3/profiles/{address} | A wallet&#39;s public profile: NFTs held, open Crossly listings, and activity.
*Web3Api* | [**getWeb3Resolve**](docs/Api/Web3Api.md#getweb3resolve) | **GET** /v1/web3/resolve/{chain}/{slug} | A collection&#39;s chain and contract from its readable URL slug (e.g. eth / boredapeyachtclub).
*Web3Api* | [**getWeb3SolanaCollectionTensorBid**](docs/Api/Web3Api.md#getweb3solanacollectiontensorbid) | **GET** /v1/web3/solana/collections/{collection}/tensor-bids | A Solana collection’s Tensor bids (collection-wide and by trait), best first; price in lamports. Needs your Tensor key.
*Web3Api* | [**getWeb3Token**](docs/Api/Web3Api.md#getweb3token) | **GET** /v1/web3/tokens/{chain}/{contract}/{tokenId} | One NFT: metadata, traits, owner, open listings and offers, activity.
*Web3Api* | [**listWeb3Activity**](docs/Api/Web3Api.md#listweb3activity) | **GET** /v1/web3/activity | Listings, offers, sales and cancels in the Crossly book, newest first.
*Web3Api* | [**listWeb3Alerts**](docs/Api/Web3Api.md#listweb3alerts) | **GET** /v1/web3/alerts | Your NFT price alerts, with the cheapest open Crossly listing each one covers now.
*Web3Api* | [**listWeb3Approvals**](docs/Api/Web3Api.md#listweb3approvals) | **GET** /v1/web3/approvals | Your collections the OpenSea conduit is approved to move, per linked wallet.
*Web3Api* | [**listWeb3Auctions**](docs/Api/Web3Api.md#listweb3auctions) | **GET** /v1/web3/auctions | Live English auctions on the Crossly book, ending soonest first, each with its top bid and the least the next bid can be.
*Web3Api* | [**listWeb3BrowseCollections**](docs/Api/Web3Api.md#listweb3browsecollections) | **GET** /v1/web3/browse/collections | Browse NFT collections by chain, category and name; sort hot (Crossly sales, listings, favourites), new, volume, floor or name.
*Web3Api* | [**listWeb3BrowseTokens**](docs/Api/Web3Api.md#listweb3browsetokens) | **GET** /v1/web3/browse/tokens | Hot NFTs: what is for sale on Crossly first, then tokens from the hottest collections.
*Web3Api* | [**listWeb3Bundles**](docs/Api/Web3Api.md#listweb3bundles) | **GET** /v1/web3/bundles | Open bundle listings (2–30 NFTs for one price), newest first, by chain or by a contract any item is from.
*Web3Api* | [**listWeb3CollectionHistory**](docs/Api/Web3Api.md#listweb3collectionhistory) | **GET** /v1/web3/collections/{chain}/{contract}/history | Daily floor, sales, volume, holders and listed count for a collection, oldest first (up to 365 days).
*Web3Api* | [**listWeb3Collections**](docs/Api/Web3Api.md#listweb3collections) | **GET** /v1/web3/collections | Collections ranked by 30-day Crossly volume, with floor and listed count.
*Web3Api* | [**listWeb3CreatorCollections**](docs/Api/Web3Api.md#listweb3creatorcollections) | **GET** /v1/web3/creator/collections | Collections you are the creator of: your launches, and contracts you claimed by owning them.
*Web3Api* | [**listWeb3Drops**](docs/Api/Web3Api.md#listweb3drops) | **GET** /v1/web3/drops | Upcoming and live NFT drops (curated mints on the creator&#39;s own page), soonest first, with whether you asked to be reminded.
*Web3Api* | [**listWeb3HolderPerks**](docs/Api/Web3Api.md#listweb3holderperks) | **GET** /v1/web3/holder-perks | Your holder perks: percent off your Crossly shop for holders of an NFT collection, best first.
*Web3Api* | [**listWeb3Launches**](docs/Api/Web3Api.md#listweb3launches) | **GET** /v1/web3/launches | Your launchpad collections (drafts and live), newest first, with minted count and phase.
*Web3Api* | [**listWeb3Listings**](docs/Api/Web3Api.md#listweb3listings) | **GET** /v1/web3/listings | Open NFT listings in the Crossly book — the cheapest per token.
*Web3Api* | [**listWeb3MarketplaceKeys**](docs/Api/Web3Api.md#listweb3marketplacekeys) | **GET** /v1/web3/marketplace-keys | Your own marketplace API keys (last four characters only) and whether Crossly&#39;s key covers each marketplace.
*Web3Api* | [**listWeb3Nfts**](docs/Api/Web3Api.md#listweb3nfts) | **GET** /v1/web3/nfts | List the NFTs in your inventory, imported from your linked wallets.
*Web3Api* | [**listWeb3Orders**](docs/Api/Web3Api.md#listweb3orders) | **GET** /v1/web3/orders | Your orders in the Crossly book (listings and offers), any status.
*Web3Api* | [**listWeb3Purchases**](docs/Api/Web3Api.md#listweb3purchases) | **GET** /v1/web3/purchases | NFTs your linked wallets bought — on Crossly or any marketplace the chain feed saw — newest first, with price and whether you still hold each.
*Web3Api* | [**listWeb3Rankings**](docs/Api/Web3Api.md#listweb3rankings) | **GET** /v1/web3/rankings | Collections by sales volume over 24h, 7d or 30d, in one coin: the ETH chains together, or Polygon / Solana on their own.
*Web3Api* | [**listWeb3Reserved**](docs/Api/Web3Api.md#listweb3reserved) | **GET** /v1/web3/reserved | Private listings reserved for one of your linked wallets — only you can see or buy them.
*Web3Api* | [**listWeb3Sales**](docs/Api/Web3Api.md#listweb3sales) | **GET** /v1/web3/sales | The latest NFT sales across the directory, from the chain (Seaport and Blur) and the Crossly book, newest first; page with &#x60;before&#x60;.
*Web3Api* | [**listWeb3Search**](docs/Api/Web3Api.md#listweb3search) | **GET** /v1/web3/search | Find collections by contract address (every chain) or by name.
*Web3Api* | [**listWeb3SearchTokens**](docs/Api/Web3Api.md#listweb3searchtokens) | **GET** /v1/web3/search/tokens | Find tokens by collection name and number: &#39;pudgy 42&#39;, &#39;Bored Ape #1234&#39;.
*Web3Api* | [**listWeb3Wallets**](docs/Api/Web3Api.md#listweb3wallets) | **GET** /v1/web3/wallets | List your verified, linked wallets (EVM and Solana).
*Web3Api* | [**listWeb3Watchlist**](docs/Api/Web3Api.md#listweb3watchlist) | **GET** /v1/web3/watchlist | Your favourited NFTs, with the cheapest open Crossly listing and the last sale of each.
*Web3Api* | [**updateWeb3HolderPerk**](docs/Api/Web3Api.md#updateweb3holderperk) | **PUT** /v1/web3/holder-perks | Set the percent off (100–5000 bps) holders of a collection get across your Crossly shop; one perk per collection.
*Web3Api* | [**updateWeb3LaunchAllowlist**](docs/Api/Web3Api.md#updateweb3launchallowlist) | **PUT** /v1/web3/launches/{id}/allowlist | Replace the early-phase allowlist (up to 10,000 wallets). EVM live launches get back &#x60;rootTx&#x60;, the setAllowlistRoot transaction for the owner wallet.
*Web3Api* | [**updateWeb3MarketplaceKey**](docs/Api/Web3Api.md#updateweb3marketplacekey) | **PUT** /v1/web3/marketplace-keys/{marketplace} | Save your own API key for a marketplace (checked against the marketplace first where it can be); stored encrypted.
*WebhooksApi* | [**createWebhook**](docs/Api/WebhooksApi.md#createwebhook) | **POST** /v1/webhooks | Register a webhook endpoint (returns the signing secret once).
*WebhooksApi* | [**createWebhookTest**](docs/Api/WebhooksApi.md#createwebhooktest) | **POST** /v1/webhooks/{id}/test | Fire a synthetic test.ping delivery to one webhook.
*WebhooksApi* | [**deleteWebhook**](docs/Api/WebhooksApi.md#deletewebhook) | **DELETE** /v1/webhooks/{id} | Delete a webhook endpoint.
*WebhooksApi* | [**getWebhookStream**](docs/Api/WebhooksApi.md#getwebhookstream) | **GET** /v1/webhooks/stream | Stream this account&#39;s webhook events as they happen (SSE).
*WebhooksApi* | [**listWebhooks**](docs/Api/WebhooksApi.md#listwebhooks) | **GET** /v1/webhooks | List your registered webhook endpoints.
*WorkflowsApi* | [**createWorkflowChain**](docs/Api/WorkflowsApi.md#createworkflowchain) | **POST** /v1/workflow-chains | Create a multi-step workflow chain.
*WorkflowsApi* | [**createWorkflowChainRunNow**](docs/Api/WorkflowsApi.md#createworkflowchainrunnow) | **POST** /v1/workflow-chains/{id}/run-now | Enqueue an ad-hoc run of a workflow chain.
*WorkflowsApi* | [**createWorkflowChainToggle**](docs/Api/WorkflowsApi.md#createworkflowchaintoggle) | **POST** /v1/workflow-chains/{id}/toggle | Flip a workflow chain between active and inactive.
*WorkflowsApi* | [**deleteWorkflowChain**](docs/Api/WorkflowsApi.md#deleteworkflowchain) | **DELETE** /v1/workflow-chains/{id} | Delete a workflow chain (cascades steps + runs).
*WorkflowsApi* | [**getWorkflowChain**](docs/Api/WorkflowsApi.md#getworkflowchain) | **GET** /v1/workflow-chains/{id} | Get one workflow chain with its steps.
*WorkflowsApi* | [**listWorkflowChains**](docs/Api/WorkflowsApi.md#listworkflowchains) | **GET** /v1/workflow-chains | List workflow chains with their step graph.
*WorkflowsApi* | [**updateWorkflowChain**](docs/Api/WorkflowsApi.md#updateworkflowchain) | **PUT** /v1/workflow-chains/{id} | Replace a workflow chain wholesale.
*WorldApi* | [**createSpatialInviteAccept**](docs/Api/WorldApi.md#createspatialinviteaccept) | **POST** /v1/spatial/invites/accept | Redeem an invite code (dashes optional); returns the room it opens.
*WorldApi* | [**createSpatialPropertyLeaseWithdraw**](docs/Api/WorldApi.md#createspatialpropertyleasewithdraw) | **POST** /v1/spatial/property/leases/{id}/withdraw | Withdraw a lease offer nobody has accepted yet.
*WorldApi* | [**createSpatialScene**](docs/Api/WorldApi.md#createspatialscene) | **POST** /v1/spatial/scenes | Start a 3D room: a collection (your items on shelves) or a warehouse (racks you arrange). Private until you make it public.
*WorldApi* | [**createSpatialSceneGrant**](docs/Api/WorldApi.md#createspatialscenegrant) | **POST** /v1/spatial/scenes/{id}/grants | Let a specific user into one of your rooms (visitor or staff), no code needed.
*WorldApi* | [**createSpatialSceneInvite**](docs/Api/WorldApi.md#createspatialsceneinvite) | **POST** /v1/spatial/scenes/{id}/invites | Mint an invite code to one of your rooms (visitor or staff, optional expiry in hours). The code is in this response only: just its hash is stored.
*WorldApi* | [**createSpatialSceneNode**](docs/Api/WorldApi.md#createspatialscenenode) | **POST** /v1/spatial/scenes/{id}/nodes | Add a unit (rack, shelf, bin) to one of your warehouse rooms.
*WorldApi* | [**createSpatialScenePlace**](docs/Api/WorldApi.md#createspatialsceneplace) | **POST** /v1/spatial/scenes/{id}/place | Pin an inventory item to a slot in one of your rooms: by warehouse nodeId, or by a collection container key and index.
*WorldApi* | [**createSpatialSceneRename**](docs/Api/WorldApi.md#createspatialscenerename) | **POST** /v1/spatial/scenes/{id}/rename | Rename one of your rooms.
*WorldApi* | [**createSpatialSceneShopPlace**](docs/Api/WorldApi.md#createspatialsceneshopplace) | **POST** /v1/spatial/scenes/{id}/shop/place | Place an inventory item in a section and display of your shop room.
*WorldApi* | [**createSpatialSceneUnpin**](docs/Api/WorldApi.md#createspatialsceneunpin) | **POST** /v1/spatial/scenes/{id}/unpin | Clear every pin in one of your rooms, so it arranges itself again.
*WorldApi* | [**createSpatialSceneVisibility**](docs/Api/WorldApi.md#createspatialscenevisibility) | **POST** /v1/spatial/scenes/{id}/visibility | Make one of your rooms private, unlisted (anyone with the link) or public (in the lobby and searchable).
*WorldApi* | [**createSpatialSceneWarehouseStock**](docs/Api/WorldApi.md#createspatialscenewarehousestock) | **POST** /v1/spatial/scenes/{id}/warehouse/stock | Put an inventory item (or unit) on a rack in one of your warehouse rooms.
*WorldApi* | [**createSpatialShopNeighbourhood**](docs/Api/WorldApi.md#createspatialshopneighbourhood) | **POST** /v1/spatial/shop/neighbourhood | Move your shop to another neighbourhood (by slug).
*WorldApi* | [**createSpatialStreetApply**](docs/Api/WorldApi.md#createspatialstreetapply) | **POST** /v1/spatial/streets/{slug}/apply | Ask to open your shop on a street whose owner reviews applications.
*WorldApi* | [**createSpatialStreetInvite**](docs/Api/WorldApi.md#createspatialstreetinvite) | **POST** /v1/spatial/streets/{slug}/invite | Invite a shop (by its slug) to open on a street you own.
*WorldApi* | [**createWorldAvatarEquip**](docs/Api/WorldApi.md#createworldavatarequip) | **POST** /v1/world/avatar/equip | Wear something you already own -- exactly ONE of { cosmeticId } (a cosmetic you hold), { receiptId } (a Crossly purchase from your closet) or { inventoryItemId } (your own stock). The slot comes from the thing itself; slot is only a fallback for an item with no catalog shape. Replaces whatever was in that slot. Moves no money. Answers the slot and your loadout after the change.
*WorldApi* | [**createWorldAvatarUnequip**](docs/Api/WorldApi.md#createworldavatarunequip) | **POST** /v1/world/avatar/unequip | Take off whatever is in one slot. Idempotent: an empty slot answers removed:false. Answers your loadout after the change.
*WorldApi* | [**createWorldAvatarWearable**](docs/Api/WorldApi.md#createworldavatarwearable) | **POST** /v1/world/avatar/wearables | Author a wearable for a body slot (a mesh profile and params, an asking price in COSM base units as a string). A submission: inactive until an operator approves it.
*WorldApi* | [**createWorldContest**](docs/Api/WorldApi.md#createworldcontest) | **POST** /v1/world/contests | Set up a skill contest on a game placed in your place: title, game (its instance id), entry { mode, feeCents? }, prizes by place, funder, window, attempts. Paid entry needs the operator to allow it where it runs.
*WorldApi* | [**createWorldContestEntrySettlePayment**](docs/Api/WorldApi.md#createworldcontestentrysettlepayment) | **POST** /v1/world/contests/entries/{id}/settle-payment | Read the fee of a paid entry back from Stripe and settle it (safe to repeat).
*WorldApi* | [**createWorldContestJoin**](docs/Api/WorldApi.md#createworldcontestjoin) | **POST** /v1/world/contests/{id}/join | Enter a contest. Free and sponsored contests take you in at once; a paid one answers a client secret to pay the entry fee.
*WorldApi* | [**createWorldConvention**](docs/Api/WorldApi.md#createworldconvention) | **POST** /v1/world/conventions | Host a convention in one of your rooms: title, dates, tables and how sellers get one (invite, free, a fee in cents, or a revenue share in basis points).
*WorldApi* | [**createWorldConventionAccept**](docs/Api/WorldApi.md#createworldconventionaccept) | **POST** /v1/world/conventions/{id}/accept | Accept: your own invitation (no body), or, as host, an application (username).
*WorldApi* | [**createWorldConventionApply**](docs/Api/WorldApi.md#createworldconventionapply) | **POST** /v1/world/conventions/{id}/apply | Ask for a table at a convention.
*WorldApi* | [**createWorldConventionInvite**](docs/Api/WorldApi.md#createworldconventioninvite) | **POST** /v1/world/conventions/{id}/invite | Invite a seller (by shop handle) to a convention you host.
*WorldApi* | [**createWorldConventionPaid**](docs/Api/WorldApi.md#createworldconventionpaid) | **POST** /v1/world/conventions/{id}/paid | As host, record that a seller (username) paid their table fee off-platform. Moves no money.
*WorldApi* | [**createWorldConventionWithdraw**](docs/Api/WorldApi.md#createworldconventionwithdraw) | **POST** /v1/world/conventions/{id}/withdraw | Withdraw your table or decline your invitation; as host, decline someone (username).
*WorldApi* | [**createWorldCrew**](docs/Api/WorldApi.md#createworldcrew) | **POST** /v1/world/crews | Start a crew you own: { name (2-32 chars), tag (2-5 letters or digits, shown on members&#39; nameplates) }. Answers its id and join code. 409 when you are already in a crew.
*WorldApi* | [**createWorldCrewChat**](docs/Api/WorldApi.md#createworldcrewchat) | **POST** /v1/world/crew/chat | Say a line to your crew (body: text, up to 400 characters). Returns data.messages, the crew chat ring (the last 50 lines, kept in memory only), and data.said when your line went out; a blocked or too-quick line is dropped silently. 404 when you are in no crew.
*WorldApi* | [**createWorldCrewJoin**](docs/Api/WorldApi.md#createworldcrewjoin) | **POST** /v1/world/crews/join | Join a crew by the code a member gave you. 404 for an unknown code, 409 when you are already in a crew or it is full (30).
*WorldApi* | [**createWorldCrewLeave**](docs/Api/WorldApi.md#createworldcrewleave) | **POST** /v1/world/crews/leave | Leave your crew. If you own it, the crew is disbanded. Idempotent: leaving when in none succeeds.
*WorldApi* | [**createWorldDecorDesign**](docs/Api/WorldApi.md#createworlddecordesign) | **POST** /v1/world/decor/designs | Author a decor design (what it unlocks, a mesh profile and params, an asking price in COSM base units as a string). Inactive until an operator approves it.
*WorldApi* | [**createWorldDecorDesignSubmit**](docs/Api/WorldApi.md#createworlddecordesignsubmit) | **POST** /v1/world/decor/designs/{id}/submit | Send one of your decor designs to the review queue.
*WorldApi* | [**createWorldDecorRetract**](docs/Api/WorldApi.md#createworlddecorretract) | **POST** /v1/world/decor/retract | Take a placed decor piece back into your inventory; answers the inventory after.
*WorldApi* | [**createWorldDm**](docs/Api/WorldApi.md#createworlddm) | **POST** /v1/world/dms/{userId} | Send a direct message to a friend (a mutual follow; never across a block), up to 400 characters, through the world chat guard. 403 when they are not a friend, 429 when sent too quickly.
*WorldApi* | [**createWorldFollow**](docs/Api/WorldApi.md#createworldfollow) | **POST** /v1/world/follows/{userId} | Follow somebody. When they follow you back you are friends (friends-here, invites, messages). Idempotent.
*WorldApi* | [**createWorldFriendInvite**](docs/Api/WorldApi.md#createworldfriendinvite) | **POST** /v1/world/friends/{userId}/invite | \&quot;Join me\&quot;: send one friend (a mutual follow) a notification with a link to the PUBLIC room you name by slug. 404 when they are not a friend or the room is not public; 429 when you invited them in the last minute.
*WorldApi* | [**createWorldGamePackage**](docs/Api/WorldApi.md#createworldgamepackage) | **POST** /v1/world/games/packages | Submit a game package version for review: files as { path, base64 } (game.json, thumb.png, logic/, scene/, audio/, images/). Checked like the CLI, assets quarantined, the entry document dry-run, then reviewed by a person.
*WorldApi* | [**createWorldGamePackageCheck**](docs/Api/WorldApi.md#createworldgamepackagecheck) | **POST** /v1/world/games/packages/check | Validate a game package exactly as a submission is checked (the shared intake report, your version still free) without storing, uploading or queuing anything: world-kit validate for an agent. Same files body as submit.
*WorldApi* | [**createWorldGameRating**](docs/Api/WorldApi.md#createworldgamerating) | **POST** /v1/world/games/{id}/rating | Rate a game you played, 1 to 5 stars (rating again replaces it). Only players the runner recorded in that game can rate it.
*WorldApi* | [**createWorldGameReport**](docs/Api/WorldApi.md#createworldgamereport) | **POST** /v1/world/games/{id}/report | Report a game: reason broken | unfair | offensive | scam | other, optional detail. Staff review it; the creator is told the reason, never who.
*WorldApi* | [**createWorldGameStoreCheckout**](docs/Api/WorldApi.md#createworldgamestorecheckout) | **POST** /v1/world/games/{id}/store/{item}/checkout | Buy an item or pass from a game store: answers a client secret for the payment; the item is yours once it succeeds.
*WorldApi* | [**createWorldGrailMatch**](docs/Api/WorldApi.md#createworldgrailmatch) | **POST** /v1/world/grails/match | Grail glints: send the ids on show somewhere (listingIds -- listings.id, inventoryIds, skuIds -- catalogue market SKUs; up to 400 each) and get back data.listingIds / data.inventoryIds / data.skuIds: the ones that are things you already want -- an open bid, a watched or wishlisted listing (or one selling the same SKU), a market watch, or a card your deck is missing. Read-only.
*WorldApi* | [**createWorldHallLoan**](docs/Api/WorldApi.md#createworldhallloan) | **POST** /v1/world/hall/loans | Lend a piece from your vault to this week&#39;s Hall of Grails exhibition: { vaultItemId, credit: &#39;name&#39; | &#39;anonymous&#39; }. It shows under your plaque until the exhibition ends; it stays in your vault (still listable and withdrawable), and stops showing if it leaves.
*WorldApi* | [**createWorldHomeAsk**](docs/Api/WorldApi.md#createworldhomeask) | **POST** /v1/world/homes/{slug}/ask | Ask a home owner whether they would sell a piece you saw there (an item or a decor piece).
*WorldApi* | [**createWorldHomeGuestbook**](docs/Api/WorldApi.md#createworldhomeguestbook) | **POST** /v1/world/homes/{slug}/guestbook | Sign a home guestbook (one short line).
*WorldApi* | [**createWorldHomeGuestbookReport**](docs/Api/WorldApi.md#createworldhomeguestbookreport) | **POST** /v1/world/homes/{slug}/guestbook/{id}/report | Report a guestbook entry to moderation.
*WorldApi* | [**createWorldHuntStart**](docs/Api/WorldApi.md#createworldhuntstart) | **POST** /v1/world/hunt/start | Start the Great Hunt this season by reading its first riddle (the Copper key&#39;s). Idempotent: starting again answers your progress unchanged. Answers the same shape as GET /v1/world/hunt. 409 when no season is running.
*WorldApi* | [**createWorldInteractiveAsset**](docs/Api/WorldApi.md#createworldinteractiveasset) | **POST** /v1/world/interactive/assets | Upload one asset for your designs: kind glb (4 MB), wav (4 MB) or png (1 MB), the file as base64. Answers its sha256 and the path to reference from MML.
*WorldApi* | [**createWorldInteractiveDesign**](docs/Api/WorldApi.md#createworldinteractivedesign) | **POST** /v1/world/interactive/designs | Create an interactive design: name, footprint (s, m, l or f), optional tint and description, an asking price in COSM base units (a string, six decimals) and optional max supply. Inactive until ops approve a submitted version.
*WorldApi* | [**createWorldInteractiveDesignCheck**](docs/Api/WorldApi.md#createworldinteractivedesigncheck) | **POST** /v1/world/interactive/designs/{id}/check | Check the draft: static rules, that every referenced upload exists, and a sandboxed dry run. Budgeted per person.
*WorldApi* | [**createWorldInteractiveDesignPreview**](docs/Api/WorldApi.md#createworldinteractivedesignpreview) | **POST** /v1/world/interactive/designs/{id}/preview | A private preview token for the draft (author only) and the socket path that runs it. Budgeted per person.
*WorldApi* | [**createWorldInteractiveDesignSubmit**](docs/Api/WorldApi.md#createworldinteractivedesignsubmit) | **POST** /v1/world/interactive/designs/{id}/submit | Freeze the draft as a new version and send it to ops review. Up to 10 a day.
*WorldApi* | [**createWorldInteractiveReset**](docs/Api/WorldApi.md#createworldinteractivereset) | **POST** /v1/world/interactive/reset | Wipe the stored state of an interactive piece standing in a place you own (a home or your boutique).
*WorldApi* | [**createWorldJobAppraisalAnswer**](docs/Api/WorldApi.md#createworldjobappraisalanswer) | **POST** /v1/world/jobs/appraisals/{id}/answers | Answer a price check: your estimate of the item value in CENTS and an optional note. Moves no money; the asker may accept it.
*WorldApi* | [**createWorldJobShiftClaim**](docs/Api/WorldApi.md#createworldjobshiftclaim) | **POST** /v1/world/jobs/shifts/{id}/claim | Claim an open shift. You work it by being in the place while it runs.
*WorldApi* | [**createWorldJobShiftRelease**](docs/Api/WorldApi.md#createworldjobshiftrelease) | **POST** /v1/world/jobs/shifts/{id}/release | Give a shift you claimed back to the board.
*WorldApi* | [**createWorldOutfit**](docs/Api/WorldApi.md#createworldoutfit) | **POST** /v1/world/outfits | Save what you are wearing now as a named look: { name (1-32 chars), appearance? (skin, hair, hairColour, eyes, build -- unknown keys fall back to the default) }. Each worn thing is recorded as the door it goes back on by; one that no longer traces to something you own is listed in skipped and not saved. 409 when you already keep 6.
*WorldApi* | [**createWorldOutfitApply**](docs/Api/WorldApi.md#createworldoutfitapply) | **POST** /v1/world/outfits/{id}/apply | Put a saved look on. Every item goes through the same equip as POST /v1/world/avatar/equip, so ownership still holds: something you no longer own is listed in skipped with the reason and not worn. Slots the look left empty are emptied (cleared). Answers the appearance of the look (for your character -- appearance lives on your device), applied, skipped and cleared. Moves no money.
*WorldApi* | [**createWorldParty**](docs/Api/WorldApi.md#createworldparty) | **POST** /v1/world/parties | Start a party with you as leader (up to 8 members).
*WorldApi* | [**createWorldPartyChat**](docs/Api/WorldApi.md#createworldpartychat) | **POST** /v1/world/parties/{id}/chat | Say something in your party chat (up to 2000 characters).
*WorldApi* | [**createWorldPartyInvite**](docs/Api/WorldApi.md#createworldpartyinvite) | **POST** /v1/world/parties/{id}/invite | Invite a friend (userId) to your party.
*WorldApi* | [**createWorldPartyInviteAccept**](docs/Api/WorldApi.md#createworldpartyinviteaccept) | **POST** /v1/world/parties/invites/{inviteId}/accept | Accept a party invite.
*WorldApi* | [**createWorldPartyInviteDecline**](docs/Api/WorldApi.md#createworldpartyinvitedecline) | **POST** /v1/world/parties/invites/{inviteId}/decline | Decline a party invite.
*WorldApi* | [**createWorldPartyKick**](docs/Api/WorldApi.md#createworldpartykick) | **POST** /v1/world/parties/{id}/kick | As leader, remove a member (userId).
*WorldApi* | [**createWorldPartyLeader**](docs/Api/WorldApi.md#createworldpartyleader) | **POST** /v1/world/parties/{id}/leader | As leader, pass the lead to a member (userId).
*WorldApi* | [**createWorldPartyLeave**](docs/Api/WorldApi.md#createworldpartyleave) | **POST** /v1/world/parties/{id}/leave | Leave your party (the lead passes on if you led it).
*WorldApi* | [**createWorldPartyWishlist**](docs/Api/WorldApi.md#createworldpartywishlist) | **POST** /v1/world/parties/{id}/wishlist | Add a listing (listingId, or its shop slug) to the party wishlist; answers the wishlist.
*WorldApi* | [**createWorldPartyWishlistVote**](docs/Api/WorldApi.md#createworldpartywishlistvote) | **POST** /v1/world/parties/{id}/wishlist/{listingId}/vote | Thumb a wishlist listing up or down (null clears your vote); answers the wishlist.
*WorldApi* | [**createWorldPlaceItemWant**](docs/Api/WorldApi.md#createworldplaceitemwant) | **POST** /v1/world/places/{slug}/items/{itemId}/want | Tell a room owner you would buy one of their items (once per person per item; they see the count). Moves no money.
*WorldApi* | [**createWorldSpace**](docs/Api/WorldApi.md#createworldspace) | **POST** /v1/world/spaces | Open a Space (sellers only, at most two): slug, name, venue, optional membership and about.
*WorldApi* | [**createWorldSpaceEvent**](docs/Api/WorldApi.md#createworldspaceevent) | **POST** /v1/world/spaces/{slug}/events | As host or co-host, put an event on: title, kind, optional about, ISO start and end with offset.
*WorldApi* | [**createWorldSpaceEventRsvp**](docs/Api/WorldApi.md#createworldspaceeventrsvp) | **POST** /v1/world/spaces/{slug}/events/{id}/rsvp | Say whether you are going to an event.
*WorldApi* | [**createWorldSpaceInvite**](docs/Api/WorldApi.md#createworldspaceinvite) | **POST** /v1/world/spaces/{slug}/invite | Invite somebody (userId) to a Space.
*WorldApi* | [**createWorldSpaceJoin**](docs/Api/WorldApi.md#createworldspacejoin) | **POST** /v1/world/spaces/{slug}/join | Join a Space, or ask to when it is request-only.
*WorldApi* | [**createWorldSpaceLeave**](docs/Api/WorldApi.md#createworldspaceleave) | **POST** /v1/world/spaces/{slug}/leave | Leave a Space.
*WorldApi* | [**createWorldSpaceRequestByUserId**](docs/Api/WorldApi.md#createworldspacerequestbyuserid) | **POST** /v1/world/spaces/{slug}/requests/{userId} | As host or co-host, accept or turn down a request to join.
*WorldApi* | [**createWorldSpaceRole**](docs/Api/WorldApi.md#createworldspacerole) | **POST** /v1/world/spaces/{slug}/role | As host, make a member a co-host or back to a member.
*WorldApi* | [**deleteSpatialSceneGrant**](docs/Api/WorldApi.md#deletespatialscenegrant) | **DELETE** /v1/spatial/scenes/{id}/grants/{grantId} | Take somebody&#39;s access to your room away, or kill an invite nobody has used yet.
*WorldApi* | [**deleteSpatialSceneNode**](docs/Api/WorldApi.md#deletespatialscenenode) | **DELETE** /v1/spatial/scenes/{id}/nodes | Remove units (by id, up to 500) from one of your warehouse rooms.
*WorldApi* | [**deleteSpatialSceneWarehouseStock**](docs/Api/WorldApi.md#deletespatialscenewarehousestock) | **DELETE** /v1/spatial/scenes/{id}/warehouse/stock | Take an inventory item (or unit) off its rack.
*WorldApi* | [**deleteSpatialStreetRequest**](docs/Api/WorldApi.md#deletespatialstreetrequest) | **DELETE** /v1/spatial/streets/requests/{id} | Withdraw a street request you made that has not been founded yet.
*WorldApi* | [**deleteWorldBlock**](docs/Api/WorldApi.md#deleteworldblock) | **DELETE** /v1/world/blocks/{id} | Unblock somebody (by the block id from GET /v1/world/blocks).
*WorldApi* | [**deleteWorldCollectionCapability**](docs/Api/WorldApi.md#deleteworldcollectioncapability) | **DELETE** /v1/world/collections/{chain}/{contract}/capabilities | Withdraw your declaration for a collection.
*WorldApi* | [**deleteWorldFollow**](docs/Api/WorldApi.md#deleteworldfollow) | **DELETE** /v1/world/follows/{userId} | Unfollow somebody. Idempotent.
*WorldApi* | [**deleteWorldHallLoan**](docs/Api/WorldApi.md#deleteworldhallloan) | **DELETE** /v1/world/hall/loans/{id} | Take one of your loans off show in the Hall of Grails.
*WorldApi* | [**deleteWorldHomeGuestbook**](docs/Api/WorldApi.md#deleteworldhomeguestbook) | **DELETE** /v1/world/homes/{slug}/guestbook/{id} | As the home owner, hide a guestbook entry.
*WorldApi* | [**deleteWorldInteractiveDesign**](docs/Api/WorldApi.md#deleteworldinteractivedesign) | **DELETE** /v1/world/interactive/designs/{id} | Delete a draft design, or archive a submitted one (off sale; owned copies keep working).
*WorldApi* | [**deleteWorldJobShift**](docs/Api/WorldApi.md#deleteworldjobshift) | **DELETE** /v1/world/jobs/shifts/{id} | Cancel a shift you posted that nobody has worked yet.
*WorldApi* | [**deleteWorldOutfit**](docs/Api/WorldApi.md#deleteworldoutfit) | **DELETE** /v1/world/outfits/{id} | Delete a saved look. 404 when it is not yours.
*WorldApi* | [**deleteWorldPartyWishlist**](docs/Api/WorldApi.md#deleteworldpartywishlist) | **DELETE** /v1/world/parties/{id}/wishlist/{listingId} | Take a listing you added off the party wishlist; answers the wishlist.
*WorldApi* | [**deleteWorldPlaceBan**](docs/Api/WorldApi.md#deleteworldplaceban) | **DELETE** /v1/world/places/{slug}/bans/{userId} | Lift a ban from a place you own; they can walk in again right away.
*WorldApi* | [**deleteWorldSpace**](docs/Api/WorldApi.md#deleteworldspace) | **DELETE** /v1/world/spaces/{slug} | As host, close a Space.
*WorldApi* | [**deleteWorldSpaceEvent**](docs/Api/WorldApi.md#deleteworldspaceevent) | **DELETE** /v1/world/spaces/{slug}/events/{id} | As host or co-host, cancel an event.
*WorldApi* | [**getSpatialSceneAttention**](docs/Api/WorldApi.md#getspatialsceneattention) | **GET** /v1/spatial/scenes/{sceneId}/attention | What visitors looked at in one of your rooms: viewers, looks, inspects and dwell per item over the last days (1-35, default 30).
*WorldApi* | [**getSpatialSceneWindow**](docs/Api/WorldApi.md#getspatialscenewindow) | **GET** /v1/spatial/scenes/{id}/window | The listings you chose for the street window of your shop, in slot order (left, middle, right; empty &#x3D; newest first), and &#x60;choices&#x60;: your listings that can go in it, newest first.
*WorldApi* | [**getSpatialShopNeighbourhood**](docs/Api/WorldApi.md#getspatialshopneighbourhood) | **GET** /v1/spatial/shop/neighbourhood | Your shop&#39;s neighbourhood, and whether and where it may move.
*WorldApi* | [**getSpatialSpace**](docs/Api/WorldApi.md#getspatialspace) | **GET** /v1/spatial/spaces | The room catalogue: every space profile (what it holds, how it is sorted, its containers) and the warehouse units.
*WorldApi* | [**getSpatialStreetAdmission**](docs/Api/WorldApi.md#getspatialstreetadmission) | **GET** /v1/spatial/streets/admissions | Street applications and invitations: yours, and those waiting on streets you own.
*WorldApi* | [**getSpatialStreetDecor**](docs/Api/WorldApi.md#getspatialstreetdecor) | **GET** /v1/spatial/streets/{slug}/decor | The decor on a street you may dress, and what you can place.
*WorldApi* | [**getWorldArcade**](docs/Api/WorldApi.md#getworldarcade) | **GET** /v1/world/arcade | The Arcade in Crossly World: data.cabinets (slot, where it stands, host -- piece, price_guess or empty --, game, title, blurb, the piece it hosts and where, record, packageId and thumbnail for a creator game from the Game Directory, players) and data.scores (the High Score wall: per game a title, kind -- leaderboard, record or top -- and up to five ASCII lines; a name shows only for somebody who chose to be seen by name, everyone else is \&quot;A player\&quot;), plus creatorGames (creator games with a cabinet now). Games are played in the world.
*WorldApi* | [**getWorldAurora**](docs/Api/WorldApi.md#getworldaurora) | **GET** /v1/world/aurora | The Sales Aurora over the Commons in Crossly World: every real sale on Crossly in the last data.windowDays (30) days. data.total (sales in the window), data.families (key, label, colour, count per colour family: cards, coins, jewellery, electronics, media, fashion, toys, other) and data.sales (newest first, at most 48: family, ageHours, fresh -- sold in the last ten minutes, which shimmers). Aggregate only: no item, price, seller or platform. data.updatedAt is when it was read.
*WorldApi* | [**getWorldAutoShop**](docs/Api/WorldApi.md#getworldautoshop) | **GET** /v1/world/auto-shop | Whether Crossly keeps a world shop for you automatically: enabled, and the shop (id, name, visibility, autoCreated, address, label) or null. Change it with PATCH /v1/world/auto-shop.
*WorldApi* | [**getWorldAvatarIdentity**](docs/Api/WorldApi.md#getworldavataridentity) | **GET** /v1/world/avatar/identity | Whether others see your name in the world (named), or not (anonymous); null if you have never chosen.
*WorldApi* | [**getWorldAvatarLoadout**](docs/Api/WorldApi.md#getworldavatarloadout) | **GET** /v1/world/avatar/loadout | What you are wearing: the rig, its slots (avatar_head, avatar_body, avatar_outer -- a jacket over the top, avatar_legs, avatar_feet, avatar_back) and each worn entry -- a cosmetic or a real item -- with its verified-purchase mark. Carries no price, receipt id, seller or order.
*WorldApi* | [**getWorldAvatarLoadoutByUserId**](docs/Api/WorldApi.md#getworldavatarloadoutbyuserid) | **GET** /v1/world/avatar/loadout/{userId} | What somebody else is wearing, with the verified-purchase mark on each real item -- public on purpose, since a check only its owner can see is not a check. No price, receipt id, seller or order.
*WorldApi* | [**getWorldAvatarLook**](docs/Api/WorldApi.md#getworldavatarlook) | **GET** /v1/world/avatar/look | Your world look on the account: the handle you chose (null if anonymous) and your appearance; null if you never made one.
*WorldApi* | [**getWorldAvatarNftBadge**](docs/Api/WorldApi.md#getworldavatarnftbadge) | **GET** /v1/world/avatar/nft-badge | The NFT you wear on your nameplate in the world, or null.
*WorldApi* | [**getWorldCapability**](docs/Api/WorldApi.md#getworldcapability) | **GET** /v1/world/capabilities | What your held NFTs unlock in Crossly World: each token with the capabilities its collection declared (wear, display, emote, gate, ...). Holding is your verified wallets (their synced tokens); the capabilities of a transferred token go within five minutes.
*WorldApi* | [**getWorldCapabilityCatalogue**](docs/Api/WorldApi.md#getworldcapabilitycatalogue) | **GET** /v1/world/capabilities/catalogue | The capability kinds of spec crossly.nft-capabilities/1: what each does, whether only the creator of the collection may declare it, whether it needs review, and which clients honour it.
*WorldApi* | [**getWorldCapabilityWear**](docs/Api/WorldApi.md#getworldcapabilitywear) | **GET** /v1/world/capabilities/wear | What you wear from your NFTs and COSM copies: your pick per avatar slot (head, body, legs, feet, back) and what the room sees.
*WorldApi* | [**getWorldChest**](docs/Api/WorldApi.md#getworldchest) | **GET** /v1/world/chests | The Commons chest: data.window (this 20-minute window, UTC), spot ([x, z] on the plaza), endsAt (when the next chest comes) and mine (openedThis, and opened -- how many windows you have opened one in; the Chest opener pin comes at 10). A chest is opened by walking up to it in Crossly World, never over the API.
*WorldApi* | [**getWorldCollectionCapability**](docs/Api/WorldApi.md#getworldcollectioncapability) | **GET** /v1/world/collections/{chain}/{contract}/capabilities | The live capability declaration of a collection (404 when it has none).
*WorldApi* | [**getWorldContestMine**](docs/Api/WorldApi.md#getworldcontestmine) | **GET** /v1/world/contests/mine | Your contest entries (best score, attempts used, payment state) and prizes (granted, or owed until their gate opens).
*WorldApi* | [**getWorldConvention**](docs/Api/WorldApi.md#getworldconvention) | **GET** /v1/world/conventions/{id} | One convention. 404 for an unknown or malformed id alike.
*WorldApi* | [**getWorldCosmBalance**](docs/Api/WorldApi.md#getworldcosmbalance) | **GET** /v1/world/cosm/balance | Your COSM balance: baseUnits (a STRING -- COSM has 6 decimals and overflows a JSON number), decimals, available (false &#x3D; COSM is not provisioned on this deployment, not a zero balance).
*WorldApi* | [**getWorldCrew**](docs/Api/WorldApi.md#getworldcrew) | **GET** /v1/world/crew | Your crew: data.crew is null when you are in none, else its name, tag, join code and whether you own it; data.members lists up to 30 members, each with the public room they are in right now when they chose to be seen by name (else null).
*WorldApi* | [**getWorldCrewChat**](docs/Api/WorldApi.md#getworldcrewchat) | **GET** /v1/world/crew/chat | Your crew chat: data.messages is the last 50 lines (from, name, text, at), kept in memory only, so it starts empty after a restart. 404 when you are in no crew.
*WorldApi* | [**getWorldCrewLeaderboard**](docs/Api/WorldApi.md#getworldcrewleaderboard) | **GET** /v1/world/crew/leaderboards | The game leaderboards (Price Guess, hunts, speed trades; this week and all time) ranked among your crew only, each member by the name the crew sees. 404 when you are in no crew.
*WorldApi* | [**getWorldDm**](docs/Api/WorldApi.md#getworlddm) | **GET** /v1/world/dms/{userId} | Your direct-message thread with one friend, oldest first (the last 100 lines: id, from, text, at, mine). Reading it marks their lines read.
*WorldApi* | [**getWorldEmoteShowable**](docs/Api/WorldApi.md#getworldemoteshowable) | **GET** /v1/world/emotes/showable | The things you own that a show-off emote can hold up.
*WorldApi* | [**getWorldFirefly**](docs/Api/WorldApi.md#getworldfirefly) | **GET** /v1/world/fireflies | Fireflies on the Commons lawn: data.day (today, UTC), today (fireflies everyone has caught today) and mine (today -- your catches today, up to perDay -- total, all your catches; the Firefly Catcher pin comes at 30 -- and perDay). Fireflies are caught by walking up to a lit one in Crossly World after dark, never over the API, and nothing is spent.
*WorldApi* | [**getWorldFitStat**](docs/Api/WorldApi.md#getworldfitstat) | **GET** /v1/world/fits/stats | Your walking storefront, last 7 days: distinct people who tapped \&quot;Shop this\&quot; or \&quot;Offer\&quot; on what you wore, and how many of each. Counts only; nobody is identified.
*WorldApi* | [**getWorldFitValue**](docs/Api/WorldApi.md#getworldfitvalue) | **GET** /v1/world/fit-value | What your outfit is worth on the market: cents (sum of each catalogued piece&#39;s order-book price -- last sale, else lowest ask), pieces worn, how many were priced, and share (whether you show it on your card).
*WorldApi* | [**getWorldGame**](docs/Api/WorldApi.md#getworldgame) | **GET** /v1/world/games/{id} | One live game: its manifest, its store items and which you own.
*WorldApi* | [**getWorldGameLeaderboard**](docs/Api/WorldApi.md#getworldgameleaderboard) | **GET** /v1/world/games/{id}/leaderboard | A live game leaderboard, this week and all time, by its manifest scoring (wins, best points, or best time). Only people who chose to be named show by name. scoring is null for a game that keeps no board.
*WorldApi* | [**getWorldGamePackage**](docs/Api/WorldApi.md#getworldgamepackage) | **GET** /v1/world/games/packages/{id} | One of your game packages with every version, its review state and decision note.
*WorldApi* | [**getWorldGameTemplate**](docs/Api/WorldApi.md#getworldgametemplate) | **GET** /v1/world/games/templates/{kind} | A fresh game package from a template (table, arena, object; collection is an NFT capability declaration), as { path, base64 } files: the world-kit init, for an agent with no local kit. ?id&#x3D;my-game&amp;name&#x3D;My Game.
*WorldApi* | [**getWorldHall**](docs/Api/WorldApi.md#getworldhall) | **GET** /v1/world/hall | The Hall of Grails in Crossly World: data.exhibition (key, title, blurb, endsAt -- a new one every Monday UTC -- and next, the coming one&#39;s title) and data.exhibits, up to twelve real catalogue items in slot order (skuId, name, brand, imageUrl, thumbUrl, retailCents, lowestAskCents, lastSaleCents: the live order book, null when the market has none). The first stands on the centre plinth. Buy, bid or watch an exhibit through the market endpoints with its skuId.
*WorldApi* | [**getWorldHallLoan**](docs/Api/WorldApi.md#getworldhallloan) | **GET** /v1/world/hall/loans | Lend to the Hall: this week&#39;s exhibition (key, title, categorySlug, endsAt), your loans on show (id, vaultItemId, skuId, name, credit, since) and the vault pieces you can lend (eligible: vaultItemId, skuId, name, imageUrl, grade) -- held in your Crossly vault, not pledged, in the exhibition&#39;s category. perMember is how many you may lend each week.
*WorldApi* | [**getWorldHomePlaceable**](docs/Api/WorldApi.md#getworldhomeplaceable) | **GET** /v1/world/home/placeable | What you can place in your home: your items and your furniture.
*WorldApi* | [**getWorldHunt**](docs/Api/WorldApi.md#getworldhunt) | **GET** /v1/world/hunt | Your Great Hunt: data.season (id, name, startsAt, endsAt, the title and how many earn it, live), started (you read the first clue), held (keys held, 0-3, always in the order copper, jade, crystal), keys (each with its name, colour, its riddle once it is yours to read, and when you picked it up), and cleared (your rank through the Gate this season, when, and whether you earned the title) or null. Keys are picked up by walking to them in Crossly World; nothing here takes one.
*WorldApi* | [**getWorldHuntScoreboard**](docs/Api/WorldApi.md#getworldhuntscoreboard) | **GET** /v1/world/hunt/scoreboard | The Great Hunt Scoreboard, as the monolith in the Commons shows it: data.season (the running season, or the last one between seasons), finishers (the first ten through the Gate in order: rank, name, short, named, at, titled -- a name shows only for somebody who chose to be seen by name in the world, everyone else is \&quot;A player\&quot;) and total (everybody through the Gate this season).
*WorldApi* | [**getWorldInteractiveDesign**](docs/Api/WorldApi.md#getworldinteractivedesign) | **GET** /v1/world/interactive/designs/{id} | One of your interactive designs: its draft source, the last static check, and every submitted version with its review state.
*WorldApi* | [**getWorldJob**](docs/Api/WorldApi.md#getworldjob) | **GET** /v1/world/jobs | The jobs board: open staff shifts you could claim, your claimed shifts and open price checks (appraisals), as the world shows them.
*WorldApi* | [**getWorldKite**](docs/Api/WorldApi.md#getworldkite) | **GET** /v1/world/kites | Kites flown on the Commons lawn: data.day (today, UTC), today (kites everyone has flown today) and mine (today -- yours today, up to perDay -- perDay, and days -- the days you have flown one on; the Kite flyer pin comes at 5). Kites are flown by standing out on the lawn in Crossly World by day, never over the API, and nothing is spent.
*WorldApi* | [**getWorldLantern**](docs/Api/WorldApi.md#getworldlantern) | **GET** /v1/world/lanterns | Sky lanterns in the Commons: data.day (today, UTC), today (lanterns everyone has released today) and mine (today -- yours today, up to perDay -- perDay, and days -- the days you have released one on; the Lantern lighter pin comes at 5). Lanterns are released at the lantern stand in Crossly World, never over the API, and nothing is spent.
*WorldApi* | [**getWorldPartyChat**](docs/Api/WorldApi.md#getworldpartychat) | **GET** /v1/world/parties/{id}/chat | Your party chat: the recent lines. 404 when this is not your party.
*WorldApi* | [**getWorldPlaceBoard**](docs/Api/WorldApi.md#getworldplaceboard) | **GET** /v1/world/places/{slug}/boards | The Trade Floor&#39;s wall of wants, its authentication desk and its Vault Markets ticker (vaultMovers: bookKey, name, label, units, markCents, change24hBps; only the trade-floor place has them).
*WorldApi* | [**getWorldPlaceCollection**](docs/Api/WorldApi.md#getworldplacecollection) | **GET** /v1/world/places/{slug}/collections/{category}/{brand}/{model} | One collection room: every piece of the set, owned or missing. 404 for an unknown room or set.
*WorldApi* | [**getWorldPlaceDrop**](docs/Api/WorldApi.md#getworldplacedrop) | **GET** /v1/world/places/{slug}/drop | The owner&#39;s next drop (name, cover, time, live) and how many people are waiting in the room.
*WorldApi* | [**getWorldPlaceItemInterest**](docs/Api/WorldApi.md#getworldplaceiteminterest) | **GET** /v1/world/places/{slug}/items/{itemId}/interest | How many people looked at one item in this room today.
*WorldApi* | [**getWorldPlaceLive**](docs/Api/WorldApi.md#getworldplacelive) | **GET** /v1/world/places/{slug}/live | The owner&#39;s live sale: their stream and the lot on the block, or null.
*WorldApi* | [**getWorldPlaceSeller**](docs/Api/WorldApi.md#getworldplaceseller) | **GET** /v1/world/places/{slug}/seller | The shop whose public room this is (username and name), or null.
*WorldApi* | [**getWorldPlaceShopPet**](docs/Api/WorldApi.md#getworldplaceshoppet) | **GET** /v1/world/places/{slug}/shop-pet | The shop&#39;s pet kind, or null.
*WorldApi* | [**getWorldSpace**](docs/Api/WorldApi.md#getworldspace) | **GET** /v1/world/spaces/{slug} | One Space: its layout, host, events and your place in it.
*WorldApi* | [**getWorldSpaceCanHost**](docs/Api/WorldApi.md#getworldspacecanhost) | **GET** /v1/world/spaces/can-host | Whether you may open a Space: sellers only, at most two active.
*WorldApi* | [**getWorldTrialLeaderboard**](docs/Api/WorldApi.md#getworldtrialleaderboard) | **GET** /v1/world/trials/{course}/leaderboard | A Time Trials course&#39;s boards, as the board beside it in the Commons shows them: data.course, week, weekly (this week&#39;s ten fastest: rank, name, short, named, ms, at) and allTime (the ten fastest ever, each person once). A name shows only for somebody who chose to be seen by name in the world; everyone else is \&quot;A player\&quot;. 404 for an unknown course; course 1 is commons-loop.
*WorldApi* | [**getWorldTrialMine**](docs/Api/WorldApi.md#getworldtrialmine) | **GET** /v1/world/trials/mine | Your Hoverboard Time Trials bests: data.week (its Monday, YYYY-MM-DD, UTC) and courses, each with course (id, name, parMs, rings, lengthM), week (your best lap this week in ms, your place on the weekly board, laps finished, and the split at each ring) or null, and allTime (your best ever in ms, your place on the all-time board, when) or null. Laps are timed by Crossly from where it saw you ride in the world; nothing here writes one.
*WorldApi* | [**getWorldWallet**](docs/Api/WorldApi.md#getworldwallet) | **GET** /v1/world/wallet | Every balance you hold in Crossly World, read-only: bucksCents (Crossly Bucks, cents); cbx (available, decimals, and the three CBX balances kept apart as base-unit STRINGS -- granted (spend here only), earned (withdrawable once matured), connected (a delegation ceiling on your own wallet, not cash on hand) -- plus pendingCents of cashback not yet matured); cosm (available, decimals, baseUnits string). available:false means that currency is not provisioned on this deployment, not that you hold none.
*WorldApi* | [**getWorldWish**](docs/Api/WorldApi.md#getworldwish) | **GET** /v1/world/wishes | The Wishing Fountain in the Commons: data.day (today, UTC), today (wishes everyone has made today) and mine (madeToday, days -- how many days you have wished on, the Wishmaker pin comes at 7 -- and nextAt, when tomorrow&#39;s wish opens). One wish a day; a wish is made by tossing a coin at the fountain in Crossly World, never over the API, and nothing is spent.
*WorldApi* | [**listSpatialSceneGrants**](docs/Api/WorldApi.md#listspatialscenegrants) | **GET** /v1/spatial/scenes/{id}/grants | Everyone who can currently walk into one of your rooms, and unused invites. Never returns codes.
*WorldApi* | [**listSpatialSceneWarehouseUnplaced**](docs/Api/WorldApi.md#listspatialscenewarehouseunplaced) | **GET** /v1/spatial/scenes/{id}/warehouse/unplaced | Stock not yet on a shelf in a warehouse room you can arrange (q filters by title).
*WorldApi* | [**listSpatialSharedWithMe**](docs/Api/WorldApi.md#listspatialsharedwithme) | **GET** /v1/spatial/shared-with-me | Rooms other people let you into.
*WorldApi* | [**listSpatialStreetLeases**](docs/Api/WorldApi.md#listspatialstreetleases) | **GET** /v1/spatial/streets/{slug}/leases | Plots on a street offered for lease: weekly rent in CENTS and terms.
*WorldApi* | [**listWorldAvatarCloset**](docs/Api/WorldApi.md#listworldavatarcloset) | **GET** /v1/world/avatar/closet | Everything you can verifiably wear (your Crossly purchase receipts), newest first: receiptId, item title, brand, size, image, catalog sku/variant, quantity, purchasedAt. Pass a receiptId to POST /v1/world/avatar/equip to put one on. limit 1-200, offset for paging.
*WorldApi* | [**listWorldAvatarStock**](docs/Api/WorldApi.md#listworldavatarstock) | **GET** /v1/world/avatar/stock | Items of your OWN inventory you could wear into a room as a walking storefront: inventoryItemId, title, image and the slot it would go on. Pass an inventoryItemId to POST /v1/world/avatar/equip.
*WorldApi* | [**listWorldAvatarWearables**](docs/Api/WorldApi.md#listworldavatarwearables) | **GET** /v1/world/avatar/wearables | Wearables you have authored as a designer: id, sku, name, slot, priceBaseUnits (COSM base units, a string), maxSupply, mintedCount, active (false until reviewed). meta.available is false when COSM is not provisioned here.
*WorldApi* | [**listWorldBestDressed**](docs/Api/WorldApi.md#listworldbestdressed) | **GET** /v1/world/best-dressed | This week&#39;s best-dressed board (Monday-based), top ten: name, profile username and loves. Only people still choosing to be seen by name.
*WorldApi* | [**listWorldCapabilityDeclarations**](docs/Api/WorldApi.md#listworldcapabilitydeclarations) | **GET** /v1/world/capabilities/declarations | Your capability declarations, in every review state (pending, live, rejected with the note from the reviewer).
*WorldApi* | [**listWorldContestStandings**](docs/Api/WorldApi.md#listworldconteststandings) | **GET** /v1/world/contests/{id}/standings | The standings of a contest now: best score first (or lowest, for a time game), ties to whoever got there first.
*WorldApi* | [**listWorldContests**](docs/Api/WorldApi.md#listworldcontests) | **GET** /v1/world/contests | Open skill contests on Crossly World games, soonest ending first: entry mode (free, sponsored, paid) and prizes.
*WorldApi* | [**listWorldConventionExhibitors**](docs/Api/WorldApi.md#listworldconventionexhibitors) | **GET** /v1/world/conventions/{id}/exhibitors | The host roster: who applied, who was invited, who is coming (by shop handle). Host only; 404 otherwise.
*WorldApi* | [**listWorldConventionMine**](docs/Api/WorldApi.md#listworldconventionmine) | **GET** /v1/world/conventions/mine | Conventions you host and conventions you are exhibiting at.
*WorldApi* | [**listWorldConventions**](docs/Api/WorldApi.md#listworldconventions) | **GET** /v1/world/conventions | Conventions open to sellers now or soon: title, room, dates, and how to get a table (invite, free, fee or revenue share).
*WorldApi* | [**listWorldCosmCosmetics**](docs/Api/WorldApi.md#listworldcosmcosmetics) | **GET** /v1/world/cosm/cosmetics | The active cosmetics catalogue, optionally by tier (premium | earned | stake_exclusive) or slot: sku, name, slot, tier, priceCents (premium only), priceBaseUnits (earned only, COSM base units string), supply, fusable, preview and what it unlocks. Read-only: cosmetics are bought on crossly.net. meta.available / meta.decimals.
*WorldApi* | [**listWorldCosmDesigns**](docs/Api/WorldApi.md#listworldcosmdesigns) | **GET** /v1/world/cosm/designs | Your COSM designs in the world: popularity toward the free chain unlock a popular limited design earns, whether it is on chain, and your opt-out. Declare what a design does with chain cosm and the design id as the contract.
*WorldApi* | [**listWorldCosmInventory**](docs/Api/WorldApi.md#listworldcosminventory) | **GET** /v1/world/cosm/inventory | Cosmetics you hold, newest first: ownershipId, cosmeticId, sku, name, slot, tier, how it was acquired, bound, edition number, acquiredAt and what it unlocks. Pass a cosmeticId to POST /v1/world/avatar/equip to wear one. meta.available.
*WorldApi* | [**listWorldDecorCatalogue**](docs/Api/WorldApi.md#listworlddecorcatalogue) | **GET** /v1/world/decor/catalogue | The Decor Shop: every active cosmetic grouped by surface (avatar | home | shop | stall | street) and slot -- name, tier, priceCents (premium: the dollar price, paid in CBX at spot) or priceBaseUnits (earned: COSM, base-unit string), edition supply and remaining, tint swatch, preview, what it unlocks, owned + your edition number, and buyWith. Read-only: buying and minting happen on crossly.net/shop/decor. meta.available, meta.mint {open, reason}, meta.cbx {open, reason} (CBX opens at mint), meta.balances (your COSM and CBX, base-unit strings), meta.surfaces. Never sold by card.
*WorldApi* | [**listWorldDecorDesigns**](docs/Api/WorldApi.md#listworlddecordesigns) | **GET** /v1/world/decor/designs | Your decor designs and their review state. available is false until COSM is provisioned.
*WorldApi* | [**listWorldDecorInventory**](docs/Api/WorldApi.md#listworlddecorinventory) | **GET** /v1/world/decor/inventory | Your decor as an INVENTORY. Decor is a quantity: every copy is one unit -- a placed prop (home_prop, prop) uses one per placement, a finish (wallpaper, floor, theme, shopfront, facade, sign style, street lamp/banner/paving/arch, booth canopy/pattern/lights/counter) one per space it dresses; free values are unlimited. Per item: key, value, pair (key:value), name, sku, surface, placeable, tint, owned, placed, available, placements [{ space { kind: home | shop | stall | street, id, name }, count }], copies [{ ownershipId, editionNumber }]. meta.available, meta.spaces (every space you dress). Read-only: placing and retracting happen in the app or on crossly.net.
*WorldApi* | [**listWorldDecorMarket**](docs/Api/WorldApi.md#listworlddecormarket) | **GET** /v1/world/decor/market | Decor copies other people are reselling (asks in COSM); optional pair filter. Read only: listing and buying stay on crossly.net.
*WorldApi* | [**listWorldDecorMine**](docs/Api/WorldApi.md#listworlddecormine) | **GET** /v1/world/decor/mine | Decor you hold AND decor you have minted to your wallet, newest first: ownershipId, cosmeticId, sku, name, surface, slot, tier, acquiredVia, bound, editionNumber of maxSupply, mintState (held | minting | minted), mintAddress, mintable, and what it unlocks. meta.available, meta.mint.
*WorldApi* | [**listWorldDecorStalls**](docs/Api/WorldApi.md#listworlddecorstalls) | **GET** /v1/world/decor/stalls | Your stall bookings, to dress their booths.
*WorldApi* | [**listWorldDecorStreets**](docs/Api/WorldApi.md#listworlddecorstreets) | **GET** /v1/world/decor/streets | Streets you may dress.
*WorldApi* | [**listWorldDms**](docs/Api/WorldApi.md#listworlddms) | **GET** /v1/world/dms | Your friends (mutual follows) for direct messages: each with userId, name, the last line between you (text, at, mine) or null, and how many of theirs you have not read; most recent first.
*WorldApi* | [**listWorldFollowingRooms**](docs/Api/WorldApi.md#listworldfollowingrooms) | **GET** /v1/world/following/rooms | The public rooms of people you follow, to walk into.
*WorldApi* | [**listWorldFollows**](docs/Api/WorldApi.md#listworldfollows) | **GET** /v1/world/follows | Everybody you follow in Crossly World, newest first, each with mutual: true when they follow you back (a friend).
*WorldApi* | [**listWorldFriendHere**](docs/Api/WorldApi.md#listworldfriendhere) | **GET** /v1/world/friends/here | Your friends in Crossly World right now, and where (when they share it).
*WorldApi* | [**listWorldFriends**](docs/Api/WorldApi.md#listworldfriends) | **GET** /v1/world/friends | Your friends (mutual follows), each with the PUBLIC room they are in right now when they chose to be seen by name there (else null), and their home address slug when they let friends visit. Invisible and anonymous friends are never located.
*WorldApi* | [**listWorldGamePackages**](docs/Api/WorldApi.md#listworldgamepackages) | **GET** /v1/world/games/packages | Your game packages, each with its latest version and review state.
*WorldApi* | [**listWorldGameRewards**](docs/Api/WorldApi.md#listworldgamerewards) | **GET** /v1/world/games/rewards | Rewards you won in games: granted, or recorded as unfunded for COSM and CBX (a game prints no value).
*WorldApi* | [**listWorldGames**](docs/Api/WorldApi.md#listworldgames) | **GET** /v1/world/games | The Game Directory: every live, reviewed game package with its players, places, rewards, contests and the piece people place.
*WorldApi* | [**listWorldHomeBuilding**](docs/Api/WorldApi.md#listworldhomebuilding) | **GET** /v1/world/home/building | Homes whose owner made you a co-builder.
*WorldApi* | [**listWorldInteractiveCatalogue**](docs/Api/WorldApi.md#listworldinteractivecatalogue) | **GET** /v1/world/interactive/catalogue | Interactive objects: every piece that runs a shared script in a room (first-party and approved creator designs). Per item: model (the piece key a home layout or boutique prop stores), decorValue (the home_prop value its SKU claims), source (first_party | creator), name, blurb, size [x, z] metres, fallbackMesh, cosmeticId (the SKU on the Decor Shop, null when not on sale) and version (a creator design: the approved version every copy runs). Read-only: buying is on crossly.net/shop/decor.
*WorldApi* | [**listWorldInteractiveDesigns**](docs/Api/WorldApi.md#listworldinteractivedesigns) | **GET** /v1/world/interactive/designs | Your interactive-object designs (MML documents you wrote), newest first: id, handle, name, footprint (s | m | l | f), tint, priceBaseUnits (COSM, base-unit string), maxSupply, model, decorValue, cosmeticId, liveVersion (the approved version every copy runs; null &#x3D; none), withdrawnReason, archivedAt (you archived it: off sale, owned copies keep running; null &#x3D; not archived), latestVersion { version, state: pending | approved | rejected | withdrawn | cancelled, decisionNote }, inReview. &#x60;archived&#x60;: exclude (default), include or only archived designs. Read-only: writing, previewing, submitting and archiving happen on crossly.net/shop/decor?tab&#x3D;interactive.
*WorldApi* | [**listWorldJobPosted**](docs/Api/WorldApi.md#listworldjobposted) | **GET** /v1/world/jobs/posted | Shifts you posted for your rooms, with who claimed each and how it went.
*WorldApi* | [**listWorldOutfits**](docs/Api/WorldApi.md#listworldoutfits) | **GET** /v1/world/outfits | Your saved outfits (up to 6, oldest first): id, name, appearance (skin, hair, hairColour, eyes, build) and items -- each worn thing as the door it goes back on by (slot, door: cosmetic | receipt | stock, id, label). Put one on with POST /v1/world/outfits/:id/apply.
*WorldApi* | [**listWorldPlaceBans**](docs/Api/WorldApi.md#listworldplacebans) | **GET** /v1/world/places/{slug}/bans | Who is banned from a place you own (your boutique or home).
*WorldApi* | [**listWorldPlaceBundles**](docs/Api/WorldApi.md#listworldplacebundles) | **GET** /v1/world/places/{slug}/bundles | The owner&#39;s bundle deals mapped onto this room&#39;s items (itemIds null &#x3D; any N from the shop). The discount is decided at checkout.
*WorldApi* | [**listWorldPlaceCollections**](docs/Api/WorldApi.md#listworldplacecollections) | **GET** /v1/world/places/{slug}/collections | The owner&#39;s collection rooms: one per category, brand and model they collect.
*WorldApi* | [**listWorldPlaceOffers**](docs/Api/WorldApi.md#listworldplaceoffers) | **GET** /v1/world/places/{slug}/offers | What is for sale in a public room: price, condition and stock, with market references. 404 when no such room is shared.
*WorldApi* | [**listWorldPlaceRadar**](docs/Api/WorldApi.md#listworldplaceradar) | **GET** /v1/world/places/{slug}/radar | What you have that someone here wants, and what is here that you want: matched on catalog ids.
*WorldApi* | [**listWorldPlaceTradeTables**](docs/Api/WorldApi.md#listworldplacetradetables) | **GET** /v1/world/places/{slug}/trade-tables | The open trade tables in a place: who is sitting and what is laid on the mat.
*WorldApi* | [**listWorldPlaceTrades**](docs/Api/WorldApi.md#listworldplacetrades) | **GET** /v1/world/places/{slug}/trades | Items in this room open to trades, each with its trade post path.
*WorldApi* | [**listWorldProvenance**](docs/Api/WorldApi.md#listworldprovenance) | **GET** /v1/world/provenance | Provenance trails: where in Crossly World your purchases were found, newest first (optionally ?listingIds&#x3D;a,b -- platform listing ids). data: [{ platformListingId, slug (the listing public slug), kind (room | window | stall | space | drop | auction | worn | agent), place (its name, or null when gone), at, line -- e.g. \&quot;Found at The Sneaker Vault, Oct 2026\&quot; }]. Yours only.
*WorldApi* | [**listWorldQuests**](docs/Api/WorldApi.md#listworldquests) | **GET** /v1/world/quests | Every world quest with your progress: key, the pin it earns, goal, target, count, done, colour. meta.wearing is the pin on your nameplate (or null); meta.streak your current and best daily visit streak. Progress only comes from what the server saw -- there is no write of it.
*WorldApi* | [**listWorldSpaceMine**](docs/Api/WorldApi.md#listworldspacemine) | **GET** /v1/world/spaces/mine | Spaces you belong to.
*WorldApi* | [**listWorldSpaceRequests**](docs/Api/WorldApi.md#listworldspacerequests) | **GET** /v1/world/spaces/{slug}/requests | As host or co-host, who asked to join.
*WorldApi* | [**listWorldSpaceWhatsOn**](docs/Api/WorldApi.md#listworldspacewhatson) | **GET** /v1/world/spaces/whats-on | Live and upcoming events across Spaces (streets&#x3D;1 and stage&#x3D;1 add street and Main Stage events).
*WorldApi* | [**listWorldSpaces**](docs/Api/WorldApi.md#listworldspaces) | **GET** /v1/world/spaces | The Spaces directory: seller-hosted clubs with a venue, members and events (optional venue filter).
*WorldApi* | [**listWorldStreaks**](docs/Api/WorldApi.md#listworldstreaks) | **GET** /v1/world/streaks | The longest current daily visit streaks (2+ days), top ten: name and days. Only people still choosing to be seen by name.
*WorldApi* | [**listWorldTradeMine**](docs/Api/WorldApi.md#listworldtrademine) | **GET** /v1/world/trades/mine | Your trades and each item progress through the authentication gate (verified or failed).
*WorldApi* | [**listWorldTradeTableBinder**](docs/Api/WorldApi.md#listworldtradetablebinder) | **GET** /v1/world/trade-tables/binder | Your binder: unsold collection rows that are catalog items and may be laid on a trade mat -- key, variantId, condition, grade, portfolioId, name, image and valueCents (market value, cents).
*WorldApi* | [**listWorldTradeTableListings**](docs/Api/WorldApi.md#listworldtradetablelistings) | **GET** /v1/world/trade-tables/listings | Your open Trade Block trade listings a trade table can be opened on in the world, each with its items&#39; names.
*WorldApi* | [**updateSpatialSceneCosmetic**](docs/Api/WorldApi.md#updatespatialscenecosmetic) | **PATCH** /v1/spatial/scenes/{id}/cosmetics | Redecorate one of your rooms (wall, floor, lighting, trim...). Unknown keys are dropped; the response is what survived. &#x60;clear&#x60; lists keys to reset.
*WorldApi* | [**updateSpatialSceneNode**](docs/Api/WorldApi.md#updatespatialscenenode) | **PATCH** /v1/spatial/scenes/{id}/nodes/{nodeId} | Move a rack in one of your warehouse rooms (position in metres).
*WorldApi* | [**updateSpatialSceneSetting**](docs/Api/WorldApi.md#updatespatialscenesetting) | **PATCH** /v1/spatial/scenes/{id}/settings | How one of your rooms is laid out and lit: grouping and sort keys, theme, overlay and the arrival camera. Cosmetics and the shop layout have their own writers.
*WorldApi* | [**updateSpatialSceneShopLayout**](docs/Api/WorldApi.md#updatespatialsceneshoplayout) | **PUT** /v1/spatial/scenes/{id}/shop/layout | Save your shop room&#39;s sections and displays (validated server-side; the response is the stored layout).
*WorldApi* | [**updateSpatialSceneWindow**](docs/Api/WorldApi.md#updatespatialscenewindow) | **PUT** /v1/spatial/scenes/{id}/window | Choose up to three of your live Crossly listings for the street window of your shop, in slot order. Picks that sell drop out and the newest fill in; an empty list goes back to newest first.
*WorldApi* | [**updateSpatialStreetDecor**](docs/Api/WorldApi.md#updatespatialstreetdecor) | **PUT** /v1/spatial/streets/{slug}/decor | Dress a street you own with decor you hold (validated against your inventory).
*WorldApi* | [**updateSpatialStreetOwned**](docs/Api/WorldApi.md#updatespatialstreetowned) | **PATCH** /v1/spatial/streets/owned/{id} | Who may open a shop on a street you own (open, apply or invite).
*WorldApi* | [**updateWorldAutoShop**](docs/Api/WorldApi.md#updateworldautoshop) | **PATCH** /v1/world/auto-shop | Turn your automatic world shop off ({ enabled: false } -- an auto-created shop is made private, never deleted) or back on. Answers the new status.
*WorldApi* | [**updateWorldAvatarIdentity**](docs/Api/WorldApi.md#updateworldavataridentity) | **PUT** /v1/world/avatar/identity | Choose named or anonymous. Rooms you are already in keep the old answer until you rejoin.
*WorldApi* | [**updateWorldAvatarLook**](docs/Api/WorldApi.md#updateworldavatarlook) | **PUT** /v1/world/avatar/look | Save your world look to the account, so every device starts from it. look: null stays anonymous.
*WorldApi* | [**updateWorldAvatarNftBadge**](docs/Api/WorldApi.md#updateworldavatarnftbadge) | **PUT** /v1/world/avatar/nft-badge | Wear an NFT you hold on your nameplate (null to take it off). Checked again each time you join a room.
*WorldApi* | [**updateWorldCapabilityWear**](docs/Api/WorldApi.md#updateworldcapabilitywear) | **PUT** /v1/world/capabilities/wear | Wear a held token on an avatar slot (refId from GET /v1/world/capabilities), or pass refId null to take it off. Its collection must declare a wear capability for that slot.
*WorldApi* | [**updateWorldCollectionCapability**](docs/Api/WorldApi.md#updateworldcollectioncapability) | **PUT** /v1/world/collections/{chain}/{contract}/capabilities | Declare what the tokens of a collection can do (the whole declaration, spec crossly.nft-capabilities/1). As its creator (launched on Crossly or claimed) any kind; as a holder, cosmetic kinds only. Replaces your previous declaration; pending if it names an uploaded asset or an always-reviewed kind.
*WorldApi* | [**updateWorldConventionStatus**](docs/Api/WorldApi.md#updateworldconventionstatus) | **PUT** /v1/world/conventions/{id}/status | Open, start, end or cancel a convention you host.
*WorldApi* | [**updateWorldCosmDesignChainAutoUnlock**](docs/Api/WorldApi.md#updateworldcosmdesignchainautounlock) | **PUT** /v1/world/cosm/designs/{id}/chain-auto-unlock | Opt one of your COSM designs in or out of the free chain unlock it earns when popular (on by default). Answers its popularity.
*WorldApi* | [**updateWorldEmoteWheel**](docs/Api/WorldApi.md#updateworldemotewheel) | **PUT** /v1/world/emotes/wheel | Arrange your emote wheel: up to 8 slots, each an emote id, a moment slot or null. Returns the saved wheel (locked or unknown ids are dropped).
*WorldApi* | [**updateWorldFitValueShare**](docs/Api/WorldApi.md#updateworldfitvalueshare) | **PUT** /v1/world/fit-value/share | Whether people in a room can see what your outfit is worth.
*WorldApi* | [**updateWorldHome**](docs/Api/WorldApi.md#updateworldhome) | **PATCH** /v1/world/home | Your home: privacy (open, friends, private), theme, and wall, floor and mood decor you hold.
*WorldApi* | [**updateWorldHomeBuilder**](docs/Api/WorldApi.md#updateworldhomebuilder) | **PUT** /v1/world/home/builders | Set the co-builders of your home: { userIds } -- friends (mutual follows) only, at most 4, replacing the list ([] clears it). They may rearrange your home in the world with your things and add free furniture, never your bought pieces. New co-builders get a world notice.
*WorldApi* | [**updateWorldHomeLayout**](docs/Api/WorldApi.md#updateworldhomelayout) | **PUT** /v1/world/home/layout | Arrange your home: the full layout (up to 200 pieces you own), validated server-side.
*WorldApi* | [**updateWorldHomeLayoutBySlug**](docs/Api/WorldApi.md#updateworldhomelayoutbyslug) | **PUT** /v1/world/homes/{slug}/layout | Rearrange a home you co-build (never adding the owner bought pieces).
*WorldApi* | [**updateWorldInteractiveDesignDraft**](docs/Api/WorldApi.md#updateworldinteractivedesigndraft) | **PUT** /v1/world/interactive/designs/{id}/draft | Save the draft MML source (up to 64 KB); the response carries its static check.
*WorldApi* | [**updateWorldListingHoldersOnly**](docs/Api/WorldApi.md#updateworldlistingholdersonly) | **PUT** /v1/world/listings/{id}/holders-only | Reserve one of your listings for holders of a collection you declared a holders_only perk for (or release it). Checkout refuses anybody else.
*WorldApi* | [**updateWorldOutfit**](docs/Api/WorldApi.md#updateworldoutfit) | **PATCH** /v1/world/outfits/{id} | Rename a saved look: { name (1-32 chars) }. 404 when it is not yours.
*WorldApi* | [**updateWorldPetActive**](docs/Api/WorldApi.md#updateworldpetactive) | **PUT** /v1/world/pets/active | Walk one of your pets with you in the world, or none (kind: null).
*WorldApi* | [**updateWorldQuestPin**](docs/Api/WorldApi.md#updateworldquestpin) | **PUT** /v1/world/quests/pin | Wear a pin you EARNED from a quest on your nameplate, or { pin: null } to wear none. 403 for a pin you have not earned. Shows from the next room you walk into.
*WorldApi* | [**updateWorldRoomHolderGate**](docs/Api/WorldApi.md#updateworldroomholdergate) | **PUT** /v1/world/rooms/{id}/holder-gate | Make your room holders-only (its collection rooms follow). Send null to open it again. Returns &#x60;{ gate }&#x60;.
*WorldApi* | [**updateWorldSpace**](docs/Api/WorldApi.md#updateworldspace) | **PATCH** /v1/world/spaces/{slug} | As host, change a Space name, about or membership.
*WorldApi* | [**updateWorldSpaceHolderGate**](docs/Api/WorldApi.md#updateworldspaceholdergate) | **PUT** /v1/world/spaces/{slug}/holder-gate | Make your Space holders-only: only holders of an NFT collection join it (others can look in). Send null to open it again. Returns &#x60;{ gate }&#x60;.
*WorldApi* | [**updateWorldStallBookingBooth**](docs/Api/WorldApi.md#updateworldstallbookingbooth) | **PUT** /v1/world/stalls/bookings/{id}/booth | Dress the booth of a stall you booked (decor you hold).

## Models

- AccountIdLabel
- AuctionRoom
- AverageCount
- BrandDropResponse
- ColourPattern
- CreateAccountLogoutAllResponse
- CreateAccountRequestDeletionResponse
- CreateAccountResponse
- CreateAdOffsiteCampaignResponse
- CreateAdOffsiteCampaignResponseData
- CreateAdOffsiteResumeResponse
- CreateAdOffsiteResumeResponseData
- CreateAiCategorizeResponse
- CreateAiCategorizeResponseColors
- CreateAiDetectionDisputeResponse
- CreateAiEnhanceDescriptionResponse
- CreateAiEnhanceListingResponse
- CreateAiEnhanceTitleResponse
- CreateAiExtractReceiptResponse
- CreateAiExtractReceiptResponseError
- CreateAiHelpResponse
- CreateAiMagicListingResponse
- CreateAiMagicListingResponsePriceRange
- CreateAiMagicListingResponsePriceRangeValue
- CreateAiMagicListingResponseSuggestedPrice
- CreateAiTestKeyResponse
- CreateAutomationRuleImportResponse
- CreateAutomationRuleImportResponseCreated
- CreateAutomationRuleImportResponseErrors
- CreateAutomationRuleRunNowResponse
- CreateAutomationRuleValidateRecipeResponse
- CreateAutomationRuleValidateRecipeResponseDetails
- CreateAutomationRuleValidateRecipeResponseDetailsFieldErrors
- CreateBillingUpgradeRequest
- CreateBillingUpgradeResponse
- CreateBillingUpgradeResponseData
- CreateBreakCancelResponse
- CreateBreakDrawResponse
- CreateBreakDrawResponseData
- CreateBreakResponse
- CreateCatalogMatchConfirmResponse
- CreateCbxAccrualPurchaseResponse
- CreateCbxAccrualPurchaseResponseData
- CreateCbxAccrualResponse
- CreateCbxAccrualResponseData
- CreateCbxAdCreditPurchaseResponse
- CreateCbxAdCreditPurchaseResponseData
- CreateCbxAdCreditQuoteResponse
- CreateCbxAdCreditQuoteResponseData
- CreateCbxAdCreditSpendResponse
- CreateCbxAdCreditSpendResponseData
- CreateCbxBoostPauseResponse
- CreateCbxBoostPauseResponseData
- CreateCbxBoostResponse
- CreateCbxBoostResponseData
- CreateCbxCampaignExecuteByCampaignIdResponse
- CreateCbxCampaignExecuteByCampaignIdResponseData
- CreateCbxCampaignPreviewResponse
- CreateCbxCampaignPreviewResponseData
- CreateCbxCampaignPreviewResponseDataAllocations
- CreateCbxCampaignResponse
- CreateCbxCampaignResponseData
- CreateCbxClaimQuoteResponse
- CreateCbxClaimQuoteResponseData
- CreateCbxClaimResponse
- CreateCbxClaimResponseData
- CreateCbxClaimSendResponse
- CreateCbxClaimSendResponseData
- CreateCbxCreditDrawResponse
- CreateCbxCreditDrawResponseData
- CreateCbxCreditFreezeResponse
- CreateCbxCreditFreezeResponseData
- CreateCbxCreditRefreshResponse
- CreateCbxCreditRefreshResponseData
- CreateCbxCreditRepayResponse
- CreateCbxCreditRepayResponseData
- CreateCbxDisbursementRuleCheckResponse
- CreateCbxDisbursementRuleCheckResponseData
- CreateCbxDisbursementRuleResponse
- CreateCbxDisbursementRuleResponseData
- CreateCbxEarnTierResponse
- CreateCbxEarnTierResponseData
- CreateCbxRateQuoteResponse
- CreateCbxRateQuoteResponseData
- CreateCbxRedemptionQuoteResponse
- CreateCbxRedemptionQuoteResponseData
- CreateCbxRedemptionResponse
- CreateCbxRedemptionResponseData
- CreateCbxReserveResponse
- CreateCbxReserveResponseData
- CreateCbxRevenueSweepResponse
- CreateCbxRevenueSweepResponseData
- CreateCbxRevenueSweepResponseDataBreakdown
- CreateCbxSpendResponse
- CreateCbxSpendResponseData
- CreateCbxSpendReverseResponse
- CreateCbxSpendReverseResponseData
- CreateCbxStakeTierResponse
- CreateCbxStakeTierResponseData
- CreateCbxSubjectGrantResponse
- CreateCbxSubjectGrantResponseData
- CreateCbxSubjectResponse
- CreateCbxSubjectResponseData
- CreateCbxSubjectSpendPlanResponse
- CreateCbxSubjectSpendPlanResponseData
- CreateCbxSubjectSpendPlanResponseDataLegs
- CreateCbxSubjectStakeResponse
- CreateCbxSubjectStakeResponseData
- CreateCbxSubjectStakeUnstakeResponse
- CreateCbxSubjectStakeUnstakeResponseData
- CreateCbxWalletChallengeResponse
- CreateCbxWalletChallengeResponseData
- CreateCbxWalletPaymentConfirmResponse
- CreateCbxWalletPaymentConfirmResponseData
- CreateCbxWalletPaymentQuoteResponse
- CreateCbxWalletPaymentQuoteResponseData
- CreateCbxWalletPaymentResolveResponse
- CreateCbxWalletPaymentResolveResponseData
- CreateCbxWalletVerifyResponse
- CreateCbxWalletVerifyResponseData
- CreateCompWatchlistScrapeResponse
- CreateConnectionEmailImapResponse
- CreateConnectionEmailImapTestResponse
- CreateCosmAttestationAnchorResponse
- CreateCosmAttestationAnchorResponseData
- CreateCosmAuctionResponse
- CreateCosmAuctionResponseData
- CreateCosmCosmeticBuyCbxResponse
- CreateCosmCosmeticBuyCbxResponseData
- CreateCosmCosmeticBuyCbxResponseDataOwnership
- CreateCosmCosmeticBuyResponse
- CreateCosmCosmeticBuyResponseData
- CreateCosmCosmeticClaimResponse
- CreateCosmCosmeticClaimResponseData
- CreateCosmDesignerChainAutoUnlockResponse
- CreateCosmDesignerChainAutoUnlockResponseData
- CreateCosmDesignerChainAutoUnlockResponseDataPopularity
- CreateCosmDesignerChainUnlockResponse
- CreateCosmDesignerChainUnlockResponseData
- CreateCosmDesignerMaterialiseConfirmResponse
- CreateCosmDesignerMaterialiseConfirmResponseData
- CreateCosmDesignerMaterialiseResponse
- CreateCosmDesignerMaterialiseResponseData
- CreateCosmDesignerSubmitForReviewResponse
- CreateCosmDesignerSubmitForReviewResponseData
- CreateCosmDesignerTermResponse
- CreateCosmDesignerTermResponseData
- CreateCosmFusionResponse
- CreateCosmFusionResponseData
- CreateCosmHandleResponse
- CreateCosmHandleResponseData
- CreateCosmWithdrawalResponse
- CreateCosmWithdrawalResponseData
- CreateCustomerBulkDeleteResponse
- CreateCustomerRefreshProfileResponse
- CreateCustomerRefreshProfileResponsePlatforms
- CreateDaoProposalFinaliseResponse
- CreateDaoProposalFinaliseResponseData
- CreateDaoProposalOpenResponse
- CreateDaoProposalOpenResponseData
- CreateDaoProposalResponse
- CreateDaoProposalVetoResponse
- CreateDaoProposalVetoResponseData
- CreateDaoProposalVoteResponse
- CreateDaoProposalVoteResponseData
- CreateDropResponse
- CreateEmbedKeyRequest
- CreateEmbedKeyResponse
- CreateEmbedKeyResponseData
- CreateGradingSubmissionResultResponse
- CreateGradingVerifyCertResponse
- CreateImportResponse
- CreateInboxAiSuggestResponse
- CreateInboxCannedResponseResponse
- CreateInboxCannedResponseResponseCannedResponse
- CreateInboxConversationBulkAiRespondResponse
- CreateInboxConversationBulkAiRespondResponseResults
- CreateInboxConversationBulkResponse
- CreateInboxMessageTriageResponse
- CreateInboxOfferResponse
- CreateInboxReplyResponse
- CreateInventoryBulkArchiveResponse
- CreateInventoryBulkDeleteResponse
- CreateInventoryBulkQuantityResponse
- CreateInventoryCatalogMatchRefreshResponse
- CreateInventoryCatalogMatchRefreshResponseRun
- CreateInventoryCsvImportResponse
- CreateInventoryCsvImportResponseProblems
- CreateInventoryLabelRenameResponse
- CreateInventoryMergeResponse
- CreateInventoryResponse
- CreateInventoryUnitIdentifierResponse
- CreateInventoryUnitLookupResponse
- CreateInventoryUnitLookupResponseData
- CreateListingAiImagePromptResponse
- CreateListingAiImageResponse
- CreateListingBulkDeleteResponse
- CreateListingBulkDelistPreviewResponse
- CreateListingBulkDelistPreviewResponseMarketplaces
- CreateListingBulkHardDeleteResponse
- CreateListingBulkUpdateResponse
- CreateListingByIdResponse
- CreateListingByIdResponseItems
- CreateListingCheckDuplicateResponse
- CreateListingCheckDuplicateResponseMatches
- CreateListingCombineResponse
- CreateListingDiscrepancyResolveResponse
- CreateListingImportByUrlResponse
- CreateListingImportByUrlResponseListing
- CreateListingMagicFillResponse
- CreateListingMergeResponse
- CreateListingResponse
- CreateListingResponseJobs
- CreateListingResponseSkipped
- CreateLiveShipmentShipResponse
- CreateMagicScanResponse
- CreateMagicScanResponseEbayHits
- CreateMagicScanResponseEbayMatch
- CreateMagicScanResponsePhotoIdentifier
- CreateMagicScanResponsePhotoIdentifierIdentifier
- CreateMagicScanResponsePossibleDuplicates
- CreateMagicScanResponseTopHits
- CreateMagicScanSynthesizeResponse
- CreateMagicScanSynthesizeResponsePayload
- CreateMagicScanSynthesizeResponsePayloadCategory
- CreateMagicScanSynthesizeResponsePayloadDimensions
- CreateMagicScanSynthesizeResponsePayloadSectionApplicability
- CreateMeTemplateImportResponse
- CreateMeTemplateRenderResponse
- CreateMeTemplateRenderResponseMissingTokensItem
- CreateMeTemplateRenderResponseTokensUsedItem
- CreateMeTemplateShareResponse
- CreateMileageResponse
- CreateNetworkPoolResponse
- CreateNftMarketExternalResaleResponse
- CreateNftMarketListingResponse
- CreateNftMarketListingResponseListing
- CreateNotificationIntegrationTestResponse
- CreateOfferRespondRequest
- CreateOfferRespondResponse
- CreateOrderBulkDeleteResponse
- CreateOrderBulkMarkShippedResponse
- CreateOrderCancelResponse
- CreateOrderDisputeResponse
- CreateOrderDisputeResponseError
- CreateOrderImportResponse
- CreateOrderImportResponseResults
- CreateOrderLabelResponse
- CreateOrderMessageResponse
- CreateOrderPickupLabelResponse
- CreateOrderPickupLabelResponseData
- CreateOrderPickupResponse
- CreateOrderPickupResponseData
- CreateOrderPullPlatformLabelResponse
- CreateOrderRateResponse
- CreateOrderRefundResponse
- CreateOrderScanFormResponse
- CreateOrderScanFormResponseData
- CreateOrderWhatnotLabelResponse
- CreateOrderWhatnotLabelResponseShipment
- CreateOrderWhatnotLabelResponseShipmentDimensionsIn
- CreateOrderWhatnotPackageQuoteResponse
- CreatePatResponse
- CreatePayoutConnectOnboardRequest
- CreatePayoutConnectOnboardResponse
- CreatePayoutConnectOnboardResponseData
- CreatePlatformAccountConnectResponse
- CreatePlatformAccountDisconnectResponse
- CreatePlatformAccountHistoryImportRequest
- CreatePlatformAccountHistoryImportResponse
- CreatePlatformAccountRefreshStatusResponse
- CreatePlatformAccountRefreshStatusResponseResults
- CreatePolicyReturnReceivedResponse
- CreatePolicyReturnReceivedResponseData
- CreateProductionCandidateAcceptResponse
- CreateProductionCandidateAcceptResponseCandidate
- CreateProductionCandidateVoteResponse
- CreateProductionDesignSpecResponse
- CreateProductionDesignSpecResponsePrefs
- CreateProductionDesignSpecResponsePrefsBrief
- CreateProductionDesignSpecResponsePrefsBriefBox
- CreateProductionDesignSpecResponsePrefsSpec
- CreateProductionEstimateResponse
- CreateProductionEstimateResponseEstimate
- CreateProductionEstimateResponseEstimateBreakdown
- CreateProductionRunPurchaseResponse
- CreateReceiptRelistResponse
- CreateRepriceEventSkipResponse
- CreateRestockPromptRepublishResponse
- CreateSaleBulkDeleteResponse
- CreateSourcingReceiptResponse
- CreateSpatialAuctionRoomBidResponse
- CreateSpatialInviteAcceptResponse
- CreateSpatialInviteAcceptResponseData
- CreateSpatialPropertyDeedLeaseResponse
- CreateSpatialPropertyDeedLeaseResponseData
- CreateSpatialPropertyDeedListResponse
- CreateSpatialPropertyDeedListResponseData
- CreateSpatialPropertyDeedMaintenanceResponse
- CreateSpatialPropertyDeedMaintenanceResponseData
- CreateSpatialPropertyLeaseAcceptResponse
- CreateSpatialPropertyLeaseAcceptResponseData
- CreateSpatialPropertyLeaseEndResponse
- CreateSpatialPropertyLeaseEndResponseData
- CreateSpatialPropertyLeaseRentResponse
- CreateSpatialPropertyLeaseRentResponseData
- CreateSpatialPropertyListingBuyResponse
- CreateSpatialPropertyListingBuyResponseData
- CreateSpatialSceneGrantResponse
- CreateSpatialSceneGrantResponseData
- CreateSpatialSceneInviteResponse
- CreateSpatialSceneInviteResponseData
- CreateSpatialSceneNodeResponse
- CreateSpatialSceneNodeResponseData
- CreateSpatialSceneNodeResponseDataTransform
- CreateSpatialSceneRenameRequest
- CreateSpatialSceneRequest
- CreateSpatialSceneVisibilityRequest
- CreateSpatialShopNeighbourhoodResponse
- CreateSpatialShopNeighbourhoodResponseData
- CreateSpatialShopNeighbourhoodResponseDataMoved
- CreateSpatialShopStaffPayResponse
- CreateSpatialShopStaffPayResponseData
- CreateSpatialStreetApplyResponse
- CreateSpatialStreetApplyResponseData
- CreateSpatialStreetClaimResponse
- CreateSpatialStreetClaimResponseData
- CreateSpatialStreetOwnedUpkeepResponse
- CreateSpatialStreetOwnedUpkeepResponseData
- CreateSpatialStreetPlotBuyResponse
- CreateSpatialStreetPlotBuyResponseData
- CreateStallBookResponse
- CreateStallBookResponseBooking
- CreateStallBookResponseBookingBooth
- CreateStallBookResponseBookingOwner
- CreateStallBookResponseBookingQuote
- CreateStallBookResponseBookingStats
- CreateStallBookResponseBookingUnits
- CreateStallBookingCancelResponse
- CreateTeamAcceptResponse
- CreateTeamInviteResponse
- CreateTeamLeaveResponse
- CreateTeamRevokeResponse
- CreateTradeBlockEvolutionClaimResponse
- CreateTradeBlockEvolutionRecipeResponse
- CreateTradeBlockEvolutionRecipeResponseRecipe
- CreateTradeBlockOfferRespondResponse
- CreateTradeBlockSetRecipeResponse
- CreateTradeBlockSetRecipeResponseRecipe
- CreateTradeBlockSetRecipeResponseRecipeMembers
- CreateVariationGroupGenerateResponse
- CreateVariationGroupGenerateResponseData
- CreateVariationGroupPublishResponse
- CreateVariationGroupPublishResponseData
- CreateVariationGroupPublishResponseDataOutcomes
- CreateVariationGroupResponse
- CreateVariationGroupResponseData
- CreateVariationGroupResponseDataMembers
- CreateVariationGroupResponseDataRollup
- CreateVaultLendResponse
- CreateVaultMarketAdminMarkResponse
- CreateVaultMarketAdvanceRelistResponse
- CreateVaultMarketAgentDraftCancelResponse
- CreateVaultMarketAgentDraftCancelResponseDraft
- CreateVaultMarketAgentWatchResponse
- CreateVaultMarketAlertPrefTestResponse
- CreateVaultMarketAlertPrefTestResponsePlan
- CreateVaultMarketAuctionLotBidResponse
- CreateVaultMarketAuctionLotResponse
- CreateVaultMarketBlockAllocateResponse
- CreateVaultMarketCollectionWorthWatchResponse
- CreateVaultMarketCreatorAttributionResponse
- CreateVaultMarketCreatorAttributionResponseOneOf1Attribution
- CreateVaultMarketCreatorCohostInviteRespondResponse
- CreateVaultMarketCreditRepayResponse
- CreateVaultMarketDcmLinkResponse
- CreateVaultMarketDcmLinkResponseOneOfAccount
- CreateVaultMarketDcmLinkResponseOneOfPositions
- CreateVaultMarketDcmUnlinkResponse
- CreateVaultMarketDealerApplyResponse
- CreateVaultMarketDealerPoolPreviewResponse
- CreateVaultMarketDepositResponse
- CreateVaultMarketDonationResponse
- CreateVaultMarketEntityHaltResponse
- CreateVaultMarketEntityHaltResponseView
- CreateVaultMarketEntityHaltResponseViewSubaccounts
- CreateVaultMarketEntityKybResponse
- CreateVaultMarketEntityResponse
- CreateVaultMarketFollowCopyWatchAlertReadResponse
- CreateVaultMarketGiftResponse
- CreateVaultMarketGradingResponse
- CreateVaultMarketHallLoanCreditResponse
- CreateVaultMarketHallLoanOptOutResponse
- CreateVaultMarketHallLoanResponse
- CreateVaultMarketHallLoanResponseNext
- CreateVaultMarketIdentityStartResponse
- CreateVaultMarketIndexBuyResponse
- CreateVaultMarketIndexBuyResponseResults
- CreateVaultMarketIndexBuyResponseResultsOrder
- CreateVaultMarketIndexComplaintResponse
- CreateVaultMarketInstantExitResponse
- CreateVaultMarketInstantExitResponseQuote
- CreateVaultMarketInstantExitResponseQuoteLevels
- CreateVaultMarketJointCloseResponse
- CreateVaultMarketJointInviteResponse
- CreateVaultMarketJointMemberRemoveResponse
- CreateVaultMarketJointMemberRightResponse
- CreateVaultMarketJointRespondResponse
- CreateVaultMarketJointResponse
- CreateVaultMarketJointResponseInvited
- CreateVaultMarketJointTradeCancelResponse
- CreateVaultMarketJointTradeResponse
- CreateVaultMarketJointUnitRemoveResponse
- CreateVaultMarketJointUnitResponse
- CreateVaultMarketLearnQuizResponse
- CreateVaultMarketLoanRecallResponse
- CreateVaultMarketLoanUnitSellResponse
- CreateVaultMarketLongResponse
- CreateVaultMarketLongResponseUnits
- CreateVaultMarketLongResponseWaitsForCall
- CreateVaultMarketMmLpResponse
- CreateVaultMarketMmLpResponseKey
- CreateVaultMarketMmMassCancelResponse
- CreateVaultMarketOpeningWaitlistResponse
- CreateVaultMarketPaperMissionMarkCheckResponse
- CreateVaultMarketPaperMissionMarkCheckResponseMission
- CreateVaultMarketPaperMissionMarkCheckResponseNext
- CreateVaultMarketPaperOrderCancelResponse
- CreateVaultMarketPaperOrderResponse
- CreateVaultMarketPaperResetResponse
- CreateVaultMarketPartnerApplyResponse
- CreateVaultMarketPartnerApplyResponsePartner
- CreateVaultMarketPartnerBatchResponse
- CreateVaultMarketPartnerBatchResponseCreated
- CreateVaultMarketPartnerBatchResponseLabel
- CreateVaultMarketPoolStakeResponse
- CreateVaultMarketPoolStakeUnstakeResponse
- CreateVaultMarketPortfolioMarginEnrollResponse
- CreateVaultMarketPortfolioMarginEnrollResponseOneOf1Preview
- CreateVaultMarketPortfolioMarginEnrollResponseOneOf1PreviewBreakdown
- CreateVaultMarketPortfolioMarginEnrollResponseOneOf1PreviewBreakdownCash
- CreateVaultMarketPortfolioMarginEnrollResponseOneOf1PreviewBreakdownComponents
- CreateVaultMarketPortfolioMarginEnrollResponseOneOfAccount
- CreateVaultMarketPortfolioMarginEnrollResponseOneOfCurrent
- CreateVaultMarketPortfolioMarginEnrollResponseOneOfEligibility
- CreateVaultMarketPortfolioMarginLeaveResponse
- CreateVaultMarketPortfolioMarginWhatIfResponse
- CreateVaultMarketPortfolioMarginWhatIfResponseBefore
- CreateVaultMarketPositionCloseResponse
- CreateVaultMarketPositionCloseResponseRows
- CreateVaultMarketPositionCollateralResponse
- CreateVaultMarketPriceWidgetPreviewResponse
- CreateVaultMarketPriceWidgetPreviewResponseView
- CreateVaultMarketProBracketResponse
- CreateVaultMarketProOcoResponse
- CreateVaultMarketProOrderCancelAllResponse
- CreateVaultMarketProOrderResponse
- CreateVaultMarketProQuoteHeartbeatResponse
- CreateVaultMarketProQuoteResponse
- CreateVaultMarketProQuoteResponseBid
- CreateVaultMarketProTrailingStopResponse
- CreateVaultMarketProfileFollowResponse
- CreateVaultMarketRfqAcceptResponse
- CreateVaultMarketRfqRespondResponse
- CreateVaultMarketRfqResponse
- CreateVaultMarketSupplySendResponse
- CreateVaultMarketSupplySendResponseCreated
- CreateVaultMarketSupplySendResponseSkipped
- CreateVaultMarketTodClaimObjectResponse
- CreateVaultMarketTodMyClaimDocumentResponse
- CreateVaultMarketTodMyClaimResponse
- CreateVaultMarketValuationStatementResponse
- CreateVaultMarketValuationStatementResponseAccount
- CreateVaultMarketValuationStatementResponseSeal
- CreateVaultMarketValuationStatementResponseTotals
- CreateVaultMarketValuationStatementResponseTotalsByQuality
- CreateVaultMarketValuationStatementResponseUnits
- CreateVaultMarketValuationStatementResponseUnitsLastTrade
- CreateVaultMarketWatchlistResponse
- CreateVaultMarketWidgetTokenResponse
- CreateVaultReceiptTokenConfirmResponse
- CreateVaultReceiptTokenConfirmResponseToken
- CreateVaultReceiptTokenExportResponse
- CreateVaultReceiptTokenRedeemConfirmResponse
- CreateVaultReceiptTokenRedeemResponse
- CreateVaultReceiptTokenWalletAllowResponse
- CreateVideoRequestAnswerResponse
- CreateVideoRequestAnswerResponseData
- CreateVideoRequestUploadUrlResponse
- CreateVideoRequestUploadUrlResponseData
- CreateWeb3AuctionResponse
- CreateWeb3CreatorClaimResponse
- CreateWeb3CrosslistItem
- CreateWeb3CrosslistResponse
- CreateWeb3DropRemindResponse
- CreateWeb3FavoriteResponse
- CreateWeb3LaunchAirdropResponse
- CreateWeb3LaunchAirdropResponseOneOf1Txs
- CreateWeb3LaunchAirdropResponseOneOfTxs
- CreateWeb3LaunchArtResponse
- CreateWeb3LaunchFollowCreatorResponse
- CreateWeb3LaunchRevealResponse
- CreateWeb3OrderFulfillmentBatchResponse
- CreateWeb3OrderFulfillmentBatchResponseFulfillments
- CreateWeb3OrderFulfillmentBatchResponseFulfillmentsComponents
- CreateWeb3OrderFulfillmentBatchResponseSkipped
- CreateWeb3OrderResponse
- CreateWeb3OrderResponseOrder
- CreateWeb3OrderResponseOrderBundle
- CreateWeb3OrderResponseOrderCriteria
- CreateWeb3PhygitalRedeemResponse
- CreateWeb3PhygitalResponse
- CreateWeb3PhygitalResponsePhygital
- CreateWeb3PhygitalResponsePhygitalItem
- CreateWeb3PhygitalResponsePhygitalRedemption
- CreateWeb3RaribleDraftResponse
- CreateWeb3RaribleDraftResponseApproval
- CreateWeb3RaribleDraftResponseOrder
- CreateWeb3RaribleDraftResponseTypedData
- CreateWeb3RaribleDraftResponseTypedDataDomain
- CreateWeb3RaribleDraftResponseTypedDataMessage
- CreateWeb3RaribleDraftResponseTypedDataMessageMakeAsset
- CreateWeb3RaribleDraftResponseTypedDataTypes
- CreateWeb3SolanaListTxResponse
- CreateWeb3SolanaOfferConfirmResponse
- CreateWeb3SolanaOfferTxResponse
- CreateWeb3SolanaOrderBuyTxResponse
- CreateWeb3SolanaTensorBidPlaceTxResponse
- CreateWeb3SolanaTensorBidPlaceTxResponseTxs
- CreateWeb3TokenRefreshResponse
- CreateWeb3TransactionResponse
- CreateWeb3WalletChallengeResponse
- CreateWeb3WalletSyncResponse
- CreateWeb3WalletSyncResponseSummary
- CreateWeb3WalletSyncResponseSummaryChains
- CreateWeb3WalletVerifyResponse
- CreateWebhookResponse
- CreateWebhookTestResponse
- CreateWorkflowChainRunNowResponse
- CreateWorkflowChainToggleResponse
- CreateWorkflowChainToggleResponseChain
- CreateWorldAvatarEquipRequest
- CreateWorldAvatarEquipResponse
- CreateWorldAvatarEquipResponseData
- CreateWorldAvatarEquipResponseDataLoadout
- CreateWorldAvatarEquipResponseDataLoadoutSlotsItem
- CreateWorldAvatarEquipResponseDataLoadoutWorn
- CreateWorldAvatarUnequipRequest
- CreateWorldAvatarUnequipResponse
- CreateWorldAvatarUnequipResponseData
- CreateWorldAvatarWearableResponse
- CreateWorldAvatarWearableResponseData
- CreateWorldContestEntrySettlePaymentResponse
- CreateWorldContestEntrySettlePaymentResponseData
- CreateWorldContestJoinResponse
- CreateWorldContestJoinResponseData
- CreateWorldContestJoinResponseDataPayment
- CreateWorldContestResponse
- CreateWorldConventionAcceptResponse
- CreateWorldConventionAcceptResponseData
- CreateWorldConventionApplyResponse
- CreateWorldConventionApplyResponseData
- CreateWorldConventionResponse
- CreateWorldConventionResponseData
- CreateWorldCrewChatRequest
- CreateWorldCrewJoinRequest
- CreateWorldCrewJoinResponse
- CreateWorldCrewJoinResponseData
- CreateWorldCrewLeaveResponse
- CreateWorldCrewRequest
- CreateWorldCrewResponse
- CreateWorldCrewResponseData
- CreateWorldDecorDesignResponse
- CreateWorldDecorDesignResponseData
- CreateWorldDecorDesignSubmitResponse
- CreateWorldDecorDesignSubmitResponseData
- CreateWorldDecorRetractResponse
- CreateWorldDecorRetractResponseData
- CreateWorldDecorRetractResponseDataInventory
- CreateWorldDecorRetractResponseDataInventoryItems
- CreateWorldDecorRetractResponseDataInventorySpaces
- CreateWorldDmResponse
- CreateWorldFollowResponse
- CreateWorldFriendInviteRequest
- CreateWorldFriendInviteResponse
- CreateWorldFriendInviteResponseData
- CreateWorldGamePackageCheckResponse
- CreateWorldGamePackageCheckResponseData
- CreateWorldGamePackageCheckResponseDataFits
- CreateWorldGamePackageCheckResponseDataIssues
- CreateWorldGamePackageCheckResponseDataManifest
- CreateWorldGamePackageResponse
- CreateWorldGamePackageResponseData
- CreateWorldGamePackageResponseDataPackage
- CreateWorldGamePackageResponseDataStore
- CreateWorldGamePackageResponseDataVersion
- CreateWorldGameRatingResponse
- CreateWorldGameRatingResponseData
- CreateWorldGameReportResponse
- CreateWorldGameReportResponseData
- CreateWorldGameStoreCheckoutResponse
- CreateWorldGameStoreCheckoutResponseData
- CreateWorldGrailMatchResponse
- CreateWorldGrailMatchResponseData
- CreateWorldHallLoanResponse
- CreateWorldHallLoanResponseData
- CreateWorldHomeAskResponse
- CreateWorldHomeAskResponseData
- CreateWorldHomeGuestbookResponse
- CreateWorldHomeGuestbookResponseData
- CreateWorldInteractiveAssetResponse
- CreateWorldInteractiveAssetResponseData
- CreateWorldInteractiveDesignCheckResponse
- CreateWorldInteractiveDesignCheckResponseData
- CreateWorldInteractiveDesignPreviewResponse
- CreateWorldInteractiveDesignPreviewResponseData
- CreateWorldInteractiveDesignSubmitResponse
- CreateWorldInteractiveDesignSubmitResponseData
- CreateWorldInteractiveDesignSubmitResponseDataVersion
- CreateWorldInteractiveDesignSubmitResponseDataVersionReport
- CreateWorldInteractiveDesignSubmitResponseDataVersionReportStats
- CreateWorldInteractiveResetResponse
- CreateWorldInteractiveResetResponseData
- CreateWorldJobAppraisalAnswerResponse
- CreateWorldJobAppraisalAnswerResponseData
- CreateWorldJobShiftClaimResponse
- CreateWorldJobShiftReleaseResponse
- CreateWorldJobShiftReleaseResponseData
- CreateWorldOutfitApplyResponse
- CreateWorldOutfitApplyResponseData
- CreateWorldOutfitApplyResponseDataSkipped
- CreateWorldOutfitRequest
- CreateWorldOutfitResponse
- CreateWorldOutfitResponseData
- CreateWorldOutfitResponseDataPreset
- CreateWorldPartyInviteAcceptResponse
- CreateWorldPartyInviteAcceptResponseData
- CreateWorldPartyInviteResponse
- CreateWorldPartyKickResponse
- CreateWorldPartyKickResponseData
- CreateWorldPartyLeaderResponse
- CreateWorldPartyLeaderResponseData
- CreateWorldPartyLeaveResponse
- CreateWorldPartyLeaveResponseData
- CreateWorldPartyWishlistItem
- CreateWorldPartyWishlistResponse
- CreateWorldPlaceItemWantResponse
- CreateWorldPlaceItemWantResponseData
- CreateWorldSpaceEventResponse
- CreateWorldSpaceEventResponseData
- CreateWorldSpaceEventRsvpResponse
- CreateWorldSpaceEventRsvpResponseData
- CreateWorldSpaceInviteResponse
- CreateWorldSpaceInviteResponseData
- CreateWorldSpaceJoinResponse
- CreateWorldSpaceRequestByUserIdResponse
- CreateWorldSpaceRequestByUserIdResponseData
- CreateWorldSpaceResponse
- CreateWorldSpaceResponseData
- CreateWorldSpaceRoleResponse
- CreateWorldSpaceRoleResponseData
- DeleteAuthSessionResponse
- DeleteCosmHandleResponse
- DeleteCosmHandleResponseData
- DeleteCosmPegResponse
- DeleteCosmPegResponseData
- DeleteDaoProposalResponse
- DeleteDaoProposalResponseData
- DeleteDropResponse
- DeleteListingResponse
- DeleteMobilePushTokenResponse
- DeleteSpatialSceneGrantResponse
- DeleteSpatialSceneGrantResponseData
- DeleteSpatialSceneNodeResponse
- DeleteSpatialSceneNodeResponseData
- DeleteVaultMarketFollowCopyWatchResponse
- DeleteVaultMarketOpeningWaitlistResponse
- DeleteVaultMarketPriceWidgetResponse
- DeleteVaultMarketProQuoteResponse
- DeleteVaultMarketSetGoalResponse
- DeleteVaultMarketWidgetTokenByIdResponse
- DeleteVaultMarketWidgetTokenResponse
- DeleteWorldBlockResponse
- DeleteWorldBlockResponseData
- DeleteWorldHomeGuestbookResponse
- DeleteWorldHomeGuestbookResponseData
- DeleteWorldInteractiveDesignResponse
- DeleteWorldInteractiveDesignResponseData
- DeleteWorldJobShiftResponse
- DeleteWorldOutfitResponse
- DeleteWorldOutfitResponseData
- DeleteWorldPlaceBanResponse
- DeleteWorldPlaceBanResponseData
- DeleteWorldSpaceResponse
- DeleteWorldSpaceResponseData
- Error
- ErrorError
- GetAccountDeletionStatusResponse
- GetAccountDeletionStatusResponsePending
- GetActionLogFacetResponse
- GetAdOffsiteEligibilityResponse
- GetAdOffsiteEligibilityResponseData
- GetAdOffsiteReportResponse
- GetAdOffsiteReportResponseData
- GetAdOffsiteResponse
- GetAdOffsiteResponseData
- GetAdOffsiteResponseDataTerms
- GetAiProviderResponse
- GetAiProviderResponseProviders
- GetAiStatusResponse
- GetAiStatusResponseCapabilities
- GetAiStatusResponseCustomConfig
- GetAiStatusResponseImage
- GetAiStatusResponseImageSupportedProvidersItem
- GetAnalyticBookkeepingResponse
- GetAnalyticBookkeepingResponseAnnualTotals
- GetAnalyticBookkeepingResponseMonthlyPL
- GetAnalyticBookkeepingResponsePlatformBreakdown
- GetAnalyticByPlatformResponse
- GetAnalyticByPlatformResponseBreakdown
- GetAnalyticDashboardResponse
- GetAnalyticDashboardResponseAvgSalePriceByPlatform
- GetAnalyticDashboardResponseCancelRate
- GetAnalyticDashboardResponseRecentSales
- GetAnalyticDashboardResponseRevenue
- GetAnalyticDashboardResponseRevenueByDay
- GetAnalyticDashboardResponseSalesByPlatform
- GetAnalyticDashboardResponseSellThrough
- GetAnalyticDashboardResponseTop5ItemsByRevenue
- GetAnalyticDashboardResponseTopCategories
- GetAnalyticItemResponse
- GetAnalyticItemResponseItems
- GetAnalyticSummaryResponse
- GetAnalyticTimeseryResponse
- GetAnalyticTimeseryResponseSeries
- GetAnalyticTodayResponse
- GetAnalyticTodayResponseChecklist
- GetAnalyticTodayResponseInbox
- GetAnalyticTodayResponseStreak
- GetAutomationCatalogResponse
- GetAutomationCatalogResponseTriggerTypes
- GetAutomationRuleExportByIdResponse
- GetAutomationRuleExportByIdResponseAction
- GetAutomationRuleExportByIdResponseCondition
- GetAutomationRuleExportByIdResponseMetadata
- GetAutomationRuleExportResponse
- GetAutomationRuleResponse
- GetBrandDropPartnerResponse
- GetBrandDropPartnerResponseData
- GetBrandDropPartnerResponseDataPartner
- GetBrandDropPartnerResponseDataUsage
- GetBrandResponse
- GetBreakResponse
- GetBreakResponseData
- GetBreakResponseDataDraw
- GetBreakResponseDataSeller
- GetBreakResponseDataSpots
- GetCatalogLookupResponse
- GetCatalogLookupResponseData
- GetCatalogLookupResponseDataOffers
- GetCatalogLookupResponseDataOffersCatalog
- GetCatalogLookupResponseMeta
- GetCategoryResponse
- GetCbxAdCreditResponse
- GetCbxAdCreditResponseData
- GetCbxClaimResponse
- GetCbxClaimResponseData
- GetCbxCreditResponse
- GetCbxCreditResponseData
- GetCbxMeResponse
- GetCbxMeResponseData
- GetCbxMeResponseDataScopesItem
- GetCbxMeResponseDataTerms
- GetCbxPoolResponse
- GetCbxPoolResponseData
- GetCbxRevenueResponse
- GetCbxRevenueResponseData
- GetCbxSubjectBalanceBySubjectIdResponse
- GetCbxSubjectBalanceBySubjectIdResponseData
- GetCbxSubjectBalanceResponse
- GetCbxSubjectBalanceResponseData
- GetCbxSubjectSpentResponse
- GetCbxSubjectSpentResponseData
- GetCbxSubjectStakeResponse
- GetCbxSubjectStakeResponseData
- GetCbxSubjectWalletResponse
- GetCbxSubjectWalletResponseData
- GetCbxTreasuryResponse
- GetCbxTreasuryResponseData
- GetConnectionEmailResponse
- GetConnectionEmailResponseData
- GetConnectionEmailResponseOauth
- GetConnectionExtensionOnlineResponse
- GetConnectionHealthResponse
- GetConnectionHealthResponseAccounts
- GetConnectionHealthResponseAccountsAnchors
- GetConnectionHealthResponseAccountsBrowser
- GetConnectionHealthResponseAccountsLiveness
- GetConnectionHealthResponseExtension
- GetCosmAttestationProofResponse
- GetCosmAttestationProofResponseData
- GetCosmAuctionQuoteResponse
- GetCosmAuctionQuoteResponseData
- GetCosmBalanceResponse
- GetCosmBalanceResponseData
- GetCosmBalanceResponseDataTaper
- GetCosmDesignerCopyStateResponse
- GetCosmDesignerCopyStateResponseData
- GetCosmDesignerEarningResponse
- GetCosmDesignerEarningResponseData
- GetCosmDesignerTermResponse
- GetCosmDesignerTermResponseData
- GetCosmDesignerTermResponseDataPolicy
- GetCosmDesignerTermResponseDataRates
- GetCosmEmployeeFeeQuoteResponse
- GetCosmEmployeeFeeQuoteResponseData
- GetCosmHandleResponse
- GetCosmHandleResponseData
- GetCosmStakeTenureResponse
- GetCosmStakeTenureResponseData
- GetCosmSupplyResponse
- GetCosmSupplyResponseData
- GetCustomerResponse
- GetCustomerResponseContact
- GetCustomerResponseContactAddress
- GetCustomerResponseOrders
- GetCustomerResponseProfiles
- GetCustomerResponseStats
- GetDaoProposalTallyResponse
- GetDaoProposalTallyResponseData
- GetDepartmentResponse
- GetDropResponse
- GetDropResponseDrop
- GetGameLeaderboardResponse
- GetGameLeaderboardResponseData
- GetGameLeaderboardResponseDataWeek
- GetGenderResponse
- GetGradingWorthResponse
- GetGradingWorthResponseWorth
- GetGradingWorthResponseWorthGraders
- GetHomeResponse
- GetHomeResponseDecor
- GetHomeResponseGiftShelf
- GetHomeResponseGiftShelfItems
- GetHomeResponseGuestbook
- GetHomeResponseGuestbookAuthor
- GetHomeResponseLayout
- GetHomeResponseLayoutItem
- GetHomeResponseLayoutRef
- GetHomeResponsePinCase
- GetHomeResponseRoom
- GetHomeResponseRoomFloor
- GetHomeResponseSetWall
- GetHomeResponseSetWallChoices
- GetHomeResponseSetWallPieces
- GetHomeResponseVaultWall
- GetHomeResponseVaultWallUnits
- GetImportSiteResponse
- GetImportSiteResponseData
- GetImportSiteResponseDataSites
- GetInboxCannedResponseResponse
- GetInboxConversationMessageResponse
- GetInboxConversationMessageResponseMessages
- GetInboxResponse
- GetInboxResponseMessages
- GetInventoryAgingResponse
- GetInventoryAgingResponseData
- GetInventoryAgingResponseDataBuckets
- GetInventoryAgingResponseDataWorst
- GetInventoryCatalogMatchResponse
- GetInventoryCatalogMatchResponseSuggestions
- GetInventoryLabelResponse
- GetInventoryLabelStatResponse
- GetInventoryLabelStatResponseLabels
- GetInventoryResponse
- GetInventoryResponsePlatformListings
- GetInventoryResponsePlatformListingsDigitalFile
- GetInventoryResponsePlatformListingsMeasurements
- GetInventoryResponsePlatformListingsPersonalization
- GetInventorySellThroughResponse
- GetInventorySellThroughResponseData
- GetInventorySellThroughResponseDataComparison
- GetInventorySellThroughResponseDataWindow
- GetInventoryValueHistoryResponse
- GetInventoryValueHistoryResponseData
- GetInventoryValueHistoryResponseDataPoints
- GetListingFacetResponse
- GetListingResponse
- GetListingResponsePlatformListings
- GetListingSkuExistResponse
- GetListingVariationGroupResponse
- GetListingVariationGroupResponseGroup
- GetLoyaltyClubResponse
- GetLoyaltyClubResponseData
- GetLoyaltyClubResponseDataTiers
- GetMagicDraftResponse
- GetMagicDraftResponseDraft
- GetMainStageResponse
- GetMainStageResponseLive
- GetMainStageResponseLiveLineup
- GetMainStageResponseStream
- GetMainStageResponseUpcoming
- GetMarketMetalSpotHistoryResponse
- GetMarketMetalSpotHistoryResponseData
- GetMarketMetalSpotHistoryResponseDataPoints
- GetMarketProductRelatedResponse
- GetMarketProductRelatedResponseData
- GetMarketProductRelatedResponseDataBreadcrumb
- GetMarketProductRelatedResponseDataExplore
- GetMarketProductRelatedResponseDataRails
- GetMarketProductRelatedResponseDataSearches
- GetMarketProductResponse
- GetMarketProductResponseData
- GetMarketProductResponseDataMetal
- GetMarketProductResponseDataProduct
- GetMarketProductResponseDataProductImages
- GetMarketProductResponseDataProductProposedVariants
- GetMarketProductResponseDataVariants
- GetMarketScrapQuoteResponse
- GetMarketScrapQuoteResponseData
- GetMarketScrapQuoteResponseDataOffer
- GetMarketVariantBookResponse
- GetMarketVariantBookResponseData
- GetMarketVariantBookResponseDataBids
- GetMeResponse
- GetMeTemplateSuggestResponse
- GetMembershipResponse
- GetMileageSummaryResponse
- GetNeighbourhoodResponse
- GetNetworkPoolResponse
- GetNetworkPoolResponseMember
- GetNetworkPoolSizeResponse
- GetNftMarketListingResponse
- GetNftMarketListingResponseListings
- GetOauthInitResponse
- GetOfferResponse
- GetOfferResponseOffers
- GetOrderCancelEligibilityResponse
- GetOrderEvidenceResponse
- GetOrderEvidenceResponseData
- GetOrderEvidenceResponseDataArrival
- GetOrderEvidenceResponseDataCaptures
- GetOrderEvidenceResponseDataGrade
- GetOrderEvidenceResponseDataGradeSignals
- GetOrderEvidenceResponseDataPacking
- GetOrderEvidenceResponseDataPackingBoundaries
- GetOrderEvidenceResponseDataPackingClips
- GetOrderEvidenceResponseDataSeal
- GetOrderEvidenceResponseDataSealAssessment
- GetOrderEvidenceResponseDataSealSeals
- GetOrderEvidenceResponseDataUnits
- GetOrderProofOfDeliveryResponse
- GetOrderProofOfDeliveryResponseScans
- GetOrderScanFormResponse
- GetOrderShipmentResponse
- GetOrderShipmentResponseData
- GetOrderWhatnotPackingSlipResponse
- GetPatScopeResponse
- GetPatScopeResponseScopes
- GetPatternResponse
- GetPayoutConnectResponse
- GetPayoutConnectResponseData
- GetPayoutEstimateResponse
- GetPayoutGrossForNetResponse
- GetPayoutGrossForNetResponseData
- GetPetMineResponse
- GetPetMineResponsePets
- GetPlatformLimitResponse
- GetPlatformLimitResponseEbay
- GetPlatformLimitResponseEbaySellingCap
- GetPlatformLimitResponseEtsy
- GetPricingSettingResponse
- GetPricingSettingResponseData
- GetPricingSoldCompResponse
- GetPricingSoldCompResponseData
- GetProductionBallotResponse
- GetProductionBallotResponseBallot
- GetProductionCandidateResponse
- GetProductionCandidateResponseCandidates
- GetProductionCandidateResponseCandidatesDesignBrief
- GetProductionDesignPrefResponse
- GetProductionDesignPrefResponsePrefs
- GetProductionDropResponse
- GetProductionDropResponseDrops
- GetProductionEarningResponse
- GetProductionEarningResponseEarnings
- GetProductionEarningResponseEarningsLines
- GetProductionEarningResponseEarningsRecent
- GetProductionLineResponse
- GetProductionLineResponseLines
- GetProductionLineResponseLinesInventory
- GetProductionPoReconcileResponse
- GetProductionPoReconcileResponseReconciliation
- GetProductionPoResponse
- GetProductionRunResponse
- GetProductionRunResponseRuns
- GetReputationMineResponse
- GetReputationMineResponseTop
- GetReputationMineResponseTracks
- GetReputationMineResponseTracksHost
- GetReputationMineResponseUnlocks
- GetReputationMineResponseUnlocksHost
- GetReputationMineResponseUnlocksHostNext
- GetReputationResponse
- GetReputationResponseLevels
- GetShopListingProvenanceResponse
- GetShopListingProvenanceResponseProvenance
- GetShopListingProvenanceResponseProvenanceStories
- GetSizeSystemResponse
- GetSourcingReceiptResponse
- GetSpatialAddressResponse
- GetSpatialAddressResponseData
- GetSpatialAuctionPublicResponse
- GetSpatialAuctionPublicResponseData
- GetSpatialAuctionPublicResponseDataAuction
- GetSpatialAuctionPublicResponseDataAuctionCurrentLot
- GetSpatialAuctionRoomResponse
- GetSpatialAuctionRoomResponseData
- GetSpatialAuctionRoomResponseDataAuction
- GetSpatialEmoteResponse
- GetSpatialEmoteResponseMoments
- GetSpatialEmoteResponseMomentsPayload
- GetSpatialEmoteResponsePacks
- GetSpatialEmoteResponsePacksQuest
- GetSpatialEmoteResponseView
- GetSpatialEmoteResponseWheelItem
- GetSpatialEmployeeConfigResponse
- GetSpatialEmployeeConfigResponseData
- GetSpatialEmployeeConfigResponseDataConfig
- GetSpatialEmployeeConfigResponseDataConfigRules
- GetSpatialPartyResponse
- GetSpatialPartyResponseParty
- GetSpatialPartyResponsePartyInvites
- GetSpatialPartyResponsePartyMembers
- GetSpatialPropertyResponse
- GetSpatialPropertyResponseData
- GetSpatialPropertyResponseDataDeeds
- GetSpatialPropertyResponseDataDeedsLease
- GetSpatialPropertyResponseDataDeedsListing
- GetSpatialPublicResponse
- GetSpatialPublicResponseData
- GetSpatialPublicResponseDataItems
- GetSpatialPublicResponseDataProfile
- GetSpatialPublicResponseDataProfileContainers
- GetSpatialPublicResponseDataProfileDefaultGroupByItem
- GetSpatialPublicResponseDataProfileDefaultSortByItem
- GetSpatialPublicResponseDataProfileItemModelPoolItem
- GetSpatialPublicResponseDataProfileItemModelVariantsItem
- GetSpatialPublicResponseDataProfileItemSize
- GetSpatialPublicResponseDataScene
- GetSpatialPublicResponseDataSolved
- GetSpatialPublicResponseDataSolvedContainers
- GetSpatialPublicResponseDataSolvedDividers
- GetSpatialPublicResponseDataSolvedPlacements
- GetSpatialPublicResponseDataStands
- GetSpatialPublicResponseDataStats
- GetSpatialSceneAttentionResponse
- GetSpatialSceneAttentionResponseData
- GetSpatialSceneAttentionResponseDataItems
- GetSpatialSceneResponse
- GetSpatialSceneResponseData
- GetSpatialSceneResponseDataBreakdowns
- GetSpatialSceneResponseDataItems
- GetSpatialSceneResponseDataItemsSize
- GetSpatialSceneResponseDataScene
- GetSpatialSceneResponseDataStats
- GetSpatialSceneWarehouseResponse
- GetSpatialSceneWarehouseResponseData
- GetSpatialSceneWarehouseResponseDataBounds
- GetSpatialSceneWarehouseResponseDataCamera
- GetSpatialSceneWarehouseResponseDataRacks
- GetSpatialSceneWarehouseResponseDataRoom
- GetSpatialSceneWarehouseResponseDataRoomFloor
- GetSpatialSceneWarehouseResponseDataShell
- GetSpatialSceneWarehouseResponseDataShellCove
- GetSpatialSceneWarehouseResponseDataShellWall
- GetSpatialSceneWarehouseResponseDataStats
- GetSpatialSceneWarehouseResponseDataZones
- GetSpatialSceneWarehouseResponseDataZonesSize
- GetSpatialSceneWindowResponse
- GetSpatialSceneWindowResponseData
- GetSpatialSceneWindowResponseDataChoices
- GetSpatialShopNeighbourhoodResponse
- GetSpatialShopNeighbourhoodResponseData
- GetSpatialShopNeighbourhoodResponseDataOneOf1Home
- GetSpatialShopNeighbourhoodResponseDataOneOf1Move
- GetSpatialShopNeighbourhoodResponseDataOneOf1Shop
- GetSpatialShopStaffResponse
- GetSpatialShopStaffResponseData
- GetSpatialShopStaffResponseDataOneOf1Staff
- GetSpatialSpaceResponse
- GetSpatialSpaceResponseData
- GetSpatialSpaceResponseDataSpaces
- GetSpatialSpaceResponseDataSpacesFacetsItem
- GetSpatialSpaceResponseDataWarehouseUnits
- GetSpatialStreetAdmissionResponse
- GetSpatialStreetAdmissionResponseData
- GetSpatialStreetAdmissionResponseDataToDecide
- GetSpatialStreetDecorResponse
- GetSpatialStreetFoundingResponse
- GetSpatialStreetFoundingResponseData
- GetSpatialStreetFoundingResponseDataCbx
- GetSpatialStreetPlotQuoteResponse
- GetSpatialStreetPlotQuoteResponseData
- GetSpatialStreetResponse
- GetSpatialStreetResponseData
- GetSpatialStreetResponseDataDecor
- GetSpatialStreetResponseDataLife
- GetSpatialStreetResponseDataLifeBuskers
- GetSpatialStreetResponseDataPlots
- GetSpatialStreetResponseDataPlotsForSale
- GetSpatialStreetResponseDataPlotsLease
- GetSpatialStreetResponseDataPlotsLife
- GetSpatialStreetResponseDataPlotsShop
- GetSpatialStreetResponseDataPlotsSponsored
- GetStallQuoteResponse
- GetStallQuoteResponseQuote
- GetStallQuoteResponseQuoteOwner
- GetStallQuoteResponseQuoteRailsItem
- GetStallQuoteResponseQuoteUnits
- GetStorefrontShippingResponse
- GetStorefrontShippingResponseData
- GetStorefrontShippingResponseDataShipFrom
- GetStyleResponse
- GetTaxScheduleCResponse
- GetTaxScheduleCResponseCounts
- GetTaxScheduleCResponseExpenses
- GetTaxonomyCategoryAspectResponse
- GetTaxonomyCategoryAspectResponseAspects
- GetTaxonomyCategoryChildrenResponse
- GetTaxonomyCategoryChildrenResponseChildren
- GetTaxonomyCategoryResponse
- GetTaxonomyRequiredFieldResponse
- GetTaxonomyRequiredFieldResponseRequiredFields
- GetTeamResponse
- GetTeamResponseInvitations
- GetTeamResponseMembers
- GetTradeBlockEvolutionResponse
- GetTradeBlockEvolutionResponseUnlocks
- GetTradeBlockPostByIdResponse
- GetTradeBlockPostByIdResponsePost
- GetTradeBlockPostResponse
- GetTradeBlockTradeResponse
- GetTypeResponse
- GetVariationGroupPublishPlanResponse
- GetVariationGroupPublishPlanResponsePlans
- GetVaultAttestationResponse
- GetVaultAttestationResponseAttestations
- GetVaultAttestationResponseInsurance
- GetVaultAttestationResponseInsuranceKeysOverOccurrence
- GetVaultAttestationResponseKindsItem
- GetVaultAttestationResponseLatest
- GetVaultAttestationResponseLatestPhysicalCount
- GetVaultMarketAccountResponse
- GetVaultMarketAccountResponseAccount
- GetVaultMarketAccountResponseBalances
- GetVaultMarketAccountResponseGates
- GetVaultMarketAccountResponseIdentity
- GetVaultMarketAdlResponse
- GetVaultMarketAdlResponseRecentEvents
- GetVaultMarketAdvanceQuoteResponse
- GetVaultMarketAdvanceQuoteResponseSale
- GetVaultMarketAdvanceQuoteResponseUnit
- GetVaultMarketAlertPrefResponse
- GetVaultMarketAlertPrefResponseChannels
- GetVaultMarketAlertPrefResponseKinds
- GetVaultMarketAlertPrefResponseLocked
- GetVaultMarketAlertPrefResponseMatrix
- GetVaultMarketAlertPrefResponseMatrixPrice
- GetVaultMarketAlertPrefResponseQuietHours
- GetVaultMarketAlertPrefResponseTelegram
- GetVaultMarketAuctionLotResponse
- GetVaultMarketAuctionLotResponseEvent
- GetVaultMarketAuctionLotResponseMe
- GetVaultMarketAuctionMineResponse
- GetVaultMarketAuctionMineResponseBidding
- GetVaultMarketAuctionMineResponseConsigned
- GetVaultMarketBullionForResponse
- GetVaultMarketBullionForResponseFamilies
- GetVaultMarketBullionForResponseSpot
- GetVaultMarketBullionKeyResponse
- GetVaultMarketBullionKeyResponseBooks
- GetVaultMarketBullionKeyResponsePegs
- GetVaultMarketBullionKeyResponseProducts
- GetVaultMarketBullionPegPreviewResponse
- GetVaultMarketBullionPegPreviewResponseSpot
- GetVaultMarketCallItem
- GetVaultMarketCallResponse
- GetVaultMarketCapacityResponse
- GetVaultMarketChannelResponse
- GetVaultMarketChannelResponseNudgesToday
- GetVaultMarketCompareResponse
- GetVaultMarketCompareResponseSeries
- GetVaultMarketConfirmationResponse
- GetVaultMarketCorrelationResponse
- GetVaultMarketCreatorAttributionResponse
- GetVaultMarketCreatorDashboardResponse
- GetVaultMarketCreatorDashboardResponseCodes
- GetVaultMarketCreatorDashboardResponseEarnings
- GetVaultMarketCreatorDashboardResponseRecent
- GetVaultMarketCreatorProgrammeResponse
- GetVaultMarketCreatorRoomResponse
- GetVaultMarketCreatorRoomResponseRoom
- GetVaultMarketCreditResponse
- GetVaultMarketCreditResponseEvents
- GetVaultMarketCreditResponseUnits
- GetVaultMarketDcmContractBookResponse
- GetVaultMarketDcmContractBookResponseBids
- GetVaultMarketDcmContractBookResponseCrosslyIndex
- GetVaultMarketDcmContractResponse
- GetVaultMarketDcmContractResponseContract
- GetVaultMarketDcmContractResponseFunding
- GetVaultMarketDcmContractResponseFundingPrints
- GetVaultMarketDcmOptionsInputResponse
- GetVaultMarketDcmOptionsInputResponseForward
- GetVaultMarketDcmOptionsInputResponseGrid
- GetVaultMarketDcmOptionsInputResponseGridCall
- GetVaultMarketDcmOptionsInputResponseListed
- GetVaultMarketDcmOptionsInputResponseVol
- GetVaultMarketDcmPositionResponse
- GetVaultMarketDcmResponse
- GetVaultMarketDealerResponse
- GetVaultMarketDealerResponseDealer
- GetVaultMarketDigestPreviewResponse
- GetVaultMarketDigestPreviewResponseFirstMarks
- GetVaultMarketDigestPreviewResponseOffers
- GetVaultMarketDigestPreviewResponseValue
- GetVaultMarketEntityByIdResponse
- GetVaultMarketEntityByIdResponseCan
- GetVaultMarketEntityByIdResponseEntity
- GetVaultMarketEntityByIdResponseEntityCaps
- GetVaultMarketEntityByIdResponseHalts
- GetVaultMarketEntityByIdResponseMembers
- GetVaultMarketEntityByIdResponseSubaccounts
- GetVaultMarketEntityResponse
- GetVaultMarketEntityResponseEntities
- GetVaultMarketEntityResponseInvitations
- GetVaultMarketEstimateResponse
- GetVaultMarketExecutionQualityResponse
- GetVaultMarketExecutionQualityResponseBusiestKeys
- GetVaultMarketExecutionQualityResponseByOrderTypeAndSize
- GetVaultMarketExecutionQualityResponseTotal
- GetVaultMarketFeeQuoteResponse
- GetVaultMarketFeeQuoteResponseMaker
- GetVaultMarketFeeQuoteResponsePrograms
- GetVaultMarketFeeScheduleResponse
- GetVaultMarketFeeScheduleResponseSchedule
- GetVaultMarketFollowSharingResponse
- GetVaultMarketFollowSharingResponseExplain
- GetVaultMarketFollowSharingResponseSharing
- GetVaultMarketFollowSharingResponseSince
- GetVaultMarketGemRateResponse
- GetVaultMarketGemRateResponseCategory
- GetVaultMarketGemRateResponseItem
- GetVaultMarketGemRateResponseItemGraders
- GetVaultMarketGradeToVaultCandidateResponse
- GetVaultMarketGradeToVaultCandidateResponseInventory
- GetVaultMarketGradingSignalResponse
- GetVaultMarketGradingSignalResponseGraders
- GetVaultMarketHallLoanResponse
- GetVaultMarketHallLoanResponseEligible
- GetVaultMarketHallLoanResponseExhibition
- GetVaultMarketHallLoanResponseLoans
- GetVaultMarketHallLoanResponseLoansBadge
- GetVaultMarketHallLoanResponseReputation
- GetVaultMarketHallLoanResponseRules
- GetVaultMarketHealthResponse
- GetVaultMarketHealthResponseConcentration
- GetVaultMarketHealthResponseConcentrationByCategory
- GetVaultMarketHealthResponseConcentrationSingleItem
- GetVaultMarketHealthResponseItems
- GetVaultMarketHealthResponseLiquidity
- GetVaultMarketHealthResponseLiquidityTiers
- GetVaultMarketHealthResponseMarks
- GetVaultMarketHealthResponseMarksParts
- GetVaultMarketHealthResponseStress
- GetVaultMarketHealthResponseStressEverything
- GetVaultMarketHealthResponseStressRows
- GetVaultMarketHealthResponseTotals
- GetVaultMarketHealthWhatIfResponse
- GetVaultMarketHomeUnitResponse
- GetVaultMarketHomeUnitResponseHome
- GetVaultMarketHomeUnitResponseUnits
- GetVaultMarketIndexCalendarResponse
- GetVaultMarketIndexCalendarResponseCycles
- GetVaultMarketIndexFeedFundingResponse
- GetVaultMarketIndexFeedFundingResponseFunding
- GetVaultMarketIndexFeedFundingResponseIndex
- GetVaultMarketIndexFeedFundingResponseLevel
- GetVaultMarketIndexFeedFundingResponseLevelLastClose
- GetVaultMarketIndexFeedResponse
- GetVaultMarketIndexFeedResponseConstituents
- GetVaultMarketIndexFeedResponseFunding
- GetVaultMarketIndexFeedResponseSettlement
- GetVaultMarketIndexFeedResponseSettlementTwap
- GetVaultMarketIndexFeedSettlementResponse
- GetVaultMarketIndexFeedSettlementResponseSeries
- GetVaultMarketIndexLevelResponse
- GetVaultMarketIndexLicenceUsageResponse
- GetVaultMarketIndexLicenceUsageResponseUsage
- GetVaultMarketIndexMethodologyResponse
- GetVaultMarketIndexMethodologyResponseDailyMinPriced
- GetVaultMarketIndexMethodologyResponseEngines
- GetVaultMarketIndexMethodologyResponseEnginesPublicationGate
- GetVaultMarketIndexMethodologyResponseFamily
- GetVaultMarketIndexMethodologyResponseGovernance
- GetVaultMarketIndexMethodologyResponseKeyScreen
- GetVaultMarketIndexMethodologyResponseRevisions
- GetVaultMarketIndexMethodologyResponseWeightings
- GetVaultMarketIndexResponse
- GetVaultMarketIndexResponseHistory
- GetVaultMarketIndexResponseLastClose
- GetVaultMarketIndexResponseNow
- GetVaultMarketInstantExitResponse
- GetVaultMarketJointByIdResponse
- GetVaultMarketJointByIdResponseActivity
- GetVaultMarketJointByIdResponseEligible
- GetVaultMarketJointByIdResponseGate
- GetVaultMarketJointByIdResponseGateLimits
- GetVaultMarketJointByIdResponseGateRights
- GetVaultMarketJointByIdResponseMe
- GetVaultMarketJointByIdResponseMembers
- GetVaultMarketJointByIdResponseTotals
- GetVaultMarketJointByIdResponseTrades
- GetVaultMarketJointByIdResponseUnits
- GetVaultMarketJointResponse
- GetVaultMarketJointResponseInvitations
- GetVaultMarketJointResponseVaults
- GetVaultMarketKeyStatResponse
- GetVaultMarketLearnByConceptResponse
- GetVaultMarketLearnByConceptResponseQuiz
- GetVaultMarketLearnByConceptResponseRelatedItem
- GetVaultMarketLearnByConceptResponseSections
- GetVaultMarketLearnResponse
- GetVaultMarketLearnResponseConcepts
- GetVaultMarketLearnResponsePins
- GetVaultMarketLendingElectionResponse
- GetVaultMarketLendingElectionResponseEffect
- GetVaultMarketLendingProgrammeResponse
- GetVaultMarketLendingProgrammeResponseRateVsCurve
- GetVaultMarketLendingProgrammeResponseRevenue
- GetVaultMarketLendingProgrammeResponseTerms
- GetVaultMarketLendingStatementResponse
- GetVaultMarketLendingStatementResponseLines
- GetVaultMarketLiquidityResponse
- GetVaultMarketLiquidityResponseComponents
- GetVaultMarketLoanQuoteResponse
- GetVaultMarketLoanUnitSaleFloorResponse
- GetVaultMarketLocateResponse
- GetVaultMarketMarkResponse
- GetVaultMarketMarkResponseImpliedFrom
- GetVaultMarketMarkResponseRelated
- GetVaultMarketMarketModelResponse
- GetVaultMarketMarketModelResponseCall
- GetVaultMarketMarketModelResponseCallBand
- GetVaultMarketMarketModelResponseHalt
- GetVaultMarketMarketModelResponseLuld
- GetVaultMarketMarketModelResponseLuldBand
- GetVaultMarketMarketModelResponseNextCall
- GetVaultMarketMarketModelResponseRisk
- GetVaultMarketMarketModelResponseUpcoming
- GetVaultMarketMarketResponse
- GetVaultMarketMarketResponseAuctions
- GetVaultMarketMarketResponseHistory
- GetVaultMarketMarketResponseLending
- GetVaultMarketMarketResponseMark
- GetVaultMarketMarketResponseMarkRead
- GetVaultMarketMarketResponseOpenInterest
- GetVaultMarketMarketResponseTier
- GetVaultMarketMmKeyResponse
- GetVaultMarketMmKeyResponseDmm
- GetVaultMarketMmMmpResponse
- GetVaultMarketMmResponse
- GetVaultMarketMmResponseObligations
- GetVaultMarketMmResponseRebates
- GetVaultMarketMmResponseRules
- GetVaultMarketMmResponseRulesLpCoverageBps
- GetVaultMarketMmResponseRulesSpreadCapBps
- GetVaultMarketModeResponse
- GetVaultMarketModeResponseExplain
- GetVaultMarketNavResponse
- GetVaultMarketNavResponseHoldings
- GetVaultMarketNavResponseHoldingsAdministratorMark
- GetVaultMarketNavResponseHoldingsAsc820
- GetVaultMarketNavResponseHoldingsBid
- GetVaultMarketNavResponseHoldingsLiquidation
- GetVaultMarketNavResponseHoldingsMark
- GetVaultMarketNavResponseTotals
- GetVaultMarketNavResponseTotalsAdministratorNav
- GetVaultMarketOracleBySlugResponse
- GetVaultMarketOracleResponse
- GetVaultMarketOracleResponseFeeds
- GetVaultMarketOracleResponseFeedsLatest
- GetVaultMarketOracleResponseLast24h
- GetVaultMarketOracleResponseRules
- GetVaultMarketOrderHandlingResponse
- GetVaultMarketOrderHandlingResponseSections
- GetVaultMarketP2pDashboardResponse
- GetVaultMarketP2pDashboardResponseBorrowing
- GetVaultMarketP2pDashboardResponseGates
- GetVaultMarketP2pDashboardResponseLending
- GetVaultMarketP2pDashboardResponseOffers
- GetVaultMarketP2pDashboardResponseRules
- GetVaultMarketP2pLoanResponse
- GetVaultMarketP2pLoanResponseAuction
- GetVaultMarketP2pLoanResponseEvents
- GetVaultMarketP2pLoanResponseOwed
- GetVaultMarketPaperQuoteResponse
- GetVaultMarketPaperResponse
- GetVaultMarketPaperResponseLeaderboard
- GetVaultMarketPaperResponsePositions
- GetVaultMarketPaperResponseRecentFills
- GetVaultMarketPaperResponseWeek
- GetVaultMarketPaperResponseWorkingOrders
- GetVaultMarketPartnerMeResponse
- GetVaultMarketPartnerMeResponsePartnership
- GetVaultMarketPartnerMeResponsePartnershipBatches
- GetVaultMarketPartnerMeResponsePartnershipTotals
- GetVaultMarketPoolResponse
- GetVaultMarketPoolResponseUnstakeQueue
- GetVaultMarketPopReportResponse
- GetVaultMarketPopReportResponseFocus
- GetVaultMarketPopReportResponseGraders
- GetVaultMarketPopReportResponseProvider
- GetVaultMarketPortfolioHistoryResponse
- GetVaultMarketPortfolioHistoryResponseNow
- GetVaultMarketPortfolioHistoryResponseNowMarks
- GetVaultMarketPortfolioHistoryResponseSeries
- GetVaultMarketPortfolioMarginResponse
- GetVaultMarketPortfolioResponse
- GetVaultMarketPortfolioResponseHoldings
- GetVaultMarketPortfolioResponseOnLoan
- GetVaultMarketPortfolioResponseTotals
- GetVaultMarketPositionExitResponse
- GetVaultMarketPositionExitResponseExits
- GetVaultMarketPositionResponse
- GetVaultMarketPositionResponseInstructions
- GetVaultMarketPositionResponseLegs
- GetVaultMarketPositionResponseLoans
- GetVaultMarketPositionResponseSplits
- GetVaultMarketPressResponse
- GetVaultMarketPressResponseEmbed
- GetVaultMarketPressResponseIndexes
- GetVaultMarketProDepthResponse
- GetVaultMarketProDepthResponseAsks
- GetVaultMarketProDepthResponseBids
- GetVaultMarketProOrderResponse
- GetVaultMarketProSnapshotResponse
- GetVaultMarketProStatResponse
- GetVaultMarketProfileByHandleResponse
- GetVaultMarketProfileByHandleResponseOneOfHoldings
- GetVaultMarketProfileResponse
- GetVaultMarketProofOfReserveByDayResponse
- GetVaultMarketProofOfReserveByDayResponseUnits
- GetVaultMarketProofOfReserveMeResponse
- GetVaultMarketProofOfReserveMeResponseEntries
- GetVaultMarketProofOfReserveMeResponseEntriesFields
- GetVaultMarketProofOfReserveResponse
- GetVaultMarketProofOfReserveResponseAnchoring
- GetVaultMarketProofOfReserveResponseLatest
- GetVaultMarketProofOfReserveResponseMethod
- GetVaultMarketRateResponse
- GetVaultMarketRateResponseItems
- GetVaultMarketRateResponsePool
- GetVaultMarketReportResponse
- GetVaultMarketReportResponseGradePremiums
- GetVaultMarketReportResponseIndexes
- GetVaultMarketReportResponseMostLent
- GetVaultMarketReportResponsePrintable
- GetVaultMarketReportResponsePrintableQr
- GetVaultMarketReportResponsePrintableTable
- GetVaultMarketReportResponseRisers
- GetVaultMarketReportResponseTotals
- GetVaultMarketRfqResponse
- GetVaultMarketRiskReportResponse
- GetVaultMarketRiskReportResponseConcentration
- GetVaultMarketRiskReportResponseConcentrationByGrader
- GetVaultMarketRiskReportResponseConcentrationByShelf
- GetVaultMarketRiskReportResponseConcentrationPerKey
- GetVaultMarketRiskReportResponseConcentrationTop10
- GetVaultMarketRiskReportResponseLvar
- GetVaultMarketRiskReportResponseLvarOneDay
- GetVaultMarketRiskReportResponseLvarOneDayP95
- GetVaultMarketRiskReportResponsePartnerDcm
- GetVaultMarketRiskReportResponsePartnerDcmByCategory
- GetVaultMarketRiskReportResponsePartnerDcmNotInScenario
- GetVaultMarketRiskReportResponsePartnerDcmPositions
- GetVaultMarketRiskReportResponsePartnerDcmTotals
- GetVaultMarketRiskReportResponseStress
- GetVaultMarketRiskReportResponseStressBooksThinTo25
- GetVaultMarketRiskReportResponseStressCategoryDown30
- GetVaultMarketRiskReportResponseStressCbxDown50
- GetVaultMarketRiskReportResponseStressHistoricalDrawdown
- GetVaultMarketRiskReportResponseVar
- GetVaultMarketRiskReportResponseVarOneDay
- GetVaultMarketRiskReportResponseVarOneDayP95
- GetVaultMarketRiskReportResponseVarProxied
- GetVaultMarketRiskReportResponseVarUncovered
- GetVaultMarketRiskStatResponse
- GetVaultMarketRiskStatResponseBeta
- GetVaultMarketSetGoalBasketPlanResponse
- GetVaultMarketSetGoalBasketPlanResponseLegs
- GetVaultMarketSetGoalBasketPlanResponseSkipped
- GetVaultMarketSetGoalResponse
- GetVaultMarketSetGoalResponseBasket
- GetVaultMarketSetGoalResponseOptions
- GetVaultMarketSetGoalResponsePieces
- GetVaultMarketSetGoalResponsePiecesBid
- GetVaultMarketSetGoalResponseTarget
- GetVaultMarketStatementByMonthResponse
- GetVaultMarketStatementByMonthResponseOneOf1Fees
- GetVaultMarketStatementByMonthResponseOneOf1Holdings
- GetVaultMarketStatementByMonthResponseOneOf1Summary
- GetVaultMarketStatementByMonthResponseOneOf1SummaryBought
- GetVaultMarketStatementResponse
- GetVaultMarketStatementResponseMonths
- GetVaultMarketSupplyBatchResponse
- GetVaultMarketSupplyResponse
- GetVaultMarketSupplyResponseChange
- GetVaultMarketSupplyResponseNow
- GetVaultMarketSupplyResponseSeries
- GetVaultMarketSupplyRoundUpResponse
- GetVaultMarketSupplyRoundUpResponseRoundUp
- GetVaultMarketSupplyRoundUpResponseRoundUpEntries
- GetVaultMarketTaxLossSuggestionResponse
- GetVaultMarketTaxLossSuggestionResponseRealisedThisYear
- GetVaultMarketTaxLossSuggestionResponseSuggestions
- GetVaultMarketTaxLossSuggestionResponseSuggestionsLot
- GetVaultMarketTaxLossSuggestionResponseTotals
- GetVaultMarketTaxResponse
- GetVaultMarketTaxResponseFiles
- GetVaultMarketTaxResponseGiftsOut
- GetVaultMarketTaxResponseIncome
- GetVaultMarketTaxResponsePositions
- GetVaultMarketTaxResponsePurchases
- GetVaultMarketTaxResponseSales
- GetVaultMarketTaxResponseTotals
- GetVaultMarketTaxResponseTotalsPurchases
- GetVaultMarketTaxResponseTotalsSales
- GetVaultMarketTcaByOrderIdResponse
- GetVaultMarketTcaByOrderIdResponseArrival
- GetVaultMarketTcaByOrderIdResponseImplementationShortfall
- GetVaultMarketTcaByOrderIdResponseSlippage
- GetVaultMarketTcaResponse
- GetVaultMarketTcaResponseItems
- GetVaultMarketTcaResponseSummary
- GetVaultMarketTodMyClaimResponse
- GetVaultMarketTodMyClaimResponseClaims
- GetVaultMarketTodMyClaimResponseClaimsPlanned
- GetVaultMarketTodMyClaimResponseGate
- GetVaultMarketTodResponse
- GetVaultMarketTodResponseBeneficiaries
- GetVaultMarketTodResponseClaims
- GetVaultMarketTodResponseUnits
- GetVaultMarketUnitArResponse
- GetVaultMarketUnitEvidenceResponse
- GetVaultMarketUnitEvidenceResponseGrades
- GetVaultMarketUnitEvidenceResponseModel
- GetVaultMarketUnitEvidenceResponseScans
- GetVaultMarketUnitEvidenceResponseSummary
- GetVaultMarketUnitQuoteResponse
- GetVaultMarketUnitQuoteResponseSellBack
- GetVaultMarketUnitStoryResponse
- GetVaultMarketUnitStoryResponseBadgesItem
- GetVaultMarketUnitStoryResponseChain
- GetVaultMarketUnitStoryResponseChainBroken
- GetVaultMarketUnitStoryResponseEvents
- GetVaultMarketUnitStoryResponseEventsChain
- GetVaultMarketUnitStoryResponseEventsEvidence
- GetVaultMarketUnitStoryResponseEventsFrom
- GetVaultMarketUnitStoryResponseHolder
- GetVaultMarketUnitStoryResponseStats
- GetVaultMarketUnitStoryResponseUnit
- GetVaultMarketValuationStatementPreviewResponse
- GetVaultMarketValuationStatementResponse
- GetVaultMarketValuationStatementResponseSeal
- GetVaultMarketValuationStatementResponseVerify
- GetVaultMarketValuationStatementVerifyResponse
- GetVaultMarketValuationStatementVerifyResponseSeal
- GetVaultMarketValuationStatementVerifyResponseTotals
- GetVaultMarketValueResponse
- GetVaultMarketValueResponseKeys
- GetVaultMarketValueResponseKeysInstantExit
- GetVaultMarketValueResponseKeysMark
- GetVaultMarketValueResponseSku
- GetVaultMarketVaultSuggestionItemResponse
- GetVaultMarketVaultSuggestionItemResponseSuggestion
- GetVaultMarketVaultSuggestionItemResponseSuggestionInstantExit
- GetVaultMarketVaultSuggestionItemResponseSuggestionMarket
- GetVaultMarketVaultSuggestionItemResponseSuggestionParts
- GetVaultMarketVaultSuggestionItemResponseSuggestionVaultFee
- GetVaultMarketWidgetIndexResponse
- GetVaultMarketWidgetIndexResponsePoints
- GetVaultMarketWidgetMarkResponse
- GetVaultMarketWidgetMarkResponsePoints
- GetVaultMarketWidgetSummaryResponse
- GetVaultMarketWidgetSummaryResponseLinks
- GetVaultMarketWidgetSummaryResponseMovers
- GetVaultMarketWidgetSummaryResponseMoversItems
- GetVaultMarketWidgetSummaryResponsePortfolio
- GetVaultMarketWidgetSummaryResponseWatch
- GetVaultMarketWorldFloorResponse
- GetVaultMarketWorldFloorResponseBell
- GetVaultMarketWorldFloorResponseTickers
- GetVaultMarketWorldFloorResponseTrades
- GetVaultMarketWorldLoungeResponse
- GetVaultMarketWorldLoungeResponseYou
- GetVaultMarketWorldPlaceVaultGateResponse
- GetVaultMarketWorldPlaceVaultGateResponseOneOf1Gate
- GetVaultMarketWorthResponse
- GetVaultMarketWorthResponseInstantExit
- GetVaultMarketWorthResponseMark
- GetVaultMarketWorthResponseMarkImpliedFrom
- GetVaultMarketWorthResponseMine
- GetVaultMarketWorthResponseMineSellNow
- GetVaultMarketWorthVaultResponse
- GetVaultMarketWorthVaultResponseSellNow
- GetVaultMarketWorthVaultResponseSellNowBlocked
- GetVaultReceiptResponse
- GetVaultReceiptResponseChain
- GetVaultReceiptResponseEvents
- GetVaultReceiptTokenByMintResponse
- GetVaultReceiptTokenResponse
- GetVaultReceiptTokenResponseEvents
- GetWeb3AuctionResponse
- GetWeb3AuctionResponseAuction
- GetWeb3BrowseResponse
- GetWeb3BrowseResponseCategories
- GetWeb3BrowseResponseChains
- GetWeb3BrowseResponseTop
- GetWeb3CollectionDepthResponse
- GetWeb3CollectionDepthResponseAsks
- GetWeb3CollectionDepthResponseTraitFloors
- GetWeb3CollectionInsightResponse
- GetWeb3CollectionInsightResponseDaily
- GetWeb3CollectionInsightResponseHolders
- GetWeb3CollectionInsightResponseHoldersDistribution
- GetWeb3CollectionInsightResponseHoldersTop
- GetWeb3CollectionInsightResponseStats
- GetWeb3CollectionInsightResponseStatsLastSale
- GetWeb3CollectionInsightResponseTransfers
- GetWeb3CollectionItemResponse
- GetWeb3CollectionItemResponseIndexed
- GetWeb3CollectionItemResponseItems
- GetWeb3CollectionItemResponseItemsListing
- GetWeb3CollectionResponse
- GetWeb3CollectionResponseCollection
- GetWeb3CollectionResponseStats
- GetWeb3CollectionTraitResponse
- GetWeb3CollectionTraitResponseTraits
- GetWeb3CollectionTraitTokenResponse
- GetWeb3CollectorResponse
- GetWeb3CollectorResponseMarks
- GetWeb3CreatorResponse
- GetWeb3CreatorResponseDaily
- GetWeb3CreatorResponseHolders
- GetWeb3CreatorResponseMint
- GetWeb3CreatorResponseRecent
- GetWeb3CreatorResponseSales
- GetWeb3CreatorResponseSalesByMarketplace
- GetWeb3CrosslistQuoteResponse
- GetWeb3CrosslistQuoteResponseCrossly
- GetWeb3CrosslistQuoteResponseOpensea
- GetWeb3CrosslistQuoteResponseOpenseaFees
- GetWeb3CrosslistQuoteResponseRarible
- GetWeb3CrosslistQuoteResponseTensor
- GetWeb3FeaturedResponse
- GetWeb3FeaturedResponseBanners
- GetWeb3InventoryResponse
- GetWeb3InventoryResponseNft
- GetWeb3InventoryResponseNftListings
- GetWeb3InventoryResponseNftRecentSales
- GetWeb3LaunchAllowlistRootTxResponse
- GetWeb3LaunchDeployTxResponse
- GetWeb3LaunchToolResponse
- GetWeb3LaunchToolResponseAllowlist
- GetWeb3LaunchToolResponseArt
- GetWeb3LaunchToolResponseSupply
- GetWeb3OrderFulfillmentResponse
- GetWeb3OrderFulfillmentResponseComponents
- GetWeb3OrderFulfillmentResponseComponentsConsideration
- GetWeb3OrderFulfillmentResponseComponentsOffer
- GetWeb3OrderFulfillmentResponseConsiderationCriteria
- GetWeb3Phygital2Response
- GetWeb3Phygital2ResponseLinked
- GetWeb3Phygital2ResponseLinkedShipTo
- GetWeb3PhygitalResponse
- GetWeb3PhygitalResponsePhygital
- GetWeb3PortfolioResponse
- GetWeb3PortfolioResponseHoldings
- GetWeb3PortfolioResponseRealized
- GetWeb3PortfolioResponseTotals
- GetWeb3PortfolioTaxResponse
- GetWeb3ProfileResponse
- GetWeb3ProfileResponseListings
- GetWeb3ProfileResponseNfts
- GetWeb3ResolveResponse
- GetWeb3SolanaCollectionTensorBidResponse
- GetWeb3SolanaCollectionTensorBidResponseBids
- GetWeb3SolanaCollectionTensorBidResponseBidsTrait
- GetWeb3TokenResponse
- GetWeb3TokenResponseCollection
- GetWeb3TokenResponseElsewhere
- GetWeb3TokenResponseTraits
- GetWorkflowChainResponse
- GetWorkflowChainResponseSteps
- GetWorldArcadeResponse
- GetWorldArcadeResponseData
- GetWorldArcadeResponseDataCabinets
- GetWorldArcadeResponseDataCabinetsPiece
- GetWorldArcadeResponseDataScores
- GetWorldAuroraResponse
- GetWorldAuroraResponseData
- GetWorldAuroraResponseDataFamilies
- GetWorldAuroraResponseDataSales
- GetWorldAutoShopResponse
- GetWorldAutoShopResponseData
- GetWorldAutoShopResponseDataShop
- GetWorldAvatarIdentityResponse
- GetWorldAvatarIdentityResponseData
- GetWorldAvatarLoadoutResponse
- GetWorldAvatarLoadoutResponseData
- GetWorldAvatarLoadoutResponseDataSlotsItem
- GetWorldAvatarLoadoutResponseDataWorn
- GetWorldAvatarLoadoutResponseDataWornCosmetic
- GetWorldAvatarLoadoutResponseDataWornItem
- GetWorldAvatarLoadoutResponseDataWornMark
- GetWorldAvatarLookResponse
- GetWorldAvatarLookResponseData
- GetWorldAvatarLookResponseDataLook
- GetWorldAvatarLookResponseDataLookLook
- GetWorldAvatarNftBadgeResponse
- GetWorldAvatarNftBadgeResponseBadge
- GetWorldCapabilityCatalogueResponse
- GetWorldCapabilityCatalogueResponseData
- GetWorldCapabilityCatalogueResponseDataKinds
- GetWorldCapabilityCatalogueResponseDataKindsClientsItem
- GetWorldCapabilityResponse
- GetWorldCapabilityResponseData
- GetWorldCapabilityResponseDataTokens
- GetWorldCapabilityWearResponse
- GetWorldCapabilityWearResponseData
- GetWorldCapabilityWearResponseDataPicks
- GetWorldCapabilityWearResponseDataWorn
- GetWorldChestResponse
- GetWorldChestResponseData
- GetWorldChestResponseDataMine
- GetWorldCollectionCapabilityResponse
- GetWorldContestMineResponse
- GetWorldContestMineResponseData
- GetWorldContestMineResponseDataEntries
- GetWorldContestMineResponseDataPrizes
- GetWorldConventionResponse
- GetWorldCosmBalanceResponse
- GetWorldCosmBalanceResponseData
- GetWorldCrewResponse
- GetWorldCrewResponseData
- GetWorldCrewResponseDataCrew
- GetWorldCrewResponseDataMembers
- GetWorldDmItem
- GetWorldDmResponse
- GetWorldEmoteShowableResponse
- GetWorldEmoteShowableResponseData
- GetWorldEmoteShowableResponseDataListings
- GetWorldEmoteShowableResponseDataListingsRef
- GetWorldFireflyResponse
- GetWorldFireflyResponseData
- GetWorldFireflyResponseDataMine
- GetWorldFitStatResponse
- GetWorldFitStatResponseData
- GetWorldFitValueResponse
- GetWorldFitValueResponseData
- GetWorldGameLeaderboardResponse
- GetWorldGameLeaderboardResponseData
- GetWorldGameLeaderboardResponseDataScoring
- GetWorldGameLeaderboardResponseDataWeek
- GetWorldGamePackageResponse
- GetWorldGamePackageResponseData
- GetWorldGamePackageResponseDataStats
- GetWorldGamePackageResponseDataStatsReports
- GetWorldGamePackageResponseDataStatsRewards
- GetWorldGamePackageResponseDataStatsSales
- GetWorldGamePackageResponseDataVersions
- GetWorldGameResponse
- GetWorldGameResponseData
- GetWorldGameResponseDataContests
- GetWorldGameResponseDataContestsEntryItem
- GetWorldGameResponseDataPiece
- GetWorldGameResponseDataPlacesItem
- GetWorldGameResponseDataPlayers
- GetWorldGameResponseDataRewards
- GetWorldGameResponseDataStore
- GetWorldGameTemplateResponse
- GetWorldGameTemplateResponseData
- GetWorldGameTemplateResponseDataFiles
- GetWorldHallLoanResponse
- GetWorldHallLoanResponseData
- GetWorldHallLoanResponseDataEligible
- GetWorldHallLoanResponseDataExhibition
- GetWorldHallLoanResponseDataLoans
- GetWorldHallResponse
- GetWorldHallResponseData
- GetWorldHallResponseDataExhibition
- GetWorldHallResponseDataExhibits
- GetWorldHallResponseDataExhibitsLoan
- GetWorldHomePlaceableResponse
- GetWorldHomePlaceableResponseData
- GetWorldHomePlaceableResponseDataItems
- GetWorldHomePlaceableResponseDataItemsRef
- GetWorldHuntResponse
- GetWorldHuntResponseData
- GetWorldHuntResponseDataCleared
- GetWorldHuntResponseDataKeys
- GetWorldHuntResponseDataSeason
- GetWorldHuntScoreboardResponse
- GetWorldHuntScoreboardResponseData
- GetWorldHuntScoreboardResponseDataFinishers
- GetWorldInteractiveDesignResponse
- GetWorldInteractiveDesignResponseData
- GetWorldInteractiveDesignResponseDataValidation
- GetWorldInteractiveDesignResponseDataValidationStats
- GetWorldInteractiveDesignResponseDataVersions
- GetWorldInteractiveDesignResponseDataVersionsReport
- GetWorldJobResponse
- GetWorldJobResponseData
- GetWorldJobResponseDataAppraisals
- GetWorldJobResponseDataMine
- GetWorldJobResponseDataMineShifts
- GetWorldKiteResponse
- GetWorldKiteResponseData
- GetWorldKiteResponseDataMine
- GetWorldPlaceBoardResponse
- GetWorldPlaceBoardResponseData
- GetWorldPlaceBoardResponseDataDesk
- GetWorldPlaceBoardResponseDataIndexes
- GetWorldPlaceBoardResponseDataVaultMovers
- GetWorldPlaceBoardResponseDataWants
- GetWorldPlaceCollectionResponse
- GetWorldPlaceCollectionResponseData
- GetWorldPlaceCollectionResponseDataPieces
- GetWorldPlaceCollectionResponseDataRoom
- GetWorldPlaceDropResponse
- GetWorldPlaceDropResponseData
- GetWorldPlaceDropResponseDataDrop
- GetWorldPlaceItemInterestResponse
- GetWorldPlaceItemInterestResponseData
- GetWorldPlaceLiveResponse
- GetWorldPlaceLiveResponseData
- GetWorldPlaceLiveResponseDataLot
- GetWorldPlaceLiveResponseDataStream
- GetWorldPlaceSellerResponse
- GetWorldPlaceSellerResponseData
- GetWorldPlaceShopPetResponse
- GetWorldRoomFunnelResponse
- GetWorldRoomFunnelResponseData
- GetWorldShelfResponse
- GetWorldShelfResponseData
- GetWorldSkusCheapestResponse
- GetWorldSkusCheapestResponseData
- GetWorldSpaceCanHostResponse
- GetWorldSpaceCanHostResponseData
- GetWorldSpaceResponse
- GetWorldSpaceResponseData
- GetWorldSpaceResponseDataEvents
- GetWorldSpaceResponseDataLayout
- GetWorldSpaceResponseDataLayoutProps
- GetWorldSpaceResponseDataShowcase
- GetWorldSpaceResponseDataYou
- GetWorldTrialLeaderboardResponse
- GetWorldTrialLeaderboardResponseData
- GetWorldTrialLeaderboardResponseDataCourse
- GetWorldTrialLeaderboardResponseDataWeekly
- GetWorldTrialMineResponse
- GetWorldTrialMineResponseData
- GetWorldTrialMineResponseDataCourses
- GetWorldTrialMineResponseDataCoursesAllTime
- GetWorldTrialMineResponseDataCoursesWeek
- GetWorldWalletResponse
- GetWorldWalletResponseData
- GetWorldWishResponse
- GetWorldWishResponseData
- GetWorldWishResponseDataMine
- IdResponse
- IdStatusResponse
- LineMessage
- ListAccountsItem
- ListAccountsResponse
- ListActionLogCallsItem
- ListActionLogCallsResponse
- ListActionLogItem
- ListActionLogResponse
- ListAuthSessionsItem
- ListAuthSessionsResponse
- ListAutomationRulesItem
- ListAutomationRulesResponse
- ListAutomationRunsItem
- ListAutomationRunsResponse
- ListBrandDropListingsItem
- ListBrandDropListingsResponse
- ListBrandDropsItem
- ListBrandDropsResponse
- ListBreaksItem
- ListBreaksResponse
- ListCatalogMatchesItem
- ListCatalogMatchesItemItem
- ListCatalogMatchesItemProduct
- ListCatalogMatchesResponse
- ListCbxAdCreditLedgerItem
- ListCbxAdCreditLedgerResponse
- ListCbxBoostsItem
- ListCbxBoostsResponse
- ListCbxCampaignPayoutsItem
- ListCbxCampaignPayoutsResponse
- ListCbxCampaignsItem
- ListCbxCampaignsResponse
- ListCbxDisbursementProgressItem
- ListCbxDisbursementProgressResponse
- ListCbxDisbursementRulesItem
- ListCbxDisbursementRulesResponse
- ListCbxEarnTiersItem
- ListCbxEarnTiersResponse
- ListCbxRedemptionServicesItem
- ListCbxRedemptionServicesResponse
- ListCbxStakeTiersItem
- ListCbxStakeTiersResponse
- ListCbxSubjectGrantsItem
- ListCbxSubjectGrantsResponse
- ListCbxSubjectLedgerItem
- ListCbxSubjectLedgerResponse
- ListCbxWalletPaymentReviewItem
- ListCbxWalletPaymentReviewResponse
- ListCompWatchlistRecentItem
- ListCompWatchlistRecentResponse
- ListCompWatchlistsItem
- ListCompWatchlistsResponse
- ListConnectedAppsItem
- ListConnectedAppsResponse
- ListConnectionsItem
- ListConnectionsResponse
- ListCosmAttestationsItem
- ListCosmAttestationsResponse
- ListCosmAuctionItem
- ListCosmAuctionResponse
- ListCosmCosmeticsItem
- ListCosmCosmeticsResponse
- ListCosmGoalsItem
- ListCosmGoalsResponse
- ListCosmInventoryItem
- ListCosmInventoryResponse
- ListCosmPegsItem
- ListCosmPegsResponse
- ListCosmSupplyEpochsItem
- ListCosmSupplyEpochsResponse
- ListCosmSupplyScheduleItem
- ListCosmSupplyScheduleResponse
- ListCosmUnlocksItem
- ListCosmUnlocksResponse
- ListCosmWithdrawalsItem
- ListCosmWithdrawalsResponse
- ListCustomersItem
- ListCustomersItemBestRating
- ListCustomersResponse
- ListDaoProposalsItem
- ListDaoProposalsResponse
- ListDevicesItem
- ListDevicesResponse
- ListDropMineItem
- ListDropMineItemListings
- ListDropMineItemSeller
- ListDropMineItemStats
- ListDropMineItemStreet
- ListDropMineResponse
- ListEmbedKeysItem
- ListEmbedKeysResponse
- ListFestivalsItem
- ListFestivalsResponse
- ListGameBreakUpcomingItem
- ListGameBreakUpcomingItemHits
- ListGameBreakUpcomingItemSpots
- ListGameBreakUpcomingResponse
- ListGameHuntsItem
- ListGameHuntsItemStall
- ListGameHuntsResponse
- ListGameResultMineItem
- ListGameResultMineResponse
- ListGradingRateCardItem
- ListGradingRateCardResponse
- ListGradingRunsItem
- ListGradingRunsResponse
- ListGradingSubmissionsItem
- ListGradingSubmissionsItemGrading
- ListGradingSubmissionsResponse
- ListHomeMineBuildersItem
- ListHomeMineBuildersResponse
- ListHomeOfTheWeekItem
- ListHomeOfTheWeekResponse
- ListImportsItem
- ListImportsItemFilters
- ListImportsResponse
- ListInboxItem
- ListInboxResponse
- ListInsightByPlatformItem
- ListInsightByPlatformResponse
- ListInventoryActivityItem
- ListInventoryActivityResponse
- ListInventoryItem
- ListInventoryResponse
- ListInventoryUnitsItem
- ListInventoryUnitsItemIdentifiers
- ListInventoryUnitsResponse
- ListJobAppraisalsItem
- ListJobAppraisalsItemAnswerList
- ListJobAppraisalsResponse
- ListJobShiftsItem
- ListJobShiftsResponse
- ListLayawaysItem
- ListLayawaysItemSchedule
- ListLayawaysResponse
- ListListingAiDetectionsItem
- ListListingAiDetectionsResponse
- ListListingDiscrepanciesItem
- ListListingDiscrepanciesResponse
- ListListingIdsResponse
- ListListingsItem
- ListListingsResponse
- ListLiveShipmentsItem
- ListLiveShipmentsItemOrders
- ListLiveShipmentsResponse
- ListLoyaltyMembersItem
- ListLoyaltyMembersResponse
- ListMagicRecentItem
- ListMagicRecentResponse
- ListMainStageEventsItem
- ListMainStageEventsResponse
- ListMarketBullionItem
- ListMarketBullionResponse
- ListMarketGradersItem
- ListMarketGradersResponse
- ListMarketMetalSpotItem
- ListMarketMetalSpotResponse
- ListMarketProductsItem
- ListMarketProductsResponse
- ListMarketVariantTiersItem
- ListMarketVariantTiersResponse
- ListMeTemplatesItem
- ListMeTemplatesResponse
- ListMileageItem
- ListMileageResponse
- ListMobilePushTokensItem
- ListMobilePushTokensResponse
- ListNeighbourhoodsItem
- ListNeighbourhoodsItemAnchor
- ListNeighbourhoodsItemNextEvent
- ListNeighbourhoodsResponse
- ListNetworkPoolLogItem
- ListNetworkPoolLogResponse
- ListNotificationIntegrationsItem
- ListNotificationIntegrationsResponse
- ListOrderPickupReadyItem
- ListOrderPickupReadyItemOrders
- ListOrderPickupReadyResponse
- ListOrderPickupsItem
- ListOrderPickupsResponse
- ListOrderScanFormsItem
- ListOrderScanFormsResponse
- ListOrderUnitsItem
- ListOrderUnitsResponse
- ListOrdersItem
- ListOrdersItemTrackingHistory
- ListOrdersResponse
- ListPassportsItem
- ListPassportsResponse
- ListPatItem
- ListPatResponse
- ListPayoutCompareItem
- ListPayoutCompareResponse
- ListPolicyPresetsItem
- ListPolicyPresetsResponse
- ListPolicyReturnsItem
- ListPolicyReturnsResponse
- ListReferenceCountriesItem
- ListReferenceCountriesItemSubdivisions
- ListReferenceCountriesResponse
- ListRentalOffersItem
- ListRentalOffersResponse
- ListRentalsItem
- ListRentalsResponse
- ListRepriceEventsItem
- ListRepriceEventsResponse
- ListRestockPromptsItem
- ListRestockPromptsResponse
- ListReturnsItem
- ListReturnsResponse
- ListSalesItem
- ListSalesItemDocuments
- ListSalesResponse
- ListSavedViewsItem
- ListSavedViewsResponse
- ListScanCapturesItem
- ListScanCapturesResponse
- ListScanModelsItem
- ListScanModelsResponse
- ListSourcingDemandItem
- ListSourcingDemandMineItem
- ListSourcingDemandMineResponse
- ListSourcingDemandResponse
- ListSpatialAuctionRoomLotsItem
- ListSpatialAuctionRoomLotsResponse
- ListSpatialAuctionRoomsItem
- ListSpatialAuctionRoomsResponse
- ListSpatialDeedListingsItem
- ListSpatialDeedListingsResponse
- ListSpatialEmployeeSessionsItem
- ListSpatialEmployeeSessionsResponse
- ListSpatialEmployeeUsageItem
- ListSpatialEmployeeUsageResponse
- ListSpatialMomentsItem
- ListSpatialMomentsResponse
- ListSpatialPublicItem
- ListSpatialPublicOffersItem
- ListSpatialPublicOffersResponse
- ListSpatialPublicResponse
- ListSpatialSceneGrantsItem
- ListSpatialSceneGrantsResponse
- ListSpatialSceneMovementsItem
- ListSpatialSceneMovementsResponse
- ListSpatialSceneWarehouseUnplacedItem
- ListSpatialSceneWarehouseUnplacedResponse
- ListSpatialScenesItem
- ListSpatialScenesResponse
- ListSpatialSharedWithMeItem
- ListSpatialSharedWithMeResponse
- ListSpatialShopAddressesItem
- ListSpatialShopAddressesResponse
- ListSpatialStaffingItem
- ListSpatialStaffingResponse
- ListSpatialStreetLeasesItem
- ListSpatialStreetLeasesResponse
- ListSpatialStreetMineItem
- ListSpatialStreetMineResponse
- ListSpatialStreetsItem
- ListSpatialStreetsResponse
- ListStallMineItem
- ListStallMineItemBoothTrimmed
- ListStallMineItemQuote
- ListStallMineItemQuoteLines
- ListStallMineItemStats
- ListStallMineResponse
- ListStreetDropsItem
- ListStreetDropsResponse
- ListStreetEventsItem
- ListStreetEventsResponse
- ListStreetStallsItem
- ListStreetStallsItemFootprint
- ListStreetStallsItemListings
- ListStreetStallsItemSeller
- ListStreetStallsResponse
- ListTaxonomySuggestItem
- ListTaxonomySuggestResponse
- ListVariationGroupsItem
- ListVariationGroupsResponse
- ListVaultMarketAccountsItem
- ListVaultMarketAccountsResponse
- ListVaultMarketAdlEventsItem
- ListVaultMarketAdlEventsResponse
- ListVaultMarketAdlPositionsItem
- ListVaultMarketAdlPositionsResponse
- ListVaultMarketAgentDraftsItem
- ListVaultMarketAgentDraftsItemOrderBody
- ListVaultMarketAgentDraftsResponse
- ListVaultMarketAgentWatchesItem
- ListVaultMarketAgentWatchesResponse
- ListVaultMarketAlertLogItem
- ListVaultMarketAlertLogResponse
- ListVaultMarketAlertsItem
- ListVaultMarketAlertsResponse
- ListVaultMarketAuctionsItem
- ListVaultMarketAuctionsItemLots
- ListVaultMarketAuctionsResponse
- ListVaultMarketBlocksItem
- ListVaultMarketBlocksItemLines
- ListVaultMarketBlocksItemOrder
- ListVaultMarketBlocksResponse
- ListVaultMarketBullionFamilyPegsItem
- ListVaultMarketBullionFamilyPegsResponse
- ListVaultMarketBullionKeysItem
- ListVaultMarketBullionKeysResponse
- ListVaultMarketBullionPegsItem
- ListVaultMarketBullionPegsResponse
- ListVaultMarketCollectionWorthItem
- ListVaultMarketCollectionWorthResponse
- ListVaultMarketConfirmationsItem
- ListVaultMarketConfirmationsResponse
- ListVaultMarketCreatorCohostInvitesItem
- ListVaultMarketCreatorCohostInvitesItemKey
- ListVaultMarketCreatorCohostInvitesResponse
- ListVaultMarketCreditItem
- ListVaultMarketCreditResponse
- ListVaultMarketDealerBandsItem
- ListVaultMarketDealerBandsResponse
- ListVaultMarketDealerBidsItem
- ListVaultMarketDealerBidsResponse
- ListVaultMarketDealerPoolFillsItem
- ListVaultMarketDealerPoolFillsResponse
- ListVaultMarketDealerPoolsItem
- ListVaultMarketDealerPoolsItemLadder
- ListVaultMarketDealerPoolsItemLadderBids
- ListVaultMarketDealerPoolsItemLegs
- ListVaultMarketDealerPoolsItemOpsPause
- ListVaultMarketDealerPoolsItemRecycle
- ListVaultMarketDealerPoolsResponse
- ListVaultMarketDigestHistoryItem
- ListVaultMarketDigestHistoryResponse
- ListVaultMarketEntityAuditItem
- ListVaultMarketEntityAuditResponse
- ListVaultMarketEntityConversionsItem
- ListVaultMarketEntityConversionsResponse
- ListVaultMarketEstimatesAccuracyItem
- ListVaultMarketEstimatesAccuracyResponse
- ListVaultMarketFeedItem
- ListVaultMarketFeedItemMark
- ListVaultMarketFeedResponse
- ListVaultMarketFollowCopyWatchAlertsItem
- ListVaultMarketFollowCopyWatchAlertsResponse
- ListVaultMarketFollowCopyWatchItem
- ListVaultMarketFollowCopyWatchResponse
- ListVaultMarketFollowFeedItem
- ListVaultMarketFollowFeedItemExhibition
- ListVaultMarketFollowFeedResponse
- ListVaultMarketFollowFollowingItem
- ListVaultMarketFollowFollowingItemShares
- ListVaultMarketFollowFollowingResponse
- ListVaultMarketFollowLeaderboardsItem
- ListVaultMarketFollowLeaderboardsResponse
- ListVaultMarketGiftsItem
- ListVaultMarketGiftsResponse
- ListVaultMarketGradeToVaultItem
- ListVaultMarketGradeToVaultItemAsk
- ListVaultMarketGradeToVaultItemEvidence
- ListVaultMarketGradeToVaultItemGates
- ListVaultMarketGradeToVaultItemGatesGradingRuns
- ListVaultMarketGradeToVaultItemMarket
- ListVaultMarketGradeToVaultItemSubmission
- ListVaultMarketGradeToVaultItemUnit
- ListVaultMarketGradeToVaultResponse
- ListVaultMarketGradingItem
- ListVaultMarketGradingResponse
- ListVaultMarketHallLendersItem
- ListVaultMarketHallLendersResponse
- ListVaultMarketIndexCommitteeMinutesItem
- ListVaultMarketIndexCommitteeMinutesItemAttendees
- ListVaultMarketIndexCommitteeMinutesItemDecisions
- ListVaultMarketIndexCommitteeMinutesResponse
- ListVaultMarketIndexComplaintsItem
- ListVaultMarketIndexComplaintsResponse
- ListVaultMarketIndexConsultationsItem
- ListVaultMarketIndexConsultationsItemComments
- ListVaultMarketIndexConsultationsResponse
- ListVaultMarketIndexEventsItem
- ListVaultMarketIndexEventsResponse
- ListVaultMarketIndexJudgmentsItem
- ListVaultMarketIndexJudgmentsResponse
- ListVaultMarketIndexLevelSeriesItem
- ListVaultMarketIndexLevelSeriesItemOneOf1Band95
- ListVaultMarketIndexLevelSeriesResponse
- ListVaultMarketIndexLicenceMineItem
- ListVaultMarketIndexLicenceMineResponse
- ListVaultMarketIndexMembersItem
- ListVaultMarketIndexMembersResponse
- ListVaultMarketIndexesItem
- ListVaultMarketIndexesResponse
- ListVaultMarketInstantExitHistoryItem
- ListVaultMarketInstantExitHistoryResponse
- ListVaultMarketInstantExitHoldingsItem
- ListVaultMarketInstantExitHoldingsResponse
- ListVaultMarketJointTradesItem
- ListVaultMarketJointTradesResponse
- ListVaultMarketLargeTraderReportsItem
- ListVaultMarketLargeTraderReportsResponse
- ListVaultMarketLendingStatementsItem
- ListVaultMarketLendingStatementsResponse
- ListVaultMarketLoansItem
- ListVaultMarketLoansResponse
- ListVaultMarketLocateMineItem
- ListVaultMarketLocateMineItemCollateral
- ListVaultMarketLocateMineResponse
- ListVaultMarketMidpointItem
- ListVaultMarketMidpointResponse
- ListVaultMarketMoversItem
- ListVaultMarketMoversResponse
- ListVaultMarketNavHistoryItem
- ListVaultMarketNavHistoryResponse
- ListVaultMarketOffersItem
- ListVaultMarketOffersItemInstantExit
- ListVaultMarketOffersResponse
- ListVaultMarketOpeningItem
- ListVaultMarketOpeningItemEarlyAccess
- ListVaultMarketOpeningItemEarlyAccessYou
- ListVaultMarketOpeningItemKey
- ListVaultMarketOpeningItemMe
- ListVaultMarketOpeningResponse
- ListVaultMarketOracleHistoryItem
- ListVaultMarketOracleHistoryResponse
- ListVaultMarketP2pLoansItem
- ListVaultMarketP2pLoansResponse
- ListVaultMarketP2pOffersItem
- ListVaultMarketP2pOffersResponse
- ListVaultMarketP2pUnitsItem
- ListVaultMarketP2pUnitsResponse
- ListVaultMarketPaperFillsItem
- ListVaultMarketPaperFillsResponse
- ListVaultMarketPaperLeaderboardItem
- ListVaultMarketPaperLeaderboardResponse
- ListVaultMarketPaperMissionsItem
- ListVaultMarketPaperMissionsResponse
- ListVaultMarketPaperOrdersItem
- ListVaultMarketPaperOrdersResponse
- ListVaultMarketPartnerAccrualsItem
- ListVaultMarketPartnerAccrualsResponse
- ListVaultMarketPoolStakesItem
- ListVaultMarketPoolStakesResponse
- ListVaultMarketPortfolioMarginHistoryItem
- ListVaultMarketPortfolioMarginHistoryResponse
- ListVaultMarketPositionUnitsItem
- ListVaultMarketPositionUnitsResponse
- ListVaultMarketPositionsItem
- ListVaultMarketPositionsResponse
- ListVaultMarketPositionsRiskItem
- ListVaultMarketPositionsRiskResponse
- ListVaultMarketPriceWidgetsItem
- ListVaultMarketPriceWidgetsItemAffiliateCode
- ListVaultMarketPriceWidgetsItemFrame
- ListVaultMarketPriceWidgetsItemSnippets
- ListVaultMarketPriceWidgetsResponse
- ListVaultMarketProCandlesItem
- ListVaultMarketProCandlesResponse
- ListVaultMarketProEventsItem
- ListVaultMarketProEventsResponse
- ListVaultMarketProLinksItem
- ListVaultMarketProLinksResponse
- ListVaultMarketProOrdersItem
- ListVaultMarketProOrdersResponse
- ListVaultMarketProQuotesItem
- ListVaultMarketProQuotesResponse
- ListVaultMarketProRewardsItem
- ListVaultMarketProRewardsResponse
- ListVaultMarketProTapeItem
- ListVaultMarketProTapeResponse
- ListVaultMarketProofOfReserveLeavesItem
- ListVaultMarketProofOfReserveLeavesResponse
- ListVaultMarketRecurringItem
- ListVaultMarketRecurringResponse
- ListVaultMarketRecurringRunsItem
- ListVaultMarketRecurringRunsResponse
- ListVaultMarketRfqInboxItem
- ListVaultMarketRfqInboxItemMyAnswer
- ListVaultMarketRfqInboxResponse
- ListVaultMarketRfqItem
- ListVaultMarketRfqResponse
- ListVaultMarketSetGoalBasketsItem
- ListVaultMarketSetGoalBasketsItemCounts
- ListVaultMarketSetGoalBasketsItemLegs
- ListVaultMarketSetGoalBasketsResponse
- ListVaultMarketSetGoalSetsItem
- ListVaultMarketSetGoalSetsResponse
- ListVaultMarketSetGoalsItem
- ListVaultMarketSetGoalsItemBasket
- ListVaultMarketSetGoalsResponse
- ListVaultMarketShareCardsItem
- ListVaultMarketShareCardsItemAmounts
- ListVaultMarketShareCardsItemChange
- ListVaultMarketShareCardsItemLevel
- ListVaultMarketShareCardsItemLinks
- ListVaultMarketShareCardsItemMark
- ListVaultMarketShareCardsItemPortfolio
- ListVaultMarketShareCardsResponse
- ListVaultMarketSupplyDepositsItem
- ListVaultMarketSupplyDepositsItemExit
- ListVaultMarketSupplyDepositsResponse
- ListVaultMarketSupplyInvitesItem
- ListVaultMarketSupplyInvitesItemKey
- ListVaultMarketSupplyInvitesResponse
- ListVaultMarketValuationStatementsItem
- ListVaultMarketValuationStatementsResponse
- ListVaultMarketVaultSuggestionsItem
- ListVaultMarketVaultSuggestionsResponse
- ListVaultMarketWatchlistItem
- ListVaultMarketWatchlistResponse
- ListVaultMarketWidgetTokensItem
- ListVaultMarketWidgetTokensResponse
- ListVaultMarketWorldCohostsItem
- ListVaultMarketWorldCohostsItemCreator
- ListVaultMarketWorldCohostsItemShow
- ListVaultMarketWorldCohostsResponse
- ListVaultMarketWorldCreatorRoomsItem
- ListVaultMarketWorldCreatorRoomsResponse
- ListVaultMarketWorldMarketOpenItem
- ListVaultMarketWorldMarketOpenItemCohost
- ListVaultMarketWorldMarketOpenItemShow
- ListVaultMarketWorldMarketOpenResponse
- ListVaultReceiptTokenWalletsItem
- ListVaultReceiptTokenWalletsResponse
- ListVaultReceiptTokensItem
- ListVaultReceiptTokensItemToken
- ListVaultReceiptTokensResponse
- ListVaultReceiptsItem
- ListVaultReceiptsResponse
- ListVaultUnitListItem
- ListVaultUnitListResponse
- ListVideoRequestsItem
- ListVideoRequestsResponse
- ListWeb3ActivityItem
- ListWeb3ActivityResponse
- ListWeb3AlertsItem
- ListWeb3AlertsItemCollection
- ListWeb3AlertsItemToken
- ListWeb3AlertsResponse
- ListWeb3ApprovalsItem
- ListWeb3ApprovalsResponse
- ListWeb3AuctionsItem
- ListWeb3AuctionsItemTopBid
- ListWeb3AuctionsResponse
- ListWeb3BrowseCollectionsItem
- ListWeb3BrowseCollectionsResponse
- ListWeb3BrowseTokensItem
- ListWeb3BrowseTokensItemListing
- ListWeb3BrowseTokensResponse
- ListWeb3BundlesItem
- ListWeb3BundlesItemItems
- ListWeb3BundlesResponse
- ListWeb3CollectionHistoryItem
- ListWeb3CollectionHistoryResponse
- ListWeb3CollectionsItem
- ListWeb3CollectionsResponse
- ListWeb3CreatorCollectionsItem
- ListWeb3CreatorCollectionsResponse
- ListWeb3DropsItem
- ListWeb3DropsResponse
- ListWeb3HolderPerksItem
- ListWeb3HolderPerksResponse
- ListWeb3LaunchesItem
- ListWeb3LaunchesItemCreator
- ListWeb3LaunchesItemHolderGate
- ListWeb3LaunchesResponse
- ListWeb3ListingsItem
- ListWeb3ListingsItemTrait
- ListWeb3ListingsResponse
- ListWeb3MarketplaceKeysItem
- ListWeb3MarketplaceKeysItemYourKey
- ListWeb3MarketplaceKeysResponse
- ListWeb3NftsItem
- ListWeb3NftsResponse
- ListWeb3OrdersItem
- ListWeb3OrdersResponse
- ListWeb3PurchasesItem
- ListWeb3PurchasesResponse
- ListWeb3RankingsItem
- ListWeb3RankingsResponse
- ListWeb3SalesItem
- ListWeb3SalesItemToken
- ListWeb3SalesResponse
- ListWeb3SearchItem
- ListWeb3SearchResponse
- ListWeb3SearchTokensItem
- ListWeb3SearchTokensItemCollection
- ListWeb3SearchTokensResponse
- ListWeb3WalletsItem
- ListWeb3WalletsResponse
- ListWeb3WatchlistItem
- ListWeb3WatchlistItemCollection
- ListWeb3WatchlistItemLastSale
- ListWeb3WatchlistResponse
- ListWebhooksItem
- ListWebhooksResponse
- ListWorkflowChainsItem
- ListWorkflowChainsResponse
- ListWorldAvatarClosetItem
- ListWorldAvatarClosetResponse
- ListWorldAvatarStockItem
- ListWorldAvatarStockResponse
- ListWorldAvatarWearablesItem
- ListWorldAvatarWearablesResponse
- ListWorldBestDressedItem
- ListWorldBestDressedResponse
- ListWorldBlocksItem
- ListWorldBlocksResponse
- ListWorldCapabilityDeclarationsItem
- ListWorldCapabilityDeclarationsItemCapabilities
- ListWorldCapabilityDeclarationsItemDeclaration
- ListWorldCapabilityDeclarationsItemDeclarationCapabilities
- ListWorldCapabilityDeclarationsItemDeclarationCollection
- ListWorldCapabilityDeclarationsResponse
- ListWorldContestStandingsItem
- ListWorldContestStandingsResponse
- ListWorldContestsItem
- ListWorldContestsResponse
- ListWorldConventionExhibitorsItem
- ListWorldConventionExhibitorsResponse
- ListWorldConventionMineItem
- ListWorldConventionMineResponse
- ListWorldConventionsItem
- ListWorldConventionsResponse
- ListWorldCosmDesignsItem
- ListWorldCosmDesignsItemPopularity
- ListWorldCosmDesignsResponse
- ListWorldCosmInventoryItem
- ListWorldCosmInventoryResponse
- ListWorldDecorCatalogueItem
- ListWorldDecorCatalogueItemBuyWithItem
- ListWorldDecorCatalogueResponse
- ListWorldDecorDesignsResponse
- ListWorldDecorInventoryItem
- ListWorldDecorInventoryItemCopies
- ListWorldDecorInventoryItemPlacements
- ListWorldDecorInventoryResponse
- ListWorldDecorMarketItem
- ListWorldDecorMarketResponse
- ListWorldDecorMineItem
- ListWorldDecorMineResponse
- ListWorldDecorStreetsItem
- ListWorldDecorStreetsItemDecor
- ListWorldDecorStreetsResponse
- ListWorldDmsItem
- ListWorldDmsItemLast
- ListWorldDmsResponse
- ListWorldFollowingRoomsItem
- ListWorldFollowingRoomsResponse
- ListWorldFollowsItem
- ListWorldFollowsResponse
- ListWorldFriendsItem
- ListWorldFriendsResponse
- ListWorldGamePackagesItem
- ListWorldGamePackagesResponse
- ListWorldGameRewardsItem
- ListWorldGameRewardsResponse
- ListWorldGamesItem
- ListWorldGamesItemPlacesItem
- ListWorldGamesResponse
- ListWorldHomeBuildingItem
- ListWorldHomeBuildingResponse
- ListWorldInteractiveCatalogueItem
- ListWorldInteractiveCatalogueResponse
- ListWorldInteractiveDesignsItem
- ListWorldInteractiveDesignsItemLatestVersion
- ListWorldInteractiveDesignsResponse
- ListWorldItemSearchItem
- ListWorldItemSearchResponse
- ListWorldOutfitsItem
- ListWorldOutfitsItemAppearance
- ListWorldOutfitsItemItems
- ListWorldOutfitsResponse
- ListWorldPlaceBansItem
- ListWorldPlaceBansResponse
- ListWorldPlaceBundlesItem
- ListWorldPlaceBundlesResponse
- ListWorldPlaceCollectionsItem
- ListWorldPlaceCollectionsResponse
- ListWorldPlaceOffersItem
- ListWorldPlaceOffersItemMarket
- ListWorldPlaceOffersResponse
- ListWorldPlaceRadarItem
- ListWorldPlaceRadarResponse
- ListWorldPlaceTradeTablesItem
- ListWorldPlaceTradeTablesItemCash
- ListWorldPlaceTradeTablesItemLine
- ListWorldPlaceTradeTablesItemMat
- ListWorldPlaceTradeTablesItemShook
- ListWorldPlaceTradeTablesItemTotals
- ListWorldPlaceTradeTablesItemVisitor
- ListWorldPlaceTradeTablesResponse
- ListWorldPlaceTradesItem
- ListWorldPlaceTradesResponse
- ListWorldProvenanceItem
- ListWorldProvenanceResponse
- ListWorldQuestsItem
- ListWorldQuestsResponse
- ListWorldRoomWantsItem
- ListWorldRoomWantsResponse
- ListWorldSpaceRequestsItem
- ListWorldSpaceRequestsResponse
- ListWorldSpaceWhatsOnItem
- ListWorldSpaceWhatsOnResponse
- ListWorldSpacesItem
- ListWorldSpacesItemNext
- ListWorldSpacesResponse
- ListWorldStreaksItem
- ListWorldStreaksResponse
- ListWorldTradeMineItem
- ListWorldTradeMineItemItems
- ListWorldTradeMineResponse
- ListWorldTradeTableBinderItem
- ListWorldTradeTableBinderResponse
- ListWorldTradeTableListingsItem
- ListWorldTradeTableListingsResponse
- LowCentsHighCents
- MainSub
- MakerTaker
- NameSlug
- OkResponse
- OrderHashResponse
- Pagination
- PassportResponse
- RentalResponse
- RentalResponseData
- SlugName
- SpatialSceneResponse
- SpatialSceneResponse2
- SpatialSceneResponse2Data
- SpatialSceneResponse2DataSettings
- SpatialSceneResponse2DataSettingsCamera
- SpatialSceneResponseData
- SpatialStreetResponse
- StatusResponse
- SuccessResponse
- TermsVersionResponse
- TxV0Object
- UnitsCents
- UpdateAdOffsiteResponse
- UpdateAdOffsiteResponseData
- UpdateAiImageConfigResponse
- UpdateAutomationRuleResponse
- UpdateCosmCosmeticUnlockResponse
- UpdateCosmCosmeticUnlockResponseData
- UpdateCosmPegResponse
- UpdateCosmPegResponseData
- UpdateHotspotItem
- UpdateHotspotResponse
- UpdateInboxConversationResponse
- UpdateListingCustomResponse
- UpdateListingCustomResponseData
- UpdateListingPlatformListingResponse
- UpdateListingPlatformListingResponseData
- UpdateListingResponse
- UpdateListingResponseJobs
- UpdateLiveStreamLineupItem
- UpdateLiveStreamLineupResponse
- UpdatePlatformPreferenceResponse
- UpdateProductionPoResponse
- UpdateProductionPoResponsePo
- UpdateRentalOfferResponse
- UpdateRentalOfferResponseData
- UpdateSpatialEmployeeConfigResponse
- UpdateSpatialEmployeeConfigResponseData
- UpdateSpatialEmployeeConfigResponseDataConfig
- UpdateSpatialSceneCosmeticResponse
- UpdateSpatialSceneCosmeticResponseData
- UpdateSpatialSceneCosmeticResponseDataProps
- UpdateSpatialSceneNodeResponse
- UpdateSpatialSceneNodeResponseData
- UpdateSpatialSceneShopLayoutResponse
- UpdateSpatialSceneShopLayoutResponseData
- UpdateSpatialSceneShopLayoutResponseDataSections
- UpdateSpatialSceneShopLayoutResponseDataShell
- UpdateSpatialSceneWindowResponse
- UpdateSpatialSceneWindowResponseData
- UpdateSpatialShopStaffWageResponse
- UpdateSpatialShopStaffWageResponseData
- UpdateVaultMarketHomeUnitResponse
- UpdateVaultMarketHomeUnitResponseRefused
- UpdateVaultMarketOfferAlertResponse
- UpdateVaultMarketPaperLeaderboardResponse
- UpdateVaultMarketPositionExitResponse
- UpdateVaultMarketSupplyDepositResponse
- UpdateVaultMarketTodBeneficiaryResponse
- UpdateVaultMarketTodDesignationResponse
- UpdateVaultMarketWorldRoomVaultGateResponse
- UpdateVaultMarketWorldRoomVaultGateResponseGate
- UpdateVaultMarketWorldRoomVaultGateResponseGateScope
- UpdateWeb3LaunchAllowlistResponse
- UpdateWeb3LaunchAllowlistResponseRootTx
- UpdateWorldAutoShopRequest
- UpdateWorldAvatarIdentityResponse
- UpdateWorldAvatarIdentityResponseData
- UpdateWorldAvatarLookResponse
- UpdateWorldAvatarLookResponseData
- UpdateWorldAvatarLookResponseDataLook
- UpdateWorldConventionStatusResponse
- UpdateWorldConventionStatusResponseData
- UpdateWorldEmoteWheelRequest
- UpdateWorldEmoteWheelResponse
- UpdateWorldEmoteWheelResponseData
- UpdateWorldEmoteWheelResponseDataWheelItem
- UpdateWorldFitValueShareResponse
- UpdateWorldFitValueShareResponseData
- UpdateWorldHomeBuilderRequest
- UpdateWorldHomeBuilderResponse
- UpdateWorldHomeBuilderResponseData
- UpdateWorldInteractiveDesignDraftResponse
- UpdateWorldInteractiveDesignDraftResponseData
- UpdateWorldListingHoldersOnlyResponse
- UpdateWorldListingHoldersOnlyResponseData
- UpdateWorldOutfitRequest
- UpdateWorldOutfitResponse
- UpdateWorldPetActiveRequest
- UpdateWorldPetActiveResponse
- UpdateWorldPetActiveResponseData
- UpdateWorldQuestPinRequest
- UpdateWorldQuestPinResponse
- UpdateWorldQuestPinResponseData
- UpdateWorldRoomHolderGateResponse
- UpdateWorldRoomHolderGateResponseGate
- UpdateWorldSpaceResponse
- UpdateWorldSpaceResponseData
- UpdateWorldStallBookingBoothResponse
- UpdateWorldStallBookingBoothResponseData
- UserIdName
- ValueConfidence
- WorldHomeResponse
- WorldResponse
- WorldResponseData
- WorldResponseDataMessages
- WorldResponseDataSaid

## Authorization

### PersonalAccessToken

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

