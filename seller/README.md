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
*AccountApi* | [**createAccountIdentityVerificationStart**](docs/Api/AccountApi.md#createaccountidentityverificationstart) | **POST** /v1/account/identity-verification/start | Start the identity check (photo ID + selfie). Returns a Stripe-hosted URL the person completes.
*AccountApi* | [**createAccountLogoutAll**](docs/Api/AccountApi.md#createaccountlogoutall) | **POST** /v1/account/logout-all | Revoke every browser auth session for this user.
*AccountApi* | [**createAccountReconfirmDeletion**](docs/Api/AccountApi.md#createaccountreconfirmdeletion) | **POST** /v1/account/reconfirm-deletion | Confirm again a deletion paused because the account was in use.
*AccountApi* | [**createAccountRequestDeletion**](docs/Api/AccountApi.md#createaccountrequestdeletion) | **POST** /v1/account/request-deletion | Schedule account deletion after a grace period. Requires confirmEmail.
*AccountApi* | [**deleteAuthSession**](docs/Api/AccountApi.md#deleteauthsession) | **DELETE** /v1/auth/sessions | Revoke all active browser sessions.
*AccountApi* | [**deleteAuthSessionBySessionId**](docs/Api/AccountApi.md#deleteauthsessionbysessionid) | **DELETE** /v1/auth/sessions/{sessionId} | Revoke a single browser session by id.
*AccountApi* | [**deleteConnectedApp**](docs/Api/AccountApi.md#deleteconnectedapp) | **DELETE** /v1/connected-apps/{grantId} | Disconnect a third-party app. Its tokens stop working immediately.
*AccountApi* | [**getAccountClosureChecklist**](docs/Api/AccountApi.md#getaccountclosurechecklist) | **GET** /v1/account/closure-checklist | What closing the account will and will not do, before you request it.
*AccountApi* | [**getAccountDeletionStatus**](docs/Api/AccountApi.md#getaccountdeletionstatus) | **GET** /v1/account/deletion-status | Get the currently-pending deletion request, if any.
*AccountApi* | [**getAccountIdentityVerification**](docs/Api/AccountApi.md#getaccountidentityverification) | **GET** /v1/account/identity-verification | Your identity verification: one status for the whole account, read by every feature that needs ID.
*AccountApi* | [**getMe**](docs/Api/AccountApi.md#getme) | **GET** /v1/me | Identity check — authenticated user + PAT scopes + account state.
*AccountApi* | [**getMembership**](docs/Api/AccountApi.md#getmembership) | **GET** /v1/membership | The caller&#39;s Crossly One membership status and benefits.
*AccountApi* | [**listAuthSessions**](docs/Api/AccountApi.md#listauthsessions) | **GET** /v1/auth/sessions | List active browser auth sessions.
*AccountApi* | [**listConnectedApps**](docs/Api/AccountApi.md#listconnectedapps) | **GET** /v1/connected-apps | List third-party OAuth apps with access to this account.
*AccountsApi* | [**createAccount**](docs/Api/AccountsApi.md#createaccount) | **POST** /v1/accounts | Connect a new platform account (kicks off OAuth or extension handshake).
*AccountsApi* | [**createConnectionCardnexusApiKey**](docs/Api/AccountsApi.md#createconnectioncardnexusapikey) | **POST** /v1/connections/cardnexus/api-key | Connect CardNexus with a personal API key (validated live before it is stored).
*AccountsApi* | [**createConnectionEmailImap**](docs/Api/AccountsApi.md#createconnectionemailimap) | **POST** /v1/connections/email/imap | Add an IMAP mailbox connection.
*AccountsApi* | [**createConnectionEmailImapTest**](docs/Api/AccountsApi.md#createconnectionemailimaptest) | **POST** /v1/connections/email/imap/test | Validate IMAP credentials without persisting.
*AccountsApi* | [**createConnectionLightspeedXToken**](docs/Api/AccountsApi.md#createconnectionlightspeedxtoken) | **POST** /v1/connections/lightspeed_x/token | Connect Lightspeed X-Series with a personal token (Setup → Personal tokens, Plus plan) and the store prefix.
*AccountsApi* | [**createConnectionRequest**](docs/Api/AccountsApi.md#createconnectionrequest) | **POST** /v1/connections/{platform}/request | Express interest in a request_only platform.
*AccountsApi* | [**createPlatformAccountConnect**](docs/Api/AccountsApi.md#createplatformaccountconnect) | **POST** /v1/platform-accounts/{platform}/connect | Revive or initiate connection for a cookie platform.
*AccountsApi* | [**createPlatformAccountDisconnect**](docs/Api/AccountsApi.md#createplatformaccountdisconnect) | **POST** /v1/platform-accounts/{platform}/disconnect | Disconnect every account of a platform (archives the rows and deletes their stored sessions).
*AccountsApi* | [**createPlatformAccountHistoryImport**](docs/Api/AccountsApi.md#createplatformaccounthistoryimport) | **POST** /v1/platform-accounts/{platform}/history-import | Set how far back to backfill order history + active listings for a platform, and run it now.
*AccountsApi* | [**createPlatformAccountRefreshStatus**](docs/Api/AccountsApi.md#createplatformaccountrefreshstatus) | **POST** /v1/platform-accounts/refresh-status | Run on-demand healthchecks across cookie accounts.
*AccountsApi* | [**deleteAccount**](docs/Api/AccountsApi.md#deleteaccount) | **DELETE** /v1/accounts/{id} | Disconnect a platform account.
*AccountsApi* | [**deleteConnectionById**](docs/Api/AccountsApi.md#deleteconnectionbyid) | **DELETE** /v1/connections/by-id/{id} | Disconnect a specific OAuth connection by id.
*AccountsApi* | [**deleteConnectionEmailImap**](docs/Api/AccountsApi.md#deleteconnectionemailimap) | **DELETE** /v1/connections/email/imap/{id} | Remove an IMAP mailbox connection.
*AccountsApi* | [**getConnectionEmail**](docs/Api/AccountsApi.md#getconnectionemail) | **GET** /v1/connections/email | List IMAP and email-OAuth connections.
*AccountsApi* | [**getConnectionExtensionOnline**](docs/Api/AccountsApi.md#getconnectionextensiononline) | **GET** /v1/connections/extension-online | Check if the browser extension is online.
*AccountsApi* | [**getConnectionPolicyManagementOption**](docs/Api/AccountsApi.md#getconnectionpolicymanagementoption) | **GET** /v1/connections/policy-management/{connectionId}/options/{source} | List the live options a marketplace policy field offers (e.g. Allegro delivery methods).
*AccountsApi* | [**getOauthInit**](docs/Api/AccountsApi.md#getoauthinit) | **GET** /v1/oauth/{platform}/init | Return the OAuth authorize URL for an API-track platform.
*AccountsApi* | [**getPlatformLimit**](docs/Api/AccountsApi.md#getplatformlimit) | **GET** /v1/platforms/limits | eBay free-tier + Etsy fees aggregate.
*AccountsApi* | [**listAccounts**](docs/Api/AccountsApi.md#listaccounts) | **GET** /v1/accounts | List your connected platform accounts.
*AccountsApi* | [**listConnectionPolicyManagement**](docs/Api/AccountsApi.md#listconnectionpolicymanagement) | **GET** /v1/connections/policy-management | List eBay and Etsy accounts with whether Crossly manages their policies.
*AccountsApi* | [**listConnections**](docs/Api/AccountsApi.md#listconnections) | **GET** /v1/connections | List OAuth-connected API platforms.
*AccountsApi* | [**updateConnectionEmailImap**](docs/Api/AccountsApi.md#updateconnectionemailimap) | **PATCH** /v1/connections/email/imap/{id} | Edit an IMAP mailbox connection.
*AccountsApi* | [**updateConnectionPolicyManagement**](docs/Api/AccountsApi.md#updateconnectionpolicymanagement) | **PUT** /v1/connections/policy-management/{connectionId} | Turn Crossly policy management on or off for one eBay or Etsy account.
*AccountsApi* | [**updatePlatformPreference**](docs/Api/AccountsApi.md#updateplatformpreference) | **PATCH** /v1/platforms/{platform}/preferences | Update per-platform connection preferences.
*ActivityApi* | [**createActionLogExport**](docs/Api/ActivityApi.md#createactionlogexport) | **POST** /v1/action-log/exports | Queue an export of the Activity Log: every event (csv, ndjson, pdf) or a summary report (pdf, ndjson). Poll GET /api/v1/action-log/exports/{exportId}, then download it. Exports never contain IP addresses.
*ActivityApi* | [**createActionLogSearchTranslate**](docs/Api/ActivityApi.md#createactionlogsearchtranslate) | **POST** /v1/action-log/search/translate | Turn a question in words (\&quot;failed delists on Mercari last week\&quot;) into an Activity Log search: pass the returned &#x60;q&#x60; to GET /api/v1/action-log (or the histogram and csv/ndjson exports). Nothing is run. A 404 with details.code &#x60;not_enabled&#x60; means natural-language search is off for this account.
*ActivityApi* | [**createDetectedEventEventConfirm**](docs/Api/ActivityApi.md#createdetectedeventeventconfirm) | **POST** /v1/detected-events/events/{id}/confirm | Answer an open ask (canConfirm true): optionally which item it is (itemId, one of the match candidates) and which actions to run instead of the ask&#39;s preselected ones. Returns the event. 409 ask_not_open when the event is not waiting.
*ActivityApi* | [**createDetectedEventEventUndo**](docs/Api/ActivityApi.md#createdetectedeventeventundo) | **POST** /v1/detected-events/events/{id}/undo | Undo what Crossly did for an event (canUndo true): every executed action&#39;s stored inverse runs, newest first (restore stock, relist, unlink…). Returns the event. 409 nothing_to_undo when nothing is reversible.
*ActivityApi* | [**createDetectedEventRule**](docs/Api/ActivityApi.md#createdetectedeventrule) | **POST** /v1/detected-events/rules | Create a detection rule: which detected events it applies to (filter + optional condition over any event axis) and what Crossly does then (and else). Without order it is placed most-specific-first, above the default set. Returns the stored rule with its id.
*ActivityApi* | [**createDetectedEventRulePlace**](docs/Api/ActivityApi.md#createdetectedeventruleplace) | **POST** /v1/detected-events/rules/place | Save one rule and the whole evaluation order in one transaction: rule.id is an existing id (replace) or any new client id (create); ids is every rule id top-down, naming the rule by that id. Returns the stored rule and the list.
*ActivityApi* | [**createDetectedEventRuleReorder**](docs/Api/ActivityApi.md#createdetectedeventrulereorder) | **POST** /v1/detected-events/rules/reorder | Set the evaluation order: ids top-down, defaults included (ids from the rules list). Rules are re-numbered 10, 20, 30…; a default moved above one of your rules is stored as your edit. Returns the list.
*ActivityApi* | [**createDetectedEventRuleResetDefault**](docs/Api/ActivityApi.md#createdetectedeventruleresetdefault) | **POST** /v1/detected-events/rules/reset-defaults | Drop your edits of the shipped default rules (keys, or all when omitted). Returns the list.
*ActivityApi* | [**createDetectedEventSimulate**](docs/Api/ActivityApi.md#createdetectedeventsimulate) | **POST** /v1/detected-events/simulate | Run one event through the rules without acting: the winning rule, rules it shadowed, the trace, the guards that held actions back and the plan per target with how it would run (direct / relay / ask / skip). event needs only kind; every axis left out takes its default. rules &#x3D; an unsaved draft list.
*ActivityApi* | [**createDetectedEventSimulateImpact**](docs/Api/ActivityApi.md#createdetectedeventsimulateimpact) | **POST** /v1/detected-events/simulate/impact | What a rule edit would change: your detected events of the last days (default 30, at most 500) re-resolved against the draft rules and against the stored ones. Per event: winning rule and actions before and after, and whether it changed. Nothing runs.
*ActivityApi* | [**createEmailEventConfirm**](docs/Api/ActivityApi.md#createemaileventconfirm) | **POST** /v1/email-events/{id}/confirm | Confirm an email-detected event: re-run it as certain (a possible sale records the sale and delists the item elsewhere). When several listings could be meant, pass platformListingDbId to choose one.
*ActivityApi* | [**createEmailEventDismiss**](docs/Api/ActivityApi.md#createemaileventdismiss) | **POST** /v1/email-events/{id}/dismiss | Dismiss an email-detected event (\&quot;not a sale\&quot;): closes the card without acting.
*ActivityApi* | [**createEventPolicyDecisionConfirm**](docs/Api/ActivityApi.md#createeventpolicydecisionconfirm) | **POST** /v1/event-policies/decisions/{id}/confirm | Confirm a review decision from a webhook, order poller or app relay (canConfirm true): the event runs again with the seller confirmed, so a review rule runs the strongest allowed non-review action for that cell. Returns the new decision. 409 when the decision was already confirmed or is not confirmable (email review decisions are confirmed on their review card).
*ActivityApi* | [**deleteDetectedEventRule**](docs/Api/ActivityApi.md#deletedetectedeventrule) | **DELETE** /v1/detected-events/rules/{id} | Delete a detection rule. Deleting your edit of a default (its id, or default:&lt;key&gt;) brings the shipped default back; deleting a translated event-policy rule deletes that policy rule too.
*ActivityApi* | [**deleteEventPolicyRule**](docs/Api/ActivityApi.md#deleteeventpolicyrule) | **DELETE** /v1/event-policies/rules/{id} | Delete a rule: its cell falls back to the next scope (platform → global → the built-in default).
*ActivityApi* | [**getActionLog**](docs/Api/ActivityApi.md#getactionlog) | **GET** /v1/action-log/{id} | One Activity Log event by id, with &#x60;view&#x60; including its steps and, for bulk jobs, its children.
*ActivityApi* | [**getActionLogExport**](docs/Api/ActivityApi.md#getactionlogexport) | **GET** /v1/action-log/exports/{exportId} | The state of one Activity Log export.
*ActivityApi* | [**getActionLogExportDownload**](docs/Api/ActivityApi.md#getactionlogexportdownload) | **GET** /v1/action-log/exports/{exportId}/download | Download a finished Activity Log export (for 24 hours after it completes).
*ActivityApi* | [**getActionLogFacet**](docs/Api/ActivityApi.md#getactionlogfacet) | **GET** /v1/action-log/facets | Filter options of the caller&#39;s Activity Log (last 90 days): areas with their actions and counts, the team members who acted, platforms and outcomes.
*ActivityApi* | [**getDetectedEventEvent**](docs/Api/ActivityApi.md#getdetectedeventevent) | **GET** /v1/detected-events/events/{id} | One detected event with every report of it (first + corroborations, with correlation and contradiction), the guards that held actions back, the plan and each executed action&#39;s outcome and reversibility.
*ActivityApi* | [**getEventPolicy**](docs/Api/ActivityApi.md#geteventpolicy) | **GET** /v1/event-policies | What Crossly does with each detected marketplace event (sale, listing ended, offer, cancellation, label, shipped, delivered, refund, return, payout, message), per who owns the item (crossly, imported, app_managed, other_tool, untracked). Each matrix cell lists the allowed actions and the effective one, with the scope it comes from (app &gt; platform &gt; global &gt; default). Pass platform (or appId) to see the matrix as that platform&#39;s (or app&#39;s) items see it. Also returns the rules, platforms and connected apps.
*ActivityApi* | [**listActionLog**](docs/Api/ActivityApi.md#listactionlog) | **GET** /v1/action-log | List Activity Log events, newest first. Each event carries &#x60;view&#x60; (title, sentence, fields, failure advice, who did it) and typed &#x60;detail&#x60;. Page with &#x60;cursor&#x60;; &#x60;pagination.total&#x60; counts matches.
*ActivityApi* | [**listActionLogCalls**](docs/Api/ActivityApi.md#listactionlogcalls) | **GET** /v1/action-log/{id}/calls | The outbound platform HTTP calls under an event (oldest first) — platform, operation, method, host, status, latency, error class/message, proxy + recipe id. Answers \&quot;what was sent / what went wrong\&quot;. The URL path, request/response bodies and persisted-query hash are never returned.
*ActivityApi* | [**listActionLogHistogram**](docs/Api/ActivityApi.md#listactionloghistogram) | **GET** /v1/action-log/histogram | Events per UTC day for the list filters (default: the last 30 days; at most 366).
*ActivityApi* | [**listDetectedEventEvents**](docs/Api/ActivityApi.md#listdetectedeventevents) | **GET** /v1/detected-events/events | Every event Crossly detected (sales, order changes, listing changes, offers, messages, account notices), newest first: all its axes, the rule that decided it, its corroborating reports, the plan per target and how each action went, with canConfirm (an open ask) and canUndo. Cursor-paged; filter by kinds, platforms statuses and accounts (comma-separated) and since (ISO time).
*ActivityApi* | [**listDetectedEventRules**](docs/Api/ActivityApi.md#listdetectedeventrules) | **GET** /v1/detected-events/rules | The seller&#39;s detection rules, top-down in the order they are evaluated (first match wins unless a rule says continue): the seller&#39;s own rules, translations of their event-policy rules (source legacy), then the shipped default set (source default, ids default:&lt;key&gt;; a stored edit of a default replaces it). Each rule has a filter (event kinds, platforms, accounts, apps, tags, items), an optional condition over any event axis, the actions it runs (then / else) and its guard loosenings.
*ActivityApi* | [**listEmailEvents**](docs/Api/ActivityApi.md#listemailevents) | **GET** /v1/email-events | List email-detected events waiting for the seller (status&#x3D;needs_review): a possible sale, ended listing, cancellation or other event an email reported that was not certain enough to act on automatically.
*ActivityApi* | [**listEventPolicyDecisions**](docs/Api/ActivityApi.md#listeventpolicydecisions) | **GET** /v1/event-policies/decisions | The decision log, newest first: for each detected event, what the rule or default asked for, what was done (after capability fallback and the email confidence ceiling), the rule that decided it, and the outcome (done / skipped / failed / review). Cursor-paged; filter by event, ownership, platform or outcome (outcome&#x3D;review: still waiting for the seller). Kept 90 days.
*ActivityApi* | [**updateDetectedEventRule**](docs/Api/ActivityApi.md#updatedetectedeventrule) | **PUT** /v1/detected-events/rules/{id} | Replace a detection rule. An id default:&lt;key&gt; stores your edit of that shipped default (delete it, or reset-defaults, to go back to the shipped one).
*ActivityApi* | [**updateEventPolicyRule**](docs/Api/ActivityApi.md#updateeventpolicyrule) | **PUT** /v1/event-policies/rules | Set what Crossly does with one kind of detected event for one kind of item: scope global (scopeValue null), platform (scopeValue &#x3D; platform id) or app (scopeValue &#x3D; OAuth app id, app_managed items only). Replaces the rule for the same cell and scope. The action must be one the matrix allows for that cell; import actions exist only for untracked items.
*AdsApi* | [**createAdOffsiteCampaign**](docs/Api/AdsApi.md#createadoffsitecampaign) | **POST** /v1/ads/offsite/campaigns | Launch an offsite campaign for an item.
*AdsApi* | [**createAdOffsiteResume**](docs/Api/AdsApi.md#createadoffsiteresume) | **POST** /v1/ads/offsite/resume | Clear an auto-pause and resume offsite spend.
*AdsApi* | [**createListingAdBulkAdd**](docs/Api/AdsApi.md#createlistingadbulkadd) | **POST** /v1/listing-ads/bulk-add | Add listings to a campaign by master listing id: each listing&#39;s live row on &#x60;platform&#x60; joins campaignId (a Crossly campaign uuid, or the marketplace&#39;s campaign id). A listing not live there is its own failed result.
*AdsApi* | [**createListingAdCampaign**](docs/Api/AdsApi.md#createlistingadcampaign) | **POST** /v1/listing-ads/{platform}/campaigns | Create a campaign on the marketplace: program (promoted_listing_rate &#x3D; eBay General, a % of the sale; cpc_campaign &#x3D; eBay Priority, a daily budget), name, ratePct or dailyBudgetCents, startsAt/endsAt, and the program fields. Idempotency-Key supported.
*AdsApi* | [**createListingAdCampaignListing**](docs/Api/AdsApi.md#createlistingadcampaignlisting) | **POST** /v1/listing-ads/{platform}/campaigns/{campaignId}/listings | Promote listings in a marketplace campaign. platformListingIds are Crossly platform-listing ids on that marketplace; ratePct sets the ad rate (eBay General). One result per listing.
*AdsApi* | [**createListingAdCampaignListingRemove**](docs/Api/AdsApi.md#createlistingadcampaignlistingremove) | **POST** /v1/listing-ads/{platform}/campaigns/{campaignId}/listings/remove | Stop promoting listings in a marketplace campaign. One result per listing.
*AdsApi* | [**createSponsoredAdBillingTopupLink**](docs/Api/AdsApi.md#createsponsoredadbillingtopuplink) | **POST** /v1/sponsored-ads/billing/topup-link | A Stripe Checkout link that adds amountCents ($5–$10,000) to the ad balance when the seller pays it. Nothing is charged until they do. Use an Idempotency-Key to get the same link back on a retry.
*AdsApi* | [**createSponsoredAdBoostRemove**](docs/Api/AdsApi.md#createsponsoredadboostremove) | **POST** /v1/sponsored-ads/boosts/remove | Stop boosting listings in bulk.
*AdsApi* | [**createSponsoredAdCampaign**](docs/Api/AdsApi.md#createsponsoredadcampaign) | **POST** /v1/sponsored-ads/campaigns | Create a Sponsored Listings campaign: name, dailyBudgetCents (≥100), optional totalBudgetCents, defaultBidCents (5–10000; the max bid under bidStrategy \&quot;auto\&quot;), placements (search, browse, product_page, home_rail, storefront, worlds_surface), goal (sales | visits), optional targetCategories / targetRegions (ISO countries) / targetDevices (mobile, desktop, app), optional startsAt/endsAt, listings [{platformListingId, bidCents?, boostBps? (100–2000, pay-on-sale Boost; null clears)}], keywords [{keyword, matchType broad|phrase|exact, negative?, bidCents?}], worldTargets [{kind showroom|convention, id, bidCents?, status?}] (your showroom or a convention you host, promoted in the Crossly World directory; at least one listing or world target), status active|draft. A catalog boost: targetType \&quot;wholesale_catalog\&quot; + targetCatalogId (your catalog), no listings, keywords or world targets; it ranks Sponsored in the wholesale directory. bidStrategy defaults to your account default. Clicks are charged from your ad funds (ad balance and/or CBX, ad credit first); with none it waits as out_of_budget.
*AdsApi* | [**createSponsoredAdCampaignDuplicate**](docs/Api/AdsApi.md#createsponsoredadcampaignduplicate) | **POST** /v1/sponsored-ads/campaigns/{id}/duplicate | Copy a campaign (settings, listings, keywords) as a new draft.
*AdsApi* | [**createSponsoredAdCampaignStatus**](docs/Api/AdsApi.md#createsponsoredadcampaignstatus) | **POST** /v1/sponsored-ads/campaigns/{id}/status | Set a campaign active (launch/resume), paused, or ended (final). Resuming with no ad funds to pay for clicks leaves it out_of_budget until you top up.
*AdsApi* | [**getAdOffsite**](docs/Api/AdsApi.md#getadoffsite) | **GET** /v1/ads/offsite | Your offsite-ads opt-in and its terms.
*AdsApi* | [**getAdOffsiteEligibility**](docs/Api/AdsApi.md#getadoffsiteeligibility) | **GET** /v1/ads/offsite/eligibility | Whether an item can run offsite, and why not.
*AdsApi* | [**getAdOffsiteReport**](docs/Api/AdsApi.md#getadoffsitereport) | **GET** /v1/ads/offsite/report | What your offsite budget bought — including the misses.
*AdsApi* | [**getListingAdListing**](docs/Api/AdsApi.md#getlistingadlisting) | **GET** /v1/listing-ads/listings/{listingId} | Every promotion of one listing: its Crossly campaigns and Boost, and each marketplace ad with status, campaign, rate and last sync.
*AdsApi* | [**getSponsoredAdBilling**](docs/Api/AdsApi.md#getsponsoredadbilling) | **GET** /v1/sponsored-ads/billing | What pays for your ads: headroom across the billing rails (ad balance and/or CBX), unbilled click spend, settlement charges, daily spend, Boost fees and CBX ad-credit grants; funds is the full funds summary (same as /v1/sponsored-ads/funds). refresh&#x3D;true re-reads the balance.
*AdsApi* | [**getSponsoredAdBillingStatement**](docs/Api/AdsApi.md#getsponsoredadbillingstatement) | **GET** /v1/sponsored-ads/billing/statements/{month} | One month&#39;s ads statement: opening and closing ad balance, top-ups, click spend by campaign, how clicks were paid, credits, refunds and Boost fees.
*AdsApi* | [**getSponsoredAdBillingStatementPdf**](docs/Api/AdsApi.md#getsponsoredadbillingstatementpdf) | **GET** /v1/sponsored-ads/billing/statements/{month}/pdf | One month&#39;s ads statement as a PDF.
*AdsApi* | [**getSponsoredAdBillingTopupReceipt**](docs/Api/AdsApi.md#getsponsoredadbillingtopupreceipt) | **GET** /v1/sponsored-ads/billing/topups/{id}/receipt | One ad balance top-up&#39;s receipt as a PDF (each top-up in the billing history carries its id and receipt number).
*AdsApi* | [**getSponsoredAdCampaign**](docs/Api/AdsApi.md#getsponsoredadcampaign) | **GET** /v1/sponsored-ads/campaigns/{id} | One campaign: settings, its listings (bid, suggested bid, live, per-listing stats) and keywords. A catalog boost (targetType wholesale_catalog) has &#x60;catalogs&#x60;: per boosted catalog impressions, clicks, spend, attributed trade orders and revenue, CTR and ROAS.
*AdsApi* | [**getSponsoredAdFund**](docs/Api/AdsApi.md#getsponsoredadfund) | **GET** /v1/sponsored-ads/funds | What can pay for clicks now: the billing rails in effect (ad balance and/or CBX), the ad balance and ad credit, CBX headroom, unbilled clicks, available cents, auto top-up, the saved payment method and the refundable balance. refresh&#x3D;true re-reads CBX.
*AdsApi* | [**getSponsoredAdReport**](docs/Api/AdsApi.md#getsponsoredadreport) | **GET** /v1/sponsored-ads/report | Sponsored report for a range: totals (spend, impressions, clicks, CTR, average CPC, attributed orders and revenue, ROAS), a zero-filled daily series, per-campaign rows (targetType listings | wholesale_catalog) and &#x60;catalogs&#x60;, one row per boosted catalog. Listing orders are Crossly purchases of the advertised listing within 7 days of a click by the same buyer; catalog orders are trade orders with that seller within 7 days of a catalog click by the same buyer. Catalog impressions count once per viewer per day.
*AdsApi* | [**getSponsoredAdSetting**](docs/Api/AdsApi.md#getsponsoredadsetting) | **GET** /v1/sponsored-ads/settings | Ads quick settings: adsPaused, accountDailyCapCents and spentTodayCents, defaultBidStrategy, autoTopup.
*AdsApi* | [**listListingAdCampaigns**](docs/Api/AdsApi.md#listlistingadcampaigns) | **GET** /v1/listing-ads/{platform}/campaigns | Your ad campaigns on one marketplace (cached up to 15 minutes; refresh&#x3D;true asks the marketplace now).
*AdsApi* | [**listListingAdPlatforms**](docs/Api/AdsApi.md#listlistingadplatforms) | **GET** /v1/listing-ads/platforms | The ads registry: each marketplace that sells promotion, its programs (kind, scope, campaign and listing fields), which verbs are wired / need a capture / are unsupported, and whether you are connected there.
*AdsApi* | [**listSponsoredAdBillingHistory**](docs/Api/AdsApi.md#listsponsoredadbillinghistory) | **GET** /v1/sponsored-ads/billing/history | Billing history newest first: top-ups (status, receipt number), click charges (how each was paid: ad balance, credit, CBX, written off), credits, refunds and Boost fees. kind filters; before (ISO time) pages; limit ≤ 100.
*AdsApi* | [**listSponsoredAdBillingStatements**](docs/Api/AdsApi.md#listsponsoredadbillingstatements) | **GET** /v1/sponsored-ads/billing/statements | Months (YYYY-MM) with any ad billing activity, newest first.
*AdsApi* | [**listSponsoredAdBoosts**](docs/Api/AdsApi.md#listsponsoredadboosts) | **GET** /v1/sponsored-ads/boosts | Boosted (pay-on-sale) listings: the rate, sales and fees taken so far. A boost lifts organic ranking by up to 10% and costs its rate only when the listing sells on Crossly.
*AdsApi* | [**listSponsoredAdCampaigns**](docs/Api/AdsApi.md#listsponsoredadcampaigns) | **GET** /v1/sponsored-ads/campaigns | Your Sponsored Listings campaigns with status, pacing (spent today, daily cap reached), budgets, bids, placements and stats for the range (from/to, YYYY-MM-DD; default last 30 days).
*AdsApi* | [**listSponsoredAdListings**](docs/Api/AdsApi.md#listsponsoredadlistings) | **GET** /v1/sponsored-ads/listings | Per-listing ad performance across campaigns for a range, plus suggestions: live listings with views but few sales that are not sponsored yet, with a suggested bid.
*AdsApi* | [**updateAdOffsite**](docs/Api/AdsApi.md#updateadoffsite) | **PUT** /v1/ads/offsite | Turn offsite ads on or off. Yours alone to set.
*AdsApi* | [**updateListingAdCampaign**](docs/Api/AdsApi.md#updatelistingadcampaign) | **PATCH** /v1/listing-ads/{platform}/campaigns/{campaignId} | Change a marketplace campaign: name, dailyBudgetCents, endsAt (null clears), status paused | running | ended.
*AdsApi* | [**updateListingAdListingRate**](docs/Api/AdsApi.md#updatelistingadlistingrate) | **PUT** /v1/listing-ads/{platform}/listings/{platformListingId}/rate | Change one promoted listing&#39;s ad rate (percent of the sale) in the campaign it is in.
*AdsApi* | [**updateSponsoredAdBillingAutoTopup**](docs/Api/AdsApi.md#updatesponsoredadbillingautotopup) | **PUT** /v1/sponsored-ads/billing/auto-topup | Auto top-up: enabled, thresholdCents (top up when the ad balance drops below it), amountCents (how much). Needs a saved payment method (the first top-up saves it).
*AdsApi* | [**updateSponsoredAdBoost**](docs/Api/AdsApi.md#updatesponsoredadboost) | **PUT** /v1/sponsored-ads/boosts | Boost listings in bulk (platformListingIds, upliftBps 100–2000 &#x3D; 1–20%), or change their rate. Your own live Crossly listings only.
*AdsApi* | [**updateSponsoredAdCampaign**](docs/Api/AdsApi.md#updatesponsoredadcampaign) | **PATCH** /v1/sponsored-ads/campaigns/{id} | Edit a campaign. Any of the create fields; listings and keywords, when given, replace the current set. Raising the total budget resumes a campaign stopped by it.
*AdsApi* | [**updateSponsoredAdSetting**](docs/Api/AdsApi.md#updatesponsoredadsetting) | **PATCH** /v1/sponsored-ads/settings | Change ads quick settings: adsPaused (pause / resume every ad), accountDailyCapCents (null &#x3D; no cap), defaultBidStrategy (auto | manual) for new campaigns, autoTopup {enabled, thresholdCents?, amountCents?}, railPreference (cash_first | cbx_first, both rails live only).
*AnalyticsApi* | [**createAnalyticExperiment**](docs/Api/AnalyticsApi.md#createanalyticexperiment) | **POST** /v1/analytics/experiments | Start a listing experiment. split: 2-4 live platform listings observed over the same window; sequential: one platform listing, before vs after changeAt (optionally applying a new price).
*AnalyticsApi* | [**createAnalyticExperimentDeclare**](docs/Api/AnalyticsApi.md#createanalyticexperimentdeclare) | **POST** /v1/analytics/experiments/{id}/declare | Record the outcome: a winning arm, no difference, or inconclusive. Concludes the experiment.
*AnalyticsApi* | [**createAnalyticExperimentStop**](docs/Api/AnalyticsApi.md#createanalyticexperimentstop) | **POST** /v1/analytics/experiments/{id}/stop | Stop an experiment: no more data is counted after now.
*AnalyticsApi* | [**deleteAnalyticExperiment**](docs/Api/AnalyticsApi.md#deleteanalyticexperiment) | **DELETE** /v1/analytics/experiments/{id} | Delete an experiment. The listings are untouched.
*AnalyticsApi* | [**getAnalyticBookkeeping**](docs/Api/AnalyticsApi.md#getanalyticbookkeeping) | **GET** /v1/analytics/bookkeeping | Monthly P&amp;L + per-platform breakdown for a calendar year.
*AnalyticsApi* | [**getAnalyticByPlatform**](docs/Api/AnalyticsApi.md#getanalyticbyplatform) | **GET** /v1/analytics/by-platform | Sales, net sales, fees and net profit by platform for the last N days.
*AnalyticsApi* | [**getAnalyticCompare**](docs/Api/AnalyticsApi.md#getanalyticcompare) | **GET** /v1/analytics/compare | Compare 2-4 of your listings: columns of price, quality, channels, views, favorites, offers and outcome, engagement curves, the fields that differ, and observational tests of favorite rate, view-to-offer rate and views per day.
*AnalyticsApi* | [**getAnalyticDashboard**](docs/Api/AnalyticsApi.md#getanalyticdashboard) | **GET** /v1/analytics/dashboard | Composite dashboard: KPIs + breakdowns + recent activity.
*AnalyticsApi* | [**getAnalyticExperiment**](docs/Api/AnalyticsApi.md#getanalyticexperiment) | **GET** /v1/analytics/experiments | Your listing A/B experiments, newest first, with status, days running and the current verdict.
*AnalyticsApi* | [**getAnalyticExperimentById**](docs/Api/AnalyticsApi.md#getanalyticexperimentbyid) | **GET** /v1/analytics/experiments/{id} | One experiment: arms with their windows, exposure and rates, the primary-metric test per arm against A, guardrail tests, the daily series and what to do next.
*AnalyticsApi* | [**getAnalyticInventory**](docs/Api/AnalyticsApi.md#getanalyticinventory) | **GET** /v1/analytics/inventory | Unsold stock: aging buckets with cost, listed value and market value, the 20 listings most in need of attention, shelf value over time, cohort sell-through at the chosen maturity, listed vs sold velocity and data health.
*AnalyticsApi* | [**getAnalyticItem**](docs/Api/AnalyticsApi.md#getanalyticitem) | **GET** /v1/analytics/items | Per-item P&amp;L for sold inventory.
*AnalyticsApi* | [**getAnalyticItemByListingId**](docs/Api/AnalyticsApi.md#getanalyticitembylistingid) | **GET** /v1/analytics/items/{listingId} | One listing in depth: channels with views, favorites and offers, the merged timeline, engagement series, price history, comps, money waterfall, days on market, offers, messages, experiments and suggestions.
*AnalyticsApi* | [**getAnalyticMarketplace**](docs/Api/AnalyticsApi.md#getanalyticmarketplace) | **GET** /v1/analytics/marketplaces | Every marketplace side by side: net sales and profit, units, ASP, take rate, margin, shipping subsidy, days to sell, sell-through, cancel and return rates, offers and engagement; with vs&#x3D;2-3 platforms, a head-to-head over listings live on all of them.
*AnalyticsApi* | [**getAnalyticMarketplaceByPlatform**](docs/Api/AnalyticsApi.md#getanalyticmarketplacebyplatform) | **GET** /v1/analytics/marketplaces/{platform} | One marketplace in depth: its row, the money series, fee breakdown, days-to-sell and price-realization histograms, categories, top items, at-risk listings, a day-by-hour sales heatmap and offer stats.
*AnalyticsApi* | [**getAnalyticOverview**](docs/Api/AnalyticsApi.md#getanalyticoverview) | **GET** /v1/analytics/overview | KPIs with deltas (net sales, net profit, units, ASP, margin, sell-through, median days to sell, active listings, take rate), the trend series, by-marketplace split, top categories, brands and items, sell-through cohort, data health and insights.
*AnalyticsApi* | [**getAnalyticPerformance**](docs/Api/AnalyticsApi.md#getanalyticperformance) | **GET** /v1/analytics/performance | Per-listing performance: channels, views, favorites, offers and conversations in the period, units sold, net sales and profit, margin, days to sell and a 0-100 health score, paged and sortable.
*AnalyticsApi* | [**getAnalyticProgram**](docs/Api/AnalyticsApi.md#getanalyticprogram) | **GET** /v1/analytics/programs/{program} | One program&#39;s report over a date range (default the last 30 days, at most 366): KPIs, a daily trend and a breakdown table. Money in integer cents.
*AnalyticsApi* | [**getAnalyticSegment**](docs/Api/AnalyticsApi.md#getanalyticsegment) | **GET** /v1/analytics/segments | Niches along one dimension: listed and active counts, units sold, cohort sell-through, median days to sell, net sales and profit, margin, ROI, ASP and discount from ask; rows under minN are flagged lowSample.
*AnalyticsApi* | [**getAnalyticSegmentByKey**](docs/Api/AnalyticsApi.md#getanalyticsegmentbykey) | **GET** /v1/analytics/segments/{dim}/{key} | One niche in depth: its row, series, by-marketplace split, days-to-sell histogram, price bands, top items and the 10 oldest unsold listings in it.
*AnalyticsApi* | [**getAnalyticSummary**](docs/Api/AnalyticsApi.md#getanalyticsummary) | **GET** /v1/analytics/summary | Headline KPIs for the last N days (the same numbers as the analytics overview).
*AnalyticsApi* | [**getAnalyticTimesery**](docs/Api/AnalyticsApi.md#getanalytictimesery) | **GET** /v1/analytics/timeseries | Sales and net sales over the last N days, zero-filled, one row per calendar day.
*AnalyticsApi* | [**getAnalyticToday**](docs/Api/AnalyticsApi.md#getanalytictoday) | **GET** /v1/analytics/today | Today&#39;s checklist + 14-day activity streak.
*AnalyticsApi* | [**listInsightByPlatform**](docs/Api/AnalyticsApi.md#listinsightbyplatform) | **GET** /v1/insights/by-platform | Platform velocity + margin insight (90-day window): units, net sales, median days to sell, ASP and net after the real marketplace fees.
*AnalyticsApi* | [**updateAnalyticExperiment**](docs/Api/AnalyticsApi.md#updateanalyticexperiment) | **PATCH** /v1/analytics/experiments/{id} | Rename an experiment or change its hypothesis, notes or planned end.
*AppManagedListingsApi* | [**createListingCommandAck**](docs/Api/AppManagedListingsApi.md#createlistingcommandack) | **POST** /v1/listing-commands/{id}/ack | Acknowledge a command (you will act on it). Extends its deadline: 24 h for listing commands; tracking 2 h, cancel 4 h, refund 24 h, message 1 h.
*AppManagedListingsApi* | [**createListingCommandComplete**](docs/Api/AppManagedListingsApi.md#createlistingcommandcomplete) | **POST** /v1/listing-commands/{id}/complete | Report a command done on the marketplace. relist: newExternalId when a new id was issued; refund_order: platformRefundId + amount (required); submit_tracking: trackingNumber/carrier as the marketplace holds them; message_buyer: platformMessageId.
*AppManagedListingsApi* | [**createListingCommandFail**](docs/Api/AppManagedListingsApi.md#createlistingcommandfail) | **POST** /v1/listing-commands/{id}/fail | Report a command failed, with a reason the seller will see.
*AppManagedListingsApi* | [**createListingEvent**](docs/Api/AppManagedListingsApi.md#createlistingevent) | **POST** /v1/listings/{id}/events | Report a marketplace event (item.updated / ended / sold / relisted) for a listing your app manages.
*AppManagedListingsApi* | [**createListingEvent2**](docs/Api/AppManagedListingsApi.md#createlistingevent2) | **POST** /v1/listings/events | Report up to 100 marketplace events keyed by platform + externalId. One bad event never fails the rest.
*AppManagedListingsApi* | [**createListingLink**](docs/Api/AppManagedListingsApi.md#createlistinglink) | **POST** /v1/listings/link | Link a live marketplace listing your app already manages into Crossly (no re-listing). Idempotent.
*AppManagedListingsApi* | [**createListingLinkBulk**](docs/Api/AppManagedListingsApi.md#createlistinglinkbulk) | **POST** /v1/listings/link/bulk | Link up to 100 live marketplace listings. Each item succeeds or fails on its own; re-sending is safe.
*AppManagedListingsApi* | [**createListingPlatformReclone**](docs/Api/AppManagedListingsApi.md#createlistingplatformreclone) | **POST** /v1/listings/{id}/platforms/{platform}/reclone | End this marketplace item and relist it under Crossly. Requires consent: true.
*AppManagedListingsApi* | [**createListingPlatformRecloneCancel**](docs/Api/AppManagedListingsApi.md#createlistingplatformreclonecancel) | **POST** /v1/listings/{id}/platforms/{platform}/reclone/cancel | Cancel a relist still waiting for you to end the old item.
*AppManagedListingsApi* | [**createListingPlatformRecloneSellerEnded**](docs/Api/AppManagedListingsApi.md#createlistingplatformreclonesellerended) | **POST** /v1/listings/{id}/platforms/{platform}/reclone/seller-ended | You ended the old item on the marketplace yourself (Done).
*AppManagedListingsApi* | [**createListingPlatformTakeOver**](docs/Api/AppManagedListingsApi.md#createlistingplatformtakeover) | **POST** /v1/listings/{id}/platforms/{platform}/take-over | Take over an app-managed item: Crossly acts on the marketplace itself (needs your own connection).
*AppManagedListingsApi* | [**createListingUnlink**](docs/Api/AppManagedListingsApi.md#createlistingunlink) | **POST** /v1/listings/{id}/unlink | Stop the app managing this listing. It stays live everywhere; the app&#39;s Crossly Shop fee ends for future sales.
*AppManagedListingsApi* | [**createOrderEvent**](docs/Api/AppManagedListingsApi.md#createorderevent) | **POST** /v1/orders/events | Report up to 100 order events (shipped, cancelled, refunded, delivered) keyed by platform + platformOrderId. Each completes the matching open order command. One bad event never fails the rest.
*AppManagedListingsApi* | [**createOrderTakeOver**](docs/Api/AppManagedListingsApi.md#createordertakeover) | **POST** /v1/orders/{id}/take-over | Take over the app-managed item behind an order; its actions then go through your own connection.
*AppManagedListingsApi* | [**getListingManagement**](docs/Api/AppManagedListingsApi.md#getlistingmanagement) | **GET** /v1/listings/{id}/management | Which app manages this listing (null when none). Its fee is charged only on Crossly Shop sales, never on eBay or other marketplaces.
*AppManagedListingsApi* | [**getListingPlatformReclone**](docs/Api/AppManagedListingsApi.md#getlistingplatformreclone) | **GET** /v1/listings/{id}/platforms/{platform}/reclone | The latest relist-under-Crossly run for this listing on a platform (null when none).
*AppManagedListingsApi* | [**listListingCommands**](docs/Api/AppManagedListingsApi.md#listlistingcommands) | **GET** /v1/listing-commands | Your app&#39;s listing (delist/update/relist) and order (submit_tracking, remove_tracking, cancel_order, refund_order, message_buyer) commands for this seller (default: open ones), oldest first.
*AppsApi* | [**getApp**](docs/Api/AppsApi.md#getapp) | **GET** /v1/apps/{clientId} | Get one listed app by client id or profile slug. 404 if it is not in the directory.
*AppsApi* | [**getAppEarning**](docs/Api/AppsApi.md#getappearning) | **GET** /v1/apps/{id}/earnings | Your OAuth app&#39;s revenue-share earnings: summary + ledger. Owner only.
*AppsApi* | [**getAppListingAllowance**](docs/Api/AppsApi.md#getapplistingallowance) | **GET** /v1/apps/{id}/listing-allowance | Your OAuth app&#39;s listing allowance (read-only): whether staff let sellers list above their plan through it, its limitMode (separate pool or shared with the plan), limitPeriod (total or monthly), the per-seller limit and the platform scope. Owner only.
*AppsApi* | [**listApps**](docs/Api/AppsApi.md#listapps) | **GET** /v1/apps | Browse the public Crossly app directories: seller apps, buyer apps or both (search, category, sort, featured, paging).
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
*BillingApi* | [**listBillingAppAllowances**](docs/Api/BillingApi.md#listbillingappallowances) | **GET** /v1/billing/app-allowances | Your listing allowances through OAuth apps (used of limit, per app, with its platform scope).
*BillingApi* | [**listBillingPlans**](docs/Api/BillingApi.md#listbillingplans) | **GET** /v1/billing/plans | List the plans with their prices, limits and features.
*BooksApi* | [**createBookExpense**](docs/Api/BooksApi.md#createbookexpense) | **POST** /v1/books/expenses | Log a business expense: date, amountCents, a Schedule C category, vendor, description, receipt link, optionally recurring monthly or yearly.
*BooksApi* | [**deleteBookExpense**](docs/Api/BooksApi.md#deletebookexpense) | **DELETE** /v1/books/expenses/{id} | Delete a logged expense. It leaves the P&amp;L and the exports.
*BooksApi* | [**getBook**](docs/Api/BooksApi.md#getbook) | **GET** /v1/books | Profit and loss for a year and period on the Schedule C lines: income, COGS, gross profit, expenses (marketplace fees, postage, mileage, your categories), net profit, monthly table, per-marketplace table with 1099-K expectations, Part III COGS, estimated tax and sales tax collected by marketplaces. Money in cents.
*BooksApi* | [**getBook1099k**](docs/Api/BooksApi.md#getbook1099k) | **GET** /v1/books/1099k | Per marketplace for a year: the 1099-K gross you recorded beside the gross Crossly computed, the difference, and whether a form is expected (federal: over $20,000 and over 200 transactions).
*BooksApi* | [**getBookExpense**](docs/Api/BooksApi.md#getbookexpense) | **GET** /v1/books/expenses | Your logged business expenses in a year and period (recurring ones expanded), with their Schedule C category. Amounts in cents.
*BooksApi* | [**getBookTaxProfile**](docs/Api/BooksApi.md#getbooktaxprofile) | **GET** /v1/books/tax-profile | Your tax profile: time zone for books boundaries, filing status, state, set-aside and rate assumptions, accounting method, and business name, EIN and address.
*BooksApi* | [**getBookTransaction**](docs/Api/BooksApi.md#getbooktransaction) | **GET** /v1/books/transactions | The sale rows behind any P&amp;L line, newest first: gross, refunded, fee and fee source, shipping, COGS, tax collected and net, in cents.
*BooksApi* | [**updateBook1099k**](docs/Api/BooksApi.md#updatebook1099k) | **PUT** /v1/books/1099k | Record what a marketplace reported on its 1099-K for a year (gross in cents, transactions, notes). Answers the year&#39;s reconciliation, as GET /v1/books/1099k does.
*BooksApi* | [**updateBookExpense**](docs/Api/BooksApi.md#updatebookexpense) | **PATCH** /v1/books/expenses/{id} | Change a logged expense.
*BooksApi* | [**updateBookTaxProfile**](docs/Api/BooksApi.md#updatebooktaxprofile) | **PUT** /v1/books/tax-profile | Update your tax profile: time zone, filing status, state, set-aside and rate assumptions (basis points), accounting method, business name, EIN and address. Fields left out are unchanged.
*BrandDropsApi* | [**createBrandDrop**](docs/Api/BrandDropsApi.md#createbranddrop) | **POST** /v1/brand-drops | Create a brand drop as a draft (name, dropAt in the future, optional description, cover image and Crossly platform-listing ids). Approved partners only (403 drop_partner_required); counts against your monthly allowance (403 drop_quota_exhausted).
*BrandDropsApi* | [**getBrandDrop**](docs/Api/BrandDropsApi.md#getbranddrop) | **GET** /v1/brand-drops/{id} | One of your brand drops, with its status and any note from Crossly’s review.
*BrandDropsApi* | [**getBrandDropPartner**](docs/Api/BrandDropsApi.md#getbranddroppartner) | **GET** /v1/brand-drops/partner | Your drop-partner terms (fee, promotion tier, monthly allowance, whether you may schedule without review) and how many drops you have created this month. partner is null when you are not an approved partner — apply at crossly.net/drops/apply.
*BrandDropsApi* | [**listBrandDropListings**](docs/Api/BrandDropsApi.md#listbranddroplistings) | **GET** /v1/brand-drops/{id}/listings | The listings a brand drop releases when it goes live.
*BrandDropsApi* | [**listBrandDrops**](docs/Api/BrandDropsApi.md#listbranddrops) | **GET** /v1/brand-drops | Your brand drops, newest start time first. Filter with ?status&#x3D;draft|pending_review|scheduled|live|sold_out|ended|cancelled. Empty when you are not a partner.
*BrandDropsApi* | [**updateBrandDrop**](docs/Api/BrandDropsApi.md#updatebranddrop) | **PATCH** /v1/brand-drops/{id} | Edit a brand drop and/or change its status: draft (withdraw / unschedule), pending_review (submit for review), scheduled (only with canSelfPublish — 403 drop_review_required otherwise), cancelled. Editing name, time or description of a reviewed drop sends it back to review. Live and finished drops cannot be changed.
*BrandDropsApi* | [**updateBrandDropListing**](docs/Api/BrandDropsApi.md#updatebranddroplisting) | **PUT** /v1/brand-drops/{id}/listings | Replace the listings a brand drop releases, by master listing id (up to 100). Each must already be listed on Crossly — otherwise 400 listing_not_on_crossly naming them. Not allowed once the drop is live or finished.
*BrandingApi* | [**createBrandingDrop**](docs/Api/BrandingApi.md#createbrandingdrop) | **POST** /v1/branding/drops | Create a drop as a draft. &#x60;config&#x60; is the full drop config (what, where: shop|world|live|storefront|featured, format, access, limits, pricing, schedule, promotion, fulfilment). Returns rule problems to fix before publishing.
*BrandingApi* | [**createBrandingDropControl**](docs/Api/BrandingApi.md#createbrandingdropcontrol) | **POST** /v1/branding/drops/{id}/controls/{control} | Live controls: pause, resume, extend (body endsAt), release-wave, end, draw (raffle).
*BrandingApi* | [**createBrandingDropPublish**](docs/Api/BrandingApi.md#createbrandingdroppublish) | **POST** /v1/branding/drops/{id}/publish | Publish: scheduled, or pending_review for a brand partner without self-publish. Brand partners need a verified business on Stripe (403 business_verification_required).
*BrandingApi* | [**createBrandingEventCancel**](docs/Api/BrandingApi.md#createbrandingeventcancel) | **POST** /v1/branding/events/{id}/cancel | Cancel a published event with the reason attendees see.
*BrandingApi* | [**createBrandingEventCheckIn**](docs/Api/BrandingApi.md#createbrandingeventcheckin) | **POST** /v1/branding/events/{id}/check-in | Check a ticket in at the door by its QR token.
*BrandingApi* | [**createBrandingEventMessage**](docs/Api/BrandingApi.md#createbrandingeventmessage) | **POST** /v1/branding/events/{id}/messages | Message the event&#39;s attendees: all, going, or ticketed.
*BrandingApi* | [**deleteBrandingDrop**](docs/Api/BrandingApi.md#deletebrandingdrop) | **DELETE** /v1/branding/drops/{id} | Delete a draft, or cancel a scheduled drop. A live drop is ended with the end control.
*BrandingApi* | [**getBrandingBrand**](docs/Api/BrandingApi.md#getbrandingbrand) | **GET** /v1/branding/brand | Your brand profile (approved brand partners).
*BrandingApi* | [**getBrandingBusinessVerification**](docs/Api/BrandingApi.md#getbrandingbusinessverification) | **GET** /v1/branding/business-verification | Whether your Stripe account is a verified business (company, EIN/tax id verified, payouts on), with reasons and the page to fix it.
*BrandingApi* | [**getBrandingDrop**](docs/Api/BrandingApi.md#getbrandingdrop) | **GET** /v1/branding/drops/{id} | One of your drops.
*BrandingApi* | [**getBrandingEvent**](docs/Api/BrandingApi.md#getbrandingevent) | **GET** /v1/branding/events | Your events: upcoming grouped by date (today, this_week, later), or past.
*BrandingApi* | [**getBrandingSetting**](docs/Api/BrandingApi.md#getbrandingsetting) | **GET** /v1/branding/settings | The store’s Branding defaults new drops start from: timezone, notifyFollowers, botQueue, botCaptcha, cartHoldMinutes, leftovers.
*BrandingApi* | [**listBrandingDrops**](docs/Api/BrandingApi.md#listbrandingdrops) | **GET** /v1/branding/drops | Your drops, newest first, with config, waves, counts (entries, holding, sold, buyers) and phase. ?scope&#x3D;upcoming|live|past|drafts|all.
*BrandingApi* | [**updateBrandingBrand**](docs/Api/BrandingApi.md#updatebrandingbrand) | **PATCH** /v1/branding/brand | Edit your brand profile: logoUrl, bannerUrl, story, links.
*BrandingApi* | [**updateBrandingDrop**](docs/Api/BrandingApi.md#updatebrandingdrop) | **PATCH** /v1/branding/drops/{id} | Edit a drop that is not live yet. A published drop refuses rule problems (400 drop_config_problems).
*BrandingApi* | [**updateBrandingEventSetting**](docs/Api/BrandingApi.md#updatebrandingeventsetting) | **PUT** /v1/branding/events/{id}/settings | Save an event&#39;s full settings (where, access, reminders, check-in, recording, linked drops) and ticket tiers.
*BrandingApi* | [**updateBrandingSetting**](docs/Api/BrandingApi.md#updatebrandingsetting) | **PATCH** /v1/branding/settings | Change the store’s Branding defaults (any subset of the fields).
*BreaksApi* | [**createBreak**](docs/Api/BreaksApi.md#createbreak) | **POST** /v1/breaks | Start a break on one of your listings: pick (buyers choose a spot) or random (drawn). The seed is committed now and revealed at the draw.
*BreaksApi* | [**createBreakCancel**](docs/Api/BreaksApi.md#createbreakcancel) | **POST** /v1/breaks/{id}/cancel | Cancel a break before any spot is paid for; after that, refund those orders instead (409).
*BreaksApi* | [**createBreakDraw**](docs/Api/BreaksApi.md#createbreakdraw) | **POST** /v1/breaks/{id}/draw | Draw a sold-out random break: assigns spots from the committed seed and reveals it.
*BreaksApi* | [**createBreakOpened**](docs/Api/BreaksApi.md#createbreakopened) | **POST** /v1/breaks/{id}/opened | Mark the product opened on stream.
*BreaksApi* | [**createBreakSpotHit**](docs/Api/BreaksApi.md#createbreakspothit) | **POST** /v1/breaks/{id}/spots/{spotId}/hits | Record what a spot pulled.
*BreaksApi* | [**getBreak**](docs/Api/BreaksApi.md#getbreak) | **GET** /v1/breaks/{id} | A break’s board with every spot, its buyer and its hits.
*BreaksApi* | [**listBreaks**](docs/Api/BreaksApi.md#listbreaks) | **GET** /v1/breaks | Your card breaks, newest first.
*BulkBatchesApi* | [**createBulkBatch**](docs/Api/BulkBatchesApi.md#createbulkbatch) | **POST** /v1/bulk-batches | Open an empty capture batch for a preset.
*BulkBatchesApi* | [**createBulkBatchIdentify**](docs/Api/BulkBatchesApi.md#createbulkbatchidentify) | **POST** /v1/bulk-batches/{id}/identify | Identify items: match to Crossly Market, Magic List, or auto (by preset). Runs in the background.
*BulkBatchesApi* | [**createBulkBatchItem**](docs/Api/BulkBatchesApi.md#createbulkbatchitem) | **POST** /v1/bulk-batches/{id}/items | Append one item (every photo of it, primary first).
*BulkBatchesApi* | [**createBulkBatchItemBulk**](docs/Api/BulkBatchesApi.md#createbulkbatchitembulk) | **POST** /v1/bulk-batches/{id}/items/bulk | Set price/quantity/condition/status on many items.
*BulkBatchesApi* | [**createBulkBatchPublish**](docs/Api/BulkBatchesApi.md#createbulkbatchpublish) | **POST** /v1/bulk-batches/{id}/publish | Publish reviewed items: drafts only (default) or live on destinations; adds quantity to an existing matching listing.
*BulkBatchesApi* | [**deleteBulkBatch**](docs/Api/BulkBatchesApi.md#deletebulkbatch) | **DELETE** /v1/bulk-batches/{id} | Discard a batch (listings it produced stay).
*BulkBatchesApi* | [**deleteBulkBatchItem**](docs/Api/BulkBatchesApi.md#deletebulkbatchitem) | **DELETE** /v1/bulk-batches/items/{id} | Remove one unpublished item.
*BulkBatchesApi* | [**getBulkBatch**](docs/Api/BulkBatchesApi.md#getbulkbatch) | **GET** /v1/bulk-batches/{id} | Get one bulk batch with its items (capture order) and matched catalog rows.
*BulkBatchesApi* | [**listBulkBatches**](docs/Api/BulkBatchesApi.md#listbulkbatches) | **GET** /v1/bulk-batches | List recent bulk list batches, newest first.
*BulkBatchesApi* | [**updateBulkBatch**](docs/Api/BulkBatchesApi.md#updatebulkbatch) | **PATCH** /v1/bulk-batches/{id} | Change batch settings, or set stage \&quot;identify\&quot; when capture is done.
*BulkBatchesApi* | [**updateBulkBatchItem**](docs/Api/BulkBatchesApi.md#updatebulkbatchitem) | **PATCH** /v1/bulk-batches/items/{id} | Correct one item (match, title, price, photos…).
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
*ChannelInventoryApi* | [**deleteChannelInventory**](docs/Api/ChannelInventoryApi.md#deletechannelinventory) | **DELETE** /v1/channel-inventory/{platform}/{slot} | Reset a channel&#39;s inventory controls to the default (no cap, no buffer, sync on, end on sell-out).
*ChannelInventoryApi* | [**getChannelInventory**](docs/Api/ChannelInventoryApi.md#getchannelinventory) | **GET** /v1/channel-inventory/{platform}/{slot} | Get one channel&#39;s inventory controls.
*ChannelInventoryApi* | [**listChannelInventory**](docs/Api/ChannelInventoryApi.md#listchannelinventory) | **GET** /v1/channel-inventory | List every sales channel with its inventory controls (cap, buffer, sync, out-of-stock action, exclusions).
*ChannelInventoryApi* | [**updateChannelInventory**](docs/Api/ChannelInventoryApi.md#updatechannelinventory) | **PUT** /v1/channel-inventory/{platform}/{slot} | Set a channel&#39;s quantity cap, buffer, sync toggle, out-of-stock action and exclusion lists (merge write).
*CompWatchlistsApi* | [**createCompWatchlist**](docs/Api/CompWatchlistsApi.md#createcompwatchlist) | **POST** /v1/comp-watchlists | Create a sold-comp watchlist.
*CompWatchlistsApi* | [**createCompWatchlistScrape**](docs/Api/CompWatchlistsApi.md#createcompwatchlistscrape) | **POST** /v1/comp-watchlists/{id}/scrape | Manually trigger a watchlist scrape.
*CompWatchlistsApi* | [**deleteCompWatchlist**](docs/Api/CompWatchlistsApi.md#deletecompwatchlist) | **DELETE** /v1/comp-watchlists/{id} | Delete a sold-comp watchlist.
*CompWatchlistsApi* | [**listCompWatchlistRecent**](docs/Api/CompWatchlistsApi.md#listcompwatchlistrecent) | **GET** /v1/comp-watchlists/{id}/recent | Recent external sold comps matching this watchlist.
*CompWatchlistsApi* | [**listCompWatchlists**](docs/Api/CompWatchlistsApi.md#listcompwatchlists) | **GET** /v1/comp-watchlists | List the seller&#39;s sold-comp watchlists.
*ConnectionsApi* | [**getConnectionHealth**](docs/Api/ConnectionsApi.md#getconnectionhealth) | **GET** /v1/connection-health | Health of each connected marketplace account, with a plain-English diagnosis.
*ConnectionsApi* | [**listDevices**](docs/Api/ConnectionsApi.md#listdevices) | **GET** /v1/devices | Machines paired to this account, and what each can do.
*ConversationsApi* | [**createConversationMessage**](docs/Api/ConversationsApi.md#createconversationmessage) | **POST** /v1/conversations/{id}/messages | Reply to the buyer, on the marketplace the conversation is on (Crossly marketplace: straight into the thread). The message is in the thread at once with deliveryStatus &#39;sending&#39;; it settles to &#39;sent&#39; or &#39;failed&#39;. reply_not_supported when the thread cannot take a reply (a no-reply sender, a platform with no reply wire).
*ConversationsApi* | [**listConversationMessages**](docs/Api/ConversationsApi.md#listconversationmessages) | **GET** /v1/conversations/{id}/messages | A conversation&#39;s messages, oldest first. sender is buyer | seller; a reply you sent shows deliveryStatus sending → sent | failed. since (ISO 8601): only messages sent at or after it.
*ConversationsApi* | [**listConversations**](docs/Api/ConversationsApi.md#listconversations) | **GET** /v1/conversations | List buyer conversations, newest activity first. orderId: the conversation(s) about that order (same platform, its listing, its buyer). listingId: about that listing. updatedSince (ISO 8601): only threads with activity at or after it, for polling. search: contains-match on the buyer username or the subject (case-insensitive). Pair with the message.received webhook.
*CreatorApi* | [**createCreatorExperienceKey**](docs/Api/CreatorApi.md#createcreatorexperiencekey) | **POST** /v1/creator/experience-keys | Issue an experience API key for a back-end or CI: name, creator scopes (worlds:*, items:write — only ones your token holds), an IP allowlist (CIDRs; 0.0.0.0/0 + ::/0 for anywhere), optional experienceIds and expiresInDays. The token is in the response ONCE.
*CreatorApi* | [**createCreatorExperienceKeyRotate**](docs/Api/CreatorApi.md#createcreatorexperiencekeyrotate) | **POST** /v1/creator/experience-keys/{id}/rotate | Rotate a key: a replacement with the same settings (its token shown ONCE); the old key keeps working for overlapHours (default 24, 0 &#x3D; revoke now, max 168).
*CreatorApi* | [**deleteCreatorExperienceKey**](docs/Api/CreatorApi.md#deletecreatorexperiencekey) | **DELETE** /v1/creator/experience-keys/{id} | Revoke an experience key now. Never needs a plan: a credential must always be revocable.
*CreatorApi* | [**getCreatorEntitlement**](docs/Api/CreatorApi.md#getcreatorentitlement) | **GET** /v1/creator/entitlements | What you can do in Creator Studio: your plan, whether you can author, grandfathering, and every limit with used and remaining. Read by web, apps, SDK and MCP alike.
*CreatorApi* | [**listCreatorExperienceKeys**](docs/Api/CreatorApi.md#listcreatorexperiencekeys) | **GET** /v1/creator/experience-keys | Your experience API keys, newest first (never the secret). ?includeRevoked&#x3D;true for the history; ?experienceId&#x3D; for the keys that reach one game (a game&#39;s own keys are narrowed to it alone). Cursor-paged: pass pagination.nextCursor back as ?cursor&#x3D;.
*CreatorRewardsApi* | [**getCreatorRewardFormula**](docs/Api/CreatorRewardsApi.md#getcreatorrewardformula) | **GET** /v1/creator-rewards/formula | The Creator Rewards formula: the pool&#39;s share of Crossly&#39;s Crossly Carnival take in force, the counting rules, and any scheduled change (announced at least 90 days ahead).
*CreatorRewardsApi* | [**getCreatorRewardMe**](docs/Api/CreatorRewardsApi.md#getcreatorrewardme) | **GET** /v1/creator-rewards/me/{month} | One month of your Creator Rewards (YYYY-MM).
*CreatorRewardsApi* | [**getPublicCreatorRewardReconciliation**](docs/Api/CreatorRewardsApi.md#getpubliccreatorrewardreconciliation) | **GET** /v1/public/creator-rewards/reconciliation | Public monthly reconciliation of Creator Rewards (no auth): per month the pool funded from Crossly&#39;s take, carried in, distributed, paid (from the ledger), carried over, the formula version and weights, eligible experiences and every check; plus the formula in force and scheduled changes (90-day notice).
*CreatorRewardsApi* | [**listCreatorRewardMe**](docs/Api/CreatorRewardsApi.md#listcreatorrewardme) | **GET** /v1/creator-rewards/me | Your Creator Rewards: each month, each experience you own or are paid for (counted minutes and players, exclusions, its amount, your part).
*CreatorRewardsApi* | [**listCreatorRewardMonths**](docs/Api/CreatorRewardsApi.md#listcreatorrewardmonths) | **GET** /v1/creator-rewards/months | Every calculated month: Crossly&#39;s take, the funded share, the pool, what was distributed and carried, counted minutes and exclusions by reason.
*CreatorStudioApi* | [**createCreatorCardSet**](docs/Api/CreatorStudioApi.md#createcreatorcardset) | **POST** /v1/creator/cards/sets | Start a card set: a game id (3-24 of a-z, 0-9, -), a set code (MG1) and a name. Answers a starter draft that already passes conformance. Paid seller plans only.
*CreatorStudioApi* | [**createCreatorCardSetArt**](docs/Api/CreatorStudioApi.md#createcreatorcardsetart) | **POST** /v1/creator/cards/sets/{id}/art/{slug} | One card&#39;s art: a PNG (base64, at most 1 MB and 2048 px), scanned and stored until the version is approved.
*CreatorStudioApi* | [**createCreatorCardSetCheck**](docs/Api/CreatorStudioApi.md#createcreatorcardsetcheck) | **POST** /v1/creator/cards/sets/{id}/check | The full check publish runs: draft issues, tcgStaticConformance and bot-vs-bot games of the set.
*CreatorStudioApi* | [**createCreatorCardSetPublish**](docs/Api/CreatorStudioApi.md#createcreatorcardsetpublish) | **POST** /v1/creator/cards/sets/{id}/publish | Publish: the set must pass its check; it is packaged (game.json, cards.json, the designer rules, art) and submitted as a new immutable version for review, through the same intake as a hand-made card game.
*CreatorStudioApi* | [**createCreatorCreationSubmit**](docs/Api/CreatorStudioApi.md#createcreatorcreationsubmit) | **POST** /v1/creator/creations/{format}/{id}/submit | Send one creation to review through its format&#39;s own submit (wearable, model, decor, interactive, card: its whole set). Games are published from world-kit.
*CreatorStudioApi* | [**createCreatorImport**](docs/Api/CreatorStudioApi.md#createcreatorimport) | **POST** /v1/creator/imports | Validate a filled-in template (manifest text, CSV text, every path in the upload): issues with file, line and column, and a preview. Creates nothing.
*CreatorStudioApi* | [**createCreatorImportCommit**](docs/Api/CreatorStudioApi.md#createcreatorimportcommit) | **POST** /v1/creator/imports/{id}/commit | Create the drafts of a validated template upload (drafts only; nothing is submitted to review).
*CreatorStudioApi* | [**createCreatorItemModel**](docs/Api/CreatorStudioApi.md#createcreatoritemmodel) | **POST** /v1/creator/items/models | Upload a .glb (base64, 4 MB): validated, measured and stored (quarantined until approved). An over-budget model is refused with every failing number.
*CreatorStudioApi* | [**createCreatorItemModelCheck**](docs/Api/CreatorStudioApi.md#createcreatoritemmodelcheck) | **POST** /v1/creator/items/models/check | The budget report for a .glb (base64), storing nothing: every limit (triangles, draw calls, texture edge per phone/desktop; size, nodes, meshes, images, animations; bones for wearables) with pass/fail, problems and LOD suggestions.
*CreatorStudioApi* | [**createCreatorItemModelSubmit**](docs/Api/CreatorStudioApi.md#createcreatoritemmodelsubmit) | **POST** /v1/creator/items/models/{id}/submit | Send an uploaded model to art review.
*CreatorStudioApi* | [**createCreatorItemPreview**](docs/Api/CreatorStudioApi.md#createcreatoritempreview) | **POST** /v1/creator/items/previews | Upload a preview PNG (base64, at most 1 MB and 2048 px): parsed, scanned and stored on the Crossly CDN; answers its https URL.
*CreatorStudioApi* | [**createCreatorItemWearable**](docs/Api/CreatorStudioApi.md#createcreatoritemwearable) | **POST** /v1/creator/items/wearables | Start a wearable from a template: slug, name, colourways (panel -&gt; #rrggbb), a COSM price and optional edition size. Text is filtered; answers the automated checks. Paid seller plans only.
*CreatorStudioApi* | [**createCreatorItemWearableSubmit**](docs/Api/CreatorStudioApi.md#createcreatoritemwearablesubmit) | **POST** /v1/creator/items/wearables/{id}/submit | Submit a wearable whose checks pass: each colourway becomes a COSM design (inactive) filed for review. Needs an https preview image (POST /v1/creator/items/previews).
*CreatorStudioApi* | [**createCreatorReviewHide**](docs/Api/CreatorStudioApi.md#createcreatorreviewhide) | **POST** /v1/creator/reviews/{reviewId}/hide | Hide a buyer review from your public page (it is kept, and its rating still counts).
*CreatorStudioApi* | [**createCreatorReviewReply**](docs/Api/CreatorStudioApi.md#createcreatorreviewreply) | **POST** /v1/creator/reviews/{reviewId}/reply | Reply to a buyer review of your creation (or change your reply).
*CreatorStudioApi* | [**createCreatorReviewReport**](docs/Api/CreatorStudioApi.md#createcreatorreviewreport) | **POST** /v1/creator/reviews/{reviewId}/report | Report a buyer review to Crossly (abuse, spam, not a real buyer).
*CreatorStudioApi* | [**createCreatorReviewUnhide**](docs/Api/CreatorStudioApi.md#createcreatorreviewunhide) | **POST** /v1/creator/reviews/{reviewId}/unhide | Show a hidden buyer review on your page again.
*CreatorStudioApi* | [**deleteCreatorCardSet**](docs/Api/CreatorStudioApi.md#deletecreatorcardset) | **DELETE** /v1/creator/cards/sets/{id} | Delete a set draft that was never published.
*CreatorStudioApi* | [**deleteCreatorItemModel**](docs/Api/CreatorStudioApi.md#deletecreatoritemmodel) | **DELETE** /v1/creator/items/models/{id} | Delete a draft or rejected model.
*CreatorStudioApi* | [**deleteCreatorItemWearable**](docs/Api/CreatorStudioApi.md#deletecreatoritemwearable) | **DELETE** /v1/creator/items/wearables/{id} | Delete a draft wearable.
*CreatorStudioApi* | [**getCreatorCardSet**](docs/Api/CreatorStudioApi.md#getcreatorcardset) | **GET** /v1/creator/cards/sets/{id} | One set draft with its check: draft issues by field and tcgStaticConformance problems.
*CreatorStudioApi* | [**getCreatorCardSetProgress**](docs/Api/CreatorStudioApi.md#getcreatorcardsetprogress) | **GET** /v1/creator/cards/sets/{id}/progress | A set&#39;s three steps: live on COSM, the mint threshold toward NFTs, and the print-run cost (trading_cards estimate) against production funding banked.
*CreatorStudioApi* | [**getCreatorCollection**](docs/Api/CreatorStudioApi.md#getcreatorcollection) | **GET** /v1/creator/collections/{collectionId} | One collection (a card set, a launch or a claimed contract): its six-stage road to the chain, the launch (phase timeline, proceeds, recent mints), sales by marketplace, royalty estimate, holders, its cards or creations with their earnings, holder perks set at mint, and which actions apply.
*CreatorStudioApi* | [**getCreatorCollectionPerk**](docs/Api/CreatorStudioApi.md#getcreatorcollectionperk) | **GET** /v1/creator/collections/{collectionId}/perks | A collection&#39;s holder perks (percent off at your shop, early access, a World item, a loyalty tier), whether they can be edited, and why not (a card set not started yet, a contract claimed from elsewhere).
*CreatorStudioApi* | [**getCreatorCreation**](docs/Api/CreatorStudioApi.md#getcreatorcreation) | **GET** /v1/creator/creations/{format}/{id} | One creation: its status timeline and review history, the files it uses, where it sells, its sales, its buyer reviews and its mint status.
*CreatorStudioApi* | [**getCreatorCreationStatus**](docs/Api/CreatorStudioApi.md#getcreatorcreationstatus) | **GET** /v1/creator/creations/{format}/{id}/status | Where one creation stands: its status, the reviewer&#39;s last note and its status timeline.
*CreatorStudioApi* | [**getCreatorEarningExport**](docs/Api/CreatorStudioApi.md#getcreatorearningexport) | **GET** /v1/creator/earnings/export | Download your creator earnings: format&#x3D;csv (every ledger row for the filter) or format&#x3D;pdf (a statement with per-rail totals for the same filter: rail, source, group, gameId, state; period defaults to this month).
*CreatorStudioApi* | [**getCreatorEarningReconcile**](docs/Api/CreatorStudioApi.md#getcreatorearningreconcile) | **GET** /v1/creator/earnings/reconcile | Reconcile your creator earnings: every source recomputed directly from its own ledger, side by side with the earnings view. ok is true when every source matches.
*CreatorStudioApi* | [**getCreatorImport**](docs/Api/CreatorStudioApi.md#getcreatorimport) | **GET** /v1/creator/imports/{id} | A stored template validation.
*CreatorStudioApi* | [**getCreatorItemModel**](docs/Api/CreatorStudioApi.md#getcreatoritemmodel) | **GET** /v1/creator/items/models/{id} | One of your models with its budget report.
*CreatorStudioApi* | [**getCreatorItemTemplate**](docs/Api/CreatorStudioApi.md#getcreatoritemtemplate) | **GET** /v1/creator/items/templates | Wearable templates: each garment the Crossly avatar wears, its recolourable panels, default colours and measured cost (triangles, draw calls, bones, bytes, phone LOD), plus the per-wearable budget.
*CreatorStudioApi* | [**getCreatorItemWearable**](docs/Api/CreatorStudioApi.md#getcreatoritemwearable) | **GET** /v1/creator/items/wearables/{id} | One of your wearables with its checks, review state and note.
*CreatorStudioApi* | [**getCreatorMinting**](docs/Api/CreatorStudioApi.md#getcreatorminting) | **GET** /v1/creator/minting | Everything you take on chain as collection rows with a six-stage status (designed, eligible, drafted, deploying, live, ended): gettingReady and launched. Game items (source game_item: tradeable game products, NFT declarations for your games) carry href and gameId.
*CreatorStudioApi* | [**getCreatorOverview**](docs/Api/CreatorStudioApi.md#getcreatoroverview) | **GET** /v1/creator/overview | Creator Studio overview: earnings this month and last by rail, live creations, review queue, publish lock and next steps.
*CreatorStudioApi* | [**getCreatorTemplate**](docs/Api/CreatorStudioApi.md#getcreatortemplate) | **GET** /v1/creator/templates/{format} | The template files for a format (wearable, model, decor, interactive, card_set): crossly-creation.json, creations.csv where it applies, and a README.
*CreatorStudioApi* | [**getCreatorTemplateZip**](docs/Api/CreatorStudioApi.md#getcreatortemplatezip) | **GET** /v1/creator/templates/{format}/zip | A format&#39;s template as a .zip download (the same files as GET /templates/:format, plus its empty folders).
*CreatorStudioApi* | [**listCreatorCardSets**](docs/Api/CreatorStudioApi.md#listcreatorcardsets) | **GET** /v1/creator/cards/sets | Your card set drafts, each with its road from COSM to print: live on COSM, the mint threshold (collectors, packs opened, resales) and the print-run cost against what NFT sales have banked.
*CreatorStudioApi* | [**listCreatorCreationReviews**](docs/Api/CreatorStudioApi.md#listcreatorcreationreviews) | **GET** /v1/creator/creations/{format}/{id}/reviews | Buyer reviews of one creation, newest first (hidden ones included).
*CreatorStudioApi* | [**listCreatorCreations**](docs/Api/CreatorStudioApi.md#listcreatorcreations) | **GET** /v1/creator/creations | Every creation of your shop in one list: wearables, 3D objects, decor, interactive objects, each card of your card sets, Classic games and card games, with status, collection, rating, earnings and mint status.
*CreatorStudioApi* | [**listCreatorEarningTrend**](docs/Api/CreatorStudioApi.md#listcreatorearningtrend) | **GET** /v1/creator/earnings/trend | Your creator earnings over time: net (available + paid) per day, week or month (UTC) and rail, for the same filter as the ledger. meta.totals holds the per-rail and per-source totals of that filter.
*CreatorStudioApi* | [**listCreatorEarnings**](docs/Api/CreatorStudioApi.md#listcreatorearnings) | **GET** /v1/creator/earnings | Your creator earnings ledger across every rail (cash, COSM, CBX), newest first. Each row names the source ledger row it is. meta.totals holds per-rail and per-source totals for the same filter; meta.nextCursor pages.
*CreatorStudioApi* | [**listCreatorItemModels**](docs/Api/CreatorStudioApi.md#listcreatoritemmodels) | **GET** /v1/creator/items/models | Your uploaded 3D models with their budget reports and review state.
*CreatorStudioApi* | [**listCreatorItemWearables**](docs/Api/CreatorStudioApi.md#listcreatoritemwearables) | **GET** /v1/creator/items/wearables | Your wearables: drafts, in review, live or with changes requested, each with its automated checks and per-colourway designs.
*CreatorStudioApi* | [**listCreatorItems**](docs/Api/CreatorStudioApi.md#listcreatoritems) | **GET** /v1/creator/items | Every creation of your shop — wearables, decor, uploaded 3D models, interactive objects, Classic games, card games (incl. unpublished designer sets), physical runs — with status, price and earnings.
*CreatorStudioApi* | [**listCreatorReviews**](docs/Api/CreatorStudioApi.md#listcreatorreviews) | **GET** /v1/creator/reviews | Every creator submission (items, interactive objects, Classic games, card games) and its review decision with the reviewer note.
*CreatorStudioApi* | [**updateCreatorCardSet**](docs/Api/CreatorStudioApi.md#updatecreatorcardset) | **PUT** /v1/creator/cards/sets/{id} | Save the whole draft: cards (name, type, rarity, rules text, flavour, power/draw/guard), COSM prices and supply, frame colours, print plan. Every word goes through the text filter. Art is merged: a card without &#x60;art&#x60; (or with art as read) keeps its stored art, &#x60;art: null&#x60; clears it; only the art upload sets art. Answers the check.
*CreatorStudioApi* | [**updateCreatorCollectionPerk**](docs/Api/CreatorStudioApi.md#updatecreatorcollectionperk) | **PUT** /v1/creator/collections/{collectionId}/perks | Replace a collection&#39;s holder perks: &#x60;{ perks: [...] }&#x60;, at most one of each type: percent_off { percent 1-50 }, early_access { hours 1-720 }, world_item { creationRef, name }, loyalty_tier { tierId, tierName } (one of your loyalty tiers), each with an optional note. 409 when the collection has no launch yet.
*CreatorStudioApi* | [**updateCreatorItemWearable**](docs/Api/CreatorStudioApi.md#updatecreatoritemwearable) | **PATCH** /v1/creator/items/wearables/{id} | Edit a draft wearable (name, description, colourways, price, edition). Submitted wearables are frozen.
*CrosslyWalletApi* | [**createTcgNftReconcile**](docs/Api/CrosslyWalletApi.md#createtcgnftreconcile) | **POST** /v1/tcg/nfts/reconcile | Re-read your wallets on chain so your card counts follow what you hold (cards you moved away leave; cards you received join).
*CrosslyWalletApi* | [**createWalletCrossly**](docs/Api/CrosslyWalletApi.md#createwalletcrossly) | **POST** /v1/wallet/crossly | Create your Crossly wallet now (it is otherwise created for you in the background). Idempotent.
*CrosslyWalletApi* | [**getWalletCrossly**](docs/Api/CrosslyWalletApi.md#getwalletcrossly) | **GET** /v1/wallet/crossly | Your Crossly wallet (self-custody Solana): status, address, whether it is configured, and your card NFT counts by status.
*CrosslyWalletApi* | [**listTcgNfts**](docs/Api/CrosslyWalletApi.md#listtcgnfts) | **GET** /v1/tcg/{game}/nfts | Your card NFTs for a Crossly TCG game: each copy, its mint status, asset id and whether it is soulbound (starter).
*CustomersApi* | [**createCustomerBulkDelete**](docs/Api/CustomersApi.md#createcustomerbulkdelete) | **POST** /v1/customers/bulk-delete | Bulk blocklist customer handles.
*CustomersApi* | [**createCustomerBulkExport**](docs/Api/CustomersApi.md#createcustomerbulkexport) | **POST** /v1/customers/bulk-export | Bulk export aggregated customers as CSV.
*CustomersApi* | [**createCustomerRefreshProfile**](docs/Api/CustomersApi.md#createcustomerrefreshprofile) | **POST** /v1/customers/{handle}/refresh-profile | Queue a fresh read of a customer&#39;s buyer profiles on every platform they ordered on.
*CustomersApi* | [**createLoyaltyAirdropCancel**](docs/Api/CustomersApi.md#createloyaltyairdropcancel) | **POST** /v1/loyalty/airdrops/{id}/cancel | Cancel a queued or failed airdrop (one already sent is the member’s).
*CustomersApi* | [**createLoyaltyAirdropCheck**](docs/Api/CustomersApi.md#createloyaltyairdropcheck) | **POST** /v1/loyalty/airdrops/{id}/check | Read a submitted airdrop’s receipt again now.
*CustomersApi* | [**createLoyaltyAirdropPrepare**](docs/Api/CustomersApi.md#createloyaltyairdropprepare) | **POST** /v1/loyalty/airdrops/{id}/prepare | The mint transaction for your launch owner wallet to send: chain, from, to (your launch contract) and calldata, to the member’s verified wallet. Refused airdrop_not_sendable with a reason when it cannot be built.
*CustomersApi* | [**createLoyaltyAirdropSubmit**](docs/Api/CustomersApi.md#createloyaltyairdropsubmit) | **POST** /v1/loyalty/airdrops/{id}/submit | Record the hash your wallet broadcast; Crossly reads the receipt (now, then on a schedule) and marks it sent or failed.
*CustomersApi* | [**createLoyaltyProgramInvite**](docs/Api/CustomersApi.md#createloyaltyprograminvite) | **POST** /v1/loyalty/program/invite | Invite Crossly buyers to your loyalty program by user id (up to 500); returns how many were newly invited.
*CustomersApi* | [**createLoyaltyProgramMemberOverride**](docs/Api/CustomersApi.md#createloyaltyprogrammemberoverride) | **POST** /v1/loyalty/program/members/{id}/override | Pin a member to a tier (tierId null clears the pin), with a reason.
*CustomersApi* | [**createLoyaltyTier**](docs/Api/CustomersApi.md#createloyaltytier) | **POST** /v1/loyalty/tiers | Add a tier: name, look, threshold and typed perks (% off, free shipping, early access, members-only listings, wholesale access, token gates, airdrops, Bucks, World items, event tickets, …).
*CustomersApi* | [**deleteLoyaltyTier**](docs/Api/CustomersApi.md#deleteloyaltytier) | **DELETE** /v1/loyalty/tiers/{id} | Delete a tier; its members are re-evaluated.
*CustomersApi* | [**getCustomer**](docs/Api/CustomersApi.md#getcustomer) | **GET** /v1/customers/{handle} | Get one customer: recent 50 orders, buyer profiles per platform, and stats over all of their orders.
*CustomersApi* | [**getCustomerNote**](docs/Api/CustomersApi.md#getcustomernote) | **GET** /v1/customers/{handle}/notes | Your private notes on a customer (empty when none). Works before their first order.
*CustomersApi* | [**getLoyaltyAirdrop**](docs/Api/CustomersApi.md#getloyaltyairdrop) | **GET** /v1/loyalty/airdrops/{id} | One loyalty NFT airdrop: member, collection, recipient wallet, transaction hash and status.
*CustomersApi* | [**getLoyaltyClub**](docs/Api/CustomersApi.md#getloyaltyclub) | **GET** /v1/loyalty/club | Your loyalty club: tiers and how many members are in each.
*CustomersApi* | [**getLoyaltyProgram**](docs/Api/CustomersApi.md#getloyaltyprogram) | **GET** /v1/loyalty/program | Your loyalty program: qualification (spend, orders, points), window, joining, downgrade and grace, and its tiers with typed perks.
*CustomersApi* | [**getLoyaltyProgramMember**](docs/Api/CustomersApi.md#getloyaltyprogrammember) | **GET** /v1/loyalty/program/members/{id} | One member: standing, tier, progress, perks held, history and any override.
*CustomersApi* | [**listCustomers**](docs/Api/CustomersApi.md#listcustomers) | **GET** /v1/customers | List aggregated customers (group-by lower(buyer_username)), each with its best avatar, display name and star rating.
*CustomersApi* | [**listLoyaltyAirdrops**](docs/Api/CustomersApi.md#listloyaltyairdrops) | **GET** /v1/loyalty/airdrops | NFT airdrops your loyalty tiers earned members: queued to send, submitted (waiting on the receipt), sent, failed (with why) or cancelled.
*CustomersApi* | [**listLoyaltyMembers**](docs/Api/CustomersApi.md#listloyaltymembers) | **GET** /v1/loyalty/members | Your loyalty club’s members, by spend with you.
*CustomersApi* | [**listLoyaltyProgramInviteCandidates**](docs/Api/CustomersApi.md#listloyaltyprograminvitecandidates) | **GET** /v1/loyalty/program/invite-candidates | Crossly buyers who bought from you and are not loyalty members yet (q searches by name): who you can invite.
*CustomersApi* | [**listLoyaltyProgramMembers**](docs/Api/CustomersApi.md#listloyaltyprogrammembers) | **GET** /v1/loyalty/program/members | Your loyalty members with tier, standing, grace and overrides; search, tier, status and sort filters.
*CustomersApi* | [**updateCustomerNote**](docs/Api/CustomersApi.md#updatecustomernote) | **PUT** /v1/customers/{handle}/notes | Save your private notes on a customer (an empty string clears them).
*CustomersApi* | [**updateLoyaltyClub**](docs/Api/CustomersApi.md#updateloyaltyclub) | **PUT** /v1/loyalty/club | Create or update your loyalty club: name, on/off, and up to 6 spend tiers each with a discount (≤ 30%) and perks.
*CustomersApi* | [**updateLoyaltyProgram**](docs/Api/CustomersApi.md#updateloyaltyprogram) | **PUT** /v1/loyalty/program | Create or update your loyalty program settings.
*CustomersApi* | [**updateLoyaltyTier**](docs/Api/CustomersApi.md#updateloyaltytier) | **PUT** /v1/loyalty/tiers/{id} | Replace a tier. Members holding it get the edited perks.
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
*DeveloperAppsApi* | [**createDeveloperAppCertificationSubmit**](docs/Api/DeveloperAppsApi.md#createdeveloperappcertificationsubmit) | **POST** /v1/developer/apps/{appId}/certification/submit | Send the application to Crossly review. Needs a passing conformance run on this client version and report-menu evidence.
*DeveloperAppsApi* | [**createDeveloperAppCertificationWithdraw**](docs/Api/DeveloperAppsApi.md#createdeveloperappcertificationwithdraw) | **POST** /v1/developer/apps/{appId}/certification/withdraw | Take the application out of review to edit it.
*DeveloperAppsApi* | [**createDeveloperAppClientVersion**](docs/Api/DeveloperAppsApi.md#createdeveloperappclientversion) | **POST** /v1/developer/apps/{appId}/client-versions | Register a new release of your certified client and start its conformance run. A pass on the same major version carries the certification automatically; a new major version goes to Crossly review; a failure keeps your previous certified version.
*DeveloperAppsApi* | [**createDeveloperAppClientVersionRun**](docs/Api/DeveloperAppsApi.md#createdeveloperappclientversionrun) | **POST** /v1/developer/apps/{appId}/client-versions/{versionId}/run | Start a new conformance run for a release whose run failed, expired or was aborted.
*DeveloperAppsApi* | [**createDeveloperAppConformanceRun**](docs/Api/DeveloperAppsApi.md#createdeveloperappconformancerun) | **POST** /v1/developer/apps/{appId}/conformance-runs | Start a conformance run: a test experience only your app, signed in as you, can join. Join it with POST /v1/worlds/experiences/{experienceId}/join and follow the instruction.
*DeveloperAppsApi* | [**createDeveloperAppConformanceRunAbort**](docs/Api/DeveloperAppsApi.md#createdeveloperappconformancerunabort) | **POST** /v1/developer/apps/{appId}/conformance-runs/{runId}/abort | Abort an open run.
*DeveloperAppsApi* | [**createDeveloperAppVerificationCheckDomain**](docs/Api/DeveloperAppsApi.md#createdeveloperappverificationcheckdomain) | **POST** /v1/developer/apps/{appId}/verification/check-domain | Look up the DNS TXT record crossly-app-verification&#x3D;&lt;token&gt; on your domain (or _crossly.&lt;domain&gt;) now.
*DeveloperAppsApi* | [**createDeveloperAppVerificationSubmit**](docs/Api/DeveloperAppsApi.md#createdeveloperappverificationsubmit) | **POST** /v1/developer/apps/{appId}/verification/submit | Send the verification to Crossly review (each scope is decided separately).
*DeveloperAppsApi* | [**createDeveloperAppVerificationWithdraw**](docs/Api/DeveloperAppsApi.md#createdeveloperappverificationwithdraw) | **POST** /v1/developer/apps/{appId}/verification/withdraw | Take the verification out of review to edit it.
*DeveloperAppsApi* | [**getDeveloperAppCertification**](docs/Api/DeveloperAppsApi.md#getdeveloperappcertification) | **GET** /v1/developer/apps/{appId}/certification | The Crossly Carnival client certification application (null until you create it): status, client, evidence, the passing run and what still blocks submission.
*DeveloperAppsApi* | [**getDeveloperAppClientVersion**](docs/Api/DeveloperAppsApi.md#getdeveloperappclientversion) | **GET** /v1/developer/apps/{appId}/client-versions/{versionId} | One client release and its re-certification.
*DeveloperAppsApi* | [**getDeveloperAppConformanceRun**](docs/Api/DeveloperAppsApi.md#getdeveloperappconformancerun) | **GET** /v1/developer/apps/{appId}/conformance-runs/{runId} | A run&#39;s step, instruction and every check with its verdict.
*DeveloperAppsApi* | [**getDeveloperAppHealth**](docs/Api/DeveloperAppsApi.md#getdeveloperapphealth) | **GET** /v1/developer/apps/{appId}/health | Your app&#39;s API health: write-request counts by status class (24 h, 7 d) across every seller using it, top error codes with advice, a retry-storm flag, the last 50 failed requests (message and correlation id only on requests made with your own account), and from Atlas: how many people authorized the app and with which scopes (counts, never who) and the token endpoint&#39;s OAuth errors by code (e.g. invalid_grant) with the latest one.
*DeveloperAppsApi* | [**getDeveloperAppProfile**](docs/Api/DeveloperAppsApi.md#getdeveloperappprofile) | **GET** /v1/developer/apps/{appId}/profile | Your app&#39;s public directory profile: every editable field, the listing status, what still needs review, and &#x60;preview&#x60; — the profile exactly as /seller-apps or /buyer-apps will show it.
*DeveloperAppsApi* | [**getDeveloperAppReview**](docs/Api/DeveloperAppsApi.md#getdeveloperappreview) | **GET** /v1/developer/apps/{appId}/review | Your app&#39;s Crossly Carnival client certification, verification and review history in one read.
*DeveloperAppsApi* | [**getDeveloperAppVerification**](docs/Api/DeveloperAppsApi.md#getdeveloperappverification) | **GET** /v1/developer/apps/{appId}/verification | The app verification for worlds:publish / worlds:monetize (null until created): domain proof, policies, justifications and per-scope decisions.
*DeveloperAppsApi* | [**listDeveloperAppClientVersions**](docs/Api/DeveloperAppsApi.md#listdeveloperappclientversions) | **GET** /v1/developer/apps/{appId}/client-versions | Releases of your certified client, newest first: the re-certification status (awaiting_run, running, carried, ops_review, approved, rejected, failed, superseded), the rule that decided it and its checks.
*DeveloperAppsApi* | [**listDeveloperAppConformanceRuns**](docs/Api/DeveloperAppsApi.md#listdeveloperappconformanceruns) | **GET** /v1/developer/apps/{appId}/conformance-runs | Your app&#39;s conformance runs, newest first.
*DeveloperAppsApi* | [**updateDeveloperAppCertification**](docs/Api/DeveloperAppsApi.md#updatedeveloperappcertification) | **PUT** /v1/developer/apps/{appId}/certification | Create or edit the application: client name, platform, version, build and source URLs, description and evidence (report menu, chat, Policy UI). Changing the client clears the passing run.
*DeveloperAppsApi* | [**updateDeveloperAppListing**](docs/Api/DeveloperAppsApi.md#updatedeveloperapplisting) | **PUT** /v1/developer/apps/{appId}/listing | Turn \&quot;Listed publicly\&quot; on or off. On: an app Crossly approved whose name, scopes and audience are unchanged is listed at once; anything else goes to review (pending_review). Off: unlisted immediately.
*DeveloperAppsApi* | [**updateDeveloperAppProfile**](docs/Api/DeveloperAppsApi.md#updatedeveloperappprofile) | **PATCH** /v1/developer/apps/{appId}/profile | Edit your app&#39;s directory profile: name, slug, tagline, description, longDescription (markdown), category, audience (auto|seller|buyer|both), logoUrl, bannerUrl (4:1, 1600×400), screenshots (≤6), demoVideoUrl, homepageUrl, installUrl, support/privacy/terms links, docsLinks [{label,url}] and pricingNote. Absent keys are kept, null clears. Images not on Crossly&#39;s CDN are copied onto it. Renaming a listed app or changing its audience sends it back to review.
*DeveloperAppsApi* | [**updateDeveloperAppVerification**](docs/Api/DeveloperAppsApi.md#updatedeveloperappverification) | **PUT** /v1/developer/apps/{appId}/verification | Create or edit the verification: domain, requested scopes with a justification each, privacy policy, terms, support email, demo.
*DiscountsApi* | [**createAutomaticDiscount**](docs/Api/DiscountsApi.md#createautomaticdiscount) | **POST** /v1/automatic-discounts | Create an automatic discount.
*DiscountsApi* | [**createAutomaticDiscountPreview**](docs/Api/DiscountsApi.md#createautomaticdiscountpreview) | **POST** /v1/automatic-discounts/preview | Preview a hypothetical cart of your listings against your automatic discounts (or an unsaved draft): what each line gets.
*DiscountsApi* | [**createDiscountCode**](docs/Api/DiscountsApi.md#creatediscountcode) | **POST** /v1/discount-codes | Create a discount code: percent, fixed, free shipping, buy X get Y, spend tiers or a set price, with requirements, item scope, limits (total, per buyer, per day, budget, regions), schedule and stacking.
*DiscountsApi* | [**createDiscountCodeGenerate**](docs/Api/DiscountsApi.md#creatediscountcodegenerate) | **POST** /v1/discount-codes/{id}/generate | Generate up to 5,000 unique single-use codes with this code’s rules (their uses count toward its limits).
*DiscountsApi* | [**createDiscountCodeStatus**](docs/Api/DiscountsApi.md#creatediscountcodestatus) | **POST** /v1/discount-codes/{id}/status | Pause, resume (active) or archive a discount code.
*DiscountsApi* | [**createDiscountHolder**](docs/Api/DiscountsApi.md#creatediscountholder) | **POST** /v1/discounts/holders | Create a Collection holders deal in the store (X-Storefront-Id; default store when omitted).
*DiscountsApi* | [**deleteAutomaticDiscount**](docs/Api/DiscountsApi.md#deleteautomaticdiscount) | **DELETE** /v1/automatic-discounts/{id} | Delete an automatic discount.
*DiscountsApi* | [**deleteDiscountHolder**](docs/Api/DiscountsApi.md#deletediscountholder) | **DELETE** /v1/discounts/holders/{id} | Delete a Collection holders deal. Returns &#x60;{ ok }&#x60;.
*DiscountsApi* | [**getDiscountCode**](docs/Api/DiscountsApi.md#getdiscountcode) | **GET** /v1/discount-codes/{id} | One discount code with its rules and usage.
*DiscountsApi* | [**getDiscountCodeShare**](docs/Api/DiscountsApi.md#getdiscountcodeshare) | **GET** /v1/discount-codes/{id}/share | The share link that pre-applies the code at checkout (the store page with ?code&#x3D;) and a QR code of it as a PNG data URL.
*DiscountsApi* | [**getDiscountHolder**](docs/Api/DiscountsApi.md#getdiscountholder) | **GET** /v1/discounts/holders/{id} | One Collection holders deal with its usage (uses, cents given).
*DiscountsApi* | [**listAutomaticDiscounts**](docs/Api/DiscountsApi.md#listautomaticdiscounts) | **GET** /v1/automatic-discounts | Your automatic discounts (buy more, save more): quantity and mixed-item tiers, scope, channels and schedule.
*DiscountsApi* | [**listDiscountCodeRedemptions**](docs/Api/DiscountsApi.md#listdiscountcoderedemptions) | **GET** /v1/discount-codes/{id}/redemptions | A code’s usage history: orders, masked buyers, region, channel and the amount given, newest first.
*DiscountsApi* | [**listDiscountCodes**](docs/Api/DiscountsApi.md#listdiscountcodes) | **GET** /v1/discount-codes | Your discount codes: kind, status (active, scheduled, paused, expired, exhausted, archived), every rule, and usage.
*DiscountsApi* | [**listDiscountHolders**](docs/Api/DiscountsApi.md#listdiscountholders) | **GET** /v1/discounts/holders | The store’s Collection holders deals: a percent off for buyers holding any token of a collection (by chain + contract), with scope, channels, schedule, stacking and limits.
*DiscountsApi* | [**updateAutomaticDiscount**](docs/Api/DiscountsApi.md#updateautomaticdiscount) | **PUT** /v1/automatic-discounts/{id} | Replace an automatic discount.
*DiscountsApi* | [**updateDiscountCode**](docs/Api/DiscountsApi.md#updatediscountcode) | **PATCH** /v1/discount-codes/{id} | Update a discount code. The code itself can be renamed only until it is first used.
*DiscountsApi* | [**updateDiscountHolder**](docs/Api/DiscountsApi.md#updatediscountholder) | **PUT** /v1/discounts/holders/{id} | Replace a Collection holders deal.
*DropsApi* | [**createDrop**](docs/Api/DropsApi.md#createdrop) | **POST** /v1/drops | Set up a drop: { title, listingIds (1-10 of your live Crossly listings), units (at most their stock), opensLineAt, releaseAt (ISO), eligibility: \&quot;signed_in\&quot; | \&quot;verified\&quot; }. The line opens at opensLineAt with a published seed commitment; the draw runs at releaseAt.
*DropsApi* | [**deleteDrop**](docs/Api/DropsApi.md#deletedrop) | **DELETE** /v1/drops/{id} | Call a drop off before its line opens.
*DropsApi* | [**getDrop**](docs/Api/DropsApi.md#getdrop) | **GET** /v1/drops/{id} | A drop: its listings, units, times, eligibility, the sha256 seed commitment and the entry count. After release also the revealed seed, the sorted entry ids and the draw order (recompute it with drawWinners(seed, dropId, entryIds, units)).
*DropsApi* | [**listDropMine**](docs/Api/DropsApi.md#listdropmine) | **GET** /v1/drops/mine | Your drops, latest release first, with entries, winners, claims, the waitlist and expired holds.
*DropsApi* | [**listStreetDrops**](docs/Api/DropsApi.md#liststreetdrops) | **GET** /v1/streets/{slug}/drops | Upcoming, open and just-released drops on a Crossly World street, one per shop, soonest first, with the plot (or live stall spot) each line forms at.
*DropsApi* | [**updateDrop**](docs/Api/DropsApi.md#updatedrop) | **PATCH** /v1/drops/{id} | Change a drop before its line opens (any of the set-up fields).
*EmbedsApi* | [**createEmbedKey**](docs/Api/EmbedsApi.md#createembedkey) | **POST** /v1/embeds/keys | Mint a publishable key for a site.
*EmbedsApi* | [**deleteEmbedKey**](docs/Api/EmbedsApi.md#deleteembedkey) | **DELETE** /v1/embeds/keys/{id} | Revoke a publishable key.
*EmbedsApi* | [**listEmbedKeys**](docs/Api/EmbedsApi.md#listembedkeys) | **GET** /v1/embeds/keys | Your publishable keys.
*FieldRulesApi* | [**createFieldRule**](docs/Api/FieldRulesApi.md#createfieldrule) | **POST** /v1/field-rules | Create a per-channel field rule.
*FieldRulesApi* | [**createFieldRulePreview**](docs/Api/FieldRulesApi.md#createfieldrulepreview) | **POST** /v1/field-rules/preview | Preview field-rule output for a listing on one channel.
*FieldRulesApi* | [**createFieldRuleReorder**](docs/Api/FieldRulesApi.md#createfieldrulereorder) | **POST** /v1/field-rules/reorder | Set the run order of several field rules.
*FieldRulesApi* | [**deleteFieldRule**](docs/Api/FieldRulesApi.md#deletefieldrule) | **DELETE** /v1/field-rules/{id} | Delete a field rule.
*FieldRulesApi* | [**getFieldRule**](docs/Api/FieldRulesApi.md#getfieldrule) | **GET** /v1/field-rules/{id} | Get one field rule.
*FieldRulesApi* | [**listFieldRules**](docs/Api/FieldRulesApi.md#listfieldrules) | **GET** /v1/field-rules | List the seller&#39;s per-channel field rules.
*FieldRulesApi* | [**updateFieldRule**](docs/Api/FieldRulesApi.md#updatefieldrule) | **PATCH** /v1/field-rules/{id} | Update a field rule.
*FundingApi* | [**createFundingApply**](docs/Api/FundingApi.md#createfundingapply) | **POST** /v1/funding/apply | Apply for Crossly Funding. Decided at once on the checklist rules: approved opens your line (limit &#x3D; 25% of 90 days of settled Crossly payouts), declined lists why, needs_review goes to a person.
*FundingApi* | [**createFundingDraw**](docs/Api/FundingApi.md#createfundingdraw) | **POST** /v1/funding/draws | Draw on your line for a supplier order. Send the supplier, the invoice (an uploaded invoiceFileId from POST /v1/funding/invoice-files, a reference, or a URL) and the APR from the quote you accepted (acceptedAprBps); refused if your rate changed. The advance is held as in-platform Crossly balance, never cash. Idempotent on idempotencyKey.
*FundingApi* | [**createFundingDrawApprove**](docs/Api/FundingApi.md#createfundingdrawapprove) | **POST** /v1/funding/draws/{id}/approve | Approve a held draw. The two-person rule needs two distinct approvers; the requester never approves their own.
*FundingApi* | [**createFundingDrawQuote**](docs/Api/FundingApi.md#createfundingdrawquote) | **POST** /v1/funding/draws/quote | The disclosure for a draw of amountCents: APR, the simple-interest fee for the full term, the total and the due date, plus your available headroom. Nothing is drawn.
*FundingApi* | [**createFundingDrawReject**](docs/Api/FundingApi.md#createfundingdrawreject) | **POST** /v1/funding/draws/{id}/reject | Reject a held draw. Nothing was drawn, so nothing is owed.
*FundingApi* | [**createFundingDrawUse**](docs/Api/FundingApi.md#createfundingdrawuse) | **POST** /v1/funding/draws/use | Request a draw for an approved use. Refused by the spend controls, held for approval (stage requested — no debt until disbursed), or disbursed at once as restricted funding CBX. A DEBT with interest: show the disclosure first.
*FundingApi* | [**createFundingInvoiceFile**](docs/Api/FundingApi.md#createfundinginvoicefile) | **POST** /v1/funding/invoice-files | Sign an upload for a supplier invoice: a PDF or image (application/pdf, image/jpeg, image/png, image/webp, image/heic) of at most 15 MB. PUT the bytes to uploadUrl with the same Content-Type and exactly contentLength bytes, then draw with invoiceFileId &#x3D; file.id. Stored privately; one draw per file.
*FundingApi* | [**createFundingPayCrosslyFee**](docs/Api/FundingApi.md#createfundingpaycrosslyfee) | **POST** /v1/funding/pay/crossly-fees | Pay an open invoice of your Crossly plan with restricted funding CBX (no card is charged; the invoice is marked paid). Idempotent per invoice.
*FundingApi* | [**createFundingPayShippingLabel**](docs/Api/FundingApi.md#createfundingpayshippinglabel) | **POST** /v1/funding/pay/shipping-labels | Top up your shipping wallet with restricted funding CBX; labels you buy are then debited from it. Idempotent on idempotencyKey. Refused when the spend controls forbid shipping labels or it is over your approval threshold with no approved draw.
*FundingApi* | [**createFundingPayVaultFee**](docs/Api/FundingApi.md#createfundingpayvaultfee) | **POST** /v1/funding/pay/vault-fees | Ship a stored Vault unit home and pay its fee (shipping, storage owed, early withdrawal) with restricted funding CBX instead of your card.
*FundingApi* | [**createFundingPoolStake**](docs/Api/FundingApi.md#createfundingpoolstake) | **POST** /v1/funding/pool/stake | Stake earned CBX into the funding pool. Refused, with the reason, until the pool is live and staking is open.
*FundingApi* | [**createFundingPoolUnstake**](docs/Api/FundingApi.md#createfundingpoolunstake) | **POST** /v1/funding/pool/unstake | Queue an unstake. Paid first-in first-out once your lockup has passed.
*FundingApi* | [**createFundingPoolUnstakeCancel**](docs/Api/FundingApi.md#createfundingpoolunstakecancel) | **POST** /v1/funding/pool/unstake/{id}/cancel | Cancel a queued unstake that has not been paid yet.
*FundingApi* | [**createFundingPoolWaitlist**](docs/Api/FundingApi.md#createfundingpoolwaitlist) | **POST** /v1/funding/pool/waitlist | Join the staker waitlist: told the moment staking into the funding pool opens.
*FundingApi* | [**createFundingRepay**](docs/Api/FundingApi.md#createfundingrepay) | **POST** /v1/funding/repay | Repay. source \&quot;balance\&quot; (default) takes it from your available Stripe payout balance and applies it at once. source \&quot;card\&quot; returns a PaymentIntent client secret to confirm with Stripe; source \&quot;checkout\&quot; returns checkoutUrl, a hosted Stripe Checkout page the seller pays on (no Stripe SDK needed). source \&quot;cbx\&quot; pays early from your EARNED CBX at the obligation rate (granted and funding CBX never repay a line) and applies at once. Card and checkout apply when the payment succeeds. Never more than you owe; idempotent on idempotencyKey.
*FundingApi* | [**deleteFundingMember**](docs/Api/FundingApi.md#deletefundingmember) | **DELETE** /v1/funding/members/{memberUserId} | Remove a team member’s funding limit: they can no longer draw.
*FundingApi* | [**getFundingControl**](docs/Api/FundingApi.md#getfundingcontrol) | **GET** /v1/funding/controls | Your funding spend controls: approved uses, supplier allow/block lists, the approval threshold, the two-person rule and each team member’s funding limit.
*FundingApi* | [**getFundingDraw**](docs/Api/FundingApi.md#getfundingdraw) | **GET** /v1/funding/draws/{id} | One draw: amount, use, supplier, stage and its timeline (requested → approved → disbursed → spent → repaid).
*FundingApi* | [**getFundingDrawInvoice**](docs/Api/FundingApi.md#getfundingdrawinvoice) | **GET** /v1/funding/draws/{id}/invoice | A 15-minute signed link to a draw&#39;s uploaded supplier invoice, with the file&#39;s name, type and size. 404 when the draw has no uploaded file.
*FundingApi* | [**getFundingLine**](docs/Api/FundingApi.md#getfundingline) | **GET** /v1/funding/line | Your line: limit, available, outstanding (principal + interest), APR, interest accrued since the last posting, the payoff figure, next due date, anything overdue, the per-draw schedule and your auto-repay share.
*FundingApi* | [**getFundingOffer**](docs/Api/FundingApi.md#getfundingoffer) | **GET** /v1/funding/offer | Your pre-qualified Crossly Funding limit and the eligibility checklist: each rule, whether you pass it, and what to do if not. Works with or without a line.
*FundingApi* | [**getFundingPool**](docs/Api/FundingApi.md#getfundingpool) | **GET** /v1/funding/pool | The Crossly Funding pool: live or not and why (no token yet, no pool, no price, no capacity), capacity, utilisation, the reserve, and the uses and suppliers it allows.
*FundingApi* | [**getFundingPoolStake**](docs/Api/FundingApi.md#getfundingpoolstake) | **GET** /v1/funding/pool/stake | Your position in the funding pool, the trailing APY reading (never a promise), lockup, unstake queue, history and the risk disclosure.
*FundingApi* | [**getFundingSpendable**](docs/Api/FundingApi.md#getfundingspendable) | **GET** /v1/funding/spendable | What your restricted funding CBX can pay right now, in cents, for each Crossly use (shipping labels, Crossly fees, ads, Vault fees). 0 &#x3D; none, or your spend controls refuse that use.
*FundingApi* | [**getFundingStatement**](docs/Api/FundingApi.md#getfundingstatement) | **GET** /v1/funding/statements | A monthly statement (?month&#x3D;YYYY-MM, default the latest): opening balance, every draw, interest posting and payment, and the closing balance; plus the months available.
*FundingApi* | [**listFundingApprovals**](docs/Api/FundingApi.md#listfundingapprovals) | **GET** /v1/funding/approvals | Draws your spend controls hold for approval, with the approvals so far and how many are needed.
*FundingApi* | [**listFundingDraws**](docs/Api/FundingApi.md#listfundingdraws) | **GET** /v1/funding/draws | Every draw on your line: what it paid for (a supplier order, or a Crossly checkout), its APR, estimated fee and due date.
*FundingApi* | [**listFundingReceipts**](docs/Api/FundingApi.md#listfundingreceipts) | **GET** /v1/funding/receipts | Your funding payments to Crossly, newest first: the use, what it paid for, cents, status (pending, paid, failed) and the draw it was stamped against.
*FundingApi* | [**listFundingRepayments**](docs/Api/FundingApi.md#listfundingrepayments) | **GET** /v1/funding/repayments | Manual repayments (card / bank, or from your payout balance), newest first.
*FundingApi* | [**updateFundingAutorepay**](docs/Api/FundingApi.md#updatefundingautorepay) | **PUT** /v1/funding/autorepay | Set the share of each Crossly payout applied to what you owe: a whole percent from 10 to 100 (default 20). Never more than you owe is taken.
*FundingApi* | [**updateFundingControl**](docs/Api/FundingApi.md#updatefundingcontrol) | **PUT** /v1/funding/controls | Change your funding spend controls. Enforced at every spend: wholesale checkout, labels, ads, Crossly and Vault fees.
*FundingApi* | [**updateFundingMember**](docs/Api/FundingApi.md#updatefundingmember) | **PUT** /v1/funding/members/{memberUserId} | Set a team member’s funding limit (per draw or per month).
*GradingApi* | [**createGradingRunReserve**](docs/Api/GradingApi.md#creategradingrunreserve) | **POST** /v1/grading/runs/{id}/reserve | Hold a slot in a Grading Run. Free now; charged on your saved card only if the run locks. Full-access token and Idempotency-Key required.
*GradingApi* | [**createGradingSubmissionCancel**](docs/Api/GradingApi.md#creategradingsubmissioncancel) | **POST** /v1/grading/submissions/{id}/cancel | Pull a reserved card out of its run. Only while it is reserved; nothing was charged.
*GradingApi* | [**createGradingSubmissionShipped**](docs/Api/GradingApi.md#creategradingsubmissionshipped) | **POST** /v1/grading/submissions/{id}/shipped | Say you mailed a charged card to the hub, with optional tracking.
*GradingApi* | [**createGradingVerifyCert**](docs/Api/GradingApi.md#creategradingverifycert) | **POST** /v1/grading/verify-cert | Look a cert number up with its grader. found&#x3D;false when the grader has no record.
*GradingApi* | [**createVaultMarketGradingOrder**](docs/Api/GradingApi.md#createvaultmarketgradingorder) | **POST** /v1/vault-markets/grading/orders | Start a grading submission: cards (vault units or inventory items) to one grader at one service. Priced from the price book; vault units are held. Nothing is charged until you pay.
*GradingApi* | [**createVaultMarketGradingOrderCancel**](docs/Api/GradingApi.md#createvaultmarketgradingordercancel) | **POST** /v1/vault-markets/grading/orders/{id}/cancel | Cancel a draft submission; its vault units go back on their shelf. A paid submission cannot be cancelled here.
*GradingApi* | [**createVaultMarketGradingOrderPay**](docs/Api/GradingApi.md#createvaultmarketgradingorderpay) | **POST** /v1/vault-markets/grading/orders/{id}/pay | Pay for a draft submission. savedCard: true charges your saved card (paid, or requires_action with a client secret for 3-D Secure). Full-access token and Idempotency-Key required.
*GradingApi* | [**createVaultMarketGradingOrderPayConfirm**](docs/Api/GradingApi.md#createvaultmarketgradingorderpayconfirm) | **POST** /v1/vault-markets/grading/orders/{id}/pay/confirm | After a 3-D Secure step or a card form: confirm the PaymentIntent with Stripe and mark the submission paid.
*GradingApi* | [**getGradingPriceBook**](docs/Api/GradingApi.md#getgradingpricebook) | **GET** /v1/grading/price-book | The grading price book: every grader, its services (per-card price, minimum cards, max declared value, turnaround) and add-ons, plus Crossly handling. The same data the dashboard prices from.
*GradingApi* | [**getGradingWorth**](docs/Api/GradingApi.md#getgradingworth) | **GET** /v1/grading/worth/{inventoryItemId} | Worth grading? Raw value vs what each grade is worth at each grader, against the cost. Never predicts the grade.
*GradingApi* | [**getVaultMarketGradingOrder**](docs/Api/GradingApi.md#getvaultmarketgradingorder) | **GET** /v1/vault-markets/grading/orders/{id} | One grading submission: its timeline, every card with its grade, cert number and photos, the costs and the tracking.
*GradingApi* | [**listGradingRateCard**](docs/Api/GradingApi.md#listgradingratecard) | **GET** /v1/grading/rate-card | Every grader and tier Crossly can send to, with the per-card price in cents (null &#x3D; paused at the grader).
*GradingApi* | [**listGradingRuns**](docs/Api/GradingApi.md#listgradingruns) | **GET** /v1/grading/runs | Grading Runs taking reservations now, soonest cutoff first. meta.open is false while runs are switched off.
*GradingApi* | [**listGradingSubmissions**](docs/Api/GradingApi.md#listgradingsubmissions) | **GET** /v1/grading/submissions | Your cards out for grading (runs and Direct), newest first. active&#x3D;1 keeps only the ones still in flight.
*GradingApi* | [**listVaultMarketGradingCandidates**](docs/Api/GradingApi.md#listvaultmarketgradingcandidates) | **GET** /v1/vault-markets/grading/candidates | What you can send to grading: raw units already in your vault and inventory items, each with a declared value to start from and the reason when one cannot go.
*GradingApi* | [**listVaultMarketGradingOrders**](docs/Api/GradingApi.md#listvaultmarketgradingorders) | **GET** /v1/vault-markets/grading/orders | Your grading submissions, newest first. Filter by status, active, grader, tier and dates; q searches the number, card names and cert numbers.
*GroupBuysApi* | [**createGroupBuy**](docs/Api/GroupBuysApi.md#creategroupbuy) | **POST** /v1/group-buys | Run a group buy on a listing with stock: price tiers by committed quantity, a goal and minimum to proceed, a per-buyer max, a deadline, authorize-now or pay-now-refund-the-difference, a goal-miss policy (cancel, proceed, extend once), visibility, placement and share copy. The original body (tiers by buyer count, minBuyers, days) is still accepted.
*GroupBuysApi* | [**createGroupBuyCancel**](docs/Api/GroupBuysApi.md#creategroupbuycancel) | **POST** /v1/group-buys/{id}/cancel | Cancel a group buy: every hold is released and every charge refunded.
*GroupBuysApi* | [**createGroupBuyClose**](docs/Api/GroupBuysApi.md#creategroupbuyclose) | **POST** /v1/group-buys/{id}/close | Close a group buy now: every buyer pays the price reached (the minimum and goal-miss policy still apply).
*GroupBuysApi* | [**createGroupBuyExtend**](docs/Api/GroupBuysApi.md#creategroupbuyextend) | **POST** /v1/group-buys/{id}/extend | Move the deadline later by N days (authorize-now pools run at most 6 days, pay-now pools 30).
*GroupBuysApi* | [**createGroupBuyMessage**](docs/Api/GroupBuysApi.md#creategroupbuymessage) | **POST** /v1/group-buys/{id}/message | Send a notification to every buyer committed to the group buy.
*GroupBuysApi* | [**getGroupBuy**](docs/Api/GroupBuysApi.md#getgroupbuy) | **GET** /v1/group-buys/{id} | One group buy: progress towards each tier, committed buyers (masked), time left, revenue at the current tier and the activity feed.
*GroupBuysApi* | [**getGroupBuyParticipantsCsv**](docs/Api/GroupBuysApi.md#getgroupbuyparticipantscsv) | **GET** /v1/group-buys/{id}/participants.csv | Every participant of a group buy as CSV: quantity, status, amounts and ship-to.
*GroupBuysApi* | [**listGroupBuys**](docs/Api/GroupBuysApi.md#listgroupbuys) | **GET** /v1/group-buys | Your group buys, open ones first: tiers, buyers joined, the price reached and when it ends.
*GroupBuysApi* | [**updateGroupBuy**](docs/Api/GroupBuysApi.md#updategroupbuy) | **PATCH** /v1/group-buys/{id} | Edit a group buy. Copy, visibility, placement and the per-buyer max change any time; tiers, goal, minimum, payment mode and goal-miss policy only before anyone commits.
*ImportsApi* | [**createImport**](docs/Api/ImportsApi.md#createimport) | **POST** /v1/imports | Start a bulk-import job for an existing platform connection.
*ImportsApi* | [**getImport**](docs/Api/ImportsApi.md#getimport) | **GET** /v1/imports/{id} | Get one import job.
*ImportsApi* | [**getImportSite**](docs/Api/ImportsApi.md#getimportsite) | **GET** /v1/imports/sites | Which sites (eBay marketplaces) an account&#39;s listings are on, with counts — to choose what an import brings in.
*ImportsApi* | [**listImports**](docs/Api/ImportsApi.md#listimports) | **GET** /v1/imports | List bulk-import jobs.
*InboxApi* | [**createInboxAiSuggest**](docs/Api/InboxApi.md#createinboxaisuggest) | **POST** /v1/inbox/ai-suggest | AI reply suggestion for a conversation.
*InboxApi* | [**createInboxCannedResponse**](docs/Api/InboxApi.md#createinboxcannedresponse) | **POST** /v1/inbox/canned-responses | Create a canned response (added to the end of the list).
*InboxApi* | [**createInboxConversationBulk**](docs/Api/InboxApi.md#createinboxconversationbulk) | **POST** /v1/inbox/conversations/bulk | Bulk mark read / mark unread / soft-delete conversations.
*InboxApi* | [**createInboxConversationBulkAiRespond**](docs/Api/InboxApi.md#createinboxconversationbulkairespond) | **POST** /v1/inbox/conversations/bulk-ai-respond | AI reply suggestion for multiple conversations — draft or send.
*InboxApi* | [**createInboxConversationOfferAction**](docs/Api/InboxApi.md#createinboxconversationofferaction) | **POST** /v1/inbox/conversations/{id}/offer-action | Accept / counter / decline an active offer on a conversation.
*InboxApi* | [**createInboxMessageTriage**](docs/Api/InboxApi.md#createinboxmessagetriage) | **POST** /v1/inbox/messages/{id}/triage | Manually re-triage a buyer message.
*InboxApi* | [**createInboxOffer**](docs/Api/InboxApi.md#createinboxoffer) | **POST** /v1/inbox/{id}/offer | Accept, counter, or decline an offer on a conversation.
*InboxApi* | [**createInboxReply**](docs/Api/InboxApi.md#createinboxreply) | **POST** /v1/inbox/{id}/reply | Send a reply to a conversation thread.
*InboxApi* | [**createInboxSendOffer**](docs/Api/InboxApi.md#createinboxsendoffer) | **POST** /v1/inbox/{id}/send-offer | Make the buyer an offer inside a conversation (seller → buyer). Only where the conversation&#39;s canSendOffer is true (Grailed today). &#x60;amount&#x60; is in the listing&#39;s currency, above 0 and below the listing price (whole dollars on Grailed). The offer is in the thread at once as a message with offerAmount + offerStatus, deliveryStatus &#39;sending&#39; until the platform confirms.
*InboxApi* | [**createVideoRequestAnswer**](docs/Api/InboxApi.md#createvideorequestanswer) | **POST** /v1/video-requests/{id}/answer | Answer a video request with a clip you uploaded (POST /v1/video-requests/upload-url, then PUT the file to uploadUrl). The buyer is notified and the clip shows on the listing.
*InboxApi* | [**createVideoRequestDecline**](docs/Api/InboxApi.md#createvideorequestdecline) | **POST** /v1/video-requests/{id}/decline | Decline a video request, with an optional note to the buyer.
*InboxApi* | [**createVideoRequestUploadUrl**](docs/Api/InboxApi.md#createvideorequestuploadurl) | **POST** /v1/video-requests/upload-url | A presigned upload for a video answer: PUT the file to uploadUrl with the same Content-Type and exact Content-Length, then answer with publicUrl.
*InboxApi* | [**deleteInboxCannedResponse**](docs/Api/InboxApi.md#deleteinboxcannedresponse) | **DELETE** /v1/inbox/canned-responses/{id} | Delete a canned response.
*InboxApi* | [**getInbox**](docs/Api/InboxApi.md#getinbox) | **GET** /v1/inbox/{id} | Get one conversation with its messages and the item it is about (itemTitle, itemThumbnail, itemPrice, itemCurrency, itemUrl on the platform, listingId in Crossly, crosslyListingSlug, canSendOffer). An offer made in the thread is a message with offerAmount + offerStatus.
*InboxApi* | [**getInboxCannedResponse**](docs/Api/InboxApi.md#getinboxcannedresponse) | **GET** /v1/inbox/canned-responses | List canned responses in the seller&#39;s order.
*InboxApi* | [**getInboxConversationMessage**](docs/Api/InboxApi.md#getinboxconversationmessage) | **GET** /v1/inbox/conversations/{id}/messages | Paginated messages for a conversation.
*InboxApi* | [**getInboxConversationUnreadCount**](docs/Api/InboxApi.md#getinboxconversationunreadcount) | **GET** /v1/inbox/conversations/unread-count | Unread conversation count (threads only; /v1/inbox/counts adds offers).
*InboxApi* | [**getInboxCount**](docs/Api/InboxApi.md#getinboxcount) | **GET** /v1/inbox/counts | Inbox badges: unread and needs-reply, split into conversations and offers.
*InboxApi* | [**listInbox**](docs/Api/InboxApi.md#listinbox) | **GET** /v1/inbox | List conversations. &#x60;filter&#x60; narrows to the rows GET /v1/inbox/counts counts.
*InboxApi* | [**listVideoRequests**](docs/Api/InboxApi.md#listvideorequests) | **GET** /v1/video-requests | Buyers asking for a video of your items. status: open (default), answered, declined or all.
*InboxApi* | [**updateInboxCannedResponse**](docs/Api/InboxApi.md#updateinboxcannedresponse) | **PUT** /v1/inbox/canned-responses/{id} | Update a canned response.
*InboxApi* | [**updateInboxCannedResponseOrder**](docs/Api/InboxApi.md#updateinboxcannedresponseorder) | **PUT** /v1/inbox/canned-responses/order | Reorder canned responses.
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
*InventoryApi* | [**createInventoryBulkQuantity**](docs/Api/InventoryApi.md#createinventorybulkquantity) | **POST** /v1/inventory/bulk-quantity | Set / add / subtract stock across many items, or set a stock per item; syncs live listings.
*InventoryApi* | [**createInventoryBulkRestore**](docs/Api/InventoryApi.md#createinventorybulkrestore) | **POST** /v1/inventory/bulk-restore | Restore archived inventory items (status returns to active, or sold_out when no stock).
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
*InventoryApi* | [**getAnalyticInventory**](docs/Api/InventoryApi.md#getanalyticinventory) | **GET** /v1/analytics/inventory | Unsold stock: aging buckets with cost, listed value and market value, the 20 listings most in need of attention, shelf value over time, cohort sell-through at the chosen maturity, listed vs sold velocity and data health.
*InventoryApi* | [**getGameEventSummary**](docs/Api/InventoryApi.md#getgameeventsummary) | **GET** /v1/games/events/{eventId}/summary | The results of one of your metaverse events (a Branding event of type scavenger_hunt or pack_break): for a hunt -- status, place, coins and clues, players, finishers, winners (place, masked name, when) and the rewards paid or failed per kind; for a pack break -- status, whether it is live on the stage, spots, spots sold and hits revealed. 404 for an event that is not a World event of yours.
*InventoryApi* | [**getGameHuntBuild**](docs/Api/InventoryApi.md#getgamehuntbuild) | **GET** /v1/games/hunts/{id}/build | One of your scavenger hunts as the in-world builder sees it: place, rules (days, time limit, hints, winners, ordered), rewards, the build document (coins and clue signs with positions), what still blocks publishing, and buildLink -- the Worlds app link that opens the builder. Read-only: coins are placed in the World.
*InventoryApi* | [**getGameLeaderboard**](docs/Api/InventoryApi.md#getgameleaderboard) | **GET** /v1/games/leaderboards | Game leaderboards: for each of Price Guess (wins, then points), scavenger hunts (finished) and speed trades (won), the top ten this week (Monday 00:00 UTC on) under week and of all time under all -- rank, name, named, value and, for Price Guess, score. A name appears only for somebody who chose to be seen by name in Crossly World; everyone else is \&quot;A player\&quot; in their place.
*InventoryApi* | [**getHome**](docs/Api/InventoryApi.md#gethome) | **GET** /v1/homes/{slug} | A home by its address, as you may see it: open homes to anybody, friends-only homes to mutual follows, locked homes to their owner. 404 when you may not enter.
*InventoryApi* | [**getHomeMine**](docs/Api/InventoryApi.md#gethomemine) | **GET** /v1/homes/mine | Your Crossly World home: its address, privacy (open / friends / locked), theme, the room, the layout (each piece with what it shows -- things you no longer own are left out at read time) and the guestbook. Made on first read.
*InventoryApi* | [**getInventory**](docs/Api/InventoryApi.md#getinventory) | **GET** /v1/inventory/{id} | Get one inventory item with platform listings.
*InventoryApi* | [**getInventoryAging**](docs/Api/InventoryApi.md#getinventoryaging) | **GET** /v1/inventory/aging | Unsold stock by days since first listed (unlisted, 0-7, 7-30, 30-90, 90+), each bucket with items, units, known cost (items without a cost counted separately) and listed value.
*InventoryApi* | [**getInventoryCatalogMatch**](docs/Api/InventoryApi.md#getinventorycatalogmatch) | **GET** /v1/inventory/{id}/catalog-matches | One inventory item&#39;s catalog binding (if confirmed) and its pending match suggestions.
*InventoryApi* | [**getInventoryFacet**](docs/Api/InventoryApi.md#getinventoryfacet) | **GET** /v1/inventory/facets | Distinct brands + categories across this user&#39;s inventory.
*InventoryApi* | [**getInventoryLabel**](docs/Api/InventoryApi.md#getinventorylabel) | **GET** /v1/inventory/labels | List every distinct label across this user&#39;s inventory.
*InventoryApi* | [**getInventoryLabelStat**](docs/Api/InventoryApi.md#getinventorylabelstat) | **GET** /v1/inventory/labels/stats | List distinct labels with usage counts + colors.
*InventoryApi* | [**getInventorySellThrough**](docs/Api/InventoryApi.md#getinventorysellthrough) | **GET** /v1/inventory/sell-through | Cohort sell-through: of the items first listed in the window (default 30-60 days ago), the share sold within 30 days of listing, with n, immature items left out, and the change vs the previous window in percentage points (pp).
*InventoryApi* | [**getInventorySkuExist**](docs/Api/InventoryApi.md#getinventoryskuexist) | **GET** /v1/inventory/sku-exists | Check whether a SKU is already in use on this user&#39;s inventory.
*InventoryApi* | [**getInventoryValueHistory**](docs/Api/InventoryApi.md#getinventoryvaluehistory) | **GET** /v1/inventory/value-history | Cost and listed value of unsold stock over time, oldest first (one point per nightly snapshot).
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
*InventoryApi* | [**getWorldPulse**](docs/Api/InventoryApi.md#getworldpulse) | **GET** /v1/world/pulse | Crossly World&#39;s pulse, aggregated with no people in it: the public world shops that made a sale today (slugs only -- never counts, amounts or buyers), the times the world&#39;s shops passed each sales milestone today (each fires a fireworks show), and what Crossly Cares took in this month against the Commons fountain&#39;s mark.
*InventoryApi* | [**getWorldRoomFunnel**](docs/Api/InventoryApi.md#getworldroomfunnel) | **GET** /v1/world/rooms/{sceneId}/funnel | Your room&#39;s funnel over the last &#x60;days&#x60; (1-35, default 30): visitors (people, once a day), looks, items opened, checkouts started from the room, paid sales and revenueCents. Sales count only lines the room itself put in a cart.
*InventoryApi* | [**getWorldShelf**](docs/Api/InventoryApi.md#getworldshelf) | **GET** /v1/world/shelf/{listingSlug} | Where a Crossly listing sits on a shelf in a public room right now (roomSlug, roomName, itemId), or data:null when it is in no room.
*InventoryApi* | [**getWorldSkusCheapest**](docs/Api/InventoryApi.md#getworldskuscheapest) | **GET** /v1/world/skus/{skuId}/cheapest | The cheapest copy of a catalogue piece for sale on Crossly now, matched by the catalogue id (listingSlug, priceCents, and the room and item when it stands on a shelf), or data:null.
*InventoryApi* | [**listCatalogMatches**](docs/Api/InventoryApi.md#listcatalogmatches) | **GET** /v1/catalog-matches | Pending catalog-match suggestions: inventory items that look like a catalog product, awaiting your confirm.
*InventoryApi* | [**listFestivals**](docs/Api/InventoryApi.md#listfestivals) | **GET** /v1/festivals | Live and upcoming Crossly World festivals, soonest first: a weekend when every street wears one decor and the festival quest line (limited pins) counts. meta.live is the festival on now, if any.
*InventoryApi* | [**listGameBreakUpcoming**](docs/Api/InventoryApi.md#listgamebreakupcoming) | **GET** /v1/games/breaks/upcoming | Pack breaks staged on shop stages in Crossly World, live first then soonest: the break, its shop, start time, spots (taken or not, buyer masked), hits revealed so far, and buyUrl -- the break&#39;s page on crossly.net, the only place a spot is bought (null once every spot has sold).
*InventoryApi* | [**listGameHuntMine**](docs/Api/InventoryApi.md#listgamehuntmine) | **GET** /v1/games/hunts/mine | Your scavenger hunts (spec WD6: made from Branding events, built in Crossly World), newest first: title, place slug, the event it belongs to (eventId), your discount code if it rewards one, whether it is a draft (not yet built and published), live or ended, its coins, and how many people finished.
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
*ListingsApi* | [**createEvent**](docs/Api/ListingsApi.md#createevent) | **POST** /v1/events | Create an event. A draft unless publish:true. Linked listings, the live show, the drop and the discount code must all be yours.
*ListingsApi* | [**createEventPublish**](docs/Api/ListingsApi.md#createeventpublish) | **POST** /v1/events/{id}/publish | Publish an event: its page goes live, and with notifyFollowers your followers are told once.
*ListingsApi* | [**createListing**](docs/Api/ListingsApi.md#createlisting) | **POST** /v1/listings | Create a listing and fan out crosspost jobs across platforms.
*ListingsApi* | [**createListingBulk**](docs/Api/ListingsApi.md#createlistingbulk) | **POST** /v1/listings/bulk | Create up to 50 listings in one call, with a result per item.
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
*ListingsApi* | [**createListingTagBulk**](docs/Api/ListingsApi.md#createlistingtagbulk) | **POST** /v1/listings/tags/bulk | Add and/or remove tags on many listings (yours only; max 30 tags a listing, 40 chars a tag). &#x60;dryRun&#x60; reports what would change.
*ListingsApi* | [**createListingTagRename**](docs/Api/ListingsApi.md#createlistingtagrename) | **POST** /v1/listings/tags/rename | Rename a tag on every listing; merges into &#x60;to&#x60; when it already exists.
*ListingsApi* | [**createLiveStream**](docs/Api/ListingsApi.md#createlivestream) | **POST** /v1/live-streams | Schedule a live show: title, start time, optional cover, category and the listings to feature (becomes the lineup, in order).
*ListingsApi* | [**createLiveStreamConnection**](docs/Api/ListingsApi.md#createlivestreamconnection) | **POST** /v1/live-streams/{id}/connection | The show’s video connection, minted on first call and identical after: RTMP(S) server + stream key, SRT URL, WHIP URL for browser publishing (null where the ingest has none) and the HLS playback URL. configured&#x3D;false (with a reason) when the deployment has no streaming provider.
*ListingsApi* | [**createLiveStreamConnectionRotate**](docs/Api/ListingsApi.md#createlivestreamconnectionrotate) | **POST** /v1/live-streams/{id}/connection/rotate | Replace the show’s stream key (e.g. after it was shown on screen). Refused while the show is live.
*ListingsApi* | [**createLiveStreamEnd**](docs/Api/ListingsApi.md#createlivestreamend) | **POST** /v1/live-streams/{id}/end | End the show. Idempotent.
*ListingsApi* | [**createLiveStreamPinLaunch**](docs/Api/ListingsApi.md#createlivestreampinlaunch) | **POST** /v1/live-streams/{id}/pin-launch | Pin one of your live NFT launches on your live show; viewers mint it from the stream. Returns &#x60;{ ok }&#x60;.
*ListingsApi* | [**createLiveStreamStart**](docs/Api/ListingsApi.md#createlivestreamstart) | **POST** /v1/live-streams/{id}/start | Go live: the show’s status becomes live and followers are notified once. Idempotent while live; refused once ended.
*ListingsApi* | [**createPassport**](docs/Api/ListingsApi.md#createpassport) | **POST** /v1/passports | Register a product passport for a Crossly listing or an inventory item you sell, optionally bound to an NFC tag UID (hex). Active at once. Returns the URL to write to the NFC tag or print as a QR; ownership then follows the item’s sales. For several items with photos and labels, use the drafts flow (POST /passports/drafts).
*ListingsApi* | [**createPassportDraft**](docs/Api/ListingsApi.md#createpassportdraft) | **POST** /v1/passports/drafts | Start a passport draft for up to 100 inventory items (or Crossly listings): one draft passport per item with its code reserved. Items whose every unit already has a passport come back in skipped.
*ListingsApi* | [**createPassportDraftActivate**](docs/Api/ListingsApi.md#createpassportdraftactivate) | **POST** /v1/passports/drafts/{id}/activate | Activate every passport of a draft: their pages open for anyone who scans the tag or QR. Closes the draft’s capture link.
*ListingsApi* | [**createPassportDraftCaptureLink**](docs/Api/ListingsApi.md#createpassportdraftcapturelink) | **POST** /v1/passports/drafts/{id}/capture-link | A link (and its QR as SVG) any phone opens with no sign-in to add photos, serials and NFC tags to this draft. Open 30 minutes after its last use, 4 hours at most; minting a new one closes the old.
*ListingsApi* | [**createPassportPrint**](docs/Api/ListingsApi.md#createpassportprint) | **POST** /v1/passports/print | Print passport labels: sent to your printer agent (the Crossly desktop app includes one) when it is online and prints the template, else a signed PDF link with the reason. Templates: sticker-2in, sticker-1in, label-4x6, hang-tag, sheet-letter, sheet-a4, transfer-card.
*ListingsApi* | [**createPassportRevoke**](docs/Api/ListingsApi.md#createpassportrevoke) | **POST** /v1/passports/{id}/revoke | Revoke a passport (a lost or misprinted tag). Refused once the item has sold — the passport is then part of its history.
*ListingsApi* | [**createPassportTag**](docs/Api/ListingsApi.md#createpassporttag) | **POST** /v1/passports/{id}/tag | Bind (or re-bind) a passport to the NFC tag you wrote its nfcUrl to: the tag UID (hex), and whether you locked the tag read-only. Refused once the item has sold, for a locked tag, or a tag already on another item.
*ListingsApi* | [**createRentalBulkRentable**](docs/Api/ListingsApi.md#createrentalbulkrentable) | **POST** /v1/rentals/bulk-rentable | Make up to 200 Crossly listings rentable with the same options (a day rate, or a share of each price).
*ListingsApi* | [**createShopLimitRequest**](docs/Api/ListingsApi.md#createshoplimitrequest) | **POST** /v1/shop-limits/requests | Ask for a higher Crossly Shop selling limit.
*ListingsApi* | [**createStory**](docs/Api/ListingsApi.md#createstory) | **POST** /v1/stories | Share a story: 1–10 slides played in order. Each slide is a photo or video plus optional overlays (positions are fractions of the 9:16 frame). Listing stickers must be your own Crossly listings and also tag the slide; @mentions must be real shops. audience: everyone | followers; expiresInHours: 6, 12, 24 or 48.
*ListingsApi* | [**createVariationGroup**](docs/Api/ListingsApi.md#createvariationgroup) | **POST** /v1/variation-groups | Group listings you already have: a variation (one product, an axis such as Size) or a purchase-rule group (\&quot;buy any 3\&quot;).
*ListingsApi* | [**createVariationGroupGenerate**](docs/Api/ListingsApi.md#createvariationgroupgenerate) | **POST** /v1/variation-groups/generate | Turn one listing into a variation group: each new value becomes its own listing (a copy, with its own price, quantity and SKU) and all of them one group.
*ListingsApi* | [**createVariationGroupGenerateMatrix**](docs/Api/ListingsApi.md#createvariationgroupgeneratematrix) | **POST** /v1/variation-groups/generate-matrix | Turn one listing into a variation group over up to three axes (Size × Color): each other cell is a listing you already have (listingId) or a new copy of this one with its own price, quantity and SKU.
*ListingsApi* | [**createVariationGroupPublish**](docs/Api/ListingsApi.md#createvariationgrouppublish) | **POST** /v1/variation-groups/{id}/publish | Publish a variation group per platform: one listing with a variation picker where the platform supports it (eBay, Shopify, Etsy), one per option elsewhere. Each platform reports its own outcome.
*ListingsApi* | [**createVideoStudioFinalize**](docs/Api/ListingsApi.md#createvideostudiofinalize) | **POST** /v1/video-studio/finalize | Check an uploaded listing video (exists, MP4, size) and, with listingId, set it as that listing&#39;s video.
*ListingsApi* | [**createVideoStudioUploadUrl**](docs/Api/ListingsApi.md#createvideostudiouploadurl) | **POST** /v1/video-studio/upload-url | Presign an R2 PUT (video/mp4, 15 min) for a listing video; finalize it after the upload.
*ListingsApi* | [**deleteEvent**](docs/Api/ListingsApi.md#deleteevent) | **DELETE** /v1/events/{id} | Delete a draft, or cancel a published event (its page then says it was called off).
*ListingsApi* | [**deleteListing**](docs/Api/ListingsApi.md#deletelisting) | **DELETE** /v1/listings/{id} | Delist a listing (optionally narrowed to specific platforms via ?platforms&#x3D;).
*ListingsApi* | [**deleteListingTag**](docs/Api/ListingsApi.md#deletelistingtag) | **DELETE** /v1/listings/tags/{tag} | Remove a tag (any case) from every listing.
*ListingsApi* | [**deleteLiveStreamPinLaunch**](docs/Api/ListingsApi.md#deletelivestreampinlaunch) | **DELETE** /v1/live-streams/{id}/pin-launch | Unpin the launch from your live show. Returns &#x60;{ ok }&#x60;.
*ListingsApi* | [**deleteRentalOffer**](docs/Api/ListingsApi.md#deleterentaloffer) | **DELETE** /v1/rentals/offers/{platformListingId} | Stop offering a listing for rent (existing bookings stand).
*ListingsApi* | [**deleteStory**](docs/Api/ListingsApi.md#deletestory) | **DELETE** /v1/stories/{id} | Take one story slide down before it expires.
*ListingsApi* | [**deleteVariationGroup**](docs/Api/ListingsApi.md#deletevariationgroup) | **DELETE** /v1/variation-groups/{id} | Dissolve a group. Its options stay as ordinary listings.
*ListingsApi* | [**getEvent**](docs/Api/ListingsApi.md#getevent) | **GET** /v1/events/{id} | One of your events.
*ListingsApi* | [**getEventAnalytic**](docs/Api/ListingsApi.md#geteventanalytic) | **GET** /v1/events/{id}/analytics | Views, RSVPs, and what the linked listings sold on Crossly during the event (orders, units, revenue in cents).
*ListingsApi* | [**getListing**](docs/Api/ListingsApi.md#getlisting) | **GET** /v1/listings/{id} | Get one listing with its platform rows.
*ListingsApi* | [**getListingFacet**](docs/Api/ListingsApi.md#getlistingfacet) | **GET** /v1/listings/facets | Distinct brands + categories across listings + inventory.
*ListingsApi* | [**getListingSkuExist**](docs/Api/ListingsApi.md#getlistingskuexist) | **GET** /v1/listings/sku-exists | Check whether a SKU is already used by one of this user&#39;s items.
*ListingsApi* | [**getLiveStreamRecap**](docs/Api/ListingsApi.md#getlivestreamrecap) | **GET** /v1/live-streams/{id}/recap | The show’s numbers: duration, peak viewers, items sold and gross, tips, chat messages, auctions run, lineup size and the replay URL.
*ListingsApi* | [**getPassport**](docs/Api/ListingsApi.md#getpassport) | **GET** /v1/passports/{id} | One passport: its item and every listing of it, the event history (created, printed, tag bound, transferred, claimed…), scans per day for 30 days, custody, grading.
*ListingsApi* | [**getPassportDraft**](docs/Api/ListingsApi.md#getpassportdraft) | **GET** /v1/passports/drafts/{id} | A passport draft and its passports (photos, serial, tag and label state of each).
*ListingsApi* | [**getPassportPrint**](docs/Api/ListingsApi.md#getpassportprint) | **GET** /v1/passports/print/{jobId} | Where a passport print job sent to your agent is: queued, sent, done, failed, expired or duplicate.
*ListingsApi* | [**getPricingSetting**](docs/Api/ListingsApi.md#getpricingsetting) | **GET** /v1/pricing/settings | Selling options: own-price match (Crossly sells your items at your own lower price for the same item on another marketplace; dollar-priced copies only) and layaway (buyers may put items on layaway). Both on by default.
*ListingsApi* | [**getPricingSoldComp**](docs/Api/ListingsApi.md#getpricingsoldcomp) | **GET** /v1/pricing/sold-comps | What one catalog product (market_sku_id, in one condition) actually sold for across Crossly in the last 180 days: median, p25/p75, p10/p90 (null under 10 sales), sale count, last sold, and days from listing to sale (median, p25, p75). Pass marketSkuId (+ optional condition) or one of your listingIds. comps is null until there are 3+ sales from 2+ sellers; holdCode says why there is nothing (no_market_sku, mixed_inventory, below_privacy_floor) — the same reasons a sold_median reprice rule holds.
*ListingsApi* | [**getRentalSetting**](docs/Api/ListingsApi.md#getrentalsetting) | **GET** /v1/rentals/settings | The store’s rental defaults (every item inherits them) and its payout timing.
*ListingsApi* | [**getShopLimit**](docs/Api/ListingsApi.md#getshoplimit) | **GET** /v1/shop-limits | Your Crossly Shop selling limit: live listings and listed value, used of limit, per store, and the next step.
*ListingsApi* | [**listEventAttendees**](docs/Api/ListingsApi.md#listeventattendees) | **GET** /v1/events/{id}/attendees | Who RSVPd: display name, avatar, going or interested, and when. No contact details.
*ListingsApi* | [**listEvents**](docs/Api/ListingsApi.md#listevents) | **GET** /v1/events | Your events (launches, sales, live shows, drops, meetups, pop-ups, workshops, parties): schedule, status, phase, and going/interested counts.
*ListingsApi* | [**listListingAiDetections**](docs/Api/ListingsApi.md#listlistingaidetections) | **GET** /v1/listings/{id}/ai-detections | Crossly&#39;s AI-image detections for a listing&#39;s photos.
*ListingsApi* | [**listListingDiscrepancies**](docs/Api/ListingsApi.md#listlistingdiscrepancies) | **GET** /v1/listings/{id}/discrepancies | List detected marketplace-drift discrepancies for a listing.
*ListingsApi* | [**listListingIds**](docs/Api/ListingsApi.md#listlistingids) | **GET** /v1/listings/ids | Filter listings → return matching id list (no pagination).
*ListingsApi* | [**listListingTagSuggest**](docs/Api/ListingsApi.md#listlistingtagsuggest) | **GET** /v1/listings/tags/suggest | Deterministic tag suggestions for one listing (brand, category, size, condition, colors, style tags, era words in the title); &#x60;known&#x60; &#x3D; you already use the tag.
*ListingsApi* | [**listListingTags**](docs/Api/ListingsApi.md#listlistingtags) | **GET** /v1/listings/tags | Your listing tags with how many listings carry each, most used first (case-insensitive; &#x60;q&#x60; filters).
*ListingsApi* | [**listListings**](docs/Api/ListingsApi.md#listlistings) | **GET** /v1/listings | List active platform listings.
*ListingsApi* | [**listLiveStreams**](docs/Api/ListingsApi.md#listlivestreams) | **GET** /v1/live-streams | Your live shows, newest scheduled first: status, cover, category, connection method and peak viewers.
*ListingsApi* | [**listPassportEvents**](docs/Api/ListingsApi.md#listpassportevents) | **GET** /v1/passports/{id}/events | A passport’s event history, newest first (never a buyer or a price).
*ListingsApi* | [**listPassportPrintTargets**](docs/Api/ListingsApi.md#listpassportprinttargets) | **GET** /v1/passports/print-targets | Your printer agents (online, printers, default) and the passport label templates each can print.
*ListingsApi* | [**listPassports**](docs/Api/ListingsApi.md#listpassports) | **GET** /v1/passports | Product passports you registered (optionally for one Crossly listing): the code and URL each tag carries.
*ListingsApi* | [**listRentalOffers**](docs/Api/ListingsApi.md#listrentaloffers) | **GET** /v1/rentals/offers | What you offer for rent.
*ListingsApi* | [**listStories**](docs/Api/ListingsApi.md#liststories) | **GET** /v1/stories | Your active story slides (newest run first, each run in play order), with their overlays: text, listing stickers, @mentions, links, emoji and drawing.
*ListingsApi* | [**updateEvent**](docs/Api/ListingsApi.md#updateevent) | **PATCH** /v1/events/{id} | Edit an event. Omitted fields are unchanged; null clears.
*ListingsApi* | [**updateHotspot**](docs/Api/ListingsApi.md#updatehotspot) | **PUT** /v1/hotspots | Tag your listings at points on a story or lookbook photo (shop the look). Replaces that photo’s tags; at most 12.
*ListingsApi* | [**updateListing**](docs/Api/ListingsApi.md#updatelisting) | **PATCH** /v1/listings/{id} | Edit a listing and fan out update jobs to existing platform listings.
*ListingsApi* | [**updateListingCustom**](docs/Api/ListingsApi.md#updatelistingcustom) | **PUT** /v1/listings/{id}/customs | Set a listing’s customs: HS code (6–10 digits), country of origin, and countries this item must not ship to on Crossly. Omitted fields are left alone; null (or [] for restrictedCountries) clears.
*ListingsApi* | [**updateListingPlatformListing**](docs/Api/ListingsApi.md#updatelistingplatformlisting) | **PATCH** /v1/listings/{id}/platform-listings/{plId} | Set one marketplace copy&#39;s price (e.g. the ebay.com copy of a listing also live on ebay.co.uk), in that copy&#39;s own currency.
*ListingsApi* | [**updateLiveStream**](docs/Api/ListingsApi.md#updatelivestream) | **PATCH** /v1/live-streams/{id} | Edit a show that has not ended: title, description, cover, category, start time (not once live) or connection method (browser | phone | encoder).
*ListingsApi* | [**updateLiveStreamLineup**](docs/Api/ListingsApi.md#updatelivestreamlineup) | **PUT** /v1/live-streams/{id}/lineup | Set a live show’s lineup: your Crossly listings, in the order you will sell them. Buyers see it before they join; a sale of a lineup item while the show is live is recorded at its replay moment.
*ListingsApi* | [**updatePassport**](docs/Api/ListingsApi.md#updatepassport) | **PATCH** /v1/passports/{id} | Change what a passport says (title, condition, maker, year, materials, notes) or add photo URLs (photos append: a passport keeps the ones it was registered with).
*ListingsApi* | [**updatePassportDraft**](docs/Api/ListingsApi.md#updatepassportdraft) | **PATCH** /v1/passports/drafts/{id} | Move a draft to a step, pick its label template, add items or remove draft passports.
*ListingsApi* | [**updatePricingSetting**](docs/Api/ListingsApi.md#updatepricingsetting) | **PUT** /v1/pricing/settings | Turn own-price match and/or layaway on or off for every one of your stores. One store: PUT /v1/storefronts/{id}/settings.
*ListingsApi* | [**updateRentalOffer**](docs/Api/ListingsApi.md#updaterentaloffer) | **PUT** /v1/rentals/offers/{platformListingId} | Offer a Crossly listing for rent: day rate, optional week rate, deposit, min/max days, turnaround buffer, rent-only (off sale while offered), seller approval, unavailable date ranges (blackoutRanges, inclusive YYYY-MM-DD) and a return policy. Keeps the listing’s own rental terms in step. Needs a ship-from address.
*ListingsApi* | [**updateRentalSetting**](docs/Api/ListingsApi.md#updaterentalsetting) | **PUT** /v1/rentals/settings | Set the store’s rental defaults and payout timing (on_start needs 3 rentals that came back).
*ListingsApi* | [**updateVariationGroup**](docs/Api/ListingsApi.md#updatevariationgroup) | **PATCH** /v1/variation-groups/{id} | Retitle a group, rename its axis, or change a group&#39;s purchase rule (written into every member&#39;s description).
*LookbooksApi* | [**createLookbook**](docs/Api/LookbooksApi.md#createlookbook) | **POST** /v1/lookbooks | Create a lookbook. Pass templateId (classic, editorial, hero, magazine, drop, sale, postcard) to start it from a template styled with your storefront brand kit.
*LookbooksApi* | [**createLookbookCampaign**](docs/Api/LookbooksApi.md#createlookbookcampaign) | **POST** /v1/lookbook-campaigns | Email a lookbook to customers now or at scheduledAt. Audience kind subscribers | all | repeat | segment {filters} | handles {handles}; only people with marketing consent who have not unsubscribed receive it.
*LookbooksApi* | [**createLookbookCampaignCancel**](docs/Api/LookbooksApi.md#createlookbookcampaigncancel) | **POST** /v1/lookbook-campaigns/{id}/cancel | Cancel a scheduled campaign or stop one that is sending (emails already sent stay sent).
*LookbooksApi* | [**createLookbookCampaignPreview**](docs/Api/LookbooksApi.md#createlookbookcampaignpreview) | **POST** /v1/lookbook-campaigns/preview | Preview a lookbook email campaign without sending: how many of the audience can receive it (opted in, not suppressed) and the rendered HTML/text.
*LookbooksApi* | [**createLookbookShareLink**](docs/Api/LookbooksApi.md#createlookbooksharelink) | **POST** /v1/lookbooks/{id}/share-links | Make a share link for someone without a Crossly login: role view, comment or edit; expires after ttlHours (1 to 2160, default 168). The url is shown once.
*LookbooksApi* | [**createPrintMailJob**](docs/Api/LookbooksApi.md#createprintmailjob) | **POST** /v1/print-mail/jobs | Draft a printed lookbook mailing (beta): renders the print-ready PDF with bleed and estimates the cost from your per-piece price. Mails nothing until confirmed.
*LookbooksApi* | [**createPrintMailJobConfirm**](docs/Api/LookbooksApi.md#createprintmailjobconfirm) | **POST** /v1/print-mail/jobs/{id}/confirm | Confirm a drafted print job: acknowledgeCharges must be true and pieces must equal the job&#39;s piece count. Your Lob or PostGrid account is billed.
*LookbooksApi* | [**getLookbookCampaign**](docs/Api/LookbooksApi.md#getlookbookcampaign) | **GET** /v1/lookbook-campaigns/{id} | One lookbook campaign and its counts.
*LookbooksApi* | [**getLookbookDesign**](docs/Api/LookbooksApi.md#getlookbookdesign) | **GET** /v1/lookbooks/{id}/design | A lookbook design document (pages of text, photo, listing, shape and sticker elements) with live listing title/price/photo, your brand kit and rendered page images.
*LookbooksApi* | [**listEmailProviders**](docs/Api/LookbooksApi.md#listemailproviders) | **GET** /v1/email-providers | Your BYOK email providers (SMTP, Mailgun, SendGrid, SES, Resend, Postmark, Brevo, Mailjet, SparkPost, MailerSend, Mandrill, Plunk and more): label, from address, default, last test. Secrets are never returned.
*LookbooksApi* | [**listLookbookCampaignRecipients**](docs/Api/LookbooksApi.md#listlookbookcampaignrecipients) | **GET** /v1/lookbook-campaigns/{id}/recipients | Per-recipient results for a campaign: status (queued, sent, failed, skipped + reason), provider message id, opens, clicks, bounce, unsubscribe.
*LookbooksApi* | [**listLookbookCampaigns**](docs/Api/LookbooksApi.md#listlookbookcampaigns) | **GET** /v1/lookbook-campaigns | Your lookbook campaigns, newest first, with sent / failed / skipped / opened / clicked / bounced / unsubscribed counts.
*LookbooksApi* | [**listLookbooks**](docs/Api/LookbooksApi.md#listlookbooks) | **GET** /v1/lookbooks | Your lookbooks: id, slug, title, published, current design version and item count.
*LookbooksApi* | [**listPrintMailJobs**](docs/Api/LookbooksApi.md#listprintmailjobs) | **GET** /v1/print-mail/jobs | Print-and-mail jobs (beta): provider, format, pieces, estimate, status and per-piece results.
*LookbooksApi* | [**updateLookbookDesign**](docs/Api/LookbooksApi.md#updatelookbookdesign) | **PUT** /v1/lookbooks/{id}/design | Save a new design version. Images must already be on the Crossly CDN; listings must be your own Crossly listings. Pass baseVersion to get a 409 instead of overwriting a newer save.
*MagicApi* | [**createMagicAutoDecisionUndo**](docs/Api/MagicApi.md#createmagicautodecisionundo) | **POST** /v1/magic/auto/decisions/{decisionId}/undo | Undo an automated Magic List decision, deleting its unpublished draft.
*MagicApi* | [**createMagicAutoItem**](docs/Api/MagicApi.md#createmagicautoitem) | **POST** /v1/magic/auto/items | Scan one item and match it automatically (drafts only, never publishes).
*MagicApi* | [**createMagicAutoRun**](docs/Api/MagicApi.md#createmagicautorun) | **POST** /v1/magic/auto/runs/{runId} | Score a Magic List run automatically; a confident match in auto mode becomes a draft.
*MagicApi* | [**createMagicAutoRunSwipe**](docs/Api/MagicApi.md#createmagicautorunswipe) | **POST** /v1/magic/auto/runs/{runId}/swipes | Record a seller swipe session (kept and rejected match keys) for a Magic List run.
*MagicApi* | [**createMagicScan**](docs/Api/MagicApi.md#createmagicscan) | **POST** /v1/magic/scan | Run a Magic List image scan.
*MagicApi* | [**createMagicScanSynthesize**](docs/Api/MagicApi.md#createmagicscansynthesize) | **POST** /v1/magic/scan/{runId}/synthesize | Synthesize a draft from confirmed matches.
*MagicApi* | [**getMagicAutoSetting**](docs/Api/MagicApi.md#getmagicautosetting) | **GET** /v1/magic/auto/settings | The seller’s Magic List automated-matching mode.
*MagicApi* | [**getMagicDraft**](docs/Api/MagicApi.md#getmagicdraft) | **GET** /v1/magic/drafts/{draftId} | Get a synthesized Magic List draft.
*MagicApi* | [**listMagicAutoRunDecisions**](docs/Api/MagicApi.md#listmagicautorundecisions) | **GET** /v1/magic/auto/runs/{runId}/decisions | Every match decision round (automated and seller) for a Magic List run.
*MagicApi* | [**listMagicRecent**](docs/Api/MagicApi.md#listmagicrecent) | **GET** /v1/magic/recent | Recent Magic List scans for this seller.
*MagicApi* | [**updateMagicAutoSetting**](docs/Api/MagicApi.md#updatemagicautosetting) | **PUT** /v1/magic/auto/settings | Set the Magic List automated-matching mode (off | auto | review_all).
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
*OrdersApi* | [**createOrderCancel**](docs/Api/OrdersApi.md#createordercancel) | **POST** /v1/orders/{id}/cancel | Cancel an order before it ships. Crossly-marketplace orders refund the buyer (also needs orders:refund) and restock; crossposted orders go to the marketplace, or fail not_supported_on_platform (recordOnly: true records a cancel made on the marketplace). Fires order.cancelled.
*OrdersApi* | [**createOrderCorrectTracking**](docs/Api/OrdersApi.md#createordercorrecttracking) | **POST** /v1/orders/{id}/correct-tracking | Correct a wrong tracking number the marketplace already holds.
*OrdersApi* | [**createOrderDispute**](docs/Api/OrdersApi.md#createorderdispute) | **POST** /v1/orders/{id}/dispute | Flag an order as disputed.
*OrdersApi* | [**createOrderImport**](docs/Api/OrdersApi.md#createorderimport) | **POST** /v1/orders/import | Manually (re-)pull one or more connected platforms&#39; order history for a day-window.
*OrdersApi* | [**createOrderLabel**](docs/Api/OrdersApi.md#createorderlabel) | **POST** /v1/orders/{id}/label | Purchase a Crossly Shipping label. An order that already has a label answers 409 label_exists unless allowSecondLabel is true.
*OrdersApi* | [**createOrderLabelVoid**](docs/Api/OrdersApi.md#createorderlabelvoid) | **POST** /v1/orders/{id}/label/void | Void a Crossly Shipping label and refund it to the shipping wallet.
*OrdersApi* | [**createOrderLinkListing**](docs/Api/OrdersApi.md#createorderlinklisting) | **POST** /v1/orders/{id}/link-listing | Link an unmatched sale to one of your listings (marks it sold, delists it elsewhere).
*OrdersApi* | [**createOrderMessage**](docs/Api/OrdersApi.md#createordermessage) | **POST** /v1/orders/{id}/message | Message the order&#39;s buyer on the marketplace.
*OrdersApi* | [**createOrderOrderChat**](docs/Api/OrdersApi.md#createorderorderchat) | **POST** /v1/orders/{id}/order-chat | Send a message to the order&#39;s buyer chat on the marketplace. Mirrored into the Crossly inbox.
*OrdersApi* | [**createOrderPickup**](docs/Api/OrdersApi.md#createorderpickup) | **POST** /v1/orders/pickups | Book a carrier pickup for labelled orders (one carrier per pickup; window at least an hour, up to 14 days ahead).
*OrdersApi* | [**createOrderPickupLabel**](docs/Api/OrdersApi.md#createorderpickuplabel) | **POST** /v1/orders/{id}/pickup-label | Buy the carrier label for a Crossly order the buyer collects from a pickup point (debits your shipping wallet). 402 when the wallet is short. An order that already has a label answers 409 label_exists unless allowSecondLabel is true.
*OrdersApi* | [**createOrderPlatformLabelPackage**](docs/Api/OrdersApi.md#createorderplatformlabelpackage) | **POST** /v1/orders/{id}/platform-label/package | Save the package (weight oz, box inches) the marketplace prices the label from.
*OrdersApi* | [**createOrderPlatformLabelPackageQuote**](docs/Api/OrdersApi.md#createorderplatformlabelpackagequote) | **POST** /v1/orders/{id}/platform-label/package/quote | Quote what a change to the marketplace shipment&#39;s package costs (cents).
*OrdersApi* | [**createOrderPlatformLabelPull**](docs/Api/OrdersApi.md#createorderplatformlabelpull) | **POST** /v1/orders/{id}/platform-label/pull | Pull the marketplace&#39;s prepaid label into Crossly (every platform with a label descriptor).
*OrdersApi* | [**createOrderPlatformLabelPurchase**](docs/Api/OrdersApi.md#createorderplatformlabelpurchase) | **POST** /v1/orders/{id}/platform-label/purchase | Buy a replacement / extra marketplace label, or have the marketplace generate it, and record it.
*OrdersApi* | [**createOrderPlatformLabelQuote**](docs/Api/OrdersApi.md#createorderplatformlabelquote) | **POST** /v1/orders/{id}/platform-label/quote | Quote what buying a marketplace label costs, before you are charged.
*OrdersApi* | [**createOrderPullPlatformLabel**](docs/Api/OrdersApi.md#createorderpullplatformlabel) | **POST** /v1/orders/{id}/pull-platform-label | Pull a pre-paid label from cookie platforms (Poshmark/Mercari).
*OrdersApi* | [**createOrderRate**](docs/Api/OrdersApi.md#createorderrate) | **POST** /v1/orders/{id}/rates | Crossly Shipping rate quote for an order.
*OrdersApi* | [**createOrderRefund**](docs/Api/OrdersApi.md#createorderrefund) | **POST** /v1/orders/{id}/refund | DEPRECATED: use POST /v1/orders/{id}/refunds. Full or partial refund (amount in dollars). Same idempotency and cap as /refunds: the same request twice refunds once (Idempotency-Key, else the body), never past what the buyer paid.
*OrdersApi* | [**createOrderRefundById**](docs/Api/OrdersApi.md#createorderrefundbyid) | **POST** /v1/orders/{id}/refunds | Refund an order, in full or in part. &#x60;amount&#x60; is dollars; omit it for everything left (or the line items&#39; value). Crossly-marketplace orders refund the buyer&#39;s card; crossposted orders refund through the marketplace, or fail not_supported_on_platform. Never refunds past the order (refund_exceeds_remaining). The same request twice refunds once: send an Idempotency-Key (without one, the body is the key). A partial refund keeps the order&#39;s status. What the platform takes (full/partial, its own reason keys, a comment) is GET /v1/orders/{id}/refund-options; a request outside it fails partial_refund_unsupported, invalid_refund_reason or refund_exceeds_item_amount. Fires order.refunded.
*OrdersApi* | [**createOrderRefundResolve**](docs/Api/OrdersApi.md#createorderrefundresolve) | **POST** /v1/orders/{id}/refunds/{refundId}/resolve | Settle an &#x60;unverified&#x60; refund (one Crossly could not confirm with the marketplace after its request was interrupted) once you have checked the marketplace: succeeded (with the amount actually refunded, dollars) or failed (nothing moved; the same Idempotency-Key can then try again). Crossly-marketplace refunds are confirmed by support instead.
*OrdersApi* | [**createOrderScanForm**](docs/Api/OrdersApi.md#createorderscanform) | **POST** /v1/orders/scan-forms | Create SCAN forms (one per carrier account and ship-from address) for labels the carrier has not scanned yet.
*OrdersApi* | [**createOrderTracking**](docs/Api/OrdersApi.md#createordertracking) | **POST** /v1/orders/{id}/tracking | Submit tracking number + carrier and notify the platform.
*OrdersApi* | [**createOrderWhatnotLabel**](docs/Api/OrdersApi.md#createorderwhatnotlabel) | **POST** /v1/orders/{id}/whatnot/label | Generate the Whatnot shipping label and record it on the order.
*OrdersApi* | [**createOrderWhatnotPackage**](docs/Api/OrdersApi.md#createorderwhatnotpackage) | **POST** /v1/orders/{id}/whatnot/package | Save a Whatnot shipment package (weight oz, box inches).
*OrdersApi* | [**createOrderWhatnotPackageQuote**](docs/Api/OrdersApi.md#createorderwhatnotpackagequote) | **POST** /v1/orders/{id}/whatnot/package/quote | Quote what a Whatnot package change costs (cents).
*OrdersApi* | [**createRentalApprove**](docs/Api/OrdersApi.md#createrentalapprove) | **POST** /v1/rentals/{id}/approve | Approve a requested rental (offers with requireApproval): the renter’s held card is charged.
*OrdersApi* | [**createRentalCancel**](docs/Api/OrdersApi.md#createrentalcancel) | **POST** /v1/rentals/{id}/cancel | Cancel a booked rental that has not shipped: the renter is refunded in full.
*OrdersApi* | [**createRentalClaim**](docs/Api/OrdersApi.md#createrentalclaim) | **POST** /v1/rentals/{id}/claim | Claim part or all of the deposit (cents, a note, photo URLs): within 3 days of the return, or 14 days after the end if it never came back.
*OrdersApi* | [**createRentalDecline**](docs/Api/OrdersApi.md#createrentaldecline) | **POST** /v1/rentals/{id}/decline | Decline a requested rental: the hold on the renter’s card is released.
*OrdersApi* | [**createRentalDelivered**](docs/Api/OrdersApi.md#createrentaldelivered) | **POST** /v1/rentals/{id}/delivered | Mark a rental delivered to the renter.
*OrdersApi* | [**createRentalExtensionDecide**](docs/Api/OrdersApi.md#createrentalextensiondecide) | **POST** /v1/rentals/{id}/extensions/{extensionId}/decide | Approve or decline a renter’s request for more days.
*OrdersApi* | [**createRentalInspect**](docs/Api/OrdersApi.md#createrentalinspect) | **POST** /v1/rentals/{id}/inspect | Record the return inspection: the checklist, photos, and optionally release the deposit.
*OrdersApi* | [**createRentalLabel**](docs/Api/OrdersApi.md#createrentallabel) | **POST** /v1/rentals/{id}/labels | Buy both labels for a booked rental: outbound to the renter, and the return label they use.
*OrdersApi* | [**createRentalNotReturned**](docs/Api/OrdersApi.md#createrentalnotreturned) | **POST** /v1/rentals/{id}/not-returned | Report a rental not returned (14 days past due): the deposit goes to you.
*OrdersApi* | [**createRentalReleaseDeposit**](docs/Api/OrdersApi.md#createrentalreleasedeposit) | **POST** /v1/rentals/{id}/release-deposit | Release the deposit now, without a claim.
*OrdersApi* | [**createRentalReturned**](docs/Api/OrdersApi.md#createrentalreturned) | **POST** /v1/rentals/{id}/returned | Mark a rental back with you. You then have 3 days to claim damage before the deposit goes back.
*OrdersApi* | [**createRentalShipped**](docs/Api/OrdersApi.md#createrentalshipped) | **POST** /v1/rentals/{id}/shipped | Mark a booked rental shipped, with at least 2 photos of its condition as it leaves (URLs you uploaded) — the evidence any later claim is judged against.
*OrdersApi* | [**getOrder**](docs/Api/OrdersApi.md#getorder) | **GET** /v1/orders/{id} | Get one order, with its sale price, fees, SKU and line items.
*OrdersApi* | [**getOrderCancelEligibility**](docs/Api/OrdersApi.md#getordercanceleligibility) | **GET** /v1/orders/{id}/cancel-eligibility | Whether this order can be cancelled, and which reason codes the marketplace accepts.
*OrdersApi* | [**getOrderCount**](docs/Api/OrdersApi.md#getordercount) | **GET** /v1/orders/counts | Tab badge counts by status.
*OrdersApi* | [**getOrderDeliveryPhoto**](docs/Api/OrdersApi.md#getorderdeliveryphoto) | **GET** /v1/orders/{id}/delivery-photo | The courier&#39;s delivery photo for this order, pulled automatically, with where it came from.
*OrdersApi* | [**getOrderEvidence**](docs/Api/OrdersApi.md#getorderevidence) | **GET** /v1/orders/{id}/evidence | Everything recorded about how this order was packed and how it arrived.
*OrdersApi* | [**getOrderLabelPrint**](docs/Api/OrdersApi.md#getorderlabelprint) | **GET** /v1/orders/{id}/label/print | The order&#39;s shipping label as a PDF sized for printing (cropped, upright, fitted).
*OrdersApi* | [**getOrderOrderChat**](docs/Api/OrdersApi.md#getorderorderchat) | **GET** /v1/orders/{id}/order-chat | The order&#39;s buyer chat thread on the marketplace (separate from listing comments): { orderId, platform, messages: [{ id, sender (buyer|seller|platform), body, sentAt, attachments? }], canSend }, oldest message first.
*OrdersApi* | [**getOrderPackingSlip**](docs/Api/OrdersApi.md#getorderpackingslip) | **GET** /v1/orders/{id}/packing-slip | Single-order packing slip PDF.
*OrdersApi* | [**getOrderPlatformLabelOption**](docs/Api/OrdersApi.md#getorderplatformlabeloption) | **GET** /v1/orders/{id}/platform-label/options | What buying a marketplace label offers for this order (weight tiers, mailbox state).
*OrdersApi* | [**getOrderPlatformLabelPackingSlip**](docs/Api/OrdersApi.md#getorderplatformlabelpackingslip) | **GET** /v1/orders/{id}/platform-label/packing-slip | A fresh link to the marketplace&#39;s own packing slip PDF.
*OrdersApi* | [**getOrderPlatformLabelState**](docs/Api/OrdersApi.md#getorderplatformlabelstate) | **GET** /v1/orders/{id}/platform-label/state | The marketplace&#39;s shipment for an order (package, label, tracking). Records a label found on it.
*OrdersApi* | [**getOrderPlatformLabelUrl**](docs/Api/OrdersApi.md#getorderplatformlabelurl) | **GET** /v1/orders/{id}/platform-label/url | A fresh, short-lived link to the marketplace&#39;s label sheet. Never stored.
*OrdersApi* | [**getOrderProofOfDelivery**](docs/Api/OrdersApi.md#getorderproofofdelivery) | **GET** /v1/orders/{id}/proof-of-delivery | Proof-of-delivery evidence from the carrier&#39;s scan record (PDF, or JSON).
*OrdersApi* | [**getOrderRefundOption**](docs/Api/OrdersApi.md#getorderrefundoption) | **GET** /v1/orders/{id}/refund-options | What a refund on this order may be, from the platform&#39;s declared capability: whether Crossly can refund it at all, full and/or partial, what a partial is measured against (total &#x3D; what the buyer paid, item &#x3D; the item price only), whether it may precede shipment, the platform&#39;s own reason keys (when listed, a refund&#39;s reason must be one of them), whether a comment is sent, whether the refund IS cancelling the sale (cancelsSale: Mercari, full only), whether the window closes when the order completes (untilCompleted; windowClosed &#x3D; it has) and a one-line note on what the platform does not allow.
*OrdersApi* | [**getOrderSalesTax**](docs/Api/OrdersApi.md#getordersalestax) | **GET** /v1/orders/{id}/sales-tax | Who collected sales tax on one Crossly marketplace order, where, and the seller notice.
*OrdersApi* | [**getOrderScanForm**](docs/Api/OrdersApi.md#getorderscanform) | **GET** /v1/orders/scan-forms/{id} | One SCAN form; a queued form is re-read from the carrier and its PDF appears once built.
*OrdersApi* | [**getOrderShipment**](docs/Api/OrdersApi.md#getordershipment) | **GET** /v1/orders/{id}/shipments | List the parcels an order shipped in.
*OrdersApi* | [**getOrderWhatnotPackingSlip**](docs/Api/OrdersApi.md#getorderwhatnotpackingslip) | **GET** /v1/orders/{id}/whatnot/packing-slip | A fresh link to Whatnot&#39;s packing slip PDF.
*OrdersApi* | [**getOrderWhatnotShipment**](docs/Api/OrdersApi.md#getorderwhatnotshipment) | **GET** /v1/orders/{id}/whatnot/shipment | Whatnot shipment for an order (package, label, tracking). Records a label found on it.
*OrdersApi* | [**getRental**](docs/Api/OrdersApi.md#getrental) | **GET** /v1/rentals/{id} | One rental: its timeline, both sides’ condition photos, payments, extensions and what can be done next.
*OrdersApi* | [**getRentalCalendar**](docs/Api/OrdersApi.md#getrentalcalendar) | **GET** /v1/rentals/calendar | Every rentable item’s bookings (per unit), turnaround buffers and blackouts between two dates (≤ 93 days).
*OrdersApi* | [**listLayaways**](docs/Api/OrdersApi.md#listlayaways) | **GET** /v1/layaways | Your items on layaway (active and paid off). Do not ship an active one: its order moves to needs_fulfillment when paid in full.
*OrdersApi* | [**listLiveShipments**](docs/Api/OrdersApi.md#listliveshipments) | **GET** /v1/live-shipments | Your show boxes: every buyer’s orders from one live show, to ship together.
*OrdersApi* | [**listOrderPickupReady**](docs/Api/OrdersApi.md#listorderpickupready) | **GET** /v1/orders/pickup-ready | Orders with a purchased Crossly Shipping label a courier can collect or a SCAN form can cover, grouped by carrier.
*OrdersApi* | [**listOrderPickups**](docs/Api/OrdersApi.md#listorderpickups) | **GET** /v1/orders/pickups | Booked carrier pickups, newest first.
*OrdersApi* | [**listOrderRefunds**](docs/Api/OrdersApi.md#listorderrefunds) | **GET** /v1/orders/{id}/refunds | Every refund requested on this order through the API or a cancel, newest first (amounts in dollars).
*OrdersApi* | [**listOrderScanForms**](docs/Api/OrdersApi.md#listorderscanforms) | **GET** /v1/orders/scan-forms | SCAN forms, newest first.
*OrdersApi* | [**listOrderUnits**](docs/Api/OrdersApi.md#listorderunits) | **GET** /v1/orders/{id}/units | List the identified units that shipped on an order.
*OrdersApi* | [**listOrders**](docs/Api/OrdersApi.md#listorders) | **GET** /v1/orders | List orders, each with its sale price, fees, SKU and line items.
*OrdersApi* | [**listRentalHistory**](docs/Api/OrdersApi.md#listrentalhistory) | **GET** /v1/rentals/history | Active rentals and history, filtered by view, status, dates, item or a search.
*OrdersApi* | [**listRentals**](docs/Api/OrdersApi.md#listrentals) | **GET** /v1/rentals | Rentals of your items, with the ship-to and the outbound label.
*OrdersApi* | [**updateOrder**](docs/Api/OrdersApi.md#updateorder) | **PATCH** /v1/orders/{id} | Update order (status, notes, tracking).
*PATApi* | [**createPat**](docs/Api/PATApi.md#createpat) | **POST** /v1/pat | Mint a new PAT. Full token returned ONCE — store it on the client.
*PATApi* | [**deletePat**](docs/Api/PATApi.md#deletepat) | **DELETE** /v1/pat/{id} | Revoke a PAT by id.
*PATApi* | [**getPatScope**](docs/Api/PATApi.md#getpatscope) | **GET** /v1/pat/scopes | List the canonical scope catalog.
*PATApi* | [**listPat**](docs/Api/PATApi.md#listpat) | **GET** /v1/pat | List the caller&#39;s PATs (preview only).
*PayoutApi* | [**createPayoutConnectOnboard**](docs/Api/PayoutApi.md#createpayoutconnectonboard) | **POST** /v1/payout/connect/onboard | Start or resume payout-account onboarding; returns a Stripe-hosted URL.
*PayoutApi* | [**createPayoutIdentityLink**](docs/Api/PayoutApi.md#createpayoutidentitylink) | **POST** /v1/payouts/identity/link | Continue with Stripe: a one-time Stripe-hosted link that collects what Stripe needs.
*PayoutApi* | [**createPayoutPayout**](docs/Api/PayoutApi.md#createpayoutpayout) | **POST** /v1/payout/payouts | Pay out now: instant (fee, minutes, to an eligible card/bank) or standard (free, manual schedule only).
*PayoutApi* | [**getPayoutConnect**](docs/Api/PayoutApi.md#getpayoutconnect) | **GET** /v1/payout/connect | Your Stripe payout account: status, country, agreement and payout currency.
*PayoutApi* | [**getPayoutEstimate**](docs/Api/PayoutApi.md#getpayoutestimate) | **GET** /v1/payout/estimate | What one platform nets at a given price, after fees and shipping.
*PayoutApi* | [**getPayoutGrossForNet**](docs/Api/PayoutApi.md#getpayoutgrossfornet) | **GET** /v1/payout/gross-for-net | The gross price needed to clear a target net on one platform.
*PayoutApi* | [**getPayoutIdentity**](docs/Api/PayoutApi.md#getpayoutidentity) | **GET** /v1/payouts/identity | Stripe&#39;s verification of your payout account: status and what Stripe still needs, in plain words.
*PayoutApi* | [**getPayoutWallet**](docs/Api/PayoutApi.md#getpayoutwallet) | **GET** /v1/payout/wallet | Your payout wallet: balances, schedule, next payout, instant-payout quote, methods, payouts, transactions.
*PayoutApi* | [**listPayoutCompare**](docs/Api/PayoutApi.md#listpayoutcompare) | **GET** /v1/payout/compare | Rank platforms by what they net at a given price. Defaults to connected ones.
*PayoutApi* | [**updatePayoutSchedule**](docs/Api/PayoutApi.md#updatepayoutschedule) | **PUT** /v1/payout/schedule | Change the automatic payout schedule.
*PolicyPresetsApi* | [**createGeoLocationCheck**](docs/Api/PolicyPresetsApi.md#creategeolocationcheck) | **POST** /v1/geo/location-check | Check whether a shipping policy ships to an address.
*PolicyPresetsApi* | [**createPolicyPreset**](docs/Api/PolicyPresetsApi.md#createpolicypreset) | **POST** /v1/policy-presets | Create a return / shipping / payment policy preset.
*PolicyPresetsApi* | [**deletePolicyPreset**](docs/Api/PolicyPresetsApi.md#deletepolicypreset) | **DELETE** /v1/policy-presets/{id} | Delete a policy preset. Listings that used it switch to the default preset of its kind.
*PolicyPresetsApi* | [**getPolicy**](docs/Api/PolicyPresetsApi.md#getpolicy) | **GET** /v1/policies | The seller&#39;s shipping / return / payment policy presets by kind, with each kind&#39;s default.
*PolicyPresetsApi* | [**listPolicyPresets**](docs/Api/PolicyPresetsApi.md#listpolicypresets) | **GET** /v1/policy-presets | List the seller&#39;s return / shipping / payment policy presets. meta.migrationNotices lists defaults the policy migration demoted (kind still has no default).
*PolicyPresetsApi* | [**updatePolicyPreset**](docs/Api/PolicyPresetsApi.md#updatepolicypreset) | **PATCH** /v1/policy-presets/{id} | Update a policy preset.
*PriceRulesApi* | [**createPriceRulePreview**](docs/Api/PriceRulesApi.md#createpricerulepreview) | **POST** /v1/price-rules/preview | Compute the price each marketplace would list a listing (or a price) at.
*PriceRulesApi* | [**deletePriceRule**](docs/Api/PriceRulesApi.md#deletepricerule) | **DELETE** /v1/price-rules/{id} | Delete a price rule.
*PriceRulesApi* | [**listPriceRules**](docs/Api/PriceRulesApi.md#listpricerules) | **GET** /v1/price-rules | List the seller&#39;s per-channel price rules.
*PriceRulesApi* | [**updatePriceRule**](docs/Api/PriceRulesApi.md#updatepricerule) | **PUT** /v1/price-rules | Create or replace the price rule for a platform (and optional account / category).
*PriceRulesApi* | [**updatePriceRuleById**](docs/Api/PriceRulesApi.md#updatepricerulebyid) | **PATCH** /v1/price-rules/{id} | Update a price rule.
*ProductFeedsApi* | [**createProductFeed**](docs/Api/ProductFeedsApi.md#createproductfeed) | **POST** /v1/product-feeds | Create a hosted product feed for a channel. Returns its secret URL.
*ProductFeedsApi* | [**createProductFeedRotate**](docs/Api/ProductFeedsApi.md#createproductfeedrotate) | **POST** /v1/product-feeds/{id}/rotate | Rotate the feed token. The old URL stops answering immediately; paste the new one into the channel.
*ProductFeedsApi* | [**deleteProductFeed**](docs/Api/ProductFeedsApi.md#deleteproductfeed) | **DELETE** /v1/product-feeds/{id} | Delete a feed. Its URL stops answering immediately.
*ProductFeedsApi* | [**getProductFeedReport**](docs/Api/ProductFeedsApi.md#getproductfeedreport) | **GET** /v1/product-feeds/{id}/report | Validate a feed: per-item errors (held back) and warnings (sent, limited reach), plus sample rendered items.
*ProductFeedsApi* | [**listProductFeeds**](docs/Api/ProductFeedsApi.md#listproductfeeds) | **GET** /v1/product-feeds | List your hosted product feeds (Google Merchant Center, Meta catalogue, TikTok catalog) with their URLs and last-fetch stats.
*ProductFeedsApi* | [**updateProductFeed**](docs/Api/ProductFeedsApi.md#updateproductfeed) | **PATCH** /v1/product-feeds/{id} | Edit a feed: name, default format, enabled, listing filters, output settings.
*ProductSetsApi* | [**createProductSet**](docs/Api/ProductSetsApi.md#createproductset) | **POST** /v1/product-sets | Create a product set (filters, explicit picks, or both).
*ProductSetsApi* | [**createProductSetBulk**](docs/Api/ProductSetsApi.md#createproductsetbulk) | **POST** /v1/product-sets/{id}/bulk | Run a bulk action (delist / relist / check-status) against the set&#39;s current members.
*ProductSetsApi* | [**createProductSetMember**](docs/Api/ProductSetsApi.md#createproductsetmember) | **POST** /v1/product-sets/{id}/members | Add / exclude / remove explicit picks for a set.
*ProductSetsApi* | [**deleteProductSet**](docs/Api/ProductSetsApi.md#deleteproductset) | **DELETE** /v1/product-sets/{id} | Delete a product set (its id is also dropped from any channel exclusion lists).
*ProductSetsApi* | [**getProductSet**](docs/Api/ProductSetsApi.md#getproductset) | **GET** /v1/product-sets/{id} | Get one product set (its filters and pick counts).
*ProductSetsApi* | [**listProductSetMembers**](docs/Api/ProductSetsApi.md#listproductsetmembers) | **GET** /v1/product-sets/{id}/members | Evaluate a set now and return a page of its member listings.
*ProductSetsApi* | [**listProductSets**](docs/Api/ProductSetsApi.md#listproductsets) | **GET** /v1/product-sets | List your saved product sets with their live member counts.
*ProductSetsApi* | [**updateProductSet**](docs/Api/ProductSetsApi.md#updateproductset) | **PATCH** /v1/product-sets/{id} | Update a set: rename, description, or replace its filters.
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
*ReferenceApi* | [**getReferencePostal**](docs/Api/ReferenceApi.md#getreferencepostal) | **GET** /v1/reference/postal/{country}/{code} | Look up a postal code: canonical shape, state and US metro areas.
*ReferenceApi* | [**getSizeSystem**](docs/Api/ReferenceApi.md#getsizesystem) | **GET** /v1/size-systems | Search the Poshmark + Vestiaire size-system union (US/UK/EU/AU/FR/KR).
*ReferenceApi* | [**getStyle**](docs/Api/ReferenceApi.md#getstyle) | **GET** /v1/styles | Search the eBay-sourced \&quot;Style\&quot; item-specific values.
*ReferenceApi* | [**getType**](docs/Api/ReferenceApi.md#gettype) | **GET** /v1/types | Search the eBay-sourced \&quot;Type\&quot; item-specific values.
*ReferenceApi* | [**listReferenceCountries**](docs/Api/ReferenceApi.md#listreferencecountries) | **GET** /v1/reference/countries | Every country with its delivery-address rules.
*ReferenceApi* | [**listReferenceMetros**](docs/Api/ReferenceApi.md#listreferencemetros) | **GET** /v1/reference/metros | Search US metro areas (CSA / CBSA) for location rules.
*RestockPromptsApi* | [**createRestockPromptDismiss**](docs/Api/RestockPromptsApi.md#createrestockpromptdismiss) | **POST** /v1/restock-prompts/{id}/dismiss | Dismiss a pending restock prompt.
*RestockPromptsApi* | [**createRestockPromptRepublish**](docs/Api/RestockPromptsApi.md#createrestockpromptrepublish) | **POST** /v1/restock-prompts/{id}/republish | Republish a restock prompt to platforms.
*RestockPromptsApi* | [**getRestockPromptSetting**](docs/Api/RestockPromptsApi.md#getrestockpromptsetting) | **GET** /v1/restock-prompts/settings | Whether restocked items are republished automatically.
*RestockPromptsApi* | [**listRestockPrompts**](docs/Api/RestockPromptsApi.md#listrestockprompts) | **GET** /v1/restock-prompts | List pending restock prompts.
*RestockPromptsApi* | [**updateRestockPromptSetting**](docs/Api/RestockPromptsApi.md#updaterestockpromptsetting) | **PUT** /v1/restock-prompts/settings | Turn automatic republish of restocked items on or off.
*ReturnsApi* | [**createPolicyReturnReceived**](docs/Api/ReturnsApi.md#createpolicyreturnreceived) | **POST** /v1/policy-returns/{id}/received | Mark a return received: refunds the buyer, less the restocking or try fee you keep.
*ReturnsApi* | [**createReturn**](docs/Api/ReturnsApi.md#createreturn) | **POST** /v1/returns | Open a return record on an order (rejects if another open return exists).
*ReturnsApi* | [**createReturnAccept**](docs/Api/ReturnsApi.md#createreturnaccept) | **POST** /v1/returns/{id}/accept | Accept a Crossly-marketplace return request: a prepaid return label to your return address (the buyer has 14 days to ship), a return record linked to it, and optionally a refund now (refund: { amount? } in dollars; needs orders:refund). Without one, the rest is refunded when the return is delivered. Safe to repeat. Crossposted orders: not_supported_on_platform.
*ReturnsApi* | [**createReturnDecline**](docs/Api/ReturnsApi.md#createreturndecline) | **POST** /v1/returns/{id}/decline | Decline a Crossly-marketplace return request with a reason (required, 8-2000 chars), posted to the buyer as your response. It does not close the request: the buyer can reply or ask Crossly to decide. Not after the label is issued.
*ReturnsApi* | [**getReturn**](docs/Api/ReturnsApi.md#getreturn) | **GET** /v1/returns/{id} | Get one return record.
*ReturnsApi* | [**listPolicyReturns**](docs/Api/ReturnsApi.md#listpolicyreturns) | **GET** /v1/policy-returns | Returns Crossly buyers opened under your return policy or try at home; filter by orderId.
*ReturnsApi* | [**listReturns**](docs/Api/ReturnsApi.md#listreturns) | **GET** /v1/returns | List returns. Default: your return records (the physical-return workflow), status&#x3D;open|closed|&lt;exact&gt;. source&#x3D;request: the OPEN return requests buyers made on the Crossly marketplace, newest first; accept or decline each with POST /v1/returns/{id}/accept | decline.
*ReturnsApi* | [**updateReturn**](docs/Api/ReturnsApi.md#updatereturn) | **PATCH** /v1/returns/{id} | Transition return status (received/inspected/restocked) and bump inventory on restock.
*SalesApi* | [**createSaleBulkDelete**](docs/Api/SalesApi.md#createsalebulkdelete) | **POST** /v1/sales/bulk-delete | Bulk soft-delete sales rows.
*SalesApi* | [**listSales**](docs/Api/SalesApi.md#listsales) | **GET** /v1/sales | List sales (each unique sale event).
*SandboxApi* | [**createSandboxReset**](docs/Api/SandboxApi.md#createsandboxreset) | **POST** /v1/sandbox/reset | Restore the sandbox seller to its seed. Your grant and webhook subscriptions are kept.
*SandboxApi* | [**createSandboxSimulateInventory**](docs/Api/SandboxApi.md#createsandboxsimulateinventory) | **POST** /v1/sandbox/simulate/inventory | Change stock (set, increase or decrease); the new quantity is pushed to every channel.
*SandboxApi* | [**createSandboxSimulateListingSoldOut**](docs/Api/SandboxApi.md#createsandboxsimulatelistingsoldout) | **POST** /v1/sandbox/simulate/listing.sold_out | A listing sells out on a marketplace with no order (stock moves, other channels delist).
*SandboxApi* | [**createSandboxSimulateOrder**](docs/Api/SandboxApi.md#createsandboxsimulateorder) | **POST** /v1/sandbox/simulate/order | Simulate a sale through the real sale pipeline (order.created, sale.detected, stock and cross-channel updates).
*SandboxApi* | [**createSandboxSimulateOrderAddress**](docs/Api/SandboxApi.md#createsandboxsimulateorderaddress) | **POST** /v1/sandbox/simulate/order.address | The buyer address of an order simulated with address \&quot;delayed\&quot; arrives now (order.address_available).
*SandboxApi* | [**createSandboxSimulateOrderCancelled**](docs/Api/SandboxApi.md#createsandboxsimulateordercancelled) | **POST** /v1/sandbox/simulate/order.cancelled | The buyer or the marketplace cancels an order (order.cancelled).
*SandboxApi* | [**createSandboxSimulateOrderDelivered**](docs/Api/SandboxApi.md#createsandboxsimulateorderdelivered) | **POST** /v1/sandbox/simulate/order.delivered | The carrier delivers a shipped order (order.delivered).
*SandboxApi* | [**createSandboxSimulateRefund**](docs/Api/SandboxApi.md#createsandboxsimulaterefund) | **POST** /v1/sandbox/simulate/refund | Refund an order in full or in part (refund.issued).
*SandboxApi* | [**getSandbox**](docs/Api/SandboxApi.md#getsandbox) | **GET** /v1/sandbox | The sandbox seller this token acts on, its simulated channels and the failure modes.
*SandboxApi* | [**listSandboxEvents**](docs/Api/SandboxApi.md#listsandboxevents) | **GET** /v1/sandbox/events | The simulated marketplaces&#39; call log: verb, channel, outcome, latency.
*SavedViewsApi* | [**createSavedView**](docs/Api/SavedViewsApi.md#createsavedview) | **POST** /v1/saved-views | Create a saved view preset.
*SavedViewsApi* | [**deleteSavedView**](docs/Api/SavedViewsApi.md#deletesavedview) | **DELETE** /v1/saved-views/{id} | Delete a saved view preset.
*SavedViewsApi* | [**listSavedViews**](docs/Api/SavedViewsApi.md#listsavedviews) | **GET** /v1/saved-views | List the seller&#39;s saved view presets.
*SavedViewsApi* | [**updateSavedView**](docs/Api/SavedViewsApi.md#updatesavedview) | **PATCH** /v1/saved-views/{id} | Update a saved view preset.
*ScanApi* | [**listScanCaptures**](docs/Api/ScanApi.md#listscancaptures) | **GET** /v1/scan/captures | Your capture sessions and what they produced.
*ScanApi* | [**listScanModels**](docs/Api/ScanApi.md#listscanmodels) | **GET** /v1/scan/models | Which items already have a 3D model.
*SearchApi* | [**getSearch**](docs/Api/SearchApi.md#getsearch) | **GET** /v1/search | Search everything in your business at once: inventory, listings, orders, sales, customers, conversations, offers, shipments and returns. Exact identifiers (SKU, barcode, order number, tracking number, buyer email, marketplace listing id or a pasted listing URL) rank first, then prefixes, then fuzzy title / brand / buyer matches. Operators: sku:, order:, buyer:, tracking:, in:&lt;type&gt;, status:, platform:. Groups your token has no read scope for are left out.
*SourceSyncApi* | [**createSourceSyncSync**](docs/Api/SourceSyncApi.md#createsourcesyncsync) | **POST** /v1/source-sync/{platform}/sync | Reconcile a store now: re-read its whole catalogue and apply every change (runs in the background; 202).
*SourceSyncApi* | [**getSourceSyncLocation**](docs/Api/SourceSyncApi.md#getsourcesynclocation) | **GET** /v1/source-sync/{platform}/locations | POS only (lightspeed_r, lightspeed_x, square): the shops/outlets/locations on the account and which one Crossly syncs stock and sales with.
*SourceSyncApi* | [**listSourceSync**](docs/Api/SourceSyncApi.md#listsourcesync) | **GET** /v1/source-sync | List source-capable stores with their continuous-sync settings and status.
*SourceSyncApi* | [**listSourceSyncEvents**](docs/Api/SourceSyncApi.md#listsourcesyncevents) | **GET** /v1/source-sync/events | Recent source-sync activity: each webhook delivery and reconcile change, with its outcome.
*SourceSyncApi* | [**updateSourceSync**](docs/Api/SourceSyncApi.md#updatesourcesync) | **PATCH** /v1/source-sync/{platform} | Update a store&#39;s source-sync settings: on/off, source-owned fields, deletion handling, auto-export channels.
*SourceSyncApi* | [**updateSourceSyncLocation**](docs/Api/SourceSyncApi.md#updatesourcesynclocation) | **PUT** /v1/source-sync/{platform}/location | POS only: choose the shop (R-Series) / outlet (X-Series) / Square location whose stock and sales Crossly syncs. Must be one GET .../locations lists.
*SourcingApi* | [**createSourcingReceipt**](docs/Api/SourcingApi.md#createsourcingreceipt) | **POST** /v1/sourcing/receipts | Append a parsed receipt to the sourcing ledger.
*SourcingApi* | [**getSourcingReceipt**](docs/Api/SourcingApi.md#getsourcingreceipt) | **GET** /v1/sourcing/receipts | List parsed sourcing receipts in this user&#39;s ledger.
*SourcingApi* | [**listSourcingDemand**](docs/Api/SourcingApi.md#listsourcingdemand) | **GET** /v1/sourcing/demand | Items buyers looked for on other sites that Crossly did not have.
*SourcingApi* | [**listSourcingDemandMine**](docs/Api/SourcingApi.md#listsourcingdemandmine) | **GET** /v1/sourcing/demand/mine | Unmet buyer demand for items you hold or have sold before.
*StallsApi* | [**createStallBook**](docs/Api/StallsApi.md#createstallbook) | **POST** /v1/stalls/book | Book and pay for a pop-up stall: { street, spotIndex, rail, unit: \&quot;day\&quot;, startDate, days } or { ..., unit: \&quot;event\&quot;, eventIds }, optional booth { canopy, pattern, lights, counter, piece } (premium values need holding; checked before paying). Paid up front; full-access token and Idempotency-Key required.
*StallsApi* | [**createStallBookingCancel**](docs/Api/StallsApi.md#createstallbookingcancel) | **POST** /v1/stalls/bookings/{id}/cancel | Cancel a stall before it opens: a full refund on the rail it was paid on. Final once it has opened.
*StallsApi* | [**getStallBookingCounter**](docs/Api/StallsApi.md#getstallbookingcounter) | **GET** /v1/stalls/bookings/{id}/counter | A stall counter: the listings you picked (in order), its booth kind and capacity.
*StallsApi* | [**getStallQuote**](docs/Api/StallsApi.md#getstallquote) | **GET** /v1/stalls/quote | Quote a stall: street, spot, and either unit&#x3D;day with start (YYYY-MM-DD) and days, or unit&#x3D;event with events (comma-separated event ids). Returns the line items in cents, the rails the spot accepts and whether it is bookable.
*StallsApi* | [**getStallStreetAerial**](docs/Api/StallsApi.md#getstallstreetaerial) | **GET** /v1/stalls/streets/{slug}/aerial | A street from above for booking: every spot with its owner, booth size, counter capacity and price, the street events, and who is booked on each date.
*StallsApi* | [**listStallListingSearch**](docs/Api/StallsApi.md#liststalllistingsearch) | **GET** /v1/stalls/listing-search | Search ANY of your live Crossly listings for a stall counter or convention booth: q, category, min, max (cents), street (marks what its terms allow), limit, offset.
*StallsApi* | [**listStallMine**](docs/Api/StallsApi.md#liststallmine) | **GET** /v1/stalls/mine | Your stall bookings, newest first, with visits, offers and sales while the stall was up.
*StallsApi* | [**listStreetEvents**](docs/Api/StallsApi.md#liststreetevents) | **GET** /v1/streets/{slug}/events | Current and upcoming street events (Night Market, Swap Meet) on a street, soonest first.
*StallsApi* | [**listStreetStalls**](docs/Api/StallsApi.md#liststreetstalls) | **GET** /v1/streets/{slug}/stalls | Today&#39;s pop-up stalls on a street (each with its live listings, awning, sign and seller), plus the spots still free today. meta carries the street, the phase (day / night_market / swap_meet) and the free spots.
*StallsApi* | [**updateStallBooking**](docs/Api/StallsApi.md#updatestallbooking) | **PATCH** /v1/stalls/bookings/{id} | Change a booked stall before or while it is up: listingIds (up to 6 of your live listings), awning { colour, pattern }, booth { canopy, pattern, lights, counter, piece } (premium values need holding), sign, attendant.
*StorefrontApi* | [**createStorefrontHighlight**](docs/Api/StorefrontApi.md#createstorefronthighlight) | **POST** /v1/storefront/highlights | Create a highlight: title (up to 24 characters), optional coverUrl, and optional storyIds (your live or archived stories) to save into it. Up to 50 per store.
*StorefrontApi* | [**createStorefrontHighlightItem**](docs/Api/StorefrontApi.md#createstorefronthighlightitem) | **POST** /v1/storefront/highlights/{id}/items | Save stories into a highlight (appended in the order given). Each is copied, so it stays after the story expires. A story already in the highlight is skipped.
*StorefrontApi* | [**createStorefrontProfileSuggestShelve**](docs/Api/StorefrontApi.md#createstorefrontprofilesuggestshelve) | **POST** /v1/storefront/profile/suggest-shelves | Profile shelves proposed from your top tags and categories (not saved).
*StorefrontApi* | [**createStorefrontSection**](docs/Api/StorefrontApi.md#createstorefrontsection) | **POST** /v1/storefront/sections | Add a section at the bottom: kind hero | listings | collections | about | policies | social | announcement | faq (default listings), with its config.
*StorefrontApi* | [**createStorefrontSitePreview**](docs/Api/StorefrontApi.md#createstorefrontsitepreview) | **POST** /v1/storefront/site/preview | Resolve an unsaved design page like the live site would: every section with its listings and extras (preview: true).
*StorefrontApi* | [**createStorefrontSitePublish**](docs/Api/StorefrontApi.md#createstorefrontsitepublish) | **POST** /v1/storefront/site/publish | Publish the draft: it becomes the live site and a publish version is kept (the last 30 versions are kept).
*StorefrontApi* | [**createStorefrontSiteResolve**](docs/Api/StorefrontApi.md#createstorefrontsiteresolve) | **POST** /v1/storefront/site/resolve | The live listings a ListingSource (manual, tags, category, smart rule or all) selects from your store, and how many match.
*StorefrontApi* | [**createStorefrontSiteStarter**](docs/Api/StorefrontApi.md#createstorefrontsitestarter) | **POST** /v1/storefront/site/starter | Replace the draft with a starter site (vintage, sneakers, streetwear, collectibles, boutique, home, minimal, drop, general). The current draft is kept as a version first.
*StorefrontApi* | [**createStorefrontSiteSuggest**](docs/Api/StorefrontApi.md#createstorefrontsitesuggest) | **POST** /v1/storefront/site/suggest | Auto-build: website sections proposed from your top tags and categories (not saved).
*StorefrontApi* | [**createStorefrontSiteVersionRestore**](docs/Api/StorefrontApi.md#createstorefrontsiteversionrestore) | **POST** /v1/storefront/site/versions/{id}/restore | Copy a saved version into the draft (the current draft is kept as a version first). Publish to make it live.
*StorefrontApi* | [**createStorefrontTradeSitePublish**](docs/Api/StorefrontApi.md#createstorefronttradesitepublish) | **POST** /v1/storefront/trade-site/publish | Publish the trade site draft (a version is kept).
*StorefrontApi* | [**createStorefrontTradeSiteResolve**](docs/Api/StorefrontApi.md#createstorefronttradesiteresolve) | **POST** /v1/storefront/trade-site/resolve | The listings a ListingSource selects on your trade site: only items in your active wholesale catalogs (narrowed further by source.catalogIds), and how many match.
*StorefrontApi* | [**createStorefrontTradeSiteStarter**](docs/Api/StorefrontApi.md#createstorefronttradesitestarter) | **POST** /v1/storefront/trade-site/starter | Replace the trade site draft with a trade starter (trade_classic, trade_line_sheet, trade_brand_house, trade_apply_first). The current draft is kept as a version first.
*StorefrontApi* | [**createStorefrontTradeSiteSuggest**](docs/Api/StorefrontApi.md#createstorefronttradesitesuggest) | **POST** /v1/storefront/trade-site/suggest | Trade Auto-build: trade site sections proposed from your wholesale catalogs (a spotlight, a rail per catalog, terms, apply banner). Not saved.
*StorefrontApi* | [**deleteStorefrontHighlight**](docs/Api/StorefrontApi.md#deletestorefronthighlight) | **DELETE** /v1/storefront/highlights/{id} | Delete a highlight and its saved stories. The original stories are unaffected.
*StorefrontApi* | [**deleteStorefrontHighlightItem**](docs/Api/StorefrontApi.md#deletestorefronthighlightitem) | **DELETE** /v1/storefront/highlights/{id}/items/{itemId} | Remove one saved story from a highlight.
*StorefrontApi* | [**deleteStorefrontSection**](docs/Api/StorefrontApi.md#deletestorefrontsection) | **DELETE** /v1/storefront/sections/{id} | Remove a section. Listings on a removed shelf stay live.
*StorefrontApi* | [**getStorefront**](docs/Api/StorefrontApi.md#getstorefront) | **GET** /v1/storefront | Your storefront design: banner, logo, tagline, bio, theme, SEO title and description, social links, and whether it is published.
*StorefrontApi* | [**getStorefrontMerch**](docs/Api/StorefrontApi.md#getstorefrontmerch) | **GET** /v1/storefront/merch | Your store&#39;s live listings by tag, category, condition and brand, with the price range: what product sources can select.
*StorefrontApi* | [**getStorefrontProfile**](docs/Api/StorefrontApi.md#getstorefrontprofile) | **GET** /v1/storefront/profile | Your shop profile (the Crossly Shop page): banner, logo, tagline, bio, accent, announcement, shelves, blocks and All items options.
*StorefrontApi* | [**getStorefrontShipping**](docs/Api/StorefrontApi.md#getstorefrontshipping) | **GET** /v1/storefront/shipping | Your Crossly shipping policy (domestic and international services, which countries you ship to) and your default ship-from address.
*StorefrontApi* | [**getStorefrontSite**](docs/Api/StorefrontApi.md#getstorefrontsite) | **GET** /v1/storefront/site | Your store website: the draft design, what is live, when each changed, whether the site is switched on, and its custom domain.
*StorefrontApi* | [**getStorefrontTradeSite**](docs/Api/StorefrontApi.md#getstorefronttradesite) | **GET** /v1/storefront/trade-site | Your store&#39;s trade (wholesale) site at /site/:slug/trade: the draft, what is live, whether it is on and its gating (public | prices_private | approved_only).
*StorefrontApi* | [**listStorefrontHighlights**](docs/Api/StorefrontApi.md#liststorefronthighlights) | **GET** /v1/storefront/highlights | Your store’s story highlights in display order, each with its saved stories (media, overlays, product tie-in, when posted). Empty highlights included.
*StorefrontApi* | [**listStorefrontSections**](docs/Api/StorefrontApi.md#liststorefrontsections) | **GET** /v1/storefront/sections | Your storefront sections in display order: kind, title, visible, config, and listing ids for listings shelves.
*StorefrontApi* | [**listStorefrontSiteVersions**](docs/Api/StorefrontApi.md#liststorefrontsiteversions) | **GET** /v1/storefront/site/versions | Saved versions of the website, newest first (publish, restore and template points; up to 30).
*StorefrontApi* | [**listStorefrontStoryArchive**](docs/Api/StorefrontApi.md#liststorefrontstoryarchive) | **GET** /v1/storefront/stories/archive | Your stories, live and expired, newest first: what can be saved to a highlight. Paginated: pass before &#x3D; meta.nextCursor of the previous page.
*StorefrontApi* | [**updateStorefront**](docs/Api/StorefrontApi.md#updatestorefront) | **PUT** /v1/storefront | Update your storefront design. Omitted fields are unchanged, null clears. published&#x3D;false keeps the design as a draft and buyers see the standard storefront.
*StorefrontApi* | [**updateStorefrontHighlight**](docs/Api/StorefrontApi.md#updatestorefronthighlight) | **PATCH** /v1/storefront/highlights/{id} | Rename a highlight or change its cover (coverUrl null &#x3D; use the first story).
*StorefrontApi* | [**updateStorefrontHighlightItemOrder**](docs/Api/StorefrontApi.md#updatestorefronthighlightitemorder) | **PUT** /v1/storefront/highlights/{id}/items/order | Set the order of a highlight’s saved stories: every item id, first to last.
*StorefrontApi* | [**updateStorefrontHighlightOrder**](docs/Api/StorefrontApi.md#updatestorefronthighlightorder) | **PUT** /v1/storefront/highlights/order | Set the highlight order in one call: every highlight id, first to last.
*StorefrontApi* | [**updateStorefrontProfile**](docs/Api/StorefrontApi.md#updatestorefrontprofile) | **PUT** /v1/storefront/profile | Replace your shop profile (a complete ShopProfile). Saved straight away.
*StorefrontApi* | [**updateStorefrontSection**](docs/Api/StorefrontApi.md#updatestorefrontsection) | **PATCH** /v1/storefront/sections/{id} | Rename, show/hide, refill (listings shelves) or reconfigure a section.
*StorefrontApi* | [**updateStorefrontSectionReorder**](docs/Api/StorefrontApi.md#updatestorefrontsectionreorder) | **PUT** /v1/storefront/sections/reorder | Set the section order in one atomic call: every section id, top to bottom.
*StorefrontApi* | [**updateStorefrontShipping**](docs/Api/StorefrontApi.md#updatestorefrontshipping) | **PUT** /v1/storefront/shipping | Set your shipping policy (international.enabled, shipsTo worldwide or ISO codes, excludes) and/or your default ship-from address (any country; 422 for a sanctioned origin).
*StorefrontApi* | [**updateStorefrontSiteDraft**](docs/Api/StorefrontApi.md#updatestorefrontsitedraft) | **PUT** /v1/storefront/site/draft | Save the website draft (a complete SiteDesign). Validated strictly (a bad field is a 400 naming its path) and sanitized; buyers see nothing until you publish.
*StorefrontApi* | [**updateStorefrontSiteEnabled**](docs/Api/StorefrontApi.md#updatestorefrontsiteenabled) | **PUT** /v1/storefront/site/enabled | Switch the website on or off. On requires a publish first; off makes /site/:slug 404 and the custom domain show the shop profile.
*StorefrontApi* | [**updateStorefrontTradeSiteDraft**](docs/Api/StorefrontApi.md#updatestorefronttradesitedraft) | **PUT** /v1/storefront/trade-site/draft | Save the trade site draft (a complete SiteDesign; trade sections included). Validated strictly and sanitized.
*StorefrontApi* | [**updateStorefrontTradeSiteEnabled**](docs/Api/StorefrontApi.md#updatestorefronttradesiteenabled) | **PUT** /v1/storefront/trade-site/enabled | Switch the trade site on (needs a publish first) or off.
*StorefrontApi* | [**updateStorefrontTradeSiteGating**](docs/Api/StorefrontApi.md#updatestorefronttradesitegating) | **PUT** /v1/storefront/trade-site/gating | Who sees the trade site: public (everyone, with prices), prices_private (everyone, prices for approved buyers) or approved_only (approved buyers; others get the apply page).
*StorefrontsApi* | [**createStorefront**](docs/Api/StorefrontsApi.md#createstorefront) | **POST** /v1/storefronts | Create a store: name (1-60) and optional slug (3-40 lowercase letters, numbers, hyphens; derived from the name when omitted). Your first store becomes the default.
*StorefrontsApi* | [**createStorefrontListingMove**](docs/Api/StorefrontsApi.md#createstorefrontlistingmove) | **POST** /v1/storefronts/{id}/listings/{platformListingId}/move | Move a Crossly listing (by its platform_listing id) into this store.
*StorefrontsApi* | [**createStorefrontOnboardingSkip**](docs/Api/StorefrontsApi.md#createstorefrontonboardingskip) | **POST** /v1/storefronts/onboarding/skip | Skip (or dismiss) the setup wizard: ensures your default store exists, with a generated name you can rename any time. Idempotent.
*StorefrontsApi* | [**createStorefrontOnboardingSuggest**](docs/Api/StorefrontsApi.md#createstorefrontonboardingsuggest) | **POST** /v1/storefronts/onboarding/suggest | Suggest another generated store name with a free matching slug.
*StorefrontsApi* | [**createStorefrontPolicyFromTerm**](docs/Api/StorefrontsApi.md#createstorefrontpolicyfromterm) | **POST** /v1/storefronts/{id}/policies/from-terms | Create a policy preset from this store&#39;s current terms (body: { kind: &#39;shipping&#39; | &#39;return&#39; | &#39;payment&#39; }) and assign it to the store. Returns { preset, policies }.
*StorefrontsApi* | [**createStorefrontPolicyUseShared**](docs/Api/StorefrontsApi.md#createstorefrontpolicyuseshared) | **POST** /v1/storefronts/{id}/policies/use-shared | Make a store use your shared policies: a non-default store drops its own return/shipping/payment policy copies and shows your default policies from then on. No change on the default store. Returns the store settings (policySource per kind, usesOwnPolicy).
*StorefrontsApi* | [**createStorefrontPublish**](docs/Api/StorefrontsApi.md#createstorefrontpublish) | **POST** /v1/storefronts/{id}/publish | Flip a store live. Fails with storefront_requirements_missing (and the missing list) when ship-from, shipping policy, return policy or payouts are not set.
*StorefrontsApi* | [**createStorefrontSectionById**](docs/Api/StorefrontsApi.md#createstorefrontsectionbyid) | **POST** /v1/storefronts/{id}/sections | Add a section to a store (kind hero | listings | collections | about | policies | social | announcement | faq | creations).
*StorefrontsApi* | [**deleteStorefront**](docs/Api/StorefrontsApi.md#deletestorefront) | **DELETE** /v1/storefronts/{id} | Archive a store. If it was the default, your oldest remaining store becomes the default.
*StorefrontsApi* | [**deleteStorefrontSectionBySectionId**](docs/Api/StorefrontsApi.md#deletestorefrontsectionbysectionid) | **DELETE** /v1/storefronts/{id}/sections/{sectionId} | Remove a section from a store. Listings on a removed shelf stay live.
*StorefrontsApi* | [**deleteStorefrontTeamAccess**](docs/Api/StorefrontsApi.md#deletestorefrontteamaccess) | **DELETE** /v1/storefronts/team-access | Revoke a team member&#39;s access to one store (or their all-stores grant).
*StorefrontsApi* | [**getHubSetup**](docs/Api/StorefrontsApi.md#gethubsetup) | **GET** /v1/hub/setup/{section} | A Hub section&#39;s setup checklist: each step, whether it is done and the page that completes it. Derived from what exists, never stored.
*StorefrontsApi* | [**getStorefrontById**](docs/Api/StorefrontsApi.md#getstorefrontbyid) | **GET** /v1/storefronts/{id} | One store: name, slug, status (draft|live|paused|archived), isDefault, nameAuto, onboardedAt.
*StorefrontsApi* | [**getStorefrontOnboarding**](docs/Api/StorefrontsApi.md#getstorefrontonboarding) | **GET** /v1/storefronts/onboarding | Crossly Shop setup state: whether you have a store, the generated name/slug a skip would use, each optional step and whether it is done, the listing-gate requirements, payouts readiness and the public URL once live.
*StorefrontsApi* | [**getStorefrontPolicy**](docs/Api/StorefrontsApi.md#getstorefrontpolicy) | **GET** /v1/storefronts/{id}/policies | A store&#39;s policies: per kind (shipping, return, payment) the preset the store picked (presetId, null &#x3D; your default) and what the store resolves to (resolvedPresetId, resolvedPresetName, level: store | seller_default | legacy | default, body).
*StorefrontsApi* | [**getStorefrontRequirement**](docs/Api/StorefrontsApi.md#getstorefrontrequirement) | **GET** /v1/storefronts/{id}/requirements | What this store still needs before a NEW Crossly listing can publish into it: ship_from, shipping_policy, return_policy, payouts — with where to fix each.
*StorefrontsApi* | [**getStorefrontSetting**](docs/Api/StorefrontsApi.md#getstorefrontsetting) | **GET** /v1/storefronts/{id}/settings | A store&#39;s settings: design (banner, logo, theme, SEO, social, published), ship-from, return address, policies (storePolicies: the store&#39;s preset picks + what each kind resolves to), custom-order flag, featured listings, bundle discount, custom domain. DEPRECATED aliases, resolved through the policy cascade: offersFreeShipping, freeShippingThresholdCents, offersLocalPickup, localCourierEnabled, acceptsLayaway, sellerProtections, requestArrivalCondition, arrivalConditionWindowHours — use /v1/storefronts/:id/policies and the preset fields.
*StorefrontsApi* | [**getStorefrontSlugAvailable**](docs/Api/StorefrontsApi.md#getstorefrontslugavailable) | **GET** /v1/storefronts/slug-available | Is this store slug free? Checks shape, reserved words, current slugs and retired ones.
*StorefrontsApi* | [**listStorefrontSectionsById**](docs/Api/StorefrontsApi.md#liststorefrontsectionsbyid) | **GET** /v1/storefronts/{id}/sections | A store&#39;s sections in display order.
*StorefrontsApi* | [**listStorefrontTeamAccess**](docs/Api/StorefrontsApi.md#liststorefrontteamaccess) | **GET** /v1/storefronts/team-access | Every active per-store grant you have made to team members (storefrontId null &#x3D; all stores).
*StorefrontsApi* | [**listStorefronts**](docs/Api/StorefrontsApi.md#liststorefronts) | **GET** /v1/storefronts | Your stores (default first). includeArchived&#x3D;true adds archived ones.
*StorefrontsApi* | [**updateStorefrontById**](docs/Api/StorefrontsApi.md#updatestorefrontbyid) | **PATCH** /v1/storefronts/{id} | Rename a store. Never changes the slug or your @handle.
*StorefrontsApi* | [**updateStorefrontDefault**](docs/Api/StorefrontsApi.md#updatestorefrontdefault) | **PUT** /v1/storefronts/{id}/default | Make this store your default (where a Crossly publish with no storefrontId lands).
*StorefrontsApi* | [**updateStorefrontPolicy**](docs/Api/StorefrontsApi.md#updatestorefrontpolicy) | **PUT** /v1/storefronts/{id}/policies | Set a store&#39;s policies: shippingPresetId, returnPresetId, paymentPresetId (a policy preset of that kind you own, or null for your default). Omitted &#x3D; unchanged. Listings in the store with no preset of their own follow these.
*StorefrontsApi* | [**updateStorefrontSectionBySectionId**](docs/Api/StorefrontsApi.md#updatestorefrontsectionbysectionid) | **PATCH** /v1/storefronts/{id}/sections/{sectionId} | Rename, show/hide, refill (listings shelves) or reconfigure one section of a store.
*StorefrontsApi* | [**updateStorefrontSectionReorderById**](docs/Api/StorefrontsApi.md#updatestorefrontsectionreorderbyid) | **PUT** /v1/storefronts/{id}/sections/reorder | Set a store&#39;s section order in one atomic call: every section id, top to bottom.
*StorefrontsApi* | [**updateStorefrontSetting**](docs/Api/StorefrontsApi.md#updatestorefrontsetting) | **PUT** /v1/storefronts/{id}/settings | Update a store&#39;s settings. Omitted fields are unchanged, null clears. Policies replace wholesale. shippingPresetId / returnPresetId / paymentPresetId pick the store&#39;s presets. The checkout-term fields (offersFreeShipping … arrivalConditionWindowHours) are DEPRECATED aliases: they are written into the store&#39;s preset.
*StorefrontsApi* | [**updateStorefrontSlug**](docs/Api/StorefrontsApi.md#updatestorefrontslug) | **PUT** /v1/storefronts/{id}/slug | Change a store&#39;s slug. The old slug keeps redirecting to the store.
*StorefrontsApi* | [**updateStorefrontStatus**](docs/Api/StorefrontsApi.md#updatestorefrontstatus) | **PUT** /v1/storefronts/{id}/status | Set a store&#39;s status: draft | live | paused | archived. A live store is public once it has a live listing.
*StorefrontsApi* | [**updateStorefrontTeamAccess**](docs/Api/StorefrontsApi.md#updatestorefrontteamaccess) | **PUT** /v1/storefronts/team-access | Grant (or replace) a team member&#39;s access to one store, or to every store (storefrontId null), with scopes.
*TCGApi* | [**createTcgChallenge**](docs/Api/TCGApi.md#createtcgchallenge) | **POST** /v1/tcg/{game}/challenges | Open a 1v1 challenge with one of your decks; another player joins it.
*TCGApi* | [**createTcgDeck**](docs/Api/TCGApi.md#createtcgdeck) | **POST** /v1/tcg/{game}/decks | Create (no id) or update a deck: its lead (Crew Boss, Mastermind or Keeper) and 40 cards you own, checked against the deck rules of its game.
*TCGApi* | [**createTcgMatchAct**](docs/Api/TCGApi.md#createtcgmatchact) | **POST** /v1/tcg/matches/{id}/act | Make one move: { action } as listed in the match&#39;s legal moves. The engine checks it.
*TCGApi* | [**createTcgMatchJoin**](docs/Api/TCGApi.md#createtcgmatchjoin) | **POST** /v1/tcg/matches/{id}/join | Join an open 1v1 challenge with one of your decks.
*TCGApi* | [**createTcgPackOpen**](docs/Api/TCGApi.md#createtcgpackopen) | **POST** /v1/tcg/packs/{id}/open | Open one of your earned packs: its eight cards join your collection.
*TCGApi* | [**createTcgPractice**](docs/Api/TCGApi.md#createtcgpractice) | **POST** /v1/tcg/{game}/practice | Start a practice match against the house bot with one of your decks.
*TCGApi* | [**createTcgQueue**](docs/Api/TCGApi.md#createtcgqueue) | **POST** /v1/tcg/{game}/queue | Join the ranked queue with an owned, legal deck (free). Returns the match at once when an opponent fits.
*TCGApi* | [**createTcgStarter**](docs/Api/TCGApi.md#createtcgstarter) | **POST** /v1/tcg/{game}/starter | Claim the free starter deck for a game, choosing its faction (once per account; account-bound, untradeable).
*TCGApi* | [**createTcgTable**](docs/Api/TCGApi.md#createtcgtable) | **POST** /v1/tcg/{game}/table | Sit at a table with your free starter deck (claimed now if you never did: starter names it, else one is picked for you): joins the oldest open 1v1 challenge, or opens one; already waiting, your own seat back.
*TCGApi* | [**createTcgTournament**](docs/Api/TCGApi.md#createtcgtournament) | **POST** /v1/tcg/{game}/tournaments | Host a Swiss tournament: name, optional top cut (4 or 8), round length, player cap and start time.
*TCGApi* | [**createTcgTournamentDrop**](docs/Api/TCGApi.md#createtcgtournamentdrop) | **POST** /v1/tcg/tournaments/{id}/drop | Leave a tournament before it starts, or drop from it (your results stand).
*TCGApi* | [**createTcgTournamentRegister**](docs/Api/TCGApi.md#createtcgtournamentregister) | **POST** /v1/tcg/tournaments/{id}/register | Enter a tournament with an owned, legal deck before it starts.
*TCGApi* | [**createTcgTournamentStart**](docs/Api/TCGApi.md#createtcgtournamentstart) | **POST** /v1/tcg/tournaments/{id}/start | As the host, start the tournament: Swiss rounds are sized to the field and round 1 is dealt.
*TCGApi* | [**deleteTcgDeck**](docs/Api/TCGApi.md#deletetcgdeck) | **DELETE** /v1/tcg/decks/{id} | Delete one of your decks.
*TCGApi* | [**deleteTcgQueue**](docs/Api/TCGApi.md#deletetcgqueue) | **DELETE** /v1/tcg/{game}/queue | Leave the ranked queue.
*TCGApi* | [**getTcgCreatorGamePrint**](docs/Api/TCGApi.md#gettcgcreatorgameprint) | **GET** /v1/tcg/creator/games/{id}/print | Print file links for your own creator card game (owner only): the set&#39;s print file, home sheets and a proof, for its newest version.
*TCGApi* | [**getTcgCreatorGamePrintByKind**](docs/Api/TCGApi.md#gettcgcreatorgameprintbykind) | **GET** /v1/tcg/creator/games/{id}/print/{kind} | A PDF of your own creator card game (owner only): kind set | sheet | proof; ?version&#x3D;, ?paper&#x3D;letter|a4, ?card&#x3D; for a proof. Binary (application/pdf).
*TCGApi* | [**getTcgLadder**](docs/Api/TCGApi.md#gettcgladder) | **GET** /v1/tcg/{game}/ladder | The season&#39;s ranked leaderboard for a game: place, rating, tier and record (named only where the player chose to be).
*TCGApi* | [**getTcgLadderMe**](docs/Api/TCGApi.md#gettcgladderme) | **GET** /v1/tcg/{game}/ladder/me | Your ranked rating, tier, place and record this season, and whether you are queued.
*TCGApi* | [**getTcgMatch**](docs/Api/TCGApi.md#gettcgmatch) | **GET** /v1/tcg/{game}/matches | Your recent matches, and open challenges you could join.
*TCGApi* | [**getTcgMatchById**](docs/Api/TCGApi.md#gettcgmatchbyid) | **GET** /v1/tcg/matches/{id} | Your view of a match (no hidden information) and, on your turn, every legal move.
*TCGApi* | [**getTcgMe**](docs/Api/TCGApi.md#gettcgme) | **GET** /v1/tcg/{game}/me | Your starter faction, collection (card id -&gt; copies), decks and earned packs.
*TCGApi* | [**getTcgPrint**](docs/Api/TCGApi.md#gettcgprint) | **GET** /v1/tcg/{game}/print | Print files for one of Crossly&#39;s own card games: a card proof (template), 3 x 3 Letter/A4 home sheets with crop marks, and the set&#39;s print file (63 x 88 mm, 3 mm bleed).
*TCGApi* | [**getTcgTournament**](docs/Api/TCGApi.md#gettcgtournament) | **GET** /v1/tcg/tournaments/{id} | A tournament&#39;s standings (points, opponents&#39; and game win %), this round&#39;s pairings and your seat.
*TCGApi* | [**listTcgCards**](docs/Api/TCGApi.md#listtcgcards) | **GET** /v1/tcg/{game}/cards | The game&#39;s card pool: every card with its rules text, stats, rarity and collector number.
*TCGApi* | [**listTcgGames**](docs/Api/TCGApi.md#listtcggames) | **GET** /v1/tcg/games | Crossly&#39;s own card games: id, name, seats and card count.
*TCGApi* | [**listTcgTournaments**](docs/Api/TCGApi.md#listtcgtournaments) | **GET** /v1/tcg/{game}/tournaments | A game&#39;s recent and upcoming Swiss tournaments (free to enter; prizes are earned packs).
*TCGCreatorsApi* | [**createTcgCreatorGame**](docs/Api/TCGCreatorsApi.md#createtcgcreatorgame) | **POST** /v1/tcg/creator/games | Submit a card-game package version for review: game.json, cards.json, rules/game.js, thumb.png, art/_*.png as { path, base64 }. Checked, conformance-run, art quarantined, then reviewed by a person.
*TCGCreatorsApi* | [**createTcgCreatorGameCheck**](docs/Api/TCGCreatorsApi.md#createtcgcreatorgamecheck) | **POST** /v1/tcg/creator/games/check | Check a card-game package exactly as a submission is checked -- the static report and bot games played against your rules in the sandbox -- storing nothing. Files as { path, base64 }.
*TCGCreatorsApi* | [**createTcgCreatorGamePackOpen**](docs/Api/TCGCreatorsApi.md#createtcgcreatorgamepackopen) | **POST** /v1/tcg/creator/games/{id}/packs/{packId}/open | Open a booster you hold: the game&#39;s rules pick the pulls, the pack is used up, and one COSM copy per card joins your collection (logged with its seed).
*TCGCreatorsApi* | [**createTcgCreatorGameStarter**](docs/Api/TCGCreatorsApi.md#createtcgcreatorgamestarter) | **POST** /v1/tcg/creator/games/{id}/starter | Claim a creator game&#39;s free starter deck by its key (once per account; account-bound, never tradeable).
*TCGCreatorsApi* | [**createTcgCreatorGameVersionWithdraw**](docs/Api/TCGCreatorsApi.md#createtcgcreatorgameversionwithdraw) | **POST** /v1/tcg/creator/games/{id}/versions/{v}/withdraw | Withdraw one of your versions that is still waiting for review.
*TCGCreatorsApi* | [**getTcgCreatorGame**](docs/Api/TCGCreatorsApi.md#gettcgcreatorgame) | **GET** /v1/tcg/creator/games/{id} | One live creator card game: its set, every card (rules text, rarity, art URL, game data) and its COSM prices.
*TCGCreatorsApi* | [**getTcgCreatorGameCollection**](docs/Api/TCGCreatorsApi.md#gettcgcreatorgamecollection) | **GET** /v1/tcg/creator/games/{id}/collection | Your playable copies of a creator game: card id -&gt; copies (free starter plus every COSM copy you hold).
*TCGCreatorsApi* | [**getTcgCreatorGamePopularity**](docs/Api/TCGCreatorsApi.md#gettcgcreatorgamepopularity) | **GET** /v1/tcg/creator/games/{id}/popularity | The set&#39;s progress toward going on chain: distinct collectors, packs opened and resales against the bar; when it passes, every holder may mint their cards as NFTs.
*TCGCreatorsApi* | [**getTcgCreatorGameShelf**](docs/Api/TCGCreatorsApi.md#gettcgcreatorgameshelf) | **GET** /v1/tcg/creator/games/{id}/shelf | The game&#39;s COSM shelf: the booster and every single, each with its COSM design id (buy via /api/v1/cosm/cosmetics/:id/buy), price, edition cap and copies issued.
*TCGCreatorsApi* | [**listTcgCreatorGamePacks**](docs/Api/TCGCreatorsApi.md#listtcgcreatorgamepacks) | **GET** /v1/tcg/creator/games/{id}/packs | Your unopened boosters of a creator game.
*TCGCreatorsApi* | [**listTcgCreatorGames**](docs/Api/TCGCreatorsApi.md#listtcgcreatorgames) | **GET** /v1/tcg/creator/games | Live creator card games: name, set, description, typical match length, frame colours, thumbnail.
*TCGCreatorsApi* | [**listTcgCreatorMine**](docs/Api/TCGCreatorsApi.md#listtcgcreatormine) | **GET** /v1/tcg/creator/mine | Your creator card games and every version with its review state and note.
*TaxApi* | [**createMileage**](docs/Api/TaxApi.md#createmileage) | **POST** /v1/mileage | Create a mileage entry.
*TaxApi* | [**deleteMileage**](docs/Api/TaxApi.md#deletemileage) | **DELETE** /v1/mileage/{id} | Delete a mileage entry.
*TaxApi* | [**getBookTaxProfile**](docs/Api/TaxApi.md#getbooktaxprofile) | **GET** /v1/books/tax-profile | Your tax profile: time zone for books boundaries, filing status, state, set-aside and rate assumptions, accounting method, and business name, EIN and address.
*TaxApi* | [**getMileageSummary**](docs/Api/TaxApi.md#getmileagesummary) | **GET** /v1/mileage/summary | Annual mileage totals + IRS deduction. Each trip is priced at the IRS rate on its own date (2026 has two rates, listed in &#x60;rates&#x60;); &#x60;ratePerMile&#x60; is the January rate.
*TaxApi* | [**getOrderSalesTax**](docs/Api/TaxApi.md#getordersalestax) | **GET** /v1/orders/{id}/sales-tax | Who collected sales tax on one Crossly marketplace order, where, and the seller notice.
*TaxApi* | [**getTaxSalesTax**](docs/Api/TaxApi.md#gettaxsalestax) | **GET** /v1/tax/sales-tax | Crossly marketplace sales Crossly did not collect sales tax on, by jurisdiction.
*TaxApi* | [**getTaxScheduleC**](docs/Api/TaxApi.md#gettaxschedulec) | **GET** /v1/tax/schedule-c | Schedule C JSON for a tax year (default the current year), from the same P&amp;L as GET /v1/books: line 1 gross receipts before refunds, line 2 refunds, COGS in Part III, completed sales only. GET /v1/books has the full P&amp;L by period.
*TaxApi* | [**listMileage**](docs/Api/TaxApi.md#listmileage) | **GET** /v1/mileage | List mileage entries, newest trip first, paged (limit up to 500). Narrow by year and/or an inclusive from/to date range.
*TaxApi* | [**listTaxCrosslyCollects**](docs/Api/TaxApi.md#listtaxcrosslycollects) | **GET** /v1/tax/crossly-collects | Where Crossly collects sales tax today (its active Stripe Tax registrations).
*TaxApi* | [**listTaxSalesTaxNotCollected**](docs/Api/TaxApi.md#listtaxsalestaxnotcollected) | **GET** /v1/tax/sales-tax/not-collected | The individual Crossly sales Crossly did not collect sales tax on, newest first.
*TaxApi* | [**updateBookTaxProfile**](docs/Api/TaxApi.md#updatebooktaxprofile) | **PUT** /v1/books/tax-profile | Update your tax profile: time zone, filing status, state, set-aside and rate assumptions (basis points), accounting method, business name, EIN and address. Fields left out are unchanged.
*TaxApi* | [**updateMileage**](docs/Api/TaxApi.md#updatemileage) | **PATCH** /v1/mileage/{id} | Update a mileage entry.
*TaxonomyApi* | [**getCategoryById**](docs/Api/TaxonomyApi.md#getcategorybyid) | **GET** /v1/categories/{id} | One canonical category and the category it maps to on each marketplace.
*TaxonomyApi* | [**getTaxonomyCategory**](docs/Api/TaxonomyApi.md#gettaxonomycategory) | **GET** /v1/taxonomy/{platform}/categories | Categories for a platform. Default is top-level; pass &#x60;?parent&#x3D;&lt;categoryId&gt;&#x60; to drill down one level (supported on cookie platforms whose recipe returns flat parent_id-linked rows).
*TaxonomyApi* | [**getTaxonomyCategoryAspect**](docs/Api/TaxonomyApi.md#gettaxonomycategoryaspect) | **GET** /v1/taxonomy/{platform}/categories/{id}/aspects | Item-specific aspects (eBay) / properties (Etsy) / hard-coded enums (cookie platforms) for a category.
*TaxonomyApi* | [**getTaxonomyCategoryChildren**](docs/Api/TaxonomyApi.md#gettaxonomycategorychildren) | **GET** /v1/taxonomy/{platform}/categories/{id}/children | Direct children of a category node.
*TaxonomyApi* | [**getTaxonomyRequiredField**](docs/Api/TaxonomyApi.md#gettaxonomyrequiredfield) | **GET** /v1/taxonomy/{platform}/required-fields | Normalized field schema the seller needs to fill before crossposting to this platform. Combines master fields (title/description/price/condition) with platform-specific overrides.
*TaxonomyApi* | [**listCategoryAspects**](docs/Api/TaxonomyApi.md#listcategoryaspects) | **GET** /v1/categories/{id}/aspects | Item specifics for a canonical category: required/optional, known values, per-marketplace names.
*TaxonomyApi* | [**listCategorySearch**](docs/Api/TaxonomyApi.md#listcategorysearch) | **GET** /v1/categories/search | Search or browse Crossly&#39;s canonical categories (the ids listings take as categoryId).
*TaxonomyApi* | [**listTaxonomyEbayCharities**](docs/Api/TaxonomyApi.md#listtaxonomyebaycharities) | **GET** /v1/taxonomy/ebay/charities | Search eBay for Charity organisations (the charityId an eBay listing donates to).
*TaxonomyApi* | [**listTaxonomySuggest**](docs/Api/TaxonomyApi.md#listtaxonomysuggest) | **GET** /v1/taxonomy/{platform}/suggest | Reverse lookup — suggest categories matching a search phrase: eBay live; Poshmark, Mercari, Depop, Grailed, Vinted, Whatnot, Vestiaire, OfferUp, Facebook and Curtsy over their harvested trees. Etsy answers an empty list (browse its tree instead).
*TeamApi* | [**createTeamAccept**](docs/Api/TeamApi.md#createteamaccept) | **POST** /v1/team/accept | Accept a team invitation by the raw token from its link.
*TeamApi* | [**createTeamInvite**](docs/Api/TeamApi.md#createteaminvite) | **POST** /v1/team/invite | Issue a team invitation; returns the one-time accept URL (nothing is emailed).
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
*TemplatesApi* | [**getPublicTemplate**](docs/Api/TemplatesApi.md#getpublictemplate) | **GET** /v1/public/templates/{token} | A shared template by its share token (public, no auth).
*TemplatesApi* | [**listMeTemplates**](docs/Api/TemplatesApi.md#listmetemplates) | **GET** /v1/me/templates | List the seller&#39;s templates.
*TemplatesApi* | [**updateMeTemplate**](docs/Api/TemplatesApi.md#updatemetemplate) | **PATCH** /v1/me/templates/{id} | Patch a template.
*ToolboxApi* | [**createToolboxAsset**](docs/Api/ToolboxApi.md#createtoolboxasset) | **POST** /v1/toolbox/assets | Publish an asset (place nodes). Scanned (lint, text, credits, uploads) then reviewed. Free by default; paid needs Pro and a verified identity.
*ToolboxApi* | [**createToolboxAssetPurchase**](docs/Api/ToolboxApi.md#createtoolboxassetpurchase) | **POST** /v1/toolbox/assets/{assetId}/purchase | Open a Crossly checkout for a paid asset. Nothing is charged here: a person pays at checkoutUrl. The author earns 80% of net; the licence is use in your own experiences.
*ToolboxApi* | [**createToolboxAssetRetire**](docs/Api/ToolboxApi.md#createtoolboxassetretire) | **POST** /v1/toolbox/assets/{assetId}/retire | Take an asset off the store for good. Licences already sold keep working.
*ToolboxApi* | [**createToolboxAssetUse**](docs/Api/ToolboxApi.md#createtoolboxassetuse) | **POST** /v1/toolbox/assets/{assetId}/use | Get the asset&#39;s nodes stamped with its id for a place you can edit; insert:true also inserts them into the place&#39;s live session. Paid assets need the experience owner&#39;s licence.
*ToolboxApi* | [**createToolboxAssetVersion**](docs/Api/ToolboxApi.md#createtoolboxassetversion) | **POST** /v1/toolbox/assets/{assetId}/versions | A new version (reviewed); the live one keeps serving until it is approved.
*ToolboxApi* | [**createToolboxPurchaseRefund**](docs/Api/ToolboxApi.md#createtoolboxpurchaserefund) | **POST** /v1/toolbox/purchases/{purchaseId}/refund | Refund a licence within 14 days while no published version of yours uses the asset. Ends the licence; the author&#39;s share is reversed.
*ToolboxApi* | [**deleteToolboxAssetRatingMine**](docs/Api/ToolboxApi.md#deletetoolboxassetratingmine) | **DELETE** /v1/toolbox/assets/{assetId}/ratings/mine | Remove your rating of an asset.
*ToolboxApi* | [**getToolboxAsset**](docs/Api/ToolboxApi.md#gettoolboxasset) | **GET** /v1/toolbox/assets/{assetId} | One asset: versions, credits (assets it includes), licence, contents, your purchase.
*ToolboxApi* | [**getToolboxAssetRating**](docs/Api/ToolboxApi.md#gettoolboxassetrating) | **GET** /v1/toolbox/assets/{assetId}/ratings | Ratings of an asset: average stars, breakdown, recent reviews, yours, and whether you may rate it.
*ToolboxApi* | [**getToolboxPurchase**](docs/Api/ToolboxApi.md#gettoolboxpurchase) | **GET** /v1/toolbox/purchases/{purchaseId} | A purchase: status, price, tax, refundable until.
*ToolboxApi* | [**listToolboxAssets**](docs/Api/ToolboxApi.md#listtoolboxassets) | **GET** /v1/toolbox/assets | Search the Toolbox: models, scripts, sounds, images, packages. Free and paid; &#x60;owned&#x60; says whether you may insert it now.
*ToolboxApi* | [**listToolboxLibrary**](docs/Api/ToolboxApi.md#listtoolboxlibrary) | **GET** /v1/toolbox/library | Assets you may insert: licences you bought, your own, free ones you used.
*ToolboxApi* | [**listToolboxMine**](docs/Api/ToolboxApi.md#listtoolboxmine) | **GET** /v1/toolbox/mine | Your published assets: review state, reviewer note, what each earned you.
*ToolboxApi* | [**listToolboxSales**](docs/Api/ToolboxApi.md#listtoolboxsales) | **GET** /v1/toolbox/sales | Your Toolbox sales: gross, net, your 80% share after refunds. Never who bought.
*ToolboxApi* | [**updateToolboxAsset**](docs/Api/ToolboxApi.md#updatetoolboxasset) | **PATCH** /v1/toolbox/assets/{assetId} | Edit name, description, tags, thumbnail or price.
*ToolboxApi* | [**updateToolboxAssetRatingMine**](docs/Api/ToolboxApi.md#updatetoolboxassetratingmine) | **PUT** /v1/toolbox/assets/{assetId}/ratings/mine | Rate an asset you bought or installed: 1–5 stars and an optional review (1000 characters). Not your own.
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
*VaultMarketsApi* | [**createVaultMarketAutoBuyPause**](docs/Api/VaultMarketsApi.md#createvaultmarketautobuypause) | **POST** /v1/vault-markets/auto-buy/pause | Pause Auto-buy with payouts: the budget and want list stay; no payouts are counted and nothing is bought.
*VaultMarketsApi* | [**createVaultMarketAutoBuyResume**](docs/Api/VaultMarketsApi.md#createvaultmarketautobuyresume) | **POST** /v1/vault-markets/auto-buy/resume | Resume Auto-buy with payouts: payouts released from now on count.
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
*VaultMarketsApi* | [**createVaultMarketOptionCombo**](docs/Api/VaultMarketsApi.md#createvaultmarketoptioncombo) | **POST** /v1/vault-markets/options/combos | Place a strategy: 2 to 4 legs on one underlying with ratios, a quantity (units, three decimals) and ONE signed net limit per unit (+ the most you pay, - the least credit you take). Margined on the combined scenario loss of all its legs; matched against the combo book, then the legs&#39; own books; every leg fills at once or none does. Crossly venue only (409 combos_self_venue_only on the partner venue).
*VaultMarketsApi* | [**createVaultMarketOptionComboCancel**](docs/Api/VaultMarketsApi.md#createvaultmarketoptioncombocancel) | **POST** /v1/vault-markets/options/combos/{id}/cancel | Cancel a working strategy.
*VaultMarketsApi* | [**createVaultMarketOptionComboRfq**](docs/Api/VaultMarketsApi.md#createvaultmarketoptioncomborfq) | **POST** /v1/vault-markets/options/combos/rfq | Ask makers for a firm net price on a whole strategy (legs, quantity, an optional limit that is never shown). Crossly venue only.
*VaultMarketsApi* | [**createVaultMarketOptionComboRfqAccept**](docs/Api/VaultMarketsApi.md#createvaultmarketoptioncomborfqaccept) | **POST** /v1/vault-markets/options/combos/rfq/{id}/accept | Take a live, firm answer: both strategies go through the normal path (margin, pre-trade risk), every leg at once.
*VaultMarketsApi* | [**createVaultMarketOptionComboRfqCancel**](docs/Api/VaultMarketsApi.md#createvaultmarketoptioncomborfqcancel) | **POST** /v1/vault-markets/options/combos/rfq/{id}/cancel | Cancel your open strategy quote request.
*VaultMarketsApi* | [**createVaultMarketOptionComboRfqRespond**](docs/Api/VaultMarketsApi.md#createvaultmarketoptioncomborfqrespond) | **POST** /v1/vault-markets/options/combos/rfq/{id}/respond | Answer a strategy quote request with a firm net price per unit in the canonical terms, good for 60 seconds; a new answer replaces your last.
*VaultMarketsApi* | [**createVaultMarketOptionComboRfqResponseWithdraw**](docs/Api/VaultMarketsApi.md#createvaultmarketoptioncomborfqresponsewithdraw) | **POST** /v1/vault-markets/options/combos/rfq/responses/{id}/withdraw | Withdraw your live answer to a strategy quote request.
*VaultMarketsApi* | [**createVaultMarketOptionCoveredCall**](docs/Api/VaultMarketsApi.md#createvaultmarketoptioncoveredcall) | **POST** /v1/vault-markets/options/covered-calls | Write a covered call: lock a stored vault unit (&#x60;vaultItemId&#x60;) as collateral and sell up to one call on its own key (&#x60;contractId&#x60;, &#x60;quantity&#x60; &lt;&#x3D; 1) at a price or an implied vol. The unit cannot be sold, moved, lent or withdrawn until the call is bought back or expires; if assigned you pay cash, or the unit sells at the vault auction to cover.
*VaultMarketsApi* | [**createVaultMarketOptionCoveredCallRelease**](docs/Api/VaultMarketsApi.md#createvaultmarketoptioncoveredcallrelease) | **POST** /v1/vault-markets/options/covered-calls/{id}/release | Free a covered call&#39;s vault unit once the call it covers is closed (or covered by other units).
*VaultMarketsApi* | [**createVaultMarketOptionMmHeartbeat**](docs/Api/VaultMarketsApi.md#createvaultmarketoptionmmheartbeat) | **POST** /v1/vault-markets/options/mm/heartbeat | Keep your option quotes alive (cancel-on-disconnect pulls them after 30 s without a heartbeat).
*VaultMarketsApi* | [**createVaultMarketOptionMmQuote**](docs/Api/VaultMarketsApi.md#createvaultmarketoptionmmquote) | **POST** /v1/vault-markets/options/mm/quotes | Set (replace) a two-sided quote on an option contract: &#x60;bid&#x60; and / or &#x60;ask&#x60; each { priceCents, quantity in contracts }, posted as post-only GTC orders on the Crossly venue. Market-maker protection counts their fills; a quote inside 20% of its mid earns liquidity rewards (CBX).
*VaultMarketsApi* | [**createVaultMarketOptionMmQuotePull**](docs/Api/VaultMarketsApi.md#createvaultmarketoptionmmquotepull) | **POST** /v1/vault-markets/options/mm/quotes/pull | Pull your option quotes on one contract (&#x60;contractId&#x60;) or all of them.
*VaultMarketsApi* | [**createVaultMarketOptionOrder**](docs/Api/VaultMarketsApi.md#createvaultmarketoptionorder) | **POST** /v1/vault-markets/options/orders | Place an options order: &#x60;contractId&#x60;, &#x60;side&#x60;, &#x60;quantity&#x60; in contracts (three decimals), a &#x60;priceCents&#x60; or an &#x60;iv&#x60; (&#x60;quoteMode&#x60;), &#x60;tif&#x60; gtc / gtd (with &#x60;expiresAt&#x60;) / ioc, &#x60;postOnly&#x60;. Idempotent on &#x60;clientOrderId&#x60;. On the Crossly venue it matches price-time with self-trade prevention after a scenario-margin check; on the partner venue it routes to the partner (accept its &#x60;termsVersion&#x60;). &#x60;subaccountId&#x60; trades for a firm sub-account you may trade.
*VaultMarketsApi* | [**createVaultMarketOptionOrderCancel**](docs/Api/VaultMarketsApi.md#createvaultmarketoptionordercancel) | **POST** /v1/vault-markets/options/orders/{id}/cancel | Cancel a working options order (on the partner venue it is cancelled there first). A liquidation order cannot be cancelled.
*VaultMarketsApi* | [**createVaultMarketOptionPracticeCombo**](docs/Api/VaultMarketsApi.md#createvaultmarketoptionpracticecombo) | **POST** /v1/vault-markets/options/practice/combos | A practice strategy (play money): the same ticket as a real one, filled at the practice maker&#39;s quotes when the net is inside the limit.
*VaultMarketsApi* | [**createVaultMarketOptionPracticeOrder**](docs/Api/VaultMarketsApi.md#createvaultmarketoptionpracticeorder) | **POST** /v1/vault-markets/options/practice/orders | Place a practice options order (the same ticket as a real one; fills against the practice maker at the reference vol). Play money only.
*VaultMarketsApi* | [**createVaultMarketOptionPracticeOrderCancel**](docs/Api/VaultMarketsApi.md#createvaultmarketoptionpracticeordercancel) | **POST** /v1/vault-markets/options/practice/orders/{id}/cancel | Cancel a working practice options order.
*VaultMarketsApi* | [**createVaultMarketOptionPracticeReset**](docs/Api/VaultMarketsApi.md#createvaultmarketoptionpracticereset) | **POST** /v1/vault-markets/options/practice/reset | Start the options practice account again with $10,000: positions and working orders are cleared.
*VaultMarketsApi* | [**createVaultMarketOptionQuote**](docs/Api/VaultMarketsApi.md#createvaultmarketoptionquote) | **POST** /v1/vault-markets/options/quote | Price a ticket without placing it: give a price per contract or an implied vol (&#x60;quoteMode&#x60;), get the other back, the premium and fee, the Greeks for your size, the payoff at expiry and the margin it would need on your account (authoritative on the Crossly venue, an estimate when the partner clears). A bad entry is reported, not thrown.
*VaultMarketsApi* | [**createVaultMarketOptionRfq**](docs/Api/VaultMarketsApi.md#createvaultmarketoptionrfq) | **POST** /v1/vault-markets/options/rfq | Ask for a quote on an option contract: &#x60;side&#x60;, &#x60;quantity&#x60; in contracts, an optional &#x60;limitCents&#x60; (never shown). Makers quoting the series, the underlying&#39;s DMM and LPs and approved dealers are told anonymously; answers are firm for 60 s.
*VaultMarketsApi* | [**createVaultMarketOptionRfqAccept**](docs/Api/VaultMarketsApi.md#createvaultmarketoptionrfqaccept) | **POST** /v1/vault-markets/options/rfq/{id}/accept | Take a live answer (&#x60;responseId&#x60;) to your option quote request: it trades through the options book at that price or better, with margin and self-trade prevention.
*VaultMarketsApi* | [**createVaultMarketOptionRfqCancel**](docs/Api/VaultMarketsApi.md#createvaultmarketoptionrfqcancel) | **POST** /v1/vault-markets/options/rfq/{id}/cancel | Cancel your open option quote request.
*VaultMarketsApi* | [**createVaultMarketOptionRfqRespond**](docs/Api/VaultMarketsApi.md#createvaultmarketoptionrfqrespond) | **POST** /v1/vault-markets/options/rfq/{id}/respond | Answer an option quote request with a firm price per contract for its full size (good for 60 s; a new answer replaces your last).
*VaultMarketsApi* | [**createVaultMarketOptionRfqResponseWithdraw**](docs/Api/VaultMarketsApi.md#createvaultmarketoptionrfqresponsewithdraw) | **POST** /v1/vault-markets/options/rfq/responses/{id}/withdraw | Withdraw your live answer to an option quote request.
*VaultMarketsApi* | [**createVaultMarketOptionRoll**](docs/Api/VaultMarketsApi.md#createvaultmarketoptionroll) | **POST** /v1/vault-markets/options/roll | Roll a position to another contract as one strategy order at one net price (+ you pay, - you receive): the close and the open fill together or not at all. &#x60;practice&#x60; rolls a practice position.
*VaultMarketsApi* | [**createVaultMarketOptionStrategyPreview**](docs/Api/VaultMarketsApi.md#createvaultmarketoptionstrategypreview) | **POST** /v1/vault-markets/options/strategies/preview | Preview a strategy before placing it: by template (underlying, kind, direction, strikes, expiries) or by legs. Returns each leg at its bid / ask, the net per unit (+ debit, - credit), the payoff at the first expiry, max profit and max loss (null &#x3D; unbounded), breakevens, net Greeks, and the scenario margin of the whole strategy next to its legs margined one by one.
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
*VaultMarketsApi* | [**createVaultMarketPredictionAccount**](docs/Api/VaultMarketsApi.md#createvaultmarketpredictionaccount) | **POST** /v1/vault-markets/predictions/account | Open your account at the live prediction venue (the partner DCM, or your own segregated account at the settlement bank). Returns &#x60;{ venue, status, opened }&#x60;.
*VaultMarketsApi* | [**createVaultMarketPredictionAlert**](docs/Api/VaultMarketsApi.md#createvaultmarketpredictionalert) | **POST** /v1/vault-markets/predictions/alerts | Tell me when a market&#39;s probability crosses a level: &#x60;{ marketId, levelPercent, direction }&#x60;. Returns the alert.
*VaultMarketsApi* | [**createVaultMarketPredictionCard**](docs/Api/VaultMarketsApi.md#createvaultmarketpredictioncard) | **POST** /v1/vault-markets/predictions/cards | Make an \&quot;I called it\&quot; share card for a position of yours that settled in your favour (&#x60;showAmounts&#x60; to include what you paid and won). Returns the card with its public URL.
*VaultMarketsApi* | [**createVaultMarketPredictionComboRfq**](docs/Api/VaultMarketsApi.md#createvaultmarketpredictioncomborfq) | **POST** /v1/vault-markets/predictions/combos/rfqs | Ask makers for a price on a combo: 2 to 6 legs (a market and a side each) on different underlyings, a size, and an optional limit makers never see. Pays $1 a contract if every leg comes true. &#x60;venue&#x60; paper or live.
*VaultMarketsApi* | [**createVaultMarketPredictionComboRfqAccept**](docs/Api/VaultMarketsApi.md#createvaultmarketpredictioncomborfqaccept) | **POST** /v1/vault-markets/predictions/combos/rfqs/{id}/accept | Take one live, firm answer to your combo request (&#x60;quoteId&#x60;): both stakes are locked and the combo opens. Returns the combo.
*VaultMarketsApi* | [**createVaultMarketPredictionComboRfqCancel**](docs/Api/VaultMarketsApi.md#createvaultmarketpredictioncomborfqcancel) | **POST** /v1/vault-markets/predictions/combos/rfqs/{id}/cancel | Withdraw your combo request; its answers are withdrawn too.
*VaultMarketsApi* | [**createVaultMarketPredictionComboRfqQuote**](docs/Api/VaultMarketsApi.md#createvaultmarketpredictioncomborfqquote) | **POST** /v1/vault-markets/predictions/combos/rfqs/{id}/quotes | Answer a combo request with a firm price a contract for the full size (good for 30 seconds; a new answer replaces yours). Real money needs an active prediction maker programme or approved dealer status.
*VaultMarketsApi* | [**createVaultMarketPredictionComment**](docs/Api/VaultMarketsApi.md#createvaultmarketpredictioncomment) | **POST** /v1/vault-markets/predictions/comments | Comment on a market or a series, or reply to a comment (&#x60;parentId&#x60;). Moderated like every comment on Crossly.
*VaultMarketsApi* | [**createVaultMarketPredictionCommentReport**](docs/Api/VaultMarketsApi.md#createvaultmarketpredictioncommentreport) | **POST** /v1/vault-markets/predictions/comments/{id}/report | Report a comment with a reason; enough reports hide it until ops look.
*VaultMarketsApi* | [**createVaultMarketPredictionConversion**](docs/Api/VaultMarketsApi.md#createvaultmarketpredictionconversion) | **POST** /v1/vault-markets/predictions/conversions | Split ($1 a set buys one Yes in every bucket of an expiry), merge (one Yes in every bucket gives back $1 a set before settlement) or convert (No in one bucket becomes Yes in every other) on a full bucket set. &#x60;venue&#x60; paper or live. Returns the conversion and the event after it.
*VaultMarketsApi* | [**createVaultMarketPredictionForecast**](docs/Api/VaultMarketsApi.md#createvaultmarketpredictionforecast) | **POST** /v1/vault-markets/predictions/forecasts | Forecast a market: &#x60;probabilityPercent&#x60; 0 to 100. The one standing when trading closes is scored (Brier).
*VaultMarketsApi* | [**createVaultMarketPredictionForecasterFollow**](docs/Api/VaultMarketsApi.md#createvaultmarketpredictionforecasterfollow) | **POST** /v1/vault-markets/predictions/forecasters/{id}/follow | Follow a public forecaster: you are told when they open a position or forecast (copy-watch only; nothing is ever traded for you).
*VaultMarketsApi* | [**createVaultMarketPredictionMaker**](docs/Api/VaultMarketsApi.md#createvaultmarketpredictionmaker) | **POST** /v1/vault-markets/predictions/makers | Apply to make markets in prediction ladders (one series, or all with &#x60;seriesId&#x60; null). Needs the ID check; ops approve. Returns the application.
*VaultMarketsApi* | [**createVaultMarketPredictionMakerQuote**](docs/Api/VaultMarketsApi.md#createvaultmarketpredictionmakerquote) | **POST** /v1/vault-markets/predictions/makers/quotes | Mass quote: replace your resting maker quotes on up to 50 markets with one Yes bid and one Yes ask each (post-only; an ask rests as a No bid at 100 minus it). Live quotes need an active maker programme. Returns what rests.
*VaultMarketsApi* | [**createVaultMarketPredictionOrder**](docs/Api/VaultMarketsApi.md#createvaultmarketpredictionorder) | **POST** /v1/vault-markets/predictions/orders | Place a prediction order: buy_yes, sell_yes, buy_no or sell_no; limit (priceCents 1-99 in the action&#39;s own terms) or market (IOC 10 cents through the best price); GTC, GTD (expiresAt) or IOC; post-only. Sells only what you hold. &#x60;venue&#x60; paper (practice) or live (503 until a venue is registered). Returns the order with its fills.
*VaultMarketsApi* | [**createVaultMarketPredictionOrderAmend**](docs/Api/VaultMarketsApi.md#createvaultmarketpredictionorderamend) | **POST** /v1/vault-markets/predictions/orders/{id}/amend | Amend a resting order&#39;s price (in its own terms) and/or whole size. It keeps its place in the queue only when the size goes down at the same price; otherwise it is re-queued and may trade at once. Returns the order with &#x60;keptPriority&#x60;.
*VaultMarketsApi* | [**createVaultMarketPredictionOrderBatch**](docs/Api/VaultMarketsApi.md#createvaultmarketpredictionorderbatch) | **POST** /v1/vault-markets/predictions/orders/batch | Place up to 20 orders in one call; each answers on its own (&#x60;results[]&#x60;), one refused never stops the rest.
*VaultMarketsApi* | [**createVaultMarketPredictionOrderBatchCancel**](docs/Api/VaultMarketsApi.md#createvaultmarketpredictionorderbatchcancel) | **POST** /v1/vault-markets/predictions/orders/batch-cancel | Cancel up to 20 orders in one call; each answers on its own.
*VaultMarketsApi* | [**createVaultMarketPredictionOrderCancel**](docs/Api/VaultMarketsApi.md#createvaultmarketpredictionordercancel) | **POST** /v1/vault-markets/predictions/orders/{id}/cancel | Cancel a working prediction order; the money (or practice money) it locked comes back. Returns the order.
*VaultMarketsApi* | [**createVaultMarketPredictionOrderCancelAll**](docs/Api/VaultMarketsApi.md#createvaultmarketpredictionordercancelall) | **POST** /v1/vault-markets/predictions/orders/cancel-all | Cancel every working prediction order you have, or only those on one market (&#x60;marketId&#x60;). Returns &#x60;{ cancelled }&#x60;.
*VaultMarketsApi* | [**createVaultMarketPredictionPaperReset**](docs/Api/VaultMarketsApi.md#createvaultmarketpredictionpaperreset) | **POST** /v1/vault-markets/predictions/paper/reset | Reset your practice prediction account to $1,000 of play money: working practice orders cancelled, practice positions cleared. Once a day.
*VaultMarketsApi* | [**createVaultMarketPredictionPositionClose**](docs/Api/VaultMarketsApi.md#createvaultmarketpredictionpositionclose) | **POST** /v1/vault-markets/predictions/positions/close | Close a position: your resting sells on the market are cancelled and everything you hold is sold now (market, 10-cent band) or at &#x60;priceCents&#x60;. Returns the sell order.
*VaultMarketsApi* | [**createVaultMarketPredictionPositionCloseAll**](docs/Api/VaultMarketsApi.md#createvaultmarketpredictionpositioncloseall) | **POST** /v1/vault-markets/predictions/positions/close-all | Sell all: close every open position on a venue, or only one event&#39;s (&#x60;eventId&#x60;). Each answers on its own.
*VaultMarketsApi* | [**createVaultMarketPredictionProposal**](docs/Api/VaultMarketsApi.md#createvaultmarketpredictionproposal) | **POST** /v1/vault-markets/predictions/proposals | Propose a market: an index slug or a book key, a shape (close at or above / at or below, between, touch), its strike(s) and an expiry. Ops review it; once listed you earn the creator share of Crossly&#39;s take on its fees.
*VaultMarketsApi* | [**createVaultMarketPredictionProposalCheck**](docs/Api/VaultMarketsApi.md#createvaultmarketpredictionproposalcheck) | **POST** /v1/vault-markets/predictions/proposals/check | Check a market proposal without sending it: whether the underlying may carry markets (a built-in index or a tier A key), and what is wrong with the strike or expiry.
*VaultMarketsApi* | [**createVaultMarketPredictionProposalWithdraw**](docs/Api/VaultMarketsApi.md#createvaultmarketpredictionproposalwithdraw) | **POST** /v1/vault-markets/predictions/proposals/{id}/withdraw | Withdraw a proposal still waiting for review.
*VaultMarketsApi* | [**createVaultMarketPredictionSettlementDispute**](docs/Api/VaultMarketsApi.md#createvaultmarketpredictionsettlementdispute) | **POST** /v1/vault-markets/predictions/settlements/{id}/dispute | Dispute a settlement inside its 24-hour review window (you must hold a position in the market). Payout waits for the venue&#39;s decision. Returns &#x60;{ settlementId, status }&#x60;.
*VaultMarketsApi* | [**createVaultMarketPredictionTerm**](docs/Api/VaultMarketsApi.md#createvaultmarketpredictionterm) | **POST** /v1/vault-markets/predictions/terms | Accept the current prediction-market contract terms (PREDICTION_TERMS_VERSION), needed for every real-money order. Returns &#x60;{ termsVersion, venue }&#x60;.
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
*VaultMarketsApi* | [**createVaultMarketShareAutoInvest**](docs/Api/VaultMarketsApi.md#createvaultmarketshareautoinvest) | **POST** /v1/vault-markets/shares/auto-invest | Start auto-invest: &#x60;amountCents&#x60; ($5-$10,000) &#x60;every&#x60; week or month into &#x60;seriesIds&#x60; (equal weights) or &#x60;targets&#x60; (seriesId + weightBps summing to 10,000) or a &#x60;basketId&#x60; (with &#x60;rebalance&#x60; to keep your own shares on its weights). Whole shares only; the rest rolls over. Offerings are subscribed at their price; trading books are bought at the best ask up to &#x60;maxPremiumBps&#x60; over the indicative value. &#x60;practice&#x60; runs it on paper.
*VaultMarketsApi* | [**createVaultMarketShareAutoInvestRun**](docs/Api/VaultMarketsApi.md#createvaultmarketshareautoinvestrun) | **POST** /v1/vault-markets/shares/auto-invest/{id}/run | Run a plan now (once a minute at most); the schedule does not move.
*VaultMarketsApi* | [**createVaultMarketShareAutoInvestUpdate**](docs/Api/VaultMarketsApi.md#createvaultmarketshareautoinvestupdate) | **POST** /v1/vault-markets/shares/auto-invest/{id}/update | Change a plan (amount, cadence, series or weights, cap, rebalance) or set its &#x60;status&#x60; active, paused or cancelled.
*VaultMarketsApi* | [**createVaultMarketShareBasketBuy**](docs/Api/VaultMarketsApi.md#createvaultmarketsharebasketbuy) | **POST** /v1/vault-markets/shares/baskets/{id}/buy | Buy a basket once: &#x60;amountCents&#x60; split by its live weights into whole shares of each series, in your own name (offerings subscribed, trading books at the best ask up to &#x60;maxPremiumBps&#x60;). &#x60;practice&#x60; buys on paper.
*VaultMarketsApi* | [**createVaultMarketShareBuyoutFund**](docs/Api/VaultMarketsApi.md#createvaultmarketsharebuyoutfund) | **POST** /v1/vault-markets/shares/buyouts/{id}/fund | Your whole-unit bid reached the reserve: fund the price through your investor account within 72 hours to buy the item from its holders (no vote).
*VaultMarketsApi* | [**createVaultMarketShareBuyoutVote**](docs/Api/VaultMarketsApi.md#createvaultmarketsharebuyoutvote) | **POST** /v1/vault-markets/shares/buyouts/{id}/vote | Vote &#x60;yes&#x60; or &#x60;no&#x60; on a buyout with the shares you held when the vote opened. You can change your vote while it is open.
*VaultMarketsApi* | [**createVaultMarketShareBuyoutWithdraw**](docs/Api/VaultMarketsApi.md#createvaultmarketsharebuyoutwithdraw) | **POST** /v1/vault-markets/shares/buyouts/{id}/withdraw | Withdraw your buyout bid before its vote opens; the escrow is refunded.
*VaultMarketsApi* | [**createVaultMarketShareCard**](docs/Api/VaultMarketsApi.md#createvaultmarketsharecard) | **POST** /v1/vault-markets/share-cards | Make a verified share card of a position, a vault unit, a public index or your portfolio (&#x60;kind&#x60;, &#x60;refId&#x60;). The % on it is the price move since your real fill; amounts stay hidden unless &#x60;showAmounts&#x60;.
*VaultMarketsApi* | [**createVaultMarketShareGiftAccept**](docs/Api/VaultMarketsApi.md#createvaultmarketsharegiftaccept) | **POST** /v1/vault-markets/shares/gifts/{id}/accept | Accept a share gift. Needs your own verified Vault Shares investor account; the venue then moves the shares to you on the register.
*VaultMarketsApi* | [**createVaultMarketShareGiftCancel**](docs/Api/VaultMarketsApi.md#createvaultmarketsharegiftcancel) | **POST** /v1/vault-markets/shares/gifts/{id}/cancel | Cancel a gift you offered, before it is accepted: the shares are free again.
*VaultMarketsApi* | [**createVaultMarketShareGiftDecline**](docs/Api/VaultMarketsApi.md#createvaultmarketsharegiftdecline) | **POST** /v1/vault-markets/shares/gifts/{id}/decline | Decline a share gift offered to you.
*VaultMarketsApi* | [**createVaultMarketShareInvestor**](docs/Api/VaultMarketsApi.md#createvaultmarketshareinvestor) | **POST** /v1/vault-markets/shares/investor | Open or update your investor account at the venue: accept the current investor terms (&#x60;acceptTerms&#x60;), and state accredited status or your annual income and net worth for the Reg A+ limit. Needs a verified ID.
*VaultMarketsApi* | [**createVaultMarketShareOrderCancel**](docs/Api/VaultMarketsApi.md#createvaultmarketshareordercancel) | **POST** /v1/vault-markets/shares/orders/{id}/cancel | Cancel one of your open share-book orders.
*VaultMarketsApi* | [**createVaultMarketSharePaperOrderCancel**](docs/Api/VaultMarketsApi.md#createvaultmarketsharepaperordercancel) | **POST** /v1/vault-markets/shares/paper/orders/{id}/cancel | Cancel an open practice order.
*VaultMarketsApi* | [**createVaultMarketSharePaperReset**](docs/Api/VaultMarketsApi.md#createvaultmarketsharepaperreset) | **POST** /v1/vault-markets/shares/paper/reset | Start the practice account over with fresh play money (once a day).
*VaultMarketsApi* | [**createVaultMarketSharePaperSeryOrder**](docs/Api/VaultMarketsApi.md#createvaultmarketsharepaperseryorder) | **POST** /v1/vault-markets/shares/paper/series/{id}/orders | Place a practice order (play money) with the same rules as the real share book.
*VaultMarketsApi* | [**createVaultMarketSharePaperSerySubscribe**](docs/Api/VaultMarketsApi.md#createvaultmarketsharepaperserysubscribe) | **POST** /v1/vault-markets/shares/paper/series/{id}/subscribe | Subscribe with play money to a practice series’ offering.
*VaultMarketsApi* | [**createVaultMarketShareRoomHide**](docs/Api/VaultMarketsApi.md#createvaultmarketshareroomhide) | **POST** /v1/vault-markets/shares/room/{id}/hide | Take down one of your own holder-room posts (&#x60;reason&#x60;).
*VaultMarketsApi* | [**createVaultMarketShareSery**](docs/Api/VaultMarketsApi.md#createvaultmarketsharesery) | **POST** /v1/vault-markets/shares/series | Propose a Vault Shares series for one of your units (&#x60;vaultItemId&#x60;), keeping &#x60;retainedShares&#x60; (0-50%), with an optional minimum raise, offering length (7-60 days) and reserve. Ops then qualify it, attach the offering circular and open the offering. With no venue it is a practice series. Pass &#x60;requestId&#x60; to make a retry safe.
*VaultMarketsApi* | [**createVaultMarketShareSeryBuyout**](docs/Api/VaultMarketsApi.md#createvaultmarketshareserybuyout) | **POST** /v1/vault-markets/shares/series/{id}/buyouts | Bid for the whole item (&#x60;offerCents&#x60;, at least the mark x 1.10). The bid is escrowed at the venue, then holders vote by shares: two-thirds yes accepts, a majority against rejects, 14 days with no majority against accepts. Accepted, the item is yours and the price is paid out pro rata after storage and insurance.
*VaultMarketsApi* | [**createVaultMarketShareSeryGift**](docs/Api/VaultMarketsApi.md#createvaultmarketshareserygift) | **POST** /v1/vault-markets/shares/series/{id}/gifts | Give whole &#x60;shares&#x60; of a series to someone (&#x60;to&#x60;: their @handle, email or user id), with an optional &#x60;message&#x60;. The shares are set aside until they accept (14 days). On acceptance the broker-dealer or transfer agent verifies them and moves the shares on the register: no money moves, and your cost basis and holding date carry over.
*VaultMarketsApi* | [**createVaultMarketShareSeryOrder**](docs/Api/VaultMarketsApi.md#createvaultmarketshareseryorder) | **POST** /v1/vault-markets/shares/series/{id}/orders | Place an order on a series’ share book: &#x60;side&#x60;, &#x60;type&#x60; limit or market (immediate-or-cancel inside a 10% band), &#x60;tif&#x60; gtc / gtd (&#x60;expiresAt&#x60;) / ioc, whole &#x60;shares&#x60; or a buy’s &#x60;amountCents&#x60; (turned into whole shares at the most it could pay), integer &#x60;limitCents&#x60; a share, &#x60;postOnly&#x60;. Fees: maker 0, taker 100 bps plus the broker-dealer pass-through. Self-trades are prevented. Pass &#x60;requestId&#x60; to make a retry safe.
*VaultMarketsApi* | [**createVaultMarketShareSeryRecombine**](docs/Api/VaultMarketsApi.md#createvaultmarketshareseryrecombine) | **POST** /v1/vault-markets/shares/series/{id}/recombine | You hold every share: take the item back whole. With &#x60;withdraw&#x60;, it ships home at once (any receipt token is burned as it leaves). Storage and insurance the series owed stay with the unit.
*VaultMarketsApi* | [**createVaultMarketShareSeryRoom**](docs/Api/VaultMarketsApi.md#createvaultmarketshareseryroom) | **POST** /v1/vault-markets/shares/series/{id}/room | Post in the holder room (shareholders only), up to 1,000 characters.
*VaultMarketsApi* | [**createVaultMarketShareSerySubscribe**](docs/Api/VaultMarketsApi.md#createvaultmarketshareserysubscribe) | **POST** /v1/vault-markets/shares/series/{id}/subscribe | Subscribe for whole &#x60;shares&#x60; in an open offering at its fixed price. The money goes into the venue’s escrow in your own name and is refunded if the offering misses its minimum. Reg A+ limits apply. A joint vault member with trade rights may pass &#x60;jointVaultId&#x60;. Pass &#x60;requestId&#x60; to make a retry safe.
*VaultMarketsApi* | [**createVaultMarketShareSeryUnwatch**](docs/Api/VaultMarketsApi.md#createvaultmarketshareseryunwatch) | **POST** /v1/vault-markets/shares/series/{id}/unwatch | Stop being told about a drop (&#x60;kind&#x60; notify) or leave its waitlist (&#x60;kind&#x60; waitlist).
*VaultMarketsApi* | [**createVaultMarketShareSeryUpdate**](docs/Api/VaultMarketsApi.md#createvaultmarketshareseryupdate) | **POST** /v1/vault-markets/shares/series/{id}/updates | Post an update on your own item’s series (you are its originator): &#x60;kind&#x60; story, provenance, condition, appraisal, exhibition or event, a &#x60;title&#x60;, a &#x60;body&#x60;, an optional https &#x60;mediaUrl&#x60;, &#x60;holdersOnly&#x60;. Holders are told.
*VaultMarketsApi* | [**createVaultMarketShareSeryWatch**](docs/Api/VaultMarketsApi.md#createvaultmarketshareserywatch) | **POST** /v1/vault-markets/shares/series/{id}/watch | Ask to be told about a drop (&#x60;kind&#x60; notify: when your early access opens and when it opens to everyone) or join the waitlist of a sold-out first-come offering (&#x60;kind&#x60; waitlist, with the &#x60;shares&#x60; you want).
*VaultMarketsApi* | [**createVaultMarketShareSeryWithdrawProposal**](docs/Api/VaultMarketsApi.md#createvaultmarketshareserywithdrawproposal) | **POST** /v1/vault-markets/shares/series/{id}/withdraw-proposal | Withdraw your own proposal before its offering opens.
*VaultMarketsApi* | [**createVaultMarketShareSubscriptionCancel**](docs/Api/VaultMarketsApi.md#createvaultmarketsharesubscriptioncancel) | **POST** /v1/vault-markets/shares/subscriptions/{id}/cancel | Cancel an escrowed subscription while its offering is still open: the escrow is refunded.
*VaultMarketsApi* | [**createVaultMarketShareViewingBook**](docs/Api/VaultMarketsApi.md#createvaultmarketshareviewingbook) | **POST** /v1/vault-markets/shares/viewings/{id}/book | Book a place on a viewing day (shareholders only), with up to the day’s &#x60;guests&#x60;. Bookings close a day before; booking again changes your guests.
*VaultMarketsApi* | [**createVaultMarketShareViewingBookingCancel**](docs/Api/VaultMarketsApi.md#createvaultmarketshareviewingbookingcancel) | **POST** /v1/vault-markets/shares/viewing-bookings/{id}/cancel | Cancel your viewing-day booking.
*VaultMarketsApi* | [**createVaultMarketShort**](docs/Api/VaultMarketsApi.md#createvaultmarketshort) | **POST** /v1/vault-markets/shorts | Short a book key: borrow &#x60;units&#x60; lent units (default 1; at most 25/10/3/1 by liquidity tier A/B/C/D) and sell each at &#x60;limitCents&#x60; or better, posting collateral for all of them (50% of the mark each; CBX counts at half, up to 30%). All units are borrowed or none unless &#x60;allowPartial&#x60;. A partial sale opens with the units sold. Returns &#x60;{ positionId, matched, units }&#x60;.
*VaultMarketsApi* | [**createVaultMarketSupplyBatchLabel**](docs/Api/VaultMarketsApi.md#createvaultmarketsupplybatchlabel) | **POST** /v1/vault-markets/supply/batches/{id}/label | Buy a box&#39;s prepaid label again after it failed (for example once a ship-from address is saved). A box that has a label keeps it.
*VaultMarketsApi* | [**createVaultMarketSupplyInvite**](docs/Api/VaultMarketsApi.md#createvaultmarketsupplyinvite) | **POST** /v1/vault-markets/supply/invites/{id} | Accept or decline a Market Open invite (&#x60;accept&#x60;).
*VaultMarketsApi* | [**createVaultMarketSupplySend**](docs/Api/VaultMarketsApi.md#createvaultmarketsupplysend) | **POST** /v1/vault-markets/supply/send | Send inventory items matched to a catalogue variant to the vault as one box: each becomes an inbound vault unit, and the box gets one prepaid inbound label (a PDF to print). Optional: auto-list each unit in the vault book at a share of the mark once stored, and lend when idle. Items that cannot go say why. Crosslisted listings stay live.
*VaultMarketsApi* | [**createVaultMarketSupplySendIn**](docs/Api/VaultMarketsApi.md#createvaultmarketsupplysendin) | **POST** /v1/vault-markets/supply/send-in | Send inventory items to the vault: &#x60;method: label&#x60; (one box on a prepaid label) or &#x60;dropoff&#x60; at a partner (&#x60;partnerId&#x60;, from the finder; you get a counter code). Each item can carry its declared value; &#x60;insured&#x60; insures the box for it.
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
*VaultMarketsApi* | [**deleteVaultMarketAutoBuy**](docs/Api/VaultMarketsApi.md#deletevaultmarketautobuy) | **DELETE** /v1/vault-markets/auto-buy | Stop Auto-buy with payouts. The history stays.
*VaultMarketsApi* | [**deleteVaultMarketBullionFamilyPeg**](docs/Api/VaultMarketsApi.md#deletevaultmarketbullionfamilypeg) | **DELETE** /v1/vault-markets/bullion/family-pegs/{id} | Stop a family-wide quote: every leg order comes off the book; what filled stays filled.
*VaultMarketsApi* | [**deleteVaultMarketBullionPeg**](docs/Api/VaultMarketsApi.md#deletevaultmarketbullionpeg) | **DELETE** /v1/vault-markets/bullion/pegs/{id} | Stop a spot-pegged quote: its resting order comes off the book; what filled stays filled.
*VaultMarketsApi* | [**deleteVaultMarketDealerBand**](docs/Api/VaultMarketsApi.md#deletevaultmarketdealerband) | **DELETE** /v1/vault-markets/dealer/bands | Stop a band on a key; its standing bid comes off.
*VaultMarketsApi* | [**deleteVaultMarketEntityMember**](docs/Api/VaultMarketsApi.md#deletevaultmarketentitymember) | **DELETE** /v1/vault-markets/entities/{id}/members/{memberId} | Admin: remove a member (or leave, yourself). An entity always keeps one admin.
*VaultMarketsApi* | [**deleteVaultMarketFollowCopyWatch**](docs/Api/VaultMarketsApi.md#deletevaultmarketfollowcopywatch) | **DELETE** /v1/vault-markets/follows/copy-watch/{handle} | Stop copy-watching a collector.
*VaultMarketsApi* | [**deleteVaultMarketIndex**](docs/Api/VaultMarketsApi.md#deletevaultmarketindex) | **DELETE** /v1/vault-markets/indexes/{slug} | Delete an index of your own. Returns &#x60;{ ok }&#x60;.
*VaultMarketsApi* | [**deleteVaultMarketLocate**](docs/Api/VaultMarketsApi.md#deletevaultmarketlocate) | **DELETE** /v1/vault-markets/locates/{id} | Release a live locate before it lapses.
*VaultMarketsApi* | [**deleteVaultMarketOpeningWaitlist**](docs/Api/VaultMarketsApi.md#deletevaultmarketopeningwaitlist) | **DELETE** /v1/vault-markets/opening/{slug}/waitlist | Leave a key&#39;s waitlist.
*VaultMarketsApi* | [**deleteVaultMarketPredictionAlert**](docs/Api/VaultMarketsApi.md#deletevaultmarketpredictionalert) | **DELETE** /v1/vault-markets/predictions/alerts/{id} | Remove a probability alert. Returns &#x60;{ ok }&#x60;.
*VaultMarketsApi* | [**deleteVaultMarketPredictionCard**](docs/Api/VaultMarketsApi.md#deletevaultmarketpredictioncard) | **DELETE** /v1/vault-markets/predictions/cards/{id} | Take an \&quot;I called it\&quot; card down; its link stops working. Returns &#x60;{ ok }&#x60;.
*VaultMarketsApi* | [**deleteVaultMarketPredictionComment**](docs/Api/VaultMarketsApi.md#deletevaultmarketpredictioncomment) | **DELETE** /v1/vault-markets/predictions/comments/{id} | Delete your comment.
*VaultMarketsApi* | [**deleteVaultMarketPredictionForecasterFollow**](docs/Api/VaultMarketsApi.md#deletevaultmarketpredictionforecasterfollow) | **DELETE** /v1/vault-markets/predictions/forecasters/{id}/follow | Stop following a forecaster.
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
*VaultMarketsApi* | [**getVaultMarketAutoBuy**](docs/Api/VaultMarketsApi.md#getvaultmarketautobuy) | **GET** /v1/vault-markets/auto-buy | Auto-buy with payouts: the share of each payout set aside as a vault buying budget, the budget, your want list with max prices, the purchase history and whether it is paused. &#x60;autoBuy&#x60; is null when it is not set up.
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
*VaultMarketsApi* | [**getVaultMarketHoldingInventoryItem**](docs/Api/VaultMarketsApi.md#getvaultmarketholdinginventoryitem) | **GET** /v1/vault-markets/holdings/{id}/inventory-item | The inventory item a vault unit of yours came from (null for a unit bought on the book).
*VaultMarketsApi* | [**getVaultMarketHoldingWithdrawQuote**](docs/Api/VaultMarketsApi.md#getvaultmarketholdingwithdrawquote) | **GET** /v1/vault-markets/holdings/{id}/withdraw-quote | What shipping one unit you own home would charge now, for &#x60;standard&#x60; and &#x60;expedited&#x60;: shipping, the storage it owes and the early-withdrawal fee (within 90 days of arriving), and the total. Read-only; ship it home with POST /api/v1/buyer/vault/:id/withdraw.
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
*VaultMarketsApi* | [**getVaultMarketItemLocation**](docs/Api/VaultMarketsApi.md#getvaultmarketitemlocation) | **GET** /v1/vault-markets/items/{inventoryItemId}/location | Where one inventory item&#39;s units are: in your own stock (warehouse) and in the vault per location, each vault unit&#39;s status (in transit, received, authenticated, graded, listed, shipped out), its Sell from first choice and whether it can be sent to the vault now (with the reason when not).
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
*VaultMarketsApi* | [**getVaultMarketOption**](docs/Api/VaultMarketsApi.md#getvaultmarketoption) | **GET** /v1/vault-markets/options | Fractional options: the venue mode (self &#x3D; Crossly is the venue and clearing house, partner &#x3D; routed to the index DCM, paper &#x3D; practice only) with the env each mode still needs, the active series and the rule book in force.
*VaultMarketsApi* | [**getVaultMarketOptionAnalytic**](docs/Api/VaultMarketsApi.md#getvaultmarketoptionanalytic) | **GET** /v1/vault-markets/options/analytics/{underlying} | Options analytics on an underlying: the vol surface (expiry x moneyness) and one expiry&#39;s smile (&#x60;expiry&#x60;), IV rank and percentile against the series&#39; own year, open interest and volume by strike and expiry, put/call ratios, the expected move to each expiry, and the historical vol of the underlying&#39;s own published series. Every implied vol is derived and display only.
*VaultMarketsApi* | [**getVaultMarketOptionAutoClose**](docs/Api/VaultMarketsApi.md#getvaultmarketoptionautoclose) | **GET** /v1/vault-markets/options/auto-close | Your auto-close rule: close positions (or only in-the-money ones) a set time before expiry with a marketable limit.
*VaultMarketsApi* | [**getVaultMarketOptionChain**](docs/Api/VaultMarketsApi.md#getvaultmarketoptionchain) | **GET** /v1/vault-markets/options/chain/{underlying} | The option chain for an underlying (index slug or book key): its expiries, and for one expiry (&#x60;expiry&#x60;, default the nearest) each strike&#39;s call and put with best bid / ask, last, open interest, the theoretical price at the reference vol, the implied vol of the mid (display only, never a mark) and the Greeks. Prices are cents per contract.
*VaultMarketsApi* | [**getVaultMarketOptionComboBook**](docs/Api/VaultMarketsApi.md#getvaultmarketoptioncombobook) | **GET** /v1/vault-markets/options/combos/book | One strategy&#39;s combo book by its canonical key (&#x60;key&#x60;, from the preview or an order): bids and asks by net price and recent strategy trades.
*VaultMarketsApi* | [**getVaultMarketOptionComboRfq**](docs/Api/VaultMarketsApi.md#getvaultmarketoptioncomborfq) | **GET** /v1/vault-markets/options/combos/rfq/{id} | One strategy quote request and its answers (all of them to the requester, your own to a responder).
*VaultMarketsApi* | [**getVaultMarketOptionContract**](docs/Api/VaultMarketsApi.md#getvaultmarketoptioncontract) | **GET** /v1/vault-markets/options/contracts/{id} | One option contract: its terms, the self-venue book and tape, its published daily settlement prices and, once settled, its settlement (value, source, flagged, and the hash chained to the previous settlement).
*VaultMarketsApi* | [**getVaultMarketOptionContractBook**](docs/Api/VaultMarketsApi.md#getvaultmarketoptioncontractbook) | **GET** /v1/vault-markets/options/contracts/{id}/book | A contract&#39;s order book on the Crossly venue (&#x60;levels&#x60;, default 20): bids and asks by price with milli-contract sizes, and the last 50 prints.
*VaultMarketsApi* | [**getVaultMarketOptionContractSettlement**](docs/Api/VaultMarketsApi.md#getvaultmarketoptioncontractsettlement) | **GET** /v1/vault-markets/options/contracts/{id}/settlement | A settled contract&#39;s settlement: the value (cents per unit of the underlying), its source (the index&#39;s frozen 7-day TWAP, the item&#39;s expiry-day A/B mark, or the last reliable value, flagged), and the hash chained to the previous settlement. Null until it settles.
*VaultMarketsApi* | [**getVaultMarketOptionHedge**](docs/Api/VaultMarketsApi.md#getvaultmarketoptionhedge) | **GET** /v1/vault-markets/options/hedges | Your hedges: long puts protecting vault units you hold (protective puts) and the vault units locked as collateral for calls you wrote (covered calls).
*VaultMarketsApi* | [**getVaultMarketOptionIv**](docs/Api/VaultMarketsApi.md#getvaultmarketoptioniv) | **GET** /v1/vault-markets/options/iv/{underlying} | The at-the-money implied volatility of the nearest expiry on an underlying, for display on its page: derived from the options book, quality C, never written as a mark.
*VaultMarketsApi* | [**getVaultMarketOptionMargin**](docs/Api/VaultMarketsApi.md#getvaultmarketoptionmargin) | **GET** /v1/vault-markets/options/margin | Your options margin: the scenario requirement (worst loss over a +/-40% price x +/-50% vol grid, with offsets from vault units and positions you hold), initial margin, equity and state (ok / call / liquidate) per underlying. Authoritative on the Crossly venue; on the partner venue the partner&#39;s figure decides and this is an estimate.
*VaultMarketsApi* | [**getVaultMarketOptionPayoff**](docs/Api/VaultMarketsApi.md#getvaultmarketoptionpayoff) | **GET** /v1/vault-markets/options/payoff | Your whole options position on one &#x60;underlying&#x60; at expiry: the P&amp;L curve over 50%..150% of spot, breakevens, and the maximum gain and loss (null when unbounded).
*VaultMarketsApi* | [**getVaultMarketOptionPosition**](docs/Api/VaultMarketsApi.md#getvaultmarketoptionposition) | **GET** /v1/vault-markets/options/positions | Your options positions: signed milli-contracts, average open price, the price it is settled to (Crossly venue), the theoretical mark, unrealised and realised P&amp;L in cents, the Greeks for your size, the protective-put flag and your auto-deleveraging queue lights. &#x60;status&#x60; open (default) / all, &#x60;subaccountId&#x60;.
*VaultMarketsApi* | [**getVaultMarketOptionPractice**](docs/Api/VaultMarketsApi.md#getvaultmarketoptionpractice) | **GET** /v1/vault-markets/options/practice | Your options practice account (play money only, $10,000 to start): cash, positions at the practice maker&#39;s price, equity and P&amp;L.
*VaultMarketsApi* | [**getVaultMarketOptionRfq**](docs/Api/VaultMarketsApi.md#getvaultmarketoptionrfq) | **GET** /v1/vault-markets/options/rfq/{id} | One option quote request: yours with every answer, or one you were sent with your own answer.
*VaultMarketsApi* | [**getVaultMarketOptionRisk**](docs/Api/VaultMarketsApi.md#getvaultmarketoptionrisk) | **GET** /v1/vault-markets/options/risk | Your options portfolio&#39;s Greeks (per underlying and total, with dollar delta and 1% gamma), a scenario&#39;s P&amp;L (&#x60;priceShift&#x60;, &#x60;volShift&#x60;, &#x60;daysForward&#x60;), a price x vol P&amp;L grid, and the beta-weighted delta against an index (&#x60;betaIndex&#x60;, default the deepest). &#x60;book&#x60; live (default) or practice.
*VaultMarketsApi* | [**getVaultMarketOracle**](docs/Api/VaultMarketsApi.md#getvaultmarketoracle) | **GET** /v1/vault-markets/oracle | Crossly as an oracle publisher (needs CROSSLY_ORACLE_PUBLISHER_KEY + CROSSLY_ORACLE_NETWORK): the network (pyth or switchboard), the ed25519 key every value is signed with, each published index feed with its latest attempt, and 24 h counts of published, skipped and failed. Only built-in indexes priced from A/B marks are published; Crossly never reads its own feed back.
*VaultMarketsApi* | [**getVaultMarketOracleBySlug**](docs/Api/VaultMarketsApi.md#getvaultmarketoraclebyslug) | **GET** /v1/vault-markets/oracle/{slug} | The latest published oracle value for an index: level, fixed-point price and confidence at the feed exponent, confidence in bps, staleness in seconds, coverage, the exact signed message and its ed25519 signature with the signer key, and whether it is fresh.
*VaultMarketsApi* | [**getVaultMarketOrderHandling**](docs/Api/VaultMarketsApi.md#getvaultmarketorderhandling) | **GET** /v1/vault-markets/order-handling | How orders are handled (the 606/607-style disclosure): one book, self-trade prevention, protected market orders, liquidations by auction, halts, dealers and fees.
*VaultMarketsApi* | [**getVaultMarketP2pDashboard**](docs/Api/VaultMarketsApi.md#getvaultmarketp2pdashboard) | **GET** /v1/vault-markets/p2p/dashboard | Peer-to-peer vault loans at a glance: what you owe as a borrower and are owed as a lender (principal + interest to the second), daily interest, called loans, your open offers, the gates and the rules (auction hours, rate ceiling, size bounds, call grace).
*VaultMarketsApi* | [**getVaultMarketP2pLoan**](docs/Api/VaultMarketsApi.md#getvaultmarketp2ploan) | **GET** /v1/vault-markets/p2p/loans/{id} | One P2P loan with its money log (fund, repay, refinance). A loan in a running refinancing auction can be read by any lender, without the log.
*VaultMarketsApi* | [**getVaultMarketPaper**](docs/Api/VaultMarketsApi.md#getvaultmarketpaper) | **GET** /v1/vault-markets/paper | Your paper trading account (play money only, never real or convertible; opened at $10,000 the first time): play cash, buying power, paper positions at the real marks, P&amp;L, working paper orders, recent paper fills and this week on the leaderboard.
*VaultMarketsApi* | [**getVaultMarketPaperQuote**](docs/Api/VaultMarketsApi.md#getvaultmarketpaperquote) | **GET** /v1/vault-markets/paper/quote | What a paper order would fill against the real book now, without placing it: units fillable inside the limit (a market order uses the 5% protection band around the mark), average price, simulated fee, and the queue ahead of any rest.
*VaultMarketsApi* | [**getVaultMarketPartnerMe**](docs/Api/VaultMarketsApi.md#getvaultmarketpartnerme) | **GET** /v1/vault-markets/partners/me | Your Vault Drop-off Partnership (null when you never applied): status, partner code, fee share and cap, finder profile, totals and batches; and whether your one-time ID check is done.
*VaultMarketsApi* | [**getVaultMarketPool**](docs/Api/VaultMarketsApi.md#getvaultmarketpool) | **GET** /v1/vault-markets/pool | The CBX market staking pool: size, value, what it lends, utilisation, rate, insurance fund.
*VaultMarketsApi* | [**getVaultMarketPopReport**](docs/Api/VaultMarketsApi.md#getvaultmarketpopreport) | **GET** /v1/vault-markets/pop-reports | Grading population report for one market (&#x60;bookKey&#x60;): focus (on a graded market: its grade, pop &#x3D; copies graded at exactly that grade, higher &#x3D; copies graded better by the same grader, total, asOf and source), graders (each grader ladder for the card, best grade first, from one report: the newest, the population feed over a hand entry on the same date), provider.connected, and status (ok, not_synced, no_report or no_source) with explain, which says in plain words what is missing. source is provider (the population feed) or ops (entered by Crossly from the grader published report). Counts only, never a price.
*VaultMarketsApi* | [**getVaultMarketPortfolio**](docs/Api/VaultMarketsApi.md#getvaultmarketportfolio) | **GET** /v1/vault-markets/portfolio | Your vault holdings at the market price, with cost and P&amp;L, and units you have out on loan.
*VaultMarketsApi* | [**getVaultMarketPortfolioHistory**](docs/Api/VaultMarketsApi.md#getvaultmarketportfoliohistory) | **GET** /v1/vault-markets/portfolio/history | Your Vault Markets value by day at the marks (vault units, units on loan, positions) and today&#39;s return against yesterday&#39;s close.
*VaultMarketsApi* | [**getVaultMarketPortfolioMargin**](docs/Api/VaultMarketsApi.md#getvaultmarketportfoliomargin) | **GET** /v1/vault-markets/portfolio-margin | Portfolio margin for a firm sub-account (&#x60;subaccountId&#x60;): eligibility with every reason (ECP, KYB, minimum equity $500k or $100k with evidenced intraday monitoring), whether it is enrolled, the latest requirement, equity, excess and state (healthy, call or buy_in), the breakdown by category and item, the partner index futures counted, and the policy. Before enrolling, a live preview.
*VaultMarketsApi* | [**getVaultMarketPosition**](docs/Api/VaultMarketsApi.md#getvaultmarketposition) | **GET** /v1/vault-markets/positions/{id} | One position with its loans, auctions and custodian instruction log.
*VaultMarketsApi* | [**getVaultMarketPositionExit**](docs/Api/VaultMarketsApi.md#getvaultmarketpositionexit) | **GET** /v1/vault-markets/positions/{id}/exits | A position&#39;s take-profit / stop-loss, if set.
*VaultMarketsApi* | [**getVaultMarketPositionRisk**](docs/Api/VaultMarketsApi.md#getvaultmarketpositionrisk) | **GET** /v1/vault-markets/positions/{id}/risk | One position&#39;s call and liquidation marks.
*VaultMarketsApi* | [**getVaultMarketPrediction**](docs/Api/VaultMarketsApi.md#getvaultmarketprediction) | **GET** /v1/vault-markets/predictions | The prediction markets home: the busiest and soonest-expiring \&quot;Will it hit?\&quot; markets with their probability (each market&#39;s own price, display only), the underlyings with markets, which venue is live, and how many positions you hold.
*VaultMarketsApi* | [**getVaultMarketPredictionAccount**](docs/Api/VaultMarketsApi.md#getvaultmarketpredictionaccount) | **GET** /v1/vault-markets/predictions/account | Your prediction-market account: the live venue, your account there and the terms you accepted, whether you may trade real money (region, age, self-exclusion) and why not, your self-set limits, and the practice account line.
*VaultMarketsApi* | [**getVaultMarketPredictionBoard**](docs/Api/VaultMarketsApi.md#getvaultmarketpredictionboard) | **GET** /v1/vault-markets/predictions/board | The prediction board the Trading Floor and the Market Open plank show: the busiest open markets and their odds. Anonymous: never who holds what.
*VaultMarketsApi* | [**getVaultMarketPredictionCombo**](docs/Api/VaultMarketsApi.md#getvaultmarketpredictioncombo) | **GET** /v1/vault-markets/predictions/combos/{id} | One of your combos.
*VaultMarketsApi* | [**getVaultMarketPredictionComboRfq**](docs/Api/VaultMarketsApi.md#getvaultmarketpredictioncomborfq) | **GET** /v1/vault-markets/predictions/combos/rfqs/{id} | One combo request: its legs and size, and the answers you can see (all of them if you asked; yours if you quoted).
*VaultMarketsApi* | [**getVaultMarketPredictionDailyPrice**](docs/Api/VaultMarketsApi.md#getvaultmarketpredictiondailyprice) | **GET** /v1/vault-markets/predictions/daily-prices | The published daily settlement price of every listed market for a day (default yesterday): the last hour&#39;s volume-weighted Yes price, else the book mid, else the prior day&#39;s, with volume and open interest.
*VaultMarketsApi* | [**getVaultMarketPredictionEvent**](docs/Api/VaultMarketsApi.md#getvaultmarketpredictionevent) | **GET** /v1/vault-markets/predictions/events/{id} | One expiry of a series (an event): its markets, what you hold in each, the real worst and best case of your holdings across them (what your limit counts), and, for a full bucket set, how many sets you could merge. &#x60;venue&#x60; paper or live.
*VaultMarketsApi* | [**getVaultMarketPredictionForecaster**](docs/Api/VaultMarketsApi.md#getvaultmarketpredictionforecaster) | **GET** /v1/vault-markets/predictions/forecaster | Your forecaster profile: display name, whether it is public (opt-in) and since when, and your followers.
*VaultMarketsApi* | [**getVaultMarketPredictionForecasterById**](docs/Api/VaultMarketsApi.md#getvaultmarketpredictionforecasterbyid) | **GET** /v1/vault-markets/predictions/forecasters/{id} | A public forecaster: scores (all time and this month), open sides (never sizes), recent settled calls, followers. 404 when private.
*VaultMarketsApi* | [**getVaultMarketPredictionLeaderboard**](docs/Api/VaultMarketsApi.md#getvaultmarketpredictionleaderboard) | **GET** /v1/vault-markets/predictions/leaderboard | Opt-in forecaster leaderboards: &#x60;period&#x60; week, month or all; &#x60;metric&#x60; pnl, accuracy or brier; &#x60;venue&#x60; live or paper (practice has its own board).
*VaultMarketsApi* | [**getVaultMarketPredictionLimit**](docs/Api/VaultMarketsApi.md#getvaultmarketpredictionlimit) | **GET** /v1/vault-markets/predictions/limits | Your self-set prediction limits: daily loss limit, self-exclusion, a raise waiting its 24 hours, and any hold the venue placed.
*VaultMarketsApi* | [**getVaultMarketPredictionMarket**](docs/Api/VaultMarketsApi.md#getvaultmarketpredictionmarket) | **GET** /v1/vault-markets/predictions/markets/{id} | One prediction market: its terms, the Yes ladder of the live venue and of the practice book, recent trades, settlement history (outcome, value, hash, review), the series rules text and hash, and your positions in it.
*VaultMarketsApi* | [**getVaultMarketPredictionMarketForecast**](docs/Api/VaultMarketsApi.md#getvaultmarketpredictionmarketforecast) | **GET** /v1/vault-markets/predictions/markets/{id}/forecasts | How many people forecast a market and their median probability (no names).
*VaultMarketsApi* | [**getVaultMarketPredictionMarketHistory**](docs/Api/VaultMarketsApi.md#getvaultmarketpredictionmarkethistory) | **GET** /v1/vault-markets/predictions/markets/{id}/history | A market&#39;s history: probability points (display only, never a mark), candles on the Yes price, volume and open interest over &#x60;range&#x60; 1d, 1w, 1m or all; &#x60;venue&#x60; live or paper.
*VaultMarketsApi* | [**getVaultMarketPredictionMarketStream**](docs/Api/VaultMarketsApi.md#getvaultmarketpredictionmarketstream) | **GET** /v1/vault-markets/predictions/markets/{id}/stream | A server-sent event stream for one prediction market: &#x60;snapshot&#x60; first, then &#x60;pm_depth&#x60;, &#x60;pm_trades&#x60;, &#x60;pm_probability&#x60;, &#x60;pm_status&#x60; and &#x60;pm_settlement&#x60; as they change.
*VaultMarketsApi* | [**getVaultMarketPredictionMarketTrade**](docs/Api/VaultMarketsApi.md#getvaultmarketpredictionmarkettrade) | **GET** /v1/vault-markets/predictions/markets/{id}/trades | The trade tape, newest first: Yes price, size, which side took, venue. Page with &#x60;before&#x60; (the last &#x60;seq&#x60;).
*VaultMarketsApi* | [**getVaultMarketPredictionMeStream**](docs/Api/VaultMarketsApi.md#getvaultmarketpredictionmestream) | **GET** /v1/vault-markets/predictions/me/stream | A server-sent event stream of your own prediction events: &#x60;pm_order&#x60; (placed, filled, amended, cancelled, expired), &#x60;pm_fill&#x60; (your side, price and fee), &#x60;pm_position&#x60;, &#x60;pm_combo&#x60; and &#x60;pm_conversion&#x60;.
*VaultMarketsApi* | [**getVaultMarketPredictionMission**](docs/Api/VaultMarketsApi.md#getvaultmarketpredictionmission) | **GET** /v1/vault-markets/predictions/missions | The two \&quot;Will it hit?\&quot; practice missions (your first call; see one settle), whether the server saw each done, and the pin they lead to. Pins only.
*VaultMarketsApi* | [**getVaultMarketPredictionPaper**](docs/Api/VaultMarketsApi.md#getvaultmarketpredictionpaper) | **GET** /v1/vault-markets/predictions/paper | Your practice prediction account (play money only, $1,000 to start, never real or convertible): cash, money locked by working orders, positions and working orders.
*VaultMarketsApi* | [**getVaultMarketPredictionQuote**](docs/Api/VaultMarketsApi.md#getvaultmarketpredictionquote) | **GET** /v1/vault-markets/predictions/quote | What an order would do now without placing it: contracts fillable inside the limit (a market order uses the 10-cent band), average price, estimated fee (Kalshi&#39;s formula), the money it would lock, and the most it could pay out.
*VaultMarketsApi* | [**getVaultMarketPredictionRulebook**](docs/Api/VaultMarketsApi.md#getvaultmarketpredictionrulebook) | **GET** /v1/vault-markets/predictions/rulebook | The prediction venue&#39;s rule book now and every version, each hashed and chained to the one before (&#x60;chainOk&#x60;).
*VaultMarketsApi* | [**getVaultMarketPredictionStream**](docs/Api/VaultMarketsApi.md#getvaultmarketpredictionstream) | **GET** /v1/vault-markets/predictions/stream | A server-sent event stream for up to 50 markets (&#x60;markets&#x60;&#x3D;id,id): &#x60;ready&#x60;, then &#x60;pm_depth&#x60;, &#x60;pm_trades&#x60;, &#x60;pm_probability&#x60;, &#x60;pm_status&#x60; and &#x60;pm_settlement&#x60;, each carrying its marketId.
*VaultMarketsApi* | [**getVaultMarketPredictionVenue**](docs/Api/VaultMarketsApi.md#getvaultmarketpredictionvenue) | **GET** /v1/vault-markets/predictions/venue | Which prediction venue is live: self (Crossly as the DCM, money at the segregated settlement bank), partner (a partner DCM) or paper (practice only), who runs the book, where money sits, and the env each real mode still needs.
*VaultMarketsApi* | [**getVaultMarketPredictionWillItHit**](docs/Api/VaultMarketsApi.md#getvaultmarketpredictionwillithit) | **GET** /v1/vault-markets/predictions/will-it-hit | The \&quot;Will it hit?\&quot; panel for a key (&#x60;bookKey&#x60;) or an index (&#x60;index&#x60; slug): its open markets grouped by expiry, each with its probability. &#x60;eligible&#x60; is false when nothing is listed on it.
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
*VaultMarketsApi* | [**getVaultMarketSetting**](docs/Api/VaultMarketsApi.md#getvaultmarketsetting) | **GET** /v1/vault-markets/settings | Your vault defaults: Sell from first, new-inventory suggestions, the insurance rule and the default grading service.
*VaultMarketsApi* | [**getVaultMarketShare**](docs/Api/VaultMarketsApi.md#getvaultmarketshare) | **GET** /v1/vault-markets/shares | Vault Shares at a glance: the venue mode in force (self, partner or paper) and the env it still needs, the rules (about $5 a share, 100 to 100,000 shares, originator keeps 0-50%, 3% origination, maker 0 / taker 100 bps, 90-day lockup, buyouts at the mark x 1.10 with a two-thirds vote) and the disclosure.
*VaultMarketsApi* | [**getVaultMarketShareBasket**](docs/Api/VaultMarketsApi.md#getvaultmarketsharebasket) | **GET** /v1/vault-markets/shares/baskets/{id} | One theme basket (id or slug): its series, target and live weights, prices, and your own holdings against the weights.
*VaultMarketsApi* | [**getVaultMarketShareCard**](docs/Api/VaultMarketsApi.md#getvaultmarketsharecard) | **GET** /v1/vault-markets/share-cards/{id} | One share card as the public sees it, with its image and link paths.
*VaultMarketsApi* | [**getVaultMarketShareInvestor**](docs/Api/VaultMarketsApi.md#getvaultmarketshareinvestor) | **GET** /v1/vault-markets/shares/investor | Your investor account at the venue in force: its status, the investor terms you accepted, and your Reg A+ limit for one offering (10% of the greater of income and net worth unless accredited).
*VaultMarketsApi* | [**getVaultMarketShareMe**](docs/Api/VaultMarketsApi.md#getvaultmarketshareme) | **GET** /v1/vault-markets/shares/me | Your Vault Shares: shares and percent of each item, cost, implied value at the last price, your subscriptions and the payouts you were sent.
*VaultMarketsApi* | [**getVaultMarketSharePaper**](docs/Api/VaultMarketsApi.md#getvaultmarketsharepaper) | **GET** /v1/vault-markets/shares/paper | Your practice account for Vault Shares (play money only, never real, never convertible): cash, practice holdings, open practice orders, recent practice fills.
*VaultMarketsApi* | [**getVaultMarketSharePaperSeryBook**](docs/Api/VaultMarketsApi.md#getvaultmarketsharepaperserybook) | **GET** /v1/vault-markets/shares/paper/series/{id}/book | A series’ practice book: practice orders and the house quote 1% either side of the reference price.
*VaultMarketsApi* | [**getVaultMarketSharePreview**](docs/Api/VaultMarketsApi.md#getvaultmarketsharepreview) | **GET** /v1/vault-markets/shares/preview | Fractionalize instead: whether one of your vault units can become a Vault Shares series now (stored, tier A or B, reliable mark of $1,000 or more, declared and insured, free) and the offering terms it would get.
*VaultMarketsApi* | [**getVaultMarketShareSery**](docs/Api/VaultMarketsApi.md#getvaultmarketsharesery) | **GET** /v1/vault-markets/shares/series/{id} | One series: the offering, the share book depth, the latest fills, holders as share percentages (nobody named), buyouts and your vote, your orders and subscriptions.
*VaultMarketsApi* | [**getVaultMarketShareSeryBook**](docs/Api/VaultMarketsApi.md#getvaultmarketshareserybook) | **GET** /v1/vault-markets/shares/series/{id}/book | A share book’s depth: whole shares per price level (integer cents a share), best first.
*VaultMarketsApi* | [**getVaultMarketShareSeryHistory**](docs/Api/VaultMarketsApi.md#getvaultmarketshareseryhistory) | **GET** /v1/vault-markets/shares/series/{id}/history | A series’ full price history: OHLC candles of every share-book fill (&#x60;interval&#x60; 1h, 1d or 1w), the offering price, the change since the offering, and the appraisal history beside it. Share prices are display only, never a mark.
*VaultMarketsApi* | [**getVaultMarketShareSeryPerk**](docs/Api/VaultMarketsApi.md#getvaultmarketshareseryperk) | **GET** /v1/vault-markets/shares/series/{id}/perks | Holder perks on a series: whether you hold it, your holder badge, the links to visit the item in the world vault room and in AR, the viewing days with places left and your bookings.
*VaultMarketsApi* | [**getVaultMarketShareSeryRoom**](docs/Api/VaultMarketsApi.md#getvaultmarketshareseryroom) | **GET** /v1/vault-markets/shares/series/{id}/room | The holder room for a series (shareholders only): posts newest first under per-series aliases, never account names. &#x60;before&#x60; pages back.
*VaultMarketsApi* | [**getVaultMarketStatement**](docs/Api/VaultMarketsApi.md#getvaultmarketstatement) | **GET** /v1/vault-markets/statements | The last 24 months with whether each statement is issued (frozen, with its sha256).
*VaultMarketsApi* | [**getVaultMarketStatementByMonth**](docs/Api/VaultMarketsApi.md#getvaultmarketstatementbymonth) | **GET** /v1/vault-markets/statements/{month} | A monthly statement (&#x60;month&#x60; like 2026-10): units held at month end, loans, pledges, positions, fills, fees, storage, and cash quoted from the custodian and labelled as its record. Issued (frozen) once the month ends.
*VaultMarketsApi* | [**getVaultMarketStatementFile**](docs/Api/VaultMarketsApi.md#getvaultmarketstatementfile) | **GET** /v1/vault-markets/statements/{month}/file/{format} | A monthly statement as a csv, pdf or json file.
*VaultMarketsApi* | [**getVaultMarketSupply**](docs/Api/VaultMarketsApi.md#getvaultmarketsupply) | **GET** /v1/vault-markets/supply | A book key&#39;s units in the vault and authentications passed, by day (oldest first, today live).
*VaultMarketsApi* | [**getVaultMarketSupplyBatch**](docs/Api/VaultMarketsApi.md#getvaultmarketsupplybatch) | **GET** /v1/vault-markets/supply/batches/{id} | A box sent to the vault: its prepaid label and tracking, or why it has no label.
*VaultMarketsApi* | [**getVaultMarketSupplyRoundUp**](docs/Api/VaultMarketsApi.md#getvaultmarketsupplyroundup) | **GET** /v1/vault-markets/supply/round-up | Your seller round-up: the share of each payout that sets a vault buy&#39;s budget, the budget so far and what it is doing. &#x60;roundUp&#x60; is null when none is set.
*VaultMarketsApi* | [**getVaultMarketSupplyShipment**](docs/Api/VaultMarketsApi.md#getvaultmarketsupplyshipment) | **GET** /v1/vault-markets/supply/shipments/{id} | One shipment into the vault, with each unit and whether it was received.
*VaultMarketsApi* | [**getVaultMarketTax**](docs/Api/VaultMarketsApi.md#getvaultmarkettax) | **GET** /v1/vault-markets/tax | Your tax year on the vault markets: units bought and sold with cost, proceeds, gain and term; lending fees, staking interest (estimate), market-maker rewards; closed positions. Links to the CSV and PDF.
*VaultMarketsApi* | [**getVaultMarketTaxCsv**](docs/Api/VaultMarketsApi.md#getvaultmarkettaxcsv) | **GET** /v1/vault-markets/tax.csv | The tax year as a CSV: one row per sale, purchase, gift, income line and closed position.
*VaultMarketsApi* | [**getVaultMarketTaxLossSuggestion**](docs/Api/VaultMarketsApi.md#getvaultmarkettaxlosssuggestion) | **GET** /v1/vault-markets/tax/loss-suggestions | Tax-loss suggestions: the units you hold whose mark is below your cost, each with its lot (acquired when and how, cost in cents), short or long term if sold today and the day a short lot turns long, the estimated loss at the mark before selling fees, mark quality, what stops a sale, and a link to the ordinary sell ticket. With totals by term, the gains realised so far this year, and a not-tax-advice disclosure. Never sells.
*VaultMarketsApi* | [**getVaultMarketTaxOption**](docs/Api/VaultMarketsApi.md#getvaultmarkettaxoption) | **GET** /v1/vault-markets/tax/options | Your fractional options tax lots for a calendar year (&#x60;year&#x60;, default this year): FIFO disposals (closed or settled) with proceeds, cost, gain in cents and holding term, each flagged as a possible Section 1256 contract, the totals with the 60/40 split, and the positions open at year end. Real fills only; practice never appears. Not tax advice.
*VaultMarketsApi* | [**getVaultMarketTaxPdf**](docs/Api/VaultMarketsApi.md#getvaultmarkettaxpdf) | **GET** /v1/vault-markets/tax.pdf | The tax year as a PDF summary.
*VaultMarketsApi* | [**getVaultMarketTaxPrediction**](docs/Api/VaultMarketsApi.md#getvaultmarkettaxprediction) | **GET** /v1/vault-markets/tax/predictions | Your prediction-market results for a calendar year (&#x60;year&#x60;), as the venue reports them: each settled or voided real-money position with its venue, cost, fees, payout, refund, closing-trade gains and net in cents, and the totals. Practice never appears. Not tax advice.
*VaultMarketsApi* | [**getVaultMarketTaxShare**](docs/Api/VaultMarketsApi.md#getvaultmarkettaxshare) | **GET** /v1/vault-markets/tax/shares | Your Vault Shares tax lots for a calendar year (&#x60;year&#x60;): disposals (share-book sales, exit payouts) with holding periods, proceeds, cost and gain in cents, the open lots and the totals. The broker-dealer issues the 1099-B; not tax advice.
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
*VaultMarketsApi* | [**getVaultMarketWorldFloorBoard**](docs/Api/VaultMarketsApi.md#getvaultmarketworldfloorboard) | **GET** /v1/vault-markets/world/floor/boards | The Trading Floor boards for the round-13 products: odds (the probability ladder: the busiest open \&quot;Will it hit?\&quot; markets with probabilityBps, the market’s own price as a probability, display only), heat (option-chain heat: per listed underlying, open interest and the last day’s volume in milli-contracts in strike buckets around the underlying, a 0..1 heat per bucket and the at-the-money implied vol, display only) and shares (Vault Shares tickers: last share price in cents, changeBps from the last fill before today, shares traded today and the implied item value, display only). quality is always C: none of these is ever a mark. It never shows who traded.
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
*VaultMarketsApi* | [**listVaultMarketHoldings**](docs/Api/VaultMarketsApi.md#listvaultmarketholdings) | **GET** /v1/vault-markets/holdings | Everything you own in the Crossly vault, newest activity first: each unit with its status (inbound, stored, listed, withdraw_requested…) and situation (lent, pledged, in_grading…), what it is worth (&#x60;valueCents&#x60; with &#x60;valueSource&#x60; mark | last_sale | declared | none), declared and insured value, storage owed, its open ask, the deposit toggles when you sent it in, and what you may do with it now (&#x60;actions&#x60;). Units sold or shipped home in the last 90 days have &#x60;past: true&#x60;. &#x60;meta&#x60; carries the totals (units, value, declared, insured, storage owed), your recent boxes and their labels, the ship-home prices and the lending gate.
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
*VaultMarketsApi* | [**listVaultMarketOptionComboRfq**](docs/Api/VaultMarketsApi.md#listvaultmarketoptioncomborfq) | **GET** /v1/vault-markets/options/combos/rfq | Your strategy quote requests, newest first.
*VaultMarketsApi* | [**listVaultMarketOptionComboRfqInbox**](docs/Api/VaultMarketsApi.md#listvaultmarketoptioncomborfqinbox) | **GET** /v1/vault-markets/options/combos/rfq/inbox | Open strategy quote requests you may answer (never your own; the requester stays anonymous).
*VaultMarketsApi* | [**listVaultMarketOptionCombos**](docs/Api/VaultMarketsApi.md#listvaultmarketoptioncombos) | **GET** /v1/vault-markets/options/combos | Your strategies: &#x60;status&#x60; working (default), done or all, with their legs as you hold them, net per unit, filled size and status.
*VaultMarketsApi* | [**listVaultMarketOptionContractDaily**](docs/Api/VaultMarketsApi.md#listvaultmarketoptioncontractdaily) | **GET** /v1/vault-markets/options/contracts/{id}/daily | A contract&#39;s published daily settlement prices, newest first (&#x60;days&#x60;, default 30): the price, how it was set (volume-weighted fills, the mid, or Black-Scholes at the reference vol), its implied vol, the underlying, open interest and volume, and each row&#39;s chain hash.
*VaultMarketsApi* | [**listVaultMarketOptionMmQuotes**](docs/Api/VaultMarketsApi.md#listvaultmarketoptionmmquotes) | **GET** /v1/vault-markets/options/mm/quotes | Your two-sided option quotes: the contract, the bid and ask orders behind them, cancel-on-disconnect and the last heartbeat.
*VaultMarketsApi* | [**listVaultMarketOptionNotices**](docs/Api/VaultMarketsApi.md#listvaultmarketoptionnotices) | **GET** /v1/vault-markets/options/notices | Your options notices, newest first: expiry warnings, auto-closes, exercises (a long settled in the money), assignments (a short settled in the money), expiries worthless and rolls.
*VaultMarketsApi* | [**listVaultMarketOptionOrders**](docs/Api/VaultMarketsApi.md#listvaultmarketoptionorders) | **GET** /v1/vault-markets/options/orders | Your options orders, newest first: &#x60;status&#x60; working (default) / done / all, &#x60;limit&#x60;, &#x60;subaccountId&#x60;.
*VaultMarketsApi* | [**listVaultMarketOptionPracticeCombos**](docs/Api/VaultMarketsApi.md#listvaultmarketoptionpracticecombos) | **GET** /v1/vault-markets/options/practice/combos | Your practice strategies.
*VaultMarketsApi* | [**listVaultMarketOptionPracticeFills**](docs/Api/VaultMarketsApi.md#listvaultmarketoptionpracticefills) | **GET** /v1/vault-markets/options/practice/fills | Your practice options fills, newest first (&#x60;limit&#x60;).
*VaultMarketsApi* | [**listVaultMarketOptionPracticeOrders**](docs/Api/VaultMarketsApi.md#listvaultmarketoptionpracticeorders) | **GET** /v1/vault-markets/options/practice/orders | Your practice options orders: &#x60;status&#x60; working (default) / done / all, &#x60;limit&#x60;.
*VaultMarketsApi* | [**listVaultMarketOptionRfq**](docs/Api/VaultMarketsApi.md#listvaultmarketoptionrfq) | **GET** /v1/vault-markets/options/rfq | Your option quote requests, newest first.
*VaultMarketsApi* | [**listVaultMarketOptionRfqInbox**](docs/Api/VaultMarketsApi.md#listvaultmarketoptionrfqinbox) | **GET** /v1/vault-markets/options/rfq/inbox | Open option quote requests you can answer.
*VaultMarketsApi* | [**listVaultMarketOptionSeries**](docs/Api/VaultMarketsApi.md#listvaultmarketoptionseries) | **GET** /v1/vault-markets/options/series | Every options series: its underlying (a Crossly index, or a tier A item key with 90 days of reliable marks), status and the eligibility snapshot it last passed. &#x60;status&#x60;: active (default) or all.
*VaultMarketsApi* | [**listVaultMarketOptionStrategies**](docs/Api/VaultMarketsApi.md#listvaultmarketoptionstrategies) | **GET** /v1/vault-markets/options/strategies | The strategies the picker builds (vertical, calendar, diagonal, straddle, strangle, butterfly, iron condor, collar): how many strikes and expiries each takes, whether it needs calls or puts, and what it does in plain words.
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
*VaultMarketsApi* | [**listVaultMarketPartnerFinder**](docs/Api/VaultMarketsApi.md#listvaultmarketpartnerfinder) | **GET** /v1/vault-markets/partners/finder | Vault drop-off partners near a &#x60;postalCode&#x60;, optionally offering a &#x60;service&#x60;: address, hours and services.
*VaultMarketsApi* | [**listVaultMarketPoolStakes**](docs/Api/VaultMarketsApi.md#listvaultmarketpoolstakes) | **GET** /v1/vault-markets/pool/stakes | Your stakes in the market pool and what each redeems for now.
*VaultMarketsApi* | [**listVaultMarketPortfolioMarginHistory**](docs/Api/VaultMarketsApi.md#listvaultmarketportfoliomarginhistory) | **GET** /v1/vault-markets/portfolio-margin/history | The 5-minute portfolio margin recalculations for a firm sub-account over the last &#x60;hours&#x60; (default 24, at most 720), newest first: equity, requirement, excess, scenario and floor figures, gross and state.
*VaultMarketsApi* | [**listVaultMarketPositionUnits**](docs/Api/VaultMarketsApi.md#listvaultmarketpositionunits) | **GET** /v1/vault-markets/positions/{id}/units | The vault units of one of your positions that you hold (a leveraged long&#39;s collateral), each with its story link.
*VaultMarketsApi* | [**listVaultMarketPositions**](docs/Api/VaultMarketsApi.md#listvaultmarketpositions) | **GET** /v1/vault-markets/positions | Your positions, live (default) or closed.
*VaultMarketsApi* | [**listVaultMarketPositionsRisk**](docs/Api/VaultMarketsApi.md#listvaultmarketpositionsrisk) | **GET** /v1/vault-markets/positions-risk | For each live position: its tier, health, margin state, the mark at which it is called and the mark at which it is liquidated, and the distance to it.
*VaultMarketsApi* | [**listVaultMarketPredictionAlerts**](docs/Api/VaultMarketsApi.md#listvaultmarketpredictionalerts) | **GET** /v1/vault-markets/predictions/alerts | Your probability alerts: a market, a level (percent) and a direction; each fires once through the alerts hub (kind prediction_odds).
*VaultMarketsApi* | [**listVaultMarketPredictionComboMyRfqs**](docs/Api/VaultMarketsApi.md#listvaultmarketpredictioncombomyrfqs) | **GET** /v1/vault-markets/predictions/combos/my-rfqs | Your combo requests with every answer they got.
*VaultMarketsApi* | [**listVaultMarketPredictionComboRfqs**](docs/Api/VaultMarketsApi.md#listvaultmarketpredictioncomborfqs) | **GET** /v1/vault-markets/predictions/combos/rfqs | Open combo requests makers can answer: legs, size and the legs&#39; own combined price; never who asked. Your own answers are shown on them.
*VaultMarketsApi* | [**listVaultMarketPredictionCombos**](docs/Api/VaultMarketsApi.md#listvaultmarketpredictioncombos) | **GET** /v1/vault-markets/predictions/combos | Your combos, as buyer or maker: legs and their outcomes, stakes, the pot, any reprice after a voided leg, and how each settled.
*VaultMarketsApi* | [**listVaultMarketPredictionComments**](docs/Api/VaultMarketsApi.md#listvaultmarketpredictioncomments) | **GET** /v1/vault-markets/predictions/comments | A discussion thread on a market (&#x60;marketId&#x60;) or a series (&#x60;seriesId&#x60;): comments newest first with their replies. A commenter&#39;s side shows only when their forecaster profile is public.
*VaultMarketsApi* | [**listVaultMarketPredictionConversions**](docs/Api/VaultMarketsApi.md#listvaultmarketpredictionconversions) | **GET** /v1/vault-markets/predictions/conversions | Your bucket-set conversions (split, merge, convert), newest first.
*VaultMarketsApi* | [**listVaultMarketPredictionFollowing**](docs/Api/VaultMarketsApi.md#listvaultmarketpredictionfollowing) | **GET** /v1/vault-markets/predictions/following | The forecasters you follow.
*VaultMarketsApi* | [**listVaultMarketPredictionForecasts**](docs/Api/VaultMarketsApi.md#listvaultmarketpredictionforecasts) | **GET** /v1/vault-markets/predictions/forecasts | Your forecasts (a probability you attached to a market, money or not) and how the markets came out.
*VaultMarketsApi* | [**listVaultMarketPredictionMakers**](docs/Api/VaultMarketsApi.md#listvaultmarketpredictionmakers) | **GET** /v1/vault-markets/predictions/makers | Your prediction maker programme applications and their status (applied, active, suspended, revoked) and rebate.
*VaultMarketsApi* | [**listVaultMarketPredictionMarkets**](docs/Api/VaultMarketsApi.md#listvaultmarketpredictionmarkets) | **GET** /v1/vault-markets/predictions/markets | Prediction markets, filtered by a book key, an index slug, an underlying kind (index | book_key | category_pair), a status (open | closed | settled | all), an expiry day or text. Each with its strike, expiry, best Yes bid and ask, last price, volume, open interest and probability.
*VaultMarketsApi* | [**listVaultMarketPredictionOrders**](docs/Api/VaultMarketsApi.md#listvaultmarketpredictionorders) | **GET** /v1/vault-markets/predictions/orders | Your prediction orders, newest first: working, done or all; practice, live or all.
*VaultMarketsApi* | [**listVaultMarketPredictionPositions**](docs/Api/VaultMarketsApi.md#listvaultmarketpredictionpositions) | **GET** /v1/vault-markets/predictions/positions | Your prediction positions (practice, live or all; open, settled or all): side, contracts, cost, value at the last price, fees, realised P&amp;L, payout or refund once settled, and the share card if you made one.
*VaultMarketsApi* | [**listVaultMarketPredictionProposalListed**](docs/Api/VaultMarketsApi.md#listvaultmarketpredictionproposallisted) | **GET** /v1/vault-markets/predictions/proposals/listed | The markets you proposed that are listed: volume, status and what the creator share has earned you.
*VaultMarketsApi* | [**listVaultMarketPredictionProposals**](docs/Api/VaultMarketsApi.md#listvaultmarketpredictionproposals) | **GET** /v1/vault-markets/predictions/proposals | Your market proposals and where each stands (pending, listed, rejected, withdrawn).
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
*VaultMarketsApi* | [**listVaultMarketShareAutoInvest**](docs/Api/VaultMarketsApi.md#listvaultmarketshareautoinvest) | **GET** /v1/vault-markets/shares/auto-invest | Your recurring auto-invest plans: amount, weekly or monthly, the series and weights or the basket, what rolled over (budget too small for a whole share; your money stays at the venue), the next run.
*VaultMarketsApi* | [**listVaultMarketShareAutoInvestRuns**](docs/Api/VaultMarketsApi.md#listvaultmarketshareautoinvestruns) | **GET** /v1/vault-markets/shares/auto-invest/{id}/runs | A plan’s runs, newest first: the budget, what each series bought, what was spent and what rolled over; rebalances too.
*VaultMarketsApi* | [**listVaultMarketShareBaskets**](docs/Api/VaultMarketsApi.md#listvaultmarketsharebaskets) | **GET** /v1/vault-markets/shares/baskets | Theme baskets: curated model portfolios of Vault Shares series with target weights. You buy and own every share directly in your own name; a basket is never a fund.
*VaultMarketsApi* | [**listVaultMarketShareCards**](docs/Api/VaultMarketsApi.md#listvaultmarketsharecards) | **GET** /v1/vault-markets/share-cards | Your share cards (not taken down), each as the public sees it.
*VaultMarketsApi* | [**listVaultMarketShareDrops**](docs/Api/VaultMarketsApi.md#listvaultmarketsharedrops) | **GET** /v1/vault-markets/shares/drops | The Vault Shares drops calendar: announced and open offerings, soonest first, each with its phase (announced, early_access, requests, open), the countdown, the allocation (fcfs, pro_rata or lottery with a per-person cap), your Crossly One early-access time (it moves when you may ask, never the price) and whether you asked to be told.
*VaultMarketsApi* | [**listVaultMarketShareGifts**](docs/Api/VaultMarketsApi.md#listvaultmarketsharegifts) | **GET** /v1/vault-markets/shares/gifts | Your share gifts, sent and received, newest first, with where each stands (offered, instructed, settled, declined, cancelled, expired, rejected).
*VaultMarketsApi* | [**listVaultMarketShareOrders**](docs/Api/VaultMarketsApi.md#listvaultmarketshareorders) | **GET** /v1/vault-markets/shares/orders | Your share-book orders, newest first; &#x60;seriesId&#x60; and &#x60;open&#x60; narrow it.
*VaultMarketsApi* | [**listVaultMarketShareSeries**](docs/Api/VaultMarketsApi.md#listvaultmarketshareseries) | **GET** /v1/vault-markets/shares/series | Vault Shares series: open offerings first, then trading, then the rest. &#x60;status&#x60; and &#x60;bookKey&#x60; narrow it. Each with its terms, progress, last share price and implied item value (display only, never a mark), and your holding.
*VaultMarketsApi* | [**listVaultMarketShareSeryAppraisals**](docs/Api/VaultMarketsApi.md#listvaultmarketshareseryappraisals) | **GET** /v1/vault-markets/shares/series/{id}/appraisals | The item’s appraisal history: the offering valuation (sealed valuation statement), independent and insurance appraisals, and any buyout or exit price.
*VaultMarketsApi* | [**listVaultMarketShareSeryTape**](docs/Api/VaultMarketsApi.md#listvaultmarketshareserytape) | **GET** /v1/vault-markets/shares/series/{id}/tape | The latest fills on a share book, newest first, with which side made the market.
*VaultMarketsApi* | [**listVaultMarketShareSeryUpdates**](docs/Api/VaultMarketsApi.md#listvaultmarketshareseryupdates) | **GET** /v1/vault-markets/shares/series/{id}/updates | The item’s story, provenance, condition reports, appraisals and exhibitions, newest first. Holders also see holders-only updates.
*VaultMarketsApi* | [**listVaultMarketShareSubscriptions**](docs/Api/VaultMarketsApi.md#listvaultmarketsharesubscriptions) | **GET** /v1/vault-markets/shares/subscriptions | Your offering subscriptions, newest first, with where each stands (pending, escrowed, allocated, refunded).
*VaultMarketsApi* | [**listVaultMarketShareWorld**](docs/Api/VaultMarketsApi.md#listvaultmarketshareworld) | **GET** /v1/vault-markets/shares/world | The world vault home’s fractional tiles: each item you own a share of, with \&quot;you own 3.2%\&quot;.
*VaultMarketsApi* | [**listVaultMarketSupplyDeclaredValues**](docs/Api/VaultMarketsApi.md#listvaultmarketsupplydeclaredvalues) | **GET** /v1/vault-markets/supply/declared-values | What each item&#39;s declared value starts at, by your insurance rule (market, cost or price). &#x60;inventoryItemIds&#x60; comma-separated.
*VaultMarketsApi* | [**listVaultMarketSupplyDeposits**](docs/Api/VaultMarketsApi.md#listvaultmarketsupplydeposits) | **GET** /v1/vault-markets/supply/deposits | Your units sent to the vault, newest first, each with its state and its key&#39;s Instant Exit line (\&quot;Instant Exit now: $X (N% of mark)\&quot; or \&quot;No market yet\&quot;). Filter with &#x60;inventoryItemIds&#x60; (comma-separated).
*VaultMarketsApi* | [**listVaultMarketSupplyEligibility**](docs/Api/VaultMarketsApi.md#listvaultmarketsupplyeligibility) | **GET** /v1/vault-markets/supply/eligibility | Can these inventory items (&#x60;inventoryItemIds&#x60;, comma-separated, or every item linked to &#x60;listingId&#x60;) be sent to the vault now? Each says why not.
*VaultMarketsApi* | [**listVaultMarketSupplyInvites**](docs/Api/VaultMarketsApi.md#listvaultmarketsupplyinvites) | **GET** /v1/vault-markets/supply/invites | Market Open invites to you as a dealer: keys Crossly is opening and asks you to quote.
*VaultMarketsApi* | [**listVaultMarketSupplyShipments**](docs/Api/VaultMarketsApi.md#listvaultmarketsupplyshipments) | **GET** /v1/vault-markets/supply/shipments | Your shipments into the vault, newest first: method, label or drop-off code, tracking and how many units were received.
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
*VaultMarketsApi* | [**updateVaultMarketAutoBuy**](docs/Api/VaultMarketsApi.md#updatevaultmarketautobuy) | **PUT** /v1/vault-markets/auto-buy | Set up or change Auto-buy with payouts: &#x60;shareBps&#x60; (1–50%) and the whole want list in order, each with an optional &#x60;maxPriceCents&#x60; (fee included).
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
*VaultMarketsApi* | [**updateVaultMarketItemSellFrom**](docs/Api/VaultMarketsApi.md#updatevaultmarketitemsellfrom) | **PUT** /v1/vault-markets/items/{inventoryItemId}/sell-from | Set which unit a sale of this item ships first: &#x60;vault_first&#x60;, &#x60;warehouse_first&#x60; or &#x60;cheapest&#x60; (to ship); null &#x3D; your default. Quantities stay the same on every channel: only who ships changes.
*VaultMarketsApi* | [**updateVaultMarketLendingElection**](docs/Api/VaultMarketsApi.md#updatevaultmarketlendingelection) | **PUT** /v1/vault-markets/lending/election | Change your lender election (applies to loans opened after the change). Needs lending.
*VaultMarketsApi* | [**updateVaultMarketMmMmp**](docs/Api/VaultMarketsApi.md#updatevaultmarketmmmmp) | **PUT** /v1/vault-markets/mm/mmp | Set market-maker protection: N units or $X filled on your quotes within T seconds pulls every quote and freezes quoting for a set time.
*VaultMarketsApi* | [**updateVaultMarketMode**](docs/Api/VaultMarketsApi.md#updatevaultmarketmode) | **PUT** /v1/vault-markets/mode | Choose your Vault Markets mode: &#x60;mode&#x60; simple or pro. Remembered for you on the web and in the app. A display preference only: it places nothing and moves no money.
*VaultMarketsApi* | [**updateVaultMarketOfferAlert**](docs/Api/VaultMarketsApi.md#updatevaultmarketofferalert) | **PUT** /v1/vault-markets/offers/alert | Set (or clear with null) the bid price that should always notify you on a key you hold, and mute or unmute offer notices on it.
*VaultMarketsApi* | [**updateVaultMarketOptionAutoClose**](docs/Api/VaultMarketsApi.md#updatevaultmarketoptionautoclose) | **PUT** /v1/vault-markets/options/auto-close | Set your auto-close rule: &#x60;enabled&#x60;, &#x60;minutesBefore&#x60; (30 to 10080), &#x60;onlyItm&#x60;, &#x60;maxSlippageBps&#x60; (0 to 2000).
*VaultMarketsApi* | [**updateVaultMarketPaperLeaderboard**](docs/Api/VaultMarketsApi.md#updatevaultmarketpaperleaderboard) | **PUT** /v1/vault-markets/paper/leaderboard | Join or leave the weekly paper leaderboard. Joining needs a display name (2 to 24 letters, numbers, spaces, dots, dashes or underscores), never your real name. Returns &#x60;{ optIn, displayName }&#x60;.
*VaultMarketsApi* | [**updateVaultMarketPartnerMe**](docs/Api/VaultMarketsApi.md#updatevaultmarketpartnerme) | **PATCH** /v1/vault-markets/partners/me | Your drop-off partnership&#39;s finder profile: postal code, opening hours, services and whether you are listed.
*VaultMarketsApi* | [**updateVaultMarketPositionExit**](docs/Api/VaultMarketsApi.md#updatevaultmarketpositionexit) | **PUT** /v1/vault-markets/positions/{id}/exits | Set a position&#39;s take-profit / stop-loss: a long is closed, a short covered, when the last trade reaches one. Both null clears them.
*VaultMarketsApi* | [**updateVaultMarketPredictionComment**](docs/Api/VaultMarketsApi.md#updatevaultmarketpredictioncomment) | **PATCH** /v1/vault-markets/predictions/comments/{id} | Edit your comment.
*VaultMarketsApi* | [**updateVaultMarketPredictionForecaster**](docs/Api/VaultMarketsApi.md#updatevaultmarketpredictionforecaster) | **PUT** /v1/vault-markets/predictions/forecaster | Go public under a display name (&#x60;public: true&#x60;), rename, or go private (&#x60;public: false&#x60;: nothing is shown again).
*VaultMarketsApi* | [**updateVaultMarketPredictionLimit**](docs/Api/VaultMarketsApi.md#updatevaultmarketpredictionlimit) | **PUT** /v1/vault-markets/predictions/limits | Set your daily loss limit (&#x60;dailyLossLimitCents&#x60;, null &#x3D; none) or exclude yourself (&#x60;excludeDays&#x60;, &#x60;excludedUntil&#x60; or \&quot;forever\&quot;). Tighter takes effect at once; looser waits 24 hours.
*VaultMarketsApi* | [**updateVaultMarketPriceWidget**](docs/Api/VaultMarketsApi.md#updatevaultmarketpricewidget) | **PATCH** /v1/vault-markets/price-widgets/{id} | Change a widget: name, range, layout, theme, affiliate code (null for none) or allowed sites. The market or index it shows never changes: make a new widget for another.
*VaultMarketsApi* | [**updateVaultMarketProfile**](docs/Api/VaultMarketsApi.md#updatevaultmarketprofile) | **PUT** /v1/vault-markets/profile | Turn your public vault profile on or off (&#x60;isPublic&#x60;) and whether followers see your new buys (&#x60;showBuys&#x60;). It shows weights by market, never dollars.
*VaultMarketsApi* | [**updateVaultMarketRecurring**](docs/Api/VaultMarketsApi.md#updatevaultmarketrecurring) | **PATCH** /v1/vault-markets/recurring/{id} | Change a recurring buy&#39;s schedule, caps, cards or auto-lend, or pause / resume it.
*VaultMarketsApi* | [**updateVaultMarketSetGoal**](docs/Api/VaultMarketsApi.md#updatevaultmarketsetgoal) | **PATCH** /v1/vault-markets/set-goals/{id} | Change what a piece must be to count (condition, grade mode, grade). Refused while a basket bid works: cancel it first.
*VaultMarketsApi* | [**updateVaultMarketSetting**](docs/Api/VaultMarketsApi.md#updatevaultmarketsetting) | **PUT** /v1/vault-markets/settings | Change your vault defaults; send only the fields you change.
*VaultMarketsApi* | [**updateVaultMarketShareCard**](docs/Api/VaultMarketsApi.md#updatevaultmarketsharecard) | **PATCH** /v1/vault-markets/share-cards/{id} | Show or hide the dollar amounts on one of your share cards (&#x60;showAmounts&#x60;).
*VaultMarketsApi* | [**updateVaultMarketSupplyDeposit**](docs/Api/VaultMarketsApi.md#updatevaultmarketsupplydeposit) | **PATCH** /v1/vault-markets/supply/deposits/{id} | Change a deposit&#39;s toggles: &#x60;autoListBps&#x60; (list at that share of the mark once stored; null &#x3D; do not) and &#x60;lendWhenIdle&#x60;.
*VaultMarketsApi* | [**updateVaultMarketSupplyRoundUp**](docs/Api/VaultMarketsApi.md#updatevaultmarketsupplyroundup) | **PUT** /v1/vault-markets/supply/round-up | Set the round-up: &#x60;shareBps&#x60; (1%-50%) of each payout released to you adds to a budget; when it covers the cheapest vault unit on &#x60;bookKey&#x60;, one unit is bought with your saved card, never above the budget.
*VaultMarketsApi* | [**updateVaultMarketTodBeneficiary**](docs/Api/VaultMarketsApi.md#updatevaultmarkettodbeneficiary) | **PUT** /v1/vault-markets/tod/beneficiaries | Replace your beneficiary list (keep an id to edit one): full name, contact (email or @username), relationship, and share in basis points; shares add up to 10000. Returns &#x60;{ beneficiaries, removed }&#x60;.
*VaultMarketsApi* | [**updateVaultMarketTodDesignation**](docs/Api/VaultMarketsApi.md#updatevaultmarkettoddesignation) | **PUT** /v1/vault-markets/tod/designations | Leave one of your units to one beneficiary (beneficiaryId null clears it; the unit then follows the shares). Returns &#x60;{ vaultItemId, beneficiaryId }&#x60;.
*VaultMarketsApi* | [**updateVaultMarketWorldRoomVaultGate**](docs/Api/VaultMarketsApi.md#updatevaultmarketworldroomvaultgate) | **PUT** /v1/vault-markets/world/rooms/{id}/vault-gate | Set the vault-holder door on your own room (its collection rooms follow): visitors must hold minValueCents (cents, at reliable A/B marks) and/or minUnits units in the Crossly vault, mode any (either) or all (both), optionally only one product (scope kind product, ref the catalogue product id), bullion family (bullion, the family slug) or category (category, the slug). Send null to open it again. Returns &#x60;{ gate }&#x60;. Moves no money.
*VaultMarketsApi* | [**updateVaultMarketWorldSpaceVaultGate**](docs/Api/VaultMarketsApi.md#updatevaultmarketworldspacevaultgate) | **PUT** /v1/vault-markets/world/spaces/{slug}/vault-gate | Set the vault-holder door on a Space you host: the same rule as a room (minValueCents at reliable marks and/or minUnits, mode, optional scope). Send null to open it again. Returns &#x60;{ gate }&#x60;. Moves no money.
*WalletApi* | [**deleteWalletDefault**](docs/Api/WalletApi.md#deletewalletdefault) | **DELETE** /v1/wallet/defaults | Clear a default (the purpose falls back to your only wallet, or none) or one override (&#x60;refKind&#x60; + &#x60;refKey&#x60;).
*WalletApi* | [**listWalletDefaults**](docs/Api/WalletApi.md#listwalletdefaults) | **GET** /v1/wallet/defaults | Your default wallet per purpose (royalties, deploys, drops, game rewards, staking, CBX withdrawals), with per-collection and per-game overrides and what each resolves to today.
*WalletApi* | [**updateWalletDefault**](docs/Api/WalletApi.md#updatewalletdefault) | **PUT** /v1/wallet/defaults | Set the default wallet for a purpose, or an override for one collection (&#x60;ref: { kind: \&quot;collection\&quot;, chain, contract }&#x60;) or game (&#x60;ref: { kind: \&quot;game\&quot;, experienceId }&#x60;). The wallet must be yours, verified, and on a network the purpose accepts.
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
*Web3Api* | [**createWeb3SolanaTensorBidConfirm**](docs/Api/Web3Api.md#createweb3solanatensorbidconfirm) | **POST** /v1/web3/solana/tensor-bids/confirm | After your wallet’s Tensor transaction confirms: &#x60;action&#x60; place, cancel or accept, with its &#x60;signature&#x60; and the &#x60;wallet&#x60; that signed. Checked on chain, then recorded in your Activity. Accept needs listings:write; place and cancel need buyer:offers:write.
*Web3Api* | [**createWeb3SolanaTensorBidPlaceTx**](docs/Api/Web3Api.md#createweb3solanatensorbidplacetx) | **POST** /v1/web3/solana/tensor-bids/place-tx | Build a Tensor collection bid (or trait bid with &#x60;trait&#x60;) for your Solana wallet to sign. Price in lamports.
*Web3Api* | [**createWeb3StakingStake**](docs/Api/Web3Api.md#createweb3stakingstake) | **POST** /v1/web3/staking/stake | Lock earned CBX (&#x60;baseUnits&#x60;, a string) into the best tier it reaches. 409 while a stake or unstake is in progress.
*Web3Api* | [**createWeb3StakingUnstake**](docs/Api/Web3Api.md#createweb3stakingunstake) | **POST** /v1/web3/staking/unstake | Start unstaking: the earn boost stops now, the tokens release when the tier’s cooldown ends. Returns &#x60;{ unlocksAt, cooldownDays }&#x60;.
*Web3Api* | [**createWeb3StoreWallet**](docs/Api/Web3Api.md#createweb3storewallet) | **POST** /v1/web3/store-wallets | Link one of your verified wallets to the store so it sells NFTs from it and is paid into it.
*Web3Api* | [**createWeb3StoreWalletChallenge**](docs/Api/Web3Api.md#createweb3storewalletchallenge) | **POST** /v1/web3/store-wallets/challenge | Start adding a selling wallet to the store: the message the wallet signs.
*Web3Api* | [**createWeb3StoreWalletImport**](docs/Api/Web3Api.md#createweb3storewalletimport) | **POST** /v1/web3/store-wallets/{walletId}/import | Add picked NFTs (&#x60;tokens: [{ chain, contract, tokenId }]&#x60;) from a store wallet to inventory.
*Web3Api* | [**createWeb3StoreWalletSync**](docs/Api/Web3Api.md#createweb3storewalletsync) | **POST** /v1/web3/store-wallets/{walletId}/sync | Sync a store wallet: refresh its NFTs in inventory; new ones are added when the store&#39;s link auto-imports.
*Web3Api* | [**createWeb3StoreWalletVerify**](docs/Api/Web3Api.md#createweb3storewalletverify) | **POST** /v1/web3/store-wallets/verify | Finish adding a selling wallet: verify its signature and link it to the store.
*Web3Api* | [**createWeb3TokenRefresh**](docs/Api/Web3Api.md#createweb3tokenrefresh) | **POST** /v1/web3/tokens/{chain}/{contract}/{tokenId}/refresh | Re-read a token&#39;s metadata from the chain&#39;s provider (name, traits, image — a new image is copied to Crossly&#39;s CDN). Once per token per 10 minutes.
*Web3Api* | [**createWeb3Transaction**](docs/Api/Web3Api.md#createweb3transaction) | **POST** /v1/web3/transactions | Apply a Seaport transaction&#39;s fills and cancels to the Crossly book (read from the receipt).
*Web3Api* | [**createWeb3WalletChallenge**](docs/Api/Web3Api.md#createweb3walletchallenge) | **POST** /v1/web3/wallets/challenge | Start linking a wallet: returns the message the wallet must sign.
*Web3Api* | [**createWeb3WalletImport**](docs/Api/Web3Api.md#createweb3walletimport) | **POST** /v1/web3/wallets/{id}/import | Add picked NFTs (&#x60;tokens&#x60;: chain, contract, tokenId; up to 200) from a linked wallet to inventory. Tokens the wallet does not hold are counted in &#x60;notInWallet&#x60;, never added.
*Web3Api* | [**createWeb3WalletSync**](docs/Api/Web3Api.md#createweb3walletsync) | **POST** /v1/web3/wallets/{id}/sync | Import a linked wallet&#39;s NFTs into inventory; archives ones that have left the wallet.
*Web3Api* | [**createWeb3WalletVerify**](docs/Api/Web3Api.md#createweb3walletverify) | **POST** /v1/web3/wallets/verify | Finish linking a wallet with its signature over the challenge message.
*Web3Api* | [**deleteWeb3Alert**](docs/Api/Web3Api.md#deleteweb3alert) | **DELETE** /v1/web3/alerts/{id} | Delete a price alert.
*Web3Api* | [**deleteWeb3HolderPerk**](docs/Api/Web3Api.md#deleteweb3holderperk) | **DELETE** /v1/web3/holder-perks/{id} | DEPRECATED: use /api/v1/discounts/holders/:id. Remove a Collection holders deal. Returns &#x60;{ ok }&#x60;.
*Web3Api* | [**deleteWeb3Launch**](docs/Api/Web3Api.md#deleteweb3launch) | **DELETE** /v1/web3/launches/{id} | Delete a launch draft that never went live. Returns &#x60;{ ok }&#x60;.
*Web3Api* | [**deleteWeb3LaunchFollowCreator**](docs/Api/Web3Api.md#deleteweb3launchfollowcreator) | **DELETE** /v1/web3/launches/{id}/follow-creator | Stop following the creator of a launch. Returns &#x60;{ following }&#x60;.
*Web3Api* | [**deleteWeb3LaunchPerk**](docs/Api/Web3Api.md#deleteweb3launchperk) | **DELETE** /v1/web3/launches/{id}/perks | Remove every collection perk of a launch. Returns &#x60;{ ok }&#x60;.
*Web3Api* | [**deleteWeb3MarketplaceKey**](docs/Api/Web3Api.md#deleteweb3marketplacekey) | **DELETE** /v1/web3/marketplace-keys/{marketplace} | Remove your own key for a marketplace; Crossly&#39;s key is used again.
*Web3Api* | [**deleteWeb3StoreWallet**](docs/Api/Web3Api.md#deleteweb3storewallet) | **DELETE** /v1/web3/store-wallets/{walletId} | Stop the store selling from a wallet (the wallet and its other stores are unaffected).
*Web3Api* | [**deleteWeb3Wallet**](docs/Api/Web3Api.md#deleteweb3wallet) | **DELETE** /v1/web3/wallets/{id} | Unlink a wallet. Its NFTs stay in inventory but stop syncing.
*Web3Api* | [**getWeb3Auction**](docs/Api/Web3Api.md#getweb3auction) | **GET** /v1/web3/auctions/{chain}/{contract}/{tokenId} | A token&#39;s live (or latest) auction: reserve, end, top bid, bid count and the minimum next bid.
*Web3Api* | [**getWeb3Balance**](docs/Api/Web3Api.md#getweb3balance) | **GET** /v1/web3/balances | Every CBX you have, in one read, with the three balances kept apart.
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
*Web3Api* | [**getWeb3LaunchStat**](docs/Api/Web3Api.md#getweb3launchstat) | **GET** /v1/web3/launches/{id}/stats | A launch’s phase timeline, mint progress, proceeds (gross, Crossly’s cut, yours; airdrops excluded), allowlist and art counts, and recent mints.
*Web3Api* | [**getWeb3LaunchTool**](docs/Api/Web3Api.md#getweb3launchtool) | **GET** /v1/web3/launches/{id}/tools | A launch’s creator tools: allowlist size and root (and whether the contract has it yet), uploaded art and reveal, supply minted.
*Web3Api* | [**getWeb3OrderFulfillment**](docs/Api/Web3Api.md#getweb3orderfulfillment) | **GET** /v1/web3/orders/{chain}/{hash}/fulfillment | The signed order a taker passes to Seaport, after re-checking it can still fill.
*Web3Api* | [**getWeb3Phygital**](docs/Api/Web3Api.md#getweb3phygital) | **GET** /v1/web3/phygitals/{chain}/{contract}/{tokenId} | A token&#39;s phygital: the physical item it can be redeemed for, and whether it has been.
*Web3Api* | [**getWeb3Phygital2**](docs/Api/Web3Api.md#getweb3phygital2) | **GET** /v1/web3/phygitals | Phygitals you linked (with each redemption and its shipping address) and ones you redeemed.
*Web3Api* | [**getWeb3Portfolio**](docs/Api/Web3Api.md#getweb3portfolio) | **GET** /v1/web3/portfolio | Your NFTs with value (Crossly floor, else recent sales) and cost (what a linked wallet paid), realised sales, and USD totals at each day’s coin price.
*Web3Api* | [**getWeb3PortfolioTax**](docs/Api/Web3Api.md#getweb3portfoliotax) | **GET** /v1/web3/portfolio/tax | One calendar year of NFT disposals from your linked wallets as CSV text: acquired, sold, proceeds, cost basis, gain (coin and USD).
*Web3Api* | [**getWeb3Profile**](docs/Api/Web3Api.md#getweb3profile) | **GET** /v1/web3/profiles/{address} | A wallet&#39;s public profile: NFTs held, open Crossly listings, and activity.
*Web3Api* | [**getWeb3Resolve**](docs/Api/Web3Api.md#getweb3resolve) | **GET** /v1/web3/resolve/{chain}/{slug} | A collection&#39;s chain and contract from its readable URL slug (e.g. eth / boredapeyachtclub).
*Web3Api* | [**getWeb3SolanaCollectionTensorBid**](docs/Api/Web3Api.md#getweb3solanacollectiontensorbid) | **GET** /v1/web3/solana/collections/{collection}/tensor-bids | A Solana collection’s Tensor bids (collection-wide and by trait), best first; price in lamports. Needs your Tensor key.
*Web3Api* | [**getWeb3Staking**](docs/Api/Web3Api.md#getweb3staking) | **GET** /v1/web3/staking | Your CBX stake: what is locked, its tier, the tier ladder and your past positions.
*Web3Api* | [**getWeb3StoreWalletHolding**](docs/Api/Web3Api.md#getweb3storewalletholding) | **GET** /v1/web3/store-wallets/{walletId}/holdings | What a store wallet holds (chain + contract + token id), each marked in-inventory or not.
*Web3Api* | [**getWeb3StoreWalletNft**](docs/Api/Web3Api.md#getweb3storewalletnft) | **GET** /v1/web3/store-wallets/nfts | The store&#39;s Crossly NFTs: plots (deeds and leases), streets its owner founded and vault receipt tokens in its wallets, with the wallets a plot purchase and a receipt export use.
*Web3Api* | [**getWeb3Token**](docs/Api/Web3Api.md#getweb3token) | **GET** /v1/web3/tokens/{chain}/{contract}/{tokenId} | One NFT: metadata, traits, owner, open listings and offers, activity.
*Web3Api* | [**getWeb3WalletHolding**](docs/Api/Web3Api.md#getweb3walletholding) | **GET** /v1/web3/wallets/{id}/holdings | What a linked wallet holds right now, each NFT marked &#x60;inInventory&#x60; or not. Reads the chain; writes nothing.
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
*Web3Api* | [**listWeb3HolderPerks**](docs/Api/Web3Api.md#listweb3holderperks) | **GET** /v1/web3/holder-perks | DEPRECATED: use /api/v1/discounts/holders. Your Collection holders deals in the old holder-perk shape, best first.
*Web3Api* | [**listWeb3LaunchPerks**](docs/Api/Web3Api.md#listweb3launchperks) | **GET** /v1/web3/launches/{id}/perks | The perks holders of this launch’s collection get (percent off your shop, early drop access, a World item, a loyalty tier, live early entry, an event ticket).
*Web3Api* | [**listWeb3Launches**](docs/Api/Web3Api.md#listweb3launches) | **GET** /v1/web3/launches | Your launchpad collections (drafts and live), newest first, with minted count and phase.
*Web3Api* | [**listWeb3Listings**](docs/Api/Web3Api.md#listweb3listings) | **GET** /v1/web3/listings | Open NFT listings in the Crossly book — the cheapest per token.
*Web3Api* | [**listWeb3MarketplaceKeys**](docs/Api/Web3Api.md#listweb3marketplacekeys) | **GET** /v1/web3/marketplace-keys | Your own marketplace API keys (last four characters only) and whether Crossly&#39;s key covers each marketplace.
*Web3Api* | [**listWeb3Nfts**](docs/Api/Web3Api.md#listweb3nfts) | **GET** /v1/web3/nfts | List the NFTs in your inventory, imported from your linked wallets.
*Web3Api* | [**listWeb3Orders**](docs/Api/Web3Api.md#listweb3orders) | **GET** /v1/web3/orders | Your orders in the Crossly book (listings and offers), any status. With X-Storefront-Id: that store&#39;s listings (offers always).
*Web3Api* | [**listWeb3Purchases**](docs/Api/Web3Api.md#listweb3purchases) | **GET** /v1/web3/purchases | NFTs your linked wallets bought — on Crossly or any marketplace the chain feed saw — newest first, with price and whether you still hold each.
*Web3Api* | [**listWeb3Rankings**](docs/Api/Web3Api.md#listweb3rankings) | **GET** /v1/web3/rankings | Collections by sales volume over 24h, 7d or 30d, in one coin: the ETH chains together, or Polygon / Solana on their own.
*Web3Api* | [**listWeb3Reserved**](docs/Api/Web3Api.md#listweb3reserved) | **GET** /v1/web3/reserved | Private listings reserved for one of your linked wallets — only you can see or buy them.
*Web3Api* | [**listWeb3Sales**](docs/Api/Web3Api.md#listweb3sales) | **GET** /v1/web3/sales | The latest NFT sales across the directory, from the chain (Seaport and Blur) and the Crossly book, newest first; page with &#x60;before&#x60;.
*Web3Api* | [**listWeb3Search**](docs/Api/Web3Api.md#listweb3search) | **GET** /v1/web3/search | Find collections by contract address (every chain) or by name.
*Web3Api* | [**listWeb3SearchTokens**](docs/Api/Web3Api.md#listweb3searchtokens) | **GET** /v1/web3/search/tokens | Find tokens by collection name and number: &#39;pudgy 42&#39;, &#39;Bored Ape #1234&#39;.
*Web3Api* | [**listWeb3StoreWalletBalances**](docs/Api/Web3Api.md#listweb3storewalletbalances) | **GET** /v1/web3/store-wallets/balances | The native-coin balance (SOL, ETH, POL, …) of each of the store&#39;s selling wallets, read on chain.
*Web3Api* | [**listWeb3StoreWallets**](docs/Api/Web3Api.md#listweb3storewallets) | **GET** /v1/web3/store-wallets | List the store&#39;s selling wallets (X-Storefront-Id; default store when omitted).
*Web3Api* | [**listWeb3Wallets**](docs/Api/Web3Api.md#listweb3wallets) | **GET** /v1/web3/wallets | List your verified, linked wallets (EVM and Solana).
*Web3Api* | [**listWeb3Watchlist**](docs/Api/Web3Api.md#listweb3watchlist) | **GET** /v1/web3/watchlist | Your favourited NFTs, with the cheapest open Crossly listing and the last sale of each.
*Web3Api* | [**updateWeb3HolderPerk**](docs/Api/Web3Api.md#updateweb3holderperk) | **PUT** /v1/web3/holder-perks | DEPRECATED: use /api/v1/discounts/holders. Set the percent off (100–5000 bps) holders of a collection get in your store (the key’s store, else the default); one per collection.
*Web3Api* | [**updateWeb3Launch**](docs/Api/Web3Api.md#updateweb3launch) | **PATCH** /v1/web3/launches/{id} | Edit a launch draft (or a failed deploy) before it deploys: any creation field except chain and owner. The schedule is re-checked; 409 once live.
*Web3Api* | [**updateWeb3LaunchAllowlist**](docs/Api/Web3Api.md#updateweb3launchallowlist) | **PUT** /v1/web3/launches/{id}/allowlist | Replace the early-phase allowlist (up to 10,000 wallets). EVM live launches get back &#x60;rootTx&#x60;, the setAllowlistRoot transaction for the owner wallet.
*Web3Api* | [**updateWeb3LaunchPerk**](docs/Api/Web3Api.md#updateweb3launchperk) | **PUT** /v1/web3/launches/{id}/perks | Replace a launch’s collection perks: &#x60;{ perks: [{ config: { type, ... }, active }] }&#x60;, one per type; a type left out is removed.
*Web3Api* | [**updateWeb3MarketplaceKey**](docs/Api/Web3Api.md#updateweb3marketplacekey) | **PUT** /v1/web3/marketplace-keys/{marketplace} | Save your own API key for a marketplace (checked against the marketplace first where it can be); stored encrypted.
*Web3Api* | [**updateWeb3StoreWallet**](docs/Api/Web3Api.md#updateweb3storewallet) | **PATCH** /v1/web3/store-wallets/{walletId} | Turn on or off whether syncing this store wallet adds new NFTs to the store’s inventory (X-Storefront-Id).
*Web3Api* | [**updateWeb3StoreWalletDefault**](docs/Api/Web3Api.md#updateweb3storewalletdefault) | **PUT** /v1/web3/store-wallets/{walletId}/default | Make a linked wallet the store&#39;s default selling wallet on its network (EVM or Solana).
*Web3Api* | [**updateWeb3Wallet**](docs/Api/Web3Api.md#updateweb3wallet) | **PATCH** /v1/web3/wallets/{id} | Change a linked wallet: &#x60;autoImport&#x60; (a sync adds new NFTs to inventory; off, it only refreshes the ones there) and &#x60;label&#x60;.
*WebhooksApi* | [**createWebhook**](docs/Api/WebhooksApi.md#createwebhook) | **POST** /v1/webhooks | Register a webhook endpoint (returns the signing secret once).
*WebhooksApi* | [**createWebhookDeliveryRedeliver**](docs/Api/WebhooksApi.md#createwebhookdeliveryredeliver) | **POST** /v1/webhooks/{id}/deliveries/{deliveryId}/redeliver | Redeliver one past delivery: a new delivery (new Crossly-Delivery-Id) of the same event id and payload.
*WebhooksApi* | [**createWebhookTest**](docs/Api/WebhooksApi.md#createwebhooktest) | **POST** /v1/webhooks/{id}/test | Fire a test delivery to one webhook: test.ping, or a sample of any event (body {\&quot;event\&quot;:\&quot;order.created\&quot;}, payload marked test: true).
*WebhooksApi* | [**deleteWebhook**](docs/Api/WebhooksApi.md#deletewebhook) | **DELETE** /v1/webhooks/{id} | Delete a webhook endpoint.
*WebhooksApi* | [**getWebhookStream**](docs/Api/WebhooksApi.md#getwebhookstream) | **GET** /v1/webhooks/stream | Stream this account&#39;s webhook events as they happen (SSE).
*WebhooksApi* | [**listWebhookDeliveries**](docs/Api/WebhooksApi.md#listwebhookdeliveries) | **GET** /v1/webhooks/{id}/deliveries | List deliveries to one webhook (30 days, newest first): event, status, attempts, last HTTP status and error, payload.
*WebhooksApi* | [**listWebhooks**](docs/Api/WebhooksApi.md#listwebhooks) | **GET** /v1/webhooks | List your registered webhook endpoints.
*WholesaleApi* | [**createWholesaleBuyerInvite**](docs/Api/WholesaleApi.md#createwholesalebuyerinvite) | **POST** /v1/wholesale/buyers/invite | Invite a buyer by email to one or more of your catalogs. Binds to their account now if they have one, or when they sign up.
*WholesaleApi* | [**createWholesaleBuyerRemove**](docs/Api/WholesaleApi.md#createwholesalebuyerremove) | **POST** /v1/wholesale/buyers/remove | Revoke every catalog grant a buyer (or invited email) has with you. Their terms and invoices are kept.
*WholesaleApi* | [**createWholesaleCatalog**](docs/Api/WholesaleApi.md#createwholesalecatalog) | **POST** /v1/wholesale/catalogs | Create a catalog. visibility public | public_prices_private (prices for approved buyers) | private_discoverable (listed, opened on approval) | link (anyone with the URL) | invite (named buyers only; \&quot;private\&quot; is accepted as invite); autoApprove never | verified | all; the cascade terms (minOrderQuantity, casePack, leadTimeDays, verifiedOnly, priceVisibility, maxPerOrder, backorder, restockEta, preset ids) default every item; listed advertises a public catalog in the wholesale directory (never its prices).
*WholesaleApi* | [**createWholesaleCatalogItem**](docs/Api/WholesaleApi.md#createwholesalecatalogitem) | **POST** /v1/wholesale/catalogs/{id}/items | Add your Crossly listings to a catalog (up to 500), each with an optional wholesalePriceCents, minOrderQuantity and casePack. Items already in the catalog have their terms updated.
*WholesaleApi* | [**createWholesaleDrop**](docs/Api/WholesaleApi.md#createwholesaledrop) | **POST** /v1/wholesale/drops | Create a draft trade drop: name, dropAt (ISO; when it opens), audience trade|catalog (+ audienceCatalogId), kind release|prebook. A pre-book needs depositBps (100-9900) and shipBy (YYYY-MM-DD), and takes balanceNetDays (0-90) for the balance invoice. listingIds are your listing ids, each on Crossly. A pre-book makes its listings pre-orders, so buyers pay the deposit at checkout. Schedule it with PATCH status \&quot;scheduled\&quot;.
*WholesaleApi* | [**createWholesaleDropRelease**](docs/Api/WholesaleApi.md#createwholesaledroprelease) | **POST** /v1/wholesale/drops/{id}/release | Release a live pre-book: every reserved balance becomes an invoice on account to its buyer (due in the drop balanceNetDays), emailed, and the drop ends. Safe to retry: only balances not yet invoiced are invoiced. Returns { invoiced, balanceCents, invoiceIds }.
*WholesaleApi* | [**createWholesaleFreightRequestAnswer**](docs/Api/WholesaleApi.md#createwholesalefreightrequestanswer) | **POST** /v1/wholesale/freight-requests/{id}/answer | Answer an open freight request with a figure in CENTS (and an optional note).
*WholesaleApi* | [**createWholesaleGroup**](docs/Api/WholesaleApi.md#createwholesalegroup) | **POST** /v1/wholesale/groups | Create a customer group with a discount in basis points (up to 9000). A buyer in several groups gets the best rate, never a stacked one.
*WholesaleApi* | [**createWholesaleGroupMember**](docs/Api/WholesaleApi.md#createwholesalegroupmember) | **POST** /v1/wholesale/groups/{id}/members | Add a buyer to a group by account id or by the email of an existing Crossly account.
*WholesaleApi* | [**createWholesaleInvoiceCreditNote**](docs/Api/WholesaleApi.md#createwholesaleinvoicecreditnote) | **POST** /v1/wholesale/invoices/{id}/credit-notes | Issue a credit note on an on-account invoice (short shipment, damaged, pricing error, returned, goodwill, other): at most the balance due. Numbered &lt;invoice&gt;-CN&lt;n&gt;; settling the rest closes the invoice paid. Not a refund.
*WholesaleApi* | [**createWholesaleInvoiceLateFee**](docs/Api/WholesaleApi.md#createwholesaleinvoicelatefee) | **POST** /v1/wholesale/invoices/{id}/late-fee | Add your late fee (invoice settings lateFeeBps) to an invoice by hand, once. The hourly sweep adds it automatically when an invoice goes overdue.
*WholesaleApi* | [**createWholesaleInvoiceMarkPaid**](docs/Api/WholesaleApi.md#createwholesaleinvoicemarkpaid) | **POST** /v1/wholesale/invoices/{id}/mark-paid | Record a payment the buyer made to you directly: method ach | check | wire | card | other, a reference, and amountCents (omit for the whole balance). When the invoice is settled, Crossly&#39;s fee and the tax it remits are charged to your billing card.
*WholesaleApi* | [**createWholesaleInvoiceSend**](docs/Api/WholesaleApi.md#createwholesaleinvoicesend) | **POST** /v1/wholesale/invoices/{id}/send | Email the invoice to the buyer again (an overdue one goes as an overdue notice), with the link to pay it.
*WholesaleApi* | [**createWholesaleInvoiceVoid**](docs/Api/WholesaleApi.md#createwholesaleinvoicevoid) | **POST** /v1/wholesale/invoices/{id}/void | Void an invoice nobody has paid anything on (e.g. the order was cancelled). It stops counting against the buyer&#39;s credit limit.
*WholesaleApi* | [**createWholesaleInvoiceWriteOff**](docs/Api/WholesaleApi.md#createwholesaleinvoicewriteoff) | **POST** /v1/wholesale/invoices/{id}/write-off | Write off what is left on an invoice (bad debt): it closes as written_off and stops counting against the buyer&#39;s credit.
*WholesaleApi* | [**createWholesaleProfileShipsFromValidate**](docs/Api/WholesaleApi.md#createwholesaleprofileshipsfromvalidate) | **POST** /v1/wholesale/profile/ships-from/validate | Check a ships-from origin ({ postalCode, country, city?, region? }) with the shipping validator without saving it. 400 invalid_ships_from with the issues; 422 for an embargoed origin.
*WholesaleApi* | [**createWholesaleQuoteAnswer**](docs/Api/WholesaleApi.md#createwholesalequoteanswer) | **POST** /v1/wholesale/quotes/{id}/answer | Answer (or revise) a quote: a unit price in CENTS per item you quote, an expiresAt (ISO, at most 90 days out) and an optional note. Items left out are not quoted. The buyer is notified and can accept until expiry.
*WholesaleApi* | [**createWholesaleQuoteDecline**](docs/Api/WholesaleApi.md#createwholesalequotedecline) | **POST** /v1/wholesale/quotes/{id}/decline | Decline a quote request, with an optional reason the buyer sees.
*WholesaleApi* | [**createWholesaleRequestDecide**](docs/Api/WholesaleApi.md#createwholesalerequestdecide) | **POST** /v1/wholesale/requests/{id}/decide | Approve (grants access to that catalog; optional groupId adds the buyer to a customer group) or decline (optional reason) an access request.
*WholesaleApi* | [**createWholesaleTierBulk**](docs/Api/WholesaleApi.md#createwholesaletierbulk) | **POST** /v1/wholesale/tiers/bulk | One ladder for many listings: breaks as [{ minQuantity, discountBps }] off each listing&#39;s own price. Returns how many were updated and which were skipped and why.
*WholesaleApi* | [**deleteWholesaleBuyerTerm**](docs/Api/WholesaleApi.md#deletewholesalebuyerterm) | **DELETE** /v1/wholesale/buyers/{buyerUserId}/terms | Switch a buyer&#39;s account terms off. Invoices already issued are unaffected.
*WholesaleApi* | [**deleteWholesaleCatalog**](docs/Api/WholesaleApi.md#deletewholesalecatalog) | **DELETE** /v1/wholesale/catalogs/{id} | Delete a catalog with its items, grants and access requests. Orders and invoices are untouched.
*WholesaleApi* | [**deleteWholesaleCatalogItem**](docs/Api/WholesaleApi.md#deletewholesalecatalogitem) | **DELETE** /v1/wholesale/catalogs/{id}/items/{platformListingId} | Take an item out of a catalog. The listing itself is untouched.
*WholesaleApi* | [**deleteWholesaleGroup**](docs/Api/WholesaleApi.md#deletewholesalegroup) | **DELETE** /v1/wholesale/groups/{id} | Delete a customer group. Its members keep any other group or account rate.
*WholesaleApi* | [**deleteWholesaleGroupMember**](docs/Api/WholesaleApi.md#deletewholesalegroupmember) | **DELETE** /v1/wholesale/groups/{id}/members/{buyerUserId} | Take a buyer out of a group.
*WholesaleApi* | [**getWholesaleCatalogLineSheet**](docs/Api/WholesaleApi.md#getwholesalecataloglinesheet) | **GET** /v1/wholesale/catalogs/{id}/line-sheet | The catalog&#39;s line sheet: your company details and terms, then every item with retail and trade price, minimum, case pack and quantity breaks.
*WholesaleApi* | [**getWholesaleCatalogShare**](docs/Api/WholesaleApi.md#getwholesalecatalogshare) | **GET** /v1/wholesale/catalogs/{id}/share | The catalog&#39;s buyer link (null until you have a shop username), to share or print as a QR code.
*WholesaleApi* | [**getWholesaleCategory**](docs/Api/WholesaleApi.md#getwholesalecategory) | **GET** /v1/wholesale/categories | The wholesale category taxonomy (id, label, group). A catalog or trade profile takes up to 12 ids, or \&quot;other:&lt;words&gt;\&quot;.
*WholesaleApi* | [**getWholesaleDrop**](docs/Api/WholesaleApi.md#getwholesaledrop) | **GET** /v1/wholesale/drops/{id} | One trade drop with its listings and, for a pre-book, every reservation: buyer, item, quantity, deposit, balance, status and the balance invoice once released.
*WholesaleApi* | [**getWholesaleInvoice**](docs/Api/WholesaleApi.md#getwholesaleinvoice) | **GET** /v1/wholesale/invoices/{id} | One invoice with its lines, PO reference, payments and whether Crossly dues on it are collected.
*WholesaleApi* | [**getWholesaleOverview**](docs/Api/WholesaleApi.md#getwholesaleoverview) | **GET** /v1/wholesale/overview | Your wholesale store at a glance: the setup checklist, 30-day wholesale revenue, open orders, outstanding invoices, active buyers and pending access requests.
*WholesaleApi* | [**getWholesaleProfile**](docs/Api/WholesaleApi.md#getwholesaleprofile) | **GET** /v1/wholesale/profile | A store&#39;s trade profile (X-Storefront-Id; default store when omitted): company, tagline, logo and banner, contact, ships-from origin, lead time, order minimums (opening, first order, reorder), the default MOQ / case pack / max per order / backorder / price visibility, return, payment and shipping preset ids, invoicing and its settings, buyer requirements and the directory defaults.
*WholesaleApi* | [**getWholesaleQuote**](docs/Api/WholesaleApi.md#getwholesalequote) | **GET** /v1/wholesale/quotes/{id} | One quote request.
*WholesaleApi* | [**getWholesaleReserve**](docs/Api/WholesaleApi.md#getwholesalereserve) | **GET** /v1/wholesale/reserve/{inventoryItemId} | How many units of an inventory item are held back for wholesale, and what retail channels advertise.
*WholesaleApi* | [**getWholesaleTermPreview**](docs/Api/WholesaleApi.md#getwholesaletermpreview) | **GET** /v1/wholesale/terms/preview | The trade terms that apply to a catalog item (?catalogId&amp;platformListingId), a catalog (?catalogId) or the trade profile alone, each with its source (item, catalog, profile, default), plus the return, payment and shipping policies they resolve to.
*WholesaleApi* | [**listWholesaleBuyers**](docs/Api/WholesaleApi.md#listwholesalebuyers) | **GET** /v1/wholesale/buyers | Your trade buyers: catalogs they can open, customer groups, account terms, outstanding balance, wholesale spend, business verification and resale-certificate status (read-only — Crossly reviews those).
*WholesaleApi* | [**listWholesaleCatalogItems**](docs/Api/WholesaleApi.md#listwholesalecatalogitems) | **GET** /v1/wholesale/catalogs/{id}/items | A catalog&#39;s items in merchandising order, each with its retail price, trade price, minimum order quantity, case pack and quantity breaks.
*WholesaleApi* | [**listWholesaleCatalogs**](docs/Api/WholesaleApi.md#listwholesalecatalogs) | **GET** /v1/wholesale/catalogs | Your wholesale catalogs with item, buyer-grant and pending-request counts.
*WholesaleApi* | [**listWholesaleDrops**](docs/Api/WholesaleApi.md#listwholesaledrops) | **GET** /v1/wholesale/drops | Your trade drops and pre-books: audience (trade &#x3D; your approved trade buyers, catalog &#x3D; whoever can open audienceCatalogId), kind (release | prebook), deposit, ship date, status, and for a pre-book its reservation totals (buyers, units, deposits taken, balances still to invoice).
*WholesaleApi* | [**listWholesaleFreightRequests**](docs/Api/WholesaleApi.md#listwholesalefreightrequests) | **GET** /v1/wholesale/freight-requests | Freight (LTL) quote requests from buyers whose order is over your pallet threshold.
*WholesaleApi* | [**listWholesaleGroups**](docs/Api/WholesaleApi.md#listwholesalegroups) | **GET** /v1/wholesale/groups | Your customer groups with their discount and members.
*WholesaleApi* | [**listWholesaleInvoices**](docs/Api/WholesaleApi.md#listwholesaleinvoices) | **GET** /v1/wholesale/invoices | On-account invoices, newest first, with balance due. ?status&#x3D;unpaid for open, partial and overdue together.
*WholesaleApi* | [**listWholesaleOrders**](docs/Api/WholesaleApi.md#listwholesaleorders) | **GET** /v1/wholesale/orders | Wholesale orders: Crossly orders priced through your trade terms (catalog price, quantity break or account rate) or placed on account. Fulfil them like any order.
*WholesaleApi* | [**listWholesaleQuotes**](docs/Api/WholesaleApi.md#listwholesalequotes) | **GET** /v1/wholesale/quotes | Quote requests (RFQ) from trade buyers: items with quantity and target price, your quoted prices and expiry. ?status&#x3D;open lists the ones waiting on you or the buyer.
*WholesaleApi* | [**listWholesaleRequests**](docs/Api/WholesaleApi.md#listwholesalerequests) | **GET** /v1/wholesale/requests | Requests from buyers to open your private or trade-only catalogs, with each buyer&#39;s business-verification and tax-exempt status. ?status&#x3D;all includes decided ones.
*WholesaleApi* | [**listWholesaleSetupSteps**](docs/Api/WholesaleApi.md#listwholesalesetupsteps) | **GET** /v1/wholesale/setup-steps | The wholesale setup checklist for a store: profile, ships-from, payment, returns, a catalog with items, visibility chosen, live. Each step is done because the thing exists.
*WholesaleApi* | [**updateWholesaleBuyerTerm**](docs/Api/WholesaleApi.md#updatewholesalebuyerterm) | **PUT** /v1/wholesale/buyers/{buyerUserId}/terms | Set a buyer&#39;s account terms: netDays (0-120) for paying on account, creditLimitCents (the most they may owe you at once; null &#x3D; no limit) and discountPercentBps (their negotiated rate).
*WholesaleApi* | [**updateWholesaleCatalog**](docs/Api/WholesaleApi.md#updatewholesalecatalog) | **PATCH** /v1/wholesale/catalogs/{id} | Edit a catalog: name, slug, description, cover image, visibility, opening-order minimum, trade gate, directory listing, active.
*WholesaleApi* | [**updateWholesaleCatalogItem**](docs/Api/WholesaleApi.md#updatewholesalecatalogitem) | **PATCH** /v1/wholesale/catalogs/{id}/items | Change many catalog items at once: items[] sets each row (trade price, MOQ, case pack, lead time, max per order, backorder, restock date, verified-only, price visibility, preset ids); or platformListingIds + set applies the same values to each, set.pctOffRetailBps pricing each from its retail price.
*WholesaleApi* | [**updateWholesaleCatalogItemByPlatformListingId**](docs/Api/WholesaleApi.md#updatewholesalecatalogitembyplatformlistingid) | **PATCH** /v1/wholesale/catalogs/{id}/items/{platformListingId} | Change one item&#39;s trade price and its own trade terms in this catalog (MOQ, case pack, lead time, max per order, backorder, restock date, verified-only, price visibility, preset ids). null clears &#x3D; inherit from the catalog.
*WholesaleApi* | [**updateWholesaleCatalogItemOrder**](docs/Api/WholesaleApi.md#updatewholesalecatalogitemorder) | **PUT** /v1/wholesale/catalogs/{id}/items/order | Set the merchandising order: platform listing ids, first to last. Items left out keep their relative order after these.
*WholesaleApi* | [**updateWholesaleDrop**](docs/Api/WholesaleApi.md#updatewholesaledrop) | **PATCH** /v1/wholesale/drops/{id} | Edit a trade drop (any create field but kind), schedule it (status \&quot;scheduled\&quot;, with dropAt in the future) or cancel it. A live drop can only be cancelled or have endsAt / perCustomerLimit changed.
*WholesaleApi* | [**updateWholesaleGroup**](docs/Api/WholesaleApi.md#updatewholesalegroup) | **PATCH** /v1/wholesale/groups/{id} | Rename a group, change its discount, or pause it (active&#x3D;false).
*WholesaleApi* | [**updateWholesaleListingTier**](docs/Api/WholesaleApi.md#updatewholesalelistingtier) | **PUT** /v1/wholesale/listings/{platformListingId}/tiers | Replace one listing&#39;s quantity breaks: [{ minQuantity ≥ 2, unitPriceCents }], each cheaper than the last and than the list price. An empty list removes them. Applies to every buyer at checkout.
*WholesaleApi* | [**updateWholesaleProfile**](docs/Api/WholesaleApi.md#updatewholesaleprofile) | **PUT** /v1/wholesale/profile | Save a store&#39;s trade profile. Omitted fields are unchanged; null clears. shipsFrom is checked by the shipping validator (400 invalid_ships_from). The profile is the bottom of the trade-terms cascade: catalogs and items that leave a term empty inherit it — saving never rewrites catalogs. Preset ids must be your own presets of that kind.
*WholesaleApi* | [**updateWholesaleReserve**](docs/Api/WholesaleApi.md#updatewholesalereserve) | **PUT** /v1/wholesale/reserve/{inventoryItemId} | Reserve N units of an inventory item for wholesale: retail channels advertise the rest and come down when only the reserve is left. 0 clears it.
*WorkflowsApi* | [**createWorkflow**](docs/Api/WorkflowsApi.md#createworkflow) | **POST** /v1/workflows | Create a workflow: from blank ({ name, graph? }), from a template ({ from: \&quot;template\&quot;, templateId, setup?, activate? }) or from an export document ({ from: \&quot;import\&quot;, document }). New workflows start paused; activate one with POST /v1/workflows/{id}/activate. Returns the workflow and its validation issues.
*WorkflowsApi* | [**createWorkflowActivate**](docs/Api/WorkflowsApi.md#createworkflowactivate) | **POST** /v1/workflows/{id}/activate | Activate a workflow: its triggers start firing. A graph with blocking issues is refused (422, details.issues).
*WorkflowsApi* | [**createWorkflowApprovalDecide**](docs/Api/WorkflowsApi.md#createworkflowapprovaldecide) | **POST** /v1/workflow-approvals/{id}/decide | Approve or reject a pending flow.approval request: the waiting run resumes down the approved or rejected port. 409 when it was already decided (another device, Telegram, or the timeout).
*WorkflowsApi* | [**createWorkflowChain**](docs/Api/WorkflowsApi.md#createworkflowchain) | **POST** /v1/workflow-chains | Create a multi-step workflow chain.
*WorkflowsApi* | [**createWorkflowChainRunNow**](docs/Api/WorkflowsApi.md#createworkflowchainrunnow) | **POST** /v1/workflow-chains/{id}/run-now | Enqueue an ad-hoc run of a workflow chain.
*WorkflowsApi* | [**createWorkflowChainToggle**](docs/Api/WorkflowsApi.md#createworkflowchaintoggle) | **POST** /v1/workflow-chains/{id}/toggle | Flip a workflow chain between active and inactive.
*WorkflowsApi* | [**createWorkflowDeactivate**](docs/Api/WorkflowsApi.md#createworkflowdeactivate) | **POST** /v1/workflows/{id}/deactivate | Pause a workflow: its triggers stop firing. Runs already started finish.
*WorkflowsApi* | [**createWorkflowDuplicate**](docs/Api/WorkflowsApi.md#createworkflowduplicate) | **POST** /v1/workflows/{id}/duplicate | Copy a workflow (graph, description, tags) into a new paused workflow.
*WorkflowsApi* | [**createWorkflowExpressionPreview**](docs/Api/WorkflowsApi.md#createworkflowexpressionpreview) | **POST** /v1/workflows/expressions/preview | Resolve one param value (\&quot;{{ $json.priceCents * 0.9 }}\&quot;) with the engine&#39;s evaluator against an item, the trigger item, earlier nodes&#39; items or a stored run. A bad expression is an answer (ok&#x3D;false with the message), not an HTTP error. Changes nothing.
*WorkflowsApi* | [**createWorkflowImport**](docs/Api/WorkflowsApi.md#createworkflowimport) | **POST** /v1/workflows/import | Import a crossly.workflow export document (or { document, name }) as a new, paused workflow. Integration and workflow references are cleared (they belong to the exporting account) and listed in stripped.
*WorkflowsApi* | [**createWorkflowRun**](docs/Api/WorkflowsApi.md#createworkflowrun) | **POST** /v1/workflows/{id}/run | Run a workflow (active or paused) live now, on items you pass or on selected listings / orders / inventory items (one kind per call, up to 1,000). The graph must validate (422 with issues otherwise).
*WorkflowsApi* | [**createWorkflowRunCancel**](docs/Api/WorkflowsApi.md#createworkflowruncancel) | **POST** /v1/workflow-runs/{runId}/cancel | Cancel a queued, running or waiting run. 409 when it already finished.
*WorkflowsApi* | [**createWorkflowRunOn**](docs/Api/WorkflowsApi.md#createworkflowrunon) | **POST** /v1/workflows/run-on | \&quot;Run workflow on…\&quot;: the same as POST /v1/workflows/{id}/run with the workflow named in the body.
*WorkflowsApi* | [**createWorkflowRunRetry**](docs/Api/WorkflowsApi.md#createworkflowrunretry) | **POST** /v1/workflow-runs/{runId}/retry | Retry a failed run from the node that failed: a new run (retryOfRunId) seeded from the failed run&#39;s checkpoint, so nodes that succeeded are not repeated. 409 unless the run failed.
*WorkflowsApi* | [**createWorkflowSaleEnd**](docs/Api/WorkflowsApi.md#createworkflowsaleend) | **POST** /v1/workflows/sales/{saleEventId}/end | End a sale now. A sale that has not started is cancelled; a live one closes and every discounted price is put back now (reverted &#x3D; how many listings were restored). 404 for a sale that is not yours.
*WorkflowsApi* | [**createWorkflowTemplateUse**](docs/Api/WorkflowsApi.md#createworkflowtemplateuse) | **POST** /v1/workflows/templates/{id}/use | Create a workflow from a template, filling its setup fields; activate&#x3D;true activates it when it validates.
*WorkflowsApi* | [**createWorkflowTest**](docs/Api/WorkflowsApi.md#createworkflowtest) | **POST** /v1/workflows/{id}/test | Test a workflow (the saved graph, or a draft graph you pass). mode&#x3D;test runs it for real, using pinned data where a node has it; mode&#x3D;dry is a safe test: write, destructive and money nodes report what they would do and change nothing. Trigger items: the ones you pass, else pinned, else the last real ones, else the trigger sample.
*WorkflowsApi* | [**createWorkflowValidate**](docs/Api/WorkflowsApi.md#createworkflowvalidate) | **POST** /v1/workflows/validate | Validate a graph without saving it: unknown node types, missing required params, bad ports, cycles, expression errors. blocking&#x3D;true means activation would be refused.
*WorkflowsApi* | [**createWorkflowVersionRestore**](docs/Api/WorkflowsApi.md#createworkflowversionrestore) | **POST** /v1/workflows/{id}/versions/{v}/restore | Restore an earlier version&#39;s graph as a new version. Pass version (the current one you read) to refuse the restore when someone saved meanwhile (409). Body optional: { version?: integer }.
*WorkflowsApi* | [**createWorkflowWebhookRotate**](docs/Api/WorkflowsApi.md#createworkflowwebhookrotate) | **POST** /v1/workflows/{id}/webhooks/{nodeId}/rotate | Issue a new inbound URL for an on.webhook trigger node (the old one stops working). The URL, and the signing secret when withSecret&#x3D;true, are returned ONCE: store them now.
*WorkflowsApi* | [**deleteWorkflow**](docs/Api/WorkflowsApi.md#deleteworkflow) | **DELETE** /v1/workflows/{id} | Delete (archive) a workflow: its triggers stop, open runs are cancelled, run history stays readable.
*WorkflowsApi* | [**deleteWorkflowChain**](docs/Api/WorkflowsApi.md#deleteworkflowchain) | **DELETE** /v1/workflow-chains/{id} | Delete a workflow chain (cascades steps + runs).
*WorkflowsApi* | [**getWorkflow**](docs/Api/WorkflowsApi.md#getworkflow) | **GET** /v1/workflows/{id} | Get one workflow with its full graph and current version.
*WorkflowsApi* | [**getWorkflowCatalog**](docs/Api/WorkflowsApi.md#getworkflowcatalog) | **GET** /v1/workflows/catalog | Everything needed to build a workflow: every node type (params, ports, output fields, risk, platforms capability), which platforms each capability covers and which of those you have connected, the expression helpers and bindings ({{ $json.listingId }}…) and the condition operators. Read this before composing a graph rather than guessing node types or param keys.
*WorkflowsApi* | [**getWorkflowChain**](docs/Api/WorkflowsApi.md#getworkflowchain) | **GET** /v1/workflow-chains/{id} | Get one workflow chain with its steps.
*WorkflowsApi* | [**getWorkflowExport**](docs/Api/WorkflowsApi.md#getworkflowexport) | **GET** /v1/workflows/{id}/export | Export a workflow as a portable document (format crossly.workflow) that POST /v1/workflows/import accepts. Credentials and account handles are stripped; pinned test data only with pinnedData&#x3D;true.
*WorkflowsApi* | [**getWorkflowRun**](docs/Api/WorkflowsApi.md#getworkflowrun) | **GET** /v1/workflow-runs/{runId} | One run: its summary, the graph version it ran, and every node execution (status, item counts per port, timing, errors). Item data per node: GET …/nodes/{nodeId}.
*WorkflowsApi* | [**getWorkflowRunNode**](docs/Api/WorkflowsApi.md#getworkflowrunnode) | **GET** /v1/workflow-runs/{runId}/nodes/{nodeId} | Every execution of one node in a run with its input and output items (each port keeps the first 50 items, 16 KB per item; truncated&#x3D;true when cut). Data older than the retention window, or not kept by settings.saveSuccessData&#x3D;false, is pruned: that execution has input/output null and pruned&#x3D;true, and when every execution is pruned the response is { data: null, meta: { pruned: true } } (never an empty list).
*WorkflowsApi* | [**listWorkflowApprovals**](docs/Api/WorkflowsApi.md#listworkflowapprovals) | **GET** /v1/workflow-approvals | Approval requests from flow.approval nodes, newest first (pending only unless status says otherwise). Decide one with POST /v1/workflow-approvals/{id}/decide.
*WorkflowsApi* | [**listWorkflowChains**](docs/Api/WorkflowsApi.md#listworkflowchains) | **GET** /v1/workflow-chains | List workflow chains with their step graph.
*WorkflowsApi* | [**listWorkflowRuns**](docs/Api/WorkflowsApi.md#listworkflowruns) | **GET** /v1/workflows/{id}/runs | Run history of one workflow, newest first, with per-node status and item counts.
*WorkflowsApi* | [**listWorkflowRuns2**](docs/Api/WorkflowsApi.md#listworkflowruns2) | **GET** /v1/workflow-runs | Runs of every workflow, newest first. Filter by workflow, status, mode and time.
*WorkflowsApi* | [**listWorkflowSaleActive**](docs/Api/WorkflowsApi.md#listworkflowsaleactive) | **GET** /v1/workflows/sales/active | Every live or upcoming sale (a sales event started by a sale.start node) with the workflow that runs it: percent off, window, and how many listings it applies to.
*WorkflowsApi* | [**listWorkflowTemplates**](docs/Api/WorkflowsApi.md#listworkflowtemplates) | **GET** /v1/workflows/templates | Ready-made workflows (weekend sale, stale-listing markdowns, offer responder, ship-by alerts…), each a complete graph plus the setup fields its \&quot;use\&quot; call asks for.
*WorkflowsApi* | [**listWorkflowVersions**](docs/Api/WorkflowsApi.md#listworkflowversions) | **GET** /v1/workflows/{id}/versions | The saved versions of a workflow, newest first (restore one with POST …/versions/{v}/restore).
*WorkflowsApi* | [**listWorkflows**](docs/Api/WorkflowsApi.md#listworkflows) | **GET** /v1/workflows | List workflows, newest change first. A workflow is a graph of nodes: one or more triggers, then actions, lookups and flow nodes (if, switch, wait, approval…). Each row carries its trigger and node types and a 7-day run sparkline, not the graph (GET /v1/workflows/{id} has it).
*WorkflowsApi* | [**updateWorkflow**](docs/Api/WorkflowsApi.md#updateworkflow) | **PUT** /v1/workflows/{id} | Save a workflow. Pass the version you edited: a save over a newer version is 409 version_conflict (re-read and merge). Saving an active workflow validates it like activation does (422 with issues).
*WorkflowsApi* | [**updateWorkflowChain**](docs/Api/WorkflowsApi.md#updateworkflowchain) | **PUT** /v1/workflow-chains/{id} | Replace a workflow chain wholesale.
*WorldApi* | [**createGamePackBreak**](docs/Api/WorldApi.md#creategamepackbreak) | **POST** /v1/games/pack-break | Pack Break: your open pack of five real market pieces, or a fresh one. No prices until you pick.
*WorldApi* | [**createGamePackBreakPick**](docs/Api/WorldApi.md#creategamepackbreakpick) | **POST** /v1/games/pack-break/{id}/pick | Pick the pull you think is worth the most: every lowest open ask is revealed, and a win earns a fee-back coupon.
*WorldApi* | [**createShowroom**](docs/Api/WorldApi.md#createshowroom) | **POST** /v1/showrooms | Add a showroom. The first is included; an extra one has a monthly fee and is added in the dashboard (402 world_payment_failed here).
*WorldApi* | [**createShowroomPlacement**](docs/Api/WorldApi.md#createshowroomplacement) | **POST** /v1/showrooms/{id}/placement | Stand a showroom on a plot your store owns or rents (403 when it does not; 409 when another showroom stands there).
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
*WorldApi* | [**createSpatialStreetApply**](docs/Api/WorldApi.md#createspatialstreetapply) | **POST** /v1/spatial/streets/{slug}/apply | Ask to open your shop on a street whose owner reviews applications.
*WorldApi* | [**createSpatialStreetInvite**](docs/Api/WorldApi.md#createspatialstreetinvite) | **POST** /v1/spatial/streets/{slug}/invite | Invite a shop (by its slug) to open on a street you own.
*WorldApi* | [**createWorldAttendantTestChat**](docs/Api/WorldApi.md#createworldattendanttestchat) | **POST** /v1/world/attendant/test-chat | One test answer from your AI attendant, on your own AI key (409 ai_key_required without one).
*WorldApi* | [**createWorldAvatarEquip**](docs/Api/WorldApi.md#createworldavatarequip) | **POST** /v1/world/avatar/equip | Wear something you already own -- exactly ONE of { cosmeticId } (a cosmetic you hold), { receiptId } (a Crossly purchase from your closet) or { inventoryItemId } (your own stock). The slot comes from the thing itself; slot is only a fallback for an item with no catalog shape. Replaces whatever was in that slot. Moves no money. Answers the slot and your loadout after the change.
*WorldApi* | [**createWorldAvatarUnequip**](docs/Api/WorldApi.md#createworldavatarunequip) | **POST** /v1/world/avatar/unequip | Take off whatever is in one slot. Idempotent: an empty slot answers removed:false. Answers your loadout after the change.
*WorldApi* | [**createWorldAvatarWearable**](docs/Api/WorldApi.md#createworldavatarwearable) | **POST** /v1/world/avatar/wearables | Author a wearable for a body slot (a mesh profile and params, an asking price in COSM base units as a string). A submission: inactive until an operator approves it.
*WorldApi* | [**createWorldContest**](docs/Api/WorldApi.md#createworldcontest) | **POST** /v1/world/contests | Set up a skill contest on a game placed in your place: title, game (its instance id), entry { mode, feeCents? }, prizes by place, funder, window, attempts. Paid entry needs the operator to allow it where it runs.
*WorldApi* | [**createWorldContestEntrySettlePayment**](docs/Api/WorldApi.md#createworldcontestentrysettlepayment) | **POST** /v1/world/contests/entries/{id}/settle-payment | Read the fee of a paid entry back from Stripe and settle it (safe to repeat).
*WorldApi* | [**createWorldContestJoin**](docs/Api/WorldApi.md#createworldcontestjoin) | **POST** /v1/world/contests/{id}/join | Enter a contest. Free and sponsored contests take you in at once; a paid one answers a client secret to pay the entry fee.
*WorldApi* | [**createWorldConvention**](docs/Api/WorldApi.md#createworldconvention) | **POST** /v1/world/conventions | Host a convention in one of your rooms: title, dates, tables and how sellers get one (invite, free, a fee in cents, or a revenue share in basis points).
*WorldApi* | [**createWorldConventionAccept**](docs/Api/WorldApi.md#createworldconventionaccept) | **POST** /v1/world/conventions/{id}/accept | Accept: your own invitation (no body), or, as host, an application (username).
*WorldApi* | [**createWorldConventionApply**](docs/Api/WorldApi.md#createworldconventionapply) | **POST** /v1/world/conventions/{id}/apply | Ask for a table at a convention.
*WorldApi* | [**createWorldConventionBoothApply**](docs/Api/WorldApi.md#createworldconventionboothapply) | **POST** /v1/world/conventions/{id}/booths/apply | Apply for a booth tier (or book it at once in open mode): { tierId, note?, categories? }.
*WorldApi* | [**createWorldConventionBoothFee**](docs/Api/WorldApi.md#createworldconventionboothfee) | **POST** /v1/world/conventions/{id}/booth-fee | Pay your booth fee to the organiser on a Worlds rail: { rail: \&quot;cash\&quot; | \&quot;cbx\&quot; }. Once per booth. Full-access token and Idempotency-Key required.
*WorldApi* | [**createWorldConventionCheckIn**](docs/Api/WorldApi.md#createworldconventioncheckin) | **POST** /v1/world/conventions/{id}/check-in | Check in: the organiser names { exhibitorId }; an exhibitor checks themselves in with {}.
*WorldApi* | [**createWorldConventionFull**](docs/Api/WorldApi.md#createworldconventionfull) | **POST** /v1/world/conventions/full | Create a convention in full: venue + days (rented and paid now on the rail), hours, theme, booth tiers and prices, application or open booking, seller limits, promotion. Full-access token and Idempotency-Key required.
*WorldApi* | [**createWorldConventionInvite**](docs/Api/WorldApi.md#createworldconventioninvite) | **POST** /v1/world/conventions/{id}/invite | Invite a seller (by shop handle) to a convention you host.
*WorldApi* | [**createWorldConventionMessage**](docs/Api/WorldApi.md#createworldconventionmessage) | **POST** /v1/world/conventions/{id}/messages | Send a convention message: { body, toUserId? }. The organiser writes to one seller or every seller; an exhibitor writes to the organiser.
*WorldApi* | [**createWorldConventionPaid**](docs/Api/WorldApi.md#createworldconventionpaid) | **POST** /v1/world/conventions/{id}/paid | As host, record that a seller (username) paid their table fee off-platform. Moves no money.
*WorldApi* | [**createWorldConventionSellerAssign**](docs/Api/WorldApi.md#createworldconventionsellerassign) | **POST** /v1/world/conventions/{id}/sellers/assign | Move an accepted seller to another booth of their tier (swaps with whoever is there): { exhibitorId, boothKey }.
*WorldApi* | [**createWorldConventionSellerDecide**](docs/Api/WorldApi.md#createworldconventionsellerdecide) | **POST** /v1/world/conventions/{id}/sellers/decide | Approve (terms frozen, a booth assigned) or decline an application: { exhibitorId, decision }.
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
*WorldApi* | [**createWorldGamePackagePublish**](docs/Api/WorldApi.md#createworldgamepackagepublish) | **POST** /v1/world/games/packages/{id}/publish | Make an approved version the one every placed copy runs (rollback or roll-forward; running copies restart on it) and list the game again if it was unpublished. Body { version }. Starter seller plan or higher.
*WorldApi* | [**createWorldGamePackageRestore**](docs/Api/WorldApi.md#createworldgamepackagerestore) | **POST** /v1/world/games/packages/{id}/restore | Restore a deleted Classic game within 30 days (it comes back unpublished).
*WorldApi* | [**createWorldGamePackageUnpublish**](docs/Api/WorldApi.md#createworldgamepackageunpublish) | **POST** /v1/world/games/packages/{id}/unpublish | Take a Classic game off the Game Directory and the Carnival Plaza launcher, its store off sale. Copies people already placed keep running. Needs no plan: a lapsed creator can always take a game down.
*WorldApi* | [**createWorldGamePackageVersionSubmit**](docs/Api/WorldApi.md#createworldgamepackageversionsubmit) | **POST** /v1/world/games/packages/{id}/versions/{semver}/submit | Send a draft version (uploaded with submit: false) to review: the same static check, sandbox dry run and human review as an upload. Starter seller plan or higher.
*WorldApi* | [**createWorldGameRating**](docs/Api/WorldApi.md#createworldgamerating) | **POST** /v1/world/games/{id}/rating | Rate a game you played, 1 to 5 stars (rating again replaces it). Only players the runner recorded in that game can rate it.
*WorldApi* | [**createWorldGameReport**](docs/Api/WorldApi.md#createworldgamereport) | **POST** /v1/world/games/{id}/report | Report a game: reason broken | unfair | offensive | scam | other, optional detail. Staff review it; the creator is told the reason, never who.
*WorldApi* | [**createWorldGameStoreCheckout**](docs/Api/WorldApi.md#createworldgamestorecheckout) | **POST** /v1/world/games/{id}/store/{item}/checkout | Buy an item or pass from a game store: answers a client secret for the payment; the item is yours once it succeeds.
*WorldApi* | [**createWorldGrailMatch**](docs/Api/WorldApi.md#createworldgrailmatch) | **POST** /v1/world/grails/match | Grail glints: send the ids on show somewhere (listingIds -- listings.id, inventoryIds, skuIds -- catalogue market SKUs; up to 400 each) and get back data.listingIds / data.inventoryIds / data.skuIds: the ones that are things you already want -- an open bid, a watched or wishlisted listing (or one selling the same SKU), a market watch, or a card your deck is missing. Read-only.
*WorldApi* | [**createWorldHallLoan**](docs/Api/WorldApi.md#createworldhallloan) | **POST** /v1/world/hall/loans | Lend a piece from your vault to this week&#39;s Hall of Grails exhibition: { vaultItemId, credit: &#39;name&#39; | &#39;anonymous&#39; }. It shows under your plaque until the exhibition ends; it stays in your vault (still listable and withdrawable), and stops showing if it leaves.
*WorldApi* | [**createWorldHomeAsk**](docs/Api/WorldApi.md#createworldhomeask) | **POST** /v1/world/homes/{slug}/ask | Ask a home owner whether they would sell a piece you saw there (an item or a decor piece).
*WorldApi* | [**createWorldHomeGuestbook**](docs/Api/WorldApi.md#createworldhomeguestbook) | **POST** /v1/world/homes/{slug}/guestbook | Sign a home guestbook (one short line).
*WorldApi* | [**createWorldHomeGuestbookReport**](docs/Api/WorldApi.md#createworldhomeguestbookreport) | **POST** /v1/world/homes/{slug}/guestbook/{id}/report | Report a guestbook entry to moderation.
*WorldApi* | [**createWorldHuntStart**](docs/Api/WorldApi.md#createworldhuntstart) | **POST** /v1/world/hunt/start | Start the Great Hunt this season by reading its first riddle (the Copper key&#39;s). Idempotent: starting again answers your progress unchanged. Answers the same shape as GET /v1/world/hunt. 409 when no season is running.
*WorldApi* | [**createWorldInteractiveAsset**](docs/Api/WorldApi.md#createworldinteractiveasset) | **POST** /v1/world/interactive/assets | Upload one asset: kind glb (4 MB), wav (4 MB) or png (1 MB), the file as base64; purpose product (your designs, the default) or game (Carnival Studio files such as badge icons). Answers its sha256 and the path to reference from MML.
*WorldApi* | [**createWorldInteractiveDesign**](docs/Api/WorldApi.md#createworldinteractivedesign) | **POST** /v1/world/interactive/designs | Create an interactive design: name, footprint (s, m, l or f), optional tint and description, an asking price in COSM base units (a string, six decimals) and optional max supply. Inactive until ops approve a submitted version.
*WorldApi* | [**createWorldInteractiveDesignCheck**](docs/Api/WorldApi.md#createworldinteractivedesigncheck) | **POST** /v1/world/interactive/designs/{id}/check | Check the draft: static rules, that every referenced upload exists, and a sandboxed dry run. Budgeted per person.
*WorldApi* | [**createWorldInteractiveDesignPreview**](docs/Api/WorldApi.md#createworldinteractivedesignpreview) | **POST** /v1/world/interactive/designs/{id}/preview | A private preview token for the draft (author only) and the socket path that runs it. Budgeted per person.
*WorldApi* | [**createWorldInteractiveDesignSubmit**](docs/Api/WorldApi.md#createworldinteractivedesignsubmit) | **POST** /v1/world/interactive/designs/{id}/submit | Freeze the draft as a new version and send it to ops review. Up to 10 a day.
*WorldApi* | [**createWorldInteractiveReset**](docs/Api/WorldApi.md#createworldinteractivereset) | **POST** /v1/world/interactive/reset | Wipe the stored state of an interactive piece standing in a place you own (a home or your boutique).
*WorldApi* | [**createWorldJobAppraisalAnswer**](docs/Api/WorldApi.md#createworldjobappraisalanswer) | **POST** /v1/world/jobs/appraisals/{id}/answers | Answer a price check: your estimate of the item value in CENTS and an optional note. Moves no money; the asker may accept it.
*WorldApi* | [**createWorldJobShiftClaim**](docs/Api/WorldApi.md#createworldjobshiftclaim) | **POST** /v1/world/jobs/shifts/{id}/claim | Claim an open shift. You work it by being in the place while it runs.
*WorldApi* | [**createWorldJobShiftRelease**](docs/Api/WorldApi.md#createworldjobshiftrelease) | **POST** /v1/world/jobs/shifts/{id}/release | Give a shift you claimed back to the board.
*WorldApi* | [**createWorldMarketBuy**](docs/Api/WorldApi.md#createworldmarketbuy) | **POST** /v1/world/market/{kind}/{id}/buy | Buy a plot or a street.
*WorldApi* | [**createWorldMarketListing**](docs/Api/WorldApi.md#createworldmarketlisting) | **POST** /v1/world/market/listings | List a plot for sale or rent, or a street for sale.
*WorldApi* | [**createWorldMarketPlotRent**](docs/Api/WorldApi.md#createworldmarketplotrent) | **POST** /v1/world/market/plot/{id}/rent | Rent a plot offered for lease.
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
*WorldApi* | [**createWorldPropertyPlotPhotoUploadUrl**](docs/Api/WorldApi.md#createworldpropertyplotphotouploadurl) | **POST** /v1/world/property/plots/{plotId}/photo/upload-url | A presigned upload for a plot&#39;s photo (WebP/PNG/JPEG, up to 4 MB): PUT the image to uploadUrl with the same Content-Type and exact Content-Length, then store publicUrl with PUT .../photo.
*WorldApi* | [**createWorldPropertyPlotShowroom**](docs/Api/WorldApi.md#createworldpropertyplotshowroom) | **POST** /v1/world/property/plots/{plotId}/showroom | Stand one of your showrooms on a plot you own or rent.
*WorldApi* | [**createWorldPropertyTrespassed**](docs/Api/WorldApi.md#createworldpropertytrespassed) | **POST** /v1/world/property/trespassed | Ban someone owner-wide or from one showroom.
*WorldApi* | [**createWorldSpace**](docs/Api/WorldApi.md#createworldspace) | **POST** /v1/world/spaces | Open a Space (sellers only, at most two): slug, name, venue, optional membership and about.
*WorldApi* | [**createWorldSpaceEvent**](docs/Api/WorldApi.md#createworldspaceevent) | **POST** /v1/world/spaces/{slug}/events | As host or co-host, put an event on: title, kind, optional about, ISO start and end with offset.
*WorldApi* | [**createWorldSpaceEventRsvp**](docs/Api/WorldApi.md#createworldspaceeventrsvp) | **POST** /v1/world/spaces/{slug}/events/{id}/rsvp | Say whether you are going to an event.
*WorldApi* | [**createWorldSpaceInvite**](docs/Api/WorldApi.md#createworldspaceinvite) | **POST** /v1/world/spaces/{slug}/invite | Invite somebody (userId) to a Space.
*WorldApi* | [**createWorldSpaceJoin**](docs/Api/WorldApi.md#createworldspacejoin) | **POST** /v1/world/spaces/{slug}/join | Join a Space, or ask to when it is request-only.
*WorldApi* | [**createWorldSpaceLeave**](docs/Api/WorldApi.md#createworldspaceleave) | **POST** /v1/world/spaces/{slug}/leave | Leave a Space.
*WorldApi* | [**createWorldSpaceRequestByUserId**](docs/Api/WorldApi.md#createworldspacerequestbyuserid) | **POST** /v1/world/spaces/{slug}/requests/{userId} | As host or co-host, accept or turn down a request to join.
*WorldApi* | [**createWorldSpaceRole**](docs/Api/WorldApi.md#createworldspacerole) | **POST** /v1/world/spaces/{slug}/role | As host, make a member a co-host or back to a member.
*WorldApi* | [**createWorldStaffApplicationDecide**](docs/Api/WorldApi.md#createworldstaffapplicationdecide) | **POST** /v1/world/staff/applications/{id}/decide | Accept or decline an application.
*WorldApi* | [**createWorldStaffAssignmentRateWorker**](docs/Api/WorldApi.md#createworldstaffassignmentrateworker) | **POST** /v1/world/staff/assignments/{id}/rate-worker | Rate the worker of one of your seats.
*WorldApi* | [**createWorldStaffPosting**](docs/Api/WorldApi.md#createworldstaffposting) | **POST** /v1/world/staff/postings | Post a job: a showroom, stall or convention, pay, recurrence and rules.
*WorldApi* | [**createWorldStaffPostingStatus**](docs/Api/WorldApi.md#createworldstaffpostingstatus) | **POST** /v1/world/staff/postings/{id}/status | Open, pause or close a posting.
*WorldApi* | [**createWorldStreetOwnedUpkeepPay**](docs/Api/WorldApi.md#createworldstreetownedupkeeppay) | **POST** /v1/world/streets/owned/{id}/upkeep/pay | Pay your street&#39;s upkeep forward.
*WorldApi* | [**createWorldVenueBookingCancel**](docs/Api/WorldApi.md#createworldvenuebookingcancel) | **POST** /v1/world/venue-bookings/{id}/cancel | Cancel a hall rental: the whole rent back until 7 days before the first day, nothing after.
*WorldApi* | [**createWorldWorkAssignmentRateEmployer**](docs/Api/WorldApi.md#createworldworkassignmentrateemployer) | **POST** /v1/world/work/assignments/{id}/rate-employer | Rate the employer of a public-job shift you worked: paid on time, job as described, conduct.
*WorldApi* | [**createWorldWorkPostingApply**](docs/Api/WorldApi.md#createworldworkpostingapply) | **POST** /v1/world/work/postings/{id}/apply | Apply for a job.
*WorldApi* | [**deleteShowroom**](docs/Api/WorldApi.md#deleteshowroom) | **DELETE** /v1/showrooms/{id} | Archive a showroom: private, off its plots, billing stopped. Never deletes; the primary cannot be archived (409 showroom_primary).
*WorldApi* | [**deleteShowroomPlacement**](docs/Api/WorldApi.md#deleteshowroomplacement) | **DELETE** /v1/showrooms/{id}/placement/{plotId} | Take a showroom off a plot (the plot stays yours).
*WorldApi* | [**deleteSpatialSceneGrant**](docs/Api/WorldApi.md#deletespatialscenegrant) | **DELETE** /v1/spatial/scenes/{id}/grants/{grantId} | Take somebody&#39;s access to your room away, or kill an invite nobody has used yet.
*WorldApi* | [**deleteSpatialSceneNode**](docs/Api/WorldApi.md#deletespatialscenenode) | **DELETE** /v1/spatial/scenes/{id}/nodes | Remove units (by id, up to 500) from one of your warehouse rooms.
*WorldApi* | [**deleteSpatialSceneWarehouseStock**](docs/Api/WorldApi.md#deletespatialscenewarehousestock) | **DELETE** /v1/spatial/scenes/{id}/warehouse/stock | Take an inventory item (or unit) off its rack.
*WorldApi* | [**deleteSpatialStreetRequest**](docs/Api/WorldApi.md#deletespatialstreetrequest) | **DELETE** /v1/spatial/streets/requests/{id} | Withdraw a street request you made that has not been founded yet.
*WorldApi* | [**deleteWorldBlock**](docs/Api/WorldApi.md#deleteworldblock) | **DELETE** /v1/world/blocks/{id} | Unblock somebody (by the block id from GET /v1/world/blocks).
*WorldApi* | [**deleteWorldCollectionCapability**](docs/Api/WorldApi.md#deleteworldcollectioncapability) | **DELETE** /v1/world/collections/{chain}/{contract}/capabilities | Withdraw your declaration for a collection.
*WorldApi* | [**deleteWorldFollow**](docs/Api/WorldApi.md#deleteworldfollow) | **DELETE** /v1/world/follows/{userId} | Unfollow somebody. Idempotent.
*WorldApi* | [**deleteWorldGamePackage**](docs/Api/WorldApi.md#deleteworldgamepackage) | **DELETE** /v1/world/games/packages/{id} | Delete a Classic game: unpublished, then a tombstone restorable for 30 days.
*WorldApi* | [**deleteWorldHallLoan**](docs/Api/WorldApi.md#deleteworldhallloan) | **DELETE** /v1/world/hall/loans/{id} | Take one of your loans off show in the Hall of Grails.
*WorldApi* | [**deleteWorldHomeGuestbook**](docs/Api/WorldApi.md#deleteworldhomeguestbook) | **DELETE** /v1/world/homes/{slug}/guestbook/{id} | As the home owner, hide a guestbook entry.
*WorldApi* | [**deleteWorldInteractiveDesign**](docs/Api/WorldApi.md#deleteworldinteractivedesign) | **DELETE** /v1/world/interactive/designs/{id} | Delete a draft design, or archive a submitted one (off sale; owned copies keep working).
*WorldApi* | [**deleteWorldJobShift**](docs/Api/WorldApi.md#deleteworldjobshift) | **DELETE** /v1/world/jobs/shifts/{id} | Cancel a shift you posted that nobody has worked yet.
*WorldApi* | [**deleteWorldMarketListing**](docs/Api/WorldApi.md#deleteworldmarketlisting) | **DELETE** /v1/world/market/listings/{kind}/{id}/{mode} | Withdraw a plot or street from the Market.
*WorldApi* | [**deleteWorldOutfit**](docs/Api/WorldApi.md#deleteworldoutfit) | **DELETE** /v1/world/outfits/{id} | Delete a saved look. 404 when it is not yours.
*WorldApi* | [**deleteWorldPartyWishlist**](docs/Api/WorldApi.md#deleteworldpartywishlist) | **DELETE** /v1/world/parties/{id}/wishlist/{listingId} | Take a listing you added off the party wishlist; answers the wishlist.
*WorldApi* | [**deleteWorldPlaceBan**](docs/Api/WorldApi.md#deleteworldplaceban) | **DELETE** /v1/world/places/{slug}/bans/{userId} | Lift a ban from a place you own; they can walk in again right away.
*WorldApi* | [**deleteWorldPropertyPlotShowroom**](docs/Api/WorldApi.md#deleteworldpropertyplotshowroom) | **DELETE** /v1/world/property/plots/{plotId}/showroom | Take the showroom off a plot.
*WorldApi* | [**deleteWorldPropertyTrespassed**](docs/Api/WorldApi.md#deleteworldpropertytrespassed) | **DELETE** /v1/world/property/trespassed/{userId} | Lift a ban.
*WorldApi* | [**deleteWorldSpace**](docs/Api/WorldApi.md#deleteworldspace) | **DELETE** /v1/world/spaces/{slug} | As host, close a Space.
*WorldApi* | [**deleteWorldSpaceEvent**](docs/Api/WorldApi.md#deleteworldspaceevent) | **DELETE** /v1/world/spaces/{slug}/events/{id} | As host or co-host, cancel an event.
*WorldApi* | [**deleteWorldStaffAssignment**](docs/Api/WorldApi.md#deleteworldstaffassignment) | **DELETE** /v1/world/staff/assignments/{id} | Take a worker off a seat that has not started.
*WorldApi* | [**getShowroom**](docs/Api/WorldApi.md#getshowroom) | **GET** /v1/showroom | Your store&#39;s showroom in Crossly World: the room and its look, fixtures with their slot grids, where every item stands (pinned by a person or placed automatically), sharing settings and the stock that can stand there. The ETag is the version.
*WorldApi* | [**getShowroomBilling**](docs/Api/WorldApi.md#getshowroombilling) | **GET** /v1/showrooms/{id}/billing | A showroom&#39;s billing: included, active (paid through), past due or cancelled, and the rails a payment can use.
*WorldApi* | [**getShowroomById**](docs/Api/WorldApi.md#getshowroombyid) | **GET** /v1/showrooms/{id} | One showroom: room and look, fixtures (with holders), placements, settings (hours, auto-include) and stock. The ETag is the version.
*WorldApi* | [**getShowroomCatalog**](docs/Api/WorldApi.md#getshowroomcatalog) | **GET** /v1/showroom/catalog | Everything a showroom can be made of: fixture displays (kind, slots per unit), room sizes, themes, surfaces, shopfronts, facades, sign styles and fonts, window moods, and &#x60;holders&#x60;: every fixture holder with &#x60;owned&#x60; (free, or a premium one you bought in the in-world cosmetics market; an unowned premium holder is refused with holder_not_owned).
*WorldApi* | [**getShowroomPlacement**](docs/Api/WorldApi.md#getshowroomplacement) | **GET** /v1/showrooms/{id}/placement | The plots a showroom stands on, and the plots your store owns or rents that it could stand on.
*WorldApi* | [**getSpatialSceneAttention**](docs/Api/WorldApi.md#getspatialsceneattention) | **GET** /v1/spatial/scenes/{sceneId}/attention | What visitors looked at in one of your rooms: viewers, looks, inspects and dwell per item over the last days (1-35, default 30).
*WorldApi* | [**getSpatialSceneWindow**](docs/Api/WorldApi.md#getspatialscenewindow) | **GET** /v1/spatial/scenes/{id}/window | The listings you chose for the street window of your shop, in slot order (left, middle, right; empty &#x3D; newest first), and &#x60;choices&#x60;: your listings that can go in it, newest first.
*WorldApi* | [**getSpatialShopNeighbourhood**](docs/Api/WorldApi.md#getspatialshopneighbourhood) | **GET** /v1/spatial/shop/neighbourhood | Where your shop stands, and the district theme your stock fits.
*WorldApi* | [**getSpatialSpace**](docs/Api/WorldApi.md#getspatialspace) | **GET** /v1/spatial/spaces | The room catalogue: every space profile (what it holds, how it is sorted, its containers) and the warehouse units.
*WorldApi* | [**getSpatialStreetAdmission**](docs/Api/WorldApi.md#getspatialstreetadmission) | **GET** /v1/spatial/streets/admissions | Street applications and invitations: yours, and those waiting on streets you own.
*WorldApi* | [**getSpatialStreetDecor**](docs/Api/WorldApi.md#getspatialstreetdecor) | **GET** /v1/spatial/streets/{slug}/decor | The decor on a street you may dress, and what you can place.
*WorldApi* | [**getWorldArcade**](docs/Api/WorldApi.md#getworldarcade) | **GET** /v1/world/arcade | The Arcade in Crossly World: data.cabinets (slot, where it stands, host -- piece, price_guess or empty --, game, title, blurb, the piece it hosts and where, record, packageId and thumbnail for a creator game from the Game Directory, players) and data.scores (the High Score wall: per game a title, kind -- leaderboard, record or top -- and up to five ASCII lines; a name shows only for somebody who chose to be seen by name, everyone else is \&quot;A player\&quot;), plus creatorGames (creator games with a cabinet now). Games are played in the world.
*WorldApi* | [**getWorldAttendant**](docs/Api/WorldApi.md#getworldattendant) | **GET** /v1/world/attendant | Your AI attendant and whether your AI key is connected.
*WorldApi* | [**getWorldAurora**](docs/Api/WorldApi.md#getworldaurora) | **GET** /v1/world/aurora | The Sales Aurora over the Commons in Crossly World: every real sale on Crossly in the last data.windowDays (30) days. data.total (sales in the window), data.families (key, label, colour, count per colour family: cards, coins, jewellery, electronics, media, fashion, toys, other) and data.sales (newest first, at most 48: family, ageHours, fresh -- sold in the last ten minutes, which shimmers). Aggregate only: no item, price, seller or platform. data.updatedAt is when it was read.
*WorldApi* | [**getWorldAvatarBasic**](docs/Api/WorldApi.md#getworldavatarbasic) | **GET** /v1/world/avatar/basics | The free basic wardrobe every account owns: 25 garments (tees, hoodie, overshirt, polo, jacket, vest, jeans, shorts, skirt, sneakers, boots, loafers, caps...) by slot, each with its colourways. Wear one by saving appearance.outfit &#x3D; { top, outer, bottom, shoes, hat } as \&quot;garment:colour\&quot; (outer and hat may be \&quot;none\&quot;) with PUT /v1/world/avatar/look.
*WorldApi* | [**getWorldAvatarIdentity**](docs/Api/WorldApi.md#getworldavataridentity) | **GET** /v1/world/avatar/identity | Whether others see your name in the world (named), or not (anonymous); null if you have never chosen.
*WorldApi* | [**getWorldAvatarLoadout**](docs/Api/WorldApi.md#getworldavatarloadout) | **GET** /v1/world/avatar/loadout | What you are wearing: the rig, its slots (avatar_head, avatar_body, avatar_outer -- a jacket over the top, avatar_legs, avatar_feet, avatar_back) and each worn entry -- a cosmetic or a real item -- with its verified-purchase mark. Carries no price, receipt id, seller or order.
*WorldApi* | [**getWorldAvatarLoadoutByUserId**](docs/Api/WorldApi.md#getworldavatarloadoutbyuserid) | **GET** /v1/world/avatar/loadout/{userId} | What somebody else is wearing, with the verified-purchase mark on each real item -- public on purpose, since a check only its owner can see is not a check. No price, receipt id, seller or order.
*WorldApi* | [**getWorldAvatarLook**](docs/Api/WorldApi.md#getworldavatarlook) | **GET** /v1/world/avatar/look | Your world look on the account: the handle you chose (null if anonymous) and your appearance; null if you never made one.
*WorldApi* | [**getWorldAvatarNftBadge**](docs/Api/WorldApi.md#getworldavatarnftbadge) | **GET** /v1/world/avatar/nft-badge | The NFT you wear on your nameplate in the world, or null.
*WorldApi* | [**getWorldBillingRail**](docs/Api/WorldApi.md#getworldbillingrail) | **GET** /v1/world/billing/rails | Which rails (card, CBX) can pay in the world right now.
*WorldApi* | [**getWorldCapability**](docs/Api/WorldApi.md#getworldcapability) | **GET** /v1/world/capabilities | What your held NFTs unlock in Crossly World: each token with the capabilities its collection declared (wear, display, emote, gate, ...). Holding is your verified wallets (their synced tokens); the capabilities of a transferred token go within five minutes.
*WorldApi* | [**getWorldCapabilityCatalogue**](docs/Api/WorldApi.md#getworldcapabilitycatalogue) | **GET** /v1/world/capabilities/catalogue | The capability kinds of spec crossly.nft-capabilities/1: what each does, whether only the creator of the collection may declare it, whether it needs review, and which clients honour it.
*WorldApi* | [**getWorldCapabilityWear**](docs/Api/WorldApi.md#getworldcapabilitywear) | **GET** /v1/world/capabilities/wear | What you wear from your NFTs and COSM copies: your pick per avatar slot (head, body, legs, feet, back) and what the room sees.
*WorldApi* | [**getWorldChest**](docs/Api/WorldApi.md#getworldchest) | **GET** /v1/world/chests | The Commons chest: data.window (this 20-minute window, UTC), spot ([x, z] on the plaza), endsAt (when the next chest comes) and mine (openedThis, and opened -- how many windows you have opened one in; the Chest opener pin comes at 10). A chest is opened by walking up to it in Crossly World, never over the API.
*WorldApi* | [**getWorldCollectionCapability**](docs/Api/WorldApi.md#getworldcollectioncapability) | **GET** /v1/world/collections/{chain}/{contract}/capabilities | The live capability declaration of a collection (404 when it has none).
*WorldApi* | [**getWorldContestMine**](docs/Api/WorldApi.md#getworldcontestmine) | **GET** /v1/world/contests/mine | Your contest entries (best score, attempts used, payment state) and prizes (granted, or owed until their gate opens).
*WorldApi* | [**getWorldControl**](docs/Api/WorldApi.md#getworldcontrol) | **GET** /v1/world/controls | Your world controls settings (look sensitivity, invert look, stick size, left-handed, camera distance, reduced camera motion, tap-to-walk, haptics) and whether you have seen the controls tutorial.
*WorldApi* | [**getWorldConvention**](docs/Api/WorldApi.md#getworldconvention) | **GET** /v1/world/conventions/{id} | One convention. 404 for an unknown or malformed id alike.
*WorldApi* | [**getWorldConventionExhibit**](docs/Api/WorldApi.md#getworldconventionexhibit) | **GET** /v1/world/conventions/{id}/exhibit | A convention from the exhibitor side: tiers with price, size, capacity and booths left, the rails that pay now, and your own booth (status, fee, paid, checked in, listings).
*WorldApi* | [**getWorldConventionHall**](docs/Api/WorldApi.md#getworldconventionhall) | **GET** /v1/world/conventions/{id}/hall | The hall design (booths, stage, signs, entrance, kiosk), its version and any problems.
*WorldApi* | [**getWorldConventionManage**](docs/Api/WorldApi.md#getworldconventionmanage) | **GET** /v1/world/conventions/{id}/manage | A convention you organise: its settings, booth tiers, every seller (status, booth, fee, paid, checked in) and the venue.
*WorldApi* | [**getWorldConventionStatusPage**](docs/Api/WorldApi.md#getworldconventionstatuspage) | **GET** /v1/world/conventions/{id}/status-page | The status page: sellers, booths filled per tier, walk-ins, sales of brought listings, booth fees paid and owed.
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
*WorldApi* | [**getWorldGamePackageStat**](docs/Api/WorldApi.md#getworldgamepackagestat) | **GET** /v1/world/games/packages/{id}/stats | Play stats for one of your Classic games: 30-day totals, the daily series the launcher ranks on (uniques, sessions, playtime, first-play bounces, D1/D7/D28), its ranking score, test impressions and players right now. ?days&#x3D;1-90.
*WorldApi* | [**getWorldGamePackageVersion**](docs/Api/WorldApi.md#getworldgamepackageversion) | **GET** /v1/world/games/packages/{id}/versions | Every version of one of your Classic games: draft, pending, approved, rejected, withdrawn or cancelled, which one is live, its documents and report.
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
*WorldApi* | [**getWorldLauncher**](docs/Api/WorldApi.md#getworldlauncher) | **GET** /v1/worlds/launcher | The Carnival Plaza launcher: portals for Classic games, Crossly&#39;s own card games and the Commons card tables, each with players right now, your friends inside, its ranking score (published weights, retention-weighted, first-play bounce negative) and where Play goes. Twelve ring slots: friends&#39; pick, new &amp; rising (guaranteed test impressions), then the top, first-party capped at 25%.
*WorldApi* | [**getWorldManageLedger**](docs/Api/WorldApi.md#getworldmanageledger) | **GET** /v1/world/manage/ledger | World money over 7, 30 or 90 days: plot purchases, maintenance, rent, deed sales, staff wages, shifts and stalls, in and out.
*WorldApi* | [**getWorldManageOverview**](docs/Api/WorldApi.md#getworldmanageoverview) | **GET** /v1/world/manage/overview | Your Crossly World at a glance: shop and addresses, property, staff and shifts, conventions, stalls, 30-day visitors and money.
*WorldApi* | [**getWorldManageVisitor**](docs/Api/WorldApi.md#getworldmanagevisitor) | **GET** /v1/world/manage/visitors | Who came to your world shop over 7, 30 or 90 days: the funnel, attention by day, most-looked and most-wanted items.
*WorldApi* | [**getWorldMarket**](docs/Api/WorldApi.md#getworldmarket) | **GET** /v1/world/market/{kind}/{id} | One plot or street in the Market: price, renders, neighbours, foot traffic, history.
*WorldApi* | [**getWorldNeighbourhoodClaim**](docs/Api/WorldApi.md#getworldneighbourhoodclaim) | **GET** /v1/world/neighbourhoods/{slug}/claim | Whether you may claim a plot on a neighbourhood street (its top sellers by recent sales), and why not.
*WorldApi* | [**getWorldPartyChat**](docs/Api/WorldApi.md#getworldpartychat) | **GET** /v1/world/parties/{id}/chat | Your party chat: the recent lines. 404 when this is not your party.
*WorldApi* | [**getWorldPlaceBoard**](docs/Api/WorldApi.md#getworldplaceboard) | **GET** /v1/world/places/{slug}/boards | The Trade Floor&#39;s wall of wants, its authentication desk and its Vault Markets ticker (vaultMovers: bookKey, name, label, units, markCents, change24hBps; only the trade-floor place has them).
*WorldApi* | [**getWorldPlaceCollection**](docs/Api/WorldApi.md#getworldplacecollection) | **GET** /v1/world/places/{slug}/collections/{category}/{brand}/{model} | One collection room: every piece of the set, owned or missing. 404 for an unknown room or set.
*WorldApi* | [**getWorldPlaceDrop**](docs/Api/WorldApi.md#getworldplacedrop) | **GET** /v1/world/places/{slug}/drop | The owner&#39;s next drop (name, cover, time, live) and how many people are waiting in the room.
*WorldApi* | [**getWorldPlaceItemInterest**](docs/Api/WorldApi.md#getworldplaceiteminterest) | **GET** /v1/world/places/{slug}/items/{itemId}/interest | How many people looked at one item in this room today.
*WorldApi* | [**getWorldPlaceLive**](docs/Api/WorldApi.md#getworldplacelive) | **GET** /v1/world/places/{slug}/live | The owner&#39;s live sale: their stream and the lot on the block, or null.
*WorldApi* | [**getWorldPlaceSeller**](docs/Api/WorldApi.md#getworldplaceseller) | **GET** /v1/world/places/{slug}/seller | The shop whose public room this is (username and name), or null.
*WorldApi* | [**getWorldPlaceShopPet**](docs/Api/WorldApi.md#getworldplaceshoppet) | **GET** /v1/world/places/{slug}/shop-pet | The shop&#39;s pet kind, or null.
*WorldApi* | [**getWorldPropertyPlot**](docs/Api/WorldApi.md#getworldpropertyplot) | **GET** /v1/world/property/plots/{plotId} | One plot of yours: showroom, rental, value, upkeep.
*WorldApi* | [**getWorldPropertyRental**](docs/Api/WorldApi.md#getworldpropertyrental) | **GET** /v1/world/property/rentals/{leaseId} | One plot you rent out, with its payments.
*WorldApi* | [**getWorldPropertyRenting**](docs/Api/WorldApi.md#getworldpropertyrenting) | **GET** /v1/world/property/renting/{leaseId} | One plot you rent, with its payments.
*WorldApi* | [**getWorldRail**](docs/Api/WorldApi.md#getworldrail) | **GET** /v1/world/rails | Which Worlds payment rails are on now: cash (card), CBX, or both.
*WorldApi* | [**getWorldSpace**](docs/Api/WorldApi.md#getworldspace) | **GET** /v1/world/spaces/{slug} | One Space: its layout, host, events and your place in it.
*WorldApi* | [**getWorldSpaceCanHost**](docs/Api/WorldApi.md#getworldspacecanhost) | **GET** /v1/world/spaces/can-host | Whether you may open a Space: sellers only, at most two active.
*WorldApi* | [**getWorldStaffPosting**](docs/Api/WorldApi.md#getworldstaffposting) | **GET** /v1/world/staff/postings/{id} | One of your postings, with its shifts.
*WorldApi* | [**getWorldStaffReputation**](docs/Api/WorldApi.md#getworldstaffreputation) | **GET** /v1/world/staff/reputation | Your employer reputation, rated by the people who worked your public jobs.
*WorldApi* | [**getWorldStreetFund**](docs/Api/WorldApi.md#getworldstreetfund) | **GET** /v1/world/streets/{slug}/fund | A street&#39;s fund: the CBX property payments on its plots over the last four weeks, and the street events it unlocked.
*WorldApi* | [**getWorldStreetOwned**](docs/Api/WorldApi.md#getworldstreetowned) | **GET** /v1/world/streets/owned/{id} | A street you own: tenants, applications, upkeep, look, fund.
*WorldApi* | [**getWorldStreetTrespassBarrier**](docs/Api/WorldApi.md#getworldstreettrespassbarrier) | **GET** /v1/world/streets/{slug}/trespass-barriers | Plot numbers on the street you are trespassed from.
*WorldApi* | [**getWorldTrialLeaderboard**](docs/Api/WorldApi.md#getworldtrialleaderboard) | **GET** /v1/world/trials/{course}/leaderboard | A Time Trials course&#39;s boards, as the board beside it in the Commons shows them: data.course, week, weekly (this week&#39;s ten fastest: rank, name, short, named, ms, at) and allTime (the ten fastest ever, each person once). A name shows only for somebody who chose to be seen by name in the world; everyone else is \&quot;A player\&quot;. 404 for an unknown course; course 1 is commons-loop.
*WorldApi* | [**getWorldTrialMine**](docs/Api/WorldApi.md#getworldtrialmine) | **GET** /v1/world/trials/mine | Your Hoverboard Time Trials bests: data.week (its Monday, YYYY-MM-DD, UTC) and courses, each with course (id, name, parMs, rings, lengthM), week (your best lap this week in ms, your place on the weekly board, laps finished, and the split at each ring) or null, and allTime (your best ever in ms, your place on the all-time board, when) or null. Laps are timed by Crossly from where it saw you ride in the world; nothing here writes one.
*WorldApi* | [**getWorldVenueQuote**](docs/Api/WorldApi.md#getworldvenuequote) | **GET** /v1/world/venues/{id}/quote | What a hall costs for those days (startsOn, endsOn), the full-refund date, and whether it is free.
*WorldApi* | [**getWorldWallet**](docs/Api/WorldApi.md#getworldwallet) | **GET** /v1/world/wallet | Every balance you hold in Crossly World, read-only: bucksCents (Crossly Bucks, cents); cbx (available, decimals, and the three CBX balances kept apart as base-unit STRINGS -- granted (spend here only), earned (withdrawable once matured), connected (a delegation ceiling on your own wallet, not cash on hand) -- plus pendingCents of cashback not yet matured); cosm (available, decimals, baseUnits string). available:false means that currency is not provisioned on this deployment, not that you hold none.
*WorldApi* | [**getWorldWish**](docs/Api/WorldApi.md#getworldwish) | **GET** /v1/world/wishes | The Wishing Fountain in the Commons: data.day (today, UTC), today (wishes everyone has made today) and mine (madeToday, days -- how many days you have wished on, the Wishmaker pin comes at 7 -- and nextAt, when tomorrow&#39;s wish opens). One wish a day; a wish is made by tossing a coin at the fountain in Crossly World, never over the API, and nothing is spent.
*WorldApi* | [**getWorldWorkEarning**](docs/Api/WorldApi.md#getworldworkearning) | **GET** /v1/world/work/earnings | What your shifts paid, by rail.
*WorldApi* | [**getWorldWorkMine**](docs/Api/WorldApi.md#getworldworkmine) | **GET** /v1/world/work/mine | Where you work: your seats, applications and your teams’ open jobs.
*WorldApi* | [**listGameCoupons**](docs/Api/WorldApi.md#listgamecoupons) | **GET** /v1/games/coupons | Your fee-back coupons from house-game wins: Bucks paid out of the fee on your next market purchase.
*WorldApi* | [**listShowroomItemSearch**](docs/Api/WorldApi.md#listshowroomitemsearch) | **GET** /v1/showrooms/{id}/item-search | Search this store&#39;s in-stock items (title, brand, SKU) to put on a fixture or in a window slot; each with listed / passport / multi_unit badges.
*WorldApi* | [**listShowrooms**](docs/Api/WorldApi.md#listshowrooms) | **GET** /v1/showrooms | Your store&#39;s showrooms, primary first: name, visibility, auto-include, pinned items, fixtures, billing and the plots each stands on.
*WorldApi* | [**listSpatialLeases**](docs/Api/WorldApi.md#listspatialleases) | **GET** /v1/spatial/leases | Plots offered for lease on every street, cheapest first: address, weekly rent and maintenance in CENTS.
*WorldApi* | [**listSpatialSceneGrants**](docs/Api/WorldApi.md#listspatialscenegrants) | **GET** /v1/spatial/scenes/{id}/grants | Everyone who can currently walk into one of your rooms, and unused invites. Never returns codes.
*WorldApi* | [**listSpatialSceneWarehouseUnplaced**](docs/Api/WorldApi.md#listspatialscenewarehouseunplaced) | **GET** /v1/spatial/scenes/{id}/warehouse/unplaced | Stock not yet on a shelf in a warehouse room you can arrange (q filters by title).
*WorldApi* | [**listSpatialSharedWithMe**](docs/Api/WorldApi.md#listspatialsharedwithme) | **GET** /v1/spatial/shared-with-me | Rooms other people let you into.
*WorldApi* | [**listSpatialStreetLeases**](docs/Api/WorldApi.md#listspatialstreetleases) | **GET** /v1/spatial/streets/{slug}/leases | Plots on a street offered for lease: weekly rent in CENTS and terms.
*WorldApi* | [**listWorldAttendantUsage**](docs/Api/WorldApi.md#listworldattendantusage) | **GET** /v1/world/attendant/usage | Your AI attendant’s usage log.
*WorldApi* | [**listWorldAvatarCloset**](docs/Api/WorldApi.md#listworldavatarcloset) | **GET** /v1/world/avatar/closet | Everything you can verifiably wear (your Crossly purchase receipts), newest first: receiptId, item title, brand, size, image, catalog sku/variant, quantity, purchasedAt. Pass a receiptId to POST /v1/world/avatar/equip to put one on. limit 1-200, offset for paging.
*WorldApi* | [**listWorldAvatarStock**](docs/Api/WorldApi.md#listworldavatarstock) | **GET** /v1/world/avatar/stock | Items of your OWN inventory you could wear into a room as a walking storefront: inventoryItemId, title, image and the slot it would go on. Pass an inventoryItemId to POST /v1/world/avatar/equip.
*WorldApi* | [**listWorldAvatarWearables**](docs/Api/WorldApi.md#listworldavatarwearables) | **GET** /v1/world/avatar/wearables | Wearables you have authored as a designer: id, sku, name, slot, priceBaseUnits (COSM base units, a string), maxSupply, mintedCount, active (false until reviewed). meta.available is false when COSM is not provisioned here.
*WorldApi* | [**listWorldBestDressed**](docs/Api/WorldApi.md#listworldbestdressed) | **GET** /v1/world/best-dressed | This week&#39;s best-dressed board (Monday-based), top ten: name, profile username and loves. Only people still choosing to be seen by name.
*WorldApi* | [**listWorldCapabilityDeclarations**](docs/Api/WorldApi.md#listworldcapabilitydeclarations) | **GET** /v1/world/capabilities/declarations | Your capability declarations, in every review state (pending, live, rejected with the note from the reviewer).
*WorldApi* | [**listWorldContestStandings**](docs/Api/WorldApi.md#listworldconteststandings) | **GET** /v1/world/contests/{id}/standings | The standings of a contest now: best score first (or lowest, for a time game), ties to whoever got there first.
*WorldApi* | [**listWorldContests**](docs/Api/WorldApi.md#listworldcontests) | **GET** /v1/world/contests | Open skill contests on Crossly World games, soonest ending first: entry mode (free, sponsored, paid) and prizes.
*WorldApi* | [**listWorldConventionExhibitors**](docs/Api/WorldApi.md#listworldconventionexhibitors) | **GET** /v1/world/conventions/{id}/exhibitors | The host roster: who applied, who was invited, who is coming (by shop handle). Host only; 404 otherwise.
*WorldApi* | [**listWorldConventionMessages**](docs/Api/WorldApi.md#listworldconventionmessages) | **GET** /v1/world/conventions/{id}/messages | Convention messages you may read: the organiser all of them (?with&#x3D;&lt;userId&gt; for one seller), an exhibitor theirs and the broadcasts.
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
*WorldApi* | [**listWorldGamePackageReceipts**](docs/Api/WorldApi.md#listworldgamepackagereceipts) | **GET** /v1/world/games/packages/{id}/receipts | Store sales of one of your game packages, newest first: item, price paid, edition, when. Never who bought. Cursor-paged: pass pagination.nextCursor back as ?cursor&#x3D;.
*WorldApi* | [**listWorldGamePackages**](docs/Api/WorldApi.md#listworldgamepackages) | **GET** /v1/world/games/packages | Your game packages, each with its latest version and review state.
*WorldApi* | [**listWorldGameRewards**](docs/Api/WorldApi.md#listworldgamerewards) | **GET** /v1/world/games/rewards | Rewards you won in games: granted, or recorded as unfunded for COSM and CBX (a game prints no value).
*WorldApi* | [**listWorldGames**](docs/Api/WorldApi.md#listworldgames) | **GET** /v1/world/games | The Game Directory: every live, reviewed game package with its players, places, rewards, contests and the piece people place.
*WorldApi* | [**listWorldHomeBuilding**](docs/Api/WorldApi.md#listworldhomebuilding) | **GET** /v1/world/home/building | Homes whose owner made you a co-builder.
*WorldApi* | [**listWorldInteractiveCatalogue**](docs/Api/WorldApi.md#listworldinteractivecatalogue) | **GET** /v1/world/interactive/catalogue | Interactive objects: every piece that runs a shared script in a room (first-party and approved creator designs). Per item: model (the piece key a home layout or boutique prop stores), decorValue (the home_prop value its SKU claims), source (first_party | creator), name, blurb, size [x, z] metres, fallbackMesh, cosmeticId (the SKU on the Decor Shop, null when not on sale) and version (a creator design: the approved version every copy runs). Read-only: buying is on crossly.net/shop/decor.
*WorldApi* | [**listWorldInteractiveDesigns**](docs/Api/WorldApi.md#listworldinteractivedesigns) | **GET** /v1/world/interactive/designs | Your interactive-object designs (MML documents you wrote), newest first: id, handle, name, footprint (s | m | l | f), tint, priceBaseUnits (COSM, base-unit string), maxSupply, model, decorValue, cosmeticId, liveVersion (the approved version every copy runs; null &#x3D; none), withdrawnReason, archivedAt (you archived it: off sale, owned copies keep running; null &#x3D; not archived), latestVersion { version, state: pending | approved | rejected | withdrawn | cancelled, decisionNote }, inReview. &#x60;archived&#x60;: exclude (default), include or only archived designs. Read-only: writing, previewing, submitting and archiving happen in the Creator Studio on crossly.net (/studio/creator/creations/interactive/new/edit).
*WorldApi* | [**listWorldJobBoard**](docs/Api/WorldApi.md#listworldjobboard) | **GET** /v1/world/jobs/board | The public Job Board, filterable.
*WorldApi* | [**listWorldJobPosted**](docs/Api/WorldApi.md#listworldjobposted) | **GET** /v1/world/jobs/posted | Shifts you posted for your rooms, with who claimed each and how it went.
*WorldApi* | [**listWorldMarket**](docs/Api/WorldApi.md#listworldmarket) | **GET** /v1/world/market | Plots and streets for sale or rent in the Worlds Market.
*WorldApi* | [**listWorldMarketStreetSigns**](docs/Api/WorldApi.md#listworldmarketstreetsigns) | **GET** /v1/world/market/streets/{slug}/signs | The street&#39;s for-sale and for-rent boards.
*WorldApi* | [**listWorldOutfits**](docs/Api/WorldApi.md#listworldoutfits) | **GET** /v1/world/outfits | Your saved outfits (up to 6, oldest first): id, name, appearance (skin, hair, hairColour, eyes, build) and items -- each worn thing as the door it goes back on by (slot, door: cosmetic | receipt | stock, id, label). Put one on with POST /v1/world/outfits/:id/apply.
*WorldApi* | [**listWorldPlaceBans**](docs/Api/WorldApi.md#listworldplacebans) | **GET** /v1/world/places/{slug}/bans | Who is banned from a place you own (your boutique or home).
*WorldApi* | [**listWorldPlaceBundles**](docs/Api/WorldApi.md#listworldplacebundles) | **GET** /v1/world/places/{slug}/bundles | The owner&#39;s bundle deals mapped onto this room&#39;s items (itemIds null &#x3D; any N from the shop). The discount is decided at checkout.
*WorldApi* | [**listWorldPlaceCollections**](docs/Api/WorldApi.md#listworldplacecollections) | **GET** /v1/world/places/{slug}/collections | The owner&#39;s collection rooms: one per category, brand and model they collect.
*WorldApi* | [**listWorldPlaceOffers**](docs/Api/WorldApi.md#listworldplaceoffers) | **GET** /v1/world/places/{slug}/offers | What is for sale in a public room: price, condition and stock, with market references. 404 when no such room is shared.
*WorldApi* | [**listWorldPlaceRadar**](docs/Api/WorldApi.md#listworldplaceradar) | **GET** /v1/world/places/{slug}/radar | What you have that someone here wants, and what is here that you want: matched on catalog ids.
*WorldApi* | [**listWorldPlaceTradeTables**](docs/Api/WorldApi.md#listworldplacetradetables) | **GET** /v1/world/places/{slug}/trade-tables | The open trade tables in a place: who is sitting and what is laid on the mat.
*WorldApi* | [**listWorldPlaceTrades**](docs/Api/WorldApi.md#listworldplacetrades) | **GET** /v1/world/places/{slug}/trades | Items in this room open to trades, each with its trade post path.
*WorldApi* | [**listWorldPromoted**](docs/Api/WorldApi.md#listworldpromoted) | **GET** /v1/world/promoted | Promoted places in Crossly World: boosted showrooms and conventions (Sponsored, labelled \&quot;Promoted\&quot;), with the token to send when one is opened.
*WorldApi* | [**listWorldPropertyPlots**](docs/Api/WorldApi.md#listworldpropertyplots) | **GET** /v1/world/property/plots | Plots your store owns or rents.
*WorldApi* | [**listWorldPropertyRentals**](docs/Api/WorldApi.md#listworldpropertyrentals) | **GET** /v1/world/property/rentals | Plots you rent out.
*WorldApi* | [**listWorldPropertyRenting**](docs/Api/WorldApi.md#listworldpropertyrenting) | **GET** /v1/world/property/renting | Plots you rent.
*WorldApi* | [**listWorldPropertyTrespassed**](docs/Api/WorldApi.md#listworldpropertytrespassed) | **GET** /v1/world/property/trespassed | People your store has banned, owner-wide or from one showroom.
*WorldApi* | [**listWorldProvenance**](docs/Api/WorldApi.md#listworldprovenance) | **GET** /v1/world/provenance | Provenance trails: where in Crossly World your purchases were found, newest first (optionally ?listingIds&#x3D;a,b -- platform listing ids). data: [{ platformListingId, slug (the listing public slug), kind (room | window | stall | space | drop | auction | worn | agent), place (its name, or null when gone), at, line -- e.g. \&quot;Found at The Sneaker Vault, Oct 2026\&quot; }]. Yours only.
*WorldApi* | [**listWorldQuests**](docs/Api/WorldApi.md#listworldquests) | **GET** /v1/world/quests | Every world quest with your progress: key, the pin it earns, goal, target, count, done, colour. meta.wearing is the pin on your nameplate (or null); meta.streak your current and best daily visit streak. Progress only comes from what the server saw -- there is no write of it.
*WorldApi* | [**listWorldSpaceMine**](docs/Api/WorldApi.md#listworldspacemine) | **GET** /v1/world/spaces/mine | Spaces you belong to.
*WorldApi* | [**listWorldSpaceRequests**](docs/Api/WorldApi.md#listworldspacerequests) | **GET** /v1/world/spaces/{slug}/requests | As host or co-host, who asked to join.
*WorldApi* | [**listWorldSpaceWhatsOn**](docs/Api/WorldApi.md#listworldspacewhatson) | **GET** /v1/world/spaces/whats-on | Live and upcoming events across Spaces (streets&#x3D;1 and stage&#x3D;1 add street and Main Stage events).
*WorldApi* | [**listWorldSpaces**](docs/Api/WorldApi.md#listworldspaces) | **GET** /v1/world/spaces | The Spaces directory: seller-hosted clubs with a venue, members and events (optional venue filter).
*WorldApi* | [**listWorldStaffApplicants**](docs/Api/WorldApi.md#listworldstaffapplicants) | **GET** /v1/world/staff/applicants | Who applied to your postings, with their worker reputation.
*WorldApi* | [**listWorldStaffPeople**](docs/Api/WorldApi.md#listworldstaffpeople) | **GET** /v1/world/staff/people | Everyone working for you: your Settings team and public workers, with their seats.
*WorldApi* | [**listWorldStaffPlaces**](docs/Api/WorldApi.md#listworldstaffplaces) | **GET** /v1/world/staff/places | The showrooms, stalls and conventions a job can be posted at, and the pay rails that are live.
*WorldApi* | [**listWorldStaffPostings**](docs/Api/WorldApi.md#listworldstaffpostings) | **GET** /v1/world/staff/postings | Your job postings, with their upcoming shifts.
*WorldApi* | [**listWorldStaffShifts**](docs/Api/WorldApi.md#listworldstaffshifts) | **GET** /v1/world/staff/shifts | Your scheduled seats and who is on them.
*WorldApi* | [**listWorldStreaks**](docs/Api/WorldApi.md#listworldstreaks) | **GET** /v1/world/streaks | The longest current daily visit streaks (2+ days), top ten: name and days. Only people still choosing to be seen by name.
*WorldApi* | [**listWorldTradeMine**](docs/Api/WorldApi.md#listworldtrademine) | **GET** /v1/world/trades/mine | Your trades and each item progress through the authentication gate (verified or failed).
*WorldApi* | [**listWorldTradeTableBinder**](docs/Api/WorldApi.md#listworldtradetablebinder) | **GET** /v1/world/trade-tables/binder | Your binder: unsold collection rows that are catalog items and may be laid on a trade mat -- key, variantId, condition, grade, portfolioId, name, image and valueCents (market value, cents).
*WorldApi* | [**listWorldTradeTableListings**](docs/Api/WorldApi.md#listworldtradetablelistings) | **GET** /v1/world/trade-tables/listings | Your open Trade Block trade listings a trade table can be opened on in the world, each with its items&#39; names.
*WorldApi* | [**listWorldVenues**](docs/Api/WorldApi.md#listworldvenues) | **GET** /v1/world/venues | The Convention Center halls for rent: size, floor, booths, price per day, and the days already taken (from, to).
*WorldApi* | [**updateShowroom**](docs/Api/WorldApi.md#updateshowroom) | **PUT** /v1/showroom | Replace the whole showroom layout (room, fixtures, placements, settings). Validated as a whole: every item must be this store&#39;s, every pin must fit its fixture, no two pins share a slot. Send If-Match (or expectedVersion) to refuse with 409 version_conflict if it changed meanwhile.
*WorldApi* | [**updateShowroom2**](docs/Api/WorldApi.md#updateshowroom2) | **PATCH** /v1/showroom | Apply showroom ops in order, all or nothing: place, move, remove, fill (from a category / tag / brand / collection / search, in price, age, value or title order), sort, clear, add_fixture, update_fixture, remove_fixture, set_room, set_settings. Idempotent; refusals name the op (details.opIndex) with codes slot_occupied, item_not_in_store, fixture_capacity, unknown_fixture, unknown_display, version_conflict.
*WorldApi* | [**updateShowroom3**](docs/Api/WorldApi.md#updateshowroom3) | **PATCH** /v1/showrooms/{id} | Apply ops to one showroom in order, all or nothing (the same ops as PATCH /api/v1/showroom).
*WorldApi* | [**updateShowroomById**](docs/Api/WorldApi.md#updateshowroombyid) | **PUT** /v1/showrooms/{id} | Replace one showroom&#39;s whole layout. If-Match (or expectedVersion) refuses with 409 version_conflict on a concurrent edit.
*WorldApi* | [**updateSpatialSceneCosmetic**](docs/Api/WorldApi.md#updatespatialscenecosmetic) | **PATCH** /v1/spatial/scenes/{id}/cosmetics | Redecorate one of your rooms (wall, floor, lighting, trim...). Unknown keys are dropped; the response is what survived. &#x60;clear&#x60; lists keys to reset.
*WorldApi* | [**updateSpatialSceneNode**](docs/Api/WorldApi.md#updatespatialscenenode) | **PATCH** /v1/spatial/scenes/{id}/nodes/{nodeId} | Move a rack in one of your warehouse rooms (position in metres).
*WorldApi* | [**updateSpatialSceneSetting**](docs/Api/WorldApi.md#updatespatialscenesetting) | **PATCH** /v1/spatial/scenes/{id}/settings | How one of your rooms is laid out and lit: grouping and sort keys, theme, overlay and the arrival camera. Cosmetics and the shop layout have their own writers.
*WorldApi* | [**updateSpatialSceneShopLayout**](docs/Api/WorldApi.md#updatespatialsceneshoplayout) | **PUT** /v1/spatial/scenes/{id}/shop/layout | Save your shop room&#39;s sections and displays (validated server-side; the response is the stored layout).
*WorldApi* | [**updateSpatialSceneWindow**](docs/Api/WorldApi.md#updatespatialscenewindow) | **PUT** /v1/spatial/scenes/{id}/window | Choose up to three of your live Crossly listings for the street window of your shop, in slot order. Picks that sell drop out and the newest fill in; an empty list goes back to newest first.
*WorldApi* | [**updateSpatialStreetDecor**](docs/Api/WorldApi.md#updatespatialstreetdecor) | **PUT** /v1/spatial/streets/{slug}/decor | Dress a street you own with decor you hold (validated against your inventory).
*WorldApi* | [**updateSpatialStreetOwned**](docs/Api/WorldApi.md#updatespatialstreetowned) | **PATCH** /v1/spatial/streets/owned/{id} | Who may open a shop on a street you own (open, apply or invite).
*WorldApi* | [**updateWorldAttendant**](docs/Api/WorldApi.md#updateworldattendant) | **PUT** /v1/world/attendant | Create or replace your AI attendant (BYOK: switching it on needs your AI key).
*WorldApi* | [**updateWorldAvatarIdentity**](docs/Api/WorldApi.md#updateworldavataridentity) | **PUT** /v1/world/avatar/identity | Choose named or anonymous. Rooms you are already in keep the old answer until you rejoin.
*WorldApi* | [**updateWorldAvatarLook**](docs/Api/WorldApi.md#updateworldavatarlook) | **PUT** /v1/world/avatar/look | Save your world look to the account, so every device starts from it. look: null stays anonymous. appearance.outfit &#x3D; { top, outer, bottom, shoes, hat } picks the basic outfit (GET /v1/world/avatar/basics).
*WorldApi* | [**updateWorldAvatarNftBadge**](docs/Api/WorldApi.md#updateworldavatarnftbadge) | **PUT** /v1/world/avatar/nft-badge | Wear an NFT you hold on your nameplate (null to take it off). Checked again each time you join a room.
*WorldApi* | [**updateWorldCapabilityWear**](docs/Api/WorldApi.md#updateworldcapabilitywear) | **PUT** /v1/world/capabilities/wear | Wear a held token on an avatar slot (refId from GET /v1/world/capabilities), or pass refId null to take it off. Its collection must declare a wear capability for that slot.
*WorldApi* | [**updateWorldCollectionCapability**](docs/Api/WorldApi.md#updateworldcollectioncapability) | **PUT** /v1/world/collections/{chain}/{contract}/capabilities | Declare what the tokens of a collection can do (the whole declaration, spec crossly.nft-capabilities/1). As its creator (launched on Crossly or claimed) any kind; as a holder, cosmetic kinds only. Replaces your previous declaration; pending if it names an uploaded asset or an always-reviewed kind.
*WorldApi* | [**updateWorldControl**](docs/Api/WorldApi.md#updateworldcontrol) | **PUT** /v1/world/controls | Save your world controls settings to the account (any subset of prefs; out-of-range values take the default) and/or mark the controls tutorial seen.
*WorldApi* | [**updateWorldConventionHall**](docs/Api/WorldApi.md#updateworldconventionhall) | **PUT** /v1/world/conventions/{id}/hall | Save the hall design: { doc, expectedVersion }. Refused on overlaps, narrow aisles, too many booths or a booth with a seller removed.
*WorldApi* | [**updateWorldConventionMyBooth**](docs/Api/WorldApi.md#updateworldconventionmybooth) | **PUT** /v1/world/conventions/{id}/my-booth | Pick what your booth shows: { listingIds } — any of your live listings, up to the tier’s capacity.
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
*WorldApi* | [**updateWorldPropertyPlotPhoto**](docs/Api/WorldApi.md#updateworldpropertyplotphoto) | **PUT** /v1/world/property/plots/{plotId}/photo | Store a plot&#39;s photo: an image of its frontage you uploaded through POST .../photo/upload-url, a render (buildKey must be the plot&#39;s current one) or an in-world capture.
*WorldApi* | [**updateWorldPropertyRenting**](docs/Api/WorldApi.md#updateworldpropertyrenting) | **PATCH** /v1/world/property/renting/{leaseId} | Turn weekly autopay on or off (card leases).
*WorldApi* | [**updateWorldQuestPin**](docs/Api/WorldApi.md#updateworldquestpin) | **PUT** /v1/world/quests/pin | Wear a pin you EARNED from a quest on your nameplate, or { pin: null } to wear none. 403 for a pin you have not earned. Shows from the next room you walk into.
*WorldApi* | [**updateWorldRoomHolderGate**](docs/Api/WorldApi.md#updateworldroomholdergate) | **PUT** /v1/world/rooms/{id}/holder-gate | Make your room holders-only (its collection rooms follow). Send null to open it again. Returns &#x60;{ gate }&#x60;.
*WorldApi* | [**updateWorldSpace**](docs/Api/WorldApi.md#updateworldspace) | **PATCH** /v1/world/spaces/{slug} | As host, change a Space name, about or membership.
*WorldApi* | [**updateWorldSpaceHolderGate**](docs/Api/WorldApi.md#updateworldspaceholdergate) | **PUT** /v1/world/spaces/{slug}/holder-gate | Make your Space holders-only: only holders of an NFT collection join it (others can look in). Send null to open it again. Returns &#x60;{ gate }&#x60;.
*WorldApi* | [**updateWorldStaffPosting**](docs/Api/WorldApi.md#updateworldstaffposting) | **PUT** /v1/world/staff/postings/{id} | Replace a posting; its future unstaffed shifts are re-made.
*WorldApi* | [**updateWorldStallBookingBooth**](docs/Api/WorldApi.md#updateworldstallbookingbooth) | **PUT** /v1/world/stalls/bookings/{id}/booth | Dress the booth of a stall you booked (decor you hold).
*WorldApi* | [**updateWorldStreetOwnedTheme**](docs/Api/WorldApi.md#updateworldstreetownedtheme) | **PUT** /v1/world/streets/owned/{id}/theme | Set your street&#39;s theme.
*WorldsApi* | [**createWorldExperience**](docs/Api/WorldsApi.md#createworldexperience) | **POST** /v1/worlds/experiences | Create an experience with a start place (no version yet). Counts against the plan&#39;s experience limit.
*WorldsApi* | [**createWorldExperienceAccess**](docs/Api/WorldsApi.md#createworldexperienceaccess) | **POST** /v1/worlds/experiences/{experienceId}/access | Who can play: private, friends, unlisted or public (public/unlisted need a reviewed publish).
*WorldsApi* | [**createWorldExperienceAlertAck**](docs/Api/WorldsApi.md#createworldexperiencealertack) | **POST** /v1/worlds/experiences/{experienceId}/alerts/{alertId}/ack | Acknowledge an alert.
*WorldsApi* | [**createWorldExperienceAnalyticQuery**](docs/Api/WorldsApi.md#createworldexperienceanalyticquery) | **POST** /v1/worlds/experiences/{experienceId}/analytics/query | Query one custom event over ≤ 31 days: count, sum, avg or players, by day or hour, optionally grouped by a field. Groups under 50 players are suppressed.
*WorldsApi* | [**createWorldExperienceArchive**](docs/Api/WorldsApi.md#createworldexperiencearchive) | **POST** /v1/worlds/experiences/{experienceId}/archive | Archive: closes it, drains its servers, frees its plan slot; data is kept.
*WorldsApi* | [**createWorldExperienceBan**](docs/Api/WorldsApi.md#createworldexperienceban) | **POST** /v1/worlds/experiences/{experienceId}/bans | Ban a player from your experience: { sub, duration (seconds, null &#x3D; permanent), reason, displayReason?, applyToAlts? }. Enforced at join and on every running server.
*WorldsApi* | [**createWorldExperienceClose**](docs/Api/WorldsApi.md#createworldexperienceclose) | **POST** /v1/worlds/experiences/{experienceId}/close | Make the experience private again (owner-only joins).
*WorldsApi* | [**createWorldExperienceConfigRollback**](docs/Api/WorldsApi.md#createworldexperienceconfigrollback) | **POST** /v1/worlds/experiences/{experienceId}/configs/rollback | Instant rollback: an earlier version becomes the newest one.
*WorldsApi* | [**createWorldExperienceEvent**](docs/Api/WorldsApi.md#createworldexperienceevent) | **POST** /v1/worlds/experiences/{experienceId}/events | Schedule a live event: start and end, config values while live, an optional Messaging topic the platform publishes to at start and end.
*WorldsApi* | [**createWorldExperienceEventCancel**](docs/Api/WorldsApi.md#createworldexperienceeventcancel) | **POST** /v1/worlds/experiences/{experienceId}/events/{eventId}/cancel | Cancel a scheduled event, or end a live one now.
*WorldsApi* | [**createWorldExperienceExperiment**](docs/Api/WorldsApi.md#createworldexperienceexperiment) | **POST** /v1/worlds/experiences/{experienceId}/experiments | Create a draft experiment: 2–5 variants of config values with traffic weights (+ holdout &#x3D; 100), targeting, a primary metric and guardrails, minimum 7 days.
*WorldsApi* | [**createWorldExperienceExperimentShip**](docs/Api/WorldsApi.md#createworldexperienceexperimentship) | **POST** /v1/worlds/experiences/{experienceId}/experiments/{experimentId}/ship | Ship a variant: its values become the base config for everyone and the experiment ends.
*WorldsApi* | [**createWorldExperienceExperimentStart**](docs/Api/WorldsApi.md#createworldexperienceexperimentstart) | **POST** /v1/worlds/experiences/{experienceId}/experiments/{experimentId}/start | Start: running servers begin assigning players by their per-experience id.
*WorldsApi* | [**createWorldExperienceExperimentStop**](docs/Api/WorldsApi.md#createworldexperienceexperimentstop) | **POST** /v1/worlds/experiences/{experienceId}/experiments/{experimentId}/stop | Stop: every player sees the base config again.
*WorldsApi* | [**createWorldExperienceJoin**](docs/Api/WorldsApi.md#createworldexperiencejoin) | **POST** /v1/worlds/experiences/{experienceId}/join | Join as the token&#39;s owner: a server and a 60-second single-use ticket for wss …/v1/realtime/worlds/{serverId}. 202 while a new server boots.
*WorldsApi* | [**createWorldExperienceModerationAppeal**](docs/Api/WorldsApi.md#createworldexperiencemoderationappeal) | **POST** /v1/worlds/experiences/{experienceId}/moderation/appeals | Appeal a moderation decision on your game within 6 months (183 days): { kind: action | game | version | asset, targetId (from GET …/moderation/appeals targets), reason (20-4000 characters), evidence?: up to 5 https links }. The older shape { actionId, statement } still appeals an action. One open appeal per decision; a different reviewer answers and you are notified.
*WorldsApi* | [**createWorldExperienceOpen**](docs/Api/WorldsApi.md#createworldexperienceopen) | **POST** /v1/worlds/experiences/{experienceId}/open | Open the experience to players (needs a published start place).
*WorldsApi* | [**createWorldExperiencePlace**](docs/Api/WorldsApi.md#createworldexperienceplace) | **POST** /v1/worlds/experiences/{experienceId}/places | Add a place (at most 10 per experience in P1).
*WorldsApi* | [**createWorldExperiencePlaceCheck**](docs/Api/WorldsApi.md#createworldexperienceplacecheck) | **POST** /v1/worlds/experiences/{experienceId}/places/{placeId}/checks | Run the publish checks (script lint, budgets, shop-object listings) on a project. Writes nothing.
*WorldsApi* | [**createWorldExperiencePlacePublish**](docs/Api/WorldsApi.md#createworldexperienceplacepublish) | **POST** /v1/worlds/experiences/{experienceId}/places/{placeId}/publishes | Step 1: run checks and freeze a version (the saved draft, or an uploaded versionId). Blocking problems answer 400 with the list.
*WorldsApi* | [**createWorldExperiencePlaceStart**](docs/Api/WorldsApi.md#createworldexperienceplacestart) | **POST** /v1/worlds/experiences/{experienceId}/places/{placeId}/start | Make this the start place (where a plain join lands).
*WorldsApi* | [**createWorldExperiencePlaceTest**](docs/Api/WorldsApi.md#createworldexperienceplacetest) | **POST** /v1/worlds/experiences/{experienceId}/places/{placeId}/test | Cloud playtest: a private test version from the saved draft, joined on a fleet server (owner only, never live). 202 while it boots.
*WorldsApi* | [**createWorldExperiencePlaceVersion**](docs/Api/WorldsApi.md#createworldexperienceplaceversion) | **POST** /v1/worlds/experiences/{experienceId}/places/{placeId}/versions | Upload a version bundle (crossly-worlds-project/1). Not live until published.
*WorldsApi* | [**createWorldExperiencePlaceVersionPublish**](docs/Api/WorldsApi.md#createworldexperienceplaceversionpublish) | **POST** /v1/worlds/experiences/{experienceId}/places/{placeId}/versions/{versionId}/publish | Make a version current (publish or roll back). New joins land on it; older servers drain as they empty.
*WorldsApi* | [**createWorldExperiencePlaceVersionRollback**](docs/Api/WorldsApi.md#createworldexperienceplaceversionrollback) | **POST** /v1/worlds/experiences/{experienceId}/places/{placeId}/versions/{versionId}/rollback | Make an earlier reviewed version current again. Unreviewed versions go through …/publishes.
*WorldsApi* | [**createWorldExperiencePlaytester**](docs/Api/WorldsApi.md#createworldexperienceplaytester) | **POST** /v1/worlds/experiences/{experienceId}/playtesters | Add a playtester by Crossly handle (max 200 per game).
*WorldsApi* | [**createWorldExperiencePublishCancel**](docs/Api/WorldsApi.md#createworldexperiencepublishcancel) | **POST** /v1/worlds/experiences/{experienceId}/publishes/{requestId}/cancel | Give up a publish that is not live.
*WorldsApi* | [**createWorldExperiencePublishHalt**](docs/Api/WorldsApi.md#createworldexperiencepublishhalt) | **POST** /v1/worlds/experiences/{experienceId}/publishes/{requestId}/halt | Stop a rollout: new joins go back to the current version.
*WorldsApi* | [**createWorldExperiencePublishRollout**](docs/Api/WorldsApi.md#createworldexperiencepublishrollout) | **POST** /v1/worlds/experiences/{experienceId}/publishes/{requestId}/rollout | Step 7: serve the approved version to percent (1–100) of new joins; 100 makes it current. Crash-heavy rollouts halt automatically.
*WorldsApi* | [**createWorldExperiencePublishSubmit**](docs/Api/WorldsApi.md#createworldexperiencepublishsubmit) | **POST** /v1/worlds/experiences/{experienceId}/publishes/{requestId}/submit | Step 6: moderation. First publishes and script changes go to a person (24 h SLA); layout-only and private publishes are approved automatically.
*WorldsApi* | [**createWorldExperienceReservedServer**](docs/Api/WorldsApi.md#createworldexperiencereservedserver) | **POST** /v1/worlds/experiences/{experienceId}/reserved-servers | An access code for a reserved server of a place (teleports, matches, tournaments). The code is shown once.
*WorldsApi* | [**createWorldExperienceRestore**](docs/Api/WorldsApi.md#createworldexperiencerestore) | **POST** /v1/worlds/experiences/{experienceId}/restore | Restore an archived game, or a deleted one within 30 days; it comes back private.
*WorldsApi* | [**createWorldExperienceServerShutdown**](docs/Api/WorldsApi.md#createworldexperienceservershutdown) | **POST** /v1/worlds/experiences/{experienceId}/servers/shutdown | Shut down servers: mode soft (default) teleports players to fresh servers of the current version first; hard stops now. scope all | outdated (only servers not on a served version).
*WorldsApi* | [**createWorldExperienceTransferRequest**](docs/Api/WorldsApi.md#createworldexperiencetransferrequest) | **POST** /v1/worlds/experiences/{experienceId}/transfer-requests | Ask another Crossly account (handle or email) to take over a 3D game you own. One waiting request per game; it expires after 14 days.
*WorldsApi* | [**createWorldMatureVerify**](docs/Api/WorldsApi.md#createworldmatureverify) | **POST** /v1/worlds/mature/verify | Start the ID check Mature needs (Stripe Identity: photo ID + selfie; the date of birth is read off the ID). Returns a hosted URL and client secret, or alreadyVerified.
*WorldsApi* | [**createWorldParentalAccept**](docs/Api/WorldsApi.md#createworldparentalaccept) | **POST** /v1/worlds/parental/accept | Accept a child&#39;s invite as the parent: { code, pin }. The parent must be an ID-verified adult (18+ by the date of birth on the ID). The PIN protects every later change.
*WorldsApi* | [**createWorldParentalChildrenPin**](docs/Api/WorldsApi.md#createworldparentalchildrenpin) | **POST** /v1/worlds/parental/children/{childId}/pin | Change the parent PIN: { pin, newPin } (4-8 digits). Five wrong PINs lock changes for 15 minutes.
*WorldsApi* | [**createWorldParentalChildrenUnlink**](docs/Api/WorldsApi.md#createworldparentalchildrenunlink) | **POST** /v1/worlds/parental/children/{childId}/unlink | Remove the parent link (and its limits) with your PIN: { pin }.
*WorldsApi* | [**createWorldParentalInvite**](docs/Api/WorldsApi.md#createworldparentalinvite) | **POST** /v1/worlds/parental/invite | An under-18 account asks for a parent: a one-time code (72 hours) the parent enters while signed in to their own account. Replaces any pending code.
*WorldsApi* | [**createWorldRatingCompute**](docs/Api/WorldsApi.md#createworldratingcompute) | **POST** /v1/worlds/rating/compute | Rate a set of questionnaire answers exactly as publishing does: { answers } → rating (null when refused), reasons, content descriptors, interactive notices and refusals.
*WorldsApi* | [**createWorldReport**](docs/Api/WorldsApi.md#createworldreport) | **POST** /v1/worlds/reports | Report a player (targetSub), the experience, an object (targetInstanceId) or a chat line (chatLineId). Crossly attaches the server, place version and its own chat log; you send ids only.
*WorldsApi* | [**createWorldTransferRequestAccept**](docs/Api/WorldsApi.md#createworldtransferrequestaccept) | **POST** /v1/worlds/transfer-requests/{requestId}/accept | Accept a transfer asked of you: the game becomes yours now. Earnings already credited stay with the previous owner; new sales pay you.
*WorldsApi* | [**createWorldTransferRequestCancel**](docs/Api/WorldsApi.md#createworldtransferrequestcancel) | **POST** /v1/worlds/transfer-requests/{requestId}/cancel | Cancel a transfer request you sent while it waits.
*WorldsApi* | [**createWorldTransferRequestDecline**](docs/Api/WorldsApi.md#createworldtransferrequestdecline) | **POST** /v1/worlds/transfer-requests/{requestId}/decline | Decline a transfer asked of you; nothing changes.
*WorldsApi* | [**deleteWorldExperience**](docs/Api/WorldsApi.md#deleteworldexperience) | **DELETE** /v1/worlds/experiences/{experienceId} | Delete a game (a tombstone, restorable for 30 days). Body { confirmName } &#x3D; the game&#39;s name.
*WorldsApi* | [**deleteWorldExperienceBan**](docs/Api/WorldsApi.md#deleteworldexperienceban) | **DELETE** /v1/worlds/experiences/{experienceId}/bans/{sub} | Lift your experience&#39;s ban on a player. Bans placed by Crossly safety are lifted only by appeal.
*WorldsApi* | [**deleteWorldExperiencePlaytester**](docs/Api/WorldsApi.md#deleteworldexperienceplaytester) | **DELETE** /v1/worlds/experiences/{experienceId}/playtesters/{userId} | Remove a playtester.
*WorldsApi* | [**deleteWorldParentalInvite**](docs/Api/WorldsApi.md#deleteworldparentalinvite) | **DELETE** /v1/worlds/parental/invite | Withdraw a pending parent invite.
*WorldsApi* | [**getWorldChart**](docs/Api/WorldsApi.md#getworldchart) | **GET** /v1/worlds/charts/{chart} | A chart: top-playing (players now), trending (this week vs last, retention-weighted), top-rated (Wilson lower bound of thumbs up, 10+ votes), new-rising, friends, most-favorited; ?genre&#x3D; cuts it to one genre. Organic only: nothing paid.
*WorldsApi* | [**getWorldDiscoverExperience**](docs/Api/WorldsApi.md#getworlddiscoverexperience) | **GET** /v1/worlds/discover/experiences/{key} | An experience&#39;s thumbs up/down, favourites, your vote and favourite, and whether you have played enough to vote (10 minutes). key: worlds:&lt;id&gt;, classic:&lt;id&gt;, tcg:&lt;game&gt;, cards:&lt;game&gt;.
*WorldsApi* | [**getWorldDiscoverRow**](docs/Api/WorldsApi.md#getworlddiscoverrow) | **GET** /v1/worlds/discover/rows | The Play hub&#39;s rows for you: Continue playing, Friends are playing, Recommended for you, Featured (editorial, first-party capped), Top Playing, Trending, New &amp; Rising, Top Rated, Made in Carnival Studio, Shop the world, card games, Classic games and genre rows. At most one tile is paid, always labelled \&quot;Sponsored\&quot;, never in the first two rows or a row&#39;s first two places.
*WorldsApi* | [**getWorldExperience**](docs/Api/WorldsApi.md#getworldexperience) | **GET** /v1/worlds/experiences/{experienceId} | One of your experiences with its places, live CCU and server count.
*WorldsApi* | [**getWorldExperienceAccessLimit**](docs/Api/WorldsApi.md#getworldexperienceaccesslimit) | **GET** /v1/worlds/experiences/{experienceId}/access-limits | The game&#39;s crew-only and country limits, and the owner&#39;s crew.
*WorldsApi* | [**getWorldExperienceAlertSetting**](docs/Api/WorldsApi.md#getworldexperiencealertsetting) | **GET** /v1/worlds/experiences/{experienceId}/alerts/settings | Alert rules (threshold, on/off, inbox, webhook) and quiet hours.
*WorldsApi* | [**getWorldExperienceAnalytic**](docs/Api/WorldsApi.md#getworldexperienceanalytic) | **GET** /v1/worlds/experiences/{experienceId}/analytics/{report} | An analytics report: overview, engagement, retention, monetization, funnels, economy, performance, custom or costs (fleet CPU-minutes, egress, estimated cost). ?from&#x3D;&amp;to&#x3D; (YYYY-MM-DD), retention ?segment&#x3D;, funnels ?funnel&#x3D;, economy ?currency&#x3D;.
*WorldsApi* | [**getWorldExperienceBan**](docs/Api/WorldsApi.md#getworldexperienceban) | **GET** /v1/worlds/experiences/{experienceId}/bans/{sub} | The live ban on one player, or 404.
*WorldsApi* | [**getWorldExperienceChatSetting**](docs/Api/WorldsApi.md#getworldexperiencechatsetting) | **GET** /v1/worlds/experiences/{experienceId}/chat-settings | The game&#39;s text chat setting and filter level.
*WorldsApi* | [**getWorldExperienceConfig**](docs/Api/WorldsApi.md#getworldexperienceconfig) | **GET** /v1/worlds/experiences/{experienceId}/configs | The remote config document ({ values, rules }) and its version.
*WorldsApi* | [**getWorldExperienceExperiment**](docs/Api/WorldsApi.md#getworldexperienceexperiment) | **GET** /v1/worlds/experiences/{experienceId}/experiments/{experimentId} | Results per variant: n, mean, lift, fixed and always-valid 95% intervals, the verdict and a sample-size estimate.
*WorldsApi* | [**getWorldExperienceMaturity**](docs/Api/WorldsApi.md#getworldexperiencematurity) | **GET** /v1/worlds/experiences/{experienceId}/maturity | The content maturity questionnaire: questions, answers, the published rating and any rating waiting for the next publish.
*WorldsApi* | [**getWorldExperienceModeration**](docs/Api/WorldsApi.md#getworldexperiencemoderation) | **GET** /v1/worlds/experiences/{experienceId}/moderation | Moderation status of your experience: holds (unlisted / taken down), the latest review, the automated scan, strikes, trusted-lane status, open reports and live bans.
*WorldsApi* | [**getWorldExperienceModerationAppeal**](docs/Api/WorldsApi.md#getworldexperiencemoderationappeal) | **GET** /v1/worlds/experiences/{experienceId}/moderation/appeals | What you can appeal on your game and every appeal of it: data.targets (Crossly&#39;s actions, a moderation hold, rejected versions, blocked assets; each with appealableUntil and its latest appeal) and data.appeals (newest first: kind, status open | upheld | overturned, reason, evidence, the reviewer&#39;s note).
*WorldsApi* | [**getWorldExperiencePlaceDraft**](docs/Api/WorldsApi.md#getworldexperienceplacedraft) | **GET** /v1/worlds/experiences/{experienceId}/places/{placeId}/draft | The Studio draft of a place ({ world, place }, revision). Falls back to the current version, or an empty place.
*WorldsApi* | [**getWorldExperiencePublish**](docs/Api/WorldsApi.md#getworldexperiencepublish) | **GET** /v1/worlds/experiences/{experienceId}/publishes/{requestId} | One publish with its review state and rollout.
*WorldsApi* | [**getWorldExperienceShop**](docs/Api/WorldsApi.md#getworldexperienceshop) | **GET** /v1/worlds/experiences/{experienceId}/shop | An open experience&#39;s way back to commerce: its creator&#39;s shop and how many live listings it has.
*WorldsApi* | [**getWorldExperienceShowcase**](docs/Api/WorldsApi.md#getworldexperienceshowcase) | **GET** /v1/worlds/experiences/{experienceId}/showcase | The listings the game&#39;s page showcases, and the owner&#39;s live Crossly listings that can be picked.
*WorldsApi* | [**getWorldFriendPlaying**](docs/Api/WorldsApi.md#getworldfriendplaying) | **GET** /v1/worlds/friends/playing | Your friends (mutual follows) and where each is playing right now, with the link that joins them.
*WorldsApi* | [**getWorldGameByGame**](docs/Api/WorldsApi.md#getworldgamebygame) | **GET** /v1/worlds/games/{game} | A game&#39;s page, as the /games launcher shows it: the tile (players now, thumbs-up %, friends inside), description, tags, creator (Crossly for its own), rating with its content descriptors, visits, created and updated, release notes, gallery, what it sells (bought through Crossly checkout) and the Crossly World app link. :game is a Worlds experience id or any experience key.
*WorldsApi* | [**getWorldGameMine**](docs/Api/WorldsApi.md#getworldgamemine) | **GET** /v1/worlds/games/mine/{gameId} | A game&#39;s summary: status, timeline, the sub-pages you may open, health and next steps.
*WorldsApi* | [**getWorldGameMineAssetsUsed**](docs/Api/WorldsApi.md#getworldgamemineassetsused) | **GET** /v1/worlds/games/mine/{gameId}/assets-used | Everything a game&#39;s published build ships (Assets used): models, sounds, images, scripts, Toolbox assets and other files, each with the places that ship it. A 3D world reads each place&#39;s current version; a Classic game its latest reviewed package version.
*WorldsApi* | [**getWorldGameServer**](docs/Api/WorldsApi.md#getworldgameserver) | **GET** /v1/worlds/games/{game}/servers | A Crossly Carnival game&#39;s public servers that are up: players, max, whether a stranger still fits, your friends on each (friends&#39; servers first, then the fullest with room); and the private servers you pay for. Join one with POST /v1/worlds/experiences/:id/join { serverId }.
*WorldsApi* | [**getWorldLinkCardGame**](docs/Api/WorldsApi.md#getworldlinkcardgame) | **GET** /v1/worlds/links/card-game/{game} | Where to play a card game: Crossly&#39;s own game, its Commons tables, and creator worlds that tag it.
*WorldsApi* | [**getWorldLinkListing**](docs/Api/WorldsApi.md#getworldlinklisting) | **GET** /v1/worlds/links/listing/{slug} | \&quot;Try it in Crossly Carnival\&quot;: open games whose live version shows this Crossly listing (its shop slug), then other games by the same seller. Links only: a sale is attributed to a game only through in-world touches its server reports.
*WorldsApi* | [**getWorldLinkSeller**](docs/Api/WorldsApi.md#getworldlinkseller) | **GET** /v1/worlds/links/seller/{username} | \&quot;Games by this seller\&quot;: the seller&#39;s open games, best first.
*WorldsApi* | [**getWorldMature**](docs/Api/WorldsApi.md#getworldmature) | **GET** /v1/worlds/mature | Mature (17+) for this account: eligible or not, the steps still to take in order (birth month, ID check, opt-in; region, parental controls and safety holds are final), and the ID age check status.
*WorldsApi* | [**getWorldMePref**](docs/Api/WorldsApi.md#getworldmepref) | **GET** /v1/worlds/me/prefs | Your Crossly Carnival choices (whether games may see your Crossly wallet address).
*WorldsApi* | [**getWorldParentalChildren**](docs/Api/WorldsApi.md#getworldparentalchildren) | **GET** /v1/worlds/parental/children/{childId} | One linked account with ?days&#x3D; (1-90) of playtime per experience.
*WorldsApi* | [**getWorldParentalMe**](docs/Api/WorldsApi.md#getworldparentalme) | **GET** /v1/worlds/parental/me | This account&#39;s parent link: none, pending (an invite is out) or active (the parent&#39;s name and the limits they set).
*WorldsApi* | [**getWorldPlaza**](docs/Api/WorldsApi.md#getworldplaza) | **GET** /v1/worlds/plaza | The Carnival Plaza district: the twelve-portal ring (a sponsored portal can only take the last slot, labelled), the new &amp; rising row, the featured stage&#39;s editorial pick and four chart boards, with players now and friends inside.
*WorldsApi* | [**getWorldPolicyMe**](docs/Api/WorldsApi.md#getworldpolicyme) | **GET** /v1/worlds/policy/me | What this account may do in experiences, by age and region: chat level, purchases, paid random items, trading, links, ads, contests, rating ceiling — with the reason for each \&quot;no\&quot;.
*WorldsApi* | [**getWorldRatingQuestionnaire**](docs/Api/WorldsApi.md#getworldratingquestionnaire) | **GET** /v1/worlds/rating/questionnaire | The content-rating questionnaire (IARC-aligned): every question and choice, the three ratings (Everyone, Teen 13+, Mature 17+), what is never allowed, and the regions where Mature is restricted.
*WorldsApi* | [**getWorldSearch**](docs/Api/WorldsApi.md#getworldsearch) | **GET** /v1/worlds/search | Search experiences by title, creator, tags and genre (typo-tolerant, synonyms such as obby / obstacle). Filters: genre, rating (everyone keeps to Everyone), device, players (one server holds at least N), minThumbs (percent), live, friends. No results suggests a chart.
*WorldsApi* | [**getWorldTransferRequest**](docs/Api/WorldsApi.md#getworldtransferrequest) | **GET** /v1/worlds/transfer-requests/{requestId} | One ownership transfer request (only its two people can read it), with the actions you may take.
*WorldsApi* | [**getWorldTransparency**](docs/Api/WorldsApi.md#getworldtransparency) | **GET** /v1/worlds/transparency/{month} | One month&#39;s transparency report (YYYY-MM): reports by reason and source, decisions and median time to decide, actions by kind and issuer, appeals and overturn rate, publish reviews, second reviews of creator bans.
*WorldsApi* | [**listWorldAppeals**](docs/Api/WorldsApi.md#listworldappeals) | **GET** /v1/worlds/appeals | Your appeals and their decisions.
*WorldsApi* | [**listWorldExperienceAlerts**](docs/Api/WorldsApi.md#listworldexperiencealerts) | **GET** /v1/worlds/experiences/{experienceId}/alerts | Alerts that fired, newest first.
*WorldsApi* | [**listWorldExperienceAudit**](docs/Api/WorldsApi.md#listworldexperienceaudit) | **GET** /v1/worlds/experiences/{experienceId}/audit | The live-ops audit log: every config, experiment, event and alert change, who made it, when.
*WorldsApi* | [**listWorldExperienceBans**](docs/Api/WorldsApi.md#listworldexperiencebans) | **GET** /v1/worlds/experiences/{experienceId}/bans | Players banned from your experience (by pairwise sub), oldest first (cursor).
*WorldsApi* | [**listWorldExperienceConfigVersions**](docs/Api/WorldsApi.md#listworldexperienceconfigversions) | **GET** /v1/worlds/experiences/{experienceId}/configs/versions | Config history, newest first: who changed which keys, when.
*WorldsApi* | [**listWorldExperienceEvents**](docs/Api/WorldsApi.md#listworldexperienceevents) | **GET** /v1/worlds/experiences/{experienceId}/events | Scheduled and live events (?includeEnded&#x3D;true for history).
*WorldsApi* | [**listWorldExperienceExperiments**](docs/Api/WorldsApi.md#listworldexperienceexperiments) | **GET** /v1/worlds/experiences/{experienceId}/experiments | A/B experiments, newest first, with their live verdict.
*WorldsApi* | [**listWorldExperienceModerationReports**](docs/Api/WorldsApi.md#listworldexperiencemoderationreports) | **GET** /v1/worlds/experiences/{experienceId}/moderation/reports | Reports about your experience, newest first (cursor). Reporter identity, account ids and other players&#39; words are removed.
*WorldsApi* | [**listWorldExperiencePlacePublishes**](docs/Api/WorldsApi.md#listworldexperienceplacepublishes) | **GET** /v1/worlds/experiences/{experienceId}/places/{placeId}/publishes | Publishes of a place, newest first: state, checks, rating, access, review, rollout.
*WorldsApi* | [**listWorldExperiencePlaceVersions**](docs/Api/WorldsApi.md#listworldexperienceplaceversions) | **GET** /v1/worlds/experiences/{experienceId}/places/{placeId}/versions | Version history of a place, newest first; &#x60;current&#x60; marks the live one.
*WorldsApi* | [**listWorldExperiencePlaces**](docs/Api/WorldsApi.md#listworldexperienceplaces) | **GET** /v1/worlds/experiences/{experienceId}/places | The places of an experience, start place first.
*WorldsApi* | [**listWorldExperiencePlaytesters**](docs/Api/WorldsApi.md#listworldexperienceplaytesters) | **GET** /v1/worlds/experiences/{experienceId}/playtesters | People who may join while the game is private.
*WorldsApi* | [**listWorldExperienceServers**](docs/Api/WorldsApi.md#listworldexperienceservers) | **GET** /v1/worlds/experiences/{experienceId}/servers | Live servers: place, version, region, players, health.
*WorldsApi* | [**listWorldExperiences**](docs/Api/WorldsApi.md#listworldexperiences) | **GET** /v1/worlds/experiences | Your experiences, newest first; cursor-paged (?cursor&#x3D;&amp;limit&#x3D;).
*WorldsApi* | [**listWorldFavorites**](docs/Api/WorldsApi.md#listworldfavorites) | **GET** /v1/worlds/favorites | Your favourite experiences that are still open, newest first.
*WorldsApi* | [**listWorldGameMine**](docs/Api/WorldsApi.md#listworldgamemine) | **GET** /v1/worlds/games/mine | Every game you own or collaborate on, 3D worlds and Classic, filtered (?q&amp;status&amp;engine&amp;genre&amp;template&amp;owner&amp;flag&amp;sort; sort&#x3D;revenue &#x3D; highest earning first). Each row carries revenueCents: your creator-ledger earnings from it in USD cents (null for Classic).
*WorldsApi* | [**listWorldParentalChildren**](docs/Api/WorldsApi.md#listworldparentalchildren) | **GET** /v1/worlds/parental/children | Accounts you are the linked parent of: limits (max rating, chat, monthly spend), spend this month, and the last 7 days of playtime per experience.
*WorldsApi* | [**listWorldRecent**](docs/Api/WorldsApi.md#listworldrecent) | **GET** /v1/worlds/recent | Continue playing: what you played in the last 90 days that is still open, newest first (from what the servers recorded).
*WorldsApi* | [**listWorldRegions**](docs/Api/WorldsApi.md#listworldregions) | **GET** /v1/worlds/regions | Live server regions with a probe URL each: GET it a few times, send the round trips as &#x60;pings&#x60; with the join to land in the nearest region.
*WorldsApi* | [**listWorldShopListings**](docs/Api/WorldsApi.md#listworldshoplistings) | **GET** /v1/worlds/shop-listings | Your live Crossly listings a game can show and sell (shop objects bind to their id).
*WorldsApi* | [**listWorldTransferRequests**](docs/Api/WorldsApi.md#listworldtransferrequests) | **GET** /v1/worlds/transfer-requests | Ownership transfer requests you were asked (incoming) or sent (outgoing), newest first (?direction&amp;status&amp;experienceId).
*WorldsApi* | [**listWorldTransparency**](docs/Api/WorldsApi.md#listworldtransparency) | **GET** /v1/worlds/transparency | Published monthly transparency reports, newest first: reports received and actions taken, by type (counts only).
*WorldsApi* | [**updateWorldExperience**](docs/Api/WorldsApi.md#updateworldexperience) | **PATCH** /v1/worlds/experiences/{experienceId} | Edit name, description, genre, rating or icon.
*WorldsApi* | [**updateWorldExperienceAccessLimit**](docs/Api/WorldsApi.md#updateworldexperienceaccesslimit) | **PUT** /v1/worlds/experiences/{experienceId}/access-limits | Limit who can play: { crewOnly } (only members of the owner&#39;s crew), { countryMode: all|allow|block, countries: [&#39;US&#39;, ...] }. The owner and team are never limited.
*WorldsApi* | [**updateWorldExperienceAlertSetting**](docs/Api/WorldsApi.md#updateworldexperiencealertsetting) | **PUT** /v1/worlds/experiences/{experienceId}/alerts/settings | Change alert rules and quiet hours.
*WorldsApi* | [**updateWorldExperienceChatSetting**](docs/Api/WorldsApi.md#updateworldexperiencechatsetting) | **PUT** /v1/worlds/experiences/{experienceId}/chat-settings | Turn text chat off or use the strict filter for everyone (never looser than the platform).
*WorldsApi* | [**updateWorldExperienceConfig**](docs/Api/WorldsApi.md#updateworldexperienceconfig) | **PUT** /v1/worlds/experiences/{experienceId}/configs | Save the whole config document. Running servers get it within seconds (ConfigService.Changed). baseVersion guards against overwriting a newer save (409).
*WorldsApi* | [**updateWorldExperienceConfigValue**](docs/Api/WorldsApi.md#updateworldexperienceconfigvalue) | **PATCH** /v1/worlds/experiences/{experienceId}/configs/values | Set and/or remove individual config keys.
*WorldsApi* | [**updateWorldExperienceEvent**](docs/Api/WorldsApi.md#updateworldexperienceevent) | **PATCH** /v1/worlds/experiences/{experienceId}/events/{eventId} | Reschedule or change a scheduled event; a live event may only move its end.
*WorldsApi* | [**updateWorldExperienceExperiment**](docs/Api/WorldsApi.md#updateworldexperienceexperiment) | **PATCH** /v1/worlds/experiences/{experienceId}/experiments/{experimentId} | Edit a draft (a running experiment may only rename or reword).
*WorldsApi* | [**updateWorldExperienceMaturity**](docs/Api/WorldsApi.md#updateworldexperiencematurity) | **PUT** /v1/worlds/experiences/{experienceId}/maturity | Answer the questionnaire: { answers }. A stricter rating applies now; a looser or first Mature rating waits for the next reviewed publish (takesEffect).
*WorldsApi* | [**updateWorldExperiencePlace**](docs/Api/WorldsApi.md#updateworldexperienceplace) | **PATCH** /v1/worlds/experiences/{experienceId}/places/{placeId} | Place settings: name, max players (1-50), fill target, social slots, empty shutdown.
*WorldsApi* | [**updateWorldExperiencePlaceDraft**](docs/Api/WorldsApi.md#updateworldexperienceplacedraft) | **PUT** /v1/worlds/experiences/{experienceId}/places/{placeId}/draft | Save the draft. baseRevision is the revision you loaded (0 for none); a newer save elsewhere answers 409 draft_conflict.
*WorldsApi* | [**updateWorldExperiencePlaceVersionNote**](docs/Api/WorldsApi.md#updateworldexperienceplaceversionnote) | **PUT** /v1/worlds/experiences/{experienceId}/places/{placeId}/versions/{versionId}/notes | Edit a release version&#39;s changelog (the game page&#39;s What&#39;s new): { notes } up to 2000 characters.
*WorldsApi* | [**updateWorldExperiencePublish**](docs/Api/WorldsApi.md#updateworldexperiencepublish) | **PATCH** /v1/worlds/experiences/{experienceId}/publishes/{requestId} | Steps 2–5: details, rating questionnaire answers, access (private | friends | unlisted | public), money review acknowledgement.
*WorldsApi* | [**updateWorldExperienceShowcase**](docs/Api/WorldsApi.md#updateworldexperienceshowcase) | **PUT** /v1/worlds/experiences/{experienceId}/showcase | Set the showcased listings: { listingIds } (Crossly shop slugs of the owner&#39;s live listings, max 12, in order).
*WorldsApi* | [**updateWorldFavorite**](docs/Api/WorldsApi.md#updateworldfavorite) | **PUT** /v1/worlds/favorites | Favourite or un-favourite an experience (idempotent).
*WorldsApi* | [**updateWorldMature**](docs/Api/WorldsApi.md#updateworldmature) | **PUT** /v1/worlds/mature | Switch \&quot;Show Mature experiences\&quot; on or off: { showMature }. On is refused while a final step blocks (too young, region, parental controls, safety hold); it never skips the ID check.
*WorldsApi* | [**updateWorldMePref**](docs/Api/WorldsApi.md#updateworldmepref) | **PUT** /v1/worlds/me/prefs | Set your Crossly Carnival choices.
*WorldsApi* | [**updateWorldParentalChildren**](docs/Api/WorldsApi.md#updateworldparentalchildren) | **PATCH** /v1/worlds/parental/children/{childId} | Change a linked account&#39;s limits with your PIN: { pin, settings: { maxRating: everyone|teen, chat: on|friends|off, monthlySpendLimitCents (0 &#x3D; no purchases, null &#x3D; no limit) } }. Enforced server-side at join, chat, the purchase prompt and checkout.
*WorldsApi* | [**updateWorldVote**](docs/Api/WorldsApi.md#updateworldvote) | **PUT** /v1/worlds/votes | Thumbs up, down, or null to withdraw: one vote per player per experience, counted only after 10 minutes of play (403 vote_needs_playtime before). A light ranking signal.
*WorldsAdsApi* | [**getWorldExperienceAd**](docs/Api/WorldsAdsApi.md#getworldexperiencead) | **GET** /v1/worlds/experiences/{experienceId}/ads | The ads for a game&#39;s in-world ad surfaces (parts tagged CrosslyAdSurface), for the token&#39;s owner: Sponsored Listings labelled \&quot;Ad\&quot;, served only to signed-in adults where the game&#39;s creator turned ads on, never to its team. A click is POST /api/public/shop/ads/click { token }.
*WorldsAdsApi* | [**getWorldExperienceAdReport**](docs/Api/WorldsAdsApi.md#getworldexperienceadreport) | **GET** /v1/worlds/experiences/{experienceId}/ads/report | In-game ads over the last N days (default 30, max 90): impressions, clicks, charged clicks, advertiser spend and your earned share, per day.
*WorldsAdsApi* | [**getWorldExperienceAdSetting**](docs/Api/WorldsAdsApi.md#getworldexperienceadsetting) | **GET** /v1/worlds/experiences/{experienceId}/ad-settings | Whether this game shows in-game ads (opt-in, default off) and the creator&#39;s share of Crossly&#39;s ad revenue in force.
*WorldsAdsApi* | [**updateWorldExperienceAdSetting**](docs/Api/WorldsAdsApi.md#updateworldexperienceadsetting) | **PUT** /v1/worlds/experiences/{experienceId}/ad-settings | Turn in-game ads on or off for this game. Ads fill the game&#39;s ad surfaces (parts tagged CrosslyAdSurface); nothing shows until it has one.
*WorldsBadgesApi* | [**createWorldExperienceBadge**](docs/Api/WorldsBadgesApi.md#createworldexperiencebadge) | **POST** /v1/worlds/experiences/{experienceId}/badges | Add a badge (at most 100 per game). name 1-50 characters, description up to 1000, iconSha256 &#x3D; the sha256 a png upload answered (POST /v1/world/interactive/assets, kind png); a new icon is shown once a person approved it.
*WorldsBadgesApi* | [**getWorldBadgeMine**](docs/Api/WorldsBadgesApi.md#getworldbadgemine) | **GET** /v1/worlds/badges/mine | Every game badge you hold, newest first, and whether your person page shows them.
*WorldsBadgesApi* | [**getWorldExperienceBadge**](docs/Api/WorldsBadgesApi.md#getworldexperiencebadge) | **GET** /v1/worlds/experiences/{experienceId}/badges | A game&#39;s badges, oldest first: name, description, icon and its review state, on/off, how many players hold each; plus the player count (the rarity denominator) and the limits. Scripts award them with BadgeService.AwardBadge(player, badgeId).
*WorldsBadgesApi* | [**getWorldGameBadge**](docs/Api/WorldsBadgesApi.md#getworldgamebadge) | **GET** /v1/worlds/games/{game}/badges | A Crossly Carnival game&#39;s badges as players see them: name, description, approved icon, how many hold it, rarity (% of the game&#39;s players) and, for you, when you earned it. :game is a Worlds experience id or key.
*WorldsBadgesApi* | [**getWorldPlayerBadge**](docs/Api/WorldsBadgesApi.md#getworldplayerbadge) | **GET** /v1/worlds/players/{username}/badges | The game badges a person shows on their person page (only when they switched it on; Mature and non-public games never appear).
*WorldsBadgesApi* | [**updateWorldBadgeProfile**](docs/Api/WorldsBadgesApi.md#updateworldbadgeprofile) | **PUT** /v1/worlds/badges/profile | Show (or hide) the game badges you hold on your person page. Off by default.
*WorldsBadgesApi* | [**updateWorldExperienceBadge**](docs/Api/WorldsBadgesApi.md#updateworldexperiencebadge) | **PATCH** /v1/worlds/experiences/{experienceId}/badges/{badgeId} | Edit a badge: name, description, icon (null removes it), enabled. Badges are never deleted (players keep what they earned); turn one off to hide it and stop AwardBadge.
*WorldsDataApi* | [**createWorldExperienceDatastoreEntryIncrement**](docs/Api/WorldsDataApi.md#createworldexperiencedatastoreentryincrement) | **POST** /v1/worlds/experiences/{experienceId}/datastores/{store}/entries/{key}/increment | Atomically add &#x60;by&#x60; to a numeric key (absent counts as 0).
*WorldsDataApi* | [**createWorldExperienceMemoryQueueItem**](docs/Api/WorldsDataApi.md#createworldexperiencememoryqueueitem) | **POST** /v1/worlds/experiences/{experienceId}/memory/queues/{queue}/items | Add an item to a MemoryStore queue (ttlSeconds ≤ 45 days, priority 0-1000).
*WorldsDataApi* | [**createWorldExperienceMemoryQueueRead**](docs/Api/WorldsDataApi.md#createworldexperiencememoryqueueread) | **POST** /v1/worlds/experiences/{experienceId}/memory/queues/{queue}/read | Read and hide up to &#x60;count&#x60; queue items for invisibilitySeconds; remove them with the readId.
*WorldsDataApi* | [**createWorldExperienceMessaging**](docs/Api/WorldsDataApi.md#createworldexperiencemessaging) | **POST** /v1/worlds/experiences/{experienceId}/messaging/{topic} | Publish a message (≤ 1 KB) to every live server of the experience subscribed to the topic.
*WorldsDataApi* | [**createWorldExperienceOrderedEntryIncrement**](docs/Api/WorldsDataApi.md#createworldexperienceorderedentryincrement) | **POST** /v1/worlds/experiences/{experienceId}/ordered/{store}/entries/{key}/increment | Atomically add &#x60;by&#x60; to an OrderedStore entry.
*WorldsDataApi* | [**deleteWorldExperienceDatastoreEntry**](docs/Api/WorldsDataApi.md#deleteworldexperiencedatastoreentry) | **DELETE** /v1/worlds/experiences/{experienceId}/datastores/{store}/entries/{key} | Remove a key (a tombstone version; history stays readable for 30 days). Honours If-Match.
*WorldsDataApi* | [**deleteWorldExperienceMemoryMap**](docs/Api/WorldsDataApi.md#deleteworldexperiencememorymap) | **DELETE** /v1/worlds/experiences/{experienceId}/memory/maps/{map}/{key} | Remove a hash map item.
*WorldsDataApi* | [**deleteWorldExperienceMemoryQueueRead**](docs/Api/WorldsDataApi.md#deleteworldexperiencememoryqueueread) | **DELETE** /v1/worlds/experiences/{experienceId}/memory/queues/{queue}/reads/{readId} | Remove the items of one read (409 if the read lapsed).
*WorldsDataApi* | [**deleteWorldExperienceMemorySorted**](docs/Api/WorldsDataApi.md#deleteworldexperiencememorysorted) | **DELETE** /v1/worlds/experiences/{experienceId}/memory/sorted/{map}/{key} | Remove a sorted map item.
*WorldsDataApi* | [**deleteWorldExperienceOrderedEntry**](docs/Api/WorldsDataApi.md#deleteworldexperienceorderedentry) | **DELETE** /v1/worlds/experiences/{experienceId}/ordered/{store}/entries/{key} | Remove an OrderedStore entry.
*WorldsDataApi* | [**getWorldExperienceDataUsage**](docs/Api/WorldsDataApi.md#getworldexperiencedatausage) | **GET** /v1/worlds/experiences/{experienceId}/data/usage | Live quotas and usage: CCU, request budgets per minute, DataStore storage, MemoryStore memory.
*WorldsDataApi* | [**getWorldExperienceDatastoreEntry**](docs/Api/WorldsDataApi.md#getworldexperiencedatastoreentry) | **GET** /v1/worlds/experiences/{experienceId}/datastores/{store}/entries/{key} | The current value of a key: version (ETag \&quot;v&lt;n&gt;\&quot;), userIds and attributes.
*WorldsDataApi* | [**getWorldExperienceDatastoreEntryVersion**](docs/Api/WorldsDataApi.md#getworldexperiencedatastoreentryversion) | **GET** /v1/worlds/experiences/{experienceId}/datastores/{store}/entries/{key}/versions/{version} | One version of a key, including a removed one.
*WorldsDataApi* | [**getWorldExperienceMemoryMap**](docs/Api/WorldsDataApi.md#getworldexperiencememorymap) | **GET** /v1/worlds/experiences/{experienceId}/memory/maps/{map} | Items of a MemoryStore hash map (cursor-paged, unordered).
*WorldsDataApi* | [**getWorldExperienceMemoryMapByKey**](docs/Api/WorldsDataApi.md#getworldexperiencememorymapbykey) | **GET** /v1/worlds/experiences/{experienceId}/memory/maps/{map}/{key} | One MemoryStore hash map item with its version and expiry.
*WorldsDataApi* | [**getWorldExperienceMemoryQueue**](docs/Api/WorldsDataApi.md#getworldexperiencememoryqueue) | **GET** /v1/worlds/experiences/{experienceId}/memory/queues/{queue} | Queue length (visible, in flight) and the head, without hiding anything.
*WorldsDataApi* | [**getWorldExperienceMemorySorted**](docs/Api/WorldsDataApi.md#getworldexperiencememorysorted) | **GET** /v1/worlds/experiences/{experienceId}/memory/sorted/{map} | A MemoryStore sorted map in order (sortKey, then key); ?order&#x3D;&amp;cursor&#x3D;&amp;limit&#x3D;.
*WorldsDataApi* | [**getWorldExperienceMemorySortedByKey**](docs/Api/WorldsDataApi.md#getworldexperiencememorysortedbykey) | **GET** /v1/worlds/experiences/{experienceId}/memory/sorted/{map}/{key} | One sorted map item.
*WorldsDataApi* | [**getWorldExperienceOrdered**](docs/Api/WorldsDataApi.md#getworldexperienceordered) | **GET** /v1/worlds/experiences/{experienceId}/ordered/{store} | An OrderedStore page ranked by value; ?order&#x3D;desc|asc&amp;min&#x3D;&amp;max&#x3D;&amp;cursor&#x3D;&amp;limit&#x3D;.
*WorldsDataApi* | [**getWorldExperienceOrderedEntry**](docs/Api/WorldsDataApi.md#getworldexperienceorderedentry) | **GET** /v1/worlds/experiences/{experienceId}/ordered/{store}/entries/{key} | One OrderedStore entry.
*WorldsDataApi* | [**listWorldExperienceDatastoreEntries**](docs/Api/WorldsDataApi.md#listworldexperiencedatastoreentries) | **GET** /v1/worlds/experiences/{experienceId}/datastores/{store}/entries | Keys of a DataStore in key order; ?prefix&#x3D;&amp;scope&#x3D;&amp;cursor&#x3D;&amp;limit&#x3D;.
*WorldsDataApi* | [**listWorldExperienceDatastoreEntryVersions**](docs/Api/WorldsDataApi.md#listworldexperiencedatastoreentryversions) | **GET** /v1/worlds/experiences/{experienceId}/datastores/{store}/entries/{key}/versions | Versions of a key, newest first (30-day history; the current version is kept).
*WorldsDataApi* | [**listWorldExperienceDatastores**](docs/Api/WorldsDataApi.md#listworldexperiencedatastores) | **GET** /v1/worlds/experiences/{experienceId}/datastores | The DataStores of an experience, with key counts and bytes.
*WorldsDataApi* | [**updateWorldExperienceDatastoreEntry**](docs/Api/WorldsDataApi.md#updateworldexperiencedatastoreentry) | **PUT** /v1/worlds/experiences/{experienceId}/datastores/{store}/entries/{key} | Write a new version. If-Match \&quot;v&lt;n&gt;\&quot; (or ifVersion) writes only at that version; If-None-Match: * only if absent. 412 on a mismatch.
*WorldsDataApi* | [**updateWorldExperienceMemoryMap**](docs/Api/WorldsDataApi.md#updateworldexperiencememorymap) | **PUT** /v1/worlds/experiences/{experienceId}/memory/maps/{map}/{key} | Set a hash map item (ttlSeconds required; ifVersion for compare-and-set).
*WorldsDataApi* | [**updateWorldExperienceMemorySorted**](docs/Api/WorldsDataApi.md#updateworldexperiencememorysorted) | **PUT** /v1/worlds/experiences/{experienceId}/memory/sorted/{map}/{key} | Set a sorted map item (ttlSeconds, optional sortKey and ifVersion).
*WorldsDataApi* | [**updateWorldExperienceOrderedEntry**](docs/Api/WorldsDataApi.md#updateworldexperienceorderedentry) | **PUT** /v1/worlds/experiences/{experienceId}/ordered/{store}/entries/{key} | Set an OrderedStore entry to a whole number.
*WorldsEngagementApi* | [**createWorldExperienceExperienceEvent**](docs/Api/WorldsEngagementApi.md#createworldexperienceexperienceevent) | **POST** /v1/worlds/experiences/{experienceId}/experience-events | Schedule an Experience Event shown on the game&#39;s card: title, description, start/end (5 min–14 days, ≤ 180 days ahead), thumbnail, place. With liveEventId it follows that live-ops event&#39;s schedule.
*WorldsEngagementApi* | [**createWorldExperienceExperienceEventCancel**](docs/Api/WorldsEngagementApi.md#createworldexperienceexperienceeventcancel) | **POST** /v1/worlds/experiences/{experienceId}/experience-events/{eventId}/cancel | Cancel an event (it disappears from the game&#39;s card; no reminder goes out).
*WorldsEngagementApi* | [**createWorldExperienceExperienceEventRsvp**](docs/Api/WorldsEngagementApi.md#createworldexperienceexperienceeventrsvp) | **POST** /v1/worlds/experiences/{experienceId}/experience-events/{eventId}/rsvp | RSVP (going: true) or take it back. remind: true also turns the experience&#39;s notifications on, so the 15-minute reminder can reach you.
*WorldsEngagementApi* | [**createWorldExperienceNotification**](docs/Api/WorldsEngagementApi.md#createworldexperiencenotification) | **POST** /v1/worlds/experiences/{experienceId}/notifications | Send an approved template to one player (sub) or up to 100 (subs). Only players who turned notifications on, 13+, not banned, at most 2 a day per player and outside their quiet hours receive it; every other send is logged as suppressed with its reason.
*WorldsEngagementApi* | [**createWorldExperienceNotificationTemplateRetire**](docs/Api/WorldsEngagementApi.md#createworldexperiencenotificationtemplateretire) | **POST** /v1/worlds/experiences/{experienceId}/notification-templates/{key}/retire | Retire a template: sends by its key stop.
*WorldsEngagementApi* | [**getWorldExperienceNotificationOptIn**](docs/Api/WorldsEngagementApi.md#getworldexperiencenotificationoptin) | **GET** /v1/worlds/experiences/{experienceId}/notifications/opt-in | Whether you turned this experience&#39;s notifications on.
*WorldsEngagementApi* | [**getWorldExperienceNotificationReport**](docs/Api/WorldsEngagementApi.md#getworldexperiencenotificationreport) | **GET** /v1/worlds/experiences/{experienceId}/notifications/report | Sends over the last N days (default 7, max 90): delivered, suppressed by reason, per template, and how many players turned notifications on.
*WorldsEngagementApi* | [**listWorldExperienceEventUpcoming**](docs/Api/WorldsEngagementApi.md#listworldexperienceeventupcoming) | **GET** /v1/worlds/experience-events/upcoming | Events across public experiences in the next 7 days (and live now), soonest first — the Carnival Plaza&#39;s \&quot;Coming up\&quot; board.
*WorldsEngagementApi* | [**listWorldExperienceExperienceEventUpcoming**](docs/Api/WorldsEngagementApi.md#listworldexperienceexperienceeventupcoming) | **GET** /v1/worlds/experiences/{experienceId}/experience-events/upcoming | An experience&#39;s upcoming and live events as players see them, with whether you are going.
*WorldsEngagementApi* | [**listWorldExperienceExperienceEvents**](docs/Api/WorldsEngagementApi.md#listworldexperienceexperienceevents) | **GET** /v1/worlds/experiences/{experienceId}/experience-events | Your scheduled Experience Events (upcoming, live and the last 30 days) with RSVP counts.
*WorldsEngagementApi* | [**listWorldExperienceNotificationTemplates**](docs/Api/WorldsEngagementApi.md#listworldexperiencenotificationtemplates) | **GET** /v1/worlds/experiences/{experienceId}/notification-templates | Notification templates: key, title and body with {placeholders}, review status (approved ones can be sent).
*WorldsEngagementApi* | [**listWorldMeExperienceEvents**](docs/Api/WorldsEngagementApi.md#listworldmeexperienceevents) | **GET** /v1/worlds/me/experience-events | Events you are going to that have not ended.
*WorldsEngagementApi* | [**listWorldMeNotificationOptIns**](docs/Api/WorldsEngagementApi.md#listworldmenotificationoptins) | **GET** /v1/worlds/me/notification-opt-ins | Every experience whose notifications you turned on.
*WorldsEngagementApi* | [**updateWorldExperienceExperienceEvent**](docs/Api/WorldsEngagementApi.md#updateworldexperienceexperienceevent) | **PATCH** /v1/worlds/experiences/{experienceId}/experience-events/{eventId} | Change an event. A started event keeps its start; a new start time earns RSVPs a new reminder.
*WorldsEngagementApi* | [**updateWorldExperienceNotificationOptIn**](docs/Api/WorldsEngagementApi.md#updateworldexperiencenotificationoptin) | **PUT** /v1/worlds/experiences/{experienceId}/notifications/opt-in | Turn this experience&#39;s notifications on or off for you. timeZone (IANA) keeps them out of your night.
*WorldsEngagementApi* | [**updateWorldExperienceNotificationTemplate**](docs/Api/WorldsEngagementApi.md#updateworldexperiencenotificationtemplate) | **PUT** /v1/worlds/experiences/{experienceId}/notification-templates/{key} | Create or reword a template. Clean words with no link are approved at once; anything the text filter flags, or any link, waits for Crossly review (24 h). Rewording re-reviews.
*WorldsGalleryApi* | [**createWorldExperienceGallery**](docs/Api/WorldsGalleryApi.md#createworldexperiencegallery) | **POST** /v1/worlds/experiences/{experienceId}/gallery | Add an uploaded screenshot or video (your own upload&#39;s publicUrl; a video may carry a poster image). Images are scanned at once; every item waits for a person and shows on the game&#39;s page once approved.
*WorldsGalleryApi* | [**createWorldExperienceGalleryUploadUrl**](docs/Api/WorldsGalleryApi.md#createworldexperiencegalleryuploadurl) | **POST** /v1/worlds/experiences/{experienceId}/gallery/upload-url | A presigned upload for a gallery screenshot (JPEG/PNG/WebP/GIF, ≤ 10 MB) or video (MP4/QuickTime/WebM): PUT the file to uploadUrl with the same Content-Type and exact Content-Length, then add publicUrl to the gallery.
*WorldsGalleryApi* | [**deleteWorldExperienceGallery**](docs/Api/WorldsGalleryApi.md#deleteworldexperiencegallery) | **DELETE** /v1/worlds/experiences/{experienceId}/gallery/{mediaId} | Take an item off the game&#39;s page now.
*WorldsGalleryApi* | [**getWorldExperienceGallery**](docs/Api/WorldsGalleryApi.md#getworldexperiencegallery) | **GET** /v1/worlds/experiences/{experienceId}/gallery | The game&#39;s gallery: every screenshot and video with its review state (pending / approved / rejected with the reviewer&#39;s note), position and caption, plus the limits.
*WorldsGalleryApi* | [**updateWorldExperienceGallery**](docs/Api/WorldsGalleryApi.md#updateworldexperiencegallery) | **PATCH** /v1/worlds/experiences/{experienceId}/gallery/{mediaId} | Change an item&#39;s caption (filtered; an approved item with a new caption goes back to review).
*WorldsGalleryApi* | [**updateWorldExperienceGalleryOrder**](docs/Api/WorldsGalleryApi.md#updateworldexperiencegalleryorder) | **PUT** /v1/worlds/experiences/{experienceId}/gallery/order | Set the order on the game&#39;s page: the ids you list first, the rest after in their current order.
*WorldsGalleryApi* | [**updateWorldExperienceGalleryRole**](docs/Api/WorldsGalleryApi.md#updateworldexperiencegalleryrole) | **PUT** /v1/worlds/experiences/{experienceId}/gallery/{mediaId}/role | Make an item the game&#39;s icon or thumbnail (an image), its trailer (a video), or put it back in the gallery. The previous holder of that role goes back to the gallery.
*WorldsGalleryApi* | [**updateWorldExperienceGalleryTrailerUrl**](docs/Api/WorldsGalleryApi.md#updateworldexperiencegallerytrailerurl) | **PUT** /v1/worlds/experiences/{experienceId}/gallery/trailer-url | Set the game&#39;s trailer to a YouTube or Vimeo video link (https; youtube.com, youtu.be, vimeo.com, player.vimeo.com only; any other host is 400 trailer_host_not_allowed). It waits for a person like any gallery item; the current trailer goes back to the gallery (an uploaded clip) or off the page (a link).
*WorldsHttpApi* | [**createWorldExperienceHttpDomain**](docs/Api/WorldsHttpApi.md#createworldexperiencehttpdomain) | **POST** /v1/worlds/experiences/{experienceId}/http/domains | Declare a domain server scripts may call (example.com or *.example.com). It is reviewed by a person before it works.
*WorldsHttpApi* | [**deleteWorldExperienceHttpDomain**](docs/Api/WorldsHttpApi.md#deleteworldexperiencehttpdomain) | **DELETE** /v1/worlds/experiences/{experienceId}/http/domains/{domainId} | Remove a domain: scripts lose access at once.
*WorldsHttpApi* | [**deleteWorldExperienceHttpSecret**](docs/Api/WorldsHttpApi.md#deleteworldexperiencehttpsecret) | **DELETE** /v1/worlds/experiences/{experienceId}/http/secrets/{name} | Delete a secret.
*WorldsHttpApi* | [**getWorldExperienceHttp**](docs/Api/WorldsHttpApi.md#getworldexperiencehttp) | **GET** /v1/worlds/experiences/{experienceId}/http | Http settings: declared domains with their review state, secret names (never values), limits and rules.
*WorldsHttpApi* | [**updateWorldExperienceHttpSecret**](docs/Api/WorldsHttpApi.md#updateworldexperiencehttpsecret) | **PUT** /v1/worlds/experiences/{experienceId}/http/secrets/{name} | Set a secret (UPPER_SNAKE name). Scripts reference it as Http.secret(\&quot;NAME\&quot;); the value is never returned.
*WorldsMoneyApi* | [**createWorldEarningPayoutAccountOnboard**](docs/Api/WorldsMoneyApi.md#createworldearningpayoutaccountonboard) | **POST** /v1/worlds/earnings/payout-account/onboard | Start or resume Stripe onboarding for your creator payout account. Returns a one-time Stripe URL. Body: { country? } (fixed once the account exists).
*WorldsMoneyApi* | [**createWorldExperienceDropTable**](docs/Api/WorldsMoneyApi.md#createworldexperiencedroptable) | **POST** /v1/worlds/experiences/{experienceId}/drop-tables | Declare a drop table for a paid random item: cosmetic or in-experience outcomes only. Crossly pre-simulates and hashes it.
*WorldsMoneyApi* | [**createWorldExperienceProduct**](docs/Api/WorldsMoneyApi.md#createworldexperienceproduct) | **POST** /v1/worlds/experiences/{experienceId}/products | Create a product: price 50-100,000 cents (a private server may be free), optional per-country prices. Paid random items need an approved drop table and are never tradeable.
*WorldsMoneyApi* | [**createWorldExperienceProductArchive**](docs/Api/WorldsMoneyApi.md#createworldexperienceproductarchive) | **POST** /v1/worlds/experiences/{experienceId}/products/{productId}/archive | Take a product off sale for good. Owned passes and running subscriptions keep working.
*WorldsMoneyApi* | [**createWorldExperiencePurchase**](docs/Api/WorldsMoneyApi.md#createworldexperiencepurchase) | **POST** /v1/worlds/experiences/{experienceId}/purchases | Open a purchase sheet for a product (paid access, a pass…). Returns checkoutPath: the player pays only in the Crossly checkout.
*WorldsMoneyApi* | [**createWorldExperienceReceiptAck**](docs/Api/WorldsMoneyApi.md#createworldexperiencereceiptack) | **POST** /v1/worlds/experiences/{experienceId}/receipts/{orderId}/ack | Acknowledge a grant your back-end made off-server. Idempotent: a second ack reports duplicate.
*WorldsMoneyApi* | [**createWorldMeReceiptRefund**](docs/Api/WorldsMoneyApi.md#createworldmereceiptrefund) | **POST** /v1/worlds/me/receipts/{receiptId}/refund | Refund a developer product bought by mistake: within the self-refund window and before the experience granted it.
*WorldsMoneyApi* | [**createWorldMeSubscriptionCancel**](docs/Api/WorldsMoneyApi.md#createworldmesubscriptioncancel) | **POST** /v1/worlds/me/subscriptions/{id}/cancel | Cancel: no more charges; the benefit lasts to the end of the paid month.
*WorldsMoneyApi* | [**createWorldMeSubscriptionPrivateServerCode**](docs/Api/WorldsMoneyApi.md#createworldmesubscriptionprivateservercode) | **POST** /v1/worlds/me/subscriptions/{id}/private-server-code | A fresh access code for your private server (the previous one stops working). Join with reservedCode.
*WorldsMoneyApi* | [**createWorldPurchaseCancel**](docs/Api/WorldsMoneyApi.md#createworldpurchasecancel) | **POST** /v1/worlds/purchases/{intentId}/cancel | Cancel an unpaid purchase sheet.
*WorldsMoneyApi* | [**getWorldEarning**](docs/Api/WorldsMoneyApi.md#getworldearning) | **GET** /v1/worlds/earnings | Your Crossly Carnival earnings: pending, available, held, paid; next payout; what cashing out still needs.
*WorldsMoneyApi* | [**getWorldEarningPayoutAccount**](docs/Api/WorldsMoneyApi.md#getworldearningpayoutaccount) | **GET** /v1/worlds/earnings/payout-account | Your creator payout account (your own, separate from any store payout account): not_started, pending, restricted, active or payouts_unavailable.
*WorldsMoneyApi* | [**getWorldEconomy**](docs/Api/WorldsMoneyApi.md#getworldeconomy) | **GET** /v1/worlds/economy | The published payout formula: splits, thresholds, scheduled changes (90-day notice) and guarantees.
*WorldsMoneyApi* | [**getWorldExperienceRevenue**](docs/Api/WorldsMoneyApi.md#getworldexperiencerevenue) | **GET** /v1/worlds/experiences/{experienceId}/revenue | Gross, tax, refunds, chargebacks, net and your share per product, plus pending / available / paid.
*WorldsMoneyApi* | [**getWorldExperienceStore**](docs/Api/WorldsMoneyApi.md#getworldexperiencestore) | **GET** /v1/worlds/experiences/{experienceId}/store | An experience&#39;s store as you see it: your regional price, odds for paid random items, what you own.
*WorldsMoneyApi* | [**getWorldPurchase**](docs/Api/WorldsMoneyApi.md#getworldpurchase) | **GET** /v1/worlds/purchases/{intentId} | A purchase sheet: item, price, tax, total, odds, status.
*WorldsMoneyApi* | [**listWorldEarningAffiliate**](docs/Api/WorldsMoneyApi.md#listworldearningaffiliate) | **GET** /v1/worlds/earnings/affiliate | Real-goods orders attributed to your games: the fee, your 20% share, and whether it is posted.
*WorldsMoneyApi* | [**listWorldEarningLedger**](docs/Api/WorldsMoneyApi.md#listworldearningledger) | **GET** /v1/worlds/earnings/ledger | Your creator ledger, newest first: every earning and reversal. Cursor-paged.
*WorldsMoneyApi* | [**listWorldEarningPayouts**](docs/Api/WorldsMoneyApi.md#listworldearningpayouts) | **GET** /v1/worlds/earnings/payouts | Your monthly Crossly Carnival payouts.
*WorldsMoneyApi* | [**listWorldExperienceDropTables**](docs/Api/WorldsMoneyApi.md#listworldexperiencedroptables) | **GET** /v1/worlds/experiences/{experienceId}/drop-tables | Declared drop tables with their odds, simulation (10^6 draws) and hash.
*WorldsMoneyApi* | [**listWorldExperienceProducts**](docs/Api/WorldsMoneyApi.md#listworldexperienceproducts) | **GET** /v1/worlds/experiences/{experienceId}/products | What an experience sells: passes, developer products, subscriptions, private servers, paid access (?includeArchived&#x3D;true).
*WorldsMoneyApi* | [**listWorldExperienceReceipts**](docs/Api/WorldsMoneyApi.md#listworldexperiencereceipts) | **GET** /v1/worlds/experiences/{experienceId}/receipts | Every purchase: orderId, sub, product, price, net, state (paid/delivered/granted/refunded/revoked). Cursor-paged; ?since&#x3D;.
*WorldsMoneyApi* | [**listWorldMeSubscriptions**](docs/Api/WorldsMoneyApi.md#listworldmesubscriptions) | **GET** /v1/worlds/me/subscriptions | Your experience subscriptions and private servers.
*WorldsMoneyApi* | [**updateWorldExperienceProduct**](docs/Api/WorldsMoneyApi.md#updateworldexperienceproduct) | **PATCH** /v1/worlds/experiences/{experienceId}/products/{productId} | Edit a product: name, description, icon, price, regional prices, hourly limit, on/off sale. Kind and place never change.
*WorldsPackagesApi* | [**createWorldExperiencePlacePackage**](docs/Api/WorldsPackagesApi.md#createworldexperienceplacepackage) | **POST** /v1/worlds/experiences/{experienceId}/places/{placeId}/packages | Insert a copy of a package (default: the newest version, auto-update on).
*WorldsPackagesApi* | [**createWorldExperiencePlacePackageUpdate**](docs/Api/WorldsPackagesApi.md#createworldexperienceplacepackageupdate) | **POST** /v1/worlds/experiences/{experienceId}/places/{placeId}/packages/{nodeId}/update | Update a copy to a version (default newest). A copy edited in the place needs force: true (its edits are replaced).
*WorldsPackagesApi* | [**createWorldPackage**](docs/Api/WorldsPackagesApi.md#createworldpackage) | **POST** /v1/worlds/packages | Create a package (v1) from one node (place JSON) or from a node in a place — which then becomes copy v1, auto-updating.
*WorldsPackagesApi* | [**createWorldPackageToolbox**](docs/Api/WorldsPackagesApi.md#createworldpackagetoolbox) | **POST** /v1/worlds/packages/{packageId}/toolbox | List the latest version in the Toolbox as an asset of kind package (Toolbox review and pricing rules apply).
*WorldsPackagesApi* | [**createWorldPackageVersion**](docs/Api/WorldsPackagesApi.md#createworldpackageversion) | **POST** /v1/worlds/packages/{packageId}/versions | Publish a new version; every auto-updating, unmodified copy in your places is updated through its co-editing session. Returns what happened per place.
*WorldsPackagesApi* | [**deleteWorldPackage**](docs/Api/WorldsPackagesApi.md#deleteworldpackage) | **DELETE** /v1/worlds/packages/{packageId} | Archive a package. Copies in places keep working; they just stop receiving updates.
*WorldsPackagesApi* | [**getWorldPackage**](docs/Api/WorldsPackagesApi.md#getworldpackage) | **GET** /v1/worlds/packages/{packageId} | A package with its versions.
*WorldsPackagesApi* | [**getWorldPackageVersion**](docs/Api/WorldsPackagesApi.md#getworldpackageversion) | **GET** /v1/worlds/packages/{packageId}/versions/{number} | One version, with its payload (one root node in place JSON).
*WorldsPackagesApi* | [**listWorldExperiencePlacePackages**](docs/Api/WorldsPackagesApi.md#listworldexperienceplacepackages) | **GET** /v1/worlds/experiences/{experienceId}/places/{placeId}/packages | Package copies in a place: version, newest version, modified, auto-update.
*WorldsPackagesApi* | [**listWorldPackages**](docs/Api/WorldsPackagesApi.md#listworldpackages) | **GET** /v1/worlds/packages | Your package library: reusable models and modules, newest first, with how many places hold copies.
*WorldsPackagesApi* | [**updateWorldExperiencePlacePackage**](docs/Api/WorldsPackagesApi.md#updateworldexperienceplacepackage) | **PATCH** /v1/worlds/experiences/{experienceId}/places/{placeId}/packages/{nodeId} | Turn auto-update on or off for one copy.
*WorldsPackagesApi* | [**updateWorldPackage**](docs/Api/WorldsPackagesApi.md#updateworldpackage) | **PATCH** /v1/worlds/packages/{packageId} | Rename a package or change its description.
*WorldsRewardsApi* | [**createWorldExperienceRewardClose**](docs/Api/WorldsRewardsApi.md#createworldexperiencerewardclose) | **POST** /v1/worlds/experiences/{experienceId}/rewards/close | Close the pool: the unspent balance returns to your Crossly Carnival earnings. Free rewards keep working.
*WorldsRewardsApi* | [**createWorldExperienceRewardDefinition**](docs/Api/WorldsRewardsApi.md#createworldexperiencerewarddefinition) | **POST** /v1/worlds/experiences/{experienceId}/rewards/definitions | Add a reward scripts can grant: pin, emote, decor, item (your own COSM design), cosm or cbx (with an amount).
*WorldsRewardsApi* | [**createWorldExperienceRewardDeposit**](docs/Api/WorldsRewardsApi.md#createworldexperiencerewarddeposit) | **POST** /v1/worlds/experiences/{experienceId}/rewards/deposits | Move available Crossly Carnival earnings into the pool ($1-$10,000). Owner only; idempotent on idempotencyKey.
*WorldsRewardsApi* | [**createWorldExperienceRewardTopup**](docs/Api/WorldsRewardsApi.md#createworldexperiencerewardtopup) | **POST** /v1/worlds/experiences/{experienceId}/rewards/topups | Open a card top-up ($5-$10,000 into the pool; the 2.9% + 30¢ card fee is added on top). Returns checkoutUrl, where the owner pays with Crossly checkout; the pool is credited once when the payment lands. Owner only.
*WorldsRewardsApi* | [**createWorldRewardTopupCancel**](docs/Api/WorldsRewardsApi.md#createworldrewardtopupcancel) | **POST** /v1/worlds/rewards/topups/{topupId}/cancel | Cancel an unpaid top-up sheet.
*WorldsRewardsApi* | [**getWorldExperienceReward**](docs/Api/WorldsRewardsApi.md#getworldexperiencereward) | **GET** /v1/worlds/experiences/{experienceId}/rewards | The funded reward pool: balance, reserved (owed) value, caps, today&#39;s grants, the reward catalogue and the published rates.
*WorldsRewardsApi* | [**getWorldRewardTopup**](docs/Api/WorldsRewardsApi.md#getworldrewardtopup) | **GET** /v1/worlds/rewards/topups/{topupId} | One card top-up: its status (open, paying, paid, cancelled, expired, refused), amounts and the pool it funds.
*WorldsRewardsApi* | [**listWorldExperienceRewardGrants**](docs/Api/WorldsRewardsApi.md#listworldexperiencerewardgrants) | **GET** /v1/worlds/experiences/{experienceId}/rewards/grants | Every grant, newest first: reward, player sub, amount, cost, status. Cursor-paged; ?sub&#x3D; for one player.
*WorldsRewardsApi* | [**listWorldExperienceRewardLedger**](docs/Api/WorldsRewardsApi.md#listworldexperiencerewardledger) | **GET** /v1/worlds/experiences/{experienceId}/rewards/ledger | The pool&#39;s own ledger: deposits, grant draw-downs, refunds. Cursor-paged.
*WorldsRewardsApi* | [**listWorldExperienceRewardTopups**](docs/Api/WorldsRewardsApi.md#listworldexperiencerewardtopups) | **GET** /v1/worlds/experiences/{experienceId}/rewards/topups | Card top-ups of the reward pool, newest first: amount into the pool, card fee, status, what went back to the card.
*WorldsRewardsApi* | [**updateWorldExperienceRewardDefinition**](docs/Api/WorldsRewardsApi.md#updateworldexperiencerewarddefinition) | **PATCH** /v1/worlds/experiences/{experienceId}/rewards/definitions/{rewardId} | Edit a reward: name, description, image, amount, per-player daily cap, on/off. Key and kind never change.
*WorldsRewardsApi* | [**updateWorldExperienceRewardPool**](docs/Api/WorldsRewardsApi.md#updateworldexperiencerewardpool) | **PATCH** /v1/worlds/experiences/{experienceId}/rewards/pool | Set the pool&#39;s daily caps: total value per day, value and grant count per player per day.
*WorldsStudioApi* | [**createWorldExperienceAssetMesh**](docs/Api/WorldsStudioApi.md#createworldexperienceassetmesh) | **POST** /v1/worlds/experiences/{experienceId}/assets/meshes | Import a .glb (base64) as a MeshPart: safety parse + budgets, stored on the Crossly CDN, a phone LOD over 5k triangles, collision Box or convex Hull. Returns the asset and the MeshPart node; with placeId it is inserted into that place through its co-editing session.
*WorldsStudioApi* | [**createWorldExperienceAssetMeshCheck**](docs/Api/WorldsStudioApi.md#createworldexperienceassetmeshcheck) | **POST** /v1/worlds/experiences/{experienceId}/assets/meshes/check | Check a .glb (base64) for import without storing it: the budget report per device, plain-English errors with a fix list, whether a phone LOD will be made, mesh bounds and hull points.
*WorldsStudioApi* | [**createWorldExperiencePlaceAssistant**](docs/Api/WorldsStudioApi.md#createworldexperienceplaceassistant) | **POST** /v1/worlds/experiences/{experienceId}/places/{placeId}/assistant | Ask the Studio Assistant (mode explain | edit | build): returns an explanation and a proposed change set (scripts, inserts, edits) checked against your role and linted. Nothing is applied.
*WorldsStudioApi* | [**createWorldExperiencePlaceAssistantApply**](docs/Api/WorldsStudioApi.md#createworldexperienceplaceassistantapply) | **POST** /v1/worlds/experiences/{experienceId}/places/{placeId}/assistant/apply | Apply accepted Assistant changes to the place as one co-editing batch (activity via assistant, revertible). Re-checked against the place as it is now.
*WorldsStudioApi* | [**createWorldExperiencePlaceStudioEdit**](docs/Api/WorldsStudioApi.md#createworldexperienceplacestudioedit) | **POST** /v1/worlds/experiences/{experienceId}/places/{placeId}/studio/edits | Apply set / insert / move / delete steps by path as ONE batch through Team Create (live in every open Studio, one revertible activity entry). All-or-nothing: any bad step refuses the batch with every problem listed.
*WorldsStudioApi* | [**createWorldExperiencePlaceStudioInsertAsset**](docs/Api/WorldsStudioApi.md#createworldexperienceplacestudioinsertasset) | **POST** /v1/worlds/experiences/{experienceId}/places/{placeId}/studio/insert-asset | Insert a Toolbox asset under a path (default Workspace; ServerScripts for scripts). Paid assets need the experience owner&#39;s licence.
*WorldsStudioApi* | [**createWorldExperiencePlaceStudioPlaytest**](docs/Api/WorldsStudioApi.md#createworldexperienceplacestudioplaytest) | **POST** /v1/worlds/experiences/{experienceId}/places/{placeId}/studio/playtest | Cloud test: flush the session, freeze a private test version and start a fleet server for it. 201 ready (ticket) or 202 starting; outputCursor reads only this test&#39;s Output.
*WorldsStudioApi* | [**createWorldExperiencePlaceStudioPlaytestStop**](docs/Api/WorldsStudioApi.md#createworldexperienceplacestudioplayteststop) | **POST** /v1/worlds/experiences/{experienceId}/places/{placeId}/studio/playtest/stop | Stop this place&#39;s cloud-test servers now.
*WorldsStudioApi* | [**createWorldExperiencePlaceStudioPublish**](docs/Api/WorldsStudioApi.md#createworldexperienceplacestudiopublish) | **POST** /v1/worlds/experiences/{experienceId}/places/{placeId}/studio/publish | Prepare a publish from the live session: checks, details, rating answers, access. Never submits and never acknowledges the money review — the person does (or submit_worlds_publish).
*WorldsStudioApi* | [**createWorldExperiencePlaceStudioScriptCommit**](docs/Api/WorldsStudioApi.md#createworldexperienceplacestudioscriptcommit) | **POST** /v1/worlds/experiences/{experienceId}/places/{placeId}/studio/script/commit | Commit your draft with a three-way merge onto the script as it is now (collaborators&#39; edits kept). 409 merge_conflict carries merged text with conflict blocks and theirs.
*WorldsStudioApi* | [**deleteWorldExperiencePlaceStudioScript**](docs/Api/WorldsStudioApi.md#deleteworldexperienceplacestudioscript) | **DELETE** /v1/worlds/experiences/{experienceId}/places/{placeId}/studio/script | Discard your draft of a script.
*WorldsStudioApi* | [**getWorldAssistantStatus**](docs/Api/WorldsStudioApi.md#getworldassistantstatus) | **GET** /v1/worlds/assistant/status | Studio Assistant status: whether Crossly&#39;s model key is configured, whether you have your own AI key, and your plan allowance (asks left today, budget left this month).
*WorldsStudioApi* | [**getWorldExperiencePlaceStudioFind**](docs/Api/WorldsStudioApi.md#getworldexperienceplacestudiofind) | **GET** /v1/worlds/experiences/{experienceId}/places/{placeId}/studio/find | Find instances by name (contains), exact class and/or tag.
*WorldsStudioApi* | [**getWorldExperiencePlaceStudioInstance**](docs/Api/WorldsStudioApi.md#getworldexperienceplacestudioinstance) | **GET** /v1/worlds/experiences/{experienceId}/places/{placeId}/studio/instance | One instance by path (or session id): class, properties, attributes, tags, children. Script source is read with …/studio/script.
*WorldsStudioApi* | [**getWorldExperiencePlaceStudioOutput**](docs/Api/WorldsStudioApi.md#getworldexperienceplacestudiooutput) | **GET** /v1/worlds/experiences/{experienceId}/places/{placeId}/studio/output | Server Output (print, warnings, errors) after a cursor: every line of cloud tests, errors of live servers (scope&#x3D;all). Kept 24 hours.
*WorldsStudioApi* | [**getWorldExperiencePlaceStudioProblem**](docs/Api/WorldsStudioApi.md#getworldexperienceplacestudioproblem) | **GET** /v1/worlds/experiences/{experienceId}/places/{placeId}/studio/problems | The publish checks on the place as the live session holds it: script lint, budgets per device, settings, shop listings, Toolbox licences. publishable &#x3D; no errors.
*WorldsStudioApi* | [**getWorldExperiencePlaceStudioScript**](docs/Api/WorldsStudioApi.md#getworldexperienceplacestudioscript) | **GET** /v1/worlds/experiences/{experienceId}/places/{placeId}/studio/script | A script&#39;s current source, your draft of it (if any, with whether someone committed since) and the lint of each.
*WorldsStudioApi* | [**getWorldExperiencePlaceStudioSnapshot**](docs/Api/WorldsStudioApi.md#getworldexperienceplacestudiosnapshot) | **GET** /v1/worlds/experiences/{experienceId}/places/{placeId}/studio/snapshot | A plan (top) or front drawing of the parts under a path as SVG, with bounds, spawns and unanchored parts that will fall.
*WorldsStudioApi* | [**getWorldExperiencePlaceStudioTree**](docs/Api/WorldsStudioApi.md#getworldexperienceplacestudiotree) | **GET** /v1/worlds/experiences/{experienceId}/places/{placeId}/studio/tree | The live instance tree (what every open Studio shows) by dotted path, depth levels down (default 3, max 12).
*WorldsStudioApi* | [**getWorldStudioClass**](docs/Api/WorldsStudioApi.md#getworldstudioclass) | **GET** /v1/worlds/studio/classes | The engine&#39;s class table: insertable classes, services, and for ?name&#x3D; one class with every property, its type, default and the exact JSON a place (and a studio edit) takes.
*WorldsStudioApi* | [**listWorldExperienceAssets**](docs/Api/WorldsStudioApi.md#listworldexperienceassets) | **GET** /v1/worlds/experiences/{experienceId}/assets | Meshes imported into this experience, newest first: paths, phone LOD, bounds, hull size, budget report, moderation (pending until a reviewed publish uses them) and a URL you can load now.
*WorldsStudioApi* | [**updateWorldExperiencePlaceStudioScript**](docs/Api/WorldsStudioApi.md#updateworldexperienceplacestudioscript) | **PUT** /v1/worlds/experiences/{experienceId}/places/{placeId}/studio/script | Save your draft of a script (the place does not change until you commit). Returns lint and the diff from the current source.
*WorldsTeamApi* | [**createWorldCollaborationAccept**](docs/Api/WorldsTeamApi.md#createworldcollaborationaccept) | **POST** /v1/worlds/collaborations/{experienceId}/accept | Accept an invitation.
*WorldsTeamApi* | [**createWorldCollaborationDecline**](docs/Api/WorldsTeamApi.md#createworldcollaborationdecline) | **POST** /v1/worlds/collaborations/{experienceId}/decline | Decline an invitation.
*WorldsTeamApi* | [**createWorldExperienceActivityRevert**](docs/Api/WorldsTeamApi.md#createworldexperienceactivityrevert) | **POST** /v1/worlds/experiences/{experienceId}/activity/{activityId}/revert | Revert an instance change: its undo is applied as a new edit by you; anything changed since by others is left alone.
*WorldsTeamApi* | [**createWorldExperienceCollaborator**](docs/Api/WorldsTeamApi.md#createworldexperiencecollaborator) | **POST** /v1/worlds/experiences/{experienceId}/collaborators | Invite a Crossly handle with a role. Owner or admin; only the owner makes admins. Counts against the owner&#39;s plan cap.
*WorldsTeamApi* | [**createWorldExperiencePlaceCollabOp**](docs/Api/WorldsTeamApi.md#createworldexperienceplacecollabop) | **POST** /v1/worlds/experiences/{experienceId}/places/{placeId}/collab/ops | Apply a batch of ops (insert, delete, move, prop, attr, name, tags, world) in server order. Each op is checked against your role; a retried batch id is answered, not re-applied.
*WorldsTeamApi* | [**createWorldExperiencePlaceCollabSave**](docs/Api/WorldsTeamApi.md#createworldexperienceplacecollabsave) | **POST** /v1/worlds/experiences/{experienceId}/places/{placeId}/collab/save | Write the session into the place draft now (publishing and cloud tests do this themselves).
*WorldsTeamApi* | [**createWorldExperiencePlaceCollabScriptCommit**](docs/Api/WorldsTeamApi.md#createworldexperienceplacecollabscriptcommit) | **POST** /v1/worlds/experiences/{experienceId}/places/{placeId}/collab/scripts/{nodeId}/commit | Commit your draft with a three-way merge. 409 merge_conflict carries the merged text with conflict blocks and the current source.
*WorldsTeamApi* | [**deleteWorldExperienceCollaborator**](docs/Api/WorldsTeamApi.md#deleteworldexperiencecollaborator) | **DELETE** /v1/worlds/experiences/{experienceId}/collaborators/{userId} | Remove a collaborator, or leave (your own user id). Their revenue share returns to the owner from next month.
*WorldsTeamApi* | [**deleteWorldExperiencePlaceCollabScript**](docs/Api/WorldsTeamApi.md#deleteworldexperienceplacecollabscript) | **DELETE** /v1/worlds/experiences/{experienceId}/places/{placeId}/collab/scripts/{nodeId} | Discard your draft of a script.
*WorldsTeamApi* | [**getWorldExperiencePlaceCollab**](docs/Api/WorldsTeamApi.md#getworldexperienceplacecollab) | **GET** /v1/worlds/experiences/{experienceId}/places/{placeId}/collab | The live co-editing document of a place (node ids every editor shares), its op sequence and your role.
*WorldsTeamApi* | [**getWorldExperiencePlaceCollabOp**](docs/Api/WorldsTeamApi.md#getworldexperienceplacecollabop) | **GET** /v1/worlds/experiences/{experienceId}/places/{placeId}/collab/ops | Ops after a sequence number, grouped by batch. 409 resync when they are no longer kept: reload the session.
*WorldsTeamApi* | [**getWorldExperienceSplit**](docs/Api/WorldsTeamApi.md#getworldexperiencesplit) | **GET** /v1/worlds/experiences/{experienceId}/splits | Revenue split of the creator share: current, scheduled, history.
*WorldsTeamApi* | [**getWorldExperienceTeam**](docs/Api/WorldsTeamApi.md#getworldexperienceteam) | **GET** /v1/worlds/experiences/{experienceId}/team | The team: owner, collaborators with roles (owner, admin, editor, scripter, builder, tester, analyst), your role and permissions, the plan cap.
*WorldsTeamApi* | [**listWorldCollaborations**](docs/Api/WorldsTeamApi.md#listworldcollaborations) | **GET** /v1/worlds/collaborations | Experiences you are invited to or work on, with your role.
*WorldsTeamApi* | [**listWorldExperienceActivity**](docs/Api/WorldsTeamApi.md#listworldexperienceactivity) | **GET** /v1/worlds/experiences/{experienceId}/activity | Activity history, newest first: who changed what, when, from where (studio, api, mcp, cli); instance changes are revertible.
*WorldsTeamApi* | [**listWorldExperiencePlaceCollabScripts**](docs/Api/WorldsTeamApi.md#listworldexperienceplacecollabscripts) | **GET** /v1/worlds/experiences/{experienceId}/places/{placeId}/collab/scripts | Your script drafts in this place, with whether someone committed since you started.
*WorldsTeamApi* | [**updateWorldExperienceCollaborator**](docs/Api/WorldsTeamApi.md#updateworldexperiencecollaborator) | **PATCH** /v1/worlds/experiences/{experienceId}/collaborators/{userId} | Change a collaborator&#39;s role.
*WorldsTeamApi* | [**updateWorldExperiencePlaceCollabScript**](docs/Api/WorldsTeamApi.md#updateworldexperienceplacecollabscript) | **PUT** /v1/worlds/experiences/{experienceId}/places/{placeId}/collab/scripts/{nodeId} | Save your own draft of a script (needs edit scripts).
*WorldsTeamApi* | [**updateWorldExperienceSplit**](docs/Api/WorldsTeamApi.md#updateworldexperiencesplit) | **PUT** /v1/worlds/experiences/{experienceId}/splits | Owner only: split the creator share (70% of net) in basis points summing to 10000. Takes effect the 1st of next month; every party is notified. The 70% total never changes.

## Models

- AccountIdLabel
- AnalyticExperimentResponse
- AnalyticExperimentResponseData
- AnalyticExperimentResponseDataArms
- AnalyticExperimentResponseDataDaily
- AnalyticExperimentResponseDataPrimary
- AnalyticExperimentResponseDataRecommendation
- AuctionRoom
- AverageCount
- AverageCount2
- BackfillStaleCatchUp
- BrandDropResponse
- CodeName
- ColourPattern
- ContractName
- CreateAccountCancelDeletionResponse
- CreateAccountIdentityVerificationStartRequest
- CreateAccountLogoutAllResponse
- CreateAccountReconfirmDeletionResponse
- CreateAccountRequestDeletionResponse
- CreateAccountResponse
- CreateActionLogExportRequest
- CreateActionLogExportRequestFilters
- CreateActionLogSearchTranslateRequest
- CreateActionLogSearchTranslateResponse
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
- CreateAutomaticDiscountPreviewResponse
- CreateAutomaticDiscountPreviewResponseData
- CreateAutomaticDiscountPreviewResponseDataLines
- CreateAutomaticDiscountResponse
- CreateAutomationRuleImportResponse
- CreateAutomationRuleImportResponseErrors
- CreateAutomationRuleRunNowResponse
- CreateAutomationRuleValidateRecipeResponse
- CreateAutomationRuleValidateRecipeResponseResults
- CreateBillingUpgradeRequest
- CreateBillingUpgradeResponse
- CreateBillingUpgradeResponseData
- CreateBookExpenseResponse
- CreateBookExpenseResponseData
- CreateBrandingDropPublishResponse
- CreateBrandingDropPublishResponseData
- CreateBrandingDropPublishResponseDataConfig
- CreateBrandingDropPublishResponseDataConfigAccess
- CreateBrandingDropPublishResponseDataConfigAccessModesItem
- CreateBrandingDropPublishResponseDataConfigFormat
- CreateBrandingDropPublishResponseDataConfigFulfilment
- CreateBrandingDropPublishResponseDataConfigLimits
- CreateBrandingDropPublishResponseDataConfigPromotion
- CreateBrandingDropPublishResponseDataConfigWhat
- CreateBrandingDropPublishResponseDataConfigWhatKindsItem
- CreateBrandingDropPublishResponseDataConfigWorld
- CreateBrandingDropResponse
- CreateBrandingDropResponseData
- CreateBrandingDropResponseDataDrop
- CreateBrandingDropResponseDataDropConfig
- CreateBrandingEventCancelResponse
- CreateBrandingEventCancelResponseData
- CreateBrandingEventCancelResponseDataWorldRef
- CreateBrandingEventCheckInResponse
- CreateBrandingEventCheckInResponseData
- CreateBrandingEventMessageResponse
- CreateBrandingEventMessageResponseData
- CreateBreakDrawResponse
- CreateBreakDrawResponseData
- CreateBreakResponse
- CreateBulkBatchIdentifyResponse
- CreateBulkBatchItemResponse
- CreateBulkBatchItemResponseCellRegion
- CreateBulkBatchItemResponseGrading
- CreateBulkBatchPublishResponse
- CreateBulkBatchPublishResponseMerged
- CreateBulkBatchPublishResponseSkipped
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
- CreateConnectionCardnexusApiKeyResponse
- CreateConnectionEmailImapResponse
- CreateConnectionEmailImapTestResponse
- CreateConnectionLightspeedXTokenRequest
- CreateConnectionLightspeedXTokenResponse
- CreateConversationMessageRequest
- CreateConversationMessageResponse
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
- CreateCreatorCardSetPublishResponse
- CreateCreatorCardSetPublishResponseData
- CreateCreatorCardSetPublishResponseDataSubmitted
- CreateCreatorCreationSubmitResponse
- CreateCreatorCreationSubmitResponseData
- CreateCreatorExperienceKeyResponse
- CreateCreatorExperienceKeyResponseData
- CreateCreatorExperienceKeyResponseN201
- CreateCreatorExperienceKeyResponseN201Data
- CreateCreatorExperienceKeyResponseN201DataKey
- CreateCreatorExperienceKeyRotateResponse
- CreateCreatorExperienceKeyRotateResponseData
- CreateCreatorExperienceKeyRotateResponseN201
- CreateCreatorExperienceKeyRotateResponseN201Data
- CreateCreatorImportCommitResponse
- CreateCreatorImportCommitResponseData
- CreateCreatorImportCommitResponseDataCreated
- CreateCreatorImportCommitResponseDataPending
- CreateCreatorItemModelCheckResponse
- CreateCreatorItemPreviewResponse
- CreateCreatorItemPreviewResponseData
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
- CreateDetectedEventEventConfirmRequest
- CreateDetectedEventEventUndoResponse
- CreateDetectedEventEventUndoResponseData
- CreateDetectedEventEventUndoResponseDataEvent
- CreateDetectedEventRulePlaceRequest
- CreateDetectedEventRulePlaceResponse
- CreateDetectedEventRulePlaceResponseData
- CreateDetectedEventRulePlaceResponseDataItems
- CreateDetectedEventRuleReorderRequest
- CreateDetectedEventRuleReorderResponse
- CreateDetectedEventRuleReorderResponseData
- CreateDetectedEventRuleReorderResponseDataCandidatePool
- CreateDetectedEventRuleReorderResponseDataCandidatePoolStatusesItem
- CreateDetectedEventRuleReorderResponseDataFilter
- CreateDetectedEventRuleReorderResponseDataFilterKindsItem
- CreateDetectedEventRuleReorderResponsePagination
- CreateDetectedEventRuleRequest
- CreateDetectedEventRuleResetDefaultRequest
- CreateDetectedEventRuleResponse
- CreateDetectedEventRuleResponseData
- CreateDetectedEventRuleResponseDataTarget
- CreateDetectedEventSimulateImpactRequest
- CreateDetectedEventSimulateImpactResponse
- CreateDetectedEventSimulateImpactResponseData
- CreateDetectedEventSimulateImpactResponseDataItems
- CreateDetectedEventSimulateImpactResponseDataItemsBefore
- CreateDetectedEventSimulateImpactResponseDataItemsRecorded
- CreateDetectedEventSimulateRequest
- CreateDetectedEventSimulateResponse
- CreateDetectedEventSimulateResponseData
- CreateDetectedEventSimulateResponseDataGuards
- CreateDetectedEventSimulateResponseDataResolution
- CreateDetectedEventSimulateResponseDataResolutionMatched
- CreateDetectedEventSimulateResponseDataResolutionShadowed
- CreateDetectedEventSimulateResponseDataResolutionTrace
- CreateDeveloperAppClientVersionResponse
- CreateDeveloperAppClientVersionResponseData
- CreateDeveloperAppConformanceRunAbortResponse
- CreateDeveloperAppConformanceRunAbortResponseData
- CreateDiscountCodeGenerateResponse
- CreateDiscountCodeGenerateResponseData
- CreateDiscountHolderResponse
- CreateDropResponse
- CreateEmailEventConfirmRequest
- CreateEmailEventConfirmResponse
- CreateEmbedKeyRequest
- CreateEmbedKeyResponse
- CreateEmbedKeyResponseData
- CreateEventPolicyDecisionConfirmResponse
- CreateEventPolicyDecisionConfirmResponseData
- CreateFieldRulePreviewResponse
- CreateFieldRulePreviewResponseData
- CreateFieldRulePreviewResponseDataFields
- CreateFieldRulePreviewResponseDataTrace
- CreateFundingApplyResponse
- CreateFundingApplyResponseData
- CreateFundingApplyResponseDataUseBreakdown
- CreateFundingDrawQuoteResponse
- CreateFundingDrawQuoteResponseData
- CreateFundingDrawRejectResponse
- CreateFundingDrawRejectResponseData
- CreateFundingDrawResponse
- CreateFundingDrawResponseData
- CreateFundingDrawUseResponse
- CreateFundingDrawUseResponseData
- CreateFundingInvoiceFileResponse
- CreateFundingInvoiceFileResponseData
- CreateFundingInvoiceFileResponseDataFile
- CreateFundingInvoiceFileResponseDataHeaders
- CreateFundingPayCrosslyFeeResponse
- CreateFundingPayCrosslyFeeResponseData
- CreateFundingPayShippingLabelResponse
- CreateFundingPayShippingLabelResponseData
- CreateFundingPayVaultFeeResponse
- CreateFundingPayVaultFeeResponseData
- CreateFundingPoolStakeResponse
- CreateFundingPoolStakeResponseData
- CreateFundingRepayResponse
- CreateFundingRepayResponseData
- CreateGamePackBreakPickResponse
- CreateGamePackBreakPickResponseData
- CreateGamePackBreakPickResponseDataCoupon
- CreateGamePackBreakPickResponseDataPulls
- CreateGamePackBreakResponse
- CreateGamePackBreakResponseData
- CreateGamePackBreakResponseDataPulls
- CreateGeoLocationCheckResponse
- CreateGeoLocationCheckResponseFacts
- CreateGeoLocationCheckResponseHubFacts
- CreateGeoLocationCheckResponseRule
- CreateGeoLocationCheckResponseServices
- CreateGradingVerifyCertResponse
- CreateGroupBuyCancelResponse
- CreateGroupBuyCancelResponseData
- CreateGroupBuyCloseResponse
- CreateGroupBuyCloseResponseData
- CreateGroupBuyExtendResponse
- CreateGroupBuyExtendResponseData
- CreateGroupBuyMessageResponse
- CreateGroupBuyMessageResponseData
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
- CreateInboxSendOfferRequest
- CreateInboxSendOfferResponse
- CreateInboxSendOfferResponseMessage
- CreateInventoryBulkArchiveResponse
- CreateInventoryBulkDeleteResponse
- CreateInventoryBulkDeleteResponseRefused
- CreateInventoryBulkQuantityResponse
- CreateInventoryBulkRestoreResponse
- CreateInventoryCatalogMatchRefreshResponse
- CreateInventoryCatalogMatchRefreshResponseRun
- CreateInventoryCsvImportResponse
- CreateInventoryCsvImportResponseCapacity
- CreateInventoryCsvImportResponseProblems
- CreateInventoryMergeResponse
- CreateInventoryResponse
- CreateInventoryUnitIdentifierResponse
- CreateInventoryUnitLookupResponse
- CreateInventoryUnitLookupResponseData
- CreateListingAdBulkAddItem
- CreateListingAdBulkAddResponse
- CreateListingAdCampaignListingItem
- CreateListingAdCampaignListingResponse
- CreateListingAdCampaignResponse
- CreateListingAiImagePromptResponse
- CreateListingAiImageResponse
- CreateListingBulkDeleteResponse
- CreateListingBulkDelistPreviewResponse
- CreateListingBulkDelistPreviewResponseMarketplaces
- CreateListingBulkHardDeleteResponse
- CreateListingBulkResponse
- CreateListingBulkResponseData
- CreateListingBulkResponseDataError
- CreateListingBulkResponseMeta
- CreateListingBulkUpdateResponse
- CreateListingByIdResponse
- CreateListingByIdResponseItems
- CreateListingCheckDuplicateResponse
- CreateListingCheckDuplicateResponseMatches
- CreateListingCombineResponse
- CreateListingDiscrepancyResolveResponse
- CreateListingEvent2Response
- CreateListingEventResponse
- CreateListingEventResponseError
- CreateListingImportByUrlResponse
- CreateListingImportByUrlResponseListing
- CreateListingLinkBulkResponse
- CreateListingLinkBulkResponseMeta
- CreateListingLinkResponse
- CreateListingLinkResponseManagement
- CreateListingLinkResponseManagementAttention
- CreateListingLinkResponseManagementManagingApp
- CreateListingMagicFillResponse
- CreateListingMergeResponse
- CreateListingPlatformRecloneResponse
- CreateListingPlatformTakeOverResponse
- CreateListingPlatformTakeOverResponseInFlightCommands
- CreateListingResponse
- CreateListingResponseJobs
- CreateListingResponseSkipped
- CreateListingResponseWarnings
- CreateListingTagBulkResponse
- CreateListingTagRenameResponse
- CreateListingUnlinkResponse
- CreateLiveShipmentShipResponse
- CreateLiveStreamConnectionResponse
- CreateLiveStreamConnectionResponseData
- CreateLiveStreamConnectionResponseDataCapabilities
- CreateLookbookCampaignPreviewResponse
- CreateLookbookCampaignPreviewResponseData
- CreateLookbookCampaignPreviewResponseDataAudience
- CreateLookbookCampaignPreviewResponseDataAudienceSample
- CreateLookbookResponse
- CreateLookbookResponseData
- CreateLookbookResponseDataBrand
- CreateLookbookResponseDataDesign
- CreateLookbookResponseDataDesignBrand
- CreateLookbookResponseDataLookbook
- CreateLookbookShareLinkResponse
- CreateLookbookShareLinkResponseData
- CreateLoyaltyAirdropPrepareResponse
- CreateLoyaltyAirdropPrepareResponseData
- CreateLoyaltyAirdropPrepareResponseDataOneOfTxs
- CreateLoyaltyProgramInviteResponse
- CreateLoyaltyProgramInviteResponseData
- CreateLoyaltyTierResponse
- CreateLoyaltyTierResponseData
- CreateLoyaltyTierResponseDataPerksItem
- CreateMagicAutoDecisionUndoResponse
- CreateMagicAutoItemResponse
- CreateMagicAutoRunResponse
- CreateMagicAutoRunSwipeResponse
- CreateMagicScanResponse
- CreateMagicScanResponseEbayHits
- CreateMagicScanResponseEbayMatch
- CreateMagicScanResponseMatchReference
- CreateMagicScanResponseMatchReferenceCatalog
- CreateMagicScanResponseMatchReferenceIdentifier
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
- CreateOrderCancelResponseRefund
- CreateOrderCorrectTrackingResponse
- CreateOrderDisputeResponse
- CreateOrderDisputeResponseError
- CreateOrderEventResponse
- CreateOrderEventResponseData
- CreateOrderImportResponse
- CreateOrderImportResponseResults
- CreateOrderLabelResponse
- CreateOrderLabelVoidResponse
- CreateOrderLabelVoidResponseTracking
- CreateOrderLinkListingResponse
- CreateOrderLinkListingResponseStubArchived
- CreateOrderMessageResponse
- CreateOrderOrderChatRequest
- CreateOrderPickupLabelResponse
- CreateOrderPickupLabelResponseData
- CreateOrderPickupResponse
- CreateOrderPickupResponseData
- CreateOrderPlatformLabelPullResponse
- CreateOrderPlatformLabelPurchaseResponse
- CreateOrderPlatformLabelQuoteResponse
- CreateOrderPullPlatformLabelResponse
- CreateOrderRateResponse
- CreateOrderRefundByIdResponse
- CreateOrderRefundResponse
- CreateOrderScanFormResponse
- CreateOrderScanFormResponseData
- CreateOrderTakeOverResponse
- CreateOrderTrackingResponse
- CreateOrderWhatnotLabelResponse
- CreateOrderWhatnotPackageQuoteResponse
- CreatePassportDraftCaptureLinkResponse
- CreatePassportDraftCaptureLinkResponseData
- CreatePassportPrintResponse
- CreatePassportPrintResponseData
- CreatePatResponse
- CreatePayoutConnectOnboardRequest
- CreatePayoutConnectOnboardResponse
- CreatePayoutConnectOnboardResponseData
- CreatePayoutIdentityLinkResponse
- CreatePayoutIdentityLinkResponseData
- CreatePayoutPayoutRequest
- CreatePayoutPayoutResponse
- CreatePayoutPayoutResponseData
- CreatePayoutPayoutResponseDataPayout
- CreatePlatformAccountConnectResponse
- CreatePlatformAccountDisconnectResponse
- CreatePlatformAccountHistoryImportRequest
- CreatePlatformAccountHistoryImportResponse
- CreatePlatformAccountRefreshStatusResponse
- CreatePlatformAccountRefreshStatusResponseResults
- CreatePolicyPresetResponse
- CreatePolicyReturnReceivedResponse
- CreatePolicyReturnReceivedResponseData
- CreatePriceRulePreviewItem
- CreatePriceRulePreviewItemStepsItem
- CreatePriceRulePreviewResponse
- CreatePrintMailJobConfirmResponse
- CreatePrintMailJobResponse
- CreatePrintMailJobResponseData
- CreatePrintMailJobResponseDataEstimate
- CreatePrintMailJobResponseDataSkipped
- CreateProductSetBulkResponse
- CreateProductSetBulkResponseRefused
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
- CreateRentalBulkRentableItem
- CreateRentalBulkRentableResponse
- CreateRentalExtensionDecideResponse
- CreateRentalExtensionDecideResponseData
- CreateRepriceEventSkipResponse
- CreateRestockPromptRepublishResponse
- CreateReturnAcceptResponse
- CreateReturnDeclineRequest
- CreateSaleBulkDeleteResponse
- CreateSandboxResetResponse
- CreateSandboxResetResponseSeed
- CreateSandboxResetResponseSeedItems
- CreateSandboxResetResponseSeedOrders
- CreateSandboxResetResponseSeller
- CreateSandboxSimulateListingSoldOutResponse
- CreateSandboxSimulateOrderAddressResponse
- CreateSandboxSimulateOrderAddressResponseAddress
- CreateSandboxSimulateOrderCancelledResponse
- CreateSandboxSimulateOrderDeliveredResponse
- CreateSandboxSimulateOrderResponse
- CreateSandboxSimulateRefundResponse
- CreateShopLimitRequestRequest
- CreateShopLimitRequestResponse
- CreateShopLimitRequestResponseData
- CreateShowroomPlacementResponse
- CreateShowroomPlacementResponseData
- CreateShowroomPlacementResponseDataPlacements
- CreateShowroomResponse
- CreateSourceSyncSyncResponse
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
- CreateSpatialScenePlaceResponse
- CreateSpatialScenePlaceResponseData
- CreateSpatialSceneRenameRequest
- CreateSpatialSceneRequest
- CreateSpatialSceneShopPlaceResponse
- CreateSpatialSceneShopPlaceResponseData
- CreateSpatialSceneVisibilityRequest
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
- CreateSponsoredAdBillingTopupLinkResponse
- CreateSponsoredAdBillingTopupLinkResponseData
- CreateSponsoredAdBoostRemoveResponse
- CreateSponsoredAdBoostRemoveResponseData
- CreateStallBookResponse
- CreateStallBookResponseBooking
- CreateStallBookResponseBookingBooth
- CreateStallBookResponseBookingOwner
- CreateStallBookResponseBookingQuote
- CreateStallBookResponseBookingStats
- CreateStallBookResponseBookingUnits
- CreateStallBookingCancelResponse
- CreateStorefrontHighlightResponse
- CreateStorefrontHighlightResponseData
- CreateStorefrontHighlightResponseDataItems
- CreateStorefrontOnboardingSuggestResponse
- CreateStorefrontPolicyFromTermResponse
- CreateStorefrontPolicyFromTermResponseData
- CreateStorefrontPolicyFromTermResponseDataPreset
- CreateStorefrontProfileSuggestShelveResponse
- CreateStorefrontProfileSuggestShelveResponseData
- CreateStorefrontProfileSuggestShelveResponseDataShelves
- CreateStorefrontProfileSuggestShelveResponseDataShelvesSource
- CreateStorefrontSitePreviewResponse
- CreateStorefrontSitePreviewResponseData
- CreateStorefrontSitePreviewResponseDataPage
- CreateStorefrontSitePreviewResponseDataPageSeo
- CreateStorefrontSitePreviewResponseDataStore
- CreateStorefrontSitePreviewResponseDataStorePolicies
- CreateStorefrontSitePreviewResponseDataTrade
- CreateStorefrontSitePreviewResponseDataTradeGate
- CreateStorefrontSitePreviewResponseDataTradeTerms
- CreateStorefrontSitePreviewResponseDataTradeTermsShipsFrom
- CreateStorefrontSitePreviewResponseDataTradeViewer
- CreateStorefrontSiteResolveResponse
- CreateStorefrontSiteResolveResponseData
- CreateStorefrontSiteResolveResponseDataItems
- CreateStorefrontSiteSuggestResponse
- CreateStorefrontSiteSuggestResponseData
- CreateStorefrontSiteSuggestResponseDataSectionsItem
- CreateStoryItem
- CreateStoryResponse
- CreateTcgCreatorGameCheckResponse
- CreateTcgCreatorGameCheckResponseData
- CreateTcgCreatorGamePackOpenResponse
- CreateTcgCreatorGamePackOpenResponseData
- CreateTcgCreatorGamePackOpenResponseDataCards
- CreateTcgCreatorGameResponse
- CreateTcgCreatorGameResponseData
- CreateTcgDeckResponse
- CreateTcgDeckResponseData
- CreateTcgNftReconcileResponse
- CreateTcgNftReconcileResponseData
- CreateTcgPackOpenResponse
- CreateTcgPackOpenResponseData
- CreateTcgQueueResponse
- CreateTcgQueueResponseData
- CreateTcgStarterResponse
- CreateTcgStarterResponseData
- CreateTcgTournamentResponse
- CreateTcgTournamentResponseData
- CreateTeamAcceptResponse
- CreateTeamInviteResponse
- CreateTeamLeaveResponse
- CreateTeamRevokeResponse
- CreateToolboxAssetUseResponse
- CreateToolboxAssetUseResponseData
- CreateToolboxAssetUseResponseDataCredits
- CreateToolboxAssetUseResponseDataInserted
- CreateToolboxAssetUseResponseDataNodes
- CreateTradeBlockEvolutionClaimResponse
- CreateTradeBlockEvolutionRecipeResponse
- CreateTradeBlockEvolutionRecipeResponseRecipe
- CreateTradeBlockOfferRespondResponse
- CreateTradeBlockSetRecipeResponse
- CreateTradeBlockSetRecipeResponseRecipe
- CreateTradeBlockSetRecipeResponseRecipeMembers
- CreateVariationGroupGenerateMatrixResponse
- CreateVariationGroupGenerateMatrixResponseData
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
- CreateVaultMarketAutoBuyPauseResponse
- CreateVaultMarketAutoBuyPauseResponseOneOf1AutoBuy
- CreateVaultMarketAutoBuyPauseResponseOneOf1AutoBuyHistory
- CreateVaultMarketAutoBuyPauseResponseOneOf1AutoBuyWants
- CreateVaultMarketAutoBuyResumeResponse
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
- CreateVaultMarketGradingOrderPayResponse
- CreateVaultMarketGradingOrderResponse
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
- CreateVaultMarketOptionComboResponse
- CreateVaultMarketOptionComboRfqAcceptResponse
- CreateVaultMarketOptionComboRfqResponse
- CreateVaultMarketOptionCoveredCallReleaseResponse
- CreateVaultMarketOptionCoveredCallResponse
- CreateVaultMarketOptionCoveredCallResponseOneOf1Fills
- CreateVaultMarketOptionCoveredCallResponseOneOf1FillsBuyer
- CreateVaultMarketOptionMmHeartbeatResponse
- CreateVaultMarketOptionMmQuoteResponse
- CreateVaultMarketOptionOrderCancelResponse
- CreateVaultMarketOptionOrderResponse
- CreateVaultMarketOptionPracticeComboResponse
- CreateVaultMarketOptionPracticeOrderResponse
- CreateVaultMarketOptionPracticeOrderResponseQuote
- CreateVaultMarketOptionQuoteResponse
- CreateVaultMarketOptionQuoteResponseOneOf1Greeks
- CreateVaultMarketOptionQuoteResponseOneOf1Payoff
- CreateVaultMarketOptionQuoteResponseOneOf1PayoffPoints
- CreateVaultMarketOptionQuoteResponseOneOfContract
- CreateVaultMarketOptionRfqAcceptResponse
- CreateVaultMarketOptionRfqRespondResponse
- CreateVaultMarketOptionRollResponse
- CreateVaultMarketOptionStrategyPreviewResponse
- CreateVaultMarketOptionStrategyPreviewResponseComboBook
- CreateVaultMarketOptionStrategyPreviewResponseGreeks
- CreateVaultMarketOptionStrategyPreviewResponseLegs
- CreateVaultMarketOptionStrategyPreviewResponseMargin
- CreateVaultMarketOptionStrategyPreviewResponsePayoff
- CreateVaultMarketOptionStrategyPreviewResponseUnderlying
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
- CreateVaultMarketPredictionAccountResponse
- CreateVaultMarketPredictionAlertResponse
- CreateVaultMarketPredictionCardResponse
- CreateVaultMarketPredictionCardResponseAmounts
- CreateVaultMarketPredictionComboRfqQuoteResponse
- CreateVaultMarketPredictionComboRfqResponse
- CreateVaultMarketPredictionCommentReportResponse
- CreateVaultMarketPredictionCommentResponse
- CreateVaultMarketPredictionCommentResponseAuthor
- CreateVaultMarketPredictionConversionResponse
- CreateVaultMarketPredictionForecastResponse
- CreateVaultMarketPredictionForecasterFollowResponse
- CreateVaultMarketPredictionMakerQuoteResponse
- CreateVaultMarketPredictionMakerQuoteResponseQuotes
- CreateVaultMarketPredictionOrderAmendResponse
- CreateVaultMarketPredictionOrderBatchCancelResponse
- CreateVaultMarketPredictionOrderBatchCancelResponseResultsItem
- CreateVaultMarketPredictionOrderBatchResponse
- CreateVaultMarketPredictionOrderBatchResponseResultsItem
- CreateVaultMarketPredictionOrderResponse
- CreateVaultMarketPredictionOrderResponseFills
- CreateVaultMarketPredictionPaperResetResponse
- CreateVaultMarketPredictionPositionCloseAllResponse
- CreateVaultMarketPredictionPositionCloseAllResponseResultsItem
- CreateVaultMarketPredictionProposalCheckResponse
- CreateVaultMarketPredictionSettlementDisputeResponse
- CreateVaultMarketPredictionTermResponse
- CreateVaultMarketPriceWidgetPreviewResponse
- CreateVaultMarketPriceWidgetPreviewResponseView
- CreateVaultMarketProBracketResponse
- CreateVaultMarketProOcoResponse
- CreateVaultMarketProOrderCancelAllResponse
- CreateVaultMarketProOrderResponse
- CreateVaultMarketProQuoteResponse
- CreateVaultMarketProTrailingStopResponse
- CreateVaultMarketProfileFollowResponse
- CreateVaultMarketRfqAcceptResponse
- CreateVaultMarketRfqRespondResponse
- CreateVaultMarketRfqResponse
- CreateVaultMarketShareAutoInvestRunResponse
- CreateVaultMarketShareBasketBuyResponse
- CreateVaultMarketShareBuyoutFundResponse
- CreateVaultMarketSharePaperSeryOrderResponse
- CreateVaultMarketShareRoomHideResponse
- CreateVaultMarketShareSeryRecombineResponse
- CreateVaultMarketShareSeryRecombineResponseWithdrawal
- CreateVaultMarketShareSeryRoomResponse
- CreateVaultMarketShareSeryWatchResponse
- CreateVaultMarketShareViewingBookResponse
- CreateVaultMarketShareViewingBookingCancelResponse
- CreateVaultMarketSupplySendInResponse
- CreateVaultMarketSupplySendInResponseOneOf1Created
- CreateVaultMarketSupplySendInResponseOneOfPartner
- CreateVaultMarketSupplySendResponse
- CreateVaultMarketTodClaimObjectResponse
- CreateVaultMarketTodMyClaimDocumentResponse
- CreateVaultMarketTodMyClaimResponse
- CreateVaultMarketValuationStatementResponse
- CreateVaultMarketValuationStatementResponseAccount
- CreateVaultMarketValuationStatementResponseSeal
- CreateVaultMarketValuationStatementResponseShares
- CreateVaultMarketValuationStatementResponseSharesLines
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
- CreateVideoStudioFinalizeResponse
- CreateVideoStudioUploadUrlResponse
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
- CreateWeb3SolanaTensorBidConfirmResponse
- CreateWeb3SolanaTensorBidPlaceTxResponse
- CreateWeb3SolanaTensorBidPlaceTxResponseTxs
- CreateWeb3StakingStakeResponse
- CreateWeb3StakingStakeResponseData
- CreateWeb3StakingUnstakeResponse
- CreateWeb3StakingUnstakeResponseData
- CreateWeb3StoreWalletResponse
- CreateWeb3StoreWalletSyncResponse
- CreateWeb3StoreWalletSyncResponseData
- CreateWeb3StoreWalletSyncResponseDataChains
- CreateWeb3TokenRefreshResponse
- CreateWeb3TransactionResponse
- CreateWeb3WalletChallengeResponse
- CreateWeb3WalletImportResponse
- CreateWeb3WalletImportResponseData
- CreateWeb3WalletSyncResponse
- CreateWeb3WalletVerifyResponse
- CreateWebhookDeliveryRedeliverResponse
- CreateWebhookResponse
- CreateWebhookTestResponse
- CreateWholesaleBuyerInviteResponse
- CreateWholesaleBuyerInviteResponseData
- CreateWholesaleBuyerRemoveResponse
- CreateWholesaleCatalogItemResponse
- CreateWholesaleCatalogItemResponseData
- CreateWholesaleCatalogResponse
- CreateWholesaleCatalogResponseData
- CreateWholesaleDropReleaseResponse
- CreateWholesaleDropReleaseResponseData
- CreateWholesaleDropResponse
- CreateWholesaleDropResponseData
- CreateWholesaleFreightRequestAnswerResponse
- CreateWholesaleFreightRequestAnswerResponseData
- CreateWholesaleFreightRequestAnswerResponseDataLines
- CreateWholesaleGroupMemberResponse
- CreateWholesaleGroupMemberResponseData
- CreateWholesaleGroupResponse
- CreateWholesaleGroupResponseData
- CreateWholesaleInvoiceCreditNoteResponse
- CreateWholesaleInvoiceCreditNoteResponseData
- CreateWholesaleInvoiceCreditNoteResponseDataCreditNote
- CreateWholesaleInvoiceCreditNoteResponseDataInvoice
- CreateWholesaleInvoiceSendResponse
- CreateWholesaleInvoiceSendResponseData
- CreateWholesaleProfileShipsFromValidateResponse
- CreateWholesaleProfileShipsFromValidateResponseData
- CreateWholesaleRequestDecideResponse
- CreateWholesaleRequestDecideResponseData
- CreateWholesaleTierBulkResponse
- CreateWholesaleTierBulkResponseData
- CreateWholesaleTierBulkResponseDataSkipped
- CreateWorkflowApprovalDecideRequest
- CreateWorkflowApprovalDecideResponse
- CreateWorkflowChainRunNowResponse
- CreateWorkflowChainToggleResponse
- CreateWorkflowChainToggleResponseChain
- CreateWorkflowDuplicateRequest
- CreateWorkflowDuplicateResponse
- CreateWorkflowDuplicateResponseData
- CreateWorkflowExpressionPreviewRequest
- CreateWorkflowExpressionPreviewResponse
- CreateWorkflowExpressionPreviewResponseData
- CreateWorkflowExpressionPreviewResponseDataOneOf1Error
- CreateWorkflowImportResponse
- CreateWorkflowImportResponseData
- CreateWorkflowRequest
- CreateWorkflowResponse
- CreateWorkflowResponseData
- CreateWorkflowRunCancelResponse
- CreateWorkflowRunCancelResponseData
- CreateWorkflowRunOnRequest
- CreateWorkflowRunOnRequestItems
- CreateWorkflowRunOnResponse
- CreateWorkflowRunOnResponseData
- CreateWorkflowRunRequest
- CreateWorkflowRunResponse
- CreateWorkflowRunResponseData
- CreateWorkflowRunRetryResponse
- CreateWorkflowRunRetryResponseData
- CreateWorkflowSaleEndResponse
- CreateWorkflowSaleEndResponseData
- CreateWorkflowTemplateUseRequest
- CreateWorkflowTestRequest
- CreateWorkflowTestResponse
- CreateWorkflowTestResponseData
- CreateWorkflowValidateRequest
- CreateWorkflowValidateResponse
- CreateWorkflowValidateResponseData
- CreateWorkflowWebhookRotateRequest
- CreateWorkflowWebhookRotateResponse
- CreateWorkflowWebhookRotateResponseData
- CreateWorldAttendantTestChatResponse
- CreateWorldAttendantTestChatResponseData
- CreateWorldAttendantTestChatResponseDataReply
- CreateWorldAttendantTestChatResponseDataTokens
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
- CreateWorldCollaborationAcceptResponse
- CreateWorldCollaborationDeclineResponse
- CreateWorldCollaborationDeclineResponseData
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
- CreateWorldConventionBoothApplyResponse
- CreateWorldConventionBoothFeeResponse
- CreateWorldConventionCheckInResponse
- CreateWorldConventionMessageResponse
- CreateWorldConventionResponse
- CreateWorldConventionResponseData
- CreateWorldConventionSellerAssignResponse
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
- CreateWorldEarningPayoutAccountOnboardResponse
- CreateWorldEarningPayoutAccountOnboardResponseData
- CreateWorldExperienceActivityRevertResponse
- CreateWorldExperienceActivityRevertResponseData
- CreateWorldExperienceActivityRevertResponseDataRejected
- CreateWorldExperienceAlertAckResponse
- CreateWorldExperienceAlertAckResponseData
- CreateWorldExperienceAnalyticQueryResponse
- CreateWorldExperienceAnalyticQueryResponseData
- CreateWorldExperienceAnalyticQueryResponseDataSeries
- CreateWorldExperienceAssetMeshCheckResponse
- CreateWorldExperienceAssetMeshCheckResponseData
- CreateWorldExperienceAssetMeshResponse
- CreateWorldExperienceAssetMeshResponseData
- CreateWorldExperienceAssetMeshResponseDataAsset
- CreateWorldExperienceAssetMeshResponseDataAssetReport
- CreateWorldExperienceAssetMeshResponseDataCheck
- CreateWorldExperienceBadgeResponse
- CreateWorldExperienceBadgeResponseData
- CreateWorldExperienceCollaboratorResponse
- CreateWorldExperienceCollaboratorResponseData
- CreateWorldExperienceDatastoreEntryIncrementResponse
- CreateWorldExperienceDatastoreEntryIncrementResponseData
- CreateWorldExperienceDropTableResponse
- CreateWorldExperienceGalleryUploadUrlResponse
- CreateWorldExperienceGalleryUploadUrlResponseData
- CreateWorldExperienceHttpDomainResponse
- CreateWorldExperienceHttpDomainResponseData
- CreateWorldExperienceJoinResponse
- CreateWorldExperienceJoinResponseData
- CreateWorldExperienceMemoryQueueReadResponse
- CreateWorldExperienceMemoryQueueReadResponseData
- CreateWorldExperienceMessagingResponse
- CreateWorldExperienceMessagingResponseData
- CreateWorldExperienceModerationAppealResponse
- CreateWorldExperienceNotificationResponse
- CreateWorldExperienceNotificationResponseData
- CreateWorldExperienceNotificationResponseDataResults
- CreateWorldExperiencePlaceAssistantApplyResponse
- CreateWorldExperiencePlaceAssistantApplyResponseData
- CreateWorldExperiencePlaceAssistantApplyResponseDataChanges
- CreateWorldExperiencePlaceAssistantResponse
- CreateWorldExperiencePlaceAssistantResponseData
- CreateWorldExperiencePlaceAssistantResponseDataAllowance
- CreateWorldExperiencePlaceAssistantResponseDataChangesItem
- CreateWorldExperiencePlaceAssistantResponseDataChecked
- CreateWorldExperiencePlaceCheckResponse
- CreateWorldExperiencePlaceCheckResponseData
- CreateWorldExperiencePlaceCheckResponseDataBudgets
- CreateWorldExperiencePlaceCheckResponseDataProblems
- CreateWorldExperiencePlaceCollabOpResponse
- CreateWorldExperiencePlaceCollabOpResponseData
- CreateWorldExperiencePlaceCollabOpResponseDataRejected
- CreateWorldExperiencePlaceCollabSaveResponse
- CreateWorldExperiencePlaceCollabSaveResponseData
- CreateWorldExperiencePlaceCollabScriptCommitResponse
- CreateWorldExperiencePlaceCollabScriptCommitResponseData
- CreateWorldExperiencePlacePackageResponse
- CreateWorldExperiencePlacePackageResponseData
- CreateWorldExperiencePlacePackageUpdateResponse
- CreateWorldExperiencePlacePackageUpdateResponseData
- CreateWorldExperiencePlaceStudioEditResponse
- CreateWorldExperiencePlaceStudioEditResponseData
- CreateWorldExperiencePlaceStudioEditResponseDataInserted
- CreateWorldExperiencePlaceStudioInsertAssetResponse
- CreateWorldExperiencePlaceStudioInsertAssetResponseData
- CreateWorldExperiencePlaceStudioPlaytestResponse
- CreateWorldExperiencePlaceStudioPlaytestResponseData
- CreateWorldExperiencePlaceStudioPlaytestResponseDataJoin
- CreateWorldExperiencePlaceStudioPlaytestStopResponse
- CreateWorldExperiencePlaceStudioPlaytestStopResponseData
- CreateWorldExperiencePlaceStudioPublishResponse
- CreateWorldExperiencePlaceStudioPublishResponseData
- CreateWorldExperiencePlaceStudioScriptCommitResponse
- CreateWorldExperiencePlaceStudioScriptCommitResponseData
- CreateWorldExperiencePlaceStudioScriptCommitResponseDataLint
- CreateWorldExperiencePlaceTestResponse
- CreateWorldExperiencePlaceTestResponseData
- CreateWorldExperiencePlaceTestResponseDataJoin
- CreateWorldExperiencePlaytesterResponse
- CreateWorldExperiencePurchaseResponse
- CreateWorldExperiencePurchaseResponseData
- CreateWorldExperienceReceiptAckResponse
- CreateWorldExperienceReceiptAckResponseData
- CreateWorldExperienceReservedServerResponse
- CreateWorldExperienceReservedServerResponseData
- CreateWorldExperienceResponse
- CreateWorldExperienceResponseData
- CreateWorldExperienceRewardCloseResponse
- CreateWorldExperienceRewardCloseResponseData
- CreateWorldExperienceRewardCloseResponseDataPool
- CreateWorldExperienceRewardDefinitionResponse
- CreateWorldExperienceRewardDefinitionResponseData
- CreateWorldExperienceRewardDepositResponse
- CreateWorldExperienceRewardDepositResponseData
- CreateWorldExperienceRewardDepositResponseDataPool
- CreateWorldExperienceRewardTopupResponse
- CreateWorldExperienceServerShutdownResponse
- CreateWorldExperienceServerShutdownResponseData
- CreateWorldFollowResponse
- CreateWorldFriendInviteRequest
- CreateWorldFriendInviteResponse
- CreateWorldFriendInviteResponseData
- CreateWorldGamePackageCheckResponse
- CreateWorldGamePackageCheckResponseData
- CreateWorldGamePackageCheckResponseDataFits
- CreateWorldGamePackageCheckResponseDataManifest
- CreateWorldGamePackagePublishResponse
- CreateWorldGamePackagePublishResponseData
- CreateWorldGamePackageResponse
- CreateWorldGamePackageResponseData
- CreateWorldGamePackageResponseDataPackage
- CreateWorldGamePackageResponseDataStore
- CreateWorldGamePackageResponseDataVersion
- CreateWorldGamePackageRestoreResponse
- CreateWorldGamePackageRestoreResponseData
- CreateWorldGamePackageUnpublishResponse
- CreateWorldGamePackageUnpublishResponseData
- CreateWorldGamePackageVersionSubmitResponse
- CreateWorldGamePackageVersionSubmitResponseData
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
- CreateWorldMarketBuyResponse
- CreateWorldMarketBuyResponseData
- CreateWorldMarketListingResponse
- CreateWorldMarketListingResponseData
- CreateWorldMarketPlotRentResponse
- CreateWorldMarketPlotRentResponseData
- CreateWorldMarketPlotRentResponseDataOneOf2Placed
- CreateWorldMatureVerifyResponse
- CreateWorldMatureVerifyResponseData
- CreateWorldMeReceiptRefundResponse
- CreateWorldMeReceiptRefundResponseData
- CreateWorldMeSubscriptionCancelResponse
- CreateWorldMeSubscriptionPrivateServerCodeResponse
- CreateWorldMeSubscriptionPrivateServerCodeResponseData
- CreateWorldOutfitApplyResponse
- CreateWorldOutfitApplyResponseData
- CreateWorldOutfitApplyResponseDataSkipped
- CreateWorldOutfitRequest
- CreateWorldOutfitResponse
- CreateWorldOutfitResponseData
- CreateWorldOutfitResponseDataPreset
- CreateWorldOutfitResponseDataPresetAppearance
- CreateWorldPackageToolboxResponse
- CreateWorldPackageToolboxResponseData
- CreateWorldPackageVersionResponse
- CreateWorldPackageVersionResponseData
- CreateWorldPackageVersionResponseDataPropagation
- CreateWorldParentalChildrenPinResponse
- CreateWorldParentalChildrenPinResponseData
- CreateWorldParentalChildrenUnlinkResponse
- CreateWorldParentalChildrenUnlinkResponseData
- CreateWorldParentalInviteResponse
- CreateWorldParentalInviteResponseData
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
- CreateWorldPropertyPlotPhotoUploadUrlResponse
- CreateWorldPropertyPlotPhotoUploadUrlResponseData
- CreateWorldPropertyPlotShowroomResponse
- CreateWorldRatingComputeResponse
- CreateWorldRatingComputeResponseData
- CreateWorldRatingComputeResponseDataAnswers
- CreateWorldReportResponse
- CreateWorldReportResponseData
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
- CreateWorldStaffApplicationDecideResponse
- CreateWorldStaffApplicationDecideResponseData
- CreateWorldStaffAssignmentRateWorkerResponse
- CreateWorldStaffAssignmentRateWorkerResponseData
- CreateWorldStreetOwnedUpkeepPayResponse
- CreateWorldStreetOwnedUpkeepPayResponseData
- CreateWorldVenueBookingCancelResponse
- CreateWorldWorkPostingApplyResponse
- CreateWorldWorkPostingApplyResponseData
- CreatorCardSetResponse
- CreatorCardSetResponseData
- CreatorCardSetResponseDataCheck
- CreatorCardSetResponseDataDraft
- CreatorCardSetResponseDataDraftCards
- CreatorCardSetResponseDataDraftCosm
- CreatorCardSetResponseDataDraftCosmSingles
- CreatorCardSetResponseDataDraftCosmSupply
- CreatorCardSetResponseDataDraftFrame
- CreatorCardSetResponseDataDraftPrint
- CreatorItemModelResponse
- CreatorItemWearableResponse
- CreatorReviewResponse
- DeleteAuthSessionResponse
- DeleteBrandingDropResponse
- DeleteBrandingDropResponseData
- DeleteBrandingDropResponseDataDrop
- DeleteCosmHandleResponse
- DeleteCosmHandleResponseData
- DeleteCosmPegResponse
- DeleteCosmPegResponseData
- DeleteCreatorExperienceKeyResponse
- DeleteDaoProposalResponse
- DeleteDaoProposalResponseData
- DeleteDropResponse
- DeleteEventResponse
- DeleteEventResponseData
- DeleteEventResponseDataEvent
- DeleteFundingMemberResponse
- DeleteFundingMemberResponseData
- DeleteFundingMemberResponseDataMembers
- DeleteListingResponse
- DeleteMobilePushTokenResponse
- DeletePolicyPresetResponse
- DeleteShowroomResponse
- DeleteShowroomResponseData
- DeleteSpatialSceneGrantResponse
- DeleteSpatialSceneGrantResponseData
- DeleteSpatialSceneNodeResponse
- DeleteSpatialSceneNodeResponseData
- DeleteStoryResponse
- DeleteStoryResponseData
- DeleteVaultMarketAutoBuyResponse
- DeleteVaultMarketFollowCopyWatchResponse
- DeleteVaultMarketOpeningWaitlistResponse
- DeleteVaultMarketPriceWidgetResponse
- DeleteVaultMarketProQuoteResponse
- DeleteVaultMarketSetGoalResponse
- DeleteVaultMarketWidgetTokenByIdResponse
- DeleteVaultMarketWidgetTokenResponse
- DeleteWorkflowResponse
- DeleteWorkflowResponseData
- DeleteWorldBlockResponse
- DeleteWorldBlockResponseData
- DeleteWorldExperienceBanResponse
- DeleteWorldExperienceBanResponseData
- DeleteWorldExperienceDatastoreEntryResponse
- DeleteWorldExperienceDatastoreEntryResponseData
- DeleteWorldExperienceOrderedEntryResponse
- DeleteWorldExperienceOrderedEntryResponseData
- DeleteWorldExperiencePlaceCollabScriptResponse
- DeleteWorldExperiencePlaceCollabScriptResponseData
- DeleteWorldExperienceResponse
- DeleteWorldExperienceResponseData
- DeleteWorldGamePackageResponse
- DeleteWorldGamePackageResponseData
- DeleteWorldHomeGuestbookResponse
- DeleteWorldHomeGuestbookResponseData
- DeleteWorldInteractiveDesignResponse
- DeleteWorldInteractiveDesignResponseData
- DeleteWorldJobShiftResponse
- DeleteWorldMarketListingResponse
- DeleteWorldMarketListingResponseData
- DeleteWorldOutfitResponse
- DeleteWorldOutfitResponseData
- DeleteWorldPackageResponse
- DeleteWorldPlaceBanResponse
- DeleteWorldPlaceBanResponseData
- DeleteWorldPropertyPlotShowroomResponse
- DeleteWorldPropertyPlotShowroomResponseData
- DeleteWorldSpaceResponse
- DeleteWorldSpaceResponseData
- DeveloperAppCertificationResponse
- DeveloperAppCertificationResponseData
- DeveloperAppCertificationResponseDataEvidence
- DeveloperAppCertificationResponseDataLastRun
- DeveloperAppVerificationResponse
- DeveloperAppVerificationResponseData
- DeveloperAppVerificationResponseDataTxtRecord
- DiscountCodeResponse
- DiscountCodeResponseData
- Error
- ErrorError
- EventResponse
- FromTo
- FromTo2
- FundingPoolResponse
- FundingPoolResponseData
- FundingPoolResponseDataHistory
- FundingPoolResponseDataPool
- FundingPoolResponseDataPosition
- FundingPoolResponseDataUnstakeRequests
- FundingPoolResponseDataWaitlist
- GetAccountClosureChecklistResponse
- GetAccountClosureChecklistResponseAutomations
- GetAccountClosureChecklistResponseLiveListings
- GetAccountDeletionStatusResponse
- GetAccountDeletionStatusResponsePending
- GetAccountIdentityVerificationResponse
- GetAccountIdentityVerificationResponseData
- GetAccountIdentityVerificationResponseDataLastError
- GetActionLogExportDownloadResponse
- GetActionLogExportResponse
- GetActionLogFacetResponse
- GetActionLogFacetResponseActors
- GetActionLogFacetResponseAreas
- GetActionLogFacetResponseOutcomes
- GetActionLogFacetResponsePlatformCounts
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
- GetAnalyticCompareResponse
- GetAnalyticCompareResponseData
- GetAnalyticCompareResponseDataColumns
- GetAnalyticCompareResponseDataCurves
- GetAnalyticCompareResponseDataDifferences
- GetAnalyticCompareResponseDataTests
- GetAnalyticDashboardResponse
- GetAnalyticDashboardResponseAvgSalePriceByPlatform
- GetAnalyticDashboardResponseCancelRate
- GetAnalyticDashboardResponsePeriod
- GetAnalyticDashboardResponseRecentSales
- GetAnalyticDashboardResponseRevenue
- GetAnalyticDashboardResponseRevenueByDay
- GetAnalyticDashboardResponseSalesByPlatform
- GetAnalyticDashboardResponseSellThrough
- GetAnalyticDashboardResponseSellThroughCohort
- GetAnalyticDashboardResponseSellThroughCohortPrev
- GetAnalyticDashboardResponseTop5ItemsByRevenue
- GetAnalyticDashboardResponseTopCategories
- GetAnalyticExperimentByIdResponse
- GetAnalyticExperimentByIdResponseData
- GetAnalyticExperimentByIdResponseDataArms
- GetAnalyticExperimentByIdResponseDataArmsRates
- GetAnalyticExperimentByIdResponseDataArmsWindow
- GetAnalyticExperimentByIdResponseDataPrimary
- GetAnalyticExperimentByIdResponseDataPrimaryA
- GetAnalyticExperimentResponse
- GetAnalyticExperimentResponseData
- GetAnalyticExperimentResponseDataPage
- GetAnalyticExperimentResponseDataRows
- GetAnalyticInventoryResponse
- GetAnalyticInventoryResponseData
- GetAnalyticInventoryResponseDataAging
- GetAnalyticInventoryResponseDataAgingBuckets
- GetAnalyticInventoryResponseDataAgingTotals
- GetAnalyticInventoryResponseDataHealth
- GetAnalyticInventoryResponseDataHealthStatsCoverage
- GetAnalyticInventoryResponseDataPeriod
- GetAnalyticInventoryResponseDataShelf
- GetAnalyticInventoryResponseDataShelfPoints
- GetAnalyticInventoryResponseDataVelocity
- GetAnalyticInventoryResponseDataVelocityPoints
- GetAnalyticInventoryResponseDataWorst
- GetAnalyticItemByListingIdResponse
- GetAnalyticItemByListingIdResponseData
- GetAnalyticItemResponse
- GetAnalyticItemResponseItems
- GetAnalyticMarketplaceByPlatformResponse
- GetAnalyticMarketplaceByPlatformResponseData
- GetAnalyticMarketplaceByPlatformResponseDataAtRisk
- GetAnalyticMarketplaceByPlatformResponseDataCategories
- GetAnalyticMarketplaceByPlatformResponseDataDaysToSellHistogram
- GetAnalyticMarketplaceByPlatformResponseDataFeeBreakdown
- GetAnalyticMarketplaceByPlatformResponseDataHeatmap
- GetAnalyticMarketplaceByPlatformResponseDataOffers
- GetAnalyticMarketplaceByPlatformResponseDataPriceRealization
- GetAnalyticMarketplaceByPlatformResponseDataRow
- GetAnalyticMarketplaceByPlatformResponseDataRowMetrics
- GetAnalyticMarketplaceByPlatformResponseDataRowMetricsNetSales
- GetAnalyticMarketplaceByPlatformResponseDataSeries
- GetAnalyticMarketplaceByPlatformResponseDataTopItems
- GetAnalyticMarketplaceResponse
- GetAnalyticMarketplaceResponseData
- GetAnalyticMarketplaceResponseDataHeadToHead
- GetAnalyticMarketplaceResponseDataInsights
- GetAnalyticMarketplaceResponseDataInsightsAction
- GetAnalyticMarketplaceResponseDataRows
- GetAnalyticMarketplaceResponseDataRowsMetrics
- GetAnalyticOverviewResponse
- GetAnalyticOverviewResponseData
- GetAnalyticOverviewResponseDataByPlatform
- GetAnalyticOverviewResponseDataByStore
- GetAnalyticOverviewResponseDataKpis
- GetAnalyticOverviewResponseDataKpisNetSales
- GetAnalyticOverviewResponseDataKpisNetSalesDelta
- GetAnalyticOverviewResponseDataSeries
- GetAnalyticOverviewResponseDataSeriesCompare
- GetAnalyticOverviewResponseDataSeriesPoints
- GetAnalyticPerformanceResponse
- GetAnalyticPerformanceResponseData
- GetAnalyticPerformanceResponseDataRows
- GetAnalyticPerformanceResponseDataTotals
- GetAnalyticPerformanceResponseDataUnlinkedSales
- GetAnalyticProgramResponse
- GetAnalyticProgramResponseData
- GetAnalyticProgramResponseDataBreakdown
- GetAnalyticProgramResponseDataBreakdownColumns
- GetAnalyticProgramResponseDataDimension
- GetAnalyticProgramResponseDataDimensionOptions
- GetAnalyticProgramResponseDataKpis
- GetAnalyticProgramResponseDataMoreBreakdowns
- GetAnalyticProgramResponseDataTrend
- GetAnalyticProgramResponseDataTrendPoints
- GetAnalyticProgramResponseDataTrendSeries
- GetAnalyticSegmentByKeyResponse
- GetAnalyticSegmentByKeyResponseData
- GetAnalyticSegmentByKeyResponseDataPriceBands
- GetAnalyticSegmentByKeyResponseDataRow
- GetAnalyticSegmentByKeyResponseDataSeries
- GetAnalyticSegmentResponse
- GetAnalyticSegmentResponseData
- GetAnalyticSegmentResponseDataOther
- GetAnalyticSegmentResponseDataRows
- GetAnalyticSegmentResponseDataRowsSellThrough
- GetAnalyticSummaryResponse
- GetAnalyticTimeseryResponse
- GetAnalyticTimeseryResponseSeries
- GetAnalyticTodayResponse
- GetAnalyticTodayResponseChecklist
- GetAnalyticTodayResponseInbox
- GetAnalyticTodayResponseStreak
- GetAppEarningResponse
- GetAppEarningResponseLedger
- GetAppEarningResponseSummary
- GetAppListingAllowanceResponse
- GetAppListingAllowanceResponseData
- GetAutomationCatalogResponse
- GetAutomationCatalogResponseTriggerTypes
- GetAutomationRuleExportByIdResponse
- GetAutomationRuleExportByIdResponseCondition
- GetAutomationRuleExportByIdResponseMetadata
- GetAutomationRuleExportByIdResponseTrigger
- GetAutomationRuleExportResponse
- GetAutomationRuleResponse
- GetBook1099kResponse
- GetBook1099kResponseData
- GetBook1099kResponseDataFederal
- GetBook1099kResponseDataRows
- GetBookExpenseResponse
- GetBookExpenseResponseData
- GetBookExpenseResponseDataRange
- GetBookExpenseResponseDataRows
- GetBookResponse
- GetBookResponseData
- GetBookResponseDataByMarketplace
- GetBookResponseDataByMarketplaceForm1099k
- GetBookResponseDataCogsDetail
- GetBookResponseDataCogsDetailSnapshotCoverage
- GetBookResponseDataEstimatedTax
- GetBookResponseDataEstimatedTaxQuarters
- GetBookResponseDataExpensesTotals
- GetBookResponseDataHealth
- GetBookResponseDataKpis
- GetBookResponseDataMileage
- GetBookResponseDataMonthly
- GetBookResponseDataPnl
- GetBookResponseDataPnlIncome
- GetBookResponseDataSalesTax
- GetBookResponseDataSalesTaxCrosslyNotCollected
- GetBookResponseDataSalesTaxMarketplaceCollected
- GetBookTaxProfileResponse
- GetBookTaxProfileResponseData
- GetBookTransactionResponse
- GetBookTransactionResponseData
- GetBookTransactionResponseDataRows
- GetBookTransactionResponseDataTotals
- GetBrandDropPartnerResponse
- GetBrandDropPartnerResponseData
- GetBrandDropPartnerResponseDataPartner
- GetBrandDropPartnerResponseDataUsage
- GetBrandResponse
- GetBrandingBrandResponse
- GetBrandingBrandResponseData
- GetBrandingBusinessVerificationResponse
- GetBrandingBusinessVerificationResponseData
- GetBrandingDropResponse
- GetBrandingEventResponse
- GetBrandingEventResponseData
- GetBrandingEventResponseDataOneOfGroups
- GetBrandingSettingResponse
- GetBrandingSettingResponseData
- GetBreakResponse
- GetBreakResponseData
- GetBreakResponseDataDraw
- GetBreakResponseDataSeller
- GetBreakResponseDataSpots
- GetBulkBatchResponse
- GetBulkBatchResponseSkus
- GetCatalogLookupResponse
- GetCatalogLookupResponseData
- GetCatalogLookupResponseDataOffers
- GetCatalogLookupResponseDataOffersCatalog
- GetCatalogLookupResponseMeta
- GetCategoryByIdResponse
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
- GetConnectionPolicyManagementOptionItem
- GetConnectionPolicyManagementOptionResponse
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
- GetCreatorCardSetProgressResponse
- GetCreatorCardSetProgressResponseData
- GetCreatorCardSetProgressResponseDataPopularity
- GetCreatorCardSetProgressResponseDataPrintRun
- GetCreatorCardSetProgressResponseDataProduction
- GetCreatorCardSetProgressResponseDataSteps
- GetCreatorCollectionPerkResponse
- GetCreatorCollectionPerkResponseData
- GetCreatorCollectionPerkResponseDataNotices
- GetCreatorCollectionPerkResponseDataPerksItem
- GetCreatorCollectionResponse
- GetCreatorCollectionResponseData
- GetCreatorCollectionResponseDataActions
- GetCreatorCollectionResponseDataCardSet
- GetCreatorCollectionResponseDataCardSetProgress
- GetCreatorCollectionResponseDataCreations
- GetCreatorCollectionResponseDataDashboard
- GetCreatorCollectionResponseDataDashboardDaily
- GetCreatorCollectionResponseDataDashboardHolders
- GetCreatorCollectionResponseDataDashboardMint
- GetCreatorCollectionResponseDataDashboardRecent
- GetCreatorCollectionResponseDataDashboardSales
- GetCreatorCollectionResponseDataHolderPerks
- GetCreatorCollectionResponseDataLaunch
- GetCreatorCollectionResponseDataLaunchStats
- GetCreatorCollectionResponseDataLaunchStatsProceeds
- GetCreatorCollectionResponseDataLaunchStatsRecentMints
- GetCreatorCollectionResponseDataLaunchStatsTimeline
- GetCreatorCollectionResponseDataProblems
- GetCreatorCollectionResponseDataSteps
- GetCreatorCreationResponse
- GetCreatorCreationResponseData
- GetCreatorCreationResponseDataFiles
- GetCreatorCreationResponseDataMint
- GetCreatorCreationResponseDataReviews
- GetCreatorCreationResponseDataReviewsSummary
- GetCreatorCreationResponseDataSales
- GetCreatorCreationResponseDataSoldIn
- GetCreatorCreationResponseDataSoldInStores
- GetCreatorCreationStatusResponse
- GetCreatorCreationStatusResponseData
- GetCreatorEarningReconcileResponse
- GetCreatorEarningReconcileResponseLines
- GetCreatorEarningReconcileResponseRails
- GetCreatorEntitlementResponse
- GetCreatorEntitlementResponseData
- GetCreatorEntitlementResponseDataLimits
- GetCreatorEntitlementResponseDataLimitsLiveItems
- GetCreatorImportResponse
- GetCreatorImportResponseData
- GetCreatorImportResponseDataResult
- GetCreatorImportResponseDataResultIssues
- GetCreatorImportResponseDataResultPreview
- GetCreatorItemTemplateResponse
- GetCreatorItemTemplateResponseData
- GetCreatorItemTemplateResponseDataBudget
- GetCreatorItemTemplateResponseDataBudgetPhone
- GetCreatorItemTemplateResponseDataTemplates
- GetCreatorMintingResponse
- GetCreatorMintingResponseData
- GetCreatorMintingResponseDataGettingReady
- GetCreatorOverviewResponse
- GetCreatorOverviewResponseChecklist
- GetCreatorOverviewResponseEarnings
- GetCreatorOverviewResponseItems
- GetCreatorOverviewResponseLive
- GetCreatorOverviewResponseLock
- GetCreatorOverviewResponseReviews
- GetCreatorRewardFormulaResponse
- GetCreatorRewardFormulaResponseData
- GetCreatorRewardFormulaResponseDataFormula
- GetCreatorRewardFormulaResponseDataRules
- GetCreatorRewardFormulaResponseDataScheduled
- GetCreatorRewardFormulaResponseDataScheduledFormula
- GetCreatorRewardMeResponse
- GetCreatorRewardMeResponseData
- GetCreatorRewardMeResponseDataOneOfExperiences
- GetCreatorTemplateResponse
- GetCreatorTemplateResponseData
- GetCustomerNoteResponse
- GetCustomerResponse
- GetCustomerResponseContact
- GetCustomerResponseContactAddress
- GetCustomerResponseOrders
- GetCustomerResponseProfiles
- GetCustomerResponseStats
- GetDaoProposalTallyResponse
- GetDaoProposalTallyResponseData
- GetDepartmentResponse
- GetDetectedEventEventResponse
- GetDeveloperAppCertificationResponse
- GetDeveloperAppCertificationResponseData
- GetDeveloperAppClientVersionResponse
- GetDeveloperAppConformanceRunResponse
- GetDeveloperAppHealthResponse
- GetDeveloperAppHealthResponseData
- GetDeveloperAppHealthResponseDataAtlas
- GetDeveloperAppHealthResponseDataAtlasConsents
- GetDeveloperAppHealthResponseDataAtlasTokenEndpoint
- GetDeveloperAppHealthResponseDataAtlasTokenEndpointLatestError
- GetDeveloperAppHealthResponseDataLast24h
- GetDeveloperAppHealthResponseDataLast24hByClass
- GetDeveloperAppHealthResponseDataRecentFailures
- GetDeveloperAppHealthResponseDataRetryStorm
- GetDeveloperAppHealthResponseDataTopErrors
- GetDeveloperAppProfileResponse
- GetDeveloperAppProfileResponseData
- GetDeveloperAppReviewResponse
- GetDeveloperAppReviewResponseData
- GetDeveloperAppReviewResponseDataHistory
- GetDeveloperAppReviewResponseDataVerification
- GetDeveloperAppVerificationResponse
- GetDiscountCodeResponse
- GetDiscountCodeShareResponse
- GetDiscountCodeShareResponseData
- GetDiscountHolderResponse
- GetDiscountHolderResponseData
- GetDiscountHolderResponseDataChannelsItem
- GetDiscountHolderResponseDataUsage
- GetDropResponse
- GetDropResponseDrop
- GetEventAnalyticResponse
- GetEventAnalyticResponseData
- GetEventPolicyResponse
- GetEventPolicyResponseData
- GetEventPolicyResponseDataMatrix
- GetEventPolicyResponseDataMatrixAllowedItem
- GetEventPolicyResponseDataMatrixEffective
- GetEventPolicyResponseDataPlatforms
- GetEventPolicyResponseDataRules
- GetFundingControlResponse
- GetFundingControlResponseData
- GetFundingControlResponseDataEffectiveUsesItem
- GetFundingControlResponseDataPolicy
- GetFundingControlResponseDataPolicyAllowedUsesItem
- GetFundingControlResponseDataPool
- GetFundingControlResponseDataUses
- GetFundingDrawInvoiceResponse
- GetFundingDrawInvoiceResponseData
- GetFundingDrawResponse
- GetFundingLineResponse
- GetFundingLineResponseData
- GetFundingLineResponseDataLine
- GetFundingLineResponseDataNextDue
- GetFundingLineResponseDataOverdue
- GetFundingLineResponseDataSchedule
- GetFundingOfferResponse
- GetFundingOfferResponseData
- GetFundingOfferResponseDataCriteria
- GetFundingOfferResponseDataLatestApplication
- GetFundingPoolResponse
- GetFundingSpendableResponse
- GetFundingSpendableResponseData
- GetFundingSpendableResponseDataUses
- GetFundingStatementResponse
- GetFundingStatementResponseData
- GetFundingStatementResponseDataOneOf1Line
- GetFundingStatementResponseDataOneOf1Statement
- GetFundingStatementResponseDataOneOf1StatementMovements
- GetGameEventSummaryResponse
- GetGameEventSummaryResponseData
- GetGameEventSummaryResponseDataOneOfPlace
- GetGameEventSummaryResponseDataOneOfRewards
- GetGameEventSummaryResponseDataOneOfRules
- GetGameEventSummaryResponseDataOneOfWinners
- GetGameHuntBuildResponse
- GetGameHuntBuildResponseData
- GetGameHuntBuildResponseDataDoc
- GetGameHuntBuildResponseDataDocObjects
- GetGameHuntBuildResponseDataPlace
- GetGameHuntBuildResponseDataProblemsItem
- GetGameHuntBuildResponseDataRewardsItem
- GetGameLeaderboardResponse
- GetGameLeaderboardResponseData
- GetGameLeaderboardResponseDataWeek
- GetGenderResponse
- GetGradingPriceBookResponse
- GetGradingPriceBookResponseGraders
- GetGradingWorthResponse
- GetGradingWorthResponseWorth
- GetGradingWorthResponseWorthGraders
- GetGroupBuyResponse
- GetGroupBuyResponseData
- GetGroupBuyResponseDataEvents
- GetGroupBuyResponseDataNext
- GetGroupBuyResponseDataParticipants
- GetGroupBuyResponseDataPlacement
- GetGroupBuyResponseDataProgress
- GetGroupBuyResponseDataTiers
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
- GetHomeResponsePullsShelf
- GetHomeResponsePullsShelfItems
- GetHomeResponseRoom
- GetHomeResponseRoomFloor
- GetHomeResponseSetWall
- GetHomeResponseSetWallChoices
- GetHomeResponseSetWallPieces
- GetHomeResponseVaultWall
- GetHomeResponseVaultWallUnits
- GetHubSetupResponse
- GetHubSetupResponseData
- GetHubSetupResponseDataSteps
- GetImportSiteResponse
- GetImportSiteResponseData
- GetImportSiteResponseDataSites
- GetInboxCannedResponseResponse
- GetInboxConversationMessageResponse
- GetInboxConversationMessageResponseMessages
- GetInboxCountResponse
- GetInboxCountResponseNeedsReply
- GetInboxCountResponseUnread
- GetInboxResponse
- GetInventoryAgingResponse
- GetInventoryAgingResponseData
- GetInventoryAgingResponseDataBuckets
- GetInventoryCatalogMatchResponse
- GetInventoryCatalogMatchResponseSuggestions
- GetInventoryLabelResponse
- GetInventoryLabelStatResponse
- GetInventoryLabelStatResponseLabels
- GetInventoryResponse
- GetInventoryResponsePlatformListings
- GetInventoryResponsePlatformListingsBundlePromo
- GetInventoryResponsePlatformListingsMeasurements
- GetInventoryResponsePlatformListingsPersonalization
- GetInventorySellThroughResponse
- GetInventorySellThroughResponseData
- GetInventorySellThroughResponseDataComparison
- GetInventorySellThroughResponseDataCurrent
- GetInventoryValueHistoryResponse
- GetInventoryValueHistoryResponseData
- GetInventoryValueHistoryResponseDataPoints
- GetListingAdListingItem
- GetListingAdListingResponse
- GetListingFacetResponse
- GetListingManagementResponse
- GetListingManagementResponseData
- GetListingPlatformRecloneResponse
- GetListingPlatformRecloneResponseData
- GetListingResponse
- GetListingResponsePlatformListings
- GetListingResponsePlatformListingsUnmatchedSale
- GetListingSkuExistResponse
- GetListingVariationGroupResponse
- GetListingVariationGroupResponseGroup
- GetLiveStreamRecapResponse
- GetLiveStreamRecapResponseData
- GetLookbookDesignResponse
- GetLookbookDesignResponseData
- GetLookbookDesignResponseDataDesign
- GetLookbookDesignResponseDataDesignPages
- GetLoyaltyClubResponse
- GetLoyaltyClubResponseData
- GetLoyaltyClubResponseDataTiers
- GetLoyaltyProgramMemberResponse
- GetLoyaltyProgramMemberResponseData
- GetLoyaltyProgramMemberResponseDataEvents
- GetLoyaltyProgramMemberResponseDataGrants
- GetLoyaltyProgramMemberResponseDataNext
- GetLoyaltyProgramMemberResponseDataOverride
- GetLoyaltyProgramMemberResponseDataStanding
- GetLoyaltyProgramMemberResponseDataTier
- GetLoyaltyProgramResponse
- GetLoyaltyProgramResponseData
- GetLoyaltyProgramResponseDataPaidMembership
- GetLoyaltyProgramResponseDataTiers
- GetMagicAutoSettingResponse
- GetMagicDraftResponse
- GetMagicDraftResponseDraft
- GetMainStageResponse
- GetMainStageResponseHouse
- GetMainStageResponseHouseNext
- GetMainStageResponseHouseNow
- GetMainStageResponseLive
- GetMainStageResponseLiveLineup
- GetMainStageResponseStream
- GetMainStageResponseStreamLot
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
- GetMembershipResponseBenefits
- GetMileageSummaryResponse
- GetMileageSummaryResponseRates
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
- GetOrderDeliveryPhotoResponse
- GetOrderDeliveryPhotoResponseData
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
- GetOrderOrderChatResponse
- GetOrderOrderChatResponseMessages
- GetOrderPlatformLabelOptionResponse
- GetOrderPlatformLabelOptionResponseOneOf1Services
- GetOrderPlatformLabelOptionResponseOneOfTiers
- GetOrderProofOfDeliveryResponse
- GetOrderProofOfDeliveryResponseScans
- GetOrderRefundOptionResponse
- GetOrderResponse
- GetOrderResponseAppShare
- GetOrderResponseLineItems
- GetOrderResponseTrackingHistory
- GetOrderResponseTrade
- GetOrderSalesTaxResponse
- GetOrderScanFormResponse
- GetOrderShipmentResponse
- GetOrderShipmentResponseData
- GetOrderWhatnotShipmentResponse
- GetOrderWhatnotShipmentResponseShipment
- GetOrderWhatnotShipmentResponseShipmentDimensionsIn
- GetPassportPrintResponse
- GetPassportPrintResponseData
- GetPassportResponse
- GetPassportResponseData
- GetPassportResponseDataItem
- GetPassportResponseDataListings
- GetPassportResponseDataScans
- GetPatScopeResponse
- GetPatternResponse
- GetPayoutConnectResponse
- GetPayoutConnectResponseData
- GetPayoutEstimateResponse
- GetPayoutGrossForNetResponse
- GetPayoutGrossForNetResponseData
- GetPayoutIdentityResponse
- GetPayoutIdentityResponseData
- GetPayoutIdentityResponseDataDueNow
- GetPayoutIdentityResponseDataErrors
- GetPayoutWalletResponse
- GetPayoutWalletResponseData
- GetPayoutWalletResponseDataOneOf1Balance
- GetPayoutWalletResponseDataOneOf1Instant
- GetPayoutWalletResponseDataOneOf1Methods
- GetPayoutWalletResponseDataOneOf1NextPayout
- GetPayoutWalletResponseDataOneOf1Schedule
- GetPayoutWalletResponseDataOneOf1Status
- GetPayoutWalletResponseDataOneOf1Transactions
- GetPetMineResponse
- GetPetMineResponsePets
- GetPlatformLimitResponse
- GetPlatformLimitResponseEbay
- GetPlatformLimitResponseEbaySellingCap
- GetPlatformLimitResponseEtsy
- GetPolicyResponse
- GetPolicyResponseShipping
- GetPricingSettingResponse
- GetPricingSettingResponseData
- GetPricingSoldCompResponse
- GetPricingSoldCompResponseData
- GetProductFeedReportResponse
- GetProductFeedReportResponseItems
- GetProductFeedReportResponseSample
- GetProductFeedReportResponseStats
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
- GetPublicCreatorRewardReconciliationResponse
- GetPublicCreatorRewardReconciliationResponseData
- GetPublicCreatorRewardReconciliationResponseDataInForce
- GetPublicCreatorRewardReconciliationResponseDataMonths
- GetPublicCreatorRewardReconciliationResponseDataMonthsFormula
- GetPublicCreatorRewardReconciliationResponseDataTotals
- GetPublicTemplateResponse
- GetPublicTemplateResponseTemplate
- GetReferencePostalResponse
- GetRentalCalendarResponse
- GetRentalCalendarResponseData
- GetRentalCalendarResponseDataItems
- GetRentalResponse
- GetRentalResponseData
- GetRentalResponseDataBuyout
- GetRentalResponseDataCancellation
- GetRentalResponseDataCancellationTiers
- GetRentalResponseDataEvents
- GetRentalResponseDataExtension
- GetRentalResponseDataExtensions
- GetRentalResponseDataPayments
- GetRentalResponseDataShipping
- GetRentalResponseDataTimeline
- GetRentalSettingResponse
- GetRentalSettingResponseData
- GetRentalSettingResponseDataDefaults
- GetRentalSettingResponseDataDefaultsBuyout
- GetRentalSettingResponseDataDefaultsCancellation
- GetRentalSettingResponseDataDefaultsDamageWaiver
- GetRentalSettingResponseDataDefaultsDeposit
- GetRentalSettingResponseDataDefaultsExtensions
- GetRentalSettingResponseDataDefaultsLastMinute
- GetRentalSettingResponseDataDefaultsLateEscalation
- GetRentalSettingResponseDataDefaultsLengthDiscounts
- GetRentalSettingResponseDataDefaultsPhotosOut
- GetRentalSettingResponseDataDefaultsPickup
- GetRentalSettingResponseDataDefaultsSeasonal
- GetReputationMineResponse
- GetReputationMineResponseTop
- GetReputationMineResponseTracks
- GetReputationMineResponseTracksHost
- GetReputationMineResponseUnlocks
- GetReputationMineResponseUnlocksHost
- GetReputationMineResponseUnlocksHostNext
- GetReputationResponse
- GetReputationResponseLevels
- GetRestockPromptSettingResponse
- GetReturnResponse
- GetSandboxResponse
- GetSandboxResponseSeller
- GetSandboxResponseSimulate
- GetSandboxResponseSimulateValuesItem
- GetSearchResponse
- GetSearchResponseGroups
- GetSearchResponseParsed
- GetSearchResponseParsedTypesItem
- GetSearchResponseTop
- GetShopLimitResponse
- GetShopLimitResponseData
- GetShopLimitResponseDataAppSpace
- GetShopLimitResponseDataPendingRequest
- GetShopLimitResponseDataSource
- GetShopLimitResponseDataStores
- GetShopListingProvenanceResponse
- GetShopListingProvenanceResponseProvenance
- GetShopListingProvenanceResponseProvenanceStories
- GetShowroomBillingResponse
- GetShowroomBillingResponseData
- GetShowroomCatalogResponse
- GetShowroomCatalogResponseData
- GetShowroomCatalogResponseDataFixtures
- GetShowroomCatalogResponseDataHolders
- GetShowroomCatalogResponseDataHoldersFitsItem
- GetShowroomCatalogResponseDataSizes
- GetShowroomPlacementResponse
- GetShowroomPlacementResponseData
- GetShowroomPlacementResponseDataAvailable
- GetShowroomResponse
- GetShowroomResponseData
- GetShowroomResponseDataRoom
- GetShowroomResponseDataRoomProps
- GetSizeSystemResponse
- GetSourceSyncLocationResponse
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
- GetSpatialPropertyResponseDataTenancies
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
- GetSpatialStreetPlotQuoteResponseDataClaim
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
- GetSponsoredAdBillingResponse
- GetSponsoredAdBillingResponseData
- GetSponsoredAdBillingResponseDataAccount
- GetSponsoredAdBillingResponseDataAccountRails
- GetSponsoredAdBillingResponseDataAccountRailsEffectiveItem
- GetSponsoredAdBillingResponseDataCharges
- GetSponsoredAdBillingResponseDataFunds
- GetSponsoredAdBillingResponseDataFundsCash
- GetSponsoredAdBillingResponseDataFundsCashAutoTopup
- GetSponsoredAdBillingResponseDataFundsCashPaymentMethod
- GetSponsoredAdBillingResponseDataFundsCbx
- GetSponsoredAdBillingResponseDataFundsRails
- GetSponsoredAdBillingResponseDataFundsRailsEffectiveItem
- GetSponsoredAdBillingResponseDataGrants
- GetSponsoredAdBillingResponseDataInvoices
- GetSponsoredAdBillingStatementResponse
- GetSponsoredAdBillingStatementResponseData
- GetSponsoredAdBillingStatementResponseDataCharges
- GetSponsoredAdBillingStatementResponseDataSpendByCampaign
- GetSponsoredAdBillingStatementResponseDataTopups
- GetSponsoredAdFundResponse
- GetSponsoredAdReportResponse
- GetSponsoredAdReportResponseData
- GetSponsoredAdReportResponseDataCampaignsItem
- GetSponsoredAdReportResponseDataCatalogs
- GetSponsoredAdReportResponseDataDaily
- GetStallBookingCounterResponse
- GetStallQuoteResponse
- GetStallQuoteResponseQuote
- GetStallQuoteResponseQuoteOwner
- GetStallQuoteResponseQuoteRailsItem
- GetStallQuoteResponseQuoteUnits
- GetStallStreetAerialResponse
- GetStallStreetAerialResponseDays
- GetStallStreetAerialResponseEvents
- GetStallStreetAerialResponseLinks
- GetStallStreetAerialResponseStreet
- GetStorefrontMerchResponse
- GetStorefrontMerchResponseData
- GetStorefrontMerchResponseDataBrands
- GetStorefrontMerchResponseDataCategories
- GetStorefrontMerchResponseDataConditions
- GetStorefrontMerchResponseDataPriceRangeCents
- GetStorefrontOnboardingResponse
- GetStorefrontOnboardingResponseRequirements
- GetStorefrontOnboardingResponseRequirementsMissingItem
- GetStorefrontOnboardingResponseSteps
- GetStorefrontOnboardingResponseStorefront
- GetStorefrontPolicyResponse
- GetStorefrontProfileResponse
- GetStorefrontProfileResponseData
- GetStorefrontProfileResponseDataProfile
- GetStorefrontProfileResponseDataProfileAllItems
- GetStorefrontProfileResponseDataProfileAllItemsProgramChipsItem
- GetStorefrontProfileResponseDataProfileAnnouncement
- GetStorefrontProfileResponseDataProfileBlocks
- GetStorefrontProfileResponseDataProfileShelves
- GetStorefrontRequirementResponse
- GetStorefrontResponse
- GetStorefrontResponseData
- GetStorefrontResponseDataSocialLinks
- GetStorefrontResponseDataTheme
- GetStorefrontSettingResponse
- GetStorefrontShippingResponse
- GetStorefrontShippingResponseData
- GetStorefrontShippingResponseDataShipFrom
- GetStorefrontSlugAvailableResponse
- GetStyleResponse
- GetTaxSalesTaxResponse
- GetTaxSalesTaxResponseCrosslyCollectsIn
- GetTaxSalesTaxResponseNotCollected
- GetTaxSalesTaxResponseTotals
- GetTaxScheduleCResponse
- GetTaxScheduleCResponseCents
- GetTaxScheduleCResponseCounts
- GetTaxScheduleCResponseExpenses
- GetTaxScheduleCResponsePartII
- GetTaxScheduleCResponsePartIII
- GetTaxonomyCategoryAspectResponse
- GetTaxonomyCategoryAspectResponseAspects
- GetTaxonomyCategoryChildrenResponse
- GetTaxonomyCategoryChildrenResponseChildren
- GetTaxonomyCategoryResponse
- GetTaxonomyRequiredFieldResponse
- GetTaxonomyRequiredFieldResponseInlineAspects
- GetTaxonomyRequiredFieldResponseRequiredFields
- GetTcgCreatorGameCollectionResponse
- GetTcgCreatorGamePopularityResponse
- GetTcgCreatorGamePopularityResponseData
- GetTcgCreatorGamePrintResponse
- GetTcgCreatorGamePrintResponseData
- GetTcgCreatorGamePrintResponseDataFiles
- GetTcgCreatorGameResponse
- GetTcgCreatorGameResponseData
- GetTcgCreatorGameResponseDataCards
- GetTcgCreatorGameResponseDataFrame
- GetTcgCreatorGameShelfResponse
- GetTcgCreatorGameShelfResponseData
- GetTcgCreatorGameShelfResponseDataCards
- GetTcgCreatorGameShelfResponseDataPack
- GetTcgLadderMeResponse
- GetTcgLadderMeResponseData
- GetTcgLadderMeResponseDataQueued
- GetTcgLadderResponse
- GetTcgLadderResponseData
- GetTcgLadderResponseDataRows
- GetTcgMatchResponse
- GetTcgMatchResponseData
- GetTcgMatchResponseDataMine
- GetTcgMatchResponseDataOpen
- GetTcgMeResponse
- GetTcgMeResponseData
- GetTcgMeResponseDataPacks
- GetTcgPrintResponse
- GetTcgPrintResponseData
- GetTcgPrintResponseDataFiles
- GetTeamResponse
- GetTeamResponseInvitations
- GetTeamResponseMembers
- GetToolboxAssetRatingResponse
- GetToolboxAssetRatingResponseData
- GetToolboxAssetRatingResponseDataBreakdown
- GetToolboxAssetRatingResponseDataItems
- GetToolboxAssetRatingResponseDataMine
- GetToolboxAssetResponse
- GetToolboxAssetResponseData
- GetToolboxAssetResponseDataPurchase
- GetToolboxAssetResponseDataVersions
- GetToolboxPurchaseResponse
- GetToolboxPurchaseResponseData
- GetToolboxPurchaseResponseDataAsset
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
- GetVaultAttestationResponseLatestOther
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
- GetVaultMarketAlertPrefResponseMatrixAccount
- GetVaultMarketAlertPrefResponseQuietHours
- GetVaultMarketAlertPrefResponseTelegram
- GetVaultMarketAuctionLotResponse
- GetVaultMarketAuctionLotResponseEvent
- GetVaultMarketAuctionLotResponseMe
- GetVaultMarketAuctionMineResponse
- GetVaultMarketAuctionMineResponseBidding
- GetVaultMarketAuctionMineResponseConsigned
- GetVaultMarketAutoBuyResponse
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
- GetVaultMarketCapacityResponsePerKeyItem
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
- GetVaultMarketDigestPreviewResponseLearn
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
- GetVaultMarketGradingOrderResponse
- GetVaultMarketGradingOrderResponseOrder
- GetVaultMarketGradingOrderResponseOrderCards
- GetVaultMarketGradingOrderResponseOrderCosts
- GetVaultMarketGradingOrderResponseOrderTimeline
- GetVaultMarketGradingOrderResponseOrderTracking
- GetVaultMarketGradingOrderResponseOrderTrackingSendIn
- GetVaultMarketGradingSignalResponse
- GetVaultMarketGradingSignalResponseCta
- GetVaultMarketGradingSignalResponseGraded
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
- GetVaultMarketHealthResponseHedges
- GetVaultMarketHealthResponseHedgesByKey
- GetVaultMarketHealthResponseHedgesProtectivePuts
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
- GetVaultMarketHoldingInventoryItemResponse
- GetVaultMarketHoldingWithdrawQuoteResponse
- GetVaultMarketHoldingWithdrawQuoteResponseStandard
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
- GetVaultMarketItemLocationResponse
- GetVaultMarketItemLocationResponseEligibility
- GetVaultMarketItemLocationResponseLocations
- GetVaultMarketItemLocationResponseLocationsByStatus
- GetVaultMarketItemLocationResponseSellFrom
- GetVaultMarketItemLocationResponseSellFromOptions
- GetVaultMarketItemLocationResponseUnits
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
- GetVaultMarketKeyStatResponseGemRate
- GetVaultMarketKeyStatResponseGemRateOneOf1Category
- GetVaultMarketKeyStatResponseGemRateOneOf1Item
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
- GetVaultMarketNavResponseOptions
- GetVaultMarketNavResponseOptionsPositions
- GetVaultMarketNavResponseTotals
- GetVaultMarketNavResponseTotalsAdministratorNav
- GetVaultMarketOptionAnalyticResponse
- GetVaultMarketOptionAnalyticResponseExpiries
- GetVaultMarketOptionAnalyticResponseExpiriesExpectedMove
- GetVaultMarketOptionAnalyticResponseExpiriesOpenInterest
- GetVaultMarketOptionAnalyticResponseHistoricalVol
- GetVaultMarketOptionAnalyticResponseHistoricalVolSeries
- GetVaultMarketOptionAnalyticResponseHistoricalVolWindows
- GetVaultMarketOptionAnalyticResponseIv
- GetVaultMarketOptionAnalyticResponseIvHistory
- GetVaultMarketOptionAnalyticResponsePutCall
- GetVaultMarketOptionAnalyticResponsePutCallTotals
- GetVaultMarketOptionAnalyticResponseSmile
- GetVaultMarketOptionAnalyticResponseSmileByStrike
- GetVaultMarketOptionAnalyticResponseSmileFitted
- GetVaultMarketOptionAnalyticResponseSmilePoints
- GetVaultMarketOptionAnalyticResponseSurface
- GetVaultMarketOptionAnalyticResponseSurfaceRows
- GetVaultMarketOptionAnalyticResponseUnderlying
- GetVaultMarketOptionAutoCloseResponse
- GetVaultMarketOptionAutoCloseResponseLimits
- GetVaultMarketOptionChainResponse
- GetVaultMarketOptionChainResponseExpiries
- GetVaultMarketOptionChainResponseRows
- GetVaultMarketOptionChainResponseRowsCall
- GetVaultMarketOptionChainResponseSeries
- GetVaultMarketOptionChainResponseUnderlying
- GetVaultMarketOptionChainResponseVenue
- GetVaultMarketOptionComboBookResponse
- GetVaultMarketOptionComboBookResponseTrades
- GetVaultMarketOptionComboRfqResponse
- GetVaultMarketOptionComboRfqResponseAnswers
- GetVaultMarketOptionContractBookResponse
- GetVaultMarketOptionContractBookResponseBids
- GetVaultMarketOptionContractBookResponseTrades
- GetVaultMarketOptionContractResponse
- GetVaultMarketOptionContractResponseSettlement
- GetVaultMarketOptionContractSettlementResponse
- GetVaultMarketOptionHedgeResponse
- GetVaultMarketOptionHedgeResponseCoveredCalls
- GetVaultMarketOptionHedgeResponseProtectivePuts
- GetVaultMarketOptionIvResponse
- GetVaultMarketOptionMarginResponse
- GetVaultMarketOptionMarginResponseOneOf1Last
- GetVaultMarketOptionMarginResponseOneOf1Margin
- GetVaultMarketOptionMarginResponseOneOf1MarginByUnderlying
- GetVaultMarketOptionPayoffResponse
- GetVaultMarketOptionPositionResponse
- GetVaultMarketOptionPositionResponsePositions
- GetVaultMarketOptionPositionResponsePositionsGreeks
- GetVaultMarketOptionPracticeResponse
- GetVaultMarketOptionPracticeResponsePositions
- GetVaultMarketOptionResponse
- GetVaultMarketOptionResponseProduct
- GetVaultMarketOptionResponseRuleBook
- GetVaultMarketOptionResponseVenue
- GetVaultMarketOptionRfqResponse
- GetVaultMarketOptionRiskResponse
- GetVaultMarketOptionRiskResponseBetaWeighted
- GetVaultMarketOptionRiskResponseByUnderlying
- GetVaultMarketOptionRiskResponseScenario
- GetVaultMarketOptionRiskResponseScenarioGrid
- GetVaultMarketOptionRiskResponseScenarioRanges
- GetVaultMarketOptionRiskResponseTotal
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
- GetVaultMarketPartnerMeResponseIdentity
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
- GetVaultMarketPortfolioHistoryResponseToday
- GetVaultMarketPortfolioMarginResponse
- GetVaultMarketPortfolioResponse
- GetVaultMarketPortfolioResponseHoldings
- GetVaultMarketPortfolioResponseOnLoan
- GetVaultMarketPortfolioResponseShares
- GetVaultMarketPortfolioResponseTotals
- GetVaultMarketPositionExitResponse
- GetVaultMarketPositionExitResponseExits
- GetVaultMarketPositionResponse
- GetVaultMarketPositionResponseAuctionsItem
- GetVaultMarketPositionResponseInstructions
- GetVaultMarketPositionResponseLegs
- GetVaultMarketPositionResponseLoans
- GetVaultMarketPositionResponseSplits
- GetVaultMarketPredictionAccountResponse
- GetVaultMarketPredictionAccountResponseAccount
- GetVaultMarketPredictionAccountResponseEligibility
- GetVaultMarketPredictionAccountResponsePractice
- GetVaultMarketPredictionBoardResponse
- GetVaultMarketPredictionBoardResponseRows
- GetVaultMarketPredictionDailyPriceResponse
- GetVaultMarketPredictionDailyPriceResponsePrices
- GetVaultMarketPredictionEventResponse
- GetVaultMarketPredictionEventResponseConversions
- GetVaultMarketPredictionEventResponseMarkets
- GetVaultMarketPredictionEventResponseRisk
- GetVaultMarketPredictionForecasterByIdResponse
- GetVaultMarketPredictionForecasterByIdResponseAllTime
- GetVaultMarketPredictionForecasterByIdResponseOpen
- GetVaultMarketPredictionForecasterByIdResponseRecent
- GetVaultMarketPredictionForecasterResponse
- GetVaultMarketPredictionLeaderboardResponse
- GetVaultMarketPredictionLeaderboardResponseRows
- GetVaultMarketPredictionLimitResponse
- GetVaultMarketPredictionLimitResponseHold
- GetVaultMarketPredictionLimitResponsePending
- GetVaultMarketPredictionMarketForecastResponse
- GetVaultMarketPredictionMarketHistoryResponse
- GetVaultMarketPredictionMarketHistoryResponseCandles
- GetVaultMarketPredictionMarketHistoryResponseNow
- GetVaultMarketPredictionMarketHistoryResponsePoints
- GetVaultMarketPredictionMarketResponse
- GetVaultMarketPredictionMarketResponseBook
- GetVaultMarketPredictionMarketResponseBookBids
- GetVaultMarketPredictionMarketResponsePracticeBook
- GetVaultMarketPredictionMarketResponseRules
- GetVaultMarketPredictionMarketResponseSettlements
- GetVaultMarketPredictionMarketResponseTrades
- GetVaultMarketPredictionMarketTradeResponse
- GetVaultMarketPredictionMarketTradeResponseItems
- GetVaultMarketPredictionMissionResponse
- GetVaultMarketPredictionMissionResponseMissions
- GetVaultMarketPredictionMissionResponseReward
- GetVaultMarketPredictionPaperResponse
- GetVaultMarketPredictionPaperResponseWorkingOrders
- GetVaultMarketPredictionQuoteResponse
- GetVaultMarketPredictionResponse
- GetVaultMarketPredictionResponseUnderlyings
- GetVaultMarketPredictionRulebookResponse
- GetVaultMarketPredictionRulebookResponseOneOf1Current
- GetVaultMarketPredictionRulebookResponseOneOfCurrent
- GetVaultMarketPredictionVenueResponse
- GetVaultMarketPredictionVenueResponseMissing
- GetVaultMarketPredictionWillItHitResponse
- GetVaultMarketPredictionWillItHitResponseExpiries
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
- GetVaultMarketProfileByHandleResponseOneOfRecentBuys
- GetVaultMarketProfileResponse
- GetVaultMarketProofOfReserveByDayResponse
- GetVaultMarketProofOfReserveByDayResponseAnchor
- GetVaultMarketProofOfReserveByDayResponseUnits
- GetVaultMarketProofOfReserveMeResponse
- GetVaultMarketProofOfReserveMeResponseEntries
- GetVaultMarketProofOfReserveMeResponseEntriesFields
- GetVaultMarketProofOfReserveResponse
- GetVaultMarketProofOfReserveResponseAnchoring
- GetVaultMarketProofOfReserveResponseHistory
- GetVaultMarketProofOfReserveResponseLatest
- GetVaultMarketProofOfReserveResponseLatestAnchor
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
- GetVaultMarketRiskReportResponseCounterparty
- GetVaultMarketRiskReportResponseCounterpartyOneOf1Insurance
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
- GetVaultMarketSettingResponse
- GetVaultMarketSettingResponseSettings
- GetVaultMarketShareBasketResponse
- GetVaultMarketShareBasketResponseMembers
- GetVaultMarketShareBasketResponseMine
- GetVaultMarketShareBasketResponseMineMembers
- GetVaultMarketShareInvestorResponse
- GetVaultMarketShareInvestorResponseInvestor
- GetVaultMarketShareInvestorResponseInvestorOfferings
- GetVaultMarketShareMeResponse
- GetVaultMarketShareMeResponseAutoInvest
- GetVaultMarketShareMeResponseDistributions
- GetVaultMarketShareMeResponseHoldings
- GetVaultMarketShareMeResponseHoldingsSeries
- GetVaultMarketShareMeResponseTotals
- GetVaultMarketShareMeResponseVenue
- GetVaultMarketSharePaperResponse
- GetVaultMarketSharePaperResponseHoldings
- GetVaultMarketSharePaperSeryBookResponse
- GetVaultMarketSharePaperSeryBookResponseHouse
- GetVaultMarketSharePreviewResponse
- GetVaultMarketSharePreviewResponseTerms
- GetVaultMarketShareResponse
- GetVaultMarketShareResponseRules
- GetVaultMarketShareSeryBookResponse
- GetVaultMarketShareSeryBookResponseBids
- GetVaultMarketShareSeryHistoryResponse
- GetVaultMarketShareSeryHistoryResponseCandles
- GetVaultMarketShareSeryPerkResponse
- GetVaultMarketShareSeryPerkResponseBadge
- GetVaultMarketShareSeryPerkResponseViewingDays
- GetVaultMarketShareSeryPerkResponseViewingDaysMyBooking
- GetVaultMarketShareSeryPerkResponseVisit
- GetVaultMarketShareSeryResponse
- GetVaultMarketShareSeryResponseBuyouts
- GetVaultMarketShareSeryResponseBuyoutsMyVote
- GetVaultMarketShareSeryResponseHolders
- GetVaultMarketShareSeryResponseHoldersDistribution
- GetVaultMarketShareSeryResponseMarket
- GetVaultMarketShareSeryResponseMarketIndicative
- GetVaultMarketShareSeryResponseMarketTrading
- GetVaultMarketShareSeryResponseMy
- GetVaultMarketShareSeryResponseMySubscriptions
- GetVaultMarketShareSeryResponsePerks
- GetVaultMarketShareSeryResponsePerksViewingDays
- GetVaultMarketShareSeryRoomResponse
- GetVaultMarketStatementByMonthResponse
- GetVaultMarketStatementByMonthResponseOneOf1Cash
- GetVaultMarketStatementByMonthResponseOneOf1Fees
- GetVaultMarketStatementByMonthResponseOneOf1Holdings
- GetVaultMarketStatementByMonthResponseOneOf1Summary
- GetVaultMarketStatementByMonthResponseOneOf1SummaryBought
- GetVaultMarketStatementByMonthResponseOneOf2Cash
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
- GetVaultMarketSupplyShipmentResponse
- GetVaultMarketSupplyShipmentResponseDropoffPartner
- GetVaultMarketSupplyShipmentResponseItems
- GetVaultMarketTaxLossSuggestionResponse
- GetVaultMarketTaxLossSuggestionResponseRealisedThisYear
- GetVaultMarketTaxLossSuggestionResponseSuggestions
- GetVaultMarketTaxLossSuggestionResponseSuggestionsLot
- GetVaultMarketTaxLossSuggestionResponseTotals
- GetVaultMarketTaxOptionResponse
- GetVaultMarketTaxOptionResponseDisposals
- GetVaultMarketTaxOptionResponseOpenAtYearEnd
- GetVaultMarketTaxOptionResponseTotals
- GetVaultMarketTaxOptionResponseTotalsSection1256
- GetVaultMarketTaxPredictionResponse
- GetVaultMarketTaxPredictionResponseRows
- GetVaultMarketTaxPredictionResponseTotals
- GetVaultMarketTaxResponse
- GetVaultMarketTaxResponseFiles
- GetVaultMarketTaxResponseGiftsOut
- GetVaultMarketTaxResponseIncome
- GetVaultMarketTaxResponseOptions
- GetVaultMarketTaxResponsePositions
- GetVaultMarketTaxResponsePredictions
- GetVaultMarketTaxResponsePurchases
- GetVaultMarketTaxResponseSales
- GetVaultMarketTaxResponseShares
- GetVaultMarketTaxResponseSharesOpen
- GetVaultMarketTaxResponseSharesSales
- GetVaultMarketTaxResponseSharesTotals
- GetVaultMarketTaxResponseTotals
- GetVaultMarketTaxResponseTotalsPurchases
- GetVaultMarketTaxResponseTotalsSales
- GetVaultMarketTaxShareResponse
- GetVaultMarketTcaByOrderIdResponse
- GetVaultMarketTcaByOrderIdResponseArrival
- GetVaultMarketTcaByOrderIdResponseImplementationShortfall
- GetVaultMarketTcaByOrderIdResponseSlippage
- GetVaultMarketTcaResponse
- GetVaultMarketTcaResponseItems
- GetVaultMarketTcaResponseOptions
- GetVaultMarketTcaResponseOptionsFills
- GetVaultMarketTcaResponseSummary
- GetVaultMarketTodMyClaimResponse
- GetVaultMarketTodMyClaimResponseClaims
- GetVaultMarketTodMyClaimResponseClaimsPlanned
- GetVaultMarketTodMyClaimResponseGate
- GetVaultMarketTodResponse
- GetVaultMarketTodResponseBeneficiaries
- GetVaultMarketTodResponseClaims
- GetVaultMarketTodResponseUnits
- GetVaultMarketTodResponseVaultShares
- GetVaultMarketTodResponseVaultSharesLines
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
- GetVaultMarketVaultSuggestionItemResponseSuggestionFractionalize
- GetVaultMarketVaultSuggestionItemResponseSuggestionInstantExit
- GetVaultMarketVaultSuggestionItemResponseSuggestionMarket
- GetVaultMarketVaultSuggestionItemResponseSuggestionParts
- GetVaultMarketVaultSuggestionItemResponseSuggestionVaultFee
- GetVaultMarketWidgetIndexResponse
- GetVaultMarketWidgetMarkResponse
- GetVaultMarketWidgetMarkResponsePoints
- GetVaultMarketWidgetSummaryResponse
- GetVaultMarketWidgetSummaryResponseLinks
- GetVaultMarketWidgetSummaryResponseMovers
- GetVaultMarketWidgetSummaryResponseMoversItems
- GetVaultMarketWidgetSummaryResponsePortfolio
- GetVaultMarketWidgetSummaryResponseWatch
- GetVaultMarketWorldFloorBoardResponse
- GetVaultMarketWorldFloorBoardResponseHeat
- GetVaultMarketWorldFloorBoardResponseOdds
- GetVaultMarketWorldFloorBoardResponseShares
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
- GetVaultMarketWorthVaultResponseToday
- GetVaultReceiptResponse
- GetVaultReceiptResponseChain
- GetVaultReceiptResponseEvents
- GetVaultReceiptTokenByMintResponse
- GetVaultReceiptTokenResponse
- GetVaultReceiptTokenResponseEvents
- GetWalletCrosslyResponse
- GetWalletCrosslyResponseData
- GetWalletCrosslyResponseDataClient
- GetWeb3AuctionResponse
- GetWeb3AuctionResponseAuction
- GetWeb3BalanceResponse
- GetWeb3BalanceResponseData
- GetWeb3BalanceResponseDataConnected
- GetWeb3BalanceResponseDataCredit
- GetWeb3BalanceResponseDataTotals
- GetWeb3BalanceResponseDataWallets
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
- GetWeb3CreatorResponseHolders
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
- GetWeb3LaunchStatResponse
- GetWeb3LaunchStatResponseData
- GetWeb3LaunchStatResponseDataLaunch
- GetWeb3LaunchToolResponse
- GetWeb3LaunchToolResponseAllowlist
- GetWeb3LaunchToolResponseArt
- GetWeb3LaunchToolResponseRoyalties
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
- GetWeb3StakingResponse
- GetWeb3StakingResponseData
- GetWeb3StakingResponseDataHistory
- GetWeb3StakingResponseDataTiers
- GetWeb3StoreWalletNftResponse
- GetWeb3StoreWalletNftResponseData
- GetWeb3StoreWalletNftResponseDataProperty
- GetWeb3StoreWalletNftResponseDataReceipts
- GetWeb3StoreWalletNftResponseDataReceiptsToken
- GetWeb3StoreWalletNftResponseDataWallets
- GetWeb3TokenResponse
- GetWeb3TokenResponseCollection
- GetWeb3TokenResponseElsewhere
- GetWeb3TokenResponseTraits
- GetWeb3WalletHoldingResponse
- GetWeb3WalletHoldingResponseData
- GetWeb3WalletHoldingResponseDataChains
- GetWeb3WalletHoldingResponseDataHoldings
- GetWholesaleCatalogLineSheetResponse
- GetWholesaleCatalogLineSheetResponseData
- GetWholesaleCatalogLineSheetResponseDataCatalog
- GetWholesaleCatalogLineSheetResponseDataItems
- GetWholesaleCatalogLineSheetResponseDataItemsTerms
- GetWholesaleCatalogLineSheetResponseDataSeller
- GetWholesaleCatalogShareResponse
- GetWholesaleCatalogShareResponseData
- GetWholesaleCategoryResponse
- GetWholesaleCategoryResponseData
- GetWholesaleCategoryResponseDataItems
- GetWholesaleDropResponse
- GetWholesaleDropResponseData
- GetWholesaleDropResponseDataReservations
- GetWholesaleOverviewResponse
- GetWholesaleOverviewResponseData
- GetWholesaleOverviewResponseDataCounts
- GetWholesaleOverviewResponseDataKpis
- GetWholesaleOverviewResponseDataProfile
- GetWholesaleOverviewResponseDataProfileBuyerRequirements
- GetWholesaleOverviewResponseDataProfileInvoiceSettings
- GetWholesaleOverviewResponseDataProfileInvoiceSettingsResolved
- GetWholesaleOverviewResponseDataProfileShipsFrom
- GetWholesaleProfileResponse
- GetWholesaleProfileResponseData
- GetWholesaleProfileResponseDataBuyerRequirements
- GetWholesaleProfileResponseDataBuyerRequirementsQuestions
- GetWholesaleReserveResponse
- GetWholesaleReserveResponseData
- GetWholesaleTermPreviewResponse
- GetWholesaleTermPreviewResponseData
- GetWorkflowCatalogResponse
- GetWorkflowCatalogResponseData
- GetWorkflowCatalogResponseDataConditionOperators
- GetWorkflowCatalogResponseDataConditionOperatorsAppliesToItem
- GetWorkflowCatalogResponseDataExpressionHelpers
- GetWorkflowCatalogResponseDataNodes
- GetWorkflowCatalogResponseDataNodesTrigger
- GetWorkflowChainResponse
- GetWorkflowChainResponseSteps
- GetWorkflowExportResponse
- GetWorkflowExportResponseGraph
- GetWorkflowExportResponseGraphEdges
- GetWorkflowExportResponseGraphNodes
- GetWorkflowExportResponseGraphNotes
- GetWorkflowExportResponseGraphSettings
- GetWorkflowExportResponseGraphSettingsLegacy
- GetWorkflowResponse
- GetWorkflowResponseData
- GetWorkflowRunNodeItem
- GetWorkflowRunNodeItemError
- GetWorkflowRunNodeResponse
- GetWorkflowRunResponse
- GetWorkflowRunResponseData
- GetWorkflowRunResponseDataGraph
- GetWorkflowRunResponseDataNodeRuns
- GetWorkflowRunResponseDataRun
- GetWorldArcadeResponse
- GetWorldArcadeResponseData
- GetWorldArcadeResponseDataCabinets
- GetWorldArcadeResponseDataCabinetsPiece
- GetWorldArcadeResponseDataScores
- GetWorldAssistantStatusResponse
- GetWorldAssistantStatusResponseData
- GetWorldAssistantStatusResponseDataAllowance
- GetWorldAssistantStatusResponseDataModels
- GetWorldAttendantResponse
- GetWorldAttendantResponseData
- GetWorldAttendantResponseDataAiKey
- GetWorldAttendantResponseDataAttendant
- GetWorldAttendantResponseDataAttendantAllowedActions
- GetWorldAttendantResponseDataAttendantAllowedActionsHolds
- GetWorldAttendantResponseDataAttendantAllowedActionsOffers
- GetWorldAttendantResponseDataAttendantAppearance
- GetWorldAttendantResponseDataAttendantAppearanceColours
- GetWorldAttendantResponseDataAttendantHours
- GetWorldAttendantResponseDataAttendantHoursDays
- GetWorldAttendantResponseDataAttendantKnowledge
- GetWorldAttendantResponseDataAttendantLanguagesItem
- GetWorldAttendantResponseDataAttendantPersonality
- GetWorldAuroraResponse
- GetWorldAuroraResponseData
- GetWorldAuroraResponseDataFamilies
- GetWorldAuroraResponseDataSales
- GetWorldAvatarBasicResponse
- GetWorldAvatarBasicResponseData
- GetWorldAvatarBasicResponseDataColours
- GetWorldAvatarBasicResponseDataDefault
- GetWorldAvatarBasicResponseDataGarments
- GetWorldAvatarBasicResponseDataOptionalItem
- GetWorldAvatarBasicResponseDataWornSlot
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
- GetWorldBadgeMineResponse
- GetWorldBadgeMineResponseData
- GetWorldBadgeMineResponseDataItems
- GetWorldBadgeMineResponseDataItemsGame
- GetWorldBillingRailResponse
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
- GetWorldChartResponse
- GetWorldChartResponseData
- GetWorldChartResponseDataEntries
- GetWorldChestResponse
- GetWorldChestResponseData
- GetWorldChestResponseDataMine
- GetWorldCollectionCapabilityResponse
- GetWorldContestMineResponse
- GetWorldContestMineResponseData
- GetWorldContestMineResponseDataEntries
- GetWorldContestMineResponseDataPrizes
- GetWorldControlResponse
- GetWorldControlResponseData
- GetWorldControlResponseDataPrefs
- GetWorldConventionExhibitResponse
- GetWorldConventionExhibitResponseConvention
- GetWorldConventionExhibitResponseMine
- GetWorldConventionExhibitResponseRails
- GetWorldConventionExhibitResponseRailsEffectiveItem
- GetWorldConventionExhibitResponseTiers
- GetWorldConventionHallResponse
- GetWorldConventionHallResponseContext
- GetWorldConventionHallResponseContextTiers
- GetWorldConventionHallResponseDoc
- GetWorldConventionHallResponseDocObjects
- GetWorldConventionHallResponseProblems
- GetWorldConventionManageResponse
- GetWorldConventionManageResponseConvention
- GetWorldConventionManageResponseSellers
- GetWorldConventionManageResponseTiers
- GetWorldConventionManageResponseVenue
- GetWorldConventionManageResponseWalkIn
- GetWorldConventionResponse
- GetWorldConventionStatusPageResponse
- GetWorldConventionStatusPageResponseAttendance
- GetWorldConventionStatusPageResponseBooths
- GetWorldConventionStatusPageResponseMoney
- GetWorldConventionStatusPageResponseSales
- GetWorldConventionStatusPageResponseSellers
- GetWorldCosmBalanceResponse
- GetWorldCosmBalanceResponseData
- GetWorldCrewResponse
- GetWorldCrewResponseData
- GetWorldCrewResponseDataCrew
- GetWorldCrewResponseDataMembers
- GetWorldDiscoverRowResponse
- GetWorldDiscoverRowResponseData
- GetWorldDiscoverRowResponseDataRows
- GetWorldDmItem
- GetWorldDmResponse
- GetWorldEarningPayoutAccountResponse
- GetWorldEarningPayoutAccountResponseData
- GetWorldEarningResponse
- GetWorldEarningResponseData
- GetWorldEarningResponseDataBalances
- GetWorldEarningResponseDataEligibility
- GetWorldEconomyResponse
- GetWorldEconomyResponseData
- GetWorldEconomyResponseDataFormula
- GetWorldEconomyResponseDataHistory
- GetWorldEconomyResponseDataScheduled
- GetWorldEconomyResponseDataTerms
- GetWorldEmoteShowableResponse
- GetWorldEmoteShowableResponseData
- GetWorldEmoteShowableResponseDataListings
- GetWorldEmoteShowableResponseDataListingsRef
- GetWorldExperienceAccessLimitResponse
- GetWorldExperienceAccessLimitResponseData
- GetWorldExperienceAdReportResponse
- GetWorldExperienceAdReportResponseReport
- GetWorldExperienceAdReportResponseReportDaily
- GetWorldExperienceAdReportResponseReportTotals
- GetWorldExperienceAdResponse
- GetWorldExperienceAdResponseAds
- GetWorldExperienceAdResponseAdsSlots
- GetWorldExperienceAdSettingResponse
- GetWorldExperienceAdSettingResponseSettings
- GetWorldExperienceAlertSettingResponse
- GetWorldExperienceAlertSettingResponseData
- GetWorldExperienceAlertSettingResponseDataRules
- GetWorldExperienceAnalyticResponse
- GetWorldExperienceAnalyticResponseData
- GetWorldExperienceAnalyticResponseDataOneOf1ByPlatformItem
- GetWorldExperienceAnalyticResponseDataOneOf1ByRegionItem
- GetWorldExperienceAnalyticResponseDataOneOf1BySourceItem
- GetWorldExperienceAnalyticResponseDataOneOf1Series
- GetWorldExperienceAnalyticResponseDataOneOf1SessionLength
- GetWorldExperienceAnalyticResponseDataOneOf2Curve
- GetWorldExperienceAnalyticResponseDataOneOf2Grid
- GetWorldExperienceAnalyticResponseDataOneOf3Ledger
- GetWorldExperienceAnalyticResponseDataOneOf3Lifetime
- GetWorldExperienceAnalyticResponseDataOneOf3Products
- GetWorldExperienceAnalyticResponseDataOneOf3Series
- GetWorldExperienceAnalyticResponseDataOneOf3Totals
- GetWorldExperienceAnalyticResponseDataOneOf4Funnels
- GetWorldExperienceAnalyticResponseDataOneOf5Currencies
- GetWorldExperienceAnalyticResponseDataOneOf5CurrenciesInflation
- GetWorldExperienceAnalyticResponseDataOneOf5CurrenciesTotals
- GetWorldExperienceAnalyticResponseDataOneOf6ClientFps
- GetWorldExperienceAnalyticResponseDataOneOf6Series
- GetWorldExperienceAnalyticResponseDataOneOf6TopErrors
- GetWorldExperienceAnalyticResponseDataOneOf6Totals
- GetWorldExperienceAnalyticResponseDataOneOf7Events
- GetWorldExperienceAnalyticResponseDataOneOf8Prices
- GetWorldExperienceAnalyticResponseDataOneOf8Regions
- GetWorldExperienceAnalyticResponseDataOneOf8Series
- GetWorldExperienceAnalyticResponseDataOneOf8Totals
- GetWorldExperienceAnalyticResponseDataOneOf8TotalsCost
- GetWorldExperienceAnalyticResponseDataOneOfAlerts
- GetWorldExperienceAnalyticResponseDataOneOfLive
- GetWorldExperienceAnalyticResponseDataOneOfPayout
- GetWorldExperienceAnalyticResponseDataOneOfRetention
- GetWorldExperienceAnalyticResponseDataOneOfSeries
- GetWorldExperienceAnalyticResponseDataOneOfTotals
- GetWorldExperienceBadgeResponse
- GetWorldExperienceBadgeResponseData
- GetWorldExperienceBadgeResponseDataLimits
- GetWorldExperienceBanResponse
- GetWorldExperienceChatSettingResponse
- GetWorldExperienceChatSettingResponseData
- GetWorldExperienceDataUsageResponse
- GetWorldExperienceDataUsageResponseData
- GetWorldExperienceDataUsageResponseDataDatastore
- GetWorldExperienceDataUsageResponseDataMemory
- GetWorldExperienceDataUsageResponseDataMessaging
- GetWorldExperienceDatastoreEntryResponse
- GetWorldExperienceDatastoreEntryResponseData
- GetWorldExperienceExperimentResponse
- GetWorldExperienceExperimentResponseData
- GetWorldExperienceExperimentResponseDataMetrics
- GetWorldExperienceExperimentResponseDataSampleSize
- GetWorldExperienceGalleryResponse
- GetWorldExperienceGalleryResponseData
- GetWorldExperienceGalleryResponseDataLimits
- GetWorldExperienceHttpResponse
- GetWorldExperienceHttpResponseData
- GetWorldExperienceHttpResponseDataLimits
- GetWorldExperienceHttpResponseDataSecrets
- GetWorldExperienceMaturityResponse
- GetWorldExperienceMaturityResponseData
- GetWorldExperienceMaturityResponseDataPending
- GetWorldExperienceMaturityResponseDataPublished
- GetWorldExperienceMaturityResponseDataQuestions
- GetWorldExperienceMemoryMapByKeyResponse
- GetWorldExperienceMemoryMapItem
- GetWorldExperienceMemoryMapResponse
- GetWorldExperienceMemoryQueueResponse
- GetWorldExperienceMemoryQueueResponseData
- GetWorldExperienceModerationAppealResponse
- GetWorldExperienceModerationAppealResponseData
- GetWorldExperienceModerationAppealResponseDataTargets
- GetWorldExperienceModerationAppealResponseDataTargetsAppeal
- GetWorldExperienceModerationResponse
- GetWorldExperienceModerationResponseData
- GetWorldExperienceModerationResponseDataActions
- GetWorldExperienceModerationResponseDataLatestReview
- GetWorldExperienceModerationResponseDataScan
- GetWorldExperienceModerationResponseDataScanAssetFindings
- GetWorldExperienceModerationResponseDataScanFindings
- GetWorldExperienceModerationResponseDataStrikes
- GetWorldExperienceModerationResponseDataTrustedLane
- GetWorldExperienceNotificationOptInResponse
- GetWorldExperienceNotificationOptInResponseData
- GetWorldExperienceNotificationReportResponse
- GetWorldExperienceNotificationReportResponseData
- GetWorldExperienceNotificationReportResponseDataByReason
- GetWorldExperienceNotificationReportResponseDataByTemplate
- GetWorldExperienceOrderedItem
- GetWorldExperienceOrderedResponse
- GetWorldExperiencePlaceCollabOpResponse
- GetWorldExperiencePlaceCollabOpResponseData
- GetWorldExperiencePlaceCollabOpResponseDataFrames
- GetWorldExperiencePlaceCollabOpResponseDataFramesBy
- GetWorldExperiencePlaceCollabResponse
- GetWorldExperiencePlaceCollabResponseData
- GetWorldExperiencePlaceCollabResponseDataDoc
- GetWorldExperiencePlaceCollabResponseDataYou
- GetWorldExperiencePlaceDraftResponse
- GetWorldExperiencePlaceDraftResponseData
- GetWorldExperiencePlaceDraftResponseDataProject
- GetWorldExperiencePlaceDraftResponseDataProjectPlace
- GetWorldExperiencePlaceDraftResponseDataProjectWorld
- GetWorldExperiencePlaceDraftResponseDataProjectWorldHttp
- GetWorldExperiencePlaceStudioFindResponse
- GetWorldExperiencePlaceStudioFindResponseData
- GetWorldExperiencePlaceStudioFindResponseDataItems
- GetWorldExperiencePlaceStudioInstanceResponse
- GetWorldExperiencePlaceStudioInstanceResponseData
- GetWorldExperiencePlaceStudioInstanceResponseDataChildren
- GetWorldExperiencePlaceStudioOutputResponse
- GetWorldExperiencePlaceStudioOutputResponseData
- GetWorldExperiencePlaceStudioOutputResponseDataLines
- GetWorldExperiencePlaceStudioProblemResponse
- GetWorldExperiencePlaceStudioProblemResponseData
- GetWorldExperiencePlaceStudioScriptResponse
- GetWorldExperiencePlaceStudioScriptResponseData
- GetWorldExperiencePlaceStudioScriptResponseDataDraft
- GetWorldExperiencePlaceStudioSnapshotResponse
- GetWorldExperiencePlaceStudioSnapshotResponseData
- GetWorldExperiencePlaceStudioSnapshotResponseDataBounds
- GetWorldExperiencePlaceStudioTreeResponse
- GetWorldExperiencePlaceStudioTreeResponseData
- GetWorldExperiencePlaceStudioTreeResponseDataNodes
- GetWorldExperienceResponse
- GetWorldExperienceResponseData
- GetWorldExperienceRevenueResponse
- GetWorldExperienceRevenueResponseData
- GetWorldExperienceRewardResponse
- GetWorldExperienceRewardResponseData
- GetWorldExperienceRewardResponseDataLimits
- GetWorldExperienceRewardResponseDataRates
- GetWorldExperienceRewardResponseDataToday
- GetWorldExperienceShopResponse
- GetWorldExperienceShopResponseData
- GetWorldExperienceShowcaseResponse
- GetWorldExperienceShowcaseResponseData
- GetWorldExperienceShowcaseResponseDataShowcase
- GetWorldExperienceSplitResponse
- GetWorldExperienceSplitResponseData
- GetWorldExperienceSplitResponseDataCurrent
- GetWorldExperienceSplitResponseDataCurrentShares
- GetWorldExperienceSplitResponseDataHistory
- GetWorldExperienceSplitResponseDataScheduled
- GetWorldExperienceStoreResponse
- GetWorldExperienceStoreResponseData
- GetWorldExperienceStoreResponseDataItems
- GetWorldExperienceTeamResponse
- GetWorldExperienceTeamResponseData
- GetWorldExperienceTeamResponseDataLimit
- GetWorldExperienceTeamResponseDataYou
- GetWorldExperienceTeamResponseDataYouPermissionsItem
- GetWorldFireflyResponse
- GetWorldFireflyResponseData
- GetWorldFireflyResponseDataMine
- GetWorldFitStatResponse
- GetWorldFitStatResponseData
- GetWorldFitValueResponse
- GetWorldFitValueResponseData
- GetWorldFriendPlayingResponse
- GetWorldFriendPlayingResponseData
- GetWorldFriendPlayingResponseDataFriends
- GetWorldFriendPlayingResponseDataFriendsPlaying
- GetWorldGameBadgeResponse
- GetWorldGameBadgeResponseData
- GetWorldGameBadgeResponseDataItems
- GetWorldGameByGameResponse
- GetWorldGameByGameResponseData
- GetWorldGameByGameResponseDataArt
- GetWorldGameByGameResponseDataArtTrailer
- GetWorldGameByGameResponseDataCreator
- GetWorldGameByGameResponseDataGallery
- GetWorldGameByGameResponseDataRating
- GetWorldGameByGameResponseDataStore
- GetWorldGameByGameResponseDataUpdates
- GetWorldGameLeaderboardResponse
- GetWorldGameLeaderboardResponseData
- GetWorldGameLeaderboardResponseDataScoring
- GetWorldGameLeaderboardResponseDataWeek
- GetWorldGameMineAssetsUsedResponse
- GetWorldGameMineAssetsUsedResponseData
- GetWorldGameMineAssetsUsedResponseDataItems
- GetWorldGameMineAssetsUsedResponseDataVersions
- GetWorldGameMineResponse
- GetWorldGameMineResponseData
- GetWorldGameMineResponseDataExperience
- GetWorldGameMineResponseDataLatestPublish
- GetWorldGameMineResponseDataModeration
- GetWorldGameMineResponseDataNextSteps
- GetWorldGameMineResponseDataTabsItem
- GetWorldGameMineResponseDataTimeline
- GetWorldGamePackageResponse
- GetWorldGamePackageResponseData
- GetWorldGamePackageResponseDataStats
- GetWorldGamePackageResponseDataStatsReports
- GetWorldGamePackageResponseDataStatsRewards
- GetWorldGamePackageResponseDataStatsSales
- GetWorldGamePackageResponseDataVersions
- GetWorldGamePackageStatResponse
- GetWorldGamePackageStatResponseData
- GetWorldGamePackageStatResponseDataDaily
- GetWorldGamePackageStatResponseDataTestImpressions
- GetWorldGamePackageStatResponseDataTotals
- GetWorldGamePackageVersionResponse
- GetWorldGamePackageVersionResponseData
- GetWorldGamePackageVersionResponseDataVersions
- GetWorldGameResponse
- GetWorldGameResponseData
- GetWorldGameResponseDataContests
- GetWorldGameResponseDataContestsEntryItem
- GetWorldGameResponseDataPiece
- GetWorldGameResponseDataPlacesItem
- GetWorldGameResponseDataRewards
- GetWorldGameResponseDataStore
- GetWorldGameServerResponse
- GetWorldGameServerResponseData
- GetWorldGameServerResponseDataPrivateServers
- GetWorldGameServerResponseDataServers
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
- GetWorldLauncherResponse
- GetWorldLauncherResponseData
- GetWorldLauncherResponseDataPortals
- GetWorldLinkSellerItem
- GetWorldManageLedgerResponse
- GetWorldManageLedgerResponseData
- GetWorldManageLedgerResponseDataByKind
- GetWorldManageLedgerResponseDataLines
- GetWorldManageOverviewResponse
- GetWorldManageOverviewResponseData
- GetWorldManageOverviewResponseDataConventions
- GetWorldManageOverviewResponseDataConventionsNext
- GetWorldManageOverviewResponseDataMoney
- GetWorldManageOverviewResponseDataProperty
- GetWorldManageOverviewResponseDataShop
- GetWorldManageOverviewResponseDataShopAddresses
- GetWorldManageOverviewResponseDataStaff
- GetWorldManageOverviewResponseDataStaffNextShift
- GetWorldManageOverviewResponseDataStalls
- GetWorldManageOverviewResponseDataStallsNext
- GetWorldManageOverviewResponseDataVisitors
- GetWorldManageVisitorResponse
- GetWorldManageVisitorResponseData
- GetWorldManageVisitorResponseDataDaily
- GetWorldManageVisitorResponseDataShop
- GetWorldManageVisitorResponseDataTopItems
- GetWorldManageVisitorResponseDataWants
- GetWorldMarketResponse
- GetWorldMarketResponseData
- GetWorldMarketResponseDataHistory
- GetWorldMarketResponseDataNeighbours
- GetWorldMarketResponseDataPhoto
- GetWorldMarketResponseDataSale
- GetWorldMarketResponseDataStreet
- GetWorldMarketResponseDataTraffic
- GetWorldMatureResponse
- GetWorldMatureResponseData
- GetWorldMatureResponseDataAgeCheck
- GetWorldMatureResponseDataSteps
- GetWorldMePrefResponse
- GetWorldMePrefResponseData
- GetWorldNeighbourhoodClaimResponse
- GetWorldNeighbourhoodClaimResponseData
- GetWorldPackageResponse
- GetWorldPackageResponseData
- GetWorldPackageResponseDataVersions
- GetWorldPackageVersionResponse
- GetWorldPackageVersionResponseData
- GetWorldParentalMeResponse
- GetWorldParentalMeResponseData
- GetWorldParentalMeResponseDataControls
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
- GetWorldPlaceLiveResponseDataStream
- GetWorldPlaceSellerResponse
- GetWorldPlaceSellerResponseData
- GetWorldPlaceShopPetResponse
- GetWorldPlayerBadgeResponse
- GetWorldPlayerBadgeResponseData
- GetWorldPlazaResponse
- GetWorldPlazaResponseData
- GetWorldPlazaResponseDataBoards
- GetWorldPlazaResponseDataFeatured
- GetWorldPlazaResponseDataRing
- GetWorldPolicyMeResponse
- GetWorldPolicyMeResponseData
- GetWorldPolicyMeResponseDataMatureStepsItem
- GetWorldPolicyMeResponseDataPlayStepsItem
- GetWorldPolicyMeResponseDataReasons
- GetWorldPropertyPlotResponse
- GetWorldPropertyPlotResponseData
- GetWorldPropertyPlotResponseDataLetting
- GetWorldPropertyPlotResponseDataShowroom
- GetWorldPropertyPlotResponseDataValue
- GetWorldPropertyRentalResponse
- GetWorldPropertyRentalResponseData
- GetWorldPropertyRentalResponseDataPayments
- GetWorldPropertyRentalResponseDataPhoto
- GetWorldPropertyRentalResponseDataRender
- GetWorldPropertyRentalResponseDataRenderShop
- GetWorldPropertyRentalResponseDataTerms
- GetWorldPulseResponse
- GetWorldPulseResponseData
- GetWorldPulseResponseDataCares
- GetWorldPurchaseResponse
- GetWorldPurchaseResponseData
- GetWorldPurchaseResponseDataExperience
- GetWorldPurchaseResponseDataProduct
- GetWorldRailResponse
- GetWorldRailResponseEffectiveItem
- GetWorldRatingQuestionnaireResponse
- GetWorldRatingQuestionnaireResponseData
- GetWorldRatingQuestionnaireResponseDataMatureRules
- GetWorldRatingQuestionnaireResponseDataMatureRulesRegions
- GetWorldRatingQuestionnaireResponseDataRatings
- GetWorldRewardTopupResponse
- GetWorldRewardTopupResponseData
- GetWorldRoomFunnelResponse
- GetWorldRoomFunnelResponseData
- GetWorldSearchResponse
- GetWorldSearchResponseData
- GetWorldSearchResponseDataResults
- GetWorldSearchResponseDataSuggestion
- GetWorldSearchResponseDataSuggestionEntries
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
- GetWorldStaffPostingResponse
- GetWorldStaffReputationResponse
- GetWorldStaffReputationResponseData
- GetWorldStaffReputationResponseDataDimensions
- GetWorldStaffReputationResponseDataRatings
- GetWorldStaffReputationResponseDataScore
- GetWorldStreetFundResponse
- GetWorldStreetFundResponseData
- GetWorldStreetFundResponseDataNext
- GetWorldStreetFundResponseDataUnlockedItem
- GetWorldStreetOwnedResponse
- GetWorldStreetOwnedResponseData
- GetWorldStreetOwnedResponseDataFund
- GetWorldStreetOwnedResponseDataFundTiers
- GetWorldStreetOwnedResponseDataFundUnlockedItem
- GetWorldStreetOwnedResponseDataTenantsItem
- GetWorldStreetOwnedResponseDataThemes
- GetWorldStreetOwnedResponseDataUpkeep
- GetWorldStreetTrespassBarrierResponse
- GetWorldStreetTrespassBarrierResponseData
- GetWorldStudioClassResponse
- GetWorldStudioClassResponseData
- GetWorldStudioClassResponseDataOneOf1Classes
- GetWorldStudioClassResponseDataOneOf1Encodings
- GetWorldStudioClassResponseDataOneOfProps
- GetWorldTransparencyResponse
- GetWorldTransparencyResponseData
- GetWorldTransparencyResponseDataAppeals
- GetWorldTransparencyResponseDataPublishReviews
- GetWorldTransparencyResponseDataReportsByReason
- GetWorldTransparencyResponseDataReportsDecided
- GetWorldTransparencyResponseDataSecondReviews
- GetWorldTransparencyResponseDataTotals
- GetWorldTrialLeaderboardResponse
- GetWorldTrialLeaderboardResponseData
- GetWorldTrialLeaderboardResponseDataCourse
- GetWorldTrialLeaderboardResponseDataWeekly
- GetWorldTrialMineResponse
- GetWorldTrialMineResponseData
- GetWorldTrialMineResponseDataCourses
- GetWorldTrialMineResponseDataCoursesAllTime
- GetWorldTrialMineResponseDataCoursesWeek
- GetWorldVenueQuoteResponse
- GetWorldVenueQuoteResponseVenue
- GetWorldWalletResponse
- GetWorldWalletResponseData
- GetWorldWalletResponseDataCbx
- GetWorldWalletResponseDataCosm
- GetWorldWishResponse
- GetWorldWishResponseData
- GetWorldWishResponseDataMine
- GetWorldWorkEarningResponse
- GetWorldWorkEarningResponseData
- GetWorldWorkEarningResponseDataConnect
- GetWorldWorkEarningResponseDataLines
- GetWorldWorkEarningResponseDataTotals
- GetWorldWorkEarningResponseDataTotalsCash
- GetWorldWorkMineResponse
- GetWorldWorkMineResponseData
- GetWorldWorkMineResponseDataApplications
- GetWorldWorkMineResponseDataApplicationsPosting
- GetWorldWorkMineResponseDataOpenJobs
- GetWorldWorkMineResponseDataOpenJobsEmployer
- GetWorldWorkMineResponseDataOpenJobsMyApplication
- GetWorldWorkMineResponseDataOpenJobsNextShift
- GetWorldWorkMineResponseDataShifts
- GetWorldWorkMineResponseDataShiftsPlace
- GetWorldWorkMineResponseDataShiftsShift
- HrefPlace
- IdName
- IdName2
- IdResponse
- IdStatusResponse
- InCentsOutCents
- InventoryItemIdReason
- KindUrl
- LabelUrlTrackingCode
- LineMessage
- ListAccountsItem
- ListAccountsResponse
- ListActionLogCallsItem
- ListActionLogCallsResponse
- ListActionLogHistogramItem
- ListActionLogHistogramResponse
- ListActionLogItem
- ListActionLogItemDetail
- ListActionLogItemDetailChanges
- ListActionLogItemDetailInitiatedBy
- ListActionLogItemDetailSubject
- ListActionLogItemView
- ListActionLogItemViewBy
- ListActionLogItemViewChildren
- ListActionLogItemViewFailure
- ListActionLogItemViewFailureCta
- ListActionLogItemViewFields
- ListActionLogItemViewPlatform
- ListActionLogItemViewSteps
- ListActionLogItemViewSubjectLink
- ListActionLogItemViewTechnical
- ListActionLogResponse
- ListAppsItem
- ListAppsItemCapabilities
- ListAppsItemDocsLinks
- ListAppsResponse
- ListAuthSessionsItem
- ListAuthSessionsResponse
- ListAutomaticDiscountsItem
- ListAutomaticDiscountsItemAppliesTo
- ListAutomaticDiscountsItemChannelsItem
- ListAutomaticDiscountsItemExclusions
- ListAutomaticDiscountsItemSchedule
- ListAutomaticDiscountsItemScheduleWindows
- ListAutomaticDiscountsItemStacking
- ListAutomaticDiscountsItemTiers
- ListAutomaticDiscountsResponse
- ListAutomationRulesItem
- ListAutomationRulesResponse
- ListAutomationRunsItem
- ListAutomationRunsResponse
- ListBillingAppAllowancesItem
- ListBillingAppAllowancesResponse
- ListBillingPlansItem
- ListBillingPlansItemLimits
- ListBillingPlansResponse
- ListBrandDropListingsItem
- ListBrandDropListingsResponse
- ListBrandDropsItem
- ListBrandDropsResponse
- ListBrandingDropsItem
- ListBrandingDropsItemConfig
- ListBrandingDropsItemConfigAccess
- ListBrandingDropsItemConfigAccessModesItem
- ListBrandingDropsItemConfigAccessTokenGate
- ListBrandingDropsItemConfigAfter
- ListBrandingDropsItemConfigFormat
- ListBrandingDropsItemConfigFormatAuction
- ListBrandingDropsItemConfigFormatDutch
- ListBrandingDropsItemConfigFormatPreorder
- ListBrandingDropsItemConfigFormatRaffle
- ListBrandingDropsItemConfigFulfilment
- ListBrandingDropsItemConfigLimits
- ListBrandingDropsItemConfigLimitsBotProtection
- ListBrandingDropsItemConfigPricing
- ListBrandingDropsItemConfigPromotion
- ListBrandingDropsItemConfigPromotionNotify
- ListBrandingDropsItemConfigSchedule
- ListBrandingDropsItemConfigWhat
- ListBrandingDropsItemConfigWhatBundle
- ListBrandingDropsItemConfigWhatKindsItem
- ListBrandingDropsItemConfigWhatMysteryBox
- ListBrandingDropsItemConfigWhatNftTwin
- ListBrandingDropsItemConfigWhere
- ListBrandingDropsItemConfigWherePlacementsItem
- ListBrandingDropsItemConfigWorld
- ListBrandingDropsItemConfigWorldAvatarGate
- ListBrandingDropsItemCounts
- ListBrandingDropsItemWaves
- ListBrandingDropsResponse
- ListBreaksItem
- ListBreaksResponse
- ListBulkBatchesItem
- ListBulkBatchesResponse
- ListCatalogMatchesItem
- ListCatalogMatchesItemItem
- ListCatalogMatchesItemProduct
- ListCatalogMatchesResponse
- ListCategoryAspectsItem
- ListCategoryAspectsResponse
- ListCategorySearchItem
- ListCategorySearchResponse
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
- ListChannelInventoryItem
- ListChannelInventoryItemCapabilities
- ListChannelInventoryItemCapabilitiesOutOfStockActionsItem
- ListChannelInventoryItemExclusions
- ListChannelInventoryItemPolicy
- ListChannelInventoryResponse
- ListCompWatchlistRecentItem
- ListCompWatchlistRecentResponse
- ListCompWatchlistsItem
- ListCompWatchlistsResponse
- ListConnectedAppsItem
- ListConnectedAppsResponse
- ListConnectionPolicyManagementItem
- ListConnectionPolicyManagementItemNotes
- ListConnectionPolicyManagementResponse
- ListConnectionsItem
- ListConnectionsResponse
- ListConversationMessagesItem
- ListConversationMessagesResponse
- ListConversationsItem
- ListConversationsResponse
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
- ListCreatorCardSetsItem
- ListCreatorCardSetsResponse
- ListCreatorCreationReviewsItem
- ListCreatorCreationReviewsResponse
- ListCreatorCreationsItem
- ListCreatorCreationsItemEarnings
- ListCreatorCreationsItemMint
- ListCreatorCreationsItemRating
- ListCreatorCreationsResponse
- ListCreatorEarningTrendItem
- ListCreatorEarningTrendResponse
- ListCreatorEarningsItem
- ListCreatorEarningsResponse
- ListCreatorExperienceKeysItem
- ListCreatorExperienceKeysResponse
- ListCreatorItemModelsItem
- ListCreatorItemModelsItemReport
- ListCreatorItemModelsItemReportLines
- ListCreatorItemModelsItemReportMeshes
- ListCreatorItemModelsItemReportSuggestions
- ListCreatorItemModelsItemReportSummary
- ListCreatorItemModelsResponse
- ListCreatorItemWearablesItem
- ListCreatorItemWearablesItemChecks
- ListCreatorItemWearablesItemChecksChecks
- ListCreatorItemWearablesItemColourways
- ListCreatorItemWearablesItemCosmetics
- ListCreatorItemWearablesItemTemplate
- ListCreatorItemWearablesResponse
- ListCreatorItemsItem
- ListCreatorItemsResponse
- ListCreatorReviewsItem
- ListCreatorReviewsResponse
- ListCreatorRewardMeItem
- ListCreatorRewardMeResponse
- ListCreatorRewardMonthsItem
- ListCreatorRewardMonthsResponse
- ListCustomersItem
- ListCustomersItemBestRating
- ListCustomersResponse
- ListDaoProposalsItem
- ListDaoProposalsResponse
- ListDetectedEventEventsItem
- ListDetectedEventEventsItemActions
- ListDetectedEventEventsItemGuards
- ListDetectedEventEventsItemGuardsHeldItem
- ListDetectedEventEventsItemPlan
- ListDetectedEventEventsItemReports
- ListDetectedEventEventsResponse
- ListDetectedEventRulesItem
- ListDetectedEventRulesItemElseItem
- ListDetectedEventRulesItemTarget
- ListDetectedEventRulesItemThenItem
- ListDetectedEventRulesResponse
- ListDeveloperAppClientVersionsItem
- ListDeveloperAppClientVersionsResponse
- ListDeveloperAppConformanceRunsItem
- ListDeveloperAppConformanceRunsItemChecks
- ListDeveloperAppConformanceRunsItemCounters
- ListDeveloperAppConformanceRunsResponse
- ListDevicesItem
- ListDevicesResponse
- ListDiscountCodeRedemptionsItem
- ListDiscountCodeRedemptionsResponse
- ListDiscountCodesItem
- ListDiscountCodesItemRules
- ListDiscountCodesItemRulesBxgy
- ListDiscountCodesItemRulesChannelsItem
- ListDiscountCodesItemRulesDisplay
- ListDiscountCodesItemRulesFixedPriceSet
- ListDiscountCodesItemRulesLimits
- ListDiscountCodesItemRulesLimitsRegions
- ListDiscountCodesItemRulesRequirements
- ListDiscountCodesItemRulesSchedule
- ListDiscountCodesItemRulesSpendTiers
- ListDiscountCodesItemRulesValue
- ListDiscountCodesItemUsage
- ListDiscountCodesResponse
- ListDiscountHoldersItem
- ListDiscountHoldersItemChannelsItem
- ListDiscountHoldersItemHolder
- ListDiscountHoldersItemLimits
- ListDiscountHoldersResponse
- ListDropMineItem
- ListDropMineItemListings
- ListDropMineItemSeller
- ListDropMineItemStats
- ListDropMineItemStreet
- ListDropMineResponse
- ListEmailEventsItem
- ListEmailEventsItemCandidates
- ListEmailEventsItemPrice
- ListEmailEventsResponse
- ListEmailProvidersItem
- ListEmailProvidersResponse
- ListEmbedKeysItem
- ListEmbedKeysResponse
- ListEventAttendeesItem
- ListEventAttendeesResponse
- ListEventPolicyDecisionsItem
- ListEventPolicyDecisionsResponse
- ListEventsItem
- ListEventsItemDropRef
- ListEventsResponse
- ListFestivalsItem
- ListFestivalsResponse
- ListFieldRulesItem
- ListFieldRulesResponse
- ListFundingApprovalsItem
- ListFundingApprovalsItemApprovals
- ListFundingApprovalsResponse
- ListFundingDrawsItem
- ListFundingDrawsItemInvoiceFile
- ListFundingDrawsItemTimeline
- ListFundingDrawsResponse
- ListFundingReceiptsItem
- ListFundingReceiptsResponse
- ListFundingRepaymentsItem
- ListFundingRepaymentsResponse
- ListGameBreakUpcomingItem
- ListGameBreakUpcomingItemHits
- ListGameBreakUpcomingItemSpots
- ListGameBreakUpcomingResponse
- ListGameCouponsItem
- ListGameCouponsResponse
- ListGameHuntMineItem
- ListGameHuntMineItemTokens
- ListGameHuntMineResponse
- ListGameHuntsItem
- ListGameHuntsItemRules
- ListGameHuntsItemStall
- ListGameHuntsResponse
- ListGameResultMineItem
- ListGameResultMineResponse
- ListGradingRateCardItem
- ListGradingRateCardResponse
- ListGradingRunsItem
- ListGradingRunsResponse
- ListGradingSubmissionsItem
- ListGradingSubmissionsResponse
- ListGroupBuysItem
- ListGroupBuysItemTiers
- ListGroupBuysResponse
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
- ListInventoryItemSupplier
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
- ListListingAdCampaignsItem
- ListListingAdCampaignsResponse
- ListListingAdPlatformsItem
- ListListingAdPlatformsItemPrograms
- ListListingAdPlatformsItemVerbs
- ListListingAdPlatformsResponse
- ListListingAiDetectionsItem
- ListListingAiDetectionsResponse
- ListListingCommandsItem
- ListListingCommandsResponse
- ListListingDiscrepanciesItem
- ListListingDiscrepanciesResponse
- ListListingIdsResponse
- ListListingTagSuggestItem
- ListListingTagSuggestResponse
- ListListingTagsItem
- ListListingTagsResponse
- ListListingsItem
- ListListingsItemPricing
- ListListingsItemPricingAvgAsking
- ListListingsResponse
- ListLiveShipmentsItem
- ListLiveShipmentsItemOrders
- ListLiveShipmentsResponse
- ListLiveStreamsItem
- ListLiveStreamsResponse
- ListLookbookCampaignRecipientsItem
- ListLookbookCampaignRecipientsResponse
- ListLookbookCampaignsItem
- ListLookbookCampaignsResponse
- ListLookbooksItem
- ListLookbooksResponse
- ListLoyaltyAirdropsItem
- ListLoyaltyAirdropsResponse
- ListLoyaltyMembersItem
- ListLoyaltyMembersResponse
- ListLoyaltyProgramInviteCandidatesItem
- ListLoyaltyProgramInviteCandidatesResponse
- ListLoyaltyProgramMembersItem
- ListLoyaltyProgramMembersResponse
- ListMagicAutoRunDecisionsItem
- ListMagicAutoRunDecisionsResponse
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
- ListOrderRefundsItem
- ListOrderRefundsItemLineItems
- ListOrderRefundsResponse
- ListOrderScanFormsItem
- ListOrderScanFormsResponse
- ListOrderUnitsItem
- ListOrderUnitsResponse
- ListOrdersItem
- ListOrdersResponse
- ListPassportEventsItem
- ListPassportEventsResponse
- ListPassportPrintTargetsItem
- ListPassportPrintTargetsResponse
- ListPassportsItem
- ListPassportsItemGrading
- ListPassportsResponse
- ListPatItem
- ListPatResponse
- ListPayoutCompareItem
- ListPayoutCompareResponse
- ListPolicyPresetsItem
- ListPolicyPresetsResponse
- ListPolicyReturnsItem
- ListPolicyReturnsResponse
- ListPriceRulesItem
- ListPriceRulesResponse
- ListPrintMailJobsItem
- ListPrintMailJobsResponse
- ListProductFeedsItem
- ListProductFeedsItemFilters
- ListProductFeedsItemFormatsItem
- ListProductFeedsItemLastStats
- ListProductFeedsItemLastStatsIssues
- ListProductFeedsItemSettings
- ListProductFeedsItemUrls
- ListProductFeedsResponse
- ListProductSetMembersItem
- ListProductSetMembersResponse
- ListProductSetsItem
- ListProductSetsItemFilters
- ListProductSetsItemFiltersStatusesItem
- ListProductSetsResponse
- ListReferenceCountriesItem
- ListReferenceCountriesResponse
- ListReferenceMetrosItem
- ListReferenceMetrosResponse
- ListRentalHistoryItem
- ListRentalHistoryResponse
- ListRentalOffersItem
- ListRentalOffersResponse
- ListRentalsItem
- ListRentalsResponse
- ListRepriceEventsItem
- ListRepriceEventsResponse
- ListRestockPromptsItem
- ListRestockPromptsResponse
- ListReturnsItem
- ListReturnsItemReturnTracking
- ListReturnsResponse
- ListSalesItem
- ListSalesItemDocuments
- ListSalesResponse
- ListSandboxEventsItem
- ListSandboxEventsResponse
- ListSavedViewsItem
- ListSavedViewsResponse
- ListScanCapturesItem
- ListScanCapturesResponse
- ListScanModelsItem
- ListScanModelsResponse
- ListShowroomItemSearchItem
- ListShowroomItemSearchItemBadgesItem
- ListShowroomItemSearchResponse
- ListShowroomsItem
- ListShowroomsItemBilling
- ListShowroomsResponse
- ListSourceSyncEventsItem
- ListSourceSyncEventsResponse
- ListSourceSyncItem
- ListSourceSyncItemSettings
- ListSourceSyncResponse
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
- ListSpatialLeasesItem
- ListSpatialLeasesResponse
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
- ListSpatialStreetMineItem
- ListSpatialStreetMineResponse
- ListSpatialStreetsItem
- ListSpatialStreetsResponse
- ListSponsoredAdBillingHistoryItem
- ListSponsoredAdBillingHistoryItemSplit
- ListSponsoredAdBillingHistoryResponse
- ListSponsoredAdBillingStatementsItem
- ListSponsoredAdBillingStatementsResponse
- ListSponsoredAdBoostsItem
- ListSponsoredAdBoostsResponse
- ListSponsoredAdCampaignsItem
- ListSponsoredAdCampaignsItemPlacementsItem
- ListSponsoredAdCampaignsResponse
- ListSponsoredAdListingsItem
- ListSponsoredAdListingsResponse
- ListStallListingSearchItem
- ListStallListingSearchResponse
- ListStallMineItem
- ListStallMineItemBoothTrimmed
- ListStallMineItemQuote
- ListStallMineItemQuoteLines
- ListStallMineItemStats
- ListStallMineResponse
- ListStorefrontHighlightsItem
- ListStorefrontHighlightsItemItems
- ListStorefrontHighlightsItemItemsListing
- ListStorefrontHighlightsItemItemsMediaTransform
- ListStorefrontHighlightsResponse
- ListStorefrontSectionsItem
- ListStorefrontSiteVersionsItem
- ListStorefrontSiteVersionsResponse
- ListStorefrontStoryArchiveItem
- ListStorefrontStoryArchiveResponse
- ListStorefrontTeamAccessItem
- ListStorefrontTeamAccessResponse
- ListStorefrontsItem
- ListStorefrontsResponse
- ListStoriesItem
- ListStoriesItemOverlaysItem
- ListStoriesResponse
- ListStreetDropsItem
- ListStreetDropsResponse
- ListStreetEventsItem
- ListStreetEventsResponse
- ListStreetStallsItem
- ListStreetStallsItemFootprint
- ListStreetStallsItemListings
- ListStreetStallsItemSeller
- ListStreetStallsResponse
- ListTaxCrosslyCollectsItem
- ListTaxCrosslyCollectsResponse
- ListTaxSalesTaxNotCollectedItem
- ListTaxSalesTaxNotCollectedResponse
- ListTaxonomyEbayCharitiesItem
- ListTaxonomyEbayCharitiesResponse
- ListTaxonomySuggestItem
- ListTaxonomySuggestResponse
- ListTcgCardsItem
- ListTcgCardsResponse
- ListTcgCreatorGamePacksItem
- ListTcgCreatorGamePacksResponse
- ListTcgCreatorGamesItem
- ListTcgCreatorGamesResponse
- ListTcgCreatorMineItem
- ListTcgCreatorMineItemVersions
- ListTcgCreatorMineResponse
- ListTcgGamesItem
- ListTcgGamesItemStarters
- ListTcgGamesResponse
- ListTcgNftsItem
- ListTcgNftsResponse
- ListTcgTournamentsItem
- ListTcgTournamentsResponse
- ListToolboxAssetsItem
- ListToolboxAssetsResponse
- ListToolboxLibraryItem
- ListToolboxLibraryItemPurchase
- ListToolboxLibraryResponse
- ListToolboxMineItem
- ListToolboxMineItemLatestVersion
- ListToolboxMineResponse
- ListToolboxSalesItem
- ListToolboxSalesResponse
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
- ListVaultMarketFeedItemBy
- ListVaultMarketFeedResponse
- ListVaultMarketFollowCopyWatchAlertsItem
- ListVaultMarketFollowCopyWatchAlertsItemBy
- ListVaultMarketFollowCopyWatchAlertsResponse
- ListVaultMarketFollowCopyWatchItem
- ListVaultMarketFollowCopyWatchItemPerson
- ListVaultMarketFollowCopyWatchResponse
- ListVaultMarketFollowFeedItem
- ListVaultMarketFollowFeedItemBy
- ListVaultMarketFollowFeedItemExhibition
- ListVaultMarketFollowFeedResponse
- ListVaultMarketFollowFollowingItem
- ListVaultMarketFollowFollowingItemPerson
- ListVaultMarketFollowFollowingItemShares
- ListVaultMarketFollowFollowingResponse
- ListVaultMarketFollowLeaderboardsItem
- ListVaultMarketFollowLeaderboardsItemPerson
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
- ListVaultMarketGradingCandidatesItem
- ListVaultMarketGradingCandidatesResponse
- ListVaultMarketGradingItem
- ListVaultMarketGradingOrdersItem
- ListVaultMarketGradingOrdersResponse
- ListVaultMarketGradingResponse
- ListVaultMarketHallLendersItem
- ListVaultMarketHallLendersResponse
- ListVaultMarketHoldingsItem
- ListVaultMarketHoldingsItemActions
- ListVaultMarketHoldingsItemDeposit
- ListVaultMarketHoldingsResponse
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
- ListVaultMarketOpeningItemMark
- ListVaultMarketOpeningItemMe
- ListVaultMarketOpeningResponse
- ListVaultMarketOptionComboRfqItem
- ListVaultMarketOptionComboRfqResponse
- ListVaultMarketOptionCombosItem
- ListVaultMarketOptionCombosItemLegs
- ListVaultMarketOptionCombosResponse
- ListVaultMarketOptionContractDailyItem
- ListVaultMarketOptionContractDailyResponse
- ListVaultMarketOptionMmQuotesItem
- ListVaultMarketOptionMmQuotesResponse
- ListVaultMarketOptionNoticesItem
- ListVaultMarketOptionNoticesResponse
- ListVaultMarketOptionOrdersItem
- ListVaultMarketOptionOrdersResponse
- ListVaultMarketOptionPracticeFillsItem
- ListVaultMarketOptionPracticeFillsResponse
- ListVaultMarketOptionPracticeOrdersItem
- ListVaultMarketOptionPracticeOrdersResponse
- ListVaultMarketOptionRfqItem
- ListVaultMarketOptionRfqResponse
- ListVaultMarketOptionSeriesItem
- ListVaultMarketOptionSeriesResponse
- ListVaultMarketOptionStrategiesItem
- ListVaultMarketOptionStrategiesResponse
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
- ListVaultMarketPartnerFinderItem
- ListVaultMarketPartnerFinderResponse
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
- ListVaultMarketPredictionAlertsItem
- ListVaultMarketPredictionAlertsResponse
- ListVaultMarketPredictionComboRfqsItem
- ListVaultMarketPredictionComboRfqsItemLegs
- ListVaultMarketPredictionComboRfqsItemQuotes
- ListVaultMarketPredictionComboRfqsResponse
- ListVaultMarketPredictionCombosItem
- ListVaultMarketPredictionCombosItemLegs
- ListVaultMarketPredictionCombosResponse
- ListVaultMarketPredictionCommentsItem
- ListVaultMarketPredictionCommentsResponse
- ListVaultMarketPredictionConversionsItem
- ListVaultMarketPredictionConversionsResponse
- ListVaultMarketPredictionFollowingItem
- ListVaultMarketPredictionFollowingResponse
- ListVaultMarketPredictionForecastsItem
- ListVaultMarketPredictionForecastsResponse
- ListVaultMarketPredictionMakersItem
- ListVaultMarketPredictionMakersResponse
- ListVaultMarketPredictionMarketsItem
- ListVaultMarketPredictionMarketsItemProbability
- ListVaultMarketPredictionMarketsResponse
- ListVaultMarketPredictionOrdersItem
- ListVaultMarketPredictionOrdersResponse
- ListVaultMarketPredictionPositionsItem
- ListVaultMarketPredictionPositionsResponse
- ListVaultMarketPredictionProposalListedItem
- ListVaultMarketPredictionProposalListedResponse
- ListVaultMarketPredictionProposalsItem
- ListVaultMarketPredictionProposalsResponse
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
- ListVaultMarketShareAutoInvestItem
- ListVaultMarketShareAutoInvestItemTargets
- ListVaultMarketShareAutoInvestResponse
- ListVaultMarketShareAutoInvestRunsItem
- ListVaultMarketShareAutoInvestRunsResponse
- ListVaultMarketShareBasketsItem
- ListVaultMarketShareBasketsResponse
- ListVaultMarketShareCardsItem
- ListVaultMarketShareCardsItemAmounts
- ListVaultMarketShareCardsItemChange
- ListVaultMarketShareCardsItemLevel
- ListVaultMarketShareCardsItemLinks
- ListVaultMarketShareCardsItemMark
- ListVaultMarketShareCardsItemOwner
- ListVaultMarketShareCardsItemPortfolio
- ListVaultMarketShareCardsResponse
- ListVaultMarketShareDropsItem
- ListVaultMarketShareDropsResponse
- ListVaultMarketShareGiftsItem
- ListVaultMarketShareGiftsResponse
- ListVaultMarketShareOrdersItem
- ListVaultMarketShareOrdersResponse
- ListVaultMarketShareSeriesItem
- ListVaultMarketShareSeriesItemMine
- ListVaultMarketShareSeriesItemRights
- ListVaultMarketShareSeriesResponse
- ListVaultMarketShareSeryAppraisalsItem
- ListVaultMarketShareSeryAppraisalsResponse
- ListVaultMarketShareSeryTapeItem
- ListVaultMarketShareSeryTapeResponse
- ListVaultMarketShareSeryUpdatesItem
- ListVaultMarketShareSeryUpdatesResponse
- ListVaultMarketShareSubscriptionsItem
- ListVaultMarketShareSubscriptionsResponse
- ListVaultMarketShareWorldItem
- ListVaultMarketShareWorldResponse
- ListVaultMarketSupplyDeclaredValuesItem
- ListVaultMarketSupplyDeclaredValuesResponse
- ListVaultMarketSupplyDepositsItem
- ListVaultMarketSupplyDepositsItemExit
- ListVaultMarketSupplyDepositsResponse
- ListVaultMarketSupplyEligibilityItem
- ListVaultMarketSupplyEligibilityResponse
- ListVaultMarketSupplyInvitesItem
- ListVaultMarketSupplyInvitesItemKey
- ListVaultMarketSupplyInvitesResponse
- ListVaultMarketSupplyShipmentsItem
- ListVaultMarketSupplyShipmentsResponse
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
- ListWalletDefaultsItem
- ListWalletDefaultsItemFamiliesItem
- ListWalletDefaultsItemOverrides
- ListWalletDefaultsItemRefKindsItem
- ListWalletDefaultsItemResolved
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
- ListWeb3LaunchPerksItem
- ListWeb3LaunchPerksItemConfig
- ListWeb3LaunchPerksResponse
- ListWeb3LaunchesItem
- ListWeb3LaunchesItemHolderPerksItem
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
- ListWeb3StoreWalletBalancesItem
- ListWeb3StoreWalletBalancesItemNative
- ListWeb3StoreWalletBalancesResponse
- ListWeb3StoreWalletsItem
- ListWeb3StoreWalletsResponse
- ListWeb3WalletsItem
- ListWeb3WalletsResponse
- ListWeb3WatchlistItem
- ListWeb3WatchlistItemCollection
- ListWeb3WatchlistItemLastSale
- ListWeb3WatchlistResponse
- ListWebhookDeliveriesItem
- ListWebhookDeliveriesResponse
- ListWebhooksItem
- ListWebhooksResponse
- ListWholesaleBuyersItem
- ListWholesaleBuyersItemCatalogs
- ListWholesaleBuyersItemGroups
- ListWholesaleBuyersItemTerms
- ListWholesaleBuyersResponse
- ListWholesaleCatalogItemsItem
- ListWholesaleCatalogItemsItemOwn
- ListWholesaleCatalogItemsItemTerms
- ListWholesaleCatalogItemsItemTermsBackorder
- ListWholesaleCatalogItemsItemTermsMoq
- ListWholesaleCatalogItemsItemTermsPriceVisibility
- ListWholesaleCatalogItemsItemTermsVerifiedOnly
- ListWholesaleCatalogItemsResponse
- ListWholesaleCatalogsItem
- ListWholesaleCatalogsResponse
- ListWholesaleDropsItem
- ListWholesaleDropsItemReservations
- ListWholesaleDropsResponse
- ListWholesaleFreightRequestsItem
- ListWholesaleFreightRequestsResponse
- ListWholesaleGroupsItem
- ListWholesaleGroupsItemMembers
- ListWholesaleGroupsResponse
- ListWholesaleInvoicesItem
- ListWholesaleInvoicesResponse
- ListWholesaleOrdersItem
- ListWholesaleOrdersResponse
- ListWholesaleQuotesItem
- ListWholesaleQuotesItemItems
- ListWholesaleQuotesResponse
- ListWholesaleRequestsItem
- ListWholesaleRequestsItemAnswers
- ListWholesaleRequestsResponse
- ListWholesaleSetupStepsItem
- ListWholesaleSetupStepsResponse
- ListWorkflowApprovalsItem
- ListWorkflowApprovalsItemItems
- ListWorkflowApprovalsResponse
- ListWorkflowChainsItem
- ListWorkflowChainsResponse
- ListWorkflowRunsItem
- ListWorkflowRunsResponse
- ListWorkflowSaleActiveItem
- ListWorkflowSaleActiveItemWorkflow
- ListWorkflowSaleActiveResponse
- ListWorkflowTemplatesItem
- ListWorkflowTemplatesItemSetup
- ListWorkflowTemplatesResponse
- ListWorkflowVersionsItem
- ListWorkflowVersionsResponse
- ListWorkflowsItem
- ListWorkflowsItemSparkline
- ListWorkflowsResponse
- ListWorldAppealsItem
- ListWorldAppealsResponse
- ListWorldAttendantUsageItem
- ListWorldAttendantUsageResponse
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
- ListWorldCollaborationsItem
- ListWorldCollaborationsItemInvitedBy
- ListWorldCollaborationsResponse
- ListWorldContestStandingsItem
- ListWorldContestStandingsResponse
- ListWorldContestsItem
- ListWorldContestsResponse
- ListWorldConventionExhibitorsItem
- ListWorldConventionExhibitorsResponse
- ListWorldConventionMessagesItem
- ListWorldConventionMessagesResponse
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
- ListWorldEarningAffiliateItem
- ListWorldEarningAffiliateResponse
- ListWorldEarningLedgerItem
- ListWorldEarningLedgerResponse
- ListWorldEarningPayoutsItem
- ListWorldEarningPayoutsResponse
- ListWorldExperienceActivityItem
- ListWorldExperienceActivityResponse
- ListWorldExperienceAlertsItem
- ListWorldExperienceAlertsResponse
- ListWorldExperienceAssetsItem
- ListWorldExperienceAssetsResponse
- ListWorldExperienceAuditItem
- ListWorldExperienceAuditResponse
- ListWorldExperienceBansItem
- ListWorldExperienceBansResponse
- ListWorldExperienceConfigVersionsItem
- ListWorldExperienceConfigVersionsResponse
- ListWorldExperienceDatastoreEntriesItem
- ListWorldExperienceDatastoreEntriesResponse
- ListWorldExperienceDatastoreEntryVersionsItem
- ListWorldExperienceDatastoreEntryVersionsResponse
- ListWorldExperienceDatastoresItem
- ListWorldExperienceDatastoresResponse
- ListWorldExperienceDropTablesItem
- ListWorldExperienceDropTablesItemOdds
- ListWorldExperienceDropTablesItemSimulation
- ListWorldExperienceDropTablesResponse
- ListWorldExperienceEventUpcomingItem
- ListWorldExperienceEventUpcomingResponse
- ListWorldExperienceEventsItem
- ListWorldExperienceEventsResponse
- ListWorldExperienceExperienceEventsItem
- ListWorldExperienceExperienceEventsResponse
- ListWorldExperienceExperimentsItem
- ListWorldExperienceExperimentsItemGuardrails
- ListWorldExperienceExperimentsItemTargeting
- ListWorldExperienceExperimentsItemTargetingPlatformsItem
- ListWorldExperienceExperimentsItemVariants
- ListWorldExperienceExperimentsResponse
- ListWorldExperienceModerationReportsItem
- ListWorldExperienceModerationReportsItemContext
- ListWorldExperienceModerationReportsItemContextChat
- ListWorldExperienceModerationReportsItemContextLine
- ListWorldExperienceModerationReportsResponse
- ListWorldExperienceNotificationTemplatesItem
- ListWorldExperienceNotificationTemplatesResponse
- ListWorldExperiencePlaceCollabScriptsItem
- ListWorldExperiencePlaceCollabScriptsResponse
- ListWorldExperiencePlacePackagesItem
- ListWorldExperiencePlacePackagesResponse
- ListWorldExperiencePlacePublishesItem
- ListWorldExperiencePlacePublishesItemChecks
- ListWorldExperiencePlacePublishesItemChecksScan
- ListWorldExperiencePlacePublishesItemDetails
- ListWorldExperiencePlacePublishesItemRatingAnswers
- ListWorldExperiencePlacePublishesResponse
- ListWorldExperiencePlaceVersionsItem
- ListWorldExperiencePlaceVersionsResponse
- ListWorldExperiencePlacesItem
- ListWorldExperiencePlacesResponse
- ListWorldExperiencePlaytestersItem
- ListWorldExperiencePlaytestersResponse
- ListWorldExperienceProductsItem
- ListWorldExperienceProductsResponse
- ListWorldExperienceReceiptsItem
- ListWorldExperienceReceiptsItemDrop
- ListWorldExperienceReceiptsResponse
- ListWorldExperienceRewardGrantsItem
- ListWorldExperienceRewardGrantsResponse
- ListWorldExperienceRewardLedgerItem
- ListWorldExperienceRewardLedgerResponse
- ListWorldExperienceRewardTopupsItem
- ListWorldExperienceRewardTopupsResponse
- ListWorldExperienceServersItem
- ListWorldExperienceServersResponse
- ListWorldExperiencesItem
- ListWorldExperiencesResponse
- ListWorldFollowingRoomsItem
- ListWorldFollowingRoomsResponse
- ListWorldFollowsItem
- ListWorldFollowsResponse
- ListWorldFriendsItem
- ListWorldFriendsResponse
- ListWorldGameMineItem
- ListWorldGameMineItemFlags
- ListWorldGameMineResponse
- ListWorldGamePackageReceiptsItem
- ListWorldGamePackageReceiptsResponse
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
- ListWorldJobBoardItem
- ListWorldJobBoardItemEmployer
- ListWorldJobBoardResponse
- ListWorldMarketItem
- ListWorldMarketItemStreet
- ListWorldMarketItemTraffic
- ListWorldMarketResponse
- ListWorldMarketStreetSignsItem
- ListWorldMarketStreetSignsResponse
- ListWorldMeExperienceEventsItem
- ListWorldMeExperienceEventsResponse
- ListWorldMeNotificationOptInsItem
- ListWorldMeNotificationOptInsResponse
- ListWorldMeSubscriptionsItem
- ListWorldMeSubscriptionsResponse
- ListWorldOutfitsItem
- ListWorldOutfitsItemAppearance
- ListWorldOutfitsItemAppearanceOutfit
- ListWorldOutfitsItemItems
- ListWorldOutfitsResponse
- ListWorldPackagesItem
- ListWorldPackagesResponse
- ListWorldParentalChildrenItem
- ListWorldParentalChildrenItemControls
- ListWorldParentalChildrenItemPlaytime
- ListWorldParentalChildrenItemPlaytimeExperiences
- ListWorldParentalChildrenResponse
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
- ListWorldPlaceTradeTablesResponse
- ListWorldPlaceTradesItem
- ListWorldPlaceTradesResponse
- ListWorldPromotedItem
- ListWorldPromotedResponse
- ListWorldPropertyPlotsItem
- ListWorldPropertyPlotsResponse
- ListWorldPropertyRentalsItem
- ListWorldPropertyRentalsResponse
- ListWorldPropertyTrespassedItem
- ListWorldPropertyTrespassedResponse
- ListWorldProvenanceItem
- ListWorldProvenanceResponse
- ListWorldQuestsItem
- ListWorldQuestsResponse
- ListWorldRecentItem
- ListWorldRecentResponse
- ListWorldRegionsItem
- ListWorldRegionsResponse
- ListWorldRoomWantsItem
- ListWorldRoomWantsResponse
- ListWorldShopListingsItem
- ListWorldShopListingsResponse
- ListWorldSpaceRequestsItem
- ListWorldSpaceRequestsResponse
- ListWorldSpaceWhatsOnItem
- ListWorldSpaceWhatsOnResponse
- ListWorldSpacesItem
- ListWorldSpacesItemNext
- ListWorldSpacesResponse
- ListWorldStaffApplicantsItem
- ListWorldStaffApplicantsItemApplicant
- ListWorldStaffApplicantsItemPosting
- ListWorldStaffApplicantsResponse
- ListWorldStaffPeopleItem
- ListWorldStaffPeopleResponse
- ListWorldStaffPlacesItem
- ListWorldStaffPlacesResponse
- ListWorldStaffPostingsItem
- ListWorldStaffPostingsItemShifts
- ListWorldStaffPostingsResponse
- ListWorldStaffShiftsItem
- ListWorldStaffShiftsResponse
- ListWorldStreaksItem
- ListWorldStreaksResponse
- ListWorldTradeMineItem
- ListWorldTradeMineItemItems
- ListWorldTradeMineResponse
- ListWorldTradeTableBinderItem
- ListWorldTradeTableBinderResponse
- ListWorldTradeTableListingsItem
- ListWorldTradeTableListingsResponse
- ListWorldTransferRequestsItem
- ListWorldTransferRequestsItemActionsItem
- ListWorldTransferRequestsItemFrom
- ListWorldTransferRequestsResponse
- ListWorldTransparencyItem
- ListWorldTransparencyResponse
- ListWorldVenuesItem
- ListWorldVenuesItemTaken
- ListWorldVenuesResponse
- ListingIdPriceCents
- ListingsValueCents
- LiveStreamResponse
- LookbookCampaignResponse
- LowCentsHighCents
- LoyaltyAirdropResponse
- MainSub
- MakerTaker
- MinMax
- NameObject
- NameObject2
- NameSlug
- NameSlug2
- OkResponse
- OpenClose
- OrderHashResponse
- OrderIdError
- Pagination
- PassportDraftResponse
- PassportDraftResponseData
- PassportDraftResponseDataSkipped
- PassportResponse
- PassportResponseData
- PassportResponseDataDetails
- PathMessage
- PathText
- PenaltyRepStrikesToBlock
- RentalResponse
- RentalResponseData
- RentalResponseDataInspection
- SpatialSceneResponse
- SpatialSceneResponseData
- SpatialSceneResponseDataSettings
- SpatialSceneResponseDataSettingsCamera
- SpatialStreetResponse
- SponsoredAdCampaignResponse
- SponsoredAdCampaignResponseData
- SponsoredAdCampaignResponseDataCatalogs
- SponsoredAdCampaignResponseDataKeywords
- SponsoredAdCampaignResponseDataListings
- SponsoredAdCampaignResponseDataPacing
- SponsoredAdCampaignResponseDataPlacementsItem
- SponsoredAdCampaignResponseDataStats
- SponsoredAdCampaignResponseDataWorldTargets
- SponsoredAdResponse
- SponsoredAdResponseData
- SponsoredAdResponseDataAutoTopup
- StartEnd
- StatusResponse
- StorefrontHighlightResponse
- StorefrontResponse
- StorefrontResponse2
- StorefrontResponse2Data
- StorefrontResponse2DataDraft
- StorefrontResponse2DataDraftTemplates
- StorefrontResponse2DataDraftTheme
- StorefrontResponse2DataPublished
- StorefrontResponse3
- StorefrontResponse3Data
- StorefrontResponse3DataDraft
- StorefrontResponse3DataDraftAnnouncement
- StorefrontResponse3DataDraftFooter
- StorefrontResponse3DataDraftHeader
- StorefrontResponse3DataDraftPages
- StorefrontResponse3DataDraftPopup
- StorefrontResponse3DataDraftSeo
- StorefrontResponse3DataDraftTemplates
- StorefrontResponse3DataDraftTemplatesCatalog
- StorefrontResponse3DataDraftTemplatesProduct
- StorefrontResponse3DataDraftTheme
- StorefrontResponse3DataDraftThemeColors
- StorefrontResponse3DataDraftThemeFonts
- StorefrontResponse3DataDraftThemeProductCard
- StorefrontResponse3DataDraftThemeRadius
- StorefrontResponse3DataPublished
- StorefrontResponse4
- StorefrontSectionResponse
- SuccessResponse
- SummaryIncomplete
- TcgResponse
- TcgResponseData
- TcgTournamentResponse
- TcgTournamentResponseData
- TcgTournamentResponseDataPairings
- TcgTournamentResponseDataPairingsA
- TcgTournamentResponseDataPairingsB
- TcgTournamentResponseDataStandings
- TermsVersionResponse
- TextChatFilter
- ToolboxAssetResponse
- TxV0Object
- UnitsCents
- UpdateAdOffsiteResponse
- UpdateAdOffsiteResponseData
- UpdateAiImageConfigResponse
- UpdateBrandingEventSettingResponse
- UpdateBrandingEventSettingResponseData
- UpdateCosmCosmeticUnlockResponse
- UpdateCosmCosmeticUnlockResponseData
- UpdateCosmPegResponse
- UpdateCosmPegResponseData
- UpdateCustomerNoteRequest
- UpdateDeveloperAppListingResponse
- UpdateDeveloperAppListingResponseData
- UpdateDeveloperAppListingResponseDataDecision
- UpdateDeveloperAppListingResponseDataDecisionChangedItem
- UpdateDeveloperAppProfileResponse
- UpdateDeveloperAppProfileResponseData
- UpdateDeveloperAppProfileResponseDataDecision
- UpdateDeveloperAppProfileResponseDataDecisionChangedItem
- UpdateEventPolicyRuleRequest
- UpdateEventPolicyRuleResponse
- UpdateFundingAutorepayResponse
- UpdateFundingAutorepayResponseData
- UpdateFundingControlResponse
- UpdateFundingMemberResponse
- UpdateGroupBuyResponse
- UpdateHotspotItem
- UpdateHotspotResponse
- UpdateInboxCannedResponseOrderRequest
- UpdateInboxConversationResponse
- UpdateInboxConversationResponseConversation
- UpdateListingAdListingRateResponse
- UpdateListingCustomResponse
- UpdateListingCustomResponseData
- UpdateListingPlatformListingResponse
- UpdateListingPlatformListingResponseData
- UpdateListingResponse
- UpdateListingResponseJobs
- UpdateLiveStreamLineupItem
- UpdateLiveStreamLineupResponse
- UpdateLookbookDesignResponse
- UpdateLookbookDesignResponseData
- UpdateLoyaltyProgramResponse
- UpdateLoyaltyProgramResponseData
- UpdateMagicAutoSettingRequest
- UpdateOrderResponse
- UpdatePassportResponse
- UpdatePayoutScheduleRequest
- UpdatePayoutScheduleResponse
- UpdatePayoutScheduleResponseData
- UpdatePlatformPreferenceResponse
- UpdateProductionPoResponse
- UpdateProductionPoResponsePo
- UpdateRentalOfferResponse
- UpdateRentalOfferResponseData
- UpdateShowroom2Response
- UpdateShowroom2ResponseData
- UpdateShowroom2ResponseDataFixtures
- UpdateShowroom2ResponseDataItems
- UpdateShowroom2ResponseDataItemsBadgesItem
- UpdateShowroom2ResponseDataPlacements
- UpdateShowroom2ResponseDataRoom
- UpdateShowroom2ResponseDataRoomLook
- UpdateShowroom2ResponseDataSettings
- UpdateShowroom2ResponseDataSettingsGroupByItem
- UpdateShowroom2ResponseDataSettingsHours
- UpdateShowroom2ResponseDataSettingsSortByItem
- UpdateShowroom2ResponseDataStats
- UpdateShowroom2ResponseResults
- UpdateShowroomResponse
- UpdateSourceSyncLocationRequest
- UpdateSpatialEmployeeConfigResponse
- UpdateSpatialEmployeeConfigResponseData
- UpdateSpatialEmployeeConfigResponseDataConfig
- UpdateSpatialSceneCosmeticResponse
- UpdateSpatialSceneCosmeticResponseData
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
- UpdateSponsoredAdBoostResponse
- UpdateSponsoredAdBoostResponseData
- UpdateStorefrontProfileResponse
- UpdateStorefrontProfileResponseData
- UpdateStorefrontProfileResponseDataProfile
- UpdateStorefrontSettingResponse
- UpdateStorefrontSettingResponseData
- UpdateStorefrontSettingResponseDataPolicySource
- UpdateStorefrontSettingResponseDataPolicySummary
- UpdateStorefrontSettingResponseDataStorePolicies
- UpdateStorefrontSettingResponseDataStorePoliciesShipping
- UpdateToolboxAssetRatingMineResponse
- UpdateVaultMarketAutoBuyResponse
- UpdateVaultMarketHomeUnitResponse
- UpdateVaultMarketHomeUnitResponseRefused
- UpdateVaultMarketOfferAlertResponse
- UpdateVaultMarketPaperLeaderboardResponse
- UpdateVaultMarketPartnerMeResponse
- UpdateVaultMarketPartnerMeResponseProfile
- UpdateVaultMarketPositionExitResponse
- UpdateVaultMarketSupplyDepositResponse
- UpdateVaultMarketTodBeneficiaryResponse
- UpdateVaultMarketTodDesignationResponse
- UpdateVaultMarketWorldRoomVaultGateResponse
- UpdateVaultMarketWorldRoomVaultGateResponseGate
- UpdateVaultMarketWorldRoomVaultGateResponseGateScope
- UpdateWeb3HolderPerkResponse
- UpdateWeb3LaunchAllowlistResponse
- UpdateWeb3LaunchAllowlistResponseRootTx
- UpdateWeb3LaunchResponse
- UpdateWeb3StoreWalletResponse
- UpdateWeb3WalletResponse
- UpdateWholesaleBuyerTermResponse
- UpdateWholesaleBuyerTermResponseData
- UpdateWholesaleCatalogItemResponse
- UpdateWholesaleCatalogItemResponseData
- UpdateWholesaleListingTierItem
- UpdateWholesaleListingTierResponse
- UpdateWholesaleProfileResponse
- UpdateWorkflowRequest
- UpdateWorldAttendantResponse
- UpdateWorldAttendantResponseData
- UpdateWorldAttendantResponseDataHours
- UpdateWorldAttendantResponseDataHoursDays
- UpdateWorldAttendantResponseDataKnowledge
- UpdateWorldAttendantResponseDataKnowledgeFaqs
- UpdateWorldAttendantResponseDataLanguagesItem
- UpdateWorldAvatarIdentityResponse
- UpdateWorldAvatarIdentityResponseData
- UpdateWorldAvatarLookResponse
- UpdateWorldAvatarLookResponseData
- UpdateWorldAvatarLookResponseDataLook
- UpdateWorldBadgeProfileResponse
- UpdateWorldBadgeProfileResponseData
- UpdateWorldConventionHallResponse
- UpdateWorldConventionMyBoothResponse
- UpdateWorldConventionStatusResponse
- UpdateWorldConventionStatusResponseData
- UpdateWorldEmoteWheelRequest
- UpdateWorldEmoteWheelResponse
- UpdateWorldEmoteWheelResponseData
- UpdateWorldEmoteWheelResponseDataWheelItem
- UpdateWorldExperienceDatastoreEntryResponse
- UpdateWorldExperienceDatastoreEntryResponseData
- UpdateWorldExperienceGalleryRoleItem
- UpdateWorldExperienceGalleryRoleItemExternal
- UpdateWorldExperienceGalleryRoleResponse
- UpdateWorldExperienceHttpSecretResponse
- UpdateWorldExperienceHttpSecretResponseData
- UpdateWorldExperienceMaturityResponse
- UpdateWorldExperienceMaturityResponseData
- UpdateWorldExperienceMemoryMapResponse
- UpdateWorldExperienceMemoryMapResponseData
- UpdateWorldExperienceNotificationTemplateResponse
- UpdateWorldExperiencePlaceCollabScriptResponse
- UpdateWorldExperiencePlacePackageResponse
- UpdateWorldExperiencePlacePackageResponseData
- UpdateWorldExperiencePlaceStudioScriptResponse
- UpdateWorldExperiencePlaceStudioScriptResponseData
- UpdateWorldExperiencePlaceStudioScriptResponseDataDiff
- UpdateWorldExperiencePlaceVersionNoteResponse
- UpdateWorldExperiencePlaceVersionNoteResponseData
- UpdateWorldExperienceRewardPoolResponse
- UpdateWorldExperienceShowcaseResponse
- UpdateWorldExperienceShowcaseResponseData
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
- UpdateWorldPropertyPlotPhotoResponse
- UpdateWorldPropertyPlotPhotoResponseData
- UpdateWorldPropertyRentingResponse
- UpdateWorldPropertyRentingResponseData
- UpdateWorldQuestPinRequest
- UpdateWorldQuestPinResponse
- UpdateWorldQuestPinResponseData
- UpdateWorldRoomHolderGateResponse
- UpdateWorldRoomHolderGateResponseGate
- UpdateWorldSpaceResponse
- UpdateWorldSpaceResponseData
- UpdateWorldStallBookingBoothResponse
- UpdateWorldStallBookingBoothResponseData
- UpdateWorldStreetOwnedThemeResponse
- UpdateWorldStreetOwnedThemeResponseData
- UpdatedResponse
- UrlExpiresInSecondsResponse
- UserIdName
- UsernameHref
- ValueConfidence
- ValueSource
- ValueSource2
- WH
- WalletResponse
- WholesaleInvoiceResponse
- WholesaleInvoiceResponseData
- WholesaleInvoiceResponseDataCreditNotes
- WholesaleInvoiceResponseDataLateFees
- WholesaleInvoiceResponseDataLines
- WholesaleInvoiceResponseDataPayments
- WholesaleInvoiceResponseDataWriteOffs
- WholesaleQuoteResponse
- WorkflowResponse
- WorkflowResponseData
- WorkflowResponseDataIssues
- WorkflowResponseDataWorkflow
- WorkflowResponseDataWorkflowGraph
- WorldExperienceConfigResponse
- WorldExperienceConfigResponseData
- WorldExperienceConfigResponseDataRules
- WorldExperienceEventResponse
- WorldExperienceExperienceEventResponse
- WorldExperienceExperimentResponse
- WorldExperienceGalleryResponse
- WorldExperienceOrderedEntryResponse
- WorldExperiencePlaceResponse
- WorldExperiencePlaceVersionResponse
- WorldExperienceProductResponse
- WorldExperienceResponse
- WorldExperienceResponse2
- WorldHomeResponse
- WorldLinkResponse
- WorldParentalResponse
- WorldResponse
- WorldResponse2
- WorldResponse3
- WorldResponse3Data
- WorldResponse3DataEligibility
- WorldResponseData
- WorldResponseDataMessages
- WorldResponseDataSaid
- WorldStaffPostingResponse
- WorldStaffPostingResponseData
- WorldStaffPostingResponseDataAutoApprove
- WorldStaffPostingResponseDataBreaks
- WorldStaffPostingResponseDataCheckIn
- WorldStaffPostingResponseDataPay
- WorldStaffPostingResponseDataRecurrence
- WorldStaffPostingResponseDataTarget
- WorldStaffPostingResponseDataWhitelist

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

