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
*AIApi* | [**deleteAiKey**](docs/Api/AIApi.md#deleteaikey) | **DELETE** /v1/ai/key | Remove the BYO-key for a provider.
*AIApi* | [**getAiProvider**](docs/Api/AIApi.md#getaiprovider) | **GET** /v1/ai/providers | Static catalog of supported AI providers.
*AIApi* | [**getAiStatus**](docs/Api/AIApi.md#getaistatus) | **GET** /v1/ai/status | BYO-key state for the calling user.
*AIApi* | [**updateAiKey**](docs/Api/AIApi.md#updateaikey) | **PUT** /v1/ai/key | Save an encrypted BYO-key for an AI provider.
*AccountApi* | [**createAccountCancelDeletion**](docs/Api/AccountApi.md#createaccountcanceldeletion) | **POST** /v1/account/cancel-deletion | Cancel a pending account deletion.
*AccountApi* | [**createAccountLogoutAll**](docs/Api/AccountApi.md#createaccountlogoutall) | **POST** /v1/account/logout-all | Revoke every browser auth session for this user.
*AccountApi* | [**createAccountRequestDeletion**](docs/Api/AccountApi.md#createaccountrequestdeletion) | **POST** /v1/account/request-deletion | Schedule account deletion after a grace period.
*AccountApi* | [**deleteAuthSession**](docs/Api/AccountApi.md#deleteauthsession) | **DELETE** /v1/auth/sessions | Revoke all active browser sessions.
*AccountApi* | [**deleteAuthSessionBySessionId**](docs/Api/AccountApi.md#deleteauthsessionbysessionid) | **DELETE** /v1/auth/sessions/{sessionId} | Revoke a single browser session by id.
*AccountApi* | [**deleteConnectedApp**](docs/Api/AccountApi.md#deleteconnectedapp) | **DELETE** /v1/connected-apps/{grantId} | Disconnect a third-party app. Its tokens stop working immediately.
*AccountApi* | [**getAccountDeletionStatus**](docs/Api/AccountApi.md#getaccountdeletionstatus) | **GET** /v1/account/deletion-status | Get the currently-pending deletion request, if any.
*AccountApi* | [**getMe**](docs/Api/AccountApi.md#getme) | **GET** /v1/me | Identity check — authenticated user + PAT scopes + account state.
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
*AutomationApi* | [**deleteAutomationRule**](docs/Api/AutomationApi.md#deleteautomationrule) | **DELETE** /v1/automation/rules/{id} | Delete an automation rule.
*AutomationApi* | [**getAutomationCatalog**](docs/Api/AutomationApi.md#getautomationcatalog) | **GET** /v1/automation/catalog | Supported triggerType / actionType / conditionType values for automation rules.
*AutomationApi* | [**getAutomationRule**](docs/Api/AutomationApi.md#getautomationrule) | **GET** /v1/automation/rules/{id} | Get a single automation rule.
*AutomationApi* | [**getAutomationRuleExport**](docs/Api/AutomationApi.md#getautomationruleexport) | **GET** /v1/automation/rules/export | Export the user&#39;s full rule library as a portable recipe bundle.
*AutomationApi* | [**getAutomationRuleExportById**](docs/Api/AutomationApi.md#getautomationruleexportbyid) | **GET** /v1/automation/rules/{id}/export | Export a single automation rule as a portable recipe.
*AutomationApi* | [**listAutomationRules**](docs/Api/AutomationApi.md#listautomationrules) | **GET** /v1/automation/rules | List automation rules.
*AutomationApi* | [**listAutomationRuns**](docs/Api/AutomationApi.md#listautomationruns) | **GET** /v1/automation/runs | Per-fire history for automation rules and workflow chain runs.
*AutomationApi* | [**updateAutomationRule**](docs/Api/AutomationApi.md#updateautomationrule) | **PUT** /v1/automation/rules/{id} | Update an automation rule (full replace).
*BillingApi* | [**createBillingUpgrade**](docs/Api/BillingApi.md#createbillingupgrade) | **POST** /v1/billing/upgrade | Start an upgrade to a higher plan.
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
*CBXApi* | [**createCbxCampaignExecute**](docs/Api/CBXApi.md#createcbxcampaignexecute) | **POST** /v1/cbx/campaigns/{campaignId}/execute | Pay an approved campaign.
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
*CustomersApi* | [**getCustomer**](docs/Api/CustomersApi.md#getcustomer) | **GET** /v1/customers/{handle} | Get one customer with their recent 50 orders.
*CustomersApi* | [**listCustomers**](docs/Api/CustomersApi.md#listcustomers) | **GET** /v1/customers | List aggregated customers (group-by lower(buyer_username)).
*DefaultApi* | [**getListingVariationGroup**](docs/Api/DefaultApi.md#getlistingvariationgroup) | **GET** /v1/listings/{id}/variation-group | 
*DefaultApi* | [**getMarketProduct**](docs/Api/DefaultApi.md#getmarketproduct) | **GET** /v1/market/products/{id} | 
*DefaultApi* | [**getMarketVariantBook**](docs/Api/DefaultApi.md#getmarketvariantbook) | **GET** /v1/market/variants/{id}/book | 
*DefaultApi* | [**getVariationGroup**](docs/Api/DefaultApi.md#getvariationgroup) | **GET** /v1/variation-groups/{id} | 
*DefaultApi* | [**getVariationGroupPublishPlan**](docs/Api/DefaultApi.md#getvariationgrouppublishplan) | **GET** /v1/variation-groups/{id}/publish-plan | 
*DefaultApi* | [**listMarketGraders**](docs/Api/DefaultApi.md#listmarketgraders) | **GET** /v1/market/graders | 
*DefaultApi* | [**listMarketProducts**](docs/Api/DefaultApi.md#listmarketproducts) | **GET** /v1/market/products | 
*DefaultApi* | [**listMarketVariantTiers**](docs/Api/DefaultApi.md#listmarketvarianttiers) | **GET** /v1/market/variants/{id}/tiers | 
*DefaultApi* | [**listVariationGroups**](docs/Api/DefaultApi.md#listvariationgroups) | **GET** /v1/variation-groups | 
*EmbedsApi* | [**createEmbedKey**](docs/Api/EmbedsApi.md#createembedkey) | **POST** /v1/embeds/keys | Mint a publishable key for a site.
*EmbedsApi* | [**deleteEmbedKey**](docs/Api/EmbedsApi.md#deleteembedkey) | **DELETE** /v1/embeds/keys/{id} | Revoke a publishable key.
*EmbedsApi* | [**listEmbedKeys**](docs/Api/EmbedsApi.md#listembedkeys) | **GET** /v1/embeds/keys | Your publishable keys.
*ImportsApi* | [**createImport**](docs/Api/ImportsApi.md#createimport) | **POST** /v1/imports | Start a bulk-import job for an existing platform connection.
*ImportsApi* | [**getImport**](docs/Api/ImportsApi.md#getimport) | **GET** /v1/imports/{id} | Get one import job.
*ImportsApi* | [**listImports**](docs/Api/ImportsApi.md#listimports) | **GET** /v1/imports | List bulk-import jobs.
*InboxApi* | [**createInboxAiSuggest**](docs/Api/InboxApi.md#createinboxaisuggest) | **POST** /v1/inbox/ai-suggest | AI reply suggestion for a conversation.
*InboxApi* | [**createInboxCannedRespons**](docs/Api/InboxApi.md#createinboxcannedrespons) | **POST** /v1/inbox/canned-responses | Create a canned response.
*InboxApi* | [**createInboxConversationBulk**](docs/Api/InboxApi.md#createinboxconversationbulk) | **POST** /v1/inbox/conversations/bulk | Bulk mark read / mark unread / soft-delete conversations.
*InboxApi* | [**createInboxConversationBulkAiRespond**](docs/Api/InboxApi.md#createinboxconversationbulkairespond) | **POST** /v1/inbox/conversations/bulk-ai-respond | AI reply suggestion for multiple conversations — draft or send.
*InboxApi* | [**createInboxConversationOfferAction**](docs/Api/InboxApi.md#createinboxconversationofferaction) | **POST** /v1/inbox/conversations/{id}/offer-action | Accept / counter / decline an active offer on a conversation.
*InboxApi* | [**createInboxMessageTriage**](docs/Api/InboxApi.md#createinboxmessagetriage) | **POST** /v1/inbox/messages/{id}/triage | Manually re-triage a buyer message.
*InboxApi* | [**createInboxOffer**](docs/Api/InboxApi.md#createinboxoffer) | **POST** /v1/inbox/{id}/offer | Accept, counter, or decline an offer on a conversation.
*InboxApi* | [**createInboxReply**](docs/Api/InboxApi.md#createinboxreply) | **POST** /v1/inbox/{id}/reply | Send a reply to a conversation thread.
*InboxApi* | [**deleteInboxCannedRespons**](docs/Api/InboxApi.md#deleteinboxcannedrespons) | **DELETE** /v1/inbox/canned-responses/{id} | Delete a canned response.
*InboxApi* | [**getInbox**](docs/Api/InboxApi.md#getinbox) | **GET** /v1/inbox/{id} | Get one conversation with its messages.
*InboxApi* | [**getInboxCannedRespons**](docs/Api/InboxApi.md#getinboxcannedrespons) | **GET** /v1/inbox/canned-responses | List canned responses.
*InboxApi* | [**getInboxConversationMessage**](docs/Api/InboxApi.md#getinboxconversationmessage) | **GET** /v1/inbox/conversations/{id}/messages | Paginated messages for a conversation.
*InboxApi* | [**getInboxConversationUnreadCount**](docs/Api/InboxApi.md#getinboxconversationunreadcount) | **GET** /v1/inbox/conversations/unread-count | Sidebar badge: unread conversation count.
*InboxApi* | [**listInbox**](docs/Api/InboxApi.md#listinbox) | **GET** /v1/inbox | List conversations.
*InboxApi* | [**updateInboxCannedRespons**](docs/Api/InboxApi.md#updateinboxcannedrespons) | **PUT** /v1/inbox/canned-responses/{id} | Update a canned response.
*InboxApi* | [**updateInboxConversation**](docs/Api/InboxApi.md#updateinboxconversation) | **PATCH** /v1/inbox/conversations/{id} | Mark read / change status / close conversation.
*IntegrationsApi* | [**createNotificationIntegration**](docs/Api/IntegrationsApi.md#createnotificationintegration) | **POST** /v1/notification-integrations | Add a Slack/Discord/Webhook destination.
*IntegrationsApi* | [**createNotificationIntegrationTest**](docs/Api/IntegrationsApi.md#createnotificationintegrationtest) | **POST** /v1/notification-integrations/{id}/test | Fire a canned test message to a notification destination.
*IntegrationsApi* | [**deleteNotificationIntegration**](docs/Api/IntegrationsApi.md#deletenotificationintegration) | **DELETE** /v1/notification-integrations/{id} | Delete a notification destination.
*IntegrationsApi* | [**listNotificationIntegrations**](docs/Api/IntegrationsApi.md#listnotificationintegrations) | **GET** /v1/notification-integrations | List Slack/Discord/Webhook destinations for notify.* automation actions.
*IntegrationsApi* | [**updateNotificationIntegration**](docs/Api/IntegrationsApi.md#updatenotificationintegration) | **PATCH** /v1/notification-integrations/{id} | Edit a notification destination.
*InventoryApi* | [**createInventory**](docs/Api/InventoryApi.md#createinventory) | **POST** /v1/inventory | Create a new inventory item.
*InventoryApi* | [**createInventoryBulkArchive**](docs/Api/InventoryApi.md#createinventorybulkarchive) | **POST** /v1/inventory/bulk-archive | Bulk archive inventory items (soft).
*InventoryApi* | [**createInventoryBulkDelete**](docs/Api/InventoryApi.md#createinventorybulkdelete) | **POST** /v1/inventory/bulk-delete | Bulk delete inventory items (delinks listings).
*InventoryApi* | [**createInventoryBulkLabel**](docs/Api/InventoryApi.md#createinventorybulklabel) | **POST** /v1/inventory/bulk-labels | Bulk add/remove labels on inventory items.
*InventoryApi* | [**createInventoryBulkQuantity**](docs/Api/InventoryApi.md#createinventorybulkquantity) | **POST** /v1/inventory/bulk-quantity | Set / add / subtract stock across many items, syncing live listings.
*InventoryApi* | [**createInventoryCsvExport**](docs/Api/InventoryApi.md#createinventorycsvexport) | **POST** /v1/inventory/csv/export | Export inventory as CSV. Round-trips back through csv/import.
*InventoryApi* | [**createInventoryCsvImport**](docs/Api/InventoryApi.md#createinventorycsvimport) | **POST** /v1/inventory/csv/import | Import a CSV. Rows whose sku matches an existing item update it; others are added. Pass dryRun to preview.
*InventoryApi* | [**createInventoryLabelRename**](docs/Api/InventoryApi.md#createinventorylabelrename) | **POST** /v1/inventory/labels/rename | Rename a label across every inventory item.
*InventoryApi* | [**createInventoryUnitIdentifier**](docs/Api/InventoryApi.md#createinventoryunitidentifier) | **POST** /v1/inventory/{id}/units/identifiers | Record a serial, IMEI, or licence key against an inventory item.
*InventoryApi* | [**createInventoryUnitLookup**](docs/Api/InventoryApi.md#createinventoryunitlookup) | **POST** /v1/inventory/units/lookup | Find a unit by identifier.
*InventoryApi* | [**deleteInventory**](docs/Api/InventoryApi.md#deleteinventory) | **DELETE** /v1/inventory/{id} | Soft-archive an inventory item.
*InventoryApi* | [**getInventory**](docs/Api/InventoryApi.md#getinventory) | **GET** /v1/inventory/{id} | Get one inventory item with platform listings.
*InventoryApi* | [**getInventoryFacet**](docs/Api/InventoryApi.md#getinventoryfacet) | **GET** /v1/inventory/facets | Distinct brands + categories across this user&#39;s inventory.
*InventoryApi* | [**getInventoryLabel**](docs/Api/InventoryApi.md#getinventorylabel) | **GET** /v1/inventory/labels | List every distinct label across this user&#39;s inventory.
*InventoryApi* | [**getInventoryLabelStat**](docs/Api/InventoryApi.md#getinventorylabelstat) | **GET** /v1/inventory/labels/stats | List distinct labels with usage counts + colors.
*InventoryApi* | [**getInventorySkuExist**](docs/Api/InventoryApi.md#getinventoryskuexist) | **GET** /v1/inventory/sku-exists | Check whether a SKU is already in use on this user&#39;s inventory.
*InventoryApi* | [**getSpatialPublic**](docs/Api/InventoryApi.md#getspatialpublic) | **GET** /v1/spatial/public/{slug} | A shared room, as a visitor sees it.
*InventoryApi* | [**getSpatialScene**](docs/Api/InventoryApi.md#getspatialscene) | **GET** /v1/spatial/scenes/{id} | A solved room: every item, where it sits, and why.
*InventoryApi* | [**listInventory**](docs/Api/InventoryApi.md#listinventory) | **GET** /v1/inventory | List inventory items.
*InventoryApi* | [**listInventoryActivity**](docs/Api/InventoryApi.md#listinventoryactivity) | **GET** /v1/inventory/{id}/activity | Activity log for an inventory item (created/sold/edited/etc.).
*InventoryApi* | [**listInventoryIds**](docs/Api/InventoryApi.md#listinventoryids) | **GET** /v1/inventory/ids | Filter inventory → return matching id list.
*InventoryApi* | [**listInventoryUnits**](docs/Api/InventoryApi.md#listinventoryunits) | **GET** /v1/inventory/{id}/units | List the individually identified units of an inventory item.
*InventoryApi* | [**listSpatialPublic**](docs/Api/InventoryApi.md#listspatialpublic) | **GET** /v1/spatial/public | Public rooms anyone can walk into.
*InventoryApi* | [**listSpatialPublicOffers**](docs/Api/InventoryApi.md#listspatialpublicoffers) | **GET** /v1/spatial/public/{slug}/offers | What is for sale in a shared room.
*InventoryApi* | [**listSpatialSceneMovements**](docs/Api/InventoryApi.md#listspatialscenemovements) | **GET** /v1/spatial/scenes/{id}/movements | Stock movements in a room over a time window.
*InventoryApi* | [**listSpatialScenes**](docs/Api/InventoryApi.md#listspatialscenes) | **GET** /v1/spatial/scenes | The rooms this account has.
*InventoryApi* | [**updateInventory**](docs/Api/InventoryApi.md#updateinventory) | **PATCH** /v1/inventory/{id} | Update an inventory item (partial).
*ListingsApi* | [**createListing**](docs/Api/ListingsApi.md#createlisting) | **POST** /v1/listings | Create a listing and fan out crosspost jobs across platforms.
*ListingsApi* | [**createListingBulkCheckStatus**](docs/Api/ListingsApi.md#createlistingbulkcheckstatus) | **POST** /v1/listings/bulk-check-status | Check listing status on platforms
*ListingsApi* | [**createListingBulkCrosspost**](docs/Api/ListingsApi.md#createlistingbulkcrosspost) | **POST** /v1/listings/bulk-crosspost | Bulk crosspost (no delist phase)
*ListingsApi* | [**createListingBulkDelete**](docs/Api/ListingsApi.md#createlistingbulkdelete) | **POST** /v1/listings/bulk-delete | Bulk archive + delist
*ListingsApi* | [**createListingBulkDelist**](docs/Api/ListingsApi.md#createlistingbulkdelist) | **POST** /v1/listings/bulk-delist | Bulk delist from platforms
*ListingsApi* | [**createListingBulkDelistPreview**](docs/Api/ListingsApi.md#createlistingbulkdelistpreview) | **POST** /v1/listings/bulk-delist-preview | Preview which marketplaces a delist would touch
*ListingsApi* | [**createListingBulkHardDelete**](docs/Api/ListingsApi.md#createlistingbulkharddelete) | **POST** /v1/listings/bulk-hard-delete | Permanently delete archived listings
*ListingsApi* | [**createListingBulkRelist**](docs/Api/ListingsApi.md#createlistingbulkrelist) | **POST** /v1/listings/bulk-relist | Bulk relist across platforms
*ListingsApi* | [**createListingBulkUpdate**](docs/Api/ListingsApi.md#createlistingbulkupdate) | **POST** /v1/listings/bulk-update | Bulk update listing fields
*ListingsApi* | [**createListingById**](docs/Api/ListingsApi.md#createlistingbyid) | **POST** /v1/listings/by-ids | Fetch hydrated listings by ID
*ListingsApi* | [**createListingCheckDuplicate**](docs/Api/ListingsApi.md#createlistingcheckduplicate) | **POST** /v1/listings/check-duplicates | Check whether the seller already owns something matching this title/photo, and what to do about it.
*ListingsApi* | [**createListingCombine**](docs/Api/ListingsApi.md#createlistingcombine) | **POST** /v1/listings/combine | Combine duplicate listings into one: sums their stock, delists and archives the rest.
*ListingsApi* | [**createListingDiscrepancyResolve**](docs/Api/ListingsApi.md#createlistingdiscrepancyresolve) | **POST** /v1/listings/{id}/discrepancies/{discrepancyId}/resolve | Resolve a detected marketplace-drift discrepancy: accept the platform value, push ours back, relist to apply it, or dismiss.
*ListingsApi* | [**createListingImportByUrl**](docs/Api/ListingsApi.md#createlistingimportbyurl) | **POST** /v1/listings/{id}/import-by-url | Attach a real platform listing to this listing by pasting its live URL.
*ListingsApi* | [**createListingMagicFill**](docs/Api/ListingsApi.md#createlistingmagicfill) | **POST** /v1/listings/{id}/magic-fill | Auto-fill empty fields on one platform tab from the master listing + AI/deterministic taxonomy resolution.
*ListingsApi* | [**deleteListing**](docs/Api/ListingsApi.md#deletelisting) | **DELETE** /v1/listings/{id} | Delist a listing (optionally narrowed to specific platforms via ?platforms&#x3D;).
*ListingsApi* | [**getListing**](docs/Api/ListingsApi.md#getlisting) | **GET** /v1/listings/{id} | Get one listing with its platform rows.
*ListingsApi* | [**getListingFacet**](docs/Api/ListingsApi.md#getlistingfacet) | **GET** /v1/listings/facets | Distinct brands + categories across listings + inventory.
*ListingsApi* | [**getListingSkuExist**](docs/Api/ListingsApi.md#getlistingskuexist) | **GET** /v1/listings/sku-exists | Check whether a SKU is already used by one of this user&#39;s items.
*ListingsApi* | [**listListingDiscrepancies**](docs/Api/ListingsApi.md#listlistingdiscrepancies) | **GET** /v1/listings/{id}/discrepancies | List detected marketplace-drift discrepancies for a listing.
*ListingsApi* | [**listListingIds**](docs/Api/ListingsApi.md#listlistingids) | **GET** /v1/listings/ids | Filter listings → return matching id list (no pagination).
*ListingsApi* | [**listListings**](docs/Api/ListingsApi.md#listlistings) | **GET** /v1/listings | List active platform listings.
*ListingsApi* | [**updateListing**](docs/Api/ListingsApi.md#updatelisting) | **PATCH** /v1/listings/{id} | Edit a listing and fan out update jobs to existing platform listings.
*MagicApi* | [**createMagicScan**](docs/Api/MagicApi.md#createmagicscan) | **POST** /v1/magic/scan | Run a Magic List image scan.
*MagicApi* | [**createMagicScanSynthesize**](docs/Api/MagicApi.md#createmagicscansynthesize) | **POST** /v1/magic/scan/{runId}/synthesize | Synthesize a draft from confirmed matches.
*MagicApi* | [**getMagicDraft**](docs/Api/MagicApi.md#getmagicdraft) | **GET** /v1/magic/drafts/{draftId} | Get a synthesized Magic List draft.
*MagicApi* | [**listMagicRecent**](docs/Api/MagicApi.md#listmagicrecent) | **GET** /v1/magic/recent | Recent Magic List scans for this seller.
*MobileApi* | [**createMobilePushTest**](docs/Api/MobileApi.md#createmobilepushtest) | **POST** /v1/mobile/push-test | Fire a no-op test push to this user&#39;s devices.
*MobileApi* | [**createMobilePushToken**](docs/Api/MobileApi.md#createmobilepushtoken) | **POST** /v1/mobile/push-token | Register an Expo push token for this user.
*MobileApi* | [**deleteMobilePushToken**](docs/Api/MobileApi.md#deletemobilepushtoken) | **DELETE** /v1/mobile/push-tokens | Clear ALL registered push tokens for this user.
*MobileApi* | [**listMobilePushTokens**](docs/Api/MobileApi.md#listmobilepushtokens) | **GET** /v1/mobile/push-tokens | List registered Expo push tokens (masked).
*NetworkApi* | [**createNetworkPool**](docs/Api/NetworkApi.md#createnetworkpool) | **POST** /v1/network/pool | Join the Crossly Network reciprocal engagement pool.
*NetworkApi* | [**deleteNetworkPool**](docs/Api/NetworkApi.md#deletenetworkpool) | **DELETE** /v1/network/pool | Leave the Crossly Network pool.
*NetworkApi* | [**getNetworkPool**](docs/Api/NetworkApi.md#getnetworkpool) | **GET** /v1/network/pool | The seller&#39;s Crossly Network pool membership row.
*NetworkApi* | [**getNetworkPoolSize**](docs/Api/NetworkApi.md#getnetworkpoolsize) | **GET** /v1/network/pool/size | Total members in the Crossly Network pool.
*NetworkApi* | [**listNetworkPoolLog**](docs/Api/NetworkApi.md#listnetworkpoollog) | **GET** /v1/network/pool/log | Recent engagement history — both sent and received.
*NetworkApi* | [**updateNetworkPool**](docs/Api/NetworkApi.md#updatenetworkpool) | **PATCH** /v1/network/pool | Update per-action toggles + platforms on pool membership.
*OffersApi* | [**createOfferRespond**](docs/Api/OffersApi.md#createofferrespond) | **POST** /v1/offers/{id}/respond | Accept, decline, or counter a buyer offer on a Crossly marketplace listing.
*OffersApi* | [**getOffer**](docs/Api/OffersApi.md#getoffer) | **GET** /v1/offers | List buyer offers on your Crossly marketplace listings, including bundles.
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
*OrdersApi* | [**createOrderPullPlatformLabel**](docs/Api/OrdersApi.md#createorderpullplatformlabel) | **POST** /v1/orders/{id}/pull-platform-label | Pull a pre-paid label from cookie platforms (Poshmark/Mercari).
*OrdersApi* | [**createOrderRate**](docs/Api/OrdersApi.md#createorderrate) | **POST** /v1/orders/{id}/rates | EasyPost rate quote for an order.
*OrdersApi* | [**createOrderRefund**](docs/Api/OrdersApi.md#createorderrefund) | **POST** /v1/orders/{id}/refund | Issue a full or partial refund on the platform.
*OrdersApi* | [**createOrderTracking**](docs/Api/OrdersApi.md#createordertracking) | **POST** /v1/orders/{id}/tracking | Submit tracking number + carrier and notify the platform.
*OrdersApi* | [**getOrder**](docs/Api/OrdersApi.md#getorder) | **GET** /v1/orders/{id} | Get one order.
*OrdersApi* | [**getOrderCancelEligibility**](docs/Api/OrdersApi.md#getordercanceleligibility) | **GET** /v1/orders/{id}/cancel-eligibility | Whether this order can be cancelled, and which reason codes the marketplace accepts.
*OrdersApi* | [**getOrderCount**](docs/Api/OrdersApi.md#getordercount) | **GET** /v1/orders/counts | Tab badge counts by status.
*OrdersApi* | [**getOrderEvidence**](docs/Api/OrdersApi.md#getorderevidence) | **GET** /v1/orders/{id}/evidence | Everything recorded about how this order was packed and how it arrived.
*OrdersApi* | [**getOrderPackingSlip**](docs/Api/OrdersApi.md#getorderpackingslip) | **GET** /v1/orders/{id}/packing-slip | Single-order packing slip PDF.
*OrdersApi* | [**getOrderProofOfDelivery**](docs/Api/OrdersApi.md#getorderproofofdelivery) | **GET** /v1/orders/{id}/proof-of-delivery | Proof-of-delivery evidence from the carrier&#39;s scan record (PDF, or JSON).
*OrdersApi* | [**getOrderShipment**](docs/Api/OrdersApi.md#getordershipment) | **GET** /v1/orders/{id}/shipments | List the parcels an order shipped in.
*OrdersApi* | [**listOrderUnits**](docs/Api/OrdersApi.md#listorderunits) | **GET** /v1/orders/{id}/units | List the identified units that shipped on an order.
*OrdersApi* | [**listOrders**](docs/Api/OrdersApi.md#listorders) | **GET** /v1/orders | List orders.
*OrdersApi* | [**updateOrder**](docs/Api/OrdersApi.md#updateorder) | **PATCH** /v1/orders/{id} | Update order (status, notes, tracking).
*PATApi* | [**createPat**](docs/Api/PATApi.md#createpat) | **POST** /v1/pat | Mint a new PAT. Full token returned ONCE — store it on the client.
*PATApi* | [**deletePat**](docs/Api/PATApi.md#deletepat) | **DELETE** /v1/pat/{id} | Revoke a PAT by id.
*PATApi* | [**getPatScope**](docs/Api/PATApi.md#getpatscope) | **GET** /v1/pat/scopes | List the canonical scope catalog.
*PATApi* | [**listPat**](docs/Api/PATApi.md#listpat) | **GET** /v1/pat | List the caller&#39;s PATs (preview only).
*PayoutApi* | [**getPayoutEstimate**](docs/Api/PayoutApi.md#getpayoutestimate) | **GET** /v1/payout/estimate | What one platform nets at a given price, after fees and shipping.
*PayoutApi* | [**getPayoutGrossForNet**](docs/Api/PayoutApi.md#getpayoutgrossfornet) | **GET** /v1/payout/gross-for-net | The gross price needed to clear a target net on one platform.
*PayoutApi* | [**listPayoutCompare**](docs/Api/PayoutApi.md#listpayoutcompare) | **GET** /v1/payout/compare | Rank platforms by what they net at a given price. Defaults to connected ones.
*PolicyPresetsApi* | [**createPolicyPreset**](docs/Api/PolicyPresetsApi.md#createpolicypreset) | **POST** /v1/policy-presets | Create a return / shipping / payment policy preset.
*PolicyPresetsApi* | [**deletePolicyPreset**](docs/Api/PolicyPresetsApi.md#deletepolicypreset) | **DELETE** /v1/policy-presets/{id} | Delete a policy preset.
*PolicyPresetsApi* | [**listPolicyPresets**](docs/Api/PolicyPresetsApi.md#listpolicypresets) | **GET** /v1/policy-presets | List the seller&#39;s return / shipping / payment policy presets.
*PolicyPresetsApi* | [**updatePolicyPreset**](docs/Api/PolicyPresetsApi.md#updatepolicypreset) | **PATCH** /v1/policy-presets/{id} | Update a policy preset.
*ProfileApi* | [**updateMe**](docs/Api/ProfileApi.md#updateme) | **PATCH** /v1/me | Update the authenticated user&#39;s profile (display name, etc).
*ReferenceApi* | [**getBrand**](docs/Api/ReferenceApi.md#getbrand) | **GET** /v1/brands | Search the Crossly brand index. Returns up to 50 matches.
*ReferenceApi* | [**getCategory**](docs/Api/ReferenceApi.md#getcategory) | **GET** /v1/categories | List Crossly&#39;s canonical category tree.
*ReferenceApi* | [**getDepartment**](docs/Api/ReferenceApi.md#getdepartment) | **GET** /v1/departments | Search the eBay-sourced \&quot;Department\&quot; item-specific values.
*ReferenceApi* | [**getGender**](docs/Api/ReferenceApi.md#getgender) | **GET** /v1/genders | Search the eBay-sourced \&quot;Gender\&quot; item-specific values.
*ReferenceApi* | [**getPattern**](docs/Api/ReferenceApi.md#getpattern) | **GET** /v1/patterns | Search the eBay-sourced \&quot;Pattern\&quot; item-specific values.
*ReferenceApi* | [**getSizeSystem**](docs/Api/ReferenceApi.md#getsizesystem) | **GET** /v1/size-systems | Search the Poshmark + Vestiaire size-system union (US/UK/EU/AU/FR/KR).
*ReferenceApi* | [**getStyle**](docs/Api/ReferenceApi.md#getstyle) | **GET** /v1/styles | Search the eBay-sourced \&quot;Style\&quot; item-specific values.
*ReferenceApi* | [**getType**](docs/Api/ReferenceApi.md#gettype) | **GET** /v1/types | Search the eBay-sourced \&quot;Type\&quot; item-specific values.
*RestockPromptsApi* | [**createRestockPromptDismiss**](docs/Api/RestockPromptsApi.md#createrestockpromptdismiss) | **POST** /v1/restock-prompts/{id}/dismiss | Dismiss a pending restock prompt.
*RestockPromptsApi* | [**createRestockPromptRepublish**](docs/Api/RestockPromptsApi.md#createrestockpromptrepublish) | **POST** /v1/restock-prompts/{id}/republish | Republish a restock prompt to platforms.
*RestockPromptsApi* | [**listRestockPrompts**](docs/Api/RestockPromptsApi.md#listrestockprompts) | **GET** /v1/restock-prompts | List pending restock prompts.
*ReturnsApi* | [**createReturn**](docs/Api/ReturnsApi.md#createreturn) | **POST** /v1/returns | Open a return record on an order (rejects if another open return exists).
*ReturnsApi* | [**getReturn**](docs/Api/ReturnsApi.md#getreturn) | **GET** /v1/returns/{id} | Get one return record.
*ReturnsApi* | [**listReturns**](docs/Api/ReturnsApi.md#listreturns) | **GET** /v1/returns | List returns (physical-return workflow). status&#x3D;open|closed|&lt;exact&gt;.
*ReturnsApi* | [**updateReturn**](docs/Api/ReturnsApi.md#updatereturn) | **PATCH** /v1/returns/{id} | Transition return status (received/inspected/restocked) and bump inventory on restock.
*SalesApi* | [**createSaleBulkDelete**](docs/Api/SalesApi.md#createsalebulkdelete) | **POST** /v1/sales/bulk-delete | Bulk soft-delete sales rows.
*SalesApi* | [**listSales**](docs/Api/SalesApi.md#listsales) | **GET** /v1/sales | List sales (each unique sale event).
*SavedViewsApi* | [**createSavedView**](docs/Api/SavedViewsApi.md#createsavedview) | **POST** /v1/saved-views | Create a saved view preset.
*SavedViewsApi* | [**deleteSavedView**](docs/Api/SavedViewsApi.md#deletesavedview) | **DELETE** /v1/saved-views/{id} | Delete a saved view preset.
*SavedViewsApi* | [**listSavedViews**](docs/Api/SavedViewsApi.md#listsavedviews) | **GET** /v1/saved-views | List the seller&#39;s saved view presets.
*SavedViewsApi* | [**updateSavedView**](docs/Api/SavedViewsApi.md#updatesavedview) | **PATCH** /v1/saved-views/{id} | Update a saved view preset.
*SourcingApi* | [**createSourcingReceipt**](docs/Api/SourcingApi.md#createsourcingreceipt) | **POST** /v1/sourcing/receipts | Append a parsed receipt to the sourcing ledger.
*SourcingApi* | [**getSourcingReceipt**](docs/Api/SourcingApi.md#getsourcingreceipt) | **GET** /v1/sourcing/receipts | List parsed sourcing receipts in this user&#39;s ledger.
*SourcingApi* | [**listSourcingDemand**](docs/Api/SourcingApi.md#listsourcingdemand) | **GET** /v1/sourcing/demand | Items buyers looked for on other sites that Crossly did not have.
*SourcingApi* | [**listSourcingDemandMine**](docs/Api/SourcingApi.md#listsourcingdemandmine) | **GET** /v1/sourcing/demand/mine | Unmet buyer demand for items you hold or have sold before.
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
*TaxonomyApi* | [**listTaxonomySuggest**](docs/Api/TaxonomyApi.md#listtaxonomysuggest) | **GET** /v1/taxonomy/{platform}/suggest | Reverse lookup — suggest categories matching a search phrase. eBay-only today.
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

## Models

- [CreateAccountCancelDeletionResponse](docs/Model/CreateAccountCancelDeletionResponse.md)
- [CreateAccountLogoutAllResponse](docs/Model/CreateAccountLogoutAllResponse.md)
- [CreateAccountRequestDeletionResponse](docs/Model/CreateAccountRequestDeletionResponse.md)
- [CreateAccountResponse](docs/Model/CreateAccountResponse.md)
- [CreateAdOffsiteCampaignResponse](docs/Model/CreateAdOffsiteCampaignResponse.md)
- [CreateAdOffsiteResumeResponse](docs/Model/CreateAdOffsiteResumeResponse.md)
- [CreateAiCategorizeFromImageResponse](docs/Model/CreateAiCategorizeFromImageResponse.md)
- [CreateAiCategorizeResponse](docs/Model/CreateAiCategorizeResponse.md)
- [CreateAiEnhanceDescriptionResponse](docs/Model/CreateAiEnhanceDescriptionResponse.md)
- [CreateAiEnhanceListingResponse](docs/Model/CreateAiEnhanceListingResponse.md)
- [CreateAiEnhanceTitleResponse](docs/Model/CreateAiEnhanceTitleResponse.md)
- [CreateAiExtractReceiptResponse](docs/Model/CreateAiExtractReceiptResponse.md)
- [CreateAiExtractReceiptResponseError](docs/Model/CreateAiExtractReceiptResponseError.md)
- [CreateAiGenerateListingResponse](docs/Model/CreateAiGenerateListingResponse.md)
- [CreateAiGenerateListingResponseColors](docs/Model/CreateAiGenerateListingResponseColors.md)
- [CreateAiGenerateListingResponseDescription](docs/Model/CreateAiGenerateListingResponseDescription.md)
- [CreateAiGenerateListingResponsePriceRange](docs/Model/CreateAiGenerateListingResponsePriceRange.md)
- [CreateAiGenerateListingResponsePriceRangeValue](docs/Model/CreateAiGenerateListingResponsePriceRangeValue.md)
- [CreateAiGenerateListingResponseSuggestedPrice](docs/Model/CreateAiGenerateListingResponseSuggestedPrice.md)
- [CreateAiHelpResponse](docs/Model/CreateAiHelpResponse.md)
- [CreateAiMagicListingResponse](docs/Model/CreateAiMagicListingResponse.md)
- [CreateAiTestKeyResponse](docs/Model/CreateAiTestKeyResponse.md)
- [CreateAutomationRuleImportResponse](docs/Model/CreateAutomationRuleImportResponse.md)
- [CreateAutomationRuleImportResponseCreated](docs/Model/CreateAutomationRuleImportResponseCreated.md)
- [CreateAutomationRuleImportResponseErrors](docs/Model/CreateAutomationRuleImportResponseErrors.md)
- [CreateAutomationRuleResponse](docs/Model/CreateAutomationRuleResponse.md)
- [CreateAutomationRuleRunNowResponse](docs/Model/CreateAutomationRuleRunNowResponse.md)
- [CreateAutomationRuleToggleResponse](docs/Model/CreateAutomationRuleToggleResponse.md)
- [CreateAutomationRuleValidateRecipeResponse](docs/Model/CreateAutomationRuleValidateRecipeResponse.md)
- [CreateAutomationRuleValidateRecipeResponseDetails](docs/Model/CreateAutomationRuleValidateRecipeResponseDetails.md)
- [CreateAutomationRuleValidateRecipeResponseDetailsFieldErrors](docs/Model/CreateAutomationRuleValidateRecipeResponseDetailsFieldErrors.md)
- [CreateBillingUpgradeResponse](docs/Model/CreateBillingUpgradeResponse.md)
- [CreateBuyerActivityResponse](docs/Model/CreateBuyerActivityResponse.md)
- [CreateBuyerActivityResponseMatch](docs/Model/CreateBuyerActivityResponseMatch.md)
- [CreateBuyerActivityResponseMatchOffer](docs/Model/CreateBuyerActivityResponseMatchOffer.md)
- [CreateBuyerCartItemResponse](docs/Model/CreateBuyerCartItemResponse.md)
- [CreateBuyerCartQuoteResponse](docs/Model/CreateBuyerCartQuoteResponse.md)
- [CreateBuyerCheckoutResponse](docs/Model/CreateBuyerCheckoutResponse.md)
- [CreateBuyerIdentifyResponse](docs/Model/CreateBuyerIdentifyResponse.md)
- [CreateBuyerIdentifyResponseHud](docs/Model/CreateBuyerIdentifyResponseHud.md)
- [CreateBuyerIdentifyResponseHudAction](docs/Model/CreateBuyerIdentifyResponseHudAction.md)
- [CreateBuyerIdentifyResponseHudFacts](docs/Model/CreateBuyerIdentifyResponseHudFacts.md)
- [CreateBuyerIdentifyResponseIdentifier](docs/Model/CreateBuyerIdentifyResponseIdentifier.md)
- [CreateBuyerIdentifyResponseVisualMatches](docs/Model/CreateBuyerIdentifyResponseVisualMatches.md)
- [CreateBuyerLockonConfirmResponse](docs/Model/CreateBuyerLockonConfirmResponse.md)
- [CreateBuyerLockonObserveResponse](docs/Model/CreateBuyerLockonObserveResponse.md)
- [CreateBuyerLockonObserveResponseCandidates](docs/Model/CreateBuyerLockonObserveResponseCandidates.md)
- [CreateBuyerLockonResponse](docs/Model/CreateBuyerLockonResponse.md)
- [CreateBuyerMonitorResponse](docs/Model/CreateBuyerMonitorResponse.md)
- [CreateBuyerOfferResponse](docs/Model/CreateBuyerOfferResponse.md)
- [CreateBuyerOfferResponseData](docs/Model/CreateBuyerOfferResponseData.md)
- [CreateBuyerOfferResponseDataOffer](docs/Model/CreateBuyerOfferResponseDataOffer.md)
- [CreateBuyerScanResponse](docs/Model/CreateBuyerScanResponse.md)
- [CreateBuyerScanResponseIdentifier](docs/Model/CreateBuyerScanResponseIdentifier.md)
- [CreateBuyerScanSessionEndResponse](docs/Model/CreateBuyerScanSessionEndResponse.md)
- [CreateBuyerScanSessionResponse](docs/Model/CreateBuyerScanSessionResponse.md)
- [CreateBuyerWishlistItemResponse](docs/Model/CreateBuyerWishlistItemResponse.md)
- [CreateBuyerWishlistResponse](docs/Model/CreateBuyerWishlistResponse.md)
- [CreateCbxAccrualPurchaseResponse](docs/Model/CreateCbxAccrualPurchaseResponse.md)
- [CreateCbxAccrualResponse](docs/Model/CreateCbxAccrualResponse.md)
- [CreateCbxAccrualReverseResponse](docs/Model/CreateCbxAccrualReverseResponse.md)
- [CreateCbxAdCreditPurchaseResponse](docs/Model/CreateCbxAdCreditPurchaseResponse.md)
- [CreateCbxAdCreditQuoteResponse](docs/Model/CreateCbxAdCreditQuoteResponse.md)
- [CreateCbxAdCreditSpendResponse](docs/Model/CreateCbxAdCreditSpendResponse.md)
- [CreateCbxBoostPauseResponse](docs/Model/CreateCbxBoostPauseResponse.md)
- [CreateCbxBoostResponse](docs/Model/CreateCbxBoostResponse.md)
- [CreateCbxCampaignApproveResponse](docs/Model/CreateCbxCampaignApproveResponse.md)
- [CreateCbxCampaignExecuteResponse](docs/Model/CreateCbxCampaignExecuteResponse.md)
- [CreateCbxCampaignPreviewResponse](docs/Model/CreateCbxCampaignPreviewResponse.md)
- [CreateCbxCampaignPreviewResponseAllocations](docs/Model/CreateCbxCampaignPreviewResponseAllocations.md)
- [CreateCbxCampaignResponse](docs/Model/CreateCbxCampaignResponse.md)
- [CreateCbxClaimQuoteResponse](docs/Model/CreateCbxClaimQuoteResponse.md)
- [CreateCbxClaimResponse](docs/Model/CreateCbxClaimResponse.md)
- [CreateCbxClaimSendResponse](docs/Model/CreateCbxClaimSendResponse.md)
- [CreateCbxCreditDrawResponse](docs/Model/CreateCbxCreditDrawResponse.md)
- [CreateCbxCreditFreezeResponse](docs/Model/CreateCbxCreditFreezeResponse.md)
- [CreateCbxCreditRefreshResponse](docs/Model/CreateCbxCreditRefreshResponse.md)
- [CreateCbxCreditRepayResponse](docs/Model/CreateCbxCreditRepayResponse.md)
- [CreateCbxDisbursementRuleActiveResponse](docs/Model/CreateCbxDisbursementRuleActiveResponse.md)
- [CreateCbxDisbursementRuleCheckResponse](docs/Model/CreateCbxDisbursementRuleCheckResponse.md)
- [CreateCbxDisbursementRuleResponse](docs/Model/CreateCbxDisbursementRuleResponse.md)
- [CreateCbxEarnTierResponse](docs/Model/CreateCbxEarnTierResponse.md)
- [CreateCbxRateQuoteResponse](docs/Model/CreateCbxRateQuoteResponse.md)
- [CreateCbxRedemptionQuoteResponse](docs/Model/CreateCbxRedemptionQuoteResponse.md)
- [CreateCbxRedemptionResponse](docs/Model/CreateCbxRedemptionResponse.md)
- [CreateCbxRevenueSweepResponse](docs/Model/CreateCbxRevenueSweepResponse.md)
- [CreateCbxRevenueSweepResponseBreakdown](docs/Model/CreateCbxRevenueSweepResponseBreakdown.md)
- [CreateCbxSpendResponse](docs/Model/CreateCbxSpendResponse.md)
- [CreateCbxSpendReverseResponse](docs/Model/CreateCbxSpendReverseResponse.md)
- [CreateCbxStakeTierResponse](docs/Model/CreateCbxStakeTierResponse.md)
- [CreateCbxSubjectGrantResponse](docs/Model/CreateCbxSubjectGrantResponse.md)
- [CreateCbxSubjectResponse](docs/Model/CreateCbxSubjectResponse.md)
- [CreateCbxSubjectSpendPlanResponse](docs/Model/CreateCbxSubjectSpendPlanResponse.md)
- [CreateCbxSubjectSpendPlanResponseLegs](docs/Model/CreateCbxSubjectSpendPlanResponseLegs.md)
- [CreateCbxSubjectStakeResponse](docs/Model/CreateCbxSubjectStakeResponse.md)
- [CreateCbxSubjectStakeUnstakeResponse](docs/Model/CreateCbxSubjectStakeUnstakeResponse.md)
- [CreateCbxWalletChallengeResponse](docs/Model/CreateCbxWalletChallengeResponse.md)
- [CreateCbxWalletPaymentConfirmResponse](docs/Model/CreateCbxWalletPaymentConfirmResponse.md)
- [CreateCbxWalletPaymentQuoteResponse](docs/Model/CreateCbxWalletPaymentQuoteResponse.md)
- [CreateCbxWalletPaymentResolveResponse](docs/Model/CreateCbxWalletPaymentResolveResponse.md)
- [CreateCbxWalletVerifyResponse](docs/Model/CreateCbxWalletVerifyResponse.md)
- [CreateCompWatchlistResponse](docs/Model/CreateCompWatchlistResponse.md)
- [CreateCompWatchlistScrapeResponse](docs/Model/CreateCompWatchlistScrapeResponse.md)
- [CreateConnectionEmailImapResponse](docs/Model/CreateConnectionEmailImapResponse.md)
- [CreateConnectionEmailImapTestResponse](docs/Model/CreateConnectionEmailImapTestResponse.md)
- [CreateConnectionRequestResponse](docs/Model/CreateConnectionRequestResponse.md)
- [CreateCustomerBulkDeleteResponse](docs/Model/CreateCustomerBulkDeleteResponse.md)
- [CreateEmbedKeyResponse](docs/Model/CreateEmbedKeyResponse.md)
- [CreateImportResponse](docs/Model/CreateImportResponse.md)
- [CreateInboxAiSuggestResponse](docs/Model/CreateInboxAiSuggestResponse.md)
- [CreateInboxCannedResponsResponse](docs/Model/CreateInboxCannedResponsResponse.md)
- [CreateInboxConversationBulkAiRespondResponse](docs/Model/CreateInboxConversationBulkAiRespondResponse.md)
- [CreateInboxConversationBulkAiRespondResponseResults](docs/Model/CreateInboxConversationBulkAiRespondResponseResults.md)
- [CreateInboxConversationBulkResponse](docs/Model/CreateInboxConversationBulkResponse.md)
- [CreateInboxConversationOfferActionResponse](docs/Model/CreateInboxConversationOfferActionResponse.md)
- [CreateInboxMessageTriageResponse](docs/Model/CreateInboxMessageTriageResponse.md)
- [CreateInboxOfferResponse](docs/Model/CreateInboxOfferResponse.md)
- [CreateInboxReplyResponse](docs/Model/CreateInboxReplyResponse.md)
- [CreateInventoryBulkArchiveResponse](docs/Model/CreateInventoryBulkArchiveResponse.md)
- [CreateInventoryBulkDeleteResponse](docs/Model/CreateInventoryBulkDeleteResponse.md)
- [CreateInventoryBulkLabelResponse](docs/Model/CreateInventoryBulkLabelResponse.md)
- [CreateInventoryBulkQuantityResponse](docs/Model/CreateInventoryBulkQuantityResponse.md)
- [CreateInventoryCsvImportResponse](docs/Model/CreateInventoryCsvImportResponse.md)
- [CreateInventoryCsvImportResponseProblems](docs/Model/CreateInventoryCsvImportResponseProblems.md)
- [CreateInventoryLabelRenameResponse](docs/Model/CreateInventoryLabelRenameResponse.md)
- [CreateInventoryResponse](docs/Model/CreateInventoryResponse.md)
- [CreateInventoryUnitIdentifierResponse](docs/Model/CreateInventoryUnitIdentifierResponse.md)
- [CreateInventoryUnitLookupResponse](docs/Model/CreateInventoryUnitLookupResponse.md)
- [CreateListingBulkCheckStatusResponse](docs/Model/CreateListingBulkCheckStatusResponse.md)
- [CreateListingBulkCrosspostResponse](docs/Model/CreateListingBulkCrosspostResponse.md)
- [CreateListingBulkDeleteResponse](docs/Model/CreateListingBulkDeleteResponse.md)
- [CreateListingBulkDelistPreviewResponse](docs/Model/CreateListingBulkDelistPreviewResponse.md)
- [CreateListingBulkDelistPreviewResponseMarketplaces](docs/Model/CreateListingBulkDelistPreviewResponseMarketplaces.md)
- [CreateListingBulkDelistResponse](docs/Model/CreateListingBulkDelistResponse.md)
- [CreateListingBulkHardDeleteResponse](docs/Model/CreateListingBulkHardDeleteResponse.md)
- [CreateListingBulkRelistResponse](docs/Model/CreateListingBulkRelistResponse.md)
- [CreateListingBulkUpdateResponse](docs/Model/CreateListingBulkUpdateResponse.md)
- [CreateListingByIdResponse](docs/Model/CreateListingByIdResponse.md)
- [CreateListingByIdResponseItems](docs/Model/CreateListingByIdResponseItems.md)
- [CreateListingCheckDuplicateResponse](docs/Model/CreateListingCheckDuplicateResponse.md)
- [CreateListingCheckDuplicateResponseMatches](docs/Model/CreateListingCheckDuplicateResponseMatches.md)
- [CreateListingCombineResponse](docs/Model/CreateListingCombineResponse.md)
- [CreateListingDiscrepancyResolveResponse](docs/Model/CreateListingDiscrepancyResolveResponse.md)
- [CreateListingImportByUrlResponse](docs/Model/CreateListingImportByUrlResponse.md)
- [CreateListingImportByUrlResponseListing](docs/Model/CreateListingImportByUrlResponseListing.md)
- [CreateListingMagicFillResponse](docs/Model/CreateListingMagicFillResponse.md)
- [CreateListingResponse](docs/Model/CreateListingResponse.md)
- [CreateListingResponseJobs](docs/Model/CreateListingResponseJobs.md)
- [CreateListingResponseListing](docs/Model/CreateListingResponseListing.md)
- [CreateListingResponseSkipped](docs/Model/CreateListingResponseSkipped.md)
- [CreateMagicScanResponse](docs/Model/CreateMagicScanResponse.md)
- [CreateMagicScanResponseEbayHits](docs/Model/CreateMagicScanResponseEbayHits.md)
- [CreateMagicScanResponseEbayMatch](docs/Model/CreateMagicScanResponseEbayMatch.md)
- [CreateMagicScanResponsePossibleDuplicates](docs/Model/CreateMagicScanResponsePossibleDuplicates.md)
- [CreateMagicScanResponseTopHits](docs/Model/CreateMagicScanResponseTopHits.md)
- [CreateMagicScanSynthesizeResponse](docs/Model/CreateMagicScanSynthesizeResponse.md)
- [CreateMagicScanSynthesizeResponsePayload](docs/Model/CreateMagicScanSynthesizeResponsePayload.md)
- [CreateMagicScanSynthesizeResponsePayloadCategory](docs/Model/CreateMagicScanSynthesizeResponsePayloadCategory.md)
- [CreateMagicScanSynthesizeResponsePayloadChosenDimensions](docs/Model/CreateMagicScanSynthesizeResponsePayloadChosenDimensions.md)
- [CreateMagicScanSynthesizeResponsePayloadDimensions](docs/Model/CreateMagicScanSynthesizeResponsePayloadDimensions.md)
- [CreateMagicScanSynthesizeResponsePayloadGrading](docs/Model/CreateMagicScanSynthesizeResponsePayloadGrading.md)
- [CreateMagicScanSynthesizeResponsePayloadSectionApplicability](docs/Model/CreateMagicScanSynthesizeResponsePayloadSectionApplicability.md)
- [CreateMeTemplateImportResponse](docs/Model/CreateMeTemplateImportResponse.md)
- [CreateMeTemplateRenderResponse](docs/Model/CreateMeTemplateRenderResponse.md)
- [CreateMeTemplateResponse](docs/Model/CreateMeTemplateResponse.md)
- [CreateMeTemplateShareResponse](docs/Model/CreateMeTemplateShareResponse.md)
- [CreateMileageResponse](docs/Model/CreateMileageResponse.md)
- [CreateMobilePushTestResponse](docs/Model/CreateMobilePushTestResponse.md)
- [CreateMobilePushTokenResponse](docs/Model/CreateMobilePushTokenResponse.md)
- [CreateNetworkPoolResponse](docs/Model/CreateNetworkPoolResponse.md)
- [CreateNotificationIntegrationResponse](docs/Model/CreateNotificationIntegrationResponse.md)
- [CreateNotificationIntegrationTestResponse](docs/Model/CreateNotificationIntegrationTestResponse.md)
- [CreateOfferRespondResponse](docs/Model/CreateOfferRespondResponse.md)
- [CreateOrderBulkDeleteResponse](docs/Model/CreateOrderBulkDeleteResponse.md)
- [CreateOrderBulkMarkDisputedResponse](docs/Model/CreateOrderBulkMarkDisputedResponse.md)
- [CreateOrderBulkMarkShippedResponse](docs/Model/CreateOrderBulkMarkShippedResponse.md)
- [CreateOrderCancelResponse](docs/Model/CreateOrderCancelResponse.md)
- [CreateOrderDisputeResponse](docs/Model/CreateOrderDisputeResponse.md)
- [CreateOrderDisputeResponseError](docs/Model/CreateOrderDisputeResponseError.md)
- [CreateOrderImportResponse](docs/Model/CreateOrderImportResponse.md)
- [CreateOrderImportResponseResults](docs/Model/CreateOrderImportResponseResults.md)
- [CreateOrderLabelResponse](docs/Model/CreateOrderLabelResponse.md)
- [CreateOrderMessageResponse](docs/Model/CreateOrderMessageResponse.md)
- [CreateOrderPullPlatformLabelResponse](docs/Model/CreateOrderPullPlatformLabelResponse.md)
- [CreateOrderRateResponse](docs/Model/CreateOrderRateResponse.md)
- [CreateOrderRefundResponse](docs/Model/CreateOrderRefundResponse.md)
- [CreateOrderTrackingResponse](docs/Model/CreateOrderTrackingResponse.md)
- [CreatePatResponse](docs/Model/CreatePatResponse.md)
- [CreatePlatformAccountConnectResponse](docs/Model/CreatePlatformAccountConnectResponse.md)
- [CreatePlatformAccountDisconnectResponse](docs/Model/CreatePlatformAccountDisconnectResponse.md)
- [CreatePlatformAccountHistoryImportResponse](docs/Model/CreatePlatformAccountHistoryImportResponse.md)
- [CreatePlatformAccountRefreshStatusResponse](docs/Model/CreatePlatformAccountRefreshStatusResponse.md)
- [CreatePlatformAccountRefreshStatusResponseResults](docs/Model/CreatePlatformAccountRefreshStatusResponseResults.md)
- [CreatePolicyPresetResponse](docs/Model/CreatePolicyPresetResponse.md)
- [CreateRestockPromptDismissResponse](docs/Model/CreateRestockPromptDismissResponse.md)
- [CreateRestockPromptRepublishResponse](docs/Model/CreateRestockPromptRepublishResponse.md)
- [CreateReturnResponse](docs/Model/CreateReturnResponse.md)
- [CreateSaleBulkDeleteResponse](docs/Model/CreateSaleBulkDeleteResponse.md)
- [CreateSavedViewResponse](docs/Model/CreateSavedViewResponse.md)
- [CreateSourcingReceiptResponse](docs/Model/CreateSourcingReceiptResponse.md)
- [CreateTeamAcceptResponse](docs/Model/CreateTeamAcceptResponse.md)
- [CreateTeamInviteResponse](docs/Model/CreateTeamInviteResponse.md)
- [CreateTeamLeaveResponse](docs/Model/CreateTeamLeaveResponse.md)
- [CreateTeamRevokeResponse](docs/Model/CreateTeamRevokeResponse.md)
- [CreateWebhookResponse](docs/Model/CreateWebhookResponse.md)
- [CreateWebhookTestResponse](docs/Model/CreateWebhookTestResponse.md)
- [CreateWorkflowChainResponse](docs/Model/CreateWorkflowChainResponse.md)
- [CreateWorkflowChainRunNowResponse](docs/Model/CreateWorkflowChainRunNowResponse.md)
- [CreateWorkflowChainToggleResponse](docs/Model/CreateWorkflowChainToggleResponse.md)
- [CreateWorkflowChainToggleResponseChain](docs/Model/CreateWorkflowChainToggleResponseChain.md)
- [DeleteAccountResponse](docs/Model/DeleteAccountResponse.md)
- [DeleteAiKeyResponse](docs/Model/DeleteAiKeyResponse.md)
- [DeleteAuthSessionBySessionIdResponse](docs/Model/DeleteAuthSessionBySessionIdResponse.md)
- [DeleteAuthSessionResponse](docs/Model/DeleteAuthSessionResponse.md)
- [DeleteAutomationRuleResponse](docs/Model/DeleteAutomationRuleResponse.md)
- [DeleteCompWatchlistResponse](docs/Model/DeleteCompWatchlistResponse.md)
- [DeleteConnectedAppResponse](docs/Model/DeleteConnectedAppResponse.md)
- [DeleteConnectionByIdResponse](docs/Model/DeleteConnectionByIdResponse.md)
- [DeleteConnectionEmailImapResponse](docs/Model/DeleteConnectionEmailImapResponse.md)
- [DeleteInboxCannedResponsResponse](docs/Model/DeleteInboxCannedResponsResponse.md)
- [DeleteInventoryResponse](docs/Model/DeleteInventoryResponse.md)
- [DeleteListingResponse](docs/Model/DeleteListingResponse.md)
- [DeleteMeTemplateResponse](docs/Model/DeleteMeTemplateResponse.md)
- [DeleteMeTemplateShareResponse](docs/Model/DeleteMeTemplateShareResponse.md)
- [DeleteMileageResponse](docs/Model/DeleteMileageResponse.md)
- [DeleteMobilePushTokenResponse](docs/Model/DeleteMobilePushTokenResponse.md)
- [DeleteNetworkPoolResponse](docs/Model/DeleteNetworkPoolResponse.md)
- [DeleteNotificationIntegrationResponse](docs/Model/DeleteNotificationIntegrationResponse.md)
- [DeletePatResponse](docs/Model/DeletePatResponse.md)
- [DeletePolicyPresetResponse](docs/Model/DeletePolicyPresetResponse.md)
- [DeleteSavedViewResponse](docs/Model/DeleteSavedViewResponse.md)
- [DeleteWebhookResponse](docs/Model/DeleteWebhookResponse.md)
- [DeleteWorkflowChainResponse](docs/Model/DeleteWorkflowChainResponse.md)
- [Error](docs/Model/Error.md)
- [ErrorError](docs/Model/ErrorError.md)
- [GetAccountDeletionStatusResponse](docs/Model/GetAccountDeletionStatusResponse.md)
- [GetAccountDeletionStatusResponsePending](docs/Model/GetAccountDeletionStatusResponsePending.md)
- [GetActionLogFacetResponse](docs/Model/GetActionLogFacetResponse.md)
- [GetActionLogResponse](docs/Model/GetActionLogResponse.md)
- [GetAdOffsiteEligibilityResponse](docs/Model/GetAdOffsiteEligibilityResponse.md)
- [GetAdOffsiteReportResponse](docs/Model/GetAdOffsiteReportResponse.md)
- [GetAdOffsiteResponse](docs/Model/GetAdOffsiteResponse.md)
- [GetAdOffsiteResponseTerms](docs/Model/GetAdOffsiteResponseTerms.md)
- [GetAdOffsiteResponseTermsNetworks](docs/Model/GetAdOffsiteResponseTermsNetworks.md)
- [GetAiProviderResponse](docs/Model/GetAiProviderResponse.md)
- [GetAiProviderResponseProviders](docs/Model/GetAiProviderResponseProviders.md)
- [GetAiStatusResponse](docs/Model/GetAiStatusResponse.md)
- [GetAiStatusResponseCapabilities](docs/Model/GetAiStatusResponseCapabilities.md)
- [GetAiStatusResponseCustomConfig](docs/Model/GetAiStatusResponseCustomConfig.md)
- [GetAnalyticBookkeepingResponse](docs/Model/GetAnalyticBookkeepingResponse.md)
- [GetAnalyticBookkeepingResponseAnnualTotals](docs/Model/GetAnalyticBookkeepingResponseAnnualTotals.md)
- [GetAnalyticBookkeepingResponseMonthlyPL](docs/Model/GetAnalyticBookkeepingResponseMonthlyPL.md)
- [GetAnalyticBookkeepingResponsePlatformBreakdown](docs/Model/GetAnalyticBookkeepingResponsePlatformBreakdown.md)
- [GetAnalyticByPlatformResponse](docs/Model/GetAnalyticByPlatformResponse.md)
- [GetAnalyticByPlatformResponseBreakdown](docs/Model/GetAnalyticByPlatformResponseBreakdown.md)
- [GetAnalyticDashboardResponse](docs/Model/GetAnalyticDashboardResponse.md)
- [GetAnalyticDashboardResponseAvgSalePriceByPlatform](docs/Model/GetAnalyticDashboardResponseAvgSalePriceByPlatform.md)
- [GetAnalyticDashboardResponseCancelRate](docs/Model/GetAnalyticDashboardResponseCancelRate.md)
- [GetAnalyticDashboardResponseRecentSales](docs/Model/GetAnalyticDashboardResponseRecentSales.md)
- [GetAnalyticDashboardResponseRevenue](docs/Model/GetAnalyticDashboardResponseRevenue.md)
- [GetAnalyticDashboardResponseRevenueByDay](docs/Model/GetAnalyticDashboardResponseRevenueByDay.md)
- [GetAnalyticDashboardResponseSalesByPlatform](docs/Model/GetAnalyticDashboardResponseSalesByPlatform.md)
- [GetAnalyticDashboardResponseSellThrough](docs/Model/GetAnalyticDashboardResponseSellThrough.md)
- [GetAnalyticDashboardResponseTop5ItemsByRevenue](docs/Model/GetAnalyticDashboardResponseTop5ItemsByRevenue.md)
- [GetAnalyticDashboardResponseTopCategories](docs/Model/GetAnalyticDashboardResponseTopCategories.md)
- [GetAnalyticItemResponse](docs/Model/GetAnalyticItemResponse.md)
- [GetAnalyticItemResponseItems](docs/Model/GetAnalyticItemResponseItems.md)
- [GetAnalyticSummaryResponse](docs/Model/GetAnalyticSummaryResponse.md)
- [GetAnalyticTimeseryResponse](docs/Model/GetAnalyticTimeseryResponse.md)
- [GetAnalyticTimeseryResponseSeries](docs/Model/GetAnalyticTimeseryResponseSeries.md)
- [GetAnalyticTodayResponse](docs/Model/GetAnalyticTodayResponse.md)
- [GetAnalyticTodayResponseChecklist](docs/Model/GetAnalyticTodayResponseChecklist.md)
- [GetAnalyticTodayResponseStreak](docs/Model/GetAnalyticTodayResponseStreak.md)
- [GetAutomationCatalogResponse](docs/Model/GetAutomationCatalogResponse.md)
- [GetAutomationCatalogResponseTriggerTypes](docs/Model/GetAutomationCatalogResponseTriggerTypes.md)
- [GetAutomationRuleExportByIdResponse](docs/Model/GetAutomationRuleExportByIdResponse.md)
- [GetAutomationRuleExportResponse](docs/Model/GetAutomationRuleExportResponse.md)
- [GetAutomationRuleExportResponseAction](docs/Model/GetAutomationRuleExportResponseAction.md)
- [GetAutomationRuleExportResponseCondition](docs/Model/GetAutomationRuleExportResponseCondition.md)
- [GetAutomationRuleExportResponseMetadata](docs/Model/GetAutomationRuleExportResponseMetadata.md)
- [GetAutomationRuleExportResponseRecipes](docs/Model/GetAutomationRuleExportResponseRecipes.md)
- [GetAutomationRuleResponse](docs/Model/GetAutomationRuleResponse.md)
- [GetAutomationRuleResponseRule](docs/Model/GetAutomationRuleResponseRule.md)
- [GetBrandResponse](docs/Model/GetBrandResponse.md)
- [GetBuyerAnywhereResponse](docs/Model/GetBuyerAnywhereResponse.md)
- [GetBuyerAnywhereResponseAlternates](docs/Model/GetBuyerAnywhereResponseAlternates.md)
- [GetBuyerAnywhereResponseCrossly](docs/Model/GetBuyerAnywhereResponseCrossly.md)
- [GetBuyerAnywhereResponseOffsite](docs/Model/GetBuyerAnywhereResponseOffsite.md)
- [GetBuyerCatalogFacetResponse](docs/Model/GetBuyerCatalogFacetResponse.md)
- [GetBuyerCatalogFacetResponseBrands](docs/Model/GetBuyerCatalogFacetResponseBrands.md)
- [GetBuyerCatalogListingAvailabilityResponse](docs/Model/GetBuyerCatalogListingAvailabilityResponse.md)
- [GetBuyerCatalogListingResponse](docs/Model/GetBuyerCatalogListingResponse.md)
- [GetBuyerCheckoutControlResponse](docs/Model/GetBuyerCheckoutControlResponse.md)
- [GetBuyerPreferenceResponse](docs/Model/GetBuyerPreferenceResponse.md)
- [GetBuyerPreferenceResponseBrands](docs/Model/GetBuyerPreferenceResponseBrands.md)
- [GetBuyerPreferenceResponsePriceBand](docs/Model/GetBuyerPreferenceResponsePriceBand.md)
- [GetBuyerPreferenceResponseRetailers](docs/Model/GetBuyerPreferenceResponseRetailers.md)
- [GetBuyerProfileResponse](docs/Model/GetBuyerProfileResponse.md)
- [GetBuyerScanSessionResponse](docs/Model/GetBuyerScanSessionResponse.md)
- [GetBuyerScanSessionResponseCaptures](docs/Model/GetBuyerScanSessionResponseCaptures.md)
- [GetBuyerScanSessionResponseIdentifier](docs/Model/GetBuyerScanSessionResponseIdentifier.md)
- [GetCatalogLookupResponse](docs/Model/GetCatalogLookupResponse.md)
- [GetCatalogLookupResponseCatalog](docs/Model/GetCatalogLookupResponseCatalog.md)
- [GetCatalogLookupResponseIdentifier](docs/Model/GetCatalogLookupResponseIdentifier.md)
- [GetCatalogLookupResponseOffers](docs/Model/GetCatalogLookupResponseOffers.md)
- [GetCategoryResponse](docs/Model/GetCategoryResponse.md)
- [GetCategoryResponseMain](docs/Model/GetCategoryResponseMain.md)
- [GetCbxAdCreditResponse](docs/Model/GetCbxAdCreditResponse.md)
- [GetCbxClaimResponse](docs/Model/GetCbxClaimResponse.md)
- [GetCbxCreditResponse](docs/Model/GetCbxCreditResponse.md)
- [GetCbxMeResponse](docs/Model/GetCbxMeResponse.md)
- [GetCbxMeResponseTerms](docs/Model/GetCbxMeResponseTerms.md)
- [GetCbxPoolResponse](docs/Model/GetCbxPoolResponse.md)
- [GetCbxRevenueResponse](docs/Model/GetCbxRevenueResponse.md)
- [GetCbxSubjectBalanceBySubjectIdResponse](docs/Model/GetCbxSubjectBalanceBySubjectIdResponse.md)
- [GetCbxSubjectBalanceResponse](docs/Model/GetCbxSubjectBalanceResponse.md)
- [GetCbxSubjectSpentResponse](docs/Model/GetCbxSubjectSpentResponse.md)
- [GetCbxSubjectStakeResponse](docs/Model/GetCbxSubjectStakeResponse.md)
- [GetCbxSubjectWalletResponse](docs/Model/GetCbxSubjectWalletResponse.md)
- [GetCbxTreasuryResponse](docs/Model/GetCbxTreasuryResponse.md)
- [GetConnectionEmailResponse](docs/Model/GetConnectionEmailResponse.md)
- [GetConnectionEmailResponseData](docs/Model/GetConnectionEmailResponseData.md)
- [GetConnectionEmailResponseOauth](docs/Model/GetConnectionEmailResponseOauth.md)
- [GetConnectionExtensionOnlineResponse](docs/Model/GetConnectionExtensionOnlineResponse.md)
- [GetConnectionHealthResponse](docs/Model/GetConnectionHealthResponse.md)
- [GetConnectionHealthResponseAccounts](docs/Model/GetConnectionHealthResponseAccounts.md)
- [GetConnectionHealthResponseAnchors](docs/Model/GetConnectionHealthResponseAnchors.md)
- [GetConnectionHealthResponseBrowser](docs/Model/GetConnectionHealthResponseBrowser.md)
- [GetConnectionHealthResponseExtension](docs/Model/GetConnectionHealthResponseExtension.md)
- [GetConnectionHealthResponseLiveness](docs/Model/GetConnectionHealthResponseLiveness.md)
- [GetCustomerResponse](docs/Model/GetCustomerResponse.md)
- [GetCustomerResponseContact](docs/Model/GetCustomerResponseContact.md)
- [GetCustomerResponseContactAddress](docs/Model/GetCustomerResponseContactAddress.md)
- [GetCustomerResponseOrders](docs/Model/GetCustomerResponseOrders.md)
- [GetDepartmentResponse](docs/Model/GetDepartmentResponse.md)
- [GetGenderResponse](docs/Model/GetGenderResponse.md)
- [GetImportResponse](docs/Model/GetImportResponse.md)
- [GetInboxCannedResponsResponse](docs/Model/GetInboxCannedResponsResponse.md)
- [GetInboxCannedResponsResponseCannedResponses](docs/Model/GetInboxCannedResponsResponseCannedResponses.md)
- [GetInboxConversationMessageResponse](docs/Model/GetInboxConversationMessageResponse.md)
- [GetInboxConversationMessageResponseMessages](docs/Model/GetInboxConversationMessageResponseMessages.md)
- [GetInboxConversationUnreadCountResponse](docs/Model/GetInboxConversationUnreadCountResponse.md)
- [GetInboxResponse](docs/Model/GetInboxResponse.md)
- [GetInboxResponseMessages](docs/Model/GetInboxResponseMessages.md)
- [GetInventoryFacetResponse](docs/Model/GetInventoryFacetResponse.md)
- [GetInventoryLabelResponse](docs/Model/GetInventoryLabelResponse.md)
- [GetInventoryLabelStatResponse](docs/Model/GetInventoryLabelStatResponse.md)
- [GetInventoryLabelStatResponseLabels](docs/Model/GetInventoryLabelStatResponseLabels.md)
- [GetInventoryResponse](docs/Model/GetInventoryResponse.md)
- [GetInventoryResponsePlatformListings](docs/Model/GetInventoryResponsePlatformListings.md)
- [GetInventorySkuExistResponse](docs/Model/GetInventorySkuExistResponse.md)
- [GetListingFacetResponse](docs/Model/GetListingFacetResponse.md)
- [GetListingResponse](docs/Model/GetListingResponse.md)
- [GetListingResponsePlatformListings](docs/Model/GetListingResponsePlatformListings.md)
- [GetListingSkuExistResponse](docs/Model/GetListingSkuExistResponse.md)
- [GetListingVariationGroupResponse](docs/Model/GetListingVariationGroupResponse.md)
- [GetListingVariationGroupResponseGroup](docs/Model/GetListingVariationGroupResponseGroup.md)
- [GetMagicDraftResponse](docs/Model/GetMagicDraftResponse.md)
- [GetMagicDraftResponseDraft](docs/Model/GetMagicDraftResponseDraft.md)
- [GetMarketProductResponse](docs/Model/GetMarketProductResponse.md)
- [GetMarketProductResponseProduct](docs/Model/GetMarketProductResponseProduct.md)
- [GetMarketProductResponseProductProposedVariants](docs/Model/GetMarketProductResponseProductProposedVariants.md)
- [GetMarketProductResponseVariants](docs/Model/GetMarketProductResponseVariants.md)
- [GetMarketVariantBookResponse](docs/Model/GetMarketVariantBookResponse.md)
- [GetMarketVariantBookResponseBids](docs/Model/GetMarketVariantBookResponseBids.md)
- [GetMeTemplateResponse](docs/Model/GetMeTemplateResponse.md)
- [GetMeTemplateSuggestResponse](docs/Model/GetMeTemplateSuggestResponse.md)
- [GetMileageSummaryResponse](docs/Model/GetMileageSummaryResponse.md)
- [GetNetworkPoolResponse](docs/Model/GetNetworkPoolResponse.md)
- [GetNetworkPoolResponseMember](docs/Model/GetNetworkPoolResponseMember.md)
- [GetNetworkPoolSizeResponse](docs/Model/GetNetworkPoolSizeResponse.md)
- [GetOauthInitResponse](docs/Model/GetOauthInitResponse.md)
- [GetOauthInitResponseOneOf](docs/Model/GetOauthInitResponseOneOf.md)
- [GetOauthInitResponseOneOf1](docs/Model/GetOauthInitResponseOneOf1.md)
- [GetOauthInitResponseOneOf2](docs/Model/GetOauthInitResponseOneOf2.md)
- [GetOauthInitResponseOneOf3](docs/Model/GetOauthInitResponseOneOf3.md)
- [GetOfferResponse](docs/Model/GetOfferResponse.md)
- [GetOfferResponseOffers](docs/Model/GetOfferResponseOffers.md)
- [GetOrderCancelEligibilityResponse](docs/Model/GetOrderCancelEligibilityResponse.md)
- [GetOrderEvidenceResponse](docs/Model/GetOrderEvidenceResponse.md)
- [GetOrderEvidenceResponseArrival](docs/Model/GetOrderEvidenceResponseArrival.md)
- [GetOrderEvidenceResponseCaptures](docs/Model/GetOrderEvidenceResponseCaptures.md)
- [GetOrderEvidenceResponseGrade](docs/Model/GetOrderEvidenceResponseGrade.md)
- [GetOrderEvidenceResponseGradeSignals](docs/Model/GetOrderEvidenceResponseGradeSignals.md)
- [GetOrderEvidenceResponseSeal](docs/Model/GetOrderEvidenceResponseSeal.md)
- [GetOrderEvidenceResponseSealAssessment](docs/Model/GetOrderEvidenceResponseSealAssessment.md)
- [GetOrderEvidenceResponseUnits](docs/Model/GetOrderEvidenceResponseUnits.md)
- [GetOrderProofOfDeliveryResponse](docs/Model/GetOrderProofOfDeliveryResponse.md)
- [GetOrderProofOfDeliveryResponseScans](docs/Model/GetOrderProofOfDeliveryResponseScans.md)
- [GetOrderResponse](docs/Model/GetOrderResponse.md)
- [GetOrderShipmentResponse](docs/Model/GetOrderShipmentResponse.md)
- [GetOrderShipmentResponseData](docs/Model/GetOrderShipmentResponseData.md)
- [GetPatScopeResponse](docs/Model/GetPatScopeResponse.md)
- [GetPatScopeResponseScopes](docs/Model/GetPatScopeResponseScopes.md)
- [GetPatternResponse](docs/Model/GetPatternResponse.md)
- [GetPayoutEstimateResponse](docs/Model/GetPayoutEstimateResponse.md)
- [GetPayoutGrossForNetResponse](docs/Model/GetPayoutGrossForNetResponse.md)
- [GetPayoutGrossForNetResponseEstimate](docs/Model/GetPayoutGrossForNetResponseEstimate.md)
- [GetPlatformLimitResponse](docs/Model/GetPlatformLimitResponse.md)
- [GetPlatformLimitResponseEbay](docs/Model/GetPlatformLimitResponseEbay.md)
- [GetPlatformLimitResponseEbaySellingCap](docs/Model/GetPlatformLimitResponseEbaySellingCap.md)
- [GetPlatformLimitResponseEtsy](docs/Model/GetPlatformLimitResponseEtsy.md)
- [GetReturnResponse](docs/Model/GetReturnResponse.md)
- [GetSizeSystemResponse](docs/Model/GetSizeSystemResponse.md)
- [GetSourcingReceiptResponse](docs/Model/GetSourcingReceiptResponse.md)
- [GetSpatialPublicResponse](docs/Model/GetSpatialPublicResponse.md)
- [GetSpatialPublicResponseItems](docs/Model/GetSpatialPublicResponseItems.md)
- [GetSpatialPublicResponseProfile](docs/Model/GetSpatialPublicResponseProfile.md)
- [GetSpatialPublicResponseProfileContainers](docs/Model/GetSpatialPublicResponseProfileContainers.md)
- [GetSpatialPublicResponseProfileItemSize](docs/Model/GetSpatialPublicResponseProfileItemSize.md)
- [GetSpatialPublicResponseScene](docs/Model/GetSpatialPublicResponseScene.md)
- [GetSpatialPublicResponseSolved](docs/Model/GetSpatialPublicResponseSolved.md)
- [GetSpatialPublicResponseSolvedContainers](docs/Model/GetSpatialPublicResponseSolvedContainers.md)
- [GetSpatialPublicResponseSolvedDividers](docs/Model/GetSpatialPublicResponseSolvedDividers.md)
- [GetSpatialPublicResponseSolvedPlacements](docs/Model/GetSpatialPublicResponseSolvedPlacements.md)
- [GetSpatialPublicResponseStats](docs/Model/GetSpatialPublicResponseStats.md)
- [GetSpatialSceneResponse](docs/Model/GetSpatialSceneResponse.md)
- [GetSpatialSceneResponseBreakdowns](docs/Model/GetSpatialSceneResponseBreakdowns.md)
- [GetSpatialSceneResponseItems](docs/Model/GetSpatialSceneResponseItems.md)
- [GetSpatialSceneResponseScene](docs/Model/GetSpatialSceneResponseScene.md)
- [GetSpatialSceneResponseSize](docs/Model/GetSpatialSceneResponseSize.md)
- [GetSpatialSceneResponseStats](docs/Model/GetSpatialSceneResponseStats.md)
- [GetStyleResponse](docs/Model/GetStyleResponse.md)
- [GetTaxScheduleCResponse](docs/Model/GetTaxScheduleCResponse.md)
- [GetTaxScheduleCResponseCounts](docs/Model/GetTaxScheduleCResponseCounts.md)
- [GetTaxScheduleCResponseExpenses](docs/Model/GetTaxScheduleCResponseExpenses.md)
- [GetTaxonomyCategoryAspectResponse](docs/Model/GetTaxonomyCategoryAspectResponse.md)
- [GetTaxonomyCategoryAspectResponseAspects](docs/Model/GetTaxonomyCategoryAspectResponseAspects.md)
- [GetTaxonomyCategoryChildrenResponse](docs/Model/GetTaxonomyCategoryChildrenResponse.md)
- [GetTaxonomyCategoryResponse](docs/Model/GetTaxonomyCategoryResponse.md)
- [GetTaxonomyCategoryResponseCategories](docs/Model/GetTaxonomyCategoryResponseCategories.md)
- [GetTaxonomyRequiredFieldResponse](docs/Model/GetTaxonomyRequiredFieldResponse.md)
- [GetTaxonomyRequiredFieldResponseRequiredFields](docs/Model/GetTaxonomyRequiredFieldResponseRequiredFields.md)
- [GetTeamResponse](docs/Model/GetTeamResponse.md)
- [GetTeamResponseInvitations](docs/Model/GetTeamResponseInvitations.md)
- [GetTeamResponseMembers](docs/Model/GetTeamResponseMembers.md)
- [GetTypeResponse](docs/Model/GetTypeResponse.md)
- [GetVariationGroupPublishPlanResponse](docs/Model/GetVariationGroupPublishPlanResponse.md)
- [GetVariationGroupPublishPlanResponsePlans](docs/Model/GetVariationGroupPublishPlanResponsePlans.md)
- [GetVariationGroupResponse](docs/Model/GetVariationGroupResponse.md)
- [GetWorkflowChainResponse](docs/Model/GetWorkflowChainResponse.md)
- [GetWorkflowChainResponseChain](docs/Model/GetWorkflowChainResponseChain.md)
- [InlineObject](docs/Model/InlineObject.md)
- [InlineObject1](docs/Model/InlineObject1.md)
- [InlineObject2](docs/Model/InlineObject2.md)
- [InlineObject3](docs/Model/InlineObject3.md)
- [InlineResponse200](docs/Model/InlineResponse200.md)
- [ListAccountsItem](docs/Model/ListAccountsItem.md)
- [ListActionLogCallsItem](docs/Model/ListActionLogCallsItem.md)
- [ListActionLogItem](docs/Model/ListActionLogItem.md)
- [ListAuthSessionsItem](docs/Model/ListAuthSessionsItem.md)
- [ListAutomationRulesItem](docs/Model/ListAutomationRulesItem.md)
- [ListAutomationRunsItem](docs/Model/ListAutomationRunsItem.md)
- [ListBuyerActivityItem](docs/Model/ListBuyerActivityItem.md)
- [ListBuyerCartItem](docs/Model/ListBuyerCartItem.md)
- [ListBuyerCashbackItem](docs/Model/ListBuyerCashbackItem.md)
- [ListBuyerCatalogSearchItem](docs/Model/ListBuyerCatalogSearchItem.md)
- [ListBuyerMonitorMatchesItem](docs/Model/ListBuyerMonitorMatchesItem.md)
- [ListBuyerMonitorsItem](docs/Model/ListBuyerMonitorsItem.md)
- [ListBuyerOrdersItem](docs/Model/ListBuyerOrdersItem.md)
- [ListBuyerScanSessionsItem](docs/Model/ListBuyerScanSessionsItem.md)
- [ListBuyerWishlistItemsItem](docs/Model/ListBuyerWishlistItemsItem.md)
- [ListBuyerWishlistsItem](docs/Model/ListBuyerWishlistsItem.md)
- [ListCbxAdCreditLedgerItem](docs/Model/ListCbxAdCreditLedgerItem.md)
- [ListCbxBoostsItem](docs/Model/ListCbxBoostsItem.md)
- [ListCbxCampaignPayoutsItem](docs/Model/ListCbxCampaignPayoutsItem.md)
- [ListCbxCampaignsItem](docs/Model/ListCbxCampaignsItem.md)
- [ListCbxDisbursementProgressItem](docs/Model/ListCbxDisbursementProgressItem.md)
- [ListCbxDisbursementRulesItem](docs/Model/ListCbxDisbursementRulesItem.md)
- [ListCbxEarnTiersItem](docs/Model/ListCbxEarnTiersItem.md)
- [ListCbxRedemptionServicesItem](docs/Model/ListCbxRedemptionServicesItem.md)
- [ListCbxStakeTiersItem](docs/Model/ListCbxStakeTiersItem.md)
- [ListCbxSubjectGrantsItem](docs/Model/ListCbxSubjectGrantsItem.md)
- [ListCbxSubjectLedgerItem](docs/Model/ListCbxSubjectLedgerItem.md)
- [ListCbxWalletPaymentReviewItem](docs/Model/ListCbxWalletPaymentReviewItem.md)
- [ListCompWatchlistRecentItem](docs/Model/ListCompWatchlistRecentItem.md)
- [ListCompWatchlistsItem](docs/Model/ListCompWatchlistsItem.md)
- [ListConnectedAppsItem](docs/Model/ListConnectedAppsItem.md)
- [ListConnectionsItem](docs/Model/ListConnectionsItem.md)
- [ListCustomersItem](docs/Model/ListCustomersItem.md)
- [ListDevicesItem](docs/Model/ListDevicesItem.md)
- [ListEmbedKeysItem](docs/Model/ListEmbedKeysItem.md)
- [ListImportsItem](docs/Model/ListImportsItem.md)
- [ListImportsItemFilters](docs/Model/ListImportsItemFilters.md)
- [ListInboxItem](docs/Model/ListInboxItem.md)
- [ListInsightByPlatformItem](docs/Model/ListInsightByPlatformItem.md)
- [ListInventoryActivityItem](docs/Model/ListInventoryActivityItem.md)
- [ListInventoryItem](docs/Model/ListInventoryItem.md)
- [ListInventoryItemCategory](docs/Model/ListInventoryItemCategory.md)
- [ListInventoryUnitsItem](docs/Model/ListInventoryUnitsItem.md)
- [ListInventoryUnitsItemIdentifiers](docs/Model/ListInventoryUnitsItemIdentifiers.md)
- [ListListingDiscrepanciesItem](docs/Model/ListListingDiscrepanciesItem.md)
- [ListListingsItem](docs/Model/ListListingsItem.md)
- [ListListingsItemGrading](docs/Model/ListListingsItemGrading.md)
- [ListMagicRecentItem](docs/Model/ListMagicRecentItem.md)
- [ListMarketGradersItem](docs/Model/ListMarketGradersItem.md)
- [ListMarketProductsItem](docs/Model/ListMarketProductsItem.md)
- [ListMarketVariantTiersItem](docs/Model/ListMarketVariantTiersItem.md)
- [ListMeTemplatesItem](docs/Model/ListMeTemplatesItem.md)
- [ListMileageItem](docs/Model/ListMileageItem.md)
- [ListMobilePushTokensItem](docs/Model/ListMobilePushTokensItem.md)
- [ListNetworkPoolLogItem](docs/Model/ListNetworkPoolLogItem.md)
- [ListNotificationIntegrationsItem](docs/Model/ListNotificationIntegrationsItem.md)
- [ListOrderUnitsItem](docs/Model/ListOrderUnitsItem.md)
- [ListOrderUnitsItemIdentifiers](docs/Model/ListOrderUnitsItemIdentifiers.md)
- [ListOrdersItem](docs/Model/ListOrdersItem.md)
- [ListOrdersItemTrackingHistory](docs/Model/ListOrdersItemTrackingHistory.md)
- [ListPatItem](docs/Model/ListPatItem.md)
- [ListPayoutCompareItem](docs/Model/ListPayoutCompareItem.md)
- [ListPolicyPresetsItem](docs/Model/ListPolicyPresetsItem.md)
- [ListRestockPromptsItem](docs/Model/ListRestockPromptsItem.md)
- [ListReturnsItem](docs/Model/ListReturnsItem.md)
- [ListSalesItem](docs/Model/ListSalesItem.md)
- [ListSalesItemDocuments](docs/Model/ListSalesItemDocuments.md)
- [ListSavedViewsItem](docs/Model/ListSavedViewsItem.md)
- [ListSourcingDemandItem](docs/Model/ListSourcingDemandItem.md)
- [ListSourcingDemandMineItem](docs/Model/ListSourcingDemandMineItem.md)
- [ListSpatialPublicItem](docs/Model/ListSpatialPublicItem.md)
- [ListSpatialPublicOffersItem](docs/Model/ListSpatialPublicOffersItem.md)
- [ListSpatialSceneMovementsItem](docs/Model/ListSpatialSceneMovementsItem.md)
- [ListSpatialScenesItem](docs/Model/ListSpatialScenesItem.md)
- [ListTaxonomySuggestItem](docs/Model/ListTaxonomySuggestItem.md)
- [ListTaxonomySuggestItemCatalog](docs/Model/ListTaxonomySuggestItemCatalog.md)
- [ListTaxonomySuggestItemDisplays](docs/Model/ListTaxonomySuggestItemDisplays.md)
- [ListVariationGroupsItem](docs/Model/ListVariationGroupsItem.md)
- [ListVariationGroupsItemMembers](docs/Model/ListVariationGroupsItemMembers.md)
- [ListVariationGroupsItemRollup](docs/Model/ListVariationGroupsItemRollup.md)
- [ListWebhooksItem](docs/Model/ListWebhooksItem.md)
- [ListWorkflowChainsItem](docs/Model/ListWorkflowChainsItem.md)
- [ListWorkflowChainsItemSteps](docs/Model/ListWorkflowChainsItemSteps.md)
- [Pagination](docs/Model/Pagination.md)
- [UpdateAdOffsiteResponse](docs/Model/UpdateAdOffsiteResponse.md)
- [UpdateAiKeyResponse](docs/Model/UpdateAiKeyResponse.md)
- [UpdateAutomationRuleResponse](docs/Model/UpdateAutomationRuleResponse.md)
- [UpdateBuyerCheckoutControlResponse](docs/Model/UpdateBuyerCheckoutControlResponse.md)
- [UpdateBuyerMonitorResponse](docs/Model/UpdateBuyerMonitorResponse.md)
- [UpdateConnectionEmailImapResponse](docs/Model/UpdateConnectionEmailImapResponse.md)
- [UpdateInboxCannedResponsResponse](docs/Model/UpdateInboxCannedResponsResponse.md)
- [UpdateInboxConversationResponse](docs/Model/UpdateInboxConversationResponse.md)
- [UpdateInboxConversationResponseConversation](docs/Model/UpdateInboxConversationResponseConversation.md)
- [UpdateInventoryResponse](docs/Model/UpdateInventoryResponse.md)
- [UpdateListingResponse](docs/Model/UpdateListingResponse.md)
- [UpdateMeResponse](docs/Model/UpdateMeResponse.md)
- [UpdateMeTemplateResponse](docs/Model/UpdateMeTemplateResponse.md)
- [UpdateMileageResponse](docs/Model/UpdateMileageResponse.md)
- [UpdateNetworkPoolResponse](docs/Model/UpdateNetworkPoolResponse.md)
- [UpdateNotificationIntegrationResponse](docs/Model/UpdateNotificationIntegrationResponse.md)
- [UpdateOrderResponse](docs/Model/UpdateOrderResponse.md)
- [UpdatePlatformPreferenceResponse](docs/Model/UpdatePlatformPreferenceResponse.md)
- [UpdatePolicyPresetResponse](docs/Model/UpdatePolicyPresetResponse.md)
- [UpdateReturnResponse](docs/Model/UpdateReturnResponse.md)
- [UpdateSavedViewResponse](docs/Model/UpdateSavedViewResponse.md)
- [UpdateTeamResponse](docs/Model/UpdateTeamResponse.md)
- [UpdateWorkflowChainResponse](docs/Model/UpdateWorkflowChainResponse.md)
- [V1List](docs/Model/V1List.md)

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
