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
$inline_object4 = new \Crossly\Buyer\Model\InlineObject4(); // \Crossly\Buyer\Model\InlineObject4

try {
    $result = $apiInstance->createBuyerActivity($inline_object4);
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
*BuyerApi* | [**createBuyerCartItem**](docs/Api/BuyerApi.md#createbuyercartitem) | **POST** /v1/buyer/cart/items | Add a listing to your cart.
*BuyerApi* | [**createBuyerCartQuote**](docs/Api/BuyerApi.md#createbuyercartquote) | **POST** /v1/buyer/cart/quote | Price the cart, delivered — item, shipping, tax, total.
*BuyerApi* | [**createBuyerOffer**](docs/Api/BuyerApi.md#createbuyeroffer) | **POST** /v1/buyer/offers | Offer a price on a listing.
*BuyerApi* | [**createBuyerWishlist**](docs/Api/BuyerApi.md#createbuyerwishlist) | **POST** /v1/buyer/wishlists | Create a wishlist.
*BuyerApi* | [**createBuyerWishlistItem**](docs/Api/BuyerApi.md#createbuyerwishlistitem) | **POST** /v1/buyer/wishlists/{id}/items | Add a listing to a wishlist.
*BuyerApi* | [**deleteBuyerCartItem**](docs/Api/BuyerApi.md#deletebuyercartitem) | **DELETE** /v1/buyer/cart/items/{id} | Remove a line from your cart.
*BuyerApi* | [**getBuyerPreference**](docs/Api/BuyerApi.md#getbuyerpreference) | **GET** /v1/buyer/preferences | The shopping profile derived from that activity.
*BuyerApi* | [**getBuyerProfile**](docs/Api/BuyerApi.md#getbuyerprofile) | **GET** /v1/buyer/profile | Your Crossly shopping profile — name, email, saved address, Bucks balance.
*BuyerApi* | [**listBuyerActivity**](docs/Api/BuyerApi.md#listbuyeractivity) | **GET** /v1/buyer/activity | What this buyer has compared lately.
*BuyerApi* | [**listBuyerCart**](docs/Api/BuyerApi.md#listbuyercart) | **GET** /v1/buyer/cart | What is in your Crossly cart.
*BuyerApi* | [**listBuyerCashback**](docs/Api/BuyerApi.md#listbuyercashback) | **GET** /v1/buyer/cashback | Your Scout cashback — pending, confirmed, paid.
*BuyerApi* | [**listBuyerOrders**](docs/Api/BuyerApi.md#listbuyerorders) | **GET** /v1/buyer/orders | What you have bought on Crossly, newest first.
*BuyerApi* | [**listBuyerWishlistItems**](docs/Api/BuyerApi.md#listbuyerwishlistitems) | **GET** /v1/buyer/wishlists/{id}/items | What is on one wishlist.
*BuyerApi* | [**listBuyerWishlists**](docs/Api/BuyerApi.md#listbuyerwishlists) | **GET** /v1/buyer/wishlists | Your wishlists.
*BuyerCatalogApi* | [**createBuyerIdentify**](docs/Api/BuyerCatalogApi.md#createbuyeridentify) | **POST** /v1/buyer/identify | Identify a held object and return a HUD-ready answer.
*BuyerCatalogApi* | [**createBuyerLockon**](docs/Api/BuyerCatalogApi.md#createbuyerlockon) | **POST** /v1/buyer/lockons | Lock on to an object the buyer is holding.
*BuyerCatalogApi* | [**createBuyerLockonConfirm**](docs/Api/BuyerCatalogApi.md#createbuyerlockonconfirm) | **POST** /v1/buyer/lockons/{id}/confirm | The buyer picked one of the candidates.
*BuyerCatalogApi* | [**createBuyerLockonObserve**](docs/Api/BuyerCatalogApi.md#createbuyerlockonobserve) | **POST** /v1/buyer/lockons/{id}/observe | Add what this frame revealed, and get the current best answer.
*BuyerCatalogApi* | [**createBuyerScan**](docs/Api/BuyerCatalogApi.md#createbuyerscan) | **POST** /v1/buyer/scan | Identify a physical item and find the cheapest place to buy it.
*BuyerCatalogApi* | [**createBuyerScanSession**](docs/Api/BuyerCatalogApi.md#createbuyerscansession) | **POST** /v1/buyer/scan/sessions | Open a Live Shop session.
*BuyerCatalogApi* | [**createBuyerScanSessionEnd**](docs/Api/BuyerCatalogApi.md#createbuyerscansessionend) | **POST** /v1/buyer/scan/sessions/{id}/end | Close a Live Shop session.
*BuyerCatalogApi* | [**getBuyerAnywhere**](docs/Api/BuyerCatalogApi.md#getbuyeranywhere) | **GET** /v1/buyer/anywhere | Cheapest source for an item — Crossly first, then other retailers.
*BuyerCatalogApi* | [**getBuyerCatalogFacet**](docs/Api/BuyerCatalogApi.md#getbuyercatalogfacet) | **GET** /v1/buyer/catalog/facets | Brands, categories and conditions that currently have stock.
*BuyerCatalogApi* | [**getBuyerCatalogListing**](docs/Api/BuyerCatalogApi.md#getbuyercataloglisting) | **GET** /v1/buyer/catalog/listings/{slug} | One listing, in full.
*BuyerCatalogApi* | [**getBuyerCatalogListingAvailability**](docs/Api/BuyerCatalogApi.md#getbuyercataloglistingavailability) | **GET** /v1/buyer/catalog/listings/{slug}/availability | Is it still buyable, and at what price.
*BuyerCatalogApi* | [**getBuyerScanSession**](docs/Api/BuyerCatalogApi.md#getbuyerscansession) | **GET** /v1/buyer/scan/sessions/{id} | One trip and everything it found.
*BuyerCatalogApi* | [**listBuyerCatalogSearch**](docs/Api/BuyerCatalogApi.md#listbuyercatalogsearch) | **GET** /v1/buyer/catalog/search | Search the Crossly catalogue.
*BuyerCatalogApi* | [**listBuyerScanSessions**](docs/Api/BuyerCatalogApi.md#listbuyerscansessions) | **GET** /v1/buyer/scan/sessions | Your scanning trips, newest first.
*BuyerCheckoutApi* | [**createBuyerCheckout**](docs/Api/BuyerCheckoutApi.md#createbuyercheckout) | **POST** /v1/buyer/checkout | Buy a listing without being present.
*BuyerCheckoutApi* | [**getBuyerCheckoutControl**](docs/Api/BuyerCheckoutApi.md#getbuyercheckoutcontrol) | **GET** /v1/buyer/checkout/controls | What this key is allowed to spend.
*BuyerCheckoutApi* | [**updateBuyerCheckoutControl**](docs/Api/BuyerCheckoutApi.md#updatebuyercheckoutcontrol) | **PUT** /v1/buyer/checkout/controls | Switch this key on for spending, and set its limits.
*BuyerMonitorsApi* | [**createBuyerMonitor**](docs/Api/BuyerMonitorsApi.md#createbuyermonitor) | **POST** /v1/buyer/monitors | Watch a search, and be told when it matches.
*BuyerMonitorsApi* | [**deleteBuyerMonitor**](docs/Api/BuyerMonitorsApi.md#deletebuyermonitor) | **DELETE** /v1/buyer/monitors/{id} | Delete a monitor.
*BuyerMonitorsApi* | [**listBuyerMonitorMatches**](docs/Api/BuyerMonitorsApi.md#listbuyermonitormatches) | **GET** /v1/buyer/monitors/{id}/matches | What this monitor has matched.
*BuyerMonitorsApi* | [**listBuyerMonitors**](docs/Api/BuyerMonitorsApi.md#listbuyermonitors) | **GET** /v1/buyer/monitors | Your monitors.
*BuyerMonitorsApi* | [**updateBuyerMonitor**](docs/Api/BuyerMonitorsApi.md#updatebuyermonitor) | **PATCH** /v1/buyer/monitors/{id} | Pause, resume or rename a monitor.

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
- [InlineObject4](docs/Model/InlineObject4.md)
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
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
